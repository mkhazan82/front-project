<?php
include 'adminPanel-view.php';


?>
  
        <form action=""method="post"enctype="multipart/form-data">
            
        
            
         <label for="p_name">نام محصول :</label>  
         <input type="text"name="p_name"id="p_name"class="text text-fulname">
         
         <br>
         <label for="p_date">قیمت:</label>  
         <input type="text"name="price"id="price"class="text text-fulname">
         <label for="p_count" class="short-text-label">تعداد :</label>
         <input type="number"name="p_count"id="p_count"class="text short-text">
         <label for="p_image">تصویر محصول:</label>  
         <input type="text"name="p_image"id="p_image"class="text text-fulname">
        <br>
     
      <label for="body-text">توضیحات :</label>
        
      <textarea name="body_text"id="body_text"class="text multi-text"></textarea>
<br>
<button id="add-product" type="submit" class=" btn btn-filled primary">افزودن محصول</button> 
        </form>
        </section>
    </body>
</html>
