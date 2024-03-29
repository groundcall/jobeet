<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            if (0 === strpos($pathinfo, '/admin/ibw/jobeet')) {
                if (0 === strpos($pathinfo, '/admin/ibw/jobeet/category')) {
                    // admin_ibw_jobeet_category_list
                    if ($pathinfo === '/admin/ibw/jobeet/category/list') {
                        return array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\CategoryAdminController::listAction',  '_sonata_admin' => 'ibw.jobeet.admin.category',  '_sonata_name' => 'admin_ibw_jobeet_category_list',  '_route' => 'admin_ibw_jobeet_category_list',);
                    }

                    // admin_ibw_jobeet_category_create
                    if ($pathinfo === '/admin/ibw/jobeet/category/create') {
                        return array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\CategoryAdminController::createAction',  '_sonata_admin' => 'ibw.jobeet.admin.category',  '_sonata_name' => 'admin_ibw_jobeet_category_create',  '_route' => 'admin_ibw_jobeet_category_create',);
                    }

                    // admin_ibw_jobeet_category_batch
                    if ($pathinfo === '/admin/ibw/jobeet/category/batch') {
                        return array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\CategoryAdminController::batchAction',  '_sonata_admin' => 'ibw.jobeet.admin.category',  '_sonata_name' => 'admin_ibw_jobeet_category_batch',  '_route' => 'admin_ibw_jobeet_category_batch',);
                    }

                    // admin_ibw_jobeet_category_edit
                    if (preg_match('#^/admin/ibw/jobeet/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ibw_jobeet_category_edit')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\CategoryAdminController::editAction',  '_sonata_admin' => 'ibw.jobeet.admin.category',  '_sonata_name' => 'admin_ibw_jobeet_category_edit',));
                    }

                    // admin_ibw_jobeet_category_delete
                    if (preg_match('#^/admin/ibw/jobeet/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ibw_jobeet_category_delete')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\CategoryAdminController::deleteAction',  '_sonata_admin' => 'ibw.jobeet.admin.category',  '_sonata_name' => 'admin_ibw_jobeet_category_delete',));
                    }

                    // admin_ibw_jobeet_category_show
                    if (preg_match('#^/admin/ibw/jobeet/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ibw_jobeet_category_show')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\CategoryAdminController::showAction',  '_sonata_admin' => 'ibw.jobeet.admin.category',  '_sonata_name' => 'admin_ibw_jobeet_category_show',));
                    }

                    // admin_ibw_jobeet_category_export
                    if ($pathinfo === '/admin/ibw/jobeet/category/export') {
                        return array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\CategoryAdminController::exportAction',  '_sonata_admin' => 'ibw.jobeet.admin.category',  '_sonata_name' => 'admin_ibw_jobeet_category_export',  '_route' => 'admin_ibw_jobeet_category_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/ibw/jobeet/job')) {
                    // admin_ibw_jobeet_job_list
                    if ($pathinfo === '/admin/ibw/jobeet/job/list') {
                        return array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobAdminController::listAction',  '_sonata_admin' => 'ibw.jobeet.admin.job',  '_sonata_name' => 'admin_ibw_jobeet_job_list',  '_route' => 'admin_ibw_jobeet_job_list',);
                    }

                    // admin_ibw_jobeet_job_create
                    if ($pathinfo === '/admin/ibw/jobeet/job/create') {
                        return array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobAdminController::createAction',  '_sonata_admin' => 'ibw.jobeet.admin.job',  '_sonata_name' => 'admin_ibw_jobeet_job_create',  '_route' => 'admin_ibw_jobeet_job_create',);
                    }

                    // admin_ibw_jobeet_job_batch
                    if ($pathinfo === '/admin/ibw/jobeet/job/batch') {
                        return array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobAdminController::batchAction',  '_sonata_admin' => 'ibw.jobeet.admin.job',  '_sonata_name' => 'admin_ibw_jobeet_job_batch',  '_route' => 'admin_ibw_jobeet_job_batch',);
                    }

                    // admin_ibw_jobeet_job_edit
                    if (preg_match('#^/admin/ibw/jobeet/job/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ibw_jobeet_job_edit')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobAdminController::editAction',  '_sonata_admin' => 'ibw.jobeet.admin.job',  '_sonata_name' => 'admin_ibw_jobeet_job_edit',));
                    }

                    // admin_ibw_jobeet_job_delete
                    if (preg_match('#^/admin/ibw/jobeet/job/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ibw_jobeet_job_delete')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobAdminController::deleteAction',  '_sonata_admin' => 'ibw.jobeet.admin.job',  '_sonata_name' => 'admin_ibw_jobeet_job_delete',));
                    }

                    // admin_ibw_jobeet_job_show
                    if (preg_match('#^/admin/ibw/jobeet/job/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ibw_jobeet_job_show')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobAdminController::showAction',  '_sonata_admin' => 'ibw.jobeet.admin.job',  '_sonata_name' => 'admin_ibw_jobeet_job_show',));
                    }

                    // admin_ibw_jobeet_job_export
                    if ($pathinfo === '/admin/ibw/jobeet/job/export') {
                        return array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobAdminController::exportAction',  '_sonata_admin' => 'ibw.jobeet.admin.job',  '_sonata_name' => 'admin_ibw_jobeet_job_export',  '_route' => 'admin_ibw_jobeet_job_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/ibw/jobeet/affiliate')) {
                    // admin_ibw_jobeet_affiliate_list
                    if ($pathinfo === '/admin/ibw/jobeet/affiliate/list') {
                        return array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\AffiliateAdminController::listAction',  '_sonata_admin' => 'ibw.jobeet.admin.affiliate',  '_sonata_name' => 'admin_ibw_jobeet_affiliate_list',  '_route' => 'admin_ibw_jobeet_affiliate_list',);
                    }

                    // admin_ibw_jobeet_affiliate_create
                    if ($pathinfo === '/admin/ibw/jobeet/affiliate/create') {
                        return array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\AffiliateAdminController::createAction',  '_sonata_admin' => 'ibw.jobeet.admin.affiliate',  '_sonata_name' => 'admin_ibw_jobeet_affiliate_create',  '_route' => 'admin_ibw_jobeet_affiliate_create',);
                    }

                    // admin_ibw_jobeet_affiliate_batch
                    if ($pathinfo === '/admin/ibw/jobeet/affiliate/batch') {
                        return array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\AffiliateAdminController::batchAction',  '_sonata_admin' => 'ibw.jobeet.admin.affiliate',  '_sonata_name' => 'admin_ibw_jobeet_affiliate_batch',  '_route' => 'admin_ibw_jobeet_affiliate_batch',);
                    }

                    // admin_ibw_jobeet_affiliate_edit
                    if (preg_match('#^/admin/ibw/jobeet/affiliate/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ibw_jobeet_affiliate_edit')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\AffiliateAdminController::editAction',  '_sonata_admin' => 'ibw.jobeet.admin.affiliate',  '_sonata_name' => 'admin_ibw_jobeet_affiliate_edit',));
                    }

                    // admin_ibw_jobeet_affiliate_delete
                    if (preg_match('#^/admin/ibw/jobeet/affiliate/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ibw_jobeet_affiliate_delete')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\AffiliateAdminController::deleteAction',  '_sonata_admin' => 'ibw.jobeet.admin.affiliate',  '_sonata_name' => 'admin_ibw_jobeet_affiliate_delete',));
                    }

                    // admin_ibw_jobeet_affiliate_show
                    if (preg_match('#^/admin/ibw/jobeet/affiliate/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ibw_jobeet_affiliate_show')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\AffiliateAdminController::showAction',  '_sonata_admin' => 'ibw.jobeet.admin.affiliate',  '_sonata_name' => 'admin_ibw_jobeet_affiliate_show',));
                    }

                    // admin_ibw_jobeet_affiliate_export
                    if ($pathinfo === '/admin/ibw/jobeet/affiliate/export') {
                        return array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\AffiliateAdminController::exportAction',  '_sonata_admin' => 'ibw.jobeet.admin.affiliate',  '_sonata_name' => 'admin_ibw_jobeet_affiliate_export',  '_route' => 'admin_ibw_jobeet_affiliate_export',);
                    }

                    // admin_ibw_jobeet_affiliate_activate
                    if (preg_match('#^/admin/ibw/jobeet/affiliate/(?P<id>[^/]++)/activate$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ibw_jobeet_affiliate_activate')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\AffiliateAdminController::activateAction',  '_sonata_admin' => 'ibw.jobeet.admin.affiliate',  '_sonata_name' => 'admin_ibw_jobeet_affiliate_activate',));
                    }

                    // admin_ibw_jobeet_affiliate_deactivate
                    if (preg_match('#^/admin/ibw/jobeet/affiliate/(?P<id>[^/]++)/deactivate$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ibw_jobeet_affiliate_deactivate')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\AffiliateAdminController::deactivateAction',  '_sonata_admin' => 'ibw.jobeet.admin.affiliate',  '_sonata_name' => 'admin_ibw_jobeet_affiliate_deactivate',));
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // IbwJobeetBundle_category
        if (preg_match('#^/(?P<_locale>en|fr)/category/(?P<slug>[^/]++)(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'IbwJobeetBundle_category')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\CategoryController::showAction',  'page' => 1,));
        }

        // ibw_job
        if (preg_match('#^/(?P<_locale>en|fr)/job/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ibw_job');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_job')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::indexAction',));
        }

        // ibw_job_show
        if (preg_match('#^/(?P<_locale>en|fr)/job/(?P<company>[^/]++)/(?P<location>[^/]++)/(?P<id>\\d+)/(?P<position>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_job_show')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::showAction',));
        }

        // ibw_job_preview
        if (preg_match('#^/(?P<_locale>en|fr)/job/(?P<company>[^/]++)/(?P<location>[^/]++)/(?P<token>\\w+)/(?P<position>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_job_preview')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::previewAction',));
        }

        // ibw_job_new
        if (preg_match('#^/(?P<_locale>en|fr)/job/new$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_job_new')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::newAction',));
        }

        // ibw_job_create
        if (preg_match('#^/(?P<_locale>en|fr)/job/create$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ibw_job_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_job_create')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::createAction',));
        }
        not_ibw_job_create:

        // ibw_job_edit
        if (preg_match('#^/(?P<_locale>en|fr)/job/(?P<token>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_job_edit')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::editAction',));
        }

        // ibw_job_update
        if (preg_match('#^/(?P<_locale>en|fr)/job/(?P<token>[^/]++)/update$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                $allow = array_merge($allow, array('POST', 'PUT'));
                goto not_ibw_job_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_job_update')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::updateAction',));
        }
        not_ibw_job_update:

        // ibw_job_delete
        if (preg_match('#^/(?P<_locale>en|fr)/job/(?P<token>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                $allow = array_merge($allow, array('POST', 'DELETE'));
                goto not_ibw_job_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_job_delete')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::deleteAction',));
        }
        not_ibw_job_delete:

        // ibw_job_publish
        if (preg_match('#^/(?P<_locale>en|fr)/job/(?P<token>[^/]++)/publish$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ibw_job_publish;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_job_publish')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::publishAction',));
        }
        not_ibw_job_publish:

        // ibw_job_extend
        if (preg_match('#^/(?P<_locale>en|fr)/job/(?P<token>[^/]++)/extend$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ibw_job_extend;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_job_extend')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::extendAction',));
        }
        not_ibw_job_extend:

        // ibw_job_search
        if (preg_match('#^/(?P<_locale>en|fr)/job/search$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_job_search')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::searchAction',));
        }

        // ibw_jobeet_homepage
        if (preg_match('#^/(?P<_locale>en|fr)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ibw_jobeet_homepage');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_jobeet_homepage')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::indexAction',));
        }

        // IbwJobeetBundle_api
        if (0 === strpos($pathinfo, '/api') && preg_match('#^/api/(?P<token>[^/]++)/jobs\\.(?P<_format>xml|json|yaml)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'IbwJobeetBundle_api')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\ApiController::listAction',));
        }

        // ibw_affiliate_new
        if (preg_match('#^/(?P<_locale>en|fr)/affiliate/new$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_affiliate_new')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\AffiliateController::newAction',));
        }

        // ibw_affiliate_create
        if (preg_match('#^/(?P<_locale>en|fr)/affiliate/create$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ibw_affiliate_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_affiliate_create')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\AffiliateController::createAction',));
        }
        not_ibw_affiliate_create:

        // ibw_affiliate_wait
        if (preg_match('#^/(?P<_locale>en|fr)/affiliate/wait$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ibw_affiliate_wait')), array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\AffiliateController::waitAction',));
        }

        // IbwJobeetBundle_nonlocalized
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'IbwJobeetBundle_nonlocalized');
            }

            return array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\JobController::indexAction',  '_route' => 'IbwJobeetBundle_nonlocalized',);
        }

        // IbwJobeetBundle_changeLanguage
        if ($pathinfo === '/change_language') {
            return array (  '_controller' => 'Ibw\\JobeetBundle\\Controller\\DefaultController::changeLanguageAction',  '_route' => 'IbwJobeetBundle_changeLanguage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
