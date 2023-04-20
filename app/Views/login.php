<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/login.css') ?>">
    <title>Login | SisNap</title>
</head>
<body>

<div id="login" >

<form class="card"  method="post">

    <?php echo csrf_field();?>

        <div class="logo">
            <img class="img-logo" src="<?= base_url('img/nap.png') ?>" alt="Univiçosa">
        </div>
 
        <div class="aviso">
            <h4 style="color: red;">
                <?php echo $msg ?? '' ?>
            </h4>
        </div>


    <div class="card-content">
   
        <div class="card-content-area">

            <label>Matricula:</label>

            <input type="number" id="usuario" name="matricula" required="">
            
        </div>

        <div class="card-content-area">

            <label>Senha:</label>

            <input type="password" id="password" name="senha" required="">
            
        </div>

    </div>

    <div class="card-footer">

        <button type="submit" class="submit">Entrar</button>

    </div>

</form>

</div>
</body>
</html>