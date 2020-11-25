<?php

/* @websiteWidgets/contact_form/templates/default.twig.html */
class __TwigTemplate_56262bac338dec64d953138238fa350eb9ba9ddbbd2b7f0dad95ad76d8aa1007 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            '__internal_66fe566f7ef0210eb25977ad3885e1fe5ee818b80fa9ac6f23dc9e7beff3d480' => [$this, 'block___internal_66fe566f7ef0210eb25977ad3885e1fe5ee818b80fa9ac6f23dc9e7beff3d480'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["widgetId"] = $this->getAttribute(($context["currentWidget"] ?? null), "getWidgetId", [], "method");
        // line 2
        echo "<div data-widget-id=\"";
        echo twig_escape_filter($this->env, ($context["widgetId"] ?? null), "html", null, true);
        echo "\" class=\"moto-widget moto-widget-contact_form moto-preset-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "preset", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", [0 => "classes"], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getVisibleOn", [0 => "classes"], "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getAnimationClasses", [], "method"), "html", null, true);
        echo "\" data-preset=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "preset", []), "html", null, true);
        echo "\" data-widget=\"contact_form\" data-spacing=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getSpacing", [0 => "short"], "method"), "html", null, true);
        echo "\">
    ";
        // line 3
        if ($this->getAttribute(($context["currentWidget"] ?? null), "isEmpty", [], "method")) {
            // line 4
            echo "        <div class=\"moto-widget-empty\"></div>
    ";
        } else {
            // line 6
            echo "    <div ng-controller=\"widget.ContactForm.Controller\" ng-init=\"hash = '";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getProtectedHash", [], "method"), "html", null, true);
            echo "';";
            if ( !($context["isPreview"] ?? null)) {
                echo "actionAfterSubmission=";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["currentWidget"] ?? null), "getActionAfterSubmission", [], "method"), "html", null, true);
                echo ";resetAfterSubmission=";
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "resetAfterSubmission", [])), "html", null, true);
            }
            echo "\">
        ";
            // line 7
            if (($context["isPreview"] ?? null)) {
                // line 8
                echo "            <div class=\"moto-widget-cover\"></div>
        ";
            }
            // line 10
            echo "        <form class=\"moto-widget-contact_form-form\" role=\"form\" name=\"contactForm\" ng-submit=\"submit()\" novalidate>
            <div ng-show=\"sending\" class=\"contact-form-loading\"></div>

            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "fields", [])));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 14
                echo "                ";
                $context["field"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "fields", []), $context["name"], [], "array");
                // line 15
                echo "                ";
                $context["name"] = (($this->getAttribute(($context["field"] ?? null), "name", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "name", []), $context["name"])) : ($context["name"]));
                // line 16
                echo "                ";
                if ($this->getAttribute(($context["field"] ?? null), "enabled", [])) {
                    // line 17
                    echo "                    ";
                    if (($this->getAttribute(($context["field"] ?? null), "tag", []) == "textarea")) {
                        // line 18
                        echo "                        <div class=\"moto-widget-contact_form-group\">
                            <label for=\"field_";
                        // line 19
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "\" class=\"moto-widget-contact_form-label\">";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder", []), "html", null, true);
                        echo "</label>
                            <textarea class=\"moto-widget-contact_form-field moto-widget-contact_form-textarea\" rows=\"3\" placeholder=\"";
                        // line 20
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder", []), "html", null, true);
                        echo " ";
                        if ($this->getAttribute(($context["field"] ?? null), "required", [])) {
                            echo "*";
                        }
                        echo "\" ";
                        if ($this->getAttribute(($context["field"] ?? null), "required", [])) {
                            echo " ng-blur=\"validate('";
                            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                            echo "')\" required ";
                        }
                        echo " ng-model-options=\"{ updateOn: 'blur' }\" name=\"";
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "\" id=\"field_";
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "\" ng-model=\"message.";
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "\"></textarea>
                            ";
                        // line 21
                        if ( !($context["isPreview"] ?? null)) {
                            // line 22
                            echo "                                <span class=\"moto-widget-contact_form-field-error ng-cloak\" ng-cloak ng-show=\"contactForm.";
                            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                            echo ".\$invalid && !contactForm.";
                            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                            echo ".\$pristine\" >";
                            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", [], "any", false, true), "messages", [], "any", false, true), "required", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", [], "any", false, true), "messages", [], "any", false, true), "required", []), "Field is required")) : ("Field is required")), "html", null, true);
                            echo "</span>
                            ";
                        }
                        // line 24
                        echo "                        </div>
                    ";
                    } elseif (($this->getAttribute(                    // line 25
($context["field"] ?? null), "type", []) == "file")) {
                        // line 26
                        echo "                        <div class=\"moto-widget-contact_form-group moto-widget-contact_form-group__attachment\">
                            <div class=\"container-fluid\">
                                <div class=\"row\">
                                    <div class=\"moto-cell col-xs-6\">
                                        <div>
                                            <input type=\"text\" class=\"moto-widget-contact_form-field moto-widget-contact_form-input\" readonly=\"readonly\" placeholder=\"\" id=\"field_";
                        // line 31
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "\" ng-model=\"attachment.name\"/>
                                        </div>
                                    </div>
                                    <div class=\"moto-cell col-xs-6\">
                                        <div class=\"moto-widget moto-widget-button moto-preset-";
                        // line 35
                        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", [], "any", false, true), "buttons", [], "any", false, true), "attachment", [], "any", false, true), "preset", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", [], "any", false, true), "buttons", [], "any", false, true), "attachment", [], "any", false, true), "preset", []), "default")) : ("default")), "html", null, true);
                        echo "\" data-preset=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "buttons", []), "attachment", []), "preset", []), "html", null, true);
                        echo "\">
                                            <button type=\"button\" ngf-select ng-model=\"attachment\" class=\"moto-widget-button-link moto-size-";
                        // line 36
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "buttons", []), "attachment", []), "size", []), "html", null, true);
                        echo "\" data-size=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "buttons", []), "attachment", []), "size", []), "html", null, true);
                        echo "\"><span class=\"fa moto-widget-theme-icon\"></span><span class=\"moto-widget-button-label\">";
                        echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "placeholder", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "placeholder", []), "Upload")) : ("Upload")), "html", null, true);
                        echo "</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
                    } elseif (($this->getAttribute(                    // line 42
($context["field"] ?? null), "type", []) == "checkbox")) {
                        // line 43
                        echo "                        <div class=\"moto-widget-contact_form-group\" ng-class=\"{'moto-widget-contact_form-group-not-valid': contactForm.checkbox.\$invalid, 'moto-widget-contact_form-checkbox-checked': message.checkbox}\">
                            <input id=\"moto-widget-contact_form-checkbox-";
                        // line 44
                        echo twig_escape_filter($this->env, ($context["widgetId"] ?? null), "html", null, true);
                        echo "\" name=\"checkbox\" ng-model=\"message.checkbox\" ng-change=\"checkboxChanged()\" type=\"checkbox\" class=\"moto-widget-contact_form-checkbox\"";
                        if ($this->getAttribute(($context["field"] ?? null), "required", [])) {
                            echo " ng-init=\"requiredCheckbox()\"";
                        }
                        echo ">
                            <label class=\"moto-widget-contact_form-checkbox-label moto-widget-contact_form-checkbox-label_type-";
                        // line 45
                        echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "labelType", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "labelType", []), "text")) : ("text")), "html", null, true);
                        echo "\" for=\"moto-widget-contact_form-checkbox-";
                        echo twig_escape_filter($this->env, ($context["widgetId"] ?? null), "html", null, true);
                        echo "\">
                                <span class=\"moto-widget-contact_form-checkbox-icon\"></span>
                                <span class=\"moto-widget-contact_form-checkbox-text ";
                        // line 47
                        if (((($this->getAttribute(($context["field"] ?? null), "labelType", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "labelType", []), "text")) : ("text")) == "text")) {
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "text_style", []), "html", null, true);
                        } else {
                            echo "moto-widget-text";
                        }
                        echo "\">";
                        echo call_user_func_array($this->env->getFilter('page_html_content')->getCallable(), [$this->env,                         $this->renderBlock("__internal_66fe566f7ef0210eb25977ad3885e1fe5ee818b80fa9ac6f23dc9e7beff3d480", $context, $blocks), ($context["item"] ?? null), "widget:contact_form.checkboxLabel"]);
                        echo "</span>
                            </label>
                        </div>
                    ";
                    } else {
                        // line 51
                        echo "                        <div class=\"moto-widget-contact_form-group\">
                            <label for=\"field_";
                        // line 52
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "\" class=\"moto-widget-contact_form-label\">";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder", []), "html", null, true);
                        echo "</label>
                            <input type=\"text\" class=\"moto-widget-contact_form-field moto-widget-contact_form-input\" placeholder=\"";
                        // line 53
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder", []), "html", null, true);
                        echo " ";
                        if ($this->getAttribute(($context["field"] ?? null), "required", [])) {
                            echo "*";
                        }
                        echo "\" ";
                        if ($this->getAttribute(($context["field"] ?? null), "required", [])) {
                            echo " ng-blur=\"validate('";
                            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                            echo "')\" required ";
                        }
                        echo " ng-model-options=\"{ updateOn: 'blur' }\" name=\"";
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "\" id=\"field_";
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "\" ng-model=\"message.";
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "\"/>
                            ";
                        // line 54
                        if ( !($context["isPreview"] ?? null)) {
                            // line 55
                            echo "                                <span class=\"moto-widget-contact_form-field-error ng-cloak\" ng-cloak ng-show=\"contactForm.";
                            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                            echo ".\$invalid && !contactForm.";
                            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                            echo ".\$pristine && !contactForm.";
                            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                            echo ".emailInvalid\" >";
                            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", [], "any", false, true), "messages", [], "any", false, true), "required", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", [], "any", false, true), "messages", [], "any", false, true), "required", []), "Field is required")) : ("Field is required")), "html", null, true);
                            echo "</span>
                                ";
                            // line 56
                            if (($this->getAttribute(($context["field"] ?? null), "type", []) == "email")) {
                                // line 57
                                echo "                                    <span class=\"moto-widget-contact_form-field-error ng-cloak\" ng-cloak ng-show=\"contactForm.";
                                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                                echo ".emailInvalid && !contactForm.";
                                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                                echo ".\$pristine\" >";
                                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", [], "any", false, true), "messages", [], "any", false, true), "invalidEmail", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", [], "any", false, true), "messages", [], "any", false, true), "invalidEmail", []), "Incorrect email")) : ("Incorrect email")), "html", null, true);
                                echo "</span>
                                ";
                            }
                            // line 59
                            echo "                            ";
                        }
                        // line 60
                        echo "                        </div>
                    ";
                    }
                    // line 62
                    echo "                ";
                }
                // line 63
                echo "
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "
            ";
            // line 66
            if ( !($context["isPreview"] ?? null)) {
                // line 67
                echo "                <div class=\"moto-widget-contact_form-success ng-cloak\" ng-cloak ng-show=\"showSuccessMessage\">
                    ";
                // line 68
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", [], "any", false, true), "messages", [], "any", false, true), "success", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", [], "any", false, true), "messages", [], "any", false, true), "success", []), "Your message was sent successfully")) : ("Your message was sent successfully")), "html", null, true);
                echo "
                </div>
                <div class=\"moto-widget-contact_form-danger ng-cloak\" ng-cloak ng-show=\"emailError\">
                    ";
                // line 71
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", [], "any", false, true), "messages", [], "any", false, true), "error", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", [], "any", false, true), "messages", [], "any", false, true), "error", []), "Sorry, your message was not sent")) : ("Sorry, your message was not sent")), "html", null, true);
                echo "
                </div>
            ";
            }
            // line 74
            echo "            <div class=\"moto-widget-contact_form-buttons\">

            ";
            // line 76
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "buttons", []), "submit", []), "preset", [])) {
                // line 77
                echo "                <div class=\"moto-widget moto-widget-button moto-preset-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "buttons", []), "submit", []), "preset", []), "html", null, true);
                echo " moto-align-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "buttons", []), "submit", []), "align", []), "html", null, true);
                echo "\" data-preset=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "buttons", []), "submit", []), "preset", []), "html", null, true);
                echo "\" data-align=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "buttons", []), "submit", []), "align", []), "html", null, true);
                echo "\">
                    <a ng-click=\"submit();\" class=\"moto-widget-button-link moto-size-";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "buttons", []), "submit", []), "size", []), "html", null, true);
                echo "\" data-size=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "buttons", []), "submit", []), "size", []), "html", null, true);
                echo "\"><span class=\"fa moto-widget-theme-icon\"></span><span class=\"moto-widget-button-label\">";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", [], "any", false, true), "buttons", [], "any", false, true), "submit", [], "any", false, true), "label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", [], "any", false, true), "buttons", [], "any", false, true), "submit", [], "any", false, true), "label", []), "Send")) : ("Send")), "html", null, true);
                echo "</span></a>
                </div>
                <button type=\"submit\" class=\"hidden\"></button>
            ";
            } else {
                // line 82
                echo "                <button type=\"submit\" class=\"moto-widget-contact_form-submit\">";
                echo twig_escape_filter($this->env, _twig_default_filter((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", [], "any", false, true), "buttons", [], "any", false, true), "submit", [], "any", false, true), "label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", [], "any", false, true), "buttons", [], "any", false, true), "submit", [], "any", false, true), "label", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "messages", []), "submitButton", []))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["currentWidget"] ?? null), "properties", []), "messages", []), "submitButton", []))), "Send"), "html", null, true);
                echo "</button>
            ";
            }
            // line 84
            echo "
            </div>
        </form>
    </div>
    ";
        }
        // line 89
        echo "</div>";
    }

    // line 47
    public function block___internal_66fe566f7ef0210eb25977ad3885e1fe5ee818b80fa9ac6f23dc9e7beff3d480($context, array $blocks = [])
    {
        $this->loadTemplate(twig_template_from_string($this->env, $this->getAttribute(($context["field"] ?? null), "label", [])), "@websiteWidgets/contact_form/templates/default.twig.html", 47)->display($context);
    }

    public function getTemplateName()
    {
        return "@websiteWidgets/contact_form/templates/default.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 47,  349 => 89,  342 => 84,  336 => 82,  325 => 78,  314 => 77,  312 => 76,  308 => 74,  302 => 71,  296 => 68,  293 => 67,  291 => 66,  288 => 65,  273 => 63,  270 => 62,  266 => 60,  263 => 59,  253 => 57,  251 => 56,  240 => 55,  238 => 54,  218 => 53,  212 => 52,  209 => 51,  196 => 47,  189 => 45,  181 => 44,  178 => 43,  176 => 42,  163 => 36,  157 => 35,  150 => 31,  143 => 26,  141 => 25,  138 => 24,  128 => 22,  126 => 21,  106 => 20,  100 => 19,  97 => 18,  94 => 17,  91 => 16,  88 => 15,  85 => 14,  68 => 13,  63 => 10,  59 => 8,  57 => 7,  45 => 6,  41 => 4,  39 => 3,  22 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@websiteWidgets/contact_form/templates/default.twig.html", "/home/buyersel/public_html/NEW/mt-includes/widgets/contact_form/templates/default.twig.html");
    }
}
