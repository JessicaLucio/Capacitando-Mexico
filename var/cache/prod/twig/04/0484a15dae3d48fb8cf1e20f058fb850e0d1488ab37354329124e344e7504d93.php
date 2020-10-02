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

/* WebBundle:Courses:detail.html.twig */
class __TwigTemplate_0d669af019f590ad9946e5e891433c8e8553ab2ed82fa89333d5607f98d95407 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "WebBundle:Courses:detail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        // Create the chart
        Highcharts.chart('container', {
            chart: {
                type: 'column',
                spacingLeft: 10
            },
            title: {
                text: 'Tu evaluación'
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'Calificación'
                }
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    pointWidth: 40,
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            tooltip: {
                headerFormat: '<span style=\"font-size:11px\">{series.name}</span><br>'
            },
            responsive: {
                rules: [{
                        condition: {
                            maxWidth: 300
                        },
                        chartOptions: {
                            legend: {
                                enabled: false
                            }
                        }
                    }]
            },
            series: [{        ";
        // line 50
        if ((isset($context["finish_exams"]) ? $context["finish_exams"] : null)) {
            // line 51
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["finish_exams"]) ? $context["finish_exams"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                echo " 
                            name: '";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "exam", []), "name", []), "html", null, true);
                echo "',
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                
        ";
        }
        // line 54
        echo "                    
        ";
        // line 55
        if ((isset($context["finish_exams"]) ? $context["finish_exams"] : null)) {
            // line 56
            echo "                        colors: [
            ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["finish_exams"]) ? $context["finish_exams"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                echo " 
                ";
                // line 58
                if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", []), "id", []) == $this->getAttribute($this->getAttribute($context["data"], "user", []), "id", [])) && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", []) == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "exam", []), "unidad", []), "course", []), "id", [])))) {
                    // line 59
                    echo "                    ";
                    if (($this->getAttribute($context["data"], "score", []) >= 8)) {
                        // line 60
                        echo "                                        '#02D379',
                    ";
                    } else {
                        // line 62
                        echo "                                        '#F95C41',
                    ";
                    }
                    // line 64
                    echo "                ";
                }
                // line 65
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                            ],
        ";
        }
        // line 68
        echo "                        colorByPoint: true,
        ";
        // line 69
        if ((isset($context["finish_exams"]) ? $context["finish_exams"] : null)) {
            // line 70
            echo "                        data: [
            ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["finish_exams"]) ? $context["finish_exams"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                echo "  
                ";
                // line 72
                if ((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", []), "id", []) == $this->getAttribute($this->getAttribute($context["data"], "user", []), "id", [])) && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", []) == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["data"], "exam", []), "unidad", []), "course", []), "id", [])))) {
                    // line 73
                    echo "                                    {
                                        name: '";
                    // line 74
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "exam", []), "name", []), "html", null, true);
                    echo "',
                                        y:";
                    // line 75
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "score", []), "html", null, true);
                    echo "
                                    },
                ";
                }
                // line 78
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                            ]
        ";
        }
        // line 81
        echo "                    }]
            });
    </script>
";
    }

    // line 86
    public function block_content($context, array $blocks = [])
    {
        // line 87
        echo "    <div class='row menu-detail-course-wrap'>
        <div class='container'>
            <div class='row'>
                <div class='col-xs-12'>
                    <ul class=\"list-inline menu-detail-course\">
                        <li title=\"contenido\" class=\"btn-detail\"><a>Contenido</a></li>
                        <li title=\"informacion\" class=\"btn-detail\">
                            <a>Informacion del curso</a>
                        </li>
                        ";
        // line 97
        echo "                        <li title=\"progreso\" class=\"btn-detail\">
                            <a>Progreso</a>
                        </li>
                        <li title=\"preguntas\" class=\"btn-detail\"><a>Preguntas frecuentes</a></li>
                        <li title=\"fuentes\" class=\"btn-detail\"><a>Fuentes de consulta</a></li>
                        <li title=\"l-obligatoria\" class=\"btn-detail\"><a>Lectura obligatoria</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class='row'>
        <div class='container'>
            <div class='row row-margin'>
                <div class='col-xs-12'>
                    ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", []), "flashBag", [], "method"), "get", [0 => "status"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 113
            echo "                        <div class=\"alert alert-success alert-dismissible\" role=\"alert\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                            <strong>";
            // line 115
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</strong>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                </div>
            </div>
            <div class=\"row row-margin\">
                <div title=\"contenido\" class=\"list-detail\" id=\"contenido\">
                    ";
        // line 122
        $this->loadTemplate("WebBundle:Courses:_contenido.html.twig", "WebBundle:Courses:detail.html.twig", 122)->display($context);
        // line 123
        echo "                </div>
                <div title=\"informacion\" class=\"list-detail\">
                    ";
        // line 125
        $this->loadTemplate("WebBundle:Courses:_informacion.html.twig", "WebBundle:Courses:detail.html.twig", 125)->display($context);
        // line 126
        echo "                </div>
                ";
        // line 130
        echo "                <div title=\"progreso\" class=\"list-detail\">
                    ";
        // line 131
        $this->loadTemplate("WebBundle:Courses:_progreso.html.twig", "WebBundle:Courses:detail.html.twig", 131)->display($context);
        // line 132
        echo "                </div>
                <div title=\"preguntas\" class=\"list-detail\">
                    ";
        // line 134
        $this->loadTemplate("WebBundle:Courses:_preguntas.html.twig", "WebBundle:Courses:detail.html.twig", 134)->display($context);
        // line 135
        echo "                </div>
                <div title=\"fuentes\" class=\"list-detail\">
                    ";
        // line 137
        $this->loadTemplate("WebBundle:Courses:_fuentes.html.twig", "WebBundle:Courses:detail.html.twig", 137)->display($context);
        // line 138
        echo "                </div>
                <div title=\"l-obligatoria\" class=\"list-detail\">
                    ";
        // line 140
        $this->loadTemplate("WebBundle:Courses:_l-obligatoria.html.twig", "WebBundle:Courses:detail.html.twig", 140)->display($context);
        // line 141
        echo "                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebBundle:Courses:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 141,  286 => 140,  282 => 138,  280 => 137,  276 => 135,  274 => 134,  270 => 132,  268 => 131,  265 => 130,  262 => 126,  260 => 125,  256 => 123,  254 => 122,  248 => 118,  239 => 115,  235 => 113,  231 => 112,  214 => 97,  203 => 87,  200 => 86,  193 => 81,  189 => 79,  183 => 78,  177 => 75,  173 => 74,  170 => 73,  168 => 72,  162 => 71,  159 => 70,  157 => 69,  154 => 68,  150 => 66,  144 => 65,  141 => 64,  137 => 62,  133 => 60,  130 => 59,  128 => 58,  122 => 57,  119 => 56,  117 => 55,  114 => 54,  110 => 53,  102 => 52,  95 => 51,  93 => 50,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Courses:detail.html.twig", "/home/capacita/public_html/capmex/src/WebBundle/Resources/views/Courses/detail.html.twig");
    }
}
