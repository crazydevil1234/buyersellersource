<?php

/* @mainTemplates/popup/website.html.twig */
class __TwigTemplate_07a69377589456df9427bcae7873886ba67f59343dcfb0407d151efb4e40bd02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["ContentHelper"] = $this->loadTemplate("macros/helper.html.twig", "@mainTemplates/popup/website.html.twig", 1);
        // line 3
        echo "<div class=\"moto-popup_content\" style=\"background: white;\">
    <section class=\"content moto-section\" data-widget=\"section\" data-container=\"section\">
        ";
        // line 5
        echo $context["ContentHelper"]->getRenderPageSection(($context["currentContentBlock"] ?? null), "popup");
        echo "
    </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "@mainTemplates/popup/website.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  21 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@mainTemplates/popup/website.html.twig", "/home/buyersel/public_html/NEW/mt-includes/templates/popup/website.html.twig");
    }
}
