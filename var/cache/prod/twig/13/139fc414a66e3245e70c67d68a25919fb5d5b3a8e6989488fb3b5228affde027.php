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

/* WebBundle:InfoFooter:about.html.twig */
class __TwigTemplate_2f0f78411a9d7ba0ae046f61b032619dc37b4afae4e4af49b5a043b185366aa4 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "WebBundle:InfoFooter:about.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <div class='row'>
        <div class='col-xs-12 m-xs-tb-4'>
            <h1 class='title-alpha'>ACERCA DE:</h1>
        </div>
    </div>
    <div class='row col-xs-12'>
        <p>
            El Centro de Investigación y Desarrollo Costero es una organización fundada en el 2009 y desde entonces ha colaborado con organizaciones  locales, regionales, nacionales e internacionales con gran éxito. 
            Gracias a esto nos hemos consolidado y mantenido como un Centro de Investigación de fomento a la competitividad y desarrollo regional.
        </p>
        <ul>
            <li>Objetivo: Contribuir al desarrollo del país a través del manejo y uso sustentable de los recursos ambientales de la zona costera, generando un desarrollo económico en la población.</li>
            <li>Misión: Ser un centro de investigación interdisciplinario de atención a los proyectos costeros, en un marco responsable y sustentable de los recursos contribuyendo en la solución de problemas regionales y nacionales, mediante la investigación científica básica y aplicada en beneficio de la sociedad.</li>
            <li>Visión: Ser una Institución de calidad a nivel regional, nacional y mundial con impacto en el desarrollo de proyectos productivos, líderes en el estudio y la solución de problemas relacionados con los procesos costeros así como su interacción con la sociedad.</li>
        </ul>
        <p>
        Una incubadora de empresas es una organización diseñada para acelerar el crecimiento y asegurar el éxito de proyectos emprendedores a través de una amplia gama de recursos y servicios empresariales como capitalización y coaching por ejemplo. CIDECO te ayuda a convertir tu idea en negocio asesorándote paso a paso hasta el final.
        </p> 
        <br>
        <br>
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "WebBundle:InfoFooter:about.html.twig";
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
        return new Source("", "WebBundle:InfoFooter:about.html.twig", "/home/capacita/public_html/capmex/src/WebBundle/Resources/views/InfoFooter/about.html.twig");
    }
}
