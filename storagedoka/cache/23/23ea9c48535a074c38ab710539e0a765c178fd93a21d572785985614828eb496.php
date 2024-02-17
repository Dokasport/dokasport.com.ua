<?php

/* unishop2/template/extension/module/uni_subscribe.twig */
class __TwigTemplate_0695b0b37086b4faf7f16a733a43daa7fdf4bb8bf871877034c2fdee057f154f extends Twig_Template
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
        echo "<div id=\"subscribe\" class=\"subscribe\">
\t<form name=\"subscribe\" class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"subscribe__info subscribe-info col-sm-3 col-md-3\">
\t\t\t\t";
        // line 5
        echo (isset($context["text_subscribe_info"]) ? $context["text_subscribe_info"] : null);
        echo "
\t\t\t</div>
\t\t\t<div class=\"subscribe__inputblock subscribe-input col-sm-6 col-md-6\">
\t\t\t\t<div class=\"subscribe__email email\">
\t\t\t\t\t<input type=\"text\" name=\"email\" value=\"";
        // line 9
        echo (isset($context["customer_email"]) ? $context["customer_email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_subscribe_mail_placeholder"]) ? $context["text_subscribe_mail_placeholder"] : null);
        echo "\" aria-label=\"Email\" class=\"subscribe__input form-control\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"subscribe__pass pass\">
\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 12
        echo (isset($context["text_subscribe_pass_placeholder"]) ? $context["text_subscribe_pass_placeholder"] : null);
        echo "\" aria-label=\"Password\" disabled=\"disabled\" autocomplete=\"on\" class=\"subscribe__input form-control\" />
\t\t\t\t</div>
\t\t\t\t";
        // line 14
        if ((isset($context["text_subscribe_agree"]) ? $context["text_subscribe_agree"] : null)) {
            // line 15
            echo "\t\t\t\t\t<label class=\"subscribe__agree input\">
\t\t\t\t\t\t<input id=\"confirm\" type=\"checkbox\" name=\"confirm\" value=\"1\" /><span></span>";
            // line 16
            echo (isset($context["text_subscribe_agree"]) ? $context["text_subscribe_agree"] : null);
            echo "
\t\t\t\t\t</label>
\t\t\t\t";
        }
        // line 19
        echo "\t\t\t</div>
\t\t\t<div class=\"col-sm-3 col-md-3\">
\t\t\t\t<button type=\"button\" class=\"subscribe__btn btn btn-block\" data-loading-text=\"";
        // line 21
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\"><i class=\"fa fa-envelope hidden-sm\"></i> <span>";
        echo (isset($context["button_subscribe"]) ? $context["button_subscribe"] : null);
        echo "</span></button>
\t\t\t</div>
\t\t</div>
\t</form>
</div>";
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/uni_subscribe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 21,  56 => 19,  50 => 16,  47 => 15,  45 => 14,  40 => 12,  32 => 9,  25 => 5,  19 => 1,);
    }
}
/* <div id="subscribe" class="subscribe">*/
/* 	<form name="subscribe" class="container">*/
/* 		<div class="row">*/
/* 			<div class="subscribe__info subscribe-info col-sm-3 col-md-3">*/
/* 				{{ text_subscribe_info }}*/
/* 			</div>*/
/* 			<div class="subscribe__inputblock subscribe-input col-sm-6 col-md-6">*/
/* 				<div class="subscribe__email email">*/
/* 					<input type="text" name="email" value="{{ customer_email }}" placeholder="{{ text_subscribe_mail_placeholder }}" aria-label="Email" class="subscribe__input form-control" />*/
/* 				</div>*/
/* 				<div class="subscribe__pass pass">*/
/* 					<input type="password" name="password" value="" placeholder="{{ text_subscribe_pass_placeholder }}" aria-label="Password" disabled="disabled" autocomplete="on" class="subscribe__input form-control" />*/
/* 				</div>*/
/* 				{% if text_subscribe_agree %}*/
/* 					<label class="subscribe__agree input">*/
/* 						<input id="confirm" type="checkbox" name="confirm" value="1" /><span></span>{{ text_subscribe_agree }}*/
/* 					</label>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 			<div class="col-sm-3 col-md-3">*/
/* 				<button type="button" class="subscribe__btn btn btn-block" data-loading-text="{{ text_loading }}"><i class="fa fa-envelope hidden-sm"></i> <span>{{ button_subscribe }}</span></button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</form>*/
/* </div>*/
