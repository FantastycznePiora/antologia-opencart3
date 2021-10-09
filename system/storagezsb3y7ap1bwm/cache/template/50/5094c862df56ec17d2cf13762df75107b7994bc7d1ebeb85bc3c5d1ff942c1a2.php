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

/* user/api_form.twig */
class __TwigTemplate_2675edc83e1722cf10652b47a5aef3aa9c8579ab5a680c2f42b7db3b6ca3c19d extends \Twig\Template
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
        <button type=\"submit\" form=\"form-api\" data-toggle=\"tooltip\" title=\"";
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
  <div class=\"container-fluid\">";
        // line 16
        if (($context["error_warning"] ?? null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-api\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 28
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-ip\" data-toggle=\"tab\">";
        // line 29
        echo ($context["tab_ip"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-session\" data-toggle=\"tab\">";
        // line 30
        echo ($context["tab_session"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-username\">";
        // line 35
        echo ($context["entry_username"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"username\" value=\"";
        // line 37
        echo ($context["username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_username"] ?? null);
        echo "\" id=\"input-username\" class=\"form-control\" />
                  ";
        // line 38
        if (($context["error_username"] ?? null)) {
            // line 39
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_username"] ?? null);
            echo "</div>
                  ";
        }
        // line 40
        echo " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-key\">";
        // line 43
        echo ($context["entry_key"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"key\" placeholder=\"";
        // line 45
        echo ($context["entry_key"] ?? null);
        echo "\" rows=\"5\" id=\"input-key\" class=\"form-control\">";
        echo ($context["key"] ?? null);
        echo "</textarea>
                  <br />
                  <button type=\"button\" id=\"button-generate\" class=\"btn btn-primary\"><i class=\"fa fa-refresh\"></i> ";
        // line 47
        echo ($context["button_generate"] ?? null);
        echo "</button>
                  ";
        // line 48
        if (($context["error_key"] ?? null)) {
            // line 49
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_key"] ?? null);
            echo "</div>
                  ";
        }
        // line 50
        echo " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 53
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">
                    
                    ";
        // line 57
        if (($context["status"] ?? null)) {
            // line 58
            echo "                    
                    <option value=\"0\">";
            // line 59
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    <option value=\"1\" selected=\"selected\">";
            // line 60
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    
                    ";
        } else {
            // line 63
            echo "                    
                    <option value=\"0\" selected=\"selected\">";
            // line 64
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    <option value=\"1\">";
            // line 65
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    
                    ";
        }
        // line 68
        echo "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-ip\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 74
        echo ($context["text_ip"] ?? null);
        echo "</div>
              <div class=\"table-responsive\">
                <table id=\"ip\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 79
        echo ($context["entry_ip"] ?? null);
        echo "</td>
                      <td class=\"text-left\"></td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 85
        $context["ip_row"] = 0;
        // line 86
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["api_ips"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api_ip"]) {
            // line 87
            echo "                  <tr id=\"ip-row";
            echo ($context["ip_row"] ?? null);
            echo "\">
                    <td class=\"text-left\"><input type=\"text\" name=\"api_ip[]\" value=\"";
            // line 88
            echo twig_get_attribute($this->env, $this->source, $context["api_ip"], "ip", [], "any", false, false, false, 88);
            echo "\" placeholder=\"";
            echo ($context["entry_ip"] ?? null);
            echo "\" class=\"form-control\" /></td>
                    <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#ip-row";
            // line 89
            echo ($context["ip_row"] ?? null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
            // line 91
            $context["ip_row"] = (($context["ip_row"] ?? null) + 1);
            // line 92
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api_ip'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                    </tbody>
                  
                  <tfoot>
                    <tr>
                      <td></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addIp()\" data-toggle=\"tooltip\" title=\"";
        // line 98
        echo ($context["button_ip_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-session\">
              <div class=\"table-responsive\">
                <table id=\"session\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 109
        echo ($context["column_token"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 110
        echo ($context["column_ip"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 111
        echo ($context["column_date_added"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 112
        echo ($context["column_date_modified"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 113
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 118
        if (($context["api_sessions"] ?? null)) {
            // line 119
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["api_sessions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["api_session"]) {
                // line 120
                echo "                  <tr>
                    <td class=\"text-left\">";
                // line 121
                echo twig_get_attribute($this->env, $this->source, $context["api_session"], "session_id", [], "any", false, false, false, 121);
                echo "</td>
                    <td class=\"text-left\">";
                // line 122
                echo twig_get_attribute($this->env, $this->source, $context["api_session"], "ip", [], "any", false, false, false, 122);
                echo "</td>
                    <td class=\"text-left\">";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["api_session"], "date_added", [], "any", false, false, false, 123);
                echo "</td>
                    <td class=\"text-left\">";
                // line 124
                echo twig_get_attribute($this->env, $this->source, $context["api_session"], "date_modified", [], "any", false, false, false, 124);
                echo "</td>
                    <td class=\"text-right\"><button type=\"button\" value=\"";
                // line 125
                echo twig_get_attribute($this->env, $this->source, $context["api_session"], "api_session_id", [], "any", false, false, false, 125);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['api_session'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "                  ";
        } else {
            // line 129
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"5\">";
            // line 130
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>
                  ";
        }
        // line 133
        echo "                    </tbody>
                  
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-generate').on('click', function() {
\trand = '';

\tstring = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

\tfor (i = 0; i < 256; i++) {
\t\trand += string[Math.floor(Math.random() * (string.length - 1))];
\t}

\t\$('#input-key').val(rand);
});
//--></script> 
  <script type=\"text/javascript\"><!--
var ip_row = ";
        // line 157
        echo ($context["ip_row"] ?? null);
        echo ";

function addIp() {
\thtml  = '<tr id=\"ip-row' + ip_row + '\">';
    html += '  <td class=\"text-right\"><input type=\"text\" name=\"api_ip[]\" value=\"\" placeholder=\"";
        // line 161
        echo ($context["entry_ip"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#ip-row' + ip_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 162
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#ip tbody').append(html);

\tip_row++;
}
//--></script> 
  <script type=\"text/javascript\"><!--
\$('#session button').on('click', function(e) {
\te.preventDefault();

\tvar node = this;

\t\$.ajax({
\t\turl: 'index.php?route=user/api/deletesession&user_token=";
        // line 177
        echo ($context["user_token"] ?? null);
        echo "&api_session_id=' + \$(node).val(),
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$(node).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(node).button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#tab-session').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#tab-session').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$(node).parent().parent().remove();
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
</div>
";
        // line 206
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "user/api_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 206,  417 => 177,  399 => 162,  395 => 161,  388 => 157,  362 => 133,  356 => 130,  353 => 129,  350 => 128,  339 => 125,  335 => 124,  331 => 123,  327 => 122,  323 => 121,  320 => 120,  315 => 119,  313 => 118,  305 => 113,  301 => 112,  297 => 111,  293 => 110,  289 => 109,  275 => 98,  268 => 93,  262 => 92,  260 => 91,  253 => 89,  247 => 88,  242 => 87,  237 => 86,  235 => 85,  226 => 79,  218 => 74,  210 => 68,  204 => 65,  200 => 64,  197 => 63,  191 => 60,  187 => 59,  184 => 58,  182 => 57,  175 => 53,  170 => 50,  164 => 49,  162 => 48,  158 => 47,  151 => 45,  146 => 43,  141 => 40,  135 => 39,  133 => 38,  127 => 37,  122 => 35,  114 => 30,  110 => 29,  106 => 28,  101 => 26,  95 => 23,  91 => 21,  83 => 17,  81 => 16,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/api_form.twig", "");
    }
}
