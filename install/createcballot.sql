CREATE DATABASE cballot;
USE cballot;

CREATE TABLE `person` (
    `idperson` BIGINT AUTO_INCREMENT NOT NULL ,
    `email` VARCHAR(30)  NOT NULL ,
    `password` VARCHAR(128)  NOT NULL ,
    `firstname` VARCHAR(30)  NOT NULL ,
    `lastname` VARCHAR(30)  NOT NULL ,
    PRIMARY KEY (
        `idperson`
    ),
    CONSTRAINT `uc_person_email` UNIQUE (
        `email`
    )
);

CREATE TABLE `question` (
    `idquestion` BIGINT AUTO_INCREMENT NOT NULL ,
    `idcampaign` BIGINT  NOT NULL ,
    `label` VARCHAR(140)  NOT NULL ,
    PRIMARY KEY (
        `idquestion`
    )
);

CREATE TABLE `vote` (
    `idchoice` BIGINT  NOT NULL ,
    `emailsent` BOOLEAN  NOT NULL ,
    `votedate` DATETIME  NOT NULL ,
    PRIMARY KEY (
        `votedate`
    )
);

CREATE TABLE `campaign` (
    `idcampaign` BIGINT AUTO_INCREMENT NOT NULL ,
    `idorganization` BIGINT  NOT NULL ,
    `name` VARCHAR(30)  NOT NULL ,
    `startdate` DATETIME  NOT NULL ,
    `enddate` DATETIME  NOT NULL ,
    PRIMARY KEY (
        `idcampaign`
    )
);

CREATE TABLE `option` (
    `idoption` BIGINT AUTO_INCREMENT NOT NULL ,
    `idquestion` BIGINT  NOT NULL ,
    `name` VARCHAR(30)  NOT NULL ,
    PRIMARY KEY (
        `idoption`
    )
);

CREATE TABLE `organization` (
    `idorganization` BIGINT AUTO_INCREMENT NOT NULL ,
    `idorganizer` BIGINT  NOT NULL ,
    `name` VARCHAR(30)  NOT NULL ,
    PRIMARY KEY (
        `idorganization`
    )
);

CREATE TABLE `retention` (
    `idretention` BIGINT AUTO_INCREMENT NOT NULL ,
    `email` VARCHAR(30)  NOT NULL ,
    `firstname` VARCHAR(30)  NOT NULL ,
    `lastname` VARCHAR(30)  NOT NULL ,
    PRIMARY KEY (
        `idretention`
    )
);

CREATE TABLE `email` (
    `idcampaign` BIGINT  NOT NULL ,
    `voted` BOOL  NOT NULL ,
    `voterkey` BIGINT  NOT NULL ,
    PRIMARY KEY (
        `voterkey`
    )
);

ALTER TABLE `question` ADD CONSTRAINT `fk_question_idcampaign` FOREIGN KEY(`idcampaign`)
REFERENCES `campaign` (`idcampaign`);

ALTER TABLE `vote` ADD CONSTRAINT `fk_vote_idchoice` FOREIGN KEY(`idchoice`)
REFERENCES `option` (`idoption`);

ALTER TABLE `campaign` ADD CONSTRAINT `fk_campaign_idorganization` FOREIGN KEY(`idorganization`)
REFERENCES `organization` (`idorganization`);

ALTER TABLE `option` ADD CONSTRAINT `fk_option_idquestion` FOREIGN KEY(`idquestion`)
REFERENCES `question` (`idquestion`);

ALTER TABLE `organization` ADD CONSTRAINT `fk_organization_idorganizer` FOREIGN KEY(`idorganizer`)
REFERENCES `person` (`idperson`);

ALTER TABLE `email` ADD CONSTRAINT `fk_email_idcampaign` FOREIGN KEY(`idcampaign`)
REFERENCES `campaign` (`idcampaign`);

