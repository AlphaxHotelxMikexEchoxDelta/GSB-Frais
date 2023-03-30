<?php

$bd = new PDO( 'mysql:host=localhost;dbname=GSB_FRAIS', "GSB_Frais", 'GSB2023SLAM' ) ;

$sql1 = "select f.idVisiteur, f.mois, idEtat, quantite, libelle, montant from FicheFrais as f inner join ( select libelle, montant, quantite, e.idVisiteur, e.mois from LigneFraisForfait as e inner join FraisForfait as a on e.idFraisForfait  = a.id) as l on f.mois = l.mois and f.idVisiteur = l.idVisiteur where f.idVisiteur = 'a131' and f.mois = SUBSTRING(DATE_FORMAT(CURDATE(),'%M'),1,6) " ;
$sql2 = "select f.idVisiteur, f.mois, idEtat, dateModif, libelle, montant from FicheFrais as f inner join LigneFraisHorsForfait as l on f.mois = l.mois and f.idVisiteur = l.idVisiteur where f.idVisiteur = 'a131' and f.mois = SUBSTRING(DATE_FORMAT(CURDATE(),'%M'),1,6)" ;

$st = $bd->prepare( $sql2 ) ;
$st->execute() ;
$client2 = $st->fetchAll( PDO::FETCH_ASSOC ) ;
$st->closeCursor() ;

$st = $bd->prepare( $sql1 ) ;
$st->execute() ;
$client1 = $st->fetchAll( PDO::FETCH_ASSOC ) ;
$st->closeCursor() ;

foreach ($client1 as $u) {
    print_r($u) ;
}


?>