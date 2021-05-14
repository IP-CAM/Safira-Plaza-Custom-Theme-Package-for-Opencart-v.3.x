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

/* tt_safira_houseware1/template/plaza/module/ptproducts.twig */
class __TwigTemplate_4f55e78f0160684236f5ad7733f5bfcda67e8e260fbb81affe72c772a6480ea4 extends \Twig\Template
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
        echo "
<div class=\"products-container ";
        // line 2
        echo ($context["layout_classname"] ?? null);
        echo " ";
        if ((($context["module_type"] ?? null) == "multi_tabs")) {
            echo "tabs-product";
        }
        echo " ";
        if (( !($context["title"] ?? null) &&  !($context["module_des"] ?? null))) {
            echo "module-no-title";
        }
        echo "\">
\t";
        // line 3
        if ((($context["title"] ?? null) || ($context["module_des"] ?? null))) {
            echo "\t
\t\t<div class=\"block-title\">
\t\t\t";
            // line 5
            if (($context["title"] ?? null)) {
                // line 6
                echo "\t\t\t<div class=\"title\"><span>";
                echo ((($context["title"] ?? null)) ? (($context["title"] ?? null)) : (($context["module_product_title"] ?? null)));
                echo "</span></div>
\t\t\t";
            }
            // line 8
            echo "\t\t\t";
            if (($context["module_des"] ?? null)) {
                // line 9
                echo "\t\t\t\t";
                echo ($context["module_des"] ?? null);
                echo "
\t\t\t";
            }
            // line 11
            echo "\t\t\t
\t\t</div>
\t";
        }
        // line 14
        echo "\t";
        if ((($context["module_type"] ?? null) == "multi_tabs")) {
            // line 15
            echo "\t\t<div class=\"tabs-style\">
\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t";
            // line 17
            $context["tab_count"] = 0;
            // line 18
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 19
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"javascript:void(0);\" data-tab=\"#tab-product-";
                // line 20
                echo ($context["module_id"] ?? null);
                echo "-";
                echo ($context["tab_count"] ?? null);
                echo "\">
\t\t\t\t\t\t\t";
                // line 21
                if (twig_get_attribute($this->env, $this->source, $context["tab"], "title_image", [], "any", false, false, false, 21)) {
                    // line 22
                    echo "\t\t\t\t\t\t\t\t<div class=\"image-thumb\">
\t\t\t\t\t\t\t\t\t<span><img src=\"";
                    // line 23
                    echo twig_get_attribute($this->env, $this->source, $context["tab"], "title_image", [], "any", false, false, false, 23);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 23);
                    echo "\" /></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 26
                echo "\t\t\t\t\t\t\t<span>";
                echo twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 26);
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t";
                // line 29
                $context["tab_count"] = (($context["tab_count"] ?? null) + 1);
                // line 30
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "\t\t\t</ul>
\t\t</div>
\t";
        }
        // line 34
        echo "    <div class=\"pt-content\">
        ";
        // line 36
        echo "        ";
        if ((($context["module_type"] ?? null) == "single_tab")) {
            // line 37
            echo "            ";
            if (($context["single_products"] ?? null)) {
                // line 38
                echo "                ";
                if ((($context["layout_type"] ?? null) == "slider")) {
                    // line 39
                    echo "                    <div class=\"swiper-viewport\">
                        <div class=\"swiper-container single-slides-";
                    // line 40
                    echo ($context["module_id"] ?? null);
                    echo "\">
                            <div class=\"swiper-wrapper\">
                                ";
                    // line 42
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["single_products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 43
                        echo "                                <div class=\"product-thumb transition swiper-slide\">
                                    ";
                        // line 44
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 44);
                        echo "
                                </div>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 47
                    echo "                            </div>
                        </div>
                        ";
                    // line 49
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 49)) {
                        // line 50
                        echo "                            <div class=\"swiper-pagination single-slides-pagination-";
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                        ";
                    }
                    // line 52
                    echo "
                        ";
                    // line 53
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 53)) {
                        // line 54
                        echo "                            <div class=\"swiper-pager\">
                                <div class=\"swiper-button-next swiper-button-next-";
                        // line 55
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                <div class=\"swiper-button-prev swiper-button-prev-";
                        // line 56
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                            </div>
                        ";
                    }
                    // line 59
                    echo "                    </div>
                ";
                }
                // line 61
                echo "
                ";
                // line 62
                if ((($context["layout_type"] ?? null) == "large_item")) {
                    // line 63
                    echo "                    <div class=\"box-large-item\">
                        <div class=\"col col-large-item\">
                            <div class=\"fproduct-content\">
                                <div class=\"product-thumb\">
                                    ";
                    // line 67
                    echo twig_get_attribute($this->env, $this->source, ($context["single_first_product"] ?? null), "large_html", [], "any", false, false, false, 67);
                    echo "
                                </div>
                            </div>
                        </div>
\t\t\t\t\t\t<div class=\"col col-muti-items\">
                            <div class=\"swiper-viewport\">
                                <div class=\"swiper-container single-slides-";
                    // line 73
                    echo ($context["module_id"] ?? null);
                    echo "\">
                                    <div class=\"swiper-wrapper\">
                                        ";
                    // line 75
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["single_products_except_first"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 76
                        echo "                                            <div class=\"product-thumb transition swiper-slide\">
                                                ";
                        // line 77
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 77);
                        echo "
                                            </div>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 80
                    echo "                                    </div>
                                </div>
                                ";
                    // line 82
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 82)) {
                        // line 83
                        echo "                                    <div class=\"swiper-pagination single-slides-pagination-";
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                ";
                    }
                    // line 85
                    echo "
                                ";
                    // line 86
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 86)) {
                        // line 87
                        echo "                                    <div class=\"swiper-pager\">
                                        <div class=\"swiper-button-next swiper-button-next-";
                        // line 88
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                        <div class=\"swiper-button-prev swiper-button-prev-";
                        // line 89
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                    </div>
                                ";
                    }
                    // line 92
                    echo "                            </div>
                        </div>
