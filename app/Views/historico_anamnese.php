<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/historico-anam.css') ?>">
    <title>Gerenciar Anamnese | SisNap</title>


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

            <div class="sair">
                <a href="<?= base_url('index.php/menu') ?>"><img src="<?= base_url('img/volte.png') ?>" title="Voltar" alt="Voltar"></a>
            </div>
        </div>

</header>

<main>
    
            <div class="text">
                <h2>Gerenciamento das fichas de Anamnese</h2>
            </div>

    <div class="container">
        <table class="table">
            <tr class="top">
                <th>ID</th>
                <th>Responsavel</th>
                <th>Paciente</th>
                <th>Data</th>
                <th>Hora</th>
                <th>Ações</th>
            </tr>
            <?php foreach($anamnese as $anamnese): ?>
                <tr>
                    <td><?php echo $anamnese['id'] ?></td>
                    <td><?php echo $anamnese['responsavel'] ?></td>
                    <td><?php echo $anamnese['paciente'] ?></td>
                    <td><?php echo $anamnese['data'] ?></td>
                    <td><?php echo $anamnese['hora'] ?></td>
                    <td>
                        <?php echo anchor('historico_anamnese/edit/'.$anamnese['id'], '<img src="../img/editar2.png" title = "Editar" alt="Editar"') ?>
                        -
                        <?php echo anchor('historico_anamnese/delete/'.$anamnese['id'], '<img src="../img/lixo.png" title = "Excluir" alt="Excluir"', ['onclick' => 'return confirma()']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</main>
</body>
</html>