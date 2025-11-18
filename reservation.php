<?php
$restaurant = isset($_GET['restaurant']) ? $_GET['restaurant'] : "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserve</title>
</head>

<body>
    <h1>Reservation Form</h1>


    <form action="" method="post">

        <label for="restaurant">Restaurant:</label><br>
        <input type="text" id="restaurant" name="restaurant"
            value="<?php echo htmlspecialchars($restaurant); ?>"
            <?php if ($restaurant) echo "readonly"; ?>>
        <br><br>

        <label for="date">Reservation date:</label><br>
        <input type="date" id="date" name="date" required>
        <br><br>

        <label for="people">Number of people:</label><br>
        <input type="number" id="people" name="people" min="1" max="20" required>
        <br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required>
        <br><br>

        <label for="name">Your name:</label><br>
        <input type="text" id="name" name="name" required>
        <br><br>

        <input type="submit" value="Send reservation">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $restaurant = $_POST["restaurant"];
        $date = $_POST["date"];
        $people = $_POST["people"];
        $email = $_POST["email"];
        $name = $_POST["name"];

        echo "<h2>Reservation details:</h2>";
        echo "Restaurant: " . htmlspecialchars($restaurant) . "<br>";
        echo "Date: " . htmlspecialchars($date) . "<br>";
        echo "People: " . htmlspecialchars($people) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Name: " . htmlspecialchars($name) . "<br>";
    }
    ?>
</body>

</html>