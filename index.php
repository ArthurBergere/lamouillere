<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <meta charset="UTF-8">
    <title><?php bloginfo('name')?> - <?php bloginfo('description')?>  </title>
</head>
<body>
    <?php while (have_posts(  )) : the_post(  ); ?>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
    <?php endwhile; ?>
</body>
</html>