<?php class FluidCache_Project_Helpiez_Frontend_Get_action_home_04bb0f75c95d6d361e48a45ada48964f956141f6 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<div id="layerslider-container-fw">
    <div id="layerslider" style="width: 100%; height: 600px; margin: 0px auto; ">

        <div class="ls-layer" style="transition2d: 5; slidedelay: 8000;" >
            <img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments1 = array();
$arguments1['path'] = 'Frontend/images/slider1.jpg';
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

$output0 .= '" class="ls-bg" alt="Slide background">
            <h3 class="ls-s-1" style="top: 223px; left:248px; background: url(';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments4 = array();
$arguments4['path'] = 'Frontend/images/slider1-img2.png';
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

$output0 .= ') no-repeat scroll 0 0 / auto 100% transparent; font-family:roboto; font-size:34px; font-weight:bold; color:#4c4c4c; line-height:56px; padding:0 60px 0 60px; ; border-radius:3px; delayin:500; scaleout:.5; slidedirection:fade;" ><i></h3>
            
            <p class="ls-s-1"	style="top: 360px; left:248px; font-family:roboto; font-size:13px; color:#fefefe; delayin:2000; scalein:4; slidedirection:fade; durationin : 2000;"></p>
        </div><!-- Slide1>

        <!--div class="ls-layer" style="transition2d: 45; slidedelay: 8000;" >
            <img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments7 = array();
$arguments7['path'] = 'Frontend/images/slider2.jpg';
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

$output0 .= '" class="ls-bg" alt="Slide background">
            <h3 class="ls-s-3 slide3-first" style="top:296px; left:100px; font-family: roboto; color: #FFFFFF; line-height:22px; font-size:32px; background:rgba(0,0,0,0.85); padding:18px 30px; border-radius:4px 0px 0px 4px; slidedirection:right; scalein :0.5;  durationin :2000; delayin:500; showuntil:3000; slideoutdirection:right; easingin : easeOutQuad;">
                HELP <i>US</i> TO HELP OTHERS</h3>

            <h4 class="ls-s-3 slide3-second" style="top:365px; left:100px; background:rgba(152,212,96,0.85); font-family: roboto; color: #FFFFFF; font-size:28px; line-height:26px; padding:10px 20px; border-radius:4px 0px 0px 4px; slidedirection:right; scalein :0.5; durationin :2000; delayin:1000; showuntil:3500; slideoutdirection:right; easingin : easeOutQuad; ">
                RESPONSIVE <span>TEMPLATE</span></h4>

            <h5 class="ls-s-3 slide3-third" style="top:419px; left:100px; background:rgba(255,255,255,0.85); color:#595858; font-family:roboto; font-size:24px; line-height: 20px; padding:10px 20px; border-radius:4px 0px 0px 4px; slidedirection:right; scalein :0.5; durationin :2000; delayin:1500;  showuntil:4000; slideoutdirection:right; easingin : easeOutQuad;">
                CREATIVE <span>IDEAS</span></h5>

        </div><!-- Slide2 -->

        <!--div class="ls-layer" style="transition2d: 77; slidedelay: 8000;" >
            <img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments10 = array();
$arguments10['path'] = 'Frontend/images/slider3.jpg';
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

$output0 .= '" class="ls-bg" alt="Slide background">
            <h3 class="ls-s-2" style="top: 260px;left:230px; font-family:roboto; font-size:72px; font-weight:bold; color:#fff; line-height:60px; delayin:500; scaleout:.5; slidedirection:fade;" >I WANNA SAY <span>SOMETHING</span></h3>

            <span class="ls-s-2" style="top: 348px; left:230px; background:#9bd362; padding:13px; border-radius:3px; color:#fff; font-family:open sans; font-weight:900; font-size:26px; text-transform:uppercase; line-height:20px; delayin:1000; showuntil:3000; slidedirection:fade; scalein : .8; durationin : 1750; scaleout : .8;">Please Feel My <i style="font-style:normal; color:#373737;">Tension</i></span>

            <span class="ls-s-2" style="top: 348px; left:807px; background:rgba(0,0,0,0.8); padding:13px; border-radius:3px; color:#fff; font-family:open sans; font-weight:900; font-size:26px; text-transform:uppercase; line-height:20px; delayin:1500; showuntil:3500; slidedirection:fade; scalein : .8; durationin : 1750; scaleout : .8;">We <i style="font-style:normal; color:#98d460;">Need</i> Your Help</span>
        </div><!-- Slide3 -->


        <!--div class="ls-layer" style="transition2d: 32; slidedelay: 8000;" >
            <img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments13 = array();
$arguments13['path'] = 'Frontend/images/slider4.jpg';
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

