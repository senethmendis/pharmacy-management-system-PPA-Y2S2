<?php
session_start();
include('header.php');
$loginError = '';
if (!empty($_POST['email']) && !empty($_POST['pwd'])) {
	include 'Invoice.php';
	$invoice = new Invoice();
	$user = $invoice->loginUsers($_POST['email'], $_POST['pwd']);
	if(!empty($user)) {
		$_SESSION['user'] = $user[0]['first_name']."".$user[0]['last_name'];
		$_SESSION['userid'] = $user[0]['id'];
		$_SESSION['email'] = $user[0]['email'];
		$_SESSION['address'] = $user[0]['address'];
		$_SESSION['mobile'] = $user[0]['mobile'];
		header("Location:invoice_list.php");
	} else {
		$loginError = "Invalid email or password!";
	}
}
?>
<title>Invoice System</title>
<script src="js/invoice.js"></script>
<link href="css/style.css" rel="stylesheet">
<?php include('container.php');?>
<style type="text/css">
	.form-control {
    height: 46px;
    border-radius: 46px;
    border: none;
    padding-left: 1.5rem;
    padding-right: 1.5rem;
    margin-top: 1.5rem;
    background: rgb(255, 255, 255);
}
</style>
<div class="row bg-white">
	<div class="demo-heading">
        <div class="row">
            <div class="col">
                <h2 class="text-black text-center">Lifecare Invoice System</h2> <br>
                <p class="text-danger text-center">Use the same credentials, login to chashire system</p> <br>

            </div>
        </div>



	</div>
	<div class="">

        <div class="card">
            <div class="card-body">
                <h4 class="text-black"></h4>
                <form method="post" action="">
                    <div class="form-group">
                        <?php if ($loginError ) { ?>
                            <div class="alert alert-warning"><?php echo $loginError; ?></div>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <input name="email" id="email" type="email" class="form-control shadow-lg" placeholder="Email"  required>
                    </div>
                    <div class="form-group ">
                        <input type="password" class="form-control shadow-lg" name="pwd" placeholder="Password"  required>
                    </div>
                    <div class="form-group ms-auto ml-5">

                        <button type="submit" name="login" class="btn btn-success mt-4 ml-auto">Login</button>
                        <a href="../login.php"  class="btn btn-primary mt-4 ">Home Page</a>

                    </div>


                </form>
            </div>
        </div>

		<br>
		 <!-- <p><b>Email</b> : demo@demo.com<br><b>Password</b> : pass</p>		 -->
	</div>		
</div>		
</div>
<?php include('footer.php');?>