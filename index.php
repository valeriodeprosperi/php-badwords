<?php
$paragrafo = "Siete tutti sciocchi e maleducati e infami non potete fare così";
$censura = str_replace($_GET["sciocchi"],'***',$paragrafo);
var_dump($censura);
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>php-badwords</title>
   </head>
   <body>
     <p><?php echo $paragrafo ?></p>
     <p>lunghezza paragrafo<?php echo strlen($paragrafo) ?></p>
     <p><?php echo $censura ?></p>

   </body>
 </html>
