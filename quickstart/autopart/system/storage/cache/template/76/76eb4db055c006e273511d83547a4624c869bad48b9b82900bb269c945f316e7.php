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

/* plaza/module/ptblog.twig */
class __TwigTemplate_6cdf2834cd81137921bea0ba1ba575e525152a857906759e934eb3a103c0353a extends \Twig\Template
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
                <button type=\"submit\" form=\"form-blog\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
            </div>
            <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "            <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 23
        echo "        <div class=\"theme-option-container\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 26
        echo ($context["text_edit"] ?? null);
        echo "</h3>
                </div>
                <div class=\"panel-body\">
                    <form action=\"";
        // line 29
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-blog\" class=\"form-horizontal\">
                        <fieldset>
                            <div class=\"form-group required\">
                                <label class=\"col-sm-3 control-label\" for=\"input-name\">";
        // line 32
        echo ($context["entry_name"] ?? null);
        echo "</label>
                                <div class=\"col-sm-6\">
                                    <input type=\"text\" name=\"name\" value=\"";
        // line 34
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                                    ";
        // line 35
        if (($context["error_name"] ?? null)) {
            // line 36
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                                    ";
        }
        // line 38
        echo "                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\" for=\"input-status\">";
        // line 41
        echo ($context["entry_status"] ?? null);
        echo "</label>
                                <div class=\"col-sm-6\">
                                    <input type=\"hidden\" name=\"status\" value=\"0\" />
                                    <input type=\"checkbox\" class=\"ckb-switch\" name=\"status\" id=\"input-status\"
                                           data-toggle=\"toggle\" data-on=\"";
        // line 45
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"100\" data-height=\"36\"
                                            ";
        // line 46
        if (($context["status"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\" for=\"input-list\">";
        // line 50
        echo ($context["entry_post_list"] ?? null);
        echo "</label>
                                <div class=\"col-sm-6\">
                                    <select name=\"list\" id=\"input-list\" class=\"form-control\">
                                        ";
        // line 53
        if (($context["post_lists"] ?? null)) {
            // line 54
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["post_lists"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post_list"]) {
                // line 55
                echo "                                                ";
                if (($context["list"] ?? null)) {
                    // line 56
                    echo "                                                    ";
                    if ((($context["list"] ?? null) == twig_get_attribute($this->env, $this->source, $context["post_list"], "post_list_id", [], "any", false, false, false, 56))) {
                        // line 57
                        echo "                                                        <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["post_list"], "post_list_id", [], "any", false, false, false, 57);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["post_list"], "name", [], "any", false, false, false, 57);
                        echo "</option>
                                                    ";
                    } else {
                        // line 59
                        echo "                                                        <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["post_list"], "post_list_id", [], "any", false, false, false, 59);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["post_list"], "name", [], "any", false, false, false, 59);
                        echo "</option>
                                                    ";
                    }
                    // line 61
                    echo "                                                ";
                } else {
                    // line 62
                    echo "                                                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["post_list"], "post_list_id", [], "any", false, false, false, 62);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["post_list"], "name", [], "any", false, false, false, 62);
                    echo "</option>
                                                ";
                }
                // line 64
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post_list'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                                        ";
        }
        // line 66
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group required\">
                                <label class=\"col-sm-3 control-label\" for=\"input-width\">";
        // line 70
        echo ($context["entry_width"] ?? null);
        echo "</label>
                                <div class=\"col-sm-3\">
                                    <input type=\"text\" name=\"width\" value=\"";
        // line 72
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
                                    ";
        // line 73
        if (($context["error_width"] ?? null)) {
            // line 74
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
                                    ";
        }
        // line 76
        echo "                                </div>
                            </div>

                            <div class=\"form-group required\">
                                <label class=\"col-sm-3 control-label\" for=\"input-height\">";
        // line 80
        echo ($context["entry_height"] ?? null);
        echo "</label>
                                <div class=\"col-sm-3\">
                                    <input type=\"text\" name=\"height\" value=\"";
        // line 82
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
                                    ";
        // line 83
        if (($context["error_height"] ?? null)) {
            // line 84
            echo "                                        <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
                                    ";
        }
        // line 86
        echo "                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\" for=\"input-auto\">";
        // line 90
        echo ($context["entry_auto"] ?? null);
        echo "</label>
                                <div class=\"col-sm-6\">
                                    <input type=\"hidden\" name=\"auto\" value=\"0\" />
                                    <input type=\"checkbox\" class=\"ckb-switch\" name=\"auto\" id=\"input-auto\"
                                           data-toggle=\"toggle\" data-on=\"";
        // line 94
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"100\" data-height=\"36\"
                                            ";
        // line 95
        if (($context["auto"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\" for=\"input-items\">";
        // line 100
        echo ($context["entry_items"] ?? null);
        echo "</label>
                                <div class=\"col-sm-3\">
                                    <input type=\"text\" name=\"items\" value=\"";
        // line 102
        echo ($context["items"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_items"] ?? null);
        echo "\" id=\"input-items\" class=\"form-control\" />
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\" for=\"input-speed\">";
        // line 107
        echo ($context["entry_speed"] ?? null);
        echo "</label>
                                <div class=\"col-sm-3\">
                                    <input type=\"text\" name=\"speed\" value=\"";
        // line 109
        echo ($context["speed"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_speed"] ?? null);
        echo "\" id=\"input-speed\" class=\"form-control\" />
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\" for=\"input-rows\">";
        // line 114
        echo ($context["entry_rows"] ?? null);
        echo "</label>
                                <div class=\"col-sm-3\">
                                    <input type=\"text\" name=\"rows\" value=\"";
        // line 116
        echo ($context["rows"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_rows"] ?? null);
        echo "\" id=\"input-rows\" class=\"form-control\" />
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\" for=\"input-navigation\">";
        // line 121
        echo ($context["entry_navigation"] ?? null);
        echo "</label>
                                <div class=\"col-sm-6\">
                                    <input type=\"hidden\" name=\"navigation\" value=\"0\" />
                                    <input type=\"checkbox\" class=\"ckb-switch\" name=\"navigation\" id=\"input-navigation\"
                                           data-toggle=\"toggle\" data-on=\"";
        // line 125
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"100\" data-height=\"36\"
                                            ";
        // line 126
        if (($context["navigation"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label\" for=\"input-pagination\">";
        // line 131
        echo ($context["entry_pagination"] ?? null);
        echo "</label>
                                <div class=\"col-sm-6\">
                                    <input type=\"hidden\" name=\"pagination\" value=\"0\" />
                                    <input type=\"checkbox\" class=\"ckb-switch\" name=\"pagination\" id=\"input-pagination\"
                                           data-toggle=\"toggle\" data-on=\"";
        // line 135
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"100\" data-height=\"36\"
                                            ";
        // line 136
        if (($context["pagination"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type=\"text/javascript\">
    \$(document).ready(function () {
        \$('.toggle.btn').on('click', function () {
            var ckb_status = parseInt(\$(this).find('.ckb-switch').val());
            if(ckb_status == 1) {
                \$(this).find('.ckb-switch').val('0');
            } else {
                \$(this).find('.ckb-switch').val('1');
            }
        });
    })
</script>
";
        // line 158
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "plaza/module/ptblog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 158,  377 => 136,  371 => 135,  364 => 131,  352 => 126,  346 => 125,  339 => 121,  329 => 116,  324 => 114,  314 => 109,  309 => 107,  299 => 102,  294 => 100,  282 => 95,  276 => 94,  269 => 90,  263 => 86,  257 => 84,  255 => 83,  249 => 82,  244 => 80,  238 => 76,  232 => 74,  230 => 73,  224 => 72,  219 => 70,  213 => 66,  210 => 65,  204 => 64,  196 => 62,  193 => 61,  185 => 59,  177 => 57,  174 => 56,  171 => 55,  166 => 54,  164 => 53,  158 => 50,  147 => 46,  141 => 45,  134 => 41,  129 => 38,  123 => 36,  121 => 35,  115 => 34,  110 => 32,  104 => 29,  98 => 26,  93 => 23,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "plaza/module/ptblog.twig", "");
    }
}
