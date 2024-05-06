<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://www.agenciaadhoc.com/wp-content/uploads/2018/11/favicon-32x32.png" type="image/x-icon">
    <title><?php bloginfo('name'); ?> - Mantenimiento activo</title>
    <?php wp_head(); ?>
</head>
<body class="adhoc-coming-soon">
    
    <main class="maintenance" style="background-image: url(<?php  echo plugin_dir_url( __FILE__ ) . 'img/maintenance.jpg';?>);">
        <div class="grid-adhoc">
            <div class="adhoc-contenido">
                <div class="texto-intro">
                    <script src="https://cdn.lordicon.com/lordicon.js"></script>
                    <lord-icon
                        src="https://cdn.lordicon.com/ylvuooxd.json"
                        trigger="in"
                        delay="500"
                        style="width:150px;height:150px">
                    </lord-icon>
                    <h1>Mantenimiento activo</h1>
                    <p>Estamos ajustando la web para mejorar su experiencia. Disculpe las molestias.</p>
                </div>
            </div>
        </div>
    </main>
    <?php wp_footer(); ?>
</body>
</html>
