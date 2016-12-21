<?php
    $currentDir = dirname(__FILE__);
    require($currentDir.'/config/settings.inc.php');
    $url = 'http://softline.lutsk.ua/php/get_currencies.php';
    $page = file_get_contents($url);
    $data_obj = json_decode($page);
    $data = (array)$data_obj;
    $usd_rate = $data[0]->sell;
echo $usd_rate;
exit;
    if($usd_rate > 20) {
        $link = mysqli_connect(_DB_SERVER_, _DB_USER_, _DB_PASSWD_, _DB_NAME_);
        $insert_usd = "UPDATE ps_currency_shop SET conversion_rate = '$usd_rate' WHERE id_currency = 1";
        mysqli_query($link, $insert_usd);
    };