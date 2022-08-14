<?php
   /**
    * Main tempalte file
    *
    *
    * @package Mouadh
    */
   get_header();
   ?>
<div class="content">
   <body <?php body_class('Hello-class'); ?>> 
      <?php wp_body_open(); ?> 
   </body>
</div>
<?php get_footer();?>