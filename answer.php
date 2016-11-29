<?php include("header.php");
if (empty($_POST["userinput"]) || !is_numeric($_POST["userinput"]) ){
    $_error = "Please enter an integer.";
} else if ($_SESSION["answer"] == $_POST["userinput"]) {
$_SESSION["score"]++;
$_SESSION["game"]++;
$_error = "Correct!";
} else if ($_SESSION["answer"] != $_POST["userinput"]) {
$_SESSION["game"]++;
$_error = "Try again....";
}
	 	$_num1 = rand(0,20); 
	 	$_num2 = rand(0,20);
        $_num3 = rand(0,1);
	 	$_SESSION["result"] = $_SESSION["answer"];
        if ($_num3 == 0) {
            $_SESSION["answer"] = $_num1 + $_num2;
            $_operation = "+";     
        }
        if ($_num3 == 1 ) {
            $_SESSION["answer"] = $_num1 - $_num2;
            $_operation = "-";
        }
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
        <em><?php echo $_error; ?></em>
	<br/>
	<h2 class="text-danger">
        
        What is....</h2>
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