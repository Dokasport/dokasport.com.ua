<?php

/* unishop2/template/extension/module/featured.twig */
class __TwigTemplate_6091994d93aff6c520872f6058b9c0d0cd5afa52b16e0ac163e11c41a3c5a7b9 extends Twig_Template
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
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 2
            echo "\t<div class=\"heading\"><span>";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</span></div>
\t<div class=\"uni-module product-";
            // line 3
            $context["module_id"] = twig_random($this->env);
            echo (isset($context["module_id"]) ? $context["module_id"] : null);
            echo "\">
\t\t<div class=\"uni-module__wrapper\">
\t\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 6
                echo "\t\t\t\t<div class=\"product-thumb uni-item\">
\t\t\t\t\t<div class=\"product-thumb__image\" ";
                // line 7
                echo (($this->getAttribute($context["product"], "special_date_end", array())) ? ((("data-special-end=\"" . $this->getAttribute($context["product"], "special_date_end", array())) . "\"")) : (""));
                echo ">
\t\t\t\t\t\t";
                // line 8
                $this->loadTemplate("unishop2/template/extension/module/uni_stickers.twig", "unishop2/template/extension/module/featured.twig", 8)->display($context);
                echo "\t
\t\t\t\t\t\t<a href=\"";
                // line 9
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">
\t\t\t\t\t\t\t<img src=\"";
                // line 10
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" ";
                echo (($this->getAttribute($context["product"], "additional_image", array())) ? ((("data-additional=\"" . $this->getAttribute($context["product"], "additional_image", array())) . "\"")) : (""));
                echo " alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product-thumb__caption\">
\t\t\t\t\t\t<a class=\"product-thumb__name\" href=\"";
                // line 14
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a>
\t\t\t\t\t\t";
                // line 15
                if ($this->getAttribute($context["product"], "show_description", array())) {
                    // line 16
                    echo "\t\t\t\t\t\t\t<div class=\"product-thumb__description description\">";
                    echo $this->getAttribute($context["product"], "description", array());
                    echo "</div>
\t\t\t\t\t\t";
                }
                // line 18
                echo "\t\t\t\t\t\t";
                $this->loadTemplate("unishop2/template/extension/module/uni_attributes.twig", "unishop2/template/extension/module/featured.twig", 18)->display($context);
                // line 19
                echo "\t\t\t\t\t\t";
                $this->loadTemplate("unishop2/template/extension/module/uni_options.twig", "unishop2/template/extension/module/featured.twig", 19)->display($context);
                // line 20
                echo "\t\t\t\t\t\t";
                $this->loadTemplate("unishop2/template/extension/module/uni_quantity_indicator.twig", "unishop2/template/extension/module/featured.twig", 20)->display($context);
                // line 21
                echo "\t\t\t\t\t\t";
                if ((($this->getAttribute($context["product"], "rating", array()) >= 0) && (isset($context["show_rating"]) ? $context["show_rating"] : null))) {
                    // line 22
                    echo "\t\t\t\t\t\t\t<div class=\"product-thumb__rating rating\">
\t\t\t\t\t\t\t\t";
                    // line 23
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 24
                        echo "\t\t\t\t\t\t\t\t\t<i class=\"";
                        echo ((($this->getAttribute($context["product"], "rating", array()) < $context["i"])) ? ("far fa-star") : ("fa fa-star"));
                        echo "\"></i>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo " 
\t\t\t\t\t\t\t\t";
                    // line 26
                    if (($this->getAttribute($context["product"], "num_reviews", array()) > 0)) {
                        echo "<sup><a class=\"product-thumb__rating-a uni-href\" data-href=\"";
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "#tab-review\">";
                        echo $this->getAttribute($context["product"], "num_reviews", array());
                        echo "</a></sup>";
                    }
                    // line 27
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 29
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 30
                    echo "\t\t\t\t\t\t\t<div class=\"product-thumb__price price\" data-price=\"";
                    echo $this->getAttribute($context["product"], "price_value", array());
                    echo "\" data-special=\"";
                    echo $this->getAttribute($context["product"], "special_value", array());
                    echo "\" data-discount=\"";
                    echo $this->getAttribute($context["product"], "discounts", array());
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 31
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 32
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 34
                        echo "\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span> <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> 
\t\t\t\t\t\t\t\t";
                    }
                    // line 36
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    // line 37
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        echo "<div class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</div>";
                    }
                    // line 38
                    echo "\t\t\t\t\t\t";
                }
                // line 39
                echo "\t\t\t\t\t\t<div class=\"product-thumb__cart cart ";
                echo $this->getAttribute($context["product"], "cart_btn_class", array());
                echo "\">
