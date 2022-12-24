<!--start including header-->
<?php
    include("./mainInclude/header.php");
?>
<!--end including header-->
<!--start logo pitcher-->
<div class ="container-fluid  ">
    <div class="row">
        <img src="./images/shopicon.jpg" alt="jewel"
        style="height:500px; width:100%; object-fit:cover;
        box-shadow:10px;"/>

<!--end logo pitcher-->
   
<div class ="container">
    <h2 class="text-center my-4">Payment Status</h2>
    <form method="post" action="">
    <div class="form-group row">
        <label class="offset-sm-3 col-form-label">Order ID:</label>
    <div>
   
        <input type="text" class="form-control mx-3">
    </div>
    <div>
        <input type="submit" class="btn btn-primary mx-4"
        value="View">
    </div>
</div>
</form>
</div>
<!--start include contact-->
<?php
include('./contact.php')
?>
<!--stop include contact-->
  <!--start including footer-->
<?php
    include("./mainInclude/footer.php")
?>
<!--end including footer-->