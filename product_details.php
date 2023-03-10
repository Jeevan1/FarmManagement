<!-- include connect file -->
<?php
include('includes/connect.php');
include('functions/common_functions.php');
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="./css/bootstrap.min.css" />

  <!-- Font-awesome icons -->
  <link rel="stylesheet" href="./css/all.min.css" />
  <link rel="stylesheet" href="./css/fontawesome.min.css" />

  <!-- FavIcon -->
  <link rel="shortcut icon" href="./img/company/favicon.png" type="image/x-icon" />

  <!-- Custom style -->
  <link rel="stylesheet" href="./css/styles.css" />


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
            <img src="./img/company/logo.png" alt="" />
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
                  echo "<li><a href='index.php?$category_title'>$category_title</a></li>";
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
        echo "<li><a href='user_area/user_login.php'>LogIn</a></li>";
      }else{
        echo "<li><a href='user_area/user_login.php'>LogOut</a></li>";
      }
      ?>
          </ul>
        </div>
        <div class="nav_bar_right text-end">
          <button class="profile pe-2">
            <i class="fas fa-user"></i>
          </button>
          <button class="search-icon pe-2">
            <i class="fas fa-magnifying-glass"></i>
          </button>
          <button class="cart pe-2">
            <i class="fas fa-cart-shopping"></i>
            <span class="total_cart_items"><?php cartItem();?></span>
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
        echo "<li><a href='user_area/user_login.php'>LogIn</a></li>";
      }else{
        echo "<li><a href='user_area/user_login.php'>LogOut</a></li>";
      }
      ?>
    </ul>
  </nav>

  <!-- //adding cart function -->
  <?php
          cart();
          ?>

  <!-- offcanvas cart -->
  <section class="cart_wrapper text-center">
    <div class="container">
      <div class="cart_box">
        <div class="cart_title d-flex justify-content-between">
          <h1 class="sm-heading">Cart</h1>
          <button id="close_cart">
            <i class="fas fa-xmark"></i>
          </button>
        </div>
        <div class="cart_item">
          <div class="cart_item_remove">
            <button>
              <i class="fas fa-xmark"></i>
            </button>
          </div>
          <!-- //adding cart item function -->
          <?php
            cartOpen();
          ?>
          </div>
        </div>
      </div>

      <div class="cart_total py-4 d-flex justify-content-between">
        <h1 class="sm-heading px-3">Subtotal:</h1>
        <span class="total px-5"><?php totalPriceCart();?> /-</span>
      </div>

      <a href="#" class="checkout">Checkout</a>
      <p>Free Shipping on All Orders Over NPR. 1500!</p>
    </div>
  </section>
  
  <!-- Product Detail -->
  <?php
    product_detail();
  ?>

  <!-- view_related products -->

  <div class='container'>
    <div class='row'>
      <div class='col-md-12'>
      <h1 class='text-center col-md-12'>Related Products</h1>
        <div id='' class='tab-detail text-center col-md-12'>
          <div class='product_tab'>
              <?php
                related_products();
              ?>
            
            <?php
              viewmore_related();
            ?>
            </div>
          </div>
        </div>
        
      </div>
    </div>


    <!-- Footer -->
    <?php
    include('./includes/footer.php');
    ?>

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
          <form action="search_product.php" method="get" class="d-flex">
            <input type="search" name="search_data" id="search" placeholder="Enter Keyword Here" />
            <button type="submit" value="Search" name="search_data_product"><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>
        </div>

      </div>

    </div>

    <!-- View Product -->
    <div class="product_view">
      <div class="product_view_box">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-12">
            <div class="product_image">
              <img src="./img/seed/3.jpg" alt="" />
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="product_details">
              <button class="close_quick_view">
                <i class="fas fa-xmark"></i>
              </button>

              <div class="product_detail">
                <h1 class="sm-heading">Papaya</h1>
                <span>NPR. 500 Per KG</span>
                <del>NPR. 800 Per KG</del>
              </div>

              <ul class="product_specs">
                <li class="title">Product Feature:</li>
                <li>Fresh</li>
                <li>Organic</li>
                <li>Authentic</li>
              </ul>

              <div class="cart-section">
                <div class="quantity">
                  <button class="dec">-</button>
                  <input type="text" min="0" value="2" class="cart_quantity" />
                  <button class="inc">+</button>
                </div>

                <div class="cart-btn">
                  <button class="more-btn">
                    <i class="fas fa-cart-shopping"></i>
                    Add to Cart
                  </button>
                </div>
              </div>

              <div class="wishlist_add">
                <button class="wishlist_added">
                  <i class="fas fa-heart"></i>
                  <span>Add to Wishlist</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    

    <!-- Added to cart -->
    <div class="mini_cart_added">
      <div class="message_box">
        <div class="row align-items-center">
          <div class="col-xl-4 col-md-4 col-sm-12">
            <div class="product_image">
              <img src="./img/bread/3.jpeg" alt="" />
            </div>
          </div>
          <div class="col-xl-8 col-md-8 col-sm-12">
            <div class="message_info">
              <button class="close_modal">
                <i class="fas fa-xmark"></i>
              </button>
              <h1 class="sm-heading">Gauva</h1>
              <p>Successfully added to your Cart</p>
              <div class="modal_btns">
                <a href="#" class="more-btn">View Cart</a>
                <a href="#" class="more-btn">Checkout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Added to wishlist -->
    <div class="wish_message">
      <div class="wish_message_box">
        <div class="row align-items-center">
          <div class="col-xl-4 col-md-4 col-sm-12">
            <div class="product_image">
              <img src="./img/bread/3.jpeg" alt="" />
            </div>
          </div>
          <div class="col-xl-8 col-md-8 col-sm-12">
            <div class="message_info">
              <button class="close_wish_msg">
                <i class="fas fa-xmark"></i>
              </button>
              <h1 class="sm-heading">Gauva</h1>
              <p>Successfully added to your WishList</p>
              <div class="modal_btns">
                <a href="#" class="more-btn">View WishList</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="js/index.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>