<?php

/* @websiteWidgets/tabs/templates/default.twig.css */
class __TwigTemplate_35d19ec47f00af7e96ec6fa031a7c5b17365c53a1c61c5a201c57dfd111b3a33 extends Twig_Template
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
        $context["properties"] = call_user_func_array($this->env->getFilter('json_decode')->getCallable(), [$this->getAttribute(($context["item"] ?? null), "properties", [])]);
        // line 2
        echo "
";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generatePresetSelector", [0 => ".moto-widget-tabs", 1 => $this->getAttribute(($context["item"] ?? null), "class_name", [])], "method"), "html", null, true);
        echo " {

    ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_desktop", []), "desktop", []), 1 => ".moto-widget-tabs__header_desktop"], "method"), "html", null, true);
        echo "
    ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_mobile", []), "desktop", []), 1 => ".moto-widget-tabs__header_mobile"], "method"), "html", null, true);
        echo "
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "headers_wrapper", []), "desktop", []), 1 => ".moto-widget-tabs__headers-wrapper"], "method"), "html", null, true);
        echo "
    ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "items_wrapper", []), "desktop", []), 1 => ".moto-widget-tabs__items-wrapper"], "method"), "html", null, true);
        echo "
    ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item", []), "desktop", []), 1 => ".moto-widget-tabs__item"], "method"), "html", null, true);
        echo "
    ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "content", []), "desktop", []), 1 => ".moto-widget-tabs__content"], "method"), "html", null, true);
        echo "

    ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header", []), "desktop", []), "base", []), 1 => ".moto-widget-tabs__header"], "method"), "html", null, true);
        echo "
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_title", []), "desktop", []), "base", []), 1 => ".moto-widget-tabs__header-title"], "method"), "html", null, true);
        echo "
    ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_icon", []), "desktop", []), "base", []), 1 => ".moto-widget-tabs__header-icon"], "method"), "html", null, true);
        echo "

    @media screen and (max-width: @const_media_tablet_max_width) {
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_desktop", []), "tablet", []), 1 => ".moto-widget-tabs__header_desktop"], "method"), "html", null, true);
        echo "
        ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_mobile", []), "tablet", []), 1 => ".moto-widget-tabs__header_mobile"], "method"), "html", null, true);
        echo "
        ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "headers_wrapper", []), "tablet", []), 1 => ".moto-widget-tabs__headers-wrapper"], "method"), "html", null, true);
        echo "
        ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "items_wrapper", []), "tablet", []), 1 => ".moto-widget-tabs__items-wrapper"], "method"), "html", null, true);
        echo "
        ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item", []), "tablet", []), 1 => ".moto-widget-tabs__item"], "method"), "html", null, true);
        echo "
        ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "content", []), "tablet", []), 1 => ".moto-widget-tabs__content"], "method"), "html", null, true);
        echo "

        ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header", []), "tablet", []), "base", []), 1 => ".moto-widget-tabs__header"], "method"), "html", null, true);
        echo "
        ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_title", []), "tablet", []), "base", []), 1 => ".moto-widget-tabs__header-title"], "method"), "html", null, true);
        echo "
        ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_icon", []), "tablet", []), "base", []), 1 => ".moto-widget-tabs__header-icon"], "method"), "html", null, true);
        echo "
    }
    @media screen and (max-width: @const_media_mobile-h_max_width) {
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_desktop", []), "mobile-h", [], "array"), 1 => ".moto-widget-tabs__header_desktop"], "method"), "html", null, true);
        echo "
        ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_mobile", []), "mobile-h", [], "array"), 1 => ".moto-widget-tabs__header_mobile"], "method"), "html", null, true);
        echo "
        ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "headers_wrapper", []), "mobile-h", [], "array"), 1 => ".moto-widget-tabs__headers-wrapper"], "method"), "html", null, true);
        echo "
        ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "items_wrapper", []), "mobile-h", [], "array"), 1 => ".moto-widget-tabs__items-wrapper"], "method"), "html", null, true);
        echo "
        ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item", []), "mobile-h", [], "array"), 1 => ".moto-widget-tabs__item"], "method"), "html", null, true);
        echo "
        ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "content", []), "mobile-h", [], "array"), 1 => ".moto-widget-tabs__content"], "method"), "html", null, true);
        echo "

        ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header", []), "mobile-h", [], "array"), "base", []), 1 => ".moto-widget-tabs__header"], "method"), "html", null, true);
        echo "
        ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_title", []), "mobile-h", [], "array"), "base", []), 1 => ".moto-widget-tabs__header-title"], "method"), "html", null, true);
        echo "
        ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_icon", []), "mobile-h", [], "array"), "base", []), 1 => ".moto-widget-tabs__header-icon"], "method"), "html", null, true);
        echo "
    }
    @media screen and (max-width: @const_media_mobile-v_max_width) {
        ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_desktop", []), "mobile-v", [], "array"), 1 => ".moto-widget-tabs__header_desktop"], "method"), "html", null, true);
        echo "
        ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_mobile", []), "mobile-v", [], "array"), 1 => ".moto-widget-tabs__header_mobile"], "method"), "html", null, true);
        echo "
        ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "headers_wrapper", []), "mobile-v", [], "array"), 1 => ".moto-widget-tabs__headers-wrapper"], "method"), "html", null, true);
        echo "
        ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "items_wrapper", []), "mobile-v", [], "array"), 1 => ".moto-widget-tabs__items-wrapper"], "method"), "html", null, true);
        echo "
        ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "item", []), "mobile-v", [], "array"), 1 => ".moto-widget-tabs__item"], "method"), "html", null, true);
        echo "
        ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute(($context["properties"] ?? null), "content", []), "mobile-v", [], "array"), 1 => ".moto-widget-tabs__content"], "method"), "html", null, true);
        echo "

        ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header", []), "mobile-v", [], "array"), "base", []), 1 => ".moto-widget-tabs__header"], "method"), "html", null, true);
        echo "
        ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_title", []), "mobile-v", [], "array"), "base", []), 1 => ".moto-widget-tabs__header-title"], "method"), "html", null, true);
        echo "
        ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_icon", []), "mobile-v", [], "array"), "base", []), 1 => ".moto-widget-tabs__header-icon"], "method"), "html", null, true);
        echo "
    }

    .moto-widget-tabs__header:hover {
        ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header", []), "desktop", []), "hover", [])], "method"), "html", null, true);
        echo "
        ";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_title", []), "desktop", []), "hover", []), 1 => ".moto-widget-tabs__header-title"], "method"), "html", null, true);
        echo "
        ";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_icon", []), "desktop", []), "hover", []), 1 => ".moto-widget-tabs__header-icon"], "method"), "html", null, true);
        echo "
    }

    .moto-widget-tabs__header.moto-widget-tabs__header_opened {
        ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_opened", []), "desktop", []), "base", [])], "method"), "html", null, true);
        echo "
        ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_title_opened", []), "desktop", []), "base", []), 1 => ".moto-widget-tabs__header-title"], "method"), "html", null, true);
        echo "
        ";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_icon_opened", []), "desktop", []), "base", []), 1 => ".moto-widget-tabs__header-icon"], "method"), "html", null, true);
        echo "
        @media screen and (max-width: @const_media_tablet_max_width) {
            ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_opened", []), "tablet", []), "base", [])], "method"), "html", null, true);
        echo "
            ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_title_opened", []), "tablet", []), "base", []), 1 => ".moto-widget-tabs__header-title"], "method"), "html", null, true);
        echo "
            ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_icon_opened", []), "tablet", []), "base", []), 1 => ".moto-widget-tabs__header-icon"], "method"), "html", null, true);
        echo "
        }
        @media screen and (max-width: @const_media_mobile-h_max_width) {
            ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_opened", []), "mobile-h", [], "array"), "base", [])], "method"), "html", null, true);
        echo "
            ";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_title_opened", []), "mobile-h", [], "array"), "base", []), 1 => ".moto-widget-tabs__header-title"], "method"), "html", null, true);
        echo "
            ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_icon_opened", []), "mobile-h", [], "array"), "base", []), 1 => ".moto-widget-tabs__header-icon"], "method"), "html", null, true);
        echo "
        }
        @media screen and (max-width: @const_media_mobile-v_max_width) {
            ";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_opened", []), "mobile-v", [], "array"), "base", [])], "method"), "html", null, true);
        echo "
            ";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_title_opened", []), "mobile-v", [], "array"), "base", []), 1 => ".moto-widget-tabs__header-title"], "method"), "html", null, true);
        echo "
            ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_icon_opened", []), "mobile-v", [], "array"), "base", []), 1 => ".moto-widget-tabs__header-icon"], "method"), "html", null, true);
        echo "
        }
        &:hover {
            ";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_opened", []), "desktop", []), "hover", [])], "method"), "html", null, true);
        echo "
            ";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_title_opened", []), "desktop", []), "hover", []), 1 => ".moto-widget-tabs__header-title"], "method"), "html", null, true);
        echo "
            ";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_icon_opened", []), "desktop", []), "hover", []), 1 => ".moto-widget-tabs__header-icon"], "method"), "html", null, true);
        echo "
        }
    }

    ";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "headers_wrapper_vertical", []), "desktop", []), "base", []), 1 => "&.moto-widget-tabs_type-vertical .moto-widget-tabs__headers-wrapper"], "method"), "html", null, true);
        echo "
    ";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_desktop_vertical", []), "desktop", []), "base", []), 1 => "&.moto-widget-tabs_type-vertical .moto-widget-tabs__header_desktop"], "method"), "html", null, true);
        echo "
    @media screen and (max-width: @const_media_tablet_max_width) {
        ";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "headers_wrapper_vertical", []), "tablet", []), "base", []), 1 => ".moto-widget-tabs__header-title .moto-widget-tabs__headers-wrapper"], "method"), "html", null, true);
        echo "
        ";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_desktop_vertical", []), "tablet", []), "base", []), 1 => ".moto-widget-tabs__header-title .moto-widget-tabs__header_desktop"], "method"), "html", null, true);
        echo "
    }
    @media screen and (max-width: @const_media_mobile-h_max_width) {
        ";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "headers_wrapper_vertical", []), "mobile-h", [], "array"), "base", []), 1 => ".moto-widget-tabs__header-title .moto-widget-tabs__headers-wrapper"], "method"), "html", null, true);
        echo "
        ";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_desktop_vertical", []), "mobile-h", [], "array"), "base", []), 1 => ".moto-widget-tabs__header-title .moto-widget-tabs__header_desktop"], "method"), "html", null, true);
        echo "
    }
    @media screen and (max-width: @const_media_mobile-v_max_width) {
        ";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "headers_wrapper_vertical", []), "mobile-v", [], "array"), "base", []), 1 => ".moto-widget-tabs__header-title .moto-widget-tabs__headers-wrapper"], "method"), "html", null, true);
        echo "
        ";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute(($context["StyleHelper"] ?? null), "generateLessFromArray", [0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "header_desktop_vertical", []), "mobile-v", [], "array"), "base", []), 1 => ".moto-widget-tabs__header-title .moto-widget-tabs__header_desktop"], "method"), "html", null, true);
        echo "
    }

    .moto-widget-tabs__header_desktop:last-child,
    .moto-widget-tabs__header-icon:last-child,
    .moto-widget-tabs__headers-wrapper_icon-right .moto-widget-tabs__header-icon,
    .moto-widget-tabs__headers-wrapper_icon-right + .moto-widget-tabs__items-wrapper .moto-widget-tabs__header-icon,
    &.moto-widget-tabs_type-vertical .moto-widget-tabs__header_desktop,
    &.moto-widget-tabs_type-vertical_right .moto-widget-tabs__headers-wrapper {
        margin-right: 0;
    }

    .moto-widget-tabs__headers-wrapper_icon-left .moto-widget-tabs__header-icon,
    .moto-widget-tabs__headers-wrapper_icon-left + .moto-widget-tabs__items-wrapper .moto-widget-tabs__header-icon,
    &.moto-widget-tabs_type-vertical_left .moto-widget-tabs__headers-wrapper {
        margin-left: 0;
    }

    .moto-widget-tabs__item:last-child,
    &.moto-widget-tabs_type-vertical .moto-widget-tabs__headers-wrapper,
    &.moto-widget-tabs_type-vertical .moto-widget-tabs__header_desktop:last-child {
        margin-bottom: 0;
    }

    ";
        // line 121
        if ($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "extra", []), "stickyHeaders", [])) {
            // line 122
            echo "    &.moto-widget-tabs_type-horizontal {
        .moto-widget-tabs__headers-wrapper {
            margin-bottom: -";
            // line 124
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "content", []), "desktop", []), "base", []), "border-top-width", [], "array"), "html", null, true);
            echo ";
        }
    }
    &.moto-widget-tabs_type-vertical_left {
        .moto-widget-tabs__headers-wrapper {
            margin-right: -";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "content", []), "desktop", []), "base", []), "border-left-width", [], "array"), "html", null, true);
            echo ";
        }
    }
    &.moto-widget-tabs_type-vertical_right {
        .moto-widget-tabs__headers-wrapper {
            margin-left: -";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "content", []), "desktop", []), "base", []), "border-right-width", [], "array"), "html", null, true);
            echo ";
        }
    }
    .moto-widget-tabs__header.moto-widget-tabs__header_opened {
        @media screen and (max-width: @const_media_mobile-h_max_width) {
            margin-bottom: -";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "content", []), "desktop", []), "base", []), "border-top-width", [], "array"), "html", null, true);
            echo ";
        }
    }
    ";
        } elseif (        // line 142
($context["isPreview"] ?? null)) {
            // line 143
            echo "    /* very very very bad fix of MOTOCMS-6931 */
    /* created improvement MOTOCMS-6960 */
    &.moto-widget-tabs_type-horizontal {
        .moto-widget-tabs__headers-wrapper {
            margin-bottom: ";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["properties"] ?? null), "headers_wrapper", []), "desktop", []), "base", []), "margin-bottom", [], "array"), "html", null, true);
            echo ";
        }
    }
    ";
        }
        // line 151
        echo "}
