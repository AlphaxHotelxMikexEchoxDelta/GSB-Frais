CREATE VIEW VueConnexion
AS
    SELECT
        id,
        login,
        mdp,
        nom,
        prenom
    FROM Visiteur ;

CREATE VIEW VueLigneFraisForfait
AS
    SELECT
        LigneFraisForfait.idVisiteur AS visiteur,
        LigneFraisForfait.mois,
        LigneFraisForfait.quantite,
        FraisForfait.libelle,
        FraisForfait.montant
    FROM LigneFraisForfait
    INNER JOIN FraisForfait
    WHERE LigneFraisForfait.idFraisForfait = FraisForfait.id ;


CREATE VIEW VueFicheFraisForfait
AS
   SELECT
        FicheFrais.idVisiteur AS visiteur,
        FicheFrais.mois,
        FicheFrais.dateModif,
        FicheFrais.idEtat,
        VueLigneFraisForfait.quantite,
        VueLigneFraisForfait.libelle,
        VueLigneFraisForfait.montant
    FROM FicheFrais
    INNER JOIN VueLigneFraisForfait
    WHERE FicheFrais.mois = VueLigneFraisForfait.mois ;


CREATE VIEW VueFicheFraisHorsForfait
AS
    SELECT
        FicheFrais.idVisiteur AS visiteur,
        FicheFrais.mois,
        FicheFrais.dateModif,
        FicheFrais.idEtat,
        LigneFraisHorsForfait.date,
        LigneFraisHorsForfait.libelle,
        LigneFraisHorsForfait.montant
    FROM FicheFrais
    INNER JOIN LigneFraisHorsForfait
    WHERE FicheFrais.mois = LigneFraisHorsForfait.mois ;