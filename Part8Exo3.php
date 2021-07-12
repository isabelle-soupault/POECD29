<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Partie 8 - Exercice 1</title>
</head>
<body>
<div class="container">
    <h1>Exercice 1</h1>

    <p text-center> Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
Bonus : Le faire en français.</p>

</div>
<div class="container text-center mt-4">
<p>
<?= strftime('%A %e %B %Y') ?>.
</p>

<p>
Aujourd'hui, nous sommes le :
<!--LC_TIME est une constante prédéfinie pour formater les dates et heures avec la fonction strftime()-->
<?php setlocale(LC_TIME, 'fr', 'fr_FR');
 echo strftime('%A %e %B %Y');
?>
</p>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

<!------------------------------------------------------->
<!--                  Correction                       -->
<!------------------------------------------------------->

<!--

setlocale va donc modifier en fonction de ce qui est un pays.
LC_TIME va modifier juste l'heure, alors que le LC_ALL va inclure toutes les particularités, par exemple les milliers sont séparés par des espaces, les chiffres à virgules sont avec des virgules et non des points etc.

 'fr', 'fr_FR', cela va dépendre de la config de l'ordinateur et du serveur.donc plus on en met et plus on sera précis.

Information sur les locales

sous linux quand on tape locale, on a l'ensemble des locale du serveur

les LC en ISO sont avant le UTF8 - ce qui signifie que l'ensemble des accent ne sera pas pris en compte.


si dans une page php on met phpinfo(); On aurra plein d'informations sur le php d'installé

->