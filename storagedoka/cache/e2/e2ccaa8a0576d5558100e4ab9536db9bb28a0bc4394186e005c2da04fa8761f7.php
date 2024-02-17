<?php

/* unishop2/template/checkout/uni_address.twig */
class __TwigTemplate_c2eacf2438493061fbd5287d426599ca590d6658c0629ec1f4c450e3c3bdbc5a extends Twig_Template
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
        echo "<div ";
        echo ((twig_test_empty((isset($context["is_shipping"]) ? $context["is_shipping"] : null))) ? ("class=\"hidden\"") : (""));
        echo ">
\t<div class=\"heading\"><span>";
        // line 2
        echo (isset($context["shipping_address"]) ? $context["shipping_address"] : null);
        echo "</span></div>
\t";
        // line 3
        if ((isset($context["addresses"]) ? $context["addresses"] : null)) {
            // line 4
            echo "\t\t";
            if ((((isset($context["address_1"]) ? $context["address_1"] : null) && (isset($context["zone"]) ? $context["zone"] : null)) && (isset($context["country"]) ? $context["country"] : null))) {
                // line 5
                echo "\t\t\t<div class=\"radio\">
\t\t\t\t<label class=\"input\"><input type=\"radio\" name=\"existing-address\" value=\"1\" ";
                // line 6
                echo ((twig_test_empty((isset($context["new_address"]) ? $context["new_address"] : null))) ? ("checked=\"checked\"") : (""));
                echo " id=\"payment_address\" /><span></span>";
                echo (isset($context["text_address_existing"]) ? $context["text_address_existing"] : null);
                echo "</label>
\t\t\t</div>
\t\t\t<div id=\"payment-existing\">
\t\t\t\t<select name=\"address_id\" class=\"form-control\">
\t\t\t\t\t";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                    // line 11
                    echo "\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["address"], "address_id", array());
                    echo "\" ";
                    echo ((($this->getAttribute($context["address"], "address_id", array()) == (isset($context["address_id"]) ? $context["address_id"] : null))) ? ("selected=\"selected\"") : (""));
                    echo ">
\t\t\t\t\t\t\t";
                    // line 12
                    echo $this->getAttribute($context["address"], "firstname", array());
                    echo " ";
                    echo $this->getAttribute($context["address"], "lastname", array());
                    echo ", ";
                    echo $this->getAttribute($context["address"], "city", array());
                    echo ", ";
                    echo $this->getAttribute($context["address"], "address_1", array());
                    echo ", ";
                    echo $this->getAttribute($context["address"], "zone", array());
                    echo ", ";
                    echo $this->getAttribute($context["address"], "country", array());
                    echo "
\t\t\t\t\t\t</option>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "\t\t\t\t</select>
\t\t\t</div>
\t\t";
            }
            // line 18
            echo "\t";
        } else {
            // line 19
            echo "\t\t<script>
\t\t\t\$(document).ready(function() {
\t\t\t\t\$('#new_payment_address').click();
\t\t\t});
\t\t</script>
\t";
        }
        // line 25
        echo "\t";
        if ((isset($context["customer_id"]) ? $context["customer_id"] : null)) {
            // line 26
            echo "\t\t<div class=\"radio\">
\t\t\t<label class=\"input\"><input type=\"radio\" name=\"new-address\" value=\"1\" ";
            // line 27
            echo (((isset($context["new_address"]) ? $context["new_address"] : null)) ? ("checked=\"checked\"") : (""));
            echo " id=\"new_payment_address\"/><span></span>";
            echo (isset($context["text_address_new"]) ? $context["text_address_new"] : null);
            echo "</label>
\t\t</div>
\t";
        }
        // line 30
        echo "\t<div id=\"payment-address-new\" class=\"checkout-address-new row-flex ";
        echo (((((isset($context["customer_id"]) ? $context["customer_id"] : null) && (isset($context["addresses"]) ? $context["addresses"] : null)) && twig_test_empty((isset($context["new_address"]) ? $context["new_address"] : null)))) ? ("hidden") : (""));
        echo "\">
\t\t<select name=\"country_id\" id=\"input-payment-country\" class=\"checkout-address-new__select form-control ";
        // line 31
        echo ((twig_test_empty((isset($context["show_country_zone"]) ? $context["show_country_zone"] : null))) ? ("hidden") : (""));
        echo "\" onchange=\"zone();\">
\t\t\t<option value=\"\">";
        // line 32
        echo (isset($context["select_country"]) ? $context["select_country"] : null);
        echo "</option>
