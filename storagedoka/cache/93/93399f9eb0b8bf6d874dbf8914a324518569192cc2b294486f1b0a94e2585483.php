<?php

/* default/template/mail/forgotten.twig */
class __TwigTemplate_1715b8d66ed39c1a54276b66f48575db34164463b260349bbd783c1f964117d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["text_greeting"]) ? $context["text_greeting"] : null);
        echo "

";
        // line 3
        echo (isset($context["text_change"]) ? $context["text_change"] : null);
        echo "

";
        // line 5
        echo (isset($context["reset"]) ? $context["reset"] : null);
        echo "

";
        // line 7
        echo (isset($context["text_ip"]) ? $context["text_ip"] : null);
        echo " 

";
        // line 9
        echo (isset($context["ip"]) ? $context["ip"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/mail/forgotten.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  34 => 7,  29 => 5,  24 => 3,  19 => 1,);
    }
}
/* {{ text_greeting }}*/
/* */
/* {{ text_change }}*/
/* */
/* {{ reset }}*/
/* */
/* {{ text_ip }} */
/* */
/* {{ ip }}*/
