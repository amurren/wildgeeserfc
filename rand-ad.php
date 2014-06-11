<?php

/*

  Author: Henry Breton
  $image[X]['pic']='images/GodekLogoWeb.jpg';
  $image[X]['link']='http://www.rugbystore.com';
*/

srand((float) microtime() * 10000000);

  $image[1]['pic']='images/cam-cb-logo-mini.jpg';
  $image[1]['link']='http://www.homesdatabase.com/camdunlop';
  
  $image[2]['pic']='images/jeff-lange-ad.jpg';
  $image[2]['link']='';
 
  $image[3]['pic']='images/weplayrugby_20.jpg';
  $image[3]['link']='http://www.WePlayRugby.com';
 
  $rn = array_rand($image);

echo '<a href="'.$image[$rn]['link'].'" ', 'target="_blank">';
echo '<img src="'.$image[$rn]['pic'].'" alt="Sponsor Logo"/>';
echo '</a>';

?>
