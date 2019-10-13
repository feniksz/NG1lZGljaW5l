<?php

function get_books() {
    global $db;
    $sth = $db->prepare("SELECT * FROM book");
    $sth->execute();
    return $sth->fetchAll();
}

function get_magazines() {
    global $db;
    $sth = $db->prepare("SELECT * FROM magazine");
    $sth->execute();
    return $sth->fetchAll();
}

function get_posters() {
    global $db;
    $sth = $db->prepare("SELECT * FROM poster");
    $sth->execute();
    return $sth->fetchAll();
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Kolekcje</h1>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID elementu</th>
                    <th scope="col">Tytuł / nazwa</th>
                    <th scope="col">Objętość / wymiar</th>
                    <th scope="col">Liczba kopii w kolekcji</th>
                    <th scope="col">Rok wydania</th>
                    <th scope="col">Dodatkowe informacjie</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach(get_books() as $book):?>
                    <tr>
                        <th scope="row"><?= $book['ID']; ?></th>
                        <td><?= $book['title']; ?></td>
                        <td><?= $book['pages']; ?></td>
                        <td><?= $book['copy_in_collection']; ?></td>
                        <td><?= $book['publication_year']; ?></td>
                        <td><?= $book['language'] . ' ' . $book['origin_language']; ?></td>
                    </tr>
                <?php endforeach; ?>
                <?php foreach(get_magazines() as $magazine):?>
                    <tr>
                        <th scope="row"><?= $magazine['ID']; ?></th>
                        <td><?= $magazine['title']; ?></td>
                        <td><?= $magazine['pages']; ?></td>
                        <td><?= $magazine['copy_in_collection']; ?></td>
                        <td><?= $magazine['publication_year']; ?></td>
                        <td><?= $magazine['number']; ?></td>
                    </tr>
                <?php endforeach; ?>
                <?php foreach(get_posters() as $poster):?>
                    <tr>
                        <th scope="row"><?= $poster['ID']; ?></th>
                        <td><?= $poster['title']; ?></td>
                        <td><?= $poster['dementions']; ?></td>
                        <td><?= $poster['copy_in_collection']; ?></td>
                        <td><?= $poster['publication_year']; ?></td>
                        <td><?= '-'; ?></td>
                    </tr>
                <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1>Kolekcje</h1>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Liczba unikalnych elementów</th>
                    <th scope="col">Suma wszystkich kopii elementów</th>
                    <th scope="col">Liczba książek</th>
                    <th scope="col">Liczba czasopism</th>
                    <th scope="col">Liczba plakatów</th>
                </tr>
                </thead>
                <tbody>
<!--                --><?php //foreach( ):?>
<!--                    <tr>-->
<!--                        <th scope="row"> </th>-->
<!--                        <td> </td>-->
<!--                        <td> </td>-->
<!--                        <td> </td>-->
<!--                        <td> </td>-->
<!--                    </tr>-->
<!--                --><?php //endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
</html>