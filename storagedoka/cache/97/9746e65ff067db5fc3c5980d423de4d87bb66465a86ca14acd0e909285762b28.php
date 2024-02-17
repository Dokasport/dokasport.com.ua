<?php

/* unishop2/template/checkout/uni_checkout.twig */
class __TwigTemplate_742fee130c6fd658503e89724bd09916a82544a59a583432722eaf34d47c6dd3 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div id=\"unicheckout\" class=\"checkout_form container\">        
\t<ul class=\"breadcrumb ";
        // line 3
        echo (((isset($context["menu_expanded"]) ? $context["menu_expanded"] : null)) ? ("col-md-offset-3 col-lg-offset-3 col-xxl-offset-4") : (""));
        echo "\">
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["breadcrumb"]) {
            // line 5
            echo "\t\t\t";
            if ((($context["key"] + 1) < twig_length_filter($this->env, (isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null)))) {
                // line 6
                echo "\t\t\t\t<li><a href=\"";
                echo $this->getAttribute($context["breadcrumb"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["breadcrumb"], "text", array());
                echo "</a></li>
\t\t\t";
            } else {
                // line 8
                echo "\t\t\t\t<li>";
                echo $this->getAttribute($context["breadcrumb"], "text", array());
                echo "</li>
\t\t\t";
            }
            // line 10
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t</ul>
\t<div id=\"content\">
\t\t<div class=\"heading-h1\"><h1>";
        // line 13
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</h1></div>
\t\t<div class=\"row\">
\t\t<div class=\"col-md-9 col-lg-9\">
\t\t<div id=\"unicart\">
\t\t\t";
        // line 17
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "
\t\t</div>
\t\t";
        // line 19
        if ((isset($context["show_popup_login"]) ? $context["show_popup_login"] : null)) {
            // line 20
            echo "\t\t\t<div class=\"checkout-login\">";
            echo (isset($context["text_register2"]) ? $context["text_register2"] : null);
            echo " &nbsp;<a onclick=\"uniLoginOpen();\" class=\"checkout-login__link\">";
            echo (isset($context["text_login2"]) ? $context["text_login2"] : null);
            echo "</a></div>
\t\t";
        }
        // line 22
        echo "\t\t<div id=\"checkout_data\">\t\t
\t\t\t<form id=\"user\" class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"heading\"><span>";
        // line 25
        echo (isset($context["text_your_details"]) ? $context["text_your_details"] : null);
        echo "</span></div>
\t\t\t\t\t<div class=\"user_data checkout-customer\">
\t\t\t\t\t\t<div class=\"row-flex\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"firstname\" value=\"";
        // line 28
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["name_text"]) ? $context["name_text"] : null);
        echo "\" class=\"checkout-customer__input form-control\" />
\t\t\t\t\t\t\t<input type=\"text\" name=\"lastname\" value=\"";
        // line 29
        echo (isset($context["lastname"]) ? $context["lastname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["lastname_text"]) ? $context["lastname_text"] : null);
        echo "\" class=\"checkout-customer__input form-control ";
        echo ((twig_test_empty((isset($context["show_lastname"]) ? $context["show_lastname"] : null))) ? ("hidden") : (""));
        echo "\" />
\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"";
        // line 30
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["email_text"]) ? $context["email_text"] : null);
        echo "\" class=\"checkout-customer__input form-control ";
        echo ((twig_test_empty((isset($context["show_email"]) ? $context["show_email"] : null))) ? ("hidden") : (""));
        echo "\" />
\t\t\t\t\t\t\t<input type=\"tel\" name=\"telephone\" value=\"";
        // line 31
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["phone_text"]) ? $context["phone_text"] : null);
        echo "\" class=\"checkout-customer__input form-control ";
        echo ((twig_test_empty((isset($context["show_phone"]) ? $context["show_phone"] : null))) ? ("hidden") : (""));
        echo "\" />
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<input type=\"hidden\" name=\"fax\" value=\"\" />
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 36
        echo (isset($context["custom_fields"]) ? $context["custom_fields"] : null);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<script>if(\$('.checkout-customer__input').not('.hidden').length%2) \$('.checkout-customer__input').not('.hidden').last().addClass('full-width');</script>
\t\t\t\t\t<div class=\"checkout-customer__register ";
        // line 39
        echo (((twig_test_empty((isset($context["show_email"]) ? $context["show_email"] : null)) || (isset($context["checkout_passgen"]) ? $context["checkout_passgen"] : null))) ? ("hidden") : (""));
        echo "\">\t
