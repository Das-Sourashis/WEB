<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Storage</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
            margin-top: 50px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="name">Name: </label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="mobile_no">Mobile No: </label>
        <input type="number" id="mobile_no" name="mobile_no" required><br><br>
        <label for="age">Age: </label>
        <input type="number" id="age" name="age" max="100" required><br><br>

        <button type="submit" name="submit">Submit</button>
        <button type="button" onclick="clearSession()">Clear</button>
    </form>

    <?php
    session_start();

    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $mobile_no = $_POST["mobile_no"];
        $age = $_POST["age"];

        $_SESSION[$name] = array("Name" => $name, "Mobile Number" => $mobile_no, "Age" => $age);
        echo '<table>
                <tr>
                    <th>Name</th>
                    <th>Mobile Number</th>
                    <th>Age</th>
                </tr>';

        foreach ($_SESSION as $x) {
            echo "<tr>";
            foreach ($x as $y) {
                echo "<td>" . $y . "</td>";
            }
            echo "</tr>";
        }
        echo '</table>';
    }

    elseif (isset($_POST["action"]) && $_POST["action"] == "clear") {
        session_start();
        session_unset();
        session_destroy();
    }
    
    ?>

    <script>
        function clearSession() {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "<?php echo $_SERVER['PHP_SELF']; ?>", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send("action=clear"); 

            document.getElementsByTagName('table')[0].remove();
        }
    </script>
</body>

</html>
