<?php
require_once "car.php";
require_once "bike.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vehicle Form</title>
    <script>
        function toggleFields()
        {
            const carFields = document.getElementById("carFields");
            const bikeFields = document.getElementById("bikeFields");
            const vehicle = document.querySelector('input[name="vehicle"]:checked')

            if (vehicle && vehicle.value === "car") {
                carFields.style.display = "block";  // show car fields
                bikeFields.style.display = "none";
            } else {
                bikeFields.style.display = "block";
                carFields.style.display = "none";
            }
        }
    </script>
</head>

<body>

<form method="POST" action="">
    Do you have a car or a bike <br><br>
    <input type="radio" name="vehicle" value="car" onclick="toggleFields()" required> car
    <input type="radio" name="vehicle" value="bike" onclick="toggleFields()" required> bike <br><br>

    <!--hidden car fields-->
    <div id="carFields" style="display:none;">
        <input type="text" name="car_brand" placeholder="Car Brand" ><br><br>
        <input type="text" name="car_color" placeholder="Car Color" ><br><br>
        <input type="number" min="1900" max="2025" step="1" name="car_year" placeholder="Make year" ><br><br>
    </div>

    <!--hidden bike fields-->
    <div id="bikeFields" style="display:none;">
        <input type="text" name="bike_brand" placeholder="Bike Brand" ><br><br>
        <input type="text" name="bike_color" placeholder="Bike Color" ><br><br>
        <input type="number" min="1900" max="2025" step="1" name="bike_year" placeholder="Make year" ><br><br>
    </div>

    <button type="submit">enter</button><br><br>

</form>

</body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["car_brand"]) && isset($_POST["car_color"]) && isset($_POST["car_year"])) {

        $car = new car($_POST["car_brand"], $_POST["car_color"], $_POST["car_year"]);
        //display car details
        $car_details = $car->get_details();
        echo $car_details;

    } elseif (isset($_POST["bike_brand"]) && isset($_POST["bike_color"]) && isset($_POST["bike_year"])) {

        $bike = new bike($_POST["bike_brand"], $_POST["bike_color"], $_POST["bike_year"]);
        //display bike details
        $bike_details = $bike->get_details();
        echo $bike_details;
    }
}

?>