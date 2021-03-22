<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* F:\wamp64\www\piscine/themes/vreedom18-bingo/partials/index/testimonial.htm */
class __TwigTemplate_917801c8a6d9654d65aa7e4d42852fbc82f7a5ec6f88ae357d6586aea98c3ce9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array();
        $filters = array("theme" => 22);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<section class=\"testimonial section\" id=\"testimonial\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <!-- testimonial wrapper -->
                <div class=\"testimonial-slider\">
                    <!-- testimonial single -->
                    <div class=\"item text-center\">
                        <i class=\"tf-ion-chatbubbles\"></i>
                        <!-- client info -->
                        <div class=\"client-details\">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos
                                earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates
                                alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?
                            </p>
                        </div>
                        <!-- /client info -->
                        <!-- client photo -->
                        <div class=\"client-thumb\">
                            <img loading=\"lazy\" src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/client-logo/clients-1.jpg");
        echo "\"
                                class=\"img-fluid\" alt=\"\">
                        </div>
                        <div class=\"client-meta\">
                            <h3>William Martin</h3>
                            <span>CEO , Company Name</span>
                        </div>
                        <!-- /client photo -->
                    </div>
                    <!-- /testimonial single -->

                    <!-- testimonial single -->
                    <div class=\"item text-center\">
                        <i class=\"tf-ion-chatbubbles\"></i>
                        <!-- client info -->
                        <div class=\"client-details\">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos
                                earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates
                                alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?
                            </p>
                        </div>
                        <!-- /client info -->
                        <!-- client photo -->
                        <div class=\"client-thumb\">
                            <img loading=\"lazy\" src=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/client-logo/clients-2.jpg");
        echo "\"
                                class=\"img-fluid\" alt=\"\">
                        </div>
                        <div class=\"client-meta\">
                            <h3>Emma Harrison</h3>
                            <span>CEO , Company Name</span>
                        </div>
                        <!-- /client photo -->
                    </div>
                    <!-- /testimonial single -->

                    <!-- testimonial single -->
                    <div class=\"item text-center\">
                        <i class=\"tf-ion-chatbubbles\"></i>
                        <!-- client info -->
                        <div class=\"client-details\">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos
                                earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates
                                alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?
                            </p>
                        </div>
                        <!-- /client info -->
                        <!-- client photo -->
                        <div class=\"client-thumb\">
                            <img loading=\"lazy\" src=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/client-logo/clients-3.jpg");
        echo "\"
                                class=\"img-fluid\" alt=\"\">
                        </div>
                        <div class=\"client-meta\">
                            <h3>Alexander Lucas</h3>
                            <span>CEO , Company Name</span>
                        </div>
                        <!-- /client photo -->
                    </div>
                    <!-- /testimonial single -->
                </div>
            </div> <!-- end col lg 12 -->
        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- End Section -->";
    }

    public function getTemplateName()
    {
        return "F:\\wamp64\\www\\piscine/themes/vreedom18-bingo/partials/index/testimonial.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 74,  114 => 48,  85 => 22,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"testimonial section\" id=\"testimonial\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <!-- testimonial wrapper -->
                <div class=\"testimonial-slider\">
                    <!-- testimonial single -->
                    <div class=\"item text-center\">
                        <i class=\"tf-ion-chatbubbles\"></i>
                        <!-- client info -->
                        <div class=\"client-details\">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos
                                earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates
                                alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?
                            </p>
                        </div>
                        <!-- /client info -->
                        <!-- client photo -->
                        <div class=\"client-thumb\">
                            <img loading=\"lazy\" src=\"{{ 'assets/images/client-logo/clients-1.jpg'|theme }}\"
                                class=\"img-fluid\" alt=\"\">
                        </div>
                        <div class=\"client-meta\">
                            <h3>William Martin</h3>
                            <span>CEO , Company Name</span>
                        </div>
                        <!-- /client photo -->
                    </div>
                    <!-- /testimonial single -->

                    <!-- testimonial single -->
                    <div class=\"item text-center\">
                        <i class=\"tf-ion-chatbubbles\"></i>
                        <!-- client info -->
                        <div class=\"client-details\">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos
                                earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates
                                alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?
                            </p>
                        </div>
                        <!-- /client info -->
                        <!-- client photo -->
                        <div class=\"client-thumb\">
                            <img loading=\"lazy\" src=\"{{ 'assets/images/client-logo/clients-2.jpg'|theme }}\"
                                class=\"img-fluid\" alt=\"\">
                        </div>
                        <div class=\"client-meta\">
                            <h3>Emma Harrison</h3>
                            <span>CEO , Company Name</span>
                        </div>
                        <!-- /client photo -->
                    </div>
                    <!-- /testimonial single -->

                    <!-- testimonial single -->
                    <div class=\"item text-center\">
                        <i class=\"tf-ion-chatbubbles\"></i>
                        <!-- client info -->
                        <div class=\"client-details\">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos
                                earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates
                                alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?
                            </p>
                        </div>
                        <!-- /client info -->
                        <!-- client photo -->
                        <div class=\"client-thumb\">
                            <img loading=\"lazy\" src=\"{{ 'assets/images/client-logo/clients-3.jpg'|theme }}\"
                                class=\"img-fluid\" alt=\"\">
                        </div>
                        <div class=\"client-meta\">
                            <h3>Alexander Lucas</h3>
                            <span>CEO , Company Name</span>
                        </div>
                        <!-- /client photo -->
                    </div>
                    <!-- /testimonial single -->
                </div>
            </div> <!-- end col lg 12 -->
        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- End Section -->", "F:\\wamp64\\www\\piscine/themes/vreedom18-bingo/partials/index/testimonial.htm", "");
    }
}
