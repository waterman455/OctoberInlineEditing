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

/* F:\wamp64\www\piscine/themes/vreedom18-bingo/layouts/blank.htm */
class __TwigTemplate_195de46c0ffb13a199537d3c55780459ea3697d7930b370bc56381b1c07106e6 extends \Twig\Template
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
        $tags = array("page" => 55);
        $filters = array("theme" => 19);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['page'],
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset=\"utf-8\">
    <title>Bingo | Responsive Multipurpose Parallax HTML5 Template</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"One page parallax responsive HTML Template\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=5.0\">
    <meta name=\"author\" content=\"Themefisher\">
    <meta name=\"generator\" content=\"Themefisher Bingo HTML Template v1.0\">

    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\" />

    <!-- CSS
    ================================================== -->
    <!-- Themefisher Icon font -->
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/themefisher-font/style.css");
        echo "\">
    <!-- bootstrap.min css -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/bootstrap/bootstrap.min.css");
        echo "\">
    <!-- Lightbox.min css -->
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/lightbox2/css/lightbox.min.css");
        echo "\">
    <!-- animation css -->
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/animate/animate.css");
        echo "\">
    <!-- Slick Carousel -->
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/slick/slick.css");
        echo "\">
    <!-- Main Stylesheet -->
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\">

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
    
    ";
        // line 55
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 56
        echo "    
    <!-- 
    Essential Scripts
    =====================================-->
    <!-- Main jQuery -->
    <script src=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/jquery/jquery.min.js");
        echo "\"></script>
    
    <!-- Bootstrap4 -->
    <script src=\"";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/bootstrap/bootstrap.min.js");
        echo "\"></script>
    <!-- Parallax -->
    <script src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/parallax/jquery.parallax-1.1.3.js");
        echo "\"></script>
    <!-- lightbox -->
    <script src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/lightbox2/js/lightbox.min.js");
        echo "\"></script>
    <!-- Owl Carousel -->
    <script src=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/slick/slick.min.js");
        echo "\"></script>
    <!-- filter -->
    <script src=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/filterizr/jquery.filterizr.min.js");
        echo "\"></script>
    <!-- Smooth Scroll js -->
    <script src=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/smooth-scroll/smooth-scroll.min.js");
        echo "\"></script>
    <!-- Google Map -->
    <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU\"></script>
    <script src=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/google-map/gmap.js");
        echo "\"></script>
    
    <!-- Custom js -->
    <script src=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/script.js");
        echo "\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "F:\\wamp64\\www\\piscine/themes/vreedom18-bingo/layouts/blank.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 80,  185 => 77,  179 => 74,  174 => 72,  169 => 70,  164 => 68,  159 => 66,  154 => 64,  148 => 61,  141 => 56,  139 => 55,  115 => 34,  110 => 32,  105 => 30,  100 => 28,  95 => 26,  90 => 24,  82 => 19,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset=\"utf-8\">
    <title>Bingo | Responsive Multipurpose Parallax HTML5 Template</title>

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
    
    {% page %}
    
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
</body>
</html>", "F:\\wamp64\\www\\piscine/themes/vreedom18-bingo/layouts/blank.htm", "");
    }
}
