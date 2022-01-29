create database bookStoreDataBase;
use bookStoreDataBase;

create table userAccount(
	uId int not null,
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
    
--  alter table book ADD COLUMN bookDescription varchar(200) AFTER bookPrice;
 
create table bookCollection(
    bCId int not null,	
    bookCollectionName varchar(30) not null,
	bookId int not null,
    primary key(bCId),
	constraint FK_BOOKID foreign key (bookId) 
	references book(bId));

-- create table bookCart(
-- 	bCartId int not null,
--     bookCartName varchar(30) not null,
--     bookCartPrice int not null,
--     primary key(bCartId));
 drop table if exists userAccount;  
insert into userAccount values(1, 'TripleA45', 'triple@gmail.com', '4d3M0957', '0');