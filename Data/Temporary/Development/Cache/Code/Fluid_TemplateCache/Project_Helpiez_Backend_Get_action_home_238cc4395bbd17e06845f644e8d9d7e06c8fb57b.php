<?php class FluidCache_Project_Helpiez_Backend_Get_action_home_238cc4395bbd17e06845f644e8d9d7e06c8fb57b extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

return '
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header text-asbestos">Dashboard</h3>
        </div>
    </div>
    <!-- /.col-lg-12 -->
    <div class="row">
        <div class="col-xs-6 col-md-3">
            <div class="panel panel-primary text-center panel-eyecandy">
                <div class="panel-body asbestos">
                    <i class="fa fa-bar-chart-o fa-3x"></i>
                    <h3>5,741</h3>
                </div>
                <div class="panel-footer">
                    <span class="panel-eyecandy-title">
                        Page Visits
                    </span>
                </div>
            </div>
        </div>
        <!-- /.col-xs-6 col-md-3 -->
        <div class="col-xs-6 col-md-3">
            <div class="panel panel-primary text-center panel-eyecandy">
                <div class="panel-body theme-color">
                    <i class="fa fa-star fa-3x"></i>
                    <h3>32</h3>
                </div>
                <div class="panel-footer">
                    <span class="panel-eyecandy-title">
                        Rating
                    </span>
                </div>
            </div>
        </div>
        <!-- /.col-xs-6 col-md-3 -->
        <div class="col-xs-6 col-md-3">
            <div class="panel panel-primary text-center panel-eyecandy">
                <div class="panel-body asbestos">
                    <i class="fa fa-users fa-3x"></i>
                    <h3>437</h3>
                </div>
                <div class="panel-footer">
                    <span class="panel-eyecandy-title">
                        Followers
                    </span>
                </div>
            </div>
        </div>
        <!-- /.col-xs-6 col-md-3 -->
        <div class="col-xs-6 col-md-3">
            <div class="panel panel-primary text-center panel-eyecandy">
                <div class="panel-body theme-color">
                    <i class="fa fa-comments fa-3x"></i>
                    <h3>47</h3>
                </div>
                <div class="panel-footer">
                    <span class="panel-eyecandy-title">
                        Reviews
                    </span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#home" data-toggle="tab">Pending Edits(Number)</a>
                                    </li>
                                    <li class=""><a href="#profile" data-toggle="tab">Messages(Number)</a>
                                    </li>
                                    
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="home">
                                        <div class="panel-body">
                                        <h4><a href="#">Name of the article that was edited</a></h4>
                                        <h6><a href="">Link to the profile of the user</a></h6>
                                        <blockquote>Portion of the text that was edited highlighted </blockquote>
                                        <button type="submit" class="btn btn-default">Confirm</button>
                                        <button type="submit" class="btn btn-default">Ignore</button>
                                        </div>
                                        <div class="panel-body">
                                        <h4><a href="#">Name of the article that was edited</a></h4>
                                        <h6><a href="">Link to the profile of the user</a></h6>
                                        <blockquote>Portion of the text that was edited highlighted </blockquote>
                                        <button type="submit" class="btn btn-default">Confirm</button>
                                        <button type="submit" class="btn btn-default">Ignore</button>
                                        </div>
                                        <div class="panel-body">
                                        <h4><a href="#">Name of the article that was edited</a></h4>
                                        <h6><a href="">Link to the profile of the user</a></h6>
                                        <blockquote>Portion of the text that was edited highlighted </blockquote>
                                        <button type="submit" class="btn btn-default">Confirm</button>
                                        <button type="submit" class="btn btn-default">Ignore</button>
                                        </div>
                                        <div class="panel-body">
                                        <h4><a href="#">Name of the article that was edited</a></h4>
                                        <h6><a href="">Link to the profile of the user</a></h6>
                                        <blockquote>Portion of the text that was edited highlighted </blockquote>
                                        <button type="submit" class="btn btn-default">Confirm</button>
                                        <button type="submit" class="btn btn-default">Ignore</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile">
                                        <div class="panel-body">
                                            <form role="form">
                                                <div class="form-group">
                                                    <label>Name of the sender</label>
                                                    <p class="form-control-static">Message</p>
                                                </div>
                                                <div class="form-group input-group">
                                                    <span class="input-group-addon"><i class="fa fa-mail-reply"></i></span>
                                                    <input class="form-control" placeholder="Message" type="text">
                                                </div>
                                                <button type="submit" class="btn btn-default">Submit Button</button>
                                            </form>
                                        </div>
                                        <div class="panel-body">
                                            <form role="form">
                                                <div class="form-group">
                                                    <label>Name of the sender</label>
                                                    <p class="form-control-static">Message</p>
                                                </div>
                                                <div class="form-group input-group">
                                                    <span class="input-group-addon"><i class="fa fa-mail-reply"></i></span>
                                                    <input class="form-control" placeholder="Message" type="text">
                                                </div>
                                                <button type="submit" class="btn btn-default">Submit Button</button>
                                            </form>
                                        </div>
                                        <div class="panel-body">
                                            <form role="form">
                                                <div class="form-group">
                                                    <label>Name of the sender</label>
                                                    <p class="form-control-static">Message</p>
                                                </div>
                                                <div class="form-group input-group">
                                                    <span class="input-group-addon"><i class="fa fa-mail-reply"></i></span>
                                                    <input class="form-control" placeholder="Message" type="text">
                                                </div>
                                                <button type="submit" class="btn btn-default">Submit Button</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
    </div>
