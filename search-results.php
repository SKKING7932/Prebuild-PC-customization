<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
</head>
<body>
    <h1>Search Results</h1>

    <?php
    // Check if the 'q' parameter is present in the URL
    if (isset($_GET['q'])) {
        // Get the search query from the URL
        $search = $_GET['q'];
        $query .= "        SELECT * FROM product WHERE
ProductName AND ProductDescription LIKE '%$search%' ";
       
    } else {
        // If the 'q' parameter is not present, display a message
        echo "<p>No search query provided.</p>";
    }
    ?>

    <!-- Add your search results display code here -->

</body>
</html>
