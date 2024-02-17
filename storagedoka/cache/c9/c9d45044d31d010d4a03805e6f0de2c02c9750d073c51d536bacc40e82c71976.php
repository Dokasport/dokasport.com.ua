<?php

/* unishop2/template/extension/module/uni_request_form.twig */
class __TwigTemplate_558730119ba637bdf6e756791a2e8ccd07a291456944c0b017f872207b2b1bfa extends Twig_Template
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
        echo "<div id=\"modal-request-form\" class=\"modal\">
\t<div class=\"modal-dialog modal-sm\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\">";
        // line 6
        echo (((isset($context["reason"]) ? $context["reason"] : null)) ? ((isset($context["reason"]) ? $context["reason"] : null)) : ((isset($context["text_callback"]) ? $context["text_callback"] : null)));
        echo "</h4>
\t\t\t</div>
\t\t\t<div id=\"callback\" class=\"modal-request modal-body\">
\t\t\t\t<form name=\"callback-form\">
\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"\" placeholder=\"";
        // line 10
        echo (isset($context["name_text"]) ? $context["name_text"] : null);
        echo "\" class=\"modal-request__input form-control\"/>
\t\t\t\t\t";
        // line 11
        if ((isset($context["show_phone"]) ? $context["show_phone"] : null)) {
            // line 12
            echo "\t\t\t\t\t\t<input type=\"tel\" name=\"phone\" value=\"\" placeholder=\"";
            echo (isset($context["phone_text"]) ? $context["phone_text"] : null);
            echo "\" class=\"modal-request__input modal-request__phone form-control\" />
\t\t\t\t\t";
        }
        // line 14
        echo "\t\t\t\t\t";
        if ((isset($context["show_email"]) ? $context["show_email"] : null)) {
            // line 15
            echo "\t\t\t\t\t\t<input type=\"email\" name=\"mail\" value=\"\" placeholder=\"";
            echo (isset($context["mail_text"]) ? $context["mail_text"] : null);
            echo "\" class=\"modal-request__input modal-request__mail form-control ";
            echo ((twig_test_empty((isset($context["reason"]) ? $context["reason"] : null))) ? ("hidden") : (""));
            echo "\" ";
            echo ((twig_test_empty((isset($context["reason"]) ? $context["reason"] : null))) ? ("disabled") : (""));
            echo " />
\t\t\t\t\t";
        }
        // line 17
        echo "\t\t\t\t\t";
        if ((isset($context["show_comment"]) ? $context["show_comment"] : null)) {
            // line 18
            echo "\t\t\t\t\t\t<textarea name=\"comment\" placeholder=\"";
            echo (isset($context["comment_text"]) ? $context["comment_text"] : null);
            echo "\" class=\"modal-request__input modal-request__comment form-control ";
            echo ((twig_test_empty((isset($context["reason"]) ? $context["reason"] : null))) ? ("hidden") : (""));
            echo "\" ";
            echo ((twig_test_empty((isset($context["reason"]) ? $context["reason"] : null))) ? ("disabled") : (""));
            echo "></textarea>
\t\t\t\t\t";
        }
        // line 20
        echo "\t\t\t\t\t<input type=\"hidden\" name=\"type\" value=\"";
        echo (((isset($context["reason"]) ? $context["reason"] : null)) ? ((isset($context["reason"]) ? $context["reason"] : null)) : ((isset($context["text_callback"]) ? $context["text_callback"] : null)));
        echo "\" />
\t\t\t\t\t<input type=\"hidden\" name=\"form-name\" value=\"callback\" />
\t\t\t\t\t";
        // line 22
        if ((isset($context["product_id"]) ? $context["product_id"] : null)) {
            echo "<input type=\"hidden\" name=\"product_id\" value=\"";
            echo (isset($context["product_id"]) ? $context["product_id"] : null);
            echo "\" />";
        }
        // line 23
        echo "\t\t\t\t\t";
        if ( !(isset($context["reason"]) ? $context["reason"] : null)) {
            // line 24
            echo "\t\t\t\t\t\t";
            if ((isset($context["show_reason1"]) ? $context["show_reason1"] : null)) {
                // line 25
                echo "\t\t\t\t\t\t\t<label class=\"modal-request__label modal-request__reason1 input\"><input type=\"radio\" name=\"reason\" value=\"";
                echo (isset($context["text_reason1"]) ? $context["text_reason1"] : null);
                echo "\" checked=\"checked\" /><span></span>";
                echo (isset($context["text_reason1"]) ? $context["text_reason1"] : null);
                echo "</label>
\t\t\t\t\t\t";
            }
            // line 27
            echo "\t\t\t\t\t\t";
            if ((isset($context["show_reason2"]) ? $context["show_reason2"] : null)) {
                // line 28
                echo "\t\t\t\t\t\t\t<label class=\"modal-request__label modal-request__reason2 input\"><input type=\"radio\" name=\"reason\" value=\"";
                echo (isset($context["text_reason2"]) ? $context["text_reason2"] : null);
                echo "\" /><span></span>";
                echo (isset($context["text_reason2"]) ? $context["text_reason2"] : null);
                echo "</label>
\t\t\t\t\t\t";
            }
            // line 30
            echo "\t\t\t\t\t\t";
            if ((isset($context["show_reason3"]) ? $context["show_reason3"] : null)) {
                // line 31
                echo "\t\t\t\t\t\t\t<label class=\" modal-request__label modal-request__reason3 input\"><input type=\"radio\" name=\"reason\" value=\"";
                echo (isset($context["text_reason3"]) ? $context["text_reason3"] : null);
                echo "\" /><span></span>";
                echo (isset($context["text_reason3"]) ? $context["text_reason3"] : null);
                echo "</label>
\t\t\t\t\t\t";
            }
            // line 33
            echo "\t\t\t\t\t";
        }
        // line 34
        echo "\t\t\t\t\t";
        echo (isset($context["captcha"]) ? $context["captcha"] : null);
        echo "
