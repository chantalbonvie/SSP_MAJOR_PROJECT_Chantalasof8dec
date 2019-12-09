<?php

require_once("header.php");
//this is the main header different from header so there is no searching site until signed in

function make_query($connect) {
    $query = "SELECT * FROM browse_carousel
            ORDER BY browse_carousel_id ASC";
            $result = mysqli_query($connect, $query);
            return $result;
}
function make_slide_indicators($connect){
    $output = "";
    $count = 0;
    $result = make_query($connect);
    while($row = mysqli_fetch_array($result) ){
        if($count == 0){
            $output .= '
            <li data-target="#stamp_slide_show" data-slide-to="'.$count.'" class="active"></li>';
        }else{
            $output .= '
            <li data-target="#stamp_slide_show" data-slide-to="'.$count.'"></li>';
        }
        $count = $count + 1;
    }
    return $output;
}
function make_slides($connect){
    $output = '';
    $count = 0;
    $result = make_query($connect);
    while($row = mysqli_fetch_array($result)){
        if($count == 0){
            $output .= "<div class='item active'>";
        } else {
            $output .= "<div class='item'>";
        } $output .= '
            <img src="stamp_slide_show/'.$row["stamp_slide_show_stamp_image"].'"
            alt ="'.$row["stamp_slide_show_title_description"].'" />
        
            <div class="carousel-caption">
                <h3>' .$row["stamp_slide_show_country"].'</h3>
            </div>';
    $count = $count +1;
}
return $output;

?>


<div class="container">
    <h2 class="text-center">Browse Our Collection of Stamps</h2>
    <br>
    <div id="stamp_slide_show" class="carousel_slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php echo make_slide_indicators($connect); ?>
        </ol>
        <div class="carousel-inner">
            <?php echo make_slides($connect); ?>
        </div>
            <a class="left carousel-control" href="#dynamic_slide_show" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    <div>
</div>      
</div>


<?php
require_once("footer.php");
?>