<?php
function load_one_game($game){
    $id = $game['gameID'];
  $title = $game['name'];
  $image = $game['artwork'];
  $rating = $game['rating'];
  $platform = $game['platform'];

echo "<div class='product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12'>";
echo "  <div class='product__thumb'>";
echo "    <!--Change data target to reflect the right details modal-->";
    echo "    <a class='first__img' data-target='#modalID' data-toggle='modal' href='single-product.html'>";
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



echo "  </div>";


}
?>
