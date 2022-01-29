create database khintEsp;
use khintEsp;

create table Etudiants (
    Id int primary key auto_increment,
    Prenom Varchar (255) not null,
    Nom Varchar (255) not null,
    Email varchar (255) not null,
    Class Varchar (255)
);

create table Niveau_1(
    id1 int primary key auto_increment,
    Nom1 varchar (255),
    Url_file1 varchar (255)
);

create table Niveau_2(
    id2 int primary key auto_increment,
    Nom2 varchar (255),
    Url_file2 varchar (255)
);

create table Niveau_3(
    id3 int primary key auto_increment,
    Nom3 varchar (255),
    Url_file varchar (255)
);