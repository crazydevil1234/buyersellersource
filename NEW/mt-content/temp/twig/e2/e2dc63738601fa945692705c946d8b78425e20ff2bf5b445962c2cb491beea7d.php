<?php

/* @websiteWidgets/accordion/templates/item.twig.html */
class __TwigTemplate_fa61e175189cd3c936820610cbad0fdcaa0b0eff1004e42cd91476faa834ef73 extends Twig_Template
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
        echo "\" data-parent-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "getParent", [], "method"), "getWidgetId", [], "method"), "html", null, true);
        echo "\" class=\"moto-widget moto-widget-accordion__item moto-widget_with-content-editor moto-widget-accordion__item_collapse-icon-";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "getParent", [], "method"), "properties", []), "showCollapseIcon", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "getParent", [], "method"), "properties", []), "collapseIconAlign", []), "html", null, true);
        } else {
            echo "disabled";
        }
        echo " ";
        if ($this->getAttribute(($context["currentWidget"] ?? null), "isOpenedByDefault", [], "method")) {
            echo "moto-widget-accordion__item_open";
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Entertainment"] ?? null), "getCssClass", [0 => "playingDisabled"], "method"), "html", null, true);
        }
        echo "\" data-widget=\"accordion.item\">
    <div class=\"moto-widget-accordion__header\" data-widget-id=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", [], "method"), "html", null, true);
        echo "\">
        ";
        // line 3
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "header", []), "icon", []), "unicode", [])) {
            echo "<span class=\"moto-widget-accordion__header-item moto-widget-accordion__header-icon\"><span class=\"fa fa-fw\" aria-hidden=\"true\">&#x";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "header", []), "icon", []), "unicode", []), "html", null, true);
            echo ";</span></span>";
        }
        // line 4
        echo "        <";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "getParent", [], "method", false, true), "properties", [], "any", false, true), "headingTag", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "getParent", [], "method", false, true), "properties", [], "any", false, true), "headingTag", []), "span", true)) : ("span")), "html", null, true);
        echo " class=\"moto-widget-accordion__header-item moto-widget-accordion__header-title\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "header", []), "content", []), "html", null, true);
        echo "</";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "getParent", [], "method", false, true), "properties", [], "any", false, true), "headingTag", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "getParent", [], "method", false, true), "properties", [], "any", false, true), "headingTag", []), "span", true)) : ("span")), "html", null, true);
        echo ">
        ";
        // line 5
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "getParent", [], "method"), "properties", []), "showCollapseIcon", [])) {
            echo "<span class=\"moto-widget-accordion__header-item moto-widget-accordion__collapse-icon fa fa-fw\" aria-hidden=\"true\"></span>";
        }
        // line 6
        echo "    </div>
    <div class=\"moto-widget__content-wrapper moto-widget-accordion__content-wrapper\" style=\"display: ";
        // line 7
        if ($this->getAttribute(($context["currentWidget"] ?? null), "isOpenedByDefault", [], "method")) {
            echo "block";
        } else {
            echo "none";
        }
        echo ";\">
        <div id=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", [], "method"), "html", null, true);
        echo "__content\" class=\"moto-widget__content moto-widget-accordion__content ";
        if ( !$this->getAttribute(($context["currentWidget"] ?? null), "isOpenedByDefault", [], "method")) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Entertainment"] ?? null), "getCssClass", [0 => [0 => "animationDisabled", 1 => "animationIgnoring"]], "method"), "html", null, true);
        }
        echo "\">
            ";
        // line 9
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
            // line 10
            echo "                ";
            if (($context["isServer"] ?? null)) {
                // line 11
                echo "                    ";
                echo $this->env->getExtension('Moto\Twig\Extension\WidgetsExtension')->renderWidget($this->env, $context["item"]);
                echo "
                ";
            } else {
                // line 13
                echo "                    ";
                $this->displayBlock('item', $context, $blocks);
                // line 14
                echo "                ";
            }
            // line 15
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
        // line 16
        echo "            ";
        if (($context["isPreview"] ?? null)) {
            echo "<div class=\"moto-widget-cover\"></div>";
        }
        // line 17
        echo "        </div>
    </div>
</div>";
    }

    // line 13
    public function block_item($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/accordion/templates/item.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 13,  132 => 17,  127 => 16,  113 => 15,  110 => 14,  107 => 13,  101 => 11,  98 => 10,  81 => 9,  73 => 8,  65 => 7,  62 => 6,  58 => 5,  49 => 4,  43 => 3,  39 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/accordion/templates/item.twig.html", "/home/buyersel/public_html/NEW/mt-includes/widgets/accordion/templates/item.twig.html");
    }
}
