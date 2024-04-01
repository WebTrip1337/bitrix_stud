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



$eventManager = \Bitrix\Main\EventManager::getInstance();

$eventManager->addEventHandler('', 'AgentsOnBeforeUpdate', 'clearHLCache');
$eventManager->addEventHandler('', 'AgentsOnBeforeAdd', 'clearHLCache');
$eventManager->addEventHandler('', 'AgentsOnBeforeDelete', 'clearHLCache');

function clearHLCache(\Bitrix\Main\Entity\Event $event) {
	
	$entity = $event->getEntity();
    $tableName = $entity->getDBTableName();

    $taggedCache = \Bitrix\Main\Application::getInstance()->getTaggedCache();
	$taggedCache->clearByTag('hlblock_table_name_' . $tableName);


	$result = new \Bitrix\Main\Entity\EventResult();
    return $result;
    
}


?>