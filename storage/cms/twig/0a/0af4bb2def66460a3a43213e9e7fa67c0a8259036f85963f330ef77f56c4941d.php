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

/* F:\wamp64\www\piscine/themes/vreedom18-bingo/partials/index/service.htm */
class __TwigTemplate_1f59ad5eadf965d6b19e1f307fc6fb9ba00016613961310be261e2ced6296957 extends \Twig\Template
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
        $filters = array("theme" => 19);
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
        echo "<section class=\"service-2 section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">

            <div class=\"col-lg-6\">
                <!-- section title -->
                <div class=\"title text-center\">
                    <h2>What Do We Offer</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Voluptates, earum. </p>
                    <div class=\"border\"></div>
                </div>
                <!-- /section title -->
            </div>
        </div>
        <div class=\"row\">

            <div class=\"col-md-4 text-center d-none d-md-block\">
                <img loading=\"lazy\" src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about/member.jpg");
        echo "\" class=\"img-fluid inline-block\" alt=\"\">
            </div>
            <div class=\"col-md-8\">
                <div class=\"row text-center\">
                    <div class=\"col-md-6 col-sm-6\">
                        <div class=\"service-item\">
                            <i class=\"tf-ion-ios-alarm-outline\"></i>
                            <h4>Time Management</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui
                                venenatis.</p>
                        </div>
                    </div><!-- END COL -->
                    <div class=\"col-md-6 col-sm-6\">
                        <div class=\"service-item\">
                            <i class=\"tf-ion-ios-briefcase-outline\"></i>
                            <h4>Marketing Ideas</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui
                                venenatis.</p>
                        </div>
                    </div><!-- END COL -->
                    <div class=\"col-md-6 col-sm-6\">
                        <div class=\"service-item\">
                            <i class=\"tf-ion-ios-email-outline\"></i>
                            <h4>Mail Support</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui
                                venenatis.</p>
                        </div>
                    </div><!-- END COL -->
                    <div class=\"col-md-6 col-sm-6\">
                        <div class=\"service-item\">
                            <i class=\"tf-ion-ios-locked-outline\"></i>
                            <h4>Secure System</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui
                                venenatis.</p>
                        </div>
                    </div><!-- END COL -->
                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- End section -->";
    }

    public function getTemplateName()
    {
        return "F:\\wamp64\\www\\piscine/themes/vreedom18-bingo/partials/index/service.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"service-2 section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">

            <div class=\"col-lg-6\">
                <!-- section title -->
                <div class=\"title text-center\">
                    <h2>What Do We Offer</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Voluptates, earum. </p>
                    <div class=\"border\"></div>
                </div>
                <!-- /section title -->
            </div>
        </div>
        <div class=\"row\">

            <div class=\"col-md-4 text-center d-none d-md-block\">
                <img loading=\"lazy\" src=\"{{ 'assets/images/about/member.jpg'|theme }}\" class=\"img-fluid inline-block\" alt=\"\">
            </div>
            <div class=\"col-md-8\">
                <div class=\"row text-center\">
                    <div class=\"col-md-6 col-sm-6\">
                        <div class=\"service-item\">
                            <i class=\"tf-ion-ios-alarm-outline\"></i>
                            <h4>Time Management</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui
                                venenatis.</p>
                        </div>
                    </div><!-- END COL -->
                    <div class=\"col-md-6 col-sm-6\">
                        <div class=\"service-item\">
                            <i class=\"tf-ion-ios-briefcase-outline\"></i>
                            <h4>Marketing Ideas</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui
                                venenatis.</p>
                        </div>
                    </div><!-- END COL -->
                    <div class=\"col-md-6 col-sm-6\">
                        <div class=\"service-item\">
                            <i class=\"tf-ion-ios-email-outline\"></i>
                            <h4>Mail Support</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui
                                venenatis.</p>
                        </div>
                    </div><!-- END COL -->
                    <div class=\"col-md-6 col-sm-6\">
                        <div class=\"service-item\">
                            <i class=\"tf-ion-ios-locked-outline\"></i>
                            <h4>Secure System</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui
                                venenatis.</p>
                        </div>
                    </div><!-- END COL -->
                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- End section -->", "F:\\wamp64\\www\\piscine/themes/vreedom18-bingo/partials/index/service.htm", "");
    }
}
