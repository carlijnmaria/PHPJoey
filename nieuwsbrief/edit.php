<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit data</title>
</head>
<body>
<?php
$id = $_GET['id'];
$voornaam = $_GET['voornaam'];
$tussenvoegsel = $_GET['tussenvoegsel'];
$achternaam = $_GET['achternaam'];
$emailadres = $_GET['emailadres'];

echo "<h2>Edit id $id</h2>";
?>

<form method="get" action="verwerkedit.php">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label>Voornaam:
        <input type="text" name="voornaam" value="<?php echo $voornaam; ?>">
    </label>
    <br>
    <label>Tussenvoegsel:
        <input type="text" name="tussenvoegsel" value="<?php echo $tussenvoegsel; ?>">
    </label>
    <br>
    <label>Achternaam:
        <input type="text" name="achternaam" value="<?php echo $achternaam; ?>">
    </label>
    <br>
    <label>Emailadres:
        <input type="text" name="emailadres" value="<?php echo $emailadres; ?>">
    </label>
    <br>
    <input type="submit" name="submit" value="Save changes">
</form>


</body>
</html>

