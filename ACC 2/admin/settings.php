<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="css/main.css">
    <title>Settings</title>
</head>

<body>

    <?php include_once('includes/header.php');
    include '../config.php';

    $q = "SELECT * FROM `tbl_update` WHERE `id` = 1";
    $fire = mysqli_query($conn, $q);

    $data = mysqli_fetch_assoc($fire);

    $title = $data['version'];
    $dis = $data['description'];
    $link = $data['url'];
    $showdialog = $data['dialogshow'];
      $canceldialog = $data['version_name'];






    if (isset($_POST['update'])) {

        $utitle =  $_POST['version'];
        $udis = $_POST['description'];
        $ulink = $_POST['url'];
        $ushowdialog = $_POST['dialogshow'];
       $ucanceldialog = $_POST['version_name'];


        $query = "UPDATE `tbl_update` SET `version`='$utitle',`description`='$udis',`url`='$ulink',`dialogshow`='$ushowdialog', `version_name`='$ucanceldialog' WHERE `id`=1";
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
                    <label for="version" class="form-label">App Version Code</label>
                    <input type="text" class="form-control" id="version" name="version" value="<?php echo $title ?>">
                </div>


                <div class="mb-3">
                    <label for="description" class="form-label">Dialog description</label>
                    <input type="text" class="form-control" id="description" name="description" value="<?php echo $dis ?>">
                </div>

                <div class="mb-3">
                    <label for="url" class="form-label">Dialog App URL</label>
                    <input type="text" class="form-control" id="url" name="url" value="<?php echo $link ?>">
                </div>



                <div class="mb-3">
                    <label for="dialogshow" class="form-label">Show Dialog (On/Off)</label>
                    <select class="form-select" aria-label="Default select example" id="dialogshow" name="dialogshow">

                        <?php
                        if ($showdialog == "true") {
                        ?>

                            <option value="false">Off</option>
                            <option value="true" selected>On</option>

                        <?php
                        } else {
                        ?>
                            <option value="false" selected>Off</option>
                            <option value="true">On</option>

                        <?php

                        }

                        ?>


                    </select>
                </div>
 <div class="mb-3">
                    <label for="version_name" class="form-label">cancelable Dialog</label>
                    <select class="form-select" aria-label="Default select example" id="version_name" name="version_name">

                        <?php
                        if ($canceldialog == "true") {
                        ?>

                            <option value="false">Off</option>
                            <option value="true" selected>On</option>

                        <?php
                        } else {
                        ?>
                            <option value="false" selected>Off</option>
                            <option value="true">On</option>

                        <?php

                        }

                        ?>


                    </select>
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