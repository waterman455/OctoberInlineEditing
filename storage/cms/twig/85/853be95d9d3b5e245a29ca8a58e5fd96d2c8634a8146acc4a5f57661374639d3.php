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

/* F:\wamp64\www\piscine/themes/vreedom18-bingo/partials/index/slider.htm */
class __TwigTemplate_adbfadc7b01e7730235c8ffaf2d875121a8733c569c3e9fb3665d6e099490594 extends \Twig\Template
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
        $tags = array("component" => 7);
        $filters = array("theme" => 2);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
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
        echo "<div class=\"hero-slider\">
    <div class=\"slider-item th-fullpage hero-area\" style=\"background-image: ";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slider/cover3.jpg");
        echo "\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    <h1 data-duration-in=\".3\" data-animation-in=\"fadeInUp\" data-delay-in=\".1\">
                            ";
        // line 7
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "slider/slidertitle1.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "                    </h1>
                    <p data-duration-in=\".3\" data-animation-in=\"fadeInUp\" data-delay-in=\".5\">
                            ";
        // line 10
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "slider/slidersubtitle1.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "                    </p>
                            ";
        // line 12
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "slider/boutonslider1.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 13
        echo "                </div>
            </div>
        </div>
    </div>
    <div class=\"slider-item th-fullpage hero-area1\" style=\"background-image: ";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slider/cover2.jpg");
        echo "\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    <h1 data-duration-in=\".3\" data-animation-in=\"fadeInDown\" data-delay-in=\".1\">
                            ";
        // line 22
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "slider/slidertitle2.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 23
        echo "                    </h1>
                    <p data-duration-in=\".3\" data-animation-in=\"fadeInDown\" data-delay-in=\".5\">
                            ";
        // line 25
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "slider/slidersubtitle2.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 26
        echo "                    </p>
                            ";
        // line 27
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "slider/boutonslider2.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 28
        echo "                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "F:\\wamp64\\www\\piscine/themes/vreedom18-bingo/partials/index/slider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 28,  126 => 27,  123 => 26,  118 => 25,  114 => 23,  109 => 22,  101 => 17,  95 => 13,  90 => 12,  87 => 11,  82 => 10,  78 => 8,  73 => 7,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"hero-slider\">
    <div class=\"slider-item th-fullpage hero-area\" style=\"background-image: {{ 'assets/images/slider/cover3.jpg'|theme }}\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    <h1 data-duration-in=\".3\" data-animation-in=\"fadeInUp\" data-delay-in=\".1\">
                            {% component 'contenteditor' file=\"slider/slidertitle1.htm\" %}
                    </h1>
                    <p data-duration-in=\".3\" data-animation-in=\"fadeInUp\" data-delay-in=\".5\">
                            {% component 'contenteditor' file=\"slider/slidersubtitle1.htm\" %}
                    </p>
                            {% component 'contenteditor' file=\"slider/boutonslider1.htm\" %}
                </div>
            </div>
        </div>
    </div>
    <div class=\"slider-item th-fullpage hero-area1\" style=\"background-image: {{ 'assets/images/slider/cover2.jpg'|theme }}\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    <h1 data-duration-in=\".3\" data-animation-in=\"fadeInDown\" data-delay-in=\".1\">
                            {% component 'contenteditor' file=\"slider/slidertitle2.htm\" %}
                    </h1>
                    <p data-duration-in=\".3\" data-animation-in=\"fadeInDown\" data-delay-in=\".5\">
                            {% component 'contenteditor' file=\"slider/slidersubtitle2.htm\" %}
                    </p>
                            {% component 'contenteditor' file=\"slider/boutonslider2.htm\" %}
                </div>
            </div>
        </div>
    </div>
</div>", "F:\\wamp64\\www\\piscine/themes/vreedom18-bingo/partials/index/slider.htm", "");
    }
}
