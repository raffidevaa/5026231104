<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel - www.malasngoding.com</title>
</head>
<body>

	<h3>www.malasngoding.com</h3>
	<p>Seri Tutorial Laravel Lengkap Dari Dasar</p>
	<p>Ini adalah view blog. ada di route blog.</p>
    <?php
    $nama = "Eko";
    echo "Halo Apa Kabar? " . $nama;
    ?>
    <br>
    {{"Halo Apa Kabar? " . $nama}}
    <br>
    <?php
    date_default_timezone_set('Asia/Jakarta');
    echo date('d-m-Y H:i:s');
    ?>


</body>
</html>
