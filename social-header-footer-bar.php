<?php
/*
*Plugin Name: Social Linker
*/

/* Describe what the code snippet does so you can remember later on */
add_action('wp_head', 'add_social_header');
function add_social_header(){
?>
<style type="text/css">
  .asf_social_items li{
    display: inline-block!important;
    list-style-type: none;
    padding: 15px;
    background-color: grey;
    float: right;
    margin: 10px;
    display: inline-block;
    margin-bottom: 0;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    background-image: none;
    border: 1px solid transparent;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    border-radius: 4px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    color: #fff;
    background-color: #5bc0de;
    border-color: #46b8da;
    margin-bottom: 15px;
  }
  .asf_social_items li a{
    text-decoration: none;
    margin-bottom: 15px;


  }
  .social_header{
    background: cornsilk;
    margin-bottom: 15px;
    
  }
</style>
<div class="social_header">
  <ul class="asf_social_items">
    <li><a href="www.facebook.com">Facebook</a></li>
   <li><a href="www.twitter.com">Twitter</a></li>
    <li><a href="www.instagram.com">Instagram</a></li>
  </ul>
</div>
<?php
}


/* Describe what the code snippet does so you can remember later on */
add_action('wp_footer', 'add_social_footer');
function add_social_footer(){
?>
<div class="social_header">
  <ul class="asf_social_items">
   <li><a href="www.facebook.com">Facebook</a></li>
   <li><a href="www.twitter.com">Twitter</a></li>
    <li><a href="www.instagram.com">Instagram</a></li>
  </ul>
</div>
<?php
};

/* Describe what the code snippet does so you can remember later on */
add_action('wp_head', 'add_social_on_specific_page');
function add_social_on_specific_page(){
if(is_single(72)) {  ?>
<div class="social_header">
  <ul class="asf_social_items">
    <li><a href="www.facebook.com">Facebook</a></li>
   <li><a href="www.twitter.com">Twitter</a></li>
    <li><a href="www.instagram.com">Instagram</a></li>
    <li><a href="www.facebook.com">Facebook</a></li>
   <li><a href="www.twitter.com">Twitter</a></li>
    <li><a href="www.instagram.com">Instagram</a></li>
  </ul>
</div>
<?php  }
};

?>