\t\t\t\t\t\t
                    </div>
                ";
                }
                // line 97
                echo "
                ";
                // line 98
                if ((($context["layout_type"] ?? null) == "image")) {
                    // line 99
                    echo "                    <div class=\"box-large-image\">
                        <div class=\"col col-large-image\">
                            <div class=\"image-content\">
                                ";
                    // line 102
                    if (($context["single_image_link"] ?? null)) {
                        // line 103
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"pt-block\">
\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 105
                        echo ($context["single_image_link"] ?? null);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 106
                        echo ($context["single_image"] ?? null);
                        echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                ";
                    } else {
                        // line 111
                        echo "                                    <img src=\"";
                        echo ($context["single_image"] ?? null);
                        echo "\" alt=\"\" />
                                ";
                    }
                    // line 113
                    echo "                            </div>
                        </div>
                        <div class=\"col col-muti-items\">
                            <div class=\"swiper-viewport\">
                                <div class=\"swiper-container single-slides-";
                    // line 117
                    echo ($context["module_id"] ?? null);
                    echo "\">
                                    <div class=\"swiper-wrapper\">
                                        ";
                    // line 119
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["single_products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 120
                        echo "                                            <div class=\"product-thumb transition swiper-slide\">
                                                ";
                        // line 121
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 121);
                        echo "
                                            </div>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 124
                    echo "                                    </div>
                                </div>
                                ";
                    // line 126
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 126)) {
                        // line 127
                        echo "                                    <div class=\"swiper-pagination single-slides-pagination-";
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                ";
                    }
                    // line 129
                    echo "
                                ";
                    // line 130
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 130)) {
                        // line 131
                        echo "                                    <div class=\"swiper-pager\">
                                        <div class=\"swiper-button-next swiper-button-next-";
                        // line 132
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                        <div class=\"swiper-button-prev swiper-button-prev-";
                        // line 133
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                    </div>
                                ";
                    }
                    // line 136
                    echo "                            </div>
                        </div>
                    </div>
                ";
                }
                // line 140
                echo "
                <script>
                    var product_slides_";
                // line 142
                echo ($context["module_id"] ?? null);
                echo " = \$(\".single-slides-";
                echo ($context["module_id"] ?? null);
                echo "\").swiper({
                        spaceBetween:0,
                        ";
                // line 144
                if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 144)) {
                    // line 145
                    echo "                        pagination: '.single-slides-pagination-";
                    echo ($context["module_id"] ?? null);
                    echo "',
                        paginationClickable: true,
                        ";
                }
                // line 148
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 148)) {
                    // line 149
                    echo "                        nextButton: '.swiper-button-next-";
                    echo ($context["module_id"] ?? null);
                    echo "',
                        prevButton: '.swiper-button-prev-";
                    // line 150
                    echo ($context["module_id"] ?? null);
                    echo "',
                        ";
                }
                // line 152
                echo "                        speed: ";
                if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 152)) {
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 152);
                    echo " ";
                } else {
                    echo " 500 ";
                }
                echo ",
