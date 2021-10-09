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

/* extension/shipping/fedex.twig */
class __TwigTemplate_bb2e565e9d59d7f42cb077f4e60e0907e27bdd3a4be5dc0d2ec675f2a6a15a0f extends \Twig\Template
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
        <button type=\"submit\" form=\"form-shipping\" data-toggle=\"tooltip\" title=\"";
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-shipping\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-key\">";
        // line 29
        echo ($context["entry_key"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_fedex_key\" value=\"";
        // line 31
        echo ($context["shipping_fedex_key"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_key"] ?? null);
        echo "\" id=\"input-key\" class=\"form-control\" />
              ";
        // line 32
        if (($context["error_key"] ?? null)) {
            // line 33
            echo "              <div class=\"text-danger\">";
            echo ($context["error_key"] ?? null);
            echo "</div>
              ";
        }
        // line 35
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 38
        echo ($context["entry_password"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_fedex_password\" value=\"";
        // line 40
        echo ($context["shipping_fedex_password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" />
              ";
        // line 41
        if (($context["error_password"] ?? null)) {
            // line 42
            echo "              <div class=\"text-danger\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
              ";
        }
        // line 44
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-account\">";
        // line 47
        echo ($context["entry_account"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_fedex_account\" value=\"";
        // line 49
        echo ($context["shipping_fedex_account"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_account"] ?? null);
        echo "\" id=\"input-account\" class=\"form-control\" />
              ";
        // line 50
        if (($context["error_account"] ?? null)) {
            // line 51
            echo "              <div class=\"text-danger\">";
            echo ($context["error_account"] ?? null);
            echo "</div>
              ";
        }
        // line 53
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-meter\">";
        // line 56
        echo ($context["entry_meter"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_fedex_meter\" value=\"";
        // line 58
        echo ($context["shipping_fedex_meter"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_meter"] ?? null);
        echo "\" id=\"input-meter\" class=\"form-control\" />
              ";
        // line 59
        if (($context["error_meter"] ?? null)) {
            // line 60
            echo "              <div class=\"text-danger\">";
            echo ($context["error_meter"] ?? null);
            echo "</div>
              ";
        }
        // line 62
        echo "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-postcode\">";
        // line 65
        echo ($context["entry_postcode"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_fedex_postcode\" value=\"";
        // line 67
        echo ($context["shipping_fedex_postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-postcode\" class=\"form-control\" />
              ";
        // line 68
        if (($context["error_postcode"] ?? null)) {
            // line 69
            echo "              <div class=\"text-danger\">";
            echo ($context["error_postcode"] ?? null);
            echo "</div>
              ";
        }
        // line 71
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 74
        echo ($context["entry_test"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                ";
        // line 77
        if (($context["shipping_fedex_test"] ?? null)) {
            // line 78
            echo "                <input type=\"radio\" name=\"shipping_fedex_test\" value=\"1\" checked=\"checked\" />
                ";
            // line 79
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        } else {
            // line 81
            echo "                <input type=\"radio\" name=\"shipping_fedex_test\" value=\"1\" />
                ";
            // line 82
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        }
        // line 84
        echo "              </label>
              <label class=\"radio-inline\">
                ";
        // line 86
        if ( !($context["shipping_fedex_test"] ?? null)) {
            // line 87
            echo "                <input type=\"radio\" name=\"shipping_fedex_test\" value=\"0\" checked=\"checked\" />
                ";
            // line 88
            echo ($context["text_no"] ?? null);
            echo "
                ";
        } else {
            // line 90
            echo "                <input type=\"radio\" name=\"shipping_fedex_test\" value=\"0\" />
                ";
            // line 91
            echo ($context["text_no"] ?? null);
            echo "
                ";
        }
        // line 93
        echo "              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 97
        echo ($context["entry_service"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["services"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 101
            echo "                <div class=\"checkbox\">
                  <label>
                    ";
            // line 103
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["service"], "value", [], "any", false, false, false, 103), ($context["shipping_fedex_service"] ?? null))) {
                // line 104
                echo "                    <input type=\"checkbox\" name=\"fedex_service[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["service"], "value", [], "any", false, false, false, 104);
                echo "\" checked=\"checked\" />
                    ";
                // line 105
                echo twig_get_attribute($this->env, $this->source, $context["service"], "text", [], "any", false, false, false, 105);
                echo "
                    ";
            } else {
                // line 107
                echo "                    <input type=\"checkbox\" name=\"fedex_service[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["service"], "value", [], "any", false, false, false, 107);
                echo "\" />
                    ";
                // line 108
                echo twig_get_attribute($this->env, $this->source, $context["service"], "text", [], "any", false, false, false, 108);
                echo "
                    ";
            }
            // line 110
            echo "                  </label>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "              </div>
              <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', true);\" class=\"btn btn-link\">";
        // line 114
        echo ($context["text_select_all"] ?? null);
        echo "</button> / <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', false);\" class=\"btn btn-link\">";
        echo ($context["text_unselect_all"] ?? null);
        echo "</button></div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-length\">";
        // line 117
        echo ($context["entry_dimension"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"row\">
                <div class=\"col-sm-4\">
                  <input type=\"text\" name=\"shipping_fedex_length\" value=\"";
        // line 121
        echo ($context["shipping_fedex_length"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_length"] ?? null);
        echo "\" id=\"input-length\" class=\"form-control\" />
                </div>
                <div class=\"col-sm-4\">
                  <input type=\"text\" name=\"shipping_fedex_width\" value=\"";
        // line 124
        echo ($context["shipping_fedex_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
                </div>
                <div class=\"col-sm-4\">
                  <input type=\"text\" name=\"shipping_fedex_height\" value=\"";
        // line 127
        echo ($context["shipping_fedex_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
                </div>
              </div>
              ";
        // line 130
        if (($context["error_dimension"] ?? null)) {
            // line 131
            echo "              <div class=\"text-danger\">";
            echo ($context["error_dimension"] ?? null);
            echo "</div>
              ";
        }
        // line 133
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-length-class\"><span data-toggle=\"tooltip\" title=\"";
        // line 136
        echo ($context["help_length_class"] ?? null);
        echo "\">";
        echo ($context["entry_length_class"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_fedex_length_class_id\" id=\"input-length-class\" class=\"form-control\">
                ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 140
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 140) == ($context["shipping_fedex_length_class_id"] ?? null))) {
                // line 141
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 141);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 141);
                echo "</option>
                ";
            } else {
                // line 143
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 143);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 143);
                echo "</option>
                ";
            }
            // line 145
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-dropoff-type\">";
        // line 150
        echo ($context["entry_dropoff_type"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_fedex_dropoff_type\" id=\"input-dropoff-type\" class=\"form-control\">
                ";
        // line 153
        if ((($context["shipping_fedex_dropoff_type"] ?? null) == "REGULAR_PICKUP")) {
            // line 154
            echo "                <option value=\"REGULAR_PICKUP\" selected=\"selected\">";
            echo ($context["text_regular_pickup"] ?? null);
            echo "</option>
                ";
        } else {
            // line 156
            echo "                <option value=\"REGULAR_PICKUP\">";
            echo ($context["text_regular_pickup"] ?? null);
            echo "</option>
                ";
        }
        // line 158
        echo "                ";
        if ((($context["shipping_fedex_dropoff_type"] ?? null) == "REQUEST_COURIER")) {
            // line 159
            echo "                <option value=\"REQUEST_COURIER\" selected=\"selected\">";
            echo ($context["text_request_courier"] ?? null);
            echo "</option>
                ";
        } else {
            // line 161
            echo "                <option value=\"REQUEST_COURIER\">";
            echo ($context["text_request_courier"] ?? null);
            echo "</option>
                ";
        }
        // line 163
        echo "                ";
        if ((($context["shipping_fedex_dropoff_type"] ?? null) == "DROP_BOX")) {
            // line 164
            echo "                <option value=\"DROP_BOX\" selected=\"selected\">";
            echo ($context["text_drop_box"] ?? null);
            echo "</option>
                ";
        } else {
            // line 166
            echo "                <option value=\"DROP_BOX\">";
            echo ($context["text_drop_box"] ?? null);
            echo "</option>
                ";
        }
        // line 168
        echo "                ";
        if ((($context["shipping_fedex_dropoff_type"] ?? null) == "BUSINESS_SERVICE_CENTER")) {
            // line 169
            echo "                <option value=\"BUSINESS_SERVICE_CENTER\" selected=\"selected\">";
            echo ($context["text_business_service_center"] ?? null);
            echo "</option>
                ";
        } else {
            // line 171
            echo "                <option value=\"BUSINESS_SERVICE_CENTER\">";
            echo ($context["text_business_service_center"] ?? null);
            echo "</option>
                ";
        }
        // line 173
        echo "                ";
        if ((($context["shipping_fedex_dropoff_type"] ?? null) == "STATION")) {
            // line 174
            echo "                <option value=\"STATION\" selected=\"selected\">";
            echo ($context["text_station"] ?? null);
            echo "</option>
                ";
        } else {
            // line 176
            echo "                <option value=\"STATION\">";
            echo ($context["text_station"] ?? null);
            echo "</option>
                ";
        }
        // line 178
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-packaging-type\">";
        // line 182
        echo ($context["entry_packaging_type"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_fedex_packaging_type\" id=\"input-packaging-type\" class=\"form-control\">
                ";
        // line 185
        if ((($context["shipping_fedex_packaging_type"] ?? null) == "FEDEX_ENVELOPE")) {
            // line 186
            echo "                <option value=\"FEDEX_ENVELOPE\" selected=\"selected\">";
            echo ($context["text_fedex_envelope"] ?? null);
            echo "</option>
                ";
        } else {
            // line 188
            echo "                <option value=\"FEDEX_ENVELOPE\">";
            echo ($context["text_fedex_envelope"] ?? null);
            echo "</option>
                ";
        }
        // line 190
        echo "                ";
        if ((($context["shipping_fedex_packaging_type"] ?? null) == "FEDEX_PAK")) {
            // line 191
            echo "                <option value=\"FEDEX_PAK\" selected=\"selected\">";
            echo ($context["text_fedex_pak"] ?? null);
            echo "</option>
                ";
        } else {
            // line 193
            echo "                <option value=\"FEDEX_PAK\">";
            echo ($context["text_fedex_pak"] ?? null);
            echo "</option>
                ";
        }
        // line 195
        echo "                ";
        if ((($context["shipping_fedex_packaging_type"] ?? null) == "FEDEX_BOX")) {
            // line 196
            echo "                <option value=\"FEDEX_BOX\" selected=\"selected\">";
            echo ($context["text_fedex_box"] ?? null);
            echo "</option>
                ";
        } else {
            // line 198
            echo "                <option value=\"FEDEX_BOX\">";
            echo ($context["text_fedex_box"] ?? null);
            echo "</option>
                ";
        }
        // line 200
        echo "                ";
        if ((($context["shipping_fedex_packaging_type"] ?? null) == "FEDEX_TUBE")) {
            // line 201
            echo "                <option value=\"FEDEX_TUBE\" selected=\"selected\">";
            echo ($context["text_fedex_tube"] ?? null);
            echo "</option>
                ";
        } else {
            // line 203
            echo "                <option value=\"FEDEX_TUBE\">";
            echo ($context["text_fedex_tube"] ?? null);
            echo "</option>
                ";
        }
        // line 205
        echo "                ";
        if ((($context["shipping_fedex_packaging_type"] ?? null) == "FEDEX_10KG_BOX")) {
            // line 206
            echo "                <option value=\"FEDEX_10KG_BOX\" selected=\"selected\">";
            echo ($context["text_fedex_10kg_box"] ?? null);
            echo "</option>
                ";
        } else {
            // line 208
            echo "                <option value=\"FEDEX_10KG_BOX\">";
            echo ($context["text_fedex_10kg_box"] ?? null);
            echo "</option>
                ";
        }
        // line 210
        echo "                ";
        if ((($context["shipping_fedex_packaging_type"] ?? null) == "FEDEX_25KG_BOX")) {
            // line 211
            echo "                <option value=\"FEDEX_25KG_BOX\" selected=\"selected\">";
            echo ($context["text_fedex_25kg_box"] ?? null);
            echo "</option>
                ";
        } else {
            // line 213
            echo "                <option value=\"FEDEX_25KG_BOX\">";
            echo ($context["text_fedex_25kg_box"] ?? null);
            echo "</option>
                ";
        }
        // line 215
        echo "                ";
        if ((($context["shipping_fedex_packaging_type"] ?? null) == "YOUR_PACKAGING")) {
            // line 216
            echo "                <option value=\"YOUR_PACKAGING\" selected=\"selected\">";
            echo ($context["text_your_packaging"] ?? null);
            echo "</option>
                ";
        } else {
            // line 218
            echo "                <option value=\"YOUR_PACKAGING\">";
            echo ($context["text_your_packaging"] ?? null);
            echo "</option>
                ";
        }
        // line 220
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-rate-type\">";
        // line 224
        echo ($context["entry_rate_type"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_fedex_rate_type\" id=\"input-rate-type\" class=\"form-control\">
                ";
        // line 227
        if ((($context["shipping_fedex_rate_type"] ?? null) == "LIST")) {
            // line 228
            echo "                <option value=\"LIST\" selected=\"selected\">";
            echo ($context["text_list_rate"] ?? null);
            echo "</option>
                ";
        } else {
            // line 230
            echo "                <option value=\"LIST\">";
            echo ($context["text_list_rate"] ?? null);
            echo "</option>
                ";
        }
        // line 232
        echo "                ";
        if ((($context["shipping_fedex_rate_type"] ?? null) == "ACCOUNT")) {
            // line 233
            echo "                <option value=\"ACCOUNT\" selected=\"selected\">";
            echo ($context["text_account_rate"] ?? null);
            echo "</option>
                ";
        } else {
            // line 235
            echo "                <option value=\"ACCOUNT\">";
            echo ($context["text_account_rate"] ?? null);
            echo "</option>
                ";
        }
        // line 237
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 241
        echo ($context["help_display_time"] ?? null);
        echo "\">";
        echo ($context["entry_display_time"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                ";
        // line 244
        if (($context["shipping_fedex_display_time"] ?? null)) {
            // line 245
            echo "                <input type=\"radio\" name=\"shipping_fedex_display_time\" value=\"1\" checked=\"checked\" />
                ";
            // line 246
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        } else {
            // line 248
            echo "                <input type=\"radio\" name=\"shipping_fedex_display_time\" value=\"1\" />
                ";
            // line 249
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        }
        // line 251
        echo "              </label>
              <label class=\"radio-inline\">
                ";
        // line 253
        if ( !($context["shipping_fedex_display_time"] ?? null)) {
            // line 254
            echo "                <input type=\"radio\" name=\"shipping_fedex_display_time\" value=\"0\" checked=\"checked\" />
                ";
            // line 255
            echo ($context["text_no"] ?? null);
            echo "
                ";
        } else {
            // line 257
            echo "                <input type=\"radio\" name=\"shipping_fedex_display_time\" value=\"0\" />
                ";
            // line 258
            echo ($context["text_no"] ?? null);
            echo "
                ";
        }
        // line 260
        echo "              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 264
        echo ($context["help_display_weight"] ?? null);
        echo "\">";
        echo ($context["entry_display_weight"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\">
                ";
        // line 267
        if (($context["shipping_fedex_display_weight"] ?? null)) {
            // line 268
            echo "                <input type=\"radio\" name=\"shipping_fedex_display_weight\" value=\"1\" checked=\"checked\" />
                ";
            // line 269
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        } else {
            // line 271
            echo "                <input type=\"radio\" name=\"shipping_fedex_display_weight\" value=\"1\" />
                ";
            // line 272
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        }
        // line 274
        echo "              </label>
              <label class=\"radio-inline\">
                ";
        // line 276
        if ( !($context["shipping_fedex_display_weight"] ?? null)) {
            // line 277
            echo "                <input type=\"radio\" name=\"shipping_fedex_display_weight\" value=\"0\" checked=\"checked\" />
                ";
            // line 278
            echo ($context["text_no"] ?? null);
            echo "
                ";
        } else {
            // line 280
            echo "                <input type=\"radio\" name=\"shipping_fedex_display_weight\" value=\"0\" />
                ";
            // line 281
            echo ($context["text_no"] ?? null);
            echo "
                ";
        }
        // line 283
        echo "              </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-weight-class\"><span data-toggle=\"tooltip\" title=\"";
        // line 287
        echo ($context["help_weight_class"] ?? null);
        echo "\">";
        echo ($context["entry_weight_class"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_fedex_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                ";
        // line 290
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 291
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 291) == ($context["shipping_fedex_weight_class_id"] ?? null))) {
                // line 292
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 292);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 292);
                echo "</option>
                ";
            } else {
                // line 294
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 294);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 294);
                echo "</option>
                ";
            }
            // line 296
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 297
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-tax-class\">";
        // line 301
        echo ($context["entry_tax_class"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_fedex_tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                <option value=\"0\">";
        // line 304
        echo ($context["text_none"] ?? null);
        echo "</option>
                ";
        // line 305
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 306
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 306) == ($context["shipping_fedex_tax_class_id"] ?? null))) {
                // line 307
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 307);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 307);
                echo "</option>
                ";
            } else {
                // line 309
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 309);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 309);
                echo "</option>
                ";
            }
            // line 311
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 312
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 316
        echo ($context["entry_geo_zone"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_fedex_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
                <option value=\"0\">";
        // line 319
        echo ($context["text_all_zones"] ?? null);
        echo "</option>
                ";
        // line 320
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 321
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 321) == ($context["shipping_fedex_geo_zone_id"] ?? null))) {
                // line 322
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 322);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 322);
                echo "</option>
                ";
            } else {
                // line 324
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 324);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 324);
                echo "</option>
                ";
            }
            // line 326
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 327
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 331
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"shipping_fedex_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 334
        if (($context["shipping_fedex_status"] ?? null)) {
            // line 335
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 336
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 338
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 339
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 341
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 345
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"shipping_fedex_sort_order\" value=\"";
        // line 347
        echo ($context["shipping_fedex_sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 355
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/shipping/fedex.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  957 => 355,  944 => 347,  939 => 345,  933 => 341,  928 => 339,  923 => 338,  918 => 336,  913 => 335,  911 => 334,  905 => 331,  899 => 327,  893 => 326,  885 => 324,  877 => 322,  874 => 321,  870 => 320,  866 => 319,  860 => 316,  854 => 312,  848 => 311,  840 => 309,  832 => 307,  829 => 306,  825 => 305,  821 => 304,  815 => 301,  809 => 297,  803 => 296,  795 => 294,  787 => 292,  784 => 291,  780 => 290,  772 => 287,  766 => 283,  761 => 281,  758 => 280,  753 => 278,  750 => 277,  748 => 276,  744 => 274,  739 => 272,  736 => 271,  731 => 269,  728 => 268,  726 => 267,  718 => 264,  712 => 260,  707 => 258,  704 => 257,  699 => 255,  696 => 254,  694 => 253,  690 => 251,  685 => 249,  682 => 248,  677 => 246,  674 => 245,  672 => 244,  664 => 241,  658 => 237,  652 => 235,  646 => 233,  643 => 232,  637 => 230,  631 => 228,  629 => 227,  623 => 224,  617 => 220,  611 => 218,  605 => 216,  602 => 215,  596 => 213,  590 => 211,  587 => 210,  581 => 208,  575 => 206,  572 => 205,  566 => 203,  560 => 201,  557 => 200,  551 => 198,  545 => 196,  542 => 195,  536 => 193,  530 => 191,  527 => 190,  521 => 188,  515 => 186,  513 => 185,  507 => 182,  501 => 178,  495 => 176,  489 => 174,  486 => 173,  480 => 171,  474 => 169,  471 => 168,  465 => 166,  459 => 164,  456 => 163,  450 => 161,  444 => 159,  441 => 158,  435 => 156,  429 => 154,  427 => 153,  421 => 150,  415 => 146,  409 => 145,  401 => 143,  393 => 141,  390 => 140,  386 => 139,  378 => 136,  373 => 133,  367 => 131,  365 => 130,  357 => 127,  349 => 124,  341 => 121,  334 => 117,  326 => 114,  323 => 113,  315 => 110,  310 => 108,  305 => 107,  300 => 105,  295 => 104,  293 => 103,  289 => 101,  285 => 100,  279 => 97,  273 => 93,  268 => 91,  265 => 90,  260 => 88,  257 => 87,  255 => 86,  251 => 84,  246 => 82,  243 => 81,  238 => 79,  235 => 78,  233 => 77,  227 => 74,  222 => 71,  216 => 69,  214 => 68,  208 => 67,  203 => 65,  198 => 62,  192 => 60,  190 => 59,  184 => 58,  179 => 56,  174 => 53,  168 => 51,  166 => 50,  160 => 49,  155 => 47,  150 => 44,  144 => 42,  142 => 41,  136 => 40,  131 => 38,  126 => 35,  120 => 33,  118 => 32,  112 => 31,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/shipping/fedex.twig", "");
    }
}
