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
            <hr/>
        </div>
        <div style="display:flex; flex-direction:row;justify-content: center;">
            <div class="gallery">
                <button id="l" class="arrow" style="left:0px;rotate:180deg;"><img src = "img/right.svg" onClick = "javascript: left_arrow()"/></button>
                <button id="r" class="arrow" style="right:0px;"><img src = "img/right.svg"  onClick = "javascript: right_arrow()"/></button>
                <div class="slide" >
                    <a href="img/5.jpeg" id = "a" target="_blank"><img src="img/5.jpeg" width = "680" height = "410"  id ="img" alt="Зображення немає"></a>
                </div>
            </div>
        </div>
    </main>
</div>
<script>
    var mas = ["img/5.jpeg","img/6.jpeg","img/7.jpeg","img/8.jpeg","img/9.jpeg","img/10.jpeg","img/11.jpeg","img/12.jpeg","img/13.jpeg"] // масив картинок
    var to = -1;  // Лічильник, що вказує на поточну картинку

    function right_arrow() // Відкриття наступної картинки (рух праворуч)
    { 
     var obj = document.getElementById("img");
     var obj2 = document.getElementById("a");
      if (to < mas.length-1)  to++ 
       else
         to = 0;
         obj.src = mas[to];  
         obj2.href = mas[to];
    }

    function left_arrow() // Відкриття попередньої картинки (рух вліво)
    {     
     var obj = document.getElementById("img");
     var obj2 = document.getElementById("a");
    if (to > 0) to--;
      else
        to = mas.length-1;
        obj.src = mas[to]; 
        obj2.href = mas[to];              
    }
</script>
<?php require 'footer.php'; ?>