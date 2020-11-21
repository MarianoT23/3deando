<!--- HEADER --->
<?php get_header(); ?>


<!--- BODY --->

<!-- Hero -->
<?php $heroBackgroundMobile = get_field('hero_background-mobile') ?>
<section class="hero" style="background-image:url('<?php echo wp_is_mobile() && $heroBackgroundMobile ? the_field('hero_background-mobile') : the_field('hero_background-desktop'); ?>');">
    <div class="hero__overlay" style="background-color: <?php echo get_field('hero_overlay-color') ?>; opacity: <?php echo get_field('hero_overlay-opacity') ?>;">
    </div>
    <div class="hero__container container-lg">
        <div>
            <h1 class="hero__main-title js-fadeInUp"><?php echo get_field('hero-main-title') ?></h1>
            <h6 class="hero__subtitle js-fadeInUp"><?php echo get_field('hero-subtitle') ?></h6>
        </div>
    </div>
</section>

<!-- Quienes somos? -->
<section class="quienes-somos" id="quienes-somos">
    <div class="container-lg">
        <h3 class="section-title" data-aos="animate"><?php echo get_field('titulo_seccion-quienes_somos') ?></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra mattis nisl, sit amet venenatis felis consequat vitae. Aliquam luctus urna sit amet placerat auctor. Donec nec placerat nibh. Aliquam rhoncus nunc erat, aliquet gravida sem pellentesque eu. Etiam hendrerit aliquet enim. Etiam nec faucibus diam, in finibus justo. Quisque accumsan lectus quis arcu tincidunt, sit amet iaculis eros suscipit. Aliquam finibus augue mi. Cras vestibulum at felis non consectetur. Integer at accumsan ex. Mauris vulputate facilisis enim. Suspendisse tincidunt turpis quis eros porttitor, quis scelerisque erat ornare. Vestibulum dapibus sem vitae nibh malesuada, vitae placerat lorem pellentesque. Donec ultrices eros ut nisl cursus scelerisque. Pellentesque tempor arcu sit amet quam vulputate, facilisis posuere nibh pretium.</p>
    </div>
</section>


<!-- Que hacemos? -->
<section class="que-hacemos" id="que-hacemos">
    <div class="container-lg">
        <h3 class="section-title" data-aos="animate">¿Qué hacemos?</h3>
        <div class="que-hacemos__box-container" data-aos="animate">

            <!-- Servicio -->
            <div class="que-hacemos__box" >
                <div class="que-hacemos__box-front">
                    <!-- Foto -->
                    <?php 
                    $servicio1Foto = get_field('que-hacemos_foto1');
                    if( !empty( $servicio1Foto ) ): ?>
                        <img src="<?php echo esc_url($servicio1Foto['url']); ?>" alt="<?php echo esc_attr($servicio1Foto['alt']); ?>" class="que-hacemos__box-image"/>
                    <?php endif; ?>
                    <!-- Texto -->
                    <div class="que-hacemos__box-title-container">
                        <h3 class="que-hacemos__box-title"><?php echo get_field('que-hacemos_titulo2') ?></h3>
                    </div>
                </div>
                <div class="que-hacemos__box-back">
                    <p class="que-hacemos__box-texto"><?php echo get_field('que-hacemos_texto1') ?></p>
                </div>
            </div>

            <!-- Servicio -->
            <div class="que-hacemos__box">
                <div class="que-hacemos__box-front">
                    <!-- Foto -->
                    <?php 
                    $servicio2Foto = get_field('que-hacemos_foto2');
                    if( !empty( $servicio2Foto ) ): ?>
                        <img src="<?php echo esc_url($servicio2Foto['url']); ?>" alt="<?php echo esc_attr($servicio2Foto['alt']); ?>" class="que-hacemos__box-image"/>
                    <?php endif; ?>
                    <!-- Texto -->
                    <div class="que-hacemos__box-title-container">
                        <h3 class="que-hacemos__box-title"><?php echo get_field('que-hacemos_titulo2') ?></h3>
                    </div>
                </div>
                <div class="que-hacemos__box-back">
                    <p class="que-hacemos__box-texto"><?php echo get_field('que-hacemos_texto2') ?></p>
                </div>
            </div>

            <!-- Servicio -->
            <div class="que-hacemos__box">
                <div class="que-hacemos__box-front">
                    <!-- Foto -->
                    <?php 
                    $servicio3Foto = get_field('que-hacemos_foto3');
                    if( !empty( $servicio3Foto ) ): ?>
                        <img src="<?php echo esc_url($servicio3Foto['url']); ?>" alt="<?php echo esc_attr($servicio3Foto['alt']); ?>" class="que-hacemos__box-image"/>
                    <?php endif; ?>
                    <!-- Texto -->
                    <div class="que-hacemos__box-title-container">
                        <h3 class="que-hacemos__box-title"><?php echo get_field('que-hacemos_titulo2') ?></h3>
                    </div>
                    <div class="que-hacemos__box-back">
                        <p class="que-hacemos__box-texto"><?php echo get_field('que-hacemos_texto3') ?></p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>


