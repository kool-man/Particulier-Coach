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

        // coach_conseils_homepage
        if ($pathinfo === '/vendre-sans-agence-immobiliere') {
            return array (  '_controller' => 'Coach\\ConseilsBundle\\Controller\\ConseilController::indexAction',  '_route' => 'coach_conseils_homepage',);
        }

        // coach_reservation_paiement
        if (0 === strpos($pathinfo, '/paiement') && preg_match('#^/paiement/(?P<pack>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'coach_reservation_paiement')), array (  '_controller' => 'Coach\\ReservationBundle\\Controller\\ReservationController::paiementAction',));
        }

        // coach_reservation_reservation
        if (0 === strpos($pathinfo, '/reserver') && preg_match('#^/reserver/(?P<pack>[^/]+)&(?P<contact>[^/]+)&(?P<commande>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'coach_reservation_reservation')), array (  '_controller' => 'Coach\\ReservationBundle\\Controller\\ReservationController::reservationAction',));
        }

        // coach_reservation_validation
        if (0 === strpos($pathinfo, '/validation') && preg_match('#^/validation/(?P<pack>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'coach_reservation_validation')), array (  '_controller' => 'Coach\\ReservationBundle\\Controller\\ReservationController::validationAction',));
        }

        // coach_reservation_inscription
        if (0 === strpos($pathinfo, '/inscription') && preg_match('#^/inscription/(?P<pack>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'coach_reservation_inscription')), array (  '_controller' => 'Coach\\ReservationBundle\\Controller\\ReservationController::inscriptionAction',));
        }

        if (0 === strpos($pathinfo, '/reservation')) {
            // coach_reservation_success
            if ($pathinfo === '/reservation/success') {
                return array (  '_controller' => 'Coach\\ReservationBundle\\Controller\\ReservationController::successAction',  '_route' => 'coach_reservation_success',);
            }

            // coach_reservation_failed
            if ($pathinfo === '/reservation/failed') {
                return array (  '_controller' => 'Coach\\ReservationBundle\\Controller\\ReservationController::failedAction',  '_route' => 'coach_reservation_failed',);
            }

        }

        // coach_coaching_homepage
        if ($pathinfo === '/coaching-immobilier/coach-immobilier/chasseur-de-biens') {
            return array (  '_controller' => 'Coach\\CoachingBundle\\Controller\\CoachingController::indexAction',  '_route' => 'coach_coaching_homepage',);
        }

        // coach_panneau_homepage
        if ($pathinfo === '/panneau') {
            return array (  '_controller' => 'Coach\\PanneauBundle\\Controller\\PanneauController::indexAction',  '_route' => 'coach_panneau_homepage',);
        }

        // coach_panneau_validation
        if ($pathinfo === '/validation-panneau') {
            return array (  '_controller' => 'Coach\\PanneauBundle\\Controller\\PanneauController::validationAction',  '_route' => 'coach_panneau_validation',);
        }

        // coach_panneau_paiement
        if (0 === strpos($pathinfo, '/panneau-paiement') && preg_match('#^/panneau\\-paiement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'coach_panneau_paiement')), array (  '_controller' => 'Coach\\PanneauBundle\\Controller\\PanneauController::paiementAction',));
        }

        if (0 === strpos($pathinfo, '/achat-panneau')) {
            // coach_panneau_success
            if ($pathinfo === '/achat-panneau/success') {
                return array (  '_controller' => 'Coach\\PanneauBundle\\Controller\\PanneauController::successAction',  '_route' => 'coach_panneau_success',);
            }

            // coach_panneau_failed
            if ($pathinfo === '/achat-panneau/failed') {
                return array (  '_controller' => 'Coach\\PanneauBundle\\Controller\\PanneauController::failedAction',  '_route' => 'coach_panneau_failed',);
            }

        }

        if (0 === strpos($pathinfo, '/json')) {
            // coach_estimation_json_villes
            if ($pathinfo === '/json/villes') {
                return array (  '_controller' => 'Coach\\EstimationBundle\\Controller\\JsonController::villesAction',  '_route' => 'coach_estimation_json_villes',);
            }

            // coach_estimation_json_codesPostaux
            if ($pathinfo === '/json/codesPostaux') {
                return array (  '_controller' => 'Coach\\EstimationBundle\\Controller\\JsonController::codesPostauxAction',  '_route' => 'coach_estimation_json_codesPostaux',);
            }

        }

        // coach_estimation_homepage
        if ($pathinfo === '/estimation-immobiliere/Prix-du-m2/prix-au-m2') {
            return array (  '_controller' => 'Coach\\EstimationBundle\\Controller\\EstimationController::indexAction',  '_route' => 'coach_estimation_homepage',);
        }

        // coach_estimation_departement
        if (0 === strpos($pathinfo, '/prix-departement') && preg_match('#^/prix\\-departement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'coach_estimation_departement')), array (  '_controller' => 'Coach\\EstimationBundle\\Controller\\EstimationController::afficheAction',));
        }

        // coach_estimation_form
        if ($pathinfo === '/evaluation-estimation-immobiliere-en-ligne') {
            return array (  '_controller' => 'Coach\\EstimationBundle\\Controller\\EstimationController::estimerAction',  '_route' => 'coach_estimation_form',);
        }

        // coach_estimation_update
        if ($pathinfo === '/update-villes') {
            return array (  '_controller' => 'Coach\\EstimationBundle\\Controller\\EstimationController::updateAction',  '_route' => 'coach_estimation_update',);
        }

        // coach_estimation_envoie_form
        if ($pathinfo === '/envoie-estimation-immobilier') {
            return array (  '_controller' => 'Coach\\EstimationBundle\\Controller\\EstimationController::envoieAction',  '_route' => 'coach_estimation_envoie_form',);
        }

        // coach_estimation_cheque
        if (0 === strpos($pathinfo, '/votre_estimation/estimation') && preg_match('#^/votre_estimation/estimation\\=(?P<cheque>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'coach_estimation_cheque')), array (  '_controller' => 'Coach\\EstimationBundle\\Controller\\EstimationController::chequeAction',));
        }

        // coach_page_homepage
        if (0 === strpos($pathinfo, '/page') && preg_match('#^/page/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'coach_page_homepage')), array (  '_controller' => 'Coach\\PageBundle\\Controller\\PageController::indexAction',));
        }

        // coach_annonce_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'coach_annonce_homepage');
            }

            return array (  '_controller' => 'Coach\\PageBundle\\Controller\\PageController::indexAction',  '_route' => 'coach_annonce_homepage',);
        }

        // coach_condition_general_utilisation
        if ($pathinfo === '/conditions-generales-utilisation') {
            return array (  '_controller' => 'Coach\\PageBundle\\Controller\\PageController::conditionsAction',  '_route' => 'coach_condition_general_utilisation',);
        }

        // coach_mentions_legales
        if ($pathinfo === '/mentions-legales') {
            return array (  '_controller' => 'Coach\\PageBundle\\Controller\\PageController::mentionsAction',  '_route' => 'coach_mentions_legales',);
        }

        // coach_newsletter_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'coach_newsletter_homepage')), array (  '_controller' => 'Coach\\NewsletterBundle\\Controller\\DefaultController::indexAction',));
        }

        // coach_user_compte_security
        if (0 === strpos($pathinfo, '/valider_compte') && preg_match('#^/valider_compte/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'coach_user_compte_security')), array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\UserController::validationAction',));
        }

        if (0 === strpos($pathinfo, '/mon_compte')) {
            if (0 === strpos($pathinfo, '/mon_compte/log')) {
                if (0 === strpos($pathinfo, '/mon_compte/login')) {
                    // coach_user_security_login
                    if ($pathinfo === '/mon_compte/login') {
                        return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'coach_user_security_login',);
                    }

                    // coach_user_security_check
                    if ($pathinfo === '/mon_compte/login_check') {
                        return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'coach_user_security_check',);
                    }

                }

                // coach_user_security_logout
                if ($pathinfo === '/mon_compte/logout') {
                    return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'coach_user_security_logout',);
                }

            }

            // coach_user_security_profile
            if ($pathinfo === '/mon_compte/profile') {
                return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'coach_user_security_profile',);
            }

            // coach_user_security_profile_edit
            if ($pathinfo === '/mon_compte/edit') {
                return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'coach_user_security_profile_edit',);
            }

        }

        // coach_user_registration_register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'coach_user_registration_register',);
        }

        // coach_user_contact
        if ($pathinfo === '/contactez-nous') {
            return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\ContactController::indexAction',  '_route' => 'coach_user_contact',);
        }

        // coach_user_contact_send
        if ($pathinfo === '/send-email') {
            return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\ContactController::indexAction',  '_route' => 'coach_user_contact_send',);
        }

        if (0 === strpos($pathinfo, '/register/c')) {
            // coach_user_registration_confirmed
            if ($pathinfo === '/register/confirmed') {
                return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'coach_user_registration_confirmed',);
            }

            // coach_user_registration_check_email
            if ($pathinfo === '/register/check-email') {
                return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'coach_user_registration_check_email',);
            }

        }

        // coach_message_delete
        if (0 === strpos($pathinfo, '/message/delete') && preg_match('#^/message/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'coach_message_delete')), array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\ProfileController::deleteMessageAction',));
        }

        // coach_front_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'coach_front_homepage')), array (  '_controller' => 'Coach\\FrontBundle\\Controller\\DefaultController::indexAction',));
        }

        // coach_front_info
        if ($pathinfo === '/infophp') {
            return array (  '_controller' => 'Coach\\FrontBundle\\Controller\\DefaultController::infoAction',  '_route' => 'coach_front_info',);
        }

        if (0 === strpos($pathinfo, '/annonce')) {
            // coach_annonce_preview
            if (0 === strpos($pathinfo, '/annonce/preview') && preg_match('#^/annonce/preview/(?P<id>[^/\\-]++)\\-(?P<titre>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'coach_annonce_preview')), array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\AnnonceController::previewAction',));
            }

            // coach_annonce_activer
            if (0 === strpos($pathinfo, '/annonce/activer') && preg_match('#^/annonce/activer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'coach_annonce_activer')), array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\AnnonceController::activerAction',));
            }

        }

        // coach_send_message_annonce
        if (0 === strpos($pathinfo, '/sendMessage') && preg_match('#^/sendMessage/(?P<ann>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'coach_send_message_annonce')), array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\AnnonceController::sendMessageAction',));
        }

        if (0 === strpos($pathinfo, '/annonce')) {
            // coach_annonce_ajouter
            if ($pathinfo === '/annonce/add') {
                return array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\AnnonceController::addAction',  '_route' => 'coach_annonce_ajouter',);
            }

            if (0 === strpos($pathinfo, '/annonce/step')) {
                // coach_annonce_deposez
                if (0 === strpos($pathinfo, '/annonce/step1') && preg_match('#^/annonce/step1/(?P<ordre>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'coach_annonce_deposez')), array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\AnnonceController::deposerAction',));
                }

                // coach_annonce_photos
                if (0 === strpos($pathinfo, '/annonce/step2') && preg_match('#^/annonce/step2\\-(?P<annonce>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'coach_annonce_photos')), array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\AnnonceController::addPhotosAction',));
                }

            }

        }

        // coach_annonce_deposez_ajouter
        if ($pathinfo === '/deposez-annonce/ajouter') {
            return array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\AnnonceController::ajouterAnnonceAction',  '_route' => 'coach_annonce_deposez_ajouter',);
        }

        if (0 === strpos($pathinfo, '/annonce')) {
            // coach_annonce_details
            if (0 === strpos($pathinfo, '/annonce/details') && preg_match('#^/annonce/details/(?P<id>[^/\\-]++)\\-(?P<titre>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'coach_annonce_details')), array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\AnnonceController::detailsAction',));
            }

            // coach_annonce_verification
            if (0 === strpos($pathinfo, '/annonce/verification') && preg_match('#^/annonce/verification/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'coach_annonce_verification')), array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\AnnonceController::verificationAction',));
            }

            // coach_annonce_confirmation
            if (0 === strpos($pathinfo, '/annonce/confirmation') && preg_match('#^/annonce/confirmation/(?P<id>[^/\\-]++)\\-(?P<reference>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'coach_annonce_confirmation')), array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\AnnonceController::confirmationAction',));
            }

            // coach_annonce_paiement
            if (0 === strpos($pathinfo, '/annonce/paiement') && preg_match('#^/annonce/paiement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'coach_annonce_paiement')), array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\AnnonceController::paiementAction',));
            }

        }

        if (0 === strpos($pathinfo, '/transaction')) {
            // coach_commande_success
            if ($pathinfo === '/transaction/success') {
                return array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\CommandeController::successAction',  '_route' => 'coach_commande_success',);
            }

            // coach_commande_failed
            if ($pathinfo === '/transaction/failed') {
                return array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\CommandeController::failedAction',  '_route' => 'coach_commande_failed',);
            }

        }

        if (0 === strpos($pathinfo, '/annonce')) {
            // coach_annonce_delete
            if (0 === strpos($pathinfo, '/annonce/delete') && preg_match('#^/annonce/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'coach_annonce_delete')), array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\AnnonceController::deleteAction',));
            }

            // coach_annonce_editer
            if (0 === strpos($pathinfo, '/annonce/edit') && preg_match('#^/annonce/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'coach_annonce_editer')), array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\AnnonceController::editAnnonceAction',));
            }

            // coach_annonce_deposez_modifier
            if (0 === strpos($pathinfo, '/annonce/modifier') && preg_match('#^/annonce/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'coach_annonce_deposez_modifier')), array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\AnnonceController::modifierAnnonceAction',));
            }

        }

        // coach_annonce_search
        if ($pathinfo === '/recherche-appartement-ou-maison') {
            return array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\AnnonceController::searchPageAction',  '_route' => 'coach_annonce_search',);
        }

        if (0 === strpos($pathinfo, '/annonce-immobilier-result')) {
            // coach_annonce_search_filter
            if (0 === strpos($pathinfo, '/annonce-immobilier-result-filter') && preg_match('#^/annonce\\-immobilier\\-result\\-filter/(?P<filter>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_coach_annonce_search_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'coach_annonce_search_filter')), array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\AnnonceController::searchAjaxAction',));
            }
            not_coach_annonce_search_filter:

            // coach_annonce_search_result
            if ($pathinfo === '/annonce-immobilier-result') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_coach_annonce_search_result;
                }

                return array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\AnnonceController::searchAction',  '_route' => 'coach_annonce_search_result',);
            }
            not_coach_annonce_search_result:

        }

        // coach_pack
        if ($pathinfo === '/passer-deposer-annonce-immobiliere-gratuite') {
            return array (  '_controller' => 'Coach\\PackBundle\\Controller\\PackController::packAction',  '_route' => 'coach_pack',);
        }

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

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/admin/sonata/user/contactperson')) {
                // admin_sonata_user_contactperson_list
                if ($pathinfo === '/admin/sonata/user/contactperson/list') {
                    return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\ContactPersonAdminController::listAction',  '_sonata_admin' => 'application_sonata_user.admin.contact_person',  '_sonata_name' => 'admin_sonata_user_contactperson_list',  '_route' => 'admin_sonata_user_contactperson_list',);
                }

                // admin_sonata_user_contactperson_create
                if ($pathinfo === '/admin/sonata/user/contactperson/create') {
                    return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\ContactPersonAdminController::createAction',  '_sonata_admin' => 'application_sonata_user.admin.contact_person',  '_sonata_name' => 'admin_sonata_user_contactperson_create',  '_route' => 'admin_sonata_user_contactperson_create',);
                }

                // admin_sonata_user_contactperson_batch
                if ($pathinfo === '/admin/sonata/user/contactperson/batch') {
                    return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\ContactPersonAdminController::batchAction',  '_sonata_admin' => 'application_sonata_user.admin.contact_person',  '_sonata_name' => 'admin_sonata_user_contactperson_batch',  '_route' => 'admin_sonata_user_contactperson_batch',);
                }

                // admin_sonata_user_contactperson_edit
                if (preg_match('#^/admin/sonata/user/contactperson/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_contactperson_edit')), array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\ContactPersonAdminController::editAction',  '_sonata_admin' => 'application_sonata_user.admin.contact_person',  '_sonata_name' => 'admin_sonata_user_contactperson_edit',));
                }

                // admin_sonata_user_contactperson_delete
                if (preg_match('#^/admin/sonata/user/contactperson/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_contactperson_delete')), array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\ContactPersonAdminController::deleteAction',  '_sonata_admin' => 'application_sonata_user.admin.contact_person',  '_sonata_name' => 'admin_sonata_user_contactperson_delete',));
                }

                // admin_sonata_user_contactperson_show
                if (preg_match('#^/admin/sonata/user/contactperson/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_contactperson_show')), array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\ContactPersonAdminController::showAction',  '_sonata_admin' => 'application_sonata_user.admin.contact_person',  '_sonata_name' => 'admin_sonata_user_contactperson_show',));
                }

                // admin_sonata_user_contactperson_export
                if ($pathinfo === '/admin/sonata/user/contactperson/export') {
                    return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\ContactPersonAdminController::exportAction',  '_sonata_admin' => 'application_sonata_user.admin.contact_person',  '_sonata_name' => 'admin_sonata_user_contactperson_export',  '_route' => 'admin_sonata_user_contactperson_export',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/coach/annonce')) {
                if (0 === strpos($pathinfo, '/admin/coach/annonce/annonce')) {
                    // admin_coach_annonce_annonce_list
                    if ($pathinfo === '/admin/coach/annonce/annonce/list') {
                        return array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\AnnonceAdminController::listAction',  '_sonata_admin' => 'coach_annonce_annonce.admin.user',  '_sonata_name' => 'admin_coach_annonce_annonce_list',  '_route' => 'admin_coach_annonce_annonce_list',);
                    }

                    // admin_coach_annonce_annonce_create
                    if ($pathinfo === '/admin/coach/annonce/annonce/create') {
                        return array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\AnnonceAdminController::createAction',  '_sonata_admin' => 'coach_annonce_annonce.admin.user',  '_sonata_name' => 'admin_coach_annonce_annonce_create',  '_route' => 'admin_coach_annonce_annonce_create',);
                    }

                    // admin_coach_annonce_annonce_batch
                    if ($pathinfo === '/admin/coach/annonce/annonce/batch') {
                        return array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\AnnonceAdminController::batchAction',  '_sonata_admin' => 'coach_annonce_annonce.admin.user',  '_sonata_name' => 'admin_coach_annonce_annonce_batch',  '_route' => 'admin_coach_annonce_annonce_batch',);
                    }

                    // admin_coach_annonce_annonce_edit
                    if (preg_match('#^/admin/coach/annonce/annonce/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_annonce_annonce_edit')), array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\AnnonceAdminController::editAction',  '_sonata_admin' => 'coach_annonce_annonce.admin.user',  '_sonata_name' => 'admin_coach_annonce_annonce_edit',));
                    }

                    // admin_coach_annonce_annonce_delete
                    if (preg_match('#^/admin/coach/annonce/annonce/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_annonce_annonce_delete')), array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\AnnonceAdminController::deleteAction',  '_sonata_admin' => 'coach_annonce_annonce.admin.user',  '_sonata_name' => 'admin_coach_annonce_annonce_delete',));
                    }

                    // admin_coach_annonce_annonce_show
                    if (preg_match('#^/admin/coach/annonce/annonce/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_annonce_annonce_show')), array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\AnnonceAdminController::showAction',  '_sonata_admin' => 'coach_annonce_annonce.admin.user',  '_sonata_name' => 'admin_coach_annonce_annonce_show',));
                    }

                    // admin_coach_annonce_annonce_export
                    if ($pathinfo === '/admin/coach/annonce/annonce/export') {
                        return array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\AnnonceAdminController::exportAction',  '_sonata_admin' => 'coach_annonce_annonce.admin.user',  '_sonata_name' => 'admin_coach_annonce_annonce_export',  '_route' => 'admin_coach_annonce_annonce_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/coach/annonce/typeannonce')) {
                    // admin_coach_annonce_typeannonce_list
                    if ($pathinfo === '/admin/coach/annonce/typeannonce/list') {
                        return array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\TypeAnnonceAdminController::listAction',  '_sonata_admin' => 'coach_annonce_type.admin.user',  '_sonata_name' => 'admin_coach_annonce_typeannonce_list',  '_route' => 'admin_coach_annonce_typeannonce_list',);
                    }

                    // admin_coach_annonce_typeannonce_create
                    if ($pathinfo === '/admin/coach/annonce/typeannonce/create') {
                        return array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\TypeAnnonceAdminController::createAction',  '_sonata_admin' => 'coach_annonce_type.admin.user',  '_sonata_name' => 'admin_coach_annonce_typeannonce_create',  '_route' => 'admin_coach_annonce_typeannonce_create',);
                    }

                    // admin_coach_annonce_typeannonce_batch
                    if ($pathinfo === '/admin/coach/annonce/typeannonce/batch') {
                        return array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\TypeAnnonceAdminController::batchAction',  '_sonata_admin' => 'coach_annonce_type.admin.user',  '_sonata_name' => 'admin_coach_annonce_typeannonce_batch',  '_route' => 'admin_coach_annonce_typeannonce_batch',);
                    }

                    // admin_coach_annonce_typeannonce_edit
                    if (preg_match('#^/admin/coach/annonce/typeannonce/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_annonce_typeannonce_edit')), array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\TypeAnnonceAdminController::editAction',  '_sonata_admin' => 'coach_annonce_type.admin.user',  '_sonata_name' => 'admin_coach_annonce_typeannonce_edit',));
                    }

                    // admin_coach_annonce_typeannonce_delete
                    if (preg_match('#^/admin/coach/annonce/typeannonce/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_annonce_typeannonce_delete')), array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\TypeAnnonceAdminController::deleteAction',  '_sonata_admin' => 'coach_annonce_type.admin.user',  '_sonata_name' => 'admin_coach_annonce_typeannonce_delete',));
                    }

                    // admin_coach_annonce_typeannonce_show
                    if (preg_match('#^/admin/coach/annonce/typeannonce/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_annonce_typeannonce_show')), array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\TypeAnnonceAdminController::showAction',  '_sonata_admin' => 'coach_annonce_type.admin.user',  '_sonata_name' => 'admin_coach_annonce_typeannonce_show',));
                    }

                    // admin_coach_annonce_typeannonce_export
                    if ($pathinfo === '/admin/coach/annonce/typeannonce/export') {
                        return array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\TypeAnnonceAdminController::exportAction',  '_sonata_admin' => 'coach_annonce_type.admin.user',  '_sonata_name' => 'admin_coach_annonce_typeannonce_export',  '_route' => 'admin_coach_annonce_typeannonce_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/coach/annonce/optionannonce')) {
                    // admin_coach_annonce_optionannonce_list
                    if ($pathinfo === '/admin/coach/annonce/optionannonce/list') {
                        return array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\OptionAnnonceAdminController::listAction',  '_sonata_admin' => 'coach_annonce_option.admin.user',  '_sonata_name' => 'admin_coach_annonce_optionannonce_list',  '_route' => 'admin_coach_annonce_optionannonce_list',);
                    }

                    // admin_coach_annonce_optionannonce_create
                    if ($pathinfo === '/admin/coach/annonce/optionannonce/create') {
                        return array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\OptionAnnonceAdminController::createAction',  '_sonata_admin' => 'coach_annonce_option.admin.user',  '_sonata_name' => 'admin_coach_annonce_optionannonce_create',  '_route' => 'admin_coach_annonce_optionannonce_create',);
                    }

                    // admin_coach_annonce_optionannonce_batch
                    if ($pathinfo === '/admin/coach/annonce/optionannonce/batch') {
                        return array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\OptionAnnonceAdminController::batchAction',  '_sonata_admin' => 'coach_annonce_option.admin.user',  '_sonata_name' => 'admin_coach_annonce_optionannonce_batch',  '_route' => 'admin_coach_annonce_optionannonce_batch',);
                    }

                    // admin_coach_annonce_optionannonce_edit
                    if (preg_match('#^/admin/coach/annonce/optionannonce/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_annonce_optionannonce_edit')), array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\OptionAnnonceAdminController::editAction',  '_sonata_admin' => 'coach_annonce_option.admin.user',  '_sonata_name' => 'admin_coach_annonce_optionannonce_edit',));
                    }

                    // admin_coach_annonce_optionannonce_delete
                    if (preg_match('#^/admin/coach/annonce/optionannonce/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_annonce_optionannonce_delete')), array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\OptionAnnonceAdminController::deleteAction',  '_sonata_admin' => 'coach_annonce_option.admin.user',  '_sonata_name' => 'admin_coach_annonce_optionannonce_delete',));
                    }

                    // admin_coach_annonce_optionannonce_show
                    if (preg_match('#^/admin/coach/annonce/optionannonce/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_annonce_optionannonce_show')), array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\OptionAnnonceAdminController::showAction',  '_sonata_admin' => 'coach_annonce_option.admin.user',  '_sonata_name' => 'admin_coach_annonce_optionannonce_show',));
                    }

                    // admin_coach_annonce_optionannonce_export
                    if ($pathinfo === '/admin/coach/annonce/optionannonce/export') {
                        return array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\OptionAnnonceAdminController::exportAction',  '_sonata_admin' => 'coach_annonce_option.admin.user',  '_sonata_name' => 'admin_coach_annonce_optionannonce_export',  '_route' => 'admin_coach_annonce_optionannonce_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/coach/annonce/classannonce')) {
                    // admin_coach_annonce_classannonce_list
                    if ($pathinfo === '/admin/coach/annonce/classannonce/list') {
                        return array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\ClassAnnonceAdminController::listAction',  '_sonata_admin' => 'coach_annonce_class.admin.user',  '_sonata_name' => 'admin_coach_annonce_classannonce_list',  '_route' => 'admin_coach_annonce_classannonce_list',);
                    }

                    // admin_coach_annonce_classannonce_create
                    if ($pathinfo === '/admin/coach/annonce/classannonce/create') {
                        return array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\ClassAnnonceAdminController::createAction',  '_sonata_admin' => 'coach_annonce_class.admin.user',  '_sonata_name' => 'admin_coach_annonce_classannonce_create',  '_route' => 'admin_coach_annonce_classannonce_create',);
                    }

                    // admin_coach_annonce_classannonce_batch
                    if ($pathinfo === '/admin/coach/annonce/classannonce/batch') {
                        return array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\ClassAnnonceAdminController::batchAction',  '_sonata_admin' => 'coach_annonce_class.admin.user',  '_sonata_name' => 'admin_coach_annonce_classannonce_batch',  '_route' => 'admin_coach_annonce_classannonce_batch',);
                    }

                    // admin_coach_annonce_classannonce_edit
                    if (preg_match('#^/admin/coach/annonce/classannonce/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_annonce_classannonce_edit')), array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\ClassAnnonceAdminController::editAction',  '_sonata_admin' => 'coach_annonce_class.admin.user',  '_sonata_name' => 'admin_coach_annonce_classannonce_edit',));
                    }

                    // admin_coach_annonce_classannonce_delete
                    if (preg_match('#^/admin/coach/annonce/classannonce/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_annonce_classannonce_delete')), array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\ClassAnnonceAdminController::deleteAction',  '_sonata_admin' => 'coach_annonce_class.admin.user',  '_sonata_name' => 'admin_coach_annonce_classannonce_delete',));
                    }

                    // admin_coach_annonce_classannonce_show
                    if (preg_match('#^/admin/coach/annonce/classannonce/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_annonce_classannonce_show')), array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\ClassAnnonceAdminController::showAction',  '_sonata_admin' => 'coach_annonce_class.admin.user',  '_sonata_name' => 'admin_coach_annonce_classannonce_show',));
                    }

                    // admin_coach_annonce_classannonce_export
                    if ($pathinfo === '/admin/coach/annonce/classannonce/export') {
                        return array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\ClassAnnonceAdminController::exportAction',  '_sonata_admin' => 'coach_annonce_class.admin.user',  '_sonata_name' => 'admin_coach_annonce_classannonce_export',  '_route' => 'admin_coach_annonce_classannonce_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/coach/annonce/proximite')) {
                    // admin_coach_annonce_proximite_list
                    if ($pathinfo === '/admin/coach/annonce/proximite/list') {
                        return array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\ProximiteAdminController::listAction',  '_sonata_admin' => 'coach_annonce_proximite.admin.user',  '_sonata_name' => 'admin_coach_annonce_proximite_list',  '_route' => 'admin_coach_annonce_proximite_list',);
                    }

                    // admin_coach_annonce_proximite_create
                    if ($pathinfo === '/admin/coach/annonce/proximite/create') {
                        return array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\ProximiteAdminController::createAction',  '_sonata_admin' => 'coach_annonce_proximite.admin.user',  '_sonata_name' => 'admin_coach_annonce_proximite_create',  '_route' => 'admin_coach_annonce_proximite_create',);
                    }

                    // admin_coach_annonce_proximite_batch
                    if ($pathinfo === '/admin/coach/annonce/proximite/batch') {
                        return array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\ProximiteAdminController::batchAction',  '_sonata_admin' => 'coach_annonce_proximite.admin.user',  '_sonata_name' => 'admin_coach_annonce_proximite_batch',  '_route' => 'admin_coach_annonce_proximite_batch',);
                    }

                    // admin_coach_annonce_proximite_edit
                    if (preg_match('#^/admin/coach/annonce/proximite/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_annonce_proximite_edit')), array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\ProximiteAdminController::editAction',  '_sonata_admin' => 'coach_annonce_proximite.admin.user',  '_sonata_name' => 'admin_coach_annonce_proximite_edit',));
                    }

                    // admin_coach_annonce_proximite_delete
                    if (preg_match('#^/admin/coach/annonce/proximite/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_annonce_proximite_delete')), array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\ProximiteAdminController::deleteAction',  '_sonata_admin' => 'coach_annonce_proximite.admin.user',  '_sonata_name' => 'admin_coach_annonce_proximite_delete',));
                    }

                    // admin_coach_annonce_proximite_show
                    if (preg_match('#^/admin/coach/annonce/proximite/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_annonce_proximite_show')), array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\ProximiteAdminController::showAction',  '_sonata_admin' => 'coach_annonce_proximite.admin.user',  '_sonata_name' => 'admin_coach_annonce_proximite_show',));
                    }

                    // admin_coach_annonce_proximite_export
                    if ($pathinfo === '/admin/coach/annonce/proximite/export') {
                        return array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\ProximiteAdminController::exportAction',  '_sonata_admin' => 'coach_annonce_proximite.admin.user',  '_sonata_name' => 'admin_coach_annonce_proximite_export',  '_route' => 'admin_coach_annonce_proximite_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/coach/annonce/commande')) {
                    // admin_coach_annonce_commande_list
                    if ($pathinfo === '/admin/coach/annonce/commande/list') {
                        return array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\CommandeAdminController::listAction',  '_sonata_admin' => 'coach_annonce.admin.commande',  '_sonata_name' => 'admin_coach_annonce_commande_list',  '_route' => 'admin_coach_annonce_commande_list',);
                    }

                    // admin_coach_annonce_commande_create
                    if ($pathinfo === '/admin/coach/annonce/commande/create') {
                        return array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\CommandeAdminController::createAction',  '_sonata_admin' => 'coach_annonce.admin.commande',  '_sonata_name' => 'admin_coach_annonce_commande_create',  '_route' => 'admin_coach_annonce_commande_create',);
                    }

                    // admin_coach_annonce_commande_batch
                    if ($pathinfo === '/admin/coach/annonce/commande/batch') {
                        return array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\CommandeAdminController::batchAction',  '_sonata_admin' => 'coach_annonce.admin.commande',  '_sonata_name' => 'admin_coach_annonce_commande_batch',  '_route' => 'admin_coach_annonce_commande_batch',);
                    }

                    // admin_coach_annonce_commande_edit
                    if (preg_match('#^/admin/coach/annonce/commande/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_annonce_commande_edit')), array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\CommandeAdminController::editAction',  '_sonata_admin' => 'coach_annonce.admin.commande',  '_sonata_name' => 'admin_coach_annonce_commande_edit',));
                    }

                    // admin_coach_annonce_commande_delete
                    if (preg_match('#^/admin/coach/annonce/commande/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_annonce_commande_delete')), array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\CommandeAdminController::deleteAction',  '_sonata_admin' => 'coach_annonce.admin.commande',  '_sonata_name' => 'admin_coach_annonce_commande_delete',));
                    }

                    // admin_coach_annonce_commande_show
                    if (preg_match('#^/admin/coach/annonce/commande/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_annonce_commande_show')), array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\CommandeAdminController::showAction',  '_sonata_admin' => 'coach_annonce.admin.commande',  '_sonata_name' => 'admin_coach_annonce_commande_show',));
                    }

                    // admin_coach_annonce_commande_export
                    if ($pathinfo === '/admin/coach/annonce/commande/export') {
                        return array (  '_controller' => 'Coach\\AnnonceBundle\\Controller\\CommandeAdminController::exportAction',  '_sonata_admin' => 'coach_annonce.admin.commande',  '_sonata_name' => 'admin_coach_annonce_commande_export',  '_route' => 'admin_coach_annonce_commande_export',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/sonata')) {
                if (0 === strpos($pathinfo, '/admin/sonata/user')) {
                    if (0 === strpos($pathinfo, '/admin/sonata/user/user')) {
                        // admin_sonata_user_user_list
                        if ($pathinfo === '/admin/sonata/user/user/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_list',  '_route' => 'admin_sonata_user_user_list',);
                        }

                        // admin_sonata_user_user_create
                        if ($pathinfo === '/admin/sonata/user/user/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_create',  '_route' => 'admin_sonata_user_user_create',);
                        }

                        // admin_sonata_user_user_batch
                        if ($pathinfo === '/admin/sonata/user/user/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_batch',  '_route' => 'admin_sonata_user_user_batch',);
                        }

                        // admin_sonata_user_user_edit
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_edit',));
                        }

                        // admin_sonata_user_user_delete
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_delete',));
                        }

                        // admin_sonata_user_user_show
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_show',));
                        }

                        // admin_sonata_user_user_export
                        if ($pathinfo === '/admin/sonata/user/user/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_export',  '_route' => 'admin_sonata_user_user_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/user/group')) {
                        // admin_sonata_user_group_list
                        if ($pathinfo === '/admin/sonata/user/group/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_list',  '_route' => 'admin_sonata_user_group_list',);
                        }

                        // admin_sonata_user_group_create
                        if ($pathinfo === '/admin/sonata/user/group/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_create',  '_route' => 'admin_sonata_user_group_create',);
                        }

                        // admin_sonata_user_group_batch
                        if ($pathinfo === '/admin/sonata/user/group/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_batch',  '_route' => 'admin_sonata_user_group_batch',);
                        }

                        // admin_sonata_user_group_edit
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_edit',));
                        }

                        // admin_sonata_user_group_delete
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_delete',));
                        }

                        // admin_sonata_user_group_show
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_show',));
                        }

                        // admin_sonata_user_group_export
                        if ($pathinfo === '/admin/sonata/user/group/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_export',  '_route' => 'admin_sonata_user_group_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/sonata/media')) {
                    if (0 === strpos($pathinfo, '/admin/sonata/media/media')) {
                        // admin_sonata_media_media_list
                        if ($pathinfo === '/admin/sonata/media/media/list') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::listAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_list',  '_route' => 'admin_sonata_media_media_list',);
                        }

                        // admin_sonata_media_media_create
                        if ($pathinfo === '/admin/sonata/media/media/create') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::createAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_create',  '_route' => 'admin_sonata_media_media_create',);
                        }

                        // admin_sonata_media_media_batch
                        if ($pathinfo === '/admin/sonata/media/media/batch') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::batchAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_batch',  '_route' => 'admin_sonata_media_media_batch',);
                        }

                        // admin_sonata_media_media_edit
                        if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_edit')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::editAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_edit',));
                        }

                        // admin_sonata_media_media_delete
                        if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_delete')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_delete',));
                        }

                        // admin_sonata_media_media_show
                        if (preg_match('#^/admin/sonata/media/media/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_media_show')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::showAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_show',));
                        }

                        // admin_sonata_media_media_export
                        if ($pathinfo === '/admin/sonata/media/media/export') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::exportAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_sonata_media_media_export',  '_route' => 'admin_sonata_media_media_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/media/gallery')) {
                        // admin_sonata_media_gallery_list
                        if ($pathinfo === '/admin/sonata/media/gallery/list') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::listAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_list',  '_route' => 'admin_sonata_media_gallery_list',);
                        }

                        // admin_sonata_media_gallery_create
                        if ($pathinfo === '/admin/sonata/media/gallery/create') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::createAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_create',  '_route' => 'admin_sonata_media_gallery_create',);
                        }

                        // admin_sonata_media_gallery_batch
                        if ($pathinfo === '/admin/sonata/media/gallery/batch') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::batchAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_batch',  '_route' => 'admin_sonata_media_gallery_batch',);
                        }

                        // admin_sonata_media_gallery_edit
                        if (preg_match('#^/admin/sonata/media/gallery/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_gallery_edit')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::editAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_edit',));
                        }

                        // admin_sonata_media_gallery_delete
                        if (preg_match('#^/admin/sonata/media/gallery/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_gallery_delete')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_delete',));
                        }

                        // admin_sonata_media_gallery_show
                        if (preg_match('#^/admin/sonata/media/gallery/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_gallery_show')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::showAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_show',));
                        }

                        // admin_sonata_media_gallery_export
                        if ($pathinfo === '/admin/sonata/media/gallery/export') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::exportAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_sonata_media_gallery_export',  '_route' => 'admin_sonata_media_gallery_export',);
                        }

                        if (0 === strpos($pathinfo, '/admin/sonata/media/galleryhasmedia')) {
                            // admin_sonata_media_galleryhasmedia_list
                            if ($pathinfo === '/admin/sonata/media/galleryhasmedia/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_list',  '_route' => 'admin_sonata_media_galleryhasmedia_list',);
                            }

                            // admin_sonata_media_galleryhasmedia_create
                            if ($pathinfo === '/admin/sonata/media/galleryhasmedia/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_create',  '_route' => 'admin_sonata_media_galleryhasmedia_create',);
                            }

                            // admin_sonata_media_galleryhasmedia_batch
                            if ($pathinfo === '/admin/sonata/media/galleryhasmedia/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_batch',  '_route' => 'admin_sonata_media_galleryhasmedia_batch',);
                            }

                            // admin_sonata_media_galleryhasmedia_edit
                            if (preg_match('#^/admin/sonata/media/galleryhasmedia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_galleryhasmedia_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_edit',));
                            }

                            // admin_sonata_media_galleryhasmedia_delete
                            if (preg_match('#^/admin/sonata/media/galleryhasmedia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_galleryhasmedia_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_delete',));
                            }

                            // admin_sonata_media_galleryhasmedia_show
                            if (preg_match('#^/admin/sonata/media/galleryhasmedia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_media_galleryhasmedia_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_show',));
                            }

                            // admin_sonata_media_galleryhasmedia_export
                            if ($pathinfo === '/admin/sonata/media/galleryhasmedia/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_sonata_media_galleryhasmedia_export',  '_route' => 'admin_sonata_media_galleryhasmedia_export',);
                            }

                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/sonata/notification/message')) {
                    // admin_sonata_notification_message_list
                    if ($pathinfo === '/admin/sonata/notification/message/list') {
                        return array (  '_controller' => 'Sonata\\NotificationBundle\\Controller\\MessageAdminController::listAction',  '_sonata_admin' => 'sonata.notification.admin.message',  '_sonata_name' => 'admin_sonata_notification_message_list',  '_route' => 'admin_sonata_notification_message_list',);
                    }

                    // admin_sonata_notification_message_batch
                    if ($pathinfo === '/admin/sonata/notification/message/batch') {
                        return array (  '_controller' => 'Sonata\\NotificationBundle\\Controller\\MessageAdminController::batchAction',  '_sonata_admin' => 'sonata.notification.admin.message',  '_sonata_name' => 'admin_sonata_notification_message_batch',  '_route' => 'admin_sonata_notification_message_batch',);
                    }

                    // admin_sonata_notification_message_delete
                    if (preg_match('#^/admin/sonata/notification/message/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_notification_message_delete')), array (  '_controller' => 'Sonata\\NotificationBundle\\Controller\\MessageAdminController::deleteAction',  '_sonata_admin' => 'sonata.notification.admin.message',  '_sonata_name' => 'admin_sonata_notification_message_delete',));
                    }

                    // admin_sonata_notification_message_show
                    if (preg_match('#^/admin/sonata/notification/message/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_notification_message_show')), array (  '_controller' => 'Sonata\\NotificationBundle\\Controller\\MessageAdminController::showAction',  '_sonata_admin' => 'sonata.notification.admin.message',  '_sonata_name' => 'admin_sonata_notification_message_show',));
                    }

                    // admin_sonata_notification_message_export
                    if ($pathinfo === '/admin/sonata/notification/message/export') {
                        return array (  '_controller' => 'Sonata\\NotificationBundle\\Controller\\MessageAdminController::exportAction',  '_sonata_admin' => 'sonata.notification.admin.message',  '_sonata_name' => 'admin_sonata_notification_message_export',  '_route' => 'admin_sonata_notification_message_export',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/coach')) {
                if (0 === strpos($pathinfo, '/admin/coach/pa')) {
                    if (0 === strpos($pathinfo, '/admin/coach/pack')) {
                        if (0 === strpos($pathinfo, '/admin/coach/pack/optioninfo')) {
                            // admin_coach_pack_optioninfo_list
                            if ($pathinfo === '/admin/coach/pack/optioninfo/list') {
                                return array (  '_controller' => 'Coach\\PackBundle\\Controller\\OptionInfoAdminController::listAction',  '_sonata_admin' => 'coach_pack_optioninfo.admin.user',  '_sonata_name' => 'admin_coach_pack_optioninfo_list',  '_route' => 'admin_coach_pack_optioninfo_list',);
                            }

                            // admin_coach_pack_optioninfo_create
                            if ($pathinfo === '/admin/coach/pack/optioninfo/create') {
                                return array (  '_controller' => 'Coach\\PackBundle\\Controller\\OptionInfoAdminController::createAction',  '_sonata_admin' => 'coach_pack_optioninfo.admin.user',  '_sonata_name' => 'admin_coach_pack_optioninfo_create',  '_route' => 'admin_coach_pack_optioninfo_create',);
                            }

                            // admin_coach_pack_optioninfo_batch
                            if ($pathinfo === '/admin/coach/pack/optioninfo/batch') {
                                return array (  '_controller' => 'Coach\\PackBundle\\Controller\\OptionInfoAdminController::batchAction',  '_sonata_admin' => 'coach_pack_optioninfo.admin.user',  '_sonata_name' => 'admin_coach_pack_optioninfo_batch',  '_route' => 'admin_coach_pack_optioninfo_batch',);
                            }

                            // admin_coach_pack_optioninfo_edit
                            if (preg_match('#^/admin/coach/pack/optioninfo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_pack_optioninfo_edit')), array (  '_controller' => 'Coach\\PackBundle\\Controller\\OptionInfoAdminController::editAction',  '_sonata_admin' => 'coach_pack_optioninfo.admin.user',  '_sonata_name' => 'admin_coach_pack_optioninfo_edit',));
                            }

                            // admin_coach_pack_optioninfo_delete
                            if (preg_match('#^/admin/coach/pack/optioninfo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_pack_optioninfo_delete')), array (  '_controller' => 'Coach\\PackBundle\\Controller\\OptionInfoAdminController::deleteAction',  '_sonata_admin' => 'coach_pack_optioninfo.admin.user',  '_sonata_name' => 'admin_coach_pack_optioninfo_delete',));
                            }

                            // admin_coach_pack_optioninfo_show
                            if (preg_match('#^/admin/coach/pack/optioninfo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_pack_optioninfo_show')), array (  '_controller' => 'Coach\\PackBundle\\Controller\\OptionInfoAdminController::showAction',  '_sonata_admin' => 'coach_pack_optioninfo.admin.user',  '_sonata_name' => 'admin_coach_pack_optioninfo_show',));
                            }

                            // admin_coach_pack_optioninfo_export
                            if ($pathinfo === '/admin/coach/pack/optioninfo/export') {
                                return array (  '_controller' => 'Coach\\PackBundle\\Controller\\OptionInfoAdminController::exportAction',  '_sonata_admin' => 'coach_pack_optioninfo.admin.user',  '_sonata_name' => 'admin_coach_pack_optioninfo_export',  '_route' => 'admin_coach_pack_optioninfo_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/coach/pack/pack')) {
                            // admin_coach_pack_pack_list
                            if ($pathinfo === '/admin/coach/pack/pack/list') {
                                return array (  '_controller' => 'Coach\\PackBundle\\Controller\\PackAdminController::listAction',  '_sonata_admin' => 'coach_pack_pack.admin.user',  '_sonata_name' => 'admin_coach_pack_pack_list',  '_route' => 'admin_coach_pack_pack_list',);
                            }

                            // admin_coach_pack_pack_create
                            if ($pathinfo === '/admin/coach/pack/pack/create') {
                                return array (  '_controller' => 'Coach\\PackBundle\\Controller\\PackAdminController::createAction',  '_sonata_admin' => 'coach_pack_pack.admin.user',  '_sonata_name' => 'admin_coach_pack_pack_create',  '_route' => 'admin_coach_pack_pack_create',);
                            }

                            // admin_coach_pack_pack_batch
                            if ($pathinfo === '/admin/coach/pack/pack/batch') {
                                return array (  '_controller' => 'Coach\\PackBundle\\Controller\\PackAdminController::batchAction',  '_sonata_admin' => 'coach_pack_pack.admin.user',  '_sonata_name' => 'admin_coach_pack_pack_batch',  '_route' => 'admin_coach_pack_pack_batch',);
                            }

                            // admin_coach_pack_pack_edit
                            if (preg_match('#^/admin/coach/pack/pack/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_pack_pack_edit')), array (  '_controller' => 'Coach\\PackBundle\\Controller\\PackAdminController::editAction',  '_sonata_admin' => 'coach_pack_pack.admin.user',  '_sonata_name' => 'admin_coach_pack_pack_edit',));
                            }

                            // admin_coach_pack_pack_delete
                            if (preg_match('#^/admin/coach/pack/pack/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_pack_pack_delete')), array (  '_controller' => 'Coach\\PackBundle\\Controller\\PackAdminController::deleteAction',  '_sonata_admin' => 'coach_pack_pack.admin.user',  '_sonata_name' => 'admin_coach_pack_pack_delete',));
                            }

                            // admin_coach_pack_pack_show
                            if (preg_match('#^/admin/coach/pack/pack/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_pack_pack_show')), array (  '_controller' => 'Coach\\PackBundle\\Controller\\PackAdminController::showAction',  '_sonata_admin' => 'coach_pack_pack.admin.user',  '_sonata_name' => 'admin_coach_pack_pack_show',));
                            }

                            // admin_coach_pack_pack_export
                            if ($pathinfo === '/admin/coach/pack/pack/export') {
                                return array (  '_controller' => 'Coach\\PackBundle\\Controller\\PackAdminController::exportAction',  '_sonata_admin' => 'coach_pack_pack.admin.user',  '_sonata_name' => 'admin_coach_pack_pack_export',  '_route' => 'admin_coach_pack_pack_export',);
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/coach/page')) {
                        if (0 === strpos($pathinfo, '/admin/coach/page/page')) {
                            // admin_coach_page_page_list
                            if ($pathinfo === '/admin/coach/page/page/list') {
                                return array (  '_controller' => 'Coach\\PageBundle\\Controller\\PageAdminController::listAction',  '_sonata_admin' => 'coach_page.admin.page',  '_sonata_name' => 'admin_coach_page_page_list',  '_route' => 'admin_coach_page_page_list',);
                            }

                            // admin_coach_page_page_create
                            if ($pathinfo === '/admin/coach/page/page/create') {
                                return array (  '_controller' => 'Coach\\PageBundle\\Controller\\PageAdminController::createAction',  '_sonata_admin' => 'coach_page.admin.page',  '_sonata_name' => 'admin_coach_page_page_create',  '_route' => 'admin_coach_page_page_create',);
                            }

                            // admin_coach_page_page_batch
                            if ($pathinfo === '/admin/coach/page/page/batch') {
                                return array (  '_controller' => 'Coach\\PageBundle\\Controller\\PageAdminController::batchAction',  '_sonata_admin' => 'coach_page.admin.page',  '_sonata_name' => 'admin_coach_page_page_batch',  '_route' => 'admin_coach_page_page_batch',);
                            }

                            // admin_coach_page_page_edit
                            if (preg_match('#^/admin/coach/page/page/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_page_page_edit')), array (  '_controller' => 'Coach\\PageBundle\\Controller\\PageAdminController::editAction',  '_sonata_admin' => 'coach_page.admin.page',  '_sonata_name' => 'admin_coach_page_page_edit',));
                            }

                            // admin_coach_page_page_delete
                            if (preg_match('#^/admin/coach/page/page/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_page_page_delete')), array (  '_controller' => 'Coach\\PageBundle\\Controller\\PageAdminController::deleteAction',  '_sonata_admin' => 'coach_page.admin.page',  '_sonata_name' => 'admin_coach_page_page_delete',));
                            }

                            // admin_coach_page_page_show
                            if (preg_match('#^/admin/coach/page/page/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_page_page_show')), array (  '_controller' => 'Coach\\PageBundle\\Controller\\PageAdminController::showAction',  '_sonata_admin' => 'coach_page.admin.page',  '_sonata_name' => 'admin_coach_page_page_show',));
                            }

                            // admin_coach_page_page_export
                            if ($pathinfo === '/admin/coach/page/page/export') {
                                return array (  '_controller' => 'Coach\\PageBundle\\Controller\\PageAdminController::exportAction',  '_sonata_admin' => 'coach_page.admin.page',  '_sonata_name' => 'admin_coach_page_page_export',  '_route' => 'admin_coach_page_page_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/coach/page/menu')) {
                            // admin_coach_page_menu_list
                            if ($pathinfo === '/admin/coach/page/menu/list') {
                                return array (  '_controller' => 'Coach\\PageBundle\\Controller\\MenuAdminController::listAction',  '_sonata_admin' => 'coach_page.admin.menu',  '_sonata_name' => 'admin_coach_page_menu_list',  '_route' => 'admin_coach_page_menu_list',);
                            }

                            // admin_coach_page_menu_create
                            if ($pathinfo === '/admin/coach/page/menu/create') {
                                return array (  '_controller' => 'Coach\\PageBundle\\Controller\\MenuAdminController::createAction',  '_sonata_admin' => 'coach_page.admin.menu',  '_sonata_name' => 'admin_coach_page_menu_create',  '_route' => 'admin_coach_page_menu_create',);
                            }

                            // admin_coach_page_menu_batch
                            if ($pathinfo === '/admin/coach/page/menu/batch') {
                                return array (  '_controller' => 'Coach\\PageBundle\\Controller\\MenuAdminController::batchAction',  '_sonata_admin' => 'coach_page.admin.menu',  '_sonata_name' => 'admin_coach_page_menu_batch',  '_route' => 'admin_coach_page_menu_batch',);
                            }

                            // admin_coach_page_menu_edit
                            if (preg_match('#^/admin/coach/page/menu/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_page_menu_edit')), array (  '_controller' => 'Coach\\PageBundle\\Controller\\MenuAdminController::editAction',  '_sonata_admin' => 'coach_page.admin.menu',  '_sonata_name' => 'admin_coach_page_menu_edit',));
                            }

                            // admin_coach_page_menu_delete
                            if (preg_match('#^/admin/coach/page/menu/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_page_menu_delete')), array (  '_controller' => 'Coach\\PageBundle\\Controller\\MenuAdminController::deleteAction',  '_sonata_admin' => 'coach_page.admin.menu',  '_sonata_name' => 'admin_coach_page_menu_delete',));
                            }

                            // admin_coach_page_menu_show
                            if (preg_match('#^/admin/coach/page/menu/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_page_menu_show')), array (  '_controller' => 'Coach\\PageBundle\\Controller\\MenuAdminController::showAction',  '_sonata_admin' => 'coach_page.admin.menu',  '_sonata_name' => 'admin_coach_page_menu_show',));
                            }

                            // admin_coach_page_menu_export
                            if ($pathinfo === '/admin/coach/page/menu/export') {
                                return array (  '_controller' => 'Coach\\PageBundle\\Controller\\MenuAdminController::exportAction',  '_sonata_admin' => 'coach_page.admin.menu',  '_sonata_name' => 'admin_coach_page_menu_export',  '_route' => 'admin_coach_page_menu_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/coach/page/titrepage')) {
                            // admin_coach_page_titrepage_list
                            if ($pathinfo === '/admin/coach/page/titrepage/list') {
                                return array (  '_controller' => 'Coach\\PageBundle\\Controller\\TitrePageAdminController::listAction',  '_sonata_admin' => 'coach_page.admin.titre_page',  '_sonata_name' => 'admin_coach_page_titrepage_list',  '_route' => 'admin_coach_page_titrepage_list',);
                            }

                            // admin_coach_page_titrepage_create
                            if ($pathinfo === '/admin/coach/page/titrepage/create') {
                                return array (  '_controller' => 'Coach\\PageBundle\\Controller\\TitrePageAdminController::createAction',  '_sonata_admin' => 'coach_page.admin.titre_page',  '_sonata_name' => 'admin_coach_page_titrepage_create',  '_route' => 'admin_coach_page_titrepage_create',);
                            }

                            // admin_coach_page_titrepage_batch
                            if ($pathinfo === '/admin/coach/page/titrepage/batch') {
                                return array (  '_controller' => 'Coach\\PageBundle\\Controller\\TitrePageAdminController::batchAction',  '_sonata_admin' => 'coach_page.admin.titre_page',  '_sonata_name' => 'admin_coach_page_titrepage_batch',  '_route' => 'admin_coach_page_titrepage_batch',);
                            }

                            // admin_coach_page_titrepage_edit
                            if (preg_match('#^/admin/coach/page/titrepage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_page_titrepage_edit')), array (  '_controller' => 'Coach\\PageBundle\\Controller\\TitrePageAdminController::editAction',  '_sonata_admin' => 'coach_page.admin.titre_page',  '_sonata_name' => 'admin_coach_page_titrepage_edit',));
                            }

                            // admin_coach_page_titrepage_delete
                            if (preg_match('#^/admin/coach/page/titrepage/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_page_titrepage_delete')), array (  '_controller' => 'Coach\\PageBundle\\Controller\\TitrePageAdminController::deleteAction',  '_sonata_admin' => 'coach_page.admin.titre_page',  '_sonata_name' => 'admin_coach_page_titrepage_delete',));
                            }

                            // admin_coach_page_titrepage_show
                            if (preg_match('#^/admin/coach/page/titrepage/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_page_titrepage_show')), array (  '_controller' => 'Coach\\PageBundle\\Controller\\TitrePageAdminController::showAction',  '_sonata_admin' => 'coach_page.admin.titre_page',  '_sonata_name' => 'admin_coach_page_titrepage_show',));
                            }

                            // admin_coach_page_titrepage_export
                            if ($pathinfo === '/admin/coach/page/titrepage/export') {
                                return array (  '_controller' => 'Coach\\PageBundle\\Controller\\TitrePageAdminController::exportAction',  '_sonata_admin' => 'coach_page.admin.titre_page',  '_sonata_name' => 'admin_coach_page_titrepage_export',  '_route' => 'admin_coach_page_titrepage_export',);
                            }

                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/coach/coaching/coaching')) {
                    // admin_coach_coaching_coaching_list
                    if ($pathinfo === '/admin/coach/coaching/coaching/list') {
                        return array (  '_controller' => 'Coach\\CoachingBundle\\Controller\\CoachingAdminController::listAction',  '_sonata_admin' => 'coach_coaching.admin.coaching',  '_sonata_name' => 'admin_coach_coaching_coaching_list',  '_route' => 'admin_coach_coaching_coaching_list',);
                    }

                    // admin_coach_coaching_coaching_create
                    if ($pathinfo === '/admin/coach/coaching/coaching/create') {
                        return array (  '_controller' => 'Coach\\CoachingBundle\\Controller\\CoachingAdminController::createAction',  '_sonata_admin' => 'coach_coaching.admin.coaching',  '_sonata_name' => 'admin_coach_coaching_coaching_create',  '_route' => 'admin_coach_coaching_coaching_create',);
                    }

                    // admin_coach_coaching_coaching_batch
                    if ($pathinfo === '/admin/coach/coaching/coaching/batch') {
                        return array (  '_controller' => 'Coach\\CoachingBundle\\Controller\\CoachingAdminController::batchAction',  '_sonata_admin' => 'coach_coaching.admin.coaching',  '_sonata_name' => 'admin_coach_coaching_coaching_batch',  '_route' => 'admin_coach_coaching_coaching_batch',);
                    }

                    // admin_coach_coaching_coaching_edit
                    if (preg_match('#^/admin/coach/coaching/coaching/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_coaching_coaching_edit')), array (  '_controller' => 'Coach\\CoachingBundle\\Controller\\CoachingAdminController::editAction',  '_sonata_admin' => 'coach_coaching.admin.coaching',  '_sonata_name' => 'admin_coach_coaching_coaching_edit',));
                    }

                    // admin_coach_coaching_coaching_delete
                    if (preg_match('#^/admin/coach/coaching/coaching/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_coaching_coaching_delete')), array (  '_controller' => 'Coach\\CoachingBundle\\Controller\\CoachingAdminController::deleteAction',  '_sonata_admin' => 'coach_coaching.admin.coaching',  '_sonata_name' => 'admin_coach_coaching_coaching_delete',));
                    }

                    // admin_coach_coaching_coaching_show
                    if (preg_match('#^/admin/coach/coaching/coaching/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_coaching_coaching_show')), array (  '_controller' => 'Coach\\CoachingBundle\\Controller\\CoachingAdminController::showAction',  '_sonata_admin' => 'coach_coaching.admin.coaching',  '_sonata_name' => 'admin_coach_coaching_coaching_show',));
                    }

                    // admin_coach_coaching_coaching_export
                    if ($pathinfo === '/admin/coach/coaching/coaching/export') {
                        return array (  '_controller' => 'Coach\\CoachingBundle\\Controller\\CoachingAdminController::exportAction',  '_sonata_admin' => 'coach_coaching.admin.coaching',  '_sonata_name' => 'admin_coach_coaching_coaching_export',  '_route' => 'admin_coach_coaching_coaching_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/coach/page')) {
                    if (0 === strpos($pathinfo, '/admin/coach/page/block')) {
                        if (0 === strpos($pathinfo, '/admin/coach/page/blocksocial')) {
                            // admin_coach_page_blocksocial_list
                            if ($pathinfo === '/admin/coach/page/blocksocial/list') {
                                return array (  '_controller' => 'Coach\\PageBundle\\Controller\\BlockSocialAdminController::listAction',  '_sonata_admin' => 'coach_page.admin.block_social',  '_sonata_name' => 'admin_coach_page_blocksocial_list',  '_route' => 'admin_coach_page_blocksocial_list',);
                            }

                            // admin_coach_page_blocksocial_create
                            if ($pathinfo === '/admin/coach/page/blocksocial/create') {
                                return array (  '_controller' => 'Coach\\PageBundle\\Controller\\BlockSocialAdminController::createAction',  '_sonata_admin' => 'coach_page.admin.block_social',  '_sonata_name' => 'admin_coach_page_blocksocial_create',  '_route' => 'admin_coach_page_blocksocial_create',);
                            }

                            // admin_coach_page_blocksocial_batch
                            if ($pathinfo === '/admin/coach/page/blocksocial/batch') {
                                return array (  '_controller' => 'Coach\\PageBundle\\Controller\\BlockSocialAdminController::batchAction',  '_sonata_admin' => 'coach_page.admin.block_social',  '_sonata_name' => 'admin_coach_page_blocksocial_batch',  '_route' => 'admin_coach_page_blocksocial_batch',);
                            }

                            // admin_coach_page_blocksocial_edit
                            if (preg_match('#^/admin/coach/page/blocksocial/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_page_blocksocial_edit')), array (  '_controller' => 'Coach\\PageBundle\\Controller\\BlockSocialAdminController::editAction',  '_sonata_admin' => 'coach_page.admin.block_social',  '_sonata_name' => 'admin_coach_page_blocksocial_edit',));
                            }

                            // admin_coach_page_blocksocial_delete
                            if (preg_match('#^/admin/coach/page/blocksocial/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_page_blocksocial_delete')), array (  '_controller' => 'Coach\\PageBundle\\Controller\\BlockSocialAdminController::deleteAction',  '_sonata_admin' => 'coach_page.admin.block_social',  '_sonata_name' => 'admin_coach_page_blocksocial_delete',));
                            }

                            // admin_coach_page_blocksocial_show
                            if (preg_match('#^/admin/coach/page/blocksocial/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_page_blocksocial_show')), array (  '_controller' => 'Coach\\PageBundle\\Controller\\BlockSocialAdminController::showAction',  '_sonata_admin' => 'coach_page.admin.block_social',  '_sonata_name' => 'admin_coach_page_blocksocial_show',));
                            }

                            // admin_coach_page_blocksocial_export
                            if ($pathinfo === '/admin/coach/page/blocksocial/export') {
                                return array (  '_controller' => 'Coach\\PageBundle\\Controller\\BlockSocialAdminController::exportAction',  '_sonata_admin' => 'coach_page.admin.block_social',  '_sonata_name' => 'admin_coach_page_blocksocial_export',  '_route' => 'admin_coach_page_blocksocial_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/coach/page/blockvideo')) {
                            // admin_coach_page_blockvideo_list
                            if ($pathinfo === '/admin/coach/page/blockvideo/list') {
                                return array (  '_controller' => 'Coach\\PageBundle\\Controller\\BlockVideoAdminController::listAction',  '_sonata_admin' => 'coach_page.admin.block_video',  '_sonata_name' => 'admin_coach_page_blockvideo_list',  '_route' => 'admin_coach_page_blockvideo_list',);
                            }

                            // admin_coach_page_blockvideo_create
                            if ($pathinfo === '/admin/coach/page/blockvideo/create') {
                                return array (  '_controller' => 'Coach\\PageBundle\\Controller\\BlockVideoAdminController::createAction',  '_sonata_admin' => 'coach_page.admin.block_video',  '_sonata_name' => 'admin_coach_page_blockvideo_create',  '_route' => 'admin_coach_page_blockvideo_create',);
                            }

                            // admin_coach_page_blockvideo_batch
                            if ($pathinfo === '/admin/coach/page/blockvideo/batch') {
                                return array (  '_controller' => 'Coach\\PageBundle\\Controller\\BlockVideoAdminController::batchAction',  '_sonata_admin' => 'coach_page.admin.block_video',  '_sonata_name' => 'admin_coach_page_blockvideo_batch',  '_route' => 'admin_coach_page_blockvideo_batch',);
                            }

                            // admin_coach_page_blockvideo_edit
                            if (preg_match('#^/admin/coach/page/blockvideo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_page_blockvideo_edit')), array (  '_controller' => 'Coach\\PageBundle\\Controller\\BlockVideoAdminController::editAction',  '_sonata_admin' => 'coach_page.admin.block_video',  '_sonata_name' => 'admin_coach_page_blockvideo_edit',));
                            }

                            // admin_coach_page_blockvideo_delete
                            if (preg_match('#^/admin/coach/page/blockvideo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_page_blockvideo_delete')), array (  '_controller' => 'Coach\\PageBundle\\Controller\\BlockVideoAdminController::deleteAction',  '_sonata_admin' => 'coach_page.admin.block_video',  '_sonata_name' => 'admin_coach_page_blockvideo_delete',));
                            }

                            // admin_coach_page_blockvideo_show
                            if (preg_match('#^/admin/coach/page/blockvideo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_page_blockvideo_show')), array (  '_controller' => 'Coach\\PageBundle\\Controller\\BlockVideoAdminController::showAction',  '_sonata_admin' => 'coach_page.admin.block_video',  '_sonata_name' => 'admin_coach_page_blockvideo_show',));
                            }

                            // admin_coach_page_blockvideo_export
                            if ($pathinfo === '/admin/coach/page/blockvideo/export') {
                                return array (  '_controller' => 'Coach\\PageBundle\\Controller\\BlockVideoAdminController::exportAction',  '_sonata_admin' => 'coach_page.admin.block_video',  '_sonata_name' => 'admin_coach_page_blockvideo_export',  '_route' => 'admin_coach_page_blockvideo_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/coach/page/blocktext')) {
                            // admin_coach_page_blocktext_list
                            if ($pathinfo === '/admin/coach/page/blocktext/list') {
                                return array (  '_controller' => 'Coach\\PageBundle\\Controller\\BlockTextAdminController::listAction',  '_sonata_admin' => 'coach_page.admin.block_text',  '_sonata_name' => 'admin_coach_page_blocktext_list',  '_route' => 'admin_coach_page_blocktext_list',);
                            }

                            // admin_coach_page_blocktext_create
                            if ($pathinfo === '/admin/coach/page/blocktext/create') {
                                return array (  '_controller' => 'Coach\\PageBundle\\Controller\\BlockTextAdminController::createAction',  '_sonata_admin' => 'coach_page.admin.block_text',  '_sonata_name' => 'admin_coach_page_blocktext_create',  '_route' => 'admin_coach_page_blocktext_create',);
                            }

                            // admin_coach_page_blocktext_batch
                            if ($pathinfo === '/admin/coach/page/blocktext/batch') {
                                return array (  '_controller' => 'Coach\\PageBundle\\Controller\\BlockTextAdminController::batchAction',  '_sonata_admin' => 'coach_page.admin.block_text',  '_sonata_name' => 'admin_coach_page_blocktext_batch',  '_route' => 'admin_coach_page_blocktext_batch',);
                            }

                            // admin_coach_page_blocktext_edit
                            if (preg_match('#^/admin/coach/page/blocktext/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_page_blocktext_edit')), array (  '_controller' => 'Coach\\PageBundle\\Controller\\BlockTextAdminController::editAction',  '_sonata_admin' => 'coach_page.admin.block_text',  '_sonata_name' => 'admin_coach_page_blocktext_edit',));
                            }

                            // admin_coach_page_blocktext_delete
                            if (preg_match('#^/admin/coach/page/blocktext/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_page_blocktext_delete')), array (  '_controller' => 'Coach\\PageBundle\\Controller\\BlockTextAdminController::deleteAction',  '_sonata_admin' => 'coach_page.admin.block_text',  '_sonata_name' => 'admin_coach_page_blocktext_delete',));
                            }

                            // admin_coach_page_blocktext_show
                            if (preg_match('#^/admin/coach/page/blocktext/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_page_blocktext_show')), array (  '_controller' => 'Coach\\PageBundle\\Controller\\BlockTextAdminController::showAction',  '_sonata_admin' => 'coach_page.admin.block_text',  '_sonata_name' => 'admin_coach_page_blocktext_show',));
                            }

                            // admin_coach_page_blocktext_export
                            if ($pathinfo === '/admin/coach/page/blocktext/export') {
                                return array (  '_controller' => 'Coach\\PageBundle\\Controller\\BlockTextAdminController::exportAction',  '_sonata_admin' => 'coach_page.admin.block_text',  '_sonata_name' => 'admin_coach_page_blocktext_export',  '_route' => 'admin_coach_page_blocktext_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/coach/page/blocklienmiddle')) {
                            // admin_coach_page_blocklienmiddle_list
                            if ($pathinfo === '/admin/coach/page/blocklienmiddle/list') {
                                return array (  '_controller' => 'Coach\\PageBundle\\Controller\\BlockLienMiddleAdminController::listAction',  '_sonata_admin' => 'coach_page.admin.block_lienmiddle',  '_sonata_name' => 'admin_coach_page_blocklienmiddle_list',  '_route' => 'admin_coach_page_blocklienmiddle_list',);
                            }

                            // admin_coach_page_blocklienmiddle_create
                            if ($pathinfo === '/admin/coach/page/blocklienmiddle/create') {
                                return array (  '_controller' => 'Coach\\PageBundle\\Controller\\BlockLienMiddleAdminController::createAction',  '_sonata_admin' => 'coach_page.admin.block_lienmiddle',  '_sonata_name' => 'admin_coach_page_blocklienmiddle_create',  '_route' => 'admin_coach_page_blocklienmiddle_create',);
                            }

                            // admin_coach_page_blocklienmiddle_batch
                            if ($pathinfo === '/admin/coach/page/blocklienmiddle/batch') {
                                return array (  '_controller' => 'Coach\\PageBundle\\Controller\\BlockLienMiddleAdminController::batchAction',  '_sonata_admin' => 'coach_page.admin.block_lienmiddle',  '_sonata_name' => 'admin_coach_page_blocklienmiddle_batch',  '_route' => 'admin_coach_page_blocklienmiddle_batch',);
                            }

                            // admin_coach_page_blocklienmiddle_edit
                            if (preg_match('#^/admin/coach/page/blocklienmiddle/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_page_blocklienmiddle_edit')), array (  '_controller' => 'Coach\\PageBundle\\Controller\\BlockLienMiddleAdminController::editAction',  '_sonata_admin' => 'coach_page.admin.block_lienmiddle',  '_sonata_name' => 'admin_coach_page_blocklienmiddle_edit',));
                            }

                            // admin_coach_page_blocklienmiddle_delete
                            if (preg_match('#^/admin/coach/page/blocklienmiddle/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_page_blocklienmiddle_delete')), array (  '_controller' => 'Coach\\PageBundle\\Controller\\BlockLienMiddleAdminController::deleteAction',  '_sonata_admin' => 'coach_page.admin.block_lienmiddle',  '_sonata_name' => 'admin_coach_page_blocklienmiddle_delete',));
                            }

                            // admin_coach_page_blocklienmiddle_show
                            if (preg_match('#^/admin/coach/page/blocklienmiddle/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_page_blocklienmiddle_show')), array (  '_controller' => 'Coach\\PageBundle\\Controller\\BlockLienMiddleAdminController::showAction',  '_sonata_admin' => 'coach_page.admin.block_lienmiddle',  '_sonata_name' => 'admin_coach_page_blocklienmiddle_show',));
                            }

                            // admin_coach_page_blocklienmiddle_export
                            if ($pathinfo === '/admin/coach/page/blocklienmiddle/export') {
                                return array (  '_controller' => 'Coach\\PageBundle\\Controller\\BlockLienMiddleAdminController::exportAction',  '_sonata_admin' => 'coach_page.admin.block_lienmiddle',  '_sonata_name' => 'admin_coach_page_blocklienmiddle_export',  '_route' => 'admin_coach_page_blocklienmiddle_export',);
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/coach/page/email')) {
                        // admin_coach_page_email_list
                        if ($pathinfo === '/admin/coach/page/email/list') {
                            return array (  '_controller' => 'Coach\\PageBundle\\Controller\\EmailAdminController::listAction',  '_sonata_admin' => 'coach_page.admin.email',  '_sonata_name' => 'admin_coach_page_email_list',  '_route' => 'admin_coach_page_email_list',);
                        }

                        // admin_coach_page_email_create
                        if ($pathinfo === '/admin/coach/page/email/create') {
                            return array (  '_controller' => 'Coach\\PageBundle\\Controller\\EmailAdminController::createAction',  '_sonata_admin' => 'coach_page.admin.email',  '_sonata_name' => 'admin_coach_page_email_create',  '_route' => 'admin_coach_page_email_create',);
                        }

                        // admin_coach_page_email_batch
                        if ($pathinfo === '/admin/coach/page/email/batch') {
                            return array (  '_controller' => 'Coach\\PageBundle\\Controller\\EmailAdminController::batchAction',  '_sonata_admin' => 'coach_page.admin.email',  '_sonata_name' => 'admin_coach_page_email_batch',  '_route' => 'admin_coach_page_email_batch',);
                        }

                        // admin_coach_page_email_edit
                        if (preg_match('#^/admin/coach/page/email/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_page_email_edit')), array (  '_controller' => 'Coach\\PageBundle\\Controller\\EmailAdminController::editAction',  '_sonata_admin' => 'coach_page.admin.email',  '_sonata_name' => 'admin_coach_page_email_edit',));
                        }

                        // admin_coach_page_email_delete
                        if (preg_match('#^/admin/coach/page/email/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_page_email_delete')), array (  '_controller' => 'Coach\\PageBundle\\Controller\\EmailAdminController::deleteAction',  '_sonata_admin' => 'coach_page.admin.email',  '_sonata_name' => 'admin_coach_page_email_delete',));
                        }

                        // admin_coach_page_email_show
                        if (preg_match('#^/admin/coach/page/email/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_page_email_show')), array (  '_controller' => 'Coach\\PageBundle\\Controller\\EmailAdminController::showAction',  '_sonata_admin' => 'coach_page.admin.email',  '_sonata_name' => 'admin_coach_page_email_show',));
                        }

                        // admin_coach_page_email_export
                        if ($pathinfo === '/admin/coach/page/email/export') {
                            return array (  '_controller' => 'Coach\\PageBundle\\Controller\\EmailAdminController::exportAction',  '_sonata_admin' => 'coach_page.admin.email',  '_sonata_name' => 'admin_coach_page_email_export',  '_route' => 'admin_coach_page_email_export',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/sonata/user/contact')) {
                // admin_sonata_user_contact_list
                if ($pathinfo === '/admin/sonata/user/contact/list') {
                    return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\ContactAdminController::listAction',  '_sonata_admin' => 'application_sonata_user.admin.contact',  '_sonata_name' => 'admin_sonata_user_contact_list',  '_route' => 'admin_sonata_user_contact_list',);
                }

                // admin_sonata_user_contact_create
                if ($pathinfo === '/admin/sonata/user/contact/create') {
                    return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\ContactAdminController::createAction',  '_sonata_admin' => 'application_sonata_user.admin.contact',  '_sonata_name' => 'admin_sonata_user_contact_create',  '_route' => 'admin_sonata_user_contact_create',);
                }

                // admin_sonata_user_contact_batch
                if ($pathinfo === '/admin/sonata/user/contact/batch') {
                    return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\ContactAdminController::batchAction',  '_sonata_admin' => 'application_sonata_user.admin.contact',  '_sonata_name' => 'admin_sonata_user_contact_batch',  '_route' => 'admin_sonata_user_contact_batch',);
                }

                // admin_sonata_user_contact_edit
                if (preg_match('#^/admin/sonata/user/contact/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_contact_edit')), array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\ContactAdminController::editAction',  '_sonata_admin' => 'application_sonata_user.admin.contact',  '_sonata_name' => 'admin_sonata_user_contact_edit',));
                }

                // admin_sonata_user_contact_delete
                if (preg_match('#^/admin/sonata/user/contact/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_contact_delete')), array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\ContactAdminController::deleteAction',  '_sonata_admin' => 'application_sonata_user.admin.contact',  '_sonata_name' => 'admin_sonata_user_contact_delete',));
                }

                // admin_sonata_user_contact_show
                if (preg_match('#^/admin/sonata/user/contact/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_contact_show')), array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\ContactAdminController::showAction',  '_sonata_admin' => 'application_sonata_user.admin.contact',  '_sonata_name' => 'admin_sonata_user_contact_show',));
                }

                // admin_sonata_user_contact_export
                if ($pathinfo === '/admin/sonata/user/contact/export') {
                    return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\ContactAdminController::exportAction',  '_sonata_admin' => 'application_sonata_user.admin.contact',  '_sonata_name' => 'admin_sonata_user_contact_export',  '_route' => 'admin_sonata_user_contact_export',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/coach')) {
                if (0 === strpos($pathinfo, '/admin/coach/panneau/panneau')) {
                    // admin_coach_panneau_panneau_list
                    if ($pathinfo === '/admin/coach/panneau/panneau/list') {
                        return array (  '_controller' => 'Coach\\PanneauBundle\\Controller\\PanneauAdminController::listAction',  '_sonata_admin' => 'coach_panneau.admin.panneau',  '_sonata_name' => 'admin_coach_panneau_panneau_list',  '_route' => 'admin_coach_panneau_panneau_list',);
                    }

                    // admin_coach_panneau_panneau_create
                    if ($pathinfo === '/admin/coach/panneau/panneau/create') {
                        return array (  '_controller' => 'Coach\\PanneauBundle\\Controller\\PanneauAdminController::createAction',  '_sonata_admin' => 'coach_panneau.admin.panneau',  '_sonata_name' => 'admin_coach_panneau_panneau_create',  '_route' => 'admin_coach_panneau_panneau_create',);
                    }

                    // admin_coach_panneau_panneau_batch
                    if ($pathinfo === '/admin/coach/panneau/panneau/batch') {
                        return array (  '_controller' => 'Coach\\PanneauBundle\\Controller\\PanneauAdminController::batchAction',  '_sonata_admin' => 'coach_panneau.admin.panneau',  '_sonata_name' => 'admin_coach_panneau_panneau_batch',  '_route' => 'admin_coach_panneau_panneau_batch',);
                    }

                    // admin_coach_panneau_panneau_edit
                    if (preg_match('#^/admin/coach/panneau/panneau/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_panneau_panneau_edit')), array (  '_controller' => 'Coach\\PanneauBundle\\Controller\\PanneauAdminController::editAction',  '_sonata_admin' => 'coach_panneau.admin.panneau',  '_sonata_name' => 'admin_coach_panneau_panneau_edit',));
                    }

                    // admin_coach_panneau_panneau_delete
                    if (preg_match('#^/admin/coach/panneau/panneau/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_panneau_panneau_delete')), array (  '_controller' => 'Coach\\PanneauBundle\\Controller\\PanneauAdminController::deleteAction',  '_sonata_admin' => 'coach_panneau.admin.panneau',  '_sonata_name' => 'admin_coach_panneau_panneau_delete',));
                    }

                    // admin_coach_panneau_panneau_show
                    if (preg_match('#^/admin/coach/panneau/panneau/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_panneau_panneau_show')), array (  '_controller' => 'Coach\\PanneauBundle\\Controller\\PanneauAdminController::showAction',  '_sonata_admin' => 'coach_panneau.admin.panneau',  '_sonata_name' => 'admin_coach_panneau_panneau_show',));
                    }

                    // admin_coach_panneau_panneau_export
                    if ($pathinfo === '/admin/coach/panneau/panneau/export') {
                        return array (  '_controller' => 'Coach\\PanneauBundle\\Controller\\PanneauAdminController::exportAction',  '_sonata_admin' => 'coach_panneau.admin.panneau',  '_sonata_name' => 'admin_coach_panneau_panneau_export',  '_route' => 'admin_coach_panneau_panneau_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/coach/reservation/reservation')) {
                    // admin_coach_reservation_reservation_list
                    if ($pathinfo === '/admin/coach/reservation/reservation/list') {
                        return array (  '_controller' => 'Coach\\ReservationBundle\\Controller\\ReservationAdminController::listAction',  '_sonata_admin' => 'coach_reservation.admin.reservation',  '_sonata_name' => 'admin_coach_reservation_reservation_list',  '_route' => 'admin_coach_reservation_reservation_list',);
                    }

                    // admin_coach_reservation_reservation_create
                    if ($pathinfo === '/admin/coach/reservation/reservation/create') {
                        return array (  '_controller' => 'Coach\\ReservationBundle\\Controller\\ReservationAdminController::createAction',  '_sonata_admin' => 'coach_reservation.admin.reservation',  '_sonata_name' => 'admin_coach_reservation_reservation_create',  '_route' => 'admin_coach_reservation_reservation_create',);
                    }

                    // admin_coach_reservation_reservation_batch
                    if ($pathinfo === '/admin/coach/reservation/reservation/batch') {
                        return array (  '_controller' => 'Coach\\ReservationBundle\\Controller\\ReservationAdminController::batchAction',  '_sonata_admin' => 'coach_reservation.admin.reservation',  '_sonata_name' => 'admin_coach_reservation_reservation_batch',  '_route' => 'admin_coach_reservation_reservation_batch',);
                    }

                    // admin_coach_reservation_reservation_edit
                    if (preg_match('#^/admin/coach/reservation/reservation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_reservation_reservation_edit')), array (  '_controller' => 'Coach\\ReservationBundle\\Controller\\ReservationAdminController::editAction',  '_sonata_admin' => 'coach_reservation.admin.reservation',  '_sonata_name' => 'admin_coach_reservation_reservation_edit',));
                    }

                    // admin_coach_reservation_reservation_delete
                    if (preg_match('#^/admin/coach/reservation/reservation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_reservation_reservation_delete')), array (  '_controller' => 'Coach\\ReservationBundle\\Controller\\ReservationAdminController::deleteAction',  '_sonata_admin' => 'coach_reservation.admin.reservation',  '_sonata_name' => 'admin_coach_reservation_reservation_delete',));
                    }

                    // admin_coach_reservation_reservation_show
                    if (preg_match('#^/admin/coach/reservation/reservation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_reservation_reservation_show')), array (  '_controller' => 'Coach\\ReservationBundle\\Controller\\ReservationAdminController::showAction',  '_sonata_admin' => 'coach_reservation.admin.reservation',  '_sonata_name' => 'admin_coach_reservation_reservation_show',));
                    }

                    // admin_coach_reservation_reservation_export
                    if ($pathinfo === '/admin/coach/reservation/reservation/export') {
                        return array (  '_controller' => 'Coach\\ReservationBundle\\Controller\\ReservationAdminController::exportAction',  '_sonata_admin' => 'coach_reservation.admin.reservation',  '_sonata_name' => 'admin_coach_reservation_reservation_export',  '_route' => 'admin_coach_reservation_reservation_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/coach/conseils/conseil')) {
                    // admin_coach_conseils_conseil_list
                    if ($pathinfo === '/admin/coach/conseils/conseil/list') {
                        return array (  '_controller' => 'Coach\\ConseilsBundle\\Controller\\ConseilAdminController::listAction',  '_sonata_admin' => 'coach_conseils.admin.conseil',  '_sonata_name' => 'admin_coach_conseils_conseil_list',  '_route' => 'admin_coach_conseils_conseil_list',);
                    }

                    // admin_coach_conseils_conseil_create
                    if ($pathinfo === '/admin/coach/conseils/conseil/create') {
                        return array (  '_controller' => 'Coach\\ConseilsBundle\\Controller\\ConseilAdminController::createAction',  '_sonata_admin' => 'coach_conseils.admin.conseil',  '_sonata_name' => 'admin_coach_conseils_conseil_create',  '_route' => 'admin_coach_conseils_conseil_create',);
                    }

                    // admin_coach_conseils_conseil_batch
                    if ($pathinfo === '/admin/coach/conseils/conseil/batch') {
                        return array (  '_controller' => 'Coach\\ConseilsBundle\\Controller\\ConseilAdminController::batchAction',  '_sonata_admin' => 'coach_conseils.admin.conseil',  '_sonata_name' => 'admin_coach_conseils_conseil_batch',  '_route' => 'admin_coach_conseils_conseil_batch',);
                    }

                    // admin_coach_conseils_conseil_edit
                    if (preg_match('#^/admin/coach/conseils/conseil/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_conseils_conseil_edit')), array (  '_controller' => 'Coach\\ConseilsBundle\\Controller\\ConseilAdminController::editAction',  '_sonata_admin' => 'coach_conseils.admin.conseil',  '_sonata_name' => 'admin_coach_conseils_conseil_edit',));
                    }

                    // admin_coach_conseils_conseil_delete
                    if (preg_match('#^/admin/coach/conseils/conseil/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_conseils_conseil_delete')), array (  '_controller' => 'Coach\\ConseilsBundle\\Controller\\ConseilAdminController::deleteAction',  '_sonata_admin' => 'coach_conseils.admin.conseil',  '_sonata_name' => 'admin_coach_conseils_conseil_delete',));
                    }

                    // admin_coach_conseils_conseil_show
                    if (preg_match('#^/admin/coach/conseils/conseil/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_coach_conseils_conseil_show')), array (  '_controller' => 'Coach\\ConseilsBundle\\Controller\\ConseilAdminController::showAction',  '_sonata_admin' => 'coach_conseils.admin.conseil',  '_sonata_name' => 'admin_coach_conseils_conseil_show',));
                    }

                    // admin_coach_conseils_conseil_export
                    if ($pathinfo === '/admin/coach/conseils/conseil/export') {
                        return array (  '_controller' => 'Coach\\ConseilsBundle\\Controller\\ConseilAdminController::exportAction',  '_sonata_admin' => 'coach_conseils.admin.conseil',  '_sonata_name' => 'admin_coach_conseils_conseil_export',  '_route' => 'admin_coach_conseils_conseil_export',);
                    }

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

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

            if (0 === strpos($pathinfo, '/login')) {
                // sonata_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::loginAction',  '_route' => 'sonata_user_security_login',);
                }

                // sonata_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_sonata_user_security_check;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::checkAction',  '_route' => 'sonata_user_security_check',);
                }
                not_sonata_user_security_check:

            }

            // sonata_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::logoutAction',  '_route' => 'sonata_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            if (0 === strpos($pathinfo, '/resetting/re')) {
                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::resetAction',));
                }
                not_fos_user_resetting_reset:

                // sonata_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sonata_user_resetting_request;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::requestAction',  '_route' => 'sonata_user_resetting_request',);
                }
                not_sonata_user_resetting_request:

            }

            // sonata_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_sonata_user_resetting_send_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::sendEmailAction',  '_route' => 'sonata_user_resetting_send_email',);
            }
            not_sonata_user_resetting_send_email:

            // sonata_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sonata_user_resetting_check_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::checkEmailAction',  '_route' => 'sonata_user_resetting_check_email',);
            }
            not_sonata_user_resetting_check_email:

            // sonata_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_sonata_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_user_resetting_reset')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::resetAction',));
            }
            not_sonata_user_resetting_reset:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            if (0 === strpos($pathinfo, '/profile/edit-')) {
                // fos_user_profile_edit_authentication
                if ($pathinfo === '/profile/edit-authentication') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editAuthenticationAction',  '_route' => 'fos_user_profile_edit_authentication',);
                }

                // fos_user_profile_edit
                if ($pathinfo === '/profile/edit-profile') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editProfileAction',  '_route' => 'fos_user_profile_edit',);
                }

            }

            // sonata_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sonata_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_user_profile_show');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::showAction',  '_route' => 'sonata_user_profile_show',);
            }
            not_sonata_user_profile_show:

            if (0 === strpos($pathinfo, '/profile/edit-')) {
                // sonata_user_profile_edit_authentication
                if ($pathinfo === '/profile/edit-authentication') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editAuthenticationAction',  '_route' => 'sonata_user_profile_edit_authentication',);
                }

                // sonata_user_profile_edit
                if ($pathinfo === '/profile/edit-profile') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editProfileAction',  '_route' => 'sonata_user_profile_edit',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            if (0 === strpos($pathinfo, '/register/c')) {
                // fos_user_registration_check_email
                if ($pathinfo === '/register/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ($pathinfo === '/register/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            // sonata_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_user_registration_register');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::registerAction',  '_route' => 'sonata_user_registration_register',);
            }

            if (0 === strpos($pathinfo, '/register/c')) {
                // sonata_user_registration_check_email
                if ($pathinfo === '/register/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sonata_user_registration_check_email;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::checkEmailAction',  '_route' => 'sonata_user_registration_check_email',);
                }
                not_sonata_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // sonata_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sonata_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_user_registration_confirm')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmAction',));
                    }
                    not_sonata_user_registration_confirm:

                    // sonata_user_registration_confirmed
                    if ($pathinfo === '/register/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sonata_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmedAction',  '_route' => 'sonata_user_registration_confirmed',);
                    }
                    not_sonata_user_registration_confirmed:

                }

            }

        }

        if (0 === strpos($pathinfo, '/profile/change-password')) {
            // fos_user_change_password
            if ($pathinfo === '/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ChangePasswordFOSUser1Controller::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

            // sonata_user_change_password
            if ($pathinfo === '/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_sonata_user_change_password;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ChangePasswordFOSUser1Controller::changePasswordAction',  '_route' => 'sonata_user_change_password',);
            }
            not_sonata_user_change_password:

        }

        if (0 === strpos($pathinfo, '/media')) {
            if (0 === strpos($pathinfo, '/media/gallery')) {
                // sonata_media_gallery_index
                if (rtrim($pathinfo, '/') === '/media/gallery') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sonata_media_gallery_index');
                    }

                    return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::indexAction',  '_route' => 'sonata_media_gallery_index',);
                }

                // sonata_media_gallery_view
                if (0 === strpos($pathinfo, '/media/gallery/view') && preg_match('#^/media/gallery/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_gallery_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::viewAction',));
                }

            }

            // sonata_media_view
            if (0 === strpos($pathinfo, '/media/view') && preg_match('#^/media/view/(?P<id>[^/]++)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::viewAction',  'format' => 'reference',));
            }

            // sonata_media_download
            if (0 === strpos($pathinfo, '/media/download') && preg_match('#^/media/download/(?P<id>[^/]++)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_download')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::downloadAction',  'format' => 'reference',));
            }

        }

        // gregwar_captcha.generate_captcha
        if (0 === strpos($pathinfo, '/_gcb/generate-captcha') && preg_match('#^/_gcb/generate\\-captcha/(?P<key>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gregwar_captcha.generate_captcha')), array (  '_controller' => 'Gregwar\\CaptchaBundle\\Controller\\CaptchaController::generateCaptchaAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
