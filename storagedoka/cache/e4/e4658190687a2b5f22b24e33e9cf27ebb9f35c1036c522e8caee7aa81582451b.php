<?php

/* unishop2/template/checkout/uni_cart.twig */
class __TwigTemplate_601846becc21a1ea0d93479c913557c4a7ba5a91bc4bd204a47f2f7a42d08fa2 extends Twig_Template
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
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 2
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["error_warning"]) ? $context["error_warning"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                echo " 
\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
                // line 3
                echo $context["error"];
                echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 6
        if (((isset($context["products"]) ? $context["products"] : null) || (isset($context["vouchers"]) ? $context["vouchers"] : null))) {
            // line 7
            echo "\t<div class=\"checkout-cart__wrap\">
\t\t<table class=\"checkout-cart__table table-responsive\">
\t\t\t<tr class=\"checkout-cart__header\">
\t\t\t\t<td class=\"checkout-cart__image text-center\">";
            // line 10
            echo (isset($context["text_image"]) ? $context["text_image"] : null);
            echo "</td>
\t\t\t\t<td class=\"checkout-cart__name text-left\">";
            // line 11
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</td>
\t\t\t\t<td class=\"checkout-cart__model text-left hidden-xs\">";
            // line 12
            echo (isset($context["column_model"]) ? $context["column_model"] : null);
            echo "</td>
\t\t\t\t<td class=\"checkout-cart__quantity text-left\">";
            // line 13
            echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
            echo "</td>
\t\t\t\t<td class=\"checkout-cart__price text-right hidden-xs\">";
            // line 14
            echo (isset($context["column_price"]) ? $context["column_price"] : null);
            echo "</td>
\t\t\t\t<td class=\"checkout-cart__total text-right\">";
            // line 15
            echo (isset($context["column_total"]) ? $context["column_total"] : null);
            echo "</td>
\t\t\t\t<td class=\"checkout-cart__remove text-center\"></td>
\t\t\t</tr>
\t\t\t";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 19
                echo "\t\t\t\t<tr class=\"checkout-cart__item\">
\t\t\t\t\t<td class=\"checkout-cart__image text-center\"><img src=\"";
                // line 20
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" class=\"checkout-cart__image-img\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" /></td>
\t\t\t\t\t<td class=\"checkout-cart__name text-left\">
\t\t\t\t\t\t<a href=\"";
                // line 22
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a>
\t\t\t\t\t\t";
                // line 23
                if ( !$this->getAttribute($context["product"], "stock", array())) {
                    echo "<span class=\"text-danger\">***</span>";
                }
                // line 24
                echo "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 25
                    echo "\t\t\t\t\t\t\t<br /><small>";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ": ";
                    echo $this->getAttribute($context["option"], "option_value", array());
                    echo " ";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</small>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["product"], "reward", array())) {
                    // line 28
                    echo "\t\t\t\t\t\t\t<br /><small>";
                    echo $this->getAttribute($context["product"], "reward", array());
                    echo "</small>
\t\t\t\t\t\t";
                }
                // line 30
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["product"], "recurring", array())) {
                    // line 31
                    echo "\t\t\t\t\t\t\t<br /><span class=\"label label-info\">";
                    echo (isset($context["text_recurring_item"]) ? $context["text_recurring_item"] : null);
                    echo "</span> <small>";
                    echo $this->getAttribute($context["product"], "recurring", array());
                    echo "</small>
\t\t\t\t\t\t";
                }
                // line 33
                echo "\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"checkout-cart__model text-left hidden-xs\">";
                // line 34
                echo $this->getAttribute($context["product"], "model", array());
                echo "</td>
