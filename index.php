<?php
    // Default location : Paris
    if (isset($_GET['location']))
        $location = $_GET['location'];
    else
        $location = 'Paris';
    include "callapi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weather App</title>
</head>
<body>
    <?= $weather['temp'] ?>

    <!-- Global Script -->
    <script src="js.js">

    </script>
</body>
</html>