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

						$query			=	"select * from category where id = $id  ";
						$rs		    	=	mysqli_query($conn,$query) or die(mysqli_error());
						$row		    =	mysqli_fetch_array($rs);
						$category			= 	$row['category'];
						$gujrati			= 	$row['gujrati'];
						
						
						if($_SERVER["REQUEST_METHOD"] == "POST"){
							$category = $_POST['category'];
							$gujrati = $_POST['gujrati'];
							
						echo $query = "Update category SET category='$category',gujrati='$gujrati'  where id=$id";
						$rs	   =  mysqli_query($conn,$query) or die(mysqli_error());
						header("location:functions.php?UpdateCategory=1"); 
						
						}
						
?>



			<div class="content mt-3">
				<div class="animated fadeIn">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<strong class="card-title">Update Category</strong>
								</div>
								<div class="card-body">
									<form class="form-inline" method="POST" enctype="multipart/form-data"> 
										<table class="table table-bordered">
										<tr><td>Category: <br><input   name="category" class="form-control" Placeholder="Category Name" type="text" value="<?php echo $category;?>" /></td>
										<td>Gujrati Category Name: <br><input   name="gujrati" class="form-control" Placeholder="Gujrati Name" type="text" value="<?php echo $gujrati;?>" /></td>
											<tr><td><input type="submit"  class="btn btn-success" value="Update Category"/></td></tr>
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