<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Benzinkosten Berechnung</title>
</head>
<body>
    <h1>Benzinkosten Berechnung</h1>
    <form method="post" action="">
        <label for="liter1">Tankfüllung 1 (Liter):</label>
        <input type="number" step="0.1" id="liter1" name="liter1" value="" required><br><br>
        <label for="liter2">Tankfüllung 2 (Liter):</label>
        <input type="number" step="0.1" id="liter2" name="liter2" value="" required><br><br>
        <label for="preis">Preis pro Liter (€):</label>
        <input type="number" step="0.001" id="preis" name="preis" value="" required><br><br>
        <input type="submit" value="Berechnen">
    </form>

    <?php
    function calculateFullCapacityPrice($literPrice, $tankCapacity1, $tankCapacity2)
    {
        $fullTankCapacity = $tankCapacity1 + $tankCapacity2;
        $result = $fullTankCapacity * $literPrice;
        return "Die Benzinkosten betragen für " . $fullTankCapacity . " Liter " . $result . "€";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $liter1 = floatval($_REQUEST['liter1']);
        $liter2 = floatval($_REQUEST['liter2']);
        $preis = floatval($_REQUEST['preis']);

        echo "<p>" . calculateFullCapacityPrice($preis, $liter1, $liter2) . "</p>";
    }
    ?>
</body>
</html>