$output0 .= '" class="ls-bg" alt="Slide background">

            <h3 class="ls-s-4" style="top:280px; left:180px; background:rgba(0,0,0,0.9); font-family:roboto; font-size:36px; font-weight:bold; color:#fefefe; padding:20px 60px 20px; border-radius:4px; slidedirection:bottom; scalein :0; easingin : easeOutQuad; durationin :2000; delayin:500;">
                SAVE THE <i>WORLD</i></h3>

            <span class="ls-s-4" style="top:380px; left:245px; background: none repeat scroll 0 0 #95D05E;border-radius: 4px 4px 0 0; color: #FFFFFF;font-family: open sans;font-size: 13px;font-weight: bold; padding: 5px 10px; slidedirection:top; scalein :0; durationin :2500;">Want To Know Why And How We Do It?</span>

            <h4 class="ls-s-4" style="top:415px; left:130px; color:#030303; font-family:source sans pro; font-size:20px; font-weight:700; slidedirection:fade; scalein :0; durationin :2000; delayin:2000;">OUR CHARITY HELPS THOSE PEOPLE WHO HAVE NO HOPE</h4>

            <p class="ls-s-4" style="top:450px; left:70px; font-family:roboto; font-size:14px; color:#030303; slidedirection:fade; scalein :2; durationin :2000; delayin:4000;">Sed interdum, lacus et vulputate pellentesque, velit nulla commodo sem, at egestas nulla metus.</p>

        </div><!-- Slide4 -->

    </div>

    <div class="col-md-8 col-md-offset-3 col-sm-8 col-sm-offset-2 search-dialog form">
        <div class="message-box-title opened" style="background:transparent" >
            <form action="search.php" method="post">
                <ul style="display:inline-block">
                    <li class="search-list">
                        <select class="form-control" style="width:110%">
                        <option>Non - Profits</option>
                        <option selected="true">Opportunity</option>
                        <option>Stories</option>
                        </select>
                    </li>
                    <li class="search-list">
                        <input name="search" class="form-control" style="width:90%;display:inline" type="text" placeholder="Enter Name, Address or Keywords to find NGO"/>
                        
                    </li>
                    <li class="search-list">
                        <span style="padding-left:10px;margin-top:5px">
                            <i class="icon-search" style="font-size:2em"></i>
                        </span>
                    </li>
                <ul>
            </form>
        </div>
        <!--div class="message-form" style="display:block">
            <p></p>
            <div id="message"></div>
            <form method="post" action="contact.php" name="contactform" id="contactform">
                <input name="name" class="form-control" type="text" id="name" size="30" value=""  placeholder="Enter Name, Address or Keywords to find NGO" />

                <input type="submit" class="submit-btn submit" id="submit" value="SEND MESSAGE" />
            </form>
        </div-->
    </div><!-- Message Box -->