\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 34
            echo "\t\t\t\t<option value=\"";
            echo $this->getAttribute($context["country"], "country_id", array());
            echo "\" ";
            echo ((($this->getAttribute($context["country"], "country_id", array()) == (isset($context["country_id"]) ? $context["country_id"] : null))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo $this->getAttribute($context["country"], "name", array());
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t</select>
\t\t<select name=\"zone_id\" id=\"input-payment-zone\" class=\"checkout-address-new__select form-control ";
        // line 37
        echo ((twig_test_empty((isset($context["show_country_zone"]) ? $context["show_country_zone"] : null))) ? ("hidden") : (""));
        echo "\" onchange=\"uniCheckoutUpdate();\"></select>
\t\t<input type=\"text\" name=\"city\" value=\"";
        // line 38
        echo (isset($context["city"]) ? $context["city"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["city_text"]) ? $context["city_text"] : null);
        echo "\" class=\"checkout-address-new__input form-control ";
        echo ((twig_test_empty((isset($context["show_city"]) ? $context["show_city"] : null))) ? ("hidden") : (""));
        echo "\" />
\t\t<input type=\"text\" name=\"postcode\" value=\"";
        // line 39
        echo (isset($context["postcode"]) ? $context["postcode"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["postcode_text"]) ? $context["postcode_text"] : null);
        echo "\" class=\"checkout-address-new__input form-control ";
        echo ((twig_test_empty((isset($context["show_postcode"]) ? $context["show_postcode"] : null))) ? ("hidden") : (""));
        echo "\" />
\t\t<input type=\"text\" name=\"address_1\" value=\"";
        // line 40
        echo (isset($context["address_1"]) ? $context["address_1"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["address_text"]) ? $context["address_text"] : null);
        echo "\" class=\"checkout-address-new__input form-control ";
        echo ((twig_test_empty((isset($context["show_address"]) ? $context["show_address"] : null))) ? ("hidden") : (""));
        echo "\" />
\t\t<input type=\"text\" name=\"address_2\" value=\"";
        // line 41
        echo (isset($context["address_2"]) ? $context["address_2"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["address2_text"]) ? $context["address2_text"] : null);
        echo "\" class=\"checkout-address-new__input form-control ";
        echo ((twig_test_empty((isset($context["show_address2"]) ? $context["show_address2"] : null))) ? ("hidden") : (""));
        echo "\" />
\t</div>
\t\t
\t<input type=\"hidden\" name=\"company\" value=\"\" />
\t<input type=\"hidden\" name=\"company_id\" value=\"\" />
\t<input type=\"hidden\" name=\"tax_id\" value=\"\" />
\t\t
\t<div class=\"custom-field col-xs-12\">
\t\t";
        // line 49
        echo (isset($context["custom_fields"]) ? $context["custom_fields"] : null);
        echo "
\t</div>
\t<div class=\"col-xs-12 visible-xs visible-sm\" style=\"height:20px\"></div>
\t<script>
\t\tif(\$('.checkout-address-new__select, .checkout-address-new__input').not('.hidden').length%2) \$('.checkout-address-new__input').not('.hidden').last().addClass('full-width');
\t
\t\t\$(function() {
\t\t\t\$('input[name=\"existing-address\"]').on('click', function() {
\t\t\t\t\$('input[name=\"new-address\"]').attr('checked', false).prop('checked', false)
\t\t\t\t\$('#payment-address-new').hide();
\t\t\t});
\t\t\t
\t\t\t\$('input[name=\"new-address\"]').on('click', function() {
\t\t\t\t\$('input[name=\"existing-address\"]').attr('checked', false).prop('checked', false)
\t\t\t\t\$('#payment-address-new').show();
\t\t\t});
\t\t
\t\t\tzone();
\t\t\t
\t\t";
        // line 68
        if ((isset($context["blocked"]) ? $context["blocked"] : null)) {
            // line 69
            echo "\t\t\tlet methodArr = ['pickup.pickup'],
\t\t\t\tmethodVal = \$('.shipping-method input:checked').val();
\t\t\t
\t\t\tif(methodArr.indexOf(methodVal) != -1) {
\t\t\t\t\$('#payment-address-new input').each(function() {
\t\t\t\t\tif(\$(this).val() == '') {
\t\t\t\t\t\t\$(this).val('---');
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\tif(!\$('#payment-address-new .cover').length) {
\t\t\t\t\t\$('#payment-address-new').append('<div class=\"cover\"></div>');
\t\t\t\t}
\t\t\t} else {
\t\t\t\t\$('#payment-address-new input').each(function() {
\t\t\t\t\tif(\$(this).val() == '---') {
\t\t\t\t\t\t\$(this).val('');
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\t\$('#payment-address-new .cover').remove();
\t\t\t}
\t\t";
        }
        // line 90
        echo "\t\t
\t\t});
\t
\t\tfunction zone() {
\t\t\tvar data = \$('.payment-address select[name=\\'country_id\\']').val();
\t
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=checkout/uni_checkout/country&country_id='+data,
\t\t\t\tdataType: 'json',          
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\t\t\$('input[name=\\'postcode\\']').parent().parent().addClass('required');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('input[name=\\'postcode\\']').parent().parent().removeClass('required');
\t\t\t\t\t}
\t\t\t            
\t\t\t\t\thtml = '<option value=\"\">";
        // line 106
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';
\t\t\t\t\tselected = false;
            
\t\t\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';
                    
\t\t\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 113
        echo (isset($context["zone_id"]) ? $context["zone_id"] : null);
        echo "') {
\t\t\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t\t\t\tselected = true;
\t\t\t\t\t\t\t}
    
\t\t\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 121
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t\t\t\t}
            
\t\t\t\t\t\$('select[name=\\'zone_id\\']').html(html);
\t\t\t
\t\t\t\t\tif (!selected) {
\t\t\t\t\t\t\$('select[name=\\'zone_id\\']').val('');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t</script>
</div>";
    }

    public function getTemplateName()
    {
        return "unishop2/template/checkout/uni_address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 121,  256 => 113,  246 => 106,  228 => 90,  205 => 69,  203 => 68,  181 => 49,  166 => 41,  158 => 40,  150 => 39,  142 => 38,  138 => 37,  135 => 36,  122 => 34,  118 => 33,  114 => 32,  110 => 31,  105 => 30,  97 => 27,  94 => 26,  91 => 25,  83 => 19,  80 => 18,  75 => 15,  56 => 12,  49 => 11,  45 => 10,  36 => 6,  33 => 5,  30 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
/* <div {{ is_shipping is empty ? 'class="hidden"' }}>*/
/* 	<div class="heading"><span>{{ shipping_address }}</span></div>*/
/* 	{% if addresses %}*/
/* 		{% if address_1 and zone and country %}*/
/* 			<div class="radio">*/
/* 				<label class="input"><input type="radio" name="existing-address" value="1" {{ new_address is empty ? 'checked="checked"' }} id="payment_address" /><span></span>{{ text_address_existing }}</label>*/
/* 			</div>*/
/* 			<div id="payment-existing">*/
/* 				<select name="address_id" class="form-control">*/
/* 					{% for address in addresses %}*/
/* 						<option value="{{address.address_id}}" {{ address.address_id == address_id ? 'selected="selected"' }}>*/
/* 							{{ address.firstname }} {{ address.lastname }}, {{address.city}}, {{ address.address_1 }}, {{ address.zone }}, {{ address.country }}*/
/* 						</option>*/
/* 					{% endfor %}*/
/* 				</select>*/
/* 			</div>*/
/* 		{% endif %}*/
/* 	{% else %}*/
/* 		<script>*/
/* 			$(document).ready(function() {*/
/* 				$('#new_payment_address').click();*/
/* 			});*/
/* 		</script>*/
/* 	{% endif %}*/
/* 	{% if customer_id %}*/
/* 		<div class="radio">*/
/* 			<label class="input"><input type="radio" name="new-address" value="1" {{ new_address ? 'checked="checked"' }} id="new_payment_address"/><span></span>{{ text_address_new }}</label>*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	<div id="payment-address-new" class="checkout-address-new row-flex {{ customer_id and addresses and new_address is empty ? 'hidden' }}">*/
/* 		<select name="country_id" id="input-payment-country" class="checkout-address-new__select form-control {{ show_country_zone is empty ? 'hidden' }}" onchange="zone();">*/
/* 			<option value="">{{ select_country }}</option>*/
/* 			{% for country in countries %}*/
/* 				<option value="{{ country.country_id }}" {{ country.country_id == country_id ? 'selected="selected"' }}>{{ country.name }}</option>*/
/* 			{% endfor %}*/
/* 		</select>*/
/* 		<select name="zone_id" id="input-payment-zone" class="checkout-address-new__select form-control {{ show_country_zone is empty ? 'hidden' }}" onchange="uniCheckoutUpdate();"></select>*/
/* 		<input type="text" name="city" value="{{ city }}" placeholder="{{ city_text }}" class="checkout-address-new__input form-control {{ show_city is empty ? 'hidden' }}" />*/
/* 		<input type="text" name="postcode" value="{{ postcode }}" placeholder="{{ postcode_text }}" class="checkout-address-new__input form-control {{ show_postcode is empty ? 'hidden' }}" />*/
/* 		<input type="text" name="address_1" value="{{ address_1 }}" placeholder="{{ address_text }}" class="checkout-address-new__input form-control {{ show_address is empty ? 'hidden' }}" />*/
/* 		<input type="text" name="address_2" value="{{ address_2 }}" placeholder="{{ address2_text }}" class="checkout-address-new__input form-control {{ show_address2 is empty ? 'hidden' }}" />*/
/* 	</div>*/
/* 		*/
/* 	<input type="hidden" name="company" value="" />*/
/* 	<input type="hidden" name="company_id" value="" />*/
/* 	<input type="hidden" name="tax_id" value="" />*/
/* 		*/
/* 	<div class="custom-field col-xs-12">*/
/* 		{{ custom_fields }}*/
/* 	</div>*/
/* 	<div class="col-xs-12 visible-xs visible-sm" style="height:20px"></div>*/
/* 	<script>*/
/* 		if($('.checkout-address-new__select, .checkout-address-new__input').not('.hidden').length%2) $('.checkout-address-new__input').not('.hidden').last().addClass('full-width');*/
/* 	*/
/* 		$(function() {*/
/* 			$('input[name="existing-address"]').on('click', function() {*/
/* 				$('input[name="new-address"]').attr('checked', false).prop('checked', false)*/
/* 				$('#payment-address-new').hide();*/
/* 			});*/
/* 			*/
/* 			$('input[name="new-address"]').on('click', function() {*/
/* 				$('input[name="existing-address"]').attr('checked', false).prop('checked', false)*/
/* 				$('#payment-address-new').show();*/
/* 			});*/
/* 		*/
/* 			zone();*/
/* 			*/
/* 		{% if blocked %}*/
/* 			let methodArr = ['pickup.pickup'],*/
/* 				methodVal = $('.shipping-method input:checked').val();*/
/* 			*/
/* 			if(methodArr.indexOf(methodVal) != -1) {*/
/* 				$('#payment-address-new input').each(function() {*/
/* 					if($(this).val() == '') {*/
/* 						$(this).val('---');*/
/* 					}*/
/* 				});*/
/* 				if(!$('#payment-address-new .cover').length) {*/
/* 					$('#payment-address-new').append('<div class="cover"></div>');*/
/* 				}*/
/* 			} else {*/
/* 				$('#payment-address-new input').each(function() {*/
/* 					if($(this).val() == '---') {*/
/* 						$(this).val('');*/
/* 					}*/
/* 				});*/
/* 				$('#payment-address-new .cover').remove();*/
/* 			}*/
/* 		{% endif %}*/
/* 		*/
/* 		});*/
/* 	*/
/* 		function zone() {*/
/* 			var data = $('.payment-address select[name=\'country_id\']').val();*/
/* 	*/
/* 			$.ajax({*/
/* 				url: 'index.php?route=checkout/uni_checkout/country&country_id='+data,*/
/* 				dataType: 'json',          */
/* 				success: function(json) {*/
/* 					if (json['postcode_required'] == '1') {*/
/* 						$('input[name=\'postcode\']').parent().parent().addClass('required');*/
/* 					} else {*/
/* 						$('input[name=\'postcode\']').parent().parent().removeClass('required');*/
/* 					}*/
/* 			            */
/* 					html = '<option value="">{{text_select}}</option>';*/
/* 					selected = false;*/
/*             */
/* 					if (json['zone'] && json['zone'] != '') {*/
/* 						for (i = 0; i < json['zone'].length; i++) {*/
/* 							html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/*                     */
/* 							if (json['zone'][i]['zone_id'] == '{{zone_id}}') {*/
/* 								html += ' selected="selected"';*/
/* 								selected = true;*/
/* 							}*/
/*     */
/* 							html += '>' + json['zone'][i]['name'] + '</option>';*/
/* 						}*/
/* 					} else {*/
/* 						html += '<option value="0" selected="selected">{{text_none}}</option>';*/
/* 					}*/
/*             */
/* 					$('select[name=\'zone_id\']').html(html);*/
/* 			*/
/* 					if (!selected) {*/
/* 						$('select[name=\'zone_id\']').val('');*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	</script>*/
/* </div>*/
