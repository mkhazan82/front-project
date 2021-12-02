<!DOCTYPE html>
<html lang="fa">
    <head>
        <title> ویرایش محصول</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
  
        <form action=""method="post"enctype="multipart/form-data">
           
        
            
         <label for="p_name">نام محصول :</label>  
         <input type="text"name="p_name"id="p_name"class="text text-fulname"value="<?php  echo $product_name  ?>">
         
         <br>
         <label for="p_date">قیمت  :</label>  
         <input type="text"name="price"id="price"class="text text-fulname"value="<?php  echo $product_price  ?>">
         <label for="p_count" class="short-text-label">تعداد :</label>
         <input type="number"name="p_count"id="p_count"class="text short-text"value="<?php  echo $product_count ?>">
         <label for="p_image">تصویر محصول:</label>  
         <input type="text"name="image"id="image"class="text text-fulname"value="<?php  echo $product_image ?>">
      
         <br>
             
      <label for="body-text">توضیحات :</label>
        
      <textarea name="body_text"id="body_text"class="text multi-text"><?php  echo $product_detail  ?></textarea>
<br>
<button id="add-product" type="submit"name="submit" class="short btn btn-filled primary">ویرایش محصول</button> 
        </form>
        
    </body>
</html>
