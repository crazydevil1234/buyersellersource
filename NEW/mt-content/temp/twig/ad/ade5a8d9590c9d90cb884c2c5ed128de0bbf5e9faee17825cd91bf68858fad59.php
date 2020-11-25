<?php

/* @websiteWidgets/moto_callback/templates/default.twig.css */
class __TwigTemplate_dfdfddf4ca0ac78c8d6e27204cd98fc329aad511eef522c9ec5dce4aaf282313 extends Twig_Template
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
        // line 15
        echo "
";
        // line 16
        $context["properties"] = call_user_func_array($this->env->getFilter('json_decode')->getCallable(), [$this->getAttribute(($context["item"] ?? null), "properties", [])]);
        // line 17
        echo "
";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generatePresetSelector", [0 => ".moto-widget-callback", 1 => $this->getAttribute(($context["item"] ?? null), "class_name", [])], "method"), "html", null, true);
        echo " {
    ";
        // line 19
        echo $this->getAttribute($this, "renderOffset", [0 => $this->getAttribute(($context["properties"] ?? null), "position", [])], "method");
        echo "

    ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "root", []), "desktop", [])], "method"), "html", null, true);
        echo "
    ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "root_open", []), "desktop", []), 1 => "&.moto-widget-callback_opened, &.moto-widget-callback_opening"], "method"), "html", null, true);
        echo "
    ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "root_close", []), "desktop", []), 1 => "&.moto-widget-callback_closed, &.moto-widget-callback_closing"], "method"), "html", null, true);
        echo "

    .moto-widget-callback__agent {
        ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "agent", []), "desktop", [])], "method"), "html", null, true);
        echo "
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "agent_image", []), "desktop", []), 1 => ".moto-widget-callback__thumbnail_image:not(.moto-widget-callback__thumbnail_empty)"], "method"), "html", null, true);
        echo "
        ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "agent_icon", []), "desktop", []), 1 => ".moto-widget-callback__thumbnail_icon:not(.moto-widget-callback__thumbnail_empty)"], "method"), "html", null, true);
        echo "
    }

    ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "divider", []), "desktop", []), 1 => ".moto-widget-callback__more-details-divider"], "method"), "html", null, true);
        echo "
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "open_button", []), "desktop", []), 1 => ".moto-widget-callback__open-button"], "method"), "html", null, true);
        echo "
    ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "more_details_button", []), "desktop", []), 1 => ".moto-widget-callback__more-details-button"], "method"), "html", null, true);
        echo "
    ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "link", []), "desktop", []), 1 => ".moto-widget-callback__link"], "method"), "html", null, true);
        echo "
    ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "close_button", []), "desktop", []), 1 => ".moto-widget-callback__close-button"], "method"), "html", null, true);
        echo "

    ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "open_button_overlay", []), "desktop", []), "base", []), 1 => ".moto-widget-callback__overlay_open-button"], "method"), "html", null, true);
        echo "
    ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "link_overlay", []), "desktop", []), "base", []), 1 => ".moto-widget-callback__overlay_link"], "method"), "html", null, true);
        echo "
    .moto-widget-callback__open-button:hover {
        ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "open_button_overlay", []), "desktop", []), "hover", []), 1 => ".moto-widget-callback__overlay_open-button"], "method"), "html", null, true);
        echo "
    }
    .moto-widget-callback__more-details-item:hover {
        ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "link_overlay", []), "desktop", []), "hover", []), 1 => ".moto-widget-callback__overlay_link"], "method"), "html", null, true);
        echo "
    }

