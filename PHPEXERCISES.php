<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculations</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <!-- Rectangle Calculations -->
        <div class="card">
            <h2>Rectangle Calculations</h2>
            <?php
            $length = 22;
            $width = 34;
            $area = $length * $width;
            $perimeter = 2 * ($length + $width);
            ?>
            <p><strong>Length:</strong> <?php echo $length; ?> units</p>
            <p><strong>Width:</strong> <?php echo $width; ?> units</p>
            <p><strong>Area:</strong> <?php echo $area; ?> square units</p>
            <p><strong>Perimeter:</strong> <?php echo $perimeter; ?> units</p>
        </div>

        <!-- Bank Account -->
        <div class="card">
            <h2>Bank Account</h2>
            <?php
            $balance = 1000;  
            $deposit = 500;   
            $withdraw = 300;  
            $balance += $deposit;
            if ($balance >= $withdraw) {
                $balance -= $withdraw;
            } else {
                echo "<p>Insufficient balance for withdrawal.</p>";
            }
            ?>
            <p><strong>Initial Balance:</strong> $<?php echo 1000; ?></p>
            <p><strong>Deposit Amount:</strong> $<?php echo $deposit; ?></p>
            <p><strong>Withdrawal Amount:</strong> $<?php echo $withdraw; ?></p>
            <p><strong>Updated Balance:</strong> $<?php echo $balance; ?></p>
        </div>

        <!-- BMI Calculation -->
        <div class="card">
            <h2>BMI Calculation</h2>
            <?php
            $weight = 70;  
            $height = 1.75;  
            $bmi = $weight / ($height * $height);
            ?>
            <p><strong>Weight:</strong> <?php echo $weight; ?> kg</p>
            <p><strong>Height:</strong> <?php echo $height; ?> m</p>
            <p><strong>BMI:</strong> <?php echo number_format($bmi, 2); ?></p>
        </div>

        <!-- Currency Conversion -->
        <div class="card">
            <h2>Currency Conversion</h2>
            <?php
            $amount = 100;  
            $usd_rate = 1.35;  
            $eur_rate = 1.16;  
            $jpy_rate = 150.25;
            $amount_in_usd = $amount * $usd_rate;
            $amount_in_eur = $amount * $eur_rate;
            $amount_in_jpy = $amount * $jpy_rate;
            ?>
            <p><strong>Amount in GBP:</strong> £<?php echo $amount; ?></p>
            <p><strong>Amount in USD:</strong> $<?php echo number_format($amount_in_usd, 2); ?></p>
            <p><strong>Amount in EUR:</strong> €<?php echo number_format($amount_in_eur, 2); ?></p>
            <p><strong>Amount in JPY:</strong> ¥<?php echo number_format($amount_in_jpy, 2); ?></p>
        </div>

        <!-- Simple Math -->
        <div class="card">
            <h2>Simple Math</h2>
            <?php
            $a = 1234;
            $b = 4;
            $sum = $a + $b;
            $difference = $a - $b;
            $product = $a * $b;
            $quotient = $a / $b;
            ?>
            <p><strong>Sum:</strong> <?php echo $sum; ?></p>
            <p><strong>Difference:</strong> <?php echo $difference; ?></p>
            <p><strong>Product:</strong> <?php echo $product; ?></p>
            <p><strong>Quotient:</strong> <?php echo $quotient; ?></p>
        </div>

        <!-- String Analysis -->
        <div class="card">
            <h2>String Analysis</h2>
            <?php
            $sentence = "PHP is a powerful scripting language.";
            $char_count = strlen($sentence);
            $word_count = str_word_count($sentence);
            $uppercase = strtoupper($sentence);
            $lowercase = strtolower($sentence);
            ?>
            <p><strong>Original Sentence:</strong> <?php echo $sentence; ?></p>
            <p><strong>Number of Characters:</strong> <?php echo $char_count; ?></p>
            <p><strong>Number of Words:</strong> <?php echo $word_count; ?></p>
            <p><strong>Sentence in Uppercase:</strong> <?php echo $uppercase; ?></p>
            <p><strong>Sentence in Lowercase:</strong> <?php echo $lowercase; ?></p>
        </div>

        <!-- Variable Swapping -->
        <div class="card">
            <h2>Variable Swapping</h2>
            <?php
            $x = 10;
            $y = 20;
            $temp = $x;
            $x = $y;
            $y = $temp;
            ?>
            <p><strong>Before Swapping:</strong> x = <?php echo 10; ?>, y = <?php echo 20; ?></p>
            <p><strong>After Swapping:</strong> x = <?php echo $x; ?>, y = <?php echo $y; ?></p>
        </div>

        <!-- Temperature Converter -->
        <div class="card">
            <h2>Temperature Converter</h2>
            <?php
            $celsius = 234;
            $fahrenheit = ($celsius * 9/5) + 231;
            ?>
            <p><strong>Celsius:</strong> <?php echo $celsius; ?> °C</p>
            <p><strong>Fahrenheit:</strong> <?php echo $fahrenheit; ?> °F</p>
        </div>

        <!-- Travel Cost Calculator -->
        <div class="card">
            <h2>Travel Cost Calculator</h2>
            <?php
            $distance = 300;  
            $fuel_consumption = 12;  
            $fuel_price = 1.45;
            $fuel_needed = $distance / $fuel_consumption;
            $travel_cost = $fuel_needed * $fuel_price;
            ?>
            <p><strong>Distance to Travel:</strong> <?php echo $distance; ?> km</p>
            <p><strong>Fuel Consumption:</strong> <?php echo $fuel_consumption; ?> km/l</p>
            <p><strong>Fuel Price:</strong> $<?php echo $fuel_price; ?> per liter</p>
            <p><strong>Estimated Travel Cost:</strong> $<?php echo number_format($travel_cost, 2); ?></p>
        </div>
    </div>
</body>
</html>
