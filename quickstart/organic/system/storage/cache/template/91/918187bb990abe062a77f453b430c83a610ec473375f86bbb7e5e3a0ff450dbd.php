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

/* tt_safira1/template/plaza/filter/category.twig */
class __TwigTemplate_62b578b06df764f47fcfe8c8b4a333728b5aba21bc54d9f9756d52bedfb1e9a7 extends \Twig\Template
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
        if (($context["products"] ?? null)) {
            // line 2
            echo "\t<div class=\"tool-bar\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3 col-xs-6\">
\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t";
            // line 6
            if (($context["use_advance_view"] ?? null)) {
                // line 7
                echo "\t\t\t\t\t\t<button type=\"button\" onclick=\"category_view.changeView('grid', 1, 'btn-grid-1')\" class=\"btn btn-default btn-custom-view btn-grid-1\" data-toggle=\"tooltip\" title=\"1\">1</button>
\t\t\t\t\t\t<button type=\"button\" onclick=\"category_view.changeView('grid', 2, 'btn-grid-2')\" class=\"btn btn-default btn-custom-view btn-grid-2\" data-toggle=\"tooltip\" title=\"2\">2</button>
\t\t\t\t\t\t<button type=\"button\" onclick=\"category_view.changeView('grid', 3, 'btn-grid-3')\" class=\"btn btn-default btn-custom-view btn-grid-3\" data-toggle=\"tooltip\" title=\"3\">3</button>
\t\t\t\t\t\t<button type=\"button\" onclick=\"category_view.changeView('grid', 4, 'btn-grid-4')\" class=\"btn btn-default btn-custom-view btn-grid-4\" data-toggle=\"tooltip\" title=\"4\">4</button>
\t\t\t\t\t\t<!-- <button type=\"button\" onclick=\"category_view.changeView('grid', 5, 'btn-grid-5')\" class=\"btn btn-default btn-custom-view btn-grid-5\" data-toggle=\"tooltip\" title=\"5\">5</button> -->
\t\t\t\t\t\t<button type=\"button\" onclick=\"category_view.changeView('list', 0, 'btn-list')\" class=\"btn btn-default btn-custom-view btn-list\" data-toggle=\"tooltip\" title=\"";
                // line 12
                echo ($context["button_list"] ?? null);
                echo "\"><i class=\"icon ion-android-menu\"></i></button>
\t\t\t\t\t\t<input type=\"hidden\" id=\"category-view-type\" value=\"";
                // line 13
                echo ($context["advance_default_view"] ?? null);
                echo "\" />
\t\t\t\t\t\t<input type=\"hidden\" id=\"category-grid-cols\" value=\"";
                // line 14
                echo ($context["product_p_row"] ?? null);
                echo "\" />
\t\t\t\t\t";
            } else {
                // line 16
                echo "\t\t\t\t\t\t<button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                echo ($context["button_grid"] ?? null);
                echo "\"><i class=\"icon ion-grid\"></i></button>
\t\t\t\t\t\t<button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 17
                echo ($context["button_list"] ?? null);
                echo "\"><i class=\"icon ion-android-menu\"></i></button>
\t\t\t\t\t";
            }
            // line 19
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-xs-6\">
\t\t\t\t<div class=\"form-group\"><a href=\"";
            // line 22
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"btn btn-link\">";
            echo ($context["text_compare"] ?? null);
            echo "</a></div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-xs-6\">
\t\t\t\t<div class=\"form-group input-group input-group-sm\">
\t\t\t\t\t";
            // line 26
            if (($context["use_filter"] ?? null)) {
                // line 27
                echo "\t\t\t\t\t\t<label class=\"input-group-addon\" for=\"input-sort\">";
                echo ($context["text_sort"] ?? null);
                echo "</label>
\t\t\t\t\t\t<select id=\"input-sort\" class=\"form-control\" onchange=\"ptfilter.filter(this.value);\">
\t\t\t\t\t\t\t";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["pt_sorts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                    // line 30
                    echo "\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 30) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                        // line 31
                        echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 31);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 31);
                        echo "</option>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 33
                        echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 33);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 33);
                        echo "</option>
