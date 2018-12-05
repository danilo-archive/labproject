<?php
function load_all_games() {
}
function get_games_genre($id) {}

function count_genre($id){
  $result = get_games_genre($id);
  mysqli_num_rows($result);
}
 ?>
