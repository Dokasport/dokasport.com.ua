<?php

/* extension/module/uni_news_form.twig */
class __TwigTemplate_e7371e6934f3bafd8085e2434b162e97212413ca1d1dddb1530165a92a6cd190 extends Twig_Template
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
\t\t\t\t<a onclick=\"\$('#form').submit();\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></a>
\t\t\t\t<a href=\"";
        // line 8
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1>";
        // line 10
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1><br />
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
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
        // line 15
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 19
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 20
            echo "\t\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
\t\t";
        }
        // line 22
        echo "\t\t";
        if ((isset($context["error_news_description"]) ? $context["error_news_description"] : null)) {
            // line 23
            echo "\t\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_news_description"]) ? $context["error_news_description"] : null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
\t\t";
        }
        // line 25
        echo "\t\t";
        if ((isset($context["error_category"]) ? $context["error_category"] : null)) {
            // line 26
            echo "\t\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_category"]) ? $context["error_category"] : null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>
\t\t";
        }
        // line 28
        echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 30
        echo (isset($context["text_news_add"]) ? $context["text_news_add"] : null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<style>table {width:100%}table tr td {padding:7px 4px}table tr td:nth-child(1) {width:300px;max-width:300px;text-align:right;}table tr td + td {padding:7px 0 7px 10px}1table tr:nth-child(2n) {background: #f4f4f4;}</style>
\t\t\t\t\t<form action=\"";
        // line 35
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\" class=\"form-horizontal\">
\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 37
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 38
        echo (isset($context["tab_data"]) ? $context["tab_data"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 39
        echo (isset($context["tab_seo"]) ? $context["tab_seo"] : null);
        echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-general\">
\t\t\t\t\t\t\t\t<ul id=\"language\" class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 45
            echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"#language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /> ";
            echo $this->getAttribute($context["language"], "name", array());
            echo "</a></li>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 50
            echo "\t\t\t\t\t\t\t\t\t\t<div id=\"language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">* ";
            // line 52
            echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"news_description[";
            // line 54
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][name]\" class=\"form-control\" value=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["news_description"]) ? $context["news_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "name", array());
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 55
            if ($this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                echo "<span class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</span>";
            }
            // line 56
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
            // line 59
            echo (isset($context["entry_meta_h1"]) ? $context["entry_meta_h1"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"news_description[";
            // line 61
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_h1]\" class=\"form-control\" value=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["news_description"]) ? $context["news_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_h1", array());
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
            // line 65
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"news_description[";
            // line 67
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_title]\" class=\"form-control\" value=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["news_description"]) ? $context["news_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_title", array());
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
            // line 71
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"news_description[";
            // line 73
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_description]\" class=\"form-control\">";
            echo $this->getAttribute($this->getAttribute((isset($context["news_description"]) ? $context["news_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_description", array());
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
            // line 77
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"news_description[";
            // line 79
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_keyword]\" class=\"form-control\" value=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["news_description"]) ? $context["news_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_keyword", array());
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">* ";
            // line 83
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea name=\"news_description[";
            // line 85
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][description]\" id=\"description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"summernote\">";
            echo $this->getAttribute($this->getAttribute((isset($context["news_description"]) ? $context["news_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "description", array());
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 86
            if ($this->getAttribute((isset($context["error_description"]) ? $context["error_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                echo "<span class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_description"]) ? $context["error_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</span>";
            }
            // line 87
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>\t\t
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-data\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 95
        echo (isset($context["entry_parent_category"]) ? $context["entry_parent_category"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"path\" value=\"";
        // line 97
        echo (isset($context["path"]) ? $context["path"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_parent_category"]) ? $context["entry_parent_category"] : null);
        echo "\" id=\"input-parent\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"category_id\" value=\"";
        // line 98
        echo (isset($context["category_id"]) ? $context["category_id"] : null);
        echo "\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 102
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"overflow\" style=\"height:150px;\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 106
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"news_store[]\" value=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" ";
            echo ((twig_in_filter($this->getAttribute($context["store"], "store_id", array()), (isset($context["news_store"]) ? $context["news_store"] : null))) ? ("checked=\"checked\"") : (""));
            echo " /><span></span>";
            echo $this->getAttribute($context["store"], "name", array());
            echo "</label><br />
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 112
        echo (isset($context["entry_date_added"]) ? $context["entry_date_added"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"date_added\" value=\"";
        // line 114
        echo (isset($context["date_added"]) ? $context["date_added"] : null);
        echo "\" class=\"form-control date\" data-date-format=\"YYYY-MM-DD HH:mm:ss\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 118
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 120
        echo (((isset($context["thumb"]) ? $context["thumb"] : null)) ? ((isset($context["thumb"]) ? $context["thumb"] : null)) : ((isset($context["placeholder"]) ? $context["placeholder"] : null)));
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"image\" value=\"";
        // line 121
        echo (isset($context["image"]) ? $context["image"] : null);
        echo "\" id=\"image\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 125
        echo (isset($context["entry_related"]) ? $context["entry_related"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 127
        echo (isset($context["help_related"]) ? $context["help_related"] : null);
        echo "\" id=\"input-related\" class=\"form-control\" /><br/>
\t\t\t\t\t\t\t\t\t\t<div id=\"product-related\" class=\"overflow\" style=\"height:150px;\"> 
\t\t\t\t\t\t\t\t\t\t\t";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["related_products"]) ? $context["related_products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 130
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"product-related";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-minus-circle\"></i> ";
            // line 131
            echo $this->getAttribute($context["product"], "name", array());
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"related_products[]\" value=\"";
            // line 132
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 139
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<select name=\"status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 142
        echo (((isset($context["status"]) ? $context["status"] : null)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" ";
        // line 143
        echo ((((isset($context["status"]) ? $context["status"] : null) == 0)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-seo\">
\t\t\t\t\t\t\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 149
        echo (isset($context["text_keyword"]) ? $context["text_keyword"] : null);
        echo "</div>
\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 153
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 154
        echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 157
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 158
            echo $this->getAttribute($context["store"], "name", array());
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 160
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 161
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"language/";
                // line 163
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"news_seo_url[";
                // line 165
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute($this->getAttribute((isset($context["news_seo_url"]) ? $context["news_seo_url"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    echo $this->getAttribute($this->getAttribute((isset($context["news_seo_url"]) ? $context["news_seo_url"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                }
                echo "\" placeholder=\"";
                echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
                echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 167
                if ($this->getAttribute($this->getAttribute((isset($context["error_keyword"]) ? $context["error_keyword"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    // line 168
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["error_keyword"]) ? $context["error_keyword"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 169
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\"><!--
";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 186
            echo "\t";
            if ((isset($context["ckeditor"]) ? $context["ckeditor"] : null)) {
                // line 187
                echo "\t\tckeditorInit('description";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "', '";
                echo (isset($context["user_token"]) ? $context["user_token"] : null);
                echo "');
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "\$('#tab-language a:first').tab('show');

\$('.date').datetimepicker({
\tpickTime: true
});

\$('#language a:first').tab('show');

\$('input[name=\\'path\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/module/uni_news/autocomplete&user_token=";
        // line 201
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tjson.unshift({
\t\t\t\t\tcategory_id: 0,
\t\t\t\t\tname: '";
        // line 206
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "'
\t\t\t\t});

\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'path\\']').val(item['label']);
\t\t\$('input[name=\\'category_id\\']').val(item['value']);
\t}
});
\$('#category-filter').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});

\$('input[name=\\'related\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 230
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'related\\']').val('');

\t\t\$('#product-related' + item['value']).remove();

\t\t\$('#product-related').append('<div id=\"product-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"related_products[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#product-related').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});
//--></script>
";
        // line 255
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/uni_news_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  601 => 255,  573 => 230,  546 => 206,  538 => 201,  525 => 190,  513 => 187,  510 => 186,  506 => 185,  493 => 174,  485 => 171,  478 => 169,  472 => 168,  470 => 167,  457 => 165,  448 => 163,  444 => 161,  440 => 160,  435 => 158,  432 => 157,  428 => 156,  423 => 154,  419 => 153,  412 => 149,  401 => 143,  395 => 142,  389 => 139,  383 => 135,  374 => 132,  370 => 131,  365 => 130,  361 => 129,  356 => 127,  351 => 125,  344 => 121,  338 => 120,  333 => 118,  326 => 114,  321 => 112,  315 => 108,  302 => 106,  298 => 105,  292 => 102,  285 => 98,  279 => 97,  274 => 95,  268 => 91,  259 => 87,  253 => 86,  245 => 85,  240 => 83,  231 => 79,  226 => 77,  217 => 73,  212 => 71,  203 => 67,  198 => 65,  189 => 61,  184 => 59,  179 => 56,  173 => 55,  167 => 54,  162 => 52,  156 => 50,  152 => 49,  148 => 47,  131 => 45,  127 => 44,  119 => 39,  115 => 38,  111 => 37,  106 => 35,  98 => 30,  94 => 28,  88 => 26,  85 => 25,  79 => 23,  76 => 22,  70 => 20,  68 => 19,  62 => 15,  51 => 13,  47 => 12,  42 => 10,  35 => 8,  31 => 7,  23 => 2,  19 => 1,);
    }
}
/* {{ header }}*/
/* {{ column_left }}*/
/* <div id="content">*/
/* 	<div class="page-header">*/
/* 		<div class="container-fluid">*/
/* 			<div class="pull-right">*/
/* 				<a onclick="$('#form').submit();" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></a>*/
/* 				<a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a>*/
/* 			</div>*/
/* 			<h1>{{ heading_title }}</h1><br />*/
/* 			<ul class="breadcrumb">*/
/* 				{% for breadcrumb in breadcrumbs %}*/
/* 					<li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="container-fluid">*/
/* 		{% if error_warning %}*/
/* 			<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}<button type="button" class="close" data-dismiss="alert">&times;</button></div>*/
/* 		{% endif %}*/
/* 		{% if error_news_description %}*/
/* 			<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_news_description }}<button type="button" class="close" data-dismiss="alert">&times;</button></div>*/
/* 		{% endif %}*/
/* 		{% if error_category %}*/
/* 			<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_category }}<button type="button" class="close" data-dismiss="alert">&times;</button></div>*/
/* 		{% endif %}*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 				<h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_news_add }}</h3>*/
/* 			</div>*/
/* 			<div class="panel-body">*/
/* 				<div class="content">*/
/* 					<style>table {width:100%}table tr td {padding:7px 4px}table tr td:nth-child(1) {width:300px;max-width:300px;text-align:right;}table tr td + td {padding:7px 0 7px 10px}1table tr:nth-child(2n) {background: #f4f4f4;}</style>*/
/* 					<form action="{{ action }}" method="post" enctype="multipart/form-data" id="form" class="form-horizontal">*/
/* 						<ul class="nav nav-tabs">*/
/* 							<li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/* 							<li><a href="#tab-data" data-toggle="tab">{{ tab_data }}</a></li>*/
/* 							<li><a href="#tab-seo" data-toggle="tab">{{ tab_seo }}</a></li>*/
/* 						</ul>*/
/* 						<div class="tab-content">*/
/* 							<div class="tab-pane active" id="tab-general">*/
/* 								<ul id="language" class="nav nav-tabs">*/
/* 									{% for language in languages %}*/
/* 										<li><a href="#language{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>*/
/* 									{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 									{% for language in languages %}*/
/* 										<div id="language{{ language.language_id }}" class="tab-pane">*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-2 control-label">* {{ entry_title }}</label>*/
/* 												<div class="col-sm-10">*/
/* 													<input name="news_description[{{ language.language_id }}][name]" class="form-control" value="{{ news_description[language.language_id].name }}" />*/
/* 													{% if error_name[language.language_id] %}<span class="text-danger">{{ error_name[language.language_id] }}</span>{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-2 control-label">{{ entry_meta_h1 }}</label>*/
/* 												<div class="col-sm-10">*/
/* 													<input name="news_description[{{ language.language_id }}][meta_h1]" class="form-control" value="{{ news_description[language.language_id].meta_h1 }}" />*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-2 control-label">{{ entry_meta_title }}</label>*/
/* 												<div class="col-sm-10">*/
/* 													<input name="news_description[{{ language.language_id }}][meta_title]" class="form-control" value="{{ news_description[language.language_id].meta_title }}" />*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-2 control-label">{{ entry_meta_description }}</label>*/
/* 												<div class="col-sm-10">*/
/* 													<textarea name="news_description[{{ language.language_id }}][meta_description]" class="form-control">{{ news_description[language.language_id].meta_description }}</textarea>*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-2 control-label">{{ entry_meta_keyword }}</label>*/
/* 												<div class="col-sm-10">*/
/* 													<input name="news_description[{{ language.language_id }}][meta_keyword]" class="form-control" value="{{ news_description[language.language_id].meta_keyword }}" />*/
/* 												</div>*/
/* 											</div>*/
/* 											<div class="form-group">*/
/* 												<label class="col-sm-2 control-label">* {{ entry_description }}</label>*/
/* 												<div class="col-sm-10">*/
/* 													<textarea name="news_description[{{ language.language_id }}][description]" id="description{{ language.language_id }}" data-toggle="summernote">{{ news_description[language.language_id].description }}</textarea>*/
/* 													{% if error_description[language.language_id] %}<span class="text-danger">{{ error_description[language.language_id] }}</span>{% endif %}*/
/* 												</div>*/
/* 											</div>*/
/* 										</div>		*/
/* 									{% endfor %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="tab-pane" id="tab-data">*/
/* 								<div class="form-group">*/
/* 									<label class="col-sm-2 control-label">{{ entry_parent_category }}</label>*/
/* 									<div class="col-sm-10">*/
/* 										<input type="text" name="path" value="{{ path }}" placeholder="{{ entry_parent_category }}" id="input-parent" class="form-control" />*/
/* 										<input type="hidden" name="category_id" value="{{ category_id }}" />*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="col-sm-2 control-label">{{ entry_store }}</label>*/
/* 									<div class="col-sm-10">*/
/* 										<div class="overflow" style="height:150px;">*/
/* 											{% for store in stores %}*/
/* 												<label><input type="checkbox" name="news_store[]" value="{{ store.store_id }}" {{ store.store_id in news_store ? 'checked="checked"' }} /><span></span>{{ store.name }}</label><br />*/
/* 											{% endfor %}*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="col-sm-2 control-label">{{ entry_date_added }}</label>*/
/* 									<div class="col-sm-10">*/
/* 										<input type="text" name="date_added" value="{{ date_added }}" class="form-control date" data-date-format="YYYY-MM-DD HH:mm:ss" />*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="col-sm-2 control-label">{{ entry_image }}</label>*/
/* 									<div class="col-sm-10">*/
/* 										<a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="{{ thumb ? thumb : placeholder }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/* 										<input type="hidden" name="image" value="{{ image }}" id="image" />*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="col-sm-2 control-label">{{ entry_related }}</label>*/
/* 									<div class="col-sm-10">*/
/* 										<input type="text" name="related" value="" placeholder="{{ help_related }}" id="input-related" class="form-control" /><br/>*/
/* 										<div id="product-related" class="overflow" style="height:150px;"> */
/* 											{% for product in related_products %}*/
/* 												<div id="product-related{{ product.product_id }}">*/
/* 													<i class="fa fa-minus-circle"></i> {{ product.name }}*/
/* 													<input type="hidden" name="related_products[]" value="{{ product.product_id }}" />*/
/* 												</div>*/
/* 											{% endfor %}*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="col-sm-2 control-label">{{ entry_status }}</label>*/
/* 									<div class="col-sm-10">*/
/* 										<select name="status" class="form-control">*/
/* 											<option value="1" {{ status ? 'selected="selected"' }}>{{ text_enabled }}</option>*/
/* 											<option value="0" {{ status == 0 ? 'selected="selected"' }}>{{ text_disabled }}</option>*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="tab-pane" id="tab-seo">*/
/* 								<div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_keyword }}</div>*/
/* 								<div class="table-responsive">*/
/* 									<table class="table table-bordered table-hover">*/
/* 										<tr>*/
/* 											<td class="text-left">{{ entry_store }}</td>*/
/* 											<td class="text-left">{{ entry_keyword }}</td>*/
/* 										</tr>*/
/* 										{% for store in stores %}*/
/* 											<tr>*/
/* 												<td class="text-left">{{ store.name }}</td>*/
/* 												<td class="text-left">*/
/* 													{% for language in languages %}*/
/* 														<div class="input-group">*/
/* 															<span class="input-group-addon">*/
/* 																<img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" />*/
/* 															</span>*/
/* 															<input type="text" name="news_seo_url[{{ store.store_id }}][{{ language.language_id }}]" value="{% if news_seo_url[store.store_id][language.language_id] %}{{ news_seo_url[store.store_id][language.language_id] }}{% endif %}" placeholder="{{ entry_keyword }}" class="form-control" />*/
/* 														</div>*/
/* 														{% if error_keyword[store.store_id][language.language_id] %}*/
/* 															<div class="text-danger">{{ error_keyword[store.store_id][language.language_id] }}</div>*/
/* 														{% endif %} */
/* 													{% endfor %}*/
/* 												</td>*/
/* 											</tr>*/
/* 										{% endfor %}*/
/* 									</table>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</form>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* {% for language in languages %}*/
/* 	{% if ckeditor %}*/
/* 		ckeditorInit('description{{ language.language_id }}', '{{ user_token }}');*/
/* 	{% endif %}*/
/* {% endfor %}*/
/* $('#tab-language a:first').tab('show');*/
/* */
/* $('.date').datetimepicker({*/
/* 	pickTime: true*/
/* });*/
/* */
/* $('#language a:first').tab('show');*/
/* */
/* $('input[name=\'path\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=extension/module/uni_news/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				json.unshift({*/
/* 					category_id: 0,*/
/* 					name: '{{ text_none }}'*/
/* 				});*/
/* */
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['category_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'path\']').val(item['label']);*/
/* 		$('input[name=\'category_id\']').val(item['value']);*/
/* 	}*/
/* });*/
/* $('#category-filter').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* */
/* $('input[name=\'related\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['product_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'related\']').val('');*/
/* */
/* 		$('#product-related' + item['value']).remove();*/
/* */
/* 		$('#product-related').append('<div id="product-related' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="related_products[]" value="' + item['value'] + '" /></div>');*/
/* 	}*/
/* });*/
/* */
/* $('#product-related').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* //--></script>*/
/* {{ footer }}*/
