<?php

include 'common.php';
use Popbill\PopbillException;
use Popbill\JoinForm;
use Popbill\TaxinvoiceService;
use Popbill\ENumMgtKeyType;
use Popbill\Taxinvoice;
use Popbill\TaxinvoiceDetail;
use Popbill\TaxinvoiceAddContact;

echo '팝빌 연동회원 가입 테스트'.chr(10).'처리결과 : ' ;

$joinForm = new JoinForm ();

$joinForm->PartnerID 	= $PartnerID;
$joinForm->CorpNum 		= '1231212312';
$joinForm->CEOName 		= '대표자성명';
$joinForm->CorpName 	= '테스트사업자상호';
$joinForm->Addr			= '테스트사업자주소';
$joinForm->ZipCode		= '사업장우편번호';
$joinForm->BizType		= '업태';
$joinForm->BizClass		= '업종';
$joinForm->ContactName	= '담당자상명';
$joinForm->ContactEmail	= 'tester@test.com';
$joinForm->ContactTEL	= '07075106766';
$joinForm->ID			= 'userid_php';
$joinForm->PWD			= 'thisispassword';

try
{
	$result = $TaxinvoiceService->JoinMember($joinForm);
	echo $result;
}
catch(PopbillException $pe) {
	echo '['.$pe->getCode().'] '.$pe->getMessage();
}
echo chr(10);

?>
