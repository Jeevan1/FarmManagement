
      <div class="container">
        <div class="form-wrapper">
          <div class="section-title">
            <h1 class="md-heading">Please Fill the form below with the valid informations</h1>
          </div>
          <div class="row">
            <div class="col-sm-12 col-md-12 col-sm-12">
              <form class="sign_form" method="post">
                <fieldset class="social-accounts">
                  <div class="apple text-center">
                    <button>
                      <i class="fab fa-apple"></i>
                      <span>Continue With Apple</span>
                    </button>
                  </div>
                  <div class="google text-center">
                    <button>
                      <i class="fab fa-google"></i>
                      <span>Continue With Google</span>
                    </button>
                  </div>
                </fieldset>

                <div class="divider mb-5">
                  <hr />
                  <p>OR</p>
                </div>

                <div class="sign-form">
                  <fieldset class="email">
                    <label for="email">Email <span>*</span></label>
                    <input type="email" name="email" id="email" required />
                  </fieldset>

                  <fieldset class="password">
                    <label for="password">Password <span>*</span></label>
                    <input type="password" name="password" id="password" required />
                  </fieldset>
                  <div class="mb-4">
                    <label for="remember"><input type="checkbox" name="remember" id="remember" /> Remember Me</label>
                  </div>
                  <div class="submit-btn text-center">
                    <button type="submit" name="user_login">Login</button>
                  </div>
                  <div>
                    <h5 class="py-3">Don't have accout <a class="" href="signup.php">click here</a></h5>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
   
      <?php 
      include('../includes/connect.php');
      include('../functions/common_functions.php');
      if(isset($_POST['user_login'])){
        $user_email = $_POST['email'];
        $user_password = $_POST['password'];
        $user_ip = getIPAddress();

        $select_query = "Select * from `user_table` where email='$user_email'";
        $result = mysqli_query($con,$select_query);
        $row_count=mysqli_num_rows($result);
        $row_data=mysqli_fetch_assoc($result);

        //cart item
        $select_query_cart = "Select * from `cart_details` where ip_address='$user_ip'";
        $result_cart = mysqli_query($con,$select_query_cart);
        $row_count_cart= mysqli_num_rows($result_cart);
        if($row_count>0){
          $_SESSION['username']=$user_email;
          if(password_verify($user_password,$row_data['password'])){
            // echo"<script>alert('Login Successful')</script>";
            if($row_count==1 and $row_count_cart==0){
              $_SESSION['username']=$user_email;
              echo "<script>alert('Login Successful')</script>";
              echo "<script>window.open('user_profile.php','_self')</script>";
            }else{
              $_SESSION['username']=$user_email;
              echo "<script>alert('Login Successful')</script>";
              echo "<script>window.open('payment.php','_self')</script>";
            }
          }else{
            echo"<script>alert('Invalid Credentials')</script>";
          }
        }else{
          echo"<script>alert('Invalid Credentials')</script>";
        }

      }
      ?>