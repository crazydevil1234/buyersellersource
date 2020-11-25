<?php

/* __string_template__a814744c4986b61480cfc5ed360e1c10002e2d9e9c15dbe8237907d0834167bf */
class __TwigTemplate_a5bb45bfdd0f7343c6ec338b8f175c1f78e9c19d52095671be84829adbfa4488 extends Twig_Template
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
        echo "<div class=\"moto-widget moto-widget-row moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto\" data-grid-type=\"sm\" data-widget=\"row\" data-spacing=\"aaaa\" style=\"\" data-bg-position=\"left top\">
    
    
    <div class=\"container-fluid\">
        <div class=\"row\" data-container=\"container\">
            
                
                    <div class=\"moto-widget moto-widget-row__column moto-cell col-sm-12 moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto\" style=\"\" data-widget=\"row.column\" data-container=\"container\" data-spacing=\"aaaa\" data-bg-position=\"left top\">";
        // line 8
        echo $this->env->getExtension('Moto\Twig\Extension\WidgetsExtension')->renderWidget($this->env, ["name" => "spacer", "properties" => ["preset" => "default", "height" => "10px", "spacing" => ["top" => "medium", "right" => "auto", "bottom" => "auto", "left" => "auto"], "visible_on" => "mobile-v"], "id" => "wid_1530014743_5m5rcl1pj"]);
        echo "<div class=\"moto-widget moto-widget-text moto-preset-default moto-spacing-top-auto moto-spacing-right-auto moto-spacing-bottom-auto moto-spacing-left-auto\" data-widget=\"text\" data-preset=\"default\" data-spacing=\"aaaa\" data-animation=\"\">
    <div class=\"moto-widget-text-content moto-widget-text-editable\"><p style=\"text-align: center;\" class=\"moto-text_system_7\">Request a Callback</p><p style=\"text-align: center;\" class=\"moto-text_normal\">&nbsp;</p><p style=\"text-align: center;\" class=\"moto-text_normal\">We can call you in 30 seconds, just enter&nbsp; your number below</p></div>
</div>";
        // line 10
        echo $this->env->getExtension('Moto\Twig\Extension\WidgetsExtension')->renderWidget($this->env, ["name" => "contact_form", "properties" => ["fields" => ["name" => ["placeholder" => "Name", "enabled" => true, "required" => true, "type" => "text"], "email" => ["placeholder" => "Email", "enabled" => true, "required" => true, "type" => "email"], "phone" => ["placeholder" => "Phone", "enabled" => false, "required" => false, "type" => "text"], "address" => ["placeholder" => "Address", "enabled" => false, "required" => false, "type" => "text"], "subject" => ["placeholder" => "Subject", "enabled" => false, "required" => false, "type" => "text"], "attachment" => ["placeholder" => "Attach file", "enabled" => false, "required" => false, "type" => "file"], "message" => ["placeholder" => "Message", "enabled" => true, "required" => true, "type" => "text", "tag" => "textarea"], "checkbox" => ["label" => "Agreement", "enabled" => false, "required" => false, "type" => "checkbox", "text_style" => "moto-text_normal"]], "buttons" => ["submit" => ["label" => "SEND", "preset" => "default", "size" => "medium", "align" => "center"], "attachment" => ["preset" => "default", "size" => "medium", "align" => "left"]], "messages" => ["success" => "Your message was sent successfully", "error" => "Sorry, your message was not sent", "required" => "Field is required", "invalidEmail" => "Incorrect email"], "preset" => "2", "animation" => "", "align" => ["desktop" => "", "tablet" => "", "mobile-v" => "", "mobile-h" => ""], "visible_on" => "mobile-v", "spacing" => ["top" => "medium", "right" => "medium", "bottom" => "auto", "left" => "medium"], "settings" => ["recipient" => ""], "postAction" => ["action" => "none", "properties" => ["id" => "", "target" => "_self"]]], "id" => "wid_1530014778_12kyijizn"]);
        echo $this->env->getExtension('Moto\Twig\Extension\WidgetsExtension')->renderWidget($this->env, ["name" => "spacer", "properties" => ["preset" => "default", "height" => "10px", "spacing" => ["top" => "medium", "right" => "auto", "bottom" => "auto", "left" => "auto"], "visible_on" => "mobile-v"], "id" => "wid_1530014750_6im9zzhno"]);
        echo "
    
    
</div>

                
            
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__a814744c4986b61480cfc5ed360e1c10002e2d9e9c15dbe8237907d0834167bf";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 10,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__a814744c4986b61480cfc5ed360e1c10002e2d9e9c15dbe8237907d0834167bf", "");
    }
}
