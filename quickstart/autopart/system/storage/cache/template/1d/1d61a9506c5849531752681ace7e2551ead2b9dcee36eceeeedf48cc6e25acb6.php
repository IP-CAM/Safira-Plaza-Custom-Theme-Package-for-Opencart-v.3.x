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

/* tt_safira_autopart3/template/plaza/page_section/header_mobile.twig */
class __TwigTemplate_203f0f404b205c72d05777fba48f4aa7ed278859bfea47ddc66b609da8ece0cc extends \Twig\Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<!--<![endif]-->
<head>
\t<meta charset=\"UTF-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
\t<base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\" />
\t";
        // line 14
        if (($context["description"] ?? null)) {
            // line 15
            echo "\t\t<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
\t";
        }
        // line 17
        echo "\t";
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "\t\t<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
\t";
        }
        // line 20
        echo "\t<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 22
            echo "\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 22);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 22);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 22);
            echo "\" />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t<link href=\"catalog/view/javascript/jquery/swiper/css/swiper.min.css\" rel=\"stylesheet\" type=\"text/css\" />
\t<!-- icon font -->
\t<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
\t<link href=\"catalog/view/javascript/ionicons/css/ionicons.css\" rel=\"stylesheet\" type=\"text/css\" />
\t<!-- end icon font -->
\t";
        // line 29
        if (($context["minify_css"] ?? null)) {
            // line 30
            echo "\t\t<link href=\"";
            echo ($context["minify_css_url"] ?? null);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
\t";
        }
        // line 32
        echo "\t";
        if ( !($context["minify_css"] ?? null)) {
            // line 33
            echo "\t\t<link href=\"catalog/view/theme/tt_safira_autopart3/stylesheet/stylesheet.css\" rel=\"stylesheet\">
\t\t<link href=\"catalog/view/theme/tt_safira_autopart3/stylesheet/plaza/header/header";
            // line 34
            echo ($context["header_layout"] ?? null);
            echo ".css\" rel=\"stylesheet\">
\t\t<link href=\"catalog/view/theme/tt_safira_autopart3/stylesheet/plaza/theme.css\" rel=\"stylesheet\">
\t\t<!-- Quick view -->
\t\t";
            // line 37
            if (($context["use_quick_view"] ?? null)) {
                // line 38
                echo "\t\t\t<link href=\"catalog/view/theme/tt_safira_autopart3/stylesheet/plaza/quickview/quickview.css\" rel=\"stylesheet\" type=\"text/css\" />
\t\t";
            }
            // line 40
            echo "\t\t<!-- Advance -->
\t\t";
            // line 41
            if (($context["custom_css"] ?? null)) {
                // line 42
                echo "\t\t\t<style>
\t\t\t\t";
                // line 43
                echo ($context["custom_css"] ?? null);
                echo "
\t\t\t</style>
\t\t";
            }
            // line 46
            echo "\t";
        }
        // line 47
        echo "\t";
        if (($context["minify_js"] ?? null)) {
            // line 48
            echo "\t\t<script src=\"";
            echo ($context["minify_js_url"] ?? null);
            echo "\" ></script>
\t";
        }
        // line 50
        echo "\t";
        if ( !($context["minify_js"] ?? null)) {
            // line 51
            echo "\t\t<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" ></script>
\t\t<!-- Bootstrap Js -->
\t\t<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" ></script>
\t\t<script src=\"catalog/view/javascript/jquery/swiper/js/swiper.min.js\" ></script>
\t";
            // line 55
            if (($context["lazy_load"] ?? null)) {
                // line 56
                echo "\t\t<script src=\"catalog/view/javascript/plaza/lazyload/lazysizes.min.js\"></script>
\t";
            }
            // line 58
            echo "\t";
            if (($context["use_quick_view"] ?? null)) {
                // line 59
                echo "\t\t<script src=\"catalog/view/javascript/plaza/cloudzoom/cloud-zoom.1.0.2.min.js\" ></script>
\t\t<script src=\"catalog/view/javascript/plaza/cloudzoom/zoom.js\" ></script>
\t\t<script src=\"catalog/view/javascript/plaza/quickview/quickview.js\" ></script>
\t";
            }
            // line 63
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
                // line 64
                echo "\t\t<script src=\"";
                echo $context["script"];
                echo "\" ></script>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "\t\t<script src=\"catalog/view/javascript/common.js\" ></script>
\t";
            // line 67
            if (($context["custom_js"] ?? null)) {
                // line 68
                echo "\t\t<script>
\t\t\t";
                // line 69
                echo ($context["custom_js"] ?? null);
                echo "
\t\t</script>
\t";
            }
            // line 72
            echo "\t";
        }
        // line 73
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 74
            echo "\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 74);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 74);
            echo "\" />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 77
            echo "\t\t";
            echo $context["analytic"];
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "</head>
<body class=\"";
        // line 80
        echo ($context["class"] ?? null);
        echo " mobile-layout\">
<input type=\"hidden\" id=\"hd-check-lazy\" value=\"";
        // line 81
        if (($context["lazy_load"] ?? null)) {
            echo "1";
        } else {
            echo "0";
        }
        echo "\" />
