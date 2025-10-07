<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculations and Tasks</title>

    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }

        .container {
            width: 80%;
            margin: 30px auto;
        }

        .card {
            background-color: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            font-size: 1.8em;
            color: #333;
        }

        .card h2 {
            color: #007bff;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.1em;
            margin-bottom: 10px;
        }

        strong {
            font-weight: bold;
            color: #333;
        }

        /* Card Styling */
        .card {
            background-color: #ffffff;
            border-left: 4px solid #007bff;
        }

        /* Header */
        header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 30px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                width: 90%;
            }
            .card {
                padding: 15px;
            }
            h1, h2 {
                font-size: 1.6em;
            }
            p {
                font-size: 1em;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>PHP Tasks</h1>
    </header>

    <div class="container">
        <!-- Task 1: Introduce Yourself -->
        <div class="card">
            <h2>1. Introduce Yourself</h2>
            <?php
            $name = "Kenneth";
            $age = 20;
            $favorite_color = "black";
            ?>
            <p><strong>Hi, I'm <?php echo $name; ?>, I am <?php echo $age; ?> years old, and my favorite color is <?php echo $favorite_color; ?>.</strong></p>
        </div>

        <!-- Task 2: Simple Math -->
        <div class="card">
            <h2>2. Simple Math</h2>
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

        <!-- Task 3: Area and Perimeter of a Rectangle -->
        <div class="card">
            <h2>3. Area and Perimeter of a Rectangle</h2>
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

        <!-- Task 4: Temperature Converter -->
        <div class="card">
            <h2>4. Temperature Converter</h2>
            <?php
            $celsius = 234;
            $fahrenheit = ($celsius * 9 / 5) + 32;
            ?>
            <p><strong>Celsius:</strong> <?php echo $celsius; ?> °C</p>
            <p><strong>Fahrenheit:</strong> <?php echo $fahrenheit; ?> °F</p>
        </div>

        <!-- Task 5: Swapping Variables -->
        <div class="card">
            <h2>5. Swapping Variables</h2>
            <?php
            $x = 10;
            $y = 20;

            $temp = $x;  
            $x = $y;      
            $y = $temp;
            ?>
            <p><strong>Before Swapping:</strong> x = <?php echo $x; ?>, y = <?php echo $y; ?></p>
            <p><strong>After Swapping:</strong> x = <?php echo $y; ?>, y = <?php echo $x; ?></p>
        </div>

        <!-- Task 6: Salary Calculator -->
        <div class="card">
            <h2>6. Salary Calculator</h2>
            <?php
            $basic_salary = 5000;
            $allowance = 1500;
            $deduction = 500;
            $net_salary = ($basic_salary + $allowance) - $deduction;
            ?>
            <p><strong>Basic Salary:</strong> $<?php echo $basic_salary; ?></p>
            <p><strong>Allowance:</strong> $<?php echo $allowance; ?></p>
            <p><strong>Deduction:</strong> $<?php echo $deduction; ?></p>
            <p><strong>Net Salary:</strong> $<?php echo $net_salary; ?></p>
        </div>

        <!-- Task 7: BMI Calculator -->
        <div class="card">
            <h2>7. BMI Calculator</h2>
            <?php
            $weight = 70;
            $height = 1.75;
            $bmi = $weight / ($height * $height);
            ?>
            <p><strong>Weight:</strong> <?php echo $weight; ?> kg</p>
            <p><strong>Height:</strong> <?php echo $height; ?> m</p>
            <p><strong>BMI:</strong> <?php echo number_format($bmi, 2); ?></p>
        </div>

        <!-- Task 8: String Manipulation -->
        <div class="card">
            <h2>8. String Manipulation</h2>
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

        <!-- Task 9: Bank Account Simulation -->
        <div class="card">
            <h2>9. Bank Account Simulation</h2>
            <?php
            $balance = 1000;
            $deposit = 500;
            $withdraw = 300;
            $balance += $deposit;
            if ($balance >= $withdraw) {
                $balance -= $withdraw;
            }
            ?>
            <p><strong>Initial Balance:</strong> $1000</p>
            <p><strong>Deposit Amount:</strong> $<?php echo $deposit; ?></p>
            <p><strong>Withdrawal Amount:</strong> $<?php echo $withdraw; ?></p>
            <p><strong>Updated Balance:</strong> $<?php echo $balance; ?></p>
        </div>

        <!-- Task 10: Simple Grading System -->
        <div class="card">
            <h2>10. Simple Grading System</h2>
            <?php
            $math_score = 81;
            $english_score = 90;
            $science_score = 78;
            // Task 10: Simple Grading System
            $math_score = 81;
            $english_score = 90;
            $science_score = 78;

            // Calculate the average score
            $average_score = ($math_score + $english_score + $science_score) / 3;

            // Determine the grade based on the average score
            if ($average_score >= 90) {
                $grade = 'A';
            } elseif ($average_score >= 80) {
                $grade = 'B';
            } elseif ($average_score >= 70) {
                $grade = 'C';
            } elseif ($average_score >= 60) {
                $grade = 'D';
            } else {
                $grade = 'F';
            }
            ?>
            <p><strong>Math Score:</strong> <?php echo $math_score; ?></p>
            <p><strong>English Score:</strong> <?php echo $english_score; ?></p>
            <p><strong>Science Score:</strong> <?php echo $science_score; ?></p>
            <p><strong>Average Score:</strong> <?php echo number_format($average_score, 2); ?></p>
            <p><strong>Grade:</strong> <?php echo $grade; ?></p>
        </div>

        <!-- Task 11: Currency Converter -->
        <div class="card">
            <h2>11. Currency Converter</h2>
            <?php
            // Task 11: Currency Converter
            $amount = 100;  // Amount in GBP
            $usd_rate = 1.35;  // 1 GBP = 1.35 USD
            $eur_rate = 1.16;  // 1 GBP = 1.16 EUR
            $jpy_rate = 150.25;  // 1 GBP = 150.25 JPY

            // Convert the amount to different currencies
            $amount_in_usd = $amount * $usd_rate;
            $amount_in_eur = $amount * $eur_rate;
            $amount_in_jpy = $amount * $jpy_rate;
            ?>
            <p><strong>Amount in GBP:</strong> £<?php echo $amount; ?></p>
            <p><strong>Amount in USD:</strong> $<?php echo number_format($amount_in_usd, 2); ?></p>
            <p><strong>Amount in EUR:</strong> €<?php echo number_format($amount_in_eur, 2); ?></p>
            <p><strong>Amount in JPY:</strong> ¥<?php echo number_format($amount_in_jpy, 2); ?></p>
        </div>

        <!-- Task 12: Travel Cost Estimator -->
        <div class="card">
            <h2>12. Travel Cost Estimator</h2>
            <?php
            // Task 12: Travel Cost Estimator
            $distance = 300;           // Distance in kilometers
            $fuel_consumption = 12;    // Fuel consumption in km per liter
            $fuel_price = 1.45;        // Fuel price in currency per liter

            // Calculate the fuel needed for the trip
            $fuel_needed = $distance / $fuel_consumption;

            // Calculate the total travel cost
            $travel_cost = $fuel_needed * $fuel_price;
            ?>
            <p><strong>Distance to Travel:</strong> <?php echo $distance; ?> km</p>
            <p><strong>Fuel Consumption:</strong> <?php echo $fuel_consumption; ?> km/l</p>
            <p><strong>Fuel Price:</strong> $<?php echo $fuel_price; ?> per liter</p>
            <p><strong>Estimated Travel Cost:</strong> $<?php echo number_format($travel_cost, 2); ?></p>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 All Rights Reserved</p>
    </footer>
</body>
</html>

