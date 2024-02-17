<?php

/* unishop2/template/product/special.twig */
class __TwigTemplate_819d75bd5f8f5071124e4914653f898146a0ef2533dd05cf6b45450208a3dc88 extends Twig_Template
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
\t<div class=\"row\">
\t\t";
        // line 13
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
\t\t";
        // line 14
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 15
            echo "\t\t\t";
            $context["class"] = "col-sm-4 col-md-6 col-lg-6 col-xxl-12";
            // line 16
            echo "\t\t";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 17
            echo "\t\t\t";
            $context["class"] = "col-sm-8 col-md-9 col-lg-9 col-xxl-16";
            // line 18
            echo "\t\t";
        } else {
            // line 19
            echo "\t\t\t";
            $context["class"] = "col-sm-12";
            // line 20
            echo "\t\t";
        }
        // line 21
        echo "\t\t<div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
\t\t\t";
        // line 22
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
\t\t\t<div class=\"heading-h1\"><h1>";
        // line 23
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1></div>
\t\t\t";
        // line 24
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 25
            echo "\t\t\t\t<div class=\"compare-block ";
            echo (((isset($context["compare_btn_disabled"]) ? $context["compare_btn_disabled"] : null)) ? ("hidden") : (""));
            echo "\">
\t\t\t\t\t<a href=\"";
            // line 26
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" id=\"compare-total\" class=\"compare-block__link\" target=\"_blank\"><i class=\"compare-block__icon fas fa-align-right\"></i>";
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a>
\t\t\t\t</div>
\t\t\t\t<hr />
\t\t\t\t<div class=\"sorts-block\">
\t\t\t\t\t<div class=\"sorts-block__item hidden-xs\">
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t";
            // line 32
            if ((isset($context["show_grid_button"]) ? $context["show_grid_button"] : null)) {
                echo "<button type=\"button\" id=\"grid-view\" class=\"sorts-block__btn btn btn-default\" title=\"";
                echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
                echo "\"><i class=\"fa fa-th-large\"></i></button>";
            }
            // line 33
            echo "\t\t\t\t\t\t\t";
            if ((isset($context["show_list_button"]) ? $context["show_list_button"] : null)) {
                echo "<button type=\"button\" id=\"list-view\" class=\"sorts-block__btn btn btn-default\" title=\"";
                echo (isset($context["button_list"]) ? $context["button_list"] : null);
                echo "\"><i class=\"fa fa-th-list\"></i></button>";
            }
            // line 34
            echo "\t\t\t\t\t\t\t";
            if ((isset($context["show_compact_button"]) ? $context["show_compact_button"] : null)) {
                echo "<button type=\"button\" id=\"compact-view\" class=\"sorts-block__btn btn btn-default hidden-sm\" title=\"";
                echo (isset($context["button_compact"]) ? $context["button_compact"] : null);
                echo "\"><i class=\"fa fa-align-justify\"></i></button>";
            }
            // line 35
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sorts-block__item\">
\t\t\t\t\t\t<select id=\"input-sort\" class=\"sorts-block__select form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 40
                echo "\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 41
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 43
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 45
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select id=\"input-limit\" class=\"sorts-block__select sorts-block__limit form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 49
                echo "\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 50
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 52
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 54
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<hr />
\t\t\t\t<div class=\"products-block row\">
\t\t\t\t\t";
            // line 60
            if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
                // line 61
                echo "\t\t\t\t\t\t";
                $context["class"] = "col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xxl-6-1";
                // line 62
                echo "\t\t\t\t\t";
            } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
                // line 63
                echo "\t\t\t\t\t\t";
                $context["class"] = "col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xxl-5";
                // line 64
                echo "\t\t\t\t\t";
            } else {
                // line 65
                echo "\t\t\t\t\t\t";
                $context["class"] = "col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xxl-4";
                // line 66
                echo "\t\t\t\t\t";
            }
            // line 67
            echo "\t\t\t\t\t";
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
                // line 68
                echo "\t\t\t\t\t\t<div class=\"product-layout product-grid grid-view ";
                echo (isset($context["class"]) ? $context["class"] : null);
                echo "\">
\t\t\t\t\t\t\t<div class=\"product-thumb uni-item\">
\t\t\t\t\t\t\t\t<div class=\"product-thumb__image\" ";
                // line 70
                echo (($this->getAttribute($context["product"], "special_date_end", array())) ? ((("data-special-end=\"" . $this->getAttribute($context["product"], "special_date_end", array())) . "\"")) : (""));
                echo ">
