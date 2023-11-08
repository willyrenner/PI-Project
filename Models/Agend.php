<?php
class Agend {
    protected $connection;

    public function __construct(mysqli $conexao) {
        $this->connection = $conexao;
    }

    public function findAgend($user): array|bool {
        $query = "SELECT * FROM agendamentos WHERE user = ?";
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

    public function removeAgend($user): bool {
    $query = "DELETE FROM agendamentos WHERE user = ?";
    $stmt = $this->connection->prepare($query);
    $stmt->bind_param("s", $user);
    
    // Execute the delete query
    if ($stmt->execute()) {
        return true; // Deletion successful
    } else {
        return false; // Deletion failed
    }
}
    public function listAgends($user): array|bool
    {
        $query = "SELECT `nome_cliente`, `data_consulta`, `hora_consulta` FROM agendamentos WHERE `user` = ?";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("s", $user);
        $stmt->execute();
        $result = $stmt->get_result();
        
        $agends = []; // Initialize an array to store the results
        
        while ($row = $result->fetch_assoc()) {
            $agends[] = $row;
        }
    
        if (empty($agends)) {
            return false;
        }
    
        return $agends;
    }
    

    public function agendList(): array {
        $query = "SELECT `nome_cliente`, `data_consulta`, `hora_consulta` FROM agendamentos";
        $sttm = $this->connection->prepare($query);
        $sttm->execute();
        $result = $sttm->get_result();
        
        $agends = array();
        
        while ($agend = $result->fetch_assoc()) {
            $agends[] = $agend;
        }

        return $agends;
    }

    public function save(string $user, string $nome, string $data, string $hora): mysqli_result|bool
    {
        $query = "INSERT INTO agendamentos (`user`, `nome_cliente`, `data_consulta`, `hora_consulta`) VALUES (?, ?, ?, ?)";
        $sttm = $this->connection->prepare($query);
        $sttm->bind_param("ssss", $user, $nome, $data, $hora);
        $sttm->execute();
        return $sttm->get_result();
    }
}

?>