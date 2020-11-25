<?php

/* @websiteWidgets/audio_player/templates/default.twig.css */
class __TwigTemplate_7204243af6b97af9bf851d1e66c14114affeed2529ca8b6deb05d904f845c2e0 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generatePresetSelector", [0 => ".moto-media-player", 1 => $this->getAttribute(($context["item"] ?? null), "class_name", [])], "method"), "html", null, true);
        echo "{

    ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "buttons_active", []), "desktop", []), 1 => ".mejs-inner .mejs-controls .mejs-button.mejs-button_active button, .mejs-inner .mejs-controls .mejs-button.mejs-button_active.mejs-moto-download-button a"], "method"), "html", null, true);
        echo "

    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "buttons_normal", []), "desktop", []), 1 => ".mejs-controls .mejs-button button, .mejs-controls .mejs-volume-button button, .mejs-overlay-button, .mejs-controls .mejs-button.mejs-moto-download-button a"], "method"), "html", null, true);
        echo "

    .mejs-controls {

        ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "widget_container", []), "desktop", []), "base", [])], "method"), "html", null, true);
        echo "

        ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "progress_bar", []), "desktop", []), "base", []), 1 => ".mejs-time-current, .mejs-time-handle"], "method"), "html", null, true);
        echo "

        ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "volume_bar", []), "desktop", []), "base", []), 1 => ".mejs-horizontal-volume-current, .mejs-horizontal-volume-handle"], "method"), "html", null, true);
        echo "

        .mejs-time-loaded {
            background-color: fadeout(";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "progress_bar", []), "desktop", []), "base", []), "background-color", [], "array"), "html", null, true);
        echo ", 75%);
        }
        .mejs-time-total {
            background-color: fadeout(";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "progress_bar", []), "desktop", []), "base", []), "background-color", [], "array"), "html", null, true);
        echo ", 75%);
        }
        .mejs-time-handle {
            box-shadow: 0px 0px 4px 0px ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "progress_bar", []), "desktop", []), "base", []), "background-color", [], "array"), "html", null, true);
        echo ";
        }
        .mejs-horizontal-volume-total {
            background-color: fadeout(";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "volume_bar", []), "desktop", []), "base", []), "background-color", [], "array"), "html", null, true);
        echo ", 50%);
        }
        .mejs-horizontal-volume-handle {
            box-shadow: 0px 0px 4px 0px ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "volume_bar", []), "desktop", []), "base", []), "background-color", [], "array"), "html", null, true);
        echo ";
        }
    }
}
";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/audio_player/templates/default.twig.css";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 30,  75 => 27,  69 => 24,  63 => 21,  57 => 18,  51 => 15,  46 => 13,  41 => 11,  34 => 7,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/audio_player/templates/default.twig.css", "/home/buyersel/public_html/mt-includes/widgets/audio_player/templates/default.twig.css");
    }
}
