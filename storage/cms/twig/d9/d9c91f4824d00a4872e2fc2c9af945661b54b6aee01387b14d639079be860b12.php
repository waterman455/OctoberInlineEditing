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

/* F:\wamp64\www\piscine/themes/vreedom18-bingo/partials/index/counter.htm */
class __TwigTemplate_6c0ffc440b5897de45046aee65746968948c17b424a8ba2929c9a767c9dc97a0 extends \Twig\Template
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
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
        echo "<section class=\"counter-wrapper section-sm\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-6 col-lg-8 text-center\">
                <div class=\"title\">
                    <h2>Award-Winning Agency</h2>
                    <p>
                        Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu. Sed condimentum
                        iaculis ex, in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a
                        risus luctus dignissim.
                    </p>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <!-- first count item -->
            <div class=\"col-md-3 col-sm-6 col-xs-6 text-center \">
                <div class=\"counters-item\">
                    <i class=\"tf-ion-ios-alarm-outline\"></i>
                    <div>
                        <span class=\"counter\" data-count=\"150\">0</span>
                    </div>
                    <h3>Happy Clients</h3>
                </div>
            </div>
            <!-- end first count item -->

            <!-- second count item -->
            <div class=\"col-md-3 col-sm-6 col-xs-6 text-center \">
                <div class=\"counters-item\">
                    <i class=\"tf-ion-ios-analytics-outline\"></i>
                    <div>
                        <span class=\"counter\" data-count=\"130\">0</span>
                    </div>
                    <h3>Projects completed</h3>
                </div>
            </div>
            <!-- end second count item -->

            <!-- third count item -->
            <div class=\"col-md-3 col-sm-6 col-xs-6 text-center \">
                <div class=\"counters-item\">
                    <i class=\"tf-ion-ios-compose-outline\"></i>
                    <div>
                        <span class=\"counter\" data-count=\"99\">0</span>
                    </div>
                    <h3>Positive feedback</h3>

                </div>
            </div>
            <!-- end third count item -->

            <!-- fourth count item -->
            <div class=\"col-md-3 col-sm-6 col-xs-6 text-center \">
                <div class=\"counters-item kill-border\">
                    <i class=\"tf-ion-ios-bolt-outline\"></i>
                    <div>
                        <span class=\"counter\" data-count=\"250\">0</span>
                    </div>
                    <h3>Cups of Coffee</h3>
                </div>
            </div>
            <!-- end fourth count item -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end section -->";
    }

    public function getTemplateName()
    {
        return "F:\\wamp64\\www\\piscine/themes/vreedom18-bingo/partials/index/counter.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"counter-wrapper section-sm\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-6 col-lg-8 text-center\">
                <div class=\"title\">
                    <h2>Award-Winning Agency</h2>
                    <p>
                        Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu. Sed condimentum
                        iaculis ex, in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a
                        risus luctus dignissim.
                    </p>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <!-- first count item -->
            <div class=\"col-md-3 col-sm-6 col-xs-6 text-center \">
                <div class=\"counters-item\">
                    <i class=\"tf-ion-ios-alarm-outline\"></i>
                    <div>
                        <span class=\"counter\" data-count=\"150\">0</span>
                    </div>
                    <h3>Happy Clients</h3>
                </div>
            </div>
            <!-- end first count item -->

            <!-- second count item -->
            <div class=\"col-md-3 col-sm-6 col-xs-6 text-center \">
                <div class=\"counters-item\">
                    <i class=\"tf-ion-ios-analytics-outline\"></i>
                    <div>
                        <span class=\"counter\" data-count=\"130\">0</span>
                    </div>
                    <h3>Projects completed</h3>
                </div>
            </div>
            <!-- end second count item -->

            <!-- third count item -->
            <div class=\"col-md-3 col-sm-6 col-xs-6 text-center \">
                <div class=\"counters-item\">
                    <i class=\"tf-ion-ios-compose-outline\"></i>
                    <div>
                        <span class=\"counter\" data-count=\"99\">0</span>
                    </div>
                    <h3>Positive feedback</h3>

                </div>
            </div>
            <!-- end third count item -->

            <!-- fourth count item -->
            <div class=\"col-md-3 col-sm-6 col-xs-6 text-center \">
                <div class=\"counters-item kill-border\">
                    <i class=\"tf-ion-ios-bolt-outline\"></i>
                    <div>
                        <span class=\"counter\" data-count=\"250\">0</span>
                    </div>
                    <h3>Cups of Coffee</h3>
                </div>
            </div>
            <!-- end fourth count item -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end section -->", "F:\\wamp64\\www\\piscine/themes/vreedom18-bingo/partials/index/counter.htm", "");
    }
}
