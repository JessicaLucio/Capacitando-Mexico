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

/* WebBundle:Courses:_l-obligatoria.html.twig */
class __TwigTemplate_285375aa097b7a31df23e2bc113c6fa7478f5372f0f97afed85d42f888f400a2 extends \Twig\Template
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
        echo "<h2>Lectura Obligatoria</h2>
<div class='col-xs-12 two-column border-line-blue padding-wrap list-link'>    
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["unidades"]) ? $context["unidades"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["unidad"]) {
            // line 4
            echo "        ";
            $context["newKey"] = ($context["key"] + 1);
            // line 5
            echo "        <h3>Unidad ";
            echo twig_escape_filter($this->env, (isset($context["newKey"]) ? $context["newKey"] : null), "html", null, true);
            echo "</h3>
        <ul class=\"list-unstyled\">
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["urls_mandatory"]) ? $context["urls_mandatory"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["supp"]) {
                // line 8
                echo "                ";
                if (($this->getAttribute($context["unidad"], "id", []) == $this->getAttribute($this->getAttribute($context["supp"], "unidad", []), "id", []))) {
                    // line 9
                    echo "                    <li>
                        <a href='";
                    // line 10
                    echo twig_escape_filter($this->env, $this->getAttribute($context["supp"], "url", []), "html", null, true);
                    echo "' target=\"_blank\">
                            ";
                    // line 11
                    echo twig_escape_filter($this->env, $this->getAttribute($context["supp"], "name", []), "html", null, true);
                    echo "
                        </a>
                    </li>
                ";
                }
                // line 15
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "   
        </ul>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['unidad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "WebBundle:Courses:_l-obligatoria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 18,  68 => 15,  61 => 11,  57 => 10,  54 => 9,  51 => 8,  47 => 7,  41 => 5,  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Courses:_l-obligatoria.html.twig", "/home/capacita/public_html/capmex/src/WebBundle/Resources/views/Courses/_l-obligatoria.html.twig");
    }
}
