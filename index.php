<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seja Bem Vindo - Site de Teste</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">

    <script> 
        function verifyLogin() {
            const senha = document.getElementById('senha').value;
            const usuario = document.getElementById('usuario').value;

            if(!senha || !usuario || senha.length <= 5) {
                alert('Usuário ou senha inválido, revise os campos!')
            }
        }
    </script>
</head>
<body>
    <main>
             <div class="row">
                <div class="col-md-12 foto-logo">
                    <img src="imagens/logo.jpg" class="img-responsive"></img>
                </div>
            </div>
            <form method="post" action="php/login.php">
                <div class="row login">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="usuario">Usuário</label>
                            <input type="text" name="usuario" class="form-control" id="usuario"/>
                        </div>
                    </div>
                </div>
                <div class="row login">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="Senha">Senha</label>
                            <input type="password" name="senha" class="form-control" id="senha"/>
                        </div>
                    </div>
                </div>
                <div class="row login">
                    <div class="col-md-12">
                        <div class="form-group">
                            <button onclick="verifyLogin()" class="btn btn-success btn-block">Entrar</button>
                        </div>
                    </div>
                </div>
            </form>
        </main>
</body>
</html>