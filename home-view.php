
<!doctype html>
<html lang="fa">
    <head>
        <title>فروشگاه شال و روسری</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css" type="text/css ">
        <link  rel="stylesheet"   href="https://unpkg.com/swiper@7/swiper-bundle.min.css" type="text/css"/>
    </head>
    <body>
       

<div class="swiper">

  <div class="swiper-wrapper">

  
    <div class="swiper-slide "><img src="images/banner/banner1.png" alt="تصویر نیست"></div>
    <div class="swiper-slide"><img src="images/banner/banner2.png" alt="تصویر نیست"></div>
    <div class="swiper-slide"><img src="images/banner/banner3.png" alt="تصویر نیست"></div>
    ...
  </div>

  <div class="swiper-pagination"></div>


  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  
</div>





        <h2>ارزان ترین محصولات</h2>

<div class="grid-swiper">
   <div class="card-group "> 
  <div class="swiper-wrapper">
    <?php
        
        foreach( $productList as $product ){
    echo'<div class="swiper-slide">';
           include 'template/productCard.php';
    echo'</div>';
        }
      
      ?>
    
    <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
  </div>

</div>
  
      </div>
      
    </div>
      <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
       <script src="js/main.js"></script>
    </body>
</html>