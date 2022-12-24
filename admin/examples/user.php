
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
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="user-profile">
  <div class="wrapper ">
    <?php
        include('../php/side-topbar.php');
    ?>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <!-- <div class="col-md-8"> -->
            <div class="card">
              <div class="card-header">
                <h5 class="title">Edit Profile</h5>
              </div>
              <div class="card-body">
                <form method="post" id="simple-form">
                <div id="err-msg"></div>
                  <div class="row">
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Username" id="name">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" id="email">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>verified</label>
                        <select name="department" id="verified" class="form-control">
                          <option value="" disabled>Select</option>
                          <option value="1">verified</option>
                          <option value="0">not verified</option>
                        </select>
                      </div>
                    </div>
                   
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                      <p id="process"></p>
                        <input type="submit" value="Create account" id="create" class="btn btn-primary btn-glow">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          <!-- </div> -->
         
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
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>
<script>
   setInterval(() => {
        session();
      }, 1000);
      session();
      function session(){
        $.ajax({
                    url:"../php/session.php",
                    method:"POST",
                    success:function(data){
                      if(data != 'goon'){
                        window.location = "../../index.php";
                      }
                
                         }
                })
      }
create();
function create(){
  $('#create').on('click',function(event){
    event.preventDefault();
    name = $('#name').val();
    email = $('#email').val();
    password = $('#password').val();
    ver = $('#verified').val();
    if(name==''&&email==''&&password==''&&ver == ""){
      $('#err-msg').html('<div class="alert alert-danger">All feilds required</div>')
    }
    else{
    $(this).hide();
    $('#process').html('please wait processing');
    form_data = $('#simple-form').serialize();
    $.ajax({
           url:"../php/create-user.php",
           method:"POST",
           data:form_data,
           success:function(data){
              if(data == "user exists")
              {
                $('#err-msg').html('<div class="alert alert-danger"> Users exits", Aldredy user for Jewel!</div>')
               
                $('#process').html('');
                $('#simple-form').trigger('reset');
                $('#create').show();
              }
             else if(data == "success"){
              $('#err-msg').html('<div class="alert alert-success">Accounted created!</div>')
               
                $('#process').html('');
                $('#simple-form').trigger('reset');
                $('#create').show();
              }
              else{
                $('#err-msg').html('<div class="alert alert-danger">something went wrong</div>')
                $('#process').html('');
                $('#create').show();   
              }
              
            
           }
          })
        }
  })
}
</script>
</html>