\t\t\t\t\t\tpreloadImages: false,
\t\t\t\t\t\tlazyLoading: false,
\t\t\t\t\t\twatchSlidesVisibility: true,
                        slidesPerView: ";
                // line 156
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_desktop", [], "any", false, false, false, 156);
                echo ",
                        slidesPerColumn: ";
                // line 157
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_desktop", [], "any", false, false, false, 157);
                echo ",
                        breakpoints: {
\t\t\t\t\t\t\t1499: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 160
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_laptop", [], "any", false, false, false, 160);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 161
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_laptop", [], "any", false, false, false, 161);
                echo "
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t1199: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 164
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_tablet", [], "any", false, false, false, 164);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 165
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_tablet", [], "any", false, false, false, 165);
                echo "
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t991: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 168
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_s_tablet", [], "any", false, false, false, 168);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 169
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_s_tablet", [], "any", false, false, false, 169);
                echo "
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t767: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 172
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_mobile", [], "any", false, false, false, 172);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 173
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_mobile", [], "any", false, false, false, 173);
                echo "
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t567: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 176
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_s_mobile", [], "any", false, false, false, 176);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 177
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_s_mobile", [], "any", false, false, false, 177);
                echo "
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t359: {
\t\t\t\t\t\t\t\tslidesPerView: 1
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
                        autoplay: ";
                // line 183
                if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "auto", [], "any", false, false, false, 183)) {
                    echo " 500 ";
                } else {
                    echo " false ";
                }
                echo ",
                        loop: false,
\t\t\t\t\t\tonTransitionEnd: function() {
\t\t\t\t\t\t\t\$('.single-slides-";
                // line 186
                echo ($context["module_id"] ?? null);
                echo " img').lazyload();
\t\t\t\t\t\t}
                    });
\t\t\t\t\t
                </script>
            ";
            } else {
                // line 192
                echo "                <p class=\"txt-empty\">";
                echo ($context["text_empty"] ?? null);
                echo "</p>
            ";
            }
            // line 194
            echo "        ";
        }
        // line 195
        echo "
        ";
        // line 197
        echo "        ";
        if ((($context["module_type"] ?? null) == "multi_tabs")) {
            // line 198
            echo "        <div class=\"product-tabs-section\">
            <div class=\"tab-content product-tabs-content\">
                ";
            // line 200
            $context["tab_count"] = 0;
            // line 201
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 202
                echo "                    <div class=\"tab-product\" id=\"tab-product-";
                echo ($context["module_id"] ?? null);
                echo "-";
                echo ($context["tab_count"] ?? null);
                echo "\">
                        ";
                // line 203
                if (twig_get_attribute($this->env, $this->source, $context["tab"], "products", [], "any", false, false, false, 203)) {
                    // line 204
                    echo "                            ";
                    if ((($context["layout_type"] ?? null) == "slider")) {
                        // line 205
                        echo "                                <div class=\"swiper-viewport\">
                                    <div id=\"";
                        // line 206
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo "-products-container\" class=\"multi-slides-";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo " swiper-container\">
                                        <div class=\"swiper-wrapper\">
                                            ";
                        // line 208
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tab"], "products", [], "any", false, false, false, 208));
                        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                            // line 209
                            echo "                                                <div class=\"product-thumb transition swiper-slide\">
                                                    ";
                            // line 210
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 210);
                            echo "
                                                </div>
                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 213
                        echo "                                        </div>
                                    </div>
                                    ";
                        // line 215
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 215)) {
                            // line 216
                            echo "                                        <div class=\"swiper-pagination multi-slides-pagination-";
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                    ";
                        }
                        // line 218
                        echo "
                                    ";
                        // line 219
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 219)) {
                            // line 220
                            echo "                                        <div class=\"swiper-pager\">
                                            <div class=\"swiper-button-next swiper-button-next-";
                            // line 221
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                            <div class=\"swiper-button-prev swiper-button-prev-";
                            // line 222
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                        </div>
                                    ";
                        }
                        // line 225
                        echo "                                </div>
                            ";
                    }
                    // line 227
                    echo "
                            ";
                    // line 228
                    if ((($context["layout_type"] ?? null) == "large_item")) {
                        // line 229
                        echo "                                
\t\t\t\t\t\t\t\t<div class=\"box-large-item\">
                                    <div class=\"col col-large-item\">
                                        <div class=\"fproduct-content\">
                                            <div class=\"product-thumb\">
                                                ";
                        // line 234
                        echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["tab"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["first_product"] ?? null) : null), "large_html", [], "any", false, false, false, 234);
                        echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col col-muti-items\">
                                        <div class=\"swiper-viewport\">
                                            <div id=\"";
                        // line 240
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo "-products-container\" class=\"multi-slides-";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo " swiper-container\">
                                                <div class=\"swiper-wrapper\">
                                                    ";
                        // line 242
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tab"], "products_except_first", [], "any", false, false, false, 242));
                        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                            // line 243
                            echo "                                                        <div class=\"product-thumb transition swiper-slide\">
                                                            ";
                            // line 244
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 244);
                            echo "
                                                        </div>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 247
                        echo "                                                </div>
                                            </div>
                                            ";
                        // line 249
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 249)) {
                            // line 250
                            echo "                                                <div class=\"swiper-pagination multi-slides-pagination-";
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                            ";
                        }
                        // line 252
                        echo "
                                            ";
                        // line 253
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 253)) {
                            // line 254
                            echo "                                                <div class=\"swiper-pager\">
                                                    <div class=\"swiper-button-next swiper-button-next-";
                            // line 255
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                                    <div class=\"swiper-button-prev swiper-button-prev-";
                            // line 256
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                                </div>
                                            ";
                        }
                        // line 259
                        echo "                                        </div>
                                    </div>
