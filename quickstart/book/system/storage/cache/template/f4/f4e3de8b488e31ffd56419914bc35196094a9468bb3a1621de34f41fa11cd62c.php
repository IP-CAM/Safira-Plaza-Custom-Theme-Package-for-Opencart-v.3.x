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

/* tt_safira_book1/template/plaza/quickview/product.twig */
class __TwigTemplate_0b1d6335cec05cd438425b6fb3be11c66672537d6da27cc317acadea8934dea1 extends \Twig\Template
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
        echo "<link href=\"catalog/view/javascript/jquery/magnific/magnific-popup.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
<link href=\"catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/jquery/magnific/jquery.magnific-popup.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js\" type=\"text/javascript\"></script>
<script src=\"catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
";
        // line 7
        if (($context["use_swatches"] ?? null)) {
            // line 8
            echo "<script src=\"catalog/view/javascript/plaza/swatches/swatches.js\" type=\"text/javascript\"></script>
";
        }
        // line 10
        if (($context["use_zoom"] ?? null)) {
            // line 11
            echo "<link href=\"catalog/view/theme/tt_safira_book1/stylesheet/plaza/product/zoom.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
<link href=\"catalog/view/javascript/plaza/cloudzoom/css/cloud-zoom.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
";
        }
        // line 14
        echo "<div class=\"product-details\">
