<?php

include_once('dbconfig.php');

$sql = "SELECT * FROM customers";
$table = "";
$result = mysqli_query($connection, $sql);

$table = "'<h1> Customer Logs </h1>

<table border='1'>
    <tr>
        <th>ID</th>
        <th>Registerd Date</th>
        <th>Name</th>
        <th>Age</th>
        <th>Email</th>
        <th>NIC</th>
        <th>Contact</th>
        <th>Address</th>
        
    </tr>";

while ($res = mysqli_fetch_array($result)) {
    $orderid = $res['cid'];
    $orderdate = $res['registerddate'];
    $ordername = $res['cname'];
    $orderemail = $res['cage'];
    $ordernic = $res['cemail'];
    $ordercontact = $res['cnic'];
    $orderdis = $res['ccontact'];
    $orderimg = $res['caddress'];


    $table .= "<tr>
                        <td>" . $orderid . "</td>
                        <td>" . $orderdate . "</td>
                        <td>" . $ordername . "</td>
                        <td>" . $orderemail . "</td>
                        <td>" . $ordernic . "</td>
                        <td>" . $ordercontact . "</td>
                        <td>" . $orderdis . "</td>
                        <td>" . $orderimg . "</td>
                        
                    </tr>";
}

$table .= "</table>";

echo $table;
?>


<html>
<head>
    <title>Coding-zon Demo - Convert HTML to PDF using DomPDF </title>


    <style>

        body {
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            font-family: "Helvetica,Arial,Sans-Serif,Myriad Pro", "Helvetica Neue";
            justify-content: center;
            align-items: center;
        }

        table {
            font-family: sans-serif, arial;
            border-collapse: collapse;
            width: 80%;
            align: center;
        }

        th {
            background-color: #afd0ff;
        }

        td, th {
            border: 1px solid #cccccc;
            text-align: left;
            padding: 8px;
        }

    </style>

</head>
<body>
<div>


</body>
</html>

