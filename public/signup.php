<?php require_once("../resources/config.php");?>
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

<style>
  .navbar {
    background-color: rgba(41, 128, 185, .7);
  }
</style>
<div class="container-main mt-3 pt-1 mb-5 ">
  <div class="container-main">

    <div class="logo_container_signin mt-5">
      <img src="../public/img/logo.png"></img>
    </div>
    <div class="container signin_container ">
      <div class="signin-title-container">
        <h1 id="signin_title">Sign Up</h1>
      </div>
      <form action="/public/userRegister.php" method="post" class="signin_form">
        <div class="userdetails_field">
          <i class="fas fa-user" style="font-size: 30px; margin-right: 5px; color: #404040"></i>
          <input style="padding: 5px" type="text" placeholder="Username" name="signin_username" size="28" required>
        </div>
        <div class="userdetails_field">
          <i class="fa fa-envelope" style="font-size: 30px; margin-right: 5px; color: #404040"></i>
          <input style="padding: 5px" type="text" placeholder="Email" name="signin_email" size="28" required>
        </div>
        <div class="userdetails_field">
          <i class="fas fa-key" style="font-size: 30px; margin-right: 5px; color: #404040"></i>
          <input style="padding: 5px" type="password" placeholder="Password" name="signin_password" size="28" required>
        </div>
        <?php 
            if (isset($_SESSION["AlreadyExistedMessage"]))
              {
          ?>
          <div class="container wrong_user">
            <?php 
                  echo '<p>'.$_SESSION["AlreadyExistedMessage"].'<p>';
                  unset($_SESSION["AlreadyExistedMessage"]);
            ?>
          </div>
          <?php 
              }
          ?>
        <button id="signin_button" type="submit" value="Sign In">Sign Up</button>
      </form>
      <p id="link-signin-with-signup"><strong>Already have account? Please <a id="signup_link" href="/public/signin.php">Sign In</a> here!</strong></p>
    </div>
  </div>
</div>
<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">
  <?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
</footer>
<!-- Footer -->