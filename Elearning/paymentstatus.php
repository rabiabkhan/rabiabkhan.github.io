
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
<!---including footer--->



<!-----start contact us --->

<?php

include("contactus.php");

?>



<!-----End contact us --->
<?php

include("footer.php");

    ?>
<!-----end includingfooter--->
