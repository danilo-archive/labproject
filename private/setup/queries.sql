/*Query to list all games currently loaded in the database*/
select name, platform, artwork, genre, rating, description, releaseDate, developer from GameCopy, Game
where Game.gameID = GameCopy.gameID;

/*Query to list all racing games*/
select name, platform, artwork, genre, rating, description, releaseDate, developer from GameCopy, Game 
where Game.gameID = GameCopy.gameID AND genre = "Racing";

