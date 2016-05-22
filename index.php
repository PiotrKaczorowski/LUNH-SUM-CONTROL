<?php
include_once 'IBAN.class.php';
$iban = new IBAN(1762483);// 1762483
echo $iban->isValididentNumber();// 817627