\t\t\t\t\t\t\t\t";
                    }
                    // line 35
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "\t\t\t\t\t\t</select>
\t\t\t\t\t";
            } else {
                // line 38
                echo "\t\t\t\t\t\t<label class=\"input-group-addon\" for=\"input-sort\">";
                echo ($context["text_sort"] ?? null);
                echo "</label>
\t\t\t\t\t\t<select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sorts"]);
                foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                    // line 41
                    echo "\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 41) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                        // line 42
                        echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 42);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 42);
                        echo "</option>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 44
                        echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 44);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 44);
                        echo "</option>
\t\t\t\t\t\t\t\t";
                    }
                    // line 46
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "\t\t\t\t\t\t</select>
\t\t\t\t\t";
            }
            // line 49
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-xs-6\">
\t\t\t\t<div class=\"form-group input-group input-group-sm\">
\t\t\t\t\t";
            // line 53
            if (($context["use_filter"] ?? null)) {
                // line 54
                echo "\t\t\t\t\t\t<label class=\"input-group-addon\" for=\"input-limit\">";
                echo ($context["text_limit"] ?? null);
                echo "</label>
\t\t\t\t\t\t<select id=\"input-limit\" class=\"form-control\" onchange=\"ptfilter.filter(this.value);\">
\t\t\t\t\t\t\t";
                // line 56
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["pt_limits"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                    // line 57
                    echo "\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 57) == ($context["limit"] ?? null))) {
                        // line 58
                        echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 58);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 58);
                        echo "</option>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 60
                        echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 60);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 60);
                        echo "</option>
\t\t\t\t\t\t\t\t";
                    }
                    // line 62
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "\t\t\t\t\t\t</select>
\t\t\t\t\t";
            } else {
                // line 65
                echo "\t\t\t\t\t\t<label class=\"input-group-addon\" for=\"input-limit\">";
                echo ($context["text_limit"] ?? null);
                echo "</label>
\t\t\t\t\t\t<select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["limits"]);
                foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                    // line 68
                    echo "\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 68) == ($context["limit"] ?? null))) {
                        // line 69
                        echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 69);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 69);
                        echo "</option>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 71
                        echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 71);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 71);
                        echo "</option>
\t\t\t\t\t\t\t\t";
                    }
                    // line 73
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "\t\t\t\t\t\t</select>
\t\t\t\t\t";
            }
            // line 76
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
    <div class=\"row\">
\t\t";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 82
                echo "\t\t\t<div class=\"product-layout product-list col-xs-12 product-items\">
\t\t\t\t<div class=\"product-thumb\">
\t\t\t\t\t<div class=\"product-item\">\t
\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 86
                if ((($context["image_effect"] ?? null) == "swatches")) {
                    // line 87
                    echo "\t\t\t\t\t\t\t<div class=\"image swatches-image-container\">
\t\t\t\t\t\t\t\t";
                    // line 88
                    if (($context["show_cate_label"] ?? null)) {
                        // line 89
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t";
                        // line 90
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 90)) {
                            // line 91
                            echo "\t\t\t\t\t\t\t\t\t\t<div><span class=\"pro-label sale\">";
                            echo ($context["text_sale"] ?? null);
                            echo "</span></div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 93
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 93)) {
                            // line 94
                            echo "\t\t\t\t\t\t\t\t\t\t<div><span class=\"pro-label new\">";
                            echo ($context["text_new"] ?? null);
                            echo "</span></div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 96
                        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 99
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 99);
                    echo "\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 100
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 100);
                    echo "\"  alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 100);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 100);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t class=\"img-responsive img-cate-";
                    // line 101
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 101);
                    echo "\" />
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                    // line 102
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 102);
                    echo "\" class=\"img-default-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 102);
                    echo "\" />
\t\t\t\t\t\t\t\t\t";
                    // line 103
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "swatches_images", [], "any", false, false, false, 103)) {
                        // line 104
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "swatches_images", [], "any", false, false, false, 104));
                        foreach ($context['_seq'] as $context["_key"] => $context["s_image"]) {
                            // line 105
                            echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["s_image"], "image", [], "any", false, false, false, 105);
                            echo "\" class=\"img-swatch-";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 105);
                            echo "-";
                            echo twig_get_attribute($this->env, $this->source, $context["s_image"], "product_option_value_id", [], "any", false, false, false, 105);
                            echo "\" />
