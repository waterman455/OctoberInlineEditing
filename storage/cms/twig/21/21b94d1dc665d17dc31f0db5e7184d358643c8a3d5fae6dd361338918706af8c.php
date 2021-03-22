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

/* F:\wamp64\www\piscine/themes/vreedom18-bingo/layouts/default.htm */
class __TwigTemplate_841b7ac65bd2ca96c347d3d7e4c8caacec945860be478f69b0e437723dca40e8 extends \Twig\Template
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
        $tags = array("styles" => 36, "partial" => 56, "page" => 58, "scripts" => 87, "framework" => 88);
        $filters = array("escape" => 9, "theme" => 20);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles', 'partial', 'page', 'scripts', 'framework'],
                ['escape', 'theme'],
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset=\"utf-8\">
    <!-- <title>Bingo | Responsive Multipurpose Parallax HTML5 Template</title> -->
    <title>";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 9), "title", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 9), "site__title", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"One page parallax responsive HTML Template\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=5.0\">
    <meta name=\"author\" content=\"Themefisher\">
    <meta name=\"generator\" content=\"Themefisher Bingo HTML Template v1.0\">

    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\" />

    <!-- CSS
    ================================================== -->
    <!-- Themefisher Icon font -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/themefisher-font/style.css");
        echo "\">
    <!-- bootstrap.min css -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/bootstrap/bootstrap.min.css");
        echo "\">
    <!-- Lightbox.min css -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/lightbox2/css/lightbox.min.css");
        echo "\">
    <!-- animation css -->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/animate/animate.css");
        echo "\">
    <!-- Slick Carousel -->
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/slick/slick.css");
        echo "\">
    <!-- Main Stylesheet -->
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\">
    ";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 37
        echo "</head>
<body id=\"body\">
    <!--
    Start Preloader
    ==================================== -->
    <div id=\"preloader\">
        <div class='preloader'>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--
    End Preloader
    ==================================== -->
    
    ";
        // line 56
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 57
        echo "    
    ";
        // line 58
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 59
        echo "
    ";
        // line 60
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 61
        echo "    
    <!-- 
    Essential Scripts
    =====================================-->
    <!-- Main jQuery -->
    <script src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/jquery/jquery.min.js");
        echo "\"></script>
    
    <!-- Bootstrap4 -->
    <script src=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/bootstrap/bootstrap.min.js");
        echo "\"></script>
    <!-- Parallax -->
    <script src=\"";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/parallax/jquery.parallax-1.1.3.js");
        echo "\"></script>
    <!-- lightbox -->
    <script src=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/lightbox2/js/lightbox.min.js");
        echo "\"></script>
    <!-- Owl Carousel -->
    <script src=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/slick/slick.min.js");
        echo "\"></script>
    <!-- filter -->
    <script src=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/filterizr/jquery.filterizr.min.js");
        echo "\"></script>
    <!-- Smooth Scroll js -->
    <script src=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/smooth-scroll/smooth-scroll.min.js");
        echo "\"></script>
    <!-- Google Map -->
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU\"></script>
    <script src=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/google-map/gmap.js");
        echo "\"></script>
    
    <!-- Custom js -->
    <script src=\"";
        // line 85
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/script.js");
        echo "\"></script>
    
    ";
        // line 87
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 88
        echo "    ";
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework'.($_minify ? '-min' : '').'.js"></script>'.PHP_EOL;
        unset($_minify);
        // line 89
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "F:\\wamp64\\www\\piscine/themes/vreedom18-bingo/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 89,  223 => 88,  220 => 87,  215 => 85,  209 => 82,  203 => 79,  198 => 77,  193 => 75,  188 => 73,  183 => 71,  178 => 69,  172 => 66,  165 => 61,  161 => 60,  158 => 59,  156 => 58,  153 => 57,  149 => 56,  128 => 37,  125 => 36,  121 => 35,  116 => 33,  111 => 31,  106 => 29,  101 => 27,  96 => 25,  88 => 20,  72 => 9,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset=\"utf-8\">
    <!-- <title>Bingo | Responsive Multipurpose Parallax HTML5 Template</title> -->
    <title>{{ this.page.title}} | {{ this.theme.site__title }}</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"One page parallax responsive HTML Template\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=5.0\">
    <meta name=\"author\" content=\"Themefisher\">
    <meta name=\"generator\" content=\"Themefisher Bingo HTML Template v1.0\">

    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ 'assets/images/october.png'|theme }}\" />

    <!-- CSS
    ================================================== -->
    <!-- Themefisher Icon font -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/plugins/themefisher-font/style.css'|theme }}\">
    <!-- bootstrap.min css -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/plugins/bootstrap/bootstrap.min.css'|theme }}\">
    <!-- Lightbox.min css -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/plugins/lightbox2/css/lightbox.min.css'|theme }}\">
    <!-- animation css -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/plugins/animate/animate.css'|theme }}\">
    <!-- Slick Carousel -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/plugins/slick/slick.css'|theme }}\">
    <!-- Main Stylesheet -->
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/style.css'|theme }}\">
    {% styles %}
</head>
<body id=\"body\">
    <!--
    Start Preloader
    ==================================== -->
    <div id=\"preloader\">
        <div class='preloader'>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--
    End Preloader
    ==================================== -->
    
    {% partial 'site/header' %}
    
    {% page %}

    {% partial 'site/footer' %}
    
    <!-- 
    Essential Scripts
    =====================================-->
    <!-- Main jQuery -->
    <script src=\"{{ 'assets/plugins/jquery/jquery.min.js'|theme }}\"></script>
    
    <!-- Bootstrap4 -->
    <script src=\"{{ 'assets/plugins/bootstrap/bootstrap.min.js'|theme }}\"></script>
    <!-- Parallax -->
    <script src=\"{{ 'assets/plugins/parallax/jquery.parallax-1.1.3.js'|theme }}\"></script>
    <!-- lightbox -->
    <script src=\"{{ 'assets/plugins/lightbox2/js/lightbox.min.js'|theme }}\"></script>
    <!-- Owl Carousel -->
    <script src=\"{{ 'assets/plugins/slick/slick.min.js'|theme }}\"></script>
    <!-- filter -->
    <script src=\"{{ 'assets/plugins/filterizr/jquery.filterizr.min.js'|theme }}\"></script>
    <!-- Smooth Scroll js -->
    <script src=\"{{ 'assets/plugins/smooth-scroll/smooth-scroll.min.js'|theme }}\"></script>
    <!-- Google Map -->
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU\"></script>
    <script src=\"{{ 'assets/plugins/google-map/gmap.js'|theme }}\"></script>
    
    <!-- Custom js -->
    <script src=\"{{ 'assets/js/script.js'|theme }}\"></script>
    
    {% scripts %}
    {% framework %}

</body>
</html>", "F:\\wamp64\\www\\piscine/themes/vreedom18-bingo/layouts/default.htm", "");
    }
}
