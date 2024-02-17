<?php

/* unishop2/template/product/compare.twig */
class __TwigTemplate_fc34793f07fde3b79e6ae1c02b4552e3b1bdfaa2c204768d7ef5c75a028a55f8 extends Twig_Template
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
<div id=\"product-compare\" class=\"container\">
\t<ul class=\"breadcrumb\">
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "\t\t\t<li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "\t</ul>
\t";
        // line 8
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 9
            echo "\t\t<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t";
        }
        // line 13
        echo "\t<div class=\"row\">
\t\t";
        // line 14
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
\t\t";
        // line 15
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 16
            echo "\t\t\t";
            $context["class"] = "col-sm-6";
            // line 17
            echo "\t\t";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 18
            echo "\t\t\t";
            $context["class"] = "col-sm-9";
            // line 19
            echo "\t\t";
        } else {
            // line 20
            echo "\t\t\t";
            $context["class"] = "col-sm-12";
            // line 21
            echo "\t\t";
        }
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
\t\t\t";
        // line 25
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 26
            echo "\t\t\t\t<div class=\"compare-page__scroll\">
\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t<thead>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 32
            echo (isset($context["text_name"]) ? $context["text_name"] : null);
            echo "</td>
\t\t\t\t\t\t\t";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 34
                echo "\t\t\t\t\t\t\t\t<td><a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></td>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 38
            echo (isset($context["text_image"]) ? $context["text_image"] : null);
            echo "</td>
\t\t\t\t\t\t\t";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 40
                echo "\t\t\t\t\t\t\t\t<td class=\"text-center\">";
                if ($this->getAttribute($context["product"], "thumb", array())) {
                    echo " <img src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-thumbnail\" /> ";
                }
                echo "</td>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 44
            echo (isset($context["text_price"]) ? $context["text_price"] : null);
            echo "</td>
