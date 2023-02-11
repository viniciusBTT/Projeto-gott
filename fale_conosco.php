<?php 
    if(isset($_GET['sucesso'])) {
?>
<script>alert("Mensagem enviada com sucesso")</script>
<?php } ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fale com a Gott Consultoria e faça seu orçamento ou tire dúvidas sobre os serviços">
    <meta name="keywords" content="Fale com a Gott Consultoria, Orçamentos Gott Consultoria, Solicite serviços com a Gott Consultoria">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="carrousel/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="carrousel/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    <link rel="shortcut icon" href="imagens/favicongott.png" type="image/x-icon">

    <link rel="stylesheet" href="css/style.css">
    <title>Fale Conosco</title>
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
                <li><a href="trabalhe_conosco.php" title="Página Trabalhe Conosco">Trabalhe Conosco</a></li>
                <li><a href="fale_conosco.php" class="active" title="Página Fale Conosco">Fale Conosco</a></li>
            </ul>
        </nav>
    </header>


    <section class="fale_conosco_banner">
        <h1 data-anime="zoom-in">Contato</h1>
    </section>
    <main class=" flex-wrap fale_conosco_conteudo mt-5">
        <section class="fale_conosco_texto text-center" data-anime="zoom-in">
            <h3>Responderemos o mais rápido possível!</h3>
            <p class="mt-3 mb-3">Deixe aqui seu pedido de orçamento ou dúvida responderemos o mais breve possível.</p>
            <span class="fale_conosco_txt_horario">Horário de Atendimento <br> Segunda á Sexta dás 08Hrs ás 18Hrs</span>
            <ul class>
                <li> <span>+55 (11) 3911-5181</span> </li>
                <li> <span>+55 (11) 3449-8526</span> </li>
            </ul>
        </section>
        <section class=" formulario_fale_conosco" >
            <div class="" data-anime="zoom-in">
                <form action="fale_conosco_mailer.php" method="POST">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" placeholder="Digite o seu nome ou da sua empresa">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" placeholder="exemplo@exemplo.com.br">
                    <label for="telefone">Telefone</label>
                    <input type="tel" name="telefone" placeholder="(11) 99999-9999">
                    <label for="assunto">Assunto</label>
                    <input type="text" name="assunto" placeholder="Ex: Duvidas sobre serviços">
                    <label for="mensagem">Mensagem</label>
                    <textarea name="mensagem" id="" cols="30" rows="7" placeholder="Escreva sua mensagem"></textarea>
                    <button type="submit">Enviar</button>
                </form>
            </div>
        </section>
    </main>
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
