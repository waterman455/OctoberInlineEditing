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

/* F:\wamp64\www\piscine/themes/vreedom18-bingo/partials/onepage-slider/portfolio.htm */
class __TwigTemplate_f99918f8759554b43a7d5d2125d7940587cac599b72514d2061dc000a81f973b extends \Twig\Template
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
        $tags = array("component" => 7, "for" => 150, "spaceless" => 152, "if" => 153);
        $filters = array("theme" => 28, "page" => 36, "escape" => 156);
        $functions = array("range" => 174);

        try {
            $this->sandbox->checkSecurity(
                ['component', 'for', 'spaceless', 'if'],
                ['theme', 'page', 'escape'],
                ['range']
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
        echo "<section class=\"portfolio section-sm\" id=\"portfolio\">
    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-6 col-lg-8\">
                <!-- section title -->
                <div class=\"title text-center\">
                    <h2>                            ";
        // line 7
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "gallery/gallerytitle.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "</h2>
                    <p>
                    ";
        // line 10
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "gallery/gallerysubtitle.htm"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "
                    </p>
                    <div class=\"border\"></div>
                </div>
                <!-- /section title -->
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-12\">


                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"filtr-container\">
                            <div class=\"col-md-3 col-sm-6 col-xs-6 filtr-item \" data-category=\"mix, design\">
                                <div class=\"portfolio-block\">
                                    <img class=\"img-fluid\" src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/1.jpg");
        echo "\"
                                        alt=\"\">
                                    <div class=\"caption\">
                                        <a class=\"search-icon\"
                                            href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/1.jpg");
        echo "\"
                                            data-lightbox=\"image-1\">
                                            <i class=\"tf-ion-ios-search-strong\"></i>
                                        </a>
                                        <h4><a href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio");
        echo "\">Agrandir</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-6 col-xs-6 filtr-item \" data-category=\"mix, design, ios\">
                                <div class=\"portfolio-block\">
                                    <img class=\"img-fluid\" src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/2.jpg");
        echo "\"
                                        alt=\"\">
                                    <div class=\"caption\">
                                        <a class=\"search-icon\"
                                            href=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/2.jpg");
        echo "\"
                                            data-lightbox=\"image-1\">
                                            <i class=\"tf-ion-ios-search-strong\"></i>
                                        </a>
                                        <h4><a href=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio");
        echo "\">Agrandir</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-6 col-xs-6 filtr-item \"
                                data-category=\"mix, photography, development\">
                                <div class=\"portfolio-block\">
                                    <img class=\"img-fluid\" src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/3.jpg");
        echo "\"
                                        alt=\"\">
                                    <div class=\"caption\">
                                        <a class=\"search-icon\"
                                            href=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/3.jpg");
        echo "\"
                                            data-lightbox=\"image-1\">
                                            <i class=\"tf-ion-ios-search-strong\"></i>
                                        </a>
                                        <h4><a href=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio");
        echo "\">Agrandir</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-6 col-xs-6 filtr-item \" data-category=\"mix, photography, ios\">
                                <div class=\"portfolio-block\">
                                    <img class=\"img-fluid\" src=\"";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/4.jpg");
        echo "\"
                                        alt=\"\">
                                    <div class=\"caption\">
                                        <a class=\"search-icon\"
                                            href=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/4.jpg");
        echo "\"
                                            data-lightbox=\"image-1\">
                                            <i class=\"tf-ion-ios-search-strong\"></i>
                                        </a>
                                        <h4><a href=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio");
        echo "\">Agrandir</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-6 col-xs-6 filtr-item \" data-category=\"mix, design\">
                                <div class=\"portfolio-block\">
                                    <img class=\"img-fluid\" src=\"";
        // line 85
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/5.jpg");
        echo "\"
                                        alt=\"\">
                                    <div class=\"caption\">
                                        <a class=\"search-icon\"
                                            href=\"";
        // line 89
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/5.jpg");
        echo "\"
                                            data-lightbox=\"image-1\">
                                            <i class=\"tf-ion-ios-search-strong\"></i>
                                        </a>
                                        <h4><a href=\"";
        // line 93
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio");
        echo "\">Agrandir</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-6 col-xs-6 filtr-item \"
                                data-category=\"mix, design, development\">
                                <div class=\"portfolio-block\">
                                    <img class=\"img-fluid\" src=\"";
        // line 100
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/6.jpg");
        echo "\"
                                        alt=\"\">
                                    <div class=\"caption\">
                                        <a class=\"search-icon\"
                                            href=\"";
        // line 104
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/6.jpg");
        echo "\"
                                            data-lightbox=\"image-1\">
                                            <i class=\"tf-ion-ios-search-strong\"></i>
                                        </a>
                                        <h4><a href=\"";
        // line 108
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio");
        echo "\">Agrandir</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-6 col-xs-6 filtr-item \" data-category=\"mix, photography\">
                                <div class=\"portfolio-block\">
                                    <img class=\"img-fluid\" src=\"";
        // line 114
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/7.jpg");
        echo "\"
                                        alt=\"\">
                                    <div class=\"caption\">
                                        <a class=\"search-icon\"
                                            href=\"";
        // line 118
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/7.jpg");
        echo "\"
                                            data-lightbox=\"image-1\">
                                            <i class=\"tf-ion-ios-search-strong\"></i>
                                        </a>
                                        <h4><a href=\"";
        // line 122
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio");
        echo "\">Agrandir</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-6 col-xs-6 filtr-item \"
                                data-category=\"mix, design, development\">
                                <div class=\"portfolio-block\">
                                    <img class=\"img-fluid\" src=\"";
        // line 129
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/8.jpg");
        echo "\"
                                        alt=\"\">
                                    <div class=\"caption\">
                                        <a class=\"search-icon\"
                                            href=\"";
        // line 133
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/8.jpg");
        echo "\"
                                            data-lightbox=\"image-1\">
                                            <i class=\"tf-ion-ios-search-strong\"></i>
                                        </a>
                                        <h4><a href=\"";
        // line 137
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio");
        echo "\">Agrandir</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /end col-lg-12 -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- End section -->

