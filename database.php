<?php
//Função para conexão com banco de dados
function connection():mysqli {
    $conexao = mysqli_connect('127.0.0.1:3306', 'root', '');
    $conexao -> query("CREATE DATABASE IF NOT EXISTS db_emg_manipulator");
    $conexao -> select_db('db_emg_manipulator');
    return $conexao;
}

$connection = connection();

$connection->query(
    "CREATE TABLE IF NOT EXISTS users(
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        user TEXT,
        email TEXT,
        password TEXT,
        typeUser TEXT)"
);

$connection->query(
    "CREATE TABLE IF NOT EXISTS agendamentos(
        id INTEGER PRIMARY KEY AUTO_INCREMENT,
        user TEXT,
        nome_cliente TEXT NOT NULL,
        data_consulta DATE NOT NULL,
        hora_consulta TIME NOT NULL)"
);
?>