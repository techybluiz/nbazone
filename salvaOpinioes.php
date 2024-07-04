<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "bancodeopinioes"; 

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $opiniao = $_POST['opiniao'];

    $sql = "INSERT INTO  opinioes (nome, email, opiniao) VALUES ('$nome','$email','$opiniao')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Data saved successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();