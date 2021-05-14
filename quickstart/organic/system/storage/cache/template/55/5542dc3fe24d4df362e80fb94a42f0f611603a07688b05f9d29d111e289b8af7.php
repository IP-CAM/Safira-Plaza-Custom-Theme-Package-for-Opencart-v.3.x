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

/* tt_safira3/template/plaza/module/ptblog.twig */
class __TwigTemplate_b3ebec1a3eb455f384acab1b2a9690e5e324cc0b800cc1ca7fcf606dc58b6255 extends \Twig\Template
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
        <h3>";
        // line 3
        echo ($context["text_heading_title"] ?? null);
        echo "</h3>
    </div>

    ";
        // line 6
        if (($context["posts"] ?? null)) {
            // line 7
            echo "    <div class=\"swiper-viewport\">
        <div class=\"swiper-container posts-container\">
            <div class=\"swiper-wrapper\">
                ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 11
                echo "                    <div class=\"post-content swiper-slide \">
\t\t\t\t\t\t<div class=\"post-grid\">
\t\t\t\t\t\t\t<div class=\"post-item\">
\t\t\t\t\t\t\t\t<div class=\"post-image\">
\t\t\t\t\t\t\t\t\t";
                // line 15
                if (($context["lazy_load"] ?? null)) {
                    // line 16
                    echo "\t\t\t\t\t\t\t\t\t\t<a title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 16);
                    echo "\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 16);
                    echo "\"><img class=\"lazyload\" width=\"";
                    echo ($context["img_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["img_height"] ?? null);
                    echo "\" src=\"";
                    echo ($context["loader_img"] ?? null);
                    echo "\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 16);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 16);
                    echo "\" /></a>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 18
                    echo "\t\t\t\t\t\t\t\t\t\t<a title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 18);
                    echo "\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 18);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 18);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 18);
                    echo "\" /></a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 20
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"post-cation\">
\t\t\t\t\t\t\t\t\t<div class=\"post-date\">
\t\t\t\t\t\t\t\t\t\t";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["post"], "date_added", [], "any", false, false, false, 23);
                if (twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 23)) {
                    echo (" | " . twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 23));
                }
                // line 24
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"post-intro\">";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["post"], "intro_text", [], "any", false, false, false, 25);
                echo "</div> \t
\t\t\t\t\t\t\t\t\t<h4 class=\"post-name\"><a  href=\"";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 26);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 26);
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t<div class=\"btn-more\"><a href=\"";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 27);
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
            // line 33
            echo "            </div>
        </div>
        ";
            // line 35
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 35)) {
                // line 36
                echo "            <div class=\"swiper-pagination post-pagination\"></div>
        ";
            }
            // line 38
            echo "
        ";
            // line 39
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 39)) {
                // line 40
                echo "            <div class=\"swiper-pager\">
                <div class=\"swiper-button-next blog-button-next\"></div>
                <div class=\"swiper-button-prev blog-button-prev\"></div>
            </div>
        ";
            }
            // line 45
            echo "    </div>
    ";
        } else {
            // line 47
            echo "        <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
    ";
        }
        // line 49
        echo "</div>
";
        // line 50
        if (($context["posts"] ?? null)) {
            // line 51
            echo "    <script type=\"text/javascript\"><!--
        \$(\".posts-container\").swiper({
            spaceBetween: 0,
            ";
            // line 54
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 54)) {
                // line 55
                echo "            pagination: '.post-pagination',
            paginationClickable: true,
            ";
            }
            // line 58
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 58)) {
                // line 59
                echo "            nextButton: '.blog-button-next',
            prevButton: '.blog-button-prev',
            ";
            }
            // line 62
            echo "            speed: ";
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 62)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 62);
                echo " ";
            } else {
                echo " 500 ";
            }
            echo ",
            slidesPerView: ";
            // line 63
            echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "items", [], "any", false, false, false, 63);
            echo ",
            slidesPerColumn: ";
            // line 64
            echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "rows", [], "any", false, false, false, 64);
            echo ",
            autoplay: ";
            // line 65
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "auto", [], "any", false, false, false, 65)) {
                echo " 3000 ";
            } else {
                echo " false ";
            }
            echo ",
            loop: false,
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
    //--></script>
";
        }
    }

    public function getTemplateName()
    {
        return "tt_safira3/template/plaza/module/ptblog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 65,  205 => 64,  201 => 63,  190 => 62,  185 => 59,  182 => 58,  177 => 55,  175 => 54,  170 => 51,  168 => 50,  165 => 49,  159 => 47,  155 => 45,  148 => 40,  146 => 39,  143 => 38,  139 => 36,  137 => 35,  133 => 33,  119 => 27,  113 => 26,  109 => 25,  106 => 24,  101 => 23,  96 => 20,  84 => 18,  66 => 16,  64 => 15,  58 => 11,  54 => 10,  49 => 7,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira3/template/plaza/module/ptblog.twig", "");
    }
}
