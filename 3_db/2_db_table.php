<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/table.css">
    <title>Użytkownicy</title>
</head>
<body>
<h4>Użytkownicy</h4>
<table>
    <tr>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Data urodzenia</th>
        <th>Miasto</th>
        <th>Województwo</th>
        <th>Państwo</th>
    </tr>
<?php
require_once "../scripts/connect.php";
    $sql = "SELECT * FROM `users` inner join cities c2 on c2.id = users.city_id inner join state s on s.id = c2.state_id inner join country c3 on c3.id = s.country_id";
    $result = $conn->query($sql);
    while($user = $result->fetch_assoc()){
        echo <<< TABLEUSERS
            <tr>
            <td>$user[firstName]</td>
            <td>$user[lastName]</td>
            <td>$user[birthday]</td>
            <td>$user[city]</td>
            <td>$user[state]</td>
            <td>$user[countries]</td>
            </tr>
TABLEUSERS;
    }
    echo "</table>";
?>
</body>
</html>


