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
    <?php if($message_Err!=''){?>
    <div align="center"><?php echo $message_Err?></div>

    <?php }?>
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Create New Quotation</strong>
                    </div>
                    <div class="card-body">
                        &nbsp;


                        <form action="QuotationGenerate.php" method="POST">
                            <table class="table table-bordered">
                                <tr>
                                    <td>Name:</td>
                                    <td>

                                        <input type="text" class="form-control" name="Name" reuquired value="">

                                    </td>
                                </tr>

                                <tr>
                                    <td>Date:</td>
                                    <td>

                                        <input type="date" class="form-control" name="Date" reuquired value="">

                                    </td>
                                </tr>

                                <tr>
                                    <td>Address:</td>
                                    <td>

                                        <input type="text" class="form-control" name="Address" reuquired value="">

                                    </td>
                                </tr>


                                <tr>
                                    <td>Mobile No:</td>
                                    <td>

                                        <input type="text" class="form-control" name="Mobile" reuquired value="">

                                    </td>
                                </tr>



                                <tr>
                                    <td>Time:</td>
                                    <td>

                                        <input type="time" class="form-control" name="Time" reuquired value="">

                                    </td>
                                </tr>


                                <tr>
                                    <td>Function Venue:</td>
                                    <td>

                                        <input type="text" class="form-control" name="FunctionVenue" value="">

                                    </td>
                                </tr>

                                <tr>
                                    <td>Function Date:</td>
                                    <td>

                                        <input type="date" class="form-control" name="FunctionDate" reuquired value="">

                                    </td>
                                </tr>

                                <tr>
                                    <td>Extra Charges:</td>
                                    <td>

                                        <input type="text" class="form-control" name="ExtraCharges" value="">

                                    </td>
                                </tr>


                                <tr>
                                    <td>PR.O:</td>
                                    <td>

                                        <input type="text" class="form-control" name="PRO" value="">

                                    </td>
                                </tr>

                                <tr>
                                    <td>Boys:</td>
                                    <td>

                                        <input type="text" class="form-control" name="Boys" value="">

                                    </td>
                                </tr>

                                <tr>
                                    <td>Decoration:</td>
                                    <td>

                                        <input type="text" class="form-control" name="Decoration" value="">

                                    </td>
                                </tr>

                                <!-- <tr>
                                    <td>Rate:</td>
                                    <td>

                                        <input type="text" class="form-control" name="Rate" reuquired value="">

                                    </td>
                                </tr> -->
                                <tr>
                                    <td>No. Of Person:</td>
                                    <td>

                                        <input type="text" class="form-control" name="NOPerson" value="">

                                    </td>
                                </tr>


                                <tr>
                                    <td>Advance:</td>
                                    <td>

                                        <input type="text" class="form-control" name="Advance" value="">

                                    </td>
                                </tr>
                                <script src="multiselect.js"></script>
                                <style>
                                select {
                                    width: 30em;
                                }
                                </style>


                                <tr>
                                    <td>
                                        <?php 
                                        
                                        $query	=	"SELECT * From category where id=1";
                                        $category		=	mysqli_query($conn,$query) or die(mysqli_error());
                                        $first = mysqli_fetch_array($category);
                                        echo $first['category'];
                                        
                                        
                                        ?>
                                    </td>
                                    <td>
                                        <select name="item[]" multiple multiselect-search="true"
                                            multiselect-select-all="true" multiselect-max-items="10">
                                            <?php

                                        $query	=	"SELECT * From subcategory where cat_id=1";
                                        $category		=	mysqli_query($conn,$query) or die(mysqli_error());
                                        while($first		=	mysqli_fetch_array($category))
                                        {

                                        ?>

                                            <option value="<?php echo $first['id']?>"><?php echo $first['item']?>
                                            </option>



                                            <?php
                                        }
                                            ?>
                                        </select>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <?php 
                                        
                                        $query	=	"SELECT * From category where id=2";
                                        $category		=	mysqli_query($conn,$query) or die(mysqli_error());
                                        $first = mysqli_fetch_array($category);
                                        echo $first['category'];
                                        
                                        
                                        ?>
                                    </td>
                                    <td>
                                        <select name="item[]" multiple multiselect-search="true"
                                            multiselect-select-all="true" multiselect-max-items="10">
                                            <?php

                                        $query	=	"SELECT * From subcategory where cat_id=2";
                                        $category		=	mysqli_query($conn,$query) or die(mysqli_error());
                                        while($first		=	mysqli_fetch_array($category))
                                        {

                                        ?>

                                            <option value="<?php echo $first['id']?>"><?php echo $first['item']?>
                                            </option>



                                            <?php
                                        }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php 
                                        
                                        $query	=	"SELECT * From category where id=3";
                                        $category		=	mysqli_query($conn,$query) or die(mysqli_error());
                                        $first = mysqli_fetch_array($category);
                                        echo $first['category'];
                                        
                                        
                                        ?>
                                    </td>
                                    <td>
                                        <select name="item[]" multiple multiselect-search="true"
                                            multiselect-select-all="true" multiselect-max-items="10">
                                            <?php

                                        $query	=	"SELECT * From subcategory where cat_id=3";
                                        $category		=	mysqli_query($conn,$query) or die(mysqli_error());
                                        while($first		=	mysqli_fetch_array($category))
                                        {

                                        ?>

                                            <option value="<?php echo $first['id']?>"><?php echo $first['item']?>
                                            </option>



                                            <?php
                                        }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php 
                                        
                                        $query	=	"SELECT * From category where id=4";
                                        $category		=	mysqli_query($conn,$query) or die(mysqli_error());
                                        $first = mysqli_fetch_array($category);
                                        echo $first['category'];
                                        
                                        
                                        ?>
                                    </td>
                                    <td>
                                        <select name="item[]" multiple multiselect-search="true"
                                            multiselect-select-all="true" multiselect-max-items="10">
                                            <?php

                                        $query	=	"SELECT * From subcategory where cat_id=4";
                                        $category		=	mysqli_query($conn,$query) or die(mysqli_error());
                                        while($first		=	mysqli_fetch_array($category))
                                        {

                                        ?>

                                            <option value="<?php echo $first['id']?>"><?php echo $first['item']?>
                                            </option>



                                            <?php
                                        }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php 
                                        
                                        $query	=	"SELECT * From category where id=5";
                                        $category		=	mysqli_query($conn,$query) or die(mysqli_error());
                                        $first = mysqli_fetch_array($category);
                                        echo $first['category'];
                                        
                                        
                                        ?>
                                    </td>
                                    <td>
                                        <select name="item[]" multiple multiselect-search="true"
                                            multiselect-select-all="true" multiselect-max-items="10">
                                            <?php

                                        $query	=	"SELECT * From subcategory where cat_id=5";
                                        $category		=	mysqli_query($conn,$query) or die(mysqli_error());
                                        while($first		=	mysqli_fetch_array($category))
                                        {

                                        ?>

                                            <option value="<?php echo $first['id']?>"><?php echo $first['item']?>
                                            </option>



                                            <?php
                                        }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php 
                                        
                                        $query	=	"SELECT * From category where id=6";
                                        $category		=	mysqli_query($conn,$query) or die(mysqli_error());
                                        $first = mysqli_fetch_array($category);
                                        echo $first['category'];
                                        
                                        
                                        ?>
                                    </td>
                                    <td>
                                        <select name="item[]" multiple multiselect-search="true"
                                            multiselect-select-all="true" multiselect-max-items="10">
                                            <?php

                                        $query	=	"SELECT * From subcategory where cat_id=6";
                                        $category		=	mysqli_query($conn,$query) or die(mysqli_error());
                                        while($first		=	mysqli_fetch_array($category))
                                        {

                                        ?>

                                            <option value="<?php echo $first['id']?>"><?php echo $first['item']?>
                                            </option>



                                            <?php
                                        }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php 
                                        
                                        $query	=	"SELECT * From category where id=7";
                                        $category		=	mysqli_query($conn,$query) or die(mysqli_error());
                                        $first = mysqli_fetch_array($category);
                                        echo $first['category'];
                                        
                                        
                                        ?>
                                    </td>
                                    <td>
                                        <select name="item[]" multiple multiselect-search="true"
                                            multiselect-select-all="true" multiselect-max-items="10">
                                            <?php

                                        $query	=	"SELECT * From subcategory where cat_id=7";
                                        $category		=	mysqli_query($conn,$query) or die(mysqli_error());
                                        while($first		=	mysqli_fetch_array($category))
                                        {

                                        ?>

                                            <option value="<?php echo $first['id']?>"><?php echo $first['item']?>
                                            </option>



                                            <?php
                                        }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php 
                                        
                                        $query	=	"SELECT * From category where id=8";
                                        $category		=	mysqli_query($conn,$query) or die(mysqli_error());
                                        $first = mysqli_fetch_array($category);
                                        echo $first['category'];
                                        
                                        
                                        ?>
                                    </td>
                                    <td>
                                        <select name="item[]" multiple multiselect-search="true"
                                            multiselect-select-all="true" multiselect-max-items="10">
                                            <?php

                                        $query	=	"SELECT * From subcategory where cat_id=8";
                                        $category		=	mysqli_query($conn,$query) or die(mysqli_error());
                                        while($first		=	mysqli_fetch_array($category))
                                        {

                                        ?>

                                            <option value="<?php echo $first['id']?>"><?php echo $first['item']?>
                                            </option>



                                            <?php
                                        }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php 
                                        
                                        $query	=	"SELECT * From category where id=9";
                                        $category		=	mysqli_query($conn,$query) or die(mysqli_error());
                                        $first = mysqli_fetch_array($category);
                                        echo $first['category'];
                                        
                                        
                                        ?>
                                    </td>
                                    <td>
                                        <select name="item[]" multiple multiselect-search="true"
                                            multiselect-select-all="true" multiselect-max-items="10">
                                            <?php

                                        $query	=	"SELECT * From subcategory where cat_id=9";
                                        $category		=	mysqli_query($conn,$query) or die(mysqli_error());
                                        while($first		=	mysqli_fetch_array($category))
                                        {

                                        ?>

                                            <option value="<?php echo $first['id']?>"><?php echo $first['item']?>
                                            </option>



                                            <?php
                                        }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php 
                                        
                                        $query	=	"SELECT * From category where id=10";
                                        $category		=	mysqli_query($conn,$query) or die(mysqli_error());
                                        $first = mysqli_fetch_array($category);
                                        echo $first['category'];
                                        
                                        
                                        ?>
                                    </td>
                                    <td>
                                        <select name="item[]" multiple multiselect-search="true"
                                            multiselect-select-all="true" multiselect-max-items="10">
                                            <?php

                                        $query	=	"SELECT * From subcategory where cat_id=10";
                                        $category		=	mysqli_query($conn,$query) or die(mysqli_error());
                                        while($first		=	mysqli_fetch_array($category))
                                        {

                                        ?>

                                            <option value="<?php echo $first['id']?>"><?php echo $first['item']?>
                                            </option>



                                            <?php
                                        }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php 
                                        
                                        $query	=	"SELECT * From category where id=11";
                                        $category		=	mysqli_query($conn,$query) or die(mysqli_error());
                                        $first = mysqli_fetch_array($category);
                                        echo $first['category'];
                                        
                                        
                                        ?>
                                    </td>
                                    <td>
                                        <select name="item[]" multiple multiselect-search="true"
                                            multiselect-select-all="true" multiselect-max-items="10">
                                            <?php

                                        $query	=	"SELECT * From subcategory where cat_id=11";
                                        $category		=	mysqli_query($conn,$query) or die(mysqli_error());
                                        while($first		=	mysqli_fetch_array($category))
                                        {

                                        ?>

                                            <option value="<?php echo $first['id']?>"><?php echo $first['item']?>
                                            </option>



                                            <?php
                                        }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php 
                                        
                                        $query	=	"SELECT * From category where id=12";
                                        $category		=	mysqli_query($conn,$query) or die(mysqli_error());
                                        $first = mysqli_fetch_array($category);
                                        echo $first['category'];
                                        
                                        
                                        ?>
                                    </td>
                                    <td>
                                        <select name="item[]" multiple multiselect-search="true"
                                            multiselect-select-all="true" multiselect-max-items="10">
                                            <?php

                                        $query	=	"SELECT * From subcategory where cat_id=12";
                                        $category		=	mysqli_query($conn,$query) or die(mysqli_error());
                                        while($first		=	mysqli_fetch_array($category))
                                        {

                                        ?>

                                            <option value="<?php echo $first['id']?>"><?php echo $first['item']?>
                                            </option>



                                            <?php
                                        }
                                            ?>
                                        </select>
                                    </td>
                                </tr>


                                <?php
