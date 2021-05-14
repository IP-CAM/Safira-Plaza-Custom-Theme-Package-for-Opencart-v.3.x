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

/* tt_safira2/template/plaza/page_section/header_mobile.twig */
class __TwigTemplate_8253c5cafaac37f3513b4316110f9048d900a4844727a8ff1b2cc9490661ab1f extends \Twig\Template
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
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 13
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 14
        if (($context["description"] ?? null)) {
            // line 15
            echo "\t<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 17
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "\t<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 20
        echo "<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 22
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 22);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 22);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 22);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "<link href=\"catalog/view/javascript/jquery/swiper/css/swiper.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<!-- icon font -->
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/javascript/ionicons/css/ionicons.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/javascript/font-linearicons/css/style.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css?family=Playfair+Display:400,700,900\" rel=\"stylesheet\" type=\"text/css\" />
<!-- end icon font -->
\t";
        // line 31
        if (($context["minify_css"] ?? null)) {
            // line 32
            echo "\t\t<link href=\"";
            echo ($context["minify_css_url"] ?? null);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
\t";
        }
        // line 34
        echo "\t";
        if ( !($context["minify_css"] ?? null)) {
            // line 35
            echo "\t\t<link href=\"catalog/view/theme/tt_safira2/stylesheet/stylesheet.css\" rel=\"stylesheet\">
\t\t<link href=\"catalog/view/theme/tt_safira2/stylesheet/plaza/header/header";
            // line 36
            echo ($context["header_layout"] ?? null);
            echo ".css\" rel=\"stylesheet\">
\t\t<link href=\"catalog/view/theme/tt_safira2/stylesheet/plaza/theme.css\" rel=\"stylesheet\">
\t\t<!-- Quick view -->
\t\t";
            // line 39
            if (($context["use_quick_view"] ?? null)) {
                // line 40
                echo "\t\t\t<link href=\"catalog/view/theme/tt_safira2/stylesheet/plaza/quickview/quickview.css\" rel=\"stylesheet\" type=\"text/css\" />
\t\t";
            }
            // line 42
            echo "\t\t<!-- Advance -->
\t\t";
            // line 43
            if (($context["custom_css"] ?? null)) {
                // line 44
                echo "\t\t\t<style>
\t\t\t\t";
                // line 45
                echo ($context["custom_css"] ?? null);
                echo "
\t\t\t</style>
\t\t";
            }
            // line 48
            echo "\t";
        }
        // line 49
        echo "\t";
        if (($context["minify_js"] ?? null)) {
            // line 50
            echo "\t\t<script src=\"";
            echo ($context["minify_js_url"] ?? null);
            echo "\" ></script>
\t";
        }
        // line 52
        echo "\t";
        if ( !($context["minify_js"] ?? null)) {
            // line 53
            echo "\t\t<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" ></script>
\t\t<!-- Bootstrap Js -->
\t\t<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" ></script>
\t\t<script src=\"catalog/view/javascript/jquery/swiper/js/swiper.min.js\" ></script>
\t";
            // line 57
            if (($context["lazy_load"] ?? null)) {
                // line 58
                echo "\t\t<script src=\"catalog/view/javascript/plaza/lazyload/lazysizes.min.js\"></script>
\t";
            }
            // line 60
            echo "\t";
            if (($context["use_quick_view"] ?? null)) {
                // line 61
                echo "\t\t<script src=\"catalog/view/javascript/plaza/cloudzoom/cloud-zoom.1.0.2.min.js\" ></script>
\t\t<script src=\"catalog/view/javascript/plaza/cloudzoom/zoom.js\" ></script>
\t\t<script src=\"catalog/view/javascript/plaza/quickview/quickview.js\" ></script>
\t";
            }
            // line 65
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
                // line 66
                echo "\t\t<script src=\"";
                echo $context["script"];
                echo "\" ></script>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "\t\t<script src=\"catalog/view/javascript/common.js\" ></script>
\t";
            // line 69
            if (($context["custom_js"] ?? null)) {
                // line 70
                echo "\t\t<script>
\t\t\t";
                // line 71
                echo ($context["custom_js"] ?? null);
                echo "
\t\t</script>
\t";
            }
            // line 74
            echo "\t";
        }
        // line 75
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 76
            echo "\t\t<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 76);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 76);
            echo "\" />
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 79
            echo "\t\t";
            echo $context["analytic"];
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "</head>
<body class=\"";
        // line 82
        echo ($context["class"] ?? null);
        echo " mobile-layout\">
<input type=\"hidden\" id=\"hd-check-lazy\" value=\"";
        // line 83
        if (($context["lazy_load"] ?? null)) {
            echo "1";
        } else {
            echo "0";
        }
        echo "\" />
