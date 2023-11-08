<?php
$method = $_SERVER['REQUEST_METHOD'];
if ($method !== "POST") {
    header("Location: /dashboard");
    exit;
}

if (isset($_POST['email'], $_POST['oldpassword'], $_POST['newpassword'], $_POST['verifypassword'])) {
    $user = $_SESSION['user'];
    $email = $_POST['email'];
    $oldpassword = $_POST['oldpassword'];
    $newpassword = $_POST['newpassword'];
    $verifypassword = $_POST['verifypassword'];

    $model = new User(connection());
    $dataUser = $model->findUser($user);
    $dataEmail = $model->findEmail($email);

    if (! password_verify($oldpassword, $dataUser['password'])) {
        echo 'Senha Incorreta';
        header('Location: /config');
    } else if ($dataEmail['email'] !== $email) {
        echo 'Email Incorreto';
        header('Location: /config');
    } else if (empty($email)) {
        echo 'Você não informou o email. <br> <br>';
        header('Location: /config');
    } else if (empty($oldpassword)) {
        echo 'Você não informou a senha antiga <br> <br>';
        header('Location: /config');
    } else if (empty($newpassword)) {
        echo 'Você não informou a nova senha <br> <br>';
        header('Location: /config');
    } else if (empty($verifypassword)) {
        echo 'Você não confirmou a nova senha <br> <br>';
        header('Location: /config"');
    }
     else if ($verifypassword !== $newpassword) {
        echo '<script>alert("As senhas não coincidem")</script>';
        header('Location: /config');
    } else {
        echo '<script> alert("Senha Alterada Com Sucesso!")</script>';
        $model->updatePassword($user, $newpassword);
        header('Location: /dashboard"');
    }
}