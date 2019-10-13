<?php

echo "Tworzenie bazy danych...<br>";

$table = "book";
try {
    $sql ="CREATE table IF NOT EXISTS $table(
     ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
     title VARCHAR( 255 ) NOT NULL, 
     pages INT NOT NULL,
     copy_in_collection INT NOT NULL, 
     publication_year INT(4) NOT NULL, 
     language VARCHAR( 20 ) NOT NULL, 
     origin_language VARCHAR( 20 ) NOT NULL);";

    $db->exec($sql);
    print("Dodano tabelę $table <br>");

} catch(PDOException $e) {
    echo $e->getMessage();
}

$table = "magazine";
try {
    $sql ="CREATE table IF NOT EXISTS $table(
     ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
     title VARCHAR( 255 ) NOT NULL,
     number VARCHAR( 15 ) NOT NULL,
     pages INT NOT NULL,
     copy_in_collection INT NOT NULL,
     publication_year INT(4) NOT NULL);" ;
    $db->exec($sql);
    print("Dodano tabelę $table <br>");

} catch(PDOException $e) {
    echo $e->getMessage();
}

$table = "poster";
try {
    $sql ="CREATE table IF NOT EXISTS $table(
     ID INT( 11 ) AUTO_INCREMENT PRIMARY KEY,
     title VARCHAR( 255 ) NOT NULL,
     dementions VARCHAR( 15 ) NOT NULL,
     copy_in_collection INT NOT NULL,
     publication_year INT(4) NOT NULL);" ;
    $db->exec($sql);
    print("Dodano tabelę $table <br>");

} catch(PDOException $e) {
    echo $e->getMessage();
}

echo "Dodawanie rekordów do bazy danych... <br>";

$sql = "INSERT INTO book (title, pages, copy_in_collection, publication_year, language, origin_language) VALUES (?,?,?,?,?,?)";
$stmt= $db->prepare($sql);
$stmt->execute(["Książka 1", 200, 3, 2019, "Polski", "Angielski"]);
$stmt->execute(["Książka 2", 201, 4, 2017, "Polski", "Czeski"]);

$sql = "INSERT INTO magazine (title, number, pages, copy_in_collection, publication_year) VALUES (?,?,?,?,?)";
$stmt= $db->prepare($sql);
$stmt->execute(["Czasopismo 1", "10/2011", 200, 3, 2019]);
$stmt->execute(["Czasopismo 2", "11/2019",  201, 4, 2017]);

$sql = "INSERT INTO poster (title, dementions, copy_in_collection, publication_year) VALUES (?,?,?,?)";
$stmt= $db->prepare($sql);
$stmt->execute(["Plakat 1", "100x100", 3, 2019]);
$stmt->execute(["Plakat 2", "15x15", 4, 2017]);