<input type=\"hidden\" id=\"hd-check-scroll-top\" value=\"";
        // line 82
        if (($context["scroll_top"] ?? null)) {
            echo "1";
        } else {
            echo "0";
        }
        echo "\" />
<input type=\"hidden\" id=\"hd-check-sticky-header-mobile\" value=\"";
        // line 83
        if (($context["sticky_header"] ?? null)) {
            echo "1";
        } else {
            echo "0";
        }
        echo "\" />
<div class=\"wrapper\">
\t";
        // line 85
        if (($context["scroll_top"] ?? null)) {
            // line 86
            echo "\t\t<div id=\"back-top\"><i class=\"ion-chevron-up\"></i></div>
\t";
        }
        // line 88
        echo "\t<div id=\"header\">
\t\t<header class=\"scroll-fix \">
\t\t\t<div class=\"header-middle\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"box-inner\">
\t\t\t\t\t\t<div class=\"box-inner-inner\">
\t\t\t\t\t\t\t<div class=\"col-logo\">
\t\t\t\t\t\t\t\t";
        // line 95
        echo ($context["position3"] ?? null);
        echo "
\t\t\t\t\t\t\t\t<div id=\"logo\">
\t\t\t\t\t\t\t\t\t";
        // line 97
        if (($context["logo"] ?? null)) {
            echo "<a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-responsive\" /></a>";
        } else {
            // line 98
            echo "\t\t\t\t\t\t\t\t\t\t<h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
\t\t\t\t\t\t\t\t\t";
        }
        // line 100
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-cart\">
\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t<div class=\"box-setting btn-group\">
\t\t\t\t\t\t\t\t\t\t<button class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"ion-android-close\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"currency\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 108
        if (($context["header_currency"] ?? null)) {
            // line 109
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            echo ($context["currency"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 111
        echo "\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"language\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 113
        echo ($context["language"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li id=\"top-links\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"";
        // line 117
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" ><i class=\"fa fa-user\"></i><span>";
        echo ($context["text_account"] ?? null);
        echo "</span><i class=\"icon-right ion-chevron-down\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu-right pt-account\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 119
        if (($context["logged"] ?? null)) {
            // line 120
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 121
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 122
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 123
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a id=\"pt-logout-link\" href=\"";
            // line 124
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 126
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a id=\"pt-register-link\" href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a id=\"pt-login-link\" href=\"";
            // line 127
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 129
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"header-email\"><p><span>";
        // line 133
        echo ($context["email"] ?? null);
        echo "</span></p></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"header-phone\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 137
        echo ($context["text_call_us"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 138
        echo ($context["telephone"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t<!--li><a href=\"";
        // line 143
        echo ($context["shopping_cart"] ?? null);
        echo "\" title=\"";
        echo ($context["text_shopping_cart"] ?? null);
        echo "\"><i class=\"fa fa-shopping-cart\"></i> <span>";
        echo ($context["text_shopping_cart"] ?? null);
        echo "</span></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 144
        echo ($context["checkout"] ?? null);
        echo "\" title=\"";
        echo ($context["text_checkout"] ?? null);
        echo "\"><i class=\"fa fa-share\"></i> <span>";
        echo ($context["text_checkout"] ?? null);
        echo "</span></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 145
        echo ($context["contact"] ?? null);
        echo "\" ><span>";
        echo ($context["text_hot_line"] ?? null);
        echo " ";
        echo ($context["telephone"] ?? null);
        echo "</span></a></li-->
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 148
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" ><span>";
        echo ($context["text_wishlist"] ?? null);
        echo "</span></a>
\t\t\t\t\t\t\t\t\t";
        // line 149
        if (($context["header_cart"] ?? null)) {
            echo ($context["cart"] ?? null);
        }
        // line 150
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-search\">";
        // line 153
        echo ($context["search"] ?? null);
        echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</header>
\t</div>";
    }

    public function getTemplateName()
    {
        return "tt_safira_autopart3/template/plaza/page_section/header_mobile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  478 => 153,  473 => 150,  469 => 149,  463 => 148,  453 => 145,  445 => 144,  437 => 143,  429 => 138,  425 => 137,  418 => 133,  412 => 129,  405 => 127,  398 => 126,  391 => 124,  385 => 123,  379 => 122,  373 => 121,  366 => 120,  364 => 119,  355 => 117,  348 => 113,  344 => 111,  338 => 109,  336 => 108,  326 => 100,  318 => 98,  306 => 97,  301 => 95,  292 => 88,  288 => 86,  286 => 85,  277 => 83,  269 => 82,  261 => 81,  257 => 80,  254 => 79,  245 => 77,  240 => 76,  229 => 74,  224 => 73,  221 => 72,  215 => 69,  212 => 68,  210 => 67,  207 => 66,  198 => 64,  193 => 63,  187 => 59,  184 => 58,  180 => 56,  178 => 55,  172 => 51,  169 => 50,  163 => 48,  160 => 47,  157 => 46,  151 => 43,  148 => 42,  146 => 41,  143 => 40,  139 => 38,  137 => 37,  131 => 34,  128 => 33,  125 => 32,  119 => 30,  117 => 29,  110 => 24,  97 => 22,  93 => 21,  90 => 20,  84 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_autopart3/template/plaza/page_section/header_mobile.twig", "");
    }
}
