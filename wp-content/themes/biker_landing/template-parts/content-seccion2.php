<div class="contenedor-seccion2">

    <?php  $bg_seccion2 = get_field('bg_seccion2')  ?>

    <style>
        .contenedor-seccion2{
           background-color:<?php echo $bg_seccion2 ?>;
        }
    </style>

    <div class="row-section-2">
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
               <h2><?php  echo $texto_titulo_1 ?></h2> 
               <?php  $texto_titulo_2 = get_field('texto_titulo_2') ?>
               <h4><?php echo $texto_titulo_2  ?></h4>
               <?php  $texto_titulo_3 = get_field('texto_titulo_3')  ?>
               <p><?php  echo $texto_titulo_3  ?></p>

               <style>
                   .row-section-2 h2{
                       color:<?php  the_field('texto_color_1') ?>;
                   }
               </style>

             </li>

             <?php  endwhile; wp_reset_postdata() ?>

            </ul>
             
        </div>
    </div>

</div>