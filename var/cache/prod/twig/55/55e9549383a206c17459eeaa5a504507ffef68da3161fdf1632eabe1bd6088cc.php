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

/* AdminBundle:File:edit.html.twig */
class __TwigTemplate_78a5504717e198744a16b0e30a2c19b2d43ef5f7370b1116e42d80c98764a259 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "AdminBundle:File:edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom/files.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        // line 9
        echo "    <div class='row'>
        <div class='col-xs-12 text-center'>
            <h2>Editar Archivo</h2>
            <hr/>
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", []), "flashBag", [], "method"), "get", [0 => "status"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "                <div class='alert alert-danger alert-dismissable'>
                    ";
            // line 15
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </div>

        <div class='col-md-6 col-md-offset-3 col-xs-12 form-admin'>
            <form method=\"post\" id=\"form-general\" enctype='multipart/form-data'>
                ";
        // line 22
        if ((isset($context["file"]) ? $context["file"] : null)) {
            // line 23
            echo "                    <div class='form-group'>
                        <label class='control-label'>Nombre del Archivo</label>
                        <input type=\"text\" class=\"form-control\" name=\"name\" id=\"name\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "name", []), "html", null, true);
            echo "\"/>
                    </div>
                    <div class='form-group'>
                        <label class='control-label'>Selecciona un Curso</label>
                        <select class='form-control' name=\"cursos\" id=\"cursos\">
                            <option value=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "course", []), "id", []), "html", null, true);
            echo "\" selected=\"selected\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "course", []), "html", null, true);
            echo "</option>
                            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 32
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "name", []), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                        </select>
                    </div>
                    <div class='form-group'>
                        <label class='control-label'>Selecciona una Unidad</label>
                        <select class='form-control' name=\"unidades\" id='unidades'>
                            <option value=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "unidad", []), "id", []), "html", null, true);
            echo "\" selected=\"selected\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "unidad", []), "html", null, true);
            echo "</option>
                            <option disabled>-Escoge una opcion-</option>
                        </select>
                    </div>
                    <div class='form-group'>
                        <label class='control-label'>Selecciona un Tema</label>
                        <select class='form-control' name=\"temas\" id='temas'>
                            <option value=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "topic", []), "id", []), "html", null, true);
            echo "\" selected=\"selected\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "topic", []), "html", null, true);
            echo "</option>
                            <option disabled>-Escoge una opcion-</option>
                        </select>
                    </div>
                    <div class='form-group'>
                        <label class='control-label'>Sube un Archivo</label>
                        <input type=\"file\" class=\"form-control\" name=\"file\" value=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "file", []), "html", null, true);
            echo "\" required/>
                        ";
            // line 53
            if ($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "file", [])) {
                // line 54
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((((((("uploads/files/" . $this->getAttribute($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "course", []), "id", [])) . "/") . $this->getAttribute($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "unidad", []), "id", [])) . "/") . $this->getAttribute($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "topic", []), "id", [])) . "/") . $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "file", []))), "html", null, true);
                echo "\"
                               target='_blank'>Ver archivo</a>
                        ";
            }
            // line 57
            echo "                    </div>
                    <div class=\"checkbox\">
                        <label>
                            <input type=\"checkbox\" name=\"logotipo\" ";
            // line 60
            echo ((($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "logotipo", []) == 1)) ? ("checked") : (""));
            echo "> Logotipo
                        </label>
                    </div>
                    <div class='form-group text-center ";
            // line 63
            echo "' id=\"btn-action-wrap\">
                        <input type=\"submit\" class=\"btn btn-blue-light\" value=\"Guardar\"/>
                    </div>
                ";
        }
        // line 67
        echo "            </form>
        </div>
        <div class=\"pull-right user\">
            <a class=\"btn-underline\" href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("files_index");
        echo "\"><i class='fa fa-arrow-left m-xs-r-1'></i>Volver al
                listado</a>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "AdminBundle:File:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 70,  180 => 67,  174 => 63,  168 => 60,  163 => 57,  156 => 54,  154 => 53,  150 => 52,  139 => 46,  127 => 39,  120 => 34,  109 => 32,  105 => 31,  99 => 30,  91 => 25,  87 => 23,  85 => 22,  79 => 18,  70 => 15,  67 => 14,  63 => 13,  57 => 9,  54 => 8,  48 => 5,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "AdminBundle:File:edit.html.twig", "/home/capacita/public_html/capmex/src/AdminBundle/Resources/views/File/edit.html.twig");
    }
}
