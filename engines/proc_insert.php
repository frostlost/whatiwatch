<?php
    include_once("connect.php");
    
    $imdb_mymovies = $_POST['imdb'];
    $title_mymovies = $_POST['title'];
    $description_mymovies = $_POST['description'];
    $imgurl_mymovies = $_POST['imgurl'];
    
    // echo "$imdb_mymovies - $title_mymovies - $description_mymovies - $imgurl_mymovies";
    
    $result_mymovies = "INSERT INTO mymovies(imdb, title, description, imgurl) VALUES ('$imdb_mymovies', '$title_mymovies', '$description_mymovies', '$imgurl_mymovies')";
    $resultado_mymovies = mysqli_query($conn, $result_mymovies);
    
    if(mysqli_affected_rows($conn) != 0){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=/'>
					<script type=\"text/javascript\">
						alert(\"A new title has been created successfully!\");
					</script>
				";	
			}else{
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=/'>
					<script type=\"text/javascript\">
						alert(\"Error! A new title was not created!\");
					</script>
				";	
			}
    
?>