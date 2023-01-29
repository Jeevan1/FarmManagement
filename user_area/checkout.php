<!-- include connect file -->
<?php
include('../includes/connect.php');
include('../functions/common_functions.php');
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

  <!-- Top header -->
  <header class="header-wrapper">
    <div class="container">
      <div class="row">
        <div class="d-none d-lg-block col-lg-12">
          <div class="grid-container d-flex justify-content-between">
            <div class="about d-flex align-items-center">
              <div class="location">
                <i class="fas fa-location-dot"></i>
                <span>New Baneshwor Kathmandu Nepal</span>
              </div>
              <div class="email">
                <i class="fas fa-envelope-open-text"></i>
                <a href="mailto:support@digitalfarm.com">support@digitalfarm.com</a>
              </div>
              <div class="phone">
                <i class="fas fa-phone"></i>
                <a href="tel:9812767046">+977 9812767046</a>
              </div>
            </div>
            <div class="socials">
              <a href="#">
                <i class="fab fa-facebook"></i>
              </a>

              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>

              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- 
    Menu bar 
      1. Logo
      2. Navigation Menu 1 dropdown 1 mega menu for desktop and no mega menu for mobile
      
    -->

  <!-- Menu section -->
  <section class="nav_bar">
    <div class="container">
      <div class="row justify-content-end align-items-center">
        <div class="nav_bar_left">
          <a href="index.html">
            <img src="../img/company/logo.png" alt="" />
          </a>
        </div>
        <div class="nav_bar_center">
          <ul class="menu_items d-flex justify-content-between d-none d-lg-flex">
            <li><a href="../index.php" class="">Home</a></li>
            <li class="dropdown">
              <a href="#">Products</a>
              <ul class="dropdown_items">
                <?php

                $select_category = "Select * from `category`";
                $result_category = mysqli_query($con, $select_category);
                while ($row_data = mysqli_fetch_assoc($result_category)) {
                  $category_title = $row_data['category_title'];
                  $category_id = $row_data['category_id'];
                  echo "<li><a href='../index.php?$category_title'>$category_title</a></li>";
                }

                ?>
                <!-- <li><a href="vegetable.html">Vegetables</a></li>
                <li><a href="fruits.html">Fruits</a></li>
                <li><a href="bread.html">Bread</a></li>
                <li><a href="butter.html">Butter and Cream</a></li>
                <li><a href="fertilizer.html">Fertilizers</a></li>
                <li><a href="machines.html">Farm Equipments</a></li>
                <li><a href="oil.html">Oil and Vinegar</a></li>
                <li><a href="seafood.html">Fish and Sea Food</a></li>
                <li><a href="seed.html">Quality Seeds</a></li> -->
              </ul>
            </li>
            <li><a href="farmers.html">Vendors</a></li>
            <li><a href="farmers.html">Farmers</a></li>
            <li><a href="blog.html">Blogs</a></li>
            <li><a href="contact.html">Contact</a></li>
            <?php
      if(!isset($_SESSION['email'])){
        echo "<li><a href='user_login.php'>LogIn</a></li>";
      }else{
        echo "<li><a href='logout.php'>LogOut</a></li>";
      }
      ?>
          </ul>
        </div>
        <div class="nav_bar_right text-end">
          <button class="profile pe-2">
          <?php
            if(!isset($_SESSION['email'])){
              echo "<i class='fas fa-user'></i>";
            }else{
              $img_select =$_SESSION['email'];
              $select = "Select * from `user_table` where email='$img_select'";
              $result_img = mysqli_query($con,$select);
              $num_rows= mysqli_fetch_assoc($result_img);
              $user_img = $num_rows['user_image'];
              $user_name = $num_rows['username'];
              echo "<img class='rounded-circle'style='width:40px;' src='./user_images/$user_img' >  $user_name";
            }
            ?>
           
          </button>
          
          <div class="burger_menu">
            <span class="burger_menu_btn"> </span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Mobile-Menu Items -->
  <nav class="nav justify-content-end">
    <ul class="nav_items">
      <li class="nav_item">
        <div class="mobile-header d-flex justify-content-between">
          <a href="#">
            <img src="./img/company/logo.png" alt="" />
          </a>
          <button class="close_nav">
            <i class="fas fa-xmark fa-2x"></i>
          </button>
        </div>
      </li>
      <li><a href="index.html" class="active">Home</a></li>
      <li class="dropdown">
        <a href="#">Products</a>
        <ul class="dropdown_items">
          <?php

          $select_category = "Select * from `category`";
          $result_category = mysqli_query($con, $select_category);
          while ($row_data = mysqli_fetch_assoc($result_category)) {
            $category_title = $row_data['category_title'];
            $category_id = $row_data['category_id'];
            echo "<li><a href='index.php?$category_title'>$category_title</a></li>";
          }

          ?>
        </ul>
      </li>
      <li><a href="farmers.html">Vendors</a></li>
      <li><a href="farmers.html">Farmers</a></li>
      <li><a href="blog.html">Blogs</a></li>
      <li><a href="contact.html">Contact</a></li>
      <?php
      if(!isset($_SESSION['email'])){
        echo "<li><a href='user_area/user_logIn.php'>LogIn</a></li>";
      }else{
        echo "<li><a href='user_area/logout.php'>LogOut</a></li>";
      }
      ?>
    </ul>
  </nav>


    <!-- Checkout section -->
    <section class="checkout">
      <div class="container">
        <?php
        //php code to access user id
        $user_ip = getIPAddress();
        $get_user = "Select * from `user_table` where user_ip='$user_ip'";
        $result_user_id = mysqli_query($con,$get_user);
        $run_query=mysqli_fetch_array($result_user_id);
        $user_id = $run_query['user_id'];

        if(!isset($_SESSION['email'])){
          // include('user_login.php');
          echo "
          
      <div class='container'>
      <div class='form-wrapper'>
        <div class='section-title'>
          <h1 class='md-heading'>Please Fill the form below with the valid informations</h1>
        </div>
        <div class='row'>
          <div class='col-sm-12 col-md-12 col-sm-12'>
            <form class='sign_form' method='post'>
              <fieldset class='social-accounts'>
                <div class='apple text-center'>
                  <button>
                    <i class='fab fa-apple'></i>
                    <span>Continue With Apple</span>
                  </button>
                </div>
                <div class='google text-center'>
                  <button>
                    <i class='fab fa-google'></i>
                    <span>Continue With Google</span>
                  </button>
                </div>
              </fieldset>

              <div class='divider mb-5'>
                <hr />
                <p>OR</p>
              </div>

              <div class='sign-form'>
                <fieldset class='email'>
                  <label for='email'>Email <span>*</span></label>
                  <input type='email' name='email' id='email' required />
                </fieldset>

                <fieldset class='password'>
                  <label for='password'>Password <span>*</span></label>
                  <input type='password' name='password' id='password' required />
                </fieldset>
                <div class='mb-4'>
                  <label for='remember'><input type='checkbox' name='remember' id='remember' /> Remember Me</label>
                </div>
                <div class='submit-btn text-center'>
                  <button type='submit' name='user_login'>Login</button>
                </div>
                <div>
                  <h5 class='py-3'>Don't have accout <a class='' href='signup.php'>click here</a></h5>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
 ";
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
        $_SESSION['email']=$user_email;
        if(password_verify($user_password,$row_data['password'])){
          // echo"<script>alert('Login Successful')</script>";
          if($row_count==1 and $row_count_cart==0){
            $_SESSION['email']=$user_email;
            echo "<script>alert('Login Successful')</script>";
            echo "<script>window.open('user_profile.php','_self')</script>";
          }else{
            $_SESSION['email']=$user_email;
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
        }
        else{
          echo "
        <div class='row justify-content-center'>
          <div class='col-xl-12 col-md-12 col-sm-12'>
            <div class='section-title'>
              <h3>Billing Details</h3>
            </div>
            <div class='checkout_form'>
              <form class='billing_form'>
                <fieldset class='name'>
                  <div class='row'>
                    <div class='col-sm-6 col-md-6 col-sm-12'>
                      <label for='fname'>First Name</label>
                      <input type='text' name='fname' placeholder='First Name' required />
                    </div>
                    <div class='col-sm-6 col-md-6 col-sm-12'>
                      <label for='lname'>Last Name</label>
                      <input type='text' name='lname' placeholder='Last Name' required />
                    </div>
                  </div>
                </fieldset>
                <fieldset class='email'>
                  <label for='email'>Email Address</label>
                  <input type='email' name='email' placeholder='Email Address' />
                </fieldset>
                <fieldset class='tel'>
                  <label for='tel'>Phone Number</label>
                  <input type='tel' name='tel' placeholder='Phone Number' required />
                </fieldset>
                <fieldset class='address'>
                  <label for='address'> Address</label>
                  <input type='text' name='address' placeholder='Street Address' required />
                  <input type='text' name='address' placeholder='City' required />
                  <input type='text' name='address' placeholder='Street Address' required />
                  <input type='text' name='address' placeholder='Appartment,Suit (optional)' />
                </fieldset>

                <div class='checkout_form_btn text-center'>
                  <button type='submit' class='more-btn'>Update</button>
                </div>
              </form>
            </div>
          </div>

          <div class='col-xl-6 col-md-6 col-sm-12 shopping_cart_bill'>
            <h4>Total Amount</h4>

            <table class='table'>
              <tbody>
                <tr>
                  <td>Cart Subtotal</td>
                  <td>$618.00</td>
                </tr>
                <tr>
                  <td>Shipping and Handing</td>
                  <td>$15.00</td>
                </tr>
                <tr>
                  <td>Vat</td>
                  <td>$00.00</td>
                </tr>
                <tr>
                  <td><strong>Order Total</strong></td>
                  <td><strong>$633.00</strong></td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class='col-md-12 mt-60'>
            <div class='payment-method'>
              <h3>Choose a Payment Method</h3>
              <ul class='accordion-box'>
                <li class='accordion block active-block'>
                  <div class='acc-btn d-flex justify-content-between active'>
                    <span>Credir Card / Debit Card</span>
                    <div class='icon-outer'><i class='fas fa-angle-down'></i></div>
                  </div>
                  <div class='acc-content current' style='display: block'>
                    <div class='payment-info'>
                      <div class='row clearfix'>
                        <div class='col-lg-6 col-md-6 col-sm-12 column'>
                          <div class='field-input mb-3'>
                            <input type='text' class='form-control' name='name' placeholder='Name on the Card' required='' />
                          </div>
                        </div>
                        <div class='col-lg-6 col-md-6 col-sm-12 column'>
                          <div class='field-input mb-3'>
                            <input type='text' class='form-control' name='number' placeholder='Card Number' required='' />
                          </div>
                        </div>
                        <div class='col-lg-3 col-md-6 col-sm-12 column'>
                          <div class='field-input mb-3'>
                            <input type='text' class='form-control' name='date' placeholder='Expiry Date' required='' />
                          </div>
                        </div>
                        <div class='col-lg-3 col-md-6 col-sm-12 column'>
                          <div class='field-input mb-3'>
                            <input type='text' class='form-control' name='code' placeholder='Security Code' required='' />
                          </div>
                        </div>
                        <div class='col-lg-6 col-md-12 col-sm-12 column'>
                          <div class='field-input message-btn'>
                            <button type='submit' class='more-btn'>
                              <span>Make Payment</span>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class='accordion block'>
                  <div class='acc-btn d-flex justify-content-between'>
                    <span> Direct Bank Transfer</span>
                    <div class='icon-outer'><i class='fas fa-angle-down'></i></div>
                  </div>
                  <div class='acc-content' style='display: none'>
                    <div class='payment-info'>
                      <p class='mb-0'>
                        Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be
                        shipped until the funds have cleared in our account.
                      </p>
                    </div>
                  </div>
                </li>
                <li class='accordion block'>
                  <div class='acc-btn d-flex justify-content-between'>
                    <span> Pay Using Wallet</span>
                    <div class='icon-outer'><i class='fas fa-angle-down'></i></div>
                  </div>
                  <div class='acc-content' style='display: none'>
                    <div class='payment-info'>
                      <p class='mb-0'>
                        Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be
                        shipped until the funds have cleared in our account.
                      </p>
                    </div>
                  </div>
                </li>
                <li class='accordion block'>
                  <div class='acc-btn d-flex justify-content-between'>
                    <span> Other Payment</span>
                    <div class='icon-outer'><i class='fas fa-angle-down'></i></div>
                  </div>
                  <div class='acc-content' style='display: none'>
                    <div class='payment-info'>
                      <p class='mb-0'>
                        Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be
                        shipped until the funds have cleared in our account.
                      </p>
                    </div>
                  </div>
                </li>
                <li class='accordion block'><a href='order.php?user_id=$user_id' class=''>Pay Offline</a></li>
              </ul>
            </div>
          </div>
        </div>";
        }
        ?>
      </div>
    </section>

    <!-- Footer -->
    <?php include('../includes/footer.php');?>

    <!-- back to top -->
    <button id="back_to_top">
      <i class="fas fa-angle-up"></i>
    </button>

    <!-- Search -->
    <div class="search-wrapper">
      <div class="close_search text-end">
        <i class="fas fa-xmark"></i>
      </div>
      <div class="search-bar-wrapper">
        <div class="search-bar">
          <input type="search" name="search" id="search" placeholder="Enter Keyword Here" />
          <i class="fa-solid fa-magnifying-glass"></i>
        </div>
      </div>
    </div>

    <script src="../js/bootstrap.bundle.min.js"></script>

    <script
      src="https://code.jquery.com/jquery-3.6.3.js"
      integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
      crossorigin="anonymous"
    ></script>

    <script type="text/javascript" src="../js/index.js"></script>
    <script src="../js/script.js"></script>
  </body>
</html>
