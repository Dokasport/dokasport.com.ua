<?php

/* unishop2/template/product/product.twig */
class __TwigTemplate_540ddd9955dd715c5eaa7830963ad7bda0a9b71856c54a57d029c6231a5dfbd5 extends Twig_Template
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
<div id=\"product\" class=\"container\">
\t<ul class=\"breadcrumb mobile ";
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
                echo "\t\t\t\t";
                if (( !(isset($context["hide_last_breadcrumb"]) ? $context["hide_last_breadcrumb"] : null) || ((isset($context["hide_last_breadcrumb"]) ? $context["hide_last_breadcrumb"] : null) && ($context["key"] == 1)))) {
                    echo "<li>";
                    echo $this->getAttribute($context["breadcrumb"], "text", array());
                    echo "</li>";
                }
                // line 9
                echo "\t\t\t";
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
        // line 14
        echo "\t\t";
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
        echo "\t\t";
        $context["class"] = "col-sm-12";
        // line 22
        echo "\t\t<div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
\t\t\t";
        // line 23
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
\t\t\t<div class=\"heading-h1\"><h1>";
        // line 24
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1></div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"product-page ";
        // line 26
        echo ((((isset($context["product_banners"]) ? $context["product_banners"] : null) && ((isset($context["product_banner_position"]) ? $context["product_banner_position"] : null) == 1))) ? ("col-sm-12 col-md-12 col-lg-10") : ("col-xs-12"));
        echo "\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"product-page__image col-sm-6\">