</div><!-- Layer Slider -->
<section class="block">
    <div class="container">
        <div class="row">
            <div class="fixed-bg " style="background:url(images/moving-bg.png) no-repeat scroll 0 0 transparent; background-attachment:fixed; background-size:cover;"></div>
            <div class="col-md-12">
            <div class="sec-heading">
                <h2><strong>Our </strong>Causes</h2>
            </div>          
            <div class="posts-carousel">
                <ul class="slides">
                    <li>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="carou-post">
                                <div class="carou-post-img">
                                    <img src="http://placehold.it/270x235" alt="" />
                                    <a title="This Is a Demo Video" href="http://player.vimeo.com/video/31943945?color=ffffff" class="html5lightbox"><i class="icon-play"></i></a>
                                </div>
                                <h4>Development</h4>
                                <p>Since 2008, the number of mothers dying in childbirth has fallen by 50% in Mozambique - thanks to international aid.</p>
                                <a href="single-post-video.html" title="">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="carou-post">
                                <div id="layerslider-container-fw">
                                    <div id="layerslider2" style="width: 100%; height: 100%;">
                                        <div class="ls-layer" style="transition2d: 5; slidedelay: 8000;" >          
                                            <img src="http://placehold.it/270x235" class="ls-bg" alt="Slide background">
                                        </div><!-- Slide1 -->
                                        <div class="ls-layer" style="transition2d: 77; slidedelay: 8000;" >         
                                            <img src="http://placehold.it/270x235" class="ls-bg" alt="Slide background">
                                        </div><!-- Slide2 -->
                                    </div>
                                </div><!-- Layer Slider -->     
                                <h4>Women\'s Right</h4>
                                <p>Since 2008, the number of mothers dying in childbirth has fallen by 50% in Mozambique - thanks to international aid.</p>
                                <a href="single-post-slider.html" title="">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="carou-post">
                                <div class="carou-post-img">
                                    <img src="http://placehold.it/270x235" alt="" />
                                    <a title="" href="images/blank-image.jpg" class="html5lightbox"><i class="icon-picture"></i></a>
                                </div>
                                <h4>Food</h4>
                                <p>Since 2008, the number of mothers dying in childbirth has fallen by 50% in Mozambique - thanks to international aid.</p>
                                <a href="single-post-image.html" title="">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="carou-post">
                                <div class="carou-post-img">
                                    <img src="http://placehold.it/270x235" alt="" />
                                    <a title="This Is a Demo Video" href="http://player.vimeo.com/video/31943945?color=ffffff" class="html5lightbox"><i class="icon-play"></i></a>
                                </div>
                                <h4>Education</h4>
                                <p>Since 2008, the number of mothers dying in childbirth has fallen by 50% in Mozambique - thanks to international aid.</p>
                                <a href="single-post-video.html" title="">Read More</a>
                            </div>
                        </div>
                    </div>
                    </li>
                    <li>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="carou-post">
                                <div class="carou-post-img">
                                    <img src="http://placehold.it/270x235" alt="" />
                                    <a title="This Is a Demo Video" href="http://player.vimeo.com/video/31943945?color=ffffff" class="html5lightbox"><i class="icon-play"></i></a>
                                </div>
                                <h4>Development</h4>
                                <p>Since 2008, the number of mothers dying in childbirth has fallen by 50% in Mozambique - thanks to international aid.</p>
                                <a href="single-post-video.html" title="">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="carou-post">
                                <div id="layerslider-container-fw">
                                    <div id="layerslider3" style="width: 100%; height: 100%;">
                                        <div class="ls-layer" style="transition2d: 5; slidedelay: 8000;" >          
                                            <img src="http://placehold.it/270x235" class="ls-bg" alt="Slide background">
                                        </div><!-- Slide1 -->
                                        <div class="ls-layer" style="transition2d: 77; slidedelay: 8000;" >         
                                            <img src="http://placehold.it/270x235" class="ls-bg" alt="Slide background">
                                        </div><!-- Slide2 -->
                                    </div>
                                </div><!-- Layer Slider -->     
                                <h4>Women\'s Right</h4>
                                <p>Since 2008, the number of mothers dying in childbirth has fallen by 50% in Mozambique - thanks to international aid.</p>
                                <a href="single-post-slider.html" title="">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="carou-post">
                                <div class="carou-post-img">
                                    <img src="http://placehold.it/270x235" alt="" />
                                    <a title="" href="images/blank-image.jpg" class="html5lightbox"><i class="icon-picture"></i></a>
                                </div>
                                <h4>Food</h4>
                                <p>Since 2008, the number of mothers dying in childbirth has fallen by 50% in Mozambique - thanks to international aid.</p>
                                <a href="single-post-image.html" title="">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="carou-post">
                                <div class="carou-post-img">
                                    <img src="http://placehold.it/270x235" alt="" />
                                    <a title="This Is a Demo Video" href="http://player.vimeo.com/video/31943945?color=ffffff" class="html5lightbox"><i class="icon-play"></i></a>
                                </div>
                                <h4>Education</h4>
                                <p>Since 2008, the number of mothers dying in childbirth has fallen by 50% in Mozambique - thanks to international aid.</p>
                                <a href="single-post-video.html" title="">Read More</a>
                            </div>
                        </div>
                    </div>
                    </li>
                </ul>
            </div>
            </div>
        </div>
    </div>
</section>

