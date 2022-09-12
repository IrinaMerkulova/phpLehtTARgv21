<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>402/ Tsüklid</title>
</head>
<body>
<h2>Tee tsükliga 20 "checkboxi".
    Pane neile kõigile oma nimi stiilis box[1], box[2], jne.</h2>
<?php
$i=1;
    while($i<=20){
        echo "<input type='checkbox' id='$i' name='box[]' value='$i'>";
        echo "<label for='$i'>box".$i."</label>";
        echo "<br>";
        $i++;
    }
?>
<h2> Tee tsükliga 20 "teksti lahtrit".
    Pane neile kõigile oma nimi stiilis cell[1], cell[2], jne.</h2>
<?php
$i=1;
while($i<=20){
    echo "<input type='text' id=t'$i' name='cell[]' value=''>";
    echo "<label for=t'$i'> cell".$i."</label>";
    echo "<br>";
    $i++;
}
?>

</body>
</html>