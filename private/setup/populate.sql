insert into Game(gameID, name, artwork, genre, rating, description, releaseDate, developer, price)
    values(1, "MarioKart", "someimg.txt", "Racing", 5, "this is a description lol", "2003-01-02", "Nintendo", "49");
    
insert into GameCopy(copyID, gameID, platform, damageValue)
    values(1, 1, "Nintendo Switch", 42.50);
    
insert into Member(memberId, fname, lname, email)
    values (1, "Hannah", "Paulding", "hannah.paulding@email.com");
    
insert into Rental (rentalID, copyID, memberID, dateBorrowed, dateDue)
    values (1,1,1,'2018-12-1', '2018-12-22');
    
insert into Game(gameID, name, artwork, genre, rating, description, releaseDate, developer, price)
    values(1, "MarioKart", "someimg.txt", "Racing", 5, "this is a description lol", "2003-01-02", "Nintendo", "49");
    
/* Members */
insert into Member(memberId, fname, lname, email)
    values (1, "Hannah", "Paulding", "hannah.paulding@email.com");
    
insert into Member(memberId, fname, lname, email)
    values (2, "", "Paulding", "hannah.paulding@email.com");