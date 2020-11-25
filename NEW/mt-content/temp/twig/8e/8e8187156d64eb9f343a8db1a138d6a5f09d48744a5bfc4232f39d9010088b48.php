<?php

/* @websiteWidgets/content_slider/templates/default.twig.css */
class __TwigTemplate_2d038af1cb2faa7c9eb002b9e30f1a65c1b9e1fc54bcd1fee8b94bd1efbc5254 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generatePresetSelector", [0 => ".moto-widget-content_slider", 1 => $this->getAttribute(($context["item"] ?? null), "class_name", [])], "method"), "html", null, true);
        echo " {
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "arrows", []), "desktop", []), "base", []), 1 => ".bx-prev, .bx-next"], "method"), "html", null, true);
        echo "
    .bx-prev:hover, .bx-next:hover {
        ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "arrows", []), "desktop", []), "hover", [])], "method"), "html", null, true);
        echo "
    }
    @media screen and (max-width: @const_media_tablet_max_width) { ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "arrows", []), "tablet", []), "base", []), 1 => ".bx-prev, .bx-next"], "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-h_max_width) { ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "arrows", []), "mobile-h", [], "array"), "base", []), 1 => ".bx-prev, .bx-next"], "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-v_max_width) { ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "arrows", []), "mobile-v", [], "array"), "base", []), 1 => ".bx-prev, .bx-next"], "method"), "html", null, true);
        echo " }

    ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "pagination", []), "desktop", []), "base", []), 1 => ".bx-pager-link"], "method"), "html", null, true);
        echo "
    @media screen and (max-width: @const_media_tablet_max_width) { ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "pagination", []), "tablet", []), "base", []), 1 => ".bx-pager-link"], "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-h_max_width) { ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "pagination", []), "mobile-h", [], "array"), "base", []), 1 => ".bx-pager-link"], "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-v_max_width) { ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "pagination", []), "mobile-v", [], "array"), "base", []), 1 => ".bx-pager-link"], "method"), "html", null, true);
        echo " }

    ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "pagination_wrapper", []), "desktop", []), 1 => ".bx-pager"], "method"), "html", null, true);
        echo "
    @media screen and (max-width: @const_media_tablet_max_width) { ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "pagination_wrapper", []), "tablet", []), 1 => ".bx-pager"], "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-h_max_width) { ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "pagination_wrapper", []), "mobile-h", [], "array"), 1 => ".bx-pager"], "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-v_max_width) { ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "pagination_wrapper", []), "mobile-v", [], "array"), 1 => ".bx-pager"], "method"), "html", null, true);
        echo " }

    ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "pagination_spacings", []), "desktop", []), 1 => ".bx-pager-item:not(:last-child)"], "method"), "html", null, true);
        echo "
    @media screen and (max-width: @const_media_tablet_max_width) { ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "pagination_spacings", []), "tablet", []), 1 => ".bx-pager-item:not(:last-child)"], "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-h_max_width) { ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "pagination_spacings", []), "mobile-h", [], "array"), 1 => ".bx-pager-item:not(:last-child)"], "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-v_max_width) { ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "pagination_spacings", []), "mobile-v", [], "array"), 1 => ".bx-pager-item:not(:last-child)"], "method"), "html", null, true);
        echo " }

    ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "pagination", []), "desktop", []), 1 => ".bx-pager-link"], "method"), "html", null, true);
        echo "
    @media screen and (max-width: @const_media_tablet_max_width) { ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "pagination", []), "tablet", []), 1 => ".bx-pager-link"], "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-h_max_width) { ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "pagination", []), "mobile-h", [], "array"), 1 => ".bx-pager-link"], "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-v_max_width) { ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "pagination", []), "mobile-v", [], "array"), 1 => ".bx-pager-link"], "method"), "html", null, true);
        echo " }

    ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "pagination_selected", []), "desktop", []), 1 => ".bx-pager-link.active"], "method"), "html", null, true);
        echo "
    ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "arrow_prev", []), "desktop", []), 1 => ".bx-prev"], "method"), "html", null, true);
        echo "
    @media screen and (max-width: @const_media_tablet_max_width) { ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "arrow_prev", []), "tablet", []), 1 => ".bx-prev"], "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-h_max_width) { ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "arrow_prev", []), "mobile-h", [], "array"), 1 => ".bx-prev"], "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-v_max_width) { ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "arrow_prev", []), "mobile-v", [], "array"), 1 => ".bx-prev"], "method"), "html", null, true);
        echo " }

    ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "arrow_next", []), "desktop", []), 1 => ".bx-next"], "method"), "html", null, true);
        echo "
    @media screen and (max-width: @const_media_tablet_max_width) { ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "arrow_next", []), "tablet", []), 1 => ".bx-next"], "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-h_max_width) { ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "arrow_next", []), "mobile-h", [], "array"), 1 => ".bx-next"], "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-v_max_width) { ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "arrow_next", []), "mobile-v", [], "array"), 1 => ".bx-next"], "method"), "html", null, true);
        echo " }

    ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "auto_wrapper", []), "desktop", []), 1 => ".bx-controls-auto"], "method"), "html", null, true);
        echo "
    @media screen and (max-width: @const_media_tablet_max_width) { ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "auto_wrapper", []), "tablet", []), 1 => ".bx-controls-auto"], "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-h_max_width) { ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "auto_wrapper", []), "mobile-h", [], "array"), 1 => ".bx-controls-auto"], "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-v_max_width) { ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "auto_wrapper", []), "mobile-v", [], "array"), 1 => ".bx-controls-auto"], "method"), "html", null, true);
        echo " }

    ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "auto", []), "desktop", []), 1 => ".bx-start, .bx-stop"], "method"), "html", null, true);
        echo "
    @media screen and (max-width: @const_media_tablet_max_width) { ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "auto", []), "tablet", []), 1 => ".bx-start, .bx-stop"], "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-h_max_width) { ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "auto", []), "mobile-h", [], "array"), 1 => ".bx-start, .bx-stop"], "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-v_max_width) { ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "auto", []), "mobile-v", [], "array"), 1 => ".bx-start, .bx-stop"], "method"), "html", null, true);
        echo " }

    ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "auto_start", []), "desktop", []), 1 => ".bx-start"], "method"), "html", null, true);
        echo "
    @media screen and (max-width: @const_media_tablet_max_width) { ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "auto_start", []), "tablet", []), 1 => ".bx-start"], "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-h_max_width) { ";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "auto_start", []), "mobile-h", [], "array"), 1 => ".bx-start"], "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-v_max_width) { ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "auto_start", []), "mobile-v", [], "array"), 1 => ".bx-start"], "method"), "html", null, true);
        echo " }

    ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "auto_stop", []), "desktop", []), 1 => ".bx-stop"], "method"), "html", null, true);
        echo "
    @media screen and (max-width: @const_media_tablet_max_width) { ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "auto_stop", []), "tablet", []), 1 => ".bx-stop"], "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-h_max_width) { ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "auto_stop", []), "mobile-h", [], "array"), 1 => ".bx-stop"], "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-v_max_width) { ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "auto_stop", []), "mobile-v", [], "array"), 1 => ".bx-stop"], "method"), "html", null, true);
        echo " }

    .moto-widget-loader__indicator {
        border-top-color: fade(";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "preloader", []), "desktop", []), "base", []), "color", []), "html", null, true);
        echo ", 20%);
        border-right-color: fade(";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "preloader", []), "desktop", []), "base", []), "color", []), "html", null, true);
        echo ", 20%);
        border-bottom-color: fade(";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "preloader", []), "desktop", []), "base", []), "color", []), "html", null, true);
        echo ", 20%);
        border-left-color: ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "preloader", []), "desktop", []), "base", []), "color", []), "html", null, true);
        echo ";
    }
}
";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/content_slider/templates/default.twig.css";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 67,  234 => 66,  230 => 65,  226 => 64,  220 => 61,  216 => 60,  212 => 59,  208 => 58,  203 => 56,  199 => 55,  195 => 54,  191 => 53,  186 => 51,  182 => 50,  178 => 49,  174 => 48,  169 => 46,  165 => 45,  161 => 44,  157 => 43,  152 => 41,  148 => 40,  144 => 39,  140 => 38,  135 => 36,  131 => 35,  127 => 34,  123 => 33,  119 => 32,  114 => 30,  110 => 29,  106 => 28,  102 => 27,  97 => 25,  93 => 24,  89 => 23,  85 => 22,  80 => 20,  76 => 19,  72 => 18,  68 => 17,  63 => 15,  59 => 14,  55 => 13,  51 => 12,  46 => 10,  42 => 9,  38 => 8,  33 => 6,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/content_slider/templates/default.twig.css", "/home/buyersel/public_html/mt-includes/widgets/content_slider/templates/default.twig.css");
    }
}
