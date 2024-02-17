<?php

/* unishop2/template/error/not_found.twig */
class __TwigTemplate_b43eee985e7349e16381f6bae73eee8c91e6cb8f1e11c9cb15298570d54e4bca extends Twig_Template
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
<div id=\"error-not-found\" class=\"container\">
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
\t<div class=\"row\">
\t\t";
        // line 9
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
\t\t";
        // line 10
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 11
            echo "\t\t\t";
            $context["class"] = "col-sm-4 col-md-4 col-lg-6 col-xxl-12";
            echo "\t\t\t
\t\t";
        } elseif ((        // line 12
(isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 13
            echo "\t\t\t";
            $context["class"] = "col-sm-8 col-md-9 col-lg-9 col-xxl-16";
            // line 14
            echo "\t\t";
        } else {
            // line 15
            echo "\t\t\t";
            $context["class"] = "col-sm-12";
            // line 16
            echo "\t\t";
        }
        // line 17
        echo "\t\t<div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
\t\t\t";
        // line 18
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
\t\t\t";
        // line 19
        if (((twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), 1, array()), "href", array()),  -4, null) == "cart") || (twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), 1, array()), "href", array()),  -5, null) == "cart/"))) {
            // line 20
            echo "\t\t\t\t<div class=\"error-not-found\">
\t\t\t\t\t<div class=\"error-not-found__404\"><i class=\"fas fa-shopping-bag\"></i></div>
\t\t\t\t\t";
            // line 22
            echo (isset($context["text_error"]) ? $context["text_error"] : null);
            echo "
\t\t\t\t</div>
\t\t\t";
        } else {
            // line 25
            echo "\t\t\t\t<div class=\"error-not-found\">
\t\t\t\t\t<div class=\"error-not-found__404\">404</div>
\t\t\t\t\t";
            // line 27
            echo (isset($context["text_error"]) ? $context["text_error"] : null);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 30
        echo "\t\t\t<!--
\t\t\t\t<h1>";
        // line 31
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
\t\t\t\t<p>";
        // line 32
        echo (isset($context["text_error"]) ? $context["text_error"] : null);
        echo "</p>
\t\t\t\t<div class=\"buttons clearfix\">
\t\t\t\t\t<div class=\"pull-right\"><a href=\"";
        // line 34
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a></div>
\t\t\t\t</div>
\t\t\t-->
\t\t\t";
        // line 37
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t\t</div>
\t\t";
        // line 39
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t</div>
</div>
";
        // line 42
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "unishop2/template/error/not_found.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 42,  125 => 39,  120 => 37,  112 => 34,  107 => 32,  103 => 31,  100 => 30,  94 => 27,  90 => 25,  84 => 22,  80 => 20,  78 => 19,  74 => 18,  69 => 17,  66 => 16,  63 => 15,  60 => 14,  57 => 13,  55 => 12,  50 => 11,  48 => 10,  44 => 9,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="error-not-found" class="container">*/
/* 	<ul class="breadcrumb">*/
/* 		{% for breadcrumb in breadcrumbs %}*/
/* 			<li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/* 		{% endfor %}*/
/* 	</ul>*/
/* 	<div class="row">*/
/* 		{{ column_left }}*/
/* 		{% if column_left and column_right %}*/
/* 			{% set class = 'col-sm-4 col-md-4 col-lg-6 col-xxl-12' %}			*/
/* 		{% elseif column_left or column_right %}*/
/* 			{% set class = 'col-sm-8 col-md-9 col-lg-9 col-xxl-16' %}*/
/* 		{% else %}*/
/* 			{% set class = 'col-sm-12' %}*/
/* 		{% endif %}*/
/* 		<div id="content" class="{{ class }}">*/
/* 			{{ content_top }}*/
/* 			{% if breadcrumbs.1.href[-4:] == 'cart' or breadcrumbs.1.href[-5:] == 'cart/'  %}*/
/* 				<div class="error-not-found">*/
/* 					<div class="error-not-found__404"><i class="fas fa-shopping-bag"></i></div>*/
/* 					{{ text_error }}*/
/* 				</div>*/
/* 			{% else %}*/
/* 				<div class="error-not-found">*/
/* 					<div class="error-not-found__404">404</div>*/
/* 					{{ text_error }}*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			<!--*/
/* 				<h1>{{ heading_title }}</h1>*/
/* 				<p>{{ text_error }}</p>*/
/* 				<div class="buttons clearfix">*/
/* 					<div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/* 				</div>*/
/* 			-->*/
/* 			{{ content_bottom }}*/
/* 		</div>*/
/* 		{{ column_right }}*/
/* 	</div>*/
/* </div>*/
/* {{ footer }}*/
/* */
