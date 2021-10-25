<!-----start footer--->
<footer class="container-fluid bg-dark text-center p-2">
  <small class="text-white">Copyright  &copy; 2021|| Designed By Meridians||
    <a href="#login"data-bs-toggle="modal" data-bs-target="#adminLoginModalCenter" >Admin Login</a></small>
</footer>
<!----end footer---->
<!----- students-registration form modal-->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Student Registration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
<div class="form-group">
  <i class="fas fa-user"></i><label for="stuname" class="p-2 font-weight-bold">Name</label>
  <input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname">
</div>
<div class="form-group">
  <i class="fas fa-envelope"></i><label for="stuemail" class="p-2 font-weight-bold">Email</label>
  <input type="email" class="form-control" placeholder="email" name="stuemail" id="stuemail">
  <small class="form-text">We'll never share your email anyone else.</small>
</div>
<div class="form-group">
  <i class="fas fa-key"></i><label for="stuemail" class="p-2 font-weight-bold">New password</label>
  <input type="password" class="form-control" placeholder="password" name="stupassword" id="stupassword">

</div>


        </form>
      <!----End  Registration form-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="addstu()">Sign Up</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
     
      </div>
    </div>
  </div>
</div>
 <!----End  student  Registration form-->

<!----- students-login form modal-->


<!-- Modal -->
<div class="modal fade" id="StuLoginModalCenter" tabindex="-1" aria-labelledby="StuLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="StuLoginModalCenterLabel">Student Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="stuloginform">

<div class="form-group">
  <i class="fas fa-envelope"></i><label for="stuloginemail" class="p-2 font-weight-bold">Email</label>
  <input type="email" class="form-control" placeholder="email" name="stuloginemail" id="stuloginemail">

</div>
<div class="form-group">
  <i class="fas fa-key"></i><label for="stuloginemail" class="p-2 font-weight-bold"> password</label>
  <input type="password" class="form-control" placeholder="password" name="stuloginpassword" id="stuloginpassword">

</div>


        </form>
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="stulogin btn">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
     
      </div>
    </div>
  </div>
</div>
 <!----End  student login form-->

 
<!----- admin-login form modal-->


<!-- Modal -->
<div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminLoginModalCenterLabel">Admin Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="adminloginform">

<div class="form-group">
  <i class="fas fa-envelope"></i><label for="adminloginemail" class="p-2 font-weight-bold">Email</label>
  <input type="email" class="form-control" placeholder="email" name="adminloginemail" id="adminloginemail">

</div>
<div class="form-group">
  <i class="fas fa-key"></i><label for="adminloginemail" class="p-2 font-weight-bold"> password</label>
  <input type="password" class="form-control" placeholder="password" name="adminloginpassword" id="adminloginpassword">

</div>


        </form>
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="stulogin btn">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
     
      </div>
    </div>
  </div>
</div>
 <!----End  admin login form-->
 
 <!----jquery and boostarp and javascript--->
    <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
<script src="js/jQuery3.min.lib.js"></script>

 <!----owlcarousel slider testimonials students--->
<script  type = "text/javascript"src="js/owl.carousel.min.js"></script>
 <!--fontawesom--->
  <script src="js/main.js"></script>
  <!----ajsstudent cal----->
  <script  type = "text/javascript"src="js\ajxrequest.js"></script>


 
    </body>
    </html>