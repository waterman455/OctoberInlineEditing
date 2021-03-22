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

/* F:\wamp64\www\piscine/themes/vreedom18-bingo/partials/index/blog.htm */
class __TwigTemplate_a38c8a023c3c62b01e400da6e922da0c12fec1a624cb9720c596efc89a37bb23 extends \Twig\Template
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
        $filters = array("theme" => 24, "page" => 29);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme', 'page'],
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
        echo "<section class=\"blog\" id=\"blog\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <!-- section title -->
            <div class=\"col-xl-6 col-lg-8\">
                <div class=\"title text-center \">
                    <h2> Latest <span class=\"color\">Posts</span></h2>
                    <div class=\"border\"></div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus facere accusamus,
                        reprehenderit
                        libero inventore nam.
                    </p>
                </div>
            </div>
            <!-- /section title -->
        </div>

        <div class=\"row\">
            <!-- single blog post -->
            <article class=\"col-lg-4 col-md-6\">
                <div class=\"post-item\">
                    <div class=\"media-wrapper\">
                        <img loading=\"lazy\" src=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/post-1.jpg");
        echo "\"
                            alt=\"amazing caves coverimage\" class=\"img-fluid\">
                    </div>

                    <div class=\"content\">
                        <h3><a href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("single-post");
        echo "\">Reasons to Smile</a></h3>
                        <p>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non skateboard dolor brunch.
                        </p>
                        <a class=\"btn btn-main\" href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("single-post");
        echo "\">Read more</a>
                    </div>
                </div>
            </article>
            <!-- /single blog post -->

            <!-- single blog post -->
            <article class=\"col-lg-4 col-md-6\">
                <div class=\"post-item\">
                    <div class=\"media-wrapper\">
                        <img loading=\"lazy\" src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/post-2.jpg");
        echo "\"
                            alt=\"amazing caves coverimage\" class=\"img-fluid\">
                    </div>

                    <div class=\"content\">
                        <h3><a href=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("single-post");
        echo "\">A Few Moments</a></h3>
                        <p>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non skateboard dolor brunch.
                        </p>
                        <a class=\"btn btn-main\" href=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("single-post");
        echo "\">Read more</a>
                    </div>
                </div>
            </article>
            <!-- end single blog post -->

            <!-- single blog post -->
            <article class=\"col-lg-4 col-md-6\">
                <div class=\"post-item\">
                    <div class=\"media-wrapper\">
                        <img loading=\"lazy\" src=\"";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/post-3.jpg");
        echo "\"
                            alt=\"amazing caves coverimage\" class=\"img-fluid\">
                    </div>

                    <div class=\"content\">
                        <h3><a href=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("single-post");
        echo "\">Hints for Life</a></h3>
                        <p>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non skateboard dolor brunch.
                        </p>
                        <a class=\"btn btn-main\" href=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("single-post");
        echo "\">Read more</a>
                    </div>
                </div>
            </article>
            <!-- end single blog post -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end section -->";
    }

    public function getTemplateName()
    {
        return "F:\\wamp64\\www\\piscine/themes/vreedom18-bingo/partials/index/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 74,  153 => 69,  145 => 64,  132 => 54,  124 => 49,  116 => 44,  103 => 34,  95 => 29,  87 => 24,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"blog\" id=\"blog\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <!-- section title -->
            <div class=\"col-xl-6 col-lg-8\">
                <div class=\"title text-center \">
                    <h2> Latest <span class=\"color\">Posts</span></h2>
                    <div class=\"border\"></div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus facere accusamus,
                        reprehenderit
                        libero inventore nam.
                    </p>
                </div>
            </div>
            <!-- /section title -->
        </div>

        <div class=\"row\">
            <!-- single blog post -->
            <article class=\"col-lg-4 col-md-6\">
                <div class=\"post-item\">
                    <div class=\"media-wrapper\">
                        <img loading=\"lazy\" src=\"{{ 'assets/images/blog/post-1.jpg'|theme }}\"
                            alt=\"amazing caves coverimage\" class=\"img-fluid\">
                    </div>

                    <div class=\"content\">
                        <h3><a href=\"{{ 'single-post'|page }}\">Reasons to Smile</a></h3>
                        <p>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non skateboard dolor brunch.
                        </p>
                        <a class=\"btn btn-main\" href=\"{{ 'single-post'|page }}\">Read more</a>
                    </div>
                </div>
            </article>
            <!-- /single blog post -->

            <!-- single blog post -->
            <article class=\"col-lg-4 col-md-6\">
                <div class=\"post-item\">
                    <div class=\"media-wrapper\">
                        <img loading=\"lazy\" src=\"{{ 'assets/images/blog/post-2.jpg'|theme }}\"
                            alt=\"amazing caves coverimage\" class=\"img-fluid\">
                    </div>

                    <div class=\"content\">
                        <h3><a href=\"{{ 'single-post'|page }}\">A Few Moments</a></h3>
                        <p>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non skateboard dolor brunch.
                        </p>
                        <a class=\"btn btn-main\" href=\"{{ 'single-post'|page }}\">Read more</a>
                    </div>
                </div>
            </article>
            <!-- end single blog post -->

            <!-- single blog post -->
            <article class=\"col-lg-4 col-md-6\">
                <div class=\"post-item\">
                    <div class=\"media-wrapper\">
                        <img loading=\"lazy\" src=\"{{ 'assets/images/blog/post-3.jpg'|theme }}\"
                            alt=\"amazing caves coverimage\" class=\"img-fluid\">
                    </div>

                    <div class=\"content\">
                        <h3><a href=\"{{ 'single-post'|page }}\">Hints for Life</a></h3>
                        <p>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non skateboard dolor brunch.
                        </p>
                        <a class=\"btn btn-main\" href=\"{{ 'single-post'|page }}\">Read more</a>
                    </div>
                </div>
            </article>
            <!-- end single blog post -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end section -->", "F:\\wamp64\\www\\piscine/themes/vreedom18-bingo/partials/index/blog.htm", "");
    }
}
