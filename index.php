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
                    <p>Mam 24 lata, pochodzę z woj. Śląskiego jednak przeprowadziłem się do Warszawy w pogoni za ambicjami. Moim celem jest rozpocząć w stolicy życie, którego fundamentami będzie praca jako Front-end developer. Jest to dla mnie przepis na sukces, ponieważ nie wyobrażam sobie innej pracy, z której czerpałbym tyle radości i satysfakcji.</p>
                    <p>Przygodę z Front-endem rozpocząłem już dawno temu, choć do niedawna zawsze nazywało się to „tworzeniem stron”. Dopiero jakiś czas temu pojawiło się pragnienie uporządkowania wiedzy związanej z semantyką najnowszej odsłony języka HTML, poszerzanie wiedzy związanej z językiem CSS i jego preprocesorach, „przestawienie się” na JavaScript oraz jego biblioteki.</p>
                    <p>Mam ambicje i chęci do zdobywania wiedzy i rozwijania się, do odkrywania nowych rozwiązań i utrwalania tych już poznanych, do poznawania frameworków, bibliotek, zrozumienia zasad ich działania. Jednak nawet największe chęci i starania nie równają się doświadczeniu komercyjnemu. Dlatego chcę zdobyć je jak najprędzej.</p>
                </span>
            </section>

            <section class="body-panel" id="my-skills">
                <h4>My skills</h4>
                <span>
                    <p>Używam języka HTML 5, wraz z semantyką kodu, którą wnosi oraz unikając przestarzałych rozwiązań. Do stylizacji stosuję preprocesora Sass, ponieważ ułatwia on tworzenie przejrzystych deklaracji, znam również framework Boostrap jednak (póki co) nie uważam go za odpowiednie dla mnie rozwiązanie. Preferuję pisać własne deklaracje. Ćwicze na codziennej praktyce moje umiejętności języka Javascript (ECMAScript 6) i biblioteki jQuery. Znam podstawy języków PHP i Python, a także wielokrotnie stosowałem bazy danych MySQL.</p>
                    <p>Poza technologiami webowymi i językami programowania posiadam także zaawansowaną wiedzę z zakresu używania narzędzi takich jak Adobe: Photoshop, Illustrator, Indesign, a dzięki wieloletniej pracy z tym pierwszym posiadam także wyczucie w doborze kolorów i estetyki. Wiele tworzonych projektów rozpoczynam właśnie w programie graficznym. Chciałbym sprawdzić w praktyce Adobe Experience Design.</p>
                </span>
                <section class="skill-icons">
                    <i class="fab fa-html5"></i>
                    <i class="fab fa-css3-alt"></i>
                    <i class="fab fa-js"></i>
                    <i class="fab fa-sass"></i>
                    <i class="fab fa-github"></i>
                    <img src="img/photoshop_icon.svg" class="icon">
                    <img src="img/illustrator_icon.svg" class="icon">
                </section>
            </section>
        </div>
    </div>
<script type="text/javascript" src="js/logo.js"></script>
<script type="text/javascript" src="js/scroll.js"></script>
</body>
</html>