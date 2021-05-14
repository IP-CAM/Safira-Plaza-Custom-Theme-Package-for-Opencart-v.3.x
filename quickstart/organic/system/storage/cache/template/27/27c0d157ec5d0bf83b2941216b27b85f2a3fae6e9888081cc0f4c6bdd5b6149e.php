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

/* tt_safira1/template/product/product.twig */
class __TwigTemplate_7bf252423f6ccced4d9a0e671eb7522ee6ad6a86528e64447e9cec0c5e1391ee extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<div id=\"product-product\" class=\"container\">
    <ul class=\"breadcrumb\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "            <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </ul>
    <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
        ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            echo "            ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "        ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "            ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "        ";
        } else {
            // line 14
            echo "            ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "        ";
        }
        // line 16
        echo "        <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
\t\t\t<div class=\"product-details\">\t
\t\t\t\t<div class=\"row\"> ";
        // line 18
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 19
            echo "\t\t\t\t\t\t";
            $context["class"] = "col-md-6 col-sm-12";
            // line 20
            echo "\t\t\t\t\t";
        } else {
            // line 21
            echo "\t\t\t\t\t\t";
            $context["class"] = "col-md-6 col-sm-12";
            // line 22
            echo "\t\t\t\t\t";
        }
        // line 23
        echo "\t\t\t\t\t<div class=\"";
        echo ($context["class"] ?? null);
        echo " product-image-details\">
