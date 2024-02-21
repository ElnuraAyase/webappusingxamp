<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Classes</title>
    <!-- maybe I will add css if needed  -->
</head>
<body>
    <h1>Purchase Classes</h1>
    <form action="process_purchase.php" method="POST">
        <label for="class_type">Select Class Type:</label><br>
        <select id="class_type" name="class_type">
            <option value="beginner">Beginner</option>
            <option value="intermediate">Intermediate</option>
            <option value="advanced">Advanced</option>
        </select><br>
        <label for="num_lessons">Number of Lessons:</label><br>
        <input type="number" id="num_lessons" name="num_lessons" min="1" max="40"><br>
        <input type="submit" value="Purchase">
    </form>
</body>
</html>
