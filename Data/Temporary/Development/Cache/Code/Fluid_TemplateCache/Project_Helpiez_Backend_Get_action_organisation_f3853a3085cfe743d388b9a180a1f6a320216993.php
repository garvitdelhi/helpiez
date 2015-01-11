<?php class FluidCache_Project_Helpiez_Backend_Get_action_organisation_f3853a3085cfe743d388b9a180a1f6a320216993 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new \TYPO3\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return 'Backend';
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
<div class="row">
	<div class="col-md-8 col-offset-2">
		<div class="panel panel-default">
			<div class="panel-head">
                Edit Ngo Profile
            </div>
			<div class="panel-body">
                ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments1 = array();
$arguments1['objectName'] = 'organisation';
$arguments1['object'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'organisation', $renderingContext);
$arguments1['controller'] = 'Backend\\Post';
$arguments1['action'] = 'updateOrganisation';
$arguments1['package'] = 'Project.Helpiez';
$arguments1['method'] = 'post';
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['subpackage'] = NULL;
$arguments1['section'] = '';
$arguments1['format'] = '';
$arguments1['additionalParams'] = array (
);
$arguments1['absolute'] = false;
$arguments1['addQueryString'] = false;
$arguments1['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1['fieldNamePrefix'] = NULL;
$arguments1['actionUri'] = NULL;
$arguments1['useParentRequest'] = false;
$arguments1['enctype'] = NULL;
$arguments1['name'] = NULL;
$arguments1['onreset'] = NULL;
$arguments1['onsubmit'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
                   <div class="form-group">
                        <label>Address</label>
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments4 = array();
$arguments4['class'] = 'form-control';
$arguments4['property'] = 'address';
$arguments4['name'] = 'address';
$arguments4['placeholder'] = 'Address';
// Rendering Boolean node
$arguments4['required'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['type'] = 'text';
$arguments4['value'] = NULL;
$arguments4['disabled'] = NULL;
$arguments4['maxlength'] = NULL;
$arguments4['readonly'] = NULL;
$arguments4['size'] = NULL;
$arguments4['autofocus'] = NULL;
$arguments4['errorClass'] = 'f3-form-error';
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper6->setArguments($arguments4);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper6->initializeArgumentsAndRender();

$output3 .= '
                    </div>
                    <div class="form-group">
                        <label>Region</label>
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments7 = array();
$arguments7['class'] = 'form-control';
$arguments7['property'] = 'Region';
$arguments7['name'] = 'Region';
$arguments7['placeholder'] = 'Region';
// Rendering Boolean node
$arguments7['required'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['type'] = 'text';
$arguments7['value'] = NULL;
$arguments7['disabled'] = NULL;
$arguments7['maxlength'] = NULL;
$arguments7['readonly'] = NULL;
$arguments7['size'] = NULL;
$arguments7['autofocus'] = NULL;
$arguments7['errorClass'] = 'f3-form-error';
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper9->setArguments($arguments7);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper9->initializeArgumentsAndRender();

$output3 .= '
                    </div>
                    <div class="form-group">
                        <label>Contact Number</label>
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments10 = array();
$arguments10['class'] = 'form-control';
$arguments10['property'] = 'number';
$arguments10['placeholder'] = 'Number';
// Rendering Boolean node
$arguments10['required'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['type'] = 'text';
$arguments10['name'] = NULL;
$arguments10['value'] = NULL;
$arguments10['disabled'] = NULL;
$arguments10['maxlength'] = NULL;
$arguments10['readonly'] = NULL;
$arguments10['size'] = NULL;
$arguments10['autofocus'] = NULL;
$arguments10['errorClass'] = 'f3-form-error';
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper12 = $self->getViewHelper('$viewHelper12', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper12->setArguments($arguments10);
$viewHelper12->setRenderingContext($renderingContext);
$viewHelper12->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper12->initializeArgumentsAndRender();

$output3 .= '
                    </div>
                    <div class="form-group">
                        <label>Website</label>
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments13 = array();
$arguments13['class'] = 'form-control';
$arguments13['property'] = 'website';
$arguments13['placeholder'] = 'Website';
$arguments13['additionalAttributes'] = NULL;
$arguments13['data'] = NULL;
$arguments13['required'] = false;
$arguments13['type'] = 'text';
$arguments13['name'] = NULL;
$arguments13['value'] = NULL;
$arguments13['disabled'] = NULL;
$arguments13['maxlength'] = NULL;
$arguments13['readonly'] = NULL;
$arguments13['size'] = NULL;
$arguments13['autofocus'] = NULL;
$arguments13['errorClass'] = 'f3-form-error';
$arguments13['dir'] = NULL;
$arguments13['id'] = NULL;
$arguments13['lang'] = NULL;
$arguments13['style'] = NULL;
$arguments13['title'] = NULL;
$arguments13['accesskey'] = NULL;
$arguments13['tabindex'] = NULL;
$arguments13['onclick'] = NULL;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper15->setArguments($arguments13);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure14);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper15->initializeArgumentsAndRender();

$output3 .= '
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments16 = array();
$arguments16['class'] = 'form-control';
$arguments16['property'] = 'email';
$arguments16['placeholder'] = 'Email';
// Rendering Boolean node
$arguments16['required'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments16['additionalAttributes'] = NULL;
$arguments16['data'] = NULL;
$arguments16['type'] = 'text';
$arguments16['name'] = NULL;
$arguments16['value'] = NULL;
$arguments16['disabled'] = NULL;
$arguments16['maxlength'] = NULL;
$arguments16['readonly'] = NULL;
$arguments16['size'] = NULL;
$arguments16['autofocus'] = NULL;
$arguments16['errorClass'] = 'f3-form-error';
$arguments16['dir'] = NULL;
$arguments16['id'] = NULL;
$arguments16['lang'] = NULL;
$arguments16['style'] = NULL;
$arguments16['title'] = NULL;
$arguments16['accesskey'] = NULL;
$arguments16['tabindex'] = NULL;
$arguments16['onclick'] = NULL;
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper18 = $self->getViewHelper('$viewHelper18', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper18->setArguments($arguments16);
$viewHelper18->setRenderingContext($renderingContext);
$viewHelper18->setRenderChildrenClosure($renderChildrenClosure17);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper18->initializeArgumentsAndRender();

$output3 .= '
                    </div>
                    <div class="form-group">
                        <label>Youtube Link</label>
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments19 = array();
$arguments19['class'] = 'form-control';
$arguments19['property'] = 'youtube';
$arguments19['placeholder'] = 'Youtube';
$arguments19['additionalAttributes'] = NULL;
$arguments19['data'] = NULL;
$arguments19['required'] = false;
$arguments19['type'] = 'text';
$arguments19['name'] = NULL;
$arguments19['value'] = NULL;
$arguments19['disabled'] = NULL;
$arguments19['maxlength'] = NULL;
$arguments19['readonly'] = NULL;
$arguments19['size'] = NULL;
$arguments19['autofocus'] = NULL;
$arguments19['errorClass'] = 'f3-form-error';
$arguments19['dir'] = NULL;
$arguments19['id'] = NULL;
$arguments19['lang'] = NULL;
$arguments19['style'] = NULL;
$arguments19['title'] = NULL;
$arguments19['accesskey'] = NULL;
$arguments19['tabindex'] = NULL;
$arguments19['onclick'] = NULL;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper21 = $self->getViewHelper('$viewHelper21', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper21->setArguments($arguments19);
$viewHelper21->setRenderingContext($renderingContext);
$viewHelper21->setRenderChildrenClosure($renderChildrenClosure20);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper21->initializeArgumentsAndRender();

$output3 .= '
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments22 = array();
$arguments22['class'] = 'form-control';
$arguments22['property'] = 'description';
$arguments22['placeholder'] = 'Description';
$arguments22['additionalAttributes'] = NULL;
$arguments22['data'] = NULL;
$arguments22['required'] = false;
$arguments22['type'] = 'text';
$arguments22['name'] = NULL;
$arguments22['value'] = NULL;
$arguments22['disabled'] = NULL;
$arguments22['maxlength'] = NULL;
$arguments22['readonly'] = NULL;
$arguments22['size'] = NULL;
$arguments22['autofocus'] = NULL;
$arguments22['errorClass'] = 'f3-form-error';
$arguments22['dir'] = NULL;
$arguments22['id'] = NULL;
$arguments22['lang'] = NULL;
$arguments22['style'] = NULL;
$arguments22['title'] = NULL;
$arguments22['accesskey'] = NULL;
$arguments22['tabindex'] = NULL;
$arguments22['onclick'] = NULL;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper24 = $self->getViewHelper('$viewHelper24', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper24->setArguments($arguments22);
$viewHelper24->setRenderingContext($renderingContext);
$viewHelper24->setRenderChildrenClosure($renderChildrenClosure23);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper24->initializeArgumentsAndRender();

$output3 .= '
                    </div>
                    <div class="form-group">
                        <label>Fb Link</label>
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments25 = array();
$arguments25['class'] = 'form-control';
$arguments25['property'] = 'fb';
$arguments25['placeholder'] = 'Fb Link';
$arguments25['additionalAttributes'] = NULL;
$arguments25['data'] = NULL;
$arguments25['required'] = false;
$arguments25['type'] = 'text';
$arguments25['name'] = NULL;
$arguments25['value'] = NULL;
$arguments25['disabled'] = NULL;
$arguments25['maxlength'] = NULL;
$arguments25['readonly'] = NULL;
$arguments25['size'] = NULL;
$arguments25['autofocus'] = NULL;
$arguments25['errorClass'] = 'f3-form-error';
$arguments25['dir'] = NULL;
$arguments25['id'] = NULL;
$arguments25['lang'] = NULL;
$arguments25['style'] = NULL;
$arguments25['title'] = NULL;
$arguments25['accesskey'] = NULL;
$arguments25['tabindex'] = NULL;
$arguments25['onclick'] = NULL;
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper27 = $self->getViewHelper('$viewHelper27', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper27->setArguments($arguments25);
$viewHelper27->setRenderingContext($renderingContext);
$viewHelper27->setRenderChildrenClosure($renderChildrenClosure26);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper27->initializeArgumentsAndRender();

$output3 .= '
                    </div>
                    <div class="form-group">
                        <label>Blog Url</label>
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments28 = array();
$arguments28['class'] = 'form-control';
$arguments28['property'] = 'blogurl';
$arguments28['placeholder'] = 'Blog Url';
$arguments28['additionalAttributes'] = NULL;
$arguments28['data'] = NULL;
$arguments28['required'] = false;
$arguments28['type'] = 'text';
$arguments28['name'] = NULL;
$arguments28['value'] = NULL;
$arguments28['disabled'] = NULL;
$arguments28['maxlength'] = NULL;
$arguments28['readonly'] = NULL;
$arguments28['size'] = NULL;
$arguments28['autofocus'] = NULL;
$arguments28['errorClass'] = 'f3-form-error';
$arguments28['dir'] = NULL;
$arguments28['id'] = NULL;
$arguments28['lang'] = NULL;
$arguments28['style'] = NULL;
$arguments28['title'] = NULL;
$arguments28['accesskey'] = NULL;
$arguments28['tabindex'] = NULL;
$arguments28['onclick'] = NULL;
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper30 = $self->getViewHelper('$viewHelper30', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper30->setArguments($arguments28);
$viewHelper30->setRenderingContext($renderingContext);
$viewHelper30->setRenderChildrenClosure($renderChildrenClosure29);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper30->initializeArgumentsAndRender();

$output3 .= '
                    </div>
                    <div class="form-group">
                        <label>Twitter Link</label>
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments31 = array();
$arguments31['class'] = 'form-control';
$arguments31['property'] = 'twitter';
$arguments31['placeholder'] = 'Twitter Link';
$arguments31['additionalAttributes'] = NULL;
$arguments31['data'] = NULL;
$arguments31['required'] = false;
$arguments31['type'] = 'text';
$arguments31['name'] = NULL;
$arguments31['value'] = NULL;
$arguments31['disabled'] = NULL;
$arguments31['maxlength'] = NULL;
$arguments31['readonly'] = NULL;
$arguments31['size'] = NULL;
$arguments31['autofocus'] = NULL;
$arguments31['errorClass'] = 'f3-form-error';
$arguments31['dir'] = NULL;
$arguments31['id'] = NULL;
$arguments31['lang'] = NULL;
$arguments31['style'] = NULL;
$arguments31['title'] = NULL;
$arguments31['accesskey'] = NULL;
$arguments31['tabindex'] = NULL;
$arguments31['onclick'] = NULL;
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper33 = $self->getViewHelper('$viewHelper33', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper33->setArguments($arguments31);
$viewHelper33->setRenderingContext($renderingContext);
$viewHelper33->setRenderChildrenClosure($renderChildrenClosure32);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper33->initializeArgumentsAndRender();

$output3 .= '
                    </div>
                    <div class="form-group">
                        <label>Cause</label>
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments34 = array();
$arguments34['class'] = 'form-control';
$arguments34['property'] = 'cause';
$arguments34['placeholder'] = 'Cause';
$arguments34['additionalAttributes'] = NULL;
$arguments34['data'] = NULL;
$arguments34['required'] = false;
$arguments34['type'] = 'text';
$arguments34['name'] = NULL;
$arguments34['value'] = NULL;
$arguments34['disabled'] = NULL;
$arguments34['maxlength'] = NULL;
$arguments34['readonly'] = NULL;
$arguments34['size'] = NULL;
$arguments34['autofocus'] = NULL;
$arguments34['errorClass'] = 'f3-form-error';
$arguments34['dir'] = NULL;
$arguments34['id'] = NULL;
$arguments34['lang'] = NULL;
$arguments34['style'] = NULL;
$arguments34['title'] = NULL;
$arguments34['accesskey'] = NULL;
$arguments34['tabindex'] = NULL;
$arguments34['onclick'] = NULL;
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper36 = $self->getViewHelper('$viewHelper36', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper36->setArguments($arguments34);
$viewHelper36->setRenderingContext($renderingContext);
$viewHelper36->setRenderChildrenClosure($renderChildrenClosure35);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper36->initializeArgumentsAndRender();

$output3 .= '
                    </div>
                    <div class="form-group">
                        <label>Beneficiary</label>
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments37 = array();
$arguments37['class'] = 'form-control';
$arguments37['property'] = 'beneficiary';
$arguments37['placeholder'] = 'Beneficiary';
$arguments37['additionalAttributes'] = NULL;
$arguments37['data'] = NULL;
$arguments37['required'] = false;
$arguments37['type'] = 'text';
$arguments37['name'] = NULL;
$arguments37['value'] = NULL;
$arguments37['disabled'] = NULL;
$arguments37['maxlength'] = NULL;
$arguments37['readonly'] = NULL;
$arguments37['size'] = NULL;
$arguments37['autofocus'] = NULL;
$arguments37['errorClass'] = 'f3-form-error';
$arguments37['dir'] = NULL;
$arguments37['id'] = NULL;
$arguments37['lang'] = NULL;
$arguments37['style'] = NULL;
$arguments37['title'] = NULL;
$arguments37['accesskey'] = NULL;
$arguments37['tabindex'] = NULL;
$arguments37['onclick'] = NULL;
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper39 = $self->getViewHelper('$viewHelper39', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper39->setArguments($arguments37);
$viewHelper39->setRenderingContext($renderingContext);
$viewHelper39->setRenderChildrenClosure($renderChildrenClosure38);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper39->initializeArgumentsAndRender();

$output3 .= '
                    </div>
                    <div class="form-group">
                        <label>Quote</label>
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments40 = array();
$arguments40['class'] = 'form-control';
$arguments40['property'] = 'quote';
$arguments40['placeholder'] = 'Quote';
$arguments40['additionalAttributes'] = NULL;
$arguments40['data'] = NULL;
$arguments40['required'] = false;
$arguments40['type'] = 'text';
$arguments40['name'] = NULL;
$arguments40['value'] = NULL;
$arguments40['disabled'] = NULL;
$arguments40['maxlength'] = NULL;
$arguments40['readonly'] = NULL;
$arguments40['size'] = NULL;
$arguments40['autofocus'] = NULL;
$arguments40['errorClass'] = 'f3-form-error';
$arguments40['dir'] = NULL;
$arguments40['id'] = NULL;
$arguments40['lang'] = NULL;
$arguments40['style'] = NULL;
$arguments40['title'] = NULL;
$arguments40['accesskey'] = NULL;
$arguments40['tabindex'] = NULL;
$arguments40['onclick'] = NULL;
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper42 = $self->getViewHelper('$viewHelper42', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper42->setArguments($arguments40);
$viewHelper42->setRenderingContext($renderingContext);
$viewHelper42->setRenderChildrenClosure($renderChildrenClosure41);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output3 .= $viewHelper42->initializeArgumentsAndRender();

$output3 .= '
                    </div>
                    ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments43 = array();
$arguments43['class'] = 'form-control';
$arguments43['value'] = 'Submit';
$arguments43['additionalAttributes'] = NULL;
$arguments43['data'] = NULL;
$arguments43['name'] = NULL;
$arguments43['property'] = NULL;
$arguments43['disabled'] = NULL;
$arguments43['dir'] = NULL;
$arguments43['id'] = NULL;
$arguments43['lang'] = NULL;
$arguments43['style'] = NULL;
$arguments43['title'] = NULL;
$arguments43['accesskey'] = NULL;
$arguments43['tabindex'] = NULL;
$arguments43['onclick'] = NULL;
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper45 = $self->getViewHelper('$viewHelper45', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper45->setArguments($arguments43);
$viewHelper45->setRenderingContext($renderingContext);
$viewHelper45->setRenderChildrenClosure($renderChildrenClosure44);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output3 .= $viewHelper45->initializeArgumentsAndRender();

$output3 .= '
                ';
return $output3;
};
$viewHelper46 = $self->getViewHelper('$viewHelper46', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper46->setArguments($arguments1);
$viewHelper46->setRenderingContext($renderingContext);
$viewHelper46->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output0 .= $viewHelper46->initializeArgumentsAndRender();

$output0 .= '
            </div>
        </div>
    </div>
</div>


';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output47 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments48 = array();
$arguments48['name'] = 'Backend';
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper50 = $self->getViewHelper('$viewHelper50', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper50->setArguments($arguments48);
$viewHelper50->setRenderingContext($renderingContext);
$viewHelper50->setRenderChildrenClosure($renderChildrenClosure49);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper

$output47 .= $viewHelper50->initializeArgumentsAndRender();

$output47 .= '
';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments51 = array();
$arguments51['name'] = 'Content';
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
<div class="row">
	<div class="col-md-8 col-offset-2">
		<div class="panel panel-default">
			<div class="panel-head">
                Edit Ngo Profile
            </div>
			<div class="panel-body">
                ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper
$arguments54 = array();
$arguments54['objectName'] = 'organisation';
$arguments54['object'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'organisation', $renderingContext);
$arguments54['controller'] = 'Backend\\Post';
$arguments54['action'] = 'updateOrganisation';
$arguments54['package'] = 'Project.Helpiez';
$arguments54['method'] = 'post';
$arguments54['additionalAttributes'] = NULL;
$arguments54['data'] = NULL;
$arguments54['arguments'] = array (
);
$arguments54['subpackage'] = NULL;
$arguments54['section'] = '';
$arguments54['format'] = '';
$arguments54['additionalParams'] = array (
);
$arguments54['absolute'] = false;
$arguments54['addQueryString'] = false;
$arguments54['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments54['fieldNamePrefix'] = NULL;
$arguments54['actionUri'] = NULL;
$arguments54['useParentRequest'] = false;
$arguments54['enctype'] = NULL;
$arguments54['name'] = NULL;
$arguments54['onreset'] = NULL;
$arguments54['onsubmit'] = NULL;
$arguments54['class'] = NULL;
$arguments54['dir'] = NULL;
$arguments54['id'] = NULL;
$arguments54['lang'] = NULL;
$arguments54['style'] = NULL;
$arguments54['title'] = NULL;
$arguments54['accesskey'] = NULL;
$arguments54['tabindex'] = NULL;
$arguments54['onclick'] = NULL;
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
                   <div class="form-group">
                        <label>Address</label>
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments57 = array();
$arguments57['class'] = 'form-control';
$arguments57['property'] = 'address';
$arguments57['name'] = 'address';
$arguments57['placeholder'] = 'Address';
// Rendering Boolean node
$arguments57['required'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments57['additionalAttributes'] = NULL;
$arguments57['data'] = NULL;
$arguments57['type'] = 'text';
$arguments57['value'] = NULL;
$arguments57['disabled'] = NULL;
$arguments57['maxlength'] = NULL;
$arguments57['readonly'] = NULL;
$arguments57['size'] = NULL;
$arguments57['autofocus'] = NULL;
$arguments57['errorClass'] = 'f3-form-error';
$arguments57['dir'] = NULL;
$arguments57['id'] = NULL;
$arguments57['lang'] = NULL;
$arguments57['style'] = NULL;
$arguments57['title'] = NULL;
$arguments57['accesskey'] = NULL;
$arguments57['tabindex'] = NULL;
$arguments57['onclick'] = NULL;
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper59 = $self->getViewHelper('$viewHelper59', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper59->setArguments($arguments57);
$viewHelper59->setRenderingContext($renderingContext);
$viewHelper59->setRenderChildrenClosure($renderChildrenClosure58);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output56 .= $viewHelper59->initializeArgumentsAndRender();

$output56 .= '
                    </div>
                    <div class="form-group">
                        <label>Region</label>
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments60 = array();
$arguments60['class'] = 'form-control';
$arguments60['property'] = 'Region';
$arguments60['name'] = 'Region';
$arguments60['placeholder'] = 'Region';
// Rendering Boolean node
$arguments60['required'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments60['additionalAttributes'] = NULL;
$arguments60['data'] = NULL;
$arguments60['type'] = 'text';
$arguments60['value'] = NULL;
$arguments60['disabled'] = NULL;
$arguments60['maxlength'] = NULL;
$arguments60['readonly'] = NULL;
$arguments60['size'] = NULL;
$arguments60['autofocus'] = NULL;
$arguments60['errorClass'] = 'f3-form-error';
$arguments60['dir'] = NULL;
$arguments60['id'] = NULL;
$arguments60['lang'] = NULL;
$arguments60['style'] = NULL;
$arguments60['title'] = NULL;
$arguments60['accesskey'] = NULL;
$arguments60['tabindex'] = NULL;
$arguments60['onclick'] = NULL;
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper62 = $self->getViewHelper('$viewHelper62', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper62->setArguments($arguments60);
$viewHelper62->setRenderingContext($renderingContext);
$viewHelper62->setRenderChildrenClosure($renderChildrenClosure61);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output56 .= $viewHelper62->initializeArgumentsAndRender();

$output56 .= '
                    </div>
                    <div class="form-group">
                        <label>Contact Number</label>
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments63 = array();
$arguments63['class'] = 'form-control';
$arguments63['property'] = 'number';
$arguments63['placeholder'] = 'Number';
// Rendering Boolean node
$arguments63['required'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments63['additionalAttributes'] = NULL;
$arguments63['data'] = NULL;
$arguments63['type'] = 'text';
$arguments63['name'] = NULL;
$arguments63['value'] = NULL;
$arguments63['disabled'] = NULL;
$arguments63['maxlength'] = NULL;
$arguments63['readonly'] = NULL;
$arguments63['size'] = NULL;
$arguments63['autofocus'] = NULL;
$arguments63['errorClass'] = 'f3-form-error';
$arguments63['dir'] = NULL;
$arguments63['id'] = NULL;
$arguments63['lang'] = NULL;
$arguments63['style'] = NULL;
$arguments63['title'] = NULL;
$arguments63['accesskey'] = NULL;
$arguments63['tabindex'] = NULL;
$arguments63['onclick'] = NULL;
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper65 = $self->getViewHelper('$viewHelper65', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper65->setArguments($arguments63);
$viewHelper65->setRenderingContext($renderingContext);
$viewHelper65->setRenderChildrenClosure($renderChildrenClosure64);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output56 .= $viewHelper65->initializeArgumentsAndRender();

$output56 .= '
                    </div>
                    <div class="form-group">
                        <label>Website</label>
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments66 = array();
$arguments66['class'] = 'form-control';
$arguments66['property'] = 'website';
$arguments66['placeholder'] = 'Website';
$arguments66['additionalAttributes'] = NULL;
$arguments66['data'] = NULL;
$arguments66['required'] = false;
$arguments66['type'] = 'text';
$arguments66['name'] = NULL;
$arguments66['value'] = NULL;
$arguments66['disabled'] = NULL;
$arguments66['maxlength'] = NULL;
$arguments66['readonly'] = NULL;
$arguments66['size'] = NULL;
$arguments66['autofocus'] = NULL;
$arguments66['errorClass'] = 'f3-form-error';
$arguments66['dir'] = NULL;
$arguments66['id'] = NULL;
$arguments66['lang'] = NULL;
$arguments66['style'] = NULL;
$arguments66['title'] = NULL;
$arguments66['accesskey'] = NULL;
$arguments66['tabindex'] = NULL;
$arguments66['onclick'] = NULL;
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper68 = $self->getViewHelper('$viewHelper68', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper68->setArguments($arguments66);
$viewHelper68->setRenderingContext($renderingContext);
$viewHelper68->setRenderChildrenClosure($renderChildrenClosure67);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output56 .= $viewHelper68->initializeArgumentsAndRender();

$output56 .= '
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments69 = array();
$arguments69['class'] = 'form-control';
$arguments69['property'] = 'email';
$arguments69['placeholder'] = 'Email';
// Rendering Boolean node
$arguments69['required'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('true');
$arguments69['additionalAttributes'] = NULL;
$arguments69['data'] = NULL;
$arguments69['type'] = 'text';
$arguments69['name'] = NULL;
$arguments69['value'] = NULL;
$arguments69['disabled'] = NULL;
$arguments69['maxlength'] = NULL;
$arguments69['readonly'] = NULL;
$arguments69['size'] = NULL;
$arguments69['autofocus'] = NULL;
$arguments69['errorClass'] = 'f3-form-error';
$arguments69['dir'] = NULL;
$arguments69['id'] = NULL;
$arguments69['lang'] = NULL;
$arguments69['style'] = NULL;
$arguments69['title'] = NULL;
$arguments69['accesskey'] = NULL;
$arguments69['tabindex'] = NULL;
$arguments69['onclick'] = NULL;
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper71 = $self->getViewHelper('$viewHelper71', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper71->setArguments($arguments69);
$viewHelper71->setRenderingContext($renderingContext);
$viewHelper71->setRenderChildrenClosure($renderChildrenClosure70);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output56 .= $viewHelper71->initializeArgumentsAndRender();

$output56 .= '
                    </div>
                    <div class="form-group">
                        <label>Youtube Link</label>
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments72 = array();
$arguments72['class'] = 'form-control';
$arguments72['property'] = 'youtube';
$arguments72['placeholder'] = 'Youtube';
$arguments72['additionalAttributes'] = NULL;
$arguments72['data'] = NULL;
$arguments72['required'] = false;
$arguments72['type'] = 'text';
$arguments72['name'] = NULL;
$arguments72['value'] = NULL;
$arguments72['disabled'] = NULL;
$arguments72['maxlength'] = NULL;
$arguments72['readonly'] = NULL;
$arguments72['size'] = NULL;
$arguments72['autofocus'] = NULL;
$arguments72['errorClass'] = 'f3-form-error';
$arguments72['dir'] = NULL;
$arguments72['id'] = NULL;
$arguments72['lang'] = NULL;
$arguments72['style'] = NULL;
$arguments72['title'] = NULL;
$arguments72['accesskey'] = NULL;
$arguments72['tabindex'] = NULL;
$arguments72['onclick'] = NULL;
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper74 = $self->getViewHelper('$viewHelper74', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper74->setArguments($arguments72);
$viewHelper74->setRenderingContext($renderingContext);
$viewHelper74->setRenderChildrenClosure($renderChildrenClosure73);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output56 .= $viewHelper74->initializeArgumentsAndRender();

$output56 .= '
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments75 = array();
$arguments75['class'] = 'form-control';
$arguments75['property'] = 'description';
$arguments75['placeholder'] = 'Description';
$arguments75['additionalAttributes'] = NULL;
$arguments75['data'] = NULL;
$arguments75['required'] = false;
$arguments75['type'] = 'text';
$arguments75['name'] = NULL;
$arguments75['value'] = NULL;
$arguments75['disabled'] = NULL;
$arguments75['maxlength'] = NULL;
$arguments75['readonly'] = NULL;
$arguments75['size'] = NULL;
$arguments75['autofocus'] = NULL;
$arguments75['errorClass'] = 'f3-form-error';
$arguments75['dir'] = NULL;
$arguments75['id'] = NULL;
$arguments75['lang'] = NULL;
$arguments75['style'] = NULL;
$arguments75['title'] = NULL;
$arguments75['accesskey'] = NULL;
$arguments75['tabindex'] = NULL;
$arguments75['onclick'] = NULL;
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper77 = $self->getViewHelper('$viewHelper77', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper77->setArguments($arguments75);
$viewHelper77->setRenderingContext($renderingContext);
$viewHelper77->setRenderChildrenClosure($renderChildrenClosure76);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output56 .= $viewHelper77->initializeArgumentsAndRender();

$output56 .= '
                    </div>
                    <div class="form-group">
                        <label>Fb Link</label>
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments78 = array();
$arguments78['class'] = 'form-control';
$arguments78['property'] = 'fb';
$arguments78['placeholder'] = 'Fb Link';
$arguments78['additionalAttributes'] = NULL;
$arguments78['data'] = NULL;
$arguments78['required'] = false;
$arguments78['type'] = 'text';
$arguments78['name'] = NULL;
$arguments78['value'] = NULL;
$arguments78['disabled'] = NULL;
$arguments78['maxlength'] = NULL;
$arguments78['readonly'] = NULL;
$arguments78['size'] = NULL;
$arguments78['autofocus'] = NULL;
$arguments78['errorClass'] = 'f3-form-error';
$arguments78['dir'] = NULL;
$arguments78['id'] = NULL;
$arguments78['lang'] = NULL;
$arguments78['style'] = NULL;
$arguments78['title'] = NULL;
$arguments78['accesskey'] = NULL;
$arguments78['tabindex'] = NULL;
$arguments78['onclick'] = NULL;
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper80 = $self->getViewHelper('$viewHelper80', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper80->setArguments($arguments78);
$viewHelper80->setRenderingContext($renderingContext);
$viewHelper80->setRenderChildrenClosure($renderChildrenClosure79);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output56 .= $viewHelper80->initializeArgumentsAndRender();

$output56 .= '
                    </div>
                    <div class="form-group">
                        <label>Blog Url</label>
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments81 = array();
$arguments81['class'] = 'form-control';
$arguments81['property'] = 'blogurl';
$arguments81['placeholder'] = 'Blog Url';
$arguments81['additionalAttributes'] = NULL;
$arguments81['data'] = NULL;
$arguments81['required'] = false;
$arguments81['type'] = 'text';
$arguments81['name'] = NULL;
$arguments81['value'] = NULL;
$arguments81['disabled'] = NULL;
$arguments81['maxlength'] = NULL;
$arguments81['readonly'] = NULL;
$arguments81['size'] = NULL;
$arguments81['autofocus'] = NULL;
$arguments81['errorClass'] = 'f3-form-error';
$arguments81['dir'] = NULL;
$arguments81['id'] = NULL;
$arguments81['lang'] = NULL;
$arguments81['style'] = NULL;
$arguments81['title'] = NULL;
$arguments81['accesskey'] = NULL;
$arguments81['tabindex'] = NULL;
$arguments81['onclick'] = NULL;
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper83 = $self->getViewHelper('$viewHelper83', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper83->setArguments($arguments81);
$viewHelper83->setRenderingContext($renderingContext);
$viewHelper83->setRenderChildrenClosure($renderChildrenClosure82);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output56 .= $viewHelper83->initializeArgumentsAndRender();

$output56 .= '
                    </div>
                    <div class="form-group">
                        <label>Twitter Link</label>
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments84 = array();
$arguments84['class'] = 'form-control';
$arguments84['property'] = 'twitter';
$arguments84['placeholder'] = 'Twitter Link';
$arguments84['additionalAttributes'] = NULL;
$arguments84['data'] = NULL;
$arguments84['required'] = false;
$arguments84['type'] = 'text';
$arguments84['name'] = NULL;
$arguments84['value'] = NULL;
$arguments84['disabled'] = NULL;
$arguments84['maxlength'] = NULL;
$arguments84['readonly'] = NULL;
$arguments84['size'] = NULL;
$arguments84['autofocus'] = NULL;
$arguments84['errorClass'] = 'f3-form-error';
$arguments84['dir'] = NULL;
$arguments84['id'] = NULL;
$arguments84['lang'] = NULL;
$arguments84['style'] = NULL;
$arguments84['title'] = NULL;
$arguments84['accesskey'] = NULL;
$arguments84['tabindex'] = NULL;
$arguments84['onclick'] = NULL;
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper86 = $self->getViewHelper('$viewHelper86', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper86->setArguments($arguments84);
$viewHelper86->setRenderingContext($renderingContext);
$viewHelper86->setRenderChildrenClosure($renderChildrenClosure85);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output56 .= $viewHelper86->initializeArgumentsAndRender();

$output56 .= '
                    </div>
                    <div class="form-group">
                        <label>Cause</label>
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments87 = array();
$arguments87['class'] = 'form-control';
$arguments87['property'] = 'cause';
$arguments87['placeholder'] = 'Cause';
$arguments87['additionalAttributes'] = NULL;
$arguments87['data'] = NULL;
$arguments87['required'] = false;
$arguments87['type'] = 'text';
$arguments87['name'] = NULL;
$arguments87['value'] = NULL;
$arguments87['disabled'] = NULL;
$arguments87['maxlength'] = NULL;
$arguments87['readonly'] = NULL;
$arguments87['size'] = NULL;
$arguments87['autofocus'] = NULL;
$arguments87['errorClass'] = 'f3-form-error';
$arguments87['dir'] = NULL;
$arguments87['id'] = NULL;
$arguments87['lang'] = NULL;
$arguments87['style'] = NULL;
$arguments87['title'] = NULL;
$arguments87['accesskey'] = NULL;
$arguments87['tabindex'] = NULL;
$arguments87['onclick'] = NULL;
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper89 = $self->getViewHelper('$viewHelper89', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper89->setArguments($arguments87);
$viewHelper89->setRenderingContext($renderingContext);
$viewHelper89->setRenderChildrenClosure($renderChildrenClosure88);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output56 .= $viewHelper89->initializeArgumentsAndRender();

$output56 .= '
                    </div>
                    <div class="form-group">
                        <label>Beneficiary</label>
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments90 = array();
$arguments90['class'] = 'form-control';
$arguments90['property'] = 'beneficiary';
$arguments90['placeholder'] = 'Beneficiary';
$arguments90['additionalAttributes'] = NULL;
$arguments90['data'] = NULL;
$arguments90['required'] = false;
$arguments90['type'] = 'text';
$arguments90['name'] = NULL;
$arguments90['value'] = NULL;
$arguments90['disabled'] = NULL;
$arguments90['maxlength'] = NULL;
$arguments90['readonly'] = NULL;
$arguments90['size'] = NULL;
$arguments90['autofocus'] = NULL;
$arguments90['errorClass'] = 'f3-form-error';
$arguments90['dir'] = NULL;
$arguments90['id'] = NULL;
$arguments90['lang'] = NULL;
$arguments90['style'] = NULL;
$arguments90['title'] = NULL;
$arguments90['accesskey'] = NULL;
$arguments90['tabindex'] = NULL;
$arguments90['onclick'] = NULL;
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper92 = $self->getViewHelper('$viewHelper92', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper92->setArguments($arguments90);
$viewHelper92->setRenderingContext($renderingContext);
$viewHelper92->setRenderChildrenClosure($renderChildrenClosure91);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output56 .= $viewHelper92->initializeArgumentsAndRender();

$output56 .= '
                    </div>
                    <div class="form-group">
                        <label>Quote</label>
                        ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper
$arguments93 = array();
$arguments93['class'] = 'form-control';
$arguments93['property'] = 'quote';
$arguments93['placeholder'] = 'Quote';
$arguments93['additionalAttributes'] = NULL;
$arguments93['data'] = NULL;
$arguments93['required'] = false;
$arguments93['type'] = 'text';
$arguments93['name'] = NULL;
$arguments93['value'] = NULL;
$arguments93['disabled'] = NULL;
$arguments93['maxlength'] = NULL;
$arguments93['readonly'] = NULL;
$arguments93['size'] = NULL;
$arguments93['autofocus'] = NULL;
$arguments93['errorClass'] = 'f3-form-error';
$arguments93['dir'] = NULL;
$arguments93['id'] = NULL;
$arguments93['lang'] = NULL;
$arguments93['style'] = NULL;
$arguments93['title'] = NULL;
$arguments93['accesskey'] = NULL;
$arguments93['tabindex'] = NULL;
$arguments93['onclick'] = NULL;
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper95 = $self->getViewHelper('$viewHelper95', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper');
$viewHelper95->setArguments($arguments93);
$viewHelper95->setRenderingContext($renderingContext);
$viewHelper95->setRenderChildrenClosure($renderChildrenClosure94);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\TextfieldViewHelper

$output56 .= $viewHelper95->initializeArgumentsAndRender();

$output56 .= '
                    </div>
                    ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments96 = array();
$arguments96['class'] = 'form-control';
$arguments96['value'] = 'Submit';
$arguments96['additionalAttributes'] = NULL;
$arguments96['data'] = NULL;
$arguments96['name'] = NULL;
$arguments96['property'] = NULL;
$arguments96['disabled'] = NULL;
$arguments96['dir'] = NULL;
$arguments96['id'] = NULL;
$arguments96['lang'] = NULL;
$arguments96['style'] = NULL;
$arguments96['title'] = NULL;
$arguments96['accesskey'] = NULL;
$arguments96['tabindex'] = NULL;
$arguments96['onclick'] = NULL;
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper98 = $self->getViewHelper('$viewHelper98', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper98->setArguments($arguments96);
$viewHelper98->setRenderingContext($renderingContext);
$viewHelper98->setRenderChildrenClosure($renderChildrenClosure97);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Form\SubmitViewHelper

$output56 .= $viewHelper98->initializeArgumentsAndRender();

$output56 .= '
                ';
return $output56;
};
$viewHelper99 = $self->getViewHelper('$viewHelper99', $renderingContext, 'TYPO3\Fluid\ViewHelpers\FormViewHelper');
$viewHelper99->setArguments($arguments54);
$viewHelper99->setRenderingContext($renderingContext);
$viewHelper99->setRenderChildrenClosure($renderChildrenClosure55);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\FormViewHelper

$output53 .= $viewHelper99->initializeArgumentsAndRender();

$output53 .= '
            </div>
        </div>
    </div>
</div>


';
return $output53;
};

$output47 .= '';

return $output47;
}


}
#0             49145     