\t\t\t\t\t\t\t";
                // line 40
                if ($this->getAttribute($context["product"], "show_quantity", array())) {
                    // line 41
                    echo "\t\t\t\t\t\t\t\t<div class=\"qty-switch\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"quantity\" value=\"";
                    // line 42
                    echo $this->getAttribute($context["product"], "minimum", array());
                    echo "\" data-minimum=\"";
                    echo $this->getAttribute($context["product"], "minimum", array());
                    echo "\" class=\"qty-switch__input form-control\" />
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<i class=\"qty-switch__btn fa fa-plus btn-default\"></i>
\t\t\t\t\t\t\t\t\t\t<i class=\"qty-switch__btn fa fa-minus btn-default\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 49
                echo "\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__add-to-cart add_to_cart btn ";
                echo $this->getAttribute($context["product"], "cart_btn_class", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "cart_btn_text", array());
                echo "\" data-pid=\"";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "\" onclick=\"cart.add(";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo ", this)\"><i class=\"";
                echo $this->getAttribute($context["product"], "cart_btn_icon", array());
                echo "\"></i><span class=\"hidden-sm hidden-md\">";
                echo $this->getAttribute($context["product"], "cart_btn_text", array());
                echo "</span></button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__quick-order quick-order btn ";
                // line 50
                echo ((twig_test_empty($this->getAttribute($context["product"], "quick_order", array()))) ? ("hidden") : (""));
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["quick_order_title"]) ? $context["quick_order_title"] : null);
                echo "\" onclick=\"quick_order('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"";
                echo (isset($context["quick_order_icon"]) ? $context["quick_order_icon"] : null);
                echo "\"></i>";
                if ((isset($context["show_quick_order_text"]) ? $context["show_quick_order_text"] : null)) {
                    echo "<span class=\"hidden-xs hidden-sm\">";
                    echo (isset($context["quick_order_title"]) ? $context["quick_order_title"] : null);
                    echo "</span>";
                }
                echo "</button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__wishlist wishlist ";
                // line 51
                echo (((isset($context["wishlist_btn_disabled"]) ? $context["wishlist_btn_disabled"] : null)) ? ("hidden") : (""));
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__compare compare ";
                // line 52
                echo (((isset($context["compare_btn_disabled"]) ? $context["compare_btn_disabled"] : null)) ? ("hidden") : (""));
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fas fa-align-right\"></i></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "\t\t</div>
\t</div>
\t<script>
\t\t\$('.product-";
            // line 60
            echo (isset($context["module_id"]) ? $context["module_id"] : null);
            echo "').uniModules({
\t\t\ttype:'";
            // line 61
            echo (((isset($context["type_view"]) ? $context["type_view"] : null)) ? ((isset($context["type_view"]) ? $context["type_view"] : null)) : ("carousel"));
            echo "',
\t\t\tautoheight:['product-thumb__name', 'product-thumb__description', 'product-thumb__option'],
\t\t\tloop:";
            // line 63
            echo (((twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null)) > 5)) ? ("true") : ("false"));
            echo "
\t\t});
\t\t";
            // line 65
            if ((isset($context["show_timer"]) ? $context["show_timer"] : null)) {
                // line 66
                echo "\t\t\$('.product-";
                echo (isset($context["module_id"]) ? $context["module_id"] : null);
                echo " .product-thumb__image').each(function() {
\t\t\tvar date = \$(this).data('special-end');
\t\t\t
\t\t\tif(date) {
\t\t\t\t\$(this).uniTimer({
\t\t\t\t\tdate      :''+date+'',
\t\t\t\t\ttexts     :['";
                // line 72
                echo (isset($context["text_special_day"]) ? $context["text_special_day"] : null);
                echo "','";
                echo (isset($context["text_special_hour"]) ? $context["text_special_hour"] : null);
                echo "','";
                echo (isset($context["text_special_min"]) ? $context["text_special_min"] : null);
                echo "','";
                echo (isset($context["text_special_sec"]) ? $context["text_special_sec"] : null);
                echo "'],
\t\t\t\t\thideText  :false,
\t\t\t\t\thideIsNull:false
\t\t\t\t});
\t\t\t}
\t\t});
\t\t";
            }
            // line 79
            echo "\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 79,  291 => 72,  281 => 66,  279 => 65,  274 => 63,  269 => 61,  265 => 60,  260 => 57,  237 => 52,  229 => 51,  213 => 50,  198 => 49,  186 => 42,  183 => 41,  181 => 40,  176 => 39,  173 => 38,  165 => 37,  162 => 36,  154 => 34,  148 => 32,  146 => 31,  137 => 30,  134 => 29,  130 => 27,  122 => 26,  119 => 25,  110 => 24,  106 => 23,  103 => 22,  100 => 21,  97 => 20,  94 => 19,  91 => 18,  85 => 16,  83 => 15,  77 => 14,  64 => 10,  60 => 9,  56 => 8,  52 => 7,  49 => 6,  32 => 5,  26 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if products %}*/
