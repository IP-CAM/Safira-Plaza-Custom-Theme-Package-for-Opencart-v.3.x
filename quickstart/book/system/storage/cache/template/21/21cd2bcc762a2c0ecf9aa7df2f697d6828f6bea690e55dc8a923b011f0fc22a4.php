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

/* tt_safira_book2/template/plaza/module/ptfeaturedcate.twig */
class __TwigTemplate_740dedee9c4f824bf038991d929bfc54a75a5249913afa8d79ca79f487b80174 extends \Twig\Template
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
        echo "<div class=\"special-categories-module \">
    <div class=\"block-title\">
\t\t<div class=\"title\"><span>";
        // line 3
        echo ($context["title"] ?? null);
        echo "</span></div>
\t\t<p>";
        // line 4
        echo ($context["text_module_special"] ?? null);
        echo "</p>
\t</div>
    <div class=\"pt-content\">
        ";
        // line 7
        if (($context["use_slider"] ?? null)) {
            // line 8
            echo "            <div class=\"swiper-viewport\">
                <div class=\"featured-categories-content swiper-container\">
                    <div class=\"swiper-wrapper\">
                        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 12
                echo "                            <div class=\"swiper-slide product-thumb\">
\t\t\t\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t\t\t\t<div class=\"category-content\">
\t\t\t\t\t\t\t\t\t\t";
                // line 15
                if (($context["use_second_img"] ?? null)) {
                    // line 16
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 17
                    if (($context["lazy_load"] ?? null)) {
                        // line 18
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 18);
                        echo "\"><img class=\"lazyload\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "secondary_image", [], "any", false, false, false, 18);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 18);
                        echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 20
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 20);
                        echo "\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "secondary_image", [], "any", false, false, false, 20);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 20);
                        echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 22
                    echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 24
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"name\"><a href=\"";
                // line 25
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 25);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 25);
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"total-items\">";
                // line 26
                echo ((twig_get_attribute($this->env, $this->source, $context["category"], "product_total", [], "any", false, false, false, 26) . " ") . ($context["text_products"] ?? null));
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 27
                if ((($context["show_cate_des"] ?? null) && twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 27))) {
                    // line 28
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"category-description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 28);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 30
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if (($context["show_child"] ?? null)) {
                    // line 31
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 31)) {
                        // line 32
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["child_count"] = 0;
                        // line 33
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"child-featured-categories\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 34
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 34));
                        foreach ($context['_seq'] as $context["_key"] => $context["childcate"]) {
                            // line 35
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ((($context["child_count"] ?? null) < ($context["child_number"] ?? null))) {
                                // line 36
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["childcate"], "href", [], "any", false, false, false, 36);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["childcate"], "name", [], "any", false, false, false, 36);
                                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 38
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["child_count"] = (($context["child_count"] ?? null) + 1);
                            // line 39
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childcate'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 40
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 42
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 43
                echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 43);
                echo "\" class=\"view-more\">";
                echo ($context["text_shop_now"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                    </div>
                </div>
                ";
            // line 51
            if (twig_get_attribute($this->env, $this->source, ($context["slide_settings"] ?? null), "shownav", [], "any", false, false, false, 51)) {
                // line 52
                echo "                    <div class=\"swiper-pagination fcategory-pagination\"></div>
                ";
            }
            // line 54
            echo "
                ";
            // line 55
            if (twig_get_attribute($this->env, $this->source, ($context["slide_settings"] ?? null), "shownextback", [], "any", false, false, false, 55)) {
                // line 56
                echo "                    <div class=\"swiper-pager\">
                        <div class=\"swiper-button-next special-categories-button-next\"></div>
                        <div class=\"swiper-button-prev special-categories-button-prev\"></div>
                    </div>
                ";
            }
            // line 61
            echo "            </div>

            <script>
                \$(document).ready(function() {
                    \$(\".featured-categories-content\").swiper({
                        spaceBetween: 0,
                        ";
            // line 67
            if (twig_get_attribute($this->env, $this->source, ($context["slide_settings"] ?? null), "shownav", [], "any", false, false, false, 67)) {
                // line 68
                echo "                        pagination: '.fcategory-pagination',
                        paginationClickable: true,
                        ";
            }
            // line 71
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, ($context["slide_settings"] ?? null), "shownextback", [], "any", false, false, false, 71)) {
                // line 72
                echo "                        nextButton: '.special-categories-button-next',
                        prevButton: '.special-categories-button-prev',
                        ";
            }
            // line 75
            echo "                        speed: ";
            if (twig_get_attribute($this->env, $this->source, ($context["slide_settings"] ?? null), "speed", [], "any", false, false, false, 75)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["slide_settings"] ?? null), "speed", [], "any", false, false, false, 75);
                echo " ";
            } else {
                echo " 300 ";
            }
            echo ",
                        slidesPerView: ";
            // line 76
            echo twig_get_attribute($this->env, $this->source, ($context["slide_settings"] ?? null), "items", [], "any", false, false, false, 76);
            echo ",
                        slidesPerColumn: ";
            // line 77
            echo twig_get_attribute($this->env, $this->source, ($context["slide_settings"] ?? null), "rows", [], "any", false, false, false, 77);
            echo ",
\t\t\t\t\t\twatchSlidesVisibility: true,
                        autoplay: ";
            // line 79
            if (twig_get_attribute($this->env, $this->source, ($context["slide_settings"] ?? null), "autoplay", [], "any", false, false, false, 79)) {
                echo " 3000 ";
            } else {
                echo " false ";
            }
            echo ",
                        loop: true,
\t\t\t\t\t\t\tbreakpoints: {
\t\t\t\t\t\t\t\t359: {
\t\t\t\t\t\t\t\t  slidesPerView: 2
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t639: {
\t\t\t\t\t\t\t\t  slidesPerView: 2
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t767: {
\t\t\t\t\t\t\t\t  slidesPerView: 3
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t991: {
\t\t\t\t\t\t\t\t  slidesPerView: 4
\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t1199: {
\t\t\t\t\t\t\t\t  slidesPerView: 4
\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
                    });
                });
            </script>
        ";
        } else {
            // line 104
            echo "\t\t\t<div class=\"featured-categories-content\">
\t\t\t\t";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 106
                echo "\t\t\t\t\t<div class=\"product-thumb\">
\t\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t\t<div class=\"category-content\">
\t\t\t\t\t\t\t\t";
                // line 109
                if (($context["use_second_img"] ?? null)) {
                    // line 110
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 111
                    if (($context["lazy_load"] ?? null)) {
                        // line 112
                        echo "\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "secondary_image", [], "any", false, false, false, 112);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 112);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 114
                        echo "\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "secondary_image", [], "any", false, false, false, 114);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 114);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 116
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 118
                echo "\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t<h4 class=\"name\"><a href=\"";
                // line 119
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 119);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 119);
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t";
                // line 120
                if ((($context["show_cate_des"] ?? null) && twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 120))) {
                    // line 121
                    echo "\t\t\t\t\t\t\t\t\t\t<p class=\"category-description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 121);
                    echo "</p>
\t\t\t\t\t\t\t\t\t";
                }
                // line 123
                echo "\t\t\t\t\t\t\t\t\t";
                if (($context["show_child"] ?? null)) {
                    // line 124
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 124)) {
                        // line 125
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        $context["child_count"] = 0;
                        // line 126
                        echo "\t\t\t\t\t\t\t\t\t\t\t<ul class=\"child-featured-categories\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 127
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 127));
                        foreach ($context['_seq'] as $context["_key"] => $context["childcate"]) {
                            // line 128
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ((($context["child_count"] ?? null) < ($context["child_number"] ?? null))) {
                                // line 129
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["childcate"], "href", [], "any", false, false, false, 129);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["childcate"], "name", [], "any", false, false, false, 129);
                                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 131
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["child_count"] = (($context["child_count"] ?? null) + 1);
                            // line 132
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childcate'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 133
                        echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 135
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 136
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "\t\t\t</div>
        ";
        }
        // line 143
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "tt_safira_book2/template/plaza/module/ptfeaturedcate.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 143,  383 => 141,  373 => 136,  370 => 135,  366 => 133,  360 => 132,  357 => 131,  349 => 129,  346 => 128,  342 => 127,  339 => 126,  336 => 125,  333 => 124,  330 => 123,  324 => 121,  322 => 120,  316 => 119,  313 => 118,  309 => 116,  301 => 114,  293 => 112,  291 => 111,  288 => 110,  286 => 109,  281 => 106,  277 => 105,  274 => 104,  242 => 79,  237 => 77,  233 => 76,  222 => 75,  217 => 72,  214 => 71,  209 => 68,  207 => 67,  199 => 61,  192 => 56,  190 => 55,  187 => 54,  183 => 52,  181 => 51,  177 => 49,  162 => 43,  159 => 42,  155 => 40,  149 => 39,  146 => 38,  138 => 36,  135 => 35,  131 => 34,  128 => 33,  125 => 32,  122 => 31,  119 => 30,  113 => 28,  111 => 27,  107 => 26,  101 => 25,  98 => 24,  94 => 22,  84 => 20,  74 => 18,  72 => 17,  69 => 16,  67 => 15,  62 => 12,  58 => 11,  53 => 8,  51 => 7,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_book2/template/plaza/module/ptfeaturedcate.twig", "");
    }
}
