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

/* tt_safira_houseware1/template/plaza/page_section/header_mobile.twig */
class __TwigTemplate_bf93d852b0b94d58a0535fc9b3573d36654e854aa30456287500884ae3333719 extends \Twig\Template
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
<!-- end icon font -->
<link href=\"catalog/view/theme/tt_safira_houseware1/stylesheet/stylesheet.css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/tt_safira_houseware1/stylesheet/plaza/header/header";
        // line 30
        echo ($context["header_layout"] ?? null);
        echo ".css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/tt_safira_houseware1/stylesheet/plaza/theme.css\" rel=\"stylesheet\">
<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" ></script>
<script src=\"catalog/view/javascript/jquery/swiper/js/swiper.min.js\" ></script>
";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 35
            echo "<script src=\"";
            echo $context["script"];
            echo "\" ></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "<script src=\"catalog/view/javascript/common.js\" ></script>
";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 39
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 39);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 39);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 42
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        if (($context["lazy_load"] ?? null)) {
            // line 45
            echo "<script src=\"catalog/view/javascript/plaza/lazyload/lazysizes.min.js\"></script>
";
        }
        // line 47
        echo "<!-- Sticky Menu -->
";
        // line 48
        if (($context["sticky_header"] ?? null)) {
            // line 49
            echo "<script >
 \$(document).ready(function () {\t
\tvar height_box_scroll = \$('.scroll-fix').outerHeight(true);
  \$(window).scroll(function () {
\tif (\$(this).scrollTop() > 400) {
\t\t\$('.scroll-fix').addClass(\"scroll-fixed\");
\t\t\$('body').css('padding-top',height_box_scroll);
\t} else {
\t\t\$('.scroll-fix').removeClass(\"scroll-fixed\");
\t\t\$('body').css('padding-top',0);
\t}
  });
});
</script>
";
        }
        // line 64
        echo "<!-- Scroll Top -->
";
        // line 65
        if (($context["scroll_top"] ?? null)) {
            // line 66
            echo "<script>
\$(\"#back-top\").hide();
\$(function () {
\$(window).scroll(function () {
  if (\$(this).scrollTop() > \$('body').height()/3) {
\t\$('#back-top').fadeIn();
  } else {
\t\$('#back-top').fadeOut();
  }
});
\$('#back-top').click(function () {
  \$('body,html').animate({scrollTop: 0}, 800);
  return false;
});
});
</script>
";
        }
        // line 83
        echo "<!-- Advance -->
";
        // line 84
        if (($context["custom_css"] ?? null)) {
            // line 85
            echo "<style>
";
            // line 86
            echo ($context["custom_css"] ?? null);
            echo "
</style>
";
        }
        // line 89
        if (($context["custom_js"] ?? null)) {
            // line 90
            echo "<script>
";
            // line 91
            echo ($context["custom_js"] ?? null);
            echo "
</script>
";
        }
        // line 94
        echo "<!-- Bootstrap Js -->
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" ></script>
</head>
<body class=\"";
        // line 97
        echo ($context["class"] ?? null);
        echo " mobile-layout\">

<div class=\"wrapper\">
";
        // line 100
        if (($context["scroll_top"] ?? null)) {
            // line 101
            echo "    <div id=\"back-top\"><i class=\"ion-chevron-up\"></i></div>
";
        }
        // line 103
        echo "<div id=\"header\">
\t<header class=\"scroll-fix \">
\t\t<div class=\"header-middle\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"box-inner\">
\t\t\t\t\t<div class=\"box-inner-inner\">
\t\t\t\t\t\t<div class=\"col-logo\">
\t\t\t\t\t\t\t";
        // line 110
        echo ($context["position3"] ?? null);
        echo "\t\t\t\t
\t\t\t\t\t\t\t<div id=\"logo\">
\t\t\t\t\t\t\t";
        // line 112
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
            // line 113
            echo "\t\t\t\t\t\t\t  <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
\t\t\t\t\t\t\t  ";
        }
        // line 115
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-cart\">
\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t<div class=\"box-setting btn-group\">
\t\t\t\t\t\t\t\t\t<button class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"ion-android-close\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<li class=\"currency\">
\t\t\t\t\t\t\t\t\t\t";
        // line 123
        if (($context["header_currency"] ?? null)) {
            // line 124
            echo "\t\t\t\t\t\t\t\t\t\t  ";
            echo ($context["currency"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 126
        echo "\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"language\">
\t\t\t\t\t\t\t\t\t\t";
        // line 128
        echo ($context["language"] ?? null);
        echo "
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li id=\"top-links\">
\t\t\t\t\t\t\t\t\t\t  <ul class=\"list-inline\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"";
        // line 132
        echo ($context["account"] ?? null);
        echo "\" title=\"";
        echo ($context["text_account"] ?? null);
        echo "\" ><i class=\"fa fa-user\"></i><span>";
        echo ($context["text_account"] ?? null);
        echo "</span><i class=\"icon-right ion-chevron-down\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t  <ul class=\"dropdown-menu-right pt-account\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 134
        if (($context["logged"] ?? null)) {
            // line 135
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 136
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 137
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 138
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a id=\"pt-logout-link\" href=\"";
            // line 139
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 141
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<li><a id=\"pt-register-link\" href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a id=\"pt-login-link\" href=\"";
            // line 142
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 144
        echo "\t\t\t\t\t\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"header-email\"><p><span>";
        // line 148
        echo ($context["email"] ?? null);
        echo "</span></p></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"header-phone\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
        // line 152
        echo ($context["text_call_us"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 153
        echo ($context["telephone"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<!--li><a href=\"";
        // line 158
        echo ($context["shopping_cart"] ?? null);
        echo "\" title=\"";
        echo ($context["text_shopping_cart"] ?? null);
        echo "\"><i class=\"fa fa-shopping-cart\"></i> <span>";
        echo ($context["text_shopping_cart"] ?? null);
        echo "</span></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 159
        echo ($context["checkout"] ?? null);
        echo "\" title=\"";
        echo ($context["text_checkout"] ?? null);
        echo "\"><i class=\"fa fa-share\"></i> <span>";
        echo ($context["text_checkout"] ?? null);
        echo "</span></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 160
        echo ($context["contact"] ?? null);
        echo "\" ><span>";
        echo ($context["text_hot_line"] ?? null);
        echo " ";
        echo ($context["telephone"] ?? null);
        echo "</span></a></li-->
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 163
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" ><span>";
        echo ($context["text_wishlist"] ?? null);
        echo "</span></a>
\t\t\t\t\t\t\t\t";
        // line 164
        if (($context["header_cart"] ?? null)) {
            echo ($context["cart"] ?? null);
        }
        // line 165
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-search\">";
        // line 168
        echo ($context["search"] ?? null);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t</header>
</div>";
    }

    public function getTemplateName()
    {
        return "tt_safira_houseware1/template/plaza/page_section/header_mobile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 168,  442 => 165,  438 => 164,  432 => 163,  422 => 160,  414 => 159,  406 => 158,  398 => 153,  394 => 152,  387 => 148,  381 => 144,  374 => 142,  367 => 141,  360 => 139,  354 => 138,  348 => 137,  342 => 136,  335 => 135,  333 => 134,  324 => 132,  317 => 128,  313 => 126,  307 => 124,  305 => 123,  295 => 115,  287 => 113,  275 => 112,  270 => 110,  261 => 103,  257 => 101,  255 => 100,  249 => 97,  244 => 94,  238 => 91,  235 => 90,  233 => 89,  227 => 86,  224 => 85,  222 => 84,  219 => 83,  200 => 66,  198 => 65,  195 => 64,  178 => 49,  176 => 48,  173 => 47,  169 => 45,  167 => 44,  159 => 42,  155 => 41,  144 => 39,  140 => 38,  137 => 37,  128 => 35,  124 => 34,  117 => 30,  109 => 24,  96 => 22,  92 => 21,  89 => 20,  83 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_houseware1/template/plaza/page_section/header_mobile.twig", "");
    }
}
