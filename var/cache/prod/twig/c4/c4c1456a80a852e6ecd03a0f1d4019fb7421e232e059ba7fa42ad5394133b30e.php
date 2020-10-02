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

/* WebBundle:InfoFooter:contact.html.twig */
class __TwigTemplate_cdb7a979db3db667b3e1eafacea02b0715161e8f89fb9623952253321830424f extends \Twig\Template
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
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "WebBundle:InfoFooter:contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <div class='row'>
        <div class='col-xs-12 m-xs-tb-4'>
            <h1 class='title-alpha'>CONTACTO:</h1>
        </div>
    </div>
    <div class='row col-xs-12'>
        <h4><b>Centro de Investigación y Desarrollo Costero</b></h4>
        <ul>
            <li>Calle 13 y Ryerson No.1307-1, Zona Centro, Código Postal 22800, Ensenada, B.C., México,</li>
            <li>Correo electrónico: consultas@cideco.org</li>
            <li>Teléfono: <b>01(646) 178-00-17</b></li>
        </ul>
        <p>Si tiene alguna consulta o desea concertar una cita, puede ponerse  en contacto con nosotros al teléfono: 01(646) 175-32-15 o bien utilice nuestro formulario de contacto.</p>
        <p>Horario de atención: <b>9 a 17 hrs. de Lunes a Viernes.</b></p>

    </div>
    <br>
    
";
    }

    public function getTemplateName()
    {
        return "WebBundle:InfoFooter:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:InfoFooter:contact.html.twig", "/home/capacita/public_html/capmex/src/WebBundle/Resources/views/InfoFooter/contact.html.twig");
    }
}
