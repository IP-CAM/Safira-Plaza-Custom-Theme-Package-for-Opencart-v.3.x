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

/* tt_safira_autopart3/template/plaza/module/ptfeaturedcate.twig */
class __TwigTemplate_bac2742e8ec67772b49908ef354c987a1578541c15e40bb6300a191f626fbce4 extends \Twig\Template
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
\t\t\t\t\t\t\t\t\t<div class=\"category-content\">
\t\t\t\t\t\t\t\t\t\t";
                // line 14
                if (($context["use_second_img"] ?? null)) {
                    // line 15
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 16
                    if (($context["lazy_load"] ?? null)) {
                        // line 17
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 17);
                        echo "\"><img class=\"lazyload\" src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "secondary_image", [], "any", false, false, false, 17);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 17);
                        echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 19
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 19);
                        echo "\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "secondary_image", [], "any", false, false, false, 19);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 19);
                        echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 21
                    echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 23
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"name\"><a href=\"";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 24);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 24);
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"total-items\">";
                // line 25
                echo ((twig_get_attribute($this->env, $this->source, $context["category"], "product_total", [], "any", false, false, false, 25) . " ") . ($context["text_products"] ?? null));
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 26
                if ((($context["show_cate_des"] ?? null) && twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 26))) {
                    // line 27
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"category-description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 27);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 29
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if (($context["show_child"] ?? null)) {
                    // line 30
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 30)) {
                        // line 31
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context["child_count"] = 0;
                        // line 32
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"child-featured-categories\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 33
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 33));
                        foreach ($context['_seq'] as $context["_key"] => $context["childcate"]) {
                            // line 34
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ((($context["child_count"] ?? null) < ($context["child_number"] ?? null))) {
                                // line 35
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["childcate"], "href", [], "any", false, false, false, 35);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["childcate"], "name", [], "any", false, false, false, 35);
                                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 37
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            $context["child_count"] = (($context["child_count"] ?? null) + 1);
                            // line 38
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childcate'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 39
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 41
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 42
                echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 42);
                echo "\" class=\"view-more\">";
                echo ($context["text_shop_now"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
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
                        loop: false,
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
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t1499: {
\t\t\t\t\t\t\t\t  slidesPerView: 3
\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
                    });
                });
            </script>
        ";
        } else {
            // line 108
            echo "            <div class=\"featured-categories-content\">
                ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 110
                echo "                    <div class=\"category-content\">
                        
\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t<h4 class=\"name\"><a href=\"";
                // line 113
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 113);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 113);
                echo "</a></h4>
\t\t\t\t\t\t\t";
                // line 114
                if ((($context["show_cate_des"] ?? null) && twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 114))) {
                    // line 115
                    echo "\t\t\t\t\t\t\t\t<p class=\"category-description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 115);
                    echo "</p>
\t\t\t\t\t\t\t";
                }
                // line 117
                echo "\t\t\t\t\t\t\t";
                if (($context["show_child"] ?? null)) {
                    // line 118
                    echo "\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 118)) {
                        // line 119
                        echo "\t\t\t\t\t\t\t\t\t";
                        $context["child_count"] = 0;
                        // line 120
                        echo "\t\t\t\t\t\t\t\t\t<ul class=\"child-featured-categories\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 121
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 121));
                        foreach ($context['_seq'] as $context["_key"] => $context["childcate"]) {
                            // line 122
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            if ((($context["child_count"] ?? null) < ($context["child_number"] ?? null))) {
                                // line 123
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["childcate"], "href", [], "any", false, false, false, 123);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["childcate"], "name", [], "any", false, false, false, 123);
                                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 125
                            echo "\t\t\t\t\t\t\t\t\t\t\t";
                            $context["child_count"] = (($context["child_count"] ?? null) + 1);
                            // line 126
                            echo "\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childcate'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 127
                        echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t";
                    }
                    // line 129
                    echo "\t\t\t\t\t\t\t";
                }
                // line 130
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 131
                if (($context["use_second_img"] ?? null)) {
                    // line 132
                    echo "\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t";
                    // line 133
                    if (($context["lazy_load"] ?? null)) {
                        // line 134
                        echo "\t\t\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "secondary_image", [], "any", false, false, false, 134);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 134);
                        echo "\" />
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 136
                        echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "secondary_image", [], "any", false, false, false, 136);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 136);
                        echo "\" />
\t\t\t\t\t\t\t\t";
                    }
                    // line 138
                    echo "\t\t\t\t\t\t\t</div>
                        ";
                }
                // line 140
                echo "                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "            </div>
        ";
        }
        // line 144
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "tt_safira_autopart3/template/plaza/module/ptfeaturedcate.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 144,  384 => 142,  377 => 140,  373 => 138,  365 => 136,  357 => 134,  355 => 133,  352 => 132,  350 => 131,  347 => 130,  344 => 129,  340 => 127,  334 => 126,  331 => 125,  323 => 123,  320 => 122,  316 => 121,  313 => 120,  310 => 119,  307 => 118,  304 => 117,  298 => 115,  296 => 114,  290 => 113,  285 => 110,  281 => 109,  278 => 108,  242 => 79,  237 => 77,  233 => 76,  222 => 75,  217 => 72,  214 => 71,  209 => 68,  207 => 67,  199 => 61,  192 => 56,  190 => 55,  187 => 54,  183 => 52,  181 => 51,  177 => 49,  161 => 42,  158 => 41,  154 => 39,  148 => 38,  145 => 37,  137 => 35,  134 => 34,  130 => 33,  127 => 32,  124 => 31,  121 => 30,  118 => 29,  112 => 27,  110 => 26,  106 => 25,  100 => 24,  97 => 23,  93 => 21,  83 => 19,  73 => 17,  71 => 16,  68 => 15,  66 => 14,  62 => 12,  58 => 11,  53 => 8,  51 => 7,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_autopart3/template/plaza/module/ptfeaturedcate.twig", "");
    }
}
