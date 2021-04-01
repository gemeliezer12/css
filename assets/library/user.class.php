<?php
class User{
    public function fetchAll(){
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM users");
        $query->execute();

        return $query->fetchAll();
    }

    public function fetchData($id){
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM users WHERE idUsers = ? OR usernameUsers = ?");
        $query->bindValue(1, $id);
        $query->bindValue(2, $id);
        $query->execute();

        return $query->fetch();
    }
}