\t<div class=\"row\">
\t\t<div class=\"col-sm-6 product-image-details\">
\t\t\t";
        // line 17
        if (($context["use_zoom"] ?? null)) {
            // line 18
            echo "\t\t\t\t<input type=\"hidden\" id=\"check-use-zoom\" value=\"1\" />
\t\t\t\t<input type=\"hidden\" id=\"light-box-position\" value=\"1\" />
\t\t\t\t<input type=\"hidden\" id=\"product-identify\" value=\"";
            // line 20
            echo ($context["product_id"] ?? null);
            echo "\" />
\t\t\t\t<div class=\"lightbox-container\"></div>
\t\t\t\t";
            // line 22
            if (($context["use_swatches"] ?? null)) {
                // line 23
                echo "\t\t\t\t\t<div class=\"product-zoom-image\">
\t\t\t\t\t\t";
                // line 24
                if (($context["thumb"] ?? null)) {
                    // line 25
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo ($context["popup"] ?? null);
                    echo "\" class=\"cloud-zoom main-image\" id=\"product-cloud-zoom\" style=\"width: ";
                    echo twig_get_attribute($this->env, $this->source, ($context["thumb_dimension"] ?? null), "width", [], "any", false, false, false, 25);
                    echo "px; height: ";
                    echo twig_get_attribute($this->env, $this->source, ($context["thumb_dimension"] ?? null), "height", [], "any", false, false, false, 25);
                    echo "px;\"
\t\t\t\t\t\t\t   rel=\"";
                    // line 26
                    if (twig_get_attribute($this->env, $this->source, ($context["product_zoom_settings"] ?? null), "title", [], "any", false, false, false, 26)) {
                        echo " showTitle: true ";
                    } else {
                        echo " showTitle: false ";
                    }
                    echo ",
\t\t\t\t\t\t\t\t\tzoomWidth:";
                    // line 27
                    echo twig_get_attribute($this->env, $this->source, ($context["thumb_dimension"] ?? null), "width", [], "any", false, false, false, 27);
                    echo ",zoomHeight:";
                    echo twig_get_attribute($this->env, $this->source, ($context["thumb_dimension"] ?? null), "height", [], "any", false, false, false, 27);
                    echo ",
\t\t\t\t\t\t\t\t\t";
                    // line 28
                    if ((twig_get_attribute($this->env, $this->source, ($context["product_zoom_settings"] ?? null), "type", [], "any", false, false, false, 28) == "inner")) {
                        echo " position:'inside', adjustX: 0 ";
                    } else {
                        echo " adjustX: ";
                        echo twig_get_attribute($this->env, $this->source, ($context["product_zoom_settings"] ?? null), "space", [], "any", false, false, false, 28);
                        echo " ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t<img  src=\"";
                    // line 29
                    echo ($context["thumb"] ?? null);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                }
                // line 32
                echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"additional-container\">
\t\t\t\t\t<div class=\"swiper-viewport\">
\t\t\t\t\t\t<div class=\"additional-images swiper-container\">
\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t";
                // line 37
                if (($context["images"] ?? null)) {
                    // line 38
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["img_count"] = 2;
                    // line 39
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 40
                        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"item swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"cloud-zoom-gallery sub-image\" id=\"product-image-options-";
                        // line 41
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "product_option_value_id", [], "any", false, false, false, 41);
                        echo "\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 41);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t\t   rel=\"useZoom: 'product-cloud-zoom', smallImage: '";
                        // line 42
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "product_image_option", [], "any", false, false, false, 42);
                        echo "'\" data-pos=\"";
                        echo ($context["img_count"] ?? null);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 43
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 43);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" alt=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                        // line 46
                        $context["img_count"] = (($context["img_count"] ?? null) + 1);
                        // line 47
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 48
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 49
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"swiper-pager\">
\t\t\t\t\t\t\t<div class=\"swiper-button-next additional-button-next\"></div>
\t\t\t\t\t\t\t<div class=\"swiper-button-prev additional-button-prev\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            } else {
                // line 58
                echo "\t\t\t\t\t<div class=\"product-zoom-image\">
\t\t\t\t\t\t";
                // line 59
                if (($context["thumb"] ?? null)) {
                    // line 60
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo ($context["popup"] ?? null);
                    echo "\" class=\"cloud-zoom main-image\" id=\"product-cloud-zoom\" style=\"width: ";
                    echo twig_get_attribute($this->env, $this->source, ($context["thumb_dimension"] ?? null), "width", [], "any", false, false, false, 60);
                    echo "px; height: ";
                    echo twig_get_attribute($this->env, $this->source, ($context["thumb_dimension"] ?? null), "height", [], "any", false, false, false, 60);
                    echo "px;\"
\t\t\t\t\t\t\t   rel=\"";
                    // line 61
                    if (twig_get_attribute($this->env, $this->source, ($context["product_zoom_settings"] ?? null), "title", [], "any", false, false, false, 61)) {
                        echo " showTitle: true ";
                    } else {
                        echo " showTitle: false ";
                    }
                    echo ",
\t\t\t\t\t\t\t\t\tzoomWidth:";
                    // line 62
                    echo twig_get_attribute($this->env, $this->source, ($context["thumb_dimension"] ?? null), "width", [], "any", false, false, false, 62);
                    echo ",zoomHeight:";
                    echo twig_get_attribute($this->env, $this->source, ($context["thumb_dimension"] ?? null), "height", [], "any", false, false, false, 62);
                    echo ",
\t\t\t\t\t\t\t\t\tadjustX: ";
                    // line 63
                    echo twig_get_attribute($this->env, $this->source, ($context["product_zoom_settings"] ?? null), "space", [], "any", false, false, false, 63);
                    echo ",
\t\t\t\t\t\t\t\t\t";
                    // line 64
                    if ((twig_get_attribute($this->env, $this->source, ($context["product_zoom_settings"] ?? null), "type", [], "any", false, false, false, 64) == "inner")) {
                        echo " position:'inside' ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                    // line 65
                    echo ($context["thumb"] ?? null);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                }
                // line 68
                echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"additional-container\">
\t\t\t\t\t\t<div class=\"swiper-viewport\">
\t\t\t\t\t\t\t<div class=\"additional-images swiper-container\">
\t\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t\t";
                // line 73
                if (($context["thumb"] ?? null)) {
                    // line 74
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"item swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"cloud-zoom-gallery sub-image\" href=\"";
                    // line 75
                    echo ($context["popup"] ?? null);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t   rel=\"useZoom: 'product-cloud-zoom', smallImage: '";
                    // line 76
                    echo ($context["thumb"] ?? null);
                    echo "'\" data-pos=\"1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 77
                    echo ($context["small_image"] ?? null);
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 81
                echo "\t\t\t\t\t\t\t\t\t";
                if (($context["images"] ?? null)) {
                    // line 82
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context["img_count"] = 2;
                    // line 83
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 84
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"item swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"cloud-zoom-gallery sub-image\" href=\"";
                        // line 85
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 85);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t   rel=\"useZoom: 'product-cloud-zoom', smallImage: '";
                        // line 86
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "product_image_option", [], "any", false, false, false, 86);
                        echo "'\" data-pos=\"";
                        echo ($context["img_count"] ?? null);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 87
                        echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 87);
                        echo "\" title=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" alt=\"";
                        echo ($context["heading_title"] ?? null);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 90
                        $context["img_count"] = (($context["img_count"] ?? null) + 1);
                        // line 91
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 92
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 93
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"swiper-pager\">
\t\t\t\t\t\t\t\t<div class=\"swiper-button-next additional-button-next\"></div>
\t\t\t\t\t\t\t\t<div class=\"swiper-button-prev additional-button-prev\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 102
            echo "\t\t\t";
        } else {
            // line 103
            echo "\t\t\t\t<input type=\"hidden\" id=\"check-use-zoom\" value=\"0\" />
\t\t\t\t";
            // line 104
            if (($context["use_swatches"] ?? null)) {
                // line 105
                echo "\t\t\t\t\t";
                if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
                    // line 106
                    echo "\t\t\t\t\t\t<ul class=\"thumbnails\" id=\"swatches-image-container\">
\t\t\t\t\t\t\t";
                    // line 107
                    if (($context["thumb"] ?? null)) {
                        // line 108
                        echo "\t\t\t\t\t\t\t\t<li><a class=\"thumbnail swatches-image\" href=\"";
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
\t\t\t\t\t\t\t";
                    }
                    // line 110
                    echo "\t\t\t\t\t\t\t";
                    if (($context["images"] ?? null)) {
                        // line 111
                        echo "\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                            // line 112
                            echo "\t\t\t\t\t\t\t\t\t<li class=\"image-additional\"><a class=\"thumbnail\" href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 112);
                            echo "\" title=\"";
                            echo ($context["heading_title"] ?? null);
                            echo "\"> <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 112);
                            echo "\" title=\"";
                            echo ($context["heading_title"] ?? null);
                            echo "\" alt=\"";
                            echo ($context["heading_title"] ?? null);
                            echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 114
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 115
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
                    // line 116
                    if (($context["thumb"] ?? null)) {
                        // line 117
                        echo "\t\t\t\t\t\t\t<input type=\"hidden\" id=\"product-image-default\" data-thumb=\"";
                        echo ($context["thumb"] ?? null);
                        echo "\" data-popup=\"";
                        echo ($context["popup"] ?? null);
                        echo "\" />
\t\t\t\t\t\t";
                    }
                    // line 119
                    echo "\t\t\t\t\t\t";
                    if (($context["images"] ?? null)) {
                        // line 120
                        echo "\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                            // line 121
                            echo "\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"product-image-options-";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "product_option_value_id", [], "any", false, false, false, 121);
                            echo "\" data-thumb=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "product_image_option", [], "any", false, false, false, 121);
                            echo "\" data-popup=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 121);
                            echo "\" />
\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 123
                        echo "\t\t\t\t\t\t";
                    }
                    // line 124
                    echo "\t\t\t\t\t";
                }
                // line 125
                echo "\t\t\t\t";
            } else {
                // line 126
                echo "\t\t\t\t\t";
                if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
                    // line 127
                    echo "\t\t\t\t\t\t<ul class=\"thumbnails\">
\t\t\t\t\t\t\t";
                    // line 128
                    if (($context["thumb"] ?? null)) {
                        // line 129
                        echo "\t\t\t\t\t\t\t\t<li><a class=\"thumbnail\" href=\"";
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
\t\t\t\t\t\t\t";
                    }
                    // line 131
                    echo "\t\t\t\t\t\t\t";
                    if (($context["images"] ?? null)) {
                        // line 132
                        echo "\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                            // line 133
                            echo "\t\t\t\t\t\t\t\t\t<li class=\"image-additional\"><a class=\"thumbnail\" href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 133);
                            echo "\" title=\"";
                            echo ($context["heading_title"] ?? null);
                            echo "\"> <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 133);
                            echo "\" title=\"";
                            echo ($context["heading_title"] ?? null);
                            echo "\" alt=\"";
                            echo ($context["heading_title"] ?? null);
                            echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 135
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 136
                    echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t";
                }
                // line 138
                echo "\t\t\t\t";
            }
            // line 139
            echo "\t\t\t";
        }
        // line 140
        echo "\t\t</div>
