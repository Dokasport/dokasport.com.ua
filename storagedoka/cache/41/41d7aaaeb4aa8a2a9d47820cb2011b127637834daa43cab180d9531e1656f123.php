<?php

/* unishop2/template/common/home.twig */
class __TwigTemplate_3ece4c7bff022ca5239a6447ac8b672b2ca3745ffce775c0317aa04a34d32c87 extends Twig_Template
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
<div class=\"home-page container\">
\t<div class=\"row\">
\t\t";
        // line 4
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
\t\t";
        // line 5
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 6
            echo "\t\t\t";
            $context["class"] = "col-sm-12 col-md-6 col-lg-6 col-xxl-12";
            // line 7
            echo "\t\t";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 8
            echo "\t\t\t";
            $context["class"] = "col-sm-12 col-md-9 col-lg-9 col-xxl-16";
            // line 9
            echo "\t\t";
        } else {
            // line 10
            echo "\t\t\t";
            $context["class"] = "col-sm-12";
            // line 11
            echo "\t\t";
        }
        // line 12
        echo "\t\t<div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
\t\t\t";
        // line 13
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
\t\t</div>
\t\t";
        // line 15
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t</div>
\t";
        // line 17
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
</div>
";
        // line 19
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "unishop2/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  64 => 17,  59 => 15,  54 => 13,  49 => 12,  46 => 11,  43 => 10,  40 => 9,  37 => 8,  34 => 7,  31 => 6,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div class="home-page container">*/
/* 	<div class="row">*/
/* 		{{ column_left }}*/
/* 		{% if column_left and column_right %}*/
/* 			{% set class = 'col-sm-12 col-md-6 col-lg-6 col-xxl-12' %}*/
/* 		{% elseif column_left or column_right %}*/
/* 			{% set class = 'col-sm-12 col-md-9 col-lg-9 col-xxl-16' %}*/
/* 		{% else %}*/
/* 			{% set class = 'col-sm-12' %}*/
/* 		{% endif %}*/
/* 		<div id="content" class="{{ class }}">*/
/* 			{{ content_top }}*/
/* 		</div>*/
/* 		{{ column_right }}*/
/* 	</div>*/
/* 	{{ content_bottom }}*/
/* </div>*/
/* {{ footer }}*/
