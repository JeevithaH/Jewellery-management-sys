
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Edit || Create Lead 
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
          <div class="col-md-12">
            <div class="card 1">
              <div class="card-header ">
                Edit Lead
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary" type="button" id="create">Create New Lead</button>
                </div>
              </div>
              <div class="card-body ">
                <div class="border">
                  <h6 class="mx-2 mt-2">Filter BY</h6>
                  <div class="d-flex align-items-center"> 
                    
                  </div>
                  <div class="d-flex flex-row bd-highlight mb-3">
                    <div class="p-2 bd-highlight"><select name="" id="filter-course" class="form-control">
                      <option value="computer science">computer science</option>
                      <option value="electronics">electronics</option>
                      <option value="all">All</option>
                    </select></div>
                  </div>
                  <div class="p-2 bd-highlight"><button type="button" class="btn btn-success btn-sm btn-glow filter">Filter</button></div>
                </div>
                <div class="border mt-2 mx-2">
                  <div class="display-leads"></div>
                </div>
              </div>
            </div>
           <!-- card 1 ending -->
           <div class="card 2">
              <div class="card-header ">
                Create Lead
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary" type="button" id="view">Veiw All</button>
                </div>
              </div>
              <div class="card-body ">
                <form id="simple_form">
              <div class="d-flex flex-row bd-highlight mb-3">
                  <div class="p-2 bd-highlight"><input type="text" name="fname" id="fname" placeholder="First Name" class="form-control" required></div>
                  <div class="p-2 bd-highlight"><input type="text" name="sname" id="sname" placeholder="Last Name" class="form-control" required></div>
                </div>
                <label for="" class="mr-3">D.O.B</label>
                <input type="date" name="dob" id="dob" class="form-control-sm" width="70px" required>
                <label for=""class="mr-3 ml-2"> Gender</label>
                <select name="gender" id="gender" class="form-control-sm">
                <option disabled> Please Select </option>
                <option value="Male"> Male </option>
                <option value="Female"> Female </option>
                <option value="N/A"> N/A </option>
                </select>
                <label for=""class="mr-3 ml-2">Language</label>
                <select name="lang" id="gender" class="form-control-sm" required>
                <option value="" disabled> Please Select </option>
            <option selected="" value="english"> english </option>
            <option value="telugu"> telugu </option>
            <option value="kannada"> kannada </option>
            <option value="hindi"> hindi </option>
          </select>
          <br>
          <div class="d-flex flex-row bd-highlight mb-3 mt-2">
                  <div class="p-2 bd-highlight">
                  <label for=""class="mr-3 ml-2">Father Name</label>
                    <input type="text" name="faname" id="fathername" placeholder="Father Name" class="form-control" required></div>
                  <div class="p-2 bd-highlight">
                  <label for=""class="mr-3 ml-2">Father no.</label>  
                  <input type="number"  name="fno" id="fphno" placeholder="father number" class="form-control" required></div>
                </div>
                <label for=""class="mr-3 ml-2">Address</label>  
                  <input type="text"  name="address" id="address" placeholder="Address" class="form-control" required>
                  <div class="d-flex flex-row bd-highlight mb-3 mt-2">
                  <div class="p-2 bd-highlight">
                  <label for=""class="mr-3 ml-2">City</label>
                    <input type="text" name="city" id="city" placeholder="city" class="form-control" required></div>
                  <div class="p-2 bd-highlight">
                  <label for=""class="mr-3 ml-2">State</label>  
                  <input type="text" max="10" name="state" id="state" placeholder="state" class="form-control" required></div>
                </div>
                <label for=""class="mr-3 ml-2">Postal / Zip Code</label>  
                  <input type="number"  name="zip" id="zip" placeholder="Postal / Zip Code" class="form-control" required>
                  <div class="d-flex flex-row bd-highlight mb-3 mt-2">
                  <div class="p-2 bd-highlight">
                  <label for=""class="mr-3 ml-2">Email ID</label>
                    <input type="email" name="email" id="email"  placeholder="email" class="form-control" required></div>
                  <div class="p-2 bd-highlight">
                  <label for=""class="mr-3 ml-2">Phone No</label>  
                  <input type="number"  name="mno" id="mno" placeholder="phone NO" class="form-control" required></div>
                </div>
                <label for=""class="mr-3 ml-2">Qualification</label>  
                  <input type="text"  name="qual" id="qual" placeholder="Qualification" class="form-control" required>
                  <label for=""class="mr-3 ml-2">Course</label>
                <select name="course" id="course" class="form-control-sm mt-2" required>
                <option value="" disabled> Please Select </option>
                <option value="computer science "> computer science </option>
                  <option value="electronics"> electronics </option>
                </select>
                <label for=""class="mr-3 ml-2">Centre</label>
                <select name="centre" id="centre" class="form-control-sm mt-2" required>
                <option value="" disabled> Please Select </option>
                <option value="NEC">NEC</option>
                  <option value="GTC">GTC</option>
                  <option value="TTC">TTC</option>
                  <option value="RNTC">RNTC</option>
                </select>
                <br>
                <input type="submit" value="Create Lead" name="submit" id="submit" class="btn btn-primary">
              </form>
              </div>
            </div>
            
           <!-- card 2 ending -->
           <div class="card 3">
              <div class="card-header ">
                Edit Lead
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary" type="button" id="view">View All</button>
                </div>
              </div>
              <div class="card-body ">
              <form id="edit-details">
              </form>
              </div>
            </div>
            
           <!-- card 3 ending -->
          </div>
        </div>
      </div>
      <?php
          include('../php/footer.php');
      ?>
    </div>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <table id="modal-details"  class="table table-sm"></table>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <!--   Core JS Files   -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>

  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
     $('.3').hide();
     $('.2').hide(); 
     interval = setInterval(fetch,3000);
      fetch();
      create();
      edit();
      update();
      filter();
      search();
     $(document).on('click','#create',function(){
      $('.3').hide();
     $('.1').hide();
     $('.2').show();
     })
     $(document).on('click','#view',function(){
      $('.3').hide();
     $('.2').hide();
     $('.1').show();
     })
     $(document).on('click','.edit',function(){
      $('.3').show();
     $('.2').hide();
     $('.1').hide();
     })
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
      function fetch(){
        
                $.ajax({
                    url:"../php/display-leads.php",
                    method:"POST",
                    success:function(data){
                $(".display-leads").html(data);
                
                         }
                })
              }
              // fetch function ends here
      function filter(){
        if($('#filter-course').find(":selected").text() == "all"){
          fetch();
          interval = setInterval(fetch,3000);
        } else{
          clearInterval(interval);       
      $(document).on('click','.filter',function(){
         var course = $('#filter-course').find(":selected").text();
         var lang = $('#filter-lang').find(":selected").text();
         var gender = $('#filter-gender').find(":selected").text();
         $.ajax({
                    url:"../php/filter-leads.php",
                    method:"POST",
                    data:{course,lang,gender},
                    success:function(data){
                $(".display-leads").html(data);
                
                         }
                })
      })
        }
        
      } 
            //filter function ends  
      function create(){
        $('#submit').on('click',function(){
          fname = $('#fname').val();
          sname = $('#sname').val();
          dob = $('#dob').val();
          fathername = $('#fathername').val();
          fphno = $('#fphno').val();
          address = $('#address').val();
          city = $('#city').val();
          state = $('#state').val();
          zip = $('#zip').val();
          mno = $('#mno').val();
          qual = $('#qual').val();
          email = $('#email').val();
          centre = $('#centre').val();
          event.preventDefault();
          if(fname==""&&sname==""&&dob==""&&fathername==""&&fphno==""&&address==""&&city==""&&state==""&&zip==""&&mno==""&&qual==""&&email==""&&centre==''){
            swal("Enter All Feilds", "All feilds are required", "error");
          }
          else{
            var form_data = $('#simple_form').serialize();
        $.ajax({
                    url:"../php/create-lead.php",
                    method:"POST",
                    data:form_data,
                    success:function(data){
                      $('#simple_form').trigger('reset');
                      swal("Successfully Created", "Lead Created", "success");
                
                         }
                })
          }
        
        })
      }  
       // create functon ends here    
       $(document).on('click','.view',function(){
         id = $(this).data('id');
         $.ajax({
           url:"../php/view-lead.php",
           method:"POST",
           data:{id},
           success:function(data){
            $("#modal-details").html(data);
            
           }
         })
        })
          //views end here
        function edit(){
          $(document).on('click','.edit',function(){
            id = $(this).data('id');
            $.ajax({
           url:"../php/edit-lead.php",
           method:"POST",
           data:{id},
           success:function(data){
             
            $("#edit-details").html(data);
            
           }
          })
        })
        }
        // view-edit function ends here 
        function update(){
          $(document).on('click','.update',function(){
            
          
          
          event.preventDefault();
         
          
            var form_data = $('#edit-details').serialize();
            
        $.ajax({
                    url:"../php/update-lead.php",
                    method:"POST",
                    data:form_data,
                    success:function(data){
                     
                      // $('#simple_form').trigger('reset');
                      swal("Successfully Updated", "Lead Upadted!", "success");
                      
                         }
                })
          
        
        })
        }
        // update function ends here 
        
        function search(){
                  
                  $('#search_text').keyup(function(){
                      var txt = $(this).val();
                      if(txt =""){
                        fetch();
                        interval = setInterval(fetch,3000);
                      }
                      else{
                        clearInterval(interval);
                        $("#display").html('');
                        var txt = $(this).val();
                        
                          $.ajax({
                           url:"../php/search-edit-lead.php",
                            method:"POST",
                          data:{search:txt},
                          dataType:"text",
                          success:function(data)
                          {
                              $(".display-leads").html(data);
                          }
                      })
                          }
                          
                  });
                }
    });
  </script>
</body>

</html>