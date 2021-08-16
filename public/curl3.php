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

    $data = http_request("https://api.covid19api.com/total/country/indonesia");
    $data = json_decode($data, TRUE);

    $jumlah = count($data);
    $nomor = 0;

    for($i = $jumlah-1; $i > -1; $i--){
        $hasil = $data[$i];
        $nomor++;
    ?>

    <?php
        $dates = $hasil['Date'];
        $tanggal = substr($dates, 0, 10);
    ?>

    <tr>
        <td><?=$nomor?></td>
        <td><?=$hasil['Country']?></td>
        <td><?=$hasil['Confirmed']?></td>
        <td><?=$hasil['Recovered']?></td>
        <td><?=$hasil['Deaths']?></td>
        <td><?=$tanggal?></td>
    </tr>

<?php
    }
?>