<?php
require_once '../../public/connec.php';
$pdo = new \PDO(DSN, USER, PASS);


$query = "SELECT Movie_name, Main_character, Main_vilain, Pitch FROM movies_pitches";
$statement = $pdo->prepare($query);
$statement->execute();
$data = $statement->fetchAll(PDO::FETCH_ASSOC);


?>
<html>
<header>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</header>

<body>
        <?php
        foreach($data as $key => $value)
        {
            echo '<div class="container-fluid">';
            echo '<div class="row">';
            echo '<div class="card">';
            echo '<div class="card-body">';
            echo '<p>' . $value["Movie_name"] . '</p>';
            echo '<p>' . $value["Main_character"] . '</p>';
            echo '<p>' . $value["Main_vilain"] . '</p>';
            echo '<p>' . $value["Pitch"] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>'; 
          
        }
        ?>
        </div>
     </div>
  </div>
</div> 
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>



