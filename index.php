<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAMM Alexandre - CV</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class='mainNav'>
        <button class='mainNav__btn' onclick='four()'><p class='mainNav__btn__name'>contact</p></button>
        <button class='mainNav__btn' onclick='three()'><p class='mainNav__btn__name'>curriculum vitæ</p></button>
        <button class='mainNav__btn' onclick='two()'><p class='mainNav__btn__name'>portfolio</p></button>
        <button class='mainNav__btn' onclick='one()'><p class='mainNav__btn__name active'>about</p></button>
    </nav>
    <section class='mainBlock'>
        <div class="mainBlock__wrapper">
            <div class="mainBlock__wrapper__slide">
                <div class="mainBlock__wrapper__slide__content">

                </div>
            </div>
            <div class="mainBlock__wrapper__slide">
                <div class="mainBlock__wrapper__slide__content">
                    
                </div>
            </div>
            <div class="mainBlock__wrapper__slide">
                <div class="mainBlock__wrapper__slide__content">
                    
                </div>
            </div>
            <div class="mainBlock__wrapper__slide">
                <div class="mainBlock__wrapper__slide__content">
                
                </div>
            </div>
        </div>
    </section>
    <div class="bgBlock">
        <div class="bgBlock__counter">
            <div class="bgBlock__counter__slide">
                I
            </div>
            <div class="bgBlock__counter__slide">
                II
            </div>
            <div class="bgBlock__counter__slide"> 
                III
            </div>
            <div class="bgBlock__counter__slide">
                IV
            </div>
        </div>
    </div>
    <div class="alertModal">
        <p class="alertModal__text">
            Clic droit désactivé par défaut. <br> Pour ouvrir la console, utilisez les raccourcis <br>clavier (ex: f12) !
        </p>
        <button class='alertModal__btn' onclick="hideAlert()">Ok</button>
    </div>
    <div class="parkModal">
        <img src="./src/gif/magicword.gif" alt="">
        <button class='parkModal__btn' onclick='magicWord()'>Mot magique</button>
        <audio id='park' src="./src/mp3/magicword.mp3" loop></audio>
    </div>

    <script src="app.js"></script>
</body>
</html>