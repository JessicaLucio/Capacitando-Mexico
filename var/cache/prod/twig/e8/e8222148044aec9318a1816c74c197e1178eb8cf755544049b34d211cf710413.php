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

/* AdminBundle:File:index.html.twig */
class __TwigTemplate_59bea39a3d03c840e70690f35417372162bb88af31ec642fd4627c10aac05dca extends \Twig\Template
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
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "AdminBundle:File:index.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom/tables-dataTables.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        // line 9
        echo "
    <div class='row'>
        <div class='col-xs-12'>

            <div class=\"wrapper-contenido\">
                <h1 class=\"subtitle\">Archivos</h1>
                <hr>
                <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_add");
        echo "\" class='btn btn-success m-xs-r-2'><i class='fa fa-plus m-xs-r-1'></i>Añadir
                    Archivo</a>
                <hr>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", []), "flashBag", [], "method"), "get", [0 => "status"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            echo "                    <div class=\"alert alert-success alert-dismissible alert-js\" role=\"alert\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span
                                    aria-hidden=\"true\">&times;</span></button>
                        ";
            // line 23
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </div>

        </div>
        <div class='col-xs-12'>
            ";
        // line 30
        if ((isset($context["files"]) ? $context["files"] : null)) {
            // line 31
            echo "                <div class='table-responsive'>
                    <table class=\"table table-striped table-bordered table-alpha\" cellspacing=\"0\" width=\"100%\"
                           id=\"myTable\">
                        <thead>
                        <tr style=\"text-align: center;\">
                            <th>Nombre</th>
                            <th>Curso</th>
                            <th>Unidad</th>
                            <th>Tema</th>
                            <th>Logotipo</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["files"]) ? $context["files"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 46
                echo "                            <tr>
                                <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "name", []), "html", null, true);
                echo "</td>
                                <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "course", []), "html", null, true);
                echo "</td>
                                <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "unidad", []), "html", null, true);
                echo "</td>
                                <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "topic", []), "html", null, true);
                echo "</td>
                                ";
                // line 51
                if (($this->getAttribute($context["file"], "logotipo", []) == 1)) {
                    // line 52
                    echo "                                    <td> SI</td>
                                ";
                } else {
                    // line 54
                    echo "                                    <td>NO</td>
                                ";
                }
                // line 56
                echo "                                <td class=\"text-center ico-actions\">
                                    <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_edit", ["id" => $this->getAttribute($context["file"], "id", [])]), "html", null, true);
                echo "\" class=\"ico-pencil m-xs-r-1\">
                                        <span class=\"fa fa-pencil\" aria-hidden=\"true\"></span>
                                    </a>
                                    <a href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_delete", ["id" => $this->getAttribute($context["file"], "id", [])]), "html", null, true);
                echo "\" class=\"ico-trash\">
                                        <span class=\"fa fa-trash\" aria-hidden=\"true\"></span>
                                    </a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                        </tbody>
                    </table>
                </div>
            ";
        } else {
            // line 70
            echo "                <p class='m-xs-tb-2'>No hay ningun registro.</p>
            ";
        }
        // line 72
        echo "        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "AdminBundle:File:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 72,  174 => 70,  168 => 66,  156 => 60,  150 => 57,  147 => 56,  143 => 54,  139 => 52,  137 => 51,  133 => 50,  129 => 49,  125 => 48,  121 => 47,  118 => 46,  114 => 45,  98 => 31,  96 => 30,  90 => 26,  81 => 23,  76 => 20,  72 => 19,  66 => 16,  57 => 9,  54 => 8,  48 => 5,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "AdminBundle:File:index.html.twig", "/home/capacita/public_html/capmex/src/AdminBundle/Resources/views/File/index.html.twig");
    }
}
