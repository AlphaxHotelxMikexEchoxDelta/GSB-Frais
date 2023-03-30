<?php

	class ModeleDefault {

		private static $connexion = null ;
		
		private function __construct(){
			self::$connexion = new PDO( 'mysql:host=localhost;dbname=GSB_FRAIS', 'GSB_Frais_Fiches', 'GSB2023SLAM' ) ;
		}

		private static function getConnexion(){
			if( self::$connexion == null ){
				new ModeleDefault() ;
			}
			return self::$connexion ;
		}


		public static function getFiche_Frais_Mois_Courant( $mois, $visiteur ){
			$bd = self::getConnexion() ;

			$sql = "" ;
			
			$st = $bd->prepare( $sql ) ;
			$st->execute( array( ':mois' => $mois , ':visiteur' => $visiteur ) ) ;
			$client = $st->fetch( PDO::FETCH_ASSOC ) ;
			$st->closeCursor() ;
			return $client ;
		}




    }

?>