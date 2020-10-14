<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, inicial-scale=1.0">
        <script src="scripts/Btn.js"></script>

        <link rel="stylesheet" href="styles/header.css"/>
        <link rel="stylesheet" href="styles/page.css"/>

        <title>Home - Watchers</title>
    </head>
    <body>
        <header>
            <?php
                header("Cache-Control: no-cache, must-revalidate");
            ?>

            <nav>
                <ul id="Btn" class="Menu Menu_bar close">
                    <li><a href="#">Menu</a></li>
                    <!--<li><a href="#">Categorias</a></li>-->
                    <li><a href="#Filmes">Filmes</a></li>
                    <li><a href="#Series">Séries</a></li>
                </ul>
            </nav>
    
            <img id="BtnMenu" class="btnMenu open" src="images/header/Btn_menu.png" onclick="Condition_menu()"/>
            <img id="logo" class="Logo" src="images/header/Logo black.png"/>
            <img class="search_icon" src="images/header/Search.png" onclick="Condition_search()"/>
    
            <input id="search_input" class="search close"/>
        </header>
    </body>
</html>