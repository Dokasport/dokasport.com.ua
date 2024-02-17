<?php

/* unishop2/template/extension/module/uni_quantity_indicator.twig */
class __TwigTemplate_acc28c19e4defe1aaad201ba9434ff9db124aa6300132e8f6752a831851ccc35 extends Twig_Template
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
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "quantity_indicator", array())) {
            // line 2
            echo "\t<div class=\"qty-indicator\" data-text=\"";
            echo (isset($context["text_stock_indicator"]) ? $context["text_stock_indicator"] : null);
            echo "\">
\t\t";
            // line 3
            if (($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "quantity_indicator", array()), "type", array()) == 2)) {
                // line 4
                echo "\t\t\t<div class=\"qty-indicator__text text-";
                echo $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "quantity_indicator", array()), "items", array(), "array");
                echo "\">
\t\t\t\t";
                // line 5
                echo $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "quantity_indicator", array()), "title", array(), "array");
                echo "
\t\t\t</div>
\t\t";
            } else {
                // line 8
                echo "\t\t\t<div class=\"qty-indicator__bar\" data-toggle=\"tooltip\" title=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "quantity_indicator", array()), "title", array(), "array");
                echo "\">
\t\t\t\t<div class=\"qty-indicator__percent percent-";
                // line 9
                echo $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "quantity_indicator", array()), "items", array(), "array");
                echo "\" style=\"width:";
                echo $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "quantity_indicator", array()), "width", array(), "array");
                echo "%\"></div>
\t\t\t</div>
\t\t";
            }
            // line 12
            echo "\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/uni_quantity_indicator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  44 => 9,  39 => 8,  33 => 5,  28 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if product.quantity_indicator %}*/
/* 	<div class="qty-indicator" data-text="{{ text_stock_indicator }}">*/
/* 		{% if product.quantity_indicator.type == 2 %}*/
/* 			<div class="qty-indicator__text text-{{ product.quantity_indicator['items'] }}">*/
/* 				{{ product.quantity_indicator['title'] }}*/
/* 			</div>*/
/* 		{% else %}*/
/* 			<div class="qty-indicator__bar" data-toggle="tooltip" title="{{ product.quantity_indicator['title'] }}">*/
/* 				<div class="qty-indicator__percent percent-{{ product.quantity_indicator['items'] }}" style="width:{{ product.quantity_indicator['width'] }}%"></div>*/
/* 			</div>*/
/* 		{% endif %}*/
/* 	</div>*/
/* {% endif %}*/
