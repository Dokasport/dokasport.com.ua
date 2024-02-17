<?php

/* unishop2/template/common/success.twig */
class __TwigTemplate_abecad4095e124f227ab6669f3fbd161618a9ec81e7c1e14edb952825de8ddbc extends Twig_Template
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
\t<ul class=\"breadcrumb\">
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
            $context["class"] = "col-sm-4 col-md-4 col-lg-6";
            // line 16
            echo "\t\t";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 17
            echo "\t\t\t";
            $context["class"] = "col-sm-12 col-md-8 col-lg-9";
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
\t\t\t<h1>";
        // line 23
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
\t\t\t";
        // line 24
        echo (isset($context["text_message"]) ? $context["text_message"] : null);
        echo "
\t\t\t";
        // line 25
        echo (isset($context["text_success"]) ? $context["text_success"] : null);
        echo "
\t\t\t<div class=\"buttons\">
\t\t\t\t<div class=\"pull-right\"><a href=\"";
        // line 27
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a></div>
\t\t\t</div>
\t\t\t";
        // line 29
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t\t</div>
\t\t";
        // line 31
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t</div>
</div>
";
        // line 34
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "unishop2/template/common/success.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 34,  114 => 31,  109 => 29,  102 => 27,  97 => 25,  93 => 24,  89 => 23,  85 => 22,  80 => 21,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  65 => 16,  62 => 15,  60 => 14,  56 => 13,  52 => 11,  46 => 10,  40 => 8,  32 => 6,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{header}}*/
/* <div class="container">*/
/* 	<ul class="breadcrumb">*/
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
/* 			{% set class = 'col-sm-4 col-md-4 col-lg-6' %}*/
/* 		{% elseif column_left or column_right %}*/
/* 			{% set class = 'col-sm-12 col-md-8 col-lg-9' %}*/
/* 		{% else %}*/
/* 			{% set class = 'col-sm-12' %}*/
/* 		{% endif %}*/
/* 		<div id="content" class="{{ class }}">*/
/* 			{{ content_top }}*/
/* 			<h1>{{ heading_title }}</h1>*/
/* 			{{ text_message }}*/
/* 			{{ text_success }}*/
/* 			<div class="buttons">*/
/* 				<div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/* 			</div>*/
/* 			{{ content_bottom }}*/
/* 		</div>*/
/* 		{{ column_right }}*/
/* 	</div>*/
/* </div>*/
/* {{ footer }}*/
