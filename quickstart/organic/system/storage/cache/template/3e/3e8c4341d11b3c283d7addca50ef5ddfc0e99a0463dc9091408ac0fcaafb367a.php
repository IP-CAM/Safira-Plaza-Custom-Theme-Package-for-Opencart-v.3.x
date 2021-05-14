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

/* tt_safira2/template/plaza/module/ptproducts.twig */
class __TwigTemplate_c48e0f2ddd01057e4cf132dd03a42e04543333ee2e7cacee21b716007b2ed316 extends \Twig\Template
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
                    <div class=\"gallery-thumbs\">
                        <div class=\"swiper-viewport\">
                            <div class=\"swiper-container gallery-thumbs-";
                        // line 65
                        echo ($context["module_id"] ?? null);
                        echo "\">
                                <div class=\"swiper-wrapper\">
                                    ";
                        // line 67
                        $context["i"] = 0;
                        // line 68
                        echo "                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["single_products"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                            // line 69
                            echo "                                        <div class=\"swiper-slide\">
                                            <div class=\"thumb-image\">
                                                <a href=\"javascript:void(0);\" onclick=\"productGoToSlide(";
                            // line 71
                            echo ($context["i"] ?? null);
                            echo ")\">
                                                    ";
                            // line 72
                            if (($context["lazy_load"] ?? null)) {
                                // line 73
                                echo "                                                        <img class=\"lazyload\" src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 73);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 73);
                                echo "\" />
                                                    ";
                            } else {
                                // line 75
                                echo "                                                        <img src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 75);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 75);
                                echo "\">
                                                    ";
                            }
                            // line 77
                            echo "                                                </a>
                                            </div>
                                        </div>
                                        ";
                            // line 80
                            $context["i"] = (($context["i"] ?? null) + 1);
                            // line 81
                            echo "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 82
                        echo "                                </div>
                            </div>
