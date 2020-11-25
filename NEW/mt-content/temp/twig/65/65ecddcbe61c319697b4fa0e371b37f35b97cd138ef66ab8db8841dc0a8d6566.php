<?php

/* base.html.twig */
class __TwigTemplate_2c56ddc9f55dc78ebdb12e2b0c84c231ef58d025a4d7b7b31aeb3de04f2619e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            '__internal_04a4a08d6f4c80400427bda814f06232f9fa43c37c7e96544a2cf6ff13383e12' => [$this, 'block___internal_04a4a08d6f4c80400427bda814f06232f9fa43c37c7e96544a2cf6ff13383e12'],
            '__internal_336f804a3ff374c05c4485410044db9087192085be339d1abdc38e88d4dd383e' => [$this, 'block___internal_336f804a3ff374c05c4485410044db9087192085be339d1abdc38e88d4dd383e'],
            'css' => [$this, 'block_css'],
            'content' => [$this, 'block_content'],
            '__internal_aaf3596b2db0c81d8c5f6872843b2786f022cb69695a39ebcb71343c5f1f847a' => [$this, 'block___internal_aaf3596b2db0c81d8c5f6872843b2786f022cb69695a39ebcb71343c5f1f847a'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["ContentHelper"] = $this->loadTemplate("macros/helper.html.twig", "base.html.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentPage"] ?? null), "getContentLocale", [], "method"), "html", null, true);
        echo "\" ";
        if ( !($context["isPreview"] ?? null)) {
            echo "data-ng-app=\"website\"";
        }
        echo ">
<head>
    ";
        // line 5
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("head.top");
        echo "
    ";
        // line 6
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("website.head.top");
        echo "
    ";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 25
        echo "
    ";
        // line 26
        $this->displayBlock('css', $context, $blocks);
        // line 34
        echo "
    ";
        // line 35
        if ( !($context["isPreview"] ?? null)) {
            // line 36
            echo "
    ";
            // line 37
            if ($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "google_tag_manager", []), "id", [])) {
                // line 38
                echo "        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','";
                // line 43
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "google_tag_manager", []), "id", [])), "html", null, true);
                echo "');</script>
        <!-- End Google Tag Manager -->
    ";
            }
            // line 46
            echo "
    ";
            // line 47
            if ($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "google_analytics", []), "id", [])) {
                // line 48
                echo "        <script type=\"text/javascript\" data-cfasync=\"false\">
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', '";
                // line 54
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "google_analytics", []), "id", [])), "html", null, true);
                echo "', 'auto');
            ";
                // line 55
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "google_analytics", []), "options", []), "anonymize_ip", [])) {
                    echo "ga('set', 'anonymizeIp', true);";
                }
                // line 56
                echo "            ga('send', 'pageview');

        </script>
    ";
            }
            // line 60
            echo "
    ";
            // line 61
            if ($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "facebook_pixel", []), "id", [])) {
                // line 62
                echo "        <!-- Facebook Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '";
                // line 70
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "facebook_pixel", []), "id", [])), "html", null, true);
                echo "');
        fbq('track', 'PageView');
        </script>
        <noscript><img height=\"1\" width=\"1\" style=\"display:none\" src=\"https://www.facebook.com/tr?id=";
                // line 73
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "facebook_pixel", []), "id", [])), "html", null, true);
                echo "&ev=PageView&noscript=1\" /></noscript>
        <!-- End Facebook Pixel Code -->
    ";
            }
            // line 76
            echo "
    ";
            // line 77
            if ($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "yandex_metrica_counter", []), "id", [])) {
                // line 78
                echo "        <script type=\"text/javascript\" data-cfasync=\"false\">
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function () {
                    try {
                        w.yaCounter";
                // line 82
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "yandex_metrica_counter", []), "id", [])), "html", null, true);
                echo " = new Ya.Metrika({
                            id: ";
                // line 83
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "yandex_metrica_counter", []), "id", [])), "html", null, true);
                echo ",
                            clickmap: true,
                            trackLinks: true,
                            accurateTrackBounce: true
                            ";
                // line 87
                if ($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "yandex_metrica_counter", []), "webvisor", [])) {
                    echo ",webvisor: true ";
                }
                // line 88
                echo "                            ";
                if ($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "yandex_metrica_counter", []), "track_hash", [])) {
                    echo ",trackHash: true ";
                }
                echo "});
                    } catch (e) {
                    }
                });
                var n = d.getElementsByTagName(\"script\")[0], s = d.createElement(\"script\"), f = function () {
                    n.parentNode.insertBefore(s, n);
                };
                s.type = \"text/javascript\";
                s.async = true;
                s.src = \"https://mc.yandex.ru/metrika/watch.js\";
                if (w.opera == \"[object Opera]\") {
                    d.addEventListener(\"DOMContentLoaded\", f, false);
                } else {
                    f();
                }
            })(document, window, \"yandex_metrika_callbacks\");
        </script>
        <noscript>
            <div><img src=\"https://mc.yandex.ru/watch/";
                // line 106
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["WEBSITE"] ?? null), "yandex_metrica_counter_id", [])), "html", null, true);
                echo "\" style=\"position:absolute; left:-9999px;\" alt=\"\"/></div>
        </noscript>
    ";
            }
            // line 109
            echo "
    ";
        }
        // line 111
        echo "
    ";
        // line 112
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("website.head.bottom");
        echo "
    ";
        // line 113
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("head.bottom");
        echo "
    ";
        // line 114
        echo $this->getAttribute(($context["currentPage"] ?? null), "getCodeInjection", [0 => "header"], "method");
        echo "
