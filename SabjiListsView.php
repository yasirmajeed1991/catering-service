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
$sum =0;


$query	=	"select DISTINCT generatedid from sabjilists   ";
			$rs		 =	mysqli_query($conn,$query) or die(mysqli_error());
		$html = "";
		while($row		=	mysqli_fetch_array($rs))
		{
            $sum=$sum+1;
					$html	.=	'<tr style="font-size:12px">
                    <td >'.$sum.'</td>
                                 <td >'.$row['generatedid'].'</td>
                                 <td> <a  href="SabjiItemListView.php?id='.$row['generatedid'].'"><i class="fa fa-eye icon-white"></i></a> &nbsp <a  href="SabjiItemListsUpdate.php?id='.$row['generatedid'].'"><i class="fa fa-edit icon-white"></i></a> &nbsp<a  href="functions.php?SabjiListsDel='.$row['generatedid'].'"><i class="fa fa-minus-square icon-white"></i></a></td>
								</tr>  ';
		}





?>


	
	
<?php if($_SESSION['error_msg']!=''){echo $_SESSION['error_msg']; $_SESSION['error_msg']='';}?>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Sabji Lists Created</strong>
                    </div>
                    <div class="card-body">
                       
                        <table id="bootstrap-data-table-export"
                            class="table table-sm table-bordered bootstrap-datatable datatable responsive">
                            <thead>
                                <tr>
                                   
                                <th>Sr</th>
                                    <th>ID</th>
                                    
                                    <th>Action</th>



                                </tr>
                            </thead>

                            <?php echo $html;?>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	
	
   <?php  }

include 'footer.php';
?>