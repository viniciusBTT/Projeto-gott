<?php
if ((isset($_SERVER['HTTPS']) && 
(($_SERVER['HTTPS'] == 'on'))) 
|| (isset($_SERVER['HTTPS']) && 
   $_SERVER['SERVER_PORT'] == 443))
{
  $sucesso = "ok";
}
else
{
  header("location:https://www.gottconsultoria.com.br/");
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Serviços em parceria com empreendimentos passíveis de licenciamento de alta complexidade e suporte voltado a assuntos regulatórios">
  <meta name="keywords" content="Licenciamento, Consultoria, Regulamentação">

  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="carrousel/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="carrousel/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
  <link rel="shortcut icon" href="imagens/favicongott.png" type="image/x-icon">


  <link rel="stylesheet" href="css/style.css">
  <title>Home - Gott Consultoria</title>

</head>

<body>
  <header>
    <h1><a href="index.php"><img src="imagens/cropped-gottconsultoria_logo-ps8xw6hi3ph9b2z6p7qqz5knmav5pxkikqp02p2ay0.png" alt="Logo Gott Consultoria" width="100"></a></h1>

    <nav>
      <h2><span title="menu" class="icone">&equiv;</span>
        <!--Icone do menu hambúrguer-->
      </h2>
      <ul class="menu">
        <li><a href="index.php" class="active" title="Página Inicial">Início</a></li>
        <li><a href="sobre.html" title="Página Sobre">Sobre</a></li>
        <li><a href="servicos.html" title="Página Serviços">Serviços</a></li>
        <li><a href="trabalhe_conosco.php" title="Página Trabalhe Conosco">Trabalhe Conosco</a></li>
        <li><a href="fale_conosco.php" title="Página Fale Conosco">Fale Conosco</a></li>
      </ul>
    </nav>
  </header>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
        <img src="imagens/slides/slide_um.jpg" width="100%" height="100%" alt="">

        <div class="container">
          <div class="carousel-caption text-start" data-anime="zoom-in">
            <h1>GOTT CONSULTORIA</h1>
            <p>Atuando há mais de 20 anos em processos de alta complexidade, licenciamos empreendimentos passíveis de licenciamento junto a diversos órgãos fiscalizadores, nas esferas regulatórias Municipais, Estaduais e Federais.</p>
            <p><a class="btn btn-lg" href="sobre.html" title="Ir para página Sobre">Veja Mais</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="imagens/slides/slide_dois.jpg" width="100%" height="100%" alt="">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>CONSULTORIA AMBIENTAL</h1>
            <p>Com equipe multidisciplinar a Gott Consultoria está preparada a atender a cada etapa do processo até o deferimento das licenças.</p>
            <p><a class="btn btn-lg" href="sobre.html" title="Ir para página Sobre">Veja Mais</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="imagens/slides/slide_tres.jpg" width="100%" height="100%" alt="">

        <div class="container">
          <div class="carousel-caption text-start d-flex">
            <div>
              <h1>ATUAÇÃO</h1>
              <p>Atuamos de forma técnica e específica, com garantias de segurança a empresas nacionais e estrangeiras no transporte rodoviário de cargas, armazéns, distribuidoras e fabricantes de fins industriais.</p>
              <p><a class="btn btn-lg" href="servicos.html" title="Ir para página Serviços">Veja Mais</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <main class="main_home">
    <h2>Areas de Atuação</h2>
    <section class="d-flex flex-wrap  justify-content-around text-center servicos_home">
      <article class="col-12 col-md-12 col-lg-3" aria-label="Serviços da Gott Consultoria">

        <h3>SASSMAQ </h3>
        <hr>
        <span class="servicos_separador"></span>
        <ul>
          <li><a href="servicos.html" title="Ir para página Serviços">Conjunto de Boas práticas</a></li>
          <li><a href="servicos.html" title="Ir para página Serviços">Análise desempenho</a></li>
          <li><a href="servicos.html" title="Ir para página Serviços">Melhoria Contínua</a></li>
          <li><a href="servicos.html" title="Ir para página Serviços">Armazenamento</a></li>
          <li><a href="servicos.html" title="Ir para página Serviços">Transportadoras</a></li>
          <li><a href="servicos.html" title="Ir para página Serviços">Distribuição</a></li>
        </ul>
      </article>

      <article class="col-12 col-md-12 col-lg-3">
        <h3>SIVISA-ANVISA
        </h3>
        <hr>
        <ul>
          <li><a href="servicos.html" title="Ir para página Serviços">Certificado Federal - AFE</a></li>
          <li><a href="servicos.html" title="Ir para página Serviços">Certificado Municipal</a></li>
          <li><a href="servicos.html" title="Ir para página Serviços">Transportadoras</a></li>
          <li><a href="servicos.html" title="Ir para página Serviços">Vistorias Previas</a></li>
          <li><a href="servicos.html" title="Ir para página Serviços">Distribuição</a></li>
          <li><a href="servicos.html" title="Ir para página Serviços">Armazéns</a></li>
          <li><a href="servicos.html" title="Ir para página Serviços">MBP</a></li>
          <li><a href="servicos.html" title="Ir para página Serviços">POP</a></li>

        </ul>
      </article>

      <article class="col-12 col-md-12 col-lg-3">
        <h3>CETESB</h3>
        <hr>
        <ul>
          <li><a href="servicos.html" title="Ir para página Serviços">MTR Transporte e Resíduos</a></li>
          <li><a href="servicos.html" title="Ir para página Serviços">Licença de instalação</a></li>
          <li><a href="servicos.html" title="Ir para página Serviços">Licença de Operação</a></li>
          <li><a href="servicos.html" title="Ir para página Serviços">Dispensa de Licença</a></li>
          <li><a href="servicos.html" title="Ir para página Serviços">Licença Prévia</a></li>
          <li><a href="servicos.html" title="Ir para página Serviços">CADRI</a></li>
        </ul>
      </article>
    </section>

    <section class="d-flex flex-wrap  justify-content-around text-center servicos_home_dois">
      <article class="col-12 col-md-12 col-lg-3">
        <h3>ISO 9001/14000 </h3>
        <hr>
        <ul>
          <li><a href="servicos.html" title="Ir para página Serviços">Avaliação de Desempenho Ambiental</a></li>
          <li><a href="servicos.html" title="Ir para página Serviços">Gestão de Requisitos Legais</a></li>
        </ul>
      </article>

      <article class="col-12 col-md-12 col-lg-3">
        <h3>QUÍMICOS CONTROLADOS​
        </h3>
        <hr>
        <ul>
          <li><a href="servicos.html" title="Ir para página Serviços">Exército Brasileiro</a></li>
          <li><a href="servicos.html" title="Ir para página Serviços">Polícia Federal</a></li>
          <li><a href="servicos.html" title="Ir para página Serviços">Polícia Civil</a></li>
          <li><a href="servicos.html" title="Ir para página Serviços">IBAMA</a></li>


        </ul>
      </article>

      <article class="col-12 col-md-12 col-lg-3" id="sobre">
        <h3>BOMBEIROS</h3>
        <hr>
        <ul>
          <li><a href="servicos.html" title="Ir para página Serviços">AVCB</a></li>
          <li><a href="servicos.html" title="Ir para página Serviços">Análise desempenho</a></li>
          <li><a href="servicos.html" title="Ir para página Serviços">CLCB</a></li>
        </ul>
      </article>
    </section>


  </main>

  <section class="sobre_home" aria-label="Sobre a Gott Consultoria">>
    <h2>Um pouco sobre nós</h2>
    <div class="d-flex flex-wrap justify-content-evenly sobre_home_div">
      <article class="col-12 col-md-12 col-lg-6 texto_sobre mb-5">
        <p>A Gott Consultoria atua há mais de 20 anos oferecendo serviços em parceria com empreendimentos passíveis de licenciamento de alta complexidade e suporte voltado a assuntos regulatórios mais criteriosos auxiliando as de forma aprofundada...</p>
        <a href="sobre.html" title="ir para Página Sobre"><button>VEJA MAIS</button></a>
      </article>

      <article class="numeros d-flex gap-5 mt-3">
        <span>
          <p class="contador" id="anoP">0+</p>
          <p>Anos de experiência</p>
        </span>
        <span>
          <p class="contador" id="clienteP">0+</p>
          <p>Empresas atendidas</p>
        </span>
      </article>
    </div>
  </section>

  <section class="clientes" aria-label="Clientes da Gott Consultoria">
    <h2 class="text-center">Nossos Clientes</h2>

    <div class="owl-carousel olw-theme">
      <div class="item">
        <img src="imagens/clientes/allroad.png" alt="Allroad">
      </div>
      <div class="item">
        <img src="imagens/clientes/CEVA-Logistics.png" alt="Ceva Logistics">
      </div>
      <div class="item">
        <img src="imagens/clientes/daeamericana.png" alt="dae americana">
      </div>
      <div class="item">
        <img src="imagens/clientes/expresso_logo.png" alt="Expresso Descalvado">
      </div>
      <div class="item">
        <img src="imagens/clientes/fm_logistic.png" alt="FM Logistic">
      </div>
      <div class="item">
        <img src="imagens/clientes/grupo-mirassol.png" alt="Grupo Mirassol">
      </div>
      <div class="item">
        <img src="imagens/clientes/henkel.png" alt="henkel">
      </div>
      <div class="item">
        <img src="imagens/clientes/kemira.png" alt="kemira">
      </div>
      <div class="item">
        <img src="imagens/clientes/logo-butilaml.png" alt="butilaml">
      </div>
      <div class="item">
        <img src="imagens/clientes/ntlNavegacoes.png" alt="ntlNavegações">
      </div>
      <div class="item">
        <img src="imagens/clientes/odebrecht.png" alt="odebrecht">
      </div>
      <div class="item">
        <img src="imagens/clientes/qbox.png" alt="qbox">
      </div>
      <div class="item">
        <img src="imagens/clientes/raca.png" alt="raça">
      </div>
      <div class="item">
        <img src="imagens/clientes/supportglass.png" alt="support glass">
      </div>
      <div class="item">
        <img src="imagens/clientes/transpen.png" alt="transpen">
      </div>
      <div class="item">
        <img src="imagens/clientes/tupy_logo-1.png" alt="Tupy">
      </div>
      <div class="item">
        <img src="imagens/clientes/unirios-.png" alt="Unirios">
      </div>
      <div class="item">
        <img src="imagens/clientes/vesselog.png" alt="vesselog">
      </div>
      <div class="item">
        <img src="imagens/clientes/yusen-logistics.png" alt="Yusen Logistics">
      </div>
    </div>

  </section>

  <section class="especial" aria-label="Depoimentos sobre a Gott Consultoria">
    <h2>Depoimentos</h2>
    <section class="d-flex justify-content-around flex-wrap depoimentos">
      <article class="mb-5">
        <img src="imagens/banners/biologa-gislene-1.jpg" alt="banner de depoimento de Gislene, bióloga">
        <details>
          <summary>Ler depoimento</summary>
          <p>"Pertencer ao time da Gott Consultoria é compartilhar os mesmos valores com uma empresa cujo propósito é inspirador, já seria razão o suficiente para o contentamento profissional, mas além disso a Gott Consultoria me proporcionou todos os elementos para eu ser uma responsável técnica de grande sucesso. A metodologia e o aprendizado fazem com que eu tenha um alto desempenho e orgulho de pertencer a esse time.
            <br>
            <br>
            Aqui somos desafiados a cada dia para sermos melhores, vencer obstáculos, buscar sonhos e ter coragem para enfrentar qualquer desafio, sempre em companheirismo. Isso me incentiva a uma dedicação maior."
          </p>
        </details>
      </article>
      <article class="mb-5">
        <img src="imagens/banners/famarceutico-joao.jpg" alt="banner de depoimento de João, Farmacêutico">
        <details>
          <summary>Ler depoimento</summary>
          <p>"Com mais de 20 anos de atuação no mercado, a Gott Consultoria aproveitou de uma janela dentro do mercado de consultoria para suprir a necessidade de outras empresas no suporte de assuntos regulatórios nos processos e ambientação dentro dessas empresas, somando isso à capacitação dos funcionários que atuam de acordo com as normas estabelecidas pelos órgãos licenciadores brasileiros, a Gott Consultoria consolida-se dentro do mercado fornecendo um produto de alto padrão de qualidade e segurança."</p>
        </details>
      </article>
      <article class="mb-5">
        <img src="imagens/banners/quimica-2.jpg" alt="banner de depoimento de Ivone Maria, farmacêutica e química">
        <details>
          <summary>Ler depoimento</summary>
          <p>"Empresa que se preocupa com seus colaboradores e que a cada dia pensa no crescimento de cada um que faz parte da família GOTT."</p>
        </details>
      </article>
    </section>

  </section>

  <section class="contato justify-content-center" aria-label="Valores e contato">
    <div class="valores_home">
      <h2>Nossos Valores</h2>
      <hr>
      <article>
        <h4>Missão: </h4>
        <p>Atuar dentro da ética e da legalidade, gerando resultados amplamente satisfatórios.</p>
      </article>

      <article>
        <h4>Visão: </h4>
        <p>Entender as necessidades individuais de cada empresa, minimizando riscos e protegendo continuamente.</p>
      </article>

      <article>
        <h4>Valores: </h4>
        <p>Orientar , Proteger, Defender e Alcançar.</p>
      </article>
    </div>

    <div class=" formulario_fale_conosco">
      <h2>Envie uma mensagem</h2>
      <hr>
      <form action="fale_conosco_mailer.php?inicio" method="POST">
        <label for="nome">Nome</label>
        <input type="text" name="nome" placeholder="Digite o seu nome ou da sua empresa">
        <label for="email">E-mail</label>
        <input type="text" name="email" placeholder="exemplo@exemplo.com.br">
        <label for="telefone">Telefone</label>
        <input type="tel" name="telefone" placeholder="(11) 99999-9999">
        <label for="assunto">Assunto</label>
        <input type="text" name="assunto" placeholder="Ex: Duvidas sobre serviços">
        <label for="mensagem">Mensagem</label>
        <textarea name="" id="" cols="30" rows="7" placeholder="Escreva sua mensagem"></textarea>
        <button type="submit">Enviar</button>
      </form>
    </div>
  </section>

  <footer class="d-flex flex-wrap justify-content-around">
    <article class="col-12 col-md-6 col-lg-3" data-anime="zoom-footer">
      <h2>ENDEREÇO</h2>
      <ul>
        <li>R. Guilherme Corrêa, 34 - Conjunto 03 -
        </li>
        <li>Jardim Santa Fé São Paulo - SP, 05271-230
        </li>
        <li><i class="bi bi-telephone-plus-fill"></i> +55 (11) 3911-5181</li>
        <li>
          <i class="bi bi-telephone-plus-fill"></i> +55 (11) 3449-8526
        </li>
      </ul>
    </article>
    <article class="adicionais col-12 col-md-6 col-lg-3" data-anime="zoom-footer">
      <h2>CONTATOS ADICIONAIS
      </h2>
      <ul>
        <li>
          <i class="bi bi-envelope-at"></i> administrativo@gottconsultoria.com.br
        </li>
        <li>
          <i class="bi bi-envelope-at"></i> comercial@gottconsultoria.com.br
        </li>
        <li>
          <i class="bi bi-instagram"></i> @gottconsultoria
        </li>
      </ul>
    </article>
    <article class="col-12 col-md-6 col-lg-3" data-anime="zoom-footer">
      <h2>MENU</h2>
      <ul>
        <li><a href="index.php" title="Página Inicial">Início</a></li>
        <li><a href="sobre.html" title="Página Sobre">Sobre</a></li>
        <li><a href="servicos.html" title="Página Serviços">Serviços</a></li>
        <li><a href="trabalhe_conosco.php" title="Página Trabalhe Conosco">Trabalhe Conosco</a></li>
        <li><a href="fale_conosco.php" title="Página Fale Conosco">Fale Conosco</a></li>
      </ul>
    </article>
    <article class="col-12 col-md-6 col-lg-3" data-anime="zoom-footer">
      <h2>GOTT CONSULTORIA
      </h2>
      <ul>
        <li>HÁ MAIS DE 20 ANOS FAZENDO A DIFERENÇA.</li>
        <li>©2022</li>
      </ul>
    </article>
  </footer>


  <script src="bootstrap/js/bootstrap.bundle.js"></script>
  <script src="jquery-3.6.1.min.js"></script>
  <script src="carrousel/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
  <script src="js/scriptIndex.js"></script>

  <script type="text/javascript">
    $(document).ready(function () {
      $(".owl-carousel").owlCarousel({
        items: 3,
        margin: 20,
        loop: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
          0: {
            items: 2
          },
          480: {
            items: 2
          },
          600: {
            items: 2
          },
          960: {
            items: 3
          }
        }
      })
    })
  </script>
  <script type="text/javascript">(function(n,r,l,d){try{var h=r.head||r.getElementsByTagName("head")[0],s=r.createElement("script");s.defer=true;s.setAttribute("type","text/javascript");s.setAttribute("src",l);n.neuroleadId=d;h.appendChild(s);}catch(e){}})(window,document,"https://cdn.leadster.com.br/neurolead/neurolead.min.js", 69896);</script>
</body>

</html>
