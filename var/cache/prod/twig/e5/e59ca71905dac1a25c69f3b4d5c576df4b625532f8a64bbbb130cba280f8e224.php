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

/* WebBundle:Slider:slider.html.twig */
class __TwigTemplate_321114d4c3676e2728043d7691297346058c0cba9f308fbc5bcee35b34d70665 extends \Twig\Template
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
        echo "<div class=\"slider-wrap row\">
    <div class=\"slider-content\" data-controls=\"false\" data-auto=\"true\">
        <div class=\"slide-wrap\">
            <div class=\"image-wrap\">
                <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/slider/escribiendo.jpg"), "html", null, true);
        echo "\" class='responsive-image' />
            </div>
        </div>
        <div class=\"slide-wrap\">
            <div class=\"image-wrap\">
                <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/slider/estudiando.jpg"), "html", null, true);
        echo "\" class='responsive-image' />
            </div>
        </div>
        <div class=\"slide-wrap\">
            <div class=\"image-wrap\">
                <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/slider/logica.jpg"), "html", null, true);
        echo "\" class='responsive-image' />
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebBundle:Slider:slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  44 => 10,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Slider:slider.html.twig", "/home/capacita/public_html/capmex/src/WebBundle/Resources/views/Slider/slider.html.twig");
    }
}
