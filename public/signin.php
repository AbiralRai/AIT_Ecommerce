<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

<style>

.navbar {
    background-color: rgba(41, 128, 185, .7);
}
</style>
<div class="container-main mt-4 pt-1 mb-5 ">
  <div class="container-main">

	<div class="logo_container_signin mt-5">
		<img src="../public/img/logo.png"></img>
	</div>
	<div class="container signin_container ">		
		<div class="signin-title-container"><h1 id="signin_title">Sign In</h1></div>
		<form action="/public/signin-backend.php" method="post" class="signin_form">
			<div class="userdetails_field">
				<i class="fas fa-user" style="font-size: 30px; margin-right: 5px; color: #404040"></i>
				<input style ="padding: 5px" type="text" placeholder="Email" name="signin_email" size="28" required>
			</div>
			<div class="userdetails_field">
				<i class="fas fa-unlock" style="font-size: 30px; margin-right: 5px; color: #404040"></i>
				<input style ="padding: 5px" type="password" placeholder="Password" name="signin_password" size="28" required>
			</div>
			<button id="signin_button" type="submit" value="Sign In">Sign In</button>
		</form>
			<?php
				if (isset($_SESSION["email_err"])) 
				{
			?>
					<div class="container wrong_user">
			<?php
						echo $_SESSION["email_err"].'</br>';
						echo $_SESSION["password_err"];
			?>
					</div>
			<?php
				}
			?>
		<p id="link-signin-with-signup"><strong>Don't have an account? Please <a id="signup_link" href="/public/signup.php">Sign Up</a> here!</strong></p>		
	</div>
</div>
</div>
 <!-- Footer -->
                        <footer class="page-footer font-small unique-color-dark">
                        <?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
                        </footer>
                        <!-- Footer -->
                       