\t\t\t\t\t\t\t\t\t
                                </div>
                            ";
                    }
                    // line 264
                    echo "
                            ";
                    // line 265
                    if ((($context["layout_type"] ?? null) == "image")) {
                        // line 266
                        echo "\t\t\t\t\t\t\t
                            <div class=\"box-large-image\">
                                <div class=\"col col-large-image\">
                                    <div class=\"image-content\">
                                        ";
                        // line 270
                        if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 270)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["link"] ?? null) : null)) {
                            // line 271
                            echo "                                            <div class=\"pt-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 273
                            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 273)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["link"] ?? null) : null);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            // line 274
                            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 274)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["src"] ?? null) : null);
                            echo "\" alt=\"";
                            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 274)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["link"] ?? null) : null);
                            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
                                        ";
                        } else {
                            // line 279
                            echo "                                            <img src=\"";
                            echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 279)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["src"] ?? null) : null);
                            echo "\" alt=\"";
                            echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 279)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["link"] ?? null) : null);
                            echo "\" />
                                        ";
                        }
                        // line 281
                        echo "                                    </div>
                                </div>
\t\t\t\t\t\t\t\t<div class=\"col col-muti-items\">
                                    <div class=\"swiper-viewport\">
                                        <div id=\"";
                        // line 285
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo "-products-container\" class=\"multi-slides-";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo " swiper-container\">
                                            <div class=\"swiper-wrapper\">
                                                ";
                        // line 287
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tab"], "products", [], "any", false, false, false, 287));
                        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                            // line 288
                            echo "                                                    <div class=\"product-thumb transition swiper-slide\">
                                                        ";
                            // line 289
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 289);
                            echo "
                                                    </div>
                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 292
                        echo "                                            </div>
                                        </div>
                                        ";
                        // line 294
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 294)) {
                            // line 295
                            echo "                                            <div class=\"swiper-pagination multi-slides-pagination-";
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                        ";
                        }
                        // line 297
                        echo "
                                        ";
                        // line 298
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 298)) {
                            // line 299
                            echo "                                            <div class=\"swiper-pager\">
                                                <div class=\"swiper-button-next swiper-button-next-";
                            // line 300
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                                <div class=\"swiper-button-prev swiper-button-prev-";
                            // line 301
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                            </div>
                                        ";
                        }
                        // line 304
                        echo "                                    </div>
                                </div>