<ul class=\"record-list\" style=\"list-style-type: none;display: flex; justify-content:space-around;\">
    ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 151
            echo "        <li>
                ";
            // line 152
            ob_start();
            // line 153
            echo "                    ";
            if (($context["detailsPage"] ?? null)) {
                // line 154
                echo "                        <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 154, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 154)]);
                echo "\">
                    ";
            }
            // line 156
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "image", [], "any", false, false, true, 156), "thumb", [0 => 200, 1 => ($context["auto"] ?? null)], "method", false, false, true, 156), 156, $this->source), "html", null, true);
            echo "\">

                    ";
            // line 158
            if (($context["detailsPage"] ?? null)) {
                // line 159
                echo "                        </a>
                    ";
            }
            // line 161
            echo "                ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 162
            echo "        </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 164
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noRecordsMessage"] ?? null), 164, $this->source), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "</ul>

";
        // line 168
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 168) > 1)) {
            // line 169
            echo "    <ul class=\"pagination\">
        ";
            // line 170
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 170) > 1)) {
                // line 171
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 171), "baseFileName", [], "any", false, false, true, 171), 171, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 171) - 1)]);
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 173
            echo "
        ";
            // line 174
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 174)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 175
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 175) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 176
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 176), "baseFileName", [], "any", false, false, true, 176), 176, $this->source), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 176, $this->source), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "
        ";
            // line 180
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 180) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 180))) {
                // line 181
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 181), "baseFileName", [], "any", false, false, true, 181), 181, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 181) + 1)]);
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 183
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "F:\\wamp64\\www\\piscine/themes/vreedom18-bingo/partials/onepage-slider/portfolio.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 183,  391 => 181,  389 => 180,  386 => 179,  375 => 176,  370 => 175,  366 => 174,  363 => 173,  357 => 171,  355 => 170,  352 => 169,  350 => 168,  346 => 166,  337 => 164,  331 => 162,  328 => 161,  324 => 159,  322 => 158,  316 => 156,  310 => 154,  307 => 153,  305 => 152,  302 => 151,  297 => 150,  281 => 137,  274 => 133,  267 => 129,  257 => 122,  250 => 118,  243 => 114,  234 => 108,  227 => 104,  220 => 100,  210 => 93,  203 => 89,  196 => 85,  187 => 79,  180 => 75,  173 => 71,  164 => 65,  157 => 61,  150 => 57,  140 => 50,  133 => 46,  126 => 42,  117 => 36,  110 => 32,  103 => 28,  84 => 11,  79 => 10,  75 => 8,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"portfolio section-sm\" id=\"portfolio\">
    <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-6 col-lg-8\">
                <!-- section title -->
                <div class=\"title text-center\">
                    <h2>                            {% component 'contenteditor' file=\"gallery/gallerytitle.htm\" %}
</h2>
                    <p>
                    {% component 'contenteditor' file=\"gallery/gallerysubtitle.htm\" %}

                    </p>
                    <div class=\"border\"></div>
                </div>
                <!-- /section title -->
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-12\">


                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"filtr-container\">
                            <div class=\"col-md-3 col-sm-6 col-xs-6 filtr-item \" data-category=\"mix, design\">
                                <div class=\"portfolio-block\">
                                    <img class=\"img-fluid\" src=\"{{ 'assets/images/portfolio/1.jpg'|theme }}\"
                                        alt=\"\">
                                    <div class=\"caption\">
                                        <a class=\"search-icon\"
                                            href=\"{{ 'assets/images/portfolio/1.jpg'|theme }}\"
                                            data-lightbox=\"image-1\">
                                            <i class=\"tf-ion-ios-search-strong\"></i>
                                        </a>
                                        <h4><a href=\"{{ 'portfolio'|page }}\">Agrandir</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-6 col-xs-6 filtr-item \" data-category=\"mix, design, ios\">
                                <div class=\"portfolio-block\">
                                    <img class=\"img-fluid\" src=\"{{ 'assets/images/portfolio/2.jpg'|theme }}\"
                                        alt=\"\">
                                    <div class=\"caption\">
                                        <a class=\"search-icon\"
                                            href=\"{{ 'assets/images/portfolio/2.jpg'|theme }}\"
                                            data-lightbox=\"image-1\">
                                            <i class=\"tf-ion-ios-search-strong\"></i>
                                        </a>
                                        <h4><a href=\"{{ 'portfolio'|page }}\">Agrandir</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-6 col-xs-6 filtr-item \"
                                data-category=\"mix, photography, development\">
                                <div class=\"portfolio-block\">
                                    <img class=\"img-fluid\" src=\"{{ 'assets/images/portfolio/3.jpg'|theme }}\"
                                        alt=\"\">
                                    <div class=\"caption\">
                                        <a class=\"search-icon\"
                                            href=\"{{ 'assets/images/portfolio/3.jpg'|theme }}\"
                                            data-lightbox=\"image-1\">
                                            <i class=\"tf-ion-ios-search-strong\"></i>
                                        </a>
                                        <h4><a href=\"{{ 'portfolio'|page }}\">Agrandir</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-6 col-xs-6 filtr-item \" data-category=\"mix, photography, ios\">
                                <div class=\"portfolio-block\">
                                    <img class=\"img-fluid\" src=\"{{ 'assets/images/portfolio/4.jpg'|theme }}\"
                                        alt=\"\">
                                    <div class=\"caption\">
                                        <a class=\"search-icon\"
                                            href=\"{{ 'assets/images/portfolio/4.jpg'|theme }}\"
                                            data-lightbox=\"image-1\">
                                            <i class=\"tf-ion-ios-search-strong\"></i>
                                        </a>
                                        <h4><a href=\"{{ 'portfolio'|page }}\">Agrandir</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-6 col-xs-6 filtr-item \" data-category=\"mix, design\">
                                <div class=\"portfolio-block\">
                                    <img class=\"img-fluid\" src=\"{{ 'assets/images/portfolio/5.jpg'|theme }}\"
                                        alt=\"\">
                                    <div class=\"caption\">
                                        <a class=\"search-icon\"
                                            href=\"{{ 'assets/images/portfolio/5.jpg'|theme }}\"
                                            data-lightbox=\"image-1\">
                                            <i class=\"tf-ion-ios-search-strong\"></i>
                                        </a>
                                        <h4><a href=\"{{ 'portfolio'|page }}\">Agrandir</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-6 col-xs-6 filtr-item \"
                                data-category=\"mix, design, development\">
                                <div class=\"portfolio-block\">
                                    <img class=\"img-fluid\" src=\"{{ 'assets/images/portfolio/6.jpg'|theme }}\"
                                        alt=\"\">
                                    <div class=\"caption\">
                                        <a class=\"search-icon\"
                                            href=\"{{ 'assets/images/portfolio/6.jpg'|theme }}\"
                                            data-lightbox=\"image-1\">
                                            <i class=\"tf-ion-ios-search-strong\"></i>
                                        </a>
                                        <h4><a href=\"{{ 'portfolio'|page }}\">Agrandir</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-6 col-xs-6 filtr-item \" data-category=\"mix, photography\">
                                <div class=\"portfolio-block\">
                                    <img class=\"img-fluid\" src=\"{{ 'assets/images/portfolio/7.jpg'|theme }}\"
                                        alt=\"\">
                                    <div class=\"caption\">
                                        <a class=\"search-icon\"
                                            href=\"{{ 'assets/images/portfolio/7.jpg'|theme }}\"
                                            data-lightbox=\"image-1\">
                                            <i class=\"tf-ion-ios-search-strong\"></i>
                                        </a>
                                        <h4><a href=\"{{ 'portfolio'|page }}\">Agrandir</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-3 col-sm-6 col-xs-6 filtr-item \"
                                data-category=\"mix, design, development\">
                                <div class=\"portfolio-block\">
                                    <img class=\"img-fluid\" src=\"{{ 'assets/images/portfolio/8.jpg'|theme }}\"
                                        alt=\"\">
                                    <div class=\"caption\">
                                        <a class=\"search-icon\"
                                            href=\"{{ 'assets/images/portfolio/8.jpg'|theme }}\"
                                            data-lightbox=\"image-1\">
                                            <i class=\"tf-ion-ios-search-strong\"></i>
                                        </a>
                                        <h4><a href=\"{{ 'portfolio'|page }}\">Agrandir</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /end col-lg-12 -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- End section -->

<ul class=\"record-list\" style=\"list-style-type: none;display: flex; justify-content:space-around;\">
    {% for record in records %}
        <li>
                {% spaceless %}
                    {% if detailsPage %}
                        <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                    {% endif %}
<img src=\"{{ record.image.thumb(200,auto) }}\">

                    {% if detailsPage %}
                        </a>
                    {% endif %}
                {% endspaceless %}
        </li>
    {% else %}
        <li class=\"no-data\">{{ noRecordsMessage }}</li>
    {% endfor %}
</ul>

{% if records.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if records.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..records.lastPage %}
            <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if records.lastPage > records.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}", "F:\\wamp64\\www\\piscine/themes/vreedom18-bingo/partials/onepage-slider/portfolio.htm", "");
    }
}
