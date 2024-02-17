<?php

/* unishop2/template/extension/module/uni_attributes.twig */
class __TwigTemplate_71337435f36dc37eb928467073ca0f01db9fd41de572ff59c360e3e8b6b46558 extends Twig_Template
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
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "attributes", array())) {
            // line 2
            echo "\t<div class=\"product-thumb__attribute product-thumb__description attribute\">
\t\t";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "attributes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 4
                echo "\t\t\t";
                echo (($this->getAttribute($context["attribute"], "name", array())) ? (($this->getAttribute($context["attribute"], "name", array()) . ":")) : (""));
                echo " <span class=\"product-thumb__attribute-value\">";
                echo $this->getAttribute($context["attribute"], "text", array());
                echo "</span>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/uni_attributes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if product.attributes %}*/
/* 	<div class="product-thumb__attribute product-thumb__description attribute">*/
/* 		{% for attribute in product.attributes %}*/
/* 			{{ attribute.name ? attribute.name ~ ':' }} <span class="product-thumb__attribute-value">{{ attribute.text }}</span>*/
/* 		{% endfor %}*/
/* 	</div>*/
/* {% endif %}*/
