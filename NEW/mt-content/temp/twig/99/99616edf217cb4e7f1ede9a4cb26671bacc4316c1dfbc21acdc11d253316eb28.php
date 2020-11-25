<?php

/* @websiteWidgets/breadcrumbs/templates/default.twig.css */
class __TwigTemplate_8cad2d4613364639370fb2c5162959db409556eded1447b0a606de391857750f extends Twig_Template
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
        $context["properties"] = call_user_func_array($this->env->getFilter('json_decode')->getCallable(), [$this->getAttribute(($context["item"] ?? null), "properties", [])]);
        // line 2
        echo "
";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generatePresetSelector", [0 => ".moto-widget-breadcrumbs", 1 => $this->getAttribute(($context["item"] ?? null), "class_name", [])], "method"), "html", null, true);
        echo " {

    ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "list", []), "desktop", []), 1 => ".moto-widget-breadcrumbs__list"], "method"), "html", null, true);
        echo "
    ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item_content", []), "desktop", []), 1 => ".moto-widget-breadcrumbs__item-content"], "method"), "html", null, true);
        echo "
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item_link", []), "desktop", []), 1 => ".moto-widget-breadcrumbs__item-content_link"], "method"), "html", null, true);
        echo "
    ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item_current", []), "desktop", []), 1 => ".moto-widget-breadcrumbs__item-content_current"], "method"), "html", null, true);
        echo "
    ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "delimiter", []), "desktop", []), 1 => ".moto-widget-breadcrumbs__item-delimiter"], "method"), "html", null, true);
        echo "
    ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "icon", []), "desktop", []), "base", []), 1 => ".moto-widget-breadcrumbs__item-icon"], "method"), "html", null, true);
        echo "
    ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "icon", []), "desktop", []), "hover", []), 1 => ".moto-widget-breadcrumbs__item:hover .moto-widget-breadcrumbs__item-icon"], "method"), "html", null, true);
        echo "
    ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "spacing", []), "desktop", []), 1 => ".moto-widget-breadcrumbs__item-delimiter, .moto-widget-breadcrumbs__item:not(:last-child)"], "method"), "html", null, true);
        echo "

    @media screen and (max-width: @const_media_tablet_max_width) {
        ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "list", []), "tablet", []), 1 => ".moto-widget-breadcrumbs__list"], "method"), "html", null, true);
        echo "
        ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item_content", []), "tablet", []), 1 => ".moto-widget-breadcrumbs__item-content"], "method"), "html", null, true);
        echo "
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item_link", []), "tablet", []), 1 => ".moto-widget-breadcrumbs__item-content_link"], "method"), "html", null, true);
        echo "
        ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item_current", []), "tablet", []), 1 => ".moto-widget-breadcrumbs__item-content_current"], "method"), "html", null, true);
        echo "
        ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "delimiter", []), "tablet", []), 1 => ".moto-widget-breadcrumbs__item-delimiter"], "method"), "html", null, true);
        echo "
        ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "icon", []), "tablet", []), "base", []), 1 => ".moto-widget-breadcrumbs__item-icon"], "method"), "html", null, true);
        echo "
        ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "icon", []), "tablet", []), "hover", []), 1 => ".moto-widget-breadcrumbs__item:hover .moto-widget-breadcrumbs__item-icon"], "method"), "html", null, true);
        echo "
        ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "spacing", []), "tablet", []), 1 => ".moto-widget-breadcrumbs__item-delimiter, .moto-widget-breadcrumbs__item:not(:last-child)"], "method"), "html", null, true);
        echo "
    }
    @media screen and (max-width: @const_media_mobile-h_max_width) {
        ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "list", []), "mobile-h", [], "array"), 1 => ".moto-widget-breadcrumbs__list"], "method"), "html", null, true);
        echo "
        ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item_content", []), "mobile-h", [], "array"), 1 => ".moto-widget-breadcrumbs__item-content"], "method"), "html", null, true);
        echo "
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item_link", []), "mobile-h", [], "array"), 1 => ".moto-widget-breadcrumbs__item-content_link"], "method"), "html", null, true);
        echo "
        ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item_current", []), "mobile-h", [], "array"), 1 => ".moto-widget-breadcrumbs__item-content_current"], "method"), "html", null, true);
        echo "
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "delimiter", []), "mobile-h", [], "array"), 1 => ".moto-widget-breadcrumbs__item-delimiter"], "method"), "html", null, true);
        echo "
        ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "icon", []), "mobile-h", [], "array"), "base", []), 1 => ".moto-widget-breadcrumbs__item-icon"], "method"), "html", null, true);
        echo "
        ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "icon", []), "mobile-h", [], "array"), "hover", []), 1 => ".moto-widget-breadcrumbs__item:hover .moto-widget-breadcrumbs__item-icon"], "method"), "html", null, true);
        echo "
        ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "spacing", []), "mobile-h", [], "array"), 1 => ".moto-widget-breadcrumbs__item-delimiter, .moto-widget-breadcrumbs__item:not(:last-child)"], "method"), "html", null, true);
        echo "
    }
    @media screen and (max-width: @const_media_mobile-v_max_width) {
        ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "list", []), "mobile-v", [], "array"), 1 => ".moto-widget-breadcrumbs__list"], "method"), "html", null, true);
        echo "
        ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item_content", []), "mobile-v", [], "array"), 1 => ".moto-widget-breadcrumbs__item-content"], "method"), "html", null, true);
        echo "
        ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item_link", []), "mobile-v", [], "array"), 1 => ".moto-widget-breadcrumbs__item-content_link"], "method"), "html", null, true);
        echo "
        ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item_current", []), "mobile-v", [], "array"), 1 => ".moto-widget-breadcrumbs__item-content_current"], "method"), "html", null, true);
        echo "
        ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "delimiter", []), "mobile-v", [], "array"), 1 => ".moto-widget-breadcrumbs__item-delimiter"], "method"), "html", null, true);
        echo "
        ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "icon", []), "mobile-v", [], "array"), "base", []), 1 => ".moto-widget-breadcrumbs__item-icon"], "method"), "html", null, true);
        echo "
        ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "icon", []), "mobile-v", [], "array"), "hover", []), 1 => ".moto-widget-breadcrumbs__item:hover .moto-widget-breadcrumbs__item-icon"], "method"), "html", null, true);
        echo "
        ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "spacing", []), "mobile-v", [], "array"), 1 => ".moto-widget-breadcrumbs__item-delimiter, .moto-widget-breadcrumbs__item:not(:last-child)"], "method"), "html", null, true);
        echo "
    }

    .moto-widget-breadcrumbs__item-icon:last-child {
        margin-right: 0;
    }

}
";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/breadcrumbs/templates/default.twig.css";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 42,  155 => 41,  151 => 40,  147 => 39,  143 => 38,  139 => 37,  135 => 36,  131 => 35,  125 => 32,  121 => 31,  117 => 30,  113 => 29,  109 => 28,  105 => 27,  101 => 26,  97 => 25,  91 => 22,  87 => 21,  83 => 20,  79 => 19,  75 => 18,  71 => 17,  67 => 16,  63 => 15,  57 => 12,  53 => 11,  49 => 10,  45 => 9,  41 => 8,  37 => 7,  33 => 6,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/breadcrumbs/templates/default.twig.css", "/home/buyersel/public_html/mt-includes/widgets/breadcrumbs/templates/default.twig.css");
    }
}
