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
  <style>
    .cart_image a img{
      height: 70px;
      width: 120px;
      object-fit: contain;
    }
  </style>


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
              <a href="display_all_products.php">Products</a>
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
    </ul>
  </nav>


<!-- //cart function -->
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

     <!-- Cart page -->

     <div class="cart_page">
      <div class="container">
        <div class="row justify-content-end">
          <div class="col-xl-12 col-sm-12">
            <form action="" method="post">
            <table class="table">
              <tbody class="tbody">
                <?php 
                global $con; 
                $total=0; 
                $ip = getIPAddress();
                $cart_query = "Select * from `cart_details` where ip_address='$ip'";
                $result = mysqli_query($con,$cart_query);
                $result_count = mysqli_num_rows($result);
                if($result_count>0){
                while($row=mysqli_fetch_array($result)){
                  $product_id = $row['product_id'];
                  $quantity= $row['quantity'];
                  $select_products = "Select * from `cart_details` where product_id=$product_id";
                  $result_product= mysqli_query($con, $select_products);
                  
                  while($row_product_price = mysqli_fetch_array($result_product)){
                  $item_price = $row_product_price['product_price'] ;
              
                  $product_price = array($item_price );
                  $price_table = $row_product_price['product_price'];
                  $product_title = $row_product_price['product_title'];
                  $product_image = $row_product_price['product_image'];
                  $product_price_sum = array_sum($product_price);
                  $total+=$product_price_sum;
                echo "
                <tr>
              <td class='cart_product_remove'>
                    <button type='submit' value='$product_id' class='outline-none' name='remove_cart'><i class='fas fa-xmark'></i></button>
                </td>
                  <td class='cart_image'>
                    <a href='./product_details.php?product_id=$product_id&product_title=$product_title'>
                      <img src='./dashboard/product_image/$product_image' alt='$product_title' />
                    </a>
                  <td class='cart_product_info'>
                    <a href='./product_details.php?product_id=$product_id&product_title=$product_title' class='sm-heading'>$product_title</a>
                  </td>
                  <td>
                  "; 
                  $get_ip = getIPAddress();
                     if(isset($_POST['update_cart'])){
                        $quantities = $_POST['qty'];
                        $update_cart = "Update `cart_details` set quantity=$quantities where ip_address='$get_ip'";
                        $result_quantity = mysqli_query($con,$update_cart);
                        $total = $total*$quantities;
                        if($result_quantity){
                          echo "<script>window.onload('carts.php')</script>";
                        }
                     }
                     
                     echo "
                    <div class='cart_product_quantity'>
                      <button class='dec-quantity'>-</button>
                      <input type='number' name='qty' min='0' value='$quantity' class='cart_product_value' />
                      <button class='inc-quantity'>+</button>
                    </div>
                    ";
                    
                    
                    
                  }
                     echo "
                  </td>
                  <td class='cart_product_add_cart'>
                    <input type ='submit' class='more-btn border-0' value='Update cart' name='update_cart'>
                  </td>
                  <td class='cart_product_item_total'>
                    <span>NPR $price_table*$quantity /-</span>
                </td>
         </tr>";
                  }
                }
          else{
            echo "<h2 class='text-danger mx-auto d-flex justify-content-center'>Cart is empty</h2>";
          }
          if($result_count>0){     
          echo "<tr class='cart-coupon-row'>
        <td colspan='5'>
    <div class='cart-coupon text-start'>
      <input type='text'  placeholder='Coupon code' class='p-3' />
      <button type='' class='more-btn'>Apply Coupon</button>
    </div>
  </td>
  <td>
    <button type='submit' name='' class='more-btn'>Update Cart</button>
  </td>
</tr>
</tbody>
</table>

</div>

<div class='col-xl-5 col-md-6 col-sm-12 shopping_cart_bill'>
<h4>Total Amount</h4>

<table class='table'>
<tbody>
<tr>
  <td>Cart Subtotal</td>
  <td>$total /-</td>
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
  <td><strong>$total /-</strong></td>
</tr>
</tbody>
</table>
<a href='./user_area/checkout.php' class='more-btn'>Proceed to checkout</a>
</div>";
echo "<a href='index.php' class='more-btn m-3 '>Continue shopping</a>";
}
else{
  echo "<a href='index.php' class='more-btn m-3 col-xl-5 col-md-6'>Continue shopping</a>";
}
 ?>
</form>
              
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