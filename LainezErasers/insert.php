<?php
require "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $country = $_POST["country"];
    $swift_code = $_POST["swift_code"];
    $assets_usd = $_POST["assets_usd"];
    $rating = $_POST["rating"];
    
    // PHP calculation - Risk Level
    if ($rating >= 8) {
        $risk_level = "Low";
    } elseif ($rating >= 6) {
        $risk_level = "Medium";
    } else {
        $risk_level = "High";
    }

    $sql = "INSERT INTO banks (name, country, swift_code, assets_usd, rating, risk_level)
            VALUES ('$name', '$country', '$swift_code', '$assets_usd', '$rating', '$risk_level')";

    if ($conn->query($sql) === true) {
        echo "<h2>Bank inserted successfully!</h2>";
        echo "<p>Risk Level: $risk_level</p>";
        echo "<a href='index.html'>Add Another Bank</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}