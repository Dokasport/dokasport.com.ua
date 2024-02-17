<?php

/* unishop2/template/checkout/uni_payment.twig */
class __TwigTemplate_9726083cd784b1045996000a61b8e5a3024c6457432e67173594858e839d5ff6 extends Twig_Template
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
        echo (isset($context["text_payment_methods"]) ? $context["text_payment_methods"] : null);
        echo "</span></div>
<div class=\"payment-method\">\t
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
        if ((isset($context["payment_methods"]) ? $context["payment_methods"] : null)) {
            // line 7
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["payment_methods"]) ? $context["payment_methods"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                // line 8
                echo "\t\t\t<div class=\"radio\">
\t\t\t\t";
                // line 9
                $context["lock"] = ((twig_test_empty($this->getAttribute($context["payment_method"], "error", array()))) ? (false) : (true));
                // line 10
                echo "\t\t\t\t<label class=\"input\">
\t\t\t\t\t";
                // line 11
                if ((($this->getAttribute($context["payment_method"], "code", array()) == (isset($context["code"]) ? $context["code"] : null)) || ( !(isset($context["code"]) ? $context["code"] : null) && ((isset($context["lock"]) ? $context["lock"] : null) == false)))) {
                    // line 12
                    echo "\t\t\t\t\t\t";
                    $context["code"] = $this->getAttribute($context["payment_method"], "code", array());
                    // line 13
                    echo "\t\t\t\t\t\t<input type=\"radio\" name=\"payment_method\" value=\"";
                    echo $this->getAttribute($context["payment_method"], "code", array());
                    echo "\" id=\"";
                    echo $this->getAttribute($context["payment_method"], "code", array());
                    echo "\" checked=\"checked\" ";
                    echo ((((isset($context["lock"]) ? $context["lock"] : null) == true)) ? ("disabled") : (""));
                    echo " />
\t\t\t\t\t";
                } else {
                    // line 15
                    echo "\t\t\t\t\t\t<input type=\"radio\" name=\"payment_method\" value=\"";
                    echo $this->getAttribute($context["payment_method"], "code", array());
                    echo "\" id=\"";
                    echo $this->getAttribute($context["payment_method"], "code", array());
                    echo "\" ";
                    echo ((((isset($context["lock"]) ? $context["lock"] : null) == true)) ? ("disabled") : (""));
                    echo " />
\t\t\t\t\t";
                }
                // line 17
                echo "\t\t\t\t\t<span></span>
\t\t\t\t\t";
                // line 18
                echo $this->getAttribute($context["payment_method"], "title", array());
                echo "
\t\t\t\t\t";
                // line 19
                if ($this->getAttribute($context["payment_method"], "terms", array())) {
                    // line 20
                    echo "\t\t\t\t\t\t(";
                    echo $this->getAttribute($context["payment_method"], "terms", array());
                    echo ")
\t\t\t\t\t";
                }
                // line 22
                echo "\t\t\t\t</label>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t";
        }
        // line 26
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "unishop2/template/checkout/uni_payment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 26,  97 => 25,  89 => 22,  83 => 20,  81 => 19,  77 => 18,  74 => 17,  64 => 15,  54 => 13,  51 => 12,  49 => 11,  46 => 10,  44 => 9,  41 => 8,  36 => 7,  33 => 6,  27 => 4,  25 => 3,  19 => 1,);
    }
}
/* <div class="heading"><span>{{ text_payment_methods }}</span></div>*/
/* <div class="payment-method">	*/
/* 	{% if error_warning %}*/
/* 		<div class="alert alert-warning"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}</div>*/
/* 	{% endif %}*/
/* 	{% if payment_methods %}*/
/* 		{% for payment_method in payment_methods %}*/
/* 			<div class="radio">*/
/* 				{% set lock = payment_method.error is empty ? false : true %}*/
/* 				<label class="input">*/
/* 					{% if payment_method.code == code or not code and lock == false %}*/
/* 						{% set code = payment_method.code %}*/
/* 						<input type="radio" name="payment_method" value="{{ payment_method.code }}" id="{{payment_method.code}}" checked="checked" {{ lock == true ? 'disabled' }} />*/
/* 					{% else %}*/
/* 						<input type="radio" name="payment_method" value="{{ payment_method.code }}" id="{{payment_method.code}}" {{ lock == true ? 'disabled' }} />*/
/* 					{% endif %}*/
/* 					<span></span>*/
/* 					{{ payment_method.title }}*/
/* 					{% if payment_method.terms %}*/
/* 						({{ payment_method.terms }})*/
/* 					{% endif %}*/
/* 				</label>*/
/* 			</div>*/
/* 		{% endfor %}*/
/* 	{% endif %}*/
/* </div>*/
/* */
