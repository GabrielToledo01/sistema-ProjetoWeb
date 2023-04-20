<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Mensagens | SisNap</title>
</head>
<body>
    
    <div class="container mt-5">

        <div class="alert alert-info">
            <h2><?php echo $messages; ?></h2>
            <strong class="mt-3"><?php echo anchor(base_url('index.php/usuarios'),'Voltar')?></strong>
        </div>

    </div>


</body>
</html>