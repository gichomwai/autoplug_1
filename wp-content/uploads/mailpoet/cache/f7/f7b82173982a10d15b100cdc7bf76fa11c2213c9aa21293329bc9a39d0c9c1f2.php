<?php

use MailPoetVendor\Twig\Environment;
use MailPoetVendor\Twig\Error\LoaderError;
use MailPoetVendor\Twig\Error\RuntimeError;
use MailPoetVendor\Twig\Extension\SandboxExtension;
use MailPoetVendor\Twig\Markup;
use MailPoetVendor\Twig\Sandbox\SecurityError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedTagError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use MailPoetVendor\Twig\Source;
use MailPoetVendor\Twig\Template;

/* deactivationSurvey/index.html */
class __TwigTemplate_bac9eef60cc5650239ba5cb06e6452a77c5da8978609dc73fab81a7b57c6186e extends \MailPoetVendor\Twig\Template
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
        echo "<div class=\"mailpoet-deactivate-survey-modal\" id=\"mailpoet-deactivate-survey\">
  <div class=\"mailpoet-deactivate-survey-wrap\">
    <div class=\"mailpoet-deactivate-survey\">

      <script type=\"text/javascript\" charset=\"utf-8\" src=\"https://secure.polldaddy.com/p/10007098.js\"></script>
      <noscript><a href=\"https://polldaddy.com/poll/10007098/\">Why are you deactivating MailPoet?</a></noscript>

      <a class=\"button\" id=\"mailpoet-deactivate-survey-close\">";
        // line 8
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Close this window and deactivate MailPoet");
        echo " &rarr;</a>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "deactivationSurvey/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "deactivationSurvey/index.html", "/Applications/MAMP/htdocs/autoplug/wp-content/plugins/mailpoet/views/deactivationSurvey/index.html");
    }
}