<!-- Nuestro Trabajo -->
<section class="nuestro-trabajo" id="nuestro-trabajo">
    <div class="container-lg">
        <div class="nuestro-trabajo__slider-container">
            <!-- Left Arrow -->
            <div class="nuestro-trabajo__glider-left glider-left-arrow">
            </div>
            <!-- Slides -->
            <div class="nuestro-trabajo__slider">
                <div class="nuestro-trabajo__slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/productos/1.jpg" alt="1">
                </div>
                <div class="nuestro-trabajo__slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/productos/2.jpg" alt="2">
                </div>
                <div class="nuestro-trabajo__slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/productos/3.jpg" alt="3">
                </div>
                <div class="nuestro-trabajo__slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/productos/4.jpg" alt="4">
                </div>
                <div class="nuestro-trabajo__slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/productos/5.jpg" alt="5">
                </div>
                <div class="nuestro-trabajo__slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/productos/6.jpg" alt="6">
                </div>
                <div class="nuestro-trabajo__slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/productos/7.jpg" alt="7">
                </div>
                <div class="nuestro-trabajo__slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/productos/8.jpg" alt="8">
                </div>
                <div class="nuestro-trabajo__slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/productos/9.jpg" alt="9">
                </div>
                <div class="nuestro-trabajo__slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/productos/10.jpg" alt="10">
                </div>
                <div class="nuestro-trabajo__slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/productos/11.jpg" alt="11">
                </div>
            </div>
            <!-- Right Arrow -->
            <div class="nuestro-trabajo__glider-right glider-right-arrow">
            </div>
            <!-- Dots -->
            <div class="nuestro-trabajo__glider-dots">
            </div>
        </div>
    </div>
</section>

<!-- Contactanos -->
<section class="contactanos" id="contactanos">
    <div class="contactanos__container container-lg">

        <h3 class="section-title" data-aos="animate">¿Como lo hacemos?</h3>

        <!-- Pasos -->
        <div class="contactanos__pasos-container">
            <!-- Paso 1 -->
            <div class="contactanos__paso-container">
                <div class="contactanos__paso-foto-container">
                    <?php 
                    $paso1Foto = get_field('contactanos_foto1');
                    if( !empty( $paso1Foto ) ): ?>
                        <img src="<?php echo esc_url($paso1Foto['url']); ?>" alt="<?php echo esc_attr($paso1Foto['alt']); ?>" class="contactanos__paso-foto"/>
                    <?php endif; ?>
                </div>
                <div class="contactanos__paso-texto-container">
                    <h4 class="contactanos__paso-titulo"><?php echo get_field('contactanos_titulo1') ?></h4>
                    <p class="contactanos__paso-texto"><?php echo get_field('contactanos_texto1') ?></p>
                </div>
            </div>

            <!-- Paso 2 -->
            <div class="contactanos__paso-container">
                <div class="contactanos__paso-foto-container">
                    <?php 
                    $paso2Foto = get_field('contactanos_foto2');
                    if( !empty( $paso2Foto ) ): ?>
                        <img src="<?php echo esc_url($paso2Foto['url']); ?>" alt="<?php echo esc_attr($paso2Foto['alt']); ?>" class="contactanos__paso-foto"/>
                    <?php endif; ?>
                </div>
                <div class="contactanos__paso-texto-container">
                    <h4 class="contactanos__paso-titulo"><?php echo get_field('contactanos_titulo2') ?></h4>
                    <p class="contactanos__paso-texto"><?php echo get_field('contactanos_texto2') ?></p>
                </div>
            </div>

            <!-- Paso 3 -->
            <div class="contactanos__paso-container">
                <div class="contactanos__paso-foto-container">
                    <?php 
                    $paso3Foto = get_field('contactanos_foto3');
                    if( !empty( $paso3Foto ) ): ?>
                        <img src="<?php echo esc_url($paso3Foto['url']); ?>" alt="<?php echo esc_attr($paso3Foto['alt']); ?>" class="contactanos__paso-foto"/>
                    <?php endif; ?>
                </div>
                <div class="contactanos__paso-texto-container">
                    <h4 class="contactanos__paso-titulo"><?php echo get_field('contactanos_titulo3') ?></h4>
                    <p class="contactanos__paso-texto"><?php echo get_field('contactanos_texto3') ?></p>
                </div>
            </div>

            <!-- Paso 4 -->
            <div class="contactanos__paso-container">
                <div class="contactanos__paso-foto-container">
                    <?php 
                    $paso4Foto = get_field('contactanos_foto4');
                    if( !empty( $paso4Foto ) ): ?>
                        <img src="<?php echo esc_url($paso4Foto['url']); ?>" alt="<?php echo esc_attr($paso4Foto['alt']); ?>" class="contactanos__paso-foto"/>
                    <?php endif; ?>
                </div>
                <div class="contactanos__paso-texto-container">
                    <h4 class="contactanos__paso-titulo"><?php echo get_field('contactanos_titulo4') ?></h4>
                    <p class="contactanos__paso-texto"><?php echo get_field('contactanos_texto4') ?></p>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div class="contactanos__pasos-cta-container">
            <div class="contactanos__pasos-cta btn btn--dark js-form-open">Contactanos</div>
        </div>

    </div>