\t\t\t\t\t";
        // line 35
        if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
            // line 36
            echo "\t\t\t\t\t\t<label class=\"modal-request__agree input\"><input type=\"checkbox\" name=\"confirm\" value=\"1\" /><span></span>";
            echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
            echo "</label>
\t\t\t\t\t";
        }
        // line 38
        echo "\t\t\t\t</form>
\t\t\t\t<button type=\"button\" class=\"modal-request__btn btn btn-sm btn-primary\" data-loading-text=\"";
        // line 39
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" onclick=\"uniRequestSend()\">";
        echo (isset($context["text_send"]) ? $context["text_send"] : null);
        echo "</button>
\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\t\$('.modal-request__reason1, .modal-request__reason2').on('click', function() {
\t\t\t\t\t\t\t\$('.modal-request__mail, .modal-request__comment').addClass('hidden').attr('disabled', true);
\t\t\t\t\t\t});

\t\t\t\t\t\t\$('.modal-request__reason3').on('click', function() {
\t\t\t\t\t\t\t\$('.modal-request__mail, .modal-request__comment').removeClass('hidden').attr('disabled', false);
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t\t\$('body').on('focus', '.modal-request__phone', function(){
\t\t\t\t\t\t\$(this).mask('";
        // line 51
        echo (isset($context["phone_mask"]) ? $context["phone_mask"] : null);
        echo "');
\t\t\t\t\t});
\t\t\t\t</script>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/uni_request_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 51,  138 => 39,  135 => 38,  129 => 36,  127 => 35,  122 => 34,  119 => 33,  111 => 31,  108 => 30,  100 => 28,  97 => 27,  89 => 25,  86 => 24,  83 => 23,  77 => 22,  71 => 20,  61 => 18,  58 => 17,  48 => 15,  45 => 14,  39 => 12,  37 => 11,  33 => 10,  26 => 6,  19 => 1,);
    }
}
/* <div id="modal-request-form" class="modal">*/
/* 	<div class="modal-dialog modal-sm">*/
/* 		<div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/* 				<h4 class="modal-title">{{ reason ? reason : text_callback }}</h4>*/
/* 			</div>*/
/* 			<div id="callback" class="modal-request modal-body">*/
/* 				<form name="callback-form">*/
/* 					<input type="text" name="name" value="" placeholder="{{ name_text }}" class="modal-request__input form-control"/>*/
/* 					{% if show_phone %}*/
/* 						<input type="tel" name="phone" value="" placeholder="{{ phone_text }}" class="modal-request__input modal-request__phone form-control" />*/
/* 					{% endif %}*/
/* 					{% if show_email %}*/
/* 						<input type="email" name="mail" value="" placeholder="{{ mail_text }}" class="modal-request__input modal-request__mail form-control {{ reason is empty ? 'hidden' }}" {{ reason is empty ? 'disabled' }} />*/
/* 					{% endif %}*/
/* 					{% if show_comment %}*/
/* 						<textarea name="comment" placeholder="{{ comment_text }}" class="modal-request__input modal-request__comment form-control {{ reason is empty ? 'hidden' }}" {{ reason is empty ? 'disabled' }}></textarea>*/
/* 					{% endif %}*/
/* 					<input type="hidden" name="type" value="{{ reason ? reason : text_callback }}" />*/
/* 					<input type="hidden" name="form-name" value="callback" />*/
/* 					{% if product_id %}<input type="hidden" name="product_id" value="{{ product_id }}" />{% endif %}*/
/* 					{% if not reason %}*/
/* 						{% if show_reason1 %}*/
/* 							<label class="modal-request__label modal-request__reason1 input"><input type="radio" name="reason" value="{{ text_reason1 }}" checked="checked" /><span></span>{{ text_reason1 }}</label>*/
/* 						{% endif %}*/
/* 						{% if show_reason2 %}*/
/* 							<label class="modal-request__label modal-request__reason2 input"><input type="radio" name="reason" value="{{ text_reason2 }}" /><span></span>{{ text_reason2 }}</label>*/
/* 						{% endif %}*/
/* 						{% if show_reason3 %}*/
/* 							<label class=" modal-request__label modal-request__reason3 input"><input type="radio" name="reason" value="{{ text_reason3 }}" /><span></span>{{ text_reason3 }}</label>*/
/* 						{% endif %}*/
/* 					{% endif %}*/
/* 					{{ captcha }}*/
/* 					{% if text_agree %}*/
/* 						<label class="modal-request__agree input"><input type="checkbox" name="confirm" value="1" /><span></span>{{ text_agree }}</label>*/
/* 					{% endif %}*/
/* 				</form>*/
/* 				<button type="button" class="modal-request__btn btn btn-sm btn-primary" data-loading-text="{{ text_loading }}" onclick="uniRequestSend()">{{ text_send }}</button>*/
/* 				<script type="text/javascript">*/
/* 					$(document).ready(function() {*/
/* 						$('.modal-request__reason1, .modal-request__reason2').on('click', function() {*/
/* 							$('.modal-request__mail, .modal-request__comment').addClass('hidden').attr('disabled', true);*/
/* 						});*/
/* */
/* 						$('.modal-request__reason3').on('click', function() {*/
/* 							$('.modal-request__mail, .modal-request__comment').removeClass('hidden').attr('disabled', false);*/
/* 						});*/
/* 					});*/
/* 					$('body').on('focus', '.modal-request__phone', function(){*/
/* 						$(this).mask('{{ phone_mask }}');*/
/* 					});*/
/* 				</script>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
