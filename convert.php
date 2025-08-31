<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $celcius = $_POST['temperature'];

    function convertTemperature($celcius) {
    return (($celcius * 9/5) + 32);
}

$result = convertTemperature($celcius);

echo "<h2>Conversion Result";
echo "<p>$celcius °C = $result °F</p>";
echo '<a href="index.html">convert another</a>';
}
?>