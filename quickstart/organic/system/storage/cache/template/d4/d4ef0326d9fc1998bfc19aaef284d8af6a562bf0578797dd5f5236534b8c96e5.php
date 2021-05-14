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

/* tt_safira2/template/common/header.twig */
class __TwigTemplate_388d59f64468a8393cebec9b2a7edd0ce729c9f5713d1fbee206bee80cb01804 extends \Twig\Template
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
<link href=\"catalog/view/javascript/font-linearicons/css/style.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css?family=Playfair+Display:400,700,900\" rel=\"stylesheet\" type=\"text/css\" />
  <!-- end icon font -->
";
        // line 31
        if (($context["minify_css"] ?? null)) {
            // line 32
            echo "<link href=\"";
            echo ($context["minify_css_url"] ?? null);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
";
        }
        // line 34
        if ( !($context["minify_css"] ?? null)) {
            // line 35
            echo "<link href=\"catalog/view/theme/tt_safira2/stylesheet/stylesheet.css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/tt_safira2/stylesheet/plaza/header/header";
            // line 36
            echo ($context["header_layout"] ?? null);
            echo ".css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/tt_safira2/stylesheet/plaza/theme.css\" rel=\"stylesheet\">
<!-- Quick view -->
";
            // line 39
            if (($context["use_quick_view"] ?? null)) {
                // line 40
                echo "<link href=\"catalog/view/theme/tt_safira2/stylesheet/plaza/quickview/quickview.css\" rel=\"stylesheet\" type=\"text/css\" />
";
            }
            // line 42
            echo "<!-- Advance -->
";
            // line 43
            if (($context["custom_css"] ?? null)) {
                // line 44
                echo "<style>
";
                // line 45
                echo ($context["custom_css"] ?? null);
                echo "
</style>
";
            }
        }
        // line 49
        if (($context["minify_js"] ?? null)) {
            // line 50
            echo "<script src=\"";
            echo ($context["minify_js_url"] ?? null);
            echo "\" ></script>
";
        }
        // line 52
        if ( !($context["minify_js"] ?? null)) {
            // line 53
            echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" ></script>
<!-- Bootstrap Js -->
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" ></script>
<script src=\"catalog/view/javascript/jquery/swiper/js/swiper.min.js\" ></script>
";
            // line 57
            if (($context["lazy_load"] ?? null)) {
                // line 58
                echo "<script src=\"catalog/view/javascript/plaza/lazyload/lazysizes.min.js\"></script>
";
            }
            // line 60
            if (($context["use_quick_view"] ?? null)) {
                // line 61
                echo "<script src=\"catalog/view/javascript/plaza/cloudzoom/cloud-zoom.1.0.2.min.js\" ></script>
<script src=\"catalog/view/javascript/plaza/cloudzoom/zoom.js\" ></script>
<script src=\"catalog/view/javascript/plaza/quickview/quickview.js\" ></script>
";
            }
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
                // line 66
                echo "<script src=\"";
                echo $context["script"];
                echo "\" ></script>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "<script src=\"catalog/view/javascript/common.js\" ></script>
";
            // line 69
            if (($context["custom_js"] ?? null)) {
                // line 70
                echo "<script>
    ";
                // line 71
                echo ($context["custom_js"] ?? null);
                echo "
</script>
";
            }
        }
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 76
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 76);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 76);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 79
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "</head>
<body class=\"";
        // line 82
        echo ($context["class"] ?? null);
        echo "\">
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
<input type=\"hidden\" id=\"hd-check-sticky-header\" value=\"";
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
            echo "  <div id=\"back-top\"><i class=\"ion-chevron-up\"></i></div>
";
        }
        // line 90
        echo ($context["header"] ?? null);
    }

    public function getTemplateName()
    {
        return "tt_safira2/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 90,  277 => 88,  275 => 87,  266 => 85,  258 => 84,  250 => 83,  246 => 82,  243 => 81,  235 => 79,  231 => 78,  220 => 76,  216 => 75,  209 => 71,  206 => 70,  204 => 69,  201 => 68,  192 => 66,  188 => 65,  182 => 61,  180 => 60,  176 => 58,  174 => 57,  168 => 53,  166 => 52,  160 => 50,  158 => 49,  151 => 45,  148 => 44,  146 => 43,  143 => 42,  139 => 40,  137 => 39,  131 => 36,  128 => 35,  126 => 34,  120 => 32,  118 => 31,  109 => 24,  96 => 22,  92 => 21,  89 => 20,  83 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira2/template/common/header.twig", "");
    }
}
