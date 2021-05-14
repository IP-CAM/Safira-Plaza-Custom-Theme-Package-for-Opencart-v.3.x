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

/* tt_safira2/template/extension/module/carousel.twig */
class __TwigTemplate_6b4276970f71334ee21348535f9d65584e1e3158ff20a6d6cee09ca39c953fbe extends \Twig\Template
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
        echo "<div class=\"brand-logo\">\t
\t<div class=\"swiper-viewport\">
\t\t<div id=\"carousel";
        // line 3
        echo ($context["module"] ?? null);
        echo "\" class=\"swiper-container\">
\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 6
            echo "\t\t\t\t\t<div class=\"swiper-slide text-center\">
\t\t\t\t\t\t";
            // line 7
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 7)) {
                // line 8
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 8);
                echo "\">
\t\t\t\t\t\t\t";
                // line 9
                if (($context["lazy_load"] ?? null)) {
                    // line 10
                    echo "\t\t\t\t\t\t\t\t<img src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 10);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 10);
                    echo "\" class=\"img-responsive lazyload\" />
\t\t\t\t\t\t\t";
                } else {
                    // line 12
                    echo "\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 12);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 12);
                    echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t";
                }
                // line 14
                echo "\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
            } else {
                // line 16
                echo "\t\t\t\t\t\t\t";
                if (($context["lazy_load"] ?? null)) {
                    // line 17
                    echo "\t\t\t\t\t\t\t\t<img src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 17);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 17);
                    echo "\" class=\"img-responsive lazyload\" />
\t\t\t\t\t\t\t";
                } else {
                    // line 19
                    echo "\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 19);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 19);
                    echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t";
                }
                // line 21
                echo "\t\t\t\t\t\t";
            }
            // line 22
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"swiper-pagination carousel";
        // line 26
        echo ($context["module"] ?? null);
        echo "\"></div>
\t</div>
</div>
<script type=\"text/javascript\"><!--
\$('#carousel";
        // line 30
        echo ($context["module"] ?? null);
        echo "').swiper({
\tmode: 'horizontal',
\tslidesPerView: 5,
\tpagination: false,
\tpaginationClickable: true,
\tnextButton: '.brand-logo-next',
    prevButton: '.brand-logo-prev',
\tautoplay: false,
\tloop: true,
\tbreakpoints: {
\t\t479: {
\t\t  slidesPerView: 2
\t\t},
\t\t767: {
\t\t  slidesPerView: 3
\t\t},
\t\t991: {
\t\t  slidesPerView: 4
\t\t  
\t\t},
\t\t1199: {
\t\t  slidesPerView: 4
\t\t  
\t\t}
\t}
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "tt_safira2/template/extension/module/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 30,  115 => 26,  111 => 24,  104 => 22,  101 => 21,  93 => 19,  85 => 17,  82 => 16,  78 => 14,  70 => 12,  62 => 10,  60 => 9,  55 => 8,  53 => 7,  50 => 6,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira2/template/extension/module/carousel.twig", "");
    }
}
