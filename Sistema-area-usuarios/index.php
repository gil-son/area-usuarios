<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
 
    <title>Entre ou cadastre-se</title>
    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/login.css" />
    <!--<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;1,700&display=swap" rel="stylesheet">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    

</head>
<body>
    <main> <!-- semanticos são todos divs -->
        <div class="container-fluid">
            <div class="row d-flex bg-dark">
            <div class="col-6 painel-login align-self-center  rounded">
                 <div class="d-flex justify-content-around text-light">
                    <h1>Entre ou cadastre-se</h1>
                </div>
                <form  method="post" action="integracao/login_usuario.php">
                    <div class="form-group d-flex justify-content-around">
                        <input class="rounded" name="email" type="email" size="45" placeholder="E-mail">
                    </div>
                    <div class="form-group d-flex justify-content-around ">
                        <input class="rounded" name="senha" type="password" size="45" placeholder="Senha">
                    </div>
                    <div class="d-flex justify-content-around">
                        <button class=" btn btn-primary" type="submit">Entrar</button>
                    </div>
                </form>    
                <div class="d-flex justify-content-around">
                     <a href="cadastro.php">Ainda não possui cadastro? Clique aqui?</a>
                </div>      
            </div>

            <div class="painel-imagem col-6 bg-light">
                    <img src="img/login.svg" alt="Login">
                </div>
            </div>
        </div>
    </main>
</body>
</html>