\t\t\t\t\t\t";
        // line 24
        if (($context["use_zoom"] ?? null)) {
            // line 25
            echo "\t\t\t\t\t\t\t<input type=\"hidden\" id=\"check-use-zoom\" value=\"1\" />
\t\t\t\t\t\t\t<input type=\"hidden\" id=\"light-box-position\" value=\"1\" />
\t\t\t\t\t\t\t<input type=\"hidden\" id=\"product-identify\" value=\"";
            // line 27
            echo ($context["product_id"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t<div class=\"lightbox-container\"></div>
\t\t\t\t\t\t\t";
            // line 29
            if (($context["use_swatches"] ?? null)) {
                // line 30
                echo "\t\t\t\t\t\t\t\t<div class=\"product-zoom-image\">
\t\t\t\t\t\t\t\t\t";
                // line 31
                if (($context["thumb"] ?? null)) {
                    // line 32
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo ($context["popup"] ?? null);
                    echo "\" class=\"cloud-zoom main-image\" id=\"product-cloud-zoom\" style=\"width: ";
                    echo twig_get_attribute($this->env, $this->source, ($context["thumb_dimension"] ?? null), "width", [], "any", false, false, false, 32);
                    echo "px; height: ";
                    echo twig_get_attribute($this->env, $this->source, ($context["thumb_dimension"] ?? null), "height", [], "any", false, false, false, 32);
                    echo "px;\"
\t\t\t\t\t\t\t\t\t\t   rel=\"";
                    // line 33
                    if (twig_get_attribute($this->env, $this->source, ($context["product_zoom_settings"] ?? null), "title", [], "any", false, false, false, 33)) {
                        echo " showTitle: true ";
                    } else {
                        echo " showTitle: false ";
                    }
                    echo ",
\t\t\t\t\t\t\t\t\t\t\t\tzoomWidth:";
                    // line 34
                    echo twig_get_attribute($this->env, $this->source, ($context["thumb_dimension"] ?? null), "width", [], "any", false, false, false, 34);
                    echo ",zoomHeight:";
                    echo twig_get_attribute($this->env, $this->source, ($context["thumb_dimension"] ?? null), "height", [], "any", false, false, false, 34);
                    echo ",
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 35
                    if ((twig_get_attribute($this->env, $this->source, ($context["product_zoom_settings"] ?? null), "type", [], "any", false, false, false, 35) == "inner")) {
                        echo " position:'inside', adjustX: 0 ";
                    } else {
                        echo " adjustX: ";
                        echo twig_get_attribute($this->env, $this->source, ($context["product_zoom_settings"] ?? null), "space", [], "any", false, false, false, 35);
                        echo " ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 36
                    echo ($context["thumb"] ?? null);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 39
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"additional-container\">
\t\t\t\t\t\t\t\t\t<div class=\"swiper-viewport\">
\t\t\t\t\t\t\t\t\t\t<div class=\"additional-images swiper-container\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 44
                if (($context["images"] ?? null)) {
                    // line 45
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context["img_count"] = 2;
                    // line 46
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 47
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"cloud-zoom-gallery sub-image\" id=\"product-image-options-";
                        // line 48
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "product_option_value_id", [], "any", false, false, false, 48);
                        echo "\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 48);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   rel=\"useZoom: 'product-cloud-zoom', smallImage: '";
                        // line 49
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "product_image_option", [], "any", false, false, false, 49);
                        echo "'\" data-pos=\"";
                        echo ($context["img_count"] ?? null);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 50
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 50);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" alt=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 53
                        $context["img_count"] = (($context["img_count"] ?? null) + 1);
                        // line 54
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 55
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 56
                echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-pager\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-button-next additional-button-next\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-button-prev additional-button-prev\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            } else {
                // line 65
                echo "\t\t\t\t\t\t\t\t<div class=\"product-zoom-image\">
\t\t\t\t\t\t\t\t\t";
                // line 66
                if (($context["thumb"] ?? null)) {
                    // line 67
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo ($context["popup"] ?? null);
                    echo "\" class=\"cloud-zoom main-image\" id=\"product-cloud-zoom\" style=\"width: ";
                    echo twig_get_attribute($this->env, $this->source, ($context["thumb_dimension"] ?? null), "width", [], "any", false, false, false, 67);
                    echo "px; height: ";
                    echo twig_get_attribute($this->env, $this->source, ($context["thumb_dimension"] ?? null), "height", [], "any", false, false, false, 67);
                    echo "px;\"
\t\t\t\t\t\t\t\t\t\t   rel=\"";
                    // line 68
                    if (twig_get_attribute($this->env, $this->source, ($context["product_zoom_settings"] ?? null), "title", [], "any", false, false, false, 68)) {
                        echo " showTitle: true ";
                    } else {
                        echo " showTitle: false ";
                    }
                    echo ",
\t\t\t\t\t\t\t\t\t\t\t\tzoomWidth:";
                    // line 69
                    echo twig_get_attribute($this->env, $this->source, ($context["thumb_dimension"] ?? null), "width", [], "any", false, false, false, 69);
                    echo ",zoomHeight:";
                    echo twig_get_attribute($this->env, $this->source, ($context["thumb_dimension"] ?? null), "height", [], "any", false, false, false, 69);
                    echo ",
\t\t\t\t\t\t\t\t\t\t\t\tadjustX: ";
                    // line 70
                    echo twig_get_attribute($this->env, $this->source, ($context["product_zoom_settings"] ?? null), "space", [], "any", false, false, false, 70);
                    echo ",
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 71
                    if ((twig_get_attribute($this->env, $this->source, ($context["product_zoom_settings"] ?? null), "type", [], "any", false, false, false, 71) == "inner")) {
                        echo " position:'inside' ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 72
                    echo ($context["thumb"] ?? null);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                }
                // line 75
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"additional-container\">
\t\t\t\t\t\t\t\t<div class=\"swiper-viewport\">
\t\t\t\t\t\t\t\t\t<div class=\"additional-images swiper-container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 80
                if (($context["thumb"] ?? null)) {
                    // line 81
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"cloud-zoom-gallery sub-image\" href=\"";
                    // line 82
                    echo ($context["popup"] ?? null);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t   rel=\"useZoom: 'product-cloud-zoom', smallImage: '";
                    // line 83
                    echo ($context["thumb"] ?? null);
                    echo "'\" data-pos=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 84
                    echo ($context["small_image"] ?? null);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 88
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if (($context["images"] ?? null)) {
                    // line 89
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context["img_count"] = 2;
                    // line 90
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 91
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"cloud-zoom-gallery sub-image\" href=\"";
                        // line 92
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 92);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   rel=\"useZoom: 'product-cloud-zoom', smallImage: '";
                        // line 93
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "product_image_option", [], "any", false, false, false, 93);
                        echo "'\" data-pos=\"";
                        echo ($context["img_count"] ?? null);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 94
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 94);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" alt=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 97
                        $context["img_count"] = (($context["img_count"] ?? null) + 1);
                        // line 98
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 99
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 100
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"swiper-pager\">
\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-button-next additional-button-next\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-button-prev additional-button-prev\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 109
            echo "\t\t\t\t\t\t";
        } else {
            // line 110
            echo "\t\t\t\t\t\t\t<input type=\"hidden\" id=\"check-use-zoom\" value=\"0\" />
\t\t\t\t\t\t\t";
            // line 111
            if (($context["use_swatches"] ?? null)) {
                // line 112
                echo "\t\t\t\t\t\t\t\t";
                if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
                    // line 113
                    echo "\t\t\t\t\t\t\t\t\t<ul class=\"thumbnails\" id=\"swatches-image-container\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 114
                    if (($context["thumb"] ?? null)) {
                        // line 115
                        echo "\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"thumbnail swatches-image\" href=\"";
                        echo ($context["popup"] ?? null);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\"><img src=\"";
                        echo ($context["thumb"] ?? null);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" alt=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" /></a></li>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 117
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (($context["images"] ?? null)) {
                        // line 118
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                            // line 119
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"image-additional\"><a class=\"thumbnail\" href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 119);
                            echo "\" title=\"";
                            echo ($context["heading_title"] ?? null);
                            echo "\"> <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 119);
                            echo "\" title=\"";
                            echo ($context["heading_title"] ?? null);
                            echo "\" alt=\"";
                            echo ($context["heading_title"] ?? null);
                            echo "\" /></a></li>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 121
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 122
                    echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t";
                    // line 123
                    if (($context["thumb"] ?? null)) {
                        // line 124
                        echo "\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"product-image-default\" data-thumb=\"";
                        echo ($context["thumb"] ?? null);
                        echo "\" data-popup=\"";
                        echo ($context["popup"] ?? null);
                        echo "\" />
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 126
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($context["images"] ?? null)) {
                        // line 127
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                            // line 128
                            echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"product-image-options-";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "product_option_value_id", [], "any", false, false, false, 128);
                            echo "\" data-thumb=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "product_image_option", [], "any", false, false, false, 128);
                            echo "\" data-popup=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 128);
                            echo "\" />
\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 130
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    // line 131
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 132
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 133
                echo "\t\t\t\t\t\t\t\t";
                if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
                    // line 134
                    echo "\t\t\t\t\t\t\t\t\t<ul class=\"thumbnails\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 135
                    if (($context["thumb"] ?? null)) {
                        // line 136
                        echo "\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"thumbnail\" href=\"";
                        echo ($context["popup"] ?? null);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\"><img src=\"";
                        echo ($context["thumb"] ?? null);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" alt=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" /></a></li>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 138
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if (($context["images"] ?? null)) {
                        // line 139
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                            // line 140
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"image-additional\"><a class=\"thumbnail\" href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 140);
                            echo "\" title=\"";
                            echo ($context["heading_title"] ?? null);
                            echo "\"> <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 140);
                            echo "\" title=\"";
                            echo ($context["heading_title"] ?? null);
                            echo "\" alt=\"";
                            echo ($context["heading_title"] ?? null);
                            echo "\" /></a></li>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 142
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 143
                    echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t";
                }
                // line 145
                echo "\t\t\t\t\t\t\t";
            }
            // line 146
            echo "\t\t\t\t\t\t";
        }
        // line 147
        echo "\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 149
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 150
            echo "\t\t\t\t\t\t";
            $context["class"] = "col-md-6 col-sm-12";
            // line 151
            echo "\t\t\t\t\t";
        } else {
            // line 152
            echo "\t\t\t\t\t\t";
            $context["class"] = "col-md-6 col-sm-12";
            // line 153
            echo "\t\t\t\t\t";
        }
        // line 154
        echo "\t\t\t\t\t<div class=\"";
        echo ($context["class"] ?? null);
        echo " product-info-details\">
\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t
\t\t\t\t\t\t<h1>";
        // line 157
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t\t\t";
        // line 158
        if (($context["review_status"] ?? null)) {
            // line 159
            echo "\t\t\t\t\t\t\t";
            if (($context["rating"] ?? null)) {
                // line 160
                echo "\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t";
                // line 161
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 162
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if ((($context["rating"] ?? null) < $context["i"])) {
                        // line 163
                        echo "\t\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-o\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 165
                        echo "\t\t\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-x\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 167
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " 
\t\t\t\t\t\t\t\t\t<a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); \$('body,html').animate({scrollTop: \$('ul.nav-tabs').offset().top}, 800); return false;\">";
                // line 168
                echo ($context["reviews"] ?? null);
                echo "</a><a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); \$('body,html').animate({scrollTop: \$('ul.nav-tabs').offset().top}, 800); return false;\">";
                echo ($context["text_write"] ?? null);
                echo "</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 172
            echo "\t\t\t\t\t\t";
        }
        // line 173
        echo "\t\t\t\t\t\t";
        if ((($context["show_product_price"] ?? null) && ($context["price"] ?? null))) {
            // line 174
            echo "\t\t\t\t\t\t\t<p class=\"price\">
\t\t\t\t\t\t\t\t";
            // line 175
            if ( !($context["special"] ?? null)) {
                // line 176
                echo "\t\t\t\t\t\t\t\t\t";
                echo ($context["price"] ?? null);
                echo "
\t\t\t\t\t\t\t\t";
            } else {
                // line 178
                echo "\t\t\t\t\t\t\t\t\t<span class=\"price-new\">";
                echo ($context["special"] ?? null);
                echo "</span> <span class=\"price-old\">";
                echo ($context["price"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t";
            }
            // line 180
            echo "\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            // line 182
            if (((($context["special"] ?? null) && ($context["date_start"] ?? null)) && ($context["date_end"] ?? null))) {
                // line 183
                echo "\t\t\t\t\t\t\t\t<p class=\"text-countdown\">";
                echo ($context["text_countdown"] ?? null);
                echo "</p>
\t\t\t\t\t\t\t\t<div class=\"countdown-box countdown-product-";
                // line 184
                echo ($context["product_id"] ?? null);
                echo "\" data-id=\"";
                echo ($context["product_id"] ?? null);
                echo "\" data-date=\"";
                echo ($context["date_end"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t\t<b class=\"day\"></b><span>";
                // line 187
                echo ($context["text_days"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t\t<b class=\"hour\"></b><span>";
                // line 190
                echo ($context["text_hours"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t\t<b class=\"min\"></b><span>";
                // line 193
                echo ($context["text_mins"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t\t\t\t\t<b class=\"sec\"></b><span>";
                // line 196
                echo ($context["text_secs"] ?? null);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 201
            echo "\t\t\t\t\t\t";
        }
        // line 202
        echo "\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t";
        // line 203
        if (($context["manufacturer"] ?? null)) {
            // line 204
            echo "\t\t\t\t\t\t\t\t<li >";
            echo ($context["text_manufacturer"] ?? null);
            echo " <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t";
        }
        // line 206
        echo "\t\t\t\t\t\t\t<li>";
        echo ($context["text_model"] ?? null);
        echo " <span>";
        echo ($context["model"] ?? null);
        echo "</span></li>
\t\t\t\t\t\t\t";
        // line 207
        if (($context["reward"] ?? null)) {
            // line 208
            echo "\t\t\t\t\t\t\t\t<li>";
            echo ($context["text_reward"] ?? null);
            echo " <span>";
            echo ($context["reward"] ?? null);
            echo "</span></li>
\t\t\t\t\t\t\t";
        }
        // line 210
        echo "\t\t\t\t\t\t\t<li>";
        echo ($context["text_stock"] ?? null);
        echo " <span>";
        echo ($context["stock"] ?? null);
        echo "</span></li>
\t\t\t\t\t\t\t";
        // line 211
        if ((($context["show_product_tax"] ?? null) && ($context["tax"] ?? null))) {
            // line 212
            echo "\t\t\t\t\t\t\t\t<li>";
            echo ($context["text_tax"] ?? null);
            echo " <span>";
            echo ($context["tax"] ?? null);
            echo "</span></li>
\t\t\t\t\t\t\t";
        }
        // line 214
        echo "\t\t\t\t\t\t\t";
        if (($context["points"] ?? null)) {
            // line 215
            echo "\t\t\t\t\t\t\t\t<li>";
            echo ($context["text_points"] ?? null);
            echo " <span>";
            echo ($context["points"] ?? null);
            echo "</span></li>
\t\t\t\t\t\t\t";
        }
        // line 217
        echo "\t\t\t\t\t\t\t";
        if (($context["discounts"] ?? null)) {
            // line 218
            echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            // line 221
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                // line 222
                echo "\t\t\t\t\t\t\t\t\t<li>";
                echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 222);
                echo ($context["text_discount"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 222);
                echo "</li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 224
            echo "\t\t\t\t\t\t\t";
        }
        // line 225
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"product\"> ";
        // line 227
        if (((($context["show_product_button_cart"] ?? null) || ($context["show_product_options"] ?? null)) && ($context["options"] ?? null))) {
            // line 228
            echo "\t\t\t\t\t\t<div class=\"option-container\">
\t\t\t\t\t\t\t\t<h3>";
            // line 229
            echo ($context["text_option"] ?? null);
            echo "</h3>
\t\t\t\t\t\t\t\t";
            // line 230
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 231
                echo "\t\t\t\t\t\t\t\t\t";
                if (($context["use_swatches"] ?? null)) {
                    // line 232
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 232) == "select")) {
                        // line 233
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["option"], "option_id", [], "any", false, false, false, 233) == ($context["swatches_option"] ?? null))) {
                            // line 234
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                            if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 234)) {
                                echo " required ";
                            }
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                            // line 235
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 235);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 235);
                            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-swatches-colors\" data-product-option=\"";
                            // line 236
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 236);
                            echo "\" data-type=\"select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 237
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 237));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 238
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"swatches-options\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"swatches.changeOption(\$(this));\" title=\"";
                                // line 239
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 239);
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 239)) {
                                    echo "(";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 239);
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 239);
                                    echo ")";
                                }
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"";
                                // line 240
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 240)) {
                                    echo " width: ";
                                    echo ($context["icon_swatches_width"] ?? null);
                                    echo "px; height: ";
                                    echo ($context["icon_swatches_height"] ?? null);
                                    echo "px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                                    // line 241
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 241);
                                    echo "') ";
                                }
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdata-product-option-value-id=\"";
                                // line 242
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 242);
                                echo "\">";
                                if ( !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 242)) {
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 242);
                                    echo " ";
                                }
                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 245
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"swatches-info\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option[";
                            // line 247
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 247);
                            echo "]\" id=\"input-option";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 247);
                            echo "\" class=\"form-control option-swatches\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                            // line 248
                            echo ($context["text_select"] ?? null);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 249
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 249));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 250
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 250);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 250);
                                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 251
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 251)) {
                                    // line 252
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 252);
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 252);
                                    echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 253
                                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 255
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 258
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                            if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 258)) {
                                echo " required ";
                            }
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                            // line 259
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 259);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 259);
                            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option[";
                            // line 260
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 260);
                            echo "]\" id=\"input-option";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 260);
                            echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                            // line 261
                            echo ($context["text_select"] ?? null);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 262
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 262));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 263
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 263);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 263);
                                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 264
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 264)) {
                                    // line 265
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 265);
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 265);
                                    echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 266
                                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 268
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 271
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 272
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 272) == "radio")) {
                        // line 273
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["option"], "option_id", [], "any", false, false, false, 273) == ($context["swatches_option"] ?? null))) {
                            // line 274
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                            if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 274)) {
                                echo " required ";
                            }
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                            // line 275
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 275);
                            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-swatches-colors\" data-product-option=\"";
                            // line 276
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 276);
                            echo "\" data-type=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 277
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 277));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 278
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"swatches-options\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"swatches.changeOption(\$(this));\" title=\"";
                                // line 279
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 279);
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 279)) {
                                    echo "(";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 279);
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 279);
                                    echo ")";
                                }
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   style=\"";
                                // line 280
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 280)) {
                                    echo " width: ";
                                    echo ($context["icon_swatches_width"] ?? null);
                                    echo "px; height: ";
                                    echo ($context["icon_swatches_height"] ?? null);
                                    echo "px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                                    // line 281
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 281);
                                    echo "') ";
                                }
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   data-product-option-value-id=\"";
                                // line 282
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 282);
                                echo "\">";
                                if ( !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 282)) {
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 282);
                                    echo " ";
                                }
                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 285
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"swatches-info\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"option-swatches\" id=\"input-option";
                            // line 287
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 287);
                            echo "\"> ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 287));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 288
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"radio-option-value\" id=\"radio-option-value-";
                                // line 290
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 290);
                                echo "\" name=\"option[";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 290);
                                echo "]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 290);
                                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 291
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 291)) {
                                    echo " <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 291);
                                    echo "\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 291);
                                    echo " ";
                                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 291)) {
                                        echo " ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 291);
                                        echo " ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 291);
                                        echo " ";
                                    }
                                    echo "\" class=\"img-thumbnail\" /> ";
                                }
                                // line 292
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 292);
                                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 293
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 293)) {
                                    // line 294
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 294);
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 294);
                                    echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 295
                                echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 297
                            echo " </div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 300
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                            if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 300)) {
                                echo " required ";
                            }
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                            // line 301
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 301);
                            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"input-option";
                            // line 302
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 302);
                            echo "\"> ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 302));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 303
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"option[";
                                // line 305
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 305);
                                echo "]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 305);
                                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 306
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 306)) {
                                    echo " <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 306);
                                    echo "\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 306);
                                    echo " ";
                                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 306)) {
                                        echo " ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 306);
                                        echo " ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 306);
                                        echo " ";
                                    }
                                    echo "\" class=\"img-thumbnail\" /> ";
                                }
                                // line 307
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 307);
                                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 308
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 308)) {
                                    // line 309
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 309);
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 309);
                                    echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 310
                                echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 312
                            echo " </div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 315
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 316
                    echo "\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 317
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 317) == "select")) {
                        // line 318
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 318)) {
                            echo " required ";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                        // line 319
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 319);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 319);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option[";
                        // line 320
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 320);
                        echo "]\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 320);
                        echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                        // line 321
                        echo ($context["text_select"] ?? null);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 322
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 322));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 323
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 323);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 323);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 324
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 324)) {
                                // line 325
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 325);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 325);
                                echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 326
                            echo " </option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 328
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 331
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 331) == "radio")) {
                        // line 332
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 332)) {
                            echo " required ";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                        // line 333
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 333);
                        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"input-option";
                        // line 334
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 334);
                        echo "\"> ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 334));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 335
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"option[";
                            // line 337
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 337);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 337);
                            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 338
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 338)) {
                                echo " <img src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 338);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 338);
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 338)) {
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 338);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 338);
                                    echo " ";
                                }
                                echo "\" class=\"img-thumbnail\" /> ";
                            }
                            // line 339
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 339);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 340
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 340)) {
                                // line 341
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 341);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 341);
                                echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 342
                            echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 344
                        echo " </div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 347
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 348
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 348) == "checkbox")) {
                    // line 349
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 349)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 350
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 350);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"input-option";
                    // line 351
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 351);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 351));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 352
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                        // line 354
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 354);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 354);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 355
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 355)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 355);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 355);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 355)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 355);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 355);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 356
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 356);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 357
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 357)) {
                            // line 358
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 358);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 358);
                            echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 359
                        echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 361
                    echo " </div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 364
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 364) == "text")) {
                    // line 365
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 365)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 366
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 366);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 366);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 367
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 367);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 367);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 367);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 367);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 370
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 370) == "textarea")) {
                    // line 371
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 371)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 372
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 372);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 372);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"option[";
                    // line 373
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 373);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 373);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 373);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 373);
                    echo "</textarea>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 376
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 376) == "file")) {
                    // line 377
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 377)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 378
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 378);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-upload";
                    // line 379
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 379);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                    // line 380
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 380);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 380);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 383
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 383) == "date")) {
                    // line 384
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 384)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 385
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 385);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 385);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 387
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 387);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 387);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 387);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t<button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t</span></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 393
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 393) == "datetime")) {
                    // line 394
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 394)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 395
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 395);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 395);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 397
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 397);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 397);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 397);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t</span></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 403
                echo "\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 403) == "time")) {
                    // line 404
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 404)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 405
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 405);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 405);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 407
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 407);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 407);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 407);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t</span></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 413
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 414
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 416
        echo "\t\t\t\t\t\t\t";
        if (($context["recurrings"] ?? null)) {
            // line 417
            echo "\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<h3>";
            // line 418
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<select name=\"recurring_id\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
            // line 421
            echo ($context["text_select"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            // line 422
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 423
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 423);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 423);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 425
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<div class=\"help-block\" id=\"recurring-description\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 429
        echo "\t\t\t\t\t\t\t";
        if (($context["show_product_button_cart"] ?? null)) {
            // line 430
            echo "\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<!-- <label class=\"control-label\" for=\"input-quantity\">";
            // line 431
            echo ($context["entry_qty"] ?? null);
            echo "</label> -->
\t\t\t\t\t\t\t\t\t<div class=\"quantity-content\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"quantity\" value=\"";
            // line 433
            echo ($context["minimum"] ?? null);
            echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t<input type=\"button\" id=\"plus\" value=\"\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t<input type=\"button\" id=\"minus\" value=\"\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
            // line 437
            echo ($context["product_id"] ?? null);
            echo "\" />
\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-cart\" data-loading-text=\"";
            // line 438
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary btn-lg btn-block\">";
            echo ($context["button_cart"] ?? null);
            echo "</button>
\t\t\t\t\t\t\t";
        }
        // line 439
        echo "\t\t
\t\t\t\t\t\t\t\t\t";
        // line 440
        if ((($context["show_product_button_wishlist"] ?? null) || ($context["show_product_button_compare"] ?? null))) {
            // line 441
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 442
            if (($context["show_product_button_wishlist"] ?? null)) {
                // line 443
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\"  class=\"btn btn-default btn-wishlist\" title=\"";
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo ($context["product_id"] ?? null);
                echo "');\">";
                echo ($context["button_wishlist"] ?? null);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 445
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (($context["show_product_button_compare"] ?? null)) {
                // line 446
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\"  class=\"btn btn-default btn-compare\" title=\"";
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo ($context["product_id"] ?? null);
                echo "');\">";
                echo ($context["button_compare"] ?? null);
                echo "</button>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 448
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 450
        echo "\t\t\t\t\t\t\t";
        if (($context["show_product_button_cart"] ?? null)) {
            echo "\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 452
            if ((($context["minimum"] ?? null) > 1)) {
                // line 453
                echo "\t\t\t\t\t\t\t\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
                echo ($context["text_minimum"] ?? null);
                echo "</div>
\t\t\t\t\t\t\t\t";
            }
            // line 455
            echo "\t\t\t\t\t\t\t";
        }
        // line 456
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 457
        echo ($context["position10"] ?? null);
        echo "
\t\t\t\t\t\t<!-- ";
        // line 458
        if ((($context["show_product_tags"] ?? null) && ($context["tags"] ?? null))) {
            echo " -->
\t\t\t\t\t\t\t<!-- <p class=\"product-tags\">";
            // line 459
            echo ($context["text_tags"] ?? null);
            echo " -->
\t\t\t\t\t\t\t\t<!-- ";
            // line 460
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["tags"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo " -->
\t\t\t\t\t\t\t\t\t<!-- ";
                // line 461
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 461);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 461);
                    echo "</a>, -->
\t\t\t\t\t\t\t\t\t<!-- ";
                } else {
                    // line 462
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 462);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 462);
                    echo "</a> ";
                }
                echo " -->
\t\t\t\t\t\t\t\t<!-- ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 463
            echo " </p> -->
\t\t\t\t\t\t<!-- ";
        }
        // line 464
        echo " -->
