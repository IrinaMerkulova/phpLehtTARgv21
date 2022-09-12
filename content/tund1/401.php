<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>401 ylesanne</title>
</head>
<body>
<?php
//andmed massivis
$data=[
    "nimi"=> "Irina Merkulova",
    "aadress"=> "Sõpruse pst, 184 Tallinn",
    "pilt"=>"tthk.png",
    "koduleht"=>"http://www.tthk.ee"
];
?>
<h2>Ülesanne 1 / Andmed massiivist</h2>
<p>
    <strong>
        <?=$data["nimi"]?>
    </strong>
</p>
<p>
    <i>
        <?=$data["aadress"]?>
    </i>
</p>
<img src="<?=$data["pilt"]?>" alt="pildike">
<br>
<a href="<?=$data["koduleht"]?>" target="_blank">
    TTHK koduleht</a>
<h2>Ülesanne 1 massiv array funktsiooniga</h2>
<?php
$array=array("Irina Merkulova", "Sõpruse pst 184",
"tthk.png", "www.tthk.ee");

echo "<b>$array[0]</b>";
echo "<br>";
echo "<i>$array[1]</i>";
echo "<br>";
echo "<img src='$array[2]' alt='pildike2'>";
echo "<br>";
echo "<a href='https://$array[3]'>Koduleht</a>";

?>

</body>
</html>



