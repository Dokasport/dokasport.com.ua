<?php

/* default/template/extension/payment/liqpay.twig */
class __TwigTemplate_d7c4d3fb3c11d15348cafa9f058b73d3a148f06eb9bff2a4e4a54e8147e6ed18 extends Twig_Template
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
        echo "<form action=\"";
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\">
  <input type=\"hidden\" name=\"operation_xml\" value=\"";
        // line 2
        echo (isset($context["xml"]) ? $context["xml"] : null);
        echo "\">
  <input type=\"hidden\" name=\"signature\" value=\"";
        // line 3
        echo (isset($context["signature"]) ? $context["signature"] : null);
        echo "\">
  <div class=\"buttons\">
    <div class=\"pull-right\">
      <input type=\"submit\" value=\"";
        // line 6
        echo (isset($context["button_confirm"]) ? $context["button_confirm"] : null);
        echo "\" class=\"btn btn-primary\" />
    </div>
  </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/liqpay.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  28 => 3,  24 => 2,  19 => 1,);
    }
}
/* <form action="{{ action }}" method="post">*/
/*   <input type="hidden" name="operation_xml" value="{{ xml }}">*/
/*   <input type="hidden" name="signature" value="{{ signature }}">*/
/*   <div class="buttons">*/
/*     <div class="pull-right">*/
/*       <input type="submit" value="{{ button_confirm }}" class="btn btn-primary" />*/
/*     </div>*/
/*   </div>*/
/* </form>*/
/* */
