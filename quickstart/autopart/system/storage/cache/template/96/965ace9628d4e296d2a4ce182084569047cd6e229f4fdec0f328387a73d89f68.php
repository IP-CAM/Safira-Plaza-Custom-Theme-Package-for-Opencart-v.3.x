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

/* tt_safira_autopart4/template/plaza/blog/widget/latest_blog.twig */
class __TwigTemplate_a4ecab7e07985120d116c27c3bbacb3314d6003b90a47fd7c84fb5a5be6cfad2 extends \Twig\Template
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
        if (($context["latest_blog"] ?? null)) {
            // line 2
            echo "    <div class=\"blog-widget-section blog-widget\">
        <div class=\"title\">
            <h3>";
            // line 4
            echo ($context["text_latest_post"] ?? null);
            echo "</h3>
        </div>
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["latest_blog"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 7
                echo "        <div class=\"widget-content\">
            <a href=\"";
                // line 8
                echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 8);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 8);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 8);
                echo "\" /></a>
\t\t\t<div class=\"latest-post-content\">
\t\t\t\t<h6 class=\"latest-post-name\"><a href=\"";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 10);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 10);
                echo "</a></h6>
\t\t\t\t<div class=\"post-date-author\">
\t\t\t\t\t<span class=\"post-date\">";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["post"], "date_added", [], "any", false, false, false, 12);
                echo "</span>
\t\t\t\t\t<!--span class=\"post-author\">";
                // line 13
                if (twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 13)) {
                    echo twig_get_attribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 13);
                }
                echo "</span-->
\t\t\t\t</div>
\t\t\t</div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "tt_safira_autopart4/template/plaza/blog/widget/latest_blog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 18,  75 => 13,  71 => 12,  64 => 10,  55 => 8,  52 => 7,  48 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_autopart4/template/plaza/blog/widget/latest_blog.twig", "");
    }
}
