<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    create category
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
    name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <?php
    include('../php/side-topbar.php');
    ?>
    <!-- End Navbar -->
    <div class="panel-header">

    </div>
    <div class="content">
      <div class="row">
        <div class="card 1">
          <div class="card-header ">
            category
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary" type="button" id="create">create</button>
          </div>
          </div>
          <div class="card-body ">
            <div id="display"></div>
          </div>
        </div>
      </div>
      <div class="card 2">
        <div class="card-header ">
          create category
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary" type="button" id="view">Veiw All</button>
          </div>
        </div>
        <div class="card-body ">
          <div id="err-msg"></div>
          <div class="form-group">
            <label>category name</label>
            <input type="text" name="name" class="form-control " placeholder="Name" id="name">
          </div>
          <label> image</label>
          <div class="custom-file">

            <input type="file" class="custom-file-input" id="inputGroupFile01">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
          </div>
          <p id="ld">loading...</p>
          <input type="submit" value="Create category" name="submit" id="submit" class="btn btn-primary">
        </div>
      </div>
    </div>

  </div>

  </div>
  </div>
  <?php
  include('../php/footer.php');
  ?>

  </div>
  </div>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>
<script>
  $(document).ready(function () {
    $('.2').hide()
    $('#ld').hide()
    create();
 $('#view').on('click',function(){
  $('.2').hide()
  $('.1').show()
 })
 $('#create').on('click',function(){
  $('.2').show()
  $('.1').hide()
 })
    session();
    function session() {
      $.ajax({
        url: "../php/session.php",
        method: "POST",
        success: function (data) {
          if (data != 'goon') {
            window.location = "../../index.php";
          }

        }
      })
    }
    function create() {
      $('#submit').on('click', function () {
        $('#ld').show()

        var files = $('#inputGroupFile01')[0].files;
        formdata = new FormData();
        name = $('#name').val()
        image = $('#inputGroupFile01').val()
        formdata.append('name', name)
        formdata.append("fileimg", files[0])
        if (name == '' || image == '') {
          $('#err-msg').html('<div class="alert alert-danger">All feilds required</div>')
        }
        else {
          $('#err-msg').html('')
          $.ajax({
            url: "../php/add-category.php",
            method: "POST",
            data: formdata,
            contentType: false,
            processData: false,
            success: function (data) {
              $('#ld').hide()
              if(data == "done"){
                $('#err-msg').html('<div class="alert alert-success">Category added successfully</div>')
                fetch1()
              }
            }
          })
        }

      })
    }
    delte()
  function delte(){
      $(document).on('click','.cat-del',function(){
        id = $(this).data('id');
        $.ajax({
           url:"../php/delete-cat.php",
           method:"POST",
           data:{id},
           success:function(data){
            fetch1()
           }
         })
      })
    }
    fetch1()
    function fetch1(){
                $.ajax({
                    url:"../php/fetch-cat.php",
                    method:"POST",
                    success:function(data){
                $("#display").html(data);
                
                         }
                })
              }

  })

</script>

</html>