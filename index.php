<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay</title>
</head>
<body>
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
</head>
<body>
<table cellpadding="7px" border=" 2px" class="table">
    <thead>
    
   
    <th>Employee Name</th>
    <th>Amount</th>
    <th>Paid</th>
    <th>Due</th>
    <th>Pay</th>
    
</thead>  
    <?php
    include('conn.php');

    $emp = "select * from employeemaster";
    $dataa = mysqli_query($conn,$emp) or die("Lmao!!");

    if (mysqli_num_rows($dataa)>0){
        while($data_r=mysqli_fetch_assoc($dataa)){
            ?>
            <tr>
       
            
            <td><?php echo $data_r['FirstName'];?></td>
            <td><?php echo $data_r['TotalAmount'];?></td>
            <td><?php echo $data_r['PaidAmount'];?></td>
            <td><?php echo $data_r['DueAmount'];?></td>
            <td><a href="pay.php?id=<?= $data_r['Id']?>">Pay</a></td>
          
        </tr>
        <?php
        }
    }
?>
</table>
<br>

</table>
</body>
</html>

</body>
</html>