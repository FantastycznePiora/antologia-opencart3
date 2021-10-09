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

/* extension/shipping/weight.twig */
class __TwigTemplate_6ecd8c6d980b54d68fe8ba41a89e2237ad447e0d6806ec4c4e5feffd38c7f68c extends \Twig\Template
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
          <div class=\"row\">
            <div class=\"col-sm-2\">
              <ul class=\"nav nav-pills nav-stacked\">
                <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 31
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 33
            echo "                <li><a href=\"#tab-geo-zone";
            echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 33);
            echo "\" data-toggle=\"tab\">";
            echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "name", [], "any", false, false, false, 33);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "              </ul>
            </div>
            <div class=\"col-sm-10\">
              <div class=\"tab-content\">
                <div class=\"tab-pane active\" id=\"tab-general\">
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-tax-class\">";
        // line 41
        echo ($context["entry_tax_class"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"shipping_weight_tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                        <option value=\"0\">";
        // line 44
        echo ($context["text_none"] ?? null);
        echo "</option>
                        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tax_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 46
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 46) == ($context["shipping_weight_tax_class_id"] ?? null))) {
                // line 47
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 47);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 47);
                echo "</option>
                        ";
            } else {
                // line 49
                echo "                        <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 49);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 49);
                echo "</option>
                        ";
            }
            // line 51
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                      </select>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 56
        echo ($context["entry_status"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"shipping_weight_status\" id=\"input-status\" class=\"form-control\">
                        ";
        // line 59
        if (($context["shipping_weight_status"] ?? null)) {
            // line 60
            echo "                        <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                        <option value=\"0\">";
            // line 61
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                        ";
        } else {
            // line 63
            echo "                        <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                        <option value=\"0\" selected=\"selected\">";
            // line 64
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                        ";
        }
        // line 66
        echo "                      </select>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 70
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"shipping_weight_sort_order\" value=\"";
        // line 72
        echo ($context["shipping_weight_sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
                    </div>
                  </div>
                </div>
                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["geo_zones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 77
            echo "                <div class=\"tab-pane\" id=\"tab-geo-zone";
            echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 77);
            echo "\">
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-rate";
            // line 79
            echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 79);
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo ($context["help_rate"] ?? null);
            echo "\">";
            echo ($context["entry_rate"] ?? null);
            echo "</span></label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"shipping_weight_";
            // line 81
            echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 81);
            echo "_rate\" rows=\"5\" placeholder=\"";
            echo ($context["entry_rate"] ?? null);
            echo "\" id=\"input-rate";
            echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 81);
            echo "\" class=\"form-control\">";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["shipping_weight_geo_zone_rate"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 81)] ?? null) : null)) ? ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["shipping_weight_geo_zone_rate"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 81)] ?? null) : null)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-status";
            // line 85
            echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 85);
            echo "\">";
            echo ($context["entry_status"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <select name=\"shipping_weight_";
            // line 87
            echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 87);
            echo "_status\" id=\"input-status";
            echo twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 87);
            echo "\" class=\"form-control\">
                        ";
            // line 88
            if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["shipping_weight_geo_zone_status"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["geo_zone"], "geo_zone_id", [], "any", false, false, false, 88)] ?? null) : null)) {
                // line 89
                echo "                        <option value=\"1\" selected=\"selected\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
                        <option value=\"0\">";
                // line 90
                echo ($context["text_disabled"] ?? null);
                echo "</option>
                        ";
            } else {
                // line 92
                echo "                        <option value=\"1\">";
                echo ($context["text_enabled"] ?? null);
                echo "</option>
                        <option value=\"0\" selected=\"selected\">";
                // line 93
                echo ($context["text_disabled"] ?? null);
                echo "</option>
                        ";
            }
            // line 95
            echo "                      </select>
                    </div>
                  </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 108
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/shipping/weight.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 108,  306 => 100,  296 => 95,  291 => 93,  286 => 92,  281 => 90,  276 => 89,  274 => 88,  268 => 87,  261 => 85,  248 => 81,  239 => 79,  233 => 77,  229 => 76,  220 => 72,  215 => 70,  209 => 66,  204 => 64,  199 => 63,  194 => 61,  189 => 60,  187 => 59,  181 => 56,  175 => 52,  169 => 51,  161 => 49,  153 => 47,  150 => 46,  146 => 45,  142 => 44,  136 => 41,  128 => 35,  117 => 33,  113 => 32,  109 => 31,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/shipping/weight.twig", "");
    }
}
