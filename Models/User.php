<?php

class User {
    protected $connection;
    public function __construct(mysqli $conexao)
    {
        $this->connection = $conexao;
    }

    public function findUser($user): array|bool
    {
        $query = "SELECT * FROM users WHERE user = ?";
        $sttm = $this->connection->prepare($query);
        $sttm->bind_param("s", $user);
        $sttm->execute();
        $result = $sttm->get_result();
        $user = $result->fetch_assoc();

        if ($user === null) {
            return false;
        }

        return $user;
    }

    public function findEmail($email): array|bool
    {
        $query = "SELECT * FROM users WHERE email = ?";
        $sttm = $this->connection->prepare($query);
        $sttm->bind_param("s", $email);
        $sttm->execute();
        $result = $sttm->get_result();
        $user = $result->fetch_assoc();

        if ($user === null) {
            return false;
        }
        return $user;
    }

    public function findAdmin($admin): array|bool
    {
        $query = "SELECT * FROM users WHERE typeUser = ?";
        $sttm = $this->connection->prepare($query);
        $sttm->bind_param("s", $admin);
        $sttm->execute();
        $result = $sttm->get_result();
        $user = $result->fetch_assoc();

        if ($user === null) {
            return false;
        }
        return $user;
    }

    public function listUsers(): array {
        $query = "SELECT `id`, `user`, `email`, `typeUser` FROM users";
        $sttm = $this->connection->prepare($query);
        $sttm->execute();
        $result = $sttm->get_result();
        
        $users = array();
        
        while ($user = $result->fetch_assoc()) {
            $users[] = $user;
        }

        return $users;
    }

    public function save(string $user, string $email, string $password): mysqli_result|bool
    {
        $query = "INSERT INTO users (`user`, `email`, `password`, `typeUser`) VALUES (?, ?, ?, null)";
        $sttm = $this->connection->prepare($query);
        $hashedPassword = password_hash($password, PASSWORD_ARGON2I);
        $sttm->bind_param("sss", $user, $email, $hashedPassword);
        $sttm->execute();
        return $sttm->get_result();
    }

    public function updateTypeToAdmin(string $user): bool {
        $query = "UPDATE users SET `typeUser` = 'admin' WHERE `user` = ?";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("s", $user);

        // Execute the update query
        if ($stmt->execute()) {
            return true; // Update successful
        } else {
            return false; // Update failed
        }
    }

    public function updatePassword(string $user, string $newPassword): bool {
        $query = "UPDATE users SET `password` = ? WHERE `user` = ?";
        $stmt = $this->connection->prepare($query);
        $hashedPassword = password_hash($newPassword, PASSWORD_ARGON2I);
        $stmt->bind_param("ss", $hashedPassword, $user);

        // Execute the update query
        if ($stmt->execute()) {
            return true; // Update successful
        } else {
            return false; // Update failed
        } 
    }

}

?>