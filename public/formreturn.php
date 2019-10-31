<?php
require_once 'connect.php';
$pdo = new \PDO(SERVER, USER, PASS);


$query = "SELECT Movie_name, Main_character, Main_vilain, Pitch FROM movies_pitches";
$statement = $pdo->prepare($query);
$statement->execute();
$data = $statement->fetchAll(PDO::FETCH_ASSOC);


?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="Listing de ptichs de films d'horreur - Hackathon #1">
     <meta name="author" content="Mikael, Romain, Guillaume, Alexandre, Etienne">
     <link rel="shortcut icon" type="image/x-icon" href="public/images/8577citrouille-halloween.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Special+Elite&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contactStyle.css">
    <link rel="stylesheet" href="css/inspirationStyle.css">
</head>

<body>
<nav class="navbar navbar-expand-lg ">
    <a class="navbar-brand" href="#">CHAIR DE PITCH</a>
    <button class="navbar-toggler ml-auto custom-toggle" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="tiret"></span>
        <span class="tiret"></span>
        <span class="tiret"></span>
        <span class="tiret"></span> 
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Votre pitch</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="formreturn.php">Inspirez vous...</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="inspiration.php">Ils assurent !</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
          </div>
</nav>
  <div class="form-return">
  <div class="container-fluid">
      <div class="row">

  <?php
        foreach($data as $key => $value)
        {
            echo '<div class= "card col-sm-8 col-md-6 col-lg-3  bg-dark">';
            echo '<div class="card-body">';
            echo '<p>' . "Titre : " . $value["Movie_name"] . '</p>';
            echo '<p>' . "Héro : " . $value["Main_character"] . '</p>';
            echo '<p>' . "Mechant : " . $value["Main_vilain"] . '</p>';
            echo '<p>' . "Speech : " . $value["Pitch"] . '</p>';
            echo '</div>';
            echo '</div>';
        }
        ?>
      </div> 
    </div>
  </div>
  <footer class="footer">
    <ul>
        <li><a href="#ChairDePitch">Chair de pitch</a></li>
        <li><a href="#VotrePitch">Votre pitch</a></li>
        <li><a href="#InspirezVous">Inspirez vous</a></li>
        <li><a href="contact.php">Contactez-nous</a></li>
    </ul>
</footer>
  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>



