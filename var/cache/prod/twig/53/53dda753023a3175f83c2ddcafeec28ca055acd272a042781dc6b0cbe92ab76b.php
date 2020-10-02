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

/* WebBundle:Courses:_preguntas.html.twig */
class __TwigTemplate_0578d4cdc2bc90b56c39ef0e0f4968d8ff9a5b0da490fb926feec727c620471a extends \Twig\Template
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
        echo "<h2>Preguntas Frecuentes</h2>
<div class='col-xs-12 border-line-blue padding-wrap list-link'>
<div>
        <ol class='list-question'>
            
            <h4><li>¿Puedo acceder al curso si no me he registrado?</li></h4>                
                    <ul><li>R: No, para poder ingresar es necesario registrarse en Capacitando México</li></ul>
                    <br>
               <!--<h4><li>Si no recuerdo mi contraseña ¿Cómo puedo recuperarla?</li></h4>
                    <ul><li>R: Debes dirigirte a la pregunta ¿Olvidaste la contraseña?, deberás poner el correo con el que te registraste y te llegara una notificación al correo electrónico para restablecer tu contraseña.</li></ul>
                    <br>-->
    
    
               <h4><li>¿Cuánto tiempo tengo para terminar el curso?</li></h4>
                    <ul><li>R: El curso tendrá una duración de 4 semanas. </li></ul>
                    <br>
    
    
               <h4><li>¿Qué pasa si no termino el curso en el tiempo determinado?</li></h4>
                    <ul><li>R: Se cerrará el sistema y no te permitirá continuar. </li></ul>
                    <br>
    
    
               <h4><li>Si repruebo uno o más de los exámenes ¿Tendré oportunidad de hacerlo nuevamente?</li></h4>
                    <ul><li>R: No, debido a que solo se podrá realizar una sola vez, por lo que se recomienda estar seguros de sus respuestas al momento de enviar el examen. </li></ul>
                    <br>
    
    
               <h4><li>¿Cuál es la calificación mínima aprobatoria?</li></h4>
                     <ul><li>R: Para poder aprobar el curso se necesita una calificación mínima promedio de ocho. </li></ul>
                     <br>
    
               <h4><li>¿Si repruebo el curso, habrá manera de poder retomarlo?</li></h4>
                    <ul><li>R: No debido a que es un único curso.</li></ul>
                    <br>
    
    
               <h4><li>¿Tiene algún costo el curso?</li></h4>
                    <ul><li>R: El curso que ofrece el Centro de Investigación y Desarrollo Costero es completamente gratuito.</li></ul>
                    <br>
    
    
               <h4><li>¿Cuál es el beneficio de tomar el curso?</li></h4>
                    <ul><li>R: Puedes adquirir conocimientos que son directamente aplicables a tu negocio y/o empresa  </li></ul>
                    <br>
    
  
               <!--<h4><li>Una vez concluido el curso ¿Cuándo darán la calificación final?</li></h4>
                    <ul><li>R: Una vez que hayas terminado todos los exámenes, deberás esperar un periodo de 2 semanas para obtener la calificación final. </li></ul>
                    <br>-->
    
   
               <h4><li>En caso de tener dudas en las unidades ¿Con quién puedo dirigirme? </li></h4>
                    <ul><li>R: Deberás escribir un correo a consultas@cideco.org, para que te puedan apoyar o al número (646) 175 3215 en un horario de 9:00 a 17:00 hora Pacífico. </li></ul>
                    <br>
    
    
               <h4><li>¿Cuál es el navegador más conveniente para realizar el curso?</li></h4>
                    <ul><li>R: Chrome y Mozilla, sin embargo, no deben de tener ningún problema con algún otro navegador.</li></ul>
                    <br>
    
    
               <h4><li>¿Cómo puedo ingresar al curso?</li></h4>
                    <ul><li>R: Es muy fácil ingresando a la página capacitando-mexico.org</li></ul>
                    <br>
    
   
               <h4><li>¿Cómo funciona el curso?</li></h4>
                    <ul><li>R: La totalidad del curso es por internet, en donde encontraras lecturas obligatorias y complementarias que te ayudaran a aprobar el curso.  </li></ul>
                    
        </ol>
    
    </div>


 

</div>
";
    }

    public function getTemplateName()
    {
        return "WebBundle:Courses:_preguntas.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Courses:_preguntas.html.twig", "/home/capacita/public_html/capmex/src/WebBundle/Resources/views/Courses/_preguntas.html.twig");
    }
}
