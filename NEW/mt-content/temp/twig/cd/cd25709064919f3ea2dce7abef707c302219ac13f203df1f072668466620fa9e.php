<?php

/* __string_template__2b65f77249297efa7740794966de2375759fe86dd8c2807e5a8e196bbd679d5d */
class __TwigTemplate_c9a737963b4bae4ff24715ef8df84c5436f3cff73c63283f048e4f617389ab73 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
    }

    public function getTemplateName()
    {
        return "__string_template__2b65f77249297efa7740794966de2375759fe86dd8c2807e5a8e196bbd679d5d";
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
        return new Twig_Source("", "__string_template__2b65f77249297efa7740794966de2375759fe86dd8c2807e5a8e196bbd679d5d", "");
    }
}
