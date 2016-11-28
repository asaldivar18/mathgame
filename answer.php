<?php include("header.php");
if ($_SESSION["answer"] == $_POST["userinput"]) {
$_SESSION["score"]++;
$_SESSION["game"]++;
} else {
$_SESSION["game"]++;
}
	 	$_num1 = rand(0,20); 
	 	$_num2 = rand(0,20);
	 	$_SESSION["result"] = $_SESSION["answer"];
	 	$_SESSION["answer"] = $_num1 + $_num2;
	 	$_operation = "+";
?>
	<p>Welcome, enter the answers!</p>
			 <a href="logout.php" type="submit" class="btn btn-primary pull-right">Log Out</a>

	</div>
	<div>
		<h2 class="text-primary">
	 <?php
	 echo "Answer: " . $_SESSION["result"] . "\t";   
	 echo "Your Answer: " .$_POST["userinput"];
	  ?>
	  </h2>
	<h2 class="text-danger">What is....</h2>
	<h3>
	 <?php 
	 	echo $_num1 . " ";
	 	echo $_operation . " ";
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
	</h2>
	</div>
		</body>
</html>