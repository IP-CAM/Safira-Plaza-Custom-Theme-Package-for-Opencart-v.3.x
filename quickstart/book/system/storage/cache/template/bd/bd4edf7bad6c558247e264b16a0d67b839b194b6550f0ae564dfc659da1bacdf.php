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

/* tt_safira_book3/template/plaza/module/ptproducts/large_content.twig */
class __TwigTemplate_5382f4424b1b962dc58c6217121584ee4f3e6ecb574b3f3c0cf162537ada8555 extends \Twig\Template
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
    ";
        // line 3
        echo "    <div class=\"grid-style\">
        <div class=\"product-item first-product\">
            <div class=\"image ";
        // line 5
        if (($context["rotate_image"] ?? null)) {
            echo "rotate-image-container";
        }
        echo "\">
                <a href=\"";
        // line 6
        echo ($context["href"] ?? null);
        echo "\">
                    ";
        // line 7
        if (($context["rotate_image"] ?? null)) {
            // line 8
            echo "                        ";
            if (($context["lazy_load"] ?? null)) {
                // line 9
                echo "                            <img src=\"";
                echo ($context["loader_img"] ?? null);
                echo "\" data-src=\"";
                echo ($context["rotate_image"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" class=\"img-responsive img-rotate-image lazyload\" />
                        ";
            } else {
                // line 11
                echo "                            <img src=\"";
                echo ($context["rotate_image"] ?? null);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" class=\"img-responsive img-rotate-image \" />
                        ";
            }
            // line 13
            echo "                    ";
        }
        // line 14
        echo "                    ";
        if (($context["lazy_load"] ?? null)) {
            // line 15
            echo "                        <img src=\"";
            echo ($context["loader_img"] ?? null);
            echo "\" data-src=\"";
            echo ($context["thumb"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive img-mod-";
            echo ($context["section_id"] ?? null);
            echo "-";
            echo ($context["product_id"] ?? null);
            echo " lazyload\" />
                    ";
        } else {
            // line 17
            echo "                        <img src=\"";
            echo ($context["thumb"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive img-mod-";
            echo ($context["section_id"] ?? null);
            echo "-";
            echo ($context["product_id"] ?? null);
            echo "\" />
                    ";
        }
        // line 19
        echo "                    ";
        if (($context["swatches_images"] ?? null)) {
            // line 20
            echo "                        <input type=\"hidden\" value=\"";
            echo ($context["thumb"] ?? null);
            echo "\" class=\"img-default-";
            echo ($context["section_id"] ?? null);
            echo "-";
            echo ($context["product_id"] ?? null);
            echo "\" />
                        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["swatches_images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["s_image"]) {
                // line 22
                echo "                            <input type=\"hidden\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["s_image"], "image", [], "any", false, false, false, 22);
                echo "\" class=\"img-swatch-";
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["s_image"], "product_option_value_id", [], "any", false, false, false, 22);
                echo "\" />
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                    ";
        }
        // line 25
        echo "                </a>
\t\t\t\t";
        // line 26
        if (($context["show_quickview"] ?? null)) {
            // line 27
            echo "\t\t\t\t\t<div class=\"quickview\">
\t\t\t\t\t\t<button type=\"button\" title=\"";
            // line 28
            echo ($context["button_quickview"] ?? null);
            echo "\" class=\"button-quickview\" onclick=\"ptquickview.ajaxView('";
            echo ($context["href"] ?? null);
            echo "')\"><span>";
            echo ($context["button_quickview"] ?? null);
            echo "</span></button>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 31
        echo "                
            </div>
            <div class=\"caption\">
                ";
        // line 34
        if (($context["gallery_images"] ?? null)) {
            // line 35
            echo "                    <div class=\"gallery-thumbs\">
                        <div class=\"swiper-viewport\">
                            <div class=\"swiper-container gallery-images-";
            // line 37
            echo ($context["section_id"] ?? null);
            echo "-";
            echo ($context["product_id"] ?? null);
            echo "\">
                                <div class=\"swiper-wrapper\">
                                    ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["gallery_images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 40
                echo "                                        <div class=\"swiper-slide\">
                                            <a href=\"javascript:changeImg('";
                // line 41
                echo ($context["section_id"] ?? null);
                echo "', '";
                echo ($context["product_id"] ?? null);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["img"], "popup", [], "any", false, false, false, 41);
                echo "');\" class=\"child-thumb\" data-img=\"";
                echo twig_get_attribute($this->env, $this->source, $context["img"], "popup", [], "any", false, false, false, 41);
                echo "\">
                                                ";
                // line 42
                if (($context["lazy_load"] ?? null)) {
                    // line 43
                    echo "                                                    <img class=\"lazyload\" src=\"";
                    echo ($context["loader_img"] ?? null);
                    echo "\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["img"], "thumb", [], "any", false, false, false, 43);
                    echo "\" alt=\"";
                    echo ($context["name"] ?? null);
                    echo "\"/>
                                                ";
                } else {
                    // line 45
                    echo "                                                    <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["img"], "thumb", [], "any", false, false, false, 45);
                    echo "\" alt=\"";
                    echo ($context["name"] ?? null);
                    echo "\"/>
                                                ";
                }
                // line 47
                echo "                                            </a>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                                </div>
                            </div>
                            <div class=\"swiper-pager\">
                                <div class=\"swiper-button-next swiper-button-next-";
            // line 53
            echo ($context["section_id"] ?? null);
            echo "-";
            echo ($context["product_id"] ?? null);
            echo "\"></div>
                                <div class=\"swiper-button-prev swiper-button-prev-";
            // line 54
            echo ($context["section_id"] ?? null);
            echo "-";
            echo ($context["product_id"] ?? null);
            echo "\"></div>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 59
        echo "\t\t\t\t";
        if (($context["options"] ?? null)) {
            // line 60
            echo "                    <div class=\"category-options product-options\">
                        ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 62
                echo "                            <ul class=\"ul-swatches-colors\">
                                ";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 63));
                foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                    // line 64
                    echo "                                    <li class=\"swatches-options\">
                                        <a href=\"javascript:void(0);\" onclick=\"swatches.changeModuleSwatches(\$(this));\" title=\"";
                    // line 65
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 65);
                    echo "\"
                                           style=\"";
                    // line 66
                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 66)) {
                        echo " width: 15px; height: 15px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                        // line 67
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 67);
                        echo "') ";
                    }
                    echo "\"
                                           data-module-id=\"";
                    // line 68
                    echo ($context["section_id"] ?? null);
                    echo "\"
                                           data-product-id=\"";
                    // line 69
                    echo ($context["product_id"] ?? null);
                    echo "\"
                                           data-product-option-value-id=\"";
                    // line 70
                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 70);
                    echo "\">";
                    if ( !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 70)) {
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 70);
                        echo " ";
                    }
                    echo "</a>
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "                            </ul>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                    </div>
                ";
        }
        // line 77
        echo "\t\t\t\t";
        if (($context["manufacturer"] ?? null)) {
            // line 78
            echo "                    <p class=\"manufacture-product\">
                        <a href=\"";
            // line 79
            echo ($context["manufacturer_href"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a>
                    </p>
                ";
        }
        // line 82
        echo "
                ";
        // line 83
        if ((($context["show_label"] ?? null) && (($context["special"] ?? null) || ($context["is_new"] ?? null)))) {
            // line 84
            echo "                    <div class=\"box-label\">
                        ";
            // line 85
            if (($context["special"] ?? null)) {
                // line 86
                echo "                            <div><span class=\"pro-label sale\">";
                echo (("-" . ($context["rate_special"] ?? null)) . "%");
                echo "</span></div>
                        ";
            }
            // line 88
            echo "                        ";
            if (($context["is_new"] ?? null)) {
                // line 89
                echo "                            <div><span class=\"pro-label new\">";
                echo ($context["text_new"] ?? null);
                echo "</span></div>
                        ";
            }
            // line 91
            echo "                    </div>
                ";
        }
        // line 93
        echo "
                

                

                <h4><a href=\"";
        // line 98
        echo ($context["href"] ?? null);
        echo "\">";
        echo ($context["name"] ?? null);
        echo "</a></h4>
                ";
        // line 99
        if (($context["rating"] ?? null)) {
            // line 100
            echo "                    <div class=\"rating\">
                        ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 102
                echo "                            ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 103
                    echo "                                <span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-o\"></i></span>
                            ";
                } else {
                    // line 105
                    echo "                                <span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-x\"></i></span>
                            ";
                }
                // line 107
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "                    </div>
                ";
        }
        // line 110
        echo "                ";
        if ((($context["show_price"] ?? null) && ($context["price"] ?? null))) {
            // line 111
            echo "                    <p class=\"price\">
                        ";
            // line 112
            if ( !($context["special"] ?? null)) {
                // line 113
                echo "                            ";
                echo ($context["price"] ?? null);
                echo "
                        ";
            } else {
                // line 115
                echo "                            <span class=\"price-new\">";
                echo ($context["special"] ?? null);
                echo "</span> <span class=\"price-old\">";
                echo ($context["price"] ?? null);
                echo "</span>
                        ";
            }
            // line 117
            echo "                        ";
            if (($context["tax"] ?? null)) {
                // line 118
                echo "                            <span class=\"price-tax\">";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</span>
                        ";
            }
            // line 120
            echo "                    </p>
                ";
        }
        // line 122
        echo "
                ";
        // line 123
        if ((($context["show_description"] ?? null) && ($context["description"] ?? null))) {
            // line 124
            echo "                    <p class=\"product-description\">";
            echo ($context["description"] ?? null);
            echo "</p>
                ";
        }
        // line 126
        echo "
                ";
        // line 127
        if ((($context["show_countdown"] ?? null) && ($context["date_end"] ?? null))) {
            // line 128
            echo "                    <p class=\"text-countdown\">";
            echo ($context["text_countdown"] ?? null);
            echo "</p>
                    <div class=\"countdown-box countdown-product-";
            // line 129
            echo ($context["product_id"] ?? null);
            echo "\" data-id=\"";
            echo ($context["product_id"] ?? null);
            echo "\" data-date=\"";
            echo ($context["date_end"] ?? null);
            echo "\">
                        <div class=\"inner\">
                            <div class=\"box\">
                                <b class=\"day\"></b><span>";
            // line 132
            echo ($context["text_days"] ?? null);
            echo "</span>
                            </div>
                            <div class=\"box\">
                                <b class=\"hour\"></b><span>";
            // line 135
            echo ($context["text_hours"] ?? null);
            echo "</span>
                            </div>
                            <div class=\"box\">
                                <b class=\"min\"></b><span>";
            // line 138
            echo ($context["text_mins"] ?? null);
            echo "</span>
                            </div>
                            <div class=\"box\">
                                <b class=\"sec\"></b><span>";
            // line 141
            echo ($context["text_secs"] ?? null);
            echo "</span>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 146
        echo "                
\t\t\t\t";
        // line 147
        if (((($context["show_cart"] ?? null) || ($context["show_wishlist"] ?? null)) || ($context["show_compare"] ?? null))) {
            // line 148
            echo "                    <div class=\"button-group\">
                        <div class=\"inner\">
                            ";
            // line 150
            if (($context["show_cart"] ?? null)) {
                // line 151
                echo "\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-cart\" onclick=\"cart.add('";
                echo ($context["product_id"] ?? null);
                echo "');\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\"><span>";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>\t
\t\t\t\t\t\t\t";
            }
            // line 153
            echo "                            ";
            if (($context["show_wishlist"] ?? null)) {
                // line 154
                echo "                                <button type=\"button\"  title=\"";
                echo ($context["button_wishlist"] ?? null);
                echo "\" class=\"button-wishlist\" onclick=\"wishlist.add('";
                echo ($context["product_id"] ?? null);
                echo "');\"><span>";
                echo ($context["button_wishlist"] ?? null);
                echo "</span></button>
                            ";
            }
            // line 156
            echo "                            ";
            if (($context["show_compare"] ?? null)) {
                // line 157
                echo "                                <button type=\"button\"  title=\"";
                echo ($context["button_compare"] ?? null);
                echo "\" class=\"button-compare\" onclick=\"compare.add('";
                echo ($context["product_id"] ?? null);
                echo "');\"><span>";
                echo ($context["button_compare"] ?? null);
                echo "</span></button>
                            ";
            }
            // line 159
            echo "                        </div>
                    </div>
                ";
        }
        // line 162
        echo "            </div>
        </div>
    </div>

    <script>
        var gallery_images = \$(\".gallery-images-";
        // line 167
        echo ($context["section_id"] ?? null);
        echo "-";
        echo ($context["product_id"] ?? null);
        echo "\");
\t\t
\t\t\$('.child-thumb').click(function(){
\t\t\t\$('.child-thumb').removeClass('active');
\t\t\t\$(this).addClass('active');
\t\t});
        gallery_images.swiper({
            spaceBetween: 0,
            speed: 500,
            preloadImages: false,
            watchSlidesVisibility: true,
            slidesPerView: 4,
            slidesPerColumn: 1,
            breakpoints: {
                1499: {
                    slidesPerView: 4,
                    slidesPerColumn: 1
                },
                1199: {
                    slidesPerView: 4,
                    slidesPerColumn: 1
                },
                991: {
                    slidesPerView: 4,
                    slidesPerColumn: 1
                },
                767: {
                    slidesPerView: 4,
                    slidesPerColumn: 1
                },
                479: {
                    slidesPerView: 4,
                    slidesPerColumn: 1
                }
            },
            autoplay: false,
            loop: false
        });

        function changeImg(section_id, product_id, popup) {
            \$('.first-product .img-mod-' + section_id + '-' + product_id).attr('src', popup);
        }
    </script>

";
    }

    public function getTemplateName()
    {
        return "tt_safira_book3/template/plaza/module/ptproducts/large_content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  560 => 167,  553 => 162,  548 => 159,  538 => 157,  535 => 156,  525 => 154,  522 => 153,  512 => 151,  510 => 150,  506 => 148,  504 => 147,  501 => 146,  493 => 141,  487 => 138,  481 => 135,  475 => 132,  465 => 129,  460 => 128,  458 => 127,  455 => 126,  449 => 124,  447 => 123,  444 => 122,  440 => 120,  432 => 118,  429 => 117,  421 => 115,  415 => 113,  413 => 112,  410 => 111,  407 => 110,  403 => 108,  397 => 107,  393 => 105,  389 => 103,  386 => 102,  382 => 101,  379 => 100,  377 => 99,  371 => 98,  364 => 93,  360 => 91,  354 => 89,  351 => 88,  345 => 86,  343 => 85,  340 => 84,  338 => 83,  335 => 82,  327 => 79,  324 => 78,  321 => 77,  317 => 75,  310 => 73,  295 => 70,  291 => 69,  287 => 68,  281 => 67,  277 => 66,  273 => 65,  270 => 64,  266 => 63,  263 => 62,  259 => 61,  256 => 60,  253 => 59,  243 => 54,  237 => 53,  232 => 50,  224 => 47,  216 => 45,  206 => 43,  204 => 42,  194 => 41,  191 => 40,  187 => 39,  180 => 37,  176 => 35,  174 => 34,  169 => 31,  159 => 28,  156 => 27,  154 => 26,  151 => 25,  148 => 24,  133 => 22,  129 => 21,  120 => 20,  117 => 19,  103 => 17,  87 => 15,  84 => 14,  81 => 13,  71 => 11,  59 => 9,  56 => 8,  54 => 7,  50 => 6,  44 => 5,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_book3/template/plaza/module/ptproducts/large_content.twig", "");
    }
}
