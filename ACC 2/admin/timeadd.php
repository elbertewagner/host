<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="css/main.css">
    <title>Timer</title>
</head>

<body>

    <?php include_once('includes/header.php');
    include '../config.php';

    $q = "SELECT * FROM `timer_add`";
    $fire = mysqli_query($conn, $q);

    $data = mysqli_fetch_assoc($fire);

    $app_id = $data['timevalue'];
 

    if (isset($_POST['update'])) {

        $uappid =  $_POST['timevalue'];
       

        $query = "UPDATE `timer_add` SET `timevalue`='$uappid'";
        $update = mysqli_query($conn, $query);

        if ($update) {
            echo "<script>window.history.back(); window.location.reload();</script>";
        } else {
            echo "<script>window.history.back(); window.location.reload();</script>";
        }
    }

    ?>

    <!-- content -->
    <div class="row m-3">

        <div class="col bg-light rounded p-3 m-3">

            <div id="alert">

            </div>

            <form action="" method="post" class="mt-3">


                <div class="mb-3">
                    <label for="timevalue" class="form-label">Timer (timer value * 30 per miniute) if value is zero then unlimted time</label>
                    <input type="text" class="form-control" id="timevalue" name="timevalue" value="<?php echo $app_id ?>">
                </div>


                <div class="text-center" id="subBtn">
                    <input type="submit" class="btn btn-primary" name="update" />
                </div>

            </form>

        </div>
    </div>



    <?php include_once('includes/footer.php');
    ?>
</body>

</html>