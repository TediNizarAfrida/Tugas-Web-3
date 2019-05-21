<html><body>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Nama: <input type="text" name="nama" required="required"><br>
NIM: <input type="text" name="NIM" required="required"><br>
<input type="submit"><br><br>
<?php
$nama = $NIM = "";
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nama"]) && isset($_POST["NIM"])) {
$nama = $_POST["nama"];
$NIM = $_POST["NIM"];
if (!is_numeric($_POST["NIM"])){
	echo "Nim Harus berupa Digit Angka ";
}
else if(strlen($_POST["NIM"])!=10){
	echo "Nim Harus berjumlah 10 angka";
}
else if(!empty($nama) && !empty($NIM) ){
echo "<h2>Semangat Mencoba Kembali</h2>";
echo $nama . "<br>" . $NIM;
}
}
?>
</form>

</body></html>