<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <title>Using PHP Variables, arrays and operators</title>
    <!-- add other meta -->
</head>
<body>
    <h1>PHP Variables, Arrays and Operators</h1>
<?php
    $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"); //declare and initialize an array
    echo "<p>The days of the week in English are: <br>" . implode(", ", $days) . ".</p>";

    $days = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"); //declare and initialize an array
    echo "<p>The days of the week in French are: <br>" . implode(", ", $days) . ".</p>";
?>
</body>
</html>
    
