<?php

$host = "localhost";
$db = "php_practice";
$user = "admin";
$password = "admin";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$user,$password);
}

catch(Exception $e) {
    echo "Nie udało sie połączyć z bazą danych";
}

echo "<h2>dump</h2>";

foreach($conn->query("SELECT * FROM userdata") as $row) {
    echo htmlentities($row["id"])."; ".htmlentities($row["firstname"])."; ".htmlentities($row["lastname"])."; ".htmlentities($row["email"])."; ".htmlentities($row["city"])."; ".htmlentities($row["phone"])."; ".htmlentities($row["sex"])."</br>";
    var_dump($row);
    echo "</br></br>";
}

echo "<h2>fetch ASSOC</h2>";

$stmt = $conn->query("SELECT * FROM userdata");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo htmlentities($row["id"])."; ".htmlentities($row["firstname"])."; ".htmlentities($row["lastname"])."; ".htmlentities($row["email"])."; ".htmlentities($row["city"])."; ".htmlentities($row["phone"])."; ".htmlentities($row["sex"])."</br>";
    var_dump($row);
    echo "</br></br>";
}

echo "<h2>fetch NUM</h2>";

$stmtt = $conn->query("SELECT * FROM userdata");
    while ($row = $stmtt->fetch(PDO::FETCH_NUM)) {
    echo htmlentities($row[0])."; ".htmlentities($row[1])."; ".htmlentities($row[2])."; ".htmlentities($row[3])."; ".htmlentities($row[6])."; ".htmlentities($row[7])."; ".htmlentities($row[5])."</br>";
    var_dump($row);
    echo "</br></br>";
}
        