\t\t<div class=\"col-sm-6 product-info-details\">
\t\t\t<div class=\"inner\">
\t\t\t<h1><a href=\"";
        // line 143
        echo ($context["product_link"] ?? null);
        echo "\">";
        echo ($context["heading_title"] ?? null);
        echo "</a></h1>
\t\t\t";
        // line 144
        if (($context["review_status"] ?? null)) {
            // line 145
            echo "\t\t\t\t";
            if (($context["rating"] ?? null)) {
                // line 146
                echo "\t\t\t\t<div class=\"rating\">
\t\t\t\t\t";
                // line 147
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 148
                    echo "\t\t\t\t\t\t";
                    if ((($context["rating"] ?? null) < $context["i"])) {
                        // line 149
                        echo "\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-o\"></i></span>
\t\t\t\t\t\t";
                    } else {
                        // line 151
                        echo "\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-x\"></i></span>
\t\t\t\t\t\t";
                    }
                    // line 153
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " 
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 157
            echo "\t\t\t";
        }
        // line 158
        echo "\t\t\t
\t\t\t
\t\t\t";
        // line 160
        if ((($context["show_product_price"] ?? null) && ($context["price"] ?? null))) {
            // line 161
            echo "\t\t\t\t<p class=\"price\">
\t\t\t\t\t";
            // line 162
            if ( !($context["special"] ?? null)) {
                // line 163
                echo "\t\t\t\t\t\t";
                echo ($context["price"] ?? null);
                echo "
\t\t\t\t\t";
            } else {
                // line 165
                echo "\t\t\t\t\t\t<span class=\"price-new\">";
                echo ($context["special"] ?? null);
                echo "</span> <span class=\"price-old\">";
                echo ($context["price"] ?? null);
                echo "</span>
\t\t\t\t\t";
            }
            // line 167
            echo "\t\t\t\t</p>
\t\t\t";
        }
        // line 169
        echo "
\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t";
        // line 171
        if (($context["manufacturer"] ?? null)) {
            // line 172
            echo "\t\t\t\t\t<li class=\"manufacture-product\">";
            echo ($context["text_manufacturer"] ?? null);
            echo " <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
\t\t\t\t";
        }
        // line 174
        echo "\t\t\t\t<li>";
        echo ($context["text_model"] ?? null);
        echo " <span>";
        echo ($context["model"] ?? null);
        echo "</span></li>
\t\t\t\t";
        // line 175
        if (($context["reward"] ?? null)) {
            // line 176
            echo "\t\t\t\t\t<li>";
            echo ($context["text_reward"] ?? null);
            echo " <span>";
            echo ($context["reward"] ?? null);
            echo "</span></li>
\t\t\t\t";
        }
        // line 178
        echo "\t\t\t\t<li>";
        echo ($context["text_stock"] ?? null);
        echo " <span>";
        echo ($context["stock"] ?? null);
        echo "</span></li>
\t\t\t\t";
        // line 179
        if ((($context["show_product_tax"] ?? null) && ($context["tax"] ?? null))) {
            // line 180
            echo "\t\t\t\t\t<li>";
            echo ($context["text_tax"] ?? null);
            echo " <span>";
            echo ($context["tax"] ?? null);
            echo "</span></li>
\t\t\t\t";
        }
        // line 182
        echo "\t\t\t\t";
        if (($context["points"] ?? null)) {
            // line 183
            echo "\t\t\t\t\t<li>";
            echo ($context["text_points"] ?? null);
            echo " <span>";
            echo ($context["points"] ?? null);
            echo "</span></li>
\t\t\t\t";
        }
        // line 185
        echo "\t\t\t\t";
        if (($context["discounts"] ?? null)) {
            // line 186
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<hr>
\t\t\t\t\t</li>
\t\t\t\t\t";
            // line 189
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["discounts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                // line 190
                echo "\t\t\t\t\t\t<li>";
                echo twig_get_attribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 190);
                echo ($context["text_discount"] ?? null);
                echo twig_get_attribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 190);
                echo "</li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            echo "\t\t\t\t";
        }
        // line 193
        echo "\t\t\t</ul>
