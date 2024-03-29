<?

AddEventHandler("main", "OnBeforeUserRegister", Array("RegisterAddRole", "OnBeforeUserRegisterHandler"));


class RegisterAddRole
{
	public static function OnBeforeUserRegisterHandler(&$arFields)
	{
		if($arFields["UF_USER_TYPE"] == 5) // Продавец
		{
			$arFields["GROUP_ID"][] = "7";
		}
		elseif($arFields["UF_USER_TYPE"] == 6) // Покупатель
		{
			$arFields["GROUP_ID"][] = "6";
		}

		return $arFields;
	}
}

?>