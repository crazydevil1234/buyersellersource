<?php

/* @websiteWidgets/social_links_extended/templates/default.twig.html */
class __TwigTemplate_7b76af5545bbd98c24f13c19a7ee8377069e85f6b21166fa48404634f4fe7fc4 extends Twig_Template
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
        echo "<div id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", [], "method"), "html", null, true);
        echo "\" data-widget-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", [], "method"), "html", null, true);
        echo "\" class=\"moto-widget moto-widget-social-links-extended moto-preset-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "preset", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getAlignClass", [], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", [0 => "classes"], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getVisibleOn", [0 => "classes"], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getAnimationClasses", [], "method"), "html", null, true);
        echo "\" data-widget=\"social_links_extended\" data-preset=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "preset", []), "html", null, true);
        echo "\">
    ";
        // line 2
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "items", [])) > 0)) {
            // line 3
            echo "    <ul class=\"moto-widget-social-links-extended__list\">
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "items", []));
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
                // line 5
                echo "        <li class=\"moto-widget-social-links-extended__item moto-widget-social-links-extended__item-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                echo "\">
            <a href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "link", []), "properties", []), "url", []), "html", null, true);
                echo "\" class=\"moto-widget-social-links-extended__link\" target=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "link", []), "properties", []), "target", []), "html", null, true);
                echo "\" ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "link", []), "properties", []), "nofollow", [])) {
                    echo "rel=\"nofollow\"";
                }
                echo ">
                <span class=\"moto-widget-social-links-extended__icon fa fa-";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "icon", []), "id", []), "html", null, true);
                echo "\"></span>
            </a>
        </li>
        ";
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
            // line 11
            echo "    </ul>
    <style type=\"text/css\">
    ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "items", []));
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
                // line 14
                echo "        ";
                if ($this->getAttribute($context["item"], "advancedStylesEnabled", [])) {
                    // line 15
                    echo "            #";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", [], "method"), "html", null, true);
                    echo " .moto-widget-social-links-extended__item-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                    echo " .moto-widget-social-links-extended__link {
                ";
                    // line 16
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "advancedStyles", []), "desktop", []), "base", []), "color", [])) {
                        echo "color: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "advancedStyles", []), "desktop", []), "base", []), "color", []), "html", null, true);
                        echo ";";
                    }
                    // line 17
                    echo "                ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "advancedStyles", []), "desktop", []), "base", []), "background-color", [], "array")) {
                        echo "background-color: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "advancedStyles", []), "desktop", []), "base", []), "background-color", [], "array"), "html", null, true);
                        echo ";";
                    }
                    // line 18
                    echo "                ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "advancedStyles", []), "desktop", []), "base", []), "border-color", [], "array")) {
                        echo "border-color: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "advancedStyles", []), "desktop", []), "base", []), "border-color", [], "array"), "html", null, true);
                        echo ";";
                    }
                    // line 19
                    echo "            }
            #";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", [], "method"), "html", null, true);
                    echo " .moto-widget-social-links-extended__item-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                    echo " .moto-widget-social-links-extended__link:hover {
                ";
                    // line 21
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "advancedStyles", []), "desktop", []), "hover", []), "color", [])) {
                        echo "color: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "advancedStyles", []), "desktop", []), "hover", []), "color", []), "html", null, true);
                        echo ";";
                    }
                    // line 22
                    echo "                ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "advancedStyles", []), "desktop", []), "hover", []), "background-color", [], "array")) {
                        echo "background-color: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "advancedStyles", []), "desktop", []), "hover", []), "background-color", [], "array"), "html", null, true);
                        echo ";";
                    }
                    // line 23
                    echo "                ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "advancedStyles", []), "desktop", []), "hover", []), "border-color", [], "array")) {
                        echo "border-color: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "advancedStyles", []), "desktop", []), "hover", []), "border-color", [], "array"), "html", null, true);
                        echo ";";
                    }
                    // line 24
                    echo "            }
        ";
                }
                // line 26
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
            // line 27
            echo "    </style>
    ";
        } else {
            // line 29
            echo "    <div class=\"moto-widget-empty\"></div>
    ";
        }
        // line 31
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/social_links_extended/templates/default.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 31,  195 => 29,  191 => 27,  177 => 26,  173 => 24,  166 => 23,  159 => 22,  153 => 21,  147 => 20,  144 => 19,  137 => 18,  130 => 17,  124 => 16,  117 => 15,  114 => 14,  97 => 13,  93 => 11,  75 => 7,  65 => 6,  60 => 5,  43 => 4,  40 => 3,  38 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/social_links_extended/templates/default.twig.html", "/home/buyersel/public_html/NEW/mt-includes/widgets/social_links_extended/templates/default.twig.html");
    }
}
