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

/* extension/payment/pp_express.twig */
class __TwigTemplate_12f7cbdef9b0bb085371519a017e9f71bac1d342491db11c504f892fc89b194f extends \Twig\Template
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
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-pp-express\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a> <a href=\"";
        echo ($context["search"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_search"] ?? null);
        echo "\" class=\"btn btn-info\"><i class=\"fa fa-search\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        ";
        // line 27
        if ((($context["retrieve_success"] ?? null) == 1)) {
            // line 28
            echo "          <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check\"></i> ";
            echo ($context["text_retrieve"] ?? null);
            echo "</div>
        ";
        }
        // line 30
        echo "        <form action=\"";
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-pp-express\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-api\" data-toggle=\"tab\">";
        // line 32
        echo ($context["tab_api"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 33
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-order-status\" data-toggle=\"tab\">";
        // line 34
        echo ($context["tab_order_status"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-checkout\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_checkout"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-api\">
              <div id=\"content-setup\">
                <a href=\"#\" id=\"show-advanced\" class=\"btn btn-sm btn-default\">";
        // line 40
        echo ($context["text_show_advanced"] ?? null);
        echo "</a>
                <div class=\"row\" style=\"margin-top: 20px;\">
                  <div class=\"col-sm-3\"></div>
                  <div class=\"col-sm-2 img-rounded text-center\" style=\"border:1px solid #cecece; padding:5px; cursor: pointer;\">
                    <a id=\"configure-live-setup\" data-paypal-button=\"true\" href=\"";
        // line 44
        echo ($context["auth_connect_url_live"] ?? null);
        echo "&displayMode=minibrowser\" target=\"PPFrame\">
                      <img src=\"https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_200x51.png\" alt=\"PayPal - ";
        // line 45
        echo ($context["text_configure_sandbox"] ?? null);
        echo "\" /><h3>";
        echo ($context["text_configure_live"] ?? null);
        echo "</h3>
                    </a>
                  </div>
                  <div class=\"col-sm-2\"></div>
                  <div class=\"col-sm-2 img-rounded text-center\" style=\"border:1px solid #cecece; padding:5px; cursor: pointer;\">
                    <a id=\"configure-sandbox-setup\" data-paypal-button=\"true\" href=\"";
        // line 50
        echo ($context["auth_connect_url_sandbox"] ?? null);
        echo "&displayMode=minibrowser\" target=\"PPFrame\">
                      <img src=\"https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_200x51.png\" alt=\"PayPal - ";
        // line 51
        echo ($context["text_configure_sandbox"] ?? null);
        echo "\" /><h3>";
        echo ($context["text_configure_sandbox"] ?? null);
        echo "</h3>
                    </a>
                  </div>
                  <div class=\"col-sm-3\"></div>
                </div>
              </div>
              <div id=\"content-advanced\" style=\"display: none;\">
                <a href=\"#\" id=\"show-setup\" class=\"btn btn-sm btn-default\">";
        // line 58
        echo ($context["text_show_quick_setup"] ?? null);
        echo "</a>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"entry-username\">";
        // line 60
        echo ($context["entry_username"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"payment_pp_express_username\" value=\"";
        // line 62
        echo ($context["payment_pp_express_username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_username"] ?? null);
        echo "\" id=\"entry-username\" class=\"form-control\" />
                    ";
        // line 63
        if (($context["error_username"] ?? null)) {
            // line 64
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_username"] ?? null);
            echo "</div>
                    ";
        }
        // line 66
        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"entry-password\">";
        // line 69
        echo ($context["entry_password"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"payment_pp_express_password\" value=\"";
        // line 71
        echo ($context["payment_pp_express_password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"entry-password\" class=\"form-control\" />
                    ";
        // line 72
        if (($context["error_password"] ?? null)) {
            // line 73
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
                    ";
        }
        // line 75
        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"entry-signature\">";
        // line 78
        echo ($context["entry_signature"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"payment_pp_express_signature\" value=\"";
        // line 80
        echo ($context["payment_pp_express_signature"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_signature"] ?? null);
        echo "\" id=\"entry-signature\" class=\"form-control\" />
                    ";
        // line 81
        if (($context["error_signature"] ?? null)) {
            // line 82
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_signature"] ?? null);
            echo "</div>
                    ";
        }
        // line 84
        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"entry-sandbox-username\">";
        // line 87
        echo ($context["entry_sandbox_username"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"payment_pp_express_sandbox_username\" value=\"";
        // line 89
        echo ($context["payment_pp_express_sandbox_username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sandbox_username"] ?? null);
        echo "\" id=\"entry-sandbox-username\" class=\"form-control\" />
                    ";
        // line 90
        if (($context["error_sandbox_username"] ?? null)) {
            // line 91
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_sandbox_username"] ?? null);
            echo "</div>
                    ";
        }
        // line 93
        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"entry-sandbox-password\">";
        // line 96
        echo ($context["entry_sandbox_password"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"payment_pp_express_sandbox_password\" value=\"";
        // line 98
        echo ($context["payment_pp_express_sandbox_password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sandbox_password"] ?? null);
        echo "\" id=\"entry-sandbox-password\" class=\"form-control\" />
                    ";
        // line 99
        if (($context["error_sandbox_password"] ?? null)) {
            // line 100
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_sandbox_password"] ?? null);
            echo "</div>
                    ";
        }
        // line 102
        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"entry-sandbox-signature\">";
        // line 105
        echo ($context["entry_sandbox_signature"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"payment_pp_express_sandbox_signature\" value=\"";
        // line 107
        echo ($context["payment_pp_express_sandbox_signature"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sandbox_signature"] ?? null);
        echo "\" id=\"entry-sandbox-signature\" class=\"form-control\" />
                    ";
        // line 108
        if (($context["error_sandbox_signature"] ?? null)) {
            // line 109
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_sandbox_signature"] ?? null);
            echo "</div>
                    ";
        }
        // line 111
        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 114
        echo ($context["help_ipn"] ?? null);
        echo "\">";
        echo ($context["entry_ipn"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\"><span class=\"input-group-addon\"><i class=\"fa fa-link\"></i></span>
                      <input type=\"text\" value=\"";
        // line 117
        echo ($context["ipn_url"] ?? null);
        echo "\" class=\"form-control\" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-general\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 125
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_status\" id=\"input-status\" class=\"form-control\">
                    ";
        // line 128
        if (($context["payment_pp_express_status"] ?? null)) {
            // line 129
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 130
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 132
            echo "                      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 133
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        }
        // line 135
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-test\">";
        // line 139
        echo ($context["entry_test"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_test\" id=\"input-test\" class=\"form-control\">
                    ";
        // line 142
        if (($context["payment_pp_express_test"] ?? null)) {
            // line 143
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 144
            echo ($context["text_no"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 146
            echo "                    <option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 147
            echo ($context["text_no"] ?? null);
            echo "</option>
                    ";
        }
        // line 149
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-debug\">";
        // line 153
        echo ($context["entry_debug"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_debug\" id=\"input-debug\" class=\"form-control\">
                    ";
        // line 156
        if (($context["payment_pp_express_debug"] ?? null)) {
            // line 157
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 158
            echo ($context["text_no"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 160
            echo "                    <option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 161
            echo ($context["text_no"] ?? null);
            echo "</option>
                    ";
        }
        // line 163
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"";
        // line 167
        echo ($context["help_currency"] ?? null);
        echo "\">";
        echo ($context["entry_currency"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_currency\" id=\"input-currency\" class=\"form-control\">
                    ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 171
            echo "                    ";
            if (($context["currency"] == ($context["payment_pp_express_currency"] ?? null))) {
                // line 172
                echo "                    <option value=\"";
                echo $context["currency"];
                echo "\" selected=\"selected\">";
                echo $context["currency"];
                echo "</option>
                    ";
            } else {
                // line 174
                echo "                    <option value=\"";
                echo $context["currency"];
                echo "\">";
                echo $context["currency"];
                echo "</option>
                    ";
            }
            // line 176
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-recurring-cancel\">";
        // line 181
        echo ($context["entry_recurring_cancel"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_recurring_cancel\" id=\"input-recurring-cancel\" class=\"form-control\">
                    ";
        // line 184
        if (($context["payment_pp_express_recurring_cancel"] ?? null)) {
            // line 185
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 186
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 188
            echo "                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 189
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        }
        // line 191
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-transaction\">";
        // line 195
        echo ($context["entry_transaction"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_transaction\" id=\"input-transaction\" class=\"form-control\">
                    ";
        // line 198
        if ((($context["payment_pp_express_transaction"] ?? null) == "sale")) {
            // line 199
            echo "                    <option value=\"Sale\" selected=\"selected\">";
            echo ($context["text_sale"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 201
            echo "                    <option value=\"Sale\">";
            echo ($context["text_sale"] ?? null);
            echo "</option>
                    ";
        }
        // line 203
        echo "                    ";
        if ((($context["payment_pp_express_transaction"] ?? null) == "Authorization")) {
            // line 204
            echo "                    <option value=\"Authorization\" selected=\"selected\">";
            echo ($context["text_authorization"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 206
            echo "                    <option value=\"Authorization\">";
            echo ($context["text_authorization"] ?? null);
            echo "</option>
                    ";
        }
        // line 208
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"";
        // line 212
        echo ($context["help_total"] ?? null);
        echo "\">";
        echo ($context["entry_total"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"payment_pp_express_total\" value=\"";
        // line 214
        echo ($context["payment_pp_express_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 218
        echo ($context["entry_geo_zone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
                    <option value=\"0\">";
        // line 221
        echo ($context["text_all_zones"] ?? null);
        echo "</option>
                    ";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 223
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 223) == ($context["payment_pp_express_geo_zone_id"] ?? null))) {
                // line 224
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 224);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 224);
                echo "</option>
                    ";
            } else {
                // line 226
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 226);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 226);
                echo "</option>
                    ";
            }
            // line 228
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 229
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 233
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"payment_pp_express_sort_order\" value=\"";
        // line 235
        echo ($context["payment_pp_express_sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-order-status\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-canceled-reversal-status\">";
        // line 241
        echo ($context["entry_canceled_reversal_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_canceled_reversal_status_id\" id=\"input-canceled-reversal-status\" class=\"form-control\">
                    ";
        // line 244
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 245
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 245) == ($context["payment_pp_express_canceled_reversal_status_id"] ?? null))) {
                // line 246
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 246);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 246);
                echo "</option>
                    ";
            } else {
                // line 248
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 248);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 248);
                echo "</option>
                    ";
            }
            // line 250
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 251
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-completed-status\">";
        // line 255
        echo ($context["entry_completed_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_completed_status_id\" id=\"input-completed-status\" class=\"form-control\">
                    ";
        // line 258
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 259
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 259) == ($context["payment_pp_express_completed_status_id"] ?? null))) {
                // line 260
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 260);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 260);
                echo "</option>
                    ";
            } else {
                // line 262
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 262);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 262);
                echo "</option>
                    ";
            }
            // line 264
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 265
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-denied-status\">";
        // line 269
        echo ($context["entry_denied_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_denied_status_id\" id=\"input-denied-status\" class=\"form-control\">
                    ";
        // line 272
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 273
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 273) == ($context["payment_pp_express_denied_status_id"] ?? null))) {
                // line 274
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 274);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 274);
                echo "</option>
                    ";
            } else {
                // line 276
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 276);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 276);
                echo "</option>
                    ";
            }
            // line 278
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 279
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-expired-status\">";
        // line 283
        echo ($context["entry_expired_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_expired_status_id\" id=\"input-expired-status\" class=\"form-control\">
                    ";
        // line 286
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 287
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 287) == ($context["payment_pp_express_expired_status_id"] ?? null))) {
                // line 288
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 288);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 288);
                echo "</option>
                    ";
            } else {
                // line 290
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 290);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 290);
                echo "</option>
                    ";
            }
            // line 292
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 293
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-failed-status\">";
        // line 297
        echo ($context["entry_failed_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_failed_status_id\" id=\"input-failed-status\" class=\"form-control\">
                    ";
        // line 300
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 301
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 301) == ($context["payment_pp_express_failed_status_id"] ?? null))) {
                // line 302
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 302);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 302);
                echo "</option>
                    ";
            } else {
                // line 304
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 304);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 304);
                echo "</option>
                    ";
            }
            // line 306
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 307
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-pending-status\">";
        // line 311
        echo ($context["entry_pending_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_pending_status_id\" id=\"input-pending-status\" class=\"form-control\">
                    ";
        // line 314
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 315
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 315) == ($context["payment_pp_express_pending_status_id"] ?? null))) {
                // line 316
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 316);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 316);
                echo "</option>
                    ";
            } else {
                // line 318
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 318);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 318);
                echo "</option>
                    ";
            }
            // line 320
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 321
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-processed-status\">";
        // line 325
        echo ($context["entry_processed_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_processed_status_id\" id=\"input-processed-status\" class=\"form-control\">
                    ";
        // line 328
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 329
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 329) == ($context["payment_pp_express_processed_status_id"] ?? null))) {
                // line 330
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 330);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 330);
                echo "</option>
                    ";
            } else {
                // line 332
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 332);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 332);
                echo "</option>
                    ";
            }
            // line 334
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-refunded-status\">";
        // line 339
        echo ($context["entry_refunded_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_refunded_status_id\" id=\"input-refunded-status\"class=\"form-control\">
                    ";
        // line 342
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 343
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 343) == ($context["payment_pp_express_refunded_status_id"] ?? null))) {
                // line 344
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 344);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 344);
                echo "</option>
                    ";
            } else {
                // line 346
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 346);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 346);
                echo "</option>
                    ";
            }
            // line 348
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 349
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-reversed-status\">";
        // line 353
        echo ($context["entry_reversed_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_reversed_status_id\" id=\"input-reversed-status\" class=\"form-control\">
                    ";
        // line 356
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 357
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 357) == ($context["payment_pp_express_reversed_status_id"] ?? null))) {
                // line 358
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 358);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 358);
                echo "</option>
                    ";
            } else {
                // line 360
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 360);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 360);
                echo "</option>
                    ";
            }
            // line 362
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 363
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-voided-status\">";
        // line 367
        echo ($context["entry_voided_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_voided_status_id\" id=\"input-voided-status\" class=\"form-control\">
                    ";
        // line 370
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 371
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 371) == ($context["payment_pp_express_voided_status_id"] ?? null))) {
                // line 372
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 372);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 372);
                echo "</option>
                    ";
            } else {
                // line 374
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 374);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 374);
                echo "</option>
                    ";
            }
            // line 376
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 377
        echo "                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-checkout\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-notes\">";
        // line 383
        echo ($context["entry_allow_notes"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_allow_note\" id=\"input-notes\" class=\"form-control\">
                    ";
        // line 386
        if (($context["payment_pp_express_allow_note"] ?? null)) {
            // line 387
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 388
            echo ($context["text_no"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 390
            echo "                    <option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 391
            echo ($context["text_no"] ?? null);
            echo "</option>
                    ";
        }
        // line 393
        echo "                  </select>
                  <br />";
        // line 394
        echo ($context["text_incontext_not_supported"] ?? null);
        echo "
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-color\"><span data-toggle=\"tooltip\" title=\"";
        // line 398
        echo ($context["help_colour"] ?? null);
        echo "\">";
        echo ($context["entry_colour"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"payment_pp_express_colour\" value=\"";
        // line 400
        echo ($context["payment_pp_express_colour"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_colour"] ?? null);
        echo "\" id=\"input-color\" class=\"form-control\" />
                  <br />";
        // line 401
        echo ($context["text_incontext_not_supported"] ?? null);
        echo "
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 405
        echo ($context["help_logo"] ?? null);
        echo "\">";
        echo ($context["entry_logo"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 406
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"payment_pp_express_logo\" value=\"";
        // line 407
        echo ($context["payment_pp_express_logo"] ?? null);
        echo "\" id=\"input-logo\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-incontext-disable\">";
        // line 411
        echo ($context["entry_incontext"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_express_incontext_disable\" id=\"input-incontext-disable\" class=\"form-control\">
                    ";
        // line 414
        if (($context["payment_pp_express_incontext_disable"] ?? null)) {
            // line 415
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 416
            echo ($context["text_no"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 418
            echo "                      <option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 419
            echo ($context["text_no"] ?? null);
            echo "</option>
                    ";
        }
        // line 421
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <div class=\"col-sm-2\"><a href=\"";
        // line 425
        echo ($context["button_configure"] ?? null);
        echo "\" target=\"_blank\" class=\"btn btn-primary pull-right\">";
        echo ($context["button_enable"] ?? null);
        echo "</a></div>
                <div class=\"col-sm-10\"><p>";
        // line 426
        echo ($context["text_enable_button"] ?? null);
        echo "</p></div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script type=\"text/javascript\"><!--
  \$('body').on('click', '#show-advanced', function(event) {
    event.preventDefault();
    \$('#content-setup').hide();
    \$('#content-advanced').show();
  });

  \$('body').on('click', '#show-setup', function(event) {
    event.preventDefault();
    \$('#content-setup').show();
    \$('#content-advanced').hide();
  });

  (function (d, s, id) {
    var js, ref = d.getElementsByTagName(s)[0];
    if(!d.getElementById(id)) {
      js = d.createElement(s);
      js.id = id;
      js.async = true;
      js.src = \"https://www.paypal.com/webapps/merchantboarding/js/lib/lightbox/partner.js\";
      ref.parentNode.insertBefore(js, ref);
    }
  } (document, \"script\", \"paypal-js\"));
--></script>

";
        // line 461
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "extension/payment/pp_express.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1209 => 461,  1171 => 426,  1165 => 425,  1159 => 421,  1154 => 419,  1149 => 418,  1144 => 416,  1139 => 415,  1137 => 414,  1131 => 411,  1124 => 407,  1118 => 406,  1112 => 405,  1105 => 401,  1099 => 400,  1092 => 398,  1085 => 394,  1082 => 393,  1077 => 391,  1072 => 390,  1067 => 388,  1062 => 387,  1060 => 386,  1054 => 383,  1046 => 377,  1040 => 376,  1032 => 374,  1024 => 372,  1021 => 371,  1017 => 370,  1011 => 367,  1005 => 363,  999 => 362,  991 => 360,  983 => 358,  980 => 357,  976 => 356,  970 => 353,  964 => 349,  958 => 348,  950 => 346,  942 => 344,  939 => 343,  935 => 342,  929 => 339,  917 => 334,  909 => 332,  901 => 330,  898 => 329,  894 => 328,  888 => 325,  882 => 321,  876 => 320,  868 => 318,  860 => 316,  857 => 315,  853 => 314,  847 => 311,  841 => 307,  835 => 306,  827 => 304,  819 => 302,  816 => 301,  812 => 300,  806 => 297,  800 => 293,  794 => 292,  786 => 290,  778 => 288,  775 => 287,  771 => 286,  765 => 283,  759 => 279,  753 => 278,  745 => 276,  737 => 274,  734 => 273,  730 => 272,  724 => 269,  718 => 265,  712 => 264,  704 => 262,  696 => 260,  693 => 259,  689 => 258,  683 => 255,  677 => 251,  671 => 250,  663 => 248,  655 => 246,  652 => 245,  648 => 244,  642 => 241,  631 => 235,  626 => 233,  620 => 229,  614 => 228,  606 => 226,  598 => 224,  595 => 223,  591 => 222,  587 => 221,  581 => 218,  572 => 214,  565 => 212,  559 => 208,  553 => 206,  547 => 204,  544 => 203,  538 => 201,  532 => 199,  530 => 198,  524 => 195,  518 => 191,  513 => 189,  508 => 188,  503 => 186,  498 => 185,  496 => 184,  490 => 181,  484 => 177,  478 => 176,  470 => 174,  462 => 172,  459 => 171,  455 => 170,  447 => 167,  441 => 163,  436 => 161,  431 => 160,  426 => 158,  421 => 157,  419 => 156,  413 => 153,  407 => 149,  402 => 147,  397 => 146,  392 => 144,  387 => 143,  385 => 142,  379 => 139,  373 => 135,  368 => 133,  363 => 132,  358 => 130,  353 => 129,  351 => 128,  345 => 125,  334 => 117,  326 => 114,  321 => 111,  315 => 109,  313 => 108,  307 => 107,  302 => 105,  297 => 102,  291 => 100,  289 => 99,  283 => 98,  278 => 96,  273 => 93,  267 => 91,  265 => 90,  259 => 89,  254 => 87,  249 => 84,  243 => 82,  241 => 81,  235 => 80,  230 => 78,  225 => 75,  219 => 73,  217 => 72,  211 => 71,  206 => 69,  201 => 66,  195 => 64,  193 => 63,  187 => 62,  182 => 60,  177 => 58,  165 => 51,  161 => 50,  151 => 45,  147 => 44,  140 => 40,  132 => 35,  128 => 34,  124 => 33,  120 => 32,  114 => 30,  108 => 28,  106 => 27,  100 => 24,  96 => 22,  88 => 18,  86 => 17,  80 => 13,  69 => 11,  65 => 10,  60 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/payment/pp_express.twig", "");
    }
}
