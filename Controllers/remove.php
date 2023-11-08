<?php
if (!hasUser()) {
    header('Location: /');
}

$model = new Agend(connection());

if (hasUser()) {
    $agendRemove = $model->removeAgend($_SESSION['user']);
    header( 'Location: /veragendamentos');
}
