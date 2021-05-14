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

/* tt_safira_autopart1/template/plaza/module/ptproducts/content.twig */
class __TwigTemplate_ee00375c2e3d1b1800b888cd73c33154a468ad9e87cd8dd2d028173e58317d69 extends \Twig\Template
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
\t\t<div class=\"product-item\">
\t\t\t<div class=\"image ";
            // line 5
            if (($context["rotate_image"] ?? null)) {
                echo "rotate-image-container";
            }
            echo "\">

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
                    echo " src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
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
                    echo " lazyload ";
                }
                echo "\" />
\t\t\t\t\t";
            }
            // line 11
            echo "\t\t\t\t\t<img ";
            if (($context["lazy_load"] ?? null)) {
                echo " src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
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
                echo " lazyload ";
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
            // line 20
            if (($context["options"] ?? null)) {
                // line 21
                echo "\t\t\t\t\t<div class=\"category-options product-options\">
\t\t\t\t\t";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 23
                    echo "\t\t\t\t\t\t<ul class=\"ul-swatches-colors\">
\t\t\t\t\t\t\t";
                    // line 24
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 24));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 25
                        echo "\t\t\t\t\t\t\t\t<li class=\"swatches-options\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"swatches.changeModuleSwatches(\$(this));\" title=\"";
                        // line 26
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 26);
                        echo "\"
