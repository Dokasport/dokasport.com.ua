<?php

/* unishop2/template/extension/module/carousel.twig */
class __TwigTemplate_1ea82b03f419d1e9ba2b41960305864794496f7b89f17a3b83bcb63131e0b263 extends Twig_Template
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
        echo "<div id=\"carousel-";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"carousel owl-carousel\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 3
            echo "\t\t";
            if ($this->getAttribute($context["banner"], "link", array())) {
                // line 4
                echo "\t\t\t<a href=\"";
                echo $this->getAttribute($context["banner"], "link", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" data-toggle=\"tooltip\"><img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive\" /></a>
\t\t";
            } else {
                // line 6
                echo "\t\t\t<img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" data-toggle=\"tooltip\" class=\"img-responsive\" />
\t\t";
            }
            // line 8
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</div>
<script>
\$('#carousel-";
        // line 11
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "').owlCarousel({
\tresponsive: {0:{items:1},580:{items:3},720:{items:6},1050:{items:8}},
\tnav:true,
\tdots:false,
\tloop:true,
\tautoplay:true,
\tautoplayTimeout:2000,
\tautoplayHoverPause:true,
\tnavText: ['<i class=\"fa fa-chevron-left\"></i>', '<i class=\"fa fa-chevron-right\"></i>'],
});
</script>";
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  59 => 9,  53 => 8,  43 => 6,  31 => 4,  28 => 3,  24 => 2,  19 => 1,);
    }
}
/* <div id="carousel-{{ module }}" class="carousel owl-carousel">*/
/* 	{% for banner in banners %}*/
/* 		{% if banner.link %}*/
/* 			<a href="{{ banner.link }}" title="{{ banner.title }}" data-toggle="tooltip"><img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" /></a>*/
/* 		{% else %}*/
/* 			<img src="{{ banner.image }}" alt="{{ banner.title }}" title="{{ banner.title }}" data-toggle="tooltip" class="img-responsive" />*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* </div>*/
/* <script>*/
/* $('#carousel-{{ module }}').owlCarousel({*/
/* 	responsive: {0:{items:1},580:{items:3},720:{items:6},1050:{items:8}},*/
/* 	nav:true,*/
/* 	dots:false,*/
/* 	loop:true,*/
/* 	autoplay:true,*/
/* 	autoplayTimeout:2000,*/
/* 	autoplayHoverPause:true,*/
/* 	navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],*/
/* });*/
/* </script>*/
