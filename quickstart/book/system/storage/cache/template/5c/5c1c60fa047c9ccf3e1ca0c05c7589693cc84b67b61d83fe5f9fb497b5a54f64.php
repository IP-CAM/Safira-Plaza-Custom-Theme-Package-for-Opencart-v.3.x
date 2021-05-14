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
class __TwigTemplate_2b03cc11999805b62e5fde3b3f978b6ae902df64760ea1fa913c6d2078dae825 extends \Twig\Template
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
\t\t\t\t\t\t
\t\t\t\t\t\twatchSlidesVisibility: true,
                        slidesPerView: ";
                // line 155
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_desktop", [], "any", false, false, false, 155);
                echo ",
                        slidesPerColumn: ";
                // line 156
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_desktop", [], "any", false, false, false, 156);
                echo ",
                        breakpoints: {
\t\t\t\t\t\t\t1499: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 159
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_laptop", [], "any", false, false, false, 159);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 160
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_laptop", [], "any", false, false, false, 160);
                echo "
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t1199: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 163
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_tablet", [], "any", false, false, false, 163);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 164
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_tablet", [], "any", false, false, false, 164);
                echo "
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t991: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 167
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_s_tablet", [], "any", false, false, false, 167);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 168
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_s_tablet", [], "any", false, false, false, 168);
                echo "
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t767: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 171
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_mobile", [], "any", false, false, false, 171);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 172
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_mobile", [], "any", false, false, false, 172);
                echo "
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t567: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 175
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_s_mobile", [], "any", false, false, false, 175);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 176
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_s_mobile", [], "any", false, false, false, 176);
                echo "
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t359: {
\t\t\t\t\t\t\t\tslidesPerView: 1
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
                        autoplay: ";
                // line 182
                if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "auto", [], "any", false, false, false, 182)) {
                    echo " 500 ";
                } else {
                    echo " false ";
                }
                echo ",
                        loop: false
                    });
\t\t\t\t\t
                </script>
            ";
            } else {
                // line 188
                echo "                <p class=\"txt-empty\">";
                echo ($context["text_empty"] ?? null);
                echo "</p>
            ";
            }
            // line 190
            echo "        ";
        }
        // line 191
        echo "
        ";
        // line 193
        echo "        ";
        if ((($context["module_type"] ?? null) == "multi_tabs")) {
            // line 194
            echo "        <div class=\"product-tabs-section\">
            <div class=\"tab-content product-tabs-content\">
                ";
            // line 196
            $context["tab_count"] = 0;
            // line 197
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 198
                echo "                    <div class=\"tab-product\" id=\"tab-product-";
                echo ($context["module_id"] ?? null);
                echo "-";
                echo ($context["tab_count"] ?? null);
                echo "\">
                        ";
                // line 199
                if (twig_get_attribute($this->env, $this->source, $context["tab"], "products", [], "any", false, false, false, 199)) {
                    // line 200
                    echo "                            ";
                    if ((($context["layout_type"] ?? null) == "slider")) {
                        // line 201
                        echo "                                <div class=\"swiper-viewport\">
                                    <div id=\"";
                        // line 202
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
                        // line 204
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tab"], "products", [], "any", false, false, false, 204));
                        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                            // line 205
                            echo "                                                <div class=\"product-thumb transition swiper-slide\">
                                                    ";
                            // line 206
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 206);
                            echo "
                                                </div>
                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 209
                        echo "                                        </div>
                                    </div>
                                    ";
                        // line 211
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 211)) {
                            // line 212
                            echo "                                        <div class=\"swiper-pagination multi-slides-pagination-";
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                    ";
                        }
                        // line 214
                        echo "
                                    ";
                        // line 215
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 215)) {
                            // line 216
                            echo "                                        <div class=\"swiper-pager\">
                                            <div class=\"swiper-button-next swiper-button-next-";
                            // line 217
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                            <div class=\"swiper-button-prev swiper-button-prev-";
                            // line 218
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                        </div>
                                    ";
                        }
                        // line 221
                        echo "                                </div>
                            ";
                    }
                    // line 223
                    echo "
                            ";
                    // line 224
                    if ((($context["layout_type"] ?? null) == "large_item")) {
                        // line 225
                        echo "                                
\t\t\t\t\t\t\t\t<div class=\"box-large-item\">
                                    <div class=\"col col-large-item\">
                                        <div class=\"fproduct-content\">
                                            <div class=\"product-thumb\">
                                                ";
                        // line 230
                        echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["tab"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["first_product"] ?? null) : null), "large_html", [], "any", false, false, false, 230);
                        echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col col-muti-items\">
                                        <div class=\"swiper-viewport\">
                                            <div id=\"";
                        // line 236
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
                        // line 238
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tab"], "products_except_first", [], "any", false, false, false, 238));
                        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                            // line 239
                            echo "                                                        <div class=\"product-thumb transition swiper-slide\">
                                                            ";
                            // line 240
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 240);
                            echo "
                                                        </div>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 243
                        echo "                                                </div>
                                            </div>
                                            ";
                        // line 245
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 245)) {
                            // line 246
                            echo "                                                <div class=\"swiper-pagination multi-slides-pagination-";
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                            ";
                        }
                        // line 248
                        echo "
                                            ";
                        // line 249
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 249)) {
                            // line 250
                            echo "                                                <div class=\"swiper-pager\">
                                                    <div class=\"swiper-button-next swiper-button-next-";
                            // line 251
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                                    <div class=\"swiper-button-prev swiper-button-prev-";
                            // line 252
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                                </div>
                                            ";
                        }
                        // line 255
                        echo "                                        </div>
                                    </div>
