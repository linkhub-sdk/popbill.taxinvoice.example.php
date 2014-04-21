<?php

include 'common.php';
use Popbill\PopbillException;
use Popbill\TaxinvoiceService;
use Popbill\ENumMgtKeyType;
use Popbill\Taxinvoice;
use Popbill\TaxinvoiceDetail;
use Popbill\TaxinvoiceAddContact;

echo '연동회원 잔여포인트 확인 테스트'.chr(10).'처리결과 : ' ;

try {
	$result = $TaxinvoiceService->GetBalance('1231212312');
	echo $result;
}
catch(PopbillException $pe) {
	echo '['.$pe->getCode().'] '.$pe->getMessage();
}
echo chr(10);
?>
