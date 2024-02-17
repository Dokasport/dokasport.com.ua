<?php

/* unishop2/template/common/header.twig */
class __TwigTemplate_36a52d60745f7ac20beaf332ace3d99a982f4c3ca19219eaf8c090b0df607fd0 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-184175830-1\"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-184175830-1');
</script>
    <meta name=\"google-site-verification\" content=\"BPBKSs1eRA1U1v9IK7GX_myctiWHYwK_C3a8xSaJRTg\" />
<title>";
        // line 14
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
<base href=\"";
        // line 18
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
";
        // line 19
        if ((isset($context["robots"]) ? $context["robots"] : null)) {
            // line 20
            echo "<meta name=\"robots\" content=\"";
            echo (isset($context["robots"]) ? $context["robots"] : null);
            echo "\" />
";
        }
        // line 22
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 23
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
";
        }
        // line 25
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 26
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
";
        }
        // line 28
        echo "<meta property=\"og:title\" content=\"";
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "\" />
<meta property=\"og:type\" content=\"website\" />
";
        // line 30
        if ((isset($context["og_url"]) ? $context["og_url"] : null)) {
            // line 31
            echo "<meta property=\"og:url\" content=\"";
            echo (isset($context["og_url"]) ? $context["og_url"] : null);
            echo "\" />
";
        }
        // line 33
        if ((isset($context["og_image"]) ? $context["og_image"] : null)) {
            // line 34
            echo "<meta property=\"og:image\" content=\"";
            echo (isset($context["og_image"]) ? $context["og_image"] : null);
            echo "\" />
";
        } else {
            // line 36
            echo "<meta property=\"og:image\" content=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" />
";
        }
        // line 38
        echo "<meta property=\"og:site_name\" content=\"";
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" />
<meta name=\"theme-color\" content=\"#";
        // line 39
        echo (isset($context["theme_color"]) ? $context["theme_color"] : null);
        echo "\" />
";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 41
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "<link href=\"catalog/view/theme/unishop2/fonts/rubik-regular.woff2\" rel=\"preload\" as=\"font\" type=\"font/woff2\" crossorigin>
<link href=\"catalog/view/theme/unishop2/fonts/rubik-medium.woff2\" rel=\"preload\" as=\"font\" type=\"font/woff2\" crossorigin>
<link href=\"catalog/view/theme/unishop2/fonts/fa-solid-900.woff2\" rel=\"preload\" as=\"font\" type=\"font/woff2\" crossorigin>
<link href=\"catalog/view/theme/unishop2/fonts/fa-regular-400.woff2\" rel=\"preload\" as=\"font\" type=\"font/woff2\" crossorigin>
<link href=\"catalog/view/theme/unishop2/fonts/fa-brands-400.woff2\" rel=\"preload\" as=\"font\" type=\"font/woff2\" crossorigin>
";
        // line 48
        if ((isset($context["merged_style"]) ? $context["merged_style"] : null)) {
            // line 49
            echo "\t<link href=\"";
            echo (isset($context["merged_style"]) ? $context["merged_style"] : null);
            echo "\" rel=\"preload\" as=\"style\" />
\t<link href=\"";
            // line 50
            echo (isset($context["merged_style"]) ? $context["merged_style"] : null);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
";
        } else {
            // line 52
            echo "\t<link href=\"catalog/view/theme/unishop2/stylesheet/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
\t<link href=\"catalog/view/theme/unishop2/stylesheet/stylesheet.css?v=";
            // line 53
            echo (isset($context["version"]) ? $context["version"] : null);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
\t<link href=\"catalog/view/theme/unishop2/stylesheet/font-awesome.min.css\" rel=\"stylesheet\" media=\"screen\" />
\t<link href=\"";
            // line 55
            echo (isset($context["generated_style"]) ? $context["generated_style"] : null);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
\t<link href=\"catalog/view/theme/unishop2/stylesheet/animate.css\" rel=\"stylesheet\" media=\"screen\" />
";
        }
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 59
            echo "\t<link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "<script>var items_on_mobile = ";
        echo (isset($context["items_on_mobile"]) ? $context["items_on_mobile"] : null);
        echo ", module_on_mobile = '";
        echo (isset($context["module_on_mobile"]) ? $context["module_on_mobile"] : null);
        echo "', default_view = '";
        echo (isset($context["default_view"]) ? $context["default_view"] : null);
        echo "';</script>