/*


                                $query	=	"SELECT * from category;";
                                $rs	 =	mysqli_query($conn,$query) or die(mysqli_error());
                               
                                while($CategoryResult		=	mysqli_fetch_array($rs))
                                    {
                                         $CategoryID = $CategoryResult['id'];
                                        
                                        echo '  <tr>
                                                    <td>
                                                        '.$CategoryResult['category'].'  
                                                        
                                                    </td>';



                                     ?>




                                <td>
                                    <?php
                                                                   $CategoryID= $CategoryResult['id'];
                                                                   $query	=	"SELECT * from subcategory where cat_id = $CategoryID";
                                                                    $rs1	 =	mysqli_query($conn,$query) or die(mysqli_error());
                                                                    while($SubCategoryResult		=	mysqli_fetch_array($rs1))
                                                                   {


                                                                    ?>


                                    <div class="container">
                                        <div class="row">
                                            <div class="col">


                                                <div class="form-check">

                                                    <input class="form-check-input" type="checkbox"
                                                        value="<?php echo $SubCategoryResult['id']?>"
                                                        id="flexCheckDefault" name='Item[]'>
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        <?php echo $SubCategoryResult['item'];?>
                                                    </label>
                                                </div>



                                            </div>



                                        </div>
                                    </div>
                    </div>



                    <?php
                                                                    }


                                                                    ?>
                    </td>
                    </tr>
                    <tr>
                    </tr>
                    <?php
                                     
                                    }
                          */  ?>





                    <tr>
                        <td>
                        <td><input type="submit" class="btn btn-success" value="Generate Quotation" />
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