\t\t\t\t\t<td class=\"checkout-cart__quantity text-left\">
\t\t\t\t\t\t<div class=\"qty-switch\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"quantity[";
                // line 37
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
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"checkout-cart__price text-right hidden-xs\">";
                // line 44
                echo $this->getAttribute($context["product"], "price", array());
                echo "</td>
\t\t\t\t\t<td class=\"checkout-cart__total text-right\">";
                // line 45
                echo $this->getAttribute($context["product"], "total", array());
                echo "</td>
\t\t\t\t\t<td class=\"checkout-cart__remove text-center\"><i onclick=\"cart.remove('";
                // line 46
                echo $this->getAttribute($context["product"], "cart_id", array());
                echo "', ";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo ");\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"checkout-cart__remove-icon far fa-trash-alt\"></i></td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 50
                echo "\t\t\t\t<tr class=\"checkout-cart__item\">
\t\t\t\t\t<td class=\"checkout-cart__image text-center\"></td>
\t\t\t\t\t<td class=\"checkout-cart__name text-left\">";
                // line 52
                echo $this->getAttribute($context["voucher"], "description", array());
                echo "</td>
\t\t\t\t\t<td class=\"checkout-cart__model text-left hidden-xs\"></td>
\t\t\t\t\t<td class=\"checkout-cart__quantity text-center\">1</td>
\t\t\t\t\t<td class=\"checkout-cart__price text-right hidden-xs\">";
                // line 55
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</td>
\t\t\t\t\t<td class=\"checkout-cart__total text-right\">";
                // line 56
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</td>
\t\t\t\t\t<td class=\"checkout-cart__remove text-center\"><i onclick=\"uniVoucherRemove('";
                // line 57
                echo $this->getAttribute($context["voucher"], "key", array());
                echo "');\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"checkout-cart__remove-icon far fa-trash-alt\"></i></button></td>
\t\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "\t\t</table>
\t</div>
\t";
            // line 62
            if ((((isset($context["coupon_status"]) ? $context["coupon_status"] : null) || (isset($context["voucher_status"]) ? $context["voucher_status"] : null)) || (isset($context["reward_status"]) ? $context["reward_status"] : null))) {
                // line 63
                echo "\t\t<div class=\"text-right\">
\t\t\t<div class=\"checkout-cart__text-additional\">";
                // line 64
                echo (isset($context["text_additional"]) ? $context["text_additional"] : null);
                echo "</div>
\t\t\t";
                // line 65
                if ((isset($context["reward_user"]) ? $context["reward_user"] : null)) {
                    // line 66
                    echo "\t\t\t\t<div class=\"checkout-cart__text-reward\">";
                    echo (isset($context["entry_reward"]) ? $context["entry_reward"] : null);
                    echo "</div>
\t\t\t";
                }
                // line 68
                echo "\t\t</div>
\t\t";
                // line 69
                if ((isset($context["coupon_status"]) ? $context["coupon_status"] : null)) {
                    // line 70
                    echo "\t\t\t<div class=\"checkout-cart__coupon text-right\">
\t\t\t\t<input type=\"text\" name=\"coupon\" value=\"";
                    // line 71
                    echo (($this->getAttribute((isset($context["totals"]) ? $context["totals"] : null), "coupon", array())) ? ((($this->getAttribute($this->getAttribute((isset($context["totals"]) ? $context["totals"] : null), "coupon", array()), "title", array()) . ": ") . $this->getAttribute($this->getAttribute((isset($context["totals"]) ? $context["totals"] : null), "coupon", array()), "text", array()))) : (""));
                    echo "\" placeholder=\"";
                    echo (isset($context["text_coupon"]) ? $context["text_coupon"] : null);
                    echo "\" id=\"input-coupon\" class=\"checkout-cart__coupon-input form-control\" />
\t\t\t\t<button id=\"button-coupon\" data-loading-text=\"";
                    // line 72
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"checkout-cart__coupon-btn btn btn-default\">";
                    echo (isset($context["button_apply"]) ? $context["button_apply"] : null);
                    echo "</button>
\t\t\t</div>
\t\t";
                }
                // line 75
                echo "\t\t";
                if ((isset($context["reward_status"]) ? $context["reward_status"] : null)) {
                    // line 76
                    echo "\t\t\t<div class=\"checkout-cart__reward text-right\">
\t\t\t\t<input type=\"text\" name=\"reward\" value=\"";
                    // line 77
                    echo (isset($context["reward"]) ? $context["reward"] : null);
                    echo "\" placeholder=\"";
                    echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
                    echo "\" id=\"input-reward\" class=\"checkout-cart__reward-input form-control\" />
\t\t\t\t<button id=\"button-reward\" data-loading-text=\"";
                    // line 78
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"checkout-cart__reward-btn btn btn-default\">";
                    echo (isset($context["button_apply"]) ? $context["button_apply"] : null);
                    echo "</button>
\t\t\t</div>
\t\t";
                }
                // line 81
                echo "\t\t";
                if ((isset($context["voucher_status"]) ? $context["voucher_status"] : null)) {
                    // line 82
                    echo "\t\t\t<div class=\"checkout-cart__voucher text-right\">
\t\t\t\t<input type=\"text\" name=\"voucher\" value=\"";
                    // line 83
                    echo (isset($context["voucher"]) ? $context["voucher"] : null);
                    echo "\" placeholder=\"";
                    echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
                    echo "\" id=\"input-voucher\" class=\"checkout-cart__voucher-input form-control\" />
\t\t\t\t<button id=\"button-voucher\" data-loading-text=\"";
                    // line 84
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"checkout-cart__voucher-btn btn btn-default\">";
                    echo (isset($context["button_apply"]) ? $context["button_apply"] : null);
                    echo "</button>
\t\t\t</div>
\t\t";
                }
                // line 87
                echo "\t";
            }
            // line 88
            echo "\t<div class=\"checkout-cart__totals hidden\">
\t\t<div class=\"checkout-cart__totals-item product-total\">
\t\t\t<div class=\"checkout-cart__totals-title\">";
            // line 90
            echo (isset($context["text_product_total"]) ? $context["text_product_total"] : null);
            echo "</div>
\t\t\t<div class=\"checkout-cart__totals-text\"><a onclick=\"uniScrollTo('.checkout-cart__header'); return false;\">";
            // line 91
            echo (isset($context["product_total"]) ? $context["product_total"] : null);
            echo "</a></div>
\t\t</div>
\t\t";
            // line 93
            if ((isset($context["weight_total"]) ? $context["weight_total"] : null)) {
                // line 94
                echo "\t\t\t<div class=\"checkout-cart__totals-item product-weight\">
\t\t\t\t<div class=\"checkout-cart__totals-title\">";
                // line 95
                echo (isset($context["text_product_weight"]) ? $context["text_product_weight"] : null);
                echo "</div>
\t\t\t\t<div class=\"checkout-cart__totals-text\">";
                // line 96
                echo (isset($context["weight_total"]) ? $context["weight_total"] : null);
                echo "</div>
\t\t\t</div>
\t\t";
            }
            // line 99
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 100
                echo "\t\t\t<div class=\"checkout-cart__totals-item ";
                echo $this->getAttribute($context["total"], "code", array());
                echo "\">
\t\t\t\t<div class=\"checkout-cart__totals-title\">";
                // line 101
                echo $this->getAttribute($context["total"], "title", array());
                echo ":</div>
\t\t\t\t<div class=\"checkout-cart__totals-text\"><span class=\"";
                // line 102
                echo $this->getAttribute($context["total"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["total"], "text", array());
                echo "</span></div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "\t</div>
\t<div style=\"height:20px\"></div>
\t<script>
\t\t\$(function() {
\t\t\t\$('.checkout-sticky__total').html(\$('.checkout-cart__totals').html());
\t\t});
\t</script>
\t";
            // line 112
            if (((isset($context["related"]) ? $context["related"] : null) && (isset($context["products_related"]) ? $context["products_related"] : null))) {
                // line 113
                echo "\t\t<div class=\"heading\"><span>";
                echo (isset($context["checkout_related_text"]) ? $context["checkout_related_text"] : null);
                echo "</span></div>
\t\t<div class=\"uni-module product-related\">
\t\t\t<div class=\"uni-module__wrapper\">
\t\t\t\t";
                // line 116
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["products_related"]) ? $context["products_related"] : null));
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
                    // line 117
                    echo "\t\t\t\t\t<div class=\"product-thumb-related\">
