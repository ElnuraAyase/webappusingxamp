<?php
// Include database connection script
include '../PHP_dbinclude_EM/db_connect.php';

// Fetch calendar data from the database
$sql = "SELECT * FROM your_calendar_table"; // Change 'your_calendar_table' to your actual table name
$result = $conn->query($sql);

// Initialize variable to store calendar content
$calendarContent = '';

// Check if there are rows in the result set
if ($result->num_rows > 0) {
    // Start building the calendar content
    $calendarContent .= "<div class='calendar-content'>";
    $calendarContent .= "<table>";
    $calendarContent .= "<tr><th>Date</th><th>Lesson</th><th>Student</th></tr>";

    // Loop through each row in the result set
    while ($row = $result->fetch_assoc()) {
        // Add data from each row to the calendar content
        $calendarContent .= "<tr>";
        $calendarContent .= "<td>{$row['date']}</td>"; // Assuming there's a 'date' column in your table
        $calendarContent .= "<td>{$row['lesson']}</td>"; // Assuming there's a 'lesson' column in your table
        $calendarContent .= "<td>{$row['student']}</td>"; // Assuming there's a 'student' column in your table
        $calendarContent .= "</tr>";
    }

    // Close the table and container div
    $calendarContent .= "</table>";
    $calendarContent .= "</div>";
} else {
    // If no rows are found, display a message
    $calendarContent = "<p>No calendar data found.</p>";
}

// Output the calendar content
echo $calendarContent;
?>