\t\t\t\t\t\t\t\t\t
                                </div>
                            ";
                    }
                    // line 260
                    echo "
                            ";
                    // line 261
                    if ((($context["layout_type"] ?? null) == "image")) {
                        // line 262
                        echo "\t\t\t\t\t\t\t
                            <div class=\"box-large-image\">
                                <div class=\"col col-large-image\">
                                    <div class=\"image-content\">
                                        ";
                        // line 266
                        if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 266)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["link"] ?? null) : null)) {
                            // line 267
                            echo "                                            <div class=\"pt-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 269
                            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 269)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["link"] ?? null) : null);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            // line 270
                            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 270)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["src"] ?? null) : null);
                            echo "\" alt=\"";
                            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 270)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["link"] ?? null) : null);
                            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
                                        ";
                        } else {
                            // line 275
                            echo "                                            <img src=\"";
                            echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 275)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["src"] ?? null) : null);
                            echo "\" alt=\"";
                            echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 275)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["link"] ?? null) : null);
                            echo "\" />
                                        ";
                        }
                        // line 277
                        echo "                                    </div>
                                </div>
\t\t\t\t\t\t\t\t<div class=\"col col-muti-items\">
                                    <div class=\"swiper-viewport\">
                                        <div id=\"";
                        // line 281
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
                        // line 283
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tab"], "products", [], "any", false, false, false, 283));
                        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                            // line 284
                            echo "                                                    <div class=\"product-thumb transition swiper-slide\">
                                                        ";
                            // line 285
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 285);
                            echo "
                                                    </div>
                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 288
                        echo "                                            </div>
                                        </div>
                                        ";
                        // line 290
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 290)) {
                            // line 291
                            echo "                                            <div class=\"swiper-pagination multi-slides-pagination-";
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                        ";
                        }
                        // line 293
                        echo "
                                        ";
                        // line 294
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 294)) {
                            // line 295
                            echo "                                            <div class=\"swiper-pager\">
                                                <div class=\"swiper-button-next swiper-button-next-";
                            // line 296
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                                <div class=\"swiper-button-prev swiper-button-prev-";
                            // line 297
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                            </div>
                                        ";
                        }
                        // line 300
                        echo "                                    </div>
                                </div>
\t\t\t\t\t\t\t\t
                            </div>
                            ";
                    }
                    // line 305
                    echo "
                            <script>
                                \$(\".multi-slides-";
                    // line 307
                    echo ($context["module_id"] ?? null);
                    echo "-";
                    echo ($context["tab_count"] ?? null);
                    echo "\").swiper({
                                    spaceBetween: 0,
                                    ";
                    // line 309
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 309)) {
                        // line 310
                        echo "                                    pagination: '.multi-slides-pagination-";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo "',
                                    paginationClickable: true,
                                    ";
                    }
                    // line 313
                    echo "                                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 313)) {
                        // line 314
                        echo "                                    nextButton: '.swiper-button-next-";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo "',
                                    prevButton: '.swiper-button-prev-";
                        // line 315
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo "',
                                    ";
                    }
                    // line 317
                    echo "                                    speed: ";
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 317)) {
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 317);
                        echo " ";
                    } else {
                        echo " 500 ";
                    }
                    echo ",
