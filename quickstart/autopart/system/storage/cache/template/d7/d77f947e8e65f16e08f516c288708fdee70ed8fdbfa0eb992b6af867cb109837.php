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

/* tt_safira_sportswear1/template/plaza/blog/list.twig */
class __TwigTemplate_49428bb6d4a7e8bf1882796b376645ec3e4217f722e493bfd90fcc71417a2991 extends \Twig\Template
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
<div class=\"container\">
    <ul class=\"breadcrumb\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "            <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "        <li>";
        echo ($context["heading_title"] ?? null);
        echo "</li>
    </ul>
\t<div class=\"main\">
        <div class=\"row\">
            ";
        // line 11
        if ((($context["layout"] ?? null) == "left")) {
            // line 12
            echo "            <div class=\"col-md-3 col-xs-12\">
                ";
            // line 13
            echo ($context["category_list_widget"] ?? null);
            echo "
                ";
            // line 14
            echo ($context["latest_blog_widget"] ?? null);
            echo "
            </div>
            ";
        }
        // line 17
        echo "            ";
        if (((($context["layout"] ?? null) == "left") || (($context["layout"] ?? null) == "right"))) {
            // line 18
            echo "                ";
            $context["class"] = "col-md-9 col-sm-12 col-xs-12";
            // line 19
            echo "            ";
        } else {
            // line 20
            echo "                ";
            $context["class"] = "col-xs-12";
            // line 21
            echo "            ";
        }
        // line 22
        echo "            <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t\t<h1>";
        // line 23
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t\t<div class=\"tool-bar\">\t
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-6\">
\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t<button type=\"button\"  onclick=\"location='";
        // line 28
        echo ($context["grid_content_link"] ?? null);
        echo "'\" class=\"btn-grid-view btn btn-default ";
        if ((($context["post_content"] ?? null) == "grid")) {
            echo "active";
        }
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_grid"] ?? null);
        echo "\"></button>
\t\t\t\t\t\t\t\t<button type=\"button\"  onclick=\"location='";
        // line 29
        echo ($context["list_content_link"] ?? null);
        echo "'\" class=\"btn-list-view btn btn-default ";
        if ((($context["post_content"] ?? null) == "list")) {
            echo "active";
        }
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_list"] ?? null);
        echo "\"></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-6\">
\t\t\t\t\t\t\t<div class=\"post-item-limit form-group input-group input-group-sm\">
\t\t\t\t\t\t\t\t<label class=\"input-group-addon\" for=\"input-limit\">";
        // line 34
        echo ($context["text_limit"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["limits"]);
        foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
            // line 37
            echo "\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 37) == ($context["limit"] ?? null))) {
                // line 38
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 38);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 38);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 40
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 40);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 40);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 42
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
                ";
        // line 48
        if (($context["posts"] ?? null)) {
            // line 49
            echo "                    <div class=\"post-page\">
                        ";
            // line 50
            $context["i"] = 0;
            // line 51
            echo "                        ";
            if ((($context["post_content"] ?? null) == "grid")) {
                // line 52
                echo "                            <div class=\"row\">
                                ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                    // line 54
                    echo "                                    ";
                    $context["i"] = (($context["i"] ?? null) + 1);
                    // line 55
                    echo "                                    <div class=\"post-layout col-sm-4 col-xs-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"post-grid\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-item ";
                    // line 57
                    echo ((((($context["i"] ?? null) % 2) == 0)) ? ("even") : ("odd"));
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"";
                    // line 59
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 59);
                    echo "\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 59);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 59);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 59);
                    echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-cation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-date-author\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"post-date\">";
                    // line 64
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "date_added", [], "any", false, false, false, 64);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"post-author\">";
                    // line 65
                    if (twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 65)) {
                        echo twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 65);
                    }
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"post-name\"><a  href=\"";
                    // line 67
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 67);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 67);
                    echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-intro\">";
                    // line 68
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "intro_text", [], "any", false, false, false, 68);
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-more\"><a href=\"";
                    // line 69
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 69);
                    echo "\">";
                    echo ($context["button_show"] ?? null);
                    echo "</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
                                    </div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "                            </div>
                        ";
            }
            // line 78
            echo "
                        ";
            // line 79
            if ((($context["post_content"] ?? null) == "list")) {
                // line 80
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                    // line 81
                    echo "                                ";
                    $context["i"] = (($context["i"] ?? null) + 1);
                    // line 82
                    echo "                                <div class=\"post-layout\">
\t\t\t\t\t\t\t\t\t<div class=\"post-list\">
\t\t\t\t\t\t\t\t\t\t<div class=\"post-item ";
                    // line 84
                    echo ((((($context["i"] ?? null) % 2) == 0)) ? ("even") : ("odd"));
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-intro row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"";
                    // line 88
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 88);
                    echo "\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 88);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 88);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 88);
                    echo "\" /></a>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-cation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-date-author\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"post-date\">";
                    // line 94
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "date_added", [], "any", false, false, false, 94);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"post-author\">";
                    // line 95
                    if (twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 95)) {
                        echo twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 95);
                    }
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"post-name\"><a  href=\"";
                    // line 97
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 97);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 97);
                    echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-intro\">";
                    // line 98
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "intro_text", [], "any", false, false, false, 98);
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-more\"><a href=\"";
                    // line 99
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 99);
                    echo "\">";
                    echo ($context["button_show"] ?? null);
                    echo "</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
                                </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "                        ";
            }
            // line 108
            echo "                    </div>
\t\t\t\t\t<div class=\"tool-bar-bottom\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 show-page text-left\">";
            // line 111
            echo ($context["pagination"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 text-right\">";
            // line 112
            echo ($context["results"] ?? null);
            echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                ";
        } else {
            // line 116
            echo "                    <p>";
            echo ($context["text_post_empty"] ?? null);
            echo "</p>
                ";
        }
        // line 118
        echo "            </div>
            ";
        // line 119
        if ((($context["layout"] ?? null) == "right")) {
            // line 120
            echo "            <div class=\"col-md-3 col-xs-12\">
                ";
            // line 121
            echo ($context["category_list_widget"] ?? null);
            echo "
                ";
            // line 122
            echo ($context["latest_blog_widget"] ?? null);
            echo "
            </div>
            ";
        }
        // line 125
        echo "        </div>
    </div>
</div>
";
        // line 128
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "tt_safira_sportswear1/template/plaza/blog/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 128,  376 => 125,  370 => 122,  366 => 121,  363 => 120,  361 => 119,  358 => 118,  352 => 116,  345 => 112,  341 => 111,  336 => 108,  333 => 107,  317 => 99,  313 => 98,  307 => 97,  300 => 95,  296 => 94,  281 => 88,  274 => 84,  270 => 82,  267 => 81,  262 => 80,  260 => 79,  257 => 78,  253 => 76,  238 => 69,  234 => 68,  228 => 67,  221 => 65,  217 => 64,  203 => 59,  198 => 57,  194 => 55,  191 => 54,  187 => 53,  184 => 52,  181 => 51,  179 => 50,  176 => 49,  174 => 48,  167 => 43,  161 => 42,  153 => 40,  145 => 38,  142 => 37,  138 => 36,  133 => 34,  119 => 29,  109 => 28,  101 => 23,  96 => 22,  93 => 21,  90 => 20,  87 => 19,  84 => 18,  81 => 17,  75 => 14,  71 => 13,  68 => 12,  66 => 11,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_sportswear1/template/plaza/blog/list.twig", "");
    }
}
