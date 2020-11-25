<?php

/* @websiteWidgets/moto_callback/templates/base.html.twig */
class __TwigTemplate_c120b6b0a9fb06614d897128947db9bf83ac8bfe863a636ec72b81ef1d6cb043 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            '__internal_e9e144772bf981e04f98b4bef5afa9ef288763614fb2493ab5a2abb932b68243' => [$this, 'block___internal_e9e144772bf981e04f98b4bef5afa9ef288763614fb2493ab5a2abb932b68243'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 8
        echo "
<div data-moto-widget-callback class=\"moto-widget-callback moto-widget-callback_closed moto-preset-default\">
    <div class=\"moto-widget-callback__wrapper\">
        <div class=\"moto-widget-callback__open-button moto-widget-callback__thumbnail-wrapper moto-widget-callback__thumbnail-wrapper_";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["MotoCallback"] ?? null), "getThumbnailType", [0 => "openButton"], "method"), "html", null, true);
        echo "\">
            <div class=\"moto-widget-callback__overlay moto-widget-callback__overlay_open-button\"></div>
            ";
        // line 13
        echo $this->getAttribute($this, "renderThumbnail", [0 => "openButton"], "method");
        echo "
        </div>
        <div class=\"moto-widget-callback__body";
        // line 15
        if ($this->getAttribute($this->getAttribute(($context["MotoCallback"] ?? null), "getMoreDetailsProperties", [], "method"), "enabled", [])) {
            echo " moto-widget-callback__body_more-details-enabled";
            if ($this->getAttribute($this->getAttribute(($context["MotoCallback"] ?? null), "getMoreDetailsProperties", [], "method"), "displayByDefault", [])) {
                echo " moto-widget-callback__body_more-details-opened";
            }
        }
        echo "\" style=\"display: none;\">
            <div class=\"moto-widget-callback__agent moto-widget-callback__thumbnail-wrapper moto-widget-callback__thumbnail-wrapper_";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["MotoCallback"] ?? null), "getThumbnailType", [0 => "agent"], "method"), "html", null, true);
        echo "\">
                ";
        // line 17
        echo $this->getAttribute($this, "renderThumbnail", [0 => "agent"], "method");
        echo "
            </div>
            <div class=\"moto-widget-callback__description moto-widget-text\">
                ";
        // line 20
        echo call_user_func_array($this->env->getFilter('page_html_content')->getCallable(), [$this->env,         $this->renderBlock("__internal_e9e144772bf981e04f98b4bef5afa9ef288763614fb2493ab5a2abb932b68243", $context, $blocks), ($context["item"] ?? null), "widget:moto_callback.description"]);
        // line 21
        echo "            </div>
            ";
        // line 22
        if ($this->getAttribute($this->getAttribute(($context["MotoCallback"] ?? null), "getMoreDetailsProperties", [], "method"), "enabled", [])) {
            // line 23
            echo "                <div class=\"moto-widget-callback__more-details-wrapper\"";
            if ($this->getAttribute($this->getAttribute(($context["MotoCallback"] ?? null), "getMoreDetailsProperties", [], "method"), "displayByDefault", [])) {
                echo " style=\"display: block;\"";
            }
            echo ">
                    <hr class=\"moto-widget-callback__more-details-divider\">
                    <div class=\"moto-widget-callback__more-details\">
                    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["MotoCallback"] ?? null), "getMoreDetailsItems", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 27
                echo "                        ";
                if (( !$this->getAttribute($context["item"], "value", []) == "")) {
                    // line 28
                    echo "                        <div class=\"moto-widget-callback__more-details-item\">
                            <div class=\"moto-widget-callback__overlay moto-widget-callback__overlay_link\"></div>
                            <a href=\"";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["MotoCallback"] ?? null), "getMoreDetailsItemHref", [0 => $context["item"]], "method"), "html", null, true);
                    echo "\" class=\"moto-widget-callback__link moto-widget-callback__link-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", []), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []), "html", null, true);
                    echo "\" target=\"_blank\"></a>
                        </div>
                        ";
                }
                // line 33
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                    </div>
                </div>
                <div class=\"moto-widget-callback__more-details-button-wrapper\"><i class=\"moto-widget-callback__more-details-button fa fa-angle-down\"></i></div>
            ";
        }
        // line 38
        echo "            <div class=\"moto-widget-callback__close-button\">×</div>
        </div>
    </div>
</div>";
    }

    // line 20
    public function block___internal_e9e144772bf981e04f98b4bef5afa9ef288763614fb2493ab5a2abb932b68243($context, array $blocks = [])
    {
        $this->loadTemplate(twig_template_from_string($this->env, $this->getAttribute(($context["MotoCallback"] ?? null), "getDescription", [], "method")), "@websiteWidgets/moto_callback/templates/base.html.twig", 20)->display($context);
    }

    // line 1
    public function getrenderThumbnail($__name__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    ";
            if (($this->getAttribute(($context["MotoCallback"] ?? null), "getThumbnailType", [0 => ($context["name"] ?? null)], "method") == "icon")) {
                // line 3
                echo "        <div class=\"moto-widget-callback__thumbnail moto-widget-callback__thumbnail_icon";
                if (( !$this->getAttribute(($context["MotoCallback"] ?? null), "getThumbnailValue", [0 => ($context["name"] ?? null)], "method") == null)) {
                    echo " fa fa-fw fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["MotoCallback"] ?? null), "getThumbnailValue", [0 => ($context["name"] ?? null)], "method"), "html", null, true);
                } else {
                    echo " moto-widget-callback__thumbnail_empty";
                }
                echo "\"></div>
    ";
            } else {
                // line 5
                echo "        <div class=\"moto-widget-callback__thumbnail moto-widget-callback__thumbnail_image";
                if (( !$this->getAttribute(($context["MotoCallback"] ?? null), "getThumbnailValue", [0 => ($context["name"] ?? null)], "method") == "")) {
                    echo "\" style=\"background-image: url(";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["MotoCallback"] ?? null), "getThumbnailValue", [0 => ($context["name"] ?? null)], "method"), "html", null, true);
                    echo ");";
                } else {
                    echo " moto-widget-callback__thumbnail_empty";
                }
                echo "\"></div>
    ";
            }
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
        return "@websiteWidgets/moto_callback/templates/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 5,  131 => 3,  128 => 2,  116 => 1,  110 => 20,  103 => 38,  97 => 34,  91 => 33,  81 => 30,  77 => 28,  74 => 27,  70 => 26,  61 => 23,  59 => 22,  56 => 21,  54 => 20,  48 => 17,  44 => 16,  35 => 15,  30 => 13,  25 => 11,  20 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/moto_callback/templates/base.html.twig", "/home/buyersel/public_html/mt-includes/widgets/moto_callback/templates/base.html.twig");
    }
}
