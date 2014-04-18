<?php

require_once 'PopbillTaxinvoice/PopbillTaxinvoice.php';
use Popbill\TaxinvoiceService;

//파트너 아이디
$PartnerID = 'TESTER';
//발급받은 비밀키. 유출에 주의하시기 바랍니다.
$SecretKey = 'okH3G1/WZ3w1PMjHDLaWdcWIa/dbTX3eGuqMZ5AvnDE=';

$TaxinvoiceService = new TaxinvoiceService($PartnerID,$SecretKey);

$TaxinvoiceService->IsTest(true);

?>
