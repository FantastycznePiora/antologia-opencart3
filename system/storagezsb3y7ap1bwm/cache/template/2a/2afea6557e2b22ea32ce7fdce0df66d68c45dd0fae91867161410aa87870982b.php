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

/* default/template/extension/payment/pp_express.twig */
class __TwigTemplate_b56e44d164193e76eda8c4113a9782d741950817e812219975147dd951ad2e6e extends \Twig\Template
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
        if ((($context["payment_pp_express_incontext_disable"] ?? null) != 1)) {
            // line 2
            echo "<div class=\"buttons\">
  <div class=\"pull-right\">
    <a id=\"button-confirm\" href=\"";
            // line 4
            echo ($context["continue"] ?? null);
            echo "\"></a>
  </div>
</div>
<script type=\"text/javascript\"><!--
window.paypalCheckoutReady = function () {
  paypal.checkout.setup('";
            // line 9
            echo ($context["username"] ?? null);
            echo "', {
    container: 'button-confirm',
    environment: 'sandbox'
  });
};
//--></script>
<script src=\"//www.paypalobjects.com/api/checkout.js\" async></script>
";
        } else {
            // line 17
            echo "<div class=\"buttons\">
  <div class=\"pull-right\">
    <a href=\"";
            // line 19
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\" id=\"button-confirm\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\">";
            echo ($context["button_continue"] ?? null);
            echo "</a>
  </div>
</div>
<script type=\"text/javascript\"><!--
    \$('#button-confirm').on('click', function() {
        \$('#button-confirm').button('loading');
    });
//--></script>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/pp_express.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 19,  62 => 17,  51 => 9,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/payment/pp_express.twig", "");
    }
}
