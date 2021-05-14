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

/* tt_safira_autopart4/template/plaza/module/pttestimonial.twig */
class __TwigTemplate_0ed1311690039e1d44d2444aa1e82ef546318ee21d9440ce223bd23255b04283 extends \Twig\Template
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
        echo "<div class=\"testimonial-module\">
    <div class=\"block-title\">
        <div class=\"title\"><span>";
        // line 3
        echo ($context["title"] ?? null);
        echo "</span></div>
\t\t";
        // line 4
        if (($context["text_module_testimonial"] ?? null)) {
            // line 5
            echo "\t\t\t<p>";
            echo ($context["text_module_testimonial"] ?? null);
            echo "</p>
\t\t";
        }
        // line 7
        echo "    </div>
    <div class=\"swiper-viewport\">
        
\t\t<div class=\"swiper-container testimonial-slides \">
            <div class=\"swiper-wrapper\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["testimonials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
            // line 13
            echo "                    
\t\t\t\t\t<div class=\"testimonial-content swiper-slide\">
                        <div class=\"inner\">
\t\t\t\t\t\t\t<div class=\"testimonial-images testimonial-images-";
            // line 16
            echo ($context["i"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" onclick=\"testimonialGoToSlide(";
            // line 17
            echo ($context["i"] ?? null);
            echo ")\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "image", [], "any", false, false, false, 17);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "customer_name", [], "any", false, false, false, 17);
            echo "\"></a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"testimonial-box\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<p>";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "content", [], "any", false, false, false, 22);
            echo "</p>
\t\t\t\t\t\t\t\t<span class=\"testimonial-author\">";
            // line 23
            echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "customer_name", [], "any", false, false, false, 23);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </div>
        </div>
\t\t
        ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 31)) {
            // line 32
            echo "            <div class=\"swiper-pagination testimonial-pagination\"></div>
        ";
        }
        // line 34
        echo "
        ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 35)) {
            // line 36
            echo "            <div class=\"swiper-pager\">
                <div class=\"swiper-button-next swiper-testimonial-button-next\"></div>
                <div class=\"swiper-button-prev swiper-testimonial-button-prev\"></div>
            </div>
        ";
        }
        // line 41
        echo "    </div>
</div>

<script type=\"text/javascript\">
    var testimonial_slides = \$(\".testimonial-slides\").swiper({
        spaceBetween: 0,
        ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 47)) {
            // line 48
            echo "        pagination: '.testimonial-pagination',
        paginationClickable: true,
        ";
        }
        // line 51
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 51)) {
            // line 52
            echo "        nextButton: '.swiper-testimonial-button-next',
        prevButton: '.swiper-testimonial-button-prev',
        ";
        }
        // line 55
        echo "        speed: ";
        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 55)) {
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 55);
            echo " ";
        } else {
            echo " 300 ";
        }
        echo ",
        slidesPerView: ";
        // line 56
        echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "items", [], "any", false, false, false, 56);
        echo ",
        slidesPerColumn: ";
        // line 57
        echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "rows", [], "any", false, false, false, 57);
        echo ",
        autoplay: ";
        // line 58
        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "auto", [], "any", false, false, false, 58)) {
            echo " 3000 ";
        } else {
            echo " false ";
        }
        echo ",
        loop: true,
\t\tbreakpoints: {
\t\t\t1199: {
\t\t\t\tslidesPerView: 1
\t\t\t},
\t\t\t991: {
\t\t\t\tslidesPerView: 1
\t\t\t},
\t\t\t767: {
\t\t\t\tslidesPerView: 1
\t\t\t},
\t\t\t479: {
\t\t\t\tslidesPerView: 1
\t\t\t},
\t\t\t374: {
\t\t\t\tslidesPerView: 1
\t\t\t}
\t\t}
    });

    
</script>";
    }

    public function getTemplateName()
    {
        return "tt_safira_autopart4/template/plaza/module/pttestimonial.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 58,  161 => 57,  157 => 56,  146 => 55,  141 => 52,  138 => 51,  133 => 48,  131 => 47,  123 => 41,  116 => 36,  114 => 35,  111 => 34,  107 => 32,  105 => 31,  100 => 28,  89 => 23,  85 => 22,  73 => 17,  69 => 16,  64 => 13,  60 => 12,  53 => 7,  47 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_autopart4/template/plaza/module/pttestimonial.twig", "");
    }
}
