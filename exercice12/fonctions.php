<?php
function display_array(&$T,$lang)
{
    echo "le clandrier $lang <br>";
    echo "<table border >";
    foreach ($T as $key => $value) {
        echo "<tr>";
        foreach ($value as $k => $v) {
            echo "<td> ". $v ."</td>";
        }
        echo "</tr>";
    }
    echo "<table>";
}