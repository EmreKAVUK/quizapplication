<?php include 'database.php';?>
<?php session_start(); ?>
<?php 
 //Get Total Questions
 $query = "Select * From questions";
 //GET results
 $results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
 $total = $results->num_rows;


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Quiz Application</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<div class="container">
			<h1>Certified Ethical Hacker Exam</h1>

		</div>
	</header>
	<main>
		 <div class="container">
			<h2>CEH Certificate</h2>
			<p>This is a multip choice quiz to test your knowledge of Cyber Security</p>
			<ul>
				<li><strong>Number Of Questions: </strong><?php echo $total; ?></li>
				<li><strong>Type: </strong>Multiple Choice</li>
				<li><strong>Estimated Time: </strong><?php echo round($total * .33); ?> Minutes</li>
			</ul>		
			<a href="question.php?n=1" class="start">Start Quiz</a> 	
		 </div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2021, CEH
		</div>
	</footer>

</body>
</html>