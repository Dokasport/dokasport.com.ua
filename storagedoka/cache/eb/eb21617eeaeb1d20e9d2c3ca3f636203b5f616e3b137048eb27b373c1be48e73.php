<?php

/* unishop2/template/information/contact.twig */
class __TwigTemplate_9a5707cc4cfc0f04259682dabaa5da519165287f3dfd582c01f00e8a24c33112 extends Twig_Template
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
<div id=\"contact-page\" class=\"container\">
\t<ul class=\"breadcrumb ";
        // line 3
        echo (((isset($context["menu_expanded"]) ? $context["menu_expanded"] : null)) ? ("col-md-offset-3 col-lg-offset-3 col-xxl-offset-4") : (""));
        echo "\">
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["breadcrumb"]) {
            // line 5
            echo "\t\t\t";
            if ((($context["key"] + 1) < twig_length_filter($this->env, (isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null)))) {
                // line 6
                echo "\t\t\t\t<li><a href=\"";
                echo $this->getAttribute($context["breadcrumb"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["breadcrumb"], "text", array());
                echo "</a></li>
\t\t\t";
            } else {
                // line 8
                echo "\t\t\t\t<li>";
                echo $this->getAttribute($context["breadcrumb"], "text", array());
                echo "</li>
\t\t\t";
            }
            // line 10
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t</ul>
\t<div class=\"row\">
\t\t";
        // line 13
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
\t\t";
        // line 14
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 15
            echo "\t\t\t";
            $context["class"] = "col-sm-4 col-md-4 col-lg-6";
            // line 16
            echo "\t\t";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 17
            echo "\t\t\t";
            $context["class"] = "col-sm-8 col-md-9 col-lg-9 col-xxl-16";
            // line 18
            echo "\t\t";
        } else {
            // line 19
            echo "\t\t\t";
            $context["class"] = "col-sm-12";
            // line 20
            echo "\t\t";
        }
        // line 21
        echo "\t\t<div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
\t\t\t";
        // line 22
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
\t\t\t<div class=\"heading-h1\"><h1>";
        // line 23
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1></div>
\t\t\t";
        // line 24
        if ((isset($context["image"]) ? $context["image"] : null)) {
            // line 25
            echo "\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t<img src=\"";
            // line 27
            echo (isset($context["image"]) ? $context["image"] : null);
            echo "\" alt=\"";
            echo (isset($context["store"]) ? $context["store"] : null);
            echo "\" title=\"";
            echo (isset($context["store"]) ? $context["store"] : null);
            echo "\" class=\"img-responsive\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<hr />
\t\t\t";
        }
        // line 32
        echo "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<div class=\"heading\"><span>";
        // line 34
        echo (isset($context["store"]) ? $context["store"] : null);
        echo "</span></div>
\t\t\t\t\t<address>
\t\t\t\t\t\t<strong>";
        // line 36
        echo (isset($context["text_address"]) ? $context["text_address"] : null);
        echo "</strong><br />
\t\t\t\t\t\t<span>";
        // line 37
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "</span>
\t\t\t\t\t</address>
\t\t\t\t\t";
        // line 39
        if ((isset($context["geocode"]) ? $context["geocode"] : null)) {
            // line 40
            echo "\t\t\t\t\t\t<a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter((isset($context["geocode"]) ? $context["geocode"] : null));
            echo "&hl=";
            echo (isset($context["geocode_hl"]) ? $context["geocode_hl"] : null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
            echo (isset($context["button_map"]) ? $context["button_map"] : null);
            echo "</a>
\t\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t\t";
        if ((isset($context["open"]) ? $context["open"] : null)) {
            // line 43
            echo "\t\t\t\t\t\t<hr />
\t\t\t\t\t\t<strong>";
            // line 44
            echo (isset($context["text_open"]) ? $context["text_open"] : null);
            echo "</strong><br />
\t\t\t\t\t\t<span>";
            // line 45
            echo (isset($context["open"]) ? $context["open"] : null);
            echo "</span><br />
\t\t\t\t\t\t<br />
\t\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<div class=\"heading\"><span>";
        // line 50
        echo (isset($context["text_contacts"]) ? $context["text_contacts"] : null);
        echo "</span></div>
\t\t\t\t\t<ul class=\"contact-list list-unstyled\">
\t\t\t\t\t\t<li class=\"contact-list__item uni-href\" data-href=\"tel:";
        // line 52
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\"><i class=\"contact-list__icon fa fa-phone fa-fw\"></i>";
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "</li>
\t\t\t\t\t\t";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) ? $context["contacts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 54
            echo "\t\t\t\t\t\t\t<li class=\"contact-list__item uni-href\" data-href=\"";
            echo $this->getAttribute($context["contact"], "href", array());
            echo "\">";
            if (($this->getAttribute($context["contact"], "icon", array()) && twig_in_filter("fa-", $this->getAttribute($context["contact"], "icon", array())))) {
                echo "<i class=\"contact-list__icon ";
                echo $this->getAttribute($context["contact"], "icon", array());
                echo " fa-fw\"></i>";
            } elseif ($this->getAttribute($context["contact"], "icon", array())) {
                echo "<img src=\"image/";
                echo $this->getAttribute($context["contact"], "icon", array());
                echo "\" alt=\"\" />";
            }
            echo $this->getAttribute($context["contact"], "number", array());
            echo "</li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t\t\t\t";
        if ((isset($context["fax"]) ? $context["fax"] : null)) {
            // line 57
            echo "\t\t\t\t\t\t\t<li class=\"contact-list__item\"><i class=\"fa fa-fax fa-fw\" aria-hidden=\"true\"></i>";
            echo (isset($context["fax"]) ? $context["fax"] : null);
            echo "</li>
\t\t\t\t\t\t";
        }
        // line 59
        echo "\t\t\t\t\t\t";
        if ((isset($context["shop_email"]) ? $context["shop_email"] : null)) {
            // line 60
            echo "\t\t\t\t\t\t\t<li class=\"contact-list__item uni-href\" data-href=\"mailto:";
            echo (isset($context["shop_email"]) ? $context["shop_email"] : null);
            echo "\"><i class=\"contact-list__icon far fa-envelope fa-fw\" aria-hidden=\"true\"></i>";
            echo (isset($context["shop_email"]) ? $context["shop_email"] : null);
            echo "</li>
\t\t\t\t\t\t";
        }
        // line 62
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t<hr class=\"visible-xs\" />
\t\t\t\t</div>
\t\t\t\t";
        // line 65
        if ((isset($context["comment"]) ? $context["comment"] : null)) {
            // line 66
            echo "\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<div class=\"heading\"><span>";
            // line 67
            echo (isset($context["text_contact_comment"]) ? $context["text_contact_comment"] : null);
            echo "</span></div>
\t\t\t\t\t\t";
            // line 68
            echo (isset($context["comment"]) ? $context["comment"] : null);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 71
        echo "\t\t\t</div>
\t\t\t<hr />
\t\t\t";
        // line 73
        if ((isset($context["text_in_contacts"]) ? $context["text_in_contacts"] : null)) {
            // line 74
            echo "\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t";
            // line 76
            echo (isset($context["text_in_contacts"]) ? $context["text_in_contacts"] : null);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<hr />
\t\t\t";
        }
        // line 81
        echo "\t\t\t";
        if ((isset($context["locations"]) ? $context["locations"] : null)) {
            // line 82
            echo "\t\t\t\t<h3>";
            echo (isset($context["text_store"]) ? $context["text_store"] : null);
            echo "</h3>
\t\t\t\t<div class=\"panel-group\" id=\"accordion\">
\t\t\t\t\t";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) ? $context["locations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 85
                echo "\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t<h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 87
                echo $this->getAttribute($context["location"], "location_id", array());
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo $this->getAttribute($context["location"], "name", array());
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 89
                echo $this->getAttribute($context["location"], "location_id", array());
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t";
                // line 92
                if ($this->getAttribute($context["location"], "image", array())) {
                    // line 93
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\"><img src=\"";
                    echo $this->getAttribute($context["location"], "image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["location"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["location"], "name", array());
                    echo "\" class=\"img-thumbnail\" /></div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 94
                echo ">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t<strong>";
                // line 96
                echo $this->getAttribute($context["location"], "name", array());
                echo "</strong><br />
\t\t\t\t\t\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 98
                echo $this->getAttribute($context["location"], "address", array());
                echo "
\t\t\t\t\t\t\t\t\t\t\t</address>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 100
                if ($this->getAttribute($context["location"], "geocode", array())) {
                    // line 101
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter($this->getAttribute($context["location"], "geocode", array()));
                    echo "&hl=";
                    echo (isset($context["geocode_hl"]) ? $context["geocode_hl"] : null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    echo (isset($context["button_map"]) ? $context["button_map"] : null);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 103
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t<strong>";
                // line 105
                echo (isset($context["text_telephone"]) ? $context["text_telephone"] : null);
                echo "</strong><br />";
                echo $this->getAttribute($context["location"], "telephone", array());
                echo "<br /><br />
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 106
                if ($this->getAttribute($context["location"], "fax", array())) {
                    // line 107
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
                    echo (isset($context["text_fax"]) ? $context["text_fax"] : null);
                    echo "</strong><br>";
                    echo $this->getAttribute($context["location"], "fax", array());
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 109
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 111
                if ($this->getAttribute($context["location"], "open", array())) {
                    // line 112
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
                    echo (isset($context["text_open"]) ? $context["text_open"] : null);
                    echo "</strong><br />";
                    echo $this->getAttribute($context["location"], "open", array());
                    echo "<br /><br />
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 114
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["location"], "comment", array())) {
                    // line 115
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<strong>";
                    echo (isset($context["text_comment"]) ? $context["text_comment"] : null);
                    echo "</strong><br />";
                    echo $this->getAttribute($context["location"], "comment", array());
                    echo "
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 117
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "\t\t\t\t</div>
\t\t\t";
        }
        // line 125
        echo "\t\t\t";
        if ((isset($context["contact_map"]) ? $context["contact_map"] : null)) {
            // line 126
            echo "\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t<div class=\"heading\"><span>";
            // line 128
            echo (isset($context["text_location"]) ? $context["text_location"] : null);
            echo "</span></div>
\t\t\t\t\t\t\t";
            // line 129
            echo (isset($context["contact_map"]) ? $context["contact_map"] : null);
            echo "
\t\t\t\t\t\t<hr />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 134
        echo "\t\t\t<form action=\"";
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"contact-page-form form-horizontal\">
\t\t\t\t<fieldset>
\t\t\t\t\t<div class=\"heading\"><span>";
        // line 136
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</span></div>
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 138
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"name\" value=\"";
        // line 140
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
\t\t\t\t\t\t\t";
        // line 141
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 142
            echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 144
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 147
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" value=\"";
        // line 149
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
\t\t\t\t\t\t\t";
        // line 150
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 151
            echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 153
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group required\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-enquiry\">";
        // line 156
        echo (isset($context["entry_enquiry"]) ? $context["entry_enquiry"] : null);
        echo "</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 158
        echo (isset($context["enquiry"]) ? $context["enquiry"] : null);
        echo "</textarea>
\t\t\t\t\t\t\t";
        // line 159
        if ((isset($context["error_enquiry"]) ? $context["error_enquiry"] : null)) {
            // line 160
            echo "\t\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo (isset($context["error_enquiry"]) ? $context["error_enquiry"] : null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 162
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 164
        echo (isset($context["captcha"]) ? $context["captcha"] : null);
        echo "
\t\t\t\t</fieldset>
\t\t\t\t<div class=\"buttons\">
\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t";
        // line 168
        if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
            // line 169
            echo "\t\t\t\t\t\t\t";
            echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
            echo "
\t\t\t\t\t\t\t";
            // line 170
            if ((isset($context["agree"]) ? $context["agree"] : null)) {
                // line 171
                echo "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t";
            } else {
                // line 173
                echo "\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" />
\t\t\t\t\t\t\t";
            }
            // line 175
            echo "\t\t\t\t\t\t";
        }
        // line 176
        echo "\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"";
        echo (isset($context["button_submit"]) ? $context["button_submit"] : null);
        echo "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t";
        // line 180
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
\t\t</div>
\t\t";
        // line 182
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
\t</div>
</div>
<script type=\"application/ld+json\">
\t{
\t\t\"@context\": \"http://schema.org\",
\t\t\"@type\": \"BreadcrumbList\",
\t\t\"itemListElement\": [
\t\t";
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["i"] => $context["breadcrumb"]) {
            // line 191
            echo "\t\t\t{
\t\t\t\"@type\": \"ListItem\",
\t\t\t\"position\": ";
            // line 193
            echo ($context["i"] + 1);
            echo ",
\t\t\t\"name\": \"";
            // line 194
            echo ((($context["i"] == 0)) ? ((isset($context["shop_name"]) ? $context["shop_name"] : null)) : ($this->getAttribute($context["breadcrumb"], "text", array())));
            echo "\",
\t\t\t\"item\": \"";
            // line 195
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\"
\t\t\t";
            // line 196
            echo (((($context["i"] + 1) < twig_length_filter($this->env, (isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null)))) ? ("},") : ("}"));
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo "\t\t]
\t}
</script>
<script type=\"application/ld+json\">
\t{
\t\t\"@context\": \"https://schema.org\",
\t\t\"@type\": \"Store\",
\t\t\"name\": \"";
        // line 205
        echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "name", array());
        echo "\",
\t\t\"url\": \"";
        // line 206
        echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "url", array());
        echo "\",
\t\t\"image\": \"";
        // line 207
        echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "image", array());
        echo "\",
\t\t\"description\": \"";
        // line 208
        echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "description", array());
        echo "\",
\t\t\"email\": \"";
        // line 209
        echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "email", array());
        echo "\",
\t\t\"telephone\": \"";
        // line 210
        echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "telephone", array());
        echo "\",
\t\t\"openingHours\": \"";
        // line 211
        echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "open_hours", array());
        echo "\",
\t\t\"priceRange\": \"";
        // line 212
        echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "currency", array());
        echo "\",
\t\t\"address\": {
\t\t\t\"@type\": \"PostalAddress\",
\t\t\t\"streetAddress\": \"";
        // line 215
        echo $this->getAttribute((isset($context["microdata"]) ? $context["microdata"] : null), "address", array());
        echo "\"
\t\t}
}
</script>
";
        // line 219
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "unishop2/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  609 => 219,  602 => 215,  596 => 212,  592 => 211,  588 => 210,  584 => 209,  580 => 208,  576 => 207,  572 => 206,  568 => 205,  559 => 198,  551 => 196,  547 => 195,  543 => 194,  539 => 193,  535 => 191,  531 => 190,  520 => 182,  515 => 180,  507 => 176,  504 => 175,  500 => 173,  496 => 171,  494 => 170,  489 => 169,  487 => 168,  480 => 164,  476 => 162,  470 => 160,  468 => 159,  464 => 158,  459 => 156,  454 => 153,  448 => 151,  446 => 150,  442 => 149,  437 => 147,  432 => 144,  426 => 142,  424 => 141,  420 => 140,  415 => 138,  410 => 136,  404 => 134,  396 => 129,  392 => 128,  388 => 126,  385 => 125,  381 => 123,  370 => 117,  362 => 115,  359 => 114,  351 => 112,  349 => 111,  345 => 109,  337 => 107,  335 => 106,  329 => 105,  325 => 103,  315 => 101,  313 => 100,  308 => 98,  303 => 96,  299 => 94,  289 => 93,  287 => 92,  281 => 89,  274 => 87,  270 => 85,  266 => 84,  260 => 82,  257 => 81,  249 => 76,  245 => 74,  243 => 73,  239 => 71,  233 => 68,  229 => 67,  226 => 66,  224 => 65,  219 => 62,  211 => 60,  208 => 59,  202 => 57,  199 => 56,  179 => 54,  175 => 53,  169 => 52,  164 => 50,  160 => 48,  154 => 45,  150 => 44,  147 => 43,  144 => 42,  134 => 40,  132 => 39,  127 => 37,  123 => 36,  118 => 34,  114 => 32,  102 => 27,  98 => 25,  96 => 24,  92 => 23,  88 => 22,  83 => 21,  80 => 20,  77 => 19,  74 => 18,  71 => 17,  68 => 16,  65 => 15,  63 => 14,  59 => 13,  55 => 11,  49 => 10,  43 => 8,  35 => 6,  32 => 5,  28 => 4,  24 => 3,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="contact-page" class="container">*/
/* 	<ul class="breadcrumb {{ menu_expanded ? 'col-md-offset-3 col-lg-offset-3 col-xxl-offset-4' }}">*/
/* 		{% for key, breadcrumb in breadcrumbs %}*/
/* 			{% if key + 1 < breadcrumbs|length %}*/
/* 				<li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/* 			{% else %}*/
/* 				<li>{{ breadcrumb.text }}</li>*/
/* 			{% endif %}*/
/* 		{% endfor %}*/
/* 	</ul>*/
/* 	<div class="row">*/
/* 		{{ column_left }}*/
/* 		{% if column_left and column_right %}*/
/* 			{% set class = 'col-sm-4 col-md-4 col-lg-6' %}*/
/* 		{% elseif column_left or column_right %}*/
/* 			{% set class = 'col-sm-8 col-md-9 col-lg-9 col-xxl-16' %}*/
/* 		{% else  %}*/
/* 			{% set class = 'col-sm-12' %}*/
/* 		{% endif %}*/
/* 		<div id="content" class="{{ class }}">*/
/* 			{{ content_top }}*/
/* 			<div class="heading-h1"><h1>{{ heading_title }}</h1></div>*/
/* 			{% if image %}*/
/* 				<div class="row">*/
/* 					<div class="col-sm-12">*/
/* 						<img src="{{ image }}" alt="{{ store }}" title="{{ store }}" class="img-responsive" />*/
/* 					</div>*/
/* 				</div>*/
/* 				<hr />*/
/* 			{% endif %}*/
/* 			<div class="row">*/
/* 				<div class="col-sm-4">*/
/* 					<div class="heading"><span>{{ store }}</span></div>*/
/* 					<address>*/
/* 						<strong>{{ text_address }}</strong><br />*/
/* 						<span>{{ address }}</span>*/
/* 					</address>*/
/* 					{% if geocode %}*/
/* 						<a href="https://maps.google.com/maps?q={{ geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15" target="_blank" class="btn btn-info"><i class="fa fa-map-marker"></i> {{ button_map }}</a>*/
/* 					{% endif %}*/
/* 					{% if open %}*/
/* 						<hr />*/
/* 						<strong>{{ text_open }}</strong><br />*/
/* 						<span>{{ open }}</span><br />*/
/* 						<br />*/
/* 					{% endif %}*/
/* 				</div>*/
/* 				<div class="col-sm-4">*/
/* 					<div class="heading"><span>{{ text_contacts }}</span></div>*/
/* 					<ul class="contact-list list-unstyled">*/
/* 						<li class="contact-list__item uni-href" data-href="tel:{{ telephone }}"><i class="contact-list__icon fa fa-phone fa-fw"></i>{{ telephone }}</li>*/
/* 						{% for contact in contacts %}*/
/* 							<li class="contact-list__item uni-href" data-href="{{ contact.href }}">{% if contact.icon and 'fa-' in contact.icon %}<i class="contact-list__icon {{ contact.icon }} fa-fw"></i>{% elseif contact.icon %}<img src="image/{{ contact.icon }}" alt="" />{% endif %}{{ contact.number }}</li>*/
/* 						{% endfor %}*/
/* 						{% if fax %}*/
/* 							<li class="contact-list__item"><i class="fa fa-fax fa-fw" aria-hidden="true"></i>{{ fax }}</li>*/
/* 						{% endif %}*/
/* 						{% if shop_email %}*/
/* 							<li class="contact-list__item uni-href" data-href="mailto:{{ shop_email }}"><i class="contact-list__icon far fa-envelope fa-fw" aria-hidden="true"></i>{{ shop_email }}</li>*/
/* 						{% endif %}*/
/* 					</ul>*/
/* 					<hr class="visible-xs" />*/
/* 				</div>*/
/* 				{% if comment %}*/
/* 					<div class="col-sm-4">*/
/* 					<div class="heading"><span>{{ text_contact_comment }}</span></div>*/
/* 						{{ comment }}*/
/* 					</div>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 			<hr />*/
/* 			{% if text_in_contacts %}*/
/* 				<div class="row">*/
/* 					<div class="col-sm-12">*/
/* 						{{ text_in_contacts }}*/
/* 					</div>*/
/* 				</div>*/
/* 				<hr />*/
/* 			{% endif %}*/
/* 			{% if locations %}*/
/* 				<h3>{{ text_store }}</h3>*/
/* 				<div class="panel-group" id="accordion">*/
/* 					{% for location in locations %}*/
/* 						<div class="panel panel-default">*/
/* 							<div class="panel-heading">*/
/* 								<h4 class="panel-title"><a href="#collapse-location{{ location.location_id }}" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion">{{ location.name }} <i class="fa fa-caret-down"></i></a></h4>*/
/* 							</div>*/
/* 							<div class="panel-collapse collapse" id="collapse-location{{ location.location_id }}">*/
/* 								<div class="panel-body">*/
/* 									<div class="row">*/
/* 										{% if location.image %}*/
/* 											<div class="col-sm-3"><img src="{{ location.image }}" alt="{{ location.name }}" title="{{ location.name }}" class="img-thumbnail" /></div>*/
/* 										{% endif %}>*/
/* 										<div class="col-sm-3">*/
/* 											<strong>{{ location.name }}</strong><br />*/
/* 											<address>*/
/* 												{{ location.address }}*/
/* 											</address>*/
/* 											{% if location.geocode %}*/
/* 												<a href="https://maps.google.com/maps?q={{ location.geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15" target="_blank" class="btn btn-info"><i class="fa fa-map-marker"></i> {{ button_map }}</a>*/
/* 											{% endif %}*/
/* 										</div>*/
/* 										<div class="col-sm-3">*/
/* 											<strong>{{ text_telephone }}</strong><br />{{ location.telephone }}<br /><br />*/
/* 												{% if location.fax %}*/
/* 													<strong>{{ text_fax }}</strong><br>{{ location.fax }}*/
/* 												{% endif %}*/
/* 										</div>*/
/* 										<div class="col-sm-3">*/
/* 											{% if location.open %}*/
/* 												<strong>{{ text_open }}</strong><br />{{ location.open }}<br /><br />*/
/* 											{% endif %}*/
/* 											{% if location.comment %}*/
/* 												<strong>{{ text_comment }}</strong><br />{{ location.comment }}*/
/* 											{% endif %}*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					{% endfor %}*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			{% if contact_map %}*/
/* 				<div class="row">*/
/* 					<div class="col-xs-12">*/
/* 						<div class="heading"><span>{{ text_location }}</span></div>*/
/* 							{{ contact_map }}*/
/* 						<hr />*/
/* 					</div>*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			<form action="{{ action }}" method="post" enctype="multipart/form-data" class="contact-page-form form-horizontal">*/
/* 				<fieldset>*/
/* 					<div class="heading"><span>{{ text_contact }}</span></div>*/
/* 					<div class="form-group required">*/
/* 						<label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/* 						<div class="col-sm-10">*/
/* 							<input type="text" name="name" value="{{ name }}" id="input-name" class="form-control" />*/
/* 							{% if error_name %}*/
/* 								<div class="text-danger">{{ error_name }}</div>*/
/* 							{% endif %}*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="form-group required">*/
/* 						<label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/* 						<div class="col-sm-10">*/
/* 							<input type="text" name="email" value="{{ email }}" id="input-email" class="form-control" />*/
/* 							{% if error_email %}*/
/* 								<div class="text-danger">{{ error_email }}</div>*/
/* 							{% endif %}*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="form-group required">*/
/* 						<label class="col-sm-2 control-label" for="input-enquiry">{{ entry_enquiry }}</label>*/
/* 						<div class="col-sm-10">*/
/* 							<textarea name="enquiry" rows="10" id="input-enquiry" class="form-control">{{ enquiry }}</textarea>*/
/* 							{% if error_enquiry %}*/
/* 								<div class="text-danger">{{ error_enquiry }}</div>*/
/* 							{% endif %}*/
/* 						</div>*/
/* 					</div>*/
/* 					{{ captcha }}*/
/* 				</fieldset>*/
/* 				<div class="buttons">*/
/* 					<div class="pull-right">*/
/* 						{% if text_agree %}*/
/* 							{{ text_agree }}*/
/* 							{% if agree %}*/
/* 								<input type="checkbox" name="agree" value="1" checked="checked" />*/
/* 							{% else %}*/
/* 								<input type="checkbox" name="agree" value="1" />*/
/* 							{% endif %}*/
/* 						{% endif %}*/
/* 						<input class="btn btn-primary" type="submit" value="{{ button_submit }}" />*/
/* 					</div>*/
/* 				</div>*/
/* 			</form>*/
/* 			{{ content_bottom }}*/
/* 		</div>*/
/* 		{{ column_right }}*/
/* 	</div>*/
/* </div>*/
/* <script type="application/ld+json">*/
/* 	{*/
/* 		"@context": "http://schema.org",*/
/* 		"@type": "BreadcrumbList",*/
/* 		"itemListElement": [*/
/* 		{% for i, breadcrumb in breadcrumbs %}*/
/* 			{*/
/* 			"@type": "ListItem",*/
/* 			"position": {{ i+1 }},*/
/* 			"name": "{{ i == 0 ? shop_name: breadcrumb.text }}",*/
/* 			"item": "{{ breadcrumb.href }}"*/
/* 			{{ i + 1 < breadcrumbs|length ? '},' : '}' }}*/
/* 		{% endfor %}*/
/* 		]*/
/* 	}*/
/* </script>*/
/* <script type="application/ld+json">*/
/* 	{*/
/* 		"@context": "https://schema.org",*/
/* 		"@type": "Store",*/
/* 		"name": "{{ microdata.name }}",*/
/* 		"url": "{{ microdata.url }}",*/
/* 		"image": "{{ microdata.image }}",*/
/* 		"description": "{{ microdata.description }}",*/
/* 		"email": "{{ microdata.email }}",*/
/* 		"telephone": "{{ microdata.telephone }}",*/
/* 		"openingHours": "{{ microdata.open_hours }}",*/
/* 		"priceRange": "{{ microdata.currency }}",*/
/* 		"address": {*/
/* 			"@type": "PostalAddress",*/
/* 			"streetAddress": "{{ microdata.address }}"*/
/* 		}*/
/* }*/
/* </script>*/
/* {{ footer }}*/
