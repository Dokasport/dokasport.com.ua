<?php

/* unishop2/template/extension/module/uni_stickers.twig */
class __TwigTemplate_b18bcbea735aabe19b79a844de5d7413ceca2806968a526c1cb83070a007b3a6 extends Twig_Template
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
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "stickers", array())) {
            // line 2
            echo "\t<div class=\"sticker\">
\t\t";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "stickers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["sticker"]) {
                // line 4
                echo "\t\t\t<div class=\"sticker__item ";
                echo $this->getAttribute($context["sticker"], "name", array());
                echo "\">";
                echo $this->getAttribute($context["sticker"], "text", array());
                echo " ";
                echo $this->getAttribute($context["sticker"], "value", array());
                echo " ";
                echo $this->getAttribute($context["sticker"], "text_after", array());
                echo "</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sticker'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/uni_stickers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 6,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if product.stickers %}*/
/* 	<div class="sticker">*/
/* 		{% for sticker in product.stickers %}*/
/* 			<div class="sticker__item {{sticker.name}}">{{ sticker.text }} {{ sticker.value }} {{ sticker.text_after }}</div>*/
/* 		{% endfor %}*/
/* 	</div>*/
/* {% endif %}*/
