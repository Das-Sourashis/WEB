<?php
    $valid_password = "S54";
    $password = $_GET['password'];
    // echo($password);
    
    if ( $password == $valid_password) {
        $xmlFilePath = 'quiz.xml';
    
        if (file_exists($xmlFilePath)) {
            header('Content-Type: application/xml');
            header('Content-Disposition: attachment; filename="quiz.xml"');

            readfile($xmlFilePath);
        } else {
            http_response_code(404);
            echo "XML file not found";
        }
    } else {
        http_response_code(401);
        echo "Incorrect password";
    }
?>