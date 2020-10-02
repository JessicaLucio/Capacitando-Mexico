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

/* AdminBundle:Course:index.html.twig */
class __TwigTemplate_a4c88e5fb278ab0a383e11c21c4f4088902f9e5c706ffb0ec518a3c6561ca424 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "AdminBundle:Course:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <div class='row'>
        <div class='col-xs-12'>
            <div class=\"wrapper-contenido\">
                <h1 class=\"subtitle\">Cursos</h1>
                <hr>
                <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_add");
        echo "\" class='btn btn-success m-xs-r-2'><i class='fa fa-plus m-xs-r-1'></i>Añadir Curso</a>
                <hr>
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", []), "flashBag", [], "method"), "get", [0 => "status"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "                    <div class=\"alert alert-success alert-dismissible alert-js\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        ";
            // line 14
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            </div>
        </div>
        <div class='col-xs-12'>
            <div class='table-responsive'>
                <table class=\"table table-striped table-bordered table-alpha\" cellspacing=\"0\" width=\"100%\" id=\"myTable\">
                    <thead>
                        <tr style=\"text-align: center;\">
                            <th>Nombre</th>
                            <th>Categoria</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 31
            echo "                            <tr>
                                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "name", []), "html", null, true);
            echo "</td>
                                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "categoryCourse", []), "html", null, true);
            echo "</td>
                                <td class=\"text-center ico-actions\">
                                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_edit", ["id" => $this->getAttribute($context["course"], "id", [])]), "html", null, true);
            echo "\" class=\"ico-pencil m-xs-r-1\">
                                        <span class=\"fa fa-pencil\" aria-hidden=\"true\"></span>
                                    </a> 
                                    <a href=\"#\" class=\"ico-trash m-xs-r-1\"  onclick=\"javascript:otraMas('";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "name", []), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", []), "html", null, true);
            echo "');\">
                                        <span class=\"fa fa-trash\" aria-hidden=\"true\"></span>
                                    </a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                    </tbody>
                </table>
            </div>
        </div>
        ";
        // line 49
        echo "        <div class=\"modal fade\" id=\"myModalP\" role=\"dialog\">
            <div class=\"modal-dialog\">
                <!-- Modal content-->
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        <h4 class=\"modal-title\" id=\"elTitulo\"></h4>
                    </div>
                    <div class=\"modal-body\">
                        <!--<p>Some text in the modal.</p>-->
                        <h4><p id=\"aquivaNombre\">.</p></h4>
                        <p style=\"visibility:hidden; display:none;\" id=\"aquivaID\"></p>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                        <button type=\"button\" class=\"btn btn-danger\" id=\"btnEliminar\" onclick=\"javascript:eliminarUsuario();\">Eliminar</button>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 70
        echo "    </div>

    <script type=\"text/javascript\">
        function otraMas(elN, elID) {
            \$(\"#myModalP .modal-header #elTitulo\").html(\"Eliminar\");
            \$(\"#myModalP .modal-body #aquivaNombre\").html(\"Esta acción eliminara a: <u>\" + elN + \"</u>\");
            \$(\"#myModalP .modal-body #aquivaID\").html(elID);
            \$(\"#myModalP\").modal();
        }

        function eliminarUsuario() {
            \$(\"#myModalP .modal-header #elTitulo\").html(\"Eliminando...\");
            var id = \$(\"#myModalP .modal-body #aquivaID\").html();
            window.location.href = 'delete-course/' + id;
        }
    </script>

";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Course:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 70,  128 => 49,  122 => 44,  108 => 38,  102 => 35,  97 => 33,  93 => 32,  90 => 31,  86 => 30,  71 => 17,  62 => 14,  58 => 12,  54 => 11,  49 => 9,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "AdminBundle:Course:index.html.twig", "/home/capacita/public_html/capmex/src/AdminBundle/Resources/views/Course/index.html.twig");
    }
}
