<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        body{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
</head>
<body>
<?php
  include('conn.php');
        $uid = $_GET['id'];
         $q = " select * from employeemaster where id = $uid ";
       
        $uresult = mysqli_query($conn,$q);
        $urow = mysqli_fetch_assoc($uresult);
        if($urow){
            ?>
            <center><h1><b>Pay Amount</b></h1></center>
            <form action="paid.php" method="POST" onload="return check1()" class="form-control">
                    <input type="hidden" name="uid" value="<?=$urow['Id']?>" class="form-control">
          Employee:  <input type="text" value="<?=$urow['FirstName']?>" name="fn" readonly class="form-control">
          Amount:  <input type="text" value="<?=$urow['TotalAmount']?>" name="am" readonly class="form-control">
          Paid:  <input type="text" value="<?=$urow['PaidAmount']?>" name="pm" id="pm" readonly class="form-control">
          Due:  <input type="text" value="<?=$urow['DueAmount']?>" name="dm" id="dm" readonly class="form-control">
          Amount To Be Paid:  <input type="number" step="0.01" class="form-control" placeholder="Enter The Amount You want to Pay"  name="tm" id="tm">
   

<button type="submit" value="Pay" id="bt" onclick=" return check()" class="invalid-btn">Pay</button>
    </form><?php }?>
<script>
    function check(){
   var x = document.getElementById("tm").value;
   if(x < 0 || x =="" || x > <?=$urow['DueAmount']?>){
    alert("Please Pay Correct Amount");
    return false;
   }
}

</script>
<script>
    $(document).ready(function() {
    var val = $("#dm").val();

  
  if (val=='0') {
    $("#bt").attr("disabled", true);
  } 
});
</script>
           
</body>
</html>