\t\t\t\t\t\t\t<div class=\"swiper-pager pimg-navigation\">
\t\t\t\t\t\t\t\t<div class=\"swiper-button-next pimg-button-next pimg-button-next-";
                        // line 85
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
\t\t\t\t\t\t\t\t<div class=\"swiper-button-prev pimg-button-prev pimg-button-prev-";
                        // line 86
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
\t\t\t\t\t\t\t</div>
                        </div>
                    </div>

                    <script>
                        \$(\".gallery-thumbs-";
                        // line 92
                        echo ($context["module_id"] ?? null);
                        echo "\").swiper({
                            spaceBetween: 20,
\t\t\t\t\t\t\tnextButton: '.pimg-button-next-";
                        // line 94
                        echo ($context["module_id"] ?? null);
                        echo "',
\t\t\t\t\t\t\tprevButton: '.pimg-button-prev-";
                        // line 95
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
                        // line 121
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
                    // line 130
                    echo "                ";
                }
                // line 131
                echo "
                ";
                // line 132
                if ((($context["layout_type"] ?? null) == "large_item")) {
                    // line 133
                    echo "                    <div class=\"row\">
                        <div class=\"col-md-4 col-sm-12\">
                            <div class=\"fproduct-content\">
                                <div class=\"product-thumb\">
                                    ";
                    // line 137
                    echo twig_get_attribute($this->env, $this->source, ($context["single_first_product"] ?? null), "html", [], "any", false, false, false, 137);
                    echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-8 col-sm-12\">
                            <div class=\"swiper-viewport\">
                                <div class=\"swiper-container single-slides-";
                    // line 143
                    echo ($context["module_id"] ?? null);
                    echo "\">
                                    <div class=\"swiper-wrapper\">
                                        ";
                    // line 145
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["single_products_except_first"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 146
                        echo "                                            <div class=\"product-thumb transition swiper-slide\">
                                                ";
                        // line 147
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 147);
                        echo "
                                            </div>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 150
                    echo "                                    </div>
                                </div>
                                ";
                    // line 152
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 152)) {
                        // line 153
                        echo "                                    <div class=\"swiper-pagination single-slides-pagination-";
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                ";
                    }
                    // line 155
                    echo "
                                ";
                    // line 156
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 156)) {
                        // line 157
                        echo "                                    <div class=\"swiper-pager\">
                                        <div class=\"swiper-button-next swiper-button-next-";
                        // line 158
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                        <div class=\"swiper-button-prev swiper-button-prev-";
                        // line 159
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                    </div>
                                ";
                    }
                    // line 162
                    echo "                            </div>
                        </div>
                    </div>
                ";
                }
                // line 166
                echo "
                ";
                // line 167
                if ((($context["layout_type"] ?? null) == "image")) {
                    // line 168
                    echo "                    <div class=\"row\">
                        <div class=\"col-md-4 col-sm-5 col-sms-12\">
                            <div class=\"image-content\">
                                ";
                    // line 171
                    if (($context["single_image_link"] ?? null)) {
                        // line 172
                        echo "                                    <a href=\"";
                        echo ($context["single_image_link"] ?? null);
                        echo "\">
                                        ";
                        // line 173
                        if (($context["lazy_load"] ?? null)) {
                            // line 174
                            echo "                                            <img class=\"lazyload\" src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
                            echo ($context["single_image"] ?? null);
                            echo "\" alt=\"\" />
                                        ";
                        } else {
                            // line 176
                            echo "                                            <img src=\"";
                            echo ($context["single_image"] ?? null);
                            echo "\" alt=\"\" />
                                        ";
                        }
                        // line 178
                        echo "                                    </a>
                                ";
                    } else {
                        // line 180
                        echo "                                    ";
                        if (($context["lazy_load"] ?? null)) {
                            // line 181
                            echo "                                        <img class=\"lazyload\" src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
                            echo ($context["single_image"] ?? null);
                            echo "\" alt=\"\" />
                                    ";
                        } else {
                            // line 183
                            echo "                                        <img src=\"";
                            echo ($context["single_image"] ?? null);
                            echo "\" alt=\"\" />
                                    ";
                        }
                        // line 185
                        echo "                                ";
                    }
                    // line 186
                    echo "                            </div>
                        </div>
                        <div class=\"col-md-8 col-sm-7 col-sms-12\">
                            <div class=\"swiper-viewport\">
                                <div class=\"swiper-container single-slides-";
                    // line 190
                    echo ($context["module_id"] ?? null);
                    echo "\">
                                    <div class=\"swiper-wrapper\">
                                        ";
                    // line 192
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["single_products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 193
                        echo "                                            <div class=\"product-thumb transition swiper-slide\">
                                                ";
                        // line 194
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 194);
                        echo "
                                            </div>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 197
                    echo "                                    </div>
                                </div>
                                ";
                    // line 199
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 199)) {
                        // line 200
                        echo "                                    <div class=\"swiper-pagination single-slides-pagination-";
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                ";
                    }
                    // line 202
                    echo "
                                ";
                    // line 203
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 203)) {
                        // line 204
                        echo "                                    <div class=\"swiper-pager\">
                                        <div class=\"swiper-button-next swiper-button-next-";
                        // line 205
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                        <div class=\"swiper-button-prev swiper-button-prev-";
                        // line 206
                        echo ($context["module_id"] ?? null);
                        echo "\"></div>
                                    </div>
                                ";
                    }
                    // line 209
                    echo "                            </div>
                        </div>
                    </div>
                ";
                }
                // line 213
                echo "
                <script>
                    var product_slides_";
                // line 215
                echo ($context["module_id"] ?? null);
                echo " = \$(\".single-slides-";
                echo ($context["module_id"] ?? null);
                echo "\").swiper({
                        spaceBetween:0,
                        ";
                // line 217
                if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 217)) {
                    // line 218
                    echo "                        pagination: '.single-slides-pagination-";
                    echo ($context["module_id"] ?? null);
                    echo "',
                        paginationClickable: true,
                        ";
                }
                // line 221
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 221)) {
                    // line 222
                    echo "                        nextButton: '.swiper-button-next-";
                    echo ($context["module_id"] ?? null);
                    echo "',
                        prevButton: '.swiper-button-prev-";
                    // line 223
                    echo ($context["module_id"] ?? null);
                    echo "',
                        ";
                }
                // line 225
                echo "                        speed: ";
                if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 225)) {
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 225);
                    echo " ";
                } else {
                    echo " 500 ";
                }
                echo ",
