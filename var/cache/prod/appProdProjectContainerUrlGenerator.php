<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'web_about' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebBundle\\Controller\\DefaultController::aboutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/about',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_aliados' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebBundle\\Controller\\DefaultController::aliadosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/aliados',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_contacto' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebBundle\\Controller\\DefaultController::contactoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contacto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_social' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebBundle\\Controller\\DefaultController::socialAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/social',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_politica' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebBundle\\Controller\\DefaultController::politicaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/politica',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_terminos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebBundle\\Controller\\DefaultController::terminosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/terminos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_courses_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebBundle\\Controller\\CourseController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/courses-index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_mycourses' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebBundle\\Controller\\CourseController::myCoursesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/my-courses',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_courses_detail' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WebBundle\\Controller\\CourseController::detailAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/course-detail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inscription' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebBundle\\Controller\\InscriptionController::inscriptionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inscription',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'uninscription' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebBundle\\Controller\\InscriptionController::uninscriptionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/uninscription',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'finish_exam' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebBundle\\Controller\\FinishExamController::finishExamAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/finish-exam',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'detail_file_exam' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WebBundle\\Controller\\DetailFileExamController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/detail-file-exam',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'detail_score_file_exam' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'WebBundle\\Controller\\DetailScoreFileExamController::indexAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/detail-score-file-exam',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_check_inscription' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebBundle\\Controller\\DefaultController::checkInscriptionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/check-inscription',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_profile' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\UserController::profileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_json' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'WebBundle\\Controller\\DefaultController::jsonAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/json',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\UserController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'topic_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\TopicController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/index-topic',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'topic_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\TopicController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add-topic',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'topic_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\TopicController::editAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/edit-topic',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'topic_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\TopicController::deleteAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/delete-topic',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'info_course_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\InfoCourseController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/info-course/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'info_course_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\InfoCourseController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/info-course/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'info_course_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\InfoCourseController::editAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/info-course/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'info_course_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\InfoCourseController::deleteAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/info-course/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'unidad_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\UnidadController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/index-unidad',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'unidad_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\UnidadController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add-unidad',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'unidad_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\UnidadController::editAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/edit-unidad',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'unidad_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\UnidadController::deleteAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/delete-unidad',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'course_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\CourseController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/index-course',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'course_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\CourseController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add-course',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'course_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\CourseController::editAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/edit-course',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'course_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\CourseController::deleteAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/delete-course',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supplementary_reading_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\SupplementaryReadingController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/index-supplementary-reading',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supplementary_reading_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\SupplementaryReadingController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add-supplementary-reading',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supplementary_reading_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\SupplementaryReadingController::editAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/edit-supplementary-reading',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supplementary_reading_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\SupplementaryReadingController::deleteAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/delete-supplementary-reading',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mandatory_reading_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\MandatoryReadingController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/index-mandatory-reading',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mandatory_reading_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\MandatoryReadingController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add-mandatory-reading',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mandatory_reading_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\MandatoryReadingController::editAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/edit-mandatory-reading',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mandatory_reading_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\MandatoryReadingController::deleteAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/delete-mandatory-reading',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'exam_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\ExamController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/index-exam',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'exam_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\ExamController::editAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/edit-exam',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'exam_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\ExamController::deleteAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/delete-exam',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'question_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\QuestionController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/index-question',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'question_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\QuestionController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add-question',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'question_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\QuestionController::editAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/edit-question',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'question_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\QuestionController::deleteAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/delete-question',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'answer_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\AnswerController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/index-answer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'answer_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\AnswerController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add-answer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'answer_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\AnswerController::editAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/edit-answer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'answer_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\AnswerController::deleteAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/delete-answer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'files_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\FileController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/file',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'file_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\FileController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/file-add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'file_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\FileController::editAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/file-edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'file_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\FileController::deleteAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/file-delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dynamic_unidades' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\FileController::unidadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dynamic-unidades',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dynamic_topics' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\FileController::topicAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dynamic-topics',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'forgot-password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\PasswordController::forgotPasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/forgot-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'checkout-password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\PasswordController::checkoutPasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/checkout-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'change-password' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\PasswordController::changePasswordAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'success-password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\PasswordController::successPasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/success-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'upload_exam_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\UploadExamController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/index-upload-exam',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'upload_exam_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\UploadExamController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add-upload-exam',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'upload_exam_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\UploadExamController::editAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/edit-upload-exam',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'upload_exam_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\UploadExamController::deleteAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/delete-upload-exam',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'average_user_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\AverageController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/average-index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'exam_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\ExamController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add-exam',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inscription_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\InscriptionController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inscriptions',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inscription_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\InscriptionController::deleteAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/inscription-delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\UserController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}