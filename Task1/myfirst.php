<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <title>Using PHP Variables, arrays and operators</title>
    <!-- add other meta -->
</head>
<body>
    <h1>Using PHP Variables, arrays and operators</h1>
<?php
    $mark = array (85,85,95); //declare and initialize an array
    $mark[1] = 90; //modify second element
    $ave = ($mark[0] + $mark[1] + $mark[2]) / 3; //calculate average
    if ($ave >= 50)
        $status = "PASSED";
    else
        $status = "FAILED";
    echo "<p>The average score is $ave. You $status.</p>";
?>
</body>
</html> 