<?php
session_start(); // precisa iniciar antes de tudo e libera a variável global $_SESSION['']



$email = $_POST['email'];
$senha = $_POST['senha'];




if(strlen($email) > 3 && strlen($senha) > 3){
    
    include_once('conexao_bd.php');
    
    $senhacript = md5($senha); // md5($senha)

    // Execução da instrução SQL
    $resultado_consulta = $conn->query("SELECT * from usuarios where email = '$email' and senha = '$senhacript'");
    //print_r($resultado_consulta);


    // recebe a lista de usuários em indice
    //$usuarios = mysqli_fetch_all($resultado_consulta);

    // recebe a lista de usuários, de array associativa em chave valor
    $usuarios = mysqli_fetch_assoc($resultado_consulta);

    
    // echo '<pre>';
    //      print_r($usuarios);
    // echo '</pre>';
    
    // echo $usuarios['id'];
    // echo $usuarios['nome'];
    // echo $usuarios['imagem'];
    // echo $usuarios['email'];
    // echo $usuarios['senha'];
    
    $_SESSION['id'] = $usuarios['id'];
    $_SESSION['nome'] = $usuarios['nome'];
    $_SESSION['imagem'] = $usuarios['imagem'];
    $_SESSION['email'] = $usuarios['email'];
    $_SESSION['senha'] = $usuarios['senha'];

    

    header('Location: ../home.php');

    // echo "
    // <script>
    //     alert('Login Realizado')
    // </script>";

}else{
    echo "
        <script>
            alert('E-mail ou senha inválidos')
            location.href = '../index.php'
        </script>
    ";
}
