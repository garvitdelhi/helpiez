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
namespace Facebook\HttpClients;

use Facebook\FacebookSDKException;

/**
 * Class FacebookCurlHttpClient
 * @package Facebook
 */
class FacebookCurlHttpClient_Original implements FacebookHttpable
{

  /**
   * @var array The headers to be sent with the request
   */
  protected $requestHeaders = array();

  /**
   * @var array The headers received from the response
   */
  protected $responseHeaders = array();

  /**
   * @var int The HTTP status code returned from the server
   */
  protected $responseHttpStatusCode = 0;

  /**
   * @var string The client error message
   */
  protected $curlErrorMessage = '';

  /**
   * @var int The curl client error code
   */
  protected $curlErrorCode = 0;

  /**
   * @var string|boolean The raw response from the server
   */
  protected $rawResponse;

  /**
   * @var FacebookCurl Procedural curl as object
   */
  protected static $facebookCurl;

  /**
   * @var boolean If IPv6 should be disabled
   */
  protected static $disableIPv6;

  /**
   * @const Curl Version which is unaffected by the proxy header length error.
   */
  const CURL_PROXY_QUIRK_VER = 0x071E00;

  /**
   * @const "Connection Established" header text
   */
  const CONNECTION_ESTABLISHED = "HTTP/1.0 200 Connection established\r\n\r\n";

  /**
   * @param FacebookCurl|null Procedural curl as object
   */
  public function __construct(FacebookCurl $facebookCurl = null)
  {
    self::$facebookCurl = $facebookCurl ?: new FacebookCurl();
    self::$disableIPv6 = self::$disableIPv6 ?: false;
  }

  /**
   * Disable IPv6 resolution
   */
  public function disableIPv6()
  {
    self::$disableIPv6 = true;
  }

  /**
   * The headers we want to send with the request
   *
   * @param string $key
   * @param string $value
   */
  public function addRequestHeader($key, $value)
  {
    $this->requestHeaders[$key] = $value;
  }

  /**
   * The headers returned in the response
   *
   * @return array
   */
  public function getResponseHeaders()
  {
    return $this->responseHeaders;
  }

  /**
   * The HTTP status response code
   *
   * @return int
   */
  public function getResponseHttpStatusCode()
  {
    return $this->responseHttpStatusCode;
  }

  /**
   * Sends a request to the server
   *
   * @param string $url The endpoint to send the request to
   * @param string $method The request method
   * @param array  $parameters The key value pairs to be sent in the body
   *
   * @return string Raw response from the server
   *
   * @throws \Facebook\FacebookSDKException
   */
  public function send($url, $method = 'GET', $parameters = array())
  {
    $this->openConnection($url, $method, $parameters);
    $this->tryToSendRequest();

    if ($this->curlErrorCode) {
      throw new FacebookSDKException($this->curlErrorMessage, $this->curlErrorCode);
    }

    // Separate the raw headers from the raw body
    list($rawHeaders, $rawBody) = $this->extractResponseHeadersAndBody();

    $this->responseHeaders = self::headersToArray($rawHeaders);

    $this->closeConnection();

    return $rawBody;
  }

  /**
   * Opens a new curl connection
   *
   * @param string $url The endpoint to send the request to
   * @param string $method The request method
   * @param array  $parameters The key value pairs to be sent in the body
   */
  public function openConnection($url, $method = 'GET', $parameters = array())
  {
    $options = array(
      CURLOPT_URL            => $url,
      CURLOPT_CONNECTTIMEOUT => 10,
      CURLOPT_TIMEOUT        => 60,
      CURLOPT_RETURNTRANSFER => true, // Follow 301 redirects
      CURLOPT_HEADER         => true, // Enable header processing
      CURLOPT_SSL_VERIFYHOST => 2,
      CURLOPT_SSL_VERIFYPEER => true,
      CURLOPT_CAINFO         => __DIR__ . '/certs/DigiCertHighAssuranceEVRootCA.pem',
    );

    if ($method !== "GET") {
      $options[CURLOPT_POSTFIELDS] = $parameters;
    }
    if ($method === 'DELETE' || $method === 'PUT') {
      $options[CURLOPT_CUSTOMREQUEST] = $method;
    }

    if (!empty($this->requestHeaders)) {
      $options[CURLOPT_HTTPHEADER] = $this->compileRequestHeaders();
    }

    if (self::$disableIPv6) {
      $options[CURLOPT_IPRESOLVE] = CURL_IPRESOLVE_V4;
    }

    self::$facebookCurl->init();
    self::$facebookCurl->setopt_array($options);
  }

  /**
   * Closes an existing curl connection
   */
  public function closeConnection()
  {
    self::$facebookCurl->close();
  }

