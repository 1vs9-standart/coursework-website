<?php
$title = 'Звязок з нами';
require 'header.php';
?>
<div class="wrapper">
    <main class="head">
        <h1>Зв'язок з нами</h1>
        <div>
            <a href=".">Головна</a> <img style="width:30px;" src="img/arrow.svg" /> <a href="contact">Звязок з нами</a>
        </div>
    </main>
    <main class="contact">
        <h2>Заповніть свої дані, і ми передзвонимо!</h2>
        <form action="" method="post">
            <div>
                <label>Ім'я</label>
                <input name="name" required type="text" />
            </div>
            <div>
                <label>Прізвище</label>
                <input name="secondName" required type="text" />
            </div>
            <div style="grid-column: 1 / 3;">
                <label>E-mail</label>
                <input name="Email" required type="email" />
            </div>
            <div style="grid-column: 1 / 3;align-items: center;">
                <label>Надіслати листа на ваш E-mail?</label>
                <input name="sendEmail" type="checkbox" />
            </div>
            <div style="grid-column: 1 / 3;">
                <input required class="sub" type="submit" value="Надіслати" />
            </div>
        </form>
    </main>
    <?php if ($_POST) {
        $_POST['sendEmail'] === 'on' ? $_POST['sendEmail'] = 'Так' : $_POST['sendEmail'] = 'Ні';
        echo '<script>';
        echo 'alert("\n Імя: '.$_POST['name'].' \n Прізвище: '.$_POST['secondName'].' \n E-mail: '.$_POST['Email'].' \n Відправляти листи: '.$_POST['sendEmail'] .'")';
        echo '</script>';
    } 
    ?>
</div>
<?php require 'footer.php'; ?>