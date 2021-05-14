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

/* tt_safira_houseware2/template/plaza/module/ptblog.twig */
class __TwigTemplate_531f20e77c06ac3ff112402216f7b7478f6c5a9dd003eb2ba687795c1bfff2ac extends \Twig\Template
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
\t\t\t\t\t\t\t\t\t\t<a title=\"";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 21);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 21);
                echo "\"><img class=\"lazyload\"  src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 21);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 21);
                echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t<div class=\"post-date-author\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"post-date\">";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["post"], "date_added", [], "any", false, false, false, 23);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"post-author\">";
                // line 24
                if (twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 24)) {
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 24);
                }
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"post-cation\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"post-name\"><a  href=\"";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 28);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 28);
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"post-intro\">";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["post"], "intro_text", [], "any", false, false, false, 29);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-more\"><a href=\"";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 30);
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
            // line 36
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 38
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 38)) {
                // line 39
                echo "\t\t\t\t<div class=\"swiper-pagination post-pagination\"></div>
\t\t\t";
            }
            // line 41
            echo "
\t\t\t";
            // line 42
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 42)) {
                // line 43
                echo "\t\t\t\t<div class=\"swiper-pager\">
\t\t\t\t\t<div class=\"swiper-button-next blog-button-next\"></div>
\t\t\t\t\t<div class=\"swiper-button-prev blog-button-prev\"></div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 48
            echo "\t\t</div>
\t\t";
        } else {
            // line 50
            echo "\t\t\t<p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
\t\t";
        }
        // line 52
        echo "\t</div>
</div>
";
        // line 54
        if (($context["posts"] ?? null)) {
            // line 55
            echo "    <script >
        \$(\".posts-container\").swiper({
            spaceBetween: 0,
            ";
            // line 58
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 58)) {
                // line 59
                echo "            pagination: '.post-pagination',
            paginationClickable: true,
            ";
            }
            // line 62
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 62)) {
                // line 63
                echo "            nextButton: '.blog-button-next',
            prevButton: '.blog-button-prev',
            ";
            }
            // line 66
            echo "            speed: ";
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 66)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 66);
                echo " ";
            } else {
                echo " 500 ";
            }
            echo ",
            slidesPerView: ";
            // line 67
            echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "items", [], "any", false, false, false, 67);
            echo ",
            slidesPerColumn: ";
            // line 68
            echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "rows", [], "any", false, false, false, 68);
            echo ",
\t\t\twatchSlidesVisibility: true,
            autoplay: ";
            // line 70
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "auto", [], "any", false, false, false, 70)) {
                echo " 3000 ";
            } else {
                echo " false ";
            }
            echo ",
            loop: false,
\t\t\t
\t\t\t// Responsive breakpoints
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
\t\t\t\t  slidesPerView: 3
\t\t\t\t  
\t\t\t\t}
\t\t\t}
        });
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "tt_safira_houseware2/template/plaza/module/ptblog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 70,  204 => 68,  200 => 67,  189 => 66,  184 => 63,  181 => 62,  176 => 59,  174 => 58,  169 => 55,  167 => 54,  163 => 52,  157 => 50,  153 => 48,  146 => 43,  144 => 42,  141 => 41,  137 => 39,  135 => 38,  131 => 36,  117 => 30,  113 => 29,  107 => 28,  98 => 24,  94 => 23,  83 => 21,  77 => 17,  73 => 16,  68 => 13,  66 => 12,  62 => 10,  56 => 8,  54 => 7,  49 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_houseware2/template/plaza/module/ptblog.twig", "");
    }
}
