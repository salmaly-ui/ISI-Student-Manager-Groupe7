
<?php
$etudiants = [
    ["Ali", "Ahmed", 22],
    ["Sara", "Amine", 23],
    ["Hiba", "Ouirouane", 24]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des etudiants</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>ISI Student Manager</h1>
<h2>Liste des etudiants</h2>

<table border="1">
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Age</th>
    </tr>

    <?php foreach ($etudiants as $e) { ?>
    <tr>
        <td><?php echo $e[0]; ?></td>
        <td><?php echo $e[1]; ?></td>
        <td><?php echo $e[2]; ?></td>
    </tr>
    <?php } ?>

</table>

<br>
<a href="index.php">Retour a l'accueil</a>

</body>
</html>
