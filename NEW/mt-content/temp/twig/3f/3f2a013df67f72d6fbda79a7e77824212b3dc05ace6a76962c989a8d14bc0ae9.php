<?php

/* @websiteWidgets/blog/templates/post_tags.twig.css */
class __TwigTemplate_73ffb07cb93c9448041d9f40cc31707c9c69011f98f22a67a4de1dc6b5f35964 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generatePresetSelector", [0 => ".moto-widget-blog-post_tags", 1 => $this->getAttribute(($context["item"] ?? null), "class_name", [])], "method"), "html", null, true);
        echo " {
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "general", []), "desktop", []), 1 => ".moto-widget-blog-post_tags__item-link"], "method"), "html", null, true);
        echo "
    @media screen and (max-width: @const_media_tablet_max_width) {
        ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "general", []), "tablet", []), 1 => ".moto-widget-blog-post_tags__item-link"], "method"), "html", null, true);
        echo "
    }
    @media screen and (max-width: @const_media_mobile-h_max_width) {
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "general", []), "mobile-h", [], "array"), 1 => ".moto-widget-blog-post_tags__item-link"], "method"), "html", null, true);
        echo "
    }
    @media screen and (max-width: @const_media_mobile-v_max_width) {
        ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "general", []), "mobile-v", [], "array"), 1 => ".moto-widget-blog-post_tags__item-link"], "method"), "html", null, true);
        echo "
    }

    ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "indents", []), "desktop", []), 1 => ".moto-widget-blog-post_tags__item"], "method"), "html", null, true);
        echo "
    @media screen and (max-width: @const_media_tablet_max_width) {
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "indents", []), "tablet", []), 1 => ".moto-widget-blog-post_tags__item"], "method"), "html", null, true);
        echo "
    }
    @media screen and (max-width: @const_media_mobile-h_max_width) {
        ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "indents", []), "mobile-h", [], "array"), 1 => ".moto-widget-blog-post_tags__item"], "method"), "html", null, true);
        echo "
    }
    @media screen and (max-width: @const_media_mobile-v_max_width) {
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "indents", []), "mobile-v", [], "array"), 1 => ".moto-widget-blog-post_tags__item"], "method"), "html", null, true);
        echo "
    }
    .moto-widget-blog-post_tags__title {
        margin-right: ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "title_indents", []), "desktop", []), "base", []), "margin-right", [], "array"), "html", null, true);
        echo ";
        margin-bottom: ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "indents", []), "desktop", []), "base", []), "margin-bottom", [], "array"), "html", null, true);
        echo ";
    }
}
";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/blog/templates/post_tags.twig.css";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 27,  74 => 26,  68 => 23,  62 => 20,  56 => 17,  51 => 15,  45 => 12,  39 => 9,  33 => 6,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/blog/templates/post_tags.twig.css", "/home/buyersel/public_html/mt-includes/widgets/blog/templates/post_tags.twig.css");
    }
}
