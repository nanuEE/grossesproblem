<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* CHANGELOG.md.twig */
class __TwigTemplate_73f29a538ffe67a9e03da92b0bb2efa31c055f354d894f8d02325981e67c36d7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "# v0.1.0
##  ";
        // line 2
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "m/d/Y"), "html", null, true);
        echo "

1. [](#new)
    * ChangeLog started...
";
    }

    public function getTemplateName()
    {
        return "CHANGELOG.md.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("# v0.1.0
##  {{ \"now\"|date(\"m/d/Y\") }}

1. [](#new)
    * ChangeLog started...
", "CHANGELOG.md.twig", "/Applications/MAMP/htdocs/grossesproblem/grav-admin/user/plugins/devtools/components/theme/pure-blank/CHANGELOG.md.twig");
    }
}
