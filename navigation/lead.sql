CREATE DATABASE leadProspect;
use leadProspect;

#adminstateur
CREATE TABLE adminstateur(
    id INT NOT NULL AUTO_INCREMENT,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    tel VARCHAR(50),
    email VARCHAR(65),
    password VARCHAR(150),
    adresse VARCHAR(150),
    ville VARCHAR(55),
    codepostal VARCHAR(50),
    PRIMARY KEY(id)

);

#Client
CREATE TABLE Client(
    idClient INT NOT NULL AUTO_INCREMENT,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    tel VARCHAR(50),
    email VARCHAR(65),
    adresse VARCHAR(150),
    ville VARCHAR(55),
    codepostal VARCHAR(50),
    propritaire LOGICAL,
    typemaison VARCHAR(50),
    consomationEnergy VARCHAR(50),
    revenuFiscal INT,
    nbFoyer INT,
    nbacteur VARCHAR(50),
    PRIMARY KEY(idClient)
);

#Enterprise

CREATE TABLE Enterprise(
    ident INT NOT NULL AUTO_INCREMENT,
    nom VARCHAR(65),
    adresse VARCHAR(100),
    ville VARCHAR(60),
    codepostal VARCHAR(20),
    pays VARCHAR(50),
    nomcontact VARCHAR(50),
    prenomcontact VARCHAR(50),
    telcontact VARCHAR(50),
    emailcontact VARCHAR(50),
    password VARCHAR(55),
    fonctioncontact VARCHAR(50),
    etat LOGICAL,
    PRIMARY KEY(ident)
);


#Commande

CREATE TABLE Commande(
    idcmd  INT NOT NULL AUTO_INCREMENT,
    livré VARCHAR(50),
    ident INT NOT NULL,
    idClient INT NOT NULL,
    PRIMARY KEY(idcmd),
    FOREIGN KEY(ident) REFERENCES Enterprise(ident),
    FOREIGN KEY(idClient) REFERENCES Client(idClient)
);


-- Insert Admin
INSERT INTO `adminstateur` (`nom`, `prenom`, `tel`, `email`, `password`, `adresse`, `ville`, `codepostal`) VALUES
('TEWOLDE', 'TEKLIT', '0695583363', 'teklitte@gmail.com', '1234', '34 Avenue de Lingenfeld', 'Torcy', '77200');

-- Insert  Clent
--18/01/2022 13:32	blanchet	Bernard	06 07 06 80 22	blanchet.bernard@gmail.com	132Bis rue du plessis bouchard	Franconville	95130	PRORIETAIRE	INDIVIDUELLE	PLUS DE 2 ANS	ELEC	2880	25000	2	
INSERT INTO `client` ( `nom`, `prenom`, `tel`, `email`, `adresse`, `ville`, `codepostal`, `propritaire`, `typemaison`, `ancienMaison`, `consomationEnergy`, `revenuFiscal`, `nbFoyer`, `date_inscrption`) VALUES 
('blanchet', 'Bernard', '06 07 06 80 22', 'blanchet.bernard@gmail.com', '132Bis rue du plessis bouchard', 'Franconville', '95130', '1', 'INDIVIDUELLE', 'PLUS DE 2 ANS', '2800', '2500', '2', current_timestamp());

-- Inset Enterprise
-- SERVICES PLUS	18 boulevard Gallieni	92230	Gennevilliers	France	SIKSIK	Ychai	06 61 83 21 13	servicepluscontact@gmail.com	Directeur

INSERT INTO `enterprise` (`nom`, `adresse`, `ville`, `codepostal`, `pays`, `nomcontact`, `prenomcontact`, `telcontact`, `emailcontact`, `password`, `fonctioncontact`, `etat`) VALUES 
('SERVICES PLUS', '18 boulevard Gallieni', '92230', 'Gennevilliers', 'France', 'SIKSIK', 'Ychai', '06 61 83 21 13', 'servicepluscontact@gmail.com', '1234', 'Directeur', 1);