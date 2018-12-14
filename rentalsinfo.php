<?php
    require_once('db.php');
    function load_one_user($user){
        $id = $user['memberID'];
        $name = $user['fname'].' '.$user['lname'];
        $type = $user['role'];
        echo"<tr data-target='#{$id}}' data-toggle='modal' style='font-size:20px;'</tr>";
        echo"<td align='center' width='10'><i class='fa fa-2x fa-hammer'></i></td>";
        echo"<td><b>{$name}</b><br></td>";
        echo"<td>{$type}</td>";
}


function load_one_rental($rental){
    $rentalID = $rental['rentalID'];
    $game = $rental['name'];
    $memberfname = $rental['fname'];
    $memberlname = $rental['lname'];
    echo"<tr data-target='#resModalId1' data-toggle='modal' style='font-size:20px;'>";
    echo"<td align='center' width='10'><i class='fa fa-2x fa-gamepad'></i> <span style='color:black; font-size:20px;'><i class='fab fa-playstation'>PS4</i></span></td>";
    echo"<td><b>{$game}</b><br></td>";
    echo"<td>{$memberfname} {$memberlname}</td>";
    echo" </tr>";
    }

    function load_rental_details($rental) {
        echo"<div aria-hidden='true' aria-labelledby='exampleModalLabel' class='modal fade' id='resModalId1' role='dialog' tabindex='-1'>";
        echo"<div class='modal-dialog' role='document'>";
        echo"<div class='modal-content'>";
        echo"<div class='modal-header'>";
        echo"<h5 class='modal-title' id='exampleModalLabel'>BROFORCE - SAL FRANCIS</h5><button aria-label='Close' class='close' data-dismiss='modal' type='button'><span aria-hidden='true'>&times;</span></button>";
        echo"</div>";
        echo"<div class='modal-body'>";
        echo"<br>";
        echo"<!-- Availability Flag (change color to red when not available) -->";
        echo"<div style=' text-align: center; font-size: 30px; color: red;'>";
        echo"<i class='fas fa-flag'></i> <b>OVERDUE</b>";
        echo"<p>10 days</p>";
        echo"</div><br>";
        echo"<div><img src='images/game_icons/14.jpg' style='width: 100%; height:100%;'></div><br>";
        echo"<br>";
        echo"<!-- Start rental Details-->";
        echo"<div style='font-size:18px;'>";
        echo"<ul class='list-group .list-group-flush'>";
        echo"<li style='list-style: none; display: inline'>";
        echo"<h5>DETAILS</h5><br>";
        echo"</li>";
        echo"<li class='list-group-item'><b>RENTAL START</b>: &nbsp;10:12:55 &nbsp;&nbsp; 10-10-2018</li>";
        echo"<li class='list-group-item'><b>RENTAL END</b>: &nbsp;&nbsp; &nbsp; 10:12:55 &nbsp;&nbsp; 15-11-2018</li>";
        echo"<li class='list-group-item'><b>DAYS BEFORE BAN</b>: 7</li></ul></div><!-- End Details--><br><br><!-- Start settings manipulation--><div>";
        echo"<h5>EDIT RENTAL &nbsp;&nbsp;<i class='fas fa-calendar'></i></h5><br>";
        echo"<ul class='list-group .list-group-flush'>";
        echo"<li class='list-group-item'><b>RENTAL END</b> <input name='end of rental' required='required' type='date'></li></ul>";
        echo"</div><!-- End links to reviews--></div><div class='modal-footer'><button class='btn btn-secondary' data-dismiss='modal' type='button'>Close</button></div></div></div></div>";
    }
?>
