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

/* extension/payment/paypal.twig */
class __TwigTemplate_e3254fada5e3680630be9eb9e5eeceb764b6c40c2285ec431d3de458420d9a0a extends \Twig\Template
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
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<button type=\"submit\" form=\"form_payment\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
\t\t\t\t<a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "\t\t\t\t<li><a href=\"";
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["breadcrumb"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["breadcrumb"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["text"] ?? null) : null);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "\t\t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t\t";
        }
        // line 23
        echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo ($context["text_edit"] ?? null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<form action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form_payment\" class=\"form-horizontal\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"nav-tab active\"><a href=\"#tab_general\" data-toggle=\"tab\">";
        // line 30
        echo ($context["text_general"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li class=\"nav-tab\"><a href=\"#tab_order_status\" data-toggle=\"tab\">";
        // line 31
        echo ($context["text_order_status"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li class=\"nav-tab\"><a href=\"#tab_checkout_express\" data-toggle=\"tab\">";
        // line 32
        echo ($context["text_checkout_express"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li class=\"nav-tab hidden\"><a href=\"#tab_checkout_card\" data-toggle=\"tab\">";
        // line 33
        echo ($context["text_checkout_card"] ?? null);
        echo "</a></li>
\t\t\t\t\t</ul>
\t\t  
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab_general\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_environment\">";
        // line 39
        echo ($context["entry_environment"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_environment\" id=\"input_environment\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 42
        if ((($context["environment"] ?? null) == "production")) {
            // line 43
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"production\" selected=\"selected\">";
            echo ($context["text_production"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"sandbox\">";
            // line 44
            echo ($context["text_sandbox"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 46
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"production\">";
            echo ($context["text_production"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"sandbox\" selected=\"selected\">";
            // line 47
            echo ($context["text_sandbox"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 49
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_connect\">";
        // line 53
        echo ($context["entry_connect"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div id=\"section_connect\" ";
        // line 55
        if (((($context["client_id"] ?? null) && ($context["secret"] ?? null)) && ($context["merchant_id"] ?? null))) {
            echo "class=\"hidden\"";
        }
        echo ">
\t\t\t\t\t\t\t\t\t\t<style type=\"text/css\">
\t\t\t\t\t\t\t\t\t\t\ta[data-paypal-button=\"PPLtBlue\"]::before {
\t\t\t\t\t\t\t\t\t\t\t\tcontent: \"\";
\t\t\t\t\t\t\t\t\t\t\t\tbackground: url(https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-200px.png) 11px no-repeat #fff;
\t\t\t\t\t\t\t\t\t\t\t\tbackground-size: 80px;
\t\t\t\t\t\t\t\t\t\t\t\tdisplay: table-cell;
\t\t\t\t\t\t\t\t\t\t\t\twidth: 100px;
\t\t\t\t\t\t\t\t\t\t\t\theight: 42px;
\t\t\t\t\t\t\t\t\t\t\t\tfloat: left;
\t\t\t\t\t\t\t\t\t\t\t\tmargin-right: 16px;
\t\t\t\t\t\t\t\t\t\t\t\tborder-bottom-left-radius: 5px;
\t\t\t\t\t\t\t\t\t\t\t\tborder-top-left-radius: 5px;
\t\t\t\t\t\t\t\t\t\t\t\tmargin-top: -12px;
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t</style>
\t\t\t\t\t\t\t\t\t\t<a id=\"button_connect_ppcp\" href=\"";
        // line 71
        echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["configure_url"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[($context["environment"] ?? null)] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["ppcp"] ?? null) : null);
        echo "\" target=\"_blank\" data-paypal-button=\"PPLtBlue\" data-paypal-onboard-complete=\"onBoardedCallback\">";
        echo ($context["button_connect"] ?? null);
        echo "</a><br />
\t\t\t\t\t\t\t\t\t\t<p>";
        // line 72
        echo ($context["help_checkout_express"] ?? null);
        echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 74
        if (((($context["client_id"] ?? null) && ($context["secret"] ?? null)) && ($context["merchant_id"] ?? null))) {
            // line 75
            echo "\t\t\t\t\t\t\t\t\t<div id=\"section_disconnect\">
\t\t\t\t\t\t\t\t\t\t<p class=\"alert alert-info\">";
            // line 76
            echo ($context["text_connect"] ?? null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t<a id=\"button_disconnect\" class=\"btn btn-danger\">";
            // line 77
            echo ($context["button_disconnect"] ?? null);
            echo "</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 80
        echo "\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"payment_paypal_client_id\" value=\"";
        echo ($context["client_id"] ?? null);
        echo "\" id=\"input_client_id\" />
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"payment_paypal_secret\" value=\"";
        // line 81
        echo ($context["secret"] ?? null);
        echo "\" id=\"input_secret\" />
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"payment_paypal_merchant_id\" value=\"";
        // line 82
        echo ($context["merchant_id"] ?? null);
        echo "\" id=\"input_merchant_id\" />
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"payment_paypal_webhook_id\" value=\"";
        // line 83
        echo ($context["webhook_id"] ?? null);
        echo "\" id=\"input_webhook_id\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 86
        if (((($context["client_id"] ?? null) && ($context["secret"] ?? null)) && ($context["merchant_id"] ?? null))) {
            // line 87
            echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_checkout_express_status\"><span data-toggle=\"tooltip\" title=\"";
            // line 88
            echo ($context["help_checkout_express_status"] ?? null);
            echo "\">";
            echo ($context["entry_checkout_express_status"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][express][status]\" id=\"input_checkout_express_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
            // line 91
            if ((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["setting"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["checkout"] ?? null) : null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["express"] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["status"] ?? null) : null)) {
                // line 92
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 93
                echo ($context["text_disabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 95
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 96
                echo ($context["text_disabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 98
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_checkout_card_status\">";
            // line 102
            echo ($context["entry_checkout_card_status"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][card][status]\" id=\"input_checkout_card_status\" class=\"form-control hidden\">
\t\t\t\t\t\t\t\t\t\t";
            // line 105
            if ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["setting"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["checkout"] ?? null) : null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["card"] ?? null) : null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["status"] ?? null) : null)) {
                // line 106
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 107
                echo ($context["text_disabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 109
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 110
                echo ($context["text_disabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 112
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t<div class=\"alert alert-warning alert-dismissible hidden\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 113
            echo ($context["help_checkout_card_status"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 119
        echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_debug\">";
        // line 120
        echo ($context["entry_debug"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_debug\" id=\"input_debug\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 123
        if (($context["debug"] ?? null)) {
            // line 124
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 125
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 127
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 128
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 130
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_transaction_method\">";
        // line 134
        echo ($context["entry_transaction_method"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_transaction_method\" id=\"input_transaction_method\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 137
        if ((($context["transaction_method"] ?? null) == "authorize")) {
            // line 138
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"authorize\" selected=\"selected\">";
            echo ($context["text_authorization"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"capture\">";
            // line 139
            echo ($context["text_sale"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 141
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"authorize\">";
            echo ($context["text_authorization"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"capture\" selected=\"selected\">";
            // line 142
            echo ($context["text_sale"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 144
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_total\"><span data-toggle=\"tooltip\" title=\"";
        // line 148
        echo ($context["help_total"] ?? null);
        echo "\">";
        echo ($context["entry_total"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_paypal_total\" value=\"";
        // line 150
        echo ($context["total"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_total"] ?? null);
        echo "\" id=\"input_total\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_geo_zone\">";
        // line 154
        echo ($context["entry_geo_zone"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_geo_zone_id\" id=\"input_geo_zone\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 157
        echo ($context["text_all_zones"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 159
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["geo_zone"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["geo_zone_id"] ?? null) : null) == ($context["geo_zone_id"] ?? null))) {
                // line 160
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["geo_zone"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["geo_zone_id"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["geo_zone"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["name"] ?? null) : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 162
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["geo_zone"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["geo_zone_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["geo_zone"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["name"] ?? null) : null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 164
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_status\">";
        // line 169
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_status\" id=\"input_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 172
        if (($context["status"] ?? null)) {
            // line 173
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 174
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 176
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 177
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 179
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_sort_order\">";
        // line 183
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_paypal_sort_order\" value=\"";
        // line 185
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input_sort_order\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_currency_code\"><span data-toggle=\"tooltip\" title=\"";
        // line 189
        echo ($context["help_currency_code"] ?? null);
        echo "\">";
        echo ($context["entry_currency_code"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_currency_code\" id=\"input_currency_code\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["setting"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["currency"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 193
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["currency"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["code"] ?? null) : null) == ($context["currency_code"] ?? null))) {
                // line 194
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["currency"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["code"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["currency"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["name"] ?? null) : null), [], "any", false, false, false, 194);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 196
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["currency"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["code"] ?? null) : null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["currency"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["name"] ?? null) : null), [], "any", false, false, false, 196);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 198
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_currency_value\"><span data-toggle=\"tooltip\" title=\"";
        // line 203
        echo ($context["help_currency_value"] ?? null);
        echo "\">";
        echo ($context["entry_currency_value"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"payment_paypal_currency_value\" value=\"";
        // line 205
        echo ($context["currency_value"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_currency_value"] ?? null);
        echo "\" id=\"input_currency_value\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_smart_button\">";
        // line 209
        echo ($context["entry_smart_button"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 211
        echo ($context["configure_smart_button_url"] ?? null);
        echo "\" target=\"_blank\" class=\"btn btn-primary\">";
        echo ($context["button_smart_button"] ?? null);
        echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab_order_status\">
\t\t\t\t\t\t\t";
        // line 216
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["setting"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["order_status"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["paypal_order_status"]) {
            // line 217
            echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_order_status_";
            // line 218
            echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["paypal_order_status"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["code"] ?? null) : null);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["paypal_order_status"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["name"] ?? null) : null), [], "any", false, false, false, 218);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[order_status][";
            // line 220
            echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["paypal_order_status"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["code"] ?? null) : null);
            echo "][id]\" id=\"input_";
            echo (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["paypal_order_status"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["code"] ?? null) : null);
            echo "_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
            // line 221
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
                // line 222
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (((($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["order_status"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["order_status_id"] ?? null) : null) == (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["paypal_order_status"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["id"] ?? null) : null))) {
                    // line 223
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["order_status"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["order_status_id"] ?? null) : null);
                    echo "\" selected=\"selected\">";
                    echo (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["order_status"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["name"] ?? null) : null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 225
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["order_status"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["order_status_id"] ?? null) : null);
                    echo "\">";
                    echo (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["order_status"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["name"] ?? null) : null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 227
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paypal_order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab_checkout_express\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_checkout_express_button_align\">";
        // line 235
        echo ($context["entry_button_align"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][express][button_align]\" id=\"input_checkout_express_button_align\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = ($context["setting"] ?? null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["button_align"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["button_align"]) {
            // line 239
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["button_align"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["code"] ?? null) : null) == (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = ($context["setting"] ?? null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["checkout"] ?? null) : null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["express"] ?? null) : null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["button_align"] ?? null) : null))) {
                // line 240
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = $context["button_align"]) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["code"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = $context["button_align"]) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["name"] ?? null) : null), [], "any", false, false, false, 240);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 242
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = $context["button_align"]) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["code"] ?? null) : null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = $context["button_align"]) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["name"] ?? null) : null), [], "any", false, false, false, 242);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 244
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button_align'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 245
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_checkout_express_button_size\">";
        // line 249
        echo ($context["entry_button_size"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][express][button_size]\" id=\"input_checkout_express_button_size\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 252
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = ($context["setting"] ?? null)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["button_size"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["button_size"]) {
            // line 253
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = $context["button_size"]) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["code"] ?? null) : null) == (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = ($context["setting"] ?? null)) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["checkout"] ?? null) : null)) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["express"] ?? null) : null)) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["button_size"] ?? null) : null))) {
                // line 254
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = $context["button_size"]) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["code"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = $context["button_size"]) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["name"] ?? null) : null), [], "any", false, false, false, 254);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 256
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = $context["button_size"]) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["code"] ?? null) : null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = $context["button_size"]) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["name"] ?? null) : null), [], "any", false, false, false, 256);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 258
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button_size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 259
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_checkout_express_button_color\">";
        // line 263
        echo ($context["entry_button_color"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][express][button_color]\" id=\"input_checkout_express_button_color\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 266
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = ($context["setting"] ?? null)) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["button_color"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["button_color"]) {
            // line 267
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = $context["button_color"]) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["code"] ?? null) : null) == (($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = (($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = ($context["setting"] ?? null)) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a["checkout"] ?? null) : null)) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5["express"] ?? null) : null)) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d["button_color"] ?? null) : null))) {
                // line 268
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = $context["button_color"]) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da["code"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = $context["button_color"]) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38["name"] ?? null) : null), [], "any", false, false, false, 268);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 270
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = $context["button_color"]) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec["code"] ?? null) : null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = $context["button_color"]) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574["name"] ?? null) : null), [], "any", false, false, false, 270);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 272
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button_color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 273
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_checkout_express_button_shape\">";
        // line 277
        echo ($context["entry_button_shape"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][express][button_shape]\" id=\"input_checkout_express_button_shape\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 280
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = ($context["setting"] ?? null)) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c["button_shape"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["button_shape"]) {
            // line 281
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = $context["button_shape"]) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0["code"] ?? null) : null) == (($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = (($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = (($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = ($context["setting"] ?? null)) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81["checkout"] ?? null) : null)) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd["express"] ?? null) : null)) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc["button_shape"] ?? null) : null))) {
                // line 282
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = $context["button_shape"]) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007["code"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = $context["button_shape"]) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d["name"] ?? null) : null), [], "any", false, false, false, 282);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 284
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = $context["button_shape"]) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba["code"] ?? null) : null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = $context["button_shape"]) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49["name"] ?? null) : null), [], "any", false, false, false, 284);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 286
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button_shape'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 287
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_checkout_express_button_label\">";
        // line 291
        echo ($context["entry_button_label"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][express][button_label]\" id=\"input_checkout_express_button_label\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 294
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = ($context["setting"] ?? null)) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639["button_label"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["button_label"]) {
            // line 295
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = $context["button_label"]) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf["code"] ?? null) : null) == (($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = (($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = (($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = ($context["setting"] ?? null)) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4["checkout"] ?? null) : null)) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a["express"] ?? null) : null)) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921["button_label"] ?? null) : null))) {
                // line 296
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = $context["button_label"]) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985["code"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = $context["button_label"]) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51["name"] ?? null) : null), [], "any", false, false, false, 296);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 298
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = $context["button_label"]) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a["code"] ?? null) : null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = $context["button_label"]) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762["name"] ?? null) : null), [], "any", false, false, false, 298);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 300
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button_label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 301
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane hidden\" id=\"tab_checkout_card\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_checkout_card_form_align\">";
        // line 307
        echo ($context["entry_form_align"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][card][form_align]\" id=\"input_checkout_card_form_align\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 310
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 = ($context["setting"] ?? null)) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053["form_align"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["form_align"]) {
            // line 311
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c = $context["form_align"]) && is_array($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c) || $__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c instanceof ArrayAccess ? ($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c["code"] ?? null) : null) == (($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c = (($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 = (($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 = ($context["setting"] ?? null)) && is_array($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8) || $__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 instanceof ArrayAccess ? ($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8["checkout"] ?? null) : null)) && is_array($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030) || $__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 instanceof ArrayAccess ? ($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030["card"] ?? null) : null)) && is_array($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c) || $__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c instanceof ArrayAccess ? ($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c["form_align"] ?? null) : null))) {
                // line 312
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 = $context["form_align"]) && is_array($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86) || $__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 instanceof ArrayAccess ? ($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86["code"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 = $context["form_align"]) && is_array($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9) || $__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 instanceof ArrayAccess ? ($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9["name"] ?? null) : null), [], "any", false, false, false, 312);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 314
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac = $context["form_align"]) && is_array($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac) || $__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac instanceof ArrayAccess ? ($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac["code"] ?? null) : null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 = $context["form_align"]) && is_array($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768) || $__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 instanceof ArrayAccess ? ($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768["name"] ?? null) : null), [], "any", false, false, false, 314);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 316
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form_align'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 317
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_checkout_card_form_size\">";
        // line 321
        echo ($context["entry_form_size"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][card][form_size]\" id=\"input_checkout_card_form_size\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 324
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 = ($context["setting"] ?? null)) && is_array($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57) || $__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 instanceof ArrayAccess ? ($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57["form_size"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["form_size"]) {
            // line 325
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (((($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 = $context["form_size"]) && is_array($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898) || $__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 instanceof ArrayAccess ? ($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898["code"] ?? null) : null) == (($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 = (($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a = (($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 = ($context["setting"] ?? null)) && is_array($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3) || $__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 instanceof ArrayAccess ? ($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3["checkout"] ?? null) : null)) && is_array($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a) || $__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a instanceof ArrayAccess ? ($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a["card"] ?? null) : null)) && is_array($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283) || $__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 instanceof ArrayAccess ? ($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283["form_size"] ?? null) : null))) {
                // line 326
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 = $context["form_size"]) && is_array($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4) || $__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 instanceof ArrayAccess ? ($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4["code"] ?? null) : null);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 = $context["form_size"]) && is_array($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9) || $__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 instanceof ArrayAccess ? ($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9["name"] ?? null) : null), [], "any", false, false, false, 326);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 328
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo (($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 = $context["form_size"]) && is_array($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7) || $__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 instanceof ArrayAccess ? ($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7["code"] ?? null) : null);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context, (($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 = $context["form_size"]) && is_array($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416) || $__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 instanceof ArrayAccess ? ($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416["name"] ?? null) : null), [], "any", false, false, false, 328);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 330
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form_size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 331
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_checkout_card_secure_status\"><span data-toggle=\"tooltip\" title=\"";
        // line 335
        echo ($context["help_secure_status"] ?? null);
        echo "\">";
        echo ($context["entry_secure_status"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][card][secure_status]\" id=\"input_checkout_card_secure_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 338
        if ((($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e = (($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f = (($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b = ($context["setting"] ?? null)) && is_array($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b) || $__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b instanceof ArrayAccess ? ($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b["checkout"] ?? null) : null)) && is_array($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f) || $__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f instanceof ArrayAccess ? ($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f["card"] ?? null) : null)) && is_array($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e) || $__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e instanceof ArrayAccess ? ($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e["secure_status"] ?? null) : null)) {
            // line 339
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 340
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 342
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 343
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 345
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_checkout_card_secure_scenario\"><span data-toggle=\"tooltip\" title=\"";
        // line 349
        echo ($context["help_secure_scenario"] ?? null);
        echo "\">";
        echo ($context["entry_secure_scenario"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t";
        // line 351
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 = ($context["setting"] ?? null)) && is_array($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75) || $__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 instanceof ArrayAccess ? ($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75["secure_scenario"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["secure_scenario"]) {
            // line 352
            echo "\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\" for=\"input_checkout_card_secure_scenario\">";
            // line 354
            echo twig_get_attribute($this->env, $this->source, $context, (($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c = $context["secure_scenario"]) && is_array($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c) || $__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c instanceof ArrayAccess ? ($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c["name"] ?? null) : null), [], "any", false, false, false, 354);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<select name=\"payment_paypal_setting[checkout][card][secure_scenario][";
            // line 357
            echo (($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 = $context["secure_scenario"]) && is_array($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1) || $__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 instanceof ArrayAccess ? ($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1["code"] ?? null) : null);
            echo "]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" ";
            // line 358
            if ((($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 = (($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 = (($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 = (($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df = ($context["setting"] ?? null)) && is_array($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df) || $__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df instanceof ArrayAccess ? ($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df["checkout"] ?? null) : null)) && is_array($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34) || $__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 instanceof ArrayAccess ? ($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34["card"] ?? null) : null)) && is_array($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850) || $__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 instanceof ArrayAccess ? ($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850["secure_scenario"] ?? null) : null)) && is_array($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24) || $__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 instanceof ArrayAccess ? ($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24[(($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 = $context["secure_scenario"]) && is_array($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4) || $__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 instanceof ArrayAccess ? ($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4["code"] ?? null) : null)] ?? null) : null)) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["text_accept"] ?? null);
            if ((($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 = $context["secure_scenario"]) && is_array($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36) || $__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 instanceof ArrayAccess ? ($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36["recommended"] ?? null) : null)) {
                echo " ";
                echo ($context["text_recommended"] ?? null);
            }
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" ";
            // line 359
            if ( !(($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b = (($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e = (($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 = (($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 = ($context["setting"] ?? null)) && is_array($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606) || $__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 instanceof ArrayAccess ? ($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606["checkout"] ?? null) : null)) && is_array($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7) || $__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 instanceof ArrayAccess ? ($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7["card"] ?? null) : null)) && is_array($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e) || $__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e instanceof ArrayAccess ? ($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e["secure_scenario"] ?? null) : null)) && is_array($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b) || $__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b instanceof ArrayAccess ? ($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b[(($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd = $context["secure_scenario"]) && is_array($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd) || $__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd instanceof ArrayAccess ? ($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd["code"] ?? null) : null)] ?? null) : null)) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo ($context["text_decline"] ?? null);
            if ( !(($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e = $context["secure_scenario"]) && is_array($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e) || $__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e instanceof ArrayAccess ? ($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e["recommended"] ?? null) : null)) {
                echo " ";
                echo ($context["text_recommended"] ?? null);
            }
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['secure_scenario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 365
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 374
        if (((($context["client_id"] ?? null) && ($context["secret"] ?? null)) && ($context["merchant_id"] ?? null))) {
            // line 375
            echo "<script type=\"text/javascript\" src = \"https://www.paypal.com/sdk/js?components=hosted-fields&client-id=";
            echo ($context["client_id"] ?? null);
            echo "&merchant-id=";
            echo ($context["merchant_id"] ?? null);
            echo "\" data-partner-attribution-id=\"";
            echo (($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 = (($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb = (($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf = ($context["setting"] ?? null)) && is_array($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf) || $__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf instanceof ArrayAccess ? ($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf["partner"] ?? null) : null)) && is_array($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb) || $__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb instanceof ArrayAccess ? ($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb[($context["environment"] ?? null)] ?? null) : null)) && is_array($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1) || $__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 instanceof ArrayAccess ? ($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1["partner_id"] ?? null) : null);
            echo "\" data-client-token=\"";
            echo ($context["client_token"] ?? null);
            echo "\"></script>
<script type=\"text/javascript\">

try {
\tif (paypal.HostedFields.isEligible() === true) {
\t\t\$('[href=\"#tab_checkout_card\"]').parents('.nav-tab').removeClass('hidden');
\t\t\$('#tab_checkout_card').removeClass('hidden');
\t\t\$('#input_checkout_card_status').removeClass('hidden');
\t} else {
\t\t\$('#input_checkout_card_status').parents('.form-group').find('.alert').removeClass('hidden');
\t}
} catch (error) {
\tconsole.error('PayPal Card failed during startup', error);
}

</script>
";
        }
        // line 392
        echo "<script type=\"text/javascript\">

function onBoardedCallback(authorization_code, shared_id) {
\tvar environment = \$('#input_environment').val();
\t
\t\$.ajax({
\t\turl: '";
        // line 398
        echo ($context["callback_url"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdata: 'environment=' + environment + '&authorization_code=' + authorization_code + '&shared_id=' + shared_id + '&seller_nonce=";
        // line 400
        echo ($context["seller_nonce"] ?? null);
        echo "',
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
}

</script>
<script type=\"text/javascript\">

\$('#button_disconnect').on('click', function() {
\tif (confirm('";
        // line 415
        echo ($context["text_confirm"] ?? null);
        echo "')) {
\t\t\$('#input_client_id').val('');
\t\t\$('#input_secret').val('');
\t\t\$('#input_merchant_id').val('');
\t\t\$('#section_connect').removeClass('hidden');
\t\t\$('#section_disconnect').addClass('hidden');
\t}
});

\$('#input_environment').on('change', function() {
\tvar environment = \$(this).val();
\t
\tif (environment == 'production') {
\t\t\$('#button_connect_ppcp').attr('href', '";
        // line 428
        echo (($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b = (($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 = ($context["configure_url"] ?? null)) && is_array($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980) || $__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 instanceof ArrayAccess ? ($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980["production"] ?? null) : null)) && is_array($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b) || $__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b instanceof ArrayAccess ? ($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b["ppcp"] ?? null) : null);
        echo "');
\t\t\$('#button_connect_express_checkout').attr('href', '";
        // line 429
        echo (($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 = (($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3 = ($context["configure_url"] ?? null)) && is_array($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3) || $__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3 instanceof ArrayAccess ? ($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3["production"] ?? null) : null)) && is_array($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345) || $__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 instanceof ArrayAccess ? ($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345["express_checkout"] ?? null) : null);
        echo "');
\t} else {
\t\t\$('#button_connect_ppcp').attr('href', '";
        // line 431
        echo (($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0 = (($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938 = ($context["configure_url"] ?? null)) && is_array($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938) || $__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938 instanceof ArrayAccess ? ($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938["sandbox"] ?? null) : null)) && is_array($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0) || $__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0 instanceof ArrayAccess ? ($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0["ppcp"] ?? null) : null);
        echo "');
\t\t\$('#button_connect_express_checkout').attr('href', '";
        // line 432
        echo (($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3 = (($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa = ($context["configure_url"] ?? null)) && is_array($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa) || $__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa instanceof ArrayAccess ? ($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa["sandbox"] ?? null) : null)) && is_array($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3) || $__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3 instanceof ArrayAccess ? ($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3["express_checkout"] ?? null) : null);
        echo "');
\t}
\t
\t\$('#input_client_id').val('');
\t\$('#input_secret').val('');
\t\$('#input_merchant_id').val('');
\t\$('#section_connect').removeClass('hidden');
\t\$('#section_disconnect').addClass('hidden');
});

</script>
<script id=\"paypal-js\" src=\"https://www.paypal.com/webapps/merchantboarding/js/lib/lightbox/partner.js\"></script>   
";
        // line 444
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/payment/paypal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1129 => 444,  1114 => 432,  1110 => 431,  1105 => 429,  1101 => 428,  1085 => 415,  1067 => 400,  1062 => 398,  1054 => 392,  1027 => 375,  1025 => 374,  1014 => 365,  994 => 359,  982 => 358,  978 => 357,  972 => 354,  968 => 352,  964 => 351,  957 => 349,  951 => 345,  946 => 343,  941 => 342,  936 => 340,  931 => 339,  929 => 338,  921 => 335,  915 => 331,  909 => 330,  901 => 328,  893 => 326,  890 => 325,  886 => 324,  880 => 321,  874 => 317,  868 => 316,  860 => 314,  852 => 312,  849 => 311,  845 => 310,  839 => 307,  831 => 301,  825 => 300,  817 => 298,  809 => 296,  806 => 295,  802 => 294,  796 => 291,  790 => 287,  784 => 286,  776 => 284,  768 => 282,  765 => 281,  761 => 280,  755 => 277,  749 => 273,  743 => 272,  735 => 270,  727 => 268,  724 => 267,  720 => 266,  714 => 263,  708 => 259,  702 => 258,  694 => 256,  686 => 254,  683 => 253,  679 => 252,  673 => 249,  667 => 245,  661 => 244,  653 => 242,  645 => 240,  642 => 239,  638 => 238,  632 => 235,  627 => 232,  618 => 228,  612 => 227,  604 => 225,  596 => 223,  593 => 222,  589 => 221,  583 => 220,  576 => 218,  573 => 217,  569 => 216,  559 => 211,  554 => 209,  545 => 205,  538 => 203,  532 => 199,  526 => 198,  518 => 196,  510 => 194,  507 => 193,  503 => 192,  495 => 189,  486 => 185,  481 => 183,  475 => 179,  470 => 177,  465 => 176,  460 => 174,  455 => 173,  453 => 172,  447 => 169,  441 => 165,  435 => 164,  427 => 162,  419 => 160,  416 => 159,  412 => 158,  408 => 157,  402 => 154,  393 => 150,  386 => 148,  380 => 144,  375 => 142,  370 => 141,  365 => 139,  360 => 138,  358 => 137,  352 => 134,  346 => 130,  341 => 128,  336 => 127,  331 => 125,  326 => 124,  324 => 123,  318 => 120,  315 => 119,  306 => 113,  303 => 112,  298 => 110,  293 => 109,  288 => 107,  283 => 106,  281 => 105,  275 => 102,  269 => 98,  264 => 96,  259 => 95,  254 => 93,  249 => 92,  247 => 91,  239 => 88,  236 => 87,  234 => 86,  228 => 83,  224 => 82,  220 => 81,  215 => 80,  209 => 77,  205 => 76,  202 => 75,  200 => 74,  195 => 72,  189 => 71,  168 => 55,  163 => 53,  157 => 49,  152 => 47,  147 => 46,  142 => 44,  137 => 43,  135 => 42,  129 => 39,  120 => 33,  116 => 32,  112 => 31,  108 => 30,  103 => 28,  97 => 25,  93 => 23,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/payment/paypal.twig", "");
    }
}
