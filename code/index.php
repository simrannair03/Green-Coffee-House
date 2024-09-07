<?php
$conn = mysqli_connect("localhost", "root", "", "shop_db");
if(isset($_POST["submit"])){
  $id=$_POST["id"];
  $name = $_POST["name"];
  $price=$_POST["price"];
  $product_detail=$_POST["product_details"];
  if($_FILES["image"]["error"] == 4){
    echo
    "<script> alert('Image Does Not Exist'); </script>"
    ;
  }
  else{
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if ( !in_array($imageExtension, $validImageExtension) ){
      echo
      "
      <script>
        alert('Invalid Image Extension');
      </script>
      ";
    }
    else if($fileSize > 1000000){
      echo
      "
      <script>
        alert('Image Size Is Too Large');
      </script>
      ";
    }
    else{
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, 'image/' . $newImageName);
      $query = "INSERT INTO products VALUES('$id', '$name','$price', '$newImageName','$product_detail')";
      mysqli_query($conn, $query);
      echo
      "
      <script>
        alert('Successfully Added');
      </script>
      ";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Upload Image File</title>
  </head>
  <body>
    <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">
        <label for="id">Id : </label>
        <input type="text" name="id" id = "id" required value=""> <br> 
        <label for="name">Name : </label>
        <input type="text" name="name" id = "name" required value=""> <br>
        <label for="price">Price : </label>
        <input type="number" name="price" id = "price" required> <br>
        <label for="image">Image : </label>
        <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value=""> <br>
        <label for="product_details">Product_Details : </label>
        <input type="text" name="product_details" id = "product_details" required value=""> <br><br>
        <button type ="submit" name = "submit">Submit</button>
    </form>
    <br>
  </body>
</html>
