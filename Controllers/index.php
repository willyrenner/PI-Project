<?php
    $user = $_SESSION['user'];
    $nome = $_POST['nome'];
    $data = $_POST['date'];
    $hora = $_POST['time'];

    $agend = new Agend(connection());
    $dataAgend = $agend->findAgend($user);

    if ($dataAgend && $dataAgend['user'] === $user) {
        echo 'Você já tem um horário agendado';
        header('Location: /veragendamentos');
    } else if (isset($_POST['nome'], $_POST['date'], $_POST['time'])) {
        echo $user, $nome, $data, $hora;
        $agend -> save($user, $nome, $data, $hora);
        header('Location: /veragendamentos');
    } else {
        header( 'Location: /agendar');
    }
