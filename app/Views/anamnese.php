<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/css/anamnese.css') ?>">
    <title>Anamnese | SisNap</title>
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

        <?php echo form_open('historico_anamnese/store') ?>

        <?php echo csrf_field();?>

        <h1>Ficha de Anamnese</h1>

        <span style="color: green;">
            <?php echo $msgS ?? ''  ?>
        </span>


            <div class="espaco">
                <div class="metade left">
        
                    <input class="dt" type="text" placeholder="Responsavel do paciente" name="responsavel" value="<?php echo isset($anamnese['responsavel']) ? $anamnese['responsavel'] : '' ?>" required="">
                    <input class="dt" type="text" placeholder="Nome do paciente" name="paciente" value="<?php echo isset($anamnese['paciente']) ? $anamnese['paciente'] : '' ?>" required="">
                    <div class="data">
                        <P>Data e Hora:</P>
                        <div class="date-time">
                            <input class="dt-1" type="date" placeholder="Data" name="data" value="<?php echo isset($anamnese['data']) ? $anamnese['data'] : '' ?>"required="">
                            <input class="dt-1" type="time" placeholder="Hora" name="hora" value="<?php echo isset($anamnese['hora']) ? $anamnese['hora'] : '' ?>"required="">
                        </div>
                    </div>
                    <input class="dt" type="text" placeholder="Curso" name="curso" value="<?php echo isset($anamnese['curso']) ? $anamnese['curso'] : '' ?>" required="">
                    <input class="dt" type="email" placeholder="Email" name="email" value="<?php echo isset($anamnese['email']) ? $anamnese['email'] : '' ?>" required="">
                        <div class="data">
                            <P>Data de nascimento:</P>
                            <input class="dt-1" type="date" placeholder="Data nascimento" name="data_nascimento" value="<?php echo isset($anamnese['data_nascimento']) ? $anamnese['data_nascimento'] : '' ?>" required="">
                        </div>
                    <input class="dt" type="text" placeholder="Idade" name="idade" value="<?php echo isset($anamnese['idade']) ? $anamnese['idade'] : '' ?>" required="">
                    <input class="dt" type="text" placeholder="Telefone" name="telefone" value="<?php echo isset($anamnese['telefone']) ? $anamnese['telefone'] : '' ?>" required="">
                    <input class="dt"type="text" placeholder="Periodo/Turno" name="periodo_turno" value="<?php echo isset($anamnese['periodo_turno']) ? $anamnese['periodo_turno'] : '' ?>" required="">
                    <input class="dt" type="text" placeholder="Encaminhado por" name="responsavel_ficha" value="<?php echo isset($anamnese['responsavel_ficha']) ? $anamnese['responsavel_ficha'] : '' ?>" required="">
    
                </div>

                <div class="metade right">
                    <input class="dt"  type="text" placeholder="Breve descrição do motivo" name="descricao" value="<?php echo isset($anamnese['descricao']) ? $anamnese['descricao'] : '' ?>" required=""></input>
                    <input class="dt"  type="text" placeholder="Histórico (Uso de medicação, faz psicoterapia, etc)" name="historico" value="<?php echo isset($anamnese['historico']) ? $anamnese['historico'] : '' ?>" required=""></input>
                    <input class="dt"  type="text" placeholder="Histórico familiar" name="historico_familia" value="<?php echo isset($anamnese['historico_familia']) ? $anamnese['historico_familia'] : '' ?>" required=""></input>
                    <input class="dt"  type="text" placeholder="Relação familiar" name="relacao_familiar" value="<?php echo isset($anamnese['relacao_familiar']) ? $anamnese['relacao_familiar'] : '' ?>" required=""></input>
                </div>
            </div>

            <br>
          
                <input type="submit" value="Enviar Dados" class="btn-submit">

                <input type="hidden" name="id" value="<?php echo isset($anamnese['id']) ? $anamnese['id'] : '' ?>">

            <br>
            <br>
        <?php echo form_close() ?>
        </div>
    
    </main>

  
</body>
</html>