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

/* WebBundle:Default:index.html.twig */
class __TwigTemplate_e77aa2fee8d437ee054d588039d5db1fe42d00636a2c4ddd61b87129ce25b4b3 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "WebBundle:Default:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    
    ";
        // line 5
        $this->loadTemplate("WebBundle:Slider:slider.html.twig", "WebBundle:Default:index.html.twig", 5)->display($context);
        // line 6
        echo "    
    <div class='container'>
        <div class='row'>
            <div class='col-xs-12 m-xs-tb-4'>
                <h1 class='title-alpha'>TODOS LOS CURSOS</h1>
            </div>
        </div>
        <div class='row'>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 15
            echo "                <div class='col-xs-12 col-md-4 m-xs-b-2'>
                    <div class='border-line info-course'>
                        <div class='image-wrap'>
                            <a href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_login");
            echo "\">
                                ";
            // line 19
            if (($this->getAttribute($context["course"], "image", []) != null)) {
                // line 20
                echo "                                    <img class='responsive-image' src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("uploads/" . $this->getAttribute($context["course"], "name", [])) . "/") . $this->getAttribute($context["course"], "image", []))), "html", null, true);
                echo "\"/>
                                ";
            } else {
                // line 22
                echo "                                    <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/courses/curso.jpg"), "html", null, true);
                echo "\" class='responsive-image' />
                                ";
            }
            // line 24
            echo "                            </a>
                        </div>
                        <div class='padding-wrap'>
                            <h1 class='m-xs-b-2 text-blue'>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "name", []), "html", null, true);
            echo "</h1>
                            ";
            // line 29
            echo "                        </div>
                        <div class=\"footer-course-all padding-wrap bg-blue\">
                            ";
            // line 32
            echo "                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "WebBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 36,  97 => 32,  93 => 29,  89 => 27,  84 => 24,  78 => 22,  72 => 20,  70 => 19,  66 => 18,  61 => 15,  57 => 14,  47 => 6,  45 => 5,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Default:index.html.twig", "/home/capacita/public_html/capmex/src/WebBundle/Resources/views/Default/index.html.twig");
    }
}
