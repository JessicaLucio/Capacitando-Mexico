<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/a')) {
            // web_about
            if ($pathinfo === '/about') {
                return array (  '_controller' => 'WebBundle\\Controller\\DefaultController::aboutAction',  '_route' => 'web_about',);
            }

            // web_aliados
            if ($pathinfo === '/aliados') {
                return array (  '_controller' => 'WebBundle\\Controller\\DefaultController::aliadosAction',  '_route' => 'web_aliados',);
            }

        }

        // web_contacto
        if ($pathinfo === '/contacto') {
            return array (  '_controller' => 'WebBundle\\Controller\\DefaultController::contactoAction',  '_route' => 'web_contacto',);
        }

        // web_social
        if ($pathinfo === '/social') {
            return array (  '_controller' => 'WebBundle\\Controller\\DefaultController::socialAction',  '_route' => 'web_social',);
        }

        // web_politica
        if ($pathinfo === '/politica') {
            return array (  '_controller' => 'WebBundle\\Controller\\DefaultController::politicaAction',  '_route' => 'web_politica',);
        }

        // web_terminos
        if ($pathinfo === '/terminos') {
            return array (  '_controller' => 'WebBundle\\Controller\\DefaultController::terminosAction',  '_route' => 'web_terminos',);
        }

        // web_courses_index
        if ($pathinfo === '/courses-index') {
            return array (  '_controller' => 'WebBundle\\Controller\\CourseController::indexAction',  '_route' => 'web_courses_index',);
        }

        // web_mycourses
        if ($pathinfo === '/my-courses') {
            return array (  '_controller' => 'WebBundle\\Controller\\CourseController::myCoursesAction',  '_route' => 'web_mycourses',);
        }

        // web_courses_detail
        if (0 === strpos($pathinfo, '/course-detail') && preg_match('#^/course\\-detail(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'web_courses_detail')), array (  '_controller' => 'WebBundle\\Controller\\CourseController::detailAction',  'id' => NULL,));
        }

        // inscription
        if ($pathinfo === '/inscription') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_inscription;
            }

            return array (  '_controller' => 'WebBundle\\Controller\\InscriptionController::inscriptionAction',  '_route' => 'inscription',);
        }
        not_inscription:

        // uninscription
        if ($pathinfo === '/uninscription') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_uninscription;
            }

            return array (  '_controller' => 'WebBundle\\Controller\\InscriptionController::uninscriptionAction',  '_route' => 'uninscription',);
        }
        not_uninscription:

        // finish_exam
        if ($pathinfo === '/finish-exam') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_finish_exam;
            }

            return array (  '_controller' => 'WebBundle\\Controller\\FinishExamController::finishExamAction',  '_route' => 'finish_exam',);
        }
        not_finish_exam:

        if (0 === strpos($pathinfo, '/detail-')) {
            // detail_file_exam
            if (0 === strpos($pathinfo, '/detail-file-exam') && preg_match('#^/detail\\-file\\-exam/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail_file_exam')), array (  '_controller' => 'WebBundle\\Controller\\DetailFileExamController::indexAction',));
            }

            // detail_score_file_exam
            if (0 === strpos($pathinfo, '/detail-score-file-exam') && preg_match('#^/detail\\-score\\-file\\-exam(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detail_score_file_exam')), array (  '_controller' => 'WebBundle\\Controller\\DetailScoreFileExamController::indexAction',  'id' => NULL,));
            }

        }

        // web_check_inscription
        if ($pathinfo === '/check-inscription') {
            return array (  '_controller' => 'WebBundle\\Controller\\DefaultController::checkInscriptionAction',  '_route' => 'web_check_inscription',);
        }

        // web_profile
        if ($pathinfo === '/profile') {
            return array (  '_controller' => 'AdminBundle\\Controller\\UserController::profileAction',  '_route' => 'web_profile',);
        }

        // web_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'web_index');
            }

            return array (  '_controller' => 'WebBundle\\Controller\\DefaultController::indexAction',  '_route' => 'web_index',);
        }

        // web_json
        if ($pathinfo === '/json') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_web_json;
            }

            return array (  '_controller' => 'WebBundle\\Controller\\DefaultController::jsonAction',  '_route' => 'web_json',);
        }
        not_web_json:

        if (0 === strpos($pathinfo, '/log')) {
            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'AdminBundle\\Controller\\UserController::registerAction',  '_route' => 'register',);
        }

        // topic_index
        if ($pathinfo === '/index-topic') {
            return array (  '_controller' => 'AdminBundle\\Controller\\TopicController::indexAction',  '_route' => 'topic_index',);
        }

        // topic_add
        if ($pathinfo === '/add-topic') {
            return array (  '_controller' => 'AdminBundle\\Controller\\TopicController::addAction',  '_route' => 'topic_add',);
        }

        // topic_edit
        if (0 === strpos($pathinfo, '/edit-topic') && preg_match('#^/edit\\-topic(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'topic_edit')), array (  '_controller' => 'AdminBundle\\Controller\\TopicController::editAction',  'id' => NULL,));
        }

        // topic_delete
        if (0 === strpos($pathinfo, '/delete-topic') && preg_match('#^/delete\\-topic(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'topic_delete')), array (  '_controller' => 'AdminBundle\\Controller\\TopicController::deleteAction',  'id' => NULL,));
        }

        if (0 === strpos($pathinfo, '/in')) {
            if (0 === strpos($pathinfo, '/info-course')) {
                // info_course_index
                if ($pathinfo === '/info-course/index') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\InfoCourseController::indexAction',  '_route' => 'info_course_index',);
                }

                // info_course_add
                if ($pathinfo === '/info-course/add') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\InfoCourseController::addAction',  '_route' => 'info_course_add',);
                }

                // info_course_edit
                if (0 === strpos($pathinfo, '/info-course/edit') && preg_match('#^/info\\-course/edit(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'info_course_edit')), array (  '_controller' => 'AdminBundle\\Controller\\InfoCourseController::editAction',  'id' => NULL,));
                }

                // info_course_delete
                if (0 === strpos($pathinfo, '/info-course/delete') && preg_match('#^/info\\-course/delete(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'info_course_delete')), array (  '_controller' => 'AdminBundle\\Controller\\InfoCourseController::deleteAction',  'id' => NULL,));
                }

            }

            // unidad_index
            if ($pathinfo === '/index-unidad') {
                return array (  '_controller' => 'AdminBundle\\Controller\\UnidadController::indexAction',  '_route' => 'unidad_index',);
            }

        }

        // unidad_add
        if ($pathinfo === '/add-unidad') {
            return array (  '_controller' => 'AdminBundle\\Controller\\UnidadController::addAction',  '_route' => 'unidad_add',);
        }

        // unidad_edit
        if (0 === strpos($pathinfo, '/edit-unidad') && preg_match('#^/edit\\-unidad(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'unidad_edit')), array (  '_controller' => 'AdminBundle\\Controller\\UnidadController::editAction',  'id' => NULL,));
        }

        // unidad_delete
        if (0 === strpos($pathinfo, '/delete-unidad') && preg_match('#^/delete\\-unidad(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'unidad_delete')), array (  '_controller' => 'AdminBundle\\Controller\\UnidadController::deleteAction',  'id' => NULL,));
        }

        // course_index
        if ($pathinfo === '/index-course') {
            return array (  '_controller' => 'AdminBundle\\Controller\\CourseController::indexAction',  '_route' => 'course_index',);
        }

        // course_add
        if ($pathinfo === '/add-course') {
            return array (  '_controller' => 'AdminBundle\\Controller\\CourseController::addAction',  '_route' => 'course_add',);
        }

        // course_edit
        if (0 === strpos($pathinfo, '/edit-course') && preg_match('#^/edit\\-course(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_edit')), array (  '_controller' => 'AdminBundle\\Controller\\CourseController::editAction',  'id' => NULL,));
        }

        // course_delete
        if (0 === strpos($pathinfo, '/delete-course') && preg_match('#^/delete\\-course(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_delete')), array (  '_controller' => 'AdminBundle\\Controller\\CourseController::deleteAction',  'id' => NULL,));
        }

        // supplementary_reading_index
        if ($pathinfo === '/index-supplementary-reading') {
            return array (  '_controller' => 'AdminBundle\\Controller\\SupplementaryReadingController::indexAction',  '_route' => 'supplementary_reading_index',);
        }

        // supplementary_reading_add
        if ($pathinfo === '/add-supplementary-reading') {
            return array (  '_controller' => 'AdminBundle\\Controller\\SupplementaryReadingController::addAction',  '_route' => 'supplementary_reading_add',);
        }

        // supplementary_reading_edit
        if (0 === strpos($pathinfo, '/edit-supplementary-reading') && preg_match('#^/edit\\-supplementary\\-reading(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supplementary_reading_edit')), array (  '_controller' => 'AdminBundle\\Controller\\SupplementaryReadingController::editAction',  'id' => NULL,));
        }

        // supplementary_reading_delete
        if (0 === strpos($pathinfo, '/delete-supplementary-reading') && preg_match('#^/delete\\-supplementary\\-reading(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supplementary_reading_delete')), array (  '_controller' => 'AdminBundle\\Controller\\SupplementaryReadingController::deleteAction',  'id' => NULL,));
        }

        // mandatory_reading_index
        if ($pathinfo === '/index-mandatory-reading') {
            return array (  '_controller' => 'AdminBundle\\Controller\\MandatoryReadingController::indexAction',  '_route' => 'mandatory_reading_index',);
        }

        // mandatory_reading_add
        if ($pathinfo === '/add-mandatory-reading') {
            return array (  '_controller' => 'AdminBundle\\Controller\\MandatoryReadingController::addAction',  '_route' => 'mandatory_reading_add',);
        }

        // mandatory_reading_edit
        if (0 === strpos($pathinfo, '/edit-mandatory-reading') && preg_match('#^/edit\\-mandatory\\-reading(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mandatory_reading_edit')), array (  '_controller' => 'AdminBundle\\Controller\\MandatoryReadingController::editAction',  'id' => NULL,));
        }

        // mandatory_reading_delete
        if (0 === strpos($pathinfo, '/delete-mandatory-reading') && preg_match('#^/delete\\-mandatory\\-reading(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mandatory_reading_delete')), array (  '_controller' => 'AdminBundle\\Controller\\MandatoryReadingController::deleteAction',  'id' => NULL,));
        }

        // exam_index
        if ($pathinfo === '/index-exam') {
            return array (  '_controller' => 'AdminBundle\\Controller\\ExamController::indexAction',  '_route' => 'exam_index',);
        }

        // exam_edit
        if (0 === strpos($pathinfo, '/edit-exam') && preg_match('#^/edit\\-exam(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'exam_edit')), array (  '_controller' => 'AdminBundle\\Controller\\ExamController::editAction',  'id' => NULL,));
        }

        // exam_delete
        if (0 === strpos($pathinfo, '/delete-exam') && preg_match('#^/delete\\-exam(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'exam_delete')), array (  '_controller' => 'AdminBundle\\Controller\\ExamController::deleteAction',  'id' => NULL,));
        }

        // question_index
        if ($pathinfo === '/index-question') {
            return array (  '_controller' => 'AdminBundle\\Controller\\QuestionController::indexAction',  '_route' => 'question_index',);
        }

        // question_add
        if ($pathinfo === '/add-question') {
            return array (  '_controller' => 'AdminBundle\\Controller\\QuestionController::addAction',  '_route' => 'question_add',);
        }

        // question_edit
        if (0 === strpos($pathinfo, '/edit-question') && preg_match('#^/edit\\-question(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'question_edit')), array (  '_controller' => 'AdminBundle\\Controller\\QuestionController::editAction',  'id' => NULL,));
        }

        // question_delete
        if (0 === strpos($pathinfo, '/delete-question') && preg_match('#^/delete\\-question(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'question_delete')), array (  '_controller' => 'AdminBundle\\Controller\\QuestionController::deleteAction',  'id' => NULL,));
        }

        // answer_index
        if ($pathinfo === '/index-answer') {
            return array (  '_controller' => 'AdminBundle\\Controller\\AnswerController::indexAction',  '_route' => 'answer_index',);
        }

        // answer_add
        if ($pathinfo === '/add-answer') {
            return array (  '_controller' => 'AdminBundle\\Controller\\AnswerController::addAction',  '_route' => 'answer_add',);
        }

        // answer_edit
        if (0 === strpos($pathinfo, '/edit-answer') && preg_match('#^/edit\\-answer(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'answer_edit')), array (  '_controller' => 'AdminBundle\\Controller\\AnswerController::editAction',  'id' => NULL,));
        }

        // answer_delete
        if (0 === strpos($pathinfo, '/delete-answer') && preg_match('#^/delete\\-answer(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'answer_delete')), array (  '_controller' => 'AdminBundle\\Controller\\AnswerController::deleteAction',  'id' => NULL,));
        }

        if (0 === strpos($pathinfo, '/file')) {
            // files_index
            if ($pathinfo === '/file') {
                return array (  '_controller' => 'AdminBundle\\Controller\\FileController::indexAction',  '_route' => 'files_index',);
            }

            if (0 === strpos($pathinfo, '/file-')) {
                // file_add
                if ($pathinfo === '/file-add') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\FileController::addAction',  '_route' => 'file_add',);
                }

                // file_edit
                if (0 === strpos($pathinfo, '/file-edit') && preg_match('#^/file\\-edit(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'file_edit')), array (  '_controller' => 'AdminBundle\\Controller\\FileController::editAction',  'id' => NULL,));
                }

                // file_delete
                if (0 === strpos($pathinfo, '/file-delete') && preg_match('#^/file\\-delete(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'file_delete')), array (  '_controller' => 'AdminBundle\\Controller\\FileController::deleteAction',  'id' => NULL,));
                }

            }

        }

        if (0 === strpos($pathinfo, '/dynamic-')) {
            // dynamic_unidades
            if ($pathinfo === '/dynamic-unidades') {
                return array (  '_controller' => 'AdminBundle\\Controller\\FileController::unidadAction',  '_route' => 'dynamic_unidades',);
            }

            // dynamic_topics
            if ($pathinfo === '/dynamic-topics') {
                return array (  '_controller' => 'AdminBundle\\Controller\\FileController::topicAction',  '_route' => 'dynamic_topics',);
            }

        }

        // forgot-password
        if ($pathinfo === '/forgot-password') {
            return array (  '_controller' => 'AdminBundle\\Controller\\PasswordController::forgotPasswordAction',  '_route' => 'forgot-password',);
        }

        if (0 === strpos($pathinfo, '/ch')) {
            // checkout-password
            if ($pathinfo === '/checkout-password') {
                return array (  '_controller' => 'AdminBundle\\Controller\\PasswordController::checkoutPasswordAction',  '_route' => 'checkout-password',);
            }

            // change-password
            if (0 === strpos($pathinfo, '/change-password') && preg_match('#^/change\\-password(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'change-password')), array (  '_controller' => 'AdminBundle\\Controller\\PasswordController::changePasswordAction',  'id' => NULL,));
            }

        }

        // success-password
        if ($pathinfo === '/success-password') {
            return array (  '_controller' => 'AdminBundle\\Controller\\PasswordController::successPasswordAction',  '_route' => 'success-password',);
        }

        // upload_exam_index
        if ($pathinfo === '/index-upload-exam') {
            return array (  '_controller' => 'AdminBundle\\Controller\\UploadExamController::indexAction',  '_route' => 'upload_exam_index',);
        }

        // upload_exam_add
        if ($pathinfo === '/add-upload-exam') {
            return array (  '_controller' => 'AdminBundle\\Controller\\UploadExamController::addAction',  '_route' => 'upload_exam_add',);
        }

        // upload_exam_edit
        if (0 === strpos($pathinfo, '/edit-upload-exam') && preg_match('#^/edit\\-upload\\-exam(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'upload_exam_edit')), array (  '_controller' => 'AdminBundle\\Controller\\UploadExamController::editAction',  'id' => NULL,));
        }

        // upload_exam_delete
        if (0 === strpos($pathinfo, '/delete-upload-exam') && preg_match('#^/delete\\-upload\\-exam(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'upload_exam_delete')), array (  '_controller' => 'AdminBundle\\Controller\\UploadExamController::deleteAction',  'id' => NULL,));
        }

        if (0 === strpos($pathinfo, '/a')) {
            // average_user_index
            if ($pathinfo === '/average-index') {
                return array (  '_controller' => 'AdminBundle\\Controller\\AverageController::indexAction',  '_route' => 'average_user_index',);
            }

            // exam_add
            if ($pathinfo === '/add-exam') {
                return array (  '_controller' => 'AdminBundle\\Controller\\ExamController::addAction',  '_route' => 'exam_add',);
            }

        }

        if (0 === strpos($pathinfo, '/inscription')) {
            // inscription_index
            if ($pathinfo === '/inscriptions') {
                return array (  '_controller' => 'AdminBundle\\Controller\\InscriptionController::indexAction',  '_route' => 'inscription_index',);
            }

            // inscription_delete
            if (0 === strpos($pathinfo, '/inscription-delete') && preg_match('#^/inscription\\-delete(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscription_delete')), array (  '_controller' => 'AdminBundle\\Controller\\InscriptionController::deleteAction',  'id' => NULL,));
            }

        }

        // admin_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'AdminBundle\\Controller\\UserController::loginAction',  '_route' => 'admin_login',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
