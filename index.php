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
    <nav>
        <button onclick='four()'><p>IV</p></button>
        <button onclick='three()'><p>III</p></button>
        <button onclick='two()'><p>II</p></button>
        <button onclick='one()'><p class='active'>I</p></button>
    </nav>
    <section class='content'>
        <div class="content__main">
            <div class="main__sliderWrapper--slide">
                <div class="slide--content">

                </div>
            </div>
            <div class="main__sliderWrapper--slide">
                <div class="slide--content">
                    
                </div>
            </div>
            <div class="main__sliderWrapper--slide">
                <div class="slide--content">
                    
                </div>
            </div>
            <div class="main__sliderWrapper--slide">
                <div class="slide--content">
                    
                </div>
            </div>
        </div>
    </section>
    <div class="content__bg">
        <div class="content__bg--counter">
            <div class="content__bg--counterSlide">
                I
                <div class="content__bg--shadow"></div>
            </div>
            <div class="content__bg--counterSlide">
                <div class="content__bg--shadow"></div>
                II
            </div>
            <div class="content__bg--counterSlide">
                <div class="content__bg--shadow"></div> 
                III
            </div>
            <div class="content__bg--counterSlide">
                <div class="content__bg--shadow"></div>
                IV
            </div>
        </div>
    </div>
    <div class="magic__word">
        <img src="./src/gif/magicword.gif" alt="">
        <button onclick='magicWord()'>Mot magique</button>
        <audio src="./src/mp3/magicword.mp3" loop id='park'></audio>
    </div>

    <script src="app.js"></script>
</body>
</html>