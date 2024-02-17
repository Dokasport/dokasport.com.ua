<?php

/* extension/module/uni_category_wall.twig */
class __TwigTemplate_8e8955c265dc72a1af651f67112d70c19c6014f7c621e843c887880c1cde8660 extends Twig_Template
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
            echo "\t\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
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
\t\t\t\t\t<div class=\"form-group\" style=\"padding-top:0;\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 32
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
        // line 34
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 38
        echo (isset($context["entry_module_title"]) ? $context["entry_module_title"] : null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 42
            echo "\t\t\t\t\t\t\t\t\t<li><a href=\"#module-title-";
            echo $this->getAttribute($context["lang"], "language_id", array());
            echo "\" data-toggle=\"tab\" style=\"padding:2px 10px 5px\"><img src=\"language/";
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
        // line 44
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 47
            echo "\t\t\t\t\t\t\t\t\t<div id=\"module-title-";
            echo $this->getAttribute($context["lang"], "language_id", array());
            echo "\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"title[";
            // line 48
            echo $this->getAttribute($context["lang"], "language_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute((isset($context["title"]) ? $context["title"] : null), $this->getAttribute($context["lang"], "language_id", array()), array(), "array");
            echo "\" placeholder=\"Пример: Каталог\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 55
        echo (isset($context["entry_category_list"]) ? $context["entry_category_list"] : null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 59
            echo "\t\t\t\t\t\t\t\t\t<li ";
            echo ((($this->getAttribute($context["store"], "store_id", array()) == 0)) ? ("class=\"active\"") : (""));
            echo ">
\t\t\t\t\t\t\t\t\t\t<a href=\"#store-";
            // line 60
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" data-toggle=\"tab\">";
            echo $this->getAttribute($context["store"], "name", array());
            echo "</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 66
            echo "\t\t\t\t\t\t\t\t\t<div id=\"store-";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" class=\"tab-pane ";
            echo ((($this->getAttribute($context["store"], "store_id", array()) == 0)) ? ("active") : (""));
            echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height:400px;overflow:auto;\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"));
            foreach ($context['_seq'] as $context["key"] => $context["category"]) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"categories[";
                // line 69
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "][";
                echo $this->getAttribute($context["category"], "category_id", array());
                echo "]\" value=\"";
                echo $this->getAttribute($context["category"], "category_id", array());
                echo "\" ";
                echo ((twig_in_filter($this->getAttribute($context["category"], "category_id", array()), twig_get_array_keys_filter($this->getAttribute((isset($context["categories_selected"]) ? $context["categories_selected"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array")))) ? ("checked=\"checked\"") : (""));
                echo " /> <span>";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</span></label><br />
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "childs", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<label><input type=\"checkbox\" name=\"categories[";
                    // line 71
                    echo $this->getAttribute($context["store"], "store_id", array());
                    echo "][";
                    echo $this->getAttribute($context["category"], "category_id", array());
                    echo "][]\" value=\"";
                    echo $this->getAttribute($context["child"], "child_id", array());
                    echo "\" ";
                    echo ((twig_in_filter($this->getAttribute($context["child"], "child_id", array()), $this->getAttribute($this->getAttribute((isset($context["categories_selected"]) ? $context["categories_selected"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["category"], "category_id", array()), array(), "array"))) ? ("checked=\"checked\"") : (""));
                    echo " /> <span style=\"font-weight:400\">-- ";
                    echo $this->getAttribute($context["child"], "name", array());
                    echo "</span></label><br />
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"margin:0 0 5px\"></div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 82
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<div class=\"input-group\" style=\"width:250px\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"image_width\" value=\"";
        // line 85
        echo (((isset($context["image_width"]) ? $context["image_width"] : null)) ? ((isset($context["image_width"]) ? $context["image_width"] : null)) : (320));
        echo "\" class=\"form-control\" style=\"width:50% !important; text-align:center;\" />
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"image_height\" value=\"";
        // line 86
        echo (((isset($context["image_height"]) ? $context["image_height"] : null)) ? ((isset($context["image_height"]) ? $context["image_height"] : null)) : (240));
        echo "\" class=\"form-control\" style=\"width:50% !important; text-align:center;\" />
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">пикс.</span>
\t\t\t\t\t\t\t\t";
        // line 88
        if ((isset($context["error_image"]) ? $context["error_image"] : null)) {
            echo "<span class=\"error\">";
            echo (isset($context["error_image"]) ? $context["error_image"] : null);
            echo "</span>";
        }
        // line 89
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 93
        echo (isset($context["entry_show_column"]) ? $context["entry_show_column"] : null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t";
        // line 95
        $context["columnsHD"] = array(6 => 2, 4 => 3, 3 => 4, 2 => 6);
        // line 96
        echo "\t\t\t\t\t\t\t";
        $context["columnsFHD"] = array(5 => 4, 4 => 5, "3-1" => 6, "2-1" => 8, 2 => 10);
        // line 97
        echo "\t\t\t\t\t\t\t<div style=\"display:table-cell;padding:5px 5px 0 0\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">Десктоп FullHD:</span>
\t\t\t\t\t\t\t\t\t<select name=\"columns[]\" class=\"form-control\" style=\"width:70px;\">
\t\t\t\t\t\t\t\t\t";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["columnsFHD"]) ? $context["columnsFHD"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["column"]) {
            // line 102
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"col-xxl-";
            echo $context["key"];
            echo "\" ";
            echo ((twig_in_filter(("col-xxl-" . $context["key"]), (isset($context["columns"]) ? $context["columns"] : null))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo $context["column"];
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div style=\"display:table-cell;padding:5px 5px 0 0\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">Десктоп:</span>
\t\t\t\t\t\t\t\t\t<select name=\"columns[]\" class=\"form-control\" style=\"width:55px;\">
\t\t\t\t\t\t\t\t\t";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["columnsHD"]) ? $context["columnsHD"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["column"]) {
            // line 112
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"col-lg-";
            echo $context["key"];
            echo "\" ";
            echo ((twig_in_filter(("col-lg-" . $context["key"]), (isset($context["columns"]) ? $context["columns"] : null))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo $context["column"];
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div style=\"display:table-cell;padding:5px 5px 0 0\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">Ноутбук:</span>
\t\t\t\t\t\t\t\t\t<select name=\"columns[]\" class=\"form-control\" style=\"width:55px;\">
\t\t\t\t\t\t\t\t\t";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["columnsHD"]) ? $context["columnsHD"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["column"]) {
            // line 122
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"col-md-";
            echo $context["key"];
            echo "\" ";
            echo ((twig_in_filter(("col-md-" . $context["key"]), (isset($context["columns"]) ? $context["columns"] : null))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo $context["column"];
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div style=\"display:table-cell;padding:5px 5px 0 0\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">Планшет:</span>
\t\t\t\t\t\t\t\t\t<select name=\"columns[]\" class=\"form-control\" style=\"width:55px;\">
\t\t\t\t\t\t\t\t\t";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["columnsHD"]) ? $context["columnsHD"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["column"]) {
            // line 132
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"col-sm-";
            echo $context["key"];
            echo "\" ";
            echo ((twig_in_filter(("col-sm-" . $context["key"]), (isset($context["columns"]) ? $context["columns"] : null))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo $context["column"];
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div style=\"display:table-cell;padding:5px 5px 0 0\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\">Смартфон:</span>
\t\t\t\t\t\t\t\t\t<select name=\"columns[]\" class=\"form-control\" style=\"width:55px;\">
\t\t\t\t\t\t\t\t\t";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["columnsHD"]) ? $context["columnsHD"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["column"]) {
            // line 142
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"col-xs-";
            echo $context["key"];
            echo "\" ";
            echo ((twig_in_filter(("col-xs-" . $context["key"]), (isset($context["columns"]) ? $context["columns"] : null))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo $context["column"];
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 150
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo " </label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 153
        echo (((isset($context["status"]) ? $context["status"] : null)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"0\" ";
        // line 154
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
</div>
<script>
\t\$(document).ready(function() {
\t\t\$('.nav-tabs').each(function() {
\t\t\t\$(this).find('li:first a').tab('show');
\t\t});
\t});
</script>
";
        // line 170
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/uni_category_wall.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 170,  448 => 154,  442 => 153,  436 => 150,  428 => 144,  415 => 142,  411 => 141,  402 => 134,  389 => 132,  385 => 131,  376 => 124,  363 => 122,  359 => 121,  350 => 114,  337 => 112,  333 => 111,  324 => 104,  311 => 102,  307 => 101,  301 => 97,  298 => 96,  296 => 95,  291 => 93,  285 => 89,  279 => 88,  274 => 86,  270 => 85,  264 => 82,  258 => 78,  250 => 75,  243 => 73,  227 => 71,  221 => 70,  209 => 69,  203 => 68,  195 => 66,  191 => 65,  187 => 63,  176 => 60,  171 => 59,  167 => 58,  161 => 55,  155 => 51,  144 => 48,  139 => 47,  135 => 46,  131 => 44,  116 => 42,  112 => 41,  106 => 38,  99 => 34,  94 => 32,  89 => 30,  83 => 27,  79 => 25,  71 => 21,  69 => 20,  63 => 16,  52 => 14,  48 => 13,  42 => 10,  35 => 8,  31 => 7,  23 => 2,  19 => 1,);
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
/* 			<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/* 				<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 			</div>*/
/* 		{% endif %}*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 				<h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/* 			</div>*/
/* 			<div class="panel-body">*/
/* 				<form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-module" class="form-horizontal">*/
/* 					<div class="form-group" style="padding-top:0;">*/
/* 						<label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/* 						<div class="col-sm-10">*/
/* 							<input type="text" name="name" value="{{ name }}" class="form-control" />*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-2 control-label">{{ entry_module_title }}</label>*/
/* 						<div class="col-sm-10">*/
/* 							<ul class="nav nav-tabs">*/
/* 								{% for lang in languages %}*/
/* 									<li><a href="#module-title-{{ lang.language_id }}" data-toggle="tab" style="padding:2px 10px 5px"><img src="language/{{ lang.code }}/{{ lang.code }}.png" title="{{ lang.name }}" /></a></li>*/
/* 								{% endfor %}*/
/* 							</ul>*/
/* 							<div class="tab-content">*/
/* 								{% for lang in languages %}*/
/* 									<div id="module-title-{{ lang.language_id }}" class="tab-pane">*/
/* 										<input type="text" name="title[{{ lang.language_id }}]" value="{{ title[lang.language_id] }}" placeholder="Пример: Каталог" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-2 control-label" for="input-name">{{ entry_category_list }}</label>*/
/* 						<div class="col-sm-10">*/
/* 							<ul class="nav nav-tabs">*/
/* 								{% for store in stores %}*/
/* 									<li {{ store.store_id == 0 ? 'class="active"' }}>*/
/* 										<a href="#store-{{ store.store_id }}" data-toggle="tab">{{ store.name }}</a>*/
/* 									</li>*/
/* 								{% endfor %}*/
/* 							</ul>*/
/* 							<div class="tab-content">*/
/* 								{% for store in stores %}*/
/* 									<div id="store-{{ store.store_id }}" class="tab-pane {{ store.store_id == 0 ? 'active' }}">*/
/* 										<div class="well well-sm" style="height:400px;overflow:auto;">*/
/* 											{% for key, category in categories[store.store_id] %} */
/* 												<label><input type="checkbox" name="categories[{{ store.store_id }}][{{ category.category_id }}]" value="{{ category.category_id }}" {{ category.category_id in categories_selected[store.store_id]|keys ? 'checked="checked"' }} /> <span>{{ category.name }}</span></label><br />*/
/* 												{% for child in category.childs %} */
/* 													<label><input type="checkbox" name="categories[{{ store.store_id }}][{{ category.category_id }}][]" value="{{ child.child_id }}" {{ child.child_id in categories_selected[store.store_id][category.category_id] ? 'checked="checked"' }} /> <span style="font-weight:400">-- {{ child.name }}</span></label><br />*/
/* 												{% endfor %}*/
/* 												<div style="margin:0 0 5px"></div>*/
/* 											{% endfor %}*/
/* 										</div>*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-2 control-label">{{ entry_image }}</label>*/
/* 						<div class="col-sm-10">*/
/* 							<div class="input-group" style="width:250px">*/
/* 								<input type="text" name="image_width" value="{{ image_width ? image_width : 320 }}" class="form-control" style="width:50% !important; text-align:center;" />*/
/* 								<input type="text" name="image_height" value="{{ image_height ? image_height : 240 }}" class="form-control" style="width:50% !important; text-align:center;" />*/
/* 								<span class="input-group-addon">пикс.</span>*/
/* 								{% if error_image %}<span class="error">{{ error_image }}</span>{% endif %}*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-2 control-label" for="input-name">{{ entry_show_column }}</label>*/
/* 						<div class="col-sm-10">*/
/* 							{% set columnsHD = {6:2, 4:3, 3:4, 2:6} %}*/
/* 							{% set columnsFHD = {5:4, 4:5, '3-1':6, '2-1':8, 2:10} %}*/
/* 							<div style="display:table-cell;padding:5px 5px 0 0">*/
/* 								<div class="input-group">*/
/* 									<span class="input-group-addon">Десктоп FullHD:</span>*/
/* 									<select name="columns[]" class="form-control" style="width:70px;">*/
/* 									{% for key, column in columnsFHD %}*/
/* 										<option value="col-xxl-{{ key }}" {{ 'col-xxl-' ~ key in columns ? 'selected="selected"' }}>{{ column }}</option>*/
/* 									{% endfor %}*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div style="display:table-cell;padding:5px 5px 0 0">*/
/* 								<div class="input-group">*/
/* 									<span class="input-group-addon">Десктоп:</span>*/
/* 									<select name="columns[]" class="form-control" style="width:55px;">*/
/* 									{% for key, column in columnsHD %}*/
/* 										<option value="col-lg-{{ key }}" {{ 'col-lg-' ~ key in columns ? 'selected="selected"' }}>{{ column }}</option>*/
/* 									{% endfor %}*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div style="display:table-cell;padding:5px 5px 0 0">*/
/* 								<div class="input-group">*/
/* 									<span class="input-group-addon">Ноутбук:</span>*/
/* 									<select name="columns[]" class="form-control" style="width:55px;">*/
/* 									{% for key, column in columnsHD %}*/
/* 										<option value="col-md-{{ key }}" {{ 'col-md-' ~ key in columns ? 'selected="selected"' }}>{{ column }}</option>*/
/* 									{% endfor %}*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div style="display:table-cell;padding:5px 5px 0 0">*/
/* 								<div class="input-group">*/
/* 									<span class="input-group-addon">Планшет:</span>*/
/* 									<select name="columns[]" class="form-control" style="width:55px;">*/
/* 									{% for key, column in columnsHD %}*/
/* 										<option value="col-sm-{{ key }}" {{ 'col-sm-' ~ key in columns ? 'selected="selected"' }}>{{ column }}</option>*/
/* 									{% endfor %}*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div style="display:table-cell;padding:5px 5px 0 0">*/
/* 								<div class="input-group">*/
/* 									<span class="input-group-addon">Смартфон:</span>*/
/* 									<select name="columns[]" class="form-control" style="width:55px;">*/
/* 									{% for key, column in columnsHD %}*/
/* 										<option value="col-xs-{{ key }}" {{ 'col-xs-' ~ key in columns ? 'selected="selected"' }}>{{ column }}</option>*/
/* 									{% endfor %}*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-2 control-label" for="input-status">{{ entry_status }} </label>*/
/* 						<div class="col-sm-10">*/
/* 							<select name="status" id="input-status" class="form-control">*/
/* 								<option value="1" {{ status ? 'selected="selected"' }}>{{ text_enabled }}</option>*/
/* 								<option value="0" {{ status == 0 ? 'selected="selected"' }}>{{ text_disabled }}</option>*/
/* 							</select>*/
/* 						</div>*/
/* 					</div>*/
/* 				</form>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <script>*/
/* 	$(document).ready(function() {*/
/* 		$('.nav-tabs').each(function() {*/
/* 			$(this).find('li:first a').tab('show');*/
/* 		});*/
/* 	});*/
/* </script>*/
/* {{ footer }}*/
