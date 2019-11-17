  <!-- header kısmı --!>
<?php get_header(); ?>



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
        <div class="kategori-listesi">
        <?php
        if(is_category()){
            single_cat_title();
        }elseif(is_author()){
            the_author_posts_link();
        }elseif(is_tag()){
            echo "Etiket Sayfası";
        }





        ?>
        </div>



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
                <?php echo mb_substr(get_the_excerpt(), 0,460 ); ?> <a href="<?php the_permalink(); ?>">Devamı...</a>
            </div>




            </a>


        </div>
        <?php
                        endwhile;

                ?>


<div style="clear:both"></div>

            <!-- konular bitişi --!>
            <!-- konular bitişi --!>
            <!-- konular bitişi --!>

            <!-- sayfa geri ileri --!>
              <div class="ilerigeri">


                    <div class="ileri">
                        <img src="<?php bloginfo('template_url'); ?>/images/ileri.png" class="ileriresim"><a><?php next_posts_link( 'Sonraki Yazılar', 0 ); ?>



                    </div>
                    <div class="geri">
                        <img src="<?php bloginfo('template_url'); ?>/images/geri.png" class="geriresim"> <a><?php previous_posts_link( 'Önceki Yazılar', 0 ); ?>

                    </div>
                </div>
        </a>









<div style="clear:both"></div>

    </div>











<div style="clear:both"></div>

</div>

<?php get_footer(); ?>