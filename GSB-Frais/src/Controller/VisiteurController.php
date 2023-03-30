<?php

namespace App\Controller;

use ModeleGSB ;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VisiteurController extends AbstractController
{

#############################################################################
############################## Acceuil Visteur ##############################
#############################################################################


    /**
     * @Route("/visiteur", name="visiteur")
     */
    public function index(): Response
    {
        session_start();
        return $this->render('visiteur/index.html.twig', [
            'controller_name' => 'Visiteur',
            'id' => $_SESSION['id'],
            'nom' => $_SESSION['nom'],
            'prenom' => $_SESSION['prenom'],
            'mois' => $_SESSION['mois'],
        ]);
    }


####################################################################################
############################## Renseigner Fiche Frais ##############################
####################################################################################

    /**
     * @Route("/visiteur/renseigner", name="visiteurRenseigner")
     */
    public function renseigner(): Response
    {  
        session_start();
        
        $modele = ModeleGSB::getLibelleRestant( $_SESSION['id'] );
        $_SESSION['libelle'] = $modele ;
        if( isset($_SESSION['frais']) ){
            return $this->render('visiteur/renseigner.html.twig', [
                'controller_name' => 'Renseigner Frais',
                'mois' => $_SESSION['mois'],
                'libelles' => $_SESSION['libelle'],
                'Frais' => $_SESSION['frais']
            ]);
        }
        else{
            return $this->render('visiteur/renseigner.html.twig', [
                'controller_name' => 'Renseigner Frais',
                'mois' => $_SESSION['mois'],
                'libelles' => $_SESSION['libelle'],
            ]);
        }
    }

############################## Forfais ##############################

    /**
     * @Route("/visiteur/renseigner/forfais", name="visiteurRenseignerForfais")
     */
    public function renseignerForfais(): Response
    {
        session_start();
        ModeleGSB::addLigneFraisForfait( $_SESSION['id'], $_POST['libelle'], $_POST['montant'] ) ;
        $_SESSION['frais'] = $_POST['montant'].' '.$_POST['libelle'] ;
        return $this->redirectToRoute('visiteurRenseigner') ;
    }

############################## Hors Forfais ##############################

    /**
     * @Route("/visiteur/renseigner/hors-forfais", name="visiteurRenseignerHorsForfais")
     */
    public function renseignerHorsForfais(): Response
    {
        session_start();
        ModeleGSB::addLigneHorsForfait( $_SESSION['id'], $_POST['libelle'], $_POST['montant'] );
        $_SESSION['frais'] = $_POST['montant'].' '.$_POST['libelle'] ;

        return $this->redirectToRoute('visiteurRenseigner') ;
    }


############################## Finaliser Fiche ##############################

    /**
     * @Route("/visiteur/finaliser-fiche", name="FinaliserFiche")
     */
    public function finaliserfiche(): Response
    {
        session_start();

        $modele = ModeleGSB::getFicheFrais( $_SESSION['id'] );

        return $this->render('visiteur/fichefrais.html.twig', [
            'controller_name' => 'Finaliser Fiche Frais',
            'mois' => $_SESSION['mois'],
            'FicheFrais' => $modele
        ]);
    }
    
############################## Valider Fiche ##############################

    /**
     * @Route("/visiteur/fiche-validee", name="ValideeFiche")
     */
    public function valideeFiche(): Response
    {
        session_start();
        ModeleGSB::validerFicheFrais( $_SESSION['id'] );
        return $this->render('visiteur/final.html.twig', [
            'controller_name' => 'Fiche Frais Fini et Validee',
        ]);
    }

############################## Supprimer Fiche ##############################

    /**
     * @Route("/visiteur/supprimer-fraisforfais", name="SupprFraisForfais")
     */
    public function suppFraisForfais(): Response
    {
        session_start();
        ModeleGSB::delFraisForfais( $_POST['id'] ) ;
        return $this->redirectToRoute('FinaliserFiche') ;
    }

    /**
    * @Route("/visiteur/supprimer-fraishors", name="SupprFraisHors")
    */
    public function suppFraisHors(): Response
    {
        session_start();
        ModeleGSB::delHorsForfais( $_POST['id'] ) ;
        return $this->redirectToRoute('FinaliserFiche') ;
    }

############################## Modifier Fiche ##############################

    /**
     * @Route("/visiteur/modifier-fraisforfais", name="ModifFrais")
     */
    public function modFrais(): Response
    {
        session_start();
        ModeleGSB::updFraisForfais( $_POST['id'], $_POST['quantite'] );
        return $this->redirectToRoute('FinaliserFiche') ;
    }   

    /**
     * @Route("/visiteur/modifier-fraishors", name="ModifHors")
     */
    public function modHors(): Response
    {
        session_start();
        ModeleGSB::updHorsForfais( $_POST['id'], $_POST['montant'], $_POST['libelle'] );
        return $this->redirectToRoute('FinaliserFiche') ;
    }   

###################################################################################
############################## Consulter Fiche Frais ##############################
###################################################################################


    /**
     * @Route("/visiteur/consulter", name="visiteurConsulter")
     */
    public function consulter(): Response
    {
        session_start();

        $modele = ModeleGSB::getFicheFrais_Mois( $_SESSION['id'], $_POST['month'] );
        $_SESSION['moisannee'] = $_POST['month'] ;

        return $this->render('visiteur/consulter.html.twig', [
            'controller_name' => 'Consulter Fiche(s) Frais',
            'mois' => $_SESSION['moisannee'],
            'FicheFrais' => $modele
        ]);
    }

}