\t\t\t\t\t\t\t\t
                            </div>
                            ";
                    }
                    // line 309
                    echo "
                            <script>
                                \$(\".multi-slides-";
                    // line 311
                    echo ($context["module_id"] ?? null);
                    echo "-";
                    echo ($context["tab_count"] ?? null);
                    echo "\").swiper({
                                    spaceBetween: 0,
                                    ";
                    // line 313
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 313)) {
                        // line 314
                        echo "                                    pagination: '.multi-slides-pagination-";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo "',
                                    paginationClickable: true,
                                    ";
                    }
                    // line 317
                    echo "                                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 317)) {
                        // line 318
                        echo "                                    nextButton: '.swiper-button-next-";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo "',
                                    prevButton: '.swiper-button-prev-";
                        // line 319
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo "',
                                    ";
                    }
                    // line 321
                    echo "                                    speed: ";
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 321)) {
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 321);
                        echo " ";
                    } else {
                        echo " 500 ";
                    }
                    echo ",
\t\t\t\t\t\t\t\t\tpreloadImages: false,
\t\t\t\t\t\t\t\t\tlazyLoading: false,
\t\t\t\t\t\t\t\t\twatchSlidesVisibility: true,
                                    slidesPerView: ";
                    // line 325
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_desktop", [], "any", false, false, false, 325);
                    echo ",
                                    slidesPerColumn: ";
                    // line 326
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_desktop", [], "any", false, false, false, 326);
                    echo ",
                                    breakpoints: {
                                        1499: {
                                            slidesPerView: ";
                    // line 329
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_laptop", [], "any", false, false, false, 329);
                    echo ",
                                            slidesPerColumn: ";
                    // line 330
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_laptop", [], "any", false, false, false, 330);
                    echo "
                                        },
\t\t\t\t\t\t\t\t\t\t1199: {
                                            slidesPerView: ";
                    // line 333
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_tablet", [], "any", false, false, false, 333);
                    echo ",
                                            slidesPerColumn: ";
                    // line 334
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_tablet", [], "any", false, false, false, 334);
                    echo "
                                        },
                                        991: {
                                            slidesPerView: ";
                    // line 337
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_s_tablet", [], "any", false, false, false, 337);
                    echo ",
                                            slidesPerColumn: ";
                    // line 338
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_s_tablet", [], "any", false, false, false, 338);
                    echo "
                                        },
                                        767: {
                                            slidesPerView: ";
                    // line 341
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_mobile", [], "any", false, false, false, 341);
                    echo ",
                                            slidesPerColumn: ";
                    // line 342
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_mobile", [], "any", false, false, false, 342);
                    echo "
                                        },
                                        567: {
                                            slidesPerView: ";
                    // line 345
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_s_mobile", [], "any", false, false, false, 345);
                    echo ",
                                            slidesPerColumn: ";
                    // line 346
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_s_mobile", [], "any", false, false, false, 346);
                    echo "
                                        },
\t\t\t\t\t\t\t\t\t\t359: {
\t\t\t\t\t\t\t\t\t\t\tslidesPerView: 1
\t\t\t\t\t\t\t\t\t\t}
                                    },
                                    autoplay: ";
                    // line 352
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "auto", [], "any", false, false, false, 352)) {
                        echo " 500 ";
                    } else {
                        echo " false ";
                    }
                    echo ",
                                    loop: false,
