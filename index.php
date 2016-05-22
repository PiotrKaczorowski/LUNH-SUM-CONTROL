<?php
include_once 'IBAN.class.php';
$iban = new IBAN(1762483);// 17 62 483
echo $iban->isValididentNumber();// 817627
