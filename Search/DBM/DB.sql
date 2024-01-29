create database if not exists parole;
use parole;

create table if not exists ricerche(
    id int not null auto_increment primary key,
    word varchar(100)
);