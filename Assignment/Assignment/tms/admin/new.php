<?php include('index.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>new holding account</title>

		<!-- CSS only -->
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
		.section{
			text-align: right;
		}
</style>
<script>
       function myfunction() {
       alert("Data Inserted Successfully");
    }
    </script>
	</head>
<body>
	<div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
<!--header start here-->
				     <div class="clearfix"> </div>	
<!--heder end here-->
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Create</li>
            </ol>	
	<h2>New Holding Account</h2>
<form>
	<table border="0">
		<div class="form-group">
		<tr>
			<td colspan="4"><h3><b>Account Attributes</b></h3></td>
		</tr>
		</div>
	</table>
	<hr>
	<table border="0"  cellspacing="15">
		
		<div class="form-group">
		<tr>
    			<td><label >Account ID</label> </td>
			<td><label >Account Name</label></td>
			<td><label >Account Type</label> </td>
			<td><label >Account Location</label></td>
  		</tr>			
		<tr>
    			<td><input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Select" style="width:250px"></td>
			<td> <select class="form-control" id="exampleFormControlSelect1" style="width:250px" >
  					    <option selected>Bone</option>
  					    <option>2</option>
     					    <option>3</option>
  					    <option>4</option>
  					    <option>5</option>
           					    </select></td>
			<td> <select class="form-control" id="exampleFormControlSelect1" style="width:250px" >
  					    <option selected>Holding Act</option>
  					    <option>2</option>
     					    <option>3</option>
  					    <option>4</option>
  					    <option>5</option>
           					    </select></td>
			<td><input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="New Jersy" style="width:250px;height:35px;background-color:C0BBB9;"></td>
    		</tr>		
		<tr>
    			<td><label>Minimum Balanced</label> </td>
			<td><label >Current Balance</label></td>
			<td><label >Status</label> </td>
			<td><label >Status On</label></td>
  		</tr>		
		<tr>
    			<td><input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0.00" style="width:250px"></td>
			<td><input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0.00" style="width:250px"></td>
			<td><select class="form-control" id="exampleFormControlSelect1" style="width:250px" >
  					    <option selected>Active</option>
  					    <option>Deactive</option>				 
           					    </select></td>
			<td><input type="date" id="birthday" name="birthday" style="width:250px"></td>
    		</tr>
  		</div>
	</table>
	<br>
	<table border="0">
		<div class="form-group">
		<tr>
			<td colspan="4"><h3><b>Account Attributes</b></h3></td>
		</tr>
		</div>
	</table>
	<hr>
	<table border="0" cellspacing="15" >	
		<div class="form-group">
		<tr>
    			<td ><label>Owner ID</label> </td>
			<td><label>Owner Name</label></td>				
  		</tr>			
		<tr>
    			<td><input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="HAI - SCM" style="width:250px"></td>
			<td><input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Chester,Sylvester" style="width:250px;height:35px;background-color:C0BBB9;"></td>				
    		</tr>
		</div>
		<div class="form-group">
		<tr></tr>
		

		</div>
	</table>
	<section class="section"><button type="Cancle" class="btn btn-primary" style="width:100px;height:30px;background-color:#fffff;"><font color="#1a0033"><b>Cancle<b></font></button>
		<button type="Save" class="btn btn-primary" onclick="myfunction()" style="width:100px;height:30px;background-color:#1a0033;"><font color="#ffffff"><b>Save</b></font></button></td></section>
</form>
</body>
</html>