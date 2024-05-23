<?php
    $db = mysqli_connect('localhost','root','','Steak');
    if($db != NULL){
        echo "aoaoaoao";
    }
    $table = mysqli_query($db,"SELECT * FROM `clients`");
    $table = mysqli_fetch_all($table);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Magic Steak</title>
        <link rel="stylesheet" href="styles/diplomka.css?v=2">
        <link rel="icon" href="img/vector.ico">
    </head>
    <body>
        <div id="header">
            <div id="parent-left">
                <div class="line"></div>
                <div class="header-navig">
                    <a href="#vine-left"><div class="header-navig-txt font">о нас</div></a>
                    <div id="btn" onclick="ShowModal('modal');" class="header-navig-txt-right font">бронь</div>
                    <div id="modal" class="modalParrent">
                        <form method="POST" action="crud/loader.php" name="aboba">
                            <div class="modal">
                                <div>
                                    <input type="text" placeholder="Ваше имя" name="name">
                                    <input type="text" placeholder="На какую дату" name="date">
                                </div>
                                <div>
                                    <input type="text" placeholder="Телефон:" name="phone">
                                    <input type="text" placeholder="На сколько персон" name="quantity">
                                </div>
                                <div>
                                    <input id="big" type="text" placeholder="Пожелания к брони" name="wishes">
                                </div>
                                <input id="submit" type="submit" value="Забронировать" onclick="HideModal('modal');">
                            </div>
                        </form>
                    </div>
                </div>
                <div id="logo">
                    <img src="img/logo.png" alt="">
                    <img id="img-txt" src="img/logo-txt.png" alt="">
                </div>
            </div>
            <div id="parent-right">
                <div class="header-navig">
                <a href="#footer"><div class="header-navig-txt">контакты</div></a>
                <a href="#menu"><div class="header-navig-txt-right">лучшее</div></div></a>
                <div class="line"></div>
            </div>
        </div>
        <div id="wrapper" class="padding">
            <div class="magic-parent">
                <div class="magic-left">
                    <h1>Ресторан</h1>
                    <div class="magic-img">
                        <img src="img/magic-steak.png" alt="">
                    </div>
                    <div class="magic-txt">
                        <p>Где встречаются кулинарные <br> шедевры и атмосфера!</p>
                    </div>
                    <div class="magic-txt">
                        <h3>Мы приносим к столику только лучшее
                            сочетание экологически чистых продуктов,
                            изысканные блюда и отличные повара!</h3>
                    </div>
                        <div id="magic-menu" onclick="ShowModal('modal1');"><h2>Меню</h2></div>
                </div>
                <div class="magic-right">
                    <div class="magic-right-img">
                        <img src="img/steak.png" alt="">
                    </div>
                </div>
            </div>
            <div id="vine">
                <div id="vine-left">
                    <div class="vine-left-child">
                        <img src="img/vine.png" alt="">
                    </div>
                </div>
                <div class="vine-right">
                    <h1>о нас</h1>
                    <div class="vine-right-txt">
                        <p> Добро пожаловать в наш ресторан стейков, <br> 
                            где каждый прием пищи - это праздник для <br>
                            вашего вкусового восприятия. 
                            </p>
                    </div>
                    <div class="vine-right-txt">
                        <p> Наша история началась с любви к мясу <br>
                            и страсти к кулинарии, и сегодня мы <br>
                            гордимся тем, что предлагаем вам самые <br>
                            изысканные блюда из отборных кусков мяса. 
                            </p>
                    </div>
                    <div class="vine-link">
                        <div class="link" onclick="ShowModal('modal');">Забронировать стол</div>
                    </div>
                </div>
            </div>
            <div class="team margin">
                <div class="team-img"><img src="img/team.png" alt=""></div>
                <div class="team-flex margin">
                    <div>
                        <div class="team-flex-elems">
                            <div class="team-flex-elems-img angelina"></div>
                            <div class="team-flex-elems-txt">
                                <div class="team-background">АНГЕЛИНА ВЕРЁВКИНА</div>
                                <div class="team-txt">АДМИНИСТРАТОР / СТАЖ БОЛЕЕ 8 ЛЕТ И СТРАТЕГИЧНА</div>
                            </div>
                        </div>
                        <div class="team-flex-elems">
                            <div class="team-flex-elems-img victoria"></div>
                            <div class="team-flex-elems-txt">
                                <div class="team-zag">ВИКТОРИЯ КЛОЧКОВА</div>
                                <div class="team-txt">ПАРТНЁР / ВСПОМОГАТЕЛЬ </div>
                            </div>
                        </div>
                        <div class="team-flex-elems">
                            <div class="team-flex-elems-img pavel"></div>
                            <div class="team-flex-elems-txt">
                                <div class="team-zag">ПАВЕЛ КРАВЧУК</div>
                                <div class="team-txt">ПАРТНЁР / КОНСУЛЬТАНТ / ЗАКАЗЧИК</div>
                            </div>
                        </div>
                        <div class="team-flex-elems">
                            <div class="team-flex-elems-img yana"></div>
                            <div class="team-flex-elems-txt">
                                <div class="team-zag">ЯНА КИРИЛЛОВА</div>
                                <div class="team-txt">ПАРТНЁР / ИНТЕРЬЕР </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-flex margin">
                    <div>
                        <div class="team-flex-elems">
                            <div class="team-flex-elems-img igor"></div>
                            <div class="team-flex-elems-txt">
                                <div class="team-background">ИГОРЬ ЛАГУНОВ</div>
                                <div class="team-txt">ПОВАР СО СТАЖЕМ 15 ЛЕТ, ГЛАВНЫЙ В КОМАНДЕ</div>
                            </div>
                        </div>
                        <div class="team-flex-elems">
                            <div class="team-flex-elems-img andrey"></div>
                            <div class="team-flex-elems-txt">
                                <div class="team-zag">АНДРЕЙ ЛАДИК</div>
                                <div class="team-txt">ПОВАР СО СТАЖЕМ 8 ЛЕТ, ВСЕГДА СТРЕМИТСЯ К СОВЕРШЕНСТВУ В КАЖДОМ БЛЮДЕ</div>
                            </div>
                        </div>
                        <div class="team-flex-elems">
                            <div class="team-flex-elems-img kirill"></div>
                            <div class="team-flex-elems-txt">
                                <div class="team-zag">КИРИЛЛ КРЕМЛЬ</div>
                                <div class="team-txt">ПОВАР СО СТАЖЕМ 10 ЛЕТ, ХОРОШО обладает уникальным вкусовым чутьем</div>
                            </div>
                        </div>
                        <div class="team-flex-elems">
                            <div class="team-flex-elems-img alina"></div>
                            <div class="team-flex-elems-txt">
                                <div class="team-zag">АЛИНА МИРОНОВА</div>
                                <div class="team-txt">ПОВАР СО СТАЖЕМ 7 ЛЕТ, ЗНАЕТ ТОНКОСТИ БЛЮД КОТОРЫЕ ДЕЛАЮТ ЕЁ НАСТОЯЩИМ МАСТЕРОМ.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="polz margin">
                <div class="polz-flex">
                    <div class="polz-parent">
                        <img src="img/big-hend.png" alt="">
                    </div>
                    <div class="polz-txt margin top">
                        <h1>Белковое достоинство</h1>
                        <p>Содержащийся в говядине белок относится к  белкам  <br>
                            высокого качества, он полноценен  с пищевой точки <br>
                            зрения, содержит широкий набор аминокислот.</p>
                    </div>
                </div>
                <div class="polz-flex">
                    <div class="polz-parent">
                        <img src="img/pokoy.png" alt="">
                    </div>
                    <div class="polz-txt ">
                        <h1>Мрамор и насыщенные жиры</h1>
                        <p>Витамины и микроэлементы, это второе, чем  обогатит вас  стейк. <br>
                            Говядина содержит в 8 раз больше витамина B12,  в 6 раз больше <br>
                            цинка и в 2,5 раза больше железа, чем  очищенная от  кожи куриная 
                            грудка.</p>
                    </div>
                </div>
                <div class="polz-flex">
                    <div class="polz-parent">
                        <img src="img/meat.png" alt="">
                    </div>
                    <div class="polz-txt ">
                        <h1>Витамины и микроэлементы</h1>
                        <p>Больше всего насыщенных жиров содержится в марморной говядине <br>
                            зернового откорма "Мраморный" вид говядине и придают тонкие  жировые<br> 
                            прислойки, во время готовки они начинают таять, делая мясо очень "сочным".</p>
                    </div>
                </div>
            </div>
            <div id="menu" class="margin">
                <h1>Стейк - меню</h1>
                <div class="flex-menu">
                    <div class="flex-obertka">
                        <div class="steak-menu">
                            <img src="img/steak-menu.png" alt="">
                        </div>
                        <div class="steak-menu-txt">
                            <div class="steak-margin"><h1>Cтейк “Texas”</h1></div>
                            <div class="steak-margin"><h2>Цена: <span>3490</span> Тг.</h2></div>
                            <div class="steak-margin"><h5>Выход: 200/150/100</h5></div>
                        </div>
                    </div>
                    <div class="flex-obertka">
                        <div class="steak-menu">
                            <img src="img/steak-menu2.png" alt="">
                        </div>
                        <div class="steak-menu-txt">
                            <div class="steak-margin"><h1>Cтейк “Mexico”</h1></div>
                            <div class="steak-margin"><h2>Цена: <span>4990 </span> Тг.</h2></div>
                            <div class="steak-margin"><h5>Выход: 300/200/100</h5></div>
                        </div>
                    </div>
                    <div class="flex-obertka">
                        <div class="steak-menu">
                            <img src="img/steak-menu3.png" alt="">
                        </div>
                        <div class="steak-menu-txt">
                            <div class="steak-margin"><h1>Cтейк “Tokyo”</h1></div>
                            <div class="steak-margin"><h2>Цена: <span>4190 </span>Тг.</h2></div>
                            <div class="steak-margin"><h5>Выход: 250/200/100</h5></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="footer" class="margin">
                <div class="footer-auto">
                    <h1>ЖДЁМ ВАС В <br> ГОСТИ!</h1>
                </div>
                <div class="grafik margin">Мы открыты ПН-ВС С 9:00 до 0:00 Заказы на доставку принимаем каждый  день с 10:00 до 23:00</div>
            </div>
            <div class="footer-flex margin">
                <div class="footer-flex-elems">
                    <div class="footer-child">
                        <img src="img/location.png" alt="">
                        <div class="footer-float">
                            <h3>Г.АЛМАТЫ,</h3>
                            <h3 class="gold">УЛИЦА АБАЯ ПРАВДЫ 98</h3>
                        </div>
                    </div>  
                </div>
                <div class="footer-flex-elems">
                    <div class="footer-child">
                        <div class="footer-float">
                            <h3>+7 (777) 264-78-90</h3>
                            <h3 class="gold">БРОНИРОВАНИЕ СТОЛОВ</h3>
                        </div>
                    </div>
                </div>
                <div class="footer-flex-elems">
                    <div class="footer-child">
                        <div class="footer-float">
                            <h3>+7 (747) 265-58-10</h3>
                            <h3 class="gold">АРЕНДА ЗАЛА</h3>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="comunication">
                <div class="comunication-child">ОБЩЕНИЕ</div>
                <div class="icon-flex">
                    <a href="https://www.instagram.com"><div class="comunication-icon"><img src="img/instagram.png" alt=""></div></a>
                    <a href="https://ru-ru.facebook.com"><div class="comunication-icon"><img src="img/facebook.png" alt=""></div></a>
                    <a href="https://www.youtube.com"><div class="comunication-icon"><img src="img/youtube.png" alt=""></div></a>
                </div>
            </div>
        </div>
        <div id="modal1" class="modal-parent">
            <div id="modal1" class="modal-menu"><img src="img/menu-1.png" alt="">
                <p onclick="HideModal('modal1');">×</p>
            </div>
        </div>
        <a href="#header"><div class="yakor"><img src="img/arrow-1.png" alt=""></div></a>
        <script src="js/diplomka.js"></script>
    </body>
</html>
 