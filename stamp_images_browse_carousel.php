<?php
require_once("header.php");

//print_r($_SESSION);

?>
  <style>
  /* Make sets size of carousel */
  .carousel-inner img {
    width: 75%;
    height:75%;
  }

#stampinfoshell {
  margin-top: 10px;
  margin-bottom: 20px;
  padding: 10px;
  background: grey;
  border-style: solid;
}

#stampinfo {
  align: center;
  color: black;
}



</style>

<table>
  <tr>
  <td>
  <div class = "col-12">
    <div claass = "col-4">
    <div id="stampinfoshell">

        <div class="container mt-3">
            <div id="myCarousel" class="carousel slide">

<!-- Indicators  of what is going on-->
              <ul class="carousel-indicators">
                <li class="item1 active"></li>
                <li class="item2"></li>
                <li class="item3"></li>
              </ul>
                            
<!-- The slideshow information -->

              <div class="carousel-inner">
                <div class="carousel-item active">
                <p style="text-align:center;"><img src="/images/disney/disneysheetshows.jpg" class="centerImage" alt="Disney" height="120" width="350"></p>
                </div>
                <div class="carousel-item">
                <p style="text-align:center;"><img src="/images/greece/greeceeuropacoin.jpg" class="centerImage" alt="Greece" height="120" width="350"></p>
                </div>
                <div class="carousel-item">
                 <p style="text-align:center;"><img src="/images/greece/greeceeuropahellas.jpg" class="centerImage" alt="Greece" height="120" width="350"></p>
                </div>
              </div>
                          
 <!-- Left and right carousel controls -->
              <div class="carouselcontrols">
              <a class="carousel-control-prev" href="#myCarousel">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#myCarousel">
                <span class="carousel-control-next-icon"></span>
              </a>
              </td>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-8">

    <td>Country</td>
    <td>Cost</td>
    <td>Description</td>
  </tr>
</table>
</div>


<br>
<br>





<script>
$(document).ready(function(){
  // Activate Carousel
  $("#myCarousel").carousel();
    
  // Enable Carousel Indicators
  $(".item1").click(function(){
    $("#myCarousel").carousel(0);
  });
  $(".item2").click(function(){
    $("#myCarousel").carousel(1);
  });
  $(".item3").click(function(){
    $("#myCarousel").carousel(2);
  });
    
  // Enable Carousel Controls
  $(".carousel-control-prev").click(function(){
    $("#myCarousel").carousel("prev");
  });
  $(".carousel-control-next").click(function(){
    $("#myCarousel").carousel("next");
  });
});
</script>

</body>
</html>





<?php
require_once("footer.php");
?>