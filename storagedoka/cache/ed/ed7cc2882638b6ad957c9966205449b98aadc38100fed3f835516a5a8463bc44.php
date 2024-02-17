<?php

/* unishop2/template/information/information.twig */
class __TwigTemplate_2c70f2a956fb3492ea480e92006cb9721020f498ca974559f47fdf3459525252 extends Twig_Template
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
\t\t\t\t<div class=\"heading-h1\"><h1>";
        // line 23
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1></div>
\t\t\t\t<div class=\"article_description\">
\t\t\t\t\t";
        // line 25
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "
\t\t\t\t</div>
\t\t\t";
        // line 27
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t\t</div>
\t\t";
        // line 29
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
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["i"] => $context["breadcrumb"]) {
            // line 38
            echo "\t\t\t{
\t\t\t\"@type\": \"ListItem\",
\t\t\t\"position\": ";
            // line 40
            echo ($context["i"] + 1);
            echo ",
\t\t\t\"name\": \"";
            // line 41
            echo ((($context["i"] == 0)) ? ((isset($context["shop_name"]) ? $context["shop_name"] : null)) : ($this->getAttribute($context["breadcrumb"], "text", array())));
            echo "\",
\t\t\t\"item\": \"";
            // line 42
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\"
\t\t\t";
            // line 43
            echo (((($context["i"] + 1) < twig_length_filter($this->env, (isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null)))) ? ("},") : ("}"));
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t]
\t}
</script>
";
        // line 48
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "unishop2/template/information/information.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 48,  146 => 45,  138 => 43,  134 => 42,  130 => 41,  126 => 40,  122 => 38,  118 => 37,  107 => 29,  102 => 27,  97 => 25,  92 => 23,  88 => 22,  83 => 21,  80 => 20,  77 => 19,  74 => 18,  71 => 17,  68 => 16,  65 => 15,  63 => 14,  59 => 13,  55 => 11,  49 => 10,  43 => 8,  35 => 6,  32 => 5,  28 => 4,  24 => 3,  19 => 1,);
    }
}
/* {{header}}*/
/* <div class="container">*/
/* 	<ul class="breadcrumb {{ menu_expanded ? 'col-md-offset-3 col-lg-offset-3 col-xxl-offset-4' }}">*/
/* 		{% for key, breadcrumb in breadcrumbs %}*/
/* 			{% if key + 1 < breadcrumbs|length %}*/
/* 				<li><a href="{{breadcrumb.href}}">{{breadcrumb.text}}</a></li>*/
/* 			{% else %}*/
/* 				<li>{{breadcrumb.text}}</li>*/
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
/* 		<div id="content" class="{{class}}">*/
/* 			{{ content_top }}*/
/* 				<div class="heading-h1"><h1>{{ heading_title }}</h1></div>*/
/* 				<div class="article_description">*/
/* 					{{ description }}*/
/* 				</div>*/
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
/* 			"position": {{i+1}},*/
/* 			"name": "{{i == 0 ? shop_name: breadcrumb.text}}",*/
/* 			"item": "{{breadcrumb.href}}"*/
/* 			{{i + 1 < breadcrumbs|length ? '},' : '}' }}*/
/* 		{% endfor %}*/
/* 		]*/
/* 	}*/
/* </script>*/
/* {{footer}}*/
