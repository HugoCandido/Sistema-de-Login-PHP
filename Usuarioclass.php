<?php 

class Usuario{

    public function login($email,$senha){
        global $pdo;

        $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql ->bindValue("email", $email);
        $sql ->bindValue("senha",MD5($senha));
        $sql ->execute();

        if($sql ->rowCOunt() > 0){
            $dado = $sql->fetch();

            echo $dado['Idusuario'];
        }
    }

}
?>