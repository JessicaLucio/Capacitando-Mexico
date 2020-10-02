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

/* WebBundle:InfoFooter:politica.html.twig */
class __TwigTemplate_45a33b862f2c26fff935a6123824d62838b3dbeeb5e256bdc2960844569f6b53 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "WebBundle:InfoFooter:politica.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <div class='row'>
        <div class='col-xs-12 m-xs-tb-4'>
            <h1 class='title-alpha'>POLÍTICA DE PRIVACIDAD:</h1>
        </div>
    </div>
    <div class='row col-xs-12'>
        <p>En cumplimiento con lo establecido por la Ley Federal de Protección de Datos Personales en Posesión de los Particulares (LFPDPPP), le Informamos Nuestra Política de Privacidad y Manejo de Datos Personales:</p>
        <p>No reunimos información personal, ni información del sistema operativo del usurario y no utilizamos cookies para administrar nuestro sitio Web, cualquier información que se dé a conocer de forma directa con personal de nuestra empresa por vía telefónica, correo o de manera personal de acuerdo con lo establecido en el artículo 27 fracción II de la LFPDPPP, se le dará a conocer la finalidad de obtención de información requerida.</p>
        <p>El presente aviso de privacidad cumple con lo establecido en los principios  de la Protección de Datos Personales establecidos en el artículo 9, fracción I, II, III, IV, V, VI, VII, VII, VIII, de la ley federal de protección de datos personales en posesión de los particulares</p>
        <p>Nos reservamos el derecho de efectuar en cualquier momento modificaciones o actualizaciones al presente Aviso de Privacidad, para la atención de novedades legislativas, políticas internas o nuevos requerimientos para la prestación u ofrecimiento de nuestros servicios.</p>
        <p>Si necesita mayor información por favor escriba a steephen@cideco.org o si prefiere a nuestro domicilio: Calle 13 y Ryerson No.1307-1, Zona Centro, Código Postal 22800, Ensenada, B.C., México, teléfono: <b>01(646)175-32-15.</b></p>

    </div>
    <br>
    
";
    }

    public function getTemplateName()
    {
        return "WebBundle:InfoFooter:politica.html.twig";
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
        return new Source("", "WebBundle:InfoFooter:politica.html.twig", "/home/capacita/public_html/capmex/src/WebBundle/Resources/views/InfoFooter/politica.html.twig");
    }
}
