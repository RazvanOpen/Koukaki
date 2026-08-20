<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <div class="logo floating">
                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/VideoImage/logo.png' ); ?>" alt="logo Fleurs d'oranger & chats errants">
            </div>
            <video class="background-video" autoplay loop muted>
                <source src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/VideoImage/StudioKoukakvid.mp4' ); ?>" poster="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/VideoImage/banner.png' ); ?>" type="video/mp4" >
            </video>
        </section>
        <section id="story" class="story">
            <h2 class="section-title">L'histoire</h2>
            <article  class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <!-- template part slider article   -->
            <?php get_template_part( 'parts/slider' ); ?>                   
            <article id="place">
                <div>
                    <h3 class="section-title">Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                    <img class="bigCloud" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/VideoImage/big_cloud.png' ); ?>" alt="grand nuage">
                    <img class="littleCloud" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/VideoImage/little_cloud.png' ); ?>" alt="petit nuage">
                </div>
            </article>
        </section>
        <section id="studio">
            <h2 class="section-title">Studio Koukaki</h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>
            <!-- template part évenementiel -->
            <?php get_template_part( 'parts/oscars' ); ?>  
    </main><!-- #main -->

<?php
get_footer();
