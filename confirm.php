<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $restaurant = isset($_POST['restaurant']) ? trim($_POST['restaurant']) : '';
    $date = isset($_POST['date']) ? trim($_POST['date']) : '';
    $people = isset($_POST['people']) ? trim($_POST['people']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';

    if ($restaurant && $date && $people && $email && $name) {
        echo "<h1>Reservation Confirmation</h1>";
        echo "<p><strong>Restaurant:</strong> " . htmlspecialchars($restaurant) . "</p>";
        echo "<p><strong>Date:</strong> " . htmlspecialchars($date) . "</p>";
        echo "<p><strong>Number of people:</strong> " . htmlspecialchars($people) . "</p>";
        echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
        echo "<p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>";

    } else {
        echo "<h1>Error</h1>";
        echo "<p>Please fill in all the fields of the form.</p>";

        echo '<form action="reservation.php" method="get">';
        echo '<input type="hidden" name="restaurant" value="' . htmlspecialchars($restaurant) . '">';
        echo '<input type="submit" value="Go back to form">';
        echo '</form>';
    }
} else {
    echo "<h1>Error</h1>";
    echo "<p>Invalid request. Please submit the form first.</p>";
}
?>
