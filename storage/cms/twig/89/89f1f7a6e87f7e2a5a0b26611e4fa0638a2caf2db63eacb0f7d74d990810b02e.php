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

/* F:\wamp64\www\piscine/themes/vreedom18-bingo/partials/site/footer.htm */
class __TwigTemplate_2691ba83440de8a7f4150ca3553db8173d1f194602de1b86705b5be1b1b46436 extends \Twig\Template
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
        $filters = array("page" => 17);
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
        echo "<footer id=\"footer\" class=\"bg-one\">
    <div class=\"top-footer\">
        <div class=\"container\">
            <div class=\"row justify-content-around\">
                <div class=\"col-lg-4 col-md-6 mb-5 mb-lg-0\">
                    <h3>about</h3>
                    <p>Integer posuere erat a ante venenati dapibus posuere velit aliquet. Fusce dapibus, tellus cursus
                        commodo, tortor mauris sed posuere.</p>
                </div>
                <!-- End of .col-sm-3 -->

                <div class=\"col-lg-3 col-md-6 mb-5 mb-lg-0\">
                    <ul>
                        <li>
                            <h3>Our Services</h3>
                        </li>
                        <li><a href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("service");
        echo "\">Ui/Ux Design</a></li>
                        <li><a href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("service");
        echo "\">Graphic Design</a></li>
                        <li><a href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("service");
        echo "\">Web Design</a></li>
                        <li><a href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("service");
        echo "\">Web Development</a></li>
                    </ul>
                </div>
                <!-- End of .col-sm-3 -->

                <div class=\"col-lg-2 col-md-6 mb-5 mb-md-0\">
                    <ul>
                        <li>
                            <h3>Quick Links</h3>
                        </li>
                        <li><a href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">About</a></li>
                        <li><a href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("service");
        echo "\">Services</a></li>
                        <li><a href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">Blogs</a></li>
                        <li><a href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("404");
        echo "\">404</a></li>
                    </ul>
                </div>
                <!-- End of .col-sm-3 -->

                <div class=\"col-lg-3 col-md-6\">
                    <ul>
                        <li>
                            <h3>Connect with us Socially</h3>
                        </li>
                        <li><a href=\"https://www.facebook.com/themefisher/\">Facebook</a></li>
                        <li><a href=\"https://www.twitter.com/themefisher/\">Twitter</a></li>
                        <li><a href=\"https://www.youtube.com/channel/UCx9qVW8VF0LmTi4OF2F8YdA\">Youtube</a></li>
                        <li><a href=\"https://www.github.com/themefisher/\">Github</a></li>
                    </ul>
                </div>
                <!-- End of .col-sm-3 -->

            </div>
        </div> <!-- end container -->
    </div>
    <div class=\"footer-bottom\">
        <h5>&copy; Copyright 2020. All rights reserved.</h5>
        <h6>Design and Developed by <a href=\"https://themefisher.com/\">Themefisher</a></h6>
    </div>
</footer> <!-- end footer -->";
    }

    public function getTemplateName()
    {
        return "F:\\wamp64\\www\\piscine/themes/vreedom18-bingo/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  113 => 32,  109 => 31,  105 => 30,  92 => 20,  88 => 19,  84 => 18,  80 => 17,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer id=\"footer\" class=\"bg-one\">
    <div class=\"top-footer\">
        <div class=\"container\">
            <div class=\"row justify-content-around\">
                <div class=\"col-lg-4 col-md-6 mb-5 mb-lg-0\">
                    <h3>about</h3>
                    <p>Integer posuere erat a ante venenati dapibus posuere velit aliquet. Fusce dapibus, tellus cursus
                        commodo, tortor mauris sed posuere.</p>
                </div>
                <!-- End of .col-sm-3 -->

                <div class=\"col-lg-3 col-md-6 mb-5 mb-lg-0\">
                    <ul>
                        <li>
                            <h3>Our Services</h3>
                        </li>
                        <li><a href=\"{{ 'service'|page }}\">Ui/Ux Design</a></li>
                        <li><a href=\"{{ 'service'|page }}\">Graphic Design</a></li>
                        <li><a href=\"{{ 'service'|page }}\">Web Design</a></li>
                        <li><a href=\"{{ 'service'|page }}\">Web Development</a></li>
                    </ul>
                </div>
                <!-- End of .col-sm-3 -->

                <div class=\"col-lg-2 col-md-6 mb-5 mb-md-0\">
                    <ul>
                        <li>
                            <h3>Quick Links</h3>
                        </li>
                        <li><a href=\"{{ 'about'|page }}\">About</a></li>
                        <li><a href=\"{{ 'service'|page }}\">Services</a></li>
                        <li><a href=\"{{ 'blog'|page }}\">Blogs</a></li>
                        <li><a href=\"{{ '404'|page }}\">404</a></li>
                    </ul>
                </div>
                <!-- End of .col-sm-3 -->

                <div class=\"col-lg-3 col-md-6\">
                    <ul>
                        <li>
                            <h3>Connect with us Socially</h3>
                        </li>
                        <li><a href=\"https://www.facebook.com/themefisher/\">Facebook</a></li>
                        <li><a href=\"https://www.twitter.com/themefisher/\">Twitter</a></li>
                        <li><a href=\"https://www.youtube.com/channel/UCx9qVW8VF0LmTi4OF2F8YdA\">Youtube</a></li>
                        <li><a href=\"https://www.github.com/themefisher/\">Github</a></li>
                    </ul>
                </div>
                <!-- End of .col-sm-3 -->

            </div>
        </div> <!-- end container -->
    </div>
    <div class=\"footer-bottom\">
        <h5>&copy; Copyright 2020. All rights reserved.</h5>
        <h6>Design and Developed by <a href=\"https://themefisher.com/\">Themefisher</a></h6>
    </div>
</footer> <!-- end footer -->", "F:\\wamp64\\www\\piscine/themes/vreedom18-bingo/partials/site/footer.htm", "");
    }
}
