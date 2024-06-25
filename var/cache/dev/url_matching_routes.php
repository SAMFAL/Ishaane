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
        '/dahiras' => [[['_route' => 'app_dahiras_index', '_controller' => 'App\\Controller\\DahirasController::index'], null, ['GET' => 0], null, true, false, null]],
        '/dahiras/new' => [[['_route' => 'app_dahiras_new', '_controller' => 'App\\Controller\\DahirasController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/membres' => [[['_route' => 'app_membres_index', '_controller' => 'App\\Controller\\MembresController::index'], null, ['GET' => 0], null, true, false, null]],
        '/membres/new' => [[['_route' => 'app_membres_new', '_controller' => 'App\\Controller\\MembresController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/themes' => [[['_route' => 'app_themes_index', '_controller' => 'App\\Controller\\ThemesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/themes/new' => [[['_route' => 'app_themes_new', '_controller' => 'App\\Controller\\ThemesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/dahiras/([^/]++)(?'
                    .'|(*:222)'
                    .'|/edit(*:235)'
                    .'|(*:243)'
                .')'
                .'|/membres/([^/]++)(?'
                    .'|(*:272)'
                    .'|/edit(*:285)'
                    .'|(*:293)'
                .')'
                .'|/themes/([^/]++)(?'
                    .'|(*:321)'
                    .'|/edit(*:334)'
                    .'|(*:342)'
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
        222 => [[['_route' => 'app_dahiras_show', '_controller' => 'App\\Controller\\DahirasController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        235 => [[['_route' => 'app_dahiras_edit', '_controller' => 'App\\Controller\\DahirasController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        243 => [[['_route' => 'app_dahiras_delete', '_controller' => 'App\\Controller\\DahirasController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        272 => [[['_route' => 'app_membres_show', '_controller' => 'App\\Controller\\MembresController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        285 => [[['_route' => 'app_membres_edit', '_controller' => 'App\\Controller\\MembresController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        293 => [[['_route' => 'app_membres_delete', '_controller' => 'App\\Controller\\MembresController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        321 => [[['_route' => 'app_themes_show', '_controller' => 'App\\Controller\\ThemesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        334 => [[['_route' => 'app_themes_edit', '_controller' => 'App\\Controller\\ThemesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        342 => [
            [['_route' => 'app_themes_delete', '_controller' => 'App\\Controller\\ThemesController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
