<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once "connect.php";

$pagina = filter_input(INPUT_POST, 'pagina', FILTER_SANITIZE_NUMBER_INT);
$qnt_result_pg = filter_input(INPUT_POST, 'qnt_result_pg', FILTER_SANITIZE_NUMBER_INT);

// Calcular o início visualização
$inicio = ($pagina * $qnt_result_pg) - $qnt_result_pg;

// Consultar no banco de dados
$result_mymovies = "SELECT * FROM mymovies ORDER BY id_movie DESC LIMIT $inicio, $qnt_result_pg";
$resultado_mymovies = mysqli_query($conn, $result_mymovies);

// Verificar se encontrou resultado na tabela "mymovies"
if (($resultado_mymovies) AND ($resultado_mymovies->num_rows !=0)) {
    ?>
    <table class="table table-striped table-bordered table-hover">
       <thead>
         <tr>
            <th>Image</th>
            <th>Title</th>
            <th>Description</th>
        </tr>
        </thead>
    <tbody>       
    <?php
    while($row_mymovies = mysqli_fetch_assoc($resultado_mymovies)){
        ?>
        <tr>
            <th><a href="https://www.imdb.com/title/tt<?php echo $row_mymovies['imdb']?>" target="_blank" rel="nofollow"><img src="<?php echo $row_mymovies['imgurl']?>" class="img-thumbnail" width="200" length="120" alt="<?php echo $row_mymovies['title']?>"</figure></a></th>
            <th><?php echo $row_mymovies['title']?><br><br><br>
                <div class="css">
                <button type="button" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $row_mymovies['id_movie']?>" data-whateverdescription="<?php echo $row_mymovies['description']?>">Edit</button>
                <br/><?php echo "<a type='button' class='btn btn-xs btn-danger' href='engines/proc_del.php?id_movie=" . $row_mymovies['id_movie'] . "'>Delete</a>"; ?></button>               
                </div>               
            </th>
            <th><p class="card-text" style="text-align: justify;"><?php echo $row_mymovies['description']?></p></th>            
        </tr>
        <?
    }?>
    </tbody>
    </table> 

    <?php
    // Paginação - Somar a quantidade de filmes e séries
        
    $result_pg = "SELECT COUNT(id_movie) AS num_result FROM mymovies";
    $resultado_pg = mysqli_query($conn, $result_pg);
    $row_pg = mysqli_fetch_assoc($resultado_pg);

    // Quantidade de página
    $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);

    // Limitar os links antes / depois
    $max_links = 2;

    echo '<nav aria-label="paginacao">';
    echo '<ul class="pagination">';
    echo '<li class="page-item">';
    echo "<span class='page-link'><a href='#' onclick='movies_list(1, $qnt_result_pg)'>First</a></span>";
    echo '</li>';
    for ($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++) {
        if($pag_ant >=1) {
            echo "<li class='page-item'><a class='page-link' href='#' onclick='movies_list($pag_ant, $qnt_result_pg)'> $pag_ant </a></li>";
        }
    }

    echo '<li class="page-item active">';
    echo '<span class="page-link">';
    echo "$pagina";
    echo '</span>';
    echo '</li>';

    for ($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++) {
        if($pag_dep <= $quantidade_pg) {
            echo "<li class='page-item'><a class='page-link' href='#' onclick='movies_list($pag_dep, $qnt_result_pg)'> $pag_dep </a></li>";
        }
    }

    echo '<li class="page-item">';
    echo "<span class='page-link'><a href='#' onclick='movies_list($quantidade_pg, $qnt_result_pg)'>Last</a></span>";
    echo '</li>';
    echo '</ul>';
    echo '</nav>';

} else {
    echo "<div class='alert alert-danger' role='alert'>Nenhum resultado encontrado!</div>";  
}
?>

    <!-- Modal for edit description -->
  
         
         
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Description</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form method="POST" action="http://naweb.site/engines/proc_edit.php" enctype="multipart/form-data">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">ID:</label>
                <input name="id_movie" type="text" class="form-control" id="id_movie">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Description:</label>
                <textarea name="description" class="form-control" id="description"></textarea>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Change it</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- Modal Javascript -->
    <script type=""text/javascript">
        $('#exampleModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          var recipientdescription = button.data('whateverdescription') // Extract info from data-* attributes
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var modal = $(this)
          modal.find('.modal-title').text('Change the description to ' + recipient)
          modal.find('#id_movie').val(recipient)
          modal.find('#description').val(recipientdescription)
        })
    </script>