\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_image'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 107
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 108
                    echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                    // line 110
                    if ((((($context["show_cate_cart"] ?? null) || ($context["show_cate_wishlist"] ?? null)) || ($context["show_cate_compare"] ?? null)) || ($context["use_quick_view"] ?? null))) {
                        // line 111
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 113
                        if (($context["show_cate_cart"] ?? null)) {
                            // line 114
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-cart\"  title=\"";
                            echo ($context["button_cart"] ?? null);
                            echo "\" onclick=\"cart.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 114);
                            echo "', '";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 114);
                            echo "');\"><span>";
                            echo ($context["button_cart"] ?? null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 116
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if (($context["use_quick_view"] ?? null)) {
                            // line 117
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button-quickview\" type=\"button\"  title=\"";
                            echo ($context["button_quickview"] ?? null);
                            echo "\" onclick=\"ptquickview.ajaxView('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 117);
                            echo "')\"><span>";
                            echo ($context["button_quickview"] ?? null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 119
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if (($context["show_cate_wishlist"] ?? null)) {
                            // line 120
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-wishlist\"  title=\"";
                            echo ($context["button_wishlist"] ?? null);
                            echo "\" onclick=\"wishlist.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 120);
                            echo "');\"><span>";
                            echo ($context["button_wishlist"] ?? null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 122
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if (($context["show_cate_compare"] ?? null)) {
                            // line 123
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-compare\"  title=\"";
                            echo ($context["button_compare"] ?? null);
                            echo "\" onclick=\"compare.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 123);
                            echo "');\"><span>";
                            echo ($context["button_compare"] ?? null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 125
                        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 128
                    echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t";
                } else {
                    // line 132
                    echo "\t\t\t\t\t\t\t<div class=\"image rotate-image-container\">
\t\t\t\t\t\t\t\t";
                    // line 133
                    if (($context["show_cate_label"] ?? null)) {
                        // line 134
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t";
                        // line 135
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 135)) {
                            // line 136
                            echo "\t\t\t\t\t\t\t\t\t\t<div><span class=\"pro-label sale\">";
                            echo ($context["text_sale"] ?? null);
                            echo "</span></div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 138
                        echo "\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 138)) {
                            // line 139
                            echo "\t\t\t\t\t\t\t\t\t\t<div><span class=\"pro-label new\">";
                            echo ($context["text_new"] ?? null);
                            echo "</span></div>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 141
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 143
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 143);
                    echo "\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 144
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 144);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 144);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 144);
                    echo "\" class=\"img-responsive img-default-image\" />
\t\t\t\t\t\t\t\t\t";
                    // line 145
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "rotate_image", [], "any", false, false, false, 145)) {
                        // line 146
                        echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "rotate_image", [], "any", false, false, false, 146);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 146);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 146);
                        echo "\" class=\"img-responsive img-rotate-image\" />
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 148
                    echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                    // line 149
                    if ((((($context["show_cate_cart"] ?? null) || ($context["show_cate_wishlist"] ?? null)) || ($context["show_cate_compare"] ?? null)) || ($context["use_quick_view"] ?? null))) {
                        // line 150
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 152
                        if (($context["show_cate_cart"] ?? null)) {
                            // line 153
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-cart\"  title=\"";
                            echo ($context["button_cart"] ?? null);
                            echo "\" onclick=\"cart.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 153);
                            echo "', '";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 153);
                            echo "');\"><span>";
                            echo ($context["button_cart"] ?? null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 155
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if (($context["use_quick_view"] ?? null)) {
                            // line 156
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button-quickview\" type=\"button\"  title=\"";
                            echo ($context["button_quickview"] ?? null);
                            echo "\" onclick=\"ptquickview.ajaxView('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 156);
                            echo "')\"><span>";
                            echo ($context["button_quickview"] ?? null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 158
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if (($context["show_cate_wishlist"] ?? null)) {
                            // line 159
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-wishlist\"  title=\"";
                            echo ($context["button_wishlist"] ?? null);
                            echo "\" onclick=\"wishlist.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 159);
                            echo "');\"><span>";
                            echo ($context["button_wishlist"] ?? null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 161
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if (($context["show_cate_compare"] ?? null)) {
                            // line 162
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-compare\"  title=\"";
                            echo ($context["button_compare"] ?? null);
                            echo "\" onclick=\"compare.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 162);
                            echo "');\"><span>";
                            echo ($context["button_compare"] ?? null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 164
                        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 167
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 169
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t";
                // line 171
                if ((($context["image_effect"] ?? null) == "swatches")) {
                    // line 172
                    echo "\t\t\t\t\t\t\t\t<div class=\"category-options\">
\t\t\t\t\t\t\t\t\t";
                    // line 173
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "options", [], "any", false, false, false, 173)) {
                        // line 174
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "options", [], "any", false, false, false, 174));
                        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                            // line 175
                            echo "\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-swatches-colors\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 176
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 176));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 177
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"swatches-options\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"swatches.changeSwatchInCategory(\$(this));\" title=\"";
                                // line 178
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 178);
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   style=\"";
                                // line 179
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 179)) {
                                    echo " width: ";
                                    echo ($context["icon_swatches_width"] ?? null);
                                    echo "px; height: ";
                                    echo ($context["icon_swatches_height"] ?? null);
                                    echo "px;
\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                                    // line 180
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 180);
                                    echo "') ";
                                }
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   data-product-id=\"";
                                // line 181
                                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 181);
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   data-product-option-value-id=\"";
                                // line 182
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 182);
                                echo "\">";
                                if ( !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 182)) {
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 182);
                                    echo " ";
                                }
                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 185
                            echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 187
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 188
                    echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 190
                echo "\t\t\t\t\t\t\t<h4><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 190);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 190);
                echo "</a></h4>