  /**
   * Try to send the request
   */
  public function tryToSendRequest()
  {
    $this->sendRequest();
    $this->curlErrorMessage = self::$facebookCurl->error();
    $this->curlErrorCode = self::$facebookCurl->errno();
    $this->responseHttpStatusCode = self::$facebookCurl->getinfo(CURLINFO_HTTP_CODE);
  }

  /**
   * Send the request and get the raw response from curl
   */
  public function sendRequest()
  {
    $this->rawResponse = self::$facebookCurl->exec();
  }

  /**
   * Compiles the request headers into a curl-friendly format
   *
   * @return array
   */
  public function compileRequestHeaders()
  {
    $return = array();

    foreach ($this->requestHeaders as $key => $value) {
      $return[] = $key . ': ' . $value;
    }

    return $return;
  }

  /**
   * Extracts the headers and the body into a two-part array
   *
   * @return array
   */
  public function extractResponseHeadersAndBody()
  {
    $headerSize = self::getHeaderSize();

    $rawHeaders = mb_substr($this->rawResponse, 0, $headerSize);
    $rawBody = mb_substr($this->rawResponse, $headerSize);

    return array(trim($rawHeaders), trim($rawBody));
  }

  /**
   * Converts raw header responses into an array
   *
   * @param string $rawHeaders
   *
   * @return array
   */
  public static function headersToArray($rawHeaders)
  {
    $headers = array();

    // Normalize line breaks
    $rawHeaders = str_replace("\r\n", "\n", $rawHeaders);

    // There will be multiple headers if a 301 was followed
    // or a proxy was followed, etc
    $headerCollection = explode("\n\n", trim($rawHeaders));
    // We just want the last response (at the end)
    $rawHeader = array_pop($headerCollection);

    $headerComponents = explode("\n", $rawHeader);
    foreach ($headerComponents as $line) {
      if (strpos($line, ': ') === false) {
        $headers['http_code'] = $line;
      } else {
        list ($key, $value) = explode(': ', $line);
        $headers[$key] = $value;
      }
    }

    return $headers;
  }

  /**
   * Return proper header size
   *
   * @return integer
   */
  private function getHeaderSize()
  {
    $headerSize = self::$facebookCurl->getinfo(CURLINFO_HEADER_SIZE);
    // This corrects a Curl bug where header size does not account
    // for additional Proxy headers.
    if ( self::needsCurlProxyFix() ) {
      // Additional way to calculate the request body size.
      if (preg_match('/Content-Length: (\d+)/', $this->rawResponse, $m)) {
          $headerSize = mb_strlen($this->rawResponse) - $m[1];
      } elseif (stripos($this->rawResponse, self::CONNECTION_ESTABLISHED) !== false) {
          $headerSize += mb_strlen(self::CONNECTION_ESTABLISHED);
      }
    }

    return $headerSize;
  }

  /**
   * Detect versions of Curl which report incorrect header lengths when
   * using Proxies.
   *
   * @return boolean
   */
  private static function needsCurlProxyFix()
  {
    $ver = self::$facebookCurl->version();
    $version = $ver['version_number'];

    return $version < self::CURL_PROXY_QUIRK_VER;
  }

}
namespace Facebook\HttpClients;

use Doctrine\ORM\Mapping as ORM;
use TYPO3\Flow\Annotations as Flow;

/**
 * Class FacebookCurlHttpClient
 */
class FacebookCurlHttpClient extends FacebookCurlHttpClient_Original implements \TYPO3\Flow\Object\Proxy\ProxyInterface {


	/**
	 * Autogenerated Proxy Method
	 * @param FacebookCurl|null Procedural curl as object
	 */
	public function __construct() {
		$arguments = func_get_args();

		if (!array_key_exists(0, $arguments)) $arguments[0] = NULL;
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
	$reflectedClass = new \ReflectionClass('Facebook\HttpClients\FacebookCurlHttpClient');
	$allReflectedProperties = $reflectedClass->getProperties();
	foreach ($allReflectedProperties as $reflectionProperty) {
		$propertyName = $reflectionProperty->name;
		if (in_array($propertyName, array('Flow_Aop_Proxy_targetMethodsAndGroupedAdvices', 'Flow_Aop_Proxy_groupedAdviceChains', 'Flow_Aop_Proxy_methodIsInAdviceMode'))) continue;
		if (isset($this->Flow_Injected_Properties) && is_array($this->Flow_Injected_Properties) && in_array($propertyName, $this->Flow_Injected_Properties)) continue;
		if ($reflectionService->isPropertyAnnotatedWith('Facebook\HttpClients\FacebookCurlHttpClient', $propertyName, 'TYPO3\Flow\Annotations\Transient')) continue;
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
				$varTagValues = $reflectionService->getPropertyTagValues('Facebook\HttpClients\FacebookCurlHttpClient', $propertyName, 'var');
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