<section class="block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 column">
                <div class="sec-title">
                    <h2>Recent <span>News</span></h2>
                </div>      

                <div class="remove-ext">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="recent-news">
                                <div class="row">
                                    <div class="col-md-5">
                                        <a class="news-img" href="#" title=""><img src="http://placehold.it/114x106" alt=""></a>
                                    </div>
                                    <div class="col-md-7">
                                        <h4><a href="#" title="">Countries with the most billionair</a></h4>
                                        <p>Lorem ips sitamet, dipiing elit. Lorem ipsum most.  </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="recent-news">
                                <div class="row">
                                    <div class="col-md-5">
                                        <a class="news-img" href="#" title=""><img src="http://placehold.it/114x106" alt=""></a>
                                    </div>
                                    <div class="col-md-7">
                                        <h4><a href="#" title="">Countries with the most billionair</a></h4>
                                        <p>Lorem ips sitamet, dipiing elit. Lorem ipsum most.  </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="recent-news">
                                <div class="row">
                                    <div class="col-md-5">
                                        <a class="news-img" href="#" title=""><img src="http://placehold.it/114x106" alt=""></a>
                                    </div>
                                    <div class="col-md-7">
                                        <h4><a href="#" title="">Countries with the most billionair</a></h4>
                                        <p>Lorem ips sitamet, dipiing elit. Lorem ipsum most.  </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="recent-news">
                                <div class="row">
                                    <div class="col-md-5">
                                        <a class="news-img" href="#" title=""><img src="http://placehold.it/114x106" alt=""></a>
                                    </div>
                                    <div class="col-md-7">
                                        <h4><a href="#" title="">Countries with the most billionair</a></h4>
                                        <p>Lorem ips sitamet, dipiing elit. Lorem ipsum most.  </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="recent-events">
                    <div class="sec-title">
                        <h2>Upcoming <span>Events</span></h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="event">
                                <div class="event-thumb">
                                    <img src="http://placehold.it/270x133" alt="" />
                                    <div class="counter">
                                        <div class="count-down"></div>
                                    </div>
                                </div>
                                <div class="event-intro">
                                    <h5><a href="single-post-image.html" title="">Countries with the most billionair</a></h5>
                                    <a href="#" title=""><i class="icon-calendar-empty"></i><span>June</span> 14,2013</a>
                                    <a href="#" title=""><i class="icon-map-marker"></i>In South Africa</a>
                                </div>
                            </div><!-- Event -->
                        </div>
                        <div class="col-md-6">
                            <div class="event">
                                <div class="event-thumb">
                                    <img src="http://placehold.it/270x133" alt="" />
                                    <div class="counter">
                                        <div class="count-down2"></div>
                                    </div>
                                </div>
                                <div class="event-intro">
                                    <h5><a href="single-post-image.html" title="">Countries with the most billionair</a></h5>
                                    <a href="#" title=""><i class="icon-calendar-empty"></i><span>June</span> 14,2013</a>
                                    <a href="#" title=""><i class="icon-map-marker"></i>In South Africa</a>
                                </div>
                            </div><!-- Event -->
                        </div>
                    </div>
                </div><!-- Recent Events -->
            </div>


        </div>
    </div>
</section>








<script>
    $(window).load(function(){
        $(\'.our-causes\').flexslider({
            animation: "slide",
            animationLoop: false,
            controlNav: true,
            maxItems: 1,
            pausePlay: false,
            mousewheel:true,
            start: function(slider){
                $(\'body\').removeClass(\'loading\');
            }
        });



        $(\'.slideshow\').flexslider({
            animation: "fade",
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

        

        $(\'.posts-carousel\').flexslider({
    animation: "slide",
    animationLoop: false,
    controlNav: false,  
    maxItems: 1,
    pausePlay: false,
    mousewheel:true,    
    start: function(slider){
      $(\'body\').removeClass(\'loading\');
    }
    });

    });

</script>
<script type="text/javascript">
    $(document).ready(function(){
        $(\'#layerslider\').layerSlider({
            skinsPath : \'http://project.helpiez/_Resources/Static/Packages/Project.Helpiez/Frontend/layerslider/skins/\',
            skin : \'defaultskin\',
            responsive: true,
            responsiveUnder: 1200,
            pauseOnHover: false,
            showCircleTimer: false,
            navStartStop:false,
            navButtons:false,
        }); // LAYER SLIDER

        $(function() {
            $(\'#carousel\').carouFredSel({
                responsive: true,
                circular: false,
                auto: false,
                items: {
                    visible: 1,
                    width: 20,
                },
                scroll: {
                    fx: \'directscroll\'
                }
            });
            $(\'#thumbs\').carouFredSel({
                responsive: true,
                circular: false,
                infinite: false,
                auto: false,
                prev: \'#prev\',
                next: \'#next\',
                items: {
                    visible: {
                        min: 1,
                        max: 6
                    },
                    width: 200,
                    height: \'80%\'
                }
            });
            $(\'#thumbs a\').click(function() {
                $(\'#carousel\').trigger(\'slideTo\', \'#\' + this.href.split(\'#\').pop() );
                $(\'#thumbs a\').removeClass(\'selected\');
                $(this).addClass(\'selected\');
                return false;
            });

        });


    });

</script>
<script>
    var child  = $("message-form").children();
    console.log(child);
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
<div id="layerslider-container-fw">
    <div id="layerslider" style="width: 100%; height: 600px; margin: 0px auto; ">

        <div class="ls-layer" style="transition2d: 5; slidedelay: 8000;" >
            <img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments23 = array();