\t\t\t\t\t\t\t\t\tonTransitionEnd: function() {
\t\t\t\t\t\t\t\t\t\t\$('.multi-slides-";
                    // line 355
                    echo ($context["module_id"] ?? null);
                    echo "-";
                    echo ($context["tab_count"] ?? null);
                    echo " img').lazyload();
\t\t\t\t\t\t\t\t\t}
                                });
                            </script>
                        ";
                } else {
                    // line 360
                    echo "                            <p class=\"txt-empty\">";
                    echo ($context["text_empty"] ?? null);
                    echo "</p>
                        ";
                }
                // line 362
                echo "                    </div>
                    ";
                // line 363
                $context["tab_count"] = (($context["tab_count"] ?? null) + 1);
                // line 364
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 365
            echo "            </div>
        </div>
        <script>
            \$('.tabs-style .nav-tabs').each(function() {
\t\t\t\t\$(this).find('li').first().addClass('active');
\t\t\t});
\t\t\t
\t\t\t
            \$('.product-tabs-section .tab-content').each(function() {
\t\t\t\t\$(this).find('.tab-product').hide();
\t\t\t\t\$(this).find('.tab-product').first().show();
\t\t\t}); 
\t\t\t
            \$('.tabs-style .nav-tabs a').on('click', function () {
                \$(this).closest('ul').find('li').removeClass('active');
                \$(this).closest('li').addClass('active');

                var tab = \$(this).data('tab');
                var tab_img = \$(this).data('tab') img;
\t\t\t\t\$(tab).closest('.tab-content').find('.tab-product').hide();
                \$(tab).show();
\t\t\t\t\$(tab_img).lazyload();
            });
        </script>
        ";
        }
        // line 390
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "tt_safira_houseware1/template/plaza/module/ptproducts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1003 => 390,  976 => 365,  970 => 364,  968 => 363,  965 => 362,  959 => 360,  949 => 355,  939 => 352,  930 => 346,  926 => 345,  920 => 342,  916 => 341,  910 => 338,  906 => 337,  900 => 334,  896 => 333,  890 => 330,  886 => 329,  880 => 326,  876 => 325,  862 => 321,  855 => 319,  848 => 318,  845 => 317,  836 => 314,  834 => 313,  827 => 311,  823 => 309,  816 => 304,  808 => 301,  802 => 300,  799 => 299,  797 => 298,  794 => 297,  786 => 295,  784 => 294,  780 => 292,  771 => 289,  768 => 288,  764 => 287,  753 => 285,  747 => 281,  739 => 279,  729 => 274,  725 => 273,  721 => 271,  719 => 270,  713 => 266,  711 => 265,  708 => 264,  701 => 259,  693 => 256,  687 => 255,  684 => 254,  682 => 253,  679 => 252,  671 => 250,  669 => 249,  665 => 247,  656 => 244,  653 => 243,  649 => 242,  638 => 240,  629 => 234,  622 => 229,  620 => 228,  617 => 227,  613 => 225,  605 => 222,  599 => 221,  596 => 220,  594 => 219,  591 => 218,  583 => 216,  581 => 215,  577 => 213,  568 => 210,  565 => 209,  561 => 208,  550 => 206,  547 => 205,  544 => 204,  542 => 203,  535 => 202,  530 => 201,  528 => 200,  524 => 198,  521 => 197,  518 => 195,  515 => 194,  509 => 192,  500 => 186,  490 => 183,  481 => 177,  477 => 176,  471 => 173,  467 => 172,  461 => 169,  457 => 168,  451 => 165,  447 => 164,  441 => 161,  437 => 160,  431 => 157,  427 => 156,  413 => 152,  408 => 150,  403 => 149,  400 => 148,  393 => 145,  391 => 144,  384 => 142,  380 => 140,  374 => 136,  368 => 133,  364 => 132,  361 => 131,  359 => 130,  356 => 129,  350 => 127,  348 => 126,  344 => 124,  335 => 121,  332 => 120,  328 => 119,  323 => 117,  317 => 113,  311 => 111,  303 => 106,  299 => 105,  295 => 103,  293 => 102,  288 => 99,  286 => 98,  283 => 97,  276 => 92,  270 => 89,  266 => 88,  263 => 87,  261 => 86,  258 => 85,  252 => 83,  250 => 82,  246 => 80,  237 => 77,  234 => 76,  230 => 75,  225 => 73,  216 => 67,  210 => 63,  208 => 62,  205 => 61,  201 => 59,  195 => 56,  191 => 55,  188 => 54,  186 => 53,  183 => 52,  177 => 50,  175 => 49,  171 => 47,  162 => 44,  159 => 43,  155 => 42,  150 => 40,  147 => 39,  144 => 38,  141 => 37,  138 => 36,  135 => 34,  130 => 31,  124 => 30,  122 => 29,  115 => 26,  107 => 23,  104 => 22,  102 => 21,  96 => 20,  93 => 19,  88 => 18,  86 => 17,  82 => 15,  79 => 14,  74 => 11,  68 => 9,  65 => 8,  59 => 6,  57 => 5,  52 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_houseware1/template/plaza/module/ptproducts.twig", "");
    }
}
