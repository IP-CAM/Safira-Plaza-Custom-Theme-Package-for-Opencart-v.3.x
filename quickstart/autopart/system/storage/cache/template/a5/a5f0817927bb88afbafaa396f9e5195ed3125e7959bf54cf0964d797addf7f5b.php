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

/* default/template/plaza/module/ptstaticblock.twig */
class __TwigTemplate_15aec725fc34539e7b70a98c4ccd7c0fdb80a4b2cf59302e4d928d5d44838e48 extends \Twig\Template
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
        echo "<div>
    ";
        // line 2
        if ((($context["title"] ?? null) && ($context["show_title"] ?? null))) {
            // line 3
            echo "        <h2>";
            echo ($context["title"] ?? null);
            echo "</h2>
    ";
        }
        // line 5
        echo "    ";
        echo ($context["block_content"] ?? null);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/plaza/module/ptstaticblock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/plaza/module/ptstaticblock.twig", "");
    }
}
