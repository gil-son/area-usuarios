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
    <title>Home</title>
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
                    <a class="dropdown-item" href="perfil.php">Meu Perfil</a>
                    <a class="dropdown-item" href="integracao/sair.php">Sair</a>
                </div>
                </div>

            </div>
        </nav>
    </header>

    <!-- Conteúdo -->
    <main class="container mt-5">
        <h1>Olá, <?php echo $_SESSION['nome']?> ! </h1>
        <form class="form-row my-5" action="integracao/cadastro_postagens.php" method="post">
            <input class="col-9 form-control" name="post" type="text" placeholder="No que você está pensando, <?php echo $_SESSION['nome'] ?>?">
            <button class="col-3 btn text-white" type="submit">Publicar</button>
        </form> 
  


        
    <?php        
            //Query 1 - somente a postagem daquele usuario
            //$postagens = $conn -> query("select * from usuarios join postagens where id = '$_SESSION[id]' and fk_usuario = '$_SESSION[id]' ");
            
                // Query 1-1 - para ordenar da última postagem até a primeira
                //$postagens = $conn -> query("select * from usuarios join postagens where id = '$_SESSION[id]' and fk_usuario = '$_SESSION[id]' order by id_postagens desc ");
                                         
            //Query 2 -  as postagens de todos os usuarios
            //$postagens = $conn -> query("select * from postagens join usuarios where fk_usuario = id"); 

                //Query 2-1 - para ordenar da última postagem até a primeira
                $postagens = $conn -> query("select * from postagens join usuarios where fk_usuario = id order by id_postagens desc"); 

            //Fetch assoc trás só o primeiro registro, em chave valor por isso usei o all
            //  $resultado = mysqli_fetch_assoc($postagens); 
                
            //     echo "<pre>";
            //        print_r($resultado);
            //     echo "</pre>";

            foreach($postagens as $post){
        ?>
                <div class='card'>
                    <div class='card-header mt-5'>
                        <img class='rounded-circle' src=<?php echo $post['imagem']?> >
                        <h5 class='ml-3 mb-0'><?php echo $post['nome'] ?></h5>
                    </div>
                        <div class='card-body'>
                        <?php echo $post['conteudo'] ?>
                    </div>
        <?php       
            }
        ?>
      </main>       



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>