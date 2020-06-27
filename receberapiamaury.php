<?php

$data = json_decode(file_get_contents('php://input'), true);

extract($data);

$conn = mysqli_connect('localhost', 'root', '', 'apiamaury');

$sql = "INSERT INTO receive (origin, message, destiny)
VALUES ('$origin', '$message', '$destiny')";

if (mysqli_query($conn, $sql)) {
    $sucess = "Mensagem Inserida";
    echo "", json_encode($sucess), "\n";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
