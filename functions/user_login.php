<?php
include('../includes/connect.php');
include('../functions/common_functions.php');

if(isset($_POST['user_register']) && $_SERVER['REQUEST_METHOD'] == "POST"){
    $user_name = $_POST['fullName'];
    $user_email = $_POST['email'];
    $contact = $_POST['phone'];
    $user_role = $_POST['role'];
    $role_company = $_POST['role_company_name'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $hash_password = password_hash($password,PASSWORD_BCRYPT,$options = ['cost' => 12,]);
    $send_email = $_POST['send_email'];
    $terms = $_POST['terms'];
    $user_image = $_FILES['user_image']['name'];
    $user_image_temp = $_FILES['user_image']['tmp_name'];
    $user_ip = getIPAddress();

    //select query
    $select_query = "Select * from `user_table` where email='$user_email' or role_company_name='$role_company'";
    $result = mysqli_query($con,$select_query);
    $num_rows= mysqli_num_rows($result);
    if($num_rows>0){
        echo "<script>alert('Role exist!');</script>";
    }
    else{
    //insert query
    move_uploaded_file($user_image_temp, "./user_images/$user_image");
    $insert_query = "INSERT INTO `user_table`(`username`, `email`, `phone`, `role`,`role_company_name`,`address`, `password`, `user_image`, `terms`, `user_ip`,`send_email`) VALUES ('$user_name','$user_email',$contact,'$user_role','$role_company','$address','$hash_password','$user_image','$terms','$user_ip','$send_email ')";
    $sql_execute = mysqli_query($con,$insert_query);
    if($sql_execute){
        echo "<script>alert('Register successfully!');</script>";
    }
    else{
        echo "<script>alert('Register unsuccessful!');</script>";
    }
}
//selecting cart items
$select_cart_items="Select * from `cart_details` where ip_address = '$user_ip'";
$result_cart = mysqli_query($con,$select_cart_items);
$rows_count = mysqli_num_rows($result_cart);
if($rows_count>0){
    $_SESSION['username']=$user_email;
    echo "<script>alert('You have items in cart');</script>";
    echo "<script>window.open('../user_area/checkout.php','_self');</script>";
}
else{
    echo "<script>window.open('../index.php.php','_self');</script>";
}
}

?>