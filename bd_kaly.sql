create table categorie(
    idCategorie int primary key AUTO_INCREMENT,
    NomCategorie varchar(20)
);

insert into categorie values (1,'Kaly maraina');
insert into categorie values (2,'Tsakitsaky');
insert into categorie values (3,'Kaly atoandro');
insert into categorie values(4,'Kaly hariva');


create table plat(
    idPlat int primary key AUTO_INCREMENT,
    nomPlat varchar(20),
    prixPlat int,
    idCategorie int,
    photoPlat varchar(20),
    foreign key (idCategorie) references categorie(idCategorie)
);

insert into plat values (1,'Vary sosoa sy kitoza',2500,1,'1.JPG');
insert into plat values (2,'Dite sy mofo gasy',500,1,'2.JPG');

insert into plat values (3,'Menakely',500,2,'3.JPG');
insert into plat values (4,'Gateau',5000,2,'4.JPG');

insert into plat values (5,'Henakisoa sy tsaramaso',7000,3,'5.JPG');
insert into plat values (6,'Akoho gasy rony',6000,3,'6.JPG');

insert into plat values (9,'Lasopy',4500,4,'7.JPG');
insert into plat values (10,'Vary amin anana',1500,4,'8.JPG');


create table admin(
    idAdmin int,
    login varchar(25),
    motdepasse varchar(25)
);

insert into admin values (1,'admin','admin');
insert into admin values (2,'haja','faniry');


create table menu(
    idMenu int  primary key AUTO_INCREMENT,
    nomMenu varchar(50)
);

insert into menu values (1,'Acceuil');
insert into menu values (2,'A propos');
insert into menu values (3,'Restaurant');
insert into menu values (null,'Contact');


commit;