\t\t\t
\t\t\t<div id=\"product\">
\t\t\t\t";
        // line 196
        if (((($context["show_product_button_cart"] ?? null) || ($context["show_product_options"] ?? null)) && ($context["options"] ?? null))) {
            // line 197
            echo "\t\t\t\t\t
\t\t\t\t\t<h3>";
            // line 198
            echo ($context["text_option"] ?? null);
            echo "</h3>
\t\t\t\t\t";
            // line 199
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 200
                echo "\t\t\t\t\t\t";
                if (($context["use_swatches"] ?? null)) {
                    // line 201
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 201) == "select")) {
                        // line 202
                        echo "\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["option"], "option_id", [], "any", false, false, false, 202) == ($context["swatches_option"] ?? null))) {
                            // line 203
                            echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                            if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 203)) {
                                echo " required ";
                            }
                            echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                            // line 204
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 204);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 204);
                            echo "</label>
\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-swatches-colors\" data-product-option=\"";
                            // line 205
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 205);
                            echo "\" data-type=\"select\">
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 206
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 206));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 207
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"swatches-options\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"swatches.changeOption(\$(this));\" title=\"";
                                // line 208
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 208);
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 208)) {
                                    echo "(";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 208);
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 208);
                                    echo ")";
                                }
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t   style=\"";
                                // line 209
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 209)) {
                                    echo " width: ";
                                    echo ($context["icon_swatches_width"] ?? null);
                                    echo "px; height: ";
                                    echo ($context["icon_swatches_height"] ?? null);
                                    echo "px;
\t\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                                    // line 210
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 210);
                                    echo "') ";
                                }
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t   data-product-option-value-id=\"";
                                // line 211
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 211);
                                echo "\">";
                                if ( !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 211)) {
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 211);
                                    echo " ";
                                }
                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 214
                            echo "\t\t\t\t\t\t\t\t\t\t\t<li class=\"swatches-info\"></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<select name=\"option[";
                            // line 216
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 216);
                            echo "]\" id=\"input-option";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 216);
                            echo "\" class=\"form-control option-swatches\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                            // line 217
                            echo ($context["text_select"] ?? null);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 218
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 218));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 219
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 219);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 219);
                                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 220
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 220)) {
                                    // line 221
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 221);
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 221);
                                    echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 222
                                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 224
                            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 227
                            echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                            if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 227)) {
                                echo " required ";
                            }
                            echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                            // line 228
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 228);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 228);
                            echo "</label>
