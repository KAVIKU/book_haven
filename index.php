<?php
// Database credentials
$host = "localhost";
$user = "root";
$password = "";
$database = "book_haven";

// Connect to the database
$conn = new mysqli($host, $user, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch books from the database
$sql = "SELECT * FROM books";
$result = $conn->query($sql);

// Display the books
echo "<h1>Welcome to Book Haven!</h1>";
echo "<h2>Available Books:</h2>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p><strong>{$row['title']}</strong> by {$row['author']} - \${$row['price']}</p>";
    }
} else {
    echo "<p>No books available!</p>";
}

// Close the connection
$conn->close();
?>
<?php
// Form to add new books
echo "<h3>Add a New Book:</h3>";
echo '<form method="POST" action="add_book.php">
    <label for="title">Title:</label>
    <input type="text" name="title" required><br>
    <label for="author">Author:</label>
    <input type="text" name="author" required><br>
    <label for="price">Price:</label>
    <input type="number" step="0.01" name="price" required><br>
    <button type="submit">Add Book</button>
</form>';
?>
<?php
// Form to add new books
echo "<h3>Add a New Book:</h3>";
echo '<form method="POST" action="add_book.php">
    <label for="title">Title:</label>
    <input type="text" name="title" required><br>
    <label for="author">Author:</label>
    <input type="text" name="author" required><br>
    <label for="price">Price:</label>
    <input type="number" step="0.01" name="price" required><br>
    <button type="submit">Add Book</button>
</form>';
?>
