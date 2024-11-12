<div id="contact-overlay" class="contact-overlay">
    <div class="contact-popup">
       
        <!-- Titre de la section de contact avec 2 bannières image pour animation-->
        <div class="title-contact">
            <div class="title-contact-top">
                <img  src="<?= get_stylesheet_directory_uri() . '/assets/images/contact-line.svg' ?>"/>
            </div>
            <div class="title-contact-bottom">
                    <img  src="<?= get_stylesheet_directory_uri() . '/assets/images/contact-line.svg' ?>"/>  
            </div>
        </div>

        <!-- Section contenant le formulaire de contact -->
        <div class="contact-form">
        <?php
            // Affiche le formulaire de contact en utilisant le shortcode Contact Form 7
            echo do_shortcode('[contact-form-7 id="7fe3f8e" title="modale"]');
        ?>
        </div>
    </div>
</div>