";
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/tabs/templates/default.twig.css";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 151,  375 => 147,  369 => 143,  367 => 142,  361 => 139,  353 => 134,  345 => 129,  337 => 124,  333 => 122,  331 => 121,  304 => 97,  300 => 96,  294 => 93,  290 => 92,  284 => 89,  280 => 88,  275 => 86,  271 => 85,  264 => 81,  260 => 80,  256 => 79,  250 => 76,  246 => 75,  242 => 74,  236 => 71,  232 => 70,  228 => 69,  222 => 66,  218 => 65,  214 => 64,  209 => 62,  205 => 61,  201 => 60,  194 => 56,  190 => 55,  186 => 54,  179 => 50,  175 => 49,  171 => 48,  166 => 46,  162 => 45,  158 => 44,  154 => 43,  150 => 42,  146 => 41,  140 => 38,  136 => 37,  132 => 36,  127 => 34,  123 => 33,  119 => 32,  115 => 31,  111 => 30,  107 => 29,  101 => 26,  97 => 25,  93 => 24,  88 => 22,  84 => 21,  80 => 20,  76 => 19,  72 => 18,  68 => 17,  62 => 14,  58 => 13,  54 => 12,  49 => 10,  45 => 9,  41 => 8,  37 => 7,  33 => 6,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/tabs/templates/default.twig.css", "/home/buyersel/public_html/mt-includes/widgets/tabs/templates/default.twig.css");
    }
}
