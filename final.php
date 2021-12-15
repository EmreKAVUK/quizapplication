<?php session_start(); ?>
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
			<h2>You are Done!</h2>
				<p>Congrats! you have completed the test</p>
				<p>Final Score: <?php echo $_SESSION['score']; ?></p>
				<?php session_destroy(); ?>
				<a href="question.php?n=1" class="start">Take Again</a>
		 </div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2021, CEH
		</div>
	</footer>

</body>
</html>