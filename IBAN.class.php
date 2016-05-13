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
                // number with sum controle (3)
                // if event 176248 then 8x2 2x2 7x2 it fallows that we convert positon form 2
                // if odd position 1 3 5 7 ...  if fallows that we convert position from 1
                var $identNumber = '176248';
                
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
                        $sum = $number;
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
                    if(strlen($this->identNumber)%2 == 0){
                        $flag = 1;
                    }else{
                        $flag = 0;
                    }
                    return $flag;
                }


                public function addNumbers() {
                    
                    $sum = 0 ; $k = 0;
                    $strSplit = str_split($this->identNumber);
                    
                    if($this->evenOdd()){
                       foreach ($strSplit as $val) {
                         $k++;
                         if($k%2 == 0) {
                             $sum += $this->convNum($val);
                         }else{
                             $sum += $val;     
                         }
                       } 
                    }else{
                       foreach ($strSplit as $val) {
                         $k++;
                         if($k%2 == 0) $sum += $val;
                         else $sum += $this->convNum($val);    
                       }  
                    }             
                    
                    return $sum;
                }
            }
            
            
            
        ?>
    </body>
</html>
