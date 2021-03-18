<?php
class User{
    public function userFetchAll(){
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM users");
        $query->execute();

        return $query->fetchAll();
    }

    public function userFetchData($id){
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM users WHERE idUsers = ?");
        $query->bindValue(1, $id);
        $query->execute();

        return $query->fetch();
    }
}