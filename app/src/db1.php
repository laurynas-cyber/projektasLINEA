<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "forma");

$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
if($mysqli->connect_error) {
    echo "Atsiprasome, bet svetaine susidure su problema.\n";
    echo 'Klaida ' . $mysql->connect_error . '\n';
    exit();
}


mysqli_query($mysqli, "INSERT INTO klientai (vardas, email, telefonas, message)
VALUES('$_POST[vardas]', '$_POST[email]', '$_POST[telefonas]', '$_POST[message]')");