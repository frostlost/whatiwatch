<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head> 
        <h2>Cadastro</h2>
    </head>
 <!-- Insert Section -->
          <section id="Insert">
            <div class="container">
              <h2 class="text-center text-uppercase text-secondary mb-0">Insert a movie in the list</h2>
              <hr class="star-dark mb-5">
              <div class="row">
                <div class="col-lg-8 mx-auto">
                  <!-- Start -->
                  <form method="POST" action="proc_insert.php" name="insertMovie" id="insertForm" novalidate="novalidate">
                    <div class="control-group">
                      <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>IMDb (7 numbers)</label>
                        <input class="form-control" name="imdb" type="text" placeholder="IMDb number" required="required" data-validation-required-message="Please enter the IMDb number with 7 numbers.">
                        <p class="help-block text-danger"></p>
                      </div>
                    </div>
                    <div class="control-group">
                      <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Title: </label>
                        <input class="form-control" name="title" type="text" placeholder="Title" required="required" data-validation-required-message="Please enter the title here.">
                        <p class="help-block text-danger"></p>
                      </div>
                    </div>
                    <div class="control-group">
                      <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>description: </label>
                        <textarea class="form-control" name="description" rows="5" type="text" placeholder="Movie description" required="required" data-validation-required-message="Please enter a description here."></textarea>
                        <p class="help-block text-danger"></p>
                      </div>
                    </div>
                    <div class="control-group">
                      <div class="form-group floating-label-form-group controls mb-0 pb-2">
                        <label>Image URL: </label>
                        <input class="form-control" name="imgurl" type="URL" placeholder="Image URL" required="required" data-validation-required-message="Please enter image URL.">
                        <p class="help-block text-danger"></p>
                      </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-xl" id="sendInsertButton">Insert</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section>
 
</html>