<?php
include_once('dbconfig.php');

$sql = "SELECT * FROM medicine";
$table = "";
$result = mysqli_query($connection,$sql );

$table ="'<h1> Medicine Logs </h1>

<table border='1'>
    <tr>
        <th>Medicine ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Category</th>
        <th>Manufacture</th>
        <th>Quantity</th>
        <th>ExpireDate</th>
        <th>Availability</th>
        
    </tr>";

while($res = mysqli_fetch_array($result)) {
    $orderid = $res['medid'];
    $orderdate = $res['medname'];
    $ordername =$res['medprice'];
    $orderemail =$res['medcategory'];
    $ordernic =$res['manufacture'];
    $ordercontact =$res['quantity'];
    $orderdis =$res['expirydate'];
    $orderimg =$res['status'];


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