\t\t\t\t\t\t\t\t\t";
                // line 71
                $this->loadTemplate("unishop2/template/extension/module/uni_stickers.twig", "unishop2/template/product/special.twig", 71)->display($context);
                echo "\t
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 72
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 73
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" ";
                echo (($this->getAttribute($context["product"], "additional_image", array())) ? ((("data-additional=\"" . $this->getAttribute($context["product"], "additional_image", array())) . "\"")) : (""));
                echo " alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-thumb__caption\">
\t\t\t\t\t\t\t\t\t<a class=\"product-thumb__name\" href=\"";
                // line 77
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a>
\t\t\t\t\t\t\t\t\t";
                // line 78
                if ($this->getAttribute($context["product"], "show_description", array())) {
                    // line 79
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb__description description\">";
                    echo $this->getAttribute($context["product"], "description", array());
                    echo "</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 81
                echo "\t\t\t\t\t\t\t\t\t";
                $this->loadTemplate("unishop2/template/extension/module/uni_attributes.twig", "unishop2/template/product/special.twig", 81)->display($context);
                // line 82
                echo "\t\t\t\t\t\t\t\t\t";
                $this->loadTemplate("unishop2/template/extension/module/uni_options.twig", "unishop2/template/product/special.twig", 82)->display($context);
                // line 83
                echo "\t\t\t\t\t\t\t\t\t";
                $this->loadTemplate("unishop2/template/extension/module/uni_quantity_indicator.twig", "unishop2/template/product/special.twig", 83)->display($context);
                // line 84
                echo "\t\t\t\t\t\t\t\t\t";
                if ((($this->getAttribute($context["product"], "rating", array()) >= 0) && (isset($context["show_rating"]) ? $context["show_rating"] : null))) {
                    // line 85
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb__rating rating\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 86
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 87
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"";
                        echo ((($this->getAttribute($context["product"], "rating", array()) < $context["i"])) ? ("far fa-star") : ("fa fa-star"));
                        echo "\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 88
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 89
                    if (($this->getAttribute($context["product"], "num_reviews", array()) > 0)) {
                        echo "<sup><a class=\"product-thumb__rating-a uni-href\" data-href=\"";
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "#tab-review\">";
                        echo $this->getAttribute($context["product"], "num_reviews", array());
                        echo "</a></sup>";
                    }
                    // line 90
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 92
                echo "\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 93
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb__price price\" data-price=\"";
                    echo $this->getAttribute($context["product"], "price_value", array());
                    echo "\" data-special=\"";
                    echo $this->getAttribute($context["product"], "special_value", array());
                    echo "\" data-discount=\"";
                    echo $this->getAttribute($context["product"], "discounts", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 94
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 95
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 97
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span> <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> 
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 99
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    // line 100
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        echo "<div class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</div>";
                    }
                    // line 101
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 102
                echo "\t\t\t\t\t\t\t\t\t<div class=\"product-thumb__cart cart ";
                echo $this->getAttribute($context["product"], "cart_btn_class", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t";
                // line 103
                if ($this->getAttribute($context["product"], "show_quantity", array())) {
                    // line 104
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"qty-switch\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"quantity\" value=\"";
                    // line 105
                    echo $this->getAttribute($context["product"], "minimum", array());
                    echo "\" data-minimum=\"";
                    echo $this->getAttribute($context["product"], "minimum", array());
                    echo "\" class=\"qty-switch__input form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"qty-switch__btn fa fa-plus btn-default\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"qty-switch__btn fa fa-minus btn-default\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 112
                echo "\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__add-to-cart add_to_cart btn ";
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
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__quick-order quick-order btn ";
                // line 113
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
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__wishlist wishlist ";
                // line 114
                echo (((isset($context["wishlist_btn_disabled"]) ? $context["wishlist_btn_disabled"] : null)) ? ("hidden") : (""));
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__compare compare ";
                // line 115
                echo (((isset($context["compare_btn_disabled"]) ? $context["compare_btn_disabled"] : null)) ? ("hidden") : (""));
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fas fa-align-right\"></i></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
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
            // line 121
            echo "\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\tuniSelectView.init();

\t\t\t\t\t\t";
            // line 124
            if ((isset($context["show_timer"]) ? $context["show_timer"] : null)) {
                // line 125
                echo "\t\t\t\t\t\t\$('.product-layout .product-thumb__image').each(function() {
\t\t\t\t\t\t\tvar date = \$(this).attr('data-special-end');
\t\t\t
\t\t\t\t\t\t\tif(date) {
\t\t\t\t\t\t\t\t\$(this).uniTimer({
\t\t\t\t\t\t\t\t\tdate   :''+date+'',
\t\t\t\t\t\t\t\t\ttexts   :['";
                // line 131
                echo (isset($context["text_special_day"]) ? $context["text_special_day"] : null);
                echo "','";
                echo (isset($context["text_special_hour"]) ? $context["text_special_hour"] : null);
                echo "','";
                echo (isset($context["text_special_min"]) ? $context["text_special_min"] : null);
                echo "','";
                echo (isset($context["text_special_sec"]) ? $context["text_special_sec"] : null);
                echo "'],
\t\t\t\t\t\t\t\t\thideText :false,
\t\t\t\t\t\t\t\t\thideIsNull:false
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t\t";
            }
            // line 138
            echo "\t\t\t\t\t</script>
\t\t\t\t</div>
\t\t\t\t";
            // line 140
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "
\t\t\t  <div class=\"pagination-text\">";
            // line 141
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
\t\t\t";
        }
        // line 143
        echo "\t\t\t";
        if ( !(isset($context["products"]) ? $context["products"] : null)) {
            // line 144
            echo "\t\t\t\t<p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
\t\t\t";
        }
        // line 146
        echo "\t\t\t<div class=\"cat_desc row\"></div>
\t\t\t";
        // line 147
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t\t</div>
\t\t";
        // line 149
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t</div>
</div>
<script type=\"application/ld+json\">
\t{
\t\t\"@context\": \"http://schema.org\",
\t\t\"@type\": \"BreadcrumbList\",
\t\t\"itemListElement\": [
\t\t";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["i"] => $context["breadcrumb"]) {
            // line 158
            echo "\t\t\t{
\t\t\t\"@type\": \"ListItem\",
\t\t\t\"position\": ";
            // line 160
            echo ($context["i"] + 1);
            echo ",
\t\t\t\"name\": \"";
            // line 161
            echo ((($context["i"] == 0)) ? ((isset($context["shop_name"]) ? $context["shop_name"] : null)) : ($this->getAttribute($context["breadcrumb"], "text", array())));
            echo "\",
\t\t\t\"item\": \"";
            // line 162
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\"
\t\t\t";
            // line 163
            echo (((($context["i"] + 1) < twig_length_filter($this->env, (isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null)))) ? ("},") : ("}"));
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "\t\t]
\t}
</script>
";
        // line 168
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "unishop2/template/product/special.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  567 => 168,  562 => 165,  554 => 163,  550 => 162,  546 => 161,  542 => 160,  538 => 158,  534 => 157,  523 => 149,  518 => 147,  515 => 146,  509 => 144,  506 => 143,  501 => 141,  497 => 140,  493 => 138,  477 => 131,  469 => 125,  467 => 124,  462 => 121,  438 => 115,  430 => 114,  414 => 113,  399 => 112,  387 => 105,  384 => 104,  382 => 103,  377 => 102,  374 => 101,  366 => 100,  363 => 99,  355 => 97,  349 => 95,  347 => 94,  338 => 93,  335 => 92,  331 => 90,  323 => 89,  320 => 88,  311 => 87,  307 => 86,  304 => 85,  301 => 84,  298 => 83,  295 => 82,  292 => 81,  286 => 79,  284 => 78,  278 => 77,  265 => 73,  261 => 72,  257 => 71,  253 => 70,  247 => 68,  229 => 67,  226 => 66,  223 => 65,  220 => 64,  217 => 63,  214 => 62,  211 => 61,  209 => 60,  202 => 55,  196 => 54,  188 => 52,  180 => 50,  177 => 49,  173 => 48,  169 => 46,  163 => 45,  155 => 43,  147 => 41,  144 => 40,  140 => 39,  134 => 35,  127 => 34,  120 => 33,  114 => 32,  103 => 26,  98 => 25,  96 => 24,  92 => 23,  88 => 22,  83 => 21,  80 => 20,  77 => 19,  74 => 18,  71 => 17,  68 => 16,  65 => 15,  63 => 14,  59 => 13,  55 => 11,  49 => 10,  43 => 8,  35 => 6,  32 => 5,  28 => 4,  24 => 3,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container">*/
/* 	<ul class="breadcrumb {{ menu_expanded ? 'col-md-offset-3 col-lg-offset-3 col-xxl-offset-4' }}">*/
/* 		{% for key, breadcrumb in breadcrumbs %}*/
/* 			{% if key + 1 < breadcrumbs|length %}*/
/* 				<li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/* 			{% else %}*/
/* 				<li>{{ breadcrumb.text }}</li>*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 	</ul>*/
/* 	<div class="row">*/
/* 		{{ column_left }}*/
/* 		{% if column_left and column_right %}*/
/* 			{% set class = 'col-sm-4 col-md-6 col-lg-6 col-xxl-12' %}*/
/* 		{% elseif column_left or column_right %}*/
/* 			{% set class = 'col-sm-8 col-md-9 col-lg-9 col-xxl-16' %}*/
/* 		{% else %}*/
/* 			{% set class = 'col-sm-12' %}*/
/* 		{% endif %}*/
/* 		<div id="content" class="{{ class }}">*/
/* 			{{ content_top }}*/
/* 			<div class="heading-h1"><h1>{{ heading_title }}</h1></div>*/
/* 			{% if products %}*/
/* 				<div class="compare-block {{ compare_btn_disabled ? 'hidden' }}">*/
/* 					<a href="{{ compare }}" id="compare-total" class="compare-block__link" target="_blank"><i class="compare-block__icon fas fa-align-right"></i>{{ text_compare }}</a>*/
/* 				</div>*/
/* 				<hr />*/
/* 				<div class="sorts-block">*/
/* 					<div class="sorts-block__item hidden-xs">*/
/* 						<div class="btn-group">*/
/* 							{% if show_grid_button %}<button type="button" id="grid-view" class="sorts-block__btn btn btn-default" title="{{ button_grid }}"><i class="fa fa-th-large"></i></button>{% endif %}*/
/* 							{% if show_list_button %}<button type="button" id="list-view" class="sorts-block__btn btn btn-default" title="{{ button_list }}"><i class="fa fa-th-list"></i></button>{% endif %}*/
/* 							{% if show_compact_button %}<button type="button" id="compact-view" class="sorts-block__btn btn btn-default hidden-sm" title="{{ button_compact }}"><i class="fa fa-align-justify"></i></button>{% endif %}*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="sorts-block__item">*/
/* 						<select id="input-sort" class="sorts-block__select form-control" onchange="location = this.value;">*/
/* 							{% for sorts in sorts %}*/
/* 								{% if sorts.value == '%s-%s'|format(sort, order) %}*/
/* 									<option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/* 								{% else %}*/
/* 									<option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/* 								{% endif %}*/
/* 							{% endfor %}*/
/* 						</select>*/
/* 						<select id="input-limit" class="sorts-block__select sorts-block__limit form-control" onchange="location = this.value;">*/
/* 							{% for limits in limits %}*/
/* 								{% if limits.value == limit %}*/
/* 									<option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/* 								{% else %}*/
/* 									<option value="{{ limits.href }}">{{ limits.text }}</option>*/
/* 								{% endif %}*/
/* 							{% endfor %}*/
/* 						</select>*/
/* 					</div>*/
/* 				</div>*/
/* 				<hr />*/
/* 				<div class="products-block row">*/
/* 					{% if column_left and column_right %}*/
/* 						{% set class = 'col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xxl-6-1' %}*/
/* 					{% elseif column_left or column_right %}*/
/* 						{% set class = 'col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xxl-5' %}*/
/* 					{% else %}*/
/* 						{% set class = 'col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xxl-4' %}*/
/* 					{% endif %}*/
/* 					{% for product in products %}*/
/* 						<div class="product-layout product-grid grid-view {{ class }}">*/
/* 							<div class="product-thumb uni-item">*/
/* 								<div class="product-thumb__image" {{ product.special_date_end ? 'data-special-end="'~product.special_date_end~'"' }}>*/
/* 									{% include 'unishop2/template/extension/module/uni_stickers.twig' %}	*/
/* 									<a href="{{ product.href }}">*/
/* 										<img src="{{ product.thumb }}" {{ product.additional_image ? 'data-additional="'~product.additional_image~'"' }} alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" />*/
/* 									</a>*/
/* 								</div>*/
/* 								<div class="product-thumb__caption">*/
/* 									<a class="product-thumb__name" href="{{ product.href }}">{{ product.name }}</a>*/
/* 									{% if product.show_description %}*/
/* 										<div class="product-thumb__description description">{{ product.description }}</div>*/
/* 									{% endif %}*/
/* 									{% include 'unishop2/template/extension/module/uni_attributes.twig' %}*/
/* 									{% include 'unishop2/template/extension/module/uni_options.twig' %}*/
/* 									{% include 'unishop2/template/extension/module/uni_quantity_indicator.twig' %}*/
/* 									{% if product.rating >= 0 and show_rating %}*/
/* 										<div class="product-thumb__rating rating">*/
/* 											{% for i in 1..5 %}*/
/* 												<i class="{{ product.rating < i ? 'far fa-star' : 'fa fa-star' }}"></i>*/
/* 											{% endfor %} */
/* 											{% if product.num_reviews > 0 %}<sup><a class="product-thumb__rating-a uni-href" data-href="{{ product.href }}#tab-review">{{ product.num_reviews }}</a></sup>{% endif %}*/
/* 										</div>*/
/* 									{% endif %}*/
/* 									{% if product.price %}*/
/* 										<div class="product-thumb__price price" data-price="{{ product.price_value }}" data-special="{{ product.special_value }}" data-discount="{{ product.discounts }}">*/
/* 											{% if not product.special %}*/
/* 												{{ product.price }}*/
/* 											{% else %}*/
/* 												<span class="price-old">{{ product.price }}</span> <span class="price-new">{{ product.special }}</span> */
/* 											{% endif %}*/
/* 										</div>*/
/* 										{% if product.tax %}<div class="price-tax">{{ text_tax }} {{ product.tax }}</div>{% endif %}*/
/* 									{% endif %}*/
/* 									<div class="product-thumb__cart cart {{ product.cart_btn_class }}">*/
/* 										{% if product.show_quantity %}*/
/* 											<div class="qty-switch">*/
/* 												<input type="text" name="quantity" value="{{ product.minimum }}" data-minimum="{{ product.minimum }}" class="qty-switch__input form-control" />*/
/* 												<div>*/
/* 													<i class="qty-switch__btn fa fa-plus btn-default"></i>*/
/* 													<i class="qty-switch__btn fa fa-minus btn-default"></i>*/
/* 												</div>*/
/* 											</div>*/
/* 										{% endif %}*/
/* 										<button type="button" class="product-thumb__add-to-cart add_to_cart btn {{ product.cart_btn_class }}" title="{{ product.cart_btn_text }}" data-pid="{{ product.product_id }}" onclick="cart.add({{ product.product_id }}, this)"><i class="{{ product.cart_btn_icon }}"></i><span class="hidden-sm hidden-md">{{ product.cart_btn_text }}</span></button>*/
/* 										<button type="button" class="product-thumb__quick-order quick-order btn {{ product.quick_order is empty ? 'hidden' }}" data-toggle="tooltip" title="{{ quick_order_title }}" onclick="quick_order('{{ product.product_id }}');"><i class="{{ quick_order_icon }}"></i>{% if show_quick_order_text %}<span class="hidden-xs hidden-sm">{{ quick_order_title }}</span>{% endif %}</button>*/
/* 										<button type="button" class="product-thumb__wishlist wishlist {{ wishlist_btn_disabled ? 'hidden' }}" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/* 										<button type="button" class="product-thumb__compare compare {{ compare_btn_disabled ? 'hidden' }}" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fas fa-align-right"></i></button>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					{% endfor %}*/
/* 					<script type="text/javascript">*/
/* 						uniSelectView.init();*/
/* */
/* 						{% if show_timer %}*/
/* 						$('.product-layout .product-thumb__image').each(function() {*/
/* 							var date = $(this).attr('data-special-end');*/
/* 			*/
/* 							if(date) {*/
/* 								$(this).uniTimer({*/
/* 									date   :''+date+'',*/
/* 									texts   :['{{ text_special_day }}','{{ text_special_hour }}','{{ text_special_min }}','{{ text_special_sec }}'],*/
/* 									hideText :false,*/
/* 									hideIsNull:false*/
/* 								});*/
/* 							}*/
/* 						});*/
/* 						{% endif %}*/
/* 					</script>*/
/* 				</div>*/
/* 				{{ pagination }}*/
/* 			  <div class="pagination-text">{{ results }}</div>*/
/* 			{% endif %}*/
/* 			{% if not products %}*/
/* 				<p>{{ text_empty }}</p>*/
/* 			{% endif %}*/
/* 			<div class="cat_desc row"></div>*/
/* 			{{ content_bottom }}*/
/* 		</div>*/
/* 		{{ column_right }}*/
/* 	</div>*/
/* </div>*/
/* <script type="application/ld+json">*/
/* 	{*/
/* 		"@context": "http://schema.org",*/
/* 		"@type": "BreadcrumbList",*/
/* 		"itemListElement": [*/
/* 		{% for i, breadcrumb in breadcrumbs %}*/
/* 			{*/
/* 			"@type": "ListItem",*/
/* 			"position": {{ i+1 }},*/
/* 			"name": "{{ i == 0 ? shop_name: breadcrumb.text }}",*/
/* 			"item": "{{ breadcrumb.href }}"*/
/* 			{{ i + 1 < breadcrumbs|length ? '},' : '}' }}*/
/* 		{% endfor %}*/
/* 		]*/
/* 	}*/
/* </script>*/
/* {{ footer }}*/
