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

/* F:\wamp64\www\piscine/themes/vreedom18-bingo/partials/index/about.htm */
class __TwigTemplate_d437720252389f64824dddf75f508a98b61b1710a57ff7db10ef89c57070d0b9 extends \Twig\Template
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
        $filters = array("theme" => 21);
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
        echo "<section class=\"about-2 section\" id=\"about\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <!-- section title -->
            <div class=\"col-lg-6\">
                <div class=\"title text-center\">
                    <h2>We Are Bingo Agency</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam reprehenderit accusamus
                        labore iusto, aut, eum itaque illo totam tempora eius.
                    </p>
                    <div class=\"border\"></div>
                </div>
            </div>
            <!-- /section title -->
        </div>

        <div class=\"row\">

            <div class=\"col-md-6 mb-4 mb-md-0\">
                <img loading=\"lazy\" src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about/about-2.png");
        echo "\" class=\"img-fluid\" alt=\"\">
            </div>
            <div class=\"col-md-6\">
                <ul class=\"checklist\">
                    <li>Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem laca quam venenatis vestibulum.
                    </li>
                    <li>Aenean quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
                    <li>Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem laca quam venenatis vestibulum.
                    </li>
                    <li>Etiam porta sem multipage evint landing magna mollis euismod a pharetra augue.</li>
                    <li>Aenean quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
                </ul>
                <a href=\"about.html\" class=\"btn btn-main mt-20\">Learn More</a>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- End section -->";
    }

    public function getTemplateName()
    {
        return "F:\\wamp64\\www\\piscine/themes/vreedom18-bingo/partials/index/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 21,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"about-2 section\" id=\"about\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <!-- section title -->
            <div class=\"col-lg-6\">
                <div class=\"title text-center\">
                    <h2>We Are Bingo Agency</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam reprehenderit accusamus
                        labore iusto, aut, eum itaque illo totam tempora eius.
                    </p>
                    <div class=\"border\"></div>
                </div>
            </div>
            <!-- /section title -->
        </div>

        <div class=\"row\">

            <div class=\"col-md-6 mb-4 mb-md-0\">
                <img loading=\"lazy\" src=\"{{ 'assets/images/about/about-2.png'|theme }}\" class=\"img-fluid\" alt=\"\">
            </div>
            <div class=\"col-md-6\">
                <ul class=\"checklist\">
                    <li>Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem laca quam venenatis vestibulum.
                    </li>
                    <li>Aenean quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
                    <li>Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem laca quam venenatis vestibulum.
                    </li>
                    <li>Etiam porta sem multipage evint landing magna mollis euismod a pharetra augue.</li>
                    <li>Aenean quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
                </ul>
                <a href=\"about.html\" class=\"btn btn-main mt-20\">Learn More</a>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- End section -->", "F:\\wamp64\\www\\piscine/themes/vreedom18-bingo/partials/index/about.htm", "");
    }
}
