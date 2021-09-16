<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/activite' => [[['_route' => 'activite_index', '_controller' => 'App\\Controller\\ActiviteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/activite/new' => [[['_route' => 'activite_new', '_controller' => 'App\\Controller\\ActiviteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/article/web' => [[['_route' => 'article_web_index', '_controller' => 'App\\Controller\\ArticleWebController::index'], null, ['GET' => 0], null, true, false, null]],
        '/article/web/new' => [[['_route' => 'article_web_new', '_controller' => 'App\\Controller\\ArticleWebController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/coach' => [[['_route' => 'coach_index', '_controller' => 'App\\Controller\\CoachController::index'], null, ['GET' => 0], null, true, false, null]],
        '/coach/new' => [[['_route' => 'coach_new', '_controller' => 'App\\Controller\\CoachController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/concept' => [[['_route' => 'concept_index', '_controller' => 'App\\Controller\\ConceptController::index'], null, ['GET' => 0], null, true, false, null]],
        '/concept/new' => [[['_route' => 'concept_new', '_controller' => 'App\\Controller\\ConceptController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contrat/abonnement' => [[['_route' => 'contrat_abonnement_index', '_controller' => 'App\\Controller\\ContratAbonnementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/contrat/abonnement/new' => [[['_route' => 'contrat_abonnement_new', '_controller' => 'App\\Controller\\ContratAbonnementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/option/abonnement' => [[['_route' => 'option_abonnement_index', '_controller' => 'App\\Controller\\OptionAbonnementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/option/abonnement/new' => [[['_route' => 'option_abonnement_new', '_controller' => 'App\\Controller\\OptionAbonnementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/salle' => [[['_route' => 'salle_index', '_controller' => 'App\\Controller\\SalleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/salle/new' => [[['_route' => 'salle_new', '_controller' => 'App\\Controller\\SalleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/type/abonnement' => [[['_route' => 'type_abonnement_index', '_controller' => 'App\\Controller\\TypeAbonnementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/type/abonnement/new' => [[['_route' => 'type_abonnement_new', '_controller' => 'App\\Controller\\TypeAbonnementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/a(?'
                    .'|ctivite/([^/]++)(?'
                        .'|(*:192)'
                        .'|/edit(*:205)'
                        .'|(*:213)'
                    .')'
                    .'|rticle/web/([^/]++)(?'
                        .'|(*:244)'
                        .'|/edit(*:257)'
                        .'|(*:265)'
                    .')'
                .')'
                .'|/co(?'
                    .'|ach/([^/]++)(?'
                        .'|(*:296)'
                        .'|/edit(*:309)'
                        .'|(*:317)'
                    .')'
                    .'|n(?'
                        .'|cept/([^/]++)(?'
                            .'|(*:346)'
                            .'|/edit(*:359)'
                            .'|(*:367)'
                        .')'
                        .'|trat/abonnement/([^/]++)(?'
                            .'|(*:403)'
                            .'|/edit(*:416)'
                            .'|(*:424)'
                        .')'
                    .')'
                .')'
                .'|/option/abonnement/([^/]++)(?'
                    .'|(*:465)'
                    .'|/edit(*:478)'
                    .'|(*:486)'
                .')'
                .'|/salle/([^/]++)(?'
                    .'|(*:513)'
                    .'|/edit(*:526)'
                    .'|(*:534)'
                .')'
                .'|/type/abonnement/([^/]++)(?'
                    .'|(*:571)'
                    .'|/edit(*:584)'
                    .'|(*:592)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:618)'
                    .'|/edit(*:631)'
                    .'|(*:639)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        192 => [[['_route' => 'activite_show', '_controller' => 'App\\Controller\\ActiviteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        205 => [[['_route' => 'activite_edit', '_controller' => 'App\\Controller\\ActiviteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        213 => [[['_route' => 'activite_delete', '_controller' => 'App\\Controller\\ActiviteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        244 => [[['_route' => 'article_web_show', '_controller' => 'App\\Controller\\ArticleWebController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        257 => [[['_route' => 'article_web_edit', '_controller' => 'App\\Controller\\ArticleWebController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        265 => [[['_route' => 'article_web_delete', '_controller' => 'App\\Controller\\ArticleWebController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        296 => [[['_route' => 'coach_show', '_controller' => 'App\\Controller\\CoachController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        309 => [[['_route' => 'coach_edit', '_controller' => 'App\\Controller\\CoachController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        317 => [[['_route' => 'coach_delete', '_controller' => 'App\\Controller\\CoachController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        346 => [[['_route' => 'concept_show', '_controller' => 'App\\Controller\\ConceptController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        359 => [[['_route' => 'concept_edit', '_controller' => 'App\\Controller\\ConceptController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        367 => [[['_route' => 'concept_delete', '_controller' => 'App\\Controller\\ConceptController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        403 => [[['_route' => 'contrat_abonnement_show', '_controller' => 'App\\Controller\\ContratAbonnementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        416 => [[['_route' => 'contrat_abonnement_edit', '_controller' => 'App\\Controller\\ContratAbonnementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        424 => [[['_route' => 'contrat_abonnement_delete', '_controller' => 'App\\Controller\\ContratAbonnementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        465 => [[['_route' => 'option_abonnement_show', '_controller' => 'App\\Controller\\OptionAbonnementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        478 => [[['_route' => 'option_abonnement_edit', '_controller' => 'App\\Controller\\OptionAbonnementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        486 => [[['_route' => 'option_abonnement_delete', '_controller' => 'App\\Controller\\OptionAbonnementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        513 => [[['_route' => 'salle_show', '_controller' => 'App\\Controller\\SalleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        526 => [[['_route' => 'salle_edit', '_controller' => 'App\\Controller\\SalleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        534 => [[['_route' => 'salle_delete', '_controller' => 'App\\Controller\\SalleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        571 => [[['_route' => 'type_abonnement_show', '_controller' => 'App\\Controller\\TypeAbonnementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        584 => [[['_route' => 'type_abonnement_edit', '_controller' => 'App\\Controller\\TypeAbonnementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        592 => [[['_route' => 'type_abonnement_delete', '_controller' => 'App\\Controller\\TypeAbonnementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        618 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        631 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        639 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
