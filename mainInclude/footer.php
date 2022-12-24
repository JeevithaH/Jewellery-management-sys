<footer class="container-fluid bg-white text-center">
                        <small class="text-dark">Copyright &copy;2022||Designed By Dazzels||<a href="#login" data-bs-toggle="modal" data-bs-target="#adminloginModalCen">Admin login</a> </small>
</footer>
  <!--customer signup-->
                   

<!-- Modal -->
<div class="modal fade" id="cusregModalCen" tabindex="-1" aria-labelledby="cusregModalCenLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="cusregModalCenLabel">New customer registration</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <!--code for sign in form-->
   
  <form>
    <div class="form-group">
        <i class="fas fa-user"></i><label for="Name"
        class="p1-2 font-weight-bold">Name</label><input
        type="text"
            class="form-control" placeholder="Name"
            name="Name" id="Name">
    </div>
    <div class="form-group">
        <i class="fas fa-envelope"></i><label for="email id"
        class="p1-2 font-weight-bold">Email</label><input 
        type="email"
            class="form-control"placeholder="Email"
            name="email" id="email">
        <small class="form-text">we'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <i class="fas fa-key"></i><label for="Password"
        class="p1-2 font-weight-bold">New Password</label><input 
        type="password"
            class="form-control"placeholder="Password"
            name="password" id="password">
        
    </div>
  </form>

     

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="addCus()">Sign up</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
    </div>
    </div>
  </div>
</div>


 <!--end of sign in form-->
 <!--start of login form-->
 
 <div class="modal fade" id="cusloginModalCen" tabindex="-1" aria-labelledby="cusloginModalCenLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="cusloginModalCenLabel">customer login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <!--code for login form-->
   
  <form id="cusLoginForm">
   
    <div class="form-group">
        <i class="fas fa-envelope"></i><label for="cuslogemail"
        class="p1-2 font-weight-bold">Email</label><input 
        type="email"
            class="form-control"placeholder="Email"
            name="cuslogemail" id="cuslogemail">
        
    </div>

    <div class="form-group">
        <i class="fas fa-key"></i><label for="cuslogPassword"
        class="p1-2 font-weight-bold"> Password</label><input 
        type="password"
            class="form-control"placeholder="Password"
            name="cuslogpassword" id="cuslogpassword">
        
    </div>
  </form>

     

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="cusloginbtn">login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
    </div>
    </div>
  </div>
</div>


 <!--end of  login form-->

 <!--start of admin login -->

 <div class="modal fade" id="adminloginModalCen" tabindex="-1" aria-labelledby="adminloginModalCenLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="adminloginModalCenLabel">admin login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      
   
  <form id="adminLoginForm">
   
    <div class="form-group">
        <i class="fas fa-envelope"></i><label for="adminlogemail"
        class="p1-2 font-weight-bold">Email</label><input 
        type="email"
            class="form-control"placeholder="Email"
            name="adminlogemail" id="adminlogemail">
        
    </div>

    <div class="form-group">
        <i class="fas fa-key"></i><label for="adminlogPassword"
        class="p1-2 font-weight-bold"> Password</label><input 
        type="password"
            class="form-control"placeholder="Password"
            name="adminlogpassword" id="adminlogpassword">
        
    </div>
  </form>

     

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="adminloginbtn">login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
    </div>
    </div>
  </div>
</div>



<!--end of admin login-->



                    <script src="js/jquery.min.js"></script>
                    <!-- bootstrap js -->
                    <script src="js/popper.min.js"></script>
                    <script src="js/bootstrap.min.js"></script>
                    <!-- font Awesome js-->
                    <script src="js/all.min.js"></script>
                    <!--custmer ajax call java script-->
                    <script type="text/javascript" src="js/ajaxrequest.js"></script>

</body>

</html>
