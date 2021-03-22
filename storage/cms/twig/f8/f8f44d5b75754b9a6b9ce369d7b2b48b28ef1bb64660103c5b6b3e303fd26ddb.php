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

/* F:\wamp64\www\piscine/themes/vreedom18-bingo/partials/site/header.htm */
class __TwigTemplate_a3787c4f56b3d359378a4343cd322cfbeed5f353e108d682a1dac1cc4089a9ea extends \Twig\Template
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
        $tags = array("if" => 21);
        $filters = array("page" => 9, "theme" => 10);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['page', 'theme'],
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
        echo "<!--
Fixed Navigation
==================================== -->
<header class=\"navigation fixed-top\">
    <div class=\"container\">
        <!-- main nav -->
        <nav class=\"navbar navbar-expand-lg navbar-light px-0\">
            <!-- logo -->
            <a class=\"navbar-brand logo\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\">
                <img loading=\"lazy\" class=\"logo-default\" src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" alt=\"logo\" />
                <img loading=\"lazy\" class=\"logo-white\" src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo-white.png");
        echo "\" alt=\"logo\" />
            </a>
            <!-- /logo -->
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\"
                aria-controls=\"navigation\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navigation\">
                <ul class=\"navbar-nav ml-auto text-center\">
                    <li class=\"nav-item ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 21), "id", [], "any", false, false, true, 21) == "about")) {
            echo "active";
        }
        echo "\">
                        <a class=\"nav-link\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\">Accueil</a>
                    </li>
                    <li class=\"nav-item ";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 24), "id", [], "any", false, false, true, 24) == "about")) {
            echo "active";
        }
        echo "\">
                        <a class=\"nav-link\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">A propos</a>
                    </li>
                    <li class=\"nav-item ";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 27), "id", [], "any", false, false, true, 27) == "service")) {
            echo "active";
        }
        echo "\">
                        <a class=\"nav-link\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("service");
        echo "\">Services</a>
                    </li>
                    <li class=\"nav-item ";
        // line 30
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 30), "id", [], "any", false, false, true, 30) == "portfolio")) {
            echo "active";
        }
        echo "\">
                        <a class=\"nav-link\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio");
        echo "\">Gallerie</a>
                    </li>
                    <li class=\"nav-item ";
        // line 33
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 33), "id", [], "any", false, false, true, 33) == "team")) {
            echo "active";
        }
        echo "\">
                        <a class=\"nav-link\" href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("team");
        echo "\">Equipe</a>
                    </li>
                    <li class=\"nav-item ";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 36), "id", [], "any", false, false, true, 36) == "pricing")) {
            echo "active";
        }
        echo "\">
                        <a class=\"nav-link\" href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pricing");
        echo "\">Prix</a>
                    </li>
                    <li class=\"nav-item ";
        // line 39
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 39), "id", [], "any", false, false, true, 39) == "contact")) {
            echo "active";
        }
        echo "\">
                        <a class=\"nav-link\" href=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /main nav -->
    </div>
</header>
<!--
End Fixed Navigation
==================================== -->";
    }

    public function getTemplateName()
    {
        return "F:\\wamp64\\www\\piscine/themes/vreedom18-bingo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 40,  159 => 39,  154 => 37,  148 => 36,  143 => 34,  137 => 33,  132 => 31,  126 => 30,  121 => 28,  115 => 27,  110 => 25,  104 => 24,  99 => 22,  93 => 21,  80 => 11,  76 => 10,  72 => 9,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--
Fixed Navigation
==================================== -->
<header class=\"navigation fixed-top\">
    <div class=\"container\">
        <!-- main nav -->
        <nav class=\"navbar navbar-expand-lg navbar-light px-0\">
            <!-- logo -->
            <a class=\"navbar-brand logo\" href=\"{{ 'index'|page }}\">
                <img loading=\"lazy\" class=\"logo-default\" src=\"{{ 'assets/images/logo.png'|theme }}\" alt=\"logo\" />
                <img loading=\"lazy\" class=\"logo-white\" src=\"{{ 'assets/images/logo-white.png'|theme }}\" alt=\"logo\" />
            </a>
            <!-- /logo -->
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\"
                aria-controls=\"navigation\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navigation\">
                <ul class=\"navbar-nav ml-auto text-center\">
                    <li class=\"nav-item {% if this.page.id == 'about' %}active{% endif %}\">
                        <a class=\"nav-link\" href=\"{{ 'index'|page }}\">Accueil</a>
                    </li>
                    <li class=\"nav-item {% if this.page.id == 'about' %}active{% endif %}\">
                        <a class=\"nav-link\" href=\"{{ 'about'|page }}\">A propos</a>
                    </li>
                    <li class=\"nav-item {% if this.page.id == 'service' %}active{% endif %}\">
                        <a class=\"nav-link\" href=\"{{ 'service'|page }}\">Services</a>
                    </li>
                    <li class=\"nav-item {% if this.page.id == 'portfolio' %}active{% endif %}\">
                        <a class=\"nav-link\" href=\"{{ 'portfolio'|page }}\">Gallerie</a>
                    </li>
                    <li class=\"nav-item {% if this.page.id == 'team' %}active{% endif %}\">
                        <a class=\"nav-link\" href=\"{{ 'team'|page }}\">Equipe</a>
                    </li>
                    <li class=\"nav-item {% if this.page.id == 'pricing' %}active{% endif %}\">
                        <a class=\"nav-link\" href=\"{{ 'pricing'|page }}\">Prix</a>
                    </li>
                    <li class=\"nav-item {% if this.page.id == 'contact' %}active{% endif %}\">
                        <a class=\"nav-link\" href=\"{{ 'contact'|page }}\">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /main nav -->
    </div>
</header>
<!--
End Fixed Navigation
==================================== -->", "F:\\wamp64\\www\\piscine/themes/vreedom18-bingo/partials/site/header.htm", "");
    }
}
