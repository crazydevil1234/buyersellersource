<?php

/* @websiteWidgets/row/templates/default.twig.html */
class __TwigTemplate_3e348d86b6d8912da8244e556c9e2161975069506a57650406973b5117609fec extends Twig_Template
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
        echo "\" class=\"moto-widget moto-widget-row";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getCssClasses", [], "method"), "html", null, true);
        if ($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "bgFixed", [])) {
            echo " moto-background-fixed";
        }
        if ($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "bgParallaxed", [])) {
            echo " moto-parallax";
        }
        echo "\" data-grid-type=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["currentWidget"] ?? null), "getGridType", [], "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["currentWidget"] ?? null), "getGridType", [], "method"), "sm")) : ("sm")), "html", null, true);
        echo "\" data-widget=\"row\" data-visible-on=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getVisibleOn", [0 => "short"], "method"), "html", null, true);
        echo "\" data-spacing=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", [0 => "short"], "method"), "html", null, true);
        echo "\" style=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateWidgetInlineStyles", [0 => $this->getAttribute(($context["currentWidget"] ?? null), "getStylesValue", [], "method")], "method"), "html", null, true);
        echo "\" ";
        echo call_user_func_array($this->env->getFunction('arrayToAttributes')->getCallable(), [$this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getCustomAttributes", [], "method")]);
        echo ">
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
                echo "                <source type=\"video/webm\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["Linker"] ?? null), "file", [0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "bgVideo", []), "track", []), "webm", []), "path", [])], "method"), "html", null, true);
                echo "\">
            ";
            }
            // line 8
            echo "            ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "bgVideo", []), "track", []), "mp4", []), "path", [])) {
                // line 9
                echo "                <source type=\"video/mp4\" src=\"";
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
        if ($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "anchor", [])) {
            echo "<a class=\"moto-anchor\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "anchor", []), "html", null, true);
            echo "\"></a>";
        }
        // line 15
        echo "    <div class=\"container-fluid\">
        <div class=\"row";
        // line 16
        if ($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "viewportHeight", [])) {
            echo " moto-min-height_100vh";
        }
        echo "\" data-container=\"container\">
            ";
        // line 17
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
            // line 18
            echo "                ";
            if (($context["isServer"] ?? null)) {
                // line 19
                echo "                    ";
                echo $this->env->getExtension('Moto\Twig\Extension\WidgetsExtension')->renderWidget($this->env, $context["item"]);
                echo "
                ";
            } else {
                // line 21
                echo "                    ";
                $this->displayBlock('item', $context, $blocks);
                // line 22
                echo "                ";
            }
            // line 23
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
        // line 24
        echo "        </div>
    </div>
</div>";
    }

    // line 21
    public function block_item($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/row/templates/default.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 21,  142 => 24,  128 => 23,  125 => 22,  122 => 21,  116 => 19,  113 => 18,  96 => 17,  90 => 16,  87 => 15,  80 => 14,  75 => 11,  69 => 9,  66 => 8,  60 => 6,  58 => 5,  48 => 4,  45 => 3,  43 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/row/templates/default.twig.html", "/home/buyersel/public_html/NEW/mt-includes/widgets/row/templates/default.twig.html");
    }
}
