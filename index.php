<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kaif
 */

//get_header();
wp_head();
?>
    <section id="main-section">
        <img class="fon" src="<?php echo get_template_directory_uri(); ?>/assets/images//main.jpg);" alt="" />
        <div class="main-menu">
            <ul class="menu-text">FRIENDLY SPECIALITY PLACE</ul>
            <ul class="main-name">
                <li style="font-size: 106px; ">KAIF</li>
                <li style="font-size: 46px;">UPGRADE</li>
            </ul>
            <ul>У НАС ПОТУЖНА ВЕНТИЛЯЦІЙНА СИСТЕМА
                <br>І ОДЯГ ЗОВСІМ НЕ ПАХНЕ</ul>
            <div class="">
                <a href=tel:88005553535 class="button" id="main-button">Замовити столик</a>
            </div>
            <ul class="main-social" style="font-size: x-large;">
                <li><a href="https://www.instagram.com/kaif_upgrade/"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-telegram"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            </ul>
        </div>
    </section>
    <!-- Gallery Section
       ================================================== -->
    <section id="gallery">

        <div class="gallery">
            <ul>ПАРУ СВІТЛИН</ul>
            <div class="row">
                <div class="gallery-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/1.png);" alt="" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/2.png);" alt="" />
                </div>
                <div class="gallery-image-second">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/3.png);" alt="" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/4.png);" alt="" />
                </div>
            </div>
            <div class="gallery-image-third">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/5.png);" alt="" />
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
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu.jpg);" alt="" /></a>
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
<!--
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/menu2.png);" alt="" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/menu3.png);" alt="" />
-->
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
                <ul id="go">GO ДО НАС</ul>
                <ul>Забронюй собі
                    <br>місце, ми про тебе подбаємо!</ul>
            </div>
            <div class="arrow-1">
                <div></div>
            </div>
            <div class="">
                <a href="#" class="button" id="order-button">ЗАБРОНЮВАТИ</a>
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
//get_sidebar();
get_footer();
