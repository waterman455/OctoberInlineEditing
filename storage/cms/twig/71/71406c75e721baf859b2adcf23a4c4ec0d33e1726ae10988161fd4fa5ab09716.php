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

/* F:\wamp64\www\piscine/themes/vreedom18-bingo/partials/site/sp-header.htm */
class __TwigTemplate_4e7865449a2fec3f00efce3cc6145ad00566777c1d21f194d6131bc82246e967 extends \Twig\Template
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
        $filters = array("escape" => 5, "page" => 7);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'page'],
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
        echo "<section class=\"single-page-header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h2>";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 5), "title", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</h2>
                <ol class=\"breadcrumb header-bradcrumb justify-content-center\">
                    <li class=\"breadcrumb-item\"><a href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\" class=\"text-white\">Home</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 8), "title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "</li>
                </ol>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "F:\\wamp64\\www\\piscine/themes/vreedom18-bingo/partials/site/sp-header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 8,  73 => 7,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"single-page-header\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h2>{{ this.page.title }}</h2>
                <ol class=\"breadcrumb header-bradcrumb justify-content-center\">
                    <li class=\"breadcrumb-item\"><a href=\"{{ 'index'|page }}\" class=\"text-white\">Home</a></li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">{{ this.page.title }}</li>
                </ol>
            </div>
        </div>
    </div>
</section>", "F:\\wamp64\\www\\piscine/themes/vreedom18-bingo/partials/site/sp-header.htm", "");
    }
}
