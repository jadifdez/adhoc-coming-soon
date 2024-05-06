<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://www.agenciaadhoc.com/wp-content/uploads/2018/11/favicon-32x32.png" type="image/x-icon">
    <title><?php bloginfo('name'); ?> - Próximamente</title>
    <?php wp_head(); ?>
</head>
<body class="adhoc-coming-soon">
    <main style="background-image: url(<?php  echo plugin_dir_url( __FILE__ ) . 'img/fondo-slide-scaled.webp';?>);">
        <div class="grid-adhoc">
            <div class="adhoc-contenido">
                <div class="texto-intro">
                    <script src="https://cdn.lordicon.com/lordicon.js"></script>
                    <lord-icon
                        src="https://cdn.lordicon.com/xrxypkqz.json"
                        trigger="in"
                        delay="500"
                        colors="primary:#121331,secondary:#268dc2"
                        style="width:150px;height:150px">
                    </lord-icon>
                    <h1>¡Próximamente!</h1>
                    <p>Estamos trabajando en el desarrollo de la web, por favor, inténtelo más tarde.</p>
                </div>
            </div>
        </div>
        <a class="logo" href="https://www.agenciaadhoc.com" target="_blank"><img src="<?php  echo plugin_dir_url( __FILE__ ) . 'img/logoadhoc.svg';?>" alt="Logo Adhoc"></a>
    </main>
    <?php wp_footer(); ?>
</body>
</html>
