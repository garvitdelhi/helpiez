<?php class FluidCache_Project_Helpiez_Frontend_Get_action_search_10f39b70932e8d3aee383f7d64a37ad401c158a0 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new \TYPO3\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return 'Frontend';
}
public function hasLayout() {
return TRUE;
}

/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
<div class="top-image">
    <img src="http://placehold.it/1366x286" alt="" />
</div><!-- Page Top Image -->
<section class="block">
<div class="container">
<div class="page-title">
    <h1>Search  <span>Results</span></h1>
</div><!-- Page Title -->
<div class="row">
<div class="left-content col-md-8">
    <ul class="search-tabs nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#all">All</a></li>
        <li class=""><a data-toggle="tab" href="#event">Event</a></li>
        <li class=""><a data-toggle="tab" href="#blog">Internship Camp</a></li>
        <li class=""><a data-toggle="tab" href="#gallery">Volunteering</a></li>
    </ul><!-- Selectors -->
    <div class="tab-content">
        <div id="all" class="tab-pane fade active in">
            <div class="search-result" >
                <h3>Search Result Found For: <span>"';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1 = array();
$arguments1['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'key', $renderingContext);
$arguments1['keepQuotes'] = false;
$arguments1['encoding'] = 'UTF-8';
$arguments1['doubleEncode'] = true;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$value3 = ($arguments1['value'] !== NULL ? $arguments1['value'] : $renderChildrenClosure2());

$output0 .= !is_string($value3) && !(is_object($value3) && method_exists($value3, '__toString')) ? $value3 : htmlspecialchars($value3, ($arguments1['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments1['encoding'], $arguments1['doubleEncode']);

$output0 .= '"</span></h3>
                ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments4 = array();
$arguments4['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'searchResult', $renderingContext);
$arguments4['as'] = 'event';
$arguments4['key'] = '';
$arguments4['reverse'] = false;
$arguments4['iteration'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
                    <div class="row">
                        <div class="col-md-4">
                            <a  class="search-image" href="#" title="">
                                <img src="http://placehold.it/270x199" alt="" />
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="search-detail">
                                <h4><a href="/ngo/';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments7 = array();
$arguments7['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event.name', $renderingContext);
$arguments7['keepQuotes'] = false;
$arguments7['encoding'] = 'UTF-8';
$arguments7['doubleEncode'] = true;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$value9 = ($arguments7['value'] !== NULL ? $arguments7['value'] : $renderChildrenClosure8());

$output6 .= !is_string($value9) && !(is_object($value9) && method_exists($value9, '__toString')) ? $value9 : htmlspecialchars($value9, ($arguments7['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments7['encoding'], $arguments7['doubleEncode']);

$output6 .= '" title="">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments10 = array();
$arguments10['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event.name', $renderingContext);
$arguments10['keepQuotes'] = false;
$arguments10['encoding'] = 'UTF-8';
$arguments10['doubleEncode'] = true;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$value12 = ($arguments10['value'] !== NULL ? $arguments10['value'] : $renderChildrenClosure11());

$output6 .= !is_string($value12) && !(is_object($value12) && method_exists($value12, '__toString')) ? $value12 : htmlspecialchars($value12, ($arguments10['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments10['encoding'], $arguments10['doubleEncode']);

$output6 .= '</a></h4>
                                <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments13 = array();
$arguments13['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event.description', $renderingContext);
$arguments13['keepQuotes'] = false;
$arguments13['encoding'] = 'UTF-8';
$arguments13['doubleEncode'] = true;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$value15 = ($arguments13['value'] !== NULL ? $arguments13['value'] : $renderChildrenClosure14());

$output6 .= !is_string($value15) && !(is_object($value15) && method_exists($value15, '__toString')) ? $value15 : htmlspecialchars($value15, ($arguments13['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments13['encoding'], $arguments13['doubleEncode']);

$output6 .= '</p>
                            </div>
                        </div>
                    </div>
                ';
return $output6;
};

$output0 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
            </div>
        </div><!-- All -->
        <div id="gallery" class="tab-pane fade in">
        </div><!-- Gallery -->
    </div>
</div>

<div class="sidebar col-md-4 pull-right">
<div class="sidebar-widget">
    <div class="sidebar-search">
        <input class="search" type="text" placeholder="Enter Search Item" />
        <input class="search-button" type="submit" value="" />
    </div>
</div><!-- Sidebar Search -->
<div class="sidebar-widget">
    <div class="sidebar-title">
        <h4>Opportunity<span>Search</span></h4>
    </div>
    <div class="popular-posts">

        <div class="theme-tabs">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a data-toggle="tab" href="#tab1">Looking For:</a></li>
                <li class=""><a data-toggle="tab" href="#tab2">Cause</a></li>
                <li class=""><a data-toggle="tab" href="#tab3">Location:</a></li>


            </ul>
            <div class="tab-content" id="myTabContent">
                <div id="tab1" class="tab-pane fade in active">
                    <div class="aligned left">

                        <ul class="filters">
                            <li>
                                <div class="row">
                                    <div class="col-md-2 col-md-offset-2">
                                        <input type="checkbox" name="" value="1"/>
                                    </div>
                                    <div class="col-md-6">
                                        Volunteering
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-2 col-md-offset-2">
                                        <input type="checkbox" name="" value="1"/>
                                    </div>
                                    <div class="col-md-6">
                                        Volunteering
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-2 col-md-offset-2">
                                        <input type="checkbox" name="" value="1"/>
                                    </div>
                                    <div class="col-md-6">
                                        Volunteering
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="tab2" class="tab-pane fade">
                    <div class="aligened-left"
                            >					  <ul class="filters">
                        <li>
                            <div class="row">
                                <div class="col-md-2 col-md-offset-2">
                                    <input type="checkbox" name="" value="1"/>
                                </div>
                                <div class="col-md-6">
                                    Volunteering
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-2 col-md-offset-2">
                                    <input type="checkbox" name="" value="1"/>
                                </div>
                                <div class="col-md-6">
                                    Volunteering
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-2 col-md-offset-2">
                                    <input type="checkbox" name="" value="1"/>
                                </div>
                                <div class="col-md-6">
                                    Volunteering
                                </div>
                            </div>
                        </li>
                    </ul>
                    </div>
                </div>
                <div id="tab3" class="tab-pane fade">
                    <ul class="filters">
                        <li>
                            <div class="row">
                                <div class="col-md-2 col-md-offset-2">
                                    <input type="checkbox" name="" value="1"/>
                                </div>
                                <div class="col-md-6">
                                    Volunteering
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-2 col-md-offset-2">
                                    <input type="checkbox" name="" value="1"/>
                                </div>
                                <div class="col-md-6">
                                    Volunteering
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-2 col-md-offset-2">
                                    <input type="checkbox" name="" value="1"/>
                                </div>
                                <div class="col-md-6">
                                    Volunteering
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>



</div>
<div class="sidebar-widget">
    <div class="sidebar-title">
        <h4>Organisation<span>Search</span></h4>
    </div>
    <div class="popular-posts">

        <div class="theme-tabs">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a data-toggle="tab" href="#tab4">Tags</a></li>
                <li class=""><a data-toggle="tab" href="#tab5">Cause</a></li>
                <li class=""><a data-toggle="tab" href="#tab6">Location:</a></li>


            </ul>
            <div class="tab-content" id="myTabContent">
                <div id="tab4" class="tab-pane fade in active">
                    <div class="aligned left">

                        <div class="cloud-tags">
                            <a href="#" title="">Uncategorized</a>
                            <a href="#" title="">Susipit</a>
                            <a href="#" title="">Diam</a>
                            <a href="#" title="">Diam</a>
                            <a href="#" title="">Susipit</a>
                            <a href="#" title="">Diam</a>
                            <a href="#" title="">Susipit</a>
                            <a href="#" title="">Uncategorized</a>
                            <a href="#" title="">Susipit</a>
                        </div>
                    </div>
                </div>
                <div id="tab5" class="tab-pane fade">
                    <div class="aligned-left">
                        <ul class="filters">
                            <li>
                                <div class="row">
                                    <div class="col-md-2 col-md-offset-2">
                                        <input type="checkbox" name="" value="1"/>
                                    </div>
                                    <div class="col-md-6">
                                        Volunteering
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-2 col-md-offset-2">
                                        <input type="checkbox" name="" value="1"/>
                                    </div>
                                    <div class="col-md-6">
                                        Volunteering
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-2 col-md-offset-2">
                                        <input type="checkbox" name="" value="1"/>
                                    </div>
                                    <div class="col-md-6">
                                        Volunteering
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="tab6" class="tab-pane fade">
                    <div class="aligned-left">
                        <ul class="filters">
                            <li>
                                <div class="row">
                                    <div class="col-md-2 col-md-offset-2">
                                        <input type="checkbox" name="" value="1"/>
                                    </div>
                                    <div class="col-md-6">
                                        Volunteering
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-2 col-md-offset-2">
                                        <input type="checkbox" name="" value="1"/>
                                    </div>
                                    <div class="col-md-6">
                                        Volunteering
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-2 col-md-offset-2">
                                        <input type="checkbox" name="" value="1"/>
                                    </div>
                                    <div class="col-md-6">
                                        Volunteering
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>



</div>
</div>
</div>


</section>
</div>
<script src="js/queue.js"></script>
<script type="text/javascript">
    filter_click_queue = {};
    //Queue is the object that stores all the queue requests and pushes them at once to the server to execute the request and then passes the control to the populating class that displays all the search the search results obtained

    $("checkbox-filter").on("click",function()
    ';

$output0 .= ')
</script>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output16 = '';

$output16 .= '<html>
';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments17 = array();
$arguments17['name'] = 'Frontend';
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper19 = $self->getViewHelper('$viewHelper19', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper19->setArguments($arguments17);
$viewHelper19->setRenderingContext($renderingContext);
$viewHelper19->setRenderChildrenClosure($renderChildrenClosure18);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper

$output16 .= $viewHelper19->initializeArgumentsAndRender();

$output16 .= '
';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments20 = array();
$arguments20['name'] = 'Content';
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
<div class="top-image">
    <img src="http://placehold.it/1366x286" alt="" />
</div><!-- Page Top Image -->
<section class="block">
<div class="container">
<div class="page-title">
    <h1>Search  <span>Results</span></h1>
</div><!-- Page Title -->
<div class="row">
<div class="left-content col-md-8">
    <ul class="search-tabs nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#all">All</a></li>
        <li class=""><a data-toggle="tab" href="#event">Event</a></li>
        <li class=""><a data-toggle="tab" href="#blog">Internship Camp</a></li>
        <li class=""><a data-toggle="tab" href="#gallery">Volunteering</a></li>
    </ul><!-- Selectors -->
    <div class="tab-content">
        <div id="all" class="tab-pane fade active in">
            <div class="search-result" >
                <h3>Search Result Found For: <span>"';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments23 = array();
$arguments23['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'key', $renderingContext);
$arguments23['keepQuotes'] = false;
$arguments23['encoding'] = 'UTF-8';
$arguments23['doubleEncode'] = true;
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$value25 = ($arguments23['value'] !== NULL ? $arguments23['value'] : $renderChildrenClosure24());

$output22 .= !is_string($value25) && !(is_object($value25) && method_exists($value25, '__toString')) ? $value25 : htmlspecialchars($value25, ($arguments23['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments23['encoding'], $arguments23['doubleEncode']);

$output22 .= '"</span></h3>
                ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments26 = array();
$arguments26['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'searchResult', $renderingContext);
$arguments26['as'] = 'event';
$arguments26['key'] = '';
$arguments26['reverse'] = false;
$arguments26['iteration'] = NULL;
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
                    <div class="row">
                        <div class="col-md-4">
                            <a  class="search-image" href="#" title="">
                                <img src="http://placehold.it/270x199" alt="" />
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="search-detail">
                                <h4><a href="/ngo/';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments29 = array();
$arguments29['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event.name', $renderingContext);
$arguments29['keepQuotes'] = false;
$arguments29['encoding'] = 'UTF-8';
$arguments29['doubleEncode'] = true;
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$value31 = ($arguments29['value'] !== NULL ? $arguments29['value'] : $renderChildrenClosure30());

$output28 .= !is_string($value31) && !(is_object($value31) && method_exists($value31, '__toString')) ? $value31 : htmlspecialchars($value31, ($arguments29['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments29['encoding'], $arguments29['doubleEncode']);

$output28 .= '" title="">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments32 = array();
$arguments32['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event.name', $renderingContext);
$arguments32['keepQuotes'] = false;
$arguments32['encoding'] = 'UTF-8';
$arguments32['doubleEncode'] = true;
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$value34 = ($arguments32['value'] !== NULL ? $arguments32['value'] : $renderChildrenClosure33());

$output28 .= !is_string($value34) && !(is_object($value34) && method_exists($value34, '__toString')) ? $value34 : htmlspecialchars($value34, ($arguments32['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments32['encoding'], $arguments32['doubleEncode']);

$output28 .= '</a></h4>
                                <p>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments35 = array();
$arguments35['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'event.description', $renderingContext);
$arguments35['keepQuotes'] = false;
$arguments35['encoding'] = 'UTF-8';
$arguments35['doubleEncode'] = true;
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$value37 = ($arguments35['value'] !== NULL ? $arguments35['value'] : $renderChildrenClosure36());

$output28 .= !is_string($value37) && !(is_object($value37) && method_exists($value37, '__toString')) ? $value37 : htmlspecialchars($value37, ($arguments35['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments35['encoding'], $arguments35['doubleEncode']);

$output28 .= '</p>
                            </div>
                        </div>
                    </div>
                ';
return $output28;
};

$output22 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output22 .= '
            </div>
        </div><!-- All -->
        <div id="gallery" class="tab-pane fade in">
        </div><!-- Gallery -->
    </div>
</div>

<div class="sidebar col-md-4 pull-right">
<div class="sidebar-widget">
    <div class="sidebar-search">
        <input class="search" type="text" placeholder="Enter Search Item" />
        <input class="search-button" type="submit" value="" />
    </div>
</div><!-- Sidebar Search -->
<div class="sidebar-widget">
    <div class="sidebar-title">
        <h4>Opportunity<span>Search</span></h4>
    </div>
    <div class="popular-posts">

        <div class="theme-tabs">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a data-toggle="tab" href="#tab1">Looking For:</a></li>
                <li class=""><a data-toggle="tab" href="#tab2">Cause</a></li>
                <li class=""><a data-toggle="tab" href="#tab3">Location:</a></li>


            </ul>
            <div class="tab-content" id="myTabContent">
                <div id="tab1" class="tab-pane fade in active">
                    <div class="aligned left">

                        <ul class="filters">
                            <li>
                                <div class="row">
                                    <div class="col-md-2 col-md-offset-2">
                                        <input type="checkbox" name="" value="1"/>
                                    </div>
                                    <div class="col-md-6">
                                        Volunteering
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-2 col-md-offset-2">
                                        <input type="checkbox" name="" value="1"/>
                                    </div>
                                    <div class="col-md-6">
                                        Volunteering
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-2 col-md-offset-2">
                                        <input type="checkbox" name="" value="1"/>
                                    </div>
                                    <div class="col-md-6">
                                        Volunteering
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="tab2" class="tab-pane fade">
                    <div class="aligened-left"
                            >					  <ul class="filters">
                        <li>
                            <div class="row">
                                <div class="col-md-2 col-md-offset-2">
                                    <input type="checkbox" name="" value="1"/>
                                </div>
                                <div class="col-md-6">
                                    Volunteering
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-2 col-md-offset-2">
                                    <input type="checkbox" name="" value="1"/>
                                </div>
                                <div class="col-md-6">
                                    Volunteering
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-2 col-md-offset-2">
                                    <input type="checkbox" name="" value="1"/>
                                </div>
                                <div class="col-md-6">
                                    Volunteering
                                </div>
                            </div>
                        </li>
                    </ul>
                    </div>
                </div>
                <div id="tab3" class="tab-pane fade">
                    <ul class="filters">
                        <li>
                            <div class="row">
                                <div class="col-md-2 col-md-offset-2">
                                    <input type="checkbox" name="" value="1"/>
                                </div>
                                <div class="col-md-6">
                                    Volunteering
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-2 col-md-offset-2">
                                    <input type="checkbox" name="" value="1"/>
                                </div>
                                <div class="col-md-6">
                                    Volunteering
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-2 col-md-offset-2">
                                    <input type="checkbox" name="" value="1"/>
                                </div>
                                <div class="col-md-6">
                                    Volunteering
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>



</div>
<div class="sidebar-widget">
    <div class="sidebar-title">
        <h4>Organisation<span>Search</span></h4>
    </div>
    <div class="popular-posts">

        <div class="theme-tabs">
            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a data-toggle="tab" href="#tab4">Tags</a></li>
                <li class=""><a data-toggle="tab" href="#tab5">Cause</a></li>
                <li class=""><a data-toggle="tab" href="#tab6">Location:</a></li>


            </ul>
            <div class="tab-content" id="myTabContent">
                <div id="tab4" class="tab-pane fade in active">
                    <div class="aligned left">

                        <div class="cloud-tags">
                            <a href="#" title="">Uncategorized</a>
                            <a href="#" title="">Susipit</a>
                            <a href="#" title="">Diam</a>
                            <a href="#" title="">Diam</a>
                            <a href="#" title="">Susipit</a>
                            <a href="#" title="">Diam</a>
                            <a href="#" title="">Susipit</a>
                            <a href="#" title="">Uncategorized</a>
                            <a href="#" title="">Susipit</a>
                        </div>
                    </div>
                </div>
                <div id="tab5" class="tab-pane fade">
                    <div class="aligned-left">
                        <ul class="filters">
                            <li>
                                <div class="row">
                                    <div class="col-md-2 col-md-offset-2">
                                        <input type="checkbox" name="" value="1"/>
                                    </div>
                                    <div class="col-md-6">
                                        Volunteering
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-2 col-md-offset-2">
                                        <input type="checkbox" name="" value="1"/>
                                    </div>
                                    <div class="col-md-6">
                                        Volunteering
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-2 col-md-offset-2">
                                        <input type="checkbox" name="" value="1"/>
                                    </div>
                                    <div class="col-md-6">
                                        Volunteering
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="tab6" class="tab-pane fade">
                    <div class="aligned-left">
                        <ul class="filters">
                            <li>
                                <div class="row">
                                    <div class="col-md-2 col-md-offset-2">
                                        <input type="checkbox" name="" value="1"/>
                                    </div>
                                    <div class="col-md-6">
                                        Volunteering
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-2 col-md-offset-2">
                                        <input type="checkbox" name="" value="1"/>
                                    </div>
                                    <div class="col-md-6">
                                        Volunteering
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-2 col-md-offset-2">
                                        <input type="checkbox" name="" value="1"/>
                                    </div>
                                    <div class="col-md-6">
                                        Volunteering
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>



</div>
</div>
</div>


</section>
</div>
<script src="js/queue.js"></script>
<script type="text/javascript">
    filter_click_queue = {};
    //Queue is the object that stores all the queue requests and pushes them at once to the server to execute the request and then passes the control to the populating class that displays all the search the search results obtained

    $("checkbox-filter").on("click",function()
    ';

$output22 .= ')
</script>
';
return $output22;
};

$output16 .= '';

$output16 .= '
<html>';

return $output16;
}


}
#0             35806     