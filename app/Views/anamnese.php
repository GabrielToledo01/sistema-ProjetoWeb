<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://192.168.50.177/grupo02/sistema/assets/css/anamnese.css">
    <title>ANAMNESE</title>
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

        <h1>Ficha de Anamnese</h1>

            <div class="espaco">
                <div class="metade left">
        
                    <input class="dt" type="text" placeholder="Responsavel pelo atendimento" required="">
                    <input class="dt" type="text" placeholder="Nome do aluno" required="">
                    <div class="data">
                        <P>Data e Hora:</P>
                        <div class="date-time">
                            <input class="dt-1" type="date" placeholder="Data" required="">
                            <input class="dt-1" type="time" placeholder="Hora" required="">
                        </div>
                    </div>
                    <input class="dt" type="text" placeholder="Curso" required="">
                    <input class="dt" type="text" placeholder="Idade" required="">
                        <div class="data">
                            <P>Data de nascimento:</P>
                            <input class="dt-1" type="date" placeholder="Data nascimento" required="">
                        </div>
                    <input class="dt" type="email" placeholder="Email" required="">
                    <input class="dt" type="text" placeholder="Telefone" required="">
                    <input class="dt"type="text" placeholder="Periodo/Turma" required="">
                    <input class="dt" type="text" placeholder="Encaminhado por" required="">
    
                </div>

                <div class="metade right">
                    <textarea class="dt" name="mensagem" type="text" placeholder="Breve descrição do motivo" required=""></textarea>
                    <textarea class="dt" name="mensagem" type="text" placeholder="Histórico (Uso de medicação, faz psicoterapia, etc)" required=""></textarea>
                    <textarea class="dt" name="mensagem" type="text" placeholder="Histórico familiar" required=""></textarea>
                    <textarea class="dt" name="mensagem" type="text" placeholder="Relação familiar" required=""></textarea>
                </div>
            </div>
          
                <input type="submit" value="Enviar Dados" class="btn-submit">

            <br>
            <br>
            <br>
        
        </form>
    
    </main>

  
</body>
</html>