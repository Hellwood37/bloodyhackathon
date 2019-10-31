<?php
require_once 'connect.php';
$pdo = new \PDO(SERVER,USER,PASS);


$hasemptyfield = false;
$name = $email = $movie = $hero = $vilain = "";
if (isset($_POST['isSubmit']) === true)
{
    if (empty($_POST['name']) === true)
{
    echo 'Ton nom bordel';
    $hasemptyfield = true;
}

if (empty($_POST['email']) === true)
{
    echo 'Ton email bordel';
    $hasemptyfield = true;
}
if (empty($_POST['movie']) === true)
{
    echo 'Un titre ça te parle non?';
    $hasemptyfield = true;
}
if (empty($_POST['hero']) === true)
{
    echo 'ton hero il est ou ?? bordel';
    $hasemptyfield = true;
}
if (empty($_POST['vilain']) === true)
{
    echo 'Non d une pipe en bois, le mechant il est ou ?? foutre punaise';
}
if (empty($_POST['histoire']) === true)
{
    echo 'Ton histoire please';
}
if (empty($_POST['name']) === false && empty($_POST['email']) === false && empty($_POST['movie']) === false && empty($_POST['hero']) === false && empty($_POST['vilain']) === false && empty($_POST['histoire']) === false)
{
    echo "test";
    $name = isset($_POST['name']) ? trim($_POST['name']) : NULL;
    $email = isset($_POST['email']) ? trim($_POST['email']) : NULL;
    $movie = isset($_POST['movie']) ? trim($_POST['movie']) : NULL;
    $hero = isset($_POST['hero']) ? trim($_POST['hero']) : NULL;
    $vilain = isset($_POST['vilain']) ? trim($_POST['vilain']) : NULL;
    $histoire = isset($_POST['histoire']) ? trim($_POST['histoire']) : NULL;
    $query = "INSERT INTO movies_pitches(Movie_name, Main_character, Main_vilain, Pitch, User_name, Email) VALUES (:name, :email, :movie, :hero, :vilain, :histoire)";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':name', $name, \PDO::PARAM_STR);
    $statement->bindValue(':email', $email, \PDO::PARAM_STR);
    $statement->bindValue(':movie', $movie, \PDO::PARAM_STR);
    $statement->bindValue(':hero', $hero, \PDO::PARAM_STR);
    $statement->bindValue(':vilain', $vilain, \PDO::PARAM_STR);
    $statement->bindValue(':histoire', $histoire, \PDO::PARAM_STR);
    $statement->execute();

    header('Location: formreturn.php');
}

}


