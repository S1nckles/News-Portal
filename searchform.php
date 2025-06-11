<form  class="nav__search" role="search" method="get" action="<?php echo home_url('/'); ?>" >
  <input class="search-input" type="search" name="s" placeholder="Search..." value="<?php the_search_query(); ?>" />
  <button class="search-btn" type="submit"><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/search-icon.svg" alt="Search"></button>
</form>