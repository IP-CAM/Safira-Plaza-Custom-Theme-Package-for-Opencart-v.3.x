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

/* tt_safira2/template/plaza/module/ptmenu.twig */
class __TwigTemplate_2cd818051d0a572d24638bba95932f94687e4f9cf423933cd9a201048561d953 extends \Twig\Template
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
        echo "<style>
    #pt-menu-";
        // line 2
        echo ($context["module_id"] ?? null);
        echo " .pt-menu-bar {
        background: ";
        // line 3
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "menu_bg", [], "any", false, false, false, 3);
        echo ";
        color: ";
        // line 4
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "menu_text_color", [], "any", false, false, false, 4);
        echo ";
\t\tpadding: ";
        // line 5
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "menu_pd_top", [], "any", false, false, false, 5);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "menu_pd_right", [], "any", false, false, false, 5);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "menu_pd_bottom", [], "any", false, false, false, 5);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "menu_pd_left", [], "any", false, false, false, 5);
        echo ";
    }
    #pt-menu-";
        // line 7
        echo ($context["module_id"] ?? null);
        echo ".pt-menu-bar {
        background: ";
        // line 8
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "menu_bg", [], "any", false, false, false, 8);
        echo ";
        color: ";
        // line 9
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "menu_text_color", [], "any", false, false, false, 9);
        echo ";
    }
    #pt-menu-";
        // line 11
        echo ($context["module_id"] ?? null);
        echo " .ul-top-items .li-top-item .a-top-link {
\t\tbackground: ";
        // line 12
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "item_bg", [], "any", false, false, false, 12);
        echo ";
\t\tpadding: ";
        // line 13
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "item_pd_top", [], "any", false, false, false, 13);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "item_pd_right", [], "any", false, false, false, 13);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "item_pd_bottom", [], "any", false, false, false, 13);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "item_pd_left", [], "any", false, false, false, 13);
        echo ";
\t\tcolor: ";
        // line 14
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "item_font_color", [], "any", false, false, false, 14);
        echo ";
        font-size: ";
        // line 15
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "item_font_size", [], "any", false, false, false, 15);
        echo ";
        text-transform: ";
        // line 16
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "item_font_transform", [], "any", false, false, false, 16);
        echo ";
        font-weight: ";
        // line 17
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "item_font_weight", [], "any", false, false, false, 17);
        echo ";
    }
    #pt-menu-";
        // line 19
        echo ($context["module_id"] ?? null);
        echo " .ul-top-items .li-top-item:hover .a-top-link,#pt-menu-";
        echo ($context["module_id"] ?? null);
        echo " .ul-top-items .li-top-item:hover .a-top-link i, #pt-menu-";
        echo ($context["module_id"] ?? null);
        echo " .ul-top-items .li-top-item.active .a-top-link{
        color: ";
        // line 20
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "item_font_color_hover", [], "any", false, false, false, 20);
        echo ";
        font-weight: ";
        // line 21
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "item_font_weight_hover", [], "any", false, false, false, 21);
        echo ";
\t\tbackground: ";
        // line 22
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "item_bg_hover", [], "any", false, false, false, 22);
        echo ";
    }
    #pt-menu-";
        // line 24
        echo ($context["module_id"] ?? null);
        echo " .mega-menu-container {
        
        background: ";
        // line 26
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_menu_bg", [], "any", false, false, false, 26);
        echo ";
        padding: ";
        // line 27
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_menu_pd_top", [], "any", false, false, false, 27);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_menu_pd_right", [], "any", false, false, false, 27);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_menu_pd_bottom", [], "any", false, false, false, 27);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_menu_pd_left", [], "any", false, false, false, 27);
        echo ";
    }
\t#pt-menu-";
        // line 29
        echo ($context["module_id"] ?? null);
        echo " .mega-menu-container .a-mega-second-link {
\t\tcolor: ";
        // line 30
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_sub_item_font_color", [], "any", false, false, false, 30);
        echo ";
\t\tfont-size: ";
        // line 31
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_sub_item_font_size", [], "any", false, false, false, 31);
        echo ";
\t\ttext-transform: ";
        // line 32
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_sub_item_font_transform", [], "any", false, false, false, 32);
        echo ";
\t\tfont-weight: ";
        // line 33
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_sub_item_font_weight", [], "any", false, false, false, 33);
        echo ";
\t}
\t#pt-menu-";
        // line 35
        echo ($context["module_id"] ?? null);
        echo " .mega-menu-container .a-mega-second-link:hover {
\t\tcolor: ";
        // line 36
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_sub_item_hover_font_color", [], "any", false, false, false, 36);
        echo ";
\t\tfont-weight: ";
        // line 37
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_sub_item_hover_font_weight", [], "any", false, false, false, 37);
        echo ";
\t}
\t#pt-menu-";
        // line 39
        echo ($context["module_id"] ?? null);
        echo " .mega-menu-container .a-mega-third-link {
\t\tcolor: ";
        // line 40
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_sub_sub_item_font_color", [], "any", false, false, false, 40);
        echo ";
\t\tfont-size: ";
        // line 41
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_sub_sub_item_font_size", [], "any", false, false, false, 41);
        echo ";
\t\ttext-transform: ";
        // line 42
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_sub_sub_item_font_transform", [], "any", false, false, false, 42);
        echo ";
\t\tfont-weight: ";
        // line 43
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_sub_sub_item_font_weight", [], "any", false, false, false, 43);
        echo ";
\t}
\t#pt-menu-";
        // line 45
        echo ($context["module_id"] ?? null);
        echo " .mega-menu-container .a-mega-third-link:hover {
\t\tcolor: ";
        // line 46
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_sub_sub_item_hover_font_color", [], "any", false, false, false, 46);
        echo ";
\t\tfont-weight: ";
        // line 47
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "mega_sub_sub_item_hover_font_weight", [], "any", false, false, false, 47);
        echo ";
\t}
    #pt-menu-";
        // line 49
        echo ($context["module_id"] ?? null);
        echo " .ul-second-items .li-second-items {
        background: ";
        // line 50
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "second_item_bg", [], "any", false, false, false, 50);
        echo ";
        color: ";
        // line 51
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "second_item_font_color", [], "any", false, false, false, 51);
        echo ";
    }
    #pt-menu-";
        // line 53
        echo ($context["module_id"] ?? null);
        echo " .ul-second-items .li-second-items:hover, #pt-menu-";
        echo ($context["module_id"] ?? null);
        echo " .ul-second-items .li-second-items.active {
        background: ";
        // line 54
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "second_item_bg_hover", [], "any", false, false, false, 54);
        echo ";
        color: ";
        // line 55
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "second_item_font_color_hover", [], "any", false, false, false, 55);
        echo ";
    }
    #pt-menu-";
        // line 57
        echo ($context["module_id"] ?? null);
        echo " .ul-second-items .li-second-items .a-second-link {
        color: ";
        // line 58
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "second_item_font_color", [], "any", false, false, false, 58);
        echo ";
        font-size: ";
        // line 59
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "second_item_font_size", [], "any", false, false, false, 59);
        echo ";
        text-transform: ";
        // line 60
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "second_item_font_transform", [], "any", false, false, false, 60);
        echo ";
        font-weight: ";
        // line 61
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "second_item_font_weight", [], "any", false, false, false, 61);
        echo ";
    }
    #pt-menu-";
        // line 63
        echo ($context["module_id"] ?? null);
        echo " .ul-second-items .li-second-items .a-second-link:hover, #pt-menu-";
        echo ($context["module_id"] ?? null);
        echo " .ul-second-items .li-second-items.active .a-second-link {
        color: ";
        // line 64
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "second_item_font_color_hover", [], "any", false, false, false, 64);
        echo ";
        font-weight: ";
        // line 65
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "second_item_font_weight_hover", [], "any", false, false, false, 65);
        echo ";
    }
    #pt-menu-";
        // line 67
        echo ($context["module_id"] ?? null);
        echo " .ul-third-items .li-third-items {
        background: ";
        // line 68
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "third_item_bg", [], "any", false, false, false, 68);
        echo ";
    }
    #pt-menu-";
        // line 70
        echo ($context["module_id"] ?? null);
        echo " .ul-third-items .li-third-items:hover, #pt-menu-";
        echo ($context["module_id"] ?? null);
        echo " .ul-third-items .li-third-items.active {
        background: ";
        // line 71
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "third_item_bg_hover", [], "any", false, false, false, 71);
        echo ";
    }
    #pt-menu-";
        // line 73
        echo ($context["module_id"] ?? null);
        echo " .ul-third-items .li-third-items .a-third-link {
        color: ";
        // line 74
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "third_item_font_color", [], "any", false, false, false, 74);
        echo ";
        font-size: ";
        // line 75
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "third_item_font_size", [], "any", false, false, false, 75);
        echo ";
        text-transform: ";
        // line 76
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "third_item_font_transform", [], "any", false, false, false, 76);
        echo ";
        font-weight: ";
        // line 77
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "third_item_font_weight", [], "any", false, false, false, 77);
        echo ";
    }
    #pt-menu-";
        // line 79
        echo ($context["module_id"] ?? null);
        echo " .ul-third-items .li-third-items .a-third-link:hover, #pt-menu-";
        echo ($context["module_id"] ?? null);
        echo " .ul-third-items .li-third-items.active .a-third-link {
        color: ";
        // line 80
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "third_item_font_color_hover", [], "any", false, false, false, 80);
        echo ";
        font-weight: ";
        // line 81
        echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "third_item_font_weight_hover", [], "any", false, false, false, 81);
        echo ";
    }
