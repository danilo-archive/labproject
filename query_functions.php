<?php
    require_once('db.php');
    global $db;
    function load_all_games() {
        global $db;
        $games = "SELECT name, platform, artwork, genre, rating, description, releaseDate, developer FROM GameCopy, Game";
        $load_all_games_set = mysqli_query($db, $games);
        return $load_all_games_set;
        release_result($load_all_games_set);

    }
    function get_genre_set($genre) {
        global $db;

        $game_by_genre = "SELECT name, platform, artwork, genre, rating, description, releaseDate, developer FROM GameCopy, Game WHERE Game.gameID = GameCopy.gameID AND genre = {$genre}";
        $game_genre_set = mysqli_query($db, $game_by_genre);
        return $game_genre_set;
        release_result($game_genre_set);


    }

    function count_genre($id){
        global $db;

        $result = get_genre_set($id);
        if($result == false){
            $no_games = 0;
        }
        else {
            $no_games = mysqli_num_rows($result);
        }
        release_result($result);
        return $no_games;
    }

    function get_game_console($console) {
        global $db;

        $game_console = "SELECT name, platform, artwork, genre, rating, description, releaseDate, developer FROM GameCopy, Game WHERE Game.gameID = GameCopy.gameID AND console = {$console}";
        $game_console_set = mysqli_query($db, $game_console);
        return $game_console_set;
        release_result($game_console_set);

    }
    function get_games_by_genre($genre) {
        $result = get_genre_set($genre);
        while($game = mysqli_fetch_assoc($result)) {
            load_one_game($game);
        }
        release_result($result);
    }

    function game_is_available($game) {
        global $db;
        $query = "SELECT * FROM GameCopy WHERE {$game['name']} == GameCopy.name";
        $result = mysqli_query($db, $query);
        if(!$result) {
            $boolean = false;
        }
        else {
            $boolean = true;
        }
        release_result($result);
        return $boolean;
    }
    function release_result($result_set){
        if(!$result_set==false){
        mysqli_free_result($result_set);
        }
    }
    ?>
