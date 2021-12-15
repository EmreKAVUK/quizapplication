<?php session_start(); ?>
<?php include 'database.php'; ?>

<?php
	//Set Question Number
	$number = (int) $_GET['n'];

	//GET total Questions
	$query = "SELECT * FROM questions";

	//GET result
	$results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
	$total = $results->num_rows; 

	//Get Question 
	$query = "SELECT * FROM questions WHERE question_number = $number";
	//Get result
	$result = $mysqli->query($query) or die ($mysqli->error.__LINE__);

	$question = $result->fetch_assoc();

	//Get Choices 
	$query = "SELECT * FROM choices WHERE question_number = $number";
	//Get results
	$choices = $mysqli->query($query) or die ($mysqli->error.__LINE__);

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
			<div class="current">Question s<?php echo $question['question_number']; ?> of <?php echo $total;?></div>
			<p class="question">
				<?php echo $question['text']; ?>
			</p>
			<form method="post" action="process.php">
				<ul class="choices">
					<?php while($row = $choices->fetch_assoc()) : ?>
						<li><input name="choice" type="radio" value="<?php echo $row['id']; ?>"><?php echo $row['text']; ?></li>
					<?php endwhile; ?>
				</ul>
				<input type="submit" name="Submit">
				<input type="hidden" name="number" value="<?php echo $number; ?>">
			</form>
		 </div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2021, CEH
		</div>
	</footer>

</body>
</html>