
<?php
  require_once 'core/init.php';
   include "includes/head.php";
   include "includes/navigation.php";
   include "includes/headerfull.php";
   include "includes/leftbar.php";
   //slecting all the product from id 1
   $sql="SELECT * FROM Products WHERE featured =1 ";
   $featured = $db->query($sql);
  ?>


    <!-- main content-->
    <!-- we divied the page into 12 part and col-md-8 will do it atumaticly on bootstrap-->
    <div class="col-md-8">
      <div class="row">
        <h2 class="text-center">Feature Products </h2>
        <?php while($product = mysqli_fetch_assoc($featured)) : ?>
        <div class="col-md-3 text-center" >
        <!--  <h4>Levis Jeans</h4>-->
        <h4><?php echo $product['title'];?> </h4>
        <!-- we are replacing all the static data with the php and the way is get's done is but adding php code insted of hard coding this way we getting data directly from our data base-->
        <!--  <img src="images/Products/men4.png" alt="Levis jeans" class="img-thumb" />-->
        <!-- sample of replacing is we echo (print) the id -->
        <img src="<?=$product['image'];?>" alt="<?= $product['title'];?>" class="img-thumb" />
          <!--<p class="List-price text-danger">List price <s>$59.99</s></p>-->
            <p class="List-price text-danger">List price <s>$<?=$product ['list_price'];?> </s></p>
          <p class="Price">Our price $<?=$product['price'];?></p>
          <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
        </div>
      <?php endwhile; ?>
      </div>
    </div>
    <?php

   include "includes/details.php" ;
   include 'includes/rightbar.php';
   include 'includes/footer.php';
    ?>

    <!--  <div class="col-md-3">
        <h4>Hollister Shirts</h4>
        <img src="images/Products/men1.png" alt="Hollister Shirts" class="img-thumb" />
        <p class="List-price text-danger">List price <s>$34.99</s></p>
        <p class="Price">Our price <s>$19.99</s></p>
        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
      </div>

      <div class="col-md-3">
        <h4>Fancy Shoes</h4>
        <img src="images/Products/women6.png" alt="Fancy Shoes" class="img-thumb" />
        <p class="List-price text-danger">List price <s>$69.99</s></p>
        <p class="Price">Our price <s>$49.99</s></p>
        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
      </div>

      <div class="col-md-3">
        <h4>Boys Hoodie</h4>
        <img src="images/Products/boys1.png" alt="Boys Hoodie" class="img-thumb" />
        <p class="List-price text-danger">List price <s>$29.99</s></p>
        <p class="Price">Our price <s>$18.99</s></p>
        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
      </div>
      <div class="col-md-3">
        <h4>Girls Dress</h4>
        <img src="images/Products/girls3.png" alt="Girls Dress" class="img-thumb" />
        <p class="List-price text-danger">List price <s>$34.99</s></p>
        <p class="Price">Our price <s>$22.99</s></p>
        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
      </div>

      <div class="col-md-3">
        <h4>Women Shirts</h4>
        <img src="images/Products/women7.png" alt="Women Shirts" class="img-thumb" />
        <p class="List-price text-danger">List price <s>$59.99</s></p>
        <p class="Price">Our price <s>$19.99</s></p>
        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
      </div>
      <div class="col-md-3">
        <h4>Women's Skirt</h4>
        <img src="images/Products/women3.png" alt="Women's Skirt" class="img-thumb" />
        <p class="List-price text-danger">List price <s>$29.99</s></p>
        <p class="Price">Our price <s>$22.99</s></p>
        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
      </div>

      <div class="col-md-3">
        <h4>Purse</h4>
        <img src="images/Products/women5.png" alt="Purse " class="img-thumb" />
        <p class="List-price text-danger">List price <s>$49.99</s></p>
        <p class="Price">Our price <s>$39.99</s></p>
        <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
      </div>
-->
