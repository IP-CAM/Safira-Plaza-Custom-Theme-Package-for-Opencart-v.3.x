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

/* tt_safira4/template/plaza/module/ptproducts.twig */
class __TwigTemplate_f260dce9a7ba4f1b18de97eea94c0e720ab8f8dca8234a5da6ca089e3862bf35 extends \Twig\Template
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
        echo "<div class=\"products-container ";
        echo ($context["layout_classname"] ?? null);
        echo " ";
        if ((($context["module_type"] ?? null) == "multi_tabs")) {
            echo "tabs-product";
        }
        echo "\">
    <div class=\"block-title\">
\t\t<p>
\t\t";
        // line 4
        if (($context["module_des"] ?? null)) {
            // line 5
            echo "            ";
            echo ($context["module_des"] ?? null);
            echo "
        ";
        }
        // line 7
        echo "\t\t</p>
        <h3><span>";
        // line 8
        echo ((($context["title"] ?? null)) ? (($context["title"] ?? null)) : (($context["module_product_title"] ?? null)));
        echo "</span></h3>
\t\t";
        // line 9
        if ((($context["module_type"] ?? null) == "multi_tabs")) {
            // line 10
            echo "\t\t\t<div class=\"tabs-style\">
\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t";
            // line 12
            $context["tab_count"] = 0;
            // line 13
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 14
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" data-tab=\"#tab-product-";
                // line 15
                echo ($context["module_id"] ?? null);
                echo "-";
                echo ($context["tab_count"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t";
                // line 16
                if (twig_get_attribute($this->env, $this->source, $context["tab"], "title_image", [], "any", false, false, false, 16)) {
                    // line 17
                    echo "                                    ";
                    if (($context["lazy_load"] ?? null)) {
                        // line 18
                        echo "                                        <img class=\"lazyload\" src=\"";
                        echo ($context["loader_img"] ?? null);
                        echo "\" data-src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["tab"], "title_image", [], "any", false, false, false, 18);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 18);
                        echo "\" />
                                    ";
                    } else {
                        // line 20
                        echo "                                        <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["tab"], "title_image", [], "any", false, false, false, 20);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 20);
                        echo "\" />
                                    ";
                    }
                    // line 22
                    echo "                                ";
                }
                // line 23
                echo "                                <span>";
                echo twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 23);
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                // line 26
                $context["tab_count"] = (($context["tab_count"] ?? null) + 1);
                // line 27
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t";
        }
        // line 31
        echo "    </div>
    <div class=\"pt-content\">
        ";
        // line 34
        echo "        ";
        if ((($context["module_type"] ?? null) == "single_tab")) {
            // line 35
            echo "            ";
            if (($context["single_products"] ?? null)) {
                // line 36
                echo "                ";
                if ((($context["layout_type"] ?? null) == "slider")) {
                    // line 37
                    echo "                    ";
                    if ((($context["product_layout_type"] ?? null) == "other")) {
                        // line 38
                        echo "                    <div class=\"gallery-product\">
                    ";
                    }
                    // line 40
                    echo "                    <div class=\"swiper-viewport\">
                        <div class=\"swiper-container single-slides-";
                    // line 41
                    echo ($context["module_id"] ?? null);
                    echo "\">
                            <div class=\"swiper-wrapper\">
                                ";
                    // line 43
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["single_products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 44
                        echo "                                <div class=\"product-thumb transition swiper-slide\">
                                    ";
                        // line 45
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 45);
                        echo "
                                </div>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 48
                    echo "                            </div>
                        </div>
                        ";
                    // line 50
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 50)) {
                        // line 51
                        echo "                            <div class=\"swiper-pagination single-slides-pagination-";
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                        ";
                    }
                    // line 53
                    echo "
                        ";
                    // line 54
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 54)) {
                        // line 55
                        echo "                            <div class=\"swiper-pager\">
                                <div class=\"swiper-button-next swiper-button-next-";
                        // line 56
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                <div class=\"swiper-button-prev swiper-button-prev-";
                        // line 57
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                            </div>
                        ";
                    }
                    // line 60
                    echo "                    </div>
                    ";
                    // line 61
                    if ((($context["product_layout_type"] ?? null) == "other")) {
                        // line 62
                        echo "                    </div>

                    <script>
                        \$(\".gallery-thumbs-";
                        // line 65
                        echo ($context["module_id"] ?? null);
                        echo "\").swiper({
                            spaceBetween: 20,
\t\t\t\t\t\t\tnextButton: '.pimg-button-next-";
                        // line 67
                        echo ($context["module_id"] ?? null);
                        echo "',
\t\t\t\t\t\t\tprevButton: '.pimg-button-prev-";
                        // line 68
                        echo ($context["module_id"] ?? null);
                        echo "',
\t\t\t\t\t\t\tspeed: 300,
\t\t\t\t\t\t\tslidesPerView: 3,
\t\t\t\t\t\t\tautoplay: false,
\t\t\t\t\t\t\tsimulateTouch: false,
\t\t\t\t\t\t\tloop: false,
\t\t\t\t\t\t\tbreakpoints: {
\t\t\t\t\t\t\t\t479: {
\t\t\t\t\t\t\t\t  slidesPerView: 5
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t767: {
\t\t\t\t\t\t\t\t  slidesPerView: 5
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t991: {
\t\t\t\t\t\t\t\t  slidesPerView: 6
\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t1199: {
\t\t\t\t\t\t\t\t  slidesPerView: 3
\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
                        });

                        function productGoToSlide(index) {
                            product_slides_";
                        // line 93
                        echo ($context["module_id"] ?? null);
                        echo ".slideTo(index);
                        }
\t\t\t\t\t\t\$('.gallery-thumbs .swiper-slide-active .thumb-image').addClass('active');
\t\t\t\t\t\t\$('.gallery-thumbs .thumb-image').click(function(){
\t\t\t\t\t\t\t\$('.gallery-thumbs .thumb-image').removeClass('active');
\t\t\t\t\t\t\t\$(this).addClass('active');
\t\t\t\t\t\t});
                    </script>
                    ";
                    }
                    // line 102
                    echo "                ";
                }
                // line 103
                echo "
                ";
                // line 104
                if ((($context["layout_type"] ?? null) == "large_item")) {
                    // line 105
                    echo "                    <div class=\"row\">
                        <div class=\"col-md-4 col-sm-12\">
                            <div class=\"fproduct-content\">
                                <div class=\"product-thumb\">
                                    ";
                    // line 109
                    echo twig_get_attribute($this->env, $this->source, ($context["single_first_product"] ?? null), "html", [], "any", false, false, false, 109);
                    echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-8 col-sm-12\">
                            <div class=\"swiper-viewport\">
                                <div class=\"swiper-container single-slides-";
                    // line 115
                    echo ($context["module_id"] ?? null);
                    echo "\">
                                    <div class=\"swiper-wrapper\">
                                        ";
                    // line 117
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["single_products_except_first"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 118
                        echo "                                            <div class=\"product-thumb transition swiper-slide\">
                                                ";
                        // line 119
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 119);
                        echo "
                                            </div>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 122
                    echo "                                    </div>
                                </div>
                                ";
                    // line 124
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 124)) {
                        // line 125
                        echo "                                    <div class=\"swiper-pagination single-slides-pagination-";
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                ";
                    }
                    // line 127
                    echo "
                                ";
                    // line 128
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 128)) {
                        // line 129
                        echo "                                    <div class=\"swiper-pager\">
                                        <div class=\"swiper-button-next swiper-button-next-";
                        // line 130
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                        <div class=\"swiper-button-prev swiper-button-prev-";
                        // line 131
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                    </div>
                                ";
                    }
                    // line 134
                    echo "                            </div>
                        </div>
                    </div>
                ";
                }
                // line 138
                echo "
                ";
                // line 139
                if ((($context["layout_type"] ?? null) == "image")) {
                    // line 140
                    echo "                    <div class=\"row\">
                        <div class=\"col-md-4 col-sm-5 col-sms-12\">
                            <div class=\"image-content\">
                                ";
                    // line 143
                    if (($context["single_image_link"] ?? null)) {
                        // line 144
                        echo "                                    <a href=\"";
                        echo ($context["single_image_link"] ?? null);
                        echo "\">
                                        ";
                        // line 145
                        if (($context["lazy_load"] ?? null)) {
                            // line 146
                            echo "                                            <img class=\"lazyload\" src=\"";
                            echo ($context["loader_img"] ?? null);
                            echo "\" data-src=\"";
                            echo ($context["single_image"] ?? null);
                            echo "\" alt=\"\" />
                                        ";
                        } else {
                            // line 148
                            echo "                                            <img src=\"";
                            echo ($context["single_image"] ?? null);
                            echo "\" alt=\"\" />
                                        ";
                        }
                        // line 150
                        echo "                                    </a>
                                ";
                    } else {
                        // line 152
                        echo "                                    ";
                        if (($context["lazy_load"] ?? null)) {
                            // line 153
                            echo "                                        <img class=\"lazyload\" src=\"";
                            echo ($context["loader_img"] ?? null);
                            echo "\" data-src=\"";
                            echo ($context["single_image"] ?? null);
                            echo "\" alt=\"\" />
                                    ";
                        } else {
                            // line 155
                            echo "                                        <img src=\"";
                            echo ($context["single_image"] ?? null);
                            echo "\" alt=\"\" />
                                    ";
                        }
                        // line 157
                        echo "                                ";
                    }
                    // line 158
                    echo "                            </div>
                        </div>
                        <div class=\"col-md-8 col-sm-7 col-sms-12\">
                            <div class=\"swiper-viewport\">
                                <div class=\"swiper-container single-slides-";
                    // line 162
                    echo ($context["module_id"] ?? null);
                    echo "\">
                                    <div class=\"swiper-wrapper\">
                                        ";
                    // line 164
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["single_products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 165
                        echo "                                            <div class=\"product-thumb transition swiper-slide\">
                                                ";
                        // line 166
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 166);
                        echo "
                                            </div>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 169
                    echo "                                    </div>
                                </div>
                                ";
                    // line 171
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 171)) {
                        // line 172
                        echo "                                    <div class=\"swiper-pagination single-slides-pagination-";
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                ";
                    }
                    // line 174
                    echo "
                                ";
                    // line 175
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 175)) {
                        // line 176
                        echo "                                    <div class=\"swiper-pager\">
                                        <div class=\"swiper-button-next swiper-button-next-";
                        // line 177
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                        <div class=\"swiper-button-prev swiper-button-prev-";
                        // line 178
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                    </div>
                                ";
                    }
                    // line 181
                    echo "                            </div>
                        </div>
                    </div>
                ";
                }
                // line 185
                echo "
                <script>
                    var product_slides_";
                // line 187
                echo ($context["module_id"] ?? null);
                echo " = \$(\".single-slides-";
                echo ($context["module_id"] ?? null);
                echo "\").swiper({
                        spaceBetween:0,
                        ";
                // line 189
                if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 189)) {
                    // line 190
                    echo "                        pagination: '.single-slides-pagination-";
                    echo ($context["module_id"] ?? null);
                    echo "',
                        paginationClickable: true,
                        ";
                }
                // line 193
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 193)) {
                    // line 194
                    echo "                        nextButton: '.swiper-button-next-";
                    echo ($context["module_id"] ?? null);
                    echo "',
                        prevButton: '.swiper-button-prev-";
                    // line 195
                    echo ($context["module_id"] ?? null);
                    echo "',
                        ";
                }
                // line 197
                echo "                        speed: ";
                if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 197)) {
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 197);
                    echo " ";
                } else {
                    echo " 500 ";
                }
                echo ",
