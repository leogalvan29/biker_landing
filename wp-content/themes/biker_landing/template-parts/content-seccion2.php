<div class="contenedor-seccion2">

    <?php  $bg_seccion2 = get_field('bg_seccion2')  ?>



    <div class="row-section-2">

        <ul>

            <?php  
            
             $args = array(
                'post_type' => 'textos',
                'post_per_page' => 10,
                'order_by' => 'title',
                'order' => 'ASC'
             );
             $textos = new WP_Query($args);
              
             while($textos->have_posts()) : $textos->the_post()?>
            <li>
                <?php $texto_titulo_1 = get_field('texto_titulo_1') ?>

                <h2 class="texto-size-1"><?php  echo $texto_titulo_1 ?></h2>
                <style>
                .texto-size-1 {
                    color: <?php echo $texto_color_1 ?>;
                    font-size: <?php echo $texto_size_1 ?>px;
                }
                </style>
                <?php  $texto_size_1 = get_field('texto_size_1')?>
                <?php  $texto_color_1 = get_field('texto_color_1') ?>
                <?php  $texto_titulo_2 = get_field('texto_titulo_2') ?>
                <h4><?php echo $texto_titulo_2  ?></h4>
                <?php  $texto_titulo_3 = get_field('texto_titulo_3')  ?>
                <p><?php  echo $texto_titulo_3  ?></p>

                <?php  $texto_color_1 = get_field('texto_color_1') ?>
                <style>
                .row-section-2 p {
                    color: <?php the_field('texto_color_3') ?>;
                }


                .row-section-2 h4 {
                    color: <?php the_field('texto_color_2') ?>;
                }
                </style>

                <style>
                .contenedor-seccion2 {
                    background-color: <?php echo $bg_seccion2 ?>;
                }
                </style>
            </li>

            <?php  endwhile; wp_reset_postdata(); ?>




        </ul>


    </div>

</div>