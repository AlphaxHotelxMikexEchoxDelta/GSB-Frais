<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'index' => [[], ['_controller' => 'App\\Controller\\AcceuilController::index'], [], [['text', '/']], [], [], []],
    'connectionVisiteur' => [[], ['_controller' => 'App\\Controller\\AcceuilController::connectionVisiteur'], [], [['text', '/connection/visiteur']], [], [], []],
    'deconnection' => [[], ['_controller' => 'App\\Controller\\AcceuilController::deconnection'], [], [['text', '/deconnection']], [], [], []],
    'comptable' => [[], ['_controller' => 'App\\Controller\\ComptableController::index'], [], [['text', '/comptable']], [], [], []],
    'visiteur' => [[], ['_controller' => 'App\\Controller\\VisiteurController::index'], [], [['text', '/visiteur']], [], [], []],
    'visiteurRenseigner' => [[], ['_controller' => 'App\\Controller\\VisiteurController::renseigner'], [], [['text', '/visiteur/renseigner']], [], [], []],
    'visiteurRenseignerForfais' => [[], ['_controller' => 'App\\Controller\\VisiteurController::renseignerForfais'], [], [['text', '/visiteur/renseigner/forfais']], [], [], []],
    'visiteurRenseignerHorsForfais' => [[], ['_controller' => 'App\\Controller\\VisiteurController::renseignerHorsForfais'], [], [['text', '/visiteur/renseigner/hors-forfais']], [], [], []],
    'FinaliserFiche' => [[], ['_controller' => 'App\\Controller\\VisiteurController::finaliserfiche'], [], [['text', '/visiteur/finaliser-fiche']], [], [], []],
    'ValideeFiche' => [[], ['_controller' => 'App\\Controller\\VisiteurController::valideeFiche'], [], [['text', '/visiteur/fiche-validee']], [], [], []],
    'SupprFraisForfais' => [[], ['_controller' => 'App\\Controller\\VisiteurController::suppFraisForfais'], [], [['text', '/visiteur/supprimer-fraisforfais']], [], [], []],
    'SupprFraisHors' => [[], ['_controller' => 'App\\Controller\\VisiteurController::suppFraisHors'], [], [['text', '/visiteur/supprimer-fraishors']], [], [], []],
    'ModifFrais' => [[], ['_controller' => 'App\\Controller\\VisiteurController::modFrais'], [], [['text', '/visiteur/modifier-fraisforfais']], [], [], []],
    'ModifHors' => [[], ['_controller' => 'App\\Controller\\VisiteurController::modHors'], [], [['text', '/visiteur/modifier-fraishors']], [], [], []],
    'visiteurConsulter' => [[], ['_controller' => 'App\\Controller\\VisiteurController::consulter'], [], [['text', '/visiteur/consulter']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
];
