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

/* tt_safira4/template/plaza/module/ptmenu.twig */
class __TwigTemplate_3da17e12f4d0ed9a3f08eccce3189bdd6a71a2564d72de926295807ff42ba049 extends \Twig\Template
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
                                    echo "                                            ";
                                    if (($context["load_load"] ?? null)) {
                                        // line 99
                                        echo "                                                <img src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 99);
                                        echo "\" class=\"top-icon lazyload\" alt=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 99);
                                        echo "\"/>
                                            ";
                                    } else {
                                        // line 101
                                        echo "                                                <img src=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 101);
                                        echo "\" class=\"top-icon\" alt=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 101);
                                        echo "\"/>
                                            ";
                                    }
                                    // line 103
                                    echo "                                        ";
                                }
                                // line 104
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_title", [], "any", false, false, false, 104)) {
                                    // line 105
                                    echo "                                            <span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 105);
                                    echo "</span>
                                        ";
                                }
                                // line 107
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 107)) {
                                    // line 108
                                    echo "                                            <i class=\"ion-ios-arrow-down\" aria-hidden=\"true\"></i>
                                        ";
                                }
                                // line 110
                                echo "                                    </a>
                                ";
                            } else {
                                // line 112
                                echo "                                    <a class=\"a-top-link a-item\" href=\"javascript:void(0)\">
                                        ";
                                // line 113
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 113)) {
                                    // line 114
                                    echo "                                            ";
                                    if (($context["lazy_load"] ?? null)) {
                                        // line 115
                                        echo "                                                <img src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 115);
                                        echo "\" class=\"top-icon lazyload\" alt=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 115);
                                        echo "\" />
                                            ";
                                    } else {
                                        // line 117
                                        echo "                                                <img src=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 117);
                                        echo "\" class=\"top-icon\" alt=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 117);
                                        echo "\" />
                                            ";
                                    }
                                    // line 119
                                    echo "                                        ";
                                }
                                // line 120
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_title", [], "any", false, false, false, 120)) {
                                    // line 121
                                    echo "                                            <span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 121);
                                    echo "</span>
                                        ";
                                }
                                // line 123
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 123)) {
                                    // line 124
                                    echo "                                            <i class=\"ion-ios-arrow-down\" aria-hidden=\"true\"></i>
                                        ";
                                }
                                // line 126
                                echo "                                    </a>
                                ";
                            }
                            // line 128
                            echo "                                ";
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 128)) {
                                // line 129
                                echo "                                    <!-- Mega Menu -->
                                    ";
                                // line 130
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_type", [], "any", false, false, false, 130) == "mega")) {
                                    // line 131
                                    echo "                                        ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 131) == "children")) {
                                        // line 132
                                        echo "                                            <div class=\"mega-menu-container sub-menu-container ";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 132);
                                        echo " ";
                                        if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 132) == "100%")) {
                                            echo " full-width ";
                                        }
                                        echo "\" style=\"width: ";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 132);
                                        echo ";\">
                                                <div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 134
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 134)) > 0)) {
                                            // line 135
                                            echo "                                                    ";
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 135));
                                            foreach ($context['_seq'] as $context["_key"] => $context["sub_item2"]) {
                                                // line 136
                                                echo "                                                        ";
                                                if (twig_get_attribute($this->env, $this->source, $context["sub_item2"], "status", [], "any", false, false, false, 136)) {
                                                    // line 137
                                                    echo "                                                            <div class=\"";
                                                    if (twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 137)) {
                                                        echo "col-md-";
                                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 137);
                                                    }
                                                    echo " sub-item2-content\"
                                                                    ";
                                                    // line 138
                                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 138) == false)) {
                                                        echo " style=\"width: 20%;\" data-cols=\"12/5\" ";
                                                    } else {
                                                        echo " data-cols=\"";
                                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 138);
                                                        echo "\" ";
                                                    }
                                                    echo " >
                                                                <h4><a class=\"a-mega-second-link\" href=\"";
                                                    // line 139
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "link", [], "any", false, false, false, 139);
                                                    echo "\">";
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "title", [], "any", false, false, false, 139);
                                                    echo "</a></h4>
                                                                ";
                                                    // line 140
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 140)) > 0)) {
                                                        // line 141
                                                        echo "                                                                    <div class=\"sub_item3-content\">
                                                                        ";
                                                        // line 142
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 142));
                                                        foreach ($context['_seq'] as $context["_key"] => $context["sub_item3"]) {
                                                            // line 143
                                                            echo "                                                                            ";
                                                            if (twig_get_attribute($this->env, $this->source, $context["sub_item3"], "status", [], "any", false, false, false, 143)) {
                                                                // line 144
                                                                echo "                                                                                <h5><a class=\"a-mega-third-link\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "link", [], "any", false, false, false, 144);
                                                                echo "\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "title", [], "any", false, false, false, 144);
                                                                echo "</a></h5>
                                                                            ";
                                                            }
                                                            // line 146
                                                            echo "                                                                        ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item3'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 147
                                                        echo "                                                                    </div>
                                                                ";
                                                    }
                                                    // line 149
                                                    echo "                                                            </div>
                                                        ";
                                                }
                                                // line 151
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item2'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 152
                                            echo "                                                ";
                                        }
                                        // line 153
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                            </div>
                                        ";
                                    }
                                    // line 156
                                    echo "
                                        ";
                                    // line 157
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 157) == "category")) {
                                        // line 158
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 158)) > 0)) {
                                            // line 159
                                            echo "                                                <div class=\"mega-menu-container sub-menu-container ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 159);
                                            echo " ";
                                            if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 159) == "100%")) {
                                                echo " full-width ";
                                            }
                                            echo "\" style=\"width: ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 159);
                                            echo ";\">
                                                    <div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            // line 161
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 161));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 162
                                                echo "                                                        ";
                                                if (($context["type"] == "category")) {
                                                    // line 163
                                                    echo "                                                            ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 164
                                                        echo "                                                                ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 165
                                                            echo "                                                                    <div class=\"col-md-";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 165);
                                                            echo " sub-item2-content sub-item2-category-content\" data-cols=\"";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 165);
                                                            echo "\">
                                                                        ";
                                                            // line 166
                                                            if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 166)) {
                                                                // line 167
                                                                echo "                                                                            <a href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 167);
                                                                echo "\">
                                                                                ";
                                                                // line 168
                                                                if (($context["lazy_load"] ?? null)) {
                                                                    // line 169
                                                                    echo "                                                                                    <img src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 169);
                                                                    echo "\" title=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 169);
                                                                    echo "\" alt=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 169);
                                                                    echo "\" class=\"mega-second-image lazyload\" />
                                                                                ";
                                                                } else {
                                                                    // line 171
                                                                    echo "                                                                                    <img src=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 171);
                                                                    echo "\" title=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 171);
                                                                    echo "\" alt=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 171);
                                                                    echo "\" class=\"mega-second-image\" />
                                                                                ";
                                                                }
                                                                // line 173
                                                                echo "                                                                            </a>
                                                                        ";
                                                            }
                                                            // line 175
                                                            echo "                                                                        <h4><a class=\"a-mega-second-link\" href=\"";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 175);
                                                            echo "\">";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 175);
                                                            echo "</a></h4>
                                                                        ";
                                                            // line 176
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 176)) > 0)) {
                                                                // line 177
                                                                echo "                                                                            <div class=\"sub_item3-content\">
                                                                                ";
                                                                // line 178
                                                                $context['_parent'] = $context;
                                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 178));
                                                                foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                    // line 179
                                                                    echo "                                                                                    <h5><a class=\"a-mega-third-link\" href=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 179);
                                                                    echo "\">";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 179);
                                                                    echo "</a></h5>
                                                                                ";
                                                                }
                                                                $_parent = $context['_parent'];
                                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                                // line 181
                                                                echo "                                                                            </div>
                                                                        ";
                                                            }
                                                            // line 183
                                                            echo "                                                                    </div>
                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 185
                                                        echo "                                                            ";
                                                    }
                                                    // line 186
                                                    echo "                                                        ";
                                                }
                                                // line 187
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 188
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                </div>
                                            ";
                                        }
                                        // line 191
                                        echo "                                        ";
                                    }
                                    // line 192
                                    echo "
                                        ";
                                    // line 193
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 193) == "widget")) {
                                        // line 194
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 194)) > 0)) {
                                            // line 195
                                            echo "                                                <div class=\"mega-menu-container sub-menu-container ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 195);
                                            echo " ";
                                            if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 195) == "100%")) {
                                                echo " full-width ";
                                            }
                                            echo "\" style=\"width: ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 195);
                                            echo ";\">
                                                    <div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            // line 197
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 197));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 198
                                                echo "                                                        ";
                                                if (($context["type"] == "widget")) {
                                                    // line 199
                                                    echo "                                                            ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 200
                                                        echo "                                                                ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 201
                                                            echo "                                                                    ";
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 201) == "category")) {
                                                                // line 202
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 202);
                                                                echo " sub-item2-content sub-item2-category-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 202);
                                                                echo "\">
                                                                            ";
                                                                // line 203
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 203)) {
                                                                    // line 204
                                                                    echo "                                                                                <a href=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 204);
                                                                    echo "\">
                                                                                    ";
                                                                    // line 205
                                                                    if (($context["lazy_load"] ?? null)) {
                                                                        // line 206
                                                                        echo "                                                                                        <img src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 206);
                                                                        echo "\" title=\"";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 206);
                                                                        echo "\" alt=\"";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 206);
                                                                        echo "\" class=\"mega-second-image lazyload\" />
                                                                                    ";
                                                                    } else {
                                                                        // line 208
                                                                        echo "                                                                                        <img src=\"";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 208);
                                                                        echo "\" title=\"";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 208);
                                                                        echo "\" alt=\"";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 208);
                                                                        echo "\" class=\"mega-second-image\" />
                                                                                    ";
                                                                    }
                                                                    // line 210
                                                                    echo "                                                                                </a>
                                                                            ";
                                                                }
                                                                // line 212
                                                                echo "                                                                            <h4><a class=\"a-mega-second-link\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 212);
                                                                echo "\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 212);
                                                                echo "</a></h4>
                                                                            ";
                                                                // line 213
                                                                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 213)) > 0)) {
                                                                    // line 214
                                                                    echo "                                                                                <div class=\"sub_item3-content\">
                                                                                    ";
                                                                    // line 215
                                                                    $context['_parent'] = $context;
                                                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 215));
                                                                    foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                        // line 216
                                                                        echo "                                                                                        <h5><a class=\"a-mega-third-link\" href=\"";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 216);
                                                                        echo "\">";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 216);
                                                                        echo "</a></h5>
                                                                                    ";
                                                                    }
                                                                    $_parent = $context['_parent'];
                                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                                    // line 218
                                                                    echo "                                                                                </div>
                                                                            ";
                                                                }
                                                                // line 220
                                                                echo "                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 222
                                                            echo "
                                                                    ";
                                                            // line 223
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 223) == "product")) {
                                                                // line 224
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 224);
                                                                echo " sub-item2-content product-col-menu\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 224);
                                                                echo "\">
                                                                            ";
                                                                // line 225
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 225)) {
                                                                    // line 226
                                                                    echo "                                                                                <a href=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 226);
                                                                    echo "\">
                                                                                    ";
                                                                    // line 227
                                                                    if (($context["lazy_load"] ?? null)) {
                                                                        // line 228
                                                                        echo "                                                                                        <img src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 228);
                                                                        echo "\" alt=\"";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 228);
                                                                        echo "\" class=\"mega-second-image lazyload\" />
                                                                                    ";
                                                                    } else {
                                                                        // line 230
                                                                        echo "                                                                                        <img src=\"";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 230);
                                                                        echo "\" alt=\"";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 230);
                                                                        echo "\" class=\"mega-second-image\" />
                                                                                    ";
                                                                    }
                                                                    // line 232
                                                                    echo "                                                                                </a>
                                                                            ";
                                                                }
                                                                // line 234
                                                                echo "                                                                           <h4 class=\"product-menu-name\"><a class=\"a-mega-second-link product-menu-link\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 234);
                                                                echo "\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 234);
                                                                echo "</a></h4>
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 237
                                                            echo "
                                                                    ";
                                                            // line 238
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 238) == "html")) {
                                                                // line 239
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 239);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 239);
                                                                echo "\">
                                                                            ";
                                                                // line 240
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 240)) {
                                                                    echo "<h4 class=\"html-title\">";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 240);
                                                                    echo "</h4>";
                                                                }
                                                                // line 241
                                                                echo "                                                                            ";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "content", [], "any", false, false, false, 241);
                                                                echo "
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 244
                                                            echo "
                                                                    ";
                                                            // line 245
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 245) == "link")) {
                                                                // line 246
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 246);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 246);
                                                                echo "\">
                                                                            <h4><a class=\"a-mega-second-link a-widget-link\" href=\"";
                                                                // line 247
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 247);
                                                                echo "\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 247);
                                                                echo "</a></h4>
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 250
                                                            echo "                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 251
                                                        echo "                                                            ";
                                                    }
                                                    // line 252
                                                    echo "                                                        ";
                                                }
                                                // line 253
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 254
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                </div>
                                            ";
                                        }
                                        // line 257
                                        echo "                                        ";
                                    }
                                    // line 258
                                    echo "                                    ";
                                }
                                // line 259
                                echo "
                                    <!-- Flyout Menu -->
                                    ";
                                // line 261
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_type", [], "any", false, false, false, 261) == "flyout")) {
                                    // line 262
                                    echo "                                        ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 262) == "children")) {
                                        // line 263
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 263)) > 0)) {
                                            // line 264
                                            echo "                                                <div class=\"flyout-menu-container sub-menu-container ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 264);
                                            echo "\">
                                                    <ul class=\"ul-second-items\">
                                                        ";
                                            // line 266
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 266));
                                            foreach ($context['_seq'] as $context["_key"] => $context["sub_item2"]) {
                                                // line 267
                                                echo "                                                            ";
                                                if (twig_get_attribute($this->env, $this->source, $context["sub_item2"], "status", [], "any", false, false, false, 267)) {
                                                    // line 268
                                                    echo "                                                                <li class=\"li-second-items\">
                                                                    <a href=\"";
                                                    // line 269
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "link", [], "any", false, false, false, 269);
                                                    echo "\" class=\"a-second-link a-item\">
                                                                        <span class=\"a-second-title\">";
                                                    // line 270
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "title", [], "any", false, false, false, 270);
                                                    echo "</span>
                                                                        ";
                                                    // line 271
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 271)) > 0)) {
                                                        // line 272
                                                        echo "                                                                            ";
                                                        if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 272) == "left")) {
                                                            // line 273
                                                            echo "                                                                                <i class=\"icon-more-right ion-ios-arrow-right\" aria-hidden=\"true\"></i>
                                                                            ";
                                                        }
                                                        // line 275
                                                        echo "                                                                            ";
                                                        if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 275) == "right")) {
                                                            // line 276
                                                            echo "                                                                                <i class=\"fa fa-caret-left\" aria-hidden=\"true\"></i>
                                                                            ";
                                                        }
                                                        // line 278
                                                        echo "                                                                        ";
                                                    }
                                                    // line 279
                                                    echo "                                                                    </a>
                                                                    ";
                                                    // line 280
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 280)) > 0)) {
                                                        // line 281
                                                        echo "                                                                        <div class=\"flyout-third-items ";
                                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 281);
                                                        echo "\">
                                                                            <ul class=\"ul-third-items\">
                                                                                ";
                                                        // line 283
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 283));
                                                        foreach ($context['_seq'] as $context["_key"] => $context["sub_item3"]) {
                                                            // line 284
                                                            echo "                                                                                    ";
                                                            if (twig_get_attribute($this->env, $this->source, $context["sub_item3"], "status", [], "any", false, false, false, 284)) {
                                                                // line 285
                                                                echo "                                                                                        <li class=\"li-third-items\">
                                                                                            <a href=\"";
                                                                // line 286
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "link", [], "any", false, false, false, 286);
                                                                echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "title", [], "any", false, false, false, 286);
                                                                echo "</span></a>
                                                                                        </li>
                                                                                    ";
                                                            }
                                                            // line 289
                                                            echo "                                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item3'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 290
                                                        echo "                                                                            </ul>
                                                                        </div>
                                                                    ";
                                                    }
                                                    // line 293
                                                    echo "                                                                </li>
                                                            ";
                                                }
                                                // line 295
                                                echo "                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item2'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 296
                                            echo "                                                    </ul>
                                                </div>
                                            ";
                                        }
                                        // line 299
                                        echo "                                        ";
                                    }
                                    // line 300
                                    echo "
                                        ";
                                    // line 301
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 301) == "category")) {
                                        // line 302
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 302)) > 0)) {
                                            // line 303
                                            echo "                                                <div class=\"flyout-menu-container sub-menu-container ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 303);
                                            echo "\">
                                                    <ul class=\"ul-second-items\">
                                                        ";
                                            // line 305
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 305));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 306
                                                echo "                                                            ";
                                                if (($context["type"] == "category")) {
                                                    // line 307
                                                    echo "                                                                ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 308
                                                        echo "                                                                    ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 309
                                                            echo "                                                                        <li class=\"li-second-items\">
                                                                            <a href=\"";
                                                            // line 310
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 310);
                                                            echo "\" class=\"a-second-link a-item\">
                                                                                <span class=\"a-second-title\">";
                                                            // line 311
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 311);
                                                            echo "</span>
                                                                                ";
                                                            // line 312
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 312)) > 0)) {
                                                                // line 313
                                                                echo "                                                                                    ";
                                                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 313) == "left")) {
                                                                    // line 314
                                                                    echo "                                                                                        <i class=\"icon-more-right ion-ios-arrow-right\" aria-hidden=\"true\"></i>
                                                                                    ";
                                                                }
                                                                // line 316
                                                                echo "                                                                                    ";
                                                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 316) == "right")) {
                                                                    // line 317
                                                                    echo "                                                                                        <i class=\"fa fa-caret-left\" aria-hidden=\"true\"></i>
                                                                                    ";
                                                                }
                                                                // line 319
                                                                echo "                                                                                ";
                                                            }
                                                            // line 320
                                                            echo "                                                                            </a>
                                                                            ";
                                                            // line 321
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 321)) > 0)) {
                                                                // line 322
                                                                echo "                                                                                <div class=\"flyout-third-items ";
                                                                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 322);
                                                                echo "\">
                                                                                    <ul class=\"ul-third-items\">
                                                                                        ";
                                                                // line 324
                                                                $context['_parent'] = $context;
                                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 324));
                                                                foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                    // line 325
                                                                    echo "                                                                                            <li class=\"li-third-items\">
                                                                                                <a href=\"";
                                                                    // line 326
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 326);
                                                                    echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 326);
                                                                    echo "</span></a>
                                                                                            </li>
                                                                                        ";
                                                                }
                                                                $_parent = $context['_parent'];
                                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                                // line 329
                                                                echo "                                                                                    </ul>
                                                                                </div>
                                                                            ";
                                                            }
                                                            // line 332
                                                            echo "                                                                        </li>
                                                                    ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 334
                                                        echo "                                                                ";
                                                    }
                                                    // line 335
                                                    echo "                                                            ";
                                                }
                                                // line 336
                                                echo "                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 337
                                            echo "                                                    </ul>
                                                </div>
                                            ";
                                        }
                                        // line 340
                                        echo "                                        ";
                                    }
                                    // line 341
                                    echo "                                    ";
                                }
                                // line 342
                                echo "                                ";
                            }
                            // line 343
                            echo "                            </li>
                        ";
                        }
                        // line 345
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['top_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 346
                    echo "                </ul>
            ";
                }
                // line 348
                echo "        </div>
    ";
            }
            // line 350
            echo "
    ";
            // line 351
            $context["item_show"] = twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "item_show", [], "any", false, false, false, 351);
            // line 352
            echo "    ";
            if ((($context["menu_type"] ?? null) == "vertical")) {
                // line 353
                echo "        ";
                $context["count"] = 0;
                // line 354
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
                // line 356
                if (($context["items"] ?? null)) {
                    // line 357
                    echo "                <input type=\"hidden\" id=\"menu-effect-";
                    echo ($context["module_id"] ?? null);
                    echo "\" class=\"menu-effect\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "effect", [], "any", false, false, false, 357);
                    echo "\" />
                <div class=\"pt-menu-bar\">
                    <div class=\"text-vertical-bar\"><span>";
                    // line 359
                    echo ($context["text_vertical_bar"] ?? null);
                    echo "</span></div>
                </div>
                <ul class=\"ul-top-items\">
                    ";
                    // line 362
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["top_item"]) {
                        // line 363
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["top_item"], "status", [], "any", false, false, false, 363)) {
                            // line 364
                            echo "                            ";
                            $context["count"] = (($context["count"] ?? null) + 1);
                            // line 365
                            echo "                            <li class=\"li-top-item ";
                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 365);
                            echo " ";
                            echo (((($context["count"] ?? null) > ($context["item_show"] ?? null))) ? ("over") : (""));
                            echo " ";
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "is_home", [], "any", false, false, false, 365)) {
                                echo " home-link ";
                            }
                            echo "\">
                                ";
                            // line 366
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_link", [], "any", false, false, false, 366)) {
                                // line 367
                                echo "                                    <a class=\"a-top-link a-item\" href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "link", [], "any", false, false, false, 367);
                                echo "\">
                                        ";
                                // line 368
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 368)) {
                                    // line 369
                                    echo "                                            ";
                                    if (($context["lazy_load"] ?? null)) {
                                        // line 370
                                        echo "                                                <img src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 370);
                                        echo "\" class=\"top-icon lazyload\" alt=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 370);
                                        echo "\" />
                                            ";
                                    } else {
                                        // line 372
                                        echo "                                                <img src=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 372);
                                        echo "\" class=\"top-icon\" alt=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 372);
                                        echo "\" />
                                            ";
                                    }
                                    // line 374
                                    echo "                                        ";
                                }
                                // line 375
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_title", [], "any", false, false, false, 375)) {
                                    // line 376
                                    echo "                                            <span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 376);
                                    echo "</span>
                                        ";
                                }
                                // line 378
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 378)) {
                                    // line 379
                                    echo "                                            <i class=\"icon-more-right ion-ios-arrow-right\" aria-hidden=\"true\"></i>
                                        ";
                                }
                                // line 381
                                echo "                                    </a>
                                ";
                            } else {
                                // line 383
                                echo "                                    <a class=\"a-top-link a-item\" href=\"javascript:void(0)\">
                                        ";
                                // line 384
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 384)) {
                                    // line 385
                                    echo "                                            ";
                                    if (($context["lazy_load"] ?? null)) {
                                        // line 386
                                        echo "                                                <img src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 386);
                                        echo "\" class=\"top-icon lazyload\" alt=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 386);
                                        echo "\" />
                                            ";
                                    } else {
                                        // line 388
                                        echo "                                                <img src=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 388);
                                        echo "\" class=\"top-icon\" alt=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 388);
                                        echo "\" />
                                            ";
                                    }
                                    // line 390
                                    echo "                                        ";
                                }
                                // line 391
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_title", [], "any", false, false, false, 391)) {
                                    // line 392
                                    echo "                                            <span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 392);
                                    echo "</span>
                                        ";
                                }
                                // line 394
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 394)) {
                                    // line 395
                                    echo "                                            <i class=\"icon-more-right ion-ios-arrow-right\" aria-hidden=\"true\"></i>
                                        ";
                                }
                                // line 397
                                echo "                                    </a>
                                ";
                            }
                            // line 399
                            echo "                                ";
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 399)) {
                                // line 400
                                echo "                                    <!-- Mega Menu -->
                                    ";
                                // line 401
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_type", [], "any", false, false, false, 401) == "mega")) {
                                    // line 402
                                    echo "                                        ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 402) == "children")) {
                                        // line 403
                                        echo "                                            <div class=\"mega-menu-container sub-menu-container ";
                                        if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 403) == "100%")) {
                                            echo " full-width ";
                                        }
                                        echo "\" style=\"width: ";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 403);
                                        echo ";\">
                                                <div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 405
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 405)) > 0)) {
                                            // line 406
                                            echo "                                                    ";
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 406));
                                            foreach ($context['_seq'] as $context["_key"] => $context["sub_item2"]) {
                                                // line 407
                                                echo "                                                        ";
                                                if (twig_get_attribute($this->env, $this->source, $context["sub_item2"], "status", [], "any", false, false, false, 407)) {
                                                    // line 408
                                                    echo "                                                            <div class=\"";
                                                    if (twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 408)) {
                                                        echo "col-md-";
                                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 408);
                                                    }
                                                    echo " sub-item2-content\"
                                                                    ";
                                                    // line 409
                                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 409) == false)) {
                                                        echo " style=\"width: 20%;\" data-cols=\"12/5\" ";
                                                    } else {
                                                        echo " data-cols=\"";
                                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_columns", [], "any", false, false, false, 409);
                                                        echo "\" ";
                                                    }
                                                    echo " >
                                                                <h4><a class=\"a-mega-second-link\" href=\"";
                                                    // line 410
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "link", [], "any", false, false, false, 410);
                                                    echo "\">";
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "title", [], "any", false, false, false, 410);
                                                    echo "</a></h4>
                                                                ";
                                                    // line 411
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 411)) > 0)) {
                                                        // line 412
                                                        echo "                                                                    <div class=\"sub_item3-content\">
                                                                        ";
                                                        // line 413
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 413));
                                                        foreach ($context['_seq'] as $context["_key"] => $context["sub_item3"]) {
                                                            // line 414
                                                            echo "                                                                            ";
                                                            if (twig_get_attribute($this->env, $this->source, $context["sub_item3"], "status", [], "any", false, false, false, 414)) {
                                                                // line 415
                                                                echo "                                                                                <h5><a class=\"a-mega-third-link\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "link", [], "any", false, false, false, 415);
                                                                echo "\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "title", [], "any", false, false, false, 415);
                                                                echo "</a></h5>
                                                                            ";
                                                            }
                                                            // line 417
                                                            echo "                                                                        ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item3'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 418
                                                        echo "                                                                    </div>
                                                                ";
                                                    }
                                                    // line 420
                                                    echo "                                                            </div>
                                                        ";
                                                }
                                                // line 422
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item2'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 423
                                            echo "                                                ";
                                        }
                                        // line 424
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                            </div>
                                        ";
                                    } else {
                                        // line 427
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 427)) > 0)) {
                                            // line 428
                                            echo "                                                <div class=\"mega-menu-container sub-menu-container ";
                                            if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 428) == "100%")) {
                                                echo " full-width ";
                                            }
                                            echo "\" style=\"width: ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_width", [], "any", false, false, false, 428);
                                            echo ";\">
                                                    <div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            // line 430
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 430));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 431
                                                echo "                                                        ";
                                                if (($context["type"] == "category")) {
                                                    // line 432
                                                    echo "                                                            ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 433
                                                        echo "                                                                ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 434
                                                            echo "                                                                    <div class=\"col-md-";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 434);
                                                            echo " sub-item2-content\" data-cols=\"";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 434);
                                                            echo "\">
                                                                        ";
                                                            // line 435
                                                            if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 435)) {
                                                                // line 436
                                                                echo "                                                                            ";
                                                                if (($context["lazy_load"] ?? null)) {
                                                                    // line 437
                                                                    echo "                                                                                <img src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 437);
                                                                    echo "\" alt=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 437);
                                                                    echo "\" class=\"mega-second-image lazyload\" />
                                                                            ";
                                                                } else {
                                                                    // line 439
                                                                    echo "                                                                                <img src=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 439);
                                                                    echo "\" alt=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 439);
                                                                    echo "\" class=\"mega-second-image\" />
                                                                            ";
                                                                }
                                                                // line 441
                                                                echo "                                                                        ";
                                                            }
                                                            // line 442
                                                            echo "                                                                        <h4><a class=\"a-mega-second-link\" href=\"";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 442);
                                                            echo "\">";
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 442);
                                                            echo "</a></h4>
                                                                        ";
                                                            // line 443
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 443)) > 0)) {
                                                                // line 444
                                                                echo "                                                                            <div class=\"sub_item3-content\">
                                                                                ";
                                                                // line 445
                                                                $context['_parent'] = $context;
                                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 445));
                                                                foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                    // line 446
                                                                    echo "                                                                                    <h5><a class=\"a-mega-third-link\" href=\"";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 446);
                                                                    echo "\">";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 446);
                                                                    echo "</a></h5>
                                                                                ";
                                                                }
                                                                $_parent = $context['_parent'];
                                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                                // line 448
                                                                echo "                                                                            </div>
                                                                        ";
                                                            }
                                                            // line 450
                                                            echo "                                                                    </div>
                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 452
                                                        echo "                                                            ";
                                                    }
                                                    // line 453
                                                    echo "                                                        ";
                                                }
                                                // line 454
                                                echo "
                                                        ";
                                                // line 455
                                                if (($context["type"] == "widget")) {
                                                    // line 456
                                                    echo "                                                            ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 457
                                                        echo "                                                                ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 458
                                                            echo "                                                                    ";
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 458) == "category")) {
                                                                // line 459
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 459);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 459);
                                                                echo "\">
                                                                            ";
                                                                // line 460
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 460)) {
                                                                    // line 461
                                                                    echo "                                                                                ";
                                                                    if (($context["lazy_load"] ?? null)) {
                                                                        // line 462
                                                                        echo "                                                                                    <img src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 462);
                                                                        echo "\" alt=\"";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 462);
                                                                        echo "\" class=\"mega-second-image lazyload\" />
                                                                                ";
                                                                    } else {
                                                                        // line 464
                                                                        echo "                                                                                    <img src=\"";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 464);
                                                                        echo "\" alt=\"";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 464);
                                                                        echo "\" class=\"mega-second-image\" />
                                                                                ";
                                                                    }
                                                                    // line 466
                                                                    echo "                                                                            ";
                                                                }
                                                                // line 467
                                                                echo "                                                                            <h4><a class=\"a-mega-second-link\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 467);
                                                                echo "\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 467);
                                                                echo "</a></h4>
                                                                            ";
                                                                // line 468
                                                                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 468)) > 0)) {
                                                                    // line 469
                                                                    echo "                                                                                <div class=\"sub_item3-content\">
                                                                                    ";
                                                                    // line 470
                                                                    $context['_parent'] = $context;
                                                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 470));
                                                                    foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                        // line 471
                                                                        echo "                                                                                        <h5><a class=\"a-mega-third-link\" href=\"";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 471);
                                                                        echo "\">";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 471);
                                                                        echo "</a></h5>
                                                                                    ";
                                                                    }
                                                                    $_parent = $context['_parent'];
                                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                                    // line 473
                                                                    echo "                                                                                </div>
                                                                            ";
                                                                }
                                                                // line 475
                                                                echo "                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 477
                                                            echo "
                                                                    ";
                                                            // line 478
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 478) == "product")) {
                                                                // line 479
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 479);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 479);
                                                                echo "\">
                                                                            ";
                                                                // line 480
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 480)) {
                                                                    // line 481
                                                                    echo "                                                                                ";
                                                                    if (($context["lazy_load"] ?? null)) {
                                                                        // line 482
                                                                        echo "                                                                                    <img src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 482);
                                                                        echo "\" alt=\"";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 482);
                                                                        echo "\" class=\"mega-second-image lazyload\" />
                                                                                ";
                                                                    } else {
                                                                        // line 484
                                                                        echo "                                                                                    <img src=\"";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "image", [], "any", false, false, false, 484);
                                                                        echo "\" alt=\"";
                                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 484);
                                                                        echo "\" class=\"mega-second-image\" />
                                                                                ";
                                                                    }
                                                                    // line 486
                                                                    echo "                                                                            ";
                                                                }
                                                                // line 487
                                                                echo "                                                                            <h4><a class=\"a-mega-second-link\" href=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 487);
                                                                echo "\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 487);
                                                                echo "</a></h4>
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 490
                                                            echo "
                                                                    ";
                                                            // line 491
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 491) == "html")) {
                                                                // line 492
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 492);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 492);
                                                                echo "\">
                                                                            ";
                                                                // line 493
                                                                if (twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 493)) {
                                                                    echo "<h4><strong>";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 493);
                                                                    echo "</strong></h4>";
                                                                }
                                                                // line 494
                                                                echo "                                                                            ";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "content", [], "any", false, false, false, 494);
                                                                echo "
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 497
                                                            echo "
                                                                    ";
                                                            // line 498
                                                            if ((twig_get_attribute($this->env, $this->source, $context["widget"], "type", [], "any", false, false, false, 498) == "link")) {
                                                                // line 499
                                                                echo "                                                                        <div class=\"col-md-";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 499);
                                                                echo " sub-item2-content\" data-cols=\"";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "cols", [], "any", false, false, false, 499);
                                                                echo "\">
                                                                            <h4><a class=\"a-mega-second-link a-widget-link\" href=\"";
                                                                // line 500
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 500);
                                                                echo "\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 500);
                                                                echo "</a></h4>
                                                                        </div>
                                                                    ";
                                                            }
                                                            // line 503
                                                            echo "                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 504
                                                        echo "                                                            ";
                                                    }
                                                    // line 505
                                                    echo "                                                        ";
                                                }
                                                // line 506
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 507
                                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                </div>
                                            ";
                                        }
                                        // line 510
                                        echo "                                        ";
                                    }
                                    // line 511
                                    echo "                                    ";
                                }
                                // line 512
                                echo "
                                    <!-- Flyout Menu -->
                                    ";
                                // line 514
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_type", [], "any", false, false, false, 514) == "flyout")) {
                                    // line 515
                                    echo "                                        ";
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 515) == "children")) {
                                        // line 516
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 516)) > 0)) {
                                            // line 517
                                            echo "                                                <div class=\"flyout-menu-container sub-menu-container ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 517);
                                            echo "\">
                                                    <ul class=\"ul-second-items\">
                                                        ";
                                            // line 519
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 519));
                                            foreach ($context['_seq'] as $context["_key"] => $context["sub_item2"]) {
                                                // line 520
                                                echo "                                                            ";
                                                if (twig_get_attribute($this->env, $this->source, $context["sub_item2"], "status", [], "any", false, false, false, 520)) {
                                                    // line 521
                                                    echo "                                                                <li class=\"li-second-items\">
                                                                    <a href=\"";
                                                    // line 522
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "link", [], "any", false, false, false, 522);
                                                    echo "\" class=\"a-second-link a-item\">
                                                                        <span class=\"a-second-title\">";
                                                    // line 523
                                                    echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "title", [], "any", false, false, false, 523);
                                                    echo "</span>
                                                                        ";
                                                    // line 524
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 524)) > 0)) {
                                                        // line 525
                                                        echo "                                                                            <i class=\"icon-more-right ion-ios-arrow-right\" aria-hidden=\"true\"></i>
                                                                        ";
                                                    }
                                                    // line 527
                                                    echo "                                                                    </a>
                                                                    ";
                                                    // line 528
                                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 528)) > 0)) {
                                                        // line 529
                                                        echo "                                                                        <div class=\"flyout-third-items ";
                                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 529);
                                                        echo "\">
                                                                            <ul class=\"ul-third-items\">
                                                                                ";
                                                        // line 531
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 531));
                                                        foreach ($context['_seq'] as $context["_key"] => $context["sub_item3"]) {
                                                            // line 532
                                                            echo "                                                                                    ";
                                                            if (twig_get_attribute($this->env, $this->source, $context["sub_item3"], "status", [], "any", false, false, false, 532)) {
                                                                // line 533
                                                                echo "                                                                                        <li class=\"li-third-items\">
                                                                                            <a href=\"";
                                                                // line 534
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "link", [], "any", false, false, false, 534);
                                                                echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "title", [], "any", false, false, false, 534);
                                                                echo "</span></a>
                                                                                        </li>
                                                                                    ";
                                                            }
                                                            // line 537
                                                            echo "                                                                                ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item3'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 538
                                                        echo "                                                                            </ul>
                                                                        </div>
                                                                    ";
                                                    }
                                                    // line 541
                                                    echo "                                                                </li>
                                                            ";
                                                }
                                                // line 543
                                                echo "                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item2'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 544
                                            echo "                                                    </ul>
                                                </div>
                                            ";
                                        }
                                        // line 547
                                        echo "                                        ";
                                    }
                                    // line 548
                                    echo "
                                        ";
                                    // line 549
                                    if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 549) == "category")) {
                                        // line 550
                                        echo "                                            ";
                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 550)) > 0)) {
                                            // line 551
                                            echo "                                                <div class=\"flyout-menu-container sub-menu-container ";
                                            echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 551);
                                            echo "\">
                                                    <ul class=\"ul-second-items\">
                                                        ";
                                            // line 553
                                            $context['_parent'] = $context;
                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 553));
                                            foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                                // line 554
                                                echo "                                                            ";
                                                if (($context["type"] == "category")) {
                                                    // line 555
                                                    echo "                                                                ";
                                                    if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                        // line 556
                                                        echo "                                                                    ";
                                                        $context['_parent'] = $context;
                                                        $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                            // line 557
                                                            echo "                                                                        <li class=\"li-second-items\">
                                                                            <a href=\"";
                                                            // line 558
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 558);
                                                            echo "\" class=\"a-second-link a-item\">
                                                                                <span class=\"a-second-title\">";
                                                            // line 559
                                                            echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 559);
                                                            echo "</span>
                                                                                ";
                                                            // line 560
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 560)) > 0)) {
                                                                // line 561
                                                                echo "                                                                                    <i class=\"icon-more-right ion-ios-arrow-right\" aria-hidden=\"true\"></i>
                                                                                ";
                                                            }
                                                            // line 563
                                                            echo "                                                                            </a>
                                                                            ";
                                                            // line 564
                                                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 564)) > 0)) {
                                                                // line 565
                                                                echo "                                                                                <div class=\"flyout-third-items ";
                                                                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "item_align", [], "any", false, false, false, 565);
                                                                echo "\">
                                                                                    <ul class=\"ul-third-items\">
                                                                                        ";
                                                                // line 567
                                                                $context['_parent'] = $context;
                                                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 567));
                                                                foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                    // line 568
                                                                    echo "                                                                                            <li class=\"li-third-items\">
                                                                                                <a href=\"";
                                                                    // line 569
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 569);
                                                                    echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                                    echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 569);
                                                                    echo "</span></a>
                                                                                            </li>
                                                                                        ";
                                                                }
                                                                $_parent = $context['_parent'];
                                                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                                // line 572
                                                                echo "                                                                                    </ul>
                                                                                </div>
                                                                            ";
                                                            }
                                                            // line 575
                                                            echo "                                                                        </li>
                                                                    ";
                                                        }
                                                        $_parent = $context['_parent'];
                                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                                        // line 577
                                                        echo "                                                                ";
                                                    }
                                                    // line 578
                                                    echo "                                                            ";
                                                }
                                                // line 579
                                                echo "                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 580
                                            echo "                                                    </ul>
                                                </div>
                                            ";
                                        }
                                        // line 583
                                        echo "                                        ";
                                    }
                                    // line 584
                                    echo "                                    ";
                                }
                                // line 585
                                echo "                                ";
                            }
                            // line 586
                            echo "                            </li>
                        ";
                        }
                        // line 588
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['top_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 589
                    echo "                    ";
                    if ((($context["count"] ?? null) > ($context["item_show"] ?? null))) {
                        // line 590
                        echo "                        <li class=\"li-top-item li-over li-plus\">
                            <a href=\"javascript:void(0);\" class=\"a-top-link a-plus a-over\"><span>";
                        // line 591
                        echo ($context["text_more_item"] ?? null);
                        echo "</span></a>
                        </li>
                        <li class=\"li-top-item li-over li-minus over\">
                            <a href=\"javascript:void(0);\" class=\"a-top-link a-minus a-over\"><span>";
                        // line 594
                        echo ($context["text_close_item"] ?? null);
                        echo "</span></a>
                        </li>
                    ";
                    }
                    // line 597
                    echo "                </ul>
            ";
                }
                // line 599
                echo "        </div>
    ";
            }
            // line 601
            echo "
    ";
            // line 602
            if ((($context["menu_type"] ?? null) == "mobile")) {
                // line 603
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
                // line 605
                if (($context["items"] ?? null)) {
                    // line 606
                    echo "                <input type=\"hidden\" id=\"menu-effect-";
                    echo ($context["module_id"] ?? null);
                    echo "\" class=\"menu-effect\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, ($context["menu_setting"] ?? null), "effect", [], "any", false, false, false, 606);
                    echo "\" />
                <div class=\"pt-menu-bar\">
                    <i class=\"ion-android-menu\" aria-hidden=\"true\"></i>
                    <i class=\"ion-android-close\" aria-hidden=\"true\"></i>
                </div>
                <ul class=\"ul-top-items\">
                    <li class=\"menu-mobile-title\"><h3>";
                    // line 612
                    echo ($context["text_mobile_bar"] ?? null);
                    echo "</h3></li>
\t\t\t\t\t";
                    // line 613
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["top_item"]) {
                        // line 614
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["top_item"], "status", [], "any", false, false, false, 614)) {
                            // line 615
                            echo "                            <li class=\"li-top-item ";
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "is_home", [], "any", false, false, false, 615)) {
                                echo " home-link ";
                            }
                            echo "\">
                                ";
                            // line 616
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_link", [], "any", false, false, false, 616)) {
                                // line 617
                                echo "                                    <a class=\"a-top-link a-item\" href=\"";
                                echo twig_get_attribute($this->env, $this->source, $context["top_item"], "link", [], "any", false, false, false, 617);
                                echo "\">
                                        ";
                                // line 618
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 618)) {
                                    // line 619
                                    echo "                                            ";
                                    if (($context["lazy_load"] ?? null)) {
                                        // line 620
                                        echo "                                                <img src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 620);
                                        echo "\" class=\"top-icon lazyload\" alt=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 620);
                                        echo "\" />
                                            ";
                                    } else {
                                        // line 622
                                        echo "                                                <img src=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 622);
                                        echo "\" class=\"top-icon\" alt=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 622);
                                        echo "\" />
                                            ";
                                    }
                                    // line 624
                                    echo "                                        ";
                                }
                                // line 625
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_title", [], "any", false, false, false, 625)) {
                                    // line 626
                                    echo "                                            <span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 626);
                                    echo "</span>
                                        ";
                                }
                                // line 628
                                echo "                                    </a>
                                    ";
                                // line 629
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 629) && (twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 629) != "widget"))) {
                                    // line 630
                                    echo "                                        <span class=\"top-click-show a-click-show\">
                                            <i class=\"ion-ios-arrow-down\" aria-hidden=\"true\"></i>
                                            <i class=\"ion-ios-arrow-up\" aria-hidden=\"true\"></i>
                                        </span>
                                    ";
                                }
                                // line 635
                                echo "                                ";
                            } else {
                                // line 636
                                echo "                                    <a class=\"a-top-link a-item\" href=\"javascript:void(0)\">
                                        ";
                                // line 637
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 637)) {
                                    // line 638
                                    echo "                                            ";
                                    if (($context["lazy_load"] ?? null)) {
                                        // line 639
                                        echo "                                                <img src=\"data:image/svg+xml,%20%3Csvg%20viewBox%3D%220%200%20224%20156%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E\" data-src=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 639);
                                        echo "\" class=\"top-icon lazyload\" alt=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 639);
                                        echo "\" />
                                            ";
                                    } else {
                                        // line 641
                                        echo "                                                <img src=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "icon", [], "any", false, false, false, 641);
                                        echo "\" class=\"top-icon\" alt=\"";
                                        echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 641);
                                        echo "\" />
                                            ";
                                    }
                                    // line 643
                                    echo "                                        ";
                                }
                                // line 644
                                echo "                                        ";
                                if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_title", [], "any", false, false, false, 644)) {
                                    // line 645
                                    echo "                                            <span>";
                                    echo twig_get_attribute($this->env, $this->source, $context["top_item"], "title", [], "any", false, false, false, 645);
                                    echo "</span>
                                        ";
                                }
                                // line 647
                                echo "                                    </a>
                                    ";
                                // line 648
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 648) && (twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 648) != "widget"))) {
                                    // line 649
                                    echo "                                        <span class=\"top-click-show a-click-show\">
                                            <i class=\"ion-ios-arrow-down\" aria-hidden=\"true\"></i>
                                            <i class=\"ion-ios-arrow-up\" aria-hidden=\"true\"></i>
                                        </span>
                                    ";
                                }
                                // line 654
                                echo "                                ";
                            }
                            // line 655
                            echo "                                ";
                            if (twig_get_attribute($this->env, $this->source, $context["top_item"], "has_child", [], "any", false, false, false, 655)) {
                                // line 656
                                echo "                                    ";
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 656) == "children")) {
                                    // line 657
                                    echo "                                        ";
                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 657)) > 0)) {
                                        // line 658
                                        echo "                                            <div class=\"sub-menu-container\">
                                                <ul class=\"ul-second-items\">
                                                    ";
                                        // line 660
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_items", [], "any", false, false, false, 660));
                                        foreach ($context['_seq'] as $context["_key"] => $context["sub_item2"]) {
                                            // line 661
                                            echo "                                                        ";
                                            if (twig_get_attribute($this->env, $this->source, $context["sub_item2"], "status", [], "any", false, false, false, 661)) {
                                                // line 662
                                                echo "                                                            <li class=\"li-second-items\">
                                                                <a href=\"";
                                                // line 663
                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "link", [], "any", false, false, false, 663);
                                                echo "\" class=\"a-second-link a-item\">
                                                                    <span class=\"a-second-title\">";
                                                // line 664
                                                echo twig_get_attribute($this->env, $this->source, $context["sub_item2"], "title", [], "any", false, false, false, 664);
                                                echo "</span>
                                                                </a>
                                                                ";
                                                // line 666
                                                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 666)) > 0)) {
                                                    // line 667
                                                    echo "                                                                    <span class=\"second-click-show a-click-show\">
                                                                        <i class=\"ion-ios-arrow-down\" aria-hidden=\"true\"></i>
                                                                        <i class=\"ion-ios-arrow-up\" aria-hidden=\"true\"></i>
                                                                    </span>
                                                                ";
                                                }
                                                // line 672
                                                echo "                                                                ";
                                                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 672)) > 0)) {
                                                    // line 673
                                                    echo "                                                                    <div class=\"flyout-third-items\">
                                                                        <ul class=\"ul-third-items\">
                                                                            ";
                                                    // line 675
                                                    $context['_parent'] = $context;
                                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sub_item2"], "sub_items", [], "any", false, false, false, 675));
                                                    foreach ($context['_seq'] as $context["_key"] => $context["sub_item3"]) {
                                                        // line 676
                                                        echo "                                                                                ";
                                                        if (twig_get_attribute($this->env, $this->source, $context["sub_item3"], "status", [], "any", false, false, false, 676)) {
                                                            // line 677
                                                            echo "                                                                                    <li class=\"li-third-items\">
                                                                                        <a href=\"";
                                                            // line 678
                                                            echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "link", [], "any", false, false, false, 678);
                                                            echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                            echo twig_get_attribute($this->env, $this->source, $context["sub_item3"], "title", [], "any", false, false, false, 678);
                                                            echo "</span></a>
                                                                                    </li>
                                                                                ";
                                                        }
                                                        // line 681
                                                        echo "                                                                            ";
                                                    }
                                                    $_parent = $context['_parent'];
                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item3'], $context['_parent'], $context['loop']);
                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                    // line 682
                                                    echo "                                                                        </ul>
                                                                    </div>
                                                                ";
                                                }
                                                // line 685
                                                echo "                                                            </li>
                                                        ";
                                            }
                                            // line 687
                                            echo "                                                    ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_item2'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 688
                                        echo "                                                </ul>
                                            </div>
                                        ";
                                    }
                                    // line 691
                                    echo "                                    ";
                                }
                                // line 692
                                echo "
                                    ";
                                // line 693
                                if ((twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content_type", [], "any", false, false, false, 693) == "category")) {
                                    // line 694
                                    echo "                                        ";
                                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 694)) > 0)) {
                                        // line 695
                                        echo "                                            <div class=\"sub-menu-container\">
                                                <ul class=\"ul-second-items\">
                                                    ";
                                        // line 697
                                        $context['_parent'] = $context;
                                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["top_item"], "sub_menu_content", [], "any", false, false, false, 697));
                                        foreach ($context['_seq'] as $context["type"] => $context["widgets"]) {
                                            // line 698
                                            echo "                                                        ";
                                            if (($context["type"] == "category")) {
                                                // line 699
                                                echo "                                                            ";
                                                if ((twig_length_filter($this->env, $context["widgets"]) > 0)) {
                                                    // line 700
                                                    echo "                                                                ";
                                                    $context['_parent'] = $context;
                                                    $context['_seq'] = twig_ensure_traversable($context["widgets"]);
                                                    foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                                                        // line 701
                                                        echo "                                                                    <li class=\"li-second-items\">
                                                                        <a href=\"";
                                                        // line 702
                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "link", [], "any", false, false, false, 702);
                                                        echo "\" class=\"a-second-link a-item\">
                                                                            <span class=\"a-second-title\">";
                                                        // line 703
                                                        echo twig_get_attribute($this->env, $this->source, $context["widget"], "title", [], "any", false, false, false, 703);
                                                        echo "</span>
                                                                        </a>
                                                                        ";
                                                        // line 705
                                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 705)) > 0)) {
                                                            // line 706
                                                            echo "                                                                            <span class=\"second-click-show a-click-show\">
                                                                                <i class=\"ion-ios-arrow-down\" aria-hidden=\"true\"></i>
                                                                                <i class=\"ion-ios-arrow-up\" aria-hidden=\"true\"></i>
                                                                            </span>
                                                                        ";
                                                        }
                                                        // line 711
                                                        echo "                                                                        ";
                                                        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 711)) > 0)) {
                                                            // line 712
                                                            echo "                                                                            <div class=\"flyout-third-items\">
                                                                                <ul class=\"ul-third-items\">
                                                                                    ";
                                                            // line 714
                                                            $context['_parent'] = $context;
                                                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["widget"], "children", [], "any", false, false, false, 714));
                                                            foreach ($context['_seq'] as $context["_key"] => $context["c_category"]) {
                                                                // line 715
                                                                echo "                                                                                        <li class=\"li-third-items\">
                                                                                            <a href=\"";
                                                                // line 716
                                                                echo twig_get_attribute($this->env, $this->source, $context["c_category"], "link", [], "any", false, false, false, 716);
                                                                echo "\" class=\"a-third-link\"><span class=\"a-third-title\">";
                                                                echo twig_get_attribute($this->env, $this->source, $context["c_category"], "title", [], "any", false, false, false, 716);
                                                                echo "</span></a>
                                                                                        </li>
                                                                                    ";
                                                            }
                                                            $_parent = $context['_parent'];
                                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c_category'], $context['_parent'], $context['loop']);
                                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                                            // line 719
                                                            echo "                                                                                </ul>
                                                                            </div>
                                                                        ";
                                                        }
                                                        // line 722
                                                        echo "                                                                    </li>
                                                                ";
                                                    }
                                                    $_parent = $context['_parent'];
                                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                                    // line 724
                                                    echo "                                                            ";
                                                }
                                                // line 725
                                                echo "                                                        ";
                                            }
                                            // line 726
                                            echo "                                                    ";
                                        }
                                        $_parent = $context['_parent'];
                                        unset($context['_seq'], $context['_iterated'], $context['type'], $context['widgets'], $context['_parent'], $context['loop']);
                                        $context = array_intersect_key($context, $_parent) + $_parent;
                                        // line 727
                                        echo "                                                </ul>
                                            </div>
                                        ";
                                    }
                                    // line 730
                                    echo "                                    ";
                                }
                                // line 731
                                echo "                                ";
                            }
                            // line 732
                            echo "                            </li>
                        ";
                        }
                        // line 734
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['top_item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 735
                    echo "                </ul>
            ";
                }
                // line 737
                echo "        </div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "tt_safira4/template/plaza/module/ptmenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2403 => 737,  2399 => 735,  2393 => 734,  2389 => 732,  2386 => 731,  2383 => 730,  2378 => 727,  2372 => 726,  2369 => 725,  2366 => 724,  2359 => 722,  2354 => 719,  2343 => 716,  2340 => 715,  2336 => 714,  2332 => 712,  2329 => 711,  2322 => 706,  2320 => 705,  2315 => 703,  2311 => 702,  2308 => 701,  2303 => 700,  2300 => 699,  2297 => 698,  2293 => 697,  2289 => 695,  2286 => 694,  2284 => 693,  2281 => 692,  2278 => 691,  2273 => 688,  2267 => 687,  2263 => 685,  2258 => 682,  2252 => 681,  2244 => 678,  2241 => 677,  2238 => 676,  2234 => 675,  2230 => 673,  2227 => 672,  2220 => 667,  2218 => 666,  2213 => 664,  2209 => 663,  2206 => 662,  2203 => 661,  2199 => 660,  2195 => 658,  2192 => 657,  2189 => 656,  2186 => 655,  2183 => 654,  2176 => 649,  2174 => 648,  2171 => 647,  2165 => 645,  2162 => 644,  2159 => 643,  2151 => 641,  2143 => 639,  2140 => 638,  2138 => 637,  2135 => 636,  2132 => 635,  2125 => 630,  2123 => 629,  2120 => 628,  2114 => 626,  2111 => 625,  2108 => 624,  2100 => 622,  2092 => 620,  2089 => 619,  2087 => 618,  2082 => 617,  2080 => 616,  2073 => 615,  2070 => 614,  2066 => 613,  2062 => 612,  2050 => 606,  2048 => 605,  2036 => 603,  2034 => 602,  2031 => 601,  2027 => 599,  2023 => 597,  2017 => 594,  2011 => 591,  2008 => 590,  2005 => 589,  1999 => 588,  1995 => 586,  1992 => 585,  1989 => 584,  1986 => 583,  1981 => 580,  1975 => 579,  1972 => 578,  1969 => 577,  1962 => 575,  1957 => 572,  1946 => 569,  1943 => 568,  1939 => 567,  1933 => 565,  1931 => 564,  1928 => 563,  1924 => 561,  1922 => 560,  1918 => 559,  1914 => 558,  1911 => 557,  1906 => 556,  1903 => 555,  1900 => 554,  1896 => 553,  1890 => 551,  1887 => 550,  1885 => 549,  1882 => 548,  1879 => 547,  1874 => 544,  1868 => 543,  1864 => 541,  1859 => 538,  1853 => 537,  1845 => 534,  1842 => 533,  1839 => 532,  1835 => 531,  1829 => 529,  1827 => 528,  1824 => 527,  1820 => 525,  1818 => 524,  1814 => 523,  1810 => 522,  1807 => 521,  1804 => 520,  1800 => 519,  1794 => 517,  1791 => 516,  1788 => 515,  1786 => 514,  1782 => 512,  1779 => 511,  1776 => 510,  1771 => 507,  1765 => 506,  1762 => 505,  1759 => 504,  1753 => 503,  1745 => 500,  1738 => 499,  1736 => 498,  1733 => 497,  1726 => 494,  1720 => 493,  1713 => 492,  1711 => 491,  1708 => 490,  1699 => 487,  1696 => 486,  1688 => 484,  1680 => 482,  1677 => 481,  1675 => 480,  1668 => 479,  1666 => 478,  1663 => 477,  1659 => 475,  1655 => 473,  1644 => 471,  1640 => 470,  1637 => 469,  1635 => 468,  1628 => 467,  1625 => 466,  1617 => 464,  1609 => 462,  1606 => 461,  1604 => 460,  1597 => 459,  1594 => 458,  1589 => 457,  1586 => 456,  1584 => 455,  1581 => 454,  1578 => 453,  1575 => 452,  1568 => 450,  1564 => 448,  1553 => 446,  1549 => 445,  1546 => 444,  1544 => 443,  1537 => 442,  1534 => 441,  1526 => 439,  1518 => 437,  1515 => 436,  1513 => 435,  1506 => 434,  1501 => 433,  1498 => 432,  1495 => 431,  1491 => 430,  1481 => 428,  1478 => 427,  1473 => 424,  1470 => 423,  1464 => 422,  1460 => 420,  1456 => 418,  1450 => 417,  1442 => 415,  1439 => 414,  1435 => 413,  1432 => 412,  1430 => 411,  1424 => 410,  1414 => 409,  1406 => 408,  1403 => 407,  1398 => 406,  1396 => 405,  1386 => 403,  1383 => 402,  1381 => 401,  1378 => 400,  1375 => 399,  1371 => 397,  1367 => 395,  1364 => 394,  1358 => 392,  1355 => 391,  1352 => 390,  1344 => 388,  1336 => 386,  1333 => 385,  1331 => 384,  1328 => 383,  1324 => 381,  1320 => 379,  1317 => 378,  1311 => 376,  1308 => 375,  1305 => 374,  1297 => 372,  1289 => 370,  1286 => 369,  1284 => 368,  1279 => 367,  1277 => 366,  1266 => 365,  1263 => 364,  1260 => 363,  1256 => 362,  1250 => 359,  1242 => 357,  1240 => 356,  1228 => 354,  1225 => 353,  1222 => 352,  1220 => 351,  1217 => 350,  1213 => 348,  1209 => 346,  1203 => 345,  1199 => 343,  1196 => 342,  1193 => 341,  1190 => 340,  1185 => 337,  1179 => 336,  1176 => 335,  1173 => 334,  1166 => 332,  1161 => 329,  1150 => 326,  1147 => 325,  1143 => 324,  1137 => 322,  1135 => 321,  1132 => 320,  1129 => 319,  1125 => 317,  1122 => 316,  1118 => 314,  1115 => 313,  1113 => 312,  1109 => 311,  1105 => 310,  1102 => 309,  1097 => 308,  1094 => 307,  1091 => 306,  1087 => 305,  1081 => 303,  1078 => 302,  1076 => 301,  1073 => 300,  1070 => 299,  1065 => 296,  1059 => 295,  1055 => 293,  1050 => 290,  1044 => 289,  1036 => 286,  1033 => 285,  1030 => 284,  1026 => 283,  1020 => 281,  1018 => 280,  1015 => 279,  1012 => 278,  1008 => 276,  1005 => 275,  1001 => 273,  998 => 272,  996 => 271,  992 => 270,  988 => 269,  985 => 268,  982 => 267,  978 => 266,  972 => 264,  969 => 263,  966 => 262,  964 => 261,  960 => 259,  957 => 258,  954 => 257,  949 => 254,  943 => 253,  940 => 252,  937 => 251,  931 => 250,  923 => 247,  916 => 246,  914 => 245,  911 => 244,  904 => 241,  898 => 240,  891 => 239,  889 => 238,  886 => 237,  877 => 234,  873 => 232,  865 => 230,  857 => 228,  855 => 227,  850 => 226,  848 => 225,  841 => 224,  839 => 223,  836 => 222,  832 => 220,  828 => 218,  817 => 216,  813 => 215,  810 => 214,  808 => 213,  801 => 212,  797 => 210,  787 => 208,  777 => 206,  775 => 205,  770 => 204,  768 => 203,  761 => 202,  758 => 201,  753 => 200,  750 => 199,  747 => 198,  743 => 197,  731 => 195,  728 => 194,  726 => 193,  723 => 192,  720 => 191,  715 => 188,  709 => 187,  706 => 186,  703 => 185,  696 => 183,  692 => 181,  681 => 179,  677 => 178,  674 => 177,  672 => 176,  665 => 175,  661 => 173,  651 => 171,  641 => 169,  639 => 168,  634 => 167,  632 => 166,  625 => 165,  620 => 164,  617 => 163,  614 => 162,  610 => 161,  598 => 159,  595 => 158,  593 => 157,  590 => 156,  585 => 153,  582 => 152,  576 => 151,  572 => 149,  568 => 147,  562 => 146,  554 => 144,  551 => 143,  547 => 142,  544 => 141,  542 => 140,  536 => 139,  526 => 138,  518 => 137,  515 => 136,  510 => 135,  508 => 134,  496 => 132,  493 => 131,  491 => 130,  488 => 129,  485 => 128,  481 => 126,  477 => 124,  474 => 123,  468 => 121,  465 => 120,  462 => 119,  454 => 117,  446 => 115,  443 => 114,  441 => 113,  438 => 112,  434 => 110,  430 => 108,  427 => 107,  421 => 105,  418 => 104,  415 => 103,  407 => 101,  399 => 99,  396 => 98,  394 => 97,  389 => 96,  387 => 95,  376 => 94,  373 => 93,  369 => 92,  361 => 90,  359 => 89,  347 => 87,  344 => 86,  341 => 84,  335 => 81,  331 => 80,  325 => 79,  320 => 77,  316 => 76,  312 => 75,  308 => 74,  304 => 73,  299 => 71,  293 => 70,  288 => 68,  284 => 67,  279 => 65,  275 => 64,  269 => 63,  264 => 61,  260 => 60,  256 => 59,  252 => 58,  248 => 57,  243 => 55,  239 => 54,  233 => 53,  228 => 51,  224 => 50,  220 => 49,  215 => 47,  211 => 46,  207 => 45,  202 => 43,  198 => 42,  194 => 41,  190 => 40,  186 => 39,  181 => 37,  177 => 36,  173 => 35,  168 => 33,  164 => 32,  160 => 31,  156 => 30,  152 => 29,  141 => 27,  137 => 26,  132 => 24,  127 => 22,  123 => 21,  119 => 20,  111 => 19,  106 => 17,  102 => 16,  98 => 15,  94 => 14,  84 => 13,  80 => 12,  76 => 11,  71 => 9,  67 => 8,  63 => 7,  52 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira4/template/plaza/module/ptmenu.twig", "");
    }
}
