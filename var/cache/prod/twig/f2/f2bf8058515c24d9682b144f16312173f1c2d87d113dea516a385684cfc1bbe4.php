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

/* WebBundle:Default:footer.html.twig */
class __TwigTemplate_1d579720e61197574ff39fd4af10566069af6ad0965fe3471ccb19afe914d7da extends \Twig\Template
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
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", []), "attributes", []), "get", [0 => "_route"], "method")) {
            // line 3
            echo "

    <footer>
        <div class=\"container-fluid\">
            <div class=\"row bg-blue-light\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xs-12 text-center\">
                            <ul class=\"list-inline list-footer m-xs-tb-3\">
                                <li><a href=\"";
            // line 12
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_about");
            echo "\">Acerca de</a></li>
                                <li><a href=\"";
            // line 13
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_aliados");
            echo "\">Aliados</a></li>
                                <li><a href=\"";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_contacto");
            echo "\">Contacto</a></li>
                                <li><a href=\"";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_social");
            echo "\">Servicio Social</a></li>
                            </ul>
                            <ul class=\"list-inline list-conditions m-xs-b-3\">
                                <li><a href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_politica");
            echo "\" class=\"text-orange\">Política de Privacidad</a></li>
                                <li class=\"text-orange\">|</li>
                                <li><a href=\"";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_terminos");
            echo "\" class=\"text-orange\">Términos de Servicio</a></li>
                            </ul>
                            <p class=\"footpar\">Evento realizado con el apoyo de la SECRETARIA a través del Programa Integral del Desarrollo Rural 2016.</p>
                            <p class=\"text-gray\">Este programa es público, ajeno a cualquier partido político. Queda prohibido el uso para fines distintos a los establecidos en el programa.</p>
                            
                            <p class=\"text-gray\">Centro de Investigación y Desarrollo Costero, Todos los Derechos Reservados</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
";
        }
    }

    public function getTemplateName()
    {
        return "WebBundle:Default:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 20,  61 => 18,  55 => 15,  51 => 14,  47 => 13,  43 => 12,  32 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Default:footer.html.twig", "/home/capacita/public_html/capmex/src/WebBundle/Resources/views/Default/footer.html.twig");
    }
}
