<?php

/* unishop2/template/account/account.twig */
class __TwigTemplate_e66c27bec3d2c2230f66e887c2ef1944d1d036599b589e179a238e58e8f24a85 extends Twig_Template
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
<div class=\"container\">
\t<ul class=\"breadcrumb\">
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
\t";
        // line 12
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 13
            echo "\t\t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "</div>
\t";
        }
        // line 15
        echo "\t<div class=\"row\">
\t\t";
        // line 16
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
\t\t";
        // line 17
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 18
            echo "\t\t\t";
            $context["class"] = "col-sm-4 col-md-6 col-lg-6 col-xxl-12";
            // line 19
            echo "\t\t";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 20
            echo "\t\t\t";
            $context["class"] = "col-sm-8 col-md-9 col-lg-9 col-xxl-16";
            // line 21
            echo "\t\t";
        } else {
            // line 22
            echo "\t\t\t";
            $context["class"] = "col-sm-12";
            // line 23
            echo "\t\t";
        }
        // line 24
        echo "\t\t<div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo " account-index\">
\t\t\t";
        // line 25
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
\t\t\t<div class=\"heading-h1\"><h1>";
        // line 26
        echo (isset($context["text_my_account"]) ? $context["text_my_account"] : null);
        echo "</h1></div>
\t\t\t<div class=\"row row-flex\">
\t\t\t\t<div class=\"col-xs-6 col-sm-3 col-md-2\">
\t\t\t\t\t<a href=\"";
        // line 29
        echo (isset($context["edit"]) ? $context["edit"] : null);
        echo "\" class=\"account-index__item\"><i class=\"account-index__icon fa fa-edit\"></i>";
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-6 col-sm-3 col-md-2\">
\t\t\t\t\t<a href=\"";
        // line 32
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" class=\"account-index__item\"><i class=\"account-index__icon fa fa-ellipsis-h\"></i>";
        echo (isset($context["text_password"]) ? $context["text_password"] : null);
        echo "</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-6 col-sm-3 col-md-2\">
\t\t\t\t\t<a href=\"";
        // line 35
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "\" class=\"account-index__item\"><i class=\"account-index__icon fa fa-address-book\"></i>";
        echo (isset($context["text_address"]) ? $context["text_address"] : null);
        echo "</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-6 col-sm-3 col-md-2\">
\t\t\t\t\t<a href=\"";
        // line 38
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\" class=\"account-index__item\"><i class=\"account-index__icon fa fa-heart\"></i>";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-6 col-sm-3 col-md-2\">
\t\t\t\t\t<a href=\"";
        // line 41
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\" class=\"account-index__item\"><i class=\"account-index__icon fa fa-history\"></i>";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-6 col-sm-3 col-md-2\">
\t\t\t\t\t<a href=\"";
        // line 44
        echo (isset($context["download"]) ? $context["download"] : null);
        echo "\" class=\"account-index__item\"><i class=\"account-index__icon fa fa-download\"></i>";
        echo (isset($context["text_download"]) ? $context["text_download"] : null);
        echo "</a>
\t\t\t\t</div>
\t\t\t\t";
        // line 46
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 47
            echo "\t\t\t\t\t<div class=\"col-xs-6 col-sm-3 col-md-2\">
\t\t\t\t\t\t<a href=\"";
            // line 48
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "\" class=\"account-index__item\"><i class=\"account-index__icon fa fa-gift\"></i>";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo "</a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t<div class=\"col-xs-6 col-sm-3 col-md-2\">
\t\t\t\t\t<a href=\"";
        // line 52
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\" class=\"account-index__item\"><i class=\"account-index__icon fa fa-reply\" aria-hidden=\"true\"></i>";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-6 col-sm-3 col-md-2\">
\t\t\t\t\t<a href=\"";
        // line 55
        echo (isset($context["transaction"]) ? $context["transaction"] : null);
        echo "\" class=\"account-index__item\"><i class=\"account-index__icon fa fa-exchange-alt\"></i>";
        echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
        echo "</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-6 col-sm-3 col-md-2\">
\t\t\t\t\t<a href=\"";
        // line 58
        echo (isset($context["recurring"]) ? $context["recurring"] : null);
        echo "\" class=\"account-index__item\"><i class=\"account-index__icon fa fa-user\"></i>";
        echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
        echo "</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-6 col-sm-3 col-md-2\">
