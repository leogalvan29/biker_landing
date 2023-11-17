<div class="contenedor-1">
     <?php  $titulo_1 = get_field('titulo_1')  ?> 
     <?php   $titulo_2 = get_field('titulo_2')  ?>
     <h4><?php  echo $titulo_1  ?></h4>
     <h1 class="titulo_1"><?php  echo $titulo_2  ?></h1>
     <style>
        .contenedor-1 h4{
             color:<?php  the_field('color_titulo_1') ?>;
             font-size:<?php  the_field('size_titulo_1') ?>px;
             text-align:center;
             margin:0;
            padding:0;
        }

        .titulo_1{
            color:<?php  the_field('color_titulo_2')  ?>;
            font-size:<?php  the_field('size_titulo_2') ?>px;
            text-align:center;
            margin:0;
            padding:0;
        }

     </style> 
     <div class="row-contenedor-1">
         <div class="img-1">
            <?php  $imagen_1 = get_field('imagen_1') ?>
            <?php if(!$imagen_1):  ?> 
                <h3>Inserta una imagen</h3>
               <?php else : ?>
               <img src="<?php echo esc_url($imagen_1); ?>" alt="bike" >
             <?php endif;  ?>   
            
            
            
         </div>
         <div class="txt-1">
          <?php  $txt_titulo_1 = get_field('txt_titulo_1') ?> 
          <h3><?php  echo $txt_titulo_1  ?></h3> 
          
          <?php $size_txt_titulo_1 = get_field('size_txt_titulo_1') ?>
          <?php  $color_txt_titulo_1 = get_field('color_txt_titulo_1') ?>
          <?php  $altura_txt_titulo = get_field('altura_txt_titulo') ?>
          <style>
             .txt-1 h3{
                font-size:<?php  echo  $size_txt_titulo_1 ?>px;
                color:<?php echo $color_txt_titulo_1  ?>; 
                line-height: <?php  echo $altura_txt_titulo ?>px;
                width:90%;

             }

             @media(min-width:768px){
                .txt-1 h3 {
                    max-width:75%;
                }
             }
          </style>
          <?php $txt_description_1 = get_field('txt_description_1') ?> 
          <?php  $size_txt_description_1 = get_field('size_txt_description_1') ?>
          <p><?php echo $txt_description_1 ?></p>
          <style>
              .txt-1 p {
                 font-family:<?php  the_field('tipografia') ?> !important;
                 font-size:<?php echo $size_txt_description_1  ?>px;
                 max-width:90%;
              }
          </style>
          <?php  $cta_txt_1 = get_field('cta_txt_1') ?> 
          <?php   $cta_txt_url = get_field('cta_txt_url') ?>
           
          <a class="cta_txt" href="<?php  echo esc_url($cta_txt_url)  ?>"><?php  echo $cta_txt_1  ?></a>
          <style>
               .cta_txt{
                   display:flex;
                   justify-content:center;
                   align-items:center;
                   text-decoration:none;
                   width:<?php the_field('width_txt_cta') ?>px !important;
                   background-color:<?php  the_field('bg_txt_cta') ?>!important;
                   color: <?php the_field('color_txt_cta') ?> !important;
                   height:<?php  the_field('heigth_txt_cta')  ?>px;
                   border-radius:20px;
               }
          </style>
         </div>
     </div>
</div>