\t\t\t\t\t\t\t\t\t\t<select name=\"option[";
                            // line 229
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 229);
                            echo "]\" id=\"input-option";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 229);
                            echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                            // line 230
                            echo ($context["text_select"] ?? null);
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 231
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 231));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 232
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 232);
                                echo "\">";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 232);
                                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 233
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 233)) {
                                    // line 234
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 234);
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 234);
                                    echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 235
                                echo " </option>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 237
                            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                        }
                        // line 240
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 241
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 241) == "radio")) {
                        // line 242
                        echo "\t\t\t\t\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["option"], "option_id", [], "any", false, false, false, 242) == ($context["swatches_option"] ?? null))) {
                            // line 243
                            echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                            if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 243)) {
                                echo " required ";
                            }
                            echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                            // line 244
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 244);
                            echo "</label>
\t\t\t\t\t\t\t\t\t\t<ul class=\"ul-swatches-colors\" data-product-option=\"";
                            // line 245
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 245);
                            echo "\" data-type=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 246
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 246));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 247
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"swatches-options\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"swatches.changeOption(\$(this));\" title=\"";
                                // line 248
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 248);
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 248)) {
                                    echo "(";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 248);
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 248);
                                    echo ")";
                                }
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t   style=\"";
                                // line 249
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 249)) {
                                    echo " width: ";
                                    echo ($context["icon_swatches_width"] ?? null);
                                    echo "px; height: ";
                                    echo ($context["icon_swatches_height"] ?? null);
                                    echo "px;
\t\t\t\t\t\t\t\t\t\t\t\tbackground-image: url('";
                                    // line 250
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 250);
                                    echo "') ";
                                }
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t   data-product-option-value-id=\"";
                                // line 251
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 251);
                                echo "\">";
                                if ( !twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 251)) {
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 251);
                                    echo " ";
                                }
                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 254
                            echo "\t\t\t\t\t\t\t\t\t\t\t<li class=\"swatches-info\"></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"option-swatches\" id=\"input-option";
                            // line 256
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 256);
                            echo "\"> ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 256));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 257
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"radio-option-value\" id=\"radio-option-value-";
                                // line 259
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 259);
                                echo "\" name=\"option[";
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 259);
                                echo "]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 259);
                                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 260
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 260)) {
                                    echo " <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 260);
                                    echo "\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 260);
                                    echo " ";
                                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 260)) {
                                        echo " ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 260);
                                        echo " ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 260);
                                        echo " ";
                                    }
                                    echo "\" class=\"img-thumbnail\" /> ";
                                }
                                // line 261
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 261);
                                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 262
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 262)) {
                                    // line 263
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 263);
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 263);
                                    echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 264
                                echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 266
                            echo " </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 269
                            echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group";
                            if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 269)) {
                                echo " required ";
                            }
                            echo "\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                            // line 270
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 270);
                            echo "</label>
\t\t\t\t\t\t\t\t\t\t<div id=\"input-option";
                            // line 271
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 271);
                            echo "\"> ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 271));
                            foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                                // line 272
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"option[";
                                // line 274
                                echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 274);
                                echo "]\" value=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 274);
                                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 275
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 275)) {
                                    echo " <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 275);
                                    echo "\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 275);
                                    echo " ";
                                    if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 275)) {
                                        echo " ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 275);
                                        echo " ";
                                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 275);
                                        echo " ";
                                    }
                                    echo "\" class=\"img-thumbnail\" /> ";
                                }
                                // line 276
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 276);
                                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 277
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 277)) {
                                    // line 278
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 278);
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 278);
                                    echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 279
                                echo " </label>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 281
                            echo " </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                        }
                        // line 284
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 285
                    echo "\t\t\t\t\t\t";
                } else {
                    // line 286
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 286) == "select")) {
                        // line 287
                        echo "\t\t\t\t\t\t\t\t<div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 287)) {
                            echo " required ";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                        // line 288
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 288);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 288);
                        echo "</label>
\t\t\t\t\t\t\t\t\t<select name=\"option[";
                        // line 289
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 289);
                        echo "]\" id=\"input-option";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 289);
                        echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                        // line 290
                        echo ($context["text_select"] ?? null);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                        // line 291
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 291));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 292
                            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 292);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 292);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 293
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 293)) {
                                // line 294
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 294);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 294);
                                echo ")
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 295
                            echo " </option>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 297
                        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 300
                    echo "\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 300) == "radio")) {
                        // line 301
                        echo "\t\t\t\t\t\t\t\t<div class=\"form-group";
                        if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 301)) {
                            echo " required ";
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                        // line 302
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 302);
                        echo "</label>
\t\t\t\t\t\t\t\t\t<div id=\"input-option";
                        // line 303
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 303);
                        echo "\"> ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 303));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 304
                            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"option[";
                            // line 306
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 306);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 306);
                            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 307
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 307)) {
                                echo " <img src=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 307);
                                echo "\" alt=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 307);
                                echo " ";
                                if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 307)) {
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 307);
                                    echo " ";
                                    echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 307);
                                    echo " ";
                                }
                                echo "\" class=\"img-thumbnail\" /> ";
                            }
                            // line 308
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 308);
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 309
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 309)) {
                                // line 310
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 310);
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 310);
                                echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 311
                            echo " </label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 313
                        echo " </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 316
                    echo "\t\t\t\t\t\t";
                }
                // line 317
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 317) == "checkbox")) {
                    // line 318
                    echo "\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 318)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 319
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 319);
                    echo "</label>
