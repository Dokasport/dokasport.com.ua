<?php

/* unishop2/template/product/search.twig */
class __TwigTemplate_65ae6db8c74eeca77311d8d89dfd4c587cd44e8f60a9600c8b61256a2a52aa48 extends Twig_Template
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
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-7\"><input type=\"text\" name=\"search\" value=\"";
        // line 25
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_keyword"]) ? $context["text_keyword"] : null);
        echo "\" id=\"input-search\" class=\"form-control\" /></div>
\t\t\t\t<div class=\"visible-xs\" style=\"height:10px\"></div>
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t<select name=\"category_id\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"0\">";
        // line 29
        echo (isset($context["text_category"]) ? $context["text_category"] : null);
        echo "</option>
\t\t\t\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 31
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["category_1"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                // line 32
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["category_1"], "category_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["category_1"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t";
            } else {
                // line 34
                echo "\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["category_1"], "category_id", array());
                echo "\">";
                echo $this->getAttribute($context["category_1"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t";
            }
            // line 36
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_1"], "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 37
                echo "\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["category_2"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                    // line 38
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["category_2"], "category_id", array());
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 40
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["category_2"], "category_id", array());
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 42
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_2"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 43
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["category_3"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                        // line 44
                        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["category_3"], "category_id", array());
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo $this->getAttribute($context["category_3"], "name", array());
                        echo "</option>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 46
                        echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo $this->getAttribute($context["category_3"], "category_id", array());
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo $this->getAttribute($context["category_3"], "name", array());
                        echo "</option>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 48
                    echo "\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"visible-xs\" style=\"height:10px\"></div>
\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t<button type=\"button\" id=\"button-search\" class=\"btn btn-primary btn-block\"><i class=\"fa fa-search\"></i> <span>";
        // line 55
        echo (isset($context["button_search"]) ? $context["button_search"] : null);
        echo "</span></button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<br />
