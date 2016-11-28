<?php include("header.php"); ?>
				<p>Please log on to play </p>
			</div>
			<form action="index.php" method="post" role="form">
				<div class="form-group">
					<label for="email">Email:</label>
					<div class="col-sm-12"> <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email Adress"></div>
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<div class="col-sm-12"><input type="text" class="form-control" id="password" name="password" placeholder="Enter Password"></div>
				</div>
					<div class="pull-right">
						<button type="submit" class="btn btn-primary">Login</button>
					</div>
					<div class="row">
						<p class='text-danger'>
													<?php 
							echo $_SESSION['loginerror']; ?>
						</p>
					</div>
			</form>
	</body>
</html>