<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dictionary";

    $conn = new mysqli($servername, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $rand = $_POST["p"];

    $sql = "SELECT word
            FROM words
            ORDER BY RAND()
            LIMIT $rand";
    
    $res = mysqli_query($conn, $sql);
    
    if ($res && mysqli_num_rows($res) > 0) {
        $concatenatedWords = "";

        while ($row = mysqli_fetch_assoc($res)) {
            $concatenatedWords .= $row["word"] . ",";
        }

        $concatenatedWords = rtrim($concatenatedWords, ",");
        echo $concatenatedWords;
    } else {
        echo "No results found";
    }

    $conn->close();
?>
