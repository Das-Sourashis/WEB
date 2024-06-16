<!-- run this  code initially to create database of words for the game  -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dictionary";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$file = fopen("\\path\\WordGame\\dict.txt", "r");
if (!$file) {
    die("Error opening file");
}

echo "Start\n";

$id = 1;
while (($line = fgets($file)) !== false) {
    $word = trim($line);
    $sql = "INSERT INTO words (word) VALUES ('$word')";

    if ($conn->query($sql) === true) {
        $id++;
    } else {
        echo "Error inserting word: $word - " . $conn->error . "<br>";
    }
}

fclose($file);
echo "\nFinish";
$conn->close();
?>
