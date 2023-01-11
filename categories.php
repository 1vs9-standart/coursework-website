<?php
$title = 'Категорії новин';
require 'header.php';
?>
<div class="wrapper">
    <main class="head">
        <h1>Категорії новин</h1>
        <div>
            <a href=".">Головна</a> <img style="width:30px;" src="img/arrow.svg" /> <a href="categories">Категорії</a>
        </div>
    </main>
    <main class="popular">
        <div class="line">
            <h2>Футбол</h2>
            <hr />
        </div>
        <div style="display:flex; flex-direction:row;">
            <article class="news-row">
                <a href="#" class="hover"><img src="img/8.jpeg" class="big"  /></a>
                <div class="news-desc">
                    <span>
                        <a href="#" class="category">Футбол</a>
                        <time>15 Листопада, 2022</time>
                    </span>
                    <a href="#"><h4>Бартулович - про майбутній матч з Динамо: Нема чого боятися</h4></a>
                </div>
            </article>
            <article class="news-row">
                <a href="#" class="hover"><img src="img/9.jpeg" class="big"  /></a>
                <div class="news-desc">
                    <span>
                        <a href="#" class="category">Футбол</a>
                        <time>4 Листопада, 2022</time>
                    </span>
                    <a href="#"><h4>Лідер київського Динамо та гравець збірної України. Сьогодні святкує ювілей Віктор Циганков</h4></a>
                </div>
            </article>
            <article class="news-row">
                <a href="https://www.ua-football.com/ua/ukrainian/ukrainians/1668512137-ukrayinskiy-futbolist-prizupiniv-karyeru-zaradi-sluzhbi-v-zsu.html" class="hover"><img src="img/10.jpeg" class="big" /></a>
                <div class="news-desc">
                    <span>
                        <a href="https://www.ua-football.com/ua/ukrainian/ukrainians/1668512137-ukrayinskiy-futbolist-prizupiniv-karyeru-zaradi-sluzhbi-v-zsu.html" class="category">Футбол</a>
                        <time>20 Жовтня, 2022</time>
                    </span>
                    <a href="https://www.ua-football.com/ua/ukrainian/ukrainians/1668512137-ukrayinskiy-futbolist-prizupiniv-karyeru-zaradi-sluzhbi-v-zsu.html"><h4>Український футболіст призупинив кар'єру заради служби в ЗСУ</h4></a>
                </div>
            </article>
        </div>
    </main>
    <main class="popular">
        <div class="line">
            <h2>Хокей</h2>
            <hr />
        </div>
        <div style="display:flex; flex-direction:row;">
            <article class="news-row">
                <a href="#" class="hover"><img src="img/11.jpeg" class="big"  /></a>
                <div class="news-desc">
                    <span>
                        <a href="#" class="category">Хокей</a>
                        <time>1 Листопада, 2022</time>
                    </span>
                    <a href="#"><h4>Меморіал Хоми Шаркозі. Збірна України в овертаймі обіграла Італію</h4></a>
                </div>
            </article>
            <article class="news-row">
                <a href="#" class="hover"><img src="img/12.jpeg" class="big"  /></a>
                <div class="news-desc">
                    <span>
                        <a href="#" class="category">Хокей</a>
                        <time>16 Жовтня, 2022</time>
                    </span>
                    <a href="#"><h4>Харківські Берсерки зазнали другої поразки в сезоні</h4></a>
                </div>
            </article>
            <article class="news-row">
                <a href="#" class="hover"><img src="img/13.jpeg" class="big" /></a>
                <div class="news-desc">
                    <span>
                        <a href="#" class="category">Хокей</a>
                        <time>10 Жовтня, 2022</time>
                    </span>
                    <a href="#"><h4>Сокіл обіграв Київ з різницею в 5 шайб</h4></a>
                </div>
            </article>
        </div>
    </main>
    <main class="popular">
        <div class="line">
            <h2>Бокс</h2>
            <hr />
        </div>
        <div style="display:flex; flex-direction:row;">
            <article class="news-row">
                <a href="#" class="hover"><img src="img/14.jpeg" class="big"  /></a>
                <div class="news-desc">
                    <span>
                        <a href="#" class="category">Бокс</a>
                        <time>Ноябрь 13, 2022</time>
                    </span>
                    <a href="#"><h4>Названо суму гонорару Флойда Мейвезера за бій з блогером</h4></a>
                </div>
            </article>
            <article class="news-row">
                <a href="#" class="hover"><img src="img/15.jpeg" class="big"  /></a>
                <div class="news-desc">
                    <span>
                        <a href="#" class="category">Бокс</a>
                        <time>Ноябрь 13, 2022</time>
                    </span>
                    <a href="#"><h4>Пояс Усика за версією IBF уже поділили</h4></a>
                </div>
            </article>
            <article class="news-row">
                <a href="#" class="hover"><img src="img/16.jpeg" class="big" /></a>
                <div class="news-desc">
                    <span>
                        <a href="#" class="category">Бокс</a>
                        <time>Ноябрь 13, 2022</time>
                    </span>
                    <a href="#"><h4>Рой Джонс назвав список найкращих боксерів на його думку</h4></a>
                </div>
            </article>
        </div>
    </main>
</div>
<?php require 'footer.php'; ?>