<?php
//including connect file
include('./includes/connect.php');

//getting categories
function getcategory()
{
  global $con;
  $select_category = "Select * from `category`";
  $result_category = mysqli_query($con, $select_category);
  $open_tap = array("");

  while ($row_data = mysqli_fetch_assoc($result_category)) {
    $category_title = $row_data['category_title'];
    $category_id = $row_data['category_id'];
    echo "<a class='tablinks text-dark font-weight-bold' href='index.php?category=$category_title'>
                  <i class='fas fa-bag-shopping'></i>
                  $category_title
                </a>";
  }
}
//getting products
function getproducts()
{
  global $con;  //for function we cant directly access the local variable so making that globle variable.

  //condition to check isset or not
  if (!isset($_GET['category'])) {
    $select_query = "Select * from `products` order by rand() limit 0,8";
    $result_query = mysqli_query($con, $select_query);
    $num_of_rows = mysqli_num_rows($result_query);
    if ($num_of_rows == 0) {
      echo "<h2 class='d-block text-center text-danger'>No stoke for this category</h2>";
    }

    while ($row = mysqli_fetch_assoc($result_query)) {
      $product_id = $row['product_id'];
      $product_image = $row['product_image'];
      $product_title = $row['product_title'];
      $product_price = $row['product_price'];
      $product_after_price = $row['product_after_price'];
      echo "
      <div class='product_list_item'>
      <div class='product_list_item_image'>
        <a href='./product_details.php?product_id=$product_id&product_title=$product_title'>
          <img src='./dashboard/product_image/$product_image' alt='Kiwi' />
        </a>
      </div>
      <div class='product_list_item_detail'>
        <a href='./product-details.html' class='sm-heading'>$product_title</a>
        <del>NPR. $product_price</del>
        <span>NPR. $product_after_price </span>
      </div>
      <div class='product_list_item_hover'>
        <ul class='d-flex justify-content-between align-items-center'>
          <li>
            <a href='#' class='view_icon'>
              <i class='fas fa-eye'></i>
            </a>
          </li>
          <li>
            <a href='index.php?add_to_cart=$product_id' class='add_cart_icon'>
              <i class='fas fa-cart-shopping'></i>
            </a>
          </li>
          <li>
            <a href='#' class='add_wish_icon'>
              <i class='fas fa-heart'></i>
            </a>
          </li>
        </ul>
      </div>
    </div>";
    }
  }
}

//getting all products
function get_all_products()
{
  global $con;  //for function we cant directly access the local variable so making that globle variable.

  //condition to check isset or not
  if (!isset($_GET['category'])) {
    $select_query = "Select * from `products` order by rand()";
    $result_query = mysqli_query($con, $select_query);
    $num_of_rows = mysqli_num_rows($result_query);
    if ($num_of_rows == 0) {
      echo "<h2 class='d-block text-center text-danger'>No stoke for this category</h2>";
    }

    while ($row = mysqli_fetch_assoc($result_query)) {
      $product_id = $row['product_id'];
      $product_image = $row['product_image'];
      $product_title = $row['product_title'];
      $product_price = $row['product_price'];
      $product_after_price = $row['product_after_price'];
      echo "
    <div class='product_list_item'>
    <div class='product_list_item_image'>
      <a href='./product_details.php?product_id=$product_id&&product_title=$product_title'>
        <img src='./dashboard/product_image/$product_image' alt='Kiwi' />
      </a>
    </div>
    <div class='product_list_item_detail'>
      <a href='./product-details.html' class='sm-heading'>$product_title</a>
      <del>NPR. $product_price</del>
      <span>NPR. $product_after_price </span>
    </div>
    <div class='product_list_item_hover'>
      <ul class='d-flex justify-content-between align-items-center'>
        <li>
          <a href='#' class='view_icon'>
            <i class='fas fa-eye'></i>
          </a>
        </li>
        <li>
          <a href='index.php?add_to_cart=$product_id' class='add_cart_icon'>
            <i class='fas fa-cart-shopping'></i>
          </a>
        </li>
        <li>
          <a href='#' class='add_wish_icon'>
            <i class='fas fa-heart'></i>
          </a>
        </li>
      </ul>
    </div>
  </div>";
    }
  }
}



