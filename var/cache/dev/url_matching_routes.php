<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\PagesController::index'], null, null, null, false, false, null]],
        '/fr' => [[['_route' => 'homepage_fr', '_controller' => 'App\\Controller\\PagesController::indexfr'], null, null, null, false, false, null]],
        '/projects' => [[['_route' => 'projects', '_controller' => 'App\\Controller\\PagesController::projects'], null, null, null, false, false, null]],
        '/projects_fr' => [[['_route' => 'projects_fr', '_controller' => 'App\\Controller\\PagesController::projectsfr'], null, null, null, false, false, null]],
        '/resume' => [[['_route' => 'resume', '_controller' => 'App\\Controller\\PagesController::resume'], null, null, null, false, false, null]],
        '/resume_fr' => [[['_route' => 'resume_fr', '_controller' => 'App\\Controller\\PagesController::resumefr'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
