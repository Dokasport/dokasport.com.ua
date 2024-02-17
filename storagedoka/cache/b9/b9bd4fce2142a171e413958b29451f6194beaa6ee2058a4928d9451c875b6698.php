<?php

/* unishop2/template/extension/module/uni_options.twig */
class __TwigTemplate_321562b04aecba9247dcad947a4cd727dacab4353ae6e076df5d579146a10d73 extends Twig_Template
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
        ob_start();
        // line 2
        echo "<div class=\"product-thumb__option option\">
\t";
        // line 3
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "options", array())) {
            // line 4
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "options", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 5
                echo "\t\t";
                if ((((($this->getAttribute($context["option"], "type", array()) == "checkbox") || ($this->getAttribute($context["option"], "type", array()) == "select")) || ($this->getAttribute($context["option"], "type", array()) == "radio")) || ($this->getAttribute($context["option"], "type", array()) == "image"))) {
                    // line 6
                    echo "\t\t\t<div class=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo " option__group\">
\t\t\t\t<label class=\"option__group-name\">";
                    // line 7
                    echo (($this->getAttribute($context["option"], "required", array())) ? ("*") : (""));
                    echo " ";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ":</label>
\t\t\t\t";
                    // line 8
                    if (($this->getAttribute($context["option"], "type", array(), "array") == "select")) {
                        // line 9
                        echo "\t\t\t\t\t<select name=\"option[";
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" class=\"option__select form-control\">
\t\t\t\t\t\t<option value=\"\">";
                        // line 10
                        echo (isset($context["text_select"]) ? $context["text_select"] : null);
                        echo "</option>
\t\t\t\t\t\t";
                        // line 11
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 12
                            echo "\t\t\t\t\t\t\t<option value=\"";
                            echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                            echo "\" data-prefix=\"";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo "\" data-price=\"";
                            echo $this->getAttribute($context["option_value"], "price_value", array());
                            echo "\">";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            echo (($this->getAttribute($context["option_value"], "price", array())) ? ((((("(" . $this->getAttribute($context["option_value"], "price_prefix", array())) . "") . $this->getAttribute($context["option_value"], "price", array())) . ")")) : (""));
                            echo "</option>
\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 14
                        echo "\t\t\t\t\t</select>
\t\t\t\t";
                    }
                    // line 16
                    echo "\t\t\t\t";
                    if (((($this->getAttribute($context["option"], "type", array()) == "checkbox") || ($this->getAttribute($context["option"], "type", array()) == "radio")) || ($this->getAttribute($context["option"], "type", array()) == "image"))) {
                        // line 17
                        echo "\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 18
                            echo "\t\t\t\t\t\t<label class=\"option__item\">
\t\t\t\t\t\t\t";
                            // line 19
                            if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                                // line 20
                                echo "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                                echo $this->getAttribute($context["option"], "product_option_id", array());
                                echo "][]\" value=\"";
                                echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                                echo "\" class=\"option-value-";
                                echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                                echo " hidden\" data-prefix=\"";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo "\" data-price=\"";
                                echo $this->getAttribute($context["option_value"], "price_value", array());
                                echo "\" />
\t\t\t\t\t\t\t";
                            }
                            // line 22
                            echo "\t\t\t\t\t\t\t";
                            if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                                // line 23
                                echo "\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"option[";
                                echo $this->getAttribute($context["option"], "product_option_id", array());
                                echo "]\" value=\"";
                                echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                                echo "\" class=\"option-value-";
                                echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                                echo " hidden\" data-prefix=\"";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo "\" data-price=\"";
                                echo $this->getAttribute($context["option_value"], "price_value", array());
                                echo "\" />
\t\t\t\t\t\t\t";
                            }
                            // line 25
                            echo "\t\t\t\t\t\t\t";
                            if ($this->getAttribute($context["option_value"], "image", array())) {
                                // line 26
                                echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                                echo $this->getAttribute($context["option_value"], "image", array());
                                echo "\" alt=\"";
                                echo $this->getAttribute($context["option_value"], "name", array());
                                echo " ";
                                echo (($this->getAttribute($context["option_value"], "price", array())) ? ((($this->getAttribute($context["option_value"], "price_prefix", array()) . "") . $this->getAttribute($context["option_value"], "price", array()))) : (""));
                                echo "\" loading=\"lazy\" data-type=\"module\" data-thumb=\"";
                                echo $this->getAttribute($context["option_value"], "small", array());
                                echo "\" class=\"option__img\" />\t\t\t\t\t
\t\t\t\t\t\t\t";
                            } else {
                                // line 28
                                echo "\t\t\t\t\t\t\t\t<span class=\"option__name\" ";
                                echo (($this->getAttribute($context["option_value"], "price", array())) ? ((((("data-toggle=\"tooltip\" title=\"" . $this->getAttribute($context["option_value"], "price_prefix", array())) . " ") . $this->getAttribute($context["option_value"], "price", array())) . "\"")) : (""));
                                echo ">";
                                echo $this->getAttribute($context["option_value"], "name", array());
                                echo "</span>
\t\t\t\t\t\t\t";
                            }
                            // line 30
                            echo "\t\t\t\t\t\t</label>
\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 32
                        echo "\t\t\t\t";
                    }
                    // line 33
                    echo "\t\t\t</div>
\t\t";
                }
                // line 35
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "\t";
        }
        // line 37
        echo "</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/uni_options.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 37,  168 => 36,  162 => 35,  158 => 33,  155 => 32,  148 => 30,  140 => 28,  128 => 26,  125 => 25,  111 => 23,  108 => 22,  94 => 20,  92 => 19,  89 => 18,  84 => 17,  81 => 16,  77 => 14,  60 => 12,  56 => 11,  52 => 10,  47 => 9,  45 => 8,  39 => 7,  34 => 6,  31 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% spaceless %}*/
