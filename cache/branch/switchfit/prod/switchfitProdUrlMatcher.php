<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * switchfitProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class switchfitProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/connect')) {
            // hwi_oauth_connect
            if (rtrim($pathinfo, '/') === '/connect') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'hwi_oauth_connect');
                }

                return array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectAction',  '_route' => 'hwi_oauth_connect',);
            }

            // hwi_oauth_connect_service
            if (0 === strpos($pathinfo, '/connect/service') && preg_match('#^/connect/service/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_connect_service')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::connectServiceAction',));
            }

            // hwi_oauth_connect_registration
            if (0 === strpos($pathinfo, '/connect/registration') && preg_match('#^/connect/registration/(?P<key>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_connect_registration')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::registrationAction',));
            }

            // hwi_oauth_service_redirect
            if (preg_match('#^/connect/(?P<service>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hwi_oauth_service_redirect')), array (  '_controller' => 'HWI\\Bundle\\OAuthBundle\\Controller\\ConnectController::redirectToServiceAction',));
            }

            // facebook_login
            if ($pathinfo === '/connect/facebook') {
                return array('_route' => 'facebook_login');
            }

        }

        if (0 === strpos($pathinfo, '/admin/e')) {
            // ef_connect
            if ($pathinfo === '/admin/efconnect') {
                return array (  '_controller' => 'Nordcode\\AdminBundle\\Controller\\FinderController::loadAction',  '_route' => 'ef_connect',);
            }

            // elfinder
            if ($pathinfo === '/admin/elfinder') {
                return array (  '_controller' => 'Nordcode\\AdminBundle\\Controller\\FinderController::showAction',  '_route' => 'elfinder',);
            }

        }

        // nordcode_switchfit_dashboard
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'nordcode_switchfit_dashboard');
            }

            return array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\DashboardController::indexAction',  '_route' => 'nordcode_switchfit_dashboard',);
        }

        // nordcode_switchfit_success
        if ($pathinfo === '/success') {
            return array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\SuccessController::indexAction',  '_route' => 'nordcode_switchfit_success',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // nordcode_user_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_nordcode_user_login;
                    }

                    return array (  '_controller' => 'Nordcode\\UserBundle\\Controller\\Switchfit\\SecurityController::loginAction',  '_route' => 'nordcode_user_login',);
                }
                not_nordcode_user_login:

                // nordcode_user_login_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_nordcode_user_login_check;
                    }

                    return array (  '_controller' => 'Nordcode\\UserBundle\\Controller\\Switchfit\\SecurityController::checkAction',  '_route' => 'nordcode_user_login_check',);
                }
                not_nordcode_user_login_check:

            }

            // nordcode_user_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_nordcode_user_logout;
                }

                return array (  '_controller' => 'Nordcode\\UserBundle\\Controller\\Switchfit\\SecurityController::logoutAction',  '_route' => 'nordcode_user_logout',);
            }
            not_nordcode_user_logout:

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // nordcode_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_nordcode_user_resetting_request;
                }

                return array (  '_controller' => 'Nordcode\\UserBundle\\Controller\\Switchfit\\ResettingController::requestAction',  '_route' => 'nordcode_user_resetting_request',);
            }
            not_nordcode_user_resetting_request:

            // nordcode_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_nordcode_user_resetting_send_email;
                }

                return array (  '_controller' => 'Nordcode\\UserBundle\\Controller\\Switchfit\\ResettingController::sendEmailAction',  '_route' => 'nordcode_user_resetting_send_email',);
            }
            not_nordcode_user_resetting_send_email:

            // nordcode_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_nordcode_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nordcode_user_resetting_reset')), array (  '_controller' => 'Nordcode\\UserBundle\\Controller\\Switchfit\\ResettingController::resetAction',));
            }
            not_nordcode_user_resetting_reset:

        }

        $host = $this->context->getHost();

        if (preg_match('#^app\\.switchfit\\.lo$#si', $host, $hostMatches)) {
            // nordcode_app_resetting_reset
            if (0 === strpos($pathinfo, '/app-resetting') && preg_match('#^/app\\-resetting/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nordcode_app_resetting_reset')), array ());
            }

        }

        if (0 === strpos($pathinfo, '/payment')) {
            // switchfit_signup_payment
            if ($pathinfo === '/payment') {
                return array (  '_controller' => 'Nordcode\\SignupBundle\\Controller\\PaymentController::paymentAction',  '_route' => 'switchfit_signup_payment',);
            }

            // switchfit_signup_payment_notify
            if ($pathinfo === '/payment/notify') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_switchfit_signup_payment_notify;
                }

                return array (  '_controller' => 'Nordcode\\SignupBundle\\Controller\\PaymentController::notifyAction',  '_route' => 'switchfit_signup_payment_notify',);
            }
            not_switchfit_signup_payment_notify:

            // switchfit_signup_payment_success
            if ($pathinfo === '/payment/success') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_switchfit_signup_payment_success;
                }

                return array (  '_controller' => 'Nordcode\\SignupBundle\\Controller\\PaymentController::successAction',  '_route' => 'switchfit_signup_payment_success',);
            }
            not_switchfit_signup_payment_success:

            // switchfit_signup_payment_delayed
            if ($pathinfo === '/payment/delayed') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_switchfit_signup_payment_delayed;
                }

                return array (  '_controller' => 'Nordcode\\SignupBundle\\Controller\\PaymentController::paymentDelayedAction',  '_route' => 'switchfit_signup_payment_delayed',);
            }
            not_switchfit_signup_payment_delayed:

            if (0 === strpos($pathinfo, '/payment/summary')) {
                // switchfit_signup_payment_pre_summary
                if ($pathinfo === '/payment/summary') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_switchfit_signup_payment_pre_summary;
                    }

                    return array (  '_controller' => 'Nordcode\\SignupBundle\\Controller\\PaymentController::paymentPreSummaryAction',  '_route' => 'switchfit_signup_payment_pre_summary',);
                }
                not_switchfit_signup_payment_pre_summary:

                // switchfit_signup_payment_pre_summary_user_course
                if (preg_match('#^/payment/summary/(?P<userCourseId>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_switchfit_signup_payment_pre_summary_user_course;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'switchfit_signup_payment_pre_summary_user_course')), array (  '_controller' => 'Nordcode\\SignupBundle\\Controller\\PaymentController::paymentPreSummaryUserCourseAction',));
                }
                not_switchfit_signup_payment_pre_summary_user_course:

            }

            // switchfit_signup_payment_delayed_user_course
            if (0 === strpos($pathinfo, '/payment/delayed') && preg_match('#^/payment/delayed/(?P<userCourseId>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_switchfit_signup_payment_delayed_user_course;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'switchfit_signup_payment_delayed_user_course')), array (  '_controller' => 'Nordcode\\SignupBundle\\Controller\\PaymentController::paymentDelayedUserCourseAction',));
            }
            not_switchfit_signup_payment_delayed_user_course:

            if (0 === strpos($pathinfo, '/payment/success-')) {
                // switchfit_signup_payment_success_discount_100
                if ($pathinfo === '/payment/success-promo100') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_switchfit_signup_payment_success_discount_100;
                    }

                    return array (  '_controller' => 'Nordcode\\SignupBundle\\Controller\\PaymentController::successPromo100Action',  '_route' => 'switchfit_signup_payment_success_discount_100',);
                }
                not_switchfit_signup_payment_success_discount_100:

                // switchfit_signup_payment_success_delayed_payment
                if ($pathinfo === '/payment/success-delayed-payment') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_switchfit_signup_payment_success_delayed_payment;
                    }

                    return array (  '_controller' => 'Nordcode\\SignupBundle\\Controller\\PaymentController::successDelayedPaymentAction',  '_route' => 'switchfit_signup_payment_success_delayed_payment',);
                }
                not_switchfit_signup_payment_success_delayed_payment:

            }

            // switchfit_signup_payment_cancel
            if ($pathinfo === '/payment/cancel') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_switchfit_signup_payment_cancel;
                }

                return array (  '_controller' => 'Nordcode\\SignupBundle\\Controller\\PaymentController::cancelAction',  '_route' => 'switchfit_signup_payment_cancel',);
            }
            not_switchfit_signup_payment_cancel:

        }

        if (preg_match('#^signup\\.switchfit\\.lo$#si', $host, $hostMatches)) {
            // switchfit_signup_register
            if (rtrim($pathinfo, '/') === '') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'switchfit_signup_register');
                }

                return array (  '_controller' => 'Nordcode\\UserBundle\\Controller\\Landing\\RegistrationController::registerAction',  '_route' => 'switchfit_signup_register',);
            }

        }

        if (0 === strpos($pathinfo, '/register')) {
            // switchfit_signup_register_redirect
            if ($pathinfo === '/register/register') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'switchfit_signup_register',  'permanent' => 'true',  '_route' => 'switchfit_signup_register_redirect',);
            }

            // switchfit_signup_register_complete
            if ($pathinfo === '/register/confirm') {
                return array (  '_controller' => 'Nordcode\\UserBundle\\Controller\\Landing\\RegistrationController::registerCompleteAction',  '_route' => 'switchfit_signup_register_complete',);
            }

        }

        // switchfit_signup_register_promo_code
        if (0 === strpos($pathinfo, '/promo') && preg_match('#^/promo/(?P<promoCode>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'switchfit_signup_register_promo_code')), array (  '_controller' => 'Nordcode\\UserBundle\\Controller\\Switchfit\\RegistrationController::promoCodeAction',));
        }

        // switchfit_signup_terms
        if ($pathinfo === '/terms') {
            return array (  '_controller' => 'Nordcode\\UserBundle\\Controller\\Landing\\RegistrationController::termsAction',  '_route' => 'switchfit_signup_terms',);
        }

        if (preg_match('#^app\\.switchfit\\.lo$#si', $host, $hostMatches)) {
            if (0 === strpos($pathinfo, '/register/co')) {
                // nordcode_user_registration
                if ($pathinfo === '/register/course') {
                    return array (  '_controller' => 'Nordcode\\UserBundle\\Controller\\Switchfit\\RegistrationController::registerAction',  '_route' => 'nordcode_user_registration',);
                }

                // switchfit_signup_confirm
                if (0 === strpos($pathinfo, '/register/confirm') && preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_switchfit_signup_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'switchfit_signup_confirm')), array (  '_controller' => 'Nordcode\\UserBundle\\Controller\\Switchfit\\RegistrationController::confirmAction',));
                }
                not_switchfit_signup_confirm:

            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin')) {
                // sonata_admin_redirect
                if (rtrim($pathinfo, '/') === '/admin') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                    }

                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_sonata_admin' => 'main',  '_route' => 'sonata_admin_redirect',);
                }

                // sonata_admin_dashboard
                if ($pathinfo === '/admin/dashboard') {
                    return array (  '_controller' => 'Nordcode\\AdminPageBoardBundle\\Controller\\CoreController::dashboardAction',  '_sonata_admin' => 'main',  '_route' => 'sonata_admin_dashboard',);
                }

                if (0 === strpos($pathinfo, '/admin/core')) {
                    // sonata_admin_retrieve_form_element
                    if ($pathinfo === '/admin/core/get-form-field-element') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_sonata_admin' => 'main',  '_route' => 'sonata_admin_retrieve_form_element',);
                    }

                    // sonata_admin_append_form_element
                    if ($pathinfo === '/admin/core/append-form-field-element') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_sonata_admin' => 'main',  '_route' => 'sonata_admin_append_form_element',);
                    }

                    // sonata_admin_short_object_information
                    if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',  '_sonata_admin' => 'main',));
                    }

                    // sonata_admin_set_object_field_value
                    if ($pathinfo === '/admin/core/set-object-field-value') {
                        return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_sonata_admin' => 'main',  '_route' => 'sonata_admin_set_object_field_value',);
                    }

                }

                // sonata_admin_search
                if ($pathinfo === '/admin/search') {
                    return array (  '_controller' => 'Nordcode\\AdminPageBoardBundle\\Controller\\CoreController::searchAction',  '_sonata_admin' => 'main',  '_route' => 'sonata_admin_search',);
                }

                if (0 === strpos($pathinfo, '/admin/nordcode')) {
                    if (0 === strpos($pathinfo, '/admin/nordcode/user')) {
                        if (0 === strpos($pathinfo, '/admin/nordcode/user/user')) {
                            // admin_nordcode_user_user_list
                            if ($pathinfo === '/admin/nordcode/user/user/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_nordcode_user_user_list',  '_route' => 'admin_nordcode_user_user_list',);
                            }

                            // admin_nordcode_user_user_create
                            if ($pathinfo === '/admin/nordcode/user/user/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_nordcode_user_user_create',  '_route' => 'admin_nordcode_user_user_create',);
                            }

                            // admin_nordcode_user_user_batch
                            if ($pathinfo === '/admin/nordcode/user/user/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_nordcode_user_user_batch',  '_route' => 'admin_nordcode_user_user_batch',);
                            }

                            // admin_nordcode_user_user_edit
                            if (preg_match('#^/admin/nordcode/user/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_user_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_nordcode_user_user_edit',));
                            }

                            // admin_nordcode_user_user_delete
                            if (preg_match('#^/admin/nordcode/user/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_user_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_nordcode_user_user_delete',));
                            }

                            // admin_nordcode_user_user_show
                            if (preg_match('#^/admin/nordcode/user/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_user_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_nordcode_user_user_show',));
                            }

                            // admin_nordcode_user_user_export
                            if ($pathinfo === '/admin/nordcode/user/user/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_nordcode_user_user_export',  '_route' => 'admin_nordcode_user_user_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/nordcode/user/group')) {
                            // admin_nordcode_user_group_list
                            if ($pathinfo === '/admin/nordcode/user/group/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_nordcode_user_group_list',  '_route' => 'admin_nordcode_user_group_list',);
                            }

                            // admin_nordcode_user_group_create
                            if ($pathinfo === '/admin/nordcode/user/group/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_nordcode_user_group_create',  '_route' => 'admin_nordcode_user_group_create',);
                            }

                            // admin_nordcode_user_group_batch
                            if ($pathinfo === '/admin/nordcode/user/group/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_nordcode_user_group_batch',  '_route' => 'admin_nordcode_user_group_batch',);
                            }

                            // admin_nordcode_user_group_edit
                            if (preg_match('#^/admin/nordcode/user/group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_user_group_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_nordcode_user_group_edit',));
                            }

                            // admin_nordcode_user_group_delete
                            if (preg_match('#^/admin/nordcode/user/group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_user_group_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_nordcode_user_group_delete',));
                            }

                            // admin_nordcode_user_group_show
                            if (preg_match('#^/admin/nordcode/user/group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_user_group_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_nordcode_user_group_show',));
                            }

                            // admin_nordcode_user_group_export
                            if ($pathinfo === '/admin/nordcode/user/group/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_nordcode_user_group_export',  '_route' => 'admin_nordcode_user_group_export',);
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/nordcode/geo/c')) {
                        if (0 === strpos($pathinfo, '/admin/nordcode/geo/city')) {
                            // admin_nordcode_geo_city_list
                            if ($pathinfo === '/admin/nordcode/geo/city/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_geo.admin.city',  '_sonata_name' => 'admin_nordcode_geo_city_list',  '_route' => 'admin_nordcode_geo_city_list',);
                            }

                            // admin_nordcode_geo_city_create
                            if ($pathinfo === '/admin/nordcode/geo/city/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_geo.admin.city',  '_sonata_name' => 'admin_nordcode_geo_city_create',  '_route' => 'admin_nordcode_geo_city_create',);
                            }

                            // admin_nordcode_geo_city_batch
                            if ($pathinfo === '/admin/nordcode/geo/city/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_geo.admin.city',  '_sonata_name' => 'admin_nordcode_geo_city_batch',  '_route' => 'admin_nordcode_geo_city_batch',);
                            }

                            // admin_nordcode_geo_city_edit
                            if (preg_match('#^/admin/nordcode/geo/city/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_geo_city_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_geo.admin.city',  '_sonata_name' => 'admin_nordcode_geo_city_edit',));
                            }

                            // admin_nordcode_geo_city_delete
                            if (preg_match('#^/admin/nordcode/geo/city/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_geo_city_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_geo.admin.city',  '_sonata_name' => 'admin_nordcode_geo_city_delete',));
                            }

                            // admin_nordcode_geo_city_show
                            if (preg_match('#^/admin/nordcode/geo/city/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_geo_city_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_geo.admin.city',  '_sonata_name' => 'admin_nordcode_geo_city_show',));
                            }

                            // admin_nordcode_geo_city_export
                            if ($pathinfo === '/admin/nordcode/geo/city/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_geo.admin.city',  '_sonata_name' => 'admin_nordcode_geo_city_export',  '_route' => 'admin_nordcode_geo_city_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/nordcode/geo/country')) {
                            // admin_nordcode_geo_country_list
                            if ($pathinfo === '/admin/nordcode/geo/country/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_geo.admin.country',  '_sonata_name' => 'admin_nordcode_geo_country_list',  '_route' => 'admin_nordcode_geo_country_list',);
                            }

                            // admin_nordcode_geo_country_create
                            if ($pathinfo === '/admin/nordcode/geo/country/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_geo.admin.country',  '_sonata_name' => 'admin_nordcode_geo_country_create',  '_route' => 'admin_nordcode_geo_country_create',);
                            }

                            // admin_nordcode_geo_country_batch
                            if ($pathinfo === '/admin/nordcode/geo/country/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_geo.admin.country',  '_sonata_name' => 'admin_nordcode_geo_country_batch',  '_route' => 'admin_nordcode_geo_country_batch',);
                            }

                            // admin_nordcode_geo_country_edit
                            if (preg_match('#^/admin/nordcode/geo/country/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_geo_country_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_geo.admin.country',  '_sonata_name' => 'admin_nordcode_geo_country_edit',));
                            }

                            // admin_nordcode_geo_country_delete
                            if (preg_match('#^/admin/nordcode/geo/country/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_geo_country_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_geo.admin.country',  '_sonata_name' => 'admin_nordcode_geo_country_delete',));
                            }

                            // admin_nordcode_geo_country_show
                            if (preg_match('#^/admin/nordcode/geo/country/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_geo_country_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_geo.admin.country',  '_sonata_name' => 'admin_nordcode_geo_country_show',));
                            }

                            // admin_nordcode_geo_country_export
                            if ($pathinfo === '/admin/nordcode/geo/country/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_geo.admin.country',  '_sonata_name' => 'admin_nordcode_geo_country_export',  '_route' => 'admin_nordcode_geo_country_export',);
                            }

                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/payment/core')) {
                    if (0 === strpos($pathinfo, '/admin/payment/core/payment')) {
                        if (0 === strpos($pathinfo, '/admin/payment/core/paymentinstruction')) {
                            // admin_payment_core_paymentinstruction_list
                            if ($pathinfo === '/admin/payment/core/paymentinstruction/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.payment_instruction',  '_sonata_name' => 'admin_payment_core_paymentinstruction_list',  '_route' => 'admin_payment_core_paymentinstruction_list',);
                            }

                            // admin_payment_core_paymentinstruction_show
                            if (preg_match('#^/admin/payment/core/paymentinstruction/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_payment_core_paymentinstruction_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.payment_instruction',  '_sonata_name' => 'admin_payment_core_paymentinstruction_show',));
                            }

                            // admin_payment_core_paymentinstruction_export
                            if ($pathinfo === '/admin/payment/core/paymentinstruction/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.payment_instruction',  '_sonata_name' => 'admin_payment_core_paymentinstruction_export',  '_route' => 'admin_payment_core_paymentinstruction_export',);
                            }

                        }

                        // admin_payment_core_payment_list
                        if ($pathinfo === '/admin/payment/core/payment/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.payment',  '_sonata_name' => 'admin_payment_core_payment_list',  '_route' => 'admin_payment_core_payment_list',);
                        }

                        // admin_payment_core_payment_show
                        if (preg_match('#^/admin/payment/core/payment/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_payment_core_payment_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.payment',  '_sonata_name' => 'admin_payment_core_payment_show',));
                        }

                        // admin_payment_core_payment_export
                        if ($pathinfo === '/admin/payment/core/payment/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.payment',  '_sonata_name' => 'admin_payment_core_payment_export',  '_route' => 'admin_payment_core_payment_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/payment/core/financialtransaction')) {
                        // admin_payment_core_financialtransaction_list
                        if ($pathinfo === '/admin/payment/core/financialtransaction/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.transaction',  '_sonata_name' => 'admin_payment_core_financialtransaction_list',  '_route' => 'admin_payment_core_financialtransaction_list',);
                        }

                        // admin_payment_core_financialtransaction_show
                        if (preg_match('#^/admin/payment/core/financialtransaction/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_payment_core_financialtransaction_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.transaction',  '_sonata_name' => 'admin_payment_core_financialtransaction_show',));
                        }

                        // admin_payment_core_financialtransaction_export
                        if ($pathinfo === '/admin/payment/core/financialtransaction/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.transaction',  '_sonata_name' => 'admin_payment_core_financialtransaction_export',  '_route' => 'admin_payment_core_financialtransaction_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/nordcode')) {
                    if (0 === strpos($pathinfo, '/admin/nordcode/core')) {
                        if (0 === strpos($pathinfo, '/admin/nordcode/core/course')) {
                            if (0 === strpos($pathinfo, '/admin/nordcode/core/coursepr')) {
                                if (0 === strpos($pathinfo, '/admin/nordcode/core/courseprice')) {
                                    // admin_nordcode_core_courseprice_list
                                    if ($pathinfo === '/admin/nordcode/core/courseprice/list') {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.course_price',  '_sonata_name' => 'admin_nordcode_core_courseprice_list',  '_route' => 'admin_nordcode_core_courseprice_list',);
                                    }

                                    // admin_nordcode_core_courseprice_create
                                    if ($pathinfo === '/admin/nordcode/core/courseprice/create') {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.course_price',  '_sonata_name' => 'admin_nordcode_core_courseprice_create',  '_route' => 'admin_nordcode_core_courseprice_create',);
                                    }

                                    // admin_nordcode_core_courseprice_batch
                                    if ($pathinfo === '/admin/nordcode/core/courseprice/batch') {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.course_price',  '_sonata_name' => 'admin_nordcode_core_courseprice_batch',  '_route' => 'admin_nordcode_core_courseprice_batch',);
                                    }

                                    // admin_nordcode_core_courseprice_edit
                                    if (preg_match('#^/admin/nordcode/core/courseprice/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_courseprice_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.course_price',  '_sonata_name' => 'admin_nordcode_core_courseprice_edit',));
                                    }

                                    // admin_nordcode_core_courseprice_delete
                                    if (preg_match('#^/admin/nordcode/core/courseprice/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_courseprice_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.course_price',  '_sonata_name' => 'admin_nordcode_core_courseprice_delete',));
                                    }

                                    // admin_nordcode_core_courseprice_show
                                    if (preg_match('#^/admin/nordcode/core/courseprice/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_courseprice_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.course_price',  '_sonata_name' => 'admin_nordcode_core_courseprice_show',));
                                    }

                                    // admin_nordcode_core_courseprice_export
                                    if ($pathinfo === '/admin/nordcode/core/courseprice/export') {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.course_price',  '_sonata_name' => 'admin_nordcode_core_courseprice_export',  '_route' => 'admin_nordcode_core_courseprice_export',);
                                    }

                                }

                                if (0 === strpos($pathinfo, '/admin/nordcode/core/coursepromocode')) {
                                    // admin_nordcode_core_coursepromocode_list
                                    if ($pathinfo === '/admin/nordcode/core/coursepromocode/list') {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.course_promo_code',  '_sonata_name' => 'admin_nordcode_core_coursepromocode_list',  '_route' => 'admin_nordcode_core_coursepromocode_list',);
                                    }

                                    // admin_nordcode_core_coursepromocode_create
                                    if ($pathinfo === '/admin/nordcode/core/coursepromocode/create') {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.course_promo_code',  '_sonata_name' => 'admin_nordcode_core_coursepromocode_create',  '_route' => 'admin_nordcode_core_coursepromocode_create',);
                                    }

                                    // admin_nordcode_core_coursepromocode_batch
                                    if ($pathinfo === '/admin/nordcode/core/coursepromocode/batch') {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.course_promo_code',  '_sonata_name' => 'admin_nordcode_core_coursepromocode_batch',  '_route' => 'admin_nordcode_core_coursepromocode_batch',);
                                    }

                                    // admin_nordcode_core_coursepromocode_edit
                                    if (preg_match('#^/admin/nordcode/core/coursepromocode/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_coursepromocode_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.course_promo_code',  '_sonata_name' => 'admin_nordcode_core_coursepromocode_edit',));
                                    }

                                    // admin_nordcode_core_coursepromocode_delete
                                    if (preg_match('#^/admin/nordcode/core/coursepromocode/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_coursepromocode_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.course_promo_code',  '_sonata_name' => 'admin_nordcode_core_coursepromocode_delete',));
                                    }

                                    // admin_nordcode_core_coursepromocode_show
                                    if (preg_match('#^/admin/nordcode/core/coursepromocode/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_coursepromocode_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.course_promo_code',  '_sonata_name' => 'admin_nordcode_core_coursepromocode_show',));
                                    }

                                    // admin_nordcode_core_coursepromocode_export
                                    if ($pathinfo === '/admin/nordcode/core/coursepromocode/export') {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.course_promo_code',  '_sonata_name' => 'admin_nordcode_core_coursepromocode_export',  '_route' => 'admin_nordcode_core_coursepromocode_export',);
                                    }

                                }

                            }

                            // admin_nordcode_core_course_list
                            if ($pathinfo === '/admin/nordcode/core/course/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.course',  '_sonata_name' => 'admin_nordcode_core_course_list',  '_route' => 'admin_nordcode_core_course_list',);
                            }

                            // admin_nordcode_core_course_create
                            if ($pathinfo === '/admin/nordcode/core/course/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.course',  '_sonata_name' => 'admin_nordcode_core_course_create',  '_route' => 'admin_nordcode_core_course_create',);
                            }

                            // admin_nordcode_core_course_batch
                            if ($pathinfo === '/admin/nordcode/core/course/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.course',  '_sonata_name' => 'admin_nordcode_core_course_batch',  '_route' => 'admin_nordcode_core_course_batch',);
                            }

                            // admin_nordcode_core_course_edit
                            if (preg_match('#^/admin/nordcode/core/course/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_course_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.course',  '_sonata_name' => 'admin_nordcode_core_course_edit',));
                            }

                            // admin_nordcode_core_course_delete
                            if (preg_match('#^/admin/nordcode/core/course/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_course_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.course',  '_sonata_name' => 'admin_nordcode_core_course_delete',));
                            }

                            // admin_nordcode_core_course_show
                            if (preg_match('#^/admin/nordcode/core/course/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_course_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.course',  '_sonata_name' => 'admin_nordcode_core_course_show',));
                            }

                            // admin_nordcode_core_course_export
                            if ($pathinfo === '/admin/nordcode/core/course/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.course',  '_sonata_name' => 'admin_nordcode_core_course_export',  '_route' => 'admin_nordcode_core_course_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/nordcode/core/usercourse')) {
                            // admin_nordcode_core_usercourse_list
                            if ($pathinfo === '/admin/nordcode/core/usercourse/list') {
                                return array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\Admin\\UserCourseController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.user_course',  '_sonata_name' => 'admin_nordcode_core_usercourse_list',  '_route' => 'admin_nordcode_core_usercourse_list',);
                            }

                            // admin_nordcode_core_usercourse_create
                            if ($pathinfo === '/admin/nordcode/core/usercourse/create') {
                                return array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\Admin\\UserCourseController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.user_course',  '_sonata_name' => 'admin_nordcode_core_usercourse_create',  '_route' => 'admin_nordcode_core_usercourse_create',);
                            }

                            // admin_nordcode_core_usercourse_batch
                            if ($pathinfo === '/admin/nordcode/core/usercourse/batch') {
                                return array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\Admin\\UserCourseController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.user_course',  '_sonata_name' => 'admin_nordcode_core_usercourse_batch',  '_route' => 'admin_nordcode_core_usercourse_batch',);
                            }

                            // admin_nordcode_core_usercourse_edit
                            if (preg_match('#^/admin/nordcode/core/usercourse/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_usercourse_edit')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\Admin\\UserCourseController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.user_course',  '_sonata_name' => 'admin_nordcode_core_usercourse_edit',));
                            }

                            // admin_nordcode_core_usercourse_delete
                            if (preg_match('#^/admin/nordcode/core/usercourse/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_usercourse_delete')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\Admin\\UserCourseController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.user_course',  '_sonata_name' => 'admin_nordcode_core_usercourse_delete',));
                            }

                            // admin_nordcode_core_usercourse_show
                            if (preg_match('#^/admin/nordcode/core/usercourse/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_usercourse_show')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\Admin\\UserCourseController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.user_course',  '_sonata_name' => 'admin_nordcode_core_usercourse_show',));
                            }

                            // admin_nordcode_core_usercourse_export
                            if ($pathinfo === '/admin/nordcode/core/usercourse/export') {
                                return array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\Admin\\UserCourseController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.user_course',  '_sonata_name' => 'admin_nordcode_core_usercourse_export',  '_route' => 'admin_nordcode_core_usercourse_export',);
                            }

                            if (0 === strpos($pathinfo, '/admin/nordcode/core/usercourseday')) {
                                // admin_nordcode_core_usercourseday_list
                                if ($pathinfo === '/admin/nordcode/core/usercourseday/list') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.user_course_day',  '_sonata_name' => 'admin_nordcode_core_usercourseday_list',  '_route' => 'admin_nordcode_core_usercourseday_list',);
                                }

                                // admin_nordcode_core_usercourseday_create
                                if ($pathinfo === '/admin/nordcode/core/usercourseday/create') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.user_course_day',  '_sonata_name' => 'admin_nordcode_core_usercourseday_create',  '_route' => 'admin_nordcode_core_usercourseday_create',);
                                }

                                // admin_nordcode_core_usercourseday_batch
                                if ($pathinfo === '/admin/nordcode/core/usercourseday/batch') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.user_course_day',  '_sonata_name' => 'admin_nordcode_core_usercourseday_batch',  '_route' => 'admin_nordcode_core_usercourseday_batch',);
                                }

                                // admin_nordcode_core_usercourseday_edit
                                if (preg_match('#^/admin/nordcode/core/usercourseday/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_usercourseday_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.user_course_day',  '_sonata_name' => 'admin_nordcode_core_usercourseday_edit',));
                                }

                                // admin_nordcode_core_usercourseday_delete
                                if (preg_match('#^/admin/nordcode/core/usercourseday/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_usercourseday_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.user_course_day',  '_sonata_name' => 'admin_nordcode_core_usercourseday_delete',));
                                }

                                // admin_nordcode_core_usercourseday_show
                                if (preg_match('#^/admin/nordcode/core/usercourseday/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_usercourseday_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.user_course_day',  '_sonata_name' => 'admin_nordcode_core_usercourseday_show',));
                                }

                                // admin_nordcode_core_usercourseday_export
                                if ($pathinfo === '/admin/nordcode/core/usercourseday/export') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.user_course_day',  '_sonata_name' => 'admin_nordcode_core_usercourseday_export',  '_route' => 'admin_nordcode_core_usercourseday_export',);
                                }

                            }

                            if (0 === strpos($pathinfo, '/admin/nordcode/core/usercourseweek')) {
                                // admin_nordcode_core_usercourseweek_list
                                if ($pathinfo === '/admin/nordcode/core/usercourseweek/list') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.user_course_week',  '_sonata_name' => 'admin_nordcode_core_usercourseweek_list',  '_route' => 'admin_nordcode_core_usercourseweek_list',);
                                }

                                // admin_nordcode_core_usercourseweek_create
                                if ($pathinfo === '/admin/nordcode/core/usercourseweek/create') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.user_course_week',  '_sonata_name' => 'admin_nordcode_core_usercourseweek_create',  '_route' => 'admin_nordcode_core_usercourseweek_create',);
                                }

                                // admin_nordcode_core_usercourseweek_batch
                                if ($pathinfo === '/admin/nordcode/core/usercourseweek/batch') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.user_course_week',  '_sonata_name' => 'admin_nordcode_core_usercourseweek_batch',  '_route' => 'admin_nordcode_core_usercourseweek_batch',);
                                }

                                // admin_nordcode_core_usercourseweek_edit
                                if (preg_match('#^/admin/nordcode/core/usercourseweek/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_usercourseweek_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.user_course_week',  '_sonata_name' => 'admin_nordcode_core_usercourseweek_edit',));
                                }

                                // admin_nordcode_core_usercourseweek_delete
                                if (preg_match('#^/admin/nordcode/core/usercourseweek/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_usercourseweek_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.user_course_week',  '_sonata_name' => 'admin_nordcode_core_usercourseweek_delete',));
                                }

                                // admin_nordcode_core_usercourseweek_show
                                if (preg_match('#^/admin/nordcode/core/usercourseweek/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_usercourseweek_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.user_course_week',  '_sonata_name' => 'admin_nordcode_core_usercourseweek_show',));
                                }

                                // admin_nordcode_core_usercourseweek_export
                                if ($pathinfo === '/admin/nordcode/core/usercourseweek/export') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.user_course_week',  '_sonata_name' => 'admin_nordcode_core_usercourseweek_export',  '_route' => 'admin_nordcode_core_usercourseweek_export',);
                                }

                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/nordcode/core/timetableitem')) {
                            // admin_nordcode_core_timetableitem_list
                            if ($pathinfo === '/admin/nordcode/core/timetableitem/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.timetable_item',  '_sonata_name' => 'admin_nordcode_core_timetableitem_list',  '_route' => 'admin_nordcode_core_timetableitem_list',);
                            }

                            // admin_nordcode_core_timetableitem_create
                            if ($pathinfo === '/admin/nordcode/core/timetableitem/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.timetable_item',  '_sonata_name' => 'admin_nordcode_core_timetableitem_create',  '_route' => 'admin_nordcode_core_timetableitem_create',);
                            }

                            // admin_nordcode_core_timetableitem_batch
                            if ($pathinfo === '/admin/nordcode/core/timetableitem/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.timetable_item',  '_sonata_name' => 'admin_nordcode_core_timetableitem_batch',  '_route' => 'admin_nordcode_core_timetableitem_batch',);
                            }

                            // admin_nordcode_core_timetableitem_edit
                            if (preg_match('#^/admin/nordcode/core/timetableitem/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_timetableitem_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.timetable_item',  '_sonata_name' => 'admin_nordcode_core_timetableitem_edit',));
                            }

                            // admin_nordcode_core_timetableitem_delete
                            if (preg_match('#^/admin/nordcode/core/timetableitem/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_timetableitem_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.timetable_item',  '_sonata_name' => 'admin_nordcode_core_timetableitem_delete',));
                            }

                            // admin_nordcode_core_timetableitem_show
                            if (preg_match('#^/admin/nordcode/core/timetableitem/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_timetableitem_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.timetable_item',  '_sonata_name' => 'admin_nordcode_core_timetableitem_show',));
                            }

                            // admin_nordcode_core_timetableitem_export
                            if ($pathinfo === '/admin/nordcode/core/timetableitem/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.timetable_item',  '_sonata_name' => 'admin_nordcode_core_timetableitem_export',  '_route' => 'admin_nordcode_core_timetableitem_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/nordcode/core/warmuptask')) {
                            // admin_nordcode_core_warmuptask_list
                            if ($pathinfo === '/admin/nordcode/core/warmuptask/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.warmup_task',  '_sonata_name' => 'admin_nordcode_core_warmuptask_list',  '_route' => 'admin_nordcode_core_warmuptask_list',);
                            }

                            // admin_nordcode_core_warmuptask_create
                            if ($pathinfo === '/admin/nordcode/core/warmuptask/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.warmup_task',  '_sonata_name' => 'admin_nordcode_core_warmuptask_create',  '_route' => 'admin_nordcode_core_warmuptask_create',);
                            }

                            // admin_nordcode_core_warmuptask_batch
                            if ($pathinfo === '/admin/nordcode/core/warmuptask/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.warmup_task',  '_sonata_name' => 'admin_nordcode_core_warmuptask_batch',  '_route' => 'admin_nordcode_core_warmuptask_batch',);
                            }

                            // admin_nordcode_core_warmuptask_edit
                            if (preg_match('#^/admin/nordcode/core/warmuptask/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_warmuptask_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.warmup_task',  '_sonata_name' => 'admin_nordcode_core_warmuptask_edit',));
                            }

                            // admin_nordcode_core_warmuptask_delete
                            if (preg_match('#^/admin/nordcode/core/warmuptask/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_warmuptask_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.warmup_task',  '_sonata_name' => 'admin_nordcode_core_warmuptask_delete',));
                            }

                            // admin_nordcode_core_warmuptask_show
                            if (preg_match('#^/admin/nordcode/core/warmuptask/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_warmuptask_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.warmup_task',  '_sonata_name' => 'admin_nordcode_core_warmuptask_show',));
                            }

                            // admin_nordcode_core_warmuptask_export
                            if ($pathinfo === '/admin/nordcode/core/warmuptask/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.warmup_task',  '_sonata_name' => 'admin_nordcode_core_warmuptask_export',  '_route' => 'admin_nordcode_core_warmuptask_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/nordcode/core/usercoursewarmup')) {
                            // admin_nordcode_core_usercoursewarmup_list
                            if ($pathinfo === '/admin/nordcode/core/usercoursewarmup/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.user_course_warmup',  '_sonata_name' => 'admin_nordcode_core_usercoursewarmup_list',  '_route' => 'admin_nordcode_core_usercoursewarmup_list',);
                            }

                            // admin_nordcode_core_usercoursewarmup_create
                            if ($pathinfo === '/admin/nordcode/core/usercoursewarmup/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.user_course_warmup',  '_sonata_name' => 'admin_nordcode_core_usercoursewarmup_create',  '_route' => 'admin_nordcode_core_usercoursewarmup_create',);
                            }

                            // admin_nordcode_core_usercoursewarmup_batch
                            if ($pathinfo === '/admin/nordcode/core/usercoursewarmup/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.user_course_warmup',  '_sonata_name' => 'admin_nordcode_core_usercoursewarmup_batch',  '_route' => 'admin_nordcode_core_usercoursewarmup_batch',);
                            }

                            // admin_nordcode_core_usercoursewarmup_edit
                            if (preg_match('#^/admin/nordcode/core/usercoursewarmup/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_usercoursewarmup_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.user_course_warmup',  '_sonata_name' => 'admin_nordcode_core_usercoursewarmup_edit',));
                            }

                            // admin_nordcode_core_usercoursewarmup_delete
                            if (preg_match('#^/admin/nordcode/core/usercoursewarmup/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_usercoursewarmup_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.user_course_warmup',  '_sonata_name' => 'admin_nordcode_core_usercoursewarmup_delete',));
                            }

                            // admin_nordcode_core_usercoursewarmup_show
                            if (preg_match('#^/admin/nordcode/core/usercoursewarmup/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_usercoursewarmup_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.user_course_warmup',  '_sonata_name' => 'admin_nordcode_core_usercoursewarmup_show',));
                            }

                            // admin_nordcode_core_usercoursewarmup_export
                            if ($pathinfo === '/admin/nordcode/core/usercoursewarmup/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.user_course_warmup',  '_sonata_name' => 'admin_nordcode_core_usercoursewarmup_export',  '_route' => 'admin_nordcode_core_usercoursewarmup_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/nordcode/core/bodytype')) {
                            // admin_nordcode_core_bodytype_list
                            if ($pathinfo === '/admin/nordcode/core/bodytype/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.body_type',  '_sonata_name' => 'admin_nordcode_core_bodytype_list',  '_route' => 'admin_nordcode_core_bodytype_list',);
                            }

                            // admin_nordcode_core_bodytype_create
                            if ($pathinfo === '/admin/nordcode/core/bodytype/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.body_type',  '_sonata_name' => 'admin_nordcode_core_bodytype_create',  '_route' => 'admin_nordcode_core_bodytype_create',);
                            }

                            // admin_nordcode_core_bodytype_batch
                            if ($pathinfo === '/admin/nordcode/core/bodytype/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.body_type',  '_sonata_name' => 'admin_nordcode_core_bodytype_batch',  '_route' => 'admin_nordcode_core_bodytype_batch',);
                            }

                            // admin_nordcode_core_bodytype_edit
                            if (preg_match('#^/admin/nordcode/core/bodytype/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_bodytype_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.body_type',  '_sonata_name' => 'admin_nordcode_core_bodytype_edit',));
                            }

                            // admin_nordcode_core_bodytype_delete
                            if (preg_match('#^/admin/nordcode/core/bodytype/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_bodytype_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.body_type',  '_sonata_name' => 'admin_nordcode_core_bodytype_delete',));
                            }

                            // admin_nordcode_core_bodytype_show
                            if (preg_match('#^/admin/nordcode/core/bodytype/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_bodytype_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.body_type',  '_sonata_name' => 'admin_nordcode_core_bodytype_show',));
                            }

                            // admin_nordcode_core_bodytype_export
                            if ($pathinfo === '/admin/nordcode/core/bodytype/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.body_type',  '_sonata_name' => 'admin_nordcode_core_bodytype_export',  '_route' => 'admin_nordcode_core_bodytype_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/nordcode/core/meal')) {
                            if (0 === strpos($pathinfo, '/admin/nordcode/core/mealcategory')) {
                                // admin_nordcode_core_mealcategory_list
                                if ($pathinfo === '/admin/nordcode/core/mealcategory/list') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal_category',  '_sonata_name' => 'admin_nordcode_core_mealcategory_list',  '_route' => 'admin_nordcode_core_mealcategory_list',);
                                }

                                // admin_nordcode_core_mealcategory_create
                                if ($pathinfo === '/admin/nordcode/core/mealcategory/create') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal_category',  '_sonata_name' => 'admin_nordcode_core_mealcategory_create',  '_route' => 'admin_nordcode_core_mealcategory_create',);
                                }

                                // admin_nordcode_core_mealcategory_batch
                                if ($pathinfo === '/admin/nordcode/core/mealcategory/batch') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal_category',  '_sonata_name' => 'admin_nordcode_core_mealcategory_batch',  '_route' => 'admin_nordcode_core_mealcategory_batch',);
                                }

                                // admin_nordcode_core_mealcategory_edit
                                if (preg_match('#^/admin/nordcode/core/mealcategory/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_mealcategory_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal_category',  '_sonata_name' => 'admin_nordcode_core_mealcategory_edit',));
                                }

                                // admin_nordcode_core_mealcategory_delete
                                if (preg_match('#^/admin/nordcode/core/mealcategory/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_mealcategory_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal_category',  '_sonata_name' => 'admin_nordcode_core_mealcategory_delete',));
                                }

                                // admin_nordcode_core_mealcategory_show
                                if (preg_match('#^/admin/nordcode/core/mealcategory/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_mealcategory_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal_category',  '_sonata_name' => 'admin_nordcode_core_mealcategory_show',));
                                }

                                // admin_nordcode_core_mealcategory_export
                                if ($pathinfo === '/admin/nordcode/core/mealcategory/export') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal_category',  '_sonata_name' => 'admin_nordcode_core_mealcategory_export',  '_route' => 'admin_nordcode_core_mealcategory_export',);
                                }

                            }

                            if (0 === strpos($pathinfo, '/admin/nordcode/core/mealtype')) {
                                // admin_nordcode_core_mealtype_list
                                if ($pathinfo === '/admin/nordcode/core/mealtype/list') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal_type',  '_sonata_name' => 'admin_nordcode_core_mealtype_list',  '_route' => 'admin_nordcode_core_mealtype_list',);
                                }

                                // admin_nordcode_core_mealtype_create
                                if ($pathinfo === '/admin/nordcode/core/mealtype/create') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal_type',  '_sonata_name' => 'admin_nordcode_core_mealtype_create',  '_route' => 'admin_nordcode_core_mealtype_create',);
                                }

                                // admin_nordcode_core_mealtype_batch
                                if ($pathinfo === '/admin/nordcode/core/mealtype/batch') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal_type',  '_sonata_name' => 'admin_nordcode_core_mealtype_batch',  '_route' => 'admin_nordcode_core_mealtype_batch',);
                                }

                                // admin_nordcode_core_mealtype_edit
                                if (preg_match('#^/admin/nordcode/core/mealtype/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_mealtype_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal_type',  '_sonata_name' => 'admin_nordcode_core_mealtype_edit',));
                                }

                                // admin_nordcode_core_mealtype_delete
                                if (preg_match('#^/admin/nordcode/core/mealtype/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_mealtype_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal_type',  '_sonata_name' => 'admin_nordcode_core_mealtype_delete',));
                                }

                                // admin_nordcode_core_mealtype_show
                                if (preg_match('#^/admin/nordcode/core/mealtype/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_mealtype_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal_type',  '_sonata_name' => 'admin_nordcode_core_mealtype_show',));
                                }

                                // admin_nordcode_core_mealtype_export
                                if ($pathinfo === '/admin/nordcode/core/mealtype/export') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal_type',  '_sonata_name' => 'admin_nordcode_core_mealtype_export',  '_route' => 'admin_nordcode_core_mealtype_export',);
                                }

                            }

                            // admin_nordcode_core_meal_list
                            if ($pathinfo === '/admin/nordcode/core/meal/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal',  '_sonata_name' => 'admin_nordcode_core_meal_list',  '_route' => 'admin_nordcode_core_meal_list',);
                            }

                            // admin_nordcode_core_meal_create
                            if ($pathinfo === '/admin/nordcode/core/meal/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal',  '_sonata_name' => 'admin_nordcode_core_meal_create',  '_route' => 'admin_nordcode_core_meal_create',);
                            }

                            // admin_nordcode_core_meal_batch
                            if ($pathinfo === '/admin/nordcode/core/meal/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal',  '_sonata_name' => 'admin_nordcode_core_meal_batch',  '_route' => 'admin_nordcode_core_meal_batch',);
                            }

                            // admin_nordcode_core_meal_edit
                            if (preg_match('#^/admin/nordcode/core/meal/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_meal_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal',  '_sonata_name' => 'admin_nordcode_core_meal_edit',));
                            }

                            // admin_nordcode_core_meal_delete
                            if (preg_match('#^/admin/nordcode/core/meal/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_meal_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal',  '_sonata_name' => 'admin_nordcode_core_meal_delete',));
                            }

                            // admin_nordcode_core_meal_show
                            if (preg_match('#^/admin/nordcode/core/meal/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_meal_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal',  '_sonata_name' => 'admin_nordcode_core_meal_show',));
                            }

                            // admin_nordcode_core_meal_export
                            if ($pathinfo === '/admin/nordcode/core/meal/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal',  '_sonata_name' => 'admin_nordcode_core_meal_export',  '_route' => 'admin_nordcode_core_meal_export',);
                            }

                            if (0 === strpos($pathinfo, '/admin/nordcode/core/mealphoto')) {
                                // admin_nordcode_core_mealphoto_list
                                if ($pathinfo === '/admin/nordcode/core/mealphoto/list') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal_photo',  '_sonata_name' => 'admin_nordcode_core_mealphoto_list',  '_route' => 'admin_nordcode_core_mealphoto_list',);
                                }

                                // admin_nordcode_core_mealphoto_create
                                if ($pathinfo === '/admin/nordcode/core/mealphoto/create') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal_photo',  '_sonata_name' => 'admin_nordcode_core_mealphoto_create',  '_route' => 'admin_nordcode_core_mealphoto_create',);
                                }

                                // admin_nordcode_core_mealphoto_batch
                                if ($pathinfo === '/admin/nordcode/core/mealphoto/batch') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal_photo',  '_sonata_name' => 'admin_nordcode_core_mealphoto_batch',  '_route' => 'admin_nordcode_core_mealphoto_batch',);
                                }

                                // admin_nordcode_core_mealphoto_edit
                                if (preg_match('#^/admin/nordcode/core/mealphoto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_mealphoto_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal_photo',  '_sonata_name' => 'admin_nordcode_core_mealphoto_edit',));
                                }

                                // admin_nordcode_core_mealphoto_delete
                                if (preg_match('#^/admin/nordcode/core/mealphoto/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_mealphoto_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal_photo',  '_sonata_name' => 'admin_nordcode_core_mealphoto_delete',));
                                }

                                // admin_nordcode_core_mealphoto_show
                                if (preg_match('#^/admin/nordcode/core/mealphoto/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_mealphoto_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal_photo',  '_sonata_name' => 'admin_nordcode_core_mealphoto_show',));
                                }

                                // admin_nordcode_core_mealphoto_export
                                if ($pathinfo === '/admin/nordcode/core/mealphoto/export') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal_photo',  '_sonata_name' => 'admin_nordcode_core_mealphoto_export',  '_route' => 'admin_nordcode_core_mealphoto_export',);
                                }

                            }

                            if (0 === strpos($pathinfo, '/admin/nordcode/core/mealfavorite')) {
                                // admin_nordcode_core_mealfavorite_list
                                if ($pathinfo === '/admin/nordcode/core/mealfavorite/list') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal_favorite',  '_sonata_name' => 'admin_nordcode_core_mealfavorite_list',  '_route' => 'admin_nordcode_core_mealfavorite_list',);
                                }

                                // admin_nordcode_core_mealfavorite_create
                                if ($pathinfo === '/admin/nordcode/core/mealfavorite/create') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal_favorite',  '_sonata_name' => 'admin_nordcode_core_mealfavorite_create',  '_route' => 'admin_nordcode_core_mealfavorite_create',);
                                }

                                // admin_nordcode_core_mealfavorite_batch
                                if ($pathinfo === '/admin/nordcode/core/mealfavorite/batch') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal_favorite',  '_sonata_name' => 'admin_nordcode_core_mealfavorite_batch',  '_route' => 'admin_nordcode_core_mealfavorite_batch',);
                                }

                                // admin_nordcode_core_mealfavorite_edit
                                if (preg_match('#^/admin/nordcode/core/mealfavorite/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_mealfavorite_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal_favorite',  '_sonata_name' => 'admin_nordcode_core_mealfavorite_edit',));
                                }

                                // admin_nordcode_core_mealfavorite_delete
                                if (preg_match('#^/admin/nordcode/core/mealfavorite/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_mealfavorite_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal_favorite',  '_sonata_name' => 'admin_nordcode_core_mealfavorite_delete',));
                                }

                                // admin_nordcode_core_mealfavorite_show
                                if (preg_match('#^/admin/nordcode/core/mealfavorite/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_mealfavorite_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal_favorite',  '_sonata_name' => 'admin_nordcode_core_mealfavorite_show',));
                                }

                                // admin_nordcode_core_mealfavorite_export
                                if ($pathinfo === '/admin/nordcode/core/mealfavorite/export') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.meal_favorite',  '_sonata_name' => 'admin_nordcode_core_mealfavorite_export',  '_route' => 'admin_nordcode_core_mealfavorite_export',);
                                }

                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/nordcode/core/product')) {
                            // admin_nordcode_core_product_list
                            if ($pathinfo === '/admin/nordcode/core/product/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.product',  '_sonata_name' => 'admin_nordcode_core_product_list',  '_route' => 'admin_nordcode_core_product_list',);
                            }

                            // admin_nordcode_core_product_create
                            if ($pathinfo === '/admin/nordcode/core/product/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.product',  '_sonata_name' => 'admin_nordcode_core_product_create',  '_route' => 'admin_nordcode_core_product_create',);
                            }

                            // admin_nordcode_core_product_batch
                            if ($pathinfo === '/admin/nordcode/core/product/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.product',  '_sonata_name' => 'admin_nordcode_core_product_batch',  '_route' => 'admin_nordcode_core_product_batch',);
                            }

                            // admin_nordcode_core_product_edit
                            if (preg_match('#^/admin/nordcode/core/product/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_product_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.product',  '_sonata_name' => 'admin_nordcode_core_product_edit',));
                            }

                            // admin_nordcode_core_product_delete
                            if (preg_match('#^/admin/nordcode/core/product/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_product_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.product',  '_sonata_name' => 'admin_nordcode_core_product_delete',));
                            }

                            // admin_nordcode_core_product_show
                            if (preg_match('#^/admin/nordcode/core/product/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_product_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.product',  '_sonata_name' => 'admin_nordcode_core_product_show',));
                            }

                            // admin_nordcode_core_product_export
                            if ($pathinfo === '/admin/nordcode/core/product/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.product',  '_sonata_name' => 'admin_nordcode_core_product_export',  '_route' => 'admin_nordcode_core_product_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/nordcode/core/workout')) {
                            if (0 === strpos($pathinfo, '/admin/nordcode/core/workoutcategory')) {
                                // admin_nordcode_core_workoutcategory_list
                                if ($pathinfo === '/admin/nordcode/core/workoutcategory/list') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_category',  '_sonata_name' => 'admin_nordcode_core_workoutcategory_list',  '_route' => 'admin_nordcode_core_workoutcategory_list',);
                                }

                                // admin_nordcode_core_workoutcategory_create
                                if ($pathinfo === '/admin/nordcode/core/workoutcategory/create') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_category',  '_sonata_name' => 'admin_nordcode_core_workoutcategory_create',  '_route' => 'admin_nordcode_core_workoutcategory_create',);
                                }

                                // admin_nordcode_core_workoutcategory_batch
                                if ($pathinfo === '/admin/nordcode/core/workoutcategory/batch') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_category',  '_sonata_name' => 'admin_nordcode_core_workoutcategory_batch',  '_route' => 'admin_nordcode_core_workoutcategory_batch',);
                                }

                                // admin_nordcode_core_workoutcategory_edit
                                if (preg_match('#^/admin/nordcode/core/workoutcategory/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_workoutcategory_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_category',  '_sonata_name' => 'admin_nordcode_core_workoutcategory_edit',));
                                }

                                // admin_nordcode_core_workoutcategory_delete
                                if (preg_match('#^/admin/nordcode/core/workoutcategory/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_workoutcategory_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_category',  '_sonata_name' => 'admin_nordcode_core_workoutcategory_delete',));
                                }

                                // admin_nordcode_core_workoutcategory_show
                                if (preg_match('#^/admin/nordcode/core/workoutcategory/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_workoutcategory_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_category',  '_sonata_name' => 'admin_nordcode_core_workoutcategory_show',));
                                }

                                // admin_nordcode_core_workoutcategory_export
                                if ($pathinfo === '/admin/nordcode/core/workoutcategory/export') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_category',  '_sonata_name' => 'admin_nordcode_core_workoutcategory_export',  '_route' => 'admin_nordcode_core_workoutcategory_export',);
                                }

                            }

                            if (0 === strpos($pathinfo, '/admin/nordcode/core/workouttype')) {
                                // admin_nordcode_core_workouttype_list
                                if ($pathinfo === '/admin/nordcode/core/workouttype/list') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_type',  '_sonata_name' => 'admin_nordcode_core_workouttype_list',  '_route' => 'admin_nordcode_core_workouttype_list',);
                                }

                                // admin_nordcode_core_workouttype_create
                                if ($pathinfo === '/admin/nordcode/core/workouttype/create') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_type',  '_sonata_name' => 'admin_nordcode_core_workouttype_create',  '_route' => 'admin_nordcode_core_workouttype_create',);
                                }

                                // admin_nordcode_core_workouttype_batch
                                if ($pathinfo === '/admin/nordcode/core/workouttype/batch') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_type',  '_sonata_name' => 'admin_nordcode_core_workouttype_batch',  '_route' => 'admin_nordcode_core_workouttype_batch',);
                                }

                                // admin_nordcode_core_workouttype_edit
                                if (preg_match('#^/admin/nordcode/core/workouttype/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_workouttype_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_type',  '_sonata_name' => 'admin_nordcode_core_workouttype_edit',));
                                }

                                // admin_nordcode_core_workouttype_delete
                                if (preg_match('#^/admin/nordcode/core/workouttype/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_workouttype_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_type',  '_sonata_name' => 'admin_nordcode_core_workouttype_delete',));
                                }

                                // admin_nordcode_core_workouttype_show
                                if (preg_match('#^/admin/nordcode/core/workouttype/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_workouttype_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_type',  '_sonata_name' => 'admin_nordcode_core_workouttype_show',));
                                }

                                // admin_nordcode_core_workouttype_export
                                if ($pathinfo === '/admin/nordcode/core/workouttype/export') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_type',  '_sonata_name' => 'admin_nordcode_core_workouttype_export',  '_route' => 'admin_nordcode_core_workouttype_export',);
                                }

                            }

                            // admin_nordcode_core_workout_list
                            if ($pathinfo === '/admin/nordcode/core/workout/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout',  '_sonata_name' => 'admin_nordcode_core_workout_list',  '_route' => 'admin_nordcode_core_workout_list',);
                            }

                            // admin_nordcode_core_workout_create
                            if ($pathinfo === '/admin/nordcode/core/workout/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout',  '_sonata_name' => 'admin_nordcode_core_workout_create',  '_route' => 'admin_nordcode_core_workout_create',);
                            }

                            // admin_nordcode_core_workout_batch
                            if ($pathinfo === '/admin/nordcode/core/workout/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout',  '_sonata_name' => 'admin_nordcode_core_workout_batch',  '_route' => 'admin_nordcode_core_workout_batch',);
                            }

                            // admin_nordcode_core_workout_edit
                            if (preg_match('#^/admin/nordcode/core/workout/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_workout_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout',  '_sonata_name' => 'admin_nordcode_core_workout_edit',));
                            }

                            // admin_nordcode_core_workout_delete
                            if (preg_match('#^/admin/nordcode/core/workout/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_workout_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout',  '_sonata_name' => 'admin_nordcode_core_workout_delete',));
                            }

                            // admin_nordcode_core_workout_show
                            if (preg_match('#^/admin/nordcode/core/workout/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_workout_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout',  '_sonata_name' => 'admin_nordcode_core_workout_show',));
                            }

                            // admin_nordcode_core_workout_export
                            if ($pathinfo === '/admin/nordcode/core/workout/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout',  '_sonata_name' => 'admin_nordcode_core_workout_export',  '_route' => 'admin_nordcode_core_workout_export',);
                            }

                            if (0 === strpos($pathinfo, '/admin/nordcode/core/workoutphoto')) {
                                // admin_nordcode_core_workoutphoto_list
                                if ($pathinfo === '/admin/nordcode/core/workoutphoto/list') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_photo',  '_sonata_name' => 'admin_nordcode_core_workoutphoto_list',  '_route' => 'admin_nordcode_core_workoutphoto_list',);
                                }

                                // admin_nordcode_core_workoutphoto_create
                                if ($pathinfo === '/admin/nordcode/core/workoutphoto/create') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_photo',  '_sonata_name' => 'admin_nordcode_core_workoutphoto_create',  '_route' => 'admin_nordcode_core_workoutphoto_create',);
                                }

                                // admin_nordcode_core_workoutphoto_batch
                                if ($pathinfo === '/admin/nordcode/core/workoutphoto/batch') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_photo',  '_sonata_name' => 'admin_nordcode_core_workoutphoto_batch',  '_route' => 'admin_nordcode_core_workoutphoto_batch',);
                                }

                                // admin_nordcode_core_workoutphoto_edit
                                if (preg_match('#^/admin/nordcode/core/workoutphoto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_workoutphoto_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_photo',  '_sonata_name' => 'admin_nordcode_core_workoutphoto_edit',));
                                }

                                // admin_nordcode_core_workoutphoto_delete
                                if (preg_match('#^/admin/nordcode/core/workoutphoto/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_workoutphoto_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_photo',  '_sonata_name' => 'admin_nordcode_core_workoutphoto_delete',));
                                }

                                // admin_nordcode_core_workoutphoto_show
                                if (preg_match('#^/admin/nordcode/core/workoutphoto/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_workoutphoto_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_photo',  '_sonata_name' => 'admin_nordcode_core_workoutphoto_show',));
                                }

                                // admin_nordcode_core_workoutphoto_export
                                if ($pathinfo === '/admin/nordcode/core/workoutphoto/export') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_photo',  '_sonata_name' => 'admin_nordcode_core_workoutphoto_export',  '_route' => 'admin_nordcode_core_workoutphoto_export',);
                                }

                            }

                            if (0 === strpos($pathinfo, '/admin/nordcode/core/workoutdayofcourse')) {
                                // admin_nordcode_core_workoutdayofcourse_list
                                if ($pathinfo === '/admin/nordcode/core/workoutdayofcourse/list') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_dayofcourse',  '_sonata_name' => 'admin_nordcode_core_workoutdayofcourse_list',  '_route' => 'admin_nordcode_core_workoutdayofcourse_list',);
                                }

                                // admin_nordcode_core_workoutdayofcourse_create
                                if ($pathinfo === '/admin/nordcode/core/workoutdayofcourse/create') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_dayofcourse',  '_sonata_name' => 'admin_nordcode_core_workoutdayofcourse_create',  '_route' => 'admin_nordcode_core_workoutdayofcourse_create',);
                                }

                                // admin_nordcode_core_workoutdayofcourse_batch
                                if ($pathinfo === '/admin/nordcode/core/workoutdayofcourse/batch') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_dayofcourse',  '_sonata_name' => 'admin_nordcode_core_workoutdayofcourse_batch',  '_route' => 'admin_nordcode_core_workoutdayofcourse_batch',);
                                }

                                // admin_nordcode_core_workoutdayofcourse_edit
                                if (preg_match('#^/admin/nordcode/core/workoutdayofcourse/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_workoutdayofcourse_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_dayofcourse',  '_sonata_name' => 'admin_nordcode_core_workoutdayofcourse_edit',));
                                }

                                // admin_nordcode_core_workoutdayofcourse_delete
                                if (preg_match('#^/admin/nordcode/core/workoutdayofcourse/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_workoutdayofcourse_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_dayofcourse',  '_sonata_name' => 'admin_nordcode_core_workoutdayofcourse_delete',));
                                }

                                // admin_nordcode_core_workoutdayofcourse_show
                                if (preg_match('#^/admin/nordcode/core/workoutdayofcourse/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_workoutdayofcourse_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_dayofcourse',  '_sonata_name' => 'admin_nordcode_core_workoutdayofcourse_show',));
                                }

                                // admin_nordcode_core_workoutdayofcourse_export
                                if ($pathinfo === '/admin/nordcode/core/workoutdayofcourse/export') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_dayofcourse',  '_sonata_name' => 'admin_nordcode_core_workoutdayofcourse_export',  '_route' => 'admin_nordcode_core_workoutdayofcourse_export',);
                                }

                            }

                            if (0 === strpos($pathinfo, '/admin/nordcode/core/workoutfavorite')) {
                                // admin_nordcode_core_workoutfavorite_list
                                if ($pathinfo === '/admin/nordcode/core/workoutfavorite/list') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_favorite',  '_sonata_name' => 'admin_nordcode_core_workoutfavorite_list',  '_route' => 'admin_nordcode_core_workoutfavorite_list',);
                                }

                                // admin_nordcode_core_workoutfavorite_create
                                if ($pathinfo === '/admin/nordcode/core/workoutfavorite/create') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_favorite',  '_sonata_name' => 'admin_nordcode_core_workoutfavorite_create',  '_route' => 'admin_nordcode_core_workoutfavorite_create',);
                                }

                                // admin_nordcode_core_workoutfavorite_batch
                                if ($pathinfo === '/admin/nordcode/core/workoutfavorite/batch') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_favorite',  '_sonata_name' => 'admin_nordcode_core_workoutfavorite_batch',  '_route' => 'admin_nordcode_core_workoutfavorite_batch',);
                                }

                                // admin_nordcode_core_workoutfavorite_edit
                                if (preg_match('#^/admin/nordcode/core/workoutfavorite/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_workoutfavorite_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_favorite',  '_sonata_name' => 'admin_nordcode_core_workoutfavorite_edit',));
                                }

                                // admin_nordcode_core_workoutfavorite_delete
                                if (preg_match('#^/admin/nordcode/core/workoutfavorite/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_workoutfavorite_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_favorite',  '_sonata_name' => 'admin_nordcode_core_workoutfavorite_delete',));
                                }

                                // admin_nordcode_core_workoutfavorite_show
                                if (preg_match('#^/admin/nordcode/core/workoutfavorite/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_workoutfavorite_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_favorite',  '_sonata_name' => 'admin_nordcode_core_workoutfavorite_show',));
                                }

                                // admin_nordcode_core_workoutfavorite_export
                                if ($pathinfo === '/admin/nordcode/core/workoutfavorite/export') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_favorite',  '_sonata_name' => 'admin_nordcode_core_workoutfavorite_export',  '_route' => 'admin_nordcode_core_workoutfavorite_export',);
                                }

                            }

                            if (0 === strpos($pathinfo, '/admin/nordcode/core/workoutlocation')) {
                                // admin_nordcode_core_workoutlocation_list
                                if ($pathinfo === '/admin/nordcode/core/workoutlocation/list') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_location',  '_sonata_name' => 'admin_nordcode_core_workoutlocation_list',  '_route' => 'admin_nordcode_core_workoutlocation_list',);
                                }

                                // admin_nordcode_core_workoutlocation_create
                                if ($pathinfo === '/admin/nordcode/core/workoutlocation/create') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_location',  '_sonata_name' => 'admin_nordcode_core_workoutlocation_create',  '_route' => 'admin_nordcode_core_workoutlocation_create',);
                                }

                                // admin_nordcode_core_workoutlocation_batch
                                if ($pathinfo === '/admin/nordcode/core/workoutlocation/batch') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_location',  '_sonata_name' => 'admin_nordcode_core_workoutlocation_batch',  '_route' => 'admin_nordcode_core_workoutlocation_batch',);
                                }

                                // admin_nordcode_core_workoutlocation_edit
                                if (preg_match('#^/admin/nordcode/core/workoutlocation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_workoutlocation_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_location',  '_sonata_name' => 'admin_nordcode_core_workoutlocation_edit',));
                                }

                                // admin_nordcode_core_workoutlocation_delete
                                if (preg_match('#^/admin/nordcode/core/workoutlocation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_workoutlocation_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_location',  '_sonata_name' => 'admin_nordcode_core_workoutlocation_delete',));
                                }

                                // admin_nordcode_core_workoutlocation_show
                                if (preg_match('#^/admin/nordcode/core/workoutlocation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_workoutlocation_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_location',  '_sonata_name' => 'admin_nordcode_core_workoutlocation_show',));
                                }

                                // admin_nordcode_core_workoutlocation_export
                                if ($pathinfo === '/admin/nordcode/core/workoutlocation/export') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.workout_location',  '_sonata_name' => 'admin_nordcode_core_workoutlocation_export',  '_route' => 'admin_nordcode_core_workoutlocation_export',);
                                }

                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/nordcode/core/contactmessage')) {
                            // admin_nordcode_core_contactmessage_list
                            if ($pathinfo === '/admin/nordcode/core/contactmessage/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.contact_message',  '_sonata_name' => 'admin_nordcode_core_contactmessage_list',  '_route' => 'admin_nordcode_core_contactmessage_list',);
                            }

                            // admin_nordcode_core_contactmessage_create
                            if ($pathinfo === '/admin/nordcode/core/contactmessage/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.contact_message',  '_sonata_name' => 'admin_nordcode_core_contactmessage_create',  '_route' => 'admin_nordcode_core_contactmessage_create',);
                            }

                            // admin_nordcode_core_contactmessage_batch
                            if ($pathinfo === '/admin/nordcode/core/contactmessage/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.contact_message',  '_sonata_name' => 'admin_nordcode_core_contactmessage_batch',  '_route' => 'admin_nordcode_core_contactmessage_batch',);
                            }

                            // admin_nordcode_core_contactmessage_edit
                            if (preg_match('#^/admin/nordcode/core/contactmessage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_contactmessage_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.contact_message',  '_sonata_name' => 'admin_nordcode_core_contactmessage_edit',));
                            }

                            // admin_nordcode_core_contactmessage_delete
                            if (preg_match('#^/admin/nordcode/core/contactmessage/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_contactmessage_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.contact_message',  '_sonata_name' => 'admin_nordcode_core_contactmessage_delete',));
                            }

                            // admin_nordcode_core_contactmessage_show
                            if (preg_match('#^/admin/nordcode/core/contactmessage/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_contactmessage_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.contact_message',  '_sonata_name' => 'admin_nordcode_core_contactmessage_show',));
                            }

                            // admin_nordcode_core_contactmessage_export
                            if ($pathinfo === '/admin/nordcode/core/contactmessage/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.contact_message',  '_sonata_name' => 'admin_nordcode_core_contactmessage_export',  '_route' => 'admin_nordcode_core_contactmessage_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/nordcode/core/suggest')) {
                            if (0 === strpos($pathinfo, '/admin/nordcode/core/suggesttemplate')) {
                                // admin_nordcode_core_suggesttemplate_list
                                if ($pathinfo === '/admin/nordcode/core/suggesttemplate/list') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.suggest_template',  '_sonata_name' => 'admin_nordcode_core_suggesttemplate_list',  '_route' => 'admin_nordcode_core_suggesttemplate_list',);
                                }

                                // admin_nordcode_core_suggesttemplate_create
                                if ($pathinfo === '/admin/nordcode/core/suggesttemplate/create') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.suggest_template',  '_sonata_name' => 'admin_nordcode_core_suggesttemplate_create',  '_route' => 'admin_nordcode_core_suggesttemplate_create',);
                                }

                                // admin_nordcode_core_suggesttemplate_batch
                                if ($pathinfo === '/admin/nordcode/core/suggesttemplate/batch') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.suggest_template',  '_sonata_name' => 'admin_nordcode_core_suggesttemplate_batch',  '_route' => 'admin_nordcode_core_suggesttemplate_batch',);
                                }

                                // admin_nordcode_core_suggesttemplate_edit
                                if (preg_match('#^/admin/nordcode/core/suggesttemplate/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_suggesttemplate_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.suggest_template',  '_sonata_name' => 'admin_nordcode_core_suggesttemplate_edit',));
                                }

                                // admin_nordcode_core_suggesttemplate_delete
                                if (preg_match('#^/admin/nordcode/core/suggesttemplate/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_suggesttemplate_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.suggest_template',  '_sonata_name' => 'admin_nordcode_core_suggesttemplate_delete',));
                                }

                                // admin_nordcode_core_suggesttemplate_show
                                if (preg_match('#^/admin/nordcode/core/suggesttemplate/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_suggesttemplate_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.suggest_template',  '_sonata_name' => 'admin_nordcode_core_suggesttemplate_show',));
                                }

                                // admin_nordcode_core_suggesttemplate_export
                                if ($pathinfo === '/admin/nordcode/core/suggesttemplate/export') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.suggest_template',  '_sonata_name' => 'admin_nordcode_core_suggesttemplate_export',  '_route' => 'admin_nordcode_core_suggesttemplate_export',);
                                }

                                if (0 === strpos($pathinfo, '/admin/nordcode/core/suggesttemplatehasday')) {
                                    // admin_nordcode_core_suggesttemplatehasday_list
                                    if ($pathinfo === '/admin/nordcode/core/suggesttemplatehasday/list') {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.suggest_template_has_day',  '_sonata_name' => 'admin_nordcode_core_suggesttemplatehasday_list',  '_route' => 'admin_nordcode_core_suggesttemplatehasday_list',);
                                    }

                                    // admin_nordcode_core_suggesttemplatehasday_create
                                    if ($pathinfo === '/admin/nordcode/core/suggesttemplatehasday/create') {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.suggest_template_has_day',  '_sonata_name' => 'admin_nordcode_core_suggesttemplatehasday_create',  '_route' => 'admin_nordcode_core_suggesttemplatehasday_create',);
                                    }

                                    // admin_nordcode_core_suggesttemplatehasday_batch
                                    if ($pathinfo === '/admin/nordcode/core/suggesttemplatehasday/batch') {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.suggest_template_has_day',  '_sonata_name' => 'admin_nordcode_core_suggesttemplatehasday_batch',  '_route' => 'admin_nordcode_core_suggesttemplatehasday_batch',);
                                    }

                                    // admin_nordcode_core_suggesttemplatehasday_edit
                                    if (preg_match('#^/admin/nordcode/core/suggesttemplatehasday/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_suggesttemplatehasday_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.suggest_template_has_day',  '_sonata_name' => 'admin_nordcode_core_suggesttemplatehasday_edit',));
                                    }

                                    // admin_nordcode_core_suggesttemplatehasday_delete
                                    if (preg_match('#^/admin/nordcode/core/suggesttemplatehasday/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_suggesttemplatehasday_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.suggest_template_has_day',  '_sonata_name' => 'admin_nordcode_core_suggesttemplatehasday_delete',));
                                    }

                                    // admin_nordcode_core_suggesttemplatehasday_show
                                    if (preg_match('#^/admin/nordcode/core/suggesttemplatehasday/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_suggesttemplatehasday_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.suggest_template_has_day',  '_sonata_name' => 'admin_nordcode_core_suggesttemplatehasday_show',));
                                    }

                                    // admin_nordcode_core_suggesttemplatehasday_export
                                    if ($pathinfo === '/admin/nordcode/core/suggesttemplatehasday/export') {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.suggest_template_has_day',  '_sonata_name' => 'admin_nordcode_core_suggesttemplatehasday_export',  '_route' => 'admin_nordcode_core_suggesttemplatehasday_export',);
                                    }

                                }

                            }

                            if (0 === strpos($pathinfo, '/admin/nordcode/core/suggestday')) {
                                // admin_nordcode_core_suggestday_list
                                if ($pathinfo === '/admin/nordcode/core/suggestday/list') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.suggest_day',  '_sonata_name' => 'admin_nordcode_core_suggestday_list',  '_route' => 'admin_nordcode_core_suggestday_list',);
                                }

                                // admin_nordcode_core_suggestday_create
                                if ($pathinfo === '/admin/nordcode/core/suggestday/create') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.suggest_day',  '_sonata_name' => 'admin_nordcode_core_suggestday_create',  '_route' => 'admin_nordcode_core_suggestday_create',);
                                }

                                // admin_nordcode_core_suggestday_batch
                                if ($pathinfo === '/admin/nordcode/core/suggestday/batch') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.suggest_day',  '_sonata_name' => 'admin_nordcode_core_suggestday_batch',  '_route' => 'admin_nordcode_core_suggestday_batch',);
                                }

                                // admin_nordcode_core_suggestday_edit
                                if (preg_match('#^/admin/nordcode/core/suggestday/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_suggestday_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.suggest_day',  '_sonata_name' => 'admin_nordcode_core_suggestday_edit',));
                                }

                                // admin_nordcode_core_suggestday_delete
                                if (preg_match('#^/admin/nordcode/core/suggestday/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_suggestday_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.suggest_day',  '_sonata_name' => 'admin_nordcode_core_suggestday_delete',));
                                }

                                // admin_nordcode_core_suggestday_show
                                if (preg_match('#^/admin/nordcode/core/suggestday/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_suggestday_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.suggest_day',  '_sonata_name' => 'admin_nordcode_core_suggestday_show',));
                                }

                                // admin_nordcode_core_suggestday_export
                                if ($pathinfo === '/admin/nordcode/core/suggestday/export') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.suggest_day',  '_sonata_name' => 'admin_nordcode_core_suggestday_export',  '_route' => 'admin_nordcode_core_suggestday_export',);
                                }

                                if (0 === strpos($pathinfo, '/admin/nordcode/core/suggestdayitem')) {
                                    // admin_nordcode_core_suggestdayitem_list
                                    if ($pathinfo === '/admin/nordcode/core/suggestdayitem/list') {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.suggest_day_item',  '_sonata_name' => 'admin_nordcode_core_suggestdayitem_list',  '_route' => 'admin_nordcode_core_suggestdayitem_list',);
                                    }

                                    // admin_nordcode_core_suggestdayitem_create
                                    if ($pathinfo === '/admin/nordcode/core/suggestdayitem/create') {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.suggest_day_item',  '_sonata_name' => 'admin_nordcode_core_suggestdayitem_create',  '_route' => 'admin_nordcode_core_suggestdayitem_create',);
                                    }

                                    // admin_nordcode_core_suggestdayitem_batch
                                    if ($pathinfo === '/admin/nordcode/core/suggestdayitem/batch') {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.suggest_day_item',  '_sonata_name' => 'admin_nordcode_core_suggestdayitem_batch',  '_route' => 'admin_nordcode_core_suggestdayitem_batch',);
                                    }

                                    // admin_nordcode_core_suggestdayitem_edit
                                    if (preg_match('#^/admin/nordcode/core/suggestdayitem/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_suggestdayitem_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.suggest_day_item',  '_sonata_name' => 'admin_nordcode_core_suggestdayitem_edit',));
                                    }

                                    // admin_nordcode_core_suggestdayitem_delete
                                    if (preg_match('#^/admin/nordcode/core/suggestdayitem/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_suggestdayitem_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.suggest_day_item',  '_sonata_name' => 'admin_nordcode_core_suggestdayitem_delete',));
                                    }

                                    // admin_nordcode_core_suggestdayitem_show
                                    if (preg_match('#^/admin/nordcode/core/suggestdayitem/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_suggestdayitem_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.suggest_day_item',  '_sonata_name' => 'admin_nordcode_core_suggestdayitem_show',));
                                    }

                                    // admin_nordcode_core_suggestdayitem_export
                                    if ($pathinfo === '/admin/nordcode/core/suggestdayitem/export') {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.suggest_day_item',  '_sonata_name' => 'admin_nordcode_core_suggestdayitem_export',  '_route' => 'admin_nordcode_core_suggestdayitem_export',);
                                    }

                                }

                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/nordcode/core/diary')) {
                            // admin_nordcode_core_diary_list
                            if ($pathinfo === '/admin/nordcode/core/diary/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.diary',  '_sonata_name' => 'admin_nordcode_core_diary_list',  '_route' => 'admin_nordcode_core_diary_list',);
                            }

                            // admin_nordcode_core_diary_create
                            if ($pathinfo === '/admin/nordcode/core/diary/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.diary',  '_sonata_name' => 'admin_nordcode_core_diary_create',  '_route' => 'admin_nordcode_core_diary_create',);
                            }

                            // admin_nordcode_core_diary_batch
                            if ($pathinfo === '/admin/nordcode/core/diary/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.diary',  '_sonata_name' => 'admin_nordcode_core_diary_batch',  '_route' => 'admin_nordcode_core_diary_batch',);
                            }

                            // admin_nordcode_core_diary_edit
                            if (preg_match('#^/admin/nordcode/core/diary/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_diary_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.diary',  '_sonata_name' => 'admin_nordcode_core_diary_edit',));
                            }

                            // admin_nordcode_core_diary_delete
                            if (preg_match('#^/admin/nordcode/core/diary/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_diary_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.diary',  '_sonata_name' => 'admin_nordcode_core_diary_delete',));
                            }

                            // admin_nordcode_core_diary_show
                            if (preg_match('#^/admin/nordcode/core/diary/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_diary_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.diary',  '_sonata_name' => 'admin_nordcode_core_diary_show',));
                            }

                            // admin_nordcode_core_diary_export
                            if ($pathinfo === '/admin/nordcode/core/diary/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.diary',  '_sonata_name' => 'admin_nordcode_core_diary_export',  '_route' => 'admin_nordcode_core_diary_export',);
                            }

                            if (0 === strpos($pathinfo, '/admin/nordcode/core/diaryentry')) {
                                // admin_nordcode_core_diaryentry_list
                                if ($pathinfo === '/admin/nordcode/core/diaryentry/list') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.diary_entry',  '_sonata_name' => 'admin_nordcode_core_diaryentry_list',  '_route' => 'admin_nordcode_core_diaryentry_list',);
                                }

                                // admin_nordcode_core_diaryentry_create
                                if ($pathinfo === '/admin/nordcode/core/diaryentry/create') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.diary_entry',  '_sonata_name' => 'admin_nordcode_core_diaryentry_create',  '_route' => 'admin_nordcode_core_diaryentry_create',);
                                }

                                // admin_nordcode_core_diaryentry_batch
                                if ($pathinfo === '/admin/nordcode/core/diaryentry/batch') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.diary_entry',  '_sonata_name' => 'admin_nordcode_core_diaryentry_batch',  '_route' => 'admin_nordcode_core_diaryentry_batch',);
                                }

                                // admin_nordcode_core_diaryentry_edit
                                if (preg_match('#^/admin/nordcode/core/diaryentry/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_diaryentry_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.diary_entry',  '_sonata_name' => 'admin_nordcode_core_diaryentry_edit',));
                                }

                                // admin_nordcode_core_diaryentry_delete
                                if (preg_match('#^/admin/nordcode/core/diaryentry/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_diaryentry_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.diary_entry',  '_sonata_name' => 'admin_nordcode_core_diaryentry_delete',));
                                }

                                // admin_nordcode_core_diaryentry_show
                                if (preg_match('#^/admin/nordcode/core/diaryentry/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_diaryentry_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.diary_entry',  '_sonata_name' => 'admin_nordcode_core_diaryentry_show',));
                                }

                                // admin_nordcode_core_diaryentry_export
                                if ($pathinfo === '/admin/nordcode/core/diaryentry/export') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.diary_entry',  '_sonata_name' => 'admin_nordcode_core_diaryentry_export',  '_route' => 'admin_nordcode_core_diaryentry_export',);
                                }

                                if (0 === strpos($pathinfo, '/admin/nordcode/core/diaryentrycomment')) {
                                    // admin_nordcode_core_diaryentrycomment_list
                                    if ($pathinfo === '/admin/nordcode/core/diaryentrycomment/list') {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.diary_entry_comment',  '_sonata_name' => 'admin_nordcode_core_diaryentrycomment_list',  '_route' => 'admin_nordcode_core_diaryentrycomment_list',);
                                    }

                                    // admin_nordcode_core_diaryentrycomment_create
                                    if ($pathinfo === '/admin/nordcode/core/diaryentrycomment/create') {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.diary_entry_comment',  '_sonata_name' => 'admin_nordcode_core_diaryentrycomment_create',  '_route' => 'admin_nordcode_core_diaryentrycomment_create',);
                                    }

                                    // admin_nordcode_core_diaryentrycomment_batch
                                    if ($pathinfo === '/admin/nordcode/core/diaryentrycomment/batch') {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.diary_entry_comment',  '_sonata_name' => 'admin_nordcode_core_diaryentrycomment_batch',  '_route' => 'admin_nordcode_core_diaryentrycomment_batch',);
                                    }

                                    // admin_nordcode_core_diaryentrycomment_edit
                                    if (preg_match('#^/admin/nordcode/core/diaryentrycomment/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_diaryentrycomment_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.diary_entry_comment',  '_sonata_name' => 'admin_nordcode_core_diaryentrycomment_edit',));
                                    }

                                    // admin_nordcode_core_diaryentrycomment_delete
                                    if (preg_match('#^/admin/nordcode/core/diaryentrycomment/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_diaryentrycomment_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.diary_entry_comment',  '_sonata_name' => 'admin_nordcode_core_diaryentrycomment_delete',));
                                    }

                                    // admin_nordcode_core_diaryentrycomment_show
                                    if (preg_match('#^/admin/nordcode/core/diaryentrycomment/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_diaryentrycomment_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.diary_entry_comment',  '_sonata_name' => 'admin_nordcode_core_diaryentrycomment_show',));
                                    }

                                    // admin_nordcode_core_diaryentrycomment_export
                                    if ($pathinfo === '/admin/nordcode/core/diaryentrycomment/export') {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.diary_entry_comment',  '_sonata_name' => 'admin_nordcode_core_diaryentrycomment_export',  '_route' => 'admin_nordcode_core_diaryentrycomment_export',);
                                    }

                                }

                                if (0 === strpos($pathinfo, '/admin/nordcode/core/diaryentryvote')) {
                                    // admin_nordcode_core_diaryentryvote_list
                                    if ($pathinfo === '/admin/nordcode/core/diaryentryvote/list') {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.diary_entry_vote',  '_sonata_name' => 'admin_nordcode_core_diaryentryvote_list',  '_route' => 'admin_nordcode_core_diaryentryvote_list',);
                                    }

                                    // admin_nordcode_core_diaryentryvote_create
                                    if ($pathinfo === '/admin/nordcode/core/diaryentryvote/create') {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.diary_entry_vote',  '_sonata_name' => 'admin_nordcode_core_diaryentryvote_create',  '_route' => 'admin_nordcode_core_diaryentryvote_create',);
                                    }

                                    // admin_nordcode_core_diaryentryvote_batch
                                    if ($pathinfo === '/admin/nordcode/core/diaryentryvote/batch') {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.diary_entry_vote',  '_sonata_name' => 'admin_nordcode_core_diaryentryvote_batch',  '_route' => 'admin_nordcode_core_diaryentryvote_batch',);
                                    }

                                    // admin_nordcode_core_diaryentryvote_edit
                                    if (preg_match('#^/admin/nordcode/core/diaryentryvote/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_diaryentryvote_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.diary_entry_vote',  '_sonata_name' => 'admin_nordcode_core_diaryentryvote_edit',));
                                    }

                                    // admin_nordcode_core_diaryentryvote_delete
                                    if (preg_match('#^/admin/nordcode/core/diaryentryvote/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_diaryentryvote_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.diary_entry_vote',  '_sonata_name' => 'admin_nordcode_core_diaryentryvote_delete',));
                                    }

                                    // admin_nordcode_core_diaryentryvote_show
                                    if (preg_match('#^/admin/nordcode/core/diaryentryvote/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_diaryentryvote_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.diary_entry_vote',  '_sonata_name' => 'admin_nordcode_core_diaryentryvote_show',));
                                    }

                                    // admin_nordcode_core_diaryentryvote_export
                                    if ($pathinfo === '/admin/nordcode/core/diaryentryvote/export') {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.diary_entry_vote',  '_sonata_name' => 'admin_nordcode_core_diaryentryvote_export',  '_route' => 'admin_nordcode_core_diaryentryvote_export',);
                                    }

                                }

                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/nordcode/core/content')) {
                            // admin_nordcode_core_content_list
                            if ($pathinfo === '/admin/nordcode/core/content/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.content',  '_sonata_name' => 'admin_nordcode_core_content_list',  '_route' => 'admin_nordcode_core_content_list',);
                            }

                            // admin_nordcode_core_content_create
                            if ($pathinfo === '/admin/nordcode/core/content/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.content',  '_sonata_name' => 'admin_nordcode_core_content_create',  '_route' => 'admin_nordcode_core_content_create',);
                            }

                            // admin_nordcode_core_content_batch
                            if ($pathinfo === '/admin/nordcode/core/content/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.content',  '_sonata_name' => 'admin_nordcode_core_content_batch',  '_route' => 'admin_nordcode_core_content_batch',);
                            }

                            // admin_nordcode_core_content_edit
                            if (preg_match('#^/admin/nordcode/core/content/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_content_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.content',  '_sonata_name' => 'admin_nordcode_core_content_edit',));
                            }

                            // admin_nordcode_core_content_delete
                            if (preg_match('#^/admin/nordcode/core/content/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_content_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.content',  '_sonata_name' => 'admin_nordcode_core_content_delete',));
                            }

                            // admin_nordcode_core_content_show
                            if (preg_match('#^/admin/nordcode/core/content/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_content_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.content',  '_sonata_name' => 'admin_nordcode_core_content_show',));
                            }

                            // admin_nordcode_core_content_export
                            if ($pathinfo === '/admin/nordcode/core/content/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.content',  '_sonata_name' => 'admin_nordcode_core_content_export',  '_route' => 'admin_nordcode_core_content_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/nordcode/core/sflife')) {
                            if (0 === strpos($pathinfo, '/admin/nordcode/core/sflifeheader')) {
                                // admin_nordcode_core_sflifeheader_list
                                if ($pathinfo === '/admin/nordcode/core/sflifeheader/list') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.sf_life_header',  '_sonata_name' => 'admin_nordcode_core_sflifeheader_list',  '_route' => 'admin_nordcode_core_sflifeheader_list',);
                                }

                                // admin_nordcode_core_sflifeheader_create
                                if ($pathinfo === '/admin/nordcode/core/sflifeheader/create') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.sf_life_header',  '_sonata_name' => 'admin_nordcode_core_sflifeheader_create',  '_route' => 'admin_nordcode_core_sflifeheader_create',);
                                }

                                // admin_nordcode_core_sflifeheader_batch
                                if ($pathinfo === '/admin/nordcode/core/sflifeheader/batch') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.sf_life_header',  '_sonata_name' => 'admin_nordcode_core_sflifeheader_batch',  '_route' => 'admin_nordcode_core_sflifeheader_batch',);
                                }

                                // admin_nordcode_core_sflifeheader_edit
                                if (preg_match('#^/admin/nordcode/core/sflifeheader/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_sflifeheader_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.sf_life_header',  '_sonata_name' => 'admin_nordcode_core_sflifeheader_edit',));
                                }

                                // admin_nordcode_core_sflifeheader_delete
                                if (preg_match('#^/admin/nordcode/core/sflifeheader/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_sflifeheader_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.sf_life_header',  '_sonata_name' => 'admin_nordcode_core_sflifeheader_delete',));
                                }

                                // admin_nordcode_core_sflifeheader_show
                                if (preg_match('#^/admin/nordcode/core/sflifeheader/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_sflifeheader_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.sf_life_header',  '_sonata_name' => 'admin_nordcode_core_sflifeheader_show',));
                                }

                                // admin_nordcode_core_sflifeheader_export
                                if ($pathinfo === '/admin/nordcode/core/sflifeheader/export') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.sf_life_header',  '_sonata_name' => 'admin_nordcode_core_sflifeheader_export',  '_route' => 'admin_nordcode_core_sflifeheader_export',);
                                }

                            }

                            if (0 === strpos($pathinfo, '/admin/nordcode/core/sflifevideo')) {
                                // admin_nordcode_core_sflifevideo_list
                                if ($pathinfo === '/admin/nordcode/core/sflifevideo/list') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_switchfit.admin.sf_life_video',  '_sonata_name' => 'admin_nordcode_core_sflifevideo_list',  '_route' => 'admin_nordcode_core_sflifevideo_list',);
                                }

                                // admin_nordcode_core_sflifevideo_create
                                if ($pathinfo === '/admin/nordcode/core/sflifevideo/create') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_switchfit.admin.sf_life_video',  '_sonata_name' => 'admin_nordcode_core_sflifevideo_create',  '_route' => 'admin_nordcode_core_sflifevideo_create',);
                                }

                                // admin_nordcode_core_sflifevideo_batch
                                if ($pathinfo === '/admin/nordcode/core/sflifevideo/batch') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_switchfit.admin.sf_life_video',  '_sonata_name' => 'admin_nordcode_core_sflifevideo_batch',  '_route' => 'admin_nordcode_core_sflifevideo_batch',);
                                }

                                // admin_nordcode_core_sflifevideo_edit
                                if (preg_match('#^/admin/nordcode/core/sflifevideo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_sflifevideo_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_switchfit.admin.sf_life_video',  '_sonata_name' => 'admin_nordcode_core_sflifevideo_edit',));
                                }

                                // admin_nordcode_core_sflifevideo_delete
                                if (preg_match('#^/admin/nordcode/core/sflifevideo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_sflifevideo_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_switchfit.admin.sf_life_video',  '_sonata_name' => 'admin_nordcode_core_sflifevideo_delete',));
                                }

                                // admin_nordcode_core_sflifevideo_show
                                if (preg_match('#^/admin/nordcode/core/sflifevideo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_core_sflifevideo_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_switchfit.admin.sf_life_video',  '_sonata_name' => 'admin_nordcode_core_sflifevideo_show',));
                                }

                                // admin_nordcode_core_sflifevideo_export
                                if ($pathinfo === '/admin/nordcode/core/sflifevideo/export') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_switchfit.admin.sf_life_video',  '_sonata_name' => 'admin_nordcode_core_sflifevideo_export',  '_route' => 'admin_nordcode_core_sflifevideo_export',);
                                }

                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/nordcode/academy')) {
                        if (0 === strpos($pathinfo, '/admin/nordcode/academy/academy')) {
                            // admin_nordcode_academy_academy_list
                            if ($pathinfo === '/admin/nordcode/academy/academy/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_academy.admin.academy',  '_sonata_name' => 'admin_nordcode_academy_academy_list',  '_route' => 'admin_nordcode_academy_academy_list',);
                            }

                            // admin_nordcode_academy_academy_create
                            if ($pathinfo === '/admin/nordcode/academy/academy/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_academy.admin.academy',  '_sonata_name' => 'admin_nordcode_academy_academy_create',  '_route' => 'admin_nordcode_academy_academy_create',);
                            }

                            // admin_nordcode_academy_academy_batch
                            if ($pathinfo === '/admin/nordcode/academy/academy/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_academy.admin.academy',  '_sonata_name' => 'admin_nordcode_academy_academy_batch',  '_route' => 'admin_nordcode_academy_academy_batch',);
                            }

                            // admin_nordcode_academy_academy_edit
                            if (preg_match('#^/admin/nordcode/academy/academy/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_academy_academy_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_academy.admin.academy',  '_sonata_name' => 'admin_nordcode_academy_academy_edit',));
                            }

                            // admin_nordcode_academy_academy_delete
                            if (preg_match('#^/admin/nordcode/academy/academy/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_academy_academy_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_academy.admin.academy',  '_sonata_name' => 'admin_nordcode_academy_academy_delete',));
                            }

                            // admin_nordcode_academy_academy_show
                            if (preg_match('#^/admin/nordcode/academy/academy/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_academy_academy_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_academy.admin.academy',  '_sonata_name' => 'admin_nordcode_academy_academy_show',));
                            }

                            // admin_nordcode_academy_academy_export
                            if ($pathinfo === '/admin/nordcode/academy/academy/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_academy.admin.academy',  '_sonata_name' => 'admin_nordcode_academy_academy_export',  '_route' => 'admin_nordcode_academy_academy_export',);
                            }

                            if (0 === strpos($pathinfo, '/admin/nordcode/academy/academyhasmodule')) {
                                // admin_nordcode_academy_academyhasmodule_list
                                if ($pathinfo === '/admin/nordcode/academy/academyhasmodule/list') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_academy.admin.academy_has_module',  '_sonata_name' => 'admin_nordcode_academy_academyhasmodule_list',  '_route' => 'admin_nordcode_academy_academyhasmodule_list',);
                                }

                                // admin_nordcode_academy_academyhasmodule_create
                                if ($pathinfo === '/admin/nordcode/academy/academyhasmodule/create') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_academy.admin.academy_has_module',  '_sonata_name' => 'admin_nordcode_academy_academyhasmodule_create',  '_route' => 'admin_nordcode_academy_academyhasmodule_create',);
                                }

                                // admin_nordcode_academy_academyhasmodule_batch
                                if ($pathinfo === '/admin/nordcode/academy/academyhasmodule/batch') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_academy.admin.academy_has_module',  '_sonata_name' => 'admin_nordcode_academy_academyhasmodule_batch',  '_route' => 'admin_nordcode_academy_academyhasmodule_batch',);
                                }

                                // admin_nordcode_academy_academyhasmodule_edit
                                if (preg_match('#^/admin/nordcode/academy/academyhasmodule/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_academy_academyhasmodule_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_academy.admin.academy_has_module',  '_sonata_name' => 'admin_nordcode_academy_academyhasmodule_edit',));
                                }

                                // admin_nordcode_academy_academyhasmodule_delete
                                if (preg_match('#^/admin/nordcode/academy/academyhasmodule/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_academy_academyhasmodule_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_academy.admin.academy_has_module',  '_sonata_name' => 'admin_nordcode_academy_academyhasmodule_delete',));
                                }

                                // admin_nordcode_academy_academyhasmodule_show
                                if (preg_match('#^/admin/nordcode/academy/academyhasmodule/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_academy_academyhasmodule_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_academy.admin.academy_has_module',  '_sonata_name' => 'admin_nordcode_academy_academyhasmodule_show',));
                                }

                                // admin_nordcode_academy_academyhasmodule_export
                                if ($pathinfo === '/admin/nordcode/academy/academyhasmodule/export') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_academy.admin.academy_has_module',  '_sonata_name' => 'admin_nordcode_academy_academyhasmodule_export',  '_route' => 'admin_nordcode_academy_academyhasmodule_export',);
                                }

                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/nordcode/academy/module')) {
                            // admin_nordcode_academy_module_list
                            if ($pathinfo === '/admin/nordcode/academy/module/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_academy.admin.module',  '_sonata_name' => 'admin_nordcode_academy_module_list',  '_route' => 'admin_nordcode_academy_module_list',);
                            }

                            // admin_nordcode_academy_module_create
                            if ($pathinfo === '/admin/nordcode/academy/module/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_academy.admin.module',  '_sonata_name' => 'admin_nordcode_academy_module_create',  '_route' => 'admin_nordcode_academy_module_create',);
                            }

                            // admin_nordcode_academy_module_batch
                            if ($pathinfo === '/admin/nordcode/academy/module/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_academy.admin.module',  '_sonata_name' => 'admin_nordcode_academy_module_batch',  '_route' => 'admin_nordcode_academy_module_batch',);
                            }

                            // admin_nordcode_academy_module_edit
                            if (preg_match('#^/admin/nordcode/academy/module/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_academy_module_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_academy.admin.module',  '_sonata_name' => 'admin_nordcode_academy_module_edit',));
                            }

                            // admin_nordcode_academy_module_delete
                            if (preg_match('#^/admin/nordcode/academy/module/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_academy_module_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_academy.admin.module',  '_sonata_name' => 'admin_nordcode_academy_module_delete',));
                            }

                            // admin_nordcode_academy_module_show
                            if (preg_match('#^/admin/nordcode/academy/module/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_academy_module_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_academy.admin.module',  '_sonata_name' => 'admin_nordcode_academy_module_show',));
                            }

                            // admin_nordcode_academy_module_export
                            if ($pathinfo === '/admin/nordcode/academy/module/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_academy.admin.module',  '_sonata_name' => 'admin_nordcode_academy_module_export',  '_route' => 'admin_nordcode_academy_module_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/nordcode/academy/topic')) {
                            // admin_nordcode_academy_topic_list
                            if ($pathinfo === '/admin/nordcode/academy/topic/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_academy.admin.topic',  '_sonata_name' => 'admin_nordcode_academy_topic_list',  '_route' => 'admin_nordcode_academy_topic_list',);
                            }

                            // admin_nordcode_academy_topic_create
                            if ($pathinfo === '/admin/nordcode/academy/topic/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_academy.admin.topic',  '_sonata_name' => 'admin_nordcode_academy_topic_create',  '_route' => 'admin_nordcode_academy_topic_create',);
                            }

                            // admin_nordcode_academy_topic_batch
                            if ($pathinfo === '/admin/nordcode/academy/topic/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_academy.admin.topic',  '_sonata_name' => 'admin_nordcode_academy_topic_batch',  '_route' => 'admin_nordcode_academy_topic_batch',);
                            }

                            // admin_nordcode_academy_topic_edit
                            if (preg_match('#^/admin/nordcode/academy/topic/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_academy_topic_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_academy.admin.topic',  '_sonata_name' => 'admin_nordcode_academy_topic_edit',));
                            }

                            // admin_nordcode_academy_topic_delete
                            if (preg_match('#^/admin/nordcode/academy/topic/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_academy_topic_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_academy.admin.topic',  '_sonata_name' => 'admin_nordcode_academy_topic_delete',));
                            }

                            // admin_nordcode_academy_topic_show
                            if (preg_match('#^/admin/nordcode/academy/topic/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_academy_topic_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_academy.admin.topic',  '_sonata_name' => 'admin_nordcode_academy_topic_show',));
                            }

                            // admin_nordcode_academy_topic_export
                            if ($pathinfo === '/admin/nordcode/academy/topic/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_academy.admin.topic',  '_sonata_name' => 'admin_nordcode_academy_topic_export',  '_route' => 'admin_nordcode_academy_topic_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/nordcode/academy/question')) {
                            // admin_nordcode_academy_question_list
                            if ($pathinfo === '/admin/nordcode/academy/question/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_academy.admin.question',  '_sonata_name' => 'admin_nordcode_academy_question_list',  '_route' => 'admin_nordcode_academy_question_list',);
                            }

                            // admin_nordcode_academy_question_create
                            if ($pathinfo === '/admin/nordcode/academy/question/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_academy.admin.question',  '_sonata_name' => 'admin_nordcode_academy_question_create',  '_route' => 'admin_nordcode_academy_question_create',);
                            }

                            // admin_nordcode_academy_question_batch
                            if ($pathinfo === '/admin/nordcode/academy/question/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_academy.admin.question',  '_sonata_name' => 'admin_nordcode_academy_question_batch',  '_route' => 'admin_nordcode_academy_question_batch',);
                            }

                            // admin_nordcode_academy_question_edit
                            if (preg_match('#^/admin/nordcode/academy/question/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_academy_question_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_academy.admin.question',  '_sonata_name' => 'admin_nordcode_academy_question_edit',));
                            }

                            // admin_nordcode_academy_question_delete
                            if (preg_match('#^/admin/nordcode/academy/question/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_academy_question_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_academy.admin.question',  '_sonata_name' => 'admin_nordcode_academy_question_delete',));
                            }

                            // admin_nordcode_academy_question_show
                            if (preg_match('#^/admin/nordcode/academy/question/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_academy_question_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_academy.admin.question',  '_sonata_name' => 'admin_nordcode_academy_question_show',));
                            }

                            // admin_nordcode_academy_question_export
                            if ($pathinfo === '/admin/nordcode/academy/question/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_academy.admin.question',  '_sonata_name' => 'admin_nordcode_academy_question_export',  '_route' => 'admin_nordcode_academy_question_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/nordcode/academy/answer')) {
                            // admin_nordcode_academy_answer_list
                            if ($pathinfo === '/admin/nordcode/academy/answer/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_academy.admin.answer',  '_sonata_name' => 'admin_nordcode_academy_answer_list',  '_route' => 'admin_nordcode_academy_answer_list',);
                            }

                            // admin_nordcode_academy_answer_create
                            if ($pathinfo === '/admin/nordcode/academy/answer/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_academy.admin.answer',  '_sonata_name' => 'admin_nordcode_academy_answer_create',  '_route' => 'admin_nordcode_academy_answer_create',);
                            }

                            // admin_nordcode_academy_answer_batch
                            if ($pathinfo === '/admin/nordcode/academy/answer/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_academy.admin.answer',  '_sonata_name' => 'admin_nordcode_academy_answer_batch',  '_route' => 'admin_nordcode_academy_answer_batch',);
                            }

                            // admin_nordcode_academy_answer_edit
                            if (preg_match('#^/admin/nordcode/academy/answer/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_academy_answer_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_academy.admin.answer',  '_sonata_name' => 'admin_nordcode_academy_answer_edit',));
                            }

                            // admin_nordcode_academy_answer_delete
                            if (preg_match('#^/admin/nordcode/academy/answer/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_academy_answer_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_academy.admin.answer',  '_sonata_name' => 'admin_nordcode_academy_answer_delete',));
                            }

                            // admin_nordcode_academy_answer_show
                            if (preg_match('#^/admin/nordcode/academy/answer/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_academy_answer_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_academy.admin.answer',  '_sonata_name' => 'admin_nordcode_academy_answer_show',));
                            }

                            // admin_nordcode_academy_answer_export
                            if ($pathinfo === '/admin/nordcode/academy/answer/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_academy.admin.answer',  '_sonata_name' => 'admin_nordcode_academy_answer_export',  '_route' => 'admin_nordcode_academy_answer_export',);
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/nordcode/notification/notice')) {
                        // admin_nordcode_notification_notice_list
                        if ($pathinfo === '/admin/nordcode/notification/notice/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_notification.admin.notice',  '_sonata_name' => 'admin_nordcode_notification_notice_list',  '_route' => 'admin_nordcode_notification_notice_list',);
                        }

                        // admin_nordcode_notification_notice_create
                        if ($pathinfo === '/admin/nordcode/notification/notice/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_notification.admin.notice',  '_sonata_name' => 'admin_nordcode_notification_notice_create',  '_route' => 'admin_nordcode_notification_notice_create',);
                        }

                        // admin_nordcode_notification_notice_batch
                        if ($pathinfo === '/admin/nordcode/notification/notice/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_notification.admin.notice',  '_sonata_name' => 'admin_nordcode_notification_notice_batch',  '_route' => 'admin_nordcode_notification_notice_batch',);
                        }

                        // admin_nordcode_notification_notice_edit
                        if (preg_match('#^/admin/nordcode/notification/notice/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_notification_notice_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_notification.admin.notice',  '_sonata_name' => 'admin_nordcode_notification_notice_edit',));
                        }

                        // admin_nordcode_notification_notice_delete
                        if (preg_match('#^/admin/nordcode/notification/notice/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_notification_notice_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_notification.admin.notice',  '_sonata_name' => 'admin_nordcode_notification_notice_delete',));
                        }

                        // admin_nordcode_notification_notice_show
                        if (preg_match('#^/admin/nordcode/notification/notice/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_notification_notice_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_notification.admin.notice',  '_sonata_name' => 'admin_nordcode_notification_notice_show',));
                        }

                        // admin_nordcode_notification_notice_export
                        if ($pathinfo === '/admin/nordcode/notification/notice/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_notification.admin.notice',  '_sonata_name' => 'admin_nordcode_notification_notice_export',  '_route' => 'admin_nordcode_notification_notice_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/nordcode/q')) {
                        if (0 === strpos($pathinfo, '/admin/nordcode/qa')) {
                            if (0 === strpos($pathinfo, '/admin/nordcode/qa/question')) {
                                // admin_nordcode_qa_question_list
                                if ($pathinfo === '/admin/nordcode/qa/question/list') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_qa.admin.question',  '_sonata_name' => 'admin_nordcode_qa_question_list',  '_route' => 'admin_nordcode_qa_question_list',);
                                }

                                // admin_nordcode_qa_question_create
                                if ($pathinfo === '/admin/nordcode/qa/question/create') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_qa.admin.question',  '_sonata_name' => 'admin_nordcode_qa_question_create',  '_route' => 'admin_nordcode_qa_question_create',);
                                }

                                // admin_nordcode_qa_question_batch
                                if ($pathinfo === '/admin/nordcode/qa/question/batch') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_qa.admin.question',  '_sonata_name' => 'admin_nordcode_qa_question_batch',  '_route' => 'admin_nordcode_qa_question_batch',);
                                }

                                // admin_nordcode_qa_question_edit
                                if (preg_match('#^/admin/nordcode/qa/question/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_qa_question_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_qa.admin.question',  '_sonata_name' => 'admin_nordcode_qa_question_edit',));
                                }

                                // admin_nordcode_qa_question_delete
                                if (preg_match('#^/admin/nordcode/qa/question/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_qa_question_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_qa.admin.question',  '_sonata_name' => 'admin_nordcode_qa_question_delete',));
                                }

                                // admin_nordcode_qa_question_show
                                if (preg_match('#^/admin/nordcode/qa/question/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_qa_question_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_qa.admin.question',  '_sonata_name' => 'admin_nordcode_qa_question_show',));
                                }

                                // admin_nordcode_qa_question_export
                                if ($pathinfo === '/admin/nordcode/qa/question/export') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_qa.admin.question',  '_sonata_name' => 'admin_nordcode_qa_question_export',  '_route' => 'admin_nordcode_qa_question_export',);
                                }

                            }

                            if (0 === strpos($pathinfo, '/admin/nordcode/qa/answer')) {
                                // admin_nordcode_qa_answer_list
                                if ($pathinfo === '/admin/nordcode/qa/answer/list') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_qa.admin.answer',  '_sonata_name' => 'admin_nordcode_qa_answer_list',  '_route' => 'admin_nordcode_qa_answer_list',);
                                }

                                // admin_nordcode_qa_answer_create
                                if ($pathinfo === '/admin/nordcode/qa/answer/create') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_qa.admin.answer',  '_sonata_name' => 'admin_nordcode_qa_answer_create',  '_route' => 'admin_nordcode_qa_answer_create',);
                                }

                                // admin_nordcode_qa_answer_batch
                                if ($pathinfo === '/admin/nordcode/qa/answer/batch') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_qa.admin.answer',  '_sonata_name' => 'admin_nordcode_qa_answer_batch',  '_route' => 'admin_nordcode_qa_answer_batch',);
                                }

                                // admin_nordcode_qa_answer_edit
                                if (preg_match('#^/admin/nordcode/qa/answer/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_qa_answer_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_qa.admin.answer',  '_sonata_name' => 'admin_nordcode_qa_answer_edit',));
                                }

                                // admin_nordcode_qa_answer_delete
                                if (preg_match('#^/admin/nordcode/qa/answer/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_qa_answer_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_qa.admin.answer',  '_sonata_name' => 'admin_nordcode_qa_answer_delete',));
                                }

                                // admin_nordcode_qa_answer_show
                                if (preg_match('#^/admin/nordcode/qa/answer/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_qa_answer_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_qa.admin.answer',  '_sonata_name' => 'admin_nordcode_qa_answer_show',));
                                }

                                // admin_nordcode_qa_answer_export
                                if ($pathinfo === '/admin/nordcode/qa/answer/export') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_qa.admin.answer',  '_sonata_name' => 'admin_nordcode_qa_answer_export',  '_route' => 'admin_nordcode_qa_answer_export',);
                                }

                            }

                            if (0 === strpos($pathinfo, '/admin/nordcode/qa/category')) {
                                // admin_nordcode_qa_category_list
                                if ($pathinfo === '/admin/nordcode/qa/category/list') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_qa.admin.category',  '_sonata_name' => 'admin_nordcode_qa_category_list',  '_route' => 'admin_nordcode_qa_category_list',);
                                }

                                // admin_nordcode_qa_category_create
                                if ($pathinfo === '/admin/nordcode/qa/category/create') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_qa.admin.category',  '_sonata_name' => 'admin_nordcode_qa_category_create',  '_route' => 'admin_nordcode_qa_category_create',);
                                }

                                // admin_nordcode_qa_category_batch
                                if ($pathinfo === '/admin/nordcode/qa/category/batch') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_qa.admin.category',  '_sonata_name' => 'admin_nordcode_qa_category_batch',  '_route' => 'admin_nordcode_qa_category_batch',);
                                }

                                // admin_nordcode_qa_category_edit
                                if (preg_match('#^/admin/nordcode/qa/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_qa_category_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_qa.admin.category',  '_sonata_name' => 'admin_nordcode_qa_category_edit',));
                                }

                                // admin_nordcode_qa_category_delete
                                if (preg_match('#^/admin/nordcode/qa/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_qa_category_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_qa.admin.category',  '_sonata_name' => 'admin_nordcode_qa_category_delete',));
                                }

                                // admin_nordcode_qa_category_show
                                if (preg_match('#^/admin/nordcode/qa/category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_qa_category_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_qa.admin.category',  '_sonata_name' => 'admin_nordcode_qa_category_show',));
                                }

                                // admin_nordcode_qa_category_export
                                if ($pathinfo === '/admin/nordcode/qa/category/export') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_qa.admin.category',  '_sonata_name' => 'admin_nordcode_qa_category_export',  '_route' => 'admin_nordcode_qa_category_export',);
                                }

                            }

                            if (0 === strpos($pathinfo, '/admin/nordcode/qa/vote')) {
                                // admin_nordcode_qa_vote_list
                                if ($pathinfo === '/admin/nordcode/qa/vote/list') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_qa.admin.vote',  '_sonata_name' => 'admin_nordcode_qa_vote_list',  '_route' => 'admin_nordcode_qa_vote_list',);
                                }

                                // admin_nordcode_qa_vote_create
                                if ($pathinfo === '/admin/nordcode/qa/vote/create') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_qa.admin.vote',  '_sonata_name' => 'admin_nordcode_qa_vote_create',  '_route' => 'admin_nordcode_qa_vote_create',);
                                }

                                // admin_nordcode_qa_vote_batch
                                if ($pathinfo === '/admin/nordcode/qa/vote/batch') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_qa.admin.vote',  '_sonata_name' => 'admin_nordcode_qa_vote_batch',  '_route' => 'admin_nordcode_qa_vote_batch',);
                                }

                                // admin_nordcode_qa_vote_edit
                                if (preg_match('#^/admin/nordcode/qa/vote/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_qa_vote_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_qa.admin.vote',  '_sonata_name' => 'admin_nordcode_qa_vote_edit',));
                                }

                                // admin_nordcode_qa_vote_delete
                                if (preg_match('#^/admin/nordcode/qa/vote/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_qa_vote_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_qa.admin.vote',  '_sonata_name' => 'admin_nordcode_qa_vote_delete',));
                                }

                                // admin_nordcode_qa_vote_show
                                if (preg_match('#^/admin/nordcode/qa/vote/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_qa_vote_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_qa.admin.vote',  '_sonata_name' => 'admin_nordcode_qa_vote_show',));
                                }

                                // admin_nordcode_qa_vote_export
                                if ($pathinfo === '/admin/nordcode/qa/vote/export') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_qa.admin.vote',  '_sonata_name' => 'admin_nordcode_qa_vote_export',  '_route' => 'admin_nordcode_qa_vote_export',);
                                }

                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/nordcode/quest/quest')) {
                            // admin_nordcode_quest_quest_list
                            if ($pathinfo === '/admin/nordcode/quest/quest/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_quest.admin.quest',  '_sonata_name' => 'admin_nordcode_quest_quest_list',  '_route' => 'admin_nordcode_quest_quest_list',);
                            }

                            // admin_nordcode_quest_quest_create
                            if ($pathinfo === '/admin/nordcode/quest/quest/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_quest.admin.quest',  '_sonata_name' => 'admin_nordcode_quest_quest_create',  '_route' => 'admin_nordcode_quest_quest_create',);
                            }

                            // admin_nordcode_quest_quest_batch
                            if ($pathinfo === '/admin/nordcode/quest/quest/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_quest.admin.quest',  '_sonata_name' => 'admin_nordcode_quest_quest_batch',  '_route' => 'admin_nordcode_quest_quest_batch',);
                            }

                            // admin_nordcode_quest_quest_edit
                            if (preg_match('#^/admin/nordcode/quest/quest/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_quest_quest_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_quest.admin.quest',  '_sonata_name' => 'admin_nordcode_quest_quest_edit',));
                            }

                            // admin_nordcode_quest_quest_delete
                            if (preg_match('#^/admin/nordcode/quest/quest/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_quest_quest_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_quest.admin.quest',  '_sonata_name' => 'admin_nordcode_quest_quest_delete',));
                            }

                            // admin_nordcode_quest_quest_show
                            if (preg_match('#^/admin/nordcode/quest/quest/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_quest_quest_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_quest.admin.quest',  '_sonata_name' => 'admin_nordcode_quest_quest_show',));
                            }

                            // admin_nordcode_quest_quest_export
                            if ($pathinfo === '/admin/nordcode/quest/quest/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_quest.admin.quest',  '_sonata_name' => 'admin_nordcode_quest_quest_export',  '_route' => 'admin_nordcode_quest_quest_export',);
                            }

                            if (0 === strpos($pathinfo, '/admin/nordcode/quest/questcategory')) {
                                // admin_nordcode_quest_questcategory_list
                                if ($pathinfo === '/admin/nordcode/quest/questcategory/list') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_quest.admin.quest_category',  '_sonata_name' => 'admin_nordcode_quest_questcategory_list',  '_route' => 'admin_nordcode_quest_questcategory_list',);
                                }

                                // admin_nordcode_quest_questcategory_create
                                if ($pathinfo === '/admin/nordcode/quest/questcategory/create') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_quest.admin.quest_category',  '_sonata_name' => 'admin_nordcode_quest_questcategory_create',  '_route' => 'admin_nordcode_quest_questcategory_create',);
                                }

                                // admin_nordcode_quest_questcategory_batch
                                if ($pathinfo === '/admin/nordcode/quest/questcategory/batch') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_quest.admin.quest_category',  '_sonata_name' => 'admin_nordcode_quest_questcategory_batch',  '_route' => 'admin_nordcode_quest_questcategory_batch',);
                                }

                                // admin_nordcode_quest_questcategory_edit
                                if (preg_match('#^/admin/nordcode/quest/questcategory/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_quest_questcategory_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_quest.admin.quest_category',  '_sonata_name' => 'admin_nordcode_quest_questcategory_edit',));
                                }

                                // admin_nordcode_quest_questcategory_delete
                                if (preg_match('#^/admin/nordcode/quest/questcategory/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_quest_questcategory_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_quest.admin.quest_category',  '_sonata_name' => 'admin_nordcode_quest_questcategory_delete',));
                                }

                                // admin_nordcode_quest_questcategory_show
                                if (preg_match('#^/admin/nordcode/quest/questcategory/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_quest_questcategory_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_quest.admin.quest_category',  '_sonata_name' => 'admin_nordcode_quest_questcategory_show',));
                                }

                                // admin_nordcode_quest_questcategory_export
                                if ($pathinfo === '/admin/nordcode/quest/questcategory/export') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_quest.admin.quest_category',  '_sonata_name' => 'admin_nordcode_quest_questcategory_export',  '_route' => 'admin_nordcode_quest_questcategory_export',);
                                }

                            }

                            if (0 === strpos($pathinfo, '/admin/nordcode/quest/questphoto')) {
                                // admin_nordcode_quest_questphoto_list
                                if ($pathinfo === '/admin/nordcode/quest/questphoto/list') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_quest.admin.quest_photo',  '_sonata_name' => 'admin_nordcode_quest_questphoto_list',  '_route' => 'admin_nordcode_quest_questphoto_list',);
                                }

                                // admin_nordcode_quest_questphoto_create
                                if ($pathinfo === '/admin/nordcode/quest/questphoto/create') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_quest.admin.quest_photo',  '_sonata_name' => 'admin_nordcode_quest_questphoto_create',  '_route' => 'admin_nordcode_quest_questphoto_create',);
                                }

                                // admin_nordcode_quest_questphoto_batch
                                if ($pathinfo === '/admin/nordcode/quest/questphoto/batch') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_quest.admin.quest_photo',  '_sonata_name' => 'admin_nordcode_quest_questphoto_batch',  '_route' => 'admin_nordcode_quest_questphoto_batch',);
                                }

                                // admin_nordcode_quest_questphoto_edit
                                if (preg_match('#^/admin/nordcode/quest/questphoto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_quest_questphoto_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_quest.admin.quest_photo',  '_sonata_name' => 'admin_nordcode_quest_questphoto_edit',));
                                }

                                // admin_nordcode_quest_questphoto_delete
                                if (preg_match('#^/admin/nordcode/quest/questphoto/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_quest_questphoto_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_quest.admin.quest_photo',  '_sonata_name' => 'admin_nordcode_quest_questphoto_delete',));
                                }

                                // admin_nordcode_quest_questphoto_show
                                if (preg_match('#^/admin/nordcode/quest/questphoto/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_quest_questphoto_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_quest.admin.quest_photo',  '_sonata_name' => 'admin_nordcode_quest_questphoto_show',));
                                }

                                // admin_nordcode_quest_questphoto_export
                                if ($pathinfo === '/admin/nordcode/quest/questphoto/export') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_quest.admin.quest_photo',  '_sonata_name' => 'admin_nordcode_quest_questphoto_export',  '_route' => 'admin_nordcode_quest_questphoto_export',);
                                }

                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/nordcode/tipps/tipp')) {
                        // admin_nordcode_tipps_tipp_list
                        if ($pathinfo === '/admin/nordcode/tipps/tipp/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'nordcode_tipps.admin.tipp',  '_sonata_name' => 'admin_nordcode_tipps_tipp_list',  '_route' => 'admin_nordcode_tipps_tipp_list',);
                        }

                        // admin_nordcode_tipps_tipp_create
                        if ($pathinfo === '/admin/nordcode/tipps/tipp/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'nordcode_tipps.admin.tipp',  '_sonata_name' => 'admin_nordcode_tipps_tipp_create',  '_route' => 'admin_nordcode_tipps_tipp_create',);
                        }

                        // admin_nordcode_tipps_tipp_batch
                        if ($pathinfo === '/admin/nordcode/tipps/tipp/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'nordcode_tipps.admin.tipp',  '_sonata_name' => 'admin_nordcode_tipps_tipp_batch',  '_route' => 'admin_nordcode_tipps_tipp_batch',);
                        }

                        // admin_nordcode_tipps_tipp_edit
                        if (preg_match('#^/admin/nordcode/tipps/tipp/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_tipps_tipp_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'nordcode_tipps.admin.tipp',  '_sonata_name' => 'admin_nordcode_tipps_tipp_edit',));
                        }

                        // admin_nordcode_tipps_tipp_delete
                        if (preg_match('#^/admin/nordcode/tipps/tipp/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_tipps_tipp_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'nordcode_tipps.admin.tipp',  '_sonata_name' => 'admin_nordcode_tipps_tipp_delete',));
                        }

                        // admin_nordcode_tipps_tipp_show
                        if (preg_match('#^/admin/nordcode/tipps/tipp/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_tipps_tipp_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'nordcode_tipps.admin.tipp',  '_sonata_name' => 'admin_nordcode_tipps_tipp_show',));
                        }

                        // admin_nordcode_tipps_tipp_export
                        if ($pathinfo === '/admin/nordcode/tipps/tipp/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'nordcode_tipps.admin.tipp',  '_sonata_name' => 'admin_nordcode_tipps_tipp_export',  '_route' => 'admin_nordcode_tipps_tipp_export',);
                        }

                    }

                    // admin_nordcode_user_user_details
                    if (0 === strpos($pathinfo, '/admin/nordcode/user/user/details') && preg_match('#^/admin/nordcode/user/user/details/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nordcode_user_user_details')), array (  '_controller' => 'Nordcode\\AdminPageBoardBundle\\Controller\\CoreController::pageBoardAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/log')) {
                    if (0 === strpos($pathinfo, '/admin/login')) {
                        // sonata_user_admin_security_login
                        if ($pathinfo === '/admin/login') {
                            return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',  '_route' => 'sonata_user_admin_security_login',);
                        }

                        // sonata_user_admin_security_check
                        if ($pathinfo === '/admin/login_check') {
                            return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction',  '_route' => 'sonata_user_admin_security_check',);
                        }

                    }

                    // sonata_user_admin_security_logout
                    if ($pathinfo === '/admin/logout') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction',  '_route' => 'sonata_user_admin_security_logout',);
                    }

                }

                // sonata_user_profile_show
                if ($pathinfo === '/admin/redirect') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_redirect',  'permanent' => true,  '_route' => 'sonata_user_profile_show',);
                }

            }

            if (0 === strpos($pathinfo, '/ap')) {
                // switchfit_app_login
                if ($pathinfo === '/app-login') {
                    return array (  '_controller' => 'Nordcode\\UserBundle\\Controller\\Switchfit\\SecurityController::loginAction',  '_route' => 'switchfit_app_login',);
                }

                if (0 === strpos($pathinfo, '/api')) {
                    // nelmio_api_doc_index
                    if (rtrim($pathinfo, '/') === '/api/doc') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_nelmio_api_doc_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'nelmio_api_doc_index');
                        }

                        return array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  '_route' => 'nelmio_api_doc_index',);
                    }
                    not_nelmio_api_doc_index:

                    if (0 === strpos($pathinfo, '/api/v1/frontend')) {
                        // bazinga_jstranslation_js
                        if (0 === strpos($pathinfo, '/api/v1/frontend/translations') && preg_match('#^/api/v1/frontend/translations(?:/(?P<domain>[\\w]+)(?:\\.(?P<_format>js|json))?)?$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_bazinga_jstranslation_js;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'bazinga_jstranslation_js')), array (  '_controller' => 'bazinga.jstranslation.controller:getTranslationsAction',  'domain' => 'messages',  '_format' => 'js',));
                        }
                        not_bazinga_jstranslation_js:

                        if (0 === strpos($pathinfo, '/api/v1/frontend/content')) {
                            // rest_api_v1_frontend_content_get_page
                            if (0 === strpos($pathinfo, '/api/v1/frontend/content/pages') && preg_match('#^/api/v1/frontend/content/pages/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_content_get_page;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_content_get_page')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\ContentController::getPageAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_content_get_page:

                            // rest_api_v1_frontend_content_get_block
                            if (0 === strpos($pathinfo, '/api/v1/frontend/content/blocks') && preg_match('#^/api/v1/frontend/content/blocks/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_content_get_block;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_content_get_block')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\ContentController::getBlockAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_content_get_block:

                        }

                        if (0 === strpos($pathinfo, '/api/v1/frontend/life')) {
                            // rest_api_v1_frontend_life_get_entries
                            if ($pathinfo === '/api/v1/frontend/life/entries') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_life_get_entries;
                                }

                                return array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\LifeController::getEntriesAction',  '_format' => 'json',  '_route' => 'rest_api_v1_frontend_life_get_entries',);
                            }
                            not_rest_api_v1_frontend_life_get_entries:

                            // rest_api_v1_frontend_life_get_top_posts
                            if ($pathinfo === '/api/v1/frontend/life/top-posts') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_life_get_top_posts;
                                }

                                return array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\LifeController::getTopPostsAction',  '_format' => 'json',  '_route' => 'rest_api_v1_frontend_life_get_top_posts',);
                            }
                            not_rest_api_v1_frontend_life_get_top_posts:

                            // rest_api_v1_frontend_life_get_cities
                            if (0 === strpos($pathinfo, '/api/v1/frontend/life/cities') && preg_match('#^/api/v1/frontend/life/cities/(?P<courseId>[^/]++)$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_life_get_cities;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_life_get_cities')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\LifeController::getCitiesAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_life_get_cities:

                            // rest_api_v1_frontend_life_get_entry
                            if (0 === strpos($pathinfo, '/api/v1/frontend/life/entries') && preg_match('#^/api/v1/frontend/life/entries/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_life_get_entry;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_life_get_entry')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\LifeController::getEntryAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_life_get_entry:

                            // rest_api_v1_frontend_life_get_header
                            if (0 === strpos($pathinfo, '/api/v1/frontend/life/headers') && preg_match('#^/api/v1/frontend/life/headers/(?P<courseId>[^/]++)$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_life_get_header;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_life_get_header')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\LifeController::getHeaderAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_life_get_header:

                            // rest_api_v1_frontend_life_get_video
                            if ($pathinfo === '/api/v1/frontend/life/video') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_life_get_video;
                                }

                                return array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\LifeController::getVideoAction',  '_format' => 'json',  '_route' => 'rest_api_v1_frontend_life_get_video',);
                            }
                            not_rest_api_v1_frontend_life_get_video:

                            if (0 === strpos($pathinfo, '/api/v1/frontend/life/entries')) {
                                // rest_api_v1_frontend_life_post_entry_comment
                                if (preg_match('#^/api/v1/frontend/life/entries/(?P<id>[^/]++)/comments$#s', $pathinfo, $matches)) {
                                    if ($this->context->getMethod() != 'POST') {
                                        $allow[] = 'POST';
                                        goto not_rest_api_v1_frontend_life_post_entry_comment;
                                    }

                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_life_post_entry_comment')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\LifeController::postEntryCommentAction',  '_format' => 'json',));
                                }
                                not_rest_api_v1_frontend_life_post_entry_comment:

                                // rest_api_v1_frontend_life_post_entry_likes
                                if (preg_match('#^/api/v1/frontend/life/entries/(?P<id>[^/]++)/likes$#s', $pathinfo, $matches)) {
                                    if ($this->context->getMethod() != 'POST') {
                                        $allow[] = 'POST';
                                        goto not_rest_api_v1_frontend_life_post_entry_likes;
                                    }

                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_life_post_entry_likes')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\LifeController::postEntryLikesAction',  '_format' => 'json',));
                                }
                                not_rest_api_v1_frontend_life_post_entry_likes:

                                // rest_api_v1_frontend_life_post_entry_unlikes
                                if (preg_match('#^/api/v1/frontend/life/entries/(?P<id>[^/]++)/unlikes$#s', $pathinfo, $matches)) {
                                    if ($this->context->getMethod() != 'POST') {
                                        $allow[] = 'POST';
                                        goto not_rest_api_v1_frontend_life_post_entry_unlikes;
                                    }

                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_life_post_entry_unlikes')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\LifeController::postEntryUnlikesAction',  '_format' => 'json',));
                                }
                                not_rest_api_v1_frontend_life_post_entry_unlikes:

                            }

                            if (0 === strpos($pathinfo, '/api/v1/frontend/life/comments')) {
                                // rest_api_v1_frontend_life_post_comment_likes
                                if (preg_match('#^/api/v1/frontend/life/comments/(?P<id>[^/]++)/likes$#s', $pathinfo, $matches)) {
                                    if ($this->context->getMethod() != 'POST') {
                                        $allow[] = 'POST';
                                        goto not_rest_api_v1_frontend_life_post_comment_likes;
                                    }

                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_life_post_comment_likes')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\LifeController::postCommentLikesAction',  '_format' => 'json',));
                                }
                                not_rest_api_v1_frontend_life_post_comment_likes:

                                // rest_api_v1_frontend_life_post_comment_unlikes
                                if (preg_match('#^/api/v1/frontend/life/comments/(?P<id>[^/]++)/unlikes$#s', $pathinfo, $matches)) {
                                    if ($this->context->getMethod() != 'POST') {
                                        $allow[] = 'POST';
                                        goto not_rest_api_v1_frontend_life_post_comment_unlikes;
                                    }

                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_life_post_comment_unlikes')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\LifeController::postCommentUnlikesAction',  '_format' => 'json',));
                                }
                                not_rest_api_v1_frontend_life_post_comment_unlikes:

                            }

                        }

                        if (0 === strpos($pathinfo, '/api/v1/frontend/questions')) {
                            // rest_api_v1_frontend_qa_get_questions
                            if ($pathinfo === '/api/v1/frontend/questions') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_qa_get_questions;
                                }

                                return array (  '_controller' => 'Nordcode\\QABundle\\Controller\\REST\\v1\\QAController::getQuestionsAction',  '_format' => 'json',  '_route' => 'rest_api_v1_frontend_qa_get_questions',);
                            }
                            not_rest_api_v1_frontend_qa_get_questions:

                            // rest_api_v1_frontend_qa_get_questions_categories
                            if ($pathinfo === '/api/v1/frontend/questions/categories') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_qa_get_questions_categories;
                                }

                                return array (  '_controller' => 'Nordcode\\QABundle\\Controller\\REST\\v1\\QAController::getQuestionsCategoriesAction',  '_format' => 'json',  '_route' => 'rest_api_v1_frontend_qa_get_questions_categories',);
                            }
                            not_rest_api_v1_frontend_qa_get_questions_categories:

                            // rest_api_v1_frontend_qa_get_question
                            if (preg_match('#^/api/v1/frontend/questions/(?P<questionId>[^/]++)$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_qa_get_question;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_qa_get_question')), array (  '_controller' => 'Nordcode\\QABundle\\Controller\\REST\\v1\\QAController::getQuestionAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_qa_get_question:

                            // rest_api_v1_frontend_qa_post_questions
                            if ($pathinfo === '/api/v1/frontend/questions') {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_rest_api_v1_frontend_qa_post_questions;
                                }

                                return array (  '_controller' => 'Nordcode\\QABundle\\Controller\\REST\\v1\\QAController::postQuestionsAction',  '_format' => 'json',  '_route' => 'rest_api_v1_frontend_qa_post_questions',);
                            }
                            not_rest_api_v1_frontend_qa_post_questions:

                            // rest_api_v1_frontend_qa_post_question_answers
                            if (preg_match('#^/api/v1/frontend/questions/(?P<questionId>[^/]++)/answers$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_rest_api_v1_frontend_qa_post_question_answers;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_qa_post_question_answers')), array (  '_controller' => 'Nordcode\\QABundle\\Controller\\REST\\v1\\QAController::postQuestionAnswersAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_qa_post_question_answers:

                            // rest_api_v1_frontend_qa_post_question_vote
                            if (preg_match('#^/api/v1/frontend/questions/(?P<questionId>[^/]++)/votes$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_rest_api_v1_frontend_qa_post_question_vote;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_qa_post_question_vote')), array (  '_controller' => 'Nordcode\\QABundle\\Controller\\REST\\v1\\QAController::postQuestionVoteAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_qa_post_question_vote:

                        }

                        if (0 === strpos($pathinfo, '/api/v1/frontend/users')) {
                            // rest_api_v1_frontend_notice_get_user_notices
                            if (preg_match('#^/api/v1/frontend/users/(?P<userId>[^/]++)/notices$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_notice_get_user_notices;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_notice_get_user_notices')), array (  '_controller' => 'Nordcode\\NotificationBundle\\Controller\\REST\\v1\\NoticeController::getUserNoticesAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_notice_get_user_notices:

                            // rest_api_v1_frontend_notice_put_user_notice
                            if (preg_match('#^/api/v1/frontend/users/(?P<userId>[^/]++)/notices/(?P<noticeId>[^/]++)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'PUT') {
                                    $allow[] = 'PUT';
                                    goto not_rest_api_v1_frontend_notice_put_user_notice;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_notice_put_user_notice')), array (  '_controller' => 'Nordcode\\NotificationBundle\\Controller\\REST\\v1\\NoticeController::putUserNoticeAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_notice_put_user_notice:

                        }

                        if (0 === strpos($pathinfo, '/api/v1/frontend/academy/module')) {
                            // rest_api_v1_frontend_academy_modules_get_modules
                            if ($pathinfo === '/api/v1/frontend/academy/modules') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_academy_modules_get_modules;
                                }

                                return array (  '_controller' => 'Nordcode\\AcademyBundle\\Controller\\REST\\v1\\ModuleController::getModulesAction',  '_format' => 'json',  '_route' => 'rest_api_v1_frontend_academy_modules_get_modules',);
                            }
                            not_rest_api_v1_frontend_academy_modules_get_modules:

                            // rest_api_v1_frontend_academy_modules_get_module_current
                            if ($pathinfo === '/api/v1/frontend/academy/module/current') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_academy_modules_get_module_current;
                                }

                                return array (  '_controller' => 'Nordcode\\AcademyBundle\\Controller\\REST\\v1\\ModuleController::getModuleCurrentAction',  '_format' => 'json',  '_route' => 'rest_api_v1_frontend_academy_modules_get_module_current',);
                            }
                            not_rest_api_v1_frontend_academy_modules_get_module_current:

                            if (0 === strpos($pathinfo, '/api/v1/frontend/academy/modules')) {
                                // rest_api_v1_frontend_academy_modules_get_module
                                if (preg_match('#^/api/v1/frontend/academy/modules/(?P<moduleId>[^/]++)$#s', $pathinfo, $matches)) {
                                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                        $allow = array_merge($allow, array('GET', 'HEAD'));
                                        goto not_rest_api_v1_frontend_academy_modules_get_module;
                                    }

                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_academy_modules_get_module')), array (  '_controller' => 'Nordcode\\AcademyBundle\\Controller\\REST\\v1\\ModuleController::getModuleAction',  '_format' => 'json',));
                                }
                                not_rest_api_v1_frontend_academy_modules_get_module:

                                // rest_api_v1_frontend_academy_modules_put_module
                                if (preg_match('#^/api/v1/frontend/academy/modules/(?P<moduleId>[^/]++)$#s', $pathinfo, $matches)) {
                                    if ($this->context->getMethod() != 'PUT') {
                                        $allow[] = 'PUT';
                                        goto not_rest_api_v1_frontend_academy_modules_put_module;
                                    }

                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_academy_modules_put_module')), array (  '_controller' => 'Nordcode\\AcademyBundle\\Controller\\REST\\v1\\ModuleController::putModuleAction',  '_format' => 'json',));
                                }
                                not_rest_api_v1_frontend_academy_modules_put_module:

                                // rest_api_v1_frontend_academy_modules_get_module_topics
                                if (preg_match('#^/api/v1/frontend/academy/modules/(?P<moduleId>[^/]++)/topics$#s', $pathinfo, $matches)) {
                                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                        $allow = array_merge($allow, array('GET', 'HEAD'));
                                        goto not_rest_api_v1_frontend_academy_modules_get_module_topics;
                                    }

                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_academy_modules_get_module_topics')), array (  '_controller' => 'Nordcode\\AcademyBundle\\Controller\\REST\\v1\\ModuleController::getModuleTopicsAction',  '_format' => 'json',));
                                }
                                not_rest_api_v1_frontend_academy_modules_get_module_topics:

                                // rest_api_v1_frontend_academy_modules_get_module_topic
                                if (preg_match('#^/api/v1/frontend/academy/modules/(?P<moduleId>[^/]++)/topics/(?P<topicId>[^/]++)$#s', $pathinfo, $matches)) {
                                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                        $allow = array_merge($allow, array('GET', 'HEAD'));
                                        goto not_rest_api_v1_frontend_academy_modules_get_module_topic;
                                    }

                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_academy_modules_get_module_topic')), array (  '_controller' => 'Nordcode\\AcademyBundle\\Controller\\REST\\v1\\ModuleController::getModuleTopicAction',  '_format' => 'json',));
                                }
                                not_rest_api_v1_frontend_academy_modules_get_module_topic:

                                // rest_api_v1_frontend_academy_modules_put_module_topic
                                if (preg_match('#^/api/v1/frontend/academy/modules/(?P<moduleId>[^/]++)/topics/(?P<topicId>[^/]++)$#s', $pathinfo, $matches)) {
                                    if ($this->context->getMethod() != 'PUT') {
                                        $allow[] = 'PUT';
                                        goto not_rest_api_v1_frontend_academy_modules_put_module_topic;
                                    }

                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_academy_modules_put_module_topic')), array (  '_controller' => 'Nordcode\\AcademyBundle\\Controller\\REST\\v1\\ModuleController::putModuleTopicAction',  '_format' => 'json',));
                                }
                                not_rest_api_v1_frontend_academy_modules_put_module_topic:

                                // rest_api_v1_frontend_academy_modules_put_module_topic_final
                                if (preg_match('#^/api/v1/frontend/academy/modules/(?P<moduleId>[^/]++)/topics/(?P<topicId>[^/]++)/final$#s', $pathinfo, $matches)) {
                                    if ($this->context->getMethod() != 'PUT') {
                                        $allow[] = 'PUT';
                                        goto not_rest_api_v1_frontend_academy_modules_put_module_topic_final;
                                    }

                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_academy_modules_put_module_topic_final')), array (  '_controller' => 'Nordcode\\AcademyBundle\\Controller\\REST\\v1\\ModuleController::putModuleTopicFinalAction',  '_format' => 'json',));
                                }
                                not_rest_api_v1_frontend_academy_modules_put_module_topic_final:

                            }

                        }

                        if (0 === strpos($pathinfo, '/api/v1/frontend/demo/academy/modules')) {
                            // rest_api_v1_frontend_demo_academy_modules_get_modules
                            if ($pathinfo === '/api/v1/frontend/demo/academy/modules') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_demo_academy_modules_get_modules;
                                }

                                return array (  '_controller' => 'Nordcode\\AcademyBundle\\Controller\\REST\\v1\\DemoModuleController::getModulesAction',  '_format' => 'json',  '_route' => 'rest_api_v1_frontend_demo_academy_modules_get_modules',);
                            }
                            not_rest_api_v1_frontend_demo_academy_modules_get_modules:

                            // rest_api_v1_frontend_demo_academy_modules_get_module
                            if (preg_match('#^/api/v1/frontend/demo/academy/modules/(?P<moduleId>[^/]++)$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_demo_academy_modules_get_module;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_demo_academy_modules_get_module')), array (  '_controller' => 'Nordcode\\AcademyBundle\\Controller\\REST\\v1\\DemoModuleController::getModuleAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_demo_academy_modules_get_module:

                        }

                        if (0 === strpos($pathinfo, '/api/v1/frontend/users')) {
                            // rest_api_v1_frontend_diary_get_user_diary
                            if (preg_match('#^/api/v1/frontend/users/(?P<userId>[^/]++)/diary$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_diary_get_user_diary;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_diary_get_user_diary')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\DiaryController::getUserDiaryAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_diary_get_user_diary:

                            // rest_api_v1_frontend_diary_get_user_diary_pictures
                            if (preg_match('#^/api/v1/frontend/users/(?P<userId>[^/]++)/diary/pictures$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_diary_get_user_diary_pictures;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_diary_get_user_diary_pictures')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\DiaryController::getUserDiaryPicturesAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_diary_get_user_diary_pictures:

                            // rest_api_v1_frontend_diary_post_user_diary
                            if (preg_match('#^/api/v1/frontend/users/(?P<userId>[^/]++)/diary$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_rest_api_v1_frontend_diary_post_user_diary;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_diary_post_user_diary')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\DiaryController::postUserDiaryAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_diary_post_user_diary:

                            // rest_api_v1_frontend_diary_post_user_diary_entry_picture
                            if (preg_match('#^/api/v1/frontend/users/(?P<userId>[^/]++)/diary/entries/picture$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_rest_api_v1_frontend_diary_post_user_diary_entry_picture;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_diary_post_user_diary_entry_picture')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\DiaryController::postUserDiaryEntryPictureAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_diary_post_user_diary_entry_picture:

                            // rest_api_v1_frontend_diary_post_user_diary_entry
                            if (preg_match('#^/api/v1/frontend/users/(?P<userId>[^/]++)/diary/entries$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_rest_api_v1_frontend_diary_post_user_diary_entry;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_diary_post_user_diary_entry')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\DiaryController::postUserDiaryEntryAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_diary_post_user_diary_entry:

                            // rest_api_v1_frontend_diary_post_user_diary_entries
                            if (preg_match('#^/api/v1/frontend/users/(?P<userId>[^/]++)/diary/entries/(?P<entryId>[^/]++)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_rest_api_v1_frontend_diary_post_user_diary_entries;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_diary_post_user_diary_entries')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\DiaryController::postUserDiaryEntriesAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_diary_post_user_diary_entries:

                        }

                        if (0 === strpos($pathinfo, '/api/v1/frontend/meals')) {
                            // rest_api_v1_frontend_component_get_meals
                            if ($pathinfo === '/api/v1/frontend/meals') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_component_get_meals;
                                }

                                return array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\ComponentController::getMealsAction',  '_format' => 'json',  '_route' => 'rest_api_v1_frontend_component_get_meals',);
                            }
                            not_rest_api_v1_frontend_component_get_meals:

                            // rest_api_v1_frontend_component_get_meals_filters
                            if ($pathinfo === '/api/v1/frontend/meals/filters') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_component_get_meals_filters;
                                }

                                return array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\ComponentController::getMealsFiltersAction',  '_format' => 'json',  '_route' => 'rest_api_v1_frontend_component_get_meals_filters',);
                            }
                            not_rest_api_v1_frontend_component_get_meals_filters:

                            // rest_api_v1_frontend_component_get_meals_types
                            if ($pathinfo === '/api/v1/frontend/meals/types') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_component_get_meals_types;
                                }

                                return array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\ComponentController::getMealsTypesAction',  '_format' => 'json',  '_route' => 'rest_api_v1_frontend_component_get_meals_types',);
                            }
                            not_rest_api_v1_frontend_component_get_meals_types:

                            // rest_api_v1_frontend_component_get_meals_categories
                            if ($pathinfo === '/api/v1/frontend/meals/categories') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_component_get_meals_categories;
                                }

                                return array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\ComponentController::getMealsCategoriesAction',  '_format' => 'json',  '_route' => 'rest_api_v1_frontend_component_get_meals_categories',);
                            }
                            not_rest_api_v1_frontend_component_get_meals_categories:

                            // rest_api_v1_frontend_component_get_meal
                            if (preg_match('#^/api/v1/frontend/meals/(?P<mealId>[^/]++)$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_component_get_meal;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_component_get_meal')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\ComponentController::getMealAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_component_get_meal:

                            // rest_api_v1_frontend_component_post_meal_favorite
                            if (preg_match('#^/api/v1/frontend/meals/(?P<mealId>[^/]++)/favorite$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_rest_api_v1_frontend_component_post_meal_favorite;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_component_post_meal_favorite')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\ComponentController::postMealFavoriteAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_component_post_meal_favorite:

                            // rest_api_v1_frontend_component_delete_meal_favorite
                            if (preg_match('#^/api/v1/frontend/meals/(?P<mealId>[^/]++)/favorite$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'DELETE') {
                                    $allow[] = 'DELETE';
                                    goto not_rest_api_v1_frontend_component_delete_meal_favorite;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_component_delete_meal_favorite')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\ComponentController::deleteMealFavoriteAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_component_delete_meal_favorite:

                        }

                        if (0 === strpos($pathinfo, '/api/v1/frontend/workout')) {
                            if (0 === strpos($pathinfo, '/api/v1/frontend/workouts')) {
                                // rest_api_v1_frontend_component_get_workouts
                                if ($pathinfo === '/api/v1/frontend/workouts') {
                                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                        $allow = array_merge($allow, array('GET', 'HEAD'));
                                        goto not_rest_api_v1_frontend_component_get_workouts;
                                    }

                                    return array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\ComponentController::getWorkoutsAction',  '_format' => 'json',  '_route' => 'rest_api_v1_frontend_component_get_workouts',);
                                }
                                not_rest_api_v1_frontend_component_get_workouts:

                                // rest_api_v1_frontend_component_get_workouts_types
                                if ($pathinfo === '/api/v1/frontend/workouts/types') {
                                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                        $allow = array_merge($allow, array('GET', 'HEAD'));
                                        goto not_rest_api_v1_frontend_component_get_workouts_types;
                                    }

                                    return array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\ComponentController::getWorkoutsTypesAction',  '_format' => 'json',  '_route' => 'rest_api_v1_frontend_component_get_workouts_types',);
                                }
                                not_rest_api_v1_frontend_component_get_workouts_types:

                                // rest_api_v1_frontend_component_get_workouts_categories
                                if ($pathinfo === '/api/v1/frontend/workouts/categories') {
                                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                        $allow = array_merge($allow, array('GET', 'HEAD'));
                                        goto not_rest_api_v1_frontend_component_get_workouts_categories;
                                    }

                                    return array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\ComponentController::getWorkoutsCategoriesAction',  '_format' => 'json',  '_route' => 'rest_api_v1_frontend_component_get_workouts_categories',);
                                }
                                not_rest_api_v1_frontend_component_get_workouts_categories:

                                // rest_api_v1_frontend_component_get_workouts_locations
                                if ($pathinfo === '/api/v1/frontend/workouts/locations') {
                                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                        $allow = array_merge($allow, array('GET', 'HEAD'));
                                        goto not_rest_api_v1_frontend_component_get_workouts_locations;
                                    }

                                    return array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\ComponentController::getWorkoutsLocationsAction',  '_format' => 'json',  '_route' => 'rest_api_v1_frontend_component_get_workouts_locations',);
                                }
                                not_rest_api_v1_frontend_component_get_workouts_locations:

                                // rest_api_v1_frontend_component_get_workout
                                if (preg_match('#^/api/v1/frontend/workouts/(?P<workoutId>[^/]++)$#s', $pathinfo, $matches)) {
                                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                        $allow = array_merge($allow, array('GET', 'HEAD'));
                                        goto not_rest_api_v1_frontend_component_get_workout;
                                    }

                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_component_get_workout')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\ComponentController::getWorkoutAction',  '_format' => 'json',));
                                }
                                not_rest_api_v1_frontend_component_get_workout:

                            }

                            // rest_api_v1_frontend_component_get_workout_of_the_day
                            if ($pathinfo === '/api/v1/frontend/workout/oftheday') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_component_get_workout_of_the_day;
                                }

                                return array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\ComponentController::getWorkoutOfTheDayAction',  '_format' => 'json',  '_route' => 'rest_api_v1_frontend_component_get_workout_of_the_day',);
                            }
                            not_rest_api_v1_frontend_component_get_workout_of_the_day:

                            if (0 === strpos($pathinfo, '/api/v1/frontend/workouts')) {
                                // rest_api_v1_frontend_component_post_workout_favorite
                                if (preg_match('#^/api/v1/frontend/workouts/(?P<workoutId>[^/]++)/favorite$#s', $pathinfo, $matches)) {
                                    if ($this->context->getMethod() != 'POST') {
                                        $allow[] = 'POST';
                                        goto not_rest_api_v1_frontend_component_post_workout_favorite;
                                    }

                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_component_post_workout_favorite')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\ComponentController::postWorkoutFavoriteAction',  '_format' => 'json',));
                                }
                                not_rest_api_v1_frontend_component_post_workout_favorite:

                                // rest_api_v1_frontend_component_delete_workout_favorite
                                if (preg_match('#^/api/v1/frontend/workouts/(?P<workoutId>[^/]++)/favorite$#s', $pathinfo, $matches)) {
                                    if ($this->context->getMethod() != 'DELETE') {
                                        $allow[] = 'DELETE';
                                        goto not_rest_api_v1_frontend_component_delete_workout_favorite;
                                    }

                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_component_delete_workout_favorite')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\ComponentController::deleteWorkoutFavoriteAction',  '_format' => 'json',));
                                }
                                not_rest_api_v1_frontend_component_delete_workout_favorite:

                            }

                        }

                        if (0 === strpos($pathinfo, '/api/v1/frontend/demo')) {
                            if (0 === strpos($pathinfo, '/api/v1/frontend/demo/meals')) {
                                // rest_api_v1_frontend_demo_component_get_meals
                                if ($pathinfo === '/api/v1/frontend/demo/meals') {
                                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                        $allow = array_merge($allow, array('GET', 'HEAD'));
                                        goto not_rest_api_v1_frontend_demo_component_get_meals;
                                    }

                                    return array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\DemoComponentController::getMealsAction',  '_format' => 'json',  '_route' => 'rest_api_v1_frontend_demo_component_get_meals',);
                                }
                                not_rest_api_v1_frontend_demo_component_get_meals:

                                // rest_api_v1_frontend_demo_component_get_meal
                                if (preg_match('#^/api/v1/frontend/demo/meals/(?P<mealId>[^/]++)$#s', $pathinfo, $matches)) {
                                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                        $allow = array_merge($allow, array('GET', 'HEAD'));
                                        goto not_rest_api_v1_frontend_demo_component_get_meal;
                                    }

                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_demo_component_get_meal')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\DemoComponentController::getMealAction',  '_format' => 'json',));
                                }
                                not_rest_api_v1_frontend_demo_component_get_meal:

                            }

                            if (0 === strpos($pathinfo, '/api/v1/frontend/demo/workouts')) {
                                // rest_api_v1_frontend_demo_component_get_workouts
                                if ($pathinfo === '/api/v1/frontend/demo/workouts') {
                                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                        $allow = array_merge($allow, array('GET', 'HEAD'));
                                        goto not_rest_api_v1_frontend_demo_component_get_workouts;
                                    }

                                    return array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\DemoComponentController::getWorkoutsAction',  '_format' => 'json',  '_route' => 'rest_api_v1_frontend_demo_component_get_workouts',);
                                }
                                not_rest_api_v1_frontend_demo_component_get_workouts:

                                // rest_api_v1_frontend_demo_component_get_workout
                                if (preg_match('#^/api/v1/frontend/demo/workouts/(?P<workoutId>[^/]++)$#s', $pathinfo, $matches)) {
                                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                        $allow = array_merge($allow, array('GET', 'HEAD'));
                                        goto not_rest_api_v1_frontend_demo_component_get_workout;
                                    }

                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_demo_component_get_workout')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\DemoComponentController::getWorkoutAction',  '_format' => 'json',));
                                }
                                not_rest_api_v1_frontend_demo_component_get_workout:

                            }

                        }

                        if (0 === strpos($pathinfo, '/api/v1/frontend/users')) {
                            // rest_api_v1_frontend_courses_get_users_courses
                            if (preg_match('#^/api/v1/frontend/users/(?P<userId>[^/]++)/courses$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_courses_get_users_courses;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_courses_get_users_courses')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\UserCourseController::getUsersCoursesAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_courses_get_users_courses:

                            // rest_api_v1_frontend_courses_get_user_course
                            if (preg_match('#^/api/v1/frontend/users/(?P<userId>[^/]++)/courses/(?P<courseId>[^/]++)$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_courses_get_user_course;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_courses_get_user_course')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\UserCourseController::getUserCourseAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_courses_get_user_course:

                            // rest_api_v1_frontend_courses_put_user_course_warmup
                            if (preg_match('#^/api/v1/frontend/users/(?P<userId>[^/]++)/courses/(?P<courseId>[^/]++)/warmup$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'PUT') {
                                    $allow[] = 'PUT';
                                    goto not_rest_api_v1_frontend_courses_put_user_course_warmup;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_courses_put_user_course_warmup')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\UserCourseController::putUserCourseWarmupAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_courses_put_user_course_warmup:

                            // rest_api_v1_frontend_courses_patch_user_course_signature
                            if (preg_match('#^/api/v1/frontend/users/(?P<userId>[^/]++)/courses/(?P<courseId>[^/]++)/signature$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'PATCH') {
                                    $allow[] = 'PATCH';
                                    goto not_rest_api_v1_frontend_courses_patch_user_course_signature;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_courses_patch_user_course_signature')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\UserCourseController::patchUserCourseSignatureAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_courses_patch_user_course_signature:

                            // rest_api_v1_frontend_courses_get_user_course_days
                            if (preg_match('#^/api/v1/frontend/users/(?P<userId>[^/]++)/courses/(?P<courseId>[^/]++)/days$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_courses_get_user_course_days;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_courses_get_user_course_days')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\UserCourseController::getUserCourseDaysAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_courses_get_user_course_days:

                            // rest_api_v1_frontend_courses_post_user_course
                            if (preg_match('#^/api/v1/frontend/users/(?P<userId>[^/]++)/courses/(?P<courseId>[^/]++)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_rest_api_v1_frontend_courses_post_user_course;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_courses_post_user_course')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\UserCourseController::postUserCourseAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_courses_post_user_course:

                            // rest_api_v1_frontend_courses_post_user_course_days
                            if (preg_match('#^/api/v1/frontend/users/(?P<userId>[^/]++)/courses/(?P<courseId>[^/]++)/days$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_rest_api_v1_frontend_courses_post_user_course_days;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_courses_post_user_course_days')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\UserCourseController::postUserCourseDaysAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_courses_post_user_course_days:

                            // rest_api_v1_frontend_courses_get_user_course_day
                            if (preg_match('#^/api/v1/frontend/users/(?P<userId>[^/]++)/courses/(?P<courseId>[^/]++)/days/(?P<dayId>[^/]++)$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_courses_get_user_course_day;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_courses_get_user_course_day')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\UserCourseController::getUserCourseDayAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_courses_get_user_course_day:

                            // rest_api_v1_frontend_courses_put_user_course_day
                            if (preg_match('#^/api/v1/frontend/users/(?P<userId>[^/]++)/courses/(?P<courseId>[^/]++)/days/(?P<dayId>[^/]++)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'PUT') {
                                    $allow[] = 'PUT';
                                    goto not_rest_api_v1_frontend_courses_put_user_course_day;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_courses_put_user_course_day')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\UserCourseController::putUserCourseDayAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_courses_put_user_course_day:

                            // rest_api_v1_frontend_courses_get_user_course_weeks
                            if (preg_match('#^/api/v1/frontend/users/(?P<userId>[^/]++)/courses/(?P<courseId>[^/]++)/weeks$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_courses_get_user_course_weeks;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_courses_get_user_course_weeks')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\UserCourseController::getUserCourseWeeksAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_courses_get_user_course_weeks:

                            // rest_api_v1_frontend_courses_post_user_course_weeks
                            if (preg_match('#^/api/v1/frontend/users/(?P<userId>[^/]++)/courses/(?P<courseId>[^/]++)/weeks$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_rest_api_v1_frontend_courses_post_user_course_weeks;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_courses_post_user_course_weeks')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\UserCourseController::postUserCourseWeeksAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_courses_post_user_course_weeks:

                            // rest_api_v1_frontend_courses_get_user_course_week
                            if (preg_match('#^/api/v1/frontend/users/(?P<userId>[^/]++)/courses/(?P<courseId>[^/]++)/weeks/(?P<number>[^/]++)$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_courses_get_user_course_week;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_courses_get_user_course_week')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\UserCourseController::getUserCourseWeekAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_courses_get_user_course_week:

                            // rest_api_v1_frontend_courses_put_user_course_week
                            if (preg_match('#^/api/v1/frontend/users/(?P<userId>[^/]++)/courses/(?P<courseId>[^/]++)/weeks/(?P<number>[^/]++)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'PUT') {
                                    $allow[] = 'PUT';
                                    goto not_rest_api_v1_frontend_courses_put_user_course_week;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_courses_put_user_course_week')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\UserCourseController::putUserCourseWeekAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_courses_put_user_course_week:

                            // rest_api_v1_frontend_courses_get_user_course_inspire
                            if (preg_match('#^/api/v1/frontend/users/(?P<userId>[^/]++)/courses/(?P<courseId>[^/]++)/inspire$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_courses_get_user_course_inspire;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_courses_get_user_course_inspire')), array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\UserCourseController::getUserCourseInspireAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_courses_get_user_course_inspire:

                            // rest_api_v1_frontend_courses_get_users_ping
                            if ($pathinfo === '/api/v1/frontend/users/ping') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_courses_get_users_ping;
                                }

                                return array (  '_controller' => 'Nordcode\\SwitchfitBundle\\Controller\\REST\\v1\\UserCourseController::getUsersPingAction',  '_format' => 'json',  '_route' => 'rest_api_v1_frontend_courses_get_users_ping',);
                            }
                            not_rest_api_v1_frontend_courses_get_users_ping:

                            // rest_api_v1_frontend_users_get_users
                            if ($pathinfo === '/api/v1/frontend/users') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_users_get_users;
                                }

                                return array (  '_controller' => 'Nordcode\\UserBundle\\Controller\\Switchfit\\REST\\v1\\UserController::getUsersAction',  '_format' => 'json',  '_route' => 'rest_api_v1_frontend_users_get_users',);
                            }
                            not_rest_api_v1_frontend_users_get_users:

                            // rest_api_v1_frontend_users_get_users_current
                            if ($pathinfo === '/api/v1/frontend/users/current') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_users_get_users_current;
                                }

                                return array (  '_controller' => 'Nordcode\\UserBundle\\Controller\\Switchfit\\REST\\v1\\UserController::getUsersCurrentAction',  '_format' => 'json',  '_route' => 'rest_api_v1_frontend_users_get_users_current',);
                            }
                            not_rest_api_v1_frontend_users_get_users_current:

                            // rest_api_v1_frontend_users_get_user
                            if (preg_match('#^/api/v1/frontend/users/(?P<userId>[^/]++)$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_users_get_user;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_users_get_user')), array (  '_controller' => 'Nordcode\\UserBundle\\Controller\\Switchfit\\REST\\v1\\UserController::getUserAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_users_get_user:

                            // rest_api_v1_frontend_users_put_user
                            if (preg_match('#^/api/v1/frontend/users/(?P<userId>[^/]++)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'PUT') {
                                    $allow[] = 'PUT';
                                    goto not_rest_api_v1_frontend_users_put_user;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_users_put_user')), array (  '_controller' => 'Nordcode\\UserBundle\\Controller\\Switchfit\\REST\\v1\\UserController::putUserAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_users_put_user:

                            // rest_api_v1_frontend_users_post_user_picture
                            if (preg_match('#^/api/v1/frontend/users/(?P<userId>[^/]++)/picture$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_rest_api_v1_frontend_users_post_user_picture;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_users_post_user_picture')), array (  '_controller' => 'Nordcode\\UserBundle\\Controller\\Switchfit\\REST\\v1\\UserController::postUserPictureAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_users_post_user_picture:

                        }

                        if (0 === strpos($pathinfo, '/api/v1/frontend/quest')) {
                            if (0 === strpos($pathinfo, '/api/v1/frontend/quests')) {
                                // rest_api_v1_frontend_quests_get_quest
                                if (preg_match('#^/api/v1/frontend/quests/(?P<questId>[^/]++)$#s', $pathinfo, $matches)) {
                                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                        $allow = array_merge($allow, array('GET', 'HEAD'));
                                        goto not_rest_api_v1_frontend_quests_get_quest;
                                    }

                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_quests_get_quest')), array (  '_controller' => 'Nordcode\\QuestBundle\\Controller\\REST\\v1\\QuestController::getQuestAction',  '_format' => 'json',));
                                }
                                not_rest_api_v1_frontend_quests_get_quest:

                                // rest_api_v1_frontend_quests_post_quest_completes
                                if (preg_match('#^/api/v1/frontend/quests/(?P<questId>[^/]++)/completes$#s', $pathinfo, $matches)) {
                                    if ($this->context->getMethod() != 'POST') {
                                        $allow[] = 'POST';
                                        goto not_rest_api_v1_frontend_quests_post_quest_completes;
                                    }

                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_quests_post_quest_completes')), array (  '_controller' => 'Nordcode\\QuestBundle\\Controller\\REST\\v1\\QuestController::postQuestCompletesAction',  '_format' => 'json',));
                                }
                                not_rest_api_v1_frontend_quests_post_quest_completes:

                                // rest_api_v1_frontend_quests_post_quest_starts
                                if (preg_match('#^/api/v1/frontend/quests/(?P<questId>[^/]++)/starts$#s', $pathinfo, $matches)) {
                                    if ($this->context->getMethod() != 'POST') {
                                        $allow[] = 'POST';
                                        goto not_rest_api_v1_frontend_quests_post_quest_starts;
                                    }

                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_quests_post_quest_starts')), array (  '_controller' => 'Nordcode\\QuestBundle\\Controller\\REST\\v1\\QuestController::postQuestStartsAction',  '_format' => 'json',));
                                }
                                not_rest_api_v1_frontend_quests_post_quest_starts:

                            }

                            // rest_api_v1_frontend_quests_get_quest_current
                            if ($pathinfo === '/api/v1/frontend/quest/current') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_quests_get_quest_current;
                                }

                                return array (  '_controller' => 'Nordcode\\QuestBundle\\Controller\\REST\\v1\\QuestController::getQuestCurrentAction',  '_format' => 'json',  '_route' => 'rest_api_v1_frontend_quests_get_quest_current',);
                            }
                            not_rest_api_v1_frontend_quests_get_quest_current:

                            if (0 === strpos($pathinfo, '/api/v1/frontend/quests')) {
                                // rest_api_v1_frontend_quests_get_quests_completed
                                if ($pathinfo === '/api/v1/frontend/quests/completed') {
                                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                        $allow = array_merge($allow, array('GET', 'HEAD'));
                                        goto not_rest_api_v1_frontend_quests_get_quests_completed;
                                    }

                                    return array (  '_controller' => 'Nordcode\\QuestBundle\\Controller\\REST\\v1\\QuestController::getQuestsCompletedAction',  '_format' => 'json',  '_route' => 'rest_api_v1_frontend_quests_get_quests_completed',);
                                }
                                not_rest_api_v1_frontend_quests_get_quests_completed:

                                // rest_api_v1_frontend_quests_get_quests
                                if ($pathinfo === '/api/v1/frontend/quests') {
                                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                        $allow = array_merge($allow, array('GET', 'HEAD'));
                                        goto not_rest_api_v1_frontend_quests_get_quests;
                                    }

                                    return array (  '_controller' => 'Nordcode\\QuestBundle\\Controller\\REST\\v1\\QuestController::getQuestsAction',  '_format' => 'json',  '_route' => 'rest_api_v1_frontend_quests_get_quests',);
                                }
                                not_rest_api_v1_frontend_quests_get_quests:

                            }

                        }

                        // rest_api_v1_frontend_points_get_points
                        if ($pathinfo === '/api/v1/frontend/points') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_rest_api_v1_frontend_points_get_points;
                            }

                            return array (  '_controller' => 'Nordcode\\PointBundle\\Controller\\REST\\v1\\PointController::getPointsAction',  '_format' => 'json',  '_route' => 'rest_api_v1_frontend_points_get_points',);
                        }
                        not_rest_api_v1_frontend_points_get_points:

                        if (0 === strpos($pathinfo, '/api/v1/frontend/tipps')) {
                            // rest_api_v1_frontend_tipps_get_tipps
                            if ($pathinfo === '/api/v1/frontend/tipps') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_tipps_get_tipps;
                                }

                                return array (  '_controller' => 'Nordcode\\TippsBundle\\Controller\\REST\\v1\\TippsController::getTippsAction',  '_format' => 'json',  '_route' => 'rest_api_v1_frontend_tipps_get_tipps',);
                            }
                            not_rest_api_v1_frontend_tipps_get_tipps:

                            // rest_api_v1_frontend_tipps_get_tipp
                            if (preg_match('#^/api/v1/frontend/tipps/(?P<tippId>[^/]++)$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_rest_api_v1_frontend_tipps_get_tipp;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rest_api_v1_frontend_tipps_get_tipp')), array (  '_controller' => 'Nordcode\\TippsBundle\\Controller\\REST\\v1\\TippsController::getTippAction',  '_format' => 'json',));
                            }
                            not_rest_api_v1_frontend_tipps_get_tipp:

                        }

                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
