<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $postData = json_decode(file_get_contents("php://input"), true);

    $roll_no = $postData["roll_no"];
    $quizResults = $postData["quizResults"];

    $correctCount = 0;
    $wrongCount = 0;
    $response = "";

    foreach ($quizResults as $result) {
        $questionNumber = $result["questionNumber"];
        $selectedOption = $result["selectedOption"];
        $correctOption = $result["correctOption"];

        if ($selectedOption === $correctOption) {
            $correctCount++;
        } else {
            $wrongCount++;
        }
        $response .= $questionNumber . '_' . $selectedOption . '_' . $correctOption . ",";
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "quiz_result";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO quiz (rollno, correct, wrong, response) VALUES ('$roll_no', $correctCount, $wrongCount, '$response')";

    if ($conn->query($sql) === TRUE) {
        $responseData = [
            "roll_no" => $roll_no,
            "correctCount" => $correctCount,
            "wrongCount" => $wrongCount,
            "total" => $correctCount + $wrongCount
        ];
        header("Content-Type: application/json");
        echo json_encode($responseData);
    } else {
        http_response_code(500);
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    http_response_code(405);
    echo "Method Not Allowed";
}
?>