\t\t\t\t\t\t\t";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 46
                echo "\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                // line 47
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 48
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 49
                    if (twig_test_empty($this->getAttribute($context["product"], "special", array()))) {
                        // line 50
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 52
                        echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span> <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> 
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 54
                    echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 56
                echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 60
            echo (isset($context["text_model"]) ? $context["text_model"] : null);
            echo "</td>
\t\t\t\t\t\t\t";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 62
                echo "\t\t\t\t\t\t\t\t<td>";
                echo $this->getAttribute($context["product"], "model", array());
                echo "</td>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 66
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo "</td>
\t\t\t\t\t\t\t";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 68
                echo "\t\t\t\t\t\t\t\t<td>";
                echo $this->getAttribute($context["product"], "manufacturer", array());
                echo "</td>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<!--
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 73
            echo (isset($context["text_availability"]) ? $context["text_availability"] : null);
            echo "</td>
\t\t\t\t\t\t\t";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 75
                echo "\t\t\t\t\t\t\t\t<td>";
                echo $this->getAttribute($context["product"], "availability", array());
                echo "</td>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t\t-->
\t\t\t\t\t\t";
            // line 79
            if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
                // line 80
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                // line 81
                echo (isset($context["text_rating"]) ? $context["text_rating"] : null);
                echo "</td>
\t\t\t\t\t\t\t\t";
                // line 82
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 83
                    echo "\t\t\t\t\t\t\t\t\t<td class=\"rating\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 84
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 85
                        echo "\t\t\t\t\t\t\t\t\t\t\t<i class=\"";
                        echo ((($this->getAttribute($context["product"], "rating", array()) < $context["i"])) ? ("far") : ("fa"));
                        echo " fa-star\"></i>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 86
                    echo " 
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t";
                    // line 88
                    echo $this->getAttribute($context["product"], "reviews", array());
                    echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 91
                echo "\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            // line 93
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 94
            echo (isset($context["text_summary"]) ? $context["text_summary"] : null);
            echo "</td>
\t\t\t\t\t\t\t";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 96
                echo "\t\t\t\t\t\t\t\t<td class=\"description\">";
                echo $this->getAttribute($context["product"], "description", array());
                echo "</td>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 100
            echo (isset($context["text_weight"]) ? $context["text_weight"] : null);
            echo "</td>
\t\t\t\t\t\t\t";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 102
                echo "\t\t\t\t\t\t\t\t<td>";
                echo $this->getAttribute($context["product"], "weight", array());
                echo "</td>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 106
            echo (isset($context["text_dimension"]) ? $context["text_dimension"] : null);
            echo "</td>
\t\t\t\t\t\t\t";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 108
                echo "\t\t\t\t\t\t\t\t<td>";
                echo $this->getAttribute($context["product"], "length", array());
                echo " x ";
                echo $this->getAttribute($context["product"], "width", array());
                echo " x ";
                echo $this->getAttribute($context["product"], "height", array());
                echo "</td>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t\t";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 113
                echo "\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"";
                // line 115
                echo (twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null)) + 1);
                echo "\"><strong>";
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</strong></td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t";
                // line 118
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                    // line 119
                    echo "\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
                    // line 121
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</td>
\t\t\t\t\t\t\t\t\t";
                    // line 122
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 123
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute($this->getAttribute($context["product"], "attribute", array()), $context["key"], array(), "array")) {
                            // line 124
                            echo "\t\t\t\t\t\t\t\t\t\t\t<td> ";
                            echo $this->getAttribute($this->getAttribute($context["product"], "attribute", array()), $context["key"], array(), "array");
                            echo "</td>
\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 126
                            echo "\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 128
                        echo "\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 129
                    echo "\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 132
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 136
                echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"add_to_cart button btn ";
                // line 137
                echo $this->getAttribute($context["product"], "cart_btn_class", array());
                echo " ";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "cart_btn_text", array());
                echo "\" onclick=\"cart.add(";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo ", this)\"><i class=\"";
                echo $this->getAttribute($context["product"], "cart_btn_icon", array());
                echo "\"></i><span class=\"hidden-xs\">";
                echo $this->getAttribute($context["product"], "cart_btn_text", array());
                echo "</span></button>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 138
                echo $this->getAttribute($context["product"], "remove", array());
                echo "\" class=\"btn btn-default\" style=\"margin:0 0 0 10px\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\"><i class=\"fa fa-trash-alt\"></i></a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t";
        } else {
            // line 145
            echo "\t\t\t\t<p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t<div class=\"pull-right\"><a href=\"";
            // line 147
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-default\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 150
        echo "\t\t\t";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t\t</div>
\t\t";
        // line 152
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t</div>
</div>
";
        // line 155
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "unishop2/template/product/compare.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  515 => 155,  509 => 152,  503 => 150,  495 => 147,  489 => 145,  483 => 141,  472 => 138,  458 => 137,  455 => 136,  451 => 135,  447 => 133,  441 => 132,  433 => 129,  427 => 128,  423 => 126,  417 => 124,  414 => 123,  410 => 122,  406 => 121,  402 => 119,  398 => 118,  390 => 115,  386 => 113,  382 => 112,  378 => 110,  365 => 108,  361 => 107,  357 => 106,  353 => 104,  344 => 102,  340 => 101,  336 => 100,  332 => 98,  323 => 96,  319 => 95,  315 => 94,  312 => 93,  308 => 91,  299 => 88,  295 => 86,  286 => 85,  282 => 84,  279 => 83,  275 => 82,  271 => 81,  268 => 80,  266 => 79,  262 => 77,  253 => 75,  249 => 74,  245 => 73,  240 => 70,  231 => 68,  227 => 67,  223 => 66,  219 => 64,  210 => 62,  206 => 61,  202 => 60,  198 => 58,  191 => 56,  187 => 54,  179 => 52,  173 => 50,  171 => 49,  168 => 48,  166 => 47,  163 => 46,  159 => 45,  155 => 44,  151 => 42,  134 => 40,  130 => 39,  126 => 38,  122 => 36,  111 => 34,  107 => 33,  103 => 32,  95 => 26,  93 => 25,  89 => 24,  85 => 23,  80 => 22,  77 => 21,  74 => 20,  71 => 19,  68 => 18,  65 => 17,  62 => 16,  60 => 15,  56 => 14,  53 => 13,  45 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{header}}*/
/* <div id="product-compare" class="container">*/
/* 	<ul class="breadcrumb">*/
/* 		{% for breadcrumb in breadcrumbs %}*/
/* 			<li><a href="{{breadcrumb.href}}">{{breadcrumb.text}}</a></li>*/
/* 		{% endfor %}*/
/* 	</ul>*/
/* 	{% if success %}*/
/* 		<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{success}}*/
/* 			<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	<div class="row">*/
/* 		{{column_left}}*/
/* 		{% if column_left and column_right %}*/
/* 			{% set class = 'col-sm-6' %}*/
/* 		{% elseif column_left or column_right %}*/
/* 			{% set class = 'col-sm-9' %}*/
/* 		{% else %}*/
/* 			{% set class = 'col-sm-12' %}*/
/* 		{% endif %}*/
/* 		<div id="content" class="{{ class }}">*/
/* 			{{content_top}}*/
/* 			<div class="heading-h1"><h1>{{ heading_title }}</h1></div>*/
/* 			{% if products %}*/
/* 				<div class="compare-page__scroll">*/
/* 				<table class="table table-bordered">*/
/* 					<thead>*/
/* 					</thead>*/
/* 					<tbody>*/
/* 						<tr>*/
/* 							<td>{{text_name}}</td>*/
/* 							{% for product in products %}*/
/* 								<td><a href="{{ product.href }}">{{ product.name }}</a></td>*/
/* 							{% endfor %}*/
/* 						</tr>*/
/* 						<tr>*/
/* 							<td>{{text_image}}</td>*/
/* 							{% for product in products %}*/
/* 								<td class="text-center">{% if product.thumb %} <img src="{{product.thumb}}" alt="{{ product.name }}" title="{{ product.name }}" class="img-thumbnail" /> {% endif %}</td>*/
/* 							{% endfor %}*/
/* 						</tr>*/
/* 						<tr>*/
/* 							<td>{{text_price}}</td>*/
/* 							{% for product in products %}*/
/* 								<td>*/
/* 								{% if product.price %}*/
/* 									<div class="price">*/
/* 										{% if product.special is empty %}*/
/* 											{{ product.price }}*/
/* 										{% else %}*/
/* 											<span class="price-old">{{ product.price }}</span> <span class="price-new">{{ product.special }}</span> */
/* 										{% endif %}*/
/* 									</div>*/
/* 								{% endif %}*/
/* 								</td>*/
/* 							{% endfor %}*/
/* 						</tr>*/
/* 						<tr>*/
/* 							<td>{{text_model}}</td>*/
/* 							{% for product in products %}*/
/* 								<td>{{ product.model }}</td>*/
/* 							{% endfor %}*/
/* 						</tr>*/
/* 						<tr>*/
/* 							<td>{{ text_manufacturer }}</td>*/
/* 							{% for product in products %}*/
/* 								<td>{{ product.manufacturer }}</td>*/
/* 							{% endfor %}*/
/* 						</tr>*/
/* 						<!--*/
/* 						<tr>*/
/* 							<td>{{ text_availability }}</td>*/
/* 							{% for product in products %}*/
/* 								<td>{{ product.availability }}</td>*/
/* 							{% endfor %}*/
/* 						</tr>*/
/* 						-->*/
/* 						{% if review_status %}*/
/* 							<tr>*/
/* 								<td>{{ text_rating }}</td>*/
/* 								{% for product in products %}*/
/* 									<td class="rating">*/
/* 										{% for i in 1..5 %}*/
/* 											<i class="{{product.rating < i ? 'far' : 'fa'}} fa-star"></i>*/
/* 										{% endfor %} */
/* 										<br />*/
/* 										{{ product.reviews }}*/
/* 									</td>*/
/* 								{% endfor %}*/
/* 							</tr>*/
/* 						{% endif %}*/
/* 						<tr>*/
/* 							<td>{{text_summary}}</td>*/
/* 							{% for product in products %}*/
/* 								<td class="description">{{ product.description }}</td>*/
/* 							{% endfor %}*/
/* 						</tr>*/
/* 						<tr>*/
/* 							<td>{{text_weight}}</td>*/
/* 							{% for product in products %}*/
/* 								<td>{{ product.weight }}</td>*/
/* 							{% endfor %}*/
/* 						</tr>*/
/* 						<tr>*/
/* 							<td>{{text_dimension}}</td>*/
/* 							{% for product in products %}*/
/* 								<td>{{ product.length }} x {{ product.width }} x {{ product.height }}</td>*/
/* 							{% endfor %}*/
/* 						</tr>*/
/* 					</tbody>*/
/* 					{% for attribute_group in attribute_groups %}*/
/* 						<thead>*/
/* 							<tr>*/
/* 								<td colspan="{{ products|length + 1 }}"><strong>{{ attribute_group.name }}</strong></td>*/
/* 							</tr>*/
/* 						</thead>*/
/* 						{% for key, attribute in attribute_group.attribute %}*/
/* 							<tbody>*/
/* 								<tr>*/
/* 									<td>{{ attribute.name }}</td>*/
/* 									{% for product in products %}*/
/* 										{% if product.attribute[key] %}*/
/* 											<td> {{ product.attribute[key] }}</td>*/
/* 										{% else %}*/
/* 											<td></td>*/
/* 										{% endif %}*/
/* 									{% endfor %}*/
/* 								</tr>*/
/* 							</tbody>*/
/* 						{% endfor %}*/
/* 					{% endfor %}*/
/* 					<tr>*/
/* 						<td></td>*/
/* 						{% for product in products %}*/
/* 							<td>*/
/* 								<button type="button" class="add_to_cart button btn {{ product.cart_btn_class }} {{ product.product_id }}" title="{{ product.cart_btn_text }}" onclick="cart.add({{product.product_id}}, this)"><i class="{{product.cart_btn_icon}}"></i><span class="hidden-xs">{{product.cart_btn_text}}</span></button>*/
/* 								<a href="{{ product.remove }}" class="btn btn-default" style="margin:0 0 0 10px" title="{{ button_remove }}"><i class="fa fa-trash-alt"></i></a>*/
/* 							</td>*/
/* 						{% endfor %}*/
/* 					</tr>*/
/* 				</table>*/
/* 				</div>*/
/* 			{% else %}*/
/* 				<p>{{text_empty}}</p>*/
/* 				<div class="buttons">*/
/* 					<div class="pull-right"><a href="{{ continue }}" class="btn btn-default">{{ button_continue }}</a></div>*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			{{ content_bottom }}*/
/* 		</div>*/
/* 		{{ column_right }}*/
/* 	</div>*/
/* </div>*/
/* {{ footer }} */
