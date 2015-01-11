<?php 
/**
 * Copyright 2014 Facebook, Inc.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 */
namespace Facebook;

use Facebook\Entities\AccessToken;
use Facebook\Entities\SignedRequest;

/**
 * Class FacebookSession
 * @package Facebook
 * @author Fosco Marotto <fjm@fb.com>
 * @author David Poll <depoll@fb.com>
 */
class FacebookSession_Original
{

  /**
   * @var string
   */
  private static $defaultAppId;

  /**
   * @var string
   */
  private static $defaultAppSecret;

  /**
   * @var AccessToken The AccessToken entity for this connection.
   */
  private $accessToken;

  /**
   * @var SignedRequest
   */
  private $signedRequest;

  /**
   * @var bool
   */
  protected static $useAppSecretProof = true;

  /**
   * When creating a Session from an access_token, use:
   *   var $session = new FacebookSession($accessToken);
   * This will validate the token and provide a Session object ready for use.
   * It will throw a SessionException in case of error.
   *
   * @param AccessToken|string $accessToken
   * @param SignedRequest $signedRequest The SignedRequest entity
   */
  public function __construct($accessToken, SignedRequest $signedRequest = null)
  {
    $this->accessToken = $accessToken instanceof AccessToken ? $accessToken : new AccessToken($accessToken);
    $this->signedRequest = $signedRequest;
  }

  /**
   * Returns the access token.
   *
   * @return string
   */
  public function getToken()
  {
    return (string) $this->accessToken;
  }

  /**
   * Returns the access token entity.
   *
   * @return AccessToken
   */
  public function getAccessToken()
  {
    return $this->accessToken;
  }

  /**
   * Returns the SignedRequest entity.
   *
   * @return SignedRequest
   */
  public function getSignedRequest()
  {
    return $this->signedRequest;
  }

  /**
   * Returns the signed request payload.
   *
   * @return null|array
   */
  public function getSignedRequestData()
  {
    return $this->signedRequest ? $this->signedRequest->getPayload() : null;
  }

  /**
   * Returns a property from the signed request data if available.
   *
   * @param string $key
   *
   * @return null|mixed
   */
  public function getSignedRequestProperty($key)
  {
    return $this->signedRequest ? $this->signedRequest->get($key) : null;
  }

  /**
   * Returns user_id from signed request data if available.
   *
   * @return null|string
   */
  public function getUserId()
  {
    return $this->signedRequest ? $this->signedRequest->getUserId() : null;
  }

  // @TODO Remove getSessionInfo() in 4.1: can be accessed from AccessToken directly
  /**
   * getSessionInfo - Makes a request to /debug_token with the appropriate
   *   arguments to get debug information about the sessions token.
   *
   * @param string|null $appId
   * @param string|null $appSecret
   *
   * @return GraphSessionInfo
   */
  public function getSessionInfo($appId = null, $appSecret = null)
  {
    return $this->accessToken->getInfo($appId, $appSecret);
  }

  // @TODO Remove getLongLivedSession() in 4.1: can be accessed from AccessToken directly
  /**
   * getLongLivedSession - Returns a new Facebook session resulting from
   *   extending a short-lived access token.  If this session is not
   *   short-lived, returns $this.
   *
   * @param string|null $appId
   * @param string|null $appSecret
   *
   * @return FacebookSession
   */
  public function getLongLivedSession($appId = null, $appSecret = null)
  {
    $longLivedAccessToken = $this->accessToken->extend($appId, $appSecret);
    return new static($longLivedAccessToken, $this->signedRequest);
  }

  // @TODO Remove getExchangeToken() in 4.1: can be accessed from AccessToken directly
  /**
   * getExchangeToken - Returns an exchange token string which can be sent
   *   back to clients and exchanged for a device-linked access token.
   *
   * @param string|null $appId
   * @param string|null $appSecret
   *
   * @return string
   */
  public function getExchangeToken($appId = null, $appSecret = null)
  {
    return AccessToken::getCodeFromAccessToken($this->accessToken, $appId, $appSecret);
  }

