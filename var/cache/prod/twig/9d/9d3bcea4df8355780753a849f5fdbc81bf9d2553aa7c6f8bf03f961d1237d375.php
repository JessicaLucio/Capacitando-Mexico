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

/* AdminBundle:Course:edit.html.twig */
class __TwigTemplate_e54aa80677a24e324390e331b3b6778a2288f4867f4429317b141a966aee0e4d extends \Twig\Template
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
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "AdminBundle:Course:edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"row\">
        <div class='col-xs-12 text-center'>
            <h2>Editar Tema</h2>
            <hr />
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", []), "flashBag", [], "method"), "get", [0 => "status"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            echo "                <div class='alert alert-danger alert-dismissable'>
                    ";
            // line 10
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo " 
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </div>

        <div class='col-xs-12 col-md-6 col-md-offset-3'>
            <form method='post' enctype='multipart/form-data'>
                ";
        // line 17
        if ((isset($context["course"]) ? $context["course"] : null)) {
            // line 18
            echo "                    <div class='form-group'>
                        <label class='control-label'>Nombre:</label>
                        <input type=\"text\" name=\"name\" class=\"form-control\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "name", []), "html", null, true);
            echo "\" required/>
                    </div>
                    <div class='form-group'>
                        <label class='control-label'>Categoria:</label>
                        <select class='form-control' name='categoria' id='categoria'>
                            <option value=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "categoryCourse", []), "id", []), "html", null, true);
            echo "\"  selected=\"selected\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "categoryCourse", []), "html", null, true);
            echo "</option>
                            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 27
                echo "                                <option value='";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", []), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", []), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                        </select>
                    </div>
                    <div class='form-group'>
                        <label class='control-label'>Imagen:</label>
                        <input type=\"file\" class=\"form-control\" name=\"image\" value=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "image", []), "html", null, true);
            echo "\" required/>
                        ";
            // line 34
            if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "image", [])) {
                // line 35
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((("uploads/" . $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "name", [])) . "/") . $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "image", []))), "html", null, true);
                echo "\">Ver archivo</a>
                        ";
            }
            // line 37
            echo "                    </div>
                    <div class='form-group'>
                        <button type='submit' name='acta' value='Subir acta de entrega' class='btn btn-success'>
                            Editar
                        </button>
                    </div>
                ";
        }
        // line 44
        echo "            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Course:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 44,  123 => 37,  117 => 35,  115 => 34,  111 => 33,  105 => 29,  94 => 27,  90 => 26,  84 => 25,  76 => 20,  72 => 18,  70 => 17,  64 => 13,  55 => 10,  52 => 9,  48 => 8,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "AdminBundle:Course:edit.html.twig", "/home/capacita/public_html/capmex/src/AdminBundle/Resources/views/Course/edit.html.twig");
    }
}
