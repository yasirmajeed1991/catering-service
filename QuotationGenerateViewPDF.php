<?php include 'config.php';
$id = $_GET['id'];

 
$query	=	"SELECT * From quotation where id =$id;";
$qrs		=	mysqli_query($conn,$query) or die(mysqli_error());
$qtrs = mysqli_fetch_array($qrs);
$obj = json_decode($qtrs['item']);
$sum=0;
?>

<!-- -------------PDF GENERATEOR --------------- -->

<button id="pdf-generate">Download</button>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2017.1.223/styles/kendo.common.min.css" />
<script src="https://kendo.cdn.telerik.com/2017.1.223/js/jszip.min.js"></script>
<script src="https://kendo.cdn.telerik.com/2017.1.223/js/kendo.all.min.js"></script>

<div id="example">
    <div class="box wide hidden-on-narrow">
    </div>

    <div class="page-container hidden-on-narrow">
        <div class="pdf-page size-a4">
            <page size="A4">

                <!-- PDF CONTENT START -->

                <!DOCTYPE html>
                <html lang="en">

                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Document</title>
                    <link rel="preconnect" href="https://fonts.googleapis.com">
                    <link rel="stylesheet" href="style.css">
                </head>

                <body>
                    <section class="main">
                        <header>
                            <div class="container">
                                <div class="left"><img src="img/logo.png" alt=""></div>

                                <div class="right">

                                    <div class="address">

                                        <div class="flex">
                                            <h3>ADDRESS</h3>

                                            <h3 class="content"> Shop No. 28 Sukh Sagar Complex,Dharam Nagar,Opp. Shma
                                                Society A.K Road Surat - 395013</h3>
                                        </div>

                                    </div>

                                    <div class="no">
                                        <h3>CHETAN KASWALA- <span>9998882412</span></h3>
                                    </div>
                                </div>
                            </div>
                        </header>

                        <!-- SEC -->
                        <section class="details">
                            <div class="container">
                                <div class="border">
                                    <div class="first">
                                        <h3 class="name">NAME <span class="ex"><?php echo $qtrs['name']?></span></h3>
                                        <h3 class="date">DATE <span class="ex"><?php 
                                        $Date = date_create($qtrs['date']);
                                        if($Date !== false){
                                       echo     $Date = date_format($Date, 'd-m-Y');
                                            // Insert into DB
                                       }

                                        
                                        
                                        
                                        ?></span></h3>
                                    </div>
                                    <div class="second">
                                        <h3>ADDRESS <span class="ex"><?php echo $qtrs['address']?></span></h3>
                                    </div>
                                    <div class="third">

                                        <h3 class="mob">MOBILE NO <span class="ex"><?php echo $qtrs['mobile']?></span></h3>
                                        <h3 class="service">SERVICE TIME <span class="ex"><?php 
                                           $Time1 = substr($qtrs['time'], 0, 2);
                                           $Time2 = substr($qtrs['time'], -2);
                                        if ($Time1 > 12)
                                        {
                                            $ampm = 'PM'; 
                                            $Time1 = $Time1-12;

                                        }
                                        else
                                        {
                                            $Time1 = $Time1;
                                            $ampm = 'AM'; 
                                        }
                                    echo $Time1.' : '.$Time2.' '.$ampm;                
                                           ?></span></h3>

                                    </div>
                                    <div class="fourth">
                                        <h3 class="ven">FUNCTION VENUE <span class="ex"><?php echo $qtrs['functionvenue']?></span></h3>
                                        <h3 class="date">FUNCTION DATE <span class="ex"><?php 
                                        $FunctionDate = date_create($qtrs['functiondate']);
                                        if($FunctionDate !== false){
                                       echo     $FunctionDate = date_format($FunctionDate, 'd-m-Y');
                                            // Insert into DB
                                       } ?></span></h3>
                                    </div>
                                </div>


                                <!-- GRID -->
                                <div class="grid">
                                    <div>
                                        <h2 class="heading"> <?php 
            $query	=	"SELECT * From category where id =1;";
            $categoryresult		=	mysqli_query($conn,$query) or die(mysqli_error());
            $category = mysqli_fetch_assoc($categoryresult);
            echo $category['gujrati'];
            ?>
                                        </h2>
                                        <div class="img">
                                            <?php 

                    foreach ($obj as $key => $value) {
                        

                        $query	=	"SELECT * From subcategory where id =$value and cat_id=1;";
            $categoryresult		=	mysqli_query($conn,$query) or die(mysqli_error());
            while ($category = mysqli_fetch_assoc($categoryresult))
            {
               echo "<p><h2 color='black'>".$category['gujrati']."</h2></p>";
               $sum = $sum + $category['price'];

            }
                    }

            ?>



                                        </div>
                                    </div>
                                    <div>
                                        <h2 class="heading"> <?php 
            $query	=	"SELECT * From category where id =2;";
            $categoryresult		=	mysqli_query($conn,$query) or die(mysqli_error());
            $category = mysqli_fetch_assoc($categoryresult);
            echo $category['gujrati'];
            ?>
                                        </h2>
                                        <div class="img">
                                            <?php 

