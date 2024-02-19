<?php
include '../PHP_dbinclude_EM/db_connect.php'; 

// Generate random students for testing
for ($i = 0; $i < 10; $i++) {
    $first_name = "Student" . ($i + 1);
    $last_name = "Lastname" . ($i + 1);
    $reason = "Reason for learning language for student " . ($i + 1);
    $level = ['beginner', 'intermediate', 'advanced'][rand(0, 2)]; // Random level
    $lessons_balance = rand(1, 20); // Random number of lessons balance

    // Insert student into database
    $sql = "INSERT INTO Register (first_name, last_name, description, level, lessons_balance) VALUES ('$first_name', '$last_name', '$reason', '$level', $lessons_balance)";
    $conn->query($sql);
}

// Retrieve and display existing students
$sql = "SELECT register_id, first_name, last_name, description AS reason, level, lessons_balance FROM Register";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Reason for Learning</th><th>Level</th><th>Lessons Balance</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row['register_id']."</td><td>".$row['first_name']."</td><td>".$row['last_name']."</td><td>".$row['reason']."</td><td>".$row['level']."</td><td>".$row['lessons_balance']."</td></tr>";
    }
    echo "</table>";
} else {
    echo "No students found";
}

$conn->close(); 
?>