\t\t\t\t\t\t";
        // line 465
        if (($context["show_product_social"] ?? null)) {
            // line 466
            echo "\t\t\t\t\t\t<!-- AddThis Button BEGIN -->
\t\t\t\t\t\t<div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
            // line 467
            echo ($context["share"] ?? null);
            echo "\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a> <a class=\"addthis_counter addthis_pill_style\"></a></div>
\t\t\t\t\t\t<script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script>
\t\t\t\t\t\t<!-- AddThis Button END -->
\t\t\t\t\t\t";
        }
        // line 470
        echo "\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
            ";
        // line 475
        echo ($context["content_bottom"] ?? null);
        echo "</div>
        ";
        // line 476
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<div class=\"product-info-details-more\">
\t<div class=\"container\">
\t\t<div class=\"inner\">
\t\t<ul class=\"nav nav-tabs\">
\t\t\t<li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 482
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
\t\t\t";
        // line 483
        if (($context["attribute_groups"] ?? null)) {
            // line 484
            echo "\t\t\t\t<li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
\t\t\t";
        }
        // line 486
        echo "\t\t\t";
        if (($context["review_status"] ?? null)) {
            // line 487
            echo "\t\t\t\t<li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
\t\t\t";
        }
        // line 489
        echo "\t\t</ul>
