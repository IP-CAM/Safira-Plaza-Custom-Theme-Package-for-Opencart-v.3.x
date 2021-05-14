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

/* tt_safira2/template/plaza/module/ptblog.twig */
class __TwigTemplate_1b036417b8ec322c4bce0b9e2fcf01f7907bb033a95d00a8cae37316cb0ef759 extends \Twig\Template
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
\t\t\t\t\t\t\t\t\t";
                // line 18
                if (($context["lazy_load"] ?? null)) {
                    // line 19
                    echo "\t\t\t\t\t\t\t\t\t\t<a title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 19);
                    echo "\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 19);
                    echo "\"><img class=\"lazyload\" width=\"";
                    echo ($context["img_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["img_height"] ?? null);
                    echo "\" src=\"";
                    echo ($context["loader_img"] ?? null);
                    echo "\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 19);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 19);
                    echo "\" /></a>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 21
                    echo "\t\t\t\t\t\t\t\t\t\t<a title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 21);
                    echo "\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 21);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 21);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 21);
                    echo "\" /></a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 23
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"post-cation\">
\t\t\t\t\t\t\t\t\t<div class=\"post-date\">
\t\t\t\t\t\t\t\t\t\t";
                // line 26
                echo twig_get_attribute($this->env, $this->source, $context["post"], "date_added", [], "any", false, false, false, 26);
                if (twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 26)) {
                    echo (" | " . twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 26));
                }
                // line 27
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"post-intro\">";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["post"], "intro_text", [], "any", false, false, false, 28);
                echo "</div> \t
\t\t\t\t\t\t\t\t\t<h4 class=\"post-name\"><a  href=\"";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 29);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 29);
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t<div class=\"btn-more\"><a href=\"";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 30);
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
            // line 36
            echo "            </div>
        </div>
        ";
            // line 38
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 38)) {
                // line 39
                echo "            <div class=\"swiper-pagination post-pagination\"></div>
        ";
            }
            // line 41
            echo "
        ";
            // line 42
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 42)) {
                // line 43
                echo "            <div class=\"swiper-pager\">
                <div class=\"swiper-button-next blog-button-next\"></div>
                <div class=\"swiper-button-prev blog-button-prev\"></div>
            </div>
        ";
            }
            // line 48
            echo "    </div>
    ";
        } else {
            // line 50
            echo "        <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
    ";
        }
        // line 52
        echo "</div>
";
        // line 53
        if (($context["posts"] ?? null)) {
            // line 54
            echo "    <script type=\"text/javascript\"><!--
        \$(\".posts-container\").swiper({
            spaceBetween: 0,
            ";
            // line 57
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 57)) {
                // line 58
                echo "            pagination: '.post-pagination',
            paginationClickable: true,
            ";
            }
            // line 61
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 61)) {
                // line 62
                echo "            nextButton: '.blog-button-next',
            prevButton: '.blog-button-prev',
            ";
            }
            // line 65
            echo "            speed: ";
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 65)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 65);
                echo " ";
            } else {
                echo " 500 ";
            }
            echo ",
            slidesPerView: ";
            // line 66
            echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "items", [], "any", false, false, false, 66);
            echo ",
            slidesPerColumn: ";
            // line 67
            echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "rows", [], "any", false, false, false, 67);
            echo ",
            autoplay: ";
            // line 68
            if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "auto", [], "any", false, false, false, 68)) {
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
        return "tt_safira2/template/plaza/module/ptblog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 68,  214 => 67,  210 => 66,  199 => 65,  194 => 62,  191 => 61,  186 => 58,  184 => 57,  179 => 54,  177 => 53,  174 => 52,  168 => 50,  164 => 48,  157 => 43,  155 => 42,  152 => 41,  148 => 39,  146 => 38,  142 => 36,  128 => 30,  122 => 29,  118 => 28,  115 => 27,  110 => 26,  105 => 23,  93 => 21,  75 => 19,  73 => 18,  67 => 14,  63 => 13,  58 => 10,  56 => 9,  49 => 6,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira2/template/plaza/module/ptblog.twig", "");
    }
}
