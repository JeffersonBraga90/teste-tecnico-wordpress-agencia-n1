<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>N1.AG - Soluções Digitais</title>
  <script src="<?= get_stylesheet_directory_uri(); ?>/script.js" defer></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body>
  <!-- Header -->
 <header class="header">
  <div class="container header-content">
    <div class="header-wrapper">
      <a href="/" class="logo"> 
        <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="N1.AG"> 
      </a>

      <button class="menu-toggle" id="menu-toggle">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-menu-hamburguer.svg" alt="Abrir menu" class="icon-hamburger">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-close.png" alt="Fechar menu" class="icon-close">
      </button>
    </div>

    <nav class="nav" id="nav">
      <ul>
        <li><a href="#sobre">Sobre</a></li>
        <li><a href="#servicos">Serviços</a></li>
        <li><a href="#cases">Cases</a></li>
        <li><a href="#blog">Blog</a></li>
        <li><a href="#contato">Contato</a></li>

        <a href="#" class="btn btn-primary mobile-only">Fale Conosco</a>
      </ul>
   </nav>
   
    <a href="#" class="btn btn-primary desktop-only">Fale Conosco</a>
  </div>
</header>