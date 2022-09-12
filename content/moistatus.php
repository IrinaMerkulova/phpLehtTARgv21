<h2>Mõistatus</h2>
<h5>Arva ära 2 arvu</h5>

<?php
// eemalda urlist muutujad
function clearVarsExcept($url, $varname) {
    return strtok(basename($_SERVER['REQUEST_URI']),"?").
        "?$varname=".$_REQUEST[$varname];
}

$arv1=10;
$arv2=10;
echo "Kui me liidame 2 arvu kokku, siis tuleb ".($arv1+$arv2);
echo "<br>";
echo "Kui esimene arv on ruudus = ".pow($arv1, 2);
echo "<br>";
echo "Kui esimene arv jagada teisega = ".($arv1/$arv2);
?>
<h2> Kontrolli arvud:
</h2>
<form name="arvud" action="<?=clearVarsExcept(basename($_SERVER['REQUEST_URI']),"leht")?>" method='post'">
    <label for="number1">Esimene arv</label>
    <input type="number" name="number1" id="number1">

    <br>
    <label for="number2">Teine arv</label>
    <input type="number" name="number2" id="number2">
    <br>
    <input type="submit" value="Kontrolli">

</form>
<?php
if(isSet($_REQUEST["number1"])) {
    if ($_REQUEST["number1"] == $arv1) {
        if ($_REQUEST["number2"] == $arv2) {
            echo "Õige!";
            echo '<body style="background-color: green">';
        }
    }
}
?>
