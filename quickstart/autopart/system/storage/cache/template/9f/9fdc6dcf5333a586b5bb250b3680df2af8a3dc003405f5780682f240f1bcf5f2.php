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

/* tt_safira_autopart4/template/plaza/module/ptblog.twig */
class __TwigTemplate_4a63739b0a1e40f6be4fddb7f8f471b5c637039dd21eb8301f2887e3568f9fc4 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"blog-module nav-style-2\">
    <div class=\"block-title\">
        ";
        // line 3
        if (($context["sub_title_blog"] ?? null)) {
            // line 4
            echo "\t\t\t<p class=\"sub-title\">";
            echo ($context["sub_title_blog"] ?? null);
            echo "</p>
\t\t";
        }
        // line 6
        echo "\t\t<div class=\"title\">";
        echo ($context["text_heading_title"] ?? null);
        echo "</div>
\t\t";
        // line 7
        if (($context["text_module_blog"] ?? null)) {
            // line 8
            echo "\t\t\t<p>";
            echo ($context["text_module_blog"] ?? null);
            echo "</p>
\t\t";
        }
        // line 10
        echo "    </div>
\t<div class=\"pt-content\">
\t\t";
        // line 12
        if (($context["posts"] ?? null)) {
            // line 13
            echo "\t\t<div class=\"swiper-viewport\">
\t\t\t<div class=\"swiper-container posts-container\">
\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 17
                echo "\t\t\t\t\t\t<div class=\"post-content swiper-slide product-thumb\">
\t\t\t\t\t\t\t<div class=\"post-grid\">
\t\t\t\t\t\t\t\t<div class=\"post-item \">
\t\t\t\t\t\t\t\t\t<div class=\"post-image\">
\t\t\t\t\t\t\t\t\t\t";
                // line 21
                if (($context["lazy_load"] ?? null)) {
                    // line 22
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 22);
                    echo "\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 22);
                    echo "\"><img class=\"lazyload\" width=\"";
                    echo ($context["img_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["img_height"] ?? null);
                    echo "\" src=\"";
                    echo ($context["loader_img"] ?? null);
                    echo "\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 22);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 22);
                    echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 24
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 24);
                    echo "\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 24);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 24);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 24);
                    echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 26
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"post-cation\">
\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-date-author\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"post-date\">";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["post"], "date_added", [], "any", false, false, false, 30);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"post-author\">";
                // line 31
                if (twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 31)) {
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 31);
                }
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"post-name\"><a  href=\"";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 33);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 33);
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-intro\">";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["post"], "intro_text", [], "any", false, false, false, 34);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-more\"><a href=\"";
                // line 35
                echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 35);
                echo "\">";
                echo ($context["button_show"] ?? null);
                echo "</a></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 44
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 44)) {
                // line 45
                echo "\t\t\t\t<div class=\"swiper-pagination post-pagination\"></div>
\t\t\t";
            }
            // line 47
            echo "
\t\t\t";
            // line 48
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 48)) {
                // line 49
                echo "\t\t\t\t<div class=\"swiper-pager\">
\t\t\t\t\t<div class=\"swiper-button-next blog-button-next\"></div>
\t\t\t\t\t<div class=\"swiper-button-prev blog-button-prev\"></div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 54
            echo "\t\t</div>
\t\t";
        } else {
            // line 56
            echo "\t\t\t<p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t";
        }
        // line 58
        echo "\t</div>
</div>
";
        // line 60
        if (($context["posts"] ?? null)) {
            // line 61
            echo "    <script type=\"text/javascript\"><!--
        \$(\".posts-container\").swiper({
            spaceBetween: 0,
            ";
            // line 64
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 64)) {
                // line 65
                echo "            pagination: '.post-pagination',
            paginationClickable: true,
            ";
            }
            // line 68
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 68)) {
                // line 69
                echo "            nextButton: '.blog-button-next',
            prevButton: '.blog-button-prev',
            ";
            }
            // line 72
            echo "            speed: ";
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 72)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 72);
                echo " ";
            } else {
                echo " 500 ";
            }
            echo ",
            slidesPerView: ";
            // line 73
            echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "items", [], "any", false, false, false, 73);
            echo ",
            slidesPerColumn: ";
            // line 74
            echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "rows", [], "any", false, false, false, 74);
            echo ",
\t\t\twatchSlidesVisibility: true,
            autoplay: ";
            // line 76
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "auto", [], "any", false, false, false, 76)) {
                echo " 3000 ";
            } else {
                echo " false ";
            }
            echo ",
            loop: false,
\t\t\tbreakpoints: {
\t\t\t\t359: {
\t\t\t\t  slidesPerView: 1
\t\t\t\t},
\t\t\t\t479: {
\t\t\t\t  slidesPerView: 1
\t\t\t\t},
\t\t\t\t767: {
\t\t\t\t  slidesPerView: 2
\t\t\t\t},
\t\t\t\t991: {
\t\t\t\t  slidesPerView: 2
\t\t\t\t  
\t\t\t\t},
\t\t\t\t1199: {
\t\t\t\t  slidesPerView: 1
\t\t\t\t  
\t\t\t\t}
\t\t\t}
        });
    //--></script>
";
        }
    }

    public function getTemplateName()
    {
        return "tt_safira_autopart4/template/plaza/module/ptblog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 76,  230 => 74,  226 => 73,  215 => 72,  210 => 69,  207 => 68,  202 => 65,  200 => 64,  195 => 61,  193 => 60,  189 => 58,  183 => 56,  179 => 54,  172 => 49,  170 => 48,  167 => 47,  163 => 45,  161 => 44,  157 => 42,  142 => 35,  138 => 34,  132 => 33,  125 => 31,  121 => 30,  115 => 26,  103 => 24,  85 => 22,  83 => 21,  77 => 17,  73 => 16,  68 => 13,  66 => 12,  62 => 10,  56 => 8,  54 => 7,  49 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_autopart4/template/plaza/module/ptblog.twig", "");
    }
}
