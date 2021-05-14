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

/* tt_safira_book4/template/common/header.twig */
class __TwigTemplate_fd377cf5b4c678d5326fa3d90081828c8304f6c37de91b5899a87adc9d229767 extends \Twig\Template
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
";
        // line 29
        if (($context["minify_css"] ?? null)) {
            // line 30
            echo "<link href=\"";
            echo ($context["minify_css_url"] ?? null);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
";
        }
        // line 32
        if ( !($context["minify_css"] ?? null)) {
            // line 33
            echo "<link href=\"catalog/view/theme/tt_safira_book4/stylesheet/stylesheet.css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/tt_safira_book4/stylesheet/plaza/header/header";
            // line 34
            echo ($context["header_layout"] ?? null);
            echo ".css\" rel=\"stylesheet\">
<link href=\"catalog/view/theme/tt_safira_book4/stylesheet/plaza/theme.css\" rel=\"stylesheet\">
<!-- Quick view -->
";
            // line 37
            if (($context["use_quick_view"] ?? null)) {
                // line 38
                echo "<link href=\"catalog/view/theme/tt_safira_book4/stylesheet/plaza/quickview/quickview.css\" rel=\"stylesheet\" type=\"text/css\" />
";
            }
            // line 40
            echo "<!-- Advance -->
";
            // line 41
            if (($context["custom_css"] ?? null)) {
                // line 42
                echo "<style>
";
                // line 43
                echo ($context["custom_css"] ?? null);
                echo "
</style>
";
            }
        }
        // line 47
        if (($context["minify_js"] ?? null)) {
            // line 48
            echo "<script src=\"";
            echo ($context["minify_js_url"] ?? null);
            echo "\" ></script>
";
        }
        // line 50
        if ( !($context["minify_js"] ?? null)) {
            // line 51
            echo "<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" ></script>
<!-- Bootstrap Js -->
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" ></script>
<script src=\"catalog/view/javascript/jquery/swiper/js/swiper.min.js\" ></script>
";
            // line 55
            if (($context["lazy_load"] ?? null)) {
                // line 56
                echo "<script src=\"catalog/view/javascript/plaza/lazyload/lazysizes.min.js\"></script>
";
            }
            // line 58
            if (($context["use_quick_view"] ?? null)) {
                // line 59
                echo "<script src=\"catalog/view/javascript/plaza/cloudzoom/cloud-zoom.1.0.2.min.js\" ></script>
<script src=\"catalog/view/javascript/plaza/cloudzoom/zoom.js\" ></script>
<script src=\"catalog/view/javascript/plaza/quickview/quickview.js\" ></script>
";
            }
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
                // line 64
                echo "<script src=\"";
                echo $context["script"];
                echo "\" ></script>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "<script src=\"catalog/view/javascript/common.js\" ></script>
";
            // line 67
            if (($context["custom_js"] ?? null)) {
                // line 68
                echo "<script>
    ";
                // line 69
                echo ($context["custom_js"] ?? null);
                echo "
</script>
";
            }
        }
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 74
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 74);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 74);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 77
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "</head>
<body class=\"";
        // line 80
        echo ($context["class"] ?? null);
        echo "\">
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
<input type=\"hidden\" id=\"hd-check-sticky-header\" value=\"";
        // line 83
        if (($context["sticky_header"] ?? null)) {
            echo "1";
        } else {
            echo "0";
        }
        echo "\" />
<div class=\"wrapper\">
";
        // line 85
        if (($context["scroll_top"] ?? null)) {
            // line 86
            echo "  <div id=\"back-top\"><i class=\"ion-chevron-up\"></i></div>
";
        }
        // line 88
        echo ($context["header"] ?? null);
    }

    public function getTemplateName()
    {
        return "tt_safira_book4/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 88,  275 => 86,  273 => 85,  264 => 83,  256 => 82,  248 => 81,  244 => 80,  241 => 79,  233 => 77,  229 => 76,  218 => 74,  214 => 73,  207 => 69,  204 => 68,  202 => 67,  199 => 66,  190 => 64,  186 => 63,  180 => 59,  178 => 58,  174 => 56,  172 => 55,  166 => 51,  164 => 50,  158 => 48,  156 => 47,  149 => 43,  146 => 42,  144 => 41,  141 => 40,  137 => 38,  135 => 37,  129 => 34,  126 => 33,  124 => 32,  118 => 30,  116 => 29,  109 => 24,  96 => 22,  92 => 21,  89 => 20,  83 => 18,  81 => 17,  75 => 15,  73 => 14,  69 => 13,  65 => 12,  54 => 6,  47 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_book4/template/common/header.twig", "");
    }
}
