<?php

/* macros/helper.html.twig */
class __TwigTemplate_130768adb6bd5b10e477cef4f05124d38794db8cd9cdb6b1c5ba55574623cb5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            '__internal_58623146cc0c4b20a3adf4cc64413abb8c6c62ef13871cf0582d22378d58fab4' => [$this, 'block___internal_58623146cc0c4b20a3adf4cc64413abb8c6c62ef13871cf0582d22378d58fab4'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
    }

    // line 2
    public function block___internal_58623146cc0c4b20a3adf4cc64413abb8c6c62ef13871cf0582d22378d58fab4($context, array $blocks = [])
    {
        // line 3
        echo "        ";
        if (is_string($this->getAttribute(($context["section"] ?? null), "content", []))) {
            // line 4
            echo "            ";
            $this->loadTemplate(twig_template_from_string($this->env, $this->getAttribute(($context["section"] ?? null), "content", [])), "macros/helper.html.twig", 4)->display($context);
            // line 5
            echo "        ";
        } else {
            // line 6
            echo "            ";
            echo $this->env->getExtension('Moto\Twig\Extension\WidgetsExtension')->renderWidget($this->env, $this->getAttribute(($context["section"] ?? null), "content", []));
            echo "
        ";
        }
        // line 8
        echo "    ";
    }

    // line 1
    public function getRenderPageSection($__section__ = null, $__type__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "section" => $__section__,
            "type" => $__type__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    ";
            echo call_user_func_array($this->env->getFilter('page_html_content')->getCallable(), [$this->env,             $this->renderBlock("__internal_58623146cc0c4b20a3adf4cc64413abb8c6c62ef13871cf0582d22378d58fab4", $context, $blocks), ($context["section"] ?? null), ($context["type"] ?? null)]);
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
        return "macros/helper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 2,  44 => 1,  40 => 8,  34 => 6,  31 => 5,  28 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "macros/helper.html.twig", "/home/buyersel/public_html/mt-includes/templates/macros/helper.html.twig");
    }
}
