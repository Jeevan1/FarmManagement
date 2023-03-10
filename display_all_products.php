<!-- include connect file -->
<?php
include('includes/connect.php');
include('functions/common_functions.php');

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
            <span class="total_cart_items">8</span>
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
    </ul>
  </nav>

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
          <div class="cart_item_details">
            <div class="cart_item_image">
              <img src="./img/product/1.png" alt="" />
            </div>
            <div class="cart_item_detail">
              <h5>Mangoes</h5>
              <p><span class="quantity">1</span> x <span class="rate">250</span></p>
            </div>
          </div>
        </div>
        <div class="cart_item">
          <div class="cart_item_remove">
            <button>
              <i class="fas fa-xmark"></i>
            </button>
          </div>
          <div class="cart_item_details">
            <div class="cart_item_image">
              <img src="./img/product/2.png" alt="" />
            </div>
            <div class="cart_item_detail">
              <h5>Mangoes</h5>
              <p><span class="quantity">1</span> x <span class="rate">250</span></p>
            </div>
          </div>
        </div>
        <div class="cart_item">
          <div class="cart_item_remove">
            <button>
              <i class="fas fa-xmark"></i>
            </button>
          </div>
          <div class="cart_item_details">
            <div class="cart_item_image">
              <img src="./img/product/3.png" alt="" />
            </div>
            <div class="cart_item_detail">
              <h5>Mangoes</h5>
              <p><span class="quantity">1</span> x <span class="rate">250</span></p>
            </div>
          </div>
        </div>
        <div class="cart_item">
          <div class="cart_item_remove">
            <button>
              <i class="fas fa-xmark"></i>
            </button>
          </div>
          <div class="cart_item_details">
            <div class="cart_item_image">
              <img src="./img/product/4.png" alt="" />
            </div>
            <div class="cart_item_detail">
              <h5>Mangoes</h5>
              <p><span class="quantity">1</span> x <span class="rate">250</span></p>
            </div>
          </div>
        </div>
        <div class="cart_item">
          <div class="cart_item_remove">
            <button>
              <i class="fas fa-xmark"></i>
            </button>
          </div>
          <div class="cart_item_details">
            <div class="cart_item_image">
              <img src="./img/product/5.png" alt="" />
            </div>
            <div class="cart_item_detail">
              <h5>Mangoes</h5>
              <p><span class="quantity">1</span> x <span class="rate">250</span></p>
            </div>
          </div>
        </div>
        <div class="cart_item">
          <div class="cart_item_remove">
            <button>
              <i class="fas fa-xmark"></i>
            </button>
          </div>
          <div class="cart_item_details">
            <div class="cart_item_image">
              <img src="./img/product/6.png" alt="" />
            </div>
            <div class="cart_item_detail">
              <h5>Mangoes</h5>
              <p><span class="quantity">1</span> x <span class="rate">250</span></p>
            </div>
          </div>
        </div>
      </div>

      <div class="cart_total py-4 d-flex justify-content-between">
        <h1 class="sm-heading">Subtotal</h1>
        <span class="total">NPR. 5000 /-</span>
      </div>

      <a href="#" class="checkout">Checkout</a>
      <p>Free Shipping on All Orders Over NPR. 1500!</p>
    </div>
  </section>

  <!-- Product tab
    1. Prodcut tab
    -->
  <section class="product section-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12">
          <div class="product_category">
            <div class="product_category_title d-flex justify-content-between align-items-center">
              <i class="fa-solid fa-bars"></i>
              <h1 class="sm-heading">Categories</h1>
              <i class="fa-solid fa-angle-down"></i>
            </div>
            <div class="tab-nav d-flex flex-column align-items-start">
              <?php
              //calling catogey function
              getcategory();

              ?>
              <!-- 
                <button class="tablinks" onclick="openTab(event,'firstTab') ">
                  <i class="fas fa-bag-shopping"></i>
                  Vegetable
                </button>
                <button class="tablinks" onclick="openTab(event,'secondTab') ">
                  <i class="fa-solid fa-dumpster-fire"></i>
                  Fruits
                </button>
                <button class="tablinks" onclick="openTab(event,'thirdTab') ">
                  <i class="fa-solid fa-fish"></i>
                  Fish and Seafood
                </button>
                <button class="tablinks" onclick="openTab(event,'fourthTab') ">
                  <i class="fa-solid fa-shop"></i>
                  Butter and Cream
                </button>
                <button class="tablinks" onclick="openTab(event,'fifthTab') ">
                  <i class="fa-solid fa-jar"></i>
                  Oil and Vinegar
                </button>
                <button class="tablinks" onclick="openTab(event,'sixthTab') ">
                  <i class="fa-solid fa-hand-holding-droplet"></i>
                  Breads
                </button>
                <button class="tablinks" onclick="openTab(event,'seventhTab') ">
                  <i class="fa-solid fa-tractor"></i>
                  Farm Machineries
                </button>
                <button class="tablinks" onclick="openTab(event,'eightTab') ">
                  <i class="fa-solid fa-seedling"></i>
                  Fertilizers
                </button>
                <button class="tablinks" onclick="openTab(event,'ninthTab') ">
                  <i class="fa-solid fa-seedling"></i>
                  Seed
                </button> -->
            </div>
          </div>
        </div>
        <div class="col-lg-9 col-md-12">
          <div id='firstTab' class='tab-detail text-center'>
            <div class='product_tab'>
              <div class='product_list'>
                <!-- //fetching products -->
                <?php
                //calling function
                search_product();
                
                 get_all_products();
                get_unique_products();

                ?>

              </div>
              <!-- <div class="category-btn py-5"> -->
                <?php
                viewmoreall();
                ?>
              </div>
            </div>
          </div>
          <!-- <div id="secondTab" class="tab-detail">
              <div class="product_list">
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/fruits/2.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/fruits/3.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/fruits/4.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/fruits/5.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/fruits/6.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/fruits/7.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/fruits/8.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/fruits/9.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="category-btn py-5">
                <a href="fruits.html" class="more-btn">View More</a>
              </div>
            </div>
            <div id="thirdTab" class="tab-detail">
              <div class="product_list">
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/seafood/1.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/seafood/2.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/seafood/3.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/seafood/4.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/seafood/5.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/seafood/6.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/seafood/7.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/seafood/8.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="category-btn py-5">
                <a href="seafood.html" class="more-btn">View More</a>
              </div>
            </div>
            <div id="fourthTab" class="tab-detail">
              <div class="product_list">
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/bread/1.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/bread/2.jpeg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/bread/3.jpeg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/bread/4.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/bread/5.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/bread/6.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="category-btn py-5">
                <a href="butter.html" class="more-btn">View More</a>
              </div>
            </div>
            <div id="fifthTab" class="tab-detail">
              <div class="product_list">
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/oil/1.png" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/oil/2.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/oil/3.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/oil/4.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/oil/5.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/oil/6.png" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="category-btn py-5">
                <a href="oil.html" class="more-btn">View More</a>
              </div>
            </div>
            <div id="sixthTab" class="tab-detail">
              <div class="product_list">
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/cream/1.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/cream/2.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/cream/3.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/cream/4.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="category-btn py-5">
                <a href="bread.html" class="more-btn">View More</a>
              </div>
            </div>
            <div id="seventhTab" class="tab-detail">
              <div class="product_list">
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/tools/1.jpeg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/tools/2.jpeg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/tools/3.jpeg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/tools/4.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="category-btn py-5">
                <a href="machines.html" class="more-btn">View More</a>
              </div>
            </div>
            <div id="eightTab" class="tab-detail">
              <div class="product_list">
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/fertilizer/1.png" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/fertilizer/2.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/fertilizer/3.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/fertilizer/1.png" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/fertilizer/2.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/fertilizer/3.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="category-btn py-5">
                <a href="fertilizer.html" class="more-btn">View More</a>
              </div>
            </div>
            <div id="ninthTab" class="tab-detail">
              <div class="product_list">
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/seed/1.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/seed/2.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/seed/3.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/seed/4.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/seed/5.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/seed/6.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/seed/7.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product_list_item">
                  <div class="product_list_item_image">
                    <a href="./product-details.html">
                      <img src="./img/seed/8.jpg" alt="Kiwi" />
                    </a>
                  </div>
                  <div class="product_list_item_detail">
                    <a href="./product-details.html" class="sm-heading">Onions</a>
                    <del>NPR. 400 </del>
                    <span>NPR. 400 </span>
                  </div>
                  <div class="product_list_item_hover">
                    <ul class="d-flex justify-content-between align-items-center">
                      <li>
                        <a href="#" class="view_icon">
                          <i class="fas fa-eye"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_cart_icon">
                          <i class="fas fa-cart-shopping"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="add_wish_icon">
                          <i class="fas fa-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="category-btn py-5">
                <a href="seed.html" class="more-btn">View More</a>
              </div>
            </div> -->
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- Subscription list -->
  <div class="package section-wrapper">
    <div class="container">
      <div class="section-title pb-4">
        <h1 class="lg-heading">Subscription Plans</h1>
        <h1 class="sm-heading">Buy Product on Subscription Basis</h1>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
          <div class="plan">
            <div class="price">
              <h1 class="lg-heading">Rs. 100</h1>
              <p>Per Day</p>
            </div>
            <div class="plan_title">
              <h1 class="sm-heading">Daily Plan</h1>
            </div>
            <ul>
              <li>1 Ltr. Pure Milk</li>
              <li>Coriender Leaves</li>
              <li>2 Eggs</li>
              <li>Sharp 6:00 AM delivery</li>
              <li>Online Payment</li>
            </ul>
            <div class="pricing_btn text-center">
              <a href="#" class="sub_btn">
                <span>Subscribe</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
          <div class="plan">
            <div class="price">
              <h1 class="lg-heading">Rs. 500</h1>
              <p>Per Week</p>
            </div>
            <div class="plan_title">
              <h1 class="sm-heading">Weekly Plan</h1>
            </div>
            <ul>
              <li>1 Ltr. Pure Milk</li>
              <li>Coriender Leaves</li>
              <li>2 Eggs</li>
              <li>Sharp 6:00 AM delivery</li>
              <li>Online Payment</li>
            </ul>
            <div class="pricing_btn text-center">
              <a href="#" class="sub_btn">
                <span>Subscribe</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
          <div class="plan">
            <div class="price">
              <h1 class="lg-heading">Rs. 1500</h1>
              <p>Per 14 Day</p>
            </div>
            <div class="plan_title">
              <h1 class="sm-heading">Double Week Plan</h1>
            </div>
            <ul>
              <li>1 Ltr. Pure Milk</li>
              <li>Coriender Leaves</li>
              <li>2 Eggs</li>
              <li>Sharp 6:00 AM delivery</li>
              <li>Online Payment</li>
            </ul>
            <div class="pricing_btn text-center">
              <a href="#" class="sub_btn">
                <span>Subscribe</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
          <div class="plan">
            <div class="price">
              <h1 class="lg-heading">Rs. 2000</h1>
              <p>Per Month</p>
            </div>
            <div class="plan_title">
              <h1 class="sm-heading">Monthly Plan</h1>
            </div>
            <ul>
              <li>1 Ltr. Pure Milk</li>
              <li>Coriender Leaves</li>
              <li>2 Eggs</li>
              <li>Sharp 6:00 AM delivery</li>
              <li>Online Payment</li>
            </ul>
            <div class="pricing_btn text-center">
              <a href="#" class="sub_btn">
                <span>Subscribe</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Training blog -->
  <div class="blog section-wrapper">
    <div class="container">
      <div class="section-title pb-4">
        <h1 class="lg-heading">News and Updates</h1>
        <h1 class="sm-heading">Go through our blogs for being upto date with the agro industry</h1>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="blog_item">
            <div class="blog_image">
              <a href="blog-details.html">
                <img src="./img/blog/1.jpg" alt="" />
              </a>
            </div>
            <div class="blog_details">
              <div class="blog_date">
                <p class="text-center">
                  20 <br />
                  Aug
                </p>
              </div>
              <ul class="blog_info">
                <li>
                  <i class="fas fa-user"></i>
                  <p>by <span>Admin</span></p>
                </li>
                <li>
                  <i class="fas fa-comments"></i>
                  <p><span>2 </span>Comments</p>
                </li>
              </ul>
              <div class="blog_detail">
                <h4><a href="blog-details.html"> Which healthy food growth strategies required </a></h4>
                <p>Duis aute irure dolor lipsum simply free text the local markets.</p>
              </div>
              <div class="blog_btn text-center">
                <a href="blog-details.html" class="more-btn"> Read More </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="blog_item">
            <div class="blog_image">
              <a href="blog-details.html">
                <img src="./img/blog/1.jpg" alt="" />
              </a>
            </div>
            <div class="blog_details">
              <div class="blog_date">
                <p class="text-center">
                  20 <br />
                  Aug
                </p>
              </div>
              <ul class="blog_info">
                <li>
                  <i class="fas fa-user"></i>
                  <p>by <span>Admin</span></p>
                </li>
                <li>
                  <i class="fas fa-comments"></i>
                  <p><span>2 </span>Comments</p>
                </li>
              </ul>
              <div class="blog_detail">
                <h4><a href="blog-details.html"> Which healthy food growth strategies required </a></h4>
                <p>Duis aute irure dolor lipsum simply free text the local markets.</p>
              </div>
              <div class="blog_btn text-center">
                <a href="blog-details.html" class="more-btn"> Read More </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="blog_item">
            <div class="blog_image">
              <a href="blog-details.html">
                <img src="./img/blog/1.jpg" alt="" />
              </a>
            </div>
            <div class="blog_details">
              <div class="blog_date">
                <p class="text-center">
                  20 <br />
                  Aug
                </p>
              </div>
              <ul class="blog_info">
                <li>
                  <i class="fas fa-user"></i>
                  <p>by <span>Admin</span></p>
                </li>
                <li>
                  <i class="fas fa-comments"></i>
                  <p><span>2 </span>Comments</p>
                </li>
              </ul>
              <div class="blog_detail">
                <h4><a href="blog-details.html"> Which healthy food growth strategies required </a></h4>
                <p>Duis aute irure dolor lipsum simply free text the local markets.</p>
              </div>
              <div class="blog_btn text-center">
                <a href="blog-details.html" class="more-btn"> Read More </a>
              </div>
            </div>
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