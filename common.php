<?php

require_once 'PopbillTaxinvoice/PopbillTaxinvoice.php';

//파트너 아이디
$PartnerID = 'TESTER';
//발급받은 비밀키. 유출에 주의하시기 바랍니다.
$SecretKey = 'okH3G1/WZ3w1PMjHDLaWdcWIa/dbTX3eGuqMZ5AvnDE=';

$TaxinvoiceService = new TaxinvoiceService($PartnerID,$SecretKey);

//테스트모드로 설정되면 test.popbill.com으로 연결됩니다.
//작업을 완료한 후에는 테스트모드설정을 해제하여 사용합니다. ex)아래 라인 주석처리하거나, false처리.
$TaxinvoiceService->IsTest(true);

?>
