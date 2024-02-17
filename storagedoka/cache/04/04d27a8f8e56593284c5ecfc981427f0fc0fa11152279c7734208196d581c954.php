<?php

/* unishop2/template/extension/module/uni_request_list.twig */
class __TwigTemplate_7791b9f7151d7bb6ea9fd08b2956d7cbccd98b6c8b54f39777fc8a0cb3a9691f extends Twig_Template
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
        echo "<div class=\"question-info\">
\t<div class=\"question-info__total\">";
        // line 2
        echo (isset($context["text_question_total"]) ? $context["text_question_total"] : null);
        echo "</div>
\t<button class=\"btn btn-sm btn-primary\" onclick=\"\$('#form-question').collapse('toggle');\">";
        // line 3
        echo (isset($context["button_new_request"]) ? $context["button_new_request"] : null);
        echo "</button>
</div>
<form class=\"form-horizontal collapse\" id=\"form-question\">
\t";
        // line 6
        if ((isset($context["request_guest"]) ? $context["request_guest"] : null)) {
            // line 7
            echo "\t\t<div class=\"rev_form well well-sm\">
\t\t\t<div class=\"form-group required\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<label class=\"control-label\" for=\"input-name\">";
            // line 10
            echo (isset($context["entry_request_name"]) ? $context["entry_request_name"] : null);
            echo "</label>
\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"\" id=\"input-username\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 14
            if ((isset($context["show_phone"]) ? $context["show_phone"] : null)) {
                // line 15
                echo "\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-name\">";
                // line 17
                echo (isset($context["entry_request_phone"]) ? $context["entry_request_phone"] : null);
                echo "</label>
\t\t\t\t\t\t<input type=\"text\" name=\"phone\" value=\"\" id=\"input-phone\" class=\"form-control\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 22
            echo "\t\t\t";
            if ((isset($context["show_email"]) ? $context["show_email"] : null)) {
                // line 23
                echo "\t\t\t\t<div class=\"form-group ";
                echo (((isset($context["show_email_required"]) ? $context["show_email_required"] : null)) ? ("required") : (""));
                echo " \">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t<label class=\"control-label\" for=\"input-name\">";
                // line 25
                echo (isset($context["entry_request_mail"]) ? $context["entry_request_mail"] : null);
                echo " ";
                echo ((twig_test_empty((isset($context["show_email_required"]) ? $context["show_email_required"] : null))) ? ((isset($context["entry_request_mail_required"]) ? $context["entry_request_mail_required"] : null)) : (""));
                echo "</label>
\t\t\t\t\t\t<input type=\"text\" name=\"mail\" value=\"\" id=\"input-mail\" class=\"form-control\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 30
            echo "\t\t\t<div class=\"form-group required\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<label class=\"control-label\" for=\"input-request\">";
            // line 32
            echo (isset($context["entry_request_text"]) ? $context["entry_request_text"] : null);
            echo "</label>
\t\t\t\t\t<textarea name=\"comment\" rows=\"5\" id=\"input-request\" class=\"form-control\"></textarea>
\t\t\t\t\t<div class=\"help-block\">";
            // line 34
            echo (isset($context["text_note"]) ? $context["text_note"] : null);
            echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 37
            echo (isset($context["captcha"]) ? $context["captcha"] : null);
            echo "
\t\t\t";
            // line 38
            if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
                // line 39
                echo "\t\t\t\t<div class=\"radio text-right clearfix\" style=\"margin:0 0 15px\">
\t\t\t\t\t<label class=\"input\"><input id=\"confirm\" type=\"checkbox\" name=\"confirm\" value=\"1\" /><span></span>";
                // line 40
                echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
                echo "</label>
\t\t\t\t</div>
\t\t\t";
            }
            // line 43
            echo "\t\t\t<div class=\"text-right clearfix\">
\t\t\t\t<button type=\"button\" id=\"button-request\" data-loading-text=\"";
            // line 44
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_add_new_request"]) ? $context["button_add_new_request"] : null);
            echo "</button>
\t\t\t</div>
\t\t</div>
\t\t<input type=\"hidden\" name=\"type\" value=\"";
            // line 47
            echo (isset($context["type"]) ? $context["type"] : null);
            echo "\" />
\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
            // line 48
            echo (isset($context["product_id"]) ? $context["product_id"] : null);
            echo "\" />
\t\t<input type=\"hidden\" name=\"form-name\" value=\"question\" />
\t";
        } else {
            // line 51
            echo "\t\t";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "
\t";
        }
        // line 53
        echo "</form>
<div id=\"question-list\">
\t";
        // line 55
        if ((isset($context["requests"]) ? $context["requests"] : null)) {
            // line 56
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["requests"]) ? $context["requests"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["request"]) {
                // line 57
                echo "\t\t\t<div class=\"question-list__item uni-item row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-2 col-xxl-3\">
\t\t\t\t\t<div class=\"question-list__name\"><i class=\"question-list__icon fa fa-user\"></i>";
                // line 59
                echo $this->getAttribute($context["request"], "name", array());
                echo "</div>
\t\t\t\t\t<div class=\"question-list__date\"><i class=\"question-list__icon fa fa-calendar\"></i>";
                // line 60
                echo $this->getAttribute($context["request"], "date_added", array());
                echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-10 col-xxl-17\">
\t\t\t\t\t<div class=\"question-list__comment\">
\t\t\t\t\t\t";
                // line 64
                echo $this->getAttribute($context["request"], "comment", array());
                echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
                // line 66
                if (($this->getAttribute($context["request"], "admin_comment", array()) != "")) {
                    // line 67
                    echo "\t\t\t\t\t\t<div class=\"question-list__reply\">
\t\t\t\t\t\t\t<div class=\"question-list__reply-heading\"><i class=\"question-list__reply-icon fa fa-reply\"></i>";
                    // line 68
                    echo (isset($context["text_admin_reply"]) ? $context["text_admin_reply"] : null);
                    echo "</div>
\t\t\t\t\t\t\t";
                    // line 69
                    echo $this->getAttribute($context["request"], "admin_comment", array());
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 72
                echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['request'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "\t";
        } else {
            // line 76
            echo "\t\t<p>";
            echo (isset($context["text_no_requests"]) ? $context["text_no_requests"] : null);
            echo "</p>
\t";
        }
        // line 78
        echo "\t<div class=\"question-pagination text-center\">
\t\t";
        // line 79
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "
\t</div>
</div>
<script>
\t";
        // line 83
        if ((isset($context["requests_total"]) ? $context["requests_total"] : null)) {
            echo "\$('body').find('.tab-question span').removeClass('hidden').text('";
            echo (isset($context["requests_total"]) ? $context["requests_total"] : null);
            echo "');";
        }
        // line 84
        echo "\t\t
\t\$('#button-request').on('click', function() {
\t\tvar form = '#form-question';
\t\t
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/module/uni_request/mail',
\t\t\ttype: 'post',
\t\t\tdata: \$(form+' input, '+form+' textarea').serialize(),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-request').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-request').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$(form+' .text-danger').remove();
\t\t\t\t\t
\t\t\t\tif (json['success']) {
\t\t\t\t\t\$(form).before('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> '+json['success']+' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t\$(form).slideToggle();
\t\t\t\t\t\$(form+' input, '+form+' textarea').val('');
\t\t\t\t\t
\t\t\t\t\tscroll_to('.alert.alert-success');
\t\t\t\t}
\t\t\t\t
\t\t\t\tif (json['error']) {
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\tform_error(form, i, json['error'][i]);
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tuniFlyAlert('danger', json['error']);
\t\t\t\t}
\t\t\t}
\t\t});
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/uni_request_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 84,  209 => 83,  202 => 79,  199 => 78,  193 => 76,  190 => 75,  182 => 72,  176 => 69,  172 => 68,  169 => 67,  167 => 66,  162 => 64,  155 => 60,  151 => 59,  147 => 57,  142 => 56,  140 => 55,  136 => 53,  130 => 51,  124 => 48,  120 => 47,  112 => 44,  109 => 43,  103 => 40,  100 => 39,  98 => 38,  94 => 37,  88 => 34,  83 => 32,  79 => 30,  69 => 25,  63 => 23,  60 => 22,  52 => 17,  48 => 15,  46 => 14,  39 => 10,  34 => 7,  32 => 6,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="question-info">*/
/* 	<div class="question-info__total">{{ text_question_total }}</div>*/
/* 	<button class="btn btn-sm btn-primary" onclick="$('#form-question').collapse('toggle');">{{ button_new_request }}</button>*/
/* </div>*/
/* <form class="form-horizontal collapse" id="form-question">*/
/* 	{% if request_guest %}*/
/* 		<div class="rev_form well well-sm">*/
/* 			<div class="form-group required">*/
/* 				<div class="col-sm-12">*/
/* 					<label class="control-label" for="input-name">{{ entry_request_name }}</label>*/
/* 					<input type="text" name="name" value="" id="input-username" class="form-control" />*/
/* 				</div>*/
/* 			</div>*/
/* 			{% if show_phone %}*/
/* 				<div class="form-group required">*/
/* 					<div class="col-sm-12">*/
/* 						<label class="control-label" for="input-name">{{ entry_request_phone }}</label>*/
/* 						<input type="text" name="phone" value="" id="input-phone" class="form-control" />*/
/* 					</div>*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			{% if show_email %}*/
/* 				<div class="form-group {{ show_email_required ? 'required' }} ">*/
/* 					<div class="col-sm-12">*/
/* 						<label class="control-label" for="input-name">{{ entry_request_mail }} {{ show_email_required is empty ? entry_request_mail_required }}</label>*/
/* 						<input type="text" name="mail" value="" id="input-mail" class="form-control" />*/
/* 					</div>*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			<div class="form-group required">*/
/* 				<div class="col-sm-12">*/
/* 					<label class="control-label" for="input-request">{{ entry_request_text }}</label>*/
/* 					<textarea name="comment" rows="5" id="input-request" class="form-control"></textarea>*/
/* 					<div class="help-block">{{ text_note }}</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			{{ captcha }}*/
/* 			{% if text_agree %}*/
/* 				<div class="radio text-right clearfix" style="margin:0 0 15px">*/
/* 					<label class="input"><input id="confirm" type="checkbox" name="confirm" value="1" /><span></span>{{ text_agree }}</label>*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			<div class="text-right clearfix">*/
/* 				<button type="button" id="button-request" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ button_add_new_request }}</button>*/
/* 			</div>*/
/* 		</div>*/
/* 		<input type="hidden" name="type" value="{{ type }}" />*/
/* 		<input type="hidden" name="product_id" value="{{ product_id }}" />*/
/* 		<input type="hidden" name="form-name" value="question" />*/
/* 	{% else %}*/
/* 		{{ text_login }}*/
/* 	{% endif %}*/
/* </form>*/
/* <div id="question-list">*/
/* 	{% if requests %}*/
/* 		{% for request in requests %}*/
/* 			<div class="question-list__item uni-item row">*/
/* 				<div class="col-xs-12 col-sm-2 col-xxl-3">*/
/* 					<div class="question-list__name"><i class="question-list__icon fa fa-user"></i>{{ request.name }}</div>*/
/* 					<div class="question-list__date"><i class="question-list__icon fa fa-calendar"></i>{{ request.date_added }}</div>*/
/* 				</div>*/
/* 				<div class="col-xs-12 col-sm-10 col-xxl-17">*/
/* 					<div class="question-list__comment">*/
/* 						{{ request.comment }}*/
/* 					</div>*/
/* 					{% if request.admin_comment != '' %}*/
/* 						<div class="question-list__reply">*/
/* 							<div class="question-list__reply-heading"><i class="question-list__reply-icon fa fa-reply"></i>{{ text_admin_reply }}</div>*/
/* 							{{ request.admin_comment }}*/
/* 						</div>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 			</div>*/
/* 		{% endfor %}*/
/* 	{% else %}*/
/* 		<p>{{ text_no_requests }}</p>*/
/* 	{% endif %}*/
/* 	<div class="question-pagination text-center">*/
/* 		{{ pagination }}*/
/* 	</div>*/
/* </div>*/
/* <script>*/
/* 	{% if requests_total %}$('body').find('.tab-question span').removeClass('hidden').text('{{ requests_total }}');{% endif %}*/
/* 		*/
/* 	$('#button-request').on('click', function() {*/
/* 		var form = '#form-question';*/
/* 		*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=extension/module/uni_request/mail',*/
/* 			type: 'post',*/
/* 			data: $(form+' input, '+form+' textarea').serialize(),*/
/* 			dataType: 'json',*/
/* 			beforeSend: function() {*/
/* 				$('#button-request').button('loading');*/
/* 			},*/
/* 			complete: function() {*/
/* 				$('#button-request').button('reset');*/
/* 			},*/
/* 			success: function(json) {*/
/* 				$(form+' .text-danger').remove();*/
/* 					*/
/* 				if (json['success']) {*/
/* 					$(form).before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> '+json['success']+' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 					$(form).slideToggle();*/
/* 					$(form+' input, '+form+' textarea').val('');*/
/* 					*/
/* 					scroll_to('.alert.alert-success');*/
/* 				}*/
/* 				*/
/* 				if (json['error']) {*/
/* 					for (i in json['error']) {*/
/* 						form_error(form, i, json['error'][i]);*/
/* 					}*/
/* 					*/
/* 					uniFlyAlert('danger', json['error']);*/
/* 				}*/
/* 			}*/
/* 		});*/
/* 	});*/
/* </script>*/
