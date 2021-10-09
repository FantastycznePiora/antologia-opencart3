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

/* extension/module/paypal_smart_button.twig */
class __TwigTemplate_e8d0b963a7d9b08069778c5e80a268578b436627385bd23ff3befd99f1f9384e extends \Twig\Template
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
\t\t\t\t<button type=\"submit\" form=\"form_module\" data-toggle=\"tooltip\" title=\"";
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form_module\" class=\"form-horizontal\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab_general\" data-toggle=\"tab\">";
        // line 30
        echo ($context["text_general"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["setting"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["page"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 32
            echo "\t\t\t\t\t\t<li><a href=\"#tab_";
            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["page"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["code"] ?? null) : null);
            echo "\" data-toggle=\"tab\">";
            echo twig_get_attribute($this->env, $this->source, $context, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["page"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["name"] ?? null) : null), [], "any", false, false, false, 32);
            echo "</a></li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab_general\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_status\">";
        // line 39
        echo ($context["entry_status"] ?? null);
        echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"module_paypal_smart_button_status\" id=\"input_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 42
        if (($context["status"] ?? null)) {
            // line 43
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 44
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 46
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 47
            echo ($context["text_disabled"] ?? null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 49
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["setting"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["page"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 53
            echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_page_";
            // line 54
            echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["page"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["code"] ?? null) : null);
            echo "_status\">";
            echo twig_get_attribute($this->env, $this->source, $context, (("entry_" . (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["page"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["code"] ?? null) : null)) . "_page_status"), [], "any", false, false, false, 54);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"module_paypal_smart_button_setting[page][";
            // line 56
            echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["page"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["code"] ?? null) : null);
            echo "][status]\" id=\"input_page_";
            echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["page"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["code"] ?? null) : null);
            echo "_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
            // line 57
            if ((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["page"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["status"] ?? null) : null)) {
                // line 58
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                // line 59
                echo ($context["text_disabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 61
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                // line 62
                echo ($context["text_disabled"] ?? null);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 64
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["setting"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["page"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 70
            echo "\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab_";
            echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["page"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["code"] ?? null) : null);
            echo "\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_page_";
            // line 72
            echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["page"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["code"] ?? null) : null);
            echo "_insert_tag\">";
            echo ($context["entry_insert_tag"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"module_paypal_smart_button_setting[page][";
            // line 74
            echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["page"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["code"] ?? null) : null);
            echo "][insert_tag]\" value=\"";
            echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["page"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["insert_tag"] ?? null) : null);
            echo "\" id=\"input_page_";
            echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["page"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["code"] ?? null) : null);
            echo "_insert_tag\" class=\"form-control\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_page_";
            // line 78
            echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["page"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["code"] ?? null) : null);
            echo "_insert_type\">";
            echo ($context["entry_insert_type"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"module_paypal_smart_button_setting[page][";
            // line 80
            echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["page"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["code"] ?? null) : null);
            echo "][insert_type]\" id=\"input_page_";
            echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["page"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["code"] ?? null) : null);
            echo "_insert_type\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["setting"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["insert_type"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["insert_type"]) {
                // line 82
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["insert_type"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["code"] ?? null) : null) == (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["page"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["insert_type"] ?? null) : null))) {
                    // line 83
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["insert_type"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["code"] ?? null) : null);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context, (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["insert_type"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["name"] ?? null) : null), [], "any", false, false, false, 83);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 85
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["insert_type"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["code"] ?? null) : null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context, (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["insert_type"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["name"] ?? null) : null), [], "any", false, false, false, 85);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 87
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['insert_type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_page_";
            // line 92
            echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["page"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["code"] ?? null) : null);
            echo "_button_align\">";
            echo ($context["entry_button_align"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"module_paypal_smart_button_setting[page][";
            // line 94
            echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["page"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["code"] ?? null) : null);
            echo "][button_align]\" id=\"input_page_";
            echo (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["page"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["code"] ?? null) : null);
            echo "_button_align\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = ($context["setting"] ?? null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["button_align"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["button_align"]) {
                // line 96
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["button_align"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["code"] ?? null) : null) == (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = $context["page"]) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["button_align"] ?? null) : null))) {
                    // line 97
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["button_align"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["code"] ?? null) : null);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context, (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = $context["button_align"]) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["name"] ?? null) : null), [], "any", false, false, false, 97);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 99
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = $context["button_align"]) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["code"] ?? null) : null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context, (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = $context["button_align"]) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["name"] ?? null) : null), [], "any", false, false, false, 99);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 101
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button_align'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_page_";
            // line 106
            echo (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = $context["page"]) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["code"] ?? null) : null);
            echo "_button_size\">";
            echo ($context["entry_button_size"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"module_paypal_smart_button_setting[page][";
            // line 108
            echo (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = $context["page"]) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["code"] ?? null) : null);
            echo "][button_size]\" id=\"input_page_";
            echo (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = $context["page"]) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["code"] ?? null) : null);
            echo "_button_size\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = ($context["setting"] ?? null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["button_size"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["button_size"]) {
                // line 110
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (((($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = $context["button_size"]) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["code"] ?? null) : null) == (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = $context["page"]) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["button_size"] ?? null) : null))) {
                    // line 111
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = $context["button_size"]) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["code"] ?? null) : null);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context, (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = $context["button_size"]) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["name"] ?? null) : null), [], "any", false, false, false, 111);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 113
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = $context["button_size"]) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["code"] ?? null) : null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context, (($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = $context["button_size"]) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["name"] ?? null) : null), [], "any", false, false, false, 113);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 115
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button_size'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_page_";
            // line 120
            echo (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = $context["page"]) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["code"] ?? null) : null);
            echo "_button_color\">";
            echo ($context["entry_button_color"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"module_paypal_smart_button_setting[page][";
            // line 122
            echo (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = $context["page"]) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["code"] ?? null) : null);
            echo "][button_color]\" id=\"input_page_";
            echo (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = $context["page"]) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["code"] ?? null) : null);
            echo "_button_color\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = ($context["setting"] ?? null)) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["button_color"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["button_color"]) {
                // line 124
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (((($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = $context["button_color"]) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["code"] ?? null) : null) == (($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = $context["page"]) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d["button_color"] ?? null) : null))) {
                    // line 125
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = $context["button_color"]) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5["code"] ?? null) : null);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context, (($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = $context["button_color"]) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a["name"] ?? null) : null), [], "any", false, false, false, 125);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 127
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = $context["button_color"]) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da["code"] ?? null) : null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context, (($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = $context["button_color"]) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38["name"] ?? null) : null), [], "any", false, false, false, 127);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 129
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button_color'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_page_";
            // line 134
            echo (($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = $context["page"]) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec["code"] ?? null) : null);
            echo "_shape\">";
            echo ($context["entry_button_shape"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"module_paypal_smart_button_setting[page][";
            // line 136
            echo (($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = $context["page"]) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574["code"] ?? null) : null);
            echo "][button_shape]\" id=\"input_page_";
            echo (($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = $context["page"]) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c["code"] ?? null) : null);
            echo "_shape\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = ($context["setting"] ?? null)) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0["button_shape"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["button_shape"]) {
                // line 138
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (((($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = $context["button_shape"]) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc["code"] ?? null) : null) == (($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = $context["page"]) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd["button_shape"] ?? null) : null))) {
                    // line 139
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo (($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = $context["button_shape"]) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81["code"] ?? null) : null);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context, (($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = $context["button_shape"]) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007["name"] ?? null) : null), [], "any", false, false, false, 139);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 141
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo (($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = $context["button_shape"]) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d["code"] ?? null) : null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context, (($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = $context["button_shape"]) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba["name"] ?? null) : null), [], "any", false, false, false, 141);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 143
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button_shape'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_page_";
            // line 148
            echo (($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = $context["page"]) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49["code"] ?? null) : null);
            echo "_button_label\">";
            echo ($context["entry_button_label"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"module_paypal_smart_button_setting[page][";
            // line 150
            echo (($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = $context["page"]) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639["code"] ?? null) : null);
            echo "][button_label]\" id=\"input_page_";
            echo (($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = $context["page"]) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf["code"] ?? null) : null);
            echo "_button_label\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = ($context["setting"] ?? null)) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921["button_label"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["button_label"]) {
                // line 152
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (((($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = $context["button_label"]) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a["code"] ?? null) : null) == (($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = $context["page"]) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4["button_label"] ?? null) : null))) {
                    // line 153
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo (($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = $context["button_label"]) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985["code"] ?? null) : null);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context, (($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = $context["button_label"]) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51["name"] ?? null) : null), [], "any", false, false, false, 153);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 155
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo (($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = $context["button_label"]) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a["code"] ?? null) : null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context, (($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = $context["button_label"]) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762["name"] ?? null) : null), [], "any", false, false, false, 155);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 157
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button_label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input_button_tagline\">";
            // line 162
            echo ($context["entry_button_tagline"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<select name=\"module_paypal_smart_button_tagline\" id=\"input_button_tagline\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
            // line 165
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 = ($context["setting"] ?? null)) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053["button_tagline"] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["button_tagline"]) {
                // line 166
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (((($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c = $context["button_tagline"]) && is_array($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c) || $__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c instanceof ArrayAccess ? ($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c["code"] ?? null) : null) == (($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c = $context["page"]) && is_array($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c) || $__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c instanceof ArrayAccess ? ($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c["button_tagline"] ?? null) : null))) {
                    // line 167
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo (($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 = $context["button_tagline"]) && is_array($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030) || $__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 instanceof ArrayAccess ? ($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030["code"] ?? null) : null);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context, (($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 = $context["button_tagline"]) && is_array($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8) || $__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 instanceof ArrayAccess ? ($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8["name"] ?? null) : null), [], "any", false, false, false, 167);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 169
                    echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo (($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 = $context["button_tagline"]) && is_array($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86) || $__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 instanceof ArrayAccess ? ($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86["code"] ?? null) : null);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context, (($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 = $context["button_tagline"]) && is_array($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9) || $__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 instanceof ArrayAccess ? ($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9["name"] ?? null) : null), [], "any", false, false, false, 169);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 171
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button_tagline'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 183
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/paypal_smart_button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  590 => 183,  582 => 177,  572 => 172,  566 => 171,  558 => 169,  550 => 167,  547 => 166,  543 => 165,  537 => 162,  531 => 158,  525 => 157,  517 => 155,  509 => 153,  506 => 152,  502 => 151,  496 => 150,  489 => 148,  483 => 144,  477 => 143,  469 => 141,  461 => 139,  458 => 138,  454 => 137,  448 => 136,  441 => 134,  435 => 130,  429 => 129,  421 => 127,  413 => 125,  410 => 124,  406 => 123,  400 => 122,  393 => 120,  387 => 116,  381 => 115,  373 => 113,  365 => 111,  362 => 110,  358 => 109,  352 => 108,  345 => 106,  339 => 102,  333 => 101,  325 => 99,  317 => 97,  314 => 96,  310 => 95,  304 => 94,  297 => 92,  291 => 88,  285 => 87,  277 => 85,  269 => 83,  266 => 82,  262 => 81,  256 => 80,  249 => 78,  238 => 74,  231 => 72,  225 => 70,  221 => 69,  218 => 68,  209 => 64,  204 => 62,  199 => 61,  194 => 59,  189 => 58,  187 => 57,  181 => 56,  174 => 54,  171 => 53,  167 => 52,  162 => 49,  157 => 47,  152 => 46,  147 => 44,  142 => 43,  140 => 42,  134 => 39,  127 => 34,  116 => 32,  112 => 31,  108 => 30,  103 => 28,  97 => 25,  93 => 23,  85 => 19,  83 => 18,  77 => 14,  66 => 12,  62 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/paypal_smart_button.twig", "");
    }
}
