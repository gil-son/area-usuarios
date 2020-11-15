<?php
// O método post retorna em um array de chave valor (associativo)
// Pesquisar PDO, pois permite a conexão de mais formas: MongoDB
// utiliza POO
// echo '<pre>';
//     print_r($_POST);
// echo '<pre>';



$nome = $_POST['nome'];
$imagem = $_POST['imagem'];
$email = $_POST['email'];
$senha = $_POST['senha']; 
$conf_senha = $_POST['conf_senha'];

if(strlen($nome) >3 && strlen($email)> 3 && strlen($senha) > 3 && $senha == $conf_senha){
    
    include_once('conexao_bd.php');

    if($conn){
        
    }else{
        die("Erro ao realizar conexão" . mysqli_connect_error());
    }

    $senhacripto = md5($senha); //converte a senha para proteger a sua visualização no BD

   
    


    
    if($sqlemail = $conn->query("SELECT email from usuarios where email = '$email'")){

        $sqlemail = $conn->query("SELECT email from usuarios where email = '$email'");

        $resultado =  mysqli_fetch_all($sqlemail);

        // Verificação se há e-mail igual

        if ($resultado != null){

                if($email == $resultado[0][0]){

                        echo "<script>
                                alert('Email já cadastrado')
                                window.location.href = '../cadastro.php'
                        </script>";
                 }
                       
            }

    }


    // echo '<pre>';
    // print_r($resultado);
    // echo '</pre>';

    
    //Falta verificar o e-mail que vem com a lista de e-mails

    $sql = "insert into usuarios(nome, imagem, email, senha) values('$nome','$imagem','$email','$senhacripto')";
     
    mysqli_query($conn, $sql);


        echo "<script>
            alert('Cadastro Efetuado!')
            window.location.href = '../index.php'
         </script>";
    

}else if($senha != $conf_senha){
    
    echo "<script>
        alert('A senha deve ser maior que 3')
        window.location.href = '../cadastro.php'
     </script>";

}else if($nome <= 3){

    echo "<script>
        alert('O nome deve ser maior que 3')
        window.location.href = '../cadastro.php'
    </script>";
}
else if($email <= 3){

    echo "<script>
            alert('O e-mail deve ser maior que 3')
            window.location.href = '../cadastro.php'
         </script>";

}else if($senha){
    echo "<script>
            alert('A senha deve ser maior que 3')
            window.location.href = '../cadastro.php'
        </script>";
}