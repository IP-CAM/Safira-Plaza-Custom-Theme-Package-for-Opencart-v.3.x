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

/* tt_safira_houseware1/template/plaza/module/ptproducts/content.twig */
class __TwigTemplate_5f33e91f136921fe0f0844b476f9fb33eb8eb372dc065a02a6ba1e83e7fe014f extends \Twig\Template
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
\t\t<div class=\"product-item\" data-countdown=\"countdown-title-box-";
            // line 4
            echo ($context["section_id"] ?? null);
            echo "-";
            echo ($context["product_id"] ?? null);
            echo "\">\t
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
                    echo " src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
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
            // line 11
            echo "\t\t\t\t\t<img ";
            if (($context["lazy_load"] ?? null)) {
                echo " src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
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
            echo "\t\t\t\t";
            if (($context["show_quickview"] ?? null)) {
                // line 23
                echo "\t\t\t\t\t<div class=\"quickview\">
\t\t\t\t\t\t<button type=\"button\" title=\"";
                // line 24
                echo ($context["button_quickview"] ?? null);
                echo "\" class=\"button-quickview\" onclick=\"ptquickview.ajaxView('";
                echo ($context["href"] ?? null);
                echo "')\"><span>";
                echo ($context["button_quickview"] ?? null);
                echo "</span></button>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 27
            echo "\t\t\t\t
\t\t\t\t
\t\t\t\t";
            // line 29
            if (($context["options"] ?? null)) {
                // line 30
                echo "\t\t\t\t\t<div class=\"category-options product-options\">
\t\t\t\t\t";
                // line 31
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 32
                    echo "\t\t\t\t\t\t<ul class=\"ul-swatches-colors\">
\t\t\t\t\t\t\t";
                    // line 33
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 33));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 34
                        echo "\t\t\t\t\t\t\t\t<li class=\"swatches-options\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"swatches.changeModuleSwatches(\$(this));\" title=\"";
                        // line 35
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 35);
                        echo "\"
