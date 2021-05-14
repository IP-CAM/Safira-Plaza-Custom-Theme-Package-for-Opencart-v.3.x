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

/* tt_safira_book4/template/plaza/module/ptproducts/large_content.twig */
class __TwigTemplate_227d5444e05dfe0ffedfc018c34e385cd66db71c121cd772935d0e1a7d594da3 extends \Twig\Template
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
                echo "                            <img src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
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
            echo "                        <img src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
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
                    echo "                                                    <img class=\"lazyload\" src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
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
        return "tt_safira_book4/template/plaza/module/ptproducts/large_content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  554 => 167,  547 => 162,  542 => 159,  532 => 157,  529 => 156,  519 => 154,  516 => 153,  506 => 151,  504 => 150,  500 => 148,  498 => 147,  495 => 146,  487 => 141,  481 => 138,  475 => 135,  469 => 132,  459 => 129,  454 => 128,  452 => 127,  449 => 126,  443 => 124,  441 => 123,  438 => 122,  434 => 120,  426 => 118,  423 => 117,  415 => 115,  409 => 113,  407 => 112,  404 => 111,  401 => 110,  397 => 108,  391 => 107,  387 => 105,  383 => 103,  380 => 102,  376 => 101,  373 => 100,  371 => 99,  365 => 98,  358 => 93,  354 => 91,  348 => 89,  345 => 88,  339 => 86,  337 => 85,  334 => 84,  332 => 83,  329 => 82,  321 => 79,  318 => 78,  315 => 77,  311 => 75,  304 => 73,  289 => 70,  285 => 69,  281 => 68,  275 => 67,  271 => 66,  267 => 65,  264 => 64,  260 => 63,  257 => 62,  253 => 61,  250 => 60,  247 => 59,  237 => 54,  231 => 53,  226 => 50,  218 => 47,  210 => 45,  202 => 43,  200 => 42,  190 => 41,  187 => 40,  183 => 39,  176 => 37,  172 => 35,  170 => 34,  165 => 31,  155 => 28,  152 => 27,  150 => 26,  147 => 25,  144 => 24,  129 => 22,  125 => 21,  116 => 20,  113 => 19,  99 => 17,  85 => 15,  82 => 14,  79 => 13,  69 => 11,  59 => 9,  56 => 8,  54 => 7,  50 => 6,  44 => 5,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_book4/template/plaza/module/ptproducts/large_content.twig", "");
    }
}
