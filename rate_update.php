<?php
    $currentDir = dirname(__FILE__);
    require($currentDir.'/config/settings.inc.php');
    $url = 'http://api.minfin.com.ua/auction/info/f391376a302c935c364eded8f90f3bd0b42f0726/';
    $page = file_get_contents($url);
    $data_obj = json_decode($page);
    $data = (array)$data_obj;
    $usd_rate = $data["usd"]->bid;
    if($usd_rate > 20) {
        $link = mysqli_connect(_DB_SERVER_, _DB_USER_, _DB_PASSWD_, _DB_NAME_);
        $insert_usd = "UPDATE ps_currency_shop SET conversion_rate = '$usd_rate' WHERE id_currency = 1";
        mysqli_query($link, $insert_usd);
    }
