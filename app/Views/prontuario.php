<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://192.168.50.177/grupo02/sistema/assets/css/prontuario.css">
    <title>Prontuario</title>
</head>
<body>
    <header>
        <div class="header">
            <div class="logo">
                <img class="img-logo" src="http://192.168.50.177/grupo02/sistema/assets/img/logo-uni.png" alt="Univiçosa">
            </div>
            <div class="sair">
                <a href="http://192.168.50.177/grupo02/sistema/public/index.php/menu/">Voltar</a>
            </div>
        </div>
    </header>

    

    <main>

        
    
        <form class="formulario" method="post" action="#">

        <h1>Ficha de Prontuario</h1>

            <div class="espaco">
                <div class="metade left">
        
                    <input type="text" placeholder="Responsavel pelo atendimento" required="">
                    <input type="text" placeholder="Nome" required="">
                    <input type="date" placeholder="Data" required="">
    
    
                </div>

                <div class="metade right">
                    <textarea name="mensagem" type="text" placeholder="Mesagem" required=""></textarea>
                </div>
            </div>
          
            
        
            <input type="submit" value="Enviar Dados" class="btn-submit">
        
        </form>
    
    </main>

  
</body>
</html>