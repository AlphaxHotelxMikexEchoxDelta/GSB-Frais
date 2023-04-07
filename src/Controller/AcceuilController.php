<?php

namespace App\Controller;

use ModeleGSB;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AcceuilController extends AbstractController
{

############################## Acceuil ##############################

    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return $this->render('acceuil/index.html.twig', [
            'controller_name' => 'Acceuil',
        ]);
    }

############################## Connection Visteur ##############################

    /**
     * @Route("/connection/visiteur", name="connectionVisiteur")
     */
    public function connectionVisiteur(): Response
    {
        $modele = ModeleGSB::getVisiteur($_POST['id'],$_POST['mdp']) ;

        if( !empty($modele) ){

            session_start();
            $_SESSION['id'] = $modele['id'] ;
            $_SESSION['nom'] = $modele['nom'] ;
            $_SESSION['prenom'] = $modele['prenom'] ;

            $modele = ModeleGSB::getFicheFrais_MoisCourant($_SESSION['id']) ;
            if( !empty($modele['mois']) ){
                $_SESSION['mois'] = $modele['mois'] ;
            }
            else{ 
                $modele = ModeleGSB::createFicheFrais( $_SESSION['id'] );
                $modele = ModeleGSB::getFicheFrais_MoisCourant($_SESSION['id']) ;
                $_SESSION['mois'] = $modele['mois'] ;
            }
            return $this->redirectToRoute('visiteur');
        }
        else{
            return $this->redirectToRoute('index') ;
        }
    }    
    
############################## Deconnection ##############################

    /**
    * @Route("/deconnection", name="deconnection")
    */
    public function deconnection(): Response
    {
        session_start() ;
        session_destroy() ;
        return $this->redirectToRoute('index') ; 
    }

}
