<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>

    <?php
    if (isset($_POST["firstname"], $_POST["lastname"])) {
        $firstname = htmlspecialchars($_POST["firstname"]);
        $lastname = htmlspecialchars($_POST["lastname"]);

        echo "<p>Welcome $firstname $lastname !</p>";

        $booking = [];

        if (isset($_POST["accom"])) {
            $booking[] = "Accommodation";
        }
        if (isset($_POST["4day"])) {
            $booking[] = "Four-day tour";
        }
        if (isset($_POST["10day"])) {
            $booking[] = "Ten-day tour";
        }

        echo "<p>You are now booked on the "
            . implode(" and ", $booking) . "</p>";

        if (isset($_POST["species"])) {
            $species = "";
            switch ($_POST["species"]) {
                case "M": $species = "Human"; break;
                case "D": $species = "Dwarf"; break;
                case "E": $species = "Elf"; break;
                case "H": $species = "Hobbit"; break;
            }
            echo "<p>Species: $species</p>";
        }

        if (isset($_POST["age"])) {
            echo "<p>Age: "
                . htmlspecialchars($_POST["age"]) . "</p>";
        }

        if (isset($_POST["food"])) {
            echo "<p>Meal Preference: "
                . htmlspecialchars($_POST["food"]) . "</p>";
        }

        if (isset($_POST["partysize"])) {
            echo "<p>Number of travellers: "
                . htmlspecialchars($_POST["partysize"]) . "</p>";
        }
    } else {
        echo '<p>Please fill in the <a href="register.html">booking form</a>.</p>';
    }
    ?>
</body>
</html>