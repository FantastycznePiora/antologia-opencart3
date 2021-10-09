<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/template/account/return_form.twig */
class __TwigTemplate_6f86ab273f0e090b8f28139f715bd445444e9bee297c0bf3a32ff3dd708774af extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
<div id=\"account-return\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\"> ";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  ";
        // line 8
        if (($context["error_warning"] ?? null)) {
            // line 9
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 11
        echo "  <div class=\"row\"> ";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 12
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 13
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 14
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 18
            echo "    ";
        }
        // line 19
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\"> ";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 20
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <p>";
        // line 21
        echo ($context["text_description"] ?? null);
        echo "</p>
      <form action=\"";
        // line 22
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 24
        echo ($context["text_order"] ?? null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 26
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 28
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
              ";
        // line 29
        if (($context["error_firstname"] ?? null)) {
            // line 30
            echo "              <div class=\"text-danger\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
              ";
        }
        // line 31
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 34
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 36
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
              ";
        // line 37
        if (($context["error_lastname"] ?? null)) {
            // line 38
            echo "              <div class=\"text-danger\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
              ";
        }
        // line 39
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 42
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 44
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 45
        if (($context["error_email"] ?? null)) {
            // line 46
            echo "              <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 47
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 50
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"telephone\" value=\"";
        // line 52
        echo ($context["telephone"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
              ";
        // line 53
        if (($context["error_telephone"] ?? null)) {
            // line 54
            echo "              <div class=\"text-danger\">";
            echo ($context["error_telephone"] ?? null);
            echo "</div>
              ";
        }
        // line 55
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-order-id\">";
        // line 58
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"order_id\" value=\"";
        // line 60
        echo ($context["order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\" />
              ";
        // line 61
        if (($context["error_order_id"] ?? null)) {
            // line 62
            echo "              <div class=\"text-danger\">";
            echo ($context["error_order_id"] ?? null);
            echo "</div>
              ";
        }
        // line 63
        echo " </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-date-ordered\">";
        // line 66
        echo ($context["entry_date_ordered"] ?? null);
        echo "</label>
            <div class=\"col-sm-3\">
              <div class=\"input-group date\">
                <input type=\"text\" name=\"date_ordered\" value=\"";
        // line 69
        echo ($context["date_ordered"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_ordered"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-ordered\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 77
        echo ($context["text_product"] ?? null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-product\">";
        // line 79
        echo ($context["entry_product"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"product\" value=\"";
        // line 81
        echo ($context["product"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
              ";
        // line 82
        if (($context["error_product"] ?? null)) {
            // line 83
            echo "              <div class=\"text-danger\">";
            echo ($context["error_product"] ?? null);
            echo "</div>
              ";
        }
        // line 84
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-model\">";
        // line 87
        echo ($context["entry_model"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"model\" value=\"";
        // line 89
        echo ($context["model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\" />
              ";
        // line 90
        if (($context["error_model"] ?? null)) {
            // line 91
            echo "              <div class=\"text-danger\">";
            echo ($context["error_model"] ?? null);
            echo "</div>
              ";
        }
        // line 92
        echo " </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
        // line 95
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"quantity\" value=\"";
        // line 97
        echo ($context["quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\">";
        // line 101
        echo ($context["entry_reason"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\"> ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_reasons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_reason"]) {
            // line 103
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 103) == ($context["return_reason_id"] ?? null))) {
                // line 104
                echo "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"return_reason_id\" value=\"";
                // line 106
                echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 106);
                echo "\" checked=\"checked\" />
                  ";
                // line 107
                echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 107);
                echo "</label>
              </div>
              ";
            } else {
                // line 110
                echo "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"return_reason_id\" value=\"";
                // line 112
                echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 112);
                echo "\" />
                  ";
                // line 113
                echo twig_get_attribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 113);
                echo "</label>
              </div>
              ";
            }
            // line 116
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_reason'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "              ";
        if (($context["error_reason"] ?? null)) {
            // line 118
            echo "              <div class=\"text-danger\">";
            echo ($context["error_reason"] ?? null);
            echo "</div>
              ";
        }
        // line 119
        echo " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\">";
        // line 122
        echo ($context["entry_opened"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\"> ";
        // line 124
        if (($context["opened"] ?? null)) {
            // line 125
            echo "                <input type=\"radio\" name=\"opened\" value=\"1\" checked=\"checked\" />
                ";
        } else {
            // line 127
            echo "                <input type=\"radio\" name=\"opened\" value=\"1\" />
                ";
        }
        // line 129
        echo "                ";
        echo ($context["text_yes"] ?? null);
        echo "</label>
              <label class=\"radio-inline\"> ";
        // line 130
        if ( !($context["opened"] ?? null)) {
            // line 131
            echo "                <input type=\"radio\" name=\"opened\" value=\"0\" checked=\"checked\" />
                ";
        } else {
            // line 133
            echo "                <input type=\"radio\" name=\"opened\" value=\"0\" />
                ";
        }
        // line 135
        echo "                ";
        echo ($context["text_no"] ?? null);
        echo "</label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
        // line 139
        echo ($context["entry_fault_detail"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"comment\" rows=\"10\" placeholder=\"";
        // line 141
        echo ($context["entry_fault_detail"] ?? null);
        echo "\" id=\"input-comment\" class=\"form-control\">";
        echo ($context["comment"] ?? null);
        echo "</textarea>
            </div>
          </div>
          ";
        // line 144
        echo ($context["captcha"] ?? null);
        echo "
        </fieldset>
        ";
        // line 146
        if (($context["text_agree"] ?? null)) {
            // line 147
            echo "        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
            // line 148
            echo ($context["back"] ?? null);
            echo "\" class=\"btn btn-danger\">";
            echo ($context["button_back"] ?? null);
            echo "</a></div>
          <div class=\"pull-right\">";
            // line 149
            echo ($context["text_agree"] ?? null);
            echo "
            ";
            // line 150
            if (($context["agree"] ?? null)) {
                // line 151
                echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
            ";
            } else {
                // line 153
                echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" />
            ";
            }
            // line 155
            echo "            <input type=\"submit\" value=\"";
            echo ($context["button_submit"] ?? null);
            echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
        ";
        } else {
            // line 159
            echo "        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
            // line 160
            echo ($context["back"] ?? null);
            echo "\" class=\"btn btn-default\">";
            echo ($context["button_back"] ?? null);
            echo "</a></div>
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"";
            // line 162
            echo ($context["button_submit"] ?? null);
            echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
        ";
        }
        // line 166
        echo "      </form>
      ";
        // line 167
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 168
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 172
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});
//--></script> 
";
        // line 176
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/account/return_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  511 => 176,  504 => 172,  497 => 168,  493 => 167,  490 => 166,  483 => 162,  476 => 160,  473 => 159,  465 => 155,  461 => 153,  457 => 151,  455 => 150,  451 => 149,  445 => 148,  442 => 147,  440 => 146,  435 => 144,  427 => 141,  422 => 139,  414 => 135,  410 => 133,  406 => 131,  404 => 130,  399 => 129,  395 => 127,  391 => 125,  389 => 124,  384 => 122,  379 => 119,  373 => 118,  370 => 117,  364 => 116,  358 => 113,  354 => 112,  350 => 110,  344 => 107,  340 => 106,  336 => 104,  333 => 103,  329 => 102,  325 => 101,  316 => 97,  311 => 95,  306 => 92,  300 => 91,  298 => 90,  292 => 89,  287 => 87,  282 => 84,  276 => 83,  274 => 82,  268 => 81,  263 => 79,  258 => 77,  245 => 69,  239 => 66,  234 => 63,  228 => 62,  226 => 61,  220 => 60,  215 => 58,  210 => 55,  204 => 54,  202 => 53,  196 => 52,  191 => 50,  186 => 47,  180 => 46,  178 => 45,  172 => 44,  167 => 42,  162 => 39,  156 => 38,  154 => 37,  148 => 36,  143 => 34,  138 => 31,  132 => 30,  130 => 29,  124 => 28,  119 => 26,  114 => 24,  109 => 22,  105 => 21,  101 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  74 => 12,  69 => 11,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/return_form.twig", "");
    }
}
