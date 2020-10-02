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

/* WebBundle:Courses:all-courses.html.twig */
class __TwigTemplate_f0cfd3b3aaafd7a8c9889708fbbcee2eb090673e83bc911e828f52cfa0af478c extends \Twig\Template
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
        echo "<div class='row'>
    <div class='col-xs-12 m-xs-tb-4'>
        <h1 class='title-alpha'>TODOS LOS CURSOS</h1>
    </div>
</div>
<div class='row'>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 8
            echo "        <div class='col-xs-12 col-md-4 m-xs-b-2'>
            <div class='border-line info-course'>
";
            // line 12
            echo "                        <div class='image-wrap'>
                            ";
            // line 13
            if (($this->getAttribute($context["course"], "image", []) != null)) {
                // line 14
                echo "                                <img class='responsive-image' src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("uploads/" . $this->getAttribute($context["course"], "name", [])) . "/") . $this->getAttribute($context["course"], "image", []))), "html", null, true);
                echo "\"/>
                            ";
            } else {
                // line 16
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/courses/curso.jpg"), "html", null, true);
                echo "\" class='responsive-image' />
                            ";
            }
            // line 18
            echo "                        </div>
                        ";
            // line 26
            echo "                <div class='col-xs-12 padding-wrap'>
                    <h1 class='m-xs-b-2 text-blue'>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "name", []), "html", null, true);
            echo "</h1>
                    ";
            // line 29
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_mycourses");
            echo "\" class=\"btn btn-sm btn-success btn-inscription
                       ";
            // line 30
            if (($this->env->getExtension('AdminBundle\Twig\InscriptionExtension')->inscriptionFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", []), $context["course"]) == true)) {
                // line 31
                echo "                           hidden
                       ";
            }
            // line 33
            echo "                       \"
                       data-course=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", []), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-ok-circle\" aria-hidden='true'></span>
                        Inscribirte
                    </a>
                    <a class=\"btn btn-sm btn-default
                       ";
            // line 39
            if (($this->env->getExtension('AdminBundle\Twig\InscriptionExtension')->inscriptionFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", []), $context["course"]) == false)) {
                // line 40
                echo "                           hidden
                       ";
            }
            // line 42
            echo "                       \"
                       data-course=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", []), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-ok-circle\" aria-hidden='true'></span>
                        Estas inscrito a este curso
                    </a>
                </div>
                <div class=\"col-xs-12 footer-course-all padding-wrap bg-blue\">
                    ";
            // line 50
            echo "                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "WebBundle:Courses:all-courses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 54,  113 => 50,  104 => 43,  101 => 42,  97 => 40,  95 => 39,  87 => 34,  84 => 33,  80 => 31,  78 => 30,  73 => 29,  69 => 27,  66 => 26,  63 => 18,  57 => 16,  51 => 14,  49 => 13,  46 => 12,  42 => 8,  38 => 7,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Courses:all-courses.html.twig", "/home/capacita/public_html/capmex/src/WebBundle/Resources/views/Courses/all-courses.html.twig");
    }
}
