CREATE DATABASE IF NOT EXISTS webexam;
USE webexam;

create table Pays(
	idPays int not null auto_increment primary key,
	nomPays varchar(50)
);

insert into Pays  values(NULL,"Espagne");
insert into Pays values(NULL,"Abidjan");
insert into Pays values(NULL,"Australie");
insert into Pays values(NULL,"Internationale");

create table Categorie(
	idCategorie int not null auto_increment primary key,
	nomCategorie varchar(30)
);

insert into Categorie (nomCategorie) values("reportage");
insert into Categorie (nomCategorie) values("etude");
insert into Categorie (nomCategorie) values("politique");
insert into Categorie (nomCategorie) values("reunion");


create table Publication(
	idPublication int not null auto_increment primary key,
	idPays int not null,
	idCategorie int not null,
	titre varchar(500),
	resume varchar(5000),
	contenu varchar(10000),
	image varchar(50),
	datePublication varchar(10)	
);
-- //url varchar(530)
Alter table Publication add constraint foreign key (idPays)
references Pays(idPays);

Alter table Publication add constraint foreign key (idCategorie)
references Categorie(idCategorie);

INSERT INTO Publication values(NULL,4,1,"Rechauffement climatique, après le constat, les solutions: le GIEC se remet au travail","Ce lundi, 195 Etats commencent l`examen d`un nouveau rapport du groupe d`experts intergouvernemental sur le climat de l`ONU, le GIEC. Troisième et dernier volet d`un bilan global sur l`etat des connaissances scientifiques sur le changement climatique, ce nouveau rapport doit faire le point sur les solutions contre le rechauffement, dans un monde accro aux energies fossiles, grandes emettrices de gaz à effet de serre et premières responsables de la hausse des temperatures.
","Comment freiner le rechauffement de notre planète ? Alors que le monde a dejà gagne 1,1 degre depuis le debut de l`ère industrielle... Comment limiter les consequences de cette hausse des temperatures qui se font dejà durement sentir avec la multiplication des canicules, secheresses, inondations et tempêtes ? Le rapport de milliers de pages redige par des chercheurs du monde entier repond à ces questions. Il est examine à huis clos par les pays membres de l`ONU. Un resume destine aux decideurs doit être divulgue dans deux semaines. Il proposera des solutions pour transformer chaque grand secteur responsable du rechauffement climatique (energie, transport, agriculture, industrie, bâtiment), et sans aucun doute notre trop grande consommation d`energies fossiles va être pointee du doigt... Un problème qui prend une nouvelle dimension dans le contexte de la guerre en Ukraine, au moment où sont rebattues les cartes de la consommation d`energie dans le monde.Dans le premier volet de son rapport publie en août 2021, le Giec pointait du doigt l`acceleration du rechauffement, predisant que le seuil de +1,5°C par rapport à l`ère pre-industrielle pourrait être atteint dejà autour de 2030. Dans le second, publie fin fevrier, il dressait un tableau plus que sombre des impacts passes, presents et futurs sur la population et les ecosystèmes, soulignant que retarder l`action reduisait les chances d`un « avenir vivable ».Ce lundi, Antonio Guterres, secretaire general de l`ONU a d`ailleurs averti que « l`addiction aux energies fossiles nous conduit vers une destruction collective ». « Nous marchons les yeux fermes vers la catastrophe climatique », a declare Antonio Gutteres, « si nous continuons comme ça, nous pouvons dire adieu à l`objectif de 1,5°C. Celui de 2°C pourrait aussi être hors d`atteinte ».Mais il est encore temps d`agir pour eviter le pire estiment les experts.","contenu1.webp","2022-03-21");


-- Auteur , admin

create table Lecteur(
	idLecteur int not null auto_increment primary key,
	nom varchar(40),
	mail varchar(40),
	sujet varchar(200),
	message varchar(1000)
);


create table Personnel(
	idPersonnel int not null auto_increment primary key,
	nom varchar(40),
	login varchar(40),
	mdp varchar(40)
);

INSERT INTO Personnel values(NULL,"admin","admin",SHA1('admin'));
