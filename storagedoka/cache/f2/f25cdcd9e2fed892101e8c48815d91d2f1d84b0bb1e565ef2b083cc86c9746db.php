<?php

/* unishop2/template/common/language.twig */
class __TwigTemplate_f65969f2bd6a844696a081c5e96f5bcdde34fc508ebe1fbf6fbde3a0863e987e extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["languages"]) ? $context["languages"] : null)) > 1)) {
            // line 2
            echo "\t<div class=\"pull-right\">
\t\t<form action=\"";
            // line 3
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"language\">
\t\t\t<div class=\"btn-group\">
\t\t\t\t<button class=\"top-menu__btn dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-globe\" title=\"";
            // line 5
            echo $this->getAttribute((isset($context["language"]) ? $context["language"] : null), "name", array());
            echo "\"></i><span class=\"hidden-xs\">";
            echo (isset($context["text_language"]) ? $context["text_language"] : null);
            echo "</span></button>
\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 8
                echo "\t\t\t\t\t\t<li><a data-code=\"";
                echo $this->getAttribute($context["language"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</a></li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<input type=\"hidden\" name=\"code\" value=\"\" />
\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            // line 13
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\" />
\t\t</form>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "unishop2/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  51 => 10,  40 => 8,  36 => 7,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if languages|length > 1 %}*/
/* 	<div class="pull-right">*/
/* 		<form action="{{ action }}" method="post" enctype="multipart/form-data" id="language">*/
/* 			<div class="btn-group">*/
/* 				<button class="top-menu__btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe" title="{{ language.name }}"></i><span class="hidden-xs">{{ text_language }}</span></button>*/
/* 				<ul class="dropdown-menu dropdown-menu-right">*/
/* 					{% for language in languages %}*/
/* 						<li><a data-code="{{ language.code }}">{{ language.name }}</a></li>*/
/* 					{% endfor %}*/
/* 				</ul>*/
/* 			</div>*/
/* 			<input type="hidden" name="code" value="" />*/
/* 			<input type="hidden" name="redirect" value="{{ redirect }}" />*/
/* 		</form>*/
/* 	</div>*/
/* {% endif %}*/
