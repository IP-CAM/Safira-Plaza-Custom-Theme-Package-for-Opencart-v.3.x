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

/* plaza/module/ptfeaturedcate.twig */
class __TwigTemplate_8ea1dffd1affbf3d1f1959d64795ae427ce7c9381e890ec879b17116295d1b05 extends \Twig\Template
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
                <button type=\"submit\" form=\"form-ptfeaturedcate\" data-toggle=\"tooltip\" title=\"";
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
            <ul class=\"breadcrumb theme-option-breadcrumb\">
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
            echo "            <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-ptfeaturedcate\" class=\"form-horizontal\">
                        <div class=\"form-group required\">
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
        // line 39
        echo ($context["entry_status"] ?? null);
        echo "</label>
                            <div class=\"col-sm-6\">
                                <input type=\"hidden\" name=\"status\" value=\"0\" />
                                <input type=\"checkbox\" class=\"ckb-switch\" name=\"status\" id=\"input-status\"
                                        data-toggle=\"toggle\" data-on=\"";
        // line 43
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"100\" data-height=\"36\"
                                        ";
        // line 44
        if (($context["status"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                            </div>
                        </div>

                        <ul class=\"nav nav-tabs hoz-ul-sections ul-feature-cate\">
                            <li class=\"active\"><a href=\"#tab-slider\" data-toggle=\"tab\">";
        // line 49
        echo ($context["tab_slider_settings"] ?? null);
        echo "</a></li>
                            <li><a href=\"#tab-cate\" data-toggle=\"tab\">";
        // line 50
        echo ($context["tab_show_cate"] ?? null);
        echo "</a></li>
                        </ul>
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" id=\"tab-slider\">
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-3 control-label\" for=\"input-width\">";
        // line 55
        echo ($context["entry_width"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" name=\"width\" value=\"";
        // line 57
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
                                        ";
        // line 58
        if (($context["error_width"] ?? null)) {
            // line 59
            echo "                                            <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
                                        ";
        }
        // line 61
        echo "                                    </div>
                                </div>
                                <div class=\"form-group required\">
                                    <label class=\"col-sm-3 control-label\" for=\"input-height\">";
        // line 64
        echo ($context["entry_height"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" name=\"height\" value=\"";
        // line 66
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
                                        ";
        // line 67
        if (($context["error_height"] ?? null)) {
            // line 68
            echo "                                            <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
                                        ";
        }
        // line 70
        echo "                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for=\"input-limit\">";
        // line 73
        echo ($context["entry_limit"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" name=\"limit\" value=\"";
        // line 75
        echo ($context["limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit"] ?? null);
        echo "\" id=\"input-limit\" class=\"form-control\" />
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for=\"input-item\">";
        // line 79
        echo ($context["entry_item"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" name=\"item\" value=\"";
        // line 81
        echo ($context["item"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_item"] ?? null);
        echo "\" id=\"input-item\" class=\"form-control\" />
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for=\"input-speed\">";
        // line 85
        echo ($context["entry_speed"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" name=\"speed\" value=\"";
        // line 87
        echo ($context["speed"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_speed"] ?? null);
        echo "\" id=\"input-speed\" class=\"form-control\" />
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for=\"input-autoplay\">";
        // line 91
        echo ($context["entry_autoplay"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-6\">
                                        <input type=\"hidden\" name=\"autoplay\" value=\"0\" />
                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"autoplay\" id=\"input-autoplay\"
                                                data-toggle=\"toggle\" data-on=\"";
        // line 95
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"100\" data-height=\"36\"
                                                ";
        // line 96
        if (($context["autoplay"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for=\"input-rows\">";
        // line 100
        echo ($context["entry_rows"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" name=\"rows\" value=\"";
        // line 102
        echo ($context["rows"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_rows"] ?? null);
        echo "\" id=\"input-rows\" class=\"form-control\" />
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for=\"input-shownextback\">";
        // line 106
        echo ($context["entry_shownextback"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-6\">
                                        <input type=\"hidden\" name=\"shownextback\" value=\"0\" />
                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"shownextback\" id=\"input-shownextback\"
                                                data-toggle=\"toggle\" data-on=\"";
        // line 110
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"100\" data-height=\"36\"
                                                ";
        // line 111
        if (($context["shownextback"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for=\"input-shownav\">";
        // line 115
        echo ($context["entry_shownav"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-6\">
                                        <input type=\"hidden\" name=\"shownav\" value=\"0\" />
                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"shownav\" id=\"input-shownav\"
                                                data-toggle=\"toggle\" data-on=\"";
        // line 119
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"100\" data-height=\"36\"
                                                ";
        // line 120
        if (($context["shownav"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                                    </div>
                                </div>
                            </div>

                            <div class=\"tab-pane\" id=\"tab-cate\">
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for=\"input-slider\">";
        // line 127
        echo ($context["entry_slider"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-6\">
                                        <input type=\"hidden\" name=\"slider\" value=\"0\" />
                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"slider\" id=\"input-slider\"
                                                data-toggle=\"toggle\" data-on=\"";
        // line 131
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"100\" data-height=\"36\"
                                                ";
        // line 132
        if (($context["slider"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for=\"input-showdes\">";
        // line 136
        echo ($context["entry_showdes"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-6\">
                                        <input type=\"hidden\" name=\"showcatedes\" value=\"0\" />
                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"showcatedes\" id=\"input-showdes\"
                                                data-toggle=\"toggle\" data-on=\"";
        // line 140
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"100\" data-height=\"36\"
                                                ";
        // line 141
        if (($context["showcatedes"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for=\"input-showsub\">";
        // line 145
        echo ($context["entry_showsub"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-6\">
                                        <input type=\"hidden\" name=\"showsub\" value=\"0\" />
                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"showsub\" id=\"input-showsub\"
                                                data-toggle=\"toggle\" data-on=\"";
        // line 149
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"100\" data-height=\"36\"
                                                ";
        // line 150
        if (($context["showsub"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                                    </div>
                                </div>
                                <div class=\"form-group \">
                                    <label class=\"col-sm-3 control-label\" for=\"input-showsubnumber\">";
        // line 154
        echo ($context["entry_showsubnumber"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" name=\"showsubnumber\" value=\"";
        // line 156
        echo ($context["showsubnumber"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_showsubnumber"] ?? null);
        echo "\" id=\"input-showsubnumber\" class=\"form-control\" />
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-3 control-label\" for=\"input-image\">";
        // line 160
        echo ($context["entry_use_cate_image"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-6\">
                                        <input type=\"hidden\" name=\"use_cate_second_image\" value=\"0\" />
                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"use_cate_second_image\" id=\"input-image\"
                                               data-toggle=\"toggle\" data-on=\"";
        // line 164
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"100\" data-height=\"36\"
                                                ";
        // line 165
        if (($context["use_cate_second_image"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type=\"text/javascript\">
    \$(document).ready(function() {
        \$('.toggle.btn').on('click', function () {
            var ckb_status = parseInt(\$(this).find('.ckb-switch').val());
            if(ckb_status == 1) {
                \$(this).find('.ckb-switch').val('0');
            } else {
                \$(this).find('.ckb-switch').val('1');
            }
        });
    });
</script>
";
        // line 188
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "plaza/module/ptfeaturedcate.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  477 => 188,  447 => 165,  441 => 164,  434 => 160,  425 => 156,  420 => 154,  409 => 150,  403 => 149,  396 => 145,  385 => 141,  379 => 140,  372 => 136,  361 => 132,  355 => 131,  348 => 127,  334 => 120,  328 => 119,  321 => 115,  310 => 111,  304 => 110,  297 => 106,  288 => 102,  283 => 100,  272 => 96,  266 => 95,  259 => 91,  250 => 87,  245 => 85,  236 => 81,  231 => 79,  222 => 75,  217 => 73,  212 => 70,  206 => 68,  204 => 67,  198 => 66,  193 => 64,  188 => 61,  182 => 59,  180 => 58,  174 => 57,  169 => 55,  161 => 50,  157 => 49,  145 => 44,  139 => 43,  132 => 39,  127 => 36,  121 => 34,  119 => 33,  113 => 32,  108 => 30,  103 => 28,  97 => 25,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "plaza/module/ptfeaturedcate.twig", "");
    }
}
