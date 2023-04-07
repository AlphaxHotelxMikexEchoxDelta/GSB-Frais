<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\AcceuilController::index'], null, null, null, false, false, null]],
        '/connection/visiteur' => [[['_route' => 'connectionVisiteur', '_controller' => 'App\\Controller\\AcceuilController::connectionVisiteur'], null, null, null, false, false, null]],
        '/deconnection' => [[['_route' => 'deconnection', '_controller' => 'App\\Controller\\AcceuilController::deconnection'], null, null, null, false, false, null]],
        '/comptable' => [[['_route' => 'comptable', '_controller' => 'App\\Controller\\ComptableController::index'], null, null, null, false, false, null]],
        '/visiteur' => [[['_route' => 'visiteur', '_controller' => 'App\\Controller\\VisiteurController::index'], null, null, null, false, false, null]],
        '/visiteur/renseigner' => [[['_route' => 'visiteurRenseigner', '_controller' => 'App\\Controller\\VisiteurController::renseigner'], null, null, null, false, false, null]],
        '/visiteur/renseigner/forfais' => [[['_route' => 'visiteurRenseignerForfais', '_controller' => 'App\\Controller\\VisiteurController::renseignerForfais'], null, null, null, false, false, null]],
        '/visiteur/renseigner/hors-forfais' => [[['_route' => 'visiteurRenseignerHorsForfais', '_controller' => 'App\\Controller\\VisiteurController::renseignerHorsForfais'], null, null, null, false, false, null]],
        '/visiteur/finaliser-fiche' => [[['_route' => 'FinaliserFiche', '_controller' => 'App\\Controller\\VisiteurController::finaliserfiche'], null, null, null, false, false, null]],
        '/visiteur/fiche-validee' => [[['_route' => 'ValideeFiche', '_controller' => 'App\\Controller\\VisiteurController::valideeFiche'], null, null, null, false, false, null]],
        '/visiteur/supprimer-fraisforfais' => [[['_route' => 'SupprFraisForfais', '_controller' => 'App\\Controller\\VisiteurController::suppFraisForfais'], null, null, null, false, false, null]],
        '/visiteur/supprimer-fraishors' => [[['_route' => 'SupprFraisHors', '_controller' => 'App\\Controller\\VisiteurController::suppFraisHors'], null, null, null, false, false, null]],
        '/visiteur/modifier-fraisforfais' => [[['_route' => 'ModifFrais', '_controller' => 'App\\Controller\\VisiteurController::modFrais'], null, null, null, false, false, null]],
        '/visiteur/modifier-fraishors' => [[['_route' => 'ModifHors', '_controller' => 'App\\Controller\\VisiteurController::modHors'], null, null, null, false, false, null]],
        '/visiteur/consulter' => [[['_route' => 'visiteurConsulter', '_controller' => 'App\\Controller\\VisiteurController::consulter'], null, null, null, false, false, null]],
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
