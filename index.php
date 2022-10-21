<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ordep Store</title>
  <script type="text/javascript" src="codigo.js"></script>
  <link rel="stylesheet" href="css/principal.css" />
</head>

<body>
  <header>
    <div class="content">
      <nav>
        <p class="brand"><strong class="brand">Ordep</strong> Store</p>
        <ul>
          <li><a href="#catalogo">Catálogo</a></li>
          <li><a href="#Sobre">Sobre</a></li>
          <li><a href="#Feedbacks">Feedbacks</a></li>
          <li><a href="login.php">Carrinho</a></li>
          <button id="btn"><a href="login.php" style="text-decoration: none; color: black;">Login</a></button>
        </ul>
      </nav>
      <div class="header-block">
        <div class="text">
          <h2>Ordep Store</h2>
          <p>
            O poder do drip na palma da sua mão.
          </p>
        </div>
        <img src="imagens/man3.png" alt="Homem" />
      </div>
    </div>
  </header>
  <section class="catalogo" id="catalogo">
    <div class="content">
      <div class="title-wrapper-catalogo">
        <p>Ache o que procura aqui</p>
        <h3>Catálogo</h3>
      </div>
      <div class="filter-card">
        <input type="text" class="search-input" placeholder="Escolha seu estilo favorito" />
        <button class="search-button">Buscar</button>
      </div>
      <div class="card-wrapper">
        <div class="card-item">
          <img src="imagens/roupa1.png" alt="Item 1" />
          <div class="card-content">
            <h3>Camisa de Malha</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <button type="button" onclick="cadastro()">Comprar</button>
          </div>
        </div>
        <div class="card-item">
          <img src="imagens/roupa2.png" alt="Item 2" />
          <div class="card-content">
            <h3>Camisa de Manga Longa</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <button type="button" onclick="cadastro()">Comprar</button>
          </div>
        </div>
        <div class="card-item">
          <img src="imagens/roupa3.png" alt="Item 3" />
          <div class="card-content">
            <h3>Calça Courino Swag</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <button type="button" onclick="cadastro()">Comprar</button>
          </div>
        </div>
        <div class="card-item">
          <img src="imagens/roupa4.png" alt="Item 4" />
          <div class="card-content">
            <h3>Camiseta Manga longa de Malha</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <button type="button" onclick="cadastro()">Comprar</button>
          </div>
        </div>
        <div class="card-item">
          <img src="imagens/roupa5.png" alt="Item 5" />
          <div class="card-content">
            <h3>Camisa social Manga 3/4</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <button type="button" onclick="cadastro()">Comprar</button>
          </div>
        </div>
        <div class="card-item">
          <img src="imagens/roupa6.png" alt="Item 6" />
          <div class="card-content">
            <h3>Calça Mostarda</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            <button type="button" onclick="cadastro()">Comprar</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="Sobre" id="Sobre">
    <div class="content">
      <div class="title-wrapper-Sobre">
        <p>Quem somos nós</p>
        <h3>Sobre</h3>
      </div>
      <div class="Sobre-content">
        <div class="left">
          <img src="imagens/about3.png" alt="Sobre" />
        </div>
        <div class="right">
          <h3>O Estilo e o Drip interligado em um só lugar</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias reprehenderit ullam obcaecati dolorum non
            expedita repellat recusandae, harum quasi ea consequuntur, numquam neque porro molestiae doloremque beatae
            minima, nobis autem atque placeat nisi aspernatur omnis? Quia sequi rem id officiis ipsam explicabo tempore
            rerum in deserunt voluptate. Alias libero molestias quis labore sint est aperiam assumenda quos doloremque
            inventore asperiores eveniet, nihil eos aut quidem voluptatum totam nemo, iusto ipsa exercitationem
            cupiditate. Porro nesciunt minima labore exercitationem aperiam. Nobis, delectus quasi iste dolore
            dignissimos quisquam! Commodi, officia placeat, ducimus ut quos nihil minima delectus optio amet veniam
            dolor accusantium illo?
        </div>
      </div>
    </div>
  </section>
  <section class="Feedbacks" id="Feedbacks">
    <div class="content">
      <div class="title-wrapper-Feedbacks">
        <p>Comentários e Feedbacks</p>
        <h3>Nossos clientes</h3>
      </div>
      <div class="feature-card-block">
        <div class="feature-card-item">
          <img src="imagens/1.jpg" alt="Cliente 1" />
          <div class="feature-text-content">
            <h3>"Virou um dos meus favoritos."</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="feature-card-item">
          <img src="imagens/2.jpg" alt="Cliente 2" />
          <div class="feature-text-content">
            <h3>"Melhor loja que existe!"</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="feature-card-item">
          <img src="imagens/3.jpg" alt="Cliente 3" />
          <div class="feature-text-content">
            <h3>"Comprometimento e qualidade estão aqui"</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="feature-card-item">
          <img src="imagens/4.jpg" alt="Cliente 4" />
          <div class="feature-text-content">
            <h3>"Só compro aqui e recomendo!"</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="feature-card-item">
          <img src="imagens/5.jpg" alt="Cliente 5" />
          <div class="feature-text-content">
            <h3>"Facilidade e preços justos! Roupas impecáveis!"</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="feature-card-item">
          <img src="imagens/6.jpg" alt="Cliente 6" />
          <div class="feature-text-content">
            <h3>"O pai está no Estilo! Fico no naipe com essa loja!"</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="main">
      <div class="content footer-links">
        <div class="footer-company">
          <h4>Companhia</h4>
          <h6>Sobre</h6>
          <h6>Contato</h6>
        </div>
        <div class="footer-options">
          <h4>Outros</h4>
          <h6>Direitos Autorais</h6>
          <h6>Fale conosco</h6>
          <h6>Ajuda</h6>
        </div>
        <div class="footer-social">
          <h4>Conecte-se conosco</h4>
          <div class="social-icons">
            <img src="imagens/linkedin.png" alt="Linkedin" />
            <img src="imagens/gmail.png" alt="Gmail" />
            <img src="imagens/instagram.png" alt="Instagram" />
          </div>
        </div>
        <div class="footer-contact">
          <h4>Contato:</h4>
          <h6>+55 (21) 99999-9999</h6>
          <h6>contato@gmail.com</h6>
          <h6>www.linkedin.com/in/contato</h6>
        </div>
      </div>
    </div>
    <div class="last">Ordep Store - 2022</div>
  </footer>

</html>