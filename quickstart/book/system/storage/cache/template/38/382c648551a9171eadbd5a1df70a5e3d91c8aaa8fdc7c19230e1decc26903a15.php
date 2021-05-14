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

/* tt_safira_book4/template/plaza/module/ptblog.twig */
class __TwigTemplate_f5c8e6f00332df1ce50f51112fe8af328c8e0ab658505bf88b27a555cdc8d4c6 extends \Twig\Template
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
        echo "<div class=\"blog-module\">
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
                    echo "\" src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
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
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"post-date-author\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"post-date\">";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["post"], "date_added", [], "any", false, false, false, 27);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"post-author\">";
                // line 28
                if (twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 28)) {
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 28);
                }
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"post-cation\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"post-name\"><a  href=\"";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 32);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 32);
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"post-intro\">";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["post"], "intro_text", [], "any", false, false, false, 33);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-more\"><a href=\"";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 34);
                echo "\">";
                echo ($context["button_show"] ?? null);
                echo "</a></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 42
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 42)) {
                // line 43
                echo "\t\t\t\t<div class=\"swiper-pagination post-pagination\"></div>
\t\t\t";
            }
            // line 45
            echo "
\t\t\t";
            // line 46
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 46)) {
                // line 47
                echo "\t\t\t\t<div class=\"swiper-pager\">
\t\t\t\t\t<div class=\"swiper-button-next blog-button-next\"></div>
\t\t\t\t\t<div class=\"swiper-button-prev blog-button-prev\"></div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 52
            echo "\t\t</div>
\t\t";
        } else {
            // line 54
            echo "\t\t\t<p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t";
        }
        // line 56
        echo "\t</div>
</div>
";
        // line 58
        if (($context["posts"] ?? null)) {
            // line 59
            echo "\t<script type=\"text/javascript\"><!--
        \$(\".posts-container\").swiper({
            spaceBetween: 0,
            ";
            // line 62
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 62)) {
                // line 63
                echo "            pagination: '.post-pagination',
            paginationClickable: true,
            ";
            }
            // line 66
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 66)) {
                // line 67
                echo "            nextButton: '.blog-button-next',
            prevButton: '.blog-button-prev',
            ";
            }
            // line 70
            echo "            speed: ";
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 70)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 70);
                echo " ";
            } else {
                echo " 500 ";
            }
            echo ",
            slidesPerView: ";
            // line 71
            echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "items", [], "any", false, false, false, 71);
            echo ",
            slidesPerColumn: ";
            // line 72
            echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "rows", [], "any", false, false, false, 72);
            echo ",
\t\t\twatchSlidesVisibility: true,
            autoplay: ";
            // line 74
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "auto", [], "any", false, false, false, 74)) {
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
\t\t\t\t},
\t\t\t\t1199: {
\t\t\t\t  slidesPerView: 3
\t\t\t\t}
\t\t\t}
        });
    //--></script>
";
        }
    }

    public function getTemplateName()
    {
        return "tt_safira_book4/template/plaza/module/ptblog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 74,  226 => 72,  222 => 71,  211 => 70,  206 => 67,  203 => 66,  198 => 63,  196 => 62,  191 => 59,  189 => 58,  185 => 56,  179 => 54,  175 => 52,  168 => 47,  166 => 46,  163 => 45,  159 => 43,  157 => 42,  153 => 40,  139 => 34,  135 => 33,  129 => 32,  120 => 28,  116 => 27,  113 => 26,  101 => 24,  85 => 22,  83 => 21,  77 => 17,  73 => 16,  68 => 13,  66 => 12,  62 => 10,  56 => 8,  54 => 7,  49 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_book4/template/plaza/module/ptblog.twig", "");
    }
}