$arguments23['path'] = 'Frontend/images/slider1.jpg';
$arguments23['package'] = NULL;
$arguments23['resource'] = NULL;
$arguments23['localize'] = true;
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper25 = $self->getViewHelper('$viewHelper25', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper25->setArguments($arguments23);
$viewHelper25->setRenderingContext($renderingContext);
$viewHelper25->setRenderChildrenClosure($renderChildrenClosure24);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output22 .= $viewHelper25->initializeArgumentsAndRender();

$output22 .= '" class="ls-bg" alt="Slide background">
            <h3 class="ls-s-1" style="top: 223px; left:248px; background: url(';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments26 = array();
$arguments26['path'] = 'Frontend/images/slider1-img2.png';
$arguments26['package'] = NULL;
$arguments26['resource'] = NULL;
$arguments26['localize'] = true;
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper28 = $self->getViewHelper('$viewHelper28', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper28->setArguments($arguments26);
$viewHelper28->setRenderingContext($renderingContext);
$viewHelper28->setRenderChildrenClosure($renderChildrenClosure27);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output22 .= $viewHelper28->initializeArgumentsAndRender();

$output22 .= ') no-repeat scroll 0 0 / auto 100% transparent; font-family:roboto; font-size:34px; font-weight:bold; color:#4c4c4c; line-height:56px; padding:0 60px 0 60px; ; border-radius:3px; delayin:500; scaleout:.5; slidedirection:fade;" ><i></h3>
            
            <p class="ls-s-1"	style="top: 360px; left:248px; font-family:roboto; font-size:13px; color:#fefefe; delayin:2000; scalein:4; slidedirection:fade; durationin : 2000;"></p>
        </div><!-- Slide1>

        <!--div class="ls-layer" style="transition2d: 45; slidedelay: 8000;" >
            <img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments29 = array();
$arguments29['path'] = 'Frontend/images/slider2.jpg';
$arguments29['package'] = NULL;
$arguments29['resource'] = NULL;
$arguments29['localize'] = true;
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper31 = $self->getViewHelper('$viewHelper31', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper31->setArguments($arguments29);
$viewHelper31->setRenderingContext($renderingContext);
$viewHelper31->setRenderChildrenClosure($renderChildrenClosure30);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output22 .= $viewHelper31->initializeArgumentsAndRender();

$output22 .= '" class="ls-bg" alt="Slide background">
            <h3 class="ls-s-3 slide3-first" style="top:296px; left:100px; font-family: roboto; color: #FFFFFF; line-height:22px; font-size:32px; background:rgba(0,0,0,0.85); padding:18px 30px; border-radius:4px 0px 0px 4px; slidedirection:right; scalein :0.5;  durationin :2000; delayin:500; showuntil:3000; slideoutdirection:right; easingin : easeOutQuad;">
                HELP <i>US</i> TO HELP OTHERS</h3>

            <h4 class="ls-s-3 slide3-second" style="top:365px; left:100px; background:rgba(152,212,96,0.85); font-family: roboto; color: #FFFFFF; font-size:28px; line-height:26px; padding:10px 20px; border-radius:4px 0px 0px 4px; slidedirection:right; scalein :0.5; durationin :2000; delayin:1000; showuntil:3500; slideoutdirection:right; easingin : easeOutQuad; ">
                RESPONSIVE <span>TEMPLATE</span></h4>

            <h5 class="ls-s-3 slide3-third" style="top:419px; left:100px; background:rgba(255,255,255,0.85); color:#595858; font-family:roboto; font-size:24px; line-height: 20px; padding:10px 20px; border-radius:4px 0px 0px 4px; slidedirection:right; scalein :0.5; durationin :2000; delayin:1500;  showuntil:4000; slideoutdirection:right; easingin : easeOutQuad;">
                CREATIVE <span>IDEAS</span></h5>

        </div><!-- Slide2 -->

        <!--div class="ls-layer" style="transition2d: 77; slidedelay: 8000;" >
            <img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments32 = array();
$arguments32['path'] = 'Frontend/images/slider3.jpg';
$arguments32['package'] = NULL;
$arguments32['resource'] = NULL;
$arguments32['localize'] = true;
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper34 = $self->getViewHelper('$viewHelper34', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper34->setArguments($arguments32);
$viewHelper34->setRenderingContext($renderingContext);
$viewHelper34->setRenderChildrenClosure($renderChildrenClosure33);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output22 .= $viewHelper34->initializeArgumentsAndRender();

$output22 .= '" class="ls-bg" alt="Slide background">
            <h3 class="ls-s-2" style="top: 260px;left:230px; font-family:roboto; font-size:72px; font-weight:bold; color:#fff; line-height:60px; delayin:500; scaleout:.5; slidedirection:fade;" >I WANNA SAY <span>SOMETHING</span></h3>

            <span class="ls-s-2" style="top: 348px; left:230px; background:#9bd362; padding:13px; border-radius:3px; color:#fff; font-family:open sans; font-weight:900; font-size:26px; text-transform:uppercase; line-height:20px; delayin:1000; showuntil:3000; slidedirection:fade; scalein : .8; durationin : 1750; scaleout : .8;">Please Feel My <i style="font-style:normal; color:#373737;">Tension</i></span>

            <span class="ls-s-2" style="top: 348px; left:807px; background:rgba(0,0,0,0.8); padding:13px; border-radius:3px; color:#fff; font-family:open sans; font-weight:900; font-size:26px; text-transform:uppercase; line-height:20px; delayin:1500; showuntil:3500; slidedirection:fade; scalein : .8; durationin : 1750; scaleout : .8;">We <i style="font-style:normal; color:#98d460;">Need</i> Your Help</span>
        </div><!-- Slide3 -->


        <!--div class="ls-layer" style="transition2d: 32; slidedelay: 8000;" >
            <img src="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper
$arguments35 = array();
$arguments35['path'] = 'Frontend/images/slider4.jpg';
$arguments35['package'] = NULL;
$arguments35['resource'] = NULL;
$arguments35['localize'] = true;
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper37 = $self->getViewHelper('$viewHelper37', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper');
$viewHelper37->setArguments($arguments35);
$viewHelper37->setRenderingContext($renderingContext);
$viewHelper37->setRenderChildrenClosure($renderChildrenClosure36);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Uri\ResourceViewHelper

$output22 .= $viewHelper37->initializeArgumentsAndRender();

$output22 .= '" class="ls-bg" alt="Slide background">

            <h3 class="ls-s-4" style="top:280px; left:180px; background:rgba(0,0,0,0.9); font-family:roboto; font-size:36px; font-weight:bold; color:#fefefe; padding:20px 60px 20px; border-radius:4px; slidedirection:bottom; scalein :0; easingin : easeOutQuad; durationin :2000; delayin:500;">
                SAVE THE <i>WORLD</i></h3>

            <span class="ls-s-4" style="top:380px; left:245px; background: none repeat scroll 0 0 #95D05E;border-radius: 4px 4px 0 0; color: #FFFFFF;font-family: open sans;font-size: 13px;font-weight: bold; padding: 5px 10px; slidedirection:top; scalein :0; durationin :2500;">Want To Know Why And How We Do It?</span>

            <h4 class="ls-s-4" style="top:415px; left:130px; color:#030303; font-family:source sans pro; font-size:20px; font-weight:700; slidedirection:fade; scalein :0; durationin :2000; delayin:2000;">OUR CHARITY HELPS THOSE PEOPLE WHO HAVE NO HOPE</h4>

            <p class="ls-s-4" style="top:450px; left:70px; font-family:roboto; font-size:14px; color:#030303; slidedirection:fade; scalein :2; durationin :2000; delayin:4000;">Sed interdum, lacus et vulputate pellentesque, velit nulla commodo sem, at egestas nulla metus.</p>

        </div><!-- Slide4 -->

    </div>

    <div class="col-md-8 col-md-offset-3 col-sm-8 col-sm-offset-2 search-dialog form">
        <div class="message-box-title opened" style="background:transparent" >
            <form action="search.php" method="post">
                <ul style="display:inline-block">
                    <li class="search-list">
                        <select class="form-control" style="width:110%">
                        <option>Non - Profits</option>
                        <option selected="true">Opportunity</option>
                        <option>Stories</option>
                        </select>
                    </li>
                    <li class="search-list">
                        <input name="search" class="form-control" style="width:90%;display:inline" type="text" placeholder="Enter Name, Address or Keywords to find NGO"/>
                        
                    </li>
                    <li class="search-list">
                        <span style="padding-left:10px;margin-top:5px">
                            <i class="icon-search" style="font-size:2em"></i>
                        </span>
                    </li>
                <ul>
            </form>
        </div>
        <!--div class="message-form" style="display:block">
            <p></p>
            <div id="message"></div>
            <form method="post" action="contact.php" name="contactform" id="contactform">
                <input name="name" class="form-control" type="text" id="name" size="30" value=""  placeholder="Enter Name, Address or Keywords to find NGO" />

                <input type="submit" class="submit-btn submit" id="submit" value="SEND MESSAGE" />
            </form>
        </div-->
    </div><!-- Message Box -->

</div><!-- Layer Slider -->
<section class="block">
    <div class="container">
        <div class="row">
            <div class="fixed-bg " style="background:url(images/moving-bg.png) no-repeat scroll 0 0 transparent; background-attachment:fixed; background-size:cover;"></div>
            <div class="col-md-12">
            <div class="sec-heading">
                <h2><strong>Our </strong>Causes</h2>
            </div>          
            <div class="posts-carousel">
                <ul class="slides">
                    <li>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="carou-post">
                                <div class="carou-post-img">
                                    <img src="http://placehold.it/270x235" alt="" />
                                    <a title="This Is a Demo Video" href="http://player.vimeo.com/video/31943945?color=ffffff" class="html5lightbox"><i class="icon-play"></i></a>
                                </div>
                                <h4>Development</h4>
                                <p>Since 2008, the number of mothers dying in childbirth has fallen by 50% in Mozambique - thanks to international aid.</p>
                                <a href="single-post-video.html" title="">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="carou-post">
                                <div id="layerslider-container-fw">
                                    <div id="layerslider2" style="width: 100%; height: 100%;">
                                        <div class="ls-layer" style="transition2d: 5; slidedelay: 8000;" >          
                                            <img src="http://placehold.it/270x235" class="ls-bg" alt="Slide background">
                                        </div><!-- Slide1 -->
                                        <div class="ls-layer" style="transition2d: 77; slidedelay: 8000;" >         
                                            <img src="http://placehold.it/270x235" class="ls-bg" alt="Slide background">
                                        </div><!-- Slide2 -->
                                    </div>
                                </div><!-- Layer Slider -->     
                                <h4>Women\'s Right</h4>
                                <p>Since 2008, the number of mothers dying in childbirth has fallen by 50% in Mozambique - thanks to international aid.</p>
                                <a href="single-post-slider.html" title="">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="carou-post">
                                <div class="carou-post-img">
                                    <img src="http://placehold.it/270x235" alt="" />
                                    <a title="" href="images/blank-image.jpg" class="html5lightbox"><i class="icon-picture"></i></a>
                                </div>
                                <h4>Food</h4>
                                <p>Since 2008, the number of mothers dying in childbirth has fallen by 50% in Mozambique - thanks to international aid.</p>
                                <a href="single-post-image.html" title="">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="carou-post">
                                <div class="carou-post-img">
                                    <img src="http://placehold.it/270x235" alt="" />
                                    <a title="This Is a Demo Video" href="http://player.vimeo.com/video/31943945?color=ffffff" class="html5lightbox"><i class="icon-play"></i></a>
                                </div>
                                <h4>Education</h4>
                                <p>Since 2008, the number of mothers dying in childbirth has fallen by 50% in Mozambique - thanks to international aid.</p>
                                <a href="single-post-video.html" title="">Read More</a>
                            </div>
                        </div>
                    </div>
                    </li>
                    <li>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="carou-post">
                                <div class="carou-post-img">
                                    <img src="http://placehold.it/270x235" alt="" />
                                    <a title="This Is a Demo Video" href="http://player.vimeo.com/video/31943945?color=ffffff" class="html5lightbox"><i class="icon-play"></i></a>
                                </div>
                                <h4>Development</h4>
                                <p>Since 2008, the number of mothers dying in childbirth has fallen by 50% in Mozambique - thanks to international aid.</p>
                                <a href="single-post-video.html" title="">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="carou-post">
                                <div id="layerslider-container-fw">
                                    <div id="layerslider3" style="width: 100%; height: 100%;">
                                        <div class="ls-layer" style="transition2d: 5; slidedelay: 8000;" >          
                                            <img src="http://placehold.it/270x235" class="ls-bg" alt="Slide background">
                                        </div><!-- Slide1 -->
                                        <div class="ls-layer" style="transition2d: 77; slidedelay: 8000;" >         
                                            <img src="http://placehold.it/270x235" class="ls-bg" alt="Slide background">
                                        </div><!-- Slide2 -->
                                    </div>
                                </div><!-- Layer Slider -->     
                                <h4>Women\'s Right</h4>
                                <p>Since 2008, the number of mothers dying in childbirth has fallen by 50% in Mozambique - thanks to international aid.</p>
                                <a href="single-post-slider.html" title="">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="carou-post">
                                <div class="carou-post-img">
                                    <img src="http://placehold.it/270x235" alt="" />
                                    <a title="" href="images/blank-image.jpg" class="html5lightbox"><i class="icon-picture"></i></a>
                                </div>
                                <h4>Food</h4>
                                <p>Since 2008, the number of mothers dying in childbirth has fallen by 50% in Mozambique - thanks to international aid.</p>
                                <a href="single-post-image.html" title="">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="carou-post">
                                <div class="carou-post-img">
                                    <img src="http://placehold.it/270x235" alt="" />
                                    <a title="This Is a Demo Video" href="http://player.vimeo.com/video/31943945?color=ffffff" class="html5lightbox"><i class="icon-play"></i></a>
                                </div>
                                <h4>Education</h4>
                                <p>Since 2008, the number of mothers dying in childbirth has fallen by 50% in Mozambique - thanks to international aid.</p>
                                <a href="single-post-video.html" title="">Read More</a>
                            </div>
                        </div>
                    </div>
                    </li>
                </ul>
            </div>
            </div>
        </div>
    </div>
</section>

<section class="block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 column">
                <div class="sec-title">
                    <h2>Recent <span>News</span></h2>
                </div>      

                <div class="remove-ext">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="recent-news">
                                <div class="row">
                                    <div class="col-md-5">
                                        <a class="news-img" href="#" title=""><img src="http://placehold.it/114x106" alt=""></a>
                                    </div>
                                    <div class="col-md-7">
                                        <h4><a href="#" title="">Countries with the most billionair</a></h4>
                                        <p>Lorem ips sitamet, dipiing elit. Lorem ipsum most.  </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="recent-news">
                                <div class="row">
                                    <div class="col-md-5">
                                        <a class="news-img" href="#" title=""><img src="http://placehold.it/114x106" alt=""></a>
                                    </div>
                                    <div class="col-md-7">
                                        <h4><a href="#" title="">Countries with the most billionair</a></h4>
                                        <p>Lorem ips sitamet, dipiing elit. Lorem ipsum most.  </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="recent-news">
                                <div class="row">
                                    <div class="col-md-5">
                                        <a class="news-img" href="#" title=""><img src="http://placehold.it/114x106" alt=""></a>
                                    </div>
                                    <div class="col-md-7">
                                        <h4><a href="#" title="">Countries with the most billionair</a></h4>
                                        <p>Lorem ips sitamet, dipiing elit. Lorem ipsum most.  </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="recent-news">
                                <div class="row">
                                    <div class="col-md-5">
                                        <a class="news-img" href="#" title=""><img src="http://placehold.it/114x106" alt=""></a>
                                    </div>
                                    <div class="col-md-7">
                                        <h4><a href="#" title="">Countries with the most billionair</a></h4>
                                        <p>Lorem ips sitamet, dipiing elit. Lorem ipsum most.  </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="recent-events">
                    <div class="sec-title">
                        <h2>Upcoming <span>Events</span></h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="event">
                                <div class="event-thumb">
                                    <img src="http://placehold.it/270x133" alt="" />
                                    <div class="counter">
                                        <div class="count-down"></div>
                                    </div>
                                </div>
                                <div class="event-intro">
                                    <h5><a href="single-post-image.html" title="">Countries with the most billionair</a></h5>
                                    <a href="#" title=""><i class="icon-calendar-empty"></i><span>June</span> 14,2013</a>
                                    <a href="#" title=""><i class="icon-map-marker"></i>In South Africa</a>
                                </div>
                            </div><!-- Event -->
                        </div>
                        <div class="col-md-6">
                            <div class="event">
                                <div class="event-thumb">
                                    <img src="http://placehold.it/270x133" alt="" />
                                    <div class="counter">
                                        <div class="count-down2"></div>
                                    </div>
                                </div>
                                <div class="event-intro">
                                    <h5><a href="single-post-image.html" title="">Countries with the most billionair</a></h5>
                                    <a href="#" title=""><i class="icon-calendar-empty"></i><span>June</span> 14,2013</a>
                                    <a href="#" title=""><i class="icon-map-marker"></i>In South Africa</a>
                                </div>
                            </div><!-- Event -->
                        </div>
                    </div>
                </div><!-- Recent Events -->
            </div>


        </div>
    </div>
</section>








<script>
    $(window).load(function(){
        $(\'.our-causes\').flexslider({
            animation: "slide",
            animationLoop: false,
            controlNav: true,
            maxItems: 1,
            pausePlay: false,
            mousewheel:true,
            start: function(slider){
                $(\'body\').removeClass(\'loading\');
            }
        });



        $(\'.slideshow\').flexslider({
            animation: "fade",
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

        

        $(\'.posts-carousel\').flexslider({
    animation: "slide",
    animationLoop: false,
    controlNav: false,  
    maxItems: 1,
    pausePlay: false,
    mousewheel:true,    
    start: function(slider){
      $(\'body\').removeClass(\'loading\');
    }
    });

    });

</script>
<script type="text/javascript">
    $(document).ready(function(){
        $(\'#layerslider\').layerSlider({
            skinsPath : \'http://project.helpiez/_Resources/Static/Packages/Project.Helpiez/Frontend/layerslider/skins/\',
            skin : \'defaultskin\',
            responsive: true,
            responsiveUnder: 1200,
            pauseOnHover: false,
            showCircleTimer: false,
            navStartStop:false,
            navButtons:false,
        }); // LAYER SLIDER

        $(function() {
            $(\'#carousel\').carouFredSel({
                responsive: true,
                circular: false,
                auto: false,
                items: {
                    visible: 1,
                    width: 20,
                },
                scroll: {
                    fx: \'directscroll\'
                }
            });
            $(\'#thumbs\').carouFredSel({
                responsive: true,
                circular: false,
                infinite: false,
                auto: false,
                prev: \'#prev\',
                next: \'#next\',
                items: {
                    visible: {
                        min: 1,
                        max: 6
                    },
                    width: 200,
                    height: \'80%\'
                }
            });
            $(\'#thumbs a\').click(function() {
                $(\'#carousel\').trigger(\'slideTo\', \'#\' + this.href.split(\'#\').pop() );
                $(\'#thumbs a\').removeClass(\'selected\');
                $(this).addClass(\'selected\');
                return false;
            });

        });


    });

</script>
<script>
    var child  = $("message-form").children();
    console.log(child);
</script>
';
return $output22;
};

$output16 .= '';

$output16 .= '
</html>';

return $output16;
}


}
#0             57713     