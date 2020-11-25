<?php

/* @websiteWidgets/text/templates/default.twig.html */
class __TwigTemplate_a50610451550f5723e27e816674cc775a2a8098567a3e57e9418b27d1a89c749 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            '__internal_ce43e8da0fa4563f14ffd8e26fb37397db7b96ea2702b64d9338e162f934561f' => [$this, 'block___internal_ce43e8da0fa4563f14ffd8e26fb37397db7b96ea2702b64d9338e162f934561f'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div data-widget-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", [], "method"), "html", null, true);
        echo "\" class=\"moto-widget moto-widget-text moto-preset-default ";
        if (($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "content", []) == "")) {
            echo "moto-widget-text_blank";
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", [0 => "classes"], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getVisibleOn", [0 => "classes"], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getAnimationClasses", [], "method"), "html", null, true);
        echo "\" data-widget=\"text\" data-preset=\"default\" data-spacing=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", [0 => "short"], "method"), "html", null, true);
        echo "\" data-visible-on=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getVisibleOn", [0 => "short"], "method"), "html", null, true);
        echo "\" data-animation=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "animation", []), "html", null, true);
        echo "\">
    <div class=\"moto-widget-text-content moto-widget-text-editable\">";
        // line 2
        echo call_user_func_array($this->env->getFilter('page_html_content')->getCallable(), [$this->env,         $this->renderBlock("__internal_ce43e8da0fa4563f14ffd8e26fb37397db7b96ea2702b64d9338e162f934561f", $context, $blocks), ($context["currentWidget"] ?? null), "widget:text.content"]);
        echo "</div>
</div>";
    }

    public function block___internal_ce43e8da0fa4563f14ffd8e26fb37397db7b96ea2702b64d9338e162f934561f($context, array $blocks = [])
    {
        $this->loadTemplate(twig_template_from_string($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "content", [])), "@websiteWidgets/text/templates/default.twig.html", 2)->display($context);
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/text/templates/default.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/text/templates/default.twig.html", "/home/buyersel/public_html/NEW/mt-includes/widgets/text/templates/default.twig.html");
    }
}
