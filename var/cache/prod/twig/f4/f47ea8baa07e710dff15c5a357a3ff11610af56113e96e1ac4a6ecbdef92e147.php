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

/* WebBundle:Courses:_progreso.html.twig */
class __TwigTemplate_d2560045c4f250b07b91289d4d7b95bc250599243a5a7f5921504c21b8dced4e extends \Twig\Template
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
        echo "<div class='col-xs-12'>
    <h2>Progreso</h2>
    ";
        // line 3
        if (((isset($context["finish_exams"]) ? $context["finish_exams"] : null) != null)) {
            // line 4
            echo "        <p>Tu promedio es: <strong>";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["average"]) ? $context["average"] : null), "1", ".", ","), "html", null, true);
            echo "</strong></p>
    ";
        } else {
            // line 6
            echo "        <p>No haz acabado ningun examen del actual curso.</p>
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        if (((isset($context["finish_exams"]) ? $context["finish_exams"] : null) != null)) {
            // line 10
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["finish_exams"]) ? $context["finish_exams"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 11
                echo "            ";
                if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", []) == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "exam", []), "unidad", []), "course", []), "id", []))) {
                    // line 12
                    echo "                ";
                    if (($this->getAttribute($this->getAttribute($context["data"], "user", []), "id", []) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", []), "id", []))) {
                        // line 13
                        echo "                    <div id=\"container\" style=\"min-width: 310px; height: 400px; margin: 0 auto\"></div>
                ";
                    }
                    // line 15
                    echo "            ";
                }
                // line 16
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    ";
        }
        // line 18
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "WebBundle:Courses:_progreso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 18,  75 => 17,  69 => 16,  66 => 15,  62 => 13,  59 => 12,  56 => 11,  51 => 10,  49 => 9,  46 => 8,  42 => 6,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Courses:_progreso.html.twig", "/home/capacita/public_html/capmex/src/WebBundle/Resources/views/Courses/_progreso.html.twig");
    }
}
