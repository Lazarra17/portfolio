<?php
  include 'php/db/connect.php';
  $sql = "SELECT * FROM products";
   $result = mysql_query($sql);
?>
<html>
<head>
	<title>Home</title>
	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
	<!-- <link type="text/css" rel="stylesheet" href="css/mystyle.css"> -->
  <link type="text/css" rel="stylesheet" href="css/forms.css">
  <link type="text/css" rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  <link type="text/css" rel="stylesheet" href="css/sidebar.css">
</head>
<body>
  
<?php if(isset($_GET["product_no"]) && isset($_GET["prod_name"]) && isset($_GET["prod_picture"]) && isset($_GET["prod_price"])){
    
    $ip = "";
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
    $ip = $_SERVER['REMOTE_ADDR'];
    }
    
    $prod_no = $_GET["product_no"];
    $prod_name = $_GET["prod_name"];
    $prod_picture = $_GET["prod_picture"];
    $prod_price = $_GET["prod_price"];
    
    
    if (isset($_SESSION["email"])){
        $email = $_SESSION["email"];
    if (checkOrder($prod_no,$ip,$email) == 0){
    addToCart($ip,$prod_no,$prod_name,$prod_picture,$prod_price,$email);
    }else{
        
   $quantity = checkCart($ip,$prod_no,$email);
   updateCart($ip,$prod_no,$quantity,$email);

    }
    }else{
        echo "<script>alert('Login is required to use Shopping Cart. ');</script>";
        /**
    if (checkOrder($prod_no,$ip,"guest") == 0){
    addToCart($ip,$prod_no,$prod_name,$prod_picture,$prod_price,"guest");
    }else{
        
   $quantity = checkCart($ip,$prod_no,"guest");
   updateCart($ip,$prod_no,$quantity,"guest");

    }        
       */ 
    }
  }?>

  
  
    <div class="col s12" style="margin-left:2%;">
      <div class="container white" style="margin-top: 10px;height:<?php if (mysql_num_rows($result) > 3 )echo "120%"; else echo "100%";?>; padding-top: 10px; padding-bottom: 3%;width:85%;box-shadow: 0px 0px 5px grey;">
       <div class="register-title" > 
   
        <h5 class=""  >Product </h5>
        <div id="products">
           <form method="POST">        
  <?php
  
  
  $result = mysql_query($sql);
  while ($rows = mysql_fetch_assoc($result)){
    
  
  ?>
   
        <div id="display">
        <img src="<?php echo $rows["product_picture"]?>"/><h6><?php echo $rows["product_name"]?></h6><h6>&#8369 <?php echo $rows["price"]?>  / <?php echo $rows["unit"]?></h6>
        <a id="buy" href="product_description.php?product_no=<?php echo $rows['product_no']; if (isset($_SESSION["email"])){echo "&type=customer";}?>">BUY NOW</a>
     
             
                      <a style="padding:0px;margin: 0px;" href="index.php?product_no=<?php echo "$rows[product_no]&prod_name=$rows[product_name]&prod_picture=$rows[product_picture]&prod_price=$rows[price]"; if (isset($_SESSION["email"])){echo "&type=customer";}?>" id="cart" class='waves-effect waves-cyan'>
                       <i style="padding:0px;margin: 0px;" class='mdi-action-add-shopping-carts'></i>
                      </a>
                     
        </div>
       <?php }?>
      
   
      </div>
        </div>
      
        </form>
      </div>
    </div>
      <?php include "php/footer.php"; ?>
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>