\t\t\t\t\t\t\t\t\t   style=\"";
                        // line 27
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 27)) {
                            echo " width: 10px; height: 10px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                            // line 28
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 28);
                            echo "') ";
                        }
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-module-id=\"";
                        // line 29
                        echo ($context["section_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-product-id=\"";
                        // line 30
                        echo ($context["product_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-product-option-value-id=\"";
                        // line 31
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 31);
                        echo "\">";
                        if ( !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 31)) {
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 31);
                            echo " ";
                        }
                        echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 34
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 38
            echo "
\t\t\t\t";
            // line 39
            if (((($context["show_compare"] ?? null) || ($context["show_wishlist"] ?? null)) || ($context["show_quickview"] ?? null))) {
                // line 40
                echo "\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t";
                // line 43
                if (($context["show_wishlist"] ?? null)) {
                    // line 44
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" class=\"button-wishlist\" onclick=\"wishlist.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_wishlist"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 46
                echo "\t\t\t\t\t\t\t";
                if (($context["show_compare"] ?? null)) {
                    // line 47
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_compare"] ?? null);
                    echo "\" class=\"button-compare\" onclick=\"compare.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_compare"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 49
                echo "
\t\t\t\t\t\t\t";
                // line 50
                if (($context["show_quickview"] ?? null)) {
                    // line 51
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                    echo ($context["button_quickview"] ?? null);
                    echo "\" class=\"button-quickview\" onclick=\"ptquickview.ajaxView('";
                    echo ($context["href"] ?? null);
                    echo "')\"><span>";
                    echo ($context["button_quickview"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 53
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 56
            echo "\t\t\t</div>
\t\t\t<div class=\"caption\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t";
            // line 59
            if (($context["manufacturer"] ?? null)) {
                // line 60
                echo "\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t<a href=\"";
                // line 61
                echo ($context["manufacturer_href"] ?? null);
                echo "\">";
                echo ($context["manufacturer"] ?? null);
                echo "</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t";
            }
            // line 64
            echo "

\t\t\t\t\t<h4><a href=\"";
            // line 66
            echo ($context["href"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h4>
\t\t\t\t\t";
            // line 67
            if (($context["rating"] ?? null)) {
                // line 68
                echo "\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t";
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 70
                    echo "\t\t\t\t\t\t\t\t";
                    if ((($context["rating"] ?? null) < $context["i"])) {
                        // line 71
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-o\"></i></span>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 73
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-x\"></i></span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 75
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 78
            echo "\t\t\t\t\t<div>
\t\t\t\t\t";
            // line 79
            if ((($context["show_price"] ?? null) && ($context["price"] ?? null))) {
                // line 80
                echo "\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t";
                // line 81
                if ( !($context["special"] ?? null)) {
                    // line 82
                    echo "\t\t\t\t\t\t\t\t";
                    echo ($context["price"] ?? null);
                    echo "
\t\t\t\t\t\t\t";
                } else {
                    // line 84
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                    echo ($context["special"] ?? null);
                    echo "</span> <span class=\"price-old\">";
                    echo ($context["price"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 86
                echo "\t\t\t\t\t\t\t";
                if (($context["tax"] ?? null)) {
                    // line 87
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo ($context["tax"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 89
                echo "\t\t\t\t\t\t</p>
\t\t\t\t\t";
            }
            // line 91
            echo "\t\t\t\t\t";
            if ((($context["show_label"] ?? null) && (($context["special"] ?? null) || ($context["is_new"] ?? null)))) {
                // line 92
                echo "\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t";
                // line 93
                if (($context["special"] ?? null)) {
                    // line 94
                    echo "\t\t\t\t\t\t\t\t<div><span class=\"pro-label sale\">";
                    echo (("-" . ($context["rate_special"] ?? null)) . "%");
                    echo "</span></div>
\t\t\t\t\t\t\t";
                }
                // line 96
                echo "\t\t\t\t\t\t\t";
                if (($context["is_new"] ?? null)) {
                    // line 97
                    echo "\t\t\t\t\t\t\t\t<div><span class=\"pro-label new\">";
                    echo ($context["text_new"] ?? null);
                    echo "</span></div>
\t\t\t\t\t\t\t";
                }
                // line 99
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 101
            echo "\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 102
            if ((($context["show_description"] ?? null) && ($context["description"] ?? null))) {
                // line 103
                echo "\t\t\t\t\t\t<p class=\"product-description\">";
                echo ($context["description"] ?? null);
                echo "</p>
\t\t\t\t\t";
            }
            // line 105
            echo "

\t\t\t\t\t";
            // line 107
            if ((($context["show_countdown"] ?? null) && ($context["date_end"] ?? null))) {
                // line 108
                echo "\t\t\t\t\t\t<div class=\"quantity-progress\" >
\t\t\t\t\t\t\t<p class=\"product-available\">";
                // line 109
                echo ($context["text_availabe"] ?? null);
                echo "<span>";
                echo ($context["quantity"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t\t<p class=\"product-sold\">";
                // line 110
                echo ($context["text_sold"] ?? null);
                echo "<span>";
                echo ($context["sold_number"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t\t<div class=\"bar-percent\" >
\t\t\t\t\t\t\t\t<div class=\"available-percent\" style=\"width: ";
                // line 112
                echo ((($context["quantity"] ?? null) / ($context["total_qty"] ?? null)) * 100);
                echo "%;\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"countdown-box-flex\">
\t\t\t\t\t\t\t<p class=\"text-countdown\">";
                // line 116
                echo ($context["text_countdown"] ?? null);
                echo "</p>
\t\t\t\t\t\t\t<div class=\"countdown-box countdown-product-";
                // line 117
                echo ($context["product_id"] ?? null);
                echo "\" data-id=\"";
                echo ($context["product_id"] ?? null);
                echo "\" data-date=\"";
                echo ($context["date_end"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"day\"></b><span>";
                // line 120
                echo ($context["text_days"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"hour\"></b><span>";
                // line 123
                echo ($context["text_hours"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"min\"></b><span>";
                // line 126
                echo ($context["text_mins"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"sec\"></b><span>";
                // line 129
                echo ($context["text_secs"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 135
            echo "\t\t\t\t\t";
            if (($context["show_cart"] ?? null)) {
                // line 136
                echo "\t\t\t\t\t\t<div>
\t\t\t\t\t\t<button type=\"button\" class=\"button-cart\" onclick=\"cart.add('";
                // line 137
                echo ($context["product_id"] ?? null);
                echo "');\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\"><span>";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 140
            echo "\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 146
        echo "
";
        // line 147
        if ((($context["layout_type"] ?? null) == "list")) {
            // line 148
            echo "    ";
            // line 149
            echo "\t<div class=\"list-style\">
\t\t<div class=\"product-item\">
\t\t\t<div class=\"image ";
            // line 151
            if (($context["rotate_image"] ?? null)) {
                echo "rotate-image-container";
            }
            echo "\">

\t\t\t\t<a href=\"";
            // line 153
            echo ($context["href"] ?? null);
            echo "\">
\t\t\t\t\t";
            // line 154
            if (($context["rotate_image"] ?? null)) {
                // line 155
                echo "\t\t\t\t\t\t<img ";
                if (($context["lazy_load"] ?? null)) {
                    echo " src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
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
                    echo " lazyload ";
                }
                echo "\" />
\t\t\t\t\t";
            }
            // line 157
            echo "\t\t\t\t\t<img ";
            if (($context["lazy_load"] ?? null)) {
                echo " src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
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
                echo " lazyload ";
            }
            echo " img-responsive img-mod-";
            echo ($context["section_id"] ?? null);
            echo "-";
            echo ($context["product_id"] ?? null);
            echo "\" />
\t\t\t\t\t";
            // line 158
            if (($context["swatches_images"] ?? null)) {
                // line 159
                echo "\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                echo ($context["thumb"] ?? null);
                echo "\" class=\"img-default-";
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "\" />
\t\t\t\t\t\t";
                // line 160
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["swatches_images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["s_image"]) {
                    // line 161
                    echo "\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "image", [], "any", false, false, false, 161);
                    echo "\" class=\"img-swatch-";
                    echo ($context["section_id"] ?? null);
                    echo "-";
                    echo ($context["product_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "product_option_value_id", [], "any", false, false, false, 161);
                    echo "\" />
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 163
                echo "\t\t\t\t\t";
            }
            // line 164
            echo "\t\t\t\t</a>

\t\t\t\t";
            // line 166
            if (((($context["show_wishlist"] ?? null) || ($context["show_compare"] ?? null)) || ($context["show_quickview"] ?? null))) {
                // line 167
                echo "\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t<div class=\"inner\">


\t\t\t\t\t\t\t";
                // line 171
                if (($context["show_wishlist"] ?? null)) {
                    // line 172
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" class=\"button-wishlist\" onclick=\"wishlist.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_wishlist"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 174
                echo "\t\t\t\t\t\t\t";
                if (($context["show_compare"] ?? null)) {
                    // line 175
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_compare"] ?? null);
                    echo "\" class=\"button-compare\" onclick=\"compare.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_compare"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 177
                echo "\t\t\t\t\t\t\t";
                if (($context["show_quickview"] ?? null)) {
                    // line 178
                    echo "\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                    echo ($context["button_quickview"] ?? null);
                    echo "\" class=\"button-quickview\" onclick=\"ptquickview.ajaxView('";
                    echo ($context["href"] ?? null);
                    echo "')\"><span>";
                    echo ($context["button_quickview"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t";
                }
                // line 180
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 183
            echo "\t\t\t</div>
\t\t\t<div class=\"caption\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t";
            // line 186
            if (($context["options"] ?? null)) {
                // line 187
                echo "\t\t\t\t\t\t<div class=\"category-options product-options\">
\t\t\t\t\t\t";
                // line 188
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 189
                    echo "\t\t\t\t\t\t\t<ul class=\"ul-swatches-colors\">
\t\t\t\t\t\t\t\t";
                    // line 190
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 190));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 191
                        echo "\t\t\t\t\t\t\t\t\t<li class=\"swatches-options\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"swatches.changeModuleSwatches(\$(this));\" title=\"";
                        // line 192
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 192);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   style=\"";
                        // line 193
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 193)) {
                            echo " width: 10px; height: 10px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                            // line 194
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 194);
                            echo "') ";
                        }
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   data-module-id=\"";
                        // line 195
                        echo ($context["section_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   data-product-id=\"";
                        // line 196
                        echo ($context["product_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   data-product-option-value-id=\"";
                        // line 197
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 197);
                        echo "\">";
                        if ( !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 197)) {
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 197);
                            echo " ";
                        }
                        echo "</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 200
                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 202
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 204
            echo "\t\t\t\t\t";
            if (($context["manufacturer"] ?? null)) {
                // line 205
                echo "\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t<a href=\"";
                // line 206
                echo ($context["manufacturer_href"] ?? null);
                echo "\">";
                echo ($context["manufacturer"] ?? null);
                echo "</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t";
            }
            // line 209
            echo "

\t\t\t\t\t<h4><a href=\"";
            // line 211
            echo ($context["href"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h4>
\t\t\t\t\t";
            // line 212
            if (($context["rating"] ?? null)) {
                // line 213
                echo "\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t";
                // line 214
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 215
                    echo "\t\t\t\t\t\t\t\t";
                    if ((($context["rating"] ?? null) < $context["i"])) {
                        // line 216
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-o\"></i></span>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 218
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-x\"></i></span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 220
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 221
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 223
            echo "\t\t\t\t\t<div>
\t\t\t\t\t";
            // line 224
            if ((($context["show_price"] ?? null) && ($context["price"] ?? null))) {
                // line 225
                echo "\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t";
                // line 226
                if ( !($context["special"] ?? null)) {
                    // line 227
                    echo "\t\t\t\t\t\t\t\t";
                    echo ($context["price"] ?? null);
                    echo "
\t\t\t\t\t\t\t";
                } else {
                    // line 229
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                    echo ($context["special"] ?? null);
                    echo "</span> <span class=\"price-old\">";
                    echo ($context["price"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 231
                echo "\t\t\t\t\t\t\t";
                if (($context["tax"] ?? null)) {
                    // line 232
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo ($context["tax"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 234
                echo "\t\t\t\t\t\t</p>
\t\t\t\t\t";
            }
            // line 236
            echo "\t\t\t\t\t";
            if ((($context["show_label"] ?? null) && (($context["special"] ?? null) || ($context["is_new"] ?? null)))) {
                // line 237
                echo "\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t";
                // line 238
                if (($context["special"] ?? null)) {
                    // line 239
                    echo "\t\t\t\t\t\t\t\t<div><span class=\"pro-label sale\">";
                    echo (("-" . ($context["rate_special"] ?? null)) . "%");
                    echo "</span></div>
\t\t\t\t\t\t\t";
                }
                // line 241
                echo "\t\t\t\t\t\t\t";
                if (($context["is_new"] ?? null)) {
                    // line 242
                    echo "\t\t\t\t\t\t\t\t<div><span class=\"pro-label new\">";
                    echo ($context["text_new"] ?? null);
                    echo "</span></div>
\t\t\t\t\t\t\t";
                }
                // line 244
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 246
            echo "\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 247
            if ((($context["show_description"] ?? null) && ($context["description"] ?? null))) {
                // line 248
                echo "\t\t\t\t\t\t<p class=\"product-description\">";
                echo ($context["description"] ?? null);
                echo "</p>
\t\t\t\t\t";
            }
            // line 250
            echo "\t\t\t\t\t";
            if ((($context["show_countdown"] ?? null) && ($context["date_end"] ?? null))) {
                // line 251
                echo "\t\t\t\t\t\t<div class=\"quantity-progress\" >
\t\t\t\t\t\t\t<p class=\"product-available\">";
                // line 252
                echo ($context["text_availabe"] ?? null);
                echo "<span>";
                echo ($context["quantity"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t\t<p class=\"product-sold\">";
                // line 253
                echo ($context["text_sold"] ?? null);
                echo "<span>";
                echo ($context["sold_number"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t\t<div class=\"bar-percent\" >
\t\t\t\t\t\t\t\t<div class=\"available-percent\" style=\"width: ";
                // line 255
                echo ((($context["quantity"] ?? null) / ($context["total_qty"] ?? null)) * 100);
                echo "%;\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"countdown-box-flex\">
\t\t\t\t\t\t\t<p class=\"text-countdown\">";
                // line 259
                echo ($context["text_countdown"] ?? null);
                echo "</p>
\t\t\t\t\t\t\t<div class=\"countdown-box countdown-product-";
                // line 260
                echo ($context["product_id"] ?? null);
                echo "\" data-id=\"";
                echo ($context["product_id"] ?? null);
                echo "\" data-date=\"";
                echo ($context["date_end"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"day\"></b><span>";
                // line 263
                echo ($context["text_days"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"hour\"></b><span>";
                // line 266
                echo ($context["text_hours"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"min\"></b><span>";
                // line 269
                echo ($context["text_mins"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"sec\"></b><span>";
                // line 272
                echo ($context["text_secs"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 278
            echo "\t\t\t\t\t";
            if (($context["show_cart"] ?? null)) {
                // line 279
                echo "\t\t\t\t\t\t<div>
\t\t\t\t\t\t<button type=\"button\" class=\"button-cart\" onclick=\"cart.add('";
                // line 280
                echo ($context["product_id"] ?? null);
                echo "');\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\"><span>";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 283
            echo "\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 289
        echo "
";
        // line 290
        if ((($context["layout_type"] ?? null) == "other")) {
            // line 291
            echo "    ";
            // line 292
            echo "\t<div class=\"other-style\">
\t\t<div class=\"product-item\">
\t\t\t";
            // line 294
            if (($context["gallery_images"] ?? null)) {
                // line 295
                echo "\t\t\t\t<div class=\"gallery-thumbs\">
\t\t\t\t\t<div class=\"swiper-viewport\">
\t\t\t\t\t\t<div class=\"swiper-container gallery-images-";
                // line 297
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "\">
\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t";
                // line 299
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["gallery_images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 300
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:changeImg('";
                    // line 301
                    echo ($context["section_id"] ?? null);
                    echo "', '";
                    echo ($context["product_id"] ?? null);
                    echo "', '";
                    echo twig_get_attribute($this->env, $this->source, $context["img"], "popup", [], "any", false, false, false, 301);
                    echo "');\" class=\"child-thumb\" data-img=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["img"], "popup", [], "any", false, false, false, 301);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 302
                    if (($context["lazy_load"] ?? null)) {
                        // line 303
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"lazyload\" src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["img"], "thumb", [], "any", false, false, false, 303);
                        echo "\" alt=\"";
                        echo (twig_slice($this->env, ($context["name"] ?? null), 0, 20) . "...");
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 305
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["img"], "thumb", [], "any", false, false, false, 305);
                        echo "\" alt=\"";
                        echo (twig_slice($this->env, ($context["name"] ?? null), 0, 20) . "...");
                        echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 307
                    echo "\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 310
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!--div class=\"swiper-pager\">
\t\t\t\t\t\t\t<div class=\"swiper-button-next swiper-button-next-";
                // line 313
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "\"></div>
\t\t\t\t\t\t\t<div class=\"swiper-button-prev swiper-button-prev-";
                // line 314
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "\"></div>
\t\t\t\t\t\t</div-->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 319
            echo "\t\t\t<div class=\"image ";
            if (($context["rotate_image"] ?? null)) {
                echo "rotate-image-container";
            }
            echo "\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t<a href=\"";
            // line 321
            echo ($context["href"] ?? null);
            echo "\">
\t\t\t\t\t\t";
            // line 322
            if (($context["rotate_image"] ?? null)) {
                // line 323
                echo "\t\t\t\t\t\t\t<img ";
                if (($context["lazy_load"] ?? null)) {
                    echo " src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
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
                    echo " lazyload ";
                }
                echo "\" />
\t\t\t\t\t\t";
            }
            // line 325
            echo "\t\t\t\t\t\t<img ";
            if (($context["lazy_load"] ?? null)) {
                echo " src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
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
                echo " lazyload ";
            }
            echo " img-responsive img-mod-";
            echo ($context["section_id"] ?? null);
            echo "-";
            echo ($context["product_id"] ?? null);
            echo "\" />
\t\t\t\t\t\t";
            // line 326
            if (($context["swatches_images"] ?? null)) {
                // line 327
                echo "\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                echo ($context["thumb"] ?? null);
                echo "\" class=\"img-default-";
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "\" />
\t\t\t\t\t\t\t";
                // line 328
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["swatches_images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["s_image"]) {
                    // line 329
                    echo "\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "image", [], "any", false, false, false, 329);
                    echo "\" class=\"img-swatch-";
                    echo ($context["section_id"] ?? null);
                    echo "-";
                    echo ($context["product_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "product_option_value_id", [], "any", false, false, false, 329);
                    echo "\" />
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 331
                echo "\t\t\t\t\t\t";
            }
            // line 332
            echo "\t\t\t\t\t</a>
\t\t\t\t\t";
            // line 333
            if (($context["options"] ?? null)) {
                // line 334
                echo "\t\t\t\t\t\t<div class=\"category-options product-options\">
\t\t\t\t\t\t";
                // line 335
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 336
                    echo "\t\t\t\t\t\t\t<ul class=\"ul-swatches-colors\">
\t\t\t\t\t\t\t\t";
                    // line 337
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 337));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 338
                        echo "\t\t\t\t\t\t\t\t\t<li class=\"swatches-options\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"swatches.changeModuleSwatches(\$(this));\" title=\"";
                        // line 339
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 339);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   style=\"";
                        // line 340
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 340)) {
                            echo " width: 10px; height: 10px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                            // line 341
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 341);
                            echo "') ";
                        }
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   data-module-id=\"";
                        // line 342
                        echo ($context["section_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   data-product-id=\"";
                        // line 343
                        echo ($context["product_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   data-product-option-value-id=\"";
                        // line 344
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 344);
                        echo "\">";
                        if ( !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 344)) {
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 344);
                            echo " ";
                        }
                        echo "</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 347
                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 349
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 351
            echo "\t\t\t\t\t";
            if ((((($context["show_cart"] ?? null) || ($context["show_compare"] ?? null)) || ($context["show_wishlist"] ?? null)) || ($context["show_quickview"] ?? null))) {
                // line 352
                echo "\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t";
                // line 355
                if (($context["show_wishlist"] ?? null)) {
                    // line 356
                    echo "\t\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" class=\"button-wishlist\" onclick=\"wishlist.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_wishlist"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t";
                }
                // line 358
                echo "\t\t\t\t\t\t\t\t";
                if (($context["show_compare"] ?? null)) {
                    // line 359
                    echo "\t\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_compare"] ?? null);
                    echo "\" class=\"button-compare\" onclick=\"compare.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_compare"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t";
                }
                // line 361
                echo "\t\t\t\t\t\t\t\t";
                if (($context["show_quickview"] ?? null)) {
                    // line 362
                    echo "\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                    echo ($context["button_quickview"] ?? null);
                    echo "\" class=\"button-quickview\" onclick=\"ptquickview.ajaxView('";
                    echo ($context["href"] ?? null);
                    echo "')\"><span>";
                    echo ($context["button_quickview"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t";
                }
                // line 364
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 367
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"caption\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t";
            // line 371
            if (($context["manufacturer"] ?? null)) {
                // line 372
                echo "\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t<a href=\"";
                // line 373
                echo ($context["manufacturer_href"] ?? null);
                echo "\">";
                echo ($context["manufacturer"] ?? null);
                echo "</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t";
            }
            // line 376
            echo "
\t\t\t\t\t";
            // line 377
            if (($context["rating"] ?? null)) {
                // line 378
                echo "\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t";
                // line 379
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 380
                    echo "\t\t\t\t\t\t\t\t";
                    if ((($context["rating"] ?? null) < $context["i"])) {
                        // line 381
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-o\"></i></span>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 383
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-x\"></i></span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 385
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 386
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 388
            echo "\t\t\t\t\t<h4><a href=\"";
            echo ($context["href"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h4>

\t\t\t\t\t";
            // line 390
            if ((($context["show_price"] ?? null) && ($context["price"] ?? null))) {
                // line 391
                echo "\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t";
                // line 392
                if ( !($context["special"] ?? null)) {
                    // line 393
                    echo "\t\t\t\t\t\t\t\t";
                    echo ($context["price"] ?? null);
                    echo "
\t\t\t\t\t\t\t";
                } else {
                    // line 395
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                    echo ($context["special"] ?? null);
                    echo "</span> <span class=\"price-old\">";
                    echo ($context["price"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 397
                echo "\t\t\t\t\t\t\t";
                if (($context["tax"] ?? null)) {
                    // line 398
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo ($context["tax"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 400
                echo "\t\t\t\t\t\t</p>
\t\t\t\t\t";
            }
            // line 402
            echo "\t\t\t\t\t";
            if ((($context["show_label"] ?? null) && (($context["special"] ?? null) || ($context["is_new"] ?? null)))) {
                // line 403
                echo "\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t";
                // line 404
                if (($context["special"] ?? null)) {
                    // line 405
                    echo "\t\t\t\t\t\t\t\t<div><span class=\"pro-label sale\">";
                    echo (("-" . ($context["rate_special"] ?? null)) . "%");
                    echo "</span></div>
\t\t\t\t\t\t\t";
                }
                // line 407
                echo "\t\t\t\t\t\t\t";
                if (($context["is_new"] ?? null)) {
                    // line 408
                    echo "\t\t\t\t\t\t\t\t<div><span class=\"pro-label new\">";
                    echo ($context["text_new"] ?? null);
                    echo "</span></div>
\t\t\t\t\t\t\t";
                }
                // line 410
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 412
            echo "\t\t\t\t\t";
            if ((($context["show_description"] ?? null) && ($context["description"] ?? null))) {
                // line 413
                echo "\t\t\t\t\t\t<p>";
                echo ($context["description"] ?? null);
                echo "</p>
\t\t\t\t\t";
            }
            // line 415
            echo "
\t\t\t\t\t";
            // line 416
            if ((($context["show_countdown"] ?? null) && ($context["date_end"] ?? null))) {
                // line 417
                echo "\t\t\t\t\t\t<div class=\"quantity-progress\" >
\t\t\t\t\t\t\t<p class=\"product-available\">";
                // line 418
                echo ($context["text_availabe"] ?? null);
                echo "<span>";
                echo ($context["quantity"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t\t<p class=\"product-sold\">";
                // line 419
                echo ($context["text_sold"] ?? null);
                echo "<span>";
                echo ($context["sold_number"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t\t<div class=\"bar-percent\" >
\t\t\t\t\t\t\t\t<div class=\"available-percent\" style=\"width: ";
                // line 421
                echo ((($context["quantity"] ?? null) / ($context["total_qty"] ?? null)) * 100);
                echo "%;\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"text-countdown\">";
                // line 424
                echo ($context["text_countdown"] ?? null);
                echo "</p>
\t\t\t\t\t\t<div class=\"countdown-box countdown-product-";
                // line 425
                echo ($context["product_id"] ?? null);
                echo "\" data-id=\"";
                echo ($context["product_id"] ?? null);
                echo "\" data-date=\"";
                echo ($context["date_end"] ?? null);
                echo "\">
\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t<b class=\"day\"></b><span>";
                // line 428
                echo ($context["text_days"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t<b class=\"hour\"></b><span>";
                // line 431
                echo ($context["text_hours"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t<b class=\"min\"></b><span>";
                // line 434
                echo ($context["text_mins"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t<b class=\"sec\"></b><span>";
                // line 437
                echo ($context["text_secs"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 442
            echo "\t\t\t\t\t";
            if (($context["show_cart"] ?? null)) {
                // line 443
                echo "\t\t\t\t\t\t<div>
\t\t\t\t\t\t<button type=\"button\" class=\"button-cart\" onclick=\"cart.add('";
                // line 444
                echo ($context["product_id"] ?? null);
                echo "');\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\"><span>";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 447
            echo "\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
\t<script type=\"text/javascript\"><!--
\t\tvar gallery_images = \$(\".gallery-images-";
            // line 453
            echo ($context["section_id"] ?? null);
            echo "-";
            echo ($context["product_id"] ?? null);
            echo "\");

\t\t\$('.child-thumb').click(function(){
\t\t\t\$('.child-thumb').removeClass('active');
\t\t\t\$(this).addClass('active');
\t\t});
\t\tgallery_images.swiper({
\t\t\tspaceBetween: 0,
\t\t\tspeed: 500,
\t\t\tpreloadImages: false,
\t\t\twatchSlidesVisibility: true,
\t\t\tslidesPerView: 3,
\t\t\tslidesPerColumn: 1,
\t\t\tdirection: 'vertical',
\t\t\tbreakpoints: {
\t\t\t\t414: {
\t\t\t\t\tslidesPerView: 4,
\t\t\t\t\tslidesPerColumn: 1
\t\t\t\t}
\t\t\t},
\t\t\tautoplay: false,
\t\t\tloop: false
\t\t});

\t\tfunction changeImg(section_id, product_id, popup) {
\t\t\t\$('.other-style .img-mod-' + section_id + '-' + product_id).attr('src', popup);
\t\t}
\t//--></script>
";
        }
    }

    public function getTemplateName()
    {
        return "tt_safira_autopart1/template/plaza/module/ptproducts/content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1496 => 453,  1488 => 447,  1478 => 444,  1475 => 443,  1472 => 442,  1464 => 437,  1458 => 434,  1452 => 431,  1446 => 428,  1436 => 425,  1432 => 424,  1426 => 421,  1419 => 419,  1413 => 418,  1410 => 417,  1408 => 416,  1405 => 415,  1399 => 413,  1396 => 412,  1392 => 410,  1386 => 408,  1383 => 407,  1377 => 405,  1375 => 404,  1372 => 403,  1369 => 402,  1365 => 400,  1357 => 398,  1354 => 397,  1346 => 395,  1340 => 393,  1338 => 392,  1335 => 391,  1333 => 390,  1325 => 388,  1321 => 386,  1315 => 385,  1311 => 383,  1307 => 381,  1304 => 380,  1300 => 379,  1297 => 378,  1295 => 377,  1292 => 376,  1284 => 373,  1281 => 372,  1279 => 371,  1273 => 367,  1268 => 364,  1258 => 362,  1255 => 361,  1245 => 359,  1242 => 358,  1232 => 356,  1230 => 355,  1225 => 352,  1222 => 351,  1218 => 349,  1211 => 347,  1196 => 344,  1192 => 343,  1188 => 342,  1182 => 341,  1178 => 340,  1174 => 339,  1171 => 338,  1167 => 337,  1164 => 336,  1160 => 335,  1157 => 334,  1155 => 333,  1152 => 332,  1149 => 331,  1134 => 329,  1130 => 328,  1121 => 327,  1119 => 326,  1090 => 325,  1064 => 323,  1062 => 322,  1058 => 321,  1050 => 319,  1040 => 314,  1034 => 313,  1029 => 310,  1021 => 307,  1013 => 305,  1005 => 303,  1003 => 302,  993 => 301,  990 => 300,  986 => 299,  979 => 297,  975 => 295,  973 => 294,  969 => 292,  967 => 291,  965 => 290,  962 => 289,  954 => 283,  944 => 280,  941 => 279,  938 => 278,  929 => 272,  923 => 269,  917 => 266,  911 => 263,  901 => 260,  897 => 259,  890 => 255,  883 => 253,  877 => 252,  874 => 251,  871 => 250,  865 => 248,  863 => 247,  860 => 246,  856 => 244,  850 => 242,  847 => 241,  841 => 239,  839 => 238,  836 => 237,  833 => 236,  829 => 234,  821 => 232,  818 => 231,  810 => 229,  804 => 227,  802 => 226,  799 => 225,  797 => 224,  794 => 223,  790 => 221,  784 => 220,  780 => 218,  776 => 216,  773 => 215,  769 => 214,  766 => 213,  764 => 212,  758 => 211,  754 => 209,  746 => 206,  743 => 205,  740 => 204,  736 => 202,  729 => 200,  714 => 197,  710 => 196,  706 => 195,  700 => 194,  696 => 193,  692 => 192,  689 => 191,  685 => 190,  682 => 189,  678 => 188,  675 => 187,  673 => 186,  668 => 183,  663 => 180,  653 => 178,  650 => 177,  640 => 175,  637 => 174,  627 => 172,  625 => 171,  619 => 167,  617 => 166,  613 => 164,  610 => 163,  595 => 161,  591 => 160,  582 => 159,  580 => 158,  551 => 157,  525 => 155,  523 => 154,  519 => 153,  512 => 151,  508 => 149,  506 => 148,  504 => 147,  501 => 146,  493 => 140,  483 => 137,  480 => 136,  477 => 135,  468 => 129,  462 => 126,  456 => 123,  450 => 120,  440 => 117,  436 => 116,  429 => 112,  422 => 110,  416 => 109,  413 => 108,  411 => 107,  407 => 105,  401 => 103,  399 => 102,  396 => 101,  392 => 99,  386 => 97,  383 => 96,  377 => 94,  375 => 93,  372 => 92,  369 => 91,  365 => 89,  357 => 87,  354 => 86,  346 => 84,  340 => 82,  338 => 81,  335 => 80,  333 => 79,  330 => 78,  326 => 76,  320 => 75,  316 => 73,  312 => 71,  309 => 70,  305 => 69,  302 => 68,  300 => 67,  294 => 66,  290 => 64,  282 => 61,  279 => 60,  277 => 59,  272 => 56,  267 => 53,  257 => 51,  255 => 50,  252 => 49,  242 => 47,  239 => 46,  229 => 44,  227 => 43,  222 => 40,  220 => 39,  217 => 38,  213 => 36,  206 => 34,  191 => 31,  187 => 30,  183 => 29,  177 => 28,  173 => 27,  169 => 26,  166 => 25,  162 => 24,  159 => 23,  155 => 22,  152 => 21,  150 => 20,  146 => 18,  143 => 17,  128 => 15,  124 => 14,  115 => 13,  113 => 12,  84 => 11,  58 => 9,  56 => 8,  52 => 7,  45 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_autopart1/template/plaza/module/ptproducts/content.twig", "");
    }
}
