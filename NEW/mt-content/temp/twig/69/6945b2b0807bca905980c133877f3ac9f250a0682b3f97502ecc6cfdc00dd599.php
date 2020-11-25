<?php

/* @websiteWidgets/contact_form/templates/default.twig.css */
class __TwigTemplate_b9830e6664d98ff18b0933ea8b55bc2676fb9fd880e8b6850e0521f8669ae462 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generatePresetSelector", [0 => ".moto-widget-contact_form", 1 => $this->getAttribute(($context["item"] ?? null), "class_name", [])], "method"), "html", null, true);
        echo " {

    .moto-widget-contact_form-form {

        ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "form", []), "desktop", []), "base", [])], "method"), "html", null, true);
        echo "

        ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "input_label", []), "desktop", []), "base", []), 1 => ".moto-widget-contact_form-label"], "method"), "html", null, true);
        echo "

        ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "input_normal", []), "desktop", []), "base", []), 1 => ".moto-widget-contact_form-field"], "method"), "html", null, true);
        echo "

        ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "input_error", []), "desktop", []), "base", []), 1 => ".moto-widget-contact_form-field.ng-touched.ng-invalid"], "method"), "html", null, true);
        echo "

        ";
        // line 15
        $context["placeholderStyles"] = $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "input_placeholder", []), "desktop", []), "base", [])], "method");
        // line 16
        echo "        .moto-widget-contact_form-field::-webkit-input-placeholder { ";
        echo twig_escape_filter($this->env, ($context["placeholderStyles"] ?? null), "html", null, true);
        echo " }
        .moto-widget-contact_form-field::-moz-placeholder { ";
        // line 17
        echo twig_escape_filter($this->env, ($context["placeholderStyles"] ?? null), "html", null, true);
        echo " }
        .moto-widget-contact_form-field:-ms-input-placeholder { ";
        // line 18
        echo twig_escape_filter($this->env, ($context["placeholderStyles"] ?? null), "html", null, true);
        echo " }

        ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "input_error_message", []), "desktop", []), "base", []), 1 => ".moto-widget-contact_form-field-error"], "method"), "html", null, true);
        echo "

        ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "form_success_message", []), "desktop", []), "base", []), 1 => ".moto-widget-contact_form-success"], "method"), "html", null, true);
        echo "

        ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "form_error_message", []), "desktop", []), "base", []), 1 => ".moto-widget-contact_form-danger"], "method"), "html", null, true);
        echo "
        ";
        // line 25
        if ($this->getAttribute(($context["properties"] ?? null), "form_checkbox", [])) {
            // line 26
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "form_checkbox", []), "desktop", []), "base", []), 1 => ".moto-widget-contact_form-checkbox-icon"], "method"), "html", null, true);
            echo "
            ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "form_checkbox_error", []), "desktop", []), "base", []), 1 => ".moto-widget-contact_form-group-not-valid .moto-widget-contact_form-checkbox-icon"], "method"), "html", null, true);
            echo "
        ";
        } else {
            // line 29
            echo "            .moto-widget-contact_form-checkbox-icon {
                width:16px;
                height:16px;
                font-size:16px;
                border-color:#81868c;
                color:#55616d;
            }
            .moto-widget-contact_form-group-not-valid .moto-widget-contact_form-checkbox-icon {
                border-color:#ff0000;
            }
        ";
        }
        // line 40
        echo "    }
}
";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/contact_form/templates/default.twig.css";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 40,  93 => 29,  88 => 27,  83 => 26,  81 => 25,  77 => 24,  72 => 22,  67 => 20,  62 => 18,  58 => 17,  53 => 16,  51 => 15,  46 => 13,  41 => 11,  36 => 9,  31 => 7,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/contact_form/templates/default.twig.css", "/home/buyersel/public_html/mt-includes/widgets/contact_form/templates/default.twig.css");
    }
}
