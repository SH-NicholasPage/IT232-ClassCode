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

/* navigation/tree/quick_warp.twig */
class __TwigTemplate_40a85d60a83456b0f4b72232d3eaf23a extends Template
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
        echo "<div class=\"pma_quick_warp\">
    ";
        // line 2
        if (($context["recent"] ?? null)) {
            echo ($context["recent"] ?? null);
        }
        // line 3
        echo "    ";
        if (($context["favorite"] ?? null)) {
            echo ($context["favorite"] ?? null);
        }
        // line 4
        echo "    <div class=\"clearfloat\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "navigation/tree/quick_warp.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navigation/tree/quick_warp.twig", "C:\\Users\\Nick\\Documents\\GitHub\\IT232-ClassCode\\2024\\Week6\\phpmyadmin\\phpMyAdmin\\templates\\navigation\\tree\\quick_warp.twig");
    }
}