<input type=\"hidden\" id=\"hd-check-scroll-top\" value=\"";
        // line 84
        if (($context["scroll_top"] ?? null)) {
            echo "1";
        } else {
            echo "0";
        }
        echo "\" />
<input type=\"hidden\" id=\"hd-check-sticky-header-mobile\" value=\"";
        // line 85
        if (($context["sticky_header"] ?? null)) {
            echo "1";
        } else {
            echo "0";
        }
        echo "\" />
<div class=\"wrapper\">
";
        // line 87
        if (($context["scroll_top"] ?? null)) {
            // line 88
            echo "    <div id=\"back-top\"><i class=\"ion-chevron-up\"></i></div>
";
        }
        // line 90
        echo "<header class=\"scroll-fix\">
\t<div class=\"container\">
\t\t<div class=\"box-inner\">
\t\t\t<div class=\"box-inner-inner\">
\t\t\t\t";
        // line 94
        echo ($context["position3"] ?? null);
        echo "\t\t\t\t
\t\t\t\t<div id=\"logo\">
\t\t\t\t";
        // line 96
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
            // line 97
            echo "\t\t\t\t  <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
\t\t\t\t  ";
        }
        // line 99
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-cart\">
\t\t\t\t\t<div class=\"box-setting btn-group\">
\t\t\t\t\t\t<button class=\"dropdown-toggle\" data-toggle=\"dropdown\"></button>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li class=\"currency\">
\t\t\t\t\t\t\t";
        // line 105
        if (($context["header_currency"] ?? null)) {
            // line 106
            echo "\t\t\t\t\t\t\t  ";
            echo ($context["currency"] ?? null);
            echo "
\t\t\t\t\t\t\t";
        }
        // line 108
        echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"language\">
\t\t\t\t\t\t\t";
        // line 110
        echo ($context["language"] ?? null);
        echo "
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li id=\"top-links\">
\t\t\t\t\t\t\t  <ul class=\"list-inline\">
\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"";
        // line 114
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" ><i class=\"fa fa-user\"></i><span>";
        echo ($context["text_account"] ?? null);
        echo "</span><i class=\"icon-right ion-chevron-down\"></i></a>
\t\t\t\t\t\t\t\t  <ul class=\"dropdown-menu-right pt-account\">
\t\t\t\t\t\t\t\t\t";
        // line 116
        if (($context["logged"] ?? null)) {
            // line 117
            echo "\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 118
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 119
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 120
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a id=\"pt-logout-link\" href=\"";
            // line 121
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 123
            echo "\t\t\t\t\t\t\t\t\t<li><a id=\"pt-register-link\" href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t<li><a id=\"pt-login-link\" href=\"";
            // line 124
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t";
        }
        // line 126
        echo "\t\t\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"";
        // line 132
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" ><span>";
        echo ($context["text_wishlist"] ?? null);
        echo "</span></a>
\t\t\t\t\t";
        // line 133
        if (($context["header_cart"] ?? null)) {
            echo ($context["cart"] ?? null);
        }
        // line 134
        echo "\t\t\t\t</div>
\t\t\t</div>\t
\t\t\t<div class=\"col-search\">";
        // line 136
        echo ($context["search"] ?? null);
        echo "</div>\t
\t\t</div>
\t</div>
</header>
";
    }

    public function getTemplateName()
    {
        return "tt_safira2/template/plaza/page_section/header_mobile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 136,  426 => 134,  422 => 133,  416 => 132,  408 => 126,  401 => 124,  394 => 123,  387 => 121,  381 => 120,  375 => 119,  369 => 118,  362 => 117,  360 => 116,  351 => 114,  344 => 110,  340 => 108,  334 => 106,  332 => 105,  324 => 99,  316 => 97,  304 => 96,  299 => 94,  293 => 90,  289 => 88,  287 => 87,  278 => 85,  270 => 84,  262 => 83,  258 => 82,  255 => 81,  246 => 79,  241 => 78,  230 => 76,  225 => 75,  222 => 74,  216 => 71,  213 => 70,  211 => 69,  208 => 68,  199 => 66,  194 => 65,  188 => 61,  185 => 60,  181 => 58,  179 => 57,  173 => 53,  170 => 52,  164 => 50,  161 => 49,  158 => 48,  152 => 45,  149 => 44,  147 => 43,  144 => 42,  140 => 40,  138 => 39,  132 => 36,  129 => 35,  126 => 34,  120 => 32,  118 => 31,  109 => 24,  96 => 22,  92 => 21,  89 => 20,  83 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira2/template/plaza/page_section/header_mobile.twig", "");
    }
}
