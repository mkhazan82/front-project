<!doctype html>
<html lang="fa">
    <head>
        <title> مدیریت محصولات</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

    </head>
    <body>
       

   <table class="datatable"> 
   <th>id</th>
<th>نام کالا</th>
<th>قیمت (تومان)</th>
<th>تعداد</th>
<th>توضیحات</th>
<th>تصویر بندانگشتی</th>
<th></th>
<th></th>
<?php
foreach($productList as $product)
{
   
    echo "
<tr>
<td>{$product['id']}</td>
<td>{$product['p_name']}</td>
<td>{$product['price']}</td>
<td>{$product['p_count']}</td>
<td>{$product['body_text']}</td>
<td><img src='{$product['p_image']}'class='img-tumbnail'></td>
<td><a href ='editProduct-controler.php?id={$product['id']}'class='btn btn-outlined-button '>ویرایش</a></td>
<td><a href ='admin-deleteProduct-controler.php?id={$product['id']}'class='btn btn-outlined-button'>حذف</a></td>
</tr>
   
   ";
}

   ?>  
      </table>
      <br>
        
        <a href="addProduct.html" class="btn btn-filled primary ">افزودن محصول
        <i class="fas fa-plus-circle"></i>
        </a>

<br>
    </body>
</html>