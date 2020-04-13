<?php include('db.php');


if(isset($_POST["submit"])){

    $namepro = $_POST['namepro'];
    $sql = "INSERT INTO programma (omschrijving) VALUES (:namepro)";
                        $stmt= $conn->prepare($sql);
                        $stmt->execute([':namepro' => $namepro]);
                       header('location: programmatoevoegenform.php');
}