";
        // line 62
        if ((isset($context["merged_script"]) ? $context["merged_script"] : null)) {
            // line 63
            echo "\t<link href=\"";
            echo (isset($context["merged_script"]) ? $context["merged_script"] : null);
            echo "\" rel=\"preload\" as=\"script\" />
\t<script src=\"";
            // line 64
            echo (isset($context["merged_script"]) ? $context["merged_script"] : null);
            echo "\"></script>
";
        } else {
            // line 66
            echo "\t<script src=\"catalog/view/theme/unishop2/js/jquery-2.2.4.min.js\"></script>
\t<script src=\"catalog/view/theme/unishop2/js/bootstrap.min.js\"></script>
\t<script src=\"catalog/view/theme/unishop2/js/common.js\"></script>
\t<script src=\"catalog/view/theme/unishop2/js/owl.carousel.min.js\"></script>
\t<script src=\"catalog/view/theme/unishop2/js/menu-aim.min.js\"></script>
\t<script src=\"catalog/view/theme/unishop2/js/jquery.highlight.min.js\"></script>
";
        }
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 74
            echo "\t<script src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        if ((isset($context["user_js"]) ? $context["user_js"] : null)) {
            // line 77
            echo "<script>";
            echo (isset($context["user_js"]) ? $context["user_js"] : null);
            echo "</script>
";
        }
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 80
            echo "\t";
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "<noscript><style>.uni-module__wrapper{opacity:1}</style></noscript>
</head>
<body ";
        // line 84
        echo (((isset($context["class"]) ? $context["class"] : null)) ? ((("class=\"" . (isset($context["class"]) ? $context["class"] : null)) . "\"")) : (""));
        echo ">
\t<header>
\t\t<div id=\"top\" class=\"top-menu\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t<div id=\"account\" class=\"btn-group\">
\t\t\t\t\t\t<button class=\"top-menu__btn dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i><span class=\"hidden-xs\">";
        // line 90
        echo (((isset($context["logged"]) ? $context["logged"] : null)) ? ((isset($context["customer_name"]) ? $context["customer_name"] : null)) : ((isset($context["text_account"]) ? $context["text_account"] : null)));
        echo "</span></button>
\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t";
        // line 92
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 93
            echo "\t\t\t\t\t\t\t\t<li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 94
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 95
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\">";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 96
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\">";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 97
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t";
        } else {
            // line 99
            echo "\t\t\t\t\t\t\t\t<li><a ";
            if ((isset($context["show_register"]) ? $context["show_register"] : null)) {
                echo "onclick=\"uniRegisterOpen();\"";
            } else {
                echo " href=\"";
                echo (isset($context["register"]) ? $context["register"] : null);
                echo "\" ";
            }
            echo ">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t\t<li><a ";
            // line 100
            if ((isset($context["show_login"]) ? $context["show_login"] : null)) {
                echo "onclick=\"uniLoginOpen();\"";
            } else {
                echo " href=\"";
                echo (isset($context["login"]) ? $context["login"] : null);
                echo "\"";
            }
            echo ">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>
\t\t\t\t\t\t\t";
        }
        // line 102
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 105
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "
\t\t\t\t";
        // line 106
        echo (isset($context["currency"]) ? $context["currency"] : null);
        echo "
