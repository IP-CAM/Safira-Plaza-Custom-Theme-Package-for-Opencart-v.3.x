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

/* tt_safira2/template/plaza/module/ptproducts/content.twig */
class __TwigTemplate_a89bad4376e02c615171687959c13b936596eb48c6f8e59f8f9d765c4ec8eb04 extends \Twig\Template
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
        if ((($context["layout_type"] ?? null) == "grid")) {
            // line 2
            echo "    ";
            // line 3
            echo "\t<div class=\"grid-style\">
\t\t<div class=\"product-item\">\t
\t\t\t<div class=\"image ";
            // line 5
            if (($context["rotate_image"] ?? null)) {
                echo "rotate-image-container";
            }
            echo "\">
\t\t\t\t<a href=\"";
            // line 6
            echo ($context["href"] ?? null);
            echo "\">
\t\t\t\t\t";
            // line 7
            if (($context["rotate_image"] ?? null)) {
                // line 8
                echo "\t\t\t\t\t\t<img ";
                if (($context["lazy_load"] ?? null)) {
                    echo " data-src=\"";
                    echo ($context["rotate_image"] ?? null);
                    echo "\" width=\"";
                    echo ($context["img_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["img_height"] ?? null);
                    echo "\" ";
                } else {
                    echo " src=\"";
                    echo ($context["rotate_image"] ?? null);
                    echo "\" ";
                }
                echo "  alt=\"";
                echo ($context["name"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" class=\"img-responsive img-rotate-image ";
                if (($context["lazy_load"] ?? null)) {
                    echo " swiper-lazy ";
                }
                echo "\" />
\t\t\t\t\t";
            }
            // line 10
            echo "\t\t\t\t\t<img ";
            if (($context["lazy_load"] ?? null)) {
                echo " data-src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" width=\"";
                echo ($context["img_width"] ?? null);
                echo "\" height=\"";
                echo ($context["img_height"] ?? null);
                echo "\" ";
            } else {
                echo " src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" ";
            }
            echo " alt=\"";
            echo ($context["name"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"";
            if (($context["lazy_load"] ?? null)) {
                echo " swiper-lazy ";
            }
            echo " img-responsive img-mod-";
            echo ($context["section_id"] ?? null);
            echo "-";
            echo ($context["product_id"] ?? null);
            echo "\" />
\t\t\t\t\t";
            // line 11
            if (($context["swatches_images"] ?? null)) {
                // line 12
                echo "\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                echo ($context["thumb"] ?? null);
                echo "\" class=\"img-default-";
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "\" />
\t\t\t\t\t\t";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["swatches_images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["s_image"]) {
                    // line 14
                    echo "\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "image", [], "any", false, false, false, 14);
                    echo "\" class=\"img-swatch-";
                    echo ($context["section_id"] ?? null);
                    echo "-";
                    echo ($context["product_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "product_option_value_id", [], "any", false, false, false, 14);
                    echo "\" />
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "\t\t\t\t\t";
            }
            // line 17
            echo "\t\t\t\t</a>
\t\t\t\t";
            // line 18
            if (($context["lazy_load"] ?? null)) {
                // line 19
                echo "\t\t\t\t<div class=\"swiper-lazy-preloader\"></div>
\t\t\t\t";
            }
            // line 21
            echo "\t\t\t\t";
            if ((((($context["show_cart"] ?? null) || ($context["show_wishlist"] ?? null)) || ($context["show_compare"] ?? null)) || ($context["show_quickview"] ?? null))) {
                // line 22
                echo "\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t";
                // line 24
                if (($context["show_cart"] ?? null)) {
                    // line 25
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-cart\" onclick=\"cart.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\"><span>";
                    echo ($context["button_cart"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 27
                echo "\t\t\t\t\t\t\t";
                if (($context["show_quickview"] ?? null)) {
                    // line 28
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                    echo ($context["button_quickview"] ?? null);
                    echo "\" class=\"button-quickview\" onclick=\"ptquickview.ajaxView('";
                    echo ($context["href"] ?? null);
                    echo "')\"><span>";
                    echo ($context["button_quickview"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 30
                echo "\t\t\t\t\t\t\t";
                if (($context["show_wishlist"] ?? null)) {
                    // line 31
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" class=\"button-wishlist\" onclick=\"wishlist.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_wishlist"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 33
                echo "\t\t\t\t\t\t\t";
                if (($context["show_compare"] ?? null)) {
                    // line 34
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_compare"] ?? null);
                    echo "\" class=\"button-compare\" onclick=\"compare.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_compare"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 36
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t";
            if ((($context["show_countdown"] ?? null) && ($context["date_end"] ?? null))) {
                // line 40
                echo "\t\t\t\t\t<p class=\"text-countdown\">";
                echo ($context["text_countdown"] ?? null);
                echo "</p>
\t\t\t\t\t<div class=\"countdown-box countdown-product-";
                // line 41
                echo ($context["product_id"] ?? null);
                echo "\" data-id=\"";
                echo ($context["product_id"] ?? null);
                echo "\" data-date=\"";
                echo ($context["date_end"] ?? null);
                echo "\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<b class=\"day\"></b><span>";
                // line 44
                echo ($context["text_days"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<b class=\"hour\"></b><span>";
                // line 47
                echo ($context["text_hours"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<b class=\"min\"></b><span>";
                // line 50
                echo ($context["text_mins"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<b class=\"sec\"></b><span>";
                // line 53
                echo ($context["text_secs"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 58
            echo "\t\t\t</div>
\t\t\t<div class=\"caption\">
\t\t\t\t
\t\t\t\t";
            // line 61
            if ((($context["show_label"] ?? null) && (($context["special"] ?? null) || ($context["is_new"] ?? null)))) {
                // line 62
                echo "\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t";
                // line 63
                if (($context["special"] ?? null)) {
                    // line 64
                    echo "\t\t\t\t\t\t\t<div><span class=\"pro-label sale\">";
                    echo ($context["text_sale"] ?? null);
                    echo "</span></div>
\t\t\t\t\t\t";
                }
                // line 66
                echo "\t\t\t\t\t\t";
                if (($context["is_new"] ?? null)) {
                    // line 67
                    echo "\t\t\t\t\t\t\t<div><span class=\"pro-label new\">";
                    echo ($context["text_new"] ?? null);
                    echo "</span></div>
\t\t\t\t\t\t";
                }
                // line 69
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 71
            echo "\t\t\t\t
\t\t\t\t";
            // line 72
            if (($context["options"] ?? null)) {
                // line 73
                echo "\t\t\t\t\t<div class=\"category-options product-options\">
\t\t\t\t\t";
                // line 74
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 75
                    echo "\t\t\t\t\t\t<ul class=\"ul-swatches-colors\">
\t\t\t\t\t\t\t";
                    // line 76
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 76));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 77
                        echo "\t\t\t\t\t\t\t\t<li class=\"swatches-options\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"swatches.changeModuleSwatches(\$(this));\" title=\"";
                        // line 78
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 78);
                        echo "\"
\t\t\t\t\t\t\t\t\t   style=\"";
                        // line 79
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 79)) {
                            echo " width: 12px; height: 12px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                            // line 80
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 80);
                            echo "') ";
                        }
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-module-id=\"";
                        // line 81
                        echo ($context["section_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-product-id=\"";
                        // line 82
                        echo ($context["product_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-product-option-value-id=\"";
                        // line 83
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 83);
                        echo "\">";
                        if ( !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 83)) {
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 83);
                            echo " ";
                        }
                        echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 86
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 90
            echo "\t\t\t\t
\t\t\t\t<h4><a href=\"";
            // line 91
            echo ($context["href"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h4>
\t\t\t\t";
            // line 92
            if (($context["manufacturer"] ?? null)) {
                // line 93
                echo "\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t<a href=\"";
                // line 94
                echo ($context["manufacturer_href"] ?? null);
                echo "\">";
                echo ($context["manufacturer"] ?? null);
                echo "</a>
\t\t\t\t\t</p>
\t\t\t\t";
            }
            // line 97
            echo "\t\t\t\t<!-- ";
            if (($context["rating"] ?? null)) {
                echo " -->
\t\t\t\t\t<!-- <div class=\"rating\"> -->
\t\t\t\t\t\t<!-- ";
                // line 99
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    echo " -->
\t\t\t\t\t\t\t<!-- ";
                    // line 100
                    if ((($context["rating"] ?? null) < $context["i"])) {
                        echo " -->
\t\t\t\t\t\t\t\t<!-- <span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-o\"></i></span> -->
\t\t\t\t\t\t\t<!-- ";
                    } else {
                        // line 102
                        echo " -->
\t\t\t\t\t\t\t\t<!-- <span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-x\"></i></span> -->
\t\t\t\t\t\t\t<!-- ";
                    }
                    // line 104
                    echo " -->
\t\t\t\t\t\t<!-- ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                echo " -->
\t\t\t\t\t<!-- </div> -->
\t\t\t\t<!-- ";
            }
            // line 107
            echo " -->
\t\t\t\t";
            // line 108
            if ((($context["show_price"] ?? null) && ($context["price"] ?? null))) {
                // line 109
                echo "\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t";
                // line 110
                if ( !($context["special"] ?? null)) {
                    // line 111
                    echo "\t\t\t\t\t\t\t";
                    echo ($context["price"] ?? null);
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 113
                    echo "\t\t\t\t\t\t\t<span class=\"price-new\">";
                    echo ($context["special"] ?? null);
                    echo "</span> <span class=\"price-old\">";
                    echo ($context["price"] ?? null);
                    echo "</span>
\t\t\t\t\t\t";
                }
                // line 115
                echo "\t\t\t\t\t\t";
                if (($context["tax"] ?? null)) {
                    // line 116
                    echo "\t\t\t\t\t\t\t<span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo ($context["tax"] ?? null);
                    echo "</span>
\t\t\t\t\t\t";
                }
                // line 118
                echo "\t\t\t\t\t</p>
\t\t\t\t";
            }
            // line 120
            echo "\t\t\t\t
\t\t\t\t";
            // line 121
            if ((($context["show_description"] ?? null) && ($context["description"] ?? null))) {
                // line 122
                echo "\t\t\t\t\t<p class=\"product-description\">";
                echo ($context["description"] ?? null);
                echo "</p>
\t\t\t\t";
            }
            // line 124
            echo "\t\t\t\t<a class=\"button-view-more\" href=\"";
            echo ($context["href"] ?? null);
            echo "\" target=\"_blank\">";
            echo ($context["text_viewmore"] ?? null);
            echo "</a>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 129
        echo "
";
        // line 130
        if ((($context["layout_type"] ?? null) == "list")) {
            // line 131
            echo "    ";
            // line 132
            echo "\t<div class=\"list-style\">
\t\t<div class=\"product-item\">\t
\t\t\t<div class=\"image ";
            // line 134
            if (($context["rotate_image"] ?? null)) {
                echo "rotate-image-container";
            }
            echo "\">
\t\t\t\t";
            // line 135
            if ((($context["show_label"] ?? null) && (($context["special"] ?? null) || ($context["is_new"] ?? null)))) {
                // line 136
                echo "\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t";
                // line 137
                if (($context["special"] ?? null)) {
                    // line 138
                    echo "\t\t\t\t\t\t\t<div><span class=\"pro-label sale\">";
                    echo ($context["text_sale"] ?? null);
                    echo "</span></div>
\t\t\t\t\t\t";
                }
                // line 140
                echo "\t\t\t\t\t\t";
                if (($context["is_new"] ?? null)) {
                    // line 141
                    echo "\t\t\t\t\t\t\t<div><span class=\"pro-label new\">";
                    echo ($context["text_new"] ?? null);
                    echo "</span></div>
\t\t\t\t\t\t";
                }
                // line 143
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 145
            echo "\t\t\t\t<a href=\"";
            echo ($context["href"] ?? null);
            echo "\">
\t\t\t\t\t";
            // line 146
            if (($context["rotate_image"] ?? null)) {
                // line 147
                echo "\t\t\t\t\t\t<img ";
                if (($context["lazy_load"] ?? null)) {
                    echo " data-src=\"";
                    echo ($context["rotate_image"] ?? null);
                    echo "\" width=\"";
                    echo ($context["img_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["img_height"] ?? null);
                    echo "\" ";
                } else {
                    echo " src=\"";
                    echo ($context["rotate_image"] ?? null);
                    echo "\" ";
                }
                echo "  alt=\"";
                echo ($context["name"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" class=\"img-responsive img-rotate-image ";
                if (($context["lazy_load"] ?? null)) {
                    echo " swiper-lazy ";
                }
                echo "\" />
\t\t\t\t\t";
            }
            // line 149
            echo "\t\t\t\t\t<img ";
            if (($context["lazy_load"] ?? null)) {
                echo " data-src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" width=\"";
                echo ($context["img_width"] ?? null);
                echo "\" height=\"";
                echo ($context["img_height"] ?? null);
                echo "\" ";
            } else {
                echo " src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" ";
            }
            echo " alt=\"";
            echo ($context["name"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"";
            if (($context["lazy_load"] ?? null)) {
                echo " swiper-lazy ";
            }
            echo " img-responsive img-mod-";
            echo ($context["section_id"] ?? null);
            echo "-";
            echo ($context["product_id"] ?? null);
            echo "\" />
\t\t\t\t\t";
            // line 150
            if (($context["swatches_images"] ?? null)) {
                // line 151
                echo "\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                echo ($context["thumb"] ?? null);
                echo "\" class=\"img-default-";
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "\" />
\t\t\t\t\t\t";
                // line 152
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["swatches_images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["s_image"]) {
                    // line 153
                    echo "\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "image", [], "any", false, false, false, 153);
                    echo "\" class=\"img-swatch-";
                    echo ($context["section_id"] ?? null);
                    echo "-";
                    echo ($context["product_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "product_option_value_id", [], "any", false, false, false, 153);
                    echo "\" />
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 155
                echo "\t\t\t\t\t";
            }
            // line 156
            echo "\t\t\t\t</a>
\t\t\t\t";
            // line 157
            if (($context["lazy_load"] ?? null)) {
                // line 158
                echo "\t\t\t\t<div class=\"swiper-lazy-preloader\"></div>
\t\t\t\t";
            }
            // line 160
            echo "\t\t\t</div>
\t\t\t<div class=\"caption\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t";
            // line 163
            if (($context["options"] ?? null)) {
                // line 164
                echo "\t\t\t\t\t<div class=\"category-options product-options\">
\t\t\t\t\t";
                // line 165
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 166
                    echo "\t\t\t\t\t\t<ul class=\"ul-swatches-colors\">
\t\t\t\t\t\t\t";
                    // line 167
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 167));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 168
                        echo "\t\t\t\t\t\t\t\t<li class=\"swatches-options\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"swatches.changeModuleSwatches(\$(this));\" title=\"";
                        // line 169
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 169);
                        echo "\"
\t\t\t\t\t\t\t\t\t   style=\"";
                        // line 170
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 170)) {
                            echo " width: 12px; height: 12px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                            // line 171
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 171);
                            echo "') ";
                        }
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-module-id=\"";
                        // line 172
                        echo ($context["section_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-product-id=\"";
                        // line 173
                        echo ($context["product_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-product-option-value-id=\"";
                        // line 174
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 174);
                        echo "\">";
                        if ( !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 174)) {
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 174);
                            echo " ";
                        }
                        echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 177
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 179
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 181
            echo "\t\t\t\t
\t\t\t\t<h4><a href=\"";
            // line 182
            echo ($context["href"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h4>
\t\t\t\t";
            // line 183
            if (($context["manufacturer"] ?? null)) {
                // line 184
                echo "\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t<a href=\"";
                // line 185
                echo ($context["manufacturer_href"] ?? null);
                echo "\">";
                echo ($context["manufacturer"] ?? null);
                echo "</a>
\t\t\t\t\t</p>
\t\t\t\t";
            }
            // line 188
            echo "\t\t\t\t<!-- ";
            if (($context["rating"] ?? null)) {
                echo " -->
\t\t\t\t\t<!-- <div class=\"rating\"> -->
\t\t\t\t\t\t<!-- ";
                // line 190
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    echo " -->
\t\t\t\t\t\t\t<!-- ";
                    // line 191
                    if ((($context["rating"] ?? null) < $context["i"])) {
                        echo " -->
\t\t\t\t\t\t\t\t<!-- <span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-o\"></i></span> -->
\t\t\t\t\t\t\t<!-- ";
                    } else {
                        // line 193
                        echo " -->
\t\t\t\t\t\t\t\t<!-- <span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-x\"></i></span> -->
\t\t\t\t\t\t\t<!-- ";
                    }
                    // line 195
                    echo " -->
\t\t\t\t\t\t<!-- ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 196
                echo " -->
\t\t\t\t\t<!-- </div> -->
\t\t\t\t<!-- ";
            }
            // line 198
            echo " -->
\t\t\t\t";
            // line 199
            if ((($context["show_price"] ?? null) && ($context["price"] ?? null))) {
                // line 200
                echo "\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t";
                // line 201
                if ( !($context["special"] ?? null)) {
                    // line 202
                    echo "\t\t\t\t\t\t\t";
                    echo ($context["price"] ?? null);
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 204
                    echo "\t\t\t\t\t\t\t<span class=\"price-new\">";
                    echo ($context["special"] ?? null);
                    echo "</span> <span class=\"price-old\">";
                    echo ($context["price"] ?? null);
                    echo "</span>
\t\t\t\t\t\t";
                }
                // line 206
                echo "\t\t\t\t\t\t";
                if (($context["tax"] ?? null)) {
                    // line 207
                    echo "\t\t\t\t\t\t\t<span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo ($context["tax"] ?? null);
                    echo "</span>
\t\t\t\t\t\t";
                }
                // line 209
                echo "\t\t\t\t\t</p>
\t\t\t\t";
            }
            // line 211
            echo "\t\t\t\t";
            if ((($context["show_description"] ?? null) && ($context["description"] ?? null))) {
                // line 212
                echo "\t\t\t\t\t<p class=\"product-description\">";
                echo ($context["description"] ?? null);
                echo "</p>
\t\t\t\t";
            }
            // line 214
            echo "\t\t\t\t";
            if ((($context["show_countdown"] ?? null) && ($context["date_end"] ?? null))) {
                // line 215
                echo "\t\t\t\t\t<p class=\"text-countdown\">";
                echo ($context["text_countdown"] ?? null);
                echo "</p>
\t\t\t\t\t<div class=\"countdown-box countdown-product-";
                // line 216
                echo ($context["product_id"] ?? null);
                echo "\" data-id=\"";
                echo ($context["product_id"] ?? null);
                echo "\" data-date=\"";
                echo ($context["date_end"] ?? null);
                echo "\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<b class=\"day\"></b><span>";
                // line 219
                echo ($context["text_days"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<b class=\"hour\"></b><span>";
                // line 222
                echo ($context["text_hours"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<b class=\"min\"></b><span>";
                // line 225
                echo ($context["text_mins"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<b class=\"sec\"></b><span>";
                // line 228
                echo ($context["text_secs"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 233
            echo "\t\t\t\t";
            if ((((($context["show_cart"] ?? null) || ($context["show_wishlist"] ?? null)) || ($context["show_compare"] ?? null)) || ($context["show_quickview"] ?? null))) {
                // line 234
                echo "\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t";
                // line 236
                if (($context["show_cart"] ?? null)) {
                    // line 237
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-cart\" onclick=\"cart.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\"><span>";
                    echo ($context["button_cart"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 239
                echo "\t\t\t\t\t\t\t";
                if (($context["show_quickview"] ?? null)) {
                    // line 240
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                    echo ($context["button_quickview"] ?? null);
                    echo "\" class=\"button-quickview\" onclick=\"ptquickview.ajaxView('";
                    echo ($context["href"] ?? null);
                    echo "')\"><span>";
                    echo ($context["button_quickview"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 242
                echo "\t\t\t\t\t\t\t";
                if (($context["show_wishlist"] ?? null)) {
                    // line 243
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" class=\"button-wishlist\" onclick=\"wishlist.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_wishlist"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 245
                echo "\t\t\t\t\t\t\t";
                if (($context["show_compare"] ?? null)) {
                    // line 246
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_compare"] ?? null);
                    echo "\" class=\"button-compare\" onclick=\"compare.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_compare"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 248
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 251
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 256
        echo "
";
        // line 257
        if ((($context["layout_type"] ?? null) == "other")) {
            // line 258
            echo "    ";
            // line 259
            echo "\t<div class=\"other-style\">
\t\t<div class=\"product-item\">\t
\t\t\t
\t\t\t<div class=\"image ";
            // line 262
            if (($context["rotate_image"] ?? null)) {
                echo "rotate-image-container";
            }
            echo "\">
\t\t\t\t";
            // line 263
            if ((($context["show_label"] ?? null) && (($context["special"] ?? null) || ($context["is_new"] ?? null)))) {
                // line 264
                echo "\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t";
                // line 265
                if (($context["special"] ?? null)) {
                    // line 266
                    echo "\t\t\t\t\t\t\t<div><span class=\"pro-label sale\">";
                    echo ($context["text_sale"] ?? null);
                    echo "</span></div>
\t\t\t\t\t\t";
                }
                // line 268
                echo "\t\t\t\t\t\t";
                if (($context["is_new"] ?? null)) {
                    // line 269
                    echo "\t\t\t\t\t\t\t<div><span class=\"pro-label new\">";
                    echo ($context["text_new"] ?? null);
                    echo "</span></div>
\t\t\t\t\t\t";
                }
                // line 271
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 273
            echo "\t\t\t\t<a href=\"";
            echo ($context["href"] ?? null);
            echo "\">
\t\t\t\t\t";
            // line 274
            if (($context["rotate_image"] ?? null)) {
                // line 275
                echo "\t\t\t\t\t\t<img ";
                if (($context["lazy_load"] ?? null)) {
                    echo " data-src=\"";
                    echo ($context["rotate_image"] ?? null);
                    echo "\" width=\"";
                    echo ($context["img_width"] ?? null);
                    echo "\" height=\"";
                    echo ($context["img_height"] ?? null);
                    echo "\" ";
                } else {
                    echo " src=\"";
                    echo ($context["rotate_image"] ?? null);
                    echo "\" ";
                }
                echo "  alt=\"";
                echo ($context["name"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" class=\"img-responsive img-rotate-image ";
                if (($context["lazy_load"] ?? null)) {
                    echo " swiper-lazy ";
                }
                echo "\" />
\t\t\t\t\t";
            }
            // line 277
            echo "\t\t\t\t\t<img ";
            if (($context["lazy_load"] ?? null)) {
                echo " data-src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" width=\"";
                echo ($context["img_width"] ?? null);
                echo "\" height=\"";
                echo ($context["img_height"] ?? null);
                echo "\" ";
            } else {
                echo " src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" ";
            }
            echo " alt=\"";
            echo ($context["name"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"";
            if (($context["lazy_load"] ?? null)) {
                echo " swiper-lazy ";
            }
            echo " img-responsive img-mod-";
            echo ($context["section_id"] ?? null);
            echo "-";
            echo ($context["product_id"] ?? null);
            echo "\" />
\t\t\t\t\t";
            // line 278
            if (($context["swatches_images"] ?? null)) {
                // line 279
                echo "\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                echo ($context["thumb"] ?? null);
                echo "\" class=\"img-default-";
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "\" />
\t\t\t\t\t\t";
                // line 280
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["swatches_images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["s_image"]) {
                    // line 281
                    echo "\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "image", [], "any", false, false, false, 281);
                    echo "\" class=\"img-swatch-";
                    echo ($context["section_id"] ?? null);
                    echo "-";
                    echo ($context["product_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "product_option_value_id", [], "any", false, false, false, 281);
                    echo "\" />
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 283
                echo "\t\t\t\t\t";
            }
            // line 284
            echo "\t\t\t\t</a>
\t\t\t\t";
            // line 285
            if (($context["lazy_load"] ?? null)) {
                // line 286
                echo "\t\t\t\t<div class=\"swiper-lazy-preloader\"></div>
\t\t\t\t";
            }
            // line 288
            echo "\t\t\t\t";
            if ((((($context["show_cart"] ?? null) || ($context["show_wishlist"] ?? null)) || ($context["show_compare"] ?? null)) || ($context["show_quickview"] ?? null))) {
                // line 289
                echo "\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t";
                // line 291
                if (($context["show_cart"] ?? null)) {
                    // line 292
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-cart\" onclick=\"cart.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\"><span>";
                    echo ($context["button_cart"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 294
                echo "\t\t\t\t\t\t\t";
                if (($context["show_quickview"] ?? null)) {
                    // line 295
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                    echo ($context["button_quickview"] ?? null);
                    echo "\" class=\"button-quickview\" onclick=\"ptquickview.ajaxView('";
                    echo ($context["href"] ?? null);
                    echo "')\"><span>";
                    echo ($context["button_quickview"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 297
                echo "\t\t\t\t\t\t\t";
                if (($context["show_wishlist"] ?? null)) {
                    // line 298
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" class=\"button-wishlist\" onclick=\"wishlist.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_wishlist"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 300
                echo "\t\t\t\t\t\t\t";
                if (($context["show_compare"] ?? null)) {
                    // line 301
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_compare"] ?? null);
                    echo "\" class=\"button-compare\" onclick=\"compare.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_compare"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 303
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 306
            echo "\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"caption\">
\t\t\t\t";
            // line 309
            if (($context["manufacturer"] ?? null)) {
                // line 310
                echo "\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t<a href=\"";
                // line 311
                echo ($context["manufacturer_href"] ?? null);
                echo "\">";
                echo ($context["manufacturer"] ?? null);
                echo "</a>
\t\t\t\t\t</p>
\t\t\t\t";
            }
            // line 314
            echo "\t\t\t\t
\t\t\t\t";
            // line 315
            if (($context["options"] ?? null)) {
                // line 316
                echo "\t\t\t\t\t<div class=\"category-options product-options\">
\t\t\t\t\t";
                // line 317
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 318
                    echo "\t\t\t\t\t\t<ul class=\"ul-swatches-colors\">
\t\t\t\t\t\t\t";
                    // line 319
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 319));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 320
                        echo "\t\t\t\t\t\t\t\t<li class=\"swatches-options\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"swatches.changeModuleSwatches(\$(this));\" title=\"";
                        // line 321
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 321);
                        echo "\"
\t\t\t\t\t\t\t\t\t   style=\"";
                        // line 322
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 322)) {
                            echo " width: 12px; height: 12px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                            // line 323
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 323);
                            echo "') ";
                        }
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-module-id=\"";
                        // line 324
                        echo ($context["section_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-product-id=\"";
                        // line 325
                        echo ($context["product_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-product-option-value-id=\"";
                        // line 326
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 326);
                        echo "\">";
                        if ( !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 326)) {
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 326);
                            echo " ";
                        }
                        echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 329
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 331
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 333
            echo "\t\t\t\t
\t\t\t\t<h4><a href=\"";
            // line 334
            echo ($context["href"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h4>
\t\t\t\t";
            // line 335
            if (($context["rating"] ?? null)) {
                // line 336
                echo "\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t";
                // line 337
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 338
                    echo "\t\t\t\t\t\t\t";
                    if ((($context["rating"] ?? null) < $context["i"])) {
                        // line 339
                        echo "\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-o\"></i></span>
\t\t\t\t\t\t\t";
                    } else {
                        // line 341
                        echo "\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-x\"></i></span>
\t\t\t\t\t\t\t";
                    }
                    // line 343
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 344
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 346
            echo "\t\t\t\t";
            if ((($context["show_price"] ?? null) && ($context["price"] ?? null))) {
                // line 347
                echo "\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t";
                // line 348
                if ( !($context["special"] ?? null)) {
                    // line 349
                    echo "\t\t\t\t\t\t\t";
                    echo ($context["price"] ?? null);
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 351
                    echo "\t\t\t\t\t\t\t<span class=\"price-new\">";
                    echo ($context["special"] ?? null);
                    echo "</span> <span class=\"price-old\">";
                    echo ($context["price"] ?? null);
                    echo "</span>
\t\t\t\t\t\t";
                }
                // line 353
                echo "\t\t\t\t\t\t";
                if (($context["tax"] ?? null)) {
                    // line 354
                    echo "\t\t\t\t\t\t\t<span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo ($context["tax"] ?? null);
                    echo "</span>
\t\t\t\t\t\t";
                }
                // line 356
                echo "\t\t\t\t\t</p>
\t\t\t\t";
            }
            // line 358
            echo "\t\t\t\t
\t\t\t\t";
            // line 359
            if ((($context["show_description"] ?? null) && ($context["description"] ?? null))) {
                // line 360
                echo "\t\t\t\t\t<p>";
                echo ($context["description"] ?? null);
                echo "</p>
\t\t\t\t";
            }
            // line 362
            echo "\t\t\t\t";
            if ((($context["show_countdown"] ?? null) && ($context["date_end"] ?? null))) {
                // line 363
                echo "\t\t\t\t\t<div class=\"quantity-progress\" >
\t\t\t\t\t\t<p class=\"product-available\">";
                // line 364
                echo ($context["text_availabe"] ?? null);
                echo "<span>";
                echo ($context["quantity"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t<p class=\"product-sold\">";
                // line 365
                echo ($context["text_sold"] ?? null);
                echo "<span>";
                echo ($context["sold_number"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t<div class=\"bar-percent\" >
\t\t\t\t\t\t\t<div class=\"available-percent\" style=\"width: ";
                // line 367
                echo ((($context["quantity"] ?? null) / ($context["total_qty"] ?? null)) * 100);
                echo "%;\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<p class=\"text-countdown\">";
                // line 370
                echo ($context["text_countdown"] ?? null);
                echo "</p>
\t\t\t\t\t<div class=\"countdown-box countdown-product-";
                // line 371
                echo ($context["product_id"] ?? null);
                echo "\" data-id=\"";
                echo ($context["product_id"] ?? null);
                echo "\" data-date=\"";
                echo ($context["date_end"] ?? null);
                echo "\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<b class=\"day\"></b><span>";
                // line 374
                echo ($context["text_days"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<b class=\"hour\"></b><span>";
                // line 377
                echo ($context["text_hours"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<b class=\"min\"></b><span>";
                // line 380
                echo ($context["text_mins"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t<b class=\"sec\"></b><span>";
                // line 383
                echo ($context["text_secs"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 388
            echo "\t\t\t</div>
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "tt_safira2/template/plaza/module/ptproducts/content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1369 => 388,  1361 => 383,  1355 => 380,  1349 => 377,  1343 => 374,  1333 => 371,  1329 => 370,  1323 => 367,  1316 => 365,  1310 => 364,  1307 => 363,  1304 => 362,  1298 => 360,  1296 => 359,  1293 => 358,  1289 => 356,  1281 => 354,  1278 => 353,  1270 => 351,  1264 => 349,  1262 => 348,  1259 => 347,  1256 => 346,  1252 => 344,  1246 => 343,  1242 => 341,  1238 => 339,  1235 => 338,  1231 => 337,  1228 => 336,  1226 => 335,  1220 => 334,  1217 => 333,  1213 => 331,  1206 => 329,  1191 => 326,  1187 => 325,  1183 => 324,  1177 => 323,  1173 => 322,  1169 => 321,  1166 => 320,  1162 => 319,  1159 => 318,  1155 => 317,  1152 => 316,  1150 => 315,  1147 => 314,  1139 => 311,  1136 => 310,  1134 => 309,  1129 => 306,  1124 => 303,  1114 => 301,  1111 => 300,  1101 => 298,  1098 => 297,  1088 => 295,  1085 => 294,  1075 => 292,  1073 => 291,  1069 => 289,  1066 => 288,  1062 => 286,  1060 => 285,  1057 => 284,  1054 => 283,  1039 => 281,  1035 => 280,  1026 => 279,  1024 => 278,  995 => 277,  969 => 275,  967 => 274,  962 => 273,  958 => 271,  952 => 269,  949 => 268,  943 => 266,  941 => 265,  938 => 264,  936 => 263,  930 => 262,  925 => 259,  923 => 258,  921 => 257,  918 => 256,  911 => 251,  906 => 248,  896 => 246,  893 => 245,  883 => 243,  880 => 242,  870 => 240,  867 => 239,  857 => 237,  855 => 236,  851 => 234,  848 => 233,  840 => 228,  834 => 225,  828 => 222,  822 => 219,  812 => 216,  807 => 215,  804 => 214,  798 => 212,  795 => 211,  791 => 209,  783 => 207,  780 => 206,  772 => 204,  766 => 202,  764 => 201,  761 => 200,  759 => 199,  756 => 198,  751 => 196,  744 => 195,  739 => 193,  733 => 191,  727 => 190,  721 => 188,  713 => 185,  710 => 184,  708 => 183,  702 => 182,  699 => 181,  695 => 179,  688 => 177,  673 => 174,  669 => 173,  665 => 172,  659 => 171,  655 => 170,  651 => 169,  648 => 168,  644 => 167,  641 => 166,  637 => 165,  634 => 164,  632 => 163,  627 => 160,  623 => 158,  621 => 157,  618 => 156,  615 => 155,  600 => 153,  596 => 152,  587 => 151,  585 => 150,  556 => 149,  530 => 147,  528 => 146,  523 => 145,  519 => 143,  513 => 141,  510 => 140,  504 => 138,  502 => 137,  499 => 136,  497 => 135,  491 => 134,  487 => 132,  485 => 131,  483 => 130,  480 => 129,  469 => 124,  463 => 122,  461 => 121,  458 => 120,  454 => 118,  446 => 116,  443 => 115,  435 => 113,  429 => 111,  427 => 110,  424 => 109,  422 => 108,  419 => 107,  414 => 105,  407 => 104,  402 => 102,  396 => 100,  390 => 99,  384 => 97,  376 => 94,  373 => 93,  371 => 92,  365 => 91,  362 => 90,  358 => 88,  351 => 86,  336 => 83,  332 => 82,  328 => 81,  322 => 80,  318 => 79,  314 => 78,  311 => 77,  307 => 76,  304 => 75,  300 => 74,  297 => 73,  295 => 72,  292 => 71,  288 => 69,  282 => 67,  279 => 66,  273 => 64,  271 => 63,  268 => 62,  266 => 61,  261 => 58,  253 => 53,  247 => 50,  241 => 47,  235 => 44,  225 => 41,  220 => 40,  217 => 39,  212 => 36,  202 => 34,  199 => 33,  189 => 31,  186 => 30,  176 => 28,  173 => 27,  163 => 25,  161 => 24,  157 => 22,  154 => 21,  150 => 19,  148 => 18,  145 => 17,  142 => 16,  127 => 14,  123 => 13,  114 => 12,  112 => 11,  83 => 10,  57 => 8,  55 => 7,  51 => 6,  45 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira2/template/plaza/module/ptproducts/content.twig", "");
    }
}
