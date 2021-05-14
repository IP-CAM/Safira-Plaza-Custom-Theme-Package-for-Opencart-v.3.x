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
class __TwigTemplate_e914b1ddf13b86825b7ae74df4da4416278a0c410806490537e85531e388b373 extends \Twig\Template
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
\t  <div id=\"carousel";
        // line 3
        echo ($context["module"] ?? null);
        echo "\" class=\"swiper-container\">
\t\t<div class=\"swiper-wrapper\">";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 5
            echo "\t\t  <div class=\"swiper-slide text-center\">";
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 5)) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 5);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 5);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 5);
                echo "\" class=\"img-responsive\" /></a>";
            } else {
                echo "<img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 5);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 5);
                echo "\" class=\"img-responsive\" />";
            }
            echo "</div>
\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</div>
\t  </div>
\t  <div class=\"swiper-pagination carousel";
        // line 8
        echo ($context["module"] ?? null);
        echo "\"></div>
\t  <!--div class=\"swiper-pager\">
\t\t<div class=\"swiper-button-next brand-logo-next\"></div>
\t\t<div class=\"swiper-button-prev brand-logo-prev\"></div>
\t  </div-->
\t</div>
</div>
<script ><!--
\$('#carousel";
        // line 16
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
\t// Responsive breakpoints
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
--></script>";
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
        return array (  87 => 16,  76 => 8,  72 => 6,  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira2/template/extension/module/carousel.twig", "");
    }
}
