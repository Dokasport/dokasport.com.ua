<?php

/* extension/module/uni_five_in_one.twig */
class __TwigTemplate_a11cb79bebcf539f1934db2dd48135f50effe256d66b39abaa65dbd1935f0cb5 extends Twig_Template
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
\t\t\t\t<button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
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
        echo "</h1>
\t\t\t<br />
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
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
        // line 16
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 20
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 21
            echo "\t\t\t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
\t\t";
        }
        // line 25
        echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 27
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<form action=\"";
        // line 30
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 32
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
        // line 34
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t";
        // line 35
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            echo "<div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>";
        }
        // line 36
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 
\t\t\t\t\t<div class=\"form-group\" id=\"main-div\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 39
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 43
            echo "\t\t\t\t\t\t\t\t\t<li id=\"tab-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\"><a href=\"#store-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" data-toggle=\"tab\">";
            echo $this->getAttribute($context["store"], "name", array());
            echo "</a></li>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 48
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            // line 49
            $context["store_id"] = $this->getAttribute($context["store"], "store_id", array());
            // line 50
            echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div id=\"store-";
            // line 51
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tab_names"]) ? $context["tab_names"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"));
            foreach ($context['_seq'] as $context["key"] => $context["tab_name"]) {
                // line 54
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<li id=\"tab-";
                echo (isset($context["store_id"]) ? $context["store_id"] : null);
                echo "-";
                echo $context["key"];
                echo "\"><a href=\"#";
                echo (isset($context["store_id"]) ? $context["store_id"] : null);
                echo "-";
                echo $context["key"];
                echo "\" data-toggle=\"tab\">";
                echo $context["tab_name"];
                echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['tab_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["tab_names"]) ? $context["tab_names"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"));
            foreach ($context['_seq'] as $context["key"] => $context["tab_name"]) {
                // line 59
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"";
                echo (isset($context["store_id"]) ? $context["store_id"] : null);
                echo "-";
                echo $context["key"];
                echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product\">";
                // line 61
                echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 64
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                    // line 65
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#";
                    echo (isset($context["store_id"]) ? $context["store_id"] : null);
                    echo "-";
                    echo $context["key"];
                    echo "-title-";
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "\" data-toggle=\"tab\" style=\"padding:2px 10px 5px\"><img src=\"language/";
                    echo $this->getAttribute($context["lang"], "code", array());
                    echo "/";
                    echo $this->getAttribute($context["lang"], "code", array());
                    echo ".png\" title=\"";
                    echo $this->getAttribute($context["lang"], "name", array());
                    echo "\" /></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 69
                $context["names"] = array(0 => "latest", 1 => "special", 2 => "bestseller", 3 => "popular", 4 => "featured");
                // line 70
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                    // line 71
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"";
                    echo (isset($context["store_id"]) ? $context["store_id"] : null);
                    echo "-";
                    echo $context["key"];
                    echo "-title-";
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"set[";
                    // line 72
                    echo (isset($context["store_id"]) ? $context["store_id"] : null);
                    echo "][";
                    echo $context["key"];
                    echo "][title][";
                    echo $this->getAttribute($context["lang"], "language_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), $context["key"], array(), "array"), "title", array()), $this->getAttribute($context["lang"], "language_id", array()), array(), "array");
                    echo "\" ";
                    if ((($this->getAttribute($context["lang"], "code", array()) == (isset($context["lang_code"]) ? $context["lang_code"] : null)) && !twig_in_filter($context["key"], (isset($context["names"]) ? $context["names"] : null)))) {
                        echo "oninput=\"setTabName(";
                        echo (isset($context["store_id"]) ? $context["store_id"] : null);
                        echo ", '";
                        echo $context["key"];
                        echo "', this)\"";
                    }
                    echo " placeholder=\"Пример: Каталог\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 78
                if ((((($context["key"] != "latest") && ($context["key"] != "special")) && ($context["key"] != "bestseller")) && ($context["key"] != "popular"))) {
                    // line 79
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-product\">";
                    // line 80
                    echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"product_name\" value=\"\" placeholder=\"";
                    // line 82
                    echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
                    echo "\" id=\"input-product\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"";
                    // line 84
                    echo (isset($context["store_id"]) ? $context["store_id"] : null);
                    echo "-";
                    echo $context["key"];
                    echo "-product\" class=\"well well-sm\" style=\"height:150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 85
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), $context["key"], array(), "array"), "products", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 86
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"";
                        echo (isset($context["store_id"]) ? $context["store_id"] : null);
                        echo "-";
                        echo $context["key"];
                        echo "-product";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                        echo $this->getAttribute($context["product"], "name", array());
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"set[";
                        // line 87
                        echo (isset($context["store_id"]) ? $context["store_id"] : null);
                        echo "][";
                        echo $context["key"];
                        echo "][product][]\" value=\"";
                        echo $this->getAttribute($context["product"], "product_id", array());
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 90
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\$(document).ready(function() {
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tgetProduct(";
                    // line 93
                    echo (isset($context["store_id"]) ? $context["store_id"] : null);
                    echo ", '";
                    echo $context["key"];
                    echo "');
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 99
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-limit\">";
                // line 100
                echo (isset($context["entry_limit"]) ? $context["entry_limit"] : null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"set[";
                // line 102
                echo (isset($context["store_id"]) ? $context["store_id"] : null);
                echo "][";
                echo $context["key"];
                echo "][limit]\" value=\"";
                echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), $context["key"], array(), "array"), "limit", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), $context["key"], array(), "array"), "limit", array())) : (5));
                echo "\" placeholder=\"";
                echo (isset($context["entry_limit"]) ? $context["entry_limit"] : null);
                echo "\" id=\"input-limit\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-limit\">";
                // line 106
                echo (isset($context["entry_thumb"]) ? $context["entry_thumb"] : null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"set[";
                // line 109
                echo (isset($context["store_id"]) ? $context["store_id"] : null);
                echo "][";
                echo $context["key"];
                echo "][thumb_width]\" value=\"";
                echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), $context["key"], array(), "array"), "thumb_width", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), $context["key"], array(), "array"), "thumb_width", array())) : (220));
                echo "\" class=\"form-control\" style=\"width:50% !important; text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"set[";
                // line 110
                echo (isset($context["store_id"]) ? $context["store_id"] : null);
                echo "][";
                echo $context["key"];
                echo "][thumb_height]\" value=\"";
                echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), $context["key"], array(), "array"), "thumb_height", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), $context["key"], array(), "array"), "thumb_height", array())) : (200));
                echo "\" class=\"form-control\" style=\"width:50% !important; text-align:center;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">пикс.</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-limit\">";
                // line 116
                echo (isset($context["entry_type"]) ? $context["entry_type"] : null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"set[";
                // line 118
                echo (isset($context["store_id"]) ? $context["store_id"] : null);
                echo "][";
                echo $context["key"];
                echo "][type]\" value=\"1\" ";
                echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), $context["key"], array(), "array"), "type", array())) ? ("checked=\"checked\"") : (""));
                echo " /><span></span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 121
                if ((((($context["key"] == "latest") || ($context["key"] == "special")) || ($context["key"] == "bestseller")) || ($context["key"] == "popular"))) {
                    // line 122
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-limit\">";
                    // line 123
                    echo (isset($context["entry_qty"]) ? $context["entry_qty"] : null);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"set[";
                    // line 125
                    echo (isset($context["store_id"]) ? $context["store_id"] : null);
                    echo "][";
                    echo $context["key"];
                    echo "][qty]\" value=\"1\" ";
                    echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), $context["key"], array(), "array"), "qty", array())) ? ("checked=\"checked\"") : (""));
                    echo " /><span></span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 129
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-limit\">";
                // line 130
                echo (isset($context["entry_sort"]) ? $context["entry_sort"] : null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"set[";
                // line 132
                echo (isset($context["store_id"]) ? $context["store_id"] : null);
                echo "][";
                echo $context["key"];
                echo "][sort_order]\" value=\"";
                echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), $context["key"], array(), "array"), "sort_order", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), $context["key"], array(), "array"), "sort_order", array())) : (1));
                echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
                // line 136
                echo (isset($context["entry_status_tab"]) ? $context["entry_status_tab"] : null);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"set[";
                // line 138
                echo (isset($context["store_id"]) ? $context["store_id"] : null);
                echo "][";
                echo $context["key"];
                echo "][status]\" value=\"1\" ";
                echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), (isset($context["store_id"]) ? $context["store_id"] : null), array(), "array"), $context["key"], array(), "array"), "status", array())) ? ("checked=\"checked\"") : (""));
                echo " /><span></span></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 141
                if (((((($context["key"] != "latest") && ($context["key"] != "special")) && ($context["key"] != "bestseller")) && ($context["key"] != "featured")) && ($context["key"] != "popular"))) {
                    // line 142
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\"></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-danger\" onclick=\"removeTab(";
                    // line 145
                    echo (isset($context["store_id"]) ? $context["store_id"] : null);
                    echo ", '";
                    echo $context["key"];
                    echo "')\">";
                    echo (isset($context["button_remove_tab"]) ? $context["button_remove_tab"] : null);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 149
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"tabs[";
                echo (isset($context["store_id"]) ? $context["store_id"] : null);
                echo "][";
                echo $context["key"];
                echo "]title\" value=\"";
                echo $context["tab_name"];
                echo "\" class=\"tab-name\" />\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['tab_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" style=\"margin:-10px 0 -5px\">
\t\t\t\t\t\t\t\t\t\t\t<hr style=\"margin:-10px 0 15px\" />
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-success\" onclick=\"addNewTab(";
            // line 155
            echo (isset($context["store_id"]) ? $context["store_id"] : null);
            echo ");\">";
            echo (isset($context["button_add_tab"]) ? $context["button_add_tab"] : null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 166
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"status\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 169
        echo (((isset($context["status"]) ? $context["status"] : null)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" ";
        // line 170
        echo ((((isset($context["status"]) ? $context["status"] : null) == 0)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
\t<style>
\t\t.col-sm-10 .col-sm-2.control-label {padding-top:0}
\t\t.tab-pane .form-group {margin:0 -15px 0 0}
\t</style>
\t<script>
\t\t\$(document).ready(function() {
\t\t\t\$('.nav-tabs').each(function() {
\t\t\t\t\$(this).find('li:first a').tab('show');
\t\t\t});
\t\t});
\t\t
\t\tfunction addNewTab(store_id) {
\t\t\tvar block = \$('html body').find('#store-'+store_id);
\t\t\t
\t\t\tvar d = [];
\t\t\t
\t\t\tblock.find('> .nav li').each(function(){
\t\t\t\td.push(Number(\$(this).attr('id').replace(/\\D+/g,\"\")));
\t\t\t});
\t\t\t
\t\t\tvar t = Math.max.apply(Math, d), items = t+1, tab_name = 'additional'+items;
\t\t\t
\t\t\tblock.find('> .nav > .active, > .tab-content > .active').removeClass('active');
\t\t\t
\t\t\tblock.find('> .nav').append('<li id=\"tab-'+store_id+'-'+tab_name+'\" class=\"active\"><a href=\"#'+store_id+'-'+tab_name+'\" class=\"additional\" data-toggle=\"tab\">";
        // line 202
        echo (isset($context["entry_tab_additional"]) ? $context["entry_tab_additional"] : null);
        echo "</a></li>')

\t\t\thtml = '<div id=\"'+store_id+'-'+tab_name+'\" class=\"tab-pane active\">';
\t\t\thtml += '<div class=\"form-group\">';
\t\t\thtml += '<label class=\"col-sm-2 control-label\" for=\"input-product\">";
        // line 206
        echo (isset($context["entry_title"]) ? $context["entry_title"] : null);
        echo "</label>';
\t\t\thtml += '<div class=\"col-sm-10\">';
\t\t\thtml += '<ul class=\"nav nav-tabs\">';
\t\t\t";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 210
            echo "\t\t\thtml += '<li><a href=\"#'+store_id+'-'+tab_name+'-title-";
            echo $this->getAttribute($context["lang"], "language_id", array());
            echo "\" data-toggle=\"tab\" style=\"padding:2px 10px 5px\"><img src=\"language/";
            echo $this->getAttribute($context["lang"], "code", array());
            echo "/";
            echo $this->getAttribute($context["lang"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["lang"], "name", array());
            echo "\" /></a></li>';
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "\t\t\thtml += '</ul>';
\t\t\thtml += '<div class=\"tab-content\">';
\t\t\t";
        // line 214
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 215
            echo "\t\t\thtml += '<div id=\"'+store_id+'-'+tab_name+'-title-";
            echo $this->getAttribute($context["lang"], "language_id", array());
            echo "\" class=\"tab-pane\">';
\t\t\thtml += '<input type=\"text\" name=\"set['+store_id+']['+tab_name+'][title][";
            // line 216
            echo $this->getAttribute($context["lang"], "language_id", array());
            echo "]\" value=\"\" ";
            if (($this->getAttribute($context["lang"], "code", array()) == (isset($context["lang_code"]) ? $context["lang_code"] : null))) {
                echo "oninput=\"setTabName('+store_id+', \\''+tab_name+'\\', this)\"";
            }
            echo " placeholder=\"Пример: Каталог\" class=\"form-control\" />';
\t\t\thtml += '</div>';
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        echo "\t\t\thtml += '</div>';
\t\t\thtml += '</div>';
\t\t\thtml += '</div>';
\t\t\t
\t\t\thtml += '<div class=\"form-group\">';
\t\t\thtml += '<label class=\"col-sm-2 control-label\" for=\"input-product\">";
        // line 224
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "</label>';
\t\t\thtml += '<div class=\"col-sm-10\">';
\t\t\thtml += '<input type=\"text\" name=\"product_name\" value=\"\" placeholder=\"";
        // line 226
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "\" id=\"input-product\" class=\"form-control\" />';
\t\t\thtml += '<br />';
\t\t\thtml += '<div id=\"'+store_id+'-'+tab_name+'-product\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">';
\t\t\thtml += '</div>';
\t\t\thtml += '<script>';
\t\t\thtml += '\$(document).ready(function() {';
\t\t\thtml += 'getProduct('+store_id+', \\''+tab_name+'\\');';
\t\t\thtml += '});';
\t\t\thtml += '<\\/script>';
\t\t\thtml += '</div>';
\t\t\thtml += '</div>';
\t\t\t
\t\t\thtml += '<div class=\"form-group\">';
\t\t\thtml += '<label class=\"col-sm-2 control-label\" for=\"input-limit\">";
        // line 239
        echo (isset($context["entry_limit"]) ? $context["entry_limit"] : null);
        echo "</label>';
\t\t\thtml += '<div class=\"col-sm-10\">';
\t\t\thtml += '<input type=\"text\" name=\"set['+store_id+']['+tab_name+'][limit]\" value=\"5\" placeholder=\"";
        // line 241
        echo (isset($context["entry_limit"]) ? $context["entry_limit"] : null);
        echo "\" id=\"input-limit\" class=\"form-control\" />';
\t\t\thtml += '</div>';
\t\t\thtml += '</div>';
\t\t\t
\t\t\thtml += '<div class=\"form-group\">';
\t\t\thtml += '<label class=\"col-sm-2 control-label\" for=\"input-limit\">";
        // line 246
        echo (isset($context["entry_thumb"]) ? $context["entry_thumb"] : null);
        echo "</label>';
\t\t\thtml += '<div class=\"col-sm-10\">';
\t\t\thtml += '<div class=\"input-group\">';
\t\t\thtml += '<input type=\"text\" name=\"set['+store_id+']['+tab_name+'][thumb_width]\" value=\"220\" class=\"form-control\" style=\"width:50% !important; text-align:center;\">';
\t\t\thtml += '<input type=\"text\" name=\"set['+store_id+']['+tab_name+'][thumb_height]\" value=\"200\" class=\"form-control\" style=\"width:50% !important; text-align:center;\">';
\t\t\thtml += '<span class=\"input-group-addon\">пикс.</span>';
\t\t\thtml += '</div>';
\t\t\thtml += '</div>';
\t\t\thtml += '</div>';
\t\t\t
\t\t\thtml += '<div class=\"form-group\">';
\t\t\thtml += '<label class=\"col-sm-2 control-label\" for=\"input-limit\">";
        // line 257
        echo (isset($context["entry_type"]) ? $context["entry_type"] : null);
        echo "</label>';
\t\t\thtml += '<div class=\"col-sm-10\">';
\t\t\thtml += '<label><input type=\"checkbox\" name=\"set['+store_id+']['+tab_name+'][type]\" value=\"1\" /><span></span></label>';
\t\t\thtml += '</div>';
\t\t\thtml += '</div>';
\t\t\t
\t\t\thtml += '<div class=\"form-group\">';
\t\t\thtml += '<label class=\"col-sm-2 control-label\" for=\"input-limit\">";
        // line 264
        echo (isset($context["entry_sort"]) ? $context["entry_sort"] : null);
        echo "</label>';
\t\t\thtml += '<div class=\"col-sm-10\">';
\t\t\thtml += '<input type=\"text\" name=\"set['+store_id+']['+tab_name+'][sort_order]\" value=\"1\" class=\"form-control\">';
\t\t\thtml += '</div>';
\t\t\thtml += '</div>';
\t\t\t
\t\t\thtml += '<div class=\"form-group\">';
\t\t\thtml += '<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 271
        echo (isset($context["entry_status_tab"]) ? $context["entry_status_tab"] : null);
        echo "</label>';
\t\t\thtml += '<div class=\"col-sm-10\">';
\t\t\thtml += '<label><input type=\"checkbox\" name=\"set['+store_id+']['+tab_name+'][status]\" value=\"1\" /><span></span></label>';
\t\t\thtml += '</div>';
\t\t\thtml += '</div>';
\t\t\t
\t\t\thtml += '<div class=\"form-group\">';
\t\t\thtml += '<label class=\"col-sm-2 control-label\"></label>';
\t\t\thtml += '<div class=\"col-sm-10\">';
\t\t\thtml += '<a class=\"btn btn-xs btn-danger\" onclick=\"removeTab('+store_id+', \\''+tab_name+'\\')\">";
        // line 280
        echo (isset($context["button_remove_tab"]) ? $context["button_remove_tab"] : null);
        echo "</a>';
\t\t\thtml += '</div>';
\t\t\thtml += '</div>';
\t\t\thtml += '<input type=\"hidden\" name=\"tabs['+store_id+']['+tab_name+']title\" value=\"\" />';
\t\t\thtml += '</div>';
\t\t\t
\t\t\tblock.find('> .tab-content > .form-group').before(html);
\t\t\t
\t\t\tblock.find(' > .tab-content > .active').each(function() {
\t\t\t\t\$(this).find('li:first a').tab('show');
\t\t\t});
\t\t}
\t\t
\t\tfunction setTabName(store_id, tab_name, data) {
\t\t
\t\t\tvar this_text = \$(data).val(), tab_li = \$('#tab-'+store_id+'-'+tab_name), tab_div = \$('#'+store_id+'-'+tab_name);
\t\t\t
\t\t\ttab_li.find('a').text(this_text)
\t\t\ttab_div.find('input[type=\\'hidden\\'].tab-name').val(this_text);
\t\t}
\t\t
\t\tfunction removeTab(store_id, tab_name) {
\t\t\tvar tab_li = \$('#tab-'+store_id+'-'+tab_name), tab_div = \$('#'+store_id+'-'+tab_name);
\t\t\t
\t\t\ttab_li.prev().find('a').tab('show');
\t\t\t
\t\t\t\$('html, body').animate({scrollTop: tab_li.prev().offset().top-100}, 400);
\t\t\t
\t\t\ttab_li.remove();
\t\t\ttab_div.remove();
\t\t}
\t\t
\t\tfunction getProduct(store_id, tab_name) {
\t\t
\t\t\tvar module_name = store_id+'-'+tab_name;
\t\t
\t\t\tvar new_block = \$('#'+module_name), new_input = new_block.find('input[name=\\'product_name\\']');
\t\t
\t\t\tnew_input.autocomplete({
\t\t\t\tsource: function(request, response) {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 321
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name='+encodeURIComponent(request),
\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\t\t\treturn {label: item['name'], value: item['product_id']}
\t\t\t\t\t\t\t}));
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t},
\t\t\t\tselect: function(item) {
\t\t\t\t\tnew_input.val('');
\t\t
\t\t\t\t\t\$('#'+module_name+'-product'+item['value']).remove();
\t\t
\t\t\t\t\t\$('#'+module_name+'-product').append('<div id=\"'+module_name+'-product'+item['value']+'\"><i class=\"fa fa-minus-circle\"></i>'+item['label']+'<input type=\"hidden\" name=\"set['+store_id+']['+tab_name+'][product][]\" value=\"'+item['value']+'\" /></div>');\t
\t\t\t\t}
\t\t\t});
\t
\t\t\t\$('#'+module_name+'-product').delegate('.fa-minus-circle', 'click', function() {
\t\t\t\t\$(this).parent().remove();
\t\t\t});
\t\t}
\t</script>
</div>
";
        // line 345
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/uni_five_in_one.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  780 => 345,  753 => 321,  709 => 280,  697 => 271,  687 => 264,  677 => 257,  663 => 246,  655 => 241,  650 => 239,  634 => 226,  629 => 224,  622 => 219,  609 => 216,  604 => 215,  600 => 214,  596 => 212,  581 => 210,  577 => 209,  571 => 206,  564 => 202,  527 => 170,  521 => 169,  515 => 166,  509 => 162,  494 => 155,  489 => 152,  475 => 149,  464 => 145,  459 => 142,  457 => 141,  447 => 138,  442 => 136,  431 => 132,  426 => 130,  423 => 129,  412 => 125,  407 => 123,  404 => 122,  402 => 121,  392 => 118,  387 => 116,  374 => 110,  366 => 109,  360 => 106,  347 => 102,  342 => 100,  339 => 99,  328 => 93,  323 => 90,  310 => 87,  299 => 86,  295 => 85,  289 => 84,  284 => 82,  279 => 80,  276 => 79,  274 => 78,  269 => 75,  246 => 72,  237 => 71,  232 => 70,  230 => 69,  226 => 67,  207 => 65,  203 => 64,  197 => 61,  189 => 59,  185 => 58,  181 => 56,  164 => 54,  160 => 53,  155 => 51,  152 => 50,  150 => 49,  147 => 48,  143 => 47,  139 => 45,  126 => 43,  122 => 42,  116 => 39,  111 => 36,  105 => 35,  99 => 34,  94 => 32,  89 => 30,  83 => 27,  79 => 25,  71 => 21,  69 => 20,  63 => 16,  52 => 14,  48 => 13,  42 => 10,  35 => 8,  31 => 7,  23 => 2,  19 => 1,);
    }
}
/* {{ header }}*/
/* {{ column_left }}*/
/* <div id="content">*/
/* 	<div class="page-header">*/
/* 		<div class="container-fluid">*/
/* 			<div class="pull-right">*/
/* 				<button type="submit" form="form-module" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/* 				<a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a>*/
/* 			</div>*/
/* 			<h1>{{ heading_title }}</h1>*/
/* 			<br />*/
/* 			<ul class="breadcrumb">*/
/* 				{% for breadcrumb in breadcrumbs %}*/
/* 					<li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="container-fluid">*/
/* 		{% if error_warning %}*/
/* 			<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/* 				<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 			</div>*/
/* 		{% endif %}*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 				<h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/* 			</div>*/
/* 			<div class="panel-body">*/
/* 				<form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-module" class="form-horizontal">*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/* 						<div class="col-sm-10">*/
/* 							<input type="text" name="name" value="{{ name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/* 							{% if error_name %}<div class="text-danger">{{ error_name }}</div>{% endif %}*/
/* 						</div>*/
/* 					</div> */
/* 					<div class="form-group" id="main-div">*/
/* 						<label class="col-sm-2 control-label" for="input-name">{{ entry_store }}</label>*/
/* 						<div class="col-sm-10">*/
/* 							<ul class="nav nav-tabs">*/
/* 								{% for store in stores %}*/
/* 									<li id="tab-{{ store.store_id }}"><a href="#store-{{ store.store_id }}" data-toggle="tab">{{ store.name }}</a></li>*/
/* 								{% endfor %}*/
/* 							</ul>*/
/* 							<div class="tab-content">*/
/* 								{% for store in stores %}*/
/* 								*/
/* 									{% set store_id = store.store_id %}*/
/* 								*/
/* 									<div id="store-{{ store.store_id }}" class="tab-pane">*/
/* 										<ul class="nav nav-tabs">*/
/* 											{% for key, tab_name in tab_names[store_id] %}*/
/* 												<li id="tab-{{ store_id }}-{{ key }}"><a href="#{{ store_id }}-{{ key }}" data-toggle="tab">{{ tab_name }}</a></li>*/
/* 											{% endfor %}*/
/* 										</ul>*/
/* 										<div class="tab-content">*/
/* 											{% for key, tab_name in tab_names[store_id] %}*/
/* 												<div id="{{ store_id }}-{{ key }}" class="tab-pane">*/
/* 													<div class="form-group">*/
/* 														<label class="col-sm-2 control-label" for="input-product">{{ entry_title }}</label>*/
/* 														<div class="col-sm-10">*/
/* 															<ul class="nav nav-tabs">*/
/* 																{% for lang in languages %}*/
/* 																	<li><a href="#{{ store_id }}-{{ key }}-title-{{ lang.language_id }}" data-toggle="tab" style="padding:2px 10px 5px"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 																{% endfor %}*/
/* 															</ul>*/
/* 															<div class="tab-content">*/
/* 															{% set names = ['latest', 'special', 'bestseller', 'popular', 'featured'] %}*/
/* 																{% for lang in languages %}*/
/* 																	<div id="{{ store_id }}-{{ key }}-title-{{ lang.language_id }}" class="tab-pane">*/
/* 																		<input type="text" name="set[{{ store_id }}][{{ key }}][title][{{ lang.language_id }}]" value="{{ module[store_id][key].title[lang.language_id] }}" {% if lang.code == lang_code and (key not in names) %}oninput="setTabName({{ store_id }}, '{{ key }}', this)"{% endif %} placeholder="Пример: Каталог" class="form-control" />*/
/* 																	</div>*/
/* 																{% endfor %}*/
/* 															</div>*/
/* 														</div>*/
/* 													</div>*/
/* 													{% if key != 'latest' and key != 'special' and key != 'bestseller' and key != 'popular' %}*/
/* 														<div class="form-group">*/
/* 															<label class="col-sm-2 control-label" for="input-product">{{ entry_product }}</label>*/
/* 															<div class="col-sm-10">*/
/* 																<input type="text" name="product_name" value="" placeholder="{{ entry_product }}" id="input-product" class="form-control" />*/
/* 																<br />*/
/* 																<div id="{{ store_id }}-{{ key }}-product" class="well well-sm" style="height:150px; overflow: auto;">*/
/* 																	{% for product in module[store_id][key].products %}*/
/* 																		<div id="{{ store_id }}-{{ key }}-product{{ product.product_id }}"><i class="fa fa-minus-circle"></i> {{ product.name }}*/
/* 																			<input type="hidden" name="set[{{ store_id }}][{{ key }}][product][]" value="{{ product.product_id }}" />*/
/* 																		</div>*/
/* 																	{% endfor %}*/
/* 																</div>*/
/* 																<script>*/
/* 																	$(document).ready(function() {*/
/* 																		getProduct({{ store_id }}, '{{ key }}');*/
/* 																	});*/
/* 																</script>*/
/* 															</div>*/
/* 														</div>*/
/* 													{% endif %}*/
/* 													<div class="form-group">*/
/* 														<label class="col-sm-2 control-label" for="input-limit">{{ entry_limit }}</label>*/
/* 														<div class="col-sm-10">*/
/* 															<input type="text" name="set[{{ store_id }}][{{ key }}][limit]" value="{{ module[store_id][key].limit ? module[store_id][key].limit : 5 }}" placeholder="{{ entry_limit }}" id="input-limit" class="form-control" />*/
/* 														</div>*/
/* 													</div>*/
/* 													<div class="form-group">*/
/* 														<label class="col-sm-2 control-label" for="input-limit">{{ entry_thumb }}</label>*/
/* 														<div class="col-sm-10">*/
/* 															<div class="input-group">*/
/* 																<input type="text" name="set[{{ store_id }}][{{ key }}][thumb_width]" value="{{ module[store_id][key].thumb_width ? module[store_id][key].thumb_width : 220 }}" class="form-control" style="width:50% !important; text-align:center;">*/
/* 																<input type="text" name="set[{{ store_id }}][{{ key }}][thumb_height]" value="{{ module[store_id][key].thumb_height ? module[store_id][key].thumb_height : 200 }}" class="form-control" style="width:50% !important; text-align:center;">*/
/* 																<span class="input-group-addon">пикс.</span>*/
/* 															</div>*/
/* 														</div>*/
/* 													</div>*/
/* 													<div class="form-group">*/
/* 														<label class="col-sm-2 control-label" for="input-limit">{{ entry_type }}</label>*/
/* 														<div class="col-sm-10">*/
/* 															<label><input type="checkbox" name="set[{{ store_id }}][{{ key }}][type]" value="1" {{ module[store_id][key].type ? 'checked="checked"' }} /><span></span></label>*/
/* 														</div>*/
/* 													</div>*/
/* 													{% if key == 'latest' or key == 'special' or key == 'bestseller' or key == 'popular' %}*/
/* 													<div class="form-group">*/
/* 														<label class="col-sm-2 control-label" for="input-limit">{{ entry_qty }}</label>*/
/* 														<div class="col-sm-10">*/
/* 															<label><input type="checkbox" name="set[{{ store_id }}][{{ key }}][qty]" value="1" {{ module[store_id][key].qty ? 'checked="checked"' }} /><span></span></label>*/
/* 														</div>*/
/* 													</div>*/
/* 													{% endif %}*/
/* 													<div class="form-group">*/
/* 														<label class="col-sm-2 control-label" for="input-limit">{{ entry_sort }}</label>*/
/* 														<div class="col-sm-10">*/
/* 															<input type="text" name="set[{{ store_id }}][{{ key }}][sort_order]" value="{{ module[store_id][key].sort_order ? module[store_id][key].sort_order : 1 }}" class="form-control">*/
/* 														</div>*/
/* 													</div>*/
/* 													<div class="form-group">*/
/* 														<label class="col-sm-2 control-label" for="input-status">{{ entry_status_tab }}</label>*/
/* 														<div class="col-sm-10">*/
/* 															<label><input type="checkbox" name="set[{{ store_id }}][{{ key }}][status]" value="1" {{ module[store_id][key].status ? 'checked="checked"' }} /><span></span></label>*/
/* 														</div>*/
/* 													</div>*/
/* 													{% if key != 'latest' and key != 'special' and key != 'bestseller' and key != 'featured' and key != 'popular' %}*/
/* 														<div class="form-group">*/
/* 															<label class="col-sm-2 control-label"></label>*/
/* 															<div class="col-sm-10">*/
/* 																<a class="btn btn-xs btn-danger" onclick="removeTab({{ store_id }}, '{{ key }}')">{{ button_remove_tab }}</a>*/
/* 															</div>*/
/* 														</div>*/
/* 													{% endif %}*/
/* 													<input type="hidden" name="tabs[{{ store_id }}][{{ key }}]title" value="{{ tab_name }}" class="tab-name" />										*/
/* 												</div>*/
/* 											{% endfor %}*/
/* 											<div class="form-group" style="margin:-10px 0 -5px">*/
/* 											<hr style="margin:-10px 0 15px" />*/
/* 												<label class="col-sm-2 control-label">*/
/* 													<a class="btn btn-xs btn-success" onclick="addNewTab({{ store_id }});">{{ button_add_tab }}</a>*/
/* 												</label>*/
/* 												<div class="col-sm-10"></div>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/* 						<div class="col-sm-10">*/
/* 							<select name="status" class="form-control">*/
/* 								<option value="1" {{ status ? 'selected="selected"' }}>{{ text_enabled }}</option>*/
/* 								<option value="0" {{ status == 0 ? 'selected="selected"' }}>{{ text_disabled }}</option>*/
/* 							</select>*/
/* 						</div>*/
/* 					</div>*/
/* 				</form>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<style>*/
/* 		.col-sm-10 .col-sm-2.control-label {padding-top:0}*/
/* 		.tab-pane .form-group {margin:0 -15px 0 0}*/
/* 	</style>*/
/* 	<script>*/
/* 		$(document).ready(function() {*/
/* 			$('.nav-tabs').each(function() {*/
/* 				$(this).find('li:first a').tab('show');*/
/* 			});*/
/* 		});*/
/* 		*/
/* 		function addNewTab(store_id) {*/
/* 			var block = $('html body').find('#store-'+store_id);*/
/* 			*/
/* 			var d = [];*/
/* 			*/
/* 			block.find('> .nav li').each(function(){*/
/* 				d.push(Number($(this).attr('id').replace(/\D+/g,"")));*/
/* 			});*/
/* 			*/
/* 			var t = Math.max.apply(Math, d), items = t+1, tab_name = 'additional'+items;*/
/* 			*/
/* 			block.find('> .nav > .active, > .tab-content > .active').removeClass('active');*/
/* 			*/
/* 			block.find('> .nav').append('<li id="tab-'+store_id+'-'+tab_name+'" class="active"><a href="#'+store_id+'-'+tab_name+'" class="additional" data-toggle="tab">{{ entry_tab_additional }}</a></li>')*/
/* */
/* 			html = '<div id="'+store_id+'-'+tab_name+'" class="tab-pane active">';*/
/* 			html += '<div class="form-group">';*/
/* 			html += '<label class="col-sm-2 control-label" for="input-product">{{ entry_title }}</label>';*/
/* 			html += '<div class="col-sm-10">';*/
/* 			html += '<ul class="nav nav-tabs">';*/
/* 			{% for lang in languages %}*/
/* 			html += '<li><a href="#'+store_id+'-'+tab_name+'-title-{{ lang.language_id }}" data-toggle="tab" style="padding:2px 10px 5px"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>';*/
/* 			{% endfor %}*/
/* 			html += '</ul>';*/
/* 			html += '<div class="tab-content">';*/
/* 			{% for lang in languages %}*/
/* 			html += '<div id="'+store_id+'-'+tab_name+'-title-{{ lang.language_id }}" class="tab-pane">';*/
/* 			html += '<input type="text" name="set['+store_id+']['+tab_name+'][title][{{ lang.language_id }}]" value="" {% if lang.code == lang_code %}oninput="setTabName('+store_id+', \''+tab_name+'\', this)"{% endif %} placeholder="Пример: Каталог" class="form-control" />';*/
/* 			html += '</div>';*/
/* 			{% endfor %}*/
/* 			html += '</div>';*/
/* 			html += '</div>';*/
/* 			html += '</div>';*/
/* 			*/
/* 			html += '<div class="form-group">';*/
/* 			html += '<label class="col-sm-2 control-label" for="input-product">{{ entry_product }}</label>';*/
/* 			html += '<div class="col-sm-10">';*/
/* 			html += '<input type="text" name="product_name" value="" placeholder="{{ entry_product }}" id="input-product" class="form-control" />';*/
/* 			html += '<br />';*/
/* 			html += '<div id="'+store_id+'-'+tab_name+'-product" class="well well-sm" style="height: 150px; overflow: auto;">';*/
/* 			html += '</div>';*/
/* 			html += '<script>';*/
/* 			html += '$(document).ready(function() {';*/
/* 			html += 'getProduct('+store_id+', \''+tab_name+'\');';*/
/* 			html += '});';*/
/* 			html += '<\/script>';*/
/* 			html += '</div>';*/
/* 			html += '</div>';*/
/* 			*/
/* 			html += '<div class="form-group">';*/
/* 			html += '<label class="col-sm-2 control-label" for="input-limit">{{ entry_limit }}</label>';*/
/* 			html += '<div class="col-sm-10">';*/
/* 			html += '<input type="text" name="set['+store_id+']['+tab_name+'][limit]" value="5" placeholder="{{ entry_limit }}" id="input-limit" class="form-control" />';*/
/* 			html += '</div>';*/
/* 			html += '</div>';*/
/* 			*/
/* 			html += '<div class="form-group">';*/
/* 			html += '<label class="col-sm-2 control-label" for="input-limit">{{ entry_thumb }}</label>';*/
/* 			html += '<div class="col-sm-10">';*/
/* 			html += '<div class="input-group">';*/
/* 			html += '<input type="text" name="set['+store_id+']['+tab_name+'][thumb_width]" value="220" class="form-control" style="width:50% !important; text-align:center;">';*/
/* 			html += '<input type="text" name="set['+store_id+']['+tab_name+'][thumb_height]" value="200" class="form-control" style="width:50% !important; text-align:center;">';*/
/* 			html += '<span class="input-group-addon">пикс.</span>';*/
/* 			html += '</div>';*/
/* 			html += '</div>';*/
/* 			html += '</div>';*/
/* 			*/
/* 			html += '<div class="form-group">';*/
/* 			html += '<label class="col-sm-2 control-label" for="input-limit">{{ entry_type }}</label>';*/
/* 			html += '<div class="col-sm-10">';*/
/* 			html += '<label><input type="checkbox" name="set['+store_id+']['+tab_name+'][type]" value="1" /><span></span></label>';*/
/* 			html += '</div>';*/
/* 			html += '</div>';*/
/* 			*/
/* 			html += '<div class="form-group">';*/
/* 			html += '<label class="col-sm-2 control-label" for="input-limit">{{ entry_sort }}</label>';*/
/* 			html += '<div class="col-sm-10">';*/
/* 			html += '<input type="text" name="set['+store_id+']['+tab_name+'][sort_order]" value="1" class="form-control">';*/
/* 			html += '</div>';*/
/* 			html += '</div>';*/
/* 			*/
/* 			html += '<div class="form-group">';*/
/* 			html += '<label class="col-sm-2 control-label" for="input-status">{{ entry_status_tab }}</label>';*/
/* 			html += '<div class="col-sm-10">';*/
/* 			html += '<label><input type="checkbox" name="set['+store_id+']['+tab_name+'][status]" value="1" /><span></span></label>';*/
/* 			html += '</div>';*/
/* 			html += '</div>';*/
/* 			*/
/* 			html += '<div class="form-group">';*/
/* 			html += '<label class="col-sm-2 control-label"></label>';*/
/* 			html += '<div class="col-sm-10">';*/
/* 			html += '<a class="btn btn-xs btn-danger" onclick="removeTab('+store_id+', \''+tab_name+'\')">{{ button_remove_tab }}</a>';*/
/* 			html += '</div>';*/
/* 			html += '</div>';*/
/* 			html += '<input type="hidden" name="tabs['+store_id+']['+tab_name+']title" value="" />';*/
/* 			html += '</div>';*/
/* 			*/
/* 			block.find('> .tab-content > .form-group').before(html);*/
/* 			*/
/* 			block.find(' > .tab-content > .active').each(function() {*/
/* 				$(this).find('li:first a').tab('show');*/
/* 			});*/
/* 		}*/
/* 		*/
/* 		function setTabName(store_id, tab_name, data) {*/
/* 		*/
/* 			var this_text = $(data).val(), tab_li = $('#tab-'+store_id+'-'+tab_name), tab_div = $('#'+store_id+'-'+tab_name);*/
/* 			*/
/* 			tab_li.find('a').text(this_text)*/
/* 			tab_div.find('input[type=\'hidden\'].tab-name').val(this_text);*/
/* 		}*/
/* 		*/
/* 		function removeTab(store_id, tab_name) {*/
/* 			var tab_li = $('#tab-'+store_id+'-'+tab_name), tab_div = $('#'+store_id+'-'+tab_name);*/
/* 			*/
/* 			tab_li.prev().find('a').tab('show');*/
/* 			*/
/* 			$('html, body').animate({scrollTop: tab_li.prev().offset().top-100}, 400);*/
/* 			*/
/* 			tab_li.remove();*/
/* 			tab_div.remove();*/
/* 		}*/
/* 		*/
/* 		function getProduct(store_id, tab_name) {*/
/* 		*/
/* 			var module_name = store_id+'-'+tab_name;*/
/* 		*/
/* 			var new_block = $('#'+module_name), new_input = new_block.find('input[name=\'product_name\']');*/
/* 		*/
/* 			new_input.autocomplete({*/
/* 				source: function(request, response) {*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_name='+encodeURIComponent(request),*/
/* 						dataType: 'json',*/
/* 						success: function(json) {*/
/* 							response($.map(json, function(item) {*/
/* 								return {label: item['name'], value: item['product_id']}*/
/* 							}));*/
/* 						}*/
/* 					});*/
/* 				},*/
/* 				select: function(item) {*/
/* 					new_input.val('');*/
/* 		*/
/* 					$('#'+module_name+'-product'+item['value']).remove();*/
/* 		*/
/* 					$('#'+module_name+'-product').append('<div id="'+module_name+'-product'+item['value']+'"><i class="fa fa-minus-circle"></i>'+item['label']+'<input type="hidden" name="set['+store_id+']['+tab_name+'][product][]" value="'+item['value']+'" /></div>');	*/
/* 				}*/
/* 			});*/
/* 	*/
/* 			$('#'+module_name+'-product').delegate('.fa-minus-circle', 'click', function() {*/
/* 				$(this).parent().remove();*/
/* 			});*/
/* 		}*/
/* 	</script>*/
/* </div>*/
/* {{ footer }}*/
/* */
