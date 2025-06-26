<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>100Limites</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../SistemaDeTarefas/Css/index.css">
</head>

<body>
    <!-- Início nav_bar -->
    <nav class="nav_bar">
        <div class="logo">
            <img src="../SistemaDeTarefas/Img/index/loog.png" alt="Logo 100Limites" class="logo_img">
        </div>
        <ul class="info_nav">
            <li><a href="#">Sobre nós</a></li>
            <li><a href="#">Galeria</a></li>
            <li><a href="#">Feed</a></li>
            <li><a href="../SistemaDeTarefas/Login.php">Sou equipe</a></li>
            <li><a href="#">Local</a></li>
            <li class="ctt"><a class="ctt_nav" href="#">Contato</a></li>
        </ul>
    </nav>
    <!-- Final nav_bar -->

    <div class="gradiente_fundo"></div>
    <main class="home">
        <div class="img_fundo">
            <img src="../SistemaDeTarefas/Img/index/fundo_home.jpeg" alt="Fundo" class="img_fundo_img">
        </div>

        <div class="container_home">
            <div class="info_home">
                <h1>Onde a arte<br>Encontra a<br>essência.</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus.</p>
                <button class="btn_home" type="submit">Saiba Mais</button>
            </div>

            <div class="img_fundo_dois">
                <img src="../SistemaDeTarefas/Img/index/Viva_100_Limites.png" alt="Viva 100 Limites">
            </div>
        </div>
    </main>

    <!-- Sobre -->
    <section id="sobre" class="section light">
        <h2>Sobre o Sistema</h2>
        <p>Um sistema de tarefas inteligente com área para administradores e usuários. Organize, monitore e interaja com seu time de forma eficiente.</p>
    </section>

    <!-- Galeria -->
    <section id="galeria" class="section galeria-section">
        <h2><span>🖼</span> Galeria de Protótipos</h2>
        <p class="descricao">Visualize algumas telas já desenvolvidas para o sistema. Interfaces modernas, simples e funcionais.</p>

        <div class="carousel-container">
            <button class="carousel-btn prev" onclick="moveCarousel('galeria', -1)">‹</button>
            <div class="carousel" id="galeria-carousel">
                <div class="carousel-item card-tech">
                    <img src="assets/mockup1.jpg" alt="Mockup 1" />
                    <p>Login Responsivo</p>
                </div>
                <div class="carousel-item card-tech">
                    <img src="assets/mockup2.jpg" alt="Mockup 2" />
                    <p>Dashboard ADM</p>
                </div>
                <div class="carousel-item card-tech">
                    <img src="assets/mockup3.jpg" alt="Mockup 3" />
                    <p>Visualização de Tarefas</p>
                </div>
            </div>
            <button class="carousel-btn next" onclick="moveCarousel('galeria', 1)">›</button>
        </div>
    </section>


    <!-- Feed -->
    <section id="feed" class="section feed-section">
        <h2><span>📝</span> Atualizações Recentes</h2>
        <div class="timeline">
            <div class="timeline-item">
                <span class="badge">v1.2</span>
                <p>Dashboard com cards responsivos</p>
            </div>
            <div class="timeline-item">
                <span class="badge">v1.1</span>
                <p>Cadastro de tarefas pelo ADM</p>
            </div>
            <div class="timeline-item">
                <span class="badge">v1.0</span>
                <p>Login implementado</p>
            </div>
        </div>
    </section>


    <!-- Equipe -->
    <section id="equipe" class="section dark equipe-section">
        <h2><span>👨‍💻</span> Nossa Equipe</h2>
        <p class="descricao">Conheça quem está por trás do desenvolvimento desse projeto incrível!</p>

        <div class="carousel-container">
            <button class="carousel-btn prev" onclick="moveCarousel('equipe', -1)">‹</button>
            <div class="carousel" id="equipe-carousel">
                <div class="carousel-item card-team">
                    <img src="assets/equipe1.jpg" alt="Raphael" />
                    <h3>Raphael Silva</h3>
                    <p>Fullstack Developer</p>
                </div>
                <div class="carousel-item card-team">
                    <img src="assets/equipe2.jpg" alt="Ana" />
                    <h3>Ana Lima</h3>
                    <p>UX/UI Designer</p>
                </div>
                <div class="carousel-item card-team">
                    <img src="assets/equipe3.jpg" alt="Lucas" />
                    <h3>Lucas Torres</h3>
                    <p>Gestor de Projetos</p>
                </div>
            </div>
            <button class="carousel-btn next" onclick="moveCarousel('equipe', 1)">›</button>
        </div>
    </section>


    <!-- Contato -->
    <section id="contato" class="contato-estilo">
        <div class="contato-info">
            <h3>LOCALIZAÇÃO</h3>
            <p>28 Jackson Blvd Ste 1020 Chicago<br>IL 60604-2340</p>

            <h3>SIGA-NOS</h3>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
            </div>

            <small>© 2025 Política de privacidade</small>
        </div>

        <div class="contato-formulario">
            <h2>Formulário de Contato</h2>
            <form>
                <input type="text" placeholder="Enter your Name" required>
                <input type="email" placeholder="Enter a valid email address" required>
                <textarea placeholder="Enter your message" rows="5" required></textarea>
                <button type="submit">ENVIAR</button>
            </form>
        </div>
    </section>



    <footer>
        <p>&copy; 2025 Sistema 100 Limites. Todos os direitos reservados.</p>
    </footer>

    <script src="./Js/index.js"></script>

</body>

</html>