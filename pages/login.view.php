<?php require 'inc/header.php'; ?>

	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-md-4">
				<div class="card shadow-lg" style="border-radius: 0; border: none;">
					<div class="card-header text-center mt-3" style="background: #fff; border: none;">
						<h4 class="mt-2">Login to your account</h4>
						<span style="font-size: 13px; padding-top: 0;">Enter your username & password</span>
					</div>
					<div class="card-body">
						<form action="login.php" method="post" class="row g-3 needs-validation" novalidate>
							<div class="form-group">
								<label class="form-label">Username</label>
								<input type="text" class="form-control" name="username" required value="<?php if(isset($_SESSION['username'])) echo $_SESSION['username']; unset($_SESSION['username']);  ?>">
								<div class="valid-feedback">
      Looks good!
    </div>
							</div>
							<div class="form-group">
								<label class="form-label">Password</label>
								<input type="password" class="form-control" name="password" required>
							</div>
							<button class="col-12 btn btn-primary mt-3" type="submit" name="login">Login</button>
							<a href="register.php" class="float-end mt-3 fs-6">Register</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php require 'inc/footer.php'; ?>