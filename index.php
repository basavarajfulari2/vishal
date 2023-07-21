
<?php
if(isset($_POST['submit']))
{
     $var1= $_POST['product'];
     $var2= $_POST['productid'];
     $var3= $_POST['rate'];
     $var4= $_POST['barcodeq'];

    $conn1=new mysqli("localhost","root","","mydata1");
    if($conn1->connect_error)
    {
        die('conneciton is failed' .$conn1->connect_error);
    }
else
{
    $stmt=$conn1->prepare("insert into barcode(product,productid,rate,barcodeq)values(?,?,?,?)");

    $stmt->bind_param("ssss",$var1,$var2,$var3,$var4);
    $stmt->execute();
echo "successfully";
$stmt->close();
$conn1->close();
}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP Barcode Generator Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body style="background-image: url('https://media.gettyimages.com/id/157507492/photo/scanning-a-bar-code.jpg?s=612x612&w=0&k=20&c=jQwA8MbxKOByGREgVw9Zx1Grxa31DV7uRDXsU97-Kg0='); background-size: cover; background-repeat: no-repeat;">
<div class="container">
  <div style="margin: 10%;">

   <u> <center> <h2 class="text-center"padding:15px; style="color:violet">PHP BARCODE GENERATOR </h2> </center> </u>
    <form class="form-horizontal" method="post" action="barcode.php" target="_blank">
    <div class="form-group">
      <Form action="index.php" method="post">

      <label class="control-label col-sm-2" for="product" style="color:blue;">Product:</label> 
      <div class="col-sm-10">
        <input autocomplete="OFF" type="text"  class="form-control" id="product" name="product" placeholder="Enter the Product" required="">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="product_id" style="color:blue">Product ID:</label>
      <div class="col-sm-10">
        <input autocomplete="OFF" type="text" class="form-control" id="productid" name="productid" placeholder="Enter the Product_id" required="">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="rate" style="color:blue"> Product Rate</label>
      <div class="col-sm-10">          
        <input autocomplete="OFF" type="text" class="form-control" id="rate"  name="rate" placeholder="Enter the Product Rate"required="">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="print_qty" style="color:blue">Barcode Quantity</label>
      <div class="col-sm-10">          
        <input autocomplete="OFF" type="print_qty" class="form-control" id=""  name="barcodeq" placeholder="Enter the barcode quantity"required="">
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" name="submit" class="btn btn-default" >
      </div>

    </div>
  </form>
</Form>
  </div>
</div>

</body>
</html>

