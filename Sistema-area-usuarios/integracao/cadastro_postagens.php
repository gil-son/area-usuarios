<?php
session_start();

$postagem = $_POST['post'];
$id_to_fk = $_SESSION['id'];  
    

if(strlen($postagem) > 0){
    
    include_once('conexao_bd.php');

    $result = $conn ->query("insert into postagens(conteudo, fk_usuario) values('$postagem','$id_to_fk')");


    if($result){
        echo " <script>
                alert('Postagem efetuada');
                window.location.href = '../home.php'
            </script>";
    }else{
        echo " <script>
                alert('Postagem não efetuada');
                window.location.href = '../home.php'
            </script>";
    }

    


}else{
   
    echo " <script>
                alert('Digite algo para postar');
                window.location.href = '../home.php'
            </script>";
        
}