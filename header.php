<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>News Portal</title>
</head>
<body>

<header id="header">
    <div class="container">
      <nav class="nav">
        <div class="logo">
          <span>News</span><h1>Portal</h1>
        </div>
        <div class="nav__list">
          <div class="nav__search">
            <input type="text" class="search-input" placeholder="Search..." />
            <button class="search-btn" type="submit"><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/search-icon.svg" alt="Search"></button>
          </div>

          <button class="menu-btn" aria-label="Menu">
            <span></span>
          </button>
          <div class="menu__side-panel">
              <ul>
                <li><a href="#">Головна</a></li>
                <li><a href="#">Про нас</a></li>
                <li><a href="#">Контакти</a></li>
              </ul>
            </div>
        </div>
      </nav>
    </div>
  </header>