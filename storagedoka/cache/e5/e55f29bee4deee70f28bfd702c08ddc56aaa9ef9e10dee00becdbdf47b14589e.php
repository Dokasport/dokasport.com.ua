<?php

/* unishop2/template/extension/module/slideshow.twig */
class __TwigTemplate_c9a85cf680d1b41b881ce643f289d11d1e943a3c3690002a66f5e811587edbac extends Twig_Template
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
        echo "<div class=\"swiper-viewport\">
\t<div id=\"slideshow";
        // line 2
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" class=\"swiper-container\">
\t\t<div class=\"swiper-wrapper\">
\t\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 5
            echo "\t\t\t\t<div class=\"swiper-slide text-center\">
\t\t\t\t\t";
            // line 6
            if ($this->getAttribute($context["banner"], "link", array())) {
                // line 7
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["banner"], "link", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive\" /></a>
\t\t\t\t\t";
            } else {
                // line 9
                echo "\t\t\t\t\t\t<img src=\"";
                echo $this->getAttribute($context["banner"], "image", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["banner"], "title", array());
                echo "\" class=\"img-responsive\" />
\t\t\t\t\t";
            }
            // line 11
            echo "\t\t\t\t\t<div class=\"title\">";
            echo $this->getAttribute($context["banner"], "title", array());
            echo "</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t</div>
\t</div>
\t<div class=\"swiper-pagination slideshow";
        // line 16
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\"></div>
\t<div class=\"swiper-pager\">
\t\t<div class=\"swiper-button-next\"></div>
\t\t<div class=\"swiper-button-prev\"></div>
\t</div>
</div>
<script>
\$('#slideshow";
        // line 23
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "').swiper({
\tmode: 'horizontal',
\tslidesPerView: 1,
\tpagination: '.slideshow";
        // line 26
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "',
\tpaginationClickable: true,
\tnextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 30,
\tautoplay: 2500,
    autoplayDisableOnInteraction: true,
\tloop: true
});
</script>";
    }

    public function getTemplateName()
    {
        return "unishop2/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 26,  78 => 23,  68 => 16,  64 => 14,  54 => 11,  46 => 9,  36 => 7,  34 => 6,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="swiper-viewport">*/
/* 	<div id="slideshow{{ module }}" class="swiper-container">*/
/* 		<div class="swiper-wrapper">*/
/* 			{% for banner in banners %}*/
/* 				<div class="swiper-slide text-center">*/
/* 					{% if banner.link %}*/
/* 						<a href="{{ banner.link }}"><img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" /></a>*/
/* 					{% else %}*/
/* 						<img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" />*/
/* 					{% endif %}*/
/* 					<div class="title">{{banner.title}}</div>*/
/* 				</div>*/
/* 			{% endfor %}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="swiper-pagination slideshow{{ module }}"></div>*/
/* 	<div class="swiper-pager">*/
/* 		<div class="swiper-button-next"></div>*/
/* 		<div class="swiper-button-prev"></div>*/
/* 	</div>*/
/* </div>*/
/* <script>*/
/* $('#slideshow{{ module }}').swiper({*/
/* 	mode: 'horizontal',*/
/* 	slidesPerView: 1,*/
/* 	pagination: '.slideshow{{ module }}',*/
/* 	paginationClickable: true,*/
/* 	nextButton: '.swiper-button-next',*/
/*     prevButton: '.swiper-button-prev',*/
/*     spaceBetween: 30,*/
/* 	autoplay: 2500,*/
/*     autoplayDisableOnInteraction: true,*/
/* 	loop: true*/
/* });*/
/* </script>*/
