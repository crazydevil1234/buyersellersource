<?php

/* @websiteWidgets/back_to_top/templates/base.html.twig */
class __TwigTemplate_01a6fc00f7b55a5c1b8f4329abf7d5e223e136ee68fa0e12de1e01e316e05c7c extends Twig_Template
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
        if (($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "back_to_top_button", []), "type", []) == "custom")) {
            // line 2
            echo "    <div data-moto-back-to-top-button class=\"moto-widget-back-to-top moto-preset-default wow\">
        <a ng-click=\"toTop(\$event)\" class=\"moto-widget-back-to-top-link\">
            <span class=\"moto-widget-back-to-top-icon fa\"></span>
        </a>
    </div>
";
        } elseif (($this->getAttribute($this->getAttribute(        // line 7
($context["WEBSITE"] ?? null), "back_to_top_button", []), "type", []) == "theme")) {
            // line 8
            echo "    <div data-moto-back-to-top-button class=\"moto-back-to-top-button\">
        <a ng-click=\"toTop(\$event)\" class=\"moto-back-to-top-button-link\">
            <span class=\"moto-back-to-top-button-icon fa\"></span>
        </a>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/back_to_top/templates/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/back_to_top/templates/base.html.twig", "/home/buyersel/public_html/mt-includes/widgets/back_to_top/templates/base.html.twig");
    }
}
