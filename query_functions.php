<?php
    require_once('db.php');
    require_once('rentalsinfo.php');
    global $db;
    function load_all_games() {
        global $db;
        $query = "SELECT GameCopy.gameID, name, platform, artwork, genre, rating, description, releaseDate, developer FROM GameCopy, Game GROUP BY name";
        $load_all_games_set = mysqli_query($db, $query);
        return $load_all_games_set;
        release_result($load_all_games_set);

    }

    function load_all_users() {
        global $db;
        $query = "SELECT memberID, fname, lname, role FROM Member";
        $load_all_users_set = mysqli_query($db, $query);
        return $load_all_users_set;
        release_result($load_all_users_set);
    }

    function load_all_rentals() {
        global $db;
        $query = "SELECT rentalID, Member.memberID, GameCopy.copyID, Game.name, fname, lname, artwork, dateBorrowed, dateDue FROM Game, GameCopy, Rental, Member WHERE Game.gameID=GameCopy.gameID AND GameCopy.copyID=Rental.copyID AND Member.memberId=Rental.memberID";
        $load_all_users_set = mysqli_query($db, $query);
        return $load_all_users_set;
        release_result($load_all_users_set);
    }



    function get_genre_set($genre) {
        global $db;

        $game_by_genre = "SELECT DISTINCT GameCopy.gameID, name, platform, artwork, genre, rating, description, releaseDate, developer FROM GameCopy, Game WHERE Game.gameID = GameCopy.gameID AND genre = '{$genre}' GROUP BY name";
        $game_genre_set = mysqli_query($db, $game_by_genre);
        return $game_genre_set;
        release_result($game_genre_set);
    }

    function count_genre($genre){
        global $db;
        $result = get_genre_set($genre);
        if(!$result == false){
            $no_games =  mysqli_num_rows($result);
        }
        else {
            $no_games = 0;
        }
        release_result($result);
        return $no_games;
    }

    function get_game_console($console) {
        global $db;

        $game_console = "SELECT name, platform, artwork, genre, rating, description, releaseDate, developer FROM GameCopy, Game WHERE Game.gameID = GameCopy.gameID AND console = '{$console}'";
        $game_console_set = mysqli_query($db, $game_console);
        return $game_console_set;
        release_result($game_console_set);

    }

    function get_games($filter) {
        if($filter==""){
            $result = load_all_games();

        }
        else{
            $result = get_genre_set($filter);
        }
        while($game = mysqli_fetch_assoc($result)) {
            load_one_game($game);
            load_game_details($game);
        }
    }

    function get_users() {
            $result = load_all_users();
        if(!$result){}
        else{
        while($user = mysqli_fetch_assoc($result)) {
            load_one_user($user);
        }
    }
    }

    function get_rentals() {
        $result = load_all_rentals();
        if(!$result){}
        else{
        while($rental = mysqli_fetch_assoc($result)) {
            load_one_rental($rental);
        }
    }
    }

    function change_user($userID, $role) {
        global $db;
        $query = "UPDATE Member SET role = '{$role}' WHERE memberID = '{$userID}';";
        $query_successful = mysqli_query($db, $query);
        if(!$query_successful) {
            return false;
        }
        else {
            return true;
        }
    }

    function game_is_available($id) {
        global $db;
        $query = "select GameCopy.copyID, gameID, platform, damageValue from GameCopy,";
        $query .= "(select GameCopy.copyID from GameCopy";
        $query .= "where GameCopy.copyID not in";
        $query .= "(select GameCopy.copyID from GameCopy, Rental";
        $query .= "  where Rental.copyID=GameCopy.copyID)) as AvailableGames";
        $query .= "where GameCopy.copyID = AvailableGames.copyID";
        $query .= "AND gameID = '{$id}'";
        $result = mysqli_query($db, $query);
        if(is_null($result)) {
            $boolean = false;
        }
        else {
            $boolean = true;
        }
        release_result($result);
        return $boolean;
    }

    function gamecopy_is_available($id) {
        global $db;
        $query = "select GameCopy.copyID, gameID, platform, damageValue from GameCopy,";
        $query .= "(select GameCopy.copyID from GameCopy";
        $query .= "where GameCopy.copyID not in";
        $query .= "(select GameCopy.copyID from GameCopy, Rental";
        $query .= "  where Rental.copyID=GameCopy.copyID)) as AvailableGames";
        $query .= "where GameCopy.copyID = AvailableGames.copyID";
        $query .= "AND GameCopy.copyID = '{$id}'";
        $result = mysqli_query($db, $query);
        if(is_null($result)) {
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
    function add_grey_filter($id, $image){
        if(game_is_available($id)==false){
            return "<img style='opacity: 0.5; filter: grayscale(100%)' alt='product image' src='images/game_icons/{$image}'></a>";
        }
        else{
            return "<img style='' alt='product image' src='images/game_icons/{$image}'></a>";
        }
    }
    ?>
