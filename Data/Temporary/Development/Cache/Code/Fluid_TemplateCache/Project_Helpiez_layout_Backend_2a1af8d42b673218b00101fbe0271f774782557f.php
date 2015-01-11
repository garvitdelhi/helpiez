<?php class FluidCache_Project_Helpiez_layout_Backend_2a1af8d42b673218b00101fbe0271f774782557f extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new \TYPO3\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<!DOCTYPE html>
<html xmlns:f="http://www.w3.org/1999/XSL/Transform">

<head>

    <title>Helpiez</title>

    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />

    <meta name="description" content="Mint by Grozav is a flat design approach towards Admin Dashboards. Intuitive, cutting-edge, clean and easy to use and customize, as every Application UI should be. " />

    <!-- Core CSS - Include with every page -->
    <link href="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments1 = array();
$arguments1['path'] = 'Backend/css/style.css';
$arguments1['package'] = NULL;
$arguments1['resource'] = NULL;
$arguments1['localize'] = true;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '" rel="stylesheet" type="text/css" />
    <link href="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments4 = array();
$arguments4['path'] = 'Backend/css/bootstrap.css';
$arguments4['package'] = NULL;
$arguments4['resource'] = NULL;
$arguments4['localize'] = true;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper6->setArguments($arguments4);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper6->initializeArgumentsAndRender();

$output0 .= '" rel="stylesheet" />
    <link href="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments7 = array();
$arguments7['path'] = 'Backend/css/font-awesome-4.1.0/css/font-awesome.min.css';
$arguments7['package'] = NULL;
$arguments7['resource'] = NULL;
$arguments7['localize'] = true;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper9->setArguments($arguments7);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper9->initializeArgumentsAndRender();

$output0 .= '" rel="stylesheet" />
    <link href="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments10 = array();
$arguments10['path'] = 'Backend/css/plugins/morris/morris-0.4.3.min.css';
$arguments10['package'] = NULL;
$arguments10['resource'] = NULL;
$arguments10['localize'] = true;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper12 = $self->getViewHelper('$viewHelper12', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper12->setArguments($arguments10);
$viewHelper12->setRenderingContext($renderingContext);
$viewHelper12->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper12->initializeArgumentsAndRender();

$output0 .= '" rel="stylesheet" />
    <link href="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments13 = array();
$arguments13['path'] = 'Backend/css/plugins/timeline/timeline.css';
$arguments13['package'] = NULL;
$arguments13['resource'] = NULL;
$arguments13['localize'] = true;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper15->setArguments($arguments13);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure14);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper15->initializeArgumentsAndRender();

$output0 .= '" rel="stylesheet" />
    <link href="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments16 = array();
