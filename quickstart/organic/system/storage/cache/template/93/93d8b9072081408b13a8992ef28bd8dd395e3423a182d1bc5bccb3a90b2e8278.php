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

/* tt_safira1/template/plaza/module/ptproducts.twig */
class __TwigTemplate_38fb25ed036ee4da8b69204c50bdefdffbbbb74102bb1420a9f024647c3160ec extends \Twig\Template
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
                    echo "                                    <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["tab"], "title_image", [], "any", false, false, false, 17);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 17);
                    echo "\" />
                                ";
                }
                // line 19
                echo "                                <span>";
                echo twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 19);
                echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                // line 22
                $context["tab_count"] = (($context["tab_count"] ?? null) + 1);
                // line 23
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t";
        }
        // line 27
        echo "    </div>
    <div class=\"pt-content\">
        ";
        // line 30
        echo "        ";
        if ((($context["module_type"] ?? null) == "single_tab")) {
            // line 31
            echo "            ";
            if (($context["single_products"] ?? null)) {
                // line 32
                echo "                ";
                if ((($context["layout_type"] ?? null) == "slider")) {
                    // line 33
                    echo "                    ";
                    if ((($context["product_layout_type"] ?? null) == "other")) {
                        // line 34
                        echo "                    <div class=\"gallery-product\">
                    ";
                    }
                    // line 36
                    echo "                    <div class=\"swiper-viewport\">
                        <div class=\"swiper-container single-slides-";
                    // line 37
                    echo ($context["module_id"] ?? null);
                    echo "\">
                            <div class=\"swiper-wrapper\">
                                ";
                    // line 39
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["single_products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 40
                        echo "                                <div class=\"product-thumb transition swiper-slide\">
                                    ";
                        // line 41
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 41);
                        echo "
                                </div>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 44
                    echo "                            </div>
                        </div>
                        ";
                    // line 46
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 46)) {
                        // line 47
                        echo "                            <div class=\"swiper-pagination single-slides-pagination-";
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                        ";
                    }
                    // line 49
                    echo "
                        ";
                    // line 50
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 50)) {
                        // line 51
                        echo "                            <div class=\"swiper-pager\">
                                <div class=\"swiper-button-next swiper-button-next-";
                        // line 52
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                <div class=\"swiper-button-prev swiper-button-prev-";
                        // line 53
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                            </div>
                        ";
                    }
                    // line 56
                    echo "                    </div>
                    ";
                    // line 57
                    if ((($context["product_layout_type"] ?? null) == "other")) {
                        // line 58
                        echo "                    </div>
                    <div class=\"gallery-thumbs\">
                        <div class=\"swiper-viewport\">
                            <div class=\"swiper-container gallery-thumbs-";
                        // line 61
                        echo ($context["module_id"] ?? null);
                        echo "\">
                                <div class=\"swiper-wrapper\">
                                    ";
                        // line 63
                        $context["i"] = 0;
                        // line 64
                        echo "                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["single_products"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                            // line 65
                            echo "                                        <div class=\"swiper-slide\">
                                            <div class=\"thumb-image\">
                                                <a href=\"javascript:void(0);\" onclick=\"productGoToSlide(";
                            // line 67
                            echo ($context["i"] ?? null);
                            echo ")\"><img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 67);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 67);
                            echo "\"></a>
                                            </div>
                                        </div>
                                        ";
                            // line 70
                            $context["i"] = (($context["i"] ?? null) + 1);
                            // line 71
                            echo "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 72
                        echo "                                </div>
                            </div>
\t\t\t\t\t\t\t<div class=\"swiper-pager pimg-navigation\">
\t\t\t\t\t\t\t\t<div class=\"swiper-button-next pimg-button-next pimg-button-next-";
                        // line 75
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
\t\t\t\t\t\t\t\t<div class=\"swiper-button-prev pimg-button-prev pimg-button-prev-";
                        // line 76
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
\t\t\t\t\t\t\t</div>
                        </div>
                    </div>

                    <script>
                        \$(\".gallery-thumbs-";
                        // line 82
                        echo ($context["module_id"] ?? null);
                        echo "\").swiper({
                            spaceBetween: 20,
\t\t\t\t\t\t\tnextButton: '.pimg-button-next-";
                        // line 84
                        echo ($context["module_id"] ?? null);
                        echo "',
\t\t\t\t\t\t\tprevButton: '.pimg-button-prev-";
                        // line 85
                        echo ($context["module_id"] ?? null);
                        echo "',
\t\t\t\t\t\t\tspeed: 300,
\t\t\t\t\t\t\tslidesPerView: 3,
\t\t\t\t\t\t\tautoplay: false,
\t\t\t\t\t\t\tsimulateTouch: false,
\t\t\t\t\t\t\tloop: false,
\t\t\t\t\t\t\tdirection: 'vertical',
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
                        // line 111
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
                    // line 120
                    echo "                ";
                }
                // line 121
                echo "
                ";
                // line 122
                if ((($context["layout_type"] ?? null) == "large_item")) {
                    // line 123
                    echo "                    <div class=\"row\">
                        <div class=\"col-md-4 col-sm-12\">
                            <div class=\"fproduct-content\">
                                <div class=\"product-thumb\">
                                    ";
                    // line 127
                    echo twig_get_attribute($this->env, $this->source, ($context["single_first_product"] ?? null), "html", [], "any", false, false, false, 127);
                    echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-8 col-sm-12\">
                            <div class=\"swiper-viewport\">
                                <div class=\"swiper-container single-slides-";
                    // line 133
                    echo ($context["module_id"] ?? null);
                    echo "\">
                                    <div class=\"swiper-wrapper\">
                                        ";
                    // line 135
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["single_products_except_first"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 136
                        echo "                                            <div class=\"product-thumb transition swiper-slide\">
                                                ";
                        // line 137
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 137);
                        echo "
                                            </div>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 140
                    echo "                                    </div>
                                </div>
                                ";
                    // line 142
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 142)) {
                        // line 143
                        echo "                                    <div class=\"swiper-pagination single-slides-pagination-";
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                ";
                    }
                    // line 145
                    echo "
                                ";
                    // line 146
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 146)) {
                        // line 147
                        echo "                                    <div class=\"swiper-pager\">
                                        <div class=\"swiper-button-next swiper-button-next-";
                        // line 148
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                        <div class=\"swiper-button-prev swiper-button-prev-";
                        // line 149
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                    </div>
                                ";
                    }
                    // line 152
                    echo "                            </div>
                        </div>
                    </div>
                ";
                }
                // line 156
                echo "
                ";
                // line 157
                if ((($context["layout_type"] ?? null) == "image")) {
                    // line 158
                    echo "                    <div class=\"row\">
                        <div class=\"col-md-4 col-sm-5 col-sms-12\">
                            <div class=\"image-content\">
                                ";
                    // line 161
                    if (($context["single_image_link"] ?? null)) {
                        // line 162
                        echo "                                    <a href=\"";
                        echo ($context["single_image_link"] ?? null);
                        echo "\">
                                        <img src=\"";
                        // line 163
                        echo ($context["single_image"] ?? null);
                        echo "\" alt=\"\" />
                                    </a>
                                ";
                    } else {
                        // line 166
                        echo "                                    <img src=\"";
                        echo ($context["single_image"] ?? null);
                        echo "\" alt=\"\" />
                                ";
                    }
                    // line 168
                    echo "                            </div>
                        </div>
                        <div class=\"col-md-8 col-sm-7 col-sms-12\">
                            <div class=\"swiper-viewport\">
                                <div class=\"swiper-container single-slides-";
                    // line 172
                    echo ($context["module_id"] ?? null);
                    echo "\">
                                    <div class=\"swiper-wrapper\">
                                        ";
                    // line 174
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["single_products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 175
                        echo "                                            <div class=\"product-thumb transition swiper-slide\">
                                                ";
                        // line 176
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 176);
                        echo "
                                            </div>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 179
                    echo "                                    </div>
                                </div>
                                ";
                    // line 181
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 181)) {
                        // line 182
                        echo "                                    <div class=\"swiper-pagination single-slides-pagination-";
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                ";
                    }
                    // line 184
                    echo "
                                ";
                    // line 185
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 185)) {
                        // line 186
                        echo "                                    <div class=\"swiper-pager\">
                                        <div class=\"swiper-button-next swiper-button-next-";
                        // line 187
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                        <div class=\"swiper-button-prev swiper-button-prev-";
                        // line 188
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                    </div>
                                ";
                    }
                    // line 191
                    echo "                            </div>
                        </div>
                    </div>
                ";
                }
                // line 195
                echo "
                <script>
                    var product_slides_";
                // line 197
                echo ($context["module_id"] ?? null);
                echo " = \$(\".single-slides-";
                echo ($context["module_id"] ?? null);
                echo "\").swiper({
                        spaceBetween:0,
                        ";
                // line 199
                if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 199)) {
                    // line 200
                    echo "                        pagination: '.single-slides-pagination-";
                    echo ($context["module_id"] ?? null);
                    echo "',
                        paginationClickable: true,
                        ";
                }
                // line 203
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 203)) {
                    // line 204
                    echo "                        nextButton: '.swiper-button-next-";
                    echo ($context["module_id"] ?? null);
                    echo "',
                        prevButton: '.swiper-button-prev-";
                    // line 205
                    echo ($context["module_id"] ?? null);
                    echo "',
                        ";
                }
                // line 207
                echo "                        speed: ";
                if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 207)) {
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 207);
                    echo " ";
                } else {
                    echo " 500 ";
                }
                echo ",
