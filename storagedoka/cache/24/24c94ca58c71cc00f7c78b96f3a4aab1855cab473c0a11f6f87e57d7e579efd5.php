<?php

/* unishop2/template/common/content_top.twig */
class __TwigTemplate_b7ab1264f6ff2f70f79e673bbf255bab3426fa256d37f5e48ab98c3ecd0a71ac extends Twig_Template
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
        if ((isset($context["modules"]) ? $context["modules"] : null)) {
            // line 2
            echo "\t<div class=\"content-top\">
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
            echo "\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "unishop2/template/common/content_top.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if modules %}*/
/* 	<div class="content-top">*/
/* 		{% for module in modules %}*/
/* 			{{ module }}*/
/* 		{% endfor %}*/
/* 	</div>*/
/* {% endif %}*/
