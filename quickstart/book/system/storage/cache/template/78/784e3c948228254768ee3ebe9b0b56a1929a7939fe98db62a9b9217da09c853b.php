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

/* plaza/module/ptmenu.twig */
class __TwigTemplate_4fe036d13dac3d1a89754ea283d70fd6a97d0f05667989e8d485d75431a8b27b extends \Twig\Template
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
                        <ul class=\"nav nav-tabs hoz-ul-sections\">
                            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 30
        echo ($context["text_general_setting"] ?? null);
        echo "</a></li>
                            <li><a href=\"#tab-menu-bar\" data-toggle=\"tab\">";
        // line 31
        echo ($context["text_menu_bar_setting"] ?? null);
        echo "</a></li>
                            <li><a href=\"#tab-top-item\" data-toggle=\"tab\">";
        // line 32
        echo ($context["text_top_item_setting"] ?? null);
        echo "</a></li>
                            <li><a href=\"#tab-mega\" data-toggle=\"tab\">";
        // line 33
        echo ($context["text_mega_menu_setting"] ?? null);
        echo "</a></li>
                            <li><a href=\"#tab-flyout\" data-toggle=\"tab\">";
        // line 34
        echo ($context["text_flyout_menu_setting"] ?? null);
        echo "</a></li>
                        </ul>
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" id=\"tab-general\">
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 39
        echo ($context["entry_name"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-6\">
                                        <input type=\"text\" name=\"name\" value=\"";
        // line 41
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                                        ";
        // line 42
        if (($context["error_name"] ?? null)) {
            // line 43
            echo "                                            <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
                                        ";
        }
        // line 45
        echo "                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 48
        echo ($context["entry_status"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-6\">
                                        <input type=\"hidden\" name=\"status\" value=\"0\" />
                                        <input type=\"checkbox\" class=\"ckb-switch\" name=\"status\" id=\"input-status\"
                                               data-toggle=\"toggle\" data-on=\"";
        // line 52
        echo ($context["text_enabled"] ?? null);
        echo "\" data-off=\"";
        echo ($context["text_disabled"] ?? null);
        echo "\" data-width=\"100\" data-height=\"36\"
                                                ";
        // line 53
        if (($context["status"] ?? null)) {
            echo " value=\"1\" checked ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-menu\">";
        // line 57
        echo ($context["entry_choose_menu"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-4\">
                                        <select name=\"menu\" id=\"input-menu\" class=\"form-control\">
                                            ";
        // line 60
        if (($context["menus"] ?? null)) {
            // line 61
            echo "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["menus"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 62
                echo "                                                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 62);
                echo "\" ";
                if ((($context["menu"] ?? null) == twig_get_attribute($this->env, $this->source, $context["m"], "id", [], "any", false, false, false, 62))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["m"], "name", [], "any", false, false, false, 62);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                                            ";
        } else {
            // line 65
            echo "                                                <option>";
            echo ($context["text_no_menus"] ?? null);
            echo "</option>
                                            ";
        }
        // line 67
        echo "                                        </select>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-effect\">";
        // line 71
        echo ($context["entry_effect"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-4\">
                                        <select name=\"effect\" id=\"input-effect\" class=\"form-control\">
                                            <option value=\"none\"  ";
        // line 74
        if ((($context["effect"] ?? null) == "none")) {
            echo "  selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_none"] ?? null);
        echo " </option>
                                            <option value=\"fade\"  ";
        // line 75
        if ((($context["effect"] ?? null) == "fade")) {
            echo "  selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_fade"] ?? null);
        echo " </option>
                                            <option value=\"slide\" ";
        // line 76
        if ((($context["effect"] ?? null) == "slide")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_slide"] ?? null);
        echo "</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class=\"tab-pane\" id=\"tab-menu-bar\">
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-menu-bg\">";
        // line 84
        echo ($context["entry_menu_background"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-2\">
                                        <input type=\"text\" id=\"input-menu-bg\" class=\"jscolor form-control\" name=\"menu_bg\" value=\"";
        // line 86
        echo ($context["menu_bg"] ?? null);
        echo "\" />
                                    </div>
                                </div>
\t\t\t\t\t\t\t\t
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-menu-text-color\">";
        // line 91
        echo ($context["entry_menu_text_color"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-2\">
                                        <input type=\"text\" id=\"input-menu-text-color\" class=\"jscolor form-control\" name=\"menu_text_color\" value=\"";
        // line 93
        echo ($context["menu_text_color"] ?? null);
        echo "\" />
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-menu-padding\">";
        // line 97
        echo ($context["entry_menu_padding"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-2\">
                                        <div class=\"form-sp\"><span>";
        // line 99
        echo ($context["text_top"] ?? null);
        echo "</span></div>
                                        <input type=\"text\" class=\"form-control\" name=\"menu_pd_top\" value=\"";
        // line 100
        echo ($context["menu_pd_top"] ?? null);
        echo "\" />
                                    </div>
                                    <div class=\"col-sm-2\">
                                        <div class=\"form-sp\"><span>";
        // line 103
        echo ($context["text_right"] ?? null);
        echo "</span></div>
                                        <input type=\"text\" class=\"form-control\" name=\"menu_pd_right\" value=\"";
        // line 104
        echo ($context["menu_pd_right"] ?? null);
        echo "\" />
                                    </div>
                                    <div class=\"col-sm-2\">
                                        <div class=\"form-sp\"><span>";
        // line 107
        echo ($context["text_bottom"] ?? null);
        echo "</span></div>
                                        <input type=\"text\" class=\"form-control\" name=\"menu_pd_bottom\" value=\"";
        // line 108
        echo ($context["menu_pd_bottom"] ?? null);
        echo "\" />
                                    </div>
                                    <div class=\"col-sm-2\">
                                        <div class=\"form-sp\"><span>";
        // line 111
        echo ($context["text_left"] ?? null);
        echo "</span></div>
                                        <input type=\"text\" class=\"form-control\" name=\"menu_pd_left\" value=\"";
        // line 112
        echo ($context["menu_pd_left"] ?? null);
        echo "\" />
                                    </div>
                                </div>
                            </div>

                            <div class=\"tab-pane\" id=\"tab-top-item\">
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-item-bg\">";
        // line 119
        echo ($context["entry_item_background"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-2\">
                                        <div class=\"form-sp\"><span>";
        // line 121
        echo ($context["text_static"] ?? null);
        echo "</span></div>
                                        <input type=\"text\" id=\"input-item-bg\" class=\"jscolor form-control\" name=\"item_bg\" value=\"";
        // line 122
        echo ($context["item_bg"] ?? null);
        echo "\" />
                                    </div>
                                    <div class=\"col-sm-2\">
                                        <div class=\"form-sp\"><span>";
        // line 125
        echo ($context["text_hover"] ?? null);
        echo "</span></div>
                                        <input type=\"text\" id=\"input-item-bg-hover\" class=\"jscolor form-control\" name=\"item_bg_hover\" value=\"";
        // line 126
        echo ($context["item_bg_hover"] ?? null);
        echo "\" />
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-item-font\">";
        // line 130
        echo ($context["entry_item_font"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-2\">
                                        <div class=\"form-sp\"><span>";
        // line 132
        echo ($context["text_color"] ?? null);
        echo "</span></div>
                                        <input type=\"text\" id=\"input-item-font\" class=\"jscolor form-control\" name=\"item_font_color\" value=\"";
        // line 133
        echo ($context["item_font_color"] ?? null);
        echo "\" />
                                    </div>
                                    <div class=\"col-sm-2\">
                                        <div class=\"form-sp\"><span>";
        // line 136
        echo ($context["text_size"] ?? null);
        echo "</span></div>
                                        <input type=\"text\" id=\"input-item-font-size\" class=\"form-control\" name=\"item_font_size\" value=\"";
        // line 137
        echo ($context["item_font_size"] ?? null);
        echo "\" />
                                    </div>
                                    <div class=\"col-sm-2\">
                                        <div class=\"form-sp\"><span>";
        // line 140
        echo ($context["text_transform"] ?? null);
        echo "</span></div>
                                        <select name=\"item_font_transform\" id=\"input-item-font-transform\" class=\"form-control\">
                                            <option value=\"none\"        ";
        // line 142
        if ((($context["item_font_transform"] ?? null) == "none")) {
            echo "        selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_normal"] ?? null);
        echo "    </option>
                                            <option value=\"capitalize\"  ";
        // line 143
        if ((($context["item_font_transform"] ?? null) == "capitalize")) {
            echo "  selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_capitalize"] ?? null);
        echo "</option>
                                            <option value=\"uppercase\"   ";
        // line 144
        if ((($context["item_font_transform"] ?? null) == "uppercase")) {
            echo "   selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_uppercase"] ?? null);
        echo " </option>
                                            <option value=\"lowercase\"   ";
        // line 145
        if ((($context["item_font_transform"] ?? null) == "lowercase")) {
            echo "   selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_lowercase"] ?? null);
        echo " </option>
                                        </select>
                                    </div>
                                    <div class=\"col-sm-2\">
                                        <div class=\"form-sp\"><span>";
        // line 149
        echo ($context["text_weight"] ?? null);
        echo "</span></div>
                                        <select name=\"item_font_weight\" id=\"input-item-font-weigth\" class=\"form-control\">
                                            <option value=\"300\" ";
        // line 151
        if ((($context["item_font_weight"] ?? null) == "300")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_light"] ?? null) . " (300)");
        echo " </option>
                                            <option value=\"400\" ";
        // line 152
        if ((($context["item_font_weight"] ?? null) == "400")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_normal"] ?? null) . " (400)");
        echo "  </option>
                                            <option value=\"500\" ";
        // line 153
        if ((($context["item_font_weight"] ?? null) == "500")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_medium"] ?? null) . " (500)");
        echo "  </option>
                                            <option value=\"600\" ";
        // line 154
        if ((($context["item_font_weight"] ?? null) == "600")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_semibold"] ?? null) . " (600)");
        echo "  </option>
                                            <option value=\"700\" ";
        // line 155
        if ((($context["item_font_weight"] ?? null) == "700")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_bold"] ?? null) . " (700)");
        echo "  </option>
                                        </select>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-item-font-hover\">";
        // line 160
        echo (((($context["entry_item_font"] ?? null) . " (") . ($context["text_hover"] ?? null)) . ")");
        echo "</label>
                                    <div class=\"col-sm-2\">
                                        <div class=\"form-sp\"><span>";
        // line 162
        echo ($context["text_color"] ?? null);
        echo "</span></div>
                                        <input type=\"text\" id=\"input-item-font-hover\" class=\"jscolor form-control\" name=\"item_font_color_hover\" value=\"";
        // line 163
        echo ($context["item_font_color_hover"] ?? null);
        echo "\" />
                                    </div>
                                    <div class=\"col-sm-2\">
                                        <div class=\"form-sp\"><span>";
        // line 166
        echo ($context["text_weight"] ?? null);
        echo "</span></div>
                                        <select name=\"item_font_weight_hover\" id=\"input-item-font-weigth-hover\" class=\"form-control\">
                                            <option value=\"300\" ";
        // line 168
        if ((($context["item_font_weight_hover"] ?? null) == "300")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_light"] ?? null) . " (300)");
        echo " </option>
                                            <option value=\"400\" ";
        // line 169
        if ((($context["item_font_weight_hover"] ?? null) == "400")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_normal"] ?? null) . " (400)");
        echo "  </option>
                                            <option value=\"500\" ";
        // line 170
        if ((($context["item_font_weight_hover"] ?? null) == "500")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_medium"] ?? null) . " (500)");
        echo "  </option>
                                            <option value=\"600\" ";
        // line 171
        if ((($context["item_font_weight_hover"] ?? null) == "600")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_semibold"] ?? null) . " (600)");
        echo "  </option>
                                            <option value=\"700\" ";
        // line 172
        if ((($context["item_font_weight_hover"] ?? null) == "700")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_bold"] ?? null) . " (700)");
        echo "  </option>
                                        </select>
                                    </div>
                                </div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-item-padding\">";
        // line 177
        echo ($context["entry_menu_padding"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-2\">
                                        <div class=\"form-sp\"><span>";
        // line 179
        echo ($context["text_top"] ?? null);
        echo "</span></div>
                                        <input type=\"text\" class=\"form-control\" name=\"item_pd_top\" value=\"";
        // line 180
        echo ($context["item_pd_top"] ?? null);
        echo "\" />
                                    </div>
                                    <div class=\"col-sm-2\">
                                        <div class=\"form-sp\"><span>";
        // line 183
        echo ($context["text_right"] ?? null);
        echo "</span></div>
                                        <input type=\"text\" class=\"form-control\" name=\"item_pd_right\" value=\"";
        // line 184
        echo ($context["item_pd_right"] ?? null);
        echo "\" />
                                    </div>
                                    <div class=\"col-sm-2\">
                                        <div class=\"form-sp\"><span>";
        // line 187
        echo ($context["text_bottom"] ?? null);
        echo "</span></div>
                                        <input type=\"text\" class=\"form-control\" name=\"item_pd_bottom\" value=\"";
        // line 188
        echo ($context["item_pd_bottom"] ?? null);
        echo "\" />
                                    </div>
                                    <div class=\"col-sm-2\">
                                        <div class=\"form-sp\"><span>";
        // line 191
        echo ($context["text_left"] ?? null);
        echo "</span></div>
                                        <input type=\"text\" class=\"form-control\" name=\"item_pd_left\" value=\"";
        // line 192
        echo ($context["item_pd_left"] ?? null);
        echo "\" />
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-item-show\">";
        // line 196
        echo ($context["entry_number_items"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-2\">
                                        <input type=\"text\" name=\"item_show\" value=\"";
        // line 198
        echo ($context["item_show"] ?? null);
        echo "\" id=\"input-item-show\" class=\"form-control\" />
                                    </div>
                                    <div class=\"col-sm-6 control-label\" style=\"text-align: left\">
                                        <i class=\"fa fa-exclamation-circle\"></i> <i>";
        // line 201
        echo ($context["text_for_menu"] ?? null);
        echo "</i>
                                    </div>
                                </div>
                            </div>

                            <div class=\"tab-pane\" id=\"tab-mega\">
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-mega-menu-bg\">";
        // line 208
        echo ($context["entry_menu_background"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-2\">
                                        <input type=\"text\" id=\"input-mega-menu-bg\" class=\"jscolor form-control\" name=\"mega_menu_bg\" value=\"";
        // line 210
        echo ($context["mega_menu_bg"] ?? null);
        echo "\" />
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-mega-sub-item\">";
        // line 214
        echo ($context["entry_menu_sub_item"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
                                        <div class=\"form-sp\"><span>";
        // line 216
        echo ($context["text_color"] ?? null);
        echo "</span></div>
                                        <input type=\"text\" id=\"input-mega-sub-item-font\" class=\"jscolor form-control\" name=\"mega_sub_item_font_color\" value=\"";
        // line 217
        echo ($context["mega_sub_item_font_color"] ?? null);
        echo "\" />
                                    </div>
                                    <div class=\"col-sm-2\">
                                        <div class=\"form-sp\"><span>";
        // line 220
        echo ($context["text_size"] ?? null);
        echo "</span></div>
                                        <input type=\"text\" id=\"input-mega-sub-item-font-size\" class=\"form-control\" name=\"mega_sub_item_font_size\" value=\"";
        // line 221
        echo ($context["mega_sub_item_font_size"] ?? null);
        echo "\" />
                                    </div>
                                    <div class=\"col-sm-2\">
                                        <div class=\"form-sp\"><span>";
        // line 224
        echo ($context["text_transform"] ?? null);
        echo "</span></div>
                                        <select name=\"mega_sub_item_font_transform\" id=\"input-mega-sub-item-font-transform\" class=\"form-control\">
                                            <option value=\"none\"        ";
        // line 226
        if ((($context["mega_sub_item_font_transform"] ?? null) == "none")) {
            echo "        selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_normal"] ?? null);
        echo "    </option>
                                            <option value=\"capitalize\"  ";
        // line 227
        if ((($context["mega_sub_item_font_transform"] ?? null) == "capitalize")) {
            echo "  selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_capitalize"] ?? null);
        echo "</option>
                                            <option value=\"uppercase\"   ";
        // line 228
        if ((($context["mega_sub_item_font_transform"] ?? null) == "uppercase")) {
            echo "   selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_uppercase"] ?? null);
        echo " </option>
                                            <option value=\"lowercase\"   ";
        // line 229
        if ((($context["mega_sub_item_font_transform"] ?? null) == "lowercase")) {
            echo "   selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_lowercase"] ?? null);
        echo " </option>
                                        </select>
                                    </div>
                                    <div class=\"col-sm-2\">
                                        <div class=\"form-sp\"><span>";
        // line 233
        echo ($context["text_weight"] ?? null);
        echo "</span></div>
                                        <select name=\"mega_sub_item_font_weight\" id=\"input-mega-sub-item-font-weigth\" class=\"form-control\">
                                            <option value=\"300\" ";
        // line 235
        if ((($context["mega_sub_item_font_weight"] ?? null) == "300")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_light"] ?? null) . " (300)");
        echo " </option>
                                            <option value=\"400\" ";
        // line 236
        if ((($context["mega_sub_item_font_weight"] ?? null) == "400")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_normal"] ?? null) . " (400)");
        echo "  </option>
                                            <option value=\"500\" ";
        // line 237
        if ((($context["mega_sub_item_font_weight"] ?? null) == "500")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_medium"] ?? null) . " (500)");
        echo "  </option>
                                            <option value=\"600\" ";
        // line 238
        if ((($context["mega_sub_item_font_weight"] ?? null) == "600")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_semibold"] ?? null) . " (600)");
        echo "  </option>
                                            <option value=\"700\" ";
        // line 239
        if ((($context["mega_sub_item_font_weight"] ?? null) == "700")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_bold"] ?? null) . " (700)");
        echo "  </option>
                                        </select>
                                    </div>
                                </div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-mega-sub-item\">";
        // line 244
        echo ($context["entry_menu_sub_item_hover"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
                                        <div class=\"form-sp\"><span>";
        // line 246
        echo ($context["text_color"] ?? null);
        echo "</span></div>
                                        <input type=\"text\" id=\"input-mega-sub-item-hover-font\" class=\"jscolor form-control\" name=\"mega_sub_item_hover_font_color\" value=\"";
        // line 247
        echo ($context["mega_sub_item_hover_font_color"] ?? null);
        echo "\" />
                                    </div>
                                    <div class=\"col-sm-2\">
                                        <div class=\"form-sp\"><span>";
        // line 250
        echo ($context["text_weight"] ?? null);
        echo "</span></div>
                                        <select name=\"mega_sub_item_hover_font_weight\" id=\"input-mega-sub-item-hover-font-weigth\" class=\"form-control\">
                                            <option value=\"300\" ";
        // line 252
        if ((($context["mega_sub_item_hover_font_weight"] ?? null) == "300")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_light"] ?? null) . " (300)");
        echo " </option>
                                            <option value=\"400\" ";
        // line 253
        if ((($context["mega_sub_item_hover_font_weight"] ?? null) == "400")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_normal"] ?? null) . " (400)");
        echo "  </option>
                                            <option value=\"500\" ";
        // line 254
        if ((($context["mega_sub_item_hover_font_weight"] ?? null) == "500")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_medium"] ?? null) . " (500)");
        echo "  </option>
                                            <option value=\"600\" ";
        // line 255
        if ((($context["mega_sub_item_hover_font_weight"] ?? null) == "600")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_semibold"] ?? null) . " (600)");
        echo "  </option>
                                            <option value=\"700\" ";
        // line 256
        if ((($context["mega_sub_item_hover_font_weight"] ?? null) == "700")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_bold"] ?? null) . " (700)");
        echo "  </option>
                                        </select>
                                    </div>
                                </div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-mega-sub-item\">";
        // line 261
        echo ($context["entry_menu_sub_sub_item"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
                                        <div class=\"form-sp\"><span>";
        // line 263
        echo ($context["text_color"] ?? null);
        echo "</span></div>
                                        <input type=\"text\" id=\"input-mega-sub-sub-item-font\" class=\"jscolor form-control\" name=\"mega_sub_sub_item_font_color\" value=\"";
        // line 264
        echo ($context["mega_sub_sub_item_font_color"] ?? null);
        echo "\" />
                                    </div>
                                    <div class=\"col-sm-2\">
                                        <div class=\"form-sp\"><span>";
        // line 267
        echo ($context["text_size"] ?? null);
        echo "</span></div>
                                        <input type=\"text\" id=\"input-mega-sub-sub-item-font-size\" class=\"form-control\" name=\"mega_sub_sub_item_font_size\" value=\"";
        // line 268
        echo ($context["mega_sub_sub_item_font_size"] ?? null);
        echo "\" />
                                    </div>
                                    <div class=\"col-sm-2\">
                                        <div class=\"form-sp\"><span>";
        // line 271
        echo ($context["text_transform"] ?? null);
        echo "</span></div>
                                        <select name=\"mega_sub_sub_item_font_transform\" id=\"input-mega-sub-sub-item-font-transform\" class=\"form-control\">
                                            <option value=\"none\"        ";
        // line 273
        if ((($context["mega_sub_sub_item_font_transform"] ?? null) == "none")) {
            echo "        selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_normal"] ?? null);
        echo "    </option>
                                            <option value=\"capitalize\"  ";
        // line 274
        if ((($context["mega_sub_sub_item_font_transform"] ?? null) == "capitalize")) {
            echo "  selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_capitalize"] ?? null);
        echo "</option>
                                            <option value=\"uppercase\"   ";
        // line 275
        if ((($context["mega_sub_sub_item_font_transform"] ?? null) == "uppercase")) {
            echo "   selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_uppercase"] ?? null);
        echo " </option>
                                            <option value=\"lowercase\"   ";
        // line 276
        if ((($context["mega_sub_sub_item_font_transform"] ?? null) == "lowercase")) {
            echo "   selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_lowercase"] ?? null);
        echo " </option>
                                        </select>
                                    </div>
                                    <div class=\"col-sm-2\">
                                        <div class=\"form-sp\"><span>";
        // line 280
        echo ($context["text_weight"] ?? null);
        echo "</span></div>
                                        <select name=\"mega_sub_sub_item_font_weight\" id=\"input-mega-sub-sub-item-font-weigth\" class=\"form-control\">
                                            <option value=\"300\" ";
        // line 282
        if ((($context["mega_sub_sub_item_font_weight"] ?? null) == "300")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_light"] ?? null) . " (300)");
        echo " </option>
                                            <option value=\"400\" ";
        // line 283
        if ((($context["mega_sub_sub_item_font_weight"] ?? null) == "400")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_normal"] ?? null) . " (400)");
        echo "  </option>
                                            <option value=\"500\" ";
        // line 284
        if ((($context["mega_sub_sub_item_font_weight"] ?? null) == "500")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_medium"] ?? null) . " (500)");
        echo "  </option>
                                            <option value=\"600\" ";
        // line 285
        if ((($context["mega_sub_sub_item_font_weight"] ?? null) == "600")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_semibold"] ?? null) . " (600)");
        echo "  </option>
                                            <option value=\"700\" ";
        // line 286
        if ((($context["mega_sub_sub_item_font_weight"] ?? null) == "700")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_bold"] ?? null) . " (700)");
        echo "  </option>
                                        </select>
                                    </div>
                                </div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-mega-sub-sub-item\">";
        // line 291
        echo ($context["entry_menu_sub_sub_item_hover"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
                                        <div class=\"form-sp\"><span>";
        // line 293
        echo ($context["text_color"] ?? null);
        echo "</span></div>
                                        <input type=\"text\" id=\"input-mega-sub-sub-item-hover-font\" class=\"jscolor form-control\" name=\"mega_sub_sub_item_hover_font_color\" value=\"";
        // line 294
        echo ($context["mega_sub_sub_item_hover_font_color"] ?? null);
        echo "\" />
                                    </div>
                                    <div class=\"col-sm-2\">
                                        <div class=\"form-sp\"><span>";
        // line 297
        echo ($context["text_weight"] ?? null);
        echo "</span></div>
                                        <select name=\"mega_sub_sub_item_hover_font_weight\" id=\"input-mega-sub-sub-item-hover-font-weigth\" class=\"form-control\">
                                            <option value=\"300\" ";
        // line 299
        if ((($context["mega_sub_sub_item_hover_font_weight"] ?? null) == "300")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_light"] ?? null) . " (300)");
        echo " </option>
                                            <option value=\"400\" ";
        // line 300
        if ((($context["mega_sub_sub_item_hover_font_weight"] ?? null) == "400")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_normal"] ?? null) . " (400)");
        echo "  </option>
                                            <option value=\"500\" ";
        // line 301
        if ((($context["mega_sub_sub_item_hover_font_weight"] ?? null) == "500")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_medium"] ?? null) . " (500)");
        echo "  </option>
                                            <option value=\"600\" ";
        // line 302
        if ((($context["mega_sub_sub_item_hover_font_weight"] ?? null) == "600")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_semibold"] ?? null) . " (600)");
        echo "  </option>
                                            <option value=\"700\" ";
        // line 303
        if ((($context["mega_sub_sub_item_hover_font_weight"] ?? null) == "700")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_bold"] ?? null) . " (700)");
        echo "  </option>
                                        </select>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-mega-menu-padding\">";
        // line 308
        echo ($context["entry_menu_padding"] ?? null);
        echo "</label>
                                    <div class=\"col-sm-2\">
                                        <div class=\"form-sp\"><span>";
        // line 310
        echo ($context["text_top"] ?? null);
        echo "</span></div>
                                        <input type=\"text\" class=\"form-control\" name=\"mega_menu_pd_top\" value=\"";
        // line 311
        echo ($context["mega_menu_pd_top"] ?? null);
        echo "\" />
                                    </div>
                                    <div class=\"col-sm-2\">
                                        <div class=\"form-sp\"><span>";
        // line 314
        echo ($context["text_right"] ?? null);
        echo "</span></div>
                                        <input type=\"text\" class=\"form-control\" name=\"mega_menu_pd_right\" value=\"";
        // line 315
        echo ($context["mega_menu_pd_right"] ?? null);
        echo "\" />
                                    </div>
                                    <div class=\"col-sm-2\">
                                        <div class=\"form-sp\"><span>";
        // line 318
        echo ($context["text_bottom"] ?? null);
        echo "</span></div>
                                        <input type=\"text\" class=\"form-control\" name=\"mega_menu_pd_bottom\" value=\"";
        // line 319
        echo ($context["mega_menu_pd_bottom"] ?? null);
        echo "\" />
                                    </div>
                                    <div class=\"col-sm-2\">
                                        <div class=\"form-sp\"><span>";
        // line 322
        echo ($context["text_left"] ?? null);
        echo "</span></div>
                                        <input type=\"text\" class=\"form-control\" name=\"mega_menu_pd_left\" value=\"";
        // line 323
        echo ($context["mega_menu_pd_left"] ?? null);
        echo "\" />
                                    </div>
                                </div>
                            </div>

                            <div class=\"tab-pane\" id=\"tab-flyout\">
                                <ul class=\"nav nav-tabs\">
                                    <li class=\"active\"><a href=\"#tab-second-item\" data-toggle=\"tab\">";
        // line 330
        echo ($context["tab_second_item"] ?? null);
        echo "</a></li>
                                    <li><a href=\"#tab-third-item\" data-toggle=\"tab\">";
        // line 331
        echo ($context["tab_third_item"] ?? null);
        echo "</a></li>
                                </ul>
                                <div class=\"tab-content\">
                                    <div class=\"tab-pane active\" id=\"tab-second-item\">
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-second-item-bg\">";
        // line 336
        echo ($context["entry_item_background"] ?? null);
        echo "</label>
                                            <div class=\"col-sm-2\">
                                                <div class=\"form-sp\"><span>";
        // line 338
        echo ($context["text_static"] ?? null);
        echo "</span></div>
                                                <input type=\"text\" id=\"input-second-item-bg\" class=\"jscolor form-control\" name=\"second_item_bg\" value=\"";
        // line 339
        echo ($context["second_item_bg"] ?? null);
        echo "\" />
                                            </div>
                                            <div class=\"col-sm-2\">
                                                <div class=\"form-sp\"><span>";
        // line 342
        echo ($context["text_hover"] ?? null);
        echo "</span></div>
                                                <input type=\"text\" id=\"input-second-item-bg-hover\" class=\"jscolor form-control\" name=\"second_item_bg_hover\" value=\"";
        // line 343
        echo ($context["second_item_bg_hover"] ?? null);
        echo "\" />
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-second-item-font\">";
        // line 347
        echo ($context["entry_item_font"] ?? null);
        echo "</label>
                                            <div class=\"col-sm-2\">
                                                <div class=\"form-sp\"><span>";
        // line 349
        echo ($context["text_color"] ?? null);
        echo "</span></div>
                                                <input type=\"text\" id=\"input-second-item-font\" class=\"jscolor form-control\" name=\"second_item_font_color\" value=\"";
        // line 350
        echo ($context["second_item_font_color"] ?? null);
        echo "\" />
                                            </div>
                                            <div class=\"col-sm-2\">
                                                <div class=\"form-sp\"><span>";
        // line 353
        echo ($context["text_size"] ?? null);
        echo "</span></div>
                                                <input type=\"text\" id=\"input-second-item-font-size\" class=\"form-control\" name=\"second_item_font_size\" value=\"";
        // line 354
        echo ($context["second_item_font_size"] ?? null);
        echo "\" />
                                            </div>
                                            <div class=\"col-sm-2\">
                                                <div class=\"form-sp\"><span>";
        // line 357
        echo ($context["text_transform"] ?? null);
        echo "</span></div>
                                                <select name=\"second_item_font_transform\" id=\"input-second-item-font-transform\" class=\"form-control\">
                                                    <option value=\"none\"        ";
        // line 359
        if ((($context["second_item_font_transform"] ?? null) == "none")) {
            echo "        selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_normal"] ?? null);
        echo "    </option>
                                                    <option value=\"capitalize\"  ";
        // line 360
        if ((($context["second_item_font_transform"] ?? null) == "capitalize")) {
            echo "  selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_capitalize"] ?? null);
        echo "</option>
                                                    <option value=\"uppercase\"   ";
        // line 361
        if ((($context["second_item_font_transform"] ?? null) == "uppercase")) {
            echo "   selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_uppercase"] ?? null);
        echo " </option>
                                                    <option value=\"lowercase\"   ";
        // line 362
        if ((($context["second_item_font_transform"] ?? null) == "lowercase")) {
            echo "   selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_lowercase"] ?? null);
        echo " </option>
                                                </select>
                                            </div>
                                            <div class=\"col-sm-2\">
                                                <div class=\"form-sp\"><span>";
        // line 366
        echo ($context["text_weight"] ?? null);
        echo "</span></div>
                                                <select name=\"second_item_font_weight\" id=\"input-second-item-font-weigth\" class=\"form-control\">
                                                    <option value=\"300\" ";
        // line 368
        if ((($context["second_item_font_weight"] ?? null) == "300")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_light"] ?? null) . " (300)");
        echo " </option>
                                                    <option value=\"400\" ";
        // line 369
        if ((($context["second_item_font_weight"] ?? null) == "400")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_normal"] ?? null) . " (400)");
        echo "  </option>
                                                    <option value=\"500\" ";
        // line 370
        if ((($context["second_item_font_weight"] ?? null) == "500")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_medium"] ?? null) . " (500)");
        echo "  </option>
                                                    <option value=\"600\" ";
        // line 371
        if ((($context["second_item_font_weight"] ?? null) == "600")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_semibold"] ?? null) . " (600)");
        echo "  </option>
                                                    <option value=\"700\" ";
        // line 372
        if ((($context["second_item_font_weight"] ?? null) == "700")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_bold"] ?? null) . " (700)");
        echo "  </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-second-item-font-hover\">";
        // line 377
        echo (((($context["entry_item_font"] ?? null) . " (") . ($context["text_hover"] ?? null)) . ")");
        echo "</label>
                                            <div class=\"col-sm-2\">
                                                <div class=\"form-sp\"><span>";
        // line 379
        echo ($context["text_color"] ?? null);
        echo "</span></div>
                                                <input type=\"text\" id=\"input-second-item-font-hover\" class=\"jscolor form-control\" name=\"second_item_font_color_hover\" value=\"";
        // line 380
        echo ($context["second_item_font_color_hover"] ?? null);
        echo "\" />
                                            </div>
                                            <div class=\"col-sm-2\">
                                                <div class=\"form-sp\"><span>";
        // line 383
        echo ($context["text_weight"] ?? null);
        echo "</span></div>
                                                <select name=\"second_item_font_weight_hover\" id=\"input-second-item-font-weigth-hover\" class=\"form-control\">
                                                    <option value=\"300\" ";
        // line 385
        if ((($context["second_item_font_weight_hover"] ?? null) == "300")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_light"] ?? null) . " (300)");
        echo " </option>
                                                    <option value=\"400\" ";
        // line 386
        if ((($context["second_item_font_weight_hover"] ?? null) == "400")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_normal"] ?? null) . " (400)");
        echo "  </option>
                                                    <option value=\"500\" ";
        // line 387
        if ((($context["second_item_font_weight_hover"] ?? null) == "500")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_medium"] ?? null) . " (500)");
        echo "  </option>
                                                    <option value=\"600\" ";
        // line 388
        if ((($context["second_item_font_weight_hover"] ?? null) == "600")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_semibold"] ?? null) . " (600)");
        echo "  </option>
                                                    <option value=\"700\" ";
        // line 389
        if ((($context["second_item_font_weight_hover"] ?? null) == "700")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_bold"] ?? null) . " (700)");
        echo "  </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"tab-pane\" id=\"tab-third-item\">
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-third-item-bg\">";
        // line 396
        echo ($context["entry_item_background"] ?? null);
        echo "</label>
                                            <div class=\"col-sm-2\">
                                                <div class=\"form-sp\"><span>";
        // line 398
        echo ($context["text_static"] ?? null);
        echo "</span></div>
                                                <input type=\"text\" id=\"input-third-item-bg\" class=\"jscolor form-control\" name=\"third_item_bg\" value=\"";
        // line 399
        echo ($context["third_item_bg"] ?? null);
        echo "\" />
                                            </div>
                                            <div class=\"col-sm-2\">
                                                <div class=\"form-sp\"><span>";
        // line 402
        echo ($context["text_hover"] ?? null);
        echo "</span></div>
                                                <input type=\"text\" id=\"input-third-item-bg-hover\" class=\"jscolor form-control\" name=\"third_item_bg_hover\" value=\"";
        // line 403
        echo ($context["third_item_bg_hover"] ?? null);
        echo "\" />
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-third-item-font\">";
        // line 407
        echo ($context["entry_item_font"] ?? null);
        echo "</label>
                                            <div class=\"col-sm-2\">
                                                <div class=\"form-sp\"><span>";
        // line 409
        echo ($context["text_color"] ?? null);
        echo "</span></div>
                                                <input type=\"text\" id=\"input-third-item-font\" class=\"jscolor form-control\" name=\"third_item_font_color\" value=\"";
        // line 410
        echo ($context["third_item_font_color"] ?? null);
        echo "\" />
                                            </div>
                                            <div class=\"col-sm-2\">
                                                <div class=\"form-sp\"><span>";
        // line 413
        echo ($context["text_size"] ?? null);
        echo "</span></div>
                                                <input type=\"text\" id=\"input-third-item-font-size\" class=\"form-control\" name=\"third_item_font_size\" value=\"";
        // line 414
        echo ($context["third_item_font_size"] ?? null);
        echo "\" />
                                            </div>
                                            <div class=\"col-sm-2\">
                                                <div class=\"form-sp\"><span>";
        // line 417
        echo ($context["text_transform"] ?? null);
        echo "</span></div>
                                                <select name=\"third_item_font_transform\" id=\"input-third-item-font-transform\" class=\"form-control\">
                                                    <option value=\"none\"        ";
        // line 419
        if ((($context["third_item_font_transform"] ?? null) == "none")) {
            echo "        selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_normal"] ?? null);
        echo "    </option>
                                                    <option value=\"capitalize\"  ";
        // line 420
        if ((($context["third_item_font_transform"] ?? null) == "capitalize")) {
            echo "  selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_capitalize"] ?? null);
        echo "</option>
                                                    <option value=\"uppercase\"   ";
        // line 421
        if ((($context["third_item_font_transform"] ?? null) == "uppercase")) {
            echo "   selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_uppercase"] ?? null);
        echo " </option>
                                                    <option value=\"lowercase\"   ";
        // line 422
        if ((($context["third_item_font_transform"] ?? null) == "lowercase")) {
            echo "   selected=\"selected\" ";
        }
        echo ">";
        echo ($context["text_lowercase"] ?? null);
        echo " </option>
                                                </select>
                                            </div>
                                            <div class=\"col-sm-2\">
                                                <div class=\"form-sp\"><span>";
        // line 426
        echo ($context["text_weight"] ?? null);
        echo "</span></div>
                                                <select name=\"third_item_font_weight\" id=\"input-third-item-font-weigth\" class=\"form-control\">
                                                    <option value=\"300\" ";
        // line 428
        if ((($context["third_item_font_weight"] ?? null) == "300")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_light"] ?? null) . " (300)");
        echo " </option>
                                                    <option value=\"400\" ";
        // line 429
        if ((($context["third_item_font_weight"] ?? null) == "400")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_normal"] ?? null) . " (400)");
        echo "  </option>
                                                    <option value=\"700\" ";
        // line 430
        if ((($context["third_item_font_weight"] ?? null) == "700")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_bold"] ?? null) . " (700)");
        echo "  </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-third-item-font-hover\">";
        // line 435
        echo (((($context["entry_item_font"] ?? null) . " (") . ($context["text_hover"] ?? null)) . ")");
        echo "</label>
                                            <div class=\"col-sm-2\">
                                                <div class=\"form-sp\"><span>";
        // line 437
        echo ($context["text_color"] ?? null);
        echo "</span></div>
                                                <input type=\"text\" id=\"input-third-item-font-hover\" class=\"jscolor form-control\" name=\"third_item_font_color_hover\" value=\"";
        // line 438
        echo ($context["third_item_font_color_hover"] ?? null);
        echo "\" />
                                            </div>
                                            <div class=\"col-sm-2\">
                                                <div class=\"form-sp\"><span>";
        // line 441
        echo ($context["text_weight"] ?? null);
        echo "</span></div>
                                                <select name=\"third_item_font_weight_hover\" id=\"input-third-item-font-weigth-hover\" class=\"form-control\">
                                                    <option value=\"300\" ";
        // line 443
        if ((($context["third_item_font_weight_hover"] ?? null) == "300")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_light"] ?? null) . " (300)");
        echo " </option>
                                                    <option value=\"400\" ";
        // line 444
        if ((($context["third_item_font_weight_hover"] ?? null) == "400")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_normal"] ?? null) . " (400)");
        echo "  </option>
                                                    <option value=\"700\" ";
        // line 445
        if ((($context["third_item_font_weight_hover"] ?? null) == "700")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo (($context["text_bold"] ?? null) . " (700)");
        echo "  </option>
                                                </select>
                                            </div>
                                        </div>
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
        // line 471
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "plaza/module/ptmenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1433 => 471,  1400 => 445,  1392 => 444,  1384 => 443,  1379 => 441,  1373 => 438,  1369 => 437,  1364 => 435,  1352 => 430,  1344 => 429,  1336 => 428,  1331 => 426,  1320 => 422,  1312 => 421,  1304 => 420,  1296 => 419,  1291 => 417,  1285 => 414,  1281 => 413,  1275 => 410,  1271 => 409,  1266 => 407,  1259 => 403,  1255 => 402,  1249 => 399,  1245 => 398,  1240 => 396,  1226 => 389,  1218 => 388,  1210 => 387,  1202 => 386,  1194 => 385,  1189 => 383,  1183 => 380,  1179 => 379,  1174 => 377,  1162 => 372,  1154 => 371,  1146 => 370,  1138 => 369,  1130 => 368,  1125 => 366,  1114 => 362,  1106 => 361,  1098 => 360,  1090 => 359,  1085 => 357,  1079 => 354,  1075 => 353,  1069 => 350,  1065 => 349,  1060 => 347,  1053 => 343,  1049 => 342,  1043 => 339,  1039 => 338,  1034 => 336,  1026 => 331,  1022 => 330,  1012 => 323,  1008 => 322,  1002 => 319,  998 => 318,  992 => 315,  988 => 314,  982 => 311,  978 => 310,  973 => 308,  961 => 303,  953 => 302,  945 => 301,  937 => 300,  929 => 299,  924 => 297,  918 => 294,  914 => 293,  909 => 291,  897 => 286,  889 => 285,  881 => 284,  873 => 283,  865 => 282,  860 => 280,  849 => 276,  841 => 275,  833 => 274,  825 => 273,  820 => 271,  814 => 268,  810 => 267,  804 => 264,  800 => 263,  795 => 261,  783 => 256,  775 => 255,  767 => 254,  759 => 253,  751 => 252,  746 => 250,  740 => 247,  736 => 246,  731 => 244,  719 => 239,  711 => 238,  703 => 237,  695 => 236,  687 => 235,  682 => 233,  671 => 229,  663 => 228,  655 => 227,  647 => 226,  642 => 224,  636 => 221,  632 => 220,  626 => 217,  622 => 216,  617 => 214,  610 => 210,  605 => 208,  595 => 201,  589 => 198,  584 => 196,  577 => 192,  573 => 191,  567 => 188,  563 => 187,  557 => 184,  553 => 183,  547 => 180,  543 => 179,  538 => 177,  526 => 172,  518 => 171,  510 => 170,  502 => 169,  494 => 168,  489 => 166,  483 => 163,  479 => 162,  474 => 160,  462 => 155,  454 => 154,  446 => 153,  438 => 152,  430 => 151,  425 => 149,  414 => 145,  406 => 144,  398 => 143,  390 => 142,  385 => 140,  379 => 137,  375 => 136,  369 => 133,  365 => 132,  360 => 130,  353 => 126,  349 => 125,  343 => 122,  339 => 121,  334 => 119,  324 => 112,  320 => 111,  314 => 108,  310 => 107,  304 => 104,  300 => 103,  294 => 100,  290 => 99,  285 => 97,  278 => 93,  273 => 91,  265 => 86,  260 => 84,  245 => 76,  237 => 75,  229 => 74,  223 => 71,  217 => 67,  211 => 65,  208 => 64,  193 => 62,  188 => 61,  186 => 60,  180 => 57,  169 => 53,  163 => 52,  156 => 48,  151 => 45,  145 => 43,  143 => 42,  137 => 41,  132 => 39,  124 => 34,  120 => 33,  116 => 32,  112 => 31,  108 => 30,  103 => 28,  97 => 25,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "plaza/module/ptmenu.twig", "");
    }
}
