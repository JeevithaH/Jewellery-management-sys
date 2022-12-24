<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Now UI Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
    name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
      <div class="row">
        <div class="card 1">
          <div class="card-header ">
            product
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
          create product
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary" type="button" id="view">Veiw All</button>
          </div>
        </div>
        <div class="card-body ">
          <form id="prod">
            <div id="err-msg"></div>
            <div class="form-group">

              <label>product name</label>
              <input type="text" name="name" class="form-control " placeholder="Name" id="name">
            </div>
            <div class="d-flex flex-row bd-highlight mb-3">
              <div class="p-2 bd-highlight"><input type="number" name="mrp" id="mrp" placeholder="MRP"
                  class="form-control" required></div>
              <div class="p-2 bd-highlight"><input type="nember" name="dis-price" id="dis-price"
                  placeholder="discount price" class="form-control" required></div>
            </div>
            <label for="" class="mr-3 mb-3">Category name</label>

            <select name="cat_id" id="cat_id" class="form-control-sm">
              <?php
            require "../../config/pdoconfig.php";
            $query = "select * from category";
            $statement = $connection->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            if ($result) {
              echo '<option value="">select category</option>';
              foreach ($result as $row) {
                echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
              }
            } else {
              echo '<option value="">Add movies</option>';
            }
            ?>
            </select>
            <br>
            <label> image</label>
            <div class="custom-file">

              <input type="file" class="custom-file-input mt-2" id="inputGroupFile01">
              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
            <div class="form-group">
              <label>details</label>
              <textarea class="form-control" placeholder="details" id="details"></textarea>
            </div>
            <p id="ld">loading...</p>
            <input type="button" value="Create Product" name="submit" id="submit" class="btn btn-primary">
          </form>
        </div>
      </div>
    </div>
    <?php
    include('../php/side-topbar.php');
    ?>
  </div>
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

  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>
<script>
  $(document).ready(function () {
    $(document).ready(function () {
      $('.2').hide()
      $('#ld').hide()
      create();
      $('#view').on('click', function () {
        $('.2').hide()
        $('.1').show()
      })
      $('#create').on('click', function () {
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
          name = $('#name').val()
          mrp = $('#mrp').val()
          dis = $('#dis-price').val()
          cat_id = $('#cat_id').val()
          det = $('#details').val()
          image = $('#inputGroupFile01').val()
          var files = $('#inputGroupFile01')[0].files;
          formdata = new FormData();
          formdata.append("name", name)
          formdata.append("mrp", mrp)
          formdata.append("dis", dis)
          formdata.append("cat_id", cat_id)
          formdata.append("det", det)

          formdata.append("fileimg", files[0])
          console.log(formdata)
          if (name == '' || image == ''|| mrp==''|| dis ==''||cat_id==''||det=='') {
            $('#err-msg').html('<div class="alert alert-danger">All feilds required</div>')
          }
          else {
            $('#err-msg').html('')
            $.ajax({
              url: "../php/add-prod.php",
              method: "POST",
              data: formdata,
              contentType: false,
              processData: false,
              success: function (data) {
                $('#ld').hide()
                if (data == "done") {
                  $('#err-msg').html('<div class="alert alert-success">Product added successfully</div>')
                  fetch1()
                }
              }
            })
          }

        })
      }
      delte()
      function delte() {
        $(document).on('click', '.prod-del', function () {
          id = $(this).data('id');
          $.ajax({
            url: "../php/delete-prod.php",
            method: "POST",
            data: { id },
            success: function (data) {
              fetch1()
            }
          })
        })
      }
      fetch1()
      function fetch1() {
        $.ajax({
          url: "../php/fetch-prod.php",
          method: "POST",
          success: function (data) {
            $("#display").html(data);

          }
        })
      }

    })
  })


</script>

</html>