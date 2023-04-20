<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/menu.css') ?>">
    <title>Menu | SisNap</title>
</head>
<body>
    <header>
        <div class="header">
            <div class="logo">
                <img class="img-logo" src="<?= base_url('img/nap2.png') ?>" alt="Univiçosa">
            </div>

            <div class="cadastro">
                <a href="<?= base_url('index.php/usuarios') ?>"><img src="<?= base_url('img/Gerenciar-user.png') ?>" title="Gerenciar Usuários" alt="Gerenciar Usuários"></a>
            </div>

            <div class="sair">
                <a href="<?= base_url('index.php/logout') ?>"><img src="<?= base_url('img/sair.png') ?>" title="Sair" alt="Sair"></a>
            </div>
        </div>
    </header>

    <main>
        <div class="container-pai">
            <div class="text">
                <h2>Selecione uma das opções abaixo:</h2>
            </div>
                <div class="container-filho">
                    <div class="elemento-prontuario"> 
                        <a href="<?= base_url('historico_prontuario/create') ?>">Ficha de Prontuário</a>
                        <a href="<?= base_url('index.php/historico_prontuario') ?>">Gerenciar | Prontuário</a>  
                    </div>
                    <div class="elemento-anamnese">
                        <a href="<?= base_url('historico_anamnese/create') ?>">Ficha de Anamnese</a>
                        <a href="<?= base_url('index.php/historico_anamnese') ?>">Gerenciar | Anamnese</a>            
                    </div>
                </div>     
            </div>
        </div>      
    </main>

</body>
</html>