\t\t\t\t";
        // line 107
        if ((isset($context["search_mob_hide"]) ? $context["search_mob_hide"] : null)) {
            // line 108
            echo "\t\t\t\t\t<div class=\"pull-right visible-xs\">
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t<button class=\"top-menu__btn\" onclick=\"\$('#search').toggleClass('show'); \$('#search input[name=\\'search\\']').focus();\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 114
        echo "\t\t\t\t";
        if ((isset($context["headerlinks"]) ? $context["headerlinks"] : null)) {
            // line 115
            echo "\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t<div class=\"top-links btn-group\">
\t\t\t\t\t\t\t<button class=\"top-menu__btn dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-info\"></i></button>
\t\t\t\t\t\t\t<ul class=\"top-links__ul dropdown-menu dropdown-menu-left\">
\t\t\t\t\t\t\t\t";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["headerlinks"]) ? $context["headerlinks"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["headerlink"]) {
                // line 120
                echo "\t\t\t\t\t\t\t\t\t<li class=\"top-links__li\"><a class=\"top-links__a\" href=\"";
                echo $this->getAttribute($context["headerlink"], "link", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["headerlink"], "title", array());
                echo "\">";
                echo $this->getAttribute($context["headerlink"], "title", array());
                echo "</a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['headerlink'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 126
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"container\">
\t\t\t<div class=\"header-block row row-flex\">
\t\t\t\t<div class=\"header-block__item col-xs-5 col-sm-6 col-md-3 col-xxl-4\">
\t\t\t\t\t<div id=\"logo\" class=\"header-logo\">
\t\t\t\t\t\t";
        // line 132
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 133
            echo "\t\t\t\t\t\t\t";
            if ((array_key_exists("og_url", $context) && ((isset($context["home"]) ? $context["home"] : null) == (isset($context["og_url"]) ? $context["og_url"] : null)))) {
                // line 134
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo (isset($context["logo"]) ? $context["logo"] : null);
                echo "\" title=\"";
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "\" alt=\"";
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "\" class=\"header-logo__img img-responsive\" />
\t\t\t\t\t\t\t";
            } else {
                // line 136
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo (isset($context["home"]) ? $context["home"] : null);
                echo "\"><img src=\"";
                echo (isset($context["logo"]) ? $context["logo"] : null);
                echo "\" title=\"";
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "\" alt=\"";
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "\" class=\"img-responsive\" /></a>
\t\t\t\t\t\t\t";
            }
            // line 138
            echo "\t\t\t\t\t\t";
        } else {
            // line 139
            echo "\t\t\t\t\t\t\t";
            if ((array_key_exists("og_url", $context) && ((isset($context["home"]) ? $context["home"] : null) == (isset($context["og_url"]) ? $context["og_url"] : null)))) {
                // line 140
                echo "\t\t\t\t\t\t\t\t<span>";
                echo (isset($context["shop_name"]) ? $context["shop_name"] : null);
                echo "</span>
\t\t\t\t\t\t\t";
            } else {
                // line 142
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo (isset($context["home"]) ? $context["home"] : null);
                echo "\">";
                echo (isset($context["shop_name"]) ? $context["shop_name"] : null);
                echo "</a>
\t\t\t\t\t\t\t";
            }
            // line 144
            echo "\t\t\t\t\t\t";
        }
        // line 145
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"header-block__item col-xs-5 col-sm-4 col-md-3 col-xxl-4 ";
        // line 147
        echo (((isset($context["search_phone_change"]) ? $context["search_phone_change"] : null)) ? ("") : ("col-md-push-5 col-xxl-push-10"));
        echo "\">
\t\t\t\t\t<div class=\"header-phones\">
\t\t\t\t\t\t<span class=\"header-phones__main uni-href\" ";
        // line 149
        echo (($this->getAttribute($this->getAttribute((isset($context["main_phones"]) ? $context["main_phones"] : null), 0, array()), "href", array())) ? ((("data-href=\"" . $this->getAttribute($this->getAttribute((isset($context["main_phones"]) ? $context["main_phones"] : null), 0, array(), "array"), "href", array())) . "\"")) : (""));
        echo " >";
        echo $this->getAttribute($this->getAttribute((isset($context["main_phones"]) ? $context["main_phones"] : null), 0, array()), "number", array());
        echo "</span>
\t\t\t\t\t\t";
        // line 150
        if (((isset($context["phones"]) ? $context["phones"] : null) || (isset($context["text_in_add_contacts"]) ? $context["text_in_add_contacts"] : null))) {
            // line 151
            echo "\t\t\t\t\t\t\t<i class=\"header-phones__show-phone dropdown-toggle fas fa-chevron-down\" data-toggle=\"dropdown\"></i>
\t\t\t\t\t\t\t<ul class=\"header-phones__ul dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t\t";
            // line 153
            if ((isset($context["callback"]) ? $context["callback"] : null)) {
                // line 154
                echo "\t\t\t\t\t\t\t\t\t<li class=\"header-phones__li\">
\t\t\t\t\t\t\t\t\t\t<a onclick=\"uniRequestOpen(['mail', 'phone', 'comment']);\" class=\"header-phones__callback\"><span class=\"header-phones__span\">";
                // line 155
                echo (isset($context["text_header_callback"]) ? $context["text_header_callback"] : null);
                echo "</span></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            // line 158
            echo "\t\t\t\t\t\t\t\t";
            if (((isset($context["text_in_add_contacts_position"]) ? $context["text_in_add_contacts_position"] : null) && (isset($context["text_in_add_contacts"]) ? $context["text_in_add_contacts"] : null))) {
                // line 159
                echo "\t\t\t\t\t\t\t\t\t<li class=\"header-phones__text\"><hr style=\"margin-top:0px;\" />";
                echo (isset($context["text_in_add_contacts"]) ? $context["text_in_add_contacts"] : null);
                echo "<hr style=\"margin-bottom:5px;\" /></li>
\t\t\t\t\t\t\t\t";
            }
            // line 161
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["phones"]) ? $context["phones"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                // line 162
                echo "\t\t\t\t\t\t\t\t\t<li class=\"header-phones__li ";
                echo (($this->getAttribute($context["phone"], "main", array(), "any", true, true)) ? ("visible-xs") : (""));
                echo "\">
\t\t\t\t\t\t\t\t\t\t<a class=\"header-phones__a uni-href\" ";
                // line 163
                echo (($this->getAttribute($context["phone"], "href", array())) ? ((("data-href=\"" . $this->getAttribute($context["phone"], "href", array())) . "\"")) : (""));
                echo ">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 164
                if (($this->getAttribute($context["phone"], "icon", array()) && twig_in_filter("fa-", $this->getAttribute($context["phone"], "icon", array())))) {
                    // line 165
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"";
                    echo $this->getAttribute($context["phone"], "icon", array());
                    echo "\"></i>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif ($this->getAttribute(                // line 166
$context["phone"], "icon", array())) {
                    // line 167
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"image/";
                    echo $this->getAttribute($context["phone"], "icon", array());
                    echo "\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 169
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo $this->getAttribute($context["phone"], "number", array());
                echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            echo "\t\t\t\t\t\t\t\t";
            if (( !(isset($context["text_in_add_contacts_position"]) ? $context["text_in_add_contacts_position"] : null) && (isset($context["text_in_add_contacts"]) ? $context["text_in_add_contacts"] : null))) {
                // line 174
                echo "\t\t\t\t\t\t\t\t\t<li class=\"header-phones__text\"><hr style=\"margin-top:5px\" />";
                echo (isset($context["text_in_add_contacts"]) ? $context["text_in_add_contacts"] : null);
                echo "</li>
\t\t\t\t\t\t\t\t";
            }
            // line 176
            echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
        }
        // line 178
        echo "\t\t\t\t\t\t";
        if ((twig_length_filter($this->env, (isset($context["main_phones"]) ? $context["main_phones"] : null)) > 1)) {
            // line 179
            echo "\t\t\t\t\t\t\t<div class=\"header-phones__additionals\">
\t\t\t\t\t\t\t\t";
            // line 180
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["main_phones"]) ? $context["main_phones"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["phone"]) {
                // line 181
                echo "\t\t\t\t\t\t\t\t\t<span class=\"header-phones__additional ";
                echo ((($context["key"] == 0)) ? ("selected") : (""));
                echo "\" data-href=\"";
                echo $this->getAttribute($context["phone"], "href", array());
                echo "\" data-phone=\"";
                echo $this->getAttribute($context["phone"], "number", array());
                echo "\">
\t\t\t\t\t\t\t\t\t";
                // line 182
                if (($this->getAttribute($context["phone"], "icon", array()) && twig_in_filter("fa-", $this->getAttribute($context["phone"], "icon", array())))) {
                    // line 183
                    echo "\t\t\t\t\t\t\t\t\t\t<i class=\"";
                    echo $this->getAttribute($context["phone"], "icon", array());
                    echo "\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    echo $this->getAttribute($context["phone"], "text", array());
                    echo "\"></i>
\t\t\t\t\t\t\t\t\t";
                } elseif ($this->getAttribute(                // line 184
$context["phone"], "icon", array())) {
                    // line 185
                    echo "\t\t\t\t\t\t\t\t\t\t<img src=\"image/";
                    echo $this->getAttribute($context["phone"], "icon", array());
                    echo "\" alt=\"\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
                    echo $this->getAttribute($context["phone"], "text", array());
                    echo "\" />
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 187
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo $this->getAttribute($context["phone"], "text", array());
                    echo "
\t\t\t\t\t\t\t\t\t";
                }
                // line 189
                echo "\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['phone'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 191
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 193
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"header-block__item col-xs-2 col-sm-2 col-md-1 col-xxl-2 col-md-push-5 col-xxl-push-10\">";
        // line 195
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "</div>
\t\t\t\t<div id=\"search\" class=\"header-block__item col-xs-12 col-sm-6 col-md-5 col-lg-5 col-xxl-10 ";
        // line 196
        echo (((isset($context["search_phone_change"]) ? $context["search_phone_change"] : null)) ? ("col-md-pull-1 col-xxl-pull-2") : ("col-md-pull-4 col-xxl-pull-6"));
        echo " hidden-sm ";
        echo (((isset($context["search_mob_hide"]) ? $context["search_mob_hide"] : null)) ? ("mobhide") : (""));
        echo "\">
\t\t\t\t\t";
        // line 197
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"main-menu\" class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 203
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "
\t\t\t\t<div id=\"search2\" class=\"col-sm-6 col-md-5 visible-sm\"></div>
\t\t\t\t<script>\$('#search .header-search').clone().appendTo('#search2');</script>
\t\t\t</div>
\t\t</div>
\t</header>
\t<main>";
    }

    public function getTemplateName()
    {
        return "unishop2/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  603 => 203,  594 => 197,  588 => 196,  584 => 195,  580 => 193,  576 => 191,  569 => 189,  563 => 187,  555 => 185,  553 => 184,  546 => 183,  544 => 182,  535 => 181,  531 => 180,  528 => 179,  525 => 178,  521 => 176,  515 => 174,  512 => 173,  501 => 169,  495 => 167,  493 => 166,  488 => 165,  486 => 164,  482 => 163,  477 => 162,  472 => 161,  466 => 159,  463 => 158,  457 => 155,  454 => 154,  452 => 153,  448 => 151,  446 => 150,  440 => 149,  435 => 147,  431 => 145,  428 => 144,  420 => 142,  414 => 140,  411 => 139,  408 => 138,  396 => 136,  386 => 134,  383 => 133,  381 => 132,  373 => 126,  367 => 122,  354 => 120,  350 => 119,  344 => 115,  341 => 114,  333 => 108,  331 => 107,  327 => 106,  323 => 105,  318 => 102,  305 => 100,  292 => 99,  285 => 97,  279 => 96,  273 => 95,  267 => 94,  260 => 93,  258 => 92,  253 => 90,  244 => 84,  240 => 82,  231 => 80,  227 => 79,  221 => 77,  219 => 76,  210 => 74,  206 => 73,  197 => 66,  192 => 64,  187 => 63,  185 => 62,  176 => 61,  163 => 59,  159 => 58,  153 => 55,  148 => 53,  145 => 52,  140 => 50,  135 => 49,  133 => 48,  126 => 43,  115 => 41,  111 => 40,  107 => 39,  102 => 38,  96 => 36,  90 => 34,  88 => 33,  82 => 31,  80 => 30,  74 => 28,  68 => 26,  66 => 25,  60 => 23,  58 => 22,  52 => 20,  50 => 19,  46 => 18,  39 => 14,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <head>*/
/*     <!-- Global site tag (gtag.js) - Google Analytics -->*/
/* <script async src="https://www.googletagmanager.com/gtag/js?id=UA-184175830-1"></script>*/
/* <script>*/
/*   window.dataLayer = window.dataLayer || [];*/
/*   function gtag(){dataLayer.push(arguments);}*/
/*   gtag('js', new Date());*/
/* */
/*   gtag('config', 'UA-184175830-1');*/
/* </script>*/
/*     <meta name="google-site-verification" content="BPBKSs1eRA1U1v9IK7GX_myctiWHYwK_C3a8xSaJRTg" />*/
/* <title>{{ title }}</title>*/
/* <meta charset="UTF-8" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1" />*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge" />*/
/* <base href="{{ base }}" />*/
/* {% if robots %}*/
/* <meta name="robots" content="{{ robots }}" />*/
/* {% endif %}*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content="{{ keywords }}" />*/
/* {% endif %}*/
/* <meta property="og:title" content="{{ title }}" />*/
/* <meta property="og:type" content="website" />*/
/* {% if og_url%}*/
/* <meta property="og:url" content="{{ og_url }}" />*/
/* {% endif %}*/
/* {% if og_image %}*/
/* <meta property="og:image" content="{{ og_image }}" />*/
/* {% else %}*/
/* <meta property="og:image" content="{{ logo }}" />*/
/* {% endif %}*/
/* <meta property="og:site_name" content="{{ name }}" />*/
/* <meta name="theme-color" content="#{{ theme_color }}" />*/
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* <link href="catalog/view/theme/unishop2/fonts/rubik-regular.woff2" rel="preload" as="font" type="font/woff2" crossorigin>*/
/* <link href="catalog/view/theme/unishop2/fonts/rubik-medium.woff2" rel="preload" as="font" type="font/woff2" crossorigin>*/
/* <link href="catalog/view/theme/unishop2/fonts/fa-solid-900.woff2" rel="preload" as="font" type="font/woff2" crossorigin>*/
/* <link href="catalog/view/theme/unishop2/fonts/fa-regular-400.woff2" rel="preload" as="font" type="font/woff2" crossorigin>*/
/* <link href="catalog/view/theme/unishop2/fonts/fa-brands-400.woff2" rel="preload" as="font" type="font/woff2" crossorigin>*/
/* {% if merged_style %}*/
/* 	<link href="{{ merged_style }}" rel="preload" as="style" />*/
/* 	<link href="{{ merged_style }}" rel="stylesheet" media="screen" />*/
/* {% else %}*/
/* 	<link href="catalog/view/theme/unishop2/stylesheet/bootstrap.min.css" rel="stylesheet" media="screen" />*/
/* 	<link href="catalog/view/theme/unishop2/stylesheet/stylesheet.css?v={{ version }}" rel="stylesheet" media="screen" />*/
/* 	<link href="catalog/view/theme/unishop2/stylesheet/font-awesome.min.css" rel="stylesheet" media="screen" />*/
/* 	<link href="{{ generated_style }}" rel="stylesheet" media="screen" />*/
/* 	<link href="catalog/view/theme/unishop2/stylesheet/animate.css" rel="stylesheet" media="screen" />*/
/* {% endif %}*/
/* {% for style in styles %}*/
/* 	<link href="{{ style.href }}" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* {% endfor %}*/
/* <script>var items_on_mobile = {{ items_on_mobile }}, module_on_mobile = '{{ module_on_mobile }}', default_view = '{{ default_view }}';</script>*/
/* {% if merged_script %}*/
/* 	<link href="{{ merged_script }}" rel="preload" as="script" />*/
/* 	<script src="{{ merged_script }}"></script>*/
/* {% else %}*/
/* 	<script src="catalog/view/theme/unishop2/js/jquery-2.2.4.min.js"></script>*/
/* 	<script src="catalog/view/theme/unishop2/js/bootstrap.min.js"></script>*/
/* 	<script src="catalog/view/theme/unishop2/js/common.js"></script>*/
/* 	<script src="catalog/view/theme/unishop2/js/owl.carousel.min.js"></script>*/
/* 	<script src="catalog/view/theme/unishop2/js/menu-aim.min.js"></script>*/
/* 	<script src="catalog/view/theme/unishop2/js/jquery.highlight.min.js"></script>*/
/* {% endif %}*/
/* {% for script in scripts %}*/
/* 	<script src="{{ script }}"></script>*/
/* {% endfor %}*/
/* {% if user_js %}*/
/* <script>{{ user_js }}</script>*/
/* {% endif %}*/
/* {% for analytic in analytics %}*/
/* 	{{ analytic }}*/
/* {% endfor %}*/
/* <noscript><style>.uni-module__wrapper{opacity:1}</style></noscript>*/
/* </head>*/
/* <body {{ class ? 'class="'~class~'"' }}>*/
/* 	<header>*/
/* 		<div id="top" class="top-menu">*/
/* 			<div class="container">*/
/* 				<div class="pull-right">*/
/* 					<div id="account" class="btn-group">*/
/* 						<button class="top-menu__btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><span class="hidden-xs">{{ logged ? customer_name : text_account }}</span></button>*/
/* 						<ul class="dropdown-menu dropdown-menu-right">*/
/* 							{% if logged %}*/
/* 								<li><a href="{{ account }}">{{ text_account }}</a></li>*/
/* 								<li><a href="{{ order }}">{{ text_order }}</a></li>*/
/* 								<li><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/* 								<li><a href="{{ download }}">{{ text_download }}</a></li>*/
/* 								<li><a href="{{ logout }}">{{ text_logout }}</a></li>*/
/* 							{% else %}*/
/* 								<li><a {% if show_register %}onclick="uniRegisterOpen();"{% else %} href="{{ register }}" {% endif %}>{{ text_register }}</a></li>*/
/* 								<li><a {% if show_login %}onclick="uniLoginOpen();"{% else %} href="{{ login }}"{% endif %}>{{ text_login }}</a></li>*/
/* 							{% endif %}*/
/* 						</ul>*/
/* 					</div>*/
/* 				</div>*/
/* 				{{ language }}*/
/* 				{{ currency }}*/
/* 				{% if search_mob_hide %}*/
/* 					<div class="pull-right visible-xs">*/
/* 						<div class="btn-group">*/
/* 							<button class="top-menu__btn" onclick="$('#search').toggleClass('show'); $('#search input[name=\'search\']').focus();"><i class="fa fa-search"></i></button>*/
/* 						</div>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 				{% if headerlinks %}*/
/* 					<div class="pull-left">*/
/* 						<div class="top-links btn-group">*/
/* 							<button class="top-menu__btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-info"></i></button>*/
/* 							<ul class="top-links__ul dropdown-menu dropdown-menu-left">*/
/* 								{% for headerlink in headerlinks %}*/
/* 									<li class="top-links__li"><a class="top-links__a" href="{{ headerlink.link }}" title="{{ headerlink.title }}">{{ headerlink.title }}</a></li>*/
/* 								{% endfor %}*/
/* 							</ul>*/
/* 						</div>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="container">*/
/* 			<div class="header-block row row-flex">*/
/* 				<div class="header-block__item col-xs-5 col-sm-6 col-md-3 col-xxl-4">*/
/* 					<div id="logo" class="header-logo">*/
/* 						{% if logo %}*/
/* 							{% if og_url is defined and home == og_url %}*/
/* 								<img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="header-logo__img img-responsive" />*/
/* 							{% else %}*/
/* 								<a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" /></a>*/
/* 							{% endif %}*/
/* 						{% else %}*/
/* 							{% if og_url is defined and home == og_url %}*/
/* 								<span>{{ shop_name }}</span>*/
/* 							{% else %}*/
/* 								<a href="{{ home }}">{{ shop_name }}</a>*/
/* 							{% endif %}*/
/* 						{% endif %}*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="header-block__item col-xs-5 col-sm-4 col-md-3 col-xxl-4 {{ search_phone_change ? '' : 'col-md-push-5 col-xxl-push-10' }}">*/
/* 					<div class="header-phones">*/
/* 						<span class="header-phones__main uni-href" {{ main_phones.0.href ? 'data-href="'~main_phones[0].href~'"' }} >{{ main_phones.0.number }}</span>*/
/* 						{% if phones or text_in_add_contacts %}*/
/* 							<i class="header-phones__show-phone dropdown-toggle fas fa-chevron-down" data-toggle="dropdown"></i>*/
/* 							<ul class="header-phones__ul dropdown-menu dropdown-menu-right">*/
/* 								{% if callback %}*/
/* 									<li class="header-phones__li">*/
/* 										<a onclick="uniRequestOpen(['mail', 'phone', 'comment']);" class="header-phones__callback"><span class="header-phones__span">{{ text_header_callback }}</span></a>*/
/* 									</li>*/
/* 								{% endif %}*/
/* 								{% if text_in_add_contacts_position and text_in_add_contacts %}*/
/* 									<li class="header-phones__text"><hr style="margin-top:0px;" />{{ text_in_add_contacts }}<hr style="margin-bottom:5px;" /></li>*/
/* 								{% endif %}*/
/* 								{% for phone in phones %}*/
/* 									<li class="header-phones__li {{ phone.main is defined ? 'visible-xs' }}">*/
/* 										<a class="header-phones__a uni-href" {{ phone.href ? 'data-href="'~phone.href~'"' }}>*/
/* 											{% if phone.icon and 'fa-' in phone.icon %}*/
/* 												<i class="{{ phone.icon }}"></i>*/
/* 											{% elseif phone.icon %}*/
/* 												<img src="image/{{ phone.icon }}" alt="" />*/
/* 											{% endif %}*/
/* 											{{ phone.number }}*/
/* 										</a>*/
/* 									</li>*/
/* 								{% endfor %}*/
/* 								{% if not text_in_add_contacts_position and text_in_add_contacts %}*/
/* 									<li class="header-phones__text"><hr style="margin-top:5px" />{{ text_in_add_contacts }}</li>*/
/* 								{% endif %}*/
/* 							</ul>*/
/* 						{% endif %}*/
/* 						{% if main_phones|length > 1 %}*/
/* 							<div class="header-phones__additionals">*/
/* 								{% for key, phone in main_phones %}*/
/* 									<span class="header-phones__additional {{ key == 0 ? 'selected' }}" data-href="{{ phone.href }}" data-phone="{{ phone.number }}">*/
/* 									{% if phone.icon and 'fa-' in phone.icon %}*/
/* 										<i class="{{ phone.icon }}" data-toggle="tooltip" data-placement="left" title="{{ phone.text }}"></i>*/
/* 									{% elseif phone.icon %}*/
/* 										<img src="image/{{ phone.icon }}" alt="" data-toggle="tooltip" data-placement="left" title="{{ phone.text }}" />*/
/* 									{% else %}*/
/* 										{{ phone.text }}*/
/* 									{% endif %}*/
/* 									</span>*/
/* 								{% endfor %}*/
/* 							</div>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="header-block__item col-xs-2 col-sm-2 col-md-1 col-xxl-2 col-md-push-5 col-xxl-push-10">{{ cart }}</div>*/
/* 				<div id="search" class="header-block__item col-xs-12 col-sm-6 col-md-5 col-lg-5 col-xxl-10 {{ search_phone_change ? 'col-md-pull-1 col-xxl-pull-2' : 'col-md-pull-4 col-xxl-pull-6' }} hidden-sm {{ search_mob_hide ? 'mobhide' }}">*/
/* 					{{ search }}*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div id="main-menu" class="container">*/
/* 			<div class="row">*/
/* 				{{ menu }}*/
/* 				<div id="search2" class="col-sm-6 col-md-5 visible-sm"></div>*/
/* 				<script>$('#search .header-search').clone().appendTo('#search2');</script>*/
/* 			</div>*/
/* 		</div>*/
/* 	</header>*/
/* 	<main>*/
