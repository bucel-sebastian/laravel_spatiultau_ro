<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>spatiultau.ro</title>

        <link rel="stylesheet" type="text/css" href="{{ mix('css/style.css') }}">

        <!-- GOOGLE FONTS -->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    </head>
    <body>
        <header id="header-with-search">
            <div class="header-wrapper">
                <div class="header-left">
                    <embed src='/resources/assets/img/logo.svg'>
                </div>
                <div class="header-right">
                    <div class="header-right-top">
                        <div class="header-right-top-left">
                            <a href="/adauga-anunt/" class='articol-nou-btn'>Adaugă anunț</a>
                        </div>
                        <div class="header-right-top-right">
                            <div class="header-account-btn">
                                <a href="/contul-meu/">
                                    <span >Contul meu</span>
                                    <div class="header-account-photo"
                                        style="background-image: url('/resources/assets/img/default-profile-pic.svg')"
                                    ></div>
                                </a>
                                <div>
                                    <div>
                                        <a href="/contul-meu/autentificare">Intră în cont</a>
                                        <a href="/contul-meu/inregistrare">Cont nou</a>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <button id="menu-burger" class="menu-burger menu-closed">
                                        <span class="bar-1"></span>
                                        <span class="bar-2"></span>
                                        <span class="bar-3"></span>
                        
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-right-bottom">
                        <div>
                            <div>
                                <div>
                                     
                                </div>
                            </div>
                        </div>
                        <div class="header-search-container">
                            <div class="header-search-wrapper">
                                <form action="" class="header-search-form">
                                    <div class="header-search-form-wrapper">
                                        <div class="header-search-input-container">
                                            <select name="locatie" id="">
                                                <option value="">Locație</option>
                                            </select>
                                        </div>
                                        <div class="header-search-input-container">
                                            <select name="tip" id="">
                                                <option value="">Tip imobil</option>
                                            </select>
                                        </div>
                                        <div class="header-search-input-container">
                                            <select name="inchirierevanzare" id="">
                                                <option value="">Închiriere / Vânzare</option>
                                            </select>
                                        </div>
                                        <div class="header-search-input-container">
                                            <button type="submit">caută</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <div style="min-height: 100vh;padding-top:200px;">
            @yield('content')

        </div>

        <footer>    
            <div class="footer-wrapper">
                <div class="footer-left">
                    <div class="footer-left-top">
                        <div class="footer-nav-container">
                            <div class="footer-nav-title">
                                <span>spațiul tău</span>
                            </div>
                            <div class="footer-nav">
                                <nav>
                                    <ul>
                                        <li><a href="/despre-noi">despre noi</a></li>
                                        <li><a href="/contact">contact</a></li>
                                        <li><a>expert</a></li>
                                        <li><a>utile</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="footer-nav-container">
                            <div class="footer-nav-title">
                                <span>utile proprietari</span>
                            </div>
                            <div class="footer-nav">
                                <nav>
                                    <ul>
                                        <li><a>contul tău</a></li>
                                        <li><a>adaugă anunț</a></li>
                                        <li><a>alege agenție</a></li>
                                        <li><a>ghidul proprietarului</a></li>
                                        <li><a>indice imobiliar</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="footer-nav-container">
                            <div class="footer-nav-title">
                                <span>utile profesionisti</span>
                            </div>
                            <div class="footer-nav">
                                <nav>
                                    <ul>
                                        <li><a>contul tău</a></li>
                                        <li><a>servicii oferite</a></li>
                                        <li><a>servicii dezvoltatori</a></li>
                                        <li><a>cpi</a></li>
                                        <li><a>analize imobiliare</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="footer-left-bottom">
                        <div>
                            Social
                        </div>
                        <div>
                            <span>© 2022 SPAȚIUL TĂU. Toate drepturile rezervate.</span>
                        </div>
                    </div>
                </div>
                <div class="footer-right">
                    <embed src='/resources/assets/img/logo.svg'>
                </div>
            </div>
        </footer>

        <script src="{{ mix('js/menu.js') }}" defer></script>
    </body>
</html>