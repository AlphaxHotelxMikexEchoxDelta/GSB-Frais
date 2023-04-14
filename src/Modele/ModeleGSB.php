<?php

	class ModeleGSB{

		private static $connexion = null ;
		
		private function __construct(){
			self::$connexion = new PDO( 'mysql:host=localhost;dbname=GSB_FRAIS', 'GSB_Frais', 'GSB2023SLAM' ) ;
		}

		private static function getConnexion(){
			if( self::$connexion == null ){
				new ModeleGSB() ;
			}
			return self::$connexion ;
		}

		public static function getVisiteur( $login , $mdp ){

			$bd = self::getConnexion() ;
			$sql = "select id , nom , prenom from Visiteur where login = :login and mdp = :mdp" ;
			$st = $bd->prepare( $sql ) ;
			$st->execute( array( ":login" => $login , ":mdp" => $mdp ) ) ;
			$client = $st->fetch( PDO::FETCH_ASSOC ) ;
			$st->closeCursor() ;
			return $client ;

		}

		public static function getFicheFrais_MoisCourant( $visiteur ){
			
			$bd = self::getConnexion() ;
			$sql = "select mois from FicheFrais where idVisiteur = :0 and mois = DATE_FORMAT(CURDATE(), '%M')" ;
			$st = $bd->prepare( $sql ) ;
			$st->execute( array( ':0' => $visiteur ) ) ;
			$client = $st->fetch( PDO::FETCH_ASSOC ) ;
			$st->closeCursor() ;
			return $client ;

		}

		public static function createFicheFrais( $visiteur ){

			$bd = self::getConnexion() ;
			$sql = "insert into FicheFrais( idVisiteur, mois, idEtat ) values( :0, DATE_FORMAT(CURDATE(), '%M'), 'CR' )" ;
			$st = $bd->prepare( $sql ) ;
			$st->execute( array( ":0" => $visiteur ) ) ;
			$st->closeCursor() ;
			return true ;

		}

		public static function getLigneHorsForfait( $visiteur ){
			
			$bd = self::getConnexion() ;
			$sql = "select id, dateModif, libelle, montant from FicheFrais as f inner join LigneFraisHorsForfait as l on f.mois = l.mois and f.idVisiteur = l.idVisiteur where f.idVisiteur = :0 and f.mois = DATE_FORMAT(CURDATE(), '%M')" ;
			$st = $bd->prepare( $sql ) ;
			$st->execute( array( ':0' => $visiteur ) ) ;
			$client = $st->fetchAll( PDO::FETCH_ASSOC ) ;
			$st->closeCursor() ;
			return $client ;
		
		}

		public static function getLigneFraisForfait( $visiteur ){
			
			$bd = self::getConnexion() ;
			$sql = "select l.id, quantite, libelle, montant from FicheFrais as f inner join ( select e.id, libelle, montant, quantite, e.idVisiteur, e.mois from LigneFraisForfait as e inner join FraisForfait as a on e.idFraisForfait  = a.id) as l on f.mois = l.mois and f.idVisiteur = l.idVisiteur where f.idVisiteur = :0 and f.mois = DATE_FORMAT(CURDATE(), '%M') " ;
			$st = $bd->prepare( $sql ) ;
			$st->execute( array( ':0' => $visiteur ) ) ;
			$client = $st->fetchAll( PDO::FETCH_ASSOC ) ;
			$st->closeCursor() ;
			return $client ;
		
		}

		public static function getFicheFrais( $visiteur ){

			$ligneFraisForfait = self::getLigneFraisForfait( $visiteur );
			$ligneHorsForfait = self::getLigneHorsForfait( $visiteur );
			return array(
				'ligneFraisForfait' => $ligneFraisForfait,
				'ligneHorsForfait' => $ligneHorsForfait
			);

		}
	
		public static function addLigneFraisForfait( $visiteur, $fraisforfait, $quantite ){

			$bd = self::getConnexion() ;
			$sql = "insert into LigneFraisForfait( idVisiteur, mois, idFraisForfait, quantite ) values( :0, DATE_FORMAT(CURDATE(), '%M'), :1, :2 )";
			$st = $bd->prepare( $sql ) ;
			$st->execute( array( ":0" => $visiteur , ":1" => $fraisforfait , ":2" => $quantite ) ) ;
			$st->closeCursor() ;
			return true ;

		}
		public static function addLigneHorsForfait( $visiteur, $libelle, $montant ){

			$bd = self::getConnexion() ;
			$sql = "insert into LigneFraisHorsForfait(idVisiteur, mois, libelle, montant) values(:0, DATE_FORMAT(CURDATE(), '%M'), :1, :2 )" ;
			$st = $bd->prepare( $sql ) ;
			$st->execute( array( ":0" => $visiteur , ":1" => $libelle , ":2" => $montant ) ) ;
			$st->closeCursor() ;
			return true ;

		}

		public static function getLibelleRestant( $visiteur ){

			$bd = self::getConnexion() ;
			$sql = "select id, libelle from FraisForfait where id not in (select idFraisForfait from LigneFraisForfait where idVisiteur = :0 and mois = DATE_FORMAT(CURDATE(), '%M'))" ;
			$st = $bd->prepare( $sql ) ;
			$st->execute( array( ':0' => $visiteur ) ) ;
			$client = $st->fetchAll( PDO::FETCH_ASSOC ) ;
			$st->closeCursor() ;
			return $client ;

		}

		public static function delHorsForfais( $id ){

			$bd = self::getConnexion() ;
			$sql = "delete from LigneFraisHorsForfait where id = :0 " ;
			$st = $bd->prepare( $sql ) ;
			$st->execute( array( ":0" => $id ) ) ;
			$st->closeCursor() ;
			return true ;

		}

		public static function delFraisForfais( $id ){

			$bd = self::getConnexion() ;
			$sql = "delete from LigneFraisForfait where id = :0 ;" ;
			$st = $bd->prepare( $sql ) ;
			$st->execute( array( ":0" => $id ) ) ;
			$st->closeCursor() ;
			return true ;

		}


		public static function updFraisForfais( $id, $quantite ){

			$bd = self::getConnexion() ;
			$sql = "update LigneFraisForfait set quantite = :0 where id = :1 and mois = DATE_FORMAT(CURDATE(), '%M')";
			$st = $bd->prepare( $sql ) ;
			$st->execute( array( ":0" => $quantite, ":1" => $id )) ;
			$st->closeCursor() ;
			return true ;

		}
		public static function updHorsForfais( $id, $montant, $libelle ){

			$bd = self::getConnexion() ;
			$sql = "update LigneFraisHorsForfait  set montant= :0, libelle= :1 where id= :2 and mois = DATE_FORMAT(CURDATE(), '%M')";
			$st = $bd->prepare( $sql ) ;
			$st->execute( array( ":0" => $montant, ":1"=> $libelle ,":2" => $id )) ;
			$st->closeCursor() ;
			return true ;

		}

		public static function validerFicheFrais( $visiteur ){

			$bd = self::getConnexion() ;
			$sql = "update FicheFrais set dateModif = CURDATE(), idEtat= 'VA' where idVisiteur= :0 and mois = DATE_FORMAT(CURDATE(), '%M')";
			$st = $bd->prepare( $sql ) ;
			$st->execute( array( ":0" => $visiteur )) ;
			$st->closeCursor() ;
			return true ;

		}

		public static function getLigneHorsForfait_Mois( $visiteur, $mois ){
			
			$bd = self::getConnexion() ;
			$sql = "select id, dateModif, libelle, montant from FicheFrais as f inner join LigneFraisHorsForfait as l on f.mois = l.mois and f.idVisiteur = l.idVisiteur where f.idVisiteur = :0 and f.mois = DATE_FORMAT(STR_TO_DATE(:1, '%Y-%m'), '%M')" ;
			$st = $bd->prepare( $sql ) ;
			$st->execute( array( ':0' => $visiteur, ":1" => $mois ) ) ;
			$client = $st->fetchAll( PDO::FETCH_ASSOC ) ;
			$st->closeCursor() ;
			return $client ;
		
		}

		public static function getLigneFraisForfait_Mois( $visiteur, $mois ){
			
			$bd = self::getConnexion() ;
			$sql = "select l.id, quantite, libelle, montant from FicheFrais as f inner join ( select e.id, libelle, montant, quantite, e.idVisiteur, e.mois from LigneFraisForfait as e inner join FraisForfait as a on e.idFraisForfait  = a.id) as l on f.mois = l.mois and f.idVisiteur = l.idVisiteur where f.idVisiteur = :0 and f.mois = DATE_FORMAT(STR_TO_DATE(:1, '%Y-%m'), '%M') " ;
			$st = $bd->prepare( $sql ) ;
			$st->execute( array( ':0' => $visiteur, ":1" => $mois ) ) ;
			$client = $st->fetchAll( PDO::FETCH_ASSOC ) ;
			$st->closeCursor() ;
			return $client ;
	
		}

		public static function getFicheFrais_Mois( $visiteur, $mois ){
			
			$ligneFraisForfait = self::getLigneFraisForfait_Mois( $visiteur, $mois );
			$ligneHorsForfait = self::getLigneHorsForfait_Mois( $visiteur, $mois );
			return array(
				'ligneFraisForfait' => $ligneFraisForfait,
				'ligneHorsForfait' => $ligneHorsForfait
			);
	
		}

    }
?>