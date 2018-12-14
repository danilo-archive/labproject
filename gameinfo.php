
<?php
     require_once('db.php');
function load_details($game){
    $id = $game['gameID'];
    $title = $game['name'];
    $image = $game['artwork'];
    $rating = $game['rating'];
    $platform = $game['platform'];
    $genre = $game['genre'];
    $description= $game['description'];
    $releaseDate =$game['releaseDate'];
    $developer =$game['developer'];

    echo "<div aria-hidden='true' aria-labelledby='modalLabel' class='modal fade' id='{$title}' role='dialog' tabindex='-1'>";
    echo "<div class='modal-dialog' role='document'>";
    echo "<div class='modal-content'>";
    echo "<div class='modal-header'>";
    echo "<h5 class='modal-title' id='modalLabel'>{$title}</h5><button aria-label='Close' class='close' data-dismiss='modal' type='button'><span aria-hidden='true'>&times;</span></button>";
    echo "</div>";
    echo "<div class='modal-body'>";
    echo "<br>";
    echo "<!-- Availability Flag (change color to red when not available) -->";
    if(gamecopy_is_available($id)){
        echo "<div style=' text-align: center; font-size: 30px; color: green;'>";
        echo "<i class='fas fa-flag'></i> <b>AVAILABLE</b>";
        echo "</div><br>";
    }
    else {
        echo "<div style=' text-align: center; font-size: 30px; color: red;'>";
        echo "<i class='fas fa-flag'></i> <b>UNAVAILABLE</b>";
        echo "</div><br>";
    }
    echo "<div><img src='images/game_icons/{$image}' style='width: 100%; height:100%;'></div><!-- Start info table -->";
    echo "<div>";
    echo "<table class='table'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th scope='col'>#ID</th>";
    echo "<th scope='col'>Year</th>";
    echo "<th scope='col'>Publisher</th>";
    echo "<th scope='col'>Genre</th>";
    echo "<th scope='col'>Platforms</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    echo "<tr>";
    echo "<th scope='row'>1</th>";
    echo "<td>{$releaseDate}</td>";
    echo "<td>{$title}</td>";
    echo "<td>{$genre}</td>";
    echo "<td>{$platform}</td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
    echo "</div><!-- End info table-->";
    echo "<br>";
    echo "<br>";
    echo "<!-- Start Description-->";
    echo "<div>";
    echo "<h5>THE GAME</h5><br>";
    echo "<p style='font-size:18px;'>{$description}</p>";
    echo "</div><!-- End Description-->";
    echo "<br>";
    echo "<br>";
    echo "<!-- Start links to reviews-->";
    echo "<div>";
    echo "<h5>REVIEW LINKS <i class='fas fa-link'></i></h5><br>";
    echo "<ul class='list-group .list-group-flush'>";
    echo "<li class='list-group-item'>";
    echo "<a href='https://uk.ign.com/games/grand-theft-auto-v' style='font-size:16px;' target='_blank'><b>IGN &nbsp;&nbsp;&nbsp;</b> <i class='fas fa-star-half-alt'></i></a>";
    echo "</li>";
    echo "</ul>";
    echo "</div><!-- End links to reviews-->";
    echo "</div>";
    echo "<div class='modal-footer'>";
    echo "<button class='btn btn-secondary' data-dismiss='modal' type='button'>Close</button>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div><!-- End Product details Modal-->";
}


function load_one_game($game){
    $id = $game['gameID'];
  $title = $game['name'];
  $image = $game['artwork'];
  $rating = $game['rating'];
  $platform = $game['platform'];

echo "<div class='product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12'>";
echo "  <div class='product__thumb'>";
echo "    <!--Change data target to reflect the right details modal-->";
    echo "    <a class='first__img' data-target='#{$title}' data-toggle='modal' href='single-product.html'>";
    echo add_grey_filter($id, $image);



echo "  </div>";
echo "  <div class='product__content content--center'>";
echo "    <h4><a href='single-product.html'>$title</a></h4>";
    // <ul class="prize d-flex">
    //   <li>£5.00 per day</li>
    // </ul>
echo "    <div class='action'>";
echo "      <div class='product__hover'>";
echo "        <ul class='rating d-flex'>";
        for($i=1;$i<=$rating;$i++){
          echo "<li class='on'><i class='fa fa-star'></i></li>";
        }

echo "        </ul>";
echo "      </div>";
echo "    </div>";
echo "  </div>";
    echo " </div>";
}
?>
//<!-- Start Product details Modal
//(CHANGE ID HERE AND IN data-target"" !!)
//This should also go in a separate file with php,possibly together with the entire
//product
//-->
