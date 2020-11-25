<?php

/* @websiteWidgets/tile_gallery/templates/default.twig.html */
class __TwigTemplate_4224595fcb8e39ac32bba2304cd1fa83e5eed0fc45cfc6ac078591830e15bba6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            '__internal_add5413771944c835c4026d5efc550382db282155ab5dbe65c9f2bc09d5d2d1f' => [$this, 'block___internal_add5413771944c835c4026d5efc550382db282155ab5dbe65c9f2bc09d5d2d1f'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", [], "method"), "html", null, true);
        echo "\" data-widget-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", [], "method"), "html", null, true);
        echo "\" class=\"moto-widget moto-widget-tile-gallery moto-preset-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "preset", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", [0 => "classes"], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getVisibleOn", [0 => "classes"], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getAnimationClasses", [], "method"), "html", null, true);
        echo "\" data-widget=\"tile_gallery\" data-preset=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "preset", []), "html", null, true);
        echo "\">
    ";
        // line 2
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "items", [])) > 0)) {
            // line 3
            echo "        <div class=\"moto-widget-tile-gallery__wrapper\">
            <div class=\"moto-widget-tile-gallery__items-wrapper\" data-moto-init-lightbox-gallery=\"\"";
            // line 4
            if ($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "justifyHeight", [])) {
                echo " data-tile-gallery-justify-height=\"\"";
            }
            echo " ";
            if ($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "showCounter", [])) {
                echo " data-tile-gallery-show-counter=\"\"";
            }
            echo ">
                ";
            // line 5
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
                // line 6
                echo "                    <div class=\"moto-widget-tile-gallery__item-wrapper\">
                        <div class=\"moto-widget-tile-gallery__item\" data-moto-lightbox-item=\"\">
                            <a ";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute(($context["Linker"] ?? null), "getLinkAttributes", [0 => $this->getAttribute($context["item"], "link", [])], "method"), "html", null, true);
                echo " class=\"moto-widget-tile-gallery__item-link moto-link\" data-moto-lightbox-link=\"\">
                                <img class=\"moto-widget-tile-gallery__item-image\" src=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute(($context["Linker"] ?? null), "img", [0 => $this->getAttribute($this->getAttribute($context["item"], "content", []), "path", [])], "method"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["item"], "content", [], "any", false, true), "alt", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["item"], "content", [], "any", false, true), "alt", []), $this->getAttribute($this->getAttribute($context["item"], "content", []), "name", []))) : ($this->getAttribute($this->getAttribute($context["item"], "content", []), "name", []))), "html", null, true);
                echo "\"/>
                            </a>
                            <div class=\"moto-widget-tile-gallery__item-layer\">
                                <span class=\"moto-widget-tile-gallery__item-layer-icon fa\"></span>
                                ";
                // line 13
                if ($this->getAttribute($this->getAttribute($context["item"], "caption", []), "content", [])) {
                    // line 14
                    echo "                                    <div class=\"moto-widget-tile-gallery__item-caption moto-widget-tile-gallery__item-caption_";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "caption", []), "type", []), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getCaptionsVisibleOnClass", [], "method"), "html", null, true);
                    echo "\" data-moto-lightbox-caption=\"\">
                                        ";
                    // line 15
                    if (($this->getAttribute($this->getAttribute($context["item"], "caption", []), "type", []) == "html")) {
                        // line 16
                        echo "                                            <span class=\"moto-widget-tile-gallery__caption-content moto-widget-text\">";
                        echo call_user_func_array($this->env->getFilter('page_html_content')->getCallable(), [$this->env,                         $this->renderBlock("__internal_add5413771944c835c4026d5efc550382db282155ab5dbe65c9f2bc09d5d2d1f", $context, $blocks), $context["item"], "widget:tile_gallery.caption"]);
                        echo "</span>
                                        ";
                    } else {
                        // line 18
                        echo "                                            <span class=\"moto-widget-tile-gallery__caption-content\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "caption", []), "content", []));
                        echo "</span>
                                        ";
                    }
                    // line 20
                    echo "                                    </div>
                                ";
                }
                // line 22
                echo "                            </div>
                        </div>
                    </div>
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
            // line 26
            echo "            </div>
            <style type=\"text/css\">
                ";
            // line 28
            $context["styles"] = $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "styles", []);
            // line 29
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["styles"] ?? null), "itemsWrapper", []), "desktop", []), "base", []), 1 => (("#" . $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", [], "method")) . " .moto-widget-tile-gallery__items-wrapper")], "method"), "html", null, true);
            echo "
                ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["styles"] ?? null), "itemWrapper", []), "desktop", []), "base", []), 1 => (("#" . $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", [], "method")) . " .moto-widget-tile-gallery__item-wrapper")], "method"), "html", null, true);
            echo "
                @media screen and (max-width: ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "getConstant", [0 => "const_media_tablet_max_width"], "method"), "html", null, true);
            echo ") {
                ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["styles"] ?? null), "itemsWrapper", []), "tablet", []), "base", []), 1 => (("#" . $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", [], "method")) . " .moto-widget-tile-gallery__items-wrapper")], "method"), "html", null, true);
            echo "
                ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["styles"] ?? null), "itemWrapper", []), "tablet", []), "base", []), 1 => (("#" . $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", [], "method")) . " .moto-widget-tile-gallery__item-wrapper")], "method"), "html", null, true);
            echo "
                }
                @media screen and (max-width: ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "getConstant", [0 => "const_media_mobile-h_max_width"], "method"), "html", null, true);
            echo ") {
                ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["styles"] ?? null), "itemsWrapper", []), "mobile-h", [], "array"), "base", []), 1 => (("#" . $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", [], "method")) . " .moto-widget-tile-gallery__items-wrapper")], "method"), "html", null, true);
            echo "
                ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["styles"] ?? null), "itemWrapper", []), "mobile-h", [], "array"), "base", []), 1 => (("#" . $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", [], "method")) . " .moto-widget-tile-gallery__item-wrapper")], "method"), "html", null, true);
            echo "
                }
                @media screen and (max-width: ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "getConstant", [0 => "const_media_mobile-v_max_width"], "method"), "html", null, true);
            echo ") {
                ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["styles"] ?? null), "itemsWrapper", []), "mobile-v", [], "array"), "base", []), 1 => (("#" . $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", [], "method")) . " .moto-widget-tile-gallery__items-wrapper")], "method"), "html", null, true);
            echo "
                ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["styles"] ?? null), "itemWrapper", []), "mobile-v", [], "array"), "base", []), 1 => (("#" . $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", [], "method")) . " .moto-widget-tile-gallery__item-wrapper")], "method"), "html", null, true);
            echo "
                }
            </style>
        </div>
    ";
        } else {
            // line 46
            echo "        ";
            if (($context["isPreview"] ?? null)) {
                echo "<div class=\"moto-widget-empty\"></div>";
            }
            // line 47
            echo "    ";
        }
        // line 48
        echo "</div>";
    }

    // line 16
    public function block___internal_add5413771944c835c4026d5efc550382db282155ab5dbe65c9f2bc09d5d2d1f($context, array $blocks = [])
    {
        $this->loadTemplate(twig_template_from_string($this->env, $this->getAttribute($this->getAttribute(($context["item"] ?? null), "caption", []), "content", [])), "@websiteWidgets/tile_gallery/templates/default.twig.html", 16)->display($context);
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/tile_gallery/templates/default.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 16,  195 => 48,  192 => 47,  187 => 46,  179 => 41,  175 => 40,  171 => 39,  166 => 37,  162 => 36,  158 => 35,  153 => 33,  149 => 32,  145 => 31,  141 => 30,  136 => 29,  134 => 28,  130 => 26,  113 => 22,  109 => 20,  103 => 18,  97 => 16,  95 => 15,  88 => 14,  86 => 13,  77 => 9,  73 => 8,  69 => 6,  52 => 5,  42 => 4,  39 => 3,  37 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/tile_gallery/templates/default.twig.html", "/home/buyersel/public_html/NEW/mt-includes/widgets/tile_gallery/templates/default.twig.html");
    }
}