//getting unique products
function get_unique_products()
{
  global $con;  //for function we cant directly access the local variable so making that globle variable.

  //condition to check isset or not
  if (isset($_GET['category'])) {
    $category_title = $_GET['category'];
    $select_query = "Select * from `products` where product_category='$category_title' order by rand() limit 0,8";
    $result_query = mysqli_query($con, $select_query);

    //checking the products if not then this will run.
    $num_of_rows = mysqli_num_rows($result_query);
    if ($num_of_rows == 0) {
      echo "<h2 class='d-block text-center text-danger'>No stoke for this category</h2>";
    }

    while ($row = mysqli_fetch_assoc($result_query)) {
      $product_id = $row['product_id'];
      $product_image = $row['product_image'];
      $product_title = $row['product_title'];
      $product_price = $row['product_price'];
      $product_after_price = $row['product_after_price'];
      echo "
      <div class='product_list_item'>
    <div class='product_list_item_image'>
      <a href='./product_details.php?product_id=$product_id&product_title=$product_title'>
        <img src='./dashboard/product_image/$product_image' alt='Kiwi' />
      </a>
    </div>
    <div class='product_list_item_detail'>
      <a href='./product-details.html' class='sm-heading'>$product_title</a>
      <del>NPR. $product_price</del>
      <span>NPR. $product_after_price </span>
    </div>
    <div class='product_list_item_hover'>
      <ul class='d-flex justify-content-between align-items-center'>
        <li>
          <a href='#' class='view_icon'>
            <i class='fas fa-eye'></i>
          </a>
        </li>
        <li>
          <a href='index.php?add_to_cart=$product_id' class='add_cart_icon'>
            <i class='fas fa-cart-shopping'></i>
          </a>
        </li>
        <li>
          <a href='#' class='add_wish_icon'>
            <i class='fas fa-heart'></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
  ";
    }
  }
}
//reladed product view more
function product_detail()
{
  global $con;  //for function we cant directly access the local variable so making that globle variable.

  //condition to check isset or not
  if (isset($_GET['product_id'])) {
    if (!isset($_GET['category'])) {
      $product_category = $_GET['product_id'];
      $select_query = "Select * from `products` where product_id='$product_category' order by rand() limit 0,4";
      $result_query = mysqli_query($con, $select_query);
      $num_of_rows = mysqli_num_rows($result_query);
      if ($num_of_rows == 0) {
        echo "<h2 class='d-block text-center text-danger'>No stoke for this category</h2>";
      }

      while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $product_image = $row['product_image'];
        $product_title = $row['product_title'];
        $product_price = $row['product_price'];
        $product_after_price = $row['product_after_price'];
        echo "
    <div class='product_detail'>
    <div class='container'>
      <div class='row'>
        <div class='col-xl-6 col-md-12 col-sm-12'>
          <div class='image-slider'>
            <div class='image'>
              <img src='./dashboard/product_image/$product_image' alt='' />
            </div>
          </div>
          <ul class='image_slider_nav'>
            <li>
              <a href='#'>
                <img src='./img/blog/11.jpg' alt='' />
              </a>
            </li>
            <li>
              <a href='#'>
                <img src='./img/blog/12.jpg' alt='' />
              </a>
            </li>
            <li>
              <a href='#'>
                <img src='./img/blog/13.jpg' alt='' />
              </a>
            </li>
          </ul>
        </div>
        <div class='col-xl-6 col-md-12 col-sm-12'>
          <div class='product_title'>
            <h1 class='md-heading'>$product_title</h1>
            <span>Rs.<del>$product_price</del></span>
            <span>$product_after_price</span>
          </div>
          <p class='product_highlight'>
            Aliquam hendrerit a augue insuscipit. Etiam aliquam massa quis des mauris commodo venenatis ligula commodo leez sed blandit convallis
            dignissim onec vel pellentesque neque.
          </p>

          <div class='product_detail_btn'>
            <a href='index.php?add_to_cart=$product_id' class='more-btn'>Add to Cart</a>
            <a href='#' class='more-btn'>Add to Wishlist</a>
          </div>
        </div>

        <div class='col-xl-12 col-md-12 col-sm-12'>
          <div class='product_description'>
            <span class='more-btn'>Description</span>

            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima obcaecati numquam repellendus dicta itaque, cumque pariatur assumenda
              facilis earum optio officia quo porro eaque possimus nihil cupiditate omnis perspiciatis sit iusto. Officiis alias, quisquam animi at
              laudantium laboriosam. Commodi fugiat ullam facere molestias porro nobis. Facere commodi modi cumque perferendis.
            </p>
            <ul class='key-feature'>
              <li>Nam at elit nec neque suscipit gravida.</li>
              <li>Aenean egestas orci eu maximus tincidunt.</li>
              <li>Curabitur vel turpis id tellus cursus laoreet.</li>
            </ul>

            <p>
              All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on
              the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem
              Ipsum which looks reasonable.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
";
      }
    }
  }
}

