<?php

/* unishop2/template/extension/module/uni_home_banner.twig */
class __TwigTemplate_aba2f243aa04ba8cb62d570cb2b55d24bab4edb37edfee61566b850976f84a54 extends Twig_Template
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
        if ((isset($context["home_banners"]) ? $context["home_banners"] : null)) {
            // line 2
            echo "\t";
            if ((twig_length_filter($this->env, (isset($context["home_banners"]) ? $context["home_banners"] : null)) == 4)) {
                // line 3
                echo "\t\t";
                $context["class"] = "col-sm-6 col-md-3";
                // line 4
                echo "\t";
            } elseif ((twig_length_filter($this->env, (isset($context["home_banners"]) ? $context["home_banners"] : null)) == 3)) {
                // line 5
                echo "\t\t";
                $context["class"] = "col-sm-4 col-md-4";
                // line 6
                echo "\t";
            } elseif ((twig_length_filter($this->env, (isset($context["home_banners"]) ? $context["home_banners"] : null)) == 2)) {
                // line 7
                echo "\t\t";
                $context["class"] = "col-sm-6 col-md-6";
                // line 8
                echo "\t";
            } elseif ((twig_length_filter($this->env, (isset($context["home_banners"]) ? $context["home_banners"] : null)) == 1)) {
                // line 9
                echo "\t\t";
                $context["class"] = "col-sm-12 col-md-12";
                echo "\t\t\t
\t";
            }
            // line 11
            echo "\t<div class=\"home-banner row row-flex\">
\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["home_banners"]) ? $context["home_banners"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["home_banner"]) {
                // line 13
                echo "\t\t\t<div class=\"col-xs-12 ";
                echo (isset($context["class"]) ? $context["class"] : null);
                echo " ";
                echo (($this->getAttribute($context["home_banner"], "hide", array())) ? ("hidden-xs") : (""));
                echo "\">
\t\t\t\t";
                // line 14
                if ($this->getAttribute($context["home_banner"], "link", array())) {
                    // line 15
                    echo "\t\t\t\t\t<div class=\"home-banner__item link\" ";
                    if ($this->getAttribute($context["home_banner"], "link_popup", array())) {
                        echo "onclick=\"uniBannerLink('";
                        echo $this->getAttribute($context["home_banner"], "link", array());
                        echo "')\"";
                    } else {
                        echo "onclick=\"location='";
                        echo $this->getAttribute($context["home_banner"], "link", array());
                        echo "'\"";
                    }
                    echo ">
\t\t\t\t";
                } else {
                    // line 17
                    echo "\t\t\t\t\t<div class=\"home-banner__item\">
\t\t\t\t";
                }
                // line 19
                echo "\t\t\t\t";
                if ($this->getAttribute($context["home_banner"], "icon", array())) {
                    // line 20
                    echo "\t\t\t\t\t<i class=\"home-banner__icon ";
                    echo $this->getAttribute($context["home_banner"], "icon", array());
                    echo " fa-fw\"></i>
\t\t\t\t";
                }
                // line 22
                echo "\t\t\t\t<div class=\"home-banner__text\">
\t\t\t\t\t<div class=\"home-banner__text-1 ";
                // line 23
                echo (($this->getAttribute($context["home_banner"], "link", array())) ? ("link") : (""));
                echo "\">";
                echo $this->getAttribute($context["home_banner"], "text", array());
                echo "</div>
\t\t\t\t\t";
                // line 24
                echo $this->getAttribute($context["home_banner"], "text1", array());
                echo "
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['home_banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t</div>
";
        }
        // line 30
        echo " ";
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/uni_home_banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 30,  111 => 29,  100 => 24,  94 => 23,  91 => 22,  85 => 20,  82 => 19,  78 => 17,  64 => 15,  62 => 14,  55 => 13,  51 => 12,  48 => 11,  42 => 9,  39 => 8,  36 => 7,  33 => 6,  30 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if home_banners %}*/
/* 	{% if home_banners|length == 4 %}*/
/* 		{% set class = 'col-sm-6 col-md-3' %}*/
/* 	{% elseif home_banners|length == 3 %}*/
/* 		{% set class = 'col-sm-4 col-md-4' %}*/
/* 	{% elseif home_banners|length == 2 %}*/
/* 		{% set class = 'col-sm-6 col-md-6' %}*/
/* 	{% elseif home_banners|length == 1 %}*/
/* 		{% set class = 'col-sm-12 col-md-12' %}			*/
/* 	{% endif %}*/
/* 	<div class="home-banner row row-flex">*/
/* 		{% for home_banner  in home_banners %}*/
/* 			<div class="col-xs-12 {{ class }} {{home_banner.hide ? 'hidden-xs'}}">*/
/* 				{% if home_banner.link %}*/
/* 					<div class="home-banner__item link" {% if home_banner.link_popup %}onclick="uniBannerLink('{{home_banner.link}}')"{% else %}onclick="location='{{home_banner.link}}'"{% endif %}>*/
/* 				{% else %}*/
/* 					<div class="home-banner__item">*/
/* 				{% endif %}*/
/* 				{% if home_banner.icon %}*/
/* 					<i class="home-banner__icon {{ home_banner.icon }} fa-fw"></i>*/
/* 				{% endif %}*/
/* 				<div class="home-banner__text">*/
/* 					<div class="home-banner__text-1 {{ home_banner.link ? 'link' }}">{{home_banner.text}}</div>*/
/* 					{{ home_banner.text1 }}*/
/* 				</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		{% endfor %}*/
/* 	</div>*/
/* {% endif %} */
