<?php

include 'common.php';


echo '세금계산서 문서이력 확인 테스트'.chr(10).'처리결과 : ' ;

try {
	$result = $TaxinvoiceService->GetLogs('1231212312',ENumMgtKeyType::SELL,'123123');
	echo chr(10);
	echo json_encode($result,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
}
catch(PopbillException $pe) {
	echo '['.$pe->getCode().'] '.$pe->getMessage();
}
echo chr(10);
?>