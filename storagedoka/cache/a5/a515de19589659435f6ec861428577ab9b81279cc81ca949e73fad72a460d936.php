<?php

/* unishop2/template/product/category.twig */
class __TwigTemplate_73fe585095848d2a7fad034f3d2399e65694a0444a3f3ad561f30ec77c7516e6 extends Twig_Template
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
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 25
            echo "\t\t\t\t<div class=\"category-page category-info\">
\t\t\t\t\t";
            // line 26
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 27
                echo "\t\t\t\t\t\t<div class=\"category-info__image\">
\t\t\t\t\t\t\t<img src=\"";
                // line 28
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" class=\"img-thumbnail\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 31
            echo "\t\t\t\t\t";
            if ((isset($context["description"]) ? $context["description"] : null)) {
                echo "<div class=\"description\">";
                echo (isset($context["description"]) ? $context["description"] : null);
                echo "</div>";
            }
            // line 32
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 34
        echo "\t\t\t";
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 35
            echo "\t\t\t\t<div class=\"category-list row row-flex ";
            echo ((((isset($context["subcategory_mobile_view"]) ? $context["subcategory_mobile_view"] : null) == "select")) ? ("hidden-xs") : (""));
            echo "\">
\t\t\t\t\t";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 37
                echo "\t\t\t\t\t\t<div class=\"";
                echo (isset($context["subcategory_column"]) ? $context["subcategory_column"] : null);
                echo "\">
\t\t\t\t\t\t\t<a href=\"";
                // line 38
                echo $this->getAttribute($context["category"], "href", array());
                echo "\" class=\"category-list__item uni-item\">
\t\t\t\t\t\t\t\t";
                // line 39
                if ($this->getAttribute($context["category"], "thumb", array())) {
                    // line 40
                    echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo $this->getAttribute($context["category"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "\" class=\"category-list__img img-responsive ";
                    echo ((((isset($context["subcategory_mobile_view"]) ? $context["subcategory_mobile_view"] : null) == "imghide")) ? ("hidden-xs") : (""));
                    echo "\" />
\t\t\t\t\t\t\t\t";
                }
                // line 42
                echo "\t\t\t\t\t\t\t\t";
                echo $this->getAttribute($context["category"], "name", array());
                echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 47
            if (((isset($context["subcategory_mobile_view"]) ? $context["subcategory_mobile_view"] : null) == "select")) {
                // line 48
                echo "\t\t\t\t\t<div class=\"visible-xs\" style=\"margin:0 0 20px\">
\t\t\t\t\t\t<select class=\"form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t<option value=\"\">";
                // line 50
                echo (isset($context["text_select_category"]) ? $context["text_select_category"] : null);
                echo "</option>
\t\t\t\t\t\t\t";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 52
                    echo "\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</option>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 57
            echo "\t\t\t";
        }
        // line 58
        echo "\t\t\t";
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 59
            echo "\t\t\t\t<div class=\"compare-block ";
            echo (((isset($context["compare_btn_disabled"]) ? $context["compare_btn_disabled"] : null)) ? ("hidden") : (""));
            echo "\">
\t\t\t\t\t<a href=\"";
            // line 60
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
            // line 66
            if ((isset($context["show_grid_button"]) ? $context["show_grid_button"] : null)) {
                echo "<button type=\"button\" id=\"grid-view\" class=\"sorts-block__btn btn btn-default\" title=\"";
                echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
                echo "\"><i class=\"fa fa-th-large\"></i></button>";
            }
            // line 67
            echo "\t\t\t\t\t\t\t";
            if ((isset($context["show_list_button"]) ? $context["show_list_button"] : null)) {
                echo "<button type=\"button\" id=\"list-view\" class=\"sorts-block__btn btn btn-default\" title=\"";
                echo (isset($context["button_list"]) ? $context["button_list"] : null);
                echo "\"><i class=\"fa fa-th-list\"></i></button>";
            }
            // line 68
            echo "\t\t\t\t\t\t\t";
            if ((isset($context["show_compact_button"]) ? $context["show_compact_button"] : null)) {
                echo "<button type=\"button\" id=\"compact-view\" class=\"sorts-block__btn btn btn-default hidden-sm\" title=\"";
                echo (isset($context["button_compact"]) ? $context["button_compact"] : null);
                echo "\"><i class=\"fa fa-align-justify\"></i></button>";
            }
            // line 69
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sorts-block__item\">
\t\t\t\t\t\t<select id=\"input-sort\" class=\"sorts-block__select form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 74
                echo "\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 75
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 77
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 79
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select id=\"input-limit\" class=\"sorts-block__select sorts-block__limit form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 83
                echo "\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 84
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 86
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 88
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<hr />
\t\t\t\t<div class=\"products-block row\">
\t\t\t\t\t";
            // line 94
            if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
                // line 95
                echo "\t\t\t\t\t\t";
                $context["class"] = "col-sm-12 col-md-12 col-lg-6 col-xxl-6-1";
                // line 96
                echo "\t\t\t\t\t";
            } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
                // line 97
                echo "\t\t\t\t\t\t";
                $context["class"] = "col-sm-6 col-md-4 col-lg-4 col-xxl-5";
                // line 98
                echo "\t\t\t\t\t";
            } else {
                // line 99
                echo "\t\t\t\t\t\t";
                $context["class"] = "col-sm-6 col-md-3 col-lg-3 col-xxl-4";
                // line 100
                echo "\t\t\t\t\t";
            }
            // line 101
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
                // line 102
                echo "\t\t\t\t\t\t<div class=\"product-layout product-grid grid-view ";
                echo (isset($context["class"]) ? $context["class"] : null);
                echo "\">
