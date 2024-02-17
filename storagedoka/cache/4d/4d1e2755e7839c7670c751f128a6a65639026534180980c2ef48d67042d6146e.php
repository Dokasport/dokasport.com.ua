<?php

/* unishop2/template/common/search.twig */
class __TwigTemplate_713f404b5c25d3fe98b389266100bb7b80bf93a947ecece4dfe109b1df72f3fc extends Twig_Template
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
        echo "<div class=\"header-search\">
\t<div class=\"header-search__form\">
\t\t";
        // line 3
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 4
            echo "\t\t\t<div class=\"header-search__category cat-id\">
\t\t\t\t<button type=\"button\" class=\"header-search__category-btn dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"header-search__category-span\">";
            // line 5
            echo (isset($context["text_search_all"]) ? $context["text_search_all"] : null);
            echo "</span></button>
\t\t\t\t<input type=\"hidden\" name=\"filter_category_id\" value=\"\" />
\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t<li class=\"header-search__category-li\" data-id=\"\"><a>";
            // line 8
            echo (isset($context["text_search_all"]) ? $context["text_search_all"] : null);
            echo "</a></li>
\t\t\t\t\t";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 10
                echo "\t\t\t\t\t\t<li class=\"header-search__category-li\" data-id=\"";
                echo $this->getAttribute($context["category"], "category_id", array());
                echo "\"><a>";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a></li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t";
        }
        // line 15
        echo "\t\t<input type=\"text\" name=\"search\" value=\"";
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\" aria-label=\"Search\" class=\"header-search__input form-control\" />
\t\t<button type=\"button\" class=\"header-search__btn search-btn\"><i class=\"fa fa-search\"></i></button>
\t</div>
\t<div class=\"live-search\" style=\"display:none\"><ul class=\"live-search__ul\"><li class=\"loading\"></li></ul></div>
</div>";
    }

    public function getTemplateName()
    {
        return "unishop2/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  53 => 12,  42 => 10,  38 => 9,  34 => 8,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="header-search">*/
/* 	<div class="header-search__form">*/
/* 		{% if categories %}*/
/* 			<div class="header-search__category cat-id">*/
/* 				<button type="button" class="header-search__category-btn dropdown-toggle" data-toggle="dropdown"><span class="header-search__category-span">{{ text_search_all }}</span></button>*/
/* 				<input type="hidden" name="filter_category_id" value="" />*/
/* 				<ul class="dropdown-menu">*/
/* 					<li class="header-search__category-li" data-id=""><a>{{ text_search_all }}</a></li>*/
/* 					{% for category in categories %}*/
/* 						<li class="header-search__category-li" data-id="{{ category.category_id }}"><a>{{ category.name }}</a></li>*/
/* 					{% endfor %}*/
/* 				</ul>*/
/* 			</div>*/
/* 		{% endif %}*/
/* 		<input type="text" name="search" value="{{ search }}" placeholder="{{ text_search }}" aria-label="Search" class="header-search__input form-control" />*/
/* 		<button type="button" class="header-search__btn search-btn"><i class="fa fa-search"></i></button>*/
/* 	</div>*/
/* 	<div class="live-search" style="display:none"><ul class="live-search__ul"><li class="loading"></li></ul></div>*/
/* </div>*/
