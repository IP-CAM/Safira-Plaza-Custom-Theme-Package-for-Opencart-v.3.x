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

/* default/template/plaza/module/ptnewsletter.twig */
class __TwigTemplate_3623cd0598eb8ffe7bd6f8113ee1198657ea25ad11899620cc4471e348f6d823 extends \Twig\Template
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
            echo "        <a href=\"javascript:void(0)\" class=\"a-close-newsletter\" onclick=\"ptnewsletter.closePopup();\">";
            echo ($context["text_close"] ?? null);
            echo "</a>
    ";
        }
        // line 10
        echo "    <div class=\"newsletter-heading\">
        <h3>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h3>
    </div>
    <div class=\"newsletter-content\">
        ";
        // line 14
        if (($context["popup"] ?? null)) {
            // line 15
            echo "            <p class=\"newsletter-subtitle\">";
            echo ($context["text_subtitle"] ?? null);
            echo "</p>
            <p class=\"newsletter-description\">";
            // line 16
            echo ($context["text_description"] ?? null);
            echo "</p>
        ";
        }
        // line 18
        echo "        <div class=\"content\">
            <label>";
        // line 19
        echo ($context["entry_mail"] ?? null);
        echo "</label>
            <input type=\"text\" class=\"newsletter_email\" name=\"mail_subscribe\" value=\"\" placeholder=\"";
        // line 20
        echo ($context["entry_mail_subscribe"] ?? null);
        echo "\" />
            <button type=\"button\" class=\"btn btn-primary\" onclick=\"ptnewsletter.saveMail(\$(this));\">";
        // line 21
        echo ($context["button_subscribe"] ?? null);
        echo "</button>
        </div>
        ";
        // line 23
        if (($context["popup"] ?? null)) {
            // line 24
            echo "            <div class=\"notice\">
                <input type=\"checkbox\" class=\"cbk_newsletter\" />
                <span>";
            // line 26
            echo ($context["text_notification"] ?? null);
            echo "</span>
            </div>
        ";
        }
        // line 29
        echo "    </div>
    <div class=\"newsletter-notification\"></div>
</div>
<script>
    ptnewsletter.checkCookie();
</script>";
    }

    public function getTemplateName()
    {
        return "default/template/plaza/module/ptnewsletter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 29,  103 => 26,  99 => 24,  97 => 23,  92 => 21,  88 => 20,  84 => 19,  81 => 18,  76 => 16,  71 => 15,  69 => 14,  63 => 11,  60 => 10,  54 => 8,  52 => 7,  47 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/plaza/module/ptnewsletter.twig", "");
    }
}
