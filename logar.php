<?php 

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){

    require './conexao.php';
    require './Usuarioclass.php';
     
    $u = new Usuario();

    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    $u -> login($email,$senha);

}else{
    header("Location: index.html");
}



?>