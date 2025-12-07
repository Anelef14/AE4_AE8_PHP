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


<form action="confirm.php" method="post">

        <label for="restaurant">Restaurant:</label><br>
        <input type="text" id="restaurant" name="restaurant"
            value="<?php echo htmlspecialchars($restaurant); ?>"
            <?php if ($restaurant) echo "readonly"; ?>>
        <br><br>

        <label for="date">Reservation date:</label><br>
        <input type="date" id="date" name="date" >
        <br><br>

        <label for="people">Number of people:</label><br>
        <input type="number" id="people" name="people" min="1" max="20" >
        <br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" >
        <br><br>

        <label for="name">Your name:</label><br>
        <input type="text" id="name" name="name" >
        <br><br>

        <input type="submit" value="Send reservation">
    </form>
</body>

</html>