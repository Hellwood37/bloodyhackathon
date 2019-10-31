<?php
require_once 'form.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>    
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
  <meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
  <link rel="shortcut icon" href="https://nsm09.casimages.com/img/2019/10/31//19103102235924921116486658.png"/>

  <link rel="stylesheet" href="creation.css">
  <title>Your movie</title>
</head>
<body>
  <form action = "./form.php" method="POST">
    <div class="form-group">
      <label for="name" >Nom</label>
      <input type="text" class="form-control" id="name" placeholder="Ton nom" name="name">              
      <label for="email">email</label>
      <input type="email" class="form-control" id="email" placeholder="Ton email" name="email">
      <label for="text">film</label>
      <input type="text" class="form-control" id="text" placeholder="Titre de ton film" name="movie">
      <label for="text">Hero</label>
      <input type="text" class="form-control" id="text" placeholder="Nom du hero" name="hero">
      <label for="text">Monstre</label>
      <input type="text" class="form-control" id="text" placeholder="Nom de la créature" name="vilain">           
    </div>                
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Ton script</label>
      <textarea class="form-control" name="histoire" id="exampleFormControlTextarea1" rows="3"></textarea>
      <input onclick class="btn btn-primary buttonSubmit" id="btnSubmit" type="submit" value="Submit" name="isSubmit">
    </div>../images/foret-nuit.jpg
  </form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