";
        // line 46
        if ($this->getAttribute(($context["properties"] ?? null), "open_button_sizes", [])) {
            // line 47
            echo "    ";
            $context["open_button_sizes"] = $this->getAttribute(($context["properties"] ?? null), "open_button_sizes", []);
        } else {
            // line 49
            echo "    ";
            $context["open_button_sizes"] = call_user_func_array($this->env->getFilter('json_decode')->getCallable(), ["{\"desktop\":{\"base\":{\"width\": \"80px\", \"height\": \"80px\", \"font-size\": \"50px\"}}}"]);
        }
        // line 51
        echo "
    ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["open_button_sizes"] ?? null), "desktop", []), "base", []), 1 => ".moto-widget-callback__thumbnail_image:not(.moto-widget-callback__thumbnail_empty), .moto-widget-callback__open-button .moto-widget-callback__thumbnail_empty"], "method"), "html", null, true);
        echo "
    @media screen and (max-width: @const_media_tablet_max_width) { ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["open_button_sizes"] ?? null), "tablet", []), "base", []), 1 => ".moto-widget-callback__thumbnail_image:not(.moto-widget-callback__thumbnail_empty), .moto-widget-callback__open-button .moto-widget-callback__thumbnail_empty"], "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-h_max_width) { ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["open_button_sizes"] ?? null), "mobile-h", [], "array"), "base", []), 1 => ".moto-widget-callback__thumbnail_image:not(.moto-widget-callback__thumbnail_empty), .moto-widget-callback__open-button .moto-widget-callback__thumbnail_empty"], "method"), "html", null, true);
        echo " }
    @media screen and (max-width: @const_media_mobile-v_max_width) { ";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["open_button_sizes"] ?? null), "mobile-v", [], "array"), "base", []), 1 => ".moto-widget-callback__thumbnail_image:not(.moto-widget-callback__thumbnail_empty), .moto-widget-callback__open-button .moto-widget-callback__thumbnail_empty"], "method"), "html", null, true);
        echo " }
    &.moto-widget-callback_closed,
    &.moto-widget-callback_closing {
        width: ";
        // line 58
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["open_button_sizes"] ?? null), "desktop", [], "any", false, true), "base", [], "any", false, true), "width", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["open_button_sizes"] ?? null), "desktop", [], "any", false, true), "base", [], "any", false, true), "width", []), "80px")) : ("80px")), "html", null, true);
        echo ";
        ";
        // line 59
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["open_button_sizes"] ?? null), "tablet", []), "base", []), "width", [])) {
            echo "@media screen and (max-width: @const_media_tablet_max_width) { width: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["open_button_sizes"] ?? null), "tablet", []), "base", []), "width", []), "html", null, true);
            echo "; }";
        }
        // line 60
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["open_button_sizes"] ?? null), "mobile-h", [], "array"), "base", []), "width", [])) {
            echo "@media screen and (max-width: @const_media_mobile-h_max_width) { width: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["open_button_sizes"] ?? null), "mobile-h", [], "array"), "base", []), "width", []), "html", null, true);
            echo "; }";
        }
        // line 61
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["open_button_sizes"] ?? null), "mobile-v", [], "array"), "base", []), "width", [])) {
            echo "@media screen and (max-width: @const_media_mobile-v_max_width) { width: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["open_button_sizes"] ?? null), "mobile-v", [], "array"), "base", []), "width", []), "html", null, true);
            echo "; }";
        }
        // line 62
        echo "    }
   .moto-widget-callback__open-button .moto-widget-callback__thumbnail_icon:not(.moto-widget-callback__thumbnail_empty) {
        font-size:  ";
        // line 64
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["open_button_sizes"] ?? null), "desktop", [], "any", false, true), "base", [], "any", false, true), "font-size", [], "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["open_button_sizes"] ?? null), "desktop", [], "any", false, true), "base", [], "any", false, true), "font-size", [], "array"), "50px")) : ("50px")), "html", null, true);
        echo ";
        line-height: ";
        // line 65
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["open_button_sizes"] ?? null), "desktop", [], "any", false, true), "base", [], "any", false, true), "height", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["open_button_sizes"] ?? null), "desktop", [], "any", false, true), "base", [], "any", false, true), "height", []), "80px")) : ("80px")), "html", null, true);
        echo ";
        @media screen and (max-width: @const_media_tablet_max_width) {
            ";
        // line 67
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["open_button_sizes"] ?? null), "tablet", []), "base", []), "font-size", [], "array")) {
            echo "font-size:  ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["open_button_sizes"] ?? null), "tablet", []), "base", []), "font-size", [], "array"), "html", null, true);
            echo ";";
        }
        // line 68
        echo "            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["open_button_sizes"] ?? null), "tablet", []), "base", []), "height", [])) {
            echo "line-height: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["open_button_sizes"] ?? null), "tablet", []), "base", []), "height", []), "html", null, true);
            echo ";";
        }
        // line 69
        echo "        }
        @media screen and (max-width: @const_media_mobile-h_max_width) {
            ";
        // line 71
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["open_button_sizes"] ?? null), "mobile-h", [], "array"), "base", []), "font-size", [], "array")) {
            echo "font-size: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["open_button_sizes"] ?? null), "mobile-h", [], "array"), "base", []), "font-size", [], "array"), "html", null, true);
            echo ";";
        }
        // line 72
        echo "            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["open_button_sizes"] ?? null), "mobile-h", [], "array"), "base", []), "height", [])) {
            echo "line-height: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["open_button_sizes"] ?? null), "mobile-h", [], "array"), "base", []), "height", []), "html", null, true);
            echo ";";
        }
        // line 73
        echo "        }
        @media screen and (max-width: @const_media_mobile-v_max_width) {
            ";
        // line 75
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["open_button_sizes"] ?? null), "mobile-v", [], "array"), "base", []), "font-size", [], "array")) {
            echo "font-size: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["open_button_sizes"] ?? null), "mobile-v", [], "array"), "base", []), "font-size", [], "array"), "html", null, true);
            echo ";";
        }
        // line 76
        echo "            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["open_button_sizes"] ?? null), "mobile-v", [], "array"), "base", []), "height", [])) {
            echo "line-height: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["open_button_sizes"] ?? null), "mobile-v", [], "array"), "base", []), "height", []), "html", null, true);
            echo ";";
        }
        // line 77
        echo "        }
    }
}
";
    }

    // line 1
    public function getrenderOffset($__position__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "position" => $__position__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    ";
            // line 3
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["position"] ?? null), "direction", []), "vertical", []), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["position"] ?? null), "values", []), "desktop", []), "vertical", []), "html", null, true);
            echo ";
    ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["position"] ?? null), "direction", []), "horizontal", []), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["position"] ?? null), "values", []), "desktop", []), "horizontal", []), "html", null, true);
            echo ";
    ";
            // line 5
            if (($this->getAttribute($this->getAttribute(($context["position"] ?? null), "direction", []), "horizontal", []) == "left")) {
                echo "right";
            } else {
                echo "left";
            }
            echo ": auto;
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable([0 => "tablet", 1 => "mobile-h", 2 => "mobile-v"]);
            foreach ($context['_seq'] as $context["_key"] => $context["device"]) {
                // line 7
                echo "        ";
                if (((($this->getAttribute($this->getAttribute(($context["position"] ?? null), "values", []), $context["device"], [], "array") != null) && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["position"] ?? null), "values", []), $context["device"], [], "array"), "vertical", []) != null)) && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["position"] ?? null), "values", []), $context["device"], [], "array"), "horizontal", []) != null))) {
                    // line 8
                    echo "            @media screen and (max-width: @const_media_";
                    echo twig_escape_filter($this->env, $context["device"], "html", null, true);
                    echo "_max_width) {
                ";
                    // line 9
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["position"] ?? null), "direction", []), "vertical", []), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["position"] ?? null), "values", []), $context["device"], [], "array"), "vertical", []), "html", null, true);
                    echo ";
                ";
                    // line 10
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["position"] ?? null), "direction", []), "horizontal", []), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["position"] ?? null), "values", []), $context["device"], [], "array"), "horizontal", []), "html", null, true);
                    echo ";
            }
        ";
                }
                // line 13
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['device'], $context['_parent'], $context['loop']);
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
        return "@websiteWidgets/moto_callback/templates/default.twig.css";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 13,  281 => 10,  275 => 9,  270 => 8,  267 => 7,  263 => 6,  255 => 5,  249 => 4,  242 => 3,  240 => 2,  228 => 1,  221 => 77,  214 => 76,  208 => 75,  204 => 73,  197 => 72,  191 => 71,  187 => 69,  180 => 68,  174 => 67,  169 => 65,  165 => 64,  161 => 62,  154 => 61,  147 => 60,  141 => 59,  137 => 58,  131 => 55,  127 => 54,  123 => 53,  119 => 52,  116 => 51,  112 => 49,  108 => 47,  106 => 46,  100 => 43,  94 => 40,  89 => 38,  85 => 37,  80 => 35,  76 => 34,  72 => 33,  68 => 32,  64 => 31,  58 => 28,  54 => 27,  50 => 26,  44 => 23,  40 => 22,  36 => 21,  31 => 19,  27 => 18,  24 => 17,  22 => 16,  19 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/moto_callback/templates/default.twig.css", "/home/buyersel/public_html/mt-includes/widgets/moto_callback/templates/default.twig.css");
    }
}
