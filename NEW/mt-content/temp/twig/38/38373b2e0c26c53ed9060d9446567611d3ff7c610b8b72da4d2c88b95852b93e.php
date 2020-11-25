<?php

/* @websiteWidgets/grid_gallery/templates/default.twig.css */
class __TwigTemplate_d9082867bc0a2bee83715ee9cc26637f753f6e1fdec5934aa745a262580f1ad7 extends Twig_Template
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
        // line 16
        echo "
";
        // line 24
        echo "
";
        // line 25
        $context["properties"] = call_user_func_array($this->env->getFilter('json_decode')->getCallable(), [$this->getAttribute(($context["item"] ?? null), "properties", [])]);
        // line 26
        echo "
";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generatePresetSelector", [0 => ".moto-widget-grid-gallery", 1 => $this->getAttribute(($context["item"] ?? null), "class_name", [])], "method"), "html", null, true);
        echo " {
    ";
        // line 28
        if ($this->getAttribute(($context["FEATURES"] ?? null), "theme_widget_grid_gallery__html_caption", [])) {
            // line 29
            echo "        .caption_text {
            ";
            // line 30
            echo $this->getAttribute($this, "printGridGalleryCaption", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "caption", []), "desktop", []), "base", [])], "method");
            echo "
        }
    ";
        } else {
            // line 33
            echo "        .caption {
            ";
            // line 34
            echo $this->getAttribute($this, "printGridGalleryCaption", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "caption", []), "desktop", []), "base", [])], "method");
            echo "
        }
    ";
        }
        // line 37
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "caption", []), "desktop", []), "base", []), "background-color", [], "array") != "")) {
            // line 38
            echo "        .caption {
            background-color: ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "caption", []), "desktop", []), "base", []), "background-color", [], "array"), "html", null, true);
            echo ";
        }
    ";
        }
        // line 42
        echo "    .moto-widget-grid-gallery-item {
        ";
        // line 43
        echo $this->getAttribute($this, "printStyle", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "image", []), "desktop", []), "base", [])], "method");
        echo "
        &:hover {
            ";
        // line 45
        echo $this->getAttribute($this, "printStyle", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "image", []), "desktop", []), "hover", [])], "method");
        echo "
        }
    }
}
";
    }

    // line 1
    public function getprintStyle($__styles__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "styles" => $__styles__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 3
                echo "        ";
                if (($context["key"] == "before")) {
                    // line 4
                    echo "            &:before {
            ";
                    // line 5
                    echo $this->getAttribute($this, "printStyle", [0 => $this->getAttribute(($context["styles"] ?? null), $context["key"], [], "array")], "method");
                    echo "
            }
        ";
                } elseif ((                // line 7
$context["key"] == "after")) {
                    // line 8
                    echo "            &:after {
            ";
                    // line 9
                    echo $this->getAttribute($this, "printStyle", [0 => $this->getAttribute(($context["styles"] ?? null), $context["key"], [], "array")], "method");
                    echo "
            }
        ";
                } elseif ((                // line 11
$context["value"] != "")) {
                    // line 12
                    echo "            ";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo ": ";
                    echo $context["value"];
                    echo ";
        ";
                }
                // line 14
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 17
    public function getprintGridGalleryCaption($__styles__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "styles" => $__styles__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 18
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 19
                echo "        ";
                if ((($context["value"] != "") && ($context["key"] != "background-color"))) {
                    // line 20
                    echo "            ";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo ": ";
                    echo $context["value"];
                    echo ";
        ";
                }
                // line 22
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
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
        return "@websiteWidgets/grid_gallery/templates/default.twig.css";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 22,  170 => 20,  167 => 19,  162 => 18,  150 => 17,  131 => 14,  123 => 12,  121 => 11,  116 => 9,  113 => 8,  111 => 7,  106 => 5,  103 => 4,  100 => 3,  95 => 2,  83 => 1,  74 => 45,  69 => 43,  66 => 42,  60 => 39,  57 => 38,  54 => 37,  48 => 34,  45 => 33,  39 => 30,  36 => 29,  34 => 28,  30 => 27,  27 => 26,  25 => 25,  22 => 24,  19 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/grid_gallery/templates/default.twig.css", "/home/buyersel/public_html/mt-includes/widgets/grid_gallery/templates/default.twig.css");
    }
}
