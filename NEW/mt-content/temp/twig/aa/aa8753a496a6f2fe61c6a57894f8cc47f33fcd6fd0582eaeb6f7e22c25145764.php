<?php

/* @websiteWidgets/carousel/templates/default.twig.html */
class __TwigTemplate_9221de29cc3e386129068345f60b3c3ede282100be2f20295f213e2dd73b3fce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            '__internal_4d2e9b5ee6c4e093131e36a8ca8b39b4286cb423e90b338b6ca32ce38d2f82b9' => [$this, 'block___internal_4d2e9b5ee6c4e093131e36a8ca8b39b4286cb423e90b338b6ca32ce38d2f82b9'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div data-widget-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", [], "method"), "html", null, true);
        echo "\" class=\"moto-widget moto-widget-slider moto-widget-carousel moto-preset-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "preset", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", [0 => "classes"], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getVisibleOn", [0 => "classes"], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getAnimationClasses", [], "method"), "html", null, true);
        echo " moto-widget-carousel-loader\" data-widget=\"carousel\" data-preset=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "preset", []), "html", null, true);
        echo "\">
    ";
        // line 2
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "items", [])) > 0)) {
            // line 3
            echo "        <div class=\"loading-block\">
            <div class=\"loading-circle\"><div></div></div>
            <div class=\"loading-circle\"><div></div></div>
            <div class=\"loading-circle\"><div></div></div>
            <div class=\"loading-circle\"><div></div></div>
        </div>
        <div class=\"carousel-block\">
            <div class=\"moto-widget-carousel-list\"";
            // line 10
            if ( !($context["isPreview"] ?? null)) {
                echo " data-moto-carousel-options='";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "exportFrontendSettings", [], "method"), "html", null, true);
                echo "'";
            }
            echo ">
                ";
            // line 11
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
                // line 12
                echo "                    <div class=\"moto-widget-carousel-item\">
                        <a class=\"moto-widget-carousel-link moto-link\" ";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute(($context["Linker"] ?? null), "getLinkAttributes", [0 => $this->getAttribute($context["item"], "link", [])], "method"), "html", null, true);
                echo "><img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["Linker"] ?? null), "img", [0 => $this->getAttribute($context["item"], "content", [])], "method"), "html", null, true);
                echo "\" alt=\"";
                if ($this->getAttribute($context["item"], "alt", [])) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "alt", []), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", []), "html", null, true);
                }
                echo "\"/></a>
                        ";
                // line 14
                if ($this->getAttribute($context["item"], "caption", [])) {
                    // line 15
                    echo "                            <div class=\"moto-widget-carousel-caption moto-widget-text\">";
                    echo call_user_func_array($this->env->getFilter('page_html_content')->getCallable(), [$this->env,                     $this->renderBlock("__internal_4d2e9b5ee6c4e093131e36a8ca8b39b4286cb423e90b338b6ca32ce38d2f82b9", $context, $blocks), $context["item"], "widget:carousel.caption"]);
                    echo "</div>
                        ";
                }
                // line 17
                echo "                    </div>
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
            // line 19
            echo "            </div>
        </div>
    ";
        } else {
            // line 22
            echo "        <div class=\"moto-widget-empty\"></div>
    ";
        }
        // line 24
        echo "</div>";
    }

    // line 15
    public function block___internal_4d2e9b5ee6c4e093131e36a8ca8b39b4286cb423e90b338b6ca32ce38d2f82b9($context, array $blocks = [])
    {
        $this->loadTemplate(twig_template_from_string($this->env, $this->getAttribute(($context["item"] ?? null), "caption", [])), "@websiteWidgets/carousel/templates/default.twig.html", 15)->display($context);
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/carousel/templates/default.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 15,  118 => 24,  114 => 22,  109 => 19,  94 => 17,  88 => 15,  86 => 14,  74 => 13,  71 => 12,  54 => 11,  46 => 10,  37 => 3,  35 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/carousel/templates/default.twig.html", "/home/buyersel/public_html/mt-includes/widgets/carousel/templates/default.twig.html");
    }
}
