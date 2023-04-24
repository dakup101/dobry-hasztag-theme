<!DOCTYPE html>
<html lang="pl">

<head>
    <!-- Header Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <!-- Inter Font Family -->
    <link rel="preconnect"
          href="https://fonts.googleapis.com">
    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <!-- Archio Narrow Font Family -->
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@700&display=swap"
          rel="stylesheet">
    <!-- Sofia Pro Soft Font Famili -->
    <link rel="stylesheet"
          href="https://use.typekit.net/zjm1tnj.css">
    <!-- Page Title -->
    <title><?php echo wp_title() ?></title>
    <!-- WP Header Meta -->
    <?php wp_head() ?>
</head>

<body <?php body_class("pt-10 relative bg-yellow") ?>>
    <!-- Site Header -->
    <?php get_template_part( CMP, "header" ) ?>
    <!-- Site Main -->
    <main>