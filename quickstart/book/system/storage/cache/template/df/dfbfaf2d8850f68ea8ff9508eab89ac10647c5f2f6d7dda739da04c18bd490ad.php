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

/* tt_safira_book4/template/common/home.twig */
class __TwigTemplate_28760c12e8063cd381297520537cb2518a05c94c5b1377cf48924986d2f8ae3b extends \Twig\Template
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
        echo "
\t<div id=\"content\">
\t\t";
        // line 3
        echo ($context["column_left"] ?? null);
        echo "\t\t
\t\t";
        // line 4
        echo ($context["content_top"] ?? null);
        echo "\t\t
\t\t";
        // line 5
        echo ($context["content_bottom"] ?? null);
        echo "\t\t
\t\t";
        // line 6
        echo ($context["column_right"] ?? null);
        echo "\t\t
\t</div>
";
        // line 8
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "tt_safira_book4/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 8,  54 => 6,  50 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_book4/template/common/home.twig", "");
    }
}
