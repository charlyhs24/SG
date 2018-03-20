<?php
$nama = $_POST['nama'];
$umur = $_POST['umur'];
echo $nama;
echo $umur;
?>
<form action="form_handling.php" method="post">
    <input type="text" name="nama"><br>
    <input type="text" name="umur"><br>
    <input type="submit" name="submit">
</form>
