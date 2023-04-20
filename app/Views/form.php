<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet"  href="<?= base_url('css/registrar.css') ?>">
  <title>Registrar e Editar | SisNap</title>
</head>
<body>
<header>
        <div class="header">
            <div class="logo">
                <img class="img-logo" src="<?= base_url('img/nap2.png') ?>" alt="Univiçosa">
            </div>

            <div class="sair">
                <a href="<?= base_url('index.php/usuarios') ?>"><img src="<?= base_url('img/volte.png') ?>" title="Voltar" alt="Voltar"></a>
            </div>
        </div>
</header>

<div class="container">

<?php echo form_open('usuarios/store') ?>

<div id="login" >

<div class="card"  method="post">

    <?php echo csrf_field();?>

       <!-- <h4 style="color: green;">
            <?php echo $msgS ?? ''  ?>
        </h4>
        <span style="color: red;">
             INCLUIR A VARIÁVEL $msg 
            <?php echo $msg ?? ''  ?>
                <?php if(isset($errors)) : ?>
                <ul>
                    <?php foreach ($errors as $error) : ?>
                    <li><?php echo $error ?></li>
                    <?php endforeach; ?>
                 </ul>
             <?php endif; ?>
        </span> -->
        

    <div class="card-content">

    <h2><?php echo $messages; ?></h2>
    
        <div class="card-content-area">


            <label>Nome:</label>

            <input type="text" id="usuario" name="nome" value="<?php echo isset($usuarios['nome']) ? $usuarios['nome'] : '' ?>" required="">
            

        </div>

        <div class="card-content-area">

            <label>Matricula:</label>

            <input type="number" id="usuario" name="matricula" value="<?php echo isset($usuarios['matricula']) ? $usuarios['matricula'] : '' ?>"  required="">
            

        </div>

        <div class="card-content-area">

            <label>Senha:</label>

            <input type="password" id="password" name="senha" value="<?php echo isset($usuarios['senha']) ? $usuarios['senha'] : '' ?>"  required="">
            

        </div>

        <div class="card-content-area">

        <fieldset>
            <legend>Selecione o tipo de usuário:</legend>

        <div class="usuario">
            <input type="radio" id="usuario" name="perfil" value="usuario">
            <label for="usuario">Usuário</label>
            </div>

        <div class="admin">
            <input type="radio" id="admin" name="perfil" value="admin">
            <label for="admin">Admin</label>
        </div>

    
        </fieldset>
            
        </div>

    </div>

    <div class="card-footer">

        <button type="submit" class="submit">Enviar</button>

        <input type="hidden" name="id" value="<?php echo isset($usuarios['id']) ? $usuarios['id'] : '' ?>">

    </div>

</div>

</div>


<?php echo form_close(); ?>

</div>

</body>
</html>