/* 	<div class="heading"><span>{{ heading_title }}</span></div>*/
/* 	<div class="uni-module product-{% set module_id = random() %}{{module_id}}">*/
/* 		<div class="uni-module__wrapper">*/
/* 			{% for product in products %}*/
/* 				<div class="product-thumb uni-item">*/
/* 					<div class="product-thumb__image" {{ product.special_date_end ? 'data-special-end="'~product.special_date_end~'"' }}>*/
/* 						{% include 'unishop2/template/extension/module/uni_stickers.twig' %}	*/
/* 						<a href="{{ product.href }}">*/
/* 							<img src="{{ product.thumb }}" {{ product.additional_image ? 'data-additional="'~product.additional_image~'"' }} alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" />*/
/* 						</a>*/
/* 					</div>*/
/* 					<div class="product-thumb__caption">*/
/* 						<a class="product-thumb__name" href="{{ product.href }}">{{ product.name }}</a>*/
/* 						{% if product.show_description %}*/
/* 							<div class="product-thumb__description description">{{ product.description }}</div>*/
/* 						{% endif %}*/
/* 						{% include 'unishop2/template/extension/module/uni_attributes.twig' %}*/
/* 						{% include 'unishop2/template/extension/module/uni_options.twig' %}*/
/* 						{% include 'unishop2/template/extension/module/uni_quantity_indicator.twig' %}*/
/* 						{% if product.rating >= 0 and show_rating %}*/
/* 							<div class="product-thumb__rating rating">*/
/* 								{% for i in 1..5 %}*/
/* 									<i class="{{ product.rating < i ? 'far fa-star' : 'fa fa-star' }}"></i>*/
/* 								{% endfor %} */
/* 								{% if product.num_reviews > 0 %}<sup><a class="product-thumb__rating-a uni-href" data-href="{{ product.href }}#tab-review">{{ product.num_reviews }}</a></sup>{% endif %}*/
/* 							</div>*/
/* 						{% endif %}*/
/* 						{% if product.price %}*/
/* 							<div class="product-thumb__price price" data-price="{{ product.price_value }}" data-special="{{ product.special_value }}" data-discount="{{ product.discounts }}">*/
/* 								{% if not product.special %}*/
/* 									{{ product.price }}*/
/* 								{% else %}*/
/* 									<span class="price-old">{{ product.price }}</span> <span class="price-new">{{ product.special }}</span> */
/* 								{% endif %}*/
/* 							</div>*/
/* 							{% if product.tax %}<div class="price-tax">{{ text_tax }} {{ product.tax }}</div>{% endif %}*/
/* 						{% endif %}*/
/* 						<div class="product-thumb__cart cart {{ product.cart_btn_class }}">*/
/* 							{% if product.show_quantity %}*/
/* 								<div class="qty-switch">*/
/* 									<input type="text" name="quantity" value="{{ product.minimum }}" data-minimum="{{ product.minimum }}" class="qty-switch__input form-control" />*/
/* 									<div>*/
/* 										<i class="qty-switch__btn fa fa-plus btn-default"></i>*/
/* 										<i class="qty-switch__btn fa fa-minus btn-default"></i>*/
/* 									</div>*/
/* 								</div>*/
/* 							{% endif %}*/
/* 							<button type="button" class="product-thumb__add-to-cart add_to_cart btn {{ product.cart_btn_class }}" title="{{ product.cart_btn_text }}" data-pid="{{ product.product_id }}" onclick="cart.add({{ product.product_id }}, this)"><i class="{{ product.cart_btn_icon }}"></i><span class="hidden-sm hidden-md">{{ product.cart_btn_text }}</span></button>*/
/* 							<button type="button" class="product-thumb__quick-order quick-order btn {{ product.quick_order is empty ? 'hidden' }}" data-toggle="tooltip" title="{{ quick_order_title }}" onclick="quick_order('{{ product.product_id }}');"><i class="{{ quick_order_icon }}"></i>{% if show_quick_order_text %}<span class="hidden-xs hidden-sm">{{ quick_order_title }}</span>{% endif %}</button>*/
/* 							<button type="button" class="product-thumb__wishlist wishlist {{ wishlist_btn_disabled ? 'hidden' }}" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/* 							<button type="button" class="product-thumb__compare compare {{ compare_btn_disabled ? 'hidden' }}" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fas fa-align-right"></i></button>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			{% endfor %}*/
/* 		</div>*/
/* 	</div>*/
/* 	<script>*/
/* 		$('.product-{{ module_id }}').uniModules({*/
/* 			type:'{{type_view ? type_view : 'carousel'}}',*/
/* 			autoheight:['product-thumb__name', 'product-thumb__description', 'product-thumb__option'],*/
/* 			loop:{{products|length > 5 ? 'true' : 'false'}}*/
/* 		});*/
/* 		{% if show_timer %}*/
/* 		$('.product-{{module_id}} .product-thumb__image').each(function() {*/
/* 			var date = $(this).data('special-end');*/
/* 			*/
/* 			if(date) {*/
/* 				$(this).uniTimer({*/
/* 					date      :''+date+'',*/
/* 					texts     :['{{ text_special_day }}','{{ text_special_hour }}','{{ text_special_min }}','{{ text_special_sec }}'],*/
/* 					hideText  :false,*/
/* 					hideIsNull:false*/
/* 				});*/
/* 			}*/
/* 		});*/
/* 		{% endif %}*/
/* 	</script>*/
/* {% endif %}*/
