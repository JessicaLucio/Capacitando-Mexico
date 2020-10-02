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

/* AdminBundle:Mail:mail.html.twig */
class __TwigTemplate_6bccdb5e9078eaf584a1308ce148c26a0a631df4161e9fa2318e77b421537f83 extends \Twig\Template
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
        echo "<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <div style='margin: auto;'>
            <div style='width:650px; height: auto; margin: auto; '>
                <div class='header' style='border-bottom: 10px solid #216093;'>
                    <div class='image-wrap' style='width: 56%; display: inline-block; vertical-align: middle;'>
                        <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default/logo.png")), "html", null, true);
        echo "\">
                    </div>
                    <div class='name-client' style='display: inline-block; vertical-align: middle;'>
                        <h1 style='font-weight: normal;margin-bottom: 0;'>Estimado(a):</h1>
                        <h1 style='margin-top: 0;'><strong>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "name", []), "html", null, true);
        echo "</strong></h1>
                    </div>
                </div>
                <div class='body'>
                    <p>Haz sido seleccionado para calificar un examen, inicia sesion en el siguiente link, lo antes posible!</p>
                    <a href='";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_login");
        echo "'>Da click</a>
                    <p>Esta es una cuenta de correo automatica la cual no se monitorea, por favor no respondas a este mensaje.</p>

                    <p>Atentamente el equipo, <br>
                        <strong class='remitente'>de Capacitando México</strong>.
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>




";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Mail:mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 19,  48 => 14,  41 => 10,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "AdminBundle:Mail:mail.html.twig", "/home/capacita/public_html/capmex/src/AdminBundle/Resources/views/Mail/mail.html.twig");
    }
}