\t\t\t\t\t\t<div class=\"product-thumb-related__image\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 119
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
                    // line 120
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-thumb-related__caption\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 124
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\" class=\"product-thumb-related__name\">";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "</a>
\t\t\t\t\t\t\t";
                    // line 125
                    $this->loadTemplate("unishop2/template/extension/module/uni_options.twig", "unishop2/template/checkout/uni_cart.twig", 125)->display($context);
                    // line 126
                    echo "\t\t\t\t\t\t\t";
                    if ((($this->getAttribute($context["product"], "rating", array()) >= 0) && (isset($context["show_rating"]) ? $context["show_rating"] : null))) {
                        // line 127
                        echo "\t\t\t\t\t\t\t\t<div class=\"rating\">
\t\t\t\t\t\t\t\t\t";
                        // line 128
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 129
                            echo "\t\t\t\t\t\t\t\t\t\t<i class=\"";
                            echo ((($this->getAttribute($context["product"], "rating", array()) < $context["i"])) ? ("far") : ("fa"));
                            echo " fa-star\"></i>
\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 130
                        echo " 
\t\t\t\t\t\t\t\t\t";
                        // line 131
                        if ((isset($context["show_rating_count"]) ? $context["show_rating_count"] : null)) {
                            echo "<sup><a onclick=\"location='";
                            echo $this->getAttribute($context["product"], "href", array());
                            echo "#tab-review'\">";
                            echo $this->getAttribute($context["product"], "num_reviews", array());
                            echo "</a></sup>";
                        }
                        // line 132
                        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 134
                    echo "\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["product"], "price", array())) {
                        // line 135
                        echo "\t\t\t\t\t\t\t\t<div class=\"product-thumb-related__price price\" data-price=\"";
                        echo $this->getAttribute($context["product"], "price_value", array());
                        echo "\" data-special=\"";
                        echo $this->getAttribute($context["product"], "special_value", array());
                        echo "\" data-discount=\"";
                        echo $this->getAttribute($context["product"], "discounts", array());
                        echo "\">
\t\t\t\t\t\t\t\t\t";
                        // line 136
                        if ($this->getAttribute($context["product"], "special", array())) {
                            // line 137
                            echo "\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                            echo $this->getAttribute($context["product"], "price", array());
                            echo "</span> <span class=\"price-new\">";
                            echo $this->getAttribute($context["product"], "special", array());
                            echo "</span> 
\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 139
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            echo $this->getAttribute($context["product"], "price", array());
                            echo "
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 141
                        echo "\t\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["product"], "tax", array())) {
                            // line 142
                            echo "\t\t\t\t\t\t\t\t\t\t<span class=\"price-tax\">";
                            echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                            echo " ";
                            echo $this->getAttribute($context["product"], "tax", array());
                            echo "</span>
\t\t\t\t\t\t\t\t\t";
                        }
                        // line 144
                        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 146
                    echo "\t\t\t\t\t\t\t<div class=\"cart\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"add_to_cart btn ";
                    // line 147
                    echo $this->getAttribute($context["product"], "cart_btn_class", array());
                    echo " ";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo " btn-xs\" title=\"";
                    echo $this->getAttribute($context["product"], "cart_btn_text", array());
                    echo "\" onclick=\"cart.add(";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo ", this)\"><i class=\"";
                    echo $this->getAttribute($context["product"], "cart_btn_icon", array());
                    echo "\"></i><span>";
                    echo $this->getAttribute($context["product"], "cart_btn_text", array());
                    echo "</span></button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
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
                // line 152
                echo "\t\t\t</div>
\t\t</div>
\t\t<script type=\"text/javascript\">
\t\t\t\$('.product-related').uniModules({
\t\t\t\ttype:'";
                // line 156
                echo ((array_key_exists("type_view", $context)) ? ((isset($context["type_view"]) ? $context["type_view"] : null)) : ("carousel"));
                echo "',
\t\t\t\titems:{0:{items:1},580:{items:2},720:{items:2},992:{items:3},1050:{items:3 }},
\t\t\t\tautoheight:['product-thumb-related__name', 'option'],
\t\t\t\tloop: ";
                // line 159
                echo (((twig_length_filter($this->env, (isset($context["products_related"]) ? $context["products_related"] : null)) > 4)) ? ("true") : ("false"));
                echo "
\t\t\t});
\t\t</script>
\t";
            }
        } else {
            // line 164
            echo "\t<script>
\t\t\$('#content').load('index.php?route=checkout/cart #content > *');
\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "unishop2/template/checkout/uni_cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  544 => 164,  536 => 159,  530 => 156,  524 => 152,  495 => 147,  492 => 146,  488 => 144,  480 => 142,  477 => 141,  471 => 139,  463 => 137,  461 => 136,  452 => 135,  449 => 134,  445 => 132,  437 => 131,  434 => 130,  425 => 129,  421 => 128,  418 => 127,  415 => 126,  413 => 125,  407 => 124,  398 => 120,  392 => 119,  388 => 117,  371 => 116,  364 => 113,  362 => 112,  353 => 105,  342 => 102,  338 => 101,  333 => 100,  328 => 99,  322 => 96,  318 => 95,  315 => 94,  313 => 93,  308 => 91,  304 => 90,  300 => 88,  297 => 87,  289 => 84,  283 => 83,  280 => 82,  277 => 81,  269 => 78,  263 => 77,  260 => 76,  257 => 75,  249 => 72,  243 => 71,  240 => 70,  238 => 69,  235 => 68,  229 => 66,  227 => 65,  223 => 64,  220 => 63,  218 => 62,  214 => 60,  203 => 57,  199 => 56,  195 => 55,  189 => 52,  185 => 50,  180 => 49,  167 => 46,  163 => 45,  159 => 44,  141 => 37,  135 => 34,  132 => 33,  124 => 31,  121 => 30,  115 => 28,  112 => 27,  99 => 25,  94 => 24,  90 => 23,  84 => 22,  77 => 20,  74 => 19,  70 => 18,  64 => 15,  60 => 14,  56 => 13,  52 => 12,  48 => 11,  44 => 10,  39 => 7,  37 => 6,  28 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if error_warning %}*/
/* 	{% for error in error_warning %} */
/* 		<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error }}<button type="button" class="close" data-dismiss="alert">&times;</button></div>*/
/* 	{% endfor %}*/
/* {% endif %}*/
/* {% if products or vouchers %}*/
/* 	<div class="checkout-cart__wrap">*/
/* 		<table class="checkout-cart__table table-responsive">*/
/* 			<tr class="checkout-cart__header">*/
/* 				<td class="checkout-cart__image text-center">{{ text_image }}</td>*/
/* 				<td class="checkout-cart__name text-left">{{ column_name }}</td>*/
/* 				<td class="checkout-cart__model text-left hidden-xs">{{ column_model }}</td>*/
/* 				<td class="checkout-cart__quantity text-left">{{ column_quantity }}</td>*/
/* 				<td class="checkout-cart__price text-right hidden-xs">{{ column_price }}</td>*/
/* 				<td class="checkout-cart__total text-right">{{ column_total }}</td>*/
/* 				<td class="checkout-cart__remove text-center"></td>*/
/* 			</tr>*/
/* 			{% for product in products %}*/
/* 				<tr class="checkout-cart__item">*/
/* 					<td class="checkout-cart__image text-center"><img src="{{ product.thumb }}" class="checkout-cart__image-img" title="{{ product.name }}" /></td>*/
/* 					<td class="checkout-cart__name text-left">*/
/* 						<a href="{{ product.href }}">{{ product.name }}</a>*/
/* 						{% if not product.stock %}<span class="text-danger">***</span>{% endif %}*/
/* 						{% for option in product.option %}*/
/* 							<br /><small>{{ option.name }}: {{ option.option_value }} {{ option.value }}</small>*/
/* 						{% endfor %}*/
/* 						{% if product.reward %}*/
/* 							<br /><small>{{ product.reward }}</small>*/
/* 						{% endif %}*/
/* 						{% if product.recurring %}*/
/* 							<br /><span class="label label-info">{{ text_recurring_item }}</span> <small>{{ product.recurring }}</small>*/
/* 						{% endif %}*/
/* 					</td>*/
/* 					<td class="checkout-cart__model text-left hidden-xs">{{ product.model }}</td>*/
/* 					<td class="checkout-cart__quantity text-left">*/
/* 						<div class="qty-switch">*/
/* 							<input type="text" name="quantity[{{ product.cart_id }}]" value="{{ product.quantity }}" data-minimum="{{ product.minimum }}" data-cid="{{ product.cart_id }}" data-pid="{{ product.product_id }}" class="qty-switch__input form-control" />*/
/* 							<div>*/
/* 								<i class="qty-switch__btn fa fa-plus btn-default"></i>*/
/* 								<i class="qty-switch__btn fa fa-minus btn-default"></i>*/
/* 							</div>*/
/* 						</div>*/
/* 					</td>*/
/* 					<td class="checkout-cart__price text-right hidden-xs">{{ product.price }}</td>*/
/* 					<td class="checkout-cart__total text-right">{{ product.total }}</td>*/
/* 					<td class="checkout-cart__remove text-center"><i onclick="cart.remove('{{ product.cart_id }}', {{ product.product_id }});" title="{{ button_remove }}" class="checkout-cart__remove-icon far fa-trash-alt"></i></td>*/
/* 				</tr>*/
/* 			{% endfor %}*/
/* 			{% for voucher in vouchers %}*/
/* 				<tr class="checkout-cart__item">*/
/* 					<td class="checkout-cart__image text-center"></td>*/
/* 					<td class="checkout-cart__name text-left">{{ voucher.description }}</td>*/
/* 					<td class="checkout-cart__model text-left hidden-xs"></td>*/
/* 					<td class="checkout-cart__quantity text-center">1</td>*/
/* 					<td class="checkout-cart__price text-right hidden-xs">{{ voucher.amount }}</td>*/
/* 					<td class="checkout-cart__total text-right">{{ voucher.amount }}</td>*/
/* 					<td class="checkout-cart__remove text-center"><i onclick="uniVoucherRemove('{{ voucher.key }}');" title="{{ button_remove }}" class="checkout-cart__remove-icon far fa-trash-alt"></i></button></td>*/
/* 				</tr>*/
/* 			{% endfor %}*/
/* 		</table>*/
/* 	</div>*/
/* 	{% if coupon_status or voucher_status or reward_status %}*/
/* 		<div class="text-right">*/
/* 			<div class="checkout-cart__text-additional">{{ text_additional }}</div>*/
/* 			{% if reward_user %}*/
/* 				<div class="checkout-cart__text-reward">{{ entry_reward }}</div>*/
/* 			{% endif %}*/
/* 		</div>*/
/* 		{% if coupon_status %}*/
/* 			<div class="checkout-cart__coupon text-right">*/
/* 				<input type="text" name="coupon" value="{{ totals.coupon ? totals.coupon.title ~': '~ totals.coupon.text }}" placeholder="{{ text_coupon }}" id="input-coupon" class="checkout-cart__coupon-input form-control" />*/
/* 				<button id="button-coupon" data-loading-text="{{ text_loading }}" class="checkout-cart__coupon-btn btn btn-default">{{ button_apply }}</button>*/
/* 			</div>*/
/* 		{% endif %}*/
/* 		{% if reward_status %}*/
/* 			<div class="checkout-cart__reward text-right">*/
/* 				<input type="text" name="reward" value="{{ reward }}" placeholder="{{ text_reward }}" id="input-reward" class="checkout-cart__reward-input form-control" />*/
/* 				<button id="button-reward" data-loading-text="{{ text_loading }}" class="checkout-cart__reward-btn btn btn-default">{{ button_apply }}</button>*/
/* 			</div>*/
/* 		{% endif %}*/
/* 		{% if voucher_status %}*/
/* 			<div class="checkout-cart__voucher text-right">*/
/* 				<input type="text" name="voucher" value="{{ voucher }}" placeholder="{{ text_voucher }}" id="input-voucher" class="checkout-cart__voucher-input form-control" />*/
/* 				<button id="button-voucher" data-loading-text="{{ text_loading }}" class="checkout-cart__voucher-btn btn btn-default">{{ button_apply }}</button>*/
/* 			</div>*/
/* 		{% endif %}*/
/* 	{% endif %}*/
/* 	<div class="checkout-cart__totals hidden">*/
/* 		<div class="checkout-cart__totals-item product-total">*/
/* 			<div class="checkout-cart__totals-title">{{ text_product_total }}</div>*/
/* 			<div class="checkout-cart__totals-text"><a onclick="uniScrollTo('.checkout-cart__header'); return false;">{{ product_total }}</a></div>*/
/* 		</div>*/
/* 		{% if weight_total %}*/
/* 			<div class="checkout-cart__totals-item product-weight">*/
/* 				<div class="checkout-cart__totals-title">{{ text_product_weight }}</div>*/
/* 				<div class="checkout-cart__totals-text">{{ weight_total }}</div>*/
/* 			</div>*/
/* 		{% endif %}*/
/* 		{% for total in totals %}*/
/* 			<div class="checkout-cart__totals-item {{ total.code }}">*/
/* 				<div class="checkout-cart__totals-title">{{ total.title }}:</div>*/
/* 				<div class="checkout-cart__totals-text"><span class="{{ total.code }}">{{ total.text }}</span></div>*/
/* 			</div>*/
/* 		{% endfor %}*/
/* 	</div>*/
/* 	<div style="height:20px"></div>*/
/* 	<script>*/
/* 		$(function() {*/
/* 			$('.checkout-sticky__total').html($('.checkout-cart__totals').html());*/
/* 		});*/
/* 	</script>*/
/* 	{% if related and products_related %}*/
/* 		<div class="heading"><span>{{ checkout_related_text }}</span></div>*/
/* 		<div class="uni-module product-related">*/
/* 			<div class="uni-module__wrapper">*/
/* 				{% for product in products_related %}*/
/* 					<div class="product-thumb-related">*/
/* 						<div class="product-thumb-related__image">*/
/* 							<a href="{{ product.href }}" title="{{ product.name }}">*/
/* 								<img src="{{ product.thumb }}" alt="{{ product.name }}" class="img-responsive" />*/
/* 							</a>*/
/* 						</div>*/
/* 						<div class="product-thumb-related__caption">*/
/* 							<a href="{{ product.href }}" class="product-thumb-related__name">{{ product.name }}</a>*/
/* 							{% include 'unishop2/template/extension/module/uni_options.twig' %}*/
/* 							{% if product.rating >= 0 and show_rating %}*/
/* 								<div class="rating">*/
/* 									{% for i in 1..5 %}*/
/* 										<i class="{{ product.rating < i ? 'far' : 'fa' }} fa-star"></i>*/
/* 									{% endfor %} */
/* 									{% if show_rating_count %}<sup><a onclick="location='{{ product.href }}#tab-review'">{{ product.num_reviews }}</a></sup>{% endif %}*/
/* 								</div>*/
/* 							{% endif %}*/
/* 							{% if product.price %}*/
/* 								<div class="product-thumb-related__price price" data-price="{{ product.price_value }}" data-special="{{ product.special_value }}" data-discount="{{ product.discounts }}">*/
/* 									{% if product.special %}*/
/* 										<span class="price-old">{{ product.price }}</span> <span class="price-new">{{ product.special }}</span> */
/* 									{% else %}*/
/* 										{{ product.price }}*/
/* 									{% endif %}*/
/* 									{% if product.tax %}*/
/* 										<span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/* 									{% endif %}*/
/* 								</div>*/
/* 							{% endif %}*/
/* 							<div class="cart">*/
/* 								<button type="button" class="add_to_cart btn {{ product.cart_btn_class }} {{ product.product_id }} btn-xs" title="{{ product.cart_btn_text }}" onclick="cart.add({{ product.product_id }}, this)"><i class="{{ product.cart_btn_icon }}"></i><span>{{ product.cart_btn_text }}</span></button>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				{% endfor %}*/
/* 			</div>*/
/* 		</div>*/
/* 		<script type="text/javascript">*/
/* 			$('.product-related').uniModules({*/
/* 				type:'{{ type_view is defined ? type_view : 'carousel' }}',*/
/* 				items:{0:{items:1},580:{items:2},720:{items:2},992:{items:3},1050:{items:3 }},*/
/* 				autoheight:['product-thumb-related__name', 'option'],*/
/* 				loop: {{ products_related|length > 4 ? 'true' : 'false' }}*/
/* 			});*/
/* 		</script>*/
/* 	{% endif %}*/
/* {% else %}*/
/* 	<script>*/
/* 		$('#content').load('index.php?route=checkout/cart #content > *');*/
/* 	</script>*/
/* {% endif %}*/
