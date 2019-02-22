<!DOCTYPE html>
<?php
	include_once("connect.php");
	$id_movie = mysqli_real_escape_string($conn, $_POST['id_movie']);
	$description = mysqli_real_escape_string($conn, $_POST['description']);
	echo "$id_movie - $description";
	$result_movies = "UPDATE mymovies SET description =  '$description' WHERE id_movie = '$id_movie'";
	
	$resultado_movies = mysqli_query($conn, $result_movies);	
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php
		if(mysqli_affected_rows($conn) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=/'>
				<script type=\"text/javascript\">
					alert(\"Description has been changed.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=/'>
				<script type=\"text/javascript\">
					alert(\"Description remains the same.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>