\t\t<div class=\"tab-content\">
\t\t\t<div class=\"tab-pane active\" id=\"tab-description\">";
        // line 491
        echo ($context["description"] ?? null);
        echo "</div>
\t\t\t";
        // line 492
        if (($context["attribute_groups"] ?? null)) {
            // line 493
            echo "\t\t\t\t<div class=\"tab-pane\" id=\"tab-specification\">
\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t";
            // line 495
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 496
                echo "\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"2\"><strong>";
                // line 498
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 498);
                echo "</strong></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
                // line 502
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 502));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 503
                    echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
                    // line 504
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 504);
                    echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                    // line 505
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 505);
                    echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 508
                echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 510
            echo "\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t";
        }
        // line 513
        echo "\t\t\t";
        if (($context["review_status"] ?? null)) {
            // line 514
            echo "\t\t\t\t<div class=\"tab-pane\" id=\"tab-review\">
\t\t\t\t\t<form class=\"form-horizontal\" id=\"form-review\">
\t\t\t\t\t\t<div id=\"review\"></div>
\t\t\t\t\t\t<h2>";
            // line 517
            echo ($context["text_write"] ?? null);
            echo "</h2>
\t\t\t\t\t\t";
            // line 518
            if (($context["review_guest"] ?? null)) {
                // line 519
                echo "\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-name\">";
                // line 521
                echo ($context["entry_name"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
                // line 522
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-review\">";
                // line 527
                echo ($context["entry_review"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t<textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t\t<div class=\"help-block\">";
                // line 529
                echo ($context["text_note"] ?? null);
                echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                // line 534
                echo ($context["entry_rating"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp; ";
                // line 535
                echo ($context["entry_bad"] ?? null);
                echo "&nbsp;
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rating\" value=\"1\" />
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rating\" value=\"2\" />
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rating\" value=\"3\" />
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rating\" value=\"4\" />
\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rating\" value=\"5\" />
\t\t\t\t\t\t\t\t\t&nbsp;";
                // line 545
                echo ($context["entry_good"] ?? null);
                echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                // line 547
                echo ($context["captcha"] ?? null);
                echo "
\t\t\t\t\t\t\t<div class=\"buttons clearfix\">
\t\t\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 550
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            } else {
                // line 554
                echo "\t\t\t\t\t\t\t";
                echo ($context["text_login"] ?? null);
                echo "
\t\t\t\t\t\t";
            }
            // line 556
            echo "\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t";
        }
        // line 559
        echo "\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 563
        if ((($context["show_product_related"] ?? null) && ($context["products"] ?? null))) {
            // line 564
            echo "\t<div class=\"container\">
\t\t<div class=\"related-module button-style-2 \">
\t\t\t<div class=\"block-title\">
\t\t\t\t<p>";
            // line 567
            echo ($context["text_description"] ?? null);
            echo "</p>
\t\t\t\t<h3><span>";
            // line 568
            echo ($context["text_related"] ?? null);
            echo "</span></h3>
\t\t\t</div>
\t\t\t<div class=\"pt-content\">
\t\t\t\t<div class=\"swiper-viewport\">
\t\t\t\t\t<div class=\"swiper-container related-slides\">
\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t";
            // line 574
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 575
                echo "\t\t\t\t\t\t\t\t<div class=\"product-thumb transition swiper-slide\">
\t\t\t\t\t\t\t\t\t<div class=\"product-item\">
\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 578
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 578);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 578);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 578);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 578);
                echo "\" class=\"img-responsive\" /></a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"button-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button-cart\" type=\"button\"  title=\"";
                // line 581
                echo ($context["button_cart"] ?? null);
                echo "\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 581);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 581);
                echo "');\"><span>";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" title=\"";
                // line 582
                echo ($context["button_quickview"] ?? null);
                echo "\" class=\"button-quickview\" onclick=\"ptquickview.ajaxView('";
                echo ($context["href"] ?? null);
                echo "')\"><span>";
                echo ($context["button_quickview"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button-wishlist\" type=\"button\"  title=\"";
                // line 583
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 583);
                echo "');\"><span>";
                echo ($context["button_wishlist"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"button-compare\" type=\"button\"  title=\"";
                // line 584
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 584);
                echo "');\"><span>";
                echo ($context["button_compare"] ?? null);
                echo "</span></button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t\t\t\t\t\t<!-- ";
                // line 589
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 589)) {
                    echo " -->
\t\t\t\t\t\t\t\t\t\t\t\t<!-- <div class=\"rating\"> ";
                    // line 590
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        echo " -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ";
                        // line 591
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 591) < $context["j"])) {
                            echo "  -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-o\"></i></span> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ";
                        } else {
                            // line 593
                            echo "  -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-x\"></i></span> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- ";
                        }
                        // line 595
                        echo " -->
\t\t\t\t\t\t\t\t\t\t\t\t<!-- ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 596
                    echo " </div> -->
\t\t\t\t\t\t\t\t\t\t\t<!-- ";
                }
                // line 597
                echo "\t -->
