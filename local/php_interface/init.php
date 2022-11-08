<?

$eventManager = \Bitrix\Main\EventManager::getInstance();

$eventManager->addEventHandler("catalog", "OnProductUpdate", "EvgenOnProductUpdate");
function EvgenOnProductUpdate($id,$arFields){
    CModule::IncludeModule('iblock');
    $obE = new CIBlockElement();
    $arFilterWin = Array("IBLOCK_ID"=> 28, "ID" => $id,  "ACTIVE" => "Y");
    $resWin = CIBlockElement::GetList(Array("sort"=>"asc"), $arFilterWin, false, false,  ['ID','QUANTITY']);
    while($obWin = $resWin->Fetch())
    {
        $arFields_update = Array(
            "ACTIVE" => "N",
            "IBLOCK_ID" => 28,
        );
        if ($obWin['QUANTITY'] < 2){
            $obE->Update($obWin["ID"], $arFields_update);
        }
    }
}

