<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('conn.php');
    $userid = $_POST['uid'];
    $pmm = $_POST['pm'];
    $dmm = $_POST['dm'];
    $tmm = $_POST['tm'];
    
    $dmp = $dmm-$tmm;
    $pmp = $pmm+$tmm;

if($tmm>$dmm && $tmm <0 && $tmm=''){
    echo "<script>alert('error');</script>";
}
else{


    $query = "UPDATE `employeemaster` SET `PaidAmount`='$pmp',`DueAmount`='$dmp' WHERE Id = '$userid' ";

    $upd = mysqli_query($conn,$query);

    header('location: index.php');
}

    ?>
    
</body>
</html>