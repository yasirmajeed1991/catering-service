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
?>

<div class="content mt-3">
    
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Create New Sabji Item List</strong>
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
                                    <Input type="text" name="detail[]"></Input>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>
                                        Address: 
                                    </td>
                                    <td>
                                    <Input type="text" name="detail[]"></Input>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>
                                        Date: 
                                    </td>
                                    <td>
                                    <Input type="date" name="detail[]"></Input>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>
                                        Time: 
                                    </td>
                                    <td>
                                    <Input type="time" name="detail[]"></Input>
                                    </td>
                                    
                                </tr>
                        <?php
                          
                                $query	=	"SELECT * from sabjiitemlist;";
                                $rs	 =	mysqli_query($conn,$query) or die(mysqli_error());
                               
                                while($itemlistResult		=	mysqli_fetch_array($rs))
                                    {
                                         $itemlistID = $itemlistResult['id'];
                                         $item = $itemlistResult['gujrati'];
                                        echo '  <tr>
                                                    <td>
                                                        '.$itemlistResult['item'].'  
                                                        
                                                    </td>';

                                     ?>


                                <td>
                                <Input type="hidden" value="0x0x0x" name="value[]"
                                        ></Input>         
                                <Input type="hidden" value="<?php echo $itemlistID;?>" name="value[]"
                                        ></Input>   
                                        <Input type="hidden" value="<?php echo $item;?>" name="value[]"
                                        ></Input> 
                                    <Input type="text" value="" name="value[]"
                                    placeholder="Kg" ></Input>
                                    <Input type="text" value="" name="value[]"
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