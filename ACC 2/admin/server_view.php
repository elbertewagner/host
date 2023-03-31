<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="css/main.css">
    <title>Edit Server</title>
</head>

<body>


    <?php include_once('includes/header.php');

    include '../config.php';
    
if (isset($_GET['id'])) {
    $gid = $_GET['id'];
    $q = "SELECT * FROM `servers` WHERE `server_id` = '$gid'";
    $fire = mysqli_query($conn, $q);

    $d = mysqli_fetch_assoc($fire);

    $name = $d['HostName'];
    $myIP = $d['IP'];
    $type = $d['Type'];
    $user = $d['user'];
    $password = $d['password'];
}
else{
     $name="host";
    
}

    if (isset($_POST['update'])) {

        $uname = $_POST['HostName'];
        $uuser = $_POST['user'];
        $upassword = $_POST['password'];
        $uflag = $_POST['Flag'];
         $ip= $_POST['IP'];
        $uconfig = mysqli_real_escape_string($conn, ($_POST['config']));

        $utype = $_POST['Type'];


        $update = "UPDATE `servers` SET `HostName`='$uname', `user`='$uuser', `password`='$upassword', `Type`='$utype', `IP`='$ip' WHERE `server_id`='$gid' ";

        $query = mysqli_query($conn, $update);
        if ($query) {
            echo "<script>window.history.back(); window.location.reload();</script>";
            echo "Sucess";
            header('Location:../admin/dashboard.php?status=success&message=Server added succesfully');
        } else {
            echo "<script>window.history.back(); window.location.reload();</script>";
            echo "Failed : " . mysqli_error($conn);
        }
    }

    ?>

    <!-- content -->

    <div class="row mx-5">

        <div class="col bg-light rounded p-3 m-3">

            <div id="alert">

            </div>

            <h4 class="mx-3 mb-3 text-secondary">Edit Servers</h4>


            <form method="post" action="" role="form">

                <div class="mb-3">
                    <label for="HostName" class="form-label">Host Name</label>
                    <input type="text" class="form-control" id="HostName" name="HostName" value="<?php echo $name ?>">
                </div>
                
                <div class=" mb-3">
                    <label for="user" class="form-label">User Name</label>
                    <input type="text" class="form-control" id="user" name="user" value="<?php echo $user ?>">
                </div>

                <div class=" mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control" id="password" name="password" value="<?php echo $password ?>">
                </div>


                <div class=" mb-3">
                    <label for="IP" class="form-label">IP</label>
                    <textarea class="form-control" id="IP" name="IP" required><?php echo $myIP ?></textarea>
                </div>



                <div class="mb-3 mx-5">
                    <label for="Type" class="form-label">Server Type</label>
                    <select class="form-select" aria-label="Default select example" id="Type" name="Type">

                        <?php
                        if ($type == "1") {
                        ?>

                            <option value="1" selected>Free Server</option>
                            <option value="2">Paid Server</option>

                        <?php
                        } else {
                        ?>
                            <option value="1">Free Server</option>
                            <option value="2" selected>Paid Server</option>

                        <?php

                        }
                        ?>

                    </select>

                </div>


                <div class="text-center" id="subBtn">
                    <input type="submit" class="btn btn-primary" name="update" value="Update" />
                </div>
            </form>
        </div>

        <?php include_once('includes/footer.php'); ?>
</body>

</html>