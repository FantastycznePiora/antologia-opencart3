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

/* sale/order_form.twig */
class __TwigTemplate_1578089f321c9390a09bee1a6ae09627a6ac5607d8e5475a97a17ed8ba239c42 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo ($context["cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i> ";
        echo ($context["button_cancel"] ?? null);
        echo "</a></div>
      <h1>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 17
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form class=\"form-horizontal\">
          <ul id=\"order\" class=\"nav nav-tabs nav-justified\">
            <li class=\"disabled active\"><a href=\"#tab-customer\" data-toggle=\"tab\">1. ";
        // line 22
        echo ($context["tab_customer"] ?? null);
        echo "</a></li>
            <li class=\"disabled\"><a href=\"#tab-cart\" data-toggle=\"tab\">2. ";
        // line 23
        echo ($context["tab_product"] ?? null);
        echo "</a></li>
            <li class=\"disabled\"><a href=\"#tab-payment\" data-toggle=\"tab\">3. ";
        // line 24
        echo ($context["tab_payment"] ?? null);
        echo "</a></li>
            <li class=\"disabled\"><a href=\"#tab-shipping\" data-toggle=\"tab\">4. ";
        // line 25
        echo ($context["tab_shipping"] ?? null);
        echo "</a></li>
            <li class=\"disabled\"><a href=\"#tab-total\" data-toggle=\"tab\">5. ";
        // line 26
        echo ($context["tab_total"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-customer\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-store\">";
        // line 31
        echo ($context["entry_store"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"store_id\" id=\"input-store\" class=\"form-control\">
                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 35
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 35) == ($context["store_id"] ?? null))) {
                // line 36
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 36);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 36);
                echo "</option>
                    ";
            } else {
                // line 38
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 38);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 38);
                echo "</option>
                    ";
            }
            // line 40
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\">";
        // line 45
        echo ($context["entry_currency"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"currency\" id=\"input-currency\" class=\"form-control\">
                    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 49
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 49) == ($context["currency_code"] ?? null))) {
                // line 50
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 50);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 50);
                echo "</option>
                    ";
            } else {
                // line 52
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 52);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 52);
                echo "</option>
                    ";
            }
            // line 54
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-customer\">";
        // line 59
        echo ($context["entry_customer"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"customer\" value=\"";
        // line 61
        echo ($context["customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
                  <input type=\"hidden\" name=\"customer_id\" value=\"";
        // line 62
        echo ($context["customer_id"] ?? null);
        echo "\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-customer-group\">";
        // line 66
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 70
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 70) == ($context["customer_group_id"] ?? null))) {
                // line 71
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 71);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 71);
                echo "</option>
                    ";
            } else {
                // line 73
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 73);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 73);
                echo "</option>
                    ";
            }
            // line 75
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 80
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"firstname\" value=\"";
        // line 82
        echo ($context["firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 86
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"lastname\" value=\"";
        // line 88
        echo ($context["lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 92
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"email\" value=\"";
        // line 94
        echo ($context["email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 98
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"telephone\" value=\"";
        // line 100
        echo ($context["telephone"] ?? null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
                </div>
              </div>
              ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 104
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 104) == "account")) {
                // line 105
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 105) == "select")) {
                    // line 106
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 106) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 107
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 107);
                    echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"custom_field[";
                    // line 109
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 109);
                    echo "]\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 109);
                    echo "\" class=\"form-control\">
                    <option value=\"\">";
                    // line 110
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                    ";
                    // line 111
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 111));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 112
                        echo "                    ";
                        if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["account_custom_field"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 112)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 112) == (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["account_custom_field"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 112)] ?? null) : null)))) {
                            // line 113
                            echo "                    <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 113);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 113);
                            echo "</option>
                    ";
                        } else {
                            // line 115
                            echo "                    <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 115);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 115);
                            echo "</option>
                    ";
                        }
                        // line 117
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 118
                    echo "                  </select>
                </div>
              </div>
              ";
                }
                // line 122
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 122) == "radio")) {
                    // line 123
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 123) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\">";
                    // line 124
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 124);
                    echo "</label>
                <div class=\"col-sm-10\">
                  <div id=\"input-custom-field";
                    // line 126
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 126);
                    echo "\">
                    ";
                    // line 127
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 127));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 128
                        echo "                    <div class=\"radio\">
                      ";
                        // line 129
                        if (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["account_custom_field"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 129) == (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["account_custom_field"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129)] ?? null) : null)))) {
                            // line 130
                            echo "                      <label>
                        <input type=\"radio\" name=\"custom_field[";
                            // line 131
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 131);
                            echo "\" checked=\"checked\" />
                        ";
                            // line 132
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 132);
                            echo "</label>
                      ";
                        } else {
                            // line 134
                            echo "                      <label>
                        <input type=\"radio\" name=\"custom_field[";
                            // line 135
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 135);
                            echo "\" />
                        ";
                            // line 136
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 136);
                            echo "</label>
                      ";
                        }
                        // line 138
                        echo "                    </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 140
                    echo "                  </div>
                </div>
              </div>
              ";
                }
                // line 144
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 144) == "checkbox")) {
                    // line 145
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 145);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 145) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\">";
                    // line 146
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 146);
                    echo "</label>
                <div class=\"col-sm-10\">
                  <div id=\"input-custom-field";
                    // line 148
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148);
                    echo "\">
                    ";
                    // line 149
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 149));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 150
                        echo "                    <div class=\"checkbox\">
                      ";
                        // line 151
                        if (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["account_custom_field"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 151)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 151), (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["account_custom_field"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 151)] ?? null) : null)))) {
                            // line 152
                            echo "                      <label>
                        <input type=\"checkbox\" name=\"custom_field[";
                            // line 153
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 153);
                            echo "\" checked=\"checked\" />
                        ";
                            // line 154
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 154);
                            echo "</label>
                      ";
                        } else {
                            // line 156
                            echo "                      <label>
                        <input type=\"checkbox\" name=\"custom_field[";
                            // line 157
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 157);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 157);
                            echo "\" />
                        ";
                            // line 158
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 158);
                            echo "</label>
                      ";
                        }
                        // line 160
                        echo "                    </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 162
                    echo "                  </div>
                </div>
              </div>
              ";
                }
                // line 166
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 166) == "text")) {
                    // line 167
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 167) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 168
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 168);
                    echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"custom_field[";
                    // line 170
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 170);
                    echo "]\" value=\"";
                    echo (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["account_custom_field"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 170)] ?? null) : null)) ? ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["account_custom_field"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 170)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 170)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 170);
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 170);
                    echo "\" class=\"form-control\" />
                </div>
              </div>
              ";
                }
                // line 174
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 174) == "textarea")) {
                    // line 175
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 175);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 175) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 176
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 176);
                    echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"custom_field[";
                    // line 178
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 178);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 178);
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 178);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 178);
                    echo "</textarea>
                </div>
              </div>
              ";
                }
                // line 182
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 182) == "file")) {
                    // line 183
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 183);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 183) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\">";
                    // line 184
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 184);
                    echo "</label>
                <div class=\"col-sm-10\">
                  <button type=\"button\" id=\"button-custom-field";
                    // line 186
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 186);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                  <input type=\"hidden\" name=\"custom_field[";
                    // line 187
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187);
                    echo "]\" value=\"";
                    echo (((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["account_custom_field"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187)] ?? null) : null)) ? ((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["account_custom_field"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187)] ?? null) : null)) : (""));
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187);
                    echo "\" />
                </div>
              </div>
              ";
                }
                // line 191
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 191) == "date")) {
                    // line 192
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 192);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 192) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 193
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 193);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 193);
                    echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 196
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 196);
                    echo "]\" value=\"";
                    echo (((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["account_custom_field"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 196)] ?? null) : null)) ? ((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["account_custom_field"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 196)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 196)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 196);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 196);
                    echo "\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              ";
                }
                // line 203
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 203) == "time")) {
                    // line 204
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 204);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 204) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 205
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 205);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 205);
                    echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group time\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 208
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 208);
                    echo "]\" value=\"";
                    echo (((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["account_custom_field"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 208)] ?? null) : null)) ? ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["account_custom_field"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 208)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 208)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 208);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 208);
                    echo "\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              ";
                }
                // line 215
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 215) == "datetime")) {
                    // line 216
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 216);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 216) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                    // line 217
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 217);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 217);
                    echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group datetime\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 220
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 220);
                    echo "]\" value=\"";
                    echo (((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["account_custom_field"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 220)] ?? null) : null)) ? ((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["account_custom_field"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 220)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 220)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 220);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 220);
                    echo "\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              ";
                }
                // line 227
                echo "              ";
            }
            // line 228
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 229
        echo "              <div class=\"text-right\">
                <button type=\"button\" id=\"button-customer\" data-loading-text=\"";
        // line 230
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-right\"></i> ";
        echo ($context["button_continue"] ?? null);
        echo "</button>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-cart\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 238
        echo ($context["column_product"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 239
        echo ($context["column_model"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 240
        echo ($context["column_quantity"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 241
        echo ($context["column_price"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 242
        echo ($context["column_total"] ?? null);
        echo "</td>
                      <td>";
        // line 243
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody id=\"cart\">
                    ";
        // line 247
        if ((($context["order_products"] ?? null) || ($context["order_vouchers"] ?? null))) {
            // line 248
            echo "                    ";
            $context["product_row"] = 0;
            // line 249
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["order_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order_product"]) {
                // line 250
                echo "                    <tr>
                      <td class=\"text-left\">";
                // line 251
                echo twig_get_attribute($this->env, $this->source, $context["order_product"], "name", [], "any", false, false, false, 251);
                echo "<br />
                        <input type=\"hidden\" name=\"product[";
                // line 252
                echo ($context["product_row"] ?? null);
                echo "][product_id]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_product"], "product_id", [], "any", false, false, false, 252);
                echo "\" />
                        ";
                // line 253
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["order_product"], "option", [], "any", false, false, false, 253));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 254
                    echo "                        - <small>";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 254);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 254);
                    echo "</small><br />
                        ";
                    // line 255
                    if ((((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 255) == "select") || (twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 255) == "radio")) || (twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 255) == "image"))) {
                        // line 256
                        echo "                        <input type=\"hidden\" name=\"product[";
                        echo ($context["product_row"] ?? null);
                        echo "][option][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 256);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value_id", [], "any", false, false, false, 256);
                        echo "\" />
                        ";
                    }
                    // line 258
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 258) == "checkbox")) {
                        // line 259
                        echo "                        <input type=\"hidden\" name=\"product[";
                        echo ($context["product_row"] ?? null);
                        echo "][option][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 259);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_value_id", [], "any", false, false, false, 259);
                        echo "\" />
                        ";
                    }
                    // line 261
                    echo "                        ";
                    if (((((((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 261) == "text") || (twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 261) == "textarea")) || (twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 261) == "file")) || (twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 261) == "date")) || (twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 261) == "datetime")) || (twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 261) == "time"))) {
                        // line 262
                        echo "                        <input type=\"hidden\" name=\"product[";
                        echo ($context["product_row"] ?? null);
                        echo "][option][";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 262);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 262);
                        echo "\" />
                        ";
                    }
                    // line 264
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</td>
                      <td class=\"text-left\">";
                // line 265
                echo twig_get_attribute($this->env, $this->source, $context["order_product"], "model", [], "any", false, false, false, 265);
                echo "</td>
                      <td class=\"text-right\">";
                // line 266
                echo twig_get_attribute($this->env, $this->source, $context["order_product"], "quantity", [], "any", false, false, false, 266);
                echo "
                        <input type=\"hidden\" name=\"product[";
                // line 267
                echo ($context["product_row"] ?? null);
                echo "][quantity]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_product"], "quantity", [], "any", false, false, false, 267);
                echo "\" /></td>
                      <td class=\"text-right\"></td>
                      <td class=\"text-right\"></td>
                      <td class=\"text-center\"></td>
                    </tr>
                    ";
                // line 272
                $context["product_row"] = (($context["product_row"] ?? null) + 1);
                // line 273
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 274
            echo "                    ";
            $context["voucher_row"] = 0;
            // line 275
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["order_vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order_voucher"]) {
                // line 276
                echo "                    <tr>
                      <td class=\"text-left\">";
                // line 277
                echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "description", [], "any", false, false, false, 277);
                echo "
                        <input type=\"hidden\" name=\"voucher[";
                // line 278
                echo ($context["voucher_row"] ?? null);
                echo "][voucher_id]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "voucher_id", [], "any", false, false, false, 278);
                echo "\" />
                        <input type=\"hidden\" name=\"voucher[";
                // line 279
                echo ($context["voucher_row"] ?? null);
                echo "][description]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "description", [], "any", false, false, false, 279);
                echo "\" />
                        <input type=\"hidden\" name=\"voucher[";
                // line 280
                echo ($context["voucher_row"] ?? null);
                echo "][code]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "code", [], "any", false, false, false, 280);
                echo "\" />
                        <input type=\"hidden\" name=\"voucher[";
                // line 281
                echo ($context["voucher_row"] ?? null);
                echo "][from_name]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "from_name", [], "any", false, false, false, 281);
                echo "\" />
                        <input type=\"hidden\" name=\"voucher[";
                // line 282
                echo ($context["voucher_row"] ?? null);
                echo "][from_email]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "from_email", [], "any", false, false, false, 282);
                echo "\" />
                        <input type=\"hidden\" name=\"voucher[";
                // line 283
                echo ($context["voucher_row"] ?? null);
                echo "][to_name]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "to_name", [], "any", false, false, false, 283);
                echo "\" />
                        <input type=\"hidden\" name=\"voucher[";
                // line 284
                echo ($context["voucher_row"] ?? null);
                echo "][to_email]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "to_email", [], "any", false, false, false, 284);
                echo "\" />
                        <input type=\"hidden\" name=\"voucher[";
                // line 285
                echo ($context["voucher_row"] ?? null);
                echo "][voucher_theme_id]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "voucher_theme_id", [], "any", false, false, false, 285);
                echo "\" />
                        <input type=\"hidden\" name=\"voucher[";
                // line 286
                echo ($context["voucher_row"] ?? null);
                echo "][message]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "message", [], "any", false, false, false, 286);
                echo "\" />
                        <input type=\"hidden\" name=\"voucher[";
                // line 287
                echo ($context["voucher_row"] ?? null);
                echo "][amount]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_voucher"], "amount", [], "any", false, false, false, 287);
                echo "\" /></td>
                      <td class=\"text-left\"></td>
                      <td class=\"text-right\">1</td>
                      <td class=\"text-right\"></td>
                      <td class=\"text-right\"></td>
                      <td class=\"text-center\"></td>
                    </tr>
                    ";
                // line 294
                $context["voucher_row"] = (($context["voucher_row"] ?? null) + 1);
                // line 295
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 296
            echo "                    ";
        } else {
            // line 297
            echo "                    <tr>
                      <td class=\"text-center\" colspan=\"6\">";
            // line 298
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                    </tr>
                  </tbody>
                  ";
        }
        // line 302
        echo "                </table>
              </div>
              <ul class=\"nav nav-tabs nav-justified\">
                <li class=\"active\"><a href=\"#tab-product\" data-toggle=\"tab\">";
        // line 305
        echo ($context["tab_product"] ?? null);
        echo "</a></li>
                <li><a href=\"#tab-voucher\" data-toggle=\"tab\">";
        // line 306
        echo ($context["tab_voucher"] ?? null);
        echo "</a></li>
              </ul>
              <div class=\"tab-content\">
                <div class=\"tab-pane active\" id=\"tab-product\">
                  <fieldset>
                    <legend>";
        // line 311
        echo ($context["text_product"] ?? null);
        echo "</legend>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-product\">";
        // line 313
        echo ($context["entry_product"] ?? null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product\" value=\"\" id=\"input-product\" class=\"form-control\" />
                        <input type=\"hidden\" name=\"product_id\" value=\"\" />
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
        // line 320
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"quantity\" value=\"1\" id=\"input-quantity\" class=\"form-control\" />
                      </div>
                    </div>
                    <div id=\"option\"></div>
                  </fieldset>
                  <div class=\"text-right\">
                    <button type=\"button\" id=\"button-product-add\" data-loading-text=\"";
        // line 328
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
        echo ($context["button_product_add"] ?? null);
        echo "</button>
                  </div>
                </div>
                <div class=\"tab-pane\" id=\"tab-voucher\">
                  <fieldset>
                    <legend>";
        // line 333
        echo ($context["text_voucher"] ?? null);
        echo "</legend>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-to-name\">";
        // line 335
        echo ($context["entry_to_name"] ?? null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"to_name\" value=\"\" id=\"input-to-name\" class=\"form-control\" />
                      </div>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-to-email\">";
        // line 341
        echo ($context["entry_to_email"] ?? null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"to_email\" value=\"\" id=\"input-to-email\" class=\"form-control\" />
                      </div>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-from-name\">";
        // line 347
        echo ($context["entry_from_name"] ?? null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"from_name\" value=\"\" id=\"input-from-name\" class=\"form-control\" />
                      </div>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-from-email\">";
        // line 353
        echo ($context["entry_from_email"] ?? null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"from_email\" value=\"\" id=\"input-from-email\" class=\"form-control\" />
                      </div>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
        // line 359
        echo ($context["entry_theme"] ?? null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <select name=\"voucher_theme_id\" id=\"input-theme\" class=\"form-control\">
                          ";
        // line 362
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["voucher_themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_theme"]) {
            // line 363
            echo "                          <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "voucher_theme_id", [], "any", false, false, false, 363);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["voucher_theme"], "name", [], "any", false, false, false, 363);
            echo "</option>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 365
        echo "                        </select>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-message\">";
        // line 369
        echo ($context["entry_message"] ?? null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"message\" rows=\"5\" id=\"input-message\" class=\"form-control\"></textarea>
                      </div>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-amount\">";
        // line 375
        echo ($context["entry_amount"] ?? null);
        echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"amount\" value=\"";
        // line 377
        echo ($context["voucher_min"] ?? null);
        echo "\" id=\"input-amount\" class=\"form-control\" />
                      </div>
                    </div>
                  </fieldset>
                  <div class=\"text-right\">
                    <button type=\"button\" id=\"button-voucher-add\" data-loading-text=\"";
        // line 382
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
        echo ($context["button_voucher_add"] ?? null);
        echo "</button>
                  </div>
                </div>
              </div>
              <br />
              <div class=\"row\">
                <div class=\"col-sm-6 text-left\">
                  <button type=\"button\" onclick=\"\$('a[href=\\'#tab-customer\\']').tab('show');\" class=\"btn btn-default\"><i class=\"fa fa-arrow-left\"></i> ";
        // line 389
        echo ($context["button_back"] ?? null);
        echo "</button>
                </div>
                <div class=\"col-sm-6 text-right\">
                  <button type=\"button\" id=\"button-cart\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-right\"></i> ";
        // line 392
        echo ($context["button_continue"] ?? null);
        echo "</button>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-payment\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-address\">";
        // line 398
        echo ($context["entry_address"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_address\" id=\"input-payment-address\" class=\"form-control\">
                    <option value=\"0\" selected=\"selected\">";
        // line 401
        echo ($context["text_none"] ?? null);
        echo "</option>
                    ";
        // line 402
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 403
            echo "                    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 403);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 403);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 403);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 403);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 403);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 403);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 405
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-firstname\">";
        // line 409
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"firstname\" value=\"";
        // line 411
        echo ($context["payment_firstname"] ?? null);
        echo "\" id=\"input-payment-firstname\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-lastname\">";
        // line 415
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"lastname\" value=\"";
        // line 417
        echo ($context["payment_lastname"] ?? null);
        echo "\" id=\"input-payment-lastname\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-company\">";
        // line 421
        echo ($context["entry_company"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"company\" value=\"";
        // line 423
        echo ($context["payment_company"] ?? null);
        echo "\" id=\"input-payment-company\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-address-1\">";
        // line 427
        echo ($context["entry_address_1"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"address_1\" value=\"";
        // line 429
        echo ($context["payment_address_1"] ?? null);
        echo "\" id=\"input-payment-address-1\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-address-2\">";
        // line 433
        echo ($context["entry_address_2"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"address_2\" value=\"";
        // line 435
        echo ($context["payment_address_2"] ?? null);
        echo "\" id=\"input-payment-address-2\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-city\">";
        // line 439
        echo ($context["entry_city"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"city\" value=\"";
        // line 441
        echo ($context["payment_city"] ?? null);
        echo "\" id=\"input-payment-city\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-postcode\">";
        // line 445
        echo ($context["entry_postcode"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"postcode\" value=\"";
        // line 447
        echo ($context["payment_postcode"] ?? null);
        echo "\" id=\"input-payment-postcode\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-country\">";
        // line 451
        echo ($context["entry_country"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"country_id\" id=\"input-payment-country\" class=\"form-control\">
                    <option value=\"\">";
        // line 454
        echo ($context["text_select"] ?? null);
        echo "</option>
                    ";
        // line 455
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 456
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 456) == ($context["payment_country_id"] ?? null))) {
                // line 457
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 457);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 457);
                echo "</option>
                    ";
            } else {
                // line 459
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 459);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 459);
                echo "</option>
                    ";
            }
            // line 461
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 462
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-zone\">";
        // line 466
        echo ($context["entry_zone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"zone_id\" id=\"input-payment-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              ";
        // line 472
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 473
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 473) == "address")) {
                // line 474
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 474) == "select")) {
                    // line 475
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 475);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 475) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                    // line 476
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 476);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 476);
                    echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"custom_field[";
                    // line 478
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 478);
                    echo "]\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 478);
                    echo "\" class=\"form-control\">
                    <option value=\"\">";
                    // line 479
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                    ";
                    // line 480
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 480));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 481
                        echo "                    ";
                        if (((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["payment_custom_field"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 481)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 481) == (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["payment_custom_field"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 481)] ?? null) : null)))) {
                            // line 482
                            echo "                    <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 482);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 482);
                            echo "</option>
                    ";
                        } else {
                            // line 484
                            echo "                    <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 484);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 484);
                            echo "</option>
                    ";
                        }
                        // line 486
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 487
                    echo "                  </select>
                </div>
              </div>
              ";
                }
                // line 491
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 491) == "radio")) {
                    // line 492
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 492);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 492) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\">";
                    // line 493
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 493);
                    echo "</label>
                <div class=\"col-sm-10\">
                  <div id=\"input-payment-custom-field";
                    // line 495
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 495);
                    echo "\">
                    ";
                    // line 496
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 496));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 497
                        echo "                    <div class=\"radio\">
                      ";
                        // line 498
                        if (((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["payment_custom_field"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 498)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 498) == (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 498)] ?? null) : null)))) {
                            // line 499
                            echo "                      <label>
                        <input type=\"radio\" name=\"custom_field[";
                            // line 500
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 500);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 500);
                            echo "\" checked=\"checked\" />
                        ";
                            // line 501
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 501);
                            echo "</label>
                      ";
                        } else {
                            // line 503
                            echo "                      <label>
                        <input type=\"radio\" name=\"custom_field[";
                            // line 504
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 504);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 504);
                            echo "\" />
                        ";
                            // line 505
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 505);
                            echo "</label>
                      ";
                        }
                        // line 507
                        echo "                    </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 509
                    echo "                  </div>
                </div>
              </div>
              ";
                }
                // line 513
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 513) == "checkbox")) {
                    // line 514
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 514);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 514) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\">";
                    // line 515
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 515);
                    echo "</label>
                <div class=\"col-sm-10\">
                  <div id=\"input-payment-custom-field";
                    // line 517
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 517);
                    echo "\">
                    ";
                    // line 518
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 518));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 519
                        echo "                    <div class=\"checkbox\">
                      ";
                        // line 520
                        if (((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 520)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 520), (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 520)] ?? null) : null)))) {
                            // line 521
                            echo "                      <label>
                        <input type=\"checkbox\" name=\"custom_field[";
                            // line 522
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 522);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 522);
                            echo "\" checked=\"checked\" />
                        ";
                            // line 523
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 523);
                            echo "</label>
                      ";
                        } else {
                            // line 525
                            echo "                      <label>
                        <input type=\"checkbox\" name=\"custom_field[";
                            // line 526
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 526);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 526);
                            echo "\" />
                        ";
                            // line 527
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 527);
                            echo "</label>
                      ";
                        }
                        // line 529
                        echo "                    </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 531
                    echo "                  </div>
                </div>
              </div>
              ";
                }
                // line 535
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 535) == "text")) {
                    // line 536
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 536);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 536) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                    // line 537
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 537);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 537);
                    echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"custom_field[";
                    // line 539
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 539);
                    echo "]\" value=\"";
                    echo (((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["payment_custom_field"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 539)] ?? null) : null)) ? ((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["payment_custom_field"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 539)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 539)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 539);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 539);
                    echo "\" class=\"form-control\" />
                </div>
              </div>
              ";
                }
                // line 543
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 543) == "textarea")) {
                    // line 544
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 544);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 544) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                    // line 545
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 545);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 545);
                    echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"custom_field[";
                    // line 547
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 547);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 547);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 547);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["payment_custom_field"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 547)] ?? null) : null)) ? ((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 547)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 547)));
                    echo "</textarea>
                </div>
              </div>
              ";
                }
                // line 551
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 551) == "file")) {
                    // line 552
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 552);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 552) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\">";
                    // line 553
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 553);
                    echo "</label>
                <div class=\"col-sm-10\">
                  <button type=\"button\" id=\"button-payment-custom-field";
                    // line 555
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 555);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                  <input type=\"hidden\" name=\"custom_field[";
                    // line 556
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 556);
                    echo "]\" value=\"";
                    echo (((($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["payment_custom_field"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 556)] ?? null) : null)) ? ((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 556)] ?? null) : null)) : (""));
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 556);
                    echo "\" />
                </div>
              </div>
              ";
                }
                // line 560
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 560) == "date")) {
                    // line 561
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 561);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 561) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                    // line 562
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 562);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 562);
                    echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 565
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 565);
                    echo "]\" value=\"";
                    echo (((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["payment_custom_field"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 565)] ?? null) : null)) ? ((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 565)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 565)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 565);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 565);
                    echo "\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              ";
                }
                // line 572
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 572) == "time")) {
                    // line 573
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 573);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 573) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                    // line 574
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 574);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 574);
                    echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group time\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 577
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 577);
                    echo "]\" value=\"";
                    echo (((($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["payment_custom_field"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 577)] ?? null) : null)) ? ((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 577)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 577)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 577);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 577);
                    echo "\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              ";
                }
                // line 584
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 584) == "datetime")) {
                    // line 585
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 585);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 585) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                    // line 586
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 586);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 586);
                    echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group datetime\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 589
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 589);
                    echo "]\" value=\"";
                    echo (((($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["payment_custom_field"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 589)] ?? null) : null)) ? ((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = ($context["payment_custom_field"] ?? null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 589)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 589)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 589);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 589);
                    echo "\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              ";
                }
                // line 596
                echo "              ";
            }
            // line 597
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 598
        echo "              <div class=\"row\">
                <div class=\"col-sm-6 text-left\">
                  <button type=\"button\" onclick=\"\$('a[href=\\'#tab-cart\\']').tab('show');\" class=\"btn btn-default\"><i class=\"fa fa-arrow-left\"></i> ";
        // line 600
        echo ($context["button_back"] ?? null);
        echo "</button>
                </div>
                <div class=\"col-sm-6 text-right\">
                  <button type=\"button\" id=\"button-payment-address\" data-loading-text=\"";
        // line 603
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-right\"></i> ";
        echo ($context["button_continue"] ?? null);
        echo "</button>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-shipping\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-address\">";
        // line 609
        echo ($context["entry_address"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"shipping_address\" id=\"input-shipping-address\" class=\"form-control\">
                    <option value=\"0\" selected=\"selected\">";
        // line 612
        echo ($context["text_none"] ?? null);
        echo "</option>
                    ";
        // line 613
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 614
            echo "                    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 614);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 614);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 614);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 614);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 614);
            echo ", ";
            echo twig_get_attribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 614);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 616
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-firstname\">";
        // line 620
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"firstname\" value=\"";
        // line 622
        echo ($context["shipping_firstname"] ?? null);
        echo "\" id=\"input-shipping-firstname\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-lastname\">";
        // line 626
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"lastname\" value=\"";
        // line 628
        echo ($context["shipping_lastname"] ?? null);
        echo "\" id=\"input-shipping-lastname\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-company\">";
        // line 632
        echo ($context["entry_company"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"company\" value=\"";
        // line 634
        echo ($context["shipping_company"] ?? null);
        echo "\" id=\"input-shipping-company\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-address-1\">";
        // line 638
        echo ($context["entry_address_1"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"address_1\" value=\"";
        // line 640
        echo ($context["shipping_address_1"] ?? null);
        echo "\" id=\"input-shipping-address-1\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-address-2\">";
        // line 644
        echo ($context["entry_address_2"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"address_2\" value=\"";
        // line 646
        echo ($context["shipping_address_2"] ?? null);
        echo "\" id=\"input-shipping-address-2\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-city\">";
        // line 650
        echo ($context["entry_city"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"city\" value=\"";
        // line 652
        echo ($context["shipping_city"] ?? null);
        echo "\" id=\"input-shipping-city\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-postcode\">";
        // line 656
        echo ($context["entry_postcode"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"postcode\" value=\"";
        // line 658
        echo ($context["shipping_postcode"] ?? null);
        echo "\" id=\"input-shipping-postcode\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-country\">";
        // line 662
        echo ($context["entry_country"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"country_id\" id=\"input-shipping-country\" class=\"form-control\">
                    <option value=\"\">";
        // line 665
        echo ($context["text_select"] ?? null);
        echo "</option>
                    ";
        // line 666
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 667
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 667) == ($context["shipping_country_id"] ?? null))) {
                // line 668
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 668);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 668);
                echo "</option>
                    ";
            } else {
                // line 670
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 670);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 670);
                echo "</option>
                    ";
            }
            // line 672
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 673
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-zone\">";
        // line 677
        echo ($context["entry_zone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"zone_id\" id=\"input-shipping-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              ";
        // line 683
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 684
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 684) == "address")) {
                // line 685
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 685) == "select")) {
                    // line 686
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 686);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 686) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                    // line 687
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 687);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 687);
                    echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"custom_field[";
                    // line 689
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 689);
                    echo "]\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 689);
                    echo "\" class=\"form-control\">
                    <option value=\"\">";
                    // line 690
                    echo ($context["text_select"] ?? null);
                    echo "</option>
                    ";
                    // line 691
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 691));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 692
                        echo "                    ";
                        if (((($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 692)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 692) == (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 692)] ?? null) : null)))) {
                            // line 693
                            echo "                    <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 693);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 693);
                            echo "</option>
                    ";
                        } else {
                            // line 695
                            echo "                    <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 695);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 695);
                            echo "</option>
                    ";
                        }
                        // line 697
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 698
                    echo "                  </select>
                </div>
              </div>
              ";
                }
                // line 702
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 702) == "radio")) {
                    // line 703
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 703);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 703) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\">";
                    // line 704
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 704);
                    echo "</label>
                <div class=\"col-sm-10\">
                  <div id=\"input-shipping-custom-field";
                    // line 706
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 706);
                    echo "\">
                    ";
                    // line 707
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 707));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 708
                        echo "                    <div class=\"radio\">
                      ";
                        // line 709
                        if (((($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 709)] ?? null) : null) && (twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 709) == (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 709)] ?? null) : null)))) {
                            // line 710
                            echo "                      <label>
                        <input type=\"radio\" name=\"custom_field[";
                            // line 711
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 711);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 711);
                            echo "\" checked=\"checked\" />
                        ";
                            // line 712
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 712);
                            echo "</label>
                      ";
                        } else {
                            // line 714
                            echo "                      <label>
                        <input type=\"radio\" name=\"custom_field[";
                            // line 715
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 715);
                            echo "]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 715);
                            echo "\" />
                        ";
                            // line 716
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 716);
                            echo "</label>
                      ";
                        }
                        // line 718
                        echo "                    </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 720
                    echo "                  </div>
                </div>
              </div>
              ";
                }
                // line 724
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 724) == "checkbox")) {
                    // line 725
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 725);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 725) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\">";
                    // line 726
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 726);
                    echo "</label>
                <div class=\"col-sm-10\">
                  <div id=\"input-shipping-custom-field";
                    // line 728
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 728);
                    echo "\">
                    ";
                    // line 729
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 729));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 730
                        echo "                    <div class=\"checkbox\">
                      ";
                        // line 731
                        if (((($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 731)] ?? null) : null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 731), (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 731)] ?? null) : null)))) {
                            // line 732
                            echo "                      <label>
                        <input type=\"checkbox\" name=\"custom_field[";
                            // line 733
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 733);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 733);
                            echo "\" checked=\"checked\" />
                        ";
                            // line 734
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 734);
                            echo "</label>
                      ";
                        } else {
                            // line 736
                            echo "                      <label>
                        <input type=\"checkbox\" name=\"custom_field[";
                            // line 737
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 737);
                            echo "][]\" value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 737);
                            echo "\" />
                        ";
                            // line 738
                            echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 738);
                            echo "</label>
                      ";
                        }
                        // line 740
                        echo "                    </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 742
                    echo "                  </div>
                </div>
              </div>
              ";
                }
                // line 746
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 746) == "text")) {
                    // line 747
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 747);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 747) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                    // line 748
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 748);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 748);
                    echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"custom_field[";
                    // line 750
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 750);
                    echo "]\" value=\"";
                    echo (((($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 750)] ?? null) : null)) ? ((((($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 750)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 750)) : (""))) : (""));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 750);
                    echo "\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 750);
                    echo "\" class=\"form-control\" />
                </div>
              </div>
              ";
                }
                // line 754
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 754) == "textarea")) {
                    // line 755
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 755);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 755) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                    // line 756
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 756);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 756);
                    echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"custom_field[";
                    // line 758
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 758);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 758);
                    echo "\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 758);
                    echo "\" class=\"form-control\">";
                    echo (((($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 758)] ?? null) : null)) ? ((($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 758)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 758)));
                    echo "</textarea>
                </div>
              </div>
              ";
                }
                // line 762
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 762) == "file")) {
                    // line 763
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 763);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 763) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\">";
                    // line 764
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 764);
                    echo "</label>
                <div class=\"col-sm-10\">
                  <button type=\"button\" id=\"button-shipping-custom-field";
                    // line 766
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 766);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
                  <input type=\"hidden\" name=\"custom_field[";
                    // line 767
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 767);
                    echo "]\" value=\"";
                    echo (((($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 767)] ?? null) : null)) ? ((($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 767)] ?? null) : null)) : (""));
                    echo "\" id=\"input-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 767);
                    echo "\" />
                </div>
              </div>
              ";
                }
                // line 771
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 771) == "date")) {
                    // line 772
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 772);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 772) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                    // line 773
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 773);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 773);
                    echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 776
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 776);
                    echo "]\" value=\"";
                    echo (((($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 776)] ?? null) : null)) ? ((($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 776)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 776)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 776);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 776);
                    echo "\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              ";
                }
                // line 783
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 783) == "time")) {
                    // line 784
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 784);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 784) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                    // line 785
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 785);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 785);
                    echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group time\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 788
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 788);
                    echo "]\" value=\"";
                    echo (((($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 788)] ?? null) : null)) ? ((($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 788)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 788)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 788);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 788);
                    echo "\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              ";
                }
                // line 795
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 795) == "datetime")) {
                    // line 796
                    echo "              <div class=\"form-group custom-field custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 796);
                    echo "\" data-sort=\"";
                    echo (twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 796) + 3);
                    echo "\">
                <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                    // line 797
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 797);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 797);
                    echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group datetime\">
                    <input type=\"text\" name=\"custom_field[";
                    // line 800
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 800);
                    echo "]\" value=\"";
                    echo (((($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 800)] ?? null) : null)) ? ((($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = ($context["shipping_custom_field"] ?? null)) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4[twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 800)] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 800)));
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 800);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-shipping-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 800);
                    echo "\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              ";
                }
                // line 807
                echo "              ";
            }
            // line 808
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 809
        echo "              <div class=\"row\">
                <div class=\"col-sm-6 text-left\">
                  <button type=\"button\" onclick=\"\$('a[href=\\'#tab-payment\\']').tab('show');\" class=\"btn btn-default\"><i class=\"fa fa-arrow-left\"></i> ";
        // line 811
        echo ($context["button_back"] ?? null);
        echo "</button>
                </div>
                <div class=\"col-sm-6 text-right\">
                  <button type=\"button\" id=\"button-shipping-address\" data-loading-text=\"";
        // line 814
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-arrow-right\"></i> ";
        echo ($context["button_continue"] ?? null);
        echo "</button>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-total\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 823
        echo ($context["column_product"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 824
        echo ($context["column_model"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 825
        echo ($context["column_quantity"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 826
        echo ($context["column_price"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 827
        echo ($context["column_total"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody id=\"total\">
                    <tr>
                      <td class=\"text-center\" colspan=\"5\">";
        // line 832
        echo ($context["text_no_results"] ?? null);
        echo "</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <fieldset>
                <legend>";
        // line 838
        echo ($context["text_order_detail"] ?? null);
        echo "</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-shipping-method\">";
        // line 840
        echo ($context["entry_shipping_method"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"shipping_method\" id=\"input-shipping-method\" class=\"form-control\">
                        <option value=\"\">";
        // line 844
        echo ($context["text_select"] ?? null);
        echo "</option>
                        ";
        // line 845
        if (($context["shipping_code"] ?? null)) {
            // line 846
            echo "                        <option value=\"";
            echo ($context["shipping_code"] ?? null);
            echo "\" selected=\"selected\">";
            echo ($context["shipping_method"] ?? null);
            echo "</option>
                        ";
        }
        // line 848
        echo "                      </select>
                      <span class=\"input-group-btn\">
                      <button type=\"button\" id=\"button-shipping-method\" data-loading-text=\"";
        // line 850
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_apply"] ?? null);
        echo "</button>
                      </span></div>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-payment-method\">";
        // line 855
        echo ($context["entry_payment_method"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"payment_method\" id=\"input-payment-method\" class=\"form-control\">
                        <option value=\"\">";
        // line 859
        echo ($context["text_select"] ?? null);
        echo "</option>
                        ";
        // line 860
        if (($context["payment_code"] ?? null)) {
            // line 861
            echo "                        <option value=\"";
            echo ($context["payment_code"] ?? null);
            echo "\" selected=\"selected\">";
            echo ($context["payment_method"] ?? null);
            echo "</option>
                        ";
        }
        // line 863
        echo "                      </select>
                      <span class=\"input-group-btn\">
                      <button type=\"button\" id=\"button-payment-method\" data-loading-text=\"";
        // line 865
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_apply"] ?? null);
        echo "</button>
                      </span></div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-coupon\">";
        // line 870
        echo ($context["entry_coupon"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"coupon\" value=\"";
        // line 873
        echo ($context["coupon"] ?? null);
        echo "\" id=\"input-coupon\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" id=\"button-coupon\" data-loading-text=\"";
        // line 875
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_apply"] ?? null);
        echo "</button>
                      </span></div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher\">";
        // line 880
        echo ($context["entry_voucher"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"voucher\" value=\"";
        // line 883
        echo ($context["voucher"] ?? null);
        echo "\" id=\"input-voucher\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" id=\"button-voucher\" data-loading-text=\"";
        // line 885
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_apply"] ?? null);
        echo "</button>
                      </span></div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-reward\">";
        // line 890
        echo ($context["entry_reward"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"reward\" value=\"";
        // line 893
        echo ($context["reward"] ?? null);
        echo "\" id=\"input-reward\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"form-control\" />
                      <span class=\"input-group-btn\">
                      <button type=\"button\" id=\"button-reward\" data-loading-text=\"";
        // line 895
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_apply"] ?? null);
        echo "</button>
                      </span></div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 900
        echo ($context["entry_order_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"order_status_id\" id=\"input-order-status\" class=\"form-control\">
                      ";
        // line 903
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 904
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 904) == ($context["order_status_id"] ?? null))) {
                // line 905
                echo "                      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 905);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 905);
                echo "</option>
                      ";
            } else {
                // line 907
                echo "                      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 907);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 907);
                echo "</option>
                      ";
            }
            // line 909
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 910
        echo "                    </select>
                    <input type=\"hidden\" name=\"order_id\" value=\"";
        // line 911
        echo ($context["order_id"] ?? null);
        echo "\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
        // line 915
        echo ($context["entry_comment"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"5\" id=\"input-comment\" class=\"form-control\">";
        // line 917
        echo ($context["comment"] ?? null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\">";
        // line 921
        echo ($context["entry_affiliate"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"affiliate\" value=\"";
        // line 923
        echo ($context["affiliate"] ?? null);
        echo "\" id=\"input-affiliate\" class=\"form-control\" />
                    <input type=\"hidden\" name=\"affiliate_id\" value=\"";
        // line 924
        echo ($context["affiliate_id"] ?? null);
        echo "\" />
                  </div>
                </div>
              </fieldset>
              <div class=\"row\">
                <div class=\"col-sm-6 text-left\">
                  <button type=\"button\" onclick=\"\$('select[name=\\'shipping_method\\']').prop('disabled') ? \$('a[href=\\'#tab-payment\\']').tab('show') : \$('a[href=\\'#tab-shipping\\']').tab('show');\" class=\"btn btn-default\"><i class=\"fa fa-arrow-left\"></i> ";
        // line 930
        echo ($context["button_back"] ?? null);
        echo "</button>
                </div>
                <div class=\"col-sm-6 text-right\">
                  <button type=\"button\" id=\"button-refresh\" data-toggle=\"tooltip\" title=\"";
        // line 933
        echo ($context["button_refresh"] ?? null);
        echo "\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-warning\"><i class=\"fa fa-refresh\"></i></button>
                  <button type=\"button\" id=\"button-save\" class=\"btn btn-primary\"><i class=\"fa fa-check-circle\"></i> ";
        // line 934
        echo ($context["button_save"] ?? null);
        echo "</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
// Disable the tabs
\$('#order a[data-toggle=\\'tab\\']').on('click', function(e) {
\treturn false;
});

// Currency
\$('select[name=\\'currency\\']').on('change', function() {
\t\$.ajax({
\t\turl: '";
        // line 952
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/currency&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: 'currency=' + \$('select[name=\\'currency\\'] option:selected').val(),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'currency\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'currency\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('select[name=\\'currency\\']').closest('.form-group').addClass('has-error');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'currency\\']').trigger('change');

// Customer
\$('input[name=\\'customer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 986
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tjson.unshift({
\t\t\t\t\tcustomer_id: '0',
\t\t\t\t\tcustomer_group_id: '";
        // line 991
        echo ($context["customer_group_id"] ?? null);
        echo "',
\t\t\t\t\tname: '";
        // line 992
        echo ($context["text_none"] ?? null);
        echo "',
\t\t\t\t\tcustomer_group: '',
\t\t\t\t\tfirstname: '',
\t\t\t\t\tlastname: '',
\t\t\t\t\temail: '',
\t\t\t\t\ttelephone: '',
\t\t\t\t\tcustom_field: [],
\t\t\t\t\taddress: []
\t\t\t\t});

\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tcategory: item['customer_group'],
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id'],
\t\t\t\t\t\tcustomer_group_id: item['customer_group_id'],
\t\t\t\t\t\tfirstname: item['firstname'],
\t\t\t\t\t\tlastname: item['lastname'],
\t\t\t\t\t\temail: item['email'],
\t\t\t\t\t\ttelephone: item['telephone'],
\t\t\t\t\t\tcustom_field: item['custom_field'],
\t\t\t\t\t\taddress: item['address']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t// Reset all custom fields
\t\t\$('#tab-customer input[type=\\'text\\'], #tab-customer textarea').not('#tab-customer input[name=\\'customer\\'], #tab-customer input[name=\\'customer_id\\']').val('');
\t\t\$('#tab-customer select option').not(\$('#tab-customer select[name=\\'store_id\\'] option, #tab-customer select[name=\\'currency\\'] option')).removeAttr('selected');
\t\t\$('#tab-customer input[type=\\'checkbox\\'], #tab-customer input[type=\\'radio\\']').removeAttr('checked');

\t\t\$('#tab-customer input[name=\\'customer\\']').val(item['label']);
\t\t\$('#tab-customer input[name=\\'customer_id\\']').val(item['value']);
\t\t\$('#tab-customer select[name=\\'customer_group_id\\']').val(item['customer_group_id']);
\t\t\$('#tab-customer input[name=\\'firstname\\']').val(item['firstname']);
\t\t\$('#tab-customer input[name=\\'lastname\\']').val(item['lastname']);
\t\t\$('#tab-customer input[name=\\'email\\']').val(item['email']);
\t\t\$('#tab-customer input[name=\\'telephone\\']').val(item['telephone']);

\t\tfor (i in item.custom_field) {
\t\t\t\$('#tab-customer select[name=\\'custom_field[' + i + ']\\']').val(item.custom_field[i]);
\t\t\t\$('#tab-customer textarea[name=\\'custom_field[' + i + ']\\']').val(item.custom_field[i]);
\t\t\t\$('#tab-customer input[name^=\\'custom_field[' + i + ']\\'][type=\\'text\\']').val(item.custom_field[i]);
\t\t\t\$('#tab-customer input[name^=\\'custom_field[' + i + ']\\'][type=\\'hidden\\']').val(item.custom_field[i]);
\t\t\t\$('#tab-customer input[name^=\\'custom_field[' + i + ']\\'][type=\\'radio\\'][value=\\'' + item.custom_field[i] + '\\']').prop('checked', true);

\t\t\tif (item.custom_field[i] instanceof Array) {
\t\t\t\tfor (j = 0; j < item.custom_field[i].length; j++) {
\t\t\t\t\t\$('#tab-customer input[name^=\\'custom_field[' + i + ']\\'][type=\\'checkbox\\'][value=\\'' + item.custom_field[i][j] + '\\']').prop('checked', true);
\t\t\t\t}
\t\t\t}
\t\t}

\t\t\$('select[name=\\'customer_group_id\\']').trigger('change');

\t\thtml = '<option value=\"0\">";
        // line 1049
        echo ($context["text_none"] ?? null);
        echo "</option>';

\t\tfor (i in  item['address']) {
\t\t\thtml += '<option value=\"' + item['address'][i]['address_id'] + '\">' + item['address'][i]['firstname'] + ' ' + item['address'][i]['lastname'] + ', ' + item['address'][i]['address_1'] + ', ' + item['address'][i]['city'] + ', ' + item['address'][i]['country'] + '</option>';
\t\t}

\t\t\$('select[name=\\'payment_address\\']').html(html);
\t\t\$('select[name=\\'shipping_address\\']').html(html);
\t}
});

// Custom Fields
\$('select[name=\\'customer_group_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=customer/customer/customfield&user_token=";
        // line 1063
        echo ($context["user_token"] ?? null);
        echo "&customer_group_id=' + this.value,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('.custom-field').hide();
\t\t\t\$('.custom-field').removeClass('required');

\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\tcustom_field = json[i];

\t\t\t\t\$('.custom-field' + custom_field['custom_field_id']).show();

\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\$('.custom-field' + custom_field['custom_field_id']).addClass('required');
\t\t\t\t}
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'customer_group_id\\']').trigger('change');

\$('#button-customer').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 1089
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/customer&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: \$('#tab-customer input[type=\\'text\\'], #tab-customer input[type=\\'hidden\\'], #tab-customer input[type=\\'radio\\']:checked, #tab-customer input[type=\\'checkbox\\']:checked, #tab-customer select, #tab-customer textarea'),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-customer').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t \$('#button-customer').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-' + i.replace('_', '-'));

\t\t\t\t\tif (element.parent().hasClass('input-group')) {
                   \t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parentsUntil('.form-group').parent().addClass('has-error');
\t\t\t} else {
                // Refresh products, vouchers and totals
                var request_1 = \$.ajax({
                    url: '";
        // line 1124
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/cart/add&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
                    type: 'post',
                    data: \$('#cart input[name^=\\'product\\'][type=\\'text\\'], #cart input[name^=\\'product\\'][type=\\'hidden\\'], #cart input[name^=\\'product\\'][type=\\'radio\\']:checked, #cart input[name^=\\'product\\'][type=\\'checkbox\\']:checked, #cart select[name^=\\'product\\'], #cart textarea[name^=\\'product\\']'),
                    dataType: 'json',
                    crossDomain: true,
                    beforeSend: function() {
                        \$('#button-product-add').button('loading');
                    },
                    complete: function() {
                        \$('#button-product-add').button('reset');
                    },
                    success: function(json) {
                        \$('.alert-dismissible, .text-danger').remove();
                        \$('.form-group').removeClass('has-error');

                        if (json['error'] && json['error']['warning']) {
                            \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                        }
            \t\t},
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
                });

                var request_2 = request_1.then(function() {
                    \$.ajax({
                        url: '";
        // line 1150
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/voucher/add&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
                        type: 'post',
                        data: \$('#cart input[name^=\\'voucher\\'][type=\\'text\\'], #cart input[name^=\\'voucher\\'][type=\\'hidden\\'], #cart input[name^=\\'voucher\\'][type=\\'radio\\']:checked, #cart input[name^=\\'voucher\\'][type=\\'checkbox\\']:checked, #cart select[name^=\\'voucher\\'], #cart textarea[name^=\\'voucher\\']'),
                        dataType: 'json',
                        crossDomain: true,
                        beforeSend: function() {
                            \$('#button-voucher-add').button('loading');
                        },
                        complete: function() {
                            \$('#button-voucher-add').button('reset');
                        },
                        success: function(json) {
                            \$('.alert-dismissible, .text-danger').remove();
                            \$('.form-group').removeClass('has-error');

                            if (json['error'] && json['error']['warning']) {
                                \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                            }
                \t\t},
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                        }
                    });
                });

                request_2.done(function() {
                    \$('#button-refresh').trigger('click');

                    \$('a[href=\\'#tab-cart\\']').tab('show');
                });
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#tab-product input[name=\\'product\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 1191
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id'],
\t\t\t\t\t\tmodel: item['model'],
\t\t\t\t\t\toption: item['option'],
\t\t\t\t\t\tprice: item['price']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('#tab-product input[name=\\'product\\']').val(item['label']);
\t\t\$('#tab-product input[name=\\'product_id\\']').val(item['value']);

\t\tif (item['option'] != '') {
 \t\t\thtml  = '<fieldset>';
            html += '  <legend>";
        // line 1212
        echo ($context["entry_option"] ?? null);
        echo "</legend>';

\t\t\tfor (i = 0; i < item['option'].length; i++) {
\t\t\t\toption = item['option'][i];

\t\t\t\tif (option['type'] == 'select') {
\t\t\t\t\thtml += '<div class=\"form-group' + (option['required'] ? ' required' : '') + '\">';
\t\t\t\t\thtml += '  <label class=\"col-sm-2 control-label\" for=\"input-option' + option['product_option_id'] + '\">' + option['name'] + '</label>';
\t\t\t\t\thtml += '  <div class=\"col-sm-10\">';
\t\t\t\t\thtml += '    <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option' + option['product_option_id'] + '\" class=\"form-control\">';
\t\t\t\t\thtml += '      <option value=\"\">";
        // line 1222
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\t\t\tfor (j = 0; j < option['product_option_value'].length; j++) {
\t\t\t\t\t\toption_value = option['product_option_value'][j];

\t\t\t\t\t\thtml += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

\t\t\t\t\t\tif (option_value['price']) {
\t\t\t\t\t\t\thtml += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
\t\t\t\t\t\t}

\t\t\t\t\t\thtml += '</option>';
\t\t\t\t\t}

\t\t\t\t\thtml += '    </select>';
\t\t\t\t\thtml += '  </div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t}

\t\t\t\tif (option['type'] == 'radio') {
\t\t\t\t\thtml += '<div class=\"form-group' + (option['required'] ? ' required' : '') + '\">';
\t\t\t\t\thtml += '  <label class=\"col-sm-2 control-label\" for=\"input-option' + option['product_option_id'] + '\">' + option['name'] + '</label>';
\t\t\t\t\thtml += '  <div class=\"col-sm-10\">';
\t\t\t\t\thtml += '    <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option' + option['product_option_id'] + '\" class=\"form-control\">';
\t\t\t\t\thtml += '      <option value=\"\">";
        // line 1246
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\t\t\tfor (j = 0; j < option['product_option_value'].length; j++) {
\t\t\t\t\t\toption_value = option['product_option_value'][j];

\t\t\t\t\t\thtml += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

\t\t\t\t\t\tif (option_value['price']) {
\t\t\t\t\t\t\thtml += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
\t\t\t\t\t\t}

\t\t\t\t\t\thtml += '</option>';
\t\t\t\t\t}

\t\t\t\t\thtml += '    </select>';
\t\t\t\t\thtml += '  </div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t}

\t\t\t\tif (option['type'] == 'checkbox') {
\t\t\t\t\thtml += '<div class=\"form-group' + (option['required'] ? ' required' : '') + '\">';
\t\t\t\t\thtml += '  <label class=\"col-sm-2 control-label\">' + option['name'] + '</label>';
\t\t\t\t\thtml += '  <div class=\"col-sm-10\">';
\t\t\t\t\thtml += '    <div id=\"input-option' + option['product_option_id'] + '\">';

\t\t\t\t\tfor (j = 0; j < option['product_option_value'].length; j++) {
\t\t\t\t\t\toption_value = option['product_option_value'][j];

\t\t\t\t\t\thtml += '<div class=\"checkbox\">';

\t\t\t\t\t\thtml += '  <label><input type=\"checkbox\" name=\"option[' + option['product_option_id'] + '][]\" value=\"' + option_value['product_option_value_id'] + '\" /> ' + option_value['name'];

\t\t\t\t\t\tif (option_value['price']) {
\t\t\t\t\t\t\thtml += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
\t\t\t\t\t\t}

\t\t\t\t\t\thtml += '  </label>';
\t\t\t\t\t\thtml += '</div>';
\t\t\t\t\t}

\t\t\t\t\thtml += '    </div>';
\t\t\t\t\thtml += '  </div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t}

\t\t\t\tif (option['type'] == 'image') {
\t\t\t\t\thtml += '<div class=\"form-group' + (option['required'] ? ' required' : '') + '\">';
\t\t\t\t\thtml += '  <label class=\"col-sm-2 control-label\" for=\"input-option' + option['product_option_id'] + '\">' + option['name'] + '</label>';
\t\t\t\t\thtml += '  <div class=\"col-sm-10\">';
\t\t\t\t\thtml += '    <select name=\"option[' + option['product_option_id'] + ']\" id=\"input-option' + option['product_option_id'] + '\" class=\"form-control\">';
\t\t\t\t\thtml += '      <option value=\"\">";
        // line 1296
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\t\t\tfor (j = 0; j < option['product_option_value'].length; j++) {
\t\t\t\t\t\toption_value = option['product_option_value'][j];

\t\t\t\t\t\thtml += '<option value=\"' + option_value['product_option_value_id'] + '\">' + option_value['name'];

\t\t\t\t\t\tif (option_value['price']) {
\t\t\t\t\t\t\thtml += ' (' + option_value['price_prefix'] + option_value['price'] + ')';
\t\t\t\t\t\t}

\t\t\t\t\t\thtml += '</option>';
\t\t\t\t\t}

\t\t\t\t\thtml += '    </select>';
\t\t\t\t\thtml += '  </div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t}

\t\t\t\tif (option['type'] == 'text') {
\t\t\t\t\thtml += '<div class=\"form-group' + (option['required'] ? ' required' : '') + '\">';
\t\t\t\t\thtml += '  <label class=\"col-sm-2 control-label\" for=\"input-option' + option['product_option_id'] + '\">' + option['name'] + '</label>';
\t\t\t\t\thtml += '  <div class=\"col-sm-10\"><input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" id=\"input-option' + option['product_option_id'] + '\" class=\"form-control\" /></div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t}

\t\t\t\tif (option['type'] == 'textarea') {
\t\t\t\t\thtml += '<div class=\"form-group' + (option['required'] ? ' required' : '') + '\">';
\t\t\t\t\thtml += '  <label class=\"col-sm-2 control-label\" for=\"input-option' + option['product_option_id'] + '\">' + option['name'] + '</label>';
\t\t\t\t\thtml += '  <div class=\"col-sm-10\"><textarea name=\"option[' + option['product_option_id'] + ']\" rows=\"5\" id=\"input-option' + option['product_option_id'] + '\" class=\"form-control\">' + option['value'] + '</textarea></div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t}

\t\t\t\tif (option['type'] == 'file') {
\t\t\t\t\thtml += '<div class=\"form-group' + (option['required'] ? ' required' : '') + '\">';
\t\t\t\t\thtml += '  <label class=\"col-sm-2 control-label\">' + option['name'] + '</label>';
\t\t\t\t\thtml += '  <div class=\"col-sm-10\">';
\t\t\t\t\thtml += '    <button type=\"button\" id=\"button-upload' + option['product_option_id'] + '\" data-loading-text=\"";
        // line 1333
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
        echo ($context["button_upload"] ?? null);
        echo "</button>';
\t\t\t\t\thtml += '    <input type=\"hidden\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" id=\"input-option' + option['product_option_id'] + '\" />';
\t\t\t\t\thtml += '  </div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t}

\t\t\t\tif (option['type'] == 'date') {
\t\t\t\t\thtml += '<div class=\"form-group' + (option['required'] ? ' required' : '') + '\">';
\t\t\t\t\thtml += '  <label class=\"col-sm-2 control-label\" for=\"input-option' + option['product_option_id'] + '\">' + option['name'] + '</label>';
\t\t\t\t\thtml += '  <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" data-date-format=\"YYYY-MM-DD\" id=\"input-option' + option['product_option_id'] + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t}

\t\t\t\tif (option['type'] == 'datetime') {
\t\t\t\t\thtml += '<div class=\"form-group' + (option['required'] ? ' required' : '') + '\">';
\t\t\t\t\thtml += '  <label class=\"col-sm-2 control-label\" for=\"input-option' + option['product_option_id'] + '\">' + option['name'] + '</label>';
\t\t\t\t\thtml += '  <div class=\"col-sm-3\"><div class=\"input-group datetime\"><input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option' + option['product_option_id'] + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t}

\t\t\t\tif (option['type'] == 'time') {
\t\t\t\t\thtml += '<div class=\"form-group' + (option['required'] ? ' required' : '') + '\">';
\t\t\t\t\thtml += '  <label class=\"col-sm-2 control-label\" for=\"input-option' + option['product_option_id'] + '\">' + option['name'] + '</label>';
\t\t\t\t\thtml += '  <div class=\"col-sm-3\"><div class=\"input-group time\"><input type=\"text\" name=\"option[' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" placeholder=\"' + option['name'] + '\" data-date-format=\"HH:mm\" id=\"input-option' + option['product_option_id'] + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t\t\thtml += '</div>';
\t\t\t\t}
\t\t\t}

\t\t\thtml += '</fieldset>';

\t\t\t\$('#option').html(html);

\t\t\t\$('.date').datetimepicker({
\t\t\t\tlanguage: '";
        // line 1366
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t\t\tpickTime: false
\t\t\t});

\t\t\t\$('.datetime').datetimepicker({
\t\t\t\tlanguage: '";
        // line 1371
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t\t\tpickDate: true,
\t\t\t\tpickTime: true
\t\t\t});

\t\t\t\$('.time').datetimepicker({
\t\t\t\tlanguage: '";
        // line 1377
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t\t\tpickDate: false
\t\t\t});
\t\t} else {
\t\t\t\$('#option').html('');
\t\t}
\t}
});

\$('#button-product-add').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 1388
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/cart/add&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: \$('#tab-product input[name=\\'product_id\\'], #tab-product input[name=\\'quantity\\'], #tab-product input[name^=\\'option\\'][type=\\'text\\'], #tab-product input[name^=\\'option\\'][type=\\'hidden\\'], #tab-product input[name^=\\'option\\'][type=\\'radio\\']:checked, #tab-product input[name^=\\'option\\'][type=\\'checkbox\\']:checked, #tab-product select[name^=\\'option\\'], #tab-product textarea[name^=\\'option\\']'),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-product-add').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-product-add').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['store']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['store'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parentsUntil('.form-group').parent().addClass('has-error');
\t\t\t} else {
\t\t\t\t// Refresh products, vouchers and totals
\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Voucher
\$('#button-voucher-add').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 1440
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/voucher/add&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: \$('#tab-voucher input[type=\\'text\\'], #tab-voucher input[type=\\'hidden\\'], #tab-voucher input[type=\\'radio\\']:checked, #tab-voucher input[type=\\'checkbox\\']:checked, #tab-voucher select, #tab-voucher textarea'),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-voucher-add').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-voucher-add').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-' + i.replace('_', '-'));

\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parentsUntil('.form-group').parent().addClass('has-error');
\t\t\t} else {
\t\t\t\t\$('input[name=\\'from_name\\']').val('');
\t\t\t\t\$('input[name=\\'from_email\\']').val('');
\t\t\t\t\$('input[name=\\'to_name\\']').val('');
\t\t\t\t\$('input[name=\\'to_email\\']').val('');
\t\t\t\t\$('textarea[name=\\'message\\']').val('');
\t\t\t\t\$('input[name=\\'amount\\']').val('";
        // line 1478
        echo twig_escape_filter($this->env, ($context["voucher_min"] ?? null), "js");
        echo "');

\t\t\t\t// Refresh products, vouchers and totals
\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#cart').delegate('.btn-danger', 'click', function() {
\tvar node = this;

\t\$.ajax({
\t\turl: '";
        // line 1494
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/cart/remove&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: 'key=' + encodeURIComponent(this.value),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$(node).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(node).button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\t// Check for errors
\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t} else {
\t\t\t\t// Refresh products, vouchers and totals
\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#cart').delegate('.btn-primary', 'click', function() {
    var node = this;

    // Refresh products, vouchers and totals
    \$.ajax({
        url: '";
        // line 1527
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/cart/add&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
        type: 'post',
        data: \$('#cart input[name^=\\'product\\'][type=\\'text\\'], #cart input[name^=\\'product\\'][type=\\'hidden\\'], #cart input[name^=\\'product\\'][type=\\'radio\\']:checked, #cart input[name^=\\'product\\'][type=\\'checkbox\\']:checked, #cart select[name^=\\'product\\'], #cart textarea[name^=\\'product\\']'),
        dataType: 'json',
        crossDomain: true,
        beforeSend: function() {
            \$(node).button('loading');
        },
        complete: function() {
            \$(node).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible, .text-danger').remove();
            \$('.form-group').removeClass('has-error');

            if (json['error'] && json['error']['warning']) {
                \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
            }

            if (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    }).done(function() {
        \$('#button-refresh').trigger('click');
    });
});

\$('#button-cart').on('click', function() {
\t\$('a[href=\\'#tab-payment\\']').tab('show');
});

// Payment Address
\$('select[name=\\'payment_address\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=customer/customer/address&user_token=";
        // line 1565
        echo ($context["user_token"] ?? null);
        echo "&address_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'payment_address\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'payment_address\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\t// Reset all fields
\t\t\t\$('#tab-payment input[type=\\'text\\'], #tab-payment input[type=\\'text\\'], #tab-payment textarea').val('');
\t\t\t\$('#tab-payment select option').not('#tab-payment select[name=\\'payment_address\\']').removeAttr('selected');
\t\t\t\$('#tab-payment input[type=\\'checkbox\\'], #tab-payment input[type=\\'radio\\']').removeAttr('checked');

\t\t\t\$('#tab-payment input[name=\\'firstname\\']').val(json['firstname']);
\t\t\t\$('#tab-payment input[name=\\'lastname\\']').val(json['lastname']);
\t\t\t\$('#tab-payment input[name=\\'company\\']').val(json['company']);
\t\t\t\$('#tab-payment input[name=\\'address_1\\']').val(json['address_1']);
\t\t\t\$('#tab-payment input[name=\\'address_2\\']').val(json['address_2']);
\t\t\t\$('#tab-payment input[name=\\'city\\']').val(json['city']);
\t\t\t\$('#tab-payment input[name=\\'postcode\\']').val(json['postcode']);
\t\t\t\$('#tab-payment select[name=\\'country_id\\']').val(json['country_id']);

\t\t\tpayment_zone_id = json['zone_id'];

\t\t\tfor (i in json['custom_field']) {
\t\t\t\t\$('#tab-payment select[name=\\'custom_field[' + i + ']\\']').val(json['custom_field'][i]);
\t\t\t\t\$('#tab-payment textarea[name=\\'custom_field[' + i + ']\\']').val(json['custom_field'][i]);
\t\t\t\t\$('#tab-payment input[name^=\\'custom_field[' + i + ']\\'][type=\\'text\\']').val(json['custom_field'][i]);
\t\t\t\t\$('#tab-payment input[name^=\\'custom_field[' + i + ']\\'][type=\\'hidden\\']').val(json['custom_field'][i]);
\t\t\t\t\$('#tab-payment input[name^=\\'custom_field[' + i + ']\\'][type=\\'radio\\'][value=\\'' + json['custom_field'][i] + '\\']').prop('checked', true);
\t\t\t\t\$('#tab-payment input[name^=\\'custom_field[' + i + ']\\'][type=\\'checkbox\\'][value=\\'' + json['custom_field'][i] + '\\']').prop('checked', true);

\t\t\t\tif (json['custom_field'][i] instanceof Array) {
\t\t\t\t\tfor (j = 0; j < json['custom_field'][i].length; j++) {
\t\t\t\t\t\t\$('#tab-payment input[name^=\\'custom_field[' + i + ']\\'][type=\\'checkbox\\'][value=\\'' + json['custom_field'][i][j] + '\\']').prop('checked', true);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t\$('#tab-payment select[name=\\'country_id\\']').trigger('change');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

var payment_zone_id = '";
        // line 1613
        echo ($context["payment_zone_id"] ?? null);
        echo "';

\$('#tab-payment select[name=\\'country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1617
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#tab-payment select[name=\\'country_id\\']').after(' <i class=\"fa fa-circle-o-notch fa-spin\"></i>');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#tab-payment .fa-spin').remove();
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\$('#tab-payment input[name=\\'postcode\\']').closest('.form-group').addClass('required');
\t\t\t} else {
\t\t\t\t\$('#tab-payment input[name=\\'postcode\\']').closest('.form-group').removeClass('required');
\t\t\t}

\t\t\thtml = '<option value=\"\">";
        // line 1632
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
        \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == payment_zone_id) {
\t      \t\t\t\thtml += ' selected=\"selected\"';
\t    \t\t\t}

\t    \t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1645
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t}

\t\t\t\$('#tab-payment select[name=\\'zone_id\\']').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#tab-payment select[name=\\'country_id\\']').trigger('change');

\$('#button-payment-address').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 1660
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/payment/address&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: \$('#tab-payment input[type=\\'text\\'], #tab-payment input[type=\\'hidden\\'], #tab-payment input[type=\\'radio\\']:checked, #tab-payment input[type=\\'checkbox\\']:checked, #tab-payment select, #tab-payment textarea'),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-payment-address').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-payment-address').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\t// Check for errors
\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parentsUntil('.form-group').parent().addClass('has-error');
\t\t\t} else {
\t\t\t\t// Payment Methods
\t\t\t\t\$.ajax({
\t\t\t\t\turl: '";
        // line 1696
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/payment/methods&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tcrossDomain: true,
\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t\$('#button-payment-address').button('loading');
\t\t\t\t\t},
\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\$('#button-payment-address').button('reset');
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\thtml = '<option value=\"\">";
        // line 1709
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\t\t\t\t\tif (json['payment_methods']) {
\t\t\t\t\t\t\t\tfor (i in json['payment_methods']) {
\t\t\t\t\t\t\t\t\tif (json['payment_methods'][i]['code'] == \$('select[name=\\'payment_method\\'] option:selected').val()) {
\t\t\t\t\t\t\t\t\t\thtml += '<option value=\"' + json['payment_methods'][i]['code'] + '\" selected=\"selected\">' + json['payment_methods'][i]['title'] + '</option>';
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\thtml += '<option value=\"' + json['payment_methods'][i]['code'] + '\">' + json['payment_methods'][i]['title'] + '</option>';
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\$('select[name=\\'payment_method\\']').html(html);
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t}).done(function() {
                    // Refresh products, vouchers and totals
    \t\t\t\t\$('#button-refresh').trigger('click');

    \t\t\t\t// If shipping required got to shipping tab else total tabs
    \t\t\t\tif (\$('select[name=\\'shipping_method\\']').prop('disabled')) {
    \t\t\t\t\t\$('a[href=\\'#tab-total\\']').tab('show');
    \t\t\t\t} else {
    \t\t\t\t\t\$('a[href=\\'#tab-shipping\\']').tab('show');
    \t\t\t\t}
                });
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Shipping Address
\$('select[name=\\'shipping_address\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=customer/customer/address&user_token=";
        // line 1749
        echo ($context["user_token"] ?? null);
        echo "&address_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'shipping_address\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'shipping_address\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\t// Reset all fields
\t\t\t\$('#tab-shipping input[type=\\'text\\'], #tab-shipping input[type=\\'text\\'], #tab-shipping textarea').val('');
\t\t\t\$('#tab-shipping select option').not('#tab-shipping select[name=\\'shipping_address\\']').removeAttr('selected');
\t\t\t\$('#tab-shipping input[type=\\'checkbox\\'], #tab-shipping input[type=\\'radio\\']').removeAttr('checked');

\t\t\t\$('#tab-shipping input[name=\\'firstname\\']').val(json['firstname']);
\t\t\t\$('#tab-shipping input[name=\\'lastname\\']').val(json['lastname']);
\t\t\t\$('#tab-shipping input[name=\\'company\\']').val(json['company']);
\t\t\t\$('#tab-shipping input[name=\\'address_1\\']').val(json['address_1']);
\t\t\t\$('#tab-shipping input[name=\\'address_2\\']').val(json['address_2']);
\t\t\t\$('#tab-shipping input[name=\\'city\\']').val(json['city']);
\t\t\t\$('#tab-shipping input[name=\\'postcode\\']').val(json['postcode']);
\t\t\t\$('#tab-shipping select[name=\\'country_id\\']').val(json['country_id']);

\t\t\tshipping_zone_id = json['zone_id'];

\t\t\tfor (i in json['custom_field']) {
\t\t\t\t\$('#tab-shipping select[name=\\'custom_field[' + i + ']\\']').val(json['custom_field'][i]);
\t\t\t\t\$('#tab-shipping textarea[name=\\'custom_field[' + i + ']\\']').val(json['custom_field'][i]);
\t\t\t\t\$('#tab-shipping input[name^=\\'custom_field[' + i + ']\\'][type=\\'text\\']').val(json['custom_field'][i]);
\t\t\t\t\$('#tab-shipping input[name^=\\'custom_field[' + i + ']\\'][type=\\'hidden\\']').val(json['custom_field'][i]);
\t\t\t\t\$('#tab-shipping input[name^=\\'custom_field[' + i + ']\\'][type=\\'radio\\'][value=\\'' + json['custom_field'][i] + '\\']').prop('checked', true);
\t\t\t\t\$('#tab-shipping input[name^=\\'custom_field[' + i + ']\\'][type=\\'checkbox\\'][value=\\'' + json['custom_field'][i] + '\\']').prop('checked', true);

\t\t\t\tif (json['custom_field'][i] instanceof Array) {
\t\t\t\t\tfor (j = 0; j < json['custom_field'][i].length; j++) {
\t\t\t\t\t\t\$('#tab-shipping input[name^=\\'custom_field[' + i + ']\\'][type=\\'checkbox\\'][value=\\'' + json['custom_field'][i][j] + '\\']').prop('checked', true);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\t\$('#tab-shipping select[name=\\'country_id\\']').trigger('change');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

var shipping_zone_id = '";
        // line 1797
        echo ($context["shipping_zone_id"] ?? null);
        echo "';

\$('#tab-shipping select[name=\\'country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1801
        echo ($context["user_token"] ?? null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#tab-shipping select[name=\\'country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#tab-shipping select[name=\\'country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\$('#tab-shipping input[name=\\'postcode\\']').closest('.form-group').addClass('required');
\t\t\t} else {
\t\t\t\t\$('#tab-shipping input[name=\\'postcode\\']').closest('.form-group').removeClass('required');
\t\t\t}

\t\t\thtml = '<option value=\"\">";
        // line 1816
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
        \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == shipping_zone_id) {
\t      \t\t\t\thtml += ' selected=\"selected\"';
\t    \t\t\t}

\t    \t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1829
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t}

\t\t\t\$('#tab-shipping select[name=\\'zone_id\\']').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#tab-shipping select[name=\\'country_id\\']').trigger('change');

\$('#button-shipping-address').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 1844
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/shipping/address&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: \$('#tab-shipping input[type=\\'text\\'], #tab-shipping input[type=\\'hidden\\'], #tab-shipping input[type=\\'radio\\']:checked, #tab-shipping input[type=\\'checkbox\\']:checked, #tab-shipping select, #tab-shipping textarea'),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-shipping-address').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-shipping-address').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\t// Check for errors
\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parentsUntil('.form-group').parent().addClass('has-error');
\t\t\t} else {
\t\t\t\t// Shipping Methods
\t\t\t\tvar request = \$.ajax({
\t\t\t\t\turl: '";
        // line 1880
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/shipping/methods&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t\$('#button-shipping-address').button('loading');
\t\t\t\t\t},
\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\$('#button-shipping-address').button('reset');
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t// Shipping Methods
\t\t\t\t\t\t\thtml = '<option value=\"\">";
        // line 1893
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\t\t\t\t\tif (json['shipping_methods']) {
\t\t\t\t\t\t\t\tfor (i in json['shipping_methods']) {
\t\t\t\t\t\t\t\t\thtml += '<optgroup label=\"' + json['shipping_methods'][i]['title'] + '\">';

\t\t\t\t\t\t\t\t\tif (!json['shipping_methods'][i]['error']) {
\t\t\t\t\t\t\t\t\t\tfor (j in json['shipping_methods'][i]['quote']) {
\t\t\t\t\t\t\t\t\t\t\tif (json['shipping_methods'][i]['quote'][j]['code'] == \$('select[name=\\'shipping_method\\'] option:selected').val()) {
\t\t\t\t\t\t\t\t\t\t\t\thtml += '<option value=\"' + json['shipping_methods'][i]['quote'][j]['code'] + '\" selected=\"selected\">' + json['shipping_methods'][i]['quote'][j]['title'] + ' - ' + json['shipping_methods'][i]['quote'][j]['text'] + '</option>';
\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\thtml += '<option value=\"' + json['shipping_methods'][i]['quote'][j]['code'] + '\">' + json['shipping_methods'][i]['quote'][j]['title'] + ' - ' + json['shipping_methods'][i]['quote'][j]['text'] + '</option>';
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\thtml += '<option value=\"\" style=\"color: #F00;\" disabled=\"disabled\">' + json['shipping_method'][i]['error'] + '</option>';
\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\thtml += '</optgroup>';
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\$('select[name=\\'shipping_method\\']').html(html);
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t}).done(function() {
\t\t\t\t    // Refresh products, vouchers and totals
\t\t\t\t    \$('#button-refresh').trigger('click');

                    \$('a[href=\\'#tab-total\\']').tab('show');
                });
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Shipping Method
\$('#button-shipping-method').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 1938
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/shipping/method&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: 'shipping_method=' + \$('select[name=\\'shipping_method\\'] option:selected').val(),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-shipping-method').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-shipping-method').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('select[name=\\'shipping_method\\']').closest('.form-group').addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Refresh products, vouchers and totals
\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Payment Method
\$('#button-payment-method').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 1976
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/payment/method&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: 'payment_method=' + \$('select[name=\\'payment_method\\'] option:selected').val(),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-payment-method').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-payment-method').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('select[name=\\'payment_method\\']').closest('.form-group').addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Refresh products, vouchers and totals
\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Coupon
\$('#button-coupon').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 2014
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/coupon&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: 'coupon=' + \$('input[name=\\'coupon\\']').val(),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-coupon').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-coupon').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('input[name=\\'coupon\\']').closest('.form-group').addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Refresh products, vouchers and totals
\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Voucher
\$('#button-voucher').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 2052
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/voucher&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: 'voucher=' + \$('input[name=\\'voucher\\']').val(),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-voucher').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-voucher').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('input[name=\\'voucher\\']').closest('.form-group').addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Refresh products, vouchers and totals
\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Reward
\$('#button-reward').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 2090
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/reward&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\ttype: 'post',
\t\tdata: 'reward=' + \$('input[name=\\'reward\\']').val(),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-reward').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-reward').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('input[name=\\'reward\\']').closest('.form-group').addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Refresh products, vouchers and totals
\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Affiliate
\$('input[name=\\'affiliate\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 2129
        echo ($context["user_token"] ?? null);
        echo "&filter_affiliate=1&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tjson.unshift({
\t\t\t\t\tcustomer_id: 0,
\t\t\t\t\tname: '";
        // line 2134
        echo ($context["text_none"] ?? null);
        echo "'
\t\t\t\t});

\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'affiliate\\']').val(item['label']);
\t\t\$('input[name=\\'affiliate_id\\']').val(item['value']);
\t}
});

// Checkout
\$('#button-save').on('click', function() {
\tif (\$('input[name=\\'order_id\\']').val() == 0) {
\t\tvar url = '";
        // line 2155
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/order/add&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val();
\t} else {
\t\tvar url = '";
        // line 2157
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/order/edit&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val() + '&order_id=' + \$('input[name=\\'order_id\\']').val();
\t}

\t\$.ajax({
\t\turl: url,
\t\ttype: 'post',
\t\tdata: \$('select[name=\\'payment_method\\'] option:selected, select[name=\\'shipping_method\\'] option:selected,  #tab-total select[name=\\'order_status_id\\'], #tab-total select, textarea[name=\\'comment\\'], input[name=\\'affiliate_id\\']'),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-save').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-save').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
            }

\t\t\tif (json['order_id']) {
\t\t\t\t\$('input[name=\\'order_id\\']').val(json['order_id']);
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#content').delegate('button[id^=\\'button-upload\\'], button[id^=\\'button-custom-field\\'], button[id^=\\'button-payment-custom-field\\'], button[id^=\\'button-shipping-custom-field\\']', 'click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload/upload&user_token=";
        // line 2211
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$(node).parent().find('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input[type=\\'hidden\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);
\t\t\t\t\t}

\t\t\t\t\tif (json['code']) {
\t\t\t\t\t\t\$(node).parent().find('input[type=\\'hidden\\']').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});

\$('.date').datetimepicker({
\tlanguage: '";
        // line 2248
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 2253
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 2259
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});
//--></script>
  <script type=\"text/javascript\"><!--
// Sort the custom fields
\$('#tab-customer .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-customer .form-group').length) {
\t\t\$('#tab-customer .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#tab-customer .form-group').length) {
\t\t\$('#tab-customer .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#tab-customer .form-group').length) {
\t\t\$('#tab-customer .form-group:first').before(this);
\t}
});

// Sort the custom fields
\$('#tab-payment .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-payment .form-group').length) {
\t\t\$('#tab-payment .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#tab-payment .form-group').length) {
\t\t\$('#tab-payment .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#tab-payment .form-group').length) {
\t\t\$('#tab-payment .form-group:first').before(this);
\t}
});

\$('#tab-shipping .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#tab-shipping .form-group').length) {
\t\t\$('#tab-shipping .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#tab-shipping .form-group').length) {
\t\t\$('#tab-shipping .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#tab-shipping .form-group').length) {
\t\t\$('#tab-shipping .form-group:first').before(this);
\t}
});

// Add all products to the cart using the api
\$('#button-refresh').on('click', function() {
\t\$.ajax({
\t\turl: '";
        // line 2311
        echo ($context["catalog"] ?? null);
        echo "index.php?route=api/cart/products&api_token=";
        echo ($context["api_token"] ?? null);
        echo "&store_id=' + \$('select[name=\\'store_id\\'] option:selected').val(),
\t\tdataType: 'json',
\t\tcrossDomain: true,
\t\tbeforeSend: function() {
\t\t\t\$('#button-refresh').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-refresh').button('reset');
\t\t},\t\t
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\t// Check for errors
\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tif (json['error']['stock']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['stock'] + '</div>');
\t\t\t\t}

\t\t\t\tif (json['error']['minimum']) {
\t\t\t\t\tfor (i in json['error']['minimum']) {
\t\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['minimum'][i] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\tvar shipping = false;

\t\t\thtml = '';

\t\t\tif (json['products'].length) {
\t\t\t\tfor (i = 0; i < json['products'].length; i++) {
\t\t\t\t\tproduct = json['products'][i];

\t\t\t\t\thtml += '<tr>';
\t\t\t\t\thtml += '  <td class=\"text-left\">' + product['name'] + ' ' + (!product['stock'] ? '<span class=\"text-danger\">***</span>' : '') + '<br />';
\t\t\t\t\thtml += '  <input type=\"hidden\" name=\"product[' + i + '][product_id]\" value=\"' + product['product_id'] + '\" />';

\t\t\t\t\tif (product['option']) {
\t\t\t\t\t\tfor (j = 0; j < product['option'].length; j++) {
\t\t\t\t\t\t\toption = product['option'][j];

\t\t\t\t\t\t\thtml += '  - <small>' + option['name'] + ': ' + option['value'] + '</small><br />';

\t\t\t\t\t\t\tif (option['type'] == 'select' || option['type'] == 'radio' || option['type'] == 'image') {
\t\t\t\t\t\t\t\thtml += '<input type=\"hidden\" name=\"product[' + i + '][option][' + option['product_option_id'] + ']\" value=\"' + option['product_option_value_id'] + '\" />';
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tif (option['type'] == 'checkbox') {
\t\t\t\t\t\t\t\thtml += '<input type=\"hidden\" name=\"product[' + i + '][option][' + option['product_option_id'] + '][]\" value=\"' + option['product_option_value_id'] + '\" />';
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\tif (option['type'] == 'text' || option['type'] == 'textarea' || option['type'] == 'file' || option['type'] == 'date' || option['type'] == 'datetime' || option['type'] == 'time') {
\t\t\t\t\t\t\t\thtml += '<input type=\"hidden\" name=\"product[' + i + '][option][' + option['product_option_id'] + ']\" value=\"' + option['value'] + '\" />';
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\thtml += '</td>';
\t\t\t\t\thtml += '  <td class=\"text-left\">' + product['model'] + '</td>';
\t\t\t\t\thtml += '  <td class=\"text-right\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\"><input type=\"text\" name=\"product[' + i + '][quantity]\" value=\"' + product['quantity'] + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 2374
        echo ($context["button_refresh"] ?? null);
        echo "\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-refresh\"></i></button></span></div></td>';
                    html += '  <td class=\"text-right\">' + product['price'] + '</td>';
\t\t\t\t\thtml += '  <td class=\"text-right\">' + product['total'] + '</td>';
\t\t\t\t\thtml += '  <td class=\"text-center\" style=\"width: 3px;\"><button type=\"button\" value=\"' + product['cart_id'] + '\" data-toggle=\"tooltip\" title=\"";
        // line 2377
        echo ($context["button_remove"] ?? null);
        echo "\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t\t\t\t\thtml += '</tr>';

\t\t\t\t\tif (product['shipping'] != 0) {
\t\t\t\t\t\tshipping = true;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}

\t\t\tif (!shipping) {
\t\t\t\t\$('select[name=\\'shipping_method\\'] option').removeAttr('selected');
\t\t\t\t\$('select[name=\\'shipping_method\\']').prop('disabled', true);
\t\t\t\t\$('#button-shipping-method').prop('disabled', true);
\t\t\t} else {
\t\t\t\t\$('select[name=\\'shipping_method\\']').prop('disabled', false);
\t\t\t\t\$('#button-shipping-method').prop('disabled', false);
\t\t\t}

\t\t\tif (json['vouchers'].length) {
\t\t\t\tfor (i in json['vouchers']) {
\t\t\t\t\tvoucher = json['vouchers'][i];

\t\t\t\t\thtml += '<tr>';
\t\t\t\t\thtml += '  <td class=\"text-left\">' + voucher['description'];
                    html += '    <input type=\"hidden\" name=\"voucher[' + i + '][code]\" value=\"' + voucher['code'] + '\" />';
\t\t\t\t\thtml += '    <input type=\"hidden\" name=\"voucher[' + i + '][description]\" value=\"' + voucher['description'] + '\" />';
                    html += '    <input type=\"hidden\" name=\"voucher[' + i + '][from_name]\" value=\"' + voucher['from_name'] + '\" />';
                    html += '    <input type=\"hidden\" name=\"voucher[' + i + '][from_email]\" value=\"' + voucher['from_email'] + '\" />';
                    html += '    <input type=\"hidden\" name=\"voucher[' + i + '][to_name]\" value=\"' + voucher['to_name'] + '\" />';
                    html += '    <input type=\"hidden\" name=\"voucher[' + i + '][to_email]\" value=\"' + voucher['to_email'] + '\" />';
                    html += '    <input type=\"hidden\" name=\"voucher[' + i + '][voucher_theme_id]\" value=\"' + voucher['voucher_theme_id'] + '\" />';
                    html += '    <input type=\"hidden\" name=\"voucher[' + i + '][message]\" value=\"' + voucher['message'] + '\" />';
                    html += '    <input type=\"hidden\" name=\"voucher[' + i + '][amount]\" value=\"' + voucher['amount'] + '\" />';
\t\t\t\t\thtml += '  </td>';
\t\t\t\t\thtml += '  <td class=\"text-left\"></td>';
\t\t\t\t\thtml += '  <td class=\"text-right\">1</td>';
\t\t\t\t\thtml += '  <td class=\"text-right\">' + voucher['price'] + '</td>';
\t\t\t\t\thtml += '  <td class=\"text-right\">' + voucher['price'] + '</td>';
\t\t\t\t\thtml += '  <td class=\"text-center\" style=\"width: 3px;\"><button type=\"button\" value=\"' + voucher['code'] + '\" data-toggle=\"tooltip\" title=\"";
        // line 2415
        echo ($context["button_remove"] ?? null);
        echo "\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t\t\t\t\thtml += '</tr>';
\t\t\t\t}
\t\t\t}

\t\t\tif (!json['products'].length && !json['vouchers'].length) {
\t\t\t\thtml += '<tr>';
\t\t\t\thtml += '  <td colspan=\"6\" class=\"text-center\">";
        // line 2422
        echo ($context["text_no_results"] ?? null);
        echo "</td>';
\t\t\t\thtml += '</tr>';
\t\t\t}

\t\t\t\$('#cart').html(html);

\t\t\t// Totals
\t\t\thtml = '';

\t\t\tif (json['products'].length) {
\t\t\t\tfor (i = 0; i < json['products'].length; i++) {
\t\t\t\t\tproduct = json['products'][i];

\t\t\t\t\thtml += '<tr>';
\t\t\t\t\thtml += '  <td class=\"text-left\">' + product['name'] + ' ' + (!product['stock'] ? '<span class=\"text-danger\">***</span>' : '') + '<br />';

\t\t\t\t\tif (product['option']) {
\t\t\t\t\t\tfor (j = 0; j < product['option'].length; j++) {
\t\t\t\t\t\t\toption = product['option'][j];

\t\t\t\t\t\t\thtml += '  - <small>' + option['name'] + ': ' + option['value'] + '</small><br />';
\t\t\t\t\t\t}
\t\t\t\t\t}

\t\t\t\t\thtml += '  </td>';
\t\t\t\t\thtml += '  <td class=\"text-left\">' + product['model'] + '</td>';
\t\t\t\t\thtml += '  <td class=\"text-right\">' + product['quantity'] + '</td>';
\t\t\t\t\thtml += '  <td class=\"text-right\">' + product['price'] + '</td>';
\t\t\t\t\thtml += '  <td class=\"text-right\">' + product['total'] + '</td>';
\t\t\t\t\thtml += '</tr>';
\t\t\t\t}
\t\t\t}

\t\t\tif (json['vouchers'].length) {
\t\t\t\tfor (i in json['vouchers']) {
\t\t\t\t\tvoucher = json['vouchers'][i];

\t\t\t\t\thtml += '<tr>';
\t\t\t\t\thtml += '  <td class=\"text-left\">' + voucher['description'] + '</td>';
\t\t\t\t\thtml += '  <td class=\"text-left\"></td>';
\t\t\t\t\thtml += '  <td class=\"text-right\">1</td>';
\t\t\t\t\thtml += '  <td class=\"text-right\">' + voucher['amount'] + '</td>';
\t\t\t\t\thtml += '  <td class=\"text-right\">' + voucher['amount'] + '</td>';
\t\t\t\t\thtml += '</tr>';
\t\t\t\t}
\t\t\t}

\t\t\tif (json['totals'].length) {
\t\t\t\tfor (i in json['totals']) {
\t\t\t\t\ttotal = json['totals'][i];

\t\t\t\t\thtml += '<tr>';
\t\t\t\t\thtml += '  <td class=\"text-right\" colspan=\"4\">' + total['title'] + ':</td>';
\t\t\t\t\thtml += '  <td class=\"text-right\">' + total['text'] + '</td>';
\t\t\t\t\thtml += '</tr>';
\t\t\t\t}
\t\t\t}

\t\t\tif (!json['totals'].length && !json['products'].length && !json['vouchers'].length) {
\t\t\t\thtml += '<tr>';
\t\t\t\thtml += '  <td colspan=\"5\" class=\"text-center\">";
        // line 2482
        echo ($context["text_no_results"] ?? null);
        echo "</td>';
\t\t\t\thtml += '</tr>';
\t\t\t}

\t\t\t\$('#total').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script></div>
";
        // line 2494
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "sale/order_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4400 => 2494,  4385 => 2482,  4322 => 2422,  4310 => 2415,  4267 => 2377,  4259 => 2374,  4191 => 2311,  4136 => 2259,  4127 => 2253,  4119 => 2248,  4079 => 2211,  4020 => 2157,  4013 => 2155,  3989 => 2134,  3981 => 2129,  3937 => 2090,  3894 => 2052,  3851 => 2014,  3808 => 1976,  3765 => 1938,  3717 => 1893,  3699 => 1880,  3658 => 1844,  3640 => 1829,  3624 => 1816,  3606 => 1801,  3599 => 1797,  3548 => 1749,  3505 => 1709,  3487 => 1696,  3446 => 1660,  3428 => 1645,  3412 => 1632,  3394 => 1617,  3387 => 1613,  3336 => 1565,  3293 => 1527,  3255 => 1494,  3236 => 1478,  3193 => 1440,  3136 => 1388,  3122 => 1377,  3113 => 1371,  3105 => 1366,  3067 => 1333,  3027 => 1296,  2974 => 1246,  2947 => 1222,  2934 => 1212,  2910 => 1191,  2864 => 1150,  2833 => 1124,  2793 => 1089,  2764 => 1063,  2747 => 1049,  2687 => 992,  2683 => 991,  2675 => 986,  2636 => 952,  2615 => 934,  2609 => 933,  2603 => 930,  2594 => 924,  2590 => 923,  2585 => 921,  2578 => 917,  2573 => 915,  2566 => 911,  2563 => 910,  2557 => 909,  2549 => 907,  2541 => 905,  2538 => 904,  2534 => 903,  2528 => 900,  2518 => 895,  2511 => 893,  2505 => 890,  2495 => 885,  2488 => 883,  2482 => 880,  2472 => 875,  2467 => 873,  2461 => 870,  2451 => 865,  2447 => 863,  2439 => 861,  2437 => 860,  2433 => 859,  2426 => 855,  2416 => 850,  2412 => 848,  2404 => 846,  2402 => 845,  2398 => 844,  2391 => 840,  2386 => 838,  2377 => 832,  2369 => 827,  2365 => 826,  2361 => 825,  2357 => 824,  2353 => 823,  2339 => 814,  2333 => 811,  2329 => 809,  2323 => 808,  2320 => 807,  2304 => 800,  2296 => 797,  2289 => 796,  2286 => 795,  2270 => 788,  2262 => 785,  2255 => 784,  2252 => 783,  2236 => 776,  2228 => 773,  2221 => 772,  2218 => 771,  2207 => 767,  2199 => 766,  2194 => 764,  2187 => 763,  2184 => 762,  2171 => 758,  2164 => 756,  2157 => 755,  2154 => 754,  2141 => 750,  2134 => 748,  2127 => 747,  2124 => 746,  2118 => 742,  2111 => 740,  2106 => 738,  2100 => 737,  2097 => 736,  2092 => 734,  2086 => 733,  2083 => 732,  2081 => 731,  2078 => 730,  2074 => 729,  2070 => 728,  2065 => 726,  2058 => 725,  2055 => 724,  2049 => 720,  2042 => 718,  2037 => 716,  2031 => 715,  2028 => 714,  2023 => 712,  2017 => 711,  2014 => 710,  2012 => 709,  2009 => 708,  2005 => 707,  2001 => 706,  1996 => 704,  1989 => 703,  1986 => 702,  1980 => 698,  1974 => 697,  1966 => 695,  1958 => 693,  1955 => 692,  1951 => 691,  1947 => 690,  1941 => 689,  1934 => 687,  1927 => 686,  1924 => 685,  1921 => 684,  1917 => 683,  1908 => 677,  1902 => 673,  1896 => 672,  1888 => 670,  1880 => 668,  1877 => 667,  1873 => 666,  1869 => 665,  1863 => 662,  1856 => 658,  1851 => 656,  1844 => 652,  1839 => 650,  1832 => 646,  1827 => 644,  1820 => 640,  1815 => 638,  1808 => 634,  1803 => 632,  1796 => 628,  1791 => 626,  1784 => 622,  1779 => 620,  1773 => 616,  1754 => 614,  1750 => 613,  1746 => 612,  1740 => 609,  1729 => 603,  1723 => 600,  1719 => 598,  1713 => 597,  1710 => 596,  1694 => 589,  1686 => 586,  1679 => 585,  1676 => 584,  1660 => 577,  1652 => 574,  1645 => 573,  1642 => 572,  1626 => 565,  1618 => 562,  1611 => 561,  1608 => 560,  1597 => 556,  1589 => 555,  1584 => 553,  1577 => 552,  1574 => 551,  1561 => 547,  1554 => 545,  1547 => 544,  1544 => 543,  1531 => 539,  1524 => 537,  1517 => 536,  1514 => 535,  1508 => 531,  1501 => 529,  1496 => 527,  1490 => 526,  1487 => 525,  1482 => 523,  1476 => 522,  1473 => 521,  1471 => 520,  1468 => 519,  1464 => 518,  1460 => 517,  1455 => 515,  1448 => 514,  1445 => 513,  1439 => 509,  1432 => 507,  1427 => 505,  1421 => 504,  1418 => 503,  1413 => 501,  1407 => 500,  1404 => 499,  1402 => 498,  1399 => 497,  1395 => 496,  1391 => 495,  1386 => 493,  1379 => 492,  1376 => 491,  1370 => 487,  1364 => 486,  1356 => 484,  1348 => 482,  1345 => 481,  1341 => 480,  1337 => 479,  1331 => 478,  1324 => 476,  1317 => 475,  1314 => 474,  1311 => 473,  1307 => 472,  1298 => 466,  1292 => 462,  1286 => 461,  1278 => 459,  1270 => 457,  1267 => 456,  1263 => 455,  1259 => 454,  1253 => 451,  1246 => 447,  1241 => 445,  1234 => 441,  1229 => 439,  1222 => 435,  1217 => 433,  1210 => 429,  1205 => 427,  1198 => 423,  1193 => 421,  1186 => 417,  1181 => 415,  1174 => 411,  1169 => 409,  1163 => 405,  1144 => 403,  1140 => 402,  1136 => 401,  1130 => 398,  1121 => 392,  1115 => 389,  1103 => 382,  1095 => 377,  1090 => 375,  1081 => 369,  1075 => 365,  1064 => 363,  1060 => 362,  1054 => 359,  1045 => 353,  1036 => 347,  1027 => 341,  1018 => 335,  1013 => 333,  1003 => 328,  992 => 320,  982 => 313,  977 => 311,  969 => 306,  965 => 305,  960 => 302,  953 => 298,  950 => 297,  947 => 296,  941 => 295,  939 => 294,  927 => 287,  921 => 286,  915 => 285,  909 => 284,  903 => 283,  897 => 282,  891 => 281,  885 => 280,  879 => 279,  873 => 278,  869 => 277,  866 => 276,  861 => 275,  858 => 274,  852 => 273,  850 => 272,  840 => 267,  836 => 266,  832 => 265,  824 => 264,  814 => 262,  811 => 261,  801 => 259,  798 => 258,  788 => 256,  786 => 255,  779 => 254,  775 => 253,  769 => 252,  765 => 251,  762 => 250,  757 => 249,  754 => 248,  752 => 247,  745 => 243,  741 => 242,  737 => 241,  733 => 240,  729 => 239,  725 => 238,  712 => 230,  709 => 229,  703 => 228,  700 => 227,  684 => 220,  676 => 217,  669 => 216,  666 => 215,  650 => 208,  642 => 205,  635 => 204,  632 => 203,  616 => 196,  608 => 193,  601 => 192,  598 => 191,  587 => 187,  581 => 186,  576 => 184,  569 => 183,  566 => 182,  553 => 178,  546 => 176,  539 => 175,  536 => 174,  523 => 170,  516 => 168,  509 => 167,  506 => 166,  500 => 162,  493 => 160,  488 => 158,  482 => 157,  479 => 156,  474 => 154,  468 => 153,  465 => 152,  463 => 151,  460 => 150,  456 => 149,  452 => 148,  447 => 146,  440 => 145,  437 => 144,  431 => 140,  424 => 138,  419 => 136,  413 => 135,  410 => 134,  405 => 132,  399 => 131,  396 => 130,  394 => 129,  391 => 128,  387 => 127,  383 => 126,  378 => 124,  371 => 123,  368 => 122,  362 => 118,  356 => 117,  348 => 115,  340 => 113,  337 => 112,  333 => 111,  329 => 110,  323 => 109,  316 => 107,  309 => 106,  306 => 105,  303 => 104,  299 => 103,  293 => 100,  288 => 98,  281 => 94,  276 => 92,  269 => 88,  264 => 86,  257 => 82,  252 => 80,  246 => 76,  240 => 75,  232 => 73,  224 => 71,  221 => 70,  217 => 69,  211 => 66,  204 => 62,  198 => 61,  193 => 59,  187 => 55,  181 => 54,  173 => 52,  165 => 50,  162 => 49,  158 => 48,  152 => 45,  146 => 41,  140 => 40,  132 => 38,  124 => 36,  121 => 35,  117 => 34,  111 => 31,  103 => 26,  99 => 25,  95 => 24,  91 => 23,  87 => 22,  79 => 17,  71 => 11,  60 => 9,  56 => 8,  51 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/order_form.twig", "");
    }
}
