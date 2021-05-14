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

/* tt_safira_book1/template/plaza/filter/category.twig */
class __TwigTemplate_7fe44fd2a38d6251df3bec3fd384d3b777b1e40896a14291be6c1d188aa67bf3 extends \Twig\Template
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
\t\t\t\t\t\t<button type=\"button\" onclick=\"category_view.changeView('grid', 5, 'btn-grid-5')\" class=\"btn btn-default btn-custom-view btn-grid-5\" data-toggle=\"tooltip\" title=\"5\">5</button>
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
\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t";
                    // line 89
                    if (($context["show_cate_label"] ?? null)) {
                        // line 90
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 91
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 91)) {
                            // line 92
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div><span class=\"pro-label sale\">";
                            echo (("-" . twig_get_attribute($this->env, $this->source, $context["product"], "rate_special", [], "any", false, false, false, 92)) . "%");
                            echo "</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 94
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 94)) {
                            // line 95
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div><span class=\"pro-label new\">";
                            echo ($context["text_new"] ?? null);
                            echo "</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 97
                        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 99
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 99);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<img  data-src=\"";
                    // line 100
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 100);
                    echo "\"  alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 100);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 100);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t class=\"lazyload img-responsive img-cate-";
                    // line 101
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 101);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                    // line 102
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 102);
                    echo "\" class=\"img-default-";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 102);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t";
                    // line 103
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "swatches_images", [], "any", false, false, false, 103)) {
                        // line 104
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "swatches_images", [], "any", false, false, false, 104));
                        foreach ($context['_seq'] as $context["_key"] => $context["s_image"]) {
                            // line 105
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["s_image"], "image", [], "any", false, false, false, 105);
                            echo "\" class=\"img-swatch-";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 105);
                            echo "-";
                            echo twig_get_attribute($this->env, $this->source, $context["s_image"], "product_option_value_id", [], "any", false, false, false, 105);
                            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s_image'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 107
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 108
                    echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                    // line 109
                    if ((((($context["show_cate_cart"] ?? null) || ($context["show_cate_wishlist"] ?? null)) || ($context["show_cate_compare"] ?? null)) || ($context["use_quick_view"] ?? null))) {
                        // line 110
                        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 113
                        if (($context["show_cate_cart"] ?? null)) {
                            // line 114
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-cart\"  title=\"";
                            echo ($context["button_cart"] ?? null);
                            echo "\" onclick=\"cart.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 114);
                            echo "', '";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 114);
                            echo "');\"><span>";
                            echo ($context["button_cart"] ?? null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 116
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (($context["show_cate_compare"] ?? null)) {
                            // line 117
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-compare\"  title=\"";
                            echo ($context["button_compare"] ?? null);
                            echo "\" onclick=\"compare.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 117);
                            echo "');\"><span>";
                            echo ($context["button_compare"] ?? null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 119
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (($context["show_cate_wishlist"] ?? null)) {
                            // line 120
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-wishlist\"  title=\"";
                            echo ($context["button_wishlist"] ?? null);
                            echo "\" onclick=\"wishlist.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 120);
                            echo "');\"><span>";
                            echo ($context["button_wishlist"] ?? null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 122
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (($context["use_quick_view"] ?? null)) {
                            // line 123
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button-quickview\" type=\"button\"  title=\"";
                            echo ($context["button_quickview"] ?? null);
                            echo "\" onclick=\"ptquickview.ajaxView('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 123);
                            echo "')\"><span>";
                            echo ($context["button_quickview"] ?? null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 125
                        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 128
                    echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                    // line 129
                    if ((($context["image_effect"] ?? null) == "swatches")) {
                        // line 130
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "options", [], "any", false, false, false, 130)) {
                            // line 131
                            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"category-options\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 132
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "options", [], "any", false, false, false, 132));
                            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                                // line 133
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-swatches-colors\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 134
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 134));
                                foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                    // line 135
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"swatches-options\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"swatches.changeSwatchInCategory(\$(this));\" title=\"";
                                    // line 136
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 136);
                                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   style=\"";
                                    // line 137
                                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 137)) {
                                        echo " width: ";
                                        echo ($context["icon_swatches_width"] ?? null);
                                        echo "px; height: ";
                                        echo ($context["icon_swatches_height"] ?? null);
                                        echo "px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                                        // line 138
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 138);
                                        echo "') ";
                                    }
                                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   data-product-id=\"";
                                    // line 139
                                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 139);
                                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   data-product-option-value-id=\"";
                                    // line 140
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 140);
                                    echo "\">";
                                    if ( !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 140)) {
                                        echo " ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 140);
                                        echo " ";
                                    }
                                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 143
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 145
                            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 147
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 148
                    echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t";
                } else {
                    // line 152
                    echo "\t\t\t\t\t\t\t<div class=\"image rotate-image-container\">
\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t";
                    // line 154
                    if (($context["show_cate_label"] ?? null)) {
                        // line 155
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-label\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 156
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 156)) {
                            // line 157
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div><span class=\"pro-label sale\">";
                            echo (("-" . twig_get_attribute($this->env, $this->source, $context["product"], "rate_special", [], "any", false, false, false, 157)) . "%");
                            echo "</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 159
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "is_new", [], "any", false, false, false, 159)) {
                            // line 160
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div><span class=\"pro-label new\">";
                            echo ($context["text_new"] ?? null);
                            echo "</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 162
                        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 164
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 164);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<img  data-src=\"";
                    // line 165
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 165);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 165);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 165);
                    echo "\" class=\"lazyload img-responsive img-default-image\" />
