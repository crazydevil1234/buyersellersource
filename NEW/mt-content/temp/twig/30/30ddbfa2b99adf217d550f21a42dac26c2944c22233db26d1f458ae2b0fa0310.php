<?php

/* layouts/default.html */
class __TwigTemplate_19afdf2511c346dc86d2c88359cfad738946d7db1058a7c6d640bfa81b438b7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "layouts/default.html", 1);
        $this->blocks = [
            'head' => [$this, 'block_head'],
            'css' => [$this, 'block_css'],
            'js' => [$this, 'block_js'],
            'content' => [$this, 'block_content'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        // line 4
        echo "    <meta charset=\"utf-8\">

    <title ng-bind-template=\"";
        // line 6
        echo "{{";
        echo "pageTitle";
        echo "}}";
        echo " - ";
        echo "{{'BRAND.CONTROL_PANEL.NAME'|translate}}";
        echo "\">Control Panel</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\"/>
    <meta name=\"viewport\" viewport-initial-scale content=\"width=device-width, initial-scale=1\">
    <meta name=\"robots\" content=\"noindex,nofollow\">
    <link rel=\"shortcut icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->getFileUrl($this->getAttribute(($context["BRAND"] ?? null), "getMediaPath", [0 => "favicon.ico"], "method"), true), "html", null, true);
        echo "\" type=\"image/x-icon\" />
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->getFileUrl("@systemIncludes/css/font-awesome.min.css", true), "html", null, true);
        echo "\" />
";
    }

    // line 16
    public function block_css($context, array $blocks = [])
    {
        // line 17
        echo "    <link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,600,700&subset=latin,cyrillic\" rel=\"stylesheet\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->getFileUrl("@systemAssets/assets.min.css", true), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->getFileUrl("@adminStyles/style.css", true), "html", null, true);
        echo "\" />
<style>
    .spinner-icon {
        background-image: url(";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->getFileUrl($this->getAttribute(($context["BRAND"] ?? null), "getMediaPath", [0 => "loader.gif"], "method"), true), "html", null, true);
        echo ");
    }
    #loading-bar-spinner {
        ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["BRAND"] ?? null), "getStyle", [0 => "cp_loading_backdrop", 1 => "background: rgba(0, 0, 0, .15);"], "method"), "html", null, true);
        echo "
    }
    #loading-bar .bar {
        ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["BRAND"] ?? null), "getStyle", [0 => "cp_loading_bar", 1 => "background: #ff9000; height: 2px;"], "method"), "html", null, true);
        echo "
    }
    .dashboard-block {
        ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["BRAND"] ?? null), "getStyle", [0 => "cp_dashboard.background", 1 => (("background-image: url(" . $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->getFileUrl("@adminImages/bg.jpg", true)) . ")")], "method"), "html", null, true);
        echo "
    }
    .dashboard-welcome {
        ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["BRAND"] ?? null), "getStyle", [0 => "cp_dashboard.welcome_text", 1 => "color: #fff"], "method"), "html", null, true);
        echo "
    }
    .btn-brand__dashboard {
        ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["BRAND"] ?? null), "getStyle", [0 => "cp_dashboard.buttons.normal"], "method"), "html", null, true);
        echo "
    }
    .btn-brand__dashboard:hover, .btn-brand__dashboard:active, .btn-brand__dashboard:focus {
        ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["BRAND"] ?? null), "getStyle", [0 => "cp_dashboard.buttons.hover", 1 => $this->getAttribute(($context["BRAND"] ?? null), "getStyle", [0 => "cp_dashboard.buttons.normal"], "method")], "method"), "html", null, true);
        echo "
    }
</style>
";
    }

    // line 46
    public function block_js($context, array $blocks = [])
    {
        // line 47
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->getFileUrl("@systemAssets/assets.min.js", true), "html", null, true);
        echo "\" type=\"text/javascript\" data-cfasync=\"false\"></script>
";
    }

    // line 50
    public function block_content($context, array $blocks = [])
    {
        // line 51
        echo "        <div ng-show=\"loader.status()\">
            <div class=\"loader\"></div>
            ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["loader"] ?? null), "message", [], "method"), "html", null, true);
        echo "
        </div>
        <div class=\"moto-ui-notification-panel dark-ui moto-ui-notification-panel_ie-warning\" ng-cloak>
            <p class=\"moto-ui-notification-panel-message h6 text-center\">";
        // line 56
        echo "{{::'COMMON.TEXT.BROWSER_NOT_SUPPORTED_MESSAGE'|translate}}";
        echo "</p>
        </div>
        <div class=\"moto-ui-notification-panel dark-ui moto-ui-notification-panel_php-warning moto-ui-notification-panel_with-close-button\" ng-if=\"showPHPVersionPanel\" ng-cloak>
            <p class=\"moto-ui-notification-panel-message h6\">";
        // line 59
        echo "{{::'COMMON.TEXT.PHP_5_5_SUPPORT_EXPIRY_MESSAGE'|translate}}";
        echo "</p>
            <a href class=\"moto-ui-notification-panel-close-btn\" ng-click=\"hidePHPExpiryPanel()\">&times;</a>
        </div>
        <div class=\"moto-ui-notification-panel dark-ui moto-ui-notification-panel_utf8-warning moto-ui-notification-panel_with-close-button\" ng-if=\"showDBEncodingPanel\" ng-cloak>
            <p class=\"moto-ui-notification-panel-message h6\">";
        // line 63
        echo "{{::'COMMON.TEXT.DB_UTF8_ENCODING_SUPPORT_EXPIRY_MESSAGE'|translate}}";
        echo "</p>
            <a href class=\"moto-ui-notification-panel-close-btn\" ng-click=\"hideDBEncodingPanel()\">&times;</a>
        </div>
        <div class=\"moto-ui-notification-panel dark-ui moto-ui-notification-panel_collect-analytics-warning moto-ui-notification-panel_with-close-button moto-ui-notification-panel_with-buttons\" ng-if=\"showCollectAnalyticsPanel\" ng-cloak>
            <p class=\"moto-ui-notification-panel-message h6\" translate>COMMON.TEXT.COLLECT_ANALYTICS_MESSAGE</p>
            <div class=\"form-control-buttons\">
                <button type=\"button\" class=\"btn btn-success btn-xs\" ng-click=\"hideCollectAnalyticsPanel(true)\">";
        // line 69
        echo "{{::'COMMON.BUTTON.AGREE'|translate }}";
        echo "</button>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" ng-click=\"hideCollectAnalyticsPanel(false)\">";
        // line 70
        echo "{{::'COMMON.BUTTON.DISAGREE'|translate }}";
        echo "</button>
            </div>
            <a href class=\"moto-ui-notification-panel-close-btn\" ng-click=\"hideCollectAnalyticsPanel()\">&times;</a>
        </div>
        ";
        // line 74
        $this->displayBlock('header', $context, $blocks);
        // line 75
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
    }

    // line 74
    public function block_header($context, array $blocks = [])
    {
    }

    // line 75
    public function block_body($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "layouts/default.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 75,  185 => 74,  180 => 75,  178 => 74,  171 => 70,  167 => 69,  158 => 63,  151 => 59,  145 => 56,  139 => 53,  135 => 51,  132 => 50,  125 => 47,  122 => 46,  114 => 40,  108 => 37,  102 => 34,  96 => 31,  90 => 28,  84 => 25,  78 => 22,  72 => 19,  68 => 18,  65 => 17,  62 => 16,  56 => 12,  52 => 11,  40 => 6,  36 => 4,  33 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layouts/default.html", "/home/buyersel/public_html/mt-admin/views/layouts/default.html");
    }
}
