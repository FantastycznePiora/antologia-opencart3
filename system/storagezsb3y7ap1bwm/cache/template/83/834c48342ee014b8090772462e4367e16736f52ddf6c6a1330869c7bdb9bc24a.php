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

/* sale/return_list.twig */
class __TwigTemplate_846c14d2e766db9ec5868822168b8f840c1a834c28a41dfcca0093cecb2b0ad6 extends \Twig\Template
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
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-return').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-return').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 24
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 28
        echo "    <div class=\"row\">
      <div id=\"filter-return\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 32
        echo ($context["text_filter"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-return-id\">";
        // line 36
        echo ($context["entry_return_id"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_return_id\" value=\"";
        // line 37
        echo ($context["filter_return_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_return_id"] ?? null);
        echo "\" id=\"input-return-id\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-order-id\">";
        // line 40
        echo ($context["entry_order_id"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_order_id\" value=\"";
        // line 41
        echo ($context["filter_order_id"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_order_id"] ?? null);
        echo "\" id=\"input-order-id\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-customer\">";
        // line 44
        echo ($context["entry_customer"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 45
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-product\">";
        // line 48
        echo ($context["entry_product"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_product\" value=\"";
        // line 49
        echo ($context["filter_product"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-model\">";
        // line 52
        echo ($context["entry_model"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"filter_model\" value=\"";
        // line 53
        echo ($context["filter_model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-return-status\">";
        // line 56
        echo ($context["entry_return_status"] ?? null);
        echo "</label>
              <select name=\"filter_return_status_id\" id=\"input-return-status\" class=\"form-control\">
                <option value=\"\"></option>
                
                  
                
                
                
                
            
                  
                  ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 68
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 68) == ($context["filter_return_status_id"] ?? null))) {
                // line 69
                echo "                  
                  
            
                
                
                
                
                  
                <option value=\"";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 77);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 77);
                echo "</option>
                
                  
                
                
                
                
            
                  
                  ";
            } else {
                // line 87
                echo "                  
                  
            
                
                
                
                
                  
                <option value=\"";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 95);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 95);
                echo "</option>
                
                  
                
                
                
                
            
                  
                  ";
            }
            // line 105
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                
                
          
              
              
              
              
                
              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-date-added\">";
        // line 117
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 119
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-date-modified\">";
        // line 125
        echo ($context["entry_date_modified"] ?? null);
        echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_modified\" value=\"";
        // line 127
        echo ($context["filter_date_modified"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_modified"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-modified\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 133
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 141
        echo ($context["text_list"] ?? null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 144
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-return\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-right\">";
        // line 150
        if ((($context["sort"] ?? null) == "r.return_id")) {
            echo " <a href=\"";
            echo ($context["sort_return_id"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_return_id"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_return_id"] ?? null);
            echo "\">";
            echo ($context["column_return_id"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 151
        if ((($context["sort"] ?? null) == "r.order_id")) {
            echo " <a href=\"";
            echo ($context["sort_order_id"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_order_id"] ?? null);
            echo "\">";
            echo ($context["column_order_id"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 152
        if ((($context["sort"] ?? null) == "customer")) {
            echo " <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_customer"] ?? null);
            echo "\">";
            echo ($context["column_customer"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 153
        if ((($context["sort"] ?? null) == "r.product")) {
            echo " <a href=\"";
            echo ($context["sort_product"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_product"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_product"] ?? null);
            echo "\">";
            echo ($context["column_product"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 154
        if ((($context["sort"] ?? null) == "r.model")) {
            echo " <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_model"] ?? null);
            echo "\">";
            echo ($context["column_model"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 155
        if ((($context["sort"] ?? null) == "status")) {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 156
        if ((($context["sort"] ?? null) == "r.date_added")) {
            echo " <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 157
        if ((($context["sort"] ?? null) == "r.date_modified")) {
            echo " <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo ($context["sort_date_modified"] ?? null);
            echo "\">";
            echo ($context["column_date_modified"] ?? null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 158
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 163
        if (($context["returns"] ?? null)) {
            // line 164
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["returns"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["return"]) {
                // line 165
                echo "                  <tr>
                    <td class=\"text-center\">";
                // line 166
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["return"], "return_id", [], "any", false, false, false, 166), ($context["selected"] ?? null))) {
                    // line 167
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["return"], "return_id", [], "any", false, false, false, 167);
                    echo "\" checked=\"checked\" />
                      ";
                } else {
                    // line 169
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["return"], "return_id", [], "any", false, false, false, 169);
                    echo "\" />
                      ";
                }
                // line 170
                echo "</td>
                    <td class=\"text-right\">";
                // line 171
                echo twig_get_attribute($this->env, $this->source, $context["return"], "return_id", [], "any", false, false, false, 171);
                echo "</td>
                    <td class=\"text-right\">";
                // line 172
                echo twig_get_attribute($this->env, $this->source, $context["return"], "order_id", [], "any", false, false, false, 172);
                echo "</td>
                    <td class=\"text-left\">";
                // line 173
                echo twig_get_attribute($this->env, $this->source, $context["return"], "customer", [], "any", false, false, false, 173);
                echo "</td>
                    <td class=\"text-left\">";
                // line 174
                echo twig_get_attribute($this->env, $this->source, $context["return"], "product", [], "any", false, false, false, 174);
                echo "</td>
                    <td class=\"text-left\">";
                // line 175
                echo twig_get_attribute($this->env, $this->source, $context["return"], "model", [], "any", false, false, false, 175);
                echo "</td>
                    <td class=\"text-left\">";
                // line 176
                echo twig_get_attribute($this->env, $this->source, $context["return"], "return_status", [], "any", false, false, false, 176);
                echo "</td>
                    <td class=\"text-left\">";
                // line 177
                echo twig_get_attribute($this->env, $this->source, $context["return"], "date_added", [], "any", false, false, false, 177);
                echo "</td>
                    <td class=\"text-left\">";
                // line 178
                echo twig_get_attribute($this->env, $this->source, $context["return"], "date_modified", [], "any", false, false, false, 178);
                echo "</td>
                    <td class=\"text-right\"><a href=\"";
                // line 179
                echo twig_get_attribute($this->env, $this->source, $context["return"], "edit", [], "any", false, false, false, 179);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "                  ";
        } else {
            // line 183
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"10\">";
            // line 184
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>
                  ";
        }
        // line 187
        echo "                    </tbody>
                  
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 193
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 194
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\turl = 'index.php?route=sale/return&user_token=";
        // line 203
        echo ($context["user_token"] ?? null);
        echo "';
\t
\tvar filter_return_id = \$('input[name=\\'filter_return_id\\']').val();
\t
\tif (filter_return_id) {
\t\turl += '&filter_return_id=' + encodeURIComponent(filter_return_id);
\t}
\t
\tvar filter_order_id = \$('input[name=\\'filter_order_id\\']').val();
\t
\tif (filter_order_id) {
\t\turl += '&filter_order_id=' + encodeURIComponent(filter_order_id);
\t}\t
\t\t
\tvar filter_customer = \$('input[name=\\'filter_customer\\']').val();
\t
\tif (filter_customer) {
\t\turl += '&filter_customer=' + encodeURIComponent(filter_customer);
\t}
\t
\tvar filter_product = \$('input[name=\\'filter_product\\']').val();
\t
\tif (filter_product) {
\t\turl += '&filter_product=' + encodeURIComponent(filter_product);
\t}

\tvar filter_model = \$('input[name=\\'filter_model\\']').val();
\t
\tif (filter_model) {
\t\turl += '&filter_model=' + encodeURIComponent(filter_model);
\t}
\t\t
\tvar filter_return_status_id = \$('select[name=\\'filter_return_status_id\\']').val();
\t
\tif (filter_return_status_id !== '') {
\t\turl += '&filter_return_status_id=' + encodeURIComponent(filter_return_status_id);
\t}\t
\t
\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();
\t
\tif (filter_date_added) {
\t\turl += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t}

\tvar filter_date_modified = \$('input[name=\\'filter_date_modified\\']').val();
\t
\tif (filter_date_modified) {
\t\turl += '&filter_date_modified=' + encodeURIComponent(filter_date_modified);
\t}
\t\t\t
\tlocation = url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('input[name=\\'filter_customer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 260
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',\t\t\t
\t\t\tsuccess: function(json) {
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
\t\t\$('input[name=\\'filter_customer\\']').val(item['label']);
\t}\t
});

\$('input[name=\\'filter_product\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 280
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',\t\t\t
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_product\\']').val(item['label']);
\t}\t
});

\$('input[name=\\'filter_model\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 300
        echo ($context["user_token"] ?? null);
        echo "&filter_model=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',\t\t\t
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['model'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_model\\']').val(item['label']);
\t}\t
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 319
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});
//--></script> 
</div>
";
        // line 324
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "sale/return_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  724 => 324,  716 => 319,  694 => 300,  671 => 280,  648 => 260,  588 => 203,  576 => 194,  572 => 193,  564 => 187,  558 => 184,  555 => 183,  552 => 182,  541 => 179,  537 => 178,  533 => 177,  529 => 176,  525 => 175,  521 => 174,  517 => 173,  513 => 172,  509 => 171,  506 => 170,  500 => 169,  494 => 167,  492 => 166,  489 => 165,  484 => 164,  482 => 163,  474 => 158,  456 => 157,  438 => 156,  420 => 155,  402 => 154,  384 => 153,  366 => 152,  348 => 151,  330 => 150,  321 => 144,  315 => 141,  304 => 133,  293 => 127,  288 => 125,  277 => 119,  272 => 117,  259 => 106,  253 => 105,  238 => 95,  228 => 87,  213 => 77,  203 => 69,  200 => 68,  196 => 67,  182 => 56,  174 => 53,  170 => 52,  162 => 49,  158 => 48,  150 => 45,  146 => 44,  138 => 41,  134 => 40,  126 => 37,  122 => 36,  115 => 32,  109 => 28,  101 => 24,  98 => 23,  90 => 19,  88 => 18,  83 => 15,  72 => 13,  68 => 12,  63 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sale/return_list.twig", "");
    }
}
