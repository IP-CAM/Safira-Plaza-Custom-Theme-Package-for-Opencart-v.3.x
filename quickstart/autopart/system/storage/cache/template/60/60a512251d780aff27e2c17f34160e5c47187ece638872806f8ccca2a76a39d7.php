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

/* tt_safira_sportswear1/template/plaza/blog/post.twig */
class __TwigTemplate_a93a366243405a2149cc42bd9ee4528a01c42147e4820d224dabf8119dd34ee9 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "
<ul class=\"breadcrumb\">
\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 4
            echo "\t\t<li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 4);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 4);
            echo "</a></li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "\t<li>";
        echo ($context["heading_title"] ?? null);
        echo "</li>
</ul>

<div class=\"container\">
    <div class=\"main\">
        <div class=\"row\">
            ";
        // line 12
        if ((($context["layout"] ?? null) == "left")) {
            // line 13
            echo "                <div class=\"col-md-3 col-xs-12\">
                    ";
            // line 14
            if (($context["related_posts"] ?? null)) {
                // line 15
                echo "                        <div class=\"blog-widget-section blog-widget\">
                            <div class=\"title\">
                                <h3><span>";
                // line 17
                echo ($context["text_related_post"] ?? null);
                echo "</span></h3>
                            </div>
                            ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["related_posts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                    // line 20
                    echo "                                <div class=\"widget-content\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 21
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 21);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 21);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 21);
                    echo "\" /></a>
\t\t\t\t\t\t\t\t\t<div class=\"latest-post-content\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"latest-post-name\"><a href=\"";
                    // line 23
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 23);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 23);
                    echo "</a></h5>
\t\t\t\t\t\t\t\t\t\t<div class=\"post-date\">
                                            ";
                    // line 25
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "date_added", [], "any", false, false, false, 25);
                    if (twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 25)) {
                        echo (" | " . twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 25));
                    }
                    // line 26
                    echo "                                        </div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "                        </div>
                    ";
            }
            // line 33
            echo "                </div>
            ";
        }
        // line 35
        echo "            ";
        if (((($context["layout"] ?? null) == "left") || (($context["layout"] ?? null) == "right"))) {
            // line 36
            echo "                ";
            $context["class"] = "col-md-9 col-sm-12 col-xs-12";
            // line 37
            echo "            ";
        } else {
            // line 38
            echo "                ";
            $context["class"] = "col-xs-12";
            // line 39
            echo "            ";
        }
        // line 40
        echo "            <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
                <div class=\"post-container\">
                    <div class=\"post-title\">
                        <h1>";
        // line 43
        echo ($context["heading_title"] ?? null);
        echo "</h1>
                    </div>
                    <div class=\"post-date-author\">
\t\t\t\t\t\t<span class=\"post-date\">";
        // line 46
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "date_added", [], "any", false, false, false, 46);
        echo "</span>
\t\t\t\t\t\t<span class=\"post-author\">";
        // line 47
        if (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "author", [], "any", false, false, false, 47)) {
            echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "author", [], "any", false, false, false, 47);
        }
        echo "</span>
\t\t\t\t\t</div>
                    <div class=\"post-description\">
                        <img src=\"";
        // line 50
        echo ($context["image"] ?? null);
        echo "\" alt=\"heading_title\" />
                        <p>";
        // line 51
        echo ($context["description"] ?? null);
        echo "</p>
                    </div>
                </div>
                ";
        // line 54
        if ((($context["related_posts"] ?? null) && (($context["layout"] ?? null) == "full"))) {
            // line 55
            echo "\t\t\t\t\t<div class=\"blog-widget-section blog-widget blog-widget-slider \">
\t\t\t\t\t\t<div class=\"block-title\">
\t\t\t\t\t\t\t<h3><span>";
            // line 57
            echo ($context["text_related_post"] ?? null);
            echo "</span></h3>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"pt-content\">
\t\t\t\t\t\t\t<div class=\"swiper-viewport\">
\t\t\t\t\t\t\t\t<div class=\"swiper-container posts-container\">
\t\t\t\t\t\t\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t\t\t\t\t\t\t";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["related_posts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 65
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\" swiper-slide product-thumb \">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-grid\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-item \">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 69);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "image_full", [], "any", false, false, false, 69);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "name_full", [], "any", false, false, false, 69);
                echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-cation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-date-author\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"post-date\">";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["post"], "date_added", [], "any", false, false, false, 75);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"post-author\">";
                // line 76
                if (twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 76)) {
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 76);
                }
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"post-name\"><a href=\"";
                // line 78
                echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 78);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "name_full", [], "any", false, false, false, 78);
                echo "</a></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-intro\">";
                // line 79
                echo twig_get_attribute($this->env, $this->source, $context["post"], "intro_text", [], "any", false, false, false, 79);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-more\"><a href=\"";
                // line 80
                echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 80);
                echo "\">";
                echo ($context["button_show"] ?? null);
                echo "</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!--div class=\"swiper-pagination post-pagination\"></div-->
