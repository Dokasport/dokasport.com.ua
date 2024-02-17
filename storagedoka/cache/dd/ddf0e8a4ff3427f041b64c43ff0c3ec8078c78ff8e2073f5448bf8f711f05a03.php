<?php

/* unishop2/template/common/menu.twig */
class __TwigTemplate_a7c99cb3984a73e599ff07a8fe7e482f2022071248b98ef3d6ec8c9cfae67905 extends Twig_Template
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
        if (((isset($context["categories"]) ? $context["categories"] : null) || (isset($context["headerlinks2"]) ? $context["headerlinks2"] : null))) {
            // line 2
            echo "\t";
            $context["one_line"] = 0;
            // line 3
            echo "\t";
            $context["two_line"] = 0;
            // line 4
            echo "\t<div class=\"col-xs-12 col-sm-6 ";
            echo ((((isset($context["menu_type"]) ? $context["menu_type"] : null) == 1)) ? ("col-md-3 col-lg-3 col-xxl-4") : ("col-md-12"));
            echo "\">
\t\t<nav id=\"menu\" class=\"menu ";
            // line 5
            echo ((((isset($context["menu_type"]) ? $context["menu_type"] : null) == 1)) ? ("menu1") : ("menu2"));
            echo "\">
\t\t\t<div class=\"menu__header\" data-toggle=\"collapse\" data-target=\".main-menu__collapse\">";
            // line 6
            echo (isset($context["text_menu"]) ? $context["text_menu"] : null);
            echo "<i class=\"fa fa-bars\"></i></div>
\t\t\t<ul class=\"menu__collapse collapse main-menu__collapse\">
\t\t\t\t";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 9
                echo "\t\t\t\t\t<li class=\"menu__level-1-li ";
                echo (($this->getAttribute($context["category"], "children", array())) ? ("has-children") : (""));
                echo " ";
                echo (((isset($context["separator"]) ? $context["separator"] : null)) ? ("menu__separator") : (""));
                echo "\">
\t\t\t\t\t\t<a class=\"menu__level-1-a ";
                // line 10
                echo (($this->getAttribute($context["category"], "children", array())) ? ("chevron") : (""));
                echo " ";
                echo (($this->getAttribute($context["category"], "disabled", array())) ? ("disabled") : (""));
                echo "\" ";
                echo ((twig_test_empty($this->getAttribute($context["category"], "disabled", array()))) ? ((("href=\"" . $this->getAttribute($context["category"], "href", array())) . "\"")) : (""));
                echo ">
\t\t\t\t\t\t\t";
                // line 11
                if (twig_in_filter("fa-", $this->getAttribute($context["category"], "icon", array()))) {
                    // line 12
                    echo "\t\t\t\t\t\t\t\t<span class=\"menu__level-1-icon\"><i class=\"";
                    echo $this->getAttribute($context["category"], "icon", array());
                    echo " fa-fw\"></i></span>
\t\t\t\t\t\t\t";
                } elseif ($this->getAttribute(                // line 13
$context["category"], "icon", array())) {
                    // line 14
                    echo "\t\t\t\t\t\t\t\t<span class=\"menu__level-1-icon\"><img src=\"image/";
                    echo $this->getAttribute($context["category"], "icon", array());
                    echo "\" alt=\"\" /></span>
\t\t\t\t\t\t\t";
                }
                // line 16
                echo "\t\t\t\t\t\t\t";
                echo $this->getAttribute($context["category"], "name", array());
                echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                // line 18
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 19
                    echo "\t\t\t\t\t\t\t<span class=\"menu__pm menu__level-1-pm visible-xs visible-sm\"><i class=\"fa fa-plus\"></i><i class=\"fa fa-minus\"></i></span>
\t\t\t\t\t\t\t<div class=\"menu__level-2 column-";
                    // line 20
                    echo $this->getAttribute($context["category"], "column", array());
                    echo "\">
\t\t\t\t\t\t\t\t";
                    // line 21
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 22
                        echo "\t\t\t\t\t\t\t\t\t<ul class=\"menu__level-2-ul ";
                        echo ((($this->getAttribute($context["category"], "column", array()) < 5)) ? (("col-md-" . (12 / $this->getAttribute($context["category"], "column", array())))) : ("col-md-12"));
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<li class=\"menu__level-2-li\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"menu__level-2-a ";
                        // line 24
                        echo (($this->getAttribute($context["child"], "children", array())) ? ("uppercase") : (""));
                        echo " ";
                        echo (($this->getAttribute($context["child"], "disabled", array())) ? ("disabled") : (""));
                        echo "\" ";
                        echo ((twig_test_empty($this->getAttribute($context["child"], "disabled", array()))) ? ((("href=\"" . $this->getAttribute($context["child"], "href", array())) . "\"")) : (""));
                        echo ">";
                        echo $this->getAttribute($context["child"], "name", array());
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 25
                        if (($this->getAttribute($context["child"], "children", array()) && (twig_length_filter($this->env, $this->getAttribute($context["child"], "children", array())) > 0))) {
                            // line 26
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu__pm menu__level-2-pm visible-xs visible-sm\"><i class=\"fa fa-plus\"></i><i class=\"fa fa-minus\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu__level-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"menu__level-3-ul\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 29
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["child"], "children", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 30
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu__level-3-li\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"menu__level-3-a ";
                                // line 31
                                echo (($this->getAttribute($context["child"], "disabled", array())) ? ("disabled") : (""));
                                echo "\" ";
                                echo ((twig_test_empty($this->getAttribute($context["child"], "disabled", array()))) ? ((("href=\"" . $this->getAttribute($context["child"], "href", array())) . "\"")) : (""));
                                echo ">";
                                echo $this->getAttribute($context["child"], "name", array());
                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 34
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute($context["child"], "more", array())) {
                                // line 35
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu__level-3-li\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"menu__level-3-a menu__more uni-href\" data-href=\"";
                                // line 36
                                echo $this->getAttribute($context["child"], "href", array());
                                echo "\"><span class=\"menu__more-span\">";
                                echo (isset($context["text_all_categories"]) ? $context["text_all_categories"] : null);
                                echo " (";
                                echo $this->getAttribute($context["child"], "more", array());
                                echo ")</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 39
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 42
                        echo "\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 45
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 47
                echo "\t\t\t\t\t</li>
\t\t\t\t\t";
                // line 48
                if ((twig_length_filter($this->env, $this->getAttribute($context["category"], "name", array())) <= 30)) {
                    // line 49
                    echo "\t\t\t\t\t\t";
                    $context["one_line"] = ((isset($context["one_line"]) ? $context["one_line"] : null) + 1);
                    // line 50
                    echo "\t\t\t\t\t";
                } else {
                    // line 51
                    echo "\t\t\t\t\t\t";
                    $context["two_line"] = ((isset($context["two_line"]) ? $context["two_line"] : null) + 1);
                    // line 52
                    echo "\t\t\t\t\t";
                }
                // line 53
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "\t\t\t</ul>
\t\t</nav>
\t</div>
\t";
            // line 57
            if ((((isset($context["menu_type"]) ? $context["menu_type"] : null) == 1) && (isset($context["menu_expanded"]) ? $context["menu_expanded"] : null))) {
                // line 58
                echo "\t\t";
                $context["total"] = ((((isset($context["one_line"]) ? $context["one_line"] : null) * 41) + ((isset($context["two_line"]) ? $context["two_line"] : null) * 60)) + (((isset($context["home"]) ? $context["home"] : null)) ? (0) : ( -25)));
                // line 59
                echo "\t\t<script>
\t\tvar style = '<style>';
\t\t\tstyle += '@media (min-width:992px) {';
\t\t\tstyle += '#column-left {margin-top:";
                // line 62
                echo (isset($context["total"]) ? $context["total"] : null);
                echo "px}';
\t\t\tstyle += 'header .menu1 {border-radius:4px 4px 0 0}'; 
\t\t\tstyle += 'header .menu1 .menu__collapse {display:block !important}}</style>';
\t\t\$('head').append(style);
\t\t</script>
\t";
            }
            // line 68
            echo "\t";
            if (((isset($context["menu_type"]) ? $context["menu_type"] : null) == 1)) {
                // line 69
                echo "\t\t<div class=\"col-xs-12 col-md-9 col-lg-9 col-xxl-16 hidden-xs hidden-sm\">
\t\t\t";
                // line 70
                if ((isset($context["headerlinks2"]) ? $context["headerlinks2"] : null)) {
                    // line 71
                    echo "\t\t\t\t<nav id=\"menu2\" class=\"menu menu2 menu-right\">
\t\t\t\t<ul class=\"menu__collapse\">
\t\t\t\t";
                    // line 73
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["headerlinks2"]) ? $context["headerlinks2"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["headerlink"]) {
                        // line 74
                        echo "\t\t\t\t\t<li class=\"menu__level-1-li ";
                        echo (($this->getAttribute($context["headerlink"], "children", array())) ? ("has-children") : (""));
                        echo "\">
\t\t\t\t\t\t<a class=\"menu__level-1-a ";
                        // line 75
                        echo (($this->getAttribute($context["headerlink"], "children", array())) ? ("chevron") : (""));
                        echo "\" href=\"";
                        echo $this->getAttribute($context["headerlink"], "href", array());
                        echo "\">
\t\t\t\t\t\t\t";
                        // line 76
                        if (twig_in_filter("fa-", $this->getAttribute($context["headerlink"], "icon", array()))) {
                            // line 77
                            echo "\t\t\t\t\t\t\t\t<span class=\"menu__level-1-icon\"><i class=\"";
                            echo $this->getAttribute($context["headerlink"], "icon", array());
                            echo " fa-fw\"></i></span>
\t\t\t\t\t\t\t";
                        } elseif ($this->getAttribute(                        // line 78
$context["headerlink"], "icon", array())) {
                            // line 79
                            echo "\t\t\t\t\t\t\t\t<span class=\"menu__level-1-icon\"><img src=\"image/";
                            echo $this->getAttribute($context["headerlink"], "icon", array());
                            echo "\" alt=\"\" /></span>
\t\t\t\t\t\t\t";
                        }
                        // line 81
                        echo "\t\t\t\t\t\t\t";
                        echo $this->getAttribute($context["headerlink"], "name", array());
                        echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                        // line 83
                        if ($this->getAttribute($context["headerlink"], "children", array())) {
                            // line 84
                            echo "\t\t\t\t\t\t\t<span class=\"menu__pm menu__level-1-pm visible-xs visible-sm\"><i class=\"fa fa-plus\"></i><i class=\"fa fa-minus\"></i></span>
\t\t\t\t\t\t\t<div class=\"menu__level-2 column-";
                            // line 85
                            echo $this->getAttribute($context["headerlink"], "column", array());
                            echo "\">
\t\t\t\t\t\t\t\t";
                            // line 86
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["headerlink"], "children", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                // line 87
                                echo "\t\t\t\t\t\t\t\t\t<ul class=\"menu__level-2-ul ";
                                echo ((($this->getAttribute($context["headerlink"], "column", array()) < 5)) ? (("col-md-" . (12 / $this->getAttribute($context["headerlink"], "column", array())))) : ("col-md-4"));
                                echo "\">
\t\t\t\t\t\t\t\t\t\t<li class=\"menu__level-2-li\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"menu__level-2-a ";
                                // line 89
                                echo (($this->getAttribute($context["child"], "children", array())) ? ("uppercase") : (""));
                                echo " ";
                                echo (($this->getAttribute($context["child"], "disabled", array())) ? ("disabled") : (""));
                                echo "\" ";
                                echo ((twig_test_empty($this->getAttribute($context["child"], "disabled", array()))) ? ((("href=\"" . $this->getAttribute($context["child"], "href", array())) . "\"")) : (""));
                                echo ">";
                                echo $this->getAttribute($context["child"], "name", array());
                                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
                                // line 90
                                if (($this->getAttribute($context["child"], "children", array()) && (twig_length_filter($this->env, $this->getAttribute($context["child"], "children", array())) > 0))) {
                                    // line 91
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"menu__pm menu__level-2-pm visible-xs visible-sm\"><i class=\"fa fa-plus\" ></i><i class=\"fa fa-minus\" ></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"menu__level-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 94
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["child"], "children", array()));
                                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                                        // line 95
                                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"menu__level-3-li\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"menu__level-3-a ";
                                        // line 96
                                        echo (($this->getAttribute($context["child"], "disabled", array())) ? ("disabled") : (""));
                                        echo "\" ";
                                        echo ((twig_test_empty($this->getAttribute($context["child"], "disabled", array()))) ? ((("href=\"" . $this->getAttribute($context["child"], "href", array())) . "\"")) : (""));
                                        echo ">";
                                        echo $this->getAttribute($context["child"], "name", array());
                                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 99
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 102
                                echo "\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 105
                            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                        }
                        // line 107
                        echo "\t\t\t\t\t</li>
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['headerlink'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 109
                    echo "\t\t\t\t</ul>
\t\t\t\t</nav>
\t\t\t";
                }
                // line 112
                echo "\t\t</div>
\t";
            }
            // line 114
            echo "\t<script>uniMenuUpd('.menu2 .menu__collapse');</script>
";
        }
    }

    public function getTemplateName()
    {
        return "unishop2/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 114,  350 => 112,  345 => 109,  338 => 107,  334 => 105,  326 => 102,  321 => 99,  308 => 96,  305 => 95,  301 => 94,  296 => 91,  294 => 90,  284 => 89,  278 => 87,  274 => 86,  270 => 85,  267 => 84,  265 => 83,  259 => 81,  253 => 79,  251 => 78,  246 => 77,  244 => 76,  238 => 75,  233 => 74,  229 => 73,  225 => 71,  223 => 70,  220 => 69,  217 => 68,  208 => 62,  203 => 59,  200 => 58,  198 => 57,  193 => 54,  187 => 53,  184 => 52,  181 => 51,  178 => 50,  175 => 49,  173 => 48,  170 => 47,  166 => 45,  158 => 42,  153 => 39,  143 => 36,  140 => 35,  137 => 34,  124 => 31,  121 => 30,  117 => 29,  112 => 26,  110 => 25,  100 => 24,  94 => 22,  90 => 21,  86 => 20,  83 => 19,  81 => 18,  75 => 16,  69 => 14,  67 => 13,  62 => 12,  60 => 11,  52 => 10,  45 => 9,  41 => 8,  36 => 6,  32 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if categories or headerlinks2 %}*/
/* 	{% set one_line = 0 %}*/
/* 	{% set two_line = 0 %}*/
/* 	<div class="col-xs-12 col-sm-6 {{ menu_type == 1 ? 'col-md-3 col-lg-3 col-xxl-4' : 'col-md-12' }}">*/
/* 		<nav id="menu" class="menu {{ menu_type == 1 ? 'menu1' : 'menu2' }}">*/
/* 			<div class="menu__header" data-toggle="collapse" data-target=".main-menu__collapse">{{ text_menu }}<i class="fa fa-bars"></i></div>*/
/* 			<ul class="menu__collapse collapse main-menu__collapse">*/
/* 				{% for category in categories %}*/
/* 					<li class="menu__level-1-li {{ category.children ? 'has-children' }} {{ separator ? 'menu__separator' }}">*/
/* 						<a class="menu__level-1-a {{ category.children ? 'chevron' }} {{ category.disabled ? 'disabled' }}" {{ category.disabled is empty ? 'href="'~category.href~'"' }}>*/
/* 							{% if 'fa-' in category.icon %}*/
/* 								<span class="menu__level-1-icon"><i class="{{ category.icon }} fa-fw"></i></span>*/
/* 							{% elseif category.icon %}*/
/* 								<span class="menu__level-1-icon"><img src="image/{{ category.icon }}" alt="" /></span>*/
/* 							{% endif %}*/
/* 							{{ category.name }}*/
/* 						</a>*/
/* 						{% if category.children %}*/
/* 							<span class="menu__pm menu__level-1-pm visible-xs visible-sm"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>*/
/* 							<div class="menu__level-2 column-{{category.column}}">*/
/* 								{% for child in category.children %}*/
/* 									<ul class="menu__level-2-ul {{category.column < 5 ? 'col-md-'~12/category.column : 'col-md-12'}}">*/
/* 										<li class="menu__level-2-li">*/
/* 											<a class="menu__level-2-a {{ child.children ? 'uppercase' }} {{ child.disabled ? 'disabled' }}" {{ child.disabled is empty ? 'href="'~child.href~'"' }}>{{ child.name }}</a>*/
/* 											{% if child.children and child.children|length > 0 %}*/
/* 												<span class="menu__pm menu__level-2-pm visible-xs visible-sm"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>*/
/* 												<div class="menu__level-3">*/
/* 													<ul class="menu__level-3-ul">*/
/* 														{% for child in child.children %}*/
/* 															<li class="menu__level-3-li">*/
/* 																<a class="menu__level-3-a {{ child.disabled ? 'disabled' }}" {{ child.disabled is empty ? 'href="'~child.href~'"' }}>{{ child.name }}</a>*/
/* 															</li>*/
/* 														{% endfor %}*/
/* 														{% if child.more %}*/
/* 															<li class="menu__level-3-li">*/
/* 																<a class="menu__level-3-a menu__more uni-href" data-href="{{ child.href }}"><span class="menu__more-span">{{ text_all_categories }} ({{ child.more }})</span></a>*/
/* 															</li>*/
/* 														{% endif %}*/
/* 													</ul>*/
/* 												</div>*/
/* 											{% endif %}*/
/* 										</li>*/
/* 									</ul>*/
/* 								{% endfor %}*/
/* 							</div>*/
/* 						{% endif %}*/
/* 					</li>*/
/* 					{% if category.name|length <= 30 %}*/
/* 						{% set one_line = one_line+1 %}*/
/* 					{% else %}*/
/* 						{% set two_line = two_line+1 %}*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 		</nav>*/
/* 	</div>*/
/* 	{% if menu_type == 1 and menu_expanded %}*/
/* 		{% set total = (((one_line * 41) + (two_line * 60)) + (home ? 0 : -25)) %}*/
/* 		<script>*/
/* 		var style = '<style>';*/
/* 			style += '@media (min-width:992px) {';*/
/* 			style += '#column-left {margin-top:{{ total }}px}';*/
/* 			style += 'header .menu1 {border-radius:4px 4px 0 0}'; */
/* 			style += 'header .menu1 .menu__collapse {display:block !important}}</style>';*/
/* 		$('head').append(style);*/
/* 		</script>*/
/* 	{% endif %}*/
/* 	{% if menu_type == 1 %}*/
/* 		<div class="col-xs-12 col-md-9 col-lg-9 col-xxl-16 hidden-xs hidden-sm">*/
/* 			{% if headerlinks2 %}*/
/* 				<nav id="menu2" class="menu menu2 menu-right">*/
/* 				<ul class="menu__collapse">*/
/* 				{% for headerlink in headerlinks2 %}*/
/* 					<li class="menu__level-1-li {{ headerlink.children ? 'has-children' }}">*/
/* 						<a class="menu__level-1-a {{ headerlink.children ? 'chevron' }}" href="{{headerlink.href}}">*/
/* 							{% if 'fa-' in headerlink.icon %}*/
/* 								<span class="menu__level-1-icon"><i class="{{ headerlink.icon }} fa-fw"></i></span>*/
/* 							{% elseif headerlink.icon %}*/
/* 								<span class="menu__level-1-icon"><img src="image/{{ headerlink.icon }}" alt="" /></span>*/
/* 							{% endif %}*/
/* 							{{ headerlink.name }}*/
/* 						</a>*/
/* 						{% if headerlink.children %}*/
/* 							<span class="menu__pm menu__level-1-pm visible-xs visible-sm"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span>*/
/* 							<div class="menu__level-2 column-{{ headerlink.column }}">*/
/* 								{% for child in headerlink.children %}*/
/* 									<ul class="menu__level-2-ul {{ headerlink.column < 5 ? 'col-md-'~12/headerlink.column : 'col-md-4' }}">*/
/* 										<li class="menu__level-2-li">*/
/* 											<a class="menu__level-2-a {{ child.children ? 'uppercase' }} {{ child.disabled ? 'disabled' }}" {{ child.disabled is empty ? 'href="'~child.href~'"' }}>{{ child.name }}</a>*/
/* 											{% if child.children and child.children|length > 0 %}*/
/* 												<span class="menu__pm menu__level-2-pm visible-xs visible-sm"><i class="fa fa-plus" ></i><i class="fa fa-minus" ></i></span>*/
/* 												<div class="menu__level-3">*/
/* 													<ul class="list-unstyled">*/
/* 														{% for child in child.children %}*/
/* 															<li class="menu__level-3-li">*/
/* 																<a class="menu__level-3-a {{ child.disabled ? 'disabled' }}" {{ child.disabled is empty ? 'href="'~child.href~'"' }}>{{ child.name }}</a>*/
/* 															</li>*/
/* 														{% endfor %}*/
/* 													</ul>*/
/* 												</div>*/
/* 											{% endif %}*/
/* 										</li>*/
/* 									</ul>*/
/* 								{% endfor %}*/
/* 							</div>*/
/* 						{% endif %}*/
/* 					</li>*/
/* 				{% endfor %}*/
/* 				</ul>*/
/* 				</nav>*/
/* 			{% endif %}*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	<script>uniMenuUpd('.menu2 .menu__collapse');</script>*/
/* {% endif %}*/
