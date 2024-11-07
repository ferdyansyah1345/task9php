<?php
   require_once 'class_fruit.php';



   $scoopy = new motor(); 
    $pcx = new motor();

     $scoopy->set_name('scoopy'); 
     $scoopy->set_color('Red');
     $pcx->set_name('pcx'); 
     $pcx->set_color('black');

       echo 'Nama motor '.$scoopy->get_name().'Warnanya '.$scoopy->get_color();
       echo '<br/>Nama motor '.$pcx->get_name(). 'Warnanya '.$pcx->get_color();
?>