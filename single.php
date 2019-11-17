  <!-- header kısmı --!>
<?php get_header(); ?>



<div style="clear:both"></div>
    <div class="anakisim baslik">

<!-- body kısmı --!>
    <div class="ortakisim">
        <div class="ortaickisim">
                <div class="kategoriler">
                         <label id="arama"><?php get_search_form(); ?></label>
                            <ul>

                                        <?PHP wp_list_cats('title_li='); ?>

                          </ul>






                </div>

            <!-- konular baslangici --!>
            <!-- konular baslangici --!>
            <!-- konular baslangici --!>
            <!-- konular baslangici --!>
            <!-- konular baslangici --!>
        <?php
                while(have_posts()) : the_post();
        ?>
            <div class="konular">



                        <div class="solakaydir"><?php the_post_thumbnail(); ?>
                                                 </div><p class="konubaslik">
                        <a href="<?php the_permalink(); ?>"><?php the_title();?></a> </p>
                        <ul>
                            <li>
                                <a href="">
                                    <img src="<?php bloginfo('template_url'); ?>/images/icon/adminprofil.png" class="adminprofil"><?php the_author_posts_link() ?>
                                </a>

                            </li>
                            <li>
                                <a href="">
                                    <img src="<?php bloginfo('template_url'); ?>/images/icon/takvimicon.png" class="adminprofil"><?php the_date("d M y")?>
                                </a>

                            </li>
                            <li>
                                <a href="">
                                    <img src="<?php bloginfo('template_url'); ?>/images/icon/kategoriicon.png" class="adminprofil"><a href=""><?php the_category(", ");   ?>
                                </a>

                            </li>
                        </ul>
                        </br>
                        </br>
                        <div class="konuyazisi">
                            <?php the_content(); ?>

 <?php
                                    endwhile;

                            ?>

                        </div>
                        </br>
                        </br>

                        <div class="entry-footer">
                            <p><?php the_tags('Etiketler: ', ', ', ''); ?></p>

                        </div>



                        </br>

                        <!-- adminbilgikutusu --!>
                        <label id="adminbilgikutusu">





                        </label>







                        <!-- adminbilgikutusu --!>



                        <!-- yorumlar baslangici   --!>

                        <section id="yorumlar">

                        <?php comments_template(); ?>
                        </section>

                        <div class="clear"></div>

<div style="clear:both"></div>



                    </div>


            <!-- konular bitişi --!>
            <!-- konular bitişi --!>
            <!-- konular bitişi --!>



        </div>
<div style="clear:both"></div>




<?php get_footer(); ?>