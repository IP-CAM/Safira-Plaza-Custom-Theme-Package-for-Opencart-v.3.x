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

/* tt_safira_medical1/template/plaza/module/ptproducts/content.twig */
class __TwigTemplate_bf612bae59546c86210e7c64fea8930187395e45d1015e185c63809df78167ca extends \Twig\Template
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
\t\t\t\t
\t\t\t\t<a href=\"";
            // line 7
            echo ($context["href"] ?? null);
            echo "\">
\t\t\t\t\t";
            // line 8
            if (($context["rotate_image"] ?? null)) {
                // line 9
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
                echo (twig_slice($this->env, ($context["name"] ?? null), 0, 20) . "...");
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" class=\"img-responsive img-rotate-image ";
                if (($context["lazy_load"] ?? null)) {
                    echo " swiper-lazy ";
                }
                echo "\" />
\t\t\t\t\t";
            }
            // line 11
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
            echo (twig_slice($this->env, ($context["name"] ?? null), 0, 20) . "...");
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
            // line 12
            if (($context["swatches_images"] ?? null)) {
                // line 13
                echo "\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                echo ($context["thumb"] ?? null);
                echo "\" class=\"img-default-";
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "\" />
\t\t\t\t\t\t";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["swatches_images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["s_image"]) {
                    // line 15
                    echo "\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "image", [], "any", false, false, false, 15);
                    echo "\" class=\"img-swatch-";
                    echo ($context["section_id"] ?? null);
                    echo "-";
                    echo ($context["product_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "product_option_value_id", [], "any", false, false, false, 15);
                    echo "\" />
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "\t\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t</a>
\t\t\t\t";
            // line 19
            if (($context["lazy_load"] ?? null)) {
                // line 20
                echo "\t\t\t\t<div class=\"swiper-lazy-preloader\"></div>
\t\t\t\t";
            }
            // line 22
            echo "\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t";
            // line 25
            if (($context["options"] ?? null)) {
                // line 26
                echo "\t\t\t\t\t<div class=\"category-options product-options\">
\t\t\t\t\t";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 28
                    echo "\t\t\t\t\t\t<ul class=\"ul-swatches-colors\">
\t\t\t\t\t\t\t";
                    // line 29
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 29));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 30
                        echo "\t\t\t\t\t\t\t\t<li class=\"swatches-options\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"swatches.changeModuleSwatches(\$(this));\" title=\"";
                        // line 31
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 31);
                        echo "\"
\t\t\t\t\t\t\t\t\t   style=\"";
                        // line 32
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 32)) {
                            echo " width: 10px; height: 10px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                            // line 33
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 33);
                            echo "') ";
                        }
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-module-id=\"";
                        // line 34
                        echo ($context["section_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-product-id=\"";
                        // line 35
                        echo ($context["product_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-product-option-value-id=\"";
                        // line 36
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 36);
                        echo "\">";
                        if ( !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 36)) {
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 36);
                            echo " ";
                        }
                        echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 39
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 43
            echo "\t\t\t\t
\t\t\t\t";
            // line 44
            if (((($context["show_compare"] ?? null) || ($context["show_wishlist"] ?? null)) || ($context["show_quickview"] ?? null))) {
                // line 45
                echo "\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 48
                if (($context["show_wishlist"] ?? null)) {
                    // line 49
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" class=\"button-wishlist\" onclick=\"wishlist.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_wishlist"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 51
                echo "\t\t\t\t\t\t\t";
                if (($context["show_compare"] ?? null)) {
                    // line 52
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_compare"] ?? null);
                    echo "\" class=\"button-compare\" onclick=\"compare.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_compare"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 54
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 55
                if (($context["show_quickview"] ?? null)) {
                    // line 56
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                    echo ($context["button_quickview"] ?? null);
                    echo "\" class=\"button-quickview\" onclick=\"ptquickview.ajaxView('";
                    echo ($context["href"] ?? null);
                    echo "')\"><span>";
                    echo ($context["button_quickview"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 58
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 61
            echo "\t\t\t</div>
\t\t\t<div class=\"caption\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t";
            // line 64
            if (($context["manufacturer"] ?? null)) {
                // line 65
                echo "\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t<a href=\"";
                // line 66
                echo ($context["manufacturer_href"] ?? null);
                echo "\">";
                echo ($context["manufacturer"] ?? null);
                echo "</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t";
            }
            // line 69
            echo "
\t\t\t\t\t
\t\t\t\t\t<h4><a href=\"";
            // line 71
            echo ($context["href"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h4>
\t\t\t\t\t";
            // line 72
            if (($context["rating"] ?? null)) {
                // line 73
                echo "\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t";
                // line 74
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 75
                    echo "\t\t\t\t\t\t\t\t";
                    if ((($context["rating"] ?? null) < $context["i"])) {
                        // line 76
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-o\"></i></span>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 78
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-x\"></i></span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 80
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 83
            echo "\t\t\t\t\t<div>
\t\t\t\t\t";
            // line 84
            if ((($context["show_price"] ?? null) && ($context["price"] ?? null))) {
                // line 85
                echo "\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t";
                // line 86
                if ( !($context["special"] ?? null)) {
                    // line 87
                    echo "\t\t\t\t\t\t\t\t";
                    echo ($context["price"] ?? null);
                    echo "
\t\t\t\t\t\t\t";
                } else {
                    // line 89
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                    echo ($context["special"] ?? null);
                    echo "</span> <span class=\"price-old\">";
                    echo ($context["price"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 91
                echo "\t\t\t\t\t\t\t";
                if (($context["tax"] ?? null)) {
                    // line 92
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo ($context["tax"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 94
                echo "\t\t\t\t\t\t</p>
\t\t\t\t\t";
            }
            // line 96
            echo "\t\t\t\t\t";
            if ((($context["show_label"] ?? null) && (($context["special"] ?? null) || ($context["is_new"] ?? null)))) {
                // line 97
                echo "\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t";
                // line 98
                if (($context["special"] ?? null)) {
                    // line 99
                    echo "\t\t\t\t\t\t\t\t<div><span class=\"pro-label sale\">";
                    echo (("-" . ($context["rate_special"] ?? null)) . "%");
                    echo "</span></div>
\t\t\t\t\t\t\t";
                }
                // line 101
                echo "\t\t\t\t\t\t\t";
                if (($context["is_new"] ?? null)) {
                    // line 102
                    echo "\t\t\t\t\t\t\t\t<div><span class=\"pro-label new\">";
                    echo ($context["text_new"] ?? null);
                    echo "</span></div>
\t\t\t\t\t\t\t";
                }
                // line 104
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 106
            echo "\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 107
            if ((($context["show_description"] ?? null) && ($context["description"] ?? null))) {
                // line 108
                echo "\t\t\t\t\t\t<p class=\"product-description\">";
                echo ($context["description"] ?? null);
                echo "</p>
\t\t\t\t\t";
            }
            // line 110
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 111
            if (($context["show_cart"] ?? null)) {
                // line 112
                echo "\t\t\t\t\t\t<div>
\t\t\t\t\t\t<button type=\"button\" class=\"button-cart\" onclick=\"cart.add('";
                // line 113
                echo ($context["product_id"] ?? null);
                echo "');\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\"><span>";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 116
            echo "\t\t\t\t\t";
            if ((($context["show_countdown"] ?? null) && ($context["date_end"] ?? null))) {
                // line 117
                echo "\t\t\t\t\t\t<div class=\"quantity-progress\" >
\t\t\t\t\t\t\t<p class=\"product-available\">";
                // line 118
                echo ($context["text_availabe"] ?? null);
                echo "<span>";
                echo ($context["quantity"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t\t<p class=\"product-sold\">";
                // line 119
                echo ($context["text_sold"] ?? null);
                echo "<span>";
                echo ($context["sold_number"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t\t<div class=\"bar-percent\" >
\t\t\t\t\t\t\t\t<div class=\"available-percent\" style=\"width: ";
                // line 121
                echo ((($context["quantity"] ?? null) / ($context["total_qty"] ?? null)) * 100);
                echo "%;\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"countdown-box-flex\">
\t\t\t\t\t\t\t<p class=\"text-countdown\">";
                // line 125
                echo ($context["text_countdown"] ?? null);
                echo "</p>
\t\t\t\t\t\t\t<div class=\"countdown-box countdown-product-";
                // line 126
                echo ($context["product_id"] ?? null);
                echo "\" data-id=\"";
                echo ($context["product_id"] ?? null);
                echo "\" data-date=\"";
                echo ($context["date_end"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"day\"></b><span>";
                // line 129
                echo ($context["text_days"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"hour\"></b><span>";
                // line 132
                echo ($context["text_hours"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"min\"></b><span>";
                // line 135
                echo ($context["text_mins"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"sec\"></b><span>";
                // line 138
                echo ($context["text_secs"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 144
            echo "\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 151
        echo "
";
        // line 152
        if ((($context["layout_type"] ?? null) == "list")) {
            // line 153
            echo "    ";
            // line 154
            echo "\t<div class=\"list-style\">
\t\t<div class=\"product-item\">\t
\t\t\t<div class=\"image ";
            // line 156
            if (($context["rotate_image"] ?? null)) {
                echo "rotate-image-container";
            }
            echo "\">
\t\t\t\t
\t\t\t\t<a href=\"";
            // line 158
            echo ($context["href"] ?? null);
            echo "\">
\t\t\t\t\t";
            // line 159
            if (($context["rotate_image"] ?? null)) {
                // line 160
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
                echo (twig_slice($this->env, ($context["name"] ?? null), 0, 20) . "...");
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" class=\"img-responsive img-rotate-image ";
                if (($context["lazy_load"] ?? null)) {
                    echo " swiper-lazy ";
                }
                echo "\" />
\t\t\t\t\t";
            }
            // line 162
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
            echo (twig_slice($this->env, ($context["name"] ?? null), 0, 20) . "...");
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
            // line 163
            if (($context["swatches_images"] ?? null)) {
                // line 164
                echo "\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                echo ($context["thumb"] ?? null);
                echo "\" class=\"img-default-";
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "\" />
\t\t\t\t\t\t";
                // line 165
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["swatches_images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["s_image"]) {
                    // line 166
                    echo "\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "image", [], "any", false, false, false, 166);
                    echo "\" class=\"img-swatch-";
                    echo ($context["section_id"] ?? null);
                    echo "-";
                    echo ($context["product_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "product_option_value_id", [], "any", false, false, false, 166);
                    echo "\" />
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 168
                echo "\t\t\t\t\t";
            }
            // line 169
            echo "\t\t\t\t</a>
\t\t\t\t";
            // line 170
            if (($context["lazy_load"] ?? null)) {
                // line 171
                echo "\t\t\t\t<div class=\"swiper-lazy-preloader\"></div>
\t\t\t\t";
            }
            // line 173
            echo "\t\t\t\t
\t\t\t\t";
            // line 174
            if ((((($context["show_cart"] ?? null) || ($context["show_wishlist"] ?? null)) || ($context["show_compare"] ?? null)) || ($context["show_quickview"] ?? null))) {
                // line 175
                echo "\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t";
                // line 177
                if (($context["show_cart"] ?? null)) {
                    // line 178
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-cart\" onclick=\"cart.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\"><span>";
                    echo ($context["button_cart"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 180
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 181
                if (($context["show_wishlist"] ?? null)) {
                    // line 182
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" class=\"button-wishlist\" onclick=\"wishlist.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_wishlist"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 184
                echo "\t\t\t\t\t\t\t";
                if (($context["show_compare"] ?? null)) {
                    // line 185
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_compare"] ?? null);
                    echo "\" class=\"button-compare\" onclick=\"compare.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_compare"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 187
                echo "\t\t\t\t\t\t\t";
                if (($context["show_quickview"] ?? null)) {
                    echo "\t
\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                    // line 188
                    echo ($context["button_quickview"] ?? null);
                    echo "\" class=\"button-quickview\" onclick=\"ptquickview.ajaxView('";
                    echo ($context["href"] ?? null);
                    echo "')\"><span>";
                    echo ($context["button_quickview"] ?? null);
                    echo "</span></button>\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                }
                // line 190
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 193
            echo "\t\t\t</div>
\t\t\t<div class=\"caption\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t";
            // line 196
            if (($context["options"] ?? null)) {
                // line 197
                echo "\t\t\t\t\t\t<div class=\"category-options product-options\">
\t\t\t\t\t\t";
                // line 198
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 199
                    echo "\t\t\t\t\t\t\t<ul class=\"ul-swatches-colors\">
\t\t\t\t\t\t\t\t";
                    // line 200
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 200));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 201
                        echo "\t\t\t\t\t\t\t\t\t<li class=\"swatches-options\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"swatches.changeModuleSwatches(\$(this));\" title=\"";
                        // line 202
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 202);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   style=\"";
                        // line 203
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 203)) {
                            echo " width: 10px; height: 10px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                            // line 204
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 204);
                            echo "') ";
                        }
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   data-module-id=\"";
                        // line 205
                        echo ($context["section_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   data-product-id=\"";
                        // line 206
                        echo ($context["product_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   data-product-option-value-id=\"";
                        // line 207
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 207);
                        echo "\">";
                        if ( !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 207)) {
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 207);
                            echo " ";
                        }
                        echo "</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 210
                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 212
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 214
            echo "\t\t\t\t\t";
            if (($context["manufacturer"] ?? null)) {
                // line 215
                echo "\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t<a href=\"";
                // line 216
                echo ($context["manufacturer_href"] ?? null);
                echo "\">";
                echo ($context["manufacturer"] ?? null);
                echo "</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t";
            }
            // line 219
            echo "\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<h4><a href=\"";
            // line 221
            echo ($context["href"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h4>
\t\t\t\t\t";
            // line 222
            if (($context["rating"] ?? null)) {
                // line 223
                echo "\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t";
                // line 224
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 225
                    echo "\t\t\t\t\t\t\t\t";
                    if ((($context["rating"] ?? null) < $context["i"])) {
                        // line 226
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-o\"></i></span>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 228
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-x\"></i></span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 230
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 231
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 233
            echo "\t\t\t\t\t<div>
\t\t\t\t\t";
            // line 234
            if ((($context["show_price"] ?? null) && ($context["price"] ?? null))) {
                // line 235
                echo "\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t";
                // line 236
                if ( !($context["special"] ?? null)) {
                    // line 237
                    echo "\t\t\t\t\t\t\t\t";
                    echo ($context["price"] ?? null);
                    echo "
\t\t\t\t\t\t\t";
                } else {
                    // line 239
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                    echo ($context["special"] ?? null);
                    echo "</span> <span class=\"price-old\">";
                    echo ($context["price"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 241
                echo "\t\t\t\t\t\t\t";
                if (($context["tax"] ?? null)) {
                    // line 242
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo ($context["tax"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 244
                echo "\t\t\t\t\t\t</p>
\t\t\t\t\t";
            }
            // line 246
            echo "\t\t\t\t\t";
            if ((($context["show_label"] ?? null) && (($context["special"] ?? null) || ($context["is_new"] ?? null)))) {
                // line 247
                echo "\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t";
                // line 248
                if (($context["special"] ?? null)) {
                    // line 249
                    echo "\t\t\t\t\t\t\t\t<div><span class=\"pro-label sale\">";
                    echo (("-" . ($context["rate_special"] ?? null)) . "%");
                    echo "</span></div>
\t\t\t\t\t\t\t";
                }
                // line 251
                echo "\t\t\t\t\t\t\t";
                if (($context["is_new"] ?? null)) {
                    // line 252
                    echo "\t\t\t\t\t\t\t\t<div><span class=\"pro-label new\">";
                    echo ($context["text_new"] ?? null);
                    echo "</span></div>
\t\t\t\t\t\t\t";
                }
                // line 254
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 256
            echo "\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 257
            if ((($context["show_description"] ?? null) && ($context["description"] ?? null))) {
                // line 258
                echo "\t\t\t\t\t\t<p class=\"product-description\">";
                echo ($context["description"] ?? null);
                echo "</p>
\t\t\t\t\t";
            }
            // line 260
            echo "\t\t\t\t\t";
            if ((($context["show_countdown"] ?? null) && ($context["date_end"] ?? null))) {
                // line 261
                echo "\t\t\t\t\t\t<div class=\"quantity-progress\" >
\t\t\t\t\t\t\t<p class=\"product-available\">";
                // line 262
                echo ($context["text_availabe"] ?? null);
                echo "<span>";
                echo ($context["quantity"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t\t<p class=\"product-sold\">";
                // line 263
                echo ($context["text_sold"] ?? null);
                echo "<span>";
                echo ($context["sold_number"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t\t<div class=\"bar-percent\" >
\t\t\t\t\t\t\t\t<div class=\"available-percent\" style=\"width: ";
                // line 265
                echo ((($context["quantity"] ?? null) / ($context["total_qty"] ?? null)) * 100);
                echo "%;\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"countdown-box-flex\">
\t\t\t\t\t\t\t<p class=\"text-countdown\">";
                // line 269
                echo ($context["text_countdown"] ?? null);
                echo "</p>
\t\t\t\t\t\t\t<div class=\"countdown-box countdown-product-";
                // line 270
                echo ($context["product_id"] ?? null);
                echo "\" data-id=\"";
                echo ($context["product_id"] ?? null);
                echo "\" data-date=\"";
                echo ($context["date_end"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"day\"></b><span>";
                // line 273
                echo ($context["text_days"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"hour\"></b><span>";
                // line 276
                echo ($context["text_hours"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"min\"></b><span>";
                // line 279
                echo ($context["text_mins"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"sec\"></b><span>";
                // line 282
                echo ($context["text_secs"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 288
            echo "\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 295
        echo "
";
        // line 296
        if ((($context["layout_type"] ?? null) == "other")) {
            // line 297
            echo "    ";
            // line 298
            echo "\t<div class=\"other-style\">
\t\t<div class=\"product-item\">\t
\t\t\t";
            // line 300
            if (($context["gallery_images"] ?? null)) {
                // line 301
                echo "\t\t\t\t<div class=\"gallery-thumbs\">
\t\t\t\t\t<div class=\"swiper-viewport\">
\t\t\t\t\t\t<div class=\"swiper-container gallery-images-";
                // line 303
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "\">
\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t";
                // line 305
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["gallery_images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 306
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:changeImg('";
                    // line 307
                    echo ($context["section_id"] ?? null);
                    echo "', '";
                    echo ($context["product_id"] ?? null);
                    echo "', '";
                    echo twig_get_attribute($this->env, $this->source, $context["img"], "popup", [], "any", false, false, false, 307);
                    echo "');\" class=\"child-thumb\" data-img=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["img"], "popup", [], "any", false, false, false, 307);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 308
                    echo twig_get_attribute($this->env, $this->source, $context["img"], "thumb", [], "any", false, false, false, 308);
                    echo "\" alt=\"";
                    echo (twig_slice($this->env, ($context["name"] ?? null), 0, 20) . "...");
                    echo "\"/>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 312
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--div class=\"swiper-pager\">
\t\t\t\t\t\t\t<div class=\"swiper-button-next swiper-button-next-";
                // line 315
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "\"></div>
\t\t\t\t\t\t\t<div class=\"swiper-button-prev swiper-button-prev-";
                // line 316
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "\"></div>
\t\t\t\t\t\t</div-->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 321
            echo "\t\t\t<div class=\"image ";
            if (($context["rotate_image"] ?? null)) {
                echo "rotate-image-container";
            }
            echo "\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t<a href=\"";
            // line 323
            echo ($context["href"] ?? null);
            echo "\">
\t\t\t\t\t\t";
            // line 324
            if (($context["rotate_image"] ?? null)) {
                // line 325
                echo "\t\t\t\t\t\t\t<img ";
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
                echo (twig_slice($this->env, ($context["name"] ?? null), 0, 20) . "...");
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\" class=\"img-responsive img-rotate-image ";
                if (($context["lazy_load"] ?? null)) {
                    echo " swiper-lazy ";
                }
                echo "\" />
\t\t\t\t\t\t";
            }
            // line 327
            echo "\t\t\t\t\t\t<img ";
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
            echo (twig_slice($this->env, ($context["name"] ?? null), 0, 20) . "...");
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
\t\t\t\t\t\t";
            // line 328
            if (($context["swatches_images"] ?? null)) {
                // line 329
                echo "\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                echo ($context["thumb"] ?? null);
                echo "\" class=\"img-default-";
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "\" />
\t\t\t\t\t\t\t";
                // line 330
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["swatches_images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["s_image"]) {
                    // line 331
                    echo "\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "image", [], "any", false, false, false, 331);
                    echo "\" class=\"img-swatch-";
                    echo ($context["section_id"] ?? null);
                    echo "-";
                    echo ($context["product_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "product_option_value_id", [], "any", false, false, false, 331);
                    echo "\" />
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 333
                echo "\t\t\t\t\t\t";
            }
            // line 334
            echo "\t\t\t\t\t</a>
\t\t\t\t\t";
            // line 335
            if (($context["lazy_load"] ?? null)) {
                // line 336
                echo "\t\t\t\t\t<div class=\"swiper-lazy-preloader\"></div>
\t\t\t\t\t";
            }
            // line 338
            echo "\t\t\t\t\t";
            if (($context["options"] ?? null)) {
                // line 339
                echo "\t\t\t\t\t\t<div class=\"category-options product-options\">
\t\t\t\t\t\t";
                // line 340
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 341
                    echo "\t\t\t\t\t\t\t<ul class=\"ul-swatches-colors\">
\t\t\t\t\t\t\t\t";
                    // line 342
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 342));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 343
                        echo "\t\t\t\t\t\t\t\t\t<li class=\"swatches-options\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"swatches.changeModuleSwatches(\$(this));\" title=\"";
                        // line 344
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 344);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   style=\"";
                        // line 345
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 345)) {
                            echo " width: 10px; height: 10px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                            // line 346
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 346);
                            echo "') ";
                        }
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   data-module-id=\"";
                        // line 347
                        echo ($context["section_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   data-product-id=\"";
                        // line 348
                        echo ($context["product_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   data-product-option-value-id=\"";
                        // line 349
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 349);
                        echo "\">";
                        if ( !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 349)) {
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 349);
                            echo " ";
                        }
                        echo "</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 352
                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 354
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 356
            echo "\t\t\t\t\t";
            if ((((($context["show_cart"] ?? null) || ($context["show_compare"] ?? null)) || ($context["show_wishlist"] ?? null)) || ($context["show_quickview"] ?? null))) {
                // line 357
                echo "\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                // line 360
                if (($context["show_wishlist"] ?? null)) {
                    // line 361
                    echo "\t\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" class=\"button-wishlist\" onclick=\"wishlist.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_wishlist"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t";
                }
                // line 363
                echo "\t\t\t\t\t\t\t\t";
                if (($context["show_compare"] ?? null)) {
                    // line 364
                    echo "\t\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_compare"] ?? null);
                    echo "\" class=\"button-compare\" onclick=\"compare.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_compare"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t";
                }
                // line 366
                echo "\t\t\t\t\t\t\t\t";
                if (($context["show_quickview"] ?? null)) {
                    // line 367
                    echo "\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                    echo ($context["button_quickview"] ?? null);
                    echo "\" class=\"button-quickview\" onclick=\"ptquickview.ajaxView('";
                    echo ($context["href"] ?? null);
                    echo "')\"><span>";
                    echo ($context["button_quickview"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t";
                }
                // line 369
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 372
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"caption\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t";
            // line 376
            if (($context["manufacturer"] ?? null)) {
                // line 377
                echo "\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t<a href=\"";
                // line 378
                echo ($context["manufacturer_href"] ?? null);
                echo "\">";
                echo ($context["manufacturer"] ?? null);
                echo "</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t";
            }
            // line 381
            echo "
\t\t\t\t\t";
            // line 382
            if (($context["rating"] ?? null)) {
                // line 383
                echo "\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t";
                // line 384
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 385
                    echo "\t\t\t\t\t\t\t\t";
                    if ((($context["rating"] ?? null) < $context["i"])) {
                        // line 386
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-o\"></i></span>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 388
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-x\"></i></span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 390
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 391
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 393
            echo "\t\t\t\t\t<h4><a href=\"";
            echo ($context["href"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h4>
\t\t\t\t\t
\t\t\t\t\t";
            // line 395
            if ((($context["show_price"] ?? null) && ($context["price"] ?? null))) {
                // line 396
                echo "\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t";
                // line 397
                if ( !($context["special"] ?? null)) {
                    // line 398
                    echo "\t\t\t\t\t\t\t\t";
                    echo ($context["price"] ?? null);
                    echo "
\t\t\t\t\t\t\t";
                } else {
                    // line 400
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                    echo ($context["special"] ?? null);
                    echo "</span> <span class=\"price-old\">";
                    echo ($context["price"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 402
                echo "\t\t\t\t\t\t\t";
                if (($context["tax"] ?? null)) {
                    // line 403
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo ($context["tax"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 405
                echo "\t\t\t\t\t\t</p>
\t\t\t\t\t";
            }
            // line 407
            echo "\t\t\t\t\t";
            if ((($context["show_label"] ?? null) && (($context["special"] ?? null) || ($context["is_new"] ?? null)))) {
                // line 408
                echo "\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t";
                // line 409
                if (($context["special"] ?? null)) {
                    // line 410
                    echo "\t\t\t\t\t\t\t\t<div><span class=\"pro-label sale\">";
                    echo (("-" . ($context["rate_special"] ?? null)) . "%");
                    echo "</span></div>
\t\t\t\t\t\t\t";
                }
                // line 412
                echo "\t\t\t\t\t\t\t";
                if (($context["is_new"] ?? null)) {
                    // line 413
                    echo "\t\t\t\t\t\t\t\t<div><span class=\"pro-label new\">";
                    echo ($context["text_new"] ?? null);
                    echo "</span></div>
\t\t\t\t\t\t\t";
                }
                // line 415
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 417
            echo "\t\t\t\t\t";
            if ((($context["show_description"] ?? null) && ($context["description"] ?? null))) {
                // line 418
                echo "\t\t\t\t\t\t<p>";
                echo ($context["description"] ?? null);
                echo "</p>
\t\t\t\t\t";
            }
            // line 420
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 421
            if ((($context["show_countdown"] ?? null) && ($context["date_end"] ?? null))) {
                // line 422
                echo "\t\t\t\t\t\t<div class=\"quantity-progress\" >
\t\t\t\t\t\t\t<p class=\"product-available\">";
                // line 423
                echo ($context["text_availabe"] ?? null);
                echo "<span>";
                echo ($context["quantity"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t\t<p class=\"product-sold\">";
                // line 424
                echo ($context["text_sold"] ?? null);
                echo "<span>";
                echo ($context["sold_number"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t\t<div class=\"bar-percent\" >
\t\t\t\t\t\t\t\t<div class=\"available-percent\" style=\"width: ";
                // line 426
                echo ((($context["quantity"] ?? null) / ($context["total_qty"] ?? null)) * 100);
                echo "%;\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"text-countdown\">";
                // line 429
                echo ($context["text_countdown"] ?? null);
                echo "</p>
\t\t\t\t\t\t<div class=\"countdown-box countdown-product-";
                // line 430
                echo ($context["product_id"] ?? null);
                echo "\" data-id=\"";
                echo ($context["product_id"] ?? null);
                echo "\" data-date=\"";
                echo ($context["date_end"] ?? null);
                echo "\">
\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t<b class=\"day\"></b><span>";
                // line 433
                echo ($context["text_days"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t<b class=\"hour\"></b><span>";
                // line 436
                echo ($context["text_hours"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t<b class=\"min\"></b><span>";
                // line 439
                echo ($context["text_mins"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t<b class=\"sec\"></b><span>";
                // line 442
                echo ($context["text_secs"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 447
            echo "\t\t\t\t\t";
            if (($context["show_cart"] ?? null)) {
                // line 448
                echo "\t\t\t\t\t\t<button type=\"button\" class=\"button-cart\" onclick=\"cart.add('";
                echo ($context["product_id"] ?? null);
                echo "');\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\"><span>";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
\t\t\t\t\t";
            }
            // line 450
            echo "\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t<script>
\t\t\tvar gallery_images = \$(\".gallery-images-";
            // line 455
            echo ($context["section_id"] ?? null);
            echo "-";
            echo ($context["product_id"] ?? null);
            echo "\");
\t\t\t
\t\t\t\$('.child-thumb').click(function(){
\t\t\t\t\$('.child-thumb').removeClass('active');
\t\t\t\t\$(this).addClass('active');
\t\t\t});
\t\t\tgallery_images.swiper({
\t\t\t\tspaceBetween: 0,
\t\t\t\t// nextButton: '.swiper-button-next-";
            // line 463
            echo ($context["section_id"] ?? null);
            echo "-";
            echo ($context["product_id"] ?? null);
            echo "',
\t\t\t\t// prevButton: '.swiper-button-prev-";
            // line 464
            echo ($context["section_id"] ?? null);
            echo "-";
            echo ($context["product_id"] ?? null);
            echo "',
\t\t\t\tspeed: 500,
\t\t\t\tpreloadImages: false,
\t\t\t\twatchSlidesVisibility: true,
\t\t\t\tslidesPerView: 3,
\t\t\t\tslidesPerColumn: 1,
\t\t\t\tdirection: 'vertical',
\t\t\t\t// breakpoints: {
\t\t\t\t\t// 1499: {
\t\t\t\t\t\t// slidesPerView: 4,
\t\t\t\t\t\t// slidesPerColumn: 1
\t\t\t\t\t// },
\t\t\t\t\t// 1199: {
\t\t\t\t\t\t// slidesPerView: 4,
\t\t\t\t\t\t// slidesPerColumn: 1
\t\t\t\t\t// },
\t\t\t\t\t// 991: {
\t\t\t\t\t\t// slidesPerView: 5,
\t\t\t\t\t\t// slidesPerColumn: 1
\t\t\t\t\t// },
\t\t\t\t\t// 567: {
\t\t\t\t\t\t// slidesPerView: 4,
\t\t\t\t\t\t// slidesPerColumn: 1
\t\t\t\t\t// },
\t\t\t\t\t// 479: {
\t\t\t\t\t\t// slidesPerView: 4,
\t\t\t\t\t\t// slidesPerColumn: 1
\t\t\t\t\t// }
\t\t\t\t// },
\t\t\t\tautoplay: false,
\t\t\t\tloop: false
\t\t\t});

\t\t\tfunction changeImg(section_id, product_id, popup) {
\t\t\t\t\$('.other-style .img-mod-' + section_id + '-' + product_id).attr('src', popup);
\t\t\t}
\t\t</script>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "tt_safira_medical1/template/plaza/module/ptproducts/content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1521 => 464,  1515 => 463,  1502 => 455,  1495 => 450,  1485 => 448,  1482 => 447,  1474 => 442,  1468 => 439,  1462 => 436,  1456 => 433,  1446 => 430,  1442 => 429,  1436 => 426,  1429 => 424,  1423 => 423,  1420 => 422,  1418 => 421,  1415 => 420,  1409 => 418,  1406 => 417,  1402 => 415,  1396 => 413,  1393 => 412,  1387 => 410,  1385 => 409,  1382 => 408,  1379 => 407,  1375 => 405,  1367 => 403,  1364 => 402,  1356 => 400,  1350 => 398,  1348 => 397,  1345 => 396,  1343 => 395,  1335 => 393,  1331 => 391,  1325 => 390,  1321 => 388,  1317 => 386,  1314 => 385,  1310 => 384,  1307 => 383,  1305 => 382,  1302 => 381,  1294 => 378,  1291 => 377,  1289 => 376,  1283 => 372,  1278 => 369,  1268 => 367,  1265 => 366,  1255 => 364,  1252 => 363,  1242 => 361,  1240 => 360,  1235 => 357,  1232 => 356,  1228 => 354,  1221 => 352,  1206 => 349,  1202 => 348,  1198 => 347,  1192 => 346,  1188 => 345,  1184 => 344,  1181 => 343,  1177 => 342,  1174 => 341,  1170 => 340,  1167 => 339,  1164 => 338,  1160 => 336,  1158 => 335,  1155 => 334,  1152 => 333,  1137 => 331,  1133 => 330,  1124 => 329,  1122 => 328,  1093 => 327,  1067 => 325,  1065 => 324,  1061 => 323,  1053 => 321,  1043 => 316,  1037 => 315,  1032 => 312,  1020 => 308,  1010 => 307,  1007 => 306,  1003 => 305,  996 => 303,  992 => 301,  990 => 300,  986 => 298,  984 => 297,  982 => 296,  979 => 295,  970 => 288,  961 => 282,  955 => 279,  949 => 276,  943 => 273,  933 => 270,  929 => 269,  922 => 265,  915 => 263,  909 => 262,  906 => 261,  903 => 260,  897 => 258,  895 => 257,  892 => 256,  888 => 254,  882 => 252,  879 => 251,  873 => 249,  871 => 248,  868 => 247,  865 => 246,  861 => 244,  853 => 242,  850 => 241,  842 => 239,  836 => 237,  834 => 236,  831 => 235,  829 => 234,  826 => 233,  822 => 231,  816 => 230,  812 => 228,  808 => 226,  805 => 225,  801 => 224,  798 => 223,  796 => 222,  790 => 221,  786 => 219,  778 => 216,  775 => 215,  772 => 214,  768 => 212,  761 => 210,  746 => 207,  742 => 206,  738 => 205,  732 => 204,  728 => 203,  724 => 202,  721 => 201,  717 => 200,  714 => 199,  710 => 198,  707 => 197,  705 => 196,  700 => 193,  695 => 190,  686 => 188,  681 => 187,  671 => 185,  668 => 184,  658 => 182,  656 => 181,  653 => 180,  643 => 178,  641 => 177,  637 => 175,  635 => 174,  632 => 173,  628 => 171,  626 => 170,  623 => 169,  620 => 168,  605 => 166,  601 => 165,  592 => 164,  590 => 163,  561 => 162,  535 => 160,  533 => 159,  529 => 158,  522 => 156,  518 => 154,  516 => 153,  514 => 152,  511 => 151,  502 => 144,  493 => 138,  487 => 135,  481 => 132,  475 => 129,  465 => 126,  461 => 125,  454 => 121,  447 => 119,  441 => 118,  438 => 117,  435 => 116,  425 => 113,  422 => 112,  420 => 111,  417 => 110,  411 => 108,  409 => 107,  406 => 106,  402 => 104,  396 => 102,  393 => 101,  387 => 99,  385 => 98,  382 => 97,  379 => 96,  375 => 94,  367 => 92,  364 => 91,  356 => 89,  350 => 87,  348 => 86,  345 => 85,  343 => 84,  340 => 83,  336 => 81,  330 => 80,  326 => 78,  322 => 76,  319 => 75,  315 => 74,  312 => 73,  310 => 72,  304 => 71,  300 => 69,  292 => 66,  289 => 65,  287 => 64,  282 => 61,  277 => 58,  267 => 56,  265 => 55,  262 => 54,  252 => 52,  249 => 51,  239 => 49,  237 => 48,  232 => 45,  230 => 44,  227 => 43,  223 => 41,  216 => 39,  201 => 36,  197 => 35,  193 => 34,  187 => 33,  183 => 32,  179 => 31,  176 => 30,  172 => 29,  169 => 28,  165 => 27,  162 => 26,  160 => 25,  155 => 22,  151 => 20,  149 => 19,  146 => 18,  143 => 17,  128 => 15,  124 => 14,  115 => 13,  113 => 12,  84 => 11,  58 => 9,  56 => 8,  52 => 7,  45 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_medical1/template/plaza/module/ptproducts/content.twig", "");
    }
}
