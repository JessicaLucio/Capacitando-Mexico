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

/* WebBundle:InfoFooter:social.html.twig */
class __TwigTemplate_eeac25bb84db5573fe3bb5a65caaefb55a896f8344168d0b0c9676d334e50fea extends \Twig\Template
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
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "WebBundle:InfoFooter:social.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <div class='row'>
        <div class='col-xs-12 m-xs-tb-4'>
            <h1 class='title-alpha'>SERVICIO SOCIAL:</h1>
        </div>
    </div>
    <div class='row col-xs-12'>
        <p>Si estás buscando un lugar donde puedas tu Servicio Social y/o Prácticas Profesionales y en el proceso puedas aprender y aplicar tus conocimientos en un ambiente agradable con un equipo de trabajo profesional e integral, el Centro de Investigación y Desarrollo Costero es una excelente oportunidad para tu desarrollo profesional.</p>
        <p>En el Centro de Investigación y Desarrollo Costero encontrarás diversas áreas para realizar actividades de acuerdo a tu perfil profesional. </p>
        <p>Ten en cuenta que el Servicio Social y las Prácticas Profesionales, además de contribuir en tu formación para la vida profesional, es una gran oportunidad para generar experiencia al mismo tiempo que ofreces tu talento y capacidades en beneficio de la sociedad.</p>
        <p>Si deseas más información agenda una cita comunicándote al teléfono: <b>01(646) 175-32-15.</b></p>

    </div>
    <br>
    
";
    }

    public function getTemplateName()
    {
        return "WebBundle:InfoFooter:social.html.twig";
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
        return new Source("", "WebBundle:InfoFooter:social.html.twig", "/home/capacita/public_html/capmex/src/WebBundle/Resources/views/InfoFooter/social.html.twig");
    }
}
