create database bookStoreDataBase;
use bookStoreDataBase;

create table userAccount(
	uId int not null,
    userName varchar(30) not null,
    userEmail varchar(60) not null,
    userPassword varchar(30) not null,
    userStatus int,
    primary key(uId));

create table book(
	bId int not null,
    bookName varchar(30) not null,
    bookPrice int not null,
    bookType varchar(10) not null,
    bookRating double,
	primary key(bId));
    
create table bookCollection(
    bCId int not null,	
    bookCollectionName varchar(30) not null,
	bookId int not null,
    primary key(bCId),
	constraint FK_BOOKID foreign key (bookId) 
	references book(bId));

create table bookCart(
	bCartId int not null,
    bookCartName varchar(30) not null,
    bookCartPrice int not null,
    primary key(bCartId));
    
