<?php

// MySQL database connection parameters
$servername = "silo.cs.indiana.edu";
$username = "navya";
$password = "navya";
$database = "exercise";
$port = "21247"; // Replace <PORT> with your MySQL server's port number

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query
$query = "select username, avg(rating) from performers, ratings where performers.username = ratings.player group by username having avg(rating) >= (select avg(rating) from ratings);";

// Execute query
$result = $conn->query($query);

// Print results in HTML format
echo "<html><head><title>MySQL Query Results</title></head><body>";
echo "<h1>MySQL Query Results</h1>";
echo "<table border='1'><tr>";

// Print column headers
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    foreach ($row as $column => $value) {
        echo "<th>$column</th>";
    }
    echo "</tr>";

    // Print rows
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
} else {
    echo "0 results";
}
echo "</table>";
echo "</body></html>";

// Close connection
$conn->close();

?>