  // @TODO Remove validate() in 4.1: can be accessed from AccessToken directly
  /**
   * validate - Ensures the current session is valid, throwing an exception if
   *   not.  Fetches token info from Facebook.
   *
   * @param string|null $appId Application ID to use
   * @param string|null $appSecret App secret value to use
   * @param string|null $machineId
   *
   * @return boolean
   *
   * @throws FacebookSDKException
   */
  public function validate($appId = null, $appSecret = null, $machineId = null)
  {
    if ($this->accessToken->isValid($appId, $appSecret, $machineId)) {
      return true;
    }

    // @TODO For v4.1 this should not throw an exception, but just return false.
    throw new FacebookSDKException(
      'Session has expired, or is not valid for this app.', 601
    );
  }

  // @TODO Remove validateSessionInfo() in 4.1: can be accessed from AccessToken directly
  /**
   * validateTokenInfo - Ensures the provided GraphSessionInfo object is valid,
   *   throwing an exception if not.  Ensures the appId matches,
   *   that the token is valid and has not expired.
   *
   * @param GraphSessionInfo $tokenInfo
   * @param string|null $appId Application ID to use
   * @param string|null $machineId
   *
   * @return boolean
   *
   * @throws FacebookSDKException
   */
  public static function validateSessionInfo(GraphSessionInfo $tokenInfo,
                                           $appId = null,
                                           $machineId = null)
  {
    if (AccessToken::validateAccessToken($tokenInfo, $appId, $machineId)) {
      return true;
    }

    // @TODO For v4.1 this should not throw an exception, but just return false.
    throw new FacebookSDKException(
      'Session has expired, or is not valid for this app.', 601
    );
  }

  /**
   * newSessionFromSignedRequest - Returns a FacebookSession for a
   *   given signed request.
   *
   * @param SignedRequest $signedRequest
   *
   * @return FacebookSession
   */
  public static function newSessionFromSignedRequest(SignedRequest $signedRequest)
  {
    if ($signedRequest->get('code')
      && !$signedRequest->get('oauth_token')) {
      return self::newSessionAfterValidation($signedRequest);
    }
    $accessToken = $signedRequest->get('oauth_token');
    $expiresAt = $signedRequest->get('expires', 0);
    $accessToken = new AccessToken($accessToken, $expiresAt);
    return new static($accessToken, $signedRequest);
  }

  /**
   * newSessionAfterValidation - Returns a FacebookSession for a
   *   validated & parsed signed request.
   *
   * @param SignedRequest $signedRequest
   *
   * @return FacebookSession
   */
  protected static function newSessionAfterValidation(SignedRequest $signedRequest)
  {
    $code = $signedRequest->get('code');
    $accessToken = AccessToken::getAccessTokenFromCode($code);
    return new static($accessToken, $signedRequest);
  }

  /**
   * newAppSession - Returns a FacebookSession configured with a token for the
   *   application which can be used for publishing and requesting app-level
   *   information.
   *
   * @param string|null $appId Application ID to use
   * @param string|null $appSecret App secret value to use
   *
   * @return FacebookSession
   */
  public static function newAppSession($appId = null, $appSecret = null)
  {
    $targetAppId = static::_getTargetAppId($appId);
    $targetAppSecret = static::_getTargetAppSecret($appSecret);
    return new FacebookSession(
      $targetAppId . '|' . $targetAppSecret
    );
  }

  /**
   * setDefaultApplication - Will set the static default appId and appSecret
   *   to be used for API requests.
   *
   * @param string $appId Application ID to use by default
   * @param string $appSecret App secret value to use by default
   */
  public static function setDefaultApplication($appId, $appSecret)
  {
    self::$defaultAppId = $appId;
    self::$defaultAppSecret = $appSecret;
  }

  /**
   * _getTargetAppId - Will return either the provided app Id or the default,
   *   throwing if neither are populated.
   *
   * @param string $appId
   *
   * @return string
   *
   * @throws FacebookSDKException
   */
  public static function _getTargetAppId($appId = null) {
    $target = ($appId ?: self::$defaultAppId);
    if (!$target) {
      throw new FacebookSDKException(
        'You must provide or set a default application id.', 700
      );
    }
    return $target;
  }

  /**
   * _getTargetAppSecret - Will return either the provided app secret or the
   *   default, throwing if neither are populated.
   *
   * @param string $appSecret
   *
   * @return string
   *
   * @throws FacebookSDKException
   */
  public static function _getTargetAppSecret($appSecret = null) {
    $target = ($appSecret ?: self::$defaultAppSecret);
    if (!$target) {
      throw new FacebookSDKException(
        'You must provide or set a default application secret.', 701
      );
    }
    return $target;
  }

