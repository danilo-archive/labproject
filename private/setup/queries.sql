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

/*the query is the same depending on the console - you can edit this via php too*/