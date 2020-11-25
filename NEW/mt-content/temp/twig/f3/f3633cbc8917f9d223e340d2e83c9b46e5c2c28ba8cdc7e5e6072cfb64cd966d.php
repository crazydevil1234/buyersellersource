<?php

/* @websiteWidgets/blog/templates/category_list.twig.css */
class __TwigTemplate_63e6e74ad94f350746d721a46f48b94fea6f38b711fcd41b541fe68a6b88f70f extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generatePresetSelector", [0 => ".moto-widget-blog-category_list", 1 => $this->getAttribute(($context["item"] ?? null), "class_name", [])], "method"), "html", null, true);
        echo " {

    ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item", []), "desktop", []), 1 => ".moto-widget-blog-category_list__item"], "method"), "html", null, true);
        echo "
    @media screen and (max-width: @const_media_tablet_max_width) { ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item", []), "tablet", []), 1 => ".moto-widget-blog-category_list__item"], "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-h_max_width) { ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item", []), "mobile-h", [], "array"), 1 => ".moto-widget-blog-category_list__item"], "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-v_max_width) { ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item", []), "mobile-v", [], "array"), 1 => ".moto-widget-blog-category_list__item"], "method"), "html", null, true);
        echo " }

    ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "link", []), "desktop", []), 1 => ".moto-widget-blog-category_list__item-link"], "method"), "html", null, true);
        echo "
    @media screen and (max-width: @const_media_tablet_max_width) { ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "link", []), "tablet", []), 1 => ".moto-widget-blog-category_list__item-link"], "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-h_max_width) { ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "link", []), "mobile-h", [], "array"), 1 => ".moto-widget-blog-category_list__item-link"], "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-v_max_width) { ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "link", []), "mobile-v", [], "array"), 1 => ".moto-widget-blog-category_list__item-link"], "method"), "html", null, true);
        echo " }

    ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "text", []), "desktop", []), 1 => ".moto-widget-blog-category_list__item-text"], "method"), "html", null, true);
        echo "
    @media screen and (max-width: @const_media_tablet_max_width) { ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "text", []), "tablet", []), 1 => ".moto-widget-blog-category_list__item-text"], "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-h_max_width) { ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "text", []), "mobile-h", [], "array"), 1 => ".moto-widget-blog-category_list__item-text"], "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-v_max_width) { ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "text", []), "mobile-v", [], "array"), 1 => ".moto-widget-blog-category_list__item-text"], "method"), "html", null, true);
        echo " }

    .moto-widget-blog-category_list__item-link:hover {
        ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "icon", []), "desktop", []), "hover", []), 1 => ".moto-widget-blog-category_list__item-icon"], "method"), "html", null, true);
        echo "
    }
    .moto-widget-blog-category_list__item-icon {
        ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "icon", []), "desktop", []), "base", [])], "method"), "html", null, true);
        echo "
        @media screen and (max-width: @const_media_tablet_max_width) { ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "icon", []), "tablet", []), "base", [])], "method"), "html", null, true);
        echo " }
        @media screen and (max-width: @const_media_mobile-h_max_width) { ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "icon", []), "mobile-h", [], "array"), "base", [])], "method"), "html", null, true);
        echo " }
        @media screen and (max-width: @const_media_mobile-v_max_width) { ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "icon", []), "mobile-v", [], "array"), "base", [])], "method"), "html", null, true);
        echo " }
    }
    .moto-widget-blog-category_list__item-count {
        ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "posts_count", []), "desktop", [])], "method"), "html", null, true);
        echo "
        @media screen and (max-width: @const_media_tablet_max_width) { ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "posts_count", []), "tablet", [])], "method"), "html", null, true);
        echo " }
        @media screen and (max-width: @const_media_mobile-h_max_width) { ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "posts_count", []), "mobile-h", [], "array")], "method"), "html", null, true);
        echo " }
        @media screen and (max-width: @const_media_mobile-v_max_width) { ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "posts_count", []), "mobile-v", [], "array")], "method"), "html", null, true);
        echo " }
    }
}
";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/blog/templates/category_list.twig.css";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  113 => 32,  109 => 31,  105 => 30,  99 => 27,  95 => 26,  91 => 25,  87 => 24,  81 => 21,  75 => 18,  71 => 17,  67 => 16,  63 => 15,  58 => 13,  54 => 12,  50 => 11,  46 => 10,  41 => 8,  37 => 7,  33 => 6,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/blog/templates/category_list.twig.css", "/home/buyersel/public_html/mt-includes/widgets/blog/templates/category_list.twig.css");
    }
}
