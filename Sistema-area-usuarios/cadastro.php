<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
 
    <title>Entre ou cadastre-se</title>
    <!-- <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/cadastro.css" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
    <main>
            <div class="container-fluid bg-dark">
                    <div class="row">
                        <div class="col-6">
                        <div class="text-light d-flex justify-content-center mt-5">
                                    <h1>Cadastre-se</h1>
                                </div>
                                <form class="mt-5 " action="integracao/cadastro_usuario.php" method="post">
                                    <div class="form-group d-flex justify-content-center">
                                            <input class="rounded" class="rounded" type="text" name="nome" size="45" placeholder="Digite o seu nome" required/>
                                    </div>
                                    <div class="form-group d-flex justify-content-center">
                                            <input class="rounded" type="url" name="imagem" size="45" placeholder="Insira a imagem" required/>
                                    </div>
                                    <div class="form-group d-flex justify-content-center">
                                            <input class="rounded" type="email" name="email" size="45" placeholder="Digite o seu e-mail" required/>
                                    </div>
                                    <div class="form-group d-flex justify-content-center">
                                            <input class="rounded" type="password" name="senha" size="45" placeholder="Digite a sua senha" required/>
                                    </div>
                                    <div class="form-group d-flex justify-content-center">
                                            <input class="rounded" type="password" name="conf_senha" size="45" placeholder="Confirme a sua senha" required/>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                            <button class="btn btn-primary rounded" type="submit"> Cadastre-se</button>
                                    </div>
                                </form>
                            <div class="d-flex justify-content-around">
                                <a href="./index.php">Já possuí cadastro? Realize o login</a>
                            </div>
                        </div>
                                
                        

                
                        <div class="col-6 bg-light">
                            <img src="img/login.svg" alt="Login">
                        </div>
            
    </main>
</body>
</html>