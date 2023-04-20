<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/usuarios.css') ?>">
    <title>Gerenciar Usuarios | SisNap</title>


    <script>
        function confirma(){
            if(!confirm('Deseja excluir o registro?')){
                return false;
            }

            return true;
        }
    </script>

</head>
<body>
<header>
        <div class="header">
            <div class="logo">
                <img class="img-logo" src="<?= base_url('img/nap2.png') ?>" alt="Univiçosa">
            </div>

            <div class="cadastro">
                <a href="<?= base_url('usuarios/create') ?>"><img src="<?= base_url('img/adicionar.png') ?>" title="Cadastrar Usuário" alt="Cadastrar Usuário"></a>
            </div>

            <div class="sair">
                <a href="<?= base_url('index.php/menu') ?>"><img src="<?= base_url('img/volte.png') ?>" title="Voltar" alt="Voltar"></a>
            </div>
        </div>

</header>

<main>

            <div class="text">  
                <h2>Gerenciamento de Usuários</h2>
            </div>


    <div class="container">
        <table class="table">
            <tr class="top">
                <th>ID</th>
                <th>Nome</th>
                <th>Matricula</th>
                <th>Senha</th>
                <th>Perfil</th>
                <th>Ações</th>
            </tr>
            <?php foreach($usuarios as $usuario): ?>
                <tr>
                    <td><?php echo $usuario['id'] ?></td>
                    <td><?php echo $usuario['nome'] ?></td>
                    <td><?php echo $usuario['matricula'] ?></td>
                    <td><?php echo $usuario['senha'] ?></td>
                    <td><?php echo $usuario['perfil'] ?></td>
                    <td>
                        <?php echo anchor('usuarios/edit/'.$usuario['id'], '<img src="../img/editar-usuario.png" title = "Editar" alt="Editar"') ?>

                        <?php echo anchor('usuarios/delete/'.$usuario['id'], '<img src="../img/deletar-usuario.png" title = "Excluir" alt="Excluir"', ['onclick' => 'return confirma()']) ?>
                        
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</main>
</body>
</html>