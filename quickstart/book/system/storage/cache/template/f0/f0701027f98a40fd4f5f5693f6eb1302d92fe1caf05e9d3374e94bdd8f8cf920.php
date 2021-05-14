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

/* tt_safira_houseware4/template/plaza/module/ptfeaturedcate.twig */
class __TwigTemplate_d7da18b8ebc39fa5f3b70e62cc0283a66a1f06c51e229318bb6dd1d0ab08f4b5 extends \Twig\Template
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
        echo "<div class=\"special-categories-module nav-style-2\">
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
\t\t\t\t\t\t\t\t\t<div class=\"category-content \">
\t\t\t\t\t\t\t\t\t\t";
                // line 15
                if (($context["use_second_img"] ?? null)) {
                    // line 16
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 17
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 17);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "secondary_image", [], "any", false, false, false, 17);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 17);
                    echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 20
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"name\"><a href=\"";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 21);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 21);
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"total-items\">";
                // line 22
                echo ((twig_get_attribute($this->env, $this->source, $context["category"], "product_total", [], "any", false, false, false, 22) . " ") . ($context["text_products"] ?? null));
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 23
                if ((($context["show_cate_des"] ?? null) && twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 23))) {
                    // line 24
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"category-description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 24);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 26
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if (($context["show_child"] ?? null)) {
                    // line 27
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 27)) {
                        // line 28
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["child_count"] = 0;
                        // line 29
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"child-featured-categories\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 30
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 30));
                        foreach ($context['_seq'] as $context["_key"] => $context["childcate"]) {
                            // line 31
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ((($context["child_count"] ?? null) < ($context["child_number"] ?? null))) {
                                // line 32
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["childcate"], "href", [], "any", false, false, false, 32);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["childcate"], "name", [], "any", false, false, false, 32);
                                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 34
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["child_count"] = (($context["child_count"] ?? null) + 1);
                            // line 35
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childcate'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 36
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 38
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 39
                echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 39);
                echo "\" class=\"view-more\">";
                echo ($context["text_shop_now"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                    </div>
                </div>
                ";
            // line 48
            if (twig_get_attribute($this->env, $this->source, ($context["slide_settings"] ?? null), "shownav", [], "any", false, false, false, 48)) {
                // line 49
                echo "                    <div class=\"swiper-pagination fcategory-pagination\"></div>
                ";
            }
            // line 51
            echo "
                ";
            // line 52
            if (twig_get_attribute($this->env, $this->source, ($context["slide_settings"] ?? null), "shownextback", [], "any", false, false, false, 52)) {
                // line 53
                echo "                    <div class=\"swiper-pager\">
                        <div class=\"swiper-button-next special-categories-button-next\"></div>
                        <div class=\"swiper-button-prev special-categories-button-prev\"></div>
                    </div>
                ";
            }
            // line 58
            echo "            </div>

            <script>
                \$(document).ready(function() {
                    \$(\".featured-categories-content\").swiper({
                        spaceBetween: 0,
                        ";
            // line 64
            if (twig_get_attribute($this->env, $this->source, ($context["slide_settings"] ?? null), "shownav", [], "any", false, false, false, 64)) {
                // line 65
                echo "                        pagination: '.fcategory-pagination',
                        paginationClickable: true,
                        ";
            }
            // line 68
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, ($context["slide_settings"] ?? null), "shownextback", [], "any", false, false, false, 68)) {
                // line 69
                echo "                        nextButton: '.special-categories-button-next',
                        prevButton: '.special-categories-button-prev',
                        ";
            }
            // line 72
            echo "                        speed: ";
            if (twig_get_attribute($this->env, $this->source, ($context["slide_settings"] ?? null), "speed", [], "any", false, false, false, 72)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, ($context["slide_settings"] ?? null), "speed", [], "any", false, false, false, 72);
                echo " ";
            } else {
                echo " 300 ";
            }
            echo ",
                        slidesPerView: ";
            // line 73
            echo twig_get_attribute($this->env, $this->source, ($context["slide_settings"] ?? null), "items", [], "any", false, false, false, 73);
            echo ",
                        slidesPerColumn: ";
            // line 74
            echo twig_get_attribute($this->env, $this->source, ($context["slide_settings"] ?? null), "rows", [], "any", false, false, false, 74);
            echo ",
\t\t\t\t\t\twatchSlidesVisibility: true,
                        autoplay: ";
            // line 76
            if (twig_get_attribute($this->env, $this->source, ($context["slide_settings"] ?? null), "autoplay", [], "any", false, false, false, 76)) {
                echo " 3000 ";
            } else {
                echo " false ";
            }
            echo ",
                        loop: true,
\t\t\t\t\t\t// Responsive breakpoints
\t\t\t\t\t\t\tbreakpoints: {
\t\t\t\t\t\t\t\t359: {
\t\t\t\t\t\t\t\t  slidesPerView: 1
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t639: {
\t\t\t\t\t\t\t\t  slidesPerView: 1
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t767: {
\t\t\t\t\t\t\t\t  slidesPerView: 2
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t991: {
\t\t\t\t\t\t\t\t  slidesPerView: 2
\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t1199: {
\t\t\t\t\t\t\t\t  slidesPerView: 3
\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t}
                    });
                });
            </script>
        ";
        } else {
            // line 103
            echo "            <div class=\"featured-categories-content\">
                ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 105
                echo "\t\t\t\t\t<div class=\"product-thumb\">
\t\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t\t<div class=\"category-content\">
\t\t\t\t\t\t\t\t";
                // line 108
                if (($context["use_second_img"] ?? null)) {
                    // line 109
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 110
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "secondary_image", [], "any", false, false, false, 110);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 110);
                    echo "\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 113
                echo "\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t<h4 class=\"name\"><a href=\"";
                // line 114
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 114);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 114);
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t";
                // line 115
                if ((($context["show_cate_des"] ?? null) && twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 115))) {
                    // line 116
                    echo "\t\t\t\t\t\t\t\t\t\t<p class=\"category-description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 116);
                    echo "</p>
\t\t\t\t\t\t\t\t\t";
                }
                // line 118
                echo "\t\t\t\t\t\t\t\t\t";
                if (($context["show_child"] ?? null)) {
                    // line 119
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 119)) {
                        // line 120
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        $context["child_count"] = 0;
                        // line 121
                        echo "\t\t\t\t\t\t\t\t\t\t\t<ul class=\"child-featured-categories\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 122
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 122));
                        foreach ($context['_seq'] as $context["_key"] => $context["childcate"]) {
                            // line 123
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ((($context["child_count"] ?? null) < ($context["child_number"] ?? null))) {
                                // line 124
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["childcate"], "href", [], "any", false, false, false, 124);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["childcate"], "name", [], "any", false, false, false, 124);
                                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 126
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["child_count"] = (($context["child_count"] ?? null) + 1);
                            // line 127
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childcate'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 128
                        echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 130
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 131
                echo "\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "            </div>
        ";
        }
        // line 138
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "tt_safira_houseware4/template/plaza/module/ptfeaturedcate.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 138,  356 => 136,  346 => 131,  343 => 130,  339 => 128,  333 => 127,  330 => 126,  322 => 124,  319 => 123,  315 => 122,  312 => 121,  309 => 120,  306 => 119,  303 => 118,  297 => 116,  295 => 115,  289 => 114,  286 => 113,  278 => 110,  275 => 109,  273 => 108,  268 => 105,  264 => 104,  261 => 103,  227 => 76,  222 => 74,  218 => 73,  207 => 72,  202 => 69,  199 => 68,  194 => 65,  192 => 64,  184 => 58,  177 => 53,  175 => 52,  172 => 51,  168 => 49,  166 => 48,  162 => 46,  146 => 39,  143 => 38,  139 => 36,  133 => 35,  130 => 34,  122 => 32,  119 => 31,  115 => 30,  112 => 29,  109 => 28,  106 => 27,  103 => 26,  97 => 24,  95 => 23,  91 => 22,  85 => 21,  82 => 20,  72 => 17,  69 => 16,  67 => 15,  62 => 12,  58 => 11,  53 => 8,  51 => 7,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_houseware4/template/plaza/module/ptfeaturedcate.twig", "");
    }
}
