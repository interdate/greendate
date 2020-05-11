<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
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
            if (0 === strpos($pathinfo, '/admin/content')) {
                // admin_content
                if ($pathinfo === '/admin/content') {
                    return array (  '_controller' => 'AppBundle\\Controller\\Backend\\ContentController::indexAction',  '_route' => 'admin_content',);
                }

                if (0 === strpos($pathinfo, '/admin/content/page')) {
                    // admin_content_page
                    if ($pathinfo === '/admin/content/page') {
                        return array (  '_controller' => 'AppBundle\\Controller\\Backend\\ContentController::pageAction',  '_route' => 'admin_content_page',);
                    }

                    // admin_content_page_edit
                    if (preg_match('#^/admin/content/page/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_content_page_edit')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\ContentController::editPageAction',));
                    }

                    // admin_content_set_page_property
                    if (preg_match('#^/admin/content/page/(?P<id>[^/]++)/(?P<property>[^/]++)/(?P<value>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_content_set_page_property')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\ContentController::setPagePropertyAction',));
                    }

                    // admin_content_page_delete
                    if (preg_match('#^/admin/content/page/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_content_page_delete')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\ContentController::deletePageAction',));
                    }

                }

                // admin_content_slide_edit
                if (0 === strpos($pathinfo, '/admin/content/slide') && preg_match('#^/admin/content/slide/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_content_slide_edit')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\ContentController::editSlideAction',));
                }

                // admin_content_homepage_block_edit
                if (0 === strpos($pathinfo, '/admin/content/homepage/block') && preg_match('#^/admin/content/homepage/block/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_content_homepage_block_edit')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\ContentController::editHomePageBlockAction',));
                }

                // admin_content_page_seo
                if ($pathinfo === '/admin/content/pages/seo') {
                    return array (  '_controller' => 'AppBundle\\Controller\\Backend\\ContentController::pageSeoAction',  '_route' => 'admin_content_page_seo',);
                }

                if (0 === strpos($pathinfo, '/admin/content/f')) {
                    // admin_content_footer_header_edit
                    if (0 === strpos($pathinfo, '/admin/content/footer/header') && preg_match('#^/admin/content/footer/header/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_content_footer_header_edit')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\ContentController::editFooterHeaderAction',));
                    }

                    if (0 === strpos($pathinfo, '/admin/content/faq')) {
                        if (0 === strpos($pathinfo, '/admin/content/faq/category')) {
                            // admin_content_faq_category
                            if ($pathinfo === '/admin/content/faq/category') {
                                return array (  '_controller' => 'AppBundle\\Controller\\Backend\\ContentController::faqCategoryAction',  '_route' => 'admin_content_faq_category',);
                            }

                            // admin_content_faq_category_edit
                            if (preg_match('#^/admin/content/faq/category(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_content_faq_category_edit')), array (  'id' => NULL,  '_controller' => 'AppBundle\\Controller\\Backend\\ContentController::editFaqCategoryAction',));
                            }

                            // admin_content_faq_category_set_property
                            if (preg_match('#^/admin/content/faq/category/(?P<id>[^/]++)/(?P<property>[^/]++)/(?P<value>[^/]++)$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_content_faq_category_set_property')), array (  'id' => NULL,  '_controller' => 'AppBundle\\Controller\\Backend\\ContentController::setFaqCategoryPropertyAction',));
                            }

                            // admin_content_faq_category_delete
                            if (preg_match('#^/admin/content/faq/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_content_faq_category_delete')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\ContentController::deleteFaqCategoryAction',));
                            }

                        }

                        // admin_content_faq
                        if ($pathinfo === '/admin/content/faq') {
                            return array (  '_controller' => 'AppBundle\\Controller\\Backend\\ContentController::faqAction',  '_route' => 'admin_content_faq',);
                        }

                        // admin_content_faq_edit
                        if (preg_match('#^/admin/content/faq/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_content_faq_edit')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\ContentController::editFaqAction',));
                        }

                        // admin_content_faq_delete
                        if (preg_match('#^/admin/content/faq/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_content_faq_delete')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\ContentController::deleteFaqAction',));
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/m')) {
                if (0 === strpos($pathinfo, '/admin/magazine')) {
                    // admin_magazine
                    if (0 === strpos($pathinfo, '/admin/magazine/list') && preg_match('#^/admin/magazine/list(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_magazine')), array (  'page' => 1,  '_controller' => 'AppBundle\\Controller\\Backend\\MagazineController::indexAction',));
                    }

                    if (0 === strpos($pathinfo, '/admin/magazine/article')) {
                        // admin_magazine_article
                        if ($pathinfo === '/admin/magazine/article') {
                            return array (  '_controller' => 'AppBundle\\Controller\\Backend\\MagazineController::articleAction',  '_route' => 'admin_magazine_article',);
                        }

                        // admin_magazine_article_edit
                        if (preg_match('#^/admin/magazine/article(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_magazine_article_edit')), array (  'id' => NULL,  '_controller' => 'AppBundle\\Controller\\Backend\\MagazineController::editArticleAction',));
                        }

                        // admin_magazine_set_article_property
                        if (preg_match('#^/admin/magazine/article/(?P<id>[^/]++)/(?P<property>[^/]++)/(?P<value>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_magazine_set_article_property')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\MagazineController::setArticlePropertyAction',));
                        }

                        // admin_magazine_articles_delete
                        if (preg_match('#^/admin/magazine/article/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_magazine_articles_delete')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\MagazineController::deleteArticleAction',));
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/messenger')) {
                    // admin_messenger
                    if (0 === strpos($pathinfo, '/admin/messenger/list') && preg_match('#^/admin/messenger/list(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_messenger')), array (  'page' => 1,  'userId' => NULL,  '_controller' => 'AppBundle\\Controller\\Backend\\MessengerController::indexAction',));
                    }

                    // admin_messenger_user
                    if (0 === strpos($pathinfo, '/admin/messenger/user') && preg_match('#^/admin/messenger/user(?:/(?P<userId>[^/]++)(?:/(?P<page>[^/]++))?)?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_messenger_user')), array (  'page' => 1,  'userId' => NULL,  '_controller' => 'AppBundle\\Controller\\Backend\\MessengerController::indexAction',));
                    }

                    // admin_messenger_messages_delete
                    if ($pathinfo === '/admin/messenger/messages/delete') {
                        return array (  '_controller' => 'AppBundle\\Controller\\Backend\\MessengerController::removeMessagesAction',  '_route' => 'admin_messenger_messages_delete',);
                    }

                }

            }

            // admin_settings
            if ($pathinfo === '/admin/settings') {
                return array (  '_controller' => 'AppBundle\\Controller\\Backend\\SettingsController::indexAction',  '_route' => 'admin_settings',);
            }

            // admin_users
            if (0 === strpos($pathinfo, '/admin/users/list') && preg_match('#^/admin/users/list(?:/(?P<filter>[^/]++)(?:/(?P<page>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users')), array (  'page' => 1,  'filter' => 'total',  '_controller' => 'AppBundle\\Controller\\Backend\\UsersController::indexAction',));
            }

            // admin_search_advanced
            if ($pathinfo === '/admin/search/advanced') {
                return array (  '_controller' => 'AppBundle\\Controller\\Backend\\UsersController::searchAction',  '_route' => 'admin_search_advanced',);
            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // admin_user_active
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/(?P<property>[^/]++)/(?P<value>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_active')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\UsersController::setPropertyAction',));
                }

                // admin_user_delete
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_delete')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\UsersController::deleteAction',));
                }

                if (0 === strpos($pathinfo, '/admin/users')) {
                    // admin_users_save_ban_reason
                    if ($pathinfo === '/admin/users/save/ban/reason') {
                        return array (  '_controller' => 'AppBundle\\Controller\\Backend\\UsersController::saveBanReasonAction',  '_route' => 'admin_users_save_ban_reason',);
                    }

                    // admin_users_edit_profile
                    if (0 === strpos($pathinfo, '/admin/users/edit/profile') && preg_match('#^/admin/users/edit/profile/(?P<id>[^/]++)(?:/(?P<tab>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_edit_profile')), array (  'tab' => 1,  '_controller' => 'AppBundle\\Controller\\Backend\\UsersController::editProfileAction',));
                    }

                    // admin_users_view_profile
                    if (0 === strpos($pathinfo, '/admin/users/view/profile') && preg_match('#^/admin/users/view/profile/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_view_profile')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\UsersController::viewProfileAction',));
                    }

                    if (0 === strpos($pathinfo, '/admin/users/user')) {
                        // admin_users_user_photos
                        if (preg_match('#^/admin/users/user/(?P<id>[^/]++)/photos$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_user_photos')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\UsersController::userPhotosAction',));
                        }

                        // admin_users_user_photos_photo_data
                        if (preg_match('#^/admin/users/user/(?P<id>[^/]++)/photos/photo/data$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_user_photos_photo_data')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\UsersController::photoDataAction',));
                        }

                        if (0 === strpos($pathinfo, '/admin/users/user/photos')) {
                            // admin_users_user_photos_property
                            if (preg_match('#^/admin/users/user/photos/(?P<id>[^/]++)/(?P<property>[^/]++)/(?P<value>[^/]++)$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_user_photos_property')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\UsersController::setPhotoPropertyAction',));
                            }

                            // admin_users_user_photo_delete
                            if (preg_match('#^/admin/users/user/photos/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_user_photo_delete')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\UsersController::deletePhotoAction',));
                            }

                        }

                        // admin_users_user_subscription
                        if (preg_match('#^/admin/users/user/(?P<id>[^/]++)/subscription$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_user_subscription')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\UsersController::userSubscriptionAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/users/photos/waiting')) {
                        // admin_users_photos_waiting
                        if ($pathinfo === '/admin/users/photos/waiting') {
                            return array (  '_controller' => 'AppBundle\\Controller\\Backend\\UsersController::waitingPhotosAction',  '_route' => 'admin_users_photos_waiting',);
                        }

                        // admin_users_photos_waiting_approve
                        if (preg_match('#^/admin/users/photos/waiting/(?P<id>[^/]++)/approve/(?P<state>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_photos_waiting_approve')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\UsersController::approvePhotoAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/users/reports')) {
                        // admin_users_reports_create
                        if ($pathinfo === '/admin/users/reports/create') {
                            return array (  '_controller' => 'AppBundle\\Controller\\Backend\\UsersController::createReportAction',  '_route' => 'admin_users_reports_create',);
                        }

                        // admin_users_reports
                        if ($pathinfo === '/admin/users/reports') {
                            return array (  '_controller' => 'AppBundle\\Controller\\Backend\\UsersController::reportsAction',  '_route' => 'admin_users_reports',);
                        }

                        // admin_users_reports_show_on_main_page
                        if (preg_match('#^/admin/users/reports/(?P<id>[^/]++)/show_on_main_page/(?P<state>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_reports_show_on_main_page')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\UsersController::showOnMainPageAction',));
                        }

                        // admin_users_reports_delete
                        if (preg_match('#^/admin/users/reports/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_reports_delete')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\UsersController::deleteReportAction',));
                        }

                    }

                    // admin_users_export
                    if ($pathinfo === '/admin/users/export') {
                        return array (  '_controller' => 'AppBundle\\Controller\\Backend\\UsersController::exportAction',  '_route' => 'admin_users_export',);
                    }

                    // admin_users_point
                    if (0 === strpos($pathinfo, '/admin/users/point') && preg_match('#^/admin/users/point/(?P<toAll>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_point')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\UsersController::givePointAction',));
                    }

                    // admin_users_login
                    if (0 === strpos($pathinfo, '/admin/users/login') && preg_match('#^/admin/users/login/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_login')), array (  '_controller' => 'AppBundle\\Controller\\Backend\\UsersController::loginAction',));
                    }

                }

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\Frontend\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/מגזין')) {
            // magazine
            if (preg_match('#^/מגזין(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'magazine')), array (  'page' => 1,  '_controller' => 'AppBundle\\Controller\\Frontend\\MagazineController::indexAction',));
            }

            // magazine_article
            if (preg_match('#^/מגזין/(?P<uri>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'magazine_article')), array (  '_controller' => 'AppBundle\\Controller\\Frontend\\MagazineController::articleAction',));
            }

        }

        if (0 === strpos($pathinfo, '/user/messenger')) {
            // messenger
            if ($pathinfo === '/user/messenger') {
                return array (  '_controller' => 'AppBundle\\Controller\\Frontend\\MessengerController::indexAction',  '_route' => 'messenger',);
            }

            // messenger_dialog_open
            if (0 === strpos($pathinfo, '/user/messenger/dialog/open/userId') && preg_match('#^/user/messenger/dialog/open/userId\\:(?P<userId>[^/]++)/contactId\\:(?P<contactId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'messenger_dialog_open')), array (  '_controller' => 'AppBundle\\Controller\\Frontend\\MessengerController::openDialogAction',));
            }

        }

        if (0 === strpos($pathinfo, '/messenger')) {
            // user_messenger_active_chats_new_messages
            if (0 === strpos($pathinfo, '/messenger/activeChats/newMessages/userId') && preg_match('#^/messenger/activeChats/newMessages/userId\\:(?P<userId>[^/]++)/contactId\\:(?P<contactId>[^/]++)(?:/(?P<checkForDialogAlso>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_messenger_active_chats_new_messages')), array (  'checkForDialogAlso' => false,  '_controller' => 'AppBundle\\Controller\\Frontend\\MessengerController::activeChatsNewMessagesAction',));
            }

            if (0 === strpos($pathinfo, '/messenger/newMessages')) {
                // user_messenger_new_messages
                if (0 === strpos($pathinfo, '/messenger/newMessages/userId') && preg_match('#^/messenger/newMessages/userId\\:(?P<userId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_messenger_new_messages')), array (  '_controller' => 'AppBundle\\Controller\\Frontend\\MessengerController::newMessagesAction',));
                }

                // user_messenger_new_messages_mobile
                if (0 === strpos($pathinfo, '/messenger/newMessagesMobile') && preg_match('#^/messenger/newMessagesMobile/(?P<userId>[^/]++)/(?P<contactId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_messenger_new_messages_mobile')), array (  '_controller' => 'AppBundle\\Controller\\Frontend\\MessengerController::newMessagesMobileAction',));
                }

            }

            // user_messenger_message_send
            if (0 === strpos($pathinfo, '/messenger/message/send/userId') && preg_match('#^/messenger/message/send/userId\\:(?P<userId>[^/]++)/contactId\\:(?P<contactId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_messenger_message_send')), array (  '_controller' => 'AppBundle\\Controller\\Frontend\\MessengerController::sendMessageAction',));
            }

            // user_messenger_check_messages_if_read
            if (0 === strpos($pathinfo, '/messenger/checkMessagesIfRead/userId') && preg_match('#^/messenger/checkMessagesIfRead/userId\\:(?P<userId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_messenger_check_messages_if_read')), array (  '_controller' => 'AppBundle\\Controller\\Frontend\\MessengerController::checkMessagesIfReadAction',));
            }

            if (0 === strpos($pathinfo, '/messenger/message')) {
                // user_messenger_message_read
                if (0 === strpos($pathinfo, '/messenger/message/read/messageId') && preg_match('#^/messenger/message/read/messageId\\:(?P<messageId>[^/]++)/userId\\:(?P<userId>[^/]++)/contactId\\:(?P<contactId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_messenger_message_read')), array (  '_controller' => 'AppBundle\\Controller\\Frontend\\MessengerController::readMessageAction',));
                }

                // user_messenger_message_notify
                if (0 === strpos($pathinfo, '/messenger/message/notify/messageId') && preg_match('#^/messenger/message/notify/messageId\\:(?P<messageId>[^/]++)/userId\\:(?P<userId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_messenger_message_notify')), array (  '_controller' => 'AppBundle\\Controller\\Frontend\\MessengerController::notifyMessageAction',));
                }

                // user_use_free_point_to_read
                if (0 === strpos($pathinfo, '/messenger/message/messageId') && preg_match('#^/messenger/message/messageId\\:(?P<messageId>[^/]++)/userId\\:(?P<userId>[^/]++)/useFreePointToRead$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_use_free_point_to_read')), array (  '_controller' => 'AppBundle\\Controller\\Frontend\\MessengerController::useFreePointToReadMessageAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/�')) {
            // pages_page
            if (0 === strpos($pathinfo, '/עמודים') && preg_match('#^/עמודים/(?P<uri>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pages_page')), array (  '_controller' => 'AppBundle\\Controller\\Frontend\\PagesController::indexAction',));
            }

            // faq
            if ($pathinfo === '/שאלות_תשובות') {
                return array (  '_controller' => 'AppBundle\\Controller\\Frontend\\PagesController::faqAction',  '_route' => 'faq',);
            }

            // contact
            if ($pathinfo === '/צור_קשר') {
                return array (  '_controller' => 'AppBundle\\Controller\\Frontend\\PagesController::contactAction',  '_route' => 'contact',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            // login_check
            if ($pathinfo === '/login_check') {
                return array (  '_controller' => 'AppBundle\\Controller\\Frontend\\SecurityController::loginCheckAction',  '_route' => 'login_check',);
            }

            // logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'AppBundle\\Controller\\Frontend\\SecurityController::logoutAction',  '_route' => 'logout',);
            }

        }

        // password_recovery
        if ($pathinfo === '/password') {
            return array (  '_controller' => 'AppBundle\\Controller\\Frontend\\SecurityController::passwordAction',  '_route' => 'password_recovery',);
        }

        if (0 === strpos($pathinfo, '/sign_up')) {
            // sign_up
            if ($pathinfo === '/sign_up') {
                return array (  '_controller' => 'AppBundle\\Controller\\Frontend\\SecurityController::indexAction',  '_route' => 'sign_up',);
            }

            if (0 === strpos($pathinfo, '/sign_up/photo')) {
                // sign_up_photo
                if ($pathinfo === '/sign_up/photo') {
                    return array (  '_controller' => 'AppBundle\\Controller\\Frontend\\SecurityController::photoAction',  '_route' => 'sign_up_photo',);
                }

                // sign_up_photos
                if ($pathinfo === '/sign_up/photos') {
                    return array (  '_controller' => 'AppBundle\\Controller\\Frontend\\SecurityController::photosAction',  '_route' => 'sign_up_photos',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_homepage
            if ($pathinfo === '/user') {
                return array (  '_controller' => 'AppBundle\\Controller\\Frontend\\UserController::indexAction',  '_route' => 'user_homepage',);
            }

            if (0 === strpos($pathinfo, '/user/p')) {
                // user_profile
                if (0 === strpos($pathinfo, '/user/profile') && preg_match('#^/user/profile(?:/(?P<tab>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_profile')), array (  'tab' => 1,  '_controller' => 'AppBundle\\Controller\\Frontend\\UserController::profileAction',));
                }

                if (0 === strpos($pathinfo, '/user/photo')) {
                    if (0 === strpos($pathinfo, '/user/photo/d')) {
                        // user_photo_data
                        if ($pathinfo === '/user/photo/data') {
                            return array (  '_controller' => 'AppBundle\\Controller\\Frontend\\UserController::photoDataAction',  '_route' => 'user_photo_data',);
                        }

                        // user_photo_delete
                        if (0 === strpos($pathinfo, '/user/photo/delete') && preg_match('#^/user/photo/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_photo_delete')), array (  '_controller' => 'AppBundle\\Controller\\Frontend\\UserController::deletePhotoAction',));
                        }

                    }

                    // user_set_main_photo
                    if (0 === strpos($pathinfo, '/user/photo/main') && preg_match('#^/user/photo/main/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_set_main_photo')), array (  '_controller' => 'AppBundle\\Controller\\Frontend\\UserController::setMainPhotoAction',));
                    }

                }

            }

            // user_users_online
            if (0 === strpos($pathinfo, '/user/users/online') && preg_match('#^/user/users/online(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_users_online')), array (  'page' => 1,  '_controller' => 'AppBundle\\Controller\\Frontend\\UserController::usersOnlineAction',));
            }

            if (0 === strpos($pathinfo, '/user/search')) {
                // user_search_advanced
                if ($pathinfo === '/user/search/advanced') {
                    return array (  '_controller' => 'AppBundle\\Controller\\Frontend\\UserController::searchAction',  '_route' => 'user_search_advanced',);
                }

                // user_search_results
                if (0 === strpos($pathinfo, '/user/search/results') && preg_match('#^/user/search/results(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_search_results')), array (  'page' => 1,  '_controller' => 'AppBundle\\Controller\\Frontend\\UserController::searchResultsAction',));
                }

            }

        }

        // public_search_results
        if (0 === strpos($pathinfo, '/public/search/results') && preg_match('#^/public/search/results(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'public_search_results')), array (  'page' => 1,  '_controller' => 'AppBundle\\Controller\\Frontend\\UserController::searchResultsAction',));
        }

        // users_public_list
        if (0 === strpos($pathinfo, '/חברים_באתר') && preg_match('#^/חברים_באתר(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_public_list')), array (  'page' => 1,  '_controller' => 'AppBundle\\Controller\\Frontend\\UserController::searchResultsAction',));
        }

        // view_user
        if (0 === strpos($pathinfo, '/user/users') && preg_match('#^/user/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'view_user')), array (  '_controller' => 'AppBundle\\Controller\\Frontend\\UserController::viewUserAction',));
        }

        // users_public_list_user
        if (0 === strpos($pathinfo, '/חברים_באתר/פרופיל') && preg_match('#^/חברים_באתר/פרופיל/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_public_list_user')), array (  '_controller' => 'AppBundle\\Controller\\Frontend\\UserController::publicUserAction',));
        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_notes
            if (0 === strpos($pathinfo, '/user/notes') && preg_match('#^/user/notes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_notes')), array (  '_controller' => 'AppBundle\\Controller\\Frontend\\UserController::saveNoteAction',));
            }

            // mobile_user_lists
            if ($pathinfo === '/user/lists') {
                return array (  '_controller' => 'AppBundle\\Controller\\Frontend\\UserController::listsAction',  '_route' => 'mobile_user_lists',);
            }

            // mobile_user_account
            if ($pathinfo === '/user/account') {
                return array (  '_controller' => 'AppBundle\\Controller\\Frontend\\UserController::accountAction',  '_route' => 'mobile_user_account',);
            }

            if (0 === strpos($pathinfo, '/user/users')) {
                // user_users_favorite
                if (0 === strpos($pathinfo, '/user/users/favorite') && preg_match('#^/user/users/favorite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_users_favorite')), array (  '_controller' => 'AppBundle\\Controller\\Frontend\\UserController::favoriteAction',));
                }

                // user_users_black_list
                if (0 === strpos($pathinfo, '/user/users/black_list') && preg_match('#^/user/users/black_list/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_users_black_list')), array (  '_controller' => 'AppBundle\\Controller\\Frontend\\UserController::blackListAction',));
                }

                // user_users_favorite_delete
                if (0 === strpos($pathinfo, '/user/users/favorite/delete') && preg_match('#^/user/users/favorite/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_users_favorite_delete')), array (  '_controller' => 'AppBundle\\Controller\\Frontend\\UserController::deleteFavoriteAction',));
                }

                // user_users_black_list_delete
                if (0 === strpos($pathinfo, '/user/users/black_list/delete') && preg_match('#^/user/users/black_list/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_users_black_list_delete')), array (  '_controller' => 'AppBundle\\Controller\\Frontend\\UserController::deleteBlackListAction',));
                }

            }

            // user_list_favorited
            if (0 === strpos($pathinfo, '/user/list/favorited') && preg_match('#^/user/list/favorited(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_list_favorited')), array (  'page' => 1,  '_controller' => 'AppBundle\\Controller\\Frontend\\UserController::favoritedAction',));
            }

            // user_manage_list_favorited
            if (0 === strpos($pathinfo, '/user/manage/list/favorited') && preg_match('#^/user/manage/list/favorited(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_manage_list_favorited')), array (  'page' => 1,  '_controller' => 'AppBundle\\Controller\\Frontend\\UserController::favoritedAction',));
            }

            if (0 === strpos($pathinfo, '/user/list')) {
                // user_list_favorited_me
                if (0 === strpos($pathinfo, '/user/list/favorited_me') && preg_match('#^/user/list/favorited_me(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_list_favorited_me')), array (  'page' => 1,  '_controller' => 'AppBundle\\Controller\\Frontend\\UserController::favoritedMeAction',));
                }

                if (0 === strpos($pathinfo, '/user/list/viewed')) {
                    // user_list_viewed
                    if (preg_match('#^/user/list/viewed(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_list_viewed')), array (  'page' => 1,  '_controller' => 'AppBundle\\Controller\\Frontend\\UserController::viewedAction',));
                    }

                    // user_list_viewed_me
                    if (0 === strpos($pathinfo, '/user/list/viewed_me') && preg_match('#^/user/list/viewed_me(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_list_viewed_me')), array (  'page' => 1,  '_controller' => 'AppBundle\\Controller\\Frontend\\UserController::viewedMeAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/user/list/connected')) {
                    // user_list_connected
                    if (preg_match('#^/user/list/connected(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_list_connected')), array (  'page' => 1,  '_controller' => 'AppBundle\\Controller\\Frontend\\UserController::connectedAction',));
                    }

                    // user_list_connected_me
                    if (0 === strpos($pathinfo, '/user/list/connectedMe') && preg_match('#^/user/list/connectedMe(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_list_connected_me')), array (  'page' => 1,  '_controller' => 'AppBundle\\Controller\\Frontend\\UserController::connectedMeAction',));
                    }

                }

                // user_list_black_listed
                if (0 === strpos($pathinfo, '/user/list/black_listed') && preg_match('#^/user/list/black_listed(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_list_black_listed')), array (  'page' => 1,  '_controller' => 'AppBundle\\Controller\\Frontend\\UserController::blackListedAction',));
                }

            }

            // user_manage_list_black_listed
            if (0 === strpos($pathinfo, '/user/manage/list/black_listed') && preg_match('#^/user/manage/list/black_listed(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_manage_list_black_listed')), array (  'page' => 1,  '_controller' => 'AppBundle\\Controller\\Frontend\\UserController::blackListedAction',));
            }

            // user_freeze_account
            if ($pathinfo === '/user/freeze_account') {
                return array (  '_controller' => 'AppBundle\\Controller\\Frontend\\UserController::freezeAccountAction',  '_route' => 'user_freeze_account',);
            }

            // user_report_abuse
            if (0 === strpos($pathinfo, '/user/report/abuse') && preg_match('#^/user/report/abuse/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_report_abuse')), array (  '_controller' => 'AppBundle\\Controller\\Frontend\\UserController::reportAbuseAction',));
            }

            // user_change_password
            if ($pathinfo === '/user/password') {
                return array (  '_controller' => 'AppBundle\\Controller\\Frontend\\UserController::changePasswordAction',  '_route' => 'user_change_password',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
