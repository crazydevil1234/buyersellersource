<?php

/* @websiteWidgets/completion_bars/templates/default.twig.html */
class __TwigTemplate_8eb673f9cf54afd0e1a8e8370d965aaeab1a1d4b389ff5db2a48b9a5c2571462 extends Twig_Template
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
        echo "\" class=\"moto-widget moto-widget-completion_bars moto-preset-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "preset", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getAlignClass", [], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", [0 => "classes"], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getVisibleOn", [0 => "classes"], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getAnimationClasses", [], "method"), "html", null, true);
        echo " ";
        if ($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "enableProgressAnimation", [])) {
            echo "moto-before-in-viewport";
        }
        echo "\" data-widget=\"completion_bars\">
    ";
        // line 2
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "items", [])) > 0)) {
            // line 3
            echo "        <div class=\"moto-widget-completion_bars__items";
            if ($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "enableForegroundRadius", [])) {
                echo " moto-widget-completion_bars__rounded-foreground";
            }
            echo "\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "items", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 5
                echo "            <div class=\"moto-widget-completion_bars__item ";
                if (($this->getAttribute($context["item"], "progress", []) >= 100)) {
                    echo "moto-widget-completion_bars__item_completed";
                } elseif (($this->getAttribute($context["item"], "progress", []) <= 0)) {
                    echo "moto-widget-completion_bars__item_zero";
                }
                echo "\">
                <div class=\"moto-widget-completion_bars__item-wrapper\">
                    <div class=\"moto-widget-completion_bars__header";
                // line 7
                if ((($this->getAttribute($context["item"], "customProgressLabelEnabled", []) && (twig_length_filter($this->env, $this->getAttribute($context["item"], "customProgressLabel", [])) == 0)) || (twig_length_filter($this->env, $this->getAttribute($context["item"], "label", [])) == 0))) {
                    echo " moto-widget-completion_bars__header_no-margin";
                }
                echo "\">
                        <span class=\"moto-widget-completion_bars__header-item moto-widget-completion_bars__header-label ";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "labelTextStyle", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", []), "html", null, true);
                echo "</span>
                        <span class=\"moto-widget-completion_bars__header-item moto-widget-completion_bars__header-progress ";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "progressTextStyle", []), "html", null, true);
                echo "\">
                            ";
                // line 10
                if ($this->getAttribute($context["item"], "customProgressLabelEnabled", [])) {
                    // line 11
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "customProgressLabel", []), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 13
                    echo "                                ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "progress", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "progress", []), 0)) : (0)), "html", null, true);
                    echo "%
                            ";
                }
                // line 15
                echo "                        </span>
                    </div>
                    <div class=\"moto-widget-completion_bars__stripe\">
                        <div class=\"moto-widget-completion_bars__stripe-background ";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getBackgroundColorClass", [0 => $this->getAttribute($context["item"], "stripeBackground", [])], "method"), "html", null, true);
                echo "\" style=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getCssInlineValue", [0 => "height", 1 => $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "stripeHeight", []), 2 => "px"], "method"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getCssInlineValue", [0 => "border-radius", 1 => $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "stripeRadius", [])], "method"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getCssInlineValue", [0 => "background-color", 1 => $this->getAttribute($context["item"], "stripeBackground", [])], "method"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getCssInlineValue", [0 => "border-width", 1 => $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "stripeBorderWidth", []), 2 => "px"], "method"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getCssInlineValue", [0 => "border-color", 1 => $this->getAttribute($context["item"], "stripeBorderColor", [])], "method"), "html", null, true);
                echo "\">
                            <div class=\"moto-widget-completion_bars__stripe-foreground ";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getBackgroundColorClass", [0 => $this->getAttribute($context["item"], "stripeForeground", [])], "method"), "html", null, true);
                echo "\" style=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getCssInlineValue", [0 => "width", 1 => $this->getAttribute($context["item"], "progress", []), 2 => "%"], "method"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getCssInlineValue", [0 => "background-color", 1 => $this->getAttribute($context["item"], "stripeForeground", [])], "method"), "html", null, true);
                echo "\"></div>
                        </div>
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        </div>
    ";
        } else {
            // line 27
            echo "        <div class=\"moto-widget-empty\"></div>
    ";
        }
        // line 29
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/completion_bars/templates/default.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 29,  125 => 27,  121 => 25,  106 => 19,  96 => 18,  91 => 15,  85 => 13,  79 => 11,  77 => 10,  73 => 9,  67 => 8,  61 => 7,  51 => 5,  47 => 4,  40 => 3,  38 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/completion_bars/templates/default.twig.html", "/home/buyersel/public_html/mt-includes/widgets/completion_bars/templates/default.twig.html");
    }
}
