<?php 
  if(isset($_GET['sucesso'])){
?>
<script>alert("Mensagem enviada com sucesso")</script>

<?php } ?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Trabalhe com a Gott Consultoria e faça diferença em uma empresa que se importa com a satisfação de seus clientes">
  <meta name="keywords" content="Oportunidade, Trabalhe, Processo seletivo, Currículo">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="carrousel/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="carrousel/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
  <link rel="shortcut icon" href="imagens/favicongott.png" type="image/x-icon">

  <link rel="stylesheet" href="css/style.css">
  <title>Trabalhe Conosco</title>
</head>

<body>
  <header>
    <h1><a href="index.php"><img src="imagens/cropped-gottconsultoria_logo-ps8xw6hi3ph9b2z6p7qqz5knmav5pxkikqp02p2ay0.png" alt="Logo Gott Consultoria" width="100"></a></h1>

    <nav>
      <h2><span href="" title="" class="icone">&equiv;</span>
        <!--Icone do menu hambúrguer-->
      </h2>
      <ul class="menu">
        <li><a href="index.php" title="Página Inicial">Início</a></li>
        <li><a href="sobre.html" title="Página Sobre">Sobre</a></li>
        <li><a href="servicos.html" title="Página Serviços">Serviços</a></li>
        <li><a href="trabalhe_conosco.php" class="active" title="Página Trabalhe Conosco">Trabalhe Conosco</a></li>
        <li><a href="fale_conosco.php" title="Página Fale Conosco">Fale Conosco</a></li>
      </ul>
    </nav>
  </header>

  <section class="hero_trabalhe_conosco mb-3">
    <h1 data-anime="zoom-in">Trabalhe Conosco</h1>
  </section>

  <section class="apresentacao_trabalhe_conosco d-lg-flex justify-content-center flex-wrap gap-4 mt-5">
    <div class="d-flex justify-content-center ">
      <span>
        <h2 class="text-center">Faça Parte da Nossa História</h2>
        <img src="imagens/gottconsultoria_logo.png" alt="" class=" ">
      </span>
    </div>


    <div class="valores">
      <div>
        <h2 class="text-center">Nossos Valores</h2>
      </div>
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
  </section>

  <section class="formulario_trabalhe_conosco mt-5">
    <h2>Nos conte mais sobre você</h2>


    <form action="https://getform.io/f/9721a68a-286b-447d-9414-31530ec50c2f" method="post" class="mt-5" enctype="multipart/form-data">
      <div data-anime="zoom-in">
        <label for="nome">Nome</label>
        <input type="text" name="nome" placeholder="Digite seu nome completo">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="exemplo@exemplo.com.br">
        <label for="telefone">Telefone</label>
        <input type="tel" name="telefone" placeholder="(11) 99999-9999">
        <label for="mensagem">Sua mensagem</label>
        <textarea name="mensagem" placeholder="Escreva sua mensagem" id="" cols="30" rows="10"></textarea>
        <label for="arquivo">Envie seu currículo</label>
        <input type="file" name="arquivo" placeholder="Digite seu nome completo" class="input-file">
        <button type="submit">Enviar</button>
      </div>
    </form>

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

  <script src="js/script.js"></script>
  <script type="text/javascript">(function(n,r,l,d){try{var h=r.head||r.getElementsByTagName("head")[0],s=r.createElement("script");s.defer=true;s.setAttribute("type","text/javascript");s.setAttribute("src",l);n.neuroleadId=d;h.appendChild(s);}catch(e){}})(window,document,"https://cdn.leadster.com.br/neurolead/neurolead.min.js", 69896);</script>
</body>

</html>