$arguments16['path'] = 'Backend/css/mint-admin.css';
$arguments16['package'] = NULL;
$arguments16['resource'] = NULL;
$arguments16['localize'] = true;
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper18 = $self->getViewHelper('$viewHelper18', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper18->setArguments($arguments16);
$viewHelper18->setRenderingContext($renderingContext);
$viewHelper18->setRenderChildrenClosure($renderChildrenClosure17);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper18->initializeArgumentsAndRender();

$output0 .= '" rel="stylesheet" />
    <link href="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments19 = array();
$arguments19['path'] = 'Backend/css/plugins/social-buttons/social-buttons.css';
$arguments19['package'] = NULL;
$arguments19['resource'] = NULL;
$arguments19['localize'] = true;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper21 = $self->getViewHelper('$viewHelper21', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper21->setArguments($arguments19);
$viewHelper21->setRenderingContext($renderingContext);
$viewHelper21->setRenderChildrenClosure($renderChildrenClosure20);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper21->initializeArgumentsAndRender();

$output0 .= '" rel="stylesheet" />
    <script src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments22 = array();
$arguments22['path'] = 'Backend/js/jquery.min.js';
$arguments22['package'] = NULL;
$arguments22['resource'] = NULL;
$arguments22['localize'] = true;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper24 = $self->getViewHelper('$viewHelper24', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper24->setArguments($arguments22);
$viewHelper24->setRenderingContext($renderingContext);
$viewHelper24->setRenderChildrenClosure($renderChildrenClosure23);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper24->initializeArgumentsAndRender();

$output0 .= '" type="text/javascript"></script>
    <script src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments25 = array();
$arguments25['path'] = 'Backend/js/myscript.js';
$arguments25['package'] = NULL;
$arguments25['resource'] = NULL;
$arguments25['localize'] = true;
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper27 = $self->getViewHelper('$viewHelper27', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper27->setArguments($arguments25);
$viewHelper27->setRenderingContext($renderingContext);
$viewHelper27->setRenderChildrenClosure($renderChildrenClosure26);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper27->initializeArgumentsAndRender();

$output0 .= '" type="text/javascript"></script>
    <script src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments28 = array();
$arguments28['path'] = 'Backend/js/jquery-1.10.2.js';
$arguments28['package'] = NULL;
$arguments28['resource'] = NULL;
$arguments28['localize'] = true;
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper30 = $self->getViewHelper('$viewHelper30', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper30->setArguments($arguments28);
$viewHelper30->setRenderingContext($renderingContext);
$viewHelper30->setRenderChildrenClosure($renderChildrenClosure29);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper30->initializeArgumentsAndRender();

$output0 .= '"></script>
    <script src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments31 = array();
$arguments31['path'] = 'Backend/js/bootstrap.min.js';
$arguments31['package'] = NULL;
$arguments31['resource'] = NULL;
$arguments31['localize'] = true;
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper33 = $self->getViewHelper('$viewHelper33', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper33->setArguments($arguments31);
$viewHelper33->setRenderingContext($renderingContext);
$viewHelper33->setRenderChildrenClosure($renderChildrenClosure32);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper33->initializeArgumentsAndRender();

$output0 .= '"></script>
    <script src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments34 = array();
$arguments34['path'] = 'Backend/js/plugins/metisMenu/jquery.metisMenu.js';
$arguments34['package'] = NULL;
$arguments34['resource'] = NULL;
$arguments34['localize'] = true;
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper36 = $self->getViewHelper('$viewHelper36', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper36->setArguments($arguments34);
$viewHelper36->setRenderingContext($renderingContext);
$viewHelper36->setRenderChildrenClosure($renderChildrenClosure35);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper36->initializeArgumentsAndRender();

$output0 .= '"></script>
    <script src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments37 = array();
$arguments37['path'] = 'Backend/js/plugins/morris/raphael-2.1.0.min.js';
$arguments37['package'] = NULL;
$arguments37['resource'] = NULL;
$arguments37['localize'] = true;
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper39 = $self->getViewHelper('$viewHelper39', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper39->setArguments($arguments37);
$viewHelper39->setRenderingContext($renderingContext);
$viewHelper39->setRenderChildrenClosure($renderChildrenClosure38);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper39->initializeArgumentsAndRender();

$output0 .= '"></script>
    <script src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments40 = array();
$arguments40['path'] = 'Backend/js/plugins/morris/morris.js';
$arguments40['package'] = NULL;
$arguments40['resource'] = NULL;
$arguments40['localize'] = true;
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper42 = $self->getViewHelper('$viewHelper42', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper42->setArguments($arguments40);
$viewHelper42->setRenderingContext($renderingContext);
$viewHelper42->setRenderChildrenClosure($renderChildrenClosure41);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper42->initializeArgumentsAndRender();

$output0 .= '"></script>
    <script src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments43 = array();
$arguments43['path'] = 'Backend/js/mint-admin.js';
$arguments43['package'] = NULL;
$arguments43['resource'] = NULL;
$arguments43['localize'] = true;
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper45 = $self->getViewHelper('$viewHelper45', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper45->setArguments($arguments43);
$viewHelper45->setRenderingContext($renderingContext);
$viewHelper45->setRenderChildrenClosure($renderChildrenClosure44);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper45->initializeArgumentsAndRender();

$output0 .= '"></script>
    <script src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments46 = array();
$arguments46['path'] = 'Backend/js/demo/dashboard-demo.js';
$arguments46['package'] = NULL;
$arguments46['resource'] = NULL;
$arguments46['localize'] = true;
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper48 = $self->getViewHelper('$viewHelper48', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper48->setArguments($arguments46);
$viewHelper48->setRenderingContext($renderingContext);
$viewHelper48->setRenderChildrenClosure($renderChildrenClosure47);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper48->initializeArgumentsAndRender();

$output0 .= '"></script>
    <!-- <script src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments49 = array();
$arguments49['path'] = 'Backend/js/animate.js';
$arguments49['package'] = NULL;
$arguments49['resource'] = NULL;
$arguments49['localize'] = true;
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper51 = $self->getViewHelper('$viewHelper51', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper51->setArguments($arguments49);
$viewHelper51->setRenderingContext($renderingContext);
$viewHelper51->setRenderChildrenClosure($renderChildrenClosure50);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper51->initializeArgumentsAndRender();

$output0 .= '" type="text/javascript"></script> -->
    <script src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments52 = array();
$arguments52['path'] = 'Backend/js/ajax.js';
$arguments52['package'] = NULL;
$arguments52['resource'] = NULL;
$arguments52['localize'] = true;
$renderChildrenClosure53 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper54 = $self->getViewHelper('$viewHelper54', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper54->setArguments($arguments52);
$viewHelper54->setRenderingContext($renderingContext);
$viewHelper54->setRenderChildrenClosure($renderChildrenClosure53);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper54->initializeArgumentsAndRender();

$output0 .= '" type="text/javascript"></script>
    <script>
        var InfiniteAjaxRequest = function (uri) {
            $.ajax({
                url: uri,
                success: function(data) {
                    // do something with "data"
                    if (data.length > 0) {
                        if(data===\'false\') {
                            window.open("{siteurl}login/extend","","width=500, height=400");
                            window.setTimeout(function() {
                                InfiniteAjaxRequest (uri);
                            },5500);
                        }
                        else if(data===\'logout\'){
                            window.location.assign("{siteurl}")
                        }
                        else {
                            InfiniteAjaxRequest (uri);
                        }
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    InfiniteAjaxRequest (uri);
                }
            });
        };
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    <div id="wrapper">
        <!-- navbar-static-top -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments55 = array();
$arguments55['class'] = 'navbar-brand';
$arguments55['action'] = 'home';
$arguments55['controller'] = 'Backend\\Get';
$arguments55['additionalAttributes'] = NULL;
$arguments55['data'] = NULL;
$arguments55['arguments'] = array (
);
$arguments55['package'] = NULL;
$arguments55['subpackage'] = NULL;
$arguments55['section'] = '';
$arguments55['format'] = '';
$arguments55['additionalParams'] = array (
);
$arguments55['addQueryString'] = false;
$arguments55['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments55['useParentRequest'] = false;
$arguments55['absolute'] = true;
$arguments55['dir'] = NULL;
$arguments55['id'] = NULL;
$arguments55['lang'] = NULL;
$arguments55['style'] = NULL;
$arguments55['title'] = NULL;
$arguments55['accesskey'] = NULL;
$arguments55['tabindex'] = NULL;
$arguments55['onclick'] = NULL;
$arguments55['name'] = NULL;
$arguments55['rel'] = NULL;
$arguments55['rev'] = NULL;
$arguments55['target'] = NULL;
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return 'Dashboard';
};
$viewHelper57 = $self->getViewHelper('$viewHelper57', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper57->setArguments($arguments55);
$viewHelper57->setRenderingContext($renderingContext);
$viewHelper57->setRenderChildrenClosure($renderChildrenClosure56);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper57->initializeArgumentsAndRender();

$output0 .= '
            </div>
            <!-- /.navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-2x fa-fw"></i><span class="notification-icon label label-danger">1</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-2x fa-fw"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments58 = array();
$arguments58['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'my-account-link', $renderingContext);
$arguments58['keepQuotes'] = false;
$arguments58['encoding'] = 'UTF-8';
$arguments58['doubleEncode'] = true;
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$value60 = ($arguments58['value'] !== NULL ? $arguments58['value'] : $renderChildrenClosure59());

$output0 .= !is_string($value60) && !(is_object($value60) && method_exists($value60, '__toString')) ? $value60 : htmlspecialchars($value60, ($arguments58['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments58['encoding'], $arguments58['doubleEncode']);

$output0 .= '"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments61 = array();
$arguments61['action'] = 'logout';
$arguments61['controller'] = 'auth';
$arguments61['additionalAttributes'] = NULL;
$arguments61['data'] = NULL;
$arguments61['arguments'] = array (
);
$arguments61['package'] = NULL;
$arguments61['subpackage'] = NULL;
$arguments61['section'] = '';
$arguments61['format'] = '';
$arguments61['additionalParams'] = array (
);
$arguments61['addQueryString'] = false;
$arguments61['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments61['useParentRequest'] = false;
$arguments61['absolute'] = true;
$arguments61['class'] = NULL;
$arguments61['dir'] = NULL;
$arguments61['id'] = NULL;
$arguments61['lang'] = NULL;
$arguments61['style'] = NULL;
$arguments61['title'] = NULL;
$arguments61['accesskey'] = NULL;
$arguments61['tabindex'] = NULL;
$arguments61['onclick'] = NULL;
$arguments61['name'] = NULL;
$arguments61['rel'] = NULL;
$arguments61['rev'] = NULL;
$arguments61['target'] = NULL;
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return '<i class="fa fa-sign-out fa-fw"></i> Logout';
};
$viewHelper63 = $self->getViewHelper('$viewHelper63', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper63->setArguments($arguments61);
$viewHelper63->setRenderingContext($renderingContext);
$viewHelper63->setRenderChildrenClosure($renderChildrenClosure62);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper63->initializeArgumentsAndRender();

$output0 .= '
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
        </nav>
        <!-- /.navbar-static-top -->

        <!-- /.navbar-static-side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <div class="user-info-wrapper">
                            <div class="user-info-profile-image">
                                <img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments64 = array();
$arguments64['path'] = 'Backend/img/Generic_profile_M.jpg';
$arguments64['package'] = NULL;
$arguments64['resource'] = NULL;
$arguments64['localize'] = true;
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper66 = $self->getViewHelper('$viewHelper66', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper66->setArguments($arguments64);
$viewHelper66->setRenderingContext($renderingContext);
$viewHelper66->setRenderChildrenClosure($renderChildrenClosure65);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper66->initializeArgumentsAndRender();

$output0 .= '" alt="" width="65" height="65" />
                            </div>
                            <div class="user-info">
                                <div class="user-welcome">Welcome</div>
                                <div class="username"><strong>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments67 = array();
$arguments67['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'user.userAccount.Name', $renderingContext);
$arguments67['keepQuotes'] = false;
$arguments67['encoding'] = 'UTF-8';
$arguments67['doubleEncode'] = true;
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$value69 = ($arguments67['value'] !== NULL ? $arguments67['value'] : $renderChildrenClosure68());

$output0 .= !is_string($value69) && !(is_object($value69) && method_exists($value69, '__toString')) ? $value69 : htmlspecialchars($value69, ($arguments67['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments67['encoding'], $arguments67['doubleEncode']);

$output0 .= '</strong></div>
                            </div>
                        </div>
                    </li>
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search Faq ..." />
        	                        <span class="input-group-btn">
        	                            <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
        	                        </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li class="side-panels-custom">
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments70 = array();
$arguments70['action'] = 'home';
$arguments70['controller'] = 'Backend\\Get';
$arguments70['class'] = 'active';
$arguments70['additionalAttributes'] = NULL;
$arguments70['data'] = NULL;
$arguments70['arguments'] = array (
);
$arguments70['package'] = NULL;
$arguments70['subpackage'] = NULL;
$arguments70['section'] = '';
$arguments70['format'] = '';
$arguments70['additionalParams'] = array (
);
$arguments70['addQueryString'] = false;
$arguments70['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments70['useParentRequest'] = false;
$arguments70['absolute'] = true;
$arguments70['dir'] = NULL;
$arguments70['id'] = NULL;
$arguments70['lang'] = NULL;
$arguments70['style'] = NULL;
$arguments70['title'] = NULL;
$arguments70['accesskey'] = NULL;
$arguments70['tabindex'] = NULL;
$arguments70['onclick'] = NULL;
$arguments70['name'] = NULL;
$arguments70['rel'] = NULL;
$arguments70['rev'] = NULL;
$arguments70['target'] = NULL;
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return '<i class="fa fa-home fa-fw fa-3x"></i>Home';
};
$viewHelper72 = $self->getViewHelper('$viewHelper72', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper72->setArguments($arguments70);
$viewHelper72->setRenderingContext($renderingContext);
$viewHelper72->setRenderChildrenClosure($renderChildrenClosure71);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper72->initializeArgumentsAndRender();

$output0 .= '
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments73 = array();
$arguments73['action'] = 'organisation';
$arguments73['controller'] = 'Backend\\Get';
$arguments73['additionalAttributes'] = NULL;
$arguments73['data'] = NULL;
$arguments73['arguments'] = array (
);
$arguments73['package'] = NULL;
$arguments73['subpackage'] = NULL;
$arguments73['section'] = '';
$arguments73['format'] = '';
$arguments73['additionalParams'] = array (
);
$arguments73['addQueryString'] = false;
$arguments73['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments73['useParentRequest'] = false;
$arguments73['absolute'] = true;
$arguments73['class'] = NULL;
$arguments73['dir'] = NULL;
$arguments73['id'] = NULL;
$arguments73['lang'] = NULL;
$arguments73['style'] = NULL;
$arguments73['title'] = NULL;
$arguments73['accesskey'] = NULL;
$arguments73['tabindex'] = NULL;
$arguments73['onclick'] = NULL;
$arguments73['name'] = NULL;
$arguments73['rel'] = NULL;
$arguments73['rev'] = NULL;
$arguments73['target'] = NULL;
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return '<i class="fa fa-file fa-fw fa-3x"></i>NGO Page';
};
$viewHelper75 = $self->getViewHelper('$viewHelper75', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper75->setArguments($arguments73);
$viewHelper75->setRenderingContext($renderingContext);
$viewHelper75->setRenderChildrenClosure($renderChildrenClosure74);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper75->initializeArgumentsAndRender();

$output0 .= '
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments76 = array();
$arguments76['action'] = 'form';
$arguments76['controller'] = 'Backend\\Get';
$arguments76['additionalAttributes'] = NULL;
$arguments76['data'] = NULL;
$arguments76['arguments'] = array (
);
$arguments76['package'] = NULL;
$arguments76['subpackage'] = NULL;
$arguments76['section'] = '';
$arguments76['format'] = '';
$arguments76['additionalParams'] = array (
);
$arguments76['addQueryString'] = false;
$arguments76['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments76['useParentRequest'] = false;
$arguments76['absolute'] = true;
$arguments76['class'] = NULL;
$arguments76['dir'] = NULL;
$arguments76['id'] = NULL;
$arguments76['lang'] = NULL;
$arguments76['style'] = NULL;
$arguments76['title'] = NULL;
$arguments76['accesskey'] = NULL;
$arguments76['tabindex'] = NULL;
$arguments76['onclick'] = NULL;
$arguments76['name'] = NULL;
$arguments76['rel'] = NULL;
$arguments76['rev'] = NULL;
$arguments76['target'] = NULL;
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
return '<i class="fa fa-edit fa-fw fa-3x"></i>Add Event';
};
$viewHelper78 = $self->getViewHelper('$viewHelper78', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper78->setArguments($arguments76);
$viewHelper78->setRenderingContext($renderingContext);
$viewHelper78->setRenderChildrenClosure($renderChildrenClosure77);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper78->initializeArgumentsAndRender();

$output0 .= '

                    </li>
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->
        <div id="page-wrapper">
            <!-- PRELOADER -->
            <div id="preloader"><img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments79 = array();
$arguments79['path'] = 'Backend/img/preloader.gif';
$arguments79['package'] = NULL;
$arguments79['resource'] = NULL;
$arguments79['localize'] = true;
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper81 = $self->getViewHelper('$viewHelper81', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper81->setArguments($arguments79);
$viewHelper81->setRenderingContext($renderingContext);
$viewHelper81->setRenderChildrenClosure($renderChildrenClosure80);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper81->initializeArgumentsAndRender();

$output0 .= '" alt="" /></div>
            <!-- //PRELOADER -->
            <div class="preloader_hide">
                ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments82 = array();
$arguments82['section'] = 'Content';
$arguments82['partial'] = NULL;
$arguments82['arguments'] = array (
);
$arguments82['optional'] = false;
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper84 = $self->getViewHelper('$viewHelper84', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper84->setArguments($arguments82);
$viewHelper84->setRenderingContext($renderingContext);
$viewHelper84->setRenderChildrenClosure($renderChildrenClosure83);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output0 .= $viewHelper84->initializeArgumentsAndRender();

$output0 .= '
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">
    $(".side-panels-custom > a").on("click",function(){
        $(this).addClass("active");
    });
    //console.log("a");
    $(".side-panels-custom").children().each(function(){
        if( $(this).hasClass("active"))
        {
            $(this).removeClass("active");
        }

        
        
        
    });
    $(".side-panels-custom").children().on("click", function(e){
        console.log(e);
        $(this).addClass("active");
    })
</script>

</html>
';

return $output0;
}


}
#0             34106     