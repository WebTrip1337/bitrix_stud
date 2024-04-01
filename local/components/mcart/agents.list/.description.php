<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/*
 *  Задать имя компонента и Описание
 *  Разместить его в своем разделе в Визуальном редакторе
 */

$arComponentDescription = array(
	"NAME" => GetMessage("AGENT_LIST_NAME"),
	"DESCRIPTION" => GetMessage("AGENT_LIST_DESC"),
	"PATH" => array(
		"ID" => GetMessage("COMPANY_NAME"),
		"CHILD" => array(
			"ID" => "Highload_block",
			"NAME" => GetMessage("COMPONENT_SECTION"),
			"SORT" => 10
		)
	),
);
