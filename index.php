<?php

wp_head();
?>
    <section id="main-section">
        <div class="contact-mobile">
            <ul><a href="#"><i class="fa fa-mobile"></i></a> +380 73 722 1244</ul>
            <ul><a href="#"><i class="fa fa-location-arrow"></i></a> вул.Оводова 32/8</ul>
        </div>

        <div class="main-menu" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/main.jpg);">

            <ul class="menu-text">FRIENDLY SPECIALITY PLACE</ul>
            <ul class="main-name">
                <li id="kaif">KAIF</li>
                <li id="upgrate">UPGRADE</li>
            </ul>
            <ul id="main-text">У НАС ПОТУЖНА ВЕНТИЛЯЦІЙНА СИСТЕМА
                <br>І ОДЯГ ЗОВСІМ НЕ ПАХНЕ</ul>
            <div class="">
                <a href=tel:88005553535 class="button" id="main-button">Замовити столик</a>
            </div>
            <ul class="main-social" style="font-size: x-large;">
                <li><a href="https://www.instagram.com/kaif_upgrade/"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://t.me/kaifupgrade"><i class="fa fa-telegram"></i></a></li>
                <li><a href="https://www.facebook.com/kaifhookah"><i class="fa fa-facebook"></i></a></li>
            </ul>

        </div>

        <div class="main-mobile">
            <div id="main-div-button">
                <a href=tel:88005553535 class="button" id="main-button-mobile">Замовити столик</a>
            </div>
            <div>
                <ul class="main-social-mobile">
                    <li><a href="https://www.instagram.com/kaif_upgrade/"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://t.me/kaifupgrade"><i class="fa fa-telegram"></i></a></li>
                    <li><a href="https://www.facebook.com/kaifhookah"><i class="fa fa-facebook"></i></a></li>
                </ul>
            </div>
        </div>

    </section>
    <!-- Gallery Section
       ================================================== -->
    <section id="gallery">

        <div class="gallery">
            <ul>ПАРУ СВІТЛИН</ul>
            <div class="gallery-row">
                <div class="gallery-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/gallery/1.png);"></div>
                <div class="gallery-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/gallery/2.png);"></div>
                <div class="gallery-row-image">
                    <div class="gallery-image-s" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/gallery/3.png);"></div>
                    <div class="gallery-image-s" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/gallery/4.png);"></div>
                </div>
            </div>
            <div class="gallery-row-second">
                <div class="gallery-image-t" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/gallery/5.png);"></div>

                <div>
                    <li><a href="https://www.instagram.com/kaif_upgrade/"><i class="fa fa-instagram"></i></a></li>
                    <li style="font-size: 18px;">
                        <a href=https://www.instagram.com/kaif_upgrade/>БІЛЬШЕ ФОТО У НАШОМУ ІНСТАГРАМІ</a>
                    </li>
                    <li style="font-size: 16px;">@kaif_upgrade</li>
                    <li style="font-size: 14px;">#кайфуйукайфі</li>
                </div>
            </div>
        </div>

    </section>
    <!-- Section End-->
    <!-- Menu-button Section
    ================================================== -->
    <section>
        <div class="menu-button">
            <a href="#" id="menu-button-pc"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu.jpg);" alt="" /></a>
            <div id="menu-button-mobile" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/menus.png);"></div>
        </div>
    </section>
    <!-- Info Section End-->

    <!-- Blog Section
        ================================================== -->
    <section>
        <div class="blog-menu">
            <ul>БЛОГ</ul>
            <li>Останні наші новини</li>
            <div class="blog-row">
                <div class="blog-image">
                    <div style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/blog/menu1.png);" class="blog-background">
                        <p class="">
                            <time class="date" datetime="2014-01-14T11:24">
                                <?php the_time('d, m, Y'); ?>
                            </time>
                        </p>
                        <h1 class="blog-title"><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h1>
                        <div class="blog_post">
                            <p>
                                <?php the_excerpt(); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="blog-image-second">
                   <div style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/blog/menu2.png);" class="blog-background">
                        <p class="">
                            <time class="date" datetime="2014-01-14T11:24">
                                <?php the_time('d, m, Y'); ?>
                            </time>
                        </p>
                        <h1 class="blog-title"><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h1>
                    </div>
                    <div style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/blog/menu3.png);" class="blog-background">
                        <p class="">
                            <time class="date" datetime="2014-01-14T11:24">
                                <?php the_time('d, m, Y'); ?>
                            </time>
                        </p>
                        <h1 class="blog-title"><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h1>
                    </div>
                </div>
            </div>
            <div class="">
                <a href="#" class="button" id="blog-button">ДИВИТИСЯ БЛОГ</a>
            </div>
        </div>
    </section>
    <!-- Info Section End-->

    <!-- Order Section
            ================================================== -->
    <section>
        <div class="order-menu">
            <div>
                <ul id="order-go">GO ДО НАС</ul>
                <ul id="order-text">Забронюй собі
                    <br>місце, ми про тебе подбаємо!</ul>
            </div>
            <div class="arrow-1">
                <div></div>
            </div>
            <div class="">
                <a href="https://t.me/kaifupgrade" class="button" id="order-button">ЗАБРОНЮВАТИ</a>
            </div>
        </div>
    </section>
    <!-- Info Section End-->

    <!-- Contact Section
               ================================================== -->
    <section>
        <div class="contact-menu">
            <div>
                <ul><a href="#"><i class="fa fa-location-arrow"></i></a></ul>
                <ul>м.Вінниця
                    <br>вул.Оводова 32/8</ul>
            </div>
            <div class="">
                <ul><a href="#"><i class="fa fa-clock-o"></i></a></ul>
                <ul>Пн-Нд
                    <br>13.00-01.00</ul>
            </div>
            <div class="">
                <ul><a href="#"><i class="fa fa-mobile"></i></a></ul>
                <ul>+380 73 722 1244</ul>
            </div>
        </div>
    </section>
    <!-- Info Section End-->
    <?php
get_footer();