function related_products()
{
  global $con;  //for function we cant directly access the local variable so making that globle variable.

  if (isset($_GET['product_id']) and isset($_GET['product_title'])) {
    if (!isset($_GET['category'])) {
      $product_category = $_GET['product_id'];
      $product_id_title = $_GET['product_title'];
      $select_query = "Select * from `products` where product_keywords like '%$product_id_title%' order by rand() limit 0,4";
      $result_query = mysqli_query($con, $select_query);
      $num_of_rows = mysqli_num_rows($result_query);
      if ($num_of_rows == 0) {
        echo "<h2 class='d-block text-center text-danger'>No stoke for this category</h2>";
      }

      while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $product_image = $row['product_image'];
        $product_title = $row['product_title'];
        $product_price = $row['product_price'];
        $product_after_price = $row['product_after_price'];
        echo "
  <!-- related products -->
          <div class='product_list d-inline-block'>
              <div class='product_list_item'>
                <div class='product_list_item_image'>
                  <a href=''./product_details.php?product_id=$product_id&product_title=$product_title'>
                    <img src='./dashboard/product_image/$product_image' alt='Kiwi' />
                  </a>
                </div>
                <div class='product_list_item_detail'>
                  <a href='./product-details.html' class='sm-heading'>$product_title</a>
                  <del>NPR. $product_price</del>
                  <span>NPR. $product_after_price </span>
                </div>
                <div class='product_list_item_hover'>
                  <ul class='d-flex justify-content-between align-items-center'>
                    <li>
                      <a href='#' class='view_icon'>
                        <i class='fas fa-eye'></i>
                      </a>
                    </li>
                    <li>
                      <a href='index.php?add_to_cart=$product_id' class='add_cart_icon'>
                        <i class='fas fa-cart-shopping'></i>
                      </a>
                    </li>
                    <li>
                      <a href='#' class='add_wish_icon'>
                        <i class='fas fa-heart'></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              </div>
              
  ";
      }
    }
  }
}
function viewmore_related()
{
  if (isset($_GET['product_id']) and isset($_GET['product_title'])) {
    if (!isset($_GET['category'])) {
      $product_category = $_GET['product_id'];
      echo "
  <div class='category-btn py-5'>
    <a href='related_product_all.php?product_title=$product_category' class='more-btn'>View More</a>
  </div>";
    }
  }
}



//view more link
function viewmore()
{
  global $con;  //for function we cant directly access the local variable so making that globle variable.
  if (isset($_GET['category'])) {
    $category_title = $_GET['category'];
    $category_title_lowercase = strtolower($category_title);
    echo "<a href='$category_title_lowercase.php' class='more-btn'>View More</a>";
  }
}
function viewmoreall()
{
  global $con;  //for function we cant directly access the local variable so making that globle variable.
  if (!isset($_GET['category'])) {
    echo "<a href='display_all_products.php' class='more-btn'>View More</a>";
  }
}


//searching product function

