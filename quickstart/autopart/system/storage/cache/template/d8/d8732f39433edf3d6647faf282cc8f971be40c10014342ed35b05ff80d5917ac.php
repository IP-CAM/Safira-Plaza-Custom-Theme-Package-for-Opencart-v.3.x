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

/* tt_safira_autopart3/template/plaza/module/ptnewsletter.twig */
class __TwigTemplate_58f6d62709f0ffd5b6c47c08aeca49c321f4aa265055ce0a879ab00fe733d1b5 extends \Twig\Template
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
        if (($context["popup"] ?? null)) {
            // line 2
            echo "    ";
            $context["newsletter_class"] = "newsletter-popup";
        } else {
            // line 4
            echo "    ";
            $context["newsletter_class"] = "newsletter-block";
        }
        // line 6
        echo "<div class=\"newsletter-container ";
        echo ($context["newsletter_class"] ?? null);
        echo "\">
    ";
        // line 7
        if (($context["popup"] ?? null)) {
            // line 8
            echo "\t\t<a href=\"javascript:void(0)\" class=\"a-close-newsletter-full\" onclick=\"ptnewsletter.closePopup();\"></a>
        <div class=\"popup-content\">
\t\t<a href=\"javascript:void(0)\" class=\"a-close-newsletter\" onclick=\"ptnewsletter.closePopup();\">";
            // line 10
            echo ($context["text_close"] ?? null);
            echo "</a>
    ";
        }
        // line 12
        echo "    
\t";
        // line 13
        if (($context["popup"] ?? null)) {
            // line 14
            echo "\t\t<h3>";
            echo ($context["heading_title1"] ?? null);
            echo "</h3>
\t\t<p>";
            // line 15
            echo ($context["text_description"] ?? null);
            echo "</p>
\t";
        } else {
            // line 17
            echo "\t<div class=\"newsletter-title\">
\t\t<h3>";
            // line 18
            echo ($context["heading_title2"] ?? null);
            echo "</h3>
\t\t<p>";
            // line 19
            echo ($context["text_description2"] ?? null);
            echo "</p>
    </div>
\t
\t";
        }
        // line 23
        echo "    <div class=\"newsletter-content\">
        
        <div class=\"content\">
            <input type=\"text\" class=\"newsletter_email\" name=\"mail_subscribe\" value=\"\" placeholder=\"";
        // line 26
        echo ($context["entry_mail_subscribe"] ?? null);
        echo "\" />
\t\t\t
            <button type=\"button\" class=\"btn btn-primary\" onclick=\"ptnewsletter.saveMail(\$(this));\">";
        // line 28
        echo ($context["button_subscribe"] ?? null);
        echo "</button>
        </div>
\t\t<div class=\"newsletter-notification\"></div>
        ";
        // line 31
        if (($context["popup"] ?? null)) {
            // line 32
            echo "            <div class=\"notice\">
                <input type=\"checkbox\" class=\"cbk_newsletter\" />
                <span>";
            // line 34
            echo ($context["text_notification"] ?? null);
            echo "</span>
            </div>
        ";
        }
        // line 37
        echo "\t\t
    </div>
    
\t";
        // line 40
        if (($context["popup"] ?? null)) {
            // line 41
            echo "        </div>
    ";
        }
        // line 43
        echo "</div>
<script>
    ptnewsletter.checkCookie();
</script>";
    }

    public function getTemplateName()
    {
        return "tt_safira_autopart3/template/plaza/module/ptnewsletter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 43,  127 => 41,  125 => 40,  120 => 37,  114 => 34,  110 => 32,  108 => 31,  102 => 28,  97 => 26,  92 => 23,  85 => 19,  81 => 18,  78 => 17,  73 => 15,  68 => 14,  66 => 13,  63 => 12,  58 => 10,  54 => 8,  52 => 7,  47 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_autopart3/template/plaza/module/ptnewsletter.twig", "");
    }
}