';
}
/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments1 = array();
$arguments1['name'] = 'Backend';
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments4 = array();
$arguments4['name'] = 'Content';
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return '
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header text-asbestos">Dashboard</h3>
        </div>
    </div>
    <!-- /.col-lg-12 -->
    <div class="row">
        <div class="col-xs-6 col-md-3">
            <div class="panel panel-primary text-center panel-eyecandy">
                <div class="panel-body asbestos">
                    <i class="fa fa-bar-chart-o fa-3x"></i>
                    <h3>5,741</h3>
                </div>
                <div class="panel-footer">
                    <span class="panel-eyecandy-title">
                        Page Visits
                    </span>
                </div>
            </div>
        </div>
        <!-- /.col-xs-6 col-md-3 -->
        <div class="col-xs-6 col-md-3">
            <div class="panel panel-primary text-center panel-eyecandy">
                <div class="panel-body theme-color">
                    <i class="fa fa-star fa-3x"></i>
                    <h3>32</h3>
                </div>
                <div class="panel-footer">
                    <span class="panel-eyecandy-title">
                        Rating
                    </span>
                </div>
            </div>
        </div>
        <!-- /.col-xs-6 col-md-3 -->
        <div class="col-xs-6 col-md-3">
            <div class="panel panel-primary text-center panel-eyecandy">
                <div class="panel-body asbestos">
                    <i class="fa fa-users fa-3x"></i>
                    <h3>437</h3>
                </div>
                <div class="panel-footer">
                    <span class="panel-eyecandy-title">
                        Followers
                    </span>
                </div>
            </div>
        </div>
        <!-- /.col-xs-6 col-md-3 -->
        <div class="col-xs-6 col-md-3">
            <div class="panel panel-primary text-center panel-eyecandy">
                <div class="panel-body theme-color">
                    <i class="fa fa-comments fa-3x"></i>
                    <h3>47</h3>
                </div>
                <div class="panel-footer">
                    <span class="panel-eyecandy-title">
                        Reviews
                    </span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#home" data-toggle="tab">Pending Edits(Number)</a>
                                    </li>
                                    <li class=""><a href="#profile" data-toggle="tab">Messages(Number)</a>
                                    </li>
                                    
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="home">
                                        <div class="panel-body">
                                        <h4><a href="#">Name of the article that was edited</a></h4>
                                        <h6><a href="">Link to the profile of the user</a></h6>
                                        <blockquote>Portion of the text that was edited highlighted </blockquote>
                                        <button type="submit" class="btn btn-default">Confirm</button>
                                        <button type="submit" class="btn btn-default">Ignore</button>
                                        </div>
                                        <div class="panel-body">
                                        <h4><a href="#">Name of the article that was edited</a></h4>
                                        <h6><a href="">Link to the profile of the user</a></h6>
                                        <blockquote>Portion of the text that was edited highlighted </blockquote>
                                        <button type="submit" class="btn btn-default">Confirm</button>
                                        <button type="submit" class="btn btn-default">Ignore</button>
                                        </div>
                                        <div class="panel-body">
                                        <h4><a href="#">Name of the article that was edited</a></h4>
                                        <h6><a href="">Link to the profile of the user</a></h6>
                                        <blockquote>Portion of the text that was edited highlighted </blockquote>
                                        <button type="submit" class="btn btn-default">Confirm</button>
                                        <button type="submit" class="btn btn-default">Ignore</button>
                                        </div>
                                        <div class="panel-body">
                                        <h4><a href="#">Name of the article that was edited</a></h4>
                                        <h6><a href="">Link to the profile of the user</a></h6>
                                        <blockquote>Portion of the text that was edited highlighted </blockquote>
                                        <button type="submit" class="btn btn-default">Confirm</button>
                                        <button type="submit" class="btn btn-default">Ignore</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile">
                                        <div class="panel-body">
                                            <form role="form">
                                                <div class="form-group">
                                                    <label>Name of the sender</label>
                                                    <p class="form-control-static">Message</p>
                                                </div>
                                                <div class="form-group input-group">
                                                    <span class="input-group-addon"><i class="fa fa-mail-reply"></i></span>
                                                    <input class="form-control" placeholder="Message" type="text">
                                                </div>
                                                <button type="submit" class="btn btn-default">Submit Button</button>
                                            </form>
                                        </div>
                                        <div class="panel-body">
                                            <form role="form">
                                                <div class="form-group">
                                                    <label>Name of the sender</label>
                                                    <p class="form-control-static">Message</p>
                                                </div>
                                                <div class="form-group input-group">
                                                    <span class="input-group-addon"><i class="fa fa-mail-reply"></i></span>
                                                    <input class="form-control" placeholder="Message" type="text">
                                                </div>
                                                <button type="submit" class="btn btn-default">Submit Button</button>
                                            </form>
                                        </div>
                                        <div class="panel-body">
                                            <form role="form">
                                                <div class="form-group">
                                                    <label>Name of the sender</label>
                                                    <p class="form-control-static">Message</p>
                                                </div>
                                                <div class="form-group input-group">
                                                    <span class="input-group-addon"><i class="fa fa-mail-reply"></i></span>
                                                    <input class="form-control" placeholder="Message" type="text">
                                                </div>
                                                <button type="submit" class="btn btn-default">Submit Button</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
    </div>
';
};

$output0 .= '';

return $output0;
}


}
#0             20353     