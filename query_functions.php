<?php
function load_all_games() {
	global $db;
	$games = "SELECT name, platform, artwork, genre, rating, description, releaseDate, developer FROM GameCopy, Game";
	$load_all_games_set = mysqli_query(videogame_db, $games);
	return $load_all_games_set;
}
function get_games_genre($genre) {
	global $db;
	$game_by_genre = "SELECT name, platform, artwork, genre, rating, description, releaseDate, developer FROM GameCopy, Game WHERE Game.gameID = GameCopy.gameID AND genre = "{$genre}"";
	$game_genre_set = mysqli_query($db, $game_by_genre);
	return $game_genre_set;

}

function count_genre($id){
	global $db;
  $result = get_games_genre($id);
  mysqli_num_rows($result);
}

function get_game_console($console) {
	global $db;
	$game_console = "SELECT name, platform, artwork, genre, rating, description, releaseDate, developer FROM GameCopy, Game WHERE Game.gameID = GameCopy.gameID AND console = "{$console}"";
	$game_console_set = mysqli_query($db, $game_console);
	return $game_console_set;
}


?>
