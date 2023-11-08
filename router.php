<?php
// Caminhos das rotas
$rotas = [
    '/' => '/pages/home.php',
    '/dashboard' => '/pages/dashboard.php',
    '/admin' => '/pages/admin.php',
    '/users/register' => '/pages/users/register.php',
    '/users/login' => '/pages/users/login.php',

    '/users/store' => '/Controllers/auth/register.php',
    '/logout' => '/Controllers/auth/logout.php',
    '/login' => '/Controllers/auth/login.php',

    '/userslist' => '/pages/adm/usersList.php',
    '/agendList' => '/pages/adm/agendList.php',
    '/permissions' => '/pages/adm/permissions.php',
    '/op' => '/Controllers/auth/op.php',

    '/agendar' => '/pages/scheduling/create.php',
    '/veragendamentos' => '/pages/scheduling/useragendlist.php',
    '/config' => '/pages/scheduling/config.php',
    '/saveagend' => '/Controllers/index.php',
    '/remove' => '/Controllers/remove.php',
    '/change' => '/Controllers/modifyPassword.php'
    // '/userslist' => '/pages/adm/usersList.php',

];

// Função Roteamento
function rotear ($uri, $rotas) {   
    if (array_key_exists($uri, $rotas)) {
        include __DIR__ . $rotas[$uri];
    } else {
        header("Location: /");
    }
}