<?php

/* extension/module/uni_request_list.twig */
class __TwigTemplate_79670fc658787995be97b21e267e965dc47c0038f67632a7bce731465da0ae99 extends Twig_Template
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
\t\t\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-request').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
\t\t\t\t<a href=\"";
        // line 8
        echo (isset($context["link_settings"]) ? $context["link_settings"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_settings"]) ? $context["button_settings"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-cog\"></i></a>
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
            echo "\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t<i class=\"fa fa-exclamation-circle\"></i> ";
            // line 21
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
\t\t";
        }
        // line 24
        echo "\t\t";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 25
            echo "\t\t\t<div class=\"alert alert-success\">
\t\t\t\t<i class=\"fa fa-check-circle\"></i> ";
            // line 26
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
\t\t";
        }
        // line 29
        echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 31
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<div class=\"well well-sm\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-type\">";
        // line 38
        echo (isset($context["entry_type"]) ? $context["entry_type"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<select name=\"filter_type\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 42
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
            echo $this->getAttribute($context["type"], "type", array());
            echo "\" ";
            echo ((((isset($context["filter_type"]) ? $context["filter_type"] : null) == $this->getAttribute($context["type"], "type", array()))) ? ("selected=\"selected\"") : (""));
            echo ">";
            echo $this->getAttribute($context["type"], "type", array());
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-name\">";
        // line 49
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_name\" value=\"";
        // line 50
        echo (isset($context["filter_name"]) ? $context["filter_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-date-added\">";
        // line 55
        echo (isset($context["entry_date_added"]) ? $context["entry_date_added"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"input-group date\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 57
        echo (isset($context["filter_date_added"]) ? $context["filter_date_added"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_added"]) ? $context["entry_date_added"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input-status\">";
        // line 66
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t<select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 69
        echo ((((isset($context["filter_status"]) ? $context["filter_status"] : null) == 1)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_status_1"]) ? $context["text_status_1"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"2\" ";
        // line 70
        echo ((((isset($context["filter_status"]) ? $context["filter_status"] : null) == 2)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_status_2"]) ? $context["text_status_2"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"3\" ";
        // line 71
        echo ((((isset($context["filter_status"]) ? $context["filter_status"] : null) == 3)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_status_3"]) ? $context["text_status_3"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"button-filter\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-search\"></i> ";
        // line 76
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<form action=\"";
        // line 80
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-request\">
\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 86
        echo (isset($context["sort_type"]) ? $context["sort_type"] : null);
        echo "\" class=\"";
        echo ((((isset($context["sort"]) ? $context["sort"] : null) == "type")) ? (twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null))) : (""));
        echo "\">";
        echo (isset($context["column_type"]) ? $context["column_type"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 89
        echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
        echo "\" class=\"";
        echo ((((isset($context["sort"]) ? $context["sort"] : null) == "name")) ? (twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null))) : (""));
        echo "\">";
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"min-width:130px\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 92
        echo (isset($context["sort_phone"]) ? $context["sort_phone"] : null);
        echo "\" class=\"";
        echo ((((isset($context["sort"]) ? $context["sort"] : null) == "phone")) ? (twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null))) : (""));
        echo "\">";
        echo (isset($context["column_phone"]) ? $context["column_phone"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 95
        echo (isset($context["sort_mail"]) ? $context["sort_mail"] : null);
        echo "\" class=\"";
        echo ((((isset($context["sort"]) ? $context["sort"] : null) == "mail")) ? (twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null))) : (""));
        echo "\">";
        echo (isset($context["column_mail"]) ? $context["column_mail"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 97
        echo (isset($context["column_comment"]) ? $context["column_comment"] : null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 98
        echo (isset($context["column_admin_comment"]) ? $context["column_admin_comment"] : null);
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 100
        echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
        echo "\" class=\"";
        echo ((((isset($context["sort"]) ? $context["sort"] : null) == "date_added")) ? (twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null))) : (""));
        echo "\">";
        echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 103
        echo (isset($context["sort_date_modified"]) ? $context["sort_date_modified"] : null);
        echo "\" class=\"";
        echo ((((isset($context["sort"]) ? $context["sort"] : null) == "date_modified")) ? (twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null))) : (""));
        echo "\">";
        echo (isset($context["column_date_modified"]) ? $context["column_date_modified"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 106
        echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
        echo "\" class=\"";
        echo ((((isset($context["sort"]) ? $context["sort"] : null) == "status")) ? (twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null))) : (""));
        echo "\">";
        echo (isset($context["column_status"]) ? $context["column_status"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"max-width:80px;\">";
        // line 108
        echo $this->getAttribute((isset($context["lang"]) ? $context["lang"] : null), "column_request_list", array());
        echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-right\">";
        // line 109
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        // line 111
        if ((isset($context["requests"]) ? $context["requests"] : null)) {
            // line 112
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["requests"]) ? $context["requests"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["request"]) {
                // line 113
                echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 114
                echo $this->getAttribute($context["request"], "request_id", array());
                echo "\" /></td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 115
                echo $this->getAttribute($context["request"], "type", array());
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 116
                echo $this->getAttribute($context["request"], "name", array());
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 117
                echo $this->getAttribute($context["request"], "phone", array());
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\" style=\"max-width:150px;\">";
                // line 118
                echo $this->getAttribute($context["request"], "mail", array());
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 120
                if (($this->getAttribute($context["request"], "product_name", array()) && $this->getAttribute($context["request"], "product_href", array()))) {
                    // line 121
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["request"], "product_href", array());
                    echo "\" style=\"text-decoration:underline;\"target=\"_blank\">";
                    echo $this->getAttribute($context["request"], "product_name", array());
                    echo " <i class=\"fa fa-clone\" aria-hidden=\"true\"></i></a><br />
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 123
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                echo $this->getAttribute($context["request"], "comment", array());
                echo "
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 125
                echo $this->getAttribute($context["request"], "admin_comment", array());
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 126
                echo $this->getAttribute($context["request"], "date_added", array());
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 127
                echo $this->getAttribute($context["request"], "date_modified", array());
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 128
                echo $this->getAttribute($context["request"], "status", array());
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 129
                echo (($this->getAttribute($context["request"], "product_name", array())) ? ($this->getAttribute($context["request"], "request_list", array())) : (""));
                echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 131
                echo $this->getAttribute($context["request"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['request'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "\t\t\t\t\t\t\t";
        } else {
            // line 136
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td class=\"text-center\" colspan=\"12\">";
            // line 137
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        // line 140
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6 text-left\">";
        // line 145
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
\t\t\t\t\t<div class=\"col-sm-6 text-right\">";
        // line 146
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<script type=\"text/javascript\"><!--

\$('.nav-tabs').each(function() {
\t\$(this).find('a:first').tab('show');
});

";
        // line 158
        if (twig_test_empty((isset($context["settings"]) ? $context["settings"] : null))) {
            // line 159
            echo "\t\$('.panel.panel-default').before('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> Обязательно откройте страницу <a href=\"";
            echo (isset($context["link_settings"]) ? $context["link_settings"] : null);
            echo "\" style=\"text-decoration:underline !important\">настроек модуля</a> и сохраните их. <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
";
        }
        // line 161
        echo "
\$('#button-filter').on('click', function() {
  url = 'index.php?route=extension/module/uni_request&user_token=";
        // line 163
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "';

  var filter_type = \$('select[name=\\'filter_type\\']').val();

  if (filter_type) {
    url += '&filter_type=' + encodeURIComponent(filter_type);
  }

  var filter_name = \$('input[name=\\'filter_name\\']').val();

  if (filter_name) {
    url += '&filter_name=' + encodeURIComponent(filter_name);
  }

  var filter_status = \$('select[name=\\'filter_status\\']').val();

  if (filter_status != '*') {
    url += '&filter_status=' + encodeURIComponent(filter_status);
  }

  var filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

  if (filter_date_added) {
    url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
  }

  location = url;
});
//--></script>
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
  pickTime: false
});
//--></script>
";
        // line 197
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/uni_request_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  465 => 197,  428 => 163,  424 => 161,  418 => 159,  416 => 158,  401 => 146,  397 => 145,  390 => 140,  384 => 137,  381 => 136,  378 => 135,  366 => 131,  361 => 129,  357 => 128,  353 => 127,  349 => 126,  345 => 125,  339 => 123,  331 => 121,  329 => 120,  324 => 118,  320 => 117,  316 => 116,  312 => 115,  308 => 114,  305 => 113,  300 => 112,  298 => 111,  293 => 109,  289 => 108,  280 => 106,  270 => 103,  260 => 100,  255 => 98,  251 => 97,  242 => 95,  232 => 92,  222 => 89,  212 => 86,  203 => 80,  196 => 76,  186 => 71,  180 => 70,  174 => 69,  168 => 66,  154 => 57,  149 => 55,  141 => 50,  137 => 49,  130 => 44,  117 => 42,  113 => 41,  107 => 38,  97 => 31,  93 => 29,  87 => 26,  84 => 25,  81 => 24,  75 => 21,  72 => 20,  70 => 19,  64 => 15,  53 => 13,  49 => 12,  44 => 10,  37 => 8,  31 => 7,  23 => 2,  19 => 1,);
    }
}
/* {{header}}*/
/* {{column_left}}*/
/* <div id="content">*/
/* 	<div class="page-header">*/
/* 		<div class="container-fluid">*/
/* 			<div class="pull-right">*/
/* 				<button type="button" data-toggle="tooltip" title="{{button_delete}}" class="btn btn-danger" onclick="confirm('{{text_confirm}}') ? $('#form-request').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/* 				<a href="{{link_settings}}" data-toggle="tooltip" title="{{button_settings}}" class="btn btn-primary"><i class="fa fa-cog"></i></a>*/
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
/* 			<div class="alert alert-danger">*/
/* 				<i class="fa fa-exclamation-circle"></i> {{error_warning}}<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 			</div>*/
/* 		{% endif %}*/
/* 		{% if success %}*/
/* 			<div class="alert alert-success">*/
/* 				<i class="fa fa-check-circle"></i> {{success}}<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 			</div>*/
/* 		{% endif %}*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 				<h3 class="panel-title"><i class="fa fa-list"></i> {{text_list}}</h3>*/
/* 			</div>*/
/* 			<div class="panel-body">*/
/* 				<div class="well well-sm">*/
/* 					<div class="row">*/
/* 						<div class="col-sm-3">*/
/* 							<div class="form-group">*/
/* 								<label class="control-label" for="input-type">{{entry_type}}</label>*/
/* 								<select name="filter_type" id="input-status" class="form-control">*/
/* 									<option value=""></option>*/
/* 									{% for type in types %}*/
/* 										<option value="{{type.type}}" {{filter_type == type.type ? 'selected="selected"'}}>{{type.type}}</option>*/
/* 									{% endfor %}*/
/* 								</select>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-sm-3">*/
/* 							<div class="form-group">*/
/* 								<label class="control-label" for="input-name">{{entry_name}}</label>*/
/* 								<input type="text" name="filter_name" value="{{filter_name}}" id="input-name" class="form-control" />*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-sm-3">*/
/* 							<div class="form-group">*/
/* 								<label class="control-label" for="input-date-added">{{entry_date_added}}</label>*/
/* 								<div class="input-group date">*/
/* 									<input type="text" name="filter_date_added" value="{{filter_date_added}}" placeholder="{{entry_date_added}}" data-date-format="YYYY-MM-DD" id="input-date-added" class="form-control" />*/
/* 									<span class="input-group-btn">*/
/* 										<button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/* 									</span>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-sm-3">*/
/* 							<div class="form-group">*/
/* 								<label class="control-label" for="input-status">{{entry_status}}</label>*/
/* 								<select name="filter_status" id="input-status" class="form-control">*/
/* 									<option value=""></option>*/
/* 									<option value="1" {{filter_status == 1 ? 'selected="selected"'}}>{{text_status_1}}</option>*/
/* 									<option value="2" {{filter_status == 2 ? 'selected="selected"'}}>{{text_status_2}}</option>*/
/* 									<option value="3" {{filter_status == 3 ? 'selected="selected"'}}>{{text_status_3}}</option>*/
/* 								</select>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-sm-12">*/
/* 							<button type="button" id="button-filter" class="btn btn-primary pull-right"><i class="fa fa-search"></i> {{button_filter}}</button>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<form action="{{delete}}" method="post" enctype="multipart/form-data" id="form-request">*/
/* 					<div class="table-responsive">*/
/* 						<table class="table table-bordered table-hover">*/
/* 							<tr>*/
/* 								<td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/* 								<td class="text-left">*/
/* 									<a href="{{sort_type}}" class="{{sort == 'type' ? order|lower}}">{{column_type}}</a>*/
/* 								</td>*/
/* 								<td class="text-left">*/
/* 									<a href="{{sort_name}}" class="{{sort == 'name' ? order|lower}}">{{column_name}}</a>*/
/* 								</td>*/
/* 								<td class="text-left" style="min-width:130px">*/
/* 									<a href="{{sort_phone}}" class="{{sort == 'phone' ? order|lower}}">{{column_phone}}</a>*/
/* 								</td>*/
/* 								<td class="text-left">*/
/* 									<a href="{{sort_mail}}" class="{{sort == 'mail' ? order|lower}}">{{column_mail}}</a>*/
/* 								</td>*/
/* 								<td class="text-left">{{column_comment}}</td>*/
/* 								<td class="text-left">{{column_admin_comment}}</td>*/
/* 								<td class="text-left">*/
/* 									<a href="{{sort_date_added}}" class="{{sort == 'date_added' ? order|lower}}">{{column_date_added}}</a>*/
/* 								</td>*/
/* 								<td class="text-left">*/
/* 									<a href="{{sort_date_modified}}" class="{{sort == 'date_modified' ? order|lower}}">{{column_date_modified}}</a>*/
/* 								</td>*/
/* 								<td class="text-left">*/
/* 									<a href="{{sort_status}}" class="{{sort == 'status' ? order|lower}}">{{column_status}}</a>*/
/* 								</td>*/
/* 								<td class="text-left" style="max-width:80px;">{{lang.column_request_list}}</td>*/
/* 								<td class="text-right">{{column_action}}</td>*/
/* 							</tr>*/
/* 							{% if requests %}*/
/* 								{% for request in requests %}*/
/* 									<tr>*/
/* 										<td class="text-center"><input type="checkbox" name="selected[]" value="{{request.request_id}}" /></td>*/
/* 										<td class="text-left">{{request.type}}</td>*/
/* 										<td class="text-left">{{request.name}}</td>*/
/* 										<td class="text-left">{{request.phone}}</td>*/
/* 										<td class="text-left" style="max-width:150px;">{{request.mail}}</td>*/
/* 										<td class="text-left">*/
/* 											{% if request.product_name and request.product_href %}*/
/* 												<a href="{{request.product_href}}" style="text-decoration:underline;"target="_blank">{{request.product_name}} <i class="fa fa-clone" aria-hidden="true"></i></a><br />*/
/* 											{% endif %}*/
/* 											{{request.comment}}*/
/* 										</td>*/
/* 										<td class="text-left">{{request.admin_comment}}</td>*/
/* 										<td class="text-left">{{request.date_added}}</td>*/
/* 										<td class="text-left">{{request.date_modified}}</td>*/
/* 										<td class="text-left">{{request.status}}</td>*/
/* 										<td class="text-left">{{request.product_name ? request.request_list}}</td>*/
/* 										<td class="text-center">*/
/* 											<a href="{{request.edit}}" data-toggle="tooltip" title="{{button_edit}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>*/
/* 										</td>*/
/* 									</tr>*/
/* 								{% endfor %}*/
/* 							{% else %}*/
/* 								<tr>*/
/* 									<td class="text-center" colspan="12">{{text_no_results}}</td>*/
/* 								</tr>*/
/* 							{% endif %}*/
/* 							</tbody>*/
/* 						</table>*/
/* 					</div>*/
/* 				</form>*/
/* 				<div class="row">*/
/* 					<div class="col-sm-6 text-left">{{pagination}}</div>*/
/* 					<div class="col-sm-6 text-right">{{results}}</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* */
/* $('.nav-tabs').each(function() {*/
/* 	$(this).find('a:first').tab('show');*/
/* });*/
/* */
/* {% if settings is empty %}*/
/* 	$('.panel.panel-default').before('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> Обязательно откройте страницу <a href="{{link_settings}}" style="text-decoration:underline !important">настроек модуля</a> и сохраните их. <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* {% endif %}*/
/* */
/* $('#button-filter').on('click', function() {*/
/*   url = 'index.php?route=extension/module/uni_request&user_token={{user_token}}';*/
/* */
/*   var filter_type = $('select[name=\'filter_type\']').val();*/
/* */
/*   if (filter_type) {*/
/*     url += '&filter_type=' + encodeURIComponent(filter_type);*/
/*   }*/
/* */
/*   var filter_name = $('input[name=\'filter_name\']').val();*/
/* */
/*   if (filter_name) {*/
/*     url += '&filter_name=' + encodeURIComponent(filter_name);*/
/*   }*/
/* */
/*   var filter_status = $('select[name=\'filter_status\']').val();*/
/* */
/*   if (filter_status != '*') {*/
/*     url += '&filter_status=' + encodeURIComponent(filter_status);*/
/*   }*/
/* */
/*   var filter_date_added = $('input[name=\'filter_date_added\']').val();*/
/* */
/*   if (filter_date_added) {*/
/*     url += '&filter_date_added=' + encodeURIComponent(filter_date_added);*/
/*   }*/
/* */
/*   location = url;*/
/* });*/
/* //--></script>*/
/*   <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/*   pickTime: false*/
/* });*/
/* //--></script>*/
/* {{footer}}*/
