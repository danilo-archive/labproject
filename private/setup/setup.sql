create database videogame_db;
use videogame_db;

create table Game(
    gameID int(11) unsigned auto_increment primary key,
    name varchar(255) not null,
    artwork varchar(255) not null,
    rating int(1),
    description varchar(255),
    releaseDate date,
    developer varchar(255),
    price int(10)
);

create table GameCopy (
    copyID int(11) unsigned auto_increment primary key,
    gameID int(11) unsigned not null,
    platform varchar(100) not null,
    damageValue double not null,
    foreign key (gameID) references Game(gameID)
);

create table Member (
    memberID int(11) unsigned auto_increment primary key,
    fname varchar(50) not null,
    lname varchar(50) not null,
    email varchar(254) not null
);

create table Rental (
    rentalID int(11) unsigned auto_increment primary key,
    copyID int(11) unsigned not null,
    memberID int(11) unsigned not null,
    dateBorrowed date,
    dateDue date,
    
    foreign key (copyID) references GameCopy(copyID),
    foreign key (memberID) references Member(memberID)
);

insert into Game(gameID, name, artwork, rating, description, releaseDate, developer, price)
    values(1, "MarioKart", "someimg.txt", 5, "this is a description lol", "2003-01-02", "Nintendo", "49");
    
insert into GameCopy(copyID, gameID, platform, damageValue)
    values(1, 1, "Nintendo Switch", 42.50);
    
insert into Member(memberId, fname, lname, email)
    values (1, "Hannah", "Paulding", "hannah.paulding@email.com");
    
insert into Rental (rentalID, copyID, memberID, dateBorrowed, dateDue)
    values (1,1,1,'2018-12-1', '2018-12-22');