</section>

<!-- FAQ -->
<section class="faq" id="faq">
    <div class="faq__container container-lg">

        <div class="faq__qa-container">
            <div class="faq__question-container js-question-container">
                <h3 class="faq__question faq__question-container active">¿Pueden enviar la muestra terminada de mi producto antes del encargo final?</h3>
            </div>
            <div class="faq__answer-container js-answer-container">
                <p class="faq__answer faq__answer-1 active">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales ipsum quam, ut sollicitudin lorem cursus feugiat. Suspendisse scelerisque vulputate est eget iaculis. Etiam in ante porta, iaculis ex ut, interdum leo. Nullam porta ligula non risus euismod vestibulum. Mauris pharetra mauris eros, quis placerat lectus eleifend sodales. Duis tempus nunc eu libero ornare scelerisque gravida ut ex. Mauris pulvinar sed metus vitae sollicitudin. Sed a sem ut enim feugiat tempus et ac lorem. Proin enim magna, condimentum vitae luctus et, lacinia eget quam. Nam eu velit et sapien mattis rutrum id sit amet massa. Proin rutrum posuere blandit. Vestibulum quis sem dui. Aliquam ultrices lacus id purus tincidunt, et fringilla erat rhoncus. Nulla sed facilisis massa.</p>
            </div>
        </div>

        
        <div class="faq__qa-container">
            <div class="faq__question-container js-question-container">
                <h3 class="faq__question faq__question-container active">¿Pueden enviar la muestra terminada de mi producto antes del encargo final?</h3>
            </div>
            <div class="faq__answer-container js-answer-container">
                <p class="faq__answer faq__answer-1 active">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales ipsum quam, ut sollicitudin lorem cursus feugiat. Suspendisse scelerisque vulputate est eget iaculis. Etiam in ante porta, iaculis ex ut, interdum leo. Nullam porta ligula non risus euismod vestibulum. Mauris pharetra mauris eros, quis placerat lectus eleifend sodales. Duis tempus nunc eu libero ornare scelerisque gravida ut ex. Mauris pulvinar sed metus vitae sollicitudin. Sed a sem ut enim feugiat tempus et ac lorem. Proin enim magna, condimentum vitae luctus et, lacinia eget quam. Nam eu velit et sapien mattis rutrum id sit amet massa. Proin rutrum posuere blandit. Vestibulum quis sem dui. Aliquam ultrices lacus id purus tincidunt, et fringilla erat rhoncus. Nulla sed facilisis massa.</p>
            </div>
        </div>
        
        
        <div class="faq__qa-container">
            <div class="faq__question-container js-question-container">
                <h3 class="faq__question faq__question-container active">¿Pueden enviar la muestra terminada de mi producto antes del encargo final?</h3>
            </div>
            <div class="faq__answer-container js-answer-container">
                <p class="faq__answer faq__answer-1 active">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sodales ipsum quam, ut sollicitudin lorem cursus feugiat. Suspendisse scelerisque vulputate est eget iaculis. Etiam in ante porta, iaculis ex ut, interdum leo. Nullam porta ligula non risus euismod vestibulum. Mauris pharetra mauris eros, quis placerat lectus eleifend sodales. Duis tempus nunc eu libero ornare scelerisque gravida ut ex. Mauris pulvinar sed metus vitae sollicitudin. Sed a sem ut enim feugiat tempus et ac lorem. Proin enim magna, condimentum vitae luctus et, lacinia eget quam. Nam eu velit et sapien mattis rutrum id sit amet massa. Proin rutrum posuere blandit. Vestibulum quis sem dui. Aliquam ultrices lacus id purus tincidunt, et fringilla erat rhoncus. Nulla sed facilisis massa.</p>
            </div>
        </div>
        

    </div>
</section>

<!-- Form -->
<section class="form js-form">
    <div class="form__container active">
        <div class="form__close js-form-close"></div>
        <?php echo get_field('form') ?>
    </div>
</section>

<!--- FOOTER --->
<?php get_footer(); ?>