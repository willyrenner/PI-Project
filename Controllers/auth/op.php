<?php
! hasAdmin();

if (isset($_POST['user'])) {
    $user = $_POST['user'];

    $model = new User(connection());    
    $data = $model->findUser($user);
    $dataAdmin = $model->findAdmin($user);

    if ($data && $data['user'] === $user) {
        $data = $model->updateTypeToAdmin($user);
        header('Location: /admin');
    } else {
        // header('Location: /permissions');
    }
}