\t\t\t\t\t\tpreloadImages: false,
\t\t\t\t\t\tlazyLoading: true,
\t\t\t\t\t\twatchSlidesVisibility: true,
                        slidesPerView: ";
                // line 201
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_desktop", [], "any", false, false, false, 201);
                echo ",
                        slidesPerColumn: ";
                // line 202
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_desktop", [], "any", false, false, false, 202);
                echo ",
                        breakpoints: {
\t\t\t\t\t\t\t1499: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 205
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_laptop", [], "any", false, false, false, 205);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 206
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_laptop", [], "any", false, false, false, 206);
                echo "
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t1199: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 209
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_tablet", [], "any", false, false, false, 209);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 210
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_tablet", [], "any", false, false, false, 210);
                echo "
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t991: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 213
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_s_tablet", [], "any", false, false, false, 213);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 214
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_s_tablet", [], "any", false, false, false, 214);
                echo "
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t767: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 217
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_mobile", [], "any", false, false, false, 217);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 218
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_mobile", [], "any", false, false, false, 218);
                echo "
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t479: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 221
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_s_mobile", [], "any", false, false, false, 221);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 222
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_s_mobile", [], "any", false, false, false, 222);
                echo "
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
                        autoplay: ";
                // line 225
                if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "auto", [], "any", false, false, false, 225)) {
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
                // line 230
                echo "                <p class=\"txt-empty\">";
                echo ($context["text_empty"] ?? null);
                echo "</p>
            ";
            }
            // line 232
            echo "        ";
        }
        // line 233
        echo "
        ";
        // line 235
        echo "        ";
        if ((($context["module_type"] ?? null) == "multi_tabs")) {
            // line 236
            echo "        <div class=\"product-tabs-section\">
            <div class=\"tab-content product-tabs-content\">
                ";
            // line 238
            $context["tab_count"] = 0;
            // line 239
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 240
                echo "                    <div class=\"tab-product\" id=\"tab-product-";
                echo ($context["module_id"] ?? null);
                echo "-";
                echo ($context["tab_count"] ?? null);
                echo "\">
                        ";
                // line 241
                if (twig_get_attribute($this->env, $this->source, $context["tab"], "products", [], "any", false, false, false, 241)) {
                    // line 242
                    echo "                            ";
                    if ((($context["layout_type"] ?? null) == "slider")) {
                        // line 243
                        echo "                                <div class=\"swiper-viewport\">
                                    <div id=\"";
                        // line 244
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
                        // line 246
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tab"], "products", [], "any", false, false, false, 246));
                        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                            // line 247
                            echo "                                                <div class=\"product-thumb transition swiper-slide\">
                                                    ";
                            // line 248
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 248);
                            echo "
                                                </div>
                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 251
                        echo "                                        </div>
                                    </div>
                                    ";
                        // line 253
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 253)) {
                            // line 254
                            echo "                                        <div class=\"swiper-pagination multi-slides-pagination-";
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                    ";
                        }
                        // line 256
                        echo "
                                    ";
                        // line 257
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 257)) {
                            // line 258
                            echo "                                        <div class=\"swiper-pager\">
                                            <div class=\"swiper-button-next swiper-button-next-";
                            // line 259
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                            <div class=\"swiper-button-prev swiper-button-prev-";
                            // line 260
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                        </div>
                                    ";
                        }
                        // line 263
                        echo "                                </div>
                            ";
                    }
                    // line 265
                    echo "
                            ";
                    // line 266
                    if ((($context["layout_type"] ?? null) == "large_item")) {
                        // line 267
                        echo "                                <div class=\"row\">
                                    <div class=\"col-md-4 col-sm-12\">
                                        <div class=\"fproduct-content\">
                                            <div class=\"product-thumb\">
                                                ";
                        // line 271
                        echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["tab"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["first_product"] ?? null) : null), "html", [], "any", false, false, false, 271);
                        echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-8 col-sm-12\">
                                        <div class=\"swiper-viewport\">
                                            <div id=\"";
                        // line 277
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
                        // line 279
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tab"], "products_except_first", [], "any", false, false, false, 279));
                        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                            // line 280
                            echo "                                                        <div class=\"product-thumb transition swiper-slide\">
                                                            ";
                            // line 281
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 281);
                            echo "
                                                        </div>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 284
                        echo "                                                </div>
                                            </div>
                                            ";
                        // line 286
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 286)) {
                            // line 287
                            echo "                                                <div class=\"swiper-pagination multi-slides-pagination-";
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                            ";
                        }
                        // line 289
                        echo "
                                            ";
                        // line 290
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 290)) {
                            // line 291
                            echo "                                                <div class=\"swiper-pager\">
                                                    <div class=\"swiper-button-next swiper-button-next-";
                            // line 292
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                                    <div class=\"swiper-button-prev swiper-button-prev-";
                            // line 293
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                                </div>
                                            ";
                        }
                        // line 296
                        echo "                                        </div>
                                    </div>
                                </div>
                            ";
                    }
                    // line 300
                    echo "
                            ";
                    // line 301
                    if ((($context["layout_type"] ?? null) == "image")) {
                        // line 302
                        echo "                            <div class=\"row\">
                                <div class=\"col-md-9 col-sm-8 col-xs-12\">
                                    <div class=\"swiper-viewport\">
                                        <div id=\"";
                        // line 305
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
                        // line 307
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tab"], "products", [], "any", false, false, false, 307));
                        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                            // line 308
                            echo "                                                    <div class=\"product-thumb transition swiper-slide\">
                                                        ";
                            // line 309
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 309);
                            echo "
                                                    </div>
                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 312
                        echo "                                            </div>
                                        </div>
                                        ";
                        // line 314
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 314)) {
                            // line 315
                            echo "                                            <div class=\"swiper-pagination multi-slides-pagination-";
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                        ";
                        }
                        // line 317
                        echo "
                                        ";
                        // line 318
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 318)) {
                            // line 319
                            echo "                                            <div class=\"swiper-pager\">
                                                <div class=\"swiper-button-next swiper-button-next-";
                            // line 320
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                                <div class=\"swiper-button-prev swiper-button-prev-";
                            // line 321
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                            </div>
                                        ";
                        }
                        // line 324
                        echo "                                    </div>
                                </div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12\">
                                    <div class=\"image-content\">
                                        ";
                        // line 328
                        if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 328)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["link"] ?? null) : null)) {
                            // line 329
                            echo "                                            <div class=\"pt-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 331
                            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 331)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["link"] ?? null) : null);
                            echo "\">
                                                        ";
                            // line 332
                            if (($context["lazy_load"] ?? null)) {
                                // line 333
                                echo "                                                            <img class=\"lazyload\" src=\"";
                                echo ($context["loader_img"] ?? null);
                                echo "\" data-src=\"";
                                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 333)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["src"] ?? null) : null);
                                echo "\" alt=\"";
                                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 333)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["link"] ?? null) : null);
                                echo "\" />
                                                        ";
                            } else {
                                // line 335
                                echo "                                                            <img src=\"";
                                echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 335)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["src"] ?? null) : null);
                                echo "\" alt=\"";
                                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 335)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["link"] ?? null) : null);
                                echo "\" />
                                                        ";
                            }
                            // line 337
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
                                        ";
                        } else {
                            // line 341
                            echo "                                            ";
                            if (($context["lazy_load"] ?? null)) {
                                // line 342
                                echo "                                                <img class=\"lazyload\" src=\"";
                                echo ($context["loader_img"] ?? null);
                                echo "\" data-src=\"";
                                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 342)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["src"] ?? null) : null);
                                echo "\" alt=\"";
                                echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 342)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["link"] ?? null) : null);
                                echo "\" />
                                            ";
                            } else {
                                // line 344
                                echo "                                                <img src=\"";
                                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 344)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["src"] ?? null) : null);
                                echo "\" alt=\"";
                                echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 344)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["link"] ?? null) : null);
                                echo "\" />
                                            ";
                            }
                            // line 346
                            echo "                                        ";
                        }
                        // line 347
                        echo "                                    </div>
                                </div>
                            </div>
                            ";
                    }
                    // line 351
                    echo "
                            <script>
                                \$(\".multi-slides-";
                    // line 353
                    echo ($context["module_id"] ?? null);
                    echo "-";
                    echo ($context["tab_count"] ?? null);
                    echo "\").swiper({
                                    spaceBetween: 0,
                                    ";
                    // line 355
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 355)) {
                        // line 356
                        echo "                                    pagination: '.multi-slides-pagination-";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo "',
                                    paginationClickable: true,
                                    ";
                    }
                    // line 359
                    echo "                                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 359)) {
                        // line 360
                        echo "                                    nextButton: '.swiper-button-next-";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo "',
                                    prevButton: '.swiper-button-prev-";
                        // line 361
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo "',
                                    ";
                    }
                    // line 363
                    echo "                                    speed: ";
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 363)) {
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 363);
                        echo " ";
                    } else {
                        echo " 500 ";
                    }
                    echo ",
