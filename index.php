<?php
    // include 'actions/session.php';
    include 'actions/guestbook/sendComment.php';
    include 'actions/guestbook/showComments.php';
    include 'actions/mail/sendEmail.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAMM Alexandre - CV</title>
    <link rel="stylesheet" href="./assets/style.css">
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/src/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/src/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/src/favicon/favicon-16x16.png">
    <link rel="manifest" href="./assets/src/favicon/site.webmanifest">
</head>
<body>
    <nav class='mainNav'>
        <button class='mainNav__btn' onclick='four()'><p class='mainNav__btn__name'>contact</p></button>
        <button class='mainNav__btn' onclick='three()'><p class='mainNav__btn__name'>curriculum vitæ</p></button>
        <button class='mainNav__btn' onclick='two()'><p class='mainNav__btn__name'>portfolio</p></button>
        <button class='mainNav__btn active' onclick='one()'><p class='mainNav__btn__name'>about</p></button>
    </nav>
    <section class='mainBlock'>
        <div class="mainBlock__wrapper">
            <div class="mainBlock__wrapper__slide">
                <div class="mainBlock__wrapper__slide__content">

                    <img class='mainBlock__wrapper__slide__content__img' src="./assets/src/img/desk.jpg" alt="">

                    <h1 class='mainBlock__wrapper__slide__content__title'>about me</h1>
                    <div class="mainBlock__wrapper__slide__content__reveal">
                        <svg class='mainBlock__wrapper__slide__content__reveal__hoverme' xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12.015 7c4.751 0 8.063 3.012 9.504 4.636-1.401 1.837-4.713 5.364-9.504 5.364-4.42 0-7.93-3.536-9.478-5.407 1.493-1.647 4.817-4.593 9.478-4.593zm0-2c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 3c-2.21 0-4 1.791-4 4s1.79 4 4 4c2.209 0 4-1.791 4-4s-1.791-4-4-4zm-.004 3.999c-.564.564-1.479.564-2.044 0s-.565-1.48 0-2.044c.564-.564 1.479-.564 2.044 0s.565 1.479 0 2.044z"/></svg>
                    </div>
                </div>
            </div>
            <div class="mainBlock__wrapper__slide">
                <div class="mainBlock__wrapper__slide__content">

                    <img class='mainBlock__wrapper__slide__content__img' src="./assets/src/img/laptop.jpg" alt="">

                    <h1 class='mainBlock__wrapper__slide__content__title'>portfolio</h1>
                    <div class="mainBlock__wrapper__slide__content__reveal">
                        <svg class='mainBlock__wrapper__slide__content__reveal__hoverme' xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12.015 7c4.751 0 8.063 3.012 9.504 4.636-1.401 1.837-4.713 5.364-9.504 5.364-4.42 0-7.93-3.536-9.478-5.407 1.493-1.647 4.817-4.593 9.478-4.593zm0-2c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 3c-2.21 0-4 1.791-4 4s1.79 4 4 4c2.209 0 4-1.791 4-4s-1.791-4-4-4zm-.004 3.999c-.564.564-1.479.564-2.044 0s-.565-1.48 0-2.044c.564-.564 1.479-.564 2.044 0s.565 1.479 0 2.044z"/></svg>
                    </div>
                </div>
            </div>
            <div class="mainBlock__wrapper__slide">
                <div class="mainBlock__wrapper__slide__content">

                    <img class='mainBlock__wrapper__slide__content__img' src="./assets/src/img/screen.webp" alt="">

                    <h1 class='mainBlock__wrapper__slide__content__title'>curriculum vitæ</h1>
                    <div class="mainBlock__wrapper__slide__content__reveal">
                        <svg class='mainBlock__wrapper__slide__content__reveal__hoverme' xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12.015 7c4.751 0 8.063 3.012 9.504 4.636-1.401 1.837-4.713 5.364-9.504 5.364-4.42 0-7.93-3.536-9.478-5.407 1.493-1.647 4.817-4.593 9.478-4.593zm0-2c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 3c-2.21 0-4 1.791-4 4s1.79 4 4 4c2.209 0 4-1.791 4-4s-1.791-4-4-4zm-.004 3.999c-.564.564-1.479.564-2.044 0s-.565-1.48 0-2.044c.564-.564 1.479-.564 2.044 0s.565 1.479 0 2.044z"/></svg>
                    </div>
                </div>
            </div>
            <div class="mainBlock__wrapper__slide">
                <div class="mainBlock__wrapper__slide__content">
                    <img class='mainBlock__wrapper__slide__content__img' src="./assets/src/img/dark2.jpg" alt="">

                    <form class='mainBlock__wrapper__slide__content__form' method='POST'>
                        <div class="mainBlock__wrapper__slide__content__form__name">
                            <input name='first_name' type="text" placeholder='First Name' class="mainBlock__wrapper__slide__content__form__name__first form__input">
                            <input name='last_name' type="text" placeholder='Last Name' class="mainBlock__wrapper__slide__content__form__name__last form__input">
                        </div>
                        <input name='mail' placeholder='Email Address' type="text" class="mainBlock__wrapper__slide__content__form__mail form__input">
                        <textarea name='content' placeholder='Your Mail Content' class='mainBlock__wrapper__slide__content__form__mailContent form__input text__input'></textarea>
                        <button class='form__input btn' type='submit' name='sendMail'>Send</button>

                        <?php if(isset($msg)){
                            echo $msg;
                            }
                        ?>
                    </form>

                    <form class='mainBlock__wrapper__slide__content__guestbook' method='POST'>
                        <input name='name' placeholder='Name' type="text" class="mainBlock__wrapper__slide__content__guestbook__name form__input">
                        <textarea name="comment" placeholder='Your Comment' class='mainBlock__wrapper__slide__content__guestbook__comment form__input text__input'></textarea>
                        <button class='form__input btn' type='submit' name='sendCom'>Send</button>
                        <hr>
                        <div class="mainBlock__wrapper__slide__content__guestbook__commentSection">
                            <?php 
                                while($gb = $showGb->fetch()){
                                    ?>
                                        <div class='mainBlock__wrapper__slide__content__guestbook__commentSection__commentWrapper'>
                                            <p class='mainBlock__wrapper__slide__content__guestbook__commentSection__commentWrapper__comment'>
                                                <?= $gb['comment'];?>
                                            </p>
                                            <h2 class='mainBlock__wrapper__slide__content__guestbook__commentSection__commentWrapper__name'><?= $gb['name'];?></h2>
                                        </div>
                                    <?php
                                }
                            ?>
                        </div>
                    </form>
                    

                    <h1 class='mainBlock__wrapper__slide__content__title'>contact me</h1>
                    <!-- <div class="mainBlock__wrapper__slide__content__reveal">
                        <svg class='mainBlock__wrapper__slide__content__reveal__hoverme' xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12.015 7c4.751 0 8.063 3.012 9.504 4.636-1.401 1.837-4.713 5.364-9.504 5.364-4.42 0-7.93-3.536-9.478-5.407 1.493-1.647 4.817-4.593 9.478-4.593zm0-2c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 3c-2.21 0-4 1.791-4 4s1.79 4 4 4c2.209 0 4-1.791 4-4s-1.791-4-4-4zm-.004 3.999c-.564.564-1.479.564-2.044 0s-.565-1.48 0-2.044c.564-.564 1.479-.564 2.044 0s.565 1.479 0 2.044z"/></svg>
                    </div> -->
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
        <img src="./assets/src/gif/magicword.gif" alt="">
        <button class='parkModal__btn' onclick='magicWord()'>Mot magique</button>
        <audio id='park' src="./assets/src/mp3/magicword.mp3" loop></audio>
    </div>

    <script src="./assets/app.js"></script>
</body>
</html>