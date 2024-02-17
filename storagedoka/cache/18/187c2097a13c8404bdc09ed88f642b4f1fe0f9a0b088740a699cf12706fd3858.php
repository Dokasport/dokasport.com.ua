<?php

/* unishop2/template/common/cart.twig */
class __TwigTemplate_cfe5cde7772415716470c8289c7d79cc1d42c786dc4acbd373cbd0cb6fe09df1 extends Twig_Template
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
        echo "<div id=\"cart\" class=\"header-cart\">
\t<button data-toggle=\"dropdown\" class=\"header-cart__btn dropdown-toggle\">
\t\t<i class=\"header-cart__icon fa fa-shopping-bag\"></i>
\t\t<span id=\"cart-total\" class=\"header-cart__total-items\">";
        // line 4
        echo (isset($context["items"]) ? $context["items"] : null);
        echo "</span>
\t</button>
\t<div class=\"header-cart__dropdown dropdown-menu pull-right\">
\t\t";
        // line 7
        if (((isset($context["products"]) ? $context["products"] : null) || (isset($context["vouchers"]) ? $context["vouchers"] : null))) {
            // line 8
            echo "\t\t\t<div class=\"header-cart__wrapper\" data-products=\"";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["i"] => $context["product"]) {
                echo $this->getAttribute($context["product"], "product_id", array());
                echo ",";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\">
\t\t\t";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 10
                echo "\t\t\t\t<div class=\"header-cart__item\">
\t\t\t\t\t";
                // line 11
                if ($this->getAttribute($context["product"], "thumb", array())) {
                    // line 12
                    echo "\t\t\t\t\t\t<div class=\"header-cart__image\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 13
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-thumbnail\" /></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 16
                echo "\t\t\t\t\t<div class=\"header-cart__name\">
\t\t\t\t\t\t<a href=\"";
                // line 17
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a>
\t\t\t\t\t\t";
                // line 18
                if ($this->getAttribute($context["product"], "option", array())) {
                    // line 19
                    echo "\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 20
                        echo "\t\t\t\t\t\t\t\t<br />- <small>";
                        echo $this->getAttribute($context["option"], "name", array());
                        echo " ";
                        echo $this->getAttribute($context["option"], "value", array());
                        echo "</small>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 22
                    echo "\t\t\t\t\t\t";
                }
                // line 23
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["product"], "recurring", array())) {
                    // line 24
                    echo "\t\t\t\t\t\t\t<br />- <small>";
                    echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "recurring", array());
                    echo "</small>
\t\t\t\t\t\t";
                }
                // line 26
                echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"header-cart__quantity\">
