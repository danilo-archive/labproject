/*Query to list all games currently loaded in the database*/
select name, platform, artwork, genre, rating, description, releaseDate, developer from GameCopy, Game
where Game.gameID = GameCopy.gameID;

/*Query to list games by genre*/

select name, platform, artwork, genre, rating, description, releaseDate, developer from GameCopy, Game 
where Game.gameID = GameCopy.gameID AND genre = "...";

/*the query is the same depending on the genre - you can edit this via php*/

/*Query to list games by console*/
select name, platform, artwork, genre, rating, description, releaseDate, developer from GameCopy, Game 
where Game.gameID = GameCopy.gameID AND console = "...";

/**show games by genre*/
SELECT genre, COUNT(*) FROM Game GROUP BY genre;

select GameCopy.copyID, gameID, platform, damageValue from GameCopy, Rental
where Rental.copyID=GameCopy.copyID;


/*query to select all available GameCopies i.e. the query will list the 
copyIDs for all game copies that have NOT been rented*/

select GameCopy.copyID from GameCopy
where GameCopy.copyID not in
(select GameCopy.copyID from GameCopy, Rental
where Rental.copyID=GameCopy.copyID);

/*This will produce all gameCopy fields for all game copies that are currently available
e.g. copyID | gameID | platform | damageValue |
for ALL games available to rent*/

select GameCopy.copyID, gameID, platform, damageValue from GameCopy,
    (select GameCopy.copyID from GameCopy
    where GameCopy.copyID not in
        (select GameCopy.copyID from GameCopy, Rental
        where Rental.copyID=GameCopy.copyID)) as AvailableGames
 where GameCopy.copyID = AvailableGames.copyID;


SELECT gameID FROM Game NATURAL JOIN GameCopy GROUP BY gameID;

SELECT gameID FROM Game NATURAL JOIN GameCopy GROUP BY gameID;