\t\t\t\t\t\t\t\t\t   style=\"";
                        // line 36
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 36)) {
                            echo " width: 10px; height: 10px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                            // line 37
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 37);
                            echo "') ";
                        }
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-module-id=\"";
                        // line 38
                        echo ($context["section_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-product-id=\"";
                        // line 39
                        echo ($context["product_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-product-option-value-id=\"";
                        // line 40
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 40);
                        echo "\">";
                        if ( !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 40)) {
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 40);
                            echo " ";
                        }
                        echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 47
            echo "\t\t\t</div>
\t\t\t<div class=\"caption\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t";
            // line 50
            if (($context["manufacturer"] ?? null)) {
                // line 51
                echo "\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t<a href=\"";
                // line 52
                echo ($context["manufacturer_href"] ?? null);
                echo "\">";
                echo ($context["manufacturer"] ?? null);
                echo "</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t";
            }
            // line 55
            echo "
\t\t\t\t\t
\t\t\t\t\t<h4><a href=\"";
            // line 57
            echo ($context["href"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h4>
\t\t\t\t\t";
            // line 58
            if (($context["rating"] ?? null)) {
                // line 59
                echo "\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 61
                    echo "\t\t\t\t\t\t\t\t";
                    if ((($context["rating"] ?? null) < $context["i"])) {
                        // line 62
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-o\"></i></span>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 64
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-x\"></i></span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 66
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 69
            echo "\t\t\t\t\t<div class=\"box-price\">
\t\t\t\t\t\t";
            // line 70
            if ((($context["show_price"] ?? null) && ($context["price"] ?? null))) {
                // line 71
                echo "\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t";
                // line 72
                if ( !($context["special"] ?? null)) {
                    // line 73
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo ($context["price"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t";
                } else {
                    // line 75
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                    echo ($context["special"] ?? null);
                    echo "</span> <span class=\"price-old\">";
                    echo ($context["price"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 77
                echo "\t\t\t\t\t\t\t\t";
                if (($context["tax"] ?? null)) {
                    // line 78
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo ($context["tax"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 80
                echo "\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
            }
            // line 82
            echo "\t\t\t\t\t\t";
            if ((($context["show_label"] ?? null) && (($context["special"] ?? null) || ($context["is_new"] ?? null)))) {
                // line 83
                echo "\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t";
                // line 84
                if (($context["special"] ?? null)) {
                    // line 85
                    echo "\t\t\t\t\t\t\t\t\t<div><span class=\"pro-label sale\">";
                    echo (("-" . ($context["rate_special"] ?? null)) . "%");
                    echo "</span></div>
\t\t\t\t\t\t\t\t";
                }
                // line 87
                echo "\t\t\t\t\t\t\t\t";
                if (($context["is_new"] ?? null)) {
                    // line 88
                    echo "\t\t\t\t\t\t\t\t\t<div><span class=\"pro-label new\">";
                    echo ($context["text_new"] ?? null);
                    echo "</span></div>
\t\t\t\t\t\t\t\t";
                }
                // line 90
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 92
            echo "\t\t\t\t\t\t";
            if (((($context["show_cart"] ?? null) || ($context["show_compare"] ?? null)) || ($context["show_wishlist"] ?? null))) {
                // line 93
                echo "\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t";
                // line 95
                if (($context["show_cart"] ?? null)) {
                    // line 96
                    echo "\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-cart\" onclick=\"cart.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\"><span>";
                    echo ($context["button_cart"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t\t";
                }
                // line 98
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                // line 100
                if (($context["show_compare"] ?? null)) {
                    // line 101
                    echo "\t\t\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_compare"] ?? null);
                    echo "\" class=\"button-compare\" onclick=\"compare.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_compare"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t\t";
                }
                // line 103
                echo "\t\t\t\t\t\t\t\t\t";
                if (($context["show_wishlist"] ?? null)) {
                    // line 104
                    echo "\t\t\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" class=\"button-wishlist\" onclick=\"wishlist.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_wishlist"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t\t";
                }
                // line 106
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 110
            echo "\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 111
            if ((($context["show_description"] ?? null) && ($context["description"] ?? null))) {
                // line 112
                echo "\t\t\t\t\t\t<p class=\"product-description\">";
                echo ($context["description"] ?? null);
                echo "</p>
\t\t\t\t\t";
            }
            // line 114
            echo "\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t";
            // line 116
            if ((($context["show_countdown"] ?? null) && ($context["date_end"] ?? null))) {
                // line 117
                echo "\t\t\t\t\t\t<div class=\"quantity-progress\" >
\t\t\t\t\t\t\t<div class=\"bar-percent\" >
\t\t\t\t\t\t\t\t<div class=\"available-percent\" style=\"width: ";
                // line 119
                echo ((($context["quantity"] ?? null) / ($context["total_qty"] ?? null)) * 100);
                echo "%;\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"product-available\">";
                // line 121
                echo ($context["text_availabe"] ?? null);
                echo "<span>";
                echo ($context["quantity"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t\t<p class=\"product-sold\">";
                // line 122
                echo ($context["text_sold"] ?? null);
                echo "<span>";
                echo ($context["sold_number"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"countdown-box-flex\">
\t\t\t\t\t\t\t<p class=\"text-countdown\">";
                // line 126
                echo ($context["text_countdown"] ?? null);
                echo "</p>
\t\t\t\t\t\t\t<div class=\"countdown-box countdown-product-";
                // line 127
                echo ($context["product_id"] ?? null);
                echo " countdown-title-box-";
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "\" data-id=\"";
                echo ($context["product_id"] ?? null);
                echo "\" data-date=\"";
                echo ($context["date_end"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"day\"></b><span>";
                // line 130
                echo ($context["text_days"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"hour\"></b><span>";
                // line 133
                echo ($context["text_hours"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"min\"></b><span>";
                // line 136
                echo ($context["text_mins"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"sec\"></b><span>";
                // line 139
                echo ($context["text_secs"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 145
            echo "\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 152
        echo "
";
        // line 153
        if ((($context["layout_type"] ?? null) == "list")) {
            // line 154
            echo "    ";
            // line 155
            echo "\t<div class=\"list-style\">
\t\t<div class=\"product-item\">\t
\t\t\t<div class=\"image ";
            // line 157
            if (($context["rotate_image"] ?? null)) {
                echo "rotate-image-container";
            }
            echo "\">
\t\t\t\t
\t\t\t\t<a href=\"";
            // line 159
            echo ($context["href"] ?? null);
            echo "\">
\t\t\t\t\t";
            // line 160
            if (($context["rotate_image"] ?? null)) {
                // line 161
                echo "\t\t\t\t\t\t<img ";
                if (($context["lazy_load"] ?? null)) {
                    echo " src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
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
            // line 163
            echo "\t\t\t\t\t<img ";
            if (($context["lazy_load"] ?? null)) {
                echo " src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
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
            // line 164
            if (($context["swatches_images"] ?? null)) {
                // line 165
                echo "\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                echo ($context["thumb"] ?? null);
                echo "\" class=\"img-default-";
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "\" />
\t\t\t\t\t\t";
                // line 166
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["swatches_images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["s_image"]) {
                    // line 167
                    echo "\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "image", [], "any", false, false, false, 167);
                    echo "\" class=\"img-swatch-";
                    echo ($context["section_id"] ?? null);
                    echo "-";
                    echo ($context["product_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "product_option_value_id", [], "any", false, false, false, 167);
                    echo "\" />
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 169
                echo "\t\t\t\t\t";
            }
            // line 170
            echo "\t\t\t\t</a>
\t\t\t\t";
            // line 171
            if (($context["lazy_load"] ?? null)) {
                // line 172
                echo "\t\t\t\t<div class=\"swiper-lazy-preloader\"></div>
\t\t\t\t";
            }
            // line 174
            echo "\t\t\t\t";
            if (($context["show_quickview"] ?? null)) {
                // line 175
                echo "\t\t\t\t\t<div class=\"quickview\">
\t\t\t\t\t\t<button type=\"button\" title=\"";
                // line 176
                echo ($context["button_quickview"] ?? null);
                echo "\" class=\"button-quickview\" onclick=\"ptquickview.ajaxView('";
                echo ($context["href"] ?? null);
                echo "')\"><span>";
                echo ($context["button_quickview"] ?? null);
                echo "</span></button>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 179
            echo "\t\t\t</div>
\t\t\t<div class=\"caption\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t";
            // line 182
            if (($context["options"] ?? null)) {
                // line 183
                echo "\t\t\t\t\t\t<div class=\"category-options product-options\">
\t\t\t\t\t\t";
                // line 184
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 185
                    echo "\t\t\t\t\t\t\t<ul class=\"ul-swatches-colors\">
\t\t\t\t\t\t\t\t";
                    // line 186
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 186));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 187
                        echo "\t\t\t\t\t\t\t\t\t<li class=\"swatches-options\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"swatches.changeModuleSwatches(\$(this));\" title=\"";
                        // line 188
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 188);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   style=\"";
                        // line 189
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 189)) {
                            echo " width: 10px; height: 10px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                            // line 190
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 190);
                            echo "') ";
                        }
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   data-module-id=\"";
                        // line 191
                        echo ($context["section_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   data-product-id=\"";
                        // line 192
                        echo ($context["product_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t   data-product-option-value-id=\"";
                        // line 193
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 193);
                        echo "\">";
                        if ( !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 193)) {
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 193);
                            echo " ";
                        }
                        echo "</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 196
                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 198
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 200
            echo "\t\t\t\t\t";
            if (($context["manufacturer"] ?? null)) {
                // line 201
                echo "\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t<a href=\"";
                // line 202
                echo ($context["manufacturer_href"] ?? null);
                echo "\">";
                echo ($context["manufacturer"] ?? null);
                echo "</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t";
            }
            // line 205
            echo "\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<h4><a href=\"";
            // line 207
            echo ($context["href"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h4>
\t\t\t\t\t";
            // line 208
            if (($context["rating"] ?? null)) {
                // line 209
                echo "\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t";
                // line 210
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 211
                    echo "\t\t\t\t\t\t\t\t";
                    if ((($context["rating"] ?? null) < $context["i"])) {
                        // line 212
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-o\"></i></span>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 214
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-x\"></i></span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 216
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 217
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 219
            echo "\t\t\t\t\t<div>
\t\t\t\t\t";
            // line 220
            if ((($context["show_price"] ?? null) && ($context["price"] ?? null))) {
                // line 221
                echo "\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t";
                // line 222
                if ( !($context["special"] ?? null)) {
                    // line 223
                    echo "\t\t\t\t\t\t\t\t";
                    echo ($context["price"] ?? null);
                    echo "
\t\t\t\t\t\t\t";
                } else {
                    // line 225
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                    echo ($context["special"] ?? null);
                    echo "</span> <span class=\"price-old\">";
                    echo ($context["price"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 227
                echo "\t\t\t\t\t\t\t";
                if (($context["tax"] ?? null)) {
                    // line 228
                    echo "\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo ($context["tax"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t";
                }
                // line 230
                echo "\t\t\t\t\t\t</p>
\t\t\t\t\t";
            }
            // line 232
            echo "\t\t\t\t\t";
            if ((($context["show_label"] ?? null) && (($context["special"] ?? null) || ($context["is_new"] ?? null)))) {
                // line 233
                echo "\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t";
                // line 234
                if (($context["special"] ?? null)) {
                    // line 235
                    echo "\t\t\t\t\t\t\t\t<div><span class=\"pro-label sale\">";
                    echo (("-" . ($context["rate_special"] ?? null)) . "%");
                    echo "</span></div>
\t\t\t\t\t\t\t";
                }
                // line 237
                echo "\t\t\t\t\t\t\t";
                if (($context["is_new"] ?? null)) {
                    // line 238
                    echo "\t\t\t\t\t\t\t\t<div><span class=\"pro-label new\">";
                    echo ($context["text_new"] ?? null);
                    echo "</span></div>
\t\t\t\t\t\t\t";
                }
                // line 240
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 242
            echo "\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 243
            if ((($context["show_description"] ?? null) && ($context["description"] ?? null))) {
                // line 244
                echo "\t\t\t\t\t\t<p class=\"product-description\">";
                echo ($context["description"] ?? null);
                echo "</p>
\t\t\t\t\t";
            }
            // line 246
            echo "\t\t\t\t\t";
            if ((($context["show_countdown"] ?? null) && ($context["date_end"] ?? null))) {
                // line 247
                echo "\t\t\t\t\t\t<div class=\"quantity-progress\" >
\t\t\t\t\t\t\t<p class=\"product-available\">";
                // line 248
                echo ($context["text_availabe"] ?? null);
                echo "<span>";
                echo ($context["quantity"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t\t<p class=\"product-sold\">";
                // line 249
                echo ($context["text_sold"] ?? null);
                echo "<span>";
                echo ($context["sold_number"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t\t<div class=\"bar-percent\" >
\t\t\t\t\t\t\t\t<div class=\"available-percent\" style=\"width: ";
                // line 251
                echo ((($context["quantity"] ?? null) / ($context["total_qty"] ?? null)) * 100);
                echo "%;\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"countdown-box-flex\">
\t\t\t\t\t\t\t<p class=\"text-countdown\">";
                // line 255
                echo ($context["text_countdown"] ?? null);
                echo "</p>
\t\t\t\t\t\t\t<div class=\"countdown-box countdown-product-";
                // line 256
                echo ($context["product_id"] ?? null);
                echo "\" data-id=\"";
                echo ($context["product_id"] ?? null);
                echo "\" data-date=\"";
                echo ($context["date_end"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"day\"></b><span>";
                // line 259
                echo ($context["text_days"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"hour\"></b><span>";
                // line 262
                echo ($context["text_hours"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"min\"></b><span>";
                // line 265
                echo ($context["text_mins"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"sec\"></b><span>";
                // line 268
                echo ($context["text_secs"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 274
            echo "\t\t\t\t\t";
            if (((($context["show_cart"] ?? null) || ($context["show_wishlist"] ?? null)) || ($context["show_compare"] ?? null))) {
                // line 275
                echo "\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t";
                // line 277
                if (($context["show_cart"] ?? null)) {
                    // line 278
                    echo "\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-cart\" onclick=\"cart.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\"><span>";
                    echo ($context["button_cart"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t";
                }
                // line 280
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                // line 282
                if (($context["show_compare"] ?? null)) {
                    // line 283
                    echo "\t\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_compare"] ?? null);
                    echo "\" class=\"button-compare\" onclick=\"compare.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_compare"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t";
                }
                // line 285
                echo "\t\t\t\t\t\t\t\t";
                if (($context["show_wishlist"] ?? null)) {
                    // line 286
                    echo "\t\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" class=\"button-wishlist\" onclick=\"wishlist.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_wishlist"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t";
                }
                // line 288
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 291
            echo "\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 297
        echo "
";
        // line 298
        if ((($context["layout_type"] ?? null) == "other")) {
            // line 299
            echo "    ";
            // line 300
            echo "\t<div class=\"other-style\">
\t\t<div class=\"product-item\">\t
\t\t\t
\t\t\t<div class=\"image ";
            // line 303
            if (($context["rotate_image"] ?? null)) {
                echo "rotate-image-container";
            }
            echo "\">
\t\t\t\t
\t\t\t\t<a href=\"";
            // line 305
            echo ($context["href"] ?? null);
            echo "\">
\t\t\t\t\t";
            // line 306
            if (($context["rotate_image"] ?? null)) {
                // line 307
                echo "\t\t\t\t\t\t<img ";
                if (($context["lazy_load"] ?? null)) {
                    echo " src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
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
            // line 309
            echo "\t\t\t\t\t<img ";
            if (($context["lazy_load"] ?? null)) {
                echo " src=\"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
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
            // line 310
            if (($context["swatches_images"] ?? null)) {
                // line 311
                echo "\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                echo ($context["thumb"] ?? null);
                echo "\" class=\"img-default-";
                echo ($context["section_id"] ?? null);
                echo "-";
                echo ($context["product_id"] ?? null);
                echo "\" />
\t\t\t\t\t\t";
                // line 312
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["swatches_images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["s_image"]) {
                    // line 313
                    echo "\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "image", [], "any", false, false, false, 313);
                    echo "\" class=\"img-swatch-";
                    echo ($context["section_id"] ?? null);
                    echo "-";
                    echo ($context["product_id"] ?? null);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["s_image"], "product_option_value_id", [], "any", false, false, false, 313);
                    echo "\" />
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 315
                echo "\t\t\t\t\t";
            }
            // line 316
            echo "\t\t\t\t</a>
\t\t\t\t";
            // line 317
            if (($context["lazy_load"] ?? null)) {
                // line 318
                echo "\t\t\t\t<div class=\"swiper-lazy-preloader\"></div>
\t\t\t\t";
            }
            // line 320
            echo "\t\t\t\t";
            if (($context["options"] ?? null)) {
                // line 321
                echo "\t\t\t\t\t<div class=\"category-options product-options\">
\t\t\t\t\t";
                // line 322
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 323
                    echo "\t\t\t\t\t\t<ul class=\"ul-swatches-colors\">
\t\t\t\t\t\t\t";
                    // line 324
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 324));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 325
                        echo "\t\t\t\t\t\t\t\t<li class=\"swatches-options\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"swatches.changeModuleSwatches(\$(this));\" title=\"";
                        // line 326
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 326);
                        echo "\"
\t\t\t\t\t\t\t\t\t   style=\"";
                        // line 327
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 327)) {
                            echo " width: 10px; height: 10px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                            // line 328
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 328);
                            echo "') ";
                        }
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-module-id=\"";
                        // line 329
                        echo ($context["section_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-product-id=\"";
                        // line 330
                        echo ($context["product_id"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t   data-product-option-value-id=\"";
                        // line 331
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 331);
                        echo "\">";
                        if ( !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 331)) {
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 331);
                            echo " ";
                        }
                        echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 334
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 336
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 338
            echo "\t\t\t\t";
            if (($context["show_quickview"] ?? null)) {
                // line 339
                echo "\t\t\t\t\t<div class=\"quickview\">\t
\t\t\t\t\t\t<button type=\"button\" title=\"";
                // line 340
                echo ($context["button_quickview"] ?? null);
                echo "\" class=\"button-quickview\" onclick=\"ptquickview.ajaxView('";
                echo ($context["href"] ?? null);
                echo "')\"><span>";
                echo ($context["button_quickview"] ?? null);
                echo "</span></button>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 343
            echo "\t\t\t</div>
\t\t\t<div class=\"caption\">
\t\t\t\t<div class=\"inner\">
\t\t\t\t\t";
            // line 346
            if (($context["manufacturer"] ?? null)) {
                // line 347
                echo "\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t<a href=\"";
                // line 348
                echo ($context["manufacturer_href"] ?? null);
                echo "\">";
                echo ($context["manufacturer"] ?? null);
                echo "</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t";
            }
            // line 351
            echo "
\t\t\t\t\t
\t\t\t\t\t<h4><a href=\"";
            // line 353
            echo ($context["href"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h4>
\t\t\t\t\t
\t\t\t\t\t";
            // line 355
            if (($context["rating"] ?? null)) {
                // line 356
                echo "\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t";
                // line 357
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 358
                    echo "\t\t\t\t\t\t\t\t";
                    if ((($context["rating"] ?? null) < $context["i"])) {
                        // line 359
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-o\"></i></span>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 361
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-x\"></i></span>
\t\t\t\t\t\t\t\t";
                    }
                    // line 363
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 364
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 366
            echo "\t\t\t\t\t
\t\t\t\t\t<div class=\"box-price\">
\t\t\t\t\t\t";
            // line 368
            if ((($context["show_price"] ?? null) && ($context["price"] ?? null))) {
                // line 369
                echo "\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t";
                // line 370
                if ( !($context["special"] ?? null)) {
                    // line 371
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo ($context["price"] ?? null);
                    echo "
\t\t\t\t\t\t\t\t";
                } else {
                    // line 373
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                    echo ($context["special"] ?? null);
                    echo "</span> <span class=\"price-old\">";
                    echo ($context["price"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 375
                echo "\t\t\t\t\t\t\t\t";
                if (($context["tax"] ?? null)) {
                    // line 376
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                    echo ($context["text_tax"] ?? null);
                    echo " ";
                    echo ($context["tax"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t\t";
                }
                // line 378
                echo "\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t";
            }
            // line 380
            echo "\t\t\t\t\t
\t\t\t\t\t\t";
            // line 381
            if ((($context["show_label"] ?? null) && (($context["special"] ?? null) || ($context["is_new"] ?? null)))) {
                // line 382
                echo "\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t";
                // line 383
                if (($context["special"] ?? null)) {
                    // line 384
                    echo "\t\t\t\t\t\t\t\t\t<div><span class=\"pro-label sale\">";
                    echo (("-" . ($context["rate_special"] ?? null)) . "%");
                    echo "</span></div>
\t\t\t\t\t\t\t\t";
                }
                // line 386
                echo "\t\t\t\t\t\t\t\t";
                if (($context["is_new"] ?? null)) {
                    // line 387
                    echo "\t\t\t\t\t\t\t\t\t<div><span class=\"pro-label new\">";
                    echo ($context["text_new"] ?? null);
                    echo "</span></div>
\t\t\t\t\t\t\t\t";
                }
                // line 389
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 391
            echo "\t\t\t\t\t\t";
            if ((((($context["show_cart"] ?? null) || ($context["show_compare"] ?? null)) || ($context["show_wishlist"] ?? null)) || ($context["show_quickview"] ?? null))) {
                // line 392
                echo "\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t";
                // line 394
                if (($context["show_cart"] ?? null)) {
                    // line 395
                    echo "\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-cart\" onclick=\"cart.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\" title=\"";
                    echo ($context["button_cart"] ?? null);
                    echo "\"><span>";
                    echo ($context["button_cart"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t\t";
                }
                // line 397
                echo "\t\t\t\t\t\t\t\t\t";
                if (($context["show_wishlist"] ?? null)) {
                    // line 398
                    echo "\t\t\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_wishlist"] ?? null);
                    echo "\" class=\"button-wishlist\" onclick=\"wishlist.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_wishlist"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t\t";
                }
                // line 400
                echo "\t\t\t\t\t\t\t\t\t";
                if (($context["show_compare"] ?? null)) {
                    // line 401
                    echo "\t\t\t\t\t\t\t\t\t\t<button type=\"button\"  title=\"";
                    echo ($context["button_compare"] ?? null);
                    echo "\" class=\"button-compare\" onclick=\"compare.add('";
                    echo ($context["product_id"] ?? null);
                    echo "');\"><span>";
                    echo ($context["button_compare"] ?? null);
                    echo "</span></button>
\t\t\t\t\t\t\t\t\t";
                }
                // line 403
                echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 407
            echo "\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 408
            if ((($context["show_description"] ?? null) && ($context["description"] ?? null))) {
                // line 409
                echo "\t\t\t\t\t\t<p>";
                echo ($context["description"] ?? null);
                echo "</p>
\t\t\t\t\t";
            }
            // line 411
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 412
            if ((($context["show_countdown"] ?? null) && ($context["date_end"] ?? null))) {
                // line 413
                echo "\t\t\t\t\t\t<div class=\"quantity-progress\" >
\t\t\t\t\t\t\t<p class=\"product-available\">";
                // line 414
                echo ($context["text_availabe"] ?? null);
                echo "<span>";
                echo ($context["quantity"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t\t<p class=\"product-sold\">";
                // line 415
                echo ($context["text_sold"] ?? null);
                echo "<span>";
                echo ($context["sold_number"] ?? null);
                echo "</span></p>
\t\t\t\t\t\t\t<div class=\"bar-percent\" >
\t\t\t\t\t\t\t\t<div class=\"available-percent\" style=\"width: ";
                // line 417
                echo ((($context["quantity"] ?? null) / ($context["total_qty"] ?? null)) * 100);
                echo "%;\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"countdown-box-flex\">
\t\t\t\t\t\t\t<p class=\"text-countdown\">";
                // line 421
                echo ($context["text_countdown"] ?? null);
                echo "</p>
\t\t\t\t\t\t\t<div class=\"countdown-box countdown-product-";
                // line 422
                echo ($context["product_id"] ?? null);
                echo "\" data-id=\"";
                echo ($context["product_id"] ?? null);
                echo "\" data-date=\"";
                echo ($context["date_end"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"day\"></b><span>";
                // line 425
                echo ($context["text_days"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"hour\"></b><span>";
                // line 428
                echo ($context["text_hours"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"min\"></b><span>";
                // line 431
                echo ($context["text_mins"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t<b class=\"sec\"></b><span>";
                // line 434
                echo ($context["text_secs"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 440
            echo "\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "tt_safira_houseware1/template/plaza/module/ptproducts/content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1453 => 440,  1444 => 434,  1438 => 431,  1432 => 428,  1426 => 425,  1416 => 422,  1412 => 421,  1405 => 417,  1398 => 415,  1392 => 414,  1389 => 413,  1387 => 412,  1384 => 411,  1378 => 409,  1376 => 408,  1373 => 407,  1367 => 403,  1357 => 401,  1354 => 400,  1344 => 398,  1341 => 397,  1331 => 395,  1329 => 394,  1325 => 392,  1322 => 391,  1318 => 389,  1312 => 387,  1309 => 386,  1303 => 384,  1301 => 383,  1298 => 382,  1296 => 381,  1293 => 380,  1289 => 378,  1281 => 376,  1278 => 375,  1270 => 373,  1264 => 371,  1262 => 370,  1259 => 369,  1257 => 368,  1253 => 366,  1249 => 364,  1243 => 363,  1239 => 361,  1235 => 359,  1232 => 358,  1228 => 357,  1225 => 356,  1223 => 355,  1216 => 353,  1212 => 351,  1204 => 348,  1201 => 347,  1199 => 346,  1194 => 343,  1184 => 340,  1181 => 339,  1178 => 338,  1174 => 336,  1167 => 334,  1152 => 331,  1148 => 330,  1144 => 329,  1138 => 328,  1134 => 327,  1130 => 326,  1127 => 325,  1123 => 324,  1120 => 323,  1116 => 322,  1113 => 321,  1110 => 320,  1106 => 318,  1104 => 317,  1101 => 316,  1098 => 315,  1083 => 313,  1079 => 312,  1070 => 311,  1068 => 310,  1039 => 309,  1013 => 307,  1011 => 306,  1007 => 305,  1000 => 303,  995 => 300,  993 => 299,  991 => 298,  988 => 297,  980 => 291,  975 => 288,  965 => 286,  962 => 285,  952 => 283,  950 => 282,  946 => 280,  936 => 278,  934 => 277,  930 => 275,  927 => 274,  918 => 268,  912 => 265,  906 => 262,  900 => 259,  890 => 256,  886 => 255,  879 => 251,  872 => 249,  866 => 248,  863 => 247,  860 => 246,  854 => 244,  852 => 243,  849 => 242,  845 => 240,  839 => 238,  836 => 237,  830 => 235,  828 => 234,  825 => 233,  822 => 232,  818 => 230,  810 => 228,  807 => 227,  799 => 225,  793 => 223,  791 => 222,  788 => 221,  786 => 220,  783 => 219,  779 => 217,  773 => 216,  769 => 214,  765 => 212,  762 => 211,  758 => 210,  755 => 209,  753 => 208,  747 => 207,  743 => 205,  735 => 202,  732 => 201,  729 => 200,  725 => 198,  718 => 196,  703 => 193,  699 => 192,  695 => 191,  689 => 190,  685 => 189,  681 => 188,  678 => 187,  674 => 186,  671 => 185,  667 => 184,  664 => 183,  662 => 182,  657 => 179,  647 => 176,  644 => 175,  641 => 174,  637 => 172,  635 => 171,  632 => 170,  629 => 169,  614 => 167,  610 => 166,  601 => 165,  599 => 164,  570 => 163,  544 => 161,  542 => 160,  538 => 159,  531 => 157,  527 => 155,  525 => 154,  523 => 153,  520 => 152,  511 => 145,  502 => 139,  496 => 136,  490 => 133,  484 => 130,  470 => 127,  466 => 126,  457 => 122,  451 => 121,  446 => 119,  442 => 117,  440 => 116,  436 => 114,  430 => 112,  428 => 111,  425 => 110,  419 => 106,  409 => 104,  406 => 103,  396 => 101,  394 => 100,  390 => 98,  380 => 96,  378 => 95,  374 => 93,  371 => 92,  367 => 90,  361 => 88,  358 => 87,  352 => 85,  350 => 84,  347 => 83,  344 => 82,  340 => 80,  332 => 78,  329 => 77,  321 => 75,  315 => 73,  313 => 72,  310 => 71,  308 => 70,  305 => 69,  301 => 67,  295 => 66,  291 => 64,  287 => 62,  284 => 61,  280 => 60,  277 => 59,  275 => 58,  269 => 57,  265 => 55,  257 => 52,  254 => 51,  252 => 50,  247 => 47,  243 => 45,  236 => 43,  221 => 40,  217 => 39,  213 => 38,  207 => 37,  203 => 36,  199 => 35,  196 => 34,  192 => 33,  189 => 32,  185 => 31,  182 => 30,  180 => 29,  176 => 27,  166 => 24,  163 => 23,  160 => 22,  156 => 20,  154 => 19,  151 => 18,  148 => 17,  133 => 15,  129 => 14,  120 => 13,  118 => 12,  89 => 11,  63 => 9,  61 => 8,  57 => 7,  50 => 5,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_houseware1/template/plaza/module/ptproducts/content.twig", "");
    }
}
