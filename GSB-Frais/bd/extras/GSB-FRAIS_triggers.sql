
CREATE TRIGGER GSB_FRAIS_INSERT
BEFORE INSERT ON Visiteur
FOR EACH ROW
SET
  NEW.nom = AES_ENCRYPT(NEW.nom, 'bob'),
  NEW.prenom = AES_ENCRYPT(NEW.prenom, 'bob'),
  NEW.login = AES_ENCRYPT(NEW.login, 'bob'),
  NEW.mdp = SHA2(NEW.mdp, 256),
  NEW.adresse = AES_ENCRYPT(NEW.adresse, 'bob'),
  NEW.cp = AES_ENCRYPT(NEW.cp, 'bob'),
  NEW.ville = AES_ENCRYPT(NEW.ville, 'bob');

CREATE TRIGGER GSB_FRAIS_UPDATE
BEFORE UPDATE ON Visiteur
FOR EACH ROW
SET
  NEW.nom = AES_ENCRYPT(NEW.nom, 'bob'),
  NEW.prenom = AES_ENCRYPT(NEW.prenom, 'bob'),
  NEW.login = AES_ENCRYPT(NEW.login, 'bob'),
  NEW.mdp = SHA2(NEW.mdp, 256),
  NEW.adresse = AES_ENCRYPT(NEW.adresse, 'bob'),
  NEW.cp = AES_ENCRYPT(NEW.cp, 'bob'),
  NEW.ville = AES_ENCRYPT(NEW.ville, 'bob');