<?php
function convertTemperature($celcius) {
    return ($celcius * 9/5) + 32;
}
$result = convertTemperature(20);
echo "<p>your temperature in Fahrenheit is: $result</p>";
?>