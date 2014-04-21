<?php

include 'common.php';
use Popbill\PopbillException;
use Popbill\TaxinvoiceService;
use Popbill\ENumMgtKeyType;
use Popbill\Taxinvoice;
use Popbill\TaxinvoiceDetail;
use Popbill\TaxinvoiceAddContact;

echo '파일첨부 테스트'.chr(10).'현재 폴더의 uploadtest.jpg파일이 첨부됩니다.'.chr(10).'처리결과 : ' ;

//파일 첨부
try {
	$filepath = './uploadtest.jpg';
	$result = $TaxinvoiceService->AttachFile('1231212312',EnumMgtKeyType::SELL,'123123',$filepath,'userid');
	echo $result->message;
}
catch(PopbillException $pe) {
	echo $pe->getMessage();
}

echo chr(10);

?>