/* <div class="product-thumb__option option">*/
/* 	{% if product.options %}*/
/* 	{% for option in product.options %}*/
/* 		{% if option.type == 'checkbox' or option.type == 'select' or option.type == 'radio' or option.type == 'image' %}*/
/* 			<div class="input-option{{ option.product_option_id }} option__group">*/
/* 				<label class="option__group-name">{{ option.required ? '*' }} {{ option.name }}:</label>*/
/* 				{% if option['type'] == 'select' %}*/
/* 					<select name="option[{{ option.product_option_id }}]" class="option__select form-control">*/
/* 						<option value="">{{text_select}}</option>*/
/* 						{% for option_value in option.product_option_value %}*/
/* 							<option value="{{ option_value.product_option_value_id }}" data-prefix="{{ option_value.price_prefix }}" data-price="{{ option_value.price_value }}">{{ option_value.name }} {{ option_value.price ? '('~option_value.price_prefix~''~option_value.price~')' }}</option>*/
/* 						{% endfor %}*/
/* 					</select>*/
/* 				{% endif %}*/
/* 				{% if option.type == 'checkbox' or option.type == 'radio' or option.type == 'image' %}*/
/* 					{% for option_value in option.product_option_value %}*/
/* 						<label class="option__item">*/
/* 							{% if option.type == 'checkbox' %}*/
/* 								<input type="checkbox" name="option[{{ option.product_option_id }}][]" value="{{ option_value.product_option_value_id }}" class="option-value-{{ option_value.product_option_value_id }} hidden" data-prefix="{{ option_value.price_prefix }}" data-price="{{ option_value.price_value }}" />*/
/* 							{% endif %}*/
/* 							{% if option.type == 'radio' %}*/
/* 								<input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}" class="option-value-{{ option_value.product_option_value_id }} hidden" data-prefix="{{ option_value.price_prefix }}" data-price="{{ option_value.price_value }}" />*/
/* 							{% endif %}*/
/* 							{% if option_value.image %}*/
/* 									<img src="{{ option_value.image }}" alt="{{ option_value.name }} {{ option_value.price ? option_value.price_prefix ~ '' ~ option_value.price }}" loading="lazy" data-type="module" data-thumb="{{ option_value.small }}" class="option__img" />					*/
/* 							{% else %}*/
/* 								<span class="option__name" {{ option_value.price ? 'data-toggle="tooltip" title="'~option_value.price_prefix~' '~option_value.price~'"' }}>{{ option_value.name }}</span>*/
/* 							{% endif %}*/
/* 						</label>*/
/* 					{% endfor %}*/
/* 				{% endif %}*/
/* 			</div>*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* 	{% endif %}*/
/* </div>*/
/* {% endspaceless %}*/