\t\t\t\t\t\t\t";
                // line 191
                if (twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 191)) {
                    // line 192
                    echo "\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 193
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer_href", [], "any", false, false, false, 193);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 193);
                    echo "</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
                }
                // line 196
                echo "\t\t\t\t\t\t\t<!-- ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 196)) {
                    echo " -->
\t\t\t\t\t\t\t\t<!-- <div class=\"rating\"> -->
\t\t\t\t\t\t\t\t\t<!-- ";
                    // line 198
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        echo " -->
\t\t\t\t\t\t\t\t\t\t<!-- ";
                        // line 199
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 199) < $context["i"])) {
                            echo " -->
\t\t\t\t\t\t\t\t\t\t\t<!-- <span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-o\"></i></span> -->
\t\t\t\t\t\t\t\t\t\t<!-- ";
                        } else {
                            // line 201
                            echo " -->
\t\t\t\t\t\t\t\t\t\t\t<!-- <span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-x\"></i></span> -->
\t\t\t\t\t\t\t\t\t\t<!-- ";
                        }
                        // line 203
                        echo " -->
\t\t\t\t\t\t\t\t\t<!-- ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 204
                    echo " -->
\t\t\t\t\t\t\t\t<!-- </div> -->
\t\t\t\t\t\t\t<!-- ";
                }
                // line 206
                echo " -->
\t\t\t\t\t\t\t";
                // line 207
                if ((($context["show_cate_price"] ?? null) && twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 207))) {
                    // line 208
                    echo "\t\t\t\t\t\t\t\t<p class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 208)) {
                        // line 209
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 209);
                        echo "
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 210
                        echo " <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 210);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 210);
                        echo "</span> ";
                    }
                    // line 211
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 211)) {
                        echo " <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 211);
                        echo "</span> ";
                    }
                    echo " </p>
\t\t\t\t\t\t\t";
                }
                // line 213
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 214
                if (($context["show_cate_prodes"] ?? null)) {
                    // line 215
                    echo "\t\t\t\t\t\t\t\t<p class=\"product-description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 215);
                    echo "</p>
\t\t\t\t\t\t\t";
                }
                // line 217
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 223
            echo "\t</div>
