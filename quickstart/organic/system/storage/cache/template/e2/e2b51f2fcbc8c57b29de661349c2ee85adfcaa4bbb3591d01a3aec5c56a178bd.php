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

/* tt_safira1/template/plaza/module/ptblog.twig */
class __TwigTemplate_c6df23b20748c90ae49bc6a47a0eb04fa9295d30e4e6c86a064e2f79dee1b06b extends \Twig\Template
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
        echo "<div class=\"blog-module \">
    <div class=\"block-title\">
\t\t";
        // line 3
        if (($context["text_module"] ?? null)) {
            // line 4
            echo "\t\t\t<p>";
            echo ($context["text_module"] ?? null);
            echo "</p>
\t\t";
        }
        // line 6
        echo "        <h3>";
        echo ($context["text_heading_title"] ?? null);
        echo "</h3>
    </div>

    ";
        // line 9
        if (($context["posts"] ?? null)) {
            // line 10
            echo "    <div class=\"swiper-viewport\">
        <div class=\"swiper-container posts-container\">
            <div class=\"swiper-wrapper\">
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 14
                echo "                    <div class=\"post-content swiper-slide \">
\t\t\t\t\t\t<div class=\"post-grid\">
\t\t\t\t\t\t\t<div class=\"post-item\">
\t\t\t\t\t\t\t\t<div class=\"post-image\">
\t\t\t\t\t\t\t\t\t<a title=\"";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 18);
                echo "\" href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 18);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 18);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 18);
                echo "\" /></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"post-cation\">
\t\t\t\t\t\t\t\t\t<div class=\"post-date\">
\t\t\t\t\t\t\t\t\t\t";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["post"], "date_added", [], "any", false, false, false, 22);
                if (twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 22)) {
                    echo (" | " . twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 22));
                }
                // line 23
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"post-intro\">";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["post"], "intro_text", [], "any", false, false, false, 24);
                echo "</div> \t
\t\t\t\t\t\t\t\t\t<h4 class=\"post-name\"><a  href=\"";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 25);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 25);
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t<div class=\"btn-more\"><a href=\"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 26);
                echo "\">";
                echo ($context["button_show"] ?? null);
                echo "</a></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            </div>
        </div>
        ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 34)) {
                // line 35
                echo "            <div class=\"swiper-pagination post-pagination\"></div>
        ";
            }
            // line 37
            echo "
        ";
            // line 38
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 38)) {
                // line 39
                echo "            <div class=\"swiper-pager\">
                <div class=\"swiper-button-next blog-button-next\"></div>
                <div class=\"swiper-button-prev blog-button-prev\"></div>
            </div>
        ";
            }
            // line 44
            echo "    </div>
    ";
        } else {
            // line 46
            echo "        <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
    ";
        }
        // line 48
        echo "</div>
";
        // line 49
        if (($context["posts"] ?? null)) {
            // line 50
            echo "    <script >
        \$(\".posts-container\").swiper({
            spaceBetween: 0,
            ";
            // line 53
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 53)) {
                // line 54
                echo "            pagination: '.post-pagination',
            paginationClickable: true,
            ";
            }
            // line 57
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 57)) {
                // line 58
                echo "            nextButton: '.blog-button-next',
            prevButton: '.blog-button-prev',
            ";
            }
            // line 61
            echo "            speed: ";
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 61)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 61);
                echo " ";
            } else {
                echo " 500 ";
            }
            echo ",
            slidesPerView: ";
            // line 62
            echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "items", [], "any", false, false, false, 62);
            echo ",
            slidesPerColumn: ";
            // line 63
            echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "rows", [], "any", false, false, false, 63);
            echo ",
            autoplay: ";
            // line 64
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "auto", [], "any", false, false, false, 64)) {
                echo " 3000 ";
            } else {
                echo " false ";
            }
            echo ",
            loop: false,
\t\t\t// Responsive breakpoints
\t\t\tbreakpoints: {
\t\t\t\t479: {
\t\t\t\t  slidesPerView: 1
\t\t\t\t},
\t\t\t\t767: {
\t\t\t\t  slidesPerView: 2
\t\t\t\t},
\t\t\t\t991: {
\t\t\t\t  slidesPerView: 3
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
        return "tt_safira1/template/plaza/module/ptblog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 64,  190 => 63,  186 => 62,  175 => 61,  170 => 58,  167 => 57,  162 => 54,  160 => 53,  155 => 50,  153 => 49,  150 => 48,  144 => 46,  140 => 44,  133 => 39,  131 => 38,  128 => 37,  124 => 35,  122 => 34,  118 => 32,  104 => 26,  98 => 25,  94 => 24,  91 => 23,  86 => 22,  73 => 18,  67 => 14,  63 => 13,  58 => 10,  56 => 9,  49 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira1/template/plaza/module/ptblog.twig", "");
    }
}
