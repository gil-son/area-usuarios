<?php
    session_start();

     //É possível trocar o GET[id] pelo navegador, então:
     if($_SESSION['id'] ==  $_GET['id']){
            $id = $_SESSION['id'];
           
            include_once('conexao_bd.php');

            $deletar = $conn -> query("delete from usuarios where id = '$id'");

            if($deletar){

                    session_destroy();
                    echo "
                    <script>
                        alert('Conta excluída com Sucesso!')
                        location.href = '../index.php'
                    </script>
                ";
            }else{
                echo "
                    <script>
                        alert('A conta não foi excluída!')
                        location.href = '../perfil.php'
                    </script>
                ";
            }
            
        }else{
            echo "
                    <script>
                        alert('A conta não foi excluída!')
                        location.href = '../perfil.php'
                    </script>
                ";
        }

    
    