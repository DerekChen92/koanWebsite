<?php
function getTableCss()
{
    echo "
    <style>
        .koan_table {
            border-collapse: collapse;
            width: 100%;
            padding: 8px;
        }
        th,
        td {
            text-align: center;
            padding: 8px;
        }
        .koan_table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .header_row {
            background-color: #edd8e7;
        }
        th,
        .header_row {
            color: #920683
        }
        th {
            font-size: 30px;
            font-weight: 700;
        }
        td {
            color: #52aa35;
            font-size: 20px;
            font-weight: 700;
        }
        tr {
            height: 40px;
        }
    </style>";
}

function buildTable($url) {
    getTableCss();

    $file = file($url);
    echo "<div style='padding: 8px 0 8px 0;'>";
    echo "<table class='koan_table'>";
    foreach ($file as $num=>$line) {
        if (strpos($line, "title:") !== false) {
            echo "<tr><th>".str_replace("title:", "", $line)."</th></tr>";
        } else if (strpos($line, "header:") !== false) {
            echo "<tr><td class='header_row'>".str_replace("header:", "", $line)."</td></tr>";
        } else {
            echo "<tr><td>".$line."</td></tr>";
        }
    }
    echo "</table>";
    echo "</div>";
}
?>
