<?php
$paragrafo = "Siete tutti sciocchi e maleducati e infami non potete fare così";
$censura = ($_GET["sciocchi"],'***',$paragrafo);
var_dump($censura);
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>php-badwords</title>
   </head>
   <body>
     <p><?php echo $paragrafo;?></p>
     <p><?php echo strlen($paragrafo); ?></p>

   </body>
 </html>
