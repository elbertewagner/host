<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="css/main.css">
    <title>Admob ADS</title>
</head>

<body>

    <?php include_once('includes/header.php');
    include '../config.php';

    $q = "SELECT * FROM `admob`";
    $fire = mysqli_query($conn, $q);

    $data = mysqli_fetch_assoc($fire);

    $app_id = $data['app_id'];
    $banner = $data['admob_banner'];
    $interstitial = $data['admob_inter'];
    $native = $data['admob_native'];
    $app_open = $data['admob_openads'];
    $active = $data['active'];
    $reward = $data['admob_reward'];




    if (isset($_POST['update'])) {

        $uappid =  $_POST['app_id'];
        $ubanner = $_POST['admob_banner'];
        $uinterstitial = $_POST['admob_inter'];
        $unative = $_POST['admob_native'];
        $uappopen = $_POST['admob_openads'];
        $uactive = $_POST['active'];
        $ureward = $_POST['admob_reward'];


/* $query = "UPDATE `admob` SET `app_id`='$uappid', `admob_banner`='$ubanner', `admob_inter`='$uinterstitial', `admob_native`='$unative', `admob_openads`='$uappopen', `active`='$uactive',`admob_reward`='$ureward' WHERE `type`= 1";*/

$query = "UPDATE `admob` SET `app_id`='$uappid',`admob_banner`='$ubanner',`admob_inter`='$uinterstitial',`admob_native`='$unative',`admob_openads`='$uappopen',`active`='$uactive',`admob_reward`='$ureward' WHERE `type`='1'";
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
                    <label for="app_id" class="form-label">App ID</label>
                    <input type="text" class="form-control" id="app_id" name="app_id" value="<?php echo $app_id ?>">
                </div>


                <div class="mb-3">
                    <label for="admob_banner" class="form-label">Banner</label>
                    <input type="text" class="form-control" id="admob_banner" name="admob_banner" value="<?php echo $banner ?>">
                </div>

                <div class="mb-3">
                    <label for="admob_inter" class="form-label">Interstitial</label>
                    <input type="text" class="form-control" id="admob_inter" name="admob_inter" value="<?php echo $interstitial ?>">
                </div>



                <div class="mb-3">
                    <label for="admob_native" class="form-label">Native</label>
                    <input type="text" class="form-control" id="admob_native" name="admob_native" value="<?php echo $native ?>">
                </div>
                
                
                <div class="mb-3">
                    <label for="admob_openads" class="form-label">App Open</label>
                    <input type="text" class="form-control" id="admob_openads" name="admob_openads" value="<?php echo $app_open ?>">
                </div>
               <div class="mb-3">
                    <label for="admob_reward" class="form-label">Reward</label>
                    <input type="text" class="form-control" id="admob_reward" name="admob_reward" value="<?php echo $reward ?>">
                </div>

                <div class="mb-3">
                    <label for="active" class="form-label">Active</label>
                    <select class="form-select" aria-label="Default select example" id="active" name="active">

                        <?php
                        if ($active == "true") {
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