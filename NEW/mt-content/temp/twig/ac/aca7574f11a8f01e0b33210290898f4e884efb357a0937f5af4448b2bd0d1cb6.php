<?php

/* @websiteWidgets/google_map_pro/templates/default.twig.html */
class __TwigTemplate_b23916607a4b1a2191357170f92cf8d1c3fa82aced8bc4f3cd985658d399a4d0 extends Twig_Template
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
        echo "\" class=\"moto-widget moto-widget-google-map-pro ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", [0 => "classes"], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getVisibleOn", [0 => "classes"], "method"), "html", null, true);
        echo "\" data-widget=\"google_map_pro\">
    ";
        // line 2
        if (($context["isPreview"] ?? null)) {
            echo "<div class=\"moto-widget-cover\"></div>";
        }
        // line 3
        echo "    ";
        if ( !$this->getAttribute(($context["currentWidget"] ?? null), "isSetApiKey", [], "method")) {
            // line 4
            echo "    <div class=\"moto-widget-empty\"></div>
    ";
        } else {
            // line 6
            echo "    <div class=\"moto-widget-google-map-pro-wrapper\" data-map-properties=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "params", [])), "html", null, true);
            echo "\" ";
            if ( !($context["isPreview"] ?? null)) {
                echo " data-map-markers=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "exportFrontendMarkersData", [], "method"), "html", null, true);
                echo "\"";
            }
            echo " style=\"height: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "height", []), "html", null, true);
            echo "px\"></div>
    ";
        }
        // line 8
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/google_map_pro/templates/default.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 8,  39 => 6,  35 => 4,  32 => 3,  28 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/google_map_pro/templates/default.twig.html", "/home/buyersel/public_html/NEW/mt-includes/widgets/google_map_pro/templates/default.twig.html");
    }
}
