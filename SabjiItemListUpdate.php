<?php
session_start();
    if(!isset($_SESSION['id']))
   {
    header("location:adminlogin.php");
   }
   else
   {

include 'config.php';
include 'header.php'; 
$id = $_GET['id'];

						$query			=	"select * from sabjiitemlist where id = $id  ";
						$rs		    	=	mysqli_query($conn,$query) or die(mysqli_error());
						$row		    =	mysqli_fetch_array($rs);
						$item			= 	$row['item'];
						$gujrati			= 	$row['gujrati'];
						
						
						if($_SERVER["REQUEST_METHOD"] == "POST"){
							$item = $_POST['item'];
							$gujrati = $_POST['gujrati'];
							
						 $query = "Update sabjiitemlist SET item='$item', gujrati='$gujrati'  where id=$id";
						$rs	   =  mysqli_query($conn,$query) or die(mysqli_error());
						header("location:functions.php?SabjiItemUpdate=1"); 
						
						}
						
?>



			<div class="content mt-3">
				<div class="animated fadeIn">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<strong class="card-title">Update Item</strong>
								</div>
								<div class="card-body">
									<form class="form-inline" method="POST" enctype="multipart/form-data"> 
										<table class="table table-bordered">
										<tr><td>Item: <br><input   name="item" class="form-control" Placeholder="Item Name" type="text" value="<?php echo $item;?>" /><?php echo '<p style="color:red">'.$itemErr.'</p>';?></td>
										<td>Gujrati Item Name: <br><input   name="gujrati" class="form-control" Placeholder="gujrati Item Name" type="text" value="<?php echo $gujrati;?>" /><?php echo '<p style="color:red">'.$gujratiErr.'</p>';?></td>
											<tr><td><input type="submit"  class="btn btn-success" value="Update "/></td></tr>
										</table>
									 </form>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div> 

                

	
	
	
	
	
	
	
   <?php  }

include 'footer.php';
?>