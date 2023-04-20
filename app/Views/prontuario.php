<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/css/prontuario.css') ?>">
    <title>Prontuario | SisNap</title>
</head>
<body>
    <header>
        <div class="header">
            <div class="logo">
                <img class="img-logo" src="<?= base_url('img/nap2.png') ?>" alt="Univiçosa">
            </div>
            <div class="sair">
            <a href="<?= base_url('index.php/menu') ?>"><img src="<?= base_url('img/volte.png') ?>" title="Voltar" alt="Voltar"></a>
            </div>
        </div>
    </header>

    

    <main>
    

    <div class="formulario" method="post">

    <?php echo form_open('historico_prontuario/store') ?>

            <?php echo csrf_field();?>

        <h1>Ficha de Prontuario</h1>


            <div class="espaco">
                <div class="metade left">
        
                    <input type="text" placeholder="Responsavel pelo atendimento" value="<?php echo isset($prontuario['responsavel']) ? $prontuario['responsavel'] : '' ?>" name="responsavel" required="">
                    <input type="text" placeholder="Nome do paciente" value="<?php echo isset($prontuario['paciente']) ? $prontuario['paciente'] : '' ?>" name="paciente" required="">
                    <input type="date" placeholder="Data" name="data" value="<?php echo isset($prontuario['data']) ? $prontuario['data'] : '' ?>" required="">

    
                </div>

                <div class="metade right">
                    <input class="textgrande" name="descricao" type="text" placeholder="Mesagem" size="50" value="<?php echo isset($prontuario['descricao']) ? $prontuario['descricao'] : '' ?>" required=""></input>
                </div>
            </div>
          
            <input type="submit" value="Enviar Dados" class="btn-submit">

            <input type="hidden" name="id" value="<?php echo isset($prontuario['id']) ? $prontuario['id'] : '' ?>">
    
    <?php echo form_close() ?>
        
    </div>
    
    </main>

  
</body>
</html>