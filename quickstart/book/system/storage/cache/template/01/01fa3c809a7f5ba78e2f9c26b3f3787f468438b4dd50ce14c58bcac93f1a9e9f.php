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

/* plaza/blog/post/list.twig */
class __TwigTemplate_11b50c3f9e9a73dc904edd5225fc42632fac5074aa2ec66c3b75c34448463377 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-post').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
                <a href=\"";
        // line 7
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
                <button type=\"submit\" form=\"form-post\" formaction=\"";
        // line 8
        echo ($context["copy"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_copy"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-copy\"></i></button>
                <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 9
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-post').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
            </div>
            <h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 20
        if (($context["error_warning"] ?? null)) {
            // line 21
            echo "            <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 25
        echo "        ";
        if (($context["success"] ?? null)) {
            // line 26
            echo "            <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 30
        echo "        <div class=\"row\">
            <div class=\"col-md-3 col-sm-12\">
                <div class=\"theme-option-container\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">";
        // line 35
        echo ($context["text_dashboard_menu"] ?? null);
        echo "</h3>
                        </div>
                        <ul class=\"nav nav-tabs menu-sections pt-dashboard-menu\">
                            ";
        // line 38
        $context["i"] = 0;
        // line 39
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["plaza_menus"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 40
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, $context["menu"], "child", [], "any", false, false, false, 40)) {
                // line 41
                echo "                                    <li ";
                if (twig_get_attribute($this->env, $this->source, $context["menu"], "active", [], "any", false, false, false, 41)) {
                    echo " class=\"active\" ";
                }
                echo ">
                                        <a href=\"#ptcollapse_";
                // line 42
                echo ($context["i"] ?? null);
                echo "\" data-toggle=\"collapse\" class=\"parent ";
                if ( !twig_get_attribute($this->env, $this->source, $context["menu"], "active", [], "any", false, false, false, 42)) {
                    echo " collapsed ";
                }
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "title", [], "any", false, false, false, 42);
                echo "</a>
                                        <ul id=\"ptcollapse_";
                // line 43
                echo ($context["i"] ?? null);
                echo "\" class=\"collapse ";
                if (twig_get_attribute($this->env, $this->source, $context["menu"], "active", [], "any", false, false, false, 43)) {
                    echo " in ";
                }
                echo "\">
                                            ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menu"], "child", [], "any", false, false, false, 44));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 45
                    echo "                                                <li ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "active", [], "any", false, false, false, 45)) {
                        echo " class=\"active\" ";
                    }
                    echo "><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 45);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 45);
                    echo "</a></li>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                                        </ul>
                                    </li>
                                ";
            } else {
                // line 50
                echo "                                    <li ";
                if (twig_get_attribute($this->env, $this->source, $context["menu"], "active", [], "any", false, false, false, 50)) {
                    echo " class=\"active\" ";
                }
                echo "><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "url", [], "any", false, false, false, 50);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["menu"], "title", [], "any", false, false, false, 50);
                echo "</a></li>
                                ";
            }
            // line 52
            echo "                                ";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 53
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-9 col-sm-12\">
                <div class=\"theme-option-container\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 62
        echo ($context["text_list"] ?? null);
        echo "</h3>
                        </div>
                        <div class=\"panel-body\">
                            <form action=\"";
        // line 65
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-post\">
                                <div class=\"table-responsive\">
                                    <table class=\"table table-bordered table-hover\">
                                        <thead>
                                        <tr>
                                            <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                                            <td class=\"text-left\">
                                                ";
        // line 72
        if ((($context["sort"] ?? null) == "ad.name")) {
            // line 73
            echo "                                                    <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                                                ";
        } else {
            // line 75
            echo "                                                    <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                                                ";
        }
        // line 77
        echo "                                            </td>
                                            <td class=\"text-left\">";
        // line 78
        echo ($context["column_author"] ?? null);
        echo "</td>
                                            <td class=\"text-center\" width=\"200px\">";
        // line 79
        if ((($context["sort"] ?? null) == "a.status")) {
            // line 80
            echo "                                                    <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                                                ";
        } else {
            // line 82
            echo "                                                    <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                                                ";
        }
        // line 83
        echo "</td>
                                            <td class=\"text-right\" width=\"100px\">";
        // line 84
        echo ($context["column_action"] ?? null);
        echo "</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 88
        if (($context["posts"] ?? null)) {
            // line 89
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 90
                echo "                                                <tr>
                                                    <td class=\"text-center\">";
                // line 91
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["post"], "post_id", [], "any", false, false, false, 91), ($context["selected"] ?? null))) {
                    // line 92
                    echo "                                                            <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "post_id", [], "any", false, false, false, 92);
                    echo "\" checked=\"checked\" />
                                                        ";
                } else {
                    // line 94
                    echo "                                                            <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "post_id", [], "any", false, false, false, 94);
                    echo "\" />
                                                        ";
                }
                // line 95
                echo "</td>
                                                    <td class=\"text-left\">";
                // line 96
                echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 96);
                echo "</td>
                                                    <td class=\"text-left\">";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 97);
                echo "</td>
                                                    <td class=\"text-center\"><span class=\"item-status ";
                // line 98
                if (twig_get_attribute($this->env, $this->source, $context["post"], "status", [], "any", false, false, false, 98)) {
                    echo "enabled";
                } else {
                    echo "disabled";
                }
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "status_text", [], "any", false, false, false, 98);
                echo "</span></td>
                                                    <td class=\"text-right\"><a href=\"";
                // line 99
                echo twig_get_attribute($this->env, $this->source, $context["post"], "edit", [], "any", false, false, false, 99);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-cog\"></i></a></td>
                                                </tr>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                                        ";
        } else {
            // line 103
            echo "                                            <tr>
                                                <td class=\"text-center\" colspan=\"8\">";
            // line 104
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                                            </tr>
                                        ";
        }
        // line 107
        echo "                                        </tbody>
                                    </table>
                                </div>
                            </form>
                            <div class=\"row theme-option-pagination\">
                                <div class=\"col-sm-6 text-left\">";
        // line 112
        echo ($context["pagination"] ?? null);
        echo "</div>
                                <div class=\"col-sm-6 text-right\">";
        // line 113
        echo ($context["results"] ?? null);
        echo "</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 122
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "plaza/blog/post/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 122,  371 => 113,  367 => 112,  360 => 107,  354 => 104,  351 => 103,  348 => 102,  337 => 99,  327 => 98,  323 => 97,  319 => 96,  316 => 95,  310 => 94,  304 => 92,  302 => 91,  299 => 90,  294 => 89,  292 => 88,  285 => 84,  282 => 83,  274 => 82,  264 => 80,  262 => 79,  258 => 78,  255 => 77,  247 => 75,  237 => 73,  235 => 72,  225 => 65,  219 => 62,  209 => 54,  203 => 53,  200 => 52,  188 => 50,  183 => 47,  168 => 45,  164 => 44,  156 => 43,  146 => 42,  139 => 41,  136 => 40,  131 => 39,  129 => 38,  123 => 35,  116 => 30,  108 => 26,  105 => 25,  97 => 21,  95 => 20,  89 => 16,  78 => 14,  74 => 13,  69 => 11,  62 => 9,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "plaza/blog/post/list.twig", "");
    }
}
