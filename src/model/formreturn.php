<?php
require_once '../../public/connec.php';
$pdo = new \PDO(DSN, USER, PASS);


$query = "SELECT Movie_name, Main_Character, Main_Vilain, Pitch FROM movies_pitches";
$statement = $pdo->prepare($query);
$statement->execute();
$data = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

 <div class="container-fluid">
  <div class="row">
     <div class="card">
        <div class="card-body">
        <?php
        foreach($data as $key => $value)
        {
          foreach($value as $movie)
          {
            echo '<h3>'; 
            echo $movie;
            echo '</h3>';
            echo '<p>';
            echo $movie;
            echo '</p>';
            echo '<p>';
            echo $movie;
            echo '</p>';
            echo '<p>';
            echo $movie;
            echo '</p>';
          }
        }
        ?>
        </div>
     </div>
  </div>
</div> 


