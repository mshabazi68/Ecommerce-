   <?php
$sql ="SELECT * FROM categories WHERE parent =0";
$pquery = $db-> query($sql);
 ?>
<!-- top nav bar-->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <a href="index.php" class="navbar-brand"> Shaunta's Boutique</a>
    <ul class="nav navbar-nav">
      <?php
        while ($parent =  mysqli_fetch_assoc($pquery)):
        ?>
       <?php
          $parent_id = $parent['id'];
          $sql2 = "SELECT * FROM categories WHERE parent = '$parent_id'";
          $cquery =$db-> query($sql2);
       ?>
       <!-- menu items-->
      <li class="dropdown">
        <!-- using bootstrap to mage dropdown-menu and use the dorp down dropdown-toggle to make a clickable menu here.-->
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <?php echo $parent['category']; ?>
           <span class="caret"> </span></a>
        <ul class="dropdown-menu" role="menu">
          <?php
          while ($child= mysqli_fetch_assoc($cquery)) : ?>
          <li> <a href="#"> <?php echo $child['category']; ?><!--Shirts--></a> </li>
        <?php endwhile; ?>
        <!--  <li> <a href="#"> Pants</a> </li>
          <li> <a href="#"> Shoes</a> </li>
          <li> <a href="#"> Accessories</a> </li>-->
        </ul>
      </li>
    <?php endwhile; ?>
    </ul>
  </div>
</nav>