</style>
";
        // line 84
        if (($context["warning"] ?? null)) {
        } else {
            // line 86
            echo "    ";
            if ((($context["menu_type"] ?? null) == "horizontal")) {
                // line 87
                echo "        <div class=\"pt-menu horizontal-menu pt-menu-bar visible-lg  ";
                if (($context["user_token"] ?? null)) {
                    echo " ";
                    echo "show-edit-button";
                    echo " ";
                }
                echo "\" id=\"pt-menu-";
                echo ($context["module_id"] ?? null);
                echo "\">
            
            ";
                // line 89
                if (($context["items"] ?? null)) {
                    // line 90
                    echo "                <input type=\"hidden\" id=\"menu-effect-";
                    echo ($context["module_id"] ?? null);
                    echo "\" class=\"menu-effect\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "effect", [], "any", false, false, false, 90);
                    echo "\" />
                <ul class=\"ul-top-items\">
                    ";
                    // line 92
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["top_item"]) {
                        // line 93
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["top_item"], "status", [], "any", false, false, false, 93)) {
                            // line 94
                            echo "                            <li class=\"li-top-item ";
                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 94);
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "is_home", [], "any", false, false, false, 94)) {
                                echo " home-link ";
                            }
                            echo "\" style=\"float: ";
                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 94);
                            echo "\">
                                ";
                            // line 95
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_link", [], "any", false, false, false, 95)) {
                                // line 96
                                echo "                                    <a class=\"a-top-link\" href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "link", [], "any", false, false, false, 96);
                                echo "\">
                                        ";
                                // line 97
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 97)) {
                                    // line 98
                                    echo "                                            <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 98);
                                    echo "\" class=\"top-icon\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 98);
                                    echo "\"/>
                                        ";
                                }
                                // line 100
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_title", [], "any", false, false, false, 100)) {
                                    // line 101
                                    echo "                                            <span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 101);
                                    echo "</span>
                                        ";
                                }
                                // line 103
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 103)) {
                                    // line 104
                                    echo "                                            <i class=\"ion-ios-arrow-down\" aria-hidden=\"true\"></i>
                                        ";
                                }
                                // line 106
                                echo "                                    </a>
                                ";
                            } else {
                                // line 108
                                echo "                                    <a class=\"a-top-link a-item\" href=\"javascript:void(0)\">
                                        ";
                                // line 109
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 109)) {
                                    // line 110
                                    echo "                                            <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 110);
                                    echo "\" class=\"top-icon\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 110);
                                    echo "\" />
                                        ";
                                }
                                // line 112
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_title", [], "any", false, false, false, 112)) {
                                    // line 113
                                    echo "                                            <span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 113);
                                    echo "</span>
                                        ";
                                }
                                // line 115
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 115)) {
                                    // line 116
                                    echo "                                            <i class=\"ion-ios-arrow-down\" aria-hidden=\"true\"></i>
                                        ";
                                }
                                // line 118
                                echo "                                    </a>
                                ";
                            }
                            // line 120
                            echo "                                ";
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 120)) {
                                // line 121
                                echo "                                    <!-- Mega Menu -->
                                    ";
                                // line 122
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_type", [], "any", false, false, false, 122) == "mega")) {
                                    // line 123
                                    echo "                                        ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 123) == "children")) {
                                        // line 124
                                        echo "                                            <div class=\"mega-menu-container sub-menu-container ";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 124);
                                        echo " ";
                                        if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 124) == "100%")) {
                                            echo " full-width ";
                                        }
                                        echo "\" style=\"width: ";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 124);
                                        echo ";\">
                                                <div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 126
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 126)) > 0)) {
                                            // line 127
                                            echo "                                                    ";
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 127));
                                            foreach ($context['_seq'] as $context["_key"] => $context["sub_item2"]) {
                                                // line 128
                                                echo "                                                        ";
                                                if (twig_get_attribute($this->env, $this->source, $context["sub_item2"], "status", [], "any", false, false, false, 128)) {
                                                    // line 129
                                                    echo "                                                            <div class=\"";
                                                    if (twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 129)) {
                                                        echo "col-md-";
                                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 129);
                                                    }
                                                    echo " sub-item2-content\"
                                                                    ";
                                                    // line 130
                                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 130) == false)) {
                                                        echo " style=\"width: 20%;\" data-cols=\"12/5\" ";
                                                    } else {
                                                        echo " data-cols=\"";
                                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 130);
                                                        echo "\" ";
                                                    }
                                                    echo " >
                                                                <h4><a class=\"a-mega-second-link\" href=\"";
                                                    // line 131
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "link", [], "any", false, false, false, 131);
                                                    echo "\">";
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "title", [], "any", false, false, false, 131);
                                                    echo "</a></h4>
                                                                ";
                                                    // line 132
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 132)) > 0)) {
                                                        // line 133
                                                        echo "                                                                    <div class=\"sub_item3-content\">
                                                                        ";
                                                        // line 134
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 134));
                                                        foreach ($context['_seq'] as $context["_key"] => $context["sub_item3"]) {
                                                            // line 135
                                                            echo "                                                                            ";
                                                            if (twig_get_attribute($this->env, $this->source, $context["sub_item3"], "status", [], "any", false, false, false, 135)) {
                                                                // line 136
                                                                echo "                                                                                <h5><a class=\"a-mega-third-link\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "link", [], "any", false, false, false, 136);
                                                                echo "\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "title", [], "any", false, false, false, 136);
                                                                echo "</a></h5>
                                                                            ";
                                                            }
                                                            // line 138
                                                            echo "                                                                        ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item3'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 139
                                                        echo "                                                                    </div>
                                                                ";
                                                    }
                                                    // line 141
                                                    echo "                                                            </div>
                                                        ";
                                                }
                                                // line 143
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item2'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 144
                                            echo "                                                ";
                                        }
                                        // line 145
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                            </div>
                                        ";
                                    }
                                    // line 148
                                    echo "
                                        ";
                                    // line 149
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 149) == "category")) {
                                        // line 150
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 150)) > 0)) {
                                            // line 151
                                            echo "                                                <div class=\"mega-menu-container sub-menu-container ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 151);
                                            echo " ";
                                            if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 151) == "100%")) {
                                                echo " full-width ";
                                            }
                                            echo "\" style=\"width: ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 151);
                                            echo ";\">
                                                    <div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            // line 153
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 153));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 154
                                                echo "                                                        ";
                                                if (($context["type"] == "category")) {
                                                    // line 155
                                                    echo "                                                            ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 156
                                                        echo "                                                                ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 157
                                                            echo "                                                                    <div class=\"col-md-";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 157);
                                                            echo " sub-item2-content sub-item2-category-content\" data-cols=\"";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 157);
                                                            echo "\">
                                                                        ";
                                                            // line 158
                                                            if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 158)) {
                                                                // line 159
                                                                echo "                                                                            <a href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 159);
                                                                echo "\"><img src=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 159);
                                                                echo "\" title=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 159);
                                                                echo "\" alt=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 159);
                                                                echo "\" class=\"mega-second-image\" /></a>
                                                                        ";
                                                            }
                                                            // line 161
                                                            echo "                                                                        <h4><a class=\"a-mega-second-link\" href=\"";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 161);
                                                            echo "\">";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 161);
                                                            echo "</a></h4>
                                                                        ";
                                                            // line 162
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 162)) > 0)) {
                                                                // line 163
                                                                echo "                                                                            <div class=\"sub_item3-content\">
                                                                                ";
                                                                // line 164
                                                                $context['_parent'] = $context;
                                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 164));
                                                                foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                    // line 165
                                                                    echo "                                                                                    <h5><a class=\"a-mega-third-link\" href=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 165);
                                                                    echo "\">";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 165);
                                                                    echo "</a></h5>
                                                                                ";
                                                                }
                                                                $_parent = $context['_parent'];
                                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                                // line 167
                                                                echo "                                                                            </div>
                                                                        ";
                                                            }
                                                            // line 169
                                                            echo "                                                                    </div>
                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 171
                                                        echo "                                                            ";
                                                    }
                                                    // line 172
                                                    echo "                                                        ";
                                                }
                                                // line 173
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 174
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                </div>
                                            ";
                                        }
                                        // line 177
                                        echo "                                        ";
                                    }
                                    // line 178
                                    echo "
                                        ";
                                    // line 179
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 179) == "widget")) {
                                        // line 180
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 180)) > 0)) {
                                            // line 181
                                            echo "                                                <div class=\"mega-menu-container sub-menu-container ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 181);
                                            echo " ";
                                            if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 181) == "100%")) {
                                                echo " full-width ";
                                            }
                                            echo "\" style=\"width: ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 181);
                                            echo ";\">
                                                    <div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            // line 183
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 183));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 184
                                                echo "                                                        ";
                                                if (($context["type"] == "widget")) {
                                                    // line 185
                                                    echo "                                                            ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 186
                                                        echo "                                                                ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 187
                                                            echo "                                                                    ";
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 187) == "category")) {
                                                                // line 188
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 188);
                                                                echo " sub-item2-content sub-item2-category-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 188);
                                                                echo "\">
                                                                            ";
                                                                // line 189
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 189)) {
                                                                    // line 190
                                                                    echo "                                                                                <a  href=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 190);
                                                                    echo "\"><img src=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 190);
                                                                    echo "\" title=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 190);
                                                                    echo "\" alt=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 190);
                                                                    echo "\" class=\"mega-second-image\" /></a>
                                                                            ";
                                                                }
                                                                // line 192
                                                                echo "                                                                            <h4><a class=\"a-mega-second-link\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 192);
                                                                echo "\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 192);
                                                                echo "</a></h4>
                                                                            ";
                                                                // line 193
                                                                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 193)) > 0)) {
                                                                    // line 194
                                                                    echo "                                                                                <div class=\"sub_item3-content\">
                                                                                    ";
                                                                    // line 195
                                                                    $context['_parent'] = $context;
                                                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 195));
                                                                    foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                        // line 196
                                                                        echo "                                                                                        <h5><a class=\"a-mega-third-link\" href=\"";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 196);
                                                                        echo "\">";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 196);
                                                                        echo "</a></h5>
                                                                                    ";
                                                                    }
                                                                    $_parent = $context['_parent'];
                                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                                    // line 198
                                                                    echo "                                                                                </div>
                                                                            ";
                                                                }
                                                                // line 200
                                                                echo "                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 202
                                                            echo "
                                                                    ";
                                                            // line 203
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 203) == "product")) {
                                                                // line 204
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 204);
                                                                echo " sub-item2-content product-col-menu\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 204);
                                                                echo "\">
                                                                            ";
                                                                // line 205
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 205)) {
                                                                    // line 206
                                                                    echo "                                                                                <a  href=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 206);
                                                                    echo "\"><img src=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 206);
                                                                    echo "\" alt=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 206);
                                                                    echo "\" class=\"mega-second-image\" /></a>
                                                                            ";
                                                                }
                                                                // line 208
                                                                echo "                                                                           <h4 class=\"product-menu-name\"><a class=\"a-mega-second-link product-menu-link\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 208);
                                                                echo "\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 208);
                                                                echo "</a></h4>
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 211
                                                            echo "
                                                                    ";
                                                            // line 212
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 212) == "html")) {
                                                                // line 213
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 213);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 213);
                                                                echo "\">
                                                                            ";
                                                                // line 214
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 214)) {
                                                                    echo "<h4 class=\"html-title\">";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 214);
                                                                    echo "</h4>";
                                                                }
                                                                // line 215
                                                                echo "                                                                            ";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "content", [], "any", false, false, false, 215);
                                                                echo "
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 218
                                                            echo "
                                                                    ";
                                                            // line 219
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 219) == "link")) {
                                                                // line 220
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 220);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 220);
                                                                echo "\">
                                                                            <h4><a class=\"a-mega-second-link a-widget-link\" href=\"";
                                                                // line 221
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 221);
                                                                echo "\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 221);
                                                                echo "</a></h4>
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 224
                                                            echo "                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 225
                                                        echo "                                                            ";
                                                    }
                                                    // line 226
                                                    echo "                                                        ";
                                                }
                                                // line 227
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 228
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                </div>
                                            ";
                                        }
                                        // line 231
                                        echo "                                        ";
                                    }
                                    // line 232
                                    echo "                                    ";
                                }
                                // line 233
                                echo "
                                    <!-- Flyout Menu -->
                                    ";
                                // line 235
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_type", [], "any", false, false, false, 235) == "flyout")) {
                                    // line 236
                                    echo "                                        ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 236) == "children")) {
                                        // line 237
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 237)) > 0)) {
                                            // line 238
                                            echo "                                                <div class=\"flyout-menu-container sub-menu-container ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 238);
                                            echo "\">
                                                    <ul class=\"ul-second-items\">
                                                        ";
                                            // line 240
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 240));
                                            foreach ($context['_seq'] as $context["_key"] => $context["sub_item2"]) {
                                                // line 241
                                                echo "                                                            ";
                                                if (twig_get_attribute($this->env, $this->source, $context["sub_item2"], "status", [], "any", false, false, false, 241)) {
                                                    // line 242
                                                    echo "                                                                <li class=\"li-second-items\">
                                                                    <a href=\"";
                                                    // line 243
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "link", [], "any", false, false, false, 243);
                                                    echo "\" class=\"a-second-link a-item\">
                                                                        <span class=\"a-second-title\">";
                                                    // line 244
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "title", [], "any", false, false, false, 244);
                                                    echo "</span>
                                                                        ";
                                                    // line 245
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 245)) > 0)) {
                                                        // line 246
                                                        echo "                                                                            ";
                                                        if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 246) == "left")) {
                                                            // line 247
                                                            echo "                                                                                <i class=\"icon-more-right ion-ios-arrow-right\" aria-hidden=\"true\"></i>
                                                                            ";
                                                        }
                                                        // line 249
                                                        echo "                                                                            ";
                                                        if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 249) == "right")) {
                                                            // line 250
                                                            echo "                                                                                <i class=\"fa fa-caret-left\" aria-hidden=\"true\"></i>
                                                                            ";
                                                        }
                                                        // line 252
                                                        echo "                                                                        ";
                                                    }
                                                    // line 253
                                                    echo "                                                                    </a>
                                                                    ";
                                                    // line 254
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 254)) > 0)) {
                                                        // line 255
                                                        echo "                                                                        <div class=\"flyout-third-items ";
                                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 255);
                                                        echo "\">
                                                                            <ul class=\"ul-third-items\">
                                                                                ";
                                                        // line 257
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 257));
                                                        foreach ($context['_seq'] as $context["_key"] => $context["sub_item3"]) {
                                                            // line 258
                                                            echo "                                                                                    ";
                                                            if (twig_get_attribute($this->env, $this->source, $context["sub_item3"], "status", [], "any", false, false, false, 258)) {
                                                                // line 259
                                                                echo "                                                                                        <li class=\"li-third-items\">
                                                                                            <a href=\"";
                                                                // line 260
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "link", [], "any", false, false, false, 260);
                                                                echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "title", [], "any", false, false, false, 260);
                                                                echo "</span></a>
                                                                                        </li>
                                                                                    ";
                                                            }
                                                            // line 263
                                                            echo "                                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item3'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 264
                                                        echo "                                                                            </ul>
                                                                        </div>
                                                                    ";
                                                    }
                                                    // line 267
                                                    echo "                                                                </li>
                                                            ";
                                                }
                                                // line 269
                                                echo "                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item2'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 270
                                            echo "                                                    </ul>
                                                </div>
                                            ";
                                        }
                                        // line 273
                                        echo "                                        ";
                                    }
                                    // line 274
                                    echo "
                                        ";
                                    // line 275
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 275) == "category")) {
                                        // line 276
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 276)) > 0)) {
                                            // line 277
                                            echo "                                                <div class=\"flyout-menu-container sub-menu-container ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 277);
                                            echo "\">
                                                    <ul class=\"ul-second-items\">
                                                        ";
                                            // line 279
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 279));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 280
                                                echo "                                                            ";
                                                if (($context["type"] == "category")) {
                                                    // line 281
                                                    echo "                                                                ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 282
                                                        echo "                                                                    ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 283
                                                            echo "                                                                        <li class=\"li-second-items\">
                                                                            <a href=\"";
                                                            // line 284
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 284);
                                                            echo "\" class=\"a-second-link a-item\">
                                                                                <span class=\"a-second-title\">";
                                                            // line 285
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 285);
                                                            echo "</span>
                                                                                ";
                                                            // line 286
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 286)) > 0)) {
                                                                // line 287
                                                                echo "                                                                                    ";
                                                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 287) == "left")) {
                                                                    // line 288
                                                                    echo "                                                                                        <i class=\"icon-more-right ion-ios-arrow-right\" aria-hidden=\"true\"></i>
                                                                                    ";
                                                                }
                                                                // line 290
                                                                echo "                                                                                    ";
                                                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 290) == "right")) {
                                                                    // line 291
                                                                    echo "                                                                                        <i class=\"fa fa-caret-left\" aria-hidden=\"true\"></i>
                                                                                    ";
                                                                }
                                                                // line 293
                                                                echo "                                                                                ";
                                                            }
                                                            // line 294
                                                            echo "                                                                            </a>
                                                                            ";
                                                            // line 295
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 295)) > 0)) {
                                                                // line 296
                                                                echo "                                                                                <div class=\"flyout-third-items ";
                                                                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 296);
                                                                echo "\">
                                                                                    <ul class=\"ul-third-items\">
                                                                                        ";
                                                                // line 298
                                                                $context['_parent'] = $context;
                                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 298));
                                                                foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                    // line 299
                                                                    echo "                                                                                            <li class=\"li-third-items\">
                                                                                                <a href=\"";
                                                                    // line 300
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 300);
                                                                    echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 300);
                                                                    echo "</span></a>
                                                                                            </li>
                                                                                        ";
                                                                }
                                                                $_parent = $context['_parent'];
                                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                                // line 303
                                                                echo "                                                                                    </ul>
                                                                                </div>
                                                                            ";
                                                            }
                                                            // line 306
                                                            echo "                                                                        </li>
                                                                    ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 308
                                                        echo "                                                                ";
                                                    }
                                                    // line 309
                                                    echo "                                                            ";
                                                }
                                                // line 310
                                                echo "                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 311
                                            echo "                                                    </ul>
                                                </div>
                                            ";
                                        }
                                        // line 314
                                        echo "                                        ";
                                    }
                                    // line 315
                                    echo "                                    ";
                                }
                                // line 316
                                echo "                                ";
                            }
                            // line 317
                            echo "                            </li>
                        ";
                        }
                        // line 319
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['top_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 320
                    echo "                </ul>
            ";
                }
                // line 322
                echo "        </div>
    ";
            }
            // line 324
            echo "
    ";
            // line 325
            $context["item_show"] = twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "item_show", [], "any", false, false, false, 325);
            // line 326
            echo "    ";
            if ((($context["menu_type"] ?? null) == "vertical")) {
                // line 327
                echo "        ";
                $context["count"] = 0;
                // line 328
                echo "        <div class=\"pt-menu vertical-menu visible-lg ";
                if (($context["user_token"] ?? null)) {
                    echo " ";
                    echo "show-edit-button";
                    echo " ";
                }
                echo "\" id=\"pt-menu-";
                echo ($context["module_id"] ?? null);
                echo "\">
            
            ";
                // line 330
                if (($context["items"] ?? null)) {
                    // line 331
                    echo "                <input type=\"hidden\" id=\"menu-effect-";
                    echo ($context["module_id"] ?? null);
                    echo "\" class=\"menu-effect\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "effect", [], "any", false, false, false, 331);
                    echo "\" />
                <div class=\"pt-menu-bar\">
                    <div class=\"text-vertical-bar\"><span>";
                    // line 333
                    echo ($context["text_vertical_bar"] ?? null);
                    echo "</span></div>
                </div>
                <ul class=\"ul-top-items\">
                    ";
                    // line 336
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["top_item"]) {
                        // line 337
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["top_item"], "status", [], "any", false, false, false, 337)) {
                            // line 338
                            echo "                            ";
                            $context["count"] = (($context["count"] ?? null) + 1);
                            // line 339
                            echo "                            <li class=\"li-top-item ";
                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 339);
                            echo " ";
                            echo (((($context["count"] ?? null) > ($context["item_show"] ?? null))) ? ("over") : (""));
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "is_home", [], "any", false, false, false, 339)) {
                                echo " home-link ";
                            }
                            echo "\">
                                ";
                            // line 340
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_link", [], "any", false, false, false, 340)) {
                                // line 341
                                echo "                                    <a class=\"a-top-link a-item\" href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "link", [], "any", false, false, false, 341);
                                echo "\">
                                        ";
                                // line 342
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 342)) {
                                    // line 343
                                    echo "                                            <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 343);
                                    echo "\" class=\"top-icon\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 343);
                                    echo "\" />
                                        ";
                                }
                                // line 345
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_title", [], "any", false, false, false, 345)) {
                                    // line 346
                                    echo "                                            <span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 346);
                                    echo "</span>
                                        ";
                                }
                                // line 348
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 348)) {
                                    // line 349
                                    echo "                                            <i class=\"icon-more-right ion-ios-arrow-right\" aria-hidden=\"true\"></i>
                                        ";
                                }
                                // line 351
                                echo "                                    </a>
                                ";
                            } else {
                                // line 353
                                echo "                                    <a class=\"a-top-link a-item\" href=\"javascript:void(0)\">
                                        ";
                                // line 354
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 354)) {
                                    // line 355
                                    echo "                                            <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 355);
                                    echo "\" class=\"top-icon\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 355);
                                    echo "\" />
                                        ";
                                }
                                // line 357
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_title", [], "any", false, false, false, 357)) {
                                    // line 358
                                    echo "                                            <span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 358);
                                    echo "</span>
                                        ";
                                }
                                // line 360
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 360)) {
                                    // line 361
                                    echo "                                            <i class=\"icon-more-right ion-ios-arrow-right\" aria-hidden=\"true\"></i>
                                        ";
                                }
                                // line 363
                                echo "                                    </a>
                                ";
                            }
                            // line 365
                            echo "                                ";
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 365)) {
                                // line 366
                                echo "                                    <!-- Mega Menu -->
                                    ";
                                // line 367
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_type", [], "any", false, false, false, 367) == "mega")) {
                                    // line 368
                                    echo "                                        ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 368) == "children")) {
                                        // line 369
                                        echo "                                            <div class=\"mega-menu-container sub-menu-container ";
                                        if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 369) == "100%")) {
                                            echo " full-width ";
                                        }
                                        echo "\" style=\"width: ";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 369);
                                        echo ";\">
                                                <div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 371
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 371)) > 0)) {
                                            // line 372
                                            echo "                                                    ";
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 372));
                                            foreach ($context['_seq'] as $context["_key"] => $context["sub_item2"]) {
                                                // line 373
                                                echo "                                                        ";
                                                if (twig_get_attribute($this->env, $this->source, $context["sub_item2"], "status", [], "any", false, false, false, 373)) {
                                                    // line 374
                                                    echo "                                                            <div class=\"";
                                                    if (twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 374)) {
                                                        echo "col-md-";
                                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 374);
                                                    }
                                                    echo " sub-item2-content\"
                                                                    ";
                                                    // line 375
                                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 375) == false)) {
                                                        echo " style=\"width: 20%;\" data-cols=\"12/5\" ";
                                                    } else {
                                                        echo " data-cols=\"";
                                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 375);
                                                        echo "\" ";
                                                    }
                                                    echo " >
                                                                <h4><a class=\"a-mega-second-link\" href=\"";
                                                    // line 376
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "link", [], "any", false, false, false, 376);
                                                    echo "\">";
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "title", [], "any", false, false, false, 376);
                                                    echo "</a></h4>
                                                                ";
                                                    // line 377
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 377)) > 0)) {
                                                        // line 378
                                                        echo "                                                                    <div class=\"sub_item3-content\">
                                                                        ";
                                                        // line 379
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 379));
                                                        foreach ($context['_seq'] as $context["_key"] => $context["sub_item3"]) {
                                                            // line 380
                                                            echo "                                                                            ";
                                                            if (twig_get_attribute($this->env, $this->source, $context["sub_item3"], "status", [], "any", false, false, false, 380)) {
                                                                // line 381
                                                                echo "                                                                                <h5><a class=\"a-mega-third-link\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "link", [], "any", false, false, false, 381);
                                                                echo "\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "title", [], "any", false, false, false, 381);
                                                                echo "</a></h5>
                                                                            ";
                                                            }
                                                            // line 383
                                                            echo "                                                                        ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item3'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 384
                                                        echo "                                                                    </div>
                                                                ";
                                                    }
                                                    // line 386
                                                    echo "                                                            </div>
                                                        ";
                                                }
                                                // line 388
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item2'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 389
                                            echo "                                                ";
                                        }
                                        // line 390
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                            </div>
                                        ";
                                    } else {
                                        // line 393
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 393)) > 0)) {
                                            // line 394
                                            echo "                                                <div class=\"mega-menu-container sub-menu-container ";
                                            if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 394) == "100%")) {
                                                echo " full-width ";
                                            }
                                            echo "\" style=\"width: ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 394);
                                            echo ";\">
                                                    <div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            // line 396
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 396));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 397
                                                echo "                                                        ";
                                                if (($context["type"] == "category")) {
                                                    // line 398
                                                    echo "                                                            ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 399
                                                        echo "                                                                ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 400
                                                            echo "                                                                    <div class=\"col-md-";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 400);
                                                            echo " sub-item2-content\" data-cols=\"";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 400);
                                                            echo "\">
                                                                        ";
                                                            // line 401
                                                            if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 401)) {
                                                                // line 402
                                                                echo "                                                                            <img src=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 402);
                                                                echo "\" alt=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 402);
                                                                echo "\" class=\"mega-second-image\" />
                                                                        ";
                                                            }
                                                            // line 404
                                                            echo "                                                                        <h4><a class=\"a-mega-second-link\" href=\"";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 404);
                                                            echo "\">";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 404);
                                                            echo "</a></h4>
                                                                        ";
                                                            // line 405
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 405)) > 0)) {
                                                                // line 406
                                                                echo "                                                                            <div class=\"sub_item3-content\">
                                                                                ";
                                                                // line 407
                                                                $context['_parent'] = $context;
                                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 407));
                                                                foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                    // line 408
                                                                    echo "                                                                                    <h5><a class=\"a-mega-third-link\" href=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 408);
                                                                    echo "\">";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 408);
                                                                    echo "</a></h5>
                                                                                ";
                                                                }
                                                                $_parent = $context['_parent'];
                                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                                // line 410
                                                                echo "                                                                            </div>
                                                                        ";
                                                            }
                                                            // line 412
                                                            echo "                                                                    </div>
                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 414
                                                        echo "                                                            ";
                                                    }
                                                    // line 415
                                                    echo "                                                        ";
                                                }
                                                // line 416
                                                echo "
                                                        ";
                                                // line 417
                                                if (($context["type"] == "widget")) {
                                                    // line 418
                                                    echo "                                                            ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 419
                                                        echo "                                                                ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 420
                                                            echo "                                                                    ";
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 420) == "category")) {
                                                                // line 421
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 421);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 421);
                                                                echo "\">
                                                                            ";
                                                                // line 422
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 422)) {
                                                                    // line 423
                                                                    echo "                                                                                <img src=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 423);
                                                                    echo "\" alt=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 423);
                                                                    echo "\" class=\"mega-second-image\" />
                                                                            ";
                                                                }
                                                                // line 425
                                                                echo "                                                                            <h4><a class=\"a-mega-second-link\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 425);
                                                                echo "\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 425);
                                                                echo "</a></h4>
                                                                            ";
                                                                // line 426
                                                                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 426)) > 0)) {
                                                                    // line 427
                                                                    echo "                                                                                <div class=\"sub_item3-content\">
                                                                                    ";
                                                                    // line 428
                                                                    $context['_parent'] = $context;
                                                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 428));
                                                                    foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                        // line 429
                                                                        echo "                                                                                        <h5><a class=\"a-mega-third-link\" href=\"";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 429);
                                                                        echo "\">";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 429);
                                                                        echo "</a></h5>
                                                                                    ";
                                                                    }
                                                                    $_parent = $context['_parent'];
                                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                                    // line 431
                                                                    echo "                                                                                </div>
                                                                            ";
                                                                }
                                                                // line 433
                                                                echo "                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 435
                                                            echo "
                                                                    ";
                                                            // line 436
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 436) == "product")) {
                                                                // line 437
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 437);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 437);
                                                                echo "\">
                                                                            ";
                                                                // line 438
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 438)) {
                                                                    // line 439
                                                                    echo "                                                                                <img src=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 439);
                                                                    echo "\" alt=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 439);
                                                                    echo "\" class=\"mega-second-image\" />
                                                                            ";
                                                                }
                                                                // line 441
                                                                echo "                                                                            <h4><a class=\"a-mega-second-link\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 441);
                                                                echo "\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 441);
                                                                echo "</a></h4>
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 444
                                                            echo "
                                                                    ";
                                                            // line 445
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 445) == "html")) {
                                                                // line 446
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 446);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 446);
                                                                echo "\">
                                                                            ";
                                                                // line 447
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 447)) {
                                                                    echo "<h4><strong>";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 447);
                                                                    echo "</strong></h4>";
                                                                }
                                                                // line 448
                                                                echo "                                                                            ";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "content", [], "any", false, false, false, 448);
                                                                echo "
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 451
                                                            echo "
                                                                    ";
                                                            // line 452
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 452) == "link")) {
                                                                // line 453
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 453);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 453);
                                                                echo "\">
                                                                            <h4><a class=\"a-mega-second-link a-widget-link\" href=\"";
                                                                // line 454
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 454);
                                                                echo "\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 454);
                                                                echo "</a></h4>
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 457
                                                            echo "                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 458
                                                        echo "                                                            ";
                                                    }
                                                    // line 459
                                                    echo "                                                        ";
                                                }
                                                // line 460
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 461
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                </div>
                                            ";
                                        }
                                        // line 464
                                        echo "                                        ";
                                    }
                                    // line 465
                                    echo "                                    ";
                                }
                                // line 466
                                echo "
                                    <!-- Flyout Menu -->
                                    ";
                                // line 468
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_type", [], "any", false, false, false, 468) == "flyout")) {
                                    // line 469
                                    echo "                                        ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 469) == "children")) {
                                        // line 470
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 470)) > 0)) {
                                            // line 471
                                            echo "                                                <div class=\"flyout-menu-container sub-menu-container ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 471);
                                            echo "\">
                                                    <ul class=\"ul-second-items\">
                                                        ";
                                            // line 473
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 473));
                                            foreach ($context['_seq'] as $context["_key"] => $context["sub_item2"]) {
                                                // line 474
                                                echo "                                                            ";
                                                if (twig_get_attribute($this->env, $this->source, $context["sub_item2"], "status", [], "any", false, false, false, 474)) {
                                                    // line 475
                                                    echo "                                                                <li class=\"li-second-items\">
                                                                    <a href=\"";
                                                    // line 476
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "link", [], "any", false, false, false, 476);
                                                    echo "\" class=\"a-second-link a-item\">
                                                                        <span class=\"a-second-title\">";
                                                    // line 477
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "title", [], "any", false, false, false, 477);
                                                    echo "</span>
                                                                        ";
                                                    // line 478
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 478)) > 0)) {
                                                        // line 479
                                                        echo "                                                                            <i class=\"icon-more-right ion-ios-arrow-right\" aria-hidden=\"true\"></i>
                                                                        ";
                                                    }
                                                    // line 481
                                                    echo "                                                                    </a>
                                                                    ";
                                                    // line 482
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 482)) > 0)) {
                                                        // line 483
                                                        echo "                                                                        <div class=\"flyout-third-items ";
                                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 483);
                                                        echo "\">
                                                                            <ul class=\"ul-third-items\">
                                                                                ";
                                                        // line 485
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 485));
                                                        foreach ($context['_seq'] as $context["_key"] => $context["sub_item3"]) {
                                                            // line 486
                                                            echo "                                                                                    ";
                                                            if (twig_get_attribute($this->env, $this->source, $context["sub_item3"], "status", [], "any", false, false, false, 486)) {
                                                                // line 487
                                                                echo "                                                                                        <li class=\"li-third-items\">
                                                                                            <a href=\"";
                                                                // line 488
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "link", [], "any", false, false, false, 488);
                                                                echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "title", [], "any", false, false, false, 488);
                                                                echo "</span></a>
                                                                                        </li>
                                                                                    ";
                                                            }
                                                            // line 491
                                                            echo "                                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item3'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 492
                                                        echo "                                                                            </ul>
                                                                        </div>
                                                                    ";
                                                    }
                                                    // line 495
                                                    echo "                                                                </li>
                                                            ";
                                                }
                                                // line 497
                                                echo "                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item2'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 498
                                            echo "                                                    </ul>
                                                </div>
                                            ";
                                        }
                                        // line 501
                                        echo "                                        ";
                                    }
                                    // line 502
                                    echo "
                                        ";
                                    // line 503
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 503) == "category")) {
                                        // line 504
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 504)) > 0)) {
                                            // line 505
                                            echo "                                                <div class=\"flyout-menu-container sub-menu-container ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 505);
                                            echo "\">
                                                    <ul class=\"ul-second-items\">
                                                        ";
                                            // line 507
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 507));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 508
                                                echo "                                                            ";
                                                if (($context["type"] == "category")) {
                                                    // line 509
                                                    echo "                                                                ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 510
                                                        echo "                                                                    ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 511
                                                            echo "                                                                        <li class=\"li-second-items\">
                                                                            <a href=\"";
                                                            // line 512
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 512);
                                                            echo "\" class=\"a-second-link a-item\">
                                                                                <span class=\"a-second-title\">";
                                                            // line 513
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 513);
                                                            echo "</span>
                                                                                ";
                                                            // line 514
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 514)) > 0)) {
                                                                // line 515
                                                                echo "                                                                                    <i class=\"icon-more-right ion-ios-arrow-right\" aria-hidden=\"true\"></i>
                                                                                ";
                                                            }
                                                            // line 517
                                                            echo "                                                                            </a>
                                                                            ";
                                                            // line 518
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 518)) > 0)) {
                                                                // line 519
                                                                echo "                                                                                <div class=\"flyout-third-items ";
                                                                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 519);
                                                                echo "\">
                                                                                    <ul class=\"ul-third-items\">
                                                                                        ";
                                                                // line 521
                                                                $context['_parent'] = $context;
                                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 521));
                                                                foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                    // line 522
                                                                    echo "                                                                                            <li class=\"li-third-items\">
                                                                                                <a href=\"";
                                                                    // line 523
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 523);
                                                                    echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 523);
                                                                    echo "</span></a>
                                                                                            </li>
                                                                                        ";
                                                                }
                                                                $_parent = $context['_parent'];
                                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                                // line 526
                                                                echo "                                                                                    </ul>
                                                                                </div>
                                                                            ";
                                                            }
                                                            // line 529
                                                            echo "                                                                        </li>
                                                                    ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 531
                                                        echo "                                                                ";
                                                    }
                                                    // line 532
                                                    echo "                                                            ";
                                                }
                                                // line 533
                                                echo "                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 534
                                            echo "                                                    </ul>
                                                </div>
                                            ";
                                        }
                                        // line 537
                                        echo "                                        ";
                                    }
                                    // line 538
                                    echo "                                    ";
                                }
                                // line 539
                                echo "                                ";
                            }
                            // line 540
                            echo "                            </li>
                        ";
                        }
                        // line 542
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['top_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 543
                    echo "                    ";
                    if ((($context["count"] ?? null) > ($context["item_show"] ?? null))) {
                        // line 544
                        echo "                        <li class=\"li-top-item li-over li-plus\">
                            <a href=\"javascript:void(0);\" class=\"a-top-link a-plus a-over\"><span>";
                        // line 545
                        echo ($context["text_more_item"] ?? null);
                        echo "</span></a>
                        </li>
                        <li class=\"li-top-item li-over li-minus over\">
                            <a href=\"javascript:void(0);\" class=\"a-top-link a-minus a-over\"><span>";
                        // line 548
                        echo ($context["text_close_item"] ?? null);
                        echo "</span></a>
                        </li>
                    ";
                    }
                    // line 551
                    echo "                </ul>
            ";
                }
                // line 553
                echo "        </div>
    ";
            }
            // line 555
            echo "
    ";
            // line 556
            if ((($context["menu_type"] ?? null) == "mobile")) {
                // line 557
                echo "        <div class=\"pt-menu mobile-menu hidden-lg  ";
                if (($context["user_token"] ?? null)) {
                    echo " ";
                    echo "show-edit-button";
                    echo " ";
                }
                echo "\" id=\"pt-menu-";
                echo ($context["module_id"] ?? null);
                echo "\">
            
            ";
                // line 559
                if (($context["items"] ?? null)) {
                    // line 560
                    echo "                <input type=\"hidden\" id=\"menu-effect-";
                    echo ($context["module_id"] ?? null);
                    echo "\" class=\"menu-effect\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "effect", [], "any", false, false, false, 560);
                    echo "\" />
                <div class=\"pt-menu-bar\">
                    <i class=\"ion-android-menu\" aria-hidden=\"true\"></i>
                    <i class=\"ion-android-close\" aria-hidden=\"true\"></i>
                </div>
                <ul class=\"ul-top-items\">
                    <li class=\"menu-mobile-title\"><h3>";
                    // line 566
                    echo ($context["text_mobile_bar"] ?? null);
                    echo "</h3></li>
\t\t\t\t\t";
                    // line 567
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["top_item"]) {
                        // line 568
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["top_item"], "status", [], "any", false, false, false, 568)) {
                            // line 569
                            echo "                            <li class=\"li-top-item ";
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "is_home", [], "any", false, false, false, 569)) {
                                echo " home-link ";
                            }
                            echo "\">
                                ";
                            // line 570
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_link", [], "any", false, false, false, 570)) {
                                // line 571
                                echo "                                    <a class=\"a-top-link a-item\" href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "link", [], "any", false, false, false, 571);
                                echo "\">
                                        ";
                                // line 572
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 572)) {
                                    // line 573
                                    echo "                                            <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 573);
                                    echo "\" class=\"top-icon\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 573);
                                    echo "\" />
                                        ";
                                }
                                // line 575
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_title", [], "any", false, false, false, 575)) {
                                    // line 576
                                    echo "                                            <span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 576);
                                    echo "</span>
                                        ";
                                }
                                // line 578
                                echo "                                    </a>
                                    ";
                                // line 579
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 579) && (twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 579) != "widget"))) {
                                    // line 580
                                    echo "                                        <span class=\"top-click-show a-click-show\">
                                            <i class=\"ion-ios-arrow-down\" aria-hidden=\"true\"></i>
                                            <i class=\"ion-ios-arrow-up\" aria-hidden=\"true\"></i>
                                        </span>
                                    ";
                                }
                                // line 585
                                echo "                                ";
                            } else {
                                // line 586
                                echo "                                    <a class=\"a-top-link a-item\" href=\"javascript:void(0)\">
                                        ";
                                // line 587
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 587)) {
                                    // line 588
                                    echo "                                            <img src=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 588);
                                    echo "\" class=\"top-icon\" alt=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 588);
                                    echo "\" />
                                        ";
                                }
                                // line 590
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_title", [], "any", false, false, false, 590)) {
                                    // line 591
                                    echo "                                            <span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 591);
                                    echo "</span>
                                        ";
                                }
                                // line 593
                                echo "                                    </a>
                                    ";
                                // line 594
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 594) && (twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 594) != "widget"))) {
                                    // line 595
                                    echo "                                        <span class=\"top-click-show a-click-show\">
                                            <i class=\"ion-ios-arrow-down\" aria-hidden=\"true\"></i>
                                            <i class=\"ion-ios-arrow-up\" aria-hidden=\"true\"></i>
                                        </span>
                                    ";
                                }
                                // line 600
                                echo "                                ";
                            }
                            // line 601
                            echo "                                ";
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 601)) {
                                // line 602
                                echo "                                    ";
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 602) == "children")) {
                                    // line 603
                                    echo "                                        ";
                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 603)) > 0)) {
                                        // line 604
                                        echo "                                            <div class=\"sub-menu-container\">
                                                <ul class=\"ul-second-items\">
                                                    ";
                                        // line 606
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 606));
                                        foreach ($context['_seq'] as $context["_key"] => $context["sub_item2"]) {
                                            // line 607
                                            echo "                                                        ";
                                            if (twig_get_attribute($this->env, $this->source, $context["sub_item2"], "status", [], "any", false, false, false, 607)) {
                                                // line 608
                                                echo "                                                            <li class=\"li-second-items\">
                                                                <a href=\"";
                                                // line 609
                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "link", [], "any", false, false, false, 609);
                                                echo "\" class=\"a-second-link a-item\">
                                                                    <span class=\"a-second-title\">";
                                                // line 610
                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "title", [], "any", false, false, false, 610);
                                                echo "</span>
                                                                </a>
                                                                ";
                                                // line 612
                                                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 612)) > 0)) {
                                                    // line 613
                                                    echo "                                                                    <span class=\"second-click-show a-click-show\">
                                                                        <i class=\"ion-ios-arrow-down\" aria-hidden=\"true\"></i>
                                                                        <i class=\"ion-ios-arrow-up\" aria-hidden=\"true\"></i>
                                                                    </span>
                                                                ";
                                                }
                                                // line 618
                                                echo "                                                                ";
                                                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 618)) > 0)) {
                                                    // line 619
                                                    echo "                                                                    <div class=\"flyout-third-items\">
                                                                        <ul class=\"ul-third-items\">
                                                                            ";
                                                    // line 621
                                                    $context['_parent'] = $context;
                                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 621));
                                                    foreach ($context['_seq'] as $context["_key"] => $context["sub_item3"]) {
                                                        // line 622
                                                        echo "                                                                                ";
                                                        if (twig_get_attribute($this->env, $this->source, $context["sub_item3"], "status", [], "any", false, false, false, 622)) {
                                                            // line 623
                                                            echo "                                                                                    <li class=\"li-third-items\">
                                                                                        <a href=\"";
                                                            // line 624
                                                            echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "link", [], "any", false, false, false, 624);
                                                            echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                            echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "title", [], "any", false, false, false, 624);
                                                            echo "</span></a>
                                                                                    </li>
                                                                                ";
                                                        }
                                                        // line 627
                                                        echo "                                                                            ";
                                                    }
                                                    $_parent = $context['_parent'];
                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item3'], $context['_parent'], $context['loop']);
                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                    // line 628
                                                    echo "                                                                        </ul>
                                                                    </div>
                                                                ";
                                                }
                                                // line 631
                                                echo "                                                            </li>
                                                        ";
                                            }
                                            // line 633
                                            echo "                                                    ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item2'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 634
                                        echo "                                                </ul>
                                            </div>
                                        ";
                                    }
                                    // line 637
                                    echo "                                    ";
                                }
                                // line 638
                                echo "
                                    ";
                                // line 639
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 639) == "category")) {
                                    // line 640
                                    echo "                                        ";
                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 640)) > 0)) {
                                        // line 641
                                        echo "                                            <div class=\"sub-menu-container\">
                                                <ul class=\"ul-second-items\">
                                                    ";
                                        // line 643
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 643));
                                        foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                            // line 644
                                            echo "                                                        ";
                                            if (($context["type"] == "category")) {
                                                // line 645
                                                echo "                                                            ";
                                                if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                    // line 646
                                                    echo "                                                                ";
                                                    $context['_parent'] = $context;
                                                    $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                    foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                        // line 647
                                                        echo "                                                                    <li class=\"li-second-items\">
                                                                        <a href=\"";
                                                        // line 648
                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 648);
                                                        echo "\" class=\"a-second-link a-item\">
                                                                            <span class=\"a-second-title\">";
                                                        // line 649
                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 649);
                                                        echo "</span>
                                                                        </a>
                                                                        ";
                                                        // line 651
                                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 651)) > 0)) {
                                                            // line 652
                                                            echo "                                                                            <span class=\"second-click-show a-click-show\">
                                                                                <i class=\"ion-ios-arrow-down\" aria-hidden=\"true\"></i>
                                                                                <i class=\"ion-ios-arrow-up\" aria-hidden=\"true\"></i>
                                                                            </span>
                                                                        ";
                                                        }
                                                        // line 657
                                                        echo "                                                                        ";
                                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 657)) > 0)) {
                                                            // line 658
                                                            echo "                                                                            <div class=\"flyout-third-items\">
                                                                                <ul class=\"ul-third-items\">
                                                                                    ";
                                                            // line 660
                                                            $context['_parent'] = $context;
                                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 660));
                                                            foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                // line 661
                                                                echo "                                                                                        <li class=\"li-third-items\">
                                                                                            <a href=\"";
                                                                // line 662
                                                                echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 662);
                                                                echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 662);
                                                                echo "</span></a>
                                                                                        </li>
                                                                                    ";
                                                            }
                                                            $_parent = $context['_parent'];
                                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                                            // line 665
                                                            echo "                                                                                </ul>
                                                                            </div>
                                                                        ";
                                                        }
                                                        // line 668
                                                        echo "                                                                    </li>
                                                                ";
                                                    }
                                                    $_parent = $context['_parent'];
                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                    // line 670
                                                    echo "                                                            ";
                                                }
                                                // line 671
                                                echo "                                                        ";
                                            }
                                            // line 672
                                            echo "                                                    ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 673
                                        echo "                                                </ul>
                                            </div>
                                        ";
                                    }
                                    // line 676
                                    echo "                                    ";
                                }
                                // line 677
                                echo "                                ";
                            }
                            // line 678
                            echo "                            </li>
                        ";
                        }
                        // line 680
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['top_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 681
                    echo "                </ul>
            ";
                }
                // line 683
                echo "        </div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "tt_safira2/template/plaza/module/ptmenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2222 => 683,  2218 => 681,  2212 => 680,  2208 => 678,  2205 => 677,  2202 => 676,  2197 => 673,  2191 => 672,  2188 => 671,  2185 => 670,  2178 => 668,  2173 => 665,  2162 => 662,  2159 => 661,  2155 => 660,  2151 => 658,  2148 => 657,  2141 => 652,  2139 => 651,  2134 => 649,  2130 => 648,  2127 => 647,  2122 => 646,  2119 => 645,  2116 => 644,  2112 => 643,  2108 => 641,  2105 => 640,  2103 => 639,  2100 => 638,  2097 => 637,  2092 => 634,  2086 => 633,  2082 => 631,  2077 => 628,  2071 => 627,  2063 => 624,  2060 => 623,  2057 => 622,  2053 => 621,  2049 => 619,  2046 => 618,  2039 => 613,  2037 => 612,  2032 => 610,  2028 => 609,  2025 => 608,  2022 => 607,  2018 => 606,  2014 => 604,  2011 => 603,  2008 => 602,  2005 => 601,  2002 => 600,  1995 => 595,  1993 => 594,  1990 => 593,  1984 => 591,  1981 => 590,  1973 => 588,  1971 => 587,  1968 => 586,  1965 => 585,  1958 => 580,  1956 => 579,  1953 => 578,  1947 => 576,  1944 => 575,  1936 => 573,  1934 => 572,  1929 => 571,  1927 => 570,  1920 => 569,  1917 => 568,  1913 => 567,  1909 => 566,  1897 => 560,  1895 => 559,  1883 => 557,  1881 => 556,  1878 => 555,  1874 => 553,  1870 => 551,  1864 => 548,  1858 => 545,  1855 => 544,  1852 => 543,  1846 => 542,  1842 => 540,  1839 => 539,  1836 => 538,  1833 => 537,  1828 => 534,  1822 => 533,  1819 => 532,  1816 => 531,  1809 => 529,  1804 => 526,  1793 => 523,  1790 => 522,  1786 => 521,  1780 => 519,  1778 => 518,  1775 => 517,  1771 => 515,  1769 => 514,  1765 => 513,  1761 => 512,  1758 => 511,  1753 => 510,  1750 => 509,  1747 => 508,  1743 => 507,  1737 => 505,  1734 => 504,  1732 => 503,  1729 => 502,  1726 => 501,  1721 => 498,  1715 => 497,  1711 => 495,  1706 => 492,  1700 => 491,  1692 => 488,  1689 => 487,  1686 => 486,  1682 => 485,  1676 => 483,  1674 => 482,  1671 => 481,  1667 => 479,  1665 => 478,  1661 => 477,  1657 => 476,  1654 => 475,  1651 => 474,  1647 => 473,  1641 => 471,  1638 => 470,  1635 => 469,  1633 => 468,  1629 => 466,  1626 => 465,  1623 => 464,  1618 => 461,  1612 => 460,  1609 => 459,  1606 => 458,  1600 => 457,  1592 => 454,  1585 => 453,  1583 => 452,  1580 => 451,  1573 => 448,  1567 => 447,  1560 => 446,  1558 => 445,  1555 => 444,  1546 => 441,  1538 => 439,  1536 => 438,  1529 => 437,  1527 => 436,  1524 => 435,  1520 => 433,  1516 => 431,  1505 => 429,  1501 => 428,  1498 => 427,  1496 => 426,  1489 => 425,  1481 => 423,  1479 => 422,  1472 => 421,  1469 => 420,  1464 => 419,  1461 => 418,  1459 => 417,  1456 => 416,  1453 => 415,  1450 => 414,  1443 => 412,  1439 => 410,  1428 => 408,  1424 => 407,  1421 => 406,  1419 => 405,  1412 => 404,  1404 => 402,  1402 => 401,  1395 => 400,  1390 => 399,  1387 => 398,  1384 => 397,  1380 => 396,  1370 => 394,  1367 => 393,  1362 => 390,  1359 => 389,  1353 => 388,  1349 => 386,  1345 => 384,  1339 => 383,  1331 => 381,  1328 => 380,  1324 => 379,  1321 => 378,  1319 => 377,  1313 => 376,  1303 => 375,  1295 => 374,  1292 => 373,  1287 => 372,  1285 => 371,  1275 => 369,  1272 => 368,  1270 => 367,  1267 => 366,  1264 => 365,  1260 => 363,  1256 => 361,  1253 => 360,  1247 => 358,  1244 => 357,  1236 => 355,  1234 => 354,  1231 => 353,  1227 => 351,  1223 => 349,  1220 => 348,  1214 => 346,  1211 => 345,  1203 => 343,  1201 => 342,  1196 => 341,  1194 => 340,  1183 => 339,  1180 => 338,  1177 => 337,  1173 => 336,  1167 => 333,  1159 => 331,  1157 => 330,  1145 => 328,  1142 => 327,  1139 => 326,  1137 => 325,  1134 => 324,  1130 => 322,  1126 => 320,  1120 => 319,  1116 => 317,  1113 => 316,  1110 => 315,  1107 => 314,  1102 => 311,  1096 => 310,  1093 => 309,  1090 => 308,  1083 => 306,  1078 => 303,  1067 => 300,  1064 => 299,  1060 => 298,  1054 => 296,  1052 => 295,  1049 => 294,  1046 => 293,  1042 => 291,  1039 => 290,  1035 => 288,  1032 => 287,  1030 => 286,  1026 => 285,  1022 => 284,  1019 => 283,  1014 => 282,  1011 => 281,  1008 => 280,  1004 => 279,  998 => 277,  995 => 276,  993 => 275,  990 => 274,  987 => 273,  982 => 270,  976 => 269,  972 => 267,  967 => 264,  961 => 263,  953 => 260,  950 => 259,  947 => 258,  943 => 257,  937 => 255,  935 => 254,  932 => 253,  929 => 252,  925 => 250,  922 => 249,  918 => 247,  915 => 246,  913 => 245,  909 => 244,  905 => 243,  902 => 242,  899 => 241,  895 => 240,  889 => 238,  886 => 237,  883 => 236,  881 => 235,  877 => 233,  874 => 232,  871 => 231,  866 => 228,  860 => 227,  857 => 226,  854 => 225,  848 => 224,  840 => 221,  833 => 220,  831 => 219,  828 => 218,  821 => 215,  815 => 214,  808 => 213,  806 => 212,  803 => 211,  794 => 208,  784 => 206,  782 => 205,  775 => 204,  773 => 203,  770 => 202,  766 => 200,  762 => 198,  751 => 196,  747 => 195,  744 => 194,  742 => 193,  735 => 192,  723 => 190,  721 => 189,  714 => 188,  711 => 187,  706 => 186,  703 => 185,  700 => 184,  696 => 183,  684 => 181,  681 => 180,  679 => 179,  676 => 178,  673 => 177,  668 => 174,  662 => 173,  659 => 172,  656 => 171,  649 => 169,  645 => 167,  634 => 165,  630 => 164,  627 => 163,  625 => 162,  618 => 161,  606 => 159,  604 => 158,  597 => 157,  592 => 156,  589 => 155,  586 => 154,  582 => 153,  570 => 151,  567 => 150,  565 => 149,  562 => 148,  557 => 145,  554 => 144,  548 => 143,  544 => 141,  540 => 139,  534 => 138,  526 => 136,  523 => 135,  519 => 134,  516 => 133,  514 => 132,  508 => 131,  498 => 130,  490 => 129,  487 => 128,  482 => 127,  480 => 126,  468 => 124,  465 => 123,  463 => 122,  460 => 121,  457 => 120,  453 => 118,  449 => 116,  446 => 115,  440 => 113,  437 => 112,  429 => 110,  427 => 109,  424 => 108,  420 => 106,  416 => 104,  413 => 103,  407 => 101,  404 => 100,  396 => 98,  394 => 97,  389 => 96,  387 => 95,  376 => 94,  373 => 93,  369 => 92,  361 => 90,  359 => 89,  347 => 87,  344 => 86,  341 => 84,  335 => 81,  331 => 80,  325 => 79,  320 => 77,  316 => 76,  312 => 75,  308 => 74,  304 => 73,  299 => 71,  293 => 70,  288 => 68,  284 => 67,  279 => 65,  275 => 64,  269 => 63,  264 => 61,  260 => 60,  256 => 59,  252 => 58,  248 => 57,  243 => 55,  239 => 54,  233 => 53,  228 => 51,  224 => 50,  220 => 49,  215 => 47,  211 => 46,  207 => 45,  202 => 43,  198 => 42,  194 => 41,  190 => 40,  186 => 39,  181 => 37,  177 => 36,  173 => 35,  168 => 33,  164 => 32,  160 => 31,  156 => 30,  152 => 29,  141 => 27,  137 => 26,  132 => 24,  127 => 22,  123 => 21,  119 => 20,  111 => 19,  106 => 17,  102 => 16,  98 => 15,  94 => 14,  84 => 13,  80 => 12,  76 => 11,  71 => 9,  67 => 8,  63 => 7,  52 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira2/template/plaza/module/ptmenu.twig", "");
    }
}
