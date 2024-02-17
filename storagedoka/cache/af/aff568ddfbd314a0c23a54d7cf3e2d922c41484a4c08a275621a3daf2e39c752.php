<?php

/* extension/module/d_quickcheckout.twig */
class __TwigTemplate_11c2c98a2e4d25b3338f434c3c55c2e3b77703e5b92852022cd53723a39f124f extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"form-inline pull-right\">
                ";
        // line 6
        if ((twig_length_filter($this->env, (isset($context["stores"]) ? $context["stores"] : null)) > 1)) {
            // line 7
            echo "                <select class=\"form-control\" onChange=\"location = '";
            echo (isset($context["module_link"]) ? $context["module_link"] : null);
            echo " & store_id=' + \$(this).val()\">
                    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 9
                echo "                        ";
                if (($this->getAttribute($context["store"], "store_id", array()) == (isset($context["store_id"]) ? $context["store_id"] : null))) {
                    // line 10
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["store"], "store_id", array());
                    echo "\" selected=\"selected\" >";
                    echo $this->getAttribute($context["store"], "name", array());
                    echo "</option>
                        ";
                } else {
                    // line 12
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["store"], "store_id", array());
                    echo "\" >";
                    echo $this->getAttribute($context["store"], "name", array());
                    echo "</option>
                        ";
                }
                // line 14
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "
                </select>
                 ";
        }
        // line 18
        echo "                <button id=\"save_and_stay\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_save_and_stay"]) ? $context["button_save_and_stay"] : null);
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-save\"></i></button>
                <button type=\"submit\" form=\"form\" data-toggle=\"tooltip\" title=\"";
        // line 19
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 20
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
            </div>
            <h1>";
        // line 22
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo " ";
        echo (isset($context["version"]) ? $context["version"] : null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 25
            echo "                <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </ul>
        </div>
    </div>

    <div class=\"container-fluid\">
        ";
        // line 32
        if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "warning", array())) {
            // line 33
            echo "        <div class=\"alert alert-danger\">
            <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 34
            echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "warning", array());
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 38
        echo "        ";
        if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "shopunity", array())) {
            // line 39
            echo "        <div class=\"alert alert-danger\">
            <i class=\"fa fa-exclamation-circle\"></i>
           ";
            // line 41
            echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "shopunity", array());
            echo "
        </div>
        ";
        }
        // line 44
        echo "        ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 45
            echo "        <div class=\"alert alert-success\">
            <i class=\"fa fa-exclamation-circle\"></i> ";
            // line 46
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 50
        echo "
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 53
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo " ";
        echo (isset($context["setting_name"]) ? $context["setting_name"] : null);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 56
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\" class=\"form-horizontal\">

                    <ul  class=\"nav nav-tabs\">
                        <li class=\"active\">
                            <a href=\"#setting\" data-toggle=\"tab\">
                                <span class=\"fa fa-cog\"></span>
                               ";
        // line 62
        echo (isset($context["tab_setting"]) ? $context["tab_setting"] : null);
        echo "
                            </a>
                        </li>
                        ";
        // line 65
        if ((isset($context["debug"]) ? $context["debug"] : null)) {
            // line 66
            echo "                        <li>
                            <a href=\"#debug\" data-toggle=\"tab\">
                                <span class=\"fa fa-bug\"></span>
                               ";
            // line 69
            echo (isset($context["tab_debug"]) ? $context["tab_debug"] : null);
            echo "
                            </a>
                        </li>
                        ";
        }
        // line 73
        echo "                        ";
        if ($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "support", array())) {
            // line 74
            echo "                        <li>
                            <a href=\"#support\" data-toggle=\"tab\">
                                <span class=\"fa fa-support\"></span>
                               ";
            // line 77
            echo (isset($context["tab_support"]) ? $context["tab_support"] : null);
            echo "
                            </a>
                        </li>
                        ";
        }
        // line 81
        echo "                        <li>
                            <a href=\"#instruction\" data-toggle=\"tab\">
                                <span class=\"fa fa-graduation-cap\"></span>
                               ";
        // line 84
        echo (isset($context["tab_instruction"]) ? $context["tab_instruction"] : null);
        echo "
                            </a>
                        </li>
                    </ul>

                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"setting\" >
                            <div class=\"tab-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-2\">
                                        <ul class=\"nav nav-pills s-nav-stacked\">
                                            <li class=\"active\">
                                                <a href=\"#d_home\" data-toggle=\"tab\">
                                                    <span class=\"fa fa-home fa-fw\"></span> <span>";
        // line 97
        echo (isset($context["text_home"]) ? $context["text_home"] : null);
        echo "</span>
                                                </a>
                                            </li>
                                            ";
        // line 100
        if ((isset($context["setting_id"]) ? $context["setting_id"] : null)) {
            // line 101
            echo "                                            <li>
                                                <a href=\"#d_general\" data-toggle=\"tab\">
                                                    <i class=\"fa fa-cog fa-fw\"></i> <span>";
            // line 103
            echo (isset($context["text_general"]) ? $context["text_general"] : null);
            echo "</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#d_login\" data-toggle=\"tab\">
                                                    <i class=\"fa fa-key fa-fw\"></i> <span>";
            // line 108
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#d_payment_address\" data-toggle=\"tab\">
                                                    <i class=\"fa fa-book fa-fw\"></i> <span>";
            // line 113
            echo (isset($context["text_payment_address"]) ? $context["text_payment_address"] : null);
            echo "</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#d_shipping_address\" data-toggle=\"tab\">
                                                    <i class=\"fa fa-book fa-fw\"></i> <span>";
            // line 118
            echo (isset($context["text_shipping_address"]) ? $context["text_shipping_address"] : null);
            echo "</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#d_shipping_method\" data-toggle=\"tab\">
                                                    <i class=\"fa fa-truck fa-fw\"></i> <span>";
            // line 123
            echo (isset($context["text_shipping_method"]) ? $context["text_shipping_method"] : null);
            echo "</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#d_payment_method\" data-toggle=\"tab\">
                                                    <i class=\"fa fa-credit-card fa-fw\"></i> <span>";
            // line 128
            echo (isset($context["text_payment_method"]) ? $context["text_payment_method"] : null);
            echo "</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#d_confirm\" data-toggle=\"tab\">
                                                    <i class=\"fa fa-shopping-cart fa-fw\"></i> <span>";
            // line 133
            echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
            echo " & ";
            echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
            echo "</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#d_design\" data-toggle=\"tab\">
                                                    <i class=\"fa fa-paint-brush fa-fw\"></i> <span>";
            // line 138
            echo (isset($context["text_design"]) ? $context["text_design"] : null);
            echo "</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#d_analytics\" data-toggle=\"tab\">
                                                    <i class=\"fa fa-bar-chart fa-fw\"></i> <span>";
            // line 143
            echo (isset($context["text_analytics"]) ? $context["text_analytics"] : null);
            echo "</span>
                                                </a>
                                            </li>
                                           ";
        }
        // line 147
        echo "                                        </ul>
                                    </div>
                                    <div class=\"col-sm-10\">
                                        <div class=\"tab-content\">

                                        <div id=\"d_home\" class=\"tab-pane active\">
                                                <div class=\"page-header\">
                                                    <h3><span class=\"fa fa-home\"></span> <span>";
        // line 154
        echo (isset($context["text_home"]) ? $context["text_home"] : null);
        echo "</span></h3>
                                                </div>
                                                ";
        // line 156
        if ( !(isset($context["settings"]) ? $context["settings"] : null)) {
            echo " 
                                                <div class=\"bs-callout bs-callout-warning\">";
            // line 157
            echo (isset($context["text_intro_create_setting"]) ? $context["text_intro_create_setting"] : null);
            echo "</div>
                                                ";
        }
        // line 158
        echo " 
                                                <div class=\"row\">
                                                    ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["settings"]) ? $context["settings"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["setting_value"]) {
            // line 161
            echo "                                                    <div id=\"setting_id_";
            echo $this->getAttribute($context["setting_value"], "setting_id", array());
            echo "\" class=\"col-lg-3 col-md-4 col-sm-6 \">
                                                        <div class=\"tile ";
            // line 162
            echo ((($this->getAttribute($context["setting_value"], "setting_id", array()) == (isset($context["setting_id"]) ? $context["setting_id"] : null))) ? ("selected") : (""));
            echo "\">
                                                            <a href=\"#\" class=\"view-setting \" data-setting-id=\"";
            // line 163
            echo $this->getAttribute($context["setting_value"], "setting_id", array());
            echo "\" >
                                                                <div class=\"tile-heading clearfix\">
                                                                   ";
            // line 165
            echo $this->getAttribute($context["setting_value"], "name", array());
            echo "
                                                                    <span class=\"pull-right\" data-toggle=\"tooltip\" title=\"";
            // line 166
            echo (isset($context["help_average_time"]) ? $context["help_average_time"] : null);
            echo "\" >";
            echo twig_date_format_filter($this->env, twig_round(($this->getAttribute($context["setting_value"], "average_checkout_time", array()) / 100)), "H:i:s");
            echo "</span>
                                                                </div>
                                                                <div class=\"tile-body\">
                                                                    <a href=\"";
            // line 169
            echo $this->getAttribute($context["setting_value"], "href", array());
            echo " \" target=\"_blank\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["help_view_shop"]) ? $context["help_view_shop"] : null);
            echo "\"><i class=\"fa fa-eye\"></i></a>
                                                                    <a href=\"#\" class=\"view-setting \" data-setting-id=\"";
            // line 170
            echo $this->getAttribute($context["setting_value"], "setting_id", array());
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["help_view_setting"]) ? $context["help_view_setting"] : null);
            echo "\"><i class=\"fa fa-pencil\"></i></a>
                                                                    <h3 class=\"pull-right\" data-toggle=\"tooltip\" title=\"";
            // line 171
            echo (isset($context["help_average_rating"]) ? $context["help_average_rating"] : null);
            echo "\">";
            echo twig_round(($this->getAttribute($context["setting_value"], "average_rating", array()) * 100));
            echo "%</h3>
                                                                </div>
                                                            </a>
                                                            <div class=\"tile-footer form-inline clearfix\">
                                                                <div class=\"\">
                                                                   ";
            // line 176
            echo (isset($context["text_probability"]) ? $context["text_probability"] : null);
            echo ":
                                                                    <div class=\"input-group pull-right probability\">
                                                                        <span class=\"input-group-btn probability-down\">
                                                                            <button class=\"btn btn-default btn-sm \" type=\"button\"><i class=\"fa fa-chevron-down\"></i></button>
                                                                        </span>
                                                                        <input type=\"text\" style=\"width:50px; text-align:center\" class=\"form-control input-sm probability-value\" name=\"";
            // line 181
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "_setting_cycle[";
            echo $this->getAttribute($context["setting_value"], "setting_id", array());
            echo "]\" value=\"";
            echo (($this->getAttribute($this->getAttribute((isset($context["setting_cycle"]) ? $context["setting_cycle"] : null), "setting_value", array()), "setting_id", array())) ? ($this->getAttribute($this->getAttribute((isset($context["setting_cycle"]) ? $context["setting_cycle"] : null), "setting_value", array()), "setting_id", array())) : (""));
            echo "1  \" aria-describedby=\"sizing-addon2\" />
                                                                        <span class=\"input-group-btn probability-up\">
                                                                            <button class=\"btn btn-default btn-sm \" type=\"button\"><i class=\"fa fa-chevron-up\"></i></button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['setting_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "                                                    <script>
                                                                \$('.probability .probability-down').on('click', function(){
                                                        \$(this).next().val(\$(this).next().val() - 1);
                                                                \$('.probability-value').trigger('change');
                                                        })
                                                                \$('.probability .probability-up').on('click', function(){
                                                        \$(this).prev().val(Number(\$(this).prev().val()) + 1);
                                                                \$('.probability-value').trigger('change');
                                                        })

                                                                \$('.probability-value').on('change', function(){
                                                        if (\$(this).val() < 0){
                                                        \$(this).val(0)
                                                        }
                                                        })
                                                    </script>
                                                    <div class=\"col-lg-3 col-md-4 col-sm-6\">
                                                        <div class=\"tile\">
                                                            <div class=\"tile-heading\">
                                                               ";
        // line 210
        echo (isset($context["text_create_setting_heading"]) ? $context["text_create_setting_heading"] : null);
        echo "
                                                            </div>
                                                            <a href=\"#\" id=\"create_setting\" class=\"create-setting\" >
                                                                <div class=\"tile-body\">
                                                                    <i class=\"fa fa-plus\"></i>
                                                                    <h3 class=\"pull-right\">";
        // line 215
        echo (isset($context["text_create_setting"]) ? $context["text_create_setting"] : null);
        echo "</h3>
                                                                </div>
                                                            </a>
                                                            <div class=\"tile-footer\">
                                                               ";
        // line 219
        echo (isset($context["text_create_setting_probability"]) ? $context["text_create_setting_probability"] : null);
        echo "
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr/>
                                                <div class=\"row\">
                                                    <div class=\"col-md-6\">
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input_status\">";
        // line 228
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"hidden\" value=\"0\" name=\"";
        // line 230
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "_status\" id=\"input_status\" class=\"form-control\" />
                                                                <input type=\"checkbox\"  value=\"1\" name=\"";
        // line 231
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "_status\" id=\"input_status\" ";
        if ($this->getAttribute($context, ((isset($context["id"]) ? $context["id"] : null) . "_status"))) {
            echo "  checked=\"checked\" ";
        }
        echo " class=\"form-control\" />
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-catalog-limit\">
                                                                <span data-toggle=\"tooltip\" title=\"";
        // line 237
        echo (isset($context["help_trigger"]) ? $context["help_trigger"] : null);
        echo "\">
                                                                   ";
        // line 238
        echo (isset($context["entry_trigger"]) ? $context["entry_trigger"] : null);
        echo "
                                                                </span>
                                                            </label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"text\" value=\"";
        // line 242
        echo $this->getAttribute($context, ((isset($context["id"]) ? $context["id"] : null) . "_trigger"));
        echo "\" name=\"";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "_trigger\" id=\"trigger\" class=\"form-control\"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <div class=\"form-group\">
                                                            
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input_debug\">";
        // line 251
        echo (isset($context["entry_debug"]) ? $context["entry_debug"] : null);
        echo "</label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"hidden\" name=\"";
        // line 253
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "_debug\" value=\"0\" />
                                                                <input type=\"checkbox\" id=\"input_debug\" name=\"";
        // line 254
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "_debug\" ";
        echo (((isset($context["debug"]) ? $context["debug"] : null)) ? ("checked=\"checked\"") : (""));
        echo " value=\"1\" />
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <script>
                                                \$('.tab-content a[data-toggle]').click(function(){
                                                    \$('.panel .nav-stacked li.active').removeClass('active')
                                                    \$('.panel .nav-stacked li a[href=\"' + \$(this).attr('href') + '\"]').parent().addClass('active')
                                                    
                                                })
                                            </script>


                                        <div id=\"d_general\" class=\"tab-pane\">

                                                <h3 class=\"page-header\">
                                                    <span class=\"fa fa-cog fa-fw\"></span> <span>";
        // line 273
        echo (isset($context["text_general"]) ? $context["text_general"] : null);
        echo "</span>
                                                </h3>

                                                <div class=\"row\">
                                                    <div class=\"col-md-6\">

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input_setting_name\">
                                                                <span data-toggle=\"tooltip\" title=\"";
        // line 281
        echo (isset($context["help_name"]) ? $context["help_name"] : null);
        echo "\">
                                                                   ";
        // line 282
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "
                                                                </span>
                                                            </label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"text\" value=\"";
        // line 286
        echo (isset($context["setting_name"]) ? $context["setting_name"] : null);
        echo "\" name=\"";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "_setting[name]\" id=\"input_setting_name\" class=\"form-control\"/>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-catalog-limit\">
                                                                <span data-toggle=\"tooltip\" title=\"";
        // line 292
        echo (isset($context["help_general_clear_session"]) ? $context["help_general_clear_session"] : null);
        echo "\">
                                                                   ";
        // line 293
        echo (isset($context["entry_general_clear_session"]) ? $context["entry_general_clear_session"] : null);
        echo "
                                                                </span>
                                                            </label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"hidden\" value=\"0\" name=\"";
        // line 297
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "_setting[general][clear_session]\" />
                                                                <input type=\"checkbox\" value=\"1\" name=\"";
        // line 298
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "_setting[general][clear_session]\" ";
        if (($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "general", array()), "clear_session", array()) && ($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "general", array()), "clear_session", array()) == 1))) {
            echo " checked=\"checked\"";
        }
        echo "  id=\"general_clear_session\" />
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-catalog-limit\">
                                                                <span data-toggle=\"tooltip\" title=\"";
        // line 304
        echo (isset($context["help_general_login_refresh"]) ? $context["help_general_login_refresh"] : null);
        echo "\">
                                                                   ";
        // line 305
        echo (isset($context["entry_general_login_refresh"]) ? $context["entry_general_login_refresh"] : null);
        echo "
                                                                </span>
                                                            </label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"hidden\" value=\"0\" name=\"";
        // line 309
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "_setting[general][login_refresh]\" />
                                                                <input type=\"checkbox\" value=\"1\" name=\"";
        // line 310
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "_setting[general][login_refresh]\" ";
        if (($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "general", array()), "login_refresh", array()) && ($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "general", array()), "login_refresh", array()) == 1))) {
            echo " checked=\"checked\"";
        }
        echo "  id=\"general_login_refresh\" />
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-catalog-limit\">
                                                                <span data-toggle=\"tooltip\" title=\"";
        // line 316
        echo (isset($context["help_general_analytics_event"]) ? $context["help_general_analytics_event"] : null);
        echo "\">
                                                                   ";
        // line 317
        echo (isset($context["entry_general_analytics_event"]) ? $context["entry_general_analytics_event"] : null);
        echo "
                                                                </span>
                                                            </label>
                                                            <div class=\"col-sm-2\">
                                                                <input type=\"hidden\" value=\"0\" name=\"";
        // line 321
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "_setting[general][analytics_event]\" />
                                                                <input type=\"checkbox\" value=\"1\" name=\"";
        // line 322
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "_setting[general][analytics_event]\" ";
        if (($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "general", array()), "analytics_event", array()) && ($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "general", array()), "analytics_event", array()) == 1))) {
            echo " checked=\"checked\"";
        }
        echo "  id=\"general_analytics_event\" />
                                                            </div>
                                                            <script>
                                                                \$(\"#general_analytics_event\").on('switchChange.bootstrapSwitch', function(event, state){
                                                                    if (state){
                                                                        if ( ";
        // line 327
        echo (((isset($context["analytics"]) ? $context["analytics"] : null)) ? (0) : (1));
        echo " ){
                                                                            \$(\"#analytics_message\").removeClass('hidden');
                                                                        }
                                                                    } else{
                                                                        \$(\"#analytics_message\").addClass('hidden');
                                                                    }
                                                                })
                                                            </script>
                                                            <div class=\"col-sm-6\">
                                                                <div id=\"analytics_message\" class=\"alert alert-danger alert-inline    ";
        // line 336
        if ((($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "general", array()), "analytics_event", array()) != 1) || (($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "general", array()), "analytics_event", array()) == 1) && (isset($context["analytics"]) ? $context["analytics"] : null)))) {
            echo " ";
            echo "hidden";
        }
        echo " \"  >";
        echo (isset($context["warning_analytics_event"]) ? $context["warning_analytics_event"] : null);
        echo "</div>
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-catalog-limit\">
                                                                <span data-toggle=\"tooltip\" title=\"";
        // line 342
        echo (isset($context["help_general_update_mini_cart"]) ? $context["help_general_update_mini_cart"] : null);
        echo "\">
                                                                   ";
        // line 343
        echo (isset($context["entry_general_update_mini_cart"]) ? $context["entry_general_update_mini_cart"] : null);
        echo "
                                                                </span>
                                                            </label>
                                                            <div class=\"col-sm-8\">
                                                                <input type=\"hidden\" value=\"0\" name=\"";
        // line 347
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "_setting[general][update_mini_cart]\" />
                                                                <input type=\"checkbox\" value=\"1\" name=\"";
        // line 348
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "_setting[general][update_mini_cart]\" ";
        if (($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "general", array()), "update_mini_cart", array()) && ($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "general", array()), "update_mini_cart", array()) == 1))) {
            echo " checked=\"checked\"";
        }
        echo "  id=\"general_update_mini_cart\" />
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-catalog-limit\">
                                                                <span data-toggle=\"tooltip\" title=\"";
        // line 354
        echo (isset($context["help_general_compress"]) ? $context["help_general_compress"] : null);
        echo "\">
                                                                   ";
        // line 355
        echo (isset($context["entry_general_compress"]) ? $context["entry_general_compress"] : null);
        echo "
                                                                </span>
                                                            </label>
                                                            <div class=\"col-sm-4\">
                                                                <input type=\"hidden\" value=\"0\" name=\"";
        // line 359
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "_setting[general][compress]\" />
                                                                <input type=\"checkbox\" value=\"1\" name=\"";
        // line 360
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "_setting[general][compress]\" ";
        if (($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "general", array()), "compress", array()) && ($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "general", array()), "compress", array()) == 1))) {
            echo " checked=\"checked\"";
        }
        echo "  id=\"general_compress\" />
                                                            </div>
                                                            <div class=\"col-sm-4\">
                                                                <button class=\"btn btn-primary btn-block\" id=\"compress_update\"><i class=\"fa fa-refresh\"></i> ";
        // line 363
        echo (isset($context["compress_update"]) ? $context["compress_update"] : null);
        echo "</button>
                                                            </div>
                                                            <div id=\"compress-notification\" class=\"col-sm-offset-4 help-block col-sm-8\" >
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class=\"col-md-6\">

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-catalog-limit\">
                                                                <span data-toggle=\"tooltip\" title=\"";
        // line 375
        echo (isset($context["help_general_min_order"]) ? $context["help_general_min_order"] : null);
        echo "\">
                                                                   ";
        // line 376
        echo (isset($context["entry_general_min_order"]) ? $context["entry_general_min_order"] : null);
        echo "
                                                                </span>
                                                            </label>
                                                            <div class=\"col-sm-8\">
                                                                <div class=\"input-group\">
                                                                    <label for=\"general_min_order_value\" id=\"label_general_min_order_value\" class=\"input-group-addon\">%s</label>
                                                                    ";
        // line 382
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "general", array()), "min_order", array()), "value", array()) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "general", array()), "min_order", array()), "value", array()) != ""))) {
            echo " 
                                                                    <input type=\"text\" value=\"";
            // line 383
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "general", array()), "min_order", array()), "value", array());
            echo "\" name=\"";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "_setting[general][min_order][value]\" id=\"general_min_order_value\" class=\"form-control\"/>
                                                                    ";
        } else {
            // line 384
            echo "  
                                                                    <input type=\"text\" value=\"0\" name=\"";
            // line 385
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "_setting[general][min_order][value]\" class=\"form-control\" id=\"general_min_order_value\"/>
                                                                    ";
        }
        // line 387
        echo "                                                                </div>

                                                                ";
        // line 389
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
                                                                <div id=\"tab_general_min_order_text_";
            // line 390
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"input-group\">
                                                                    <label class=\"input-group-addon\" for=\"general_min_order_text_";
            // line 391
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\"><img src=\"";
            echo $this->getAttribute($context["language"], "flag", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></label>
                                                                    <input type=\"text\" name=\"";
            // line 392
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "_setting[general][min_order][text][";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" id=\"general_min_order_text_";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "general", array()), "min_order", array()), "text", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "general", array()), "min_order", array()), "text", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : ((isset($context["text_value_min_order"]) ? $context["text_value_min_order"] : null)));
            echo "  \" class=\"form-control\" >
                                                                </div>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 394
        echo " 
                                                            </div>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"input-catalog-limit\">
                                                                <span data-toggle=\"tooltip\" title=\"";
        // line 400
        echo (isset($context["help_general_min_quantity"]) ? $context["help_general_min_quantity"] : null);
        echo "\">
                                                                   ";
        // line 401
        echo (isset($context["entry_general_min_quantity"]) ? $context["entry_general_min_quantity"] : null);
        echo "
                                                                </span>
                                                            </label>
                                                            <div class=\"col-sm-8\">
                                                                <div class=\"input-group\">
                                                                    <label for=\"general_min_quantity_value\" id=\"label_general_min_quantity_value\" class=\"input-group-addon\">%s</label>
                                                                    ";
        // line 407
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "general", array()), "min_quantity", array()), "value", array()) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "general", array()), "min_quantity", array()), "value", array()) != ""))) {
            echo " 
                                                                    <input type=\"text\" value=\"";
            // line 408
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "general", array()), "min_quantity", array()), "value", array());
            echo "\" name=\"";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "_setting[general][min_quantity][value]\" id=\"general_min_quantity_value\" class=\"form-control\"/>
                                                                    ";
        } else {
            // line 409
            echo "  
                                                                    <input type=\"text\" value=\"0\" name=\"";
            // line 410
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "_setting[general][min_quantity][value]\" class=\"form-control\" id=\"general_min_quantity_value\"/>
                                                                     ";
        }
        // line 412
        echo "                                                                </div>

                                                                ";
        // line 414
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
                                                                <div id=\"tab_general_min_quantity_text_";
            // line 415
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"input-group\">
                                                                    <label class=\"input-group-addon\" for=\"general_min_quantity_text_";
            // line 416
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\"><img src=\"";
            echo $this->getAttribute($context["language"], "flag", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></label>
                                                                    <input type=\"text\" name=\"";
            // line 417
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "_setting[general][min_quantity][text][";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" id=\"general_min_quantity_text_";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "general", array()), "min_quantity", array()), "text", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "general", array()), "min_quantity", array()), "text", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : ((isset($context["text_value_min_quantity"]) ? $context["text_value_min_quantity"] : null)));
            echo " \" class=\"form-control\" >
                                                                </div>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 419
        echo " 
                                                            </div>
                                                        </div>

                                                        ";
        // line 423
        if ((isset($context["config_files"]) ? $context["config_files"] : null)) {
            echo " 
                                                            <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"select_config\">";
            // line 425
            echo (isset($context["entry_config_files"]) ? $context["entry_config_files"] : null);
            echo "</label>
                                                            <div class=\"col-sm-8\">
                                                                <div class=\"input-group\">
                                                                    <select id=\"select_config\"  class=\"form-control\" name=\"";
            // line 428
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "_setting[general][config]\">
                                                                        ";
            // line 429
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["config_files"]) ? $context["config_files"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["config_file"]) {
                echo " 
                                                                        <option value=\"";
                // line 430
                echo $context["config_file"];
                echo "\" ";
                echo ((($context["config_file"] == (isset($context["config"]) ? $context["config"] : null))) ? ("selected=\"selected\"") : (""));
                echo " >";
                echo $context["config_file"];
                echo "</option>
                                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['config_file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 432
            echo "                                                                        ";
        }
        echo " 
                                                                    </select>
                                                                    <span class=\"input-group-btn\">
                                                                        <button class=\"btn btn-primary\" id=\"select_config_submit\" type=\"button\">Apply</button>
                                                                    </span>
                                                                </div>

                                                            </div>
                                                            </div>
                                                         
                                                      

                                                        <div class=\"form-group\">
                                                            <label class=\"col-sm-4 control-label\" for=\"button_delete_setting\">";
        // line 445
        echo (isset($context["entry_delete_setting"]) ? $context["entry_delete_setting"] : null);
        echo "</label>
                                                            <div class=\"col-sm-4\">
                                                                <a onclick=\"confirm('";
        // line 447
        echo (isset($context["text_confirm_delete_setting"]) ? $context["text_confirm_delete_setting"] : null);
        echo "') ? location.href = '";
        echo (isset($context["delete_setting"]) ? $context["delete_setting"] : null);
        echo "' : false;\" id=\"button_delete_setting\" class=\"btn btn-primary btn-block\"><i class=\"fa fa-trash-o\"></i> ";
        echo (isset($context["button_delete_setting"]) ? $context["button_delete_setting"] : null);
        echo "</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <hr/>
                                                <div class=\"form-group\">
                                                    <label class=\"col-sm-2 control-label\" for=\"button_delete_setting\">
                                                        <span data-toggle=\"tooltip\" title=\"";
        // line 456
        echo (isset($context["help_action_bulk_setting"]) ? $context["help_action_bulk_setting"] : null);
        echo "\">
                                                           ";
        // line 457
        echo (isset($context["entry_action_bulk_setting"]) ? $context["entry_action_bulk_setting"] : null);
        echo "
                                                        </span>
                                                    </label>
                                                    <div class=\"col-sm-2\">
                                                        <button class=\"btn btn-primary btn-block\" id=\"generate_setting\"><i class=\"fa fa-cog\"></i> ";
        // line 461
        echo (isset($context["button_create_bulk_setting"]) ? $context["button_create_bulk_setting"] : null);
        echo "</button>
                                                    </div>
                                                    <div class=\"col-sm-2\">
                                                        <button class=\"btn btn-primary btn-block\" id=\"save_bulk_setting\"><i class=\"fa fa-floppy-o\"></i> ";
        // line 464
        echo (isset($context["button_save_bulk_setting"]) ? $context["button_save_bulk_setting"] : null);
        echo "</button>
                                                    </div>
                                                    <div class=\"col-sm-6\" id=\"notification_setting\">
                                                    </div>
                                                </div>

                                                <div class=\"form-group\">
                                                    <label class=\"col-sm-2 control-label\" for=\"button_delete_setting\">
                                                        <span data-toggle=\"tooltip\" title=\"";
        // line 472
        echo (isset($context["help_bulk_setting"]) ? $context["help_bulk_setting"] : null);
        echo "\">
                                                           ";
        // line 473
        echo (isset($context["entry_bulk_setting"]) ? $context["entry_bulk_setting"] : null);
        echo "
                                                        </span>
                                                    </label>
                                                    <div class=\"col-sm-10\">
                                                        <textarea id=\"bulk_setting\" class=\"form-control\"></textarea>
                                                    </div>
                                                </div>

                                            </div>

\t\t\t\t\t\t\t\t\t        <div id=\"d_login\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t          
\t\t\t\t\t\t\t\t\t         \t<h3 class=\"page-header\">
\t\t\t\t\t\t\t\t\t         \t\t<span class=\"fa fa-key fa-fw\"></span> <span>";
        // line 486
        echo (isset($context["text_login"]) ? $context["text_login"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t\t         \t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bs-callout bs-callout-warning\">";
        // line 488
        echo (isset($context["text_need_full_version"]) ? $context["text_need_full_version"] : null);
        echo "</div>
\t\t\t\t\t\t\t\t\t         \t";
        // line 489
        if ((isset($context["social_login"]) ? $context["social_login"] : null)) {
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-catalog-limit\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
            // line 492
            echo (isset($context["help_social_login"]) ? $context["help_social_login"] : null);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 493
            echo (isset($context["entry_social_login"]) ? $context["entry_social_login"] : null);
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"0\" name=\"";
            // line 497
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "_setting[general][social_login]\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"1\" name=\"";
            // line 498
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "_setting[general][social_login]\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "general", array(), "array", false, true), "social_login", array(), "array", true, true) && ($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "general", array(), "array"), "social_login", array(), "array") == 1))) {
                echo "checked=\"checked\"";
            }
            echo " id=\"social_login\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-3 col-sm-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 504
            echo (isset($context["link_social_login_edit"]) ? $context["link_social_login_edit"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i> ";
            echo (isset($context["button_social_login_edit"]) ? $context["button_social_login_edit"] : null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t        \t";
        } else {
            // line 507
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bs-callout bs-callout-warning\">";
            // line 508
            echo (isset($context["text_social_login_required"]) ? $context["text_social_login_required"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t\t        \t";
        }
        // line 509
        echo " 

\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t<div id=\"d_payment_address\" class=\"tab-pane\">

\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"page-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-book fa-fw\"></span> <span>";
        // line 517
        echo (isset($context["text_payment_address"]) ? $context["text_payment_address"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t <div class=\"bs-callout bs-callout-warning\">";
        // line 519
        echo (isset($context["text_need_full_version"]) ? $context["text_need_full_version"] : null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t<div id=\"d_shipping_address\" class=\"tab-pane\">

\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"page-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-book fa-fw\"></span> <span>";
        // line 527
        echo (isset($context["text_shipping_address"]) ? $context["text_shipping_address"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bs-callout bs-callout-warning\">";
        // line 529
        echo (isset($context["text_need_full_version"]) ? $context["text_need_full_version"] : null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t<div id=\"d_shipping_method\" class=\"tab-pane\">

\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"page-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-truck fa-fw\"></span> <span>";
        // line 537
        echo (isset($context["text_shipping_method"]) ? $context["text_shipping_method"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bs-callout bs-callout-warning\">";
        // line 539
        echo (isset($context["text_need_full_version"]) ? $context["text_need_full_version"] : null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t   
\t\t\t\t\t\t\t\t\t\t\t<div id=\"d_payment_method\" class=\"tab-pane\">

\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"page-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-credit-card fa-fw\"></span> <span>";
        // line 546
        echo (isset($context["text_payment_method"]) ? $context["text_payment_method"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bs-callout bs-callout-warning\">";
        // line 548
        echo (isset($context["text_need_full_version"]) ? $context["text_need_full_version"] : null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div id=\"d_confirm\" class=\"tab-pane\">

\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"page-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-shopping-cart fa-fw\"></span> <span>";
        // line 554
        echo (isset($context["text_cart"]) ? $context["text_cart"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bs-callout bs-callout-warning\">";
        // line 556
        echo (isset($context["text_need_full_version"]) ? $context["text_need_full_version"] : null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t<div id=\"d_design\" class=\"tab-pane\">

\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"page-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-paint-brush fa-fw\"></span> <span>";
        // line 564
        echo (isset($context["text_design"]) ? $context["text_design"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t <div class=\"bs-callout bs-callout-warning\">";
        // line 566
        echo (isset($context["text_need_full_version"]) ? $context["text_need_full_version"] : null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div id=\"d_analytics\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"page-header\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-bar-chart fa-fw\"></span> <span>";
        // line 573
        echo (isset($context["text_analytics"]) ? $context["text_analytics"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t <div class=\"bs-callout bs-callout-warning\">";
        // line 575
        echo (isset($context["text_need_full_version"]) ? $context["text_need_full_version"] : null);
        echo "</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


<div class=\"tab-pane\" id=\"debug\" >
                            <div class=\"tab-body\">
                                <textarea id=\"textarea_debug_log\" wrap=\"off\" rows=\"15\" readonly=\"readonly\" class=\"form-control\">";
        // line 587
        echo (isset($context["debug_log"]) ? $context["debug_log"] : null);
        echo "</textarea>
                                <br/>

                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input_debug_file\">";
        // line 591
        echo (isset($context["entry_debug_file"]) ? $context["entry_debug_file"] : null);
        echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"text\" id=\"input_debug_file\" name=\"";
        // line 593
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "_debug_file\" value=\"";
        echo (isset($context["debug_file"]) ? $context["debug_file"] : null);
        echo "\"  class=\"form-control\"/>
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <div class=\"col-sm-10 col-sm-offset-2\">
                                        <a class=\"btn btn-danger\" id=\"clear_debug_file\">";
        // line 599
        echo (isset($context["button_clear"]) ? $context["button_clear"] : null);
        echo "</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class=\"tab-pane\" id=\"support\" >
                            <div class=\"tab-body\">
                            </div>
                        </div>

                        <div class=\"tab-pane\" id=\"instruction\" >
                            <div class=\"tab-body\">
                               ";
        // line 613
        echo (isset($context["text_instruction"]) ? $context["text_instruction"] : null);
        echo "
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    ";
        // line 622
        $context["column_1"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "design", array()), "column_width", array()), 1, array(), "array") / 12) * 100);
        // line 623
        echo "    ";
        $context["column_2"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "design", array()), "column_width", array()), 2, array(), "array") / 12) * 100);
        // line 624
        echo "    ";
        $context["column_3"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "design", array()), "column_width", array()), 3, array(), "array") / 12) * 100);
        // line 625
        echo "    ";
        $context["column_4"] = ((isset($context["column_2"]) ? $context["column_2"] : null) + (isset($context["column_3"]) ? $context["column_3"] : null));
        // line 626
        echo "

<style>
    #column_width_1,
    #column_1{
        width: ";
        // line 631
        echo (isset($context["column_1"]) ? $context["column_1"] : null);
        echo "%;
    }
    #column_width_2,
    #column_2{
        width: ";
        // line 635
        echo (isset($context["column_2"]) ? $context["column_2"] : null);
        echo "%;
    }
    #column_width_3,
    #column_3{
        width: ";
        // line 639
        echo (isset($context["column_3"]) ? $context["column_3"] : null);
        echo "%;
    }

    #column_4{
        width: ";
        // line 643
        echo (isset($context["column_4"]) ? $context["column_4"] : null);
        echo "%
    }
</style>

<script type=\"text/javascript\"><!--
    \$('#column_slider').slider({
        'tooltip': 'hide'
    }).on('slide', function(ev){
        var val1 = Number(ev.value[0]);
        var pos1 = (val1 / 12) * 100;
        var val2 = Number(ev.value[1]);
        var pos2 = (val2 / 12) * 100;
        \$(\"#column_1, #column_width_1\").css({'width' : pos1+'%'})
        \$(\"#column_width_1\").val(val1)
        \$(\"#column_2, #column_width_2\").css({'width' : pos2-pos1 +'%'})
        \$(\"#column_width_2\").val(val2 - val1)
        \$(\"#column_3, #column_width_3\").css({'width' : Number(100-pos2) +'%'})
        \$(\"#column_width_3\").val(Number(12 - val2))
        \$(\"#column_4\").css({'width' : Number(100 - pos1) +'%'})
        \$(\"#column_width_4\").val(Number(12 - val1))
        console.log(ev.value[0])
        console.log(\$('#form').serializeArray())
    })
    var adjustment;
    var group = \$(\"#column_groups ul.column\").sortable({
        group: 'column',
        pullPlaceholder: false,
        // animation on drop
        onDrop: function  (item, targetContainer, _super) {
            var clonedItem = \$('<li/>').css({height: 0})
            item.before(clonedItem)
            clonedItem.animate({'height': item.height()})
            item.animate(clonedItem.position(), function  () {
                clonedItem.detach()
                _super(item)
            })
            console.log(\$('#form').serializeArray())
            var data = group.sortable(\"serialize\").get();
            var jsonString = JSON.stringify(data, null, ' ');
            \$.each(data, function(column, column_value) {
                \$.each(column_value, function(row, row_value) {
                    console.log(row_value['id'] + ' column: ' + column + 1 + 'row: ' + row)
                    \$('#step_' + row_value['id'] + ' .data-column').val(column + 1)
                    \$('#step_' + row_value['id'] + ' .data-row').val(row)
                });
            });
        },
        // set item relative to cursor position
        onDragStart: function (\$item, container, _super) {
            var offset = \$item.offset(),
                    pointer = container.rootGroup.pointer

            adjustment = {
                left: pointer.left - offset.left,
                top: pointer.top - offset.top
            }

            _super(\$item, container)
        },
        onDrag: function (\$item, position) {
            \$item.css({
                left: position.left - adjustment.left,
                top: position.top - adjustment.top
            })
        }
    })

    \$('.sortable > tr').tsort({attr:'sort-data'});


    \$(function () {
        \$(\"[type='checkbox']\").bootstrapSwitch({
            'onColor': 'success',
            'onText': '";
        // line 716
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "',
            'offText': '";
        // line 717
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "',
        });
        \$('[data-toggle=\"popover\"]').popover()

        \$('.qc-step').each(function(){
            \$(this).appendTo('.qc-col-' + \$(this).attr('data-col'));
            })
        \$('.qc-step').tsort({attr:'data-row'});
        \$(\".table-sortable\").sortable({
            containerSelector: 'table',
            itemPath: '',
            itemSelector: 'tr',
            distance: '10',
            pullPlaceholder: false,
            placeholder: '<tr class=\"placeholder\"><td colspan=\"5\" /></tr>',
            onDragStart: function (item, container, _super) {
                var offset = item.offset(),
                        pointer = container.rootGroup.pointer

                adjustment = {
                    left: pointer.left - offset.left,
                    top: pointer.top - offset.top
                }

                _super(item, container)
            },
            onDrag: function (item, position) {
                item.css({
                    left: position.left - adjustment.left,
                    top: position.top - adjustment.top
                })
            },
            onDrop: function  (item, container, _super) {
                item.closest('tbody').find('tr').each(function (i, row) {
                    console.log(i)
                    \$(row).find('.sort').val(i)

                })

                _super(item)
            }
        })

        \$('#select_config_submit').on('click', function(){
            var config = \$('#select_config').val();
            var setting_id = '";
        // line 762
        echo (isset($context["setting_id"]) ? $context["setting_id"] : null);
        echo "';
            var store_id = '";
        // line 763
        echo (isset($context["store_id"]) ? $context["store_id"] : null);
        echo "';
            \$('#content').append('<form action=\"";
        // line 764
        echo (isset($context["module_link"]) ? $context["module_link"] : null);
        echo (((isset($context["stores"]) ? $context["stores"] : null)) ? ("&store_id=' + store_id + '") : (""));
        echo " ";
        echo (((isset($context["setting_id"]) ? $context["setting_id"] : null)) ? ("&setting_id=' + setting_id + '") : (""));
        echo " \" id=\"config_update\" method=\"post\" style=\"display:none;\"><input type=\"text\" name=\"config\" value=\"' + config + '\" /><input type=\"text\" name=\"setting_id\" value=\"' + setting_id + '\" /></form>');
            \$('#config_update').submit();
        })

        \$('body').on('click', '#save_and_stay', function(){
            \$.ajax({
                type: 'post',
                url: \$('#form').attr('action') + '&save',
                data: \$('#form').serialize(),
                beforeSend: function() {
                    \$('#form').fadeTo('slow', 0.5);
                },
                complete: function() {
                    \$('#form').fadeTo('slow', 1);
                },
                success: function(response) {
                    console.log(response);
                }
            });
        });
        \$('body').on('click', '#button_update', function(){
            \$.ajax({
                url: '";
        // line 786
        echo (isset($context["update"]) ? $context["update"] : null);
        echo "',
                type: 'post',
                dataType: 'json',
                beforeSend: function() {
                    \$('#button_update').find('.fa-refresh').addClass('fa-spin');
                },
                complete: function() {
                    \$('#button_update').find('.fa-refresh').removeClass('fa-spin');
                },
                success: function(json) {
                    console.log(json);
                    if (json['error']){
                        \$('#notification_update').html('<div class=\"alert alert-danger m-b-none\">' + json['error'] + '</div>')
                    }

                    if (json['warning']){
                        \$html = '';
                        if (json['update']){
                            \$.each(json['update'], function(k, v) {
                                \$html += '<div>Version: ' + k + '</div><div>' + v + '</div>';
                            });
                        }
                        \$('#notification_update').html('<div class=\"alert alert-warning alert-inline\">' + json['warning'] + \$html + '</div>')
                    }

                    if (json['success']){
                        \$('#notification_update').html('<div class=\"alert alert-success alert-inline\">' + json['success'] + '</div>')
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
            });
        });
        \$('body').on('click', '#clear_debug_file', function(){
            \$.ajax({
                url: '";
        // line 822
        echo (isset($context["clear_debug_file"]) ? $context["clear_debug_file"] : null);
        echo "',
                type: 'post',
                dataType: 'json',
                data: 'debug_file=";
        // line 825
        echo (isset($context["debug_file"]) ? $context["debug_file"] : null);
        echo "',
                beforeSend: function() {
                    \$('#form').fadeTo('slow', 0.5);
                },
                complete: function() {
                    \$('#form').fadeTo('slow', 1);
                },
                success: function(json) {
                    \$('.alert').remove();
                    console.log(json);
                    if (json['error']){
                        \$('#debug .tab-body').prepend('<div class=\"alert alert-danger\">' + json['error'] + '</div>')
                    }

                    if (json['success']){
                        \$('#debug .tab-body').prepend('<div class=\"alert alert-success\">' + json['success'] + '</div>')
                        \$('#textarea_debug_log').val('');
                    }
                }
            });
        });

        \$('body').on('click', '.view-setting', function(){
            var setting_id = \$(this).attr('data-setting-id');
            location.href = updateURLParameter(\$(location).attr('href'), 'setting_id', setting_id);
            return false;
        });
        \$('body').on('click', '#create_setting', function(){
            \$.ajax({
                url: '";
        // line 854
        echo (isset($context["create_setting"]) ? $context["create_setting"] : null);
        echo "',
                type: 'post',
                dataType: 'json',
                data:  \$('#form').serialize(),
                beforeSend: function() {
                    \$('#form').fadeTo('slow', 0.5);
                },
                complete: function() {
                    \$('#form').fadeTo('slow', 1);
                },
                success: function(json) {
                    \$('.alert').remove();
                    console.log(json);
                    if (json['error']){
                        \$('#content > .container-fluid').prepend('<div class=\"alert alert-warning\">' + json['error'] + '</div>')
                    }

                    if (json['redirect']){
                        location.href = json['redirect'];
                    }
                }
            });
            return false;
        });
        \$('body').on('click', '#generate_setting', function () {
            \$('#bulk_setting').val(JSON.stringify(\$('#form').serializeObject().";
        // line 879
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "_setting));
            return false;
        })

         \$('body').on('click', '#compress_update', function (e) {
            \$.ajax({
                url: '";
        // line 885
        echo (isset($context["update_compress_url"]) ? $context["update_compress_url"] : null);
        echo "',
                type: 'post',
                dataType: 'json',
                data: 'setting_id=";
        // line 888
        echo (isset($context["setting_id"]) ? $context["setting_id"] : null);
        echo "&setting=' + \$('#bulk_setting').val(),
                beforeSend: function () {
                    \$('#form').fadeTo('slow', 0.5);
                },
                complete: function () {
                    \$('#form').fadeTo('slow', 1);
                },
                success: function (json) {
                    \$('.alert').remove();
                    console.log(json);
                    if (json['success']) {
                        \$('#compress-notification').prepend('<div class=\"alert alert-success alert-inline\">' + json['success'] + '</div>')
                    }
                    if (json['error']) {
                        \$('#compress-notification').prepend('<div class=\"alert alert-warning alert-inline\">' + json['error'] + '</div>')
                    }
                }
            });
            e.preventDefault();
        });
        \$('body').on('click', '#save_bulk_setting', function () {
            \$.ajax({
                url: '";
        // line 910
        echo (isset($context["save_bulk_setting"]) ? $context["save_bulk_setting"] : null);
        echo "',
                type: 'post',
                dataType: 'json',
                data: 'setting_id=";
        // line 913
        echo (isset($context["setting_id"]) ? $context["setting_id"] : null);
        echo "&setting=' + \$('#bulk_setting').val(),
                beforeSend: function () {
                    \$('#form').fadeTo('slow', 0.5);
                },
                complete: function () {
                    \$('#form').fadeTo('slow', 1);
                },
                success: function (json) {
                    \$('.alert').remove();
                    console.log(json);
                    if (json['error']) {
                        \$('#notification_setting').prepend('<div class=\"alert alert-warning alert-inline\">' + json['error'] + '</div>')
                    }

                    if (json['redirect']) {
                        location.href = json['redirect'];
                    }
                }
            });
            return false;
        });
    });

    function updateURLParameter(url, param, paramVal) {
        var TheAnchor = null;
        var newAdditionalURL = \"\";
        var tempArray = url.split(\"?\");
        var baseURL = tempArray[0];
        var additionalURL = tempArray[1];
        var temp = \"\";
        if (additionalURL) {
            var tmpAnchor = additionalURL.split(\"#\");
            var TheParams = tmpAnchor[0];
            TheAnchor = tmpAnchor[1];
            if (TheAnchor)
                additionalURL = TheParams;
            tempArray = additionalURL.split(\"&\");
            for (i = 0; i < tempArray.length; i++) {
                if (tempArray[i].split('=')[0] != param) {
                    newAdditionalURL += temp + tempArray[i];
                    temp = \"&\";
                }
            }
        }
        else {
            var tmpAnchor = baseURL.split(\"#\");
            var TheParams = tmpAnchor[0];
            TheAnchor = tmpAnchor[1];
            if (TheParams)
                baseURL = TheParams;
        }

        if (TheAnchor)
            paramVal += \"#\" + TheAnchor;
        var rows_txt = temp + \"\" + param + \"=\" + paramVal;
        return baseURL + \"?\" + newAdditionalURL + rows_txt;
    }

    \$('body').on('change', '#payment_address_country_id_input select', function () {
        \$.ajax({
            url: 'index.php?route=extension/module/d_quickcheckout/getZone&user_token=";
        // line 973
        echo (isset($context["token"]) ? $context["token"] : null);
        echo "&country_id=' + this.value,
            dataType: 'json',
            success: function(json) {
                html = '<option value=\"\">";
        // line 976
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';
                if (json && json != '') {
                    for (i = 0; i < json.length; i++) {
                        html += '<option value=\"' + json[i]['value'] + '\"';
                        html += '>' + json[i]['name'] + '</option>';
                    }
                } else {
                    html += '<option value=\"0\" selected=\"selected\">";
        // line 983
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
                }

                \$('#payment_address_zone_id_input select').html(html);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    \$('body').on('change', '#shipping_address_country_id_input select', function() {
        \$.ajax({
            url: 'index.php?route=extension/module/d_quickcheckout/getZone&user_token=";
        // line 995
        echo (isset($context["token"]) ? $context["token"] : null);
        echo "&country_id=' + this.value,
            dataType: 'json',
            success: function(json) {
                html = '<option value=\"\">";
        // line 998
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';
                if (json && json != '') {
                    for (i = 0; i < json.length; i++) {
                        html += '<option value=\"' + json[i]['value'] + '\"';
                        html += '>' + json[i]['name'] + '</option>';
                    }
                } else {
                    html += '<option value=\"0\" selected=\"selected\">";
        // line 1005
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
                }

                \$('#shipping_address_zone_id_input select').html(html);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
    \$('body').on('click', '.pagination li a', function() {
        var pag_url = \$(this).attr('href');

        \$.ajax({
            url: pag_url,
            type: 'get',
            data: pag_url,
            dataType: 'html',
            success: function(html) {
                var data_analytics = \$(html).find(\"#d_analytics\").html();
                \$(\"#d_analytics\").html(data_analytics);
            }
        });
        return false;

    });
    //--></script>

";
        // line 1033
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/d_quickcheckout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1764 => 1033,  1733 => 1005,  1723 => 998,  1717 => 995,  1702 => 983,  1692 => 976,  1686 => 973,  1623 => 913,  1617 => 910,  1592 => 888,  1586 => 885,  1577 => 879,  1549 => 854,  1517 => 825,  1511 => 822,  1472 => 786,  1444 => 764,  1440 => 763,  1436 => 762,  1388 => 717,  1384 => 716,  1308 => 643,  1301 => 639,  1294 => 635,  1287 => 631,  1280 => 626,  1277 => 625,  1274 => 624,  1271 => 623,  1269 => 622,  1257 => 613,  1240 => 599,  1229 => 593,  1224 => 591,  1217 => 587,  1202 => 575,  1197 => 573,  1187 => 566,  1182 => 564,  1171 => 556,  1166 => 554,  1157 => 548,  1152 => 546,  1142 => 539,  1137 => 537,  1126 => 529,  1121 => 527,  1110 => 519,  1105 => 517,  1095 => 509,  1090 => 508,  1087 => 507,  1078 => 504,  1065 => 498,  1061 => 497,  1054 => 493,  1050 => 492,  1044 => 489,  1040 => 488,  1035 => 486,  1019 => 473,  1015 => 472,  1004 => 464,  998 => 461,  991 => 457,  987 => 456,  971 => 447,  966 => 445,  949 => 432,  937 => 430,  931 => 429,  927 => 428,  921 => 425,  916 => 423,  910 => 419,  895 => 417,  885 => 416,  881 => 415,  875 => 414,  871 => 412,  866 => 410,  863 => 409,  856 => 408,  852 => 407,  843 => 401,  839 => 400,  831 => 394,  816 => 392,  806 => 391,  802 => 390,  796 => 389,  792 => 387,  787 => 385,  784 => 384,  777 => 383,  773 => 382,  764 => 376,  760 => 375,  745 => 363,  735 => 360,  731 => 359,  724 => 355,  720 => 354,  707 => 348,  703 => 347,  696 => 343,  692 => 342,  678 => 336,  666 => 327,  654 => 322,  650 => 321,  643 => 317,  639 => 316,  626 => 310,  622 => 309,  615 => 305,  611 => 304,  598 => 298,  594 => 297,  587 => 293,  583 => 292,  572 => 286,  565 => 282,  561 => 281,  550 => 273,  526 => 254,  522 => 253,  517 => 251,  503 => 242,  496 => 238,  492 => 237,  479 => 231,  475 => 230,  470 => 228,  458 => 219,  451 => 215,  443 => 210,  422 => 191,  402 => 181,  394 => 176,  384 => 171,  378 => 170,  372 => 169,  364 => 166,  360 => 165,  355 => 163,  351 => 162,  346 => 161,  342 => 160,  338 => 158,  333 => 157,  329 => 156,  324 => 154,  315 => 147,  308 => 143,  300 => 138,  290 => 133,  282 => 128,  274 => 123,  266 => 118,  258 => 113,  250 => 108,  242 => 103,  238 => 101,  236 => 100,  230 => 97,  214 => 84,  209 => 81,  202 => 77,  197 => 74,  194 => 73,  187 => 69,  182 => 66,  180 => 65,  174 => 62,  165 => 56,  157 => 53,  152 => 50,  145 => 46,  142 => 45,  139 => 44,  133 => 41,  129 => 39,  126 => 38,  119 => 34,  116 => 33,  114 => 32,  107 => 27,  96 => 25,  92 => 24,  85 => 22,  78 => 20,  74 => 19,  69 => 18,  64 => 15,  58 => 14,  50 => 12,  42 => 10,  39 => 9,  35 => 8,  30 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="form-inline pull-right">*/
/*                 {% if stores|length >1 %}*/
/*                 <select class="form-control" onChange="location = '{{ module_link }} & store_id=' + $(this).val()">*/
/*                     {% for store in stores %}*/
/*                         {% if store.store_id  ==  store_id %}*/
/*                             <option value="{{ store.store_id }}" selected="selected" >{{ store.name }}</option>*/
/*                         {% else %}*/
/*                             <option value="{{ store.store_id }}" >{{ store.name }}</option>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/* */
/*                 </select>*/
/*                  {% endif %}*/
/*                 <button id="save_and_stay" data-toggle="tooltip" title="{{ button_save_and_stay }}" class="btn btn-success"><i class="fa fa-save"></i></button>*/
/*                 <button type="submit" form="form" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*                 <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a>*/
/*             </div>*/
/*             <h1>{{ heading_title }} {{ version }}</h1>*/
/*             <ul class="breadcrumb">*/
/*                 {% for breadcrumb in breadcrumbs %}*/
/*                 <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="container-fluid">*/
/*         {% if error.warning %}*/
/*         <div class="alert alert-danger">*/
/*             <i class="fa fa-exclamation-circle"></i> {{ error.warning }}*/
/*             <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*         {% endif %}*/
/*         {% if error.shopunity %}*/
/*         <div class="alert alert-danger">*/
/*             <i class="fa fa-exclamation-circle"></i>*/
/*            {{ error.shopunity }}*/
/*         </div>*/
/*         {% endif %}*/
/*         {% if success %}*/
/*         <div class="alert alert-success">*/
/*             <i class="fa fa-exclamation-circle"></i> {{ success }}*/
/*             <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }} {{ setting_name }}</h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form" class="form-horizontal">*/
/* */
/*                     <ul  class="nav nav-tabs">*/
/*                         <li class="active">*/
/*                             <a href="#setting" data-toggle="tab">*/
/*                                 <span class="fa fa-cog"></span>*/
/*                                {{ tab_setting }}*/
/*                             </a>*/
/*                         </li>*/
/*                         {% if debug %}*/
/*                         <li>*/
/*                             <a href="#debug" data-toggle="tab">*/
/*                                 <span class="fa fa-bug"></span>*/
/*                                {{ tab_debug }}*/
/*                             </a>*/
/*                         </li>*/
/*                         {% endif %}*/
/*                         {% if setting.support %}*/
/*                         <li>*/
/*                             <a href="#support" data-toggle="tab">*/
/*                                 <span class="fa fa-support"></span>*/
/*                                {{ tab_support }}*/
/*                             </a>*/
/*                         </li>*/
/*                         {% endif %}*/
/*                         <li>*/
/*                             <a href="#instruction" data-toggle="tab">*/
/*                                 <span class="fa fa-graduation-cap"></span>*/
/*                                {{ tab_instruction }}*/
/*                             </a>*/
/*                         </li>*/
/*                     </ul>*/
/* */
/*                     <div class="tab-content">*/
/*                         <div class="tab-pane active" id="setting" >*/
/*                             <div class="tab-body">*/
/*                                 <div class="row">*/
/*                                     <div class="col-sm-2">*/
/*                                         <ul class="nav nav-pills s-nav-stacked">*/
/*                                             <li class="active">*/
/*                                                 <a href="#d_home" data-toggle="tab">*/
/*                                                     <span class="fa fa-home fa-fw"></span> <span>{{ text_home }}</span>*/
/*                                                 </a>*/
/*                                             </li>*/
/*                                             {% if setting_id %}*/
/*                                             <li>*/
/*                                                 <a href="#d_general" data-toggle="tab">*/
/*                                                     <i class="fa fa-cog fa-fw"></i> <span>{{ text_general }}</span>*/
/*                                                 </a>*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="#d_login" data-toggle="tab">*/
/*                                                     <i class="fa fa-key fa-fw"></i> <span>{{ text_login }}</span>*/
/*                                                 </a>*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="#d_payment_address" data-toggle="tab">*/
/*                                                     <i class="fa fa-book fa-fw"></i> <span>{{ text_payment_address }}</span>*/
/*                                                 </a>*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="#d_shipping_address" data-toggle="tab">*/
/*                                                     <i class="fa fa-book fa-fw"></i> <span>{{ text_shipping_address }}</span>*/
/*                                                 </a>*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="#d_shipping_method" data-toggle="tab">*/
/*                                                     <i class="fa fa-truck fa-fw"></i> <span>{{ text_shipping_method }}</span>*/
/*                                                 </a>*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="#d_payment_method" data-toggle="tab">*/
/*                                                     <i class="fa fa-credit-card fa-fw"></i> <span>{{ text_payment_method }}</span>*/
/*                                                 </a>*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="#d_confirm" data-toggle="tab">*/
/*                                                     <i class="fa fa-shopping-cart fa-fw"></i> <span>{{ text_cart }} & {{ text_confirm }}</span>*/
/*                                                 </a>*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="#d_design" data-toggle="tab">*/
/*                                                     <i class="fa fa-paint-brush fa-fw"></i> <span>{{ text_design }}</span>*/
/*                                                 </a>*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="#d_analytics" data-toggle="tab">*/
/*                                                     <i class="fa fa-bar-chart fa-fw"></i> <span>{{ text_analytics }}</span>*/
/*                                                 </a>*/
/*                                             </li>*/
/*                                            {% endif %}*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                     <div class="col-sm-10">*/
/*                                         <div class="tab-content">*/
/* */
/*                                         <div id="d_home" class="tab-pane active">*/
/*                                                 <div class="page-header">*/
/*                                                     <h3><span class="fa fa-home"></span> <span>{{ text_home }}</span></h3>*/
/*                                                 </div>*/
/*                                                 {% if not settings %} */
/*                                                 <div class="bs-callout bs-callout-warning">{{ text_intro_create_setting }}</div>*/
/*                                                 {% endif %} */
/*                                                 <div class="row">*/
/*                                                     {% for setting_value in settings %}*/
/*                                                     <div id="setting_id_{{ setting_value.setting_id }}" class="col-lg-3 col-md-4 col-sm-6 ">*/
/*                                                         <div class="tile {{setting_value.setting_id ==  setting_id ? 'selected' : '' }}">*/
/*                                                             <a href="#" class="view-setting " data-setting-id="{{ setting_value.setting_id }}" >*/
/*                                                                 <div class="tile-heading clearfix">*/
/*                                                                    {{ setting_value.name }}*/
/*                                                                     <span class="pull-right" data-toggle="tooltip" title="{{ help_average_time }}" >{{ ((setting_value.average_checkout_time / 100 )|round() )|date("H:i:s") }}</span>*/
/*                                                                 </div>*/
/*                                                                 <div class="tile-body">*/
/*                                                                     <a href="{{ setting_value.href }} " target="_blank" data-toggle="tooltip" title="{{ help_view_shop }}"><i class="fa fa-eye"></i></a>*/
/*                                                                     <a href="#" class="view-setting " data-setting-id="{{ setting_value.setting_id }}" data-toggle="tooltip" title="{{ help_view_setting }}"><i class="fa fa-pencil"></i></a>*/
/*                                                                     <h3 class="pull-right" data-toggle="tooltip" title="{{ help_average_rating }}">{{(setting_value.average_rating * 100)|round() }}%</h3>*/
/*                                                                 </div>*/
/*                                                             </a>*/
/*                                                             <div class="tile-footer form-inline clearfix">*/
/*                                                                 <div class="">*/
/*                                                                    {{ text_probability }}:*/
/*                                                                     <div class="input-group pull-right probability">*/
/*                                                                         <span class="input-group-btn probability-down">*/
/*                                                                             <button class="btn btn-default btn-sm " type="button"><i class="fa fa-chevron-down"></i></button>*/
/*                                                                         </span>*/
/*                                                                         <input type="text" style="width:50px; text-align:center" class="form-control input-sm probability-value" name="{{ id }}_setting_cycle[{{ setting_value.setting_id }}]" value="{{ setting_cycle.setting_value.setting_id ? setting_cycle.setting_value.setting_id : '' }}1  " aria-describedby="sizing-addon2" />*/
/*                                                                         <span class="input-group-btn probability-up">*/
/*                                                                             <button class="btn btn-default btn-sm " type="button"><i class="fa fa-chevron-up"></i></button>*/
/*                                                                         </span>*/
/*                                                                     </div>*/
/*                                                                 </div>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     {% endfor %}*/
/*                                                     <script>*/
/*                                                                 $('.probability .probability-down').on('click', function(){*/
/*                                                         $(this).next().val($(this).next().val() - 1);*/
/*                                                                 $('.probability-value').trigger('change');*/
/*                                                         })*/
/*                                                                 $('.probability .probability-up').on('click', function(){*/
/*                                                         $(this).prev().val(Number($(this).prev().val()) + 1);*/
/*                                                                 $('.probability-value').trigger('change');*/
/*                                                         })*/
/* */
/*                                                                 $('.probability-value').on('change', function(){*/
/*                                                         if ($(this).val() < 0){*/
/*                                                         $(this).val(0)*/
/*                                                         }*/
/*                                                         })*/
/*                                                     </script>*/
/*                                                     <div class="col-lg-3 col-md-4 col-sm-6">*/
/*                                                         <div class="tile">*/
/*                                                             <div class="tile-heading">*/
/*                                                                {{ text_create_setting_heading }}*/
/*                                                             </div>*/
/*                                                             <a href="#" id="create_setting" class="create-setting" >*/
/*                                                                 <div class="tile-body">*/
/*                                                                     <i class="fa fa-plus"></i>*/
/*                                                                     <h3 class="pull-right">{{ text_create_setting }}</h3>*/
/*                                                                 </div>*/
/*                                                             </a>*/
/*                                                             <div class="tile-footer">*/
/*                                                                {{ text_create_setting_probability }}*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                                 <hr/>*/
/*                                                 <div class="row">*/
/*                                                     <div class="col-md-6">*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label" for="input_status">{{ entry_status }}</label>*/
/*                                                             <div class="col-sm-8">*/
/*                                                                 <input type="hidden" value="0" name="{{ id }}_status" id="input_status" class="form-control" />*/
/*                                                                 <input type="checkbox"  value="1" name="{{ id }}_status" id="input_status" {% if attribute(_context,id~'_status') %}  checked="checked" {% endif %} class="form-control" />*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label" for="input-catalog-limit">*/
/*                                                                 <span data-toggle="tooltip" title="{{ help_trigger }}">*/
/*                                                                    {{ entry_trigger }}*/
/*                                                                 </span>*/
/*                                                             </label>*/
/*                                                             <div class="col-sm-8">*/
/*                                                                 <input type="text" value="{{ attribute(_context,id~'_trigger') }}" name="{{ id }}_trigger" id="trigger" class="form-control"/>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                     <div class="col-md-6">*/
/*                                                         <div class="form-group">*/
/*                                                             */
/*                                                         </div>*/
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label" for="input_debug">{{ entry_debug }}</label>*/
/*                                                             <div class="col-sm-8">*/
/*                                                                 <input type="hidden" name="{{ id }}_debug" value="0" />*/
/*                                                                 <input type="checkbox" id="input_debug" name="{{ id }}_debug" {{ debug ? 'checked="checked"': ''}} value="1" />*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                         */
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <script>*/
/*                                                 $('.tab-content a[data-toggle]').click(function(){*/
/*                                                     $('.panel .nav-stacked li.active').removeClass('active')*/
/*                                                     $('.panel .nav-stacked li a[href="' + $(this).attr('href') + '"]').parent().addClass('active')*/
/*                                                     */
/*                                                 })*/
/*                                             </script>*/
/* */
/* */
/*                                         <div id="d_general" class="tab-pane">*/
/* */
/*                                                 <h3 class="page-header">*/
/*                                                     <span class="fa fa-cog fa-fw"></span> <span>{{ text_general }}</span>*/
/*                                                 </h3>*/
/* */
/*                                                 <div class="row">*/
/*                                                     <div class="col-md-6">*/
/* */
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label" for="input_setting_name">*/
/*                                                                 <span data-toggle="tooltip" title="{{ help_name }}">*/
/*                                                                    {{ entry_name }}*/
/*                                                                 </span>*/
/*                                                             </label>*/
/*                                                             <div class="col-sm-8">*/
/*                                                                 <input type="text" value="{{ setting_name }}" name="{{ id }}_setting[name]" id="input_setting_name" class="form-control"/>*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label" for="input-catalog-limit">*/
/*                                                                 <span data-toggle="tooltip" title="{{ help_general_clear_session }}">*/
/*                                                                    {{ entry_general_clear_session }}*/
/*                                                                 </span>*/
/*                                                             </label>*/
/*                                                             <div class="col-sm-8">*/
/*                                                                 <input type="hidden" value="0" name="{{ id }}_setting[general][clear_session]" />*/
/*                                                                 <input type="checkbox" value="1" name="{{ id }}_setting[general][clear_session]" {% if setting.general.clear_session  and  setting.general.clear_session  ==  1 %} checked="checked"{% endif %}  id="general_clear_session" />*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label" for="input-catalog-limit">*/
/*                                                                 <span data-toggle="tooltip" title="{{ help_general_login_refresh }}">*/
/*                                                                    {{ entry_general_login_refresh }}*/
/*                                                                 </span>*/
/*                                                             </label>*/
/*                                                             <div class="col-sm-8">*/
/*                                                                 <input type="hidden" value="0" name="{{ id }}_setting[general][login_refresh]" />*/
/*                                                                 <input type="checkbox" value="1" name="{{ id }}_setting[general][login_refresh]" {% if setting.general.login_refresh  and  setting.general.login_refresh  ==  1 %} checked="checked"{% endif %}  id="general_login_refresh" />*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label" for="input-catalog-limit">*/
/*                                                                 <span data-toggle="tooltip" title="{{ help_general_analytics_event }}">*/
/*                                                                    {{ entry_general_analytics_event }}*/
/*                                                                 </span>*/
/*                                                             </label>*/
/*                                                             <div class="col-sm-2">*/
/*                                                                 <input type="hidden" value="0" name="{{ id }}_setting[general][analytics_event]" />*/
/*                                                                 <input type="checkbox" value="1" name="{{ id }}_setting[general][analytics_event]" {% if setting.general.analytics_event  and  setting.general.analytics_event  ==  1 %} checked="checked"{% endif %}  id="general_analytics_event" />*/
/*                                                             </div>*/
/*                                                             <script>*/
/*                                                                 $("#general_analytics_event").on('switchChange.bootstrapSwitch', function(event, state){*/
/*                                                                     if (state){*/
/*                                                                         if ( {{ analytics ? 0 : 1 }} ){*/
/*                                                                             $("#analytics_message").removeClass('hidden');*/
/*                                                                         }*/
/*                                                                     } else{*/
/*                                                                         $("#analytics_message").addClass('hidden');*/
/*                                                                     }*/
/*                                                                 })*/
/*                                                             </script>*/
/*                                                             <div class="col-sm-6">*/
/*                                                                 <div id="analytics_message" class="alert alert-danger alert-inline    {% if setting.general.analytics_event  !=  1  or   setting.general.analytics_event  ==  1  and  analytics%} {{   'hidden'  }}{% endif %} "  >{{ warning_analytics_event }}</div>*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label" for="input-catalog-limit">*/
/*                                                                 <span data-toggle="tooltip" title="{{ help_general_update_mini_cart }}">*/
/*                                                                    {{ entry_general_update_mini_cart }}*/
/*                                                                 </span>*/
/*                                                             </label>*/
/*                                                             <div class="col-sm-8">*/
/*                                                                 <input type="hidden" value="0" name="{{ id }}_setting[general][update_mini_cart]" />*/
/*                                                                 <input type="checkbox" value="1" name="{{ id }}_setting[general][update_mini_cart]" {% if setting.general.update_mini_cart  and  setting.general.update_mini_cart  ==  1 %} checked="checked"{% endif %}  id="general_update_mini_cart" />*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label" for="input-catalog-limit">*/
/*                                                                 <span data-toggle="tooltip" title="{{ help_general_compress }}">*/
/*                                                                    {{ entry_general_compress }}*/
/*                                                                 </span>*/
/*                                                             </label>*/
/*                                                             <div class="col-sm-4">*/
/*                                                                 <input type="hidden" value="0" name="{{ id }}_setting[general][compress]" />*/
/*                                                                 <input type="checkbox" value="1" name="{{ id }}_setting[general][compress]" {% if setting.general.compress  and  setting.general.compress  ==  1 %} checked="checked"{% endif %}  id="general_compress" />*/
/*                                                             </div>*/
/*                                                             <div class="col-sm-4">*/
/*                                                                 <button class="btn btn-primary btn-block" id="compress_update"><i class="fa fa-refresh"></i> {{ compress_update }}</button>*/
/*                                                             </div>*/
/*                                                             <div id="compress-notification" class="col-sm-offset-4 help-block col-sm-8" >*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                     </div>*/
/* */
/*                                                     <div class="col-md-6">*/
/* */
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label" for="input-catalog-limit">*/
/*                                                                 <span data-toggle="tooltip" title="{{ help_general_min_order }}">*/
/*                                                                    {{ entry_general_min_order }}*/
/*                                                                 </span>*/
/*                                                             </label>*/
/*                                                             <div class="col-sm-8">*/
/*                                                                 <div class="input-group">*/
/*                                                                     <label for="general_min_order_value" id="label_general_min_order_value" class="input-group-addon">%s</label>*/
/*                                                                     {% if setting.general.min_order.value  and  setting.general.min_order.value  !=  "" %} */
/*                                                                     <input type="text" value="{{ setting.general.min_order.value }}" name="{{ id }}_setting[general][min_order][value]" id="general_min_order_value" class="form-control"/>*/
/*                                                                     {% else %}  */
/*                                                                     <input type="text" value="0" name="{{ id }}_setting[general][min_order][value]" class="form-control" id="general_min_order_value"/>*/
/*                                                                     {% endif %}*/
/*                                                                 </div>*/
/* */
/*                                                                 {% for language in languages %} */
/*                                                                 <div id="tab_general_min_order_text_{{ language.language_id }}" class="input-group">*/
/*                                                                     <label class="input-group-addon" for="general_min_order_text_{{ language.language_id }}" title="{{ language.name }}"><img src="{{ language.flag }}" title="{{ language.name }}" /></label>*/
/*                                                                     <input type="text" name="{{ id }}_setting[general][min_order][text][{{ language.language_id }}]" id="general_min_order_text_{{ language.language_id }}" value="{{ setting.general.min_order.text[language.language_id] ? setting.general.min_order.text[language.language_id] : text_value_min_order }}  " class="form-control" >*/
/*                                                                 </div>*/
/*                                                                 {% endfor %} */
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label" for="input-catalog-limit">*/
/*                                                                 <span data-toggle="tooltip" title="{{ help_general_min_quantity }}">*/
/*                                                                    {{ entry_general_min_quantity }}*/
/*                                                                 </span>*/
/*                                                             </label>*/
/*                                                             <div class="col-sm-8">*/
/*                                                                 <div class="input-group">*/
/*                                                                     <label for="general_min_quantity_value" id="label_general_min_quantity_value" class="input-group-addon">%s</label>*/
/*                                                                     {% if setting.general.min_quantity.value  and  setting.general.min_quantity.value  !=  ""%} */
/*                                                                     <input type="text" value="{{ setting.general.min_quantity.value }}" name="{{ id }}_setting[general][min_quantity][value]" id="general_min_quantity_value" class="form-control"/>*/
/*                                                                     {% else %}  */
/*                                                                     <input type="text" value="0" name="{{ id }}_setting[general][min_quantity][value]" class="form-control" id="general_min_quantity_value"/>*/
/*                                                                      {% endif %}*/
/*                                                                 </div>*/
/* */
/*                                                                 {% for language in languages %} */
/*                                                                 <div id="tab_general_min_quantity_text_{{ language.language_id }}" class="input-group">*/
/*                                                                     <label class="input-group-addon" for="general_min_quantity_text_{{ language.language_id }}" title="{{ language.name }}"><img src="{{ language.flag }}" title="{{ language.name }}" /></label>*/
/*                                                                     <input type="text" name="{{ id }}_setting[general][min_quantity][text][{{ language.language_id }}]" id="general_min_quantity_text_{{ language.language_id }}" value="{{ setting.general.min_quantity.text[language.language_id] ? setting.general.min_quantity.text[language.language_id] : text_value_min_quantity }} " class="form-control" >*/
/*                                                                 </div>*/
/*                                                                 {% endfor %} */
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                         {% if config_files %} */
/*                                                             <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label" for="select_config">{{ entry_config_files }}</label>*/
/*                                                             <div class="col-sm-8">*/
/*                                                                 <div class="input-group">*/
/*                                                                     <select id="select_config"  class="form-control" name="{{ id }}_setting[general][config]">*/
/*                                                                         {% for config_file in config_files %} */
/*                                                                         <option value="{{ config_file }}" {{ config_file  ==  config ? 'selected="selected"' : ''}} >{{ config_file }}</option>*/
/*                                                                         {% endfor %}*/
/*                                                                         {% endif %} */
/*                                                                     </select>*/
/*                                                                     <span class="input-group-btn">*/
/*                                                                         <button class="btn btn-primary" id="select_config_submit" type="button">Apply</button>*/
/*                                                                     </span>*/
/*                                                                 </div>*/
/* */
/*                                                             </div>*/
/*                                                             </div>*/
/*                                                          */
/*                                                       */
/* */
/*                                                         <div class="form-group">*/
/*                                                             <label class="col-sm-4 control-label" for="button_delete_setting">{{ entry_delete_setting }}</label>*/
/*                                                             <div class="col-sm-4">*/
/*                                                                 <a onclick="confirm('{{ text_confirm_delete_setting }}') ? location.href = '{{ delete_setting }}' : false;" id="button_delete_setting" class="btn btn-primary btn-block"><i class="fa fa-trash-o"></i> {{ button_delete_setting }}</a>*/
/*                                                             </div>*/
/*                                                         </div>*/
/* */
/*                                                     </div>*/
/*                                                 </div>*/
/*                                                 <hr/>*/
/*                                                 <div class="form-group">*/
/*                                                     <label class="col-sm-2 control-label" for="button_delete_setting">*/
/*                                                         <span data-toggle="tooltip" title="{{ help_action_bulk_setting }}">*/
/*                                                            {{ entry_action_bulk_setting }}*/
/*                                                         </span>*/
/*                                                     </label>*/
/*                                                     <div class="col-sm-2">*/
/*                                                         <button class="btn btn-primary btn-block" id="generate_setting"><i class="fa fa-cog"></i> {{ button_create_bulk_setting }}</button>*/
/*                                                     </div>*/
/*                                                     <div class="col-sm-2">*/
/*                                                         <button class="btn btn-primary btn-block" id="save_bulk_setting"><i class="fa fa-floppy-o"></i> {{ button_save_bulk_setting }}</button>*/
/*                                                     </div>*/
/*                                                     <div class="col-sm-6" id="notification_setting">*/
/*                                                     </div>*/
/*                                                 </div>*/
/* */
/*                                                 <div class="form-group">*/
/*                                                     <label class="col-sm-2 control-label" for="button_delete_setting">*/
/*                                                         <span data-toggle="tooltip" title="{{ help_bulk_setting }}">*/
/*                                                            {{ entry_bulk_setting }}*/
/*                                                         </span>*/
/*                                                     </label>*/
/*                                                     <div class="col-sm-10">*/
/*                                                         <textarea id="bulk_setting" class="form-control"></textarea>*/
/*                                                     </div>*/
/*                                                 </div>*/
/* */
/*                                             </div>*/
/* */
/* 									        <div id="d_login" class="tab-pane">*/
/* 									          */
/* 									         	<h3 class="page-header">*/
/* 									         		<span class="fa fa-key fa-fw"></span> <span>{{ text_login }}</span>*/
/* 									         	</h3>*/
/* 												<div class="bs-callout bs-callout-warning">{{ text_need_full_version }}</div>*/
/* 									         	{% if (social_login) %} */
/* 													<div class="form-group">*/
/* 														<label class="col-sm-3 control-label" for="input-catalog-limit">*/
/* 															<span data-toggle="tooltip" title="{{ help_social_login }}">*/
/* 																{{ entry_social_login }} */
/* 															</span>*/
/* 														</label>*/
/* 														<div class="col-sm-9">*/
/* 															<input type="hidden" value="0" name="{{ id }}_setting[general][social_login]" />*/
/* 															<input type="checkbox" value="1" name="{{ id }}_setting[general][social_login]" {% if (setting['general']['social_login'] is defined and setting['general']['social_login'] == 1) %}checked="checked"{% endif %} id="social_login" />*/
/* 														</div>*/
/* 													</div>*/
/* */
/* 													<div class="form-group">*/
/* 														<div class="col-sm-offset-3 col-sm-9">*/
/* 															<a href="{{ link_social_login_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i> {{ button_social_login_edit}}</a>*/
/* 														</div>*/
/* 													</div> */
/* 									        	{% else %} */
/* 													<div class="bs-callout bs-callout-warning">{{ text_social_login_required }}</div>*/
/* 									        	{% endif %} */
/* */
/* 											</div>*/
/* */
/* */
/* 											<div id="d_payment_address" class="tab-pane">*/
/* */
/* 												<h3 class="page-header">*/
/* 													<span class="fa fa-book fa-fw"></span> <span>{{ text_payment_address }}</span>*/
/* 												</h3>*/
/* 												 <div class="bs-callout bs-callout-warning">{{ text_need_full_version }}</div>*/
/* 												 */
/* 											</div>*/
/* */
/* */
/* 											<div id="d_shipping_address" class="tab-pane">*/
/* */
/* 												<h3 class="page-header">*/
/* 													<span class="fa fa-book fa-fw"></span> <span>{{ text_shipping_address }}</span>*/
/* 												</h3>*/
/* 												<div class="bs-callout bs-callout-warning">{{ text_need_full_version }}</div>*/
/* 												*/
/* 											</div>*/
/* */
/* */
/* 											<div id="d_shipping_method" class="tab-pane">*/
/* */
/* 												<h3 class="page-header">*/
/* 													<span class="fa fa-truck fa-fw"></span> <span>{{ text_shipping_method }}</span>*/
/* 												</h3>*/
/* 												<div class="bs-callout bs-callout-warning">{{ text_need_full_version }}</div>*/
/* 												*/
/* 											</div>*/
/* 									   */
/* 											<div id="d_payment_method" class="tab-pane">*/
/* */
/* 												<h3 class="page-header">*/
/* 													<span class="fa fa-credit-card fa-fw"></span> <span>{{ text_payment_method }}</span>*/
/* 												</h3>*/
/* 												<div class="bs-callout bs-callout-warning">{{ text_need_full_version }}</div>*/
/* 											</div>*/
/* */
/* 											<div id="d_confirm" class="tab-pane">*/
/* */
/* 												<h3 class="page-header">*/
/* 													<span class="fa fa-shopping-cart fa-fw"></span> <span>{{ text_cart }}</span>*/
/* 												</h3>*/
/* 												<div class="bs-callout bs-callout-warning">{{ text_need_full_version }}</div>*/
/* 												*/
/* 											</div>*/
/* */
/* */
/* 											<div id="d_design" class="tab-pane">*/
/* */
/* 												<h3 class="page-header">*/
/* 													<span class="fa fa-paint-brush fa-fw"></span> <span>{{ text_design }}</span>*/
/* 												</h3>*/
/* 												 <div class="bs-callout bs-callout-warning">{{ text_need_full_version }}</div>*/
/* 												 */
/* 											</div>*/
/* */
/* 											<div id="d_analytics" class="tab-pane">*/
/* 												*/
/* 													<h3 class="page-header">*/
/* 														<span class="fa fa-bar-chart fa-fw"></span> <span>{{ text_analytics }}</span>*/
/* 													</h3>*/
/* 													 <div class="bs-callout bs-callout-warning">{{ text_need_full_version }}</div>*/
/* 											</div>*/
/* */
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* */
/* */
/* <div class="tab-pane" id="debug" >*/
/*                             <div class="tab-body">*/
/*                                 <textarea id="textarea_debug_log" wrap="off" rows="15" readonly="readonly" class="form-control">{{ debug_log }}</textarea>*/
/*                                 <br/>*/
/* */
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-2 control-label" for="input_debug_file">{{ entry_debug_file }}</label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <input type="text" id="input_debug_file" name="{{ id }}_debug_file" value="{{ debug_file }}"  class="form-control"/>*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                                 <div class="form-group">*/
/*                                     <div class="col-sm-10 col-sm-offset-2">*/
/*                                         <a class="btn btn-danger" id="clear_debug_file">{{ button_clear }}</a>*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="tab-pane" id="support" >*/
/*                             <div class="tab-body">*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="tab-pane" id="instruction" >*/
/*                             <div class="tab-body">*/
/*                                {{ text_instruction }}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/*     {% set column_1 = setting.design.column_width[1] / 12 * 100 %}*/
/*     {% set column_2 = setting.design.column_width[2] / 12 * 100 %}*/
/*     {% set column_3 = setting.design.column_width[3] / 12 * 100 %}*/
/*     {% set column_4 = column_2 + column_3 %}*/
/* */
/* */
/* <style>*/
/*     #column_width_1,*/
/*     #column_1{*/
/*         width: {{ column_1 }}%;*/
/*     }*/
/*     #column_width_2,*/
/*     #column_2{*/
/*         width: {{ column_2 }}%;*/
/*     }*/
/*     #column_width_3,*/
/*     #column_3{*/
/*         width: {{ column_3 }}%;*/
/*     }*/
/* */
/*     #column_4{*/
/*         width: {{ column_4 }}%*/
/*     }*/
/* </style>*/
/* */
/* <script type="text/javascript"><!--*/
/*     $('#column_slider').slider({*/
/*         'tooltip': 'hide'*/
/*     }).on('slide', function(ev){*/
/*         var val1 = Number(ev.value[0]);*/
/*         var pos1 = (val1 / 12) * 100;*/
/*         var val2 = Number(ev.value[1]);*/
/*         var pos2 = (val2 / 12) * 100;*/
/*         $("#column_1, #column_width_1").css({'width' : pos1+'%'})*/
/*         $("#column_width_1").val(val1)*/
/*         $("#column_2, #column_width_2").css({'width' : pos2-pos1 +'%'})*/
/*         $("#column_width_2").val(val2 - val1)*/
/*         $("#column_3, #column_width_3").css({'width' : Number(100-pos2) +'%'})*/
/*         $("#column_width_3").val(Number(12 - val2))*/
/*         $("#column_4").css({'width' : Number(100 - pos1) +'%'})*/
/*         $("#column_width_4").val(Number(12 - val1))*/
/*         console.log(ev.value[0])*/
/*         console.log($('#form').serializeArray())*/
/*     })*/
/*     var adjustment;*/
/*     var group = $("#column_groups ul.column").sortable({*/
/*         group: 'column',*/
/*         pullPlaceholder: false,*/
/*         // animation on drop*/
/*         onDrop: function  (item, targetContainer, _super) {*/
/*             var clonedItem = $('<li/>').css({height: 0})*/
/*             item.before(clonedItem)*/
/*             clonedItem.animate({'height': item.height()})*/
/*             item.animate(clonedItem.position(), function  () {*/
/*                 clonedItem.detach()*/
/*                 _super(item)*/
/*             })*/
/*             console.log($('#form').serializeArray())*/
/*             var data = group.sortable("serialize").get();*/
/*             var jsonString = JSON.stringify(data, null, ' ');*/
/*             $.each(data, function(column, column_value) {*/
/*                 $.each(column_value, function(row, row_value) {*/
/*                     console.log(row_value['id'] + ' column: ' + column + 1 + 'row: ' + row)*/
/*                     $('#step_' + row_value['id'] + ' .data-column').val(column + 1)*/
/*                     $('#step_' + row_value['id'] + ' .data-row').val(row)*/
/*                 });*/
/*             });*/
/*         },*/
/*         // set item relative to cursor position*/
/*         onDragStart: function ($item, container, _super) {*/
/*             var offset = $item.offset(),*/
/*                     pointer = container.rootGroup.pointer*/
/* */
/*             adjustment = {*/
/*                 left: pointer.left - offset.left,*/
/*                 top: pointer.top - offset.top*/
/*             }*/
/* */
/*             _super($item, container)*/
/*         },*/
/*         onDrag: function ($item, position) {*/
/*             $item.css({*/
/*                 left: position.left - adjustment.left,*/
/*                 top: position.top - adjustment.top*/
/*             })*/
/*         }*/
/*     })*/
/* */
/*     $('.sortable > tr').tsort({attr:'sort-data'});*/
/* */
/* */
/*     $(function () {*/
/*         $("[type='checkbox']").bootstrapSwitch({*/
/*             'onColor': 'success',*/
/*             'onText': '{{ text_yes}}',*/
/*             'offText': '{{ text_no }}',*/
/*         });*/
/*         $('[data-toggle="popover"]').popover()*/
/* */
/*         $('.qc-step').each(function(){*/
/*             $(this).appendTo('.qc-col-' + $(this).attr('data-col'));*/
/*             })*/
/*         $('.qc-step').tsort({attr:'data-row'});*/
/*         $(".table-sortable").sortable({*/
/*             containerSelector: 'table',*/
/*             itemPath: '',*/
/*             itemSelector: 'tr',*/
/*             distance: '10',*/
/*             pullPlaceholder: false,*/
/*             placeholder: '<tr class="placeholder"><td colspan="5" /></tr>',*/
/*             onDragStart: function (item, container, _super) {*/
/*                 var offset = item.offset(),*/
/*                         pointer = container.rootGroup.pointer*/
/* */
/*                 adjustment = {*/
/*                     left: pointer.left - offset.left,*/
/*                     top: pointer.top - offset.top*/
/*                 }*/
/* */
/*                 _super(item, container)*/
/*             },*/
/*             onDrag: function (item, position) {*/
/*                 item.css({*/
/*                     left: position.left - adjustment.left,*/
/*                     top: position.top - adjustment.top*/
/*                 })*/
/*             },*/
/*             onDrop: function  (item, container, _super) {*/
/*                 item.closest('tbody').find('tr').each(function (i, row) {*/
/*                     console.log(i)*/
/*                     $(row).find('.sort').val(i)*/
/* */
/*                 })*/
/* */
/*                 _super(item)*/
/*             }*/
/*         })*/
/* */
/*         $('#select_config_submit').on('click', function(){*/
/*             var config = $('#select_config').val();*/
/*             var setting_id = '{{ setting_id }}';*/
/*             var store_id = '{{ store_id }}';*/
/*             $('#content').append('<form action="{{ module_link }}{{ stores ? "&store_id=' + store_id + '" : '' }} {{ setting_id ? "&setting_id=' + setting_id + '" : '' }} " id="config_update" method="post" style="display:none;"><input type="text" name="config" value="' + config + '" /><input type="text" name="setting_id" value="' + setting_id + '" /></form>');*/
/*             $('#config_update').submit();*/
/*         })*/
/* */
/*         $('body').on('click', '#save_and_stay', function(){*/
/*             $.ajax({*/
/*                 type: 'post',*/
/*                 url: $('#form').attr('action') + '&save',*/
/*                 data: $('#form').serialize(),*/
/*                 beforeSend: function() {*/
/*                     $('#form').fadeTo('slow', 0.5);*/
/*                 },*/
/*                 complete: function() {*/
/*                     $('#form').fadeTo('slow', 1);*/
/*                 },*/
/*                 success: function(response) {*/
/*                     console.log(response);*/
/*                 }*/
/*             });*/
/*         });*/
/*         $('body').on('click', '#button_update', function(){*/
/*             $.ajax({*/
/*                 url: '{{ update }}',*/
/*                 type: 'post',*/
/*                 dataType: 'json',*/
/*                 beforeSend: function() {*/
/*                     $('#button_update').find('.fa-refresh').addClass('fa-spin');*/
/*                 },*/
/*                 complete: function() {*/
/*                     $('#button_update').find('.fa-refresh').removeClass('fa-spin');*/
/*                 },*/
/*                 success: function(json) {*/
/*                     console.log(json);*/
/*                     if (json['error']){*/
/*                         $('#notification_update').html('<div class="alert alert-danger m-b-none">' + json['error'] + '</div>')*/
/*                     }*/
/* */
/*                     if (json['warning']){*/
/*                         $html = '';*/
/*                         if (json['update']){*/
/*                             $.each(json['update'], function(k, v) {*/
/*                                 $html += '<div>Version: ' + k + '</div><div>' + v + '</div>';*/
/*                             });*/
/*                         }*/
/*                         $('#notification_update').html('<div class="alert alert-warning alert-inline">' + json['warning'] + $html + '</div>')*/
/*                     }*/
/* */
/*                     if (json['success']){*/
/*                         $('#notification_update').html('<div class="alert alert-success alert-inline">' + json['success'] + '</div>')*/
/*                     }*/
/*                 },*/
/*                 error: function(xhr, ajaxOptions, thrownError) {*/
/*                     console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                 }*/
/*             });*/
/*         });*/
/*         $('body').on('click', '#clear_debug_file', function(){*/
/*             $.ajax({*/
/*                 url: '{{ clear_debug_file }}',*/
/*                 type: 'post',*/
/*                 dataType: 'json',*/
/*                 data: 'debug_file={{ debug_file }}',*/
/*                 beforeSend: function() {*/
/*                     $('#form').fadeTo('slow', 0.5);*/
/*                 },*/
/*                 complete: function() {*/
/*                     $('#form').fadeTo('slow', 1);*/
/*                 },*/
/*                 success: function(json) {*/
/*                     $('.alert').remove();*/
/*                     console.log(json);*/
/*                     if (json['error']){*/
/*                         $('#debug .tab-body').prepend('<div class="alert alert-danger">' + json['error'] + '</div>')*/
/*                     }*/
/* */
/*                     if (json['success']){*/
/*                         $('#debug .tab-body').prepend('<div class="alert alert-success">' + json['success'] + '</div>')*/
/*                         $('#textarea_debug_log').val('');*/
/*                     }*/
/*                 }*/
/*             });*/
/*         });*/
/* */
/*         $('body').on('click', '.view-setting', function(){*/
/*             var setting_id = $(this).attr('data-setting-id');*/
/*             location.href = updateURLParameter($(location).attr('href'), 'setting_id', setting_id);*/
/*             return false;*/
/*         });*/
/*         $('body').on('click', '#create_setting', function(){*/
/*             $.ajax({*/
/*                 url: '{{ create_setting }}',*/
/*                 type: 'post',*/
/*                 dataType: 'json',*/
/*                 data:  $('#form').serialize(),*/
/*                 beforeSend: function() {*/
/*                     $('#form').fadeTo('slow', 0.5);*/
/*                 },*/
/*                 complete: function() {*/
/*                     $('#form').fadeTo('slow', 1);*/
/*                 },*/
/*                 success: function(json) {*/
/*                     $('.alert').remove();*/
/*                     console.log(json);*/
/*                     if (json['error']){*/
/*                         $('#content > .container-fluid').prepend('<div class="alert alert-warning">' + json['error'] + '</div>')*/
/*                     }*/
/* */
/*                     if (json['redirect']){*/
/*                         location.href = json['redirect'];*/
/*                     }*/
/*                 }*/
/*             });*/
/*             return false;*/
/*         });*/
/*         $('body').on('click', '#generate_setting', function () {*/
/*             $('#bulk_setting').val(JSON.stringify($('#form').serializeObject().{{ id }}_setting));*/
/*             return false;*/
/*         })*/
/* */
/*          $('body').on('click', '#compress_update', function (e) {*/
/*             $.ajax({*/
/*                 url: '{{ update_compress_url }}',*/
/*                 type: 'post',*/
/*                 dataType: 'json',*/
/*                 data: 'setting_id={{ setting_id }}&setting=' + $('#bulk_setting').val(),*/
/*                 beforeSend: function () {*/
/*                     $('#form').fadeTo('slow', 0.5);*/
/*                 },*/
/*                 complete: function () {*/
/*                     $('#form').fadeTo('slow', 1);*/
/*                 },*/
/*                 success: function (json) {*/
/*                     $('.alert').remove();*/
/*                     console.log(json);*/
/*                     if (json['success']) {*/
/*                         $('#compress-notification').prepend('<div class="alert alert-success alert-inline">' + json['success'] + '</div>')*/
/*                     }*/
/*                     if (json['error']) {*/
/*                         $('#compress-notification').prepend('<div class="alert alert-warning alert-inline">' + json['error'] + '</div>')*/
/*                     }*/
/*                 }*/
/*             });*/
/*             e.preventDefault();*/
/*         });*/
/*         $('body').on('click', '#save_bulk_setting', function () {*/
/*             $.ajax({*/
/*                 url: '{{ save_bulk_setting }}',*/
/*                 type: 'post',*/
/*                 dataType: 'json',*/
/*                 data: 'setting_id={{ setting_id }}&setting=' + $('#bulk_setting').val(),*/
/*                 beforeSend: function () {*/
/*                     $('#form').fadeTo('slow', 0.5);*/
/*                 },*/
/*                 complete: function () {*/
/*                     $('#form').fadeTo('slow', 1);*/
/*                 },*/
/*                 success: function (json) {*/
/*                     $('.alert').remove();*/
/*                     console.log(json);*/
/*                     if (json['error']) {*/
/*                         $('#notification_setting').prepend('<div class="alert alert-warning alert-inline">' + json['error'] + '</div>')*/
/*                     }*/
/* */
/*                     if (json['redirect']) {*/
/*                         location.href = json['redirect'];*/
/*                     }*/
/*                 }*/
/*             });*/
/*             return false;*/
/*         });*/
/*     });*/
/* */
/*     function updateURLParameter(url, param, paramVal) {*/
/*         var TheAnchor = null;*/
/*         var newAdditionalURL = "";*/
/*         var tempArray = url.split("?");*/
/*         var baseURL = tempArray[0];*/
/*         var additionalURL = tempArray[1];*/
/*         var temp = "";*/
/*         if (additionalURL) {*/
/*             var tmpAnchor = additionalURL.split("#");*/
/*             var TheParams = tmpAnchor[0];*/
/*             TheAnchor = tmpAnchor[1];*/
/*             if (TheAnchor)*/
/*                 additionalURL = TheParams;*/
/*             tempArray = additionalURL.split("&");*/
/*             for (i = 0; i < tempArray.length; i++) {*/
/*                 if (tempArray[i].split('=')[0] != param) {*/
/*                     newAdditionalURL += temp + tempArray[i];*/
/*                     temp = "&";*/
/*                 }*/
/*             }*/
/*         }*/
/*         else {*/
/*             var tmpAnchor = baseURL.split("#");*/
/*             var TheParams = tmpAnchor[0];*/
/*             TheAnchor = tmpAnchor[1];*/
/*             if (TheParams)*/
/*                 baseURL = TheParams;*/
/*         }*/
/* */
/*         if (TheAnchor)*/
/*             paramVal += "#" + TheAnchor;*/
/*         var rows_txt = temp + "" + param + "=" + paramVal;*/
/*         return baseURL + "?" + newAdditionalURL + rows_txt;*/
/*     }*/
/* */
/*     $('body').on('change', '#payment_address_country_id_input select', function () {*/
/*         $.ajax({*/
/*             url: 'index.php?route=extension/module/d_quickcheckout/getZone&user_token={{ token }}&country_id=' + this.value,*/
/*             dataType: 'json',*/
/*             success: function(json) {*/
/*                 html = '<option value="">{{ text_select }}</option>';*/
/*                 if (json && json != '') {*/
/*                     for (i = 0; i < json.length; i++) {*/
/*                         html += '<option value="' + json[i]['value'] + '"';*/
/*                         html += '>' + json[i]['name'] + '</option>';*/
/*                     }*/
/*                 } else {*/
/*                     html += '<option value="0" selected="selected">{{ text_none }}</option>';*/
/*                 }*/
/* */
/*                 $('#payment_address_zone_id_input select').html(html);*/
/*             },*/
/*             error: function(xhr, ajaxOptions, thrownError) {*/
/*                 console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     });*/
/*     $('body').on('change', '#shipping_address_country_id_input select', function() {*/
/*         $.ajax({*/
/*             url: 'index.php?route=extension/module/d_quickcheckout/getZone&user_token={{ token }}&country_id=' + this.value,*/
/*             dataType: 'json',*/
/*             success: function(json) {*/
/*                 html = '<option value="">{{ text_select }}</option>';*/
/*                 if (json && json != '') {*/
/*                     for (i = 0; i < json.length; i++) {*/
/*                         html += '<option value="' + json[i]['value'] + '"';*/
/*                         html += '>' + json[i]['name'] + '</option>';*/
/*                     }*/
/*                 } else {*/
/*                     html += '<option value="0" selected="selected">{{ text_none }}</option>';*/
/*                 }*/
/* */
/*                 $('#shipping_address_zone_id_input select').html(html);*/
/*             },*/
/*             error: function(xhr, ajaxOptions, thrownError) {*/
/*                 console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*             }*/
/*         });*/
/*     });*/
/*     $('body').on('click', '.pagination li a', function() {*/
/*         var pag_url = $(this).attr('href');*/
/* */
/*         $.ajax({*/
/*             url: pag_url,*/
/*             type: 'get',*/
/*             data: pag_url,*/
/*             dataType: 'html',*/
/*             success: function(html) {*/
/*                 var data_analytics = $(html).find("#d_analytics").html();*/
/*                 $("#d_analytics").html(data_analytics);*/
/*             }*/
/*         });*/
/*         return false;*/
/* */
/*     });*/
/*     //--></script>*/
/* */
/* {{ footer }}*/