\t\t\t\t\t\t\t\t\tpreloadImages: false,
\t\t\t\t\t\t\t\t\tlazyLoading: true,
\t\t\t\t\t\t\t\t\twatchSlidesVisibility: true,
                                    slidesPerView: ";
                    // line 367
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_desktop", [], "any", false, false, false, 367);
                    echo ",
                                    slidesPerColumn: ";
                    // line 368
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_desktop", [], "any", false, false, false, 368);
                    echo ",
                                    breakpoints: {
                                        1499: {
                                            slidesPerView: ";
                    // line 371
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_laptop", [], "any", false, false, false, 371);
                    echo ",
                                            slidesPerColumn: ";
                    // line 372
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_laptop", [], "any", false, false, false, 372);
                    echo "
                                        },
\t\t\t\t\t\t\t\t\t\t1199: {
                                            slidesPerView: ";
                    // line 375
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_tablet", [], "any", false, false, false, 375);
                    echo ",
                                            slidesPerColumn: ";
                    // line 376
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_tablet", [], "any", false, false, false, 376);
                    echo "
                                        },
                                        991: {
                                            slidesPerView: ";
                    // line 379
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_s_tablet", [], "any", false, false, false, 379);
                    echo ",
                                            slidesPerColumn: ";
                    // line 380
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_s_tablet", [], "any", false, false, false, 380);
                    echo "
                                        },
                                        767: {
                                            slidesPerView: ";
                    // line 383
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_mobile", [], "any", false, false, false, 383);
                    echo ",
                                            slidesPerColumn: ";
                    // line 384
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_mobile", [], "any", false, false, false, 384);
                    echo "
                                        },
                                        479: {
                                            slidesPerView: ";
                    // line 387
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_s_mobile", [], "any", false, false, false, 387);
                    echo ",
                                            slidesPerColumn: ";
                    // line 388
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_s_mobile", [], "any", false, false, false, 388);
                    echo "
                                        }
                                    },
                                    autoplay: ";
                    // line 391
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "auto", [], "any", false, false, false, 391)) {
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
                    // line 396
                    echo "                            <p class=\"txt-empty\">";
                    echo ($context["text_empty"] ?? null);
                    echo "</p>
                        ";
                }
                // line 398
                echo "                    </div>
                    ";
                // line 399
                $context["tab_count"] = (($context["tab_count"] ?? null) + 1);
                // line 400
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 401
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
        // line 424
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "tt_safira4/template/plaza/module/ptproducts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1092 => 424,  1067 => 401,  1061 => 400,  1059 => 399,  1056 => 398,  1050 => 396,  1038 => 391,  1032 => 388,  1028 => 387,  1022 => 384,  1018 => 383,  1012 => 380,  1008 => 379,  1002 => 376,  998 => 375,  992 => 372,  988 => 371,  982 => 368,  978 => 367,  964 => 363,  957 => 361,  950 => 360,  947 => 359,  938 => 356,  936 => 355,  929 => 353,  925 => 351,  919 => 347,  916 => 346,  908 => 344,  898 => 342,  895 => 341,  889 => 337,  881 => 335,  871 => 333,  869 => 332,  865 => 331,  861 => 329,  859 => 328,  853 => 324,  845 => 321,  839 => 320,  836 => 319,  834 => 318,  831 => 317,  823 => 315,  821 => 314,  817 => 312,  808 => 309,  805 => 308,  801 => 307,  790 => 305,  785 => 302,  783 => 301,  780 => 300,  774 => 296,  766 => 293,  760 => 292,  757 => 291,  755 => 290,  752 => 289,  744 => 287,  742 => 286,  738 => 284,  729 => 281,  726 => 280,  722 => 279,  711 => 277,  702 => 271,  696 => 267,  694 => 266,  691 => 265,  687 => 263,  679 => 260,  673 => 259,  670 => 258,  668 => 257,  665 => 256,  657 => 254,  655 => 253,  651 => 251,  642 => 248,  639 => 247,  635 => 246,  624 => 244,  621 => 243,  618 => 242,  616 => 241,  609 => 240,  604 => 239,  602 => 238,  598 => 236,  595 => 235,  592 => 233,  589 => 232,  583 => 230,  571 => 225,  565 => 222,  561 => 221,  555 => 218,  551 => 217,  545 => 214,  541 => 213,  535 => 210,  531 => 209,  525 => 206,  521 => 205,  515 => 202,  511 => 201,  497 => 197,  492 => 195,  487 => 194,  484 => 193,  477 => 190,  475 => 189,  468 => 187,  464 => 185,  458 => 181,  452 => 178,  448 => 177,  445 => 176,  443 => 175,  440 => 174,  434 => 172,  432 => 171,  428 => 169,  419 => 166,  416 => 165,  412 => 164,  407 => 162,  401 => 158,  398 => 157,  392 => 155,  384 => 153,  381 => 152,  377 => 150,  371 => 148,  363 => 146,  361 => 145,  356 => 144,  354 => 143,  349 => 140,  347 => 139,  344 => 138,  338 => 134,  332 => 131,  328 => 130,  325 => 129,  323 => 128,  320 => 127,  314 => 125,  312 => 124,  308 => 122,  299 => 119,  296 => 118,  292 => 117,  287 => 115,  278 => 109,  272 => 105,  270 => 104,  267 => 103,  264 => 102,  252 => 93,  224 => 68,  220 => 67,  215 => 65,  210 => 62,  208 => 61,  205 => 60,  199 => 57,  195 => 56,  192 => 55,  190 => 54,  187 => 53,  181 => 51,  179 => 50,  175 => 48,  166 => 45,  163 => 44,  159 => 43,  154 => 41,  151 => 40,  147 => 38,  144 => 37,  141 => 36,  138 => 35,  135 => 34,  131 => 31,  126 => 28,  120 => 27,  118 => 26,  111 => 23,  108 => 22,  100 => 20,  90 => 18,  87 => 17,  85 => 16,  79 => 15,  76 => 14,  71 => 13,  69 => 12,  65 => 10,  63 => 9,  59 => 8,  56 => 7,  50 => 5,  48 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira4/template/plaza/module/ptproducts.twig", "");
    }
}
