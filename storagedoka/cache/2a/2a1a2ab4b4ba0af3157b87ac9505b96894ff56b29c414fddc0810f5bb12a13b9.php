<?php

/* unishop2/template/common/footer.twig */
class __TwigTemplate_2aa085d35931c53620c9fc510cc1cce9f3fc04c7360dbdfa665741e4ce311ab2 extends Twig_Template
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
        echo "</main>
";
        // line 2
        echo (isset($context["notification"]) ? $context["notification"] : null);
        echo "
<footer class=\"footer\">
\t";
        // line 4
        echo (isset($context["subscribe"]) ? $context["subscribe"] : null);
        echo "
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"footer__column col-sm-6 col-md-3\">
\t\t\t\t<h5><i class=\"footer__column-icon ";
        // line 8
        echo $this->getAttribute($this->getAttribute((isset($context["footer_column"]) ? $context["footer_column"] : null), 1, array(), "array"), "icon", array());
        echo "\"></i><span>";
        echo $this->getAttribute($this->getAttribute((isset($context["footer_column"]) ? $context["footer_column"] : null), 1, array(), "array"), "heading", array());
        echo "</span></h5>
\t\t\t\t<ul class=\"footer__column-ul list-unstyled\">
\t\t\t\t\t";
        // line 10
        if ((isset($context["informations"]) ? $context["informations"] : null)) {
            // line 11
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 12
                echo "\t\t\t\t\t\t\t<li class=\"footer__column-li\"><a href=\"";
                echo $this->getAttribute($context["information"], "href", array());
                echo "\" class=\"footer__column-a\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "\t\t\t\t\t";
        }
        // line 15
        echo "\t\t\t\t\t";
        if ($this->getAttribute((isset($context["footerlinks"]) ? $context["footerlinks"] : null), 1, array())) {
            // line 16
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["footerlinks"]) ? $context["footerlinks"] : null), 1, array()));
            foreach ($context['_seq'] as $context["_key"] => $context["footerlink"]) {
                // line 17
                echo "\t\t\t\t\t\t\t<li class=\"footer__column-li\"><a href=\"";
                echo $this->getAttribute($context["footerlink"], "link", array());
                echo "\" class=\"footer__column-a\">";
                echo $this->getAttribute($context["footerlink"], "title", array());
                echo "</a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footerlink'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t\t\t\t\t";
        }
        // line 20
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"footer__column col-sm-6 col-md-3\">
\t\t\t\t<h5><i class=\"footer__column-icon ";
        // line 23
        echo $this->getAttribute($this->getAttribute((isset($context["footer_column"]) ? $context["footer_column"] : null), 2, array(), "array"), "icon", array());
        echo "\"></i><span>";
        echo $this->getAttribute($this->getAttribute((isset($context["footer_column"]) ? $context["footer_column"] : null), 2, array(), "array"), "heading", array());
        echo "</span></h5>
