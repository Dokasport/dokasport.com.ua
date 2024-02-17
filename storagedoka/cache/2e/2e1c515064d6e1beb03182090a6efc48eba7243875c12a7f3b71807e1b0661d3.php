<?php

/* unishop2/template/mail/register.twig */
class __TwigTemplate_30f3908ba883cc3227f803eee15ff88f441e01e5af0fef74d6f9ef7f8092762d extends Twig_Template
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
        echo (isset($context["text_welcome"]) ? $context["text_welcome"] : null);
        echo "

";
        // line 3
        if ((isset($context["text_subscribe"]) ? $context["text_subscribe"] : null)) {
            // line 4
            echo (isset($context["text_subscribe"]) ? $context["text_subscribe"] : null);
            echo "
\t
";
        }
        // line 7
        if ( !(isset($context["approval"]) ? $context["approval"] : null)) {
            // line 8
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "

";
            // line 10
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "
\t
";
            // line 12
            if (((isset($context["text_user_login"]) ? $context["text_user_login"] : null) && (isset($context["text_user_password"]) ? $context["text_user_password"] : null))) {
                // line 13
                echo (isset($context["text_user_login"]) ? $context["text_user_login"] : null);
                echo "
";
                // line 14
                echo (isset($context["text_user_password"]) ? $context["text_user_password"] : null);
                echo "
\t\t
";
            }
            // line 17
            echo (isset($context["text_service"]) ? $context["text_service"] : null);
            echo "
";
        } else {
            // line 19
            echo (isset($context["text_approval"]) ? $context["text_approval"] : null);
            echo "

";
            // line 21
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "
\t
";
            // line 23
            if (((isset($context["text_user_login"]) ? $context["text_user_login"] : null) && (isset($context["text_user_password"]) ? $context["text_user_password"] : null))) {
                // line 24
                echo (isset($context["text_user_login"]) ? $context["text_user_login"] : null);
                echo "
";
                // line 25
                echo (isset($context["text_user_password"]) ? $context["text_user_password"] : null);
                echo "
";
            }
        }
        // line 28
        echo "
";
        // line 29
        echo (isset($context["text_thanks"]) ? $context["text_thanks"] : null);
        echo "
";
        // line 30
        echo (isset($context["store"]) ? $context["store"] : null);
    }

    public function getTemplateName()
    {
        return "unishop2/template/mail/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 30,  86 => 29,  83 => 28,  77 => 25,  73 => 24,  71 => 23,  66 => 21,  61 => 19,  56 => 17,  50 => 14,  46 => 13,  44 => 12,  39 => 10,  34 => 8,  32 => 7,  26 => 4,  24 => 3,  19 => 1,);
    }
}
/* {{ text_welcome }}*/
/* */
/* {% if text_subscribe %}*/
/* {{ text_subscribe }}*/
/* 	*/
/* {% endif %}*/
/* {% if not approval %}*/
/* {{ text_login }}*/
/* */
/* {{ login }}*/
/* 	*/
/* {% if text_user_login and text_user_password %}*/
/* {{ text_user_login }}*/
/* {{ text_user_password }}*/
/* 		*/
/* {% endif %}*/
/* {{ text_service }}*/
/* {% else %}*/
/* {{ text_approval }}*/
/* */
/* {{ login}}*/
/* 	*/
/* {% if text_user_login and text_user_password %}*/
/* {{ text_user_login }}*/
/* {{ text_user_password}}*/
/* {% endif %}*/
/* {% endif %}*/
/* */
/* {{ text_thanks }}*/
/* {{ store }}*/
