<?php

/* default/template/account/return_info.twig */
class __TwigTemplate_61559e20b80e16cdc5bd9bc721c73f89482c8854a4665c2a00304f48693a9a26 extends Twig_Template
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
<div id=\"account-return\" class=\"container\">
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
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\" colspan=\"2\">";
        // line 21
        echo (isset($context["text_return_detail"]) ? $context["text_return_detail"] : null);
        echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\" style=\"width: 50%;\"><b>";
        // line 26
        echo (isset($context["text_return_id"]) ? $context["text_return_id"] : null);
        echo "</b> #";
        echo (isset($context["return_id"]) ? $context["return_id"] : null);
        echo "<br />
              <b>";
        // line 27
        echo (isset($context["text_date_added"]) ? $context["text_date_added"] : null);
        echo "</b> ";
        echo (isset($context["date_added"]) ? $context["date_added"] : null);
        echo "</td>
            <td class=\"text-left\" style=\"width: 50%;\"><b>";
        // line 28
        echo (isset($context["text_order_id"]) ? $context["text_order_id"] : null);
        echo "</b> #";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "<br />
              <b>";
        // line 29
        echo (isset($context["text_date_ordered"]) ? $context["text_date_ordered"] : null);
        echo "</b> ";
        echo (isset($context["date_ordered"]) ? $context["date_ordered"] : null);
        echo "</td>
          </tr>
        </tbody>
      </table>
      <h3>";
        // line 33
        echo (isset($context["text_product"]) ? $context["text_product"] : null);
        echo "</h3>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\" style=\"width: 33.3%;\">";
        // line 38
        echo (isset($context["column_product"]) ? $context["column_product"] : null);
        echo "</td>
              <td class=\"text-left\" style=\"width: 33.3%;\">";
        // line 39
        echo (isset($context["column_model"]) ? $context["column_model"] : null);
        echo "</td>
              <td class=\"text-right\" style=\"width: 33.3%;\">";
        // line 40
        echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
        echo "</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class=\"text-left\">";
        // line 45
        echo (isset($context["product"]) ? $context["product"] : null);
        echo "</td>
              <td class=\"text-left\">";
        // line 46
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "</td>
              <td class=\"text-right\">";
        // line 47
        echo (isset($context["quantity"]) ? $context["quantity"] : null);
        echo "</td>
            </tr>
          </tbody>
        </table>
      </div>
      <h3>";
        // line 52
        echo (isset($context["text_reason"]) ? $context["text_reason"] : null);
        echo "</h3>
      <div class=\"table-responsive\">
        <table class=\"list table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\" style=\"width: 33.3%;\">";
        // line 57
        echo (isset($context["column_reason"]) ? $context["column_reason"] : null);
        echo "</td>
              <td class=\"text-left\" style=\"width: 33.3%;\">";
        // line 58
        echo (isset($context["column_opened"]) ? $context["column_opened"] : null);
        echo "</td>
              <td class=\"text-left\" style=\"width: 33.3%;\">";
        // line 59
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class=\"text-left\">";
        // line 64
        echo (isset($context["reason"]) ? $context["reason"] : null);
        echo "</td>
              <td class=\"text-left\">";
        // line 65
        echo (isset($context["opened"]) ? $context["opened"] : null);
        echo "</td>
              <td class=\"text-left\">";
        // line 66
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "</td>
            </tr>
          </tbody>
        </table>
      </div>
      ";
        // line 71
        if ((isset($context["comment"]) ? $context["comment"] : null)) {
            // line 72
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\">";
            // line 76
            echo (isset($context["text_comment"]) ? $context["text_comment"] : null);
            echo "</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class=\"text-left\">";
            // line 81
            echo (isset($context["comment"]) ? $context["comment"] : null);
            echo "</td>
            </tr>
          </tbody>
        </table>
      </div>
      ";
        }
        // line 87
        echo "      <h3>";
        echo (isset($context["text_history"]) ? $context["text_history"] : null);
        echo "</h3>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\" style=\"width: 33.3%;\">";
        // line 92
        echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
        echo "</td>
              <td class=\"text-left\" style=\"width: 33.3%;\">";
        // line 93
        echo (isset($context["column_status"]) ? $context["column_status"] : null);
        echo "</td>
              <td class=\"text-left\" style=\"width: 33.3%;\">";
        // line 94
        echo (isset($context["column_comment"]) ? $context["column_comment"] : null);
        echo "</td>
            </tr>
          </thead>
          <tbody>
          
          ";
        // line 99
        if ((isset($context["histories"]) ? $context["histories"] : null)) {
            // line 100
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["histories"]) ? $context["histories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 101
                echo "          <tr>
            <td class=\"text-left\">";
                // line 102
                echo $this->getAttribute($context["history"], "date_added", array());
                echo "</td>
            <td class=\"text-left\">";
                // line 103
                echo $this->getAttribute($context["history"], "status", array());
                echo "</td>
            <td class=\"text-left\">";
                // line 104
                echo $this->getAttribute($context["history"], "comment", array());
                echo "</td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "          ";
        } else {
            // line 108
            echo "          <tr>
            <td colspan=\"3\" class=\"text-center\">";
            // line 109
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
          </tr>
          ";
        }
        // line 112
        echo "            </tbody>
          
        </table>
      </div>
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 117
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a></div>
      </div>
      ";
        // line 119
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 120
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 122
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/account/return_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 122,  303 => 120,  299 => 119,  292 => 117,  285 => 112,  279 => 109,  276 => 108,  273 => 107,  264 => 104,  260 => 103,  256 => 102,  253 => 101,  248 => 100,  246 => 99,  238 => 94,  234 => 93,  230 => 92,  221 => 87,  212 => 81,  204 => 76,  198 => 72,  196 => 71,  188 => 66,  184 => 65,  180 => 64,  172 => 59,  168 => 58,  164 => 57,  156 => 52,  148 => 47,  144 => 46,  140 => 45,  132 => 40,  128 => 39,  124 => 38,  116 => 33,  107 => 29,  101 => 28,  95 => 27,  89 => 26,  81 => 21,  74 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="account-return" class="container">*/
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
/*       <table class="table table-bordered table-hover">*/
/*         <thead>*/
/*           <tr>*/
/*             <td class="text-left" colspan="2">{{ text_return_detail }}</td>*/
/*           </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*           <tr>*/
/*             <td class="text-left" style="width: 50%;"><b>{{ text_return_id }}</b> #{{ return_id }}<br />*/
/*               <b>{{ text_date_added }}</b> {{ date_added }}</td>*/
/*             <td class="text-left" style="width: 50%;"><b>{{ text_order_id }}</b> #{{ order_id }}<br />*/
/*               <b>{{ text_date_ordered }}</b> {{ date_ordered }}</td>*/
/*           </tr>*/
/*         </tbody>*/
/*       </table>*/
/*       <h3>{{ text_product }}</h3>*/
/*       <div class="table-responsive">*/
/*         <table class="table table-bordered table-hover">*/
/*           <thead>*/
/*             <tr>*/
/*               <td class="text-left" style="width: 33.3%;">{{ column_product }}</td>*/
/*               <td class="text-left" style="width: 33.3%;">{{ column_model }}</td>*/
/*               <td class="text-right" style="width: 33.3%;">{{ column_quantity }}</td>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*             <tr>*/
/*               <td class="text-left">{{ product }}</td>*/
/*               <td class="text-left">{{ model }}</td>*/
/*               <td class="text-right">{{ quantity }}</td>*/
/*             </tr>*/
/*           </tbody>*/
/*         </table>*/
/*       </div>*/
/*       <h3>{{ text_reason }}</h3>*/
/*       <div class="table-responsive">*/
/*         <table class="list table table-bordered table-hover">*/
/*           <thead>*/
/*             <tr>*/
/*               <td class="text-left" style="width: 33.3%;">{{ column_reason }}</td>*/
/*               <td class="text-left" style="width: 33.3%;">{{ column_opened }}</td>*/
/*               <td class="text-left" style="width: 33.3%;">{{ column_action }}</td>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*             <tr>*/
/*               <td class="text-left">{{ reason }}</td>*/
/*               <td class="text-left">{{ opened }}</td>*/
/*               <td class="text-left">{{ action }}</td>*/
/*             </tr>*/
/*           </tbody>*/
/*         </table>*/
/*       </div>*/
/*       {% if comment %}*/
/*       <div class="table-responsive">*/
/*         <table class="table table-bordered table-hover">*/
/*           <thead>*/
/*             <tr>*/
/*               <td class="text-left">{{ text_comment }}</td>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*             <tr>*/
/*               <td class="text-left">{{ comment }}</td>*/
/*             </tr>*/
/*           </tbody>*/
/*         </table>*/
/*       </div>*/
/*       {% endif %}*/
/*       <h3>{{ text_history }}</h3>*/
/*       <div class="table-responsive">*/
/*         <table class="table table-bordered table-hover">*/
/*           <thead>*/
/*             <tr>*/
/*               <td class="text-left" style="width: 33.3%;">{{ column_date_added }}</td>*/
/*               <td class="text-left" style="width: 33.3%;">{{ column_status }}</td>*/
/*               <td class="text-left" style="width: 33.3%;">{{ column_comment }}</td>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*           */
/*           {% if histories %}*/
/*           {% for history in histories %}*/
/*           <tr>*/
/*             <td class="text-left">{{ history.date_added }}</td>*/
/*             <td class="text-left">{{ history.status }}</td>*/
/*             <td class="text-left">{{ history.comment }}</td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*           {% else %}*/
/*           <tr>*/
/*             <td colspan="3" class="text-center">{{ text_no_results }}</td>*/
/*           </tr>*/
/*           {% endif %}*/
/*             </tbody>*/
/*           */
/*         </table>*/
/*       </div>*/
/*       <div class="buttons clearfix">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }} */
