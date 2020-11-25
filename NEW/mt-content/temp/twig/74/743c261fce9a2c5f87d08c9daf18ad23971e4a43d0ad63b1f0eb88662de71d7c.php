<?php

/* @websiteWidgets/countdown/templates/default.twig.css */
class __TwigTemplate_9a05d5263f9b557fce239df7306c1768ece40a8faee52587056010b8573be29f extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generatePresetSelector", [0 => ".moto-widget-countdown", 1 => $this->getAttribute(($context["item"] ?? null), "class_name", [])], "method"), "html", null, true);
        echo " {

    ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "digits", []), "desktop", []), 1 => ".countdown-item-amount"], "method"), "html", null, true);
        echo "
    ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "text", []), "desktop", []), 1 => ".countdown-item-unit"], "method"), "html", null, true);
        echo "
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "delimiter", []), "desktop", []), 1 => ".countdown-item-delimiter"], "method"), "html", null, true);
        echo "
    .countdown-item-block {
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "general", []), "desktop", [])], "method"), "html", null, true);
        echo "
        ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "border", []), "desktop", [])], "method"), "html", null, true);
        echo "
    }

    @media screen and (max-width: @const_media_tablet_max_width) {
        ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "digits", []), "tablet", []), 1 => ".countdown-item-amount"], "method"), "html", null, true);
        echo "
        ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "text", []), "tablet", []), 1 => ".countdown-item-unit"], "method"), "html", null, true);
        echo "
        ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "delimiter", []), "tablet", []), 1 => ".countdown-item-delimiter"], "method"), "html", null, true);
        echo "
        .countdown-item-block {
            ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "general", []), "tablet", [])], "method"), "html", null, true);
        echo "
            ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "border", []), "tablet", [])], "method"), "html", null, true);
        echo "
        }
    }

    @media screen and (max-width: @const_media_mobile-h_max_width) {
        ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "digits", []), "mobile-h", [], "array"), 1 => ".countdown-item-amount"], "method"), "html", null, true);
        echo "
        ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "text", []), "mobile-h", [], "array"), 1 => ".countdown-item-unit"], "method"), "html", null, true);
        echo "
        ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "delimiter", []), "mobile-h", [], "array"), 1 => ".countdown-item-delimiter"], "method"), "html", null, true);
        echo "
        .countdown-item-block {
            ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "general", []), "mobile-h", [], "array")], "method"), "html", null, true);
        echo "
            ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "border", []), "mobile-h", [], "array")], "method"), "html", null, true);
        echo "
        }
    }

    @media screen and (max-width: @const_media_mobile-v_max_width) {
        ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "digits", []), "mobile-v", [], "array"), 1 => ".countdown-item-amount"], "method"), "html", null, true);
        echo "
        ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "text", []), "mobile-v", [], "array"), 1 => ".countdown-item-unit"], "method"), "html", null, true);
        echo "
        ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "delimiter", []), "mobile-v", [], "array"), 1 => ".countdown-item-delimiter"], "method"), "html", null, true);
        echo "
        .countdown-item-block {
            ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "general", []), "mobile-v", [], "array")], "method"), "html", null, true);
        echo "
            ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "border", []), "mobile-v", [], "array")], "method"), "html", null, true);
        echo "
        }
    }
}
";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/countdown/templates/default.twig.css";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 39,  116 => 38,  111 => 36,  107 => 35,  103 => 34,  95 => 29,  91 => 28,  86 => 26,  82 => 25,  78 => 24,  70 => 19,  66 => 18,  61 => 16,  57 => 15,  53 => 14,  46 => 10,  42 => 9,  37 => 7,  33 => 6,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/countdown/templates/default.twig.css", "/home/buyersel/public_html/mt-includes/widgets/countdown/templates/default.twig.css");
    }
}
