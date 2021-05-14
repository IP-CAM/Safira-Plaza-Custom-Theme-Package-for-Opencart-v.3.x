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
class __TwigTemplate_af6947239c03d481ffe766f2655c1436da8b7a60f6d665221dbecef6f754f3ad extends \Twig\Template
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
                        echo "                                        <img class=\"lazyload\" src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
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
                            echo "                                            <img class=\"lazyload\" src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
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
                            echo "                                        <img class=\"lazyload\" src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
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
                                echo "                                                            <img class=\"lazyload\" src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
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
                                echo "                                                <img class=\"lazyload\" src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
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
        return array (  1082 => 424,  1057 => 401,  1051 => 400,  1049 => 399,  1046 => 398,  1040 => 396,  1028 => 391,  1022 => 388,  1018 => 387,  1012 => 384,  1008 => 383,  1002 => 380,  998 => 379,  992 => 376,  988 => 375,  982 => 372,  978 => 371,  972 => 368,  968 => 367,  954 => 363,  947 => 361,  940 => 360,  937 => 359,  928 => 356,  926 => 355,  919 => 353,  915 => 351,  909 => 347,  906 => 346,  898 => 344,  890 => 342,  887 => 341,  881 => 337,  873 => 335,  865 => 333,  863 => 332,  859 => 331,  855 => 329,  853 => 328,  847 => 324,  839 => 321,  833 => 320,  830 => 319,  828 => 318,  825 => 317,  817 => 315,  815 => 314,  811 => 312,  802 => 309,  799 => 308,  795 => 307,  784 => 305,  779 => 302,  777 => 301,  774 => 300,  768 => 296,  760 => 293,  754 => 292,  751 => 291,  749 => 290,  746 => 289,  738 => 287,  736 => 286,  732 => 284,  723 => 281,  720 => 280,  716 => 279,  705 => 277,  696 => 271,  690 => 267,  688 => 266,  685 => 265,  681 => 263,  673 => 260,  667 => 259,  664 => 258,  662 => 257,  659 => 256,  651 => 254,  649 => 253,  645 => 251,  636 => 248,  633 => 247,  629 => 246,  618 => 244,  615 => 243,  612 => 242,  610 => 241,  603 => 240,  598 => 239,  596 => 238,  592 => 236,  589 => 235,  586 => 233,  583 => 232,  577 => 230,  565 => 225,  559 => 222,  555 => 221,  549 => 218,  545 => 217,  539 => 214,  535 => 213,  529 => 210,  525 => 209,  519 => 206,  515 => 205,  509 => 202,  505 => 201,  491 => 197,  486 => 195,  481 => 194,  478 => 193,  471 => 190,  469 => 189,  462 => 187,  458 => 185,  452 => 181,  446 => 178,  442 => 177,  439 => 176,  437 => 175,  434 => 174,  428 => 172,  426 => 171,  422 => 169,  413 => 166,  410 => 165,  406 => 164,  401 => 162,  395 => 158,  392 => 157,  386 => 155,  380 => 153,  377 => 152,  373 => 150,  367 => 148,  361 => 146,  359 => 145,  354 => 144,  352 => 143,  347 => 140,  345 => 139,  342 => 138,  336 => 134,  330 => 131,  326 => 130,  323 => 129,  321 => 128,  318 => 127,  312 => 125,  310 => 124,  306 => 122,  297 => 119,  294 => 118,  290 => 117,  285 => 115,  276 => 109,  270 => 105,  268 => 104,  265 => 103,  262 => 102,  250 => 93,  222 => 68,  218 => 67,  213 => 65,  208 => 62,  206 => 61,  203 => 60,  197 => 57,  193 => 56,  190 => 55,  188 => 54,  185 => 53,  179 => 51,  177 => 50,  173 => 48,  164 => 45,  161 => 44,  157 => 43,  152 => 41,  149 => 40,  145 => 38,  142 => 37,  139 => 36,  136 => 35,  133 => 34,  129 => 31,  124 => 28,  118 => 27,  116 => 26,  109 => 23,  106 => 22,  98 => 20,  90 => 18,  87 => 17,  85 => 16,  79 => 15,  76 => 14,  71 => 13,  69 => 12,  65 => 10,  63 => 9,  59 => 8,  56 => 7,  50 => 5,  48 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira4/template/plaza/module/ptproducts.twig", "");
    }
}
