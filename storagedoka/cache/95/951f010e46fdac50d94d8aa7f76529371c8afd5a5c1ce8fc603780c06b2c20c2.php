<?php

/* unishop2/template/checkout/uni_custom_field.twig */
class __TwigTemplate_354a4c17c4496ae4141998c2c21ac45997b0b433d04abdffd8f04ebfaecf4668 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 2
            echo "\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                // line 3
                echo "\t\t<div class=\"form-group ";
                echo (($this->getAttribute($context["custom_field"], "required", array())) ? ("required") : (""));
                echo " custom-field\">
\t\t\t<label class=\"control-label\" for=\"input-shipping-custom-field";
                // line 4
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
\t\t\t<div class=\"\">
\t\t\t\t<select name=\"custom_field[";
                // line 6
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" class=\"form-control\">
\t\t\t\t\t<option value=\"\">";
                // line 7
                echo (isset($context["text_select"]) ? $context["text_select"] : null);
                echo "</option>
\t\t\t\t\t";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 9
                    echo "\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                    echo "\" ";
                    echo ((($this->getAttribute((isset($context["checked"]) ? $context["checked"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") == $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()))) ? ("selected=\"selected\"") : (""));
                    echo ">";
                    echo $this->getAttribute($context["custom_field_value"], "name", array());
                    echo "</option>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "\t\t\t\t</select>
\t\t\t</div>
\t\t</div>
\t";
            }
            // line 15
            echo "\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                // line 16
                echo "\t\t<div class=\"form-group ";
                echo (($this->getAttribute($context["custom_field"], "required", array())) ? ("required") : (""));
                echo " custom-field\">
\t\t\t";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 18
                    echo "\t\t\t\t<label class=\"input\">
\t\t\t\t\t<input type=\"radio\" name=\"custom_field[";
                    // line 19
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                    echo "\" ";
                    echo ((($this->getAttribute((isset($context["checked"]) ? $context["checked"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") == $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()))) ? ("checked=\"checked\"") : (""));
                    echo " /><span></span>";
                    echo $this->getAttribute($context["custom_field_value"], "name", array());
                    echo "
\t\t\t\t</label>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "\t\t</div>
\t";
            }
            // line 24
            echo "\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                // line 25
                echo "\t\t<div class=\"form-group ";
                echo (($this->getAttribute($context["custom_field"], "required", array())) ? ("required") : (""));
                echo " custom-field\">
\t\t\t";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 27
                    echo "\t\t\t\t<label class=\"input\">
\t\t\t\t\t<input type=\"checkbox\" name=\"custom_field[";
                    // line 28
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "][]\" value=\"";
                    echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                    echo "\" ";
                    echo ((($this->getAttribute((isset($context["checked"]) ? $context["checked"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") == $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()))) ? ("checked=\"checked\"") : (""));
                    echo " /><span></span>";
                    echo $this->getAttribute($context["custom_field_value"], "name", array());
                    echo "
\t\t\t\t</label>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "\t\t</div>
\t";
            }
            // line 33
            echo "\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                // line 34
                echo "\t\t<div class=\"form-group ";
                echo (($this->getAttribute($context["custom_field"], "required", array())) ? ("required") : (""));
                echo " custom-field\">
\t\t\t<input type=\"text\" name=\"custom_field[";
                // line 35
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                echo $this->getAttribute($context["custom_field"], "value", array());
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" class=\"form-control\" />
\t\t</div>
\t";
            }
            // line 38
            echo "\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                // line 39
                echo "\t\t<div class=\"form-group ";
                echo (($this->getAttribute($context["custom_field"], "required", array())) ? ("required") : (""));
                echo " custom-field\">
\t\t\t<textarea name=\"custom_field[";
                // line 40
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" rows=\"5\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" class=\"form-control\">";
                echo $this->getAttribute($context["custom_field"], "value", array());
                echo "</textarea>
\t\t</div>
\t";
            }
            // line 43
            echo "\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                // line 44
                echo "\t\t<div class=\"form-group ";
                echo (($this->getAttribute($context["custom_field"], "required", array())) ? ("required") : (""));
                echo " custom-field\">
\t\t\t<button type=\"button\" id=\"button-shipping-custom-field";
                // line 45
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                echo "</button>
\t\t\t<input type=\"hidden\" name=\"custom_field[";
                // line 46
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                echo $this->getAttribute($context["custom_field"], "value", array());
                echo "\" />
\t\t</div>
\t";
            }
            // line 49
            echo "\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                // line 50
                echo "\t\t<div class=\"form-group ";
                echo (($this->getAttribute($context["custom_field"], "required", array())) ? ("required") : (""));
                echo " custom-field\">
\t\t\t<input type=\"date\" name=\"custom_field[";
                // line 51
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                echo $this->getAttribute($context["custom_field"], "value", array());
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" class=\"form-control\" />
\t\t</div>
\t";
            }
            // line 54
            echo "\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "datetime")) {
                // line 55
                echo "\t\t<div class=\"form-group ";
                echo (($this->getAttribute($context["custom_field"], "required", array())) ? ("required") : (""));
                echo " custom-field\">
\t\t\t<input type=\"datetime-local\" name=\"custom_field[";
                // line 56
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                echo $this->getAttribute($context["custom_field"], "value", array());
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" class=\"form-control\" />
\t\t</div>
\t";
            }
            // line 59
            echo "\t";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 60
                echo "\t\t<div class=\"form-group ";
                echo (($this->getAttribute($context["custom_field"], "required", array())) ? ("required") : (""));
                echo " custom-field\">
\t\t\t<input type=\"time\" name=\"custom_field[";
                // line 61
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                echo $this->getAttribute($context["custom_field"], "value", array());
                echo "\" placeholder=\"\" class=\"form-control\" />
\t\t</div>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "unishop2/template/checkout/uni_custom_field.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 61,  250 => 60,  247 => 59,  235 => 56,  230 => 55,  227 => 54,  215 => 51,  210 => 50,  207 => 49,  197 => 46,  191 => 45,  186 => 44,  183 => 43,  171 => 40,  166 => 39,  163 => 38,  151 => 35,  146 => 34,  143 => 33,  139 => 31,  122 => 28,  119 => 27,  115 => 26,  110 => 25,  107 => 24,  103 => 22,  86 => 19,  83 => 18,  79 => 17,  74 => 16,  71 => 15,  65 => 11,  52 => 9,  48 => 8,  44 => 7,  38 => 6,  31 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% for custom_field in custom_fields %}*/
/* 	{% if custom_field.type == 'select' %}*/
/* 		<div class="form-group {{ custom_field.required ? 'required' }} custom-field">*/
/* 			<label class="control-label" for="input-shipping-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/* 			<div class="">*/
/* 				<select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" class="form-control">*/
/* 					<option value="">{{ text_select }}</option>*/
/* 					{% for custom_field_value in custom_field.custom_field_value %}*/
/* 						<option value="{{ custom_field_value.custom_field_value_id }}" {{ checked[custom_field.custom_field_id] == custom_field_value.custom_field_value_id ? 'selected="selected"' }}>{{ custom_field_value.name }}</option>*/
/* 					{% endfor %}*/
/* 				</select>*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	{% if custom_field.type == 'radio' %}*/
/* 		<div class="form-group {{ custom_field.required ? 'required' }} custom-field">*/
/* 			{% for custom_field_value in custom_field.custom_field_value %}*/
/* 				<label class="input">*/
/* 					<input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" {{ checked[custom_field.custom_field_id] == custom_field_value.custom_field_value_id ? 'checked="checked"' }} /><span></span>{{ custom_field_value.name }}*/
/* 				</label>*/
/* 			{% endfor %}*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	{% if custom_field.type == 'checkbox' %}*/
/* 		<div class="form-group {{ custom_field.required ? 'required' }} custom-field">*/
/* 			{% for custom_field_value in custom_field.custom_field_value %}*/
/* 				<label class="input">*/
/* 					<input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" {{ checked[custom_field.custom_field_id] == custom_field_value.custom_field_value_id ? 'checked="checked"' }} /><span></span>{{ custom_field_value.name }}*/
/* 				</label>*/
/* 			{% endfor %}*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	{% if custom_field.type == 'text' %}*/
/* 		<div class="form-group {{ custom_field.required ? 'required' }} custom-field">*/
/* 			<input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" class="form-control" />*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	{% if custom_field.type == 'textarea' %}*/
/* 		<div class="form-group {{ custom_field.required ? 'required' }} custom-field">*/
/* 			<textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" class="form-control">{{ custom_field.value }}</textarea>*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	{% if custom_field.type == 'file' %}*/
/* 		<div class="form-group {{ custom_field.required ? 'required' }} custom-field">*/
/* 			<button type="button" id="button-shipping-custom-field{{ custom_field.custom_field_id }}" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/* 			<input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" />*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	{% if custom_field.type == 'date' %}*/
/* 		<div class="form-group {{ custom_field.required ? 'required' }} custom-field">*/
/* 			<input type="date" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" class="form-control" />*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	{% if custom_field.type == 'datetime' %}*/
/* 		<div class="form-group {{ custom_field.required ? 'required' }} custom-field">*/
/* 			<input type="datetime-local" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" class="form-control" />*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	{% if custom_field.type == 'time' %}*/
/* 		<div class="form-group {{ custom_field.required ? 'required' }} custom-field">*/
/* 			<input type="time" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="" class="form-control" />*/
/* 		</div>*/
/* 	{% endif %}*/
/* {% endfor %}*/
