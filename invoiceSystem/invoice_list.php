<?php 
session_start();
include('header.php');
include 'Invoice.php';
$invoice = new Invoice();
$invoice->checkLoggedIn();
?>
<title>Invoice System</title>
<script src="js/invoice.js"></script>
<link href="css/style.css" rel="stylesheet">
<?php include('container.php');?>
	<div class="container">
	  <h2 class="title mt-5">Sales and Invoice System</h2>
	  <?php include('menu.php');?>
      <table id="data-table" class="table table-condensed table-hover table-striped">
        <thead>
          <tr>
            <th>Invoice No.</th>
            <th>Customer Name</th>
            <th>Create Date</th>
            <th>Total</th>
            <th>Print</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <?php		
	    	$invoiceList = $invoice->getInvoiceList();
        foreach($invoiceList as $invoiceDetails){
			$invoiceDate = date("d/M/Y, H:i:s", strtotime($invoiceDetails["order_date"]));
            echo '
              <tr>
                <td>'.$invoiceDetails["order_id"].'</td>
                <td>'.$invoiceDetails["order_receiver_name"].'</td>
                <td>'.$invoiceDate.'</td>
                <td>Rs '.$invoiceDetails["order_total_after_tax"].'</td>
                <td><a href="print_invoice.php?invoice_id='.$invoiceDetails["order_id"].'" title="Print Invoice"><button class="btn btn-primary btn-sm"><i class="fa fa-print"></i></button></a></td>
                <td><a href="edit_invoice.php?update_id='.$invoiceDetails["order_id"].'"  title="Edit Invoice"><button class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button></a></td>
                <td><a href="delete-invoice.php?order_id='.$invoiceDetails['order_id'].'" title="Delete Invoice"><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a></td>
              </tr>
            ';
        }       
        ?>
      </table>	
</div>	
<?php include('footer.php');?>