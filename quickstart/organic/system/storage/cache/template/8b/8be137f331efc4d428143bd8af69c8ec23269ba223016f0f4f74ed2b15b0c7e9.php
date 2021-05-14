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

/* tt_safira1/template/plaza/module/ptmenu.twig */
class __TwigTemplate_da47fc38207e9c3065c0e4f7f952d6a470f1f37224b12c0990f55e937fe0421c extends \Twig\Template
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
        echo " .ul-second-items .li-second-items .a-second-link:hover,#pt-menu-";
        echo ($context["module_id"] ?? null);
        echo " .ul-second-items .li-second-items:hover .a-second-link, #pt-menu-";
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
        return "tt_safira1/template/plaza/module/ptmenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2405 => 737,  2401 => 735,  2395 => 734,  2391 => 732,  2388 => 731,  2385 => 730,  2380 => 727,  2374 => 726,  2371 => 725,  2368 => 724,  2361 => 722,  2356 => 719,  2345 => 716,  2342 => 715,  2338 => 714,  2334 => 712,  2331 => 711,  2324 => 706,  2322 => 705,  2317 => 703,  2313 => 702,  2310 => 701,  2305 => 700,  2302 => 699,  2299 => 698,  2295 => 697,  2291 => 695,  2288 => 694,  2286 => 693,  2283 => 692,  2280 => 691,  2275 => 688,  2269 => 687,  2265 => 685,  2260 => 682,  2254 => 681,  2246 => 678,  2243 => 677,  2240 => 676,  2236 => 675,  2232 => 673,  2229 => 672,  2222 => 667,  2220 => 666,  2215 => 664,  2211 => 663,  2208 => 662,  2205 => 661,  2201 => 660,  2197 => 658,  2194 => 657,  2191 => 656,  2188 => 655,  2185 => 654,  2178 => 649,  2176 => 648,  2173 => 647,  2167 => 645,  2164 => 644,  2161 => 643,  2153 => 641,  2145 => 639,  2142 => 638,  2140 => 637,  2137 => 636,  2134 => 635,  2127 => 630,  2125 => 629,  2122 => 628,  2116 => 626,  2113 => 625,  2110 => 624,  2102 => 622,  2094 => 620,  2091 => 619,  2089 => 618,  2084 => 617,  2082 => 616,  2075 => 615,  2072 => 614,  2068 => 613,  2064 => 612,  2052 => 606,  2050 => 605,  2038 => 603,  2036 => 602,  2033 => 601,  2029 => 599,  2025 => 597,  2019 => 594,  2013 => 591,  2010 => 590,  2007 => 589,  2001 => 588,  1997 => 586,  1994 => 585,  1991 => 584,  1988 => 583,  1983 => 580,  1977 => 579,  1974 => 578,  1971 => 577,  1964 => 575,  1959 => 572,  1948 => 569,  1945 => 568,  1941 => 567,  1935 => 565,  1933 => 564,  1930 => 563,  1926 => 561,  1924 => 560,  1920 => 559,  1916 => 558,  1913 => 557,  1908 => 556,  1905 => 555,  1902 => 554,  1898 => 553,  1892 => 551,  1889 => 550,  1887 => 549,  1884 => 548,  1881 => 547,  1876 => 544,  1870 => 543,  1866 => 541,  1861 => 538,  1855 => 537,  1847 => 534,  1844 => 533,  1841 => 532,  1837 => 531,  1831 => 529,  1829 => 528,  1826 => 527,  1822 => 525,  1820 => 524,  1816 => 523,  1812 => 522,  1809 => 521,  1806 => 520,  1802 => 519,  1796 => 517,  1793 => 516,  1790 => 515,  1788 => 514,  1784 => 512,  1781 => 511,  1778 => 510,  1773 => 507,  1767 => 506,  1764 => 505,  1761 => 504,  1755 => 503,  1747 => 500,  1740 => 499,  1738 => 498,  1735 => 497,  1728 => 494,  1722 => 493,  1715 => 492,  1713 => 491,  1710 => 490,  1701 => 487,  1698 => 486,  1690 => 484,  1682 => 482,  1679 => 481,  1677 => 480,  1670 => 479,  1668 => 478,  1665 => 477,  1661 => 475,  1657 => 473,  1646 => 471,  1642 => 470,  1639 => 469,  1637 => 468,  1630 => 467,  1627 => 466,  1619 => 464,  1611 => 462,  1608 => 461,  1606 => 460,  1599 => 459,  1596 => 458,  1591 => 457,  1588 => 456,  1586 => 455,  1583 => 454,  1580 => 453,  1577 => 452,  1570 => 450,  1566 => 448,  1555 => 446,  1551 => 445,  1548 => 444,  1546 => 443,  1539 => 442,  1536 => 441,  1528 => 439,  1520 => 437,  1517 => 436,  1515 => 435,  1508 => 434,  1503 => 433,  1500 => 432,  1497 => 431,  1493 => 430,  1483 => 428,  1480 => 427,  1475 => 424,  1472 => 423,  1466 => 422,  1462 => 420,  1458 => 418,  1452 => 417,  1444 => 415,  1441 => 414,  1437 => 413,  1434 => 412,  1432 => 411,  1426 => 410,  1416 => 409,  1408 => 408,  1405 => 407,  1400 => 406,  1398 => 405,  1388 => 403,  1385 => 402,  1383 => 401,  1380 => 400,  1377 => 399,  1373 => 397,  1369 => 395,  1366 => 394,  1360 => 392,  1357 => 391,  1354 => 390,  1346 => 388,  1338 => 386,  1335 => 385,  1333 => 384,  1330 => 383,  1326 => 381,  1322 => 379,  1319 => 378,  1313 => 376,  1310 => 375,  1307 => 374,  1299 => 372,  1291 => 370,  1288 => 369,  1286 => 368,  1281 => 367,  1279 => 366,  1268 => 365,  1265 => 364,  1262 => 363,  1258 => 362,  1252 => 359,  1244 => 357,  1242 => 356,  1230 => 354,  1227 => 353,  1224 => 352,  1222 => 351,  1219 => 350,  1215 => 348,  1211 => 346,  1205 => 345,  1201 => 343,  1198 => 342,  1195 => 341,  1192 => 340,  1187 => 337,  1181 => 336,  1178 => 335,  1175 => 334,  1168 => 332,  1163 => 329,  1152 => 326,  1149 => 325,  1145 => 324,  1139 => 322,  1137 => 321,  1134 => 320,  1131 => 319,  1127 => 317,  1124 => 316,  1120 => 314,  1117 => 313,  1115 => 312,  1111 => 311,  1107 => 310,  1104 => 309,  1099 => 308,  1096 => 307,  1093 => 306,  1089 => 305,  1083 => 303,  1080 => 302,  1078 => 301,  1075 => 300,  1072 => 299,  1067 => 296,  1061 => 295,  1057 => 293,  1052 => 290,  1046 => 289,  1038 => 286,  1035 => 285,  1032 => 284,  1028 => 283,  1022 => 281,  1020 => 280,  1017 => 279,  1014 => 278,  1010 => 276,  1007 => 275,  1003 => 273,  1000 => 272,  998 => 271,  994 => 270,  990 => 269,  987 => 268,  984 => 267,  980 => 266,  974 => 264,  971 => 263,  968 => 262,  966 => 261,  962 => 259,  959 => 258,  956 => 257,  951 => 254,  945 => 253,  942 => 252,  939 => 251,  933 => 250,  925 => 247,  918 => 246,  916 => 245,  913 => 244,  906 => 241,  900 => 240,  893 => 239,  891 => 238,  888 => 237,  879 => 234,  875 => 232,  867 => 230,  859 => 228,  857 => 227,  852 => 226,  850 => 225,  843 => 224,  841 => 223,  838 => 222,  834 => 220,  830 => 218,  819 => 216,  815 => 215,  812 => 214,  810 => 213,  803 => 212,  799 => 210,  789 => 208,  779 => 206,  777 => 205,  772 => 204,  770 => 203,  763 => 202,  760 => 201,  755 => 200,  752 => 199,  749 => 198,  745 => 197,  733 => 195,  730 => 194,  728 => 193,  725 => 192,  722 => 191,  717 => 188,  711 => 187,  708 => 186,  705 => 185,  698 => 183,  694 => 181,  683 => 179,  679 => 178,  676 => 177,  674 => 176,  667 => 175,  663 => 173,  653 => 171,  643 => 169,  641 => 168,  636 => 167,  634 => 166,  627 => 165,  622 => 164,  619 => 163,  616 => 162,  612 => 161,  600 => 159,  597 => 158,  595 => 157,  592 => 156,  587 => 153,  584 => 152,  578 => 151,  574 => 149,  570 => 147,  564 => 146,  556 => 144,  553 => 143,  549 => 142,  546 => 141,  544 => 140,  538 => 139,  528 => 138,  520 => 137,  517 => 136,  512 => 135,  510 => 134,  498 => 132,  495 => 131,  493 => 130,  490 => 129,  487 => 128,  483 => 126,  479 => 124,  476 => 123,  470 => 121,  467 => 120,  464 => 119,  456 => 117,  448 => 115,  445 => 114,  443 => 113,  440 => 112,  436 => 110,  432 => 108,  429 => 107,  423 => 105,  420 => 104,  417 => 103,  409 => 101,  401 => 99,  398 => 98,  396 => 97,  391 => 96,  389 => 95,  378 => 94,  375 => 93,  371 => 92,  363 => 90,  361 => 89,  349 => 87,  346 => 86,  343 => 84,  337 => 81,  333 => 80,  327 => 79,  322 => 77,  318 => 76,  314 => 75,  310 => 74,  306 => 73,  301 => 71,  295 => 70,  290 => 68,  286 => 67,  281 => 65,  277 => 64,  269 => 63,  264 => 61,  260 => 60,  256 => 59,  252 => 58,  248 => 57,  243 => 55,  239 => 54,  233 => 53,  228 => 51,  224 => 50,  220 => 49,  215 => 47,  211 => 46,  207 => 45,  202 => 43,  198 => 42,  194 => 41,  190 => 40,  186 => 39,  181 => 37,  177 => 36,  173 => 35,  168 => 33,  164 => 32,  160 => 31,  156 => 30,  152 => 29,  141 => 27,  137 => 26,  132 => 24,  127 => 22,  123 => 21,  119 => 20,  111 => 19,  106 => 17,  102 => 16,  98 => 15,  94 => 14,  84 => 13,  80 => 12,  76 => 11,  71 => 9,  67 => 8,  63 => 7,  52 => 5,  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira1/template/plaza/module/ptmenu.twig", "");
    }
}
