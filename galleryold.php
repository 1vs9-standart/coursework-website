<?php $title = 'Галерея'; require 'header.php'; ?>
<div class="wrapper">
    <main class="head">
        <h1>Галерея</h1>
        <div>
            <a href=".">Головна</a> <img style="width:30px;" src="img/arrow.svg" /> <a href="gallery">Галарея</a>
        </div>
    </main>
    <main class="popular">
        <div class="line">
            <h2>Наша гордість</h2>
            <hr />
        </div>
        <div style="display:flex; flex-direction:row;justify-content: center;">
            <div class="gallery">
                <button id="l" class="arrow" style="left:0px;rotate:180deg;"><img src="img/right.svg"  /></button>
                <button id="r" class="arrow" style="right:0px;"><img src="img/right.svg" /></button>
                <p id="count">1 / 9</p>
                <div id="s9" class="slide" >
                    <img src="img/5.jpeg" />
                </div>
                <div id="s8" class="slide" >
                    <img src="img/6.jpeg" />
                </div>
                <div id="s7" class="slide" >
                    <img src="img/7.jpeg" />
                </div>
                <div id="s6" class="slide" >
                    <img src="img/8.jpeg" />
                </div>
                <div id="s5" class="slide" >
                    <img src="img/9.jpeg" />
                </div>
                <div id="s4" class="slide" >
                    <img src="img/10.jpeg" />
                </div>
                <div id="s3" class="slide" >
                    <img src="img/11.jpeg" />
                </div>
                <div id="s2" class="slide" >
                    <img src="img/12.jpeg" />
                </div>
                <div id="s1" class="slide" >
                    <img src="img/13.jpeg" />
                </div>
            </div>
        </div>
    </main>
</div>
<script>
    window.onload = () => {
        var max = 9; // максимальное количество 
        var counter = 1; 
        var left = document.getElementById('l')
        var right = document.getElementById('r')

        left.onclick = () => { // движение влево
            var img = document.getElementById('s' + (counter - 1))
            img.style.left = '0px';
            counter--;
            document.getElementById('count').innerHTML = counter + ' / ' + max
        }
        right.onclick = () => { // движение вправо 
            var img = document.getElementById('s' + counter)
            if (img.id !== "s" + max) {
                img.style.left = '-1000px';
                counter++;
                document.getElementById('count').innerHTML = counter + ' / ' + max
            }
        }
    }
</script>
<?php require 'footer.php'; ?>