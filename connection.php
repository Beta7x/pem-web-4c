<?php
$conn_str = "host=john.db.elephantsql.com" .
    "port=5432 " .
    "user=lwrddtov " .
    "dbname=keetidsv " .
    "password=v-eGzBFwdbHAx-UJq-zq76bEeD9TfFfD";
$conn = pg_connect($conn_str);

if($conn) {
    echo "<h3>Koneksi Berhasil</h3>";
} else {
    echo "<h3>Koneksi GAGAL TERSAMBUNG</h3>";
}
?>