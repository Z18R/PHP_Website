<?php 
// var_dump($_SERVER["REQUEST_METHOD"]);
//alternative
// if (isset($_POST["submit"])){

// }
//getting Post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST["firstname"]);
    $age = htmlspecialchars($_POST["age"]);

    if(empty($firstname)){
        exit();
        header("Location: ../index.php");
    }

    echo "These are the data, that the user submitted:";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $age;

    header("Location: ../index.php");
}else{
    header("Location: ../index.php");
}