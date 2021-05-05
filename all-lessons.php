<!DOCTYPE html>
<html>
<head>
    <title>MARTHA</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="app.js"></script>
    <meta name="theme-color" content="#FFE1C4">
    <link rel="stylesheet" href="style.css">
    <link 
    <link rel="icon" 
      type="image/png" 
      href="/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="manifest" href="manifest.json">
</head>
<body>

<h1>MARTHA: An Offline Educational Tool for Cameroonian Refugees</h1>
<strong id="instructions"> Select a lesson to view it </strong>
<a href="/index.html">Back to form</a>
<style>
table {
width: 100%;
padding-bottom: 20px;
color: #5341AF;
font-size: 18px;
text-align: left;
}
th {
background-color: #5341AF;
color: white;
}
</style>
<table>
<tr>
<th>Lesson</th>
<th>URL</th>
</tr>
<?php
    //variables are set to x for privacy reasons
$user = "x";
$password = "x";
$host = "x";
$dbase = "x";
$table = "x";
$url = "https://martha.engr.scu.edu";
$connection= new mysqli($host, $user, $password, $dbase);
 if ($connection->connect_error) {
 die("Connection failed: " . $connection->connect_error);
} else {
$sql = "SELECT x, y FROM lessons";
$result = $connection->query($sql);
if ($result) {
// output data of each row
while($row = $result->fetch_assoc()) {
      echo "<tr><td>" . $row["lesson"]. "</td><td><a href='" . $row["filepath"] . "'>" . $row["filepath"] . "</a></td></tr>";

}
echo "</table>";
} else { echo "0 results"; }
$connection->close();
}
?>
<br>
<hr>
<br>
<h3> Troubleshooting for Firefox </h3>
    <h4> ServiceWorker registration failed. Sorry about that. </h4>
    <p> Add the MARTHA website to your "Delete cookies and site data when Firefox is closed" exceptions. To do this select the menu icon in the top right > Options > Privacy & Security. Under the "Cookies and Site Data" section, select "Manage Exceptions" and add <strong>https://martha.engr.scu.edu/</strong>.</p>
    <h4> PDF lessons are  not viewable in browser </h4>
    <p> Change Portable Document Format (PDF) to "Preview in Firefox". To do this select the menu icon in the top right > Options > Search "Applications". Find Portable Document Format (PDF) in the list and change Action to "Preview in Firefox". </p>
</body>
</html>