\t\t\t\t\t\t\t\t\tpreloadImages: false,
\t\t\t\t\t\t\t\t\tlazyLoading: true,
\t\t\t\t\t\t\t\t\twatchSlidesVisibility: true,
                                    slidesPerView: ";
                    // line 321
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_desktop", [], "any", false, false, false, 321);
                    echo ",
                                    slidesPerColumn: ";
                    // line 322
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_desktop", [], "any", false, false, false, 322);
                    echo ",
                                    breakpoints: {
                                        1499: {
                                            slidesPerView: ";
                    // line 325
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_laptop", [], "any", false, false, false, 325);
                    echo ",
                                            slidesPerColumn: ";
                    // line 326
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_laptop", [], "any", false, false, false, 326);
                    echo "
                                        },
\t\t\t\t\t\t\t\t\t\t1199: {
                                            slidesPerView: ";
                    // line 329
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_tablet", [], "any", false, false, false, 329);
                    echo ",
                                            slidesPerColumn: ";
                    // line 330
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_tablet", [], "any", false, false, false, 330);
                    echo "
                                        },
                                        991: {
                                            slidesPerView: ";
                    // line 333
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_s_tablet", [], "any", false, false, false, 333);
                    echo ",
                                            slidesPerColumn: ";
                    // line 334
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_s_tablet", [], "any", false, false, false, 334);
                    echo "
                                        },
                                        767: {
                                            slidesPerView: ";
                    // line 337
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_mobile", [], "any", false, false, false, 337);
                    echo ",
                                            slidesPerColumn: ";
                    // line 338
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_mobile", [], "any", false, false, false, 338);
                    echo "
                                        },
                                        567: {
                                            slidesPerView: ";
                    // line 341
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_s_mobile", [], "any", false, false, false, 341);
                    echo ",
                                            slidesPerColumn: ";
                    // line 342
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_s_mobile", [], "any", false, false, false, 342);
                    echo "
                                        },
\t\t\t\t\t\t\t\t\t\t359: {
\t\t\t\t\t\t\t\t\t\t\tslidesPerView: 1
\t\t\t\t\t\t\t\t\t\t}
                                    },
                                    autoplay: ";
                    // line 348
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "auto", [], "any", false, false, false, 348)) {
                        echo " 500 ";
                    } else {
                        echo " false ";
                    }
                    echo ",
                                    loop: false
                                });
                            </script>
                        ";
                } else {
                    // line 353
                    echo "                            <p class=\"txt-empty\">";
                    echo ($context["text_empty"] ?? null);
                    echo "</p>
                        ";
                }
                // line 355
                echo "                    </div>
                    ";
                // line 356
                $context["tab_count"] = (($context["tab_count"] ?? null) + 1);
                // line 357
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 358
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
\t\t\t\t\$(tab).closest('.tab-content').find('.tab-product').hide();
                \$(tab).show();
            });
        </script>
        ";
        }
        // line 381
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
        return array (  986 => 381,  961 => 358,  955 => 357,  953 => 356,  950 => 355,  944 => 353,  932 => 348,  923 => 342,  919 => 341,  913 => 338,  909 => 337,  903 => 334,  899 => 333,  893 => 330,  889 => 329,  883 => 326,  879 => 325,  873 => 322,  869 => 321,  855 => 317,  848 => 315,  841 => 314,  838 => 313,  829 => 310,  827 => 309,  820 => 307,  816 => 305,  809 => 300,  801 => 297,  795 => 296,  792 => 295,  790 => 294,  787 => 293,  779 => 291,  777 => 290,  773 => 288,  764 => 285,  761 => 284,  757 => 283,  746 => 281,  740 => 277,  732 => 275,  722 => 270,  718 => 269,  714 => 267,  712 => 266,  706 => 262,  704 => 261,  701 => 260,  694 => 255,  686 => 252,  680 => 251,  677 => 250,  675 => 249,  672 => 248,  664 => 246,  662 => 245,  658 => 243,  649 => 240,  646 => 239,  642 => 238,  631 => 236,  622 => 230,  615 => 225,  613 => 224,  610 => 223,  606 => 221,  598 => 218,  592 => 217,  589 => 216,  587 => 215,  584 => 214,  576 => 212,  574 => 211,  570 => 209,  561 => 206,  558 => 205,  554 => 204,  543 => 202,  540 => 201,  537 => 200,  535 => 199,  528 => 198,  523 => 197,  521 => 196,  517 => 194,  514 => 193,  511 => 191,  508 => 190,  502 => 188,  489 => 182,  480 => 176,  476 => 175,  470 => 172,  466 => 171,  460 => 168,  456 => 167,  450 => 164,  446 => 163,  440 => 160,  436 => 159,  430 => 156,  426 => 155,  413 => 152,  408 => 150,  403 => 149,  400 => 148,  393 => 145,  391 => 144,  384 => 142,  380 => 140,  374 => 136,  368 => 133,  364 => 132,  361 => 131,  359 => 130,  356 => 129,  350 => 127,  348 => 126,  344 => 124,  335 => 121,  332 => 120,  328 => 119,  323 => 117,  317 => 113,  311 => 111,  303 => 106,  299 => 105,  295 => 103,  293 => 102,  288 => 99,  286 => 98,  283 => 97,  276 => 92,  270 => 89,  266 => 88,  263 => 87,  261 => 86,  258 => 85,  252 => 83,  250 => 82,  246 => 80,  237 => 77,  234 => 76,  230 => 75,  225 => 73,  216 => 67,  210 => 63,  208 => 62,  205 => 61,  201 => 59,  195 => 56,  191 => 55,  188 => 54,  186 => 53,  183 => 52,  177 => 50,  175 => 49,  171 => 47,  162 => 44,  159 => 43,  155 => 42,  150 => 40,  147 => 39,  144 => 38,  141 => 37,  138 => 36,  135 => 34,  130 => 31,  124 => 30,  122 => 29,  115 => 26,  107 => 23,  104 => 22,  102 => 21,  96 => 20,  93 => 19,  88 => 18,  86 => 17,  82 => 15,  79 => 14,  74 => 11,  68 => 9,  65 => 8,  59 => 6,  57 => 5,  52 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_houseware1/template/plaza/module/ptproducts.twig", "");
    }
}