\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"";
                // line 598
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 598);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 598);
                echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 599
                if (twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 599)) {
                    // line 600
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"manufacture-product\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 601
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer_href", [], "any", false, false, false, 601);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 601);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 604
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 604)) {
                    // line 605
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 605)) {
                        // line 606
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 606);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 607
                        echo " <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 607);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 607);
                        echo "</span> ";
                    }
                    // line 608
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 608)) {
                        echo " <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 608);
                        echo "</span> ";
                    }
                    echo " </p>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 610
                echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<!--p>";
                // line 611
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 611);
                echo "</p-->
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 616
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"swiper-pager\">
\t\t\t\t\t\t<div class=\"swiper-button-next related-button-next\"></div>
\t\t\t\t\t\t<div class=\"swiper-button-prev related-button-prev\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 627
        echo "<script type=\"text/javascript\">
    \$(\".related-slides\").swiper({
        spaceBetween: 0,
        nextButton: '.related-button-next',
        prevButton: '.related-button-prev',
        speed: 300,
        slidesPerView: 4,
        slidesPerColumn: 1,
        autoplay: false,
        loop: false,
\t\t// Responsive breakpoints
\t\tbreakpoints: {
\t\t\t479: {
\t\t\t  slidesPerView: 1
\t\t\t},
\t\t\t767: {
\t\t\t  slidesPerView: 2
\t\t\t},
\t\t\t991: {
\t\t\t  slidesPerView: 3
\t\t\t  
\t\t\t},
\t\t\t1199: {
\t\t\t  slidesPerView: 3
\t\t\t  
\t\t\t}
\t\t}
    });
