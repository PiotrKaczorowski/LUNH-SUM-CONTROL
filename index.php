<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php 
        for($j=0; $j<9; $j++) {
            for($i=0; $i<5-abs(4-$j); $i++) {
                echo "#";
            }
            echo '<br />';
        }
        ?>
    </body>
</html>
