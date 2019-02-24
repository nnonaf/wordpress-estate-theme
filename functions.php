<?php
function add_theme_scripts() {
   $url = get_template_directory_uri();
    
    
     echo "<link rel='stylesheet' href='$url/style.css'>";
     echo " <script src='$url/js/vendor/modernizr-2.6.2.min.js'></script>";
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );




  function footerCripting(){
   $url = get_template_directory_uri();
      
    
     echo " <script src='$url/js/compressed.js'></script>";
     echo " <script src='$url/js/main.js'></script>";
     
    
  }
  
?>