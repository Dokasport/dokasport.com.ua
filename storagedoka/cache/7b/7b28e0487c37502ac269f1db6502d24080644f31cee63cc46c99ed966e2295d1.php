<?php

/* unishop2/template/common/column_left.twig */
class __TwigTemplate_1fc7bc056d5ae3c9f089990313af6fa93c171ac6c590a97eab8519dde0cb20ef extends Twig_Template
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
        if (((isset($context["modules"]) ? $context["modules"] : null) || (isset($context["menu_expanded"]) ? $context["menu_expanded"] : null))) {
            // line 2
            echo "\t<aside id=\"column-left\" class=\"col-sm-4 col-md-3 col-lg-3 col-xxl-4 hidden-xs ";
            echo ((((isset($context["route"]) ? $context["route"] : null) == "common/home")) ? ("hidden-sm") : (""));
            echo "\">
\t\t";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 4
                echo "\t\t\t";
                echo $context["module"];
                echo "
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "\t</aside>
";
        }
    }

    public function getTemplateName()
    {
        return "unishop2/template/common/column_left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  30 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if modules or menu_expanded %}*/
/* 	<aside id="column-left" class="col-sm-4 col-md-3 col-lg-3 col-xxl-4 hidden-xs {{ route == 'common/home' ? 'hidden-sm' }}">*/
/* 		{% for module in modules %}*/
/* 			{{ module }}*/
/* 		{% endfor %}*/
/* 	</aside>*/
/* {% endif %}*/
/* */
