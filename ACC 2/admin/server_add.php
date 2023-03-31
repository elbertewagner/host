<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="css/main.css">
    <title>Add Server</title>
</head>

<body>


    <?php include_once('includes/header.php'); 
    
    
    include '../config.php';


    if (isset($_POST['insert'])) {

        $name = $_POST['HostName'];
        $user = $_POST['user'];
        $password = $_POST['password'];
        $ip=$_POST['IP'];
        $type = $_POST['Type'];

        $config = mysqli_real_escape_string($conn, ($_POST['config']));



        $update = "INSERT INTO `servers` ( `HostName`, `Flag`, `IP`, `ServerStatus`, `Type`, `user`, `password`) 
        VALUES ('$name','$name','$ip','1','$type','$user','$password')";

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

            <h4 class="mx-3 mb-3 text-secondary">Add Servers</h4>


            <form method="post" role="form">

                <div class="mb-3">
                    <label for="HostName" class="form-label">Host Name</label>
                    <input type="text" class="form-control" id="HostName" name="HostName" placeholder="Enter Host Name" required>
                </div>


                <div class="mb-3">
                    <label for="user" class="form-label">User Name</label>
                    <input type="text" class="form-control" id="user" name="user" placeholder="Enter Username" value="" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control" id="password" name="password" placeholder="Enter Password" value="" required>
                </div>


              
                <div class="mb-3">
                    <label for="IP" class="form-label">IP</label>
                    <input type="text" class="form-control" id="IP" name="IP" placeholder="Enter IP" value="" required>
                </div>
                      <div class="mb-3 mx-5">
                    <label for="Type" class="form-label">Server Type</label>
                    <select class="form-select" aria-label="Default select example" id="Type" name="Type">
                        <option value="1" selected>Free Server</option>
                        <option value="2">Paid Server</option>
                    </select>

                </div>

                <div class="text-center" id="subBtn">
                    <input type="submit" class="btn btn-primary" name="insert"/>
                </div>

        </div>

        <?php include_once('includes/footer.php'); ?>
</body>

</html>
