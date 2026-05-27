<?php if (!defined("ABSPATH")) exit; ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo("charset"); ?>">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="theme-color" content="#0a0d12">
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="mv-skip" href="#main"><?= esc_html__("Skip to content","mexivanza") ?></a>
<header class="mv-header">
  <div class="mv-shell">
    <a class="mv-brand" href="<?= esc_url(home_url("/")) ?>" aria-label="<?= esc_attr(get_bloginfo("name")) ?>">
      <svg viewBox="0 0 32 32" width="26" height="26" aria-hidden="true"><circle cx="16" cy="16" r="14" fill="none" stroke="currentColor" stroke-width="2"/><path d="M8 20 L16 8 L24 20 Z" fill="currentColor" style="color:#15c08a"/></svg>
      <span><?= esc_html(get_bloginfo("name")) ?></span>
    </a>
    <?php
    if (has_nav_menu("primary")) {
        wp_nav_menu(["theme_location"=>"primary","menu_class"=>"mv-nav","container"=>"nav","fallback_cb"=>false]);
    } else {
        echo '<nav class="mv-nav"><a href="'.esc_url(get_post_type_archive_link("trip")).'">'.esc_html__("Trips","mexivanza").'</a></nav>';
    }
    ?>
  </div>
</header>
<main id="main">