\t<div class=\"tool-bar-bottom\">
\t\t<div class=\"row \">
\t\t\t";
            // line 226
            if (($context["use_filter"] ?? null)) {
                // line 227
                echo "\t\t\t\t<div class=\"col-sm-6 text-left ajax_pagination\">";
                echo ($context["pt_pagination"] ?? null);
                echo "</div>
\t\t\t";
            } else {
                // line 229
                echo "\t\t\t\t<div class=\"col-sm-6 text-left\">";
                echo ($context["pagination"] ?? null);
                echo "</div>
\t\t\t";
            }
            // line 231
            echo "\t\t\t<div class=\"col-sm-6 text-right\">";
            echo ($context["results"] ?? null);
            echo "</div>
\t\t</div>
\t</div>
";
        }
        // line 235
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 236
            echo "    <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
    <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 238
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
    </div>
";
        }
        // line 241
        echo "
<script type=\"text/javascript\">
    // Product List
    \$('#list-view').click(function() {
        \$('#content .product-grid > .clearfix').remove();

        \$('#content .row > .product-grid').attr('class', 'product-layout product-list col-xs-12');
        \$('#grid-view').removeClass('active');
        \$('#list-view').addClass('active');

        localStorage.setItem('display', 'list');
    });

    // Product Grid
    \$('#grid-view').click(function() {
        var cols = \$('#column-right, #column-left').length;

        if (cols == 2) {
            \$('#content .product-list').attr('class', 'product-layout product-grid col-lg-6 col-md-6 col-sm-12 col-xs-12');
        } else if (cols == 1) {
            \$('#content .product-list').attr('class', 'product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12');
        } else {
            \$('#content .product-list').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12');
        }

        \$('#list-view').removeClass('active');
        \$('#grid-view').addClass('active');

        localStorage.setItem('display', 'grid');
    });
</script>";
    }

    public function getTemplateName()
    {
        return "tt_safira1/template/plaza/filter/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  781 => 241,  773 => 238,  767 => 236,  765 => 235,  757 => 231,  751 => 229,  745 => 227,  743 => 226,  738 => 223,  727 => 217,  721 => 215,  719 => 214,  716 => 213,  704 => 211,  697 => 210,  691 => 209,  688 => 208,  686 => 207,  683 => 206,  678 => 204,  671 => 203,  666 => 201,  660 => 199,  654 => 198,  648 => 196,  640 => 193,  637 => 192,  635 => 191,  628 => 190,  624 => 188,  621 => 187,  614 => 185,  599 => 182,  595 => 181,  589 => 180,  581 => 179,  577 => 178,  574 => 177,  570 => 176,  567 => 175,  562 => 174,  560 => 173,  557 => 172,  555 => 171,  551 => 169,  547 => 167,  542 => 164,  532 => 162,  529 => 161,  519 => 159,  516 => 158,  506 => 156,  503 => 155,  491 => 153,  489 => 152,  485 => 150,  483 => 149,  480 => 148,  470 => 146,  468 => 145,  460 => 144,  455 => 143,  451 => 141,  445 => 139,  442 => 138,  436 => 136,  434 => 135,  431 => 134,  429 => 133,  426 => 132,  420 => 128,  415 => 125,  405 => 123,  402 => 122,  392 => 120,  389 => 119,  379 => 117,  376 => 116,  364 => 114,  362 => 113,  358 => 111,  356 => 110,  352 => 108,  349 => 107,  336 => 105,  331 => 104,  329 => 103,  323 => 102,  319 => 101,  311 => 100,  306 => 99,  301 => 96,  295 => 94,  292 => 93,  286 => 91,  284 => 90,  281 => 89,  279 => 88,  276 => 87,  274 => 86,  268 => 82,  264 => 81,  257 => 76,  253 => 74,  247 => 73,  239 => 71,  231 => 69,  228 => 68,  224 => 67,  218 => 65,  214 => 63,  208 => 62,  200 => 60,  192 => 58,  189 => 57,  185 => 56,  179 => 54,  177 => 53,  171 => 49,  167 => 47,  161 => 46,  153 => 44,  145 => 42,  142 => 41,  138 => 40,  132 => 38,  128 => 36,  122 => 35,  114 => 33,  106 => 31,  103 => 30,  99 => 29,  93 => 27,  91 => 26,  82 => 22,  77 => 19,  72 => 17,  67 => 16,  62 => 14,  58 => 13,  54 => 12,  47 => 7,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira1/template/plaza/filter/category.twig", "");
    }
}