\t\t\t\t\t\t\t\t\t\t";
                    // line 166
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "rotate_image", [], "any", false, false, false, 166)) {
                        // line 167
                        echo "\t\t\t\t\t\t\t\t\t\t\t<img  data-src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "rotate_image", [], "any", false, false, false, 167);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 167);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 167);
                        echo "\" class=\"lazyload img-responsive img-rotate-image\" />
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 169
                    echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
                    // line 172
                    if ((((($context["show_cate_cart"] ?? null) || ($context["show_cate_wishlist"] ?? null)) || ($context["show_cate_compare"] ?? null)) || ($context["use_quick_view"] ?? null))) {
                        // line 173
                        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 175
                        if (($context["show_cate_cart"] ?? null)) {
                            // line 176
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-cart\"  title=\"";
                            echo ($context["button_cart"] ?? null);
                            echo "\" onclick=\"cart.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 176);
                            echo "', '";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 176);
                            echo "');\"><span>";
                            echo ($context["button_cart"] ?? null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 178
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 179
                        if (($context["show_cate_compare"] ?? null)) {
                            // line 180
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-compare\"  title=\"";
                            echo ($context["button_compare"] ?? null);
                            echo "\" onclick=\"compare.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 180);
                            echo "');\"><span>";
                            echo ($context["button_compare"] ?? null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 182
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (($context["show_cate_wishlist"] ?? null)) {
                            // line 183
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"button-wishlist\"  title=\"";
                            echo ($context["button_wishlist"] ?? null);
                            echo "\" onclick=\"wishlist.add('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 183);
                            echo "');\"><span>";
                            echo ($context["button_wishlist"] ?? null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 185
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (($context["use_quick_view"] ?? null)) {
                            // line 186
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button-quickview\" type=\"button\"  title=\"";
                            echo ($context["button_quickview"] ?? null);
                            echo "\" onclick=\"ptquickview.ajaxView('";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 186);
                            echo "')\"><span>";
                            echo ($context["button_quickview"] ?? null);
                            echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 188
                        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 191
                    echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 194
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
                // line 198
                if (twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 198)) {
                    // line 199
                    echo "\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 200
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer_href", [], "any", false, false, false, 200);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 200);
                    echo "</a>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t";
                }
                // line 203
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<h4><a href=\"";
                // line 204
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 204);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 204);
                echo "</a></h4>
\t\t\t\t\t\t\t\t";
                // line 205
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 205)) {
                    // line 206
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 207
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 208
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 208) < $context["i"])) {
                            // line 209
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-o\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 211
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-x\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 213
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 214
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 216
                echo "\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
                // line 217
                if ((($context["show_cate_price"] ?? null) && twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 217))) {
                    // line 218
                    echo "\t\t\t\t\t\t\t\t\t<p class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 218)) {
                        // line 219
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 219);
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 220
                        echo " <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 220);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 220);
                        echo "</span> ";
                    }
                    // line 221
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 221)) {
                        echo " <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 221);
                        echo "</span> ";
                    }
                    echo " </p>
