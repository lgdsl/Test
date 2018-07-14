<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <title>Document</title>
</head>
<body>

<div id="background">
    <div id="menubar">
        <div id="menu">
            <ul>
                <li class="menu_icon" title="Домашняя страница">
                    <a href="http://warframe.vape-build.ru/index.php">
                        <img src="../../images/menubar/menubar_home.png">
                    </a>
                </li>
                <li class="separateur_menubar"></li>
                <li class="menu_icon" title="Варфреймы и Арчвинги">
                    <a href="http://warframe.vape-build.ru/index.php/warframes">
                        <img src="../../images/menubar/menubar_warframes.png">
                    </a>
                </li>
                <li class="separateur_menubar"></li>
                <li class="menu_icon" title="Основное оружие">
                    <a href="">
                        <img src="../../images/menubar/menubar_armes_principales.png">
                    </a>
                </li>
                <li class="separateur_menubar"></li>
                <li class="menu_icon" title="Дополнительное оружие">
                    <a href="">
                        <img src="../../images/menubar/menubar_armes_secondaires.png">
                    </a>
                </li>
                <li class="separateur_menubar"></li>
                <li class="menu_icon" title="Оружие ближнего боя">
                    <a href="">
                        <img src="../../images/menubar/menubar_armes_de_melee.png">
                    </a>
                </li>
                <li class="separateur_menubar"></li>
                <li class="menu_icon" title="Стражи и Кубрау">
                    <a href="">
                        <img src="../../images/menubar/menubar_sentinelles.png">
                    </a>
                </li>
                <li class="separateur_menubar"></li>
                <li class="menu_icon" title="Оружие стражей">
                    <a href="">
                        <img src="../../images/menubar/menubar_armes_de_sentinelles.png">
                    </a>
                </li>
                <li class="separateur_menubar"></li>
                <li class="menu_icon" title="Новые сборки">
                    <a href="">
                        <img src="../../images/menubar/menubar_builds_recents.png">
                    </a>
                </li>
                <li class="separateur_menubar"></li>
                <li class="menu_icon" title="Калькулятор оружия">
                    <a href="">
                        <img src="../../images/menubar/menubar_comparateur.png">
                    </a>
                </li>
                <li class="separateur_menubar"></li>
                <li class="menu_icon" title="Взлом">
                    <a href="">
                        <img src="../../images/menubar/menubar_piratage.png">
                    </a>
                </li>
                <li class="separateur_menubar"></li>
                <li class="menu_icon" title="Помощь">
                    <a href="">
                        <img src="../../images/menubar/menubar_aide.png">
                    </a>
                </li>
                <li class="separateur_menubar"></li>
            </ul>
        </div>
        <div id="langue">
            <a href="#">
                <img src="../../images/menubar/ru.png">
            </a>
            <a href="#">
                <img src="../../images/menubar/en.png">
            </a>
            <a href="#">
                <img src="../../images/menubar/fr.png">
            </a>
        </div>
        <div id="login">
            <div id="non-connecte" class="visible">
                <a href="#">Войти</a>
                |
                <a href="#">Зарегистрироваться</a>
            </div>
            <div id="connecte"></div>
        </div>
        <div id="menu_connexion"></div>
    </div>
    <div id="conteneur">
        <header id="logo">
            <a href="#">
                <img src="../../images/background/logo_warframe_builder.png" alt="Warframe Builder" title="Warframe Builder">
            </a>
        </header>
        <div class="like">
            If you are a registered user, please consider using the "like" function when you visit saved builds that you think are good. This little action will benefit all the community and with a common effort, the best builds will be listed at the top in no time. Thanks.
        </div>
        <div class="place_for_ads_center"></div>
        <div class="list">
          <?php
//            require_once ('../core/model_bd.php');
//           require_once ('CostumerModel.php');
//            require_once ('Renderer.php');

//            $bd = new model_bd();
//            $render = new Controller_Main();
//            $customerModel = new Model_Costumer($bd->connect());
//         $warframeItems = $customerModel->getItems();
//           $render->renderItem($warframeItems);

            ?>
            <?php include 'application/views/'.$content_view; ?>
        </div>
    </div>

</div>
<div id="footer">
    <div id="contenu-footer">
        <div class="footer">
            <ul>
                <li class="caption">Конструкторы</li>
                <li><a href="#">Варфреймы и Арквинги</a></li>
                <li><a href="#">Основное оружие</a></li>
                <li><a href="#">Дополнительное оружие</a></li>
                <li><a href="#">Оружие ближнего боя</a></li>
                <li><a href="#">Стражи и Кубрау</a></li>
                <li><a href="#">Оружие Стражей</a></li>
            </ul>
        </div>
        <div class="footer">
            <ul>
                <li class="caption">Ссылки</li>
                <li><a href="#">Новые сборки</a></li>
                <li><a href="#">Калькулятор оружия</a></li>
                <li><a href="#">Взлом</a></li>
                <li><a href="#"_blank">Новости</a></li>
                <li><a href="#" target="_blank">Обсуждение РУС</a></li>
                <li><a href="#">Помощь</a></li>
                <li><a href="#">Правила пользования</a></li>
            </ul>
        </div>
        <div class="non-connect">
            <ul>
                <li class="caption">Профиль</li>
                <li><a href="#" class="lien_connexion">Войти</a></li>
                <li><a href="#">Зарегистрироваться</a></li>
            </ul>
        </div>
        <div id="copyright">Права © 2013 - Сегодня. Все права защищены. Только для персонального использования.<br>
            Любое частичное или полное использование продукции без ведома вебмастера запрещено. <br>
            Digital Extreme Ltd, Warframe и логотип Warframe зарегистрированные марки. Права защищены по всему миру. Этот сайт не имеет какой либо официальной связи с Digital Extremes Ltd или Warframe.<br>
            Все изображения, скриншоты, символы или другие черты интеллектуальной собственности, связанные с вышеперечисленными торговыми марками, так же являются интеллектуальной собственностью Digital Extreme Ltd.</div>
    </div>
</div>

</body>
</html>