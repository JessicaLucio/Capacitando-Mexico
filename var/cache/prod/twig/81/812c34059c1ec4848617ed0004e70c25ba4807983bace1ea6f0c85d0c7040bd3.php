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

/* WebBundle:Courses:_files.html.twig */
class __TwigTemplate_87fadd2c8215e82e5523a8ddc2f2da30c25da7fe2dde06a26de27e562bc8b4fb extends \Twig\Template
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
        // line 2
        if ((isset($context["files"]) ? $context["files"] : null)) {
            // line 3
            echo "    <div class=\"text-center\">
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["files"]) ? $context["files"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 5
                echo "            ";
                if (($this->getAttribute((isset($context["topic"]) ? $context["topic"] : null), "id", []) == $this->getAttribute($this->getAttribute($context["file"], "topic", []), "id", []))) {
                    // line 6
                    echo "                <img class=' ";
                    echo ((($this->getAttribute($context["file"], "logotipo", []) == 1)) ? ("logotipo-img") : ("responsive-image"));
                    echo " m-xs-tb-1'
                     src=\"";
                    // line 7
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((((((("uploads/files/" . $this->getAttribute($this->getAttribute($context["file"], "course", []), "id", [])) . "/") . $this->getAttribute($this->getAttribute($context["file"], "unidad", []), "id", [])) . "/") . $this->getAttribute($this->getAttribute($context["file"], "topic", []), "id", [])) . "/") . $this->getAttribute($context["file"], "file", []))), "html", null, true);
                    echo "\"/>
            ";
                }
                // line 9
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    </div>
    <div class=\"clearfix\"></div>
";
        }
    }

    public function getTemplateName()
    {
        return "WebBundle:Courses:_files.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 10,  52 => 9,  47 => 7,  42 => 6,  39 => 5,  35 => 4,  32 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Courses:_files.html.twig", "/home/capacita/public_html/capmex/src/WebBundle/Resources/views/Courses/_files.html.twig");
    }
}
