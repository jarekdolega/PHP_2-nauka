<?php
date_default_timezone_set("Europe/Moscow");
echo date("H:i:s d/m/Y");

//pobranie zmiennych z formularza form.php
$sex = walidacja($_POST['sex']);
$firstname = walidacja($_POST['firstname']);
$lastname = walidacja($_POST['lastname']);
$email = walidacja($_POST['email']);
$password = walidacja($_POST['password']);
$city = walidacja($_POST['city']);
$phone = walidacja($_POST['phone']);
$url = walidacja($_POST['url']);

//definiowanie walidacji danych z formularza
function walidacja($dane) {
    $dane = trim($dane);
    $dane = stripslashes($dane);
    $dane = htmlspecialchars($dane);
    return $dane;
}

//wyświetlenie zmiennych - usunąć na produkji
print "Płeć: $sex </br>";
print "Imię: $firstname </br>";
print "Nazwisko: $lastname </br>";
print "E-mail: $email </br>";
print "Hasło: $password </br>";
print "Miasto: $city </br>";
print "Telefon: $phone </br>";
print "Strona WWW: $url </br>";

//przekazanie danych do bazy mysql
//dane dostępowe do serwera mysql
$db_server = "localhost";
$db_user = "admin";
$db_password = "admin";
$db_database = "php_practice";

/*
//Łączenie z bazą danych metodą PDO
try {
    $conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_user, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Połaczenie zakończone powodzeniem"; 
    }
catch(PDOException $e)
    {
    echo "Połączenie nieudane: " . $e->getMessage();
    }
 */

//Dodawanie danych do tabeli metodą PDO
try {
    $conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_user, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO userdata (firstname, lastname, email, password, sex, city, phone, url)
    VALUES ('$firstname', '$lastname', '$email', '$password', '$sex', '$city', '$phone', '$url')";
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    echo "Nowy rekord został utworzony poprawnie. Id wpisu: <b>$last_id</b>";
    }
catch(PDOException $e)
    {
    echo $sql . "Wystapił błąd przy tworzeniu rekordu: " . $e->getMessage();
    }

$conn = null;
    
/*
//Tworzenie bazy danych "myDBPDO" metodą PDO
try {
    $conn = new PDO("mysql:host=$servername;dbname=$db_database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE myDBPDO";
    $conn->exec($sql);
    echo "Utworzono bazę danych<br>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
*/


/*
//Tworzenie tabeli "MyGuests" kolumny: id, firstname, lastname, email, reg date
try {
    $conn = new PDO("mysql:host=$servername;dbname=$db_database", $username, $password);n
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    )";

    $conn->exec($sql);
    echo "Table MyGuests created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
*/
    
?>
