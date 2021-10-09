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

/* marketing/contact.twig */
class __TwigTemplate_aada1f07f65113661eebaf913b0298f0162f1bc8c7cd43653a493fe7b1a7d809 extends \Twig\Template
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
        <button id=\"button-send\" data-loading-text=\"";
        // line 6
        echo ($context["text_loading"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_send"] ?? null);
        echo "\" class=\"btn btn-primary\" onclick=\"send('index.php?route=marketing/contact/send&user_token=";
        echo ($context["user_token"] ?? null);
        echo "');\"><i class=\"fa fa-envelope\"></i></button>
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
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-envelope\"></i> ";
        // line 19
        echo ($context["heading_title"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-store\">";
        // line 24
        echo ($context["entry_store"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"store_id\" id=\"input-store\" class=\"form-control\">
                <option value=\"0\">";
        // line 27
        echo ($context["text_default"] ?? null);
        echo "</option>
                
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 30
            echo "                
                <option value=\"";
            // line 31
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 31);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 31);
            echo "</option>
                
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "              
              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-to\">";
        // line 39
        echo ($context["entry_to"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"to\" id=\"input-to\" class=\"form-control\">
                <option value=\"newsletter\">";
        // line 42
        echo ($context["text_newsletter"] ?? null);
        echo "</option>
                <option value=\"customer_all\">";
        // line 43
        echo ($context["text_customer_all"] ?? null);
        echo "</option>
                <option value=\"customer_group\">";
        // line 44
        echo ($context["text_customer_group"] ?? null);
        echo "</option>
                <option value=\"customer\">";
        // line 45
        echo ($context["text_customer"] ?? null);
        echo "</option>
                <option value=\"affiliate_all\">";
        // line 46
        echo ($context["text_affiliate_all"] ?? null);
        echo "</option>
                <option value=\"affiliate\">";
        // line 47
        echo ($context["text_affiliate"] ?? null);
        echo "</option>
                <option value=\"product\">";
        // line 48
        echo ($context["text_product"] ?? null);
        echo "</option>
              </select>
            </div>
          </div>
          <div class=\"form-group to\" id=\"to-customer-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-customer-group\">";
        // line 53
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                
                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 58
            echo "                
                <option value=\"";
            // line 59
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 59);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 59);
            echo "</option>
                
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "              
              </select>
            </div>
          </div>
          <div class=\"form-group to\" id=\"to-customer\">
            <label class=\"col-sm-2 control-label\" for=\"input-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 67
        echo ($context["help_customer"] ?? null);
        echo "\">";
        echo ($context["entry_customer"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"customers\" value=\"\" placeholder=\"";
        // line 69
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" class=\"form-control\" />
              <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"></div>
            </div>
          </div>
          <div class=\"form-group to\" id=\"to-affiliate\">
            <label class=\"col-sm-2 control-label\" for=\"input-affiliate\"><span data-toggle=\"tooltip\" title=\"";
        // line 74
        echo ($context["help_affiliate"] ?? null);
        echo "\">";
        echo ($context["entry_affiliate"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"affiliates\" value=\"\" placeholder=\"";
        // line 76
        echo ($context["entry_affiliate"] ?? null);
        echo "\" id=\"input-affiliate\" class=\"form-control\" />
              <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"></div>
            </div>
          </div>
          <div class=\"form-group to\" id=\"to-product\">
            <label class=\"col-sm-2 control-label\" for=\"input-product\"><span data-toggle=\"tooltip\" title=\"";
        // line 81
        echo ($context["help_product"] ?? null);
        echo "\">";
        echo ($context["entry_product"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"products\" value=\"\" placeholder=\"";
        // line 83
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
              <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"></div>
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-subject\">";
        // line 88
        echo ($context["entry_subject"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"subject\" value=\"\" placeholder=\"";
        // line 90
        echo ($context["entry_subject"] ?? null);
        echo "\" id=\"input-subject\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-message\">";
        // line 94
        echo ($context["entry_message"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"message\" placeholder=\"";
        // line 96
        echo ($context["entry_message"] ?? null);
        echo "\" id=\"input-message\" data-toggle=\"summernote\" data-lang=\"";
        echo ($context["summernote"] ?? null);
        echo "\" class=\"form-control\"></textarea>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script> 
  <script type=\"text/javascript\"><!--
\$('select[name=\\'to\\']').on('change', function() {
\t\$('.to').hide();

\t\$('#to-' + this.value.replace('_', '-')).show();
});

\$('select[name=\\'to\\']').trigger('change');
//--></script> 
  <script type=\"text/javascript\"><!--
// Customers
\$('input[name=\\'customers\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 126
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'customers\\']').val('');

\t\t\$('#input-customer' + item['value']).remove();

\t\t\$('#input-customer').parent().find('.well').append('<div id=\"customer' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"customer[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#input-customer').parent().find('.well').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});

// Affiliates
\$('input[name=\\'affiliates\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 158
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request) + '&filter_affiliate=1',
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'affiliates\\']').val('');

\t\t\$('#input-affiliate' + item['value']).remove();

\t\t\$('#input-affiliate').parent().find('.well').append('<div id=\"affiliate' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"affiliate[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#input-affiliate').parent().find('.well').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});

// Products
\$('input[name=\\'products\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 190
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'products\\']').val('');

\t\t\$('#input-product' + item['value']).remove();

\t\t\$('#input-product').parent().find('.well').append('<div id=\"product' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#input-product').parent().find('.well').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});

function send(url) {
\t\$.ajax({
\t\turl: url,
\t\ttype: 'post',
\t\tdata: \$('#content select, #content input, #content textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-send').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-send').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tif (json['error']['email']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['email'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tif (json['error']['subject']) {
\t\t\t\t\t\$('input[name=\\'subject\\']').after('<div class=\"text-danger\">' + json['error']['subject'] + '</div>');
\t\t\t\t}

\t\t\t\tif (json['error']['message']) {
\t\t\t\t\t\$('textarea[name=\\'message\\']').parent().append('<div class=\"text-danger\">' + json['error']['message'] + '</div>');
\t\t\t\t}
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i>  ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}
\t\t\t\t
\t\t\tif (json['next']) {
\t\t\t\tsend(json['next']);
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
}
//--></script></div>
";
        // line 265
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "marketing/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 265,  369 => 190,  334 => 158,  299 => 126,  264 => 96,  259 => 94,  252 => 90,  247 => 88,  239 => 83,  232 => 81,  224 => 76,  217 => 74,  209 => 69,  202 => 67,  195 => 62,  184 => 59,  181 => 58,  177 => 57,  170 => 53,  162 => 48,  158 => 47,  154 => 46,  150 => 45,  146 => 44,  142 => 43,  138 => 42,  132 => 39,  125 => 34,  114 => 31,  111 => 30,  107 => 29,  102 => 27,  96 => 24,  88 => 19,  80 => 13,  69 => 11,  65 => 10,  60 => 8,  54 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "marketing/contact.twig", "");
    }
}
