
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="mb-5">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/footer_left.php"
	)
);?>
					</div>



				</div>
				<div class="col-lg-4 mb-5 mb-lg-0">
<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"footer", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "footer"
	),
	false
);?>


				</div>

				<div class="col-lg-4 mb-5 mb-lg-0">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/footer_right.php"
	)
);?>



				</div>

			</div>
			<div class="row pt-5 mt-5 text-center">
				<div class="col-md-12">
					<p>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/include/footer_bottom.php"
	)
);?>
					</p>
				</div>

			</div>
		</div>
	</footer>

	</div>

<?
	$APPLICATION->AddHeadScript("/bitrix/templates/.default/js/jquery-3.3.1.min.js");
	$APPLICATION->AddHeadScript("/bitrix/templates/.default/js/jquery-migrate-3.0.1.min.js");
	$APPLICATION->AddHeadScript("/bitrix/templates/.default/js/jquery-ui.js");
	$APPLICATION->AddHeadScript("/bitrix/templates/.default/js/popper.min.js");
	$APPLICATION->AddHeadScript("/bitrix/templates/.default/js/bootstrap.min.js");
	$APPLICATION->AddHeadScript("/bitrix/templates/.default/js/owl.carousel.min.js");
	$APPLICATION->AddHeadScript("/bitrix/templates/.default/js/mediaelement-and-player.min.js");
	$APPLICATION->AddHeadScript("/bitrix/templates/.default/js/jquery.stellar.min.js");
	$APPLICATION->AddHeadScript("/bitrix/templates/.default/js/jquery.countdown.min.js");
	$APPLICATION->AddHeadScript("/bitrix/templates/.default/js/jquery.magnific-popup.min.js");
	$APPLICATION->AddHeadScript("/bitrix/templates/.default/js/bootstrap-datepicker.min.js");
	$APPLICATION->AddHeadScript("/bitrix/templates/.default/js/aos.js");

	$APPLICATION->AddHeadScript("/bitrix/templates/.default/js/main.js");
?>
</body>

</html>