\t\t\t\t\t\t\t";
        // line 29
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["images"]) ? $context["images"] : null))) {
            // line 30
            echo "\t\t\t\t\t\t\t\t";
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 31
                echo "\t\t\t\t\t\t\t\t\t<div class=\"product-page__image-main uni-item\">
\t\t\t\t\t\t\t\t\t\t";
                // line 32
                $this->loadTemplate("unishop2/template/extension/module/uni_stickers.twig", "unishop2/template/product/product.twig", 32)->display($context);
                // line 33
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-page__image-main-carousel\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"product-page__image-main-a\" href=\"";
                // line 34
                echo (isset($context["popup"]) ? $context["popup"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 35
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" class=\"img-responsive\" height=\"";
                echo (isset($context["thumb_height"]) ? $context["thumb_height"] : null);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 37
                if ((isset($context["images"]) ? $context["images"] : null)) {
                    // line 38
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 39
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"product-page__image-main-a\" href=\"";
                        echo $this->getAttribute($context["image"], "popup", array());
                        echo "\" title=\"";
                        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"data:image/gif;base64,R0lGODlhAQABAIABAP///wAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        // line 40
                        echo $this->getAttribute($context["image"], "small", array());
                        echo "\" alt=\"";
                        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                        echo "\" class=\"img-responsive owl-lazy\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 44
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                // line 45
                if ( !(isset($context["wishlist_btn_disabled"]) ? $context["wishlist_btn_disabled"] : null)) {
                    // line 46
                    echo "\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "\" onclick=\"wishlist.add(";
                    echo (isset($context["product_id"]) ? $context["product_id"] : null);
                    echo ");\" class=\"product-page__wishlist-btn wishlist\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 48
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ( !(isset($context["compare_btn_disabled"]) ? $context["compare_btn_disabled"] : null)) {
                    // line 49
                    echo "\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "\" onclick=\"compare.add(";
                    echo (isset($context["product_id"]) ? $context["product_id"] : null);
                    echo ");\" class=\"product-page__compare-btn compare\"><i class=\"fas fa-align-right\"></i></button>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 51
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 53
            echo "\t\t\t\t\t\t\t\t";
            if ((isset($context["images"]) ? $context["images"] : null)) {
                // line 54
                echo "\t\t\t\t\t\t\t\t\t<div class=\"product-page__image-addit owl-carousel\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 55
                echo (isset($context["small"]) ? $context["small"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" class=\"product-page__image-addit-img selected img-responsive\" data-thumb=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" data-full=\"";
                echo (isset($context["popup"]) ? $context["popup"] : null);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t";
                // line 56
                if ((isset($context["images"]) ? $context["images"] : null)) {
                    // line 57
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 58
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"data:image/gif;base64,R0lGODlhAQABAIABAP///wAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==\" data-src=\"";
                        echo $this->getAttribute($context["image"], "thumb", array());
                        echo "\" alt=\"";
                        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                        echo "\" class=\"product-page__image-addit-img img-responsive owl-lazy\" data-thumb=\"";
                        echo $this->getAttribute($context["image"], "small", array());
                        echo "\" data-full=\"";
                        echo $this->getAttribute($context["image"], "popup", array());
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 60
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                // line 61
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 63
            echo "\t\t\t\t\t\t\t";
        }
        // line 64
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6 product-block\">
\t\t\t\t\t\t\t<div class=\"product-data\">
\t\t\t\t\t\t\t\t";
        // line 67
        if ((isset($context["show_model"]) ? $context["show_model"] : null)) {
            // line 68
            echo "\t\t\t\t\t\t\t\t\t<div class=\"product-data__item model\"><div class=\"product-data__item-div\"><span class=\"product-data__item-span\">";
            echo (isset($context["text_model"]) ? $context["text_model"] : null);
            echo "</span></div> ";
            echo (isset($context["model"]) ? $context["model"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 70
        echo "\t\t\t\t\t\t\t\t";
        if ((isset($context["sku"]) ? $context["sku"] : null)) {
            // line 71
            echo "\t\t\t\t\t\t\t\t\t<div class=\"product-data__item sku\"><div class=\"product-data__item-div\"><span class=\"product-data__item-span\">";
            echo (isset($context["text_sku"]) ? $context["text_sku"] : null);
            echo ":</span></div> ";
            echo (isset($context["sku"]) ? $context["sku"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 73
        echo "\t\t\t\t\t\t\t\t";
        if (((isset($context["show_manuf"]) ? $context["show_manuf"] : null) && (isset($context["manufacturer"]) ? $context["manufacturer"] : null))) {
            // line 74
            echo "\t\t\t\t\t\t\t\t\t<div class=\"product-data__item manufacturer\"><div class=\"product-data__item-div\"><span class=\"product-data__item-span\">";
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo "</span></div><a href=\"";
            echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
            echo "\">";
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo "</a></div>
\t\t\t\t\t\t\t\t";
        }
        // line 76
        echo "\t\t\t\t\t\t\t\t";
        if ((isset($context["location"]) ? $context["location"] : null)) {
            // line 77
            echo "\t\t\t\t\t\t\t\t\t<div class=\"product-data__item location\"><div class=\"product-data__item-div\"><span class=\"product-data__item-span\">";
            echo (isset($context["text_location"]) ? $context["text_location"] : null);
            echo ":</span></div> ";
            echo (isset($context["location"]) ? $context["location"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 79
        echo "\t\t\t\t\t\t\t\t";
        if ((((isset($context["reward"]) ? $context["reward"] : null) && ((isset($context["show_reward"]) ? $context["show_reward"] : null) == 1)) || ((isset($context["show_reward"]) ? $context["show_reward"] : null) == 3))) {
            // line 80
            echo "\t\t\t\t\t\t\t\t\t<div class=\"product-data__item reward\"><div class=\"product-data__item-div\"><span class=\"product-data__item-span\">";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo "</span></div> ";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 82
        echo "\t\t\t\t\t\t\t\t";
        if ((((isset($context["points"]) ? $context["points"] : null) && ((isset($context["show_reward"]) ? $context["show_reward"] : null) == 2)) || ((isset($context["show_reward"]) ? $context["show_reward"] : null) == 3))) {
            // line 83
            echo "\t\t\t\t\t\t\t\t\t<div class=\"product-data__item points\"><div class=\"product-data__item-div\"><span class=\"product-data__item-span\">";
            echo (isset($context["text_points"]) ? $context["text_points"] : null);
            echo "</span></div> ";
            echo (isset($context["points"]) ? $context["points"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 85
        echo "\t\t\t\t\t\t\t\t";
        if ((isset($context["upc"]) ? $context["upc"] : null)) {
            // line 86
            echo "\t\t\t\t\t\t\t\t\t<div class=\"product-data__item upc\"><div class=\"product-data__item-div\"><span class=\"product-data__item-span\">";
            echo (isset($context["text_upc"]) ? $context["text_upc"] : null);
            echo ":</span></div> ";
            echo (isset($context["upc"]) ? $context["upc"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 88
        echo "\t\t\t\t\t\t\t\t";
        if ((isset($context["ean"]) ? $context["ean"] : null)) {
            // line 89
            echo "\t\t\t\t\t\t\t\t\t<div class=\"product-data__item ean\"><div class=\"product-data__item-div\"><span class=\"product-data__item-span\">";
            echo (isset($context["text_ean"]) ? $context["text_ean"] : null);
            echo ":</span></div> ";
            echo (isset($context["ean"]) ? $context["ean"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 91
        echo "\t\t\t\t\t\t\t\t";
        if ((isset($context["jan"]) ? $context["jan"] : null)) {
            // line 92
            echo "\t\t\t\t\t\t\t\t\t<div class=\"product-data__item jan\"><div class=\"product-data__item-div\"><span class=\"product-data__item-span\">";
            echo (isset($context["text_jan"]) ? $context["text_jan"] : null);
            echo ":</span></div> ";
            echo (isset($context["jan"]) ? $context["jan"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 94
        echo "\t\t\t\t\t\t\t\t";
        if ((isset($context["isbn"]) ? $context["isbn"] : null)) {
            // line 95
            echo "\t\t\t\t\t\t\t\t\t<div class=\"product-data__item isbn\"><div class=\"product-data__item-div\"><span class=\"product-data__item-span\">";
            echo (isset($context["text_isbn"]) ? $context["text_isbn"] : null);
            echo ":</span></div> ";
            echo (isset($context["isbn"]) ? $context["isbn"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 97
        echo "\t\t\t\t\t\t\t\t";
        if ((isset($context["mpn"]) ? $context["mpn"] : null)) {
            // line 98
            echo "\t\t\t\t\t\t\t\t\t<div class=\"product-data__item mpn\"><div class=\"product-data__item-div\"><span class=\"product-data__item-span\">";
            echo (isset($context["text_mpn"]) ? $context["text_mpn"] : null);
            echo ":</span></div> ";
            echo (isset($context["mpn"]) ? $context["mpn"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 100
        echo "\t\t\t\t\t\t\t\t";
        if ( !$this->getAttribute((isset($context["product"]) ? $context["product"] : null), "quantity_indicator", array())) {
            // line 101
            echo "\t\t\t\t\t\t\t\t\t<div class=\"product-data__item stock\"><div class=\"product-data__item-div\"><span class=\"product-data__item-span\">";
            echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
            echo "</span></div> ";
            echo (isset($context["stock"]) ? $context["stock"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t";
        }
        // line 103
        echo "\t\t\t\t\t\t\t\t";
        if (((isset($context["show_length"]) ? $context["show_length"] : null) == 1)) {
            // line 104
            echo "\t\t\t\t\t\t\t\t\t";
            if ((isset($context["length"]) ? $context["length"] : null)) {
                echo "<div class=\"product-data__item length\"><div class=\"product-data__item-div\"><span class=\"product-data__item-span\">";
                echo (isset($context["text_length"]) ? $context["text_length"] : null);
                echo "</span></div> ";
                echo (isset($context["length"]) ? $context["length"] : null);
                echo "</div>";
            }
            // line 105
            echo "\t\t\t\t\t\t\t\t\t";
            if ((isset($context["weight"]) ? $context["weight"] : null)) {
                echo "<div class=\"product-data__item weight\"><div class=\"product-data__item-div\"><span class=\"product-data__item-span\">";
                echo (isset($context["text_weight"]) ? $context["text_weight"] : null);
                echo "</span></div> ";
                echo (isset($context["weight"]) ? $context["weight"] : null);
                echo "</div>";
            }
            // line 106
            echo "\t\t\t\t\t\t\t\t";
        }
        // line 107
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 108
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "quantity_indicator", array())) {
            // line 109
            echo "\t\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t\t";
            // line 110
            $this->loadTemplate("unishop2/template/extension/module/uni_quantity_indicator.twig", "unishop2/template/product/product.twig", 110)->display($context);
            // line 111
            echo "\t\t\t\t\t\t\t";
        }
        // line 112
        echo "\t\t\t\t\t\t\t";
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "show_timer", array())) {
            // line 113
            echo "\t\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t\t<div class=\"product-page__timer\">
\t\t\t\t\t\t\t\t\t<div class=\"product-page__timer-heading\">";
            // line 115
            echo (isset($context["text_special_timer"]) ? $context["text_special_timer"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 118
        echo "\t\t\t\t\t\t\t";
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 119
            echo "\t\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t\t<div class=\"product-page__price price\" data-price=\"";
            // line 120
            echo (isset($context["price_value"]) ? $context["price_value"] : null);
            echo "\" data-special=\"";
            echo (isset($context["special_value"]) ? $context["special_value"] : null);
            echo "\" data-discount=\"";
            echo (isset($context["discounts_value"]) ? $context["discounts_value"] : null);
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 121
            if ((isset($context["special"]) ? $context["special"] : null)) {
                // line 122
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</span><span class=\"price-new\">";
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "</span>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 124
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "
\t\t\t\t\t\t\t\t\t";
            }
            // line 126
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 127
            if ((isset($context["discounts"]) ? $context["discounts"] : null)) {
                // line 128
                echo "\t\t\t\t\t\t\t\t\t<!-- <h5 class=\"heading\"><span>";
                echo (isset($context["text_new_discount"]) ? $context["text_new_discount"] : null);
                echo "</span></h5> -->
\t\t\t\t\t\t\t\t\t<div class=\"product-page__discount\">
\t\t\t\t\t\t\t\t\t\t";
                // line 130
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 131
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-page__discount-item\">";
                    echo $this->getAttribute($context["discount"], "quantity", array());
                    echo " ";
                    echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                    echo " - ";
                    echo $this->getAttribute($context["discount"], "price", array());
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 135
            echo "\t\t\t\t\t\t\t\t";
            if ((isset($context["tax"]) ? $context["tax"] : null)) {
                echo "<div class=\"price-tax\">";
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo " ";
                echo (isset($context["tax"]) ? $context["tax"] : null);
                echo "</div>";
            }
            // line 136
            echo "\t\t\t\t\t\t\t";
        }
        // line 137
        echo "\t\t\t\t\t\t\t";
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 138
            echo "\t\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t\t<div class=\"product-page__option option row\">
\t\t\t\t\t\t\t\t\t";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 141
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 142
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                    echo (($this->getAttribute($context["option"], "required", array())) ? ("required") : (""));
                    echo " option__group col-md-6\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"option__group-name\" for=\"input-option";
                    // line 143
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo (($this->getAttribute($context["option"], "required", array())) ? ("*") : (""));
                    echo " ";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"option[";
                    // line 144
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"option__select form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 145
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 146
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 147
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" data-prefix=\"";
                        echo $this->getAttribute($context["option_value"], "price_prefix", array());
                        echo "\" data-price=\"";
                        echo $this->getAttribute($context["option_value"], "price_value", array());
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 148
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo " ";
                        echo (($this->getAttribute($context["option_value"], "price", array())) ? ((((("(" . $this->getAttribute($context["option_value"], "price_prefix", array())) . "") . $this->getAttribute($context["option_value"], "price", array())) . ")")) : (""));
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 151
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 154
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 155
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                    echo (($this->getAttribute($context["option"], "required", array())) ? ("required") : (""));
                    echo " option__group col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"option__group-name\">";
                    // line 156
                    echo (($this->getAttribute($context["option"], "required", array())) ? ("*") : (""));
                    echo " ";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"input-option";
                    // line 157
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 158
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 159
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"option__item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"option[";
                        // line 160
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" data-prefix=\"";
                        echo $this->getAttribute($context["option_value"], "price_prefix", array());
                        echo "\" data-price=\"";
                        echo $this->getAttribute($context["option_value"], "price_value", array());
                        echo "\" class=\"hidden\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 161
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            // line 162
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            echo (($this->getAttribute($context["option_value"], "price", array())) ? ((($this->getAttribute($context["option_value"], "price_prefix", array()) . "") . $this->getAttribute($context["option_value"], "price", array()))) : (""));
                            echo "\" data-type=\"product\" data-thumb=\"";
                            echo $this->getAttribute($context["option_value"], "small", array());
                            echo "\" data-full=\"";
                            echo $this->getAttribute($context["option_value"], "full", array());
                            echo "\" class=\"option__img\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 164
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"option__name\" ";
                            echo (($this->getAttribute($context["option_value"], "price", array())) ? ((((("data-toggle=\"tooltip\" title=\"" . $this->getAttribute($context["option_value"], "price_prefix", array())) . " ") . $this->getAttribute($context["option_value"], "price", array())) . "\"")) : (""));
                            echo ">";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 166
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 168
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 172
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 173
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"";
                    echo (($this->getAttribute($context["option"], "required", array())) ? ("required") : (""));
                    echo " option__group col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"option__group-name\">";
                    // line 174
                    echo (($this->getAttribute($context["option"], "required", array())) ? ("*") : (""));
                    echo " ";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ":</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"input-option";
                    // line 175
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 176
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 177
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"option__item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"option[";
                        // line 178
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" data-prefix=\"";
                        echo $this->getAttribute($context["option_value"], "price_prefix", array());
                        echo "\" data-price=\"";
                        echo $this->getAttribute($context["option_value"], "price_value", array());
                        echo "\" class=\"hidden\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 179
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            // line 180
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            echo (($this->getAttribute($context["option_value"], "price", array())) ? ((($this->getAttribute($context["option_value"], "price_prefix", array()) . "") . $this->getAttribute($context["option_value"], "price", array()))) : (""));
                            echo "\" data-type=\"product\" data-thumb=\"";
                            echo $this->getAttribute($context["option_value"], "small", array());
                            echo "\" data-full=\"";
                            echo $this->getAttribute($context["option_value"], "full", array());
                            echo "\" class=\"option__img\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 182
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- <span class=\"option__name\">";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            echo (($this->getAttribute($context["option_value"], "price", array())) ? ((((("(" . $this->getAttribute($context["option_value"], "price_prefix", array())) . "") . $this->getAttribute($context["option_value"], "price", array())) . ")")) : (""));
                            echo "</span> -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"option__name\" ";
                            // line 183
                            echo (($this->getAttribute($context["option_value"], "price", array())) ? ((((("data-toggle=\"tooltip\" title=\"" . $this->getAttribute($context["option_value"], "price_prefix", array())) . " ") . $this->getAttribute($context["option_value"], "price", array())) . "\"")) : (""));
                            echo ">";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 185
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 187
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 190
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 191
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group ";
                    echo (($this->getAttribute($context["option"], "required", array())) ? ("required") : (""));
                    echo " col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"option__group-name\" for=\"input-option";
                    // line 192
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo (($this->getAttribute($context["option"], "required", array())) ? ("*") : (""));
                    echo " ";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 193
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 196
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 197
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group ";
                    echo (($this->getAttribute($context["option"], "required", array())) ? ("required") : (""));
                    echo " col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"option__group-name\" for=\"input-option";
                    // line 198
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo (($this->getAttribute($context["option"], "required", array())) ? ("*") : (""));
                    echo " ";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"option[";
                    // line 199
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 202
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 203
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group ";
                    echo (($this->getAttribute($context["option"], "required", array())) ? ("required") : (""));
                    echo " col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"option__group-name\">";
                    // line 204
                    echo (($this->getAttribute($context["option"], "required", array())) ? ("*") : (""));
                    echo " ";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-upload";
                    // line 205
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"option[";
                    // line 206
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 209
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 210
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group ";
                    echo (($this->getAttribute($context["option"], "required", array())) ? ("required") : (""));
                    echo " col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"option__group-name\" for=\"input-option";
                    // line 211
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo (($this->getAttribute($context["option"], "required", array())) ? ("*") : (""));
                    echo " ";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 213
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" data-locale=\"";
                    echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\"><button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button></span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 218
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 219
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group ";
                    echo (($this->getAttribute($context["option"], "required", array())) ? ("required") : (""));
                    echo " col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"option__group-name\" for=\"input-option";
                    // line 220
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo (($this->getAttribute($context["option"], "required", array())) ? ("*") : (""));
                    echo " ";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group datetime\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 222
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" data-locale=\"";
                    echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 227
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 228
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group ";
                    echo (($this->getAttribute($context["option"], "required", array())) ? ("required") : (""));
                    echo " col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"option__group-name\" for=\"input-option";
                    // line 229
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo (($this->getAttribute($context["option"], "required", array())) ? ("*") : (""));
                    echo " ";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"option[";
                    // line 231
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 236
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 237
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 239
        echo "\t\t\t\t\t\t\t";
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 240
            echo "\t\t\t\t\t\t\t\t<hr style=\"margin-top:0\" />
\t\t\t\t\t\t\t\t<div class=\"product-page__cart\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product_id\" value=\"";
            // line 242
            echo (isset($context["product_id"]) ? $context["product_id"] : null);
            echo "\" />
\t\t\t\t\t\t\t\t\t<div class=\"qty-switch\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"quantity\" value=\"";
            // line 244
            echo (isset($context["minimum"]) ? $context["minimum"] : null);
            echo "\" data-minimum=\"";
            echo (isset($context["minimum"]) ? $context["minimum"] : null);
            echo "\" id=\"input-quantity\" class=\"qty-switch__input form-control\" />
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"qty-switch__btn fa fa-plus btn-default\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"qty-switch__btn fa fa-minus btn-default\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"product-page__add-to-cart add_to_cart btn btn-lg ";
            // line 250
            echo (isset($context["cart_btn_class"]) ? $context["cart_btn_class"] : null);
            echo "\" data-pid=\"";
            echo (isset($context["product_id"]) ? $context["product_id"] : null);
            echo "\" id=\"button-cart\"><i class=\"";
            echo (isset($context["cart_btn_icon"]) ? $context["cart_btn_icon"] : null);
            echo "\"></i><span>";
            echo (isset($context["cart_btn_text"]) ? $context["cart_btn_text"] : null);
            echo "</span></button>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"product-page__quick-order quick-order btn btn-lg ";
            // line 251
            echo ((twig_test_empty((isset($context["quick_order"]) ? $context["quick_order"] : null))) ? ("hidden") : (""));
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["quick_order_title"]) ? $context["quick_order_title"] : null);
            echo "\" onclick=\"quick_order('";
            echo (isset($context["product_id"]) ? $context["product_id"] : null);
            echo "');\"><i class=\"";
            echo (isset($context["quick_order_icon"]) ? $context["quick_order_icon"] : null);
            echo "\"></i>";
            if ((isset($context["show_quick_order_text_product"]) ? $context["show_quick_order_text_product"] : null)) {
                echo "<span class=\"hidden-xs hidden-sm\">";
                echo (isset($context["quick_order_title"]) ? $context["quick_order_title"] : null);
                echo "</span>";
            }
            echo "</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 253
            if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
                echo "<div class=\"product-page__minimum\"><i class=\"fa fa-info-circle\"></i> ";
                echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
                echo "</div>";
            }
            // line 254
            echo "\t\t\t\t\t\t\t\t<hr style=\"margin-bottom:15px\" />
\t\t\t\t\t\t\t";
        }
        // line 256
        echo "\t\t\t\t\t\t\t";
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 257
            echo "\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<h3>";
            // line 258
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t<select name=\"recurring_id\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
            // line 261
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            // line 262
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 263
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["recurring"], "recurring_id", array());
                echo "\">";
                echo $this->getAttribute($context["recurring"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 265
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<div class=\"help-block\" id=\"recurring-description\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 269
        echo "\t\t\t\t\t\t\t";
        if (((isset($context["show_attr"]) ? $context["show_attr"] : null) && (isset($context["attribute_groups"]) ? $context["attribute_groups"] : null))) {
            // line 270
            echo "\t\t\t\t\t\t\t\t<div class=\"product-data\">
\t\t\t\t\t\t\t\t\t";
            // line 271
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["attribute_group"]) {
                // line 272
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($context["key"] < (isset($context["show_attr_group"]) ? $context["show_attr_group"] : null))) {
                    // line 273
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                    foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                        // line 274
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (($context["key"] < (isset($context["show_attr_item"]) ? $context["show_attr_item"] : null))) {
                            // line 275
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product-data__item\"><div class=\"product-data__item-div\"><span class=\"product-data__item-span\">";
                            echo $this->getAttribute($context["attribute"], "name", array());
                            echo "</span></div> ";
                            echo $this->getAttribute($context["attribute"], "text", array());
                            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 277
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "\t
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 279
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a class=\"product-page__more-attr\" onclick=\"\$('a[href=\\'#tab-specification\\']').click(); scroll_to('#tab-specification'); return false;\">";
            // line 281
            echo (isset($context["text_all_attributes"]) ? $context["text_all_attributes"] : null);
            echo "</a>
\t\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t";
        }
        // line 284
        echo "\t\t\t\t\t\t\t";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 285
            echo "\t\t\t\t\t\t\t\t<div class=\"product-page__rating rating\">
\t\t\t\t\t\t\t\t\t";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 287
                echo "\t\t\t\t\t\t\t\t\t\t<i class=\"";
                echo ((((isset($context["rating"]) ? $context["rating"] : null) < $context["i"])) ? ("far") : ("fa"));
                echo " fa-star\"></i>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 288
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t&nbsp;&nbsp;<a onclick=\"\$('a[href=\\'#tab-review\\']').click(); scroll_to('#tab-review'); return false;\" class=\"product-page__rating-a\">";
            // line 289
            echo (isset($context["reviews"]) ? $context["reviews"] : null);
            echo "</a>
\t\t\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 293
        echo "\t\t\t\t\t\t\t";
        if ((isset($context["socialbutton"]) ? $context["socialbutton"] : null)) {
            // line 294
            echo "\t\t\t\t\t\t\t\t<div class=\"product-page__share\">
\t\t\t\t\t\t\t\t\t<div id=\"goodshare\" data-socials=\"";
            // line 295
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["socialbutton"]) ? $context["socialbutton"] : null));
            foreach ($context['_seq'] as $context["i"] => $context["social"]) {
                echo $context["social"];
                echo (((($context["i"] + 1) < twig_length_filter($this->env, (isset($context["socialbutton"]) ? $context["socialbutton"] : null)))) ? (",") : (""));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['social'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 298
        echo "\t\t\t\t\t\t\t";
        if (((isset($context["product_banners"]) ? $context["product_banners"] : null) && ((isset($context["product_banner_position"]) ? $context["product_banner_position"] : null) == 2))) {
            // line 299
            echo "\t\t\t\t\t\t\t\t";
            $this->loadTemplate("unishop2/template/extension/module/uni_product_banner.twig", "unishop2/template/product/product.twig", 299)->display($context);
            // line 300
            echo "\t\t\t\t\t\t\t";
        }
        // line 301
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 304
        if (((isset($context["product_banners"]) ? $context["product_banners"] : null) && ((isset($context["product_banner_position"]) ? $context["product_banner_position"] : null) == 1))) {
            // line 305
            echo "\t\t\t\t\t<div class=\"col-sm-12 col-md-12 col-lg-2\">
\t\t\t\t\t\t";
            // line 306
            $this->loadTemplate("unishop2/template/extension/module/uni_product_banner.twig", "unishop2/template/product/product.twig", 306)->display($context);
            // line 307
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 309
        echo "\t\t\t</div>
\t\t\t";
        // line 310
        if (((isset($context["product_banners"]) ? $context["product_banners"] : null) && ((isset($context["product_banner_position"]) ? $context["product_banner_position"] : null) == 3))) {
            // line 311
            echo "\t\t\t\t";
            $this->loadTemplate("unishop2/template/extension/module/uni_product_banner.twig", "unishop2/template/product/product.twig", 311)->display($context);
            // line 312
            echo "\t\t\t";
        }
        // line 313
        echo "\t\t\t";
        if (((isset($context["manufacturer_descr"]) ? $context["manufacturer_descr"] : null) && (isset($context["manufacturer_position"]) ? $context["manufacturer_position"] : null))) {
            // line 314
            echo "\t\t\t\t<div class=\"product-manuf\">
\t\t\t\t\t";
            // line 315
            if ($this->getAttribute((isset($context["manufacturer_descr"]) ? $context["manufacturer_descr"] : null), "image", array())) {
                // line 316
                echo "\t\t\t\t\t\t<div class=\"product-manuf__image\">
\t\t\t\t\t\t\t<img src=\"";
                // line 317
                echo $this->getAttribute((isset($context["manufacturer_descr"]) ? $context["manufacturer_descr"] : null), "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute((isset($context["manufacturer_descr"]) ? $context["manufacturer_descr"] : null), "name", array());
                echo "\" class=\"img-responsive\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 320
            echo "\t\t\t\t\t\t<h4 class=\"product-manuf__name\">";
            echo $this->getAttribute((isset($context["manufacturer_descr"]) ? $context["manufacturer_descr"] : null), "name", array());
            echo "</h4>
\t\t\t\t\t\t";
            // line 321
            echo $this->getAttribute((isset($context["manufacturer_descr"]) ? $context["manufacturer_descr"] : null), "description", array());
            echo "... <a href=\"";
            echo $this->getAttribute((isset($context["manufacturer_descr"]) ? $context["manufacturer_descr"] : null), "href", array());
            echo "\" title=\"\" >";
            echo (isset($context["text_manufacturer_more"]) ? $context["text_manufacturer_more"] : null);
            echo "</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t";
        }
        // line 325
        echo "\t\t\t
\t\t\t<script>
\t\t\t\tlet img_array = [], 
\t\t\t\t\telemA = '.product-page__image-main-a', 
\t\t\t\t\telemImg = '.product-page__image-main-a img',
\t\t\t\t\telemAddit = '.product-page__image-addit',
\t\t\t\t\telemAdditImg = '.product-page__image-addit-img',
\t\t\t\t\telemMain = '.product-page__image-main-carousel',
\t\t\t\t\toptions_img;
\t\t\t\t\t
\t\t\t\tfunction productPageCarousel() {\t\t\t\t
\t\t\t\t\tif(\$(elemAddit).length) {
\t\t\t\t\t\t\$(elemMain).addClass('owl-carousel').owlCarousel({
\t\t\t\t\t\t\titems:1,
\t\t\t\t\t\t\tdots:false,
\t\t\t\t\t\t\tlazyLoad:true,
\t\t\t\t\t\t\tmouseDrag:false,
\t\t\t\t\t\t\tonDragged: function (event) {
\t\t\t\t\t\t\t\t\$(elemAddit).trigger('to.owl.carousel', [event.item.index]);
\t\t\t\t\t\t\t\timgDataReplace(event.item.index);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t
\t\t\t\t\t\t\$(elemAddit).owlCarousel({
\t\t\t\t\t\t\tresponsive:{0:{items:4}, 1050:{items:6 }},
\t\t\t\t\t\t\tresponsiveBaseElement:\$(this),
\t\t\t\t\t\t\tdots:false,
\t\t\t\t\t\t\tlazyLoad:true,
\t\t\t\t\t\t\tlazyLoadEager:1,
\t\t\t\t\t\t\tmouseDrag:false,
\t\t\t\t\t\t\tloop:false,
\t\t\t\t\t\t\tnav:true,
\t\t\t\t\t\t\tnavText: ['<i class=\"fa fa-chevron-left\"></i>', '<i class=\"fa fa-chevron-right\"></i>'],
\t\t\t\t\t\t\tonRefreshed: function(event) {
\t\t\t\t\t\t\t\t//if(\$('.product-page__option .option__img').length) {
\t\t\t\t\t\t\t\tif (typeof(getPoipProduct) === 'function') {
\t\t\t\t\t\t\t\t\tlet html = '';
\t\t\t\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\t\t\t\$(elemAdditImg).each(function() {
\t\t\t\t\t\t\t\t\t\t\thtml += '<a class=\"product-page__image-main-a\" href=\"'+\$(this).data('full')+'\" title=\"'+\$(this).attr('alt')+'\">';
\t\t\t\t\t\t\t\t\t\t\thtml += '<img src=\"'+\$(this).data('thumb')+'\" alt=\"'+\$(this).attr('alt')+'\" class=\"img-responsive\">';
\t\t\t\t\t\t\t\t\t\t\thtml += '</a>';
\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\$(elemMain).trigger('replace.owl.carousel', html).trigger('refresh.owl.carousel').trigger('to.owl.carousel', [0, 250]);
\t\t\t\t\t\t\t\t\t}, 200);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t
\t\t\t\t\t\t\$('html body').on('click mouseover', elemAdditImg, function() {
\t\t\t\t\t\t\t\$(elemMain).trigger('to.owl.carousel', [\$(this).parent().index(), 250]);
\t\t\t\t\t\t\timgDataReplace(\$(this).parent().index())
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t
\t\t\t\tproductPageCarousel();
\t\t\t\t
\t\t\t\tlet observer = new MutationObserver(function(e) {
\t\t\t\t\tproductPageCarousel();
\t\t\t\t});

\t\t\t\tobserver.observe(\$('.product-page__image')[0], {childList:true});
\t\t\t\t
\t\t\t\tfunction imgDataReplace(indx) {
\t\t\t\t\tlet el = \$(elemAddit).find('.owl-item:eq('+indx+') img');
\t\t\t\t\t\t
\t\t\t\t\t\$(elemAdditImg).addClass('selected').not(el).removeClass('selected');
\t\t\t\t\t\t
\t\t\t\t\toptions_img = false;
\t\t\t\t\t\t
\t\t\t\t\tif(indx == 0) {
\t\t\t\t\t\t\$(elemA).first().attr('href', el.data('full'));
\t\t\t\t\t\t\$(elemImg).first().attr('src', el.data('thumb'));
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t
\t\t\t\t\$(function() {
\t\t\t\t\t\$('html body').on('click', elemA, function(e) {
\t\t\t\t\t\te.preventDefault();
\t\t
\t\t\t\t\t\tlet img_indx = 0,
\t\t\t\t\t\t\timg_array = [];
\t\t\t\t\t\t
\t\t\t\t\t\tif(\$(elemAdditImg+'.selected').length) {
\t\t\t\t\t\t\timg_indx = \$(elemAdditImg+'.selected').parent().index();
\t\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\t\tif(!options_img) {
\t\t\t\t\t\t\t\$(elemAdditImg).each(function() {
\t\t\t\t\t\t\t\timg_array.push({src:\$(this).data('full'), type:'image', title:\$(this).attr('alt')});
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t
\t\t\t\t\t\tif(img_array.length == 0) {
\t\t\t\t\t\t\timg_array.push({src:\$(elemA).attr('href'), type:'image', title:\$(elemImg).attr('alt')});
\t\t\t\t\t\t}
\t\t
\t\t\t\t\t\t\$.magnificPopup.open({
\t\t\t\t\t\t\titems:img_array,
\t\t\t\t\t\t\tgallery:{
\t\t\t\t\t\t\t\tenabled:true,
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tremovalDelay:";
        // line 429
        echo ((((isset($context["uni_popup_img_effect_in"]) ? $context["uni_popup_img_effect_in"] : null) != "animated disabled")) ? (800) : (0));
        echo ",
\t\t\t\t\t\t\tcallbacks:{
\t\t\t\t\t\t\t\topen:function() {
\t\t\t\t\t\t\t\t\tvar \$this = this;
\t\t
\t\t\t\t\t\t\t\t\t\$this.content.addClass('";
        // line 434
        echo (isset($context["uni_popup_img_effect_in"]) ? $context["uni_popup_img_effect_in"] : null);
        echo "');
\t\t\t\t\t\t\t\t\t\$('html body').addClass('magnific-open');
\t\t\t\t\t
\t\t\t\t\t\t\t\t\tsetTimeout(function() { 
\t\t\t\t\t\t\t\t\t\t\$this.content.removeClass('";
        // line 438
        echo (isset($context["uni_popup_img_effect_in"]) ? $context["uni_popup_img_effect_in"] : null);
        echo "');
\t\t\t\t\t\t\t\t\t}, 850);
\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\$this.goTo(img_indx);
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tbeforeClose:function() {
\t\t\t\t\t\t\t\t\tthis.content.addClass('";
        // line 444
        echo (isset($context["uni_popup_img_effect_out"]) ? $context["uni_popup_img_effect_out"] : null);
        echo "');
\t\t\t\t\t\t\t\t\t\$('html body').removeClass('magnific-open');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t},
\t\t\t\t\t\t});
\t\t\t\t\t});

\t\t\t\t\t";
        // line 451
        if ((isset($context["change_opt_img_p"]) ? $context["change_opt_img_p"] : null)) {
            // line 452
            echo "\t\t\t\t\t\t\$('.product-page input[type=\"radio\"] + .option__img').on('click', function() {
\t\t\t\t\t\t\t\$(elemA).first().attr('href', \$(this).data('full'));
\t\t\t\t\t\t\t\$(elemImg).first().attr('src', \$(this).data('thumb'));
\t\t\t\t\t
\t\t\t\t\t\t\toptions_img = true;
\t\t\t\t\t
\t\t\t\t\t\t\t\$(elemAdditImg).removeClass('selected');
\t\t\t\t\t\t\t\$(elemMain).trigger('to.owl.carousel', [0, 250]);
\t\t\t\t\t\t});
\t\t\t\t\t";
        }
        // line 462
        echo "\t\t\t\t});
\t\t\t</script>
\t\t\t
\t\t\t<div class=\"hidden-xs hidden-sm\" style=\"height:20px\"></div>
\t\t\t
\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t<li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\"><i class=\"fas fa-file-alt\" aria-hidden=\"true\"></i>";
        // line 468
        echo (isset($context["tab_description"]) ? $context["tab_description"] : null);
        echo "</a></li>
\t\t\t\t";
        // line 469
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 470
            echo "\t\t\t\t\t<li><a href=\"#tab-specification\" data-toggle=\"tab\"><i class=\"fa fa-list-alt\" aria-hidden=\"true\"></i>";
            echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
            echo "</a></li>
\t\t\t\t";
        }
        // line 472
        echo "\t\t\t\t";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 473
            echo "\t\t\t\t\t<li><a href=\"#tab-review\" class=\"tab-review\" data-toggle=\"tab\"><i class=\"fas fa-comments\" aria-hidden=\"true\"></i>";
            echo (isset($context["tab_review"]) ? $context["tab_review"] : null);
            echo " ";
            echo (((isset($context["review_total"]) ? $context["review_total"] : null)) ? ((("<span>" . (isset($context["review_total"]) ? $context["review_total"] : null)) . "</span>")) : (""));
            echo "</a></li>
\t\t\t\t";
        }
        // line 475
        echo "\t\t\t\t";
        if ((isset($context["uni_product_tabs"]) ? $context["uni_product_tabs"] : null)) {
            // line 476
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["uni_product_tabs"]) ? $context["uni_product_tabs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 477
                echo "\t\t\t\t\t\t<li><a href=\"#tab-";
                echo $this->getAttribute($context["tab"], "id", array());
                echo "\" class=\"tab-";
                echo $this->getAttribute($context["tab"], "id", array());
                echo "\" data-toggle=\"tab\"><i class=\"";
                echo $this->getAttribute($context["tab"], "icon", array());
                echo "\"></i>";
                echo $this->getAttribute($context["tab"], "title", array());
                echo " <span class=\"hidden\"></span></a></li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 479
            echo "\t\t\t\t";
        }
        // line 480
        echo "\t\t\t</ul>
\t\t\t<div class=\"tab-content\">
\t\t\t\t<div class=\"tab-pane active\" id=\"tab-description\">";
        // line 482
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "</div>
\t\t\t\t";
        // line 483
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 484
            echo "\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-specification\">
\t\t\t\t\t\t";
            // line 485
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 486
                echo "\t\t\t\t\t\t\t<h4 class=\"heading\"><span>";
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</span></h4>
\t\t\t\t\t\t\t<div class=\"product-data\">
\t\t\t\t\t\t\t\t";
                // line 488
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 489
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"product-data__item\"><div class=\"product-data__item-div\"><span class=\"product-data__item-span\">";
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</span></div> ";
                    echo $this->getAttribute($context["attribute"], "text", array());
                    echo "</div>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 491
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 493
            echo "\t\t\t\t\t\t";
            if (((isset($context["show_length"]) ? $context["show_length"] : null) == 2)) {
                // line 494
                echo "\t\t\t\t\t\t\t<h4 class=\"heading\"><span>";
                echo (isset($context["entry_length_weigth"]) ? $context["entry_length_weigth"] : null);
                echo "</span></h4>
\t\t\t\t\t\t\t<div class=\"product-data\">
\t\t\t\t\t\t\t\t";
                // line 496
                if ((isset($context["length"]) ? $context["length"] : null)) {
                    // line 497
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"product-data__item length\"><div class=\"product-data__item-div\"><span class=\"product-data__item-span\">";
                    echo (isset($context["text_length"]) ? $context["text_length"] : null);
                    echo "</span></div> ";
                    echo (isset($context["length"]) ? $context["length"] : null);
                    echo "</div>
\t\t\t\t\t\t\t\t";
                }
                // line 499
                echo "\t\t\t\t\t\t\t\t";
                if ((isset($context["weight"]) ? $context["weight"] : null)) {
                    // line 500
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"product-data__item weight\"><div class=\"product-data__item-div\"><span class=\"product-data__item-span\">";
                    echo (isset($context["text_weight"]) ? $context["text_weight"] : null);
                    echo "</span></div> ";
                    echo (isset($context["weight"]) ? $context["weight"] : null);
                    echo "</div>
\t\t\t\t\t\t\t\t";
                }
                // line 502
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 504
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 506
        echo "\t\t\t\t";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 507
            echo "\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-review\">
\t\t\t\t\t\t<div class=\"review-info\">
\t\t\t\t\t\t\t<div class=\"review-info__total\">";
            // line 509
            echo (isset($context["text_review_total"]) ? $context["text_review_total"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"review-info__score hidden-xs\">";
            // line 510
            echo (isset($context["text_review_score"]) ? $context["text_review_score"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"review-info__rating rating hidden-xs\">
\t\t\t\t\t\t\t\t";
            // line 512
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 513
                echo "\t\t\t\t\t\t\t\t\t<i class=\"";
                echo ((((isset($context["rating"]) ? $context["rating"] : null) < $context["i"])) ? ("far") : ("fa"));
                echo " fa-star\"></i>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 515
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-primary\" onclick=\"\$('#form-review').collapse('toggle');\">";
            // line 516
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<form class=\"form-horizontal collapse\" id=\"form-review\">
\t\t\t\t\t\t\t";
            // line 519
            if ((isset($context["review_guest"]) ? $context["review_guest"] : null)) {
                // line 520
                echo "\t\t\t\t\t\t\t\t<div class=\"rev_form well well-sm\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-name\">";
                // line 523
                echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                // line 527
                if ((isset($context["show_plus_minus_review"]) ? $context["show_plus_minus_review"] : null)) {
                    // line 528
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group ";
                    echo (((isset($context["plus_minus_review_required"]) ? $context["plus_minus_review_required"] : null)) ? ("required") : (""));
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-review-plus\">";
                    // line 530
                    echo (isset($context["entry_plus"]) ? $context["entry_plus"] : null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"plus\" rows=\"5\" id=\"input-review-plus\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group ";
                    // line 534
                    echo (((isset($context["plus_minus_review_required"]) ? $context["plus_minus_review_required"] : null)) ? ("required") : (""));
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-review-minus\">";
                    // line 536
                    echo (isset($context["entry_minus"]) ? $context["entry_minus"] : null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"minus\" rows=\"5\" id=\"input-review-minus\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 541
                    echo "\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"plus\" value=\"\" />
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"minus\" value=\"\" />
\t\t\t\t\t\t\t\t\t";
                }
                // line 544
                echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-review\">";
                // line 546
                echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"help-block\">";
                // line 548
                echo (isset($context["text_note"]) ? $context["text_note"] : null);
                echo "</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">";
                // line 553
                echo (isset($context["entry_rating"]) ? $context["entry_rating"] : null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-star\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rating\" value=\"1\" class=\"review-star__input\" />
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rating\" value=\"2\" class=\"review-star__input\" />
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rating\" value=\"3\" class=\"review-star__input\" />
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rating\" value=\"4\" class=\"review-star__input\" />
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"rating\" value=\"5\" class=\"review-star__input\" />
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"review-star__stars rating\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"review-star__star far fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"review-star__star far fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"review-star__star far fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"review-star__star far fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"review-star__star far fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                // line 570
                echo (isset($context["captcha"]) ? $context["captcha"] : null);
                echo "
\t\t\t\t\t\t\t\t\t<div class=\"text-right clearfix\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 572
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-primary\">";
                echo (isset($context["add_new_review"]) ? $context["add_new_review"] : null);
                echo "</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            } else {
                // line 576
                echo "\t\t\t\t\t\t\t\t";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "
\t\t\t\t\t\t\t";
            }
            // line 578
            echo "\t\t\t\t\t\t</form>
\t\t\t\t\t\t<div id=\"review\">";
            // line 579
            echo (isset($context["uni_reviews"]) ? $context["uni_reviews"] : null);
            echo "</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 582
        echo "\t\t\t\t";
        if ((isset($context["uni_product_tabs"]) ? $context["uni_product_tabs"] : null)) {
            // line 583
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["uni_product_tabs"]) ? $context["uni_product_tabs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 584
                echo "\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-";
                echo $this->getAttribute($context["tab"], "id", array());
                echo "\">";
                echo $this->getAttribute($context["tab"], "description", array());
                echo "</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 586
            echo "\t\t\t\t";
        }
        // line 587
        echo "\t\t\t</div>
\t\t\t<div class=\"clearfix\" style=\"margin:0 0 30px\"></div>
\t\t\t";
        // line 589
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 590
            echo "\t\t\t\t<div class=\"product-tag\">
\t\t\t\t\t<i class=\"fa fa-tags\"></i>
\t\t\t\t\t";
            // line 592
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
            foreach ($context['_seq'] as $context["i"] => $context["tag"]) {
                // line 593
                echo "\t\t\t\t\t\t<a class=\"product-tag__item uni-href\" data-href=\"";
                echo $this->getAttribute($context["tag"], "href", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["tag"], "tag", array());
                echo "\">";
                echo $this->getAttribute($context["tag"], "tag", array());
                echo "</a>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 595
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 597
        echo "\t\t\t";
        if (((isset($context["manufacturer_descr"]) ? $context["manufacturer_descr"] : null) &&  !(isset($context["manufacturer_position"]) ? $context["manufacturer_position"] : null))) {
            // line 598
            echo "\t\t\t\t<div class=\"product-manuf\">
\t\t\t\t\t";
            // line 599
            if ($this->getAttribute((isset($context["manufacturer_descr"]) ? $context["manufacturer_descr"] : null), "image", array())) {
                // line 600
                echo "\t\t\t\t\t\t<div class=\"product-manuf__image\">
\t\t\t\t\t\t\t<img src=\"";
                // line 601
                echo $this->getAttribute((isset($context["manufacturer_descr"]) ? $context["manufacturer_descr"] : null), "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute((isset($context["manufacturer_descr"]) ? $context["manufacturer_descr"] : null), "name", array());
                echo "\" class=\"img-responsive\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 604
            echo "\t\t\t\t\t\t<h4 class=\"product-manuf__name\">";
            echo $this->getAttribute((isset($context["manufacturer_descr"]) ? $context["manufacturer_descr"] : null), "name", array());
            echo "</h4>
\t\t\t\t\t\t";
            // line 605
            echo $this->getAttribute((isset($context["manufacturer_descr"]) ? $context["manufacturer_descr"] : null), "description", array());
            echo "... <a href=\"";
            echo $this->getAttribute((isset($context["manufacturer_descr"]) ? $context["manufacturer_descr"] : null), "href", array());
            echo "\" title=\"\" >";
            echo (isset($context["text_manufacturer_more"]) ? $context["text_manufacturer_more"] : null);
            echo "</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t";
        }
        // line 609
        echo "\t\t\t";
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 610
            echo "\t\t\t\t<div class=\"heading\"><span>";
            echo (isset($context["text_related"]) ? $context["text_related"] : null);
            echo "</span></div>
\t\t\t\t<div class=\"uni-module product-related\">
\t\t\t\t\t<div class=\"uni-module__wrapper\">
\t\t\t\t\t\t";
            // line 613
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
                // line 614
                echo "\t\t\t\t\t\t\t<div class=\"product-thumb uni-item\">
\t\t\t\t\t\t\t\t<div class=\"product-thumb__image\" ";
                // line 615
                echo (($this->getAttribute($context["product"], "special_date_end", array())) ? ((("data-special-end=\"" . $this->getAttribute($context["product"], "special_date_end", array())) . "\"")) : (""));
                echo ">
\t\t\t\t\t\t\t\t\t";
                // line 616
                $this->loadTemplate("unishop2/template/extension/module/uni_stickers.twig", "unishop2/template/product/product.twig", 616)->display($context);
                echo "\t
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 617
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 618
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" ";
                echo (($this->getAttribute($context["product"], "additional_image", array())) ? ((("data-additional=\"" . $this->getAttribute($context["product"], "additional_image", array())) . "\"")) : (""));
                echo " loading=\"lazy\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"product-thumb__caption\">
\t\t\t\t\t\t\t\t\t<a class=\"product-thumb__name\" href=\"";
                // line 622
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a>
\t\t\t\t\t\t\t\t\t";
                // line 623
                if ($this->getAttribute($context["product"], "show_description", array())) {
                    // line 624
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb__description description\">";
                    echo $this->getAttribute($context["product"], "description", array());
                    echo "</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 626
                echo "\t\t\t\t\t\t\t\t\t";
                $this->loadTemplate("unishop2/template/extension/module/uni_attributes.twig", "unishop2/template/product/product.twig", 626)->display($context);
                // line 627
                echo "\t\t\t\t\t\t\t\t\t";
                $this->loadTemplate("unishop2/template/extension/module/uni_options.twig", "unishop2/template/product/product.twig", 627)->display($context);
                // line 628
                echo "\t\t\t\t\t\t\t\t\t";
                $this->loadTemplate("unishop2/template/extension/module/uni_quantity_indicator.twig", "unishop2/template/product/product.twig", 628)->display($context);
                // line 629
                echo "\t\t\t\t\t\t\t\t\t";
                if ((($this->getAttribute($context["product"], "rating", array()) >= 0) && (isset($context["show_rating"]) ? $context["show_rating"] : null))) {
                    // line 630
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb__rating rating\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 631
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 632
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"";
                        echo ((($this->getAttribute($context["product"], "rating", array()) < $context["i"])) ? ("far fa-star") : ("fa fa-star"));
                        echo "\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 633
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 634
                    if (($this->getAttribute($context["product"], "num_reviews", array()) > 0)) {
                        echo "<sup><a class=\"product-thumb__rating-a uni-href\" data-href=\"";
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "#tab-review\">";
                        echo $this->getAttribute($context["product"], "num_reviews", array());
                        echo "</a></sup>";
                    }
                    // line 635
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 637
                echo "\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 638
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb__price price\" data-price=\"";
                    echo $this->getAttribute($context["product"], "price_value", array());
                    echo "\" data-special=\"";
                    echo $this->getAttribute($context["product"], "special_value", array());
                    echo "\" data-discount=\"";
                    echo $this->getAttribute($context["product"], "discounts", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 639
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 640
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 642
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span> <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> 
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 644
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    // line 645
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        // line 646
                        echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</div>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 648
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 649
                echo "\t\t\t\t\t\t\t\t\t<div class=\"product-thumb__cart cart ";
                echo $this->getAttribute($context["product"], "cart_btn_class", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t";
                // line 650
                if ($this->getAttribute($context["product"], "show_quantity", array())) {
                    // line 651
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"qty-switch\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"quantity\" value=\"";
                    // line 652
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
                // line 659
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
                // line 660
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
                // line 661
                echo (((isset($context["wishlist_btn_disabled"]) ? $context["wishlist_btn_disabled"] : null)) ? ("hidden") : (""));
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__compare compare ";
                // line 662
                echo (((isset($context["compare_btn_disabled"]) ? $context["compare_btn_disabled"] : null)) ? ("hidden") : (""));
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fas fa-align-right\"></i></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
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
            // line 667
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<script>
\t\t\t\t\t\$('.product-related').uniModules({
\t\t\t\t\t\ttype:'";
            // line 671
            echo ((array_key_exists("type_view", $context)) ? ((isset($context["type_view"]) ? $context["type_view"] : null)) : ("carousel"));
            echo "',
\t\t\t\t\t\tautoheight:['product-thumb__name', 'product-thumb__description', 'product-thumb__option'],
\t\t\t\t\t\tloop: ";
            // line 673
            echo (((twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null)) > 4)) ? ("true") : ("false"));
            echo "
\t\t\t\t\t});
\t\t\t\t\t";
            // line 675
            if ((isset($context["show_timer"]) ? $context["show_timer"] : null)) {
                // line 676
                echo "\t\t\t\t\t\t\$('.product-related .image').each(function() {
\t\t\t\t\t\t\tvar date = \$(this).data('special-end');
\t\t\t
\t\t\t\t\t\t\tif(date) {
\t\t\t\t\t\t\t\t\$(this).uniTimer({
\t\t\t\t\t\t\t\t\tdate   :''+date+'',
\t\t\t\t\t\t\t\t\ttexts   :['";
                // line 682
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
\t\t\t\t\t";
            }
            // line 689
            echo "\t\t\t\t</script>
\t\t\t\t<div style=\"height:10px;clear:both\"></div>
\t\t\t";
        }
        // line 692
        echo "\t\t\t\t
\t\t\t";
        // line 693
        echo (isset($context["auto_related"]) ? $context["auto_related"] : null);
        echo "
\t\t\t\t
\t\t\t";
        // line 695
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t\t</div>
\t\t";
        // line 698
        echo "\t</div>
</div>
<script>
\t";
        // line 701
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "show_timer", array())) {
            // line 702
            echo "\t\t\$('.product-page__timer').uniTimer({
\t\t\tdate :'";
            // line 703
            echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "show_timer", array());
            echo "',
\t\t\ttexts :['";
            // line 704
            echo (isset($context["text_special_day"]) ? $context["text_special_day"] : null);
            echo "','";
            echo (isset($context["text_special_hour"]) ? $context["text_special_hour"] : null);
            echo "','";
            echo (isset($context["text_special_min"]) ? $context["text_special_min"] : null);
            echo "','";
            echo (isset($context["text_special_sec"]) ? $context["text_special_sec"] : null);
            echo "']
\t\t});
\t";
        }
        // line 707
        echo "</script>
";
        // line 708
        if ((isset($context["socialbutton"]) ? $context["socialbutton"] : null)) {
            // line 709
            echo "\t<script defer async src=\"catalog/view/javascript/goodshare/goodshare.min.js\"></script>
\t<link href=\"catalog/view/javascript/goodshare/goodshare.css\" rel=\"stylesheet\" media=\"screen\" />
";
        }
        // line 712
        echo "<script>
\tdataLayer.push({
\t\t'ecommerce':{
\t\t\t'currencyCode':'";
        // line 715
        echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "code", array());
        echo "',
\t\t\t'detail':{
\t\t\t\t'products':[{
\t\t\t\t\t'id': ";
        // line 718
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo ", 
\t\t\t\t\t'name': \"";
        // line 719
        echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "name", array());
        echo "\", 
\t\t\t\t\t'brand': \"";
        // line 720
        echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "manufacturer", array());
        echo "\", 
\t\t\t\t\t'category': \"";
        // line 721
        echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "category", array());
        echo "\", 
\t\t\t\t\t'variant': '',
\t\t\t\t\t'price': ";
        // line 723
        echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "price", array());
        echo "
\t\t\t\t}]
\t\t\t}
\t\t}
\t});
\t
\tif (typeof(gtag) === 'function') {
\t\tgtag('event', 'view_item', {
\t\t\t\"items\": [{
\t\t\t\t'id': ";
        // line 732
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo ", 
\t\t\t\t'name': \"";
        // line 733
        echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "name", array());
        echo "\", 
\t\t\t\t'brand': \"";
        // line 734
        echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "manufacturer", array());
        echo "\", 
\t\t\t\t'category': \"";
        // line 735
        echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "category", array());
        echo "\", 
\t\t\t\t'variant': '',
\t\t\t\t'price': ";
        // line 737
        echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "price", array());
        echo "
\t\t\t}]
\t\t});
\t}
\t
\t\$('html body').on('click', '#button-cart:not(.disabled)', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=checkout/cart/add',
\t\t\ttype: 'post',
\t\t\tdata: \$('.product-page input[type=\\'text\\'], .product-page input[type=\\'hidden\\'], .product-page input[type=\\'radio\\']:checked, .product-page input[type=\\'checkbox\\']:checked, .product-page select, .product-page textarea'),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.text-danger').remove();
\t\t\t\t\$('.form-group').removeClass('has-error');
\t\t\t
\t\t\t\tif (json['error']) {
\t\t\t\t\tif (json['error']['option']) {
\t\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\t\tvar elem = \$('.option #input-option' + i.replace('_', '-')), elem2 = (elem.parent().hasClass('input-group')) ? elem.parent() : elem;
\t\t\t\t\t\t\t
\t\t\t\t\t\t\telem2.after('<div class=\"text-danger\">'+json['error']['option'][i]+'</div>');
\t\t\t\t\t\t\t\$('.option .text-danger').delay(5000).fadeOut();
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\tuniFlyAlert('danger', json['error']['option']);
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\tif(!uniJsVars.cart_popup_disable) {
\t\t\t\t\t\tuniModalWindow('modal-cart', '', '', json['success']);
\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\tif(uniJsVars.cart_popup_autohide) {
\t\t\t\t\t\tsetTimeout(function() { 
\t\t\t\t\t\t\t\$('#modal-cart').modal('hide');
\t\t\t\t\t\t}, uniJsVars.cart_popup_autohide_time * 1000);
\t\t\t\t\t}
\t\t\t\t
\t\t\t\t\t\$.get('index.php?route=common/cart/info', function(data) {
\t\t\t\t\t\t\$('.header-cart__dropdown').html(\$(data).find('.header-cart__dropdown').html());
\t\t\t\t\t\t\$('.header-cart__total-items').html(\$(data).find('.header-cart__total-items').text());
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\tdataLayer.push({
\t\t\t\t\t\t'ecommerce':{
\t\t\t\t\t\t\t'currencyCode':'";
        // line 789
        echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "code", array());
        echo "',
\t\t\t\t\t\t\t'add':{
\t\t\t\t\t\t\t\t'products':[json['products']]
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t
\t\t\t\t\tif (typeof(gtag) === \"function\") {
\t\t\t\t\t\tgtag('event', 'add_to_cart', {\"items\": [json['products']]});
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tif(uniJsVars.cart_btn.metric_id && uniJsVars.cart_btn.metric_target) {
\t\t\t\t\t\tif (typeof(ym) === \"function\") {
\t\t\t\t\t\t\tym(uniJsVars.cart_btn.metric_id, 'reachGoal', uniJsVars.cart_btn.metric_target);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tnew Function('yaCounter'+uniJsVars.cart_btn.metric_id+'.reachGoal(\\''+uniJsVars.cart_btn.metric_target+'\\')')();
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tif(uniJsVars.cart_btn.analytic_category && uniJsVars.cart_btn.analytic_action) {
\t\t\t\t\t\tif (typeof(gtag) === \"function\") {
\t\t\t\t\t\t\tgtag('event', uniJsVars.cart_btn.analytic_action, {'event_category': uniJsVars.cart_btn.analytic_category});
\t\t\t\t\t\t} else if (typeof(ga) === \"function\") {
\t\t\t\t\t\t\tga('send', 'event', uniJsVars.cart_btn.analytic_category, uniJsVars.cart_btn.analytic_action);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}\t\t
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});

\t\$('button[id^=\\'button-upload\\']').on('click', function() {
\t\tvar node = this;

\t\t\$('#form-upload').remove();

\t\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display:none;\"><input type=\"file\" name=\"file\" /></form>');

\t\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\t\tif (typeof timer != 'undefined') {
\t\t\tclearInterval(timer);
\t\t}

\t\ttimer = setInterval(function() {
\t\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\t\tclearInterval(timer);

\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\t\tcache: false,
\t\t\t\t\tcontentType: false,
\t\t\t\t\tprocessData: false,
\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t\$(node).button('loading');
\t\t\t\t\t},
\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\$(node).button('reset');
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t\t}

\t\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\talert(json['success']);
\t\t\t\t\t\t\t\$(node).parent().find('input').attr('value', json['code']);
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t}, 500);
\t});
\t
\t\$('.tab-review').on('click mouseover', function() {
\t\t\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 875
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');
\t});

\t\$('#review').on('click', '.pagination a', function(e) {
\t\te.preventDefault();
\t\t
\t\tvar url = \$(this).attr('href');
\t\t
\t\t\$('#review').fadeOut(function() {
\t\t\tscroll_to('#tab-review');
\t\t\t
\t\t\t\$(this).load(url, function() {
\t\t\t\t\$('#review').fadeIn();
\t\t\t\t
\t\t\t\tif(!\$('.review-pagination .active').next().find('a').length) {
\t\t\t\t\t\$('.show-more-review').hide();
\t\t\t\t} else {
\t\t\t\t\t\$('.show-more-review').show();
\t\t\t\t}
\t\t\t});
\t\t});
\t});
\t
\t\$('#review').on('click', '.show-more-review', function() {
\t\tvar url = \$('.review-pagination .active').next().find('a').attr('href'),
\t\t\tshow_more_btn = \$(this),
\t\t\tshow_more_btn_i = show_more_btn.find('i');
\t\t
\t\tif(typeof(url) == 'undefined' || url == '') return;
\t
\t\t\$.ajax({
\t\t\turl: url,
\t\t\ttype: 'get',
\t\t\tdataType: 'html',
\t\t\tbeforeSend: function() {
\t\t\t\tshow_more_btn_i.addClass('spin');
\t\t\t},
\t\t\tsuccess: function(data) {
\t\t\t\tvar \$data = \$(data);
\t\t\t
\t\t\t\t\$data.find('.review-list__item').hide();
\t\t\t\t
\t\t\t\t\$('.review-list').append(\$data.find('.review-list').html());
\t\t\t\t
\t\t\t\t\$('.review-pagination .pagination').html(\$data.find('.pagination').html());
\t\t\t\t
\t\t\t\tif(!\$('.review-pagination .active').next().find('a').length) {
\t\t\t\t\tshow_more_btn.hide();
\t\t\t\t}
\t\t\t
\t\t\t\tshow_more_btn_i.removeClass('spin');
\t\t\t\t
\t\t\t\t\$('.review-list__item').fadeIn();
\t\t\t}
\t\t});
\t});

\t\$('#button-review').on('click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 934
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: \$('#form-review').serialize(),
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-review').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-review').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['error']) {
\t\t\t\t\tuniFlyAlert('danger', json['error']);
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('#form-review').before('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> '+json['success']+' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t\$('#form-review input, #form-review textarea').val('');
\t\t\t\t\t\$('.review_star input').attr('checked', false).prop('checked', false);
\t\t\t\t\t\$('#form-review').slideToggle();
\t\t\t\t\t
\t\t\t\t\tscroll_to('.alert.alert-success');
\t\t\t\t}
\t\t\t}
\t\t});
\t});
\t
\t\$('.review-star__input').on('mouseenter', function () {
\t\t\$('.review-star__star:lt('+\$(this).val()+')').removeClass('far').addClass('fa');
\t\t
\t\t\$(this).on('mouseleave', function() {
\t\t\t\$('.review-star__star').removeClass('fa').addClass('far');
\t\t
\t\t\t\$('.review-star__input').each(function() {
\t\t\t\tif(\$(this).prop('checked')) {
\t\t\t\t\t\$('.review-star__star:lt('+\$(this).val()+')').removeClass('far').addClass('fa');
\t\t\t\t}
\t\t\t});
\t\t});
\t});

\t\$('.review-star__input').on('click', function(){
\t\t\$('.review-star__star:not(:lt('+\$(this).val()+'))').removeClass('fa').addClass('far');
\t});
\t
\tif(\$('#tab-question').length) {
\t\t//\$('.tab-question').on('click mouseover', function() {
\t\t\t\$('#tab-question').load('index.php?route=extension/module/uni_request/requests&p_id=";
        // line 981
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');
\t\t//});
\t\t\t
\t\t\$('#tab-question').on('click', '.pagination a', function(e) {
\t\t\te.preventDefault();
\t\t\t\$('#tab-question #question-list').fadeOut().load(this.href +' #question-list > *').fadeIn();
\t\t});
\t}
\t
\t";
        // line 990
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            echo "\t\t
\t\t\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\t\t\ttype: 'post',
\t\t\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\t\t\tdataType: 'json',
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$('#recurring-description').html('');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.alert, .text-danger').remove();

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t});
\t";
        }
        // line 1010
        echo "
\tvar hash = window.location.hash;

\tif (hash) {
\t\t\$('.nav-tabs a').each(function() {
\t\t\tif (hash == \$(this).attr('href')) {
\t\t\t\t\$(\$(this)).trigger('click');
\t\t\t\tuniScrollTo(hash);
\t\t\t}
\t\t});
\t
\t\tvar hashpart = hash.split('#'), vals = hashpart[1].split('-'), elem = \$('.product-page .option');
\t\t\t
\t\tfor (i=0; i < vals.length; i++) {\t\t\t
\t\t\telem.find('select option[value=\"'+vals[i]+'\"]').attr('selected', true).trigger('select');
\t\t\telem.find('input[type=\"radio\"][value=\"'+vals[i]+'\"]').attr('checked', true).prop('checked', true).change();
\t\t\telem.find('input[type=\"checkbox\"][value=\"'+vals[i]+'\"]').attr('checked', true).prop('checked', true);
\t\t}
\t}
</script>
<script type=\"application/ld+json\">
\t{
\t\t\"@context\": \"http://schema.org\",
\t\t\"@type\": \"BreadcrumbList\",
\t\t\"itemListElement\": [
\t\t";
        // line 1035
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["i"] => $context["breadcrumb"]) {
            // line 1036
            echo "\t\t\t{
\t\t\t\"@type\": \"ListItem\",
\t\t\t\"position\": ";
            // line 1038
            echo ($context["i"] + 1);
            echo ",
\t\t\t\"name\": \"";
            // line 1039
            echo ((($context["i"] == 0)) ? ((isset($context["shop_name"]) ? $context["shop_name"] : null)) : (twig_replace_filter($this->getAttribute($context["breadcrumb"], "text", array()), array("\"" => "", "&quot;" => ""))));
            echo "\",
\t\t\t\"item\": \"";
            // line 1040
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\"
\t\t\t";
            // line 1041
            echo (((($context["i"] + 1) < twig_length_filter($this->env, (isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null)))) ? ("},") : ("}"));
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1043
        echo "\t\t]
\t}
</script>
<script type=\"application/ld+json\">
\t{
\t\t\"@context\": \"https://schema.org\",
\t\t\"@type\": \"Product\",
\t\t\"name\": \"";
        // line 1050
        echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "name", array());
        echo "\",
\t\t\"category\": \"";
        // line 1051
        echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "category", array());
        echo "\",
\t\t\"image\": \"";
        // line 1052
        echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "image", array());
        echo "\",
\t\t\"brand\": \"";
        // line 1053
        echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "manufacturer", array());
        echo "\",
\t\t\"manufacturer\": \"";
        // line 1054
        echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "manufacturer", array());
        echo "\",
\t\t\"model\": \"";
        // line 1055
        echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "model", array());
        echo "\",
\t\t\"sku\": \"";
        // line 1056
        echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "sku", array());
        echo "\",
\t\t\"mpn\": \"";
        // line 1057
        echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "mpn", array());
        echo "\",
\t\t\"description\": \"";
        // line 1058
        echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "description", array());
        echo "\",
\t\t\"offers\": {
\t\t\t\"@type\": \"Offer\",
\t\t\t\"availability\": \"https://schema.org/";
        // line 1061
        echo ((((isset($context["quantity"]) ? $context["quantity"] : null) > 0)) ? ("InStock") : ("OutOfStock"));
        echo "\",
\t\t\t\"price\": \"";
        // line 1062
        echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "price", array());
        echo "\",
\t\t\t";
        // line 1063
        if ($this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "price_date_end", array())) {
            // line 1064
            echo "\t\t\t\t\"priceValidUntil\": \"";
            echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "price_date_end", array());
            echo "\",
\t\t\t";
        }
        // line 1066
        echo "\t\t\t\"priceCurrency\": \"";
        echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "code", array());
        echo "\",
\t\t\t\"url\": \"";
        // line 1067
        echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "url", array());
        echo "\"
\t\t}
\t\t";
        // line 1069
        if (($this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "review_status", array()) && ($this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "reviews_num", array()) > 0))) {
            echo ",
\t\t\"aggregateRating\": {
\t\t\t\"@type\": \"AggregateRating\",
\t\t\t\"ratingValue\": \"";
            // line 1072
            echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "rating", array());
            echo "\",
\t\t\t\"reviewCount\": \"";
            // line 1073
            echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "reviews_num", array());
            echo "\"
\t\t}
\t\t";
        }
        // line 1076
        echo "\t\t";
        if ($this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "reviews", array())) {
            echo ",
\t\t\"review\": [
\t\t\t";
            // line 1078
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "reviews", array()));
            foreach ($context['_seq'] as $context["i"] => $context["review"]) {
                // line 1079
                echo "\t\t\t{
\t\t\t\t\"@type\": \"Review\",
\t\t\t\t\"author\": \"";
                // line 1081
                echo $this->getAttribute($context["review"], "author", array());
                echo "\",
\t\t\t\t\"datePublished\": \"";
                // line 1082
                echo $this->getAttribute($context["review"], "date_added", array());
                echo "\",
\t\t\t\t\"description\": \"";
                // line 1083
                echo $this->getAttribute($context["review"], "text", array());
                echo "\",
\t\t\t\t\"reviewRating\": {
\t\t\t\t\t\"@type\": \"Rating\",
\t\t\t\t\t\"ratingValue\": \"";
                // line 1086
                echo $this->getAttribute($context["review"], "rating", array());
                echo "\",
\t\t\t\t\t\"bestRating\": \"5\"
\t\t\t\t}
\t\t\t";
                // line 1089
                echo (((($context["i"] + 1) < twig_length_filter($this->env, $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "reviews", array())))) ? ("},") : ("}"));
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1091
            echo "\t\t]
\t\t";
        }
        // line 1093
        echo "\t}
</script>
\t";
        // line 1095
        $context["break"] = false;
        // line 1096
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            if ( !(isset($context["break"]) ? $context["break"] : null)) {
                // line 1097
                echo "\t\t";
                if (((($this->getAttribute($context["option"], "type", array()) == "date") || ($this->getAttribute($context["option"], "type", array()) == "time")) || ($this->getAttribute($context["option"], "type", array()) == "datetime"))) {
                    // line 1098
                    echo "\t\t\t<script src=\"catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js\"></script>
\t\t\t<script src=\"catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js\"></script>
\t\t\t<script src=\"catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\"></script>
\t\t\t<link href=\"catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" rel=\"preload\" as=\"style\" />
\t\t\t<link href=\"catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" rel=\"stylesheet\" media=\"screen\" />
\t\t\t<script>
\t\t\t\t\$('.date').datetimepicker({
\t\t\t\t\tpickTime: false
\t\t\t\t});
\t\t\t\t\$('.datetime').datetimepicker({
\t\t\t\t\tpickDate: true,
\t\t\t\t\tpickTime: true
\t\t\t\t});
\t\t\t\t\$('.time').datetimepicker({
\t\t\t\t\tpickDate: false
\t\t\t\t});
\t\t\t</script>
\t\t\t";
                    // line 1115
                    $context["break"] = true;
                    // line 1116
                    echo "\t\t";
                }
                // line 1117
                echo "\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1118
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "unishop2/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2626 => 1118,  2619 => 1117,  2616 => 1116,  2614 => 1115,  2595 => 1098,  2592 => 1097,  2586 => 1096,  2584 => 1095,  2580 => 1093,  2576 => 1091,  2568 => 1089,  2562 => 1086,  2556 => 1083,  2552 => 1082,  2548 => 1081,  2544 => 1079,  2540 => 1078,  2534 => 1076,  2528 => 1073,  2524 => 1072,  2518 => 1069,  2513 => 1067,  2508 => 1066,  2502 => 1064,  2500 => 1063,  2496 => 1062,  2492 => 1061,  2486 => 1058,  2482 => 1057,  2478 => 1056,  2474 => 1055,  2470 => 1054,  2466 => 1053,  2462 => 1052,  2458 => 1051,  2454 => 1050,  2445 => 1043,  2437 => 1041,  2433 => 1040,  2429 => 1039,  2425 => 1038,  2421 => 1036,  2417 => 1035,  2390 => 1010,  2367 => 990,  2355 => 981,  2305 => 934,  2243 => 875,  2154 => 789,  2099 => 737,  2094 => 735,  2090 => 734,  2086 => 733,  2082 => 732,  2070 => 723,  2065 => 721,  2061 => 720,  2057 => 719,  2053 => 718,  2047 => 715,  2042 => 712,  2037 => 709,  2035 => 708,  2032 => 707,  2020 => 704,  2016 => 703,  2013 => 702,  2011 => 701,  2006 => 698,  2001 => 695,  1996 => 693,  1993 => 692,  1988 => 689,  1972 => 682,  1964 => 676,  1962 => 675,  1957 => 673,  1952 => 671,  1946 => 667,  1923 => 662,  1915 => 661,  1899 => 660,  1884 => 659,  1872 => 652,  1869 => 651,  1867 => 650,  1862 => 649,  1859 => 648,  1851 => 646,  1849 => 645,  1846 => 644,  1838 => 642,  1832 => 640,  1830 => 639,  1821 => 638,  1818 => 637,  1814 => 635,  1806 => 634,  1803 => 633,  1794 => 632,  1790 => 631,  1787 => 630,  1784 => 629,  1781 => 628,  1778 => 627,  1775 => 626,  1769 => 624,  1767 => 623,  1761 => 622,  1750 => 618,  1744 => 617,  1740 => 616,  1736 => 615,  1733 => 614,  1716 => 613,  1709 => 610,  1706 => 609,  1695 => 605,  1690 => 604,  1682 => 601,  1679 => 600,  1677 => 599,  1674 => 598,  1671 => 597,  1667 => 595,  1654 => 593,  1650 => 592,  1646 => 590,  1644 => 589,  1640 => 587,  1637 => 586,  1626 => 584,  1621 => 583,  1618 => 582,  1612 => 579,  1609 => 578,  1603 => 576,  1594 => 572,  1589 => 570,  1569 => 553,  1561 => 548,  1556 => 546,  1552 => 544,  1547 => 541,  1539 => 536,  1534 => 534,  1527 => 530,  1521 => 528,  1519 => 527,  1512 => 523,  1507 => 520,  1505 => 519,  1499 => 516,  1496 => 515,  1487 => 513,  1483 => 512,  1478 => 510,  1474 => 509,  1470 => 507,  1467 => 506,  1463 => 504,  1459 => 502,  1451 => 500,  1448 => 499,  1440 => 497,  1438 => 496,  1432 => 494,  1429 => 493,  1422 => 491,  1411 => 489,  1407 => 488,  1401 => 486,  1397 => 485,  1394 => 484,  1392 => 483,  1388 => 482,  1384 => 480,  1381 => 479,  1366 => 477,  1361 => 476,  1358 => 475,  1350 => 473,  1347 => 472,  1341 => 470,  1339 => 469,  1335 => 468,  1327 => 462,  1315 => 452,  1313 => 451,  1303 => 444,  1294 => 438,  1287 => 434,  1279 => 429,  1173 => 325,  1162 => 321,  1157 => 320,  1149 => 317,  1146 => 316,  1144 => 315,  1141 => 314,  1138 => 313,  1135 => 312,  1132 => 311,  1130 => 310,  1127 => 309,  1123 => 307,  1121 => 306,  1118 => 305,  1116 => 304,  1111 => 301,  1108 => 300,  1105 => 299,  1102 => 298,  1088 => 295,  1085 => 294,  1082 => 293,  1075 => 289,  1072 => 288,  1063 => 287,  1059 => 286,  1056 => 285,  1053 => 284,  1047 => 281,  1044 => 280,  1038 => 279,  1029 => 277,  1021 => 275,  1018 => 274,  1013 => 273,  1010 => 272,  1006 => 271,  1003 => 270,  1000 => 269,  994 => 265,  983 => 263,  979 => 262,  975 => 261,  969 => 258,  966 => 257,  963 => 256,  959 => 254,  953 => 253,  936 => 251,  926 => 250,  915 => 244,  910 => 242,  906 => 240,  903 => 239,  899 => 237,  893 => 236,  881 => 231,  872 => 229,  867 => 228,  864 => 227,  850 => 222,  841 => 220,  836 => 219,  833 => 218,  819 => 213,  810 => 211,  805 => 210,  802 => 209,  794 => 206,  786 => 205,  780 => 204,  775 => 203,  772 => 202,  760 => 199,  752 => 198,  747 => 197,  744 => 196,  732 => 193,  724 => 192,  719 => 191,  716 => 190,  711 => 187,  704 => 185,  697 => 183,  690 => 182,  676 => 180,  674 => 179,  664 => 178,  661 => 177,  657 => 176,  653 => 175,  647 => 174,  642 => 173,  639 => 172,  633 => 168,  626 => 166,  618 => 164,  604 => 162,  602 => 161,  592 => 160,  589 => 159,  585 => 158,  581 => 157,  575 => 156,  570 => 155,  567 => 154,  562 => 151,  551 => 148,  542 => 147,  538 => 146,  534 => 145,  528 => 144,  520 => 143,  515 => 142,  512 => 141,  508 => 140,  504 => 138,  501 => 137,  498 => 136,  489 => 135,  485 => 133,  472 => 131,  468 => 130,  462 => 128,  460 => 127,  457 => 126,  451 => 124,  443 => 122,  441 => 121,  433 => 120,  430 => 119,  427 => 118,  421 => 115,  417 => 113,  414 => 112,  411 => 111,  409 => 110,  406 => 109,  404 => 108,  401 => 107,  398 => 106,  389 => 105,  380 => 104,  377 => 103,  369 => 101,  366 => 100,  358 => 98,  355 => 97,  347 => 95,  344 => 94,  336 => 92,  333 => 91,  325 => 89,  322 => 88,  314 => 86,  311 => 85,  303 => 83,  300 => 82,  292 => 80,  289 => 79,  281 => 77,  278 => 76,  268 => 74,  265 => 73,  257 => 71,  254 => 70,  246 => 68,  244 => 67,  239 => 64,  236 => 63,  232 => 61,  229 => 60,  214 => 58,  209 => 57,  207 => 56,  197 => 55,  194 => 54,  191 => 53,  187 => 51,  179 => 49,  176 => 48,  168 => 46,  166 => 45,  163 => 44,  160 => 43,  149 => 40,  142 => 39,  137 => 38,  135 => 37,  126 => 35,  120 => 34,  117 => 33,  115 => 32,  112 => 31,  109 => 30,  107 => 29,  101 => 26,  96 => 24,  92 => 23,  87 => 22,  84 => 21,  81 => 20,  78 => 19,  75 => 18,  72 => 17,  69 => 16,  66 => 15,  63 => 14,  59 => 11,  53 => 10,  50 => 9,  43 => 8,  35 => 6,  32 => 5,  28 => 4,  24 => 3,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="product" class="container">*/
/* 	<ul class="breadcrumb mobile {{ menu_expanded ? 'col-md-offset-3 col-lg-offset-3 col-xxl-offset-4' }}">*/
/* 		{% for key, breadcrumb in breadcrumbs %}*/
/* 			{% if key + 1 < breadcrumbs|length %}*/
/* 				<li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/* 			{% else %}*/
/* 				{% if not hide_last_breadcrumb or (hide_last_breadcrumb and key == 1) %}<li>{{ breadcrumb.text }}</li>{% endif %}*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 	</ul>*/
/* 	<div class="row">*/
/* 		{# column_left #}*/
/* 		{% if column_left and column_right %}*/
/* 			{% set class = 'col-sm-4 col-md-6 col-lg-6 col-xxl-12' %}*/
/* 		{% elseif column_left or column_right %}*/
/* 			{% set class = 'col-sm-8 col-md-9 col-lg-9 col-xxl-16' %}*/
/* 		{% else %}*/
/* 			{% set class = 'col-sm-12' %}*/
/* 		{% endif %}*/
/* 		{% set class = 'col-sm-12' %}*/
/* 		<div id="content" class="{{ class }}">*/
/* 			{{ content_top }}*/
/* 			<div class="heading-h1"><h1>{{ heading_title }}</h1></div>*/
/* 			<div class="row">*/
/* 				<div class="product-page {{ product_banners and product_banner_position == 1 ? 'col-sm-12 col-md-12 col-lg-10' : 'col-xs-12' }}">*/
/* 					<div class="row">*/
/* 						<div class="product-page__image col-sm-6">*/
/* 							{% if thumb or images %}*/
/* 								{% if thumb %}*/
/* 									<div class="product-page__image-main uni-item">*/
/* 										{% include 'unishop2/template/extension/module/uni_stickers.twig' %}*/
/* 										<div class="product-page__image-main-carousel">*/
/* 											<a class="product-page__image-main-a" href="{{ popup }}" title="{{ heading_title }}">*/
/* 												<img src="{{ thumb }}" alt="{{ heading_title }}" class="img-responsive" height="{{ thumb_height }}" />*/
/* 											</a>*/
/* 											{% if images %}*/
/* 												{% for image in images %}*/
/* 													<a class="product-page__image-main-a" href="{{ image.popup }}" title="{{ heading_title }}">*/
/* 														<img src="data:image/gif;base64,R0lGODlhAQABAIABAP///wAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ image.small }}" alt="{{ heading_title }}" class="img-responsive owl-lazy" />*/
/* 													</a>*/
/* 												{% endfor %}*/
/* 											{% endif %}*/
/* 										</div>*/
/* 										{% if not wishlist_btn_disabled %}*/
/* 											<button type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add({{ product_id }});" class="product-page__wishlist-btn wishlist"><i class="fa fa-heart"></i></button>*/
/* 										{% endif %}*/
/* 										{% if not compare_btn_disabled %}*/
/* 											<button type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add({{ product_id }});" class="product-page__compare-btn compare"><i class="fas fa-align-right"></i></button>*/
/* 										{% endif %}*/
/* 									</div>*/
/* 								{% endif %}*/
/* 								{% if images %}*/
/* 									<div class="product-page__image-addit owl-carousel">*/
/* 										<img src="{{ small }}" alt="{{ heading_title }}" class="product-page__image-addit-img selected img-responsive" data-thumb="{{ thumb }}" data-full="{{ popup }}" />*/
/* 										{% if images %}*/
/* 											{% for image in images %}*/
/* 												<img src="data:image/gif;base64,R0lGODlhAQABAIABAP///wAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{ image.thumb }}" alt="{{ heading_title }}" class="product-page__image-addit-img img-responsive owl-lazy" data-thumb="{{ image.small }}" data-full="{{ image.popup }}" />*/
/* 											{% endfor %}*/
/* 										{% endif %}*/
/* 									</div>*/
/* 								{% endif %}*/
/* 							{% endif %}*/
/* 						</div>*/
/* 						<div class="col-sm-6 product-block">*/
/* 							<div class="product-data">*/
/* 								{% if show_model %}*/
/* 									<div class="product-data__item model"><div class="product-data__item-div"><span class="product-data__item-span">{{ text_model }}</span></div> {{ model }}</div>*/
/* 								{% endif %}*/
/* 								{% if sku %}*/
/* 									<div class="product-data__item sku"><div class="product-data__item-div"><span class="product-data__item-span">{{ text_sku }}:</span></div> {{ sku }}</div>*/
/* 								{% endif %}*/
/* 								{% if show_manuf and manufacturer %}*/
/* 									<div class="product-data__item manufacturer"><div class="product-data__item-div"><span class="product-data__item-span">{{ text_manufacturer }}</span></div><a href="{{ manufacturers }}">{{ manufacturer }}</a></div>*/
/* 								{% endif %}*/
/* 								{% if location %}*/
/* 									<div class="product-data__item location"><div class="product-data__item-div"><span class="product-data__item-span">{{ text_location }}:</span></div> {{ location }}</div>*/
/* 								{% endif %}*/
/* 								{% if reward and show_reward == 1 or show_reward == 3 %}*/
/* 									<div class="product-data__item reward"><div class="product-data__item-div"><span class="product-data__item-span">{{ text_reward }}</span></div> {{ reward }}</div>*/
/* 								{% endif %}*/
/* 								{% if points and show_reward == 2 or show_reward == 3 %}*/
/* 									<div class="product-data__item points"><div class="product-data__item-div"><span class="product-data__item-span">{{ text_points }}</span></div> {{ points }}</div>*/
/* 								{% endif %}*/
/* 								{% if upc %}*/
/* 									<div class="product-data__item upc"><div class="product-data__item-div"><span class="product-data__item-span">{{ text_upc }}:</span></div> {{ upc }}</div>*/
/* 								{% endif %}*/
/* 								{% if ean %}*/
/* 									<div class="product-data__item ean"><div class="product-data__item-div"><span class="product-data__item-span">{{ text_ean }}:</span></div> {{ ean }}</div>*/
/* 								{% endif %}*/
/* 								{% if jan %}*/
/* 									<div class="product-data__item jan"><div class="product-data__item-div"><span class="product-data__item-span">{{ text_jan }}:</span></div> {{ jan }}</div>*/
/* 								{% endif %}*/
/* 								{% if isbn %}*/
/* 									<div class="product-data__item isbn"><div class="product-data__item-div"><span class="product-data__item-span">{{ text_isbn }}:</span></div> {{ isbn }}</div>*/
/* 								{% endif %}*/
/* 								{% if mpn %}*/
/* 									<div class="product-data__item mpn"><div class="product-data__item-div"><span class="product-data__item-span">{{ text_mpn }}:</span></div> {{ mpn }}</div>*/
/* 								{% endif %}*/
/* 								{% if not product.quantity_indicator %}*/
/* 									<div class="product-data__item stock"><div class="product-data__item-div"><span class="product-data__item-span">{{ text_stock }}</span></div> {{ stock }}</div>*/
/* 								{% endif %}*/
/* 								{% if show_length == 1 %}*/
/* 									{% if length %}<div class="product-data__item length"><div class="product-data__item-div"><span class="product-data__item-span">{{ text_length }}</span></div> {{ length }}</div>{% endif %}*/
/* 									{% if weight %}<div class="product-data__item weight"><div class="product-data__item-div"><span class="product-data__item-span">{{ text_weight }}</span></div> {{ weight }}</div>{% endif %}*/
/* 								{% endif %}*/
/* 							</div>*/
/* 							{% if product.quantity_indicator %}*/
/* 								<hr />*/
/* 								{% include 'unishop2/template/extension/module/uni_quantity_indicator.twig' %}*/
/* 							{% endif %}*/
/* 							{% if product.show_timer %}*/
/* 								<hr />*/
/* 								<div class="product-page__timer">*/
/* 									<div class="product-page__timer-heading">{{ text_special_timer }}</div>*/
/* 								</div>*/
/* 							{% endif %}*/
/* 							{% if price %}*/
/* 								<hr />*/
/* 								<div class="product-page__price price" data-price="{{ price_value }}" data-special="{{ special_value }}" data-discount="{{ discounts_value }}">*/
/* 									{% if special %}*/
/* 										<span class="price-old">{{ price }}</span><span class="price-new">{{ special }}</span>*/
/* 									{% else %}*/
/* 										{{ price }}*/
/* 									{% endif %}*/
/* 								</div>*/
/* 								{% if discounts %}*/
/* 									<!-- <h5 class="heading"><span>{{ text_new_discount }}</span></h5> -->*/
/* 									<div class="product-page__discount">*/
/* 										{% for discount in discounts %}*/
/* 											<div class="product-page__discount-item">{{ discount.quantity }} {{ text_discount }} - {{ discount.price }}</div>*/
/* 										{% endfor %}*/
/* 									</div>*/
/* 								{% endif %}*/
/* 								{% if tax %}<div class="price-tax">{{ text_tax }} {{ tax }}</div>{% endif %}*/
/* 							{% endif %}*/
/* 							{% if options %}*/
/* 								<hr />*/
/* 								<div class="product-page__option option row">*/
/* 									{% for option in options %}*/
/* 										{% if option.type == 'select' %}*/
/* 											<div class="{{ option.required ? 'required' }} option__group col-md-6">*/
/* 												<label class="option__group-name" for="input-option{{ option.product_option_id }}">{{ option.required ? '*' }} {{ option.name }}:</label>*/
/* 												<select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id }}" class="option__select form-control">*/
/* 													<option value="">{{ text_select }}</option>*/
/* 													{% for option_value in option.product_option_value %}*/
/* 														<option value="{{ option_value.product_option_value_id }}" data-prefix="{{ option_value.price_prefix }}" data-price="{{ option_value.price_value }}">*/
/* 															{{ option_value.name }} {{ option_value.price ? '(' ~ option_value.price_prefix ~ '' ~ option_value.price ~ ')' }}*/
/* 														</option>*/
/* 													{% endfor %}*/
/* 												</select>*/
/* 											</div>*/
/* 										{% endif %}*/
/* 										{% if option.type == 'radio' %}*/
/* 											<div class="{{ option.required ? 'required' }} option__group col-xs-12">*/
/* 												<label class="option__group-name">{{ option.required ? '*' }} {{ option.name }}:</label>*/
/* 												<div id="input-option{{ option.product_option_id }}">*/
/* 													{% for option_value in option.product_option_value %}*/
/* 														<label class="option__item">*/
/* 															<input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}" data-prefix="{{ option_value.price_prefix }}" data-price="{{ option_value.price_value }}" class="hidden" />*/
/* 															{% if option_value.image %}*/
/* 																<img src="{{ option_value.image }}" alt="{{ option_value.name }} {{ option_value.price ? option_value.price_prefix ~ '' ~ option_value.price }}" data-type="product" data-thumb="{{ option_value.small }}" data-full="{{ option_value.full }}" class="option__img" />*/
/* 															{% else %}*/
/* 																<span class="option__name" {{ option_value.price ? 'data-toggle="tooltip" title="'~option_value.price_prefix~' '~option_value.price~'"' }}>{{ option_value.name }}</span>*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													{% endfor %}*/
/* 													<div class="clearfix"></div>*/
/* 												</div>*/
/* 											</div>*/
/* 										{% endif %}*/
/* 										{% if option.type == 'checkbox' %}*/
/* 											<div class="{{ option.required ? 'required' }} option__group col-xs-12">*/
/* 												<label class="option__group-name">{{ option.required ? '*' }} {{ option.name }}:</label>*/
/* 												<div id="input-option{{ option.product_option_id }}">*/
/* 													{% for option_value in option.product_option_value %}*/
/* 														<label class="option__item">*/
/* 															<input type="checkbox" name="option[{{ option.product_option_id }}][]" value="{{ option_value.product_option_value_id }}" data-prefix="{{ option_value.price_prefix }}" data-price="{{ option_value.price_value }}" class="hidden" />*/
/* 															{% if option_value.image %}*/
/* 																<img src="{{ option_value.image }}" alt="{{ option_value.name }} {{ option_value.price ? option_value.price_prefix ~ '' ~ option_value.price }}" data-type="product" data-thumb="{{ option_value.small }}" data-full="{{ option_value.full }}" class="option__img" />*/
/* 															{% else %}*/
/* 																<!-- <span class="option__name">{{ option_value.name }} {{ option_value.price ? '(' ~ option_value.price_prefix ~ '' ~ option_value.price ~ ')' }}</span> -->*/
/* 																<span class="option__name" {{ option_value.price ? 'data-toggle="tooltip" title="'~option_value.price_prefix~' '~option_value.price~'"' }}>{{ option_value.name }}</span>*/
/* 															{% endif %}*/
/* 														</label>*/
/* 													{% endfor %}*/
/* 												</div>*/
/* 											</div>*/
/* 										{% endif %}*/
/* 										{% if option.type == 'text' %}*/
/* 											<div class="form-group {{ option.required ? 'required' }} col-xs-12">*/
/* 												<label class="option__group-name" for="input-option{{ option.product_option_id }}">{{ option.required ? '*' }} {{ option.name }}</label>*/
/* 												<input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/* 											</div>*/
/* 										{% endif %}*/
/* 										{% if option.type == 'textarea' %}*/
/* 											<div class="form-group {{ option.required ? 'required' }} col-xs-12">*/
/* 												<label class="option__group-name" for="input-option{{ option.product_option_id }}">{{ option.required ? '*' }} {{ option.name }}</label>*/
/* 												<textarea name="option[{{ option.product_option_id }}]" rows="5" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control">{{ option.value }}</textarea>*/
/* 											</div>*/
/* 										{% endif %}*/
/* 										{% if option.type == 'file' %}*/
/* 											<div class="form-group {{ option.required ? 'required' }} col-xs-12">*/
/* 												<label class="option__group-name">{{ option.required ? '*' }} {{ option.name }}</label>*/
/* 												<button type="button" id="button-upload{{ option.product_option_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default btn-block"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/* 												<input type="hidden" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}" />*/
/* 											</div>*/
/* 										{% endif %}*/
/* 										{% if option.type == 'date' %}*/
/* 											<div class="form-group {{ option.required ? 'required' }} col-xs-12">*/
/* 												<label class="option__group-name" for="input-option{{ option.product_option_id }}">{{ option.required ? '*' }} {{ option.name }}</label>*/
/* 												<div class="input-group date">*/
/* 													<input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD" data-locale="{{ datepicker }}" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/* 													<span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button></span>*/
/* 												</div>*/
/* 											</div>*/
/* 										{% endif %}*/
/* 										{% if option.type == 'datetime' %}*/
/* 											<div class="form-group {{ option.required ? 'required' }} col-xs-12">*/
/* 												<label class="option__group-name" for="input-option{{ option.product_option_id }}">{{ option.required ? '*' }} {{ option.name }}</label>*/
/* 												<div class="input-group datetime">*/
/* 													<input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm" data-locale="{{ datepicker }}" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/* 													<span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span>*/
/* 												</div>*/
/* 											</div>*/
/* 										{% endif %}*/
/* 										{% if option.type == 'time' %}*/
/* 											<div class="form-group {{ option.required ? 'required' }} col-xs-12">*/
/* 												<label class="option__group-name" for="input-option{{ option.product_option_id }}">{{ option.required ? '*' }} {{ option.name }}</label>*/
/* 												<div class="input-group time">*/
/* 													<input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="HH:mm" id="input-option{{ option.product_option_id }}" class="form-control" />*/
/* 													<span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span>*/
/* 												</div>*/
/* 											</div>*/
/* 										{% endif %}*/
/* 									{% endfor %}*/
/* 								</div>*/
/* 							{% endif %}*/
/* 							{% if price %}*/
/* 								<hr style="margin-top:0" />*/
/* 								<div class="product-page__cart">*/
/* 									<input type="hidden" name="product_id" value="{{ product_id }}" />*/
/* 									<div class="qty-switch">*/
/* 										<input type="text" name="quantity" value="{{ minimum }}" data-minimum="{{ minimum }}" id="input-quantity" class="qty-switch__input form-control" />*/
/* 										<div>*/
/* 											<i class="qty-switch__btn fa fa-plus btn-default"></i>*/
/* 											<i class="qty-switch__btn fa fa-minus btn-default"></i>*/
/* 										</div>*/
/* 									</div>*/
/* 									<button type="button" class="product-page__add-to-cart add_to_cart btn btn-lg {{ cart_btn_class }}" data-pid="{{ product_id }}" id="button-cart"><i class="{{ cart_btn_icon }}"></i><span>{{ cart_btn_text }}</span></button>*/
/* 									<button type="button" class="product-page__quick-order quick-order btn btn-lg {{ quick_order is empty ? 'hidden' }}" data-toggle="tooltip" title="{{ quick_order_title }}" onclick="quick_order('{{ product_id }}');"><i class="{{ quick_order_icon }}"></i>{% if show_quick_order_text_product %}<span class="hidden-xs hidden-sm">{{ quick_order_title }}</span>{% endif %}</button>*/
/* 								</div>*/
/* 								{% if minimum > 1 %}<div class="product-page__minimum"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>{% endif %}*/
/* 								<hr style="margin-bottom:15px" />*/
/* 							{% endif %}*/
/* 							{% if recurrings %}*/
/* 								<hr>*/
/* 								<h3>{{ text_payment_recurring }}</h3>*/
/* 								<div class="form-group required">*/
/* 									<select name="recurring_id" class="form-control">*/
/* 										<option value="">{{ text_select }}</option>*/
/* 										{% for recurring in recurrings %}*/
/* 											<option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/* 										{% endfor %}*/
/* 									</select>*/
/* 									<div class="help-block" id="recurring-description"></div>*/
/* 								</div>*/
/* 							{% endif %}*/
/* 							{% if show_attr and attribute_groups %}*/
/* 								<div class="product-data">*/
/* 									{% for key, attribute_group in attribute_groups %}*/
/* 										{% if key < show_attr_group %}*/
/* 											{% for key, attribute in attribute_group.attribute %}*/
/* 												{% if key < show_attr_item %}*/
/* 													<div class="product-data__item"><div class="product-data__item-div"><span class="product-data__item-span">{{ attribute.name }}</span></div> {{ attribute.text }}</div>*/
/* 												{% endif %}*/
/* 											{% endfor %}	*/
/* 										{% endif %}*/
/* 									{% endfor %}*/
/* 								</div>*/
/* 								<a class="product-page__more-attr" onclick="$('a[href=\'#tab-specification\']').click(); scroll_to('#tab-specification'); return false;">{{ text_all_attributes }}</a>*/
/* 								<hr />*/
/* 							{% endif %}*/
/* 							{% if review_status %}*/
/* 								<div class="product-page__rating rating">*/
/* 									{% for i in 1..5 %}*/
/* 										<i class="{{ rating < i ? 'far' : 'fa' }} fa-star"></i>*/
/* 									{% endfor %}							*/
/* 									&nbsp;&nbsp;<a onclick="$('a[href=\'#tab-review\']').click(); scroll_to('#tab-review'); return false;" class="product-page__rating-a">{{ reviews }}</a>*/
/* 									<hr />*/
/* 								</div>*/
/* 							{% endif %}*/
/* 							{% if socialbutton %}*/
/* 								<div class="product-page__share">*/
/* 									<div id="goodshare" data-socials="{% for i, social in socialbutton %}{{ social }}{{ i + 1 < socialbutton|length ? ',' }}{% endfor %}"></div>*/
/* 								</div>*/
/* 							{% endif %}*/
/* 							{% if product_banners and product_banner_position == 2 %}*/
/* 								{% include 'unishop2/template/extension/module/uni_product_banner.twig' %}*/
/* 							{% endif %}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				{% if product_banners and product_banner_position == 1 %}*/
/* 					<div class="col-sm-12 col-md-12 col-lg-2">*/
/* 						{% include 'unishop2/template/extension/module/uni_product_banner.twig' %}*/
/* 					</div>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 			{% if product_banners and product_banner_position == 3 %}*/
/* 				{% include 'unishop2/template/extension/module/uni_product_banner.twig' %}*/
/* 			{% endif %}*/
/* 			{% if manufacturer_descr and manufacturer_position %}*/
/* 				<div class="product-manuf">*/
/* 					{% if manufacturer_descr.image %}*/
/* 						<div class="product-manuf__image">*/
/* 							<img src="{{ manufacturer_descr.image }}" alt="{{ manufacturer_descr.name }}" class="img-responsive"/>*/
/* 						</div>*/
/* 					{% endif %}*/
/* 						<h4 class="product-manuf__name">{{ manufacturer_descr.name }}</h4>*/
/* 						{{ manufacturer_descr.description }}... <a href="{{ manufacturer_descr.href }}" title="" >{{ text_manufacturer_more }}</a>*/
/* 				</div>*/
/* 				<div class="clearfix"></div>*/
/* 			{% endif %}*/
/* 			*/
/* 			<script>*/
/* 				let img_array = [], */
/* 					elemA = '.product-page__image-main-a', */
/* 					elemImg = '.product-page__image-main-a img',*/
/* 					elemAddit = '.product-page__image-addit',*/
/* 					elemAdditImg = '.product-page__image-addit-img',*/
/* 					elemMain = '.product-page__image-main-carousel',*/
/* 					options_img;*/
/* 					*/
/* 				function productPageCarousel() {				*/
/* 					if($(elemAddit).length) {*/
/* 						$(elemMain).addClass('owl-carousel').owlCarousel({*/
/* 							items:1,*/
/* 							dots:false,*/
/* 							lazyLoad:true,*/
/* 							mouseDrag:false,*/
/* 							onDragged: function (event) {*/
/* 								$(elemAddit).trigger('to.owl.carousel', [event.item.index]);*/
/* 								imgDataReplace(event.item.index);*/
/* 							}*/
/* 						});*/
/* 				*/
/* 						$(elemAddit).owlCarousel({*/
/* 							responsive:{0:{items:4}, 1050:{items:6 }},*/
/* 							responsiveBaseElement:$(this),*/
/* 							dots:false,*/
/* 							lazyLoad:true,*/
/* 							lazyLoadEager:1,*/
/* 							mouseDrag:false,*/
/* 							loop:false,*/
/* 							nav:true,*/
/* 							navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],*/
/* 							onRefreshed: function(event) {*/
/* 								//if($('.product-page__option .option__img').length) {*/
/* 								if (typeof(getPoipProduct) === 'function') {*/
/* 									let html = '';*/
/* 									setTimeout(function() {*/
/* 										$(elemAdditImg).each(function() {*/
/* 											html += '<a class="product-page__image-main-a" href="'+$(this).data('full')+'" title="'+$(this).attr('alt')+'">';*/
/* 											html += '<img src="'+$(this).data('thumb')+'" alt="'+$(this).attr('alt')+'" class="img-responsive">';*/
/* 											html += '</a>';*/
/* 										});*/
/* 						*/
/* 										$(elemMain).trigger('replace.owl.carousel', html).trigger('refresh.owl.carousel').trigger('to.owl.carousel', [0, 250]);*/
/* 									}, 200);*/
/* 								}*/
/* 							}*/
/* 						});*/
/* 	*/
/* 						$('html body').on('click mouseover', elemAdditImg, function() {*/
/* 							$(elemMain).trigger('to.owl.carousel', [$(this).parent().index(), 250]);*/
/* 							imgDataReplace($(this).parent().index())*/
/* 						});*/
/* 					}*/
/* 				}*/
/* 				*/
/* 				productPageCarousel();*/
/* 				*/
/* 				let observer = new MutationObserver(function(e) {*/
/* 					productPageCarousel();*/
/* 				});*/
/* */
/* 				observer.observe($('.product-page__image')[0], {childList:true});*/
/* 				*/
/* 				function imgDataReplace(indx) {*/
/* 					let el = $(elemAddit).find('.owl-item:eq('+indx+') img');*/
/* 						*/
/* 					$(elemAdditImg).addClass('selected').not(el).removeClass('selected');*/
/* 						*/
/* 					options_img = false;*/
/* 						*/
/* 					if(indx == 0) {*/
/* 						$(elemA).first().attr('href', el.data('full'));*/
/* 						$(elemImg).first().attr('src', el.data('thumb'));*/
/* 					}*/
/* 				}*/
/* 				*/
/* 				$(function() {*/
/* 					$('html body').on('click', elemA, function(e) {*/
/* 						e.preventDefault();*/
/* 		*/
/* 						let img_indx = 0,*/
/* 							img_array = [];*/
/* 						*/
/* 						if($(elemAdditImg+'.selected').length) {*/
/* 							img_indx = $(elemAdditImg+'.selected').parent().index();*/
/* 						}*/
/* 					*/
/* 						if(!options_img) {*/
/* 							$(elemAdditImg).each(function() {*/
/* 								img_array.push({src:$(this).data('full'), type:'image', title:$(this).attr('alt')});*/
/* 							});*/
/* 						}*/
/* 		*/
/* 						if(img_array.length == 0) {*/
/* 							img_array.push({src:$(elemA).attr('href'), type:'image', title:$(elemImg).attr('alt')});*/
/* 						}*/
/* 		*/
/* 						$.magnificPopup.open({*/
/* 							items:img_array,*/
/* 							gallery:{*/
/* 								enabled:true,*/
/* 							},*/
/* 							removalDelay:{{ uni_popup_img_effect_in != 'animated disabled' ? 800 : 0 }},*/
/* 							callbacks:{*/
/* 								open:function() {*/
/* 									var $this = this;*/
/* 		*/
/* 									$this.content.addClass('{{ uni_popup_img_effect_in }}');*/
/* 									$('html body').addClass('magnific-open');*/
/* 					*/
/* 									setTimeout(function() { */
/* 										$this.content.removeClass('{{ uni_popup_img_effect_in }}');*/
/* 									}, 850);*/
/* 					*/
/* 									$this.goTo(img_indx);*/
/* 								},*/
/* 								beforeClose:function() {*/
/* 									this.content.addClass('{{ uni_popup_img_effect_out }}');*/
/* 									$('html body').removeClass('magnific-open');*/
/* 								}*/
/* 							},*/
/* 						});*/
/* 					});*/
/* */
/* 					{% if change_opt_img_p %}*/
/* 						$('.product-page input[type="radio"] + .option__img').on('click', function() {*/
/* 							$(elemA).first().attr('href', $(this).data('full'));*/
/* 							$(elemImg).first().attr('src', $(this).data('thumb'));*/
/* 					*/
/* 							options_img = true;*/
/* 					*/
/* 							$(elemAdditImg).removeClass('selected');*/
/* 							$(elemMain).trigger('to.owl.carousel', [0, 250]);*/
/* 						});*/
/* 					{% endif %}*/
/* 				});*/
/* 			</script>*/
/* 			*/
/* 			<div class="hidden-xs hidden-sm" style="height:20px"></div>*/
/* 			*/
/* 			<ul class="nav nav-tabs">*/
/* 				<li class="active"><a href="#tab-description" data-toggle="tab"><i class="fas fa-file-alt" aria-hidden="true"></i>{{ tab_description }}</a></li>*/
/* 				{% if attribute_groups %}*/
/* 					<li><a href="#tab-specification" data-toggle="tab"><i class="fa fa-list-alt" aria-hidden="true"></i>{{ tab_attribute }}</a></li>*/
/* 				{% endif %}*/
/* 				{% if review_status %}*/
/* 					<li><a href="#tab-review" class="tab-review" data-toggle="tab"><i class="fas fa-comments" aria-hidden="true"></i>{{ tab_review }} {{ review_total ? '<span>'~review_total~'</span>' }}</a></li>*/
/* 				{% endif %}*/
/* 				{% if uni_product_tabs %}*/
/* 					{% for tab in uni_product_tabs %}*/
/* 						<li><a href="#tab-{{ tab.id }}" class="tab-{{ tab.id }}" data-toggle="tab"><i class="{{ tab.icon }}"></i>{{ tab.title }} <span class="hidden"></span></a></li>*/
/* 					{% endfor %}*/
/* 				{% endif %}*/
/* 			</ul>*/
/* 			<div class="tab-content">*/
/* 				<div class="tab-pane active" id="tab-description">{{ description }}</div>*/
/* 				{% if attribute_groups %}*/
/* 					<div class="tab-pane" id="tab-specification">*/
/* 						{% for attribute_group in attribute_groups %}*/
/* 							<h4 class="heading"><span>{{ attribute_group.name }}</span></h4>*/
/* 							<div class="product-data">*/
/* 								{% for attribute in attribute_group.attribute %}*/
/* 									<div class="product-data__item"><div class="product-data__item-div"><span class="product-data__item-span">{{ attribute.name }}</span></div> {{ attribute.text }}</div>*/
/* 								{% endfor %}*/
/* 							</div>*/
/* 						{% endfor %}*/
/* 						{% if show_length == 2 %}*/
/* 							<h4 class="heading"><span>{{ entry_length_weigth }}</span></h4>*/
/* 							<div class="product-data">*/
/* 								{% if length %}*/
/* 									<div class="product-data__item length"><div class="product-data__item-div"><span class="product-data__item-span">{{ text_length }}</span></div> {{ length }}</div>*/
/* 								{% endif %}*/
/* 								{% if weight %}*/
/* 									<div class="product-data__item weight"><div class="product-data__item-div"><span class="product-data__item-span">{{ text_weight }}</span></div> {{ weight }}</div>*/
/* 								{% endif %}*/
/* 							</div>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 				{% endif %}*/
/* 				{% if review_status %}*/
/* 					<div class="tab-pane" id="tab-review">*/
/* 						<div class="review-info">*/
/* 							<div class="review-info__total">{{ text_review_total }}</div>*/
/* 							<div class="review-info__score hidden-xs">{{ text_review_score }}</div>*/
/* 							<div class="review-info__rating rating hidden-xs">*/
/* 								{% for i in 1..5 %}*/
/* 									<i class="{{ rating < i ? 'far' : 'fa' }} fa-star"></i>*/
/* 								{% endfor %}*/
/* 							</div>*/
/* 							<button class="btn btn-sm btn-primary" onclick="$('#form-review').collapse('toggle');">{{ text_write }}</button>*/
/* 						</div>*/
/* 						<form class="form-horizontal collapse" id="form-review">*/
/* 							{% if review_guest %}*/
/* 								<div class="rev_form well well-sm">*/
/* 									<div class="form-group required">*/
/* 										<div class="col-sm-12">*/
/* 											<label class="control-label" for="input-name">{{ entry_name }}</label>*/
/* 											<input type="text" name="name" value="" id="input-name" class="form-control" />*/
/* 										</div>*/
/* 									</div>*/
/* 									{% if show_plus_minus_review %}*/
/* 										<div class="form-group {{ plus_minus_review_required ? 'required' }}">*/
/* 											<div class="col-sm-12">*/
/* 												<label class="control-label" for="input-review-plus">{{ entry_plus }}</label>*/
/* 												<textarea name="plus" rows="5" id="input-review-plus" class="form-control"></textarea>*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group {{ plus_minus_review_required ? 'required' }}">*/
/* 											<div class="col-sm-12">*/
/* 												<label class="control-label" for="input-review-minus">{{ entry_minus }}</label>*/
/* 												<textarea name="minus" rows="5" id="input-review-minus" class="form-control"></textarea>*/
/* 											</div>*/
/* 										</div>*/
/* 									{% else %}*/
/* 										<input type="hidden" name="plus" value="" />*/
/* 										<input type="hidden" name="minus" value="" />*/
/* 									{% endif %}*/
/* 									<div class="form-group required">*/
/* 										<div class="col-sm-12">*/
/* 											<label class="control-label" for="input-review">{{ entry_review }}</label>*/
/* 											<textarea name="text" rows="5" id="input-review" class="form-control"></textarea>*/
/* 											<div class="help-block">{{ text_note }}</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group required">*/
/* 										<div class="col-sm-12">*/
/* 											<label class="control-label">{{ entry_rating }}</label>*/
/* 											<div class="review-star">*/
/* 												<input type="radio" name="rating" value="1" class="review-star__input" />*/
/* 												<input type="radio" name="rating" value="2" class="review-star__input" />*/
/* 												<input type="radio" name="rating" value="3" class="review-star__input" />*/
/* 												<input type="radio" name="rating" value="4" class="review-star__input" />*/
/* 												<input type="radio" name="rating" value="5" class="review-star__input" />*/
/* 												<div class="review-star__stars rating">*/
/* 													<i class="review-star__star far fa-star"></i>*/
/* 													<i class="review-star__star far fa-star"></i>*/
/* 													<i class="review-star__star far fa-star"></i>*/
/* 													<i class="review-star__star far fa-star"></i>*/
/* 													<i class="review-star__star far fa-star"></i>*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									{{ captcha }}*/
/* 									<div class="text-right clearfix">*/
/* 										<button type="button" id="button-review" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ add_new_review }}</button>*/
/* 									</div>*/
/* 								</div>*/
/* 							{% else %}*/
/* 								{{ text_login }}*/
/* 							{% endif %}*/
/* 						</form>*/
/* 						<div id="review">{{ uni_reviews }}</div>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 				{% if uni_product_tabs %}*/
/* 					{% for tab in uni_product_tabs %}*/
/* 						<div class="tab-pane" id="tab-{{ tab.id }}">{{ tab.description }}</div>*/
/* 					{% endfor %}*/
/* 				{% endif %}*/
/* 			</div>*/
/* 			<div class="clearfix" style="margin:0 0 30px"></div>*/
/* 			{% if tags %}*/
/* 				<div class="product-tag">*/
/* 					<i class="fa fa-tags"></i>*/
/* 					{% for i, tag in tags %}*/
/* 						<a class="product-tag__item uni-href" data-href="{{ tag.href }}" title="{{ tag.tag }}">{{ tag.tag }}</a>*/
/* 					{% endfor %}*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			{% if manufacturer_descr and not manufacturer_position %}*/
/* 				<div class="product-manuf">*/
/* 					{% if manufacturer_descr.image %}*/
/* 						<div class="product-manuf__image">*/
/* 							<img src="{{ manufacturer_descr.image }}" alt="{{ manufacturer_descr.name }}" class="img-responsive"/>*/
/* 						</div>*/
/* 					{% endif %}*/
/* 						<h4 class="product-manuf__name">{{ manufacturer_descr.name }}</h4>*/
/* 						{{ manufacturer_descr.description }}... <a href="{{ manufacturer_descr.href }}" title="" >{{ text_manufacturer_more }}</a>*/
/* 				</div>*/
/* 				<div class="clearfix"></div>*/
/* 			{% endif %}*/
/* 			{% if products %}*/
/* 				<div class="heading"><span>{{ text_related }}</span></div>*/
/* 				<div class="uni-module product-related">*/
/* 					<div class="uni-module__wrapper">*/
/* 						{% for product in products %}*/
/* 							<div class="product-thumb uni-item">*/
/* 								<div class="product-thumb__image" {{ product.special_date_end ? 'data-special-end="'~product.special_date_end~'"' }}>*/
/* 									{% include 'unishop2/template/extension/module/uni_stickers.twig' %}	*/
/* 									<a href="{{ product.href }}" title="{{ product.name }}">*/
/* 										<img src="{{ product.thumb }}" {{ product.additional_image ? 'data-additional="'~product.additional_image~'"' }} loading="lazy" alt="{{ product.name }}" class="img-responsive" />*/
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
/* 										{% if product.tax %}*/
/* 											<div class="price-tax">{{ text_tax }} {{ product.tax }}</div>*/
/* 										{% endif %}*/
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
/* 						{% endfor %}*/
/* 					</div>*/
/* 				</div>*/
/* 				<script>*/
/* 					$('.product-related').uniModules({*/
/* 						type:'{{ type_view is defined ? type_view : 'carousel' }}',*/
/* 						autoheight:['product-thumb__name', 'product-thumb__description', 'product-thumb__option'],*/
/* 						loop: {{ products|length > 4 ? 'true' : 'false' }}*/
/* 					});*/
/* 					{% if show_timer %}*/
/* 						$('.product-related .image').each(function() {*/
/* 							var date = $(this).data('special-end');*/
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
/* 					{% endif %}*/
/* 				</script>*/
/* 				<div style="height:10px;clear:both"></div>*/
/* 			{% endif %}*/
/* 				*/
/* 			{{ auto_related }}*/
/* 				*/
/* 			{{ content_bottom }}*/
/* 		</div>*/
/* 		{# column_right #}*/
/* 	</div>*/
/* </div>*/
/* <script>*/
/* 	{% if product.show_timer %}*/
/* 		$('.product-page__timer').uniTimer({*/
/* 			date :'{{ product.show_timer }}',*/
/* 			texts :['{{ text_special_day }}','{{ text_special_hour }}','{{ text_special_min }}','{{ text_special_sec }}']*/
/* 		});*/
/* 	{% endif %}*/
/* </script>*/
/* {% if socialbutton %}*/
/* 	<script defer async src="catalog/view/javascript/goodshare/goodshare.min.js"></script>*/
/* 	<link href="catalog/view/javascript/goodshare/goodshare.css" rel="stylesheet" media="screen" />*/
/* {% endif %}*/
/* <script>*/
/* 	dataLayer.push({*/
/* 		'ecommerce':{*/
/* 			'currencyCode':'{{ microdata.code }}',*/
/* 			'detail':{*/
/* 				'products':[{*/
/* 					'id': {{ product_id }}, */
/* 					'name': "{{ microdata.name }}", */
/* 					'brand': "{{ microdata.manufacturer }}", */
/* 					'category': "{{ microdata.category }}", */
/* 					'variant': '',*/
/* 					'price': {{ microdata.price }}*/
/* 				}]*/
/* 			}*/
/* 		}*/
/* 	});*/
/* 	*/
/* 	if (typeof(gtag) === 'function') {*/
/* 		gtag('event', 'view_item', {*/
/* 			"items": [{*/
/* 				'id': {{ product_id }}, */
/* 				'name': "{{ microdata.name }}", */
/* 				'brand': "{{ microdata.manufacturer }}", */
/* 				'category': "{{ microdata.category }}", */
/* 				'variant': '',*/
/* 				'price': {{ microdata.price }}*/
/* 			}]*/
/* 		});*/
/* 	}*/
/* 	*/
/* 	$('html body').on('click', '#button-cart:not(.disabled)', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=checkout/cart/add',*/
/* 			type: 'post',*/
/* 			data: $('.product-page input[type=\'text\'], .product-page input[type=\'hidden\'], .product-page input[type=\'radio\']:checked, .product-page input[type=\'checkbox\']:checked, .product-page select, .product-page textarea'),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				$('.text-danger').remove();*/
/* 				$('.form-group').removeClass('has-error');*/
/* 			*/
/* 				if (json['error']) {*/
/* 					if (json['error']['option']) {*/
/* 						for (i in json['error']['option']) {*/
/* 							var elem = $('.option #input-option' + i.replace('_', '-')), elem2 = (elem.parent().hasClass('input-group')) ? elem.parent() : elem;*/
/* 							*/
/* 							elem2.after('<div class="text-danger">'+json['error']['option'][i]+'</div>');*/
/* 							$('.option .text-danger').delay(5000).fadeOut();*/
/* 						}*/
/* 						*/
/* 						uniFlyAlert('danger', json['error']['option']);*/
/* 					}*/
/* 					*/
/* 					if (json['error']['recurring']) {*/
/* 						$('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');*/
/* 					}*/
/* */
/* 					$('.text-danger').parent().addClass('has-error');*/
/* 				}*/
/* */
/* 				if (json['success']) {*/
/* 					if(!uniJsVars.cart_popup_disable) {*/
/* 						uniModalWindow('modal-cart', '', '', json['success']);*/
/* 					}*/
/* 						*/
/* 					if(uniJsVars.cart_popup_autohide) {*/
/* 						setTimeout(function() { */
/* 							$('#modal-cart').modal('hide');*/
/* 						}, uniJsVars.cart_popup_autohide_time * 1000);*/
/* 					}*/
/* 				*/
/* 					$.get('index.php?route=common/cart/info', function(data) {*/
/* 						$('.header-cart__dropdown').html($(data).find('.header-cart__dropdown').html());*/
/* 						$('.header-cart__total-items').html($(data).find('.header-cart__total-items').text());*/
/* 					});*/
/* 					*/
/* 					dataLayer.push({*/
/* 						'ecommerce':{*/
/* 							'currencyCode':'{{ microdata.code }}',*/
/* 							'add':{*/
/* 								'products':[json['products']]*/
/* 							}*/
/* 						}*/
/* 					});*/
/* 					*/
/* 					if (typeof(gtag) === "function") {*/
/* 						gtag('event', 'add_to_cart', {"items": [json['products']]});*/
/* 					}*/
/* 					*/
/* 					if(uniJsVars.cart_btn.metric_id && uniJsVars.cart_btn.metric_target) {*/
/* 						if (typeof(ym) === "function") {*/
/* 							ym(uniJsVars.cart_btn.metric_id, 'reachGoal', uniJsVars.cart_btn.metric_target);*/
/* 						} else {*/
/* 							new Function('yaCounter'+uniJsVars.cart_btn.metric_id+'.reachGoal(\''+uniJsVars.cart_btn.metric_target+'\')')();*/
/* 						}*/
/* 					}*/
/* 					*/
/* 					if(uniJsVars.cart_btn.analytic_category && uniJsVars.cart_btn.analytic_action) {*/
/* 						if (typeof(gtag) === "function") {*/
/* 							gtag('event', uniJsVars.cart_btn.analytic_action, {'event_category': uniJsVars.cart_btn.analytic_category});*/
/* 						} else if (typeof(ga) === "function") {*/
/* 							ga('send', 'event', uniJsVars.cart_btn.analytic_category, uniJsVars.cart_btn.analytic_action);*/
/* 						}*/
/* 					}*/
/* 				}		*/
/* 			},*/
/* 			error: function(xhr, ajaxOptions, thrownError) {*/
/* 				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			}*/
/* 		});*/
/* 	});*/
/* */
/* 	$('button[id^=\'button-upload\']').on('click', function() {*/
/* 		var node = this;*/
/* */
/* 		$('#form-upload').remove();*/
/* */
/* 		$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display:none;"><input type="file" name="file" /></form>');*/
/* */
/* 		$('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/* 		if (typeof timer != 'undefined') {*/
/* 			clearInterval(timer);*/
/* 		}*/
/* */
/* 		timer = setInterval(function() {*/
/* 			if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* 				clearInterval(timer);*/
/* */
/* 				$.ajax({*/
/* 					url: 'index.php?route=tool/upload',*/
/* 					type: 'post',*/
/* 					dataType: 'json',*/
/* 					data: new FormData($('#form-upload')[0]),*/
/* 					cache: false,*/
/* 					contentType: false,*/
/* 					processData: false,*/
/* 					beforeSend: function() {*/
/* 						$(node).button('loading');*/
/* 					},*/
/* 					complete: function() {*/
/* 						$(node).button('reset');*/
/* 					},*/
/* 					success: function(json) {*/
/* 						$('.text-danger').remove();*/
/* */
/* 						if (json['error']) {*/
/* 							$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/* 						}*/
/* */
/* 						if (json['success']) {*/
/* 							alert(json['success']);*/
/* 							$(node).parent().find('input').attr('value', json['code']);*/
/* 						}*/
/* 					},*/
/* 					error: function(xhr, ajaxOptions, thrownError) {*/
/* 						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 					}*/
/* 				});*/
/* 			}*/
/* 		}, 500);*/
/* 	});*/
/* 	*/
/* 	$('.tab-review').on('click mouseover', function() {*/
/* 		$('#review').load('index.php?route=product/product/review&product_id={{ product_id }}');*/
/* 	});*/
/* */
/* 	$('#review').on('click', '.pagination a', function(e) {*/
/* 		e.preventDefault();*/
/* 		*/
/* 		var url = $(this).attr('href');*/
/* 		*/
/* 		$('#review').fadeOut(function() {*/
/* 			scroll_to('#tab-review');*/
/* 			*/
/* 			$(this).load(url, function() {*/
/* 				$('#review').fadeIn();*/
/* 				*/
/* 				if(!$('.review-pagination .active').next().find('a').length) {*/
/* 					$('.show-more-review').hide();*/
/* 				} else {*/
/* 					$('.show-more-review').show();*/
/* 				}*/
/* 			});*/
/* 		});*/
/* 	});*/
/* 	*/
/* 	$('#review').on('click', '.show-more-review', function() {*/
/* 		var url = $('.review-pagination .active').next().find('a').attr('href'),*/
/* 			show_more_btn = $(this),*/
/* 			show_more_btn_i = show_more_btn.find('i');*/
/* 		*/
/* 		if(typeof(url) == 'undefined' || url == '') return;*/
/* 	*/
/* 		$.ajax({*/
/* 			url: url,*/
/* 			type: 'get',*/
/* 			dataType: 'html',*/
/* 			beforeSend: function() {*/
/* 				show_more_btn_i.addClass('spin');*/
/* 			},*/
/* 			success: function(data) {*/
/* 				var $data = $(data);*/
/* 			*/
/* 				$data.find('.review-list__item').hide();*/
/* 				*/
/* 				$('.review-list').append($data.find('.review-list').html());*/
/* 				*/
/* 				$('.review-pagination .pagination').html($data.find('.pagination').html());*/
/* 				*/
/* 				if(!$('.review-pagination .active').next().find('a').length) {*/
/* 					show_more_btn.hide();*/
/* 				}*/
/* 			*/
/* 				show_more_btn_i.removeClass('spin');*/
/* 				*/
/* 				$('.review-list__item').fadeIn();*/
/* 			}*/
/* 		});*/
/* 	});*/
/* */
/* 	$('#button-review').on('click', function() {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=product/product/write&product_id={{ product_id }}',*/
/* 			type: 'post',*/
/* 			dataType: 'json',*/
/* 			data: $('#form-review').serialize(),*/
/* 			beforeSend: function() {*/
/* 				$('#button-review').button('loading');*/
/* 			},*/
/* 			complete: function() {*/
/* 				$('#button-review').button('reset');*/
/* 			},*/
/* 			success: function(json) {*/
/* 				if (json['error']) {*/
/* 					uniFlyAlert('danger', json['error']);*/
/* 				}*/
/* */
/* 				if (json['success']) {*/
/* 					$('#form-review').before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> '+json['success']+' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 					$('#form-review input, #form-review textarea').val('');*/
/* 					$('.review_star input').attr('checked', false).prop('checked', false);*/
/* 					$('#form-review').slideToggle();*/
/* 					*/
/* 					scroll_to('.alert.alert-success');*/
/* 				}*/
/* 			}*/
/* 		});*/
/* 	});*/
/* 	*/
/* 	$('.review-star__input').on('mouseenter', function () {*/
/* 		$('.review-star__star:lt('+$(this).val()+')').removeClass('far').addClass('fa');*/
/* 		*/
/* 		$(this).on('mouseleave', function() {*/
/* 			$('.review-star__star').removeClass('fa').addClass('far');*/
/* 		*/
/* 			$('.review-star__input').each(function() {*/
/* 				if($(this).prop('checked')) {*/
/* 					$('.review-star__star:lt('+$(this).val()+')').removeClass('far').addClass('fa');*/
/* 				}*/
/* 			});*/
/* 		});*/
/* 	});*/
/* */
/* 	$('.review-star__input').on('click', function(){*/
/* 		$('.review-star__star:not(:lt('+$(this).val()+'))').removeClass('fa').addClass('far');*/
/* 	});*/
/* 	*/
/* 	if($('#tab-question').length) {*/
/* 		//$('.tab-question').on('click mouseover', function() {*/
/* 			$('#tab-question').load('index.php?route=extension/module/uni_request/requests&p_id={{ product_id }}');*/
/* 		//});*/
/* 			*/
/* 		$('#tab-question').on('click', '.pagination a', function(e) {*/
/* 			e.preventDefault();*/
/* 			$('#tab-question #question-list').fadeOut().load(this.href +' #question-list > *').fadeIn();*/
/* 		});*/
/* 	}*/
/* 	*/
/* 	{% if recurrings %}		*/
/* 		$('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){*/
/* 			$.ajax({*/
/* 				url: 'index.php?route=product/product/getRecurringDescription',*/
/* 				type: 'post',*/
/* 				data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),*/
/* 				dataType: 'json',*/
/* 				beforeSend: function() {*/
/* 					$('#recurring-description').html('');*/
/* 				},*/
/* 				success: function(json) {*/
/* 					$('.alert, .text-danger').remove();*/
/* */
/* 					if (json['success']) {*/
/* 						$('#recurring-description').html(json['success']);*/
/* 					}*/
/* 				}*/
/* 			});*/
/* 		});*/
/* 	{% endif %}*/
/* */
/* 	var hash = window.location.hash;*/
/* */
/* 	if (hash) {*/
/* 		$('.nav-tabs a').each(function() {*/
/* 			if (hash == $(this).attr('href')) {*/
/* 				$($(this)).trigger('click');*/
/* 				uniScrollTo(hash);*/
/* 			}*/
/* 		});*/
/* 	*/
/* 		var hashpart = hash.split('#'), vals = hashpart[1].split('-'), elem = $('.product-page .option');*/
/* 			*/
/* 		for (i=0; i < vals.length; i++) {			*/
/* 			elem.find('select option[value="'+vals[i]+'"]').attr('selected', true).trigger('select');*/
/* 			elem.find('input[type="radio"][value="'+vals[i]+'"]').attr('checked', true).prop('checked', true).change();*/
/* 			elem.find('input[type="checkbox"][value="'+vals[i]+'"]').attr('checked', true).prop('checked', true);*/
/* 		}*/
/* 	}*/
/* </script>*/
/* <script type="application/ld+json">*/
/* 	{*/
/* 		"@context": "http://schema.org",*/
/* 		"@type": "BreadcrumbList",*/
/* 		"itemListElement": [*/
/* 		{% for i, breadcrumb in breadcrumbs %}*/
/* 			{*/
/* 			"@type": "ListItem",*/
/* 			"position": {{ i+1 }},*/
/* 			"name": "{{ i == 0 ? shop_name : breadcrumb.text|replace({'"':'', '&quot;':''}) }}",*/
/* 			"item": "{{ breadcrumb.href }}"*/
/* 			{{ i + 1 < breadcrumbs|length ? '},' : '}' }}*/
/* 		{% endfor %}*/
/* 		]*/
/* 	}*/
/* </script>*/
/* <script type="application/ld+json">*/
/* 	{*/
/* 		"@context": "https://schema.org",*/
/* 		"@type": "Product",*/
/* 		"name": "{{ microdata.name }}",*/
/* 		"category": "{{ microdata.category }}",*/
/* 		"image": "{{ microdata.image }}",*/
/* 		"brand": "{{ microdata.manufacturer }}",*/
/* 		"manufacturer": "{{ microdata.manufacturer }}",*/
/* 		"model": "{{ microdata.model }}",*/
/* 		"sku": "{{ microdata.sku }}",*/
/* 		"mpn": "{{ microdata.mpn }}",*/
/* 		"description": "{{ microdata.description }}",*/
/* 		"offers": {*/
/* 			"@type": "Offer",*/
/* 			"availability": "https://schema.org/{{ quantity > 0 ? 'InStock' : 'OutOfStock' }}",*/
/* 			"price": "{{ microdata.price }}",*/
/* 			{% if microdata.price_date_end %}*/
/* 				"priceValidUntil": "{{ microdata.price_date_end }}",*/
/* 			{% endif %}*/
/* 			"priceCurrency": "{{ microdata.code }}",*/
/* 			"url": "{{ microdata.url }}"*/
/* 		}*/
/* 		{% if microdata.review_status and microdata.reviews_num > 0 %},*/
/* 		"aggregateRating": {*/
/* 			"@type": "AggregateRating",*/
/* 			"ratingValue": "{{ microdata.rating }}",*/
/* 			"reviewCount": "{{ microdata.reviews_num }}"*/
/* 		}*/
/* 		{% endif %}*/
/* 		{% if microdata.reviews %},*/
/* 		"review": [*/
/* 			{% for i, review in microdata.reviews %}*/
/* 			{*/
/* 				"@type": "Review",*/
/* 				"author": "{{ review.author }}",*/
/* 				"datePublished": "{{ review.date_added }}",*/
/* 				"description": "{{ review.text }}",*/
/* 				"reviewRating": {*/
/* 					"@type": "Rating",*/
/* 					"ratingValue": "{{ review.rating }}",*/
/* 					"bestRating": "5"*/
/* 				}*/
/* 			{{ i + 1 < microdata.reviews|length ? '},' : '}' }}*/
/* 			{% endfor %}*/
/* 		]*/
/* 		{% endif %}*/
/* 	}*/
/* </script>*/
/* 	{% set break = false %}*/
/* 	{% for option in options if not break %}*/
/* 		{% if option.type == 'date' or option.type == 'time' or option.type == 'datetime' %}*/
/* 			<script src="catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js"></script>*/
/* 			<script src="catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js"></script>*/
/* 			<script src="catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js"></script>*/
/* 			<link href="catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css" rel="preload" as="style" />*/
/* 			<link href="catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen" />*/
/* 			<script>*/
/* 				$('.date').datetimepicker({*/
/* 					pickTime: false*/
/* 				});*/
/* 				$('.datetime').datetimepicker({*/
/* 					pickDate: true,*/
/* 					pickTime: true*/
/* 				});*/
/* 				$('.time').datetimepicker({*/
/* 					pickDate: false*/
/* 				});*/
/* 			</script>*/
/* 			{% set break = true %}*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* {{ footer }}*/
