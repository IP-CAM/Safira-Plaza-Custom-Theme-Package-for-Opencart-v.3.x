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

/* plaza/module/pttestimonial.twig */
class __TwigTemplate_0d71095b73d7b13b7f8c717974288060fec107adca55c20be81a4d526272337c extends \Twig\Template
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
                <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
            <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "                    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "            <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
        ";
        }
        // line 22
        echo "        <div class=\"theme-option-container\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo ($context["text_edit"] ?? null);
        echo "</h3>
                </div>
                <div class=\"panel-body\">
                    <form action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\" for=\"input-name\">";
        // line 30
        echo ($context["entry_name"] ?? null);
        echo "</label>
                            <div class=\"col-sm-6\">
                                <input type=\"text\" name=\"name\" value=\"";
        // line 32
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                                ";
        // line 33
        if (($context["error_name"] ?? null)) {
            // line 34
            echo "                                    <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                                ";
        }
        // line 36
        echo "                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\" for=\"input-status\">";
        // line 40
        echo ($context["entry_status"] ?? null);
        echo "</label>
                            <div class=\"col-sm-6\">
                                <input type=\"hidden\" name=\"status\" value=\"0\" />
                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"status\" id=\"input-status\"
                                       data-toggle=\"toggle\" data-on=\"";
        // line 44
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"100\" data-height=\"36\"
                                        ";
        // line 45
        if (($context["status"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-3 control-label\" for=\"input-width\">";
        // line 50
        echo ($context["entry_width"] ?? null);
        echo "</label>
                            <div class=\"col-sm-3\">
                                <input type=\"text\" name=\"width\" value=\"";
        // line 52
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
                                ";
        // line 53
        if (($context["error_width"] ?? null)) {
            // line 54
            echo "                                    <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
                                ";
        }
        // line 56
        echo "                            </div>
                        </div>

                        <div class=\"form-group required\">
                            <label class=\"col-sm-3 control-label\" for=\"input-height\">";
        // line 60
        echo ($context["entry_height"] ?? null);
        echo "</label>
                            <div class=\"col-sm-3\">
                                <input type=\"text\" name=\"height\" value=\"";
        // line 62
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
                                ";
        // line 63
        if (($context["error_height"] ?? null)) {
            // line 64
            echo "                                    <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
                                ";
        }
        // line 66
        echo "                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\" for=\"input-auto\">";
        // line 70
        echo ($context["entry_auto"] ?? null);
        echo "</label>
                            <div class=\"col-sm-6\">
                                <input type=\"hidden\" name=\"auto\" value=\"0\" />
                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"auto\" id=\"input-auto\"
                                       data-toggle=\"toggle\" data-on=\"";
        // line 74
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"100\" data-height=\"36\"
                                        ";
        // line 75
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
        // line 80
        echo ($context["entry_items"] ?? null);
        echo "</label>
                            <div class=\"col-sm-3\">
                                <input type=\"text\" name=\"items\" value=\"";
        // line 82
        echo ($context["items"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_items"] ?? null);
        echo "\" id=\"input-items\" class=\"form-control\" />
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\" for=\"input-limit\">";
        // line 87
        echo ($context["entry_limit"] ?? null);
        echo "</label>
                            <div class=\"col-sm-3\">
                                <input type=\"text\" name=\"limit\" value=\"";
        // line 89
        echo ($context["limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit"] ?? null);
        echo "\" id=\"input-limit\" class=\"form-control\" />
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\" for=\"input-speed\">";
        // line 94
        echo ($context["entry_speed"] ?? null);
        echo "</label>
                            <div class=\"col-sm-3\">
                                <input type=\"text\" name=\"speed\" value=\"";
        // line 96
        echo ($context["speed"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_speed"] ?? null);
        echo "\" id=\"input-speed\" class=\"form-control\" />
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\" for=\"input-rows\">";
        // line 101
        echo ($context["entry_rows"] ?? null);
        echo "</label>
                            <div class=\"col-sm-3\">
                                <input type=\"text\" name=\"rows\" value=\"";
        // line 103
        echo ($context["rows"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_rows"] ?? null);
        echo "\" id=\"input-rows\" class=\"form-control\" />
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"col-sm-3 control-label\" for=\"input-navigation\">";
        // line 108
        echo ($context["entry_navigation"] ?? null);
        echo "</label>
                            <div class=\"col-sm-6\">
                                <input type=\"hidden\" name=\"navigation\" value=\"0\" />
                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"navigation\" id=\"input-navigation\"
                                       data-toggle=\"toggle\" data-on=\"";
        // line 112
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"100\" data-height=\"36\"
                                        ";
        // line 113
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
        // line 118
        echo ($context["entry_pagination"] ?? null);
        echo "</label>
                            <div class=\"col-sm-6\">
                                <input type=\"hidden\" name=\"pagination\" value=\"0\" />
                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"pagination\" id=\"input-pagination\"
                                       data-toggle=\"toggle\" data-on=\"";
        // line 122
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"100\" data-height=\"36\"
                                        ";
        // line 123
        if (($context["pagination"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    \$(document).ready(function() {
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
        // line 144
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "plaza/module/pttestimonial.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 144,  331 => 123,  325 => 122,  318 => 118,  306 => 113,  300 => 112,  293 => 108,  283 => 103,  278 => 101,  268 => 96,  263 => 94,  253 => 89,  248 => 87,  238 => 82,  233 => 80,  221 => 75,  215 => 74,  208 => 70,  202 => 66,  196 => 64,  194 => 63,  188 => 62,  183 => 60,  177 => 56,  171 => 54,  169 => 53,  163 => 52,  158 => 50,  146 => 45,  140 => 44,  133 => 40,  127 => 36,  121 => 34,  119 => 33,  113 => 32,  108 => 30,  103 => 28,  97 => 25,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "plaza/module/pttestimonial.twig", "");
    }
}
