
    <!---includ header--->
    <?php

include("maininlud\header.php");

    ?>
 <!---endinclud header--->
<div class="container-fluid bg-dark">

<div class="row">

<img src="images\crouse.jpg" alt=" crouses bannar" style=" height:500px; width:100%; object-fit:cover;
box-shadow:10px;\">

</div>
</div>
  
  <div class="container">

<h2 class="text-center my-4" > Payment Status </h2>
<form method="post" action="">
    <div class="form-group row">
      
        <div>
        <label class="offset-sm-3 col-form-label" > Order ID:<input type="text" class="form-control mx-3"></label>
      
       <input type="submit" class="btn btn-primary mx-4" value="view" style="margin-bottom:6px;">  
       </div>
     </div>
    </form>
   </div>


   <!------including main content--->

   <div class="container mt-5">



<!----start most popular crouse 1srt card---->
<div class="row">
 <div class="col-sm-4">
  <a href="#" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
    <div class="card">
      <img src="images\pexels-tima-miroshnichenko-5118500.jpg" class="card-img-top" alt="Guitar" style="width: 300px; height: 200px;"/>
    <div class="card-body">
      <h5 class="card-title">
        Learn Guitar Easy Way
      </h5>
       <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
          when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    </div>
    <div class="card-footer">
      <p class="card-text d-inline"> Price:<small><del>& #8377 2000</del></small>
     <button type="button" class="btn btn-primary">Buy Now</button> 
    </div>
    </div>
     </a>
     </div>


    <!-----end-including main content--->
   

<!---including footer--->
<?php



include("footer.php");

    ?>
<!-----end includingfooter--->
