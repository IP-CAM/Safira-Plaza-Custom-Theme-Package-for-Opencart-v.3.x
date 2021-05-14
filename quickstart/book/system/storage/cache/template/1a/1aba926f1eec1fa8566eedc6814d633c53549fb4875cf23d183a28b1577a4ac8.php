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

/* tt_safira_houseware1/template/plaza/blog/list.twig */
class __TwigTemplate_9b90f81eec7851d6d78bbd9a72699d0a650cf17a95ca49c1e0076417977d579b extends \Twig\Template
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
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-6\">
\t\t\t\t\t\t\t<div class=\"post-item-limit form-group input-group input-group-sm\">
\t\t\t\t\t\t\t\t<label class=\"input-group-addon\" for=\"input-limit\">";
        // line 35
        echo ($context["text_limit"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["limits"]);
        foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
            // line 38
            echo "\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 38) == ($context["limit"] ?? null))) {
                // line 39
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 39);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 39);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 41
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 41);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 41);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 43
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
                ";
        // line 49
        if (($context["posts"] ?? null)) {
            // line 50
            echo "                    <div class=\"post-page\">
                        ";
            // line 51
            $context["i"] = 0;
            // line 52
            echo "                        ";
            if ((($context["post_content"] ?? null) == "grid")) {
                // line 53
                echo "                            <div class=\"row\">
                                ";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                    // line 55
                    echo "                                    ";
                    $context["i"] = (($context["i"] ?? null) + 1);
                    // line 56
                    echo "                                    <div class=\"post-layout col-sm-4 col-xs-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"post-grid\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-item ";
                    // line 58
                    echo ((((($context["i"] ?? null) % 2) == 0)) ? ("even") : ("odd"));
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"";
                    // line 60
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 60);
                    echo "\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 60);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 60);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 60);
                    echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-date-author\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"post-date\">";
                    // line 62
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "date_added", [], "any", false, false, false, 62);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"post-author\">";
                    // line 63
                    if (twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 63)) {
                        echo twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 63);
                    }
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-cation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"post-name\"><a  href=\"";
                    // line 67
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 67);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 67);
                    echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-intro\">";
                    // line 68
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "intro_text", [], "any", false, false, false, 68);
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-more\"><a href=\"";
                    // line 69
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 69);
                    echo "\">";
                    echo ($context["button_show"] ?? null);
                    echo "</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
                                    </div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "                            </div>
                        ";
            }
            // line 77
            echo "
                        ";
            // line 78
            if ((($context["post_content"] ?? null) == "list")) {
                // line 79
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                    // line 80
                    echo "                                ";
                    $context["i"] = (($context["i"] ?? null) + 1);
                    // line 81
                    echo "                                <div class=\"post-layout\">
\t\t\t\t\t\t\t\t\t<div class=\"post-list\">
\t\t\t\t\t\t\t\t\t\t<div class=\"post-item ";
                    // line 83
                    echo ((((($context["i"] ?? null) % 2) == 0)) ? ("even") : ("odd"));
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-intro row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"";
                    // line 87
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 87);
                    echo "\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 87);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 87);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 87);
                    echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-date-author\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"post-date\">";
                    // line 89
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "date_added", [], "any", false, false, false, 89);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"post-author\">";
                    // line 90
                    if (twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 90)) {
                        echo twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 90);
                    }
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-cation\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"post-name\"><a  href=\"";
                    // line 96
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 96);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 96);
                    echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"post-intro\">";
                    // line 97
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "intro_text", [], "any", false, false, false, 97);
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-more\"><a href=\"";
                    // line 98
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 98);
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
                // line 106
                echo "                        ";
            }
            // line 107
            echo "                    </div>
\t\t\t\t\t<div class=\"tool-bar-bottom\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 show-page text-left\">";
            // line 110
            echo ($context["pagination"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 text-right\">";
            // line 111
            echo ($context["results"] ?? null);
            echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                ";
        } else {
            // line 115
            echo "                    <p>";
            echo ($context["text_post_empty"] ?? null);
            echo "</p>
                ";
        }
        // line 117
        echo "            </div>
            ";
        // line 118
        if ((($context["layout"] ?? null) == "right")) {
            // line 119
            echo "            <div class=\"col-md-3 col-xs-12\">
                ";
            // line 120
            echo ($context["category_list_widget"] ?? null);
            echo "
                ";
            // line 121
            echo ($context["latest_blog_widget"] ?? null);
            echo "
            </div>
            ";
        }
        // line 124
        echo "        </div>
    </div>
</div>
";
        // line 127
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "tt_safira_houseware1/template/plaza/blog/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 127,  375 => 124,  369 => 121,  365 => 120,  362 => 119,  360 => 118,  357 => 117,  351 => 115,  344 => 111,  340 => 110,  335 => 107,  332 => 106,  316 => 98,  312 => 97,  306 => 96,  295 => 90,  291 => 89,  280 => 87,  273 => 83,  269 => 81,  266 => 80,  261 => 79,  259 => 78,  256 => 77,  252 => 75,  238 => 69,  234 => 68,  228 => 67,  219 => 63,  215 => 62,  204 => 60,  199 => 58,  195 => 56,  192 => 55,  188 => 54,  185 => 53,  182 => 52,  180 => 51,  177 => 50,  175 => 49,  168 => 44,  162 => 43,  154 => 41,  146 => 39,  143 => 38,  139 => 37,  134 => 35,  119 => 29,  109 => 28,  101 => 23,  96 => 22,  93 => 21,  90 => 20,  87 => 19,  84 => 18,  81 => 17,  75 => 14,  71 => 13,  68 => 12,  66 => 11,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_houseware1/template/plaza/blog/list.twig", "");
    }
}