\t\t\t\t\t\t\t\t<div class=\"swiper-pager\">
\t\t\t\t\t\t\t\t\t<div class=\"swiper-button-next related-posts-next\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"swiper-button-prev related-posts-prev\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\t\$(\".posts-container\").swiper({
\t\t\t\t\t\t\t\tspaceBetween: 0,
\t\t\t\t\t\t\t\tnextButton: '.related-posts-next',
\t\t\t\t\t\t\t\tprevButton: '.related-posts-prev',
\t\t\t\t\t\t\t\tspeed: 600,
\t\t\t\t\t\t\t\tslidesPerView: 3,
\t\t\t\t\t\t\t\tslidesPerColumn: 1,
\t\t\t\t\t\t\t\twatchSlidesVisibility: true,
\t\t\t\t\t\t\t\tautoplay: false,
\t\t\t\t\t\t\t\tloop: false,
\t\t\t\t\t\t\t\t// Responsive breakpoints
\t\t\t\t\t\t\t\tbreakpoints: {
\t\t\t\t\t\t\t\t\t359: {
\t\t\t\t\t\t\t\t\t  slidesPerView: 1
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t479: {
\t\t\t\t\t\t\t\t\t  slidesPerView: 2
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t767: {
\t\t\t\t\t\t\t\t\t  slidesPerView: 2
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t991: {
\t\t\t\t\t\t\t\t\t  slidesPerView: 3
\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\t\t1199: {
\t\t\t\t\t\t\t\t\t  slidesPerView: 3
\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t</script>
\t\t\t\t\t</div>
                ";
        }
        // line 132
        echo "            </div>
            ";
        // line 133
        if ((($context["layout"] ?? null) == "right")) {
            // line 134
            echo "                <div class=\"col-md-3 col-xs-12\">
                    ";
            // line 135
            if (($context["related_posts"] ?? null)) {
                // line 136
                echo "                        <div class=\"blog-widget-section blog-widget\">
                            <div class=\"title\">
                                <h3><span>";
                // line 138
                echo ($context["text_related_post"] ?? null);
                echo "</span></h3>
                            </div>
                            ";
                // line 140
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["related_posts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                    // line 141
                    echo "                                <div class=\"widget-content\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 142
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 142);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 142);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 142);
                    echo "\" /></a>
\t\t\t\t\t\t\t\t\t<div class=\"latest-post-content\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"latest-post-name\"><a href=\"";
                    // line 144
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 144);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 144);
                    echo "</a></h5>
\t\t\t\t\t\t\t\t\t\t<div class=\"post-date\">
                                            ";
                    // line 146
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "date_added", [], "any", false, false, false, 146);
                    if (twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 146)) {
                        echo (" | " . twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 146));
                    }
                    // line 147
                    echo "                                        </div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 152
                echo "                        </div>
                    ";
            }
            // line 154
            echo "                </div>
            ";
        }
        // line 156
        echo "        </div>
    </div>
</div>
";
        // line 159
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "tt_safira_sportswear1/template/plaza/blog/post.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 159,  368 => 156,  364 => 154,  360 => 152,  350 => 147,  345 => 146,  338 => 144,  329 => 142,  326 => 141,  322 => 140,  317 => 138,  313 => 136,  311 => 135,  308 => 134,  306 => 133,  303 => 132,  256 => 87,  241 => 80,  237 => 79,  231 => 78,  224 => 76,  220 => 75,  207 => 69,  201 => 65,  197 => 64,  187 => 57,  183 => 55,  181 => 54,  175 => 51,  171 => 50,  163 => 47,  159 => 46,  153 => 43,  144 => 40,  141 => 39,  138 => 38,  135 => 37,  132 => 36,  129 => 35,  125 => 33,  121 => 31,  111 => 26,  106 => 25,  99 => 23,  90 => 21,  87 => 20,  83 => 19,  78 => 17,  74 => 15,  72 => 14,  69 => 13,  67 => 12,  57 => 6,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_sportswear1/template/plaza/blog/post.twig", "");
    }
}