</head>
<body class=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentPage"] ?? null), "getBackgroundClass", [0 => "moto-background"], "method"), "html", null, true);
        if (($context["isPreview"] ?? null)) {
            echo " moto-preview moto-preview-overlay";
        } else {
            echo " moto-website_live";
        }
        echo "\"";
        if ($this->getAttribute(($context["currentPage"] ?? null), "getContentDirection", [], "method")) {
            echo " dir=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["currentPage"] ?? null), "getContentDirection", [], "method"), "html", null, true);
            echo "\"";
        }
        echo ">
    ";
        // line 117
        if ($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "google_tag_manager", []), "id", [])) {
            // line 118
            echo "        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=";
            // line 119
            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "google_tag_manager", []), "id", [])), "html", null, true);
            echo "\"
        height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    ";
        }
        // line 123
        echo "    ";
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("body.top");
        echo "
    ";
        // line 124
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("website.body.top");
        echo "
    ";
        // line 125
        echo call_user_func_array($this->env->getFilter('page_html_content')->getCallable(), [$this->env,         $this->renderBlock("__internal_aaf3596b2db0c81d8c5f6872843b2786f022cb69695a39ebcb71343c5f1f847a", $context, $blocks), ($context["currentPage"] ?? null), "@body:content"]);
        // line 128
        echo "    ";
        if ($this->getAttribute(($context["WEBSITE"] ?? null), "back_to_top_button", [])) {
            // line 129
            echo "        ";
            $this->loadTemplate("@websiteWidgets/back_to_top/templates/base.html.twig", "base.html.twig", 129)->display($context);
            // line 130
            echo "    ";
        }
        // line 131
        echo "    ";
        if (((($context["MotoCallback"] ?? null) && $this->getAttribute(($context["MotoCallback"] ?? null), "isAllowOnPage", [0 => ($context["currentPage"] ?? null)], "method")) || ($context["isPreview"] ?? null))) {
            // line 132
            echo "        ";
            $this->loadTemplate("@websiteWidgets/moto_callback/templates/base.html.twig", "base.html.twig", 132)->display($context);
            // line 133
            echo "    ";
        }
        // line 134
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "cookie_notification", []), "enabled", []) || ($context["isPreview"] ?? null))) {
            // line 135
            echo "        <div class=\"moto-cookie-notification\" data-content-hash=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "cookie_notification", []), "content_hash", []), "html", null, true);
            echo "\">
            ";
            // line 136
            if ((twig_in_filter("close", $this->getAttribute($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "cookie_notification", []), "controls", []), "visible", [])) ||  !$this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "cookie_notification", [], "any", false, true), "controls", [], "any", true, true))) {
                // line 137
                echo "            <button type=\"button\" class=\"moto-cookie-notification__button_close\" ng-click=\"closeNotification()\"><span class=\"fa fa-close\"></span></button>
            ";
            }
            // line 139
            echo "            <div class=\"moto-cookie-notification__container\">
                <div class=\"moto-cookie-notification__content moto-widget-text\">
                    ";
            // line 141
            $this->loadTemplate(twig_template_from_string($this->env, $this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "cookie_notification", []), "content", [])), "base.html.twig", 141)->display($context);
            // line 142
            echo "                </div>
                ";
            // line 143
            if (twig_in_filter("accept", $this->getAttribute($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "cookie_notification", []), "controls", []), "visible", []))) {
                // line 144
                echo "                <div class=\"moto-cookie-notification__accept-button moto-widget moto-widget-button moto-align-center moto-preset-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "cookie_notification", []), "controls", []), "accept", []), "preset", []), "html", null, true);
                echo "\">
                    <a href=\"#\" class=\"moto-widget-button-link moto-size-";
                // line 145
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "cookie_notification", []), "controls", []), "accept", []), "size", []), "html", null, true);
                echo "\" ng-click=\"closeNotification(";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "cookie_notification", []), "controls", []), "accept", []), "cookie_lifetime", []), "html", null, true);
                echo ")\">
                        <span class=\"fa moto-widget-theme-icon\"></span>
                        <span class=\"moto-widget-button-label\">";
                // line 147
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["WEBSITE"] ?? null), "cookie_notification", []), "controls", []), "accept", []), "label", []), "html", null, true);
                echo "</span>
                    </a>
                </div>
                ";
            }
            // line 151
            echo "            </div>
        </div>
    ";
        }
        // line 154
        echo "    ";
        $this->displayBlock('js', $context, $blocks);
        // line 190
        echo "    ";
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("website.body.bottom");
        echo "
    ";
        // line 191
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("body.bottom");
        echo "
    ";
        // line 192
        echo $this->getAttribute(($context["currentPage"] ?? null), "getCodeInjection", [0 => "footer"], "method");
        echo "
