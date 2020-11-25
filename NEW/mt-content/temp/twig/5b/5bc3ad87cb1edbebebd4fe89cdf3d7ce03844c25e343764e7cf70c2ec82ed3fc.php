<?php

/* @websiteWidgets/tabs/templates/default.twig.html */
class __TwigTemplate_6a9ccd78d9b739dc3a73c20b113648a2f35fa9773eb019a7cea29437fba8bc1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'item' => [$this, 'block_item'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", [], "method"), "html", null, true);
        echo "\" class=\"moto-widget moto-widget_interactive moto-widget-tabs ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getCssClasses", [], "method"), "html", null, true);
        echo " moto-disabling_row-fixed set-row-gutter-0\" data-widget=\"tabs\" data-preset=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "preset", []), "html", null, true);
        echo "\">
    <div class=\"moto-widget-tabs__wrapper\">
        <div class=\"moto-widget-tabs__headers-wrapper ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getWrapperClasses", [], "method"), "html", null, true);
        echo "\" style=\"width: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getWrapperWidth", [], "method"), "html", null, true);
        echo ";\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["currentWidget"] ?? null), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "            <div class=\"moto-widget-tabs__header moto-widget-tabs__header_desktop";
            if ($this->getAttribute($context["item"], "isOpenedByDefault", [], "method")) {
                echo " moto-widget-tabs__header_opened";
            }
            echo "\" data-tab=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "getWidgetId", [], "method"), "html", null, true);
            echo "\">
                ";
            // line 6
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "properties", []), "header", []), "icon", []), "id", [])) {
                echo "<span class=\"moto-widget-tabs__header-item moto-widget-tabs__header-icon\"><span class=\"fa fa-fw fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "properties", []), "header", []), "icon", []), "id", []), "html", null, true);
                echo "\" aria-hidden=\"true\"></span></span>";
            }
            // line 7
            echo "                ";
            if (( !$this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "properties", []), "header", []), "content", []) == "")) {
                echo "<";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", [], "any", false, true), "headingTag", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", [], "any", false, true), "headingTag", []), "span", true)) : ("span")), "html", null, true);
                echo " class=\"moto-widget-tabs__header-item moto-widget-tabs__header-title\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "properties", []), "header", []), "content", []), "html", null, true);
                echo "</";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", [], "any", false, true), "headingTag", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", [], "any", false, true), "headingTag", []), "span", true)) : ("span")), "html", null, true);
                echo ">";
            }
            // line 8
            echo "            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        </div>
        <div id=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", [], "method"), "html", null, true);
        echo "__content\" class=\"moto-widget-tabs__items-wrapper\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["currentWidget"] ?? null), "children", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "                ";
            if (($context["isServer"] ?? null)) {
                // line 14
                echo "                    ";
                echo $this->env->getExtension('Moto\Twig\Extension\WidgetsExtension')->renderWidget($this->env, $context["item"]);
                echo "
                ";
            } else {
                // line 16
                echo "                    ";
                $this->displayBlock('item', $context, $blocks);
                // line 17
                echo "                ";
            }
            // line 18
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </div>
    </div>
    ";
        // line 21
        if (($context["isPreview"] ?? null)) {
            echo "<div class=\"moto-widget-empty\"></div>";
        }
        // line 22
        echo "</div>";
    }

    // line 16
    public function block_item($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/tabs/templates/default.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 16,  134 => 22,  130 => 21,  126 => 19,  112 => 18,  109 => 17,  106 => 16,  100 => 14,  97 => 13,  80 => 12,  76 => 11,  73 => 10,  66 => 8,  55 => 7,  49 => 6,  40 => 5,  36 => 4,  30 => 3,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/tabs/templates/default.twig.html", "/home/buyersel/public_html/mt-includes/widgets/tabs/templates/default.twig.html");
    }
}
