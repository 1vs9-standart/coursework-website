<?php
$title = 'НОВИНИ СПОРТУ';
require 'header.php';
?>
<div class="wrapper">
    <main class="recnews">
        <article class="news">
            <a href="#" class="hover"><img src="img/first.jpg" /></a>
            <div class="news-desc">
                <span>
                    <a href="#" class="category">UFC</a>
                    <time>17 Листопада, 2022</time>
                </span>
                <a href="#"><h4>Адесанья – більше не чемпіон UFC. Перейра знову побив Ісраеля</h4></a>
            </div>
        </article>
        <article class="news">
            <a href="#" class="hover"><img src="img/fourth.jpg" /></a>
            <div class="news-desc">
                <span>
                    <a href="#" class="category">Теніс</a>
                    <time>12 Листопад 16:37, 2022</time>
                </span>
                <a href="#"><h4>Казахстанські тенісистки перемогли Велику Британію на Кубку Біл..</h4></a>
            </div>
        </article>
        <article class="news">
            <a href="#" class="hover"><img src="img/messi.jpg" /></a>
            <div class="news-desc">
                <span>
                    <a href="#" class="category">Футбол</a>
                    <time>3 Жовтня, 2022</time>
                </span>
                <a href="#"><h4>Мессі: Гвардіола завдав багато шкоди футболу</h4>
            </div>
        </article>
        <article class="news">
            <a href="#" class="hover"><img src="img/third.jpg" /></a>
            <div class="news-desc">
                <span>
                    <a href="#" class="category">Бокс</a>
                    <time>1 Жовтня, 2022</time>
                </span>
                <a href="#"><h4>Всесвітня боксерська рада виключить росіян та білорусів із...</h4></a>
            </div>
        </article>
    </main>
    <main class="popular">
        <div class="line">
            <h2>Популярні</h2>
            <hr />
        </div>
        <div style="display:flex; flex-direction:row;">
            <article class="news-row">
                <a href="#" class="hover"><img src="img/5.jpeg" class="big"  /></a>
                <div class="news-desc">
                    <span>
                        <a href="#" class="category">Бокс</a>
                        <time>13 Листопад, 2022</time>
                    </span>
                    <a href="#"><h4>Олександр Усік отримав обов'язкового претендента на титул IBF</h4></a>
                </div>
            </article>
            <article class="news-row">
                <a href="#" class="hover"><img src="img/6.jpeg" class="big"  /></a>
                <div class="news-desc">
                    <span>
                        <a href="#" class="category">Теніс</a>
                        <time>13 Листопада, 2022</time>
                    </span>
                    <a href="#"><h4>Україна все ж таки віддала один матч Японії на Кубку Біллі Джин Кінг</h4></a>
                </div>
            </article>
            <article class="news-row">
                <a href="https://www.ua-football.com/ua/sport/hockey/1668105362-memorial-homi-sharkozi-zbirna-ukrayini-v-overtaymi-obigrala-italiyu.html" class="hover"><img src="img/7.jpeg" class="big" /></a>
                <div class="news-desc">
                    <span>
                        <a href="https://www.ua-football.com/ua/sport/hockey/1668105362-memorial-homi-sharkozi-zbirna-ukrayini-v-overtaymi-obigrala-italiyu.html" class="category">Хокей</a>
                        <time>13 Листопада, 2022</time>
                    </span>
                    <a href="https://www.ua-football.com/ua/sport/hockey/1668105362-memorial-homi-sharkozi-zbirna-ukrayini-v-overtaymi-obigrala-italiyu.html"><h4>Меморіал Хоми Шаркозі. Збірна України в овертаймі обіграла Італію</h4></a>
                </div>
            </article>
        </div>
    </main>
    <main class="popular">
        <div class="line">
            <h2>Ексклюзивні відео</h2>
            <hr />
        </div>
        <video controls autoplay muted>
            <source src="img/vid.mp4" type="video/mp4" />
        </video>
    </main>
</div>
<?php 
require 'footer.php';
?>