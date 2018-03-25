<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>NEFARIOUS</title>

    <!--This is the header -->
    <div class="Header">

      <h1 class="HeaderName">CODE WITH AJAY</h1>
      <ul id="NavOptions" class="HeaderList">
        <li class="HeaderListItem">HOME</li>
        <li class="HeaderListItem">BLOG</li>
        <li class="HeaderListItem">TUTORIALS</li>
        <li class="HeaderListItem">PROJECTS</li>
        <li class="HeaderListItem">ABOUT</li>

      </ul>

      <img src="<?php echo get_template_directory_uri() . '/icons/menuitems/simplemenu.png'; ?>" class="HeaderListIcon"/>

      <?php wp_head(); ?>

    </div>


  </head>

</html>
