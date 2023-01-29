<!-- include connect file -->
<?php
include('../includes/connect.php');
include('../functions/user_login.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="../css/bootstrap.min.css" />

  <!-- Font-awesome icons -->
  <link rel="stylesheet" href="../css/all.min.css" />
  <link rel="stylesheet" href="../css/fontawesome.min.css" />

  <!-- FavIcon -->
  <link rel="shortcut icon" href="../img/company/favicon.png" type="image/x-icon" />

  <!-- Custom style -->
  <link rel="stylesheet" href="../css/styles.css" />

  <!-- Lightbox -->
  <!-- Slick -->

  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fresh - Digital Farm Nepal</title>
</head>

<body>
  <header class="header">
    <div class="container-fluid">
      <div class="header_logo">
        <a href="index.html">
          <img src="./img/company/logo.png" alt="" />
        </a>
      </div>
    </div>
  </header>
  <div class="section-wrapper">
    <div class="container">
      <div class="form-wrapper">
        <div class="section-title">
          <h1 class="md-heading">Register Your Account</h1>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-12 col-sm-12">
            <form class="sign_form"  method="post" enctype="multipart/form-data">
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
                <div class="form-control">
                <fieldset class="name">
                  <label for="fullName">Full Name <span>*</span></label>
                  <input type="text" name="fullName" id="name" placeholder="Your Name" autocomplete="off" required />
                  <i class="fas fa-check-circle"></i>
                  <i class="fas fa-exclamation-circle"></i>
                  <small>Error Message</small>
                </fieldset>
              </div>
              <div class="form-control">
                <fieldset class="email">
                  <label for="email">Email <span>*</span></label>
                  <input type="email" name="email" id="email" required autocomplete="off"/>
                  <i class="fas fa-check-circle"></i>
                  <i class="fas fa-exclamation-circle"></i>
                  <small>Error Message</small>
                </fieldset>
              </div>
              <div class="form-control">
                <fieldset class="email">
                  <label for="user_image">User Image <span>*</span></label>
                  <input type="file" name="user_image" id="featuredImage" autocomplete="off" required/>
                  <i class="fas fa-check-circle"></i>
                  <i class="fas fa-exclamation-circle"></i>
                  <small>Error Message</small>
                </fieldset>
              </div>

              <div class="form-control">
                <fieldset class="Phone">
                  <label for="Phone">Phone <span>*</span></label>
                  <input type="tel" name="phone" id="phone" required autocomplete="off"/>
                  <i class="fas fa-check-circle"></i>
                  <i class="fas fa-exclamation-circle"></i>
                  <small>Error Message</small>
                </fieldset>
              </div>
              <div class="form-control">
                <fieldset class="d-flex flex-column">
                  <label for="role">Select Any One <span>*</span></label>
                  <select name="role">
                    <option value="farmer">Farmer</option>
                    <option value="consumer" selected>Consumer</option>
                    <option value="vendor">Vendor</option>
                  </select><br>
      
                  <label for="user_image">Name of company <span>*</span></label>
                  <input type="text" name="role_company_name"  autocomplete="off"/>
                  
                  <i class="fas fa-check-circle"></i>
                  <i class="fas fa-exclamation-circle"></i>
                  <small>Error Message</small>
                
                  <label for="user_image">Address <span>*</span></label>
                  <input type="text" name="address"  autocomplete="off" required/>
                  <i class="fas fa-check-circle"></i>
                  <i class="fas fa-exclamation-circle"></i>
                  <small>Error Message</small>
                </fieldset>
              </div>
              <div class="form-control">
                <fieldset class="password">
                  <label for="password">Password <span>*</span></label>
                  <input type="password" name="password" id="password" placeholder="New Password" required />
                  <i class="fas fa-eye" onclick = "passwordFun()"></i>
                  <i class="fas fa-eye-slash" onclick = "passwordFun()"></i>
                  <i class="fas fa-check-circle"></i>
                  <i class="fas fa-exclamation-circle"></i>
                  <small>Error Message</small>
                </fieldset>
              </div>
              <div class="form-control">
                <fieldset class="re-password">
                  <label for="password">Retype Password <span>*</span></label>
                  <input type="password" name="password2" id="password2" placeholder="Retype Password" required />
                  <i class="fas fa-eye" onclick="passwordFun() "></i>
                  <i class="fas fa-eye-slash" onclick = "passwordFun()"></i>
                  <i class="fas fa-check-circle"></i>
                  <i class="fas fa-exclamation-circle"></i>
                  <small>Error Message</small>
                </fieldset>
              </div>
                <div class="agreement mb-4">
                  <div class="agreement_1">
                    <label><input type="checkbox" value="true" name="send_email" checked /> Send me helpful emails to find rewarding work and job
                      leads.</label>
                  </div>
                  <div class="agreement_2 mt-2">
                    <label>
                      <input type="checkbox" name="terms" value="true" required/> Yes, I understand and agree to the Upwork <a href="#">Terms and
                        Services</a> , including the
                      <a href="#">Privacy Policy</a> .
                    </label>
                  </div>
                </div>
                <div class="submit-btn text-center">
                  <button type="submit" name="user_register">Create My Account</button>
                </div>
              </div>
            </form>

            
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="../js/validation.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>

