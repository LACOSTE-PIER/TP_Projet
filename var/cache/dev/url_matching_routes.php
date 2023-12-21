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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/search' => [[['_route' => 'controller_search_index', '_controller' => 'App\\Controller\\ControllerSearchController::index'], null, null, null, false, false, null]],
        '/habitant' => [[['_route' => 'app_habitant_index', '_controller' => 'App\\Controller\\HabitantController::index'], null, ['GET' => 0], null, true, false, null]],
        '/habitant/new' => [[['_route' => 'app_habitant_new', '_controller' => 'App\\Controller\\HabitantController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/habitation/new' => [[['_route' => 'app_habitation_new', '_controller' => 'App\\Controller\\HabitationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/habitation/liste' => [[['_route' => 'app_habitation_index', '_controller' => 'App\\Controller\\HabitationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/habitation/select-ville' => [[['_route' => 'app_select_ville', '_controller' => 'App\\Controller\\HabitationController::selectVille'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/habita(?'
                    .'|nt/([^/]++)(?'
                        .'|(*:226)'
                        .'|/edit(*:239)'
                        .'|(*:247)'
                    .')'
                    .'|tion/(?'
                        .'|ville/([^/]++)/statistiques(*:291)'
                        .'|habitation/([^/]++)(?'
                            .'|/habitants(*:331)'
                            .'|(*:339)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        226 => [[['_route' => 'app_habitant_show', '_controller' => 'App\\Controller\\HabitantController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        239 => [[['_route' => 'app_habitant_edit', '_controller' => 'App\\Controller\\HabitantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        247 => [[['_route' => 'app_habitant_delete', '_controller' => 'App\\Controller\\HabitantController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        291 => [[['_route' => 'app_ville_statistiques', '_controller' => 'App\\Controller\\HabitationController::statistiques'], ['ville'], null, null, false, false, null]],
        331 => [[['_route' => 'app_habitation_view_habitants', '_controller' => 'App\\Controller\\HabitationController::viewHabitants'], ['id'], null, null, false, false, null]],
        339 => [
            [['_route' => 'app_habitation_show', '_controller' => 'App\\Controller\\HabitationController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_habitation_delete', '_controller' => 'App\\Controller\\HabitationController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
