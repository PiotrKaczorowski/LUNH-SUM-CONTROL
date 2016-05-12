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
            class IBAN {
                var $exampleStringNumber = '176248';
                
                /**
                 * retrurn right number
                 * 
                 * @param Number $num
                 * @return Number
                 */
                protected function convNum($num){
                    if($num >= 10) { 
                        $sum = 1 + ($num % 10);
                    }else{
                        $sum = $num;
                    }
                    
                    return $sum;
                }
                
                
                protected function addNumbers() {
                    $sum = '';
                    
                    foreach ($this->exampleStringNumber as $val) {
                        $sum += $val;  
                    }
                    
                    return $sum;
                }
            }
            
            $iban = new IBAN();
            echo $iban;
            
        ?>
    </body>
</html>
