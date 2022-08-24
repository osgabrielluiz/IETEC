<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <link rel="Icon" href="/img/ietec_logo.png">
    <title>IETEC - Cefet RJ</title>
</head>
<body>

<!--Header-->
    <div class="header">
        <a href="/index.html" class="logo">
            <img class="logo" src="img/ietec_logo.png" alt="Logo da IETEC">
        </a>

        <div class="header-right">
            <a class="estilo-a" href="/index.html">Inicio</a>
            <a class="estilo-a" href="/html/login.html">Login</a>  
            <a class="estilo-a" href="/html/quem_somos.html">Quem somos?</a>
        </div>
    </div>
  
  <!--Div principal ()-->
      <div id="principal">
            <h1 id="incubadora"> Incubadora de Empresas Tecnológicas</h1>
            <p id="paragrafo">
                Uma iniciativa destinada a abrigar e fortalecer projetos inovadores e novas empresas de base tecnológica, por um período de tempo limitado.
            </p> 
        </div>


<!--Apresentação curta - IETEC-->
    <div class="quem_somos">
            <div class="quem_somos_text">
                <h2 class="h2_somos">Sobre: </h2>
                <p class="p_somos">
                    A IETEC-CEFET/RJ - Incubadora de Empresas Tecnológicas do CEFET/RJ - possui um ambiente físico que se destina a abrigar negócios e projetos que necessitem de um desenvolvimento tecnológico, de formação empreendedora e de estruturação gerencial. Constitui, assim, um meio inovador que gera condições para aumentar as chances de sobrevivência, crescimento e consolidação de microempresas inovadoras. Idealizada há mais de 20 anos, vem consolidando sua estratégia de expansão aos campi de Nova Iguaçu, Maria da Graça, Petrópolis, Valença, Angra dos Reis, Itaguaí e Nova Friburgo.
                </p>
            </div>
            <img class="img_somos" src="/img/icon_perfil.png">
    </div>


    <footer>
    <!-- Rodapé -->
        <div class="rodape">
            <div class="contato">
                
                <!-- Telefone -->
                <h3 class="htext">Contato</h3>
                <p>Telefone: (21) 2569-4403</p>
                <p>E-mail: ietec@cefet-rj.br</p>
                
            </div>

            <!-- Redes Sociais -->
            <div class="redes_sociais">
                <h3 class="htext">Mídias Sociais</h3>
                <br>
                <a href="https://pt-br.facebook.com/ieteccefet/" class="social" target="_blank">Facebook</a>
                <br><br>
                <a href="https://www.linkedin.com/in/ieteccefetrj/" class="social" target="_blank">Linkedin</a>

            </div>

            <!-- Endereço -->
            <div class="endereco">
                <h3 class="htext">Endereço</h3>

                <p class="paragrafos">Rua General Canabarro, 485 - Bloco C - Térreo - Maracanã, RJ</p>
                <p class="paragrafos">CEP: 20271-204 </p>
                <p class="paragrafos">Aberto das 10 às 17 horas.</p>

            </div>
        </div>
    </footer> 
</body>
</html>