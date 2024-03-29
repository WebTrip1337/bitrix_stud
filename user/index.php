<?
// define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

// if(isset($_REQUEST["backurl"]) && strlen($_REQUEST["backurl"]) > 0)
// 	LocalRedirect($backurl);

$APPLICATION->SetTitle("Пользователь");

?>
<br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	"auth",
	Array(
		"COMPONENT_TEMPLATE" => "auth",
		"FORGOT_PASSWORD_URL" => "/user/",
		"PROFILE_URL" => "/user/profile.php",
		"REGISTER_URL" => "/user/registration.php",
		"SHOW_ERRORS" => "Y"
	)
);?><br>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>