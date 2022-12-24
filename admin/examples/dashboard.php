
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Dashboard
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

<body class="">
  <div class="wrapper ">
   <?php
        include('../php/side-topbar.php');
   ?>
      <!-- End Navbar -->
      <div class="panel-header panel-header-lg">
      <div id="piechart3d" style="width:100vh; height: 280px;"></div>
      </div>
      <div class="content">
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">New Leads</h5>
                <h4 class="card-title">New Leads</h4>
                
              </div>
              <div class="card-body">
                <h1 id="lead"></h1>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69 spin"></i> Just Updated
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Total Users</h5>
                <h4 class="card-title">Total Staff</h4>
                <h1 id="staff"></h1>
              </div>
              <div class="card-body">
                
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69 spin"></i> Just Updated
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Not Interested</h5>
                <h4 class="card-title">Not Interested</h4>
              </div>
              <div class="card-body">
                <h1 id="not-interested"></h1>
              </div>
              <div class="card-footer">
              <div class="stats">
                  <i class="now-ui-icons arrows-1_refresh-69 spin"></i> Just Updated
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card  card-tasks">
              <div class="card-header ">
                <h5 class="card-category">New Leads</h5>
                <h4 class="card-title">Tasks</h4>
              </div>
              <div class="card-body ">
                <div class="table-responsive" id="new"></div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="now-ui-icons loader_refresh spin"></i> Updated Just Now
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-category">Not Interested</h5>
                <h4 class="card-title">Users Stats</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive" id="not-fetch">
                  
                </div>
              </div>
            </div>
          </div>
          <!-- new -->
          <div class="col">
            <div class="card">
              <div class="card-header">
                <h5 class="card-category">users</h5>
                <!-- <h4 class="card-title"></h4> -->
              </div>
              <div class="card-body">
                <!-- <div class="table-responsive" id="not-fetch"> -->
                <div id="piechart_3d" style="width:100vh; height: 280px;"></div>
                  
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
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->

  <!-- Chart JS -->

  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <!-- <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
</body>
  <script>
  setInterval(() => {
    newleads();
  }, 1000);
  setInterval(() => {
    staff();
  }, 1000);
  setInterval(() => {
    notinterested();
  }, 1000);
  setInterval(() => {
    fetchnew();
  }, 1000);
  setInterval(() => {
    not();
  }, 10000);
  newleads();
  staff();
  notinterested();
  fetchnew();
  not();
      function newleads(){
        $.ajax({
                    url:"../php/count-new-lead.php",
                    method:"POST",
                    success:function(data){
                $("#lead").html(data);
                
                         }
                })
      }
      function staff(){
        $.ajax({
                    url:"../php/count-staff-lead.php",
                    method:"POST",
                    success:function(data){
                $("#staff").html(data);
                
                         }
                })
      }
      function notinterested(){
        $.ajax({
                    url:"../php/count-not-ins-lead.php",
                    method:"POST",
                    success:function(data){
                $("#not-interested").html(data);
                
                         }
                })
      }
      function fetchnew(){
        $.ajax({
                    url:"../php/fetch-new-lead.php",
                    method:"POST",
                    success:function(data){
                $("#new").html(data);
                
                         }
                })
      }
      function not(){
        $.ajax({
                    url:"../php/not-fetch-lead.php",
                    method:"POST",
                    success:function(data){
                $("#not-fetch").html(data);
                
                         }
                })
      }
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
  </script>
  <?php
   

      include("../../config/pdoconfig.php");
          $sql = "SELECT * FROM lead where social = 'admin' ";
           $statement = $connection->prepare($sql);
           $statement->execute();
           $admin = $statement->rowCount();
           $sql1 = "SELECT * FROM lead where social = 'facebook' ";
           $statement = $connection->prepare($sql1);
           $statement->execute();
           $facebook = $statement->rowCount();
           $sql2 = "SELECT * FROM lead where social = 'twitter' ";
           $statement = $connection->prepare($sql2);
           $statement->execute();
           $twitter = $statement->rowCount();
           $sql3 = "SELECT * FROM lead where social = 'google' ";
           $statement = $connection->prepare($sql3);
           $statement->execute();
           $google = $statement->rowCount();
           $sql4 = "SELECT * FROM lead where social = 'others' ";
           $statement = $connection->prepare($sql4);
           $statement->execute();
           $others = $statement->rowCount();
   
  ?>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['admin',     <?php echo $admin; ?>],
          ['Facebook',     <?php echo $facebook;?>],
          ['Twitter',  <?php echo $twitter; ?>],
          ['Google', <?php echo $google; ?>   ],
          ['Others', <?php echo $others; ?>]
          
        ]);

        var options = {
          title: 'Users',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script> -->
</html>