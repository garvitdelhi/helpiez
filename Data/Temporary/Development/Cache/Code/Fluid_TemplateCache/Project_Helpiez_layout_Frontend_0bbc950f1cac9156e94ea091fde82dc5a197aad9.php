<?php class FluidCache_Project_Helpiez_layout_Frontend_0bbc950f1cac9156e94ea091fde82dc5a197aad9 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Helpiez</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!-- Google Fonts -->
    <link href=\'http://fonts.googleapis.com/css?family=Roboto:400,900italic,700italic,900,700,500italic,500,400italic,300italic,300,100italic,100|Open+Sans:400,300,400italic,300italic,600,600italic,700italic,700,800|Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700\' rel=\'stylesheet\' type=\'text/css\'>


    <!-- Styles -->
    <link href="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments1 = array();
$arguments1['path'] = 'Frontend/css/bootstrap.css';
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
    <!--link href="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments4 = array();
$arguments4['path'] = 'Frontend/font-awesome/css/font-awesome.css';
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

$output0 .= '" rel="stylesheet" type="text/css" /-->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link href="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments7 = array();
$arguments7['path'] = 'Frontend/css/style.css';
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

$output0 .= '" rel="stylesheet" type="text/css" />
    <link href="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments10 = array();
$arguments10['path'] = 'Frontend/css/responsive.css';
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

$output0 .= '" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments13 = array();
$arguments13['path'] = 'Frontend/layerslider/css/layerslider.css';
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

$output0 .= '" type="text/css">
    <link rel="stylesheet" type="text/css" href="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments16 = array();
$arguments16['path'] = 'Frontend/css/bright-red.css';
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

$output0 .= '" title="sea-green" />





    <link href="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments19 = array();
$arguments19['path'] = 'Frontend/css/contact.css';
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

$output0 .= '" rel="stylesheet" type="text/css" /> <!-- AJAX Contact Form Stylesheet -->

    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <script type="text/javascript" language="javascript" src="js/html5shiv.js"></script>
    <![endif]-->


    <!-- Scripts -->
    <script src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments22 = array();
$arguments22['path'] = 'Frontend/js/jquery.1.9.1.js';
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
$arguments25['path'] = 'Frontend/js/bootstrap.js';
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

$output0 .= '"></script>
    <script src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments28 = array();
$arguments28['path'] = 'Frontend/js/html5lightbox.js';
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
$arguments31['path'] = 'Frontend/js/jquery.carouFredSel-6.2.1-packed.js';
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

$output0 .= '" type="text/javascript"></script>
    <!--script type="text/javascript" src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments34 = array();
$arguments34['path'] = 'Frontend/js/jquery.jigowatt.js';
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

$output0 .= '"></script--><!-- AJAX Form Submit -->


    <script defer src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments37 = array();
$arguments37['path'] = 'Frontend/js/jquery.flexslider.js';
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
    <script defer src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments40 = array();
$arguments40['path'] = 'Frontend/js/jquery.mousewheel.js';
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
     <script defer src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments43 = array();
$arguments43['path'] = 'Frontend/js/jquery.countdown.js';
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


    <!-- Scripts For Layer Slider  -->
    <script src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments46 = array();
$arguments46['path'] = 'Frontend/layerslider/JQuery/jquery-easing-1.3.js';
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

$output0 .= '" type="text/javascript"></script>
    <script src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments49 = array();
$arguments49['path'] = 'Frontend/layerslider/JQuery/jquery-easing-1.3.js';
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

$output0 .= '" type="text/javascript"></script>
    <script src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments52 = array();
$arguments52['path'] = 'Frontend/layerslider/js/layerslider.transitions.js';
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
    <script src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments55 = array();
