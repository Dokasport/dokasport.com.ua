<?php

/* extension/module/uni_request_form.twig */
class __TwigTemplate_db60c39c619aee6e8ee645bcf51231684cea99f9a959b42046f597ba908cd7cd extends Twig_Template
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
\t\t\t\t<button type=\"submit\" form=\"form-review\" data-toggle=\"tooltip\" title=\"";
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
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 31
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<form action=\"";
        // line 34
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-review\" class=\"form-horizontal\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-type\">";
        // line 36
        echo (isset($context["entry_type"]) ? $context["entry_type"] : null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"type\" value=\"";
        // line 38
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "\" placeholder=\"\" id=\"input-type\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 42
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</span></label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
        // line 44
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" placeholder=\"\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-phone\">";
        // line 48
        echo (isset($context["entry_phone"]) ? $context["entry_phone"] : null);
        echo "</span></label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"phone\" value=\"";
        // line 50
        echo (isset($context["phone"]) ? $context["phone"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_phone"]) ? $context["entry_phone"] : null);
        echo "\" id=\"input-phone\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-mail\">";
        // line 54
        echo (isset($context["entry_mail"]) ? $context["entry_mail"] : null);
        echo "</span></label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"mail\" value=\"";
        // line 56
        echo (isset($context["mail"]) ? $context["mail"] : null);
        echo "\" placeholder=\"\" id=\"input-mail\" class=\"form-control\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 59
        if (((isset($context["product_name"]) ? $context["product_name"] : null) && (isset($context["product_href"]) ? $context["product_href"] : null))) {
            // line 60
            echo "\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-mail\">";
            // line 61
            echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
            echo "</span></label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 63
            echo (isset($context["product_href"]) ? $context["product_href"] : null);
            echo "\" style=\"display:inline-block;height:26px;margin-top:9px;text-decoration:underline\" target=\"_blank\">";
            echo (isset($context["product_name"]) ? $context["product_name"] : null);
            echo " <i class=\"fa fa-clone\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 67
        echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-comment\">";
        // line 68
        echo (isset($context["entry_comment"]) ? $context["entry_comment"] : null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<textarea name=\"comment\" cols=\"60\" rows=\"8\" placeholder=\"\" id=\"input-comment\" class=\"form-control\">";
        // line 70
        echo (isset($context["comment"]) ? $context["comment"] : null);
        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-admin_comment\">";
        // line 74
        echo (isset($context["entry_admin_comment"]) ? $context["entry_admin_comment"] : null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<textarea name=\"admin_comment\" cols=\"60\" rows=\"8\" placeholder=\"\" id=\"input-admin_comment\" class=\"form-control\">";
        // line 76
        echo (isset($context["admin_comment"]) ? $context["admin_comment"] : null);
        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 80
        echo (isset($context["entry_request_list"]) ? $context["entry_request_list"] : null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"request_list\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"0\" ";
        // line 83
        echo ((((isset($context["request_list"]) ? $context["request_list"] : null) == 0)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_off"]) ? $context["text_off"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 84
        echo ((((isset($context["request_list"]) ? $context["request_list"] : null) == 1)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_on"]) ? $context["text_on"] : null);
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 89
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<select name=\"status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t<option value=\"1\" ";
        // line 92
        echo ((((isset($context["status"]) ? $context["status"] : null) == 1)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_status_1"]) ? $context["text_status_1"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"2\" ";
        // line 93
        echo ((((isset($context["status"]) ? $context["status"] : null) == 2)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_status_2"]) ? $context["text_status_2"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"3\" ";
        // line 94
        echo ((((isset($context["status"]) ? $context["status"] : null) == 3)) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_status_3"]) ? $context["text_status_3"] : null);
        echo "</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"hidden\" name=\"date_added\" value=\"";
        // line 98
        echo (isset($context["date_added"]) ? $context["date_added"] : null);
        echo "\" />
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 104
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/uni_request_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 104,  250 => 98,  241 => 94,  235 => 93,  229 => 92,  223 => 89,  213 => 84,  207 => 83,  201 => 80,  194 => 76,  189 => 74,  182 => 70,  177 => 68,  174 => 67,  165 => 63,  160 => 61,  157 => 60,  155 => 59,  149 => 56,  144 => 54,  135 => 50,  130 => 48,  123 => 44,  118 => 42,  111 => 38,  106 => 36,  101 => 34,  95 => 31,  91 => 29,  85 => 26,  82 => 25,  79 => 24,  73 => 21,  70 => 20,  68 => 19,  62 => 15,  51 => 13,  47 => 12,  42 => 10,  35 => 8,  31 => 7,  23 => 2,  19 => 1,);
    }
}
/* {{header}}*/
/* {{column_left}}*/
/* <div id="content">*/
/* 	<div class="page-header">*/
/* 		<div class="container-fluid">*/
/* 			<div class="pull-right">*/
/* 				<button type="submit" form="form-review" data-toggle="tooltip" title="{{button_save}}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/* 				<a href="{{cancel}}" data-toggle="tooltip" title="{{button_cancel}}" class="btn btn-default"><i class="fa fa-reply"></i></a>*/
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
/* 				<h3 class="panel-title"><i class="fa fa-pencil"></i> {{text_form}}</h3>*/
/* 			</div>*/
/* 			<div class="panel-body">*/
/* 				<form action="{{action}}" method="post" enctype="multipart/form-data" id="form-review" class="form-horizontal">*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-2 control-label" for="input-type">{{entry_type}}</label>*/
/* 						<div class="col-sm-10">*/
/* 							<input type="text" name="type" value="{{type}}" placeholder="" id="input-type" class="form-control" />*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-2 control-label" for="input-name">{{entry_name}}</span></label>*/
/* 						<div class="col-sm-10">*/
/* 							<input type="text" name="name" value="{{name}}" placeholder="" id="input-name" class="form-control" />*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-2 control-label" for="input-phone">{{entry_phone}}</span></label>*/
/* 						<div class="col-sm-10">*/
/* 							<input type="text" name="phone" value="{{phone}}" placeholder="{{entry_phone}}" id="input-phone" class="form-control" />*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-2 control-label" for="input-mail">{{entry_mail}}</span></label>*/
/* 						<div class="col-sm-10">*/
/* 							<input type="text" name="mail" value="{{mail}}" placeholder="" id="input-mail" class="form-control" />*/
/* 						</div>*/
/* 					</div>*/
/* 					{% if product_name and product_href %}*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label" for="input-mail">{{entry_product}}</span></label>*/
/* 							<div class="col-sm-10">*/
/* 								<a href="{{product_href}}" style="display:inline-block;height:26px;margin-top:9px;text-decoration:underline" target="_blank">{{product_name}} <i class="fa fa-clone" aria-hidden="true"></i></a>*/
/* 							</div>*/
/* 						</div>*/
/* 					{% endif %}*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-2 control-label" for="input-comment">{{entry_comment}}</label>*/
/* 						<div class="col-sm-10">*/
/* 							<textarea name="comment" cols="60" rows="8" placeholder="" id="input-comment" class="form-control">{{comment}}</textarea>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-2 control-label" for="input-admin_comment">{{entry_admin_comment}}</label>*/
/* 						<div class="col-sm-10">*/
/* 							<textarea name="admin_comment" cols="60" rows="8" placeholder="" id="input-admin_comment" class="form-control">{{admin_comment}}</textarea>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-2 control-label" for="input-status">{{entry_request_list}}</label>*/
/* 						<div class="col-sm-10">*/
/* 							<select name="request_list" class="form-control">*/
/* 								<option value="0" {{request_list == 0 ? 'selected="selected"'}}>{{text_off}}</option>*/
/* 								<option value="1" {{request_list == 1 ? 'selected="selected"'}}>{{text_on}}</option>*/
/* 							</select>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-2 control-label" for="input-status">{{entry_status}}</label>*/
/* 						<div class="col-sm-10">*/
/* 							<select name="status" id="input-status" class="form-control">*/
/* 								<option value="1" {{status == 1 ? 'selected="selected"'}}>{{text_status_1}}</option>*/
/* 								<option value="2" {{status == 2 ? 'selected="selected"'}}>{{text_status_2}}</option>*/
/* 								<option value="3" {{status == 3 ? 'selected="selected"'}}>{{text_status_3}}</option>*/
/* 							</select>*/
/* 						</div>*/
/* 					</div>*/
/* 					<input type="hidden" name="date_added" value="{{date_added}}" />*/
/* 				</form>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* {{footer}}*/
