<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обратная связь");
?><div class="site-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-8 mb-5">
				 <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"feedback",
	Array(
		"COMPONENT_TEMPLATE" => "feedback",
		"EMAIL_TO" => "robert-kiyamov@mail.ru",
		"EVENT_MESSAGE_ID" => array(0=>"7",),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(0=>"NAME",1=>"EMAIL",2=>"MESSAGE",),
		"USE_CAPTCHA" => "Y"
	)
);?>
</div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">

<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => ""
	)
);?>

            </div>
            
          </div>
        </div>
      </div>
    </div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>