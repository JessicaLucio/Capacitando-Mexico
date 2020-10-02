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

/* WebBundle:InfoFooter:aliados.html.twig */
class __TwigTemplate_460f3da1327867d702be43c4e74a1cdd4907079d2cef3f364c5053ead9382e8c extends \Twig\Template
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
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "WebBundle:InfoFooter:aliados.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <div class='row'>
        <div class='col-xs-12 m-xs-tb-4'>
            <h1 class='title-alpha'>ALIADOS:</h1>
        </div>
    </div>
    <div class='row col-xs-12'>
        <div class=\"text-center\"> 
            <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/sagarpa.jpg"), "html", null, true);
        echo "\" />
        </div>
        <br>        
        <p>SAGARPA</p>
        <p>Secretaría de Agricultura, Ganadería, Desarrollo Rural, Pesca y Alimentación.</p>
        <p>A través del Programa Integral del Desarrollo Rural 2016.</p>
        <br>
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "WebBundle:InfoFooter:aliados.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:InfoFooter:aliados.html.twig", "/home/capacita/public_html/capmex/src/WebBundle/Resources/views/InfoFooter/aliados.html.twig");
    }
}
