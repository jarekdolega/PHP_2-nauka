<!DOCTYPE>
<html>
    <head></head>
    <body>
<?php
$liczba = 10;

while($liczba >= 0) {
    if($liczba == 0) {
        echo "<p>"."START!!!"."</p>";
    } else {
        echo "<p>".$liczba."</p>";
    }
    --$liczba;
}
?>
    </body>
</html>