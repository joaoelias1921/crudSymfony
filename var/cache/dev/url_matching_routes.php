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
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/cliente' => [[['_route' => 'cliente_index', '_controller' => 'App\\Controller\\ClienteController::index'], null, null, null, false, false, null]],
        '/cliente/create' => [[['_route' => 'cliente_create', '_controller' => 'App\\Controller\\ClienteController::create'], null, null, null, false, false, null]],
        '/produto' => [[['_route' => 'produto_index', '_controller' => 'App\\Controller\\ProdutoController::index'], null, null, null, false, false, null]],
        '/produto/create' => [[['_route' => 'produto_create', '_controller' => 'App\\Controller\\ProdutoController::create'], null, null, null, false, false, null]],
        '/vendedor' => [[['_route' => 'vendedor_index', '_controller' => 'App\\Controller\\VendedorController::index'], null, null, null, false, false, null]],
        '/vendedor/create' => [[['_route' => 'vendedor_create', '_controller' => 'App\\Controller\\VendedorController::create'], null, null, null, false, false, null]],
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
                .'|/cliente/(?'
                    .'|edit/([^/]++)(*:193)'
                    .'|delete([^/]++)(*:215)'
                .')'
                .'|/produto/(?'
                    .'|edit/([^/]++)(*:249)'
                    .'|delete([^/]++)(*:271)'
                .')'
                .'|/vendedor/(?'
                    .'|edit/([^/]++)(*:306)'
                    .'|delete([^/]++)(*:328)'
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
        193 => [[['_route' => 'cliente_edit', '_controller' => 'App\\Controller\\ClienteController::edit'], ['id'], null, null, false, true, null]],
        215 => [[['_route' => 'cliente_delete', '_controller' => 'App\\Controller\\ClienteController::delete'], ['id'], null, null, false, true, null]],
        249 => [[['_route' => 'produto_edit', '_controller' => 'App\\Controller\\ProdutoController::edit'], ['id'], null, null, false, true, null]],
        271 => [[['_route' => 'produto_delete', '_controller' => 'App\\Controller\\ProdutoController::delete'], ['id'], null, null, false, true, null]],
        306 => [[['_route' => 'vendedor_edit', '_controller' => 'App\\Controller\\VendedorController::edit'], ['id'], null, null, false, true, null]],
        328 => [
            [['_route' => 'vendedor_delete', '_controller' => 'App\\Controller\\VendedorController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
