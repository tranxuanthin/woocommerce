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

/* newsletter/templates/blocks/container/block.hbs */
class __TwigTemplate_2f46a79e3042a0699c934e77c5795ea82e96019c4ee7d3621458ec834903e488 extends \MailPoetVendor\Twig\Template
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
        echo "{{#if model.image.src}}
    <style type=\"text/css\">
        .mailpoet_editor_view_{{ viewCid }} {
            background-color: {{#ifCond model.styles.block.backgroundColor '!=' 'transparent'}}{{  model.styles.block.backgroundColor }}{{else}}#ffffff{{/ifCond}} !important;
            background-image: url({{ model.image.src }});
            background-position: center;
            background-repeat: {{#ifCond model.image.display '==' 'tile'}}repeat{{else}}no-repeat{{/ifCond}};
            background-size: {{#ifCond model.image.display '==' 'scale'}}cover{{else}}contain{{/ifCond}};
        }
        .mailpoet_editor_view_{{ viewCid }} .mailpoet_container { background: transparent; }
    </style>
{{else}}
    {{#ifCond model.styles.block.backgroundColor '!=' 'transparent'}}
        <style type=\"text/css\">
            .mailpoet_editor_view_{{ viewCid }} { background-color: {{ model.styles.block.backgroundColor }}; }
            .mailpoet_editor_view_{{ viewCid }} .mailpoet_container { background-color: {{ model.styles.block.backgroundColor }}; }
        </style>
    {{/ifCond}}
{{/if}}

<div class=\"mailpoet_container {{#ifCond model.orientation '===' 'horizontal'}}mailpoet_container_horizontal{{/ifCond}}{{#ifCond model.orientation '===' 'vertical'}}mailpoet_container_vertical{{/ifCond}}\"></div>
<div class=\"mailpoet_tools\"></div><div class=\"mailpoet_block_highlight\">
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/blocks/container/block.hbs";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "newsletter/templates/blocks/container/block.hbs", "D:\\Xampp\\htdocs\\woocommerce\\wp-content\\plugins\\mailpoet\\views\\newsletter\\templates\\blocks\\container\\block.hbs");
    }
}
