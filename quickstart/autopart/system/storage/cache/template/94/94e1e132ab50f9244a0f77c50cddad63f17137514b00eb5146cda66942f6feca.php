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

/* tt_safira_jewelry2/template/plaza/module/pttestimonial.twig */
class __TwigTemplate_a3736338f5aceed0a9c40ada788bfe4839de46e34288e0690482f0c5d4cbde0c extends \Twig\Template
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
        <div class=\"title\">";
        // line 3
        echo ($context["title"] ?? null);
        echo "</div>
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
        <div class=\"swiper-container gallery-thumbs\">
\t\t\t<div class=\"swiper-wrapper\">
                ";
        // line 11
        $context["i"] = 0;
        // line 12
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["testimonials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
            // line 13
            echo "                    <div class=\"swiper-slide\">
                        <div class=\"testimonial-images testimonial-images-";
            // line 14
            echo ($context["i"] ?? null);
            echo "\">
                            <a href=\"javascript:void(0);\" onclick=\"testimonialGoToSlide(";
            // line 15
            echo ($context["i"] ?? null);
            echo ")\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "image", [], "any", false, false, false, 15);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "customer_name", [], "any", false, false, false, 15);
            echo "\"></a>
                        </div>
                    </div>
                    ";
            // line 18
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 19
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"swiper-container testimonial-slides gallery-top\">
            <div class=\"swiper-wrapper\">
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["testimonials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
            // line 25
            echo "                    <div class=\"testimonial-content swiper-slide\">
                        <div class=\"testimonial-box\">
                            <p>";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "content", [], "any", false, false, false, 27);
            echo "</p>
\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-x\"></i></span>
\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-x\"></i></span>
\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-x\"></i></span>
\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-x\"></i></span>
\t\t\t\t\t\t\t\t<span class=\"icon-ratings\"><i class=\"icon-rating icon-rating-x\"></i></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"testimonial-author\">";
            // line 35
            echo twig_get_attribute($this->env, $this->source, $context["testimonial"], "customer_name", [], "any", false, false, false, 35);
            echo "</span>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </div>
        </div>
        ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 41)) {
            // line 42
            echo "            <div class=\"swiper-pagination testimonial-pagination\"></div>
        ";
        }
        // line 44
        echo "
        ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 45)) {
            // line 46
            echo "            <div class=\"swiper-pager\">
                <div class=\"swiper-button-next swiper-testimonial-button-next\"></div>
                <div class=\"swiper-button-prev swiper-testimonial-button-prev\"></div>
            </div>
        ";
        }
        // line 51
        echo "    </div>
</div>

<script type=\"text/javascript\">
    var testimonial_slides = \$(\".testimonial-slides\").swiper({
        spaceBetween: 20,
        ";
        // line 57
        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "pagination", [], "any", false, false, false, 57)) {
            // line 58
            echo "        pagination: '.testimonial-pagination',
        paginationClickable: true,
        ";
        }
        // line 61
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "navigation", [], "any", false, false, false, 61)) {
            // line 62
            echo "        nextButton: '.swiper-testimonial-button-next',
        prevButton: '.swiper-testimonial-button-prev',
        ";
        }
        // line 65
        echo "        speed: ";
        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 65)) {
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "speed", [], "any", false, false, false, 65);
            echo " ";
        } else {
            echo " 300 ";
        }
        echo ",
        slidesPerView: 1,
        slidesPerColumn: 1,
        autoplay: ";
        // line 68
        if (twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "auto", [], "any", false, false, false, 68)) {
            echo " 3000 ";
        } else {
            echo " false ";
        }
        echo ",
        loop: false
    });

    var testimonial_thumbs = \$(\".gallery-thumbs\").swiper({
        spaceBetween: 0,
        slidesPerView: ";
        // line 74
        echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "items", [], "any", false, false, false, 74);
        echo ",
        slidesPerColumn: ";
        // line 75
        echo twig_get_attribute($this->env, $this->source, ($context["slide"] ?? null), "rows", [], "any", false, false, false, 75);
        echo ",
        loop: false,
    });
\t\$('.testimonial-images-1').addClass('active');
\ttestimonial_slides.slideTo(1);
    function testimonialGoToSlide(index) {
        testimonial_slides.slideTo(index);
\t\t\$('.testimonial-images').removeClass('active');
\t\t\$('.testimonial-images-'+ index).addClass('active');
    }
</script>";
    }

    public function getTemplateName()
    {
        return "tt_safira_jewelry2/template/plaza/module/pttestimonial.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 75,  197 => 74,  184 => 68,  171 => 65,  166 => 62,  163 => 61,  158 => 58,  156 => 57,  148 => 51,  141 => 46,  139 => 45,  136 => 44,  132 => 42,  130 => 41,  126 => 39,  116 => 35,  105 => 27,  101 => 25,  97 => 24,  91 => 20,  85 => 19,  83 => 18,  73 => 15,  69 => 14,  66 => 13,  61 => 12,  59 => 11,  53 => 7,  47 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_jewelry2/template/plaza/module/pttestimonial.twig", "");
    }
}
