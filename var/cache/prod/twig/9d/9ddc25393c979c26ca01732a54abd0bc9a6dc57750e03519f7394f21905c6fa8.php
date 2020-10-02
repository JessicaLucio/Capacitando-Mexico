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

/* WebBundle:Courses:_informacion.html.twig */
class __TwigTemplate_5a711b93cfc0039db14de979ff53fa134120ffaeda4041da9427a4830cfbffec extends \Twig\Template
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
        if ((isset($context["info_course"]) ? $context["info_course"] : null)) {
            // line 2
            echo "    <div class='col-xs-12'>
        <div class=\"border-line-blue padding-wrap\">
            ";
            // line 4
            echo $this->getAttribute((isset($context["info_course"]) ? $context["info_course"] : null), "body", []);
            echo "
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "WebBundle:Courses:_informacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Courses:_informacion.html.twig", "/home/capacita/public_html/capmex/src/WebBundle/Resources/views/Courses/_informacion.html.twig");
    }
}
