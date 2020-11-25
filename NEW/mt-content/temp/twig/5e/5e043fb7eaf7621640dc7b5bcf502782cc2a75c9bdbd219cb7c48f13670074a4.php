<?php

/* @websiteWidgets/button/templates/default.twig.html */
class __TwigTemplate_06078146655fc638c6ec3df0a4caa1058a881f83afa6ba4d7e7e603d063b966d extends Twig_Template
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
        echo "<div data-widget-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", [], "method"), "html", null, true);
        echo "\" class=\"moto-widget moto-widget-button moto-preset-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "preset", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getAlignClass", [], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", [0 => "classes"], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getVisibleOn", [0 => "classes"], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getAnimationClasses", [], "method"), "html", null, true);
        echo "\" data-widget=\"button\">
    ";
        // line 2
        if (($context["isPreview"] ?? null)) {
            // line 3
            echo "        <span class=\"moto-widget-button-link moto-size-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "size", []), "html", null, true);
            echo "\"><span class=\"fa moto-widget-theme-icon\"></span> <span class=\"moto-widget-button-label\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "label", []), "html", null, true);
            echo "</span></span>
    ";
        } else {
            // line 5
            echo "        <a ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Linker"] ?? null), "getLinkAttributes", [0 => $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "link", [])], "method"), "html", null, true);
            echo " class=\"moto-widget-button-link moto-size-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "size", []), "html", null, true);
            echo " moto-link\"><span class=\"fa moto-widget-theme-icon\"></span> <span class=\"moto-widget-button-label\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "label", []), "html", null, true);
            echo "</span></a>
    ";
        }
        // line 7
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/button/templates/default.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  44 => 5,  36 => 3,  34 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/button/templates/default.twig.html", "/home/buyersel/public_html/mt-includes/widgets/button/templates/default.twig.html");
    }
}
