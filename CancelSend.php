<?php

include 'common.php';
use Popbill\PopbillException;
use Popbill\TaxinvoiceService;
use Popbill\ENumMgtKeyType;
use Popbill\Taxinvoice;
use Popbill\TaxinvoiceDetail;
use Popbill\TaxinvoiceAddContact;

echo '발행예정 취소 테스트'.chr(10).'처리결과 : ' ;

try {
	$result = $TaxinvoiceService->CancelSend('1231212312',ENumMgtKeyType::SELL,'123123','발행예정 취소 메모','userid');
	echo '['.$result->code.'] '.$result->message;
}
catch(PopbillException $pe) {
	echo '['.$pe->getCode().'] '.$pe->getMessage();
}
echo chr(10);
?>
