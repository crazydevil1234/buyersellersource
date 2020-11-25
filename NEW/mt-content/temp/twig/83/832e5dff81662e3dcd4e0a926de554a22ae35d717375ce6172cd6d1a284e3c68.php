<?php

/* base.html */
class __TwigTemplate_e5b5bfb6249bb35ca6dc7142145165687e02f52a0951c5d35428c72aa8b2f56a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'css' => [$this, 'block_css'],
            'custom_css' => [$this, 'block_custom_css'],
            'js' => [$this, 'block_js'],
            'before_custom_js' => [$this, 'block_before_custom_js'],
            'custom_js' => [$this, 'block_custom_js'],
            'after_custom_js' => [$this, 'block_after_custom_js'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 5
            echo "        ";
            if ((($this->getAttribute($context["analytic"], "provider", []) == "GoogleTagManager") && $this->getAttribute($this->getAttribute($context["analytic"], "options", []), "uid", []))) {
                // line 6
                echo "            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["analytic"], "options", [], "any", false, true), "dataVariable", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["analytic"], "options", [], "any", false, true), "dataVariable", []), "dataLayer")) : ("dataLayer")), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["analytic"], "options", []), "uid", []), "html", null, true);
                echo "');</script>
        ";
            }
            // line 8
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
    ";
        // line 10
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("head.top");
        echo "
    ";
        // line 11
        $this->displayBlock('head', $context, $blocks);
        // line 12
        echo "    ";
        $this->displayBlock('css', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('custom_css', $context, $blocks);
        // line 14
        echo "    ";
        $this->displayBlock('js', $context, $blocks);
        // line 15
        echo "    ";
        $this->displayBlock('before_custom_js', $context, $blocks);
        // line 16
        echo "    ";
        $this->displayBlock('custom_js', $context, $blocks);
        // line 17
        echo "    ";
        $this->displayBlock('after_custom_js', $context, $blocks);
        // line 18
        echo "    ";
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("head.bottom");
        echo "
</head>
<body class=\"";
        // line 20
        if (($context["user"] ?? null)) {
            echo "app";
        } else {
            echo "guest-app";
        }
        echo "\">
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 22
            echo "        ";
            if ((($this->getAttribute($context["analytic"], "provider", []) == "GoogleTagManager") && $this->getAttribute($this->getAttribute($context["analytic"], "options", []), "uid", []))) {
                // line 23
                echo "            <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["analytic"], "options", []), "uid", []), "html", null, true);
                echo "\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
        ";
            }
            // line 25
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
    ";
        // line 27
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("body.top");
        echo "
    ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "
    ";
        // line 35
        echo "
    <script type=\"text/javascript\" data-cfasync=\"false\">
        angular.element(window).one('load', function() {
            angular.bootstrap(angular.element('html'), ['";
        // line 38
        if (($context["user"] ?? null)) {
            echo "application";
        } else {
            echo "guest";
        }
        echo "']);
        });
    </script>
    ";
        // line 41
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("body.bottom");
        echo "
</body>
</html>";
    }

    // line 11
    public function block_head($context, array $blocks = [])
    {
    }

    // line 12
    public function block_css($context, array $blocks = [])
    {
    }

    // line 13
    public function block_custom_css($context, array $blocks = [])
    {
    }

    // line 14
    public function block_js($context, array $blocks = [])
    {
    }

    // line 15
    public function block_before_custom_js($context, array $blocks = [])
    {
    }

    // line 16
    public function block_custom_js($context, array $blocks = [])
    {
    }

    // line 17
    public function block_after_custom_js($context, array $blocks = [])
    {
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 28,  177 => 17,  172 => 16,  167 => 15,  162 => 14,  157 => 13,  152 => 12,  147 => 11,  140 => 41,  130 => 38,  125 => 35,  122 => 29,  120 => 28,  116 => 27,  113 => 26,  107 => 25,  101 => 23,  98 => 22,  94 => 21,  86 => 20,  80 => 18,  77 => 17,  74 => 16,  71 => 15,  68 => 14,  65 => 13,  62 => 12,  60 => 11,  56 => 10,  53 => 9,  47 => 8,  39 => 6,  36 => 5,  32 => 4,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html", "/home/buyersel/public_html/mt-admin/views/base.html");
    }
}