</script>
<script type=\"text/javascript\"><!--
    \$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
        \$.ajax({
            url: 'index.php?route=product/product/getRecurringDescription',
            type: 'post',
            data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
            dataType: 'json',
            beforeSend: function() {
                \$('#recurring-description').html('');
            },
            success: function(json) {
                \$('.alert-dismissible, .text-danger').remove();

                if (json['success']) {
                    \$('#recurring-description').html(json['success']);
                }
            }
        });
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('#button-cart').on('click', function() {
        \$.ajax({
            url: 'index.php?route=checkout/cart/add',
            type: 'post',
            data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
            dataType: 'json',
            beforeSend: function() {
                \$('#button-cart').button('loading');
            },
            complete: function() {
                \$('#button-cart').button('reset');
            },
            success: function(json) {
                \$('.alert-dismissible, .text-danger').remove();
                \$('.form-group').removeClass('has-error');

                if (json['error']) {
                    if (json['error']['option']) {
                        for (i in json['error']['option']) {
                            var element = \$('#input-option' + i.replace('_', '-'));

                            if (element.parent().hasClass('input-group')) {
                                element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                            } else {
                                element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
                            }
                        }
                    }

                    if (json['error']['recurring']) {
                        \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
                    }

                    // Highlight any found errors
                    \$('.text-danger').parent().addClass('has-error');
                }

                if (json['success']) {
                    \$('#content').parent().before('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                    \$('#cart > button').html('<span id=\"cart-total\">' + json['total'] + '</span>');

                    \$('html, body').animate({ scrollTop: 0 }, 'slow');

                    \$('#cart > ul').load('index.php?route=common/cart/info ul li');
\t\t\t\t\t\$('#cart').addClass(\"open\");
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('.date').datetimepicker({
        language: '";
        // line 733
        echo ($context["datepicker"] ?? null);
        echo "',
        pickTime: false
    });

    \$('.datetime').datetimepicker({
        language: '";
        // line 738
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: true,
        pickTime: true
    });

    \$('.time').datetimepicker({
        language: '";
        // line 744
        echo ($context["datepicker"] ?? null);
        echo "',
        pickDate: false
    });

    \$('button[id^=\\'button-upload\\']').on('click', function() {
        var node = this;

        \$('#form-upload').remove();

        \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

        \$('#form-upload input[name=\\'file\\']').trigger('click');

        if (typeof timer != 'undefined') {
            clearInterval(timer);
        }

        timer = setInterval(function() {
            if (\$('#form-upload input[name=\\'file\\']').val() != '') {
                clearInterval(timer);

                \$.ajax({
                    url: 'index.php?route=tool/upload',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData(\$('#form-upload')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        \$(node).button('loading');
                    },
                    complete: function() {
                        \$(node).button('reset');
                    },
                    success: function(json) {
                        \$('.text-danger').remove();

                        if (json['error']) {
                            \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
                        }

                        if (json['success']) {
                            alert(json['success']);

                            \$(node).parent().find('input').val(json['code']);
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });
            }
        }, 500);
    });
    //--></script>
<script type=\"text/javascript\"><!--
    \$('#review').delegate('.pagination a', 'click', function(e) {
        e.preventDefault();

        \$('#review').fadeOut('slow');

        \$('#review').load(this.href);

        \$('#review').fadeIn('slow');
    });

    \$('#review').load('index.php?route=product/product/review&product_id=";
        // line 811
        echo ($context["product_id"] ?? null);
        echo "');

    \$('#button-review').on('click', function() {
        \$.ajax({
            url: 'index.php?route=product/product/write&product_id=";
        // line 815
        echo ($context["product_id"] ?? null);
        echo "',
            type: 'post',
            dataType: 'json',
            data: \$(\"#form-review\").serialize(),
            beforeSend: function() {
                \$('#button-review').button('loading');
            },
            complete: function() {
                \$('#button-review').button('reset');
            },
            success: function(json) {
                \$('.alert-dismissible').remove();

                if (json['error']) {
                    \$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
                }

                if (json['success']) {
                    \$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

                    \$('input[name=\\'name\\']').val('');
                    \$('textarea[name=\\'text\\']').val('');
                    \$('input[name=\\'rating\\']:checked').prop('checked', false);
                }
            }
        });
    });

    ";
        // line 843
        if ( !($context["use_zoom"] ?? null)) {
            // line 844
            echo "    \$(document).ready(function() {
        \$('.thumbnails').magnificPopup({
            type:'image',
            delegate: 'a',
            gallery: {
                enabled: true
            }
        });
    });
    ";
        }
        // line 854
        echo "\tvar minimum = ";
        echo ($context["minimum"] ?? null);
        echo ";
\t\$(\"#product-product #input-quantity\").change(function(){
\t\tif (\$(this).val() < minimum) {
\t\t  alert(\"Minimum Quantity: \"+minimum);
\t\t  \$(\"#product-product #input-quantity\").val(minimum);
\t\t}
\t});
\t// increase number of product
\tfunction minus(minimum){
\t\tvar currentval = parseInt(\$(\"#product-product #input-quantity\").val());
\t\t\$(\"#product-product #input-quantity\").val(currentval-1);
\t\tif(\$(\"#product-product #input-quantity\").val() <= 0 || \$(\"#product-product #input-quantity\").val() < minimum){
\t\t  alert(\"Minimum Quantity: \"+minimum);
\t\t  \$(\"#product-product #input-quantity\").val(minimum);
\t\t}
\t};
\t// decrease of product
\tfunction plus(){
\t\tvar currentval = parseInt(\$(\"#product-product #input-quantity\").val());
\t\t\$(\"#product-product #input-quantity\").val(currentval+1);
\t};
\t\$('#product-product #minus').click(function(){
\t\tminus(minimum);
\t});
\t\$('#product-product #plus').click(function(){
\t\tplus();
\t});
    //--></script>
";
        // line 882
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "tt_safira1/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2416 => 882,  2384 => 854,  2372 => 844,  2370 => 843,  2339 => 815,  2332 => 811,  2262 => 744,  2253 => 738,  2245 => 733,  2137 => 627,  2124 => 616,  2113 => 611,  2110 => 610,  2098 => 608,  2091 => 607,  2085 => 606,  2082 => 605,  2079 => 604,  2071 => 601,  2068 => 600,  2066 => 599,  2060 => 598,  2057 => 597,  2053 => 596,  2046 => 595,  2041 => 593,  2035 => 591,  2029 => 590,  2025 => 589,  2013 => 584,  2005 => 583,  1997 => 582,  1987 => 581,  1975 => 578,  1970 => 575,  1966 => 574,  1957 => 568,  1953 => 567,  1948 => 564,  1946 => 563,  1940 => 559,  1935 => 556,  1929 => 554,  1920 => 550,  1914 => 547,  1909 => 545,  1896 => 535,  1892 => 534,  1884 => 529,  1879 => 527,  1871 => 522,  1867 => 521,  1863 => 519,  1861 => 518,  1857 => 517,  1852 => 514,  1849 => 513,  1844 => 510,  1837 => 508,  1828 => 505,  1824 => 504,  1821 => 503,  1817 => 502,  1810 => 498,  1806 => 496,  1802 => 495,  1798 => 493,  1796 => 492,  1792 => 491,  1788 => 489,  1782 => 487,  1779 => 486,  1773 => 484,  1771 => 483,  1767 => 482,  1758 => 476,  1754 => 475,  1747 => 470,  1740 => 467,  1737 => 466,  1735 => 465,  1732 => 464,  1728 => 463,  1715 => 462,  1706 => 461,  1700 => 460,  1696 => 459,  1692 => 458,  1688 => 457,  1685 => 456,  1682 => 455,  1676 => 453,  1674 => 452,  1668 => 450,  1664 => 448,  1654 => 446,  1651 => 445,  1641 => 443,  1639 => 442,  1636 => 441,  1634 => 440,  1631 => 439,  1624 => 438,  1620 => 437,  1613 => 433,  1608 => 431,  1605 => 430,  1602 => 429,  1596 => 425,  1585 => 423,  1581 => 422,  1577 => 421,  1571 => 418,  1568 => 417,  1565 => 416,  1561 => 414,  1555 => 413,  1542 => 407,  1535 => 405,  1528 => 404,  1525 => 403,  1512 => 397,  1505 => 395,  1498 => 394,  1495 => 393,  1482 => 387,  1475 => 385,  1468 => 384,  1465 => 383,  1457 => 380,  1449 => 379,  1445 => 378,  1438 => 377,  1435 => 376,  1423 => 373,  1417 => 372,  1410 => 371,  1407 => 370,  1395 => 367,  1389 => 366,  1382 => 365,  1379 => 364,  1374 => 361,  1366 => 359,  1359 => 358,  1357 => 357,  1352 => 356,  1336 => 355,  1330 => 354,  1326 => 352,  1320 => 351,  1316 => 350,  1309 => 349,  1306 => 348,  1303 => 347,  1298 => 344,  1290 => 342,  1283 => 341,  1281 => 340,  1276 => 339,  1260 => 338,  1254 => 337,  1250 => 335,  1244 => 334,  1240 => 333,  1233 => 332,  1230 => 331,  1225 => 328,  1218 => 326,  1211 => 325,  1209 => 324,  1202 => 323,  1198 => 322,  1194 => 321,  1188 => 320,  1182 => 319,  1175 => 318,  1172 => 317,  1169 => 316,  1166 => 315,  1161 => 312,  1153 => 310,  1146 => 309,  1144 => 308,  1139 => 307,  1123 => 306,  1117 => 305,  1113 => 303,  1107 => 302,  1103 => 301,  1096 => 300,  1091 => 297,  1083 => 295,  1076 => 294,  1074 => 293,  1069 => 292,  1053 => 291,  1045 => 290,  1041 => 288,  1035 => 287,  1031 => 285,  1016 => 282,  1010 => 281,  1002 => 280,  991 => 279,  988 => 278,  984 => 277,  980 => 276,  976 => 275,  969 => 274,  966 => 273,  963 => 272,  960 => 271,  955 => 268,  948 => 266,  941 => 265,  939 => 264,  932 => 263,  928 => 262,  924 => 261,  918 => 260,  912 => 259,  905 => 258,  900 => 255,  893 => 253,  886 => 252,  884 => 251,  877 => 250,  873 => 249,  869 => 248,  863 => 247,  859 => 245,  844 => 242,  838 => 241,  830 => 240,  819 => 239,  816 => 238,  812 => 237,  808 => 236,  802 => 235,  795 => 234,  792 => 233,  789 => 232,  786 => 231,  782 => 230,  778 => 229,  775 => 228,  773 => 227,  769 => 225,  766 => 224,  755 => 222,  751 => 221,  746 => 218,  743 => 217,  735 => 215,  732 => 214,  724 => 212,  722 => 211,  715 => 210,  707 => 208,  705 => 207,  698 => 206,  688 => 204,  686 => 203,  683 => 202,  680 => 201,  672 => 196,  666 => 193,  660 => 190,  654 => 187,  644 => 184,  639 => 183,  637 => 182,  633 => 180,  625 => 178,  619 => 176,  617 => 175,  614 => 174,  611 => 173,  608 => 172,  599 => 168,  591 => 167,  587 => 165,  583 => 163,  580 => 162,  576 => 161,  573 => 160,  570 => 159,  568 => 158,  564 => 157,  557 => 154,  554 => 153,  551 => 152,  548 => 151,  545 => 150,  543 => 149,  539 => 147,  536 => 146,  533 => 145,  529 => 143,  526 => 142,  509 => 140,  504 => 139,  501 => 138,  487 => 136,  485 => 135,  482 => 134,  479 => 133,  476 => 132,  473 => 131,  470 => 130,  457 => 128,  452 => 127,  449 => 126,  441 => 124,  439 => 123,  436 => 122,  433 => 121,  416 => 119,  411 => 118,  408 => 117,  394 => 115,  392 => 114,  389 => 113,  386 => 112,  384 => 111,  381 => 110,  378 => 109,  367 => 100,  364 => 99,  358 => 98,  356 => 97,  346 => 94,  340 => 93,  334 => 92,  331 => 91,  326 => 90,  323 => 89,  320 => 88,  309 => 84,  305 => 83,  299 => 82,  296 => 81,  294 => 80,  287 => 75,  277 => 72,  271 => 71,  267 => 70,  261 => 69,  253 => 68,  244 => 67,  242 => 66,  239 => 65,  228 => 56,  225 => 55,  219 => 54,  217 => 53,  207 => 50,  201 => 49,  193 => 48,  190 => 47,  185 => 46,  182 => 45,  180 => 44,  173 => 39,  163 => 36,  153 => 35,  147 => 34,  139 => 33,  130 => 32,  128 => 31,  125 => 30,  123 => 29,  118 => 27,  114 => 25,  112 => 24,  107 => 23,  104 => 22,  101 => 21,  98 => 20,  95 => 19,  93 => 18,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira1/template/product/product.twig", "");
    }
}
