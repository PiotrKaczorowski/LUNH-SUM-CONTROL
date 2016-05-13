<!DOCTYPE html>
<!--
Piotr Kaczorowski ctechnolgy.pl
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
            var $identNumber;
            
            public function __construct() {
                $this->identNumber = '1762483';
            }
            /**
             * retrurn right number
             * 
             * @param Number $num
             * @return Number
             */
            protected function convNum($num) {

                $number = $num * 2;

                if ($number >= 10) {
                    $sum = 1 + ($number % 10);
                } else {
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
                if (strlen($this->identNumber) % 2 == 0) {
                    $flag = 1;
                } else {
                    $flag = 0;
                }
                return $flag;
            }

            protected function addNumbers() {
                $sum = 0; $k = 0; $strSplit = str_split($this->identNumber);
                
                if ($this->evenOdd()) {
                    
                    foreach ($strSplit as $val) {
                        if ($k++ % 2 == 0){
                            $sum += $val;
                        }else{
                            $sum += $this->convNum($val);
                        }
                    }
                }else{
                    foreach ($strSplit as $val) {
                        
                        if ($k++ % 2 == 0) {
                            $sum += $this->convNum($val);
                        } else {
                            $sum += $val;
                        }
                    }
                }
                return $sum;
            }
            
            public function isValididentNumber($userNumber='') {
                if(isset($userNumber)){                  
                    $this->identNumber = $userNumber;
                }
                if($this->addNumbers()%10 == 0) {
                    $comment = "Numer prawidowy";
                }else{
                    $comment = "Zły numer";
                }
                return $comment;
            }

        }
        ?>
    </body>
</html>
