<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "platforma_kulinarna";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Połączenie do bazy danych nieudane:" $conn->connect_error)
}

$sql = "SELECT * FROM przepisy";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()){
    echo "<ol>";
    echo "<li>" . $row["tytul"] "</li>";
    echo "</ol>"
}

$tittle = $_POST['tittle'];
$description = $_POST['description'];

$sql = "INSERT INTO przepisy(tytu, opis) VAlUES ('$title', '$description')";

if ($conn->query($sql) === TRUE){
    echo "Właśnie dodałeś przepis";
} else {
    echo "Błąd w dodaniu"
}

$conn->close();
?>