<?php

/* extension/module/uni_news_setting.twig */
class __TwigTemplate_140ba3682b1f12884a3c69096880daa10618ab44cd42de4cd80e268f3fe43764 extends Twig_Template
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
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<button type=\"button\" onclick=\"\$('#form-news-setting').submit();\" class=\"save btn btn-primary\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" data-loading-text=\"<i class='fa fa-spinner'></i>\"><i class=\"fa fa-save\"></i></button>
\t\t\t</div>
\t\t\t<h1>";
        // line 9
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1><br />
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
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
        // line 14
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 18
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 19
            echo "\t\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
\t\t";
        }
        // line 21
        echo "\t\t";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 22
            echo "\t\t\t<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
\t\t";
        }
        // line 24
        echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 26
        echo (isset($context["text_setting"]) ? $context["text_setting"] : null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"sett tab-content-new\" style=\"margin:0 0 20px; background:#fcfcfc;\">
\t\t\t\t\t<form method=\"post\" enctype=\"multipart/form-data\" id=\"form-news-setting\">
\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-setting\" data-toggle=\"tab\">";
        // line 32
        echo (isset($context["head_category_settings"]) ? $context["head_category_settings"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"#tab-setting2\" data-toggle=\"tab\">";
        // line 33
        echo (isset($context["head_news_settings"]) ? $context["head_news_settings"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"#tab-setting3\" data-toggle=\"tab\">";
        // line 34
        echo (isset($context["head_related_products"]) ? $context["head_related_products"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"#tab-setting4\" data-toggle=\"tab\">";
        // line 35
        echo (isset($context["head_sitemap"]) ? $context["head_sitemap"] : null);
        echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div id=\"module\" class=\"tab-content\">
\t\t\t\t\t\t\t<div id=\"tab-setting\" class=\"tab-pane active\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
        // line 39
        echo (isset($context["entry_subcategory_column"]) ? $context["entry_subcategory_column"] : null);
        echo "</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 41
        $context["columns"] = array(6 => 2, 4 => 3, 3 => 4, 2 => 6);
        // line 42
        echo "\t\t\t\t\t\t\t\t<div style=\"float:left\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">Десктоп:</span>
\t\t\t\t\t\t\t\t\t\t<select name=\"uni_news[subcategory_column][]\" class=\"form-control\" style=\"width:55px;\">
\t\t\t\t\t\t\t\t\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) ? $context["columns"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["column"]) {
            // line 47
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"col-lg-";
            echo $context["key"];
            echo "\" ";
            echo ((twig_in_filter(("col-lg-" . $context["key"]), $this->getAttribute((isset($context["uni_news"]) ? $context["uni_news"] : null), "subcategory_column", array()))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo $context["column"];
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"float:left;margin:0 0 0 5px\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">Ноутбук:</span>
\t\t\t\t\t\t\t\t\t\t<select name=\"uni_news[subcategory_column][]\" class=\"form-control\" style=\"width:55px;\">
\t\t\t\t\t\t\t\t\t\t";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) ? $context["columns"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["column"]) {
            // line 57
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"col-md-";
            echo $context["key"];
            echo "\" ";
            echo ((twig_in_filter(("col-md-" . $context["key"]), $this->getAttribute((isset($context["uni_news"]) ? $context["uni_news"] : null), "subcategory_column", array()))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo $context["column"];
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"float:left;margin:0 0 0 5px\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">Планшет:</span>
\t\t\t\t\t\t\t\t\t\t<select name=\"uni_news[subcategory_column][]\" class=\"form-control\" style=\"width:55px;\">
\t\t\t\t\t\t\t\t\t\t";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) ? $context["columns"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["column"]) {
            // line 67
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"col-sm-";
            echo $context["key"];
            echo "\" ";
            echo ((twig_in_filter(("col-sm-" . $context["key"]), $this->getAttribute((isset($context["uni_news"]) ? $context["uni_news"] : null), "subcategory_column", array()))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo $context["column"];
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"float:left;margin:0 0 0 5px\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">Смартфон:</span>
\t\t\t\t\t\t\t\t\t\t<select name=\"uni_news[subcategory_column][]\" class=\"form-control\" style=\"width:55px;\">
\t\t\t\t\t\t\t\t\t\t";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["columns"]) ? $context["columns"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["column"]) {
            // line 77
            echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"col-xs-";
            echo $context["key"];
            echo "\" ";
            echo ((twig_in_filter(("col-xs-" . $context["key"]), $this->getAttribute((isset($context["uni_news"]) ? $context["uni_news"] : null), "subcategory_column", array()))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo $context["column"];
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
        // line 84
        echo (isset($context["entry_subcategory"]) ? $context["entry_subcategory"] : null);
        echo "</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_news[subcategory]\" value=\"1\" ";
        // line 85
        echo (($this->getAttribute((isset($context["uni_news"]) ? $context["uni_news"] : null), "subcategory", array())) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label></div>
\t\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">* ";
        // line 87
        echo (isset($context["entry_newslist_thumb"]) ? $context["entry_newslist_thumb"] : null);
        echo "</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_news[image_width]\" value=\"";
        // line 90
        echo (($this->getAttribute((isset($context["uni_news"]) ? $context["uni_news"] : null), "image_width", array())) ? ($this->getAttribute((isset($context["uni_news"]) ? $context["uni_news"] : null), "image_width", array())) : (480));
        echo "\" class=\"form-control\" style=\"width:50px !important; text-align:center;\" />
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_news[image_height]\" value=\"";
        // line 91
        echo (($this->getAttribute((isset($context["uni_news"]) ? $context["uni_news"] : null), "image_height", array())) ? ($this->getAttribute((isset($context["uni_news"]) ? $context["uni_news"] : null), "image_height", array())) : (360));
        echo "\" class=\"form-control\" style=\"width:50px !important; text-align:center;\" /> 
\t\t\t\t\t\t\t\t\t\t<span>пикс.</span>
\t\t\t\t\t\t\t\t\t\t";
        // line 93
        if ((isset($context["error_newspage_thumb"]) ? $context["error_newspage_thumb"] : null)) {
            echo "<span class=\"error\">";
            echo $this->getAttribute((isset($context["lang"]) ? $context["lang"] : null), "error_newspage_thumb", array());
            echo "</span>";
        }
        // line 94
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">* ";
        // line 97
        echo (isset($context["entry_headline_chars"]) ? $context["entry_headline_chars"] : null);
        echo "</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_news[chars]\" value=\"";
        // line 100
        echo (($this->getAttribute((isset($context["uni_news"]) ? $context["uni_news"] : null), "chars", array())) ? ($this->getAttribute((isset($context["uni_news"]) ? $context["uni_news"] : null), "chars", array())) : (300));
        echo "\" class=\"form-control\" style=\"width:50px !important; text-align:center;\" />
\t\t\t\t\t\t\t\t\t\t<span>симв.</span>
\t\t\t\t\t\t\t\t\t\t";
        // line 102
        if ((isset($context["error_numchars"]) ? $context["error_numchars"] : null)) {
            echo "<span class=\"error\">";
            echo $this->getAttribute((isset($context["lang"]) ? $context["lang"] : null), "error_numchars", array());
            echo "</span>";
        }
        // line 103
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"tab-setting2\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
        // line 107
        echo (isset($context["entry_newspage_image"]) ? $context["entry_newspage_image"] : null);
        echo "</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_news[image]\" value=\"1\" ";
        // line 108
        echo (($this->getAttribute((isset($context["uni_news"]) ? $context["uni_news"] : null), "image", array())) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label></div>
\t\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">* ";
        // line 110
        echo (isset($context["entry_newspage_thumb"]) ? $context["entry_newspage_thumb"] : null);
        echo "</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_news[thumb_width]\" value=\"";
        // line 113
        echo (($this->getAttribute((isset($context["uni_news"]) ? $context["uni_news"] : null), "thumb_width", array())) ? ($this->getAttribute((isset($context["uni_news"]) ? $context["uni_news"] : null), "thumb_width", array())) : (320));
        echo "\" class=\"form-control\" style=\"width:50px !important; text-align:center;\" />
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_news[thumb_height]\" value=\"";
        // line 114
        echo (($this->getAttribute((isset($context["uni_news"]) ? $context["uni_news"] : null), "thumb_height", array())) ? ($this->getAttribute((isset($context["uni_news"]) ? $context["uni_news"] : null), "thumb_height", array())) : (240));
        echo "\" class=\"form-control\" style=\"width:50px !important; text-align:center;\" /> 
\t\t\t\t\t\t\t\t\t\t<span>пикс.</span>
\t\t\t\t\t\t\t\t\t\t";
        // line 116
        if ((isset($context["error_newspage_thumb"]) ? $context["error_newspage_thumb"] : null)) {
            echo "<span class=\"error\">";
            echo $this->getAttribute((isset($context["lang"]) ? $context["lang"] : null), "error_newspage_thumb", array());
            echo "</span>";
        }
        // line 117
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">* ";
        // line 120
        echo (isset($context["entry_newspage_popup"]) ? $context["entry_newspage_popup"] : null);
        echo "</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_news[popup_width]\" value=\"";
        // line 123
        echo (($this->getAttribute((isset($context["uni_news"]) ? $context["uni_news"] : null), "popup_width", array())) ? ($this->getAttribute((isset($context["uni_news"]) ? $context["uni_news"] : null), "popup_width", array())) : (800));
        echo "\" class=\"form-control\" style=\"width:50px !important; text-align:center;\" />
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_news[popup_height]\" value=\"";
        // line 124
        echo (($this->getAttribute((isset($context["uni_news"]) ? $context["uni_news"] : null), "popup_height", array())) ? ($this->getAttribute((isset($context["uni_news"]) ? $context["uni_news"] : null), "popup_height", array())) : (600));
        echo "\" class=\"form-control\" style=\"width:50px !important; text-align:center;\" /> 
\t\t\t\t\t\t\t\t\t\t<span>пикс.</span>
\t\t\t\t\t\t\t\t\t\t";
        // line 126
        if ((isset($context["error_newspage_popup"]) ? $context["error_newspage_popup"] : null)) {
            echo "<span class=\"error\">";
            echo $this->getAttribute((isset($context["lang"]) ? $context["lang"] : null), "error_newspage_popup", array());
            echo "</span>";
        }
        // line 127
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
        // line 130
        echo (isset($context["entry_newspage_addthis"]) ? $context["entry_newspage_addthis"] : null);
        echo "</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_news[addthis]\" value=\"1\" ";
        // line 131
        echo (($this->getAttribute((isset($context["uni_news"]) ? $context["uni_news"] : null), "addthis", array())) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"tab-setting3\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">* ";
        // line 134
        echo (isset($context["entry_related_products"]) ? $context["entry_related_products"] : null);
        echo "</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 138
            echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"#related-product-title-";
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
        // line 140
        echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 143
            echo "\t\t\t\t\t\t\t\t\t\t<div id=\"related-product-title-";
            echo $this->getAttribute($context["lang"], "language_id", array());
            echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"uni_news[related_product_title][";
            // line 144
            echo $this->getAttribute($context["lang"], "language_id", array());
            echo "]\" value=\"";
            echo (($this->getAttribute($this->getAttribute((isset($context["uni_news"]) ? $context["uni_news"] : null), "related_product_title", array()), $this->getAttribute($context["lang"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["uni_news"]) ? $context["uni_news"] : null), "related_product_title", array()), $this->getAttribute($context["lang"], "language_id", array()), array(), "array")) : ((isset($context["text_related_products"]) ? $context["text_related_products"] : null)));
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
        // line 150
        echo (isset($context["entry_related_product_type_view"]) ? $context["entry_related_product_type_view"] : null);
        echo "</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_news[related_product_type_view]\" value=\"1\" ";
        // line 151
        echo (($this->getAttribute((isset($context["uni_news"]) ? $context["uni_news"] : null), "related_product_type_view", array())) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"tab-setting4\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
        // line 154
        echo (isset($context["entry_sitemap"]) ? $context["entry_sitemap"] : null);
        echo "</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\"><label><input type=\"checkbox\" name=\"uni_news[sitemap]\" value=\"1\" ";
        // line 155
        echo (($this->getAttribute((isset($context["uni_news"]) ? $context["uni_news"] : null), "sitemap", array())) ? ("checked=\"checked\"") : (""));
        echo " /><span></span></label></div>
\t\t\t\t\t\t\t\t<hr />
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">";
        // line 157
        echo (isset($context["entry_sitemap_address"]) ? $context["entry_sitemap_address"] : null);
        echo "</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t\t\t";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sitemaps"]) ? $context["sitemaps"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["sitemap"]) {
            // line 161
            echo "\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"padding:0 0 5px;font-weight:600\">";
            // line 162
            echo $this->getAttribute($context["sitemap"], "name", array());
            echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" readonly value=\"";
            // line 163
            echo $this->getAttribute($context["sitemap"], "url", array());
            echo "\" style=\"width:600px; max-width:100%\" />
\t\t\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sitemap'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container clearfix\"></div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\">
\$('.nav-tabs').each(function() {
\t\$(this).find('li:first a').tab('show');
});
</script>
";
        // line 183
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/uni_news_setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  473 => 183,  455 => 167,  445 => 163,  441 => 162,  438 => 161,  434 => 160,  428 => 157,  423 => 155,  419 => 154,  413 => 151,  409 => 150,  404 => 147,  393 => 144,  388 => 143,  384 => 142,  380 => 140,  365 => 138,  361 => 137,  355 => 134,  349 => 131,  345 => 130,  340 => 127,  334 => 126,  329 => 124,  325 => 123,  319 => 120,  314 => 117,  308 => 116,  303 => 114,  299 => 113,  293 => 110,  288 => 108,  284 => 107,  278 => 103,  272 => 102,  267 => 100,  261 => 97,  256 => 94,  250 => 93,  245 => 91,  241 => 90,  235 => 87,  230 => 85,  226 => 84,  219 => 79,  206 => 77,  202 => 76,  193 => 69,  180 => 67,  176 => 66,  167 => 59,  154 => 57,  150 => 56,  141 => 49,  128 => 47,  124 => 46,  118 => 42,  116 => 41,  111 => 39,  104 => 35,  100 => 34,  96 => 33,  92 => 32,  83 => 26,  79 => 24,  73 => 22,  70 => 21,  64 => 19,  62 => 18,  56 => 14,  45 => 12,  41 => 11,  36 => 9,  31 => 7,  23 => 2,  19 => 1,);
    }
}
/* {{header}}*/
/* {{column_left}}*/
/* <div id="content">*/
/* 	<div class="page-header">*/
/* 		<div class="container-fluid">*/
/* 			<div class="pull-right">*/
/* 				<button type="button" onclick="$('#form-news-setting').submit();" class="save btn btn-primary" data-toggle="tooltip" title="{{button_save}}" data-loading-text="<i class='fa fa-spinner'></i>"><i class="fa fa-save"></i></button>*/
/* 			</div>*/
/* 			<h1>{{heading_title}}</h1><br />*/
/* 			<ul class="breadcrumb">*/
/* 				{% for breadcrumb in breadcrumbs %}*/
/* 					<li><a href="{{breadcrumb.href}}">{{breadcrumb.text}}</a></li>*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="container-fluid">*/
/* 		{% if error_warning %}*/
/* 			<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{error_warning}}<button type="button" class="close" data-dismiss="alert">&times;</button></div>*/
/* 		{% endif %}*/
/* 		{% if success %}*/
/* 			<div class="alert alert-success"><i class="fa fa-check-circle"></i> {{success}}<button type="button" class="close" data-dismiss="alert">&times;</button></div>*/
/* 		{% endif %}*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 				<h3 class="panel-title"><i class="fa fa-list"></i> {{text_setting}}</h3>*/
/* 			</div>*/
/* 			<div class="panel-body">*/
/* 				<div class="sett tab-content-new" style="margin:0 0 20px; background:#fcfcfc;">*/
/* 					<form method="post" enctype="multipart/form-data" id="form-news-setting">*/
/* 						<ul class="nav nav-tabs">*/
/* 							<li class="active"><a href="#tab-setting" data-toggle="tab">{{head_category_settings}}</a></li>*/
/* 							<li><a href="#tab-setting2" data-toggle="tab">{{head_news_settings}}</a></li>*/
/* 							<li><a href="#tab-setting3" data-toggle="tab">{{head_related_products}}</a></li>*/
/* 							<li><a href="#tab-setting4" data-toggle="tab">{{head_sitemap}}</a></li>*/
/* 						</ul>*/
/* 						<div id="module" class="tab-content">*/
/* 							<div id="tab-setting" class="tab-pane active">*/
/* 								<div class="col-sm-2">{{entry_subcategory_column}}</div>*/
/* 								<div class="col-sm-10">*/
/* 								{% set columns = {6:2, 4:3, 3:4, 2:6} %}*/
/* 								<div style="float:left">*/
/* 									<div class="input-group">*/
/* 										<span class="input-group-addon">Десктоп:</span>*/
/* 										<select name="uni_news[subcategory_column][]" class="form-control" style="width:55px;">*/
/* 										{% for key, column in columns %}*/
/* 											<option value="col-lg-{{key}}" {{'col-lg-' ~ key in uni_news.subcategory_column ? 'selected="selected"'}}>{{column}}</option>*/
/* 										{% endfor %}*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div style="float:left;margin:0 0 0 5px">*/
/* 									<div class="input-group">*/
/* 										<span class="input-group-addon">Ноутбук:</span>*/
/* 										<select name="uni_news[subcategory_column][]" class="form-control" style="width:55px;">*/
/* 										{% for key, column in columns %}*/
/* 											<option value="col-md-{{key}}" {{'col-md-' ~ key in uni_news.subcategory_column ? 'selected="selected"'}}>{{column}}</option>*/
/* 										{% endfor %}*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div style="float:left;margin:0 0 0 5px">*/
/* 									<div class="input-group">*/
/* 										<span class="input-group-addon">Планшет:</span>*/
/* 										<select name="uni_news[subcategory_column][]" class="form-control" style="width:55px;">*/
/* 										{% for key, column in columns %}*/
/* 											<option value="col-sm-{{key}}" {{'col-sm-' ~ key in uni_news.subcategory_column ? 'selected="selected"'}}>{{column}}</option>*/
/* 										{% endfor %}*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div style="float:left;margin:0 0 0 5px">*/
/* 									<div class="input-group">*/
/* 										<span class="input-group-addon">Смартфон:</span>*/
/* 										<select name="uni_news[subcategory_column][]" class="form-control" style="width:55px;">*/
/* 										{% for key, column in columns %}*/
/* 											<option value="col-xs-{{key}}" {{'col-xs-' ~ key in uni_news.subcategory_column ? 'selected="selected"'}}>{{column}}</option>*/
/* 										{% endfor %}*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 								</div>*/
/* 								<hr />*/
/* 								<div class="col-sm-2">{{entry_subcategory}}</div>*/
/* 								<div class="col-sm-10"><label><input type="checkbox" name="uni_news[subcategory]" value="1" {{uni_news.subcategory ? 'checked="checked"'}} /><span></span></label></div>*/
/* 								<hr />*/
/* 								<div class="col-sm-2">* {{ entry_newslist_thumb }}</div>*/
/* 								<div class="col-sm-10">*/
/* 									<div class="input-group">*/
/* 										<input type="text" name="uni_news[image_width]" value="{{uni_news.image_width ? uni_news.image_width : 480}}" class="form-control" style="width:50px !important; text-align:center;" />*/
/* 										<input type="text" name="uni_news[image_height]" value="{{uni_news.image_height ? uni_news.image_height : 360}}" class="form-control" style="width:50px !important; text-align:center;" /> */
/* 										<span>пикс.</span>*/
/* 										{% if error_newspage_thumb %}<span class="error">{{lang.error_newspage_thumb}}</span>{% endif %}*/
/* 									</div>*/
/* 								</div>*/
/* 								<hr />*/
/* 								<div class="col-sm-2">* {{entry_headline_chars}}</div>*/
/* 								<div class="col-sm-10">*/
/* 									<div class="input-group">*/
/* 										<input type="text" name="uni_news[chars]" value="{{uni_news.chars ? uni_news.chars : 300}}" class="form-control" style="width:50px !important; text-align:center;" />*/
/* 										<span>симв.</span>*/
/* 										{% if error_numchars %}<span class="error">{{lang.error_numchars}}</span>{% endif %}*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div id="tab-setting2" class="tab-pane">*/
/* 								<div class="col-sm-2">{{entry_newspage_image}}</div>*/
/* 								<div class="col-sm-10"><label><input type="checkbox" name="uni_news[image]" value="1" {{uni_news.image ? 'checked="checked"'}} /><span></span></label></div>*/
/* 								<hr />*/
/* 								<div class="col-sm-2">* {{entry_newspage_thumb}}</div>*/
/* 								<div class="col-sm-10">*/
/* 									<div class="input-group">*/
/* 										<input type="text" name="uni_news[thumb_width]" value="{{uni_news.thumb_width ? uni_news.thumb_width : 320}}" class="form-control" style="width:50px !important; text-align:center;" />*/
/* 										<input type="text" name="uni_news[thumb_height]" value="{{uni_news.thumb_height ? uni_news.thumb_height : 240}}" class="form-control" style="width:50px !important; text-align:center;" /> */
/* 										<span>пикс.</span>*/
/* 										{% if error_newspage_thumb %}<span class="error">{{lang.error_newspage_thumb}}</span>{% endif %}*/
/* 									</div>*/
/* 								</div>*/
/* 								<hr />*/
/* 								<div class="col-sm-2">* {{entry_newspage_popup}}</div>*/
/* 								<div class="col-sm-10">*/
/* 									<div class="input-group">*/
/* 										<input type="text" name="uni_news[popup_width]" value="{{uni_news.popup_width ? uni_news.popup_width : 800}}" class="form-control" style="width:50px !important; text-align:center;" />*/
/* 										<input type="text" name="uni_news[popup_height]" value="{{uni_news.popup_height ? uni_news.popup_height : 600}}" class="form-control" style="width:50px !important; text-align:center;" /> */
/* 										<span>пикс.</span>*/
/* 										{% if error_newspage_popup %}<span class="error">{{lang.error_newspage_popup}}</span>{% endif %}*/
/* 									</div>*/
/* 								</div>*/
/* 								<hr />*/
/* 								<div class="col-sm-2">{{entry_newspage_addthis}}</div>*/
/* 								<div class="col-sm-10"><label><input type="checkbox" name="uni_news[addthis]" value="1" {{uni_news.addthis ? 'checked="checked"'}} /><span></span></label></div>*/
/* 							</div>*/
/* 							<div id="tab-setting3" class="tab-pane">*/
/* 								<div class="col-sm-2">* {{entry_related_products}}</div>*/
/* 								<div class="col-sm-10">*/
/* 									<ul class="nav nav-tabs">*/
/* 									{% for lang in languages %}*/
/* 										<li><a href="#related-product-title-{{lang.language_id}}" data-toggle="tab"><img src="language/{{lang.code}}/{{lang.code}}.png" title="{{lang.name}}" /></a></li>*/
/* 									{% endfor %}*/
/* 									</ul>*/
/* 									<div class="tab-content">*/
/* 									{% for lang in languages %}*/
/* 										<div id="related-product-title-{{lang.language_id}}" class="tab-pane">*/
/* 											<input type="text" name="uni_news[related_product_title][{{lang.language_id}}]" value="{{ uni_news.related_product_title[lang.language_id] ? uni_news.related_product_title[lang.language_id] : text_related_products }}" class="form-control" />*/
/* 										</div>*/
/* 									{% endfor %}*/
/* 									</div>*/
/* 								</div>*/
/* 								<hr />*/
/* 								<div class="col-sm-2">{{entry_related_product_type_view}}</div>*/
/* 								<div class="col-sm-10"><label><input type="checkbox" name="uni_news[related_product_type_view]" value="1" {{uni_news.related_product_type_view ? 'checked="checked"'}} /><span></span></label></div>*/
/* 							</div>*/
/* 							<div id="tab-setting4" class="tab-pane">*/
/* 								<div class="col-sm-2">{{entry_sitemap}}</div>*/
/* 								<div class="col-sm-10"><label><input type="checkbox" name="uni_news[sitemap]" value="1" {{uni_news.sitemap ? 'checked="checked"'}} /><span></span></label></div>*/
/* 								<hr />*/
/* 								<div class="col-sm-2">{{entry_sitemap_address}}</div>*/
/* 								<div class="col-sm-10">*/
/* 									<ul class="list-unstyled">*/
/* 										{% for sitemap in sitemaps %}*/
/* 											<li>*/
/* 												<div style="padding:0 0 5px;font-weight:600">{{ sitemap.name }}</div>*/
/* 												<input type="text" class="form-control" readonly value="{{ sitemap.url }}" style="width:600px; max-width:100%" />*/
/* 												<br />*/
/* 											</li>*/
/* 										{% endfor %}*/
/* 									</ul>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="container clearfix"></div>*/
/* 					</form>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <script type="text/javascript">*/
/* $('.nav-tabs').each(function() {*/
/* 	$(this).find('li:first a').tab('show');*/
/* });*/
/* </script>*/
/* {{footer}}*/
