<?php

use Illuminate\Support\Facades\Date;

function http_request($url){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $output = curl_exec($ch);

        curl_close($ch);

        return $output;
    }

    $datas = http_request("https://api.kawalcorona.com/");
    $datas = json_decode($datas, TRUE);

    $jumlahs = count($datas);


    for($i = 0; $i < 1; $i++){
        $hasils = $datas[$i]['attributes'];
    ?>

    <?php 
        $tanggal = $hasils['Last_Update'];
        $int = (int)$tanggal;
        $div = $int/1000;
        $tanggals = gmdate("Y-m-d\r\nH:i:s", $div);
    ?>

    <h6 class="covid-update-status">**Data terakhir update pada <strong><?=$tanggals?></strong></h6>
    <h6 class="covid-update-status">**Data source : <a href="https://kawalcorona.com/api">Kawalkorona.com</a></h6>

<?php
    }
?>