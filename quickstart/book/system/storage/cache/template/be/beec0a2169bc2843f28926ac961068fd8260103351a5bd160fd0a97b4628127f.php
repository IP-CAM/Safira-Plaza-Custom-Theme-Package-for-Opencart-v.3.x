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

/* tt_safira_houseware2/template/plaza/quickview/qvcontainer.twig */
class __TwigTemplate_dbe3816f8b16561e396ca5dc30443a52f160d33b7e54ff781c35aaafaca1666c extends \Twig\Template
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
        if (($context["use_quick_view"] ?? null)) {
            // line 2
            echo "<div id=\"quickview-content\">
    <!-- Load product content -->
</div>

<div id=\"quickview-bg-block\">
    <!-- Background -->
</div>

<div class=\"quickview-load-img\">
    <img src=\"";
            // line 11
            echo ($context["loader_img"] ?? null);
            echo "\" alt=\"\" />
</div>

<div class=\"lightbox-container lbo-quickview\"></div>

<input type=\"hidden\" id=\"qv-text-close\" value=\"";
            // line 16
            echo ($context["text_close"] ?? null);
            echo "\" />

<script type=\"text/javascript\">
    \$('#quickview-bg-block').click(function () {
        ptquickview.closeQVFrame();
    })

    if(\$('#product-product').length) {
        \$('.lightbox-container.lbo-quickview').remove();
    }
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "tt_safira_houseware2/template/plaza/quickview/qvcontainer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 16,  50 => 11,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_houseware2/template/plaza/quickview/qvcontainer.twig", "");
    }
}