\t\t\t\t\t\t\t\t<div id=\"input-option";
                    // line 320
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 320);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 320));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 321
                        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                        // line 323
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 323);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 323);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 324
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 324)) {
                            echo " <img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 324);
                            echo "\" alt=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 324);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 324)) {
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 324);
                                echo " ";
                                echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 324);
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 325
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo twig_get_attribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 325);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 326
                        if (twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 326)) {
                            // line 327
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 327);
                            echo twig_get_attribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 327);
                            echo ")
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 328
                        echo " </label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 330
                    echo " </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 333
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 333) == "text")) {
                    // line 334
                    echo "\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 334)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 335
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 335);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 335);
                    echo "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 336
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 336);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 336);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 336);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 336);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 339
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 339) == "textarea")) {
                    // line 340
                    echo "\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 340)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 341
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 341);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 341);
                    echo "</label>
\t\t\t\t\t\t\t\t<textarea name=\"option[";
                    // line 342
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 342);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 342);
                    echo "\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 342);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 342);
                    echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 345
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 345) == "file")) {
                    // line 346
                    echo "\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 346)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                    // line 347
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 347);
                    echo "</label>
\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-upload";
                    // line 348
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 348);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                    // line 349
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 349);
                    echo "]\" value=\"\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 349);
                    echo "\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 352
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 352) == "date")) {
                    // line 353
                    echo "\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 353)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 354
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 354);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 354);
                    echo "</label>
\t\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 356
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 356);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 356);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 356);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t<button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
\t\t</span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 362
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 362) == "datetime")) {
                    // line 363
                    echo "\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 363)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 364
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 364);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 364);
                    echo "</label>
\t\t\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 366
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 366);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 366);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 366);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t</span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 372
                echo "\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 372) == "time")) {
                    // line 373
                    echo "\t\t\t\t\t\t\t<div class=\"form-group";
                    if (twig_get_attribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 373)) {
                        echo " required ";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-option";
                    // line 374
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 374);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 374);
                    echo "</label>
\t\t\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 376
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 376);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 376);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 376);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t</span></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 382
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 383
            echo "\t\t\t\t";
        }
        // line 384
        echo "\t\t\t\t";
        if (($context["recurrings"] ?? null)) {
            // line 385
            echo "\t\t\t\t\t<hr>
\t\t\t\t\t<h3>";
            // line 386
            echo ($context["text_payment_recurring"] ?? null);
            echo "</h3>
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<select name=\"recurring_id\" class=\"form-control\">
\t\t\t\t\t\t\t<option value=\"\">";
            // line 389
            echo ($context["text_select"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t";
            // line 390
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 391
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 391);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 391);
                echo "</option>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 393
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<div class=\"help-block\" id=\"recurring-description\"></div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 397
        echo "\t\t\t\t";
        if (($context["show_product_button_cart"] ?? null)) {
            // line 398
            echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-quantity\">";
            // line 399
            echo ($context["entry_qty"] ?? null);
            echo "</label>
\t\t\t\t\t\t<input type=\"text\" name=\"quantity\" value=\"";
            // line 400
            echo ($context["minimum"] ?? null);
            echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\" />
\t\t\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
            // line 401
            echo ($context["product_id"] ?? null);
            echo "\" />
\t\t\t\t\t\t<button type=\"button\" id=\"button-cart\" data-loading-text=\"";
            // line 402
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary btn-lg btn-block\">";
            echo ($context["button_cart"] ?? null);
            echo "</button>
\t\t\t\t";
        }
        // line 403
        echo "\t\t
\t\t\t\t\t\t";
        // line 404
        if ((($context["show_product_button_wishlist"] ?? null) || ($context["show_product_button_compare"] ?? null))) {
            // line 405
            echo "\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t";
            // line 406
            if (($context["show_product_button_wishlist"] ?? null)) {
                // line 407
                echo "\t\t\t\t\t\t\t\t\t<button type=\"button\"  class=\"btn btn-default btn-wishlist\" title=\"";
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"addWishlist('";
                echo ($context["product_id"] ?? null);
                echo "');\">";
                echo ($context["button_wishlist"] ?? null);
                echo "</button>
\t\t\t\t\t\t\t\t";
            }
            // line 409
            echo "\t\t\t\t\t\t\t\t";
            if (($context["show_product_button_compare"] ?? null)) {
                // line 410
                echo "\t\t\t\t\t\t\t\t\t<button type=\"button\"  class=\"btn btn-default btn-compare\" title=\"";
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"addCompare('";
                echo ($context["product_id"] ?? null);
                echo "');\">";
                echo ($context["button_compare"] ?? null);
                echo "</button>
\t\t\t\t\t\t\t\t";
            }
            // line 412
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 414
        echo "\t\t\t\t";
        if (($context["show_product_button_cart"] ?? null)) {
            echo "\t\t
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 416
            if ((($context["minimum"] ?? null) > 1)) {
                // line 417
                echo "\t\t\t\t\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
                echo ($context["text_minimum"] ?? null);
                echo "</div>
\t\t\t\t\t";
            }
            // line 419
            echo "\t\t\t\t";
        }
        // line 420
        echo "\t\t\t</div>
\t\t\t
\t\t\t";
        // line 422
        if ((($context["show_product_tags"] ?? null) && ($context["tags"] ?? null))) {
            // line 423
            echo "\t\t\t\t<p class=\"product-tags\">";
            echo ($context["text_tags"] ?? null);
            echo "
\t\t\t\t\t";
            // line 424
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["tags"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 425
                echo "\t\t\t\t\t\t";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tags"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 425);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tags"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 425);
                    echo "</a>,
\t\t\t\t\t\t";
                } else {
                    // line 426
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 426);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 426);
                    echo "</a> ";
                }
                // line 427
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
\t\t\t";
        }
        // line 429
        echo "\t\t\t";
        if (($context["show_product_social"] ?? null)) {
            // line 430
            echo "\t\t\t<!-- AddThis Button BEGIN -->
\t\t\t<!--<div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
            // line 431
            echo ($context["share"] ?? null);
            echo "\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a> <a class=\"addthis_counter addthis_pill_style\"></a></div>
\t\t\t<script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script>-->
\t\t\t<!-- AddThis Button END -->
\t\t\t";
        }
        // line 434
        echo "\t