$arguments55['path'] = 'Frontend/layerslider/js/layerslider.kreaturamedia.jquery.js';
$arguments55['package'] = NULL;
$arguments55['resource'] = NULL;
$arguments55['localize'] = true;
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper57 = $self->getViewHelper('$viewHelper57', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper57->setArguments($arguments55);
$viewHelper57->setRenderingContext($renderingContext);
$viewHelper57->setRenderChildrenClosure($renderChildrenClosure56);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper57->initializeArgumentsAndRender();

$output0 .= '" type="text/javascript"></script>
    <script src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments58 = array();
$arguments58['path'] = 'Frontend/js/jquery.plugin.min.js';
$arguments58['package'] = NULL;
$arguments58['resource'] = NULL;
$arguments58['localize'] = true;
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper60 = $self->getViewHelper('$viewHelper60', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper60->setArguments($arguments58);
$viewHelper60->setRenderingContext($renderingContext);
$viewHelper60->setRenderChildrenClosure($renderChildrenClosure59);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper60->initializeArgumentsAndRender();

$output0 .= '"></script>
    <script src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments61 = array();
$arguments61['path'] = 'Frontend/js/jquery.queue.js';
$arguments61['package'] = NULL;
$arguments61['resource'] = NULL;
$arguments61['localize'] = true;
$renderChildrenClosure62 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper63 = $self->getViewHelper('$viewHelper63', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper63->setArguments($arguments61);
$viewHelper63->setRenderingContext($renderingContext);
$viewHelper63->setRenderChildrenClosure($renderChildrenClosure62);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper63->initializeArgumentsAndRender();

$output0 .= '"></script>
    <script src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments64 = array();
$arguments64['path'] = 'Frontend/js/jquery.ajax.js';
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

$output0 .= '"></script>
    <script src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments67 = array();
$arguments67['path'] = 'Frontend/js/script.js';
$arguments67['package'] = NULL;
$arguments67['resource'] = NULL;
$arguments67['localize'] = true;
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper69 = $self->getViewHelper('$viewHelper69', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper69->setArguments($arguments67);
$viewHelper69->setRenderingContext($renderingContext);
$viewHelper69->setRenderChildrenClosure($renderChildrenClosure68);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper69->initializeArgumentsAndRender();

$output0 .= '"></script>
    <script>
$(function () {
    var austDay = new Date();
    austDay = new Date(2016 , 3 , 1);
    $(\'.count-down\').countdown(';

$output0 .= '{until: austDay}';

$output0 .= ');
    });

$(function () {
    var austDay2 = new Date();
    austDay2 = new Date(2015 , 2 , 22);
    $(\'.count-down2\').countdown(';

$output0 .= '{until: austDay2}';

$output0 .= ');
    });

</script>
<script type="text/javascript">
    $(window).load(function(){
        $(\'.footer_carousel\').flexslider({
            animation: "slide",
            animationLoop: false,
            slideShow:false,
            controlNav: true,
            maxItems: 1,
            pausePlay: false,
            mousewheel:true,
            start: function(slider){
                $(\'body\').removeClass(\'loading\');
            }
        });
    })
</script>
</head>
<body>
<div class="theme-layout">
    <header class="sticky">
        <div class="container">
            <div class="logo">
                <a href="#" title=""><img src="{f:uri.resource(path:\'Frontend/images/\')}" alt="Logo" /><h1><i></i></h1></a>
            </div><!-- Logo -->
            <nav class="menu">
                <ul id="menu-navigation">
                    ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments70 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ActionViewHelper
$arguments71 = array();
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper73 = $self->getViewHelper('$viewHelper73', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ActionViewHelper');
$viewHelper73->setArguments($arguments71);
$viewHelper73->setRenderingContext($renderingContext);
$viewHelper73->setRenderChildrenClosure($renderChildrenClosure72);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ActionViewHelper
$arguments70['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $viewHelper73->initializeArgumentsAndRender(), 'home');
$arguments70['then'] = NULL;
$arguments70['else'] = NULL;
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$output75 = '';

$output75 .= '
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments76 = array();
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
                            <li class="active">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments79 = array();
$arguments79['action'] = 'home';
$arguments79['controller'] = 'Frontend\\Get';
$arguments79['additionalAttributes'] = NULL;
$arguments79['data'] = NULL;
$arguments79['arguments'] = array (
);
$arguments79['package'] = NULL;
$arguments79['subpackage'] = NULL;
$arguments79['section'] = '';
$arguments79['format'] = '';
$arguments79['additionalParams'] = array (
);
$arguments79['addQueryString'] = false;
$arguments79['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments79['useParentRequest'] = false;
$arguments79['absolute'] = true;
$arguments79['class'] = NULL;
$arguments79['dir'] = NULL;
$arguments79['id'] = NULL;
$arguments79['lang'] = NULL;
$arguments79['style'] = NULL;
$arguments79['title'] = NULL;
$arguments79['accesskey'] = NULL;
$arguments79['tabindex'] = NULL;
$arguments79['onclick'] = NULL;
$arguments79['name'] = NULL;
$arguments79['rel'] = NULL;
$arguments79['rev'] = NULL;
$arguments79['target'] = NULL;
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
return 'Home';
};
$viewHelper81 = $self->getViewHelper('$viewHelper81', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper81->setArguments($arguments79);
$viewHelper81->setRenderingContext($renderingContext);
$viewHelper81->setRenderChildrenClosure($renderChildrenClosure80);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output78 .= $viewHelper81->initializeArgumentsAndRender();

$output78 .= '</li>
                        ';
return $output78;
};
$viewHelper82 = $self->getViewHelper('$viewHelper82', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper82->setArguments($arguments76);
$viewHelper82->setRenderingContext($renderingContext);
$viewHelper82->setRenderChildrenClosure($renderChildrenClosure77);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output75 .= $viewHelper82->initializeArgumentsAndRender();

$output75 .= '
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments83 = array();
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
                            <li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments86 = array();
$arguments86['action'] = 'home';
$arguments86['controller'] = 'Frontend\\Get';
$arguments86['additionalAttributes'] = NULL;
$arguments86['data'] = NULL;
$arguments86['arguments'] = array (
);
$arguments86['package'] = NULL;
$arguments86['subpackage'] = NULL;
$arguments86['section'] = '';
$arguments86['format'] = '';
$arguments86['additionalParams'] = array (
);
$arguments86['addQueryString'] = false;
$arguments86['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments86['useParentRequest'] = false;
$arguments86['absolute'] = true;
$arguments86['class'] = NULL;
$arguments86['dir'] = NULL;
$arguments86['id'] = NULL;
$arguments86['lang'] = NULL;
$arguments86['style'] = NULL;
$arguments86['title'] = NULL;
$arguments86['accesskey'] = NULL;
$arguments86['tabindex'] = NULL;
$arguments86['onclick'] = NULL;
$arguments86['name'] = NULL;
$arguments86['rel'] = NULL;
$arguments86['rev'] = NULL;
$arguments86['target'] = NULL;
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return 'Home';
};
$viewHelper88 = $self->getViewHelper('$viewHelper88', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper88->setArguments($arguments86);
$viewHelper88->setRenderingContext($renderingContext);
$viewHelper88->setRenderChildrenClosure($renderChildrenClosure87);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output85 .= $viewHelper88->initializeArgumentsAndRender();

$output85 .= '</li>
                        ';
return $output85;
};
$viewHelper89 = $self->getViewHelper('$viewHelper89', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper89->setArguments($arguments83);
$viewHelper89->setRenderingContext($renderingContext);
$viewHelper89->setRenderChildrenClosure($renderChildrenClosure84);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output75 .= $viewHelper89->initializeArgumentsAndRender();

$output75 .= '
                    ';
return $output75;
};
$arguments70['__thenClosure'] = function() use ($renderingContext, $self) {
$output90 = '';

$output90 .= '
                            <li class="active">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments91 = array();
$arguments91['action'] = 'home';
$arguments91['controller'] = 'Frontend\\Get';
$arguments91['additionalAttributes'] = NULL;
$arguments91['data'] = NULL;
$arguments91['arguments'] = array (
);
$arguments91['package'] = NULL;
$arguments91['subpackage'] = NULL;
$arguments91['section'] = '';
$arguments91['format'] = '';
$arguments91['additionalParams'] = array (
);
$arguments91['addQueryString'] = false;
$arguments91['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments91['useParentRequest'] = false;
$arguments91['absolute'] = true;
$arguments91['class'] = NULL;
$arguments91['dir'] = NULL;
$arguments91['id'] = NULL;
$arguments91['lang'] = NULL;
$arguments91['style'] = NULL;
$arguments91['title'] = NULL;
$arguments91['accesskey'] = NULL;
$arguments91['tabindex'] = NULL;
$arguments91['onclick'] = NULL;
$arguments91['name'] = NULL;
$arguments91['rel'] = NULL;
$arguments91['rev'] = NULL;
$arguments91['target'] = NULL;
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return 'Home';
};
$viewHelper93 = $self->getViewHelper('$viewHelper93', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper93->setArguments($arguments91);
$viewHelper93->setRenderingContext($renderingContext);
$viewHelper93->setRenderChildrenClosure($renderChildrenClosure92);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output90 .= $viewHelper93->initializeArgumentsAndRender();

$output90 .= '</li>
                        ';
return $output90;
};
$arguments70['__elseClosure'] = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
                            <li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments95 = array();
$arguments95['action'] = 'home';
$arguments95['controller'] = 'Frontend\\Get';
$arguments95['additionalAttributes'] = NULL;
$arguments95['data'] = NULL;
$arguments95['arguments'] = array (
);
$arguments95['package'] = NULL;
$arguments95['subpackage'] = NULL;
$arguments95['section'] = '';
$arguments95['format'] = '';
$arguments95['additionalParams'] = array (
);
$arguments95['addQueryString'] = false;
$arguments95['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments95['useParentRequest'] = false;
$arguments95['absolute'] = true;
$arguments95['class'] = NULL;
$arguments95['dir'] = NULL;
$arguments95['id'] = NULL;
$arguments95['lang'] = NULL;
$arguments95['style'] = NULL;
$arguments95['title'] = NULL;
$arguments95['accesskey'] = NULL;
$arguments95['tabindex'] = NULL;
$arguments95['onclick'] = NULL;
$arguments95['name'] = NULL;
$arguments95['rel'] = NULL;
$arguments95['rev'] = NULL;
$arguments95['target'] = NULL;
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return 'Home';
};
$viewHelper97 = $self->getViewHelper('$viewHelper97', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper97->setArguments($arguments95);
$viewHelper97->setRenderingContext($renderingContext);
$viewHelper97->setRenderChildrenClosure($renderChildrenClosure96);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output94 .= $viewHelper97->initializeArgumentsAndRender();

$output94 .= '</li>
                        ';
return $output94;
};
$viewHelper98 = $self->getViewHelper('$viewHelper98', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper98->setArguments($arguments70);
$viewHelper98->setRenderingContext($renderingContext);
$viewHelper98->setRenderChildrenClosure($renderChildrenClosure74);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output0 .= $viewHelper98->initializeArgumentsAndRender();

$output0 .= '
                    <li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments99 = array();
$arguments99['action'] = 'search';
$arguments99['controller'] = 'Frontend\\Get';
$arguments99['additionalAttributes'] = NULL;
$arguments99['data'] = NULL;
$arguments99['arguments'] = array (
);
$arguments99['package'] = NULL;
$arguments99['subpackage'] = NULL;
$arguments99['section'] = '';
$arguments99['format'] = '';
$arguments99['additionalParams'] = array (
);
$arguments99['addQueryString'] = false;
$arguments99['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments99['useParentRequest'] = false;
$arguments99['absolute'] = true;
$arguments99['class'] = NULL;
$arguments99['dir'] = NULL;
$arguments99['id'] = NULL;
$arguments99['lang'] = NULL;
$arguments99['style'] = NULL;
$arguments99['title'] = NULL;
$arguments99['accesskey'] = NULL;
$arguments99['tabindex'] = NULL;
$arguments99['onclick'] = NULL;
$arguments99['name'] = NULL;
$arguments99['rel'] = NULL;
$arguments99['rev'] = NULL;
$arguments99['target'] = NULL;
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return 'Search';
};
$viewHelper101 = $self->getViewHelper('$viewHelper101', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper101->setArguments($arguments99);
$viewHelper101->setRenderingContext($renderingContext);
$viewHelper101->setRenderChildrenClosure($renderChildrenClosure100);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper101->initializeArgumentsAndRender();

$output0 .= '</li>
                    <li><a>Opportunity</a>
                        <ul>
                            <li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments102 = array();
$arguments102['action'] = 'events';
$arguments102['controller'] = 'Frontend\\Get';
$arguments102['additionalAttributes'] = NULL;
$arguments102['data'] = NULL;
$arguments102['arguments'] = array (
);
$arguments102['package'] = NULL;
$arguments102['subpackage'] = NULL;
$arguments102['section'] = '';
$arguments102['format'] = '';
$arguments102['additionalParams'] = array (
);
$arguments102['addQueryString'] = false;
$arguments102['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments102['useParentRequest'] = false;
$arguments102['absolute'] = true;
$arguments102['class'] = NULL;
$arguments102['dir'] = NULL;
$arguments102['id'] = NULL;
$arguments102['lang'] = NULL;
$arguments102['style'] = NULL;
$arguments102['title'] = NULL;
$arguments102['accesskey'] = NULL;
$arguments102['tabindex'] = NULL;
$arguments102['onclick'] = NULL;
$arguments102['name'] = NULL;
$arguments102['rel'] = NULL;
$arguments102['rev'] = NULL;
$arguments102['target'] = NULL;
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
return 'Upcoming Events';
};
$viewHelper104 = $self->getViewHelper('$viewHelper104', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper104->setArguments($arguments102);
$viewHelper104->setRenderingContext($renderingContext);
$viewHelper104->setRenderChildrenClosure($renderChildrenClosure103);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper104->initializeArgumentsAndRender();

$output0 .= '</li>
                            <li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments105 = array();
$arguments105['action'] = 'volunteering';
$arguments105['controller'] = 'Frontend\\Get';
$arguments105['additionalAttributes'] = NULL;
$arguments105['data'] = NULL;
$arguments105['arguments'] = array (
);
$arguments105['package'] = NULL;
$arguments105['subpackage'] = NULL;
$arguments105['section'] = '';
$arguments105['format'] = '';
$arguments105['additionalParams'] = array (
);
$arguments105['addQueryString'] = false;
$arguments105['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments105['useParentRequest'] = false;
$arguments105['absolute'] = true;
$arguments105['class'] = NULL;
$arguments105['dir'] = NULL;
$arguments105['id'] = NULL;
$arguments105['lang'] = NULL;
$arguments105['style'] = NULL;
$arguments105['title'] = NULL;
$arguments105['accesskey'] = NULL;
$arguments105['tabindex'] = NULL;
$arguments105['onclick'] = NULL;
$arguments105['name'] = NULL;
$arguments105['rel'] = NULL;
$arguments105['rev'] = NULL;
$arguments105['target'] = NULL;
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
return 'Volunteering';
};
$viewHelper107 = $self->getViewHelper('$viewHelper107', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper107->setArguments($arguments105);
$viewHelper107->setRenderingContext($renderingContext);
$viewHelper107->setRenderChildrenClosure($renderChildrenClosure106);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper107->initializeArgumentsAndRender();

$output0 .= '</li>
                            <li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments108 = array();
$arguments108['action'] = 'internships';
$arguments108['controller'] = 'Frontend\\Get';
$arguments108['additionalAttributes'] = NULL;
$arguments108['data'] = NULL;
$arguments108['arguments'] = array (
);
$arguments108['package'] = NULL;
$arguments108['subpackage'] = NULL;
$arguments108['section'] = '';
$arguments108['format'] = '';
$arguments108['additionalParams'] = array (
);
$arguments108['addQueryString'] = false;
$arguments108['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments108['useParentRequest'] = false;
$arguments108['absolute'] = true;
$arguments108['class'] = NULL;
$arguments108['dir'] = NULL;
$arguments108['id'] = NULL;
$arguments108['lang'] = NULL;
$arguments108['style'] = NULL;
$arguments108['title'] = NULL;
$arguments108['accesskey'] = NULL;
$arguments108['tabindex'] = NULL;
$arguments108['onclick'] = NULL;
$arguments108['name'] = NULL;
$arguments108['rel'] = NULL;
$arguments108['rev'] = NULL;
$arguments108['target'] = NULL;
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
return 'Internships';
};
$viewHelper110 = $self->getViewHelper('$viewHelper110', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper110->setArguments($arguments108);
$viewHelper110->setRenderingContext($renderingContext);
$viewHelper110->setRenderChildrenClosure($renderChildrenClosure109);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper110->initializeArgumentsAndRender();

$output0 .= '</li>
                            <li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments111 = array();
$arguments111['action'] = 'jobs';
$arguments111['controller'] = 'Frontend\\Get';
$arguments111['additionalAttributes'] = NULL;
$arguments111['data'] = NULL;
$arguments111['arguments'] = array (
);
$arguments111['package'] = NULL;
$arguments111['subpackage'] = NULL;
$arguments111['section'] = '';
$arguments111['format'] = '';
$arguments111['additionalParams'] = array (
);
$arguments111['addQueryString'] = false;
$arguments111['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments111['useParentRequest'] = false;
$arguments111['absolute'] = true;
$arguments111['class'] = NULL;
$arguments111['dir'] = NULL;
$arguments111['id'] = NULL;
$arguments111['lang'] = NULL;
$arguments111['style'] = NULL;
$arguments111['title'] = NULL;
$arguments111['accesskey'] = NULL;
$arguments111['tabindex'] = NULL;
$arguments111['onclick'] = NULL;
$arguments111['name'] = NULL;
$arguments111['rel'] = NULL;
$arguments111['rev'] = NULL;
$arguments111['target'] = NULL;
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return 'Job Openings';
};
$viewHelper113 = $self->getViewHelper('$viewHelper113', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper113->setArguments($arguments111);
$viewHelper113->setRenderingContext($renderingContext);
$viewHelper113->setRenderChildrenClosure($renderChildrenClosure112);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper113->initializeArgumentsAndRender();

$output0 .= '</li>
                        </ul>
                    </li>
                    <li><a>About</a>
                        <ul>
                            <li><a href="portfolio-2-column.html" title="">Our Team</a></li>
                            <li><a href="portfolio-3-column.html" title="">Partners</a></li>
                            <li><a href="portfolio-4-column.html" title="">Collaborations</a></li>
                            <li><a href="portfolio-4-column.html" title="">Credits</a></li>
                        </ul>
                    </li>
                    <li><a>Projects</a></li>
                    ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Security\IfHasRoleViewHelper
$arguments114 = array();
$arguments114['role'] = 'User';
$arguments114['then'] = NULL;
$arguments114['else'] = NULL;
$arguments114['packageKey'] = NULL;
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$output116 = '';

$output116 .= '
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments117 = array();
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '
                            <li><a>Hi!</a>
                                <ul>
                                    <li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments120 = array();
$arguments120['action'] = 'profile';
$arguments120['controller'] = 'Frontend\\Get';
$arguments120['additionalAttributes'] = NULL;
$arguments120['data'] = NULL;
$arguments120['arguments'] = array (
);
$arguments120['package'] = NULL;
$arguments120['subpackage'] = NULL;
$arguments120['section'] = '';
$arguments120['format'] = '';
$arguments120['additionalParams'] = array (
);
$arguments120['addQueryString'] = false;
$arguments120['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments120['useParentRequest'] = false;
$arguments120['absolute'] = true;
$arguments120['class'] = NULL;
$arguments120['dir'] = NULL;
$arguments120['id'] = NULL;
$arguments120['lang'] = NULL;
$arguments120['style'] = NULL;
$arguments120['title'] = NULL;
$arguments120['accesskey'] = NULL;
$arguments120['tabindex'] = NULL;
$arguments120['onclick'] = NULL;
$arguments120['name'] = NULL;
$arguments120['rel'] = NULL;
$arguments120['rev'] = NULL;
$arguments120['target'] = NULL;
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
return 'Profile';
};
$viewHelper122 = $self->getViewHelper('$viewHelper122', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper122->setArguments($arguments120);
$viewHelper122->setRenderingContext($renderingContext);
$viewHelper122->setRenderChildrenClosure($renderChildrenClosure121);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output119 .= $viewHelper122->initializeArgumentsAndRender();

$output119 .= '</li>
                                    ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Security\IfHasRoleViewHelper
$arguments123 = array();
$arguments123['role'] = 'Incharge';
$arguments123['then'] = NULL;
$arguments123['else'] = NULL;
$arguments123['packageKey'] = NULL;
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
$output125 = '';

$output125 .= '
                                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments126 = array();
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$output128 = '';

$output128 .= '
                                            <li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments129 = array();
$arguments129['action'] = 'home';
$arguments129['controller'] = 'Backend\\Get';
$arguments129['additionalAttributes'] = NULL;
$arguments129['data'] = NULL;
$arguments129['arguments'] = array (
);
$arguments129['package'] = NULL;
$arguments129['subpackage'] = NULL;
$arguments129['section'] = '';
$arguments129['format'] = '';
$arguments129['additionalParams'] = array (
);
$arguments129['addQueryString'] = false;
$arguments129['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments129['useParentRequest'] = false;
$arguments129['absolute'] = true;
$arguments129['class'] = NULL;
$arguments129['dir'] = NULL;
$arguments129['id'] = NULL;
$arguments129['lang'] = NULL;
$arguments129['style'] = NULL;
$arguments129['title'] = NULL;
$arguments129['accesskey'] = NULL;
$arguments129['tabindex'] = NULL;
$arguments129['onclick'] = NULL;
$arguments129['name'] = NULL;
$arguments129['rel'] = NULL;
$arguments129['rev'] = NULL;
$arguments129['target'] = NULL;
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
return 'Backend';
};
$viewHelper131 = $self->getViewHelper('$viewHelper131', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper131->setArguments($arguments129);
$viewHelper131->setRenderingContext($renderingContext);
$viewHelper131->setRenderChildrenClosure($renderChildrenClosure130);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output128 .= $viewHelper131->initializeArgumentsAndRender();

$output128 .= '</li>
                                        ';
return $output128;
};
$viewHelper132 = $self->getViewHelper('$viewHelper132', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper132->setArguments($arguments126);
$viewHelper132->setRenderingContext($renderingContext);
$viewHelper132->setRenderChildrenClosure($renderChildrenClosure127);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output125 .= $viewHelper132->initializeArgumentsAndRender();

$output125 .= '
                                    ';
return $output125;
};
$arguments123['__thenClosure'] = function() use ($renderingContext, $self) {
$output133 = '';

$output133 .= '
                                            <li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments134 = array();
$arguments134['action'] = 'home';
$arguments134['controller'] = 'Backend\\Get';
$arguments134['additionalAttributes'] = NULL;
$arguments134['data'] = NULL;
$arguments134['arguments'] = array (
);
$arguments134['package'] = NULL;
$arguments134['subpackage'] = NULL;
$arguments134['section'] = '';
$arguments134['format'] = '';
$arguments134['additionalParams'] = array (
);
$arguments134['addQueryString'] = false;
$arguments134['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments134['useParentRequest'] = false;
$arguments134['absolute'] = true;
$arguments134['class'] = NULL;
$arguments134['dir'] = NULL;
$arguments134['id'] = NULL;
$arguments134['lang'] = NULL;
$arguments134['style'] = NULL;
$arguments134['title'] = NULL;
$arguments134['accesskey'] = NULL;
$arguments134['tabindex'] = NULL;
$arguments134['onclick'] = NULL;
$arguments134['name'] = NULL;
$arguments134['rel'] = NULL;
$arguments134['rev'] = NULL;
$arguments134['target'] = NULL;
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
return 'Backend';
};
$viewHelper136 = $self->getViewHelper('$viewHelper136', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper136->setArguments($arguments134);
$viewHelper136->setRenderingContext($renderingContext);
$viewHelper136->setRenderChildrenClosure($renderChildrenClosure135);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output133 .= $viewHelper136->initializeArgumentsAndRender();

$output133 .= '</li>
                                        ';
return $output133;
};
$viewHelper137 = $self->getViewHelper('$viewHelper137', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Security\IfHasRoleViewHelper');
$viewHelper137->setArguments($arguments123);
$viewHelper137->setRenderingContext($renderingContext);
$viewHelper137->setRenderChildrenClosure($renderChildrenClosure124);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Security\IfHasRoleViewHelper

$output119 .= $viewHelper137->initializeArgumentsAndRender();

$output119 .= '
                                    <li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments138 = array();
$arguments138['action'] = 'logout';
$arguments138['controller'] = 'auth';
$arguments138['additionalAttributes'] = NULL;
$arguments138['data'] = NULL;
$arguments138['arguments'] = array (
);
$arguments138['package'] = NULL;
$arguments138['subpackage'] = NULL;
$arguments138['section'] = '';
$arguments138['format'] = '';
$arguments138['additionalParams'] = array (
);
$arguments138['addQueryString'] = false;
$arguments138['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments138['useParentRequest'] = false;
$arguments138['absolute'] = true;
$arguments138['class'] = NULL;
$arguments138['dir'] = NULL;
$arguments138['id'] = NULL;
$arguments138['lang'] = NULL;
$arguments138['style'] = NULL;
$arguments138['title'] = NULL;
$arguments138['accesskey'] = NULL;
$arguments138['tabindex'] = NULL;
$arguments138['onclick'] = NULL;
$arguments138['name'] = NULL;
$arguments138['rel'] = NULL;
$arguments138['rev'] = NULL;
$arguments138['target'] = NULL;
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
return 'Logout';
};
$viewHelper140 = $self->getViewHelper('$viewHelper140', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper140->setArguments($arguments138);
$viewHelper140->setRenderingContext($renderingContext);
$viewHelper140->setRenderChildrenClosure($renderChildrenClosure139);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output119 .= $viewHelper140->initializeArgumentsAndRender();

$output119 .= '</li>
                                </ul>
                            </li>
                        ';
return $output119;
};
$viewHelper141 = $self->getViewHelper('$viewHelper141', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper141->setArguments($arguments117);
$viewHelper141->setRenderingContext($renderingContext);
$viewHelper141->setRenderChildrenClosure($renderChildrenClosure118);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output116 .= $viewHelper141->initializeArgumentsAndRender();

$output116 .= '
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments142 = array();
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return '
                            <li><a href="#" data-toggle="modal" data-target="#basicModal">Login</a></li>
                        ';
};
$viewHelper144 = $self->getViewHelper('$viewHelper144', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper144->setArguments($arguments142);
$viewHelper144->setRenderingContext($renderingContext);
$viewHelper144->setRenderChildrenClosure($renderChildrenClosure143);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output116 .= $viewHelper144->initializeArgumentsAndRender();

$output116 .= '
                    ';
return $output116;
};
$arguments114['__thenClosure'] = function() use ($renderingContext, $self) {
$output145 = '';

$output145 .= '
                            <li><a>Hi!</a>
                                <ul>
                                    <li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments146 = array();
$arguments146['action'] = 'profile';
$arguments146['controller'] = 'Frontend\\Get';
$arguments146['additionalAttributes'] = NULL;
$arguments146['data'] = NULL;
$arguments146['arguments'] = array (
);
$arguments146['package'] = NULL;
$arguments146['subpackage'] = NULL;
$arguments146['section'] = '';
$arguments146['format'] = '';
$arguments146['additionalParams'] = array (
);
$arguments146['addQueryString'] = false;
$arguments146['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments146['useParentRequest'] = false;
$arguments146['absolute'] = true;
$arguments146['class'] = NULL;
$arguments146['dir'] = NULL;
$arguments146['id'] = NULL;
$arguments146['lang'] = NULL;
$arguments146['style'] = NULL;
$arguments146['title'] = NULL;
$arguments146['accesskey'] = NULL;
$arguments146['tabindex'] = NULL;
$arguments146['onclick'] = NULL;
$arguments146['name'] = NULL;
$arguments146['rel'] = NULL;
$arguments146['rev'] = NULL;
$arguments146['target'] = NULL;
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
return 'Profile';
};
$viewHelper148 = $self->getViewHelper('$viewHelper148', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper148->setArguments($arguments146);
$viewHelper148->setRenderingContext($renderingContext);
$viewHelper148->setRenderChildrenClosure($renderChildrenClosure147);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output145 .= $viewHelper148->initializeArgumentsAndRender();

$output145 .= '</li>
                                    ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Security\IfHasRoleViewHelper
$arguments149 = array();
$arguments149['role'] = 'Incharge';
$arguments149['then'] = NULL;
$arguments149['else'] = NULL;
$arguments149['packageKey'] = NULL;
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
$output151 = '';

$output151 .= '
                                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments152 = array();
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$output154 = '';

$output154 .= '
                                            <li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments155 = array();
$arguments155['action'] = 'home';
$arguments155['controller'] = 'Backend\\Get';
$arguments155['additionalAttributes'] = NULL;
$arguments155['data'] = NULL;
$arguments155['arguments'] = array (
);
$arguments155['package'] = NULL;
$arguments155['subpackage'] = NULL;
$arguments155['section'] = '';
$arguments155['format'] = '';
$arguments155['additionalParams'] = array (
);
$arguments155['addQueryString'] = false;
$arguments155['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments155['useParentRequest'] = false;
$arguments155['absolute'] = true;
$arguments155['class'] = NULL;
$arguments155['dir'] = NULL;
$arguments155['id'] = NULL;
$arguments155['lang'] = NULL;
$arguments155['style'] = NULL;
$arguments155['title'] = NULL;
$arguments155['accesskey'] = NULL;
$arguments155['tabindex'] = NULL;
$arguments155['onclick'] = NULL;
$arguments155['name'] = NULL;
$arguments155['rel'] = NULL;
$arguments155['rev'] = NULL;
$arguments155['target'] = NULL;
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
return 'Backend';
};
$viewHelper157 = $self->getViewHelper('$viewHelper157', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper157->setArguments($arguments155);
$viewHelper157->setRenderingContext($renderingContext);
$viewHelper157->setRenderChildrenClosure($renderChildrenClosure156);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output154 .= $viewHelper157->initializeArgumentsAndRender();

$output154 .= '</li>
                                        ';
return $output154;
};
$viewHelper158 = $self->getViewHelper('$viewHelper158', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper158->setArguments($arguments152);
$viewHelper158->setRenderingContext($renderingContext);
$viewHelper158->setRenderChildrenClosure($renderChildrenClosure153);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output151 .= $viewHelper158->initializeArgumentsAndRender();

$output151 .= '
                                    ';
return $output151;
};
$arguments149['__thenClosure'] = function() use ($renderingContext, $self) {
$output159 = '';

$output159 .= '
                                            <li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments160 = array();
$arguments160['action'] = 'home';
$arguments160['controller'] = 'Backend\\Get';
$arguments160['additionalAttributes'] = NULL;
$arguments160['data'] = NULL;
$arguments160['arguments'] = array (
);
$arguments160['package'] = NULL;
$arguments160['subpackage'] = NULL;
$arguments160['section'] = '';
$arguments160['format'] = '';
$arguments160['additionalParams'] = array (
);
$arguments160['addQueryString'] = false;
$arguments160['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments160['useParentRequest'] = false;
$arguments160['absolute'] = true;
$arguments160['class'] = NULL;
$arguments160['dir'] = NULL;
$arguments160['id'] = NULL;
$arguments160['lang'] = NULL;
$arguments160['style'] = NULL;
$arguments160['title'] = NULL;
$arguments160['accesskey'] = NULL;
$arguments160['tabindex'] = NULL;
$arguments160['onclick'] = NULL;
$arguments160['name'] = NULL;
$arguments160['rel'] = NULL;
$arguments160['rev'] = NULL;
$arguments160['target'] = NULL;
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
return 'Backend';
};
$viewHelper162 = $self->getViewHelper('$viewHelper162', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper162->setArguments($arguments160);
$viewHelper162->setRenderingContext($renderingContext);
$viewHelper162->setRenderChildrenClosure($renderChildrenClosure161);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output159 .= $viewHelper162->initializeArgumentsAndRender();

$output159 .= '</li>
                                        ';
return $output159;
};
$viewHelper163 = $self->getViewHelper('$viewHelper163', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Security\IfHasRoleViewHelper');
$viewHelper163->setArguments($arguments149);
$viewHelper163->setRenderingContext($renderingContext);
$viewHelper163->setRenderChildrenClosure($renderChildrenClosure150);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Security\IfHasRoleViewHelper

$output145 .= $viewHelper163->initializeArgumentsAndRender();

$output145 .= '
                                    <li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments164 = array();
$arguments164['action'] = 'logout';
$arguments164['controller'] = 'auth';
$arguments164['additionalAttributes'] = NULL;
$arguments164['data'] = NULL;
$arguments164['arguments'] = array (
);
$arguments164['package'] = NULL;
$arguments164['subpackage'] = NULL;
$arguments164['section'] = '';
$arguments164['format'] = '';
$arguments164['additionalParams'] = array (
);
$arguments164['addQueryString'] = false;
$arguments164['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments164['useParentRequest'] = false;
$arguments164['absolute'] = true;
$arguments164['class'] = NULL;
$arguments164['dir'] = NULL;
$arguments164['id'] = NULL;
$arguments164['lang'] = NULL;
$arguments164['style'] = NULL;
$arguments164['title'] = NULL;
$arguments164['accesskey'] = NULL;
$arguments164['tabindex'] = NULL;
$arguments164['onclick'] = NULL;
$arguments164['name'] = NULL;
$arguments164['rel'] = NULL;
$arguments164['rev'] = NULL;
$arguments164['target'] = NULL;
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
return 'Logout';
};
$viewHelper166 = $self->getViewHelper('$viewHelper166', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper166->setArguments($arguments164);
$viewHelper166->setRenderingContext($renderingContext);
$viewHelper166->setRenderChildrenClosure($renderChildrenClosure165);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output145 .= $viewHelper166->initializeArgumentsAndRender();

$output145 .= '</li>
                                </ul>
                            </li>
                        ';
return $output145;
};
$arguments114['__elseClosure'] = function() use ($renderingContext, $self) {
return '
                            <li><a href="#" data-toggle="modal" data-target="#basicModal">Login</a></li>
                        ';
};
$viewHelper167 = $self->getViewHelper('$viewHelper167', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Security\IfHasRoleViewHelper');
$viewHelper167->setArguments($arguments114);
$viewHelper167->setRenderingContext($renderingContext);
$viewHelper167->setRenderChildrenClosure($renderChildrenClosure115);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Security\IfHasRoleViewHelper

$output0 .= $viewHelper167->initializeArgumentsAndRender();

$output0 .= '
                </ul>
            </nav><!-- Menu -->

            <!--select class="ipadMenu">
                <option value="">Menu</option>
                <option value="index.html">Home</option>
                <option value="index2.html">Search</option>
                <option value="index3.html">Coming Events</option>
                <option value="index4.html">Volunteering</option>
                <option value="index7.html">Internships</option>
                <option value="index5.html">Job Openings</option>
                <option value="index6.html">Our Team</option>
                <option value="sticky-menu.html">Partners</option>
                <option value="menu-below-slider.html">Collaborations</option>
                <option value="middle-logo.html">Credits</option>
                <option value="index5.html">Projects</option>
                <option value="about.html">Login</option>
            </select-->
        </div>
    </header><!--header-->
    <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Login</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                <div class="col-md-8">
                    <div class="contact-info form" style="padding-bottom:20px">

                        <div class="accordion_toggle "><a href="#"><span><i class="icon-user"></i></span>User Login</a></div>
                        <div class="accordion_content " style="display: block;" style="padding-bottom:20px">
                            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments168 = array();
$arguments168['action'] = 'authenticate';
$arguments168['controller'] = 'auth';
$arguments168['package'] = 'project.helpiez';
$arguments168['method'] = 'post';
$arguments168['additionalAttributes'] = NULL;
$arguments168['data'] = NULL;
$arguments168['arguments'] = array (
);
$arguments168['subpackage'] = NULL;
$arguments168['object'] = NULL;
$arguments168['section'] = '';
$arguments168['format'] = '';
$arguments168['additionalParams'] = array (
);
$arguments168['absolute'] = false;
$arguments168['addQueryString'] = false;
$arguments168['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments168['fieldNamePrefix'] = NULL;
$arguments168['actionUri'] = NULL;
$arguments168['objectName'] = NULL;
$arguments168['useParentRequest'] = false;
$arguments168['enctype'] = NULL;
$arguments168['name'] = NULL;
$arguments168['onreset'] = NULL;
$arguments168['onsubmit'] = NULL;
$arguments168['class'] = NULL;
$arguments168['dir'] = NULL;
$arguments168['id'] = NULL;
$arguments168['lang'] = NULL;
$arguments168['style'] = NULL;
$arguments168['title'] = NULL;
$arguments168['accesskey'] = NULL;
$arguments168['tabindex'] = NULL;
$arguments168['onclick'] = NULL;
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
$output170 = '';

$output170 .= '
                                <label accesskey="U">Username <span>*</span></label>
                                ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments171 = array();
$arguments171['class'] = 'form-control input-field';
$arguments171['placeholder'] = 'Username';
$arguments171['name'] = '__authentication[TYPO3][Flow][Security][Authentication][Token][UsernamePassword][username]';
$arguments171['additionalAttributes'] = NULL;
$arguments171['data'] = NULL;
$arguments171['required'] = false;
$arguments171['type'] = 'text';
$arguments171['value'] = NULL;
$arguments171['property'] = NULL;
$arguments171['disabled'] = NULL;
$arguments171['maxlength'] = NULL;
$arguments171['readonly'] = NULL;
$arguments171['size'] = NULL;
$arguments171['autofocus'] = NULL;
$arguments171['errorClass'] = 'f3-form-error';
$arguments171['dir'] = NULL;
$arguments171['id'] = NULL;
$arguments171['lang'] = NULL;
$arguments171['style'] = NULL;
$arguments171['title'] = NULL;
$arguments171['accesskey'] = NULL;
$arguments171['tabindex'] = NULL;
$arguments171['onclick'] = NULL;
$renderChildrenClosure172 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper173 = $self->getViewHelper('$viewHelper173', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper173->setArguments($arguments171);
$viewHelper173->setRenderingContext($renderingContext);
$viewHelper173->setRenderChildrenClosure($renderChildrenClosure172);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output170 .= $viewHelper173->initializeArgumentsAndRender();

$output170 .= '
                                <label accesskey="U">Password <span>*</span></label>
                                ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\PasswordViewHelper
$arguments174 = array();
$arguments174['class'] = 'form-control input-field';
$arguments174['placeholder'] = 'Password';
$arguments174['name'] = '__authentication[TYPO3][Flow][Security][Authentication][Token][UsernamePassword][password]';
$arguments174['additionalAttributes'] = NULL;
$arguments174['data'] = NULL;
$arguments174['value'] = NULL;
$arguments174['property'] = NULL;
$arguments174['disabled'] = NULL;
$arguments174['maxlength'] = NULL;
$arguments174['readonly'] = NULL;
$arguments174['size'] = NULL;
$arguments174['errorClass'] = 'f3-form-error';
$arguments174['dir'] = NULL;
$arguments174['id'] = NULL;
$arguments174['lang'] = NULL;
$arguments174['style'] = NULL;
$arguments174['title'] = NULL;
$arguments174['accesskey'] = NULL;
$arguments174['tabindex'] = NULL;
$arguments174['onclick'] = NULL;
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper176 = $self->getViewHelper('$viewHelper176', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\PasswordViewHelper');
$viewHelper176->setArguments($arguments174);
$viewHelper176->setRenderingContext($renderingContext);
$viewHelper176->setRenderChildrenClosure($renderChildrenClosure175);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\PasswordViewHelper

$output170 .= $viewHelper176->initializeArgumentsAndRender();

$output170 .= '
                                ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments177 = array();
$arguments177['value'] = 'Submit';
$arguments177['class'] = 'form-button submit';
$arguments177['additionalAttributes'] = NULL;
$arguments177['data'] = NULL;
$arguments177['name'] = NULL;
$arguments177['property'] = NULL;
$arguments177['disabled'] = NULL;
$arguments177['dir'] = NULL;
$arguments177['id'] = NULL;
$arguments177['lang'] = NULL;
$arguments177['style'] = NULL;
$arguments177['title'] = NULL;
$arguments177['accesskey'] = NULL;
$arguments177['tabindex'] = NULL;
$arguments177['onclick'] = NULL;
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper179 = $self->getViewHelper('$viewHelper179', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper179->setArguments($arguments177);
$viewHelper179->setRenderingContext($renderingContext);
$viewHelper179->setRenderChildrenClosure($renderChildrenClosure178);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output170 .= $viewHelper179->initializeArgumentsAndRender();

$output170 .= '
                            ';
return $output170;
};
$viewHelper180 = $self->getViewHelper('$viewHelper180', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper180->setArguments($arguments168);
$viewHelper180->setRenderingContext($renderingContext);
$viewHelper180->setRenderChildrenClosure($renderChildrenClosure169);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output0 .= $viewHelper180->initializeArgumentsAndRender();

$output0 .= '
                        </div>
                    </div>
                    <div class="contact-info form">

                        <div class="accordion_toggle">
                            <a href="#"><span><i class="icon-group"></i></span>User Registration</a>
                        </div>
                        <div class="accordion_content " style="display: block;">
                            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments181 = array();
$arguments181['action'] = 'registerEmail';
$arguments181['objectName'] = 'userAccount';
$arguments181['controller'] = 'auth';
$arguments181['package'] = 'Project.Helpiez';
$arguments181['method'] = 'post';
$arguments181['additionalAttributes'] = NULL;
$arguments181['data'] = NULL;
$arguments181['arguments'] = array (
);
$arguments181['subpackage'] = NULL;
$arguments181['object'] = NULL;
$arguments181['section'] = '';
$arguments181['format'] = '';
$arguments181['additionalParams'] = array (
);
$arguments181['absolute'] = false;
$arguments181['addQueryString'] = false;
$arguments181['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments181['fieldNamePrefix'] = NULL;
$arguments181['actionUri'] = NULL;
$arguments181['useParentRequest'] = false;
$arguments181['enctype'] = NULL;
$arguments181['name'] = NULL;
$arguments181['onreset'] = NULL;
$arguments181['onsubmit'] = NULL;
$arguments181['class'] = NULL;
$arguments181['dir'] = NULL;
$arguments181['id'] = NULL;
$arguments181['lang'] = NULL;
$arguments181['style'] = NULL;
$arguments181['title'] = NULL;
$arguments181['accesskey'] = NULL;
$arguments181['tabindex'] = NULL;
$arguments181['onclick'] = NULL;
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
$output183 = '';

$output183 .= '
                            <label accesskey="U">Full name <span>*</span></label>
                            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments184 = array();
$arguments184['property'] = 'name';
$arguments184['placeholder'] = 'Name';
$arguments184['name'] = 'name';
$arguments184['class'] = 'form-control input-field';
$arguments184['additionalAttributes'] = NULL;
$arguments184['data'] = NULL;
$arguments184['required'] = false;
$arguments184['type'] = 'text';
$arguments184['value'] = NULL;
$arguments184['disabled'] = NULL;
$arguments184['maxlength'] = NULL;
$arguments184['readonly'] = NULL;
$arguments184['size'] = NULL;
$arguments184['autofocus'] = NULL;
$arguments184['errorClass'] = 'f3-form-error';
$arguments184['dir'] = NULL;
$arguments184['id'] = NULL;
$arguments184['lang'] = NULL;
$arguments184['style'] = NULL;
$arguments184['title'] = NULL;
$arguments184['accesskey'] = NULL;
$arguments184['tabindex'] = NULL;
$arguments184['onclick'] = NULL;
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper186 = $self->getViewHelper('$viewHelper186', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper186->setArguments($arguments184);
$viewHelper186->setRenderingContext($renderingContext);
$viewHelper186->setRenderChildrenClosure($renderChildrenClosure185);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output183 .= $viewHelper186->initializeArgumentsAndRender();

$output183 .= '
                            <label accesskey="U">Username <span>*</span></label>
                            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments187 = array();
$arguments187['property'] = 'username';
$arguments187['placeholder'] = 'username';
$arguments187['name'] = 'username';
$arguments187['class'] = 'form-control input-field';
$arguments187['additionalAttributes'] = NULL;
$arguments187['data'] = NULL;
$arguments187['required'] = false;
$arguments187['type'] = 'text';
$arguments187['value'] = NULL;
$arguments187['disabled'] = NULL;
$arguments187['maxlength'] = NULL;
$arguments187['readonly'] = NULL;
$arguments187['size'] = NULL;
$arguments187['autofocus'] = NULL;
$arguments187['errorClass'] = 'f3-form-error';
$arguments187['dir'] = NULL;
$arguments187['id'] = NULL;
$arguments187['lang'] = NULL;
$arguments187['style'] = NULL;
$arguments187['title'] = NULL;
$arguments187['accesskey'] = NULL;
$arguments187['tabindex'] = NULL;
$arguments187['onclick'] = NULL;
$renderChildrenClosure188 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper189 = $self->getViewHelper('$viewHelper189', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper189->setArguments($arguments187);
$viewHelper189->setRenderingContext($renderingContext);
$viewHelper189->setRenderChildrenClosure($renderChildrenClosure188);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output183 .= $viewHelper189->initializeArgumentsAndRender();

$output183 .= '
                            <label accesskey="U">Email <span>*</span></label>
                            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments190 = array();
$arguments190['property'] = 'email';
$arguments190['placeholder'] = 'Email';
$arguments190['name'] = 'email';
$arguments190['class'] = 'form-control input-field';
$arguments190['additionalAttributes'] = NULL;
$arguments190['data'] = NULL;
$arguments190['required'] = false;
$arguments190['type'] = 'text';
$arguments190['value'] = NULL;
$arguments190['disabled'] = NULL;
$arguments190['maxlength'] = NULL;
$arguments190['readonly'] = NULL;
$arguments190['size'] = NULL;
$arguments190['autofocus'] = NULL;
$arguments190['errorClass'] = 'f3-form-error';
$arguments190['dir'] = NULL;
$arguments190['id'] = NULL;
$arguments190['lang'] = NULL;
$arguments190['style'] = NULL;
$arguments190['title'] = NULL;
$arguments190['accesskey'] = NULL;
$arguments190['tabindex'] = NULL;
$arguments190['onclick'] = NULL;
$renderChildrenClosure191 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper192 = $self->getViewHelper('$viewHelper192', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper192->setArguments($arguments190);
$viewHelper192->setRenderingContext($renderingContext);
$viewHelper192->setRenderChildrenClosure($renderChildrenClosure191);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output183 .= $viewHelper192->initializeArgumentsAndRender();

$output183 .= '
                            <label accesskey="U">Password <span>*</span></label>
                            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\PasswordViewHelper
$arguments193 = array();
$arguments193['property'] = 'password';
$arguments193['placeholder'] = 'Password';
$arguments193['class'] = 'form-control input-field';
$arguments193['additionalAttributes'] = NULL;
$arguments193['data'] = NULL;
$arguments193['name'] = NULL;
$arguments193['value'] = NULL;
$arguments193['disabled'] = NULL;
$arguments193['maxlength'] = NULL;
$arguments193['readonly'] = NULL;
$arguments193['size'] = NULL;
$arguments193['errorClass'] = 'f3-form-error';
$arguments193['dir'] = NULL;
$arguments193['id'] = NULL;
$arguments193['lang'] = NULL;
$arguments193['style'] = NULL;
$arguments193['title'] = NULL;
$arguments193['accesskey'] = NULL;
$arguments193['tabindex'] = NULL;
$arguments193['onclick'] = NULL;
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper195 = $self->getViewHelper('$viewHelper195', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\PasswordViewHelper');
$viewHelper195->setArguments($arguments193);
$viewHelper195->setRenderingContext($renderingContext);
$viewHelper195->setRenderChildrenClosure($renderChildrenClosure194);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\PasswordViewHelper

$output183 .= $viewHelper195->initializeArgumentsAndRender();

$output183 .= '
                            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments196 = array();
$arguments196['value'] = 'Submit';
$arguments196['class'] = 'form-button submit';
$arguments196['additionalAttributes'] = NULL;
$arguments196['data'] = NULL;
$arguments196['name'] = NULL;
$arguments196['property'] = NULL;
$arguments196['disabled'] = NULL;
$arguments196['dir'] = NULL;
$arguments196['id'] = NULL;
$arguments196['lang'] = NULL;
$arguments196['style'] = NULL;
$arguments196['title'] = NULL;
$arguments196['accesskey'] = NULL;
$arguments196['tabindex'] = NULL;
$arguments196['onclick'] = NULL;
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper198 = $self->getViewHelper('$viewHelper198', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper198->setArguments($arguments196);
$viewHelper198->setRenderingContext($renderingContext);
$viewHelper198->setRenderChildrenClosure($renderChildrenClosure197);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output183 .= $viewHelper198->initializeArgumentsAndRender();

$output183 .= '
                            ';
return $output183;
};
$viewHelper199 = $self->getViewHelper('$viewHelper199', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper199->setArguments($arguments181);
$viewHelper199->setRenderingContext($renderingContext);
$viewHelper199->setRenderChildrenClosure($renderChildrenClosure182);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output0 .= $viewHelper199->initializeArgumentsAndRender();

$output0 .= '
                        </div>
                    </div>

            </div>
            <div class="col-md-4">
            <div class="fb-login-button" data-max-rows="1" data-size="xlarge" data-show-faces="false" data-auto-logout-link="false"></div>
            <button class="btn btn-default">Facebook Login</button>
            </div>
        </div>
            </div>
            <div class="modal-footer">
                ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments200 = array();
$arguments200['action'] = 'home';
$arguments200['class'] = 'btn btn-default';
$arguments200['controller'] = 'Backend\\Get';
$arguments200['additionalAttributes'] = NULL;
$arguments200['data'] = NULL;
$arguments200['arguments'] = array (
);
$arguments200['package'] = NULL;
$arguments200['subpackage'] = NULL;
$arguments200['section'] = '';
$arguments200['format'] = '';
$arguments200['additionalParams'] = array (
);
$arguments200['addQueryString'] = false;
$arguments200['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments200['useParentRequest'] = false;
$arguments200['absolute'] = true;
$arguments200['dir'] = NULL;
$arguments200['id'] = NULL;
$arguments200['lang'] = NULL;
$arguments200['style'] = NULL;
$arguments200['title'] = NULL;
$arguments200['accesskey'] = NULL;
$arguments200['tabindex'] = NULL;
$arguments200['onclick'] = NULL;
$arguments200['name'] = NULL;
$arguments200['rel'] = NULL;
$arguments200['rev'] = NULL;
$arguments200['target'] = NULL;
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
return 'Organisation Login/Registration';
};
$viewHelper202 = $self->getViewHelper('$viewHelper202', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper202->setArguments($arguments200);
$viewHelper202->setRenderingContext($renderingContext);
$viewHelper202->setRenderChildrenClosure($renderChildrenClosure201);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper202->initializeArgumentsAndRender();

$output0 .= '
            </div>
    </div>
  </div>
</div>
    ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments203 = array();
$arguments203['section'] = 'Content';
$arguments203['partial'] = NULL;
$arguments203['arguments'] = array (
);
$arguments203['optional'] = false;
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper205 = $self->getViewHelper('$viewHelper205', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper205->setArguments($arguments203);
$viewHelper205->setRenderingContext($renderingContext);
$viewHelper205->setRenderChildrenClosure($renderChildrenClosure204);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output0 .= $viewHelper205->initializeArgumentsAndRender();

$output0 .= '
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="footer-widget-title">
                    <h4><strong><span>P</span>eople</strong> Reviews</h4>
                </div>
                <div class="footer_carousel">
                    <ul class="slides">
                        <li>
                            <div class="review">
                                <i>L</i><p><span>ifeline</span> is clean and modern responsive Template built with HTML5 & CSS3 coding and easy to use Shortcodes with load of features in it. We have implemented many features in this theme which makes your project easier and better than before and can be used for multipurpose. </p>
                            </div>
                            <div class="from">
                                <h6>Thoms gomz britian</h6>
                                <span>CE0, Australia</span>
                            </div>
                        </li>
                        <li>
                            <div class="review">
                                <i>L</i><p><span>ifeline</span> is clean and modern responsive Template built with HTML5 & CSS3 coding and easy to use Shortcodes with load of features in it. We have implemented many features in this theme which makes your project easier and better than before and can be used for multipurpose. </p>
                            </div>
                            <div class="from">
                                <h6>Thoms gomz britian</h6>
                                <span>CE0, Australia</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- Reviews Widget -->
            <div class="col-md-3">
                <div class="footer-widget-title">
                    <h4><strong><span>T</span>rending</strong></h4>
                </div>
                <div class="flickr-images">
                    <a href="#" title=""><img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments206 = array();
$arguments206['path'] = 'Frontend/images/flickr1.jpg';
$arguments206['package'] = NULL;
$arguments206['resource'] = NULL;
$arguments206['localize'] = true;
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper208 = $self->getViewHelper('$viewHelper208', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper208->setArguments($arguments206);
$viewHelper208->setRenderingContext($renderingContext);
$viewHelper208->setRenderChildrenClosure($renderChildrenClosure207);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper208->initializeArgumentsAndRender();

$output0 .= '" alt="" /></a>
                    <a href="#" title=""><img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments209 = array();
$arguments209['path'] = 'Frontend/images/flickr2.jpg';
$arguments209['package'] = NULL;
$arguments209['resource'] = NULL;
$arguments209['localize'] = true;
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper211 = $self->getViewHelper('$viewHelper211', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper211->setArguments($arguments209);
$viewHelper211->setRenderingContext($renderingContext);
$viewHelper211->setRenderChildrenClosure($renderChildrenClosure210);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper211->initializeArgumentsAndRender();

$output0 .= '" alt="" /></a>
                    <a href="#" title=""><img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments212 = array();
$arguments212['path'] = 'Frontend/images/flickr3.jpg';
$arguments212['package'] = NULL;
$arguments212['resource'] = NULL;
$arguments212['localize'] = true;
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper214 = $self->getViewHelper('$viewHelper214', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper214->setArguments($arguments212);
$viewHelper214->setRenderingContext($renderingContext);
$viewHelper214->setRenderChildrenClosure($renderChildrenClosure213);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper214->initializeArgumentsAndRender();

$output0 .= '" alt="" /></a>
                    <a href="#" title=""><img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments215 = array();
$arguments215['path'] = 'Frontend/images/flickr4.jpg';
$arguments215['package'] = NULL;
$arguments215['resource'] = NULL;
$arguments215['localize'] = true;
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper217 = $self->getViewHelper('$viewHelper217', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper217->setArguments($arguments215);
$viewHelper217->setRenderingContext($renderingContext);
$viewHelper217->setRenderChildrenClosure($renderChildrenClosure216);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper217->initializeArgumentsAndRender();

$output0 .= '" alt="" /></a>
                    <a href="#" title=""><img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments218 = array();
$arguments218['path'] = 'Frontend/images/flickr5.jpg';
$arguments218['package'] = NULL;
$arguments218['resource'] = NULL;
$arguments218['localize'] = true;
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper220 = $self->getViewHelper('$viewHelper220', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper220->setArguments($arguments218);
$viewHelper220->setRenderingContext($renderingContext);
$viewHelper220->setRenderChildrenClosure($renderChildrenClosure219);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper220->initializeArgumentsAndRender();

$output0 .= '" alt="" /></a>
                    <a href="#" title=""><img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments221 = array();
$arguments221['path'] = 'Frontend/images/flickr6.jpg';
$arguments221['package'] = NULL;
$arguments221['resource'] = NULL;
$arguments221['localize'] = true;
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper223 = $self->getViewHelper('$viewHelper223', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper223->setArguments($arguments221);
$viewHelper223->setRenderingContext($renderingContext);
$viewHelper223->setRenderChildrenClosure($renderChildrenClosure222);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper223->initializeArgumentsAndRender();

$output0 .= '" alt="" /></a>
                    <a href="#" title=""><img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments224 = array();
$arguments224['path'] = 'Frontend/images/flickr7.jpg';
$arguments224['package'] = NULL;
$arguments224['resource'] = NULL;
$arguments224['localize'] = true;
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper226 = $self->getViewHelper('$viewHelper226', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper226->setArguments($arguments224);
$viewHelper226->setRenderingContext($renderingContext);
$viewHelper226->setRenderChildrenClosure($renderChildrenClosure225);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper226->initializeArgumentsAndRender();

$output0 .= '" alt="" /></a>
                    <a href="#" title=""><img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments227 = array();
$arguments227['path'] = 'Frontend/images/flickr8.jpg';
$arguments227['package'] = NULL;
$arguments227['resource'] = NULL;
$arguments227['localize'] = true;
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper229 = $self->getViewHelper('$viewHelper229', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper229->setArguments($arguments227);
$viewHelper229->setRenderingContext($renderingContext);
$viewHelper229->setRenderChildrenClosure($renderChildrenClosure228);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper229->initializeArgumentsAndRender();

$output0 .= '" alt="" /></a>
                    <a href="#" title=""><img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments230 = array();
$arguments230['path'] = 'Frontend/images/flickr9.jpg';
$arguments230['package'] = NULL;
$arguments230['resource'] = NULL;
$arguments230['localize'] = true;
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper232 = $self->getViewHelper('$viewHelper232', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper232->setArguments($arguments230);
$viewHelper232->setRenderingContext($renderingContext);
$viewHelper232->setRenderChildrenClosure($renderChildrenClosure231);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper232->initializeArgumentsAndRender();

$output0 .= '" alt="" /></a>
                </div>
            </div><!-- Flickr Widget -->
            <div class="col-md-3">
                <div class="footer-widget-title">
                    <h4><strong><span>C</span>ontact</strong> Us</h4>
                </div>
                <ul class="contact-details">
                    <li>
                        <span><i class="icon-home"></i>ADDRESS</span>
                        <p>#8901 Marmora Road Chi Minh City, Vietnam</p>
                    </li>
                    <li>
                        <span><i class="icon-phone-sign"></i>PHONE NO</span>
                        <p>+00 035 835 282 / +00 034 965 353</p>
                    </li>
                    <li>
                        <span><i class="icon-envelope-alt"></i>EMAIL ID</span>
                        <p>#8901 Marmora Road Chi Minh City, Vietnam</p>
                    </li>
                    <li>
                        <span><i class="icon-link"></i>WEB ADDRESS</span>
                        <p>http://www.yourwebsite.com</p>
                    </li>
                </ul>
            </div><!-- Contact Us Widget -->
            <div class="col-md-3">
                <div class="newsletter">
                    <h4><strong>SIGNUP</strong> NEWSLETTER</h4>
                    <p>Quisque volutpat mattis eros. Nullamma lesuada erat ut turpis. Suspendisse.</p>
                    <input class="form-control" type="email" placeholder="Email" />
                </div>
                <ul class="social-bar">
                    <li><a href="#" title=""><img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments233 = array();
$arguments233['path'] = 'Frontend/images/rss.jpg';
$arguments233['package'] = NULL;
$arguments233['resource'] = NULL;
$arguments233['localize'] = true;
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper235 = $self->getViewHelper('$viewHelper235', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper235->setArguments($arguments233);
$viewHelper235->setRenderingContext($renderingContext);
$viewHelper235->setRenderChildrenClosure($renderChildrenClosure234);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper235->initializeArgumentsAndRender();

$output0 .= '" alt="" /></a></li>
                    <li><a href="#" title=""><img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments236 = array();
$arguments236['path'] = 'Frontend/images/facebook.jpg';
$arguments236['package'] = NULL;
$arguments236['resource'] = NULL;
$arguments236['localize'] = true;
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper238 = $self->getViewHelper('$viewHelper238', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper238->setArguments($arguments236);
$viewHelper238->setRenderingContext($renderingContext);
$viewHelper238->setRenderChildrenClosure($renderChildrenClosure237);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper238->initializeArgumentsAndRender();

$output0 .= '" alt="" /></a></li>
                    <li><a href="#" title=""><img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments239 = array();
$arguments239['path'] = 'Frontend/images/gplus.jpg';
$arguments239['package'] = NULL;
$arguments239['resource'] = NULL;
$arguments239['localize'] = true;
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper241 = $self->getViewHelper('$viewHelper241', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper241->setArguments($arguments239);
$viewHelper241->setRenderingContext($renderingContext);
$viewHelper241->setRenderChildrenClosure($renderChildrenClosure240);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper241->initializeArgumentsAndRender();

$output0 .= '" alt="" /></a></li>
                    <li><a href="#" title=""><img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments242 = array();
$arguments242['path'] = 'Frontend/images/linked-in.jpg';
$arguments242['package'] = NULL;
$arguments242['resource'] = NULL;
$arguments242['localize'] = true;
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper244 = $self->getViewHelper('$viewHelper244', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper244->setArguments($arguments242);
$viewHelper244->setRenderingContext($renderingContext);
$viewHelper244->setRenderChildrenClosure($renderChildrenClosure243);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper244->initializeArgumentsAndRender();

$output0 .= '" alt="" /></a></li>
                    <li><a href="#" title=""><img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments245 = array();
$arguments245['path'] = 'Frontend/images/pinterest.jpg';
$arguments245['package'] = NULL;
$arguments245['resource'] = NULL;
$arguments245['localize'] = true;
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper247 = $self->getViewHelper('$viewHelper247', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper247->setArguments($arguments245);
$viewHelper247->setRenderingContext($renderingContext);
$viewHelper247->setRenderChildrenClosure($renderChildrenClosure246);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper247->initializeArgumentsAndRender();

$output0 .= '" alt="" /></a></li>
                </ul>
                <div class="newsletter-btn">
                    <input type="button" value="Submit" />
                </div>
            </div>	<!-- News Letter SignUp -->
        </div>
    </div>
</footer><!-- Footer -->
</body>
</html>';

return $output0;
}


}
#0             95904     