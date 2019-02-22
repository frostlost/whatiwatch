<!DOCTYPE html>
<?php
session_start();
include_once("connect.php");
$id_movie = filter_input(INPUT_GET, 'id_movie', FILTER_SANITIZE_NUMBER_INT);

if(!empty($id_movie)){
	$result_movies = "DELETE FROM mymovies WHERE id_movie='$id_movie'";
        $resultado_movies = mysqli_query($conn, $result_movies);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>It was destroyed!</p>";
		header("Location: /");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Error! The movie was not destroyed yet!</p>";
		header("Location: /");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>You have to choose on Title first!</p>";
	header("Location: naweb.site");
}
