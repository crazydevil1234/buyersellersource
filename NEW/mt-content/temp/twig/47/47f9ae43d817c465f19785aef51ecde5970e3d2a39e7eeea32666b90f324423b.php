<?php

/* @websiteWidgets/menu/templates/default.twig.html */
class __TwigTemplate_1a39d572c5f86383457737a27a669bd39c4815b8b56fe3749ac827dd7d0cfd2b extends Twig_Template
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
        // line 14
        echo "<div data-widget-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", [], "method"), "html", null, true);
        echo "\" class=\"moto-widget moto-widget-menu moto-preset-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "preset", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getAlignClass", [], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", [0 => "classes"], "method"), "html", null, true);
        echo "\" data-preset=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "preset", []), "html", null, true);
        echo "\"";
        if (($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "stickyPreset", []) && ($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "stickyPreset", []) != $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "preset", [])))) {
            echo " data-sticky-preset=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "stickyPreset", []), "html", null, true);
            echo "\"";
        }
        echo " data-widget=\"menu\"";
        if (($context["isPreview"] ?? null)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "printLoadItemsFlag", [], "method"), "html", null, true);
        }
        echo ">
    ";
        // line 15
        if ((twig_length_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "items", [])) > 0)) {
            // line 16
            echo "        <a href=\"#\" class=\"moto-widget-menu-toggle-btn\"><i class=\"moto-widget-menu-toggle-btn-icon fa fa-bars\"></i></a>
        <ul class=\"moto-widget-menu-list moto-widget-menu-list_horizontal\">
            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["currentWidget"] ?? null), "items", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo $this->getAttribute($this, "MenuItemMacros", [0 => $context["item"], 1 => 1], "method");
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        </ul>
    ";
        } else {
            // line 21
            echo "        <div class=\"moto-widget-empty\"></div>
    ";
        }
        // line 23
        echo "</div>";
    }

    // line 1
    public function getSubMenuMacros($__items__ = null, $__level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "level" => $__level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    <ul class=\"moto-widget-menu-sublist\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 4
                echo "            ";
                echo $this->getAttribute($this, "MenuItemMacros", [0 => $context["item"], 1 => ($context["level"] ?? null)], "method");
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "    </ul>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 8
    public function getMenuItemMacros($__item__ = null, $__level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "level" => $__level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            echo "<li class=\"moto-widget-menu-item";
            if (twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "items", []))) {
                echo " moto-widget-menu-item-has-submenu";
            }
            echo "\">
    <a ";
            // line 9
            if ( !($context["isPreview"] ?? null)) {
                echo $this->getAttribute(($context["item"] ?? null), "getHtmlAttributes", [], "method");
            }
            echo " class=\"moto-widget-menu-link moto-widget-menu-link-level-";
            echo twig_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
            if (twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "items", []))) {
                echo " moto-widget-menu-link-submenu";
            }
            if ($this->getAttribute(($context["Linker"] ?? null), "isCurrent", [0 => $this->getAttribute(($context["item"] ?? null), "action", []), 1 => $this->getAttribute(($context["item"] ?? null), "properties", [])], "method")) {
                echo " moto-widget-menu-link-active";
            }
            echo " moto-link\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? null), "label", []), "html", null, true);
            if (twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "items", []))) {
                echo "<span class=\"fa moto-widget-menu-link-arrow\"></span>";
            }
            echo "</a>
    ";
            // line 10
            if (twig_length_filter($this->env, $this->getAttribute(($context["item"] ?? null), "items", []))) {
                // line 11
                echo "        ";
                echo $this->getAttribute($this, "SubMenuMacros", [0 => $this->getAttribute(($context["item"] ?? null), "items", []), 1 => (($context["level"] ?? null) + 1)], "method");
                echo "
    ";
            }
            // line 13
            echo "    </li>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/menu/templates/default.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 13,  154 => 11,  152 => 10,  133 => 9,  114 => 8,  98 => 6,  89 => 4,  85 => 3,  82 => 2,  69 => 1,  65 => 23,  61 => 21,  57 => 19,  48 => 18,  44 => 16,  42 => 15,  19 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/menu/templates/default.twig.html", "/home/buyersel/public_html/NEW/mt-includes/widgets/menu/templates/default.twig.html");
    }
}