\t\t\t\t";
        // line 24
        if ($this->getAttribute((isset($context["footerlinks"]) ? $context["footerlinks"] : null), 2, array())) {
            // line 25
            echo "\t\t\t\t\t<ul class=\"footer__column-ul list-unstyled\">
\t\t\t\t\t\t";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["footerlinks"]) ? $context["footerlinks"] : null), 2, array()));
            foreach ($context['_seq'] as $context["_key"] => $context["footerlink"]) {
                // line 27
                echo "\t\t\t\t\t\t\t<li class=\"footer__column-li\"><a href=\"";
                echo $this->getAttribute($context["footerlink"], "link", array());
                echo "\" class=\"footer__column-a\">";
                echo $this->getAttribute($context["footerlink"], "title", array());
                echo "</a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footerlink'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t\t\t\t\t</ul>
\t\t\t\t";
        }
        // line 31
        echo "\t\t\t</div>
\t\t\t<div class=\"clearfix visible-sm\"></div>
\t\t\t<div class=\"footer__column col-sm-6 col-md-3\">
\t\t\t\t<h5><i class=\"footer__column-icon ";
        // line 34
        echo $this->getAttribute($this->getAttribute((isset($context["footer_column"]) ? $context["footer_column"] : null), 3, array(), "array"), "icon", array());
        echo "\"></i><span>";
        echo $this->getAttribute($this->getAttribute((isset($context["footer_column"]) ? $context["footer_column"] : null), 3, array(), "array"), "heading", array());
        echo "</span></h5>
\t\t\t\t";
        // line 35
        if ($this->getAttribute((isset($context["footerlinks"]) ? $context["footerlinks"] : null), 3, array())) {
            // line 36
            echo "\t\t\t\t\t<ul class=\"footer__column-ul list-unstyled\">
\t\t\t\t\t\t";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["footerlinks"]) ? $context["footerlinks"] : null), 3, array()));
            foreach ($context['_seq'] as $context["_key"] => $context["footerlink"]) {
                // line 38
                echo "\t\t\t\t\t\t\t<li class=\"footer__column-li\"><a href=\"";
                echo $this->getAttribute($context["footerlink"], "link", array());
                echo "\" class=\"footer__column-a\">";
                echo $this->getAttribute($context["footerlink"], "title", array());
                echo "</a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footerlink'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "\t\t\t\t\t</ul>
\t\t\t\t";
        }
        // line 42
        echo "\t\t\t</div>
\t\t\t<div class=\"footer__column col-sm-6 col-md-3\">
\t\t\t\t<h5><i class=\"footer__column-icon ";
        // line 44
        echo $this->getAttribute($this->getAttribute((isset($context["footer_column"]) ? $context["footer_column"] : null), 4, array(), "array"), "icon", array());
        echo "\"></i><span>";
        echo $this->getAttribute($this->getAttribute((isset($context["footer_column"]) ? $context["footer_column"] : null), 4, array(), "array"), "heading", array());
        echo "</span></h5>
\t\t\t\t<ul class=\"footer__column-ul list-unstyled\">
\t\t\t\t\t";
        // line 46
        if ($this->getAttribute((isset($context["footerlinks"]) ? $context["footerlinks"] : null), 4, array())) {
            // line 47
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["footerlinks"]) ? $context["footerlinks"] : null), 4, array()));
            foreach ($context['_seq'] as $context["_key"] => $context["footerlink"]) {
                // line 48
                echo "\t\t\t\t\t\t\t<li class=\"footer__column-li\"><a href=\"";
                echo $this->getAttribute($context["footerlink"], "link", array());
                echo "\" class=\"footer__column-a\">";
                echo $this->getAttribute($context["footerlink"], "title", array());
                echo "</a></li>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footerlink'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "\t\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t\t";
        if ((isset($context["footer_address"]) ? $context["footer_address"] : null)) {
            echo "<li class=\"footer__column-li-addr\"><i class=\"fa fa-map-marker fa-fw\"></i>";
            echo (isset($context["footer_address"]) ? $context["footer_address"] : null);
            echo "</li>";
        }
        // line 52
        echo "\t\t\t\t\t";
        if ((isset($context["footer_open"]) ? $context["footer_open"] : null)) {
            echo "<li class=\"footer__column-li-addr\"><i class=\"fa fa-calendar fa-fw\"></i>";
            echo (isset($context["footer_open"]) ? $context["footer_open"] : null);
            echo "</li>";
        }
        // line 53
        echo "\t\t\t\t\t";
        if ((isset($context["footer_phone"]) ? $context["footer_phone"] : null)) {
            echo "<li class=\"footer__column-li-addr\"><i class=\"fa fa-phone fa-fw\"></i>";
            echo (isset($context["footer_phone"]) ? $context["footer_phone"] : null);
            echo "</li>";
        }
        // line 54
        echo "\t\t\t\t\t";
        if ((isset($context["footer_mail"]) ? $context["footer_mail"] : null)) {
            echo "<li class=\"footer__column-li-addr\"><i class=\"fa fa-envelope fa-fw\"></i>";
            echo (isset($context["footer_mail"]) ? $context["footer_mail"] : null);
            echo "</li>";
        }
        // line 55
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t";
        // line 57
        if ((isset($context["footer_text"]) ? $context["footer_text"] : null)) {
            // line 58
            echo "\t\t\t\t<div class=\"col-sm-12 hidden-xs\">
\t\t\t\t\t<div class=\"footer__text\">";
            // line 59
            echo (isset($context["footer_text"]) ? $context["footer_text"] : null);
            echo "</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 62
        echo "\t\t</div>
\t</div>
\t<div class=\"footer__socials-payments\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12 col-md-6\">
\t\t\t\t\t<div class=\"footer__socials\">
\t\t\t\t\t\t";
        // line 69
        if ((isset($context["socials"]) ? $context["socials"] : null)) {
            // line 70
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["socials"]) ? $context["socials"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
                // line 71
                echo "\t\t\t\t\t\t\t\t<i class=\"footer__socials-icon uni-href fab ";
                echo $this->getAttribute($context["social"], "icon", array());
                echo "\" data-href=\"";
                echo $this->getAttribute($context["social"], "link", array());
                echo "\" data-target=\"_blank\"></i>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "\t\t\t\t\t\t";
        }
        // line 74
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-12 col-md-6\">
\t\t\t\t\t<hr class=\"visible-xs visible-sm\" />
\t\t\t\t\t<div class=\"footer__payments\">
\t\t\t\t\t\t";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["payment_icons"]) ? $context["payment_icons"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
            // line 80
            echo "\t\t\t\t\t\t\t";
            if (twig_in_filter("catalog", $context["icon"])) {
                // line 81
                echo "\t\t\t\t\t\t\t\t<img src=\"image/";
                echo $context["icon"];
                echo "\" class=\"footer__payments-icon\" />
\t\t\t\t\t\t\t";
            } else {
                // line 83
                echo "\t\t\t\t\t\t\t\t<div class=\"footer__payments-icon ";
                echo $context["icon"];
                echo "\"></div>
\t\t\t\t\t\t\t";
            }
            // line 85
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>

<script>var uniJsVars = JSON.parse(atob('";
        // line 93
        echo (isset($context["js_vars"]) ? $context["js_vars"] : null);
        echo "'));</script>

<div class=\"fly-block\">
\t";
        // line 96
        if ((isset($context["wishlist"]) ? $context["wishlist"] : null)) {
            // line 97
            echo "\t\t<div class=\"fly-block__item fly-block__wishlist uni-href\" data-href=\"";
            echo $this->getAttribute((isset($context["wishlist"]) ? $context["wishlist"] : null), "href", array());
            echo "\" title=\"";
            echo (isset($context["text_fly_wishlist"]) ? $context["text_fly_wishlist"] : null);
            echo "\" data-toggle=\"tooltip\">
\t\t\t<i class=\"fas fa-heart fly-block__wishlist-icon\"></i><span class=\"fly-block__total fly-block__wishlist-total\">";
            // line 98
            echo $this->getAttribute((isset($context["wishlist"]) ? $context["wishlist"] : null), "total", array());
            echo "</span>
\t\t</div>
\t";
        }
        // line 101
        echo "\t";
        if ((isset($context["compare"]) ? $context["compare"] : null)) {
            // line 102
            echo "\t\t<div class=\"fly-block__item fly-block__compare uni-href\" data-href=\"";
            echo $this->getAttribute((isset($context["compare"]) ? $context["compare"] : null), "href", array());
            echo "\" title=\"";
            echo (isset($context["text_fly_compare"]) ? $context["text_fly_compare"] : null);
            echo "\" data-toggle=\"tooltip\">
\t\t\t<i class=\"fas fa-align-right fly-block__compare-icon\"></i><span class=\"fly-block__total fly-block__compare-total\">";
            // line 103
            echo $this->getAttribute((isset($context["compare"]) ? $context["compare"] : null), "total", array());
            echo "</span>
\t\t</div>
\t";
        }
        // line 106
        echo "\t";
        if ((isset($context["show_fly_callback"]) ? $context["show_fly_callback"] : null)) {
            // line 107
            echo "\t\t<div class=\"fly-block__item fly-block__callback\" onclick=\"uniRequestOpen(['mail', 'phone', 'comment'])\" ";
            echo (((isset($context["fly_callback_text"]) ? $context["fly_callback_text"] : null)) ? ((("title=\"" . (isset($context["fly_callback_text"]) ? $context["fly_callback_text"] : null)) . "\" data-toggle=\"tooltip\"")) : (""));
            echo ">
\t\t\t<i class=\"fa fa-phone fly-block__callback-icon\"></i>
\t\t</div>
\t";
        }
        // line 111
        echo "\t<div class=\"fly-block__item fly-block__scrollup\">
\t\t<i class=\"fa fa-chevron-up fly-block__scrollup-icon\" onclick=\"scroll_to('body')\" aria-hidden=\"true\"></i>
\t</div>
\t<script>
\t\t\$(window).scroll(function(){\t\t
\t\t\t\$(this).scrollTop() > 190 ? \$('.fly-block__scrollup').addClass('visible') : \$('.fly-block__scrollup').removeClass('visible');
\t\t});
\t</script>
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "unishop2/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 111,  340 => 107,  337 => 106,  331 => 103,  324 => 102,  321 => 101,  315 => 98,  308 => 97,  306 => 96,  300 => 93,  291 => 86,  285 => 85,  279 => 83,  273 => 81,  270 => 80,  266 => 79,  259 => 74,  256 => 73,  245 => 71,  240 => 70,  238 => 69,  229 => 62,  223 => 59,  220 => 58,  218 => 57,  214 => 55,  207 => 54,  200 => 53,  193 => 52,  186 => 51,  183 => 50,  172 => 48,  167 => 47,  165 => 46,  158 => 44,  154 => 42,  150 => 40,  139 => 38,  135 => 37,  132 => 36,  130 => 35,  124 => 34,  119 => 31,  115 => 29,  104 => 27,  100 => 26,  97 => 25,  95 => 24,  89 => 23,  84 => 20,  81 => 19,  70 => 17,  65 => 16,  62 => 15,  59 => 14,  48 => 12,  43 => 11,  41 => 10,  34 => 8,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* </main>*/
/* {{ notification }}*/
/* <footer class="footer">*/
/* 	{{ subscribe }}*/
/* 	<div class="container">*/
/* 		<div class="row">*/
/* 			<div class="footer__column col-sm-6 col-md-3">*/
/* 				<h5><i class="footer__column-icon {{ footer_column[1].icon }}"></i><span>{{ footer_column[1].heading }}</span></h5>*/
/* 				<ul class="footer__column-ul list-unstyled">*/
/* 					{% if informations %}*/
/* 						{% for information in informations %}*/
/* 							<li class="footer__column-li"><a href="{{ information.href }}" class="footer__column-a">{{ information.title }}</a></li>*/
/* 						{% endfor %}*/
/* 					{% endif %}*/
/* 					{% if footerlinks.1 %}*/
/* 						{% for footerlink in footerlinks.1 %}*/
/* 							<li class="footer__column-li"><a href="{{ footerlink.link }}" class="footer__column-a">{{ footerlink.title }}</a></li>*/
/* 						{% endfor %}*/
/* 					{% endif %}*/
/* 				</ul>*/
/* 			</div>*/
/* 			<div class="footer__column col-sm-6 col-md-3">*/
/* 				<h5><i class="footer__column-icon {{ footer_column[2].icon }}"></i><span>{{ footer_column[2].heading }}</span></h5>*/
/* 				{% if footerlinks.2 %}*/
/* 					<ul class="footer__column-ul list-unstyled">*/
/* 						{% for footerlink in footerlinks.2 %}*/
/* 							<li class="footer__column-li"><a href="{{ footerlink.link }}" class="footer__column-a">{{ footerlink.title }}</a></li>*/
/* 						{% endfor %}*/
/* 					</ul>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 			<div class="clearfix visible-sm"></div>*/
/* 			<div class="footer__column col-sm-6 col-md-3">*/
/* 				<h5><i class="footer__column-icon {{ footer_column[3].icon }}"></i><span>{{ footer_column[3].heading }}</span></h5>*/
/* 				{% if footerlinks.3 %}*/
/* 					<ul class="footer__column-ul list-unstyled">*/
/* 						{% for footerlink in footerlinks.3 %}*/
/* 							<li class="footer__column-li"><a href="{{ footerlink.link }}" class="footer__column-a">{{ footerlink.title }}</a></li>*/
/* 						{% endfor %}*/
/* 					</ul>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 			<div class="footer__column col-sm-6 col-md-3">*/
/* 				<h5><i class="footer__column-icon {{ footer_column[4].icon }}"></i><span>{{ footer_column[4].heading }}</span></h5>*/
/* 				<ul class="footer__column-ul list-unstyled">*/
/* 					{% if footerlinks.4 %}*/
/* 						{% for footerlink in footerlinks.4 %}*/
/* 							<li class="footer__column-li"><a href="{{ footerlink.link }}" class="footer__column-a">{{ footerlink.title }}</a></li>*/
/* 						{% endfor %}*/
/* 					{% endif %}*/
/* 					{% if footer_address %}<li class="footer__column-li-addr"><i class="fa fa-map-marker fa-fw"></i>{{ footer_address}}</li>{% endif %}*/
/* 					{% if footer_open %}<li class="footer__column-li-addr"><i class="fa fa-calendar fa-fw"></i>{{ footer_open }}</li>{% endif %}*/
/* 					{% if footer_phone %}<li class="footer__column-li-addr"><i class="fa fa-phone fa-fw"></i>{{ footer_phone }}</li>{% endif %}*/
/* 					{% if footer_mail %}<li class="footer__column-li-addr"><i class="fa fa-envelope fa-fw"></i>{{ footer_mail }}</li>{% endif %}*/
/* 				</ul>*/
/* 			</div>*/
/* 			{% if footer_text %}*/
/* 				<div class="col-sm-12 hidden-xs">*/
/* 					<div class="footer__text">{{ footer_text }}</div>*/
/* 				</div>*/
/* 			{% endif %}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="footer__socials-payments">*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="col-sm-12 col-md-6">*/
/* 					<div class="footer__socials">*/
/* 						{% if socials %}*/
/* 							{% for social in socials %}*/
/* 								<i class="footer__socials-icon uni-href fab {{social.icon}}" data-href="{{ social.link }}" data-target="_blank"></i>*/
/* 							{% endfor %}*/
/* 						{% endif %}*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-sm-12 col-md-6">*/
/* 					<hr class="visible-xs visible-sm" />*/
/* 					<div class="footer__payments">*/
/* 						{% for icon in payment_icons %}*/
/* 							{% if 'catalog' in icon %}*/
/* 								<img src="image/{{icon}}" class="footer__payments-icon" />*/
/* 							{% else %}*/
/* 								<div class="footer__payments-icon {{ icon }}"></div>*/
/* 							{% endif %}*/
/* 						{% endfor %}*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </footer>*/
/* */
/* <script>var uniJsVars = JSON.parse(atob('{{ js_vars }}'));</script>*/
/* */
/* <div class="fly-block">*/
/* 	{% if wishlist %}*/
/* 		<div class="fly-block__item fly-block__wishlist uni-href" data-href="{{ wishlist.href }}" title="{{ text_fly_wishlist }}" data-toggle="tooltip">*/
/* 			<i class="fas fa-heart fly-block__wishlist-icon"></i><span class="fly-block__total fly-block__wishlist-total">{{ wishlist.total }}</span>*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	{% if compare %}*/
/* 		<div class="fly-block__item fly-block__compare uni-href" data-href="{{ compare.href }}" title="{{ text_fly_compare }}" data-toggle="tooltip">*/
/* 			<i class="fas fa-align-right fly-block__compare-icon"></i><span class="fly-block__total fly-block__compare-total">{{ compare.total }}</span>*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	{% if show_fly_callback %}*/
/* 		<div class="fly-block__item fly-block__callback" onclick="uniRequestOpen(['mail', 'phone', 'comment'])" {{ fly_callback_text ? 'title="'~fly_callback_text~'" data-toggle="tooltip"' }}>*/
/* 			<i class="fa fa-phone fly-block__callback-icon"></i>*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	<div class="fly-block__item fly-block__scrollup">*/
/* 		<i class="fa fa-chevron-up fly-block__scrollup-icon" onclick="scroll_to('body')" aria-hidden="true"></i>*/
/* 	</div>*/
/* 	<script>*/
/* 		$(window).scroll(function(){		*/
/* 			$(this).scrollTop() > 190 ? $('.fly-block__scrollup').addClass('visible') : $('.fly-block__scrollup').removeClass('visible');*/
/* 		});*/
/* 	</script>*/
/* </div>*/
/* </body>*/
/* </html>*/