\t\t\t\t\t\tpreloadImages: false,
\t\t\t\t\t\tlazyLoading: true,
\t\t\t\t\t\twatchSlidesVisibility: true,
                        slidesPerView: ";
                // line 229
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_desktop", [], "any", false, false, false, 229);
                echo ",
                        slidesPerColumn: ";
                // line 230
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_desktop", [], "any", false, false, false, 230);
                echo ",
                        breakpoints: {
\t\t\t\t\t\t\t1499: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 233
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_laptop", [], "any", false, false, false, 233);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 234
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_laptop", [], "any", false, false, false, 234);
                echo "
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t1199: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 237
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_tablet", [], "any", false, false, false, 237);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 238
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_tablet", [], "any", false, false, false, 238);
                echo "
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t991: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 241
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_s_tablet", [], "any", false, false, false, 241);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 242
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_s_tablet", [], "any", false, false, false, 242);
                echo "
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t767: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 245
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_mobile", [], "any", false, false, false, 245);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 246
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_mobile", [], "any", false, false, false, 246);
                echo "
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t479: {
\t\t\t\t\t\t\t\tslidesPerView: ";
                // line 249
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_s_mobile", [], "any", false, false, false, 249);
                echo ",
\t\t\t\t\t\t\t\tslidesPerColumn: ";
                // line 250
                echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_s_mobile", [], "any", false, false, false, 250);
                echo "
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
                        autoplay: ";
                // line 253
                if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "auto", [], "any", false, false, false, 253)) {
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
                // line 258
                echo "                <p class=\"txt-empty\">";
                echo ($context["text_empty"] ?? null);
                echo "</p>
            ";
            }
            // line 260
            echo "        ";
        }
        // line 261
        echo "
        ";
        // line 263
        echo "        ";
        if ((($context["module_type"] ?? null) == "multi_tabs")) {
            // line 264
            echo "        <div class=\"product-tabs-section\">
            <div class=\"tab-content product-tabs-content\">
                ";
            // line 266
            $context["tab_count"] = 0;
            // line 267
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 268
                echo "                    <div class=\"tab-product\" id=\"tab-product-";
                echo ($context["module_id"] ?? null);
                echo "-";
                echo ($context["tab_count"] ?? null);
                echo "\">
                        ";
                // line 269
                if (twig_get_attribute($this->env, $this->source, $context["tab"], "products", [], "any", false, false, false, 269)) {
                    // line 270
                    echo "                            ";
                    if ((($context["layout_type"] ?? null) == "slider")) {
                        // line 271
                        echo "                                <div class=\"swiper-viewport\">
                                    <div id=\"";
                        // line 272
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
                        // line 274
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tab"], "products", [], "any", false, false, false, 274));
                        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                            // line 275
                            echo "                                                <div class=\"product-thumb transition swiper-slide\">
                                                    ";
                            // line 276
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 276);
                            echo "
                                                </div>
                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 279
                        echo "                                        </div>
                                    </div>
                                    ";
                        // line 281
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 281)) {
                            // line 282
                            echo "                                        <div class=\"swiper-pagination multi-slides-pagination-";
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                    ";
                        }
                        // line 284
                        echo "
                                    ";
                        // line 285
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 285)) {
                            // line 286
                            echo "                                        <div class=\"swiper-pager\">
                                            <div class=\"swiper-button-next swiper-button-next-";
                            // line 287
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                            <div class=\"swiper-button-prev swiper-button-prev-";
                            // line 288
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                        </div>
                                    ";
                        }
                        // line 291
                        echo "                                </div>
                            ";
                    }
                    // line 293
                    echo "
                            ";
                    // line 294
                    if ((($context["layout_type"] ?? null) == "large_item")) {
                        // line 295
                        echo "                                <div class=\"row\">
                                    <div class=\"col-md-4 col-sm-12\">
                                        <div class=\"fproduct-content\">
                                            <div class=\"product-thumb\">
                                                ";
                        // line 299
                        echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["tab"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["first_product"] ?? null) : null), "html", [], "any", false, false, false, 299);
                        echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-8 col-sm-12\">
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
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tab"], "products_except_first", [], "any", false, false, false, 307));
                        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                            // line 308
                            echo "                                                        <div class=\"product-thumb transition swiper-slide\">
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
                        echo "                                                </div>
                                            </div>
                                            ";
                        // line 314
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 314)) {
                            // line 315
                            echo "                                                <div class=\"swiper-pagination multi-slides-pagination-";
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
                            echo "                                                <div class=\"swiper-pager\">
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
                        echo "                                        </div>
                                    </div>
                                </div>
                            ";
                    }
                    // line 328
                    echo "
                            ";
                    // line 329
                    if ((($context["layout_type"] ?? null) == "image")) {
                        // line 330
                        echo "                            <div class=\"row\">
                                <div class=\"col-md-9 col-sm-8 col-xs-12\">
                                    <div class=\"swiper-viewport\">
                                        <div id=\"";
                        // line 333
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
                        // line 335
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tab"], "products", [], "any", false, false, false, 335));
                        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                            // line 336
                            echo "                                                    <div class=\"product-thumb transition swiper-slide\">
                                                        ";
                            // line 337
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "html", [], "any", false, false, false, 337);
                            echo "
                                                    </div>
                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 340
                        echo "                                            </div>
                                        </div>
                                        ";
                        // line 342
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 342)) {
                            // line 343
                            echo "                                            <div class=\"swiper-pagination multi-slides-pagination-";
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                        ";
                        }
                        // line 345
                        echo "
                                        ";
                        // line 346
                        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 346)) {
                            // line 347
                            echo "                                            <div class=\"swiper-pager\">
                                                <div class=\"swiper-button-next swiper-button-next-";
                            // line 348
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                                <div class=\"swiper-button-prev swiper-button-prev-";
                            // line 349
                            echo ($context["module_id"] ?? null);
                            echo "-";
                            echo ($context["tab_count"] ?? null);
                            echo "\"></div>
                                            </div>
                                        ";
                        }
                        // line 352
                        echo "                                    </div>
                                </div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-12\">
                                    <div class=\"image-content\">
                                        ";
                        // line 356
                        if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 356)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["link"] ?? null) : null)) {
                            // line 357
                            echo "                                            <div class=\"pt-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 359
                            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 359)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["link"] ?? null) : null);
                            echo "\">
                                                        ";
                            // line 360
                            if (($context["lazy_load"] ?? null)) {
                                // line 361
                                echo "                                                            <img class=\"lazyload\" src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
                                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 361)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["src"] ?? null) : null);
                                echo "\" alt=\"";
                                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 361)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["link"] ?? null) : null);
                                echo "\" />
                                                        ";
                            } else {
                                // line 363
                                echo "                                                            <img src=\"";
                                echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 363)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["src"] ?? null) : null);
                                echo "\" alt=\"";
                                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 363)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["link"] ?? null) : null);
                                echo "\" />
                                                        ";
                            }
                            // line 365
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
                                        ";
                        } else {
                            // line 369
                            echo "                                            ";
                            if (($context["lazy_load"] ?? null)) {
                                // line 370
                                echo "                                                <img class=\"lazyload\" src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
                                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 370)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["src"] ?? null) : null);
                                echo "\" alt=\"";
                                echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 370)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["link"] ?? null) : null);
                                echo "\" />
                                            ";
                            } else {
                                // line 372
                                echo "                                                <img src=\"";
                                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 372)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["src"] ?? null) : null);
                                echo "\" alt=\"";
                                echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = twig_get_attribute($this->env, $this->source, $context["tab"], "image", [], "any", false, false, false, 372)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["link"] ?? null) : null);
                                echo "\" />
                                            ";
                            }
                            // line 374
                            echo "                                        ";
                        }
                        // line 375
                        echo "                                    </div>
                                </div>
                            </div>
                            ";
                    }
                    // line 379
                    echo "
                            <script>
                                \$(\".multi-slides-";
                    // line 381
                    echo ($context["module_id"] ?? null);
                    echo "-";
                    echo ($context["tab_count"] ?? null);
                    echo "\").swiper({
                                    spaceBetween: 0,
                                    ";
                    // line 383
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 383)) {
                        // line 384
                        echo "                                    pagination: '.multi-slides-pagination-";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo "',
                                    paginationClickable: true,
                                    ";
                    }
                    // line 387
                    echo "                                    ";
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 387)) {
                        // line 388
                        echo "                                    nextButton: '.swiper-button-next-";
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo "',
                                    prevButton: '.swiper-button-prev-";
                        // line 389
                        echo ($context["module_id"] ?? null);
                        echo "-";
                        echo ($context["tab_count"] ?? null);
                        echo "',
                                    ";
                    }
                    // line 391
                    echo "                                    speed: ";
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 391)) {
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 391);
                        echo " ";
                    } else {
                        echo " 500 ";
                    }
                    echo ",
