<!-- include connect file -->
<?php
include('../includes/connect.php');

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
          </ul>
        </div>
        <div class="nav_bar_right text-end">
          <button class="profile pe-2">
            <i class="fas fa-user"></i>
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
    </ul>
  </nav>


    <!-- Checkout section -->
    <section class="checkout">
      <div class="container">
        <?php
        if(!isset($_SESSION['username'])){
          include('user_login.php');
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