\t\t\t\t\t\t\t<div class=\"product-thumb uni-item\">
\t\t\t\t\t\t\t\t<div class=\"product-thumb__image\" ";
                // line 104
                echo (($this->getAttribute($context["product"], "special_date_end", array())) ? ((("data-special-end=\"" . $this->getAttribute($context["product"], "special_date_end", array())) . "\"")) : (""));
                echo ">
\t\t\t\t\t\t\t\t\t";
                // line 105
                $this->loadTemplate("unishop2/template/extension/module/uni_stickers.twig", "unishop2/template/product/category.twig", 105)->display($context);
                echo "\t
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 106
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 107
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
                // line 111
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a>
\t\t\t\t\t\t\t\t\t";
                // line 112
                if ($this->getAttribute($context["product"], "show_description", array())) {
                    // line 113
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb__description description\">";
                    echo $this->getAttribute($context["product"], "description", array());
                    echo "</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 115
                echo "\t\t\t\t\t\t\t\t\t";
                $this->loadTemplate("unishop2/template/extension/module/uni_attributes.twig", "unishop2/template/product/category.twig", 115)->display($context);
                // line 116
                echo "\t\t\t\t\t\t\t\t\t";
                $this->loadTemplate("unishop2/template/extension/module/uni_options.twig", "unishop2/template/product/category.twig", 116)->display($context);
                // line 117
                echo "\t\t\t\t\t\t\t\t\t";
                $this->loadTemplate("unishop2/template/extension/module/uni_quantity_indicator.twig", "unishop2/template/product/category.twig", 117)->display($context);
                // line 118
                echo "\t\t\t\t\t\t\t\t\t";
                if ((($this->getAttribute($context["product"], "rating", array()) >= 0) && (isset($context["show_rating"]) ? $context["show_rating"] : null))) {
                    // line 119
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb__rating rating\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 120
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 121
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"";
                        echo ((($this->getAttribute($context["product"], "rating", array()) < $context["i"])) ? ("far fa-star") : ("fa fa-star"));
                        echo "\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 122
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 123
                    if (($this->getAttribute($context["product"], "num_reviews", array()) > 0)) {
                        echo "<sup><a class=\"product-thumb__rating-a uni-href\" data-href=\"";
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "#tab-review\">";
                        echo $this->getAttribute($context["product"], "num_reviews", array());
                        echo "</a></sup>";
                    }
                    // line 124
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 126
                echo "\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 127
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb__price price\" data-price=\"";
                    echo $this->getAttribute($context["product"], "price_value", array());
                    echo "\" data-special=\"";
                    echo $this->getAttribute($context["product"], "special_value", array());
                    echo "\" data-discount=\"";
                    echo $this->getAttribute($context["product"], "discounts", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 128
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 129
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 131
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span> <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> 
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 133
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    // line 134
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        echo "<div class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</div>";
                    }
                    // line 135
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 136
                echo "\t\t\t\t\t\t\t\t\t<div class=\"product-thumb__cart cart ";
                echo $this->getAttribute($context["product"], "cart_btn_class", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t";
                // line 137
                if ($this->getAttribute($context["product"], "show_quantity", array())) {
                    // line 138
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"qty-switch\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"quantity\" value=\"";
                    // line 139
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
                // line 146
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
                // line 147
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
                // line 148
                echo (((isset($context["wishlist_btn_disabled"]) ? $context["wishlist_btn_disabled"] : null)) ? ("hidden") : (""));
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__compare compare ";
                // line 149
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
            // line 155
            echo "\t\t\t\t\t<script>
\t\t\t\t\t\tuniSelectView.init();
\t\t\t\t\t\t
\t\t\t\t\t\t";
            // line 158
            if ((isset($context["show_timer"]) ? $context["show_timer"] : null)) {
                // line 159
                echo "\t\t\t\t\t\t\$('.product-layout .product-thumb__image').each(function() {
\t\t\t\t\t\t\tvar date = \$(this).attr('data-special-end');
\t\t\t
\t\t\t\t\t\t\tif(date) {
\t\t\t\t\t\t\t\t\$(this).uniTimer({
\t\t\t\t\t\t\t\t\tdate      :''+date+'',
\t\t\t\t\t\t\t\t\ttexts     :['";
                // line 165
                echo (isset($context["text_special_day"]) ? $context["text_special_day"] : null);
                echo "','";
                echo (isset($context["text_special_hour"]) ? $context["text_special_hour"] : null);
                echo "','";
                echo (isset($context["text_special_min"]) ? $context["text_special_min"] : null);
                echo "','";
                echo (isset($context["text_special_sec"]) ? $context["text_special_sec"] : null);
                echo "'],
\t\t\t\t\t\t\t\t\thideText  :false,
\t\t\t\t\t\t\t\t\thideIsNull:false
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t\t";
            }
            // line 172
            echo "\t\t\t\t\t</script>
\t\t\t\t\t";
            // line 173
            echo (isset($context["banner_in_category"]) ? $context["banner_in_category"] : null);
            echo "
\t\t\t\t</div>
\t\t\t\t";
            // line 175
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "
\t\t\t    <div class=\"pagination-text\">";
            // line 176
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
\t\t\t";
        }
        // line 178
        echo "\t\t\t";
        if (( !(isset($context["categories"]) ? $context["categories"] : null) &&  !(isset($context["products"]) ? $context["products"] : null))) {
            // line 179
            echo "\t\t\t\t<p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
\t\t\t";
        }
        // line 181
        echo "\t\t\t<div class=\"category-info-bottom\"></div>
\t\t\t";
        // line 182
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t\t</div>
\t\t";
        // line 184
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t</div>
</div>
<script>
\t";
        // line 188
        echo ((((isset($context["cat_desc_pos"]) ? $context["cat_desc_pos"] : null) == "bottom")) ? ("\$(\".category-info-bottom\").append(\$(\".category-info\"));") : (""));
        echo "
</script>
<script type=\"application/ld+json\">
\t{
\t\t\"@context\": \"http://schema.org\",
\t\t\"@type\": \"BreadcrumbList\",
\t\t\"itemListElement\": [
\t\t";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["i"] => $context["breadcrumb"]) {
            // line 196
            echo "\t\t\t{
\t\t\t\"@type\": \"ListItem\",
\t\t\t\"position\": ";
            // line 198
            echo ($context["i"] + 1);
            echo ",
\t\t\t\"name\": \"";
            // line 199
            echo ((($context["i"] == 0)) ? ((isset($context["shop_name"]) ? $context["shop_name"] : null)) : (twig_replace_filter($this->getAttribute($context["breadcrumb"], "text", array()), array("\"" => "", "&quot;" => ""))));
            echo "\",
\t\t\t\"item\": \"";
            // line 200
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\"
\t\t\t";
            // line 201
            echo (((($context["i"] + 1) < twig_length_filter($this->env, (isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null)))) ? ("},") : ("}"));
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "\t\t]
\t}
</script>
";
        // line 206
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "unishop2/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  695 => 206,  690 => 203,  682 => 201,  678 => 200,  674 => 199,  670 => 198,  666 => 196,  662 => 195,  652 => 188,  645 => 184,  640 => 182,  637 => 181,  631 => 179,  628 => 178,  623 => 176,  619 => 175,  614 => 173,  611 => 172,  595 => 165,  587 => 159,  585 => 158,  580 => 155,  556 => 149,  548 => 148,  532 => 147,  517 => 146,  505 => 139,  502 => 138,  500 => 137,  495 => 136,  492 => 135,  484 => 134,  481 => 133,  473 => 131,  467 => 129,  465 => 128,  456 => 127,  453 => 126,  449 => 124,  441 => 123,  438 => 122,  429 => 121,  425 => 120,  422 => 119,  419 => 118,  416 => 117,  413 => 116,  410 => 115,  404 => 113,  402 => 112,  396 => 111,  385 => 107,  379 => 106,  375 => 105,  371 => 104,  365 => 102,  347 => 101,  344 => 100,  341 => 99,  338 => 98,  335 => 97,  332 => 96,  329 => 95,  327 => 94,  320 => 89,  314 => 88,  306 => 86,  298 => 84,  295 => 83,  291 => 82,  287 => 80,  281 => 79,  273 => 77,  265 => 75,  262 => 74,  258 => 73,  252 => 69,  245 => 68,  238 => 67,  232 => 66,  221 => 60,  216 => 59,  213 => 58,  210 => 57,  205 => 54,  194 => 52,  190 => 51,  186 => 50,  182 => 48,  180 => 47,  177 => 46,  166 => 42,  154 => 40,  152 => 39,  148 => 38,  143 => 37,  139 => 36,  134 => 35,  131 => 34,  127 => 32,  120 => 31,  110 => 28,  107 => 27,  105 => 26,  102 => 25,  100 => 24,  96 => 23,  92 => 22,  87 => 21,  84 => 20,  81 => 19,  78 => 18,  75 => 17,  72 => 16,  69 => 15,  67 => 14,  63 => 13,  59 => 11,  53 => 10,  50 => 9,  43 => 8,  35 => 6,  32 => 5,  28 => 4,  24 => 3,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="container">*/
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
/* 			{% if description %}*/
/* 				<div class="category-page category-info">*/
/* 					{% if thumb %}*/
/* 						<div class="category-info__image">*/
/* 							<img src="{{ thumb }}" alt="{{ heading_title }}" title="{{ heading_title }}" class="img-thumbnail" />*/
/* 						</div>*/
/* 					{% endif %}*/
/* 					{% if description %}<div class="description">{{ description }}</div>{% endif %}*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			{% if categories %}*/
/* 				<div class="category-list row row-flex {{ subcategory_mobile_view == 'select' ? 'hidden-xs' }}">*/
/* 					{% for category in categories %}*/
/* 						<div class="{{ subcategory_column }}">*/
/* 							<a href="{{ category.href }}" class="category-list__item uni-item">*/
/* 								{% if category.thumb %}*/
/* 									<img src="{{ category.thumb }}" alt="{{ category.name }}" title="{{ category.name }}" class="category-list__img img-responsive {{ subcategory_mobile_view == 'imghide' ? 'hidden-xs' }}" />*/
/* 								{% endif %}*/
/* 								{{ category.name }}*/
/* 							</a>*/
/* 						</div>*/
/* 					{% endfor %}*/
/* 				</div>*/
/* 				{% if subcategory_mobile_view == 'select' %}*/
/* 					<div class="visible-xs" style="margin:0 0 20px">*/
/* 						<select class="form-control" onchange="location = this.value;">*/
/* 							<option value="">{{ text_select_category }}</option>*/
/* 							{% for category in categories %}*/
/* 								<option value="{{ category.href }}">{{ category.name }}</option>*/
/* 							{% endfor %}*/
/* 						</select>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 			{% endif %}*/
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
/* 						{% set class = 'col-sm-12 col-md-12 col-lg-6 col-xxl-6-1' %}*/
/* 					{% elseif column_left or column_right %}*/
/* 						{% set class = 'col-sm-6 col-md-4 col-lg-4 col-xxl-5' %}*/
/* 					{% else %}*/
/* 						{% set class = 'col-sm-6 col-md-3 col-lg-3 col-xxl-4' %}*/
/* 					{% endif %}*/
/* 					{% for product in products %}*/
/* 						<div class="product-layout product-grid grid-view {{ class }}">*/
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
/* 					<script>*/
/* 						uniSelectView.init();*/
/* 						*/
/* 						{% if show_timer %}*/
/* 						$('.product-layout .product-thumb__image').each(function() {*/
/* 							var date = $(this).attr('data-special-end');*/
/* 			*/
/* 							if(date) {*/
/* 								$(this).uniTimer({*/
/* 									date      :''+date+'',*/
/* 									texts     :['{{ text_special_day }}','{{ text_special_hour }}','{{ text_special_min }}','{{ text_special_sec }}'],*/
/* 									hideText  :false,*/
/* 									hideIsNull:false*/
/* 								});*/
/* 							}*/
/* 						});*/
/* 						{% endif %}*/
/* 					</script>*/
/* 					{{ banner_in_category }}*/
/* 				</div>*/
/* 				{{ pagination }}*/
/* 			    <div class="pagination-text">{{ results }}</div>*/
/* 			{% endif %}*/
/* 			{% if not categories and not products %}*/
/* 				<p>{{ text_empty }}</p>*/
/* 			{% endif %}*/
/* 			<div class="category-info-bottom"></div>*/
/* 			{{ content_bottom }}*/
/* 		</div>*/
/* 		{{ column_right }}*/
/* 	</div>*/
/* </div>*/
/* <script>*/
/* 	{{ cat_desc_pos == 'bottom' ? '$(".category-info-bottom").append($(".category-info"));' }}*/
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
/* {{ footer }}*/
