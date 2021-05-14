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

/* tt_safira1/template/common/footer.twig */
class __TwigTemplate_55b9b5462a6ab5fbe1ea9b2a6de549101040fea66e5da9b85ba67f3e329b1e7b extends \Twig\Template
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
        echo "<footer>
\t<div class=\"footer-links\">  
\t  <div class=\"container\">
\t\t<div class=\"inner\">\t
\t\t\t<div class=\"row\">
\t\t\t  <div class=\"col col-md-4 col-sm-12\">
\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t<h5 data-toggle=\"dropdown\" class=\"dropdown-toggle visible-xs\">";
        // line 8
        echo ($context["text_contact"] ?? null);
        echo "<i class=\"visible-xs ion-chevron-down\"></i></h5>
\t\t\t\t\t<div class=\"dropdown-menu footer-content\">
\t\t\t\t\t\t<div class=\"logo-footer\"><a href=\"#\"><img src=\"catalog/view/theme/tt_safira1/image/logo-footer.png\" alt=\"\"></a></div>
\t\t\t\t\t\t<p class=\"description-footer\">";
        // line 11
        echo ($context["text_description_footer"] ?? null);
        echo "</p>
\t\t\t\t\t\t<p><span>";
        // line 12
        echo ($context["text_address"] ?? null);
        echo "</span>";
        echo ($context["address"] ?? null);
        echo "</p>
\t\t\t\t\t\t<p><span>";
        // line 13
        echo ($context["text_email"] ?? null);
        echo "</span>";
        echo ($context["email"] ?? null);
        echo "</p>
\t\t\t\t\t\t<p><span>";
        // line 14
        echo ($context["text_phone"] ?? null);
        echo "</span>";
        echo ($context["telephone"] ?? null);
        echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"col col-md-2 col-sm-6\">
\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t<h5 data-toggle=\"dropdown\" class=\"dropdown-toggle\">";
        // line 20
        echo ($context["text_information"] ?? null);
        echo "<i class=\"visible-xs ion-chevron-down\"></i></h5>
\t\t\t\t\t<div class=\"dropdown-menu footer-content footer-information\">
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t ";
        // line 23
        if (($context["informations"] ?? null)) {
            // line 24
            echo "\t\t\t\t\t\t ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 25
                echo "\t\t\t\t\t\t  <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 25);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 25);
                echo "</a></li>
\t\t\t\t\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "\t\t\t\t\t\t  ";
        }
        // line 28
        echo "\t\t\t\t\t\t  <li><a href=\"";
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t  <li><a href=\"";
        // line 29
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"col col-md-2 col-sm-6\">
\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t<h5 data-toggle=\"dropdown\" class=\"dropdown-toggle\">";
        // line 36
        echo ($context["text_extra"] ?? null);
        echo "<i class=\"visible-xs ion-chevron-down\"></i></h5>
\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t  <li><a href=\"";
        // line 39
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t  <li><a href=\"";
        // line 40
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t  <li><a href=\"";
        // line 41
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t  <li><a href=\"";
        // line 42
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t  <li><a href=\"";
        // line 43
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t  <li><a href=\"";
        // line 44
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t   <div class=\"col col-md-4 col-sm-6\">
\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t<h5 data-toggle=\"dropdown\" class=\"dropdown-toggle\">";
        // line 51
        echo ($context["text_signup_newsletter"] ?? null);
        echo "<i class=\"visible-xs ion-chevron-down\"></i></h5>
\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t";
        // line 54
        echo ($context["position5"] ?? null);
        echo "
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
\t\t</div>
\t  </div>
\t</div>
\t<div class=\"footer-bottom\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t\t<div class=\"footer-copyright\">
\t\t\t\t\t\t<p class=\"text-powered\">";
        // line 68
        echo ($context["powered"] ?? null);
        echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 col-sm-12\">
\t\t\t\t\t";
        // line 72
        echo ($context["position6"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 79
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</div></body></html>";
    }

    public function getTemplateName()
    {
        return "tt_safira1/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 81,  216 => 79,  212 => 78,  203 => 72,  196 => 68,  179 => 54,  173 => 51,  161 => 44,  155 => 43,  149 => 42,  143 => 41,  137 => 40,  131 => 39,  125 => 36,  113 => 29,  106 => 28,  103 => 27,  92 => 25,  87 => 24,  85 => 23,  79 => 20,  68 => 14,  62 => 13,  56 => 12,  52 => 11,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira1/template/common/footer.twig", "");
    }
}
