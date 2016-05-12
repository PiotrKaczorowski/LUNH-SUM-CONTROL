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
                    
                    $number = $num * 2;
                    
                    if($number >= 10) { 
                        $sum = 1 + ($number % 10);
                    }else{
                        $sum = $num;
                    }
                    
                    return $sum;
                }
                
                /**
                 * If 1 then number is even 
                 * If 0 then number is odd
                 *                   
                 * @return int
                 */
                protected function evenOdd() {
                    if(strlen($this->exampleStringNumber)%2 == 0){
                        $flag = 1;
                    }else{
                        $flag = 0;
                    }
                    return $flag;
                }


                public function addNumbers() {
                    
                    $sum = null;
                    $strSplit = str_split($this->exampleStringNumber);
                    
                    foreach ($strSplit as $val) {
                        $sum += $this->convNum($val);  
                    }
                    
                    return $sum;
                }
            }
            
            
            
        ?>
    </body>
</html>
