<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: reservation.php');
    exit;
}

$restaurant = isset($_POST['restaurant']) ? $_POST['restaurant'] : '';
$date = isset($_POST['date']) ? $_POST['date'] : '';
$people = isset($_POST['people']) ? $_POST['people'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$name = isset($_POST['name']) ? $_POST['name'] : '';

$errors = [];

if ($restaurant === '') $errors[] = "Restaurant is required.";
if ($date === '') $errors[] = "Date is required.";
if ($people === '') $errors[] = "Number of people is required.";
if ($email === '') $errors[] = "Email is required.";
if ($name === '') $errors[] = "Customer name is required.";

if (!empty($errors)) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Form Error</title>
    </head>

    <body>
        <h1>Form Error</h1>
        <p>Please correct these errors:</p>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>

        <form action="reservation.php" method="get">
            <input type="hidden" name="restaurant" value="<?php echo $restaurant; ?>">
            <button type="submit">Back to form</button>
        </form>
    </body>

    </html>
<?php exit;
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reservation Confirmation</title>
</head>

<body>
    <h1>Reservation Confirmed</h1>
    <p>Here are the details of your reservation:</p>
    <ul>
        <li><strong>Restaurant:</strong> <?php echo $restaurant; ?></li>
        <li><strong>Date:</strong> <?php echo $date; ?></li>
        <li><strong>Number of people:</strong> <?php echo $people; ?></li>
        <li><strong>Email:</strong> <?php echo $email; ?></li>
        <li><strong>Customer name:</strong> <?php echo $name; ?></li>
    </ul>
    <p><a href="index.php">Back to restaurant list</a></p>
</body>

</html>