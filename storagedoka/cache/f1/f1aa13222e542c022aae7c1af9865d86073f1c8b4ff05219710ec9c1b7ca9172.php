<?php

/* unishop2/template/checkout/uni_shipping.twig */
class __TwigTemplate_02058fa44d0febb6dd5f6b6356045621bd2b7da92e4ee4a4f07e7f9d11807986 extends Twig_Template
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
        echo "<div class=\"heading\"><span>";
        echo (isset($context["text_delivery_methods"]) ? $context["text_delivery_methods"] : null);
        echo "</span></div>
<div class=\"shipping-method\">
\t";
        // line 3
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 4
            echo "\t\t<div class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>
\t";
        }
        // line 6
        echo "\t";
        if ((isset($context["shipping_methods"]) ? $context["shipping_methods"] : null)) {
            // line 7
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["shipping_methods"]) ? $context["shipping_methods"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
                // line 8
                echo "\t\t";
                echo $this->getAttribute($context["shipping_method"], "title", array());
                echo "
\t\t\t";
                // line 9
                if ( !$this->getAttribute($context["shipping_method"], "error", array())) {
                    // line 10
                    echo "\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["shipping_method"], "quote", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                        // line 11
                        echo "\t\t\t\t\t<div class=\"shipping-method__item radio\">
\t\t\t\t\t\t<label class=\"shipping-method__label input\">
\t\t\t\t\t\t\t";
                        // line 13
                        if ((($this->getAttribute($context["quote"], "code", array()) == (isset($context["code"]) ? $context["code"] : null)) ||  !(isset($context["code"]) ? $context["code"] : null))) {
                            // line 14
                            echo "\t\t\t\t\t\t\t\t";
                            $context["code"] = $this->getAttribute($context["quote"], "code", array());
                            // line 15
                            echo "\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"shipping_method\" value=\"";
                            echo $this->getAttribute($context["quote"], "code", array());
                            echo "\" id=\"";
                            echo $this->getAttribute($context["quote"], "code", array());
                            echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t";
                        } else {
                            // line 17
                            echo "\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"shipping_method\" value=\"";
                            echo $this->getAttribute($context["quote"], "code", array());
                            echo "\" id=\"";
                            echo $this->getAttribute($context["quote"], "code", array());
                            echo "\" />
\t\t\t\t\t\t\t";
                        }
                        // line 19
                        echo "\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t<span class=\"shipping-method__quote\">";
                        // line 20
                        echo $this->getAttribute($context["quote"], "title", array());
                        echo ":<span class=\"shipping-method__quote-text\">";
                        echo $this->getAttribute($context["quote"], "text", array());
                        echo "</span></span>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
                        // line 22
                        if ( !twig_test_empty($this->getAttribute($context["quote"], "description", array()))) {
                            echo $this->getAttribute($context["quote"], "description", array());
                        }
                        // line 23
                        echo "\t\t\t\t\t</div>
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "\t\t\t";
                } else {
                    // line 26
                    echo "\t\t\t\t<div class=\"alert alert-danger\">";
                    echo $this->getAttribute($context["shipping_method"], "error", array());
                    echo "</div>
\t\t\t";
                }
                // line 28
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t";
        }
        // line 30
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "unishop2/template/checkout/uni_shipping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 30,  114 => 29,  108 => 28,  102 => 26,  99 => 25,  92 => 23,  88 => 22,  81 => 20,  78 => 19,  70 => 17,  62 => 15,  59 => 14,  57 => 13,  53 => 11,  48 => 10,  46 => 9,  41 => 8,  36 => 7,  33 => 6,  27 => 4,  25 => 3,  19 => 1,);
    }
}
/* <div class="heading"><span>{{ text_delivery_methods }}</span></div>*/
/* <div class="shipping-method">*/
/* 	{% if error_warning %}*/
/* 		<div class="alert alert-warning"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}</div>*/
/* 	{% endif %}*/
/* 	{% if shipping_methods %}*/
/* 		{% for shipping_method in shipping_methods %}*/
/* 		{{ shipping_method.title }}*/
/* 			{% if not shipping_method.error %}*/
/* 				{% for quote in shipping_method.quote %}*/
/* 					<div class="shipping-method__item radio">*/
/* 						<label class="shipping-method__label input">*/
/* 							{% if quote.code == code or not code %}*/
/* 								{% set code = quote.code %}*/
/* 								<input type="radio" name="shipping_method" value="{{ quote.code }}" id="{{ quote.code }}" checked="checked" />*/
/* 							{% else %}*/
/* 								<input type="radio" name="shipping_method" value="{{ quote.code }}" id="{{ quote.code }}" />*/
/* 							{% endif %}*/
/* 							<span></span>*/
/* 							<span class="shipping-method__quote">{{ quote.title }}:<span class="shipping-method__quote-text">{{ quote.text }}</span></span>*/
/* 						</label>*/
/* 						{% if quote.description is not empty %}{{ quote.description }}{% endif %}*/
/* 					</div>*/
/* 				{% endfor %}*/
/* 			{% else %}*/
/* 				<div class="alert alert-danger">{{ shipping_method.error }}</div>*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 	{% endif %}*/
/* </div>*/
