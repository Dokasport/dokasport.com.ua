<?php

/* default/template/account/reset.twig */
class __TwigTemplate_f8ebd39a67f56756c11e63991172069ee90e70644fd9e55e2c59ce6cd85dec15 extends Twig_Template
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
<div id=\"account-reset\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1>";
        // line 17
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <form action=\"";
        // line 18
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 20
        echo (isset($context["text_password"]) ? $context["text_password"] : null);
        echo "</legend>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 22
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"password\" value=\"";
        // line 24
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" id=\"input-password\" class=\"form-control\" />
              ";
        // line 25
        if ((isset($context["error_password"]) ? $context["error_password"] : null)) {
            // line 26
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_password"]) ? $context["error_password"] : null);
            echo "</div>
              ";
        }
        // line 27
        echo " </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 30
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"confirm\" value=\"";
        // line 32
        echo (isset($context["confirm"]) ? $context["confirm"] : null);
        echo "\" id=\"input-confirm\" class=\"form-control\" />
              ";
        // line 33
        if ((isset($context["error_confirm"]) ? $context["error_confirm"] : null)) {
            // line 34
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_confirm"]) ? $context["error_confirm"] : null);
            echo "</div>
              ";
        }
        // line 35
        echo "</div>
          </div>
        </fieldset>
        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
        // line 39
        echo (isset($context["back"]) ? $context["back"] : null);
        echo "\" class=\"btn btn-default\">";
        echo (isset($context["button_back"]) ? $context["button_back"] : null);
        echo "</a></div>
          <div class=\"pull-right\">
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 41
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</button>
          </div>
        </div>
      </form>
      ";
        // line 45
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 46
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 48
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/account/reset.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 48,  151 => 46,  147 => 45,  140 => 41,  133 => 39,  127 => 35,  121 => 34,  119 => 33,  115 => 32,  110 => 30,  105 => 27,  99 => 26,  97 => 25,  93 => 24,  88 => 22,  83 => 20,  78 => 18,  74 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="account-reset" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal">*/
/*         <fieldset>*/
/*           <legend>{{ text_password }}</legend>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-password">{{ entry_password }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="password" name="password" value="{{ password }}" id="input-password" class="form-control" />*/
/*               {% if error_password %}*/
/*               <div class="text-danger">{{ error_password }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-confirm">{{ entry_confirm }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="password" name="confirm" value="{{ confirm }}" id="input-confirm" class="form-control" />*/
/*               {% if error_confirm %}*/
/*               <div class="text-danger">{{ error_confirm }}</div>*/
/*               {% endif %}</div>*/
/*           </div>*/
/*         </fieldset>*/
/*         <div class="buttons clearfix">*/
/*           <div class="pull-left"><a href="{{ back }}" class="btn btn-default">{{ button_back }}</a></div>*/
/*           <div class="pull-right">*/
/*             <button type="submit" class="btn btn-primary">{{ button_continue }}</button>*/
/*           </div>*/
/*         </div>*/
/*       </form>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
