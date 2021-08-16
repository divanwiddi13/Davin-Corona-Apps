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

    $data = http_request("https://api.kawalcorona.com/indonesia/provinsi/");
    $data = json_decode($data, TRUE);

    $jumlah = count($data);
    $jumlahs = count($datas);
    $nomor = 0;


    for($i = 0; $i < $jumlah; $i++){
        $hasils = $datas[$i]['attributes'];
        $hasil = $data[$i]['attributes'];
        $nomor++;
    ?>

    <?php 
        
        $tanggal = $hasils['Last_Update'];
        $int = (int)$tanggal;
        $div = $int/1000;
        $tanggals = gmdate("Y-m-d\r\nH:i:s", $div);
    ?>

    <tr>
        <td><?=$nomor?></td>
        <td><?=$hasil['Provinsi']?></td>
        <td><?=$hasil['Kasus_Posi']?></td>
        <td><?=$hasil['Kasus_Semb']?></td>
        <td><?=$hasil['Kasus_Meni']?></td>
        <td><?=$tanggals?></td>
    </tr>

<?php
    }
?>