foreach ($obj as $key => $value) {
    

    $query	=	"SELECT * From subcategory where id =$value and cat_id=2;";
$categoryresult		=	mysqli_query($conn,$query) or die(mysqli_error());
while ($category = mysqli_fetch_assoc($categoryresult))
{
echo "<p><h2 color='black'>".$category['gujrati']."</h2></p>";
$sum = $sum + $category['price'];
}
}

?>
                                        </div>
                                    </div>
                                    <div>
                                        <h2 class="heading"> <?php 
            $query	=	"SELECT * From category where id =3;";
            $categoryresult		=	mysqli_query($conn,$query) or die(mysqli_error());
            $category = mysqli_fetch_assoc($categoryresult);
            echo $category['gujrati'];
            ?>
                                        </h2>
                                        <div class="img"><?php 

foreach ($obj as $key => $value) {
    

    $query	=	"SELECT * From subcategory where id =$value and cat_id=3;";
$categoryresult		=	mysqli_query($conn,$query) or die(mysqli_error());
while ($category = mysqli_fetch_assoc($categoryresult))
{
echo "<p><h2 color='black'>".$category['gujrati']."</h2></p>";
$sum = $sum + $category['price'];
}
}

?></div>
                                    </div>
                                    <div>
                                        <h2 class="heading"> <?php 
            $query	=	"SELECT * From category where id =4;";
            $categoryresult		=	mysqli_query($conn,$query) or die(mysqli_error());
            $category = mysqli_fetch_assoc($categoryresult);
            echo $category['gujrati'];
            ?>
                                        </h2>
                                        <div class="img"><?php 

foreach ($obj as $key => $value) {
    

    $query	=	"SELECT * From subcategory where id =$value and cat_id=4;";
$categoryresult		=	mysqli_query($conn,$query) or die(mysqli_error());
while ($category = mysqli_fetch_assoc($categoryresult))
{
echo "<p><h2 color='black'>".$category['gujrati']."</h2></p>";
$sum = $sum + $category['price'];
}
}

?></div>
                                    </div>
                                    <div>
                                        <h2 class="heading"> <?php 
            $query	=	"SELECT * From category where id =5;";
            $categoryresult		=	mysqli_query($conn,$query) or die(mysqli_error());
            $category = mysqli_fetch_assoc($categoryresult);
            echo $category['gujrati'];
            ?>
                                        </h2>
                                        <div class="img"><?php 

foreach ($obj as $key => $value) {
    

    $query	=	"SELECT * From subcategory where id =$value and cat_id=5;";
$categoryresult		=	mysqli_query($conn,$query) or die(mysqli_error());
while ($category = mysqli_fetch_assoc($categoryresult))
{
echo "<p><h2 color='black'>".$category['gujrati']."</h2></p>";
$sum = $sum + $category['price'];
}
}

?></div>
                                    </div>
                                    <div>
                                        <h2 class="heading"> <?php 
            $query	=	"SELECT * From category where id =6;";
            $categoryresult		=	mysqli_query($conn,$query) or die(mysqli_error());
            $category = mysqli_fetch_assoc($categoryresult);
            echo $category['gujrati'];
            ?>
                                        </h2>
                                        <div class="img"><?php 

foreach ($obj as $key => $value) {
    

    $query	=	"SELECT * From subcategory where id =$value and cat_id=6;";
$categoryresult		=	mysqli_query($conn,$query) or die(mysqli_error());
while ($category = mysqli_fetch_assoc($categoryresult))
{
echo "<p><h2 color='black'>".$category['gujrati']."</h2></p>";
$sum = $sum + $category['price'];
}
}

