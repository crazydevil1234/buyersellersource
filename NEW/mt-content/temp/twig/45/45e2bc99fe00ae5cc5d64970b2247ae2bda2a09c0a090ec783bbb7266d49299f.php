<?php

/* @websiteWidgets/accordion/templates/default.twig.html */
class __TwigTemplate_517a9e588b48142ddc916cdd79948eeb8cd04ed8c1ff1531fe78ba523e8aab61 extends Twig_Template
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
        echo "\" class=\"moto-widget moto-widget-accordion moto-widget_interactive moto-preset-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "preset", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getAlignClass", [], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", [0 => "classes"], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getVisibleOn", [0 => "classes"], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getAnimationClasses", [], "method"), "html", null, true);
        echo " moto-disabling_row-fixed set-row-gutter-0\" data-widget=\"accordion\" data-preset=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "preset", []), "html", null, true);
        echo "\" ";
        if ($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "closeOthers", [])) {
            echo " data-close-others";
        }
        echo ">
    <div id=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", [], "method"), "html", null, true);
        echo "__content\" class=\"moto-widget-accordion__wrapper\">
        ";
        // line 3
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
            // line 4
            echo "            ";
            if (($context["isServer"] ?? null)) {
                // line 5
                echo "                ";
                echo $this->env->getExtension('Moto\Twig\Extension\WidgetsExtension')->renderWidget($this->env, $context["item"]);
                echo "
            ";
            } else {
                // line 7
                echo "                ";
                $this->displayBlock('item', $context, $blocks);
                // line 8
                echo "            ";
            }
            // line 9
            echo "        ";
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
        // line 10
        echo "    </div>
    ";
        // line 11
        if (($context["isPreview"] ?? null)) {
            echo "<div class=\"moto-widget-empty\"></div>";
        }
        // line 12
        echo "</div>";
    }

    // line 7
    public function block_item($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/accordion/templates/default.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 7,  98 => 12,  94 => 11,  91 => 10,  77 => 9,  74 => 8,  71 => 7,  65 => 5,  62 => 4,  45 => 3,  41 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/accordion/templates/default.twig.html", "/home/buyersel/public_html/NEW/mt-includes/widgets/accordion/templates/default.twig.html");
    }
}
