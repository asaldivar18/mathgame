<?php include("header.php");
 $_SESSION["email"] = $_POST['email'];
 $_SESSION["password"] = $_POST['password'];
 if ($_SESSION["username"] != "a@a.a" && $_SESSION["password"] !="a" ){
 		$_SESSION["loginerror"] = "Invalid email-password combination";
 	    header("Location: login.php");
 	}?> 
	<p>Welcome, enter the answers!</p>
		 <a href="logout.php" type="submit" class="btn btn-primary pull-right">Log Out</a>
	</div>
	<div>
	<h2 class="text-danger">What is....</h2>
	<h3>
	 <?php 
	 	$_num1 = rand(0,20); 
	 	$_num2 = rand(0,20);
	 	$_num3 = rand(0,1);
	 	$_SESSION["score"] = 0; 
		$_SESSION["game"] = 0;
		$_SESSION["answer"] = $_num1 + $_num2;
	 	echo $_num1 . "+";
	 	echo $_num2;
	 ?>
	 </h3>
	 <form action="answer.php" method="post" role=form>
	 <input type="text" class="form-control" id="userinput" name="userinput" placeholder="???">
	 <button type="submit" class="btn btn-primary">Check answer</button>
	 </form>
	 <h2 class="text-primary">
	 Your Score
	 <?php
	 	echo  "\n" . $_SESSION["score"] . "/" . $_SESSION["game"];
	 ?>
	</div>
		</body>
</html>