\t\t\t\t\t\t";
        // line 40
        if (twig_test_empty((isset($context["customer_id"]) ? $context["customer_id"] : null))) {
            echo "\t
\t\t\t\t\t\t\t<div class=\"";
            // line 41
            echo ((twig_test_empty((isset($context["checkout_guest"]) ? $context["checkout_guest"] : null))) ? ("hidden") : (""));
            echo "\">
\t\t\t\t\t\t\t\t<label class=\"checkout-customer__register-label input show-register-form\" data-toggle=\"collapse\" data-target=\".checkout-customer__group-pass\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"add-new-customer\" value=\"1\" id=\"register_user\" ";
            // line 43
            echo ((twig_test_empty((isset($context["checkout_guest"]) ? $context["checkout_guest"] : null))) ? ("checked=\"checked\"") : (""));
            echo " /><span></span><span>";
            echo (isset($context["text_register3"]) ? $context["text_register3"] : null);
            echo "</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>    
\t\t\t\t\t\t\t<div class=\"checkout-customer__group-pass ";
            // line 46
            echo (((isset($context["checkout_guest"]) ? $context["checkout_guest"] : null)) ? ("collapse") : (""));
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 47
            if ((isset($context["customer_groups"]) ? $context["customer_groups"] : null)) {
                // line 48
                echo "\t\t\t\t\t\t\t\t\t<div class=\"checkout-customer__group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                // line 49
                echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
                echo ":</label>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                    // line 52
                    echo "\t\t\t\t\t\t\t\t\t\t\t<label class=\"checkout-customer__group-item input\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"customer_group_id\" value=\"";
                    // line 53
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\" id=\"";
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\" ";
                    echo ((($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["customer_group_id"]) ? $context["customer_group_id"] : null))) ? ("checked=\"checked\"") : (""));
                    echo " /><span></span>";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 59
            echo "\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
            // line 60
            echo (isset($context["password_text"]) ? $context["password_text"] : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 62
            if ((isset($context["show_password_confirm"]) ? $context["show_password_confirm"] : null)) {
                echo "\t
\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password-confirm\" value=\"\" placeholder=\"";
                // line 64
                echo (isset($context["password_confirm_text"]) ? $context["password_confirm_text"] : null);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 67
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 69
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"checkout-address payment-address\">
\t\t\t\t\t\t";
        // line 71
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-md-6\">
\t\t\t\t\t<div class=\"shipping_wrap\">
\t\t\t\t\t\t";
        // line 76
        echo (isset($context["shipping_method"]) ? $context["shipping_method"] : null);
        echo "
\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t<div class=\"payment_wrap\">\t\t\t\t\t\t    
\t\t\t\t\t\t";
        // line 79
        echo (isset($context["payment_method"]) ? $context["payment_method"] : null);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12\" style=\"height:10px\"></div>
\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t<div class=\"heading\"><span>";
        // line 84
        echo (isset($context["text_comment2"]) ? $context["text_comment2"] : null);
        echo "</span></div>
\t\t\t\t\t<textarea name=\"comment\" rows=\"3\" class=\"checkout-comment form-control\">";
        // line 85
        echo (isset($context["comment"]) ? $context["comment"] : null);
        echo "</textarea>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<div id=\"confirm\" class=\"row\">
\t\t\t\t<!--
\t\t\t\t<div class=\"total_checkout col-xs-12 text-right\">
\t\t\t\t\t<h3 style=\"margin:10px 0 20px;\"><span style=\"padding:0;color:#777;\">";
        // line 91
        echo (isset($context["text_total_checkout"]) ? $context["text_total_checkout"] : null);
        echo "<span style=\"padding:0;color:#D9534F;\"><span/><span/></h3>
\t\t\t\t</div>
\t\t\t\t";
        // line 93
        if ((isset($context["text_confirm"]) ? $context["text_confirm"] : null)) {
            // line 94
            echo "\t\t\t\t\t<div class=\"buttons col-xs-12 text-right\">
\t\t\t\t\t\t<label class=\"input text-right\"><input type=\"checkbox\" name=\"confirm\" value=\"1\" ";
            // line 95
            echo (((isset($context["confirm"]) ? $context["confirm"] : null)) ? ("checked=\"checked\"") : (""));
            echo " id=\"agree\" /><span></span>";
            echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
            echo "</label>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 98
        echo "\t\t\t\t<div class=\"buttons col-xs-12 text-right\">
\t\t\t\t\t<button data-loading-text=\"";
        // line 99
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" id=\"confirm_checkout\" class=\"btn btn-lg btn-primary\">";
        echo (isset($context["button_confirm_checkout"]) ? $context["button_confirm_checkout"] : null);
        echo "</button>
\t\t\t\t</div>
\t\t\t\t-->
\t\t\t\t<div class=\"col-xs-12 payment\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"checkout-sticky col-md-3 col-lg-3\">
\t\t<div class=\"checkout-sticky__wrapper\">
\t\t\t<div class=\"checkout-sticky__heading heading1\"><span>";
        // line 108
        echo (isset($context["text_your_order"]) ? $context["text_your_order"] : null);
        echo "</span></div>
\t\t\t<div class=\"checkout-sticky__total\"></div>
\t\t\t<div class=\"checkout-sticky__confirm\">
\t\t\t\t";
        // line 111
        if ((isset($context["text_confirm"]) ? $context["text_confirm"] : null)) {
            // line 112
            echo "\t\t\t\t\t<div class=\"checkout-sticky__confirm-agree text-right\">
\t\t\t\t\t\t<label class=\"input text-right\"><input type=\"checkbox\" name=\"confirm\" value=\"1\" ";
            // line 113
            echo (((isset($context["confirm"]) ? $context["confirm"] : null)) ? ("checked=\"checked\"") : (""));
            echo " id=\"agree\" /><span></span>";
            echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
            echo "</label>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 116
        echo "\t\t\t\t<button data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" id=\"confirm_checkout\" class=\"checkout-sticky__confirm-btn btn btn-lg btn-block btn-primary\">";
        echo (isset($context["button_confirm_checkout"]) ? $context["button_confirm_checkout"] : null);
        echo "</button>
\t\t\t</div>
\t\t</div>
\t</div>
\t</div>
\t</div>\t\t\t
    ";
        // line 122
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
</div>
<script>
\$(function() {
\t\$('.total_checkout h3 span span').html(\$('.checkout-cart__totals-text:last').text());
});

\$('body').on('change', 'input[name=\\'shipping_method\\'], input[name=\\'payment_method\\'], .payment-address input[type=\\'text\\'], .payment-address input[type=\\'radio\\'], .payment-address input[type=\\'checkbox\\'], .payment-address textarea, select[name=\\'address_id\\']', function() {
\tuniCheckoutUpdate();
});

\$('body').on('click', '.add_to_cart', function() {
\toption = \$(this).parent().parent().find('.option').children().size();
\toption_checked = \$(this).parent().parent().find('.option input:checked, .option select').size();
\tif(!option || option_checked) {
\t\tsetTimeout(function() { 
\t\t\tuniCheckoutUpdate();
\t\t}, 300);
\t}
});

\$('body').on('click', '#confirm_checkout', function() {
\tvar data = \$('.checkout_form input[type=\\'text\\'], .checkout_form input[type=\\'tel\\'], .checkout_form input[type=\\'email\\'], .checkout_form input[type=\\'date\\'], .checkout_form input[type=\\'datetime-local\\'], .checkout_form input[type=\\'time\\'], .checkout_form input[type=\\'password\\'], .checkout_form input[type=\\'hidden\\'], .checkout_form input[type=\\'checkbox\\']:checked, .checkout_form input[type=\\'radio\\']:checked, .checkout_form textarea, .checkout_form select').serialize();
\t
\tvar form = '#unicheckout';
\t
    \$.ajax({
        url: 'index.php?route=checkout/uni_checkout/validate',
        type: 'post',
        data: data,
        dataType: 'json',
        beforeSend: function() {
\t\t\t\$('#confirm_checkout').button('loading');
\t\t},  
        complete: function() {
\t\t\tif(\$('.payment').html() == '') {
\t\t\t\t\$('#confirm_checkout').button('reset');
\t\t\t}
        },          
        success: function(json) {
\t\t\t\$('#unicheckout .text-danger').remove();
                        
            if (json['error']) {
\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tform_error(form, i, json['error'][i]);
\t\t\t\t}
\t\t\t\t
\t\t\t\tuniFlyAlert('danger', json['error']);
\t\t\t\t
\t\t\t\tif(json['error']['minimum']) {
\t\t\t\t
\t\t\t\t\tvar alert_minimum = json['error']['minimum']+'<button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>';
\t\t\t\t
\t\t\t\t\tif(\$('#unicart .alert').length) {
\t\t\t\t\t\t\$('#unicart .alert').html(alert_minimum);
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('#unicart').prepend('<div class=\"alert alert-danger\">'+alert_minimum+'</div>');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t
\t\t\t\tif(\$('#unicart .alert').length) {
\t\t\t\t\tscroll_to('#unicart .alert');
\t\t\t\t} else {
\t\t\t\t\tscroll_to('.input-warning:first');
\t\t\t\t}
            }
\t\t\t
\t\t\t\$('.payment').html('');
\t\t\t
\t\t\tvar hideButtonConfirm = false;
\t\t\t
\t\t\tif (json['success']) {
\t\t\t\t\$('.payment').html(json['success']['payment']);
\t\t\t\t\$('.payment .btn-primary').addClass('btn-lg');
\t\t\t\t
\t\t\t\tdataLayer.push({
\t\t\t\t\t'ecommerce':{
\t\t\t\t\t\t'currencyCode':'";
        // line 199
        echo (isset($context["currency"]) ? $context["currency"] : null);
        echo "',
\t\t\t\t\t\t'purchase':{
\t\t\t\t\t\t\t'actionField':{
\t\t\t\t\t\t\t\t'id': json['success']['order_id'],
\t\t\t\t\t\t\t\t'goal_id': '";
        // line 203
        echo (isset($context["metric_taget_id"]) ? $context["metric_taget_id"] : null);
        echo "'
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t'products': json['success']['products']
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t});
\t\t\t\t
\t\t\t\tif (typeof(gtag) === 'function') {
\t\t\t\t\tgtag('event', 'purchase', {'transaction_id': json['success']['order_id'], 'currency': '";
        // line 211
        echo (isset($context["currency"]) ? $context["currency"] : null);
        echo "', 'items': json['success']['products']});
\t\t\t\t}
\t\t\t\t
\t\t\t\t";
        // line 214
        if (((isset($context["metric_id"]) ? $context["metric_id"] : null) && (isset($context["metric_target"]) ? $context["metric_target"] : null))) {
            // line 215
            echo "\t\t\t\t\tif (typeof(ym) === 'function') {
\t\t\t\t\t\tym(";
            // line 216
            echo (isset($context["metric_id"]) ? $context["metric_id"] : null);
            echo ", 'reachGoal', '";
            echo (isset($context["metric_target"]) ? $context["metric_target"] : null);
            echo "');
\t\t\t\t\t} else {
\t\t\t\t\t\tnew Function('yaCounter";
            // line 218
            echo (isset($context["metric_id"]) ? $context["metric_id"] : null);
            echo ".reachGoal(\\''+";
            echo (isset($context["metric_target"]) ? $context["metric_target"] : null);
            echo "+'\\')')();
\t\t\t\t\t}
\t\t\t\t";
        }
        // line 221
        echo "\t\t\t\t\t
\t\t\t\t";
        // line 222
        if (((isset($context["analytic_category"]) ? $context["analytic_category"] : null) && (isset($context["analytic_action"]) ? $context["analytic_action"] : null))) {
            // line 223
            echo "\t\t\t\t\tif (typeof(gtag) === 'function') {
\t\t\t\t\t\tgtag('event', '";
            // line 224
            echo (isset($context["analytic_action"]) ? $context["analytic_action"] : null);
            echo "', {'event_category': '";
            echo (isset($context["analytic_category"]) ? $context["analytic_category"] : null);
            echo "'});
\t\t\t\t\t} else if (typeof(ga) === 'function') {
\t\t\t\t\t\tga('send', 'event', '";
            // line 226
            echo (isset($context["analytic_category"]) ? $context["analytic_category"] : null);
            echo "', '";
            echo (isset($context["analytic_action"]) ? $context["analytic_action"] : null);
            echo "');
\t\t\t\t\t}
\t\t\t\t";
        }
        // line 229
        echo "\t\t\t\t
\t\t\t\tif (!\$('.payment h2, .payment p, .payment form, .payment input[type=\\'radio\\'], .payment input[type=\\'checkbox\\'], .payment select').length) {
\t\t\t\t\t\$('.payment').css('display', 'none');
\t\t\t\t\t
\t\t\t\t\tsetTimeout(function() { 
\t\t\t\t\t\t\$('.payment #button-confirm, .payment input[type=\\'button\\'], .payment input[type=\\'submit\\'], .payment button, .payment a, .payment .btn-primary').click();
\t\t\t\t\t}, 300);
\t\t\t\t\t
\t\t\t\t\tif(\$('.payment a').length) {
\t\t\t\t\t\t\$('.payment a')[0].click();
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\thideButtonConfirm = true;
\t\t\t\t}
\t\t\t\t
\t\t\t\tif (\$('.payment form').length && \$('.payment form').attr('action')) {
\t\t\t\t
\t\t\t\t\tvar form_action = \$('.payment form').attr('action'),
\t\t\t\t\t\tact = form_action.split('//'),
\t\t\t\t\t\tact = act[1].substr(0, 14);
\t\t\t\t\t
\t\t\t\t\tif(act == 'www.paypal.com' || act == 'auth.robokassa') {
\t\t\t\t\t\t\$('.payment').css('display', 'none');
\t\t\t\t\t\t\$('.payment .btn-primary').click();
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\thideButtonConfirm = true;
\t\t\t\t}
\t\t\t\t
\t\t\t\tif(hideButtonConfirm) {
\t\t\t\t\t\$('#confirm_checkout').hide();
\t\t\t\t\tuniScrollTo('#confirm .payment');
\t\t\t\t}
\t\t\t}
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    }); 
});  

\$('body').on('focus', '#unicheckout input[name=\\'telephone\\']', function(){
\t\$(this).mask('";
        // line 271
        echo (isset($context["checkout_phone_mask"]) ? $context["checkout_phone_mask"] : null);
        echo "');
});

\$('body').on('click', '#ll_cdek_map .btn.btn-block', function() {
\tsetTimeout(function() {
\t\tuniCheckoutUpdate();
\t}, 200);
});

\$('body').on('click', '#button-coupon', function() {
\t
\tvar form = '#unicheckout';

\t\$.ajax({
\t\turl: 'index.php?route=extension/total/coupon/coupon',
\t\ttype: 'post',
\t\tdata: 'coupon=' + encodeURIComponent(\$('input[name=\\'coupon\\']').val()),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-coupon').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-coupon').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.text-danger').remove();

\t\t\tif (json['error']) {
\t\t\t\tform_error(form, 'coupon');
\t\t\t\tuniFlyAlert('danger', json['error']);
\t\t\t}

\t\t\tif (json['redirect']) {
\t\t\t\tuniCheckoutUpdate();
\t\t\t\tuniFlyAlert('success', '";
        // line 305
        echo (isset($context["text_coupon_success"]) ? $context["text_coupon_success"] : null);
        echo "');
\t\t\t}
\t\t}
\t});
});
\$('body').on('click', '#button-reward', function() {

\tvar form = '#unicheckout';

\t\$.ajax({
\t\turl: 'index.php?route=extension/total/reward/reward',
\t\ttype: 'post',
\t\tdata: 'reward=' + encodeURIComponent(\$('input[name=\\'reward\\']').val()),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-reward').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-reward').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.text-danger').remove();

\t\t\tif (json['error']) {
\t\t\t\tform_error(form, 'reward');
\t\t\t\tuniFlyAlert('danger', json['error']);
\t\t\t}

\t\t\tif (json['redirect']) {
\t\t\t\tuniCheckoutUpdate();
\t\t\t\tuniFlyAlert('success', '";
        // line 335
        echo (isset($context["text_reward_success"]) ? $context["text_reward_success"] : null);
        echo "');
\t\t\t}
\t\t}
\t});
});
\$('body').on('click', '#button-voucher', function() {

\tvar form = '#unicheckout';

\t\$.ajax({
\t\turl: 'index.php?route=extension/total/voucher/voucher',
\t\ttype: 'post',
\t\tdata: 'voucher=' + encodeURIComponent(\$('input[name=\\'voucher\\']').val()),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-voucher').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-voucher').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.text-danger').remove();

\t\t\tif (json['error']) {
\t\t\t\tform_error(form, 'voucher');
\t\t\t\tuniFlyAlert('danger', json['error']);
\t\t\t}

\t\t\tif (json['redirect']) {
\t\t\t\tuniCheckoutUpdate();
\t\t\t\tuniFlyAlert('success', '";
        // line 365
        echo (isset($context["text_voucher_success"]) ? $context["text_voucher_success"] : null);
        echo "');
\t\t\t}
\t\t}
\t});
});

function uniVoucherRemove(key) {
\t\$.ajax({
\t\turl: \$('base').attr('href')+'index.php?route=checkout/cart/remove',
\t\ttype: 'post',
\t\tdata: 'key='+key,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('#cart').load('index.php?route=common/cart/info #cart > *');
\t\t\tuniCheckoutUpdate();
\t\t},
\t    error: function(xhr, ajaxOptions, thrownError) {
\t         alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t    }
\t});
}

function uniCheckoutUpdate() {

\t\$('#confirm_checkout').show();

\tlet data = \$('.payment-address input, .payment-address textarea, .payment-address select').serialize();
\t
\t\$.ajax({
\t\turl: \$('base').attr('href')+'index.php?route=checkout/uni_checkout/addressRender',
\t\ttype: 'post',
\t\tcache: false,
\t\tdata: data,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('html body').append('<div class=\"full-width-loading\"></div>');
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('.payment-address').html(html);
\t\t\t
\t\t\tuniShippingUpdate();
\t\t}
\t});
}

function uniShippingUpdate() {

\tlet data = \$('.shipping-method input[type=\\'radio\\']:checked').serialize();

\t\$.ajax({
\t\turl: \$('base').attr('href')+'index.php?route=checkout/uni_checkout/shippingRender',
\t\ttype: 'post',
\t\tcache: false,
\t\tdata: data,
\t\tdataType: 'html',
\t\tsuccess: function(html) {
\t\t\t\$('.shipping_wrap').html(html);
\t\t\t
\t\t\tuniPaymentUpdate();
\t\t}
\t});
}

function uniPaymentUpdate() {

\tlet data = \$('.payment-method input[type=\\'radio\\']:checked').serialize();

\t\$.ajax({
\t\turl: \$('base').attr('href')+'index.php?route=checkout/uni_checkout/paymentRender',
\t\ttype: 'post',
\t\tcache: false,
\t\tdata: data,
\t\tdataType: 'html',
\t\tsuccess: function(html) {
\t\t\t\$('.payment_wrap').html(html);
\t\t\t
\t\t\t//setTimeout(function() { 
\t\t\t\tuniCartUpdate();
\t\t\t//}, 300);
\t\t}
\t});
}

function uniCartUpdate() {

\tlet data = '';

\t\$.ajax({
\t\turl: \$('base').attr('href')+'index.php?route=checkout/uni_checkout/cartRender',
\t\ttype: 'post',
\t\tcache: false,
\t\tdata: data,
\t\tdataType: 'html',
\t\tsuccess: function(html) {
\t\t\t\$('#unicart').html(html);
\t\t\t
\t\t\t\$('.total_checkout h3 span span').html(\$('.checkout-cart__totals-text:last').text());
\t\t\t
\t\t\t\$('.payment').html('');
\t\t\t\$('#confirm_checkout').button('reset');
\t\t\t
\t\t\t\$('.full-width-loading').remove();
\t\t}
\t});
}
</script>
";
        // line 471
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "unishop2/template/checkout/uni_checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  725 => 471,  616 => 365,  583 => 335,  550 => 305,  513 => 271,  469 => 229,  461 => 226,  454 => 224,  451 => 223,  449 => 222,  446 => 221,  438 => 218,  431 => 216,  428 => 215,  426 => 214,  420 => 211,  409 => 203,  402 => 199,  322 => 122,  310 => 116,  302 => 113,  299 => 112,  297 => 111,  291 => 108,  277 => 99,  274 => 98,  266 => 95,  263 => 94,  261 => 93,  256 => 91,  247 => 85,  243 => 84,  235 => 79,  229 => 76,  221 => 71,  217 => 69,  213 => 67,  207 => 64,  202 => 62,  197 => 60,  194 => 59,  189 => 56,  174 => 53,  171 => 52,  167 => 51,  162 => 49,  159 => 48,  157 => 47,  153 => 46,  145 => 43,  140 => 41,  136 => 40,  132 => 39,  126 => 36,  114 => 31,  106 => 30,  98 => 29,  92 => 28,  86 => 25,  81 => 22,  73 => 20,  71 => 19,  66 => 17,  59 => 13,  55 => 11,  49 => 10,  43 => 8,  35 => 6,  32 => 5,  28 => 4,  24 => 3,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="unicheckout" class="checkout_form container">        */
/* 	<ul class="breadcrumb {{ menu_expanded ? 'col-md-offset-3 col-lg-offset-3 col-xxl-offset-4' }}">*/
/* 		{% for key, breadcrumb in breadcrumbs %}*/
/* 			{% if key + 1 < breadcrumbs|length %}*/
/* 				<li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/* 			{% else %}*/
/* 				<li>{{ breadcrumb.text }}</li>*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 	</ul>*/
/* 	<div id="content">*/
/* 		<div class="heading-h1"><h1>{{ text_checkout }}</h1></div>*/
/* 		<div class="row">*/
/* 		<div class="col-md-9 col-lg-9">*/
/* 		<div id="unicart">*/
/* 			{{ cart }}*/
/* 		</div>*/
/* 		{% if show_popup_login %}*/
/* 			<div class="checkout-login">{{ text_register2 }} &nbsp;<a onclick="uniLoginOpen();" class="checkout-login__link">{{ text_login2 }}</a></div>*/
/* 		{% endif %}*/
/* 		<div id="checkout_data">		*/
/* 			<form id="user" class="row">*/
/* 				<div class="col-md-6">*/
/* 					<div class="heading"><span>{{ text_your_details }}</span></div>*/
/* 					<div class="user_data checkout-customer">*/
/* 						<div class="row-flex">*/
/* 							<input type="text" name="firstname" value="{{ firstname }}" placeholder="{{ name_text }}" class="checkout-customer__input form-control" />*/
/* 							<input type="text" name="lastname" value="{{ lastname }}" placeholder="{{ lastname_text }}" class="checkout-customer__input form-control {{ show_lastname is empty ? 'hidden' }}" />*/
/* 							<input type="email" name="email" value="{{ email }}" placeholder="{{ email_text }}" class="checkout-customer__input form-control {{ show_email is empty ? 'hidden' }}" />*/
/* 							<input type="tel" name="telephone" value="{{ telephone }}" placeholder="{{ phone_text }}" class="checkout-customer__input form-control {{ show_phone is empty ? 'hidden' }}" />*/
/* 						</div>*/
/* */
/* 						<input type="hidden" name="fax" value="" />*/
/* 						*/
/* 						{{ custom_fields }}*/
/* 					</div>*/
/* 					<script>if($('.checkout-customer__input').not('.hidden').length%2) $('.checkout-customer__input').not('.hidden').last().addClass('full-width');</script>*/
/* 					<div class="checkout-customer__register {{ show_email is empty or checkout_passgen ? 'hidden' }}">	*/
/* 						{% if customer_id is empty %}	*/
/* 							<div class="{{ checkout_guest is empty ? 'hidden' }}">*/
/* 								<label class="checkout-customer__register-label input show-register-form" data-toggle="collapse" data-target=".checkout-customer__group-pass">*/
/* 									<input type="checkbox" name="add-new-customer" value="1" id="register_user" {{ checkout_guest is empty ? 'checked="checked"' }} /><span></span><span>{{ text_register3 }}</span>*/
/* 								</label>*/
/* 							</div>    */
/* 							<div class="checkout-customer__group-pass {{ checkout_guest ? 'collapse'}}">*/
/* 								{% if customer_groups %}*/
/* 									<div class="checkout-customer__group">*/
/* 										<label class="control-label">{{ entry_customer_group }}:</label>*/
/* 										<div>*/
/* 										{% for customer_group in customer_groups %}*/
/* 											<label class="checkout-customer__group-item input">*/
/* 												<input type="radio" name="customer_group_id" value="{{ customer_group.customer_group_id }}" id="{{customer_group.customer_group_id}}" {{ customer_group.customer_group_id == customer_group_id ? 'checked="checked"' }} /><span></span>{{ customer_group.name }}*/
/* 											</label>*/
/* 										{% endfor %}*/
/* 										</div>*/
/* 									</div>*/
/* 								{% endif %}*/
/* 								<div class="form-group required">*/
/* 									<input type="password" name="password" value="" placeholder="{{ password_text }}" class="form-control" />*/
/* 								</div>*/
/* 								{% if show_password_confirm %}	*/
/* 									<div class="form-group required">*/
/* 										<input type="password" name="password-confirm" value="" placeholder="{{ password_confirm_text }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endif %}*/
/* 							</div>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 					<div class="checkout-address payment-address">*/
/* 						{{ address }}		*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-xs-12 col-md-6">*/
/* 					<div class="shipping_wrap">*/
/* 						{{ shipping_method }}*/
/* 					</div>							*/
/* 					<div class="payment_wrap">						    */
/* 						{{ payment_method }}*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-xs-12" style="height:10px"></div>*/
/* 				<div class="col-xs-12">*/
/* 					<div class="heading"><span>{{ text_comment2 }}</span></div>*/
/* 					<textarea name="comment" rows="3" class="checkout-comment form-control">{{ comment }}</textarea>*/
/* 				</div>*/
/* 			</form>*/
/* 			<div id="confirm" class="row">*/
/* 				<!--*/
/* 				<div class="total_checkout col-xs-12 text-right">*/
/* 					<h3 style="margin:10px 0 20px;"><span style="padding:0;color:#777;">{{ text_total_checkout }}<span style="padding:0;color:#D9534F;"><span/><span/></h3>*/
/* 				</div>*/
/* 				{% if text_confirm %}*/
/* 					<div class="buttons col-xs-12 text-right">*/
/* 						<label class="input text-right"><input type="checkbox" name="confirm" value="1" {{ confirm ? 'checked="checked"' }} id="agree" /><span></span>{{ text_confirm }}</label>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 				<div class="buttons col-xs-12 text-right">*/
/* 					<button data-loading-text="{{ text_loading }}" id="confirm_checkout" class="btn btn-lg btn-primary">{{ button_confirm_checkout }}</button>*/
/* 				</div>*/
/* 				-->*/
/* 				<div class="col-xs-12 payment"></div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="checkout-sticky col-md-3 col-lg-3">*/
/* 		<div class="checkout-sticky__wrapper">*/
/* 			<div class="checkout-sticky__heading heading1"><span>{{ text_your_order }}</span></div>*/
/* 			<div class="checkout-sticky__total"></div>*/
/* 			<div class="checkout-sticky__confirm">*/
/* 				{% if text_confirm %}*/
/* 					<div class="checkout-sticky__confirm-agree text-right">*/
/* 						<label class="input text-right"><input type="checkbox" name="confirm" value="1" {{ confirm ? 'checked="checked"' }} id="agree" /><span></span>{{ text_confirm }}</label>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 				<button data-loading-text="{{ text_loading }}" id="confirm_checkout" class="checkout-sticky__confirm-btn btn btn-lg btn-block btn-primary">{{ button_confirm_checkout }}</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	</div>*/
/* 	</div>			*/
/*     {{ content_bottom }}*/
/* </div>*/
/* <script>*/
/* $(function() {*/
/* 	$('.total_checkout h3 span span').html($('.checkout-cart__totals-text:last').text());*/
/* });*/
/* */
/* $('body').on('change', 'input[name=\'shipping_method\'], input[name=\'payment_method\'], .payment-address input[type=\'text\'], .payment-address input[type=\'radio\'], .payment-address input[type=\'checkbox\'], .payment-address textarea, select[name=\'address_id\']', function() {*/
/* 	uniCheckoutUpdate();*/
/* });*/
/* */
/* $('body').on('click', '.add_to_cart', function() {*/
/* 	option = $(this).parent().parent().find('.option').children().size();*/
/* 	option_checked = $(this).parent().parent().find('.option input:checked, .option select').size();*/
/* 	if(!option || option_checked) {*/
/* 		setTimeout(function() { */
/* 			uniCheckoutUpdate();*/
/* 		}, 300);*/
/* 	}*/
/* });*/
/* */
/* $('body').on('click', '#confirm_checkout', function() {*/
/* 	var data = $('.checkout_form input[type=\'text\'], .checkout_form input[type=\'tel\'], .checkout_form input[type=\'email\'], .checkout_form input[type=\'date\'], .checkout_form input[type=\'datetime-local\'], .checkout_form input[type=\'time\'], .checkout_form input[type=\'password\'], .checkout_form input[type=\'hidden\'], .checkout_form input[type=\'checkbox\']:checked, .checkout_form input[type=\'radio\']:checked, .checkout_form textarea, .checkout_form select').serialize();*/
/* 	*/
/* 	var form = '#unicheckout';*/
/* 	*/
/*     $.ajax({*/
/*         url: 'index.php?route=checkout/uni_checkout/validate',*/
/*         type: 'post',*/
/*         data: data,*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/* 			$('#confirm_checkout').button('loading');*/
/* 		},  */
/*         complete: function() {*/
/* 			if($('.payment').html() == '') {*/
/* 				$('#confirm_checkout').button('reset');*/
/* 			}*/
/*         },          */
/*         success: function(json) {*/
/* 			$('#unicheckout .text-danger').remove();*/
/*                         */
/*             if (json['error']) {*/
/* 				for (i in json['error']) {*/
/* 					form_error(form, i, json['error'][i]);*/
/* 				}*/
/* 				*/
/* 				uniFlyAlert('danger', json['error']);*/
/* 				*/
/* 				if(json['error']['minimum']) {*/
/* 				*/
/* 					var alert_minimum = json['error']['minimum']+'<button type="button" class="close" data-dismiss="alert">×</button>';*/
/* 				*/
/* 					if($('#unicart .alert').length) {*/
/* 						$('#unicart .alert').html(alert_minimum);*/
/* 					} else {*/
/* 						$('#unicart').prepend('<div class="alert alert-danger">'+alert_minimum+'</div>');*/
/* 					}*/
/* 				}*/
/* 				*/
/* 				if($('#unicart .alert').length) {*/
/* 					scroll_to('#unicart .alert');*/
/* 				} else {*/
/* 					scroll_to('.input-warning:first');*/
/* 				}*/
/*             }*/
/* 			*/
/* 			$('.payment').html('');*/
/* 			*/
/* 			var hideButtonConfirm = false;*/
/* 			*/
/* 			if (json['success']) {*/
/* 				$('.payment').html(json['success']['payment']);*/
/* 				$('.payment .btn-primary').addClass('btn-lg');*/
/* 				*/
/* 				dataLayer.push({*/
/* 					'ecommerce':{*/
/* 						'currencyCode':'{{ currency }}',*/
/* 						'purchase':{*/
/* 							'actionField':{*/
/* 								'id': json['success']['order_id'],*/
/* 								'goal_id': '{{ metric_taget_id }}'*/
/* 							},*/
/* 							'products': json['success']['products']*/
/* 						}*/
/* 					}*/
/* 				});*/
/* 				*/
/* 				if (typeof(gtag) === 'function') {*/
/* 					gtag('event', 'purchase', {'transaction_id': json['success']['order_id'], 'currency': '{{ currency }}', 'items': json['success']['products']});*/
/* 				}*/
/* 				*/
/* 				{% if metric_id and metric_target %}*/
/* 					if (typeof(ym) === 'function') {*/
/* 						ym({{ metric_id }}, 'reachGoal', '{{ metric_target }}');*/
/* 					} else {*/
/* 						new Function('yaCounter{{ metric_id }}.reachGoal(\''+{{ metric_target }}+'\')')();*/
/* 					}*/
/* 				{% endif %}*/
/* 					*/
/* 				{% if analytic_category and analytic_action %}*/
/* 					if (typeof(gtag) === 'function') {*/
/* 						gtag('event', '{{ analytic_action }}', {'event_category': '{{ analytic_category }}'});*/
/* 					} else if (typeof(ga) === 'function') {*/
/* 						ga('send', 'event', '{{ analytic_category }}', '{{ analytic_action }}');*/
/* 					}*/
/* 				{% endif %}*/
/* 				*/
/* 				if (!$('.payment h2, .payment p, .payment form, .payment input[type=\'radio\'], .payment input[type=\'checkbox\'], .payment select').length) {*/
/* 					$('.payment').css('display', 'none');*/
/* 					*/
/* 					setTimeout(function() { */
/* 						$('.payment #button-confirm, .payment input[type=\'button\'], .payment input[type=\'submit\'], .payment button, .payment a, .payment .btn-primary').click();*/
/* 					}, 300);*/
/* 					*/
/* 					if($('.payment a').length) {*/
/* 						$('.payment a')[0].click();*/
/* 					}*/
/* 				} else {*/
/* 					hideButtonConfirm = true;*/
/* 				}*/
/* 				*/
/* 				if ($('.payment form').length && $('.payment form').attr('action')) {*/
/* 				*/
/* 					var form_action = $('.payment form').attr('action'),*/
/* 						act = form_action.split('//'),*/
/* 						act = act[1].substr(0, 14);*/
/* 					*/
/* 					if(act == 'www.paypal.com' || act == 'auth.robokassa') {*/
/* 						$('.payment').css('display', 'none');*/
/* 						$('.payment .btn-primary').click();*/
/* 					}*/
/* 				} else {*/
/* 					hideButtonConfirm = true;*/
/* 				}*/
/* 				*/
/* 				if(hideButtonConfirm) {*/
/* 					$('#confirm_checkout').hide();*/
/* 					uniScrollTo('#confirm .payment');*/
/* 				}*/
/* 			}*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     }); */
/* });  */
/* */
/* $('body').on('focus', '#unicheckout input[name=\'telephone\']', function(){*/
/* 	$(this).mask('{{ checkout_phone_mask }}');*/
/* });*/
/* */
/* $('body').on('click', '#ll_cdek_map .btn.btn-block', function() {*/
/* 	setTimeout(function() {*/
/* 		uniCheckoutUpdate();*/
/* 	}, 200);*/
/* });*/
/* */
/* $('body').on('click', '#button-coupon', function() {*/
/* 	*/
/* 	var form = '#unicheckout';*/
/* */
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/total/coupon/coupon',*/
/* 		type: 'post',*/
/* 		data: 'coupon=' + encodeURIComponent($('input[name=\'coupon\']').val()),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-coupon').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-coupon').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.text-danger').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				form_error(form, 'coupon');*/
/* 				uniFlyAlert('danger', json['error']);*/
/* 			}*/
/* */
/* 			if (json['redirect']) {*/
/* 				uniCheckoutUpdate();*/
/* 				uniFlyAlert('success', '{{ text_coupon_success }}');*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* $('body').on('click', '#button-reward', function() {*/
/* */
/* 	var form = '#unicheckout';*/
/* */
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/total/reward/reward',*/
/* 		type: 'post',*/
/* 		data: 'reward=' + encodeURIComponent($('input[name=\'reward\']').val()),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-reward').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-reward').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.text-danger').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				form_error(form, 'reward');*/
/* 				uniFlyAlert('danger', json['error']);*/
/* 			}*/
/* */
/* 			if (json['redirect']) {*/
/* 				uniCheckoutUpdate();*/
/* 				uniFlyAlert('success', '{{ text_reward_success }}');*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* $('body').on('click', '#button-voucher', function() {*/
/* */
/* 	var form = '#unicheckout';*/
/* */
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/total/voucher/voucher',*/
/* 		type: 'post',*/
/* 		data: 'voucher=' + encodeURIComponent($('input[name=\'voucher\']').val()),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-voucher').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-voucher').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.text-danger').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				form_error(form, 'voucher');*/
/* 				uniFlyAlert('danger', json['error']);*/
/* 			}*/
/* */
/* 			if (json['redirect']) {*/
/* 				uniCheckoutUpdate();*/
/* 				uniFlyAlert('success', '{{ text_voucher_success }}');*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* function uniVoucherRemove(key) {*/
/* 	$.ajax({*/
/* 		url: $('base').attr('href')+'index.php?route=checkout/cart/remove',*/
/* 		type: 'post',*/
/* 		data: 'key='+key,*/
/* 		dataType: 'json',*/
/* 		success: function(json) {*/
/* 			$('#cart').load('index.php?route=common/cart/info #cart > *');*/
/* 			uniCheckoutUpdate();*/
/* 		},*/
/* 	    error: function(xhr, ajaxOptions, thrownError) {*/
/* 	         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 	    }*/
/* 	});*/
/* }*/
/* */
/* function uniCheckoutUpdate() {*/
/* */
/* 	$('#confirm_checkout').show();*/
/* */
/* 	let data = $('.payment-address input, .payment-address textarea, .payment-address select').serialize();*/
/* 	*/
/* 	$.ajax({*/
/* 		url: $('base').attr('href')+'index.php?route=checkout/uni_checkout/addressRender',*/
/* 		type: 'post',*/
/* 		cache: false,*/
/* 		data: data,*/
/* 		dataType: 'html',*/
/* 		beforeSend: function() {*/
/* 			$('html body').append('<div class="full-width-loading"></div>');*/
/* 		},*/
/* 		success: function(html) {*/
/* 			$('.payment-address').html(html);*/
/* 			*/
/* 			uniShippingUpdate();*/
/* 		}*/
/* 	});*/
/* }*/
/* */
/* function uniShippingUpdate() {*/
/* */
/* 	let data = $('.shipping-method input[type=\'radio\']:checked').serialize();*/
/* */
/* 	$.ajax({*/
/* 		url: $('base').attr('href')+'index.php?route=checkout/uni_checkout/shippingRender',*/
/* 		type: 'post',*/
/* 		cache: false,*/
/* 		data: data,*/
/* 		dataType: 'html',*/
/* 		success: function(html) {*/
/* 			$('.shipping_wrap').html(html);*/
/* 			*/
/* 			uniPaymentUpdate();*/
/* 		}*/
/* 	});*/
/* }*/
/* */
/* function uniPaymentUpdate() {*/
/* */
/* 	let data = $('.payment-method input[type=\'radio\']:checked').serialize();*/
/* */
/* 	$.ajax({*/
/* 		url: $('base').attr('href')+'index.php?route=checkout/uni_checkout/paymentRender',*/
/* 		type: 'post',*/
/* 		cache: false,*/
/* 		data: data,*/
/* 		dataType: 'html',*/
/* 		success: function(html) {*/
/* 			$('.payment_wrap').html(html);*/
/* 			*/
/* 			//setTimeout(function() { */
/* 				uniCartUpdate();*/
/* 			//}, 300);*/
/* 		}*/
/* 	});*/
/* }*/
/* */
/* function uniCartUpdate() {*/
/* */
/* 	let data = '';*/
/* */
/* 	$.ajax({*/
/* 		url: $('base').attr('href')+'index.php?route=checkout/uni_checkout/cartRender',*/
/* 		type: 'post',*/
/* 		cache: false,*/
/* 		data: data,*/
/* 		dataType: 'html',*/
/* 		success: function(html) {*/
/* 			$('#unicart').html(html);*/
/* 			*/
/* 			$('.total_checkout h3 span span').html($('.checkout-cart__totals-text:last').text());*/
/* 			*/
/* 			$('.payment').html('');*/
/* 			$('#confirm_checkout').button('reset');*/
/* 			*/
/* 			$('.full-width-loading').remove();*/
/* 		}*/
/* 	});*/
/* }*/
/* </script>*/
/* {{ footer }}*/
