<?php
require_once 'koneksi.php';

$sql = mysqli_query($con, "SELECT * FROM kelurahan WHERE idkec = '$_POST[id_kecamatan]'");
echo '<option>Pilih Kelurahan</option>';
while ($data = mysqli_fetch_array($sql)) {
    echo '<option value="' . $data['id'] . '">' . $data['nama'] . '</option>';
}