\t\t\t\t\t\tpreloadImages: false,
\t\t\t\t\t\tlazyLoading: true,
\t\t\t\t\t\twatchSlidesVisibility: true,
                        slidesPerView: ";
                // line 211
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_desktop", [], "any", false, false, false, 211);
                echo ",
                        slidesPerColumn: ";
                // line 212
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_desktop", [], "any", false, false, false, 212);
                echo ",
                        breakpoints: {
\t\t\t\t\t\t\t1499: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 215
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_laptop", [], "any", false, false, false, 215);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 216
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_laptop", [], "any", false, false, false, 216);
                echo "
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t1199: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 219
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_tablet", [], "any", false, false, false, 219);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 220
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_tablet", [], "any", false, false, false, 220);
                echo "
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t991: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 223
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_s_tablet", [], "any", false, false, false, 223);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 224
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_s_tablet", [], "any", false, false, false, 224);
                echo "
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t767: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 227
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_mobile", [], "any", false, false, false, 227);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 228
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_mobile", [], "any", false, false, false, 228);
                echo "
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t479: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 231
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_s_mobile", [], "any", false, false, false, 231);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 232
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_s_mobile", [], "any", false, false, false, 232);
                echo "
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
                        autoplay: ";
                // line 235
                if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "auto", [], "any", false, false, false, 235)) {
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
                // line 240
                echo "                <p class=\"txt-empty\">";
                echo ($context["text_empty"] ?? null);
                echo "</p>
            ";
            }
            // line 242
            echo "        ";
        }
        // line 243
        echo "
        ";
        // line 245
        echo "        ";
        if ((($context["module_type"] ?? null) == "multi_tabs")) {
            // line 246
            echo "        <div class=\"product-tabs-section\">
            <div class=\"tab-content product-tabs-content\">
                ";
            // line 248
            $context["tab_count"] = 0;
            // line 249
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 250
                echo "                    <div class=\"tab-product\" id=\"tab-product-";
                echo ($context["module_id"] ?? null);
                echo "-";
                echo ($context["tab_count"] ?? null);
                echo "\">
                        ";
                // line 251
                if (twig_get_attribute($this->env, $this->source, $context["tab"], "products", [], "any", false, false, false, 251)) {
                    // line 252
                    echo "                            ";
                    if ((($context["layout_type"] ?? null) == "slider")) {
                        // line 253
                        echo "                                <div class=\"swiper-viewport\">
                                    <div id=\"";
                        // line 254
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
                        // line 256
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tab"], "products", [], "any", false, false, false, 256));
                        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                            // line 257
                            echo "                                                <div class=\"product-thumb transition swiper-slide\">
                                                    ";
                            // line 258
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 258);
                            echo "
                                                </div>
                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 261
                        echo "                                        </div>
                                    </div>
                                    ";
                        // line 263
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 263)) {
                            // line 264
                            echo "                                        <div class=\"swiper-pagination multi-slides-pagination-";
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                    ";
                        }
                        // line 266
                        echo "
                                    ";
                        // line 267
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 267)) {
                            // line 268
                            echo "                                        <div class=\"swiper-pager\">
                                            <div class=\"swiper-button-next swiper-button-next-";
                            // line 269
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                            <div class=\"swiper-button-prev swiper-button-prev-";
                            // line 270
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                        </div>
                                    ";
                        }
                        // line 273
                        echo "                                </div>
                            ";
                    }
                    // line 275
                    echo "
                            ";
                    // line 276
                    if ((($context["layout_type"] ?? null) == "large_item")) {
                        // line 277
                        echo "                                <div class=\"row\">
                                    <div class=\"col-md-4 col-sm-12\">
                                        <div class=\"fproduct-content\">
                                            <div class=\"product-thumb\">
                                                ";
                        // line 281
                        echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["tab"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["first_product"] ?? null) : null), "html", [], "any", false, false, false, 281);
                        echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-8 col-sm-12\">
                                        <div class=\"swiper-viewport\">
                                            <div id=\"";
                        // line 287
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
                        // line 289
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tab"], "products_except_first", [], "any", false, false, false, 289));
                        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                            // line 290
                            echo "                                                        <div class=\"product-thumb transition swiper-slide\">
                                                            ";
                            // line 291
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 291);
                            echo "
                                                        </div>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 294
                        echo "                                                </div>
                                            </div>
                                            ";
                        // line 296
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 296)) {
                            // line 297
                            echo "                                                <div class=\"swiper-pagination multi-slides-pagination-";
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                            ";
                        }
                        // line 299
                        echo "
                                            ";
                        // line 300
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 300)) {
                            // line 301
                            echo "                                                <div class=\"swiper-pager\">
                                                    <div class=\"swiper-button-next swiper-button-next-";
                            // line 302
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                                    <div class=\"swiper-button-prev swiper-button-prev-";
                            // line 303
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                                </div>
                                            ";
                        }
                        // line 306
                        echo "                                        </div>
                                    </div>
                                </div>
                            ";
                    }
                    // line 310
                    echo "
                            ";
                    // line 311
                    if ((($context["layout_type"] ?? null) == "image")) {
                        // line 312
                        echo "                            <div class=\"row\">
                                <div class=\"col-md-9 col-sm-8 col-xs-12\">
                                    <div class=\"swiper-viewport\">
                                        <div id=\"";
                        // line 315
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
                        // line 317
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tab"], "products", [], "any", false, false, false, 317));
                        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                            // line 318
                            echo "                                                    <div class=\"product-thumb transition swiper-slide\">
                                                        ";
                            // line 319
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 319);
                            echo "
                                                    </div>
                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 322
                        echo "                                            </div>
                                        </div>
                                        ";
                        // line 324
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 324)) {
                            // line 325
                            echo "                                            <div class=\"swiper-pagination multi-slides-pagination-";
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                        ";
                        }
                        // line 327
                        echo "
                                        ";
                        // line 328
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 328)) {
                            // line 329
                            echo "                                            <div class=\"swiper-pager\">
                                                <div class=\"swiper-button-next swiper-button-next-";
                            // line 330
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                                <div class=\"swiper-button-prev swiper-button-prev-";
                            // line 331
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                            </div>
                                        ";
                        }
                        // line 334
                        echo "                                    </div>
                                </div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12\">
                                    <div class=\"image-content\">
                                        ";
                        // line 338
                        if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 338)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["link"] ?? null) : null)) {
                            // line 339
                            echo "                                            <div class=\"pt-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 341
                            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 341)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["link"] ?? null) : null);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            // line 342
                            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 342)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["src"] ?? null) : null);
                            echo "\" alt=\"";
                            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 342)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["link"] ?? null) : null);
                            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
                                        ";
                        } else {
                            // line 347
                            echo "                                            <img src=\"";
                            echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 347)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["src"] ?? null) : null);
                            echo "\" alt=\"";
                            echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 347)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["link"] ?? null) : null);
                            echo "\" />
                                        ";
                        }
                        // line 349
                        echo "                                    </div>
                                </div>
                            </div>
                            ";
                    }
                    // line 353
                    echo "
                            <script>
                                \$(\".multi-slides-";
                    // line 355
                    echo ($context["module_id"] ?? null);
                    echo "-";
                    echo ($context["tab_count"] ?? null);
                    echo "\").swiper({
                                    spaceBetween: 0,
                                    ";
                    // line 357
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 357)) {
                        // line 358
                        echo "                                    pagination: '.multi-slides-pagination-";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo "',
                                    paginationClickable: true,
                                    ";
                    }
                    // line 361
                    echo "                                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 361)) {
                        // line 362
                        echo "                                    nextButton: '.swiper-button-next-";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo "',
                                    prevButton: '.swiper-button-prev-";
                        // line 363
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo "',
                                    ";
                    }
                    // line 365
                    echo "                                    speed: ";
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 365)) {
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 365);
                        echo " ";
                    } else {
                        echo " 500 ";
                    }
                    echo ",
