<?php

include 'common.php';
use Popbill\PopbillException;
use Popbill\TaxinvoiceService;
use Popbill\ENumMgtKeyType;
use Popbill\Taxinvoice;
use Popbill\TaxinvoiceDetail;
use Popbill\TaxinvoiceAddContact;

echo '파트너 잔여 통합포인트 확인 테스트'.chr(10).'처리결과 : ' ;

try {
	$result = $TaxinvoiceService->GetPartnerBalance('1231212312');
	echo $result;
}
catch(PopbillException $pe) {
	echo '['.$pe->getCode().'] '.$pe->getMessage();
}
echo chr(10);
?>
