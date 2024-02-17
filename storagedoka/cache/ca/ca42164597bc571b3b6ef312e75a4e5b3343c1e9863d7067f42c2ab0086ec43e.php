<?php

/* unishop2/template/product/review.twig */
class __TwigTemplate_bec6ac7b851ec19ef351659a26bace7199e6d47bb0959a4cffc408c72917e6da extends Twig_Template
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
        echo "<div>
";
        // line 2
        if ((isset($context["reviews"]) ? $context["reviews"] : null)) {
            // line 3
            echo "\t<div class=\"review-list\">
\t\t";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 5
                echo "\t\t\t<div class=\"review-list__item uni-item row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-2 col-xxl-3\">
\t\t\t\t\t<div class=\"review-list__rating rating\"> 
\t\t\t\t\t\t";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 9
                    echo "\t\t\t\t\t\t\t<i class=\"";
                    echo ((($this->getAttribute($context["review"], "rating", array()) < $context["i"])) ? ("far") : ("fa"));
                    echo " fa-star\"></i>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"review-list__name\"><i class=\"review-list__icon fa fa-user\"></i>";
                // line 12
                echo $this->getAttribute($context["review"], "author", array());
                echo "</div>
\t\t\t\t\t<div class=\"review-list__date\"><i class=\"review-list__icon fa fa-calendar\"></i>";
                // line 13
                echo $this->getAttribute($context["review"], "date_added", array());
                echo "</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-12 col-sm-10 col-xxl-17\">
\t\t\t\t\t";
                // line 16
                if ($this->getAttribute($context["review"], "plus", array())) {
                    // line 17
                    echo "\t\t\t\t\t\t<div class=\"review-list__plus\">
\t\t\t\t\t\t\t<div class=\"review-list__plus-heading\"><i class=\"review-list__icon fa fa-plus\"></i>";
                    // line 18
                    echo (isset($context["text_review_plus"]) ? $context["text_review_plus"] : null);
                    echo "</div>
\t\t\t\t\t\t\t";
                    // line 19
                    echo $this->getAttribute($context["review"], "plus", array());
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 22
                echo "\t\t\t\t\t";
                if ($this->getAttribute($context["review"], "minus", array())) {
                    // line 23
                    echo "\t\t\t\t\t\t<div class=\"review-list__minus\">
\t\t\t\t\t\t\t<div class=\"review-list__minus-heading\"><i class=\"review-list__icon fa fa-minus\"></i>";
                    // line 24
                    echo (isset($context["text_review_minus"]) ? $context["text_review_minus"] : null);
                    echo "</div>
\t\t\t\t\t\t\t";
                    // line 25
                    echo $this->getAttribute($context["review"], "minus", array());
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 28
                echo "\t\t\t\t\t<div class=\"review-list__comment\">
\t\t\t\t\t\t";
                // line 29
                if (($this->getAttribute($context["review"], "plus", array()) || $this->getAttribute($context["review"], "minus", array()))) {
                    // line 30
                    echo "\t\t\t\t\t\t\t<div class=\"review-list__comment-heading\"><i class=\"review-list__icon fa fa-comment\"></i>";
                    echo (isset($context["text_review_comment"]) ? $context["text_review_comment"] : null);
                    echo "</div>
\t\t\t\t\t\t";
                }
                // line 32
                echo "\t\t\t\t\t\t";
                echo $this->getAttribute($context["review"], "text", array());
                echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
                // line 34
                if ($this->getAttribute($context["review"], "admin_reply", array())) {
                    echo " 
\t\t\t\t\t\t<div class=\"review-list__reply\">
\t\t\t\t\t\t\t<div class=\"review-list__reply-heading\"><i class=\"review-list__reply-icon fa fa-reply\"></i>";
                    // line 36
                    echo (isset($context["text_admin_reply"]) ? $context["text_admin_reply"] : null);
                    echo "</div>
\t\t\t\t\t\t\t";
                    // line 37
                    echo $this->getAttribute($context["review"], "admin_reply", array());
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 40
                echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "\t</div>
";
        } else {
            // line 45
            echo "\t<p>";
            echo (isset($context["text_no_reviews"]) ? $context["text_no_reviews"] : null);
            echo "</p>
";
        }
        // line 47
        echo "<div class=\"review-pagination text-center\">
\t";
        // line 48
        if ((isset($context["pagination"]) ? $context["pagination"] : null)) {
            echo "<button class=\"show-more-review btn btn-lg btn-default\"><i class=\"fa fa-sync-alt\"></i><span>";
            echo (isset($context["button_show_more_reviews"]) ? $context["button_show_more_reviews"] : null);
            echo "</span></button>";
        }
        // line 49
        echo "\t";
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "unishop2/template/product/review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 49,  146 => 48,  143 => 47,  137 => 45,  133 => 43,  125 => 40,  119 => 37,  115 => 36,  110 => 34,  104 => 32,  98 => 30,  96 => 29,  93 => 28,  87 => 25,  83 => 24,  80 => 23,  77 => 22,  71 => 19,  67 => 18,  64 => 17,  62 => 16,  56 => 13,  52 => 12,  49 => 11,  40 => 9,  36 => 8,  31 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div>*/
/* {% if reviews %}*/
/* 	<div class="review-list">*/
/* 		{% for review in reviews %}*/
/* 			<div class="review-list__item uni-item row">*/
/* 				<div class="col-xs-12 col-sm-2 col-xxl-3">*/
/* 					<div class="review-list__rating rating"> */
/* 						{% for i in 1..5 %}*/
/* 							<i class="{{ review.rating < i ? 'far' : 'fa' }} fa-star"></i>*/
/* 						{% endfor %}*/
/* 					</div>*/
/* 					<div class="review-list__name"><i class="review-list__icon fa fa-user"></i>{{ review.author }}</div>*/
/* 					<div class="review-list__date"><i class="review-list__icon fa fa-calendar"></i>{{ review.date_added }}</div>*/
/* 				</div>*/
/* 				<div class="col-xs-12 col-sm-10 col-xxl-17">*/
/* 					{% if review.plus %}*/
/* 						<div class="review-list__plus">*/
/* 							<div class="review-list__plus-heading"><i class="review-list__icon fa fa-plus"></i>{{ text_review_plus }}</div>*/
/* 							{{ review.plus }}*/
/* 						</div>*/
/* 					{% endif %}*/
/* 					{% if review.minus %}*/
/* 						<div class="review-list__minus">*/
/* 							<div class="review-list__minus-heading"><i class="review-list__icon fa fa-minus"></i>{{ text_review_minus }}</div>*/
/* 							{{ review.minus }}*/
/* 						</div>*/
/* 					{% endif %}*/
/* 					<div class="review-list__comment">*/
/* 						{% if review.plus or review.minus %}*/
/* 							<div class="review-list__comment-heading"><i class="review-list__icon fa fa-comment"></i>{{ text_review_comment }}</div>*/
/* 						{% endif %}*/
/* 						{{ review.text }}*/
/* 					</div>*/
/* 					{% if review.admin_reply %} */
/* 						<div class="review-list__reply">*/
/* 							<div class="review-list__reply-heading"><i class="review-list__reply-icon fa fa-reply"></i>{{ text_admin_reply }}</div>*/
/* 							{{ review.admin_reply }}*/
/* 						</div>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 			</div>*/
/* 		{% endfor %}*/
/* 	</div>*/
/* {% else %}*/
/* 	<p>{{ text_no_reviews }}</p>*/
/* {% endif %}*/
/* <div class="review-pagination text-center">*/
/* 	{% if pagination %}<button class="show-more-review btn btn-lg btn-default"><i class="fa fa-sync-alt"></i><span>{{ button_show_more_reviews }}</span></button>{% endif %}*/
/* 	{{ pagination }}*/
/* </div>*/
/* </div>*/
