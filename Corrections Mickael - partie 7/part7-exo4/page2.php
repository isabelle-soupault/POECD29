<?php 
$userInfo = null;
if(!empty($_COOKIE['user'])){
    $userInfo = unserialize($_COOKIE['user']);   
}
if(!empty($_POST['login']) && !empty($_POST['password'])){
    $userInfo = [
        'login' => $_POST['login'],
        'password' => $_POST['password']
    ];
    setcookie('user', serialize($userInfo));     
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - PART 7 - EXO 4</title>
</head>

<body>
<h1>PHP - PART 7 - EXO 4</h1>
    <p>Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiche.</p>
    <hr>    

    <?php if($userInfo['login']) : ?>
        <p><?= htmlentities($userInfo['login']) ?></p>
        <p><?= htmlentities($userInfo['password']) ?></p>
    <?php endif ?>

</body>
</html>