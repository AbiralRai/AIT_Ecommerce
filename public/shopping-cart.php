<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>
<?php
	if(!empty($_GET["action"]))
  {
    $id = $_GET["id"];
    $action = $_GET["action"];
    $quantity = $_POST["quantity"];
    if($_GET["action"] == "add")
    {//If user wants to add a product to the cart
      $sql = "SELECT * FROM products WHERE product_id ='".$_GET['id']."'";
      $query = mysqli_query($conn,$sql);
      if(mysqli_num_rows($query) > 0)
      {
        $row = mysqli_fetch_assoc($query);
          $item_array = array (
            'id' => $row["product_id"],
            'name' => $row["product_name"],
            'image' => $row["product_image"],
            'quantity' => $_POST["quantity"],
            'price' => $row["price"]
          );
      }
      if(isset($_SESSION["shopping_cart"]))
      {//If some products has been added to the cart
        $item_array_id = array_column($_SESSION["shopping_cart"],'id');        
        if(!in_array($_GET['id'],$item_array_id))
        {//specific item hasn't been added
            $count = count($_SESSION["shopping_cart"]);
            $_SESSION["shopping_cart"][$count] = $item_array;        
            echo '<script>window.location="shopping_cart.php"</script>';
        } else {
          //Item already added
          foreach($_SESSION["shopping_cart"] as $key => $value) {
							if($_SESSION["shopping_cart"][$key]['id'] == $_GET["id"]) {
                $_SESSION["shopping_cart"][$key]['quantity'] = number_format($_SESSION["shopping_cart"][$key]['quantity'] + $quantity, 0);        
                echo '<script>window.location="shopping_cart.php"</script>';
							}
					}
        }
      } else if (!isset($_SESSION["shopping_cart"]))
      {//If there is nothing in the cart
        $_SESSION["shopping_cart"][0] = $item_array;        
        echo '<script>window.location="shopping_cart.php"</script>';
      }
    } 
    else if($_GET["action"] == "remove")
    {//If user wants to remove a product
      foreach ($_SESSION["shopping_cart"] as $key => $value)
			{
        if($_GET['id'] == $value['id'])
        {//Remove the product from the cart
          unset($_SESSION["shopping_cart"][$key]);
          echo '<script>window.location="/public/shopping_cart.php"</script>';
        }
      }
//     } else if ($_GET["action"] == "empty")
//     {//Check Out
//       for($i = 0; $i < count($_SESSION["shopping_cart"]); $i++)
//       {
//         $email = $_SESSION["email"];
//         $p_id = $_SESSION["shopping_cart"][$i]["id"];
//         $date = date("Y-m-d");
//         $status = "pending";
//         $p_price = $_SESSION["shopping_cart"][$i]["price"];
//         $query = "INSERT INTO orders (c_email,p_id,o_date,o_status,o_price) values ('$email','$p_id','$date','$status','$p_price')";
//         $result = mysqli_query($conn, $query);
        
//       }
//       if ($result)
//         {
//           unset($_SESSION["shopping_cart"]);
//           $checkout_message = "You have successfully checkout";
//         } else {
//           $checkout_message = "Unable to check out";
//         }
//     }
  }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cart</title>
  <style>
    .checkout_btn:hover{
      background-color: black;      
      text-decoration: none;
      color: white;
    }
    .checkout_btn{
      padding: 15px;
      text-decoration: none;
      background-color:#1a1a1a;
      color: white;
      border-radius: 5px;
    }
  </style>
  <style>
  .navbar {
    background-color: rgba(41, 128, 185, .7);
  }
</style>
</head>
<div class="container-main mt-4 pt-2 mb-5 ">
  <div class="container-main">

    <div class="logo_container_signin mt-5">
      <img src="../public/img/logo.png"></img>
    </div>
    <div class="container cart ">
      <table style="width:100%;">
        <thead>
          <tr style="border: 0.5px solid #f2f2f2; max-height: 50px; background-color:#f2f2f2; font-size: 20px; font-family: 'Muli', sans-serif;">
            <th  style="text-align: center;">Product</th>
            <th  style="text-align: center;">Product Name</th>
            <th  style="text-align: center;">Price</th>
            <th  style="text-align: center;">Quantity</th>
            <th  style="text-align: center;">Total</th>
            <th  style="text-align: center;"> Remove</th>
		      </tr>
        </thead>
        <tbody>
          
        </tbody>
          <?php
            $total = 0;
            if (!empty($_SESSION["shopping_cart"]))
            {
              foreach($_SESSION["shopping_cart"] as $key=>$value)
              {
          ?>
             <tr style="border: 1px solid #f2f2f2">
                <th style="width: 15%; text-align: center; border: 1px solid #f2f2f2"><img style="width: 50%;" src="/public/img/<?php echo $value["image"]; ?>"></th>
                <th  style="text-align: center; border: 1px solid #f2f2f2"><?php echo $value["name"]; ?></th>
                <th  style="text-align: center; border: 1px solid #f2f2f2"><?php echo $value["price"]; ?></th>
                <th  style="text-align: center; border: 1px solid #f2f2f2"><?php echo $value["quantity"]; ?></th>
                <th  style="text-align: center; border: 1px solid #f2f2f2"><?php echo number_format($value["price"] * $value["quantity"], 2); ?></th>
                <th  style="text-align: center; border: 1px solid #f2f2f2"><a href="shopping_cart.php?action=remove&id=<?php echo $value["id"]; ?>"><i class="fas fa-trash" style="font-size: 30px;" ></i></a></th>
            </tr>
          <?php
                $total = $total + ($value["quantity"] * $value["price"]);
              }
            }
          ?>
        </tbody>
		  </table>
      <p style="font-size:20px; font-family:'Muli', sans-serif; text-align: right; width: 100%; margin-top: 50px;">
        <strong>Total: $<?php echo $total;?></strong>
      </p>
<!--       <div class="checkout" style="width: 100%; text-align: center;">
        <a class="checkout_btn" href="shopping_cart.php?action=empty" style="">Check Out</a>
      </div>    
      <p style="text-align: center; font-size: 15px; margin-top: 30px;">
          <?php
            if($_GET["action"] == "empty")
            {
              echo $checkout_message;
            }
          ?>
      </p> -->
    </div>
  </div>
	<footer style="background-color: white;">
	</footer>
	</body>
</html>