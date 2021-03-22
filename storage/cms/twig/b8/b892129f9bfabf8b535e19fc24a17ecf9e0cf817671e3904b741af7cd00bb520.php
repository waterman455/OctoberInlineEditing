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

/* F:\wamp64\www\piscine/themes/vreedom18-bingo/partials/about/promo-video.htm */
class __TwigTemplate_10f5f9153062a6bc9c656cbee27bf84f2532410a9a3b54138cd9b964ebac9984 extends \Twig\Template
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
        echo "<section class=\"promo-video section-sm\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <!-- section title -->
            <div class=\"col-xl-6 col-lg-8\">
                <div class=\"title text-center\">
                    <h2>Notre vidéo promotionnelle</h2>
                    <p>
                        Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu.Sed condimentum
                    </p>
                    <div class=\"border\"></div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <!-- /section title -->
            <div class=\"col-md-8 mx-auto\">
<iframe width=\"100%\" height=\"360\" src=\"https://www.youtube.com/embed/MzbtgU0YeiY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "F:\\wamp64\\www\\piscine/themes/vreedom18-bingo/partials/about/promo-video.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"promo-video section-sm\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <!-- section title -->
            <div class=\"col-xl-6 col-lg-8\">
                <div class=\"title text-center\">
                    <h2>Notre vidéo promotionnelle</h2>
                    <p>
                        Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu.Sed condimentum
                    </p>
                    <div class=\"border\"></div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <!-- /section title -->
            <div class=\"col-md-8 mx-auto\">
<iframe width=\"100%\" height=\"360\" src=\"https://www.youtube.com/embed/MzbtgU0YeiY\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>", "F:\\wamp64\\www\\piscine/themes/vreedom18-bingo/partials/about/promo-video.htm", "");
    }
}
