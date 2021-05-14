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

/* tt_safira2/template/plaza/page_section/header/header2.twig */
class __TwigTemplate_470bb400a1e88f09d324379aa9967f7d36ae0c39e2c32885c81a2138a0cd9974 extends \Twig\Template
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
        echo "<nav id=\"top\">
  <div class=\"container\">
    <div class=\"box-inner\">
\t\t<ul class=\"box-top box-top-left pull-left\">
\t\t\t<!--<li><a href=\"";
        // line 5
        echo ($context["contact"] ?? null);
        echo "\"><i class=\"fa fa-phone\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo ($context["telephone"] ?? null);
        echo "</span></a></li>
\t\t\t";
        // line 6
        if (($context["header_cart"] ?? null)) {
            // line 7
            echo "\t\t\t\t<li><a href=\"";
            echo ($context["shopping_cart"] ?? null);
            echo "\" title=\"";
            echo ($context["text_shopping_cart"] ?? null);
            echo "\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo ($context["text_shopping_cart"] ?? null);
            echo "</span></a></li>
\t\t\t\t<li><a href=\"";
            // line 8
            echo ($context["checkout"] ?? null);
            echo "\" title=\"";
            echo ($context["text_checkout"] ?? null);
            echo "\"><i class=\"fa fa-share\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo ($context["text_checkout"] ?? null);
            echo "</span></a></li>
\t\t\t";
        }
        // line 9
        echo " -->
\t\t\t<li class=\"language\">
\t\t\t";
        // line 11
        echo ($context["language"] ?? null);
        echo "
\t\t\t</li>
\t\t\t<li class=\"currency\">
\t\t\t";
        // line 14
        if (($context["header_currency"] ?? null)) {
            // line 15
            echo "\t\t\t  ";
            echo ($context["currency"] ?? null);
            echo "
\t\t\t";
        }
        // line 17
        echo "\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"box-top box-top-right pull-right\">
\t\t\t";
        // line 20
        echo ($context["position4"] ?? null);
        echo "
\t\t</ul>
\t</div>
  </div>
</nav>
<header class=\"scroll-fix\">
\t<div class=\"scroll-fix-container\">
\t\t<div class=\"container\">
\t\t\t<div class=\"box-inner\">
\t\t\t\t<div class=\"box-inner-inner\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-12\">
\t\t\t\t\t\t\t<div class=\"col-search\">";
        // line 32
        echo ($context["search"] ?? null);
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-logo col-md-4 col-sm-4 col-xs-6\">
\t\t\t\t\t\t\t";
        // line 35
        echo ($context["position3"] ?? null);
        echo "
\t\t\t\t\t\t\t<div id=\"logo\">
\t\t\t\t\t\t\t";
        // line 37
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
            // line 38
            echo "\t\t\t\t\t\t\t  <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
\t\t\t\t\t\t\t  ";
        }
        // line 40
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-4 col-xs-6\">
\t\t\t\t\t\t\t<div class=\"col-cart\">
\t\t\t\t\t\t\t\t<li id=\"top-links\" class=\"nav header-dropdown\">
\t\t\t\t\t\t\t\t  <ul class=\"list-inline\">
\t\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t  <ul class=\"dropdown-menu dropdown-menu-right pt-account\">
\t\t\t\t\t\t\t\t\t\t";
        // line 48
        if (($context["logged"] ?? null)) {
            // line 49
            echo "\t\t\t\t\t\t\t\t\t\t<li><a id=\"pt-logout-link\" href=\"";
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 51
            echo "\t\t\t\t\t\t\t\t\t\t<li><a id=\"pt-register-link\" href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a id=\"pt-login-link\" href=\"";
            // line 52
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 54
        echo "\t\t\t\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        // line 58
        if (($context["header_cart"] ?? null)) {
            echo ($context["cart"] ?? null);
        }
        // line 59
        echo "\t\t\t\t\t\t\t\t<a href=\"";
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" ><span>";
        echo ($context["text_wishlist"] ?? null);
        echo "</span></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"top-menu visible-lg\">
\t\t<div class=\"container\">
\t\t\t<div class=\"container-inner\">
\t\t\t\t<div class=\"col-ver\">";
        // line 70
        echo ($context["position1"] ?? null);
        echo "</div>
\t\t\t\t<div class=\"col-hoz\">";
        // line 71
        echo ($context["position2"] ?? null);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>
</header>";
    }

    public function getTemplateName()
    {
        return "tt_safira2/template/plaza/page_section/header/header2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 71,  199 => 70,  182 => 59,  178 => 58,  172 => 54,  165 => 52,  158 => 51,  150 => 49,  148 => 48,  138 => 40,  130 => 38,  118 => 37,  113 => 35,  107 => 32,  92 => 20,  87 => 17,  81 => 15,  79 => 14,  73 => 11,  69 => 9,  60 => 8,  51 => 7,  49 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira2/template/plaza/page_section/header/header2.twig", "");
    }
}
