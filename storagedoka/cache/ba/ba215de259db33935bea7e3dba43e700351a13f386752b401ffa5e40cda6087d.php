<?php

/* unishop2/template/common/currency.twig */
class __TwigTemplate_f780793b3de2c3bc271d2e8d6faf4c11f4c792493752a7bde50e3f8d6f2a8780 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["currencies"]) ? $context["currencies"] : null)) > 1)) {
            // line 2
            echo "<div class=\"pull-right\">
\t<form action=\"";
            // line 3
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"currency\">
\t\t<div class=\"btn-group\">
\t\t    <button class=\"top-menu__btn dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 7
                echo "\t\t\t\t\t";
                if (($this->getAttribute($context["currency"], "symbol_left", array()) && ($this->getAttribute($context["currency"], "code", array()) == (isset($context["code"]) ? $context["code"] : null)))) {
                    // line 8
                    echo "\t\t\t\t\t\t";
                    echo $this->getAttribute($context["currency"], "symbol_left", array());
                    echo "
\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 9
$context["currency"], "symbol_right", array()) && ($this->getAttribute($context["currency"], "code", array()) == (isset($context["code"]) ? $context["code"] : null)))) {
                    // line 10
                    echo "\t\t\t\t\t\t";
                    echo $this->getAttribute($context["currency"], "symbol_right", array());
                    echo "
\t\t\t\t\t";
                }
                // line 12
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "\t\t\t\t<span class=\"hidden-xs\">";
            echo (isset($context["text_currency"]) ? $context["text_currency"] : null);
            echo "</span>
\t\t\t</button>
\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 17
                echo "\t\t\t\t\t<li><a data-code=\"";
                echo $this->getAttribute($context["currency"], "code", array());
                echo "\">";
                echo (($this->getAttribute($context["currency"], "symbol_left", array())) ? ($this->getAttribute($context["currency"], "symbol_left", array())) : ($this->getAttribute($context["currency"], "symbol_right", array())));
                echo " ";
                echo $this->getAttribute($context["currency"], "title", array());
                echo "</a></li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t\t\t</ul>
\t\t </div>
\t\t<input type=\"hidden\" name=\"code\" value=\"\" />
\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            // line 22
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\" />
\t</form>
</div>
";
        }
        // line 25
        echo " ";
    }

    public function getTemplateName()
    {
        return "unishop2/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 25,  85 => 22,  80 => 19,  67 => 17,  63 => 16,  56 => 13,  50 => 12,  44 => 10,  42 => 9,  37 => 8,  34 => 7,  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if currencies|length > 1 %}*/
/* <div class="pull-right">*/
/* 	<form action="{{ action }}" method="post" enctype="multipart/form-data" id="currency">*/
/* 		<div class="btn-group">*/
/* 		    <button class="top-menu__btn dropdown-toggle" data-toggle="dropdown">*/
/* 				{% for currency in currencies %}*/
/* 					{% if currency.symbol_left and currency.code == code %}*/
/* 						{{ currency.symbol_left }}*/
/* 					{% elseif currency.symbol_right and currency.code == code %}*/
/* 						{{ currency.symbol_right }}*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 				<span class="hidden-xs">{{ text_currency }}</span>*/
/* 			</button>*/
/* 			<ul class="dropdown-menu dropdown-menu-right">*/
/* 				{% for currency in currencies %}*/
/* 					<li><a data-code="{{ currency.code }}">{{ currency.symbol_left ? currency.symbol_left : currency.symbol_right }} {{ currency.title }}</a></li>*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 		 </div>*/
/* 		<input type="hidden" name="code" value="" />*/
/* 		<input type="hidden" name="redirect" value="{{ redirect }}" />*/
/* 	</form>*/
/* </div>*/
/* {% endif %} */
