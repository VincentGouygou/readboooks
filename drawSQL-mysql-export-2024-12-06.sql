CREATE TABLE 'listUsers'(
    'userId' INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    'nom' VARCHAR(255) NOT NULL,
    'prenom' VARCHAR(255) NOT NULL,
    'motdepasse' VARCHAR(255)  NOT NULL,
    'telephone' VARCHAR(255)  NOT NULL,
    'dateInscript' TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    'note' BIGINT NOT NULL,
    'email' VARCHAR(255) NOT NULL,
    
);
CREATE TABLE listLivres(
    idLivre INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    useridProprio BIGINT NOT NULL,
    UseridPossess BIGINT NOT NULL,
    dispo BINARY(16) NOT NULL,
    titre VARCHAR(255) NOT NULL,
    format VARCHAR(255) NOT NULL,
    auteur VARCHAR(255) NOT NULL,
    synopsis VARCHAR(255) NOT NULL,
    prixCaution BIGINT NOT NULL,
    couvThumbnail VARCHAR(255) NOT NULL,
    themes BIGINT NOT NULL,
    note BIGINT NOT NULL,
    nbrPages BIGINT NOT NULL
);
ALTER TABLE
    `listLivres` ADD INDEX `listlivres_useridproprio_index`(`useridProprio`);
ALTER TABLE
    `listLivres` ADD INDEX `listlivres_useridpossess_index`(`UseridPossess`);
CREATE TABLE `listThemes`(
    `idTheme` BIGINT NOT NULL,
    `nom` VARCHAR(255) NOT NULL,
    PRIMARY KEY(`idTheme`)
);
CREATE TABLE `listLivresLusParUserId`(
    `userId` BIGINT NOT NULL,
    `idLivres` BIGINT NOT NULL,
    PRIMARY KEY(`userId`)
);
ALTER TABLE
    `listLivresLusParUserId` ADD INDEX `listlivreslusparuserid_idlivres_index`(`idLivres`);
CREATE TABLE `listLivresProposesParUserId`(
    `userId` BIGINT NOT NULL,
    `idLivres` BIGINT NOT NULL,
    PRIMARY KEY(`userId`)
);
ALTER TABLE
    `listLivresProposesParUserId` ADD INDEX `listlivresproposesparuserid_idlivres_index`(`idLivres`);
CREATE TABLE `listCommentaires`(
    `idComment` BIGINT NOT NULL,
    `idLivre` BIGINT NOT NULL,
    `userId` BIGINT NOT NULL,
    `commentaire` VARCHAR(255) NOT NULL,
    `dateCommentaire` DATE NOT NULL,
    PRIMARY KEY(`idComment`)
);
CREATE TABLE `listAuteur`(
    `auteur 1` VARCHAR(255) NOT NULL,
    PRIMARY KEY(`auteur 1`)
);
CREATE TABLE `list format`(
    `poche` BINARY(16) NOT NULL,
    `normal` BINARY(16) NOT NULL,
    PRIMARY KEY(`poche`)
);
CREATE TABLE `moderateur`(
    `name` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `code` VARCHAR(255) NOT NULL
);
ALTER TABLE
    `listLivres` ADD CONSTRAINT `listlivres_auteur_foreign` FOREIGN KEY(`auteur`) REFERENCES `listAuteur`(`auteur 1`);
ALTER TABLE
    `listLivres` ADD CONSTRAINT `listlivres_format_foreign` FOREIGN KEY(`format`) REFERENCES `list format`(`poche`);
ALTER TABLE
    `listLivres` ADD CONSTRAINT `listlivres_useridproprio_foreign` FOREIGN KEY(`useridProprio`) REFERENCES `listUsers`(`nom`);
ALTER TABLE
    `listLivres` ADD CONSTRAINT `listlivres_useridpossess_foreign` FOREIGN KEY(`UseridPossess`) REFERENCES `listUsers`(`nom`);
ALTER TABLE
    `listLivres` ADD CONSTRAINT `listlivres_format_foreign` FOREIGN KEY(`format`) REFERENCES `list format`(`normal`);
ALTER TABLE
    `listLivres` ADD CONSTRAINT `listlivres_themes_foreign` FOREIGN KEY(`themes`) REFERENCES `listThemes`(`idTheme`);
ALTER TABLE
    `listLivresLusParUserId` ADD CONSTRAINT `listlivreslusparuserid_idlivres_foreign` FOREIGN KEY(`idLivres`) REFERENCES `listLivres`(`idLivre`);
ALTER TABLE
    `listLivresProposesParUserId` ADD CONSTRAINT `listlivresproposesparuserid_idlivres_foreign` FOREIGN KEY(`idLivres`) REFERENCES `listLivres`(`idLivre`);
ALTER TABLE
    `listLivresProposesParUserId` ADD CONSTRAINT `listlivresproposesparuserid_userid_foreign` FOREIGN KEY(`userId`) REFERENCES `listUsers`(`userId`);
ALTER TABLE
    `listUsers` ADD CONSTRAINT `listusers_userid_foreign` FOREIGN KEY(`userId`) REFERENCES `listLivresLusParUserId`(`userId`);
ALTER TABLE
    `listLivres` ADD CONSTRAINT `listlivres_note_foreign` FOREIGN KEY(`note`) REFERENCES `listCommentaires`(`commentaire`);