function search_product()
{
  global $con;
  //search bar matching
  if (isset($_GET['search_data_product'])) {
    $search_data_value = $_GET['search_data'];
    $search_query = "Select * from `products` where product_keywords like '%$search_data_value%'";
    $result_query = mysqli_query($con, $search_query);
    $num_of_rows = mysqli_num_rows($result_query);
    if ($num_of_rows == 0) {
      echo "<h2 class='d-block text-center text-danger'>No stoke for this category</h2>";
    }

    while ($row = mysqli_fetch_assoc($result_query)) {
      $product_id = $row['product_id'];
      $product_image = $row['product_image'];
      $product_title = $row['product_title'];
      $product_price = $row['product_price'];
      $product_after_price = $row['product_after_price'];
      echo "
      <div class='product_list_item'>
      <div class='product_list_item_image'>
        <a href='./product-details.html'>
          <img src='./dashboard/product_image/$product_image' alt='Kiwi' />
        </a>
      </div>
      <div class='product_list_item_detail'>
        <a href='./product-details.html' class='sm-heading'>$product_title</a>
        <del>NPR. $product_price</del>
        <span>NPR. $product_after_price </span>
      </div>
      <div class='product_list_item_hover'>
        <ul class='d-flex justify-content-between align-items-center'>
          <li>
            <a href='#' class='view_icon'>
              <i class='fas fa-eye'></i>
            </a>
          </li>
          <li>
            <a href='index.php?add_to_cart=$product_id' class='add_cart_icon'>
              <i class='fas fa-cart-shopping'></i>
            </a>
          </li>
          <li>
            <a href='#' class='add_wish_icon'>
              <i class='fas fa-heart'></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
    ";
    }
  }
}


//function to get ip address
function getIPAddress() {  
  //whether ip is from the share internet  
   if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
      }  
  //whether ip is from the proxy  
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
   }  
//whether ip is from the remote address  
  else{  
           $ip = $_SERVER['REMOTE_ADDR'];  
   }  
   return $ip;  
}  
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;

//cart function
function cart(){
  if(isset($_GET['add_to_cart'])){
    global $con;
    $ip = getIPAddress();
    $get_product_id=$_GET['add_to_cart'];
    $get_product = "Select * from `products` where product_id=$get_product_id";
    $result_query_product = mysqli_query($con, $get_product);
    $row = mysqli_fetch_assoc($result_query_product);
    $product_image = $row['product_image'];
    $product_title = $row['product_title'];
    $product_price = $row['product_price'];
    $select_query = "Select * from `cart_details` where ip_address='$ip' and product_id=$get_product_id";
    
    $result_query = mysqli_query($con, $select_query);
    $num_of_rows = mysqli_num_rows($result_query);
    if($num_of_rows>0){
      echo "<script>alert('This product is already present inside cart')</script>";
      echo "<script>window.open('index.php','_self')</script>";  //self-> redirect to same page.
    }
    else{
    $insert_query = "INSERT INTO `cart_details`(`product_id`, `ip_address`, `product_title`, `product_price`, `quantity`, `product_image`) VALUES ($get_product_id,'$ip','$product_title',$product_price,0,'$product_image')";
    $result_query = mysqli_query($con, $insert_query);
    echo "<script>alert('Product is added to cart')</script>";
    echo "<script>window.open('index.php','_self')</script>";
    }
  }
}


//function to get cart number
function cartItem(){
  if(isset($_GET['add_to_cart'])){
    global $con;
    $ip = getIPAddress();
    $select_query = "Select * from `cart_details` where ip_address='$ip'";
    
    $result_query = mysqli_query($con, $select_query);
    $count_cart_item = mysqli_num_rows($result_query);
  }
  else{
    global $con;
    $ip = getIPAddress();
    $select_query = "Select * from `cart_details` where ip_address='$ip'"; 
    $result_query = mysqli_query($con, $select_query);
    $count_cart_item = mysqli_num_rows($result_query);
  }
  echo $count_cart_item;
}

//cart open function
function cartOpen()
{
  global $con;  
  $ip = getIPAddress();
  $get_cart_ip = "Select * from `cart_details` where ip_address='$ip'";
  $query_cart = mysqli_query($con, $get_cart_ip);

    while ($row = mysqli_fetch_assoc($query_cart)) {
      $product_id = $row['product_id'];
      $product_image = $row['product_image'];
      $product_title = $row['product_title'];
      $product_price = $row['product_price'];
      $quantity = $row['quantity'];
      echo "
      <div class='cart_item_details'>
            <div class='cart_item_image'>
              <img src='./dashboard/product_image/$product_image' alt='$product_image' />
            </div>
            <div class='cart_item_detail'>
              <h5>$product_title</h5>
              <p><span class='quantity'>$quantity</span> x <span class='rate'>$product_price</span></p>
            </div>
          </div>
        
    ";
    }
    
}


?>