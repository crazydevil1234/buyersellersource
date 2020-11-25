<?php

/* @lessTemplates/styler/item.less.twig */
class __TwigTemplate_7b7b0f7cd6079ae2eceb28fcafb02bb87acaf15faffc4444e3f2f63a15e34317 extends Twig_Template
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
        echo " ";
        $context["css_name"] = ("." . $this->getAttribute(($context["item"] ?? null), "class_name", []));
        echo " ";
        $context["properties"] = call_user_func_array($this->env->getFilter('json_decode')->getCallable(), [$this->getAttribute(($context["item"] ?? null), "properties", [])]);
        echo " ";
        $context["link"] = "";
        echo " ";
        if ($this->getAttribute(($context["item"] ?? null), "link", [])) {
            echo " ";
            $context["link"] = call_user_func_array($this->env->getFilter('json_decode')->getCallable(), [$this->getAttribute(($context["item"] ?? null), "link", [])]);
            echo " ";
        }
        echo " ";
        if (($this->getAttribute(($context["item"] ?? null), "is_responsive", []) && ($this->getAttribute(($context["item"] ?? null), "is_responsive", []) == 1))) {
            echo " ";
            $context["devices"] = [0 => "desktop", 1 => "tablet", 2 => "mobile-h", 3 => "mobile-v"];
            echo " ";
        } else {
            echo " ";
            $context["devices"] = [0 => "desktop"];
            echo " ";
        }
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["devices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["part"]) {
            echo " ";
            if ($this->getAttribute(($context["properties"] ?? null), $context["part"], [], "array")) {
                echo " ";
                if (($context["part"] != "desktop")) {
                    echo " @media (max-width: @const_media_";
                    echo $context["part"];
                    echo "_max_width) { ";
                }
                echo " ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable([0 => "base", 1 => "hover", 2 => "active"]);
                foreach ($context['_seq'] as $context["_key"] => $context["modificator"]) {
                    echo " ";
                    if ($this->getAttribute($this->getAttribute(($context["properties"] ?? null), $context["part"], [], "array"), $context["modificator"], [], "array")) {
                        echo " ";
                        $context["_modificator"] = "";
                        echo " ";
                        if (($context["modificator"] != "base")) {
                            echo " ";
                            $context["_modificator"] = (":" . $context["modificator"]);
                            echo " ";
                        }
                        echo " ";
                        echo $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), $context["part"], [], "array"), $context["modificator"], [], "array"), 1 => (($context["css_name"] ?? null) . ($context["_modificator"] ?? null))], "method");
                        echo " ";
                    }
                    echo " ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modificator'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " ";
                if (($context["part"] != "desktop")) {
                    echo " } ";
                }
                echo " ";
            }
            echo " ";
            if (((($context["part"] == "desktop") && ($context["link"] ?? null)) && $this->getAttribute(($context["link"] ?? null), $context["part"], [], "array"))) {
                echo " ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable([0 => "base", 1 => "hover", 2 => "active"]);
                foreach ($context['_seq'] as $context["_key"] => $context["modificator"]) {
                    echo " ";
                    if ($this->getAttribute($this->getAttribute(($context["link"] ?? null), $context["part"], [], "array"), $context["modificator"], [], "array")) {
                        echo " ";
                        $context["_modificator"] = "";
                        echo " ";
                        if (($context["modificator"] != "base")) {
                            echo " ";
                            $context["_modificator"] = (":" . $context["modificator"]);
                            echo " ";
                        }
                        echo " ";
                        echo $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["link"] ?? null), $context["part"], [], "array"), $context["modificator"], [], "array"), 1 => ((($context["css_name"] ?? null) . " a") . ($context["_modificator"] ?? null))], "method");
                        echo " ";
                    }
                    echo " ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modificator'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo " ";
            }
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['part'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " ";
    }

    public function getTemplateName()
    {
        return "@lessTemplates/styler/item.less.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@lessTemplates/styler/item.less.twig", "/home/buyersel/public_html/mt-includes/templates/less/styler/item.less.twig");
    }
}
