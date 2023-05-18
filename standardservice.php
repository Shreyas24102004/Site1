<?php
include '_dbconnect.php';
session_start();

if (isset($_POST['submit'])) {
    $client = $_SESSION['User_Name'];
    $client_contact = $_SESSION['User_Contact'];
    $vehicle = $_POST['vehicle_name'];
    $plate = $_POST['vehicle_plate'];
    $date = $_POST['delivery_date'];
    $time = $_POST['delivery_time'];
    $payment_type = $_POST['paymentType'];

    if (empty($vehicle) || empty($plate) || empty($date) || empty($time) || empty($payment_type)) {
        echo "<script>alert('Please Fill Inputs')</script>";
    } else {
        $amount = 5899; // Set the value of grand_total here
        $service = "Standard service";
        $insert = "INSERT INTO orders (client_name, client_contact, vehicle_name, vehicle_plate, delivery_date, delivery_time, grand_total, payment_type,gstn) VALUES ('$client', '$client_contact', '$vehicle', '$plate', '$date', '$time', '$amount', '$payment_type','$service')";
        $register = mysqli_query($conn, $insert);
        if ($register) {
            echo "<script>alert('Order placed successfully')</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        header("location: thankyou.html");
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Service</title>
    <link rel="stylesheet" href="basic_service.css">
</head>
<body>
    <h1>Book Service</h1>
    <form method="POST">
        <label>Service Type: Standard Service</label><br><br>
        <input type="text" name="client_name" value="<?php echo $_SESSION['User_Name']; ?>" hidden>
        <input type="text" name="client_contact" value="<?php echo intval($_SESSION['User_Contact']); ?>" hidden>
        <label for="model">Car Model Name:</label>
        <input type="text" name="vehicle_name"><br><br>
        <label for="plate">Number Plate:</label>
        <input type="text" name="vehicle_plate"><br><br>
        <label for="delivery_date">Delivery Date:</label>
        <input type="date" name="delivery_date"><br><br>
        <label for="delivery_time">Delivery Time:</label>
        <input type="time" name="delivery_time"><br><br>
        <input type="hidden" name="grand_total" value="4799">
        <label for="clientContact" class="col-sm-2 control-label">Payment Type</label>
        <div class="col-sm-4">
            <select class="form-control" name="paymentType" id="paymentType">
                <option value="">~~SELECT~~</option>
                <option value="2">Cash</option>
                <option value="4">Phone Pe</option>
                <option value="5">Google Pay</option>
                <option value="6">Amazon Pay</option>
                <option value="1">Cheque</option>
                <option value="3">Credit Card</option>
            </select>
        </div>
        <input type="hidden" name="service" value="Basic Service">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
