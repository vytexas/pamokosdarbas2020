<?php

use userApp\User;

for ($i = 0; $i <= 10; $i++){

    $user = new User("123", "Vytenis", "Unkown", "studentas", "vytenis@gmail.com", "500e", "dirbantis" );

}
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #34312d;
            color: #9fcdff;
        }
    </style>
</head>
<body>

<h2>Darbuotoju info</h2>

<table>
    <tr>
        <th>Asmens kodas</th>
        <th>Vardas</th>
        <th>Pavardė</th>
        <th>Pareigos</th>
        <th>Paštas</th>
        <th>Užmokestis</th>
        <th>Busena</th>
    </tr>
    <tr>
        <?php for ($i=0; $i<=10; $i++) {
            echo '<tr>';
            foreach ($user->showProfile() as $item){ ?>
                <?php echo '<td>'. $item .'</td>';
            }
         echo '</tr>';
        }

        ?>
    </tr>

</table>

</body>
</html>