</body>
</html>";
    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        // line 8
        echo "        <meta charset=\"utf-8\">
        <title>";
        // line 9
        if ($this->getAttribute(($context["WEBSITE"] ?? null), "title_format", [])) {
            echo call_user_func_array($this->env->getFilter('page_html_content')->getCallable(), [$this->env,             $this->renderBlock("__internal_04a4a08d6f4c80400427bda814f06232f9fa43c37c7e96544a2cf6ff13383e12", $context, $blocks), ($context["page"] ?? null), "@head:title"]);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["currentPage"] ?? null), "title", []), "html", null, true);
        }
        echo "</title>
        ";
        // line 10
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->pageFavicon();
        echo "
        ";
        // line 11
        echo call_user_func_array($this->env->getFilter('page_html_content')->getCallable(), [$this->env,         $this->renderBlock("__internal_336f804a3ff374c05c4485410044db9087192085be339d1abdc38e88d4dd383e", $context, $blocks), ($context["page"] ?? null), "@head:seo_meta_tags"]);
        // line 16
        echo "        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        ";
        // line 18
        if ($this->getAttribute(($context["WEBSITE"] ?? null), "google_webmaster_tools_tag", [])) {
            // line 19
            echo "            <meta name=\"google-site-verification\" content=\"";
            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["WEBSITE"] ?? null), "google_webmaster_tools_tag", [])), "html", null, true);
            echo "\"/>
        ";
        }
        // line 21
        echo "        ";
        if ($this->getAttribute(($context["WEBSITE"] ?? null), "yandex_webmaster_code", [])) {
            // line 22
            echo "            <meta name=\"yandex-verification\" content=\"";
            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["WEBSITE"] ?? null), "yandex_webmaster_code", [])), "html", null, true);
            echo "\"/>
        ";
        }
        // line 24
        echo "    ";
    }

    // line 9
    public function block___internal_04a4a08d6f4c80400427bda814f06232f9fa43c37c7e96544a2cf6ff13383e12($context, array $blocks = [])
    {
        $this->loadTemplate(twig_template_from_string($this->env, $this->getAttribute(($context["WEBSITE"] ?? null), "title_format", [])), "base.html.twig", 9)->display($context);
    }

    // line 11
    public function block___internal_336f804a3ff374c05c4485410044db9087192085be339d1abdc38e88d4dd383e($context, array $blocks = [])
    {
        // line 12
        echo "            ";
        // line 13
        echo "                ";
        echo $this->getAttribute(($context["currentPage"] ?? null), "getSeoHtml", [], "method");
        echo "
            ";
        // line 15
        echo "        ";
    }

    // line 26
    public function block_css($context, array $blocks = [])
    {
        // line 27
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->getFileUrl("@systemIncludes/css/assets.min.css", true), "html", null, true);
        echo "\"/>
        <style>";
        // line 28
        echo $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->getFileContent("@userFontsFile");
        echo "</style>
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->getFileUrl("@userStylesFile"), "html", null, true);
        echo "\" id=\"moto-website-style\"/>
        ";
        // line 30
        if (($context["isPreview"] ?? null)) {
            // line 31
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->getFileUrl("@editorStyles/editor.min.css"), "html", null, true);
            echo "\" />
        ";
        }
        // line 33
        echo "    ";
    }

    // line 126
    public function block_content($context, array $blocks = [])
    {
    }

    // line 125
    public function block___internal_aaf3596b2db0c81d8c5f6872843b2786f022cb69695a39ebcb71343c5f1f847a($context, array $blocks = [])
    {
        // line 126
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 127
        echo "    ";
    }

    // line 154
    public function block_js($context, array $blocks = [])
    {
        // line 155
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->getFileUrl("@systemIncludes/js/website.assets.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" data-cfasync=\"false\"></script>
    <script type=\"text/javascript\" data-cfasync=\"false\">
        var websiteConfig = websiteConfig || {};
        websiteConfig.address = '";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute(($context["WEBSITE"] ?? null), "address", []), "html", null, true);
        echo "';
        websiteConfig.addressHash = '";
        // line 159
        echo twig_escape_filter($this->env, ($context["WEBSITE_ADDRESS_HASH"] ?? null), "html", null, true);
        echo "';
        websiteConfig.apiUrl = '";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute(($context["Linker"] ?? null), "relativeUrl", [0 => "@website/api.php"], "method"), "html", null, true);
        echo "';
        websiteConfig.preferredLocale = '";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute(($context["WEBSITE"] ?? null), "language_locale", []), "html", null, true);
        echo "';
        websiteConfig.preferredLanguage = websiteConfig.preferredLocale.substring(0, 2);
        ";
        // line 163
        if ($this->getAttribute(($context["WEBSITE"] ?? null), "back_to_top_button", [])) {
            // line 164
            echo "        websiteConfig.back_to_top_button = ";
            echo twig_jsonencode_filter($this->getAttribute(($context["WEBSITE"] ?? null), "back_to_top_button", []));
            echo ";
        ";
        }
        // line 166
        echo "        websiteConfig.popup_preferences = ";
        echo twig_jsonencode_filter($this->getAttribute(($context["WEBSITE"] ?? null), "popup_preferences", []));
        echo ";
        websiteConfig.lazy_loading = ";
        // line 167
        echo twig_jsonencode_filter($this->getAttribute(($context["WEBSITE"] ?? null), "lazy_loading", []));
        echo ";
        websiteConfig.cookie_notification = ";
        // line 168
        echo twig_jsonencode_filter($this->getAttribute(($context["WEBSITE"] ?? null), "cookie_notification", []));
        echo ";
        ";
        // line 169
        if ((($context["LiveChat"] ?? null) && $this->getAttribute(($context["LiveChat"] ?? null), "isAllowOnPage", [0 => ($context["currentPage"] ?? null)], "method"))) {
            // line 170
            echo "        angular.module('website.LiveChat.settings', ['ng']).constant('website.LiveChat.settings',  ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["LiveChat"] ?? null), "exportFrontendSettings", [], "method"), "html", null, true);
            echo ");
        ";
        }
        // line 172
        echo "        angular.module('website.plugins', ";
        echo twig_jsonencode_filter($this->env->getExtension('Moto\Twig\Extension\AssetExtension')->renderHook("website.application.plugins", []));
        echo ");
    </script>
    <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->getFileUrl("@systemIncludes/js/website.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\" data-cfasync=\"false\"></script>
    ";
        // line 175
        if (($context["GOOGLE_MAP_API_KEY"] ?? null)) {
            // line 176
            echo "    <script type=\"text/javascript\">\$.fn.motoGoogleMap.setApiKey('";
            echo twig_escape_filter($this->env, ($context["GOOGLE_MAP_API_KEY"] ?? null), "html", null, true);
            echo "');</script>
    ";
        }
        // line 178
        echo "    ";
        if (($context["isPreview"] ?? null)) {
            // line 179
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Moto\Twig\Extension\AssetExtension')->getFileUrl("@editorApplication/editor.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\" data-cfasync=\"false\"></script>
        <script type=\"text/javascript\" data-cfasync=\"false\">
            var widgetCacheOptions = {};
            try {
                ";
            // line 183
            echo $this->env->getExtension('Moto\Twig\Extension\WidgetsExtension')->exportFrontendWidgetProperties();
            echo "
            } catch (e) {
            }
        </script>
        <div class=\"moto-editor__content-overlay\"></div>
    ";
        }
        // line 189
        echo "    ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  534 => 189,  525 => 183,  517 => 179,  514 => 178,  508 => 176,  506 => 175,  502 => 174,  496 => 172,  490 => 170,  488 => 169,  484 => 168,  480 => 167,  475 => 166,  469 => 164,  467 => 163,  462 => 161,  458 => 160,  454 => 159,  450 => 158,  443 => 155,  440 => 154,  436 => 127,  433 => 126,  430 => 125,  425 => 126,  421 => 33,  415 => 31,  413 => 30,  409 => 29,  405 => 28,  400 => 27,  397 => 26,  393 => 15,  388 => 13,  386 => 12,  383 => 11,  377 => 9,  373 => 24,  367 => 22,  364 => 21,  358 => 19,  356 => 18,  352 => 16,  350 => 11,  346 => 10,  338 => 9,  335 => 8,  332 => 7,  325 => 192,  321 => 191,  316 => 190,  313 => 154,  308 => 151,  301 => 147,  294 => 145,  289 => 144,  287 => 143,  284 => 142,  282 => 141,  278 => 139,  274 => 137,  272 => 136,  267 => 135,  264 => 134,  261 => 133,  258 => 132,  255 => 131,  252 => 130,  249 => 129,  246 => 128,  244 => 125,  240 => 124,  235 => 123,  228 => 119,  225 => 118,  223 => 117,  208 => 116,  203 => 114,  199 => 113,  195 => 112,  192 => 111,  188 => 109,  182 => 106,  158 => 88,  154 => 87,  147 => 83,  143 => 82,  137 => 78,  135 => 77,  132 => 76,  126 => 73,  120 => 70,  110 => 62,  108 => 61,  105 => 60,  99 => 56,  95 => 55,  91 => 54,  83 => 48,  81 => 47,  78 => 46,  72 => 43,  65 => 38,  63 => 37,  60 => 36,  58 => 35,  55 => 34,  53 => 26,  50 => 25,  48 => 7,  44 => 6,  40 => 5,  31 => 3,  28 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/home/buyersel/public_html/NEW/mt-includes/templates/base.html.twig");
    }
}
