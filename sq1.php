<?php
$servername = "localhost";
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$dbname = "a9b348";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

// Insert data
$sql = "INSERT INTO users (name, Mail) VALUES ('John Doe', '39john@example.com')";
if ($conn->query($sql) === TRUE) {
echo "New record created successfully<br>";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

// Select data
$sql = "SELECT id, name, Mail FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// Output data of each row
while($row = $result->fetch_assoc()) {
echo "id: " . $row["id"]. " - Name: ". $row["name"]. " - Email: " . $row["Mail"]. "<br>";
}
} else {

echo "0 results";
}

// Update data
$sql = "UPDATE users SET Mail='39john.doe@example.com' WHERE name='39John Doe'";
if ($conn->query($sql) === TRUE) {
echo "Record updated successfully<br>";
} else {
echo "Error updating record: " . $conn->error;
}

// Delete data
$sql = "DELETE FROM users WHERE name='39John Doe'";
if ($conn->query($sql) === TRUE) {
echo "Record deleted successfully<br>";
} else {
echo "Error deleting record: " . $conn->error;
}

// Close connection
$conn->close();
?>
