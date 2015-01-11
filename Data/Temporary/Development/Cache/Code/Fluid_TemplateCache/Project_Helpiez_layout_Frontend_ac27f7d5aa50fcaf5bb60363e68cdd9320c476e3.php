<?php class FluidCache_Project_Helpiez_layout_Frontend_ac27f7d5aa50fcaf5bb60363e68cdd9320c476e3 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments61['path'] = 'Frontend/js/script.js';
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
$arguments64 = array();
// Rendering Boolean node
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ActionViewHelper
$arguments65 = array();
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper67 = $self->getViewHelper('$viewHelper67', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ActionViewHelper');
$viewHelper67->setArguments($arguments65);
$viewHelper67->setRenderingContext($renderingContext);
$viewHelper67->setRenderChildrenClosure($renderChildrenClosure66);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ActionViewHelper
$arguments64['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', $viewHelper67->initializeArgumentsAndRender(), 'home');
$arguments64['then'] = NULL;
$arguments64['else'] = NULL;
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
$output69 = '';

$output69 .= '
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments70 = array();
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$output72 = '';

$output72 .= '
                            <li class="active">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments73 = array();
$arguments73['action'] = 'home';
$arguments73['controller'] = 'Frontend\\Get';
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
return 'Home';
};
$viewHelper75 = $self->getViewHelper('$viewHelper75', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper75->setArguments($arguments73);
$viewHelper75->setRenderingContext($renderingContext);
$viewHelper75->setRenderChildrenClosure($renderChildrenClosure74);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output72 .= $viewHelper75->initializeArgumentsAndRender();

$output72 .= '</li>
                        ';
return $output72;
};
$viewHelper76 = $self->getViewHelper('$viewHelper76', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper76->setArguments($arguments70);
$viewHelper76->setRenderingContext($renderingContext);
$viewHelper76->setRenderChildrenClosure($renderChildrenClosure71);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output69 .= $viewHelper76->initializeArgumentsAndRender();

$output69 .= '
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments77 = array();
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
                            <li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments80 = array();
$arguments80['action'] = 'home';
$arguments80['controller'] = 'Frontend\\Get';
$arguments80['additionalAttributes'] = NULL;
$arguments80['data'] = NULL;
$arguments80['arguments'] = array (
);
$arguments80['package'] = NULL;
$arguments80['subpackage'] = NULL;
$arguments80['section'] = '';
$arguments80['format'] = '';
$arguments80['additionalParams'] = array (
);
$arguments80['addQueryString'] = false;
$arguments80['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments80['useParentRequest'] = false;
$arguments80['absolute'] = true;
$arguments80['class'] = NULL;
$arguments80['dir'] = NULL;
$arguments80['id'] = NULL;
$arguments80['lang'] = NULL;
$arguments80['style'] = NULL;
$arguments80['title'] = NULL;
$arguments80['accesskey'] = NULL;
$arguments80['tabindex'] = NULL;
$arguments80['onclick'] = NULL;
$arguments80['name'] = NULL;
$arguments80['rel'] = NULL;
$arguments80['rev'] = NULL;
$arguments80['target'] = NULL;
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return 'Home';
};
$viewHelper82 = $self->getViewHelper('$viewHelper82', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper82->setArguments($arguments80);
$viewHelper82->setRenderingContext($renderingContext);
$viewHelper82->setRenderChildrenClosure($renderChildrenClosure81);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output79 .= $viewHelper82->initializeArgumentsAndRender();

$output79 .= '</li>
                        ';
return $output79;
};
$viewHelper83 = $self->getViewHelper('$viewHelper83', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper83->setArguments($arguments77);
$viewHelper83->setRenderingContext($renderingContext);
$viewHelper83->setRenderChildrenClosure($renderChildrenClosure78);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output69 .= $viewHelper83->initializeArgumentsAndRender();

$output69 .= '
                    ';
return $output69;
};
$arguments64['__thenClosure'] = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
                            <li class="active">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments85 = array();
$arguments85['action'] = 'home';
$arguments85['controller'] = 'Frontend\\Get';
$arguments85['additionalAttributes'] = NULL;
$arguments85['data'] = NULL;
$arguments85['arguments'] = array (
);
$arguments85['package'] = NULL;
$arguments85['subpackage'] = NULL;
$arguments85['section'] = '';
$arguments85['format'] = '';
$arguments85['additionalParams'] = array (
);
$arguments85['addQueryString'] = false;
$arguments85['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments85['useParentRequest'] = false;
$arguments85['absolute'] = true;
$arguments85['class'] = NULL;
$arguments85['dir'] = NULL;
$arguments85['id'] = NULL;
$arguments85['lang'] = NULL;
$arguments85['style'] = NULL;
$arguments85['title'] = NULL;
$arguments85['accesskey'] = NULL;
$arguments85['tabindex'] = NULL;
$arguments85['onclick'] = NULL;
$arguments85['name'] = NULL;
$arguments85['rel'] = NULL;
$arguments85['rev'] = NULL;
$arguments85['target'] = NULL;
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return 'Home';
};
$viewHelper87 = $self->getViewHelper('$viewHelper87', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper87->setArguments($arguments85);
$viewHelper87->setRenderingContext($renderingContext);
$viewHelper87->setRenderChildrenClosure($renderChildrenClosure86);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output84 .= $viewHelper87->initializeArgumentsAndRender();

$output84 .= '</li>
                        ';
return $output84;
};
$arguments64['__elseClosure'] = function() use ($renderingContext, $self) {
$output88 = '';

$output88 .= '
                            <li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments89 = array();
$arguments89['action'] = 'home';
$arguments89['controller'] = 'Frontend\\Get';
$arguments89['additionalAttributes'] = NULL;
$arguments89['data'] = NULL;
$arguments89['arguments'] = array (
);
$arguments89['package'] = NULL;
$arguments89['subpackage'] = NULL;
$arguments89['section'] = '';
$arguments89['format'] = '';
$arguments89['additionalParams'] = array (
);
$arguments89['addQueryString'] = false;
$arguments89['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments89['useParentRequest'] = false;
$arguments89['absolute'] = true;
$arguments89['class'] = NULL;
$arguments89['dir'] = NULL;
$arguments89['id'] = NULL;
$arguments89['lang'] = NULL;
$arguments89['style'] = NULL;
$arguments89['title'] = NULL;
$arguments89['accesskey'] = NULL;
$arguments89['tabindex'] = NULL;
$arguments89['onclick'] = NULL;
$arguments89['name'] = NULL;
$arguments89['rel'] = NULL;
$arguments89['rev'] = NULL;
$arguments89['target'] = NULL;
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
return 'Home';
};
$viewHelper91 = $self->getViewHelper('$viewHelper91', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper91->setArguments($arguments89);
$viewHelper91->setRenderingContext($renderingContext);
$viewHelper91->setRenderChildrenClosure($renderChildrenClosure90);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output88 .= $viewHelper91->initializeArgumentsAndRender();

$output88 .= '</li>
                        ';
return $output88;
};
$viewHelper92 = $self->getViewHelper('$viewHelper92', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper92->setArguments($arguments64);
$viewHelper92->setRenderingContext($renderingContext);
$viewHelper92->setRenderChildrenClosure($renderChildrenClosure68);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output0 .= $viewHelper92->initializeArgumentsAndRender();

$output0 .= '
                    <li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments93 = array();
$arguments93['action'] = 'search';
$arguments93['controller'] = 'Frontend\\Get';
$arguments93['additionalAttributes'] = NULL;
$arguments93['data'] = NULL;
$arguments93['arguments'] = array (
);
$arguments93['package'] = NULL;
$arguments93['subpackage'] = NULL;
$arguments93['section'] = '';
$arguments93['format'] = '';
$arguments93['additionalParams'] = array (
);
$arguments93['addQueryString'] = false;
$arguments93['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments93['useParentRequest'] = false;
$arguments93['absolute'] = true;
$arguments93['class'] = NULL;
$arguments93['dir'] = NULL;
$arguments93['id'] = NULL;
$arguments93['lang'] = NULL;
$arguments93['style'] = NULL;
$arguments93['title'] = NULL;
$arguments93['accesskey'] = NULL;
$arguments93['tabindex'] = NULL;
$arguments93['onclick'] = NULL;
$arguments93['name'] = NULL;
$arguments93['rel'] = NULL;
$arguments93['rev'] = NULL;
$arguments93['target'] = NULL;
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return 'Search';
};
$viewHelper95 = $self->getViewHelper('$viewHelper95', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper95->setArguments($arguments93);
$viewHelper95->setRenderingContext($renderingContext);
$viewHelper95->setRenderChildrenClosure($renderChildrenClosure94);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper95->initializeArgumentsAndRender();

$output0 .= '</li>
                    <li><a>Opportunity</a>
                        <ul>
                            <li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments96 = array();
$arguments96['action'] = 'events';
$arguments96['controller'] = 'Frontend\\Get';
$arguments96['additionalAttributes'] = NULL;
$arguments96['data'] = NULL;
$arguments96['arguments'] = array (
);
$arguments96['package'] = NULL;
$arguments96['subpackage'] = NULL;
$arguments96['section'] = '';
$arguments96['format'] = '';
$arguments96['additionalParams'] = array (
);
$arguments96['addQueryString'] = false;
$arguments96['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments96['useParentRequest'] = false;
$arguments96['absolute'] = true;
$arguments96['class'] = NULL;
$arguments96['dir'] = NULL;
$arguments96['id'] = NULL;
$arguments96['lang'] = NULL;
$arguments96['style'] = NULL;
$arguments96['title'] = NULL;
$arguments96['accesskey'] = NULL;
$arguments96['tabindex'] = NULL;
$arguments96['onclick'] = NULL;
$arguments96['name'] = NULL;
$arguments96['rel'] = NULL;
$arguments96['rev'] = NULL;
$arguments96['target'] = NULL;
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return 'Upcoming Events';
};
$viewHelper98 = $self->getViewHelper('$viewHelper98', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper98->setArguments($arguments96);
$viewHelper98->setRenderingContext($renderingContext);
$viewHelper98->setRenderChildrenClosure($renderChildrenClosure97);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper98->initializeArgumentsAndRender();

$output0 .= '</li>
                            <li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments99 = array();
$arguments99['action'] = 'volunteering';
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
return 'Volunteering';
};
$viewHelper101 = $self->getViewHelper('$viewHelper101', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper101->setArguments($arguments99);
$viewHelper101->setRenderingContext($renderingContext);
$viewHelper101->setRenderChildrenClosure($renderChildrenClosure100);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper101->initializeArgumentsAndRender();

$output0 .= '</li>
                            <li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments102 = array();
$arguments102['action'] = 'internships';
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
return 'Internships';
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
$arguments105['action'] = 'jobs';
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
return 'Job Openings';
};
$viewHelper107 = $self->getViewHelper('$viewHelper107', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper107->setArguments($arguments105);
$viewHelper107->setRenderingContext($renderingContext);
$viewHelper107->setRenderChildrenClosure($renderChildrenClosure106);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper107->initializeArgumentsAndRender();

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
$arguments108 = array();
$arguments108['role'] = 'User';
$arguments108['then'] = NULL;
$arguments108['else'] = NULL;
$arguments108['packageKey'] = NULL;
$renderChildrenClosure109 = function() use ($renderingContext, $self) {
$output110 = '';

$output110 .= '
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments111 = array();
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
$output113 = '';

$output113 .= '
                            <li><a>Hi!</a>
                                <ul>
                                    <li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments114 = array();
$arguments114['action'] = 'profile';
$arguments114['controller'] = 'Frontend\\Get';
$arguments114['additionalAttributes'] = NULL;
$arguments114['data'] = NULL;
$arguments114['arguments'] = array (
);
$arguments114['package'] = NULL;
$arguments114['subpackage'] = NULL;
$arguments114['section'] = '';
$arguments114['format'] = '';
$arguments114['additionalParams'] = array (
);
$arguments114['addQueryString'] = false;
$arguments114['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments114['useParentRequest'] = false;
$arguments114['absolute'] = true;
$arguments114['class'] = NULL;
$arguments114['dir'] = NULL;
$arguments114['id'] = NULL;
$arguments114['lang'] = NULL;
$arguments114['style'] = NULL;
$arguments114['title'] = NULL;
$arguments114['accesskey'] = NULL;
$arguments114['tabindex'] = NULL;
$arguments114['onclick'] = NULL;
$arguments114['name'] = NULL;
$arguments114['rel'] = NULL;
$arguments114['rev'] = NULL;
$arguments114['target'] = NULL;
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
return 'Profile';
};
$viewHelper116 = $self->getViewHelper('$viewHelper116', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper116->setArguments($arguments114);
$viewHelper116->setRenderingContext($renderingContext);
$viewHelper116->setRenderChildrenClosure($renderChildrenClosure115);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output113 .= $viewHelper116->initializeArgumentsAndRender();

$output113 .= '</li>
                                    ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Security\IfHasRoleViewHelper
$arguments117 = array();
$arguments117['role'] = 'Incharge';
$arguments117['then'] = NULL;
$arguments117['else'] = NULL;
$arguments117['packageKey'] = NULL;
$renderChildrenClosure118 = function() use ($renderingContext, $self) {
$output119 = '';

$output119 .= '
                                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments120 = array();
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$output122 = '';

$output122 .= '
                                            <li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments123 = array();
$arguments123['action'] = 'home';
$arguments123['controller'] = 'Backend\\Get';
$arguments123['additionalAttributes'] = NULL;
$arguments123['data'] = NULL;
$arguments123['arguments'] = array (
);
$arguments123['package'] = NULL;
$arguments123['subpackage'] = NULL;
$arguments123['section'] = '';
$arguments123['format'] = '';
$arguments123['additionalParams'] = array (
);
$arguments123['addQueryString'] = false;
$arguments123['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments123['useParentRequest'] = false;
$arguments123['absolute'] = true;
$arguments123['class'] = NULL;
$arguments123['dir'] = NULL;
$arguments123['id'] = NULL;
$arguments123['lang'] = NULL;
$arguments123['style'] = NULL;
$arguments123['title'] = NULL;
$arguments123['accesskey'] = NULL;
$arguments123['tabindex'] = NULL;
$arguments123['onclick'] = NULL;
$arguments123['name'] = NULL;
$arguments123['rel'] = NULL;
$arguments123['rev'] = NULL;
$arguments123['target'] = NULL;
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
return 'Backend';
};
$viewHelper125 = $self->getViewHelper('$viewHelper125', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper125->setArguments($arguments123);
$viewHelper125->setRenderingContext($renderingContext);
$viewHelper125->setRenderChildrenClosure($renderChildrenClosure124);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output122 .= $viewHelper125->initializeArgumentsAndRender();

$output122 .= '</li>
                                        ';
return $output122;
};
$viewHelper126 = $self->getViewHelper('$viewHelper126', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper126->setArguments($arguments120);
$viewHelper126->setRenderingContext($renderingContext);
$viewHelper126->setRenderChildrenClosure($renderChildrenClosure121);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output119 .= $viewHelper126->initializeArgumentsAndRender();

$output119 .= '
                                    ';
return $output119;
};
$arguments117['__thenClosure'] = function() use ($renderingContext, $self) {
$output127 = '';

$output127 .= '
                                            <li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments128 = array();
$arguments128['action'] = 'home';
$arguments128['controller'] = 'Backend\\Get';
$arguments128['additionalAttributes'] = NULL;
$arguments128['data'] = NULL;
$arguments128['arguments'] = array (
);
$arguments128['package'] = NULL;
$arguments128['subpackage'] = NULL;
$arguments128['section'] = '';
$arguments128['format'] = '';
$arguments128['additionalParams'] = array (
);
$arguments128['addQueryString'] = false;
$arguments128['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments128['useParentRequest'] = false;
$arguments128['absolute'] = true;
$arguments128['class'] = NULL;
$arguments128['dir'] = NULL;
$arguments128['id'] = NULL;
$arguments128['lang'] = NULL;
$arguments128['style'] = NULL;
$arguments128['title'] = NULL;
$arguments128['accesskey'] = NULL;
$arguments128['tabindex'] = NULL;
$arguments128['onclick'] = NULL;
$arguments128['name'] = NULL;
$arguments128['rel'] = NULL;
$arguments128['rev'] = NULL;
$arguments128['target'] = NULL;
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return 'Backend';
};
$viewHelper130 = $self->getViewHelper('$viewHelper130', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper130->setArguments($arguments128);
$viewHelper130->setRenderingContext($renderingContext);
$viewHelper130->setRenderChildrenClosure($renderChildrenClosure129);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output127 .= $viewHelper130->initializeArgumentsAndRender();

$output127 .= '</li>
                                        ';
return $output127;
};
$viewHelper131 = $self->getViewHelper('$viewHelper131', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Security\IfHasRoleViewHelper');
$viewHelper131->setArguments($arguments117);
$viewHelper131->setRenderingContext($renderingContext);
$viewHelper131->setRenderChildrenClosure($renderChildrenClosure118);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Security\IfHasRoleViewHelper

$output113 .= $viewHelper131->initializeArgumentsAndRender();

$output113 .= '
                                    <li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments132 = array();
$arguments132['action'] = 'logout';
$arguments132['controller'] = 'auth';
$arguments132['additionalAttributes'] = NULL;
$arguments132['data'] = NULL;
$arguments132['arguments'] = array (
);
$arguments132['package'] = NULL;
$arguments132['subpackage'] = NULL;
$arguments132['section'] = '';
$arguments132['format'] = '';
$arguments132['additionalParams'] = array (
);
$arguments132['addQueryString'] = false;
$arguments132['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments132['useParentRequest'] = false;
$arguments132['absolute'] = true;
$arguments132['class'] = NULL;
$arguments132['dir'] = NULL;
$arguments132['id'] = NULL;
$arguments132['lang'] = NULL;
$arguments132['style'] = NULL;
$arguments132['title'] = NULL;
$arguments132['accesskey'] = NULL;
$arguments132['tabindex'] = NULL;
$arguments132['onclick'] = NULL;
$arguments132['name'] = NULL;
$arguments132['rel'] = NULL;
$arguments132['rev'] = NULL;
$arguments132['target'] = NULL;
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
return 'Logout';
};
$viewHelper134 = $self->getViewHelper('$viewHelper134', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper134->setArguments($arguments132);
$viewHelper134->setRenderingContext($renderingContext);
$viewHelper134->setRenderChildrenClosure($renderChildrenClosure133);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output113 .= $viewHelper134->initializeArgumentsAndRender();

$output113 .= '</li>
                                </ul>
                            </li>
                        ';
return $output113;
};
$viewHelper135 = $self->getViewHelper('$viewHelper135', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper135->setArguments($arguments111);
$viewHelper135->setRenderingContext($renderingContext);
$viewHelper135->setRenderChildrenClosure($renderChildrenClosure112);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output110 .= $viewHelper135->initializeArgumentsAndRender();

$output110 .= '
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments136 = array();
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
return '
                            <li><a href="#" data-toggle="modal" data-target="#basicModal">Login</a></li>
                        ';
};
$viewHelper138 = $self->getViewHelper('$viewHelper138', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper138->setArguments($arguments136);
$viewHelper138->setRenderingContext($renderingContext);
$viewHelper138->setRenderChildrenClosure($renderChildrenClosure137);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output110 .= $viewHelper138->initializeArgumentsAndRender();

$output110 .= '
                    ';
return $output110;
};
$arguments108['__thenClosure'] = function() use ($renderingContext, $self) {
$output139 = '';

$output139 .= '
                            <li><a>Hi!</a>
                                <ul>
                                    <li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments140 = array();
$arguments140['action'] = 'profile';
$arguments140['controller'] = 'Frontend\\Get';
$arguments140['additionalAttributes'] = NULL;
$arguments140['data'] = NULL;
$arguments140['arguments'] = array (
);
$arguments140['package'] = NULL;
$arguments140['subpackage'] = NULL;
$arguments140['section'] = '';
$arguments140['format'] = '';
$arguments140['additionalParams'] = array (
);
$arguments140['addQueryString'] = false;
$arguments140['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments140['useParentRequest'] = false;
$arguments140['absolute'] = true;
$arguments140['class'] = NULL;
$arguments140['dir'] = NULL;
$arguments140['id'] = NULL;
$arguments140['lang'] = NULL;
$arguments140['style'] = NULL;
$arguments140['title'] = NULL;
$arguments140['accesskey'] = NULL;
$arguments140['tabindex'] = NULL;
$arguments140['onclick'] = NULL;
$arguments140['name'] = NULL;
$arguments140['rel'] = NULL;
$arguments140['rev'] = NULL;
$arguments140['target'] = NULL;
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return 'Profile';
};
$viewHelper142 = $self->getViewHelper('$viewHelper142', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper142->setArguments($arguments140);
$viewHelper142->setRenderingContext($renderingContext);
$viewHelper142->setRenderChildrenClosure($renderChildrenClosure141);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output139 .= $viewHelper142->initializeArgumentsAndRender();

$output139 .= '</li>
                                    ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Security\IfHasRoleViewHelper
$arguments143 = array();
$arguments143['role'] = 'Incharge';
$arguments143['then'] = NULL;
$arguments143['else'] = NULL;
$arguments143['packageKey'] = NULL;
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$output145 = '';

$output145 .= '
                                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments146 = array();
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
$output148 = '';

$output148 .= '
                                            <li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments149 = array();
$arguments149['action'] = 'home';
$arguments149['controller'] = 'Backend\\Get';
$arguments149['additionalAttributes'] = NULL;
$arguments149['data'] = NULL;
$arguments149['arguments'] = array (
);
$arguments149['package'] = NULL;
$arguments149['subpackage'] = NULL;
$arguments149['section'] = '';
$arguments149['format'] = '';
$arguments149['additionalParams'] = array (
);
$arguments149['addQueryString'] = false;
$arguments149['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments149['useParentRequest'] = false;
$arguments149['absolute'] = true;
$arguments149['class'] = NULL;
$arguments149['dir'] = NULL;
$arguments149['id'] = NULL;
$arguments149['lang'] = NULL;
$arguments149['style'] = NULL;
$arguments149['title'] = NULL;
$arguments149['accesskey'] = NULL;
$arguments149['tabindex'] = NULL;
$arguments149['onclick'] = NULL;
$arguments149['name'] = NULL;
$arguments149['rel'] = NULL;
$arguments149['rev'] = NULL;
$arguments149['target'] = NULL;
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
return 'Backend';
};
$viewHelper151 = $self->getViewHelper('$viewHelper151', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper151->setArguments($arguments149);
$viewHelper151->setRenderingContext($renderingContext);
$viewHelper151->setRenderChildrenClosure($renderChildrenClosure150);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output148 .= $viewHelper151->initializeArgumentsAndRender();

$output148 .= '</li>
                                        ';
return $output148;
};
$viewHelper152 = $self->getViewHelper('$viewHelper152', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper152->setArguments($arguments146);
$viewHelper152->setRenderingContext($renderingContext);
$viewHelper152->setRenderChildrenClosure($renderChildrenClosure147);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output145 .= $viewHelper152->initializeArgumentsAndRender();

$output145 .= '
                                    ';
return $output145;
};
$arguments143['__thenClosure'] = function() use ($renderingContext, $self) {
$output153 = '';

$output153 .= '
                                            <li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments154 = array();
$arguments154['action'] = 'home';
$arguments154['controller'] = 'Backend\\Get';
$arguments154['additionalAttributes'] = NULL;
$arguments154['data'] = NULL;
$arguments154['arguments'] = array (
);
$arguments154['package'] = NULL;
$arguments154['subpackage'] = NULL;
$arguments154['section'] = '';
$arguments154['format'] = '';
$arguments154['additionalParams'] = array (
);
$arguments154['addQueryString'] = false;
$arguments154['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments154['useParentRequest'] = false;
$arguments154['absolute'] = true;
$arguments154['class'] = NULL;
$arguments154['dir'] = NULL;
$arguments154['id'] = NULL;
$arguments154['lang'] = NULL;
$arguments154['style'] = NULL;
$arguments154['title'] = NULL;
$arguments154['accesskey'] = NULL;
$arguments154['tabindex'] = NULL;
$arguments154['onclick'] = NULL;
$arguments154['name'] = NULL;
$arguments154['rel'] = NULL;
$arguments154['rev'] = NULL;
$arguments154['target'] = NULL;
$renderChildrenClosure155 = function() use ($renderingContext, $self) {
return 'Backend';
};
$viewHelper156 = $self->getViewHelper('$viewHelper156', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper156->setArguments($arguments154);
$viewHelper156->setRenderingContext($renderingContext);
$viewHelper156->setRenderChildrenClosure($renderChildrenClosure155);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output153 .= $viewHelper156->initializeArgumentsAndRender();

$output153 .= '</li>
                                        ';
return $output153;
};
$viewHelper157 = $self->getViewHelper('$viewHelper157', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Security\IfHasRoleViewHelper');
$viewHelper157->setArguments($arguments143);
$viewHelper157->setRenderingContext($renderingContext);
$viewHelper157->setRenderChildrenClosure($renderChildrenClosure144);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Security\IfHasRoleViewHelper

$output139 .= $viewHelper157->initializeArgumentsAndRender();

$output139 .= '
                                    <li>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments158 = array();
$arguments158['action'] = 'logout';
$arguments158['controller'] = 'auth';
$arguments158['additionalAttributes'] = NULL;
$arguments158['data'] = NULL;
$arguments158['arguments'] = array (
);
$arguments158['package'] = NULL;
$arguments158['subpackage'] = NULL;
$arguments158['section'] = '';
$arguments158['format'] = '';
$arguments158['additionalParams'] = array (
);
$arguments158['addQueryString'] = false;
$arguments158['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments158['useParentRequest'] = false;
$arguments158['absolute'] = true;
$arguments158['class'] = NULL;
$arguments158['dir'] = NULL;
$arguments158['id'] = NULL;
$arguments158['lang'] = NULL;
$arguments158['style'] = NULL;
$arguments158['title'] = NULL;
$arguments158['accesskey'] = NULL;
$arguments158['tabindex'] = NULL;
$arguments158['onclick'] = NULL;
$arguments158['name'] = NULL;
$arguments158['rel'] = NULL;
$arguments158['rev'] = NULL;
$arguments158['target'] = NULL;
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
return 'Logout';
};
$viewHelper160 = $self->getViewHelper('$viewHelper160', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper160->setArguments($arguments158);
$viewHelper160->setRenderingContext($renderingContext);
$viewHelper160->setRenderChildrenClosure($renderChildrenClosure159);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output139 .= $viewHelper160->initializeArgumentsAndRender();

$output139 .= '</li>
                                </ul>
                            </li>
                        ';
return $output139;
};
$arguments108['__elseClosure'] = function() use ($renderingContext, $self) {
return '
                            <li><a href="#" data-toggle="modal" data-target="#basicModal">Login</a></li>
                        ';
};
$viewHelper161 = $self->getViewHelper('$viewHelper161', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Security\IfHasRoleViewHelper');
$viewHelper161->setArguments($arguments108);
$viewHelper161->setRenderingContext($renderingContext);
$viewHelper161->setRenderChildrenClosure($renderChildrenClosure109);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Security\IfHasRoleViewHelper

$output0 .= $viewHelper161->initializeArgumentsAndRender();

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
$arguments162 = array();
$arguments162['action'] = 'authenticate';
$arguments162['controller'] = 'auth';
$arguments162['package'] = 'project.helpiez';
$arguments162['method'] = 'post';
$arguments162['additionalAttributes'] = NULL;
$arguments162['data'] = NULL;
$arguments162['arguments'] = array (
);
$arguments162['subpackage'] = NULL;
$arguments162['object'] = NULL;
$arguments162['section'] = '';
$arguments162['format'] = '';
$arguments162['additionalParams'] = array (
);
$arguments162['absolute'] = false;
$arguments162['addQueryString'] = false;
$arguments162['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments162['fieldNamePrefix'] = NULL;
$arguments162['actionUri'] = NULL;
$arguments162['objectName'] = NULL;
$arguments162['useParentRequest'] = false;
$arguments162['enctype'] = NULL;
$arguments162['name'] = NULL;
$arguments162['onreset'] = NULL;
$arguments162['onsubmit'] = NULL;
$arguments162['class'] = NULL;
$arguments162['dir'] = NULL;
$arguments162['id'] = NULL;
$arguments162['lang'] = NULL;
$arguments162['style'] = NULL;
$arguments162['title'] = NULL;
$arguments162['accesskey'] = NULL;
$arguments162['tabindex'] = NULL;
$arguments162['onclick'] = NULL;
$renderChildrenClosure163 = function() use ($renderingContext, $self) {
$output164 = '';

$output164 .= '
                                <label accesskey="U">Username <span>*</span></label>
                                ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments165 = array();
$arguments165['class'] = 'form-control input-field';
$arguments165['placeholder'] = 'Username';
$arguments165['name'] = '__authentication[TYPO3][Flow][Security][Authentication][Token][UsernamePassword][username]';
$arguments165['additionalAttributes'] = NULL;
$arguments165['data'] = NULL;
$arguments165['required'] = false;
$arguments165['type'] = 'text';
$arguments165['value'] = NULL;
$arguments165['property'] = NULL;
$arguments165['disabled'] = NULL;
$arguments165['maxlength'] = NULL;
$arguments165['readonly'] = NULL;
$arguments165['size'] = NULL;
$arguments165['autofocus'] = NULL;
$arguments165['errorClass'] = 'f3-form-error';
$arguments165['dir'] = NULL;
$arguments165['id'] = NULL;
$arguments165['lang'] = NULL;
$arguments165['style'] = NULL;
$arguments165['title'] = NULL;
$arguments165['accesskey'] = NULL;
$arguments165['tabindex'] = NULL;
$arguments165['onclick'] = NULL;
$renderChildrenClosure166 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper167 = $self->getViewHelper('$viewHelper167', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper167->setArguments($arguments165);
$viewHelper167->setRenderingContext($renderingContext);
$viewHelper167->setRenderChildrenClosure($renderChildrenClosure166);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output164 .= $viewHelper167->initializeArgumentsAndRender();

$output164 .= '
                                <label accesskey="U">Password <span>*</span></label>
                                ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\PasswordViewHelper
$arguments168 = array();
$arguments168['class'] = 'form-control input-field';
$arguments168['placeholder'] = 'Password';
$arguments168['name'] = '__authentication[TYPO3][Flow][Security][Authentication][Token][UsernamePassword][password]';
$arguments168['additionalAttributes'] = NULL;
$arguments168['data'] = NULL;
$arguments168['value'] = NULL;
$arguments168['property'] = NULL;
$arguments168['disabled'] = NULL;
$arguments168['maxlength'] = NULL;
$arguments168['readonly'] = NULL;
$arguments168['size'] = NULL;
$arguments168['errorClass'] = 'f3-form-error';
$arguments168['dir'] = NULL;
$arguments168['id'] = NULL;
$arguments168['lang'] = NULL;
$arguments168['style'] = NULL;
$arguments168['title'] = NULL;
$arguments168['accesskey'] = NULL;
$arguments168['tabindex'] = NULL;
$arguments168['onclick'] = NULL;
$renderChildrenClosure169 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper170 = $self->getViewHelper('$viewHelper170', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\PasswordViewHelper');
$viewHelper170->setArguments($arguments168);
$viewHelper170->setRenderingContext($renderingContext);
$viewHelper170->setRenderChildrenClosure($renderChildrenClosure169);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\PasswordViewHelper

$output164 .= $viewHelper170->initializeArgumentsAndRender();

$output164 .= '
                                ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments171 = array();
$arguments171['value'] = 'Submit';
$arguments171['class'] = 'form-button submit';
$arguments171['additionalAttributes'] = NULL;
$arguments171['data'] = NULL;
$arguments171['name'] = NULL;
$arguments171['property'] = NULL;
$arguments171['disabled'] = NULL;
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
$viewHelper173 = $self->getViewHelper('$viewHelper173', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper173->setArguments($arguments171);
$viewHelper173->setRenderingContext($renderingContext);
$viewHelper173->setRenderChildrenClosure($renderChildrenClosure172);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output164 .= $viewHelper173->initializeArgumentsAndRender();

$output164 .= '
                            ';
return $output164;
};
$viewHelper174 = $self->getViewHelper('$viewHelper174', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper174->setArguments($arguments162);
$viewHelper174->setRenderingContext($renderingContext);
$viewHelper174->setRenderChildrenClosure($renderChildrenClosure163);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output0 .= $viewHelper174->initializeArgumentsAndRender();

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
$arguments175 = array();
$arguments175['action'] = 'registerEmail';
$arguments175['objectName'] = 'userAccount';
$arguments175['controller'] = 'auth';
$arguments175['package'] = 'Project.Helpiez';
$arguments175['method'] = 'post';
$arguments175['additionalAttributes'] = NULL;
$arguments175['data'] = NULL;
$arguments175['arguments'] = array (
);
$arguments175['subpackage'] = NULL;
$arguments175['object'] = NULL;
$arguments175['section'] = '';
$arguments175['format'] = '';
$arguments175['additionalParams'] = array (
);
$arguments175['absolute'] = false;
$arguments175['addQueryString'] = false;
$arguments175['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments175['fieldNamePrefix'] = NULL;
$arguments175['actionUri'] = NULL;
$arguments175['useParentRequest'] = false;
$arguments175['enctype'] = NULL;
$arguments175['name'] = NULL;
$arguments175['onreset'] = NULL;
$arguments175['onsubmit'] = NULL;
$arguments175['class'] = NULL;
$arguments175['dir'] = NULL;
$arguments175['id'] = NULL;
$arguments175['lang'] = NULL;
$arguments175['style'] = NULL;
$arguments175['title'] = NULL;
$arguments175['accesskey'] = NULL;
$arguments175['tabindex'] = NULL;
$arguments175['onclick'] = NULL;
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
$output177 = '';

$output177 .= '
                            <label accesskey="U">Full name <span>*</span></label>
                            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments178 = array();
$arguments178['property'] = 'name';
$arguments178['placeholder'] = 'Name';
$arguments178['name'] = 'name';
$arguments178['class'] = 'form-control input-field';
$arguments178['additionalAttributes'] = NULL;
$arguments178['data'] = NULL;
$arguments178['required'] = false;
$arguments178['type'] = 'text';
$arguments178['value'] = NULL;
$arguments178['disabled'] = NULL;
$arguments178['maxlength'] = NULL;
$arguments178['readonly'] = NULL;
$arguments178['size'] = NULL;
$arguments178['autofocus'] = NULL;
$arguments178['errorClass'] = 'f3-form-error';
$arguments178['dir'] = NULL;
$arguments178['id'] = NULL;
$arguments178['lang'] = NULL;
$arguments178['style'] = NULL;
$arguments178['title'] = NULL;
$arguments178['accesskey'] = NULL;
$arguments178['tabindex'] = NULL;
$arguments178['onclick'] = NULL;
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper180 = $self->getViewHelper('$viewHelper180', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper180->setArguments($arguments178);
$viewHelper180->setRenderingContext($renderingContext);
$viewHelper180->setRenderChildrenClosure($renderChildrenClosure179);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output177 .= $viewHelper180->initializeArgumentsAndRender();

$output177 .= '
                            <label accesskey="U">Username <span>*</span></label>
                            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments181 = array();
$arguments181['property'] = 'username';
$arguments181['placeholder'] = 'username';
$arguments181['name'] = 'username';
$arguments181['class'] = 'form-control input-field';
$arguments181['additionalAttributes'] = NULL;
$arguments181['data'] = NULL;
$arguments181['required'] = false;
$arguments181['type'] = 'text';
$arguments181['value'] = NULL;
$arguments181['disabled'] = NULL;
$arguments181['maxlength'] = NULL;
$arguments181['readonly'] = NULL;
$arguments181['size'] = NULL;
$arguments181['autofocus'] = NULL;
$arguments181['errorClass'] = 'f3-form-error';
$arguments181['dir'] = NULL;
$arguments181['id'] = NULL;
$arguments181['lang'] = NULL;
$arguments181['style'] = NULL;
$arguments181['title'] = NULL;
$arguments181['accesskey'] = NULL;
$arguments181['tabindex'] = NULL;
$arguments181['onclick'] = NULL;
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper183 = $self->getViewHelper('$viewHelper183', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper183->setArguments($arguments181);
$viewHelper183->setRenderingContext($renderingContext);
$viewHelper183->setRenderChildrenClosure($renderChildrenClosure182);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output177 .= $viewHelper183->initializeArgumentsAndRender();

$output177 .= '
                            <label accesskey="U">Email <span>*</span></label>
                            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments184 = array();
$arguments184['property'] = 'email';
$arguments184['placeholder'] = 'Email';
$arguments184['name'] = 'email';
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

$output177 .= $viewHelper186->initializeArgumentsAndRender();

$output177 .= '
                            <label accesskey="U">Password <span>*</span></label>
                            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\PasswordViewHelper
$arguments187 = array();
$arguments187['property'] = 'password';
$arguments187['placeholder'] = 'Password';
$arguments187['class'] = 'form-control input-field';
$arguments187['additionalAttributes'] = NULL;
$arguments187['data'] = NULL;
$arguments187['name'] = NULL;
$arguments187['value'] = NULL;
$arguments187['disabled'] = NULL;
$arguments187['maxlength'] = NULL;
$arguments187['readonly'] = NULL;
$arguments187['size'] = NULL;
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
$viewHelper189 = $self->getViewHelper('$viewHelper189', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\PasswordViewHelper');
$viewHelper189->setArguments($arguments187);
$viewHelper189->setRenderingContext($renderingContext);
$viewHelper189->setRenderChildrenClosure($renderChildrenClosure188);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\PasswordViewHelper

$output177 .= $viewHelper189->initializeArgumentsAndRender();

$output177 .= '
                            ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments190 = array();
$arguments190['value'] = 'Submit';
$arguments190['class'] = 'form-button submit';
$arguments190['additionalAttributes'] = NULL;
$arguments190['data'] = NULL;
$arguments190['name'] = NULL;
$arguments190['property'] = NULL;
$arguments190['disabled'] = NULL;
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
$viewHelper192 = $self->getViewHelper('$viewHelper192', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper192->setArguments($arguments190);
$viewHelper192->setRenderingContext($renderingContext);
$viewHelper192->setRenderChildrenClosure($renderChildrenClosure191);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output177 .= $viewHelper192->initializeArgumentsAndRender();

$output177 .= '
                            ';
return $output177;
};
$viewHelper193 = $self->getViewHelper('$viewHelper193', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper193->setArguments($arguments175);
$viewHelper193->setRenderingContext($renderingContext);
$viewHelper193->setRenderChildrenClosure($renderChildrenClosure176);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output0 .= $viewHelper193->initializeArgumentsAndRender();

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
$arguments194 = array();
$arguments194['action'] = 'home';
$arguments194['class'] = 'btn btn-default';
$arguments194['controller'] = 'Backend\\Get';
$arguments194['additionalAttributes'] = NULL;
$arguments194['data'] = NULL;
$arguments194['arguments'] = array (
);
$arguments194['package'] = NULL;
$arguments194['subpackage'] = NULL;
$arguments194['section'] = '';
$arguments194['format'] = '';
$arguments194['additionalParams'] = array (
);
$arguments194['addQueryString'] = false;
$arguments194['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments194['useParentRequest'] = false;
$arguments194['absolute'] = true;
$arguments194['dir'] = NULL;
$arguments194['id'] = NULL;
$arguments194['lang'] = NULL;
$arguments194['style'] = NULL;
$arguments194['title'] = NULL;
$arguments194['accesskey'] = NULL;
$arguments194['tabindex'] = NULL;
$arguments194['onclick'] = NULL;
$arguments194['name'] = NULL;
$arguments194['rel'] = NULL;
$arguments194['rev'] = NULL;
$arguments194['target'] = NULL;
$renderChildrenClosure195 = function() use ($renderingContext, $self) {
return 'Organisation Login/Registration';
};
$viewHelper196 = $self->getViewHelper('$viewHelper196', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper196->setArguments($arguments194);
$viewHelper196->setRenderingContext($renderingContext);
$viewHelper196->setRenderChildrenClosure($renderChildrenClosure195);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper196->initializeArgumentsAndRender();

$output0 .= '
            </div>
    </div>
  </div>
</div>
    ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments197 = array();
$arguments197['section'] = 'Content';
$arguments197['partial'] = NULL;
$arguments197['arguments'] = array (
);
$arguments197['optional'] = false;
$renderChildrenClosure198 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper199 = $self->getViewHelper('$viewHelper199', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper199->setArguments($arguments197);
$viewHelper199->setRenderingContext($renderingContext);
$viewHelper199->setRenderChildrenClosure($renderChildrenClosure198);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output0 .= $viewHelper199->initializeArgumentsAndRender();

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
$arguments200 = array();
$arguments200['path'] = 'Frontend/images/flickr1.jpg';
$arguments200['package'] = NULL;
$arguments200['resource'] = NULL;
$arguments200['localize'] = true;
$renderChildrenClosure201 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper202 = $self->getViewHelper('$viewHelper202', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper202->setArguments($arguments200);
$viewHelper202->setRenderingContext($renderingContext);
$viewHelper202->setRenderChildrenClosure($renderChildrenClosure201);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper202->initializeArgumentsAndRender();

$output0 .= '" alt="" /></a>
                    <a href="#" title=""><img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments203 = array();
$arguments203['path'] = 'Frontend/images/flickr2.jpg';
$arguments203['package'] = NULL;
$arguments203['resource'] = NULL;
$arguments203['localize'] = true;
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper205 = $self->getViewHelper('$viewHelper205', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper205->setArguments($arguments203);
$viewHelper205->setRenderingContext($renderingContext);
$viewHelper205->setRenderChildrenClosure($renderChildrenClosure204);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output0 .= $viewHelper205->initializeArgumentsAndRender();

$output0 .= '" alt="" /></a>
                    <a href="#" title=""><img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments206 = array();
$arguments206['path'] = 'Frontend/images/flickr3.jpg';
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
$arguments209['path'] = 'Frontend/images/flickr4.jpg';
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
$arguments212['path'] = 'Frontend/images/flickr5.jpg';
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
$arguments215['path'] = 'Frontend/images/flickr6.jpg';
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
$arguments218['path'] = 'Frontend/images/flickr7.jpg';
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
$arguments221['path'] = 'Frontend/images/flickr8.jpg';
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
$arguments224['path'] = 'Frontend/images/flickr9.jpg';
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
$arguments227 = array();
$arguments227['path'] = 'Frontend/images/rss.jpg';
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

$output0 .= '" alt="" /></a></li>
                    <li><a href="#" title=""><img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments230 = array();
$arguments230['path'] = 'Frontend/images/facebook.jpg';
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

$output0 .= '" alt="" /></a></li>
                    <li><a href="#" title=""><img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments233 = array();
$arguments233['path'] = 'Frontend/images/gplus.jpg';
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
$arguments236['path'] = 'Frontend/images/linked-in.jpg';
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
$arguments239['path'] = 'Frontend/images/pinterest.jpg';
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
#0             94237     