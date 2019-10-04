<?php


include_once("config.php");
include_once("lib/inc/chartphp_dist.php");

$p = new chartphp();

// set few params
$p->chart_type = "line";
$p->xlabel = "DIA";
$p->ylabel = "PING";
$p->title = "TITULO";	
$p->color ="soft"; 
$p->theme = "dark";
$p->width = "100%";
$p->height = "70vh";
$p->data_sql = "SELECT dia,AVG(ping)
                FROM `datos_ping` GROUP BY dia"; 
// render chart and get html/js output
$out = $p->render('c1');
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="lib/js/chartphp.css">
        <script src="lib/js/jquery.min.js"></script>
        <script src="lib/js/chartphp.js"></script>
        <style>
            *{
                margin:0;
                padding:0;
            }
        </style>
    </head>
    <body>
    
        <div>
          <?php echo $out; ?>
        </div>
       
    </body>
</html>

 