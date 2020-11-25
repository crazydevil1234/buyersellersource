<?php

/* @websiteWidgets/tabs/templates/item.twig.html */
class __TwigTemplate_bb2e322d535e7fdd2d64b3b41a6dbb0a5c5811e62cbfed63f73eacc4244d67c5 extends Twig_Template
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
        echo "\" class=\"moto-widget moto-widget-tabs__item ";
        if ( !$this->getAttribute(($context["currentWidget"] ?? null), "isOpenedByDefault", [], "method")) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["Entertainment"] ?? null), "getCssClass", [0 => "playingDisabled"], "method"), "html", null, true);
        }
        echo "\" data-widget=\"tabs.item\">
    <div class=\"moto-widget-tabs__header moto-widget-tabs__header_mobile";
        // line 2
        if ($this->getAttribute(($context["currentWidget"] ?? null), "isOpenedByDefault", [], "method")) {
            echo " moto-widget-tabs__header_opened";
        }
        echo "\" data-tab=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", [], "method"), "html", null, true);
        echo "\">
        ";
        // line 3
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "header", []), "icon", []), "id", [])) {
            echo "<span class=\"moto-widget-tabs__header-item moto-widget-tabs__header-icon\"><span class=\"fa fa-fw fa-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "header", []), "icon", []), "id", []), "html", null, true);
            echo "\" aria-hidden=\"true\"></span></span>";
        }
        // line 4
        echo "        ";
        if (( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "header", []), "content", []) == "")) {
            echo "<";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "getParent", [], "method", false, true), "properties", [], "any", false, true), "headingTag", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "getParent", [], "method", false, true), "properties", [], "any", false, true), "headingTag", []), "span", true)) : ("span")), "html", null, true);
            echo " class=\"moto-widget-tabs__header-item moto-widget-tabs__header-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "header", []), "content", []), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "getParent", [], "method", false, true), "properties", [], "any", false, true), "headingTag", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "getParent", [], "method", false, true), "properties", [], "any", false, true), "headingTag", []), "span", true)) : ("span")), "html", null, true);
            echo ">";
        }
        // line 5
        echo "    </div>
    <div class=\"moto-widget__content-wrapper moto-widget-tabs__content-wrapper\" style=\"display: ";
        // line 6
        if ($this->getAttribute(($context["currentWidget"] ?? null), "isOpenedByDefault", [], "method")) {
            echo "block";
        } else {
            echo "none";
        }
        echo ";\">
        <div id=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", [], "method"), "html", null, true);
        echo "__content\" class=\"moto-widget__content moto-widget-tabs__content\">
            ";
        // line 8
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
            // line 9
            echo "                ";
            if (($context["isServer"] ?? null)) {
                // line 10
                echo "                    ";
                echo $this->env->getExtension('Moto\Twig\Extension\WidgetsExtension')->renderWidget($this->env, $context["item"]);
                echo "
                ";
            } else {
                // line 12
                echo "                    ";
                $this->displayBlock('item', $context, $blocks);
                // line 13
                echo "                ";
            }
            // line 14
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
        // line 15
        echo "            ";
        if (($context["isPreview"] ?? null)) {
            echo "<div class=\"moto-widget-cover\"></div>";
        }
        // line 16
        echo "        </div>
    </div>
</div>";
    }

    // line 12
    public function block_item($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/tabs/templates/item.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 12,  122 => 16,  117 => 15,  103 => 14,  100 => 13,  97 => 12,  91 => 10,  88 => 9,  71 => 8,  67 => 7,  59 => 6,  56 => 5,  45 => 4,  39 => 3,  31 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/tabs/templates/item.twig.html", "/home/buyersel/public_html/NEW/mt-includes/widgets/tabs/templates/item.twig.html");
    }
}
