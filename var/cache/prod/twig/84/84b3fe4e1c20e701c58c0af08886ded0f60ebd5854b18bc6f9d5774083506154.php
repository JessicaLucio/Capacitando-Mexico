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

/* AdminBundle:Unidad:index.html.twig */
class __TwigTemplate_19df3cad6fb46c056c1363af3e477578c00746674266975742c4bc47c9f22b72 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "WebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "AdminBundle:Unidad:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "
    <div class='row'>
        <div class='col-xs-12'>

            <div class=\"wrapper-contenido\">
                <h1 class=\"subtitle\">Unidades</h1>
                <hr>
                <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("unidad_add");
        echo "\" class='btn btn-success m-xs-r-2'><i class='fa fa-plus m-xs-r-1'></i>Añadir Unidad</a>
                <hr>
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", []), "flashBag", [], "method"), "get", [0 => "status"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "                    <div class=\"alert alert-success alert-dismissible alert-js\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        ";
            // line 16
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </div>

        </div>
        <div class='col-xs-12'>
            <div class='table-responsive'>
                <table class=\"table table-striped table-bordered table-alpha\" cellspacing=\"0\" width=\"100%\" id=\"myTable\">
                    <thead>
                        <tr style=\"text-align: center;\">
                            <th>Nombre</th>
                            <th>Curso</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["unidades"]) ? $context["unidades"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["unidad"]) {
            // line 34
            echo "                            <tr>
                                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["unidad"], "name", []), "html", null, true);
            echo "</td>
                                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["unidad"], "course", []), "html", null, true);
            echo "</td>
                                <td class=\"text-center ico-actions\">
                                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("unidad_edit", ["id" => $this->getAttribute($context["unidad"], "id", [])]), "html", null, true);
            echo "\" class=\"ico-pencil m-xs-r-1\">
                                        <span class=\"fa fa-pencil\" aria-hidden=\"true\"></span>
                                    </a> 
                                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("unidad_delete", ["id" => $this->getAttribute($context["unidad"], "id", [])]), "html", null, true);
            echo "\" class=\"ico-trash m-xs-r-1\">
                                        <span class=\"fa fa-trash\" aria-hidden=\"true\"></span>
                                    </a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unidad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Unidad:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 47,  111 => 41,  105 => 38,  100 => 36,  96 => 35,  93 => 34,  89 => 33,  73 => 19,  64 => 16,  60 => 14,  56 => 13,  51 => 11,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "AdminBundle:Unidad:index.html.twig", "/home/capacita/public_html/capmex/src/AdminBundle/Resources/views/Unidad/index.html.twig");
    }
}
