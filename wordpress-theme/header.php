<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    
    <!-- Meta Tags for SEO -->
    <meta name="description" content="Autobolt - O primeiro vendedor 24/7 para sua loja de seminovos. Atenda instantaneamente, venda muito mais e poupe custos com o Agente Autobolt.">
    <meta name="keywords" content="autobolt, vendedor automático, seminovos, chatbot, vendas, atendimento 24h, IA, inteligência artificial">
    <meta name="author" content="Autobolt">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Autobolt - Vendedor 24/7 para Lojas de Seminovos">
    <meta property="og:description" content="Atenda instantaneamente, venda muito mais e poupe custos com o Agente Autobolt. O agente que nunca dorme.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo home_url(); ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/gim-hero.jpg">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Autobolt - Vendedor 24/7 para Lojas de Seminovos">
    <meta name="twitter:description" content="Atenda instantaneamente, venda muito mais e poupe custos com o Agente Autobolt. O agente que nunca dorme.">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/gim-hero.jpg">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.ico">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Autobolt",
        "description": "Vendedor automático 24/7 para lojas de seminovos",
        "url": "<?php echo home_url(); ?>",
        "logo": "<?php echo get_template_directory_uri(); ?>/assets/logo.png",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+55-11-99999-9999",
            "contactType": "customer service",
            "availableLanguage": "Portuguese"
        },
        "sameAs": [
            "https://wa.me/5511999999999"
        ]
    }
    </script>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <header id="masthead" class="site-header">
        <!-- Header content can be added here if needed -->
    </header>

    <div id="page" class="site">
        <div id="content" class="site-content">