\t\t\t\t\t\t\t\t";
                }
                // line 223
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                // line 225
                if (($context["show_cate_prodes"] ?? null)) {
                    // line 226
                    echo "\t\t\t\t\t\t\t\t\t<p class=\"product-description\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 226);
                    echo "</p>
\t\t\t\t\t\t\t\t";
                }
                // line 228
                echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 238
            echo "\t</div>
\t<div class=\"tool-bar-bottom\">
\t\t<div class=\"row \">
\t\t\t";
            // line 241
            if (($context["use_filter"] ?? null)) {
                // line 242
                echo "\t\t\t\t<div class=\"col-sm-6 text-left ajax_pagination\">";
                echo ($context["pt_pagination"] ?? null);
                echo "</div>
\t\t\t";
            } else {
                // line 244
                echo "\t\t\t\t<div class=\"col-sm-6 text-left\">";
                echo ($context["pagination"] ?? null);
                echo "</div>
\t\t\t";
            }
            // line 246
            echo "\t\t\t<div class=\"col-sm-6 text-right\">";
            echo ($context["results"] ?? null);
            echo "</div>
\t\t</div>
\t</div>
";
        }
        // line 250
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 251
            echo "    <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
    <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 253
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
    </div>
";
        }
        // line 256
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
        return "tt_safira_book1/template/plaza/filter/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  794 => 256,  786 => 253,  780 => 251,  778 => 250,  770 => 246,  764 => 244,  758 => 242,  756 => 241,  751 => 238,  736 => 228,  730 => 226,  728 => 225,  724 => 223,  712 => 221,  705 => 220,  699 => 219,  696 => 218,  694 => 217,  691 => 216,  687 => 214,  681 => 213,  677 => 211,  673 => 209,  670 => 208,  666 => 207,  663 => 206,  661 => 205,  655 => 204,  652 => 203,  644 => 200,  641 => 199,  639 => 198,  633 => 194,  628 => 191,  623 => 188,  613 => 186,  610 => 185,  600 => 183,  597 => 182,  587 => 180,  585 => 179,  582 => 178,  570 => 176,  568 => 175,  564 => 173,  562 => 172,  557 => 169,  547 => 167,  545 => 166,  537 => 165,  532 => 164,  528 => 162,  522 => 160,  519 => 159,  513 => 157,  511 => 156,  508 => 155,  506 => 154,  502 => 152,  496 => 148,  493 => 147,  489 => 145,  482 => 143,  467 => 140,  463 => 139,  457 => 138,  449 => 137,  445 => 136,  442 => 135,  438 => 134,  435 => 133,  431 => 132,  428 => 131,  425 => 130,  423 => 129,  420 => 128,  415 => 125,  405 => 123,  402 => 122,  392 => 120,  389 => 119,  379 => 117,  376 => 116,  364 => 114,  362 => 113,  357 => 110,  355 => 109,  352 => 108,  349 => 107,  336 => 105,  331 => 104,  329 => 103,  323 => 102,  319 => 101,  311 => 100,  306 => 99,  302 => 97,  296 => 95,  293 => 94,  287 => 92,  285 => 91,  282 => 90,  280 => 89,  276 => 87,  274 => 86,  268 => 82,  264 => 81,  257 => 76,  253 => 74,  247 => 73,  239 => 71,  231 => 69,  228 => 68,  224 => 67,  218 => 65,  214 => 63,  208 => 62,  200 => 60,  192 => 58,  189 => 57,  185 => 56,  179 => 54,  177 => 53,  171 => 49,  167 => 47,  161 => 46,  153 => 44,  145 => 42,  142 => 41,  138 => 40,  132 => 38,  128 => 36,  122 => 35,  114 => 33,  106 => 31,  103 => 30,  99 => 29,  93 => 27,  91 => 26,  82 => 22,  77 => 19,  72 => 17,  67 => 16,  62 => 14,  58 => 13,  54 => 12,  47 => 7,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_book1/template/plaza/filter/category.twig", "");
    }
}
