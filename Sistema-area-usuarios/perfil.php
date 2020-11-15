<?php  session_start();
//Se não existir um valor no indice nome, então encerr a aplicação
        if(!isset($_SESSION['nome'])){
            header('Location:index.php');
            exit;
        }else{
            include_once('integracao/conexao_bd.php');
        }

    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/home.css">
</head>
<body>
          
    <!-- Cabeçalho-->
    <header class="container-fluid bg-dark border shadow">
        <nav class="container row m-auto">
            
            <div class="col-10 d-flex align-items-center  bg-dark">
                <img class="rounded-circle" src=<?php echo $_SESSION['imagem']?> >
                <h5 class="ml-3 mb-0 text-light"><?php echo $_SESSION['nome']; ?></h5>
            </div>
            
                <div class="col-2 d-flex align-items-center justify-content-end bg-dark">

            <div class="dropdown">
                <button class="btn btn-light text-dark rounded-circle dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="home.php">Home</a>
                    <a class="dropdown-item" href="integracao/sair.php">Sair</a>
                </div>
                </div>

            </div>
        </nav>
    </header>

    <!-- Conteúdo -->
    <main class="container mt-5">
        <section class="row pt-5">
            <div class="col-lg-4">
                <img class="rounded-circle" style="height: 300px; width:300px" src="<?php echo $_SESSION['imagem']?>" alt="Imagem de Perfil" >
            </div>
            <div class="col-lg-8">
                <h1>Olá, <?php echo $_SESSION['nome']?> ! </h1>
                <p><?php echo $_SESSION['email']?></p>
            </div>
        </section>
        <section class="mt-5 border p-5">
            <div class="alert alert-light" role="alert">
                Cuidado! Ao remover não há como recuperar!
            </div>
            <button class="btn btn-danger" onclick="confirmar()">Remover a conta</button>
        </section>
        
      </main>       
        <script>
            function confirmar(){
               let confirmacao = confirm("Você realmente deseja excluir a conta?");
               if(confirmacao){
                    verificar = prompt('Digite SIM para efetuar a exclusão:');
                    if(verificar == "SIM"){
                        location.href = "integracao/remover_conta.php?id=" + <?php echo $_SESSION['id']; ?>            
                   }else{
                       alert('Operação não efetuada, pois não digitou SIM');
                   }
                  
               }
            }
        </script>



    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>