?></div>
                                    </div>
                                    <div>
                                        <h2 class="heading"> <?php 
            $query	=	"SELECT * From category where id =7;";
            $categoryresult		=	mysqli_query($conn,$query) or die(mysqli_error());
            $category = mysqli_fetch_assoc($categoryresult);
            echo $category['gujrati'];
            ?>
                                        </h2>
                                        <div class="img"><?php 

foreach ($obj as $key => $value) {
    

    $query	=	"SELECT * From subcategory where id =$value and cat_id=7;";
$categoryresult		=	mysqli_query($conn,$query) or die(mysqli_error());
while ($category = mysqli_fetch_assoc($categoryresult))
{
echo "<p><h2 color='black'>".$category['gujrati']."</h2></p>";
$sum = $sum + $category['price'];
}
}

?></div>
                                    </div>
                                    <div>
                                        <h2 class="heading"> <?php 
            $query	=	"SELECT * From category where id =8;";
            $categoryresult		=	mysqli_query($conn,$query) or die(mysqli_error());
            $category = mysqli_fetch_assoc($categoryresult);
            echo $category['gujrati'];
            ?>
                                        </h2>
                                        <div class="img"><?php 

foreach ($obj as $key => $value) {
    

    $query	=	"SELECT * From subcategory where id =$value and cat_id=8;";
$categoryresult		=	mysqli_query($conn,$query) or die(mysqli_error());
while ($category = mysqli_fetch_assoc($categoryresult))
{
echo "<p><h2 color='black'>".$category['gujrati']."</h2></p>";
$sum = $sum + $category['price'];
}
}

?></div>
                                    </div>
                                    <div>
                                        <h2 class="heading"> <?php 
            $query	=	"SELECT * From category where id =9;";
            $categoryresult		=	mysqli_query($conn,$query) or die(mysqli_error());
            $category = mysqli_fetch_assoc($categoryresult);
            echo $category['gujrati'];
            ?>
                                        </h2>
                                        <div class="img"><?php 

foreach ($obj as $key => $value) {
    

    $query	=	"SELECT * From subcategory where id =$value and cat_id=9;";
$categoryresult		=	mysqli_query($conn,$query) or die(mysqli_error());
while ($category = mysqli_fetch_assoc($categoryresult))
{
echo "<p><h2 color='black'>".$category['gujrati']."</h2></p>";
$sum = $sum + $category['price'];
}
}

?></div>
                                    </div>
                                    <div>
                                        <h2 class="heading"> <?php 
            $query	=	"SELECT * From category where id =10;";
            $categoryresult		=	mysqli_query($conn,$query) or die(mysqli_error());
            $category = mysqli_fetch_assoc($categoryresult);
            echo $category['gujrati'];
            ?>
                                        </h2>
                                        <div class="img"><?php 

foreach ($obj as $key => $value) {
    

    $query	=	"SELECT * From subcategory where id =$value and cat_id=10;";
$categoryresult		=	mysqli_query($conn,$query) or die(mysqli_error());
while ($category = mysqli_fetch_assoc($categoryresult))
{
echo "<p><h2 color='black'>".$category['gujrati']."</h2></p>";
$sum = $sum + $category['price'];
}
}

?></div>
                                    </div>
                                    <div>
                                        <h2 class="heading"> <?php 
            $query	=	"SELECT * From category where id =11;";
            $categoryresult		=	mysqli_query($conn,$query) or die(mysqli_error());
            $category = mysqli_fetch_assoc($categoryresult);
            echo $category['gujrati'];
            ?>
                                        </h2>
                                        <div class="img"><?php 

foreach ($obj as $key => $value) {
    

    $query	=	"SELECT * From subcategory where id =$value and cat_id=11;";
$categoryresult		=	mysqli_query($conn,$query) or die(mysqli_error());
while ($category = mysqli_fetch_assoc($categoryresult))
{
echo "<p><h2 color='black'>".$category['gujrati']."</h2></p>";
$sum = $sum + $category['price'];
}
}

?></div>
                                    </div>
                                    <div>
                                        <h2 class="heading"> <?php 
            $query	=	"SELECT * From category where id =12;";
            $categoryresult		=	mysqli_query($conn,$query) or die(mysqli_error());
            $category = mysqli_fetch_assoc($categoryresult);
            echo $category['gujrati'];
            ?>
                                        </h2>
                                        <div class="img"><?php 

