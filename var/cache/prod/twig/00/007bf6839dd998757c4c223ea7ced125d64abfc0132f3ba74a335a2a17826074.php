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

/* WebBundle:Courses:my-courses.html.twig */
class __TwigTemplate_1b5ee28d72351b1afa97be3336e44ad140c9f024a93013c789d59df77a7bf40d extends \Twig\Template
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
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "WebBundle:Courses:my-courses.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/custom/buttons-inscription.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        // line 9
        echo "    <div class='row'>
        <div class='col-xs-12 m-xs-tb-4'>
            <h1 class='title-alpha'>TUS CURSOS</h1>
        </div>
    </div>

    <div class='row row-margin'>
        <div class='col-xs-12'>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", []), "flashBag", [], "method"), "get", [0 => "status"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            echo "                <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <strong>";
            // line 20
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</strong>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </div>
    </div>

    ";
        // line 27
        echo "    ";
        if ((isset($context["notifications"]) ? $context["notifications"] : null)) {
            // line 28
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) ? $context["notifications"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 29
                echo "            ";
                if (($this->getAttribute($context["notification"], "readed", []) == 0)) {
                    // line 30
                    echo "                <div class=\"alert alert-info alert-dismissible\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <strong>Atención! </strong>Tienes un examen por calificar, da click <a href=\"";
                    // line 32
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail_file_exam", ["id" => $this->getAttribute($context["notification"], "remitente", [])]), "html", null, true);
                    echo "\"><strong>aqui</strong></a> para calificarlo.
                </div>
            ";
                }
                // line 35
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "    ";
        }
        // line 37
        echo "    ";
        // line 38
        echo "
    ";
        // line 39
        if ((isset($context["examenes_calificados"]) ? $context["examenes_calificados"] : null)) {
            // line 40
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["examenes_calificados"]) ? $context["examenes_calificados"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["examen"]) {
                // line 41
                echo "            ";
                if (($this->getAttribute($context["examen"], "readed", []) == 0)) {
                    // line 42
                    echo "                <div class=\"alert alert-info alert-dismissible\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <strong>Atención! </strong>Tienes un examen que ya fue calificado, da click <a href=\"";
                    // line 44
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detail_score_file_exam", ["id" => $this->getAttribute($this->getAttribute($context["examen"], "user", []), "id", [])]), "html", null, true);
                    echo "\"><strong>aqui</strong></a> para saber más.
                </div>
            ";
                }
                // line 47
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['examen'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "    ";
        }
        // line 49
        echo "


    <div class='row margin-b-8'>
        ";
        // line 53
        if (((isset($context["courses_inscription"]) ? $context["courses_inscription"] : null) != null)) {
            // line 54
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses_inscription"]) ? $context["courses_inscription"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["course_insc"]) {
                // line 55
                echo "                <div class='col-xs-12 col-md-4'>
                    <div class='border-line info-course'>
                        <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_courses_detail", ["id" => $this->getAttribute($this->getAttribute($context["course_insc"], "course", []), "id", [])]), "html", null, true);
                echo "\">
                            <div class='hover-wrap'>
                                <div class='image-wrap'>
                                    ";
                // line 60
                if (($this->getAttribute($this->getAttribute($context["course_insc"], "course", []), "image", []) != null)) {
                    // line 61
                    echo "                                        <img class='responsive-image' src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("uploads/" . $this->getAttribute($this->getAttribute($context["course_insc"], "course", []), "name", [])) . "/") . $this->getAttribute($this->getAttribute($context["course_insc"], "course", []), "image", []))), "html", null, true);
                    echo "\"/>
                                    ";
                } else {
                    // line 63
                    echo "                                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/courses/curso.jpg"), "html", null, true);
                    echo "\" class='responsive-image' />
                                    ";
                }
                // line 65
                echo "                                </div>
                                <div class='overlay-wrap'>
                                    <h2 class='vertical-align'>
                                        <i class='glyphicon glyphicon-plus'></i>
                                    </h2>
                                </div>
                            </div>
                        </a>
                        <div class='col-xs-12 padding-wrap'>
                            <h1 class='m-xs-b-2 text-orange'>";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["course_insc"], "course", []), "name", []), "html", null, true);
                echo "</h1>
                            ";
                // line 76
                echo "                            <p class='m-xs-b-2'>
                                ";
                // line 78
                echo "                            </p>
                            <div class=\"m-xs-b-2\">
                                <a href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_courses_detail", ["id" => $this->getAttribute($this->getAttribute($context["course_insc"], "course", []), "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-view\">VER CURSO ARCHIVADO</a> 

                                <!--aqui esta el engrane-->
                                <!--<i class=\"fa fa-cog m-xs-l-4\"></i>-->
                                <form method=\"post\">
                                    <button type=\"submit\" class=\"btn btn-sm btn-default btn-uninscription
                                            ";
                // line 86
                if (($this->env->getExtension('AdminBundle\Twig\InscriptionExtension')->inscriptionFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", []), $this->getAttribute($context["course_insc"], "course", [])) == false)) {
                    // line 87
                    echo "                                                hidden
                                            ";
                }
                // line 89
                echo "                                            \" 
                                            data-course=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["course_insc"], "course", []), "id", []), "html", null, true);
                echo "\">
                                        <span class=\"glyphicon glyphicon-remove-circle\" aria-hidden='true'></span>
                                        Cancelar inscripción
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class=\"col-xs-12 footer-course-own padding-wrap bg-gray\">
                            <p>Los detalles finales del curso están siendo términados.<br/>
                                Su resultado final estará disponible pronto.</p>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course_insc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "        ";
        } else {
            // line 105
            echo "            <div class=\"col-xs-12\">
                <p>No te has inscrito a ningun curso.</p>
            </div>
        ";
        }
        // line 109
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "WebBundle:Courses:my-courses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 109,  253 => 105,  250 => 104,  230 => 90,  227 => 89,  223 => 87,  221 => 86,  212 => 80,  208 => 78,  205 => 76,  201 => 74,  190 => 65,  184 => 63,  178 => 61,  176 => 60,  170 => 57,  166 => 55,  161 => 54,  159 => 53,  153 => 49,  150 => 48,  144 => 47,  138 => 44,  134 => 42,  131 => 41,  126 => 40,  124 => 39,  121 => 38,  119 => 37,  116 => 36,  110 => 35,  104 => 32,  100 => 30,  97 => 29,  92 => 28,  89 => 27,  84 => 23,  75 => 20,  71 => 18,  67 => 17,  57 => 9,  54 => 8,  48 => 5,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Courses:my-courses.html.twig", "/home/capacita/public_html/capmex/src/WebBundle/Resources/views/Courses/my-courses.html.twig");
    }
}
