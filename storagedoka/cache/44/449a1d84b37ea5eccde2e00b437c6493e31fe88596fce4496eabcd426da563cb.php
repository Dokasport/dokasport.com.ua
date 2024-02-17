<?php

/* unishop2/template/extension/module/uni_live_search.twig */
class __TwigTemplate_4033472cd221338e38d0bf4f6cc5c7d3f79ba6586bf7d36b2429c206e67f87c2 extends Twig_Template
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
        if ((((isset($context["categories"]) ? $context["categories"] : null) || (isset($context["products"]) ? $context["products"] : null)) || (isset($context["manufacturers"]) ? $context["manufacturers"] : null))) {
            // line 2
            echo "\t";
            if ((isset($context["manufacturers"]) ? $context["manufacturers"] : null)) {
                // line 3
                echo "\t\t<li class=\"live-search__section\">";
                echo (isset($context["text_search_manufacturer"]) ? $context["text_search_manufacturer"] : null);
                echo "</li>
\t";
            }
            // line 5
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["manufacturers"]) ? $context["manufacturers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                // line 6
                echo "\t\t<li class=\"live-search__category uni-href\" data-href=\"";
                echo $this->getAttribute($context["manufacturer"], "href", array());
                echo "\">
\t\t\t<a>";
                // line 7
                echo $this->getAttribute($context["manufacturer"], "name", array());
                echo "</a>
\t\t</li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['manufacturer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "\t";
            if ((isset($context["categories"]) ? $context["categories"] : null)) {
                // line 11
                echo "\t\t<li class=\"live-search__section\">";
                echo (isset($context["text_search_category"]) ? $context["text_search_category"] : null);
                echo "</li>
\t";
            }
            // line 13
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 14
                echo "\t\t<li class=\"live-search__category uni-href\" data-href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\">
\t\t\t<a>";
                // line 15
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a>
\t\t</li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t";
            if (((isset($context["products"]) ? $context["products"] : null) && ((isset($context["manufacturers"]) ? $context["manufacturers"] : null) || (isset($context["categories"]) ? $context["categories"] : null)))) {
                // line 19
                echo "\t\t<li class=\"live-search__section\">";
                echo (isset($context["text_search_product"]) ? $context["text_search_product"] : null);
                echo "</li>
\t";
            }
            // line 21
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 22
                echo "\t\t<li class=\"live-search__item uni-href\" data-href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">
\t\t\t";
                // line 23
                if ($this->getAttribute($context["product"], "image", array())) {
                    // line 24
                    echo "\t\t\t\t<div class=\"live-search__image\"><img alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" src=\"";
                    echo $this->getAttribute($context["product"], "image", array());
                    echo "\"></div>
\t\t\t";
                }
                // line 26
                echo "\t\t\t<div class=\"live-search__wrapper\">
\t\t\t\t<div class=\"live-search__name\">";
                // line 27
                echo $this->getAttribute($context["product"], "name", array());
                echo "</div>
\t\t\t\t";
                // line 28
                if ($this->getAttribute($context["product"], "description", array())) {
                    // line 29
                    echo "\t\t\t\t\t<div class=\"live-search__description\">
\t\t\t\t\t\t";
                    // line 30
                    echo $this->getAttribute($context["product"], "description", array());
                    echo "
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 33
                echo "\t\t\t\t";
                if (($this->getAttribute($context["product"], "rating", array()) >= 0)) {
                    // line 34
                    echo "\t\t\t\t\t<div class=\"live-search__rating rating\">
\t\t\t\t\t\t";
                    // line 35
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 36
                        echo "\t\t\t\t\t\t\t<i class=\"";
                        echo ((($this->getAttribute($context["product"], "rating", array()) < $context["i"])) ? ("far") : ("fa"));
                        echo " fa-star\"></i>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    echo " 
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 40
                echo "\t\t\t</div>
\t\t\t";
                // line 41
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 42
                    echo "\t\t\t\t<div class=\"live-search__price price\">
\t\t\t\t\t";
                    // line 43
                    if ($this->getAttribute($context["product"], "special", array())) {
                        // line 44
                        echo "\t\t\t\t\t\t<span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span><span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>
\t\t\t\t\t";
                    } else {
                        // line 46
                        echo "\t\t\t\t\t\t";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
\t\t\t\t\t";
                    }
                    // line 48
                    echo "\t\t\t\t</div>
\t\t\t";
                }
                // line 50
                echo "\t\t</li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t";
            if ((isset($context["show_more"]) ? $context["show_more"] : null)) {
                // line 53
                echo "\t\t<li class=\"live-search__item live-search__more\">
\t\t\t<a href=\"";
                // line 54
                echo (isset($context["show_more_link"]) ? $context["show_more_link"] : null);
                echo "\">";
                echo (isset($context["text_live_search_all"]) ? $context["text_live_search_all"] : null);
                echo " (";
                echo (isset($context["products_total"]) ? $context["products_total"] : null);
                echo ")</a>
\t\t</li>
\t";
            }
        } else {
            // line 58
            echo "\t<li style=\"text-align:center;padding:5px 0;\">";
            echo (isset($context["text_live_search_empty"]) ? $context["text_live_search_empty"] : null);
            echo "</li>
";
        }
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/uni_live_search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 58,  189 => 54,  186 => 53,  183 => 52,  176 => 50,  172 => 48,  166 => 46,  158 => 44,  156 => 43,  153 => 42,  151 => 41,  148 => 40,  143 => 37,  134 => 36,  130 => 35,  127 => 34,  124 => 33,  118 => 30,  115 => 29,  113 => 28,  109 => 27,  106 => 26,  98 => 24,  96 => 23,  91 => 22,  86 => 21,  80 => 19,  77 => 18,  68 => 15,  63 => 14,  58 => 13,  52 => 11,  49 => 10,  40 => 7,  35 => 6,  30 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if categories or products or manufacturers %}*/
/* 	{% if manufacturers %}*/
/* 		<li class="live-search__section">{{ text_search_manufacturer }}</li>*/
/* 	{% endif %}*/
/* 	{% for manufacturer in manufacturers %}*/
/* 		<li class="live-search__category uni-href" data-href="{{ manufacturer.href }}">*/
/* 			<a>{{ manufacturer.name }}</a>*/
/* 		</li>*/
/* 	{% endfor %}*/
/* 	{% if categories %}*/
/* 		<li class="live-search__section">{{ text_search_category }}</li>*/
/* 	{% endif %}*/
/* 	{% for category in categories %}*/
/* 		<li class="live-search__category uni-href" data-href="{{ category.href }}">*/
/* 			<a>{{ category.name }}</a>*/
/* 		</li>*/
/* 	{% endfor %}*/
/* 	{% if products and (manufacturers or categories) %}*/
/* 		<li class="live-search__section">{{ text_search_product }}</li>*/
/* 	{% endif %}*/
/* 	{% for product in products %}*/
/* 		<li class="live-search__item uni-href" data-href="{{ product.href  }}">*/
/* 			{% if product.image %}*/
/* 				<div class="live-search__image"><img alt="{{ product.name }}" src="{{ product.image }}"></div>*/
/* 			{% endif %}*/
/* 			<div class="live-search__wrapper">*/
/* 				<div class="live-search__name">{{ product.name }}</div>*/
/* 				{% if product.description %}*/
/* 					<div class="live-search__description">*/
/* 						{{ product.description }}*/
/* 					</div>*/
/* 				{% endif %}*/
/* 				{% if product.rating >= 0 %}*/
/* 					<div class="live-search__rating rating">*/
/* 						{% for i in 1..5 %}*/
/* 							<i class="{{ product.rating < i ? 'far' : 'fa' }} fa-star"></i>*/
/* 						{% endfor %} */
/* 					</div>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 			{% if product.price %}*/
/* 				<div class="live-search__price price">*/
/* 					{% if product.special %}*/
/* 						<span class="price-old">{{ product.price }}</span><span class="price-new">{{ product.special }}</span>*/
/* 					{% else %}*/
/* 						{{ product.price }}*/
/* 					{% endif %}*/
/* 				</div>*/
/* 			{% endif %}*/
/* 		</li>*/
/* 	{% endfor %}*/
/* 	{% if show_more %}*/
/* 		<li class="live-search__item live-search__more">*/
/* 			<a href="{{ show_more_link }}">{{ text_live_search_all }} ({{ products_total }})</a>*/
/* 		</li>*/
/* 	{% endif %}*/
/* {% else %}*/
/* 	<li style="text-align:center;padding:5px 0;">{{ text_live_search_empty }}</li>*/
/* {% endif %}*/