foreach ($obj as $key => $value) {
    

    $query	=	"SELECT * From subcategory where id =$value and cat_id=12";
$categoryresult		=	mysqli_query($conn,$query) or die(mysqli_error());
while ($category = mysqli_fetch_assoc($categoryresult))
{
echo "<p><h2 color='black'>".$category['gujrati']."</h2></p>";
$sum = $sum + $category['price'];
}
}

?></div>
                                    </div>
                                </div>
                            </div>
                        </section>





                        <section class="charges">
                            

                                <style>
                                /* Create four equal columns that floats next to each other */
                                .column {
                                    float: left;
                                    
                                    padding: 0px;
                                    height: 25px;
                                   
                                    /* Should be removed. Only for demonstration */
                                }

                                /* Clear floats after the columns */
                                .row:after {
                                    content: "";
                                    display: table;
                                    clear: both;
                                }
                                span.ex {
  text-decoration:  underline;
}
                            </style>
                                </head>

                                <body>

                                    

                                    <div class="row">
                                        <div class="column" style="width: 30%;">
                                            <h3>Extra Charges: <span class="ex"><?php echo $qtrs['extracharges']?></span></h3>

                                        </div>
                                        <div class="column" style="width: 25%;">
                                        <h3>PR.o <span class="ex"><?php echo $qtrs['pro']?></span></h3>

                                        </div>
                                        <div class="column" style="width: 20%;">
                                        <h3>Boys <span class="ex"><?php echo $qtrs['boys']?></span></h3>

                                        </div>
                                        <div class="column" style="width: 25%;">
                                        <h3>Decoration <span class="ex"><?php echo $qtrs['decoration']?></span></h3>

                                        </div>
                                    </div>



                        </section>

                        <section class="last">
                            <div class="container">
                                <div class="top">
                                    <h3>Rate: <span class="ex"><?php echo $sum?></span></h3>

                                    <?php 
                                     $query = "Update quotation SET rate='$sum'  where id=$id";
                                    $rs	   =  mysqli_query($conn,$query) or die(mysqli_error());
                                    ?>
                                    <h3>No. Of Person <span class="ex"><?php echo $qtrs['noperson']?></span></h3>
                                </div>
                                <div class="bottom">
                                    <h3>Advance: <span class="ex"><?php echo $qtrs['advance']?></span></h3>
                                    <h3>
                                        Party Sign
                                    </h3>
                                </div>
                                <div class="right">
                                    <h3>Thanks</h3>
                                </div>
                            </div>
                        </section>
                    </section>
                    <img src="img/terms.jpg" height="1000px" width="775px" />

                </body>

                </html>

                <!-- PDF CONTENT END -->

            </page>
        </div>
    </div>

    <div class="responsive-message"></div>

    <style>
    /*
            Use the DejaVu Sans font for display and embedding in the PDF file.
            The standard PDF fonts have no support for Unicode characters.
        */
    .pdf-page {
        font-family: "DejaVu Sans", "Arial", sans-serif;
    }
    </style>

    <script>
    // Import DejaVu Sans font for embedding

    // NOTE: Only required if the Kendo UI stylesheets are loaded
    // from a different origin, e.g. cdn.kendostatic.com
    kendo.pdf.defineFont({
        "DejaVu Sans": "https://kendo.cdn.telerik.com/2016.2.607/styles/fonts/DejaVu/DejaVuSans.ttf",
        "DejaVu Sans|Bold": "https://kendo.cdn.telerik.com/2016.2.607/styles/fonts/DejaVu/DejaVuSans-Bold.ttf",
        "DejaVu Sans|Bold|Italic": "https://kendo.cdn.telerik.com/2016.2.607/styles/fonts/DejaVu/DejaVuSans-Oblique.ttf",
        "DejaVu Sans|Italic": "https://kendo.cdn.telerik.com/2016.2.607/styles/fonts/DejaVu/DejaVuSans-Oblique.ttf"
    });
    </script>

    <!-- Load Pako ZLIB library to enable PDF compression -->
    <!-- <script src="../content/shared/js/pako.min.js"></script> -->

    <script>
    function getPDF(selector) {
        kendo.drawing.drawDOM($(selector)).then(function(group) {
            kendo.drawing.pdf.saveAs(group, 'testing.pdf');
        });
    }
    </script>


</div>

<script type="text/javascript">
$('#pdf-generate').click(function() {
    getPDF('.pdf-page');
})
</script>