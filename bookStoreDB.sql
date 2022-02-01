create database bookStoreDataBase;
use bookStoreDataBase;

create table userAccount(
	uId int not null AUTO_INCREMENT,
    userName varchar(30),
    userEmail varchar(60) not null,
    userPassword varchar(30) not null,
    userStatus int,
    primary key(uId));

create table book(
	bId int not null,
    bookName varchar(30) not null,
    bookPrice int not null,
    bookDescription varchar(200),
    bookType varchar(10) not null,
    bookRating double,
	primary key(bId));

 drop table if exists userAccount;  
insert into userAccount(userName, userEmail, userPassword, userStatus) values('TripleA45', 'triple@gmail.com', '4d3M0957', '0');