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

/* tt_safira_houseware1/template/common/header.twig */
class __TwigTemplate_d69245477b5a004ca0727127d3c5617f31e641d29572187011f5f444b7a672e5 extends \Twig\Template
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
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 17
        if (($context["keywords"] ?? null)) {
            // line 18
            echo "<meta name=\"keywords\" content=\"";
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
<!-- end -->
<link href=\"catalog/view/theme/tt_safira_houseware1/stylesheet/stylesheet.css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/tt_safira_houseware1/stylesheet/plaza/header/header";
        // line 31
        echo ($context["header_layout"] ?? null);
        echo ".css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/tt_safira_houseware1/stylesheet/plaza/theme.css\" rel=\"stylesheet\">
<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" ></script>
<script src=\"catalog/view/javascript/jquery/swiper/js/swiper.min.js\" ></script>
";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 36
            echo "<script src=\"";
            echo $context["script"];
            echo "\" ></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "<script src=\"catalog/view/javascript/common.js\" ></script>
";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 40
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 40);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 40);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 43
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        if (($context["lazy_load"] ?? null)) {
            // line 46
            echo "<script src=\"catalog/view/javascript/plaza/lazyload/jquery.lazy.min.js\"></script>
";
        }
        // line 48
        echo "  <!-- Quick view -->
  ";
        // line 49
        if (($context["use_quick_view"] ?? null)) {
            // line 50
            echo "    <script src=\"catalog/view/javascript/plaza/cloudzoom/cloud-zoom.1.0.2.min.js\" ></script>
    <script src=\"catalog/view/javascript/plaza/cloudzoom/zoom.js\" ></script>
    <script src=\"catalog/view/javascript/plaza/quickview/quickview.js\" ></script>
    <link href=\"catalog/view/theme/tt_safira_houseware1/stylesheet/plaza/quickview/quickview.css\" rel=\"stylesheet\" type=\"text/css\" />
  ";
        }
        // line 55
        echo "  <!-- General -->
  <!-- Sticky Menu -->
  ";
        // line 57
        if (($context["sticky_header"] ?? null)) {
            // line 58
            echo "\t<script >
\t \$(document).ready(function () {\t
\t\tvar height_box_scroll = \$('.scroll-fix').outerHeight(true);
\t  \$(window).scroll(function () {
\t\tif (\$(this).scrollTop() > 800) {
\t\t\t\$('.scroll-fix').addClass(\"scroll-fixed\");
\t\t\t\$('body').css('padding-top',height_box_scroll);
\t\t} else {
\t\t\t\$('.scroll-fix').removeClass(\"scroll-fixed\");
\t\t\t\$('body').css('padding-top',0);
\t\t}
\t  });
\t});
\t</script>
  ";
        }
        // line 73
        echo "  <!-- Scroll Top -->
  ";
        // line 74
        if (($context["scroll_top"] ?? null)) {
            // line 75
            echo "    <script>
      \$(\"#back-top\").hide();
      \$(function () {
        \$(window).scroll(function () {
          if (\$(this).scrollTop() > \$('body').height()/3) {
            \$('#back-top').fadeIn();
          } else {
            \$('#back-top').fadeOut();
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
        // line 92
        echo "  
 
  <!-- Advance -->
  ";
        // line 95
        if (($context["custom_css"] ?? null)) {
            // line 96
            echo "    <style>
      ";
            // line 97
            echo ($context["custom_css"] ?? null);
            echo "
    </style>
  ";
        }
        // line 100
        echo "  ";
        if (($context["custom_js"] ?? null)) {
            // line 101
            echo "    <script>
      ";
            // line 102
            echo ($context["custom_js"] ?? null);
            echo "
    </script>
  ";
        }
        // line 105
        echo "  <!-- Bootstrap Js -->
  <script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" ></script>
</head>
<body class=\"";
        // line 108
        echo ($context["class"] ?? null);
        echo "\">
<input type=\"hidden\" id=\"hd-check-lazy\" value=\"";
        // line 109
        if (($context["lazy_load"] ?? null)) {
            echo "1";
        } else {
            echo "0";
        }
        echo "\" />
<div class=\"wrapper\">
";
        // line 111
        if (($context["scroll_top"] ?? null)) {
            // line 112
            echo "  <div id=\"back-top\"><i class=\"ion-chevron-up\"></i></div>
";
        }
        // line 114
        echo ($context["header"] ?? null);
    }

    public function getTemplateName()
    {
        return "tt_safira_houseware1/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 114,  281 => 112,  279 => 111,  270 => 109,  266 => 108,  261 => 105,  255 => 102,  252 => 101,  249 => 100,  243 => 97,  240 => 96,  238 => 95,  233 => 92,  214 => 75,  212 => 74,  209 => 73,  192 => 58,  190 => 57,  186 => 55,  179 => 50,  177 => 49,  174 => 48,  170 => 46,  168 => 45,  160 => 43,  156 => 42,  145 => 40,  141 => 39,  138 => 38,  129 => 36,  125 => 35,  118 => 31,  109 => 24,  96 => 22,  92 => 21,  89 => 20,  83 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_houseware1/template/common/header.twig", "");
    }
}
