<?php
$date1 = '2016-08-02 15:00:00';
$timestamp1= strtotime($date1);
?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Partie 8 - Exercice 4</title>
</head>
<body>
<div class="container">
    <h1>Exercice 4</h1>

    <p text-center> Afficher le timestamp du jour.  
Afficher le timestamp du mardi 2 août 2016 à 15h00.</p>

</div>
<div class="container text-center mt-4">
<p>
<?= time() ?>
</p>


<p> Timestamp du mardi 2 août 2016 = <?= $timestamp1 ?></p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
<!------------------------------------------------------->
<!--                  Correction                       -->
<!------------------------------------------------------->

<!--


OK

->