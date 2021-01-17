<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />

        <title>Сетевой маркетинг</title>
        <meta name="description" content="Сетевой маркетинг" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        <meta property="og:image" content="{{ asset('img/setevoi_og_img.png') }}" />
        <link rel="shortcut icon" href="{{ asset('img/favicon/favicon.ico') }}" type="image/x-icon" />

        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/icons/apple-icon-57x57.png') }} " />
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/icons/apple-icon-60x60.png') }}" />
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/icons/apple-icon-72x72.png') }}" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/icons/apple-icon-76x76.png') }}" />
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/icons/apple-icon-114x114.png') }}" />
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/icons/apple-icon-120x120.png') }}" />
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/icons/apple-icon-144x144.png') }}" />
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/icons/apple-icon-152x152.png') }}" />
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/icons/apple-icon-180x180.png') }}" />
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('img/icons/android-icon-192x192.png') }}" />
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/icons/favicon-32x32.png') }}" />
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/icons/favicon-96x96.png') }}" />
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/icons/favicon-16x16.png') }}" />
        <meta name="msapplication-TileColor" content="#ffffff" />
        <meta name="msapplication-TileImage" content="{{ asset('img/icons/ms-icon-144x144.png') }}" />
        <meta name="theme-color" content="#ffffff" />

        <!-- Chrome, Firefox OS and Opera -->
        <meta name="theme-color" content="#000" />
        <!-- Windows Phone -->
        <meta name="msapplication-navbutton-color" content="#000" />
        <!-- iOS Safari -->
        <meta name="apple-mobile-web-app-status-bar-style" content="#000" />

        <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    </head>

    <body>
        <div class="wrapper main-wrapper">
            <div class="header">
                <div class="logo">
                    <a href="/">
                        <img src="./img/logo.png" alt="logo" />
                    </a>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="hamburger">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>

            <div class="main-menu">
                <ul>
                    <li><a href="/">Заметки</a></li>
                    <li><a href="/articles">Статьи</a></li>
                    <li><a href="/greenway">GreenWay</a></li>
                    <li><a href="/contacts">Контакты</a></li>
                </ul>
            </div>

            <div class="about">
                <p>Кто глубоко поймет идею сетевого маркетинга никогда не уйдет отсюда</p>
            </div>

            @yield('content')
        </div>

        <footer class="footer">
            <div class="wrapper">
                <div class="left-block">
                    <p class="link">Связь:</p>
                    <div class="messenger-icons">
                        <a href="https://api.whatsapp.com" target="_blank" class="messenger-icons-item"
                            ><img src="./img/icons/whatsapp.png" alt="alt"
                        /></a>
                        <a href="https://t.me/medonomator" target="_blank" class="messenger-icons-item"
                            ><img src="./img/icons/telegram.png" alt="alt"
                        /></a>
                        <a href="https://vk.com/medonomator" target="_blank" class="messenger-icons-item"
                            ><img src="./img/icons/vk-1.svg" alt="alt"
                        /></a>
                    </div>

                    <a class="url-partners" href="http://greenway-zorina.ru/">Стать партнером GreenWay</a>
                </div>

                <div class="right-block">
                    <a href="contacts">Поддержать проект</a>
                </div>
            </div>
        </footer>
        <script src="libs/jquery/jquery.min.js"></script>
        <!-- jQuery Modal -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
        <script src="js/common.js"></script>
    </body>
</html>
