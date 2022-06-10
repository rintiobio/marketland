<?php 
	
	include_once 'db_conn.php';
	session_start();

	if(isset($_POST['submit'])){
	 
		$student_id = $_SESSION['id'];
		$question = $_POST['question']; 		
		$tag = $_POST['tags'];

		$sql = "INSERT INTO `student_questions` (student_id,question,tag) VALUES ('$student_id','$question','$tag')";

		if (mysqli_query($conn, $sql)) {
			echo "<script>alert('Question Posted Successfully!');
			window.location.href='questions.php';</script>";
		} else {
			echo "Error: " . $sql . "" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
?>