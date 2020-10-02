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

/* AdminBundle:File:add.html.twig */
class __TwigTemplate_e782b18988b1170d00265279416196fbaefea32a5ab29379a6b4a112bc16cff2 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "AdminBundle:File:add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        // line 9
        echo "
    <div class='row'>
        <div class='col-xs-12 text-center'>
            <h2>Alta de Archivos</h2>
            <hr />
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", []), "flashBag", [], "method"), "get", [0 => "status"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            echo "                <div class='alert alert-danger alert-dismissible' role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    ";
            // line 17
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo " 
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </div>

        <div class='col-md-6 col-md-offset-3 col-xs-12 form-admin'>
            <form method=\"post\" id=\"form-general\" enctype='multipart/form-data'>
                <div class='form-group'>
                    <label class='control-label'>Nombre del Archivo</label>
                    <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\" />
                </div>  
                <div class='form-group'>
                    <label class='control-label'>Selecciona un Curso</label>
                    <select class='form-control' name=\"cursos\" id=\"cursos\">
                        <option disabled selected=\"selected\">-Escoge una opcion-</option>
                        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 33
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "name", []), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                    </select>
                </div>
                <div class='form-group'>
                    <label class='control-label'>Selecciona una Unidad</label>
                    <select class='form-control' name=\"unidades\" id='unidades'>
                        <option disabled selected=\"selected\">-Escoge una opcion-</option>
                    </select>
                </div>   
                <div class='form-group'>
                    <label class='control-label'>Selecciona un Tema</label>
                    <select class='form-control' name=\"temas\" id='temas'>
                        <option disabled selected=\"selected\">-Escoge una opcion-</option>
                    </select>
                </div>      
                <div class='form-group'>
                    <label class='control-label'>Sube un Archivo</label>
                    <input type=\"file\" class=\"form-control\" name=\"file\" required/>
                </div>
                <div class=\"checkbox\">
                    <label>
                        <input type=\"checkbox\" name=\"logotipo\"> Logotipo
                    </label>
                </div>
                <div class='form-group text-center ";
        // line 58
        echo "' id=\"btn-action-wrap\">
                    <input type=\"submit\" class=\"btn btn-blue-light\" value=\"Guardar\" />
                </div>
            </form>
        </div>

        <div class=\"pull-right user\">
            <a class=\"btn-underline\" href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("files_index");
        echo "\"><i class='fa fa-arrow-left m-xs-r-1'></i>Volver al listado</a>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "AdminBundle:File:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 65,  120 => 58,  95 => 35,  84 => 33,  80 => 32,  66 => 20,  57 => 17,  53 => 15,  49 => 14,  42 => 9,  39 => 8,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "AdminBundle:File:add.html.twig", "/home/capacita/public_html/capmex/src/AdminBundle/Resources/views/File/add.html.twig");
    }
}
