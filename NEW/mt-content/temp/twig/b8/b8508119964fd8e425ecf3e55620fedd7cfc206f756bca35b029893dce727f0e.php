<?php

/* @websiteWidgets/row/templates/column.twig.html */
class __TwigTemplate_d5a49a1a10e62c53a0173db1938eac76cee230152d3c0458f5d47c1a7befeee6 extends Twig_Template
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
        echo "<div data-widget-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", [], "method"), "html", null, true);
        echo "\" class=\"moto-widget moto-widget-row__column moto-cell ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getCssClasses", [], "method"), "html", null, true);
        echo "\" style=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateWidgetInlineStyles", [0 => $this->getAttribute(($context["currentWidget"] ?? null), "getStylesValue", [], "method")], "method"), "html", null, true);
        echo "\" ";
        echo call_user_func_array($this->env->getFunction('arrayToAttributes')->getCallable(), [$this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getCustomAttributes", [], "method")]);
        echo " data-widget=\"row.column\" data-container=\"container\" data-spacing=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", [0 => "short"], "method"), "html", null, true);
        echo "\">
    ";
        // line 2
        if ($this->getAttribute(($context["currentWidget"] ?? null), "isBackgroundVideoSet", [], "method")) {
            // line 3
            echo "    <div class=\"moto-background-video-container moto-absolute-position__container\" data-moto-background-video=\"\">
        <video class=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "_getBackgroundVideoCssClass", [], "method"), "html", null, true);
            echo "\" muted playsinline preload=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "bgVideo", []), "preload", []), "html", null, true);
            echo "\"";
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "bgVideo", []), "loop", [])) {
                echo " loop";
            }
            echo ">
            ";
            // line 5
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "bgVideo", []), "track", []), "webm", []), "path", [])) {
                // line 6
                echo "            <source type=\"video/webm\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["Linker"] ?? null), "file", [0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "bgVideo", []), "track", []), "webm", []), "path", [])], "method"), "html", null, true);
                echo "\">
            ";
            }
            // line 8
            echo "            ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "bgVideo", []), "track", []), "mp4", []), "path", [])) {
                // line 9
                echo "            <source type=\"video/mp4\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["Linker"] ?? null), "file", [0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "bgVideo", []), "track", []), "mp4", []), "path", [])], "method"), "html", null, true);
                echo "\">
            ";
            }
            // line 11
            echo "        </video>
    </div>
    ";
        }
        // line 14
        echo "    ";
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
            // line 15
            echo "        ";
            if (($context["isServer"] ?? null)) {
                // line 16
                echo "            ";
                echo $this->env->getExtension('Moto\Twig\Extension\WidgetsExtension')->renderWidget($this->env, $context["item"]);
                echo "
        ";
            } else {
                // line 18
                echo "            ";
                $this->displayBlock('item', $context, $blocks);
                // line 19
                echo "        ";
            }
            // line 20
            echo "    ";
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
        // line 21
        echo "</div>
";
    }

    // line 18
    public function block_item($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/row/templates/column.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 18,  117 => 21,  103 => 20,  100 => 19,  97 => 18,  91 => 16,  88 => 15,  70 => 14,  65 => 11,  59 => 9,  56 => 8,  50 => 6,  48 => 5,  38 => 4,  35 => 3,  33 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/row/templates/column.twig.html", "/home/buyersel/public_html/NEW/mt-includes/widgets/row/templates/column.twig.html");
    }
}
