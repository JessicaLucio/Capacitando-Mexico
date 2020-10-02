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

/* WebBundle:Courses:_contenido.html.twig */
class __TwigTemplate_9758625b66704080b8baa39994b169d82e423444eeeb69f02a0998e2925069d7 extends \Twig\Template
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
        echo "<div class=\"col-xs-12 col-md-3\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["unidades"]) ? $context["unidades"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["unidad"]) {
            // line 3
            echo "        ";
            $context["newKey"] = ($context["key"] + 1);
            // line 4
            echo "        <div class=\"panel panel-default blocks\">
            <div class=\"panel-heading\">
                <h4 class=\"panel-title\">
                    <a aria-expanded=\"true\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#bloque-";
            // line 7
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">Unidad ";
            echo twig_escape_filter($this->env, (isset($context["newKey"]) ? $context["newKey"] : null), "html", null, true);
            echo "</a>
                </h4>
            </div>
            <div id=\"bloque-";
            // line 10
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" class=\"panel-collapse collapse\">
                <div class=\"panel-body\">
                    <p><strong>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["unidad"], "name", []), "html", null, true);
            echo "</strong></p>
                    <div>
                        <ul class=\"nav nav-tabs\">
                            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["topics"]) ? $context["topics"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["topic"]) {
                // line 16
                echo "                                ";
                if (($this->getAttribute($context["unidad"], "id", []) == $this->getAttribute($this->getAttribute($context["topic"], "unidad", []), "id", []))) {
                    // line 17
                    echo "                                    <li>
                                        <a href=\"#tab-";
                    // line 18
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" data-toggle=\"tab\" aria-expanded=\"false\">
                                            <div class='m-xs-b-1'>
                                                <p>";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute($context["topic"], "name", []), "html", null, true);
                    echo "</p>
                                            </div>
                                        </a>
                                    </li>
                                ";
                }
                // line 25
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['topic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["exams"]) ? $context["exams"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["exam"]) {
                // line 27
                echo "                                ";
                if (($this->getAttribute($context["unidad"], "id", []) == $this->getAttribute($this->getAttribute($context["exam"], "unidad", []), "id", []))) {
                    // line 28
                    echo "                                    <li>
                                        <a href=\"#tab-examen-";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute($context["exam"], "id", []), "html", null, true);
                    echo "\" data-toggle=\"tab\">
                                            <div class='m-xs-b-1'>
                                                <p>";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute($context["exam"], "name", []), "html", null, true);
                    echo "</p>
                                            </div>
                                        </a>
                                    </li>
                                ";
                }
                // line 36
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exam'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["upload_exams"]) ? $context["upload_exams"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["upexam"]) {
                // line 38
                echo "                                ";
                if (($this->getAttribute($context["unidad"], "id", []) == $this->getAttribute($this->getAttribute($context["upexam"], "unidad", []), "id", []))) {
                    // line 39
                    echo "                                    <li>
                                        <a href=\"#tab-upload-examen-";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute($context["upexam"], "id", []), "html", null, true);
                    echo "\" data-toggle=\"tab\">
                                            <div class='m-xs-b-1'>
                                                <p>";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute($context["upexam"], "name", []), "html", null, true);
                    echo "</p>
                                            </div>
                                        </a>
                                    </li>
                                ";
                }
                // line 47
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['upexam'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                        </ul>
                    </div>
                </div>
            </div>
        </div> 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['unidad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "</div>
<div class=\"col-xs-12 col-md-9\">
    <!-- Tab panes -->
    <div class=\"tab-content border-line-blue padding-wrap\">
        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["unidades"]) ? $context["unidades"] : null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["unidad"]) {
            echo " 
            ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["topics"]) ? $context["topics"] : null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["topic"]) {
                // line 60
                echo "                ";
                if (($this->getAttribute($context["unidad"], "id", []) == $this->getAttribute($this->getAttribute($context["topic"], "unidad", []), "id", []))) {
                    // line 61
                    echo "                    <div class=\"tab-pane ";
                    if ($this->getAttribute($context["loop"], "first", [])) {
                        echo "active";
                    }
                    echo "\" id=\"tab-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">
                        ";
                    // line 70
                    echo "                        <h1 class=\"text-blue\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["topic"], "name", []), "html", null, true);
                    echo "</h1>
                        ";
                    // line 72
                    echo "                        ";
                    echo $this->getAttribute($context["topic"], "body", []);
                    echo "
                        ";
                    // line 74
                    echo "                        ";
                    $this->loadTemplate("WebBundle:Courses:_files.html.twig", "WebBundle:Courses:_contenido.html.twig", 74)->display($context);
                    // line 75
                    echo "                        ";
                    // line 76
                    echo "                    </div>
                ";
                }
                // line 78
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['topic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unidad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
        ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["unidades"]) ? $context["unidades"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["unidad"]) {
            // line 82
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["exams"]) ? $context["exams"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["exam"]) {
                // line 83
                echo "                ";
                if (($this->getAttribute($context["unidad"], "id", []) == $this->getAttribute($this->getAttribute($context["exam"], "unidad", []), "id", []))) {
                    // line 84
                    echo "                    <div class=\"tab-pane tab-examen\" id=\"tab-examen-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["exam"], "id", []), "html", null, true);
                    echo "\">
                        <h1 class=\"text-blue\">";
                    // line 85
                    echo twig_escape_filter($this->env, $this->getAttribute($context["exam"], "name", []), "html", null, true);
                    echo "</h1>
                        ";
                    // line 86
                    if (($this->env->getExtension('AdminBundle\Twig\FinishExamExtension')->finishFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", []), $context["exam"]) == true)) {
                        // line 87
                        echo "                            <p>Haz acabado el examen satisfactoriamente.</p>
                            ";
                        // line 88
                        if ((isset($context["finish_exams"]) ? $context["finish_exams"] : null)) {
                            // line 89
                            echo "                                ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((isset($context["finish_exams"]) ? $context["finish_exams"] : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                                // line 90
                                echo "                                    ";
                                if ((($this->getAttribute($context["exam"], "id", []) == $this->getAttribute($this->getAttribute($context["item"], "exam", []), "id", [])) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", []), "id", []) == $this->getAttribute($this->getAttribute($context["item"], "user", []), "id", [])))) {
                                    // line 91
                                    echo "                                        <p> Tu calificación es: <strong>";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "score", []), "html", null, true);
                                    echo "</strong></p>
                                    ";
                                }
                                // line 93
                                echo "                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 94
                            echo "                            ";
                        }
                        // line 95
                        echo "                        ";
                    } else {
                        // line 96
                        echo "                            <div class=\"respuesta-ajax\">
                                <img src=\"";
                        // line 97
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/loader.gif"), "html", null, true);
                        echo "\" class='m-xs-r-1 hidden' width=\"31\" heigth=\"31\" /><p id=\"test\"></p>
                            </div>
                            <form method='post'>
                                <div class=\"exam-wrap\">
                                    <div class=\"question-wrap m-xs-b-3\">
                                        ";
                        // line 102
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
                        foreach ($context['_seq'] as $context["key"] => $context["question"]) {
                            // line 103
                            echo "                                            ";
                            if (($this->getAttribute($this->getAttribute($context["question"], "exam", []), "id", []) == $this->getAttribute($context["exam"], "id", []))) {
                                // line 104
                                echo "                                                <p>
                                                    <strong>";
                                // line 105
                                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "name", []), "html", null, true);
                                echo "</strong>
                                                </p>
                                                ";
                                // line 107
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable((isset($context["answers"]) ? $context["answers"] : null));
                                foreach ($context['_seq'] as $context["key"] => $context["answ"]) {
                                    // line 108
                                    echo "                                                    ";
                                    $context["newKeyAnw"] = ($context["key"] + 1);
                                    // line 109
                                    echo "                                                    ";
                                    if (($this->getAttribute($this->getAttribute($context["answ"], "questionadmin", []), "id", []) == $this->getAttribute($context["question"], "id", []))) {
                                        // line 110
                                        echo "                                                        <div class=\"radio\">
                                                            <label>
                                                                <input type=\"radio\" name=\"optionsRadios-";
                                        // line 112
                                        echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "numberquestion", []), "html", null, true);
                                        echo "\" id=\"optionsRadios-";
                                        echo twig_escape_filter($this->env, (isset($context["newKeyAnw"]) ? $context["newKeyAnw"] : null), "html", null, true);
                                        echo "\" value=\"";
                                        echo twig_escape_filter($this->env, $this->getAttribute($context["answ"], "answer", []), "html", null, true);
                                        echo "\" required>
                                                                ";
                                        // line 113
                                        echo twig_escape_filter($this->env, $this->getAttribute($context["answ"], "name", []), "html", null, true);
                                        echo "
                                                            </label>
                                                        </div>
                                                    ";
                                    }
                                    // line 117
                                    echo "                                                ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['key'], $context['answ'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 118
                                echo "                                            ";
                            }
                            // line 119
                            echo "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['question'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "  
                                    </div>
                                </div>
                                <input type=\"hidden\" value=\"";
                        // line 122
                        echo twig_escape_filter($this->env, $this->getAttribute($context["exam"], "id", []), "html", null, true);
                        echo "\" name=\"exam-id\" />
                                <input type='submit' value='Calificar' class='btn btn-success btn-calificar pull-right' data-exam='";
                        // line 123
                        echo twig_escape_filter($this->env, $this->getAttribute($context["exam"], "id", []), "html", null, true);
                        echo "' data-course='";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", []), "html", null, true);
                        echo "' />
                                <div class='clearfix'></div>
                            </form>
                        ";
                    }
                    // line 127
                    echo "                    </div>
                ";
                }
                // line 129
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exam'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unidad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "
        ";
        // line 133
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["unidades"]) ? $context["unidades"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["unidad"]) {
            // line 134
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["upload_exams"]) ? $context["upload_exams"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["upexams"]) {
                // line 135
                echo "                ";
                if (($this->getAttribute($context["unidad"], "id", []) == $this->getAttribute($this->getAttribute($context["upexams"], "unidad", []), "id", []))) {
                    // line 136
                    echo "                    <div class=\"tab-pane\" id=\"tab-upload-examen-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["upexams"], "id", []), "html", null, true);
                    echo "\">
                        ";
                    // line 137
                    if (($this->env->getExtension('AdminBundle\Twig\UploadExamExtension')->uploadFilter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", []), (isset($context["course"]) ? $context["course"] : null), $context["unidad"]) == true)) {
                        // line 138
                        echo "                            <p>Ya has enviado tu proyecto a calificar.</p>
                            ";
                        // line 139
                        if ((isset($context["finish_exams_upload"]) ? $context["finish_exams_upload"] : null)) {
                            // line 140
                            echo "                                ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((isset($context["finish_exams_upload"]) ? $context["finish_exams_upload"] : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                                // line 141
                                echo "                                    ";
                                if ((($this->getAttribute($context["upexams"], "id", []) == $this->getAttribute($this->getAttribute($context["item"], "exam", []), "id", [])) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", []), "id", []) == $this->getAttribute($this->getAttribute($context["item"], "user", []), "id", [])))) {
                                    // line 142
                                    echo "                                        <p> Tu calificación es: <strong>";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "score", []), "html", null, true);
                                    echo "</strong></p>
                                    ";
                                }
                                // line 144
                                echo "                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 145
                            echo "                            ";
                        }
                        // line 146
                        echo "                        ";
                    } else {
                        // line 147
                        echo "                            <h2>Selecciona un usuario que este inscrito en el curso y enviale tu archivo.</h2>
                            <form method=\"post\" enctype='multipart/form-data'>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Selecciona un usuario</label>
                                    <select class='form-control' name=\"users\" id=\"grados\">
                                        <option disabled selected=\"selected\">-Escoge una opcion-</option>
                                        ";
                        // line 153
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["users_inscriptions"]) ? $context["users_inscriptions"] : null));
                        foreach ($context['_seq'] as $context["key"] => $context["up"]) {
                            // line 154
                            echo "                                            ";
                            $context["newKey"] = ($context["key"] + 1);
                            // line 155
                            echo "                                            <option value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["up"], "user", []), "id", []), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, (isset($context["newKey"]) ? $context["newKey"] : null), "html", null, true);
                            echo "</option>
                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['up'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 157
                        echo "                                    </select>
                                </div>
                                <div class='form-group'>
                                    <label class='control-label'>Sube un Archivo</label>
                                    <input type=\"file\" class=\"form-control\" name=\"file\" required/>
                                </div> 
                                <div class='form-group text-center ";
                        // line 163
                        echo "' id=\"btn-action-wrap\">
                                    <input type=\"hidden\" value=\"";
                        // line 164
                        echo twig_escape_filter($this->env, $this->getAttribute($context["unidad"], "id", []), "html", null, true);
                        echo "\" name=\"unidad-id\" />
                                    <input type=\"submit\" class=\"btn btn-blue-light\" value=\"Guardar\" />
                                </div>
                            </form>
                        ";
                    }
                    // line 169
                    echo "                    </div>
                ";
                }
                // line 171
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['upexams'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unidad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebBundle:Courses:_contenido.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  540 => 173,  534 => 172,  528 => 171,  524 => 169,  516 => 164,  513 => 163,  505 => 157,  494 => 155,  491 => 154,  487 => 153,  479 => 147,  476 => 146,  473 => 145,  467 => 144,  461 => 142,  458 => 141,  453 => 140,  451 => 139,  448 => 138,  446 => 137,  441 => 136,  438 => 135,  433 => 134,  428 => 133,  425 => 131,  419 => 130,  413 => 129,  409 => 127,  400 => 123,  396 => 122,  386 => 119,  383 => 118,  377 => 117,  370 => 113,  362 => 112,  358 => 110,  355 => 109,  352 => 108,  348 => 107,  343 => 105,  340 => 104,  337 => 103,  333 => 102,  325 => 97,  322 => 96,  319 => 95,  316 => 94,  310 => 93,  304 => 91,  301 => 90,  296 => 89,  294 => 88,  291 => 87,  289 => 86,  285 => 85,  280 => 84,  277 => 83,  272 => 82,  268 => 81,  265 => 80,  251 => 79,  237 => 78,  233 => 76,  231 => 75,  228 => 74,  223 => 72,  218 => 70,  209 => 61,  206 => 60,  189 => 59,  170 => 58,  164 => 54,  153 => 48,  147 => 47,  139 => 42,  134 => 40,  131 => 39,  128 => 38,  123 => 37,  117 => 36,  109 => 31,  104 => 29,  101 => 28,  98 => 27,  93 => 26,  87 => 25,  79 => 20,  74 => 18,  71 => 17,  68 => 16,  64 => 15,  58 => 12,  53 => 10,  45 => 7,  40 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Courses:_contenido.html.twig", "/home/capacita/public_html/capmex/src/WebBundle/Resources/views/Courses/_contenido.html.twig");
    }
}
