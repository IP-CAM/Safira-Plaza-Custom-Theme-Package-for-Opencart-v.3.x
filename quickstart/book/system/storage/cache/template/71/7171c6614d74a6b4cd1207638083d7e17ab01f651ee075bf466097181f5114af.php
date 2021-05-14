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

/* tt_safira_houseware3/template/common/footer.twig */
class __TwigTemplate_ab3c1d33ce4d98368704930806f64cb8c76cbd6359f591f76843db9a47f795c5 extends \Twig\Template
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
\t";
        // line 2
        echo ($context["position4"] ?? null);
        echo "
\t<div class=\"footer-links\">  
\t  <div class=\"container\">
\t\t<div class=\"inner btn-group-vertical\">\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col col-md-4 col-sm-6 col-xs-12\">
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<div id=\"btnGroupVerticalDrop1\" data-toggle=\"dropdown\" class=\"dropdown-toggle title visible-xs\">";
        // line 9
        echo ($context["text_about_us"] ?? null);
        echo "<i class=\"visible-xs ion-chevron-down\"></i></div>
\t\t\t\t\t\t<div class=\"dropdown-menu footer-content\" aria-labelledby=\"btnGroupVerticalDrop1\">
\t\t\t\t\t\t";
        // line 11
        echo ($context["position7"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"col col-md-4 col-sm-6 col-xs-12\">
\t\t\t\t\t<div class=\"btn-group \">
\t\t\t\t\t\t<div id=\"btnGroupVerticalDrop4\" data-toggle=\"dropdown\" class=\"dropdown-toggle title\">";
        // line 17
        echo ($context["text_our_newsletter"] ?? null);
        echo "<i class=\"visible-xs ion-chevron-down\"></i></div>
\t\t\t\t\t\t<div class=\"dropdown-menu footer-content\" aria-labelledby=\"btnGroupVerticalDrop4\">
\t\t\t\t\t\t";
        // line 19
        echo ($context["position5"] ?? null);
        echo "
\t\t\t\t\t\t";
        // line 20
        echo ($context["position6"] ?? null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col col-md-2 col-sm-6 col-xs-12\">
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<div id=\"btnGroupVerticalDrop2\" data-toggle=\"dropdown\" class=\"dropdown-toggle title\">";
        // line 26
        echo ($context["text_information"] ?? null);
        echo "<i class=\"visible-xs ion-chevron-down\"></i></div>
\t\t\t\t\t\t<div class=\"dropdown-menu footer-content footer-information\" aria-labelledby=\"btnGroupVerticalDrop2\">
\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t";
        // line 29
        if (($context["informations"] ?? null)) {
            // line 30
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 31
                echo "\t\t\t\t\t\t\t\t  <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 31);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 31);
                echo "</a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t\t\t\t\t\t\t";
        }
        // line 34
        echo "\t\t\t\t\t\t\t<li><a href=\"";
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 35
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t<!--li><a href=\"";
        // line 36
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li-->
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col col-md-2 col-sm-6 col-xs-12\">
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<div id=\"btnGroupVerticalDrop3\" data-toggle=\"dropdown\" class=\"dropdown-toggle title\">";
        // line 43
        echo ($context["text_service"] ?? null);
        echo "<i class=\"visible-xs ion-chevron-down\"></i></div>
\t\t\t\t\t\t<div class=\"dropdown-menu footer-content\" aria-labelledby=\"btnGroupVerticalDrop3\">
\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t  <li><a href=\"";
        // line 46
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t  <!--li><a href=\"";
        // line 47
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li-->
\t\t\t\t\t\t\t  <!--li><a href=\"";
        // line 48
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li-->
\t\t\t\t\t\t\t  <li><a href=\"";
        // line 49
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t  <li><a href=\"";
        // line 50
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t  <li><a href=\"";
        // line 51
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t  <li><a href=\"";
        // line 52
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t  <li><a href=\"";
        // line 53
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t

\t\t\t</div>
\t\t</div>
\t  </div>
\t</div>
\t<div class=\"footer-copyright\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t\t<p class=\"text-powered\">";
        // line 69
        echo ($context["powered"] ?? null);
        echo "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 col-sm-6 col-xs-12\">
\t\t\t\t";
        // line 72
        echo ($context["position8"] ?? null);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
<script >
\t\$(document).ready(function() {
\t\t(function(\$){
\t\t\tfunction injector(t, splitter, klass, after) {
\t\t\t\tvar a = t.text().split(splitter), inject = '';
\t\t\t\tif (a.length) {
\t\t\t\t\t\$(a).each(function(i, item) {
\t\t\t\t\t\tinject += '<span class=\"'+klass+(i+1)+'\">'+item+'</span>'+after;
\t\t\t\t\t});\t
\t\t\t\t\tt.empty().append(inject);
\t\t\t\t}
\t\t\t}
\t\t\t
\t\t\tvar methods = {
\t\t\t\tinit : function() {

\t\t\t\t\treturn this.each(function() {
\t\t\t\t\t\tinjector(\$(this), '', 'char', '');
\t\t\t\t\t});

\t\t\t\t},

\t\t\t\twords : function() {

\t\t\t\t\treturn this.each(function() {
\t\t\t\t\t\tinjector(\$(this), ' ', 'word', ' ');
\t\t\t\t\t});

\t\t\t\t},
\t\t\t\t
\t\t\t\tlines : function() {

\t\t\t\t\treturn this.each(function() {
\t\t\t\t\t\tvar r = \"eefec303079ad17405c889e092e105b0\";
\t\t\t\t\t\t// Because it's hard to split a <br/> tag consistently across browsers,
\t\t\t\t\t\t// (ahem IE ahem), we replaces all <br/> instances with an md5 hash 
\t\t\t\t\t\t// (of the word \"split\").  If you're trying to use this plugin on that 
\t\t\t\t\t\t// md5 hash string, it will fail because you're being ridiculous.
\t\t\t\t\t\tinjector(\$(this).children(\"br\").replaceWith(r).end(), r, 'line', '');
\t\t\t\t\t});

\t\t\t\t}
\t\t\t};

\t\t\t\$.fn.lettering = function( method ) {
\t\t\t\t// Method calling logic
\t\t\t\tif ( method && methods[method] ) {
\t\t\t\t\treturn methods[ method ].apply( this, [].slice.call( arguments, 1 ));
\t\t\t\t} else if ( method === 'letters' || ! method ) {
\t\t\t\t\treturn methods.init.apply( this, [].slice.call( arguments, 0 ) ); // always pass an array
\t\t\t\t}
\t\t\t\t\$.error( 'Method ' +  method + ' does not exist on jQuery.lettering' );
\t\t\t\treturn this;
\t\t\t};

\t\t})(jQuery);
\t\t\$(\".block-title .title\").lettering('words');
\t\t\$(\".product-tabs .tabs-style .nav-tabs>li>a> span\").lettering('words');
\t\t
\t\t
\t });
\t</script>
";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 141
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</div></body></html>";
    }

    public function getTemplateName()
    {
        return "tt_safira_houseware3/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 143,  284 => 141,  280 => 140,  209 => 72,  203 => 69,  182 => 53,  176 => 52,  170 => 51,  164 => 50,  158 => 49,  152 => 48,  146 => 47,  140 => 46,  134 => 43,  122 => 36,  116 => 35,  109 => 34,  106 => 33,  95 => 31,  90 => 30,  88 => 29,  82 => 26,  73 => 20,  69 => 19,  64 => 17,  55 => 11,  50 => 9,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tt_safira_houseware3/template/common/footer.twig", "");
    }
}
