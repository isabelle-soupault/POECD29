<?php
$userInfo = null;
// Get user info from cookie if cookie exists.
if (!empty($_COOKIE['user'])) {
    $userInfo = unserialize($_COOKIE['user']);    
}
// Get user info and put it in a cookie if login and password variables are not empty.
if(isset($_POST['authentication'])){
    $formErrors = [];
    if (!empty($_POST['login']) && !empty($_POST['password'])) {
        // Data in userInfo array are stringyfied. Before, password is hashed.
        $userInfo = [
            'login' => $_POST['login'],
            'password' => $_POST['password']
        ];
        setcookie('user', serialize($userInfo), time() + 60 * 60);
    } else {
        $formErrors['form'] = 'Veuillez saisir votre login et votre mot de passe';
    }
}

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>PHP - PART 7 - EXO 3</title>
</head>

<body>
    <h1>PHP - PART 7 - EXO 3</h1>
    <p>Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker les informations dans un cookie.</p>
    <hr>
    <?php if (!isset($_POST['authentication']) || !empty($formErrors)) : ?>
        <form action="" method="POST">
            <label for="login">Login : </label>
            <input type="text" id="login" name="login" value="">
            <label for="password">Password : </label>
            <input type="password" id="password" name="password" value="">
            <p><?= !empty($formErrors['form']) ? $formErrors['form'] : ''; ?></p>
            <input type="submit" name="authentication" value="Envoyer">
        </form>
    <?php else : ?>      
            <p>Login : <?= htmlspecialchars($userInfo['login']) ?></p>
            <p>Mot de passe : <?= htmlspecialchars($userInfo['password']) ?></p>       
    <?php endif ?>
</body>

</html>