  /**
   * Enable or disable sending the appsecret_proof with requests.
   *
   * @param bool $on
   */
  public static function enableAppSecretProof($on = true)
  {
    static::$useAppSecretProof = ($on ? true : false);
  }

  /**
   * Get whether or not appsecret_proof should be sent with requests.
   *
   * @return bool
   */
  public static function useAppSecretProof()
  {
    return static::$useAppSecretProof;
  }

}
namespace Facebook;

use Doctrine\ORM\Mapping as ORM;
use TYPO3\Flow\Annotations as Flow;

/**
 * Class FacebookSession
 */
class FacebookSession extends FacebookSession_Original implements \TYPO3\Flow\Object\Proxy\ProxyInterface {


	/**
	 * Autogenerated Proxy Method
	 * @param AccessToken|string $accessToken
	 * @param SignedRequest $signedRequest The SignedRequest entity
	 */
	public function __construct() {
		$arguments = func_get_args();

		if (!array_key_exists(0, $arguments)) $arguments[0] = NULL;
		if (!array_key_exists(1, $arguments)) $arguments[1] = NULL;
		if (!array_key_exists(0, $arguments)) throw new \TYPO3\Flow\Object\Exception\UnresolvedDependenciesException('Missing required constructor argument $accessToken in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
		call_user_func_array('parent::__construct', $arguments);
	}

	/**
	 * Autogenerated Proxy Method
	 */
	 public function __wakeup() {

	if (property_exists($this, 'Flow_Persistence_RelatedEntities') && is_array($this->Flow_Persistence_RelatedEntities)) {
		$persistenceManager = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Persistence\PersistenceManagerInterface');
		foreach ($this->Flow_Persistence_RelatedEntities as $entityInformation) {
			$entity = $persistenceManager->getObjectByIdentifier($entityInformation['identifier'], $entityInformation['entityType'], TRUE);
			if (isset($entityInformation['entityPath'])) {
				$this->$entityInformation['propertyName'] = \TYPO3\Flow\Utility\Arrays::setValueByPath($this->$entityInformation['propertyName'], $entityInformation['entityPath'], $entity);
			} else {
				$this->$entityInformation['propertyName'] = $entity;
			}
		}
		unset($this->Flow_Persistence_RelatedEntities);
	}
			}

	/**
	 * Autogenerated Proxy Method
	 */
	 public function __sleep() {
		$result = NULL;
		$this->Flow_Object_PropertiesToSerialize = array();
	$reflectionService = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Reflection\ReflectionService');
	$reflectedClass = new \ReflectionClass('Facebook\FacebookSession');
	$allReflectedProperties = $reflectedClass->getProperties();
	foreach ($allReflectedProperties as $reflectionProperty) {
		$propertyName = $reflectionProperty->name;
		if (in_array($propertyName, array('Flow_Aop_Proxy_targetMethodsAndGroupedAdvices', 'Flow_Aop_Proxy_groupedAdviceChains', 'Flow_Aop_Proxy_methodIsInAdviceMode'))) continue;
		if (isset($this->Flow_Injected_Properties) && is_array($this->Flow_Injected_Properties) && in_array($propertyName, $this->Flow_Injected_Properties)) continue;
		if ($reflectionService->isPropertyAnnotatedWith('Facebook\FacebookSession', $propertyName, 'TYPO3\Flow\Annotations\Transient')) continue;
		if (is_array($this->$propertyName) || (is_object($this->$propertyName) && ($this->$propertyName instanceof \ArrayObject || $this->$propertyName instanceof \SplObjectStorage ||$this->$propertyName instanceof \Doctrine\Common\Collections\Collection))) {
			if (count($this->$propertyName) > 0) {
				foreach ($this->$propertyName as $key => $value) {
					$this->searchForEntitiesAndStoreIdentifierArray((string)$key, $value, $propertyName);
				}
			}
		}
		if (is_object($this->$propertyName) && !$this->$propertyName instanceof \Doctrine\Common\Collections\Collection) {
			if ($this->$propertyName instanceof \Doctrine\ORM\Proxy\Proxy) {
				$className = get_parent_class($this->$propertyName);
			} else {
				$varTagValues = $reflectionService->getPropertyTagValues('Facebook\FacebookSession', $propertyName, 'var');
				if (count($varTagValues) > 0) {
					$className = trim($varTagValues[0], '\\');
				}
				if (\TYPO3\Flow\Core\Bootstrap::$staticObjectManager->isRegistered($className) === FALSE) {
					$className = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getObjectNameByClassName(get_class($this->$propertyName));
				}
			}
			if ($this->$propertyName instanceof \TYPO3\Flow\Persistence\Aspect\PersistenceMagicInterface && !\TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Persistence\PersistenceManagerInterface')->isNewObject($this->$propertyName) || $this->$propertyName instanceof \Doctrine\ORM\Proxy\Proxy) {
				if (!property_exists($this, 'Flow_Persistence_RelatedEntities') || !is_array($this->Flow_Persistence_RelatedEntities)) {
					$this->Flow_Persistence_RelatedEntities = array();
					$this->Flow_Object_PropertiesToSerialize[] = 'Flow_Persistence_RelatedEntities';
				}
				$identifier = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Persistence\PersistenceManagerInterface')->getIdentifierByObject($this->$propertyName);
				if (!$identifier && $this->$propertyName instanceof \Doctrine\ORM\Proxy\Proxy) {
					$identifier = current(\TYPO3\Flow\Reflection\ObjectAccess::getProperty($this->$propertyName, '_identifier', TRUE));
				}
				$this->Flow_Persistence_RelatedEntities[$propertyName] = array(
					'propertyName' => $propertyName,
					'entityType' => $className,
					'identifier' => $identifier
				);
				continue;
			}
			if ($className !== FALSE && (\TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getScope($className) === \TYPO3\Flow\Object\Configuration\Configuration::SCOPE_SINGLETON || $className === 'TYPO3\Flow\Object\DependencyInjection\DependencyProxy')) {
				continue;
			}
		}
		$this->Flow_Object_PropertiesToSerialize[] = $propertyName;
	}
	$result = $this->Flow_Object_PropertiesToSerialize;
		return $result;
	}

	/**
	 * Autogenerated Proxy Method
	 */
	 private function searchForEntitiesAndStoreIdentifierArray($path, $propertyValue, $originalPropertyName) {

		if (is_array($propertyValue) || (is_object($propertyValue) && ($propertyValue instanceof \ArrayObject || $propertyValue instanceof \SplObjectStorage))) {
			foreach ($propertyValue as $key => $value) {
				$this->searchForEntitiesAndStoreIdentifierArray($path . '.' . $key, $value, $originalPropertyName);
			}
		} elseif ($propertyValue instanceof \TYPO3\Flow\Persistence\Aspect\PersistenceMagicInterface && !\TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Persistence\PersistenceManagerInterface')->isNewObject($propertyValue) || $propertyValue instanceof \Doctrine\ORM\Proxy\Proxy) {
			if (!property_exists($this, 'Flow_Persistence_RelatedEntities') || !is_array($this->Flow_Persistence_RelatedEntities)) {
				$this->Flow_Persistence_RelatedEntities = array();
				$this->Flow_Object_PropertiesToSerialize[] = 'Flow_Persistence_RelatedEntities';
			}
			if ($propertyValue instanceof \Doctrine\ORM\Proxy\Proxy) {
				$className = get_parent_class($propertyValue);
			} else {
				$className = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->getObjectNameByClassName(get_class($propertyValue));
			}
			$identifier = \TYPO3\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3\Flow\Persistence\PersistenceManagerInterface')->getIdentifierByObject($propertyValue);
			if (!$identifier && $propertyValue instanceof \Doctrine\ORM\Proxy\Proxy) {
				$identifier = current(\TYPO3\Flow\Reflection\ObjectAccess::getProperty($propertyValue, '_identifier', TRUE));
			}
			$this->Flow_Persistence_RelatedEntities[$originalPropertyName . '.' . $path] = array(
				'propertyName' => $originalPropertyName,
				'entityType' => $className,
				'identifier' => $identifier,
				'entityPath' => $path
			);
			$this->$originalPropertyName = \TYPO3\Flow\Utility\Arrays::setValueByPath($this->$originalPropertyName, $path, NULL);
		}
			}
}
#