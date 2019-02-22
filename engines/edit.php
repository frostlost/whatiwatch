<!DOCTYPE html>
<?php
session_start();
include_once("connect.php");
$id_movie = filter_input(INPUT_GET, 'id_movie', FILTER_SANITIZE_NUMBER_INT);
$result_movies = "SELECT * FROM mymovies WHERE id_movie= '$id_movie'";
$resultado_movies = mysqli_query($conn, $result_movies);
$row_mymovies = mysqli_fetch_assoc($resultado_movies);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Edit</title>		
	</head>
	<body>
		<a href="/">Home</a><br>
		<h1>Movie edit</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_edit.php">
			<input type="text" name="id_movie" value="<?php echo $row_mymovies['id_movie']; ?>">
			
			<label>Insert a new description: </label>
                        <input type="text" name="description" placeholder="Type a description here!" value="<?php echo $row_mymovie['description']; ?>"><br><br>			
			<input type="submit" value="Editar">
		</form>
	</body>
</html>