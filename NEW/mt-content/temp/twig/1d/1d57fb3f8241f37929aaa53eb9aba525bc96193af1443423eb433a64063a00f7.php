<?php

/* @websiteWidgets/countdown/templates/default.twig.html */
class __TwigTemplate_6b646e064966076bb0ff800e2cba26e42849bb291a16a54637b46a58d81efec2 extends Twig_Template
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
        echo "<div data-widget-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", [], "method"), "html", null, true);
        echo "\" class=\"moto-widget moto-widget-countdown moto-preset-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "preset", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getAlignClass", [], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", [0 => "classes"], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getVisibleOn", [0 => "classes"], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getAnimationClasses", [], "method"), "html", null, true);
        echo "\" data-widget=\"countdown\"";
        if (($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "type", []) == "event")) {
            echo " data-timezone=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "timezone", []), "html", null, true);
            echo "\"";
        }
        if ( !($context["isPreview"] ?? null)) {
            echo " data-on-expiry=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "onExpiry", []), "html", null, true);
            echo "\"";
            if (($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "onExpiry", []) == "redirect")) {
                echo " data-redirect-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "redirectUrl", []), "html", null, true);
                echo "\"";
            }
        }
        echo " data-time=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "time", []), "html", null, true);
        echo "\" data-type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "type", []), "html", null, true);
        echo "\">
    ";
        // line 2
        if (($context["isPreview"] ?? null)) {
            echo "<div class=\"moto-widget-cover\"></div>";
        }
        // line 3
        echo "    ";
        $context["enabledItems"] = $this->getAttribute(($context["currentWidget"] ?? null), "getEnabledItems", [], "method");
        // line 4
        echo "    <timer countdown=\"countdownTime\" interval=\"1000\" class=\"countdown-timer\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["enabledItems"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "        <div class=\"countdown-item\">
            <div class=\"countdown-item-wrapper\">
                <div class=\"countdown-item-block\">
                    <div class=\"countdown-item-content\">
                        <div class=\"countdown-item-amount\" data-ng-bind=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", []), "html", null, true);
            echo "\"></div>
                        <div class=\"countdown-item-unit\" data-ng-bind=\"";
            // line 11
            echo twig_escape_filter($this->env, ((((($this->getAttribute($context["item"], "id", []) . "|humanizeDuration:'") . $this->getAttribute($context["item"], "id", [])) . "':'") . $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "language", [])) . "'"), "html", null, true);
            echo "\"></div>
                    </div>
                </div>
            </div>
            <div class=\"countdown-item-delimiter\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "delimiter", []), "html", null, true);
            echo "</div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </timer>
</div>";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/countdown/templates/default.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 18,  85 => 15,  78 => 11,  74 => 10,  68 => 6,  64 => 5,  61 => 4,  58 => 3,  54 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/countdown/templates/default.twig.html", "/home/buyersel/public_html/NEW/mt-includes/widgets/countdown/templates/default.twig.html");
    }
}
