<?php

/* @websiteWidgets/image/templates/default.twig.html */
class __TwigTemplate_a28f5940b612086ee2ef7877b6a243b988f1e5f6aaee0e873a72352ecb8b4490 extends Twig_Template
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
        echo "\" class=\"moto-widget moto-widget-image moto-preset-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "preset", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getAlignClass", [], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", [0 => "classes"], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getVisibleOn", [0 => "classes"], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getAnimationClasses", [], "method"), "html", null, true);
        echo "\" data-widget=\"image\">
    ";
        // line 2
        if ($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "src", [])) {
            // line 3
            echo "        ";
            if ((($context["isPreview"] ?? null) || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "link", []), "action", []) == "none"))) {
                // line 4
                echo "            <span class=\"moto-widget-image-link\">
                <img ";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute(($context["Linker"] ?? null), "lazyImageSrcAttribute", [0 => $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "src", [])], "method"), "html", null, true);
                echo " class=\"moto-widget-image-picture ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getLazyLoadingCssClass", [], "method"), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "id", []), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "title", []), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "alt", []), "html", null, true);
                echo "\"";
                if (($context["isPreview"] ?? null)) {
                    echo " draggable=\"false\"";
                }
                echo ">
            </span>
        ";
            } else {
                // line 8
                echo "            <a class=\"moto-widget-image-link moto-link\" ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["Linker"] ?? null), "getLinkAttributes", [0 => $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "link", [])], "method"), "html", null, true);
                echo ">
                <img ";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute(($context["Linker"] ?? null), "lazyImageSrcAttribute", [0 => $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "src", [])], "method"), "html", null, true);
                echo " class=\"moto-widget-image-picture ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getLazyLoadingCssClass", [], "method"), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "id", []), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "title", []), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "alt", []), "html", null, true);
                echo "\">
            </a>
        ";
            }
            // line 12
            echo "    ";
        } else {
            // line 13
            echo "        <div class=\"moto-widget-empty\"></div>
    ";
        }
        // line 15
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/image/templates/default.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 15,  82 => 13,  79 => 12,  65 => 9,  60 => 8,  42 => 5,  39 => 4,  36 => 3,  34 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/image/templates/default.twig.html", "/home/buyersel/public_html/mt-includes/widgets/image/templates/default.twig.html");
    }
}
