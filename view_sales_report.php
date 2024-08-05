<?php
include_once('dbconfig.php');

$sql = "SELECT * FROM invoice_order_item";
$table = "";
$result = mysqli_query($connection,$sql );

$table ="'<h1> Sales History </h1>

<table border='1'>
    <tr>
        <th>Item Code</th>
        <th>Item Name</th>
        <th>Order Item Quantity</th>
        <th>Order Item Price</th>
        <th>Total Amount</th>
    </tr>";

    while($res = mysqli_fetch_array($result)) {
        $Itemid = $res['order_id'];
        $Itemname =$res['item_name'];
        $Itemquantity =$res['order_item_quantity'];
        $Itemprice =$res['order_item_price'];
        $Itemtotal =$res['order_item_final_amount'];

        $table .= "<tr>
                        <td>" . $Itemid . "</td>
                        <td>" . $Itemname . "</td>
                        <td>" . $Itemquantity . "</td>
                        <td>" . $Itemprice . "</td>
                        <td>" . $Itemtotal . "</td>
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

