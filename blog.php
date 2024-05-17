<?php
include 'config.php';

?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">




        <link rel="stylesheet" href="./packages/css/styles.css">

        <title>Tugas Web</title>
    </head>
    <body>

        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">Aiken Ancel Suoth</a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list grid">
                        <li class="nav__item">
                            <a href="index.html#home" class="nav__link">
                                <i class="uil uil-estate nav__icon"></i>Home
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="blog.php" class="nav__link">
                                <i class="uil uil-scenery nav__icon"></i>Blog                               
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="index.html#galery" class="nav__link">
                                <i class="uil uil-scenery nav__icon"></i>Gallery
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="index.html#contact" class="nav__link">
                                <i class="uil uil-message nav__icon"></i>Contact                               
                            </a>
                        </li>
                    </ul>
                    <i class="uil uil-times nav__close" id="nav-close"></i>
                </div>
                <div class="nav__btns">
                    <!-- Theme change button -->

                    <i class="uil uil-moon change-theme" id="theme-button"></i>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class="uil uil-apps"></i>
                    </div>
                </div>
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
          

          
       
        </div>
        </section>
        <section class="portfolio section" id="blog">

            <h2 class="section__title">Artikel</h2>


            <div class="portfolio__container container swiper-container">
                <div class="swiper-wrapper">
    
        
            <div class="portfolio__content grid " id="blogContainer">
                 <?php
    $query = "SELECT * FROM blog";
    $result = mysqli_query($conn, $query);

    $no = 1;

    // Periksa apakah query berhasil dijalankan
    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($no >=0) {
            ?>
                <img src="./packages/images/<?= $row["image"] ?>" alt="" class="portfolio__img">
                <div class="portfolio_">
                    <h3 class="portfolio__title"><?= $row["judul"] ?></h3>
                    <p class="portfolio__description"><?= $row["deskripsi"] ?></p>
                    <a href="#" class="button button--flex button--small portfolio__button">
                        Selengkapnya
                        <i class="uil uil-arrow-right button__icon"></i>
                    </a>
                </div>
            <?php } 
            $no++;
        }
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    } ?>
</div>

                
            </div>
            
           
                </div>


        
        </div>

        </section>


     

     

    <!--==================== FOOTER ====================-->
    <footer class="footer">

        <div class="footer__bg">
            <div class="footer__container container grid">
                <div>
                    <h1 class="footer__title">Aiken Ancel Suoth</h1>
                </div>

                <ul class="footer__links">
                </ul>

                <div class="footer__socials">
                    <a href=https://www.facebook.com/prashanna.drashan" target="_blank" class="footer__social">
                        <i class="uil uil-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/prashanna01/" target="_blank" class="footer__social">
                        <i class="uil uil-instagram"></i>
                    </a>
                    <a href="https://twitter.com/prashanna01" target="_blank" class="footer__social">
                        <i class="uil uil-twitter-alt"></i>
                    </a>
                </div>
            </div>
            <p class="footer__copy" style="color: black;">&#169; Tugas Pemograman Web</p>
        </div>
    </footer>
    <script src="script.js"></script>
    <script>
        var text = "Hi, I'am Aiken";
        var speed = 100; // milliseconds per character

        function typeWriter() {
            if (text.length > 0) {
                document.getElementById("typewriter").innerHTML += text.charAt(0);
                text = text.substring(1);
                setTimeout(typeWriter, speed);
            }
        }

        typeWriter();
    </script>

</body>

</html>