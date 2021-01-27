<?php include('index.php');
?>
<html>
	<head>
		<title>Refund from Holding Account</title>

		<!-- CSS only -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesh<!-- JavaScript Bundle with Popper -->

		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<style>

       body{
			color:grey;
		}
		h2{
			color: black;
		}
    </style>
    <script>
       function myfunction() {
       alert("Refunded Successfully ");
    }
    </script>	
	</head>
    <body>
	<div>
	<div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
<!--header start here-->
				     <div class="clearfix"> </div>	
<!--heder end here-->
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Refund</li>
            </ol>	
        <h2>Refund from Holding Account</h2>
        <br>
<form>
    <p>A Payable will be created to refund the specified amount from holding account HA1SC-001M.</p>
	<table border="0" cellspacing="15">
		<div class="form-group">
		<tr>
			<td><label>Amount of refund</label></td>
		</tr>
		<tr>
			<td><input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0.0" style="width:520px"></td>
		</tr>

		<tr>
			<td>Amound remains on Deposit</td>
		</tr>
		<tr>
			<td><input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="325.00" style="width:520px"></td>
		</tr>
		</div>
	</table>

	<table border="0"  cellspacing="15">
		<tr>
			<td>Refund to</td>
			<td>Name</td>
		</tr>
		<tr>
			<td><input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="HAI - SCM" style="width:250px"></td>
			<td><input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Chester,Sylvester" style="width:250px;height:35px;background-color:C0BBB9;"></td>		
        </tr>
        <tr></tr>
        
		<tr>
			<td></td>
			<td align="right" rowspan="2"><button type="Cancel" class="btn btn-primary" style="width:100px;height:30px;background-color:#fffff;"><font color="#1a0033"><b>Cancel<b></font></button>
			<button type="Save" class="btn btn-primary" onclick="myfunction()" style="width:100px;height:30px;background-color:#1a0033;"><font color="#ffffff"><b>Save</b></font></button></td>
		</tr>
		</div>
	</table>
</form>
</div>
</body>
</html>