\t\t\t\t\t\t\t\t\tpreloadImages: false,
\t\t\t\t\t\t\t\t\tlazyLoading: true,
\t\t\t\t\t\t\t\t\twatchSlidesVisibility: true,
                                    slidesPerView: ";
                    // line 395
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_desktop", [], "any", false, false, false, 395);
                    echo ",
                                    slidesPerColumn: ";
                    // line 396
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_desktop", [], "any", false, false, false, 396);
                    echo ",
                                    breakpoints: {
                                        1499: {
                                            slidesPerView: ";
                    // line 399
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_laptop", [], "any", false, false, false, 399);
                    echo ",
                                            slidesPerColumn: ";
                    // line 400
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_laptop", [], "any", false, false, false, 400);
                    echo "
                                        },
\t\t\t\t\t\t\t\t\t\t1199: {
                                            slidesPerView: ";
                    // line 403
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_tablet", [], "any", false, false, false, 403);
                    echo ",
                                            slidesPerColumn: ";
                    // line 404
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_tablet", [], "any", false, false, false, 404);
                    echo "
                                        },
                                        991: {
                                            slidesPerView: ";
                    // line 407
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_s_tablet", [], "any", false, false, false, 407);
                    echo ",
                                            slidesPerColumn: ";
                    // line 408
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_s_tablet", [], "any", false, false, false, 408);
                    echo "
                                        },
                                        767: {
                                            slidesPerView: ";
                    // line 411
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_mobile", [], "any", false, false, false, 411);
                    echo ",
                                            slidesPerColumn: ";
                    // line 412
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_mobile", [], "any", false, false, false, 412);
                    echo "
                                        },
                                        479: {
                                            slidesPerView: ";
                    // line 415
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "item_s_mobile", [], "any", false, false, false, 415);
                    echo ",
                                            slidesPerColumn: ";
                    // line 416
                    echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "row_s_mobile", [], "any", false, false, false, 416);
                    echo "
                                        }
                                    },
                                    autoplay: ";
                    // line 419
                    if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "auto", [], "any", false, false, false, 419)) {
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
                    // line 424
                    echo "                            <p class=\"txt-empty\">";
                    echo ($context["text_empty"] ?? null);
                    echo "</p>
                        ";
                }
                // line 426
                echo "                    </div>
                    ";
                // line 427
                $context["tab_count"] = (($context["tab_count"] ?? null) + 1);
                // line 428
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 429
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
        // line 452
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "tt_safira2/template/plaza/module/ptproducts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1152 => 452,  1127 => 429,  1121 => 428,  1119 => 427,  1116 => 426,  1110 => 424,  1098 => 419,  1092 => 416,  1088 => 415,  1082 => 412,  1078 => 411,  1072 => 408,  1068 => 407,  1062 => 404,  1058 => 403,  1052 => 400,  1048 => 399,  1042 => 396,  1038 => 395,  1024 => 391,  1017 => 389,  1010 => 388,  1007 => 387,  998 => 384,  996 => 383,  989 => 381,  985 => 379,  979 => 375,  976 => 374,  968 => 372,  960 => 370,  957 => 369,  951 => 365,  943 => 363,  935 => 361,  933 => 360,  929 => 359,  925 => 357,  923 => 356,  917 => 352,  909 => 349,  903 => 348,  900 => 347,  898 => 346,  895 => 345,  887 => 343,  885 => 342,  881 => 340,  872 => 337,  869 => 336,  865 => 335,  854 => 333,  849 => 330,  847 => 329,  844 => 328,  838 => 324,  830 => 321,  824 => 320,  821 => 319,  819 => 318,  816 => 317,  808 => 315,  806 => 314,  802 => 312,  793 => 309,  790 => 308,  786 => 307,  775 => 305,  766 => 299,  760 => 295,  758 => 294,  755 => 293,  751 => 291,  743 => 288,  737 => 287,  734 => 286,  732 => 285,  729 => 284,  721 => 282,  719 => 281,  715 => 279,  706 => 276,  703 => 275,  699 => 274,  688 => 272,  685 => 271,  682 => 270,  680 => 269,  673 => 268,  668 => 267,  666 => 266,  662 => 264,  659 => 263,  656 => 261,  653 => 260,  647 => 258,  635 => 253,  629 => 250,  625 => 249,  619 => 246,  615 => 245,  609 => 242,  605 => 241,  599 => 238,  595 => 237,  589 => 234,  585 => 233,  579 => 230,  575 => 229,  561 => 225,  556 => 223,  551 => 222,  548 => 221,  541 => 218,  539 => 217,  532 => 215,  528 => 213,  522 => 209,  516 => 206,  512 => 205,  509 => 204,  507 => 203,  504 => 202,  498 => 200,  496 => 199,  492 => 197,  483 => 194,  480 => 193,  476 => 192,  471 => 190,  465 => 186,  462 => 185,  456 => 183,  450 => 181,  447 => 180,  443 => 178,  437 => 176,  431 => 174,  429 => 173,  424 => 172,  422 => 171,  417 => 168,  415 => 167,  412 => 166,  406 => 162,  400 => 159,  396 => 158,  393 => 157,  391 => 156,  388 => 155,  382 => 153,  380 => 152,  376 => 150,  367 => 147,  364 => 146,  360 => 145,  355 => 143,  346 => 137,  340 => 133,  338 => 132,  335 => 131,  332 => 130,  320 => 121,  291 => 95,  287 => 94,  282 => 92,  273 => 86,  269 => 85,  264 => 82,  258 => 81,  256 => 80,  251 => 77,  243 => 75,  235 => 73,  233 => 72,  229 => 71,  225 => 69,  220 => 68,  218 => 67,  213 => 65,  208 => 62,  206 => 61,  203 => 60,  197 => 57,  193 => 56,  190 => 55,  188 => 54,  185 => 53,  179 => 51,  177 => 50,  173 => 48,  164 => 45,  161 => 44,  157 => 43,  152 => 41,  149 => 40,  145 => 38,  142 => 37,  139 => 36,  136 => 35,  133 => 34,  129 => 31,  124 => 28,  118 => 27,  116 => 26,  109 => 23,  106 => 22,  98 => 20,  90 => 18,  87 => 17,  85 => 16,  79 => 15,  76 => 14,  71 => 13,  69 => 12,  65 => 10,  63 => 9,  59 => 8,  56 => 7,  50 => 5,  48 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira2/template/plaza/module/ptproducts.twig", "");
    }
}
