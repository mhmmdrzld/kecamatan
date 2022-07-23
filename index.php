<?php
require_once 'koneksi.php';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combobox Kecamatan Kelurahan</title>
</head>

<body>
    <select name="id_kecamatan" id="kecamatan">
        <option>Pilih Kecamatan</option>
        <?php
        $sql = mysqli_query($con, "SELECT * FROM kecamatan");
        while ($data = mysqli_fetch_array($sql)) {
            echo '<option value="' . $data['id'] . '">' . $data['nama'] . '</option>';
        }
        ?>
    </select>
    <br>
    <br>
    <br>
    <select name="id_kelurahan" id="kelurahan">
        <option>Pilih Kelurahan</option>
    </select>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(function() {
        $("#kecamatan").change(function() {
            var id_kecamatan = $("#kecamatan").val();
            $.ajax({
                type: 'POST',
                url: "kelurahan.php",
                data: {
                    id_kecamatan: id_kecamatan
                },
                async: false,
                success: function(data) {
                    $("#kelurahan").html(data);
                }
            });
        });
    });
</script>

</html>