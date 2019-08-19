	<style media="screen">
	.middle{
		width: 1200px;
		margin: 0 auto;
		text-align: center;
		margin-top: 150px;
	}
	</style>
	<form method="POST" action="<?php echo WEBROOT; ?>/admin/checkadminlogin">
		<?php //if (isset($_GET['err'])) : ?>
			<div class="err">
				<?php //foreach($_GET['err'] as $err) : ?>
					<?php //echo $err; ?>
				<?php //endforeach; ?>
			</div>
		<?php //endif; ?>
    <div class="middle">
  		<h1 class="login-h1">Login</h1>
  		<div class="form-control">
  			<legend for="email">Email Adress</legend>
  		</div>
      <input type="email" name="email" id="email">
  		<div class="form-control">
  			<legend for="username">Username</legend>
  			<input type="username" name="username" id="username">
  		</div>
  		<div class="form-control">
  			<legend for="password">Password</legend>
  			<input type="password" name="password" id="password">
  		</div>
  		<input type="submit" name="submit" value="Login">
    </div>
</form>
