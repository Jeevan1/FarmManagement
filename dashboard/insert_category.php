<?php
include('../includes/connect.php');
if(isset($_POST['insert_category']) && $_SERVER['REQUEST_METHOD'] == "POST"){
    $category_title = $_POST['category_title'];
    
    //select data from database
    $select_query = "Select * from `category` where category_title ='$category_title'";
    $result_select = mysqli_query($con,$select_query);
    $number = mysqli_num_rows($result_select);
    if($number>0){
      echo "<script>alert('Already have the same category.')</script>";
    }
    $insert_query = "INSERT INTO `category`(category_title)
    VALUES ('$category_title');";
    $result = mysqli_query($con,$insert_query);
    if($result){
      echo "<script>alert('category insert successfully.')</script>";
    }
    if(!$result){
      echo "<script>alert('category insert successfully.')</script>";
    }
    
  }

?>

<div class="container">
              <div class="">
                <form action="" method="post" class="add_new_product">
                  <fieldset class="category">
                    <legend>Add Category</legend>
                    <!-- <label for="category">Add Category</label> -->
                    <input type="text" name="category_title" placeholder="Add Category" />
                  </fieldset>

                  <button type="submit" name="insert_category" class="update">Insert Category</button>
                </form>
              </div>
            </div>