\t\t\t\t\t<a href=\"";
        // line 61
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\" class=\"account-index__item\"><i class=\"account-index__icon fa fa-newspaper\"></i>";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row row-flex\">
\t\t\t\t<div class=\"heading col-xs-12\"><span>";
        // line 65
        echo (isset($context["text_my_affiliate"]) ? $context["text_my_affiliate"] : null);
        echo "</span></div>
\t\t\t\t<div class=\"col-xs-6 col-sm-3 col-md-2\">
\t\t\t\t\t<a href=\"";
        // line 67
        echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
        echo "\" class=\"account-index__item\"><i class=\"account-index__icon fa fa-users\"></i>";
        echo ((twig_test_empty((isset($context["tracking"]) ? $context["tracking"] : null))) ? ((isset($context["text_affiliate_add"]) ? $context["text_affiliate_add"] : null)) : ((isset($context["text_affiliate_edit"]) ? $context["text_affiliate_edit"] : null)));
        echo "</a>
\t\t\t\t</div>
\t\t\t\t";
        // line 69
        if ((isset($context["tracking"]) ? $context["tracking"] : null)) {
            // line 70
            echo "\t\t\t\t\t<div class=\"col-xs-6 col-sm-3 col-md-2\">
\t\t\t\t\t\t<a href=\"";
            // line 71
            echo (isset($context["tracking"]) ? $context["tracking"] : null);
            echo "\" class=\"account-index__item\"><i class=\"account-index__icon fa fa-edit\"></i>";
            echo (isset($context["text_tracking"]) ? $context["text_tracking"] : null);
            echo "</a>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 74
        echo "\t\t\t</div>
\t\t\t";
        // line 75
        if ((isset($context["credit_cards"]) ? $context["credit_cards"] : null)) {
            // line 76
            echo "\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"heading col-xs-12\"><span>";
            // line 77
            echo (isset($context["text_credit_card"]) ? $context["text_credit_card"] : null);
            echo "</span></div>
\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["credit_cards"]) ? $context["credit_cards"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 81
                echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                echo $this->getAttribute($context["credit_card"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["credit_card"], "name", array());
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 87
        echo "\t\t\t</div>
\t\t\t";
        // line 88
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
\t\t";
        // line 89
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t</div>
</div>
";
        // line 92
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "unishop2/template/account/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 92,  268 => 89,  264 => 88,  261 => 87,  255 => 83,  244 => 81,  240 => 80,  234 => 77,  231 => 76,  229 => 75,  226 => 74,  218 => 71,  215 => 70,  213 => 69,  206 => 67,  201 => 65,  192 => 61,  184 => 58,  176 => 55,  168 => 52,  165 => 51,  157 => 48,  154 => 47,  152 => 46,  145 => 44,  137 => 41,  129 => 38,  121 => 35,  113 => 32,  105 => 29,  99 => 26,  95 => 25,  90 => 24,  87 => 23,  84 => 22,  81 => 21,  78 => 20,  75 => 19,  72 => 18,  70 => 17,  66 => 16,  63 => 15,  57 => 13,  55 => 12,  52 => 11,  46 => 10,  40 => 8,  32 => 6,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{header}}*/
/* <div class="container">*/
/* 	<ul class="breadcrumb">*/
/* 		{% for key, breadcrumb in breadcrumbs %}*/
/* 			{% if key+1 < breadcrumbs|length %}*/
/* 				<li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/* 			{% else %}*/
/* 				<li>{{ breadcrumb.text }}</li>*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 	</ul>*/
/* 	{% if success %}*/
/* 		<div class="alert alert-success"><i class="fa fa-check-circle"></i> {{ success }}</div>*/
/* 	{% endif %}*/
/* 	<div class="row">*/
/* 		{{column_left}}*/
/* 		{% if column_left and column_right %}*/
/* 			{% set class = 'col-sm-4 col-md-6 col-lg-6 col-xxl-12' %}*/
/* 		{% elseif column_left or column_right %}*/
/* 			{% set class = 'col-sm-8 col-md-9 col-lg-9 col-xxl-16' %}*/
/* 		{% else %}*/
/* 			{% set class = 'col-sm-12' %}*/
/* 		{% endif %}*/
/* 		<div id="content" class="{{ class }} account-index">*/
/* 			{{content_top}}*/
/* 			<div class="heading-h1"><h1>{{ text_my_account }}</h1></div>*/
/* 			<div class="row row-flex">*/
/* 				<div class="col-xs-6 col-sm-3 col-md-2">*/
/* 					<a href="{{ edit }}" class="account-index__item"><i class="account-index__icon fa fa-edit"></i>{{ text_edit }}</a>*/
/* 				</div>*/
/* 				<div class="col-xs-6 col-sm-3 col-md-2">*/
/* 					<a href="{{ password }}" class="account-index__item"><i class="account-index__icon fa fa-ellipsis-h"></i>{{ text_password }}</a>*/
/* 				</div>*/
/* 				<div class="col-xs-6 col-sm-3 col-md-2">*/
/* 					<a href="{{ address }}" class="account-index__item"><i class="account-index__icon fa fa-address-book"></i>{{ text_address }}</a>*/
/* 				</div>*/
/* 				<div class="col-xs-6 col-sm-3 col-md-2">*/
/* 					<a href="{{ wishlist }}" class="account-index__item"><i class="account-index__icon fa fa-heart"></i>{{text_wishlist}}</a>*/
/* 				</div>*/
/* 				<div class="col-xs-6 col-sm-3 col-md-2">*/
/* 					<a href="{{ order }}" class="account-index__item"><i class="account-index__icon fa fa-history"></i>{{ text_order }}</a>*/
/* 				</div>*/
/* 				<div class="col-xs-6 col-sm-3 col-md-2">*/
/* 					<a href="{{ download }}" class="account-index__item"><i class="account-index__icon fa fa-download"></i>{{ text_download }}</a>*/
/* 				</div>*/
/* 				{% if reward %}*/
/* 					<div class="col-xs-6 col-sm-3 col-md-2">*/
/* 						<a href="{{ reward }}" class="account-index__item"><i class="account-index__icon fa fa-gift"></i>{{ text_reward }}</a>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 				<div class="col-xs-6 col-sm-3 col-md-2">*/
/* 					<a href="{{return}}" class="account-index__item"><i class="account-index__icon fa fa-reply" aria-hidden="true"></i>{{ text_return }}</a>*/
/* 				</div>*/
/* 				<div class="col-xs-6 col-sm-3 col-md-2">*/
/* 					<a href="{{ transaction }}" class="account-index__item"><i class="account-index__icon fa fa-exchange-alt"></i>{{ text_transaction }}</a>*/
/* 				</div>*/
/* 				<div class="col-xs-6 col-sm-3 col-md-2">*/
/* 					<a href="{{ recurring }}" class="account-index__item"><i class="account-index__icon fa fa-user"></i>{{ text_recurring }}</a>*/
/* 				</div>*/
/* 				<div class="col-xs-6 col-sm-3 col-md-2">*/
/* 					<a href="{{ newsletter }}" class="account-index__item"><i class="account-index__icon fa fa-newspaper"></i>{{ text_newsletter }}</a>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="row row-flex">*/
/* 				<div class="heading col-xs-12"><span>{{ text_my_affiliate }}</span></div>*/
/* 				<div class="col-xs-6 col-sm-3 col-md-2">*/
/* 					<a href="{{ affiliate }}" class="account-index__item"><i class="account-index__icon fa fa-users"></i>{{ tracking is empty ? text_affiliate_add : text_affiliate_edit }}</a>*/
/* 				</div>*/
/* 				{% if tracking %}*/
/* 					<div class="col-xs-6 col-sm-3 col-md-2">*/
/* 						<a href="{{ tracking }}" class="account-index__item"><i class="account-index__icon fa fa-edit"></i>{{ text_tracking }}</a>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 			{% if credit_cards %}*/
/* 				<div class="row">*/
/* 					<div class="heading col-xs-12"><span>{{text_credit_card}}</span></div>*/
/* 					<div class="col-xs-12">*/
/* 						<ul class="list-unstyled">*/
/* 							{% for credit_card in credit_cards %}*/
/* 								<li><a href="{{ credit_card.href }}">{{ credit_card.name }}</a></li>*/
/* 							{% endfor %}*/
/* 						</ul>*/
/* 					</div>*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			</div>*/
/* 			{{ content_bottom }}</div>*/
/* 		{{ column_right }}*/
/* 	</div>*/
/* </div>*/
/* {{ footer }}*/
