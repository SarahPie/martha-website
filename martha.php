<?php
$user = "martha";
$password = "martha12!scuapp";
$host = "mysql.engr.scu.edu";
$dbase = "sdb_martha";
$table = "lessons";
$url = "https://martha.engr.scu.edu";
$connection= new mysqli($host, $user, $password, $dbase);
 if ($connection->connect_error) {
 die("Connection failed: " . $connection->connect_error);
} else {
$sql = "SELECT lesson, filepath FROM lessons";
$result = $connection->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>" . $row["lesson"]. "</td><td><a href="" . $row["filepath"] . "">" . $row["filepath"] . "</a></td></tr>";
     }
echo "</table>";
} else { echo "0 results"; }
$connection->close();
}
?>
