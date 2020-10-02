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

/* WebBundle:Default:header.html.twig */
class __TwigTemplate_367f0696c0aa4fb1370bc3475739686a7abd92d7fd4808a92a37180be65964d6 extends \Twig\Template
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
        echo "<header>
    <div class='header-wrap container-fluid'>

        ";
        // line 4
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", []) == null)) {
            // line 5
            echo "            <a class='logo' href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_login");
            echo "\"></a>
        ";
        } elseif (($this->getAttribute(        // line 6
(isset($context["app"]) ? $context["app"] : null), "user", []) != null)) {
            // line 7
            echo "            <a class='logo' href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_courses_index");
            echo "\"></a>
        ";
        }
        // line 9
        echo "
        ";
        // line 10
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", []) != null)) {
            // line 11
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_courses_index");
            echo "\">EXPLORAR CURSOS</a>
        ";
        }
        // line 13
        echo "        <div class='header-btn pull-right'>

            ";
        // line 15
        if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", []) == null) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "attributes", []), "get", [0 => "_route"], "method") == "web_index"))) {
            // line 16
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
            echo "\" class='btn btn-default btn-register'>REGISTRARSE</a>
                <a href=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_login");
            echo "\" class='btn btn-warning-alpha'>INICIAR SESION</a> 
            ";
        } elseif ((($this->getAttribute(        // line 18
(isset($context["app"]) ? $context["app"] : null), "user", []) == null) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "attributes", []), "get", [0 => "_route"], "method") == "register"))) {
            // line 19
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_login");
            echo "\" class='btn btn-warning-alpha'>INICIAR SESION</a>     
            ";
        } elseif ((($this->getAttribute(        // line 20
(isset($context["app"]) ? $context["app"] : null), "user", []) == null) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "attributes", []), "get", [0 => "_route"], "method") == "admin_login"))) {
            // line 21
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
            echo "\" class='btn btn-default btn-register'>REGISTRARSE</a>   
            ";
        }
        // line 23
        echo "
            ";
        // line 24
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", []) != null)) {
            // line 25
            echo "                <!-- Split button -->
                <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn btn-default\">
                        <div class='avatar'>
                            ";
            // line 29
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", []), "image", []) == null)) {
                echo "           
                                <img src=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default.png"), "html", null, true);
                echo "\" />
                            ";
            } else {
                // line 32
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("uploads/users/user_" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", []), "id", [])) . "/") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", []), "image", []))), "html", null, true);
                echo "\" />
                            ";
            }
            // line 34
            echo "                        </div>
                        ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", []), "name", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", []), "surname", []), "html", null, true);
            echo "
                    </button>
                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"min-height:34px;\">
                        <span class=\"caret\"></span>
                        <span class=\"sr-only\">Toggle Dropdown</span>
                    </button>
                    <ul class=\"dropdown-menu menu-settings\">
                        ";
            // line 43
            echo "                        ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", []), "role", []) == "ROLE_ADMIN")) {
                // line 44
                echo "                            <li>
                                <a href=\"";
                // line 45
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_index");
                echo "\">Cursos</a>
                            </li>
                            <li>
                                <a href=\"";
                // line 48
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("unidad_index");
                echo "\">Unidades</a>
                            </li>
                            <li>
                                <a href=\"";
                // line 51
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("topic_index");
                echo "\">Temas</a>
                            </li>
                            <li>
                                <a href=\"";
                // line 54
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("exam_index");
                echo "\">Examenes</a>
                            </li>
                            <li>
                                <a href=\"";
                // line 57
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("upload_exam_index");
                echo "\">Examenes Upload</a>
                            </li>
                            <li>
                                <a href=\"";
                // line 60
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("question_index");
                echo "\">Preguntas</a>
                            </li>
                            <li>
                                <a href=\"";
                // line 63
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("answer_index");
                echo "\">Respuestas</a>
                            </li>
                            <li>
                                <a href=\"";
                // line 66
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inscription_index");
                echo "\">Inscripciones de los Cursos</a>
                            </li>
                            <li>
                                <a href=\"";
                // line 69
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("info_course_index");
                echo "\">Información de Curso</a>
                            </li>
                            <li>
                                <a href=\"";
                // line 72
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supplementary_reading_index");
                echo "\">Fuentes de Consulta</a>
                            </li>
                            <li>
                                <a href=\"";
                // line 75
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mandatory_reading_index");
                echo "\">Lecturas Obligatorias</a>
                            </li>
                            <li>
                                <a href=\"";
                // line 78
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("files_index");
                echo "\">Imagenes Cursos</a>
                            </li>
                             <li role=\"separator\" class=\"divider\">
                            </li>
                        ";
            } else {
                // line 83
                echo "                            <li>
                                <a href=\"";
                // line 84
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_mycourses");
                echo "\">Mis Cursos</a>
                            </li>
                            <li role=\"separator\" class=\"divider\">
                            </li>
                            <li>
                                <a href=\"";
                // line 89
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_profile");
                echo "\">Mi Perfil</a>
                            </li>
                            <li role=\"separator\" class=\"divider\">
                            </li>
                        ";
            }
            // line 94
            echo "                        <li>
                            <a href=\"";
            // line 95
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Cerrar Sesión</a>
                        </li>
                    </ul>
                </div>
            ";
        }
        // line 100
        echo "        </div>
    </div>
</header>

";
    }

    public function getTemplateName()
    {
        return "WebBundle:Default:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 100,  234 => 95,  231 => 94,  223 => 89,  215 => 84,  212 => 83,  204 => 78,  198 => 75,  192 => 72,  186 => 69,  180 => 66,  174 => 63,  168 => 60,  162 => 57,  156 => 54,  150 => 51,  144 => 48,  138 => 45,  135 => 44,  132 => 43,  120 => 35,  117 => 34,  111 => 32,  106 => 30,  102 => 29,  96 => 25,  94 => 24,  91 => 23,  85 => 21,  83 => 20,  78 => 19,  76 => 18,  72 => 17,  67 => 16,  65 => 15,  61 => 13,  55 => 11,  53 => 10,  50 => 9,  44 => 7,  42 => 6,  37 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Default:header.html.twig", "/home/capacita/public_html/capmex/src/WebBundle/Resources/views/Default/header.html.twig");
    }
}
