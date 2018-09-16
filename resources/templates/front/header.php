<!DOCTYPE html>
<php lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--     <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    
    <title>BinaryWorld</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #00d1ff!important;
            }
        }
        
        .show li:hover {
        background: rgba(41, 128, 185, .7)!important;
        padding:0px!important;
        }
         a:hover{
       background: transparent!important;
       }
      
 .wrong_user{
	color: #ff0000;
	height:60px;
	width: 95%;
	border: 2px solid #ff8080;
	border-radius: 2px;
	text-align:left;
	margin-top: 10px;
	background-color: #ffe6e6;
}
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark  scrolling-navbar">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand" href="index.php">
                <strong>BinaryWorld</strong>
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

           <!-- Links -->
<div class="collapse navbar-collapse" id="navbarSupportedContent">

  <!-- Left -->
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="modal" data-target="#modalContactForm">Contact</a></li>
    <?php  
    if (isset($_SESSION["email"])) 
         { 
         echo '<li class="nav-item mt-2 ">
           <div class="dropdown">
             <a href="#" class="dropdown-link dropdown-toggle text-white" data-toggle="dropdown">'.$_SESSION["fullname"].'<span class="caret"></span></a>
             <ul class="dropdown-menu">
               <li class="nav-item"><a href="/public/logout.php">Log Out</a></li>
             </ul>
           </div>
         </li>'; 
         } else { 
          echo '<li class="nav-item mt-2 ">
           <div class="dropdown">
             <a href="#" class=" text-white dropdown-link dropdown-toggle" data-toggle="dropdown">Account<span class="caret"></span></a>
             <ul class="dropdown-menu">
               <li class="nav-item"><a href="/public/signin.php">Sign In</a></li>
               <li class="nav-item"><a href="/public/signup.php">Sign Up</a></li>
             </ul>
           </div>
         </li>';}
          //echo '<li><a id="index_signin_button" href="../public/signin.php">Sign In</a></li>'; }
     echo '<li class="nav-item">';
    ?>
       <a class="nav-link waves-effect" href="/public/shopping_cart.php">
                             <span class="badge red z-depth-1 mr-1 d-none "> </span>
                             <i class="fa fa-shopping-cart"></i>
                             <span class="clearfix d-none d-sm-inline-block"> Cart </span>
                         </a>
     </li>
  </ul>

            </div>

        </div>
    </nav>
    <!-- Navbar !!!-->