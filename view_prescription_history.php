<?php
include_once('dbconfig.php');

$sql = "SELECT * FROM prescription_history";
$table = "";
$result = mysqli_query($connection,$sql );

$table ="'<h1> Prescription History </h1>

<table border='1'>
    <tr>
        <th>Order ID</th>
        <th>Order Date</th>
        <th>Order Name</th>
        <th>Order Email</th>
        <th>Order NIC</th>
        <th>Order Contact</th>
        <th>Description</th>
        <th>Img</th>
        
    </tr>";

while($res = mysqli_fetch_array($result)) {
    $orderid = $res['order_id'];
    $orderdate = $res['order_date'];
    $ordername =$res['order_name'];
    $orderemail =$res['order_email'];
    $ordernic =$res['order_nic'];
    $ordercontact =$res['order_contact'];
    $orderdis =$res['order_disc'];
    $orderimg =$res['order_img'];


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

        body
        {
            width: 80%;
            margin-left: auto;
            margin-right: auto;
            text-align:center;
            font-family: "Helvetica,Arial,Sans-Serif,Myriad Pro","Helvetica Neue";
            justify-content: center;
            align-items: center;
        }
        table {
            font-family:  sans-serif,arial;
            border-collapse: collapse;
            width: 80%;
            align:center;
        }

        th{
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

