<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <title>Formulário de Login e Registro com HTML5 e CSS3</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="http://192.168.50.177/grupo02/sistema/assets/css/registrar.css" />
</head>
<body>
<header>
        <div class="header">
            <div class="logo">
                <img class="img-logo" src="http://192.168.50.177/grupo02/sistema/assets/img/logo-uni.png" alt="Univiçosa">
            </div>

            <div class="cadastro">
                <a href="http://192.168.50.177/grupo02/sistema/public/index.php/registrar">Cadastrar</a>
            </div>

            <div class="sair">
                <a href="http://192.168.50.177/grupo02/sistema/public/index.php/menu">Voltar</a>
            </div>
        </div>
</header>

<div class="container">
<div id="login" >

<form class="card" action="" method="post">

    <div class="card-header">

        <h2>Cadastrar</h2>

    </div>

    <div class="card-content">

        <div class="card-content-area">

            <label>Nome</label>

            <input type="text" id="usuario" name="inputNome">
            

        </div>

        <div class="card-content-area">

            <label>Email</label>

            <input type="email" id="usuario" name="inputEmail">
            

        </div>

        <div class="card-content-area">

            <label>Matricula</label>

            <input type="int" id="usuario" name="inputMatricula">
            

        </div>

        <div class="card-content-area">

            <label>Senha</label>

            <input type="password" id="password" name="inputPassword">
            

        </div>

    </div>

    <div class="card-footer">

        <input type="submit" value="Cadastrar" class="submit"> 

    </div>

</form>

</div>
</div>




</body>
</html>