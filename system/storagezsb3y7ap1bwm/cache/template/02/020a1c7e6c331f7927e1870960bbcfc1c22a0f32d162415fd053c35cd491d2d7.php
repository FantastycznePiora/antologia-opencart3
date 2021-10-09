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

/* extension/payment/pp_standard.twig */
class __TwigTemplate_f78a384efdf9bce67510f2135582524fa77748b63a794ebe46c9fb6c3bcb6f7e extends \Twig\Template
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
        <button type=\"submit\" form=\"form-payment\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
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
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-payment\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 29
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-status\" data-toggle=\"tab\">";
        // line 30
        echo ($context["tab_order_status"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"entry-email\">";
        // line 35
        echo ($context["entry_email"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"payment_pp_standard_email\" value=\"";
        // line 37
        echo ($context["payment_pp_standard_email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"entry-email\" class=\"form-control\"/>
                  ";
        // line 38
        if (($context["error_email"] ?? null)) {
            // line 39
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
                  ";
        }
        // line 41
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-live-demo\"><span data-toggle=\"tooltip\" title=\"";
        // line 44
        echo ($context["help_test"] ?? null);
        echo "\">";
        echo ($context["entry_test"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_standard_test\" id=\"input-live-demo\" class=\"form-control\">
                    ";
        // line 47
        if (($context["payment_pp_standard_test"] ?? null)) {
            // line 48
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 49
            echo ($context["text_no"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 51
            echo "                    <option value=\"1\">";
            echo ($context["text_yes"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 52
            echo ($context["text_no"] ?? null);
            echo "</option>
                    ";
        }
        // line 54
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-debug\"><span data-toggle=\"tooltip\" title=\"";
        // line 58
        echo ($context["help_debug"] ?? null);
        echo "\">";
        echo ($context["entry_debug"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_standard_debug\" id=\"input-debug\" class=\"form-control\">
                    ";
        // line 61
        if (($context["payment_pp_standard_debug"] ?? null)) {
            // line 62
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 63
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 65
            echo "                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 66
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        }
        // line 68
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-transaction\">";
        // line 72
        echo ($context["entry_transaction"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_standard_transaction\" id=\"input-transaction\" class=\"form-control\">
                    ";
        // line 75
        if ( !($context["payment_pp_standard_transaction"] ?? null)) {
            // line 76
            echo "                    <option value=\"0\" selected=\"selected\">";
            echo ($context["text_authorization"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 78
            echo "                    <option value=\"0\">";
            echo ($context["text_authorization"] ?? null);
            echo "</option>
                    ";
        }
        // line 80
        echo "                    ";
        if (($context["payment_pp_standard_transaction"] ?? null)) {
            // line 81
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_sale"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 83
            echo "                    <option value=\"1\">";
            echo ($context["text_sale"] ?? null);
            echo "</option>
                    ";
        }
        // line 85
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"";
        // line 89
        echo ($context["help_total"] ?? null);
        echo "\">";
        echo ($context["entry_total"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"payment_pp_standard_total\" value=\"";
        // line 91
        echo ($context["payment_pp_standard_total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input-total\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 95
        echo ($context["entry_geo_zone"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_standard_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
                    <option value=\"0\">";
        // line 98
        echo ($context["text_all_zones"] ?? null);
        echo "</option>
                    ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 100
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 100) == ($context["payment_pp_standard_geo_zone_id"] ?? null))) {
                // line 101
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 101);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 101);
                echo "</option>
                    ";
            } else {
                // line 103
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 103);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 103);
                echo "</option>
                    ";
            }
            // line 105
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 110
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_standard_status\" id=\"input-status\" class=\"form-control\">
                    ";
        // line 113
        if (($context["payment_pp_standard_status"] ?? null)) {
            // line 114
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 115
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 117
            echo "                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 118
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        }
        // line 120
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 124
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"payment_pp_standard_sort_order\" value=\"";
        // line 126
        echo ($context["payment_pp_standard_sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-status\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-canceled-reversal-status\">";
        // line 132
        echo ($context["entry_canceled_reversal_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_standard_canceled_reversal_status_id\" id=\"input-canceled-reversal-status\" class=\"form-control\">
                    ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 136
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 136) == ($context["payment_pp_standard_canceled_reversal_status_id"] ?? null))) {
                // line 137
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 137);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 137);
                echo "</option>
                    ";
            } else {
                // line 139
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 139);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 139);
                echo "</option>
                    ";
            }
            // line 141
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-completed-status\">";
        // line 146
        echo ($context["entry_completed_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_standard_completed_status_id\" id=\"input-completed-status\" class=\"form-control\">
                    ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 150
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 150) == ($context["payment_pp_standard_completed_status_id"] ?? null))) {
                // line 151
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 151);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 151);
                echo "</option>
                    ";
            } else {
                // line 153
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 153);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 153);
                echo "</option>
                    ";
            }
            // line 155
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-denied-status\">";
        // line 160
        echo ($context["entry_denied_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_standard_denied_status_id\" id=\"input-denied-status\" class=\"form-control\">
                    ";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 164
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 164) == ($context["payment_pp_standard_denied_status_id"] ?? null))) {
                // line 165
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 165);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 165);
                echo "</option>
                    ";
            } else {
                // line 167
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 167);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 167);
                echo "</option>
                    ";
            }
            // line 169
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-expired-status\">";
        // line 174
        echo ($context["entry_expired_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_standard_expired_status_id\" id=\"input-expired-status\" class=\"form-control\">
                    ";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 178
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 178) == ($context["payment_pp_standard_expired_status_id"] ?? null))) {
                // line 179
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 179);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 179);
                echo "</option>
                    ";
            } else {
                // line 181
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 181);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 181);
                echo "</option>
                    ";
            }
            // line 183
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-failed-status\">";
        // line 188
        echo ($context["entry_failed_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_standard_failed_status_id\" id=\"input-failed-status\" class=\"form-control\">
                    ";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 192
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 192) == ($context["payment_pp_standard_failed_status_id"] ?? null))) {
                // line 193
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 193);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 193);
                echo "</option>
                    ";
            } else {
                // line 195
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 195);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 195);
                echo "</option>
                    ";
            }
            // line 197
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-pending-status\">";
        // line 202
        echo ($context["entry_pending_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_standard_pending_status_id\" id=\"input-pending-status\" class=\"form-control\">
                    ";
        // line 205
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 206
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 206) == ($context["payment_pp_standard_pending_status_id"] ?? null))) {
                // line 207
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 207);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 207);
                echo "</option>
                    ";
            } else {
                // line 209
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 209);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 209);
                echo "</option>
                    ";
            }
            // line 211
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-processed-status\">";
        // line 216
        echo ($context["entry_processed_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_standard_processed_status_id\" id=\"input-processed-status\" class=\"form-control\">
                    ";
        // line 219
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 220
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 220) == ($context["payment_pp_standard_processed_status_id"] ?? null))) {
                // line 221
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 221);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 221);
                echo "</option>
                    ";
            } else {
                // line 223
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 223);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 223);
                echo "</option>
                    ";
            }
            // line 225
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-refunded-status\">";
        // line 230
        echo ($context["entry_refunded_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_standard_refunded_status_id\" id=\"input-refunded-status\" class=\"form-control\">
                    ";
        // line 233
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 234
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 234) == ($context["payment_pp_standard_refunded_status_id"] ?? null))) {
                // line 235
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 235);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 235);
                echo "</option>
                    ";
            } else {
                // line 237
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 237);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 237);
                echo "</option>
                    ";
            }
            // line 239
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-reversed-status\">";
        // line 244
        echo ($context["entry_reversed_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_standard_reversed_status_id\" id=\"input-reversed-status\" class=\"form-control\">
                    ";
        // line 247
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 248
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 248) == ($context["payment_pp_standard_reversed_status_id"] ?? null))) {
                // line 249
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 249);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 249);
                echo "</option>
                    ";
            } else {
                // line 251
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 251);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 251);
                echo "</option>
                    ";
            }
            // line 253
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 254
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-void-status\">";
        // line 258
        echo ($context["entry_voided_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"payment_pp_standard_voided_status_id\" id=\"input-void-status\" class=\"form-control\">
                    ";
        // line 261
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 262
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 262) == ($context["payment_pp_standard_voided_status_id"] ?? null))) {
                // line 263
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 263);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 263);
                echo "</option>
                    ";
            } else {
                // line 265
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 265);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 265);
                echo "</option>
                    ";
            }
            // line 267
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 268
        echo "                  </select>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 278
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/payment/pp_standard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  783 => 278,  771 => 268,  765 => 267,  757 => 265,  749 => 263,  746 => 262,  742 => 261,  736 => 258,  730 => 254,  724 => 253,  716 => 251,  708 => 249,  705 => 248,  701 => 247,  695 => 244,  689 => 240,  683 => 239,  675 => 237,  667 => 235,  664 => 234,  660 => 233,  654 => 230,  648 => 226,  642 => 225,  634 => 223,  626 => 221,  623 => 220,  619 => 219,  613 => 216,  607 => 212,  601 => 211,  593 => 209,  585 => 207,  582 => 206,  578 => 205,  572 => 202,  566 => 198,  560 => 197,  552 => 195,  544 => 193,  541 => 192,  537 => 191,  531 => 188,  525 => 184,  519 => 183,  511 => 181,  503 => 179,  500 => 178,  496 => 177,  490 => 174,  484 => 170,  478 => 169,  470 => 167,  462 => 165,  459 => 164,  455 => 163,  449 => 160,  443 => 156,  437 => 155,  429 => 153,  421 => 151,  418 => 150,  414 => 149,  408 => 146,  402 => 142,  396 => 141,  388 => 139,  380 => 137,  377 => 136,  373 => 135,  367 => 132,  356 => 126,  351 => 124,  345 => 120,  340 => 118,  335 => 117,  330 => 115,  325 => 114,  323 => 113,  317 => 110,  311 => 106,  305 => 105,  297 => 103,  289 => 101,  286 => 100,  282 => 99,  278 => 98,  272 => 95,  263 => 91,  256 => 89,  250 => 85,  244 => 83,  238 => 81,  235 => 80,  229 => 78,  223 => 76,  221 => 75,  215 => 72,  209 => 68,  204 => 66,  199 => 65,  194 => 63,  189 => 62,  187 => 61,  179 => 58,  173 => 54,  168 => 52,  163 => 51,  158 => 49,  153 => 48,  151 => 47,  143 => 44,  138 => 41,  132 => 39,  130 => 38,  124 => 37,  119 => 35,  111 => 30,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/payment/pp_standard.twig", "");
    }
}