\t\t\t</div>
\t\t</div>
\t</div>
</div>
\t\t
<script type=\"text/javascript\"><!--
    \$('.cloud-zoom, .cloud-zoom-gallery').CloudZoom();

    ptzoom.initAdditionalImagesSlider();

    \$('.product-zoom-image').on('click', function () {
        var pos = \$('#light-box-position').val();

        ptzoom.openLightBox(pos);
    });

    \$('.sub-image').on('click', function () {
        var pos = \$(this).data('pos');
        \$('#light-box-position').val(pos);
    });

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
                    \$('#quickview-content').prepend('<div class=\"alert alert-fix alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                    \$('#cart > button').html('<span id=\"cart-total\">' + json['total'] + '</span>');

                    \$('.quickview-container').animate({ scrollTop: 0 }, 'slow');

                    \$('#cart > ul').load('index.php?route=common/cart/info ul li');
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
        
        pickTime: false
    });

    \$('.datetime').datetimepicker({
        
        pickDate: true,
        pickTime: true
    });

    \$('.time').datetimepicker({
        
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
        e.preventdefault();

        \$('#review').fadeOut('slow');

        \$('#review').load(this.href);

        \$('#review').fadeIn('slow');
    });

    \$('#review').load('index.php?route=product/product/review&product_id=";
        // line 609
        echo ($context["product_id"] ?? null);
        echo "');

    \$('#button-review').on('click', function() {
        \$.ajax({
            url: 'index.php?route=product/product/write&product_id=";
        // line 613
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

    \$(document).ready(function() {
        \$('.thumbnails').magnificPopup({
            type:'image',
            delegate: 'a',
            gallery: {
                enabled: true
            }
        });
    });
    
    function addWishlist(product_id) {
        \$.ajax({
            url: 'index.php?route=account/wishlist/add',
            type: 'post',
            data: 'product_id=' + product_id,
            dataType: 'json',
            success: function(json) {
                \$('.alert-dismissible').remove();

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['success']) {
                    \$('#quickview-content').prepend('<div class=\"alert alert-fix alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                }

                \$('#wishlist-total span').html(json['total']);
                \$('#wishlist-total').attr('title', json['total']);

                \$('.quickview-container').animate({ scrollTop: 0 }, 'slow');
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }
    
    function addCompare(product_id) {
        \$.ajax({
            url: 'index.php?route=product/compare/add',
            type: 'post',
            data: 'product_id=' + product_id,
            dataType: 'json',
            success: function(json) {
                \$('.alert-dismissible').remove();

                if (json['success']) {
                    \$('#quickview-content').prepend('<div class=\"alert alert-fix alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                    \$('#compare-total').html(json['total']);

                    \$('.quickview-container').animate({ scrollTop: 0 }, 'slow');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    }
//--></script>";
    }

    public function getTemplateName()
    {
        return "tt_safira_book1/template/plaza/quickview/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1804 => 613,  1797 => 609,  1620 => 434,  1613 => 431,  1610 => 430,  1607 => 429,  1598 => 427,  1591 => 426,  1581 => 425,  1577 => 424,  1572 => 423,  1570 => 422,  1566 => 420,  1563 => 419,  1557 => 417,  1555 => 416,  1549 => 414,  1545 => 412,  1535 => 410,  1532 => 409,  1522 => 407,  1520 => 406,  1517 => 405,  1515 => 404,  1512 => 403,  1505 => 402,  1501 => 401,  1497 => 400,  1493 => 399,  1490 => 398,  1487 => 397,  1481 => 393,  1470 => 391,  1466 => 390,  1462 => 389,  1456 => 386,  1453 => 385,  1450 => 384,  1447 => 383,  1441 => 382,  1428 => 376,  1421 => 374,  1414 => 373,  1411 => 372,  1398 => 366,  1391 => 364,  1384 => 363,  1381 => 362,  1368 => 356,  1361 => 354,  1354 => 353,  1351 => 352,  1343 => 349,  1335 => 348,  1331 => 347,  1324 => 346,  1321 => 345,  1309 => 342,  1303 => 341,  1296 => 340,  1293 => 339,  1281 => 336,  1275 => 335,  1268 => 334,  1265 => 333,  1260 => 330,  1252 => 328,  1245 => 327,  1243 => 326,  1238 => 325,  1222 => 324,  1216 => 323,  1212 => 321,  1206 => 320,  1202 => 319,  1195 => 318,  1192 => 317,  1189 => 316,  1184 => 313,  1176 => 311,  1169 => 310,  1167 => 309,  1162 => 308,  1146 => 307,  1140 => 306,  1136 => 304,  1130 => 303,  1126 => 302,  1119 => 301,  1116 => 300,  1111 => 297,  1104 => 295,  1097 => 294,  1095 => 293,  1088 => 292,  1084 => 291,  1080 => 290,  1074 => 289,  1068 => 288,  1061 => 287,  1058 => 286,  1055 => 285,  1052 => 284,  1047 => 281,  1039 => 279,  1032 => 278,  1030 => 277,  1025 => 276,  1009 => 275,  1003 => 274,  999 => 272,  993 => 271,  989 => 270,  982 => 269,  977 => 266,  969 => 264,  962 => 263,  960 => 262,  955 => 261,  939 => 260,  931 => 259,  927 => 257,  921 => 256,  917 => 254,  902 => 251,  896 => 250,  888 => 249,  877 => 248,  874 => 247,  870 => 246,  866 => 245,  862 => 244,  855 => 243,  852 => 242,  849 => 241,  846 => 240,  841 => 237,  834 => 235,  827 => 234,  825 => 233,  818 => 232,  814 => 231,  810 => 230,  804 => 229,  798 => 228,  791 => 227,  786 => 224,  779 => 222,  772 => 221,  770 => 220,  763 => 219,  759 => 218,  755 => 217,  749 => 216,  745 => 214,  730 => 211,  724 => 210,  716 => 209,  705 => 208,  702 => 207,  698 => 206,  694 => 205,  688 => 204,  681 => 203,  678 => 202,  675 => 201,  672 => 200,  668 => 199,  664 => 198,  661 => 197,  659 => 196,  654 => 193,  651 => 192,  640 => 190,  636 => 189,  631 => 186,  628 => 185,  620 => 183,  617 => 182,  609 => 180,  607 => 179,  600 => 178,  592 => 176,  590 => 175,  583 => 174,  573 => 172,  571 => 171,  567 => 169,  563 => 167,  555 => 165,  549 => 163,  547 => 162,  544 => 161,  542 => 160,  538 => 158,  535 => 157,  524 => 153,  520 => 151,  516 => 149,  513 => 148,  509 => 147,  506 => 146,  503 => 145,  501 => 144,  495 => 143,  490 => 140,  487 => 139,  484 => 138,  480 => 136,  477 => 135,  460 => 133,  455 => 132,  452 => 131,  438 => 129,  436 => 128,  433 => 127,  430 => 126,  427 => 125,  424 => 124,  421 => 123,  408 => 121,  403 => 120,  400 => 119,  392 => 117,  390 => 116,  387 => 115,  384 => 114,  367 => 112,  362 => 111,  359 => 110,  345 => 108,  343 => 107,  340 => 106,  337 => 105,  335 => 104,  332 => 103,  329 => 102,  318 => 93,  315 => 92,  309 => 91,  307 => 90,  297 => 87,  291 => 86,  285 => 85,  282 => 84,  277 => 83,  274 => 82,  271 => 81,  260 => 77,  256 => 76,  250 => 75,  247 => 74,  245 => 73,  238 => 68,  228 => 65,  222 => 64,  218 => 63,  212 => 62,  204 => 61,  195 => 60,  193 => 59,  190 => 58,  179 => 49,  176 => 48,  170 => 47,  168 => 46,  158 => 43,  152 => 42,  144 => 41,  141 => 40,  136 => 39,  133 => 38,  131 => 37,  124 => 32,  114 => 29,  104 => 28,  98 => 27,  90 => 26,  81 => 25,  79 => 24,  76 => 23,  74 => 22,  69 => 20,  65 => 18,  63 => 17,  58 => 14,  53 => 11,  51 => 10,  47 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_book1/template/plaza/quickview/product.twig", "");
    }
}
