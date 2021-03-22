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

/* F:\wamp64\www\piscine/themes/vreedom18-bingo/pages/404.htm */
class __TwigTemplate_e42a02ab5d3cdcd1d98565e38babf8769f814f72c83bdf761a7cf117d189fc65 extends \Twig\Template
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
        $filters = array("page" => 8);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page'],
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
        echo "<section class=\"page-404 section text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1>404</h1>
                <h2>Page Not Found</h2>
                <p>Sorry, but the page you were trying to view does not exist.</p>
                <a href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\" class=\"btn btn-main mt-20\">Go Home</a>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "F:\\wamp64\\www\\piscine/themes/vreedom18-bingo/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 8,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"page-404 section text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1>404</h1>
                <h2>Page Not Found</h2>
                <p>Sorry, but the page you were trying to view does not exist.</p>
                <a href=\"{{ 'index'|page }}\" class=\"btn btn-main mt-20\">Go Home</a>
            </div>
        </div>
    </div>
</section>", "F:\\wamp64\\www\\piscine/themes/vreedom18-bingo/pages/404.htm", "");
    }
}
