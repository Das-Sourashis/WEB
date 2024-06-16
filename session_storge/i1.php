<?php
session_start();

// if(isset("submit")){
if(true){
    $_SESSION[$_POST["name"]] = array($_POST["name"],$_POST["mobile_no"],$_POST["age"]);
    echo'<html>
                <table>
                        <tr>
                            <th>Name</th>
                            <th>Mobile Number</th>
                            <th>Age</th>
                        </tr>';
                        foreach($_SESSION as $x){
                        echo "<tr>";
                            foreach($x as $y){
                                echo "<th>". $y ."</th>";
                            }
                        echo "</tr>";
                        }
                echo '</table>
    </html>';
    }
?>