\t\t\t<div class=\"row ";
        // line 59
        echo (((isset($context["uni_search"]) ? $context["uni_search"] : null)) ? ("hidden") : (""));
        echo "\">
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t<label class=\"checkbox-inline input\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"sub_category\" value=\"1\" ";
        // line 62
        if ((isset($context["sub_category"]) ? $context["sub_category"] : null)) {
            echo "checked=\"checked\"";
        }
        echo " /><span></span>";
        echo (isset($context["text_sub_category"]) ? $context["text_sub_category"] : null);
        echo "
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t<label class=\"checkbox-inline input\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" ";
        // line 67
        if ((isset($context["description"]) ? $context["description"] : null)) {
            echo "checked=\"checked\"";
        }
        echo " /><span></span>";
        echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
        echo "
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<br />
\t\t\t";
        // line 72
        if ((isset($context["manufacturers_search"]) ? $context["manufacturers_search"] : null)) {
            // line 73
            echo "\t\t\t\t<div class=\"heading\"><span>";
            echo (isset($context["text_search_manufacturer"]) ? $context["text_search_manufacturer"] : null);
            echo "</span></div>
\t\t\t\t<div class=\"category-list row row-flex\">
\t\t\t\t";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["manufacturers_search"]) ? $context["manufacturers_search"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                // line 76
                echo "\t\t\t\t\t<div class=\"col-xxl-2 col-lg-2 col-md-2 col-sm-3 col-xs-4\">
\t\t\t\t\t\t<a href=\"";
                // line 77
                echo $this->getAttribute($context["manufacturer"], "href", array());
                echo "\" class=\"category-list__item uni-item\">
\t\t\t\t\t\t\t";
                // line 78
                if ($this->getAttribute($context["manufacturer"], "thumb", array())) {
                    echo "<img src=\"";
                    echo $this->getAttribute($context["manufacturer"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["manufacturer"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["manufacturer"], "name", array());
                    echo "\" class=\"category-list__img img-responsive\" />";
                }
                // line 79
                echo "\t\t\t\t\t\t\t";
                echo $this->getAttribute($context["manufacturer"], "name", array());
                echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 85
        echo "\t\t\t";
        if ((isset($context["categories_search"]) ? $context["categories_search"] : null)) {
            // line 86
            echo "\t\t\t\t<div class=\"heading\"><span>";
            echo (isset($context["text_search_category"]) ? $context["text_search_category"] : null);
            echo "</span></div>
\t\t\t\t<div class=\"category-list row row-flex\">
\t\t\t\t";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories_search"]) ? $context["categories_search"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 89
                echo "\t\t\t\t\t<div class=\"col-xxl-2 col-lg-2 col-md-2 col-sm-3 col-xs-4\">
\t\t\t\t\t\t<a href=\"";
                // line 90
                echo $this->getAttribute($context["category"], "href", array());
                echo "\" class=\"category-list__item uni-item\">
\t\t\t\t\t\t\t";
                // line 91
                if ($this->getAttribute($context["category"], "thumb", array())) {
                    echo "<img src=\"";
                    echo $this->getAttribute($context["category"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "\" class=\"category-list__img img-responsive\" />";
                }
                // line 92
                echo "\t\t\t\t\t\t\t";
                echo $this->getAttribute($context["category"], "name", array());
                echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 98
        echo "\t\t\t<div class=\"heading\"><span>";
        echo (isset($context["text_search_product"]) ? $context["text_search_product"] : null);
        echo "</span></div>
\t\t\t";
        // line 99
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 100
            echo "\t\t\t\t<div class=\"compare-block ";
            echo (((isset($context["compare_btn_disabled"]) ? $context["compare_btn_disabled"] : null)) ? ("hidden") : (""));
            echo "\">
\t\t\t\t\t<a href=\"";
            // line 101
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
            // line 107
            if ((isset($context["show_grid_button"]) ? $context["show_grid_button"] : null)) {
                echo "<button type=\"button\" id=\"grid-view\" class=\"sorts-block__btn btn btn-default\" title=\"";
                echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
                echo "\"><i class=\"fa fa-th-large\"></i></button>";
            }
            // line 108
            echo "\t\t\t\t\t\t\t";
            if ((isset($context["show_list_button"]) ? $context["show_list_button"] : null)) {
                echo "<button type=\"button\" id=\"list-view\" class=\"sorts-block__btn btn btn-default\" title=\"";
                echo (isset($context["button_list"]) ? $context["button_list"] : null);
                echo "\"><i class=\"fa fa-th-list\"></i></button>";
            }
            // line 109
            echo "\t\t\t\t\t\t\t";
            if ((isset($context["show_compact_button"]) ? $context["show_compact_button"] : null)) {
                echo "<button type=\"button\" id=\"compact-view\" class=\"sorts-block__btn btn btn-default hidden-sm\" title=\"";
                echo (isset($context["button_compact"]) ? $context["button_compact"] : null);
                echo "\"><i class=\"fa fa-align-justify\"></i></button>";
            }
            // line 110
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sorts-block__item\">
\t\t\t\t\t\t<select id=\"input-sort\" class=\"sorts-block__select form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 115
                echo "\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 116
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 118
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 120
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<select id=\"input-limit\" class=\"sorts-block__select sorts-block__limit form-control\" onchange=\"location = this.value;\">
\t\t\t\t\t\t\t";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 124
                echo "\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 125
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 127
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                // line 129
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<hr />
\t\t\t\t<div class=\"products-block row\">
\t\t\t\t\t";
            // line 135
            if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
                // line 136
                echo "\t\t\t\t\t\t";
                $context["class"] = "col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xxl-6-1";
                // line 137
                echo "\t\t\t\t\t";
            } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
                // line 138
                echo "\t\t\t\t\t\t";
                $context["class"] = "col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xxl-5";
                // line 139
                echo "\t\t\t\t\t";
            } else {
                // line 140
                echo "\t\t\t\t\t\t";
                $context["class"] = "col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xxl-4";
                // line 141
                echo "\t\t\t\t\t";
            }
            // line 142
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
                // line 143
                echo "\t\t\t\t\t\t<div class=\"product-layout product-grid grid-view ";
                echo (isset($context["class"]) ? $context["class"] : null);
                echo "\">
\t\t\t\t\t\t\t<div class=\"product-thumb uni-item\">
\t\t\t\t\t\t\t\t<div class=\"product-thumb__image\" ";
                // line 145
                echo (($this->getAttribute($context["product"], "special_date_end", array())) ? ((("data-special-end=\"" . $this->getAttribute($context["product"], "special_date_end", array())) . "\"")) : (""));
                echo ">
\t\t\t\t\t\t\t\t\t";
                // line 146
                $this->loadTemplate("unishop2/template/extension/module/uni_stickers.twig", "unishop2/template/product/search.twig", 146)->display($context);
                echo "\t
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 147
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 148
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
                // line 152
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a>
\t\t\t\t\t\t\t\t\t";
                // line 153
                if ($this->getAttribute($context["product"], "show_description", array())) {
                    // line 154
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb__description description\">";
                    echo $this->getAttribute($context["product"], "description", array());
                    echo "</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 156
                echo "\t\t\t\t\t\t\t\t\t";
                $this->loadTemplate("unishop2/template/extension/module/uni_attributes.twig", "unishop2/template/product/search.twig", 156)->display($context);
                // line 157
                echo "\t\t\t\t\t\t\t\t\t";
                $this->loadTemplate("unishop2/template/extension/module/uni_options.twig", "unishop2/template/product/search.twig", 157)->display($context);
                // line 158
                echo "\t\t\t\t\t\t\t\t\t";
                $this->loadTemplate("unishop2/template/extension/module/uni_quantity_indicator.twig", "unishop2/template/product/search.twig", 158)->display($context);
                // line 159
                echo "\t\t\t\t\t\t\t\t\t";
                if ((($this->getAttribute($context["product"], "rating", array()) >= 0) && (isset($context["show_rating"]) ? $context["show_rating"] : null))) {
                    // line 160
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb__rating rating\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 161
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 162
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"";
                        echo ((($this->getAttribute($context["product"], "rating", array()) < $context["i"])) ? ("far fa-star") : ("fa fa-star"));
                        echo "\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 163
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 164
                    if (($this->getAttribute($context["product"], "num_reviews", array()) > 0)) {
                        echo "<sup><a class=\"product-thumb__rating-a uni-href\" data-href=\"";
                        echo $this->getAttribute($context["product"], "href", array());
                        echo "#tab-review\">";
                        echo $this->getAttribute($context["product"], "num_reviews", array());
                        echo "</a></sup>";
                    }
                    // line 165
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 167
                echo "\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 168
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"product-thumb__price price\" data-price=\"";
                    echo $this->getAttribute($context["product"], "price_value", array());
                    echo "\" data-special=\"";
                    echo $this->getAttribute($context["product"], "special_value", array());
                    echo "\" data-discount=\"";
                    echo $this->getAttribute($context["product"], "discounts", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 169
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 170
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 172
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span> <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> 
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 174
                    echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    // line 175
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        echo "<div class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</div>";
                    }
                    // line 176
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 177
                echo "\t\t\t\t\t\t\t\t\t<div class=\"product-thumb__cart cart ";
                echo $this->getAttribute($context["product"], "cart_btn_class", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t";
                // line 178
                if ($this->getAttribute($context["product"], "show_quantity", array())) {
                    // line 179
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"qty-switch\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"quantity\" value=\"";
                    // line 180
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
                // line 187
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
                // line 188
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
                // line 189
                echo (((isset($context["wishlist_btn_disabled"]) ? $context["wishlist_btn_disabled"] : null)) ? ("hidden") : (""));
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i></button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"product-thumb__compare compare ";
                // line 190
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
            // line 196
            echo "\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\tuniSelectView.init();
\t\t\t\t\t
\t\t\t\t\t\t";
            // line 199
            if ((isset($context["show_timer"]) ? $context["show_timer"] : null)) {
                // line 200
                echo "\t\t\t\t\t\t\$('.product-layout .product-thumb__image').each(function() {
\t\t\t\t\t\t\tvar date = \$(this).attr('data-special-end');
\t\t\t
\t\t\t\t\t\t\tif(date) {
\t\t\t\t\t\t\t\t\$(this).uniTimer({
\t\t\t\t\t\t\t\t\tdate   :''+date+'',
\t\t\t\t\t\t\t\t\ttexts   :['";
                // line 206
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
            // line 213
            echo "\t\t\t\t\t</script>
\t\t\t\t</div>
\t\t\t\t";
            // line 215
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "
\t\t\t  <div class=\"pagination-text\">";
            // line 216
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
\t\t\t";
        } else {
            // line 218
            echo "\t\t\t\t<p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
\t\t\t";
        }
        // line 220
        echo "\t\t\t";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t\t</div>
\t\t";
        // line 222
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t</div>
</div>
<script>
\$('#button-search').bind('click', function() {
\turl = 'index.php?route=product/search';

\tvar search = \$('#content input[name=\\'search\\']').prop('value');

\tif (search) {
\t\turl += '&search=' + encodeURIComponent(search);
\t}

\tvar category_id = \$('#content select[name=\\'category_id\\']').prop('value');

\tif (category_id > 0) {
\t\turl += '&category_id=' + encodeURIComponent(category_id);
\t}

\tvar sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

\tif (sub_category) {
\t\turl += '&sub_category=true';
\t}

\tvar filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

\tif (filter_description) {
\t\turl += '&description=true';
\t}

\tlocation = url;
});

\$('#content input[name=\\'search\\']').bind('keydown', function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('select[name=\\'category_id\\']').on('change', function() {
\tif (this.value == '0') {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', true);
\t} else {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', false);
\t}
});

\$('select[name=\\'category_id\\']').trigger('change');

\$('.products-block .product-thumb__name, .products-block .product-thumb__description').highlight('";
        // line 272
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "');
</script>
";
        // line 274
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "unishop2/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  816 => 274,  811 => 272,  758 => 222,  752 => 220,  746 => 218,  741 => 216,  737 => 215,  733 => 213,  717 => 206,  709 => 200,  707 => 199,  702 => 196,  678 => 190,  670 => 189,  654 => 188,  639 => 187,  627 => 180,  624 => 179,  622 => 178,  617 => 177,  614 => 176,  606 => 175,  603 => 174,  595 => 172,  589 => 170,  587 => 169,  578 => 168,  575 => 167,  571 => 165,  563 => 164,  560 => 163,  551 => 162,  547 => 161,  544 => 160,  541 => 159,  538 => 158,  535 => 157,  532 => 156,  526 => 154,  524 => 153,  518 => 152,  505 => 148,  501 => 147,  497 => 146,  493 => 145,  487 => 143,  469 => 142,  466 => 141,  463 => 140,  460 => 139,  457 => 138,  454 => 137,  451 => 136,  449 => 135,  442 => 130,  436 => 129,  428 => 127,  420 => 125,  417 => 124,  413 => 123,  409 => 121,  403 => 120,  395 => 118,  387 => 116,  384 => 115,  380 => 114,  374 => 110,  367 => 109,  360 => 108,  354 => 107,  343 => 101,  338 => 100,  336 => 99,  331 => 98,  327 => 96,  316 => 92,  306 => 91,  302 => 90,  299 => 89,  295 => 88,  289 => 86,  286 => 85,  282 => 83,  271 => 79,  261 => 78,  257 => 77,  254 => 76,  250 => 75,  244 => 73,  242 => 72,  230 => 67,  218 => 62,  212 => 59,  205 => 55,  199 => 51,  193 => 50,  187 => 49,  181 => 48,  173 => 46,  165 => 44,  162 => 43,  157 => 42,  149 => 40,  141 => 38,  138 => 37,  133 => 36,  125 => 34,  117 => 32,  114 => 31,  110 => 30,  106 => 29,  97 => 25,  92 => 23,  88 => 22,  83 => 21,  80 => 20,  77 => 19,  74 => 18,  71 => 17,  68 => 16,  65 => 15,  63 => 14,  59 => 13,  55 => 11,  49 => 10,  43 => 8,  35 => 6,  32 => 5,  28 => 4,  24 => 3,  19 => 1,);
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
/* 			<div class="row">*/
/* 				<div class="col-sm-7"><input type="text" name="search" value="{{ search }}" placeholder="{{ text_keyword }}" id="input-search" class="form-control" /></div>*/
/* 				<div class="visible-xs" style="height:10px"></div>*/
/* 				<div class="col-sm-3">*/
/* 					<select name="category_id" class="form-control">*/
/* 						<option value="0">{{ text_category }}</option>*/
/* 						{% for category_1 in categories %}*/
/* 							{% if category_1.category_id == category_id %}*/
/* 								<option value="{{ category_1.category_id }}" selected="selected">{{ category_1.name }}</option>*/
/* 							{% else %}*/
/* 								<option value="{{ category_1.category_id }}">{{ category_1.name }}</option>*/
/* 							{% endif %}*/
/* 							{% for category_2 in category_1.children %}*/
/* 								{% if category_2.category_id == category_id %}*/
/* 									<option value="{{ category_2.category_id }}" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_2.name }}</option>*/
/* 								{% else %}*/
/* 									<option value="{{ category_2.category_id }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_2.name }}</option>*/
/* 								{% endif %}*/
/* 								{% for category_3 in category_2.children %}*/
/* 									{% if category_3.category_id == category_id %}*/
/* 										<option value="{{ category_3.category_id }}" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_3.name }}</option>*/
/* 									{% else %}*/
/* 										<option value="{{ category_3.category_id }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_3.name }}</option>*/
/* 									{% endif %}*/
/* 								{% endfor %}*/
/* 							{% endfor %}*/
/* 						{% endfor %}*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="visible-xs" style="height:10px"></div>*/
/* 				<div class="col-sm-2">*/
/* 					<button type="button" id="button-search" class="btn btn-primary btn-block"><i class="fa fa-search"></i> <span>{{ button_search }}</span></button>*/
/* 				</div>*/
/* 			</div>*/
/* 			<br />*/
/* 			<div class="row {{ uni_search ? 'hidden' }}">*/
/* 				<div class="col-sm-3">*/
/* 					<label class="checkbox-inline input">*/
/* 						<input type="checkbox" name="sub_category" value="1" {% if sub_category %}checked="checked"{% endif %} /><span></span>{{ text_sub_category }}*/
/* 					</label>*/
/* 				</div>*/
/* 				<div class="col-sm-3">*/
/* 					<label class="checkbox-inline input">*/
/* 						<input type="checkbox" name="description" value="1" id="description" {% if description %}checked="checked"{% endif %} /><span></span>{{ entry_description }}*/
/* 					</label>*/
/* 				</div>*/
/* 			</div>*/
/* 			<br />*/
/* 			{% if manufacturers_search %}*/
/* 				<div class="heading"><span>{{ text_search_manufacturer }}</span></div>*/
/* 				<div class="category-list row row-flex">*/
/* 				{% for manufacturer in manufacturers_search %}*/
/* 					<div class="col-xxl-2 col-lg-2 col-md-2 col-sm-3 col-xs-4">*/
/* 						<a href="{{ manufacturer.href }}" class="category-list__item uni-item">*/
/* 							{% if manufacturer.thumb %}<img src="{{ manufacturer.thumb }}" alt="{{ manufacturer.name }}" title="{{ manufacturer.name }}" class="category-list__img img-responsive" />{% endif %}*/
/* 							{{ manufacturer.name }}*/
/* 						</a>*/
/* 					</div>*/
/* 				{% endfor %}*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			{% if categories_search %}*/
/* 				<div class="heading"><span>{{ text_search_category }}</span></div>*/
/* 				<div class="category-list row row-flex">*/
/* 				{% for category in categories_search %}*/
/* 					<div class="col-xxl-2 col-lg-2 col-md-2 col-sm-3 col-xs-4">*/
/* 						<a href="{{ category.href }}" class="category-list__item uni-item">*/
/* 							{% if category.thumb %}<img src="{{ category.thumb }}" alt="{{ category.name }}" title="{{ category.name }}" class="category-list__img img-responsive" />{% endif %}*/
/* 							{{ category.name }}*/
/* 						</a>*/
/* 					</div>*/
/* 				{% endfor %}*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			<div class="heading"><span>{{ text_search_product }}</span></div>*/
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
/* 					*/
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
/* 			{% else %}*/
/* 				<p>{{ text_empty }}</p>*/
/* 			{% endif %}*/
/* 			{{ content_bottom }}*/
/* 		</div>*/
/* 		{{ column_right }}*/
/* 	</div>*/
/* </div>*/
/* <script>*/
/* $('#button-search').bind('click', function() {*/
/* 	url = 'index.php?route=product/search';*/
/* */
/* 	var search = $('#content input[name=\'search\']').prop('value');*/
/* */
/* 	if (search) {*/
/* 		url += '&search=' + encodeURIComponent(search);*/
/* 	}*/
/* */
/* 	var category_id = $('#content select[name=\'category_id\']').prop('value');*/
/* */
/* 	if (category_id > 0) {*/
/* 		url += '&category_id=' + encodeURIComponent(category_id);*/
/* 	}*/
/* */
/* 	var sub_category = $('#content input[name=\'sub_category\']:checked').prop('value');*/
/* */
/* 	if (sub_category) {*/
/* 		url += '&sub_category=true';*/
/* 	}*/
/* */
/* 	var filter_description = $('#content input[name=\'description\']:checked').prop('value');*/
/* */
/* 	if (filter_description) {*/
/* 		url += '&description=true';*/
/* 	}*/
/* */
/* 	location = url;*/
/* });*/
/* */
/* $('#content input[name=\'search\']').bind('keydown', function(e) {*/
/* 	if (e.keyCode == 13) {*/
/* 		$('#button-search').trigger('click');*/
/* 	}*/
/* });*/
/* */
/* $('select[name=\'category_id\']').on('change', function() {*/
/* 	if (this.value == '0') {*/
/* 		$('input[name=\'sub_category\']').prop('disabled', true);*/
/* 	} else {*/
/* 		$('input[name=\'sub_category\']').prop('disabled', false);*/
/* 	}*/
/* });*/
/* */
/* $('select[name=\'category_id\']').trigger('change');*/
/* */
/* $('.products-block .product-thumb__name, .products-block .product-thumb__description').highlight('{{ search }}');*/
/* </script>*/
/* {{ footer }}*/
