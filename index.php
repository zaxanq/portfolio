<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#cb9753">
    <link rel="Stylesheet" type="text/css" href="style.css">
    <link rel="Stylesheet" type="text/css" href="font-awesome.css">
    <script src="js/jquery-3.3.1.js"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <div class="header-logo">
            <div class="header-logo-link">
                <a href="index.php">Krzysztof<br>Kosmowski</a>
            </div>
        </div>
        <nav>
            <ul>
                <li><a class="menu-element" href="#about-me">/about-me</a></li>
                <li><a class="menu-element" href="#my-skills">/my-skills</a></li>
            </ul>
            <ul>
                <li><a class="menu-element" href="#my-works">/my-works</a></li>
                <li><a class="menu-element" href="#contact-me">/contact-me</a></li>
            </ul>
        </nav>
    </header>
    <div class="hexagon">
        <div class="hexagon-header">
            <section class="hexagon-header-description">
                <div id="cut-to-shape"></div>
                <span class="description-title">
                    Junior Front-end developer
                </span>
                <span>
                    Nazywam się Krzysztof, moją pasją jest Front-end. Czerpię satysfakcję widząc efekty swojej pracy, dlatego chciałbym żeby ta pasja została moją pracą.
                </span>
            </section>
            <div class="hexagon-header-photo"></div>    
        </div>
        <div class="hexagon-body">
            <section class="body-panel" id="about-me">
                <h4>About me</h4>
                <span>
                    <p>Mam 24&#160;lata, pochodzę z&#160;woj. Śląskiego jednak obecnie mieszkam w&#160;Warszawie, gdzie przeprowadziłem się w&#160;pogoni za ambicjami. Moim celem jest rozpocząć życie, którego fundamentem będzie praca jako Front-end developer - jest&#160;to dla mnie przepis na sukces, bo nie wyobrażam sobie innej pracy, z&#160;której mógłbym czerpać tyle radości i&#160;satysfakcji.</p>
                    <p>Przygodę z&#160;Front-endem rozpocząłem już dawno temu, jednak do niedawna określałem to po prostu "tworzeniem stron". Dopiero jakiś czas temu - rok? Półtorej roku? dwa lata? - pojawiło się pragnienie uporządkowania wiedzy związanej z&#160;semantyką najnowszej odsłony języka HTML, poszerzanie wiedzy związanej z&#160;językiem CSS i&#160;jego preprocesorach, nauka języka JavaScript oraz jego bibliotek.</p>
                    <p>Mam ambicje i&#160;chęci do zdobywania wiedzy i&#160;rozwijania się, do&#160;odkrywania coraz to nowszych rozwiązań i&#160;utrwalania tych już poznanych. Do&#160;poznawania frameworków i&#160;bibliotek oraz zrozumienia zasad ich działania, do&#160;stosowania nowego oprogramowania oraz nowych języków programowania, a&#160;nawet technologii (backend). Jednak nawet największe chęci i&#160;starania nie równają&#160;się doświadczeniu komercyjnemu - dlatego chcę je zdobyć jak najprędzej.</p>
                </span>
            </section>

            <section class="body-panel" id="my-skills">
                <h4>My skills</h4>
                <span>
                    <p>Do pracy stosuję HTML&#160;5, jednocześnie korzystając z&#160;jego semantyki kodu oraz unikając przestarzałych rozwiązań. Sporą część obecnej nauki poświęcam na RWD, w&#160;tym flexbox oraz grid. Do stylizacji stron używam CSS&#160;3 wraz z&#160;preprocesorem Sass, ponieważ ułatwia on tworzenie przejrzystych i&#160;czytelnych deklaracji. Staram&#160;się używać aktualnych rozwiązań i&#160;nie nadużywać tych nowopoznanych (choć bywa to trudne). Znam również framework Bootstrap, jednak preferuję pisać własne deklaracje, przynajmniej na&#160;razie. Ćwiczę na codziennej praktyce język JavaScript (ES6) oraz jQuery. Znam podstawy języka PHP i&#160;Python - obecnie używam tego pierwszego przy wszelkiej formy backendzie, jednak docelowo będę używał Django. Wielokrotnie stosowałem w&#160;moich stronach systemu zarządzania bazami danych MySQL.</p>
                    <p>Poza technologiami webowymi i&#160;językami programowania posiadam także zaawansowaną wiedzę z&#160;zakresu używanai narzędzi takich jak Adobe Photoshop czy&#160;Adobe Illustrator, a&#160;dzięki wieloletniej pracy z&#160;tym pierwszym posiadam także wyczucie estetyki i&#160;w&#160;doborze kolorów. Wiele tworzonych projektów rozpocząłem własnie w&#160;programie graficznym. Chciałbym sprawdzić w&#160;praktyce Adobe Experience Design.</p>
                </span>
                <section id="skill-icons">
                    <i class="fab fa-html5"></i>
                    <i class="fab fa-css3-alt"></i>
                    <i class="fab fa-js"></i>
                    <i class="fab fa-sass"></i>
                    <i class="fab fa-github"></i>
                    <img src="img/photoshop_icon.svg" class="icon">
                    <img src="img/illustrator_icon.svg" class="icon">
                </section>
            </section>
            <section class="body-panel" id="my-works">
                <h4>My works</h4>
                <span>
                    <p>Obecnie moją największą pracą jest właśnie to portfolio. Z czasem jednak będę tutaj na bieżąco dodawał kolejne projekty.</p>
                </span>
                <section id="work-gallery">
                    <div id="gallery-item-1">
                        <span style="display: none;">
                            My portfolio
                            <br>Repo: <a href="https://github.com/zaxanq/portfolio">click</a>
                            <br>Live: <a href="#">click</a>
                        </span>    
                    </div>
                    <div id="gallery-item-2">
                        <span style="display: none;">
                            Website reconstruction<br>
                            Live: <a href="../zadanie-wg/">click</a><br>
                            Original: <a href="https://poland.wolvessummit.com/free-investors-book-for-startups">click</a> + <a href="http://wolvessummit.com">click</a>
                        </span>    
                    </div>

                </section>
            </section>
            <section class="body-panel" id="contact-me">
                <h4>Contact me</h4>
                <span>
                    <p>W kwestii pracy interesuje mnie tylko praca stacjonarna w Warszawie. Kontakt ze mną można nawiązać poprzez kilka kanałów komunikacji:</p>
                    <ul>
                        <li><span>E-mail</span>: <a href="mailto:krzysztof@kosmowski.ct8.pl">krzysztof@kosmowski.ct8.pl</a></li>
                        <li><span>LinkedIn</span>: <a href="https://www.linkedin.com/in/krzysztof-kosmowski-81b9bb16a/">Krzysztof Kosmowski</a></li>
                        <li><span>Telefon</span>: +48 733-686-692</li>
                    </ul>
                </span>
            </section>
        </div>
    </div>
<script type="text/javascript" src="js/logo.js"></script>
<script type="text/javascript" src="js/scroll.js"></script>
<script type="text/javascript" src="js/body.js"></script>
</body>
</html>