<?php
include('../includes/connect.php');
if($con){
  // die(mysqli_error($con));
  echo "dies";
}
if(isset($_POST['insert_product']) && $_SERVER['REQUEST_METHOD'] == "POST"){
  $product_title = $_POST['product_title'];
  $product_keywords = $_POST['product_title'];
  $product_price = $_POST['product_price'];
  $product_after_price = $_POST['product_after_price'];
  $product_category = $_POST['product_category'];
  $product_description = $_POST['product_description'];
  $product_highlight = $_POST['product_highlight'];
  $product_descript = $_POST['product_descript'];
  $product_status = 'true';

  //accessing images
  $product_image = $_FILES['product_image']['name'];

  //accessing image tmp name
  $temp_image = $_FILES['product_image']['tmp_name'];

  //checking empty condition
  if($product_title=='' or $product_price=='' or $product_after_price=='' or $product_category=='' or $product_description=='' or $product_highlight=='' or $product_descript=='' or $product_image==''){
    echo "<script>alert('Please fill all the avaliable fields')</script>";
  }
  else{
    //storing image to folder
    move_uploaded_file($temp_image,"./product_image/$product_image");

    //insert query
  $insert_query = "INSERT INTO `products`(product_title,product_keywords,product_price,product_after_price,product_description,product_category,product_highlight,product_descript,product_image,date,status)
  VALUES ('$product_title','$product_keywords',$product_price,$product_after_price,'$product_description','$product_category','$product_highlight','$product_descript','$product_image',NOW(),'$product_status')";
  $result = mysqli_query($con,$insert_query);
  if($result){
    echo "<script>alert('Product insert successfully.')</script>";
  }
  if(!$result){
    echo "<script>alert('Product insert not successfully.')</script>";
  }
  }
}
?>

<div class="container">
              <div class="new_product">
                <form action="" method="post" class="add_new_product" enctype="multipart/form-data">
                  <fieldset class="name">
                    <!-- <legend>Product Title</legend> -->
                    <label for="product_title">Product Title</label>
                    <input type="text" name="product_title" placeholder="Add a Title" />
                  </fieldset>
                  <div class="price">
                    <label>Price</label>
                    <input type="text" name="product_price">
                  </div>
                  <div class="price">
                    <label>After Price</label>
                    <input type="text" name="product_after_price">
                  </div>
                  <div class="one_line_description">
                    <input type="text" name="product_description" placeholder="Say about product in One Line" />
                  </div>
                  <div class="new_product_category">
                    <label for="product_category">Select The Category</label>
                    <select name="product_category" id="">
                      <?php
                      $select_query = "Select * from `category`";
                      $result_query = mysqli_query($con,$select_query);
                      while($row = mysqli_fetch_assoc($result_query)){
                        $category_title = $row['category_title'];
                        $category_id = $row['category_id'];
                        echo "<option value='$category_title'>$category_title</option>";
                      }
                      ?>
                  
                    </select>
                  </div>

                  <ul class="new_product-highlight">
                    <label for="highlight">Add Highlights</label>
                    <li><input type="text" name="product_highlight" id="" /></li>
                    <!-- <li><input type="text" name="product_highlight" id="" /></li>
                    <li><input type="text" name="product_highlight" id="" /></li> -->
                    <a href="#" class="more-highlight">Add More</a>
                  </ul>
                  <div class="product_keywords">
                  <label for="product_keywords">Product keywords:</label>
                    <input type="text" name="product_keywords" placeholder="product keywords" />
                  </div>

                  <div class="new_product_desctiption">
                    <label for="description">Describe Your Product</label>
                    <textarea name="product_descript" id="" cols="30" rows="10"></textarea>
                  </div>
                  <div class="new_product_image">
                    <img src="" alt="" />
                    <p>Select a Featured Image for Blog</p>
                    <input type="file" name="product_image" id="featuredImage" />
                  </div>
                  <button type="submit" name="insert_product" value="Update Product" class="update">Update Product</button>
                </form>
              </div>
            </div>