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

/* tt_safira_book4/template/plaza/filter/filter_ajax.twig */
class __TwigTemplate_2b14405d2d2afe3edf44eff144a3aac0bee1e01423fe98c9c2bf10c6c715458e extends \Twig\Template
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
        echo "<div class=\"list-group\">
    <div class=\"filter-attribute-container filter-attribute-remove-container\">
        ";
        // line 3
        $context["is_filter"] = false;
        // line 4
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            // line 5
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter", [], "any", false, false, false, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 6
                echo "                ";
                $context["filter_id"] = twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 6);
                // line 7
                echo "                ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 7), ($context["filter_category"] ?? null))) {
                    // line 8
                    echo "                    ";
                    $context["is_filter"] = true;
                    // line 9
                    echo "                    <div class=\"list-group-item filter-act-name\">
                        <p>";
                    // line 10
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "e_name", [], "any", false, false, false, 10);
                    echo "</p>
                        <a class=\"a-filter remove-filter\" href=\"javascript:void(0);\" name=\"";
                    // line 11
                    echo ($context["filter_id"] ?? null);
                    echo "\"><span><i class=\"fa fa-times-circle\" aria-hidden=\"true\"></i></span></a>
                    </div>
                ";
                }
                // line 14
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        ";
        if (($context["is_filter"] ?? null)) {
            // line 17
            echo "            <div class=\"list-group-item filter-clear-all\">
                <a class=\"clear-filter\" href=\"javascript:void(0);\" onclick=\"ptfilter.filter('";
            // line 18
            echo ($context["clear_action"] ?? null);
            echo "')\">Clear all</a>
            </div>
        ";
        }
        // line 21
        echo "    </div>
    <div class=\"filter-attribute-container\">
        <label>Price</label>
        <div class=\"list-group-item\">
            <div class=\"filter-price\">
                <div id=\"slider-price\"></div>
                <div class=\"slider-values\">
                    <span>";
        // line 28
        echo ($context["currency_symbol_left"] ?? null);
        echo "</span>
                    <input id=\"price-from\" disabled=\"disabled\" class=\"input-price\" type=\"text\" value=\"";
        // line 29
        echo ($context["current_min_price"] ?? null);
        echo "\" placeholder=\"Min\" name=\"price-from\"/>
                    <span>";
        // line 30
        echo ($context["currency_symbol_right"] ?? null);
        echo "</span><em>";
        echo "-";
        echo "</em>
                    <span>";
        // line 31
        echo ($context["currency_symbol_left"] ?? null);
        echo "</span>
                    <input id=\"price-to\" disabled=\"disabled\" class=\"input-price\" type=\"text\" value=\"";
        // line 32
        echo ($context["current_max_price"] ?? null);
        echo "\" placeholder=\"Max\" name=\"price-to\" />
                    <span>";
        // line 33
        echo ($context["currency_symbol_right"] ?? null);
        echo "</span>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            // line 39
            echo "        <div class=\"filter-attribute-container\">
            <label>";
            // line 40
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "name", [], "any", false, false, false, 40);
            echo "</label>
            <div class=\"list-group-item\">
                <div id=\"filter-group";
            // line 42
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter_group_id", [], "any", false, false, false, 42);
            echo "\">
                    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter", [], "any", false, false, false, 43));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 44
                echo "                        ";
                $context["filter_id"] = twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 44);
                // line 45
                echo "                        ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 45), ($context["filter_category"] ?? null))) {
                    // line 46
                    echo "                            <!-- Not show filter attribute -->
                        ";
                } else {
                    // line 48
                    echo "                            <a class=\"a-filter add-filter\" href=\"javascript:void(0);\" name=\"";
                    echo ($context["filter_id"] ?? null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 48);
                    echo "</a>
                        ";
                }
                // line 50
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "tt_safira_book4/template/plaza/filter/filter_ajax.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 55,  182 => 51,  176 => 50,  168 => 48,  164 => 46,  161 => 45,  158 => 44,  154 => 43,  150 => 42,  145 => 40,  142 => 39,  138 => 38,  130 => 33,  126 => 32,  122 => 31,  116 => 30,  112 => 29,  108 => 28,  99 => 21,  93 => 18,  90 => 17,  87 => 16,  81 => 15,  75 => 14,  69 => 11,  65 => 10,  62 => 9,  59 => 8,  56 => 7,  53 => 6,  48 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_book4/template/plaza/filter/filter_ajax.twig", "");
    }
}
