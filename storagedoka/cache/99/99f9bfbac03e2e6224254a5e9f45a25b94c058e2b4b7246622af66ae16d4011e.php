<?php

/* unishop2/template/extension/module/uni_quick_order.twig */
class __TwigTemplate_d6072d0953535f19802a77fe95ff5a221b0459456311cae899c1bce53f46940f extends Twig_Template
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
        echo "<div id=\"modal-quick-order\" class=\"modal\">
\t<div class=\"modal-dialog modal-lg\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\">";
        // line 6
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "</h4>
\t\t\t</div>
\t\t\t<div id=\"quick_order\" class=\"modal-body quick-order product-block\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"quick-order__image col-xs-12 col-sm-4 col-md-5\">
\t\t\t\t\t\t";
        // line 11
        $this->loadTemplate("unishop2/template/extension/module/uni_stickers.twig", "unishop2/template/extension/module/uni_quick_order.twig", 11)->display($context);
        // line 12
        echo "\t\t\t\t\t\t";
        if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
            // line 13
            echo "\t\t\t\t\t\t\t<div class=\"quick-order__image-main uni-item\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 14
            echo (isset($context["thumb"]) ? $context["thumb"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"quick-order__img img-responsive\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 17
        echo "\t\t\t\t\t\t";
        if (((isset($context["images"]) ? $context["images"] : null) || (isset($context["options"]) ? $context["options"] : null))) {
            // line 18
            echo "\t\t\t\t\t\t\t<div class=\"quick-order__image-additional owl-carousel\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 19
            echo (isset($context["small"]) ? $context["small"] : null);
            echo "\" data-image=\"";
            echo (isset($context["thumb"]) ? $context["thumb"] : null);
            echo "\" alt=\"\" class=\"quick-order__image-additional-img img-responsive selected\" />
\t\t\t\t\t\t\t\t";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 21
                echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                echo $this->getAttribute($context["image"], "small", array());
                echo "\" data-image=\"";
                echo $this->getAttribute($context["image"], "thumb", array());
                echo "\" alt=\"\" class=\"quick-order__image-additional-img img-responsive\" />
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 25
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"quick-order__product col-xs-12 col-sm-8 col-md-7\">
\t\t\t\t\t\t<div class=\"product-data\">
\t\t\t\t\t\t\t";
        // line 28
        if ((isset($context["show_model"]) ? $context["show_model"] : null)) {
            // line 29
            echo "\t\t\t\t\t\t\t\t<div class=\"product-data__item model\"><div class=\"product-data__item-div\"><span class=\"product-data__item-span\">";
            echo (isset($context["text_model"]) ? $context["text_model"] : null);
            echo "</span></div> ";
            echo (isset($context["model"]) ? $context["model"] : null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 31
        echo "\t\t\t\t\t\t\t";
        if ((isset($context["sku"]) ? $context["sku"] : null)) {
            // line 32
            echo "\t\t\t\t\t\t\t\t<div class=\"product-data__item sku\"><div class=\"product-data__item-div\"><span class=\"product-data__item-span\">";
            echo (isset($context["text_sku"]) ? $context["text_sku"] : null);
            echo ":</span></div> ";
            echo (isset($context["sku"]) ? $context["sku"] : null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 34
        echo "\t\t\t\t\t\t\t";
        if (((isset($context["show_manuf"]) ? $context["show_manuf"] : null) && (isset($context["manufacturer"]) ? $context["manufacturer"] : null))) {
            // line 35
            echo "\t\t\t\t\t\t\t\t<div class=\"product-data__item manufacturer\"><div class=\"product-data__item-div\"><span class=\"product-data__item-span\">";
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo "</span></div><a href=\"";
            echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
            echo "\">";
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo "</a></div>
\t\t\t\t\t\t\t";
        }
        // line 37
        echo "\t\t\t\t\t\t\t";
        if ((isset($context["location"]) ? $context["location"] : null)) {
            // line 38
            echo "\t\t\t\t\t\t\t\t<div class=\"product-data__item location\"><div class=\"product-data__item-div\"><span class=\"product-data__item-span\">";
            echo (isset($context["text_location"]) ? $context["text_location"] : null);
            echo ":</span></div> ";
            echo (isset($context["location"]) ? $context["location"] : null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t\t\t\t";
        if ((((isset($context["reward"]) ? $context["reward"] : null) && ((isset($context["show_reward"]) ? $context["show_reward"] : null) == 1)) || ((isset($context["show_reward"]) ? $context["show_reward"] : null) == 3))) {
            // line 41
            echo "\t\t\t\t\t\t\t\t<div class=\"product-data__item reward\"><div class=\"product-data__item-div\"><span class=\"product-data__item-span\">";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo "</span></div> ";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 43
        echo "\t\t\t\t\t\t\t";
        if ((((isset($context["points"]) ? $context["points"] : null) && ((isset($context["show_reward"]) ? $context["show_reward"] : null) == 2)) || ((isset($context["show_reward"]) ? $context["show_reward"] : null) == 3))) {
            // line 44
            echo "\t\t\t\t\t\t\t\t<div class=\"product-data__item points\"><div class=\"product-data__item-div\"><span class=\"product-data__item-span\">";
            echo (isset($context["text_points"]) ? $context["text_points"] : null);
            echo "</span></div> ";
            echo (isset($context["points"]) ? $context["points"] : null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t\t\t\t";
        if ((isset($context["upc"]) ? $context["upc"] : null)) {
            // line 47
            echo "\t\t\t\t\t\t\t\t<div class=\"product-data__item upc\"><div class=\"product-data__item-div\"><span class=\"product-data__item-span\">";
            echo (isset($context["text_upc"]) ? $context["text_upc"] : null);
            echo ":</span></div> ";
            echo (isset($context["upc"]) ? $context["upc"] : null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 49
        echo "\t\t\t\t\t\t\t";
        if ((isset($context["ean"]) ? $context["ean"] : null)) {
            // line 50
            echo "\t\t\t\t\t\t\t\t<div class=\"product-data__item ean\"><div class=\"product-data__item-div\"><span class=\"product-data__item-span\">";
            echo (isset($context["text_ean"]) ? $context["text_ean"] : null);
            echo ":</span></div> ";
            echo (isset($context["ean"]) ? $context["ean"] : null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 52
        echo "\t\t\t\t\t\t\t";
        if ((isset($context["jan"]) ? $context["jan"] : null)) {
            // line 53
            echo "\t\t\t\t\t\t\t\t<div class=\"product-data__item jan\"><div class=\"product-data__item-div\"><span class=\"product-data__item-span\">";
            echo (isset($context["text_jan"]) ? $context["text_jan"] : null);
            echo ":</span></div> ";
            echo (isset($context["jan"]) ? $context["jan"] : null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 55
        echo "\t\t\t\t\t\t\t";
        if ((isset($context["isbn"]) ? $context["isbn"] : null)) {
            // line 56
            echo "\t\t\t\t\t\t\t\t<div class=\"product-data__item isbn\"><div class=\"product-data__item-div\"><span class=\"product-data__item-span\">";
            echo (isset($context["text_isbn"]) ? $context["text_isbn"] : null);
            echo ":</span></div> ";
            echo (isset($context["isbn"]) ? $context["isbn"] : null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 58
        echo "\t\t\t\t\t\t\t";
        if ((isset($context["mpn"]) ? $context["mpn"] : null)) {
            // line 59
            echo "\t\t\t\t\t\t\t\t<div class=\"product-data__item mpn\"><div class=\"product-data__item-div\"><span class=\"product-data__item-span\">";
            echo (isset($context["text_mpn"]) ? $context["text_mpn"] : null);
            echo ":</span></div> ";
            echo (isset($context["mpn"]) ? $context["mpn"] : null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 61
        echo "\t\t\t\t\t\t\t";
        if ( !$this->getAttribute((isset($context["product"]) ? $context["product"] : null), "quantity_indicator", array())) {
            // line 62
            echo "\t\t\t\t\t\t\t\t<div class=\"product-data__item stock\"><div class=\"product-data__item-div\"><span class=\"product-data__item-span\">";
            echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
            echo "</span></div> ";
            echo (isset($context["stock"]) ? $context["stock"] : null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 64
        echo "\t\t\t\t\t\t\t";
        if (((isset($context["show_length"]) ? $context["show_length"] : null) == 1)) {
            // line 65
            echo "\t\t\t\t\t\t\t\t";
            if ((isset($context["length"]) ? $context["length"] : null)) {
                echo "<div class=\"product-data__item length\"><div class=\"product-data__item-div\"><span class=\"product-data__item-span\">";
                echo (isset($context["text_length"]) ? $context["text_length"] : null);
                echo "</span></div> ";
                echo (isset($context["length"]) ? $context["length"] : null);
                echo "</div>";
            }
            // line 66
            echo "\t\t\t\t\t\t\t\t";
            if ((isset($context["weight"]) ? $context["weight"] : null)) {
                echo "<div class=\"product-data__item weight\"><div class=\"product-data__item-div\"><span class=\"product-data__item-span\">";
                echo (isset($context["text_weight"]) ? $context["text_weight"] : null);
                echo "</span></div> ";
                echo (isset($context["weight"]) ? $context["weight"] : null);
                echo "</div>";
            }
            // line 67
            echo "\t\t\t\t\t\t\t";
        }
        // line 68
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 69
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "quantity_indicator", array())) {
            // line 70
            echo "\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t";
            // line 71
            $this->loadTemplate("unishop2/template/extension/module/uni_quantity_indicator.twig", "unishop2/template/extension/module/uni_quick_order.twig", 71)->display($context);
            // line 72
            echo "\t\t\t\t\t\t";
        }
        // line 73
        echo "\t\t\t\t\t\t";
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 74
            echo "\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"quick-order__price price\" data-price=\"";
            // line 75
            echo (isset($context["price_value"]) ? $context["price_value"] : null);
            echo "\" data-special=\"";
            echo (isset($context["special_value"]) ? $context["special_value"] : null);
            echo "\" data-discount=\"";
            echo (isset($context["discounts_value"]) ? $context["discounts_value"] : null);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 76
            if ((isset($context["special"]) ? $context["special"] : null)) {
                // line 77
                echo "\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</span> <span class=\"price-new\">";
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "</span>
\t\t\t\t\t\t\t\t";
            } else {
                // line 79
                echo "\t\t\t\t\t\t\t\t\t";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "
\t\t\t\t\t\t\t\t";
            }
            // line 81
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 82
            if ((isset($context["discounts"]) ? $context["discounts"] : null)) {
                // line 83
                echo "\t\t\t\t\t\t\t\t<div class=\"quick-order__discount\">
\t\t\t\t\t\t\t\t\t";
                // line 84
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 85
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"quick-order__discount-item\">";
                    echo $this->getAttribute($context["discount"], "quantity", array());
                    echo " ";
                    echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                    echo " ";
                    echo $this->getAttribute($context["discount"], "price", array());
                    echo "</div>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 89
            echo "\t\t\t\t\t\t";
        }
        // line 90
        echo "\t\t\t\t\t\t";
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 91
            echo "\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"quick-order__option option row\">
\t\t\t\t\t\t\t\t";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 94
                echo "\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 95
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"option__group col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"option__group-name\" for=\"input-option";
                    // line 96
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo (($this->getAttribute($context["option"], "required", array())) ? ("*") : (""));
                    echo " ";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<select name=\"option[";
                    // line 97
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"option__select form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 98
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 99
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 100
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" data-name=\"";
                        echo (($this->getAttribute($context["option"], "name", array()) . ": ") . $this->getAttribute($context["option_value"], "name", array()));
                        echo "\" data-prefix=\"";
                        echo $this->getAttribute($context["option_value"], "price_prefix", array());
                        echo "\" data-price=\"";
                        echo $this->getAttribute($context["option_value"], "price_value", array());
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 101
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo " ";
                        echo (($this->getAttribute($context["option_value"], "price", array())) ? ((((("(" . $this->getAttribute($context["option_value"], "price_prefix", array())) . "") . $this->getAttribute($context["option_value"], "price", array())) . ")")) : (""));
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 104
                    echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 107
                echo "\t\t\t\t\t\t\t\t\t";
                if ((($this->getAttribute($context["option"], "type", array()) == "radio") || ($this->getAttribute($context["option"], "type", array()) == "checkbox"))) {
                    // line 108
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"option__group col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"option__group-name\">";
                    // line 109
                    echo (($this->getAttribute($context["option"], "required", array())) ? ("*") : (""));
                    echo " ";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"input-option";
                    // line 110
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 111
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 112
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"option__item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 113
                        if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                            // line 114
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"option[";
                            echo $this->getAttribute($context["option"], "product_option_id", array());
                            echo "]\" value=\"";
                            echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                            echo "\" data-name=\"";
                            echo (($this->getAttribute($context["option"], "name", array()) . ": ") . $this->getAttribute($context["option_value"], "name", array()));
                            echo "\" data-prefix=\"";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo "\" data-price=\"";
                            echo $this->getAttribute($context["option_value"], "price_value", array());
                            echo "\" class=\"hidden\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 116
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                            echo $this->getAttribute($context["option"], "product_option_id", array());
                            echo "][]\" value=\"";
                            echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                            echo "\" data-name=\"";
                            echo (($this->getAttribute($context["option"], "name", array()) . ": ") . $this->getAttribute($context["option_value"], "name", array()));
                            echo "\" data-prefix=\"";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo "\" data-price=\"";
                            echo $this->getAttribute($context["option_value"], "price_value", array());
                            echo "\" class=\"hidden\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 118
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            // line 119
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            echo (($this->getAttribute($context["option_value"], "price", array())) ? ((($this->getAttribute($context["option_value"], "price_prefix", array()) . "") . $this->getAttribute($context["option_value"], "price", array()))) : (""));
                            echo "\" data-type=\"quick-order\" data-thumb=\"";
                            echo $this->getAttribute($context["option_value"], "small", array());
                            echo "\" data-full=\"";
                            echo $this->getAttribute($context["option_value"], "full", array());
                            echo "\" class=\"option__img\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 121
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"option__name\" ";
                            echo (($this->getAttribute($context["option_value"], "price", array())) ? ((((("data-toggle=\"tooltip\" title=\"" . $this->getAttribute($context["option_value"], "price_prefix", array())) . " ") . $this->getAttribute($context["option_value"], "price", array())) . "\"")) : (""));
                            echo ">";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 123
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 125
                    echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 128
                echo "\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 129
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"option__group-name\" for=\"input-option";
                    // line 130
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo (($this->getAttribute($context["option"], "required", array())) ? ("*") : (""));
                    echo " ";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 131
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" data-name=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 134
                echo "\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 135
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"option__group-name\" for=\"input-option";
                    // line 136
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo (($this->getAttribute($context["option"], "required", array())) ? ("*") : (""));
                    echo " ";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"option[";
                    // line 137
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" data-name=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</textarea>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 140
                echo "\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 141
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"option__group-name\">";
                    // line 142
                    echo (($this->getAttribute($context["option"], "required", array())) ? ("*") : (""));
                    echo " ";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-upload";
                    // line 143
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                    // line 144
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" data-name=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 147
                echo "\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 148
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"option__group-name\" for=\"input-option";
                    // line 149
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo (($this->getAttribute($context["option"], "required", array())) ? ("*") : (""));
                    echo " ";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 151
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" data-locale=\"";
                    echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" data-name=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\"><button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 156
                echo "\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 157
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"option__group-name\" for=\"input-option";
                    // line 158
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo (($this->getAttribute($context["option"], "required", array())) ? ("*") : (""));
                    echo " ";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 160
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" data-locale=\"";
                    echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" data-name=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 165
                echo "\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 166
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"option__group-name\" for=\"input-option";
                    // line 167
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo (($this->getAttribute($context["option"], "required", array())) ? ("*") : (""));
                    echo " ";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 169
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" data-name=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 174
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 177
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div style=\"margin:0 0 30px\"></div>
\t\t\t\t";
        // line 180
        if (((isset($context["description"]) ? $context["description"] : null) && ((isset($context["show_attr"]) ? $context["show_attr"] : null) && (isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)))) {
            // line 181
            echo "\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#quick-order__description\" data-toggle=\"tab\">";
            // line 182
            echo (isset($context["text_description"]) ? $context["text_description"] : null);
            echo "</a></li>
\t\t\t\t\t\t";
            // line 183
            if (((isset($context["show_attr"]) ? $context["show_attr"] : null) && (isset($context["attribute_groups"]) ? $context["attribute_groups"] : null))) {
                // line 184
                echo "\t\t\t\t\t\t\t<li><a href=\"#quick-order__attribute\" data-toggle=\"tab\">";
                echo (isset($context["text_attributes"]) ? $context["text_attributes"] : null);
                echo "</a></li>
\t\t\t\t\t\t";
            }
            // line 186
            echo "\t\t\t\t\t</ul>
\t\t\t\t";
        }
        // line 188
        echo "\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div id=\"quick-order__description\" class=\"tab-pane quick-order__description active\">
\t\t\t\t\t\t";
        // line 190
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "
\t\t\t\t\t\t<a href=\"";
        // line 191
        echo (isset($context["href"]) ? $context["href"] : null);
        echo "\" title=\"\" class=\"quick-order__more\">";
        echo (isset($context["text_more"]) ? $context["text_more"] : null);
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 193
        if (((isset($context["show_attr"]) ? $context["show_attr"] : null) && (isset($context["attribute_groups"]) ? $context["attribute_groups"] : null))) {
            // line 194
            echo "\t\t\t\t\t\t<div id=\"quick-order__attribute\" class=\"tab-pane quick-order__attribute product-data\">
\t\t\t\t\t\t\t";
            // line 195
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 196
                echo "\t\t\t\t\t\t\t\t<div class=\"product-data__item\"><div class=\"product-data__item-div\"><span class=\"product-data__item-span\">";
                echo $this->getAttribute($context["attribute"], "name", array());
                echo "</span></div> ";
                echo $this->getAttribute($context["attribute"], "text", array());
                echo "</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "\t
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 200
        echo "\t\t\t\t</div>
\t\t\t\t<div style=\"margin:0 0 30px\"></div>
\t\t\t\t<h4 class=\"heading\"><span>";
        // line 202
        echo (isset($context["text_contact_data"]) ? $context["text_contact_data"] : null);
        echo "</span></h4>
\t\t\t\t<form class=\"quick-order__form row-flex\">
\t\t\t\t\t<input type=\"text\" name=\"firstname\" class=\"quick-order__input form-control\" placeholder=\"";
        // line 204
        echo (isset($context["name_text"]) ? $context["name_text"] : null);
        echo "*\" value=\"";
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "\" />
\t\t\t\t\t<input type=\"text\" name=\"phone\" class=\"quick-order__input quick-order__phone form-control \" placeholder=\"";
        // line 205
        echo (isset($context["phone_text"]) ? $context["phone_text"] : null);
        echo "*\" value=\"";
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\" />
\t\t\t\t\t";
        // line 206
        if ((isset($context["mail"]) ? $context["mail"] : null)) {
            // line 207
            echo "\t\t\t\t\t\t<input type=\"text\" name=\"email\" class=\"quick-order__input form-control\" placeholder=\"";
            echo (isset($context["mail_text"]) ? $context["mail_text"] : null);
            echo "\" value=\"";
            echo (isset($context["email"]) ? $context["email"] : null);
            echo "\" />
\t\t\t\t\t";
        }
        // line 209
        echo "\t\t\t\t\t";
        if ((isset($context["delivery"]) ? $context["delivery"] : null)) {
            // line 210
            echo "\t\t\t\t\t\t<input type=\"text\" name=\"address\" class=\"quick-order__input form-control\" placeholder=\"";
            echo (isset($context["delivery_text"]) ? $context["delivery_text"] : null);
            echo "\" value=\"";
            echo (isset($context["address"]) ? $context["address"] : null);
            echo "\" />
\t\t\t\t\t";
        }
        // line 212
        echo "\t\t\t\t\t";
        if ((isset($context["comment"]) ? $context["comment"] : null)) {
            // line 213
            echo "\t\t\t\t\t\t<input type=\"text\" name=\"comment\" class=\"quick-order__input form-control\" placeholder=\"";
            echo (isset($context["comment_text"]) ? $context["comment_text"] : null);
            echo "\" />
\t\t\t\t\t";
        }
        // line 215
        echo "\t\t\t\t</form>
\t\t\t\t<input type=\"hidden\" name=\"comment2\" value=\"\" />
\t\t\t\t<script>
\t\t\t\t\t\$(function() {\t
\t\t\t\t\t\tvar q = \$('.quick-order__input').length;
\t\t\t\t\t\tif(q%2) {
\t\t\t\t\t\t\t\$('.quick-order__input:last-child').addClass('full-width');
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t</script>
\t\t\t\t";
        // line 225
        echo (isset($context["captcha"]) ? $context["captcha"] : null);
        echo "
\t\t\t\t";
        // line 226
        if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
            // line 227
            echo "\t\t\t\t\t<div class=\"quick-order__agree\">
\t\t\t\t\t\t<label class=\"input\"><input id=\"confirm\" type=\"checkbox\" name=\"confirm\" value=\"1\" /><span></span>";
            // line 228
            echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
            echo "</label>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 231
        echo "\t\t\t\t<div class=\"quick-order__cart\">
\t\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
        // line 232
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "\" />
\t\t\t\t\t<div class=\"qty-switch\">
\t\t\t\t\t\t<input type=\"text\" name=\"quantity\" value=\"";
        // line 234
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\" data-minimum=\"";
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\" id=\"input-quantity\" class=\"qty-switch__input form-control\" />
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<i class=\"qty-switch__btn fa fa-plus btn-default\"></i>
\t\t\t\t\t\t\t<i class=\"qty-switch__btn fa fa-minus btn-default\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<button type=\"button\" onclick=\"uniQuickOrderAdd()\" data-loading-text=\"";
        // line 240
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"add_to_cart btn btn-lg\"><i class=\"";
        echo (isset($context["cart_btn_icon"]) ? $context["cart_btn_icon"] : null);
        echo "\"></i> <span>";
        echo (isset($context["text_order_button"]) ? $context["text_order_button"] : null);
        echo "</span></button>
\t\t\t\t</div>
\t\t\t\t";
        // line 242
        if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
            echo "<div class=\"quick-order__minimum\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</div>";
        }
        // line 243
        echo "\t\t\t\t<input type=\"hidden\" name=\"currency\" value=\"";
        echo (isset($context["currency"]) ? $context["currency"] : null);
        echo "\" />
\t\t\t\t<input type=\"hidden\" name=\"goal_id\" value=\"";
        // line 244
        echo (isset($context["goal_id"]) ? $context["goal_id"] : null);
        echo "\" />
\t\t\t\t";
        // line 245
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 246
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 247
                echo "\t\t\t\t\t\t";
                if (((($this->getAttribute($context["option"], "type", array()) == "date") || ($this->getAttribute($context["option"], "type", array()) == "datetime")) || ($this->getAttribute($context["option"], "type", array()) == "time"))) {
                    // line 248
                    echo "\t\t\t\t\t\t\t<link type=\"text/css\" href=\"catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" rel=\"stylesheet\" media=\"screen\" />
\t\t\t\t\t\t\t<script src=\"catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js\" type=\"text/javascript\"></script>
\t\t\t\t\t\t\t<script src=\"catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js\" type=\"text/javascript\"></script>
\t\t\t\t\t\t\t<script src=\"catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
\t\t\t\t\t\t\t<style>.bootstrap-datetimepicker-widget {z-index: 9999999999!important;position:absolute !important}</style>
\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\$('.date').datetimepicker({
\t\t\t\t\t\t\t\t\tpickTime: false
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\$('.datetime').datetimepicker({
\t\t\t\t\t\t\t\t\tpickDate: true,
\t\t\t\t\t\t\t\t\tpickTime: true
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\$('.time').datetimepicker({
\t\t\t\t\t\t\t\t\tpickDate: false
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t";
                }
                // line 266
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 267
            echo "\t\t\t\t";
        }
        // line 268
        echo "\t\t\t\t<script>
\t\t\t\t\$(function() {
\t\t\t\t\tlet qty = \$('#content .product-block').find('input[name=\"quantity\"]').val();
\t\t\t\t\t
\t\t\t\t\tif(typeof(qty) == 'undefined') {
\t\t\t\t\t\t\$('.product-thumb__add-to-cart').each(function() {
\t\t\t\t\t\t\tif(\$(this).data('pid') == ";
        // line 274
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo ") {
\t\t\t\t\t\t\t\tqty = \$(this).prev().find('input[name=\"quantity\"]').val();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tif(typeof(qty) != 'undefined' && qty > 1) {
\t\t\t\t\t\t\$('.quick-order').find('input[name=\"quantity\"]').val(qty);
\t\t\t\t\t}
\t\t\t\t
\t\t\t\t\tsetTimeout(function() { 
\t\t\t\t\t\t\$('.quick-order__image-additional').owlCarousel({
\t\t\t\t\t\t\titems:4,
\t\t\t\t\t\t\tdots: false,
\t\t\t\t\t\t\tmouseDrag: false,
\t\t\t\t\t\t\tloop: false,
\t\t\t\t\t\t\tnav: true,
\t\t\t\t\t\t\tnavText: ['<i class=\"fa fa-chevron-left\"></i>', '<i class=\"fa fa-chevron-right\"></i>'],
\t\t\t\t\t\t});
\t\t\t\t\t}, 100);
\t\t\t\t
\t\t\t\t\t\$('.quick-order__image-additional img').on('mouseover', function() {
\t\t\t\t\t\t\$('.quick-order__img').attr('src', \$(this).attr('data-image'))
\t\t\t\t\t\t\$('.quick-order__image-additional img').addClass('selected').not(\$(this)).removeClass('selected');
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\t";
        // line 300
        if ((isset($context["change_opt_img_q"]) ? $context["change_opt_img_q"] : null)) {
            echo "\t\t
\t\t\t\t\t\t\$('.quick-order input[type=\"radio\"] + .option__img').on('click', function() {
\t\t\t\t\t\t\t\$('.quick-order__img').attr('src', \$(this).attr('data-thumb'));
\t\t\t\t\t\t});
\t\t\t\t\t";
        }
        // line 305
        echo "\t\t\t\t});
\t\t\t\t
\t\t\t\t";
        // line 307
        if ((isset($context["special_timer"]) ? $context["special_timer"] : null)) {
            // line 308
            echo "\t\t\t\t\t\$('.quick-order__image-main').uniTimer({
\t\t\t\t\t\tdate      :'";
            // line 309
            echo (isset($context["special_timer"]) ? $context["special_timer"] : null);
            echo "',
\t\t\t\t\t\ttexts     :['";
            // line 310
            echo (isset($context["text_special_day"]) ? $context["text_special_day"] : null);
            echo "','";
            echo (isset($context["text_special_hour"]) ? $context["text_special_hour"] : null);
            echo "','";
            echo (isset($context["text_special_min"]) ? $context["text_special_min"] : null);
            echo "','";
            echo (isset($context["text_special_sec"]) ? $context["text_special_sec"] : null);
            echo "'],
\t\t\t\t\t\thideText  :false,
\t\t\t\t\t\thideIsNull:false
\t\t\t\t\t});
\t\t\t\t";
        }
        // line 315
        echo "\t\t\t\t
\t\t\t\t\$('body').on('focus', '.quick-order__phone', function(){
\t\t\t\t\t\$(this).mask('";
        // line 317
        echo (isset($context["phone_mask"]) ? $context["phone_mask"] : null);
        echo "');
\t\t\t\t});
\t\t\t\t</script>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/uni_quick_order.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  965 => 317,  961 => 315,  947 => 310,  943 => 309,  940 => 308,  938 => 307,  934 => 305,  926 => 300,  897 => 274,  889 => 268,  886 => 267,  880 => 266,  860 => 248,  857 => 247,  852 => 246,  850 => 245,  846 => 244,  841 => 243,  835 => 242,  826 => 240,  815 => 234,  810 => 232,  807 => 231,  801 => 228,  798 => 227,  796 => 226,  792 => 225,  780 => 215,  774 => 213,  771 => 212,  763 => 210,  760 => 209,  752 => 207,  750 => 206,  744 => 205,  738 => 204,  733 => 202,  729 => 200,  724 => 197,  713 => 196,  709 => 195,  706 => 194,  704 => 193,  697 => 191,  693 => 190,  689 => 188,  685 => 186,  679 => 184,  677 => 183,  673 => 182,  670 => 181,  668 => 180,  663 => 177,  659 => 175,  653 => 174,  639 => 169,  630 => 167,  627 => 166,  624 => 165,  608 => 160,  599 => 158,  596 => 157,  593 => 156,  577 => 151,  568 => 149,  565 => 148,  562 => 147,  552 => 144,  544 => 143,  538 => 142,  535 => 141,  532 => 140,  518 => 137,  510 => 136,  507 => 135,  504 => 134,  490 => 131,  482 => 130,  479 => 129,  476 => 128,  471 => 125,  464 => 123,  456 => 121,  442 => 119,  439 => 118,  425 => 116,  411 => 114,  409 => 113,  406 => 112,  402 => 111,  398 => 110,  392 => 109,  389 => 108,  386 => 107,  381 => 104,  370 => 101,  359 => 100,  355 => 99,  351 => 98,  345 => 97,  337 => 96,  334 => 95,  331 => 94,  327 => 93,  323 => 91,  320 => 90,  317 => 89,  313 => 87,  300 => 85,  296 => 84,  293 => 83,  291 => 82,  288 => 81,  282 => 79,  274 => 77,  272 => 76,  264 => 75,  261 => 74,  258 => 73,  255 => 72,  253 => 71,  250 => 70,  248 => 69,  245 => 68,  242 => 67,  233 => 66,  224 => 65,  221 => 64,  213 => 62,  210 => 61,  202 => 59,  199 => 58,  191 => 56,  188 => 55,  180 => 53,  177 => 52,  169 => 50,  166 => 49,  158 => 47,  155 => 46,  147 => 44,  144 => 43,  136 => 41,  133 => 40,  125 => 38,  122 => 37,  112 => 35,  109 => 34,  101 => 32,  98 => 31,  90 => 29,  88 => 28,  83 => 25,  79 => 23,  68 => 21,  64 => 20,  58 => 19,  55 => 18,  52 => 17,  42 => 14,  39 => 13,  36 => 12,  34 => 11,  26 => 6,  19 => 1,);
    }
}
/* <div id="modal-quick-order" class="modal">*/
/* 	<div class="modal-dialog modal-lg">*/
/* 		<div class="modal-content">*/
/* 			<div class="modal-header">*/
/* 				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/* 				<h4 class="modal-title">{{ name }}</h4>*/
/* 			</div>*/
/* 			<div id="quick_order" class="modal-body quick-order product-block">*/
/* 				<div class="row">*/
/* 					<div class="quick-order__image col-xs-12 col-sm-4 col-md-5">*/
/* 						{% include 'unishop2/template/extension/module/uni_stickers.twig' %}*/
/* 						{% if thumb %}*/
/* 							<div class="quick-order__image-main uni-item">*/
/* 								<img src="{{ thumb }}" title="{{ name }}" alt="{{ name }}" class="quick-order__img img-responsive" />*/
/* 							</div>*/
/* 						{% endif %}*/
/* 						{% if images or options %}*/
/* 							<div class="quick-order__image-additional owl-carousel">*/
/* 								<img src="{{ small }}" data-image="{{ thumb }}" alt="" class="quick-order__image-additional-img img-responsive selected" />*/
/* 								{% for image in images %}*/
/* 									<img src="{{ image.small }}" data-image="{{ image.thumb }}" alt="" class="quick-order__image-additional-img img-responsive" />*/
/* 								{% endfor %}*/
/* 							</div>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 					<div class="quick-order__product col-xs-12 col-sm-8 col-md-7">*/
/* 						<div class="product-data">*/
/* 							{% if show_model %}*/
/* 								<div class="product-data__item model"><div class="product-data__item-div"><span class="product-data__item-span">{{ text_model }}</span></div> {{ model }}</div>*/
/* 							{% endif %}*/
/* 							{% if sku %}*/
/* 								<div class="product-data__item sku"><div class="product-data__item-div"><span class="product-data__item-span">{{ text_sku }}:</span></div> {{ sku }}</div>*/
/* 							{% endif %}*/
/* 							{% if show_manuf and manufacturer %}*/
/* 								<div class="product-data__item manufacturer"><div class="product-data__item-div"><span class="product-data__item-span">{{ text_manufacturer }}</span></div><a href="{{ manufacturers }}">{{ manufacturer }}</a></div>*/
/* 							{% endif %}*/
/* 							{% if location %}*/
/* 								<div class="product-data__item location"><div class="product-data__item-div"><span class="product-data__item-span">{{ text_location }}:</span></div> {{ location }}</div>*/
/* 							{% endif %}*/
/* 							{% if reward and show_reward == 1 or show_reward == 3 %}*/
/* 								<div class="product-data__item reward"><div class="product-data__item-div"><span class="product-data__item-span">{{ text_reward }}</span></div> {{ reward }}</div>*/
/* 							{% endif %}*/
/* 							{% if points and show_reward == 2 or show_reward == 3 %}*/
/* 								<div class="product-data__item points"><div class="product-data__item-div"><span class="product-data__item-span">{{ text_points }}</span></div> {{ points }}</div>*/
/* 							{% endif %}*/
/* 							{% if upc %}*/
/* 								<div class="product-data__item upc"><div class="product-data__item-div"><span class="product-data__item-span">{{ text_upc }}:</span></div> {{ upc }}</div>*/
/* 							{% endif %}*/
/* 							{% if ean %}*/
/* 								<div class="product-data__item ean"><div class="product-data__item-div"><span class="product-data__item-span">{{ text_ean }}:</span></div> {{ ean }}</div>*/
/* 							{% endif %}*/
/* 							{% if jan %}*/
/* 								<div class="product-data__item jan"><div class="product-data__item-div"><span class="product-data__item-span">{{ text_jan }}:</span></div> {{ jan }}</div>*/
/* 							{% endif %}*/
/* 							{% if isbn %}*/
/* 								<div class="product-data__item isbn"><div class="product-data__item-div"><span class="product-data__item-span">{{ text_isbn }}:</span></div> {{ isbn }}</div>*/
/* 							{% endif %}*/
/* 							{% if mpn %}*/
/* 								<div class="product-data__item mpn"><div class="product-data__item-div"><span class="product-data__item-span">{{ text_mpn }}:</span></div> {{ mpn }}</div>*/
/* 							{% endif %}*/
/* 							{% if not product.quantity_indicator %}*/
/* 								<div class="product-data__item stock"><div class="product-data__item-div"><span class="product-data__item-span">{{ text_stock }}</span></div> {{ stock }}</div>*/
/* 							{% endif %}*/
/* 							{% if show_length == 1 %}*/
/* 								{% if length %}<div class="product-data__item length"><div class="product-data__item-div"><span class="product-data__item-span">{{ text_length }}</span></div> {{ length }}</div>{% endif %}*/
/* 								{% if weight %}<div class="product-data__item weight"><div class="product-data__item-div"><span class="product-data__item-span">{{ text_weight }}</span></div> {{ weight }}</div>{% endif %}*/
/* 							{% endif %}*/
/* 						</div>*/
/* 						{% if product.quantity_indicator %}*/
/* 							<hr />*/
/* 							{% include 'unishop2/template/extension/module/uni_quantity_indicator.twig' %}*/
/* 						{% endif %}*/
/* 						{% if price %}*/
/* 							<hr />*/
/* 							<div class="quick-order__price price" data-price="{{ price_value }}" data-special="{{ special_value }}" data-discount="{{ discounts_value }}">*/
/* 								{% if special %}*/
/* 									<span class="price-old">{{price}}</span> <span class="price-new">{{special}}</span>*/
/* 								{% else %}*/
/* 									{{price}}*/
/* 								{% endif %}*/
/* 							</div>*/
/* 							{% if discounts %}*/
/* 								<div class="quick-order__discount">*/
/* 									{% for discount in discounts %}*/
/* 										<div class="quick-order__discount-item">{{discount.quantity}} {{text_discount}} {{discount.price}}</div>*/
/* 									{% endfor %}*/
/* 								</div>*/
/* 							{% endif %}*/
/* 						{% endif %}*/
/* 						{% if options %}*/
/* 							<hr />*/
/* 							<div class="quick-order__option option row">*/
/* 								{% for option in options %}*/
/* 									{% if option.type == 'select' %}*/
/* 										<div class="option__group col-md-6">*/
/* 											<label class="option__group-name" for="input-option{{ option.product_option_id }}">{{ option.required ? '*' }} {{ option.name }}:</label>*/
/* 											<select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id }}" class="option__select form-control">*/
/* 												<option value="">{{ text_select }}</option>*/
/* 												{% for option_value in option.product_option_value %}*/
/* 													<option value="{{ option_value.product_option_value_id }}" data-name="{{ option.name~': '~option_value.name }}" data-prefix="{{ option_value.price_prefix }}" data-price="{{ option_value.price_value }}">*/
/* 														{{ option_value.name }} {{ option_value.price ? '(' ~ option_value.price_prefix ~ '' ~ option_value.price ~ ')' }}*/
/* 													</option>*/
/* 												{% endfor %}*/
/* 											</select>*/
/* 										</div>*/
/* 									{% endif %}*/
/* 									{% if option.type == 'radio' or option.type == 'checkbox' %}*/
/* 										<div class="option__group col-xs-12">*/
/* 											<label class="option__group-name">{{ option.required ? '*' }} {{ option.name }}:</label>*/
/* 											<div id="input-option{{ option.product_option_id }}">*/
/* 												{% for option_value in option.product_option_value %}*/
/* 													<label class="option__item">*/
/* 														{% if option.type == 'radio' %}*/
/* 															<input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}" data-name="{{ option.name~': '~option_value.name }}" data-prefix="{{ option_value.price_prefix }}" data-price="{{ option_value.price_value }}" class="hidden" />*/
/* 														{% else %}*/
/* 															<input type="checkbox" name="option[{{ option.product_option_id }}][]" value="{{ option_value.product_option_value_id }}" data-name="{{ option.name~': '~option_value.name }}" data-prefix="{{option_value.price_prefix}}" data-price="{{option_value.price_value}}" class="hidden" />*/
/* 														{% endif %}*/
/* 														{% if option_value.image %}*/
/* 															<img src="{{ option_value.image }}" alt="{{ option_value.name }} {{ option_value.price ? option_value.price_prefix ~ '' ~ option_value.price }}" data-type="quick-order" data-thumb="{{ option_value.small }}" data-full="{{ option_value.full }}" class="option__img" />*/
/* 														{% else %}*/
/* 															<span class="option__name" {{ option_value.price ? 'data-toggle="tooltip" title="'~option_value.price_prefix~' '~option_value.price~'"' }}>{{ option_value.name }}</span>*/
/* 														{% endif %}*/
/* 													</label>*/
/* 												{% endfor %}*/
/* 											</div>*/
/* 										</div>*/
/* 									{% endif %}*/
/* 									{% if option.type == 'text' %}*/
/* 										<div class="form-group col-xs-12">*/
/* 											<label class="option__group-name" for="input-option{{option.product_option_id}}">{{ option.required ? '*' }} {{ option.name }}</label>*/
/* 											<input type="text" name="option[{{option.product_option_id}}]" value="{{ option.value }}" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control" data-name="{{option.name}}" />*/
/* 										</div>*/
/* 									{% endif %}*/
/* 									{% if option.type == 'textarea' %}*/
/* 										<div class="form-group col-xs-12">*/
/* 											<label class="option__group-name" for="input-option{{option.product_option_id}}">{{ option.required ? '*' }} {{ option.name }}</label>*/
/* 											<textarea name="option[{{option.product_option_id}}]" rows="5" placeholder="{{ option.name }}" id="input-option{{option.product_option_id}}" class="form-control" data-name="{{option.name}}">{{option.value}}</textarea>*/
/* 										</div>*/
/* 									{% endif %}*/
/* 									{% if option.type == 'file' %}*/
/* 										<div class="form-group col-xs-12">*/
/* 											<label class="option__group-name">{{ option.required ? '*' }} {{option.name}}</label>*/
/* 											<button type="button" id="button-upload{{option.product_option_id}}" data-loading-text="{{text_loading}}" class="btn btn-default btn-block"><i class="fa fa-upload"></i> {{button_upload}}</button>*/
/* 											<input type="hidden" name="option[{{option.product_option_id}}]" value="" id="input-option{{option.product_option_id}}" data-name="{{option.name}}" />*/
/* 										</div>*/
/* 									{% endif %}*/
/* 									{% if option.type == 'date' %}*/
/* 										<div class="form-group col-xs-12">*/
/* 											<label class="option__group-name" for="input-option{{option.product_option_id}}">{{ option.required ? '*' }} {{ option.name }}</label>*/
/* 											<div class="input-group date">*/
/* 												<input type="text" name="option[{{option.product_option_id}}]" value="{{option.value}}" data-date-format="YYYY-MM-DD" data-locale="{{datepicker}}" id="input-option{{option.product_option_id}}" class="form-control" data-name="{{option.name}}" />*/
/* 												<span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button></span>*/
/* 											</div>*/
/* 										</div>*/
/* 									{% endif %}*/
/* 									{% if option.type == 'datetime' %}*/
/* 										<div class="form-group col-xs-12">*/
/* 											<label class="option__group-name" for="input-option{{ option.product_option_id }}">{{ option.required ? '*' }} {{ option.name }}</label>*/
/* 											<div class="input-group datetime">*/
/* 												<input type="text" name="option[{{option.product_option_id}}]" value="{{option.value}}" data-date-format="YYYY-MM-DD HH:mm" data-locale="{{datepicker}}" id="input-option{{option.product_option_id}}" class="form-control" data-name="{{option.name}}" />*/
/* 												<span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span>*/
/* 											</div>*/
/* 										</div>*/
/* 									{% endif %}*/
/* 									{% if option.type == 'time' %}*/
/* 										<div class="form-group col-xs-12">*/
/* 											<label class="option__group-name" for="input-option{{ option.product_option_id }}">{{ option.required ? '*' }} {{ option.name }}</label>*/
/* 											<div class="input-group time">*/
/* 												<input type="text" name="option[{{option.product_option_id}}]" value="{{option.value}}" data-date-format="HH:mm" id="input-option{{option.product_option_id}}" class="form-control" data-name="{{option.name}}" />*/
/* 												<span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span>*/
/* 											</div>*/
/* 										</div>*/
/* 									{% endif %}*/
/* 								{% endfor %}*/
/* 							</div>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 				</div>*/
/* 				<div style="margin:0 0 30px"></div>*/
/* 				{% if description and (show_attr and attribute_groups) %}*/
/* 					<ul class="nav nav-tabs">*/
/* 						<li class="active"><a href="#quick-order__description" data-toggle="tab">{{ text_description }}</a></li>*/
/* 						{% if show_attr and attribute_groups %}*/
/* 							<li><a href="#quick-order__attribute" data-toggle="tab">{{ text_attributes }}</a></li>*/
/* 						{% endif %}*/
/* 					</ul>*/
/* 				{% endif %}*/
/* 				<div class="tab-content">*/
/* 					<div id="quick-order__description" class="tab-pane quick-order__description active">*/
/* 						{{ description }}*/
/* 						<a href="{{ href }}" title="" class="quick-order__more">{{ text_more }}</a>*/
/* 					</div>*/
/* 					{% if show_attr and attribute_groups %}*/
/* 						<div id="quick-order__attribute" class="tab-pane quick-order__attribute product-data">*/
/* 							{% for attribute in attribute_groups %}*/
/* 								<div class="product-data__item"><div class="product-data__item-div"><span class="product-data__item-span">{{ attribute.name }}</span></div> {{ attribute.text }}</div>*/
/* 							{% endfor %}	*/
/* 						</div>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 				<div style="margin:0 0 30px"></div>*/
/* 				<h4 class="heading"><span>{{ text_contact_data }}</span></h4>*/
/* 				<form class="quick-order__form row-flex">*/
/* 					<input type="text" name="firstname" class="quick-order__input form-control" placeholder="{{ name_text }}*" value="{{ firstname }}" />*/
/* 					<input type="text" name="phone" class="quick-order__input quick-order__phone form-control " placeholder="{{ phone_text }}*" value="{{ telephone }}" />*/
/* 					{% if mail %}*/
/* 						<input type="text" name="email" class="quick-order__input form-control" placeholder="{{ mail_text }}" value="{{ email }}" />*/
/* 					{% endif %}*/
/* 					{% if delivery %}*/
/* 						<input type="text" name="address" class="quick-order__input form-control" placeholder="{{ delivery_text }}" value="{{ address }}" />*/
/* 					{% endif %}*/
/* 					{% if comment %}*/
/* 						<input type="text" name="comment" class="quick-order__input form-control" placeholder="{{ comment_text }}" />*/
/* 					{% endif %}*/
/* 				</form>*/
/* 				<input type="hidden" name="comment2" value="" />*/
/* 				<script>*/
/* 					$(function() {	*/
/* 						var q = $('.quick-order__input').length;*/
/* 						if(q%2) {*/
/* 							$('.quick-order__input:last-child').addClass('full-width');*/
/* 						}*/
/* 					});*/
/* 				</script>*/
/* 				{{ captcha }}*/
/* 				{% if text_agree %}*/
/* 					<div class="quick-order__agree">*/
/* 						<label class="input"><input id="confirm" type="checkbox" name="confirm" value="1" /><span></span>{{ text_agree }}</label>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 				<div class="quick-order__cart">*/
/* 					<input type="hidden" name="product_id" value="{{ product_id }}" />*/
/* 					<div class="qty-switch">*/
/* 						<input type="text" name="quantity" value="{{ minimum }}" data-minimum="{{ minimum }}" id="input-quantity" class="qty-switch__input form-control" />*/
/* 						<div>*/
/* 							<i class="qty-switch__btn fa fa-plus btn-default"></i>*/
/* 							<i class="qty-switch__btn fa fa-minus btn-default"></i>*/
/* 						</div>*/
/* 					</div>*/
/* 					<button type="button" onclick="uniQuickOrderAdd()" data-loading-text="{{ text_loading }}" class="add_to_cart btn btn-lg"><i class="{{ cart_btn_icon }}"></i> <span>{{ text_order_button }}</span></button>*/
/* 				</div>*/
/* 				{% if minimum > 1 %}<div class="quick-order__minimum"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>{% endif %}*/
/* 				<input type="hidden" name="currency" value="{{currency}}" />*/
/* 				<input type="hidden" name="goal_id" value="{{goal_id}}" />*/
/* 				{% if options %}*/
/* 					{% for option in options %}*/
/* 						{% if option.type == 'date' or option.type == 'datetime' or option.type == 'time' %}*/
/* 							<link type="text/css" href="catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen" />*/
/* 							<script src="catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js" type="text/javascript"></script>*/
/* 							<script src="catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js" type="text/javascript"></script>*/
/* 							<script src="catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>*/
/* 							<style>.bootstrap-datetimepicker-widget {z-index: 9999999999!important;position:absolute !important}</style>*/
/* 							<script>*/
/* 								$('.date').datetimepicker({*/
/* 									pickTime: false*/
/* 								});*/
/* 								$('.datetime').datetimepicker({*/
/* 									pickDate: true,*/
/* 									pickTime: true*/
/* 								});*/
/* 								$('.time').datetimepicker({*/
/* 									pickDate: false*/
/* 								});*/
/* 							</script>*/
/* 						{% endif %}*/
/* 					{% endfor %}*/
/* 				{% endif %}*/
/* 				<script>*/
/* 				$(function() {*/
/* 					let qty = $('#content .product-block').find('input[name="quantity"]').val();*/
/* 					*/
/* 					if(typeof(qty) == 'undefined') {*/
/* 						$('.product-thumb__add-to-cart').each(function() {*/
/* 							if($(this).data('pid') == {{ product_id }}) {*/
/* 								qty = $(this).prev().find('input[name="quantity"]').val();*/
/* 							}*/
/* 						});*/
/* 					}*/
/* 					*/
/* 					if(typeof(qty) != 'undefined' && qty > 1) {*/
/* 						$('.quick-order').find('input[name="quantity"]').val(qty);*/
/* 					}*/
/* 				*/
/* 					setTimeout(function() { */
/* 						$('.quick-order__image-additional').owlCarousel({*/
/* 							items:4,*/
/* 							dots: false,*/
/* 							mouseDrag: false,*/
/* 							loop: false,*/
/* 							nav: true,*/
/* 							navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],*/
/* 						});*/
/* 					}, 100);*/
/* 				*/
/* 					$('.quick-order__image-additional img').on('mouseover', function() {*/
/* 						$('.quick-order__img').attr('src', $(this).attr('data-image'))*/
/* 						$('.quick-order__image-additional img').addClass('selected').not($(this)).removeClass('selected');*/
/* 					});*/
/* 					*/
/* 					{% if change_opt_img_q %}		*/
/* 						$('.quick-order input[type="radio"] + .option__img').on('click', function() {*/
/* 							$('.quick-order__img').attr('src', $(this).attr('data-thumb'));*/
/* 						});*/
/* 					{% endif %}*/
/* 				});*/
/* 				*/
/* 				{% if special_timer %}*/
/* 					$('.quick-order__image-main').uniTimer({*/
/* 						date      :'{{ special_timer }}',*/
/* 						texts     :['{{ text_special_day }}','{{ text_special_hour }}','{{ text_special_min }}','{{ text_special_sec }}'],*/
/* 						hideText  :false,*/
/* 						hideIsNull:false*/
/* 					});*/
/* 				{% endif %}*/
/* 				*/
/* 				$('body').on('focus', '.quick-order__phone', function(){*/
/* 					$(this).mask('{{ phone_mask }}');*/
/* 				});*/
/* 				</script>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
