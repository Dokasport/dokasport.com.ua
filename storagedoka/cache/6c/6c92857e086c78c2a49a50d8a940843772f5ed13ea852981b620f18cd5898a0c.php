<?php

/* extension/module/uni_settings.twig */
class __TwigTemplate_71aad565fa821a3f1e7734e51f9dee0311628e2e7d843b5ab1ce4dfdbb47a2b8 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
";
        // line 2
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
";
        // line 3
        ob_start();
        // line 4
        echo "<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t";
        // line 8
        if ((isset($context["show_settings"]) ? $context["show_settings"] : null)) {
            // line 9
            echo "\t\t\t\t<div class=\"btns\">
\t\t\t\t\t<button data-toggle=\"tooltip\" title=\"";
            // line 10
            echo (isset($context["button_apply_settings"]) ? $context["button_apply_settings"] : null);
            echo "\" class=\"btn btn-success\"><i class=\"fa fa-save\"></i></button>
\t\t\t\t\t<a href=\"";
            // line 11
            echo (isset($context["cancel"]) ? $context["cancel"] : null);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
            echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 14
        echo "\t\t\t</div>
\t\t\t<h1>";
        // line 15
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
\t\t\t";
        // line 16
        if ((isset($context["time_left"]) ? $context["time_left"] : null)) {
            echo "<div class=\"trial\"><span onclick=\"\$('li.license a').click()\">";
            echo (isset($context["time_left"]) ? $context["time_left"] : null);
            echo "</span></div>";
        }
        // line 17
        echo "\t\t\t<br />
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 20
            echo "\t\t\t\t\t<li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid container-fluid_new\">
\t\t";
        // line 26
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 27
            echo "\t\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>
\t\t";
        }
        // line 29
        echo "\t\t
\t";
        // line 30
        if ((isset($context["show_settings"]) ? $context["show_settings"] : null)) {
            // line 31
            echo "\t\t<div class=\"search-settings-wrap\"></div>
\t\t<ul class=\"nav nav-tabs\">
\t\t\t";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 34
                echo "\t\t\t\t<li ";
                echo ((($this->getAttribute($context["store"], "store_id", array()) == (isset($context["store_id"]) ? $context["store_id"] : null))) ? ("class=\"active\"") : (""));
                echo ">
\t\t\t\t\t<a href=\"";
                // line 35
                echo $this->getAttribute($context["store"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["store"], "name", array());
                echo "</a>
\t\t\t\t</li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t</ul>
\t\t<form action=\"";
            // line 39
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"uni_set\" id=\"unishop\">
\t\t\t";
            // line 40
            $context["effects_in"] = array(0 => "Disabled", 1 => "disabled", 2 => "Attention Seekers", 3 => "bounce", 4 => "flash", 5 => "pulse", 6 => "rubberBand", 7 => "shake", 8 => "swing", 9 => "tada", 10 => "wobble", 11 => "jello", 12 => "Bouncing Entrances", 13 => "bounceIn", 14 => "bounceInDown", 15 => "bounceInLeft", 16 => "bounceInRight", 17 => "bounceInUp", 18 => "Fading Entrances", 19 => "fadeIn", 20 => "fadeInDown", 21 => "fadeInLeft", 22 => "fadeInRight", 23 => "fadeInUp", 24 => "Flippers", 25 => "flip", 26 => "flipInX", 27 => "flipInY", 28 => "Lightspeed", 29 => "lightSpeedIn", 30 => "Rotating Entrances", 31 => "rotateIn", 32 => "rotateInDownLeft", 33 => "rotateInDownRight", 34 => "rotateInUpLeft", 35 => "rotateInUpRight", 36 => "Sliding Entrances", 37 => "slideInUp", 38 => "slideInDown", 39 => "slideInLeft", 40 => "slideInRight", 41 => "Zoom Entrances", 42 => "zoomIn", 43 => "zoomInDown", 44 => "zoomInLeft", 45 => "zoomInRight", 46 => "zoomInUp", 47 => "Specials", 48 => "hinge", 49 => "jackInTheBox", 50 => "rollIn");
            // line 51
            echo "\t\t\t";
            $context["effects_out"] = array(0 => "Disabled", 1 => "disabled", 2 => "Attention Seekers", 3 => "bounce", 4 => "flash", 5 => "pulse", 6 => "rubberBand", 7 => "shake", 8 => "swing", 9 => "tada", 10 => "wobble", 11 => "jello", 12 => "Bouncing Exits", 13 => "bounceOut", 14 => "bounceOutDown", 15 => "bounceOutLeft", 16 => "bounceOutRight", 17 => "bounceOutUp", 18 => "Fading Exits", 19 => "fadeOut", 20 => "fadeOutDown", 21 => "fadeOutLeft", 22 => "fadeOutRight", 23 => "fadeOutUp", 24 => "Flippers", 25 => "flip", 26 => "flipOutX", 27 => "flipOutY", 28 => "Lightspeed", 29 => "lightSpeedOut", 30 => "Rotating Exits", 31 => "rotateOut", 32 => "rotateOutDownLeft", 33 => "rotateOutDownRight", 34 => "rotateOutUpLeft", 35 => "rotateOutUpRight", 36 => "Sliding Exits", 37 => "slideOutUp", 38 => "slideOutDown", 39 => "slideOutLeft", 40 => "slideOutRight", 41 => "Zoom Exits", 42 => "zoomOut", 43 => "zoomOutDown", 44 => "zoomOutLeft", 45 => "zoomOutRight", 46 => "zoomOutUp", 47 => "Specials", 48 => "hinge", 49 => "jackInTheBox", 50 => "rollOut");
            // line 62
            echo "\t\t\t";
            $context["group"] = array(0 => "Disabled", 1 => "Attention Seekers", 2 => "Bouncing Entrances", 3 => "Bouncing Exits", 4 => "Fading Entrances", 5 => "Fading Exits", 6 => "Flippers", 7 => "Lightspeed", 8 => "Rotating Entrances", 9 => "Rotating Exits", 10 => "Sliding Entrances", 11 => "Sliding Exits", 12 => "Zoom Entrances", 13 => "Zoom Exits", 14 => "Specials");
            echo "\t\t\t\t
\t\t\t
\t\t\t";
            // line 64
            $context["alert_effects_in"] = array(0 => "Disabled", 1 => "disabled", 2 => "Attention Seekers", 3 => "bounce", 4 => "flash", 5 => "pulse", 6 => "rubberBand", 7 => "shake", 8 => "tada", 9 => "jello", 10 => "Bouncing Entrances", 11 => "bounceIn", 12 => "bounceInLeft", 13 => "bounceInRight", 14 => "Fading Entrances", 15 => "fadeIn", 16 => "fadeInLeft", 17 => "fadeInRight", 18 => "Lightspeed", 19 => "lightSpeedIn", 20 => "Sliding Entrances", 21 => "slideInLeft", 22 => "slideInRight", 23 => "Zoom Entrances", 24 => "zoomInLeft", 25 => "zoomInRight");
            // line 72
            echo "\t\t\t";
            $context["alert_effects_out"] = array(0 => "Disabled", 1 => "disabled", 2 => "Attention Seekers", 3 => "bounce", 4 => "flash", 5 => "pulse", 6 => "rubberBand", 7 => "shake", 8 => "swing", 9 => "tada", 10 => "wobble", 11 => "jello", 12 => "Bouncing Exits", 13 => "bounceOut", 14 => "bounceOutDown", 15 => "bounceOutRight", 16 => "bounceOutUp", 17 => "Fading Exits", 18 => "fadeOut", 19 => "fadeOutDown", 20 => "fadeOutRight", 21 => "fadeOutUp", 22 => "Flippers", 23 => "flip", 24 => "flipOutX", 25 => "flipOutY", 26 => "Lightspeed", 27 => "lightSpeedOut", 28 => "Sliding Exits", 29 => "slideOutUp", 30 => "slideOutDown", 31 => "slideOutRight", 32 => "Zoom Exits", 33 => "zoomOut", 34 => "zoomOutDown", 35 => "zoomOutRight", 36 => "zoomOutUp", 37 => "Specials", 38 => "rollOut");
            // line 82
            echo "\t\t\t
\t\t\t<ul class=\"nav nav-stacked nav-tabs nav-pills col-sm-3 col-md-3 col-lg-3\">
\t\t\t\t<li class=\"active\"><a href=\"#tab-header\" data-toggle=\"tab\">";
            // line 84
            echo (isset($context["tab_header"]) ? $context["tab_header"] : null);
            echo "</a></li>
\t\t\t\t<li><a href=\"#tab-footer\" data-toggle=\"tab\">";
            // line 85
            echo (isset($context["tab_footer"]) ? $context["tab_footer"] : null);
            echo "</a></li>
\t\t\t\t<li><a href=\"#tab-home\" data-toggle=\"tab\">";
            // line 86
            echo (isset($context["tab_home"]) ? $context["tab_home"] : null);
            echo "</a></li>
\t\t\t\t<li><a href=\"#tab-catalog\" data-toggle=\"tab\"><span title=\"";
            // line 87
            echo (isset($context["text_new_settings"]) ? $context["text_new_settings"] : null);
            echo "\" data-toggle=\"tooltip\">New</span>";
            echo (isset($context["tab_catalog"]) ? $context["tab_catalog"] : null);
            echo "</a></li>
\t\t\t\t<li><a href=\"#tab-product\" data-toggle=\"tab\"><span title=\"";
            // line 88
            echo (isset($context["text_new_settings"]) ? $context["text_new_settings"] : null);
            echo "\" data-toggle=\"tooltip\">New</span>";
            echo (isset($context["tab_product"]) ? $context["tab_product"] : null);
            echo "</a></li>
\t\t\t\t<li><a href=\"#tab-callback\" data-toggle=\"tab\">";
            // line 89
            echo (isset($context["tab_callback"]) ? $context["tab_callback"] : null);
            echo "</a></li>
\t\t\t\t<li><a href=\"#tab-order\" data-toggle=\"tab\"><span title=\"";
            // line 90
            echo (isset($context["text_new_settings"]) ? $context["text_new_settings"] : null);
            echo "\" data-toggle=\"tooltip\">New</span>";
            echo (isset($context["tab_quickorder"]) ? $context["tab_quickorder"] : null);
            echo "</a></li>
\t\t\t\t<li><a href=\"#tab-checkout\" data-toggle=\"tab\">";
            // line 91
            echo (isset($context["tab_checkout"]) ? $context["tab_checkout"] : null);
            echo "</a></li>
\t\t\t\t<li><a href=\"#tab-login\" data-toggle=\"tab\">";
            // line 92
            echo (isset($context["tab_login_register"]) ? $context["tab_login_register"] : null);
            echo "</a></li>
\t\t\t\t<li><a href=\"#tab-contacts\" data-toggle=\"tab\">";
            // line 93
            echo (isset($context["tab_contacts"]) ? $context["tab_contacts"] : null);
            echo "</a></li>
\t\t\t\t<li><a href=\"#tab-fly-menu\" data-toggle=\"tab\">";
            // line 94
            echo (isset($context["tab_flymenu"]) ? $context["tab_flymenu"] : null);
            echo "</a></li>
\t\t\t\t<li><a href=\"#tab-search\" data-toggle=\"tab\">";
            // line 95
            echo (isset($context["tab_livesearch"]) ? $context["tab_livesearch"] : null);
            echo "</a></li>
\t\t\t\t<li><a href=\"#tab-stock-status\" data-toggle=\"tab\"><span title=\"";
            // line 96
            echo (isset($context["text_new_settings"]) ? $context["text_new_settings"] : null);
            echo "\" data-toggle=\"tooltip\">New</span>";
            echo (isset($context["tab_stock_indicator"]) ? $context["tab_stock_indicator"] : null);
            echo "</a></li>
\t\t\t\t<li><a href=\"#tab-sticker\" data-toggle=\"tab\">";
            // line 97
            echo (isset($context["tab_stickers"]) ? $context["tab_stickers"] : null);
            echo "</a></li>
\t\t\t\t<li><a href=\"#tab-cart-btn\" data-toggle=\"tab\">";
            // line 98
            echo (isset($context["tab_button"]) ? $context["tab_button"] : null);
            echo "</a></li>
\t\t\t\t<li><a href=\"#tab-notification\" data-toggle=\"tab\">";
            // line 99
            echo (isset($context["tab_notification"]) ? $context["tab_notification"] : null);
            echo "</a></li>
\t\t\t\t<li><a href=\"#tab-style\" data-toggle=\"tab\">";
            // line 100
            echo (isset($context["tab_style"]) ? $context["tab_style"] : null);
            echo "</a></li>
\t\t\t\t<li><a href=\"#tab-other\" data-toggle=\"tab\">";
            // line 101
            echo (isset($context["tab_other"]) ? $context["tab_other"] : null);
            echo "</a></li>
\t\t\t\t";
            // line 102
            if ((isset($context["time_left"]) ? $context["time_left"] : null)) {
                echo "<li class=\"license\"><a href=\"#tab-key\" data-toggle=\"tab\"><b>";
                echo (isset($context["tab_key"]) ? $context["tab_key"] : null);
                echo "</b></a></li>";
            }
            // line 103
            echo "\t\t\t\t<li class=\"new\"><label title=\"";
            echo (isset($context["text_new_settings2"]) ? $context["text_new_settings2"] : null);
            echo "\" data-toggle=\"tooltip\"><input type=\"checkbox\" name=\"uni_set[adm_new_stick]\" value=\"1\" ";
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "adm_new_stick", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></li>
\t\t\t</ul>
\t\t\t<div class=\"tab-content tab-content-new col-sm-9 col-md-9 col-lg-9\">
\t\t\t\t<div id=\"tab-header\" class=\"tab-pane active\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-topmenu\" data-toggle=\"tab\">";
            // line 108
            echo (isset($context["header_topmenu"]) ? $context["header_topmenu"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-search1\" data-toggle=\"tab\">";
            // line 109
            echo (isset($context["tab_headsearch"]) ? $context["tab_headsearch"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-phone\" data-toggle=\"tab\">";
            // line 110
            echo (isset($context["header_phone"]) ? $context["header_phone"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-cart\" data-toggle=\"tab\">";
            // line 111
            echo (isset($context["header_cart"]) ? $context["header_cart"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-mainmenu\" data-toggle=\"tab\">";
            // line 112
            echo (isset($context["header_main_menu"]) ? $context["header_main_menu"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-additionalmenu\" data-toggle=\"tab\">";
            // line 113
            echo (isset($context["header_right_menu"]) ? $context["header_right_menu"] : null);
            echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div id=\"module\" class=\"tab-content\">
\t\t\t\t\t\t<div id=\"tab-topmenu\" class=\"tab-pane active\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 117
            echo (isset($context["entry_topmenu"]) ? $context["entry_topmenu"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 121
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#headerlinks-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 126
                echo "\t\t\t\t\t\t\t\t\t";
                $context["headerlinks_num"] = 1;
                // line 127
                echo "\t\t\t\t\t\t\t\t\t<div id=\"headerlinks-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t";
                // line 128
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "headerlinks", array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["headerlinks"]) {
                    // line 129
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                    // line 130
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "][headerlinks][";
                    echo (isset($context["headerlinks_num"]) ? $context["headerlinks_num"] : null);
                    echo "][title]\" value=\"";
                    echo $this->getAttribute($context["headerlinks"], "title", array());
                    echo "\" placeholder=\"Заголовок #";
                    echo (isset($context["headerlinks_num"]) ? $context["headerlinks_num"] : null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                    // line 131
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "][headerlinks][";
                    echo (isset($context["headerlinks_num"]) ? $context["headerlinks_num"] : null);
                    echo "][link]\" value=\"";
                    echo $this->getAttribute($context["headerlinks"], "link", array());
                    echo "\" placeholder=\"Ссылка #";
                    echo (isset($context["headerlinks_num"]) ? $context["headerlinks_num"] : null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn btn-default\" onclick=\"\$(this).parent().next().remove(); \$(this).parent().remove();\" title=\"";
                    // line 132
                    echo (isset($context["entry_delete"]) ? $context["entry_delete"] : null);
                    echo "\"><i class=\"fa fa-close\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"infolink\">
\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"\$(this).toggleClass('show');\">";
                    // line 135
                    echo (isset($context["text_article_links"]) ? $context["text_article_links"] : null);
                    echo " <i class=\"fa fa-caret-down\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 137
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                        // line 138
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"\$(this).parent().parent().prev().find('input:first').val('";
                        echo $this->getAttribute($context["information"], "name", array());
                        echo "'); \$(this).parent().parent().prev().find('input:last').val('";
                        echo (($this->getAttribute($this->getAttribute($context["information"], "seo_link", array()), $this->getAttribute($context["lang"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($context["information"], "seo_link", array()), $this->getAttribute($context["lang"], "language_id", array()), array(), "array")) : ($this->getAttribute($context["information"], "link", array())));
                        echo "');\">";
                        echo $this->getAttribute($context["information"], "name", array());
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 140
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 142
                    $context["headerlinks_num"] = ((isset($context["headerlinks_num"]) ? $context["headerlinks_num"] : null) + 1);
                    // line 143
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['headerlinks'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 144
                echo "\t\t\t\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t\t\t\t<div style=\"display:none\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 146
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                    // line 147
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"\$(this).parent().parent().prev().find('input:first').val('";
                    echo $this->getAttribute($context["information"], "name", array());
                    echo "'); \$(this).parent().parent().prev().find('input:last').val('";
                    echo (($this->getAttribute($this->getAttribute($context["information"], "seo_link", array()), $this->getAttribute($context["lang"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($context["information"], "seo_link", array()), $this->getAttribute($context["lang"], "language_id", array()), array(), "array")) : ($this->getAttribute($context["information"], "link", array())));
                    echo "');\">";
                    echo $this->getAttribute($context["information"], "name", array());
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 149
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a onclick=\"addHeaderLinks('";
                // line 150
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "', \$(this).prev().html());\" class=\"button btn btn-success\">Добавить новую ссылку</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            echo "\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 156
            echo (isset($context["entry_topmenu_color"]) ? $context["entry_topmenu_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[top_menu_bg]\" class=\"uni-color form-control\" value=\"";
            // line 158
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "top_menu_bg", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "top_menu_bg", array())) : ("f5f5f5"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[top_menu_color]\" class=\"uni-color form-control\" value=\"";
            // line 159
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "top_menu_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "top_menu_color", array())) : ("F6846A"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[top_menu_color_hover]\" class=\"uni-color form-control\" value=\"";
            // line 160
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "top_menu_color_hover", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "top_menu_color_hover", array())) : ("149dbc"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-search1\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 164
            echo (isset($context["entry_search_phone_change"]) ? $context["entry_search_phone_change"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[search_phone_change]\" value=\"1\" ";
            // line 165
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "search_phone_change", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 167
            echo (isset($context["entry_search_category"]) ? $context["entry_search_category"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[search][category]\" value=\"1\" ";
            // line 168
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "search", array()), "category", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 170
            echo (isset($context["entry_search_color"]) ? $context["entry_search_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[search_btn_bg]\" class=\"uni-color form-control\" value=\"";
            // line 172
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "search_btn_bg", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "search_btn_bg", array())) : ("f5f5f5"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[search_btn_color]\" class=\"uni-color form-control\" value=\"";
            // line 173
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "search_btn_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "search_btn_color", array())) : ("666666"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[search_input_color]\" class=\"uni-color form-control\" value=\"";
            // line 174
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "search_input_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "search_input_color", array())) : ("888888"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 177
            echo (isset($context["entry_search_phrase"]) ? $context["entry_search_phrase"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 180
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 181
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#search-phrase-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 185
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 186
                echo "\t\t\t\t\t\t\t\t\t<div id=\"search-phrase-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<textarea type=\"text\" name=\"uni_set[";
                // line 187
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][search_phrase]\" class=\"form-control\">";
                echo $this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "search_phrase", array());
                echo "</textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 193
            echo (isset($context["entry_search_mobile_hide"]) ? $context["entry_search_mobile_hide"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[search_mob_hide]\" value=\"1\" ";
            // line 194
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "search_mob_hide", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-phone\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 197
            echo (isset($context["entry_mainphone_color"]) ? $context["entry_mainphone_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[main_phone_color]\" class=\"uni-color form-control\" value=\"";
            // line 198
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_phone_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_phone_color", array())) : ("666666"));
            echo "\"></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 200
            echo (isset($context["entry_main_phone"]) ? $context["entry_main_phone"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 203
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 204
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#main-phones-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 206
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t";
            // line 207
            $context["types"] = array("tel:" => "Набор номера", "mailto:" => "Отправить e-mail", "?call" => "Skype звонок", "?chat" => "Skype чат", "viber://chat?number=" => "Viber (chat?number=)", "viber://pa?chatURI=" => "Viber (pa?chatURI=)", "viber://pa/info?uri=" => "Viber (pa/info?uri=)", "whatsapp://send?phone=" => "WhatsApp", "tg://resolve?domain=" => "Telegram");
            // line 217
            echo "\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 218
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 219
                echo "\t\t\t\t\t\t\t\t\t<div id=\"main-phones-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<table class=\"main-phone-";
                // line 220
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo " img-or-ico\">
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"main-phone-icon-";
                // line 221
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"img_or_ico(\$(this).parent().parent().attr('class'), 'img');\" class=\"";
                // line 223
                echo ((!twig_in_filter("fa-", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "main_phones", array()), 1, array(), "array"), "icon", array()))) ? ("selected") : (""));
                echo " img\">Картинка</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"img_or_ico(\$(this).parent().parent().attr('class'), 'ico');\" class=\"";
                // line 224
                echo ((twig_in_filter("fa-", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "main_phones", array()), 1, array(), "array"), "icon", array()))) ? ("selected") : (""));
                echo " ico\">Иконка</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"main-category-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image-";
                // line 226
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "-main-phone-icon-1\" data-toggle=\"image\" class=\"img-thumbnail img ";
                echo ((!twig_in_filter("fa-", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "main_phones", array()), 1, array(), "array"), "icon", array()))) ? ("selected") : (""));
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 227
                echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "main_phones", array()), 1, array(), "array"), "icon", array()) && !twig_in_filter("fa-", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "main_phones", array()), 1, array(), "array"), "icon", array())))) ? (("../image/" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "main_phones", array()), 1, array(), "array"), "icon", array()))) : ((isset($context["placeholder"]) ? $context["placeholder"] : null)));
                echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"";
                // line 229
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "-m-f-1\" onclick=\"popup_icons(\$(this).attr('id'))\" class=\"ico ";
                echo ((twig_in_filter("fa-", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "main_phones", array()), 1, array(), "array"), "icon", array()))) ? ("selected") : (""));
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"";
                // line 230
                echo ((twig_in_filter("fa-", $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "main_phones", array()), 1, array(), "array"), "icon", array()))) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "main_phones", array()), 1, array(), "array"), "icon", array())) : ("fa fa-plus-circle"));
                echo "\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"uni_set[";
                // line 232
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][main_phones][1][icon]\" value=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "main_phones", array()), 1, array(), "array"), "icon", array());
                echo "\" id=\"image-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "-main-phone-icon-1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 237
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][main_phones][1][text]\" value=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "main_phones", array()), 1, array(), "array"), "text", array());
                echo "\" placeholder=\"Имя #1\" class=\"form-control\" style=\"width:133.33px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 238
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][main_phones][1][number]\" value=\"";
                echo (isset($context["telephone"]) ? $context["telephone"] : null);
                echo "\" readonly=\"readonly\" placeholder=\"Телефон #1\" class=\"form-control\" style=\"width:133.33px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"uni_set[";
                // line 239
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][main_phones][1][type]\" class=\"form-control\" style=\"width:133.33px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"По клику:\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Ничего</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 242
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : null));
                foreach ($context['_seq'] as $context["key"] => $context["name"]) {
                    // line 243
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $context["key"];
                    echo "\" ";
                    echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "main_phones", array()), 1, array(), "array"), "type", array()) == $context["key"])) ? ("selected=\"selected\"") : (""));
                    echo ">";
                    echo $context["name"];
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 245
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 249
                $context["main_phones_num"] = 2;
                // line 250
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "main_phones", array()));
                foreach ($context['_seq'] as $context["key"] => $context["main_phone"]) {
                    // line 251
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if (($context["key"] > 1)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"main-phone-icon-";
                        // line 252
                        echo $this->getAttribute($context["lang"], "language_id", array());
                        echo "-";
                        echo (isset($context["main_phones_num"]) ? $context["main_phones_num"] : null);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"img_or_ico(\$(this).parent().parent().attr('class'), 'img');\" class=\"";
                        // line 254
                        echo ((!twig_in_filter("fa-", $this->getAttribute($context["main_phone"], "icon", array()))) ? ("selected") : (""));
                        echo " img\">Картинка</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"img_or_ico(\$(this).parent().parent().attr('class'), 'ico');\" class=\"";
                        // line 255
                        echo ((twig_in_filter("fa-", $this->getAttribute($context["main_phone"], "icon", array()))) ? ("selected") : (""));
                        echo " ico\">Иконка</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"main-category-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image-";
                        // line 257
                        echo $this->getAttribute($context["lang"], "language_id", array());
                        echo "-main-phone-icon-";
                        echo (isset($context["main_phones_num"]) ? $context["main_phones_num"] : null);
                        echo "\" data-toggle=\"image\" class=\"img-thumbnail img ";
                        echo ((!twig_in_filter("fa-", $this->getAttribute($context["main_phone"], "icon", array()))) ? ("selected") : (""));
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 258
                        echo ((($this->getAttribute($context["main_phone"], "icon", array()) && !twig_in_filter("fa-", $this->getAttribute($context["main_phone"], "icon", array())))) ? (("../image/" . $this->getAttribute($context["main_phone"], "icon", array()))) : ((isset($context["placeholder"]) ? $context["placeholder"] : null)));
                        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"";
                        // line 260
                        echo $this->getAttribute($context["lang"], "language_id", array());
                        echo "-m-f-";
                        echo (isset($context["main_phones_num"]) ? $context["main_phones_num"] : null);
                        echo "\" onclick=\"popup_icons(\$(this).attr('id'))\" class=\"ico ";
                        echo ((twig_in_filter("fa-", $this->getAttribute($context["main_phone"], "icon", array()))) ? ("selected") : (""));
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"";
                        // line 261
                        echo ((twig_in_filter("fa-", $this->getAttribute($context["main_phone"], "icon", array()))) ? ($this->getAttribute($context["main_phone"], "icon", array())) : ("fa fa-plus-circle"));
                        echo "\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"uni_set[";
                        // line 263
                        echo $this->getAttribute($context["lang"], "language_id", array());
                        echo "][main_phones][";
                        echo (isset($context["main_phones_num"]) ? $context["main_phones_num"] : null);
                        echo "][icon]\" value=\"";
                        echo $this->getAttribute($context["main_phone"], "icon", array());
                        echo "\" id=\"image-";
                        echo $this->getAttribute($context["lang"], "language_id", array());
                        echo "-main-phone-icon-";
                        echo (isset($context["main_phones_num"]) ? $context["main_phones_num"] : null);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                        // line 268
                        echo $this->getAttribute($context["lang"], "language_id", array());
                        echo "][main_phones][";
                        echo (isset($context["main_phones_num"]) ? $context["main_phones_num"] : null);
                        echo "][text]\" value=\"";
                        echo $this->getAttribute($context["main_phone"], "text", array());
                        echo "\" placeholder=\"Имя #";
                        echo (isset($context["main_phones_num"]) ? $context["main_phones_num"] : null);
                        echo "\" class=\"form-control\" style=\"width:133.33px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                        // line 269
                        echo $this->getAttribute($context["lang"], "language_id", array());
                        echo "][main_phones][";
                        echo (isset($context["main_phones_num"]) ? $context["main_phones_num"] : null);
                        echo "][number]\" value=\"";
                        echo $this->getAttribute($context["main_phone"], "number", array());
                        echo "\" placeholder=\"Телефон #";
                        echo (isset($context["main_phones_num"]) ? $context["main_phones_num"] : null);
                        echo "\" class=\"form-control\" style=\"width:133.33px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"uni_set[";
                        // line 270
                        echo $this->getAttribute($context["lang"], "language_id", array());
                        echo "][main_phones][";
                        echo (isset($context["main_phones_num"]) ? $context["main_phones_num"] : null);
                        echo "][type]\" class=\"form-control\" style=\"width:133.33px\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"По клику:\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Ничего</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 273
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : null));
                        foreach ($context['_seq'] as $context["key"] => $context["name"]) {
                            // line 274
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                            echo $context["key"];
                            echo "\" ";
                            echo ((($this->getAttribute($context["main_phone"], "type", array()) == $context["key"])) ? ("selected=\"selected\"") : (""));
                            echo ">";
                            echo $context["name"];
                            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 276
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"btn-delete btn-default\" onclick=\"\$(this).parent().parent().parent().remove()\" title=\"";
                        // line 277
                        echo (isset($context["entry_delete"]) ? $context["entry_delete"] : null);
                        echo "\"><i class=\"fa fa-close\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 281
                        $context["main_phones_num"] = ((isset($context["main_phones_num"]) ? $context["main_phones_num"] : null) + 1);
                        // line 282
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 283
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['main_phone'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 284
                echo "\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t\t\t\t<div style=\"display:none\">
\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"По клику:\" />
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Тип: ничего</option>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 289
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : null));
                foreach ($context['_seq'] as $context["key"] => $context["name"]) {
                    // line 290
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $context["key"];
                    echo "\">";
                    echo $context["name"];
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 292
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a onclick=\"addMainPhones(";
                // line 293
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo ", \$(this).prev().html());\" class=\"button btn btn-success\">Добавить</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 296
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 299
            echo (isset($context["entry_additional_phone"]) ? $context["entry_additional_phone"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 302
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 303
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#additional-contact-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 305
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 307
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 308
                echo "\t\t\t\t\t\t\t\t\t";
                $context["contacts_num"] = 1;
                // line 309
                echo "\t\t\t\t\t\t\t\t\t<div id=\"additional-contact-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\" style=\"heigh:300px;overflow:auto\">
\t\t\t\t\t\t\t\t\t\t<table class=\"additional-contacts-";
                // line 310
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo " img-or-ico\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 311
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "contacts", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                    // line 312
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"additional-contacts-icon-";
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "-";
                    echo (isset($context["contacts_num"]) ? $context["contacts_num"] : null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"img_or_ico(\$(this).parent().parent().attr('class'), 'img');\" class=\"";
                    // line 314
                    echo ((!twig_in_filter("fa-", $this->getAttribute($context["contact"], "icon", array()))) ? ("selected") : (""));
                    echo " img\">Картинка</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"img_or_ico(\$(this).parent().parent().attr('class'), 'ico');\" class=\"";
                    // line 315
                    echo ((twig_in_filter("fa-", $this->getAttribute($context["contact"], "icon", array()))) ? ("selected") : (""));
                    echo " ico\">Иконка</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"main-category-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image-";
                    // line 317
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "-contacts-icon-";
                    echo (isset($context["contacts_num"]) ? $context["contacts_num"] : null);
                    echo "\" data-toggle=\"image\" class=\"img-thumbnail img ";
                    echo ((!twig_in_filter("fa-", $this->getAttribute($context["contact"], "icon", array()))) ? ("selected") : (""));
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 318
                    echo ((($this->getAttribute($context["contact"], "icon", array()) && !twig_in_filter("fa-", $this->getAttribute($context["contact"], "icon", array())))) ? (("../image/" . $this->getAttribute($context["contact"], "icon", array()))) : ((isset($context["placeholder"]) ? $context["placeholder"] : null)));
                    echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                    echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"";
                    // line 320
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "-a-c-";
                    echo (isset($context["contacts_num"]) ? $context["contacts_num"] : null);
                    echo "\" onclick=\"popup_icons(\$(this).attr('id'))\" class=\"ico ";
                    echo ((twig_in_filter("fa-", $this->getAttribute($context["contact"], "icon", array()))) ? ("selected") : (""));
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"";
                    // line 321
                    echo ((twig_in_filter("fa-", $this->getAttribute($context["contact"], "icon", array()))) ? ($this->getAttribute($context["contact"], "icon", array())) : ("fa fa-plus-circle"));
                    echo "\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"uni_set[";
                    // line 323
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "][contacts][";
                    echo (isset($context["contacts_num"]) ? $context["contacts_num"] : null);
                    echo "][icon]\" value=\"";
                    echo $this->getAttribute($context["contact"], "icon", array());
                    echo "\" id=\"image-";
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "-contacts-icon-";
                    echo (isset($context["contacts_num"]) ? $context["contacts_num"] : null);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                    // line 328
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "][contacts][";
                    echo (isset($context["contacts_num"]) ? $context["contacts_num"] : null);
                    echo "][number]\" value=\"";
                    echo $this->getAttribute($context["contact"], "number", array());
                    echo "\" placeholder=\"Телефон #";
                    echo (isset($context["contacts_num"]) ? $context["contacts_num"] : null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"uni_set[";
                    // line 329
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "][contacts][";
                    echo (isset($context["contacts_num"]) ? $context["contacts_num"] : null);
                    echo "][type]\" class=\"form-control header-call\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"По клику:\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Ничего</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 332
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : null));
                    foreach ($context['_seq'] as $context["key"] => $context["name"]) {
                        // line 333
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo $context["key"];
                        echo "\" ";
                        echo ((($this->getAttribute($context["contact"], "type", array()) == $context["key"])) ? ("selected=\"selected\"") : (""));
                        echo ">";
                        echo $context["name"];
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 335
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn btn-default\" onclick=\"\$(this).parent().parent().parent().remove()\" title=\"";
                    // line 336
                    echo (isset($context["entry_delete"]) ? $context["entry_delete"] : null);
                    echo "\"><i class=\"fa fa-close\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 339
                    $context["contacts_num"] = ((isset($context["contacts_num"]) ? $context["contacts_num"] : null) + 1);
                    // line 340
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 342
                echo "\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t\t\t\t<div class=\"add-before\" style=\"display:none\">
\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"По клику:\" />
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Тип ссылки: ничего</option>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 347
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : null));
                foreach ($context['_seq'] as $context["key"] => $context["name"]) {
                    // line 348
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $context["key"];
                    echo "\">";
                    echo $context["name"];
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 350
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a onclick=\"addContacts(";
                // line 351
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo ", \$(this).prev().html());\" class=\"button btn btn-success\">Добавить</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 354
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 357
            echo (isset($context["entry_additional_phone_color"]) ? $context["entry_additional_phone_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[additional_phone_color]\" class=\"uni-color form-control\" value=\"";
            // line 358
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "additional_phone_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "additional_phone_color", array())) : ("666666"));
            echo "\"></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 360
            echo (isset($context["entry_text_block"]) ? $context["entry_text_block"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 363
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 364
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#text-in-add-contacts-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 366
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 368
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 369
                echo "\t\t\t\t\t\t\t\t\t<div id=\"text-in-add-contacts-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<textarea type=\"text\" name=\"uni_set[";
                // line 370
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][text_in_add_contacts]\" id=\"text_in_add_contacts_";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"form-control\">";
                echo $this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "text_in_add_contacts", array());
                echo "</textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 373
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 376
            echo (isset($context["entry_text_block_before"]) ? $context["entry_text_block_before"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[text_in_add_contacts_position]\" value=\"1\" ";
            // line 377
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "text_in_add_contacts_position", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-cart\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 380
            echo (isset($context["entry_cart_color"]) ? $context["entry_cart_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[cart_color]\" class=\"uni-color form-control\" value=\"";
            // line 382
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cart_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cart_color", array())) : ("149dbc"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[cart_bg_total]\" class=\"uni-color form-control\" value=\"";
            // line 383
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cart_bg_total", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cart_bg_total", array())) : ("F6846A"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[cart_color_total]\" class=\"uni-color form-control\" value=\"";
            // line 384
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cart_color_total", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cart_color_total", array())) : ("ffffff"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-mainmenu\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 388
            echo (isset($context["entry_main_menu_type"]) ? $context["entry_main_menu_type"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
            // line 390
            $context["types"] = array("1" => "Вертикальное", "2" => "Горизонтальное");
            // line 391
            echo "\t\t\t\t\t\t\t\t<select name=\"uni_set[menu_type]\" class=\"form-control\" >
\t\t\t\t\t\t\t\t";
            // line 392
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["name"]) {
                // line 393
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["key"];
                echo "\" ";
                echo ((($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "menu_type", array()) == $context["key"])) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo $context["name"];
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 395
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 398
            echo (isset($context["entry_main_menu"]) ? $context["entry_main_menu"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 401
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 402
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#main-menu-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 404
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t";
            // line 406
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 407
                echo "\t\t\t\t\t\t\t\t\t<div id=\"main-menu-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 408
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][text_menu]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "text_menu", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "text_menu", array())) : ("Категории"));
                echo "\"class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 411
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 414
            echo (isset($context["entry_main_menu_blur"]) ? $context["entry_main_menu_blur"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
            // line 416
            $context["blurs"] = array(0 => (isset($context["text_blur_off"]) ? $context["text_blur_off"] : null), 1 => (isset($context["text_blur_type_1"]) ? $context["text_blur_type_1"] : null), 2 => (isset($context["text_blur_type_2"]) ? $context["text_blur_type_2"] : null));
            // line 417
            echo "\t\t\t\t\t\t\t\t<select name=\"uni_set[main_menu_blur]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
            // line 418
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blurs"]) ? $context["blurs"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["blur"]) {
                // line 419
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["key"];
                echo "\" ";
                echo ((($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu_blur", array()) == $context["key"])) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo $context["blur"];
                echo "</option>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['blur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 421
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 424
            echo (isset($context["entry_main_menu_icon"]) ? $context["entry_main_menu_icon"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 427
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 428
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#main-menu-icon-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 430
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t";
            // line 432
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 433
                echo "\t\t\t\t\t\t\t\t\t\t<div id=\"main-menu-icon-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\" style=\"heigh:300px;overflow:auto\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"main-menu_";
                // line 434
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo " img-or-ico\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 435
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["categories2"]) ? $context["categories2"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 436
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context["icons"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "main_category_icons", array()), $this->getAttribute($context["category"], "category_id", array()), array(), "array");
                    // line 437
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"main-menu-icon-";
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "-";
                    echo $this->getAttribute($context["category"], "category_id", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"img_or_ico(\$(this).parent().parent().attr('class'), 'img');\" class=\"";
                    // line 439
                    echo ((!twig_in_filter("fa-", (isset($context["icons"]) ? $context["icons"] : null))) ? ("selected") : (""));
                    echo " img\">Картинка</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"img_or_ico(\$(this).parent().parent().attr('class'), 'ico');\" class=\"";
                    // line 440
                    echo ((twig_in_filter("fa-", (isset($context["icons"]) ? $context["icons"] : null))) ? ("selected") : (""));
                    echo " ico\">Иконка</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"main-category-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image-";
                    // line 442
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "-main-menu-icon-";
                    echo $this->getAttribute($context["category"], "category_id", array());
                    echo "\" data-toggle=\"image\" class=\"img-thumbnail img ";
                    echo ((!twig_in_filter("fa-", (isset($context["icons"]) ? $context["icons"] : null))) ? ("selected") : (""));
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 443
                    echo ((((isset($context["icons"]) ? $context["icons"] : null) && !twig_in_filter("fa-", (isset($context["icons"]) ? $context["icons"] : null)))) ? (("../image/" . (isset($context["icons"]) ? $context["icons"] : null))) : ((isset($context["placeholder"]) ? $context["placeholder"] : null)));
                    echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                    echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"m-c-icon-";
                    // line 445
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "-";
                    echo $this->getAttribute($context["category"], "category_id", array());
                    echo "\" onclick=\"popup_icons(\$(this).attr('id'))\" class=\"ico ";
                    echo ((twig_in_filter("fa-", (isset($context["icons"]) ? $context["icons"] : null))) ? ("selected") : (""));
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"";
                    // line 446
                    echo ((twig_in_filter("fa-", (isset($context["icons"]) ? $context["icons"] : null))) ? ((isset($context["icons"]) ? $context["icons"] : null)) : ("fa fa-plus-circle"));
                    echo "\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"uni_set[";
                    // line 448
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "][main_category_icons][";
                    echo $this->getAttribute($context["category"], "category_id", array());
                    echo "]\" value=\"";
                    echo (isset($context["icons"]) ? $context["icons"] : null);
                    echo "\" id=\"image-";
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "-main-menu-icon-";
                    echo $this->getAttribute($context["category"], "category_id", array());
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 451
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 454
                echo "\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 457
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 460
            echo (isset($context["entry_main_menu_links_disabled"]) ? $context["entry_main_menu_links_disabled"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[menu_links_disabled]\" value=\"1\" ";
            // line 461
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "menu_links_disabled", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 463
            echo (isset($context["entry_main_menu_link_show"]) ? $context["entry_main_menu_link_show"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[menu_links_show]\" value=\"1\" ";
            // line 464
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "menu_links_show", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 466
            echo (isset($context["entry_menu_3rd_level_limit"]) ? $context["entry_menu_3rd_level_limit"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[menu_3rd_level_limit]\" value=\"";
            // line 469
            echo (( !$this->getAttribute((isset($context["set"]) ? $context["set"] : null), "menu_3rd_level_limit", array(), "any", true, true)) ? (10) : ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "menu_3rd_level_limit", array())));
            echo "\" class=\"form-control\" style=\"width:50px;text-align:center\" />
\t\t\t\t\t\t\t\t\t<span>";
            // line 470
            echo (isset($context["text_item"]) ? $context["text_item"] : null);
            echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 474
            echo (isset($context["header_main_menu_type1"]) ? $context["header_main_menu_type1"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 476
            echo (isset($context["entry_main_menu_sec_lev_pos"]) ? $context["entry_main_menu_sec_lev_pos"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[main_menu_sec_lev_pos]\" value=\"1\" ";
            // line 477
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu_sec_lev_pos", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 479
            echo (isset($context["entry_main_menu_color"]) ? $context["entry_main_menu_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[main_menu_bg]\" class=\"uni-color form-control\" value=\"";
            // line 481
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu_bg", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu_bg", array())) : ("149dbc"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[main_menu_color]\" class=\"uni-color form-control\" value=\"";
            // line 482
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu_color", array())) : ("ffffff"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 485
            echo (isset($context["entry_main_menu_color1"]) ? $context["entry_main_menu_color1"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[main_menu_parent_bg]\" class=\"uni-color form-control\" value=\"";
            // line 487
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu_parent_bg", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu_parent_bg", array())) : ("f5f5f5"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[main_menu_parent_color]\" class=\"uni-color form-control\" value=\"";
            // line 488
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu_parent_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu_parent_color", array())) : ("777777"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 491
            echo (isset($context["entry_main_menu_color2"]) ? $context["entry_main_menu_color2"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[main_menu_parent_color_hover]\" class=\"uni-color form-control\" value=\"";
            // line 492
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu_parent_color_hover", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu_parent_color_hover", array())) : ("F6846A"));
            echo "\"></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 494
            echo (isset($context["entry_main_menu_color3"]) ? $context["entry_main_menu_color3"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[main_menu_children_bg]\" class=\"uni-color form-control\" value=\"";
            // line 496
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu_children_bg", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu_children_bg", array())) : ("ffffff"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 499
            echo (isset($context["entry_main_menu_color5"]) ? $context["entry_main_menu_color5"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[main_menu_children_color]\" class=\"uni-color form-control\" value=\"";
            // line 501
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu_children_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu_children_color", array())) : ("F6846A"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[main_menu_children_color_hover]\" class=\"uni-color form-control\" value=\"";
            // line 502
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu_children_color_hover", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu_children_color_hover", array())) : ("149dbc"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 505
            echo (isset($context["entry_main_menu_color6"]) ? $context["entry_main_menu_color6"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[main_menu_children_color2]\" class=\"uni-color form-control\" value=\"";
            // line 507
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu_children_color2", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu_children_color2", array())) : ("666666"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[main_menu_children_color2_hover]\" class=\"uni-color form-control\" value=\"";
            // line 508
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu_children_color2_hover", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu_children_color2_hover", array())) : ("888888"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 511
            echo (isset($context["entry_main_menu_open"]) ? $context["entry_main_menu_open"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
            // line 513
            $context["schemas"] = array("common/home" => "Главная", "product/category" => "Категория", "product/special" => "Акции", "product/search" => "Поиск", "product/manufacturer" => "Список производителей", "product/manufacturer/info" => "Список товаров производителя", "information/information" => "Статьи", "information/uni_news" => "Категория новостей", "information/uni_news_story" => "Страница новости", "product/uni_reviews" => "Страница отзывов", "product/gallery" => "Фотогалерея");
            // line 527
            echo "\t\t\t\t\t\t\t\t<div class=\"overflow\">
\t\t\t\t\t\t\t\t";
            // line 528
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["schemas"]) ? $context["schemas"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["name"]) {
                // line 529
                echo "\t\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"uni_set[menu_schema][]\" value=\"";
                echo $context["key"];
                echo "\" ";
                echo ((twig_in_filter($context["key"], $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "menu_schema", array()))) ? ("checked=\"checked\"") : (""));
                echo " /><span></span>";
                echo $context["name"];
                echo "</label><br />\t
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 531
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 534
            echo (isset($context["header_main_menu_type2"]) ? $context["header_main_menu_type2"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 536
            echo (isset($context["entry_main_menu_color4"]) ? $context["entry_main_menu_color4"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[main_menu2_bg]\" class=\"uni-color form-control\" value=\"";
            // line 538
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu2_bg", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu2_bg", array())) : ("149dbc"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[main_menu2_color]\" class=\"uni-color form-control\" value=\"";
            // line 539
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu2_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu2_color", array())) : ("ffffff"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 542
            echo (isset($context["entry_main_menu_color3"]) ? $context["entry_main_menu_color3"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[main_menu2_children_bg]\" class=\"uni-color form-control\" value=\"";
            // line 544
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu2_children_bg", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu2_children_bg", array())) : ("ffffff"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 547
            echo (isset($context["entry_main_menu_color5"]) ? $context["entry_main_menu_color5"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[main_menu2_children_color]\" class=\"uni-color form-control\" value=\"";
            // line 549
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu2_children_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu2_children_color", array())) : ("F6846A"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[main_menu2_children_color_hover]\" class=\"uni-color form-control\" value=\"";
            // line 550
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu2_children_color_hover", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu2_children_color_hover", array())) : ("149dbc"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 553
            echo (isset($context["entry_main_menu_color6"]) ? $context["entry_main_menu_color6"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[main_menu2_children_color2]\" class=\"uni-color form-control\" value=\"";
            // line 555
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu2_children_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu2_children_color2", array())) : ("666666"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[main_menu2_children_color2_hover]\" class=\"uni-color form-control\" value=\"";
            // line 556
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu2_children_color2_hover", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "main_menu2_children_color2_hover", array())) : ("888888"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-additionalmenu\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 560
            echo (isset($context["header_right_menu1"]) ? $context["header_right_menu1"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 562
            echo (isset($context["entry_right_menu_links"]) ? $context["entry_right_menu_links"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 565
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 566
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#headerlinks2-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 568
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t";
            // line 570
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 571
                echo "\t\t\t\t\t\t\t\t\t\t<div id=\"headerlinks2-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 572
                $context["h2_num"] = 1;
                // line 573
                echo "\t\t\t\t\t\t\t\t\t\t\t<table class=\"headerlinks2_";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo " img-or-ico header-links2\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 574
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "headerlinks2", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["headerlinks2"]) {
                    // line 575
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr class=\"headerlinks2-";
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "-";
                    echo (isset($context["h2_num"]) ? $context["h2_num"] : null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"img_or_ico(\$(this).parent().parent().attr('class'), 'img');\" class=\"";
                    // line 577
                    echo ((!twig_in_filter("fa-", $this->getAttribute($context["headerlinks2"], "icon", array()))) ? ("selected") : (""));
                    echo " img\">Картинка</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"img_or_ico(\$(this).parent().parent().attr('class'), 'ico');\" class=\"";
                    // line 578
                    echo ((twig_in_filter("fa-", $this->getAttribute($context["headerlinks2"], "icon", array()))) ? ("selected") : (""));
                    echo " ico\">Иконка</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"main-category-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image-";
                    // line 580
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "-headerlinks2-";
                    echo (isset($context["h2_num"]) ? $context["h2_num"] : null);
                    echo "\" data-toggle=\"image\" class=\"img-thumbnail img ";
                    echo ((!twig_in_filter("fa-", $this->getAttribute($context["headerlinks2"], "icon", array()))) ? ("selected") : (""));
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 581
                    echo ((($this->getAttribute($context["headerlinks2"], "icon", array()) && !twig_in_filter("fa-", $this->getAttribute($context["headerlinks2"], "icon", array())))) ? (("../image/" . $this->getAttribute($context["headerlinks2"], "icon", array()))) : ((isset($context["placeholder"]) ? $context["placeholder"] : null)));
                    echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                    echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 582
                    echo $this->getAttribute($context["headerlinks2"], "icon", array());
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a id=\"";
                    // line 584
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "-t-l-";
                    echo (isset($context["h2_num"]) ? $context["h2_num"] : null);
                    echo "\" onclick=\"popup_icons(\$(this).attr('id'))\" class=\"ico ";
                    echo ((twig_in_filter("fa-", $this->getAttribute($context["headerlinks2"], "icon", array()))) ? ("selected") : (""));
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"";
                    // line 585
                    echo ((twig_in_filter("fa-", $this->getAttribute($context["headerlinks2"], "icon", array()))) ? ($this->getAttribute($context["headerlinks2"], "icon", array())) : ("fa fa-plus-circle"));
                    echo "\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"uni_set[";
                    // line 587
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "][headerlinks2][";
                    echo (isset($context["h2_num"]) ? $context["h2_num"] : null);
                    echo "][icon]\" value=\"";
                    echo $this->getAttribute($context["headerlinks2"], "icon", array());
                    echo "\" id=\"image-";
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "-headerlinks2-";
                    echo (isset($context["h2_num"]) ? $context["h2_num"] : null);
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                    // line 592
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "][headerlinks2][";
                    echo (isset($context["h2_num"]) ? $context["h2_num"] : null);
                    echo "][title]\" value=\"";
                    echo $this->getAttribute($context["headerlinks2"], "title", array());
                    echo "\" placeholder=\"Заголовок #";
                    echo (isset($context["h2_num"]) ? $context["h2_num"] : null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                    // line 593
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "][headerlinks2][";
                    echo (isset($context["h2_num"]) ? $context["h2_num"] : null);
                    echo "][link]\" value=\"";
                    echo $this->getAttribute($context["headerlinks2"], "link", array());
                    echo "\" placeholder=\"Ссылка #";
                    echo (isset($context["h2_num"]) ? $context["h2_num"] : null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn btn-default\" onclick=\"\$(this).parent().parent().parent().remove();\" title=\"";
                    // line 594
                    echo (isset($context["entry_delete"]) ? $context["entry_delete"] : null);
                    echo "\"><i class=\"fa fa-close\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"infolink\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"\$(this).toggleClass('show');\">";
                    // line 597
                    echo (isset($context["text_article_links"]) ? $context["text_article_links"] : null);
                    echo " <i class=\"fa fa-caret-down\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 599
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                        // line 600
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"\$(this).parent().parent().prev().find('input:first').val('";
                        echo $this->getAttribute($context["information"], "name", array());
                        echo "'); \$(this).parent().parent().prev().find('input:last').val('";
                        echo (($this->getAttribute($this->getAttribute($context["information"], "seo_link", array()), $this->getAttribute($context["lang"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($context["information"], "seo_link", array()), $this->getAttribute($context["lang"], "language_id", array()), array(), "array")) : ($this->getAttribute($context["information"], "link", array())));
                        echo "');\">";
                        echo $this->getAttribute($context["information"], "name", array());
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 602
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 605
                    $context["h2sub_num"] = 1;
                    // line 606
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["headerlinks2"], "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["headerlinks2sub"]) {
                        // line 607
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"submenu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-level-up-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                        // line 610
                        echo $this->getAttribute($context["lang"], "language_id", array());
                        echo "][headerlinks2][";
                        echo (isset($context["h2_num"]) ? $context["h2_num"] : null);
                        echo "][children][";
                        echo (isset($context["h2sub_num"]) ? $context["h2sub_num"] : null);
                        echo "][name]\" value=\"";
                        echo $this->getAttribute($context["headerlinks2sub"], "name", array());
                        echo "\" placeholder=\"Заголовок #";
                        echo (isset($context["h2sub_num"]) ? $context["h2sub_num"] : null);
                        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                        // line 611
                        echo $this->getAttribute($context["lang"], "language_id", array());
                        echo "][headerlinks2][";
                        echo (isset($context["h2_num"]) ? $context["h2_num"] : null);
                        echo "][children][";
                        echo (isset($context["h2sub_num"]) ? $context["h2sub_num"] : null);
                        echo "][href]\" value=\"";
                        echo $this->getAttribute($context["headerlinks2sub"], "href", array());
                        echo "\" placeholder=\"Ссылка #";
                        echo (isset($context["h2sub_num"]) ? $context["h2sub_num"] : null);
                        echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn btn-default\" onclick=\"\$(this).parent().parent().remove();\" title=\"";
                        // line 612
                        echo (isset($context["entry_delete"]) ? $context["entry_delete"] : null);
                        echo "\"><i class=\"fa fa-close\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 615
                        $context["h2sub2_num"] = 1;
                        // line 616
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["headerlinks2sub"], "children", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["headerlinks2sub2"]) {
                            // line 617
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"submenu2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-level-up-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                            // line 620
                            echo $this->getAttribute($context["lang"], "language_id", array());
                            echo "][headerlinks2][";
                            echo (isset($context["h2_num"]) ? $context["h2_num"] : null);
                            echo "][children][";
                            echo (isset($context["h2sub_num"]) ? $context["h2sub_num"] : null);
                            echo "][children][";
                            echo (isset($context["h2sub2_num"]) ? $context["h2sub2_num"] : null);
                            echo "][name]\" value=\"";
                            echo $this->getAttribute($context["headerlinks2sub2"], "name", array());
                            echo "\" placeholder=\"Заголовок #";
                            echo (isset($context["h2sub2_num"]) ? $context["h2sub2_num"] : null);
                            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                            // line 621
                            echo $this->getAttribute($context["lang"], "language_id", array());
                            echo "][headerlinks2][";
                            echo (isset($context["h2_num"]) ? $context["h2_num"] : null);
                            echo "][children][";
                            echo (isset($context["h2sub_num"]) ? $context["h2sub_num"] : null);
                            echo "][children][";
                            echo (isset($context["h2sub2_num"]) ? $context["h2sub2_num"] : null);
                            echo "][href]\" value=\"";
                            echo $this->getAttribute($context["headerlinks2sub2"], "href", array());
                            echo "\" placeholder=\"Ссылка #";
                            echo (isset($context["h2sub2_num"]) ? $context["h2sub2_num"] : null);
                            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn btn-default\" onclick=\"\$(this).parent().parent().remove();\" title=\"";
                            // line 622
                            echo (isset($context["entry_delete"]) ? $context["entry_delete"] : null);
                            echo "\"><i class=\"fa fa-close\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 625
                            $context["h2sub2_num"] = ((isset($context["h2sub2_num"]) ? $context["h2sub2_num"] : null) + 1);
                            // line 626
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['headerlinks2sub2'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 627
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"addHeaderLinks2Sub2('";
                        echo $this->getAttribute($context["lang"], "language_id", array());
                        echo "', '";
                        echo (isset($context["h2_num"]) ? $context["h2_num"] : null);
                        echo "', '";
                        echo (isset($context["h2sub_num"]) ? $context["h2sub_num"] : null);
                        echo "', this);\" title=\"Добавить ссылку третьего уровня\" data-toggle=\"tooltip\" class=\"add-sub btn btn-info\"><i class=\"fa fa-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 629
                        $context["h2sub_num"] = ((isset($context["h2sub_num"]) ? $context["h2sub_num"] : null) + 1);
                        // line 630
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['headerlinks2sub'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 631
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"addHeaderLinks2Sub('";
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "', '";
                    echo (isset($context["h2_num"]) ? $context["h2_num"] : null);
                    echo "', this);\" title=\"Добавить ссылку второго уровня\" data-toggle=\"tooltip\" class=\"add-sub btn btn-success\"><i class=\"fa fa-plus\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sort\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 633
                    echo (isset($context["text_headerlinks2_sort"]) ? $context["text_headerlinks2_sort"] : null);
                    echo "<input type=\"text\" name=\"uni_set[";
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "][headerlinks2][";
                    echo (isset($context["h2_num"]) ? $context["h2_num"] : null);
                    echo "][sort_order]\" value=\"";
                    echo (($this->getAttribute($context["headerlinks2"], "sort_order", array())) ? ($this->getAttribute($context["headerlinks2"], "sort_order", array())) : (1));
                    echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 634
                    echo (isset($context["text_headerlinks2_column"]) ? $context["text_headerlinks2_column"] : null);
                    echo "<input type=\"text\" name=\"uni_set[";
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "][headerlinks2][";
                    echo (isset($context["h2_num"]) ? $context["h2_num"] : null);
                    echo "][column]\" value=\"";
                    echo (($this->getAttribute($context["headerlinks2"], "column", array())) ? ($this->getAttribute($context["headerlinks2"], "column", array())) : (1));
                    echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"show-in-cat\"><input type=\"checkbox\" name=\"uni_set[";
                    // line 636
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "][headerlinks2][";
                    echo (isset($context["h2_num"]) ? $context["h2_num"] : null);
                    echo "][show_in_cat]\" value=\"1\" ";
                    echo (($this->getAttribute($context["headerlinks2"], "show_in_cat", array())) ? ("checked=\"checked\"") : (""));
                    echo "><span></span>";
                    echo (isset($context["text_headerlinks2_incat"]) ? $context["text_headerlinks2_incat"] : null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 639
                    $context["h2_num"] = ((isset($context["h2_num"]) ? $context["h2_num"] : null) + 1);
                    // line 640
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['headerlinks2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 641
                echo "\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t<hr style=\"margin:10px 0\" />
\t\t\t\t\t\t\t\t\t\t\t<div style=\"display:none\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 644
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                    // line 645
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"\$(this).parent().parent().prev().find('input:first').val('";
                    echo $this->getAttribute($context["information"], "name", array());
                    echo "'); \$(this).parent().parent().prev().find('input:last').val('";
                    echo (($this->getAttribute($this->getAttribute($context["information"], "seo_link", array()), $this->getAttribute($context["lang"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($context["information"], "seo_link", array()), $this->getAttribute($context["lang"], "language_id", array()), array(), "array")) : ($this->getAttribute($context["information"], "link", array())));
                    echo "');\">";
                    echo $this->getAttribute($context["information"], "name", array());
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 647
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a onclick=\"addHeaderLinks2('";
                // line 648
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "', \$(this).prev().html());\" class=\"button btn btn-success\">Добавить новую ссылку</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 650
            if (( !array_key_exists("time_left", $context) || (isset($context["trial_empty"]) ? $context["trial_empty"] : null))) {
                $context["store_id"] = (777777 - 776778);
            }
            // line 651
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 654
            echo (isset($context["header_right_menu_color"]) ? $context["header_right_menu_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 656
            echo (isset($context["entry_right_menu_color"]) ? $context["entry_right_menu_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[right_menu][bg]\" class=\"uni-color form-control\" value=\"";
            // line 658
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "right_menu", array()), "bg", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "right_menu", array()), "bg", array())) : ("f5f5f5"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[right_menu][col]\" class=\"uni-color form-control\" value=\"";
            // line 659
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "right_menu", array()), "col", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "right_menu", array()), "col", array())) : ("F6846A"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[right_menu][col_hov]\" class=\"uni-color form-control\" value=\"";
            // line 660
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "right_menu", array()), "col_hov", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "right_menu", array()), "col_hov", array())) : ("149dbc"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 663
            echo (isset($context["entry_right_menu_color2"]) ? $context["entry_right_menu_color2"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[right_menu][child_bg]\" class=\"uni-color form-control\" value=\"";
            // line 665
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "right_menu", array()), "child_bg", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "right_menu", array()), "child_bg", array())) : ("ffffff"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 668
            echo (isset($context["entry_right_menu_color3"]) ? $context["entry_right_menu_color3"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[right_menu][child_col]\" class=\"uni-color form-control\" value=\"";
            // line 670
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "right_menu", array()), "child_col", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "right_menu", array()), "child_col", array())) : ("f6846a"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[right_menu][child_col_hov]\" class=\"uni-color form-control\" value=\"";
            // line 671
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "right_menu", array()), "child_col_hov", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "right_menu", array()), "child_col_hov", array())) : ("149dbc"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 674
            echo (isset($context["entry_right_menu_color4"]) ? $context["entry_right_menu_color4"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[right_menu][child2_col]\" class=\"uni-color form-control\" value=\"";
            // line 676
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "right_menu", array()), "child2_col", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "right_menu", array()), "child2_col", array())) : ("777777"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[right_menu][child2_col_hov]\" class=\"uni-color form-control\" value=\"";
            // line 677
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "right_menu", array()), "child2_col_hov", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "right_menu", array()), "child_col_hov", array())) : ("149dbc"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"tab-footer\" class=\"tab-pane\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-subscribe\" data-toggle=\"tab\">";
            // line 684
            echo (isset($context["tab_subscribe"]) ? $context["tab_subscribe"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-footerlinks\" data-toggle=\"tab\">";
            // line 685
            echo (isset($context["header_footerlinks"]) ? $context["header_footerlinks"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-footertext\" data-toggle=\"tab\">";
            // line 686
            echo (isset($context["header_footertext"]) ? $context["header_footertext"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-footericons\" data-toggle=\"tab\">";
            // line 687
            echo (isset($context["header_footericons"]) ? $context["header_footericons"] : null);
            echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div id=\"module\" class=\"tab-content\">
\t\t\t\t\t\t<div id=\"tab-subscribe\" class=\"tab-pane active\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 691
            echo (isset($context["entry_show_subscribe"]) ? $context["entry_show_subscribe"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_subscribe]\" value=\"1\" ";
            // line 692
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_subscribe", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 694
            echo (isset($context["entry_subscribe_attempt"]) ? $context["entry_subscribe_attempt"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[subscribe_attempt]\" value=\"";
            // line 697
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "subscribe_attempt", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "subscribe_attempt", array())) : (3));
            echo "\" style=\"width:50px !important; text-align:center;\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<span>";
            // line 698
            echo (isset($context["text_item"]) ? $context["text_item"] : null);
            echo "</span> 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 702
            echo (isset($context["entry_subscribe_points"]) ? $context["entry_subscribe_points"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[subscribe_points]\" value=\"";
            // line 705
            echo (( !$this->getAttribute((isset($context["set"]) ? $context["set"] : null), "subscribe_points", array(), "any", true, true)) ? (50) : ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "subscribe_points", array())));
            echo "\" style=\"width:50px !important; text-align:center;\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<span>";
            // line 706
            echo (isset($context["text_points"]) ? $context["text_points"] : null);
            echo "</span> 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 710
            echo (isset($context["entry_subscribe_text_color"]) ? $context["entry_subscribe_text_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[subscribe_points_color]\" class=\"uni-color form-control\" value=\"";
            // line 712
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "subscribe_points_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "subscribe_points_color", array())) : ("ffffff"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[subscribe_text_color]\" class=\"uni-color form-control\" value=\"";
            // line 713
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "subscribe_text_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "subscribe_text_color", array())) : ("eeeeee"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 716
            echo (isset($context["entry_subscribe_input_color"]) ? $context["entry_subscribe_input_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[subscribe_input_bg]\" class=\"uni-color form-control\" value=\"";
            // line 718
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "subscribe_input_bg", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "subscribe_input_bg", array())) : ("ffffff"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[subscribe_input_color]\" class=\"uni-color form-control\" value=\"";
            // line 719
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "subscribe_input_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "subscribe_input_color", array())) : ("666666"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 722
            echo (isset($context["entry_subscribe_button_color"]) ? $context["entry_subscribe_button_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[subscribe_button_bg]\" class=\"uni-color form-control\" value=\"";
            // line 724
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "subscribe_button_bg", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "subscribe_button_bg", array())) : ("eeeeee"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[subscribe_button_color]\" class=\"uni-color form-control\" value=\"";
            // line 725
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "subscribe_button_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "subscribe_button_color", array())) : ("777777"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\" style=\"font-weight:400;color:#777\">";
            // line 728
            echo (isset($context["header_subscribe"]) ? $context["header_subscribe"] : null);
            echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-footerlinks\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 731
            echo (isset($context["entry_footer_links_color"]) ? $context["entry_footer_links_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[footer_bg]\" class=\"uni-color form-control\" value=\"";
            // line 733
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "footer_bg", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "footer_bg", array())) : ("149dbc"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[footer_h5_color]\" class=\"uni-color form-control\" value=\"";
            // line 734
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "footer_h5_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "footer_h5_color", array())) : ("f5f5f5"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[footer_text_color]\" class=\"uni-color  form-control\" value=\"";
            // line 735
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "footer_text_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "footer_text_color", array())) : ("eeeeee"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 738
            echo (isset($context["entry_footer_column_heading"]) ? $context["entry_footer_column_heading"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 741
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 742
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#footer-column-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 744
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t";
            // line 746
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 747
                echo "\t\t\t\t\t\t\t\t\t\t<div id=\"footer-column-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t";
                // line 748
                $context["columns"] = array(1 => "Информация", 2 => "Служба поддержки", 3 => "Дополнительно", 4 => "Схема проезда");
                // line 749
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) ? $context["columns"] : null));
                foreach ($context['_seq'] as $context["key"] => $context["name"]) {
                    // line 750
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon open_icon\" id=\"_f_i_";
                    // line 751
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "_";
                    echo $context["key"];
                    echo "\" onclick=\"popup_icons(\$(this).attr('id'))\">Иконка: <i class=\"";
                    echo (( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array", false, true), "footer_column", array(), "any", false, true), $context["key"], array(), "array", false, true), "icon", array(), "any", true, true)) ? ("fa fa-chevron-right") : ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "footer_column", array()), $context["key"], array(), "array"), "icon", array())));
                    echo "\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"uni_set[";
                    // line 752
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "][footer_column][";
                    echo $context["key"];
                    echo "][icon]\" value=\"";
                    echo (( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array", false, true), "footer_column", array(), "any", false, true), $context["key"], array(), "array", false, true), "icon", array(), "any", true, true)) ? ("fa fa-chevron-right") : ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "footer_column", array()), $context["key"], array(), "array"), "icon", array())));
                    echo "\" class=\"form-control\" />\t
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                    // line 753
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "][footer_column][";
                    echo $context["key"];
                    echo "][heading]\" value=\"";
                    echo (( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array", false, true), "footer_column", array(), "any", false, true), $context["key"], array(), "array", false, true), "heading", array(), "any", true, true)) ? ($context["name"]) : ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "footer_column", array()), $context["key"], array(), "array"), "heading", array())));
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 756
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 758
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 761
            echo (isset($context["entry_footer_links"]) ? $context["entry_footer_links"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 764
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 765
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#footerlinks-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 767
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t";
            // line 769
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 770
                echo "\t\t\t\t\t\t\t\t\t\t<div id=\"footerlinks-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 771
                $context["footerlinks_num"] = 1;
                // line 772
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "footerlinks", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["footerlinks"]) {
                    // line 773
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                    // line 774
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "][footerlinks][";
                    echo (isset($context["footerlinks_num"]) ? $context["footerlinks_num"] : null);
                    echo "][title]\" value=\"";
                    echo $this->getAttribute($context["footerlinks"], "title", array());
                    echo "\" placeholder=\"Заголовок #";
                    echo (isset($context["footerlinks_num"]) ? $context["footerlinks_num"] : null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                    // line 775
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "][footerlinks][";
                    echo (isset($context["footerlinks_num"]) ? $context["footerlinks_num"] : null);
                    echo "][link]\" value=\"";
                    echo $this->getAttribute($context["footerlinks"], "link", array());
                    echo "\" placeholder=\"Ссылка #";
                    echo (isset($context["footerlinks_num"]) ? $context["footerlinks_num"] : null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"uni_set[";
                    // line 776
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "][footerlinks][";
                    echo (isset($context["footerlinks_num"]) ? $context["footerlinks_num"] : null);
                    echo "][column]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 777
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 4));
                    foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                        // line 778
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo $context["column"];
                        echo "\" ";
                        echo ((($this->getAttribute($context["footerlinks"], "column", array()) == $context["column"])) ? ("selected=\"selected\"") : (""));
                        echo ">Показывать в колонке #";
                        echo $context["column"];
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 780
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn btn-default\" onclick=\"\$(this).parent().remove()\" title=\"";
                    // line 781
                    echo (isset($context["entry_delete"]) ? $context["entry_delete"] : null);
                    echo "\"><i class=\"fa fa-close\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 783
                    $context["footerlinks_num"] = ((isset($context["footerlinks_num"]) ? $context["footerlinks_num"] : null) + 1);
                    // line 784
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['footerlinks'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 785
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"add-before\" style=\"display:none\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 786
                $context["columns"] = array(0 => 1, 1 => 2, 2 => 3, 3 => 4);
                // line 787
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) ? $context["columns"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 788
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $context["column"];
                    echo "\">Показывать в колонке #";
                    echo $context["column"];
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 790
                echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"addFooterLinks('";
                // line 791
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "', \$(this).prev().html());\" class=\"button btn btn-success\">Добавить</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 794
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 797
            echo (isset($context["entry_footer_address"]) ? $context["entry_footer_address"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"uni_set[footer_address]\" value=\"1\" ";
            // line 799
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "footer_address", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span>Адрес</label><br />
\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"uni_set[footer_work_time]\" value=\"1\" ";
            // line 800
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "footer_work_time", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span>Время работы</label><br />
\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"uni_set[footer_phone]\" value=\"1\" ";
            // line 801
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "footer_phone", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span>Телефон</label><br />
\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"uni_set[footer_mail]\" value=\"1\" ";
            // line 802
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "footer_mail", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span>E-mail</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-footertext\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 806
            echo (isset($context["entry_footer_text"]) ? $context["entry_footer_text"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 809
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 810
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#footer-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 812
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 814
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 815
                echo "\t\t\t\t\t\t\t\t\t<div id=\"footer-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<textarea type=\"text\" name=\"uni_set[";
                // line 816
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][footer_text]\" class=\"form-control\">";
                echo $this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "footer_text", array());
                echo "</textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 819
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-footericons\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 823
            echo (isset($context["entry_footer_socials"]) ? $context["entry_footer_socials"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
            // line 825
            $context["socials_num"] = 1;
            // line 826
            echo "\t\t\t\t\t\t\t\t";
            $context["names"] = array("fa-odnoklassniki" => "Одноклассники", "fa-vk" => "ВКонтакте", "fa-facebook" => "Facebook", "fa-twitter" => "Twitter", "fa-viber" => "Viber", "fa-whatsapp" => "WhatsApp", "fa-telegram-plane" => "Telegram", "fa-tiktok" => "TikTok", "fa-google-plus" => "Google+", "fa-instagram" => "Instagram", "fa-youtube" => "Youtube", "fa-pinterest" => "Pinterest");
            // line 838
            echo "\t\t\t\t\t\t\t\t<div class=\"socials-icon\">
\t\t\t\t\t\t\t\t\t";
            // line 839
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "socials", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["socials"]) {
                // line 840
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<select name=\"uni_set[socials][";
                // line 841
                echo (isset($context["socials_num"]) ? $context["socials_num"] : null);
                echo "][icon]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 842
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["names"]) ? $context["names"] : null));
                foreach ($context['_seq'] as $context["key"] => $context["name"]) {
                    // line 843
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo $context["key"];
                    echo "\" ";
                    echo ((($this->getAttribute($context["socials"], "icon", array()) == $context["key"])) ? ("selected=\"selected\"") : (""));
                    echo ">";
                    echo $context["name"];
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 845
                echo "\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[socials][";
                // line 846
                echo (isset($context["socials_num"]) ? $context["socials_num"] : null);
                echo "][link]\" value=\"";
                echo $this->getAttribute($context["socials"], "link", array());
                echo "\" placeholder=\"Ссылка\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn btn-default\" onclick=\"\$(this).parent().remove()\" title=\"";
                // line 847
                echo (isset($context["entry_delete"]) ? $context["entry_delete"] : null);
                echo "\"><i class=\"fa fa-close\"></i></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                // line 849
                $context["socials_num"] = ((isset($context["socials_num"]) ? $context["socials_num"] : null) + 1);
                // line 850
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['socials'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 851
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"add-before\" style=\"display:none\">
\t\t\t\t\t\t\t\t\t";
            // line 853
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["names"]) ? $context["names"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["name"]) {
                // line 854
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["key"];
                echo "\" ";
                echo ((($this->getAttribute((isset($context["socials"]) ? $context["socials"] : null), "icon", array()) == $context["key"])) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo $context["name"];
                echo "</option>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 856
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a onclick=\"addSocials(\$(this).prev().html());\" class=\"button btn btn-success\">Добавить</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 860
            echo (isset($context["entry_footer_payment"]) ? $context["entry_footer_payment"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
            // line 862
            $context["payments"] = array("visa" => "Visa", "master" => "Mastercard", "yandex" => "Yandex", "webmoney" => "Webmoney", "qiwi" => "Qiwi", "sberbank" => "Сбербанк", "cyberplat" => "Сyberplat", "alfa" => "Альфа Банк", "privat" => "Приват", "paypal" => "Paypal", "eport" => "Eport", "mailofrussia" => "Почта России", "rapida" => "Rapida", "contact" => "Contact", "vtb24" => "ВТБ24", "sms" => "SMS", "skrill" => "Skrill", "paypal" => "PayPal", "rbk" => "RBK", "western-union" => "WesternUnion");
            // line 864
            echo "\t\t\t\t\t\t\t\t<div class=\"overflow\">
\t\t\t\t\t\t\t\t";
            // line 865
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["payments"]) ? $context["payments"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["name"]) {
                // line 866
                echo "\t\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"uni_set[payment_icons][]\" value=\"";
                echo $context["key"];
                echo "\" ";
                echo ((twig_in_filter($context["key"], $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "payment_icons", array()))) ? ("checked=\"checked\"") : (""));
                echo " /><span></span>";
                echo $context["name"];
                echo "</label><br />
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 868
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 871
            echo (isset($context["entry_footer_payment2"]) ? $context["entry_footer_payment2"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
            // line 873
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 874
                echo "\t\t\t\t\t\t\t\t\t<div style=\"float:left;margin:0 10px 10px 0\">
\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image-payment-";
                // line 875
                echo $context["key"];
                echo "\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 876
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "payment_icons_custom", array()), $context["key"], array(), "array")) ? (("../image/" . $this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "payment_icons_custom", array()), $context["key"], array(), "array"))) : ((isset($context["placeholder"]) ? $context["placeholder"] : null)));
                echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
                echo "\" style=\"width:50px\" />
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"uni_set[payment_icons_custom][";
                // line 878
                echo $context["key"];
                echo "]\" value=\"";
                echo ((($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "payment_icons_custom", array()), $context["key"], array(), "array") != "")) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "payment_icons_custom", array()), $context["key"], array(), "array")) : (""));
                echo "\" id=\"image-payment-";
                echo $context["key"];
                echo "\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 881
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"tab-home\" class=\"tab-pane\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-defslideshow\" data-toggle=\"tab\">";
            // line 887
            echo (isset($context["tab_defslideshow"]) ? $context["tab_defslideshow"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-unislideshow\" data-toggle=\"tab\">";
            // line 888
            echo (isset($context["tab_unislideshow"]) ? $context["tab_unislideshow"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-homebanner\" data-toggle=\"tab\">";
            // line 889
            echo (isset($context["tab_homebanner"]) ? $context["tab_homebanner"] : null);
            echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div id=\"module\" class=\"tab-content\">
\t\t\t\t\t\t<div id=\"tab-defslideshow\" class=\"tab-pane active\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 893
            echo (isset($context["entry_slideshow_hide_lable"]) ? $context["entry_slideshow_hide_lable"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[hide_slideshow_title]\" value=\"1\" ";
            // line 894
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "hide_slideshow_title", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 896
            echo (isset($context["entry_slideshow_lable_color"]) ? $context["entry_slideshow_lable_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[slideshow_title_bg]\" class=\"uni-color form-control\" value=\"";
            // line 898
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "slideshow_title_bg", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "slideshow_title_bg", array())) : ("F6846A"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[slideshow_title_color]\" class=\"uni-color form-control\" value=\"";
            // line 899
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "slideshow_title_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "slideshow_title_color", array())) : ("ffffff"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 902
            echo (isset($context["entry_slideshow_nav_color"]) ? $context["entry_slideshow_nav_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[slideshow_pagination_bg]\" class=\"uni-color form-control\" value=\"";
            // line 904
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "slideshow_pagination_bg", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "slideshow_pagination_bg", array())) : ("149dbc"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[slideshow_pagination_bg_active]\" class=\"uni-color form-control\" value=\"";
            // line 905
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "slideshow_pagination_bg_active", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "slideshow_pagination_bg_active", array())) : ("F6846A"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-unislideshow\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 909
            echo (isset($context["entry_unislideshow_title_color"]) ? $context["entry_unislideshow_title_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[unislideshow_title_color]\" class=\"uni-color form-control\" value=\"";
            // line 911
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "unislideshow_title_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "unislideshow_title_color", array())) : ("F6846A"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 914
            echo (isset($context["entry_unislideshow_text_color"]) ? $context["entry_unislideshow_text_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[unislideshow_text_color]\" class=\"uni-color form-control\" value=\"";
            // line 916
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "unislideshow_text_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "unislideshow_text_color", array())) : ("666"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 919
            echo (isset($context["entry_unislideshow_button_color"]) ? $context["entry_unislideshow_button_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[unislideshow_button_bg]\" class=\"uni-color form-control\" value=\"";
            // line 921
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "unislideshow_button_bg", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "unislideshow_button_bg", array())) : ("F6846A"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[unislideshow_button_color]\" class=\"uni-color form-control\" value=\"";
            // line 922
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "unislideshow_button_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "unislideshow_button_color", array())) : ("ffffff"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 925
            echo (isset($context["entry_unislideshow_nav_color"]) ? $context["entry_unislideshow_nav_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[unislideshow_nav_bg]\" class=\"uni-color form-control\" value=\"";
            // line 927
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "unislideshow_nav_bg", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "unislideshow_nav_bg", array())) : ("cccccc"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[unislideshow_nav_bg_active]\" class=\"uni-color form-control\" value=\"";
            // line 928
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "unislideshow_nav_bg_active", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "unislideshow_nav_bg_active", array())) : ("149dbc"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-homebanner\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 932
            echo (isset($context["entry_homebanner_position"]) ? $context["entry_homebanner_position"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t";
            // line 935
            $context["positions"] = array("content_top" => "Верх страницы", "content_bottom" => "Низ страницы");
            // line 936
            echo "\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[home_banners_layout]\" value=\"";
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "home_banners_layout", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "home_banners_layout", array())) : (1));
            echo "\" class=\"form-control\" style=\"width:50px !important; text-align:center\" />
\t\t\t\t\t\t\t\t<select name=\"uni_set[home_banners_position]\" class=\"form-control\">
\t\t\t\t\t\t\t\t";
            // line 938
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["positions"]) ? $context["positions"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["name"]) {
                // line 939
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["key"];
                echo "\" ";
                echo ((($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "home_banners_position", array()) == $context["key"])) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo $context["name"];
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 941
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[home_banners_position_n]\" value=\"";
            // line 942
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "home_banners_position_n", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "home_banners_position_n", array())) : (0));
            echo "\" class=\"form-control\" style=\"width:50px !important; text-align:center;\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 946
            echo (isset($context["entry_home_text_banner"]) ? $context["entry_home_text_banner"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 949
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 950
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#home-banners-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 952
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t";
            // line 954
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 955
                echo "\t\t\t\t\t\t\t\t\t\t<div id=\"home-banners-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 956
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 4));
                foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                    // line 957
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon open_icon\" id=\"_";
                    // line 958
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "_h_b_";
                    echo $context["key"];
                    echo "\" onclick=\"popup_icons(\$(this).attr('id'))\">Иконка: <i class=\"";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "home_banners", array()), $context["key"], array(), "array"), "icon", array());
                    echo "\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"uni_set[";
                    // line 959
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "][home_banners][";
                    echo $context["key"];
                    echo "][icon]\" value=\"";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "home_banners", array()), $context["key"], array(), "array"), "icon", array());
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                    // line 960
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "][home_banners][";
                    echo $context["key"];
                    echo "][text]\" value=\"";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "home_banners", array()), $context["key"], array(), "array"), "text", array());
                    echo "\" placeholder=\"Первая строка текста баннера #";
                    echo $context["key"];
                    echo "\" class=\"form-control\" style=\"width:200px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                    // line 961
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "][home_banners][";
                    echo $context["key"];
                    echo "][text1]\" value=\"";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "home_banners", array()), $context["key"], array(), "array"), "text1", array());
                    echo "\" placeholder=\"Вторая строка текста баннера #";
                    echo $context["key"];
                    echo "\" class=\"form-control\" style=\"width:200px\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                    // line 962
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "][home_banners][";
                    echo $context["key"];
                    echo "][link]\" value=\"";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "home_banners", array()), $context["key"], array(), "array"), "link", array());
                    echo "\" placeholder=\"Ссылка с баннера #";
                    echo $context["key"];
                    echo "\" class=\"form-control\" style=\"width:200px\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"uni_set[";
                    // line 964
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "][home_banners][";
                    echo $context["key"];
                    echo "][link_popup]\" value=\"1\" ";
                    echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "home_banners", array()), $context["key"], array(), "array"), "link_popup", array())) ? ("checked=\"checked\"") : (""));
                    echo " /><span></span> открывать ссылку в popup окне?</label>
\t\t\t\t\t\t\t\t\t\t\t\t<label style=\"margin:5px 0 10px 20px\"><input type=\"checkbox\" name=\"uni_set[";
                    // line 965
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "][home_banners][";
                    echo $context["key"];
                    echo "][hide]\" value=\"1\" ";
                    echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "home_banners", array()), $context["key"], array(), "array"), "hide", array())) ? ("checked=\"checked\"") : (""));
                    echo " /><span></span> скрывать на маленьких экранах?</label>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 967
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 969
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 972
            echo (isset($context["entry_home_text_banner_color"]) ? $context["entry_home_text_banner_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[home_banners_bg]\" class=\"uni-color form-control\" value=\"";
            // line 974
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "home_banners_bg", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "home_banners_bg", array())) : ("f5f5f5"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[home_banners_icon_color]\" class=\"uni-color form-control\" value=\"";
            // line 975
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "home_banners_icon_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "home_banners_icon_color", array())) : ("F6846A"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[home_banners_text_color]\" class=\"uni-color form-control\" value=\"";
            // line 976
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "home_banners_text_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "home_banners_text_color", array())) : ("555555"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"tab-product\" class=\"tab-pane\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-productdefault\" data-toggle=\"tab\"><span title=\"";
            // line 983
            echo (isset($context["text_new_settings"]) ? $context["text_new_settings"] : null);
            echo "\" data-toggle=\"tooltip\">New</span>";
            echo (isset($context["tab_productdefault"]) ? $context["tab_productdefault"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-productbanner\" data-toggle=\"tab\">";
            // line 984
            echo (isset($context["tab_productbanner"]) ? $context["tab_productbanner"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-productrev\" data-toggle=\"tab\">";
            // line 985
            echo (isset($context["tab_productrev"]) ? $context["tab_productrev"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-productnews\" data-toggle=\"tab\">";
            // line 986
            echo (isset($context["tab_productnews"]) ? $context["tab_productnews"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-productmanuf\" data-toggle=\"tab\">";
            // line 987
            echo (isset($context["tab_productmanuf"]) ? $context["tab_productmanuf"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-productrel\" data-toggle=\"tab\">";
            // line 988
            echo (isset($context["tab_productrel"]) ? $context["tab_productrel"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-productadd\" data-toggle=\"tab\">";
            // line 989
            echo (isset($context["tab_productadd"]) ? $context["tab_productadd"] : null);
            echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div id=\"module\" class=\"tab-content\">
\t\t\t\t\t\t<div id=\"tab-productdefault\" class=\"tab-pane active\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 993
            echo (isset($context["header_product_img"]) ? $context["header_product_img"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 995
            echo (isset($context["entry_popup_img_effect_in"]) ? $context["entry_popup_img_effect_in"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select name=\"uni_set[popup_img_effect_in]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
            // line 998
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["effects_in"]) ? $context["effects_in"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["effect"]) {
                // line 999
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (twig_in_filter($context["effect"], (isset($context["group"]) ? $context["group"] : null))) {
                    // line 1000
                    echo "\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"";
                    echo $context["effect"];
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 1002
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option ";
                    echo ((($context["effect"] == $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "popup_img_effect_in", array()))) ? ("selected=\"selected\"") : (""));
                    echo " value=\"";
                    echo $context["effect"];
                    echo "\">";
                    echo $context["effect"];
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 1004
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['effect'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1005
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1008
            echo (isset($context["entry_popup_img_effect_out"]) ? $context["entry_popup_img_effect_out"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select name=\"uni_set[popup_img_effect_out]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
            // line 1011
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["effects_out"]) ? $context["effects_out"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["effect"]) {
                // line 1012
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (twig_in_filter($context["effect"], (isset($context["group"]) ? $context["group"] : null))) {
                    // line 1013
                    echo "\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"";
                    echo $context["effect"];
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 1015
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option ";
                    echo ((($context["effect"] == $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "popup_img_effect_out", array()))) ? ("selected=\"selected\"") : (""));
                    echo " value=\"";
                    echo $context["effect"];
                    echo "\">";
                    echo $context["effect"];
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 1017
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['effect'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1018
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1021
            echo (isset($context["entry_popup_img_blur"]) ? $context["entry_popup_img_blur"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[popup_img_blur]\" value=\"1\" ";
            // line 1022
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "popup_img_blur", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 1024
            echo (isset($context["header_product_data"]) ? $context["header_product_data"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1026
            echo (isset($context["entry_show_model"]) ? $context["entry_show_model"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_product_model]\" value=\"1\" ";
            // line 1027
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_product_model", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1029
            echo (isset($context["entry_show_manuf"]) ? $context["entry_show_manuf"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_product_manuf]\" value=\"1\" ";
            // line 1030
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_product_manuf", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1032
            echo (isset($context["entry_show_reward"]) ? $context["entry_show_reward"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select name=\"uni_set[show_product_reward]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t<option ";
            // line 1035
            echo ((($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_product_reward", array()) == 0)) ? ("selected=\"selected\"") : (""));
            echo " value=\"0\">";
            echo (isset($context["text_not_show"]) ? $context["text_not_show"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t<option ";
            // line 1036
            echo ((($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_product_reward", array()) == 1)) ? ("selected=\"selected\"") : (""));
            echo " value=\"1\">";
            echo (isset($context["text_reward1"]) ? $context["text_reward1"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t<option ";
            // line 1037
            echo ((($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_product_reward", array()) == 2)) ? ("selected=\"selected\"") : (""));
            echo " value=\"2\">";
            echo (isset($context["text_reward2"]) ? $context["text_reward2"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t<option ";
            // line 1038
            echo ((($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_product_reward", array()) == 3)) ? ("selected=\"selected\"") : (""));
            echo " value=\"3\">";
            echo (isset($context["text_reward3"]) ? $context["text_reward3"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1042
            echo (isset($context["entry_show_length"]) ? $context["entry_show_length"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select name=\"uni_set[show_product_length]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t<option ";
            // line 1045
            echo ((($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_product_length", array()) == 0)) ? ("selected=\"selected\"") : (""));
            echo " value=\"0\">";
            echo (isset($context["text_not_show"]) ? $context["text_not_show"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t<option ";
            // line 1046
            echo ((($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_product_length", array()) == 1)) ? ("selected=\"selected\"") : (""));
            echo " value=\"1\">";
            echo (isset($context["text_right_of"]) ? $context["text_right_of"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t<option ";
            // line 1047
            echo ((($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_product_length", array()) == 2)) ? ("selected=\"selected\"") : (""));
            echo " value=\"2\">";
            echo (isset($context["text_in_attr"]) ? $context["text_in_attr"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 1051
            echo (isset($context["header_product_option"]) ? $context["header_product_option"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1053
            echo (isset($context["entry_option_img_prop"]) ? $context["entry_option_img_prop"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[product][option_img_prop]\" value=\"1\" ";
            // line 1054
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "product", array()), "option_img_prop", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1056
            echo (isset($context["entry_popup_option_img_width"]) ? $context["entry_popup_option_img_width"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[options_popup_img_width_p]\" value=\"";
            // line 1059
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "options_popup_img_width_p", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "options_popup_img_width_p", array())) : (100));
            echo "\" style=\"width:50px !important; text-align:center;\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<span>";
            // line 1060
            echo (isset($context["text_pix"]) ? $context["text_pix"] : null);
            echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1064
            echo (isset($context["entry_product_option"]) ? $context["entry_product_option"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[change_opt_img_p]\" value=\"1\" ";
            // line 1065
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "change_opt_img_p", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 1067
            echo (isset($context["header_product_attr"]) ? $context["header_product_attr"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1069
            echo (isset($context["entry_show_attr"]) ? $context["entry_show_attr"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_product_attr]\" value=\"1\" ";
            // line 1070
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_product_attr", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1072
            echo (isset($context["entry_show_attr_group"]) ? $context["entry_show_attr_group"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[show_product_attr_group]\" value=\"";
            // line 1075
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_product_attr_group", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_product_attr_group", array())) : ("3"));
            echo "\" size=\"4\" style=\"width:50px !important; text-align:center;\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<span>";
            // line 1076
            echo (isset($context["text_item"]) ? $context["text_item"] : null);
            echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1080
            echo (isset($context["entry_show_attr_item"]) ? $context["entry_show_attr_item"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[show_product_attr_item]\" value=\"";
            // line 1083
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_product_attr_item", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_product_attr_item", array())) : ("2"));
            echo "\" size=\"2\" style=\"width:50px !important; text-align:center;\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<span>";
            // line 1084
            echo (isset($context["text_item"]) ? $context["text_item"] : null);
            echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-productbanner\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1089
            echo (isset($context["entry_product_banner_position"]) ? $context["entry_product_banner_position"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
            // line 1091
            $context["position"] = array(1 => (isset($context["text_product_banner_position_1"]) ? $context["text_product_banner_position_1"] : null), 2 => (isset($context["text_product_banner_position_2"]) ? $context["text_product_banner_position_2"] : null), 3 => (isset($context["text_product_banner_position_3"]) ? $context["text_product_banner_position_3"] : null));
            // line 1092
            echo "\t\t\t\t\t\t\t\t<select name=\"uni_set[product_banner_position]\" class=\"form-control\" >
\t\t\t\t\t\t\t\t";
            // line 1093
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["position"]) ? $context["position"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["name"]) {
                // line 1094
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["key"];
                echo "\" ";
                echo ((($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "product_banner_position", array()) == $context["key"])) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo $context["name"];
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1096
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1099
            echo (isset($context["entry_product_banner"]) ? $context["entry_product_banner"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 1102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1103
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#product-banners-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1105
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t";
            // line 1107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1108
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context["product_banner_num"] = 1;
                // line 1109
                echo "\t\t\t\t\t\t\t\t\t\t<div id=\"product-banners-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 1110
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "product_banners", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["product_banner"]) {
                    // line 1111
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon open_icon\" id=\"_";
                    // line 1113
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "_p_b_";
                    echo (isset($context["product_banner_num"]) ? $context["product_banner_num"] : null);
                    echo "\" onclick=\"popup_icons(\$(this).attr('id'))\">Иконка: <i class=\"";
                    echo $this->getAttribute($context["product_banner"], "icon", array());
                    echo "\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"uni_set[";
                    // line 1114
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "][product_banners][";
                    echo (isset($context["product_banner_num"]) ? $context["product_banner_num"] : null);
                    echo "][icon]\" value=\"";
                    echo (($this->getAttribute($context["product_banner"], "icon", array())) ? ($this->getAttribute($context["product_banner"], "icon", array())) : (""));
                    echo "\" placeholder=\"Иконка #";
                    echo (isset($context["product_banner_num"]) ? $context["product_banner_num"] : null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                    // line 1115
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "][product_banners][";
                    echo (isset($context["product_banner_num"]) ? $context["product_banner_num"] : null);
                    echo "][text]\" value=\"";
                    echo $this->getAttribute($context["product_banner"], "text", array());
                    echo "\" placeholder=\"Текст #";
                    echo (isset($context["product_banner_num"]) ? $context["product_banner_num"] : null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                    // line 1116
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "][product_banners][";
                    echo (isset($context["product_banner_num"]) ? $context["product_banner_num"] : null);
                    echo "][link]\" value=\"";
                    echo $this->getAttribute($context["product_banner"], "link", array());
                    echo "\" placeholder=\"Ссылка с баннера #";
                    echo (isset($context["product_banner_num"]) ? $context["product_banner_num"] : null);
                    echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn btn-default\" onclick=\"\$(this).parent().parent().remove();\" title=\"entry_delete\"><i class=\"fa fa-close\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"uni_set[";
                    // line 1119
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "][product_banners][";
                    echo (isset($context["product_banner_num"]) ? $context["product_banner_num"] : null);
                    echo "][link_popup]\" value=\"1\" ";
                    echo (($this->getAttribute($context["product_banner"], "link_popup", array())) ? ("checked=\"checked\"") : (""));
                    echo " /><span></span> открывать ссылку в popup окне?</label>
\t\t\t\t\t\t\t\t\t\t\t\t<label style=\"margin:5px 0 10px 20px\"><input type=\"checkbox\" name=\"uni_set[";
                    // line 1120
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "][product_banners][";
                    echo (isset($context["product_banner_num"]) ? $context["product_banner_num"] : null);
                    echo "][hide]\" value=\"1\" ";
                    echo (($this->getAttribute($context["product_banner"], "hide", array())) ? ("checked=\"checked\"") : (""));
                    echo "><span></span> скрывать на маленьких экранах?</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 1121
                    $context["product_banner_num"] = ((isset($context["product_banner_num"]) ? $context["product_banner_num"] : null) + 1);
                    // line 1122
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_banner'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1124
                echo "\t\t\t\t\t\t\t\t\t\t\t<hr style=\"margin-top:10px\" />
\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"addProductBanner('";
                // line 1125
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "');\" class=\"button btn btn-success\">Добавить</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1128
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1131
            echo (isset($context["entry_product_text_banner_color"]) ? $context["entry_product_text_banner_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[product_banners_bg]\" class=\"uni-color form-control\" value=\"";
            // line 1133
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "product_banners_bg", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "product_banners_bg", array())) : ("f5f5f5"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[product_banners_icon_color]\" class=\"uni-color form-control\" value=\"";
            // line 1134
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "product_banners_icon_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "product_banners_icon_color", array())) : ("F6846A"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[product_banners_text_color]\" class=\"uni-color form-control\" value=\"";
            // line 1135
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "product_banners_text_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "product_banners_text_color", array())) : ("555555"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-productrev\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 1139
            echo (isset($context["header_product_plus_minus"]) ? $context["header_product_plus_minus"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1141
            echo (isset($context["entry_product_plus_minus"]) ? $context["entry_product_plus_minus"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_plus_minus_review]\" value=\"1\" ";
            // line 1142
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_plus_minus_review", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1144
            echo (isset($context["entry_product_plus_minus_req"]) ? $context["entry_product_plus_minus_req"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[plus_minus_review_required]\" value=\"1\" ";
            // line 1145
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "plus_minus_review_required", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 1147
            echo (isset($context["header_add_tab"]) ? $context["header_add_tab"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1149
            echo (isset($context["entry_add_tab"]) ? $context["entry_add_tab"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_additional_tab]\" value=\"1\" ";
            // line 1150
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_additional_tab", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span><label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1152
            echo (isset($context["entry_add_tab_title"]) ? $context["entry_add_tab_title"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 1155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1156
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#additional-tab-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1158
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t";
            // line 1160
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1161
                echo "\t\t\t\t\t\t\t\t\t<div id=\"additional-tab-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon open_icon\" id=\"";
                // line 1163
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "_a_t\" onclick=\"popup_icons(\$(this).attr('id'))\">Иконка: <i class=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "additional_tab_icon", array());
                echo "\"></i></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"uni_set[";
                // line 1164
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][additional_tab_icon]\" value=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "additional_tab_icon", array());
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 1165
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][additional_tab_title]\" value=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "additional_tab_title", array());
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1169
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1172
            echo (isset($context["entry_add_tab_descr"]) ? $context["entry_add_tab_descr"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 1175
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1176
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#additional-tab-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1178
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t";
            // line 1180
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1181
                echo "\t\t\t\t\t\t\t\t\t\t<div id=\"additional-tab-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t\t<textarea type=\"text\" name=\"uni_set[";
                // line 1182
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][additional_tab_text]\" id=\"additional-tab-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-lang=\"ru-RU\" data-toggle=\"summernote\" class=\"form-control summernote\">";
                echo $this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "additional_tab_text", array());
                echo "</textarea>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1185
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-productnews\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\" style=\"color:#f00;\">";
            // line 1189
            echo (isset($context["header_product_news"]) ? $context["header_product_news"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1191
            echo (isset($context["entry_product_news"]) ? $context["entry_product_news"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_related_news]\" value=\"1\" ";
            // line 1192
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_related_news", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1194
            echo (isset($context["entry_product_news_title"]) ? $context["entry_product_news_title"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 1197
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1198
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#product-news-title-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1200
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 1202
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1203
                echo "\t\t\t\t\t\t\t\t\t<div id=\"product-news-title-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon open_icon\" id=\"p_n_b-";
                // line 1205
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" onclick=\"popup_icons(\$(this).attr('id'))\">Иконка: <i class=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "related_news_icon", array());
                echo "\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"uni_set[";
                // line 1206
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][related_news_icon]\" value=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "related_news_icon", array());
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 1207
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][related_news_title]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "related_news_title", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "related_news_title", array())) : ("Связанные новости"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1211
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1214
            echo (isset($context["entry_product_news_view"]) ? $context["entry_product_news_view"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[related_news_view]\" value=\"1\" ";
            // line 1215
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "related_news_view", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-productmanuf\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\" style=\"color:#f00;\">";
            // line 1218
            echo (isset($context["header_manuf_block_att"]) ? $context["header_manuf_block_att"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1220
            echo (isset($context["entry_manuf_block"]) ? $context["entry_manuf_block"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_manufacturer]\" value=\"1\" ";
            // line 1221
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_manufacturer", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1223
            echo (isset($context["entry_manuf_block_before"]) ? $context["entry_manuf_block_before"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[manufacturer_position]\" value=\"1\" ";
            // line 1224
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "manufacturer_position", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1226
            echo (isset($context["entry_manuf_block_title"]) ? $context["entry_manuf_block_title"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 1229
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1230
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#manufacturer-title-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1232
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 1234
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1235
                echo "\t\t\t\t\t\t\t\t\t<div id=\"manufacturer-title-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 1236
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][manufacturer_title]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "manufacturer_title", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "manufacturer_title", array())) : ("О производителе"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1239
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1242
            echo (isset($context["entry_manuf_block_logo"]) ? $context["entry_manuf_block_logo"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[manufacturer_logo_w]\" value=\"";
            // line 1245
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "manufacturer_logo_w", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "manufacturer_logo_w", array())) : ("100"));
            echo "\" style=\"width:50px !important; text-align:center;\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[manufacturer_logo_h]\" value=\"";
            // line 1246
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "manufacturer_logo_h", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "manufacturer_logo_h", array())) : ("100"));
            echo "\" style=\"width:50px !important; text-align:center;\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<span>пикс.</span> 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1251
            echo (isset($context["entry_manuf_block_descr"]) ? $context["entry_manuf_block_descr"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[manufacturer_text_length]\" value=\"";
            // line 1254
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "manufacturer_text_length", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "manufacturer_text_length", array())) : ("250"));
            echo "\" style=\"width:50px !important; text-align:center;\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<span>";
            // line 1255
            echo (isset($context["text_symbols"]) ? $context["text_symbols"] : null);
            echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-productrel\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1260
            echo (isset($context["entry_title_related"]) ? $context["entry_title_related"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 1263
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1264
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#related-title-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1266
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 1268
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1269
                echo "\t\t\t\t\t\t\t\t\t<div id=\"related-title-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 1270
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][related_title]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "related_title", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "related_title", array())) : ("Рекомендуем посмотреть"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1273
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1276
            echo (isset($context["entry_show_similar"]) ? $context["entry_show_similar"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[similar][show]\" value=\"1\" ";
            // line 1277
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "similar", array()), "show", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1279
            echo (isset($context["entry_title_similar"]) ? $context["entry_title_similar"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 1282
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1283
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#similar-title-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1285
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t";
            // line 1287
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1288
                echo "\t\t\t\t\t\t\t\t\t<div id=\"similar-title-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[similar][title][";
                // line 1289
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "]\" value=\"";
                echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "similar", array()), "title", array()), $this->getAttribute($context["lang"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "similar", array()), "title", array()), $this->getAttribute($context["lang"], "language_id", array()), array(), "array")) : ("Похожие товары"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1292
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1295
            echo (isset($context["entry_product_similar"]) ? $context["entry_product_similar"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[similar][limit]\" value=\"";
            // line 1298
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "similar", array()), "limit", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "similar", array()), "limit", array())) : (5));
            echo "\" style=\"width:50px !important; text-align:center;\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<span>";
            // line 1299
            echo (isset($context["text_item"]) ? $context["text_item"] : null);
            echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1303
            echo (isset($context["entry_product_similar_main_category"]) ? $context["entry_product_similar_main_category"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[similar][main_category]\" value=\"1\" ";
            // line 1304
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "similar", array()), "main_category", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1306
            echo (isset($context["entry_product_similar_hide"]) ? $context["entry_product_similar_hide"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[similar][stock]\" value=\"1\" ";
            // line 1307
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "similar", array()), "stock", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1309
            echo (isset($context["entry_product_similar_cache"]) ? $context["entry_product_similar_cache"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[similar][cache]\" value=\"1\" ";
            // line 1310
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "similar", array()), "cache", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-productadd\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\" style=\"color:#f00;\">";
            // line 1313
            echo (isset($context["header_product_input1"]) ? $context["header_product_input1"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1315
            echo (isset($context["entry_product_sku"]) ? $context["entry_product_sku"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 1318
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1319
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#sku-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1321
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 1323
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1324
                echo "\t\t\t\t\t\t\t\t\t<div id=\"sku-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 1325
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][sku_text]\" value=\"";
                echo (( !$this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array", false, true), "sku_text", array(), "any", true, true)) ? ("Артикул") : ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "sku_text", array())));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1328
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1331
            echo (isset($context["entry_product_upc"]) ? $context["entry_product_upc"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 1334
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1335
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#upc-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1337
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t";
            // line 1339
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1340
                echo "\t\t\t\t\t\t\t\t\t\t<div id=\"upc-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 1341
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][upc_text]\" value=\"";
                echo (( !$this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array", false, true), "upc_text", array(), "any", true, true)) ? ("UPC") : ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "upc_text", array())));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1343
            echo "\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1347
            echo (isset($context["entry_product_ean"]) ? $context["entry_product_ean"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 1350
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1351
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#ean-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1353
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t";
            // line 1355
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1356
                echo "\t\t\t\t\t\t\t\t\t<div id=\"ean-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 1357
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][ean_text]\" value=\"";
                echo (( !$this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array", false, true), "ean_text", array(), "any", true, true)) ? ("EAN") : ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "ean_text", array())));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1360
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1363
            echo (isset($context["entry_product_jan"]) ? $context["entry_product_jan"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 1366
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1367
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#jan-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1369
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 1371
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1372
                echo "\t\t\t\t\t\t\t\t\t<div id=\"jan-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 1373
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][jan_text]\" value=\"";
                echo (( !$this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array", false, true), "jan_text", array(), "any", true, true)) ? ("JAN") : ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "jan_text", array())));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1376
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1379
            echo (isset($context["entry_product_isbn"]) ? $context["entry_product_isbn"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 1382
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1383
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#isbn-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1385
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 1387
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1388
                echo "\t\t\t\t\t\t\t\t\t<div id=\"isbn-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 1389
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][isbn_text]\" value=\"";
                echo (( !$this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array", false, true), "isbn_text", array(), "any", true, true)) ? ("ISBN") : ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "isbn_text", array())));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1392
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1395
            echo (isset($context["entry_product_mpn"]) ? $context["entry_product_mpn"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 1398
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1399
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#mpn-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1401
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 1403
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1404
                echo "\t\t\t\t\t\t\t\t\t<div id=\"mpn-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 1405
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][mpn_text]\" value=\"";
                echo (( !$this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array", false, true), "mpn_text", array(), "any", true, true)) ? ("MPN") : ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "mpn_text", array())));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1408
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1411
            echo (isset($context["entry_product_location"]) ? $context["entry_product_location"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 1414
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1415
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#location-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1417
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 1419
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1420
                echo "\t\t\t\t\t\t\t\t\t<div id=\"location-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 1421
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][location_text]\" value=\"";
                echo (( !$this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array", false, true), "location_text", array(), "any", true, true)) ? ("Расположение") : ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "location_text", array())));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1424
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"tab-order\" class=\"tab-pane\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-quickorder\" data-toggle=\"tab\"><span title=\"";
            // line 1431
            echo (isset($context["text_new_settings"]) ? $context["text_new_settings"] : null);
            echo "\" data-toggle=\"tooltip\">New</span>";
            echo (isset($context["tab_quickorder2"]) ? $context["tab_quickorder2"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-quickorderinput\" data-toggle=\"tab\">";
            // line 1432
            echo (isset($context["tab_quickorder_input"]) ? $context["tab_quickorder_input"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-quickordermetric\" data-toggle=\"tab\">";
            // line 1433
            echo (isset($context["tab_quickorder_metric"]) ? $context["tab_quickorder_metric"] : null);
            echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div id=\"module\" class=\"tab-content\">
\t\t\t\t\t\t<div id=\"tab-quickorder\" class=\"tab-pane active\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1437
            echo (isset($context["entry_quickorder"]) ? $context["entry_quickorder"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_quick_order]\" value=\"1\" ";
            // line 1438
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_quick_order", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1440
            echo (isset($context["entry_checkout_min_summ"]) ? $context["entry_checkout_min_summ"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[quick_order][min_summ]\" value=\"";
            // line 1441
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quick_order", array()), "min_summ", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quick_order", array()), "min_summ", array())) : (0));
            echo "\" class=\"form-control\" style=\"max-width:100px\" /></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1443
            echo (isset($context["entry_quickorder_button"]) ? $context["entry_quickorder_button"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 1446
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1447
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#quick-order-icon-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1449
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 1451
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1452
                echo "\t\t\t\t\t\t\t\t\t<div id=\"quick-order-icon-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon open_icon\" id=\"q_o_i_";
                // line 1454
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" onclick=\"popup_icons(\$(this).attr('id'))\">Иконка: <i class=\"";
                echo (( !$this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array", false, true), "quick_order_icon", array(), "any", true, true)) ? ("far fa-paper-plane") : ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "quick_order_icon", array())));
                echo "\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"uni_set[";
                // line 1455
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][quick_order_icon]\" value=\"";
                echo (( !$this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array", false, true), "quick_order_icon", array(), "any", true, true)) ? ("far fa-paper-plane") : ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "quick_order_icon", array())));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 1456
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][quick_order_title]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "quick_order_title", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "quick_order_title", array())) : ("Быстрый заказ"));
                echo "\" placeholder=\"Текст подсказки\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1460
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1463
            echo (isset($context["entry_quickorder_color"]) ? $context["entry_quickorder_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[quick_order_btn_bg]\" class=\"uni-color form-control\" value=\"";
            // line 1465
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quick_order_btn_bg", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quick_order_btn_bg", array())) : ("e5e5e5"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[quick_order_btn_color]\" class=\"uni-color form-control\" value=\"";
            // line 1466
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quick_order_btn_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quick_order_btn_color", array())) : ("404040"));
            echo "\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1469
            echo (isset($context["entry_quickorder_color1"]) ? $context["entry_quickorder_color1"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[quick_order_btn_bg_hover]\" class=\"uni-color form-control\" value=\"";
            // line 1471
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quick_order_btn_bg_hover", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quick_order_btn_bg_hover", array())) : ("F6846A"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[quick_order_btn_color_hover]\" class=\"uni-color form-control\" value=\"";
            // line 1472
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quick_order_btn_color_hover", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quick_order_btn_color_hover", array())) : ("ffffff"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1475
            echo (isset($context["entry_quickorder_button_show"]) ? $context["entry_quickorder_button_show"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"uni_set[show_quick_order_always]\" value=\"1\" ";
            // line 1477
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_quick_order_always", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span>Всегда, а не только при наведении на блок товара</label>
\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"uni_set[show_quick_order_quantity]\" value=\"1\" ";
            // line 1479
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_quick_order_quantity", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span>Даже если количество товара < или = 0</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1482
            echo (isset($context["entry_quickorder_text_show"]) ? $context["entry_quickorder_text_show"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"uni_set[show_quick_order_text]\" value=\"1\" ";
            // line 1484
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_quick_order_text", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span>В категориях, модулях и т.д</label>
\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"uni_set[show_quick_order_text_product]\" value=\"1\" ";
            // line 1485
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_quick_order_text_product", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span>В карточке товара</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 1488
            echo (isset($context["header_product_data"]) ? $context["header_product_data"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1490
            echo (isset($context["entry_show_model"]) ? $context["entry_show_model"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_quick_order_model]\" value=\"1\" ";
            // line 1491
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_quick_order_model", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1493
            echo (isset($context["entry_show_manuf"]) ? $context["entry_show_manuf"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_quick_order_manuf]\" value=\"1\" ";
            // line 1494
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_quick_order_manuf", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1496
            echo (isset($context["entry_show_reward"]) ? $context["entry_show_reward"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select name=\"uni_set[show_quick_order_reward]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t<option ";
            // line 1499
            echo ((($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_product_reward", array()) == 0)) ? ("selected=\"selected\"") : (""));
            echo " value=\"0\">";
            echo (isset($context["text_not_show"]) ? $context["text_not_show"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t<option ";
            // line 1500
            echo ((($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_product_reward", array()) == 1)) ? ("selected=\"selected\"") : (""));
            echo " value=\"1\">";
            echo (isset($context["text_reward1"]) ? $context["text_reward1"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t<option ";
            // line 1501
            echo ((($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_product_reward", array()) == 2)) ? ("selected=\"selected\"") : (""));
            echo " value=\"2\">";
            echo (isset($context["text_reward2"]) ? $context["text_reward2"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t<option ";
            // line 1502
            echo ((($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_product_reward", array()) == 3)) ? ("selected=\"selected\"") : (""));
            echo " value=\"3\">";
            echo (isset($context["text_reward3"]) ? $context["text_reward3"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1506
            echo (isset($context["entry_show_length"]) ? $context["entry_show_length"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select name=\"uni_set[show_quick_order_length]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t<option ";
            // line 1509
            echo ((($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_product_length", array()) == 0)) ? ("selected=\"selected\"") : (""));
            echo " value=\"0\">";
            echo (isset($context["text_not_show"]) ? $context["text_not_show"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t<option ";
            // line 1510
            echo ((($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_product_length", array()) == 1)) ? ("selected=\"selected\"") : (""));
            echo " value=\"1\">";
            echo (isset($context["text_right_of"]) ? $context["text_right_of"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t<option ";
            // line 1511
            echo ((($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_product_length", array()) == 2)) ? ("selected=\"selected\"") : (""));
            echo " value=\"2\">";
            echo (isset($context["text_in_attr1"]) ? $context["text_in_attr1"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 1515
            echo (isset($context["header_product_attr"]) ? $context["header_product_attr"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1517
            echo (isset($context["entry_show_attr"]) ? $context["entry_show_attr"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[quick_order_attr]\" value=\"1\" ";
            // line 1518
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quick_order_attr", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1520
            echo (isset($context["entry_show_attr_group"]) ? $context["entry_show_attr_group"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[quick_order_attr_group]\" value=\"";
            // line 1523
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quick_order_attr_group", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quick_order_attr_group", array())) : ("3"));
            echo "\" style=\"width:50px !important; text-align:center;\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<span>";
            // line 1524
            echo (isset($context["text_item"]) ? $context["text_item"] : null);
            echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1528
            echo (isset($context["entry_show_attr_item"]) ? $context["entry_show_attr_item"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[quick_order_attr_item]\" value=\"";
            // line 1531
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quick_order_attr_item", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quick_order_attr_item", array())) : ("2"));
            echo "\" style=\"width:50px !important; text-align:center;\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<span>";
            // line 1532
            echo (isset($context["text_item"]) ? $context["text_item"] : null);
            echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 1536
            echo (isset($context["header_quick_order_description"]) ? $context["header_quick_order_description"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1538
            echo (isset($context["entry_quick_order_description"]) ? $context["entry_quick_order_description"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[quick_order_description]\" value=\"1\" ";
            // line 1539
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quick_order_description", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1541
            echo (isset($context["entry_quick_order_description_item"]) ? $context["entry_quick_order_description_item"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[quick_order_description_item]\" value=\"";
            // line 1544
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_quick_order_description_item", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quick_order_description_item", array())) : ("250"));
            echo "\" style=\"width:50px !important; text-align:center;\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<span>";
            // line 1545
            echo (isset($context["text_symbols"]) ? $context["text_symbols"] : null);
            echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 1549
            echo (isset($context["header_product_option"]) ? $context["header_product_option"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1551
            echo (isset($context["entry_option_img_prop"]) ? $context["entry_option_img_prop"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[quick_order][option_img_prop]\" value=\"1\" ";
            // line 1552
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quick_order", array()), "option_img_prop", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1554
            echo (isset($context["entry_popup_option_img_width"]) ? $context["entry_popup_option_img_width"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[options_popup_img_width_q]\" value=\"";
            // line 1557
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "options_popup_img_width_q", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "options_popup_img_width_q", array())) : (100));
            echo "\" style=\"width:50px !important; text-align:center;\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<span>";
            // line 1558
            echo (isset($context["text_pix"]) ? $context["text_pix"] : null);
            echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1562
            echo (isset($context["entry_quickorder_option"]) ? $context["entry_quickorder_option"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[change_opt_img_q]\" value=\"1\" ";
            // line 1563
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "change_opt_img_q", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-quickorderinput\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1566
            echo (isset($context["entry_quick_order_name_text"]) ? $context["entry_quick_order_name_text"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 1569
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1570
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#quick-order-name-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1572
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 1574
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1575
                echo "\t\t\t\t\t\t\t\t\t<div id=\"quick-order-name-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 1576
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][quick_order_name_text]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "quick_order_name_text", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "quick_order_name_text", array())) : ("Ваше имя"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1579
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1582
            echo (isset($context["entry_quick_order_phone_text"]) ? $context["entry_quick_order_phone_text"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 1585
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1586
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#quick-order-phone-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1588
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 1590
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1591
                echo "\t\t\t\t\t\t\t\t\t<div id=\"quick-order-phone-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 1592
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][quick_order_phone_text]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "quick_order_phone_text", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "quick_order_phone_text", array())) : ("Контактный телефон"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1595
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1598
            echo (isset($context["entry_quick_order_phone_mask"]) ? $context["entry_quick_order_phone_mask"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[quick_order_phone_mask]\" value=\"";
            // line 1599
            echo (( !$this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quick_order_phone_mask", array(), "any", true, true)) ? ("+7 (999) 999-99-99") : ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quick_order_phone_mask", array())));
            echo "\" class=\"form-control\" /></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1601
            echo (isset($context["entry_quick_order_mail"]) ? $context["entry_quick_order_mail"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[quick_order_mail]\" value=\"1\" ";
            // line 1602
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quick_order_mail", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1604
            echo (isset($context["entry_quick_order_mail_text"]) ? $context["entry_quick_order_mail_text"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 1607
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1608
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#quick-order-mail-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1610
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 1612
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1613
                echo "\t\t\t\t\t\t\t\t\t<div id=\"quick-order-mail-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 1614
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][quick_order_mail_text]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "quick_order_mail_text", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "quick_order_mail_text", array())) : ("Ваш e-mail"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1617
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1620
            echo (isset($context["entry_quickorder_mail_cap"]) ? $context["entry_quickorder_mail_cap"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[quick_order_mail_cap]\" value=\"";
            // line 1621
            echo (( !$this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quick_order_mail_cap", array(), "any", true, true)) ? ("mail@localhost.com") : ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quick_order_mail_cap", array())));
            echo "\" class=\"form-control\" /></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1623
            echo (isset($context["entry_quick_order_delivery"]) ? $context["entry_quick_order_delivery"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[quick_order_delivery]\" value=\"1\" ";
            // line 1624
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quick_order_delivery", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1626
            echo (isset($context["entry_quick_order_delivery_text"]) ? $context["entry_quick_order_delivery_text"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 1629
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1630
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#quick-order-delivery-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1632
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 1634
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1635
                echo "\t\t\t\t\t\t\t\t\t<div id=\"quick-order-delivery-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 1636
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][quick_order_delivery_text]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "quick_order_delivery_text", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "quick_order_delivery_text", array())) : ("Адрес доставки"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1639
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1642
            echo (isset($context["entry_quick_order_comment"]) ? $context["entry_quick_order_comment"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[quick_order_comment]\" value=\"1\" ";
            // line 1643
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quick_order_comment", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1645
            echo (isset($context["entry_quick_order_comment_text"]) ? $context["entry_quick_order_comment_text"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 1648
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1649
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#quick-order-comment-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1651
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 1653
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1654
                echo "\t\t\t\t\t\t\t\t\t<div id=\"quick-order-comment-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 1655
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][quick_order_comment_text]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "quick_order_comment_text", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "quick_order_comment_text", array())) : ("Комментарий"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1658
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1661
            echo (isset($context["entry_show_captcha"]) ? $context["entry_show_captcha"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[quick_order][captcha]\" value=\"1\" ";
            // line 1662
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quick_order", array()), "captcha", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1664
            echo (isset($context["entry_quick_order_confirm"]) ? $context["entry_quick_order_confirm"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[quick_order_confirm]\" value=\"1\" ";
            // line 1665
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quick_order_confirm", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-quickordermetric\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 1668
            echo (isset($context["header_metric"]) ? $context["header_metric"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1670
            echo (isset($context["entry_metric_id"]) ? $context["entry_metric_id"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[quick_order][metric_id]\" value=\"";
            // line 1671
            echo $this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quick_order", array()), "metric_id", array());
            echo "\" class=\"form-control\" /></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1673
            echo (isset($context["entry_metric_target_id"]) ? $context["entry_metric_target_id"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[quick_order][metric_target_id]\" value=\"";
            // line 1674
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quickorder_metric_id", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quickorder_metric_id", array())) : ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quick_order", array()), "metric_target_id", array())));
            echo "\" class=\"form-control\" /></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1676
            echo (isset($context["entry_metric_target"]) ? $context["entry_metric_target"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[quick_order][metric_target]\" value=\"";
            // line 1677
            echo $this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quick_order", array()), "metric_target", array());
            echo "\" class=\"form-control\" /></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 1679
            echo (isset($context["header_analityc_p"]) ? $context["header_analityc_p"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1681
            echo (isset($context["entry_analityc_category"]) ? $context["entry_analityc_category"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[quick_order][analytic_category]\" value=\"";
            // line 1682
            echo $this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quick_order", array()), "analytic_category", array());
            echo "\" class=\"form-control\" /></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1684
            echo (isset($context["entry_analityc_action"]) ? $context["entry_analityc_action"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[quick_order][analytic_action]\" value=\"";
            // line 1685
            echo $this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "quick_order", array()), "analytic_action", array());
            echo "\" class=\"form-control\" /></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\"><small style=\"font-weight:400;color:#444\">";
            // line 1687
            echo (isset($context["entry_metric_analytic_help"]) ? $context["entry_metric_analytic_help"] : null);
            echo "<br /><br />";
            echo (isset($context["entry_metric_analytic_dataLayer_purchase"]) ? $context["entry_metric_analytic_dataLayer_purchase"] : null);
            echo "</small></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"tab-callback\" class=\"tab-pane\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-callback2\" data-toggle=\"tab\">";
            // line 1693
            echo (isset($context["tab_callback2"]) ? $context["tab_callback2"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-callback3\" data-toggle=\"tab\">";
            // line 1694
            echo (isset($context["tab_callback3"]) ? $context["tab_callback3"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-callback4\" data-toggle=\"tab\">";
            // line 1695
            echo (isset($context["tab_callback4"]) ? $context["tab_callback4"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-callback5\" data-toggle=\"tab\">";
            // line 1696
            echo (isset($context["tab_callback5"]) ? $context["tab_callback5"] : null);
            echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div id=\"module\" class=\"tab-content\">
\t\t\t\t\t\t<div id=\"tab-callback2\" class=\"tab-pane active\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1700
            echo (isset($context["entry_show_callback"]) ? $context["entry_show_callback"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_callback]\" value=\"1\" ";
            // line 1701
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_callback", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span><label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1703
            echo (isset($context["entry_callback_flybutton"]) ? $context["entry_callback_flybutton"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_fly_callback]\" value=\"1\" ";
            // line 1704
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_fly_callback", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span><label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1706
            echo (isset($context["entry_callback_flybutton1"]) ? $context["entry_callback_flybutton1"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[hide_fly_callback]\" value=\"1\" ";
            // line 1707
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "hide_fly_callback", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span><label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1709
            echo (isset($context["entry_callback_title"]) ? $context["entry_callback_title"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 1712
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1713
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#fly-callback-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1715
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 1717
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1718
                echo "\t\t\t\t\t\t\t\t\t<div id=\"fly-callback-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 1719
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][fly_callback_text]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "fly_callback_text", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "fly_callback_text", array())) : ("Заказ звонка"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1722
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1725
            echo (isset($context["entry_callback_color"]) ? $context["entry_callback_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[fly_callback_bg]\" class=\"uni-color form-control\" value=\"";
            // line 1727
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "fly_callback_bg", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "fly_callback_bg", array())) : ("F6846A"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[fly_callback_color]\" class=\"uni-color form-control\" value=\"";
            // line 1728
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "fly_callback_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "fly_callback_color", array())) : ("ffffff"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1731
            echo (isset($context["entry_show_captcha"]) ? $context["entry_show_captcha"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[callback][captcha]\" value=\"1\" ";
            // line 1732
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "callback", array()), "captcha", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1734
            echo (isset($context["entry_callback_confirm"]) ? $context["entry_callback_confirm"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[callback_confirm]\" value=\"1\" ";
            // line 1735
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "callback_confirm", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-callback5\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 1738
            echo (isset($context["header_metric"]) ? $context["header_metric"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1740
            echo (isset($context["entry_metric_id"]) ? $context["entry_metric_id"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[callback_metric_id]\" value=\"";
            // line 1741
            echo $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "callback_metric_id", array());
            echo "\" class=\"form-control\" /></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1743
            echo (isset($context["entry_metric_target"]) ? $context["entry_metric_target"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[callback_metric_target]\" value=\"";
            // line 1744
            echo $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "callback_metric_target", array());
            echo "\" class=\"form-control\" /></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 1746
            echo (isset($context["header_analityc"]) ? $context["header_analityc"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1748
            echo (isset($context["entry_analityc_category"]) ? $context["entry_analityc_category"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[callback_analityc_category]\" value=\"";
            // line 1749
            echo $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "callback_analityc_category", array());
            echo "\" class=\"form-control\" /></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1751
            echo (isset($context["entry_analityc_action"]) ? $context["entry_analityc_action"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[callback_analityc_action]\" value=\"";
            // line 1752
            echo $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "callback_analityc_action", array());
            echo "\" class=\"form-control\" /></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\"><small style=\"font-weight:400;color:#444\">";
            // line 1754
            echo (isset($context["entry_metric_analytic_help"]) ? $context["entry_metric_analytic_help"] : null);
            echo "</small></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-callback3\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1757
            echo (isset($context["entry_callback_name"]) ? $context["entry_callback_name"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 1760
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1761
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#callback-name-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1763
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 1765
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1766
                echo "\t\t\t\t\t\t\t\t\t<div id=\"callback-name-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 1767
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][callback_name_text]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "callback_name_text", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "callback_name_text", array())) : ("Ваше имя"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1770
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1773
            echo (isset($context["entry_callback_phone"]) ? $context["entry_callback_phone"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 1776
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1777
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#callback-phone-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1779
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 1781
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1782
                echo "\t\t\t\t\t\t\t\t\t<div id=\"callback-phone-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 1783
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][callback_phone_text]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "callback_phone_text", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "callback_phone_text", array())) : ("Контактный телефон"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1786
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1789
            echo (isset($context["entry_callback_phone_mask"]) ? $context["entry_callback_phone_mask"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[callback_phone_mask]\" value=\"";
            // line 1790
            echo (( !$this->getAttribute((isset($context["set"]) ? $context["set"] : null), "callback_phone_mask", array(), "any", true, true)) ? ("+7 (999) 999-99-99") : ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "callback_phone_mask", array())));
            echo "\" class=\"form-control\" /></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1792
            echo (isset($context["entry_callback_mail"]) ? $context["entry_callback_mail"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 1795
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1796
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#callback-mail-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1798
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 1800
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1801
                echo "\t\t\t\t\t\t\t\t\t<div id=\"callback-mail-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 1802
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][callback_mail_text]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "callback_mail_text", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "callback_mail_text", array())) : ("Ваш e-mail"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1805
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1808
            echo (isset($context["entry_callback_comment"]) ? $context["entry_callback_comment"] : null);
            echo "</DIV>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 1811
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1812
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#callback-comment-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1814
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 1816
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1817
                echo "\t\t\t\t\t\t\t\t\t<div id=\"callback-comment-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 1818
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][callback_comment_text]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "callback_comment_text", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "callback_comment_text", array())) : ("Текст вопроса"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1821
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-callback4\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1825
            echo (isset($context["entry_show_reason1"]) ? $context["entry_show_reason1"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_reason1]\" value=\"1\" ";
            // line 1826
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_reason1", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1828
            echo (isset($context["entry_text_reason1"]) ? $context["entry_text_reason1"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 1831
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1832
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#text-reason1-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1834
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 1836
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1837
                echo "\t\t\t\t\t\t\t\t\t<div id=\"text-reason1-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 1838
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][text_reason1]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "text_reason1", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "text_reason1", array())) : ("Сделать заказ"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1841
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1844
            echo (isset($context["entry_show_reason2"]) ? $context["entry_show_reason2"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_reason2]\" value=\"1\" ";
            // line 1845
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_reason2", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1847
            echo (isset($context["entry_text_reason2"]) ? $context["entry_text_reason2"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 1850
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1851
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#text-reason2-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1853
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 1855
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1856
                echo "\t\t\t\t\t\t\t\t\t<div  id=\"text-reason2-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 1857
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][text_reason2]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "text_reason2", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "text_reason2", array())) : ("Отменить заказ"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1860
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1863
            echo (isset($context["entry_show_reason3"]) ? $context["entry_show_reason3"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_reason3]\" value=\"1\" ";
            // line 1864
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_reason3", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1866
            echo (isset($context["entry_text_reason3"]) ? $context["entry_text_reason3"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 1869
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1870
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#text-reason3-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1872
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 1874
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 1875
                echo "\t\t\t\t\t\t\t\t\t<div id=\"text-reason3-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 1876
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][text_reason3]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "text_reason3", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "text_reason3", array())) : ("Задать вопрос"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1879
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"tab-catalog\" class=\"tab-pane\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-catalog1\" data-toggle=\"tab\">";
            // line 1886
            echo (isset($context["tab_catalog1"]) ? $context["tab_catalog1"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-catalog2\" data-toggle=\"tab\">";
            // line 1887
            echo (isset($context["tab_catalog2"]) ? $context["tab_catalog2"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-catalog3\" data-toggle=\"tab\">";
            // line 1888
            echo (isset($context["tab_catalog3"]) ? $context["tab_catalog3"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-catalog4\" data-toggle=\"tab\"><span title=\"";
            // line 1889
            echo (isset($context["text_new_settings"]) ? $context["text_new_settings"] : null);
            echo "\" data-toggle=\"tooltip\">New</span>";
            echo (isset($context["tab_catalog4"]) ? $context["tab_catalog4"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-catalog5\" data-toggle=\"tab\">";
            // line 1890
            echo (isset($context["tab_catalog5"]) ? $context["tab_catalog5"] : null);
            echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div id=\"module\" class=\"tab-content\">
\t\t\t\t\t\t<div id=\"tab-catalog1\" class=\"tab-pane active\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1894
            echo (isset($context["entry_module_title"]) ? $context["entry_module_title"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_heading_in_admin]\" value=\"1\" ";
            // line 1895
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_heading_in_admin", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1897
            echo (isset($context["entry_module_view"]) ? $context["entry_module_view"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"overflow\">
\t\t\t\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t\t\t";
            // line 1901
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["module"]) {
                // line 1902
                echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td><label><input id=\"module-";
                // line 1903
                echo $context["key"];
                echo "\" type=\"checkbox\" name=\"uni_set[module_type_view][";
                echo $context["key"];
                echo "]\" value=\"";
                echo $this->getAttribute($context["module"], "name2", array());
                echo "\" ";
                echo ((twig_in_filter($this->getAttribute($context["module"], "name2", array()), $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "module_type_view", array()))) ? ("checked=\"checked\"") : (""));
                echo " /><span></span></label></td>
\t\t\t\t\t\t\t\t\t\t\t<td><label for=\"module-";
                // line 1904
                echo $context["key"];
                echo "\">";
                echo $this->getAttribute($context["module"], "name", array());
                echo "</label></td>  
\t\t\t\t\t\t\t\t\t\t\t<td>&nbsp;&nbsp;--&nbsp;&nbsp;";
                // line 1905
                echo $this->getAttribute($context["module"], "name2", array());
                echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1908
            echo "\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1912
            echo (isset($context["entry_module_type_view_mobile"]) ? $context["entry_module_type_view_mobile"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"uni_set[catalog][module_type_mobile]\" value=\"1\" ";
            // line 1914
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "catalog", array()), "module_type_mobile", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1917
            echo (isset($context["entry_mod_color"]) ? $context["entry_mod_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[h3_heading_color]\" class=\"uni-color form-control\" value=\"";
            // line 1918
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "h3_heading_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "h3_heading_color", array())) : ("333333"));
            echo "\"></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1920
            echo (isset($context["entry_carousel_nav_color"]) ? $context["entry_carousel_nav_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[carousel_pagination_bg]\" class=\"uni-color form-control\" value=\"";
            // line 1922
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "carousel_pagination_bg", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "carousel_pagination_bg", array())) : ("888888"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[carousel_pagination_bg_active]\" class=\"uni-color form-control\" value=\"";
            // line 1923
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "carousel_pagination_bg_active", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "carousel_pagination_bg_active", array())) : ("F6846A"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!--
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1927
            echo (isset($context["entry_module_items"]) ? $context["entry_module_items"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
            // line 1929
            $context["module_items"] = array(0 => array(0 => 1), 1 => array(520 => 2), 2 => array(700 => 3), 3 => array(940 => 4), 4 => array(1050 => 4), 5 => array(1400 => 5));
            // line 1930
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["module_items"]) ? $context["module_items"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["items"]) {
                // line 1931
                echo "\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t";
                // line 1932
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["items"]);
                foreach ($context['_seq'] as $context["key2"] => $context["item"]) {
                    // line 1933
                    echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[module_items][";
                    echo $context["key"];
                    echo "][key]\" class=\"form-control\" value=\"";
                    echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "module_items", array()), $context["key"], array(), "array"), "key", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "module_items", array()), $context["key"], array(), "array"), "key", array())) : ($context["key2"]));
                    echo "\" style=\"width:60px;text-align:center\" />
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[module_items][";
                    // line 1934
                    echo $context["key"];
                    echo "][item]\" class=\"form-control\" value=\"";
                    echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "module_items", array()), $context["key"], array(), "array"), "item", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "module_items", array()), $context["key"], array(), "array"), "item", array())) : ($context["item"]));
                    echo "\" style=\"width:60px;text-align:center\" />
\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key2'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1936
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div style=\"height:5px\"></div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1939
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t-->
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-catalog2\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1943
            echo (isset($context["entry_subcategory_view"]) ? $context["entry_subcategory_view"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
            // line 1945
            $context["columns"] = array(6 => 2, 4 => 3, 3 => 4, 2 => 6, 1 => 12);
            // line 1946
            echo "\t\t\t\t\t\t\t\t";
            $context["columnsFHD"] = array(5 => 4, 4 => 5, "3-1" => 6, "2-1" => 8, 2 => 10);
            // line 1947
            echo "\t\t\t\t\t\t\t\t<div style=\"float:left;margin:5px 5px 0 0\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">Десктоп FullHD:</span>
\t\t\t\t\t\t\t\t\t\t<select name=\"uni_set[subcategory_column][]\" class=\"form-control\" style=\"width:55px;\">
\t\t\t\t\t\t\t\t\t\t";
            // line 1951
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["columnsFHD"]) ? $context["columnsFHD"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 1952
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"col-xxl-";
                echo $context["key"];
                echo "\" ";
                echo ((twig_in_filter(("col-xxl-" . $context["key"]), $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "subcategory_column", array()))) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo $context["column"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1954
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"float:left;margin:5px 5px 0 0\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">Десктоп:</span>
\t\t\t\t\t\t\t\t\t\t<select name=\"uni_set[subcategory_column][]\" class=\"form-control\" style=\"width:55px;\">
\t\t\t\t\t\t\t\t\t\t";
            // line 1961
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) ? $context["columns"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 1962
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"col-lg-";
                echo $context["key"];
                echo "\" ";
                echo ((twig_in_filter(("col-lg-" . $context["key"]), $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "subcategory_column", array()))) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo $context["column"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1964
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"float:left;margin:5px 5px 0 0\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">Ноутбук:</span>
\t\t\t\t\t\t\t\t\t\t<select name=\"uni_set[subcategory_column][]\" class=\"form-control\" style=\"width:55px;\">
\t\t\t\t\t\t\t\t\t\t";
            // line 1971
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) ? $context["columns"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 1972
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"col-md-";
                echo $context["key"];
                echo "\" ";
                echo ((twig_in_filter(("col-md-" . $context["key"]), $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "subcategory_column", array()))) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo $context["column"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1974
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"float:left;margin:5px 5px 0 0\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">Планшет:</span>
\t\t\t\t\t\t\t\t\t\t<select name=\"uni_set[subcategory_column][]\" class=\"form-control\" style=\"width:55px;\">
\t\t\t\t\t\t\t\t\t\t";
            // line 1981
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) ? $context["columns"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 1982
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"col-sm-";
                echo $context["key"];
                echo "\" ";
                echo ((twig_in_filter(("col-sm-" . $context["key"]), $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "subcategory_column", array()))) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo $context["column"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1984
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"float:left;margin:5px 5px 0 0\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">Смартфон:</span>
\t\t\t\t\t\t\t\t\t\t<select name=\"uni_set[subcategory_column][]\" class=\"form-control\" style=\"width:55px;\">
\t\t\t\t\t\t\t\t\t\t";
            // line 1991
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) ? $context["columns"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 1992
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"col-xs-";
                echo $context["key"];
                echo "\" ";
                echo ((twig_in_filter(("col-xs-" . $context["key"]), $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "subcategory_column", array()))) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo $context["column"];
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1994
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 1999
            echo (isset($context["entry_subcategory_mobile_view"]) ? $context["entry_subcategory_mobile_view"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select name=\"uni_set[subcategory_mobile_view]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t<option value=\"default\" ";
            // line 2002
            echo ((($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "subcategory_mobile_view", array()) == "default")) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo (isset($context["text_subcategory_default"]) ? $context["text_subcategory_default"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"imghide\" ";
            // line 2003
            echo ((($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "subcategory_mobile_view", array()) == "imghide")) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo (isset($context["text_subcategory_imghide"]) ? $context["text_subcategory_imghide"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"select\" ";
            // line 2004
            echo ((($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "subcategory_mobile_view", array()) == "select")) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo (isset($context["text_subcategory_select"]) ? $context["text_subcategory_select"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2008
            echo (isset($context["entry_cat_desc"]) ? $context["entry_cat_desc"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
            // line 2010
            $context["positions"] = array("top" => "Перед списком товаров", "bottom" => "После списка товаров");
            // line 2011
            echo "\t\t\t\t\t\t\t\t<select name=\"uni_set[cat_desc_pos]\" class=\"form-control\">
\t\t\t\t\t\t\t\t";
            // line 2012
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["positions"]) ? $context["positions"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["name"]) {
                // line 2013
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["key"];
                echo "\" ";
                echo ((($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cat_desc_pos", array()) == $context["key"])) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo $context["name"];
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2015
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2018
            echo (isset($context["entry_button_view"]) ? $context["entry_button_view"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"uni_set[show_grid_button]\" value=\"1\" ";
            // line 2020
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_grid_button", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span>Сетка</label>
\t\t\t\t\t\t\t\t<!-- <label><input type=\"checkbox\" name=\"uni_set[show_grid2_button]\" value=\"1\" ";
            // line 2021
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_grid2_button", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span>Сетка2</label> -->
\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"uni_set[show_list_button]\" value=\"1\" ";
            // line 2022
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_list_button", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span>Список</label>
\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"uni_set[show_compact_button]\" value=\"1\" ";
            // line 2023
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_compact_button", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span>Компактный</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2026
            echo (isset($context["entry_default_view"]) ? $context["entry_default_view"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
            // line 2028
            $context["views"] = array("grid" => "Сетка", "list" => "Список", "compact" => "Компактный");
            // line 2029
            echo "\t\t\t\t\t\t\t\t<select name=\"uni_set[default_view]\" class=\"form-control\">
\t\t\t\t\t\t\t\t";
            // line 2030
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["views"]) ? $context["views"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["view"]) {
                // line 2031
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["key"];
                echo "\" ";
                echo ((($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "default_view", array()) && ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "default_view", array()) == $context["key"]))) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo $context["view"];
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['view'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2033
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2036
            echo (isset($context["entry_catalog_limit_status"]) ? $context["entry_catalog_limit_status"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"uni_set[catalog][limit][status]\" value=\"1\" ";
            // line 2038
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "catalog", array()), "limit", array()), "status", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2041
            echo (isset($context["entry_catalog_limit_value"]) ? $context["entry_catalog_limit_value"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[catalog][limit][value]\" value=\"";
            // line 2043
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "catalog", array()), "limit", array()), "value", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "catalog", array()), "limit", array()), "value", array())) : ("12,24,48,96"));
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2046
            echo (isset($context["entry_sort_qty"]) ? $context["entry_sort_qty"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
            // line 2048
            $context["sorts_qty"] = array("0" => (isset($context["text_sort_qty"]) ? $context["text_sort_qty"] : null), "1" => (isset($context["text_sort_qty_1"]) ? $context["text_sort_qty_1"] : null), "2" => (isset($context["text_sort_qty_2"]) ? $context["text_sort_qty_2"] : null));
            // line 2049
            echo "\t\t\t\t\t\t\t\t<select name=\"uni_set[sort_qty]\" class=\"form-control\">
\t\t\t\t\t\t\t\t";
            // line 2050
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sorts_qty"]) ? $context["sorts_qty"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["sort_qty"]) {
                // line 2051
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["key"];
                echo "\" ";
                echo ((($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sort_qty", array()) == $context["key"])) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo $context["sort_qty"];
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['sort_qty'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2053
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2056
            echo (isset($context["entry_button_showmore"]) ? $context["entry_button_showmore"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[button_showmore]\" value=\"1\" ";
            // line 2057
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "button_showmore", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2059
            echo (isset($context["entry_ajax_pagination"]) ? $context["entry_ajax_pagination"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[ajax_pagination]\" value=\"1\" ";
            // line 2060
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "ajax_pagination", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2062
            echo (isset($context["entry_ajax_filter"]) ? $context["entry_ajax_filter"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[ajax_filter]\" value=\"1\" ";
            // line 2063
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "ajax_filter", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-catalog3\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 2066
            echo (isset($context["header_prod_name"]) ? $context["header_prod_name"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2068
            echo (isset($context["entry_prod_items_on_mobile"]) ? $context["entry_prod_items_on_mobile"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[catalog][items_on_mobile]\" value=\"2\" ";
            // line 2069
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "catalog", array()), "items_on_mobile", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2071
            echo (isset($context["entry_prod_name_color"]) ? $context["entry_prod_name_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[product_thumb_h4_color]\" class=\"uni-color form-control\" value=\"";
            // line 2073
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "product_thumb_h4_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "product_thumb_h4_color", array())) : ("F6846A"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[product_thumb_h4_color_hover]\" class=\"uni-color form-control\" value=\"";
            // line 2074
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "product_thumb_h4_color_hover", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "product_thumb_h4_color_hover", array())) : ("149dbc"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2077
            echo (isset($context["entry_show_additional_image"]) ? $context["entry_show_additional_image"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[catalog][addit_img]\" value=\"1\" ";
            // line 2078
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "catalog", array()), "addit_img", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2080
            echo (isset($context["entry_product_block_descr"]) ? $context["entry_product_block_descr"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_description]\" value=\"1\" ";
            // line 2081
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_description", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2083
            echo (isset($context["entry_product_block_descr1"]) ? $context["entry_product_block_descr1"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_description_alt]\" value=\"1\" ";
            // line 2084
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_description_alt", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2086
            echo (isset($context["entry_product_block_descr2"]) ? $context["entry_product_block_descr2"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[catalog][description_hover]\" value=\"1\" ";
            // line 2087
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "catalog", array()), "description_hover", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-catalog4\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 2090
            echo (isset($context["header_product_block_attr"]) ? $context["header_product_block_attr"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2092
            echo (isset($context["entry_product_block_attr"]) ? $context["entry_product_block_attr"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_attr]\" value=\"1\" ";
            // line 2093
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_attr", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2095
            echo (isset($context["entry_product_block_attr_hover"]) ? $context["entry_product_block_attr_hover"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[catalog][attr_hover]\" value=\"1\" ";
            // line 2096
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "catalog", array()), "attr_hover", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2098
            echo (isset($context["entry_show_attr_group"]) ? $context["entry_show_attr_group"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[show_attr_group]\" value=\"";
            // line 2101
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_attr_group", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_attr_group", array())) : ("3"));
            echo "\" style=\"width:50px !important; text-align:center;\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<span>";
            // line 2102
            echo (isset($context["text_item"]) ? $context["text_item"] : null);
            echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2106
            echo (isset($context["entry_show_attr_item"]) ? $context["entry_show_attr_item"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[show_attr_item]\" value=\"";
            // line 2109
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_attr_item", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_attr_item", array())) : ("2"));
            echo "\" style=\"width:50px !important; text-align:center;\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<span>";
            // line 2110
            echo (isset($context["text_item"]) ? $context["text_item"] : null);
            echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2114
            echo (isset($context["entry_product_block_attr1"]) ? $context["entry_product_block_attr1"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_attr_name]\" value=\"1\" ";
            // line 2115
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_attr_name", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 2117
            echo (isset($context["header_product_block_option"]) ? $context["header_product_block_option"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2119
            echo (isset($context["entry_product_block_option"]) ? $context["entry_product_block_option"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_options]\" value=\"1\" ";
            // line 2120
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_options", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2122
            echo (isset($context["entry_product_block_option_hover"]) ? $context["entry_product_block_option_hover"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[catalog][option_hover]\" value=\"1\" ";
            // line 2123
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "catalog", array()), "option_hover", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2125
            echo (isset($context["entry_product_block_option2"]) ? $context["entry_product_block_option2"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[show_options_item]\" value=\"";
            // line 2128
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_options_item", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_options_item", array())) : ("3"));
            echo "\" style=\"width:50px !important; text-align:center;\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<span>";
            // line 2129
            echo (isset($context["text_item"]) ? $context["text_item"] : null);
            echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2133
            echo (isset($context["entry_option_img_prop"]) ? $context["entry_option_img_prop"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[catalog][option_img_prop]\" value=\"1\" ";
            // line 2134
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "catalog", array()), "option_img_prop", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2136
            echo (isset($context["entry_popup_option_img_width"]) ? $context["entry_popup_option_img_width"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[options_popup_img_width]\" value=\"";
            // line 2139
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "options_popup_img_width", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "options_popup_img_width", array())) : (100));
            echo "\" style=\"width:50px !important; text-align:center;\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<span>";
            // line 2140
            echo (isset($context["text_pix"]) ? $context["text_pix"] : null);
            echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2144
            echo (isset($context["entry_product_block_option3"]) ? $context["entry_product_block_option3"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[change_opt_img]\" value=\"1\" ";
            // line 2145
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "change_opt_img", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2147
            echo (isset($context["entry_option_color"]) ? $context["entry_option_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[options_bg]\" class=\"uni-color form-control\" value=\"";
            // line 2149
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "options_bg", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "options_bg", array())) : ("eeeeee"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[options_color]\" class=\"uni-color form-control\" value=\"";
            // line 2150
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "options_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "options_color", array())) : ("555"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2153
            echo (isset($context["entry_option_color2"]) ? $context["entry_option_color2"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[options_bg_active]\" class=\"uni-color form-control\" value=\"";
            // line 2155
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "options_bg_active", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "options_bg_active", array())) : ("F6846A"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[options_color_active]\" class=\"uni-color form-control\" value=\"";
            // line 2156
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "options_color_active", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "options_color_active", array())) : ("555"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-catalog5\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 2160
            echo (isset($context["header_product_block_rating"]) ? $context["header_product_block_rating"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2162
            echo (isset($context["entry_product_block_rating"]) ? $context["entry_product_block_rating"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_rating]\" value=\"1\" ";
            // line 2163
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_rating", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2165
            echo (isset($context["entry_product_block_rating1"]) ? $context["entry_product_block_rating1"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_rating_count]\" value=\"1\" ";
            // line 2166
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_rating_count", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2168
            echo (isset($context["entry_rating_color"]) ? $context["entry_rating_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[rating_star_color]\" class=\"uni-color form-control\" value=\"";
            // line 2169
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "rating_star_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "rating_star_color", array())) : ("F6846A"));
            echo "\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"tab-stock-status\" class=\"tab-pane\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-timer\" data-toggle=\"tab\">";
            // line 2175
            echo (isset($context["tab_timer"]) ? $context["tab_timer"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-indicator\" data-toggle=\"tab\">";
            // line 2176
            echo (isset($context["tab_indicator"]) ? $context["tab_indicator"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-quantity\" data-toggle=\"tab\"><span title=\"";
            // line 2177
            echo (isset($context["text_new_settings"]) ? $context["text_new_settings"] : null);
            echo "\" data-toggle=\"tooltip\">New</span>";
            echo (isset($context["tab_quantity"]) ? $context["tab_quantity"] : null);
            echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div id=\"module\" class=\"tab-content\">
\t\t\t\t\t\t<div id=\"tab-timer\" class=\"tab-pane active\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2181
            echo (isset($context["entry_show_special_timer"]) ? $context["entry_show_special_timer"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_special_timer]\" value=\"1\" ";
            // line 2182
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_special_timer", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2184
            echo (isset($context["entry_special_timer_color"]) ? $context["entry_special_timer_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[special_timer_bg]\" class=\"uni-color form-control\" value=\"";
            // line 2186
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "special_timer_bg", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "special_timer_bg", array())) : ("F7F7F7"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[special_timer_color]\" class=\"uni-color form-control\" value=\"";
            // line 2187
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "special_timer_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "special_timer_color", array())) : ("e66761"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[special_timer_text_color]\" class=\"uni-color form-control\" value=\"";
            // line 2188
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "special_timer_text_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "special_timer_text_color", array())) : ("777777"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-indicator\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2192
            echo (isset($context["entry_show_stock_indicator"]) ? $context["entry_show_stock_indicator"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
            // line 2194
            $context["indicators"] = array("0" => "Выключено", "1" => "Полоса наличия", "2" => "Текст");
            // line 2195
            echo "\t\t\t\t\t\t\t\t<select name=\"uni_set[show_stock_indicator]\" class=\"form-control\">
\t\t\t\t\t\t\t\t";
            // line 2196
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["indicators"]) ? $context["indicators"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["name"]) {
                // line 2197
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["key"];
                echo "\" ";
                echo ((($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_stock_indicator", array()) == $context["key"])) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo $context["name"];
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2199
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2202
            echo (isset($context["entry_stock_indicator_full"]) ? $context["entry_stock_indicator_full"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[stock_indicator_full]\" value=\"";
            // line 2205
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "stock_indicator_full", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "stock_indicator_full", array())) : ("100"));
            echo "\" style=\"width:50px !important; text-align:center;\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[stock_indicator_full_opt]\" value=\"";
            // line 2206
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "stock_indicator_full_opt", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "stock_indicator_full_opt", array())) : ("100"));
            echo "\" style=\"width:50px !important; text-align:center;\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<span>";
            // line 2207
            echo (isset($context["text_item"]) ? $context["text_item"] : null);
            echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2211
            echo (isset($context["entry_stock_indicator_color"]) ? $context["entry_stock_indicator_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[stock_i_c_0]\" class=\"uni-color form-control\" value=\"";
            // line 2213
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "stock_i_c_0", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "stock_i_c_0", array())) : ("f5f5f5"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[stock_i_c_1]\" class=\"uni-color form-control\" value=\"";
            // line 2214
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "stock_i_c_1", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "stock_i_c_1", array())) : ("F6846A"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[stock_i_c_2]\" class=\"uni-color form-control\" value=\"";
            // line 2215
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "stock_i_c_2", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "stock_i_c_2", array())) : ("F69E65"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[stock_i_c_3]\" class=\"uni-color form-control\" value=\"";
            // line 2216
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "stock_i_c_3", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "stock_i_c_3", array())) : ("78E026"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[stock_i_c_4]\" class=\"uni-color form-control\" value=\"";
            // line 2217
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "stock_i_c_4", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "stock_i_c_4", array())) : ("7CD14F"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[stock_i_c_5]\" class=\"uni-color form-control\" value=\"";
            // line 2218
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "stock_i_c_5", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "stock_i_c_5", array())) : ("6AB344"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2221
            echo (isset($context["entry_stock_indicator_text"]) ? $context["entry_stock_indicator_text"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 2224
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2225
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#stock-status-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2227
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 2229
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2230
                echo "\t\t\t\t\t\t\t\t\t<div id=\"stock-status-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 2231
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][stock_i_t_0]\" class=\"form-control text\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "stock_i_t_0", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "stock_i_t_0", array())) : ("Закончился"));
                echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 2232
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][stock_i_t_1]\" class=\"form-control text\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "stock_i_t_1", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "stock_i_t_1", array())) : ("Очень мало"));
                echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 2233
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][stock_i_t_2]\" class=\"form-control text\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "stock_i_t_2", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "stock_i_t_2", array())) : ("Мало"));
                echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 2234
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][stock_i_t_3]\" class=\"form-control text\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "stock_i_t_3", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "stock_i_t_3", array())) : ("Достаточно"));
                echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 2235
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][stock_i_t_4]\" class=\"form-control text\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "stock_i_t_4", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "stock_i_t_4", array())) : ("Много"));
                echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 2236
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][stock_i_t_5]\" class=\"form-control text\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "stock_i_t_5", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "stock_i_t_5", array())) : ("Очень много"));
                echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2239
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-quantity\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 2243
            echo (isset($context["header_block_quantity"]) ? $context["header_block_quantity"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2245
            echo (isset($context["entry_product_block_quantity"]) ? $context["entry_product_block_quantity"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[qty_switch][enabled]\" value=\"1\" ";
            // line 2246
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "qty_switch", array()), "enabled", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2248
            echo (isset($context["entry_product_block_quantity1"]) ? $context["entry_product_block_quantity1"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[qty_switch][enabled_all]\" value=\"1\" ";
            // line 2249
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "qty_switch", array()), "enabled_all", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2251
            echo (isset($context["entry_product_block_quantity2"]) ? $context["entry_product_block_quantity2"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[qty_switch][step]\" value=\"1\" ";
            // line 2252
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "qty_switch", array()), "step", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 2254
            echo (isset($context["header_liveprice"]) ? $context["header_liveprice"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2256
            echo (isset($context["entry_liveprice"]) ? $context["entry_liveprice"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[liveprice]\" value=\"1\" ";
            // line 2257
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "liveprice", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"tab-contacts\" class=\"tab-pane\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-contact1\" data-toggle=\"tab\">";
            // line 2263
            echo (isset($context["tab_contact1"]) ? $context["tab_contact1"] : null);
            echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div id=\"module\" class=\"tab-content\">
\t\t\t\t\t\t<div id=\"tab-contact1\" class=\"tab-pane active\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2267
            echo (isset($context["entry_contact_text"]) ? $context["entry_contact_text"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 2270
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2271
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#text-in-contacts-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2273
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 2275
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2276
                echo "\t\t\t\t\t\t\t\t\t<div id=\"text-in-contacts-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<textarea type=\"text\" name=\"uni_set[";
                // line 2277
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][text_in_contacts]\" id=\"text_in_contacts_";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"form-control\">";
                echo $this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "text_in_contacts", array());
                echo "</textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2280
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2283
            echo (isset($context["entry_maps"]) ? $context["entry_maps"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><textarea type=\"text\" name=\"uni_set[maps]\" class=\"form-control\">";
            // line 2284
            echo $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "maps", array());
            echo "</textarea></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"tab-sticker\" class=\"tab-pane\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-stiker1\" data-toggle=\"tab\">";
            // line 2290
            echo (isset($context["tab_sticker1"]) ? $context["tab_sticker1"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-stiker2\" data-toggle=\"tab\">";
            // line 2291
            echo (isset($context["tab_sticker2"]) ? $context["tab_sticker2"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-stiker3\" data-toggle=\"tab\">";
            // line 2292
            echo (isset($context["tab_sticker3"]) ? $context["tab_sticker3"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-stiker4\" data-toggle=\"tab\">";
            // line 2293
            echo (isset($context["tab_sticker4"]) ? $context["tab_sticker4"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-stiker5\" data-toggle=\"tab\">";
            // line 2294
            echo (isset($context["tab_sticker5"]) ? $context["tab_sticker5"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-stiker6\" data-toggle=\"tab\">";
            // line 2295
            echo (isset($context["tab_sticker6"]) ? $context["tab_sticker6"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-stiker7\" data-toggle=\"tab\">";
            // line 2296
            echo (isset($context["tab_sticker7"]) ? $context["tab_sticker7"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-stiker8\" data-toggle=\"tab\">";
            // line 2297
            echo (isset($context["tab_sticker8"]) ? $context["tab_sticker8"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-stiker9\" data-toggle=\"tab\">";
            // line 2298
            echo (isset($context["tab_sticker9"]) ? $context["tab_sticker9"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-stiker10\" data-toggle=\"tab\">";
            // line 2299
            echo (isset($context["tab_sticker10"]) ? $context["tab_sticker10"] : null);
            echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div id=\"module\" class=\"tab-content\">
\t\t\t\t\t\t<div id=\"tab-stiker1\" class=\"tab-pane active\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2303
            echo (isset($context["entry_show_sticker_special"]) ? $context["entry_show_sticker_special"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[sticker_special]\" value=\"1\" ";
            // line 2304
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sticker_special", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span><label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2306
            echo (isset($context["entry_sticker_spec"]) ? $context["entry_sticker_spec"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[sticker_special_percent]\" value=\"1\" ";
            // line 2307
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sticker_special_percent", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span><label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2309
            echo (isset($context["entry_sticker_spec_text"]) ? $context["entry_sticker_spec_text"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 2312
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2313
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#sticker-special-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2315
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 2317
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2318
                echo "\t\t\t\t\t\t\t\t\t<div id=\"sticker-special-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 2319
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][sticker_special_text]\" value=\"";
                echo (( !$this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array", false, true), "sticker_special_text", array(), "any", true, true)) ? ("Ваша скидка:") : ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "sticker_special_text", array())));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2322
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2325
            echo (isset($context["entry_sticker_spec_color"]) ? $context["entry_sticker_spec_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[sticker_special_background_color]\" class=\"uni-color form-control\" value=\"";
            // line 2327
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sticker_special_background_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sticker_special_background_color", array())) : ("F6846A"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[sticker_special_text_color]\" class=\"uni-color form-control\" value=\"";
            // line 2328
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sticker_special_text_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sticker_special_text_color", array())) : ("ffffff"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-stiker2\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2332
            echo (isset($context["entry_show_sticker_new"]) ? $context["entry_show_sticker_new"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[sticker_new]\" value=\"1\" ";
            // line 2333
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sticker_new", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2335
            echo (isset($context["entry_sticker_new_date"]) ? $context["entry_sticker_new_date"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[sticker_new_date]\" value=\"";
            // line 2338
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sticker_new_date", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sticker_new_date", array())) : ("30"));
            echo "\" style=\"width:70px !important; text-align:center;\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<span>дней</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2343
            echo (isset($context["entry_sticker_new_text"]) ? $context["entry_sticker_new_text"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 2346
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2347
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#sticker-latest-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2349
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t";
            // line 2351
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2352
                echo "\t\t\t\t\t\t\t\t\t<div id=\"sticker-latest-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 2353
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][sticker_new_text]\" value=\"";
                echo (( !$this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array", false, true), "sticker_new_text", array(), "any", true, true)) ? ("Новинка") : ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "sticker_new_text", array())));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2356
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2359
            echo (isset($context["entry_sticker_new_color"]) ? $context["entry_sticker_new_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[sticker_new_background_color]\" class=\"uni-color form-control\" value=\"";
            // line 2361
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sticker_new_background_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sticker_new_background_color", array())) : ("149dbc"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[sticker_new_text_color]\" class=\"uni-color form-control\" value=\"";
            // line 2362
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sticker_new_text_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sticker_new_text_color", array())) : ("FFFFFF"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-stiker3\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2366
            echo (isset($context["entry_show_sticker_bestseller"]) ? $context["entry_show_sticker_bestseller"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[sticker_bestseller]\" value=\"1\" ";
            // line 2367
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sticker_bestseller", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2369
            echo (isset($context["entry_sticker_bestseller_item"]) ? $context["entry_sticker_bestseller_item"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[sticker_bestseller_item]\" value=\"";
            // line 2372
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sticker_bestseller_item", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sticker_bestseller_item", array())) : ("5"));
            echo "\" style=\"width:70px !important; text-align:center;\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<span>продаж</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2377
            echo (isset($context["entry_sticker_bestseller_text"]) ? $context["entry_sticker_bestseller_text"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 2380
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2381
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#sticker-bestseller-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2383
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 2385
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2386
                echo "\t\t\t\t\t\t\t\t\t<div id=\"sticker-bestseller-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 2387
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][sticker_bestseller_text]\" value=\"";
                echo (( !$this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array", false, true), "sticker_bestseller_text", array(), "any", true, true)) ? ("Лидер продаж!") : ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "sticker_bestseller_text", array())));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2390
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2393
            echo (isset($context["entry_sticker_best_color"]) ? $context["entry_sticker_best_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[sticker_bestseller_background_color]\" class=\"uni-color form-control\" value=\"";
            // line 2395
            echo $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sticker_bestseller_background_color", array());
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[sticker_bestseller_text_color]\" class=\"uni-color form-control\" value=\"";
            // line 2396
            echo $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sticker_bestseller_text_color", array());
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-stiker4\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2400
            echo (isset($context["entry_sticker_rew"]) ? $context["entry_sticker_rew"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[sticker_reward]\" value=\"1\" ";
            // line 2401
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sticker_reward", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2403
            echo (isset($context["entry_sticker_rew_text"]) ? $context["entry_sticker_rew_text"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 2406
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2407
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#sticker-reward-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2409
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 2411
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2412
                echo "\t\t\t\t\t\t\t\t\t<div id=\"sticker-reward-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 2413
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][sticker_reward_text]\" value=\"";
                echo (( !$this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array", false, true), "sticker_reward_text", array(), "any", true, true)) ? ("В подарок:") : ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "sticker_reward_text", array())));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2415
            echo "\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2419
            echo (isset($context["entry_sticker_rew_text1"]) ? $context["entry_sticker_rew_text1"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 2422
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2423
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#sticker-reward1-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2425
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 2427
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2428
                echo "\t\t\t\t\t\t\t\t\t<div id=\"sticker-reward1-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 2429
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][sticker_reward_text_after]\" value=\"";
                echo (( !$this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array", false, true), "sticker_reward_text_after", array(), "any", true, true)) ? ("бонусов") : ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "sticker_reward_text_after", array())));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2432
            echo "\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2435
            echo (isset($context["entry_sticker_rew_color"]) ? $context["entry_sticker_rew_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[sticker_reward_background_color]\" class=\"uni-color form-control\" value=\"";
            // line 2437
            echo $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sticker_reward_background_color", array());
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[sticker_reward_text_color]\" class=\"uni-color form-control\" value=\"";
            // line 2438
            echo $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sticker_reward_text_color", array());
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-stiker5\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2442
            echo (isset($context["entry_sku_as_sticker"]) ? $context["entry_sku_as_sticker"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[sku_as_sticker]\" value=\"1\" ";
            // line 2443
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sku_as_sticker", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2445
            echo (isset($context["entry_additional_sticker_color"]) ? $context["entry_additional_sticker_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[sticker_sku_background_color]\" class=\"uni-color form-control\" value=\"";
            // line 2447
            echo $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sticker_sku_background_color", array());
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[sticker_sku_text_color]\" class=\"uni-color form-control\" value=\"";
            // line 2448
            echo $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sticker_sku_text_color", array());
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-stiker6\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2452
            echo (isset($context["entry_upc_as_sticker"]) ? $context["entry_upc_as_sticker"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[upc_as_sticker]\" value=\"1\" ";
            // line 2453
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "upc_as_sticker", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2455
            echo (isset($context["entry_additional_sticker_color"]) ? $context["entry_additional_sticker_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[sticker_upc_background_color]\" class=\"uni-color form-control\" value=\"";
            // line 2457
            echo $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sticker_upc_background_color", array());
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[sticker_upc_text_color]\" class=\"uni-color form-control\" value=\"";
            // line 2458
            echo $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sticker_upc_text_color", array());
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-stiker7\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2462
            echo (isset($context["entry_ean_as_sticker"]) ? $context["entry_ean_as_sticker"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[ean_as_sticker]\" value=\"1\" ";
            // line 2463
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "ean_as_sticker", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2465
            echo (isset($context["entry_additional_sticker_color"]) ? $context["entry_additional_sticker_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[sticker_ean_background_color]\" class=\"uni-color form-control\" value=\"";
            // line 2467
            echo $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sticker_ean_background_color", array());
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[sticker_ean_text_color]\" class=\"uni-color form-control\" value=\"";
            // line 2468
            echo $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sticker_ean_text_color", array());
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-stiker8\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2472
            echo (isset($context["entry_jan_as_sticker"]) ? $context["entry_jan_as_sticker"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[jan_as_sticker]\" value=\"1\" ";
            // line 2473
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "jan_as_sticker", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2475
            echo (isset($context["entry_additional_sticker_color"]) ? $context["entry_additional_sticker_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[sticker_jan_background_color]\" class=\"uni-color form-control\" value=\"";
            // line 2477
            echo $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sticker_jan_background_color", array());
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[sticker_jan_text_color]\" class=\"uni-color form-control\" value=\"";
            // line 2478
            echo $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sticker_jan_text_color", array());
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-stiker9\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2482
            echo (isset($context["entry_isbn_as_sticker"]) ? $context["entry_isbn_as_sticker"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[isbn_as_sticker]\" value=\"1\" ";
            // line 2483
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "isbn_as_sticker", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2485
            echo (isset($context["entry_additional_sticker_color"]) ? $context["entry_additional_sticker_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[sticker_isbn_background_color]\" class=\"uni-color form-control\" value=\"";
            // line 2487
            echo $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sticker_isbn_background_color", array());
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[sticker_isbn_text_color]\" class=\"uni-color form-control\" value=\"";
            // line 2488
            echo $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sticker_isbn_text_color", array());
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-stiker10\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2492
            echo (isset($context["entry_mpn_as_sticker"]) ? $context["entry_mpn_as_sticker"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[mpn_as_sticker]\" value=\"1\" ";
            // line 2493
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "mpn_as_sticker", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2495
            echo (isset($context["entry_additional_sticker_color"]) ? $context["entry_additional_sticker_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[sticker_mpn_background_color]\" class=\"uni-color form-control\" value=\"";
            // line 2497
            echo $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sticker_mpn_background_color", array());
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[sticker_mpn_text_color]\" class=\"uni-color form-control\" value=\"";
            // line 2498
            echo $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "sticker_mpn_text_color", array());
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"tab-login\" class=\"tab-pane\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-login1\" data-toggle=\"tab\">";
            // line 2505
            echo (isset($context["tab_login1"]) ? $context["tab_login1"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-register1\" data-toggle=\"tab\">";
            // line 2506
            echo (isset($context["tab_register1"]) ? $context["tab_register1"] : null);
            echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div id=\"module\" class=\"tab-content\">
\t\t\t\t\t\t<div id=\"tab-login1\" class=\"tab-pane active\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2510
            echo (isset($context["entry_popup_login"]) ? $context["entry_popup_login"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_login]\" value=\"1\" ";
            // line 2511
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_login", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2513
            echo (isset($context["entry_popup_login_mail"]) ? $context["entry_popup_login_mail"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 2516
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2517
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#login-mail-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2519
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 2521
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2522
                echo "\t\t\t\t\t\t\t\t\t<div id=\"login-mail-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 2523
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][login_mail_text]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "login_mail_text", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "login_mail_text", array())) : ("Ваш e-mail"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2525
            echo "\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2529
            echo (isset($context["entry_popup_login_pass"]) ? $context["entry_popup_login_pass"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 2532
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2533
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#login-password-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2535
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 2537
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2538
                echo "\t\t\t\t\t\t\t\t\t<div id=\"login-password-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 2539
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][login_password_text]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "login_password_text", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "login_password_text", array())) : ("Ваш пароль"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2542
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2545
            echo (isset($context["entry_popup_login_forg"]) ? $context["entry_popup_login_forg"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_login_forgotten]\" value=\"1\" ";
            // line 2546
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_login_forgotten", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2548
            echo (isset($context["entry_popup_login_reg"]) ? $context["entry_popup_login_reg"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_login_register]\" value=\"1\" ";
            // line 2549
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_login_register", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-register1\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2552
            echo (isset($context["entry_popup_reg"]) ? $context["entry_popup_reg"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_register]\" value=\"1\" ";
            // line 2553
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_register", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2555
            echo (isset($context["entry_popup_reg_name"]) ? $context["entry_popup_reg_name"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_name]\" value=\"1\" ";
            // line 2556
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_name", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2558
            echo (isset($context["entry_popup_reg_name_text"]) ? $context["entry_popup_reg_name_text"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 2561
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2562
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#register-name-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2564
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 2566
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2567
                echo "\t\t\t\t\t\t\t\t\t<div id=\"register-name-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 2568
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][register_name_text]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "register_name_text", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "register_name_text", array())) : ("Ваше имя"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2571
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2574
            echo (isset($context["entry_popup_reg_name1"]) ? $context["entry_popup_reg_name1"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_lastname]\" value=\"1\" ";
            // line 2575
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_lastname", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2577
            echo (isset($context["entry_popup_reg_name1_text"]) ? $context["entry_popup_reg_name1_text"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 2580
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2581
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#register-lastname-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2583
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 2585
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2586
                echo "\t\t\t\t\t\t\t\t\t<div id=\"register-lastname-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 2587
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][register_lastname_text]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "register_lastname_text", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "register_lastname_text", array())) : ("Ваша фамилия"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2590
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2593
            echo (isset($context["entry_popup_reg_mail_text"]) ? $context["entry_popup_reg_mail_text"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 2596
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2597
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#register-mail-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2599
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 2601
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2602
                echo "\t\t\t\t\t\t\t\t\t<div id=\"register-mail-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 2603
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][register_mail_text]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "register_mail_text", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "register_mail_text", array())) : ("Ваш e-mail"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2606
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2609
            echo (isset($context["entry_popup_reg_phone"]) ? $context["entry_popup_reg_phone"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_phone]\" value=\"1\" ";
            // line 2610
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_phone", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2612
            echo (isset($context["entry_popup_reg_phone_text"]) ? $context["entry_popup_reg_phone_text"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 2615
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2616
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#register-phone-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2618
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 2620
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2621
                echo "\t\t\t\t\t\t\t\t\t<div id=\"register-phone-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 2622
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][register_phone_text]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "register_phone_text", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "register_phone_text", array())) : ("Контактный номер телефона"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2625
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2628
            echo (isset($context["entry_popup_reg_phone_mask"]) ? $context["entry_popup_reg_phone_mask"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[register_phone_mask]\" value=\"";
            // line 2629
            echo (( !$this->getAttribute((isset($context["set"]) ? $context["set"] : null), "register_phone_mask", array(), "any", true, true)) ? ("+7 (999) 999-99-99") : ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "register_phone_mask", array())));
            echo "\" class=\"form-control\" /></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2631
            echo (isset($context["entry_popup_reg_pass_text"]) ? $context["entry_popup_reg_pass_text"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 2634
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2635
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#register-password-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2637
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 2639
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2640
                echo "\t\t\t\t\t\t\t\t\t<div id=\"register-password-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 2641
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][register_password_text]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "register_password_text", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "register_password_text", array())) : ("Придумайте пароль"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2644
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2647
            echo (isset($context["entry_show_captcha"]) ? $context["entry_show_captcha"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[register][captcha]\" value=\"1\" ";
            // line 2648
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "register", array()), "captcha", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2650
            echo (isset($context["entry_popup_reg_confirm"]) ? $context["entry_popup_reg_confirm"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_register_confirm]\" value=\"1\" ";
            // line 2651
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_register_confirm", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2653
            echo (isset($context["entry_popup_reg_login"]) ? $context["entry_popup_reg_login"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_register_login]\" value=\"1\" ";
            // line 2654
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_register_login", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"tab-checkout\" class=\"tab-pane\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-checkout1\" data-toggle=\"tab\"><span title=\"";
            // line 2660
            echo (isset($context["text_new_settings"]) ? $context["text_new_settings"] : null);
            echo "\" data-toggle=\"tooltip\">New</span>";
            echo (isset($context["tab_checkout1"]) ? $context["tab_checkout1"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-checkout6\" data-toggle=\"tab\">";
            // line 2661
            echo (isset($context["tab_checkout6"]) ? $context["tab_checkout6"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-checkout2\" data-toggle=\"tab\">";
            // line 2662
            echo (isset($context["tab_checkout2"]) ? $context["tab_checkout2"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-checkout3\" data-toggle=\"tab\">";
            // line 2663
            echo (isset($context["tab_checkout3"]) ? $context["tab_checkout3"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-checkout4\" data-toggle=\"tab\">";
            // line 2664
            echo (isset($context["tab_checkout4"]) ? $context["tab_checkout4"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-checkout5\" data-toggle=\"tab\"><span title=\"";
            // line 2665
            echo (isset($context["text_new_settings"]) ? $context["text_new_settings"] : null);
            echo "\" data-toggle=\"tooltip\">New</span>";
            echo (isset($context["tab_checkout5"]) ? $context["tab_checkout5"] : null);
            echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div id=\"module\" class=\"tab-content\">
\t\t\t\t\t\t<div id=\"tab-checkout1\" class=\"tab-pane active\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2669
            echo (isset($context["entry_checkout"]) ? $context["entry_checkout"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_checkout]\" value=\"1\" ";
            // line 2670
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_checkout", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2672
            echo (isset($context["entry_checkout_min_summ"]) ? $context["entry_checkout_min_summ"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[checkout][min_summ]\" value=\"";
            // line 2673
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "checkout", array()), "min_summ", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "checkout", array()), "min_summ", array())) : (0));
            echo "\" class=\"form-control\" style=\"max-width:100px\" /></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-checkout6\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2676
            echo (isset($context["entry_checkout_name_text"]) ? $context["entry_checkout_name_text"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 2679
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2680
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#checkout-name-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2682
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 2684
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2685
                echo "\t\t\t\t\t\t\t\t\t<div id=\"checkout-name-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 2686
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][checkout_name_text]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "checkout_name_text", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "checkout_name_text", array())) : ("Ваше имя"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2689
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2692
            echo (isset($context["entry_checkout_name1"]) ? $context["entry_checkout_name1"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[checkout_lastname]\" value=\"1\" ";
            // line 2693
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "checkout_lastname", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2695
            echo (isset($context["entry_checkout_name1_text"]) ? $context["entry_checkout_name1_text"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 2698
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2699
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#checkout-lastname-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2701
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 2703
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2704
                echo "\t\t\t\t\t\t\t\t\t<div id=\"checkout-lastname-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 2705
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][checkout_lastname_text]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "checkout_lastname_text", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "checkout_lastname_text", array())) : ("Ваша фамилия"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2707
            echo "\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2711
            echo (isset($context["entry_checkout_mail"]) ? $context["entry_checkout_mail"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[checkout_email]\" value=\"1\" ";
            // line 2712
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "checkout_email", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2714
            echo (isset($context["entry_checkout_mail_text"]) ? $context["entry_checkout_mail_text"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 2717
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2718
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#checkout-email-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2720
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 2722
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2723
                echo "\t\t\t\t\t\t\t\t\t<div id=\"checkout-email-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 2724
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][checkout_email_text]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "checkout_email_text", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "checkout_email_text", array())) : ("Ваш e-mail"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2727
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2730
            echo (isset($context["entry_checkout_mail_cap"]) ? $context["entry_checkout_mail_cap"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[checkout_mail_cap]\" value=\"";
            // line 2731
            echo (( !$this->getAttribute((isset($context["set"]) ? $context["set"] : null), "checkout_mail_cap", array(), "any", true, true)) ? ("mail@localhost.com") : ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "checkout_mail_cap", array())));
            echo "\" class=\"form-control\" /></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2733
            echo (isset($context["entry_checkout_phone"]) ? $context["entry_checkout_phone"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[checkout_phone]\" value=\"1\" ";
            // line 2734
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "checkout_phone", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2736
            echo (isset($context["entry_checkout_phone_text"]) ? $context["entry_checkout_phone_text"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 2739
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2740
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#checkout-phone-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2742
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 2744
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2745
                echo "\t\t\t\t\t\t\t\t\t<div id=\"checkout-phone-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 2746
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][checkout_phone_text]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "checkout_phone_text", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "checkout_phone_text", array())) : ("Контактный телефон"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2749
            echo "\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2752
            echo (isset($context["entry_checkout_phone_mask"]) ? $context["entry_checkout_phone_mask"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[checkout_phone_mask]\" value=\"";
            // line 2753
            echo (( !$this->getAttribute((isset($context["set"]) ? $context["set"] : null), "checkout_phone_mask", array(), "any", true, true)) ? ("+7 (999) 999-99-99") : ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "checkout_phone_mask", array())));
            echo "\" class=\"form-control\" /></div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2755
            echo (isset($context["entry_checkout_passgen"]) ? $context["entry_checkout_passgen"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[checkout_passgen]\" value=\"1\" ";
            // line 2756
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "checkout_passgen", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2758
            echo (isset($context["entry_checkout_pass_text"]) ? $context["entry_checkout_pass_text"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 2761
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2762
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#checkout-password-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2764
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 2766
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2767
                echo "\t\t\t\t\t\t\t\t\t<div id=\"checkout-password-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 2768
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][checkout_password_text]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "checkout_password_text", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "checkout_password_text", array())) : ("Придумайте пароль"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2771
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2774
            echo (isset($context["entry_checkout_pass_conf"]) ? $context["entry_checkout_pass_conf"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[checkout_password_confirm]\" value=\"1\" ";
            // line 2775
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "checkout_password_confirm", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2777
            echo (isset($context["entry_checkout_pass_conf_text"]) ? $context["entry_checkout_pass_conf_text"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 2780
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2781
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#checkout-password-c-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2783
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 2785
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2786
                echo "\t\t\t\t\t\t\t\t\t<div id=\"checkout-password-c-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 2787
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][checkout_password_confirm_text]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "checkout_password_confirm_text", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "checkout_password_confirm_text", array())) : ("Повторите пароль"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2790
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-checkout2\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\" style=\"color:#f00;\">";
            // line 2794
            echo (isset($context["header_checkout_address2"]) ? $context["header_checkout_address2"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2796
            echo (isset($context["entry_checkout_address_blocked"]) ? $context["entry_checkout_address_blocked"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[checkout_address_blocked]\" value=\"1\" ";
            // line 2797
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "checkout_address_blocked", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2799
            echo (isset($context["entry_checkout_country"]) ? $context["entry_checkout_country"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[checkout_country_zone]\" value=\"1\" ";
            // line 2800
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "checkout_country_zone", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2802
            echo (isset($context["entry_checkout_city"]) ? $context["entry_checkout_city"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[checkout_city]\" value=\"1\" ";
            // line 2803
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "checkout_city", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2805
            echo (isset($context["entry_checkout_city_text"]) ? $context["entry_checkout_city_text"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 2808
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2809
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#checkout-city-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2811
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 2813
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2814
                echo "\t\t\t\t\t\t\t\t\t<div id=\"checkout-city-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 2815
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][checkout_city_text]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "checkout_city_text", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "checkout_city_text", array())) : ("Город"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2818
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2821
            echo (isset($context["entry_checkout_postcode"]) ? $context["entry_checkout_postcode"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[checkout_postcode]\" value=\"1\" ";
            // line 2822
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "checkout_postcode", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2824
            echo (isset($context["entry_checkout_postcode_text"]) ? $context["entry_checkout_postcode_text"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 2827
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2828
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#checkout-postcode-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2830
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 2832
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2833
                echo "\t\t\t\t\t\t\t\t\t<div id=\"checkout-postcode-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 2834
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][checkout_postcode_text]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "checkout_postcode_text", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "checkout_postcode_text", array())) : ("Индекс"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2837
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2840
            echo (isset($context["entry_checkout_address"]) ? $context["entry_checkout_address"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[checkout_address]\" value=\"1\" ";
            // line 2841
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "checkout_address", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2843
            echo (isset($context["entry_checkout_address_text"]) ? $context["entry_checkout_address_text"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 2846
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2847
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#checkout-address-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2849
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 2851
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2852
                echo "\t\t\t\t\t\t\t\t\t<div id=\"checkout-address-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 2853
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][checkout_address_text]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "checkout_address_text", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "checkout_address_text", array())) : ("Ваш адрес"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2856
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2859
            echo (isset($context["entry_checkout_address1"]) ? $context["entry_checkout_address1"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[checkout_address2]\" value=\"1\" ";
            // line 2860
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "checkout_address2", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2862
            echo (isset($context["entry_checkout_address1_text"]) ? $context["entry_checkout_address1_text"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 2865
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2866
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#checkout-address2-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2868
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 2870
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2871
                echo "\t\t\t\t\t\t\t\t\t<div id=\"checkout-address2-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 2872
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][checkout_address2_text]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "checkout_address2_text", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "checkout_address2_text", array())) : ("Ваш адрес, продолжение"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2875
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-checkout3\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2879
            echo (isset($context["entry_checkout_shipping_title"]) ? $context["entry_checkout_shipping_title"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[checkout_shipping_title]\" value=\"1\" ";
            // line 2880
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "checkout_shipping_title", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-checkout4\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2883
            echo (isset($context["entry_checkout_related"]) ? $context["entry_checkout_related"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[checkout_related_product]\" value=\"1\" ";
            // line 2884
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "checkout_related_product", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2886
            echo (isset($context["entry_checkout_related_title"]) ? $context["entry_checkout_related_title"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 2889
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2890
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#checkout-related-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2892
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 2894
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2895
                echo "\t\t\t\t\t\t\t\t\t<div id=\"checkout-related-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 2896
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][checkout_related_text]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "checkout_related_text", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "checkout_related_text", array())) : ("Обратите внимание"));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2899
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2902
            echo (isset($context["entry_checkout_related_product"]) ? $context["entry_checkout_related_product"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[checkout_related_product1]\" value=\"1\" ";
            // line 2903
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "checkout_related_product1", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2905
            echo (isset($context["entry_checkout_related_product1"]) ? $context["entry_checkout_related_product1"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[checkout_related_product2]\" value=\"1\" ";
            // line 2906
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "checkout_related_product2", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-checkout5\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 2909
            echo (isset($context["header_metric"]) ? $context["header_metric"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2911
            echo (isset($context["entry_metric_id"]) ? $context["entry_metric_id"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[checkout][metric_id]\" value=\"";
            // line 2912
            echo $this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "checkout", array()), "metric_id", array());
            echo "\" class=\"form-control\" /></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2914
            echo (isset($context["entry_metric_target_id"]) ? $context["entry_metric_target_id"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[checkout][metric_target_id]\" value=\"";
            // line 2915
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "checkout_metric_id", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "checkout_metric_id", array())) : ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "checkout", array()), "metric_target_id", array())));
            echo "\" class=\"form-control\" /></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2917
            echo (isset($context["entry_metric_target"]) ? $context["entry_metric_target"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[checkout][metric_target]\" value=\"";
            // line 2918
            echo $this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "checkout", array()), "metric_target", array());
            echo "\" class=\"form-control\" /></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 2920
            echo (isset($context["header_analityc_p"]) ? $context["header_analityc_p"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2922
            echo (isset($context["entry_analityc_category"]) ? $context["entry_analityc_category"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[checkout][analytic_category]\" value=\"";
            // line 2923
            echo $this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "checkout", array()), "analytic_category", array());
            echo "\" class=\"form-control\" /></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2925
            echo (isset($context["entry_analityc_action"]) ? $context["entry_analityc_action"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[checkout][analytic_action]\" value=\"";
            // line 2926
            echo $this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "checkout", array()), "analytic_action", array());
            echo "\" class=\"form-control\" /></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\"><small style=\"font-weight:400;color:#444\">";
            // line 2928
            echo (isset($context["entry_metric_analytic_help"]) ? $context["entry_metric_analytic_help"] : null);
            echo "<br /><br />";
            echo (isset($context["entry_metric_analytic_dataLayer_purchase"]) ? $context["entry_metric_analytic_dataLayer_purchase"] : null);
            echo "</small></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"tab-cart-btn\" class=\"tab-pane\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-buybutton1\" data-toggle=\"tab\">";
            // line 2934
            echo (isset($context["tab_buybutton1"]) ? $context["tab_buybutton1"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-buybutton2\" data-toggle=\"tab\">";
            // line 2935
            echo (isset($context["tab_buybutton_metric"]) ? $context["tab_buybutton_metric"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-comparewishlistbutton1\" data-toggle=\"tab\">";
            // line 2936
            echo (isset($context["tab_comparewishlistbutton1"]) ? $context["tab_comparewishlistbutton1"] : null);
            echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div id=\"module\" class=\"tab-content\">
\t\t\t\t\t\t<div id=\"tab-buybutton1\" class=\"tab-pane active\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 2940
            echo (isset($context["header_buybutton1"]) ? $context["header_buybutton1"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2942
            echo (isset($context["entry_buybutton_text"]) ? $context["entry_buybutton_text"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 2945
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2946
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#cart-btn-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2948
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 2950
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2951
                echo "\t\t\t\t\t\t\t\t\t<div id=\"cart-btn-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon open_icon\" id=\"_";
                // line 2953
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "_с_b\" onclick=\"popup_icons(\$(this).attr('id'))\">Иконка: <i class=\"";
                echo (( !$this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array", false, true), "cart_btn_icon", array(), "any", true, true)) ? ("fa fa-shopping-bag") : ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "cart_btn_icon", array())));
                echo "\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"uni_set[";
                // line 2954
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][cart_btn_icon]\" value=\"";
                echo (( !$this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array", false, true), "cart_btn_icon", array(), "any", true, true)) ? ("fa fa-shopping-bag") : ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "cart_btn_icon", array())));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 2955
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][cart_btn_text]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "cart_btn_text", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "cart_btn_text", array())) : ("В корзину"));
                echo "\" placeholder=\"\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2959
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2962
            echo (isset($context["entry_buybutton_color"]) ? $context["entry_buybutton_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[cart_btn_bg]\" class=\"uni-color form-control\" value=\"";
            // line 2964
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cart_btn_bg", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cart_btn_bg", array())) : ("149dbc"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[cart_btn_color]\" class=\"uni-color form-control\" value=\"";
            // line 2965
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cart_btn_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cart_btn_color", array())) : ("ffffff"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2968
            echo (isset($context["entry_buybutton_color1"]) ? $context["entry_buybutton_color1"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[cart_btn_bg_hover]\" class=\"uni-color form-control\" value=\"";
            // line 2970
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cart_btn_bg_hover", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cart_btn_bg_hover", array())) : ("F6846A"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[cart_btn_color_hover]\" class=\"uni-color form-control\" value=\"";
            // line 2971
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cart_btn_color_hover", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cart_btn_color_hover", array())) : ("ffffff"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 2974
            echo (isset($context["header_buybutton2"]) ? $context["header_buybutton2"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2976
            echo (isset($context["entry_buybutton_dis_text"]) ? $context["entry_buybutton_dis_text"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 2979
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2980
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#cart-btn-d-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2982
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 2984
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 2985
                echo "\t\t\t\t\t\t\t\t\t<div id=\"cart-btn-d-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon open_icon\" id=\"_";
                // line 2987
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "_с_b_d\" onclick=\"popup_icons(\$(this).attr('id'))\">Иконка: <i class=\"";
                echo (( !$this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array", false, true), "cart_btn_icon_disabled", array(), "any", true, true)) ? ("fa fa-minus-circle") : ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "cart_btn_icon_disabled", array())));
                echo "\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"uni_set[";
                // line 2988
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][cart_btn_icon_disabled]\" value=\"";
                echo (( !$this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array", false, true), "cart_btn_icon_disabled", array(), "any", true, true)) ? ("fa fa-minus-circle") : ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "cart_btn_icon_disabled", array())));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 2989
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][cart_btn_text_disabled]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "cart_btn_text_disabled", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "cart_btn_text_disabled", array())) : ("Закончился"));
                echo "\" placeholder=\"\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2993
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 2996
            echo (isset($context["entry_buybutton_dis_color"]) ? $context["entry_buybutton_dis_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[cart_btn_bg_disabled]\" class=\"uni-color form-control\" value=\"";
            // line 2998
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cart_btn_bg_disabled", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cart_btn_bg_disabled", array())) : ("e5e5e5"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[cart_btn_color_disabled]\" class=\"uni-color form-control\" value=\"";
            // line 2999
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cart_btn_color_disabled", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cart_btn_color_disabled", array())) : ("444444"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3002
            echo (isset($context["entry_buybutton_dis"]) ? $context["entry_buybutton_dis"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
            // line 3004
            $context["buttons"] = array("qty-0" => "Ничего не делать", "disabled" => "Отключить", "disabled2" => "Скрыть");
            // line 3005
            echo "\t\t\t\t\t\t\t\t<select name=\"uni_set[cart_btn_disabled]\" class=\"form-control\">
\t\t\t\t\t\t\t\t";
            // line 3006
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["buttons"]) ? $context["buttons"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["name"]) {
                // line 3007
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["key"];
                echo "\" ";
                echo ((($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cart_btn_disabled", array()) == $context["key"])) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo $context["name"];
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 3009
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 3012
            echo (isset($context["header_buybutton3"]) ? $context["header_buybutton3"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3014
            echo (isset($context["entry_buybutton_in_text"]) ? $context["entry_buybutton_in_text"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 3017
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 3018
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#cart-btn-i-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 3020
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
            // line 3022
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 3023
                echo "\t\t\t\t\t\t\t\t\t<div id=\"cart-btn-i-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon open_icon\" id=\"_";
                // line 3025
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "_с_b_i\" onclick=\"popup_icons(\$(this).attr('id'))\">Иконка: <i class=\"";
                echo (( !$this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array", false, true), "cart_btn_icon_incart", array(), "any", true, true)) ? ("fa fa-check") : ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "cart_btn_icon_incart", array())));
                echo "\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"uni_set[";
                // line 3026
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][cart_btn_icon_incart]\" value=\"";
                echo (( !$this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array", false, true), "cart_btn_icon_incart", array(), "any", true, true)) ? ("fa fa-check") : ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "cart_btn_icon_incart", array())));
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[";
                // line 3027
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][cart_btn_text_incart]\" value=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "cart_btn_text_incart", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "cart_btn_text_incart", array())) : ("В корзине"));
                echo "\" placeholder=\"\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 3031
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3034
            echo (isset($context["entry_buybutton_in_color"]) ? $context["entry_buybutton_in_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[cart_btn_bg_incart]\" class=\"uni-color form-control\" value=\"";
            // line 3036
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cart_btn_bg_incart", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cart_btn_bg_incart", array())) : ("F6846A"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[cart_btn_color_incart]\" class=\"uni-color form-control\" value=\"";
            // line 3037
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cart_btn_color_incart", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cart_btn_color_incart", array())) : ("ffffff"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 3040
            echo (isset($context["header_buybutton4"]) ? $context["header_buybutton4"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3042
            echo (isset($context["entry_cart_popup_disable"]) ? $context["entry_cart_popup_disable"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[cart_popup_disable]\" value=\"1\" ";
            // line 3043
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cart_popup_disable", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3045
            echo (isset($context["entry_cart_popup_autohide"]) ? $context["entry_cart_popup_autohide"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"uni_set[cart_popup_autohide]\" value=\"1\" ";
            // line 3047
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cart_popup_autohide", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3050
            echo (isset($context["entry_cart_popup_autohide_time"]) ? $context["entry_cart_popup_autohide_time"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[cart_popup_autohide_time]\" class=\"form-control\" value=\"";
            // line 3052
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cart_popup_autohide_time", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cart_popup_autohide_time", array())) : (5));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-buybutton2\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 3056
            echo (isset($context["header_metric"]) ? $context["header_metric"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3058
            echo (isset($context["entry_metric_id"]) ? $context["entry_metric_id"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[cart_btn][metric_id]\" value=\"";
            // line 3059
            echo $this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cart_btn", array()), "metric_id", array());
            echo "\" class=\"form-control\" /></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3061
            echo (isset($context["entry_metric_target"]) ? $context["entry_metric_target"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[cart_btn][metric_target]\" value=\"";
            // line 3062
            echo $this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cart_btn", array()), "metric_target", array());
            echo "\" class=\"form-control\" /></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 3064
            echo (isset($context["header_analityc_a"]) ? $context["header_analityc_a"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3066
            echo (isset($context["entry_analityc_category"]) ? $context["entry_analityc_category"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[cart_btn][analytic_category]\" value=\"";
            // line 3067
            echo $this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cart_btn", array()), "analytic_category", array());
            echo "\" class=\"form-control\" /></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3069
            echo (isset($context["entry_analityc_action"]) ? $context["entry_analityc_action"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[cart_btn][analytic_action]\" value=\"";
            // line 3070
            echo $this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cart_btn", array()), "analytic_action", array());
            echo "\" class=\"form-control\" /></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\"><small style=\"font-weight:400;color:#444\">";
            // line 3072
            echo (isset($context["entry_metric_analytic_help"]) ? $context["entry_metric_analytic_help"] : null);
            echo "<br /><br />";
            echo (isset($context["entry_metric_analytic_dataLayer_add"]) ? $context["entry_metric_analytic_dataLayer_add"] : null);
            echo "</small></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-comparewishlistbutton1\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 3075
            echo (isset($context["header_wishbutton"]) ? $context["header_wishbutton"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3077
            echo (isset($context["entry_wishbutton"]) ? $context["entry_wishbutton"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[wishlist_btn_disabled]\" value=\"1\" ";
            // line 3078
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "wishlist_btn_disabled", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3080
            echo (isset($context["entry_wishbutton_color"]) ? $context["entry_wishbutton_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[wishlist_btn_color]\" class=\"uni-color form-control\" value=\"";
            // line 3082
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "wishlist_btn_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "wishlist_btn_color", array())) : ("149dbc"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[wishlist_btn_color_hover]\" class=\"uni-color form-control\" value=\"";
            // line 3083
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "wishlist_btn_color_hover", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "wishlist_btn_color_hover", array())) : ("F6846A"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3086
            echo (isset($context["entry_fly_wishbutton"]) ? $context["entry_fly_wishbutton"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_fly_wishlist]\" value=\"1\" ";
            // line 3087
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_fly_wishlist", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3089
            echo (isset($context["entry_fly_wishbutton_color"]) ? $context["entry_fly_wishbutton_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[fly_wishlist_bg]\" class=\"uni-color form-control\" value=\"";
            // line 3091
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "fly_wishlist_bg", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "fly_wishlist_bg", array())) : ("149dbc"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[fly_wishlist_color]\" class=\"uni-color form-control\" value=\"";
            // line 3092
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "fly_wishlist_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "fly_wishlist_color", array())) : ("ffffff"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 3095
            echo (isset($context["header_compbutton"]) ? $context["header_compbutton"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3097
            echo (isset($context["entry_compbutton"]) ? $context["entry_compbutton"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[compare_btn_disabled]\" value=\"1\" ";
            // line 3098
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "compare_btn_disabled", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3100
            echo (isset($context["entry_compbutton_color"]) ? $context["entry_compbutton_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[compare_btn_color]\" class=\"uni-color form-control\" value=\"";
            // line 3102
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "compare_btn_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "compare_btn_color", array())) : ("149dbc"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[compare_btn_color_hover]\" class=\"uni-color form-control\" value=\"";
            // line 3103
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "compare_btn_color_hover", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "compare_btn_color_hover", array())) : ("F6846A"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3106
            echo (isset($context["entry_fly_compbutton"]) ? $context["entry_fly_compbutton"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_fly_compare]\" value=\"1\" ";
            // line 3107
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_fly_compare", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3109
            echo (isset($context["entry_fly_compbutton_color"]) ? $context["entry_fly_compbutton_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[fly_compare_bg]\" class=\"uni-color form-control\" value=\"";
            // line 3111
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "fly_compare_bg", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "fly_compare_bg", array())) : ("149dbc"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[fly_compare_color]\" class=\"uni-color form-control\" value=\"";
            // line 3112
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "fly_compare_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "fly_compare_color", array())) : ("ffffff"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"tab-fly-menu\" class=\"tab-pane\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-flymenu1\" data-toggle=\"tab\">";
            // line 3119
            echo (isset($context["tab_flymenu1"]) ? $context["tab_flymenu1"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-flycart1\" data-toggle=\"tab\">";
            // line 3120
            echo (isset($context["tab_flycart1"]) ? $context["tab_flycart1"] : null);
            echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div id=\"module\" class=\"tab-content\">
\t\t\t\t\t\t<div id=\"tab-flymenu1\" class=\"tab-pane active\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3124
            echo (isset($context["entry_flymenu"]) ? $context["entry_flymenu"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[fly_menu][desktop]\" value=\"1\" ";
            // line 3125
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "fly_menu", array()), "desktop", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3127
            echo (isset($context["entry_flymenu_mobile"]) ? $context["entry_flymenu_mobile"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[fly_menu][mobile]\" value=\"1\" ";
            // line 3128
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "fly_menu", array()), "mobile", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3130
            echo (isset($context["entry_flymenu_product"]) ? $context["entry_flymenu_product"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[fly_menu][product]\" value=\"1\" ";
            // line 3131
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "fly_menu", array()), "product", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3133
            echo (isset($context["entry_flymenu_color"]) ? $context["entry_flymenu_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[fly_menu][bg]\" class=\"uni-color form-control\" value=\"";
            // line 3135
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "fly_menu", array()), "bg", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "fly_menu", array()), "bg", array())) : ("f5f5f5"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[fly_menu][color]\" class=\"uni-color form-control\" value=\"";
            // line 3136
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "fly_menu", array()), "color", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "fly_menu", array()), "color", array())) : ("F6846A"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-flycart1\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3140
            echo (isset($context["entry_flycart"]) ? $context["entry_flycart"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[show_fly_cart]\" value=\"1\" ";
            // line 3141
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "show_fly_cart", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"tab-search\" class=\"tab-pane\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-livesearch1\" data-toggle=\"tab\"><span title=\"";
            // line 3147
            echo (isset($context["text_new_settings"]) ? $context["text_new_settings"] : null);
            echo "\" data-toggle=\"tooltip\">New</span>";
            echo (isset($context["tab_livesearch1"]) ? $context["tab_livesearch1"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-livesearch2\" data-toggle=\"tab\">";
            // line 3148
            echo (isset($context["header_livesearch"]) ? $context["header_livesearch"] : null);
            echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div id=\"module\" class=\"tab-content\">
\t\t\t\t\t\t<div id=\"tab-livesearch1\" class=\"tab-pane active\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3152
            echo (isset($context["entry_search_ownmodel"]) ? $context["entry_search_ownmodel"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[search][enabled]\" value=\"1\" ";
            // line 3153
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "search", array()), "enabled", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 3155
            echo (isset($context["header_search_manuf"]) ? $context["header_search_manuf"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3157
            echo (isset($context["entry_search_manuf"]) ? $context["entry_search_manuf"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[search][condition][manufacturer]\" value=\"1\" ";
            // line 3158
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "search", array()), "condition", array()), "manufacturer", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3160
            echo (isset($context["entry_search_manuf_img"]) ? $context["entry_search_manuf_img"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[search][condition][manufacturer_img]\" value=\"1\" ";
            // line 3161
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "search", array()), "condition", array()), "manufacturer_img", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 3163
            echo (isset($context["header_search_cat"]) ? $context["header_search_cat"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3165
            echo (isset($context["entry_search_cat"]) ? $context["entry_search_cat"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[search][condition][category]\" value=\"1\" ";
            // line 3166
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "search", array()), "condition", array()), "category", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3168
            echo (isset($context["entry_search_cat_img"]) ? $context["entry_search_cat_img"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[search][condition][category_img]\" value=\"1\" ";
            // line 3169
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "search", array()), "condition", array()), "category_img", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 3171
            echo (isset($context["header_search_prod"]) ? $context["header_search_prod"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3173
            echo (isset($context["entry_search_desc"]) ? $context["entry_search_desc"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[search][types][description]\" value=\"pd.description\" ";
            // line 3174
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "search", array()), "types", array()), "description", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3176
            echo (isset($context["entry_search_tag"]) ? $context["entry_search_tag"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[search][types][tag]\" value=\"pd.tag\" ";
            // line 3177
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "search", array()), "types", array()), "tag", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3179
            echo (isset($context["entry_search_model"]) ? $context["entry_search_model"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[search][types][model]\" value=\"p.model\" ";
            // line 3180
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "search", array()), "types", array()), "model", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3182
            echo (isset($context["entry_search_attr"]) ? $context["entry_search_attr"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[search][types][attr]\" value=\"pa.text\" ";
            // line 3183
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "search", array()), "types", array()), "attr", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3185
            echo (isset($context["entry_search_sku"]) ? $context["entry_search_sku"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[search][types][sku]\" value=\"p.sku\" ";
            // line 3186
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "search", array()), "types", array()), "sku", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3188
            echo (isset($context["entry_search_upc"]) ? $context["entry_search_upc"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[search][types][upc]\" value=\"p.upc\" ";
            // line 3189
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "search", array()), "types", array()), "upc", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3191
            echo (isset($context["entry_search_ean"]) ? $context["entry_search_ean"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[search][types][ean]\" value=\"p.ean\" ";
            // line 3192
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "search", array()), "types", array()), "ean", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3194
            echo (isset($context["entry_search_jan"]) ? $context["entry_search_jan"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[search][types][jan]\" value=\"p.jan\" ";
            // line 3195
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "search", array()), "types", array()), "jan", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3197
            echo (isset($context["entry_search_isbn"]) ? $context["entry_search_isbn"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[search][types][isbn]\" value=\"p.isbn\" ";
            // line 3198
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "search", array()), "types", array()), "isbn", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3200
            echo (isset($context["entry_search_mpn"]) ? $context["entry_search_mpn"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[search][types][mpn]\" value=\"p.mpn\" ";
            // line 3201
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "search", array()), "types", array()), "mpn", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-livesearch2\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3204
            echo (isset($context["entry_livesearch"]) ? $context["entry_livesearch"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[livesearch][enabled]\" value=\"1\" ";
            // line 3205
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "livesearch", array()), "enabled", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3207
            echo (isset($context["entry_livesearch_sort"]) ? $context["entry_livesearch_sort"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t";
            // line 3210
            $context["s_sorts"] = array("pd.name" => "Наименованию", "p.model" => "Модели", "p.quantity" => "Количеству", "p.price" => "Цене", "rating" => "Рейтингу", "p.date_added" => "Дате добавления");
            // line 3211
            echo "\t\t\t\t\t\t\t\t\t<select name=\"uni_set[livesearch][sort]\" class=\"form-control\" style=\"width:150px\">
\t\t\t\t\t\t\t\t\t";
            // line 3212
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["s_sorts"]) ? $context["s_sorts"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["name"]) {
                // line 3213
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["key"];
                echo "\" ";
                echo ((($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "livesearch", array()), "sort", array()) && ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "livesearch", array()), "sort", array()) == $context["key"]))) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo $context["name"];
                echo "</option>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 3215
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t";
            // line 3216
            $context["s_orders"] = array("ASC" => "Возрастанию", "DESC" => "Убыванию");
            // line 3217
            echo "\t\t\t\t\t\t\t\t\t<select name=\"uni_set[livesearch][order]\" class=\"form-control\" style=\"width:150px\">
\t\t\t\t\t\t\t\t\t";
            // line 3218
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["s_orders"]) ? $context["s_orders"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["name"]) {
                // line 3219
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["key"];
                echo "\" ";
                echo ((($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "livesearch", array()), "order", array()) && ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "livesearch", array()), "order", array()) == $context["key"]))) ? ("selected=\"selected\"") : (""));
                echo ">";
                echo $context["name"];
                echo "</option>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 3221
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3225
            echo (isset($context["entry_livesearch_img"]) ? $context["entry_livesearch_img"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[livesearch][image]\" value=\"1\" ";
            // line 3226
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "livesearch", array()), "image", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3228
            echo (isset($context["entry_livesearch_img_size"]) ? $context["entry_livesearch_img_size"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[livesearch][image_w]\" value=\"";
            // line 3231
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "livesearch", array()), "image_w", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "livesearch", array()), "image_w", array())) : ("50"));
            echo "\" style=\"width:50px !important; text-align:center;\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[livesearch][image_h]\" value=\"";
            // line 3232
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "livesearch", array()), "image_h", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "livesearch", array()), "image_h", array())) : ("50"));
            echo "\" style=\"width:50px !important; text-align:center;\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<span>";
            // line 3233
            echo (isset($context["text_pix"]) ? $context["text_pix"] : null);
            echo "</span> 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3237
            echo (isset($context["entry_livesearch_name_len"]) ? $context["entry_livesearch_name_len"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[livesearch][name_length]\" value=\"";
            // line 3240
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "livesearch", array()), "name_length", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "livesearch", array()), "name_length", array())) : ("50"));
            echo "\" style=\"width:50px !important; text-align:center;\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<span>";
            // line 3241
            echo (isset($context["text_symbols"]) ? $context["text_symbols"] : null);
            echo "</span> 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3245
            echo (isset($context["entry_livesearch_desc2"]) ? $context["entry_livesearch_desc2"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[livesearch][show_description]\" value=\"1\" ";
            // line 3246
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "livesearch", array()), "show_description", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3248
            echo (isset($context["entry_livesearch_desc_len"]) ? $context["entry_livesearch_desc_len"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[livesearch][description_length]\" value=\"";
            // line 3251
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "livesearch", array()), "description_length", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "livesearch", array()), "description_length", array())) : ("50"));
            echo "\" style=\"width:50px !important; text-align:center;\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<span>";
            // line 3252
            echo (isset($context["text_symbols"]) ? $context["text_symbols"] : null);
            echo "</span> 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3256
            echo (isset($context["entry_livesearch_rating"]) ? $context["entry_livesearch_rating"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[livesearch][rating]\" value=\"1\" ";
            // line 3257
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "livesearch", array()), "rating", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3259
            echo (isset($context["entry_livesearch_price"]) ? $context["entry_livesearch_price"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[livesearch][price]\" value=\"1\" ";
            // line 3260
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "livesearch", array()), "price", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3262
            echo (isset($context["entry_livesearch_item"]) ? $context["entry_livesearch_item"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[livesearch][limit]\" value=\"";
            // line 3265
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "livesearch", array()), "limit", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "livesearch", array()), "limit", array())) : ("5"));
            echo "\" style=\"width:50px !important; text-align:center;\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<span>";
            // line 3266
            echo (isset($context["text_item"]) ? $context["text_item"] : null);
            echo "</span> 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"tab-style\" class=\"tab-pane\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-color1\" data-toggle=\"tab\">";
            // line 3274
            echo (isset($context["tab_color1"]) ? $context["tab_color1"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-color2\" data-toggle=\"tab\">";
            // line 3275
            echo (isset($context["tab_color2"]) ? $context["tab_color2"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-color3\" data-toggle=\"tab\">";
            // line 3276
            echo (isset($context["tab_color3"]) ? $context["tab_color3"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-color4\" data-toggle=\"tab\">";
            // line 3277
            echo (isset($context["tab_color4"]) ? $context["tab_color4"] : null);
            echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div id=\"module\" class=\"tab-content\">
\t\t\t\t\t\t<div id=\"tab-color1\" class=\"tab-pane active\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 3281
            echo (isset($context["header_h"]) ? $context["header_h"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3283
            echo (isset($context["entry_h1"]) ? $context["entry_h1"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[h1_color]\" class=\"uni-color form-control\" value=\"";
            // line 3284
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "h1_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "h1_color", array())) : ("333333"));
            echo "\" /></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3286
            echo (isset($context["entry_h2"]) ? $context["entry_h2"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[h2_color]\" class=\"uni-color form-control\" value=\"";
            // line 3287
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "h2_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "h2_color", array())) : ("333333"));
            echo "\" /></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3289
            echo (isset($context["entry_h3"]) ? $context["entry_h3"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[h3_color]\" class=\"uni-color form-control\" value=\"";
            // line 3290
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "h3_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "h3_color", array())) : ("333333"));
            echo "\" /></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3292
            echo (isset($context["entry_h4"]) ? $context["entry_h4"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[h4_color]\" class=\"uni-color form-control\" value=\"";
            // line 3293
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "h4_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "h4_color", array())) : ("333333"));
            echo "\"></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3295
            echo (isset($context["entry_h5"]) ? $context["entry_h5"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[h5_color]\" class=\"uni-color form-control\" value=\"";
            // line 3296
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "h5_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "h5_color", array())) : ("333333"));
            echo "\"></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 3298
            echo (isset($context["header_link"]) ? $context["header_link"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3300
            echo (isset($context["entry_link_color"]) ? $context["entry_link_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[a_color]\" class=\"uni-color form-control\" value=\"";
            // line 3302
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "a_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "a_color", array())) : ("F6846A"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[a_color_hover]\" class=\"uni-color form-control\" value=\"";
            // line 3303
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "a_color_hover", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "a_color_hover", array())) : ("149dbc"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 3306
            echo (isset($context["header_text"]) ? $context["header_text"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3308
            echo (isset($context["entry_text_color"]) ? $context["entry_text_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[text_color]\" class=\"uni-color form-control\" value=\"";
            // line 3309
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "text_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "text_color", array())) : ("333333"));
            echo "\"></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 3311
            echo (isset($context["header_price"]) ? $context["header_price"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3313
            echo (isset($context["entry_price_color"]) ? $context["entry_price_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[price_color]\" class=\"uni-color form-control\" value=\"";
            // line 3315
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "price_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "price_color", array())) : ("333333"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[price_color_old]\" class=\"uni-color form-control\" value=\"";
            // line 3316
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "price_color_old", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "price_color_old", array())) : ("888888"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[price_color_new]\" class=\"uni-color form-control\" value=\"";
            // line 3317
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "price_color_new", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "price_color_new", array())) : ("F6846A"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-color2\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 3321
            echo (isset($context["header_button"]) ? $context["header_button"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3323
            echo (isset($context["entry_button_default_color"]) ? $context["entry_button_default_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[btn_default_bg]\" class=\"uni-color form-control\" value=\"";
            // line 3325
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "btn_default_bg", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "btn_default_bg", array())) : ("eeeeee"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[btn_default_color]\" class=\"uni-color form-control\" value=\"";
            // line 3326
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "btn_default_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "btn_default_color", array())) : ("777777"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[btn_default_bg_hover]\" class=\"uni-color form-control\" value=\"";
            // line 3327
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "btn_default_bg_hover", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "btn_default_bg_hover", array())) : ("e5e5e5"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[btn_default_color_hover]\" class=\"uni-color form-control\" value=\"";
            // line 3328
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "btn_default_color_hover", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "btn_default_color_hover", array())) : ("777777"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3331
            echo (isset($context["entry_button_primary_color"]) ? $context["entry_button_primary_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[btn_primary_bg]\" class=\"uni-color form-control\" value=\"";
            // line 3333
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "btn_primary_bg", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "btn_primary_bg", array())) : ("F6846A"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[btn_primary_color]\" class=\"uni-color form-control\" value=\"";
            // line 3334
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "btn_primary_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "btn_primary_color", array())) : ("ffffff"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[btn_primary_bg_hover]\" class=\"uni-color form-control\" value=\"";
            // line 3335
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "btn_primary_bg_hover", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "btn_primary_bg_hover", array())) : ("149dbc"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[btn_primary_color_hover]\" class=\"uni-color form-control\" value=\"";
            // line 3336
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "btn_primary_color_hover", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "btn_primary_color_hover", array())) : ("ffffff"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3339
            echo (isset($context["entry_button_danger_color"]) ? $context["entry_button_danger_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[btn_danger_bg]\" class=\"uni-color form-control\" value=\"";
            // line 3341
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "btn_danger_bg", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "btn_danger_bg", array())) : ("d9534f"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[btn_danger_color]\" class=\"uni-color form-control\" value=\"";
            // line 3342
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "btn_danger_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "btn_danger_color", array())) : ("ffffff"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[btn_danger_bg_hover]\" class=\"uni-color form-control\" value=\"";
            // line 3343
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "btn_danger_bg_hover", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "btn_danger_bg_hover", array())) : ("c9302c"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[btn_danger_color_hover]\" class=\"uni-color form-control\" value=\"";
            // line 3344
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "btn_danger_color_hover", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "btn_danger_color_hover", array())) : ("ffffff"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 3347
            echo (isset($context["header_input"]) ? $context["header_input"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3349
            echo (isset($context["entry_input_color"]) ? $context["entry_input_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[checkbox_radiobutton_bg]\" class=\"uni-color form-control\" value=\"";
            // line 3350
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "checkbox_radiobutton_bg", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "checkbox_radiobutton_bg", array())) : ("F6846A"));
            echo "\"></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 3352
            echo (isset($context["header_pag"]) ? $context["header_pag"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3354
            echo (isset($context["entry_pag_color"]) ? $context["entry_pag_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[pagination_bg_active]\" class=\"uni-color form-control\" value=\"";
            // line 3356
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "pagination_bg_active", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "pagination_bg_active", array())) : ("F6846A"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[pagination_color_active]\" class=\"uni-color form-control\" value=\"";
            // line 3357
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "pagination_color_active", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "pagination_color_active", array())) : ("ffffff"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[pagination_bg]\" class=\"uni-color form-control\" value=\"";
            // line 3358
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "pagination_bg", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "pagination_bg", array())) : ("ffffff"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[pagination_color]\" class=\"uni-color form-control\" value=\"";
            // line 3359
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "pagination_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "pagination_color", array())) : ("F6846A"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-color4\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 3363
            echo (isset($context["header_bgimg"]) ? $context["header_bgimg"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3365
            echo (isset($context["entry_bg_image"]) ? $context["entry_bg_image"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image_\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 3368
            echo ((($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "background_image", array()) && ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "background_image", array()) != ""))) ? (("../image/" . $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "background_image", array()))) : ((isset($context["placeholder"]) ? $context["placeholder"] : null)));
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
            echo "\" style=\"width:100px\" />
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"uni_set[background_image]\" value=\"";
            // line 3370
            echo ((($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "background_image", array()) && ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "background_image", array()) != ""))) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "background_image", array())) : (""));
            echo "\" id=\"image_\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3373
            echo (isset($context["entry_bg_color"]) ? $context["entry_bg_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[background_color]\" class=\"uni-color form-control\" value=\"";
            // line 3375
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "background_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "background_color", array())) : ("fff"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-color3\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 3379
            echo (isset($context["header_tooltip"]) ? $context["header_tooltip"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3381
            echo (isset($context["entry_tooltip_color"]) ? $context["entry_tooltip_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[tooltip_bg]\" class=\"uni-color form-control\" value=\"";
            // line 3383
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "tooltip_bg", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "tooltip_bg", array())) : ("666666"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[tooltip_color]\" class=\"uni-color form-control\" value=\"";
            // line 3384
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "tooltip_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "tooltip_color", array())) : ("ffffff"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 3387
            echo (isset($context["header_text_alert"]) ? $context["header_text_alert"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3389
            echo (isset($context["entry_alert_effect_in"]) ? $context["entry_alert_effect_in"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select name=\"uni_set[alert][effect][in]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
            // line 3392
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alert_effects_in"]) ? $context["alert_effects_in"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["effect"]) {
                // line 3393
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (twig_in_filter($context["effect"], (isset($context["group"]) ? $context["group"] : null))) {
                    // line 3394
                    echo "\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"";
                    echo $context["effect"];
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 3396
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option ";
                    echo ((($context["effect"] == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "alert", array()), "effect", array()), "in", array()))) ? ("selected=\"selected\"") : (""));
                    echo " value=\"";
                    echo $context["effect"];
                    echo "\">";
                    echo $context["effect"];
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 3398
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['effect'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 3399
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3402
            echo (isset($context["entry_alert_effect_out"]) ? $context["entry_alert_effect_out"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select name=\"uni_set[alert][effect][out]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
            // line 3405
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["alert_effects_out"]) ? $context["alert_effects_out"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["effect"]) {
                // line 3406
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (twig_in_filter($context["effect"], (isset($context["group"]) ? $context["group"] : null))) {
                    // line 3407
                    echo "\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"";
                    echo $context["effect"];
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 3409
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option ";
                    echo ((($context["effect"] == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "alert", array()), "effect", array()), "out", array()))) ? ("selected=\"selected\"") : (""));
                    echo " value=\"";
                    echo $context["effect"];
                    echo "\">";
                    echo $context["effect"];
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 3411
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['effect'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 3412
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3415
            echo (isset($context["entry_text_alert_time"]) ? $context["entry_text_alert_time"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[alert][time]\" value=\"";
            // line 3418
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "alert", array()), "time", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "alert", array()), "time", array())) : (5));
            echo "\" class=\"form-control\" style=\"width:50px !important; text-align:center;\"><span>";
            echo (isset($context["text_sec"]) ? $context["text_sec"] : null);
            echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3422
            echo (isset($context["entry_text_alert_color"]) ? $context["entry_text_alert_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[alert][success][bg]\" class=\"uni-color form-control\" value=\"";
            // line 3424
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "alert", array()), "success", array()), "bg", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "alert", array()), "success", array()), "bg", array())) : ("6ab344"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[alert][success][color]\" class=\"uni-color form-control\" value=\"";
            // line 3425
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "alert", array()), "success", array()), "color", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "alert", array()), "success", array()), "color", array())) : ("ffffff"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3428
            echo (isset($context["entry_text_alert_color2"]) ? $context["entry_text_alert_color2"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[alert][warning][bg]\" class=\"uni-color form-control\" value=\"";
            // line 3430
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "alert", array()), "warning", array()), "bg", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "alert", array()), "warning", array()), "bg", array())) : ("76c204"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[alert][warning][color]\" class=\"uni-color form-control\" value=\"";
            // line 3431
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "alert", array()), "warning", array()), "color", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "alert", array()), "warning", array()), "color", array())) : ("ffffff"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3434
            echo (isset($context["entry_text_alert_color3"]) ? $context["entry_text_alert_color3"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[alert][danger][bg]\" class=\"uni-color form-control\" value=\"";
            // line 3436
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "alert", array()), "danger", array()), "bg", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "alert", array()), "danger", array()), "bg", array())) : ("ff6e6e"));
            echo "\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[alert][danger][color]\" class=\"uni-color form-control\" value=\"";
            // line 3437
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "alert", array()), "danger", array()), "color", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "alert", array()), "danger", array()), "color", array())) : ("ffffff"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3440
            echo (isset($context["entry_text_alert_color4"]) ? $context["entry_text_alert_color4"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[text_alert_color]\" class=\"uni-color form-control\" value=\"";
            // line 3442
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "text_alert_color", array())) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "text_alert_color", array())) : ("ff6e6e"));
            echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"tab-other\" class=\"tab-pane\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-other1\" data-toggle=\"tab\">";
            // line 3449
            echo (isset($context["tab_other1"]) ? $context["tab_other1"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-other5\" data-toggle=\"tab\"><span title=\"";
            // line 3450
            echo (isset($context["text_new_settings"]) ? $context["text_new_settings"] : null);
            echo "\" data-toggle=\"tooltip\">New</span>";
            echo (isset($context["tab_breadcrumbs"]) ? $context["tab_breadcrumbs"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-other2\" data-toggle=\"tab\">";
            // line 3451
            echo (isset($context["tab_user_css_js"]) ? $context["tab_user_css_js"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-other3\" data-toggle=\"tab\">";
            // line 3452
            echo (isset($context["tab_socialbutton"]) ? $context["tab_socialbutton"] : null);
            echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-other4\" data-toggle=\"tab\">";
            // line 3453
            echo (isset($context["tab_popup"]) ? $context["tab_popup"] : null);
            echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div id=\"module\" class=\"tab-content\">
\t\t\t\t\t\t<div id=\"tab-other1\" class=\"tab-pane active\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 3457
            echo (isset($context["heading_merge"]) ? $context["heading_merge"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3459
            echo (isset($context["entry_other_merge_css"]) ? $context["entry_other_merge_css"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[merge_css]\" value=\"1\" ";
            // line 3460
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "merge_css", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3462
            echo (isset($context["entry_other_merge_js"]) ? $context["entry_other_merge_js"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[merge_js]\" value=\"1\" ";
            // line 3463
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "merge_js", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3465
            echo (isset($context["entry_other_merge_closure"]) ? $context["entry_other_merge_closure"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[merge_js_closure]\" value=\"1\" ";
            // line 3466
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "merge_js_closure", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\" style=\"font-weight:400;color:#777\">";
            // line 3468
            echo (isset($context["text_other_merge_js"]) ? $context["text_other_merge_js"] : null);
            echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-other5\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3471
            echo (isset($context["entry_other_breadcrumbs"]) ? $context["entry_other_breadcrumbs"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[breadcrumbs][hide][last]\" value=\"1\" ";
            // line 3472
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "breadcrumbs", array()), "hide", array()), "last", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3474
            echo (isset($context["entry_other_breadcrumbs1"]) ? $context["entry_other_breadcrumbs1"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[breadcrumbs][hide][mobile]\" value=\"1\" ";
            // line 3475
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "breadcrumbs", array()), "hide", array()), "mobile", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-12\">";
            // line 3477
            echo (isset($context["heading_tabs"]) ? $context["heading_tabs"] : null);
            echo "</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3479
            echo (isset($context["entry_other_tabs"]) ? $context["entry_other_tabs"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[tabs][mobile][old]\" value=\"1\" ";
            // line 3480
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "tabs", array()), "mobile", array()), "old", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-other2\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3483
            echo (isset($context["entry_custom_style"]) ? $context["entry_custom_style"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><input type=\"text\" name=\"uni_set[custom_style]\" value=\"";
            // line 3484
            echo $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "custom_style", array());
            echo "\" placeholder=\"Пример: my_mega_style.css\" class=\"form-control\"/></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3486
            echo (isset($context["entry_other_css"]) ? $context["entry_other_css"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><textarea name=\"uni_set[user_css]\" placeholder=\"Пример: body{background:#fff; color:#555}\" class=\"form-control\">";
            // line 3487
            echo $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "user_css", array());
            echo "</textarea></div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3489
            echo (isset($context["entry_other_js"]) ? $context["entry_other_js"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><textarea name=\"uni_set[user_js]\" placeholder=\"Пример: \$(document).ready(function() { autoheight(); });\" class=\"form-control\">";
            // line 3490
            echo $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "user_js", array());
            echo "</textarea></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-other3\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3493
            echo (isset($context["entry_socialbutton"]) ? $context["entry_socialbutton"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
            // line 3495
            $context["socialbuttons"] = array(0 => "facebook", 1 => "vkontakte", 2 => "odnoklassniki", 3 => "googleplus", 4 => "moimir", 5 => "livejournal", 6 => "twitter", 7 => "evernote", 8 => "blogger", 9 => "surfingbird", 10 => "reddit", 11 => "linkedin", 12 => "telegram", 13 => "viber", 14 => "whatsapp");
            // line 3496
            echo "\t\t\t\t\t\t\t\t<div class=\"overflow\">
\t\t\t\t\t\t\t\t\t";
            // line 3497
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["socialbuttons"]) ? $context["socialbuttons"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["socialbutton"]) {
                // line 3498
                echo "\t\t\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"uni_set[socialbutton][]\" value=\"";
                echo $context["socialbutton"];
                echo "\" ";
                echo ((twig_in_filter($context["socialbutton"], $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "socialbutton", array()))) ? ("checked=\"checked\"") : (""));
                echo " /><span></span>";
                echo $context["socialbutton"];
                echo "</label><br />
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['socialbutton'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 3500
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"tab-other4\" class=\"tab-pane\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3504
            echo (isset($context["entry_popup_effect_in"]) ? $context["entry_popup_effect_in"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select name=\"uni_set[popup_effect_in]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
            // line 3507
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["effects_in"]) ? $context["effects_in"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["effect"]) {
                // line 3508
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (twig_in_filter($context["effect"], (isset($context["group"]) ? $context["group"] : null))) {
                    // line 3509
                    echo "\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"";
                    echo $context["effect"];
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 3511
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option ";
                    echo ((($context["effect"] == $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "popup_effect_in", array()))) ? ("selected=\"selected\"") : (""));
                    echo " value=\"";
                    echo $context["effect"];
                    echo "\">";
                    echo $context["effect"];
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 3513
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['effect'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 3514
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3517
            echo (isset($context["entry_popup_effect_out"]) ? $context["entry_popup_effect_out"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select name=\"uni_set[popup_effect_out]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
            // line 3520
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["effects_out"]) ? $context["effects_out"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["effect"]) {
                // line 3521
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (twig_in_filter($context["effect"], (isset($context["group"]) ? $context["group"] : null))) {
                    // line 3522
                    echo "\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"";
                    echo $context["effect"];
                    echo "\" />
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 3524
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option ";
                    echo ((($context["effect"] == $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "popup_effect_out", array()))) ? ("selected=\"selected\"") : (""));
                    echo " value=\"";
                    echo $context["effect"];
                    echo "\">";
                    echo $context["effect"];
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 3526
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['effect'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 3527
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3530
            echo (isset($context["entry_popup_blur"]) ? $context["entry_popup_blur"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[popup_blur]\" value=\"1\" ";
            // line 3531
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "popup_blur", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"tab-notification\" class=\"tab-pane\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-notification1\" data-toggle=\"tab\">";
            // line 3537
            echo (isset($context["tab_other1"]) ? $context["tab_other1"] : null);
            echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div id=\"module\" class=\"tab-content\">
\t\t\t\t\t\t<div id=\"tab-notification1\" class=\"tab-pane active\">
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3541
            echo (isset($context["entry_notification_status"]) ? $context["entry_notification_status"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select name=\"uni_set[notification][status]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t<option value=\"0\" ";
            // line 3544
            echo ((($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "notification", array()), "status", array()) == 0)) ? ("selected") : (""));
            echo ">";
            echo (isset($context["text_notification_status_0"]) ? $context["text_notification_status_0"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
            // line 3545
            echo ((($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "notification", array()), "status", array()) == 1)) ? ("selected") : (""));
            echo ">";
            echo (isset($context["text_notification_status_1"]) ? $context["text_notification_status_1"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"2\" ";
            // line 3546
            echo ((($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "notification", array()), "status", array()) == 2)) ? ("selected") : (""));
            echo ">";
            echo (isset($context["text_notification_status_2"]) ? $context["text_notification_status_2"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3550
            echo (isset($context["entry_notification_time"]) ? $context["entry_notification_time"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[notification][time]\" value=\"";
            // line 3553
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "notification", array()), "time", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "notification", array()), "time", array())) : (1));
            echo "\" class=\"form-control\" style=\"width:50px !important; text-align:center;\" />
\t\t\t\t\t\t\t\t\t<span>";
            // line 3554
            echo (isset($context["text_notification_time1"]) ? $context["text_notification_time1"] : null);
            echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3558
            echo (isset($context["entry_notification_text"]) ? $context["entry_notification_text"] : null);
            echo "</div>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
            // line 3561
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 3562
                echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#notification-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 3564
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t";
            // line 3566
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 3567
                echo "\t\t\t\t\t\t\t\t\t\t<div id=\"notification-text-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"uni_set[notification][";
                // line 3568
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][text]\" data-toggle=\"summernote\" class=\"form-control\">";
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "notification", array()), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "text", array());
                echo "</textarea>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 3571
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3574
            echo (isset($context["entry_notification_apply"]) ? $context["entry_notification_apply"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t";
            // line 3577
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 3578
                echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"#notification-apply-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 3580
            echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t";
            // line 3582
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 3583
                echo "\t\t\t\t\t\t\t\t\t\t<div id=\"notification-apply-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[notification][";
                // line 3584
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][apply_text]\" value=\"";
                echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "notification", array()), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "apply_text", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "notification", array()), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "apply_text", array())) : ("Принимаю"));
                echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 3587
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3590
            echo (isset($context["entry_notification_cancel"]) ? $context["entry_notification_cancel"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t";
            // line 3593
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 3594
                echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"#notification-cancel-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo "/";
                echo $this->getAttribute($context["lang"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["lang"], "name", array());
                echo "\" /></a></li>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 3596
            echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t";
            // line 3598
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 3599
                echo "\t\t\t\t\t\t\t\t\t\t<div id=\"notification-cancel-";
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[notification][";
                // line 3600
                echo $this->getAttribute($context["lang"], "language_id", array());
                echo "][cancel_text]\" value=\"";
                echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "notification", array()), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "cancel_text", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "notification", array()), $this->getAttribute($context["lang"], "language_id", array()), array(), "array"), "cancel_text", array())) : ("Не принимаю"));
                echo "\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 3603
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3606
            echo (isset($context["entry_notification_cancel_show"]) ? $context["entry_notification_cancel_show"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[notification][cancel_show]\" value=\"1\" ";
            // line 3607
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "notification", array()), "cancel_show", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3609
            echo (isset($context["entry_notification_cancel_close"]) ? $context["entry_notification_cancel_close"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_set[notification][cancel_close]\" value=\"1\" ";
            // line 3610
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "notification", array()), "cancel_close", array())) ? ("checked=\"checked\"") : (""));
            echo " /><span></span></label></div>
\t\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
            // line 3612
            echo (isset($context["entry_notification_color"]) ? $context["entry_notification_color"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[notification][bg]\" class=\"uni-color form-control\" value=\"";
            // line 3614
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "notification", array()), "bg", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "notification", array()), "bg", array())) : ("f5f5f5"));
            echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_set[notification][color]\" class=\"uni-color form-control\" value=\"";
            // line 3615
            echo (($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "notification", array()), "color", array())) ? ($this->getAttribute($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "notification", array()), "color", array())) : ("555555"));
            echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 3620
            if ((isset($context["time_left"]) ? $context["time_left"] : null)) {
                // line 3621
                echo "\t\t\t\t\t<div id=\"tab-key\" class=\"tab-pane\">
\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-key1\" data-toggle=\"tab\">";
                // line 3623
                echo (isset($context["tab_key1"]) ? $context["tab_key1"] : null);
                echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div id=\"module\" class=\"tab-content\">
\t\t\t\t\t\t\t<div id=\"tab-key1\" class=\"tab-pane active\">
\t\t\t\t\t\t\t\t<div id=\"full2\" class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t";
                // line 3628
                echo (isset($context["text_activate_manual2"]) ? $context["text_activate_manual2"] : null);
                echo "
\t\t\t\t\t\t\t\t\t<hr style=\"margin:10px 0\" />
\t\t\t\t\t\t\t\t\t<h4>";
                // line 3630
                echo (isset($context["text_variant1"]) ? $context["text_variant1"] : null);
                echo "</h4>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" style=\"line-height:1.0em\" onclick=\"addKey2();\" data-loading-text=\"<i class='fa fa-spinner fa-spin'></i>\">";
                // line 3631
                echo (isset($context["button_activate"]) ? $context["button_activate"] : null);
                echo "</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\"><hr style=\"margin:10px 0\" /></div>
\t\t\t\t\t\t\t\t<div id=\"full\" class=\"col-sm-12\" style=\"font-weight:400;color:#545454\">
\t\t\t\t\t\t\t\t\t<h4>";
                // line 3635
                echo (isset($context["text_variant2"]) ? $context["text_variant2"] : null);
                echo "</h4>
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"key\" value=\"\" class=\"form-control\" style=\"width:100%;max-width:500px;margin:0 0 10px !important;\" placeholder=\"";
                // line 3636
                echo (isset($context["text_lic_key"]) ? $context["text_lic_key"] : null);
                echo "\" />
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" style=\"line-height:1.0em\" onclick=\"addKey(this);\" data-loading-text=\"<i class='fa fa-spinner fa-spin'></i>\">";
                // line 3637
                echo (isset($context["button_activate"]) ? $context["button_activate"] : null);
                echo "</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\"><hr style=\"margin:10px 0\" /></div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\" style=\"font-weight:400\">";
                // line 3640
                echo (isset($context["text_activate_manual"]) ? $context["text_activate_manual"] : null);
                echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 3645
            echo "\t\t\t</div>
\t\t\t<input type=\"hidden\" name=\"uni_set[version]\" value=\"1.8.0.0\" />
\t\t\t<input type=\"hidden\" name=\"uni_set[save_date]\" value=\"\" />
\t\t\t<input type=\"hidden\" name=\"uni_set[sort_stories]\" value=\"";
            // line 3648
            echo (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), (isset($context["sort_stories"]) ? $context["sort_stories"] : null), array(), "array")) ? ($this->getAttribute((isset($context["set"]) ? $context["set"] : null), (isset($context["sort_stories"]) ? $context["sort_stories"] : null), array(), "array")) : ("url,asc"));
            echo "\" />
\t\t\t<input type=\"hidden\" name=\"store_id\" value=\"";
            // line 3649
            echo (isset($context["store_id"]) ? $context["store_id"] : null);
            echo "\" />
\t\t</form>
\t";
        } else {
            // line 3652
            echo "\t\t<div id=\"module\" class=\"content content_new\">
\t\t\t";
            // line 3653
            if ((isset($context["trial_end"]) ? $context["trial_end"] : null)) {
                // line 3654
                echo "\t\t\t\t";
                echo (isset($context["text_trial_end"]) ? $context["text_trial_end"] : null);
                echo "
\t\t\t\t<div style=\"margin:3px 0 0\"></div>
\t\t\t\t<a href=\"https://opencartforum.com/files/file/4292-licenziya-dlya-shablona-unishop2/\" target=\"_blank\" class=\"btn btn-primary\" style=\"\">";
                // line 3656
                echo (isset($context["text_get_license"]) ? $context["text_get_license"] : null);
                echo "</a>
\t\t\t\t<hr />
\t\t\t\t";
                // line 3658
                echo (isset($context["text_get_license2"]) ? $context["text_get_license2"] : null);
                echo "
\t\t\t\t<div style=\"margin:3px 0 0\"></div>
\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" style=\"line-height:1.0em\" onclick=\"addKey2();\" data-loading-text=\"<i class='fa fa-spinner fa-spin'></i>\">";
                // line 3660
                echo (isset($context["button_activate"]) ? $context["button_activate"] : null);
                echo "</button>
\t\t\t\t<div style=\"margin:10px 0 0\"></div>
\t\t\t\t";
                // line 3662
                echo (isset($context["text_get_license3"]) ? $context["text_get_license3"] : null);
                echo "
\t\t\t\t<hr />
\t\t\t\t";
                // line 3664
                echo (isset($context["text_activate_yourself"]) ? $context["text_activate_yourself"] : null);
                echo "
\t\t\t\t<div style=\"margin:3px 0 0\"></div>
\t\t\t\t<div id=\"full\">
\t\t\t\t\t<input type=\"text\" name=\"key\" value=\"\" class=\"form-control\" style=\"width:100%;max-width:500px;margin:0 0 10px !important;\" placeholder=\"";
                // line 3667
                echo (isset($context["text_lic_key"]) ? $context["text_lic_key"] : null);
                echo "\" />
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" style=\"line-height:1.0em\" onclick=\"addKey(this);\" data-loading-text=\"<i class='fa fa-spinner fa-spin'></i>\">";
                // line 3668
                echo (isset($context["button_activate"]) ? $context["button_activate"] : null);
                echo "</button>
\t\t\t\t</div>
\t\t\t";
            } elseif (            // line 3670
(isset($context["trial_empty"]) ? $context["trial_empty"] : null)) {
                // line 3671
                echo "\t\t\t\t";
                echo (isset($context["text_welcome"]) ? $context["text_welcome"] : null);
                echo "
\t\t\t\t<div class=\"overflow\" style=\"max-width:1200px;height:350px;max-height:100%;margin:10px 0 5px;color:#666;font-size:1.0em; font-weight:400\">
\t\t\t\t\t";
                // line 3673
                echo (isset($context["license_trial"]) ? $context["license_trial"] : null);
                echo "
\t\t\t\t</div>
\t\t\t\t<div id=\"trial\">
\t\t\t\t\t<label><input type=\"checkbox\" name=\"trial\" value=\"1\" /><span></span>";
                // line 3676
                echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
                echo "</label><br /><br />
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" style=\"line-height:1.0em\" onclick=\"addTrial();\" data-loading-text=\"<i class='fa fa-spinner fa-spin'></i>\">";
                // line 3677
                echo (isset($context["button_activate_trial"]) ? $context["button_activate_trial"] : null);
                echo "</button>
\t\t\t\t</div>
\t\t\t";
            } else {
                // line 3680
                echo "\t\t\t\t<div style=\"line-height:1.7em\">
\t\t\t\t\t";
                // line 3681
                echo (isset($context["text_license_is_corrupt"]) ? $context["text_license_is_corrupt"] : null);
                echo "
\t\t\t\t</div>
\t\t\t\t<br />
\t\t\t\t<div id=\"full\">
\t\t\t\t\t<input type=\"text\" name=\"key\" value=\"\" class=\"form-control\" style=\"width:100%;max-width:500px;margin:0 0 10px !important;\" placeholder=\"";
                // line 3685
                echo (isset($context["text_lic_key"]) ? $context["text_lic_key"] : null);
                echo "\" />
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" style=\"line-height:1.0em\" onclick=\"addKey(this);\" data-loading-text=\"<i class='fa fa-spinner fa-spin'></i>\">";
                // line 3686
                echo (isset($context["button_activate"]) ? $context["button_activate"] : null);
                echo "</button>
\t\t\t\t</div>
\t\t\t";
            }
            // line 3689
            echo "\t\t</div>
\t";
        }
        // line 3691
        echo "\t</div>
\t<div class=\"popup_icons\"><div class=\"fontawesome-icon-list\"></div></div>
</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 3695
        echo "
<link href=\"../catalog/view/theme/unishop2/stylesheet/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />
<script src=\"../catalog/view/theme/unishop2/js/jquery.highlight.min.js\"></script>
<script>
\tvar uni_text_article_link = '";
        // line 3699
        echo (isset($context["text_article_links"]) ? $context["text_article_links"] : null);
        echo "',
\t\tuni_text_delete = '";
        // line 3700
        echo (isset($context["entry_delete"]) ? $context["entry_delete"] : null);
        echo "',
\t\tuni_text_title = 'Заголовок',
\t\tuni_text_link = 'Ссылка',
\t\tuni_text_link_popup = 'открывать ссылку в popup окне?',
\t\tuni_text_icon = 'Иконка',
\t\tuni_text_img = 'Картинка',
\t\tuni_text_mf_text = 'Имя',
\t\tuni_text_mf_number = 'Телефон',
\t\tuni_text_alert = '";
        // line 3708
        echo (isset($context["text_alert"]) ? $context["text_alert"] : null);
        echo "',
\t\tuni_text_alert_validate = 'У вас недостаточно прав для управления настройками шаблона',
\t\tuni_text_error_agree = '";
        // line 3710
        echo (isset($context["text_error_agree"]) ? $context["text_error_agree"] : null);
        echo "',
\t\tuni_text_error_trial = '";
        // line 3711
        echo (isset($context["text_error_trial"]) ? $context["text_error_trial"] : null);
        echo "',
\t\tuni_text_error_key_empty = '";
        // line 3712
        echo (isset($context["text_error_key_empty"]) ? $context["text_error_key_empty"] : null);
        echo "',
\t\tuni_text_error_key = '";
        // line 3713
        echo (isset($context["text_error_key"]) ? $context["text_error_key"] : null);
        echo "',
\t\tuni_text_full_key_added = '";
        // line 3714
        echo (isset($context["text_full_key_added"]) ? $context["text_full_key_added"] : null);
        echo "',
\t\tuni_text_error_key2 = '";
        // line 3715
        echo (isset($context["text_error_key2"]) ? $context["text_error_key2"] : null);
        echo "',
\t\tuni_text_search_settings = '";
        // line 3716
        echo (isset($context["text_search_settings"]) ? $context["text_search_settings"] : null);
        echo "',
\t\tuni_text_sort = '";
        // line 3717
        echo (isset($context["text_headerlinks2_sort"]) ? $context["text_headerlinks2_sort"] : null);
        echo "',
\t\tuni_text_column = '";
        // line 3718
        echo (isset($context["text_headerlinks2_column"]) ? $context["text_headerlinks2_column"] : null);
        echo "',
\t\tuni_img_placeholder = '";
        // line 3719
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "';
</script>
<script>
\t\$('#content .nav li a').each(function() {
\t\t\$(this).addClass(\$(this).attr('href').replace('#', ''));
\t});
\t\$(window).scroll(function(){
\t\tif(\$('.tooltip').length) \$('.tooltip').remove();
\t});
</script>
";
        // line 3729
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/uni_settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  10992 => 3729,  10979 => 3719,  10975 => 3718,  10971 => 3717,  10967 => 3716,  10963 => 3715,  10959 => 3714,  10955 => 3713,  10951 => 3712,  10947 => 3711,  10943 => 3710,  10938 => 3708,  10927 => 3700,  10923 => 3699,  10917 => 3695,  10911 => 3691,  10907 => 3689,  10901 => 3686,  10897 => 3685,  10890 => 3681,  10887 => 3680,  10881 => 3677,  10877 => 3676,  10871 => 3673,  10865 => 3671,  10863 => 3670,  10858 => 3668,  10854 => 3667,  10848 => 3664,  10843 => 3662,  10838 => 3660,  10833 => 3658,  10828 => 3656,  10822 => 3654,  10820 => 3653,  10817 => 3652,  10811 => 3649,  10807 => 3648,  10802 => 3645,  10794 => 3640,  10788 => 3637,  10784 => 3636,  10780 => 3635,  10773 => 3631,  10769 => 3630,  10764 => 3628,  10756 => 3623,  10752 => 3621,  10750 => 3620,  10742 => 3615,  10738 => 3614,  10733 => 3612,  10728 => 3610,  10724 => 3609,  10719 => 3607,  10715 => 3606,  10710 => 3603,  10699 => 3600,  10694 => 3599,  10690 => 3598,  10686 => 3596,  10671 => 3594,  10667 => 3593,  10661 => 3590,  10656 => 3587,  10645 => 3584,  10640 => 3583,  10636 => 3582,  10632 => 3580,  10617 => 3578,  10613 => 3577,  10607 => 3574,  10602 => 3571,  10591 => 3568,  10586 => 3567,  10582 => 3566,  10578 => 3564,  10563 => 3562,  10559 => 3561,  10553 => 3558,  10546 => 3554,  10542 => 3553,  10536 => 3550,  10527 => 3546,  10521 => 3545,  10515 => 3544,  10509 => 3541,  10502 => 3537,  10493 => 3531,  10489 => 3530,  10484 => 3527,  10478 => 3526,  10468 => 3524,  10462 => 3522,  10459 => 3521,  10455 => 3520,  10449 => 3517,  10444 => 3514,  10438 => 3513,  10428 => 3511,  10422 => 3509,  10419 => 3508,  10415 => 3507,  10409 => 3504,  10403 => 3500,  10390 => 3498,  10386 => 3497,  10383 => 3496,  10381 => 3495,  10376 => 3493,  10370 => 3490,  10366 => 3489,  10361 => 3487,  10357 => 3486,  10352 => 3484,  10348 => 3483,  10342 => 3480,  10338 => 3479,  10333 => 3477,  10328 => 3475,  10324 => 3474,  10319 => 3472,  10315 => 3471,  10309 => 3468,  10304 => 3466,  10300 => 3465,  10295 => 3463,  10291 => 3462,  10286 => 3460,  10282 => 3459,  10277 => 3457,  10270 => 3453,  10266 => 3452,  10262 => 3451,  10256 => 3450,  10252 => 3449,  10242 => 3442,  10237 => 3440,  10231 => 3437,  10227 => 3436,  10222 => 3434,  10216 => 3431,  10212 => 3430,  10207 => 3428,  10201 => 3425,  10197 => 3424,  10192 => 3422,  10183 => 3418,  10177 => 3415,  10172 => 3412,  10166 => 3411,  10156 => 3409,  10150 => 3407,  10147 => 3406,  10143 => 3405,  10137 => 3402,  10132 => 3399,  10126 => 3398,  10116 => 3396,  10110 => 3394,  10107 => 3393,  10103 => 3392,  10097 => 3389,  10092 => 3387,  10086 => 3384,  10082 => 3383,  10077 => 3381,  10072 => 3379,  10065 => 3375,  10060 => 3373,  10054 => 3370,  10047 => 3368,  10041 => 3365,  10036 => 3363,  10029 => 3359,  10025 => 3358,  10021 => 3357,  10017 => 3356,  10012 => 3354,  10007 => 3352,  10002 => 3350,  9998 => 3349,  9993 => 3347,  9987 => 3344,  9983 => 3343,  9979 => 3342,  9975 => 3341,  9970 => 3339,  9964 => 3336,  9960 => 3335,  9956 => 3334,  9952 => 3333,  9947 => 3331,  9941 => 3328,  9937 => 3327,  9933 => 3326,  9929 => 3325,  9924 => 3323,  9919 => 3321,  9912 => 3317,  9908 => 3316,  9904 => 3315,  9899 => 3313,  9894 => 3311,  9889 => 3309,  9885 => 3308,  9880 => 3306,  9874 => 3303,  9870 => 3302,  9865 => 3300,  9860 => 3298,  9855 => 3296,  9851 => 3295,  9846 => 3293,  9842 => 3292,  9837 => 3290,  9833 => 3289,  9828 => 3287,  9824 => 3286,  9819 => 3284,  9815 => 3283,  9810 => 3281,  9803 => 3277,  9799 => 3276,  9795 => 3275,  9791 => 3274,  9780 => 3266,  9776 => 3265,  9770 => 3262,  9765 => 3260,  9761 => 3259,  9756 => 3257,  9752 => 3256,  9745 => 3252,  9741 => 3251,  9735 => 3248,  9730 => 3246,  9726 => 3245,  9719 => 3241,  9715 => 3240,  9709 => 3237,  9702 => 3233,  9698 => 3232,  9694 => 3231,  9688 => 3228,  9683 => 3226,  9679 => 3225,  9673 => 3221,  9660 => 3219,  9656 => 3218,  9653 => 3217,  9651 => 3216,  9648 => 3215,  9635 => 3213,  9631 => 3212,  9628 => 3211,  9626 => 3210,  9620 => 3207,  9615 => 3205,  9611 => 3204,  9605 => 3201,  9601 => 3200,  9596 => 3198,  9592 => 3197,  9587 => 3195,  9583 => 3194,  9578 => 3192,  9574 => 3191,  9569 => 3189,  9565 => 3188,  9560 => 3186,  9556 => 3185,  9551 => 3183,  9547 => 3182,  9542 => 3180,  9538 => 3179,  9533 => 3177,  9529 => 3176,  9524 => 3174,  9520 => 3173,  9515 => 3171,  9510 => 3169,  9506 => 3168,  9501 => 3166,  9497 => 3165,  9492 => 3163,  9487 => 3161,  9483 => 3160,  9478 => 3158,  9474 => 3157,  9469 => 3155,  9464 => 3153,  9460 => 3152,  9453 => 3148,  9447 => 3147,  9438 => 3141,  9434 => 3140,  9427 => 3136,  9423 => 3135,  9418 => 3133,  9413 => 3131,  9409 => 3130,  9404 => 3128,  9400 => 3127,  9395 => 3125,  9391 => 3124,  9384 => 3120,  9380 => 3119,  9370 => 3112,  9366 => 3111,  9361 => 3109,  9356 => 3107,  9352 => 3106,  9346 => 3103,  9342 => 3102,  9337 => 3100,  9332 => 3098,  9328 => 3097,  9323 => 3095,  9317 => 3092,  9313 => 3091,  9308 => 3089,  9303 => 3087,  9299 => 3086,  9293 => 3083,  9289 => 3082,  9284 => 3080,  9279 => 3078,  9275 => 3077,  9270 => 3075,  9262 => 3072,  9257 => 3070,  9253 => 3069,  9248 => 3067,  9244 => 3066,  9239 => 3064,  9234 => 3062,  9230 => 3061,  9225 => 3059,  9221 => 3058,  9216 => 3056,  9209 => 3052,  9204 => 3050,  9198 => 3047,  9193 => 3045,  9188 => 3043,  9184 => 3042,  9179 => 3040,  9173 => 3037,  9169 => 3036,  9164 => 3034,  9159 => 3031,  9147 => 3027,  9141 => 3026,  9135 => 3025,  9129 => 3023,  9125 => 3022,  9121 => 3020,  9106 => 3018,  9102 => 3017,  9096 => 3014,  9091 => 3012,  9086 => 3009,  9073 => 3007,  9069 => 3006,  9066 => 3005,  9064 => 3004,  9059 => 3002,  9053 => 2999,  9049 => 2998,  9044 => 2996,  9039 => 2993,  9027 => 2989,  9021 => 2988,  9015 => 2987,  9009 => 2985,  9005 => 2984,  9001 => 2982,  8986 => 2980,  8982 => 2979,  8976 => 2976,  8971 => 2974,  8965 => 2971,  8961 => 2970,  8956 => 2968,  8950 => 2965,  8946 => 2964,  8941 => 2962,  8936 => 2959,  8924 => 2955,  8918 => 2954,  8912 => 2953,  8906 => 2951,  8902 => 2950,  8898 => 2948,  8883 => 2946,  8879 => 2945,  8873 => 2942,  8868 => 2940,  8861 => 2936,  8857 => 2935,  8853 => 2934,  8842 => 2928,  8837 => 2926,  8833 => 2925,  8828 => 2923,  8824 => 2922,  8819 => 2920,  8814 => 2918,  8810 => 2917,  8805 => 2915,  8801 => 2914,  8796 => 2912,  8792 => 2911,  8787 => 2909,  8781 => 2906,  8777 => 2905,  8772 => 2903,  8768 => 2902,  8763 => 2899,  8752 => 2896,  8747 => 2895,  8743 => 2894,  8739 => 2892,  8724 => 2890,  8720 => 2889,  8714 => 2886,  8709 => 2884,  8705 => 2883,  8699 => 2880,  8695 => 2879,  8689 => 2875,  8678 => 2872,  8673 => 2871,  8669 => 2870,  8665 => 2868,  8650 => 2866,  8646 => 2865,  8640 => 2862,  8635 => 2860,  8631 => 2859,  8626 => 2856,  8615 => 2853,  8610 => 2852,  8606 => 2851,  8602 => 2849,  8587 => 2847,  8583 => 2846,  8577 => 2843,  8572 => 2841,  8568 => 2840,  8563 => 2837,  8552 => 2834,  8547 => 2833,  8543 => 2832,  8539 => 2830,  8524 => 2828,  8520 => 2827,  8514 => 2824,  8509 => 2822,  8505 => 2821,  8500 => 2818,  8489 => 2815,  8484 => 2814,  8480 => 2813,  8476 => 2811,  8461 => 2809,  8457 => 2808,  8451 => 2805,  8446 => 2803,  8442 => 2802,  8437 => 2800,  8433 => 2799,  8428 => 2797,  8424 => 2796,  8419 => 2794,  8413 => 2790,  8402 => 2787,  8397 => 2786,  8393 => 2785,  8389 => 2783,  8374 => 2781,  8370 => 2780,  8364 => 2777,  8359 => 2775,  8355 => 2774,  8350 => 2771,  8339 => 2768,  8334 => 2767,  8330 => 2766,  8326 => 2764,  8311 => 2762,  8307 => 2761,  8301 => 2758,  8296 => 2756,  8292 => 2755,  8287 => 2753,  8283 => 2752,  8278 => 2749,  8267 => 2746,  8262 => 2745,  8258 => 2744,  8254 => 2742,  8239 => 2740,  8235 => 2739,  8229 => 2736,  8224 => 2734,  8220 => 2733,  8215 => 2731,  8211 => 2730,  8206 => 2727,  8195 => 2724,  8190 => 2723,  8186 => 2722,  8182 => 2720,  8167 => 2718,  8163 => 2717,  8157 => 2714,  8152 => 2712,  8148 => 2711,  8142 => 2707,  8131 => 2705,  8126 => 2704,  8122 => 2703,  8118 => 2701,  8103 => 2699,  8099 => 2698,  8093 => 2695,  8088 => 2693,  8084 => 2692,  8079 => 2689,  8068 => 2686,  8063 => 2685,  8059 => 2684,  8055 => 2682,  8040 => 2680,  8036 => 2679,  8030 => 2676,  8024 => 2673,  8020 => 2672,  8015 => 2670,  8011 => 2669,  8002 => 2665,  7998 => 2664,  7994 => 2663,  7990 => 2662,  7986 => 2661,  7980 => 2660,  7971 => 2654,  7967 => 2653,  7962 => 2651,  7958 => 2650,  7953 => 2648,  7949 => 2647,  7944 => 2644,  7933 => 2641,  7928 => 2640,  7924 => 2639,  7920 => 2637,  7905 => 2635,  7901 => 2634,  7895 => 2631,  7890 => 2629,  7886 => 2628,  7881 => 2625,  7870 => 2622,  7865 => 2621,  7861 => 2620,  7857 => 2618,  7842 => 2616,  7838 => 2615,  7832 => 2612,  7827 => 2610,  7823 => 2609,  7818 => 2606,  7807 => 2603,  7802 => 2602,  7798 => 2601,  7794 => 2599,  7779 => 2597,  7775 => 2596,  7769 => 2593,  7764 => 2590,  7753 => 2587,  7748 => 2586,  7744 => 2585,  7740 => 2583,  7725 => 2581,  7721 => 2580,  7715 => 2577,  7710 => 2575,  7706 => 2574,  7701 => 2571,  7690 => 2568,  7685 => 2567,  7681 => 2566,  7677 => 2564,  7662 => 2562,  7658 => 2561,  7652 => 2558,  7647 => 2556,  7643 => 2555,  7638 => 2553,  7634 => 2552,  7628 => 2549,  7624 => 2548,  7619 => 2546,  7615 => 2545,  7610 => 2542,  7599 => 2539,  7594 => 2538,  7590 => 2537,  7586 => 2535,  7571 => 2533,  7567 => 2532,  7561 => 2529,  7555 => 2525,  7544 => 2523,  7539 => 2522,  7535 => 2521,  7531 => 2519,  7516 => 2517,  7512 => 2516,  7506 => 2513,  7501 => 2511,  7497 => 2510,  7490 => 2506,  7486 => 2505,  7476 => 2498,  7472 => 2497,  7467 => 2495,  7462 => 2493,  7458 => 2492,  7451 => 2488,  7447 => 2487,  7442 => 2485,  7437 => 2483,  7433 => 2482,  7426 => 2478,  7422 => 2477,  7417 => 2475,  7412 => 2473,  7408 => 2472,  7401 => 2468,  7397 => 2467,  7392 => 2465,  7387 => 2463,  7383 => 2462,  7376 => 2458,  7372 => 2457,  7367 => 2455,  7362 => 2453,  7358 => 2452,  7351 => 2448,  7347 => 2447,  7342 => 2445,  7337 => 2443,  7333 => 2442,  7326 => 2438,  7322 => 2437,  7317 => 2435,  7312 => 2432,  7301 => 2429,  7296 => 2428,  7292 => 2427,  7288 => 2425,  7273 => 2423,  7269 => 2422,  7263 => 2419,  7257 => 2415,  7246 => 2413,  7241 => 2412,  7237 => 2411,  7233 => 2409,  7218 => 2407,  7214 => 2406,  7208 => 2403,  7203 => 2401,  7199 => 2400,  7192 => 2396,  7188 => 2395,  7183 => 2393,  7178 => 2390,  7167 => 2387,  7162 => 2386,  7158 => 2385,  7154 => 2383,  7139 => 2381,  7135 => 2380,  7129 => 2377,  7121 => 2372,  7115 => 2369,  7110 => 2367,  7106 => 2366,  7099 => 2362,  7095 => 2361,  7090 => 2359,  7085 => 2356,  7074 => 2353,  7069 => 2352,  7065 => 2351,  7061 => 2349,  7046 => 2347,  7042 => 2346,  7036 => 2343,  7028 => 2338,  7022 => 2335,  7017 => 2333,  7013 => 2332,  7006 => 2328,  7002 => 2327,  6997 => 2325,  6992 => 2322,  6981 => 2319,  6976 => 2318,  6972 => 2317,  6968 => 2315,  6953 => 2313,  6949 => 2312,  6943 => 2309,  6938 => 2307,  6934 => 2306,  6929 => 2304,  6925 => 2303,  6918 => 2299,  6914 => 2298,  6910 => 2297,  6906 => 2296,  6902 => 2295,  6898 => 2294,  6894 => 2293,  6890 => 2292,  6886 => 2291,  6882 => 2290,  6873 => 2284,  6869 => 2283,  6864 => 2280,  6851 => 2277,  6846 => 2276,  6842 => 2275,  6838 => 2273,  6823 => 2271,  6819 => 2270,  6813 => 2267,  6806 => 2263,  6797 => 2257,  6793 => 2256,  6788 => 2254,  6783 => 2252,  6779 => 2251,  6774 => 2249,  6770 => 2248,  6765 => 2246,  6761 => 2245,  6756 => 2243,  6750 => 2239,  6739 => 2236,  6733 => 2235,  6727 => 2234,  6721 => 2233,  6715 => 2232,  6709 => 2231,  6704 => 2230,  6700 => 2229,  6696 => 2227,  6681 => 2225,  6677 => 2224,  6671 => 2221,  6665 => 2218,  6661 => 2217,  6657 => 2216,  6653 => 2215,  6649 => 2214,  6645 => 2213,  6640 => 2211,  6633 => 2207,  6629 => 2206,  6625 => 2205,  6619 => 2202,  6614 => 2199,  6601 => 2197,  6597 => 2196,  6594 => 2195,  6592 => 2194,  6587 => 2192,  6580 => 2188,  6576 => 2187,  6572 => 2186,  6567 => 2184,  6562 => 2182,  6558 => 2181,  6549 => 2177,  6545 => 2176,  6541 => 2175,  6532 => 2169,  6528 => 2168,  6523 => 2166,  6519 => 2165,  6514 => 2163,  6510 => 2162,  6505 => 2160,  6498 => 2156,  6494 => 2155,  6489 => 2153,  6483 => 2150,  6479 => 2149,  6474 => 2147,  6469 => 2145,  6465 => 2144,  6458 => 2140,  6454 => 2139,  6448 => 2136,  6443 => 2134,  6439 => 2133,  6432 => 2129,  6428 => 2128,  6422 => 2125,  6417 => 2123,  6413 => 2122,  6408 => 2120,  6404 => 2119,  6399 => 2117,  6394 => 2115,  6390 => 2114,  6383 => 2110,  6379 => 2109,  6373 => 2106,  6366 => 2102,  6362 => 2101,  6356 => 2098,  6351 => 2096,  6347 => 2095,  6342 => 2093,  6338 => 2092,  6333 => 2090,  6327 => 2087,  6323 => 2086,  6318 => 2084,  6314 => 2083,  6309 => 2081,  6305 => 2080,  6300 => 2078,  6296 => 2077,  6290 => 2074,  6286 => 2073,  6281 => 2071,  6276 => 2069,  6272 => 2068,  6267 => 2066,  6261 => 2063,  6257 => 2062,  6252 => 2060,  6248 => 2059,  6243 => 2057,  6239 => 2056,  6234 => 2053,  6221 => 2051,  6217 => 2050,  6214 => 2049,  6212 => 2048,  6207 => 2046,  6201 => 2043,  6196 => 2041,  6190 => 2038,  6185 => 2036,  6180 => 2033,  6167 => 2031,  6163 => 2030,  6160 => 2029,  6158 => 2028,  6153 => 2026,  6147 => 2023,  6143 => 2022,  6139 => 2021,  6135 => 2020,  6130 => 2018,  6125 => 2015,  6112 => 2013,  6108 => 2012,  6105 => 2011,  6103 => 2010,  6098 => 2008,  6089 => 2004,  6083 => 2003,  6077 => 2002,  6071 => 1999,  6064 => 1994,  6051 => 1992,  6047 => 1991,  6038 => 1984,  6025 => 1982,  6021 => 1981,  6012 => 1974,  5999 => 1972,  5995 => 1971,  5986 => 1964,  5973 => 1962,  5969 => 1961,  5960 => 1954,  5947 => 1952,  5943 => 1951,  5937 => 1947,  5934 => 1946,  5932 => 1945,  5927 => 1943,  5921 => 1939,  5913 => 1936,  5903 => 1934,  5896 => 1933,  5892 => 1932,  5889 => 1931,  5884 => 1930,  5882 => 1929,  5877 => 1927,  5870 => 1923,  5866 => 1922,  5861 => 1920,  5856 => 1918,  5852 => 1917,  5846 => 1914,  5841 => 1912,  5835 => 1908,  5826 => 1905,  5820 => 1904,  5810 => 1903,  5807 => 1902,  5803 => 1901,  5796 => 1897,  5791 => 1895,  5787 => 1894,  5780 => 1890,  5774 => 1889,  5770 => 1888,  5766 => 1887,  5762 => 1886,  5753 => 1879,  5742 => 1876,  5737 => 1875,  5733 => 1874,  5729 => 1872,  5714 => 1870,  5710 => 1869,  5704 => 1866,  5699 => 1864,  5695 => 1863,  5690 => 1860,  5679 => 1857,  5674 => 1856,  5670 => 1855,  5666 => 1853,  5651 => 1851,  5647 => 1850,  5641 => 1847,  5636 => 1845,  5632 => 1844,  5627 => 1841,  5616 => 1838,  5611 => 1837,  5607 => 1836,  5603 => 1834,  5588 => 1832,  5584 => 1831,  5578 => 1828,  5573 => 1826,  5569 => 1825,  5563 => 1821,  5552 => 1818,  5547 => 1817,  5543 => 1816,  5539 => 1814,  5524 => 1812,  5520 => 1811,  5514 => 1808,  5509 => 1805,  5498 => 1802,  5493 => 1801,  5489 => 1800,  5485 => 1798,  5470 => 1796,  5466 => 1795,  5460 => 1792,  5455 => 1790,  5451 => 1789,  5446 => 1786,  5435 => 1783,  5430 => 1782,  5426 => 1781,  5422 => 1779,  5407 => 1777,  5403 => 1776,  5397 => 1773,  5392 => 1770,  5381 => 1767,  5376 => 1766,  5372 => 1765,  5368 => 1763,  5353 => 1761,  5349 => 1760,  5343 => 1757,  5337 => 1754,  5332 => 1752,  5328 => 1751,  5323 => 1749,  5319 => 1748,  5314 => 1746,  5309 => 1744,  5305 => 1743,  5300 => 1741,  5296 => 1740,  5291 => 1738,  5285 => 1735,  5281 => 1734,  5276 => 1732,  5272 => 1731,  5266 => 1728,  5262 => 1727,  5257 => 1725,  5252 => 1722,  5241 => 1719,  5236 => 1718,  5232 => 1717,  5228 => 1715,  5213 => 1713,  5209 => 1712,  5203 => 1709,  5198 => 1707,  5194 => 1706,  5189 => 1704,  5185 => 1703,  5180 => 1701,  5176 => 1700,  5169 => 1696,  5165 => 1695,  5161 => 1694,  5157 => 1693,  5146 => 1687,  5141 => 1685,  5137 => 1684,  5132 => 1682,  5128 => 1681,  5123 => 1679,  5118 => 1677,  5114 => 1676,  5109 => 1674,  5105 => 1673,  5100 => 1671,  5096 => 1670,  5091 => 1668,  5085 => 1665,  5081 => 1664,  5076 => 1662,  5072 => 1661,  5067 => 1658,  5056 => 1655,  5051 => 1654,  5047 => 1653,  5043 => 1651,  5028 => 1649,  5024 => 1648,  5018 => 1645,  5013 => 1643,  5009 => 1642,  5004 => 1639,  4993 => 1636,  4988 => 1635,  4984 => 1634,  4980 => 1632,  4965 => 1630,  4961 => 1629,  4955 => 1626,  4950 => 1624,  4946 => 1623,  4941 => 1621,  4937 => 1620,  4932 => 1617,  4921 => 1614,  4916 => 1613,  4912 => 1612,  4908 => 1610,  4893 => 1608,  4889 => 1607,  4883 => 1604,  4878 => 1602,  4874 => 1601,  4869 => 1599,  4865 => 1598,  4860 => 1595,  4849 => 1592,  4844 => 1591,  4840 => 1590,  4836 => 1588,  4821 => 1586,  4817 => 1585,  4811 => 1582,  4806 => 1579,  4795 => 1576,  4790 => 1575,  4786 => 1574,  4782 => 1572,  4767 => 1570,  4763 => 1569,  4757 => 1566,  4751 => 1563,  4747 => 1562,  4740 => 1558,  4736 => 1557,  4730 => 1554,  4725 => 1552,  4721 => 1551,  4716 => 1549,  4709 => 1545,  4705 => 1544,  4699 => 1541,  4694 => 1539,  4690 => 1538,  4685 => 1536,  4678 => 1532,  4674 => 1531,  4668 => 1528,  4661 => 1524,  4657 => 1523,  4651 => 1520,  4646 => 1518,  4642 => 1517,  4637 => 1515,  4628 => 1511,  4622 => 1510,  4616 => 1509,  4610 => 1506,  4601 => 1502,  4595 => 1501,  4589 => 1500,  4583 => 1499,  4577 => 1496,  4572 => 1494,  4568 => 1493,  4563 => 1491,  4559 => 1490,  4554 => 1488,  4548 => 1485,  4544 => 1484,  4539 => 1482,  4533 => 1479,  4528 => 1477,  4523 => 1475,  4517 => 1472,  4513 => 1471,  4508 => 1469,  4502 => 1466,  4498 => 1465,  4493 => 1463,  4488 => 1460,  4476 => 1456,  4470 => 1455,  4464 => 1454,  4458 => 1452,  4454 => 1451,  4450 => 1449,  4435 => 1447,  4431 => 1446,  4425 => 1443,  4420 => 1441,  4416 => 1440,  4411 => 1438,  4407 => 1437,  4400 => 1433,  4396 => 1432,  4390 => 1431,  4381 => 1424,  4370 => 1421,  4365 => 1420,  4361 => 1419,  4357 => 1417,  4342 => 1415,  4338 => 1414,  4332 => 1411,  4327 => 1408,  4316 => 1405,  4311 => 1404,  4307 => 1403,  4303 => 1401,  4288 => 1399,  4284 => 1398,  4278 => 1395,  4273 => 1392,  4262 => 1389,  4257 => 1388,  4253 => 1387,  4249 => 1385,  4234 => 1383,  4230 => 1382,  4224 => 1379,  4219 => 1376,  4208 => 1373,  4203 => 1372,  4199 => 1371,  4195 => 1369,  4180 => 1367,  4176 => 1366,  4170 => 1363,  4165 => 1360,  4154 => 1357,  4149 => 1356,  4145 => 1355,  4141 => 1353,  4126 => 1351,  4122 => 1350,  4116 => 1347,  4110 => 1343,  4099 => 1341,  4094 => 1340,  4090 => 1339,  4086 => 1337,  4071 => 1335,  4067 => 1334,  4061 => 1331,  4056 => 1328,  4045 => 1325,  4040 => 1324,  4036 => 1323,  4032 => 1321,  4017 => 1319,  4013 => 1318,  4007 => 1315,  4002 => 1313,  3996 => 1310,  3992 => 1309,  3987 => 1307,  3983 => 1306,  3978 => 1304,  3974 => 1303,  3967 => 1299,  3963 => 1298,  3957 => 1295,  3952 => 1292,  3941 => 1289,  3936 => 1288,  3932 => 1287,  3928 => 1285,  3913 => 1283,  3909 => 1282,  3903 => 1279,  3898 => 1277,  3894 => 1276,  3889 => 1273,  3878 => 1270,  3873 => 1269,  3869 => 1268,  3865 => 1266,  3850 => 1264,  3846 => 1263,  3840 => 1260,  3832 => 1255,  3828 => 1254,  3822 => 1251,  3814 => 1246,  3810 => 1245,  3804 => 1242,  3799 => 1239,  3788 => 1236,  3783 => 1235,  3779 => 1234,  3775 => 1232,  3760 => 1230,  3756 => 1229,  3750 => 1226,  3745 => 1224,  3741 => 1223,  3736 => 1221,  3732 => 1220,  3727 => 1218,  3721 => 1215,  3717 => 1214,  3712 => 1211,  3700 => 1207,  3694 => 1206,  3688 => 1205,  3682 => 1203,  3678 => 1202,  3674 => 1200,  3659 => 1198,  3655 => 1197,  3649 => 1194,  3644 => 1192,  3640 => 1191,  3635 => 1189,  3629 => 1185,  3616 => 1182,  3611 => 1181,  3607 => 1180,  3603 => 1178,  3588 => 1176,  3584 => 1175,  3578 => 1172,  3573 => 1169,  3561 => 1165,  3555 => 1164,  3549 => 1163,  3543 => 1161,  3539 => 1160,  3535 => 1158,  3520 => 1156,  3516 => 1155,  3510 => 1152,  3505 => 1150,  3501 => 1149,  3496 => 1147,  3491 => 1145,  3487 => 1144,  3482 => 1142,  3478 => 1141,  3473 => 1139,  3466 => 1135,  3462 => 1134,  3458 => 1133,  3453 => 1131,  3448 => 1128,  3439 => 1125,  3436 => 1124,  3429 => 1122,  3427 => 1121,  3419 => 1120,  3411 => 1119,  3399 => 1116,  3389 => 1115,  3379 => 1114,  3371 => 1113,  3367 => 1111,  3363 => 1110,  3358 => 1109,  3355 => 1108,  3351 => 1107,  3347 => 1105,  3332 => 1103,  3328 => 1102,  3322 => 1099,  3317 => 1096,  3304 => 1094,  3300 => 1093,  3297 => 1092,  3295 => 1091,  3290 => 1089,  3282 => 1084,  3278 => 1083,  3272 => 1080,  3265 => 1076,  3261 => 1075,  3255 => 1072,  3250 => 1070,  3246 => 1069,  3241 => 1067,  3236 => 1065,  3232 => 1064,  3225 => 1060,  3221 => 1059,  3215 => 1056,  3210 => 1054,  3206 => 1053,  3201 => 1051,  3192 => 1047,  3186 => 1046,  3180 => 1045,  3174 => 1042,  3165 => 1038,  3159 => 1037,  3153 => 1036,  3147 => 1035,  3141 => 1032,  3136 => 1030,  3132 => 1029,  3127 => 1027,  3123 => 1026,  3118 => 1024,  3113 => 1022,  3109 => 1021,  3104 => 1018,  3098 => 1017,  3088 => 1015,  3082 => 1013,  3079 => 1012,  3075 => 1011,  3069 => 1008,  3064 => 1005,  3058 => 1004,  3048 => 1002,  3042 => 1000,  3039 => 999,  3035 => 998,  3029 => 995,  3024 => 993,  3017 => 989,  3013 => 988,  3009 => 987,  3005 => 986,  3001 => 985,  2997 => 984,  2991 => 983,  2981 => 976,  2977 => 975,  2973 => 974,  2968 => 972,  2963 => 969,  2956 => 967,  2944 => 965,  2936 => 964,  2925 => 962,  2915 => 961,  2905 => 960,  2897 => 959,  2889 => 958,  2886 => 957,  2882 => 956,  2877 => 955,  2873 => 954,  2869 => 952,  2854 => 950,  2850 => 949,  2844 => 946,  2837 => 942,  2834 => 941,  2821 => 939,  2817 => 938,  2811 => 936,  2809 => 935,  2803 => 932,  2796 => 928,  2792 => 927,  2787 => 925,  2781 => 922,  2777 => 921,  2772 => 919,  2766 => 916,  2761 => 914,  2755 => 911,  2750 => 909,  2743 => 905,  2739 => 904,  2734 => 902,  2728 => 899,  2724 => 898,  2719 => 896,  2714 => 894,  2710 => 893,  2703 => 889,  2699 => 888,  2695 => 887,  2687 => 881,  2674 => 878,  2667 => 876,  2663 => 875,  2660 => 874,  2656 => 873,  2651 => 871,  2646 => 868,  2633 => 866,  2629 => 865,  2626 => 864,  2624 => 862,  2619 => 860,  2613 => 856,  2600 => 854,  2596 => 853,  2592 => 851,  2586 => 850,  2584 => 849,  2579 => 847,  2573 => 846,  2570 => 845,  2557 => 843,  2553 => 842,  2549 => 841,  2546 => 840,  2542 => 839,  2539 => 838,  2536 => 826,  2534 => 825,  2529 => 823,  2523 => 819,  2512 => 816,  2507 => 815,  2503 => 814,  2499 => 812,  2484 => 810,  2480 => 809,  2474 => 806,  2467 => 802,  2463 => 801,  2459 => 800,  2455 => 799,  2450 => 797,  2445 => 794,  2436 => 791,  2433 => 790,  2422 => 788,  2417 => 787,  2415 => 786,  2412 => 785,  2406 => 784,  2404 => 783,  2399 => 781,  2396 => 780,  2383 => 778,  2379 => 777,  2373 => 776,  2363 => 775,  2353 => 774,  2350 => 773,  2345 => 772,  2343 => 771,  2338 => 770,  2334 => 769,  2330 => 767,  2315 => 765,  2311 => 764,  2305 => 761,  2300 => 758,  2293 => 756,  2280 => 753,  2272 => 752,  2264 => 751,  2261 => 750,  2256 => 749,  2254 => 748,  2249 => 747,  2245 => 746,  2241 => 744,  2226 => 742,  2222 => 741,  2216 => 738,  2210 => 735,  2206 => 734,  2202 => 733,  2197 => 731,  2191 => 728,  2185 => 725,  2181 => 724,  2176 => 722,  2170 => 719,  2166 => 718,  2161 => 716,  2155 => 713,  2151 => 712,  2146 => 710,  2139 => 706,  2135 => 705,  2129 => 702,  2122 => 698,  2118 => 697,  2112 => 694,  2107 => 692,  2103 => 691,  2096 => 687,  2092 => 686,  2088 => 685,  2084 => 684,  2074 => 677,  2070 => 676,  2065 => 674,  2059 => 671,  2055 => 670,  2050 => 668,  2044 => 665,  2039 => 663,  2033 => 660,  2029 => 659,  2025 => 658,  2020 => 656,  2015 => 654,  2010 => 651,  2006 => 650,  1997 => 648,  1994 => 647,  1981 => 645,  1977 => 644,  1972 => 641,  1966 => 640,  1964 => 639,  1952 => 636,  1941 => 634,  1931 => 633,  1923 => 631,  1917 => 630,  1915 => 629,  1905 => 627,  1899 => 626,  1897 => 625,  1891 => 622,  1877 => 621,  1863 => 620,  1858 => 617,  1853 => 616,  1851 => 615,  1845 => 612,  1833 => 611,  1821 => 610,  1816 => 607,  1811 => 606,  1809 => 605,  1804 => 602,  1791 => 600,  1787 => 599,  1782 => 597,  1776 => 594,  1766 => 593,  1756 => 592,  1740 => 587,  1735 => 585,  1727 => 584,  1722 => 582,  1716 => 581,  1708 => 580,  1703 => 578,  1699 => 577,  1691 => 575,  1687 => 574,  1682 => 573,  1680 => 572,  1675 => 571,  1671 => 570,  1667 => 568,  1652 => 566,  1648 => 565,  1642 => 562,  1637 => 560,  1630 => 556,  1626 => 555,  1621 => 553,  1615 => 550,  1611 => 549,  1606 => 547,  1600 => 544,  1595 => 542,  1589 => 539,  1585 => 538,  1580 => 536,  1575 => 534,  1570 => 531,  1557 => 529,  1553 => 528,  1550 => 527,  1548 => 513,  1543 => 511,  1537 => 508,  1533 => 507,  1528 => 505,  1522 => 502,  1518 => 501,  1513 => 499,  1507 => 496,  1502 => 494,  1497 => 492,  1493 => 491,  1487 => 488,  1483 => 487,  1478 => 485,  1472 => 482,  1468 => 481,  1463 => 479,  1458 => 477,  1454 => 476,  1449 => 474,  1442 => 470,  1438 => 469,  1432 => 466,  1427 => 464,  1423 => 463,  1418 => 461,  1414 => 460,  1409 => 457,  1401 => 454,  1392 => 451,  1378 => 448,  1373 => 446,  1365 => 445,  1358 => 443,  1350 => 442,  1345 => 440,  1341 => 439,  1333 => 437,  1330 => 436,  1326 => 435,  1322 => 434,  1317 => 433,  1313 => 432,  1309 => 430,  1294 => 428,  1290 => 427,  1284 => 424,  1279 => 421,  1266 => 419,  1262 => 418,  1259 => 417,  1257 => 416,  1252 => 414,  1247 => 411,  1236 => 408,  1231 => 407,  1227 => 406,  1223 => 404,  1208 => 402,  1204 => 401,  1198 => 398,  1193 => 395,  1180 => 393,  1176 => 392,  1173 => 391,  1171 => 390,  1166 => 388,  1159 => 384,  1155 => 383,  1151 => 382,  1146 => 380,  1140 => 377,  1136 => 376,  1131 => 373,  1118 => 370,  1113 => 369,  1109 => 368,  1105 => 366,  1090 => 364,  1086 => 363,  1080 => 360,  1075 => 358,  1071 => 357,  1066 => 354,  1057 => 351,  1054 => 350,  1043 => 348,  1039 => 347,  1032 => 342,  1025 => 340,  1023 => 339,  1017 => 336,  1014 => 335,  1001 => 333,  997 => 332,  989 => 329,  979 => 328,  963 => 323,  958 => 321,  950 => 320,  943 => 318,  935 => 317,  930 => 315,  926 => 314,  918 => 312,  914 => 311,  910 => 310,  905 => 309,  902 => 308,  898 => 307,  894 => 305,  879 => 303,  875 => 302,  869 => 299,  864 => 296,  855 => 293,  852 => 292,  841 => 290,  837 => 289,  830 => 284,  824 => 283,  821 => 282,  819 => 281,  812 => 277,  809 => 276,  796 => 274,  792 => 273,  784 => 270,  774 => 269,  764 => 268,  748 => 263,  743 => 261,  735 => 260,  728 => 258,  720 => 257,  715 => 255,  711 => 254,  704 => 252,  699 => 251,  694 => 250,  692 => 249,  686 => 245,  673 => 243,  669 => 242,  663 => 239,  657 => 238,  651 => 237,  639 => 232,  634 => 230,  628 => 229,  621 => 227,  615 => 226,  610 => 224,  606 => 223,  601 => 221,  597 => 220,  592 => 219,  588 => 218,  585 => 217,  583 => 207,  580 => 206,  565 => 204,  561 => 203,  555 => 200,  550 => 198,  546 => 197,  540 => 194,  536 => 193,  531 => 190,  520 => 187,  515 => 186,  511 => 185,  507 => 183,  492 => 181,  488 => 180,  482 => 177,  476 => 174,  472 => 173,  468 => 172,  463 => 170,  458 => 168,  454 => 167,  449 => 165,  445 => 164,  438 => 160,  434 => 159,  430 => 158,  425 => 156,  419 => 152,  410 => 150,  407 => 149,  394 => 147,  390 => 146,  386 => 144,  380 => 143,  378 => 142,  374 => 140,  361 => 138,  357 => 137,  352 => 135,  346 => 132,  336 => 131,  326 => 130,  323 => 129,  319 => 128,  314 => 127,  311 => 126,  307 => 125,  303 => 123,  288 => 121,  284 => 120,  278 => 117,  271 => 113,  267 => 112,  263 => 111,  259 => 110,  255 => 109,  251 => 108,  240 => 103,  234 => 102,  230 => 101,  226 => 100,  222 => 99,  218 => 98,  214 => 97,  208 => 96,  204 => 95,  200 => 94,  196 => 93,  192 => 92,  188 => 91,  182 => 90,  178 => 89,  172 => 88,  166 => 87,  162 => 86,  158 => 85,  154 => 84,  150 => 82,  147 => 72,  145 => 64,  139 => 62,  136 => 51,  134 => 40,  130 => 39,  127 => 38,  116 => 35,  111 => 34,  107 => 33,  103 => 31,  101 => 30,  98 => 29,  92 => 27,  90 => 26,  84 => 22,  73 => 20,  69 => 19,  65 => 17,  59 => 16,  55 => 15,  52 => 14,  44 => 11,  40 => 10,  37 => 9,  35 => 8,  29 => 4,  27 => 3,  23 => 2,  19 => 1,);
    }
}
/* {{ header }}*/
/* {{ column_left }}*/
/* {% spaceless %}*/
/* <div id="content">*/
/* 	<div class="page-header">*/
/* 		<div class="container-fluid">*/
/* 			<div class="pull-right">*/
/* 				{% if show_settings %}*/
/* 				<div class="btns">*/
/* 					<button data-toggle="tooltip" title="{{  button_apply_settings }}" class="btn btn-success"><i class="fa fa-save"></i></button>*/
/* 					<a href="{{  cancel }}" data-toggle="tooltip" title="{{  button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a>*/
/* 				</div>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 			<h1>{{ heading_title }}</h1>*/
/* 			{% if time_left %}<div class="trial"><span onclick="$('li.license a').click()">{{ time_left }}</span></div>{% endif %}*/
/* 			<br />*/
/* 			<ul class="breadcrumb">*/
/* 				{% for breadcrumb in breadcrumbs %}*/
/* 					<li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="container-fluid container-fluid_new">*/
/* 		{% if error_warning %}*/
/* 			<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}</div>*/
/* 		{% endif %}*/
/* 		*/
/* 	{% if show_settings %}*/
/* 		<div class="search-settings-wrap"></div>*/
/* 		<ul class="nav nav-tabs">*/
/* 			{% for store in stores %}*/
/* 				<li {{ store.store_id == store_id ? 'class="active"' }}>*/
/* 					<a href="{{ store.href }}">{{ store.name }}</a>*/
/* 				</li>*/
/* 			{% endfor %}*/
/* 		</ul>*/
/* 		<form action="{{ action }}" method="post" enctype="multipart/form-data" class="uni_set" id="unishop">*/
/* 			{% set effects_in = [*/
/* 				'Disabled', 'disabled',*/
/* 				'Attention Seekers', 'bounce', 'flash', 'pulse', 'rubberBand', 'shake', 'swing', 'tada', 'wobble', 'jello', */
/* 				'Bouncing Entrances', 'bounceIn', 'bounceInDown', 'bounceInLeft', 'bounceInRight', 'bounceInUp',*/
/* 				'Fading Entrances', 'fadeIn', 'fadeInDown', 'fadeInLeft', 'fadeInRight', 'fadeInUp',*/
/* 				'Flippers', 'flip', 'flipInX', 'flipInY',*/
/* 				'Lightspeed', 'lightSpeedIn',*/
/* 				'Rotating Entrances', 'rotateIn', 'rotateInDownLeft', 'rotateInDownRight', 'rotateInUpLeft', 'rotateInUpRight',*/
/* 				'Sliding Entrances', 'slideInUp', 'slideInDown', 'slideInLeft', 'slideInRight', */
/* 				'Zoom Entrances', 'zoomIn', 'zoomInDown', 'zoomInLeft', 'zoomInRight', 'zoomInUp',*/
/* 				'Specials', 'hinge', 'jackInTheBox', 'rollIn'] %}*/
/* 			{% set effects_out = [*/
/* 				'Disabled', 'disabled',*/
/* 				'Attention Seekers', 'bounce', 'flash', 'pulse', 'rubberBand', 'shake', 'swing', 'tada', 'wobble', 'jello', */
/* 				'Bouncing Exits', 'bounceOut', 'bounceOutDown', 'bounceOutLeft', 'bounceOutRight', 'bounceOutUp',*/
/* 				'Fading Exits', 'fadeOut', 'fadeOutDown', 'fadeOutLeft', 'fadeOutRight', 'fadeOutUp',*/
/* 				'Flippers', 'flip', 'flipOutX', 'flipOutY',*/
/* 				'Lightspeed', 'lightSpeedOut',*/
/* 				'Rotating Exits', 'rotateOut', 'rotateOutDownLeft', 'rotateOutDownRight', 'rotateOutUpLeft', 'rotateOutUpRight', */
/* 				'Sliding Exits', 'slideOutUp', 'slideOutDown', 'slideOutLeft', 'slideOutRight',*/
/* 				'Zoom Exits', 'zoomOut', 'zoomOutDown', 'zoomOutLeft', 'zoomOutRight', 'zoomOutUp',*/
/* 				'Specials', 'hinge', 'jackInTheBox', 'rollOut'] %}*/
/* 			{% set group = ['Disabled', 'Attention Seekers','Bouncing Entrances','Bouncing Exits','Fading Entrances','Fading Exits','Flippers','Lightspeed','Rotating Entrances','Rotating Exits','Sliding Entrances','Sliding Exits','Zoom Entrances','Zoom Exits','Specials'] %}				*/
/* 			*/
/* 			{% set alert_effects_in = [*/
/* 				'Disabled', 'disabled',*/
/* 				'Attention Seekers', 'bounce', 'flash', 'pulse', 'rubberBand', 'shake', 'tada', 'jello', */
/* 				'Bouncing Entrances', 'bounceIn', 'bounceInLeft', 'bounceInRight',*/
/* 				'Fading Entrances', 'fadeIn', 'fadeInLeft', 'fadeInRight',*/
/* 				'Lightspeed', 'lightSpeedIn',*/
/* 				'Sliding Entrances', 'slideInLeft', 'slideInRight', */
/* 				'Zoom Entrances', 'zoomInLeft', 'zoomInRight'] %}*/
/* 			{% set alert_effects_out = [*/
/* 				'Disabled', 'disabled',*/
/* 				'Attention Seekers', 'bounce', 'flash', 'pulse', 'rubberBand', 'shake', 'swing', 'tada', 'wobble', 'jello', */
/* 				'Bouncing Exits', 'bounceOut', 'bounceOutDown', 'bounceOutRight', 'bounceOutUp',*/
/* 				'Fading Exits', 'fadeOut', 'fadeOutDown', 'fadeOutRight', 'fadeOutUp',*/
/* 				'Flippers', 'flip', 'flipOutX', 'flipOutY',*/
/* 				'Lightspeed', 'lightSpeedOut',*/
/* 				'Sliding Exits', 'slideOutUp', 'slideOutDown', 'slideOutRight',*/
/* 				'Zoom Exits', 'zoomOut', 'zoomOutDown', 'zoomOutRight', 'zoomOutUp',*/
/* 				'Specials', 'rollOut'] %}*/
/* 			*/
/* 			<ul class="nav nav-stacked nav-tabs nav-pills col-sm-3 col-md-3 col-lg-3">*/
/* 				<li class="active"><a href="#tab-header" data-toggle="tab">{{ tab_header }}</a></li>*/
/* 				<li><a href="#tab-footer" data-toggle="tab">{{ tab_footer }}</a></li>*/
/* 				<li><a href="#tab-home" data-toggle="tab">{{ tab_home }}</a></li>*/
/* 				<li><a href="#tab-catalog" data-toggle="tab"><span title="{{ text_new_settings }}" data-toggle="tooltip">New</span>{{ tab_catalog }}</a></li>*/
/* 				<li><a href="#tab-product" data-toggle="tab"><span title="{{ text_new_settings }}" data-toggle="tooltip">New</span>{{ tab_product }}</a></li>*/
/* 				<li><a href="#tab-callback" data-toggle="tab">{{ tab_callback }}</a></li>*/
/* 				<li><a href="#tab-order" data-toggle="tab"><span title="{{ text_new_settings }}" data-toggle="tooltip">New</span>{{ tab_quickorder }}</a></li>*/
/* 				<li><a href="#tab-checkout" data-toggle="tab">{{ tab_checkout }}</a></li>*/
/* 				<li><a href="#tab-login" data-toggle="tab">{{ tab_login_register }}</a></li>*/
/* 				<li><a href="#tab-contacts" data-toggle="tab">{{ tab_contacts }}</a></li>*/
/* 				<li><a href="#tab-fly-menu" data-toggle="tab">{{ tab_flymenu }}</a></li>*/
/* 				<li><a href="#tab-search" data-toggle="tab">{{ tab_livesearch }}</a></li>*/
/* 				<li><a href="#tab-stock-status" data-toggle="tab"><span title="{{ text_new_settings }}" data-toggle="tooltip">New</span>{{ tab_stock_indicator }}</a></li>*/
/* 				<li><a href="#tab-sticker" data-toggle="tab">{{ tab_stickers }}</a></li>*/
/* 				<li><a href="#tab-cart-btn" data-toggle="tab">{{ tab_button }}</a></li>*/
/* 				<li><a href="#tab-notification" data-toggle="tab">{{ tab_notification }}</a></li>*/
/* 				<li><a href="#tab-style" data-toggle="tab">{{ tab_style }}</a></li>*/
/* 				<li><a href="#tab-other" data-toggle="tab">{{ tab_other }}</a></li>*/
/* 				{% if time_left %}<li class="license"><a href="#tab-key" data-toggle="tab"><b>{{ tab_key }}</b></a></li>{% endif %}*/
/* 				<li class="new"><label title="{{ text_new_settings2 }}" data-toggle="tooltip"><input type="checkbox" name="uni_set[adm_new_stick]" value="1" {{ set.adm_new_stick ? 'checked="checked"' }} /><span></span></label></li>*/
/* 			</ul>*/
/* 			<div class="tab-content tab-content-new col-sm-9 col-md-9 col-lg-9">*/
/* 				<div id="tab-header" class="tab-pane active">*/
/* 					<ul class="nav nav-tabs">*/
/* 						<li class="active"><a href="#tab-topmenu" data-toggle="tab">{{ header_topmenu }}</a></li>*/
/* 						<li><a href="#tab-search1" data-toggle="tab">{{ tab_headsearch }}</a></li>*/
/* 						<li><a href="#tab-phone" data-toggle="tab">{{ header_phone }}</a></li>*/
/* 						<li><a href="#tab-cart" data-toggle="tab">{{ header_cart }}</a></li>*/
/* 						<li><a href="#tab-mainmenu" data-toggle="tab">{{ header_main_menu }}</a></li>*/
/* 						<li><a href="#tab-additionalmenu" data-toggle="tab">{{ header_right_menu }}</a></li>*/
/* 					</ul>*/
/* 					<div id="module" class="tab-content">*/
/* 						<div id="tab-topmenu" class="tab-pane active">*/
/* 							<div class="col-sm-2">{{ entry_topmenu }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#headerlinks-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									{% set headerlinks_num = 1 %}*/
/* 									<div id="headerlinks-{{ lang.language_id }}" class="tab-pane">*/
/* 										{% for headerlinks in set[lang.language_id]['headerlinks'] %}*/
/* 											<div class="input-group">*/
/* 												<input type="text" name="uni_set[{{ lang.language_id }}][headerlinks][{{ headerlinks_num }}][title]" value="{{ headerlinks.title }}" placeholder="Заголовок #{{ headerlinks_num }}" class="form-control" />*/
/* 												<input type="text" name="uni_set[{{ lang.language_id }}][headerlinks][{{ headerlinks_num }}][link]" value="{{ headerlinks.link }}" placeholder="Ссылка #{{ headerlinks_num }}" class="form-control" />*/
/* 												<span class="input-group-btn btn-default" onclick="$(this).parent().next().remove(); $(this).parent().remove();" title="{{ entry_delete }}"><i class="fa fa-close"></i></span>*/
/* 											</div>*/
/* 											<div class="infolink">*/
/* 												<a onclick="$(this).toggleClass('show');">{{  text_article_links }} <i class="fa fa-caret-down"></i></a>*/
/* 												<div>*/
/* 												{% for information in informations %}*/
/* 													<a onclick="$(this).parent().parent().prev().find('input:first').val('{{ information.name }}'); $(this).parent().parent().prev().find('input:last').val('{{ information.seo_link[lang.language_id] ? information.seo_link[lang.language_id] : information.link }}');">{{ information.name }}</a>*/
/* 												{% endfor %}*/
/* 												</div>*/
/* 											</div>*/
/* 											{% set headerlinks_num = headerlinks_num + 1 %}*/
/* 										{% endfor %}*/
/* 										<hr />*/
/* 										<div style="display:none">*/
/* 											{% for information in informations %}*/
/* 												<a onclick="$(this).parent().parent().prev().find('input:first').val('{{ information.name }}'); $(this).parent().parent().prev().find('input:last').val('{{ information.seo_link[lang.language_id] ? information.seo_link[lang.language_id] : information.link }}');">{{ information.name }}</a>*/
/* 											{% endfor %}*/
/* 										</div>*/
/* 										<a onclick="addHeaderLinks('{{ lang.language_id }}', $(this).prev().html());" class="button btn btn-success">Добавить новую ссылку</a>*/
/* 									</div>*/
/* 								{% endfor %}	*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_topmenu_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[top_menu_bg]" class="uni-color form-control" value="{{ set.top_menu_bg ? set.top_menu_bg : 'f5f5f5' }}">*/
/* 								<input type="text" name="uni_set[top_menu_color]" class="uni-color form-control" value="{{ set.top_menu_color ? set.top_menu_color : 'F6846A' }}">*/
/* 								<input type="text" name="uni_set[top_menu_color_hover]" class="uni-color form-control" value="{{ set.top_menu_color_hover ? set.top_menu_color_hover : '149dbc' }}">*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="tab-search1" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_search_phone_change }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[search_phone_change]" value="1" {{ set.search_phone_change ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_search_category }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[search][category]" value="1" {{ set.search.category ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_search_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[search_btn_bg]" class="uni-color form-control" value="{{ set.search_btn_bg ? set.search_btn_bg : 'f5f5f5' }}">*/
/* 								<input type="text" name="uni_set[search_btn_color]" class="uni-color form-control" value="{{ set.search_btn_color ? set.search_btn_color : '666666' }}">*/
/* 								<input type="text" name="uni_set[search_input_color]" class="uni-color form-control" value="{{ set.search_input_color ? set.search_input_color : '888888' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_search_phrase }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#search-phrase-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="search-phrase-{{ lang.language_id }}" class="tab-pane">*/
/* 										<textarea type="text" name="uni_set[{{ lang.language_id }}][search_phrase]" class="form-control">{{ set[lang.language_id].search_phrase }}</textarea>*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_search_mobile_hide }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[search_mob_hide]" value="1" {{ set.search_mob_hide ? 'checked="checked"' }} /><span></span></label></div>*/
/* 						</div>*/
/* 						<div id="tab-phone" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_mainphone_color }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[main_phone_color]" class="uni-color form-control" value="{{ set.main_phone_color ? set.main_phone_color : '666666' }}"></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_main_phone }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#main-phones-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								{% set types = {'tel:':'Набор номера', */
/* 												'mailto:':'Отправить e-mail', */
/* 												'?call':'Skype звонок', */
/* 												'?chat':'Skype чат', */
/* 												'viber://chat?number=':'Viber (chat?number=)',*/
/* 												'viber://pa?chatURI=':'Viber (pa?chatURI=)',*/
/* 												'viber://pa/info?uri=':'Viber (pa/info?uri=)',*/
/* 												'whatsapp://send?phone=':'WhatsApp',*/
/* 												'tg://resolve?domain=':'Telegram'*/
/* 								} %}*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="main-phones-{{ lang.language_id }}" class="tab-pane">*/
/* 										<table class="main-phone-{{ lang.language_id }} img-or-ico">*/
/* 											<tr class="main-phone-icon-{{ lang.language_id }}-1">*/
/* 												<td>*/
/* 													<a onclick="img_or_ico($(this).parent().parent().attr('class'), 'img');" class="{{ 'fa-' not in set[lang.language_id].main_phones[1].icon ? 'selected' }} img">Картинка</a>*/
/* 													<a onclick="img_or_ico($(this).parent().parent().attr('class'), 'ico');" class="{{ 'fa-' in set[lang.language_id].main_phones[1].icon ? 'selected' }} ico">Иконка</a>*/
/* 													<div class="main-category-icon">*/
/* 														<a href="" id="thumb-image-{{ lang.language_id }}-main-phone-icon-1" data-toggle="image" class="img-thumbnail img {{ 'fa-' not in set[lang.language_id].main_phones[1].icon ? 'selected' }}">*/
/* 															<img src="{{ set[lang.language_id].main_phones[1].icon and 'fa-' not in set[lang.language_id].main_phones[1].icon ? '../image/' ~ set[lang.language_id].main_phones[1].icon : placeholder }}" alt="" title="" data-placeholder="{{ placeholder }}" />*/
/* 														</a>*/
/* 														<a id="{{ lang.language_id }}-m-f-1" onclick="popup_icons($(this).attr('id'))" class="ico {{ 'fa-' in set[lang.language_id].main_phones[1].icon ? 'selected' }}">*/
/* 															<i class="{{ 'fa-' in set[lang.language_id].main_phones[1].icon ? set[lang.language_id].main_phones[1].icon : 'fa fa-plus-circle' }}"></i>*/
/* 														</a>*/
/* 														<input type="hidden" name="uni_set[{{ lang.language_id }}][main_phones][1][icon]" value="{{ set[lang.language_id].main_phones[1].icon }}" id="image-{{ lang.language_id }}-main-phone-icon-1" />*/
/* 													</div>*/
/* 												</td>*/
/* 												<td>*/
/* 													<div class="input-group">*/
/* 														<input type="text" name="uni_set[{{ lang.language_id }}][main_phones][1][text]" value="{{ set[lang.language_id].main_phones[1].text }}" placeholder="Имя #1" class="form-control" style="width:133.33px" />*/
/* 														<input type="text" name="uni_set[{{ lang.language_id }}][main_phones][1][number]" value="{{ telephone }}" readonly="readonly" placeholder="Телефон #1" class="form-control" style="width:133.33px" />*/
/* 														<select name="uni_set[{{ lang.language_id }}][main_phones][1][type]" class="form-control" style="width:133.33px">*/
/* 															<optgroup label="По клику:" />*/
/* 															<option value="">Ничего</option>*/
/* 															{% for key, name in types %}*/
/* 																<option value="{{ key }}" {{ set[lang.language_id].main_phones[1].type == key ? 'selected="selected"' }}>{{ name }}</option>*/
/* 															{% endfor %}*/
/* 														</select>*/
/* 													</div>*/
/* 												</td>*/
/* 											</tr>*/
/* 											{% set main_phones_num = 2 %}*/
/* 											{% for key, main_phone in set[lang.language_id].main_phones %}*/
/* 											{% if key > 1 %} */
/* 												<tr class="main-phone-icon-{{ lang.language_id }}-{{ main_phones_num }}">*/
/* 													<td>*/
/* 														<a onclick="img_or_ico($(this).parent().parent().attr('class'), 'img');" class="{{ 'fa-' not in main_phone.icon ? 'selected' }} img">Картинка</a>*/
/* 														<a onclick="img_or_ico($(this).parent().parent().attr('class'), 'ico');" class="{{ 'fa-' in main_phone.icon ? 'selected' }} ico">Иконка</a>*/
/* 														<div class="main-category-icon">*/
/* 															<a href="" id="thumb-image-{{ lang.language_id }}-main-phone-icon-{{ main_phones_num }}" data-toggle="image" class="img-thumbnail img {{ 'fa-' not in main_phone.icon ? 'selected' }}">*/
/* 																<img src="{{ main_phone.icon and 'fa-' not in main_phone.icon ? '../image/' ~ main_phone.icon : placeholder }}" alt="" title="" data-placeholder="{{ placeholder }}" />*/
/* 															</a>*/
/* 															<a id="{{ lang.language_id }}-m-f-{{ main_phones_num }}" onclick="popup_icons($(this).attr('id'))" class="ico {{ 'fa-' in main_phone.icon ? 'selected' }}">*/
/* 																<i class="{{ 'fa-' in main_phone.icon ? main_phone.icon : 'fa fa-plus-circle' }}"></i>*/
/* 															</a>*/
/* 															<input type="hidden" name="uni_set[{{ lang.language_id }}][main_phones][{{ main_phones_num }}][icon]" value="{{ main_phone.icon }}" id="image-{{ lang.language_id }}-main-phone-icon-{{ main_phones_num }}" />*/
/* 														</div>*/
/* 													</td>*/
/* 													<td>*/
/* 														<div class="input-group">*/
/* 															<input type="text" name="uni_set[{{ lang.language_id }}][main_phones][{{ main_phones_num }}][text]" value="{{ main_phone.text }}" placeholder="Имя #{{ main_phones_num }}" class="form-control" style="width:133.33px" />*/
/* 															<input type="text" name="uni_set[{{ lang.language_id }}][main_phones][{{ main_phones_num }}][number]" value="{{ main_phone.number }}" placeholder="Телефон #{{ main_phones_num }}" class="form-control" style="width:133.33px" />*/
/* 															<select name="uni_set[{{ lang.language_id }}][main_phones][{{ main_phones_num }}][type]" class="form-control" style="width:133.33px" >*/
/* 																<optgroup label="По клику:" />*/
/* 																<option value="">Ничего</option>*/
/* 																{% for key, name in types %}*/
/* 																	<option value="{{ key }}" {{ main_phone.type == key ? 'selected="selected"' }}>{{ name }}</option>*/
/* 																{% endfor %}*/
/* 															</select>*/
/* 															<span class="btn-delete btn-default" onclick="$(this).parent().parent().parent().remove()" title="{{ entry_delete }}"><i class="fa fa-close"></i></span>*/
/* 														</div>*/
/* 													</td>*/
/* 												</tr>*/
/* 												{% set main_phones_num = main_phones_num + 1 %}*/
/* 											{% endif %}*/
/* 											{% endfor %}*/
/* 										</table>*/
/* 										<hr />*/
/* 										<div style="display:none">*/
/* 											<optgroup label="По клику:" />*/
/* 											<option value="">Тип: ничего</option>*/
/* 											{% for key, name in types %}*/
/* 												<option value="{{ key }}">{{ name }}</option>*/
/* 											{% endfor %}*/
/* 										</div>*/
/* 										<a onclick="addMainPhones({{ lang.language_id }}, $(this).prev().html());" class="button btn btn-success">Добавить</a>*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_additional_phone }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#additional-contact-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									{% set contacts_num = 1 %}*/
/* 									<div id="additional-contact-{{ lang.language_id }}" class="tab-pane" style="heigh:300px;overflow:auto">*/
/* 										<table class="additional-contacts-{{ lang.language_id }} img-or-ico">*/
/* 											{% for contact in set[lang.language_id].contacts %}*/
/* 												<tr class="additional-contacts-icon-{{ lang.language_id }}-{{ contacts_num }}">*/
/* 													<td>*/
/* 														<a onclick="img_or_ico($(this).parent().parent().attr('class'), 'img');" class="{{ 'fa-' not in contact.icon ? 'selected' }} img">Картинка</a>*/
/* 														<a onclick="img_or_ico($(this).parent().parent().attr('class'), 'ico');" class="{{ 'fa-' in contact.icon ? 'selected' }} ico">Иконка</a>*/
/* 														<div class="main-category-icon">*/
/* 															<a href="" id="thumb-image-{{ lang.language_id }}-contacts-icon-{{ contacts_num }}" data-toggle="image" class="img-thumbnail img {{ 'fa-' not in contact.icon ? 'selected' }}">*/
/* 																<img src="{{ contact.icon and 'fa-' not in contact.icon ? '../image/' ~ contact.icon : placeholder }}" alt="" title="" data-placeholder="{{ placeholder }}" />*/
/* 															</a>*/
/* 															<a id="{{ lang.language_id }}-a-c-{{ contacts_num }}" onclick="popup_icons($(this).attr('id'))" class="ico {{ 'fa-' in contact.icon ? 'selected' }}">*/
/* 																<i class="{{ 'fa-' in contact.icon ? contact.icon : 'fa fa-plus-circle' }}"></i>*/
/* 															</a>*/
/* 															<input type="hidden" name="uni_set[{{ lang.language_id }}][contacts][{{ contacts_num }}][icon]" value="{{ contact.icon }}" id="image-{{ lang.language_id }}-contacts-icon-{{ contacts_num }}" />*/
/* 														</div>*/
/* 													</td>*/
/* 													<td>*/
/* 														<div class="input-group">*/
/* 															<input type="text" name="uni_set[{{ lang.language_id }}][contacts][{{ contacts_num }}][number]" value="{{ contact.number }}" placeholder="Телефон #{{ contacts_num }}" class="form-control" />*/
/* 															<select name="uni_set[{{ lang.language_id }}][contacts][{{ contacts_num }}][type]" class="form-control header-call" >*/
/* 																<optgroup label="По клику:" />*/
/* 																<option value="">Ничего</option>*/
/* 																{% for key, name in types %}*/
/* 																	<option value="{{ key }}" {{ contact.type == key ? 'selected="selected"' }}>{{ name }}</option>*/
/* 																{% endfor %}*/
/* 															</select>*/
/* 															<span class="input-group-btn btn-default" onclick="$(this).parent().parent().parent().remove()" title="{{ entry_delete }}"><i class="fa fa-close"></i></span>*/
/* 														</div>*/
/* 													</td>*/
/* 													{% set contacts_num = contacts_num + 1 %}*/
/* 												</tr>*/
/* 											{% endfor %}*/
/* 										</table>*/
/* 										<hr />*/
/* 										<div class="add-before" style="display:none">*/
/* 											<optgroup label="По клику:" />*/
/* 											<option value="">Тип ссылки: ничего</option>*/
/* 											{% for key, name in types %}*/
/* 												<option value="{{ key }}">{{ name }}</option>*/
/* 											{% endfor %}*/
/* 										</div>*/
/* 										<a onclick="addContacts({{ lang.language_id }}, $(this).prev().html());" class="button btn btn-success">Добавить</a>*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_additional_phone_color }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[additional_phone_color]" class="uni-color form-control" value="{{ set.additional_phone_color ? set.additional_phone_color : '666666' }}"></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_text_block }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#text-in-add-contacts-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="text-in-add-contacts-{{ lang.language_id }}" class="tab-pane">*/
/* 										<textarea type="text" name="uni_set[{{ lang.language_id }}][text_in_add_contacts]" id="text_in_add_contacts_{{ lang.language_id }}" class="form-control">{{ set[lang.language_id].text_in_add_contacts }}</textarea>*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_text_block_before }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[text_in_add_contacts_position]" value="1" {{ set.text_in_add_contacts_position ? 'checked="checked"' }} /><span></span></label></div>*/
/* 						</div>*/
/* 						<div id="tab-cart" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_cart_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[cart_color]" class="uni-color form-control" value="{{ set.cart_color ? set.cart_color : '149dbc' }}">*/
/* 								<input type="text" name="uni_set[cart_bg_total]" class="uni-color form-control" value="{{ set.cart_bg_total ? set.cart_bg_total : 'F6846A' }}">*/
/* 								<input type="text" name="uni_set[cart_color_total]" class="uni-color form-control" value="{{ set.cart_color_total ? set.cart_color_total : 'ffffff' }}">*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="tab-mainmenu" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_main_menu_type }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								{% set types = {'1':'Вертикальное', '2':'Горизонтальное'} %}*/
/* 								<select name="uni_set[menu_type]" class="form-control" >*/
/* 								{% for key, name in types %}*/
/* 									<option value="{{ key }}" {{ set.menu_type == key ? 'selected="selected"' }}>{{ name }}</option>*/
/* 								{% endfor %}*/
/* 								</select>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_main_menu }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#main-menu-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 									{% for lang in languages %}*/
/* 									<div id="main-menu-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][text_menu]" value="{{ set[lang.language_id].text_menu ? set[lang.language_id].text_menu : 'Категории' }}"class="form-control" />*/
/* 									</div>*/
/* 									{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_main_menu_blur }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								{% set blurs = {0:text_blur_off, 1:text_blur_type_1, 2:text_blur_type_2} %}*/
/* 								<select name="uni_set[main_menu_blur]" class="form-control">*/
/* 									{% for key, blur in blurs %}*/
/* 										<option value="{{ key }}" {{ set.main_menu_blur == key ? 'selected="selected"' }}>{{ blur }}</option>*/
/* 									{% endfor %}*/
/* 								</select>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_main_menu_icon }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#main-menu-icon-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 									{% for lang in languages %}*/
/* 										<div id="main-menu-icon-{{ lang.language_id }}" class="tab-pane" style="heigh:300px;overflow:auto">*/
/* 											<table class="main-menu_{{ lang.language_id }} img-or-ico">*/
/* 												{% for category in categories2 %}*/
/* 													{% set icons = set[lang.language_id].main_category_icons[category.category_id] %}*/
/* 													<tr class="main-menu-icon-{{ lang.language_id }}-{{ category.category_id }}">*/
/* 														<td>*/
/* 															<a onclick="img_or_ico($(this).parent().parent().attr('class'), 'img');" class="{{ 'fa-' not in icons ? 'selected' }} img">Картинка</a>*/
/* 															<a onclick="img_or_ico($(this).parent().parent().attr('class'), 'ico');" class="{{ 'fa-' in icons ? 'selected' }} ico">Иконка</a>*/
/* 															<div class="main-category-icon">*/
/* 																<a href="" id="thumb-image-{{ lang.language_id }}-main-menu-icon-{{ category.category_id }}" data-toggle="image" class="img-thumbnail img {{ 'fa-' not in icons ? 'selected' }}">*/
/* 																	<img src="{{ icons and 'fa-' not in icons ? '../image/' ~ icons : placeholder }}" alt="" title="" data-placeholder="{{ placeholder }}" />*/
/* 																</a>*/
/* 																<a id="m-c-icon-{{ lang.language_id }}-{{ category.category_id }}" onclick="popup_icons($(this).attr('id'))" class="ico {{ 'fa-' in icons ? 'selected' }}">*/
/* 																	<i class="{{ 'fa-' in icons ? icons : 'fa fa-plus-circle' }}"></i>*/
/* 																</a>*/
/* 																<input type="hidden" name="uni_set[{{ lang.language_id }}][main_category_icons][{{ category.category_id }}]" value="{{ icons }}" id="image-{{ lang.language_id }}-main-menu-icon-{{ category.category_id }}" />*/
/* 															</div>*/
/* 														</td>*/
/* 														<td>{{ category.name }}</td>*/
/* 													</tr>*/
/* 												{% endfor %}*/
/* 											</table>*/
/* 										</div>*/
/* 									{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_main_menu_links_disabled }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[menu_links_disabled]" value="1" {{ set.menu_links_disabled ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_main_menu_link_show }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[menu_links_show]" value="1" {{ set.menu_links_show ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_menu_3rd_level_limit }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<div class="input-group">*/
/* 									<input type="text" name="uni_set[menu_3rd_level_limit]" value="{{ set.menu_3rd_level_limit is not defined ? 10 : set.menu_3rd_level_limit }}" class="form-control" style="width:50px;text-align:center" />*/
/* 									<span>{{ text_item }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12">{{ header_main_menu_type1 }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_main_menu_sec_lev_pos }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[main_menu_sec_lev_pos]" value="1" {{ set.main_menu_sec_lev_pos ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_main_menu_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[main_menu_bg]" class="uni-color form-control" value="{{ set.main_menu_bg ? set.main_menu_bg : '149dbc' }}">*/
/* 								<input type="text" name="uni_set[main_menu_color]" class="uni-color form-control" value="{{ set.main_menu_color ? set.main_menu_color : 'ffffff' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_main_menu_color1 }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[main_menu_parent_bg]" class="uni-color form-control" value="{{ set.main_menu_parent_bg ? set.main_menu_parent_bg : 'f5f5f5' }}">*/
/* 								<input type="text" name="uni_set[main_menu_parent_color]" class="uni-color form-control" value="{{ set.main_menu_parent_color ? set.main_menu_parent_color : '777777' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_main_menu_color2 }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[main_menu_parent_color_hover]" class="uni-color form-control" value="{{ set.main_menu_parent_color_hover ? set.main_menu_parent_color_hover : 'F6846A' }}"></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_main_menu_color3 }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[main_menu_children_bg]" class="uni-color form-control" value="{{ set.main_menu_children_bg ? set.main_menu_children_bg : 'ffffff' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_main_menu_color5 }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[main_menu_children_color]" class="uni-color form-control" value="{{ set.main_menu_children_color ? set.main_menu_children_color : 'F6846A' }}">*/
/* 								<input type="text" name="uni_set[main_menu_children_color_hover]" class="uni-color form-control" value="{{ set.main_menu_children_color_hover ? set.main_menu_children_color_hover : '149dbc' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_main_menu_color6 }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[main_menu_children_color2]" class="uni-color form-control" value="{{ set.main_menu_children_color2 ? set.main_menu_children_color2 : '666666' }}">*/
/* 								<input type="text" name="uni_set[main_menu_children_color2_hover]" class="uni-color form-control" value="{{ set.main_menu_children_color2_hover ? set.main_menu_children_color2_hover : '888888' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_main_menu_open }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								{% set schemas = {*/
/* 									'common/home':'Главная',*/
/* 									'product/category':'Категория',*/
/* 									'product/special':'Акции',*/
/* 									'product/search':'Поиск',*/
/* 									'product/manufacturer':'Список производителей',*/
/* 									'product/manufacturer/info':'Список товаров производителя',*/
/* 									'information/information':'Статьи',*/
/* 									'information/uni_news':'Категория новостей',*/
/* 									'information/uni_news_story':'Страница новости',*/
/* 									'product/uni_reviews':'Страница отзывов',*/
/* 									'product/gallery':'Фотогалерея',*/
/* 									}*/
/* 								%}*/
/* 								<div class="overflow">*/
/* 								{% for key, name in schemas %}*/
/* 									<label><input type="checkbox" name="uni_set[menu_schema][]" value="{{ key }}" {{ key in set.menu_schema ? 'checked="checked"' }} /><span></span>{{ name }}</label><br />	*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12">{{ header_main_menu_type2 }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_main_menu_color4 }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[main_menu2_bg]" class="uni-color form-control" value="{{ set.main_menu2_bg ? set.main_menu2_bg : '149dbc' }}">*/
/* 								<input type="text" name="uni_set[main_menu2_color]" class="uni-color form-control" value="{{ set.main_menu2_color ? set.main_menu2_color : 'ffffff' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_main_menu_color3 }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[main_menu2_children_bg]" class="uni-color form-control" value="{{ set.main_menu2_children_bg ? set.main_menu2_children_bg : 'ffffff' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_main_menu_color5 }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[main_menu2_children_color]" class="uni-color form-control" value="{{ set.main_menu2_children_color ? set.main_menu2_children_color : 'F6846A' }}">*/
/* 								<input type="text" name="uni_set[main_menu2_children_color_hover]" class="uni-color form-control" value="{{ set.main_menu2_children_color_hover ? set.main_menu2_children_color_hover : '149dbc' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_main_menu_color6 }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[main_menu2_children_color2]" class="uni-color form-control" value="{{ set.main_menu2_children_color ? set.main_menu2_children_color2 : '666666' }}">*/
/* 								<input type="text" name="uni_set[main_menu2_children_color2_hover]" class="uni-color form-control" value="{{ set.main_menu2_children_color2_hover ? set.main_menu2_children_color2_hover : '888888' }}">*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="tab-additionalmenu" class="tab-pane">*/
/* 							<div class="col-sm-12">{{ header_right_menu1 }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_right_menu_links }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#headerlinks2-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 									{% for lang in languages %}*/
/* 										<div id="headerlinks2-{{ lang.language_id }}" class="tab-pane">*/
/* 											{% set h2_num = 1 %}*/
/* 											<table class="headerlinks2_{{ lang.language_id }} img-or-ico header-links2">*/
/* 												{% for headerlinks2 in set[lang.language_id].headerlinks2 %}*/
/* 													<tr class="headerlinks2-{{ lang.language_id }}-{{ h2_num }}">*/
/* 														<td>*/
/* 															<a onclick="img_or_ico($(this).parent().parent().attr('class'), 'img');" class="{{ 'fa-' not in headerlinks2.icon ? 'selected' }} img">Картинка</a>*/
/* 															<a onclick="img_or_ico($(this).parent().parent().attr('class'), 'ico');" class="{{ 'fa-' in headerlinks2.icon ? 'selected' }} ico">Иконка</a>*/
/* 															<div class="main-category-icon">*/
/* 																<a href="" id="thumb-image-{{ lang.language_id }}-headerlinks2-{{ h2_num }}" data-toggle="image" class="img-thumbnail img {{ 'fa-' not in headerlinks2.icon ? 'selected' }}">*/
/* 																	<img src="{{ headerlinks2.icon and 'fa-' not in headerlinks2.icon ? '../image/' ~ headerlinks2.icon : placeholder }}" alt="" title="" data-placeholder="{{ placeholder }}" />*/
/* 																	{{ headerlinks2.icon }}*/
/* 																</a>*/
/* 																<a id="{{ lang.language_id }}-t-l-{{ h2_num }}" onclick="popup_icons($(this).attr('id'))" class="ico {{ 'fa-' in headerlinks2.icon ? 'selected' }}">*/
/* 																	<i class="{{ 'fa-' in headerlinks2.icon ? headerlinks2.icon : 'fa fa-plus-circle' }}"></i>*/
/* 																</a>*/
/* 																<input type="hidden" name="uni_set[{{ lang.language_id }}][headerlinks2][{{ h2_num }}][icon]" value="{{ headerlinks2.icon }}" id="image-{{ lang.language_id }}-headerlinks2-{{ h2_num }}" />*/
/* 															</div>*/
/* 														</td>*/
/* 														<td>*/
/* 															<div class="input-group">*/
/* 																<input type="text" name="uni_set[{{ lang.language_id }}][headerlinks2][{{ h2_num }}][title]" value="{{ headerlinks2.title }}" placeholder="Заголовок #{{ h2_num }}" class="form-control" />*/
/* 																<input type="text" name="uni_set[{{ lang.language_id }}][headerlinks2][{{ h2_num }}][link]" value="{{ headerlinks2.link }}" placeholder="Ссылка #{{ h2_num }}" class="form-control" />*/
/* 																<span class="input-group-btn btn-default" onclick="$(this).parent().parent().parent().remove();" title="{{ entry_delete }}"><i class="fa fa-close"></i></span>*/
/* 															</div>*/
/* 															<div class="infolink">*/
/* 																<a onclick="$(this).toggleClass('show');">{{  text_article_links }} <i class="fa fa-caret-down"></i></a>*/
/* 																<div>*/
/* 																	{% for information in informations %}*/
/* 																		<a onclick="$(this).parent().parent().prev().find('input:first').val('{{ information.name }}'); $(this).parent().parent().prev().find('input:last').val('{{ information.seo_link[lang.language_id] ? information.seo_link[lang.language_id] : information.link }}');">{{ information.name }}</a>*/
/* 																	{% endfor %}*/
/* 																</div>*/
/* 															</div>*/
/* 															*/
/* 															{% set h2sub_num = 1 %}*/
/* 															{% for headerlinks2sub in headerlinks2.children%}*/
/* 																<div class="submenu">*/
/* 																	<div class="input-group">*/
/* 																		<i class="fas fa-level-up-alt"></i>*/
/* 																		<input type="text" name="uni_set[{{ lang.language_id }}][headerlinks2][{{ h2_num }}][children][{{ h2sub_num }}][name]" value="{{ headerlinks2sub.name }}" placeholder="Заголовок #{{ h2sub_num }}" class="form-control" />*/
/* 																		<input type="text" name="uni_set[{{ lang.language_id }}][headerlinks2][{{ h2_num }}][children][{{ h2sub_num }}][href]" value="{{ headerlinks2sub.href }}" placeholder="Ссылка #{{ h2sub_num }}" class="form-control" />*/
/* 																		<span class="input-group-btn btn-default" onclick="$(this).parent().parent().remove();" title="{{ entry_delete }}"><i class="fa fa-close"></i></span>*/
/* 																	</div>*/
/* 																	*/
/* 																	{% set h2sub2_num = 1 %}*/
/* 																	{% for headerlinks2sub2 in headerlinks2sub.children%}*/
/* 																		<div class="submenu2">*/
/* 																			<div class="input-group">*/
/* 																				<i class="fas fa-level-up-alt"></i>*/
/* 																				<input type="text" name="uni_set[{{ lang.language_id }}][headerlinks2][{{ h2_num }}][children][{{ h2sub_num }}][children][{{ h2sub2_num }}][name]" value="{{ headerlinks2sub2.name }}" placeholder="Заголовок #{{ h2sub2_num }}" class="form-control" />*/
/* 																				<input type="text" name="uni_set[{{ lang.language_id }}][headerlinks2][{{ h2_num }}][children][{{ h2sub_num }}][children][{{ h2sub2_num }}][href]" value="{{ headerlinks2sub2.href }}" placeholder="Ссылка #{{ h2sub2_num }}" class="form-control" />*/
/* 																				<span class="input-group-btn btn-default" onclick="$(this).parent().parent().remove();" title="{{ entry_delete }}"><i class="fa fa-close"></i></span>*/
/* 																			</div>*/
/* 																		</div>*/
/* 																		{% set h2sub2_num = h2sub2_num + 1 %}*/
/* 																	{% endfor %}*/
/* 																	<a onclick="addHeaderLinks2Sub2('{{ lang.language_id }}', '{{ h2_num }}', '{{ h2sub_num }}', this);" title="Добавить ссылку третьего уровня" data-toggle="tooltip" class="add-sub btn btn-info"><i class="fa fa-plus"></i></a>*/
/* 																</div>	*/
/* 																{% set h2sub_num = h2sub_num + 1 %}*/
/* 															{% endfor %}*/
/* 															<a onclick="addHeaderLinks2Sub('{{ lang.language_id }}', '{{ h2_num }}', this);" title="Добавить ссылку второго уровня" data-toggle="tooltip" class="add-sub btn btn-success"><i class="fa fa-plus"></i></a>*/
/* 															<div class="sort">*/
/* 																{{ text_headerlinks2_sort }}<input type="text" name="uni_set[{{ lang.language_id }}][headerlinks2][{{ h2_num }}][sort_order]" value="{{ headerlinks2.sort_order ? headerlinks2.sort_order : 1 }}" class="form-control">*/
/* 																{{ text_headerlinks2_column }}<input type="text" name="uni_set[{{ lang.language_id }}][headerlinks2][{{ h2_num }}][column]" value="{{ headerlinks2.column ? headerlinks2.column : 1 }}" class="form-control">*/
/* 															</div>*/
/* 															<label class="show-in-cat"><input type="checkbox" name="uni_set[{{ lang.language_id }}][headerlinks2][{{ h2_num }}][show_in_cat]" value="1" {{ headerlinks2.show_in_cat ? 'checked="checked"' }}><span></span>{{  text_headerlinks2_incat }}</label>*/
/* 														</td>*/
/* 													</tr>*/
/* 													{% set h2_num = h2_num + 1 %}*/
/* 												{% endfor %}*/
/* 											</table>*/
/* 											<hr style="margin:10px 0" />*/
/* 											<div style="display:none">*/
/* 											{% for information in informations %}*/
/* 												<a onclick="$(this).parent().parent().prev().find('input:first').val('{{ information.name }}'); $(this).parent().parent().prev().find('input:last').val('{{ information.seo_link[lang.language_id] ? information.seo_link[lang.language_id] : information.link }}');">{{ information.name }}</a>*/
/* 											{% endfor %}*/
/* 										</div>*/
/* 										<a onclick="addHeaderLinks2('{{ lang.language_id }}', $(this).prev().html());" class="button btn btn-success">Добавить новую ссылку</a>*/
/* 										</div>*/
/* 									{% endfor %}{% if time_left is not defined or trial_empty %}{% set store_id = 777777-776778 %}{% endif %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12">{{ header_right_menu_color }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_right_menu_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[right_menu][bg]" class="uni-color form-control" value="{{ set.right_menu.bg ? set.right_menu.bg : 'f5f5f5' }}">*/
/* 								<input type="text" name="uni_set[right_menu][col]" class="uni-color form-control" value="{{ set.right_menu.col ? set.right_menu.col : 'F6846A' }}">*/
/* 								<input type="text" name="uni_set[right_menu][col_hov]" class="uni-color form-control" value="{{ set.right_menu.col_hov ? set.right_menu.col_hov : '149dbc' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_right_menu_color2 }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[right_menu][child_bg]" class="uni-color form-control" value="{{ set.right_menu.child_bg ? set.right_menu.child_bg : 'ffffff' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_right_menu_color3 }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[right_menu][child_col]" class="uni-color form-control" value="{{ set.right_menu.child_col ? set.right_menu.child_col : 'f6846a' }}">*/
/* 								<input type="text" name="uni_set[right_menu][child_col_hov]" class="uni-color form-control" value="{{ set.right_menu.child_col_hov ? set.right_menu.child_col_hov : '149dbc' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_right_menu_color4 }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[right_menu][child2_col]" class="uni-color form-control" value="{{ set.right_menu.child2_col ? set.right_menu.child2_col : '777777' }}">*/
/* 								<input type="text" name="uni_set[right_menu][child2_col_hov]" class="uni-color form-control" value="{{ set.right_menu.child2_col_hov ? set.right_menu.child_col_hov : '149dbc' }}">*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div id="tab-footer" class="tab-pane">*/
/* 					<ul class="nav nav-tabs">*/
/* 						<li class="active"><a href="#tab-subscribe" data-toggle="tab">{{ tab_subscribe }}</a></li>*/
/* 						<li><a href="#tab-footerlinks" data-toggle="tab">{{ header_footerlinks }}</a></li>*/
/* 						<li><a href="#tab-footertext" data-toggle="tab">{{ header_footertext }}</a></li>*/
/* 						<li><a href="#tab-footericons" data-toggle="tab">{{ header_footericons }}</a></li>*/
/* 					</ul>*/
/* 					<div id="module" class="tab-content">*/
/* 						<div id="tab-subscribe" class="tab-pane active">*/
/* 							<div class="col-sm-2">{{ entry_show_subscribe }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_subscribe]" value="1" {{ set.show_subscribe ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_subscribe_attempt }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<div class="input-group">*/
/* 									<input type="text" name="uni_set[subscribe_attempt]" value="{{ set.subscribe_attempt ? set.subscribe_attempt : 3 }}" style="width:50px !important; text-align:center;" class="form-control" />*/
/* 									<span>{{ text_item }}</span> */
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_subscribe_points }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<div class="input-group">*/
/* 									<input type="text" name="uni_set[subscribe_points]" value="{{ set.subscribe_points is not defined ? 50 : set.subscribe_points }}" style="width:50px !important; text-align:center;" class="form-control" />*/
/* 									<span>{{ text_points }}</span> */
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_subscribe_text_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[subscribe_points_color]" class="uni-color form-control" value="{{ set.subscribe_points_color ? set.subscribe_points_color : 'ffffff' }}">*/
/* 								<input type="text" name="uni_set[subscribe_text_color]" class="uni-color form-control" value="{{ set.subscribe_text_color ? set.subscribe_text_color : 'eeeeee' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_subscribe_input_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[subscribe_input_bg]" class="uni-color form-control" value="{{ set.subscribe_input_bg ? set.subscribe_input_bg : 'ffffff' }}">*/
/* 								<input type="text" name="uni_set[subscribe_input_color]" class="uni-color form-control" value="{{ set.subscribe_input_color ? set.subscribe_input_color : '666666' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_subscribe_button_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[subscribe_button_bg]" class="uni-color form-control" value="{{ set.subscribe_button_bg ? set.subscribe_button_bg : 'eeeeee' }}">*/
/* 								<input type="text" name="uni_set[subscribe_button_color]" class="uni-color form-control" value="{{ set.subscribe_button_color ? set.subscribe_button_color : '777777' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12" style="font-weight:400;color:#777">{{ header_subscribe }}</div>*/
/* 						</div>*/
/* 						<div id="tab-footerlinks" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_footer_links_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[footer_bg]" class="uni-color form-control" value="{{ set.footer_bg ? set.footer_bg : '149dbc' }}">*/
/* 								<input type="text" name="uni_set[footer_h5_color]" class="uni-color form-control" value="{{ set.footer_h5_color ? set.footer_h5_color : 'f5f5f5' }}">*/
/* 								<input type="text" name="uni_set[footer_text_color]" class="uni-color  form-control" value="{{ set.footer_text_color ? set.footer_text_color : 'eeeeee' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_footer_column_heading }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#footer-column-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 									{% for lang in languages %}*/
/* 										<div id="footer-column-{{ lang.language_id }}" class="tab-pane">*/
/* 										{% set columns = {1:'Информация', 2:'Служба поддержки', 3:'Дополнительно', 4:'Схема проезда'} %}*/
/* 										{% for key, name in columns %}*/
/* 											<div class="input-group">*/
/* 												<span class="input-group-addon open_icon" id="_f_i_{{ lang.language_id }}_{{ key }}" onclick="popup_icons($(this).attr('id'))">Иконка: <i class="{{ set[lang.language_id].footer_column[key].icon is not defined ? 'fa fa-chevron-right' : set[lang.language_id].footer_column[key].icon }}"></i></span>*/
/* 												<input type="hidden" name="uni_set[{{ lang.language_id }}][footer_column][{{ key }}][icon]" value="{{ set[lang.language_id].footer_column[key].icon is not defined ? 'fa fa-chevron-right' : set[lang.language_id].footer_column[key].icon }}" class="form-control" />	*/
/* 												<input type="text" name="uni_set[{{ lang.language_id }}][footer_column][{{ key }}][heading]" value="{{ set[lang.language_id].footer_column[key].heading is not defined ? name : set[lang.language_id].footer_column[key].heading }}" class="form-control" />*/
/* 											</div>*/
/* 										{% endfor %}*/
/* 										</div>*/
/* 									{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_footer_links }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#footerlinks-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 									{% for lang in languages %}*/
/* 										<div id="footerlinks-{{ lang.language_id }}" class="tab-pane">*/
/* 											{% set footerlinks_num = 1 %}*/
/* 											{% for footerlinks in set[lang.language_id].footerlinks %}*/
/* 												<div class="input-group">*/
/* 													<input type="text" name="uni_set[{{ lang.language_id }}][footerlinks][{{ footerlinks_num }}][title]" value="{{ footerlinks.title }}" placeholder="Заголовок #{{ footerlinks_num }}" class="form-control" />*/
/* 													<input type="text" name="uni_set[{{ lang.language_id }}][footerlinks][{{ footerlinks_num }}][link]" value="{{ footerlinks.link }}" placeholder="Ссылка #{{ footerlinks_num }}" class="form-control" />*/
/* 													<select name="uni_set[{{ lang.language_id }}][footerlinks][{{ footerlinks_num }}][column]" class="form-control">*/
/* 													{% for column in 1..4 %}*/
/* 														<option value="{{ column }}" {{ footerlinks.column == column ? 'selected="selected"' }}>Показывать в колонке #{{ column }}</option>*/
/* 													{% endfor %}*/
/* 													</select>*/
/* 													<span class="input-group-btn btn-default" onclick="$(this).parent().remove()" title="{{ entry_delete }}"><i class="fa fa-close"></i></span>*/
/* 												</div>*/
/* 												{% set footerlinks_num = footerlinks_num + 1 %}*/
/* 											{% endfor %}*/
/* 											<div class="add-before" style="display:none">*/
/* 												{% set columns = [1, 2, 3, 4] %}*/
/* 												{% for column in columns %}*/
/* 													<option value="{{ column }}">Показывать в колонке #{{ column }}</option>*/
/* 												{% endfor %}*/
/* 											</div>*/
/* 											<a onclick="addFooterLinks('{{ lang.language_id }}', $(this).prev().html());" class="button btn btn-success">Добавить</a>*/
/* 										</div>*/
/* 									{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_footer_address }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<label><input type="checkbox" name="uni_set[footer_address]" value="1" {{ set.footer_address ? 'checked="checked"' }} /><span></span>Адрес</label><br />*/
/* 								<label><input type="checkbox" name="uni_set[footer_work_time]" value="1" {{ set.footer_work_time ? 'checked="checked"' }} /><span></span>Время работы</label><br />*/
/* 								<label><input type="checkbox" name="uni_set[footer_phone]" value="1" {{ set.footer_phone ? 'checked="checked"' }} /><span></span>Телефон</label><br />*/
/* 								<label><input type="checkbox" name="uni_set[footer_mail]" value="1" {{ set.footer_mail ? 'checked="checked"' }} /><span></span>E-mail</label>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="tab-footertext" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_footer_text }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#footer-text-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="footer-text-{{ lang.language_id }}" class="tab-pane">*/
/* 										<textarea type="text" name="uni_set[{{ lang.language_id }}][footer_text]" class="form-control">{{ set[lang.language_id].footer_text }}</textarea>*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="tab-footericons" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_footer_socials }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								{% set socials_num = 1 %}*/
/* 								{% set names = {'fa-odnoklassniki':'Одноклассники', */
/* 												'fa-vk':'ВКонтакте', */
/* 												'fa-facebook':'Facebook', */
/* 												'fa-twitter':'Twitter', */
/* 												'fa-viber':'Viber', */
/* 												'fa-whatsapp':'WhatsApp',*/
/* 												'fa-telegram-plane':'Telegram',*/
/* 												'fa-tiktok':'TikTok',*/
/* 												'fa-google-plus':'Google+', */
/* 												'fa-instagram':'Instagram', */
/* 												'fa-youtube':'Youtube', */
/* 												'fa-pinterest':'Pinterest'} %}*/
/* 								<div class="socials-icon">*/
/* 									{% for socials in set.socials %}*/
/* 										<div class="input-group">*/
/* 											<select name="uni_set[socials][{{ socials_num }}][icon]" class="form-control">*/
/* 											{% for key, name in names %}*/
/* 												<option value="{{ key }}" {{ socials.icon == key ? 'selected="selected"' }}>{{ name }}</option>*/
/* 											{% endfor %}*/
/* 											</select>*/
/* 											<input type="text" name="uni_set[socials][{{ socials_num }}][link]" value="{{ socials.link }}" placeholder="Ссылка" class="form-control" />*/
/* 											<span class="input-group-btn btn-default" onclick="$(this).parent().remove()" title="{{ entry_delete }}"><i class="fa fa-close"></i></span>*/
/* 										</div>*/
/* 										{% set socials_num = socials_num + 1 %}*/
/* 									{% endfor %}*/
/* 								</div>*/
/* 								<div class="add-before" style="display:none">*/
/* 									{% for key, name in names %}*/
/* 										<option value="{{ key }}" {{ socials.icon == key ? 'selected="selected"' }}>{{ name }}</option>*/
/* 									{% endfor %}*/
/* 								</div>*/
/* 								<a onclick="addSocials($(this).prev().html());" class="button btn btn-success">Добавить</a>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_footer_payment }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								{% set payments = {'visa':'Visa', 'master':'Mastercard', 'yandex':'Yandex',	'webmoney':'Webmoney', 'qiwi':'Qiwi', 'sberbank':'Сбербанк', 'cyberplat':'Сyberplat', 'alfa':'Альфа Банк', 'privat':'Приват', 'paypal':'Paypal',*/
/* 									'eport':'Eport', 'mailofrussia':'Почта России', 'rapida':'Rapida', 'contact':'Contact',	'vtb24':'ВТБ24', 'sms':'SMS', 'skrill':'Skrill', 'paypal':'PayPal',	'rbk':'RBK', 'western-union':'WesternUnion'} %}*/
/* 								<div class="overflow">*/
/* 								{% for key, name in payments %}*/
/* 									<label><input type="checkbox" name="uni_set[payment_icons][]" value="{{ key }}" {{ key in set.payment_icons ? 'checked="checked"' }} /><span></span>{{ name }}</label><br />*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_footer_payment2 }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								{% for key in 1..10 %}*/
/* 									<div style="float:left;margin:0 10px 10px 0">*/
/* 									<a href="" id="thumb-image-payment-{{ key }}" data-toggle="image" class="img-thumbnail">*/
/* 										<img src="{{ set.payment_icons_custom[key] ? '../image/' ~ set.payment_icons_custom[key] : placeholder }}" alt="" title="" data-placeholder="{{ placeholder }}" style="width:50px" />*/
/* 									</a>*/
/* 									<input type="hidden" name="uni_set[payment_icons_custom][{{ key }}]" value="{{ set.payment_icons_custom[key] != '' ? set.payment_icons_custom[key] }}" id="image-payment-{{ key }}" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div id="tab-home" class="tab-pane">*/
/* 					<ul class="nav nav-tabs">*/
/* 						<li class="active"><a href="#tab-defslideshow" data-toggle="tab">{{ tab_defslideshow }}</a></li>*/
/* 						<li><a href="#tab-unislideshow" data-toggle="tab">{{ tab_unislideshow }}</a></li>*/
/* 						<li><a href="#tab-homebanner" data-toggle="tab">{{ tab_homebanner }}</a></li>*/
/* 					</ul>*/
/* 					<div id="module" class="tab-content">*/
/* 						<div id="tab-defslideshow" class="tab-pane active">*/
/* 							<div class="col-sm-2">{{ entry_slideshow_hide_lable }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[hide_slideshow_title]" value="1" {{ set.hide_slideshow_title ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_slideshow_lable_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[slideshow_title_bg]" class="uni-color form-control" value="{{ set.slideshow_title_bg ? set.slideshow_title_bg : 'F6846A' }}">*/
/* 								<input type="text" name="uni_set[slideshow_title_color]" class="uni-color form-control" value="{{ set.slideshow_title_color ? set.slideshow_title_color : 'ffffff' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_slideshow_nav_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[slideshow_pagination_bg]" class="uni-color form-control" value="{{ set.slideshow_pagination_bg ? set.slideshow_pagination_bg : '149dbc' }}">*/
/* 								<input type="text" name="uni_set[slideshow_pagination_bg_active]" class="uni-color form-control" value="{{ set.slideshow_pagination_bg_active ? set.slideshow_pagination_bg_active : 'F6846A' }}">*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="tab-unislideshow" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_unislideshow_title_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[unislideshow_title_color]" class="uni-color form-control" value="{{ set.unislideshow_title_color ? set.unislideshow_title_color : 'F6846A' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_unislideshow_text_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[unislideshow_text_color]" class="uni-color form-control" value="{{ set.unislideshow_text_color ? set.unislideshow_text_color : '666' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_unislideshow_button_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[unislideshow_button_bg]" class="uni-color form-control" value="{{ set.unislideshow_button_bg ? set.unislideshow_button_bg : 'F6846A' }}">*/
/* 								<input type="text" name="uni_set[unislideshow_button_color]" class="uni-color form-control" value="{{ set.unislideshow_button_color ? set.unislideshow_button_color : 'ffffff' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_unislideshow_nav_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[unislideshow_nav_bg]" class="uni-color form-control" value="{{ set.unislideshow_nav_bg ? set.unislideshow_nav_bg : 'cccccc' }}">*/
/* 								<input type="text" name="uni_set[unislideshow_nav_bg_active]" class="uni-color form-control" value="{{ set.unislideshow_nav_bg_active ? set.unislideshow_nav_bg_active : '149dbc' }}">*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="tab-homebanner" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_homebanner_position }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<div class="input-group">*/
/* 								{% set positions = {'content_top':'Верх страницы', 'content_bottom':'Низ страницы'} %}*/
/* 								<input type="text" name="uni_set[home_banners_layout]" value="{{ set.home_banners_layout ? set.home_banners_layout : 1 }}" class="form-control" style="width:50px !important; text-align:center" />*/
/* 								<select name="uni_set[home_banners_position]" class="form-control">*/
/* 								{% for key, name in positions %}*/
/* 									<option value="{{ key }}" {{ set.home_banners_position == key ? 'selected="selected"' }}>{{ name }}</option>*/
/* 								{% endfor %}*/
/* 								</select>*/
/* 								<input type="text" name="uni_set[home_banners_position_n]" value="{{ set.home_banners_position_n ? set.home_banners_position_n : 0 }}" class="form-control" style="width:50px !important; text-align:center;" />*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_home_text_banner }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#home-banners-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 									{% for lang in languages %}*/
/* 										<div id="home-banners-{{ lang.language_id }}" class="tab-pane">*/
/* 											{% for key in 1..4 %}*/
/* 												<div class="input-group">*/
/* 													<span class="input-group-addon open_icon" id="_{{ lang.language_id }}_h_b_{{ key }}" onclick="popup_icons($(this).attr('id'))">Иконка: <i class="{{ set[lang.language_id].home_banners[key].icon }}"></i></span>*/
/* 													<input type="hidden" name="uni_set[{{ lang.language_id }}][home_banners][{{ key }}][icon]" value="{{ set[lang.language_id].home_banners[key].icon }}" class="form-control" />*/
/* 													<input type="text" name="uni_set[{{ lang.language_id }}][home_banners][{{ key }}][text]" value="{{ set[lang.language_id].home_banners[key].text }}" placeholder="Первая строка текста баннера #{{ key }}" class="form-control" style="width:200px" />*/
/* 													<input type="text" name="uni_set[{{ lang.language_id }}][home_banners][{{ key }}][text1]" value="{{ set[lang.language_id].home_banners[key].text1 }}" placeholder="Вторая строка текста баннера #{{ key }}" class="form-control" style="width:200px" />*/
/* 													<input type="text" name="uni_set[{{ lang.language_id }}][home_banners][{{ key }}][link]" value="{{ set[lang.language_id].home_banners[key].link }}" placeholder="Ссылка с баннера #{{ key }}" class="form-control" style="width:200px" />*/
/* 												</div>*/
/* 												<label><input type="checkbox" name="uni_set[{{ lang.language_id }}][home_banners][{{ key }}][link_popup]" value="1" {{ set[lang.language_id].home_banners[key].link_popup ? 'checked="checked"' }} /><span></span> открывать ссылку в popup окне?</label>*/
/* 												<label style="margin:5px 0 10px 20px"><input type="checkbox" name="uni_set[{{ lang.language_id }}][home_banners][{{ key }}][hide]" value="1" {{ set[lang.language_id].home_banners[key].hide ? 'checked="checked"' }} /><span></span> скрывать на маленьких экранах?</label>*/
/* 											{% endfor %}*/
/* 										</div>*/
/* 									{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_home_text_banner_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[home_banners_bg]" class="uni-color form-control" value="{{ set.home_banners_bg ? set.home_banners_bg : 'f5f5f5' }}">*/
/* 								<input type="text" name="uni_set[home_banners_icon_color]" class="uni-color form-control" value="{{ set.home_banners_icon_color ? set.home_banners_icon_color : 'F6846A' }}">*/
/* 								<input type="text" name="uni_set[home_banners_text_color]" class="uni-color form-control" value="{{ set.home_banners_text_color ? set.home_banners_text_color : '555555' }}">*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div id="tab-product" class="tab-pane">*/
/* 					<ul class="nav nav-tabs">*/
/* 						<li class="active"><a href="#tab-productdefault" data-toggle="tab"><span title="{{ text_new_settings }}" data-toggle="tooltip">New</span>{{ tab_productdefault }}</a></li>*/
/* 						<li><a href="#tab-productbanner" data-toggle="tab">{{ tab_productbanner }}</a></li>*/
/* 						<li><a href="#tab-productrev" data-toggle="tab">{{ tab_productrev }}</a></li>*/
/* 						<li><a href="#tab-productnews" data-toggle="tab">{{ tab_productnews }}</a></li>*/
/* 						<li><a href="#tab-productmanuf" data-toggle="tab">{{ tab_productmanuf }}</a></li>*/
/* 						<li><a href="#tab-productrel" data-toggle="tab">{{ tab_productrel }}</a></li>*/
/* 						<li><a href="#tab-productadd" data-toggle="tab">{{ tab_productadd }}</a></li>*/
/* 					</ul>*/
/* 					<div id="module" class="tab-content">*/
/* 						<div id="tab-productdefault" class="tab-pane active">*/
/* 							<div class="col-sm-12">{{ header_product_img }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_popup_img_effect_in }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<select name="uni_set[popup_img_effect_in]" class="form-control">*/
/* 									{% for effect in effects_in %}*/
/* 										{% if effect in group %}*/
/* 											<optgroup label="{{ effect }}" />*/
/* 										{% else %}*/
/* 											<option {{ effect == set.popup_img_effect_in ? 'selected="selected"' }} value="{{ effect }}">{{ effect }}</option>*/
/* 										{% endif %}*/
/* 									{% endfor %}*/
/* 								</select>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_popup_img_effect_out }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<select name="uni_set[popup_img_effect_out]" class="form-control">*/
/* 									{% for effect in effects_out %}*/
/* 										{% if effect in group %}*/
/* 											<optgroup label="{{ effect }}" />*/
/* 										{% else %}*/
/* 											<option {{ effect == set.popup_img_effect_out ? 'selected="selected"' }} value="{{ effect }}">{{ effect }}</option>*/
/* 										{% endif %}*/
/* 									{% endfor %}*/
/* 								</select>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_popup_img_blur }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[popup_img_blur]" value="1" {{ set.popup_img_blur ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12">{{ header_product_data }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_show_model }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_product_model]" value="1" {{ set.show_product_model ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_show_manuf }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_product_manuf]" value="1" {{ set.show_product_manuf ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_show_reward }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<select name="uni_set[show_product_reward]" class="form-control">*/
/* 									<option {{ set.show_product_reward == 0 ? 'selected="selected"' }} value="0">{{ text_not_show }}</option>*/
/* 									<option {{ set.show_product_reward == 1 ? 'selected="selected"' }} value="1">{{ text_reward1 }}</option>*/
/* 									<option {{ set.show_product_reward == 2 ? 'selected="selected"' }} value="2">{{ text_reward2 }}</option>*/
/* 									<option {{ set.show_product_reward == 3 ? 'selected="selected"' }} value="3">{{ text_reward3 }}</option>*/
/* 								</select>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_show_length }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<select name="uni_set[show_product_length]" class="form-control">*/
/* 									<option {{ set.show_product_length == 0 ? 'selected="selected"' }} value="0">{{ text_not_show }}</option>*/
/* 									<option {{ set.show_product_length == 1 ? 'selected="selected"' }} value="1">{{ text_right_of }}</option>*/
/* 									<option {{ set.show_product_length == 2 ? 'selected="selected"' }} value="2">{{ text_in_attr }}</option>*/
/* 								</select>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12">{{ header_product_option }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_option_img_prop }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[product][option_img_prop]" value="1" {{ set.product.option_img_prop ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_popup_option_img_width }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<div class="input-group">*/
/* 									<input type="text" name="uni_set[options_popup_img_width_p]" value="{{ set.options_popup_img_width_p ? set.options_popup_img_width_p: 100 }}" style="width:50px !important; text-align:center;" class="form-control" />*/
/* 									<span>{{ text_pix }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_option }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[change_opt_img_p]" value="1" {{ set.change_opt_img_p ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12">{{ header_product_attr }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_show_attr }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_product_attr]" value="1" {{ set.show_product_attr ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_show_attr_group }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<div class="input-group">*/
/* 									<input type="text" name="uni_set[show_product_attr_group]" value="{{ set.show_product_attr_group ? set.show_product_attr_group : '3' }}" size="4" style="width:50px !important; text-align:center;" class="form-control" />*/
/* 									<span>{{ text_item }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_show_attr_item }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<div class="input-group">*/
/* 									<input type="text" name="uni_set[show_product_attr_item]" value="{{ set.show_product_attr_item ? set.show_product_attr_item : '2' }}" size="2" style="width:50px !important; text-align:center;" class="form-control" />*/
/* 									<span>{{ text_item }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="tab-productbanner" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_product_banner_position }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								{% set position = {1:text_product_banner_position_1, 2:text_product_banner_position_2, 3:text_product_banner_position_3} %}*/
/* 								<select name="uni_set[product_banner_position]" class="form-control" >*/
/* 								{% for key, name in position %}*/
/* 									<option value="{{ key }}" {{ set.product_banner_position == key ? 'selected="selected"' }}>{{ name }}</option>*/
/* 								{% endfor %}*/
/* 								</select>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_banner }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#product-banners-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 									{% for lang in languages %}*/
/* 										{% set product_banner_num = 1 %}*/
/* 										<div id="product-banners-{{ lang.language_id }}" class="tab-pane">*/
/* 											{% for product_banner in set[lang.language_id].product_banners %}*/
/* 												<div>*/
/* 												<div class="input-group">*/
/* 													<span class="input-group-addon open_icon" id="_{{ lang.language_id }}_p_b_{{ product_banner_num }}" onclick="popup_icons($(this).attr('id'))">Иконка: <i class="{{ product_banner.icon }}"></i></span>*/
/* 													<input type="hidden" name="uni_set[{{ lang.language_id }}][product_banners][{{ product_banner_num }}][icon]" value="{{ product_banner.icon ? product_banner.icon }}" placeholder="Иконка #{{ product_banner_num }}" class="form-control" />*/
/* 													<input type="text" name="uni_set[{{ lang.language_id }}][product_banners][{{ product_banner_num }}][text]" value="{{ product_banner.text }}" placeholder="Текст #{{ product_banner_num }}" class="form-control" />*/
/* 													<input type="text" name="uni_set[{{ lang.language_id }}][product_banners][{{ product_banner_num }}][link]" value="{{ product_banner.link }}" placeholder="Ссылка с баннера #{{ product_banner_num }}" class="form-control" />*/
/* 													<span class="input-group-btn btn-default" onclick="$(this).parent().parent().remove();" title="entry_delete"><i class="fa fa-close"></i></span>*/
/* 												</div>*/
/* 												<label><input type="checkbox" name="uni_set[{{ lang.language_id }}][product_banners][{{ product_banner_num }}][link_popup]" value="1" {{ product_banner.link_popup ? 'checked="checked"' }} /><span></span> открывать ссылку в popup окне?</label>*/
/* 												<label style="margin:5px 0 10px 20px"><input type="checkbox" name="uni_set[{{ lang.language_id }}][product_banners][{{ product_banner_num }}][hide]" value="1" {{ product_banner.hide ? 'checked="checked"' }}><span></span> скрывать на маленьких экранах?</label>*/
/* 												{% set product_banner_num = product_banner_num + 1 %}*/
/* 												</div>*/
/* 											{% endfor %}*/
/* 											<hr style="margin-top:10px" />*/
/* 											<a onclick="addProductBanner('{{ lang.language_id }}');" class="button btn btn-success">Добавить</a>*/
/* 										</div>*/
/* 									{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_text_banner_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[product_banners_bg]" class="uni-color form-control" value="{{ set.product_banners_bg ? set.product_banners_bg : 'f5f5f5' }}">*/
/* 								<input type="text" name="uni_set[product_banners_icon_color]" class="uni-color form-control" value="{{ set.product_banners_icon_color ? set.product_banners_icon_color : 'F6846A' }}">*/
/* 								<input type="text" name="uni_set[product_banners_text_color]" class="uni-color form-control" value="{{ set.product_banners_text_color ? set.product_banners_text_color : '555555' }}">*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="tab-productrev" class="tab-pane">*/
/* 							<div class="col-sm-12">{{ header_product_plus_minus }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_plus_minus }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_plus_minus_review]" value="1" {{ set.show_plus_minus_review ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_plus_minus_req }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[plus_minus_review_required]" value="1" {{ set.plus_minus_review_required ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12">{{ header_add_tab }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_add_tab }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_additional_tab]" value="1" {{ set.show_additional_tab ? 'checked="checked"' }} /><span></span><label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_add_tab_title }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#additional-tab-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 									{% for lang in languages %}*/
/* 									<div id="additional-tab-{{ lang.language_id }}" class="tab-pane">*/
/* 										<div class="input-group">*/
/* 										<span class="input-group-addon open_icon" id="{{ lang.language_id }}_a_t" onclick="popup_icons($(this).attr('id'))">Иконка: <i class="{{ set[lang.language_id].additional_tab_icon }}"></i></span>*/
/* 										<input type="hidden" name="uni_set[{{ lang.language_id }}][additional_tab_icon]" value="{{ set[lang.language_id].additional_tab_icon }}" class="form-control" />*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][additional_tab_title]" value="{{ set[lang.language_id].additional_tab_title }}" class="form-control" />*/
/* 										</div>*/
/* 									</div>*/
/* 									{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_add_tab_descr }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#additional-tab-text-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 									{% for lang in languages %}*/
/* 										<div id="additional-tab-text-{{ lang.language_id }}" class="tab-pane">*/
/* 											<textarea type="text" name="uni_set[{{ lang.language_id }}][additional_tab_text]" id="additional-tab-{{ lang.language_id }}" data-lang="ru-RU" data-toggle="summernote" class="form-control summernote">{{ set[lang.language_id].additional_tab_text }}</textarea>*/
/* 										</div>*/
/* 									{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="tab-productnews" class="tab-pane">*/
/* 							<div class="col-sm-12" style="color:#f00;">{{ header_product_news }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_news }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_related_news]" value="1" {{ set.show_related_news ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_news_title }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#product-news-title-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="product-news-title-{{ lang.language_id }}" class="tab-pane">*/
/* 										<div class="input-group">*/
/* 											<span class="input-group-addon open_icon" id="p_n_b-{{ lang.language_id }}" onclick="popup_icons($(this).attr('id'))">Иконка: <i class="{{ set[lang.language_id].related_news_icon }}"></i></span>*/
/* 											<input type="hidden" name="uni_set[{{ lang.language_id }}][related_news_icon]" value="{{ set[lang.language_id].related_news_icon }}" class="form-control" />*/
/* 											<input type="text" name="uni_set[{{ lang.language_id }}][related_news_title]" value="{{ set[lang.language_id].related_news_title ? set[lang.language_id].related_news_title : 'Связанные новости' }}" class="form-control" />*/
/* 										</div>*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_news_view }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[related_news_view]" value="1" {{ set.related_news_view ? 'checked="checked"' }} /><span></span></label></div>*/
/* 						</div>*/
/* 						<div id="tab-productmanuf" class="tab-pane">*/
/* 							<div class="col-sm-12" style="color:#f00;">{{ header_manuf_block_att }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_manuf_block }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_manufacturer]" value="1" {{ set.show_manufacturer ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_manuf_block_before }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[manufacturer_position]" value="1" {{ set.manufacturer_position ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_manuf_block_title }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#manufacturer-title-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="manufacturer-title-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][manufacturer_title]" value="{{ set[lang.language_id].manufacturer_title ? set[lang.language_id].manufacturer_title : 'О производителе' }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_manuf_block_logo }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<div class="input-group">*/
/* 									<input type="text" name="uni_set[manufacturer_logo_w]" value="{{ set.manufacturer_logo_w ? set.manufacturer_logo_w : '100' }}" style="width:50px !important; text-align:center;" class="form-control" />*/
/* 									<input type="text" name="uni_set[manufacturer_logo_h]" value="{{ set.manufacturer_logo_h ? set.manufacturer_logo_h : '100' }}" style="width:50px !important; text-align:center;" class="form-control" />*/
/* 									<span>пикс.</span> */
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_manuf_block_descr }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<div class="input-group">*/
/* 									<input type="text" name="uni_set[manufacturer_text_length]" value="{{ set.manufacturer_text_length ? set.manufacturer_text_length : '250' }}" style="width:50px !important; text-align:center;" class="form-control" />*/
/* 									<span>{{ text_symbols }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="tab-productrel" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_title_related }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#related-title-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="related-title-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][related_title]" value="{{ set[lang.language_id].related_title ? set[lang.language_id].related_title : 'Рекомендуем посмотреть' }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_show_similar }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[similar][show]" value="1" {{ set.similar.show ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_title_similar }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#similar-title-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 									{% for lang in languages %}*/
/* 									<div id="similar-title-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[similar][title][{{ lang.language_id }}]" value="{{ set.similar.title[lang.language_id] ? set.similar.title[lang.language_id] : 'Похожие товары' }}" class="form-control" />*/
/* 									</div>*/
/* 									{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_similar }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<div class="input-group">*/
/* 									<input type="text" name="uni_set[similar][limit]" value="{{ set.similar.limit ? set.similar.limit : 5 }}" style="width:50px !important; text-align:center;" class="form-control" />*/
/* 									<span>{{ text_item }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_similar_main_category }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[similar][main_category]" value="1" {{ set.similar.main_category ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_similar_hide }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[similar][stock]" value="1" {{ set.similar.stock ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_similar_cache }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[similar][cache]" value="1" {{ set.similar.cache ? 'checked="checked"' }} /><span></span></label></div>*/
/* 						</div>*/
/* 						<div id="tab-productadd" class="tab-pane">*/
/* 							<div class="col-sm-12" style="color:#f00;">{{ header_product_input1 }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_sku }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#sku-text-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="sku-text-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][sku_text]" value="{{ set[lang.language_id].sku_text is not defined ? 'Артикул' : set[lang.language_id].sku_text }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_upc }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#upc-text-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 									{% for lang in languages %}*/
/* 										<div id="upc-text-{{ lang.language_id }}" class="tab-pane">*/
/* 											<input type="text" name="uni_set[{{ lang.language_id }}][upc_text]" value="{{ set[lang.language_id].upc_text is not defined ? 'UPC' : set[lang.language_id].upc_text }}" class="form-control" />*/
/* 										</div>*/
/* 									{% endfor %}	*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_ean }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#ean-text-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 									{% for lang in languages %}*/
/* 									<div id="ean-text-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][ean_text]" value="{{ set[lang.language_id].ean_text is not defined ? 'EAN' : set[lang.language_id].ean_text }}" class="form-control" />*/
/* 									</div>*/
/* 									{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_jan }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#jan-text-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="jan-text-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][jan_text]" value="{{ set[lang.language_id].jan_text is not defined ? 'JAN' : set[lang.language_id].jan_text }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_isbn }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#isbn-text-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="isbn-text-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][isbn_text]" value="{{ set[lang.language_id].isbn_text is not defined ? 'ISBN' : set[lang.language_id].isbn_text }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_mpn }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#mpn-text-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="mpn-text-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][mpn_text]" value="{{ set[lang.language_id].mpn_text is not defined ? 'MPN' : set[lang.language_id].mpn_text }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_location }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#location-text-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="location-text-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][location_text]" value="{{ set[lang.language_id].location_text is not defined ? 'Расположение' : set[lang.language_id].location_text }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div id="tab-order" class="tab-pane">*/
/* 					<ul class="nav nav-tabs">*/
/* 						<li class="active"><a href="#tab-quickorder" data-toggle="tab"><span title="{{ text_new_settings }}" data-toggle="tooltip">New</span>{{ tab_quickorder2 }}</a></li>*/
/* 						<li><a href="#tab-quickorderinput" data-toggle="tab">{{ tab_quickorder_input }}</a></li>*/
/* 						<li><a href="#tab-quickordermetric" data-toggle="tab">{{ tab_quickorder_metric }}</a></li>*/
/* 					</ul>*/
/* 					<div id="module" class="tab-content">*/
/* 						<div id="tab-quickorder" class="tab-pane active">*/
/* 							<div class="col-sm-2">{{ entry_quickorder }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_quick_order]" value="1" {{ set.show_quick_order ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_checkout_min_summ }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[quick_order][min_summ]" value="{{ set.quick_order.min_summ ? set.quick_order.min_summ : 0 }}" class="form-control" style="max-width:100px" /></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_quickorder_button }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#quick-order-icon-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="quick-order-icon-{{ lang.language_id }}" class="tab-pane">*/
/* 										<div class="input-group">*/
/* 											<span class="input-group-addon open_icon" id="q_o_i_{{ lang.language_id }}" onclick="popup_icons($(this).attr('id'))">Иконка: <i class="{{ set[lang.language_id].quick_order_icon is not defined ? 'far fa-paper-plane' : set[lang.language_id].quick_order_icon }}"></i></span>*/
/* 											<input type="hidden" name="uni_set[{{ lang.language_id }}][quick_order_icon]" value="{{ set[lang.language_id].quick_order_icon is not defined ? 'far fa-paper-plane' : set[lang.language_id].quick_order_icon }}" class="form-control" />*/
/* 											<input type="text" name="uni_set[{{ lang.language_id }}][quick_order_title]" value="{{ set[lang.language_id].quick_order_title ? set[lang.language_id].quick_order_title : 'Быстрый заказ' }}" placeholder="Текст подсказки" class="form-control" />*/
/* 										</div>*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_quickorder_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[quick_order_btn_bg]" class="uni-color form-control" value="{{ set.quick_order_btn_bg ? set.quick_order_btn_bg : 'e5e5e5' }}">*/
/* 								<input type="text" name="uni_set[quick_order_btn_color]" class="uni-color form-control" value="{{ set.quick_order_btn_color ? set.quick_order_btn_color : '404040' }}" />*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_quickorder_color1 }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[quick_order_btn_bg_hover]" class="uni-color form-control" value="{{ set.quick_order_btn_bg_hover ? set.quick_order_btn_bg_hover : 'F6846A' }}">*/
/* 								<input type="text" name="uni_set[quick_order_btn_color_hover]" class="uni-color form-control" value="{{ set.quick_order_btn_color_hover ? set.quick_order_btn_color_hover : 'ffffff' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_quickorder_button_show }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<label><input type="checkbox" name="uni_set[show_quick_order_always]" value="1" {{ set.show_quick_order_always ? 'checked="checked"' }} /><span></span>Всегда, а не только при наведении на блок товара</label>*/
/* 								<br />*/
/* 								<label><input type="checkbox" name="uni_set[show_quick_order_quantity]" value="1" {{ set.show_quick_order_quantity ? 'checked="checked"' }} /><span></span>Даже если количество товара < или = 0</label>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_quickorder_text_show }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<label><input type="checkbox" name="uni_set[show_quick_order_text]" value="1" {{ set.show_quick_order_text ? 'checked="checked"' }} /><span></span>В категориях, модулях и т.д</label>*/
/* 								<label><input type="checkbox" name="uni_set[show_quick_order_text_product]" value="1" {{ set.show_quick_order_text_product ? 'checked="checked"' }} /><span></span>В карточке товара</label>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12">{{ header_product_data }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_show_model }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_quick_order_model]" value="1" {{ set.show_quick_order_model ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_show_manuf }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_quick_order_manuf]" value="1" {{ set.show_quick_order_manuf ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_show_reward }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<select name="uni_set[show_quick_order_reward]" class="form-control">*/
/* 									<option {{ set.show_product_reward == 0 ? 'selected="selected"' }} value="0">{{ text_not_show }}</option>*/
/* 									<option {{ set.show_product_reward == 1 ? 'selected="selected"' }} value="1">{{ text_reward1 }}</option>*/
/* 									<option {{ set.show_product_reward == 2 ? 'selected="selected"' }} value="2">{{ text_reward2 }}</option>*/
/* 									<option {{ set.show_product_reward == 3 ? 'selected="selected"' }} value="3">{{ text_reward3 }}</option>*/
/* 								</select>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_show_length }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<select name="uni_set[show_quick_order_length]" class="form-control">*/
/* 									<option {{ set.show_product_length == 0 ? 'selected="selected"' }} value="0">{{ text_not_show }}</option>*/
/* 									<option {{ set.show_product_length == 1 ? 'selected="selected"' }} value="1">{{ text_right_of }}</option>*/
/* 									<option {{ set.show_product_length == 2 ? 'selected="selected"' }} value="2">{{ text_in_attr1 }}</option>*/
/* 								</select>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12">{{ header_product_attr }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_show_attr }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[quick_order_attr]" value="1" {{ set.quick_order_attr ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_show_attr_group }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<div class="input-group">*/
/* 									<input type="text" name="uni_set[quick_order_attr_group]" value="{{ set.quick_order_attr_group ? set.quick_order_attr_group : '3' }}" style="width:50px !important; text-align:center;" class="form-control" />*/
/* 									<span>{{ text_item }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_show_attr_item }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<div class="input-group">*/
/* 									<input type="text" name="uni_set[quick_order_attr_item]" value="{{ set.quick_order_attr_item ? set.quick_order_attr_item : '2' }}" style="width:50px !important; text-align:center;" class="form-control" />*/
/* 									<span>{{ text_item }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12">{{ header_quick_order_description }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_quick_order_description }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[quick_order_description]" value="1" {{ set.quick_order_description ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_quick_order_description_item }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<div class="input-group">*/
/* 									<input type="text" name="uni_set[quick_order_description_item]" value="{{ set.show_quick_order_description_item ? set.quick_order_description_item : '250' }}" style="width:50px !important; text-align:center;" class="form-control" />*/
/* 									<span>{{ text_symbols }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12">{{ header_product_option }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_option_img_prop }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[quick_order][option_img_prop]" value="1" {{ set.quick_order.option_img_prop ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_popup_option_img_width }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<div class="input-group">*/
/* 									<input type="text" name="uni_set[options_popup_img_width_q]" value="{{ set.options_popup_img_width_q ? set.options_popup_img_width_q: 100 }}" style="width:50px !important; text-align:center;" class="form-control" />*/
/* 									<span>{{ text_pix }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_quickorder_option }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[change_opt_img_q]" value="1" {{ set.change_opt_img_q ? 'checked="checked"' }} /><span></span></label></div>*/
/* 						</div>*/
/* 						<div id="tab-quickorderinput" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_quick_order_name_text }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#quick-order-name-text-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="quick-order-name-text-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][quick_order_name_text]" value="{{ set[lang.language_id].quick_order_name_text ? set[lang.language_id].quick_order_name_text : 'Ваше имя' }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_quick_order_phone_text }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#quick-order-phone-text-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="quick-order-phone-text-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][quick_order_phone_text]" value="{{ set[lang.language_id].quick_order_phone_text ? set[lang.language_id].quick_order_phone_text : 'Контактный телефон' }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_quick_order_phone_mask }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[quick_order_phone_mask]" value="{{ set.quick_order_phone_mask is not defined ? '+7 (999) 999-99-99' : set.quick_order_phone_mask }}" class="form-control" /></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_quick_order_mail }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[quick_order_mail]" value="1" {{ set.quick_order_mail ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_quick_order_mail_text }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#quick-order-mail-text-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="quick-order-mail-text-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][quick_order_mail_text]" value="{{ set[lang.language_id].quick_order_mail_text ? set[lang.language_id].quick_order_mail_text : 'Ваш e-mail' }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_quickorder_mail_cap }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[quick_order_mail_cap]" value="{{ set.quick_order_mail_cap is not defined ? 'mail@localhost.com' : set.quick_order_mail_cap }}" class="form-control" /></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_quick_order_delivery }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[quick_order_delivery]" value="1" {{ set.quick_order_delivery ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_quick_order_delivery_text }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#quick-order-delivery-text-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="quick-order-delivery-text-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][quick_order_delivery_text]" value="{{ set[lang.language_id].quick_order_delivery_text ? set[lang.language_id].quick_order_delivery_text : 'Адрес доставки' }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_quick_order_comment }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[quick_order_comment]" value="1" {{ set.quick_order_comment ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_quick_order_comment_text }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#quick-order-comment-text-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="quick-order-comment-text-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][quick_order_comment_text]" value="{{ set[lang.language_id].quick_order_comment_text ? set[lang.language_id].quick_order_comment_text : 'Комментарий' }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_show_captcha }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[quick_order][captcha]" value="1" {{ set.quick_order.captcha ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_quick_order_confirm }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[quick_order_confirm]" value="1" {{ set.quick_order_confirm ? 'checked="checked"' }} /><span></span></label></div>*/
/* 						</div>*/
/* 						<div id="tab-quickordermetric" class="tab-pane">*/
/* 							<div class="col-sm-12">{{ header_metric }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_metric_id }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[quick_order][metric_id]" value="{{ set.quick_order.metric_id }}" class="form-control" /></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_metric_target_id }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[quick_order][metric_target_id]" value="{{ set.quickorder_metric_id ? set.quickorder_metric_id : set.quick_order.metric_target_id }}" class="form-control" /></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_metric_target }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[quick_order][metric_target]" value="{{ set.quick_order.metric_target }}" class="form-control" /></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12">{{ header_analityc_p }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_analityc_category }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[quick_order][analytic_category]" value="{{ set.quick_order.analytic_category }}" class="form-control" /></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_analityc_action }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[quick_order][analytic_action]" value="{{ set.quick_order.analytic_action }}" class="form-control" /></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12"><small style="font-weight:400;color:#444">{{ entry_metric_analytic_help }}<br /><br />{{ entry_metric_analytic_dataLayer_purchase }}</small></div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div id="tab-callback" class="tab-pane">*/
/* 					<ul class="nav nav-tabs">*/
/* 						<li class="active"><a href="#tab-callback2" data-toggle="tab">{{ tab_callback2 }}</a></li>*/
/* 						<li><a href="#tab-callback3" data-toggle="tab">{{ tab_callback3 }}</a></li>*/
/* 						<li><a href="#tab-callback4" data-toggle="tab">{{ tab_callback4 }}</a></li>*/
/* 						<li><a href="#tab-callback5" data-toggle="tab">{{ tab_callback5 }}</a></li>*/
/* 					</ul>*/
/* 					<div id="module" class="tab-content">*/
/* 						<div id="tab-callback2" class="tab-pane active">*/
/* 							<div class="col-sm-2">{{ entry_show_callback }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_callback]" value="1" {{ set.show_callback ? 'checked="checked"' }} /><span></span><label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_callback_flybutton }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_fly_callback]" value="1" {{ set.show_fly_callback ? 'checked="checked"' }} /><span></span><label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_callback_flybutton1 }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[hide_fly_callback]" value="1" {{ set.hide_fly_callback ? 'checked="checked"' }} /><span></span><label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_callback_title }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#fly-callback-text-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="fly-callback-text-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][fly_callback_text]" value="{{ set[lang.language_id].fly_callback_text ? set[lang.language_id].fly_callback_text : 'Заказ звонка' }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>	*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_callback_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[fly_callback_bg]" class="uni-color form-control" value="{{ set.fly_callback_bg ? set.fly_callback_bg : 'F6846A' }}">*/
/* 								<input type="text" name="uni_set[fly_callback_color]" class="uni-color form-control" value="{{ set.fly_callback_color ? set.fly_callback_color : 'ffffff' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_show_captcha }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[callback][captcha]" value="1" {{ set.callback.captcha ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_callback_confirm }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[callback_confirm]" value="1" {{ set.callback_confirm ? 'checked="checked"' }} /><span></span></label></div>*/
/* 						</div>*/
/* 						<div id="tab-callback5" class="tab-pane">*/
/* 							<div class="col-sm-12">{{ header_metric }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_metric_id }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[callback_metric_id]" value="{{ set.callback_metric_id }}" class="form-control" /></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_metric_target }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[callback_metric_target]" value="{{ set.callback_metric_target }}" class="form-control" /></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12">{{ header_analityc }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_analityc_category }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[callback_analityc_category]" value="{{ set.callback_analityc_category }}" class="form-control" /></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_analityc_action }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[callback_analityc_action]" value="{{ set.callback_analityc_action }}" class="form-control" /></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12"><small style="font-weight:400;color:#444">{{ entry_metric_analytic_help }}</small></div>*/
/* 						</div>*/
/* 						<div id="tab-callback3" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_callback_name }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#callback-name-text-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="callback-name-text-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][callback_name_text]" value="{{ set[lang.language_id].callback_name_text ? set[lang.language_id].callback_name_text : 'Ваше имя' }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>	*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_callback_phone }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#callback-phone-text-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="callback-phone-text-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][callback_phone_text]" value="{{ set[lang.language_id].callback_phone_text ? set[lang.language_id].callback_phone_text : 'Контактный телефон' }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>	*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_callback_phone_mask }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[callback_phone_mask]" value="{{ set.callback_phone_mask is not defined ? '+7 (999) 999-99-99' : set.callback_phone_mask }}" class="form-control" /></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_callback_mail }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#callback-mail-text-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="callback-mail-text-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][callback_mail_text]" value="{{ set[lang.language_id].callback_mail_text ? set[lang.language_id].callback_mail_text : 'Ваш e-mail' }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>	*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_callback_comment }}</DIV>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#callback-comment-text-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="callback-comment-text-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][callback_comment_text]" value="{{ set[lang.language_id].callback_comment_text ? set[lang.language_id].callback_comment_text : 'Текст вопроса' }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="tab-callback4" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_show_reason1 }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_reason1]" value="1" {{ set.show_reason1 ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_text_reason1 }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#text-reason1-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="text-reason1-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][text_reason1]" value="{{ set[lang.language_id].text_reason1 ? set[lang.language_id].text_reason1 : 'Сделать заказ' }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>	*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_show_reason2 }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_reason2]" value="1" {{ set.show_reason2 ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_text_reason2 }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#text-reason2-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div  id="text-reason2-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][text_reason2]" value="{{ set[lang.language_id].text_reason2 ? set[lang.language_id].text_reason2 : 'Отменить заказ' }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>	*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_show_reason3 }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_reason3]" value="1" {{ set.show_reason3 ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_text_reason3 }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#text-reason3-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="text-reason3-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][text_reason3]" value="{{ set[lang.language_id].text_reason3 ? set[lang.language_id].text_reason3 : 'Задать вопрос' }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div id="tab-catalog" class="tab-pane">*/
/* 					<ul class="nav nav-tabs">*/
/* 						<li class="active"><a href="#tab-catalog1" data-toggle="tab">{{ tab_catalog1 }}</a></li>*/
/* 						<li><a href="#tab-catalog2" data-toggle="tab">{{ tab_catalog2 }}</a></li>*/
/* 						<li><a href="#tab-catalog3" data-toggle="tab">{{ tab_catalog3 }}</a></li>*/
/* 						<li><a href="#tab-catalog4" data-toggle="tab"><span title="{{ text_new_settings }}" data-toggle="tooltip">New</span>{{ tab_catalog4 }}</a></li>*/
/* 						<li><a href="#tab-catalog5" data-toggle="tab">{{ tab_catalog5 }}</a></li>*/
/* 					</ul>*/
/* 					<div id="module" class="tab-content">*/
/* 						<div id="tab-catalog1" class="tab-pane active">*/
/* 							<div class="col-sm-2">{{ entry_module_title }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_heading_in_admin]" value="1" {{ set.show_heading_in_admin ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_module_view }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<div class="overflow">*/
/* 									<table>*/
/* 									{% for key, module in modules %}*/
/* 										<tr>*/
/* 											<td><label><input id="module-{{ key }}" type="checkbox" name="uni_set[module_type_view][{{ key }}]" value="{{ module.name2 }}" {{ module.name2 in set.module_type_view ? 'checked="checked"' }} /><span></span></label></td>*/
/* 											<td><label for="module-{{ key }}">{{ module.name }}</label></td>  */
/* 											<td>&nbsp;&nbsp;--&nbsp;&nbsp;{{ module.name2 }}</td>*/
/* 										</tr>*/
/* 									{% endfor %}*/
/* 									</table>*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_module_type_view_mobile }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<label><input type="checkbox" name="uni_set[catalog][module_type_mobile]" value="1" {{ set.catalog.module_type_mobile ? 'checked="checked"' }} /><span></span></label>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_mod_color }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[h3_heading_color]" class="uni-color form-control" value="{{ set.h3_heading_color ? set.h3_heading_color : '333333' }}"></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_carousel_nav_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[carousel_pagination_bg]" class="uni-color form-control" value="{{ set.carousel_pagination_bg ? set.carousel_pagination_bg : '888888' }}">*/
/* 								<input type="text" name="uni_set[carousel_pagination_bg_active]" class="uni-color form-control" value="{{ set.carousel_pagination_bg_active ? set.carousel_pagination_bg_active : 'F6846A' }}">*/
/* 							</div>*/
/* 							<!--*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_module_items }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								{% set module_items = {0:{0:1}, 1:{520:2}, 2:{700:3}, 3:{940:4}, 4:{1050:4}, 5:{1400:5 }} %}*/
/* 								{% for key, items in module_items %}*/
/* 									<div class="input-group">*/
/* 										{% for key2, item in items %}*/
/* 											<input type="text" name="uni_set[module_items][{{ key }}][key]" class="form-control" value="{{ set.module_items[key].key ? set.module_items[key].key : key2 }}" style="width:60px;text-align:center" />*/
/* 											<input type="text" name="uni_set[module_items][{{ key }}][item]" class="form-control" value="{{ set.module_items[key].item ? set.module_items[key].item : item }}" style="width:60px;text-align:center" />*/
/* 										{% endfor %}*/
/* 									</div>*/
/* 									<div style="height:5px"></div>*/
/* 								{% endfor %}*/
/* 							</div>*/
/* 							-->*/
/* 						</div>*/
/* 						<div id="tab-catalog2" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_subcategory_view }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								{% set columns = {6:2, 4:3, 3:4, 2:6, 1:12} %}*/
/* 								{% set columnsFHD = {5:4, 4:5, '3-1':6, '2-1':8, 2:10} %}*/
/* 								<div style="float:left;margin:5px 5px 0 0">*/
/* 									<div class="input-group">*/
/* 										<span class="input-group-addon">Десктоп FullHD:</span>*/
/* 										<select name="uni_set[subcategory_column][]" class="form-control" style="width:55px;">*/
/* 										{% for key, column in columnsFHD %}*/
/* 											<option value="col-xxl-{{ key }}" {{ 'col-xxl-' ~ key in set.subcategory_column ? 'selected="selected"' }}>{{ column }}</option>*/
/* 										{% endfor %}*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div style="float:left;margin:5px 5px 0 0">*/
/* 									<div class="input-group">*/
/* 										<span class="input-group-addon">Десктоп:</span>*/
/* 										<select name="uni_set[subcategory_column][]" class="form-control" style="width:55px;">*/
/* 										{% for key, column in columns %}*/
/* 											<option value="col-lg-{{ key }}" {{ 'col-lg-' ~ key in set.subcategory_column ? 'selected="selected"' }}>{{ column }}</option>*/
/* 										{% endfor %}*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div style="float:left;margin:5px 5px 0 0">*/
/* 									<div class="input-group">*/
/* 										<span class="input-group-addon">Ноутбук:</span>*/
/* 										<select name="uni_set[subcategory_column][]" class="form-control" style="width:55px;">*/
/* 										{% for key, column in columns %}*/
/* 											<option value="col-md-{{ key }}" {{ 'col-md-' ~ key in set.subcategory_column ? 'selected="selected"' }}>{{ column }}</option>*/
/* 										{% endfor %}*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div style="float:left;margin:5px 5px 0 0">*/
/* 									<div class="input-group">*/
/* 										<span class="input-group-addon">Планшет:</span>*/
/* 										<select name="uni_set[subcategory_column][]" class="form-control" style="width:55px;">*/
/* 										{% for key, column in columns %}*/
/* 											<option value="col-sm-{{ key }}" {{ 'col-sm-' ~ key in set.subcategory_column ? 'selected="selected"' }}>{{ column }}</option>*/
/* 										{% endfor %}*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div style="float:left;margin:5px 5px 0 0">*/
/* 									<div class="input-group">*/
/* 										<span class="input-group-addon">Смартфон:</span>*/
/* 										<select name="uni_set[subcategory_column][]" class="form-control" style="width:55px;">*/
/* 										{% for key, column in columns %}*/
/* 											<option value="col-xs-{{ key }}" {{ 'col-xs-' ~ key in set.subcategory_column ? 'selected="selected"' }}>{{ column }}</option>*/
/* 										{% endfor %}*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_subcategory_mobile_view }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<select name="uni_set[subcategory_mobile_view]" class="form-control">*/
/* 									<option value="default" {{ set.subcategory_mobile_view == 'default' ? 'selected="selected"' }}>{{ text_subcategory_default }}</option>*/
/* 									<option value="imghide" {{ set.subcategory_mobile_view == 'imghide' ? 'selected="selected"' }}>{{ text_subcategory_imghide }}</option>*/
/* 									<option value="select" {{ set.subcategory_mobile_view == 'select' ? 'selected="selected"' }}>{{ text_subcategory_select }}</option>*/
/* 								</select>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_cat_desc }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								{% set positions = {'top':'Перед списком товаров', 'bottom':'После списка товаров'} %}*/
/* 								<select name="uni_set[cat_desc_pos]" class="form-control">*/
/* 								{% for key, name in positions %}*/
/* 									<option value="{{ key }}" {{ set.cat_desc_pos == key ? 'selected="selected"' }}>{{ name }}</option>*/
/* 								{% endfor %}*/
/* 								</select>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_button_view }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<label><input type="checkbox" name="uni_set[show_grid_button]" value="1" {{ set.show_grid_button ? 'checked="checked"' }} /><span></span>Сетка</label>*/
/* 								<!-- <label><input type="checkbox" name="uni_set[show_grid2_button]" value="1" {{ set.show_grid2_button ? 'checked="checked"' }} /><span></span>Сетка2</label> -->*/
/* 								<label><input type="checkbox" name="uni_set[show_list_button]" value="1" {{ set.show_list_button ? 'checked="checked"' }} /><span></span>Список</label>*/
/* 								<label><input type="checkbox" name="uni_set[show_compact_button]" value="1" {{ set.show_compact_button ? 'checked="checked"' }} /><span></span>Компактный</label>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_default_view }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								{% set views = {'grid':'Сетка', 'list':'Список', 'compact':'Компактный'} %}*/
/* 								<select name="uni_set[default_view]" class="form-control">*/
/* 								{% for key, view in views %}*/
/* 									<option value="{{ key }}" {{ set.default_view and set.default_view == key ? 'selected="selected"' }}>{{ view }}</option>*/
/* 								{% endfor %}*/
/* 								</select>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_catalog_limit_status }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<label><input type="checkbox" name="uni_set[catalog][limit][status]" value="1" {{ set.catalog.limit.status ? 'checked="checked"' }} /><span></span></label>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_catalog_limit_value }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[catalog][limit][value]" value="{{ set.catalog.limit.value ? set.catalog.limit.value : '12,24,48,96' }}" class="form-control" />*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_sort_qty }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								{% set sorts_qty = {'0':text_sort_qty, '1':text_sort_qty_1, '2':text_sort_qty_2} %}*/
/* 								<select name="uni_set[sort_qty]" class="form-control">*/
/* 								{% for key, sort_qty in sorts_qty %}*/
/* 									<option value="{{ key }}" {{ set.sort_qty == key ? 'selected="selected"' }}>{{ sort_qty }}</option>*/
/* 								{% endfor %}*/
/* 								</select>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_button_showmore }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[button_showmore]" value="1" {{ set.button_showmore? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_ajax_pagination }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[ajax_pagination]" value="1" {{ set.ajax_pagination? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_ajax_filter }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[ajax_filter]" value="1" {{ set.ajax_filter? 'checked="checked"' }} /><span></span></label></div>*/
/* 						</div>*/
/* 						<div id="tab-catalog3" class="tab-pane">*/
/* 							<div class="col-sm-12">{{ header_prod_name }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_prod_items_on_mobile }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[catalog][items_on_mobile]" value="2" {{ set.catalog.items_on_mobile? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_prod_name_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[product_thumb_h4_color]" class="uni-color form-control" value="{{ set.product_thumb_h4_color ? set.product_thumb_h4_color : 'F6846A' }}">*/
/* 								<input type="text" name="uni_set[product_thumb_h4_color_hover]" class="uni-color form-control" value="{{ set.product_thumb_h4_color_hover ? set.product_thumb_h4_color_hover : '149dbc' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_show_additional_image }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[catalog][addit_img]" value="1" {{ set.catalog.addit_img ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_block_descr }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_description]" value="1" {{ set.show_description ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_block_descr1 }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_description_alt]" value="1" {{ set.show_description_alt ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_block_descr2 }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[catalog][description_hover]" value="1" {{ set.catalog.description_hover ? 'checked="checked"' }} /><span></span></label></div>*/
/* 						</div>*/
/* 						<div id="tab-catalog4" class="tab-pane">*/
/* 							<div class="col-sm-12">{{ header_product_block_attr }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_block_attr }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_attr]" value="1" {{ set.show_attr ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_block_attr_hover }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[catalog][attr_hover]" value="1" {{ set.catalog.attr_hover ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_show_attr_group }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<div class="input-group">*/
/* 									<input type="text" name="uni_set[show_attr_group]" value="{{ set.show_attr_group ? set.show_attr_group : '3' }}" style="width:50px !important; text-align:center;" class="form-control" />*/
/* 									<span>{{ text_item }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_show_attr_item }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<div class="input-group">*/
/* 									<input type="text" name="uni_set[show_attr_item]" value="{{ set.show_attr_item ? set.show_attr_item : '2' }}" style="width:50px !important; text-align:center;" class="form-control" />*/
/* 									<span>{{ text_item }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_block_attr1 }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_attr_name]" value="1" {{ set.show_attr_name ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12">{{ header_product_block_option }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_block_option }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_options]" value="1" {{ set.show_options ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_block_option_hover }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[catalog][option_hover]" value="1" {{ set.catalog.option_hover ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_block_option2 }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<div class="input-group">*/
/* 									<input type="text" name="uni_set[show_options_item]" value="{{ set.show_options_item ? set.show_options_item : '3' }}" style="width:50px !important; text-align:center;" class="form-control" />*/
/* 									<span>{{ text_item }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_option_img_prop }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[catalog][option_img_prop]" value="1" {{ set.catalog.option_img_prop ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_popup_option_img_width }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<div class="input-group">*/
/* 									<input type="text" name="uni_set[options_popup_img_width]" value="{{ set.options_popup_img_width ? set.options_popup_img_width: 100 }}" style="width:50px !important; text-align:center;" class="form-control" />*/
/* 									<span>{{ text_pix }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_block_option3 }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[change_opt_img]" value="1" {{ set.change_opt_img ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_option_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[options_bg]" class="uni-color form-control" value="{{ set.options_bg ? set.options_bg : 'eeeeee' }}">*/
/* 								<input type="text" name="uni_set[options_color]" class="uni-color form-control" value="{{ set.options_color ? set.options_color : '555' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_option_color2 }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[options_bg_active]" class="uni-color form-control" value="{{ set.options_bg_active ? set.options_bg_active : 'F6846A' }}">*/
/* 								<input type="text" name="uni_set[options_color_active]" class="uni-color form-control" value="{{ set.options_color_active ? set.options_color_active : '555' }}">*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="tab-catalog5" class="tab-pane">*/
/* 							<div class="col-sm-12">{{ header_product_block_rating }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_block_rating }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_rating]" value="1" {{ set.show_rating ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_block_rating1 }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_rating_count]" value="1" {{ set.show_rating_count ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_rating_color }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[rating_star_color]" class="uni-color form-control" value="{{ set.rating_star_color ? set.rating_star_color : 'F6846A' }}"></div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div id="tab-stock-status" class="tab-pane">*/
/* 					<ul class="nav nav-tabs">*/
/* 						<li class="active"><a href="#tab-timer" data-toggle="tab">{{ tab_timer }}</a></li>*/
/* 						<li><a href="#tab-indicator" data-toggle="tab">{{ tab_indicator }}</a></li>*/
/* 						<li><a href="#tab-quantity" data-toggle="tab"><span title="{{ text_new_settings }}" data-toggle="tooltip">New</span>{{ tab_quantity }}</a></li>*/
/* 					</ul>*/
/* 					<div id="module" class="tab-content">*/
/* 						<div id="tab-timer" class="tab-pane active">*/
/* 							<div class="col-sm-2">{{ entry_show_special_timer }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_special_timer]" value="1" {{ set.show_special_timer ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_special_timer_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[special_timer_bg]" class="uni-color form-control" value="{{ set.special_timer_bg ? set.special_timer_bg : 'F7F7F7' }}">*/
/* 								<input type="text" name="uni_set[special_timer_color]" class="uni-color form-control" value="{{ set.special_timer_color ? set.special_timer_color : 'e66761' }}">*/
/* 								<input type="text" name="uni_set[special_timer_text_color]" class="uni-color form-control" value="{{ set.special_timer_text_color ? set.special_timer_text_color : '777777' }}">*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="tab-indicator" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_show_stock_indicator }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								{% set indicators = {'0':'Выключено', '1':'Полоса наличия', '2':'Текст'} %}*/
/* 								<select name="uni_set[show_stock_indicator]" class="form-control">*/
/* 								{% for key, name in indicators %}*/
/* 									<option value="{{ key }}" {{ set.show_stock_indicator == key ? 'selected="selected"' }}>{{ name }}</option>*/
/* 								{% endfor %}*/
/* 								</select>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_stock_indicator_full }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<div class="input-group">*/
/* 									<input type="text" name="uni_set[stock_indicator_full]" value="{{ set.stock_indicator_full ? set.stock_indicator_full : '100' }}" style="width:50px !important; text-align:center;" class="form-control" />*/
/* 									<input type="text" name="uni_set[stock_indicator_full_opt]" value="{{ set.stock_indicator_full_opt ? set.stock_indicator_full_opt : '100' }}" style="width:50px !important; text-align:center;" class="form-control" />*/
/* 									<span>{{ text_item }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_stock_indicator_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[stock_i_c_0]" class="uni-color form-control" value="{{ set.stock_i_c_0 ? set.stock_i_c_0 : 'f5f5f5' }}">*/
/* 								<input type="text" name="uni_set[stock_i_c_1]" class="uni-color form-control" value="{{ set.stock_i_c_1 ? set.stock_i_c_1 : 'F6846A' }}">*/
/* 								<input type="text" name="uni_set[stock_i_c_2]" class="uni-color form-control" value="{{ set.stock_i_c_2 ? set.stock_i_c_2 : 'F69E65' }}">*/
/* 								<input type="text" name="uni_set[stock_i_c_3]" class="uni-color form-control" value="{{ set.stock_i_c_3 ? set.stock_i_c_3 : '78E026' }}">*/
/* 								<input type="text" name="uni_set[stock_i_c_4]" class="uni-color form-control" value="{{ set.stock_i_c_4 ? set.stock_i_c_4 : '7CD14F' }}">*/
/* 								<input type="text" name="uni_set[stock_i_c_5]" class="uni-color form-control" value="{{ set.stock_i_c_5 ? set.stock_i_c_5 : '6AB344' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_stock_indicator_text }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#stock-status-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="stock-status-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][stock_i_t_0]" class="form-control text" value="{{ set[lang.language_id].stock_i_t_0 ? set[lang.language_id].stock_i_t_0 : 'Закончился' }}">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][stock_i_t_1]" class="form-control text" value="{{ set[lang.language_id].stock_i_t_1 ? set[lang.language_id].stock_i_t_1 : 'Очень мало' }}">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][stock_i_t_2]" class="form-control text" value="{{ set[lang.language_id].stock_i_t_2 ? set[lang.language_id].stock_i_t_2 : 'Мало' }}">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][stock_i_t_3]" class="form-control text" value="{{ set[lang.language_id].stock_i_t_3 ? set[lang.language_id].stock_i_t_3 : 'Достаточно' }}">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][stock_i_t_4]" class="form-control text" value="{{ set[lang.language_id].stock_i_t_4 ? set[lang.language_id].stock_i_t_4 : 'Много' }}">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][stock_i_t_5]" class="form-control text" value="{{ set[lang.language_id].stock_i_t_5 ? set[lang.language_id].stock_i_t_5 : 'Очень много' }}">*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="tab-quantity" class="tab-pane">*/
/* 							<div class="col-sm-12">{{ header_block_quantity }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_block_quantity }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[qty_switch][enabled]" value="1" {{ set.qty_switch.enabled ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_block_quantity1 }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[qty_switch][enabled_all]" value="1" {{ set.qty_switch.enabled_all ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_product_block_quantity2 }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[qty_switch][step]" value="1" {{ set.qty_switch.step ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12">{{ header_liveprice }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_liveprice }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[liveprice]" value="1" {{ set.liveprice ? 'checked="checked"' }} /><span></span></label></div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div id="tab-contacts" class="tab-pane">*/
/* 					<ul class="nav nav-tabs">*/
/* 						<li class="active"><a href="#tab-contact1" data-toggle="tab">{{ tab_contact1 }}</a></li>*/
/* 					</ul>*/
/* 					<div id="module" class="tab-content">*/
/* 						<div id="tab-contact1" class="tab-pane active">*/
/* 							<div class="col-sm-2">{{ entry_contact_text }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#text-in-contacts-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="text-in-contacts-{{ lang.language_id }}" class="tab-pane">*/
/* 										<textarea type="text" name="uni_set[{{ lang.language_id }}][text_in_contacts]" id="text_in_contacts_{{ lang.language_id }}" class="form-control">{{ set[lang.language_id].text_in_contacts }}</textarea>*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_maps }}</div>*/
/* 							<div class="col-sm-10"><textarea type="text" name="uni_set[maps]" class="form-control">{{ set.maps }}</textarea></div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div id="tab-sticker" class="tab-pane">*/
/* 					<ul class="nav nav-tabs">*/
/* 						<li class="active"><a href="#tab-stiker1" data-toggle="tab">{{ tab_sticker1 }}</a></li>*/
/* 						<li><a href="#tab-stiker2" data-toggle="tab">{{ tab_sticker2 }}</a></li>*/
/* 						<li><a href="#tab-stiker3" data-toggle="tab">{{ tab_sticker3 }}</a></li>*/
/* 						<li><a href="#tab-stiker4" data-toggle="tab">{{ tab_sticker4 }}</a></li>*/
/* 						<li><a href="#tab-stiker5" data-toggle="tab">{{ tab_sticker5 }}</a></li>*/
/* 						<li><a href="#tab-stiker6" data-toggle="tab">{{ tab_sticker6 }}</a></li>*/
/* 						<li><a href="#tab-stiker7" data-toggle="tab">{{ tab_sticker7 }}</a></li>*/
/* 						<li><a href="#tab-stiker8" data-toggle="tab">{{ tab_sticker8 }}</a></li>*/
/* 						<li><a href="#tab-stiker9" data-toggle="tab">{{ tab_sticker9 }}</a></li>*/
/* 						<li><a href="#tab-stiker10" data-toggle="tab">{{ tab_sticker10 }}</a></li>*/
/* 					</ul>*/
/* 					<div id="module" class="tab-content">*/
/* 						<div id="tab-stiker1" class="tab-pane active">*/
/* 							<div class="col-sm-2">{{ entry_show_sticker_special }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[sticker_special]" value="1" {{ set.sticker_special ? 'checked="checked"' }} /><span></span><label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_sticker_spec }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[sticker_special_percent]" value="1" {{ set.sticker_special_percent ? 'checked="checked"' }} /><span></span><label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_sticker_spec_text }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#sticker-special-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="sticker-special-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][sticker_special_text]" value="{{ set[lang.language_id].sticker_special_text is not defined ? 'Ваша скидка:' : set[lang.language_id].sticker_special_text }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_sticker_spec_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[sticker_special_background_color]" class="uni-color form-control" value="{{ set.sticker_special_background_color ? set.sticker_special_background_color : 'F6846A' }}">*/
/* 								<input type="text" name="uni_set[sticker_special_text_color]" class="uni-color form-control" value="{{ set.sticker_special_text_color ? set.sticker_special_text_color : 'ffffff' }}">*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="tab-stiker2" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_show_sticker_new }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[sticker_new]" value="1" {{ set.sticker_new ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_sticker_new_date }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<div class="input-group">*/
/* 									<input type="text" name="uni_set[sticker_new_date]" value="{{ set.sticker_new_date ? set.sticker_new_date : '30' }}" style="width:70px !important; text-align:center;" class="form-control" />*/
/* 									<span>дней</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_sticker_new_text }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#sticker-latest-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 									{% for lang in languages %}*/
/* 									<div id="sticker-latest-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][sticker_new_text]" value="{{ set[lang.language_id].sticker_new_text is not defined ? 'Новинка' : set[lang.language_id].sticker_new_text }}" class="form-control" />*/
/* 									</div>*/
/* 									{% endfor %}*/
/* 								</div>*/
/* 							</div>		*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_sticker_new_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[sticker_new_background_color]" class="uni-color form-control" value="{{ set.sticker_new_background_color ? set.sticker_new_background_color : '149dbc' }}">*/
/* 								<input type="text" name="uni_set[sticker_new_text_color]" class="uni-color form-control" value="{{ set.sticker_new_text_color ? set.sticker_new_text_color : 'FFFFFF' }}">*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="tab-stiker3" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_show_sticker_bestseller }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[sticker_bestseller]" value="1" {{ set.sticker_bestseller ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_sticker_bestseller_item }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<div class="input-group">*/
/* 									<input type="text" name="uni_set[sticker_bestseller_item]" value="{{ set.sticker_bestseller_item ? set.sticker_bestseller_item : '5' }}" style="width:70px !important; text-align:center;" class="form-control" />*/
/* 									<span>продаж</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_sticker_bestseller_text }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#sticker-bestseller-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="sticker-bestseller-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][sticker_bestseller_text]" value="{{ set[lang.language_id].sticker_bestseller_text is not defined ? 'Лидер продаж!' : set[lang.language_id].sticker_bestseller_text }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_sticker_best_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[sticker_bestseller_background_color]" class="uni-color form-control" value="{{ set.sticker_bestseller_background_color }}">*/
/* 								<input type="text" name="uni_set[sticker_bestseller_text_color]" class="uni-color form-control" value="{{ set.sticker_bestseller_text_color }}">*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="tab-stiker4" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_sticker_rew }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[sticker_reward]" value="1" {{ set.sticker_reward ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_sticker_rew_text }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#sticker-reward-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="sticker-reward-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][sticker_reward_text]" value="{{ set[lang.language_id].sticker_reward_text is not defined ? 'В подарок:' : set[lang.language_id].sticker_reward_text }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}	*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_sticker_rew_text1 }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#sticker-reward1-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="sticker-reward1-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][sticker_reward_text_after]" value="{{ set[lang.language_id].sticker_reward_text_after is not defined ? 'бонусов' : set[lang.language_id].sticker_reward_text_after }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>										*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_sticker_rew_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[sticker_reward_background_color]" class="uni-color form-control" value="{{ set.sticker_reward_background_color }}">*/
/* 								<input type="text" name="uni_set[sticker_reward_text_color]" class="uni-color form-control" value="{{ set.sticker_reward_text_color }}">*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="tab-stiker5" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_sku_as_sticker }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[sku_as_sticker]" value="1" {{ set.sku_as_sticker ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_additional_sticker_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[sticker_sku_background_color]" class="uni-color form-control" value="{{ set.sticker_sku_background_color }}">*/
/* 								<input type="text" name="uni_set[sticker_sku_text_color]" class="uni-color form-control" value="{{ set.sticker_sku_text_color }}">*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="tab-stiker6" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_upc_as_sticker }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[upc_as_sticker]" value="1" {{ set.upc_as_sticker ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_additional_sticker_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[sticker_upc_background_color]" class="uni-color form-control" value="{{ set.sticker_upc_background_color }}">*/
/* 								<input type="text" name="uni_set[sticker_upc_text_color]" class="uni-color form-control" value="{{ set.sticker_upc_text_color }}">*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="tab-stiker7" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_ean_as_sticker }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[ean_as_sticker]" value="1" {{ set.ean_as_sticker ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_additional_sticker_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[sticker_ean_background_color]" class="uni-color form-control" value="{{ set.sticker_ean_background_color }}">*/
/* 								<input type="text" name="uni_set[sticker_ean_text_color]" class="uni-color form-control" value="{{ set.sticker_ean_text_color }}">*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="tab-stiker8" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_jan_as_sticker }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[jan_as_sticker]" value="1" {{ set.jan_as_sticker ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_additional_sticker_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[sticker_jan_background_color]" class="uni-color form-control" value="{{ set.sticker_jan_background_color }}">*/
/* 								<input type="text" name="uni_set[sticker_jan_text_color]" class="uni-color form-control" value="{{ set.sticker_jan_text_color }}">*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="tab-stiker9" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_isbn_as_sticker }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[isbn_as_sticker]" value="1" {{ set.isbn_as_sticker ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_additional_sticker_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[sticker_isbn_background_color]" class="uni-color form-control" value="{{ set.sticker_isbn_background_color }}">*/
/* 								<input type="text" name="uni_set[sticker_isbn_text_color]" class="uni-color form-control" value="{{ set.sticker_isbn_text_color }}">*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="tab-stiker10" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_mpn_as_sticker }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[mpn_as_sticker]" value="1" {{ set.mpn_as_sticker ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_additional_sticker_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[sticker_mpn_background_color]" class="uni-color form-control" value="{{ set.sticker_mpn_background_color }}">*/
/* 								<input type="text" name="uni_set[sticker_mpn_text_color]" class="uni-color form-control" value="{{ set.sticker_mpn_text_color }}">*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div id="tab-login" class="tab-pane">*/
/* 					<ul class="nav nav-tabs">*/
/* 						<li class="active"><a href="#tab-login1" data-toggle="tab">{{ tab_login1 }}</a></li>*/
/* 						<li><a href="#tab-register1" data-toggle="tab">{{ tab_register1 }}</a></li>*/
/* 					</ul>*/
/* 					<div id="module" class="tab-content">*/
/* 						<div id="tab-login1" class="tab-pane active">*/
/* 							<div class="col-sm-2">{{ entry_popup_login }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_login]" value="1" {{ set.show_login ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_popup_login_mail }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#login-mail-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="login-mail-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][login_mail_text]" value="{{ set[lang.language_id].login_mail_text ? set[lang.language_id].login_mail_text : 'Ваш e-mail' }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}	*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_popup_login_pass }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#login-password-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="login-password-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][login_password_text]" value="{{ set[lang.language_id].login_password_text ? set[lang.language_id].login_password_text : 'Ваш пароль' }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_popup_login_forg }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_login_forgotten]" value="1" {{ set.show_login_forgotten ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_popup_login_reg }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_login_register]" value="1" {{ set.show_login_register ? 'checked="checked"' }} /><span></span></label></div>*/
/* 						</div>*/
/* 						<div id="tab-register1" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_popup_reg }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_register]" value="1" {{ set.show_register ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_popup_reg_name }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_name]" value="1" {{ set.show_name ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_popup_reg_name_text }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#register-name-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="register-name-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][register_name_text]" value="{{ set[lang.language_id].register_name_text ? set[lang.language_id].register_name_text : 'Ваше имя' }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_popup_reg_name1 }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_lastname]" value="1" {{ set.show_lastname ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_popup_reg_name1_text }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#register-lastname-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="register-lastname-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][register_lastname_text]" value="{{ set[lang.language_id].register_lastname_text ?set[lang.language_id].register_lastname_text : 'Ваша фамилия' }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_popup_reg_mail_text }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#register-mail-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="register-mail-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][register_mail_text]" value="{{ set[lang.language_id].register_mail_text ? set[lang.language_id].register_mail_text : 'Ваш e-mail' }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_popup_reg_phone }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_phone]" value="1" {{ set.show_phone ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_popup_reg_phone_text }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#register-phone-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="register-phone-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][register_phone_text]" value="{{ set[lang.language_id].register_phone_text ? set[lang.language_id].register_phone_text : 'Контактный номер телефона' }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_popup_reg_phone_mask }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[register_phone_mask]" value="{{ set.register_phone_mask is not defined ? '+7 (999) 999-99-99' : set.register_phone_mask }}" class="form-control" /></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_popup_reg_pass_text }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#register-password-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="register-password-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][register_password_text]" value="{{ set[lang.language_id].register_password_text ? set[lang.language_id].register_password_text : 'Придумайте пароль' }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_show_captcha }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[register][captcha]" value="1" {{ set.register.captcha ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_popup_reg_confirm }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_register_confirm]" value="1" {{ set.show_register_confirm ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_popup_reg_login }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_register_login]" value="1" {{ set.show_register_login ? 'checked="checked"' }} /><span></span></label></div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div id="tab-checkout" class="tab-pane">*/
/* 					<ul class="nav nav-tabs">*/
/* 						<li class="active"><a href="#tab-checkout1" data-toggle="tab"><span title="{{ text_new_settings }}" data-toggle="tooltip">New</span>{{ tab_checkout1 }}</a></li>*/
/* 						<li><a href="#tab-checkout6" data-toggle="tab">{{ tab_checkout6 }}</a></li>*/
/* 						<li><a href="#tab-checkout2" data-toggle="tab">{{ tab_checkout2 }}</a></li>*/
/* 						<li><a href="#tab-checkout3" data-toggle="tab">{{ tab_checkout3 }}</a></li>*/
/* 						<li><a href="#tab-checkout4" data-toggle="tab">{{ tab_checkout4 }}</a></li>*/
/* 						<li><a href="#tab-checkout5" data-toggle="tab"><span title="{{ text_new_settings }}" data-toggle="tooltip">New</span>{{ tab_checkout5 }}</a></li>*/
/* 					</ul>*/
/* 					<div id="module" class="tab-content">*/
/* 						<div id="tab-checkout1" class="tab-pane active">*/
/* 							<div class="col-sm-2">{{ entry_checkout }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_checkout]" value="1" {{ set.show_checkout ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_checkout_min_summ }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[checkout][min_summ]" value="{{ set.checkout.min_summ ? set.checkout.min_summ : 0 }}" class="form-control" style="max-width:100px" /></div>*/
/* 						</div>*/
/* 						<div id="tab-checkout6" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_checkout_name_text }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#checkout-name-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang	in languages %}*/
/* 									<div id="checkout-name-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][checkout_name_text]" value="{{ set[lang.language_id].checkout_name_text ? set[lang.language_id].checkout_name_text : 'Ваше имя' }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_checkout_name1 }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[checkout_lastname]" value="1" {{ set.checkout_lastname ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_checkout_name1_text }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#checkout-lastname-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="checkout-lastname-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][checkout_lastname_text]" value="{{ set[lang.language_id].checkout_lastname_text ? set[lang.language_id].checkout_lastname_text : 'Ваша фамилия' }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}	*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_checkout_mail }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[checkout_email]" value="1" {{ set.checkout_email ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_checkout_mail_text }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#checkout-email-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="checkout-email-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][checkout_email_text]" value="{{ set[lang.language_id].checkout_email_text ? set[lang.language_id].checkout_email_text : 'Ваш e-mail' }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_checkout_mail_cap }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[checkout_mail_cap]" value="{{  set.checkout_mail_cap is not defined ? 'mail@localhost.com' : set.checkout_mail_cap }}" class="form-control" /></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_checkout_phone }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[checkout_phone]" value="1" {{ set.checkout_phone ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_checkout_phone_text }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#checkout-phone-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="checkout-phone-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][checkout_phone_text]" value="{{ set[lang.language_id].checkout_phone_text ? set[lang.language_id].checkout_phone_text : 'Контактный телефон' }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>										*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_checkout_phone_mask }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[checkout_phone_mask]" value="{{ set.checkout_phone_mask is not defined ? '+7 (999) 999-99-99' : set.checkout_phone_mask }}" class="form-control" /></div>							*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_checkout_passgen }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[checkout_passgen]" value="1" {{ set.checkout_passgen ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_checkout_pass_text }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#checkout-password-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="checkout-password-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][checkout_password_text]" value="{{ set[lang.language_id].checkout_password_text ? set[lang.language_id].checkout_password_text : 'Придумайте пароль' }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_checkout_pass_conf }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[checkout_password_confirm]" value="1" {{ set.checkout_password_confirm ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_checkout_pass_conf_text }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#checkout-password-c-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="checkout-password-c-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][checkout_password_confirm_text]" value="{{ set[lang.language_id].checkout_password_confirm_text ? set[lang.language_id].checkout_password_confirm_text : 'Повторите пароль' }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="tab-checkout2" class="tab-pane">*/
/* 							<div class="col-sm-12" style="color:#f00;">{{ header_checkout_address2 }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_checkout_address_blocked }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[checkout_address_blocked]" value="1" {{ set.checkout_address_blocked ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_checkout_country }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[checkout_country_zone]" value="1" {{ set.checkout_country_zone ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_checkout_city }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[checkout_city]" value="1" {{ set.checkout_city ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_checkout_city_text }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#checkout-city-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="checkout-city-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][checkout_city_text]" value="{{ set[lang.language_id].checkout_city_text ? set[lang.language_id].checkout_city_text : 'Город' }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_checkout_postcode }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[checkout_postcode]" value="1" {{ set.checkout_postcode ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_checkout_postcode_text }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#checkout-postcode-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="checkout-postcode-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][checkout_postcode_text]" value="{{ set[lang.language_id].checkout_postcode_text ? set[lang.language_id].checkout_postcode_text : 'Индекс' }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_checkout_address }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[checkout_address]" value="1" {{ set.checkout_address ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_checkout_address_text }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#checkout-address-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="checkout-address-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][checkout_address_text]" value="{{ set[lang.language_id].checkout_address_text ? set[lang.language_id].checkout_address_text : 'Ваш адрес' }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_checkout_address1 }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[checkout_address2]" value="1" {{ set.checkout_address2 ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_checkout_address1_text }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#checkout-address2-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="checkout-address2-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][checkout_address2_text]" value="{{ set[lang.language_id].checkout_address2_text ? set[lang.language_id].checkout_address2_text : 'Ваш адрес, продолжение' }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="tab-checkout3" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_checkout_shipping_title }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[checkout_shipping_title]" value="1" {{ set.checkout_shipping_title ? 'checked="checked"' }} /><span></span></label></div>*/
/* 						</div>*/
/* 						<div id="tab-checkout4" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_checkout_related }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[checkout_related_product]" value="1" {{ set.checkout_related_product ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_checkout_related_title }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#checkout-related-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="checkout-related-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="uni_set[{{ lang.language_id }}][checkout_related_text]" value="{{ set[lang.language_id].checkout_related_text ? set[lang.language_id].checkout_related_text : 'Обратите внимание' }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_checkout_related_product }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[checkout_related_product1]" value="1" {{ set.checkout_related_product1 ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_checkout_related_product1 }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[checkout_related_product2]" value="1" {{ set.checkout_related_product2 ? 'checked="checked"' }} /><span></span></label></div>*/
/* 						</div>*/
/* 						<div id="tab-checkout5" class="tab-pane">*/
/* 							<div class="col-sm-12">{{ header_metric }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_metric_id }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[checkout][metric_id]" value="{{ set.checkout.metric_id }}" class="form-control" /></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_metric_target_id }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[checkout][metric_target_id]" value="{{ set.checkout_metric_id ? set.checkout_metric_id : set.checkout.metric_target_id }}" class="form-control" /></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_metric_target }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[checkout][metric_target]" value="{{ set.checkout.metric_target }}" class="form-control" /></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12">{{ header_analityc_p }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_analityc_category }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[checkout][analytic_category]" value="{{ set.checkout.analytic_category }}" class="form-control" /></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_analityc_action }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[checkout][analytic_action]" value="{{ set.checkout.analytic_action }}" class="form-control" /></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12"><small style="font-weight:400;color:#444">{{ entry_metric_analytic_help }}<br /><br />{{ entry_metric_analytic_dataLayer_purchase }}</small></div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div id="tab-cart-btn" class="tab-pane">*/
/* 					<ul class="nav nav-tabs">*/
/* 						<li class="active"><a href="#tab-buybutton1" data-toggle="tab">{{ tab_buybutton1 }}</a></li>*/
/* 						<li><a href="#tab-buybutton2" data-toggle="tab">{{ tab_buybutton_metric }}</a></li>*/
/* 						<li><a href="#tab-comparewishlistbutton1" data-toggle="tab">{{ tab_comparewishlistbutton1 }}</a></li>*/
/* 					</ul>*/
/* 					<div id="module" class="tab-content">*/
/* 						<div id="tab-buybutton1" class="tab-pane active">*/
/* 							<div class="col-sm-12">{{ header_buybutton1 }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_buybutton_text }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#cart-btn-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="cart-btn-{{ lang.language_id }}" class="tab-pane">*/
/* 										<div class="input-group">*/
/* 											<span class="input-group-addon open_icon" id="_{{ lang.language_id }}_с_b" onclick="popup_icons($(this).attr('id'))">Иконка: <i class="{{ set[lang.language_id].cart_btn_icon is not defined ? 'fa fa-shopping-bag' : set[lang.language_id].cart_btn_icon }}"></i></span>*/
/* 											<input type="hidden" name="uni_set[{{ lang.language_id }}][cart_btn_icon]" value="{{ set[lang.language_id].cart_btn_icon is not defined ? 'fa fa-shopping-bag' : set[lang.language_id].cart_btn_icon }}" class="form-control" />*/
/* 											<input type="text" name="uni_set[{{ lang.language_id }}][cart_btn_text]" value="{{ set[lang.language_id].cart_btn_text ? set[lang.language_id].cart_btn_text : 'В корзину' }}" placeholder="" class="form-control" />*/
/* 										</div>*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_buybutton_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[cart_btn_bg]" class="uni-color form-control" value="{{ set.cart_btn_bg ? set.cart_btn_bg : '149dbc' }}">*/
/* 								<input type="text" name="uni_set[cart_btn_color]" class="uni-color form-control" value="{{ set.cart_btn_color ? set.cart_btn_color : 'ffffff' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_buybutton_color1 }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[cart_btn_bg_hover]" class="uni-color form-control" value="{{ set.cart_btn_bg_hover ? set.cart_btn_bg_hover : 'F6846A' }}">*/
/* 								<input type="text" name="uni_set[cart_btn_color_hover]" class="uni-color form-control" value="{{ set.cart_btn_color_hover ? set.cart_btn_color_hover : 'ffffff' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12">{{ header_buybutton2 }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_buybutton_dis_text }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#cart-btn-d-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="cart-btn-d-{{ lang.language_id }}" class="tab-pane">*/
/* 										<div class="input-group">*/
/* 											<span class="input-group-addon open_icon" id="_{{ lang.language_id }}_с_b_d" onclick="popup_icons($(this).attr('id'))">Иконка: <i class="{{  set[lang.language_id].cart_btn_icon_disabled is not defined ? 'fa fa-minus-circle' : set[lang.language_id].cart_btn_icon_disabled }}"></i></span>*/
/* 											<input type="hidden" name="uni_set[{{ lang.language_id }}][cart_btn_icon_disabled]" value="{{  set[lang.language_id].cart_btn_icon_disabled is not defined ? 'fa fa-minus-circle' : set[lang.language_id].cart_btn_icon_disabled }}" class="form-control" />*/
/* 											<input type="text" name="uni_set[{{ lang.language_id }}][cart_btn_text_disabled]" value="{{ set[lang.language_id].cart_btn_text_disabled ? set[lang.language_id].cart_btn_text_disabled : 'Закончился' }}" placeholder="" class="form-control" />*/
/* 										</div>*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_buybutton_dis_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[cart_btn_bg_disabled]" class="uni-color form-control" value="{{ set.cart_btn_bg_disabled ? set.cart_btn_bg_disabled : 'e5e5e5' }}">*/
/* 								<input type="text" name="uni_set[cart_btn_color_disabled]" class="uni-color form-control" value="{{ set.cart_btn_color_disabled ? set.cart_btn_color_disabled : '444444' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_buybutton_dis }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								{% set buttons = {'qty-0':'Ничего не делать', 'disabled':'Отключить', 'disabled2':'Скрыть'} %}*/
/* 								<select name="uni_set[cart_btn_disabled]" class="form-control">*/
/* 								{% for key, name in buttons %}*/
/* 									<option value="{{ key }}" {{ set.cart_btn_disabled == key ? 'selected="selected"' }}>{{ name }}</option>*/
/* 								{% endfor %}*/
/* 								</select>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12">{{ header_buybutton3 }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_buybutton_in_text }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#cart-btn-i-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="cart-btn-i-{{ lang.language_id }}" class="tab-pane">*/
/* 										<div class="input-group">*/
/* 											<span class="input-group-addon open_icon" id="_{{ lang.language_id }}_с_b_i" onclick="popup_icons($(this).attr('id'))">Иконка: <i class="{{ set[lang.language_id].cart_btn_icon_incart is not defined ? 'fa fa-check' : set[lang.language_id].cart_btn_icon_incart }}"></i></span>*/
/* 											<input type="hidden" name="uni_set[{{ lang.language_id }}][cart_btn_icon_incart]" value="{{ set[lang.language_id].cart_btn_icon_incart is not defined ? 'fa fa-check' : set[lang.language_id].cart_btn_icon_incart }}" class="form-control" />*/
/* 											<input type="text" name="uni_set[{{ lang.language_id }}][cart_btn_text_incart]" value="{{ set[lang.language_id].cart_btn_text_incart ? set[lang.language_id].cart_btn_text_incart : 'В корзине' }}" placeholder="" class="form-control" />*/
/* 										</div>*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_buybutton_in_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[cart_btn_bg_incart]" class="uni-color form-control" value="{{ set.cart_btn_bg_incart ? set.cart_btn_bg_incart : 'F6846A' }}">*/
/* 								<input type="text" name="uni_set[cart_btn_color_incart]" class="uni-color form-control" value="{{ set.cart_btn_color_incart ? set.cart_btn_color_incart : 'ffffff' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12">{{ header_buybutton4 }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_cart_popup_disable }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[cart_popup_disable]" value="1" {{ set.cart_popup_disable ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_cart_popup_autohide }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<label><input type="checkbox" name="uni_set[cart_popup_autohide]" value="1" {{ set.cart_popup_autohide ? 'checked="checked"' }} /><span></span></label>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_cart_popup_autohide_time }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[cart_popup_autohide_time]" class="form-control" value="{{ set.cart_popup_autohide_time ? set.cart_popup_autohide_time : 5 }}">*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="tab-buybutton2" class="tab-pane">*/
/* 							<div class="col-sm-12">{{ header_metric }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_metric_id }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[cart_btn][metric_id]" value="{{ set.cart_btn.metric_id }}" class="form-control" /></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_metric_target }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[cart_btn][metric_target]" value="{{ set.cart_btn.metric_target }}" class="form-control" /></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12">{{ header_analityc_a }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_analityc_category }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[cart_btn][analytic_category]" value="{{ set.cart_btn.analytic_category }}" class="form-control" /></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_analityc_action }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[cart_btn][analytic_action]" value="{{ set.cart_btn.analytic_action }}" class="form-control" /></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12"><small style="font-weight:400;color:#444">{{ entry_metric_analytic_help }}<br /><br />{{ entry_metric_analytic_dataLayer_add }}</small></div>*/
/* 						</div>*/
/* 						<div id="tab-comparewishlistbutton1" class="tab-pane">*/
/* 							<div class="col-sm-12">{{ header_wishbutton }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_wishbutton }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[wishlist_btn_disabled]" value="1" {{ set.wishlist_btn_disabled ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_wishbutton_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[wishlist_btn_color]" class="uni-color form-control" value="{{ set.wishlist_btn_color ? set.wishlist_btn_color : '149dbc' }}">*/
/* 								<input type="text" name="uni_set[wishlist_btn_color_hover]" class="uni-color form-control" value="{{ set.wishlist_btn_color_hover ? set.wishlist_btn_color_hover : 'F6846A' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_fly_wishbutton }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_fly_wishlist]" value="1" {{ set.show_fly_wishlist ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_fly_wishbutton_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[fly_wishlist_bg]" class="uni-color form-control" value="{{ set.fly_wishlist_bg ? set.fly_wishlist_bg : '149dbc' }}">*/
/* 								<input type="text" name="uni_set[fly_wishlist_color]" class="uni-color form-control" value="{{ set.fly_wishlist_color ? set.fly_wishlist_color : 'ffffff' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12">{{ header_compbutton }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_compbutton }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[compare_btn_disabled]" value="1" {{ set.compare_btn_disabled ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_compbutton_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[compare_btn_color]" class="uni-color form-control" value="{{ set.compare_btn_color ? set.compare_btn_color : '149dbc' }}">*/
/* 								<input type="text" name="uni_set[compare_btn_color_hover]" class="uni-color form-control" value="{{ set.compare_btn_color_hover ? set.compare_btn_color_hover : 'F6846A' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_fly_compbutton }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_fly_compare]" value="1" {{ set.show_fly_compare ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_fly_compbutton_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[fly_compare_bg]" class="uni-color form-control" value="{{ set.fly_compare_bg ? set.fly_compare_bg : '149dbc' }}">*/
/* 								<input type="text" name="uni_set[fly_compare_color]" class="uni-color form-control" value="{{ set.fly_compare_color ? set.fly_compare_color : 'ffffff' }}">*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div id="tab-fly-menu" class="tab-pane">*/
/* 					<ul class="nav nav-tabs">*/
/* 						<li class="active"><a href="#tab-flymenu1" data-toggle="tab">{{ tab_flymenu1 }}</a></li>*/
/* 						<li><a href="#tab-flycart1" data-toggle="tab">{{ tab_flycart1 }}</a></li>*/
/* 					</ul>*/
/* 					<div id="module" class="tab-content">*/
/* 						<div id="tab-flymenu1" class="tab-pane active">*/
/* 							<div class="col-sm-2">{{ entry_flymenu }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[fly_menu][desktop]" value="1" {{ set.fly_menu.desktop ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_flymenu_mobile }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[fly_menu][mobile]" value="1" {{ set.fly_menu.mobile ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_flymenu_product }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[fly_menu][product]" value="1" {{ set.fly_menu.product ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_flymenu_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[fly_menu][bg]" class="uni-color form-control" value="{{ set.fly_menu.bg ? set.fly_menu.bg : 'f5f5f5' }}">*/
/* 								<input type="text" name="uni_set[fly_menu][color]" class="uni-color form-control" value="{{ set.fly_menu.color ? set.fly_menu.color : 'F6846A' }}">*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="tab-flycart1" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_flycart }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[show_fly_cart]" value="1" {{ set.show_fly_cart ? 'checked="checked"' }} /><span></span></label></div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div id="tab-search" class="tab-pane">*/
/* 					<ul class="nav nav-tabs">*/
/* 						<li class="active"><a href="#tab-livesearch1" data-toggle="tab"><span title="{{ text_new_settings }}" data-toggle="tooltip">New</span>{{ tab_livesearch1 }}</a></li>*/
/* 						<li><a href="#tab-livesearch2" data-toggle="tab">{{ header_livesearch }}</a></li>*/
/* 					</ul>*/
/* 					<div id="module" class="tab-content">*/
/* 						<div id="tab-livesearch1" class="tab-pane active">*/
/* 							<div class="col-sm-2">{{ entry_search_ownmodel }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[search][enabled]" value="1" {{ set.search.enabled ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12">{{ header_search_manuf }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_search_manuf }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[search][condition][manufacturer]" value="1" {{ set.search.condition.manufacturer ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_search_manuf_img }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[search][condition][manufacturer_img]" value="1" {{ set.search.condition.manufacturer_img ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12">{{ header_search_cat }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_search_cat }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[search][condition][category]" value="1" {{ set.search.condition.category ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_search_cat_img }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[search][condition][category_img]" value="1" {{ set.search.condition.category_img ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12">{{ header_search_prod }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_search_desc }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[search][types][description]" value="pd.description" {{ set.search.types.description ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_search_tag }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[search][types][tag]" value="pd.tag" {{ set.search.types.tag ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_search_model }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[search][types][model]" value="p.model" {{ set.search.types.model ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_search_attr }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[search][types][attr]" value="pa.text" {{ set.search.types.attr ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_search_sku }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[search][types][sku]" value="p.sku" {{ set.search.types.sku ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_search_upc }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[search][types][upc]" value="p.upc" {{ set.search.types.upc ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_search_ean }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[search][types][ean]" value="p.ean" {{ set.search.types.ean ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_search_jan }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[search][types][jan]" value="p.jan" {{ set.search.types.jan ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_search_isbn }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[search][types][isbn]" value="p.isbn" {{ set.search.types.isbn ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_search_mpn }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[search][types][mpn]" value="p.mpn" {{ set.search.types.mpn ? 'checked="checked"' }} /><span></span></label></div>*/
/* 						</div>*/
/* 						<div id="tab-livesearch2" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_livesearch }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[livesearch][enabled]" value="1" {{ set.livesearch.enabled ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_livesearch_sort }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<div class="input-group">*/
/* 									{% set s_sorts = {'pd.name':'Наименованию', 'p.model':'Модели', 'p.quantity':'Количеству', 'p.price':'Цене', 'rating':'Рейтингу', 'p.date_added':'Дате добавления'} %}*/
/* 									<select name="uni_set[livesearch][sort]" class="form-control" style="width:150px">*/
/* 									{% for key, name in s_sorts %}*/
/* 										<option value="{{ key }}" {{ set.livesearch.sort and set.livesearch.sort == key ? 'selected="selected"' }}>{{ name }}</option>*/
/* 									{% endfor %}*/
/* 									</select>*/
/* 									{% set s_orders = {'ASC':'Возрастанию', 'DESC':'Убыванию'} %}*/
/* 									<select name="uni_set[livesearch][order]" class="form-control" style="width:150px">*/
/* 									{% for key, name in s_orders %}*/
/* 										<option value="{{ key }}" {{ set.livesearch.order and set.livesearch.order == key ? 'selected="selected"' }}>{{ name }}</option>*/
/* 									{% endfor %}*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_livesearch_img }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[livesearch][image]" value="1" {{ set.livesearch.image ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_livesearch_img_size }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<div class="input-group">*/
/* 									<input type="text" name="uni_set[livesearch][image_w]" value="{{ set.livesearch.image_w ? set.livesearch.image_w : '50' }}" style="width:50px !important; text-align:center;" class="form-control" />*/
/* 									<input type="text" name="uni_set[livesearch][image_h]" value="{{ set.livesearch.image_h ? set.livesearch.image_h : '50' }}" style="width:50px !important; text-align:center;" class="form-control" />*/
/* 									<span>{{ text_pix }}</span> */
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_livesearch_name_len }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<div class="input-group">*/
/* 									<input type="text" name="uni_set[livesearch][name_length]" value="{{ set.livesearch.name_length ? set.livesearch.name_length : '50' }}" style="width:50px !important; text-align:center;" class="form-control" />*/
/* 									<span>{{ text_symbols }}</span> */
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_livesearch_desc2 }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[livesearch][show_description]" value="1" {{ set.livesearch.show_description ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_livesearch_desc_len }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<div class="input-group">*/
/* 									<input type="text" name="uni_set[livesearch][description_length]" value="{{ set.livesearch.description_length ? set.livesearch.description_length : '50' }}" style="width:50px !important; text-align:center;" class="form-control" />*/
/* 									<span>{{ text_symbols }}</span> */
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_livesearch_rating }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[livesearch][rating]" value="1" {{ set.livesearch.rating ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_livesearch_price }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[livesearch][price]" value="1" {{ set.livesearch.price ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_livesearch_item }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<div class="input-group">*/
/* 									<input type="text" name="uni_set[livesearch][limit]" value="{{ set.livesearch.limit ? set.livesearch.limit : '5' }}" style="width:50px !important; text-align:center;" class="form-control" />*/
/* 									<span>{{ text_item }}</span> */
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div id="tab-style" class="tab-pane">*/
/* 					<ul class="nav nav-tabs">*/
/* 						<li class="active"><a href="#tab-color1" data-toggle="tab">{{ tab_color1 }}</a></li>*/
/* 						<li><a href="#tab-color2" data-toggle="tab">{{ tab_color2 }}</a></li>*/
/* 						<li><a href="#tab-color3" data-toggle="tab">{{ tab_color3 }}</a></li>*/
/* 						<li><a href="#tab-color4" data-toggle="tab">{{ tab_color4 }}</a></li>*/
/* 					</ul>*/
/* 					<div id="module" class="tab-content">*/
/* 						<div id="tab-color1" class="tab-pane active">*/
/* 							<div class="col-sm-12">{{ header_h }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_h1 }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[h1_color]" class="uni-color form-control" value="{{ set.h1_color ? set.h1_color : '333333' }}" /></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_h2 }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[h2_color]" class="uni-color form-control" value="{{ set.h2_color ? set.h2_color : '333333' }}" /></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_h3 }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[h3_color]" class="uni-color form-control" value="{{ set.h3_color ? set.h3_color : '333333' }}" /></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_h4 }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[h4_color]" class="uni-color form-control" value="{{ set.h4_color ? set.h4_color : '333333' }}"></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_h5 }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[h5_color]" class="uni-color form-control" value="{{ set.h5_color ? set.h5_color : '333333' }}"></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12">{{ header_link }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_link_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[a_color]" class="uni-color form-control" value="{{ set.a_color ? set.a_color  : 'F6846A' }}">*/
/* 								<input type="text" name="uni_set[a_color_hover]" class="uni-color form-control" value="{{ set.a_color_hover ? set.a_color_hover : '149dbc' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12">{{ header_text }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_text_color }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[text_color]" class="uni-color form-control" value="{{ set.text_color ? set.text_color : '333333' }}"></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12">{{ header_price }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_price_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[price_color]" class="uni-color form-control" value="{{ set.price_color ? set.price_color : '333333' }}">*/
/* 								<input type="text" name="uni_set[price_color_old]" class="uni-color form-control" value="{{ set.price_color_old ? set.price_color_old : '888888' }}">*/
/* 								<input type="text" name="uni_set[price_color_new]" class="uni-color form-control" value="{{ set.price_color_new ? set.price_color_new : 'F6846A' }}">*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="tab-color2" class="tab-pane">*/
/* 							<div class="col-sm-12">{{ header_button }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_button_default_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[btn_default_bg]" class="uni-color form-control" value="{{ set.btn_default_bg ? set.btn_default_bg : 'eeeeee' }}">*/
/* 								<input type="text" name="uni_set[btn_default_color]" class="uni-color form-control" value="{{ set.btn_default_color ? set.btn_default_color : '777777' }}">*/
/* 								<input type="text" name="uni_set[btn_default_bg_hover]" class="uni-color form-control" value="{{ set.btn_default_bg_hover ? set.btn_default_bg_hover : 'e5e5e5' }}">*/
/* 								<input type="text" name="uni_set[btn_default_color_hover]" class="uni-color form-control" value="{{ set.btn_default_color_hover ? set.btn_default_color_hover : '777777' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_button_primary_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[btn_primary_bg]" class="uni-color form-control" value="{{ set.btn_primary_bg ? set.btn_primary_bg : 'F6846A' }}">*/
/* 								<input type="text" name="uni_set[btn_primary_color]" class="uni-color form-control" value="{{ set.btn_primary_color ? set.btn_primary_color : 'ffffff' }}">*/
/* 								<input type="text" name="uni_set[btn_primary_bg_hover]" class="uni-color form-control" value="{{ set.btn_primary_bg_hover ? set.btn_primary_bg_hover : '149dbc' }}">*/
/* 								<input type="text" name="uni_set[btn_primary_color_hover]" class="uni-color form-control" value="{{ set.btn_primary_color_hover ? set.btn_primary_color_hover : 'ffffff' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_button_danger_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[btn_danger_bg]" class="uni-color form-control" value="{{ set.btn_danger_bg ? set.btn_danger_bg : 'd9534f' }}">*/
/* 								<input type="text" name="uni_set[btn_danger_color]" class="uni-color form-control" value="{{ set.btn_danger_color ? set.btn_danger_color : 'ffffff' }}">*/
/* 								<input type="text" name="uni_set[btn_danger_bg_hover]" class="uni-color form-control" value="{{ set.btn_danger_bg_hover ? set.btn_danger_bg_hover : 'c9302c' }}">*/
/* 								<input type="text" name="uni_set[btn_danger_color_hover]" class="uni-color form-control" value="{{ set.btn_danger_color_hover ? set.btn_danger_color_hover : 'ffffff' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12">{{ header_input }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_input_color }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[checkbox_radiobutton_bg]" class="uni-color form-control" value="{{ set.checkbox_radiobutton_bg ? set.checkbox_radiobutton_bg : 'F6846A' }}"></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12">{{ header_pag }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_pag_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[pagination_bg_active]" class="uni-color form-control" value="{{ set.pagination_bg_active ? set.pagination_bg_active : 'F6846A' }}">*/
/* 								<input type="text" name="uni_set[pagination_color_active]" class="uni-color form-control" value="{{ set.pagination_color_active ? set.pagination_color_active : 'ffffff' }}">*/
/* 								<input type="text" name="uni_set[pagination_bg]" class="uni-color form-control" value="{{ set.pagination_bg ? set.pagination_bg : 'ffffff' }}">*/
/* 								<input type="text" name="uni_set[pagination_color]" class="uni-color form-control" value="{{ set.pagination_color ? set.pagination_color : 'F6846A' }}">*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="tab-color4" class="tab-pane">*/
/* 							<div class="col-sm-12">{{ header_bgimg }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_bg_image }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<a href="" id="thumb-image_" data-toggle="image" class="img-thumbnail">*/
/* 									<img src="{{ set.background_image and set.background_image != '' ? '../image/' ~ set.background_image : placeholder }}" alt="" title="" data-placeholder="{{ placeholder }}" style="width:100px" />*/
/* 								</a>*/
/* 								<input type="hidden" name="uni_set[background_image]" value="{{ set.background_image and set.background_image != '' ? set.background_image }}" id="image_" />*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_bg_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[background_color]" class="uni-color form-control" value="{{ set.background_color ? set.background_color : 'fff' }}">*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="tab-color3" class="tab-pane">*/
/* 							<div class="col-sm-12">{{ header_tooltip }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_tooltip_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[tooltip_bg]" class="uni-color form-control" value="{{ set.tooltip_bg ? set.tooltip_bg : '666666' }}">*/
/* 								<input type="text" name="uni_set[tooltip_color]" class="uni-color form-control" value="{{ set.tooltip_color ? set.tooltip_color : 'ffffff' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12">{{ header_text_alert }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_alert_effect_in }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<select name="uni_set[alert][effect][in]" class="form-control">*/
/* 									{% for effect in alert_effects_in %}*/
/* 										{% if effect in group %}*/
/* 											<optgroup label="{{  effect }}" />*/
/* 										{% else %}*/
/* 											<option {{  effect == set.alert.effect.in ? 'selected="selected"' }} value="{{  effect }}">{{  effect }}</option>*/
/* 										{% endif %}*/
/* 									{% endfor %}*/
/* 								</select>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_alert_effect_out }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<select name="uni_set[alert][effect][out]" class="form-control">*/
/* 									{% for effect in alert_effects_out %}*/
/* 										{% if effect in group %}*/
/* 											<optgroup label="{{ effect }}" />*/
/* 										{% else %}*/
/* 											<option {{ effect == set.alert.effect.out ? 'selected="selected"' }} value="{{  effect }}">{{  effect }}</option>*/
/* 										{% endif %}*/
/* 									{% endfor %}*/
/* 								</select>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_text_alert_time }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<div class="input-group">*/
/* 									<input type="text" name="uni_set[alert][time]" value="{{  set.alert.time ? set.alert.time : 5 }}" class="form-control" style="width:50px !important; text-align:center;"><span>{{  text_sec }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_text_alert_color }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[alert][success][bg]" class="uni-color form-control" value="{{ set.alert.success.bg ? set.alert.success.bg : '6ab344' }}">*/
/* 								<input type="text" name="uni_set[alert][success][color]" class="uni-color form-control" value="{{ set.alert.success.color ? set.alert.success.color : 'ffffff' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_text_alert_color2 }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[alert][warning][bg]" class="uni-color form-control" value="{{ set.alert.warning.bg ? set.alert.warning.bg : '76c204' }}">*/
/* 								<input type="text" name="uni_set[alert][warning][color]" class="uni-color form-control" value="{{ set.alert.warning.color ? set.alert.warning.color : 'ffffff' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_text_alert_color3 }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[alert][danger][bg]" class="uni-color form-control" value="{{ set.alert.danger.bg ? set.alert.danger.bg : 'ff6e6e' }}">*/
/* 								<input type="text" name="uni_set[alert][danger][color]" class="uni-color form-control" value="{{ set.alert.danger.color ? set.alert.danger.color : 'ffffff' }}">*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_text_alert_color4 }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="uni_set[text_alert_color]" class="uni-color form-control" value="{{ set.text_alert_color ? set.text_alert_color : 'ff6e6e' }}">*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div id="tab-other" class="tab-pane">*/
/* 					<ul class="nav nav-tabs">*/
/* 						<li class="active"><a href="#tab-other1" data-toggle="tab">{{ tab_other1 }}</a></li>*/
/* 						<li><a href="#tab-other5" data-toggle="tab"><span title="{{ text_new_settings }}" data-toggle="tooltip">New</span>{{ tab_breadcrumbs }}</a></li>*/
/* 						<li><a href="#tab-other2" data-toggle="tab">{{ tab_user_css_js }}</a></li>*/
/* 						<li><a href="#tab-other3" data-toggle="tab">{{ tab_socialbutton }}</a></li>*/
/* 						<li><a href="#tab-other4" data-toggle="tab">{{ tab_popup }}</a></li>*/
/* 					</ul>*/
/* 					<div id="module" class="tab-content">*/
/* 						<div id="tab-other1" class="tab-pane active">*/
/* 							<div class="col-sm-12">{{ heading_merge }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_other_merge_css }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[merge_css]" value="1" {{ set.merge_css ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_other_merge_js }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[merge_js]" value="1" {{ set.merge_js ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_other_merge_closure }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[merge_js_closure]" value="1" {{ set.merge_js_closure ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12" style="font-weight:400;color:#777">{{ text_other_merge_js }}</div>*/
/* 						</div>*/
/* 						<div id="tab-other5" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_other_breadcrumbs }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[breadcrumbs][hide][last]" value="1" {{ set.breadcrumbs.hide.last ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_other_breadcrumbs1 }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[breadcrumbs][hide][mobile]" value="1" {{ set.breadcrumbs.hide.mobile ? 'checked="checked"' }} /><span></span></label></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-12">{{ heading_tabs }}</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_other_tabs }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[tabs][mobile][old]" value="1" {{ set.tabs.mobile.old ? 'checked="checked"' }} /><span></span></label></div>*/
/* 						</div>*/
/* 						<div id="tab-other2" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_custom_style }}</div>*/
/* 							<div class="col-sm-10"><input type="text" name="uni_set[custom_style]" value="{{ set.custom_style }}" placeholder="Пример: my_mega_style.css" class="form-control"/></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_other_css }}</div>*/
/* 							<div class="col-sm-10"><textarea name="uni_set[user_css]" placeholder="Пример: body{background:#fff; color:#555}" class="form-control">{{ set.user_css }}</textarea></div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_other_js }}</div>*/
/* 							<div class="col-sm-10"><textarea name="uni_set[user_js]" placeholder="Пример: $(document).ready(function() { autoheight(); });" class="form-control">{{ set.user_js }}</textarea></div>*/
/* 						</div>*/
/* 						<div id="tab-other3" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_socialbutton }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								{% set socialbuttons = ['facebook', 'vkontakte', 'odnoklassniki', 'googleplus', 'moimir', 'livejournal', 'twitter', 'evernote', 'blogger', 'surfingbird', 'reddit', 'linkedin', 'telegram', 'viber', 'whatsapp'] %}*/
/* 								<div class="overflow">*/
/* 									{% for socialbutton in socialbuttons %}*/
/* 										<label><input type="checkbox" name="uni_set[socialbutton][]" value="{{ socialbutton }}" {{ socialbutton in set.socialbutton ? 'checked="checked"' }} /><span></span>{{ socialbutton }}</label><br />*/
/* 									{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div id="tab-other4" class="tab-pane">*/
/* 							<div class="col-sm-2">{{ entry_popup_effect_in }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<select name="uni_set[popup_effect_in]" class="form-control">*/
/* 									{% for effect in effects_in %}*/
/* 										{% if effect in group %}*/
/* 											<optgroup label="{{ effect }}" />*/
/* 										{% else %}*/
/* 											<option {{ effect == set.popup_effect_in ? 'selected="selected"' }} value="{{ effect }}">{{ effect }}</option>*/
/* 										{% endif %}*/
/* 									{% endfor %}*/
/* 								</select>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_popup_effect_out }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<select name="uni_set[popup_effect_out]" class="form-control">*/
/* 									{% for effect in effects_out %}*/
/* 										{% if effect in group %}*/
/* 											<optgroup label="{{ effect }}" />*/
/* 										{% else %}*/
/* 											<option {{ effect == set.popup_effect_out ? 'selected="selected"' }} value="{{ effect }}">{{ effect }}</option>*/
/* 										{% endif %}*/
/* 									{% endfor %}*/
/* 								</select>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_popup_blur }}</div>*/
/* 							<div class="col-sm-10"><label><input type="checkbox" name="uni_set[popup_blur]" value="1" {{ set.popup_blur ? 'checked="checked"' }} /><span></span></label></div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div id="tab-notification" class="tab-pane">*/
/* 					<ul class="nav nav-tabs">*/
/* 						<li class="active"><a href="#tab-notification1" data-toggle="tab">{{ tab_other1 }}</a></li>*/
/* 					</ul>*/
/* 					<div id="module" class="tab-content">*/
/* 						<div id="tab-notification1" class="tab-pane active">*/
/* 							<div class="col-sm-2">{{ entry_notification_status }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<select name="uni_set[notification][status]" class="form-control">*/
/* 									<option value="0" {{ set.notification.status == 0 ? 'selected' }}>{{ text_notification_status_0 }}</option>*/
/* 									<option value="1" {{ set.notification.status == 1 ? 'selected' }}>{{ text_notification_status_1 }}</option>*/
/* 									<option value="2" {{ set.notification.status == 2 ? 'selected' }}>{{ text_notification_status_2 }}</option>*/
/* 								</select>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_notification_time }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<div class="input-group">*/
/* 									<input type="text" name="uni_set[notification][time]" value="{{ set.notification.time ? set.notification.time : 1 }}" class="form-control" style="width:50px !important; text-align:center;" />*/
/* 									<span>{{ text_notification_time1 }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<hr />*/
/* 							<div class="col-sm-2">{{ entry_notification_text }}</div>*/
/* 							<div class="col-sm-10">*/
/* 								<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#notification-text-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 									{% for lang in languages %}*/
/* 										<div id="notification-text-{{ lang.language_id }}" class="tab-pane">*/
/* 											<textarea name="uni_set[notification][{{ lang.language_id }}][text]" data-toggle="summernote" class="form-control">{{ set.notification[lang.language_id].text }}</textarea>*/
/* 										</div>*/
/* 									{% endfor %}*/
/* 									</div>*/
/* 								</div>*/
/* 								<hr />*/
/* 								<div class="col-sm-2">{{ entry_notification_apply }}</div>*/
/* 								<div class="col-sm-10">*/
/* 									<ul class="nav nav-tabs">*/
/* 									{% for lang in languages %}*/
/* 										<li><a href="#notification-apply-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 									{% endfor %}*/
/* 									</ul>*/
/* 									<div class="tab-content">*/
/* 									{% for lang in languages %}*/
/* 										<div id="notification-apply-{{ lang.language_id }}" class="tab-pane">*/
/* 											<input type="text" name="uni_set[notification][{{ lang.language_id }}][apply_text]" value="{{ set.notification[lang.language_id].apply_text ? set.notification[lang.language_id].apply_text : 'Принимаю' }}" class="form-control"/>*/
/* 										</div>*/
/* 									{% endfor %}*/
/* 									</div>*/
/* 								</div>*/
/* 								<hr />*/
/* 								<div class="col-sm-2">{{ entry_notification_cancel }}</div>*/
/* 								<div class="col-sm-10">*/
/* 									<ul class="nav nav-tabs">*/
/* 									{% for lang in languages %}*/
/* 										<li><a href="#notification-cancel-{{ lang.language_id }}" data-toggle="tab"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 									{% endfor %}*/
/* 									</ul>*/
/* 									<div class="tab-content">*/
/* 									{% for lang in languages %}*/
/* 										<div id="notification-cancel-{{ lang.language_id }}" class="tab-pane">*/
/* 											<input type="text" name="uni_set[notification][{{ lang.language_id }}][cancel_text]" value="{{ set.notification[lang.language_id].cancel_text ? set.notification[lang.language_id].cancel_text : 'Не принимаю' }}" class="form-control"/>*/
/* 										</div>*/
/* 									{% endfor %}*/
/* 									</div>*/
/* 								</div>*/
/* 								<hr />*/
/* 								<div class="col-sm-2">{{ entry_notification_cancel_show }}</div>*/
/* 								<div class="col-sm-10"><label><input type="checkbox" name="uni_set[notification][cancel_show]" value="1" {{ set.notification.cancel_show ? 'checked="checked"' }} /><span></span></label></div>*/
/* 								<hr />*/
/* 								<div class="col-sm-2">{{ entry_notification_cancel_close }}</div>*/
/* 								<div class="col-sm-10"><label><input type="checkbox" name="uni_set[notification][cancel_close]" value="1" {{ set.notification.cancel_close ? 'checked="checked"' }} /><span></span></label></div>*/
/* 								<hr />*/
/* 								<div class="col-sm-2">{{ entry_notification_color }}</div>*/
/* 								<div class="col-sm-10">*/
/* 									<input type="text" name="uni_set[notification][bg]" class="uni-color form-control" value="{{ set.notification.bg ? set.notification.bg : 'f5f5f5' }}">*/
/* 									<input type="text" name="uni_set[notification][color]" class="uni-color form-control" value="{{ set.notification.color ? set.notification.color : '555555' }}">*/
/* 								</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				{% if time_left %}*/
/* 					<div id="tab-key" class="tab-pane">*/
/* 						<ul class="nav nav-tabs">*/
/* 							<li class="active"><a href="#tab-key1" data-toggle="tab">{{ tab_key1 }}</a></li>*/
/* 						</ul>*/
/* 						<div id="module" class="tab-content">*/
/* 							<div id="tab-key1" class="tab-pane active">*/
/* 								<div id="full2" class="col-xs-12">*/
/* 									{{ text_activate_manual2 }}*/
/* 									<hr style="margin:10px 0" />*/
/* 									<h4>{{ text_variant1 }}</h4>*/
/* 									<button type="button" class="btn btn-primary" style="line-height:1.0em" onclick="addKey2();" data-loading-text="<i class='fa fa-spinner fa-spin'></i>">{{ button_activate }}</button>*/
/* 								</div>*/
/* 								<div class="col-sm-12"><hr style="margin:10px 0" /></div>*/
/* 								<div id="full" class="col-sm-12" style="font-weight:400;color:#545454">*/
/* 									<h4>{{ text_variant2 }}</h4>*/
/* 									<input type="text" name="key" value="" class="form-control" style="width:100%;max-width:500px;margin:0 0 10px !important;" placeholder="{{ text_lic_key }}" />*/
/* 									<button type="button" class="btn btn-primary" style="line-height:1.0em" onclick="addKey(this);" data-loading-text="<i class='fa fa-spinner fa-spin'></i>">{{ button_activate }}</button>*/
/* 								</div>*/
/* 								<div class="col-sm-12"><hr style="margin:10px 0" /></div>*/
/* 								<div class="col-sm-12" style="font-weight:400">{{ text_activate_manual }}</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 			<input type="hidden" name="uni_set[version]" value="1.8.0.0" />*/
/* 			<input type="hidden" name="uni_set[save_date]" value="" />*/
/* 			<input type="hidden" name="uni_set[sort_stories]" value="{{ set[sort_stories] ? set[sort_stories] : 'url,asc' }}" />*/
/* 			<input type="hidden" name="store_id" value="{{ store_id }}" />*/
/* 		</form>*/
/* 	{% else %}*/
/* 		<div id="module" class="content content_new">*/
/* 			{% if trial_end %}*/
/* 				{{ text_trial_end }}*/
/* 				<div style="margin:3px 0 0"></div>*/
/* 				<a href="https://opencartforum.com/files/file/4292-licenziya-dlya-shablona-unishop2/" target="_blank" class="btn btn-primary" style="">{{ text_get_license }}</a>*/
/* 				<hr />*/
/* 				{{ text_get_license2 }}*/
/* 				<div style="margin:3px 0 0"></div>*/
/* 				<button type="button" class="btn btn-primary" style="line-height:1.0em" onclick="addKey2();" data-loading-text="<i class='fa fa-spinner fa-spin'></i>">{{ button_activate }}</button>*/
/* 				<div style="margin:10px 0 0"></div>*/
/* 				{{ text_get_license3 }}*/
/* 				<hr />*/
/* 				{{ text_activate_yourself }}*/
/* 				<div style="margin:3px 0 0"></div>*/
/* 				<div id="full">*/
/* 					<input type="text" name="key" value="" class="form-control" style="width:100%;max-width:500px;margin:0 0 10px !important;" placeholder="{{ text_lic_key }}" />*/
/* 					<button type="button" class="btn btn-primary" style="line-height:1.0em" onclick="addKey(this);" data-loading-text="<i class='fa fa-spinner fa-spin'></i>">{{ button_activate }}</button>*/
/* 				</div>*/
/* 			{% elseif trial_empty %}*/
/* 				{{ text_welcome }}*/
/* 				<div class="overflow" style="max-width:1200px;height:350px;max-height:100%;margin:10px 0 5px;color:#666;font-size:1.0em; font-weight:400">*/
/* 					{{ license_trial }}*/
/* 				</div>*/
/* 				<div id="trial">*/
/* 					<label><input type="checkbox" name="trial" value="1" /><span></span>{{ text_agree }}</label><br /><br />*/
/* 					<button type="button" class="btn btn-primary" style="line-height:1.0em" onclick="addTrial();" data-loading-text="<i class='fa fa-spinner fa-spin'></i>">{{ button_activate_trial }}</button>*/
/* 				</div>*/
/* 			{% else %}*/
/* 				<div style="line-height:1.7em">*/
/* 					{{ text_license_is_corrupt }}*/
/* 				</div>*/
/* 				<br />*/
/* 				<div id="full">*/
/* 					<input type="text" name="key" value="" class="form-control" style="width:100%;max-width:500px;margin:0 0 10px !important;" placeholder="{{ text_lic_key }}" />*/
/* 					<button type="button" class="btn btn-primary" style="line-height:1.0em" onclick="addKey(this);" data-loading-text="<i class='fa fa-spinner fa-spin'></i>">{{ button_activate }}</button>*/
/* 				</div>*/
/* 			{% endif %}*/
/* 		</div>*/
/* 	{% endif %}*/
/* 	</div>*/
/* 	<div class="popup_icons"><div class="fontawesome-icon-list"></div></div>*/
/* </div>*/
/* {% endspaceless %}*/
/* */
/* <link href="../catalog/view/theme/unishop2/stylesheet/font-awesome.min.css" rel="stylesheet" type="text/css" media="screen" />*/
/* <script src="../catalog/view/theme/unishop2/js/jquery.highlight.min.js"></script>*/
/* <script>*/
/* 	var uni_text_article_link = '{{  text_article_links }}',*/
/* 		uni_text_delete = '{{ entry_delete }}',*/
/* 		uni_text_title = 'Заголовок',*/
/* 		uni_text_link = 'Ссылка',*/
/* 		uni_text_link_popup = 'открывать ссылку в popup окне?',*/
/* 		uni_text_icon = 'Иконка',*/
/* 		uni_text_img = 'Картинка',*/
/* 		uni_text_mf_text = 'Имя',*/
/* 		uni_text_mf_number = 'Телефон',*/
/* 		uni_text_alert = '{{ text_alert }}',*/
/* 		uni_text_alert_validate = 'У вас недостаточно прав для управления настройками шаблона',*/
/* 		uni_text_error_agree = '{{ text_error_agree }}',*/
/* 		uni_text_error_trial = '{{ text_error_trial }}',*/
/* 		uni_text_error_key_empty = '{{ text_error_key_empty }}',*/
/* 		uni_text_error_key = '{{ text_error_key }}',*/
/* 		uni_text_full_key_added = '{{ text_full_key_added }}',*/
/* 		uni_text_error_key2 = '{{ text_error_key2 }}',*/
/* 		uni_text_search_settings = '{{ text_search_settings }}',*/
/* 		uni_text_sort = '{{ text_headerlinks2_sort }}',*/
/* 		uni_text_column = '{{ text_headerlinks2_column }}',*/
/* 		uni_img_placeholder = '{{ placeholder }}';*/
/* </script>*/
/* <script>*/
/* 	$('#content .nav li a').each(function() {*/
/* 		$(this).addClass($(this).attr('href').replace('#', ''));*/
/* 	});*/
/* 	$(window).scroll(function(){*/
/* 		if($('.tooltip').length) $('.tooltip').remove();*/
/* 	});*/
/* </script>*/
/* {{ footer }}*/
