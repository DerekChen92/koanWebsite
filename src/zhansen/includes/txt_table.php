<?php
function getTableCss()
{
    echo "
    <style>
        .koan_table {
            border-collapse: collapse;
            width: 100%;
            padding: 8px;
            border: 1px solid grey;
            border-radius: 10px;
            margin: 15px 8px 15px 8px;
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
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 50px;
            font-weight: 700;
            background-color: white;
        }
        td {
            color: #52aa35;
            font-size: 20px;
            font-weight: 700;
        }
        tr th {
            height: 60px;
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
