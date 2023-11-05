<?php
    $pers = array(
        array(
            "NAMA_PERUSAHAAN" => "Microsoft",
            "ASAL NEGARA" => "AMERIKA SERIKAT",
            "REKOR PENJUALAN" => "US$ 184,9 miliar atau setara Rp 2.699 triliun",
            "NILAI PASAR" => "US$ 2,1 triliun atau setara Rp 30 kuadriliun",
            "FOTO" => "2.jpg"
        ),
        array(
            "NAMA_PERUSAHAAN" => "Samsung Group",
            "ASAL NEGARA" => "KOREA SELATAN",
            "REKOR PENJUALAN" => "US$ 244,2 miliar atau setara Rp 3.565 triliun",
            "NILAI PASAR" => "US$ 367,3 miliar atau setara Rp 5.362 triliun",
            "FOTO" => "3.png"
        ),
        array(
            "NAMA_PERUSAHAAN" => "Alfabet Inc. (Google)",
            "ASAL NEGARA" => "AMERIKA SERIKAT",
            "REKOR PENJUALAN" => "US$ 257,5 miliar atau setara Rp 3.759 triliun",
            "NILAI PASAR" => "US$ 1,6 triliun atau setara Rp 23 kuadriliun",
            "FOTO" => "4.jpg "
        ),
        array(
            "NAMA_PERUSAHAAN" => "Tencent Holdings Ltd.",
            "ASAL NEGARA" => "CHINA",
            "REKOR PENJUALAN" => "US$ 86,9 miliar atau setara Rp 1.268 triliun",
            "NILAI PASAR" => "US$ 414,3 miliar atau setara Rp 6.048 triliun",
            "FOTO" => "5.png "
        ),
        array(
            "NAMA_PERUSAHAAN" => "Intel",
            "ASAL NEGARA" => "AMERIKA SERIKAT",
            "REKOR PENJUALAN" => "US$ 79 miliar atau setara Rp 1.153 triliun",
            "NILAI PASAR" => "US$ 190,3 miliar atau setara Rp 2.778 triliun",
            "FOTO" => "6.png"
        ),
        array(
            "NAMA_PERUSAHAAN" => "Taiwan Semiconductor Manufacturing Co.",
            "ASAL NEGARA" => "TAIWAN",
            "REKOR PENJUALAN" => "US$ 61,5 atau setara Rp 897 triliun",
            "NILAI PASAR" => "US$ 494 miliar atau setara Rp 7.212 triliun",
            "FOTO" => "7.jpg "
        ),
        array(
            "NAMA_PERUSAHAAN" => "Cisco Systems Inc.",
            "ASAL NEGARA" => "AMERIKA SERIKAT",
            "REKOR PENJUALAN" => "US$ 51,5 miliar atau setara Rp 751 triliun",
            "NILAI PASAR" => "US$ 213 miliar atau setara Rp 3.109 triliun",
            "FOTO" => "8.jpg "
        ),
        array(
            "NAMA_PERUSAHAAN" => "I.B.M Corporation",
            "ASAL NEGARA" => "AMERIKA SERIKAT",
            "REKOR PENJUALAN" => "US$ 67,3 miliar atau setara Rp 982 triliun",
            "NILAI PASAR" => "US$ 124 miliar atau setara Rp 1.810 triliun",
            "FOTO" => "9.jpeg "
        ),
        array(
            "NAMA_PERUSAHAAN" => "Meta Platfromr",
            "ASAL NEGARA" => "AMERIKA SERIKAT",
            "REKOR PENJUALAN" => "US$ 117 miliar atau setara Rp 1.708 triliun",
            "NILAI PASAR" => "US$ 499 miliar atau setara Rp 7.285 triliun",
            "FOTO" => "00.png "
        ),
        array(
            "NAMA_PERUSAHAAN" => "APPLE Inc.",
            "ASAL NEGARA" => "AMERIKA SERIKAT",
            "REKOR PENJUALAN" => "US$ 378,7 miliar atau setara Rp 5.529 triliun",
            "NILAI PASAR" => "US$ 2,6 triliun atau setara Rp 37 kuadriliun",
            "FOTO" => "1.JPG "
        ),
       
    );

    echo "<table border='1'>";
echo "<tr><th>NAMA_PERUSAHAAN</th><th>ASAL NEGARA</th><th>REKOR PENJUALAN</th><th>NILAI PASAR</th><th>FOTO</th></tr>";
$nomor = 1;
foreach ($pers as $per) {
    echo "<tr>";
    echo "<td>" . $per["NAMA_PERUSAHAAN"] . "</td>";
    echo "<td>" . $per["ASAL NEGARA"] . "</td>";
    echo "<td>" . $per["REKOR PENJUALAN"] . "</td>";
    echo "<td>" . $per["NILAI PASAR"] . "</td>";
    echo "<td><img src='" . $per["FOTO"] . "' width='100'></td>";
    echo "</tr>";
}
echo "</table>";
?>