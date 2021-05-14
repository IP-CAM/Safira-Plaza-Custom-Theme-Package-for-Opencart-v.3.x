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

/* tt_safira_autopart4/template/extension/module/carousel.twig */
class __TwigTemplate_b9d713bca1b922872e2b914cbb43e1a6b9f5a531f7c4e02c15640e325e988f29 extends \Twig\Template
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
        echo "<div class=\"brand-logo\">
\t<div class=\"pt-content\">
\t\t<div class=\"swiper-viewport\">
\t\t  <div id=\"carousel";
        // line 4
        echo ($context["module"] ?? null);
        echo "\" class=\"swiper-container\">
\t\t\t<div class=\"swiper-wrapper\">";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 6
            echo "\t\t\t  <div class=\"swiper-slide text-center\">
\t\t\t\t  ";
            // line 7
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 7)) {
                // line 8
                echo "\t\t\t\t  <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 8);
                echo "\">
\t\t\t\t\t  ";
                // line 9
                if (($context["lazy_load"] ?? null)) {
                    // line 10
                    echo "\t\t\t\t\t\t  <img src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 10);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 10);
                    echo "\" class=\"img-responsive lazyload\" />
\t\t\t\t\t  ";
                } else {
                    // line 12
                    echo "\t\t\t\t\t\t  <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 12);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 12);
                    echo "\" class=\"img-responsive\" />
\t\t\t\t\t  ";
                }
                // line 14
                echo "\t\t\t\t  </a>
\t\t\t\t  ";
            } else {
                // line 16
                echo "\t\t\t\t\t  ";
                if (($context["lazy_load"] ?? null)) {
                    // line 17
                    echo "\t\t\t\t\t\t  <img src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 17);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 17);
                    echo "\" class=\"img-responsive lazyload\" />
\t\t\t\t\t  ";
                } else {
                    // line 19
                    echo "\t\t\t\t\t\t  <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 19);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 19);
                    echo "\" class=\"img-responsive\" />
\t\t\t\t\t  ";
                }
                // line 21
                echo "\t\t\t\t  ";
            }
            // line 22
            echo "\t\t\t  </div>
\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</div>
\t\t  </div>
\t\t  <div class=\"swiper-pager\">
\t\t\t<div class=\"swiper-button-next brand-logo-next\"></div>
\t\t\t<div class=\"swiper-button-prev brand-logo-prev\"></div>
\t\t  </div>
\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\"><!--
\$('#carousel";
        // line 33
        echo ($context["module"] ?? null);
        echo "').swiper({
\tmode: 'horizontal',
\tslidesPerView: 4,
\tpagination: false,
\tpaginationClickable: true,
\tnextButton: '.brand-logo-next',
    prevButton: '.brand-logo-prev',
\twatchSlidesVisibility: true,
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
\t\t  slidesPerView: 3
\t\t  
\t\t},
\t\t1199: {
\t\t  slidesPerView: 3
\t\t  
\t\t}
\t}
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "tt_safira_autopart4/template/extension/module/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 33,  111 => 23,  104 => 22,  101 => 21,  93 => 19,  85 => 17,  82 => 16,  78 => 14,  70 => 12,  62 => 10,  60 => 9,  55 => 8,  53 => 7,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_autopart4/template/extension/module/carousel.twig", "");
    }
}