\t\t\t\t\t\t<div class=\"qty-switch\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"quantity[";
                // line 29
                echo $this->getAttribute($context["product"], "cart_id", array());
                echo "]\" value=\"";
                echo $this->getAttribute($context["product"], "quantity", array());
                echo "\" data-minimum=\"";
                echo $this->getAttribute($context["product"], "minimum", array());
                echo "\" data-cid=\"";
                echo $this->getAttribute($context["product"], "cart_id", array());
                echo "\" data-pid=\"";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "\" class=\"qty-switch__input form-control\" /> 
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<i class=\"qty-switch__btn fa fa-plus btn-default\"></i>
\t\t\t\t\t\t\t\t<i class=\"qty-switch__btn fa fa-minus btn-default\"></i> 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"header-cart__total\">";
                // line 36
                echo $this->getAttribute($context["product"], "total", array());
                echo "</div>
\t\t\t\t\t<div class=\"header-cart__remove\">
\t\t\t\t\t\t<button type=\"button\" onclick=\"cart.remove('";
                // line 38
                echo $this->getAttribute($context["product"], "cart_id", array());
                echo "', ";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo ");\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"header-cart__remove-btn\"><i class=\"far fa-trash-alt\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 43
                echo "\t\t\t\t<div class=\"header-cart__item\">
\t\t\t\t\t<div></div>
\t\t\t\t\t<div class=\"header-cart__name\">";
                // line 45
                echo $this->getAttribute($context["voucher"], "description", array());
                echo "</div>
\t\t\t\t\t<div class=\"header-cart__quantity\">x&nbsp;1</div>
\t\t\t\t\t<div class=\"header-cart__total\">";
                // line 47
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</div>
\t\t\t\t\t<div class=\"header-cart__remove\">
\t\t\t\t\t\t<button type=\"button\" onclick=\"voucher.remove('";
                // line 49
                echo $this->getAttribute($context["voucher"], "key", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"\"><i class=\"far fa-trash-alt\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "\t\t\t</div>
\t\t\t<div class=\"header-cart__totals\">
\t\t\t\t";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 56
                echo "\t\t\t\t\t<div class=\"header-cart__totals-item\">
\t\t\t\t\t\t<div class=\"header-cart__totals-title\">";
                // line 57
                echo $this->getAttribute($context["total"], "title", array());
                echo ":</div>
\t\t\t\t\t\t<div class=\"header-cart__totals-text\">";
                // line 58
                echo $this->getAttribute($context["total"], "text", array());
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "\t\t\t</div>
\t\t\t<hr />
\t\t\t<div class=\"header-cart__buttons\">
\t\t\t\t";
            // line 64
            if ((isset($context["uni_checkout_href"]) ? $context["uni_checkout_href"] : null)) {
                // line 65
                echo "\t\t\t\t\t<a href=\"";
                echo (isset($context["uni_checkout_href"]) ? $context["uni_checkout_href"] : null);
                echo "\" class=\"btn btn-sm btn-primary\">";
                echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
                echo "</a>
\t\t\t\t";
            } else {
                // line 67
                echo "\t\t\t\t\t<a href=\"";
                echo (isset($context["cart"]) ? $context["cart"] : null);
                echo "\"><small>";
                echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
                echo "</small></a>&nbsp;&nbsp;&nbsp;
\t\t\t\t\t<a href=\"";
                // line 68
                echo (isset($context["checkout"]) ? $context["checkout"] : null);
                echo "\" class=\"btn btn-sm btn-primary\">";
                echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
                echo "</a>
\t\t\t\t";
            }
            // line 70
            echo "\t\t\t</div>
\t\t";
        } else {
            // line 72
            echo "\t\t\t<div class=\"header-cart__empty\">";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</div>
\t\t";
        }
        // line 74
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "unishop2/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 74,  240 => 72,  236 => 70,  229 => 68,  222 => 67,  214 => 65,  212 => 64,  207 => 61,  198 => 58,  194 => 57,  191 => 56,  187 => 55,  183 => 53,  171 => 49,  166 => 47,  161 => 45,  157 => 43,  152 => 42,  138 => 38,  133 => 36,  115 => 29,  110 => 26,  102 => 24,  99 => 23,  96 => 22,  85 => 20,  80 => 19,  78 => 18,  72 => 17,  69 => 16,  57 => 13,  54 => 12,  52 => 11,  49 => 10,  45 => 9,  32 => 8,  30 => 7,  24 => 4,  19 => 1,);
    }
}
/* <div id="cart" class="header-cart">*/
/* 	<button data-toggle="dropdown" class="header-cart__btn dropdown-toggle">*/
/* 		<i class="header-cart__icon fa fa-shopping-bag"></i>*/
/* 		<span id="cart-total" class="header-cart__total-items">{{ items }}</span>*/
/* 	</button>*/
/* 	<div class="header-cart__dropdown dropdown-menu pull-right">*/
/* 		{% if products or vouchers %}*/
/* 			<div class="header-cart__wrapper" data-products="{% for i, product in products %}{{ product.product_id }},{% endfor %}">*/
/* 			{% for product in products %}*/
/* 				<div class="header-cart__item">*/
/* 					{% if product.thumb %}*/
/* 						<div class="header-cart__image">*/
/* 							<a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-thumbnail" /></a>*/
/* 						</div>*/
/* 					{% endif %}*/
/* 					<div class="header-cart__name">*/
/* 						<a href="{{ product.href }}">{{ product.name }}</a>*/
/* 						{% if product.option %}*/
/* 							{% for option in product.option %}*/
/* 								<br />- <small>{{ option.name }} {{ option.value }}</small>*/
/* 							{% endfor %}*/
/* 						{% endif %}*/
/* 						{% if product.recurring %}*/
/* 							<br />- <small>{{ text_recurring }} {{ product.recurring }}</small>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 					<div class="header-cart__quantity">*/
/* 						<div class="qty-switch">*/
/* 							<input type="text" name="quantity[{{ product.cart_id }}]" value="{{ product.quantity }}" data-minimum="{{ product.minimum }}" data-cid="{{ product.cart_id }}" data-pid="{{ product.product_id }}" class="qty-switch__input form-control" /> */
/* 							<div>*/
/* 								<i class="qty-switch__btn fa fa-plus btn-default"></i>*/
/* 								<i class="qty-switch__btn fa fa-minus btn-default"></i> */
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="header-cart__total">{{ product.total }}</div>*/
/* 					<div class="header-cart__remove">*/
/* 						<button type="button" onclick="cart.remove('{{ product.cart_id }}', {{ product.product_id }});" title="{{ button_remove }}" class="header-cart__remove-btn"><i class="far fa-trash-alt"></i></button>*/
/* 					</div>*/
/* 				</div>*/
/* 			{% endfor %}*/
/* 			{% for voucher in vouchers %}*/
/* 				<div class="header-cart__item">*/
/* 					<div></div>*/
/* 					<div class="header-cart__name">{{ voucher.description }}</div>*/
/* 					<div class="header-cart__quantity">x&nbsp;1</div>*/
/* 					<div class="header-cart__total">{{ voucher.amount }}</div>*/
/* 					<div class="header-cart__remove">*/
/* 						<button type="button" onclick="voucher.remove('{{ voucher.key }}');" title="{{ button_remove }}" class=""><i class="far fa-trash-alt"></i></button>*/
/* 					</div>*/
/* 				</div>*/
/* 			{% endfor %}*/
/* 			</div>*/
/* 			<div class="header-cart__totals">*/
/* 				{% for total in totals %}*/
/* 					<div class="header-cart__totals-item">*/
/* 						<div class="header-cart__totals-title">{{ total.title }}:</div>*/
/* 						<div class="header-cart__totals-text">{{ total.text }}</div>*/
/* 					</div>*/
/* 				{% endfor %}*/
/* 			</div>*/
/* 			<hr />*/
/* 			<div class="header-cart__buttons">*/
/* 				{% if uni_checkout_href %}*/
/* 					<a href="{{ uni_checkout_href }}" class="btn btn-sm btn-primary">{{ text_checkout }}</a>*/
/* 				{% else %}*/
/* 					<a href="{{ cart }}"><small>{{ text_cart }}</small></a>&nbsp;&nbsp;&nbsp;*/
/* 					<a href="{{ checkout }}" class="btn btn-sm btn-primary">{{ text_checkout }}</a>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 		{% else %}*/
/* 			<div class="header-cart__empty">{{ text_empty }}</div>*/
/* 		{% endif %}*/
/* 	</div>*/
/* </div>*/
