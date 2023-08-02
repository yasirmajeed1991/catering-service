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

$UpdateId = $_GET['id'];

  $query	=	"SELECT * From  sabjilists where generatedid  =$UpdateId;";
  $qrs		=	mysqli_query($conn,$query) or die(mysqli_error());
$qtrs = mysqli_fetch_array($qrs);
  $students = json_decode($qtrs['details']);
  



?>

<div class="content mt-3">
    
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Update Sabji Item List</strong>
                    </div>
                    <div class="card-body">
                        &nbsp;


                        <form action="SabjiItemListGenerate.php" method="POST">
                            <table class="table table-bordered">

                                <tr>
                                    <td>
                                        Name: 
                                    </td>
                                    <td>
                                    <Input type="text" name="detail[]" value="<?php echo $students[0]?>"></Input>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>
                                        Address: 
                                    </td>
                                    <td>
                                    <Input type="text" name="detail[]" value="<?php echo $students[1] ?>"></Input>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>
                                        Date: 
                                    </td>
                                    <td>
                                    <Input type="date" name="detail[]" value="<?php echo $students[2] ?>"></Input>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>
                                        Time: 
                                    </td>
                                    <td>
                                    <Input type="time" name="detail[]" value="<?php echo $students[3] ?>"></Input>
                                    </td>
                                    
                                </tr>
                        <?php
                          
                                $query	=	"SELECT * from sabjiitemlist";
                                $rs	 =	mysqli_query($conn,$query) or die(mysqli_error());
                               
                                while($itemlistResult		=	mysqli_fetch_array($rs))
                                    {
                                         $itemlistID = $itemlistResult['id'];


                            echo             $query1	=	"SELECT * from  sabjilists WHERE item_id=$itemlistID and generatedid=$UpdateId ";
                                         $rs1	 =	mysqli_query($conn,$query1) or die(mysqli_error());
                                        $fetch_result = mysqli_fetch_array($rs1);
                                        if($fetch_result[0] >0)
                                        {
                                            $item = $fetch_result['item'];
                                            $item = $fetch_result['kg'];
                                            $item = $fetch_result['gram'];

                                        }
                                        else
                                        {
                                            $item = $itemlistResult['gujrati'];
                                            $kg = '';
                                            $gram = '';
                                        }

                                       
                                        echo '  <tr>
                                                    <td>
                                                        '.$item.'  
                                                        
                                                    </td>';

                                     ?>


                                <td>
                                <Input type="hidden" value="0x0x0x" name="value[]"
                                        ></Input>         
                                <Input type="hidden" value="<?php echo $itemlistID;?>" name="value[]"
                                        ></Input>   
                                        <Input type="hidden" value="<?php echo $item;?>" name="value[]"
                                        ></Input> 
                                    <Input type="text" value="<?php echo $kg;?>" name="value[]"
                                    placeholder="Kg" ></Input>
                                    <Input type="text" value="<?php echo $gram;?>" name="value[]"
                                        placeholder="Gram"></Input>
                                        


                                </td>
                                </tr>
                                <?php
                                     
                                    }
                            ?>


                                <tr>
                                    <td>
                                    <td><input type="submit" class="btn btn-success" value="Generate ItemList" />
                                    </td>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<?php }


include 'footer.php';
?>