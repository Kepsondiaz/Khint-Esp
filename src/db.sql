create database EspKhints;
use EspKhints;

create table EspKhints(
    id int not null primary key auto_increment,
    niveau varchar(255), 
    cours varchar(255),
    nom varchar(255),
    file_url varchar(255)
);