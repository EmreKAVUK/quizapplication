<?php include 'database.php' ?>
<?php session_start(); ?>
<?php 
	//Check score 
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
	}

	if($_POST){
		$number = $_POST['number'];
		$selected_choice = $_POST['choice'];
		$next = $number+1;

		//GET total Questions
		$query = "SELECT * FROM questions";

		//GET result
		$results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
		$total = $results->num_rows; 	

		//Get correct choice
		$query = "SELECT * FROM choices WHERE question_number = $number AND is_correct =1";

		//Get result
		$result = $mysqli->query($query) or die ($mysqli->error.__LINE__);

		//Get row
		$row = $result->fetch_assoc();

		//Set Correct
		$correct_choice = $row['id'];

		//Compare
		if($correct_choice == $selected_choice){
			$_SESSION['score']++;
		}
		echo $next;

		//check last question
		if($number == $total){
			header("Location: final.php");
			exit();
		}
		else{
			header("Location: question.php?n=".$next);
		}
	}
?>