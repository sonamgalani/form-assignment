<?php
$name = $mis = $phone = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $mis = $_POST["mis"];
  $phone = $_POST["phone"];
 }
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myDB";
// Create connection
$conn = new mysqli($servername, $username, $password);
$sql = "CREATE DATABASE IF NOT EXISTS myDB";
$conn->query($sql);
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "CREATE TABLE student (

	name VARCHAR(40) NOT NULL,
	mis INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	phone INT(10)
	)";
	
$conn->query($sql);
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "INSERT INTO student (name, mis, phone)
VALUES ('$name', '$mis', '$phone')";
mysqli_query($conn, $sql);
$sql = "SELECT name, mis, phone FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "mis: " . $row["mis"]. " - Name: " . $row["name"]. " Phone: " . $row["phone"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
echo "<html><body><br><form><input type='submit' name='submit' value='Submit another response' formaction='form.php'></form> </body></html>";

?> 