\t\t\t\t\t\t\t\t\tpreloadImages: false,
\t\t\t\t\t\t\t\t\tlazyLoading: true,
\t\t\t\t\t\t\t\t\twatchSlidesVisibility: true,
                                    slidesPerView: ";
                    // line 369
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_desktop", [], "any", false, false, false, 369);
                    echo ",
                                    slidesPerColumn: ";
                    // line 370
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_desktop", [], "any", false, false, false, 370);
                    echo ",
                                    breakpoints: {
                                        1499: {
                                            slidesPerView: ";
                    // line 373
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_laptop", [], "any", false, false, false, 373);
                    echo ",
                                            slidesPerColumn: ";
                    // line 374
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_laptop", [], "any", false, false, false, 374);
                    echo "
                                        },
\t\t\t\t\t\t\t\t\t\t1199: {
                                            slidesPerView: ";
                    // line 377
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_tablet", [], "any", false, false, false, 377);
                    echo ",
                                            slidesPerColumn: ";
                    // line 378
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_tablet", [], "any", false, false, false, 378);
                    echo "
                                        },
                                        991: {
                                            slidesPerView: ";
                    // line 381
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_s_tablet", [], "any", false, false, false, 381);
                    echo ",
                                            slidesPerColumn: ";
                    // line 382
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_s_tablet", [], "any", false, false, false, 382);
                    echo "
                                        },
                                        767: {
                                            slidesPerView: ";
                    // line 385
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_mobile", [], "any", false, false, false, 385);
                    echo ",
                                            slidesPerColumn: ";
                    // line 386
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_mobile", [], "any", false, false, false, 386);
                    echo "
                                        },
                                        479: {
                                            slidesPerView: ";
                    // line 389
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_s_mobile", [], "any", false, false, false, 389);
                    echo ",
                                            slidesPerColumn: ";
                    // line 390
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_s_mobile", [], "any", false, false, false, 390);
                    echo "
                                        }
                                    },
                                    autoplay: ";
                    // line 393
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "auto", [], "any", false, false, false, 393)) {
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
                    // line 398
                    echo "                            <p class=\"txt-empty\">";
                    echo ($context["text_empty"] ?? null);
                    echo "</p>
                        ";
                }
                // line 400
                echo "                    </div>
                    ";
                // line 401
                $context["tab_count"] = (($context["tab_count"] ?? null) + 1);
                // line 402
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 403
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
        // line 426
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "tt_safira1/template/plaza/module/ptproducts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1069 => 426,  1044 => 403,  1038 => 402,  1036 => 401,  1033 => 400,  1027 => 398,  1015 => 393,  1009 => 390,  1005 => 389,  999 => 386,  995 => 385,  989 => 382,  985 => 381,  979 => 378,  975 => 377,  969 => 374,  965 => 373,  959 => 370,  955 => 369,  941 => 365,  934 => 363,  927 => 362,  924 => 361,  915 => 358,  913 => 357,  906 => 355,  902 => 353,  896 => 349,  888 => 347,  878 => 342,  874 => 341,  870 => 339,  868 => 338,  862 => 334,  854 => 331,  848 => 330,  845 => 329,  843 => 328,  840 => 327,  832 => 325,  830 => 324,  826 => 322,  817 => 319,  814 => 318,  810 => 317,  799 => 315,  794 => 312,  792 => 311,  789 => 310,  783 => 306,  775 => 303,  769 => 302,  766 => 301,  764 => 300,  761 => 299,  753 => 297,  751 => 296,  747 => 294,  738 => 291,  735 => 290,  731 => 289,  720 => 287,  711 => 281,  705 => 277,  703 => 276,  700 => 275,  696 => 273,  688 => 270,  682 => 269,  679 => 268,  677 => 267,  674 => 266,  666 => 264,  664 => 263,  660 => 261,  651 => 258,  648 => 257,  644 => 256,  633 => 254,  630 => 253,  627 => 252,  625 => 251,  618 => 250,  613 => 249,  611 => 248,  607 => 246,  604 => 245,  601 => 243,  598 => 242,  592 => 240,  580 => 235,  574 => 232,  570 => 231,  564 => 228,  560 => 227,  554 => 224,  550 => 223,  544 => 220,  540 => 219,  534 => 216,  530 => 215,  524 => 212,  520 => 211,  506 => 207,  501 => 205,  496 => 204,  493 => 203,  486 => 200,  484 => 199,  477 => 197,  473 => 195,  467 => 191,  461 => 188,  457 => 187,  454 => 186,  452 => 185,  449 => 184,  443 => 182,  441 => 181,  437 => 179,  428 => 176,  425 => 175,  421 => 174,  416 => 172,  410 => 168,  404 => 166,  398 => 163,  393 => 162,  391 => 161,  386 => 158,  384 => 157,  381 => 156,  375 => 152,  369 => 149,  365 => 148,  362 => 147,  360 => 146,  357 => 145,  351 => 143,  349 => 142,  345 => 140,  336 => 137,  333 => 136,  329 => 135,  324 => 133,  315 => 127,  309 => 123,  307 => 122,  304 => 121,  301 => 120,  289 => 111,  260 => 85,  256 => 84,  251 => 82,  242 => 76,  238 => 75,  233 => 72,  227 => 71,  225 => 70,  215 => 67,  211 => 65,  206 => 64,  204 => 63,  199 => 61,  194 => 58,  192 => 57,  189 => 56,  183 => 53,  179 => 52,  176 => 51,  174 => 50,  171 => 49,  165 => 47,  163 => 46,  159 => 44,  150 => 41,  147 => 40,  143 => 39,  138 => 37,  135 => 36,  131 => 34,  128 => 33,  125 => 32,  122 => 31,  119 => 30,  115 => 27,  110 => 24,  104 => 23,  102 => 22,  95 => 19,  87 => 17,  85 => 16,  79 => 15,  76 => 14,  71 => 13,  69 => 12,  65 => 10,  63 => 9,  59 => 8,  56 => 7,  50 => 5,  48 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira1/template/plaza/module/ptproducts.twig", "");
    }
}
