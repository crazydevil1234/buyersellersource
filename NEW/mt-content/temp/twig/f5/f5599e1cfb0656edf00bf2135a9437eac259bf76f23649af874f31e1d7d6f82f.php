<?php

/* @websiteWidgets/image/templates/default.twig.css */
class __TwigTemplate_36392c9612b4ea7668714b4270f254bcc2d4fb4db8a76b34e727a162a6f06041 extends Twig_Template
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
        // line 17
        $context["properties"] = call_user_func_array($this->env->getFilter('json_decode')->getCallable(), [$this->getAttribute(($context["item"] ?? null), "properties", [])]);
        // line 18
        echo "
";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generatePresetSelector", [0 => ".moto-widget-image", 1 => $this->getAttribute(($context["item"] ?? null), "class_name", [])], "method"), "html", null, true);
        echo " {
    .moto-widget-image-link {
        ";
        // line 21
        echo $this->getAttribute($this, "printStyle", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "image", []), "desktop", []), "base", [])], "method");
        echo "

        &:after {
            ";
        // line 24
        echo $this->getAttribute($this, "printStyle", [0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "icon", []), "desktop", []), "base", []), "after", [])], "method");
        echo "
        }

        &:before {
            ";
        // line 28
        echo $this->getAttribute($this, "printStyle", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "layer", []), "desktop", []), "base", [])], "method");
        echo "
        }

        &:hover {
            ";
        // line 32
        echo $this->getAttribute($this, "printStyle", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "image", []), "desktop", []), "hover", [])], "method");
        echo "

            &:after {
                ";
        // line 35
        echo $this->getAttribute($this, "printStyle", [0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "icon", []), "desktop", []), "hover", []), "after", [])], "method");
        echo "
            }

            &:before {
                ";
        // line 39
        echo $this->getAttribute($this, "printStyle", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "layer", []), "desktop", []), "hover", [])], "method");
        echo "
            }
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

    public function getTemplateName()
    {
        return "@websiteWidgets/image/templates/default.twig.css";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 14,  115 => 12,  113 => 11,  108 => 9,  105 => 8,  103 => 7,  98 => 5,  95 => 4,  92 => 3,  87 => 2,  75 => 1,  65 => 39,  58 => 35,  52 => 32,  45 => 28,  38 => 24,  32 => 21,  27 => 19,  24 => 18,  22 => 17,  19 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/image/templates/default.twig.css", "/home/buyersel/public_html/mt-includes/widgets/image/templates/default.twig.css");
    }
}
