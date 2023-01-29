<?php
include('../includes/connect.php');
include('../functions/common_functions.php');

if(isset($_GET['user_id'])){
    $user_id=$_GET['user_id'];
}

//getting total items and total price of all intl_get_error_message
$get_ip = getIPAddress();
$total_price = 0;
$cart_query_price="Select * from `cart_details` where ip_address='$get_ip'";
$invoice_number=mt_rand();
$status='pending';
$result_cart_price = mysqli_query($con,$cart_query_price);
$count_products =mysqli_num_rows($result_cart_price);
while($row_price=mysqli_fetch_array($result_cart_price)){
    $product_id=$row_price['product_id'];
    $select_products="Select * from `products` where product_id = $product_id";
    $run_price= mysqli_query($con,$select_products);
    while($row_product_price = mysqli_fetch_array($run_price)){
        $product_price=array($row_product_price['product_price']);
        $product_values = array_sum($product_price);
        $total_price+=$product_values;
    }
}

//getting quantity from cart
$get_cart = "Select * from `cart_details`";
$run_cart = mysqli_query($con,$get_cart);
$get_item_quantity = mysqli_fetch_array($run_cart);
$quantity = $get_item_quantity['quantity'];
if($quantity==0){
    $quantity=1;
    $subtotal = $total_price;
}else{
    $quantity=$quantity;
    $subtotal=$total_price*$quantity;
}

$insert_orders = "INSERT INTO `user_orders`( `user_id`, `amount_due`, `total_products`, `order_date`, `order_status`, `invoice_number`) VALUES ($user_id,$subtotal,$count_products,NOW(),'$status',$invoice_number)"; 
$result_query=mysqli_query($con,$insert_orders);
if($result_query){
    echo "<script>alert('Orders are submitted succesfully)</script>";
    echo "<script>window.open('user_profile.php','_self')</script>";
}
?>

