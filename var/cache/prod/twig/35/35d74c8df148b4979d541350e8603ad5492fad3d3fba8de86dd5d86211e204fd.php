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

/* AdminBundle:User:login.html.twig */
class __TwigTemplate_6df7a4f9cc7ffbb586a51f1b8d1059e41d55c80585b5a928cd6fb681d2b3a441 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "AdminBundle:User:login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", []), "flashBag", [], "method"), "get", [0 => "status"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "                <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    ";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "        </div>        
    </div>
    <div class=\"row\">
        <div class=\"col-xs-12 col-md-8\">
            <div class=\"row\">
                <div class='image-wrap body-image'>
                    <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/default/login.jpg"), "html", null, true);
        echo "\" class='responsive-image' />
                </div>
            </div>
        </div>
        <div class=\"col-xs-12 col-md-2 form-login\">            
            ";
        // line 23
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 24
            echo "                <div class=\"alert alert-danger\"> Credenciales no validas </div>
            ";
        }
        // line 26
        echo "
            <form action=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"POST\" class=\"\">
                <div class=\"form-group\">
                    <label class=\"text-gray-dark\">Correo Electrónico</label>
                    <input type=\"email\" id=\"username\" name=\"_username\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["lastUsername"]) ? $context["lastUsername"] : null), "html", null, true);
        echo "\" class=\"form-control\" required />
                </div>
                <div class=\"form-group\">
                    <label class=\"text-gray-dark\">Contraseña</label>
                    <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" required/>
                </div>
                <div class=\"form-group\">
                    <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("forgot-password");
        echo "\" class=\"text-gray-dark\"><u>¿Olvidaste la contraseña?</u></a>
                </div>

                <input type=\"submit\" value=\"INICIAR SESIÓN\"  class=\"btn btn-warning-alpha\" />
                <input type=\"hidden\" name=\"_target_path\" value=\"/check-inscription\" />
            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:User:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 37,  94 => 30,  88 => 27,  85 => 26,  81 => 24,  79 => 23,  71 => 18,  63 => 12,  54 => 9,  50 => 7,  46 => 6,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "AdminBundle:User:login.html.twig", "/home/capacita/public_html/capmex/src/AdminBundle/Resources/views/User/login.html.twig");
    }
}
