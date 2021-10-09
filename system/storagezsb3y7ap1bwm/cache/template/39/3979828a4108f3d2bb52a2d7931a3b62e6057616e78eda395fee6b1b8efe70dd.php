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

/* default/template/account/address_list.twig */
class __TwigTemplate_2def5f3af015e559bd64e9c2c57d19e4e84aa09fc8c63ecc6c09489aa943a985 extends \Twig\Template
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
        echo "
<div id=\"account-address\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  ";
        // line 8
        if (($context["success"] ?? null)) {
            // line 9
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 11
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 12
            echo "  <div class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 14
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 15
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 16
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 17
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 21
            echo "    ";
        }
        // line 22
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h2>";
        // line 23
        echo ($context["text_address_book"] ?? null);
        echo "</h2>
      ";
        // line 24
        if (($context["addresses"] ?? null)) {
            // line 25
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 28
                echo "          <tr>
            <td class=\"text-left\">";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["result"], "address", [], "any", false, false, false, 29);
                echo "</td>
            <td class=\"text-right\"><a href=\"";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["result"], "update", [], "any", false, false, false, 30);
                echo "\" class=\"btn btn-info\">";
                echo ($context["button_edit"] ?? null);
                echo "</a> &nbsp; <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["result"], "delete", [], "any", false, false, false, 30);
                echo "\" class=\"btn btn-danger\">";
                echo ($context["button_delete"] ?? null);
                echo "</a></td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "        </table>
      </div>
      ";
        } else {
            // line 36
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      ";
        }
        // line 38
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-left\"><a href=\"";
        // line 39
        echo ($context["back"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_back"] ?? null);
        echo "</a></div>
        <div class=\"pull-right\"><a href=\"";
        // line 40
        echo ($context["add"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_new_address"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 42
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 43
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 45
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/template/account/address_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 45,  177 => 43,  173 => 42,  166 => 40,  160 => 39,  157 => 38,  151 => 36,  146 => 33,  131 => 30,  127 => 29,  124 => 28,  120 => 27,  116 => 25,  114 => 24,  110 => 23,  103 => 22,  100 => 21,  97 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  83 => 15,  78 => 14,